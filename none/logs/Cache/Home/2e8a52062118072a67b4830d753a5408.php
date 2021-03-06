<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)<?php echo ($f_siteUrl); ?>/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($f_siteName); ?> <?php echo ($f_siteTitle); ?></title>
<meta name="keywords" content="<?php echo ($f_siteName); ?> <?php echo ($f_siteTitle); ?>">
<meta name="description" content="<?php echo ($f_siteName); ?> <?php echo ($f_siteTitle); ?>">
<link rel="shortcut icon" href="/favicon.ico">
<script type="text/javascript" src="<?php echo RES;?>/js/global.js"></script>
<script language="javascript" src="<?php echo RES;?>/js/jquery-1.4.4.min.js"></script>
<script language="javascript" src="<?php echo RES;?>/js/jquery.easing.js"></script>
<script src="http://res.xiami.net/pc/lay/lib.js"></script>
<script src="/tpl/static/layer/layer.min.js"></script>

<link href="<?php echo RES;?>/css/index-new.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/mechat-pc.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/font-awesome.css" rel="stylesheet" type="text/css">
<style>
.newarrowdown {
	background-image: url(<?php echo RES;?>/images/sub-menu.png);
	background-repeat: no-repeat;
	height: 18px;
	position: absolute;
	width: 13px;
	margin-top: 15px;
	background-position: -15px 5px;
}
.newarrowup {
	background-image: url(<?php echo RES;?>/images/sub-menu.png);
	background-repeat: no-repeat;
	height: 18px;
	position: absolute;
	width: 13px;
	margin-top: 15px;
	background-position: -2px 4px;
}
.sub-nav {
	border-radius: 4px 4px 4px 4px;
	position: absolute;
	padding-top: 5px;
	margin-top: 10px;
	background: none repeat scroll 0px 0px rgb(107, 105, 88);
	width: 108px;
	top: 30px;
	margin-left: 11px;
	opacity: 0.8;
}
.sub-nav-none {
	border-radius: 4px 4px 4px 4px;
	position: absolute;
	padding-top: 5px;
	margin-top: 10px;
	background: none repeat scroll 0px 0px rgb(107, 105, 88);
	width: 108px;
	top: 30px;
	margin-left: 11px;
	opacity: 0.8;
	display: none;
}
.sub-nav-a {
	color: white;
	margin-left: 0px;
}
li.login:hover div {
	display: block;
}
li.login:hover i {
	background-position: -2px 4px;
}
li.login0:hover div {
	display: block;
}
li.login0:hover i {
	background-position: -2px 4px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){

$(function(){
// var showFirst = true;
var index = 0;
var slen = $('.bannerImg').length;
setInterval(function () {
// console.log(index);
if (index<(slen-1)){
$('.bannerImg').eq(index).fadeOut(2000);
$('.bannerImg').eq(index+1).fadeIn(2000);
index = index + 1;
} else {
$('.bannerImg').eq(index).fadeOut(2000);
$('.bannerImg').eq(0).fadeIn(2000);
index = 0;
}
},7000);
setTimeout(function(){
var index = 0;
setInterval(function () {
if (index<6){
index = index + 1;
} else {
index = 0;
}
$('.dialogs .dialog').removeClass('curDia').eq(index).addClass('curDia');
},2000);
}, 1000);

});

function resize_img(val) {
var width = 237;
var zoom_percen = width * 0.5; // Maximum zoom 50%
var ASPECT = zoom_percen / 50;
var zoom_value = val / 2;
var size = width + ASPECT * zoom_value;
var d = ASPECT*zoom_value/2;          
$('lineBox img').stop(true).animate({
marginTop: -d,
marginLeft: -d,
width: size
}, 1000);
}
var area = {width:420, height:210};
var mihash = {
line:     {width:240, height:240, marginLeft: 0,  marginTop:-4  },
person:   {width:60,  height:60,  marginLeft: 0,  marginTop:0 },
bus:      {width:56,  height:56,  left: 315, top: 135},
bed:      {width:68,  height:68,  left: 84,  top: 1  },
bike:     {width:74,  height:74,  left: 324, top: 17 },
eatting:  {width:48,  height:48,  left: 233, top: 144},
shopping: {width:56,  height:56,  left: 104, top: 139},
travel:   {width:46,  height:46,  left: 203, top: 22 },
drink:    {width:50,  height:50,  left: 47,  top: 66 }
}
var once = false;
var targettop = $('#masterWrap').offset().top;
var wh = $(window).height();
$(window).scroll(function(){
var scrollHeiht= $(document).scrollTop();
// console.log(targettop,wh,scrollHeiht);
if((wh+scrollHeiht)>(targettop+100)){
if (!once){
// resize_img(0);
for (var key in mihash){
var params = mihash[key];
if (key=='person'){
$('.personBox img').stop(true).animate({
marginTop: 0,
marginLeft: 0,
width: 60,
height: 60
}, {
duration: 1000,
queue: true,
easing: 'linear',
}).animate({
marginTop: 10,
marginLeft: 10,
width: 40,
height: 40,
opacity: 1
},1000,'linear',function(){});

} else if (key=='line'){
// var fp = {width:mihash[key]['width']/2, height:mihash[key]['height']/2};
$('.lineBox img').stop(true).animate({
marginTop: mihash[key]['height']/2 + mihash[key]['marginTop'],
marginLeft: mihash[key]['width']/2,
width: 0,
height: 0,
opacity: 0
}, {
duration: 1000,
queue: true,
easing: 'linear',
}).animate({
marginTop: mihash[key]['marginTop'],
marginLeft: mihash[key]['marginLeft'],
width: mihash[key]['width'],
height: mihash[key]['height'],
opacity: 1
},1000,'easeInBounce',function(){});
} else {
// $('img.'+key).css({width:0, height:0, top: '120px', left: '187px', opacity:0});
$('img.'+key).animate({
width:'0px', 
height:'0px', 
top: '114px', 
left: '209px', 
opacity:0
},{
duration: 1000,
queue: true,
easing: 'linear'
}).animate({
left:mihash[key].left+'px',
top:mihash[key].top+'px', 
width:mihash[key].width+'px', 
height:mihash[key].height+'px', 
opacity:1
},1000,'easeInBounce',function(){});
}
}
once = true;
}
}
});
setInterval(function(){
var length = $('.dots .dot').length;
var index = $('.dots .dot').index($('.dots .dot.now'));
var next;
if (index>=(length-1)){
next = 0;
} else {
next = index+1;
}
// console.log(index, next);
$('.words .r-w').eq(index).fadeOut(1500, function(){
$('.words .r-w').removeClass('now');
$('.dots .dot').removeClass('now');
$('.dots .dot').eq(next).addClass('now');
$('.words .r-w').eq(next).fadeIn(2000, function(){
$('.words .r-w').eq(next).addClass('now');
})
});
$('.author .a-h').eq(index).fadeOut(1500, function(){
$('.author .a-h').removeClass('now');
$('.author .a-h').eq(next).fadeIn(2000, function(){
$('.author .a-h').eq(next).addClass('now');
})
});
}, 6000);

});
</script>
</head>
<body>
<!--ie9以下提示--> 
<script type="text/javascript" src="<?php echo RES;?>/js/ie9.js"></script>
<link href="<?php echo RES;?>/css/ie9top.css" rel="stylesheet" type="text/css">
<div id="ie9version">
  <ul>
    <li>你的浏览器版本太低啦~~无法正常使用<?php echo ($f_siteName); ?>平台</li>
    <li>建议你使用谷歌浏览器</li>
  </ul>
