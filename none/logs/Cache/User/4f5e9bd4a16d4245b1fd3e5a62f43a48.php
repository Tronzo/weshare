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
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
 <link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/formCheck/formcheck.js"> </script>
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
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut']
});

});
</script>
  

<script>
function selectall(name) {
  var checkItems=$('.cbitem');
  if ($("#check_box").attr('checked')==false) {
    $.each(checkItems, function(i,val){
      val.checked=false;
    });
    
  } else {
    $.each(checkItems, function(i,val){
      val.checked=true;
    });
  }
}
function tenantlatlng(longitude,latitude){
  art.dialog.data('longitude', longitude);
  art.dialog.data('latitude', latitude);
  // 此时 iframeA.html 页面可以使用 art.dialog.data('test') 获取到数据，如：
  // document.getElementById('aInput').value = art.dialog.data('test');
  art.dialog.open('<?php echo U('Map/setLatLng',array('token'=>$token,'id'=>$id));?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
<div class="content">
<div class="cLineB">
<h4 class="left">商家信息</h4>
    <a href="<?php echo U('Market/tenant',array('token'=>$token));?>"  class="btn btn-primary btn_submit  J_ajax_submit_btn right" style="margin-top:-8px">
      返回
    </a>
</div>

<!--tab end-->
<div class="msgWrap">
 <form class="form" method="post" id="form" name="form" action=""> 
    <div class="msgWrap bgfc"> 
     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 
      <tbody> 
       <tr> 
        <th><span class="red">*</span>名称：</th> 
        <td><input type="text" id="name" name="name" value="<?php echo ($tenant["name"]); ?>" class="px require" style="width:400px;" /></td> 
       </tr>
       <tr> 
        <th><span class="red">*</span>简称：</th> 
        <td><input type="text" id="shortname" name="shortname" value="<?php echo ($tenant["shortname"]); ?>" class="px require" style="width:400px;" /></td> 
       </tr>
       <tr> 
        <th><span class="red">*</span>电话：</th> 
        <td><input type="text" id="tel" name="tel" value="<?php echo ($tenant["tel"]); ?>" class="px require" style="width:400px;" /></td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>手机：</th> 
        <td><input type="text" id="mp" name="mp" value="<?php echo ($tenant["mp"]); ?>" class="px require" style="width:400px;" /></td> 
       </tr> 
       <!--
       <tr> 
        <th><span class="red">*</span>分支登陆账号：</th> 
        <td><input type="text" id="username" name="username" value="<?php echo ($tenant["username"]); ?>" class="px require" style="width:200px;" /></td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>分支登陆密码：</th> 
        <td><input type="password" id="password" name="password" value="" class="px require" style="width:200px;" />(修改时如果不想修改密码请留空)</td> 
       </tr> -->
      <tr> 
        <th><span class="red">*</span>Logo图片：</th> 
        <td><input type="text" id="logourl" name="logourl" value="<?php echo ($tenant["logourl"]); ?>" class="px require" style="width:350px;" /> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('logourl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('logourl')">预览</a></td> 
      </tr>
 <tr>
  <th valign="top"><span class="red">*</span><label for="keyword">商家类型</label></th>
  <td>
      <select name="cate_id" id="">
        <option value="">请选择分类..</option>
        <?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cate["cate_id"]); ?>" <?php if($tenant['cate_id'] == $cate['cate_id']): ?>selected<?php endif; ?>><?php echo ($cate["cate_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
  </td>
</tr> 
<tr>
  <th valign="top"><span class="red">*</span><label for="keyword">商圈区域</label></th>
  <td>
      <select name="area_id" id="">
        <option value="">请选择区域..</option>
        <?php if(is_array($area_list)): $i = 0; $__LIST__ = $area_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$area): $mod = ($i % 2 );++$i;?><option value="<?php echo ($area["area_id"]); ?>"<?php if($tenant['area_id'] == $area['area_id']): ?>selected<?php endif; ?>><?php echo ($area["area_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
  </td>
</tr>      
       <tr> 
        <th><span class="red"></span>地址：</th> 
        <td><input type="text" id="address" name="address" value="<?php echo ($tenant["address"]); ?>" class="px require" style="width:400px;" /></td> 
       </tr> 
        <tr> 
        <th><span class="red"></span>经纬度：</th> 
        <td>
          经度 <input type="text" id="longitude"  name="longitude" size="14" class="px" value="<?php echo ($tenant["longitude"]); ?>" /> 
          纬度 <input type="text"  name="latitude" size="14" id="latitude" class="px" value="<?php echo ($tenant["latitude"]); ?>" /> 
               <a href="###" onclick="tenantlatlng($('#longitude').val(),$('#latitude').val())">在地图中查看/设置</a>
        </td> 
       </tr>

<tr>
  <th valign="top"><span class="red"></span><label for="keyword">商家二维码</label></th>
  <td>
    <input type="text" class="px" id="mark_url" value="<?php echo ($tenant['mark_url']); ?>" name="mark_url"  style="width:350px" >
    <script src="<?php echo STATICS;?>/upyun.js"></script>
    <a href="javascript:void(0);" onclick="upyunPicUpload('mark_url',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
    <a href="javascript:void(0);" onclick="viewImg('mark_url')">预览</a> [700*420] 
  </td>
</tr>  
       <tr> 
        <th><span class="red"></span>顺序：</th> 
        <td><input type="text" id="taxis" name="taxis" value="<?php echo ($tenant["taxis"]); ?>" class="px require" style="width:100px;" /></td> 
       </tr>
        <TR>
                  <TH valign="top"><label for="info">图文详细页内容：</label></TH>
                  <TD><textarea name="intro" id="intro"  rows="5" style="width:590px;height:360px"><?php echo ($tenant["intro"]); ?></textarea></TD>
                </TR>  
       <tr>         
       <th>&nbsp;</th>
       <td>
        <input type="hidden" name="id" value="<?php echo ($tenant["id"]); ?>" />
        <input type="hidden" name="token" value="<?php echo $token;?>" />
       <button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button></td> 
       </tr> 
      </tbody> 
     </table> 
     </div>
    
   </form> 


</div>
<div class="cLine">

<div class="clr"></div>
</div>
</div>
<script language="javascript">
$(function(){

  $("#form").valid([
  { name:"name",simple:"名称",require:true},
  { name:"mp",type:"mobile",message:"手机号输入不正确"}
  
  ],true,true);

})
</script>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>