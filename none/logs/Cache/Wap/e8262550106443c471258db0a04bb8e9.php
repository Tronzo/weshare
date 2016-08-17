<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html><head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title><?php echo ($tpl["wxname"]); ?></title>

        <base href="." />

        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />

        <meta name="apple-mobile-web-app-capable" content="yes" />

        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <meta name="format-detection" content="telephone=no" />

<link href="<?php echo RES;?>/css/allcss/cate17_0.css" rel="stylesheet" type="text/css" />



        <!-- <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/117/common.css" media="all"> -->

        <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/117/reset.css" media="all">

        <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/117/font-awesome.css" media="all">

        <!-- <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/117/home-51.css" media="all"> -->

        <script type="text/javascript" src="<?php echo RES;?>/css/116/jQuery.js"></script><link type="text/css" rel="stylesheet" href="<?php echo $staticFilePath;?>/css/touch_index.css"></head>

    <body onselectstart="return true;" ondragstart="return false;">

    

    <!--背景音乐-->

<?php if($homeInfo['musicurl'] != false): ?><style>
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

<span id="playbox" class="btn_music" onclick="playbox.init(this).play();">
    <audio src="<?php echo ($homeInfo["musicurl"]); ?>" loop="" id="audio"></audio>
</span><?php endif; ?>



        <style type="text/css">

.body{

    display:block;

    /*background:url("<?php if($homeInfo["homeurl"] != false): echo ($homeInfo["homeurl"]); else: echo RES;?>/images/themes/bg1.jpg<?php endif; ?> ") no-repeat center 0;*/

    <?php if(is_array($flashbg)): $i = 0; $__LIST__ = $flashbg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?>background:url('<?php echo ($so["img"]); ?>') no-repeat center 0;<?php endforeach; endif; else: echo "" ;endif; ?>

        background-size:100% 100%;

}

</style>

<div class="body">

    

    <section>

        <div class="box_title">

            <hgroup>

              <h1><?php echo ($homeInfo["title"]); ?></h1>

                <h3><?php echo ($homeInfo["info"]); ?></h3>

            </hgroup>

        </div>

        <ul class="list_ul">

            <?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%3 == 1): ?><li class="box"><?php endif; ?>

				

				                                

				<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

										<label><small><?php echo ($hostlist["name"]); ?></small></label>

						<span ><img src="<?php echo ($hostlist["logourl"]); ?>" class="icon-smile" style="width:60px;position:relative;right:-16px;"></span>

					</a>

				

			   

													

				<?php if($i%3 == 0): ?></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

  

             </ul>

    </section>



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

</script>

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



                    <div class="copyright" style="text-align:center">

<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>

<?php else: ?>

<?php echo ($siteCopyright); endif; ?>

</div>

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