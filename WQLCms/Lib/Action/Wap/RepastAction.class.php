<?php
class RepastAction extends WapAction{
    public $token;
    public $wecha_id = 'gh_aab60b4c5a39';
    public $session_dish_info;
    public $session_dish_user;
    public $_cid = 0;
    public function _initialize(){
        parent :: _initialize();
        $agent = $_SERVER['HTTP_USER_AGENT'];
        if (!strpos($agent, "MicroMessenger")){
        }
        $this -> token = isset($_REQUEST['token']) ? $_REQUEST['token'] : session('token');
        $this -> assign('token', $this -> token);
        $this -> wecha_id = isset($_REQUEST['wecha_id']) ? $_REQUEST['wecha_id'] : '';
        if (!$this -> wecha_id){
            $this -> wecha_id = '';
        }
			$where['token']=$this->token;
		$kefu=M('Kefu')->where($where)->find();
		$this->assign('kefu',$kefu);
        $this -> assign('wecha_id', $this -> wecha_id);
        $this -> _cid = $_SESSION["session_company_{$this->token}"];
        $this -> assign('cid', $this -> _cid);
        $this -> session_dish_info = "session_dish_{$this->_cid}_info_{$this->token}";
        $this -> session_dish_user = "session_dish_{$this->_cid}_user_{$this->token}";
        $menu = $this -> getDishMenu();
        $count = count($menu);
        $this -> assign('totalDishCount', $count);
    }
    public function index(){
        $company = M('Company') -> where(array('token' => $this -> token,'display'=>1)) -> select();
        if (count($company) == 1){
            $this -> redirect(U('Repast/select', array('token' => $this -> token, 'wecha_id' => $this -> wecha_id, 'cid' => $company[0]['id'])));
        }
        $this -> assign('company', $company);
        $this -> assign('metaTitle', '餐厅分布');
        $this -> display();
    }
    public function select(){
        $istakeaway = 0;
        $cid = isset($_GET['cid']) ? intval($_GET['cid']) : 0;
        if ($company = M('Company') -> where(array('token' => $this -> token, 'id' => $cid)) -> find()){
            $_SESSION["session_company_{$this->token}"] = $cid;
        }else{
            $this -> redirect(U('Repast/index', array('token' => $this -> token, 'wecha_id' => $this -> wecha_id)));
        }
        if ($dishCompany = M('Dish_company') -> where(array('cid' => $cid)) -> find()){
            $istakeaway = $dishCompany['istakeaway'];
        }
        $this -> assign('istakeaway', $istakeaway);
        $this -> assign('metaTitle', '点餐选择');
        $this -> display();
    }
    public function virtual(){
        $cid = isset($_GET['cid']) ? intval($_GET['cid']) : 0;
        $company = M('Company') -> where(array('token' => $this -> token, 'id' => $cid)) -> find();
        $this -> assign('company', $company);
        $this -> assign('metaTitle', '餐厅介绍');
        $this -> display();
    }
    public function selectTable(){
        $thisUser = M('Userinfo') -> where(array('token' => $this -> token, 'wecha_id' => $this -> wecha_id)) -> find();
        $this -> assign('thisUser', $thisUser);
        $takeaway = isset($_GET['takeaway']) ? intval($_GET['takeaway']) : 0;
        $_SESSION[$this -> session_dish_user] = null;
        unset($_SESSION[$this -> session_dish_user]);
        $time = time();
        $orderTable = M('Dish_table') -> where(array('reservetime' => array('elt', $time + 2 * 3600), 'reservetime' => array('egt', $time - 2 * 3600), 'cid' => $this -> _cid, 'isuse' => 0)) -> select();
        $tids = array();
        foreach ($orderTable as $row){
            $tids[] = $row['tableid'];
        }
        if ($tids){
            $table = M('Dining_table') -> where(array('id' => array('not in', $tids), 'cid' => $this -> _cid)) -> select();
        }else{
            $table = M('Dining_table') -> where(array('cid' => $this -> _cid)) -> select();
        }
        $dates = array();
        $dates[] = array('k' => date("Y-m-d"), 'v' => date("m月d日"));
        for ($i = 1; $i <= 90; $i ++){
            $dates[] = array('k' => date("Y-m-d", strtotime("+{$i} days")), 'v' => date("m月d日", strtotime("+{$i} days")));
        }
        $hours = array();
        for ($i = 0; $i < 24; $i ++){
            $hours[] = array('k' => $i, 'v' => $i . "时");
        }
        $seconds = array();
        for ($i = 0; $i < 60; $i ++){
            $seconds[] = array('k' => $i, 'v' => $i . "分");
        }
        $this -> assign('dates', $dates);
        $this -> assign('seconds', $seconds);
        $this -> assign('hours', $hours);
        $this -> assign('takeaway', $takeaway);
        $this -> assign('tables', $table);
        $this -> assign('metaTitle', '填写个人信息');
        $this -> assign('time', date("Y-m-d H:i:s"));
        $this -> display();
    }
    public function getTable(){
        $date = isset($_POST['redate']) ? htmlspecialchars($_POST['redate']) : '';
        $hour = isset($_POST['rehour']) ? htmlspecialchars($_POST['rehour']) : '';
        $second = isset($_POST['resecond']) ? htmlspecialchars($_POST['resecond']) : '';
        $time = strtotime($date . ' ' . $hour . ':' . $second . ':00');
        $orderTable = M('Dish_table') -> where(array('reservetime' => array('elt', $time + 2 * 3600), 'reservetime' => array('egt', $time - 2 * 3600), 'cid' => $this -> _cid, 'isuse' => 0)) -> select();
        $tids = array();
        foreach ($orderTable as $row){
            $tids[] = $row['tableid'];
        }
        if ($tids){
            $table = M('Dining_table') -> where(array('id' => array('not in', $tids), 'cid' => $this -> _cid)) -> select();
        }else{
            $table = M('Dining_table') -> where(array('cid' => $this -> _cid)) -> select();
        }
        exit(json_encode($table));
    }
    public function saveUser(){
        $takeaway = isset($_POST['takeaway']) ? intval($_POST['takeaway']) : 0;
        $tel = $table = $address = $des = $name = '';
        $sex = $nums = 1;
        $price = 0;
        if ($takeaway == 1){
            $dishCompany = M('Dish_company') -> where(array('cid' => $this -> _cid)) -> find();
            if (isset($dishCompany['istakeaway']) && $dishCompany['istakeaway']) $price = $dishCompany['price'];
        }
        if ($takeaway != 2){
            $tel = isset($_POST['tel']) ? htmlspecialchars($_POST['tel']) : '';
            if (empty($tel)){
                exit(json_encode(array('success' => 0, 'msg' => '电话号码不能为空')));
            }
            $name = isset($_POST['guest_name']) ? $_POST['guest_name'] : '';
            if (empty($name)){
                exit(json_encode(array('success' => 0, 'msg' => '姓名不能为空')));
            }
            $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';
            $sex = isset($_POST['sex']) ? intval($_POST['sex']) : 0;
            $date = isset($_POST['redate']) ? htmlspecialchars($_POST['redate']) : '';
            $hour = isset($_POST['rehour']) ? htmlspecialchars($_POST['rehour']) : '';
            $second = isset($_POST['resecond']) ? htmlspecialchars($_POST['resecond']) : '';
            $reservetime = strtotime($date . ' ' . $hour . ':' . $second . ':00');
            if ($reservetime < time()){
                exit(json_encode(array('success' => 0, 'msg' => '预约用餐时间不可以小于当前时间')));
            }
            $nums = isset($_POST['nums']) ? intval($_POST['nums']) : 1;
        }else{
            $reservetime = time() + 600;
        }
        $table = isset($_POST['table']) ? intval($_POST['table']) : 0;
        $des = isset($_POST['remark']) ? htmlspecialchars($_POST['remark']) : '';
        $data = array('tableid' => $table, 'tel' => $tel, 'takeaway' => $takeaway, 'address' => $address, 'name' => $name, 'sex' => $sex, 'reservetime' => $reservetime, 'price' => $price, 'nums' => $nums, 'des' => $des);
        $_SESSION[$this -> session_dish_user] = serialize($data);
        exit(json_encode(array('success' => 1, 'msg' => 'ok')));
    }
    public function dish(){
        $company = M('Company') -> where(array('token' => $this -> token, 'id' => $this -> _cid)) -> find();
        $userInfo = unserialize($_SESSION[$this -> session_dish_user]);
        if (empty($userInfo)){
            $this -> redirect(U('Repast/select', array('token' => $this -> token, 'wecha_id' => $this -> wecha_id, 'cid' => $this -> _cid)));
        }
        $this -> assign('metaTitle', $company['name']);
        $this -> display();
    }
    public function GetDishList(){
        $company = M('Company') -> where(array('token' => $this -> token, 'id' => $this -> _cid)) -> find();
        $dish_sort = M('Dish_sort') -> where(array('cid' => $this -> _cid)) -> select();
        $dish = M('Dish') -> where(array('cid' => $this -> _cid)) -> select();
        $dish_like = M('Dish_like') -> where(array('cid' => $this -> _cid, 'wecha_id' => $this -> wecha_id)) -> select();
        $like = array();
        foreach ($dish_like as $dl){
            $like[$dl['did']] = 1;
        }
        $mymenu = $this -> getDishMenu();
        $list = array();
        foreach ($dish as $d){
            $t = array();
            $t['id'] = $d['id'];
            $t['aid'] = $d['cid'];
            $t['name'] = $d['name'];
            $t['price'] = $d['price'];
            $t['discount_name'] = '';
            $t['discount_price'] = '';
            $t['class_id'] = $d['sid'];
            $t['pic'] = $d['image'];
            $t['note'] = $d['des'];
            $t['unit'] = $d['unit'];
            $t['tag_name'] = $d['ishot'] ? '推荐' : '';
            $t['html_name'] = '';
            $t['check'] = isset($like[$d['id']]) ? $like[$d['id']] : 0;
            $t['select'] = isset($mymenu[$d['id']]) ? 1 : 0;
            $list[$d['sid']][] = $t;
        }
        $result = array();
        foreach ($dish_sort as $sort){
            $r = array();
            $r['id'] = $sort['id'];
            $r['aid'] = $sort['cid'];
            $r['name'] = $sort['name'];
            $r['dishes'] = isset($list[$sort['id']]) ? $list[$sort['id']] : '';
            $result[] = $r;
        }
        exit(json_encode($result));
    }
    public function dolike(){
        if (empty($this -> wecha_id)){
            exit(json_encode(array('status' => 0)));
        }
        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
        $check = isset($_POST['check']) ? intval($_POST['check']) : 0;
        if ($id){
            $dishLike = D('Dish_like');
            $data = array('did' => $id, 'cid' => $this -> _cid, 'wecha_id' => $this -> wecha_id);
            if ($check){
                $dishLike -> add($data);
            }else{
                $dishLike -> where($data) -> delete();
                exit(json_encode(array('status' => 1)));
            }
        }
        exit(json_encode(array('status' => 0)));
    }
    public function like(){
        if ($this -> wecha_id){
            $mymenu = $this -> getDishMenu();
            $dish_like = M('Dish_like') -> where(array('cid' => $this -> _cid, 'wecha_id' => $this -> wecha_id)) -> select();
            $dids = array();
            foreach ($dish_like as $like){
                $dids[] = $like['did'];
            }
            $dish = array();
            if ($dids){
                $list = M('Dish') -> where(array('id' => array('in', $dids), 'cid' => $this -> _cid)) -> select();
                foreach ($list as $row){
                    $row['select'] = isset($mymenu[$row['id']]) ? 1 : 0;
                    $dish[] = $row;
                }
            }
        }else{
            $dish = array();
        }
        $this -> assign('dishlist', $dish);
        $this -> assign('metaTitle', '我喜欢的菜');
        $this -> display();
    }
    public function editOrder(){
        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
        $num = isset($_POST['num']) ? intval($_POST['num']) : 0;
        $des = isset($_POST['des']) ? htmlspecialchars($_POST['des']) : '';
        if ($id){
            $oldMenu = $this -> getDishMenu();
            if (isset($oldMenu[$id])){
                $oldMenu[$id]['des'] = $des ? $des : $oldMenu[$id]['des'];
                $oldMenu[$id]['num'] += $num;
                if ($oldMenu[$id]['num'] == 0){
                    unset($oldMenu[$id]);
                }
            }elseif ($num > 0){
                $oldMenu[$id]['des'] = $des ;
                $oldMenu[$id]['num'] = $num;
            }
            $_SESSION[$this -> session_dish_info] = serialize($oldMenu);
        }
    }
    public function mymenu(){
        $userInfo = unserialize($_SESSION[$this -> session_dish_user]);
        if (empty($userInfo)){
            $this -> error('没有填写用餐信息，先填写信息，再提交订单！', U('Repast/select', array('token' => $this -> token, 'wecha_id' => $this -> wecha_id, 'cid' => $this -> _cid)));
        }
        $menu = $this -> getDishMenu();
        $data = array();
        $totalNum = $totalPrice = 0;
        if ($menu){
            $dids = array_keys($menu);
            $dishList = M('Dish') -> where(array('cid' => $this -> _cid, 'id' => array('in', $dids))) -> select();
            foreach ($dishList as $dish){
                if (isset($menu[$dish['id']])){
                    $totalNum += $menu[$dish['id']]['num'];
                    $totalPrice += $menu[$dish['id']]['num'] * $dish['price'];
                    $r = array();
                    $r['id'] = $dish['id'];
                    $r['name'] = $dish['name'];
                    $r['price'] = $dish['price'];
                    $r['nums'] = $menu[$dish['id']]['num'];
                    $r['des'] = $menu[$dish['id']]['des'];
                    $data[] = $r;
                }
            }
        }
        $tableName = '';
        if ($userInfo['tableid']){
            $diningTable = M('Dining_table') -> where(array('cid' => $this -> _cid, 'id' => $userInfo['tableid'])) -> find();
            $tableName = isset($diningTable['name']) && isset($diningTable['isbox']) ? ($diningTable['isbox'] ? $diningTable['name'] . '(包厢' . $diningTable['num'] . '座)' : $diningTable['name'] . '(大厅' . $diningTable['num'] . '座)') : '';
        }
        $this -> assign('tableName', $tableName);
        $this -> assign('userInfo', $userInfo);
        $this -> assign('totalNum', $totalNum);
        $this -> assign('totalPrice', $totalPrice);
        $this -> assign('my_dish', $data);
        $this -> assign('metaTitle', '我的订单');
        $this -> display();
    }
    public function getInfo(){
        if (empty($this -> wecha_id)){
            exit(json_encode(array('success' => 0, 'msg' => '无法获取您的微信身份，请关注“公众号”，然后回复“订餐”来使用此功能')));
        }
        exit(json_encode(array('success' => 1, 'msg' => 'ok')));
    }
    public function saveMyOrder(){
        if (empty($this -> wecha_id)){
            unset($_SESSION[$this -> session_dish_info]);
            $this -> error('您的微信账号为空，不能订餐!');
            exit(json_encode(array('success' => 0, 'msg' => '您的微信账号为空，不能订餐!')));
        }
        $dishs = $this -> getDishMenu();
        if (empty($dishs)){
            $this -> error('没有点餐，请去点餐吧!');
        }
        $userInfo = unserialize($_SESSION[$this -> session_dish_user]);
        if (empty($userInfo)){
            $this -> error('您的个人信息有误，请重新下单!', U('Repast/selectTable', array('token' => $this -> token, 'wecha_id' => $this -> wecha_id, 'cid' => $this -> _cid)));
        }
        $userInfo['cid'] = $this -> _cid;
        $userInfo['wecha_id'] = $this -> wecha_id;
        $userInfo['token'] = $this -> token;
        $total = $price = 0;
        $dids = array_keys($dishs);
        $dishList = M('Dish') -> where(array('cid' => $this -> _cid, 'id' => array('in', $dids))) -> select();
        $temp = array();
        foreach ($dishList as $r){
            if (isset($dishs[$r['id']])){
                $temp[$r['id']] = array('price' => $r['price'], 'num' => $dishs[$r['id']]['num'], 'name' => $r['name'], 'des' => $dishs[$r['id']]['des']);
                $total += $dishs[$r['id']]['num'];
                $price += $dishs[$r['id']]['num'] * $r['price'];
            }
        }
        $takeAwayPrice = 0;
        if (isset($userInfo['price']) && $userInfo['price']){
            $price += $userInfo['price'];
            $takeAwayPrice = $userInfo['price'];
        }
        $userInfo['total'] = $total;
        $userInfo['price'] = $price;
        $userInfo['info'] = serialize(array('takeAwayPrice' => $takeAwayPrice, 'list' => $temp));
        $userInfo['time'] = time();
        $userInfo['orderid'] = substr($this -> wecha_id, -1, 4) . date("YmdHis");
        $doid = D('Dish_order') -> add($userInfo);
        if ($doid){
			$info=M('delisms')->where(array('token'=>$this->token))->find();
			$phone=$info['phone'];
			$user=$info['name'];//短信平台帐号
			$pass=md5($info['password']);//短信平台密码
			$smsstatus=$info['dingcan'];//短信平台状态
			$content = $this->sms();
			if ($smsstatus == 1) {
				if ($content) {
					$smsrs = file_get_contents('http://api.smsbao.com/sms?u='.$user.'&p='.$pass.'&m='.$phone.'&c='.urlencode($content));
					//$log = file_get_contents('http://www.test.com/test.php?u=' . $user . '&p=' . $pass . '&m=' . $phone . '&test=' . urlencode($content));
				}
			}
			//发送短信通知结束

			// 增加 发送邮件
			$info=M('deliemail')->where(array('token'=>$this->token))->find();
			$emailstatus=$info['dingcan'];
			$emailreceive=$info['receive'];
			$content = $this->sms();
			if($info['type'] == 1){
			$emailsmtpserver=$info['smtpserver'];
			$emailport=$info['port'];
			$emailsend=$info['name'];
			$emailpassword=$info['password'];
			}else{
			$emailsmtpserver=C('email_server');
			$emailport=C('email_port');
			$emailsend=C('email_user');
			$emailpassword=C('email_pwd');
			}
			$emailuser=explode('@', $emailsend);
			$emailuser=$emailuser[0];
			if ($emailstatus == 1) {
				if ($content) {
					date_default_timezone_set('PRC');
					require("class.phpmailer.php");
					$mail->CharSet    = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
					$mail = new PHPMailer();
					$mail->IsSMTP();                                      // set mailer to use SMTP
					$mail->Host = "$emailsmtpserver";  // specify main and backup server
					$mail->SMTPAuth = true;     // turn on SMTP authentication
					$mail->Username = "$emailuser"; // SMTP username
					$mail->Password = "$emailpassword"; // SMTP password
					$mail->From = $emailsend;
					$mail->FromName = C('site_name');
					$mail->AddAddress("$emailreceive", "商户");
					//$mail->AddAddress("ellen@example.com");                  // name is optional
					$mail->AddReplyTo($emailsend, "Information");

					$mail->WordWrap = 50;                                 // set word wrap to 50 characters
					//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
					//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
					$mail->IsHTML(false);                                  // set email format to HTML

					$mail->Subject = '您的微餐饮订单';
					$mail->Body    = $content;
					$mail->AltBody = "";

					if(!$mail->Send())
					{
					   echo "Message could not be sent. <p>";
					   echo "Mailer Error: " . $mail->ErrorInfo;
					   exit;
					}
					//echo "Message has been sent";    
				}
			}
			
            if ($userInfo['takeaway'] != 2){
                if ($userInfo['takeaway'] == 1){
                    Sms :: sendSms($this -> token . "_" . $this -> _cid, "顾客{$userInfo['name']}刚刚叫了一份外卖，订单号：{$userInfo['orderid']}，请您注意查看并处理");
                }else{
                    Sms :: sendSms($this -> token . "_" . $this -> _cid, "顾客{$userInfo['name']}刚刚预约了一次用餐，订单号：{$userInfo['orderid']}，请您注意查看并处理");
                }
            }
            if ($userInfo['tableid']){
                $table_order = array('cid' => $this -> _cid, 'tableid' => $userInfo['tableid'], 'orderid' => $doid, 'wecha_id' => $this -> wecha_id, 'reservetime' => $userInfo['reservetime'], 'creattime' => time());
                $doid = D('Dish_table') -> add($table_order);
            }
            $_SESSION[$this -> session_dish_info] = $_SESSION[$this -> session_dish_user] = '';
            unset($_SESSION[$this -> session_dish_user], $_SESSION[$this -> session_dish_info]);
            $alipayConfig = M('Alipay_config') -> where(array('token' => $this -> token)) -> find();
            $dishCompany = M('Dish_company') -> where(array('cid' => $this -> _cid)) -> find();
            if ($alipayConfig['open'] && $dishCompany['payonline']){
                $this -> success('正在提交中...', U('Alipay/pay', array('token' => $this -> token, 'wecha_id' => $this -> wecha_id, 'success' => 1, 'from' => 'Repast', 'orderName' => $userInfo['orderid'], 'single_orderid' => $userInfo['orderid'], 'price' => $price)));
            }else{
                $this -> redirect(U('Repast/myOrder', array('token' => $this -> token, 'wecha_id' => $this -> wecha_id, 'cid' => $this -> _cid, 'success' => 1)));
            }
            exit(json_encode(array('success' => 1, 'msg' => 'ok', 'orderid' => $userInfo['orderid'], 'orderName' => $userInfo['orderid'], 'price' => $price, 'isopen' => $alipayConfig['open'])));
        }else{
            $this -> error('订单出错，请重新下单');
            exit(json_encode(array('success' => 0, 'msg' => '订单出错，请重新下单')));
        }
    }
	public function sms(){
		 $userInfo = unserialize($_SESSION[$this -> session_dish_user]);
		$where['token']=$this->token;
		$where['wecha_id']=$this->wecha_id;
		$where['printed']=0;
		$this->dish_order_model=M('dish_order');
		$this->dining_table_model=M('dining_table');
		$count      = $this->dish_order_model->where($where)->count();
		$orders=$this->dish_order_model->where($where)->order('time DESC')->limit(0,1)->select();
		
		$now=time();
		if ($orders){
			$thisOrder=$orders[0];
			
			
			//订餐信息
			$product_diningtable_model=M('dish_order');
			if ($thisOrder['tableid']) {
				$thisTable=$this->dining_table_model->where(array('cid' => $this -> _cid,'id' => $userInfo['tableid']))->find();
				$thisOrder['tableid']=$thisTable['name'];
			}else{
				$thisOrder['tableid']='未指定';
			}
			$str="\r\n订单编号：".$thisOrder['id']."\r\n姓名：".$thisOrder['name']."\r\n电话：".$thisOrder['tel']."\r\n人数：".$thisOrder['nums']."\r\n预约时间：".$thisOrder['reservetime']= date("Y-m-d H:i:s",$thisOrder['reservetime'])."\r\n地址：".$thisOrder['address']."\r\n桌台：".$thisOrder['tableid']."\r\n下单时间：".date('Y-m-d H:i:s',$thisOrder['time'])."\r\n";
			//
			$carts=unserialize($thisOrder['info']);

			//
			$totalFee=0;
			$totalCount=0;
			$products=array();
			$ids=array();
			foreach ($carts as $k=>$c){
				if (is_array($c)){
					$productid=$k;
					$price=$c['price'];
					$count=$c['count'];
					//
					if (!in_array($productid,$ids)){
						array_push($ids,$productid);
					}
					$totalFee+=$price*$count;
					$totalCount+=$count;
				}
			}
			if (count($ids)){
				$products=$this->dish_order_model->where(array('id'=>array('in',$ids)))->select();
			}
			if ($products){
				$i=0;
				foreach ($products as $p){
					$products[$i]['count']=$carts[$p['id']]['count'];
					$str.=$p['name']."  ".$products[$i]['count']."份  单价：".$p['price']."元\r\n";
					$i++;
				}
			}
			$str.="合计：".$thisOrder['price']."元";
			return $str;
		}else {
			return '';
		}
	}

