<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo ($tpl["wxname"]); ?></title>
        <base href="." />
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
<link href="<?php echo RES;?>/css/allcss/cate<?php echo ($tpl["tpltypeid"]); ?>_<?php echo ($tpl["color_id"]); ?>.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/124/common.css" media="all">  -->   
      
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/124/reset.css" media="all">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/124/cate12_2.css" media="all"> -->
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/124/iscroll.css" media="all">
<style>
#cate12 .Category ul li {
float: left;
width: 21%;
margin: 0% 2%;}
#cate12 .Category ul li span {
float: left;
width: 100%;
text-align: center;
font-size: 12px;
line-height: 10px;
height: 28px;
color: #666;
margin-top: 5%;
overflow: hidden;
text-overflow: ellipsis;
}

</style>
<script type="text/javascript" src="<?php echo RES;?>/css/116/jQuery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/124/jquery_min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/124/idangerous_swiper.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/124/iscroll.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/124/swipe.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/124/zepto.js"></script>
<script src="./tpl/static/tpl/com/js/jquery-1.10.1.min.js" type="text/javascript"></script>

  <script src="./tpl/static/tpl/com/js/idangerous.swiper-2.1.min.js" type="text/javascript"></script>
 
  
    </head>
    <body onselectstart="return true;" ondragstart="return false;" id="cate12">
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
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/124/font-awesome.css" media="all">



