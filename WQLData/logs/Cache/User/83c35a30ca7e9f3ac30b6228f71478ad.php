<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta charset="utf-8">
<title><?php echo ($f_siteName); ?> <?php echo ($f_siteTitle); ?></title>
<meta name="description" content="This is page-header (.page-header &gt; h1)">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
<link href="tpl/static/simpleboot/css/simplebootadmin.css" rel="stylesheet">
<link href="tpl/static/simpleboot/font-awesome/4.1.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">

<!--[if IE 7]>
	<link rel="stylesheet" href="tpl/static/simpleboot/simpleboot/font-awesome/4.1.0/css/font-awesome-ie7.min.css{$js_debug}">
<![endif]-->
<link rel="stylesheet" href="tpl/static/simpleboot/themes/flat/simplebootadminindex.min.css?">
<!--[if lte IE 8]>
	<link rel="stylesheet" href="tpl/static/simpleboot/simpleboot/css/simplebootadminindex-ie.css?{$js_debug}" />
<![endif]-->

<script>
//全局变量
var GV = {
	HOST:"{$_SERVER['HTTP_HOST']}",
    DIMAUB: "__ROOT__/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};

</script>
<?php if(APP_DEBUG): ?><style>
#think_page_trace_open {
	left: 0 !important;
	right: initial !important;
}
;
</style><?php endif; ?>
</head>

<body style="min-width:900px;" screen_capture_injected="true">
<link href="<?php echo RES;?>/js/jquery.jscrollpane.css" rel="stylesheet" type="text/css">
<div id="loading"><i class="loadingicon"></i><span>正在加载...</span></div>
<div id="right_tools_wrapper"> 
  <!--<span id="right_tools_clearcache" title="清除缓存" onclick="javascript:openapp('{:u('admin/setting/clearcache')}','right_tool_clearcache','清除缓存');"><i class="fa fa-trash-o right_tool_icon"></i></span>
		--><span id="refresh_wrapper" title="刷新当前页" ><i class="fa fa-refresh right_tool_icon"></i></span> </div>
