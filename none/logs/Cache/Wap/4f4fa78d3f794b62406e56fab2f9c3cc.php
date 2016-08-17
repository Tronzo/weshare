<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "http:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:/www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title><?php echo ($res["title"]); ?>-<?php echo ($tpl["wxname"]); ?></title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo RES;?>/css/yl/news.css" rel="stylesheet" type="text/css" />

<script src="<?php echo RES;?>/js/yl/audio.min.js" type="text/javascript"></script>   
    <script>
      audiojs.events.ready(function() {
        audiojs.createAll();
      });
    </script>
</head> 
    <script>
window.onload = function ()
{
var oWin = document.getElementById("win");
var oLay = document.getElementById("overlay");	
var oBtn = document.getElementById("popmenu");
var oClose = document.getElementById("close");
oBtn.onclick = function ()
{
oLay.style.display = "block";
oWin.style.display = "block"	
};
oLay.onclick = function ()
{
oLay.style.display = "none";
oWin.style.display = "none"	
}
};
</script>
<body id="news">
<div id="ui-header">
<div class="fixed">
<a class="ui-title" id="popmenu">选择分类</a>
<a class="ui-btn-left_pre" href="javascript:history.go(-1)"></a>
<a class="ui-btn-right_home" href="<?php echo U('Index/index',array('token'=>$tpl['token']));?>"></a>
</div>
</div>
<div id="overlay"></div>
<div id="win">
<ul class="dropdown"> 
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Index/lists',array('token'=>$vo['token'],'classid'=>$vo['id']));?>"><span><?php echo ($vo["name"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
 	
<div class="clr"></div>
</ul>
</div>
<div class="Listpage">
<div class="top46"></div>
<div class="page-bizinfo">

<div class="header" style="position: relative;">
<h1 id="activity-name"><?php echo ($res["title"]); ?></h1>
<span id="post-date"><?php echo (date("y-m-d",$res["createtime"])); ?></span>
</div>
<a id="biz-link" class="btn" href="<?php echo U('Index/index',array('token'=>$res['token']));?>"  data-transition="slide" >
<div class="arrow">
<div class="icons arrow-r"></div>
</div>
<div class="logo">
<div class="circle"></div>
<img id="img" src="<?php echo ($tpl["headerpic"]); ?>">
</div>
<div id="nickname"><?php echo ($tpl["wxname"]); ?></div>
<div id="weixinid">微信号:<?php echo ($tpl["weixin"]); ?></div>
</a>
<?php if(($res["showpic"]) == "1"): ?><div class="showpic"><img src="<?php echo ($res["pic"]); ?>" /></div><?php endif; ?>
<div class="text" id="content">
<?php echo (htmlspecialchars_decode($res["info"])); ?>
</div>

 <script>

function dourl(url){
location.href= url;
}
</script>

</div>	

    <div class="list">
<div id="olload">
<span>往期回顾</span>
</div>

<div id="oldlist">
<ul>
  <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lo): $mod = ($i % 2 );++$i;?><li class="newsmore">
		
		<a href="<?php if($lo['url'] == ''): echo U('Index/content',array('token'=>$lo['token'],'id'=>$lo['id'],'classid'=>intval($_GET['classid']))); else: echo ($lo["url"]); endif; ?>">
		<div class="olditem">
		<div class="title"><?php echo ($lo["title"]); ?></div> 
		</div>
		</a>
	</li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
   <a class="more" href="<?php echo U('Index/lists',array('token'=>$res['token'],'classid'=>$res['classid']));?>">更多精彩内容</a>	</div>
</div>
<a class="footer" href="#news" target="_self"><span class="top">返回顶部</span></a>

</div>

 <div style="display:none"><?php echo (htmlspecialchars_decode($res["tongji"])); ?></div>

  <div class="copyright">
