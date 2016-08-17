<?php if (!defined('THINK_PATH')) exit();?>﻿ <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <h4>商家设置 </h4> 
    <a href="<?php echo U('Host/index',array('token'=>$token));?>" class="right  btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a> 
   </div> 
   <form class="form" method="post" action="" enctype="multipart/form-data"> 
    <input type="hidden" name="id" value="<?php echo ($set["id"]); ?>" /> 
     
    <div class="msgWrap bgfc"> 
     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 
      <tbody> 
       <tr> 
        <th width="120"><span class="red">*</span>关键词：</th> 
        <td><input type="text" name="keyword" value="<?php echo ($set["keyword"]); ?>" class="px" style="width:400px;" /> <span class="red">只能写一个关键词</span></td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>商家名称：</th> 
        <td><input type="text" name="title" value="<?php echo ($set["title"]); ?>" class="px" style="width:400px;" /></td> 
       </tr> 
       <tr style="display:none"> 
        <th><span class="red">*</span>商家地址：</th> 
        <td><input type="text" name="address" value="<?php echo ($set["address"]); ?>" class="px" style="width:400px;" /></td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>商家电话：</th> 
        <td><input type="text" name="tel" value="<?php echo ($set["tel"]); ?>" class="px" style="width:400px;" /> 电话号码</td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>手机号：</th> 
        <td><input type="text" name="tel2" value="<?php echo ($set["tel2"]); ?>" class="px" style="width:400px;" /> 手机号</td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>订单封面图片：</th> 
        <td><input type="text" name="ppicurl" value="<?php echo ($set["ppicurl"]); ?>" id="pic" class="px" style="width:400px;" />   <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic')">预览</a> &nbsp;&nbsp;推荐大小为720x400</td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>订单页头部图片：</th> 
        <td><input type="text" id="pic1" name="headpic" value="<?php if($set["headpic"] != false): echo ($set["headpic"]); else: echo RES;?>/images/cart_info/online.jpg<?php endif; ?>" class="px" style="width:400px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic1',720,125,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic1')">预览</a> &nbsp;&nbsp;推荐大小为720x400 不会自定义请留空:填写图片外链地址，推荐大小为720x125，高度可根据自身需求调整。<br />不填默认本图片: <a target="ss" href="<?php echo ($f_siteUrl); ?>/tpl/User/default/common/images/cart_info/online.jpg">点击查看</a> </td> 
       </tr> 
        
       <tr> 
        <th valign="top"><span class="red">*</span>商家图片：</th> 
        <td valign="top">
         <div class="bdrcontent"> 
          <div id="div_ptype"> 
           <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%"> 
            <thead> 
             <tr> 
              <th width="160">文字描述</th>  
              <th width="160">图片地址</th> 
              <th width="160">图片跳转地址以http://开头</th> 
               
             </tr> 
            </thead> 
            <tbody> 
             <tr> 
              <td width="160"><input type="text" name="name" value="<?php echo ($set["name"]); ?>" class="px" style="width:160px;" /></td>  
              
              <td width="200"><input type="text" name="picurl" value="<?php echo ($set["picurl"]); ?>" id="pic2" class="px" style="width:160px;" />   <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic2')">预览</a> &nbsp;&nbsp;</td> 
              <td width="200"><input type="text" name="url" value="<?php echo ($set["url"]); ?>" class="px" style="width:160px;" /></td> 
               
             </tr> 
            </tbody> 
            
           </table> 
          </div> 
         </div> 
 
</td> 
       </tr> 
       <tr> 
        <th valign="top"><span class="red">*</span>商家介绍：</th> 
        <td valign="top"><textarea class="px" id="content" name="info" ><?php echo ($set["info"]); ?></textarea>


        </td> 
       </tr> 
       <tr> 
        <th valign="top"><span class="red">*</span>订单说明：</th> 
        <td valign="top"><textarea class="px" id="content2" name="info2" ><?php echo ($set["info2"]); ?></textarea>


        </td> 
       </tr> 
      </tbody> 
     </table> 
    </div>
        <div class="msgWrap"> 
       <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%"> 
       <tbody>
       <tr>         
        <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>  <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button> | <a href="<?php echo U('Host/index',array('token'=>$token));?>" class="btn">取消</a></td> 
       </tr> 
      </tbody> 
     </table> 
     </div>
    
   </form> 
  </div> 
  <div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>