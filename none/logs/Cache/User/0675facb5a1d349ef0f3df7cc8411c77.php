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
  <h4>回复信息配置 </h4><a href="javascript:history.go(-1);" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a>
 </div>
<div class="tab">
<ul>
<li class="tabli" id="tab2"><a href="<?php echo U('Baoming/index');?>">主题活动列表</a></li>
<li class="current tabli" id="tab20"><a href="<?php echo U('Baoming/index');?>">回复信息配置</a></li>
</ul>
</div>
<!--tab end-->        
    <div class="msgWrap bgfc" style="margin-top:10px;">
	  <form class="form" method="post" action="" enctype="multipart/form-data">	 
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
             <tr>
				  <th valign="top"><span class="red"></span></th>
				  <td><span class="red">主题活动</span>————微信里输入关键字"主题活动"即可看到效果
					</td>
				</tr>
            <tr>
				  <th valign="top"><span class="red">*</span>回复标题：</th>
				  <td><input type="text" name="title" value="<?php echo ($info["title"]); ?>" class="px" style="width:550px;">
					</td>
				</tr>
                <tr>
				  <th valign="top"><span class="red">*</span>回复简介：</th>
				  <td><input type="text" name="jianjie" value="<?php echo ($info["jianjie"]); ?>" class="px" style="width:550px;">
					</td>
				</tr>
                 <tr>
					<th>回复图片：</th>
					<td><input type="text" id="picurl1" value="<?php echo ($info["tp"]); ?>" name="tp" class="px" style="width:550px;">  
<script src="/tpl/static/upyun.js"></script>
<a href="javascript:void(0)" onclick="upyunPicUpload('picurl1',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl1')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
				<tr>
				  <th valign="top"><span class="red">*</span>公司名称：</th>
				  <td><input type="text" name="company" value="<?php echo ($info["company"]); ?>" class="px" style="width:550px;">
					</td>
				</tr>
				<tr>
					<th>公司logo：</th>
					<td><input type="text" id="logo" value="<?php echo ($info["logo"]); ?>" name="logo" class="px" style="width:550px;">  

<a href="javascript:void(0)" onclick="upyunPicUpload('logo',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('logo')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>公司简介：</th>
					<td><textarea style="width:560px;height:75px" name="info" id="info" class="px" onkeydown='countChar("info","counter");' onkeyup="countChar('info','counter');"><?php echo ($info["info"]); ?></textarea><br/><font color="red">可以输入<span id="counter">400</span>字<br></font></td>
				</tr>
               
          
				<th>&nbsp;</th>
					<td>
						<button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
						<a href="javascript:history.go(-1);" class="btn">取消</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
  </div> 
 
  
        </div>
<link rel="stylesheet" href="/static/js/editor/themes/default/default.css" />
<script charset="utf-8" src="/static/js/editor/kindeditor-min.js"></script>
<script charset="utf-8" src="/static/js/editor/zh_CN.js"></script>
<script>
	KindEditor.ready(function(K) {
		var uploadbutton = K.uploadbutton({
			button : K('#uploadBtn')[0],
			fieldName : 'imgFile',
			url : '/index.php?g=User&m=Attachment&a=upload&type=reply',
			afterUpload : function(data) {
				if (data.error === 0) {
					K('#picurl').val(data.url);
				} else {
					alert(data.message);
				}
			},
			afterError : function(str) {
				alert('自定义错误信息: ' + str);
			}
		});
		uploadbutton.fileBox.change(function(e) {
			uploadbutton.submit();
		});
	});
</script>
<script language="javascript">
function countChar(textareaName,spanName){
 document.getElementById(spanName).innerHTML=400-document.getElementById(textareaName).value.length;
 if(document.getElementById(textareaName).value.length>=400){
  window.alert("已经是最大字数了哦！")
  return false;
 }
}
</script>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>