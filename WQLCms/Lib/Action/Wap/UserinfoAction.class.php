<?php
class UserinfoAction extends WapAction{
	public function _initialize() {
		parent::_initialize();
		if (!$this->wecha_id){
			$this->error('您无权访问','');
		}
	}
	public function index(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"icroMessenger")) {
			//echo '此功能只能在微信浏览器中使用';exit;
		}
		$cardid=intval($this->_get('cardid'));
		//yanzhengsms
		$status=M('reply_info')->where(array('token'=>$this->_get('token'),'infotype'=>'membercard_nouse'))->find();
		
		$this->assign('status',$status);
		//$sql=D('Userinfo');
		$card = D('Member_card_create'); 
		$data['wecha_id']=$this->_get('wecha_id');
		$data['token']=$this->_get('token');
		//
		$cardInfoRow['wecha_id']=$this->_get('wecha_id');
		$cardInfoRow['token']=$this->_get('token');
		$cardInfoRow['cardid']=$this->_get('cardid');
		$cardinfo=$card->where($cardInfoRow)->find(); //是否领取过
		$this->assign('cardInfo',$cardinfo);
		//
		$member_card_set_db=M('Member_card_set');
		$thisCard=$member_card_set_db->where(array('token'=>$this->_get('token'),'id'=>intval($_GET['cardid'])))->find();
		if (!$thisCard&&$cardid){
			exit();
		}
		//
		$sql=D('Userinfo');
		$userinfo=$sql->where($data)->find();
		if($thisCard['memberinfo']!=false){
			$img=$thisCard['memberinfo'];			
		}else{
			$img='tpl/Wap/default/common/images/userinfo/fans.jpg';
		}
		$this->assign('cardnum',$cardinfo['number']);
		$this->assign('homepic',$img);
		
		$this->assign('info',$userinfo);
		$this->assign('cardid',$cardid);
		//redirect url
		if (isset($_GET['redirect'])){
			$urlinfo=explode('|',$_GET['redirect']);
			$parmArr=explode(',',$urlinfo[1]);
			$parms=array('token'=>$cardInfoRow['token'],'wecha_id'=>$cardInfoRow['wecha_id']);
			if ($parmArr){
				foreach ($parmArr as $pa){
					$pas=explode(':',$pa);
					$parms[$pas[0]]=$pas[1];
				}
			}
			$redirectUrl=U($urlinfo[0],$parms);
			$this->assign('redirectUrl',$redirectUrl);
		}
		$thisCard=$member_card_set_db->where(array('token'=>$this->_get('token'),'id'=>intval($_GET['cardid'])))->find();
		
		//
		if(IS_POST){
			//如果有post提交，说明是修改
			$data['wechaname'] = $this->_post('wechaname');
			$data['tel']       = $this->_post('tel');
			if(empty($data['tel'])){
				$this->error("手机号必填。");exit;
			}
	        
			//校验手机验证码
			if($status['status']==1){
			$mobile = $data['tel'];
			$verifyCode = $this->_post('verifyCode');
			$randCode = $_SESSION[$mobile];
			if(empty($verifyCode)){
				echo "5";exit;
			}
			if($verifyCode!=$randCode){
				echo "5";exit;
			}
			}
		
			$data['truename']  = $this->_post('truename');			
			$data['qq']  = $this->_post('qq');
			$data['sex'] = $this->_post('sex');
			$data['bornyear'] = $this->_post('bornyear');
			$data['bornmonth'] = $this->_post('bornmonth');
			$data['bornday'] = $this->_post('bornday');
			$data['portrait'] = $this->_post('portrait');
			
 			//如果会员卡不为空[更新]
 			//写入两个表 Userinfo Member_card_create 
 			if ($cardid==0){
 				
 				$infoWhere=array();
 				$infoWhere['wecha_id']=$data['wecha_id'];
 				$infoWhere['token']=$data['token'];
 				$userInfoExist=M('Userinfo')->where($infoWhere)->find();
 				if ($userInfoExist){
 					M('Userinfo')->where($infoWhere)->save($data);
 				}else {
 					M('Userinfo')->add($data);
 				}
 				S('fans_'.$this->token.'_'.$this->wecha_id,NULL);
 				echo 1;exit;
 			}else {
 				if($cardinfo){ //如果Member_card_create 不为空，说明领过卡，但是可以修改会员信息
 					$update['wecha_id']=$data['wecha_id'];
 					$update['token']=$data['token'];
 					unset($data['wecha_id']);
 					unset($data['token']);
 					if(M('Userinfo')->where($update)->save($data)){
 						S('fans_'.$this->token.'_'.$this->wecha_id,NULL);
 						echo 1;exit;
 					}else{
 						echo 0;exit;
 					}
 				}else{
 					Sms::sendSms($this->token,'有新的会员领了会员卡');
 					$card=M('Member_card_create')->field('id,number')->where("token='".$this->_get('token')."' and cardid=".intval($_POST['cardid'])." and wecha_id = ''")->order('id ASC')->find();
 					//
 					$userinfo_db=M('Userinfo');
 					$userInfos=$userinfo_db->where(array('token'=>$this->_get('token'),'wecha_id'=>$this->_get('wecha_id')))->select();
 					$userScore=0;
 					if ($userInfos){
 						$userScore=intval($userInfos[0]['total_score']);
 						$userInfo=$userInfos[0];
 					}
 					if(!$card){
 						echo 3;exit;
 					}else {
 						//
 						if (intval($thisCard['miniscore'])==0||$userScore>intval($thisCard['minscore'])){
 							M('Member_card_create')->where(array('token'=>$this->_get('token'),'wecha_id'=>$this->_get('wecha_id')))->delete();
 							$card_up=M('Member_card_create')->where(array('id'=>$card['id']))->save(array('wecha_id'=>$this->_get('wecha_id')));
 							$data['getcardtime']=time();
 							if ($userinfo){
 								$update['wecha_id']=$data['wecha_id'];
 								$update['token']=$data['token'];
 								M('Userinfo')->where($update)->save($data);
 							}else {
 								M('Userinfo')->data($data)->add();
 							}
 							S('fans_'.$this->token.'_'.$this->wecha_id,NULL);
 							echo 2;exit;
 						}else {
 							echo 4;exit;
 						}
 					}

 				} //post
 			}
		}else {
			$this->display();	
		}

		
    } 
	
	public function sendVerifyCode(){
		//获取接收手机号
		$mobile = $this->_get("mobile");
		
		//验证手机号码
		$isMobile = $this->_isMobile($mobile);
		if(!$isMobile){
			exit("请输入正确的手机号码");
		}
		
		//生成六位随机数字
		$randCode = rand(100000,999999);
		
		$smsapi_senturl='http://api.sms.cn/mtutf8/';//C('sms_url');
		$uid="weiqianlong";//C('uid');
		$pwd="weiqianlong";//C('pwd');
		$mobile=$mobile;
		$content="您的手机验证码是：".$randCode;
		$mobileids=C('mobileids');

		$return=$this->_send_SMS($smsapi_senturl,$uid,$pwd,$mobile,$content,$mobileids);
		
		//将验证码放入Session中
		$_SESSION[$mobile] = $randCode;
		exit("发送成功");
	}
	
	/**
  * 验证手机号码
  * @param $mobile 需要验证的手机号码
  */
	private function _isMobile($mobile){
		return preg_match('#^13[\d]{9}$|14^[0-9]\d{8}|^15[0-9]\d{8}$|^18[0-9]\d{8}$#', $mobile);
	}
	
	private function _send_SMS($http,$uid,$pwd,$mobile,$content,$mobileids,$time='',$mid='')
	{
 
		$data = array
		(
		'uid'=>$uid, //用户账号
		'pwd'=>md5($pwd.$uid), //MD5位32密码,密码和用户名拼接字符
		'mobile'=>$mobile, //号码
		'content'=>$content, //内容
		'mobileids'=>$mobileids,
		'time'=>$time, //定时发送
		);
		$re= $this->_postSMS($http,$data); //POST方式提交
		return $re;
	}
	
	private function _postSMS($url,$data='')
	{
		$port="";
		$post="";
		$row = parse_url($url);
		$host = $row['host'];
		$port = $row['port'] ? $row['port']:80;
		$file = $row['path'];
		while (list($k,$v) = each($data))
		{
			$post .= rawurlencode($k)."=".rawurlencode($v)."&"; //转URL标准码
		}
		$post = substr( $post , 0 , -1 );
		$len = strlen($post);
		$fp = @fsockopen( $host ,$port, $errno, $errstr, 10);
		if (!$fp) {
			return "$errstr ($errno)\n";
		} else {
			$receive = '';
			$out = "POST $file HTTP/1.1\r\n";
			$out .= "Host: $host\r\n";
			$out .= "Content-type: application/x-www-form-urlencoded\r\n";
			$out .= "Connection: Close\r\n";
			$out .= "Content-Length: $len\r\n\r\n";
			$out .= $post;
			fwrite($fp, $out);
			while (!feof($fp)) {
				$receive .= fgets($fp, 128);
			}
			fclose($fp);
			$receive = explode("\r\n\r\n",$receive);
			unset($receive[0]);
			return implode("",$receive);
		}
	}
	
	//end function index
} // end class UserinfoAction

?>