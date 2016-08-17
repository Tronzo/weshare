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
          <div class="cLineB"><h4>关键词触发第三方接口</h4>
			<a href="<?php echo U('Api/index',array('token'=>$token));?>" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a>
		  </div> 
<div class="msgWrap">
   <form class="form" method="post" action=""   enctype="multipart/form-data"> 
   <table class="userinfoArea" style=" margin:20px 0 20px 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
  <thead>
	<tr>
	  <th valign="top"><label for="keyword">接口触发词：</label></th>
	  <td>
		<input type="text" class="px" id="keyword" value="<?php echo ($api["keyword"]); ?>" name="keyword" style="width:600px"><br>
		多个关键词请用空格格开：例如: 电影 &nbsp;dy &nbsp;movie (注：关键词必须填写，用于触发接口！) 开启包含匹配触发本接口!  用户输入的只要包含本关键词自动交给本接口处理!  </td>
	</tr>
  </thead>
<thead style="display:none">
	<tr>
	  <th valign="top"> 参数传递:</th>
	  <td>  
		<input type="checkbox" id="delkey" value="1" name="is_colation" <?php if($api['is_colation'] == 1): ?>checked<?php endif; ?>>是否过滤触发词<br>
			比如设置的电影为触发词,用户输入 电影 美国派 时，如果启用过滤我们只将美国派这个词发送到的你的接口，如果不过滤 就是整个 电影 美国派全部发送到的接口!
	  </td>
	</tr>
</thead>
<thead>
	<tr>
	  <th valign="top">接口类型：</th>
	  <td>
		<input class="radio" type="radio" name="type" value="1" <?php if($api['type'] == 1): ?>checked<?php endif; ?>>&nbsp;微信标准接口（标准xml）&nbsp;&nbsp;<input class="radio" type="radio" name="type" value="2" <?php if($api['type'] == 2): ?>checked<?php endif; ?>>&nbsp;文本类型接口  <br>
		我们会post 参数到本接口 Content=用户消息&amp;fromUsername=用户加密id&amp;toUsername=你的公众号token 
	  </td>
	</tr>
  </thead>
<thead>
	<tr>
	  <th valign="top">触发时机：</th>
	  <td>
		<input class="radio" type="radio" name="noanswer" value="0" <?php if($api['noanswer'] == 0): ?>checked<?php endif; ?>>&nbsp;优先于所有关键词触发&nbsp;&nbsp;<input class="radio" type="radio" name="noanswer" value="1" <?php if($api['noanswer'] == 1): ?>checked<?php endif; ?>>&nbsp;系统回答不上来的时候触发 
	  </td>
	</tr>
  </thead>
  <tbody>
<tr>
  <th valign="top"><label for="text">融合的第三方微信api地址：</label></th>
  <td><input type="text" class="px" id="apiurl" value="<?php echo ($api["url"]); ?>" name="url" style="width:600px"><br></td>
</tr>
<tr style="display:none">
  <th valign="top"><label for="token">忽略本接口回复特征词：</label></th>
  <td><input type="text" class="px" id="token" value="<?php echo ($api["colation_keyword"]); ?>" name="colation_keyword" style="width:600px"><br>设置 包含关键词用|隔开，包含此特定词则忽略，交给我们处理!  无需忽略请留空!


</td>
   
</tr>
<tr>
                            
  <th></th>
  <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>　　<a href="<?php echo U('Api/index',array('token'=>$token));?>" class="btn">取消</a>
  <div class="clr"></div>
</td>
</tr>
  </tbody>
</table>
    </form> 
备注：带参数的传递实例，你设定movie为触发词，用户查询某电影必须加空格，格式为：movie&nbsp;美国派，接口将会把movie&nbsp;美国派做为Content提交到你的接口!<br>设置完记得到功能面板开启融合第三方接口才能正式生效！

  </div> 

        </div>
 <!--底部-->
  	</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>