	//增加sms内容止//
	
    public function clearMyMenu(){
        $_SESSION[$this -> session_dish_info] = null;
        unset($_SESSION[$this -> session_dish_info]);
    }
    public function myOrder(){
        $status = isset($_GET['status']) ? intval($_GET['status']) : 0;
        $where = array('cid' => $this -> _cid, 'wecha_id' => $this -> wecha_id);
        if ($status == 4){
            $where['isuse'] = 1;
            $where['paid'] = 1;
        }elseif ($status == 3){
            $where['isuse'] = 0;
            $where['paid'] = 1;
        }elseif ($status == 2){
            $where['isuse'] = 1;
            $where['paid'] = 0;
        }elseif ($status == 1){
            $where['isuse'] = 0;
            $where['paid'] = 0;
        }
        $dish_order = M('Dish_order') -> where($where) -> order('id DESC') -> select();
        $list = array();
        foreach ($dish_order as $row){
            $row['info'] = unserialize($row['info']);
            $list[] = $row;
        }
        $this -> assign('orderList', $list);
        $this -> assign('status', $status);
        $this -> assign('metaTitle', '我的订单');
        $this -> display();
    }
    public function getDishMenu(){
        if (!isset($_SESSION[$this -> session_dish_info]) || !strlen($_SESSION[$this -> session_dish_info])){
            $dish = array();
        }else{
            $dish = unserialize($_SESSION[$this -> session_dish_info]);
        }
        return $dish;
    }
    public function payReturn(){
        $orderid = $_GET['orderid'];
        if ($order = M('dish_order') -> where(array('orderid' => $orderid, 'token' => $this -> token)) -> find()){
            if ($order['paid']){
                Sms :: sendSms($this -> token . "_" . $this -> _cid, "顾客{$order['name']}刚刚对订单号：{$orderid}的订单进行了支付，请您注意查看并处理");
            }
            $this -> redirect(U('Repast/myOrder', array('token' => $this -> token, 'wecha_id' => $this -> wecha_id, 'cid' => $this -> _cid)));
        }else{
            exit('订单不存在');
        }
    }
}
?>