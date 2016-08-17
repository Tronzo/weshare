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

<div class="content">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
<script>
function setlatlng(longitude,latitude){
	art.dialog.data('longitude', longitude);
	art.dialog.data('latitude', latitude);
	// 此时 iframeA.html 页面可以使用 art.dialog.data('test') 获取到数据，如：
	// document.getElementById('aInput').value = art.dialog.data('test');
	art.dialog.open('/index.php?g=User&m=Map&a=setLatLng&token=pjtxnc1386135902',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
<div class="cLineB">
  <h4>微邀请配置</h4><a href="javascript:history.go(-1);" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a>
 </div>
         
    <div class="msgWrap bgfc">
	   <form class="form" method="post" action=""    enctype="multipart/form-data" >	 
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
				<tr>
					<th width="120"><span class="red">*</span>邀请标题：</th>
					<td><input type="text" name="title" value="" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>关键词：</th>
					<td><input type="text" name="keyword" value="" class="px" style="width:550px;"><br/> <span class="red">只能写一个关键词</span>，用户输入此关键词将会触发此活动。
</td>
				</tr>
				<tr>
					<th>回复图片：</th>
					<td><input type="text" name="picurl" value="<?php echo ($f_siteUrl); ?>/tpl/Wap/default/common/css/invites/yqh.jpg" class="px" onclick="document.getElementById('picurl').src=this.value;" id="picurl" style="width:550px;"> 
                    <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="ChooseImage">上传</a> <a href="###" onclick="viewImg('picurl')" class="ChooseImage">预览</a>&nbsp;填写图片外链地址，大小为720x400</td>

				</tr>
 <tr>
					<th>邀请类型：</th>
					<td>
                    <select name="type">
					<option value="1" >会议</option>
					<option value="2" >聚会</option>
					<option value="3" >活动</option>
					</select>
                    </td>
				</tr>
<tr>
					<th width="120"><span class="red">*</span>简介：</th>
					<td>
                    	<textarea style="width:560px;height:75px" name="brief" id="brief" class="px"></textarea>
</td>
				</tr>
<tr>
					<th width="120"><span class="red">*</span>内容：</th>
					<td>
                    	<textarea style="width:560px;height:75px" name="content" id="content" class="px"></textarea>
</td>
				</tr>
<tr>
			  <th><span class="red">*</span>日期：</th>
			  <td><input type="text" name="statdate" id="statdate" class="px" value="" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss' })"></td>
			</tr>
				<tr>
					<th><span class="red">*</span>地址：</th>
					<td><input type="text" name="address" value="" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th><span class="red">*</span>经纬地址：</th>
					<td>经度 <input type="text" id="longitude"  name="lng" size="14" class="px" value="" /> 纬度 <input type="text"  name="lat" size="14" id="latitude" class="px" value="" /> <a href="###" onclick="setlatlng($('#longitude').val(),$('#latitude').val())">在地图中查看/设置</a></td>
				</tr>

				<tr>
					<th><span class="red"></span>底部版权：</th>
					<td><input type="text" name="copyrite" value="" class="px" style="width:400px;"> <span>例如：© 2001-2013 <?php echo ($f_siteTitle); ?>版权所有</span></td>
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
         <div class="clr"></div>
</div>
</div>
</div>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>