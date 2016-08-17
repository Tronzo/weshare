<?php if (!defined('THINK_PATH')) exit();?><html>

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

<link href="<?php echo RES;?>/css/allcss/cate<?php echo ($tpl["tpltypeid"]); ?>_<?php echo ($tpl["color_id"]); ?>.css" rel="stylesheet" type="text/css" />

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
<script src="/tpl/Wap/default/common/dkm/jquery.min.js"></script>
<script src="<?php echo RES;?>/css/114/iscroll.js" type="text/javascript"></script>


<link rel="stylesheet" href="/tpl/Wap/default/common/dkm/lrtk.css">


</head>



<body id="cate16" style="background:url(/tpl/Wap/default/common/dkm.png) no-repeat ; background-size:100% 100%">

<!--背景音乐-->

<style>
#cate16 .menutitle {

line-height: 77px;
}

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

    <audio src="<?php echo ($homeInfo["musicurl"]); ?>" loop id="audio"></audio>

</span><?php endif; ?>

<div class="banner" style=" background:red; height:100px; width:97%; margin-top:27%; margin-bottom:30%">

<div class="slide_container">
      <ul class="rslides" id="slider">
      <?php if(is_array($flashbg)): $i = 0; $__LIST__ = $flashbg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li>
          <img src="<?php echo ($so["img"]); ?>" alt="">
          
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
          
      </ul>
    </div>
</div>



<div class="mainmenu" style="margin-top:30%">

<ul>

<?php if(is_array($info)): $i = 0; $__LIST__ = array_slice($info,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="float:none">

<div class="menubtn" style="border-radius:50px; background:url(<?php echo ($vo["img"]); ?>) no-repeat; background-size:100%"><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">

            <div class="menuimg"></div>

<div class="menutitle" style="color:#000"><?php echo ($vo["name"]); ?></div></a>

</div>



</li><?php endforeach; endif; else: echo "" ;endif; ?>



    

<div class="clr"></div>

        

       

</ul>

</div>











 <div style="display:none"> </div>







   <div class="copyright">

<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>

<?php else: ?>

<?php echo ($siteCopyright); endif; ?>

</div>

<?php echo ($bjdh); ?>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<?php if($radiogroup > 8): ?><br>
<br><br><?php endif; ?>
<script>
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script> 

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
<script src="/tpl/Wap/default/common/dkm/responsiveslides.min.js"></script>
<script src="/tpl/Wap/default/common/dkm/slide.js"></script>
<script type="text/javascript" src="/tpl/Wap/default/common/js/ChatFloat.js"></script>
<?php if($kefu['status'] == '1'): ?><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?> </body></html>