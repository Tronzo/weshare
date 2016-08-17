<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


<script src="<?php echo STATICS;?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo STATICS;?>/artDialog/plugins/iframeTools.js"></script>

<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>


 <style>
.cLine {
    overflow: hidden;
    padding: 5px 0;
  color:#000000;
}
.alert {
padding: 8px 35px 0 10px;
text-shadow: none;
-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
background-color: #f9edbe;
border: 1px solid #f0c36d;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
color: #333333;
margin-top: 5px;
}
.alert p {
margin: 0 0 10px;
display: block;
}
.alert .bold{
font-weight:bold;
}
 </style>
  <script>

var editor;
KindEditor.ready(function(K) {
editor = K.create('#cates_desc', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','plainpaste','wordpaste','clearhtml','quickformat','selectall','fullscreen','fontname', 'fontsize','subscript','superscript','indent','outdent','|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline','hr']
});
});
</script>
<div class="content">
  <div class="cLineB">
    <h4>商圈分类<?php if($cate["cate_id"] > '1'): ?>修改<?php else: ?>添加<?php endif; ?></h4>
    <a href="<?php echo U('Market/cate',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn right" style="margin-top:-27px">返回</a> 
  </div>


<div class="msgWrap">

<form class="form" method="post" id="formID" action=""   enctype="multipart/form-data">
<table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
 <tbody>
      <tr>
            <th valign="top"><span class="red">*</span><label for="keyword">分类名称：</label></th>
            <td><input type="text" class="px" id="cate_name" value="<?php echo ($cate['cate_name']); ?>" name="cate_name" style="width:400px">
              <br>
            </td>
            <td></td>
      </tr>
<tr>
  <th valign="top"><span class="red">*</span><label for="keyword">分类图片：</label></th>
  <td>
    <input type="text" class="px" id="cate_pic" value="<?php echo ($cate['cate_pic']); ?>" name="cate_pic"  style="width:350px" >
    <script src="<?php echo STATICS;?>/upyun.js"></script>
    <a href="javascript:void(0);" onclick="upyunPicUpload('cate_pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
    <a href="javascript:void(0);" onclick="viewImg('cate_pic')">预览</a>
  </td>
  </td>
</tr> 
<tr>
  <th valign="top"><label for="keyword">是否显示：</label></th>
  <td align="left"><input type="checkbox" class="px" id="is_show" value="1" name="is_show" <?php if($cate['is_show'] != '0'): ?>checked<?php endif; ?>>
  </td>
  <td></td>
</tr>  
<tr>
  <th valign="top"><label for="keyword">分类排序：</label></th>
  <td align="left"><input type="text" class="px" id="sort" value="<?php if($cate['sort'] == ''): ?>50<?php else: echo ($cate['sort']); endif; ?>" name="sort" >
  </td>
  <td></td>
</tr> 
  <!--
<tr>
  <th valign="top"><label for="keyword">显示排序：</label></th>
  <td><input type="text" class="px" id="sort" value="<?php if($cate['sort'] == 0): ?>50<?php else: echo ($cate['sort']); endif; ?>" name="sort" style="width:200px">
  </td>
  <td></td>
</tr>  

<tr>
  <th valign="top"><label for="keyword">区域图片：</label></th>
  <td>
    <input type="text" class="px" id="cate_pic" value="<?php echo ($cate['cate_pic']); ?>" name="cate_pic"  style="width:350px" >
    <script src="<?php echo STATICS;?>/upyun.js"></script>
    <a href="javascript:void(0);" onclick="upyunPicUpload('cate_pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
    <a href="javascript:void(0);" onclick="viewImg('cate_pic')">预览</a> [700*420]
  </td>
</tr> 
 -->

<script>
function setlatlng(longitude,latitude){
  art.dialog.data('longitude', longitude);
  art.dialog.data('latitude', latitude);
  art.dialog.open('<?php echo U('Map/setLatLng',array('token'=>$token,'id'=>$id));?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
          <tr>
            <th valign="top"><label for="keyword">分类介绍</label></th>
            <td>
                <textarea class="px" id="cate_intro" name="cate_intro" style="width: 400px; height: 80px;" ><?php echo ($cate['cate_intro']); ?></textarea>
            </td>
            <td></td>
          </tr>
  <tr>
    <th></th>
    <td>
      <input type="hidden" name="cate_id" value="<?php echo ($cate['cate_id']); ?>">
      <button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
      <div class="clr"></div>
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