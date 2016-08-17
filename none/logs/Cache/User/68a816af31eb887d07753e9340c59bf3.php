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
<div class="content" >  
<div class="cLineB"><h4>微信墙设置</h4><a href="javascript:history.go(-1);"  class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px" >返回</a></div> 
<div class="msgWrap">
<form class="form" method="post" enctype="multipart/form-data" >
<TABLE class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">
  <THEAD>
<TR>
  <TH valign="top"><label for="acttitle">活动名称：</label></TH>
  <TD><input type="text" class="px" id="title"  name="title" style="width:500px"  value="<?php echo ($info["title"]); ?>" >    </TD>
</TR>
<TR>
  <TH valign="top"><label for="acttitle">关键词：</label></TH>
  <TD><input type="text" class="px" id="keyword"  name="keyword" style="width:500px"  value="<?php echo ($info["keyword"]); ?>" >    </TD>
</TR>
<TR>
  <TH valign="top"><label for="text">Logo：</label></TH>
  <TD><input type="text" class="px" id="logo" value="<?php echo ($info["logo"]); ?>" name="logo" style="width:250px" value="" >  <a href="###" onclick="chooseFile('logo','my')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="upyunPicUpload('logo',400,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('logo')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a> 标题前面的logo,高度最佳80px，宽度最佳不超过200px，可以不填写
</TD>
</TR>

<TR>
  <TH valign="top"><label for="text">开幕背景：</label></TH>
  <TD><input type="text" class="px" id="startbackground" value="<?php echo ($info["startbackground"]); ?>" name="startbackground" style="width:250px" value="<?php echo ($info["startbackground"]); ?>" > <script src="/tpl/static/upyun.js"></script><a href="###" onclick="chooseFile('startbackground','background')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="upyunPicUpload('startbackground',1500,1000,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('startbackground')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a> 最佳尺寸宽984px,高636px
</TD>
</TR>
<TR>
  <TH valign="top"><label for="text">背景：</label></TH>
  <TD><input type="text" class="px" id="background" value="<?php echo ($info["background"]); ?>" name="background" style="width:250px" value="<?php echo ($info["background"]); ?>" > <script src="/tpl/static/upyun.js"></script><a href="###" onclick="chooseFile('background','background')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="upyunPicUpload('background',1500,1000,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('background')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>  默认为空会有更好的显示效果
</TD>
</TR>
<TR>
  <TH valign="top"><label for="text">结束背景：</label></TH>
  <TD><input type="text" class="px" id="endbackground" value="<?php echo ($info["endbackground"]); ?>" name="endbackground" style="width:250px" value="<?php echo ($info["endbackground"]); ?>" > <script src="/tpl/static/upyun.js"></script><a href="###" onclick="chooseFile('endbackground','background')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="upyunPicUpload('endbackground',1500,1000,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('endbackground')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a> 
</TD>
</TR>
<TR>
  <TH valign="top"><label for="text">二维码：</label></TH>
  <TD><input type="text" class="px" id="qrcode" value="<?php echo ($info["qrcode"]); ?>" name="qrcode" style="width:250px" value="" >  <a href="###" onclick="upyunPicUpload('qrcode',800,800,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('qrcode')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
</TD>
</TR>
<TR>
  <TH valign="top">状态：</TH>
  <TD><label for="radio3"><input id="radio3" class="radio" type="radio" name="isopen" value="1"  <?php if(($info["isopen"]) == "1"): ?>checked="checked"<?php endif; ?> /> 开启</label><br /><label for="radio4"><input class="radio" id="radio4" type="radio" name="isopen" value="0" <?php if(($info["isopen"]) == "0"): ?>checked="checked"<?php endif; ?> /> 关闭</label></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">一等奖名称：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["firstprizename"]); ?>" name="firstprizename" style="width:250px" value="" ></td>
</TR>
<TR>
  <TH valign="top"><label for="text">一等奖数量：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["firstprizecount"]); ?>" name="firstprizecount" style="width:50px" value="" ></td>
</TR>
<TR>
  <TH valign="top"><label for="text">一等奖图片：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["firstprizepic"]); ?>" id="firstprizepic" name="firstprizepic" style="width:250px" value="" >  <a href="###" onclick="upyunPicUpload('firstprizepic',600,600,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('firstprizepic')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td>
</TR>


<TR>
  <TH valign="top"><label for="text">二等奖名称：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["secondprizename"]); ?>" name="secondprizename" style="width:250px" value="" ></td>
</TR>
<TR>
  <TH valign="top"><label for="text">二等奖数量：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["secondprizecount"]); ?>" name="secondprizecount" style="width:50px" value="" ></td>