</div>
<div class="topNavBox">
  <div class="topNavCenterBox"><a href="/"> <img width="140" height="40" src="<?php echo ($f_logo); ?>"></a>
    <ul class="nav">
      <li class="cur"><a href="<?php echo ($f_siteUrl); ?>/index.php">首页</a></li>
      <li><a target="_blank" href="<?php echo ($f_ltUrl); ?>">莱微商城</a></li>
      <li><a target="_blank" href="<?php echo U('Home/Index/help');?>">功能介绍</a></li>
      <li><a target="_blank" href="<?php echo U('Home/Index/lx');?>">联系我们</a></li>
      <li><a target="_blank" href="<?php echo U('Home/Index/ym');?>">业务功能</a></li>
      <li><a target="_blank" title="open" href="<?php echo U('Home/Index/wifi');?>">WIFI路由</a></li>
      <li class="login0"><a>了解更多</a><i class="newarrowdown"></i>
        <div class="sub-nav-none"> <a target="_blank" title="kefu" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_kfqq); ?>&site=qq&menu=yes">在线客服</a>  <a target="_blank" title="order" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_kfqq); ?>&site=qq&menu=yes">定制开发</a> <a target="_blank" title="tuoguan" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_kfqq); ?>&site=qq&menu=yes">托管运营</a> <a target="_blank" title="agent" href="<?php echo ($f_siteUrl); ?>/index.php?act=partner">代理合作</a> <a title="wifi" href="<?php echo U('Home/Index/wifi');?>">wifi路由</a>  <a target="QQqun" href="<?php echo ($f_qqqun); ?>">加入QQ群</a> </div>
      </li>
      <?php if($_SESSION['uid']==false): ?><li class="login"><a href="<?php echo U('Index/login');?>">登录</a></li>
        <li class="register"><a href="<?php echo U('Index/reg');?>">免费注册</a></li>
        <?php else: ?>
        <li><a href="<?php echo U('User/Index/index');?>" style="color:red">你好,<?php echo (session('uname')); ?></a></li>
        <li><a href="<?php echo U('Home/Index/logout');?>">退出</a></li><?php endif; ?>
    </ul>
  </div>
