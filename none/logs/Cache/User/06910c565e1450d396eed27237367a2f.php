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

<!--link rel="stylesheet" href="<?php echo STATICS;?>/vote/style.css" /-->
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/vote/common.js" type="text/javascript"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default" type="text/javascript"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js" type="text/javascript"></script>


<div class="content">

<div class="cLineB">
  <h4> <?php if($vo['type'] == 'img' OR ($type == 'img')): ?>图片<?php else: ?>文本<?php endif; ?>投票设置 </h4><a href="<?php echo U('Vote/index');?>" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a>
 </div>

         <div class="msgWrap bgfc">
<form class="form" method="post" action=""   enctype="multipart/form-data">
<?php if($vo['id'] != ''): ?><input type="hidden" name="id" value="<?php echo ($vo['id']); ?>"><?php endif; ?>
<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody><tr>
<th width="120">关键词：</th>
<td><input type="text" name="keyword" value="<?php if($vo['keyword'] == ''): ?>投票<?php else: echo ($vo["keyword"]); endif; ?>" class="px" style="width:550px;"><br><span class="red">只能写一个关键词,功能面板必须开启投票</span></td>
</tr>
                            <tr>
<th width="120">投票标题：</th>
<td><input type="text" name="title" value="<?php echo ($vo["title"]); ?>" class="px" style="width:550px;"></td>
</tr>
<tr>
<th>投票图片：</th>
<td>
<?php if($reslist['picurl'] != ''): ?><img class="thumb_img" id="picurl_src" src="<?php echo ($reslist['picurl']); ?>" style="max-height:100px;"><?php endif; ?>
<input type="text" name="picurl" value="<?php echo ($vo["picurl"]); ?>" class="px" onclick="document.getElementById('picurl_src').src=this.value;" id="picurl" style="width:300px;">
 <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('picurl',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('picurl')">预览</a>&nbsp;填写图片外链地址，大小为720x400</td>
</tr>
<tr>
<th>图片显示：</th>
<td><label>
<input type="radio" name="showpic" value="1" checked="checked" id="showpic2">
显示在投票页面</label>
<label>
<input name="showpic" type="radio" id="showpic1" value="0">
不显示在投票页面</label>
</td>
</tr>
<tr>
<th valign="top">投票说明：</th>
<td valign="top"><textarea class="px" id="content" name="info" style="width: 560px; height: 120px; display:none ;"><?php echo html_entity_decode(htmlspecialchars_decode($vo['info'])); ?></textarea>



</td>
</tr>
<tr>
<th valign="top">投票选项：</th>
<td valign="top"><div class="bdrcontent">
<div id="div_ptype">
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">

<script type="text/javascript">


function addDeltbody(i) {

    //document.getElementById("div_add_del_" + i).value = "";
    //document.getElementById("svalue" + i).value = "";
    if (i != 1) {
       document.getElementById("div_add_del_" + i).style.display = "none";
       document.getElementById("add" + i).style.display = "";
    }
}
function addTabody(i) {

     document.getElementById('div_add_del_' + i).style.display = "";
     document.getElementById('add' + i).style.display = "none";
}

function delrow(obj, tbody,objid) {

  $$(tbody).removeChild(obj.parentNode.parentNode);

   var obj = {id:objid}
        $.post("<?php echo U('Vote/del_tab');?>", obj,
            function(data) {

            },
        "json");
}



  </script>
<tbody>
<tr>

    <td width="260">选项标题</td>
    <td width="50">排序</td>
     <td width="50">票数</td>
    <?php if($vo['type'] == 'img' OR $type == 'img'): ?><td width="260">图片外链地址</td>
    <td width="260">图片跳转地址以http://开头</td><?php endif; ?>
    <td class="norightborder"></td>
</tr>
</tbody>
<?php if($items != ''): if(is_array($items)): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ivo): $mod = ($i % 2 );++$i;?><tbody id="div_add_del_<?php echo ($i+50); ?>" name="div_add_del">
<tr>
    <input type="hidden" name="add[id][]"   value="<?php echo ($ivo["id"]); ?>" style="width:20px;">
    <td width="120"><input type="text" name="add[item][]" value="<?php echo ($ivo["item"]); ?>" class="px" style="width:120px;"></td>
    <td width="20"><input type="text" name="add[rank][]" value="<?php echo ($ivo["rank"]); ?>" style="width:20px;" class="px"></td>
    <td width="20"><input type="text" name="add[vcount][]" value="<?php echo ($ivo["vcount"]); ?>" style="width:20px;" class="px"></td>
    <?php if($vo['type'] == 'img' OR $type == 'img'): ?><td width="200">
