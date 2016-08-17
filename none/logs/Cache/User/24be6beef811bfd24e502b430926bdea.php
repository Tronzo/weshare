<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/stylet.css" rel="stylesheet" type="text/css" />
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/global.js"></script>
  <link rel="stylesheet" href="/tpl/User/default/common/css/cymain.css" />
  <link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<script src="/tpl/static/upyun.js"></script>

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>

<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />



<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>

<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#content2', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','clearhtml','hr',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut', 'music', 'video'],
afterBlur: function(){this.sync();}
});
});
</script>
<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#content1', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','clearhtml','hr',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut', 'music', 'video'],
afterBlur: function(){this.sync();}
});
});
</script>
<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#content', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','clearhtml','hr',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut', 'music', 'video'],
afterBlur: function(){this.sync();}
});
});
</script>
<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#intro', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','clearhtml','hr',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut', 'music', 'video'],
afterBlur: function(){this.sync();}
});
});
</script>


<style>
.content {
 background:none; margin-left:30px; margin-top:20px; border:none; margin-bottom:30px;
}
</style>
</head>

<body>

<style type="text/css">
.plug-menu {
width:36px;
height:36px;
border-radius:36px;
-moz-box-shadow:0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25);
-webkit-box-shadow:0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25);
box-shadow:0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25);
background-color: FF0000;
position:relative
}
.plug-menu span {
display: block;
width:28px;
height:28px;
background: url(tpl/User/default/common/images/photo/plugmenu.png) no-repeat;
background-size: 28px 28px;
text-indent: -999px;
position:absolute;
top:4px;
left:4px;
overflow: hidden;
}
</style>
<script src="./tpl/User/default/common/js/cart/jscolor.js" type="text/javascript"></script>
<form method="post" action="" enctype="multipart/form-data">
 <input type="hidden" name="formhash" id="formhash" value="a68de075">
   <div class="content">

<div class="cLineB">
  <h4>菜单颜色与导航 <span class="FAQ">提供一键拨号，一键导航，一键email等等快捷功能</span></h4>
  
 </div>
  <ul id="tags">
          <li><a href="<?php echo U('Catemenu/index');?>">底部菜单分类设置</a> </li>
          <li><a href="<?php echo U('Catemenu/styleSet');?>">底部菜单风格选择</a> </li>
          <li class="selectTag"><a href="<?php echo U('Home/plugmenu');?>">菜单颜色与版权</a> </li>
          <div class="clr"></div>
        </ul>
        <div class="cLineB" style="padding:0;margin:0"></div>
 <div class="msgWrap bgfc" style="padding: 5px 20px;">
 	<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td width="60"><div class="plug-menu" id="plugmenucolor" style="background-color:<?php echo ($homeInfo["plugmenucolor"]); ?>"><span class="close"></span></div></td>
<td width="140"><strong>请选择快捷菜单的颜色：</strong></td>
<td width="95"><input type="text" name="plugmenucolor" id="themeStyle" value="<?php echo ($homeInfo["plugmenucolor"]); ?>" class="px color" style="width: 55px; background-image: none; background-color:<?php echo ($homeInfo["plugmenucolor"]); ?>; color: rgb(255, 255, 255);" onblur="document.getElementById('plugmenucolor').style.backgroundColor=document.getElementById('themeStyle').value;"></td>
<td width="536">请在手机上查看效果！</td>

</tr>
<?php if($userGroup["iscopyright"] == 1): ?><tr>
<td width="60"> </td>
<td><strong>设置页面版权：</strong></td>
 
<td colspan="2"><textarea class="px" style="width:550px; height:35px" name="copyright"><?php echo ($homeInfo["copyright"]); ?></textarea><br>例如：© 2001-2013 某某版权所有 </td>

</tr><?php endif; ?>
</tbody>
</table>
 </div>
         
 
 <div class="msgWrap form">
         
<div class="bdrcontent">
<div id="div_ptype" >
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">

                 <tr>
                 	<td class="norightborder">&nbsp;</td>
                 	<td colspan="4" class="norightborder">
                 		<button type="submit" name="batchsubmit" value="true" class="btn btn-primary btn_submit  J_ajax_submit_btn vm"><strong>保存</strong></button></td>
                 	</tr>
  </tbody></table>
</div>
</div>



     <script>

$(document).ready(function(){
 
 
  $(".checkbox").click(function(){
var i=0; 
 
  $("input:checked").each(function(){
  
 
    i++;
  
  });
 if(i>4){
 alert('最多只显示四项');
 }
});

});



</script>

 
   
          </div>
  
        </div></form>
		  <div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>