<div class="navbar">
  <div class="navbar-inner">
    <div class="container-fluid"> <a href="<?php echo ($f_siteUrl); ?>/index.php" class="brand"> <small> <img src="<?php echo ($f_logo); ?>"> <?php echo ($f_siteName); ?>后台</small> </a>
      <div class="pull-left nav_shortcuts" > <a class="btn btn-small btn-success" href="<?php echo U('User/Index/index');?>" title="账号管理"> <i class="fa fa-users"></i> </a> <a class="btn btn-small btn-info" href="javascript:openapp('<?php echo U('Index/useredit');?>','index_postlist','修改密码');" title="修改密码"> <i class="fa fa-cog"></i> </a> <a class="btn btn-small btn-warning" href="<?php echo ($f_siteUrl); ?>/index.php" title="返回首页"  target="_parent"> <i class="fa fa-home"></i> </a> <a class="btn btn-small btn-danger" target="_parent" href="javascript:openapp('<?php echo U('Home/Index/logout');?>','index_clearcache','退出');" title="退出"> <i class="fa fa-play"></i> </a> </div>
      <ul class="nav simplewind-nav pull-right">
        <li class="light-blue"> <a data-toggle="dropdown" href="#" class="dropdown-toggle"> <img class="nav-user-photo" src="<?php echo ($wecha["headerpic"]); ?>" alt="{$admin.user_login}"> <span class="user-info"> <small>欢迎,</small><?php echo (session('uname')); ?> </span> <i class="fa fa-caret-down"></i> </a>
          <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
            <li><a href="<?php echo U('User/Index/index');?>"><i class="fa fa-cog"></i>账号管理</a></li>
            <li><a href="javascript:openapp('<?php echo U('Index/useredit');?>','index_userinfo','修改密码');"><i class="fa fa-user"></i>修改密码</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo U('Home/Index/logout');?>"><i class="fa fa-off"></i>退出</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<div  class="main-container container-fluid">
  <div class="sidebar" id="sidebar"> 
    <!-- <div class="sidebar-shortcuts" id="sidebar-shortcuts">
			</div> -->
    <div id="nav_wraper">
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-arrows-alt normal"></i> <span class="menu-text">高端定制</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('Baoming/index',array('token'=>$token,'id'=>session('wxid')));?>','1Admin','主题活动报名');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">主题活动报名</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Jiejing/index',array('token'=>$token,));?>','2Admin','街景地图导航');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">街景地图导航</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Fenlei/index',array('token'=>$token,));?>','3Admin','微商盟');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微商盟</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Jikedati/index',array('token'=>$token,));?>','4Admin','极客答题王');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">极客答题王</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-cog normal"></i> <span class="menu-text">基础设置</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('User/Function/info',array('token'=>$token,'id'=>session('wxid')));?>','1Admin','管理首页');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">管理首页</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>','5Admin','功能管理');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">功能管理</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Areply/index',array('token'=>$token));?>','6Admin','关注－自动回');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">关注－自动回复</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Text/index',array('token'=>$token));?>','7Admin','文本回复');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微信－文本回复</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Img/index',array('token'=>$token));?>','8Admin','图文回复');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微信－图文回复</span> </a> </li>
           <!--  <li> <a href="javascript:openapp('<?php echo U('Img/multi',array('token'=>$token));?>','97Admin','多图文回复');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微信－多图文回复</span> </a> </li>-->
            <li> <a href="javascript:openapp('<?php echo U('Voiceresponse/index',array('token'=>$token));?>','9Admin','微信－语音回复');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微信－语音回复</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Other/index',array('token'=>$token));?>','10Admin','回答不上来的配置');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">回答不上来的配置</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Company/index',array('token'=>$token));?>','11Admin','门店基本设置');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">门店基本设置</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Company/branches',array('token'=>$token,'isbranch'=>1,));?>','12Admin','门店管理');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">门店管理</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Wzqemail/index',array('token'=>$token,'id'=>session('wxid')));?>','13Admin','邮箱配置');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">邮箱配置</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Kefu/index',array('token'=>$token));?>','14Admin','在线客服配置');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">在线客服配置</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Index/editprint',array('token'=>$token,'id'=>session('wxid')));?>','15Admin','打印配置');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">打印配置</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Auth/index',array('token'=>$token));?>','102Admin','信息授权');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微信用户信息授权</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-list normal"></i> <span class="menu-text">微 官 网</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('Home/set',array('token'=>$token));?>','16Admin','首页回复配置');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">首页回复配置</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Classify/index',array('token'=>$token));?>','17Admin','分类管理');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">分类管理</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Tmpls/index',array('token'=>$token));?>','18Admin','模板管理');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">模板管理</span> </a> </li>
            <li> <a href="javascript:openapp('/cms/manage/index.php','19Admin','高级模板');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">高级模板</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Wzq/index',array('token'=>$token));?>','20Admin','实用工具外链');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">实用工具外链</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Flash/index',array('token'=>$token,'tip'=>1));?>','21Admin','首页幻灯片');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">首页幻灯片</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Flash/index',array('token'=>$token,'tip'=>2));?>','22Admin','轮播背景图');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">轮播背景图</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Catemenu/index',array('token'=>$token,'tip'=>2));?>','23Admin','底部导航菜单');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">底部导航菜单</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Diymen/index',array('token'=>$token));?>','24Admin','自定义菜单');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">自定义菜单</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Adma/index',array('token'=>$token));?>','25Admin','二维码宣传页');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">二维码宣传页</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Reply/index',array('token'=>$token));?>','26Admin','留言板');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">留言板</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Forum/index',array('token'=>$token));?>','27Admin','微论坛');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微论坛</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Yulan/index',array('token'=>$token));?>','28Admin','在线预览');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">在线预览</span> </a> </li>
          </ul>
        </li>
      </ul>
     <!-- <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-eye normal"></i> <span class="menu-text">微 生 活</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('Weilive/reply',array('token'=>$token));?>','29Admin','首页回复配置');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">首页回复配置</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Weilive/index',array('token'=>$token));?>','30Admin','商户管理');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">商户管理</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Weilive/ad',array('token'=>$token));?>','31Admin','广告管理');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">广告管理</span> </a> </li>
          </ul>
        </li>
      </ul>-->
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-shopping-cart normal"></i> <span class="menu-text">微 电 商</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
          <li> <a href="javascript:openapp('<?php echo U('Market/index',array('token'=>$token));?>','95Admin','微商圈');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微商圈</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Store/index',array('token'=>$token));?>','32Admin','微信商城系统');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微信商城系统</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Shoptmpls/index',array('token'=>$token));?>','33Admin','商城模板选择');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">商城模板选择</span> </a> </li>
            <li> <a href="javascript:openapp('/sc/index.php?g=admin','34Admin','独立商城');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">独立商城</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Alipay_config/index',array('token'=>$token));?>','35Admin','在线支付设置');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">在线支付设置</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Groupon/index',array('token'=>$token));?>','36Admin','微信团购系统');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微信团购系统</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Storeflash/index',array('token'=>$token,'tip'=>1));?>','37Admin','商城首页幻灯片');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">商城首页幻灯片</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Storeflash/index',array('token'=>$token,'tip'=>2));?>','38Admin','商城轮播背景图');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">商城轮播背景图</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Taobao/index',array('token'=>$token));?>','39Admin','淘宝天猫店铺配置');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">淘宝天猫店铺配置</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Api/index',array('token'=>$token));?>','40Admin','融合第三方');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">融合第三方</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-skype normal"></i> <span class="menu-text">微 促 销</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('Lottery/index',array('token'=>$token));?>','41Admin','幸运大转盘');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">幸运大转盘</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Coupon/index',array('token'=>$token));?>','42Admin','优惠券');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">优惠券</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Guajiang/index',array('token'=>$token));?>','43Admin','刮刮卡');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">刮刮卡</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('LuckyFruit/index',array('token'=>$token));?>','44Admin','幸运水果机');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">幸运水果机</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('GoldenEgg/index',array('token'=>$token));?>','45Admin','砸金蛋');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">砸金蛋</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Dati/index',array('token'=>$token));?>','46Admin','一站到底');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">一站到底</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-retweet normal"></i> <span class="menu-text">微 互 动</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
           <li> <a href="javascript:openapp('<?php echo U('Signin/index',array('token'=>$token));?>','96Admin','微信签到');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微信签到</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Greeting_card/index',array('token'=>$token));?>','47Admin','祝福贺卡');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">祝福贺卡</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Shake/index',array('token'=>$token));?>','48Admin','摇一摇');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">摇摇乐</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Zhaopianwall/index',array('token'=>$token));?>','49Admin','照片墙');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">照片墙</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Wall/index',array('token'=>$token));?>','50Admin','微信墙');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微信墙</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Vcard/index',array('token'=>$token));?>','51Admin','微名片');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微名片</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-rss normal"></i> <span class="menu-text">微WiFi</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('RippleOS/set',array('token'=>$token));?>','52Admin','新版微WiFi');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">新版微WiFi</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Wifi/index',array('token'=>$token));?>','53Admin','微WiFi');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微WiFi</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa  fa-h-square normal"></i> <span class="menu-text">微 行 业</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('Repast/index',array('token'=>$token,'id'=>session('wxid')));?>','54Admin','微订餐');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微订餐</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Wedding/index',array('token'=>$token));?>','55Admin','微喜帖');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微喜帖</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Car/index',array('token'=>$token));?>','56Admin','微汽车');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微汽车</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Medical/index',array('token'=>$token));?>','57Admin','微医疗');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微医疗</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('School/index',array('token'=>$token));?>','58Admin','微教育');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微教育</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Hotels/index',array('token'=>$token));?>','59Admin','微酒店(宾馆');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微酒店(宾馆</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Estate/index',array('token'=>$token));?>','60Admin','楼盘房产');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">楼盘房产</span> </a> </li>
            
            <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'beauty'));?>','61Admin','微美容');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微美容</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'fitness'));?>','62Admin','微健身');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微健身</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'gover'));?>','63Admin','微政务');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微政务</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'food'));?>','64Admin','微食品');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微食品</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'travel'));?>','65Admin','微旅游');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微旅游</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'flower'));?>','66Admin','微花店');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微花店</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'property'));?>','67Admin','微物业');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微物业</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=> 'ktv'));?>','68Admin','微KTV');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微KTV</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=> 'bar'));?>','69Admin','微酒吧');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微酒吧</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'fitment'));?>','70Admin','微装修');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微装修</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'wedding'));?>','99Admin','微婚庆');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微婚庆</span> </a> </li>
             <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'affections'));?>','100Admin','微宠物');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微宠物</span> </a> </li>
             <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'housekeeper'));?>','101Admin','微家政');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微家政</span> </a> </li>
              <li> <a href="javascript:openapp('<?php echo U('Business/index',array('token'=>$token,'type'=>'lease'));?>','102Admin','微租赁');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微租赁</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-gamepad normal"></i> <span class="menu-text">微 游 戏</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
          <li> <a href="javascript:openapp('<?php echo U('Sjm/index',array('token'=>$token));?>','98Admin','神经猫');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">神经猫</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Game/index',array('token'=>$token));?>','71Admin','2048正常版');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">2048正常版</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Gamet/index',array('token'=>$token));?>','48Admin','2048虐心版');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">2048虐心版</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Gamett/index',array('token'=>$token));?>','72Admin','Flappy 2048');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">Flappy 2048</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Czz/index',array('token'=>$token));?>','73Admin','吃粽子大赛');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">吃粽子大赛</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-windows normal"></i> <span class="menu-text">微 应 用</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('Research/index',array('token'=>$token));?>','74Admin','微调研');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微调研</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Photo/index',array('token'=>$token));?>','75Admin','微相册');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微相册</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Vote/index',array('token'=>$token));?>','76Admin','微投票');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微投票</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Panorama/index',array('token'=>$token));?>','77Admin','360°全景');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">360°全景</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Custom/record',array('token'=>$token));?>','78Admin','万能表单');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">万能表单</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Host/index',array('token'=>$token));?>','79Admin','在线预定');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">在线预定</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Yuyue/index',array('token'=>$token));?>','80Admin','新微预约');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">新微预约</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Invites/index',array('token'=>$token));?>','81Admin','微邀请');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">微邀请</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-list-alt normal"></i> <span class="menu-text">会员管理</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('Member_card/index',array('token'=>$token));?>','82Admin','会员卡管理');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">会员卡管理</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Member_card/replyInfoSet',array('token'=>$token));?>','83Admin','回复设置');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">回复设置</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Member_card/focus',array('token'=>$token));?>','84Admin','幻灯片广告');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">幻灯片广告</span> </a> </li>
              <li> <a href="javascript:openapp('<?php echo U('Member_card/custom',array('token'=>$token));?>','103Admin','自定义输入项');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">自定义输入项</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-users normal"></i> <span class="menu-text">粉丝管理</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('Wechat_group/index',array('token'=>$token));?>','85Admin','粉丝管理');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">粉丝管理</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Wechat_group/groups',array('token'=>$token));?>','86Admin','分组管理');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">分组管理</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Wechat_behavior/statistics',array('token'=>$token));?>','87Admin','粉丝行为分析');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">粉丝行为分析</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Recognition/index',array('token'=>$token));?>','88Admin','渠道二维码');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">渠道二维码</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Message/index',array('token'=>$token));?>','84Admin','群发消息');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">群发消息</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Share/index',array('token'=>$token));?>','89Admin','分享管理');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">分享管理</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-user normal"></i> <span class="menu-text">在线客服</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('ServiceUser/index',array('token'=>$token));?>','90Admin','坐席管理');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">坐席管理</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('ServiceUser/chat_log',array('token'=>$token));?>','91Admin','聊天记录');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">聊天记录</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Chat/Login/index',array('token'=>$token));?>','92Admin','进入客服系统');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">进入客服系统</span> </a> </li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-list">
        <li class=""> <a href="#" class="dropdown-toggle"> <i class="fa fa-bar-chart-o normal"></i> <span class="menu-text">数据魔方</span> <b class="arrow fa fa-angle-right"></b> </a>
          <ul class="submenu" style="display: none; ">
            <li> <a href="javascript:openapp('<?php echo U('Requerydata/index',array('token'=>$token));?>','93Admin','请求数详情');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">请求数详情</span> </a> </li>
            <li> <a href="javascript:openapp('<?php echo U('Wechat_behavior/statistics',array('token'=>$token));?>','94Admin','粉丝行为分析');"> <i class="fa fa-angle-double-right"></i> <span class="menu-text">粉丝行为分析</span> </a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>
