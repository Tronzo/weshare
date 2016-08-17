<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta name="format-detection" content="telephone=no"/>
<title><?php echo ($metaTitle); ?></title>
<link rel="stylesheet" type="text/css" href="../tpl/static/repast/css/wei_dialog.css" media="all" />
<link rel="stylesheet" type="text/css" href="../tpl/static/repast/css/wei_canyin.css" media="all" />
<link rel="stylesheet" type="text/css" href="../tpl/static/repast/css/home.css" media="all">
<script type="text/javascript" src="../tpl/static/repast/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../tpl/static/repast/js/wei_webapp_v2_common.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="../tpl/static/repast/css/style.css" media="all">
<body id="cardunion" class="mode_webapp2">
<div style="float:none;width:100%;" class="headselect">
	<a class="link_tel icon-phone"><?php echo ($title["title"]); ?></a>
</div>

<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box box-list">
  <a href="<?php echo U('Fenlei/xiangqing', array('token'=>$vo['token'], 'pid'=>$vo['pid'],'id'=>$vo['id']));?>" class="bd fw">
  <div style="float:left; width:60%"><img style="width:1oo%" src="<?php echo ($vo['banner']); ?>"></div>
    <div style="width: 35%;
float: right;"><b><?php echo ($vo['name']); ?></b>
    <p><?php echo ($vo['info']); ?></p></div>
  </a>
  <p style="color:#999">商家地址：<?php echo ($vo['address']); ?></p>
  <!-- 详情 -->
  <div class="ft table">
      <a class="td" href="<?php echo U('Fenlei/xiangqing', array('token'=>$vo['token'], 'pid'=>$vo['pid'],'id'=>$vo['id']));?>">
        <img src="../tpl/static/repast/css/img/ico-wine.png">详细介绍
      </a>
      <a class="td order" href="tel:<?php echo ($vo['tel']); ?>"><img src="../tpl/static/repast/css/img/ico-call.png">电话</a>
     
      <a class="td" href=" http://api.map.baidu.com/marker?location=<?php echo ($vo['lat']); ?>,<?php echo ($vo['lng']); ?>&title=<?php echo ($vo['name']); ?>&name=<?php echo ($vo['info']); ?>&content=<?php echo ($vo['address']); ?>&output=html&src=weiba|weiweb">
        <img src="../tpl/static/repast/css/img/ico-location.png">导航
      </a>
  </div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
<div class="box" style="background:#d2d1cd"></div>

<div class="copyright">

<?php echo ($copyright["copyright"]); ?>——微享技术支持

</div>
<div class="box" style="background:#d2d1cd"></div>
<style>
.menu_font li a img {
margin-top: -30px;
}
.copyright {
padding: 8px;
text-align: center;
font-size: 14px;
color: #333;
}
</style>
<script type="text/javascript">
_onPageLoaded(function(){
    (function() {
        // ios下系统默认弹窗
        if (_isIOS) {
            return null;
        }
        var orderBtns = _qAll('.order');

        for(var i=0;i<orderBtns.length;i++) {
            orderBtns[i].onclick = function(e) {
                var self = this;
                var phone = self.getAttribute('href').match(/\d*-?\d+/);
                if (!phone[0]) {phone[0]='';}
                MDialog.confirm(
                    '', '<span style="text-align:center !important;display:inline-block;width:205px;">是否联系该商家<br/>'+phone[0]+'？</span>', null,
                    '确定', function(){
                        isCancle = false;

                        location.href = self.getAttribute('href');
                    }, null,
                    '取消', null, null,
                    null, true, true
                );

                return false;
            }
        }
    })();
});


window.shareData = {  
            "moduleName":"Fenlei",
            "moduleID":"<?php echo ($info["id"]); ?>",
            "imgUrl": "<?php echo ($title["topic"]); ?>", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Fenlei/info',array('token'=>$_GET['token'],'id'=>$_GET['id']));?>",
            "tTitle": "<?php echo ($title["title"]); ?>",
            "tContent": "<?php echo (substr($title["info"],0,60)); ?>"
};
</script>
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
</body>

<?php echo ($shareScript); ?>
</html>