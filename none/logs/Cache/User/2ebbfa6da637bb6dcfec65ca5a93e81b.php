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
  <h4>讨论社区配置 </h4>
 </div>
<!--tab start-->
<div class="tab">
<ul>
<li class="<?php if($tabid == 1): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Forum/index',array('token'=>$token));?>">帖子管理</a></li>
<li class="<?php if($tabid == 2): ?>current<?php endif; ?> tabli" id="tab1"><a href="<?php echo U('Forum/comment',array('token'=>$token));?>">评论管理</a></li>
<li class="<?php if($tabid == 3): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Forum/message',array('token'=>$token));?>">消息管理</a></li>
<li class="<?php if($tabid == 4): ?>current<?php endif; ?> tabli" id="tab3"><a href="<?php echo U('Forum/config',array('token'=>$token));?>">社区配置</a></li> 
</ul>
</div>
<!--tab end-->    
    <div class="msgWrap bgfc">
	  <form class="form" method="post" action="<?php echo U('Forum/set');?>"   enctype="multipart/form-data">	 
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
				<tr>
				  <th valign="top"><span class="red">*</span>关键词：</th>
				  <td>
					<span class="red">论坛 或者 讨论社区 —— 当用户输入该关键词时，将会触发此回复。</span></td>
				</tr>
				
				<tr>
					<th width="120">讨论社区名字</th>
					<td><input type="text" name="forumname" value="<?php echo (($conf["forumname"])?($conf["forumname"]):$wxname.'官方粉丝社区'); ?>" class="px" style="width:250px;"></td>
				</tr>
				<tr>
					<th>回复图片：</th>
					<td><input type="text" name="picurl" id="picurl" value="<?php echo (($conf["picurl"])?($conf["picurl"]):$f_siteUrl.'/tpl/Wap/default/common/images/forum/bbshuifu.jpg'); ?>" class="px" style="width:550px;"><script src="/tpl/static/upyun.js"></script>  <a href="###" onclick="upyunPicUpload('picurl',360,200,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('picurl')">预览</a><br/> </td>
				</tr>
				
				<tr>
					<th>讨论社区Logo：</th>
					<td><input type="text" name="logo" id="logo" value="<?php echo (($conf["logo"])?($conf["logo"]):$f_siteUrl.'/tpl/Wap/default/common/images/forum/bbslogo.jpg'); ?>" class="px" style="width:550px;">  <a href="###" onclick="upyunPicUpload('logo',1500,1000,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('logo')">预览</a><br/> </td>
				</tr>				
				<tr>
					<th>自定义背景</th>
					<td><input type="text" name="bgurl" id="bgurl" value="<?php echo (($conf["bgurl"])?($conf["bgurl"]):$f_siteUrl.'/tpl/Wap/default/common/images/forum/bg.jpg'); ?>" class="px" style="width:550px;">  <a href="###" onclick="upyunPicUpload('bgurl',1500,1000,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('bgurl')">预览</a><br/> </td>
				</tr>
				<tr>
					<th width="120">图文回复介绍：</th>
					<td><textarea style="width:560px;height:75px" name="intro" id="intro" class="px"><?php echo ($conf["intro"]); ?></textarea></td>
				</tr>
				
				
				<tr>
					<th width="120">是否需要审核新帖</th>
					<td>
						<input type="radio" name="ischeck" id="nocheck" <?php if($conf['ischeck'] == 0): ?>checked<?php endif; ?> value="0" /><label for="nocheck">不需要 &nbsp;</label>
						<input type="radio" name="ischeck" id="check" <?php if($conf['ischeck'] == 1): ?>checked<?php endif; ?> value="1" /><label for="check">需要</label>
					</td>
				</tr>
								
				<tr>
					<th width="120">是否需要审核新评论</th>
					<td>
						<input type="radio" name="comcheck" id="nocomcheck" <?php if($conf['comcheck'] == 0): ?>checked<?php endif; ?> value="0" /><label for="nocomcheck">不需要 &nbsp;</label>
						<input type="radio" name="comcheck" id="comcheck" <?php if($conf['comcheck'] == 1): ?>checked<?php endif; ?> value="1" /><label for="comcheck">需要</label>
					</td>
				</tr>
				
				<tr>
					<th width="120">开启/关闭讨论社区</th>
					<td>
						<input type="radio" name="isopen" id="open" <?php if($conf['isopen'] == 1): ?>checked<?php endif; ?> value="1" /><label for="open">开启 &nbsp;</label>
						<input type="radio" name="isopen" id="noopen" <?php if($conf['isopen'] == 0): ?>checked<?php endif; ?> value="0" /><label for="noopen">关闭</label>
						 &nbsp; &nbsp; &nbsp;<tt style="color:red">(*选择关闭将不能打开讨论社区)</tt>
					</td>
				</tr>
				
				
				
				<th>&nbsp;</th>
					<td>
						<input type="hidden" name="token" value="<?php echo ($_GET['token']); ?>" />
						<button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
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