<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>

<html xmlns="http://www.w3.org/1999/html">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta content="black" name="apple-mobile-web-app-status-bar-style">

    <meta name="format-detection" content="telephone=no">

    <meta content="telephone=no" name="format-detection">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title><?php echo ($tpl["wxname"]); ?></title>

    <link type="text/css" rel="stylesheet" href="./tpl/static/tpl/com/css/comstyle.css"/>

    <link type="text/css" rel="stylesheet" href="./tpl/static/tpl/com/css/font-awesome.css"/>

    <link href="./tpl/static/tpl/1117/css/index36.css" media="screen" rel="stylesheet" type="text/css" />

    <script src="./tpl/static/tpl/com/js/comjs.js" type="text/javascript"></script>

    <meta content="authenticity_token" name="csrf-param" />

	<style>

		html,body {

			height:90%;

		}

	</style><link type="text/css" rel="stylesheet" href="<?php echo $staticFilePath;?>/css/touch_index.css"></head>



  <body><div id="top"></div>

<div id="scnhtm5" class="m-body">

<div class="menu">

<a href="<?php echo U('Store/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>所有商品</a>

<a href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>购物车</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>查物流</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>用户中心</a>

</div> 



    <div class="html">

      <div class="stage" id="stage">

        <section id="sec-index">

          

          <div class="body">

            



  <div class="mod-slider slider-ver" id="index">

    <ul class="slider-list">

	<?php if(is_array($flashbg)): $i = 0; $__LIST__ = $flashbg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li>

			<img alt="<?php echo ($so["info"]); ?>" src="<?php echo ($so["img"]); ?>">

		</li><?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>

    </div>

		

          </div>

        </section>



        

    <section class="mod-navLine navLine14">

      <div class="navLine-menu" id="navLine-menu">

        <ul class="p1">

          <li class="s1"><a>菜单</a>

            <ul class="p2">

				<?php if(is_array($cats)): $i = 0; $__LIST__ = array_slice($cats,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i;?><li class="s2">



                    <a href="<?php if(empty($hostlist['sub'])): if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; else: ?>#<?php endif; ?>"><span><?php echo ($hostlist["name"]); ?></span></a>

                    <ul class="p3 a3">

						<?php if(is_array($hostlist['sub'])): $i = 0; $__LIST__ = array_slice($hostlist['sub'],0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;?><li>

								  <a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$hostlist['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>"><?php echo ($res["name"]); ?></a>



							</li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>

                </li><?php endforeach; endif; else: echo "" ;endif; ?>



            </ul>

          </li>

        </ul>

      </div>

    </section>





      </div><!--.stage end-->

	  

    </div><!--.html end-->

    <footer style="z-index:100;">

       

 <?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>

<?php else: ?>

<?php echo ($siteCopyright); endif; ?>



    </footer>

    <script type="text/javascript">

      $(document).ready(function(){



                indexSwipe("index", ["", "", ""]);      

  navLineSwipe=divSwipe("navLine-menu");





        showBtnUp(100);



      });

	  

    </script>

 <div id="insert2"></div>





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
<?php if($kefu['sc'] == '1'): ?><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?></body>

</html>