</div>

<!--S背景大图-->
<div class="bigBannerImgBox">
  <div style="display: none; " class="bannerImg" id="bg1"></div>
  <div style="display: block; " class="bannerImg" id="bg2"></div>
  <!-- <div class="bannerImg" id="bg3"></div> -->
  <div class="midImgBox">
    <div class="mid-img"> <img id="iphoneBg" src="<?php echo RES;?>/images/img_home_ip5.png" height="630" width="371">
      <div class="dialogs"> <img class="dialog" src="<?php echo RES;?>/images/app_screenshot_1.png"> <img class="dialog" src="<?php echo RES;?>/images/app_screenshot_2.png"> <img class="dialog" src="<?php echo RES;?>/images/app_screenshot_3.png"> <img class="dialog" src="<?php echo RES;?>/images/app_screenshot_4.png"> <img class="dialog curDia" src="<?php echo RES;?>/images/app_screenshot_5.png"> <img class="dialog" src="<?php echo RES;?>/images/app_screenshot_6.png"> <img class="dialog" src="<?php echo RES;?>/images/app_screenshot_7.png"> </div>
      <div class="midLeft"> <img src="<?php echo RES;?>/images/slogan.png" height="84" width="324"> <a href="<?php echo U('Index/reg');?>"><span>立即免费注册</span></a> </div>
    </div>
  </div>
  <div class="midInfoBox"> 
    <!-- <div class="midInfoBg"></div> --> 
    <!--     <div class="midInfoWrap">

</div> --> 
  </div>
</div>
<!--E背景大图-->
<div style="height: 325px; background: none repeat scroll 0px 0px rgb(35, 35, 36); margin-top: -10px;" class="featuresBox">
  <div class="box">
    <div style="text-align:center;font-size: 36px;margin-top: 10px;" id="whyuse">
      <p style="color:white;font-weight: bold;">便捷  And  稳定<br>
        <span style="color:orange;font-size: 14px;">This is why you will use it :)</span></p>
    </div>
    <div style="height:300px;" id="introuse">
      <ul style="width: 70%; margin-left: 22%;">
        <li style="height:200px;text-align:center;width:250px;"><img src="<?php echo RES;?>/images/fuhao11.png"><br>
          <p style="color:white;font-size: 20px;font-weight: bold;">服务</p>
          <span style="color:#E84C3C;font-size: 14px;font-weight: bold;">打造完美用户体验，用心服务直至到<br>
          永远</span></li>
        <li style="height: 200px; text-align: center; width: 250px; margin-left: 20px; margin-right: 20px;"><img src="<?php echo RES;?>/images/fuhao22.png"><br>
          <p style="color:white;font-size: 20px;font-weight: bold;">合作</p>
          <span style="color: rgb(232, 76, 60); font-size: 14px; font-weight: bold;">深度合作，打造一片属于我们的世界</span></li>
        <li style="height:200px;text-align:center;width:250px;"><img src="<?php echo RES;?>/images/disangeyuanquan.png"><br>
          <p style="color:white;font-size: 20px;font-weight: bold;">创新</p>
          <span style="color:#E84C3C;font-size: 14px;font-weight: bold;">我们不断地去创新和改善产品，站在用户角度去想问题</span></li>
      </ul>
    </div>
  </div>
</div>
<div class="featuresBox">
  <div class="pnwo"><img src="<?php echo RES;?>/images/pnwo.png"></div>
  <ul>
    <li class="device">
      <div class="ficon"></div>
      <div class="ftext">APP实时通知</div>
    </li>
    <li class="partner">
      <div class="ficon"></div>
      <div class="ftext">完善的微信解决方案</div>
    </li>
    <li class="lbs">
      <div class="ficon"></div>
      <div class="ftext">让用户无处不在</div>
    </li>
    <li class="sheet">
      <div class="ficon"></div>
      <div class="ftext">多店商城</div>
    </li>
  </ul>
  <div class="featuresMore"><a href="<?php echo ($f_siteUrl); ?>/index.php?act=service">查看更多功能</a></div>