<?php if($ivo['startpicurl'] != ''): ?><img class="thumb_img" id="startpicurl_<?php echo ($i+50); ?>_src" src="<?php echo ($ivo['startpicurl']); ?>" style="max-height:100px;display: none;"><?php endif; ?>
      <input type="text" name="add[startpicurl][]" value="<?php echo ($ivo["startpicurl"]); ?>" class="px" onclick="document.getElementById('startpicurl_<?php echo ($i+50); ?>_src').src=this.value;" id="startpicurl_<?php echo ($i+50); ?>" style="width:130px;">
<a href="###" onclick="upyunPicUpload('startpicurl_<?php echo ($i+50); ?>',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('startpicurl_<?php echo ($i+50); ?>')">预览</a>
</td>
    <td width="260"><input type="text" name="add[tourl][]" value="<?php echo ($ivo["tourl"]); ?>" style="width:100px;" class="px"></td><?php endif; ?>

    <td width="50" class="norightborder"><a href="javascript:;" onclick="delrow(this, 'div_add_del_<?php echo ($i+50); ?>',<?php echo ($ivo["id"]); ?>);">删除</a></td>
</tr>
 </tbody><?php endforeach; endif; else: echo "" ;endif; endif; ?>

<tbody id="div_add_del_1" name="div_add_del">
    <tr >
     <input type="hidden" name="add[id][]" readonly="readonly" disabled="disabled"  value="" style="width:20px;" >
        <td width="120">
            <input type="text" name="add[item][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[rank][]" value="" style="width:20px;" class="px">
        </td>
         <td>
            <input type="text" name="add[vcount][]" value="" style="width:20px;" class="px">
        </td>
        <?php if(($vo['type'] == 'img') OR ($type == 'img')): ?><td width="200">
          <img class="thumb_img" id="startpicurl_1_src" src="" style="max-height:100px;display: none;">
          <input type="text" name="add[startpicurl][]" placeholder="图片[http://]" value="" class="px"
          onclick="document.getElementById('startpicurl_1_src').src=this.value;" id="startpicurl_1" style="width:130px;">
          <a href="###" onclick="upyunPicUpload('startpicurl_1',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
          <a href="###" onclick="viewImg('startpicurl_1')">预览</a>
            <!--input type="text" name="add[startpicurl][]" id="startpicurl_1" value="<?php echo ($ivo["startpicurl"]); ?>" class="px"  style="width:50px;"-->
        </td>
        <td width="100"><input type="text" name="add[tourl][]" value="" class="px" style="width:100px;"></td><?php endif; ?>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(1)">删除</a>
          <a href="javascript:;" id="add2" onclick="addTabody(2)">添加</a></td>
    </tr>
</tbody>

<tbody id="div_add_del_2" name="div_add_del" style="display:none">
    <tr >
     <input type="hidden" name="add[id][]" readonly="readonly" disabled="disabled"  value="" style="width:20px;" >
        <td width="120">
            <input type="text" name="add[item][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[rank][]" value="" style="width:20px;" class="px">
        </td>
         <td>
            <input type="text" name="add[vcount][]" value="" style="width:20px;" class="px">
        </td>
        <?php if(($vo['type'] == 'img') OR ($type == 'img')): ?><td width="200">
          <img class="thumb_img" id="startpicurl_2_src" src="" style="max-height:100px;display: none;">
          <input type="text" name="add[startpicurl][]" value="" placeholder="图片[http://]" class="px"
          onclick="document.getElementById('startpicurl_2_src').src=this.value;" id="startpicurl_2" style="width:130px;">
          <a href="###" onclick="upyunPicUpload('startpicurl_2',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
          <a href="###" onclick="viewImg('startpicurl_2')">预览</a>

        </td>
        <td width="100"><input type="text" name="add[tourl][]" value="" class="px" style="width:100px;"></td><?php endif; ?>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(2)">删除</a>
          <a href="javascript:;" id="add3" onclick="addTabody(3)">添加</a></td>
    </tr>