<div class="body">
        <!--
    幻灯片管理
    -->
    <div style="-webkit-transform:translate3d(0,0,0);">
        <div id="banner_box" class="box_swipe" style="visibility: visible;">
            <ul style="list-style: none; width: <?php echo ($num*433); ?>px; transition: 0ms; -webkit-transition: 0ms; -webkit-transform: translate3d(0px, 0, 0);">
            <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li style="width: 433px; display: table-cell; vertical-align: top;">
                    <a href="<?php echo ($so["url"]); ?>">
                        <img src="<?php echo ($so["img"]); ?>"  style="width:100%;">
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
            <!--
        用户分类管理
        -->
        <div id="insert1"></div>
            <?php if(is_array($info)): $i = 0; $__LIST__ = array_slice($info,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="Category">
                <div class="cname">
                    <?php echo ($vo["name"]); ?>                <a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>" class="more"> 查看更多</a>
                </div>
               <div class="device">
    <a class="arrow-left" href="#"></a> 
    <a class="arrow-right" href="#"></a>
    <div class="clist swiper-container" style="padding-bottom: 3%;">
      <div class="swiper-wrapper">
       
        <div class="swiper-slide">
                  <ul>
                       <?php if(is_array($vo['sub'])): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i; if($i < 9): ?><li>
                            
                            <a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$res['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>">
                            <div>
                                <img src="<?php echo ($res["img"]); ?>">
                            </div>
                                <span><?php echo ($res["name"]); ?></span>
                            </a>
                            
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
        </div>
        
          <div class="swiper-slide">
          <ul>
                    <?php if(is_array($vo['sub'])): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i; if($i > 8): ?><li>
                            
                            <a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$res['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>">
                            <div>
                                <img src="<?php echo ($res["img"]); ?>">
                            </div>
                                <span><?php echo ($res["name"]); ?></span>
                            </a>
                            
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
        </div>
        
      </div>
    </div>
    <div class="pagination" style="right:45%"></div>
  </div></div><?php endforeach; endif; else: echo "" ;endif; ?>        
    <!--2!-->
     <?php if(is_array($info)): $i = 0; $__LIST__ = array_slice($info,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="Category">
                <div class="cname">
                    <?php echo ($vo["name"]); ?>                <a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>" class="more">查看更多</a>
                </div>
               <div class="device">
    <a class="arrow-left1" href="#"></a> 
    <a class="arrow-right1" href="#"></a>
    <div class="clist swiper-container1" style="padding-bottom: 3%; overflow:hidden">
      <div class="swiper-wrapper">
       
        <div class="swiper-slide">
                  <ul>
                       <?php if(is_array($vo['sub'])): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i; if($i < 9): ?><li>
                            
                            <a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$res['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>">
                            <div>
                                <img src="<?php echo ($res["img"]); ?>">
                            </div>
                                <span><?php echo ($res["name"]); ?></span>
                            </a>
                            
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
        </div>
        
          <div class="swiper-slide">
          <ul>
                    <?php if(is_array($vo['sub'])): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i; if($i > 8): ?><li>
                            
                            <a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$res['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>">
                            <div>
                                <img src="<?php echo ($res["img"]); ?>">
                            </div>
                                <span><?php echo ($res["name"]); ?></span>
                            </a>
                            
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
        </div>
        
      </div>
    </div>
    <div class="pagination1" style="z-index: 20;
float: left;
position: absolute;
bottom: 10px;
right: 45%;"></div>
  </div></div><?php endforeach; endif; else: echo "" ;endif; ?>       
<!--3!-->
     <?php if(is_array($info)): $i = 0; $__LIST__ = array_slice($info,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="Category">
                <div class="cname">
                    <?php echo ($vo["name"]); ?>                <a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>" class="more">查看更多</a>
                </div>
               <div class="device">
    <a class="arrow-left2" href="#"></a> 
    <a class="arrow-right2" href="#"></a>
    <div class="clist swiper-container2" style="padding-bottom: 3%;overflow:hidden">
      <div class="swiper-wrapper">
       
        <div class="swiper-slide">
                  <ul>
                       <?php if(is_array($vo['sub'])): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i; if($i < 9): ?><li>
                            
                            <a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$res['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>">
                            <div>
                                <img src="<?php echo ($res["img"]); ?>">
                            </div>
                                <span><?php echo ($res["name"]); ?></span>
                            </a>
                            
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
        </div>
        
          <div class="swiper-slide">
          <ul>
                    <?php if(is_array($vo['sub'])): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i; if($i > 8): ?><li>
                            
                            <a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$res['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>">
                            <div>
                                <img src="<?php echo ($res["img"]); ?>">
                            </div>
                                <span><?php echo ($res["name"]); ?></span>
                            </a>
                            
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
        </div>
        
      </div>
    </div>
    <div class="pagination2" style="z-index: 20;
float: left;
position: absolute;
bottom: 10px;
right: 45%;"></div>
  </div></div><?php endforeach; endif; else: echo "" ;endif; ?>       
      <!--4!-->
     <?php if(is_array($info)): $i = 0; $__LIST__ = array_slice($info,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="Category">
                <div class="cname">
                    <?php echo ($vo["name"]); ?>                <a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>" class="more">查看更多</a>
                </div>
               <div class="device">
    <a class="arrow-left2" href="#"></a> 
    <a class="arrow-right2" href="#"></a>
    <div class="clist swiper-container3" style="padding-bottom: 3%;overflow:hidden">
      <div class="swiper-wrapper">
       
        <div class="swiper-slide">
                  <ul>
                       <?php if(is_array($vo['sub'])): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i; if($i < 9): ?><li>
                            
                            <a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$res['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>">
                            <div>
                                <img src="<?php echo ($res["img"]); ?>">
                            </div>
                                <span><?php echo ($res["name"]); ?></span>
                            </a>
                            
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
        </div>
        
          <div class="swiper-slide">
          <ul>
                    <?php if(is_array($vo['sub'])): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i; if($i > 8): ?><li>
                            
                            <a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$res['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>">
                            <div>
                                <img src="<?php echo ($res["img"]); ?>">
                            </div>
                                <span><?php echo ($res["name"]); ?></span>
                            </a>
                            
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
        </div>
        
      </div>
    </div>
    <div class="pagination2" style="z-index: 20;
float: left;
position: absolute;
bottom: 10px;
right: 45%;"></div>
  </div></div><?php endforeach; endif; else: echo "" ;endif; ?>   
              <!--5!-->
     <?php if(is_array($info)): $i = 0; $__LIST__ = array_slice($info,4,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="Category">
                <div class="cname">
                    <?php echo ($vo["name"]); ?>                <a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>" class="more">查看更多</a>
                </div>
               <div class="device">
    <a class="arrow-left2" href="#"></a> 
    <a class="arrow-right2" href="#"></a>
    <div class="clist swiper-container4" style="padding-bottom: 3%;overflow:hidden">
      <div class="swiper-wrapper">
       
        <div class="swiper-slide">
                  <ul>
                       <?php if(is_array($vo['sub'])): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i; if($i < 9): ?><li>
                            
                            <a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$res['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>">
                            <div>
                                <img src="<?php echo ($res["img"]); ?>">
                            </div>
                                <span><?php echo ($res["name"]); ?></span>
                            </a>
                            
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
        </div>
        
          <div class="swiper-slide">
          <ul>
                    <?php if(is_array($vo['sub'])): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i; if($i > 8): ?><li>
                            
                            <a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$res['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>">
                            <div>
                                <img src="<?php echo ($res["img"]); ?>">
                            </div>
                                <span><?php echo ($res["name"]); ?></span>
                            </a>
                            
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
        </div>
        
      </div>
    </div>
    <div class="pagination2" style="z-index: 20;
float: left;
position: absolute;
bottom: 10px;
right: 45%;"></div>
  </div></div><?php endforeach; endif; else: echo "" ;endif; ?>     
</div>
  <div class="copyright" style="text-align:center;padding:10px 0">
  
  <script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script>
  <script>
  var mySwiper = new Swiper('.swiper-container1',{
    pagination: '.pagination1',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left1').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right1').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script>
  <script>
  var mySwiper = new Swiper('.swiper-container2',{
    pagination: '.pagination2',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left2').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right2').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script>
  <script>
  var mySwiper = new Swiper('.swiper-container3',{
    pagination: '.pagination3',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left2').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right2').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script>
   <script>
  var mySwiper = new Swiper('.swiper-container4',{
    pagination: '.pagination4',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left2').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right2').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script>
<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
</div>  <?php echo ($bjdh); ?>
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
</body></html>