<?php if (!defined('THINK_PATH')) exit();?>﻿<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title><?php echo ($tpl["wxname"]); ?></title>

        <base href="." />

        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />

        <meta name="apple-mobile-web-app-capable" content="yes" />

        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <meta name="format-detection" content="telephone=no" />

        

        

        <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/114/iscroll.css" media="all">

<!-- <link href="<?php echo RES;?>/css/114/cate14_.css" rel="stylesheet" type="text/css"> -->

<link href="<?php echo RES;?>/css/allcss/cate14_0.css" rel="stylesheet" type="text/css" />

<!--背景音乐start-->



<script src="<?php echo RES;?>/js/audio.js" type="text/javascript"></script>



<script type="text/javascript">

// 两秒后模拟点击

setTimeout(function() {

    // IE

    if(document.all) {

        document.getElementById("playbox").click();

    }

    // 其它浏览器

    else {

        var e = document.createEvent("MouseEvents");

        e.initEvent("click", true, true);

        document.getElementById("playbox").dispatchEvent(e);

    }

}, 2000);

</script>

<!--背景音乐end-->

<script src="<?php echo RES;?>/css/114/iscroll.js" type="text/javascript"></script>

<script type="text/javascript">

var myScroll;



function loaded() {

myScroll = new iScroll('wrapper', {

snap: true,

momentum: false,

hScrollbar: false,

onScrollEnd: function () {

document.querySelector('#indicator > li.active').className = '';

document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';

}

 });

 

 

}



document.addEventListener('DOMContentLoaded', loaded, false);

</script><link type="text/css" rel="stylesheet" href="<?php echo $staticFilePath;?>/css/touch_index.css"></head>



<body id="cate16">

<div id="top"></div>

<div id="scnhtm5" class="m-body">

<div class="menu">

<a href="<?php echo U('Store/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>所有商品</a>

<a href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>购物车</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>查物流</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>用户中心</a>

</div>  <!--背景音乐-->

<style>

.btn_music {

display: inline-block;

width: 35px;

height: 35px;

background: url('<?php echo RES;?>/images/play.png') no-repeat center center;

background-size: 100% auto;

position: absolute;

z-index: 100;

left: 15px;

top: 20px;

}

.btn_music.on {

    background-image: url("<?php echo RES;?>/images/stop.png");

}



</style>

<?php if($homeInfo['musicurl'] != false): ?><span id="playbox" class="btn_music" onclick="playbox.init(this).play();" >

    <audio src="<?php echo ($homeInfo["musicurl"]); ?>" loop="" id="audio"></audio>

</span><?php endif; ?>

<div class="banner">

<div id="wrapper" style="overflow: hidden;">

<div id="scroller" style="width: <?php echo ($num*1366); ?>px; -webkit-transition: 0ms; transition: 0ms; -webkit-transform: translate3d(-382.48px, 0px, 0px) scale(1);">

<ul id="thelist">

    <?php if(is_array($flashbg)): $i = 0; $__LIST__ = $flashbg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><p><?php echo ($so["info"]); ?></p><img src="<?php echo ($so["img"]); ?>" style="width: 1366px;"></li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>

</div>

</div>

    <div id="nav">

<div id="prev" onclick="myScroll.scrollToPage(&#39;prev&#39;, 0,400,3);return false">← prev</div>

<ul id="indicator">

            

<?php if(is_array($flashbg)): $i = 0; $__LIST__ = $flashbg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li <?php if($i == 1): ?>class="active"<?php endif; ?> ></li><?php endforeach; endif; else: echo "" ;endif; ?>

 

</ul>

<div id="next" onclick="myScroll.scrollToPage(&#39;next&#39;, 0,400,3);return false">next →</div>

</div>

    <div class="clr"></div>

</div>



<div class="mainmenu">

<ul>

<?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i;?><li>

<div class="menubtn"><a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

            <div class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>"></div>

<div class="menutitle"><?php echo ($hostlist["name"]); ?></div></a>

</div>



</li><?php endforeach; endif; else: echo "" ;endif; ?>



    

<div class="clr"></div>

        

       

</ul>

</div>











 <div style="display:none"> </div>



<script>

var count = document.getElementById("thelist").getElementsByTagName("img").length;  



var count2 = document.getElementsByClassName("menuimg").length;

for(i=0;i<count;i++){

 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";



}

document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";



 setInterval(function(){

myScroll.scrollToPage('next', 0,400,count);

},3500 );

window.onresize = function(){ 

for(i=0;i<count;i++){

document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";



}

 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";

} 





</script>



   <div class="copyright">

<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>

<?php else: ?>

<?php echo ($siteCopyright); endif; ?>

</div>

  

<!-- share -->


	<?php if(ACTION_NAME == 'index'): ?><script type="text/javascript">
			window.shareData = {  
					"moduleName":"Index",
					"moduleID": '0',
					"imgUrl": "<?php echo ($homeInfo["picurl"]); ?>", 
					"timeLineLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"sendFriendLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"weiboLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"tTitle": "<?php echo ($homeInfo["title"]); ?>",
					"tContent": "<?php echo ($homeInfo["info"]); ?>"
				};
		</script>
	<?php else: ?>
		<script type="text/javascript">
			window.shareData = {  
				"moduleName":"Index",
				"moduleID": '1',
				"imgUrl": "<?php echo ($thisClassInfo["img"]); ?>", 
				"timeLineLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"sendFriendLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"weiboLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"tTitle": "<?php echo ($thisClassInfo["name"]); ?>",
				"tContent": "<?php echo ($thisClassInfo["info"]); ?>"
			};
		</script><?php endif; ?>
<?php echo ($shareScript); ?>

<script type="text/javascript" src="/tpl/Wap/default/common/js/ChatFloat.js"></script>
<?php if($kefu['sc'] == '1'): ?><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?></body></html>