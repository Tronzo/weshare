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

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<link href="<?php echo RES;?>/css/activity.css" rel="stylesheet" type="text/css">
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="/tpl/static/upyun.js"></script>
<div class="content">
<div class="cLineB">
<h4 class="left">微调研</h4>
<div class="clr"></div>
</div>
<!--tab start-->
<div class="tab">
<ul>
<li class="current tabli" id="tab0"><a href="<?php echo U('Research/index', array('token' => $token));?>">调研列表</a></li>
<li class="tabli" id="tab0"><a href="<?php echo U('Research/saveInfo', array('token' => $token));?>">调研操作</a></li>
</ul>
</div>
<div class="cLine">
<div class="pageNavigator left"> <a href="<?php echo U('Research/saveInfo', array('token' => $token));?>" title="添加" class="btn btn-primary btn_submit  J_ajax_submit_btn">添加调研</a></div>
<div class="clr"></div>
</div>
<!--tab end-->
<div class="msgWrap">
<form method="post" action="" id="info">
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
<thead>
	<tr>
		<th width="100">调研标题</th>
		<th width="100">关键词</th>
		<th width="200">介绍</th>
		<th width="120">开始时间</th>
		<th width="120">过期时间</th>
		<th width="70">参与人数</th>
		<th width="200" class="norightborder">操作</th>
	</tr>
</thead>
<tbody>
<tr></tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tablelist): $mod = ($i % 2 );++$i;?><tr>
		<td><?php echo ($tablelist["title"]); ?></td>
		<td><?php echo ($tablelist["keyword"]); ?></td>
		<td><?php echo ($tablelist["description"]); ?></td>
		<td><?php echo (date("Y-m-d H:i:s",$tablelist["starttime"])); ?></td>
		<td><?php echo (date("Y-m-d H:i:s",$tablelist["endtime"])); ?></td>
		<td><?php echo ($tablelist["nums"]); ?></td>
		<td class="norightborder">
			<?php if($tablelist['lid'] == 0): ?><a href="<?php echo U('Research/add', array('researchid' => $tablelist['id'], 'token' => $token));?>">奖项设置</a> 
			<?php else: ?>
			<a href="<?php echo U('Research/research', array('researchid' => $tablelist['id'], 'id' => $tablelist['lid'], 'token' => $token));?>">奖项设置</a><?php endif; ?>
			
			<a href="<?php echo U('Research/saveInfo', array('rid' => $tablelist['id'], 'token' => $token));?>">修改</a> 
			<a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Research/delResearch',array('rid' => $tablelist['id'], 'token' => $token));?>');">删除</a>
			<a href="<?php echo U('Research/count',array('rid' => $tablelist['id'], 'token' => $token));?>">活动统计</a>
		</td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>
</form>
</div>
</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>