<div class="main-content">
  <div class="breadcrumbs" id="breadcrumbs"> <a id="task-pre" class="task-changebt">←</a>
    <div id="task-content">
      <ul class="macro-component-tab" id="task-content-inner">
        <li class="macro-component-tabitem noclose" app-id="0" app-url="/index.php?g=user&m=Index&a=info&token=>$token" app-name="首页"> <span class="macro-tabs-item-text">首页</span> </li>
      </ul>
      <div style="clear:both;"></div>
    </div>
    <a id="task-next" class="task-changebt">→</a> </div>
  <div class="page-content" id="content">
    <iframe src="<?php echo U('User/Function/info',array('token'=>$token,'id'=>session('wxid')));?>" style="width:100%;height: 800px;" frameborder="0" id="appiframe-0" class="appiframe"></iframe>
  </div>
</div>
</div>
<script src="tpl/static/simpleboot/js/jquery.js"></script> 
<script src="tpl/static/simpleboot/bootstrap/js/bootstrap.min.js"></script> 
<script>
	var b = $("#sidebar").hasClass("menu-min");
	var a = "ontouchend" in document;
	$(".nav-list").on(
			"click",
			function(g) {
				var f = $(g.target).closest("a");
				if (!f || f.length == 0) {
					return
				}
				if (!f.hasClass("dropdown-toggle")) {
					if (b && "click" == "tap"
							&& f.get(0).parentNode.parentNode == this) {
						var h = f.find(".menu-text").get(0);
						if (g.target != h && !$.contains(h, g.target)) {
							return false
						}
					}
					return
				}
				var d = f.next().get(0);
				if (!$(d).is(":visible")) {
					var c = $(d.parentNode).closest("ul");
					if (b && c.hasClass("nav-list")) {
						return
					}
					c.find("> .open > .submenu").each(
							function() {
								if (this != d
										&& !$(this.parentNode).hasClass(
												"active")) {
									$(this).slideUp(150).parent().removeClass(
											"open")
								}
							})
				} else {
				}
				if (b && $(d.parentNode.parentNode).hasClass("nav-list")) {
					return false;
				}
				$(d).slideToggle(150).parent().toggleClass("open");
				return false;
			});
	</script> 
<script src="tpl/static/simpleboot/index.js"></script>
</body>
</html>