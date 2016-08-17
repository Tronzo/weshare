<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($info["title"]); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="<?php echo RES;?>/css/Photo/css/photo.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/Photo/css/photoswipe.css" type="text/css" rel="stylesheet" />
<script src="<?php echo RES;?>/css/Photo/js/klass.min.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/Photo/js/code.photoswipe-3.0.5.min.js" type="text/javascript"></script>
<script type="text/javascript">
(function(window, PhotoSwipe){
document.addEventListener('DOMContentLoaded', function(){
var
options = {},
instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
}, false);
}(window, window.Code.PhotoSwipe));
</script>

<script type="text/javascript">
    window.onload = function () {
        var oWin = document.getElementById("win");
        var oLay = document.getElementById("overlay");
        var oBtn = document.getElementById("popmenu");
        var oClose = document.getElementById("close");
        oBtn.onclick = function () {
            oLay.style.display = "block";
            oWin.style.display = "block";
            //oWin.style.zIndex = 99999;
        };
        oLay.onclick = function () {
            oLay.style.display = "none";
            oWin.style.display = "none";
        }
    };

   $('#plug-wrap').removeClass();

</script>
<link rel="stylesheet" href="<?php echo STATICS;?>/schools/css/plugmenu.css">
<link href="<?php echo STATICS;?>/schools/css/news3_3.css" rel="stylesheet" type="text/css" />
</head>

<body id="photo">
   <script type="text/javascript">
window.shareData = {
            "moduleName":"Business",
            "moduleID":"0",
            "imgUrl": "<?php echo ($busines['picurl']); ?>",
            "sendFriendLink": "<?php echo C('site_url'); echo U('Business/index',array('token'=>$token,'type'=>$busines['type'],'bid'=>$busines['bid']));?>",
            "tTitle": "<?php echo ($busines['title']); ?>",
            "tContent": "<?php echo (mb_substr(strip_tags(html_entity_decode($busines['business_desc'])),0,89,'utf-8')); ?>..."
        };
</script>
<?php echo ($shareScript); ?>

    <div id="ui-header" >
        <div class="fixed">
            <a class="ui-title" id="popmenu">分类菜单</a> <a class="ui-btn-left_pre" href="<?php echo U('Business/index',array('token'=>$token,'type'=>$busines['type'],'bid'=>$busines['bid']));?>">
            </a><a class="ui-btn-right" href=""></a>
        </div>
    </div>
    <div id="overlay"></div>
<div id="win" >
<ul class="dropdown">

<?php if($busines['type'] == 'fitness'): ?><li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness','bid'=>$busines['bid']));?>"><span>公司首页</span></a></li>
<li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness','bid'=>$busines['bid']));?>"><span>健身房间</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'gover'): ?>
                        <li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>部门简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover','bid'=>$busines['bid']));?>"><span>服务窗口</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover','bid'=>$busines['bid']));?>"><span>领导点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'food'): ?>
                        <li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food','bid'=>$busines['bid']));?>"><span>销售门店</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'travel'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel','bid'=>$busines['bid']));?>"><span>景区/景点</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel','bid'=>$busines['bid']));?>"><span>游客点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'flower'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower','bid'=>$busines['bid']));?>"><span>花店分店</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower','bid'=>$busines['bid']));?>"><span>相册</span></a></li>
<li><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'property'): ?>
                        <li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property','bid'=>$busines['bid']));?>"><span>小区/服务</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property','bid'=>$busines['bid']));?>"><span>业主点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'ktv'): ?>
                        <li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>KTV简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv','bid'=>$busines['bid']));?>"><span>KTV分店</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'bar'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>酒吧简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar','bid'=>$busines['bid']));?>"><span>酒吧分店</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'fitment'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment','bid'=>$busines['bid']));?>"><span>装修分店</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'wedding'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding','bid'=>$busines['bid']));?>"><span>婚庆分店</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'affections'): ?>
                        <li>
<a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'affections','bid'=>$busines['bid'],'show'=>'intro'));?>">
<p><font size="3px;">宠物店简介</font></p><p class="NavItemInfo">INTRO</p>
</a>
<a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'affections','bid'=>$busines['bid']));?>">
    <p><font size="3px;">宠物分店</font></p><p class="NavItemInfo">BRANCH</p>
</a>
<a href="">
    <!-- <p>项目</p><p class="NavItemInfo">PROGRAMS</p> -->
</a>
<a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'affections','bid'=>$busines['bid']));?>">
    <p><font size="3px;">相 册</font></p><p class="NavItemInfo">ALBUMS</p>
</a>
<a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'affections','bid'=>$busines['bid']));?>">
    <p><font size="3px;">点 评</font></p><p class="NavItemInfo">REVIEW</p>
</a>
</li>
                    <?php elseif($busines['type'] == 'housekeeper'): ?>
                        <li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper','bid'=>$busines['bid']));?>"><span>家政分店</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'lease'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease','bid'=>$busines['bid']));?>"><span>分店服务</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'beauty'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty','bid'=>$busines['bid']));?>"><span>分店服务</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty'));?>"><span>我的订单</span></a></li><?php endif; ?>

<div class="clr"></div>
 </ul>
</div>
<br><br>
<?php if($headpic != ''): ?><div class="qiandaobanner"> <a ><img src="<?php echo ($headpic); ?>" ></a> </div><?php endif; ?>
<div  id="main" role="main">
      <ul id="Gallery" class="gallery">
        <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($photo["picurl"]); ?>"><img src="<?php echo ($photo["picurl"]); ?>" alt="  "></a>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>


      </ul>
</div>

<!--jquery.min-->
<script src="<?php echo RES;?>/css/Photo/js/jquery.min.js" type="text/javascript"></script>
<!--下面是瀑布流js-->
<script src="<?php echo RES;?>/css/Photo/js/jquery.imagesloaded.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/Photo/js/jquery.wookmark.min.js" type="text/javascript"></script>
<script type="text/javascript">
    (function ($){
      $('#Gallery').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 4, // Optional, the distance between grid items
          itemWidth: 150 // Optional, the width of a grid item
        };

        // Get a reference to your grid items.
        var handler = $('#Gallery li');

        // Call the layout function.
        handler.wookmark(options);


      });
    })(jQuery);
  </script>
<div class="footerWrapper" style="padding-left: 30%;">

    <span class="copyright">
    <?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
    <?php else: ?>
    <?php echo ($siteCopyright); endif; ?>
    </span>
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
</script> </p>
<script type="text/javascript">
window.shareData = {
            "moduleName":"Business",
            "moduleID":"<?php echo ($bid); ?>",
            "imgUrl": "<?php echo ($info['picurl']); ?>",
            "sendFriendLink": "<?php echo C('site_url'); echo U('Business/plist',array('token'=>$token,'bid'=>$bid,'type'=>$type));?>",
            "tTitle": "<?php echo ($info["title"]); ?>",
            "tContent": "<?php echo (strip_tags($info["info"])); ?>"
};
</script>
<?php echo ($shareScript); ?>
</body>
</html>