</tbody>

<tbody id="div_add_del_3" name="div_add_del" style="display:none">
    <tr >
      <input type="hidden" name="add[id][]" readonly="readonly" disabled="disabled"  value="" style="width:50px;" >
        <td width="120">
            <input type="text" name="add[item][]" value="" placeholder="请填写选项标题"  class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[rank][]" value="" style="width:20px;" class="px">
        </td>
         <td>
            <input type="text" name="add[vcount][]" value="" style="width:20px;" class="px">
        </td>
        <?php if(($vo['type'] == 'img') OR ($type == 'img')): ?><td width="200">
          <img class="thumb_img" id="startpicurl_3_src" src="" style="max-height:100px;display: none;">
          <input type="text" name="add[startpicurl][]" value="" placeholder="图片外链须加[http://]" class="px"
          onclick="document.getElementById('startpicurl_3_src').src=this.value;" id="startpicurl_3" style="width:130px;">
          <a href="###" onclick="upyunPicUpload('startpicurl_3',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
          <a href="###" onclick="viewImg('startpicurl_3')">预览</a>

        </td>
        <td width="100"><input type="text" name="add[tourl][]" value="" class="px" style="width:100px;"></td><?php endif; ?>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(3)">删除</a>
          <a href="javascript:;" id="add4" onclick="addTabody(4)">添加</a></td>
    </tr>
</tbody>


<tbody id="div_add_del_4" name="div_add_del" style="display:none">
    <tr >
      <input type="hidden" name="add[id][]" readonly="readonly" disabled="disabled"  value="" style="width:50px;" >
        <td width="120">
            <input type="text" name="add[item][]" placeholder="请填写选项标题" value="" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[rank][]" value="" style="width:20px;" class="px">
        </td>
         <td>
            <input type="text" name="add[vcount][]" value="" style="width:20px;" class="px">
        </td>
        <?php if(($vo['type'] == 'img') OR ($type == 'img')): ?><td width="200">
          <img class="thumb_img" id="startpicurl_4_src" src="" style="max-height:100px;display: none;">
          <input type="text" name="add[startpicurl][]" value=""  placeholder="图片外链须加[http://]" class="px"
          onclick="document.getElementById('startpicurl_4_src').src=this.value;" id="startpicurl_4" style="width:130px;">
          <a href="###" onclick="upyunPicUpload('startpicurl_4',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
          <a href="###" onclick="viewImg('startpicurl_4')">预览</a>

        </td>
        <td width="100"><input type="text" name="add[tourl][]" value="" class="px" style="width:100px;"></td><?php endif; ?>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(4)">删除</a>
          <a href="javascript:;" id="add5" onclick="addTabody(5)">添加</a></td>
    </tr>
</tbody>


<tbody id="div_add_del_5" name="div_add_del" style="display:none">
    <tr >
     <input type="hidden" name="add[id][]" readonly="readonly" disabled="disabled"  value="" style="width:50px;" >
        <td width="120">
            <input type="text" name="add[item][]" value=""  placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[rank][]" value="" style="width:20px;" class="px">
        </td>
         <td>
            <input type="text" name="add[vcount][]" value="" style="width:20px;" class="px">
        </td>
        <?php if(($vo['type'] == 'img') OR ($type == 'img')): ?><td width="200">
          <img class="thumb_img" id="startpicurl_5_src" src="" style="max-height:100px;display: none;">
          <input type="text" name="add[startpicurl][]" value="" placeholder="图片外链须加[http://]" class="px"
          onclick="document.getElementById('startpicurl_5_src').src=this.value;" id="startpicurl_5" style="width:130px;">
          <a href="###" onclick="upyunPicUpload('startpicurl_5',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
          <a href="###" onclick="viewImg('startpicurl_5')">预览</a>

        </td>
        <td width="100"><input type="text" name="add[tourl][]" value="" class="px" style="width:100px;"></td><?php endif; ?>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(5)">删除</a>
          <a href="javascript:;" id="add6" onclick="addTabody(6)">添加</a></td>
    </tr>
</tbody>