<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
</div> 
<?php echo ($bjdh); ?>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<?php if($radiogroup > 8): ?><br>
<br><br>
<style type="text/css">
body { margin-bottom:60px !important; }
a, button, input { -webkit-tap-highlight-color:rgba(255, 0, 0, 0); }
ul, li { list-style:none; margin:0; padding:0 }
.top_bar { position: fixed; z-index: 900; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
.top_menu { display:-webkit-box; border-top: 1px solid #3D3D46; display: block; width: 100%; background: rgba(255, 255, 255, 0.7); height: 48px; display: -webkit-box; display: box; margin:0; padding:0; -webkit-box-orient: horizontal; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1) inset; }
.top_bar .top_menu>li { -webkit-box-flex:1; position:relative; text-align:center; }
.top_menu li:first-child { background:none; }
.top_bar .top_menu>li>a { height:48px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
.top_bar .top_menu>li.home { max-width:70px }
.top_bar .top_menu>li.home a { height: 60px; width: 60px; margin: auto; border-radius: 60px; position: relative; top: -14px; left: 5px; background: url('tpl/Wap/default/common/images/home.png') no-repeat center center; background-size: 100% 100%; }
.top_bar .top_menu>li>a label { overflow:hidden; margin: 0 0 0 0; font-size: 12px; display: block !important; line-height: 18px; text-align: center; }
.top_bar .top_menu>li>a img { padding: 3px 0 0 0; height: 24px; width: 24px; color: #fff; line-height: 48px; vertical-align:middle; }
.top_bar li:first-child a { display: block; }
.menu_font { text-align:left; position:absolute; right:10px; z-index:500; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); border-radius: 5px; width: 120px; margin-top: 10px; padding: 0; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); }
.menu_font.hidden { display:none; }
.menu_font { top:inherit !important; bottom:60px; }
.menu_font li a { height:40px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
.menu_font li a { text-align: left !important; }
.top_menu li:last-of-type a { background: none; }
.menu_font:after { top: inherit!important; bottom: -6px; border-color: #48403c rgba(0, 0, 0, 0) rgba(0, 0, 0, 0); border-width: 6px 6px 0; position: absolute; content: ""; display: inline-block; width: 0; height: 0; border-style: solid; left: 80%; }
.menu_font li { border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(0, 0, 0, 0.2); }
.menu_font li:first-of-type { border-top: 0; }
.menu_font li:last-of-type { border-bottom: 0; }
.menu_font li a { height: 40px; line-height: 40px !important; position: relative; color: #fff; display: block; width: 100%; text-indent: 10px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; }
.menu_font li a img { width: 20px; height:20px; display: inline-block; margin-top:-2px; color: #fff; line-height: 40px; vertical-align:middle; }
.menu_font>li>a label { padding:3px 0 0 3px; font-size:14px; overflow:hidden; margin: 0; }
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
.top_bar .top_menu>li>a:hover, .top_bar .top_menu>li>a:active { background-color:#333; }
.menu_font li a:hover, .menu_font li a:active{ background-color:#333; }
.menu_font li:first-of-type a { border-radius:5px 5px 0 0; }
.menu_font li:last-of-type a { border-radius:0 0 5px 5px; }
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; }
#cate18 .device {bottom: 49px;}
#cate18 #indicator {bottom: 240px;}
#cate19 .device {bottom: 49px;}
#cate19 #indicator {bottom: 330px;}
#cate19 .pagination {bottom: 60px;}
</style>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
  <nav>
    <ul id="top_menu" class="top_menu">
<li class="home"><a href="?g=Wap&m=Index&a=index&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>"></a></li>
    <?php if(is_array($catemenu)): $i = 0; $__LIST__ = $catemenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <a <?php if($vo['vo']){echo 'onclick="javascript:displayit('.$vo['k'].')"';}else{echo 'href="'.$vo['url'].'"';}?>><img src="<?php echo ($vo["picurl"]); ?>"><label><?php echo ($vo["name"]); ?></label></a>
        <?php if ($vo['vo']){ ?>
            <ul id="menu_list<?php echo ($vo['k']); ?>" class="menu_font" style=" display:none">
            <?php if(is_array($vo['vo'])): $i = 0; $__LIST__ = $vo['vo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["picurl"]); ?>"><label><?php echo ($vo["name"]); ?></label></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
             <?php
 } ?>
        </li><?php endforeach; endif; else: echo "" ;endif; ?> 
    </ul>
  </nav>
</div>
<div id="plug-wrap" onclick="closeall()" style="display: none;"></div><?php endif; ?>
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
</script> <style type="text/css">
body { margin-bottom:60px !important; }
a, button, input { -webkit-tap-highlight-color:rgba(255, 0, 0, 0); }
ul, li { list-style:none; margin:0; padding:0 }
.top_bar { position: fixed; z-index: 900; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
.top_menu { display:-webkit-box; border-top: 1px solid #3D3D46; display: block; width: 100%; background: rgba(255, 255, 255, 0.7); height: 48px; display: -webkit-box; display: box; margin:0; padding:0; -webkit-box-orient: horizontal; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1) inset; }
.top_bar .top_menu>li { -webkit-box-flex:1; position:relative; text-align:center; }
.top_menu li:first-child { background:none; }
.top_bar .top_menu>li>a { height:48px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
.top_bar .top_menu>li.home { max-width:70px }
.top_bar .top_menu>li.home a { height: 60px; width: 60px; margin: auto; border-radius: 60px; position: relative; top: -14px; left: 5px; background: url('tpl/Wap/default/common/images/home.png') no-repeat center center; background-size: 100% 100%; }
.top_bar .top_menu>li>a label { overflow:hidden; margin: 0 0 0 0; font-size: 12px; display: block !important; line-height: 18px; text-align: center; }
.top_bar .top_menu>li>a img { padding: 3px 0 0 0; height: 24px; width: 24px; color: #fff; line-height: 48px; vertical-align:middle; }
.top_bar li:first-child a { display: block; }
.menu_font { text-align:left; position:absolute; right:10px; z-index:500; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); border-radius: 5px; width: 120px; margin-top: 10px; padding: 0; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); }
.menu_font.hidden { display:none; }
.menu_font { top:inherit !important; bottom:60px; }
.menu_font li a { height:40px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
.menu_font li a { text-align: left !important; }
.top_menu li:last-of-type a { background: none; }
.menu_font:after { top: inherit!important; bottom: -6px; border-color: #48403c rgba(0, 0, 0, 0) rgba(0, 0, 0, 0); border-width: 6px 6px 0; position: absolute; content: ""; display: inline-block; width: 0; height: 0; border-style: solid; left: 80%; }
.menu_font li { border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(0, 0, 0, 0.2); }
.menu_font li:first-of-type { border-top: 0; }
.menu_font li:last-of-type { border-bottom: 0; }
.menu_font li a { height: 40px; line-height: 40px !important; position: relative; color: #fff; display: block; width: 100%; text-indent: 10px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; }
.menu_font li a img { width: 20px; height:20px; display: inline-block; margin-top:-2px; color: #fff; line-height: 40px; vertical-align:middle; }
.menu_font>li>a label { padding:3px 0 0 3px; font-size:14px; overflow:hidden; margin: 0; }
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
.top_bar .top_menu>li>a:hover, .top_bar .top_menu>li>a:active { background-color:#333; }
.menu_font li a:hover, .menu_font li a:active{ background-color:#333; }
.menu_font li:first-of-type a { border-radius:5px 5px 0 0; }
.menu_font li:last-of-type a { border-radius:0 0 5px 5px; }
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; }
#cate18 .device {bottom: 49px;}
#cate18 #indicator {bottom: 240px;}
#cate19 .device {bottom: 49px;}
#cate19 #indicator {bottom: 330px;}
#cate19 .pagination {bottom: 60px;}
</style>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
  <nav>
    <ul id="top_menu" class="top_menu">
<li class="home"><a href="?g=Wap&m=Index&a=index&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>"></a></li>
    <?php if(is_array($catemenu)): $i = 0; $__LIST__ = $catemenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <a <?php if($vo['vo']){echo 'onclick="javascript:displayit('.$vo['k'].')"';}else{echo 'href="'.$vo['url'].'"';}?>><img src="<?php echo ($vo["picurl"]); ?>"><label><?php echo ($vo["name"]); ?></label></a>
        <?php if ($vo['vo']){ ?>
            <ul id="menu_list<?php echo ($vo['k']); ?>" class="menu_font" style=" display:none">
            <?php if(is_array($vo['vo'])): $i = 0; $__LIST__ = $vo['vo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["picurl"]); ?>"><label><?php echo ($vo["name"]); ?></label></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
             <?php
 } ?>
        </li><?php endforeach; endif; else: echo "" ;endif; ?> 
    </ul>
  </nav>
</div>
<div id="plug-wrap" onclick="closeall()" style="display: none;"></div>

<!-- share -->

		<script type="text/javascript">

			window.shareData = {  
				"moduleName":"Index",
				"moduleID": '3',
				"imgUrl": "<?php echo ($res["pic"]); ?>", 
				"timeLineLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid'],'id'=>intval($_GET['id'])));?>",
				"sendFriendLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid'],'id'=>intval($_GET['id'])));?>",
				"weiboLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid'],'id'=>intval($_GET['id'])));?>",
				"tTitle": "<?php echo ($res["title"]); ?>-<?php echo ($tpl["wxname"]); ?>",
				"tContent": "<?php echo (str_replace('"','',str_replace("\r\n",' ',mb_substr(trim(strip_tags(htmlspecialchars_decode($res["text"]))),0,30,'utf-8')))); ?>"
			};
		</script>	

<?php echo ($shareScript); ?>
</body>
</html>