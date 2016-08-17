<?php
class ZhuangxiuAction extends BaseAction{
	public function _initialize(){
		parent::_initialize();
		
		$where['token']=$this->token;
		$kefu=M('Kefu')->where($where)->find();
		$this->assign('kefu',$kefu);

	}
	public function index(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}		
		$info=M('Zhuangxiu')->where(array('token'=>$token))->find();
		$zjdp=M('Zhuangxiucom')->where(array('token'=>$token))->find();
		$lp_zjdp=M('Zhuangxiucom')->where(array('token'=>$token,'status'=>1,'subestatename'=>$info['title']))->order('sort desc')->select();
		$lp=M('Zhuangxiu')->where(array('token'=>$token,'status'=>1,'id'=>$this->_get('id')))->order('id desc')->select();
		$this->assign('zjdp',$zjdp);
		$this->assign('lp_zjdp',$lp_zjdp);
		$this->assign('lp',$lp);
		$this->assign('info',$info);
		$this->display();
	}
	public function shouye(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}
		$info=M('Zhuangxiu')->where(array('token'=>$token))->find();
		$lp=M('Zhuangxiu')->where(array('token'=>$token,'status'=>1))->order('id desc')->select();
		$this->assign('info',$info);
		$this->assign('lp',$lp);
		$this->display();	
	}
	
		public function Zhuangxiucom_index(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}
		$info1=M('Zhuangxiu')->where(array('token'=>$token))->find();
		$info=M('Zhuangxiucom')->where(array('token'=>$token))->find();
		$lp=M('Zhuangxiucom')->where(array('token'=>$token,'status'=>1))->order('id desc')->select();
		$this->assign('info1',$info1);
		$this->assign('info',$info);
		$this->assign('lp',$lp);
		$this->display();	
	}
	
	public function subestate(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}		
		$info=M('Zhuangxiuunits')->where(array('token'=>$token))->find();
		$lp=M('Zhuangxiuunits')->where(array('token'=>$token,'status'=>1,'sub'=>$this->_get('name')))->order('id desc')->select();
		$toppic=M('Zhuangxiu')->where(array('token'=>$token))->find();
		$this->assign('toppic',$toppic);
		$this->assign('info',$info);
		$this->assign('lp',$lp);
		$this->display();	
	}
	
	public function subestate_index(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}	
		$info=M('Zhuangxiusub')->where(array('token'=>$token))->find();
		
		$lp=M('Zhuangxiusub')->where(array('token'=>$token,'status'=>1,'title'=>$this->_get('title')))->order('id desc')->select();
		$toppic=M('Zhuangxiu')->where(array('token'=>$token))->find();
		$lp1=M('Zhuangxiu')->where(array('token'=>$token,'status'=>1,'title'=>$this->_get('title')))->order('id desc')->select();
		$this->assign('lp1',$lp1);
		$this->assign('toppic',$toppic);
		$this->assign('info',$info);
		$this->assign('lp',$lp);
		$this->display();	
	}
	
	
					public function jianjie(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}	
		$info=M('Zhuangxiusub')->where(array('token'=>$token,'status'=>1,'name'=>$this->_get('name')))->find();
		$this->assign('info',$info);
		$this->display();	
	}
	
		public function houseunits(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}		
		$info=M('Zhuangxiuunits')->where(array('token'=>$token,'id'=>$this->_get('id')))->find();
		$lp_elist=M('Zhuangxiuunits')->where(array('token'=>$token,'id'=>$this->_get('id'),'status'=>1))->select();
		$this->assign('info',$info);
		$this->assign('elist',$lp_elist);
		$this->display();
	}
		public function comments(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}		
		$info=M('Zhuangxiucom')->where(array('token'=>$token))->find();
		$lp_zjdp=M('Zhuangxiucom')->where(array('token'=>$token,'status'=>1,'id'=>$this->_get('id')))->order('id desc')->select();
		$this->assign('info',$info);
		$this->assign('zjdp',$lp_zjdp);
		$this->display();
	}
	public function comments_all(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}		
		$info=M('Zhuangxiucom')->where(array('token'=>$token))->find();
		$lp_zjdpall=M('Zhuangxiucom')->where(array('token'=>$token,'status'=>1,'subestatename'=>$this->_get('subestatename')))->order('sort desc')->select();
		$this->assign('info',$info);
		$this->assign('zjdpall',$lp_zjdpall);
		$this->display();
	}
	
	public function poster(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}		
		$info=M('Zhuangxiuposter')->where(array('token'=>$token))->find();
		$lp_zjdp=M('Zhuangxiuposter')->where(array('token'=>$token,'subestatename'=>$this->_get('subestatename')))->order('id desc')->select();
		$this->assign('info',$info);
		$this->assign('zjdp',$lp_zjdp);
		$this->display();
	}
		public function Zhuangxiuphoto(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}		
	
		$info=M('Zhuangxiuphoto')->where(array('token'=>$token))->find();
		$xc=M('Zhuangxiuphoto')->where(array('token'=>$token,'status'=>1))->order('id desc')->select();
		$toppic=M('Zhuangxiu')->where(array('token'=>$token))->find();
		$this->assign('toppic',$toppic);
		$this->assign('info',$info);
		$this->assign('xc',$xc);
		$this->display();
	}
	
		public function Zhuangxiuphoto_list(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}			
		$info=M('Zhuangxiuphoto')->where(array('token'=>$token))->find();
		$xc=M('Zhuangxiuphoto')->where(array('token'=>$token,'status'=>1,'name'=>$this->_get('name')))->order('id desc')->select();
		$toppic=M('Zhuangxiu')->where(array('token'=>$token))->find();
		$this->assign('toppic',$toppic);
		$this->assign('info',$info);
		$this->assign('xc',$xc);
		$this->display();
	}
	public function photo(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}		
		$info=M('Zhuangxiuphoto')->where(array('token'=>$token))->find();
		$xc=M('Zhuangxiuphoto')->where(array('token'=>$token,'status'=>1,'namephoto'=>$this->_get('namephoto'),))->order('sort desc')->select();
		$toppic=M('Zhuangxiu')->where(array('token'=>$token))->find();
		$this->assign('toppic',$toppic);
		$this->assign('info',$info);
		$this->assign('xc',$xc);
		$this->display();
	}
		public function photo_list(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")&&!isset($_SESSION['token'])) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token=$this->_get('token');
		if($token==false){
			echo '数据不存在';exit;
		}			
		$info=M('Zhuangxiuphoto')->where(array('token'=>$token))->find();
		$xc=M('Zhuangxiuphoto')->where(array('token'=>$token,'status'=>1,'id'=>$this->_get('id')))->order('id desc')->select();
		$toppic=M('Zhuangxiu')->where(array('token'=>$token))->find();
		$this->assign('toppic',$toppic);
		$this->assign('info',$info);
		$this->assign('xc',$xc);
		$this->display();
	
	}
}
?>