<tbody id="div_add_del_6" name="div_add_del" style="display:none">
    <tr >
     <input type="hidden" name="add[id][]" readonly="readonly" disabled="disabled"  value="" style="width:50px;" >
        <td width="120">
            <input type="text" name="add[item][]" value=""  placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[rank][]" value="" style="width:20px;" class="px">
        </td>
         <td>
            <input type="text" name="add[vcount][]" value="" style="width:20px;" class="px">
        </td>
        <?php if(($vo['type'] == 'img') OR ($type == 'img')): ?><td width="200">
          <img class="thumb_img" id="startpicurl_6_src" src="" style="max-height:100px;display: none;">
          <input type="text" name="add[startpicurl][]" value="" placeholder="图片外链须加[http://]" class="px"
          onclick="document.getElementById('startpicurl_6_src').src=this.value;" id="startpicurl_6" style="width:130px;">
          <a href="###" onclick="upyunPicUpload('startpicurl_6',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
          <a href="###" onclick="viewImg('startpicurl_6')">预览</a>

        </td>
        <td width="100"><input type="text" name="add[tourl][]" value="" class="px" style="width:100px;"></td><?php endif; ?>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(6)">删除</a>
          <a href="javascript:;" id="add7" onclick="addTabody(7)">添加</a></td>
    </tr>
</tbody>

<tbody id="div_add_del_7" name="div_add_del" style="display:none">
    <tr >
     <input type="hidden" name="add[id][]" readonly="readonly" disabled="disabled"  value="" style="width:50px;" >
        <td width="120">
            <input type="text" name="add[item][]" value=""  placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[rank][]" value="" style="width:20px;" class="px">
        </td>
         <td>
            <input type="text" name="add[vcount][]" value="" style="width:20px;" class="px">
        </td>
        <?php if(($vo['type'] == 'img') OR ($type == 'img')): ?><td width="200">
          <img class="thumb_img" id="startpicurl_7_src" src="" style="max-height:100px;display: none;">
          <input type="text" name="add[startpicurl][]" value="" placeholder="图片外链须加[http://]" class="px"
          onclick="document.getElementById('startpicurl_7_src').src=this.value;" id="startpicurl_7" style="width:130px;">
          <a href="###" onclick="upyunPicUpload('startpicurl_7',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
          <a href="###" onclick="viewImg('startpicurl_7')">预览</a>

        </td>
        <td width="100"><input type="text" name="add[tourl][]" value="" class="px" style="width:100px;"></td><?php endif; ?>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(7)">删除</a>
          <a href="javascript:;" id="add8" onclick="addTabody(8)">添加</a></td>
    </tr>
</tbody>
<tbody id="div_add_del_8" name="div_add_del" style="display:none">
    <tr >
     <input type="hidden" name="add[id][]" readonly="readonly" disabled="disabled"  value="" style="width:50px;" >
        <td width="120">
            <input type="text" name="add[item][]" value=""  placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[rank][]" value="" style="width:20px;" class="px">
        </td>
         <td>
            <input type="text" name="add[vcount][]" value="" style="width:20px;" class="px">
        </td>
        <?php if(($vo['type'] == 'img') OR ($type == 'img')): ?><td width="200">
          <img class="thumb_img" id="startpicurl_8_src" src="" style="max-height:100px;display: none;">
          <input type="text" name="add[startpicurl][]" value="" placeholder="图片外链须加[http://]" class="px"
          onclick="document.getElementById('startpicurl_8_src').src=this.value;" id="startpicurl_8" style="width:130px;">
          <a href="###" onclick="upyunPicUpload('startpicurl_8',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
          <a href="###" onclick="viewImg('startpicurl_8')">预览</a>

        </td>
        <td width="100"><input type="text" name="add[tourl][]" value="" class="px" style="width:100px;"></td><?php endif; ?>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(8)">删除</a>
          <a href="javascript:;" id="add9" onclick="addTabody(9)">添加</a></td>
    </tr>
