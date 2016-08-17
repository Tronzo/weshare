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
<div class="content">
<div class="cLineB">
  <h4>淘宝天猫店铺配置<span class="FAQ">只需要你填写天猫或淘宝店铺的手机站点地址，简单配置关键词，再在功能管理页面开启此功能，就可以直接通过微信检索店铺内的商品。</span></h4>             
 </div>
    <div class="msgWrap form"><form method="post"   action="<?php if($taobao['keyword'] != ''): ?>index.php?g=User&m=Taobao&a=edit&token=<?php echo ($_GET['token']); endif; ?>"  enctype="multipart/form-data" >  
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="userinfoArea">
              <tbody>
               <tr>
                  <th valign="top"><span class="red">*</span><label for="title">关键词:</label></th>
                  <td>淘宝<input type="text" style="display:none"  name="keyword"  id="title" value="淘宝"   class="px" tabindex="1" size="80"></td>
                </tr>
                <tr>
                  <th><span class="red">*</span><label for="tag">店铺名称:</label></th>
                  <td><input type="text"  name="title"  id="title" value="<?php echo ($taobao["title"]); ?>"   class="px" tabindex="1" size="80"> </td>
                </tr>
                 <tr>
                  <th><span class="red">*</span><label for="tel">店铺封面图片：</label></th>
                  <td><input type="text"  name="picurl"  id="picurl" value="<?php echo ($taobao["picurl"]); ?>"   class="px" tabindex="1" size="80">   <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('picurl')">预览</a></td>
                </tr>
                <tr>
                  <th><span class="red">*</span><label for="tel">店铺地址：</label></th>
                  <td><input type="text"  name="homeurl"  id="homeurl" value="<?php echo ($taobao["homeurl"]); ?>"   class="px" tabindex="1" size="80"> 请填写天猫或淘宝的店铺地址</td>
                </tr>
                <tr>
                  <th valign="top"></th>
                  <td>例如：天猫3G店铺地址通常为：<a href="http://beilimy.m.tmall.com/" target="_blank">http://beilimy.m.tmall.com/</a>　 淘宝的3G店铺地址为：<a href="http://shop104008058.m.taobao.com/" target="_blank">http://shop104008058.m.taobao.com/</a><br />    
                  	</td>
                </tr>
                <tr>
                  <th></th>
                  <td><button type="submit" name="appidsubmit" value="true" class="btn btn-primary btn_submit  J_ajax_submit_btn vm" ><strong>保存</strong></button></td>
                </tr>
              </tbody>
            </table>
</form>
            </div>
            </div>        <div class="clr"></div>
      </div>
    </div>
 
  </div>
   
  
  <!--底部-->
  	</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>