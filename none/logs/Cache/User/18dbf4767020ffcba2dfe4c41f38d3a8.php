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


<!-- <script src="<?php echo STATICS;?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo STATICS;?>/artDialog/plugins/iframeTools.js"></script> -->

 <style>
.cLine {
    overflow: hidden;
    padding: 5px 0;
  color:#000000;
}
.alert {
padding: 8px 35px 0 10px;
text-shadow: none;
-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
background-color: #f9edbe;
border: 1px solid #f0c36d;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
color: #333333;
margin-top: 5px;
}
.alert p {
margin: 0 0 10px;
display: block;
}
.alert .bold{
font-weight:bold;
}
 </style>


<div class="content">
  <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="msgWrap form">
<ul id="tags" style="margin:0;">
<li class="<?php if((ACTION_NAME == 'tenant')): ?>selectTag<?php endif; ?> " id="tab0"><a href="<?php echo U('Market/tenant',array('token'=>$token,'type'=>'market'));?>">商家管理</a></li>
<li class="<?php if(ACTION_NAME == 'cate'): ?>selectTag<?php endif; ?> " id="tab2"><a href="<?php echo U('Market/cate',array('token'=>$token,'type'=>'market'));?>">商户分类</a></li>
<li class="<?php if(ACTION_NAME == 'park'): ?>selectTag<?php endif; ?> " id="tab2"><a href="<?php echo U('Market/park',array('token'=>$token,'type'=>'market'));?>">停车场管理</a></li>
<li class="<?php if(ACTION_NAME == 'area'): ?>selectTag<?php endif; ?> " id="tab2"><a href="<?php echo U('Market/area',array('token'=>$token,'type'=>'market'));?>">区域管理</a></li>
<li class="<?php if(ACTION_NAME == 'index'): ?>selectTag<?php endif; ?> " id="tab2"><a href="<?php echo U('Market/index',array('token'=>$token,'type'=>'market'));?>">商圈设置</a></li>
<li class="<?php if(ACTION_NAME == 'wap_nav'): ?>selectTag<?php endif; ?> " id="tab2"><a href="<?php echo U('Market/wap_nav',array('token'=>$token,'type'=>'market'));?>">商圈首页板块设置</a></li>
</ul>
</div>
  <div class="cLineB">
    <h4>商圈区域管理</h4>
    <a href="<?php echo U('Market/area_set',array('token'=>$token));?>"  class="btn btn-primary btn_submit  J_ajax_submit_btn right" style="margin-top:-30px">
      <img class="vm" src="./tpl/User/default/common/images/icons/add.png">
      添加 区域
    </a>
</div>

<div class="msgWrap form">
    <div class="bdrcontent">
      <div id="div_ptype">
        <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
<thead>
<tr> 
  
  <th style=" width:120px;">区域名称</th>
  <th style=" width:60px;">经营范围</th>
  <th style=" width:120px;">介绍</th>
  <th style=" width:50px;">设置时间</th>
  <th style=" width:40px;">显示排序</th>
  <th style=" width:40px;">是否使用</th> 
  <th style=" width:80px;">操作</th>
</tr>
</thead>
<?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tbody><tr>
              <td>
                <div class="cateimg" style="padding:0 5px;"><img src="<?php echo ($item["area_pic"]); ?>" class="cateimg_small"></div>
                <?php echo ($item["area_name"]); ?>
              </td>
              <td><?php echo ($item["manage"]); ?></td>
              <td><?php echo ($item["area_intro"]); ?></td>
              <td><?php echo (date("Y-m-d",$item["add_time"])); ?></td>
              <td><?php echo ($item["sort"]); ?></td>
              <td><?php if($item["is_use"] == 1): ?>使用中<?php else: ?>未使用<?php endif; ?></td>          
              <td class="norightborder">
              <a href="<?php echo U('Market/area_set',array('area_id'=>$item['area_id']));?>" >修改</a> &nbsp;|&nbsp; 
              <a href="<?php echo U('Market/area_del',array('area_id'=>$item['area_id']));?>" onclick="return(confirm('确定要删除吗？'))" >删除</a> </td>
            </tr></tbody><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
      </div>
    </div>
    <div class="footactions" style="padding-left:10px">
      <div class="pages"> <?php echo ($page); ?></div>
    </div>
  </div>
</div>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>