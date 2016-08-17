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
<div class="content">

<div class="cLineB">
  <h4><a href="#">添加<?php if($type == 0): ?>选择题<?php elseif($type == 1): ?>简答题<?php else: ?>看图猜<?php endif; ?>题目</a> </h4><a href="javascript:history.go(-1);" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a>
 </div>
 <!--tab start-->
<div class="tab">
<ul>
<li class="tabli" id="tab0"><a href="<?php echo U('Dati/index');?>">选择题列表</a></li>
<li class="tabli" id="tab2"><a href="<?php echo U('Dati/jdt');?>">简答题列表</a></li>
<li class="tabli" id="tab2"><a href="<?php echo U('Dati/ktc');?>">看图猜列表</a></li>
<li class="tabli current" id="tab2"><a href="#">添加<?php if($type == 0): ?>选择题<?php elseif($type == 1): ?>简答题<?php else: ?>看图猜<?php endif; ?>题目</a></li>
</ul>
</div>
<!--tab end-->        
    <div class="msgWrap bgfc" style="margin-top:10px;">
	  <form class="form" method="post" action=""   enctype="multipart/form-data">	 
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
				<tr>
				  <th valign="top"><span class="red">*</span><?php if($type == 2): ?>标题<?php else: ?>题目<?php endif; ?>：</th>
				  <td>
                  <?php if($type == 2): ?><input type="text" name="title" class="px" style="width:550px;">
                  <?php else: ?>
                  <textarea style="width:560px;height:75px" name="title" id="info" class="px"></textarea><br/><font color="red"><span id="counter">130</span>字以内<br></font><?php endif; ?>
					</td>
				</tr>
				<?php if($type == 2): ?><tr>
					<th width="120"><span class="red">*</span>图片题目：</th>
					<td><input type="text" name="picurl" id="picurl" class="px" style="width:450px;">&nbsp;&nbsp;
<script src="/tpl/static/upyun.js"></script>
<a href="javascript:void(0)" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                <tr>
					<th width="120"><span class="red">*</span>题目描述：</th>
					<td><textarea style="width:560px;height:75px" name="info" id="info" class="px"></textarea><br/><font color="red"><span id="counter">130</span>字以内<br></font></td>
				</tr><?php endif; ?>
				<tr>
					<th width="120"><span class="red">*</span>答案：</th>
					<td><input type="text" name="daan" class="px" style="width:550px;"></td>
				</tr>
               <tr>
					<th width="120"><span class="red">*</span>奖励积分：</th>
					<td><input type="text" name="score" class="px" style="width:50px;" value="1"> 1~100数字</td>
				</tr>
				<th>&nbsp;</th>
					<td>
                    	<input type="hidden" name="type" value="<?php echo ($type); ?>" />
						<button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
						<a href="javascript:history.go(-1);" class="btn">取消</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
  </div> 
 
  
        </div>
<script language="javascript">
function countChar(textareaName,spanName){
 document.getElementById(spanName).innerHTML=37-document.getElementById(textareaName).value.length;
 if(document.getElementById(textareaName).value.length>=37){
  window.alert("已经是最大字数了哦！")
  return false;
 }
}
</script>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>