<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html><head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title><?php echo ($tpl["wxname"]); ?></title>

        <base href="." />

        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />

        <meta name="apple-mobile-web-app-capable" content="yes" />

        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <meta name="format-detection" content="telephone=no" />

<link href="<?php echo RES;?>/css/allcss/cate31_0.css" rel="stylesheet" type="text/css" />

<!-- <link href="<?php echo RES;?>/css/131/cate12_.css" rel="stylesheet" type="text/css"> -->

<link href="<?php echo RES;?>/css/131/iscroll.css" rel="stylesheet" type="text/css">

 

<script src="<?php echo RES;?>/css/131/jquery.min.js" type="text/javascript"></script>

<script src="<?php echo RES;?>/css/131/idangerous.swiper.js" type="text/javascript"></script>

<script src="<?php echo RES;?>/css/131/iscroll.js" type="text/javascript"></script>

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



<body id="cate12">

<div id="top"></div>

<div id="scnhtm5" class="m-body">

<div class="menu">

<a href="<?php echo U('Store/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>所有商品</a>

<a href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>购物车</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>查物流</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>用户中心</a>

</div>  <!--背景音乐-->

 

<div class="banner">

<div id="wrapper" style="overflow: hidden;">

<div id="scroller" style="width: <?php echo ($num*1349); ?>px; -webkit-transition: 0ms; transition: 0ms;">

<ul id="thelist">

<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><p><?php echo ($so["info"]); ?></p>

<a href="<?php echo ($so["url"]); ?>">

<img src="<?php echo ($so["img"]); ?>" style="width: 1349px;">

</a>

</li><?php endforeach; endif; else: echo "" ;endif; ?> 



 



</ul>

</div>

</div>

<div id="nav">

<div id="prev" onclick="myScroll.scrollToPage(&#39;prev&#39;, 0,400,3);return false">← prev</div>

<ul id="indicator">

            

<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li <?php if($i == 1): ?>class="active"<?php endif; ?>></li><?php endforeach; endif; else: echo "" ;endif; ?>

 

</ul>

<div id="next" onclick="myScroll.scrollToPage(&#39;next&#39;, 0);return false">next →</div>

</div>

<div class="clr"></div>

</div>

 

 <div id="insert1"></div>



<?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i;?><div class="Category">

<div class="cname"><a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>" class="more"><!-- 查看更多 --></a><?php echo ($hostlist["name"]); ?></div>

    <div class="clist swiper-container clist<?php echo ($hostlist["key"]); ?>">

<div class="swiper-wrapper" style="width: 1295.03125px;">

    <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1295.03125px;">

<ul>

      

        

        <?php if(is_array($hostlist['sub'])): $i = 0; $__LIST__ = $hostlist['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;?><li><a href="<?php if($res['url'] == ''): echo U('Store/product',array('token' => $_GET['token'], 'id' => $res['id'], 'wecha_id' => $_GET['wecha_id'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>"><div><img src="<?php echo ($res["logourl"]); ?>"></div><span><?php echo ($res["name"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>

    </div>

</div>

<script>

    $(function(){

    new Swiper('.clist'+<?php echo ($hostlist['key']); ?>,{

     followFinger:false

      });

    });

</script> 

</div>

</div><?php endforeach; endif; else: echo "" ;endif; ?>









<script>





var count = document.getElementById("thelist").getElementsByTagName("img").length;  





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

    

 <div id="insert2"></div>

 <div class="copyright">

 <?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>

<?php else: ?>

<?php echo ($siteCopyright); endif; ?>

 </div> 



 <div style="display:none"> </div>





  

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