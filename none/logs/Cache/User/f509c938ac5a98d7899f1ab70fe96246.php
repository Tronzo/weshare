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
<style type="text/css">
.cLine {
    display: block;
    width: 100%;
}
.photo li{ float:left; margin:10px 10px 10px 0; position:relative;}
.photoimg{border: 1px solid #DDDDDD;
box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.15);
-moz-box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.15);
-webkit-box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.15);
-webkit-border-radius:5px 5px 5px 5pxx;
-moz-border-radius:5px 5px 10px 10px;
border-radius:5px 5px 10px 10px;
width:235px;padding: 0 0 10px;
background: url(<?php echo RES;?>/images/photo/bottom.png) repeat-x scroll left bottom #FFFFFF;
background-size:2px auto;
 *background:none;
}
.photoimg .cover{ width:100%;height:131px; overflow:hidden;display:block; background:url(<?php echo RES;?>/images/photo/noneimg.jpg) no-repeat 0 0 #f5f5f5;
-webkit-border-radius:5px 5px 0 0;
-moz-border-radius:5px 5px 0 0;
border-radius:5px 5px 0 0;
}
.photoimg img{ width:100%;
-webkit-border-radius:5px 5px 0 0;
-moz-border-radius:5px 5px 0 0;
border-radius:5px 5px 0 0;
}
.bd h6{ font-size:14px;margin:5px 10px; font-weight:normal;overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap !important;}
.bd p{ margin:5px 10px;}
.sn{ color:#999}
.fr{ position:absolute; bottom:15px;right:10px; display:none;* display: block}
.photoimg:hover .fr{ display:block}
.userinfoArea th {
width: 200px;
}
</style>

<div class="content">
<div class="cLineB">
<h4 class="left">相册</h4>
<div class="searchbar right">
 
</div>
<div class="clr"></div>
</div>
<div class="msgWrap bgfc">
                 <form method="post" action="<?php echo U('Photo/config');?>" enctype="multipart/form-data">
                   <input type="hidden" name="formhash" value="7566c850">
<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
<tr>
<th>回复：相册 触发此功能：</th>
<td><strong><a href="" class="green">在回复中，系统默认第一个相册（封面，标题，筒介）为图文回复信息</a></strong></td>
</tr>
<tr>
<th>相册头部图片外链地址:</th>
<td><input type="text" name="picurl" id="picurl" value="<?php echo ($headpic); ?>" class="px" style="width:400px;">   <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a  class="btn btn-primary btn_submit  J_ajax_submit_btn" href="###" onclick="viewImg('picurl')">预览</a> <button type="submit" name="homesubmit" value="true" class="btn btn-primary btn_submit  J_ajax_submit_btn btn btn-primary btn_submit  J_ajax_submit_btn"><strong>修改</strong></button></td>
</tr></tbody></table>
                            </form>
</div>
<div class="cLine">
<div class="pageNavigator left"> <a href="<?php echo U('Photo/add',array('token'=>$_SESSION['token']));?>" title="创建相册" class="btnGrayS btn btn-primary btn_submit  J_ajax_submit_btn bigbtn"><img src="<?php echo RES;?>/images/pic.png" class="btn btn-primary btn_submit  J_ajax_submit_btn">创建相册</a> </div>
<div class="clr"></div>
</div>
<div class="msgWrap">
<ul class="photo">
<?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photo): $mod = ($i % 2 );++$i;?><li>
<div class="photoimg">
 <a title="<?php echo ($photo["title"]); ?>" class="cover" href="<?php echo U('Photo/list_add',array('id'=>$photo['id']));?>">
  <img src="<?php echo ($photo["picurl"]); ?>" alt="<?php echo ($photo["title"]); ?>">
 </a>
<div class="bd">
<h6><?php echo ($photo["title"]); ?></h6>
<p class="sn">有<?php echo ($photo["num"]); ?>张照片</p>
</div>
<div class="fr">
<a href="<?php echo U('Photo/list_add',array('id'=>$photo['id']));?>">上传图片</a>　
<a href="<?php echo U('Photo/edit',array('token'=>session('token'),'id'=>$photo['id']));?>">编辑</a>　<a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Photo/del',array('token'=>session('token'),'id'=>$photo['id']));?>');">删除</a>
</div>
</div>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="clr"></div>
</div>

<div class="cLine">
<div class="pageNavigator right">
<div class="pages"><?php echo ($page); ?></div>
</div>
<div class="clr"></div>
</div>
</div>
<script>

function checkAll(form, name) {
for(var i = 0; i < form.elements.length; i++) {
var e = form.elements[i];
if(e.name.match(name)) {
e.checked = form.elements['chkall'].checked;
}
}
}

function changesort(tid,sortval){

var image=new Image();   
image.src='index.php?ac=app&op=sort&wxid=gh_423dwjkewad&tid='+tid+'&sort='+sortval+'&r='+Math.random(); 

}
  </script> 

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>