</div>
<div class="briefBox">
  <div class="brief">
    <div class="advices">
      <div class="advice">
        <div class="quotation q-left"></div>
        <div class="words">
          <div style="display: block; opacity: 0.92736975; " class="r-w">使用了<?php echo ($f_siteName); ?>平台之后，处理用户反馈信息得到了及时，无形中就加深了客户对品牌的信任度，进而的提升了消费转化率。</div>
          <div style="display: none; " class="r-w">之前我们机构在PC网站、企业微博、微信,都需要安排不同的同事去处理咨询问题，而且也不能时刻都在电脑前,现在有了<?php echo ($f_siteName); ?>我们只需要登录一个平台就可以轻松搞定,手机版有了之后更方便了</div>
          <div style="display: none; opacity: 0.068775; " class="r-w">我们公司没有专门的在线客服，但通过网络方式来了解我们产品的客户越来越多，<?php echo ($f_siteName); ?>的手机多客服让我们的客服工作变得非常的灵活便捷，太酷了！</div>
          <div style="display: none; " class="r-w">绑定微信公众帐号，使用多客服系统，把不同的业务内容转接到不同的客服处理，解决了我们售后服务的快速响应问题，用移动互联网的方式与粉丝沟通的感觉非常棒！</div>
        </div>
        <div class="quotation q-right"></div>
      </div>
      <div class="author">
        <div style="display: block; opacity: 0.9284437500000001; " class="a-h">--深圳新国都</div>
        <div style="display: none; " class="a-h">--星光传媒</div>
        <div style="display: none; opacity: 0.068775; " class="a-h">余额宝--</div>
        <div style="display: none; " class="a-h">--万达</div>
      </div>
      <div class="dots">
        <div class="dot now"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
    <div class="partners">
      <div class="ptitle">他们都在使用<?php echo ($f_siteName); ?></div>
      <div class="pbox"> <a class="pt p-1" href="<?php echo ($f_siteUrl); ?>/bbs/forum.php?mod=viewthread&tid=19"></a> <a class="pt p-2" href="<?php echo ($f_siteUrl); ?>/bbs/forum.php?mod=viewthread&tid=19"></a> <a class="pt p-3" href="<?php echo ($f_siteUrl); ?>/bbs/forum.php?mod=viewthread&tid=19"></a> <a class="pt p-4" href="<?php echo ($f_siteUrl); ?>/bbs/forum.php?mod=viewthread&tid=19"></a> <a class="pt p-5" href="<?php echo ($f_siteUrl); ?>/bbs/forum.php?mod=viewthread&tid=19"></a> <a class="pt p-6" href="<?php echo ($f_siteUrl); ?>/bbs/forum.php?mod=viewthread&tid=19"></a> <a class="pt p-7" href="<?php echo ($f_siteUrl); ?>/bbs/forum.php?mod=viewthread&tid=19"></a> </div>
    </div>
  </div>
</div>
<div id="masterWrap" class="masterWrap">
  <div class="masterBox">
    <div class="masterText">
      <h2>移动沟通尽情掌控</h2>
      <h4>实时订单通知 系统公告 功能管理</h4>
      <div class="dn-link"> <a href="<?php echo ($f_siteUrl); ?>/tpl/Home/weiqianlong/common/images/laivw.avi"><span>下载安卓客户端</span></a> </div>
    </div>
    <div class="masterAni">
      <div class="lineWrap">
        <div class="lineBox"> <img style="display: inline-block; opacity: 1; margin-top: -4px; margin-left: 0px; width: 240px; height: 240px; " src="<?php echo RES;?>/images/line.png"></div>
      </div>
      <div class="personWrap">
        <div class="personBox"> <img style="display: inline-block; margin-top: 10px; margin-left: 10px; width: 40px; height: 40px; opacity: 1; " title="莱微" src="<?php echo RES;?>/images/person.png"> </div>
      </div>
      <img style="opacity: 1; width: 68px; height: 68px; top: 1px; left: 84px; " class="masterimg bed" title="服务行业" src="<?php echo RES;?>/images/bed.png"> <img style="opacity: 1; width: 74px; height: 74px; top: 17px; left: 324px; " class="masterimg bike" title="生产制造" src="<?php echo RES;?>/images/bike.png"> <img style="opacity: 1; width: 56px; height: 56px; top: 135px; left: 315px; " class="masterimg bus" title="汽车行业" src="<?php echo RES;?>/images/bus.png"> <img style="opacity: 1; width: 50px; height: 50px; top: 66px; left: 47px; " class="masterimg drink" title="酒吧行业" src="<?php echo RES;?>/images/drink.png"> <img style="opacity: 1; width: 56px; height: 56px; top: 139px; left: 104px; " class="masterimg shopping" title="多商城系统" src="<?php echo RES;?>/images/shopping.png"> <img style="opacity: 1; width: 46px; height: 46px; top: 22px; left: 203px; " class="masterimg travel" title="旅游行业" src="<?php echo RES;?>/images/travel.png"> <img style="opacity: 1; width: 48px; height: 48px; top: 144px; left: 233px; " class="masterimg eatting" title="餐饮行业" src="<?php echo RES;?>/images/eatting.png"> </div>
  </div>