</TR>
<TR>
  <TH valign="top"><label for="text">二等奖图片：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["secondprizepic"]); ?>" id="secondprizepic" name="secondprizepic" style="width:250px" value="" >  <a href="###" onclick="upyunPicUpload('secondprizepic',600,600,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('secondprizepic')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td>
</TR>

<TR>
  <TH valign="top"><label for="text">三等奖名称：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["thirdprizename"]); ?>" name="thirdprizename" style="width:250px" value="" ></td>
</TR>
<TR>
  <TH valign="top"><label for="text">三等奖数量：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["thirdprizecount"]); ?>" name="thirdprizecount" style="width:50px" value="" ></td>
</TR>
<TR>
  <TH valign="top"><label for="text">三等奖图片：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["thirdprizepic"]); ?>" id="thirdprizepic" name="thirdprizepic" style="width:250px" value="" >  <a href="###" onclick="upyunPicUpload('thirdprizepic',600,600,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('thirdprizepic')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td>
</TR>

<TR style="display:none">
  <TH valign="top"><label for="text">四等奖名称：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["fourthprizename"]); ?>" name="fourthprizename" style="width:250px" value="" ></td>
</TR>
<TR style="display:none">
  <TH valign="top"><label for="text">四等奖数量：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["fourthprizecount"]); ?>" name="fourthprizecount" style="width:50px" value="" ></td>
</TR>
<TR style="display:none">
  <TH valign="top"><label for="text">四等奖图片：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["fourthprizepic"]); ?>" id="fourthprizepic" name="fourthprizepic" style="width:250px" value="" >  <a href="###" onclick="upyunPicUpload('fourthprizepic',600,600,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('fourthprizepic')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td>
</TR>


<TR style="display:none">
  <TH valign="top"><label for="text">五等奖名称：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["fifthprizename"]); ?>" name="fifthprizename" style="width:250px" value="" ></td>
</TR>
<TR style="display:none">
  <TH valign="top"><label for="text">五等奖数量：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["fifthprizecount"]); ?>" name="fifthprizecount" style="width:50px" value="" ></td>
</TR>
<TR style="display:none">
  <TH valign="top"><label for="text">五等奖图片：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["fifthprizepic"]); ?>" id="fifthprizepic" name="fifthprizepic" style="width:250px" value="" >  <a href="###" onclick="upyunPicUpload('fifthprizepic',0,0,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('fifthprizepic')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td>
</TR>


<TR style="display:none">
  <TH valign="top"><label for="text">六等奖名称：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["sixthprizename"]); ?>" name="sixthprizename" style="width:250px" value="" ></td>
</TR>
<TR style="display:none">
  <TH valign="top"><label for="text">六等奖数量：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["sixthprizecount"]); ?>" name="sixthprizecount" style="width:50px" value="" ></td>
</TR>
<TR style="display:none">
  <TH valign="top"><label for="text">六等奖图片：</label></TH>
  <TD><input type="text" class="px" value="<?php echo ($info["sixthprizepic"]); ?>" id="sixthprizepic" name="sixthprizepic" style="width:250px" value="" >  <a href="###" onclick="upyunPicUpload('sixthprizepic',600,600,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('sixthprizepic')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td>
</TR>

<TR>
  <TH></TH>
  <TD><input type="hidden" value="<?php echo ($info["id"]); ?>" name="id" /><button type="submit"  name="button"  class="btn btn-primary btn_submit  J_ajax_submit_btn" >保存</button>　
  	</TD>
  </TR>
  </TBODY>
</TABLE>
  </form>



  </div> 

        </div>
        
        <div class="clr"></div>
      </div>
    </div>
  </div> 

<!--底部-->
  	</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>