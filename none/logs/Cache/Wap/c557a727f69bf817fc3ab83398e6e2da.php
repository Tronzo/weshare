<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html><head>

         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title><?php echo ($tpl["wxname"]); ?></title>

        <base href="." />

        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />

        <meta name="apple-mobile-web-app-capable" content="yes" />

        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <meta name="format-detection" content="telephone=no" />

<link href="<?php echo RES;?>/css/allcss/cate29_0.css" rel="stylesheet" type="text/css" />

 

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/129/reset.css" media="all">

<!-- <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/129/home-20.css" media="all"> -->

<script type="text/javascript" src="<?php echo RES;?>/css/129/maivl.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/css/116/jQuery.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/css/129/swipe.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/css/129/zepto.js"></script><link type="text/css" rel="stylesheet" href="<?php echo $staticFilePath;?>/css/touch_index.css"></head>

    <body onselectstart="return true;" ondragstart="return false;">

<div id="top"></div>

<div id="scnhtm5" class="m-body">

<div class="menu">

<a href="<?php echo U('Store/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>所有商品</a>

<a href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>购物车</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>查物流</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>用户中心</a>

</div>  <!--背景音乐-->

 

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/129/font-awesome.css" media="all">



<div class="body">

        <!--

    幻灯片管理

    -->

    <div style="-webkit-transform:translate3d(0,0,0);">

        <div id="banner_box" class="box_swipe" style="visibility: visible;">

            <ul style="list-style: none; width: <?php echo ($num*640); ?>px; transition: 0ms; -webkit-transition: 0ms; -webkit-transform: translate3d(-640px, 0, 0);">

            <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li style="width: 640px; display: table-cell; vertical-align: top;">

                                <a href="<?php echo ($so["url"]); ?>">

                                    <img src="<?php echo ($so["img"]); ?>" style="width:100%;">

                                </a>

                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

                                    

                            </ul>

            <ol>

                <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li <?php if($i == 1): ?>class="on"<?php endif; ?>></li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ol>

        </div>

    </div>

        <script>

        $(function(){

            new Swipe(document.getElementById('banner_box'), {

                speed:500,

                auto:3000,

                callback: function(){

                    var lis = $(this.element).next("ol").children();

                    lis.removeClass("on").eq(this.index).addClass("on");

                }

            });

        });

    </script>

<br><header>

        <div class="snower">

            <script type="text/javascript"></script>

        </div>

    </header>               <!--

        用户分类管理

        -->

        <section>

            <ul class="list_ul">

            <?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i;?><li>

                                                    <a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

                                                    <figure>

                                <div>

                                    <img src="<?php echo ($hostlist["logourl"]); ?>">

                                </div>

                                <figcaption>

                                    <?php echo ($hostlist["name"]); ?>                                 

                                    

                                </figcaption>

                            </figure>

                        </a>

                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

                                    

                            </ul>

        </section>





                    <div class="copyright" style="text-align:center;padding:10px 0">

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