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
  
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<style type="text/css">

.userinfoArea th {
width: 100px;
}
.clr{
clear:both;
}
.yulan {
    background: url(<?php echo RES;?>/images/adma/erweimabg.png) repeat scroll 0 0 #4E5359;
    color: #666666;
    font:14px/1.5  Microsoft YaHei,Helvitica,Verdana,Tohoma,Arial,san-serif;
    margin: 0;
    padding: 0;
color: #666666;
}
.yulan .main{ margin:0 auto; }
.yulan h1{ font-size:26px; color:#f5f5f5; font-weight:normal; text-align: center; margin:35px 0 25px 0; text-shadow:0 1px 3px #111111;}
.yulan .erweima{height: 301px;
    margin: 0 auto;
    width: 301px;}
.yulan .erweima img{border: medium none;
-moz-box-shadow: 0 4px 3px 2px #333333;
-webkit-box-shadow: 0 4px 3px 2px #333333;
    box-shadow: 0 4px 3px 2px #333333;
-webkit-border-radius:6px;
-moz-border-radius:6px;
border-radius:6px;
    width: 100%;}
.yulan .beizhu{ margin:15px auto 5px;text-align: center;}
.yulan .beizhu p{ line-height: 48px;}
.yulan .beizhubg{color: #B4B7BC;background: url(<?php echo RES;?>/images/adma/erweima_bg2.png) repeat-x scroll 0 0 transparent;
    font-size: 12px;
    height: 48px;
    margin: 10px auto;
    width: 230px;text-shadow: 0 -1px 0 #111112;
line-height: 48px;display: inline-block;position: relative;}
.yulan .beizhuleft{background: url(<?php echo RES;?>/images/adma/erweima_bg2_left.png) no-repeat scroll 0 0 transparent;
    display: block;
    float: left;
    height: 48px;
    margin-left: -26px;
    width: 26px;}
.yulan .beizhuright{ background: url(<?php echo RES;?>/images/adma/erweima_bg2_right.png) no-repeat scroll 0 0 transparent;
    display: block;
    float: right;
    height: 48px;
    margin-right: -26px;
    width: 26px;}
.yulan .content{color: #B4B7BC; font-size:14px;padding:5px;width:300px; margin:0 auto;text-shadow: 0 -1px 0 #111112;
float:none; background-color:transparent;min-height:40px;border:0;
}
.yulan .footer {
background: url(<?php echo RES;?>/images/adma/erweimabg.png) repeat scroll 0 0  transparent;
    color: #AAAAAA;
    margin:20px auto 0;
    text-shadow: 0 -1px 0 #111111;
text-align:center;
line-height: 48px;
width: 100%;
padding:0;
}
.yulan .footer p{
    background: url(<?php echo RES;?>/images/adma/erweima_footer.png) no-repeat scroll center top transparent;
font-size:12px;line-height: 48px;
}
</style>

<div class="content">

<div class="cLineB">
  <h4>微信公众号二维码推广页设置<span class="FAQ">推广之用，可以发布到QQ群微博博客论坛等等...</span></h4>
 </div>
 
         <form class="form" method="post" action=""   enctype="multipart/form-data">
         
         <div class="msgWrap bgfc">
  	 
<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
<tr>
<th width="120">推广页地址：</th>
<td width="430"><a href="<?php echo ($f_siteUrl); ?>/index.php/show/<?php echo (session('token')); ?>"  title="点击查看推广页" class="green" target="_blank"><?php echo ($f_siteUrl); ?>/index.php/show/<?php echo (session('token')); ?></a></td>
<td rowspan="6" valign="top" class="yulan">
<div class="main">
<h1 id="adtitle"><?php echo ($adma["title"]); ?></h1>
<div class="erweima"><img id="gzhewm" src="<?php echo ($adma["url"]); ?>"></div>
<div class="beizhu">
<div class="beizhubg">
<div class="beizhuleft"></div>
<div class="beizhuright"></div>
<p>请使用微信扫描二维码关注此公众号</p>
</div>
</div>
<div class="content" id="gzhinfo">
        <?php echo ($adma["info"]); ?>
</div>
<div class="clr"></div>
<div class="footer"><p id="gzhcopyright"><?php echo ($adma["copyright"]); ?></p></div>
</div>
</td>
</tr>
 <tr>
<th valign="">宣传页标题名：</th>
<td><input type="text" name="title" value="<?php echo ($adma["title"]); ?>" class="px" style="width:400px;" id="etitle" onblur="document.getElementById('adtitle').innerHTML=document.getElementById('etitle').value;">

</td>
</tr>	
 <tr>
<th valign="">二维码地址：</th>
<td><input type="text" name="url" value="<?php echo ($adma["url"]); ?>" class="px" style="width:400px;" id="ewm" onblur="document.getElementById('gzhewm').src=document.getElementById('ewm').value;"> <p style="line-height:25px;"><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('ewm',344,344,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('ewm')">预览</a></p>

<p><span class="red">二维码边长为12CM，大小为344×344PX</span>.</p>

</td>
</tr>				
                            <tr>
<th valign="top"><br>
功能介绍：</th>
<td valign="top"><textarea class="px" id="info" name="info" style="width:400px; height:120px" onkeyup="DivFollowingText2()"><?php echo ($adma["info"]); ?></textarea> 
<script type="text/javascript">
function DivFollowingText2()
{
document.getElementById("gzhinfo").innerHTML=document.getElementById("info").value;
}
</script> 
<br>
请简单描述您的微信公众号可以给粉丝带来什么好处，<br>
尽量控制在<span class="red">150文字以内</span>。</td>
</tr>
<tr>
	<th width="120" valign="top">版权信息:</th>
	<td>
	<input type="text" name="copyright" value="<?php echo ($adma["copyright"]); ?>" class="px" style="width:400px;text-align:left;color:rgb(0, 0, 0);float:none"" id="copyright" onclick="document.getElementById('gzhcopyright').innerHTML=this.value;" onkeyup="DivFollowingText3()"/>
	<script type="text/javascript">
	function DivFollowingText3()
	{
	document.getElementById("gzhcopyright").innerHTML=document.getElementById("copyright").value;
	}
	</script> 
		<br/>
		<span>例如：© 2001-2013 <?php echo ($f_siteTitle); ?>版权所有</span>
		</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
<a href="index.php?ac=erweima-edit&amp;id=9878" class="btn">取消</a>
<a href="<?php echo ($f_siteUrl); ?>/index.php/show/<?php echo (session('token')); ?>" class="right btn"  style=" margin-right:20px" target="_blank">查看推广页</a>
</td>
</tr>

</tbody>
</table>
</div> 
  
 </form>
  
        </div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>