</div>
<div class="guideBox">
  <div class="guide">
    <div class="fee">
      <p>永久免费使用</p>
    </div>
    <div class="case">
      <p>自由选择方案，随时满足需求</p>
    </div>
    <div class="guide-features">
      <ul>
        <li class="ssl">
          <div class="gnIcon"></div>
          <div class="gnText">高级安全策略</div>
        </li>
        <li class="everywhere">
          <div class="gnIcon"></div>
          <div class="gnText">随时按需升级</div>
        </li>
        <li class="limit">
          <div class="gnIcon"></div>
          <div class="gnText">多种行业需求</div>
        </li>
        <li class="mail">
          <div class="gnIcon"></div>
          <div class="gnText">便捷简单功能</div>
        </li>
      </ul>
    </div>
    <!-- <div class="guide-link-index"><a href="/pricing"><span>查看与购买付费方案</span></a></div> -->
    <div class="guide-link"><a href="<?php echo U('Index/reg');?>"><span>永久免费注册</span></a></div>
  </div>
</div>
<div class="footer">
  <div class="footerCenter">
    <div class="footerLink">
      <div class="footerLogo"> <a class="flogo" href="<?php echo ($f_siteUrl); ?>/"><img src="<?php echo ($f_logo); ?>"></a> </div>
      <a class="ftext" href="<?php echo ($f_siteUrl); ?>/#">关于我们</a> &nbsp;&nbsp;<a target="_blank" class="ftext" href="http://www.laivw.com/">开放平台</a> &nbsp;&nbsp;<a target="_blank" class="ftext" href="<?php echo ($f_siteUrl); ?>/index.php?act=partner">代理合作</a> &nbsp;&nbsp;<a class="ftext" href="">©2013-2014 <?php echo ($f_siteName); ?> </a> </div>
    <div class="footerWeibo">
      <h1>腾讯微博<a target="_blank" href="http://t.qq.com/laiweiv5/profile?pgv_ref=im.aio.t&ptlang=2052">@<?php echo ($f_siteName); ?>微信</a></h1>
      <div>
        <p id="weiboCon"><?php echo ($f_metaDes); ?></p>
        <p id="weiboTime" class="date"></p>
      </div>
    </div>
    <div class="footerContact">
      <div class="contactItem">
        <div class="ciIcon"><i class="fa fa-comments-o"></i></div>
        <div class="ciText"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_kfqq); ?>&site=qq&menu=yes">QQ <?php echo ($f_kfqq); ?></a><br>
          <span>点击在线交流</span></div>
      </div>
      <div class="contactItem">
        <div class="ciIcon"><i class="fa fa-envelope-o"></i></div>
        <div class="ciText"><a href="mailto:<?php echo ($f_email); ?>" target="_blank" title="发送邮件给我们"><?php echo ($f_email); ?></a><br>
          <span>点击发送邮件</span></div>
      </div>
      <div class="contactItem">
        <div class="ciIcon"><i class="fa fa-phone"></i></div>
        <div class="ciText" style="padding-top:4px;"><?php echo ($site_tel); ?></div>
      </div>
    </div>
    <div class="footerWeixin">
      <h1 style="padding-bottom:9px;"><?php echo ($f_siteName); ?>科技</h1>
      <div><img src="<?php echo ($f_qrcode); ?>"></div>
      <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1252909288'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/stat.php%3Fid%3D1252909288%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    </div>
  </div>
</div>
</body>
<script>



}();
$('#taobao').on('click', function(){
    $.layer({
    type: 2,
    maxmin: true,
    shadeClose: true,
    title: '微乾隆唯一官方淘宝店',
    shade: [0.1,'#fff'],
    offset: ['20px',''],
    area: ['1000px', ($(window).height() - 50) +'px'],
    iframe: {src: 'http://item.taobao.com/item.htm?spm=686.1000925.1000774.13.8xglvh&id=38981845209'}
}); 
});
</script>
</html>