<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title><?php echo ($tpl["wxname"]); ?></title>

<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">

<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta name="format-detection" content="telephone=no">

<meta charset="utf-8">

<link href="./tpl/static/tpl/170/css/cate.css" rel="stylesheet" type="text/css" />

 <link href="./tpl/static/tpl/com/css/iscroll.css" rel="stylesheet" type="text/css" />



<style>

  

</style>

<script src="./tpl/static/tpl/com/js/iscroll.js" type="text/javascript"></script>

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



<body>

		<!--music-->

		 

<div id="top"></div>

<div id="scnhtm5" class="m-body">

<div class="menu">

<a href="<?php echo U('Store/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>所有商品</a>

<a href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>购物车</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>查物流</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>用户中心</a>

</div> <div class="banner">

<div id="wrapper">

<div id="scroller">

<ul id="thelist">

				<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><p><?php echo ($so["info"]); ?></p><a href="<?php echo ($so["url"]); ?>"><img src="<?php echo ($so["img"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>

</div>

</div>

      <div id="nav">



<ul id="indicator">

				<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li <?php if($i == 1): ?>class="active"<?php endif; ?> ></li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>



</div>

<div class="clr"></div>

</div>



<div class="mainmenu">





		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%3 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%3 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>



    

		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,3,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%2 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%2 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>



    

 

		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,5,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%3 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%3 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>



    

		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,8,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%2 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%2 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>



    

		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,10,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%3 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%3 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>



    

		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,13,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%2 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%2 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>



    

 

		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,15,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%3 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%3 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>



    

		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,18,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%2 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%2 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>

    

 

		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,20,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%3 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%3 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>



    

		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,23,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%2 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%2 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>

    

 

		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,25,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%3 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%3 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>



    

		<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,28,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i%2 == 1): ?><ul><?php endif; ?>

				<li>

					<a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

						<p class="menutitle"><?php echo ($hostlist["name"]); ?></p>

						<p class="menuimg"><img src="<?php echo ($hostlist["logourl"]); ?>" /></p>

					</a>

				</li>	

			<?php if($i%2 == 0): ?></ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>



    





</div>

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
<?php if($kefu['sc'] == '1'): ?><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?></body>

</html>