</tbody>
<tbody id="div_add_del_9" name="div_add_del" style="display:none">
    <tr >
     <input type="hidden" name="add[id][]" readonly="readonly" disabled="disabled"  value="" style="width:50px;" >
        <td width="120">
            <input type="text" name="add[item][]" value=""  placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[rank][]" value="" style="width:20px;" class="px">
        </td>
         <td>
            <input type="text" name="add[vcount][]" value="" style="width:20px;" class="px">
        </td>
        <?php if(($vo['type'] == 'img') OR ($type == 'img')): ?><td width="200">
          <img class="thumb_img" id="startpicurl_9_src" src="" style="max-height:100px;display: none;">
          <input type="text" name="add[startpicurl][]" value="" placeholder="图片外链须加[http://]" class="px"
          onclick="document.getElementById('startpicurl_9_src').src=this.value;" id="startpicurl_9" style="width:130px;">
          <a href="###" onclick="upyunPicUpload('startpicurl_9',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
          <a href="###" onclick="viewImg('startpicurl_9')">预览</a>

        </td>
        <td width="100"><input type="text" name="add[tourl][]" value="" class="px" style="width:100px;"></td><?php endif; ?>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(9)">删除</a>
          <a href="javascript:;" id="add10" onclick="addTabody(10)">添加</a></td>
    </tr>
</tbody>

<tbody id="div_add_del_10" name="div_add_del" style="display:none">
    <tr >
     <input type="hidden" name="add[id][]" readonly="readonly" disabled="disabled"  value="" style="width:50px;" >
        <td width="120">
            <input type="text" name="add[item][]" value=""  placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[rank][]" value="" style="width:20px;" class="px">
        </td>
         <td>
            <input type="text" name="add[vcount][]" value="" style="width:20px;" class="px">
        </td>
        <?php if(($vo['type'] == 'img') OR ($type == 'img')): ?><td width="200">
          <img class="thumb_img" id="startpicurl_10_src" src="" style="max-height:100px;display: none;">
          <input type="text" name="add[startpicurl][]" value="" placeholder="图片[http://]" class="px"
          onclick="document.getElementById('startpicurl_10_src').src=this.value;" id="startpicurl_10" style="width:130px;">
          <a href="###" onclick="upyunPicUpload('startpicurl_10',700,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
          <a href="###" onclick="viewImg('startpicurl_10')">预览</a>

        </td>
        <td width="100"><input type="text" name="add[tourl][]" value="" class="px" style="width:100px;"></td><?php endif; ?>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(10)">删除</a>
          </td>
    </tr>
</tbody>
<tbody>
        <tr>
            <td colspan="4" class="norightborder">
              排序默认为1，票数默认为0，如果是图片投票必须添加图片,图片跳转地址没有可以不填写。

        </tr>

  </tbody>
</table>

</div>
</div>

</td>
</tr>
<tr>
<th>单选/多选：</th>
<td>
  <p style="width: 120px; float: left; display: block; line-height: 32px; height: 32px;">
    <select name="cknums" class="input-medium">
      <option value="1" <?php if($vo['cknums'] == 1): ?>selected<?php endif; ?>>单选</option>
      <option value="2" <?php if($vo['cknums'] == 2): ?>selected<?php endif; ?>>多选</option>
    </select>

</p>
</td>
</tr>

<tr>
<th>截至时间：</th>
<td><input type="text" class="px" id="statdate" value="<?php if($vo['statdate'] != ''): echo (date("Y-m-d",$vo["statdate"])); endif; ?>" onClick="WdatePicker()" name="statdate">
到
<input type="text" class="px" id="enddate" value="<?php if($vo['enddate'] != ''): echo (date("Y-m-d",$vo["enddate"])); endif; ?>" name="enddate" onClick="WdatePicker()"></td>
</tr>
<!--
<tr>
<th>投票结果：</th>
<td>
<label>
<input name="display" type="radio" <?php if($vo['display'] == 1): ?>checked<?php endif; ?>  value="1" id="RadioGroup2_1">
投票前可见</label>
<label>
<input name="display" type="radio" <?php if($vo['display'] == 0): ?>checked <?php else: ?> checked<?php endif; ?> id="RadioGroup2_0" value="0">
投票后可见</label>
<label>
<input name="display" type="radio" <?php if($vo['display'] == 2): ?>checked<?php endif; ?>id="RadioGroup2_2" value="2">
投票结束可见</label>

</td>
</tr>

-->
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
<a href="<?php echo U('Vote/index');?>" class="btn">取消</a>
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