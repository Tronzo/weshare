<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html><head>

         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title><?php echo ($tpl["wxname"]); ?></title>

        <base href="." />

        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />

        <meta name="apple-mobile-web-app-capable" content="yes" />

        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <meta name="format-detection" content="telephone=no" />

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/125/wqlcms-ui-1-1.css" media="all">

 

 <!-- <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/125/home-0.css" media="all"> -->

 <link href="<?php echo RES;?>/css/allcss/cate<?php echo ($tpl["tpltypeid"]); ?>_<?php echo ($tpl["color_id"]); ?>.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo RES;?>/css/125/maivl.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/css/116/jQuery.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/css/125/swipe.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/css/125/zepto.js"></script>



    </head>

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

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/125/font-awesome.css" media="all">



<div class="wqlcms-page" style="display:block; ">

    

        <!--

    幻灯片管理

    -->

    <div style="-webkit-transform:translate3d(0,0,0);">

        <div id="banner_box" class="box_swipe" style="visibility: visible;margin-top:-17px;">

            <ul style="list-style: none; width: <?php echo ($num*433); ?>px; transition: 500ms; -webkit-transition: 500ms; -webkit-transform: translate3d(-433px, 0, 0);">

            <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li style="width: 433px; display: table-cell; vertical-align: top;">

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

<header>

        <div class="snower">

            <script type="text/javascript"></script>

        </div>

    </header>             <!--

        用户分类管理

        -->

        <div class="wqlcms-content">

            <div class="wqlcms-list">

                <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>" class="wqlcms-list-item">

                            <div class="wqlcms-list-item-bg">

                            <div>

                                <img src="<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["name"]); ?>" style="width:100%;">

                            </div>

                            <div class="wqlcms-list-item-box">

                                <div class="wqlcms-list-item-line">

                                    <div class="wqlcms-list-item-title"><?php echo ($vo["name"]); ?></div>

                                </div>

                            </div>

                        </div>

                      </a><?php endforeach; endif; else: echo "" ;endif; ?>                                      



                            </div>

        </div>

        



                    

    </div>



    <div class="copyright" style="text-align:center;padding:10px 0">

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

<script type="text/javascript" src="/tpl/Wap/default/common/js/ChatFloat.js"></script>
<?php if($kefu['status'] == '1'): ?><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?> </body></html>