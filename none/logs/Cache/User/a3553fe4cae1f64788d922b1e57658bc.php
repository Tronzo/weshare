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

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script>

var editor;
KindEditor.ready(function(K) {
editor = K.create('#info', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
						'source','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|', 'emoticons', 'image', 'link', 'music', 'video']
});

});
</script>

<div class="content">

<!--tab start-->



<!--tab end-->



      

    <div class="msgWrap bgfc" style="margin-top:10px;">

	  <form class="form" method="post" action="" target="iframe" enctype="multipart/form-data">	 

		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">

			<tbody>

				<tr>

				  <th valign="top"><span class="red">*</span>关键词：</th>

				  <td>

					<span class="red">吃粽子 —— 当用户输入该关键词时，将会触发此回复。</span></td>

				</tr>

				<tr>

					<th width="120"><span class="red">*</span>回复标题：</th>

					<td><input type="text" name="title" value="<?php echo ($set["title"]); ?>" class="px" style="width:550px;"></td>

				</tr>

				<tr>

					<th width="120">内容介绍：</th>

					<td><textarea style="width:560px;height:75px" name="info" id="info" class="px"><?php echo ($set["info"]); ?></textarea><br/>最多填写120个字</td>

				</tr>

				<tr>

					<th>回复图片：</th>

					<td><input type="text" name="picurl" value="<?php echo ($set["picurl"]); ?>" id="pic" class="px" style="width:550px;"> <script src="/tpl/static/upyun.js"></script><a href="#" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="#" onclick="viewImg('pic')">预览</a>   &nbsp; 大小为720x400</td>

				</tr>
                <tr>

					<th>游戏背景图片：</th>

					<td><input type="text" name="bg" value="<?php echo ($set["bg"]); ?>" id="bg" class="px" style="width:550px;"> <script src="/tpl/static/upyun.js"></script>
					<a href="#" onclick="upyunPicUpload('bg',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="#" onclick="viewImg('bg')">预览</a>   &nbsp; 大小为320x555</td>

				</tr>
                	<tr>

					<th>logo图片：</th>

					<td><input type="text" name="picurls1" value="<?php echo ($set["picurls1"]); ?>" id="pic1" class="px" style="width:550px;"> <script src="/tpl/static/upyun.js"></script><a href="#" onclick="upyunPicUpload('pic1',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="#" onclick="viewImg('pic1')">预览</a>   &nbsp; 大小为190*50</td>

				</tr>
                <tr>

					<th>首页粽子图片：</th>

					<td><input type="text" name="zz" value="<?php echo ($set["zz"]); ?>" id="zz" class="px" style="width:550px;"> <script src="/tpl/static/upyun.js"></script><a href="#" onclick="upyunPicUpload('zz',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="#" onclick="viewImg('zz')">预览</a>   &nbsp; <a href="http://wzweixiang.com/tpl/Wap/default/common/czz/images/c4.png">下载图标模板</a></td>

				</tr>
                <tr>

					<th>关注微信的图标：</th>

					<td><input type="text" name="wx" value="<?php echo ($set["wx"]); ?>" id="wx" class="px" style="width:550px;"> <script src="/tpl/static/upyun.js"></script><a href="#" onclick="upyunPicUpload('wx',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="#" onclick="viewImg('wx')">预览</a>   &nbsp; <a href="http://wzweixiang.com/tpl/Wap/default/common/czz/images/c18.png">下载图标模板</a></td>

				</tr>
                 <TR>
                  <TH valign="top"><label for="url">更多内容链接：</label></TH>
                  <TD><input type="text" class="px" id="url" value="<?php echo ($set["url"]); ?>" name="url" style="width:280px;">  <a href="###" onclick="addLink('url',0)" class="btn btn-primary btn_submit  J_ajax_submit_btn">从功能库添加</a><br /><span class="red">如需跳转到其他网址，请在输入框右侧选择或这里填写网址(例如：http://baidu.com，记住如果填写必须有http://)</span>如果填写了图文详细内容，这里请留空，不要设置！</TD>
                </TR>
                <TR>


				<th>&nbsp;</th>

					<td>


					<input type="hidden" name="token" value="<?php echo ($token); ?>" />

						<button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>

						<a href="javascript:history.go(-1);" class="btn">取消</a>

					</td>

				</tr>

			</tbody>

		</table>

	</form>

  </div> 

 

  

        </div>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>