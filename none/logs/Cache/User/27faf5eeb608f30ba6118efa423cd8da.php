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

<div class="cLineB">
  <h4>认证服务号渠道二维码生成与统计</h4>
            
 </div>

         
    
 <div class="msgWrap bgfc" style=" padding:5px 10px; margin:0">
   <table class="ListProduct" border="" cellspacing="0" cellpadding="0" width="100%">
	<thead>
		<tr>
			<th style="width:80px;">渠道ID</th>
			<th>渠道名称</th>
			<th>渠道使用量</th>
			<th>触发关键词</th>
			<th style="width:80px;">渠道二维码</th>
			<th style="width:80px;">状态</th>
			<th style=" width:100px;" class="norightborder">操作</th>
		</tr>
	</thead>
	<tbody>
			  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                  <td style="width:80px;"><?php echo ($list["id"]); ?></td>
                  <td><?php echo ($list["title"]); ?></td>
                  <td><?php echo ($list["attention_num"]); ?></td>
                  <td><?php echo ($list["keyword"]); ?></td>
                  <td><?php if($list['code_url'] != ''): ?><a href="https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=<?php echo ($list["code_url"]); ?>" target="_blank">点击查看</a><?php else: ?><a href="<?php echo U('Recognition/get_code',array('id'=>$list['id']));?>">获取二维码</a><?php endif; ?></td>
				   <td><?php if($list['status'] == 0): ?>启用<?php else: ?>暂停<?php endif; ?></td>
                  <td class="norightborder">
						<?php if($list['status'] == 0): ?><a href="<?php echo U('Recognition/status',array('type'=>1,'id'=>$list['id']));?>">停用</a><?php else: ?><a href="<?php echo U('Recognition/status',array('type'=>0,'id'=>$list['id']));?>">启用</a><?php endif; ?> | 
						<a href="<?php echo U('Recognition/del',array('id'=>$list['id']));?>">删除</a>　
				   </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                 <tr>
                </tr>
              </tbody>
	</table>
	 <div class="cLine">
            <div class="pageNavigator right">
                 <div class="pages"><?php echo ($page); ?></div>
              </div>
            <div class="clr"></div>
          </div>
  <form class="form" method="post" action=""   enctype="multipart/form-data">
<table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
  <thead>
<tr>
  <th valign="top"><label for="title">渠道名称：</label></th>
  <td><input type="text" class="px" required="" id="title" value="" name="title" style="width:400px"> 请认真填写生成后不可以编辑！只能删除重建<br>
                   </td>
  <td>&nbsp;</td>
</tr>
                              <tr>
  <th valign="top"><label for="keyword">触发关键词：</label></th>
  <td><input type="text" class="px" id="keyword" value="" name="keyword" style="width:60px"> 非必填项，建议留空（留空保留原关注时回复的内容!）<br>
                   </td>
  <td>&nbsp;</td>
</tr>
                            </thead>
                            
  <tbody>
 
<tr>
  <th></th>
  <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">添加</button> 
  </td>
  </tr>
  </tbody>
</table>
  </form>

       
       <div class="clear"></div>
      </div>
  </div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>