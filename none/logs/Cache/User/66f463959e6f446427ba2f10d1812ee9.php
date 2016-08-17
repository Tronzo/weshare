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
  <h4>文章分类管理<?php if($fid != 0): ?>(<?php echo ($thisClassify["name"]); ?>子分类)<?php endif; ?>  <span class="FAQ">设置好分类，在图文编辑的时候就可以选择分类，系统会自动生成一个3G网站。</span></h4>
 <?php if($_GET['fid'] != ''): ?><a href="javascript:history.go(-1);"  class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px" >返回</a><?php endif; ?>
 </div>
         <div class="cLineC" style="line-height: 32px;">
 <a href="<?php if($fid != 0): echo U('Classify/add',array('fid'=>$fid)); else: echo U('Classify/add'); endif; ?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">添加<?php if($fid != 0): echo ($thisClassify["name"]); ?>子<?php endif; ?>分类</a>　 
</div>
 
 <div class="msgWrap form">

<div class="bdrcontent">
<div id="div_ptype">
<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
<thead>
<tr>
                    <th style=" width:120px;">分类名称</th>
                   <th style=" width:120px;">分类描述</th>
<th style=" width:70px;">显示顺序</th>
<th>分类图片 <a target="999" class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>分类图片最佳尺寸：宽720高400</p>
<p>不支持上传图片，请把图片上传到腾讯微博，再这里填写图片的外链地址。</p>
<p>如果不填写分类图片地址系统将随机分配默认图片。</p>
</span></a></th>
<th>外链网站或活动 <span class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>比如你想跳转到百度，就填写<a class="red">http://www.baidu.com</a></p>
<p>不需要跳转就不用填写，还可以外链活动，</p>
<p>直接填写活动外链地址：<a class="red">大转盘387</a></p>
</span></span></th>
<th style=" width:80px;"  >首页显示</th>
                        <th class="norightborder">操作</th>
</tr>
</thead>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["name"]); ?></td>
<td><?php echo ($vo["info"]); ?></td>
<td><?php echo ($vo["sorts"]); ?></td>
<td><div class="cateimg"><img src="<?php echo ($vo["img"]); ?>" class="cateimg_small"  /><img src="<?php echo ($vo["img"]); ?>" class="cateimg_big"  /></div></td>
<td><?php echo ($vo["url"]); ?></td>
<td><?php if(($vo["status"]) == "1"): ?>显示<?php else: ?>不显示<?php endif; ?></td>
<td class="norightborder" width="120">
	<nobr><!--a target="ddd" href="<?php echo U('Wap/Index/classify',array('token'=>$_SESSION['token']));?>">查看</a-->
	<a href="<?php echo U('Classify/index',array('fid'=>$vo['id']));?>">子分类</a>
	<a href="<?php if ($vo['fid']==0){ echo U('Classify/edit',array('id'=>$vo['id'])); }else{ echo U('Classify/edit',array('id'=>$vo['id'],'fid'=>$vo['fid'])); }?>">编辑</a>
	<a href="<?php if ($vo['fid']==0){ echo U('Classify/del',array('id'=>$vo['id'])); }else{ echo U('Classify/del',array('id'=>$vo['id'],'fid'=>$vo['fid'])); }?>">删除</a>
	</nobr>
</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
               
  </table>
</div>
</div>
<div class="footactions" style="padding-left:10px">
  <div class="pages"><?php echo ($page); ?></div>
</div>
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