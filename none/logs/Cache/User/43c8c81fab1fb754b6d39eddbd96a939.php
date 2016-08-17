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

<div class="tab" id="myClas">
<ul>
<li class="<?php if(ACTION_NAME == 'index'): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('School/index',array('token'=>$token,'type'=>'semester'));?>">分类管理</a></li>
<li class="<?php if(ACTION_NAME == 'students'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('School/students',array('token'=>$token));?>">学员管理</a></li>
<!-- <li class="<?php if(ACTION_NAME == 'paycost'): ?>current<?php endif; ?> tabli" id="tab2">
<a href="<?php echo U('School/paycost',array('token'=>$token));?>">缴费管理</a></li> -->
<li class="<?php if((ACTION_NAME == 'assess') OR (ACTION_NAME == 'assess_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('School/assess',array('token'=>$token));?>">教师管理</a></li>
<li class="<?php if((ACTION_NAME == 'curriculum') OR (ACTION_NAME == 'assess_course')): ?>current<?php endif; ?> tabli" id="tab3"><a href="<?php echo U('School/curriculum',array('token'=>$token));?>">课程安排</a></li>
<li class="<?php if(ACTION_NAME == 'subscribe' OR (ACTION_NAME == 'subscribe_add')): ?>current<?php endif; ?> tabli" id="tab4"><a href="<?php echo U('School/subscribe',array('token'=>$token));?>">课程预约</a></li>
<li class="<?php if(ACTION_NAME == 'scoresearch' ): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('School/scoresearch',array('token'=>$token));?>">成绩查询</a></li>
<!-- <li class="<?php if(ACTION_NAME == 'campusnews'): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('School/campusnews',array('token'=>$token));?>">校内新闻</a></li> -->
<li class="<?php if(ACTION_NAME == 'cookbook'): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('School/cookbook',array('token'=>$token));?>">食谱安排</a></li>
<li class="<?php if(ACTION_NAME == 'introduction'): ?>current<?php endif; ?> tabli" id="tab7"><a href="<?php echo U('School/introduction',array('token'=>$token));?>">菜单/回复配置</a></li>
</ul>
</div>

<div class="content">

<div class="cLineB">
  <h4>您的位置: 分类管理 >
  <?php if($type == 'semester'): ?>学期管理|== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a>
  <?php elseif($type == 'theclass'): ?>
   班级管理 |== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a>
  <?php elseif($type == 'score'): ?>
  成绩管理|== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a>
  <?php elseif($type == 'subject'): ?>
  科目管理|== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a>
  <?php elseif($type == 'timeframe'): ?>
  时段管理|== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a>
  <?php elseif($type == 'week'): ?>
  星期管理|== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a><?php endif; ?>
   </h4>  <a href="javascript:window.location.reload();" class="btn btn-primary btn_submit  J_ajax_submit_btn right" style="margin-top:-27px">刷新</a>
 </div>
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
<div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
    <?php if($type == 'semester'): ?>填写学期,如 2014第一学期,2014第二学期,2015第一学期....<br/>
   <strong><font color='red'>特别提醒: 当你删除该学期项的时候,该学期项下相关的所有数据都会被删除,请谨慎操作!以免丢失数据!</font></strong>
  <?php elseif($type == 'theclass'): ?>
   填写班级,如 一年级,二年级,三年级....
  <?php elseif($type == 'score'): ?>
   填写成绩分类,如 第一期,第二期,第三期....
  <?php elseif($type == 'subject'): ?>
   填写科目,如 语文,数学,英语....
  <?php elseif($type == 'timeframe'): ?>
   填写时段,如 09:00-09:45 , 10:00-10:45 , 11:00-11:45....
  <?php elseif($type == 'week'): ?>
   填写班级,如 星期一,星期二,星期三....<?php endif; ?>
    </p>
    </div>
</div>

<div class="msgWrap bgfc" style="margin-top:-10px;">
      <form class="form" method="post" action="" target="_top" enctype="multipart/form-data">
        <div class="bdrcontent">
<div id="div_ptype">
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">


<script type="text/javascript">


function addDeltbody(i) {

    if (i != 1) {
       document.getElementById("div_add_del_" + i).style.display = "none";
       document.getElementById("add" + i).style.display = "";

    }
}
function addTabody(i) {

     document.getElementById('div_add_del_' + i).style.display = "";
     document.getElementById('add' + i).style.display = "none";
     document.getElementById("addssort_" + i).value = 1;
}

function delrow(obj, tbody,objid) {
   removeElement(tbody);
   var obj = {sid:objid}
   $.post("<?php echo U('School/del_item',array('deltype'=>$type));?>", obj,function(data) {if(data.errno==1)alert('删除成功');},"json");
}

function removeElement(obj){
  var obj = document.getElementById(obj);
  var _parenElment = obj.parentNode;
  if(_parenElment){
    _parenElment.removeChild(obj);
  }
}



  </script>
<tbody>
<tr>

    <td width="260">名称</td>
    <td width="50">排序</td>
    <td class="norightborder">操作</td>
</tr>
</tbody>


<?php if($semester != ''): if(is_array($semester)): $i = 0; $__LIST__ = $semester;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ivo): $mod = ($i % 2 );++$i;?><tbody id="div_add_del_<?php echo ($i+500); ?>" name="div_add_del">
<tr>
    <input type="hidden" name="add[sid][]"   value="<?php echo ($ivo["sid"]); ?>" style="width:20px;">
    <td width="120"><input type="text" name="add[sname][]" value="<?php echo ($ivo["sname"]); ?>" class="px" style="width:120px;"></td>
    <td width="20"><input type="text" name="add[ssort][]" value="<?php echo ($ivo["ssort"]); ?>" style="width:20px;" class="px"></td>
    <td width="50" class="norightborder"><a href="javascript:;" onclick="delrow(this, 'div_add_del_<?php echo ($i+500); ?>',<?php echo ($ivo["sid"]); ?>);">删除</a></td>
</tr>
 </tbody><?php endforeach; endif; else: echo "" ;endif; endif; ?>


<tbody id="div_add_del_1" name="div_add_del">
    <tr>
     <input type="hidden" name="add[sid][]" readonly disabled="disabled" value="" style="width:20px;">
        <td width="120">
            <input type="text" name="add[sname][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[ssort][]" id="addssort_1" value="1" style="width:20px;" class="px">
        </td>
        <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(1)">删除</a>
          <a href="javascript:;" id="add2" onclick="addTabody(2)">添加</a></td>
    </tr>
</tbody>

<tbody id="div_add_del_2" name="div_add_del" style="display:none">
    <tr>
     <input type="hidden" name="add[sid][]" readonly disabled="disabled" value="" style="width:20px;">
        <td width="120">
            <input type="text" name="add[sname][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[ssort][]" value=""  id="addssort_2"  style="width:20px;" class="px">
        </td>
        <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(2)">删除</a>
          <a href="javascript:;" id="add3" onclick="addTabody(3)">添加</a></td>
    </tr>
</tbody>

<tbody id="div_add_del_3" name="div_add_del" style="display:none">
    <tr>
      <input type="hidden" name="add[sid][]" readonly disabled="disabled" value="" style="width:50px;">
        <td width="120">
            <input type="text" name="add[sname][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[ssort][]" value="" id="addssort_3" style="width:20px;" class="px">
        </td>

        <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(3)">删除</a>
          <a href="javascript:;" id="add4" onclick="addTabody(4)">添加</a></td>
    </tr>
</tbody>


<tbody id="div_add_del_4" name="div_add_del" style="display:none">
    <tr>
      <input type="hidden" name="add[sid][]" readonly disabled="disabled" value="" style="width:50px;">
        <td width="120">
            <input type="text" name="add[sname][]" placeholder="请填写选项标题" value="" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[ssort][]" value="" id="addssort_4" style="width:20px;" class="px">
        </td>
        <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(4)">删除</a>
          <a href="javascript:;" id="add5" onclick="addTabody(5)">添加</a></td>
    </tr>
</tbody>


<tbody id="div_add_del_5" name="div_add_del" style="display:none">
    <tr>
     <input type="hidden" name="add[sid][]" readonly disabled="disabled" value="" style="width:50px;">
        <td width="120">
            <input type="text" name="add[sname][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[ssort][]" value="" id="addssort_5" style="width:20px;" class="px">
        </td>
        <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(5)">删除</a>
          <a href="javascript:;" id="add6" onclick="addTabody(6)">添加</a></td>
    </tr>
</tbody>

<tbody id="div_add_del_6" name="div_add_del" style="display:none">
    <tr>
     <input type="hidden" name="add[sid][]" readonly disabled="disabled" value="" style="width:50px;">
        <td width="120">
            <input type="text" name="add[sname][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[ssort][]" value="" id="addssort_6" style="width:20px;" class="px">
        </td>
        <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(6)">删除</a>
          <a href="javascript:;" id="add7" onclick="addTabody(7)">添加</a></td>
    </tr>
</tbody>

<tbody id="div_add_del_7" name="div_add_del" style="display:none">
    <tr>
     <input type="hidden" name="add[sid][]" readonly disabled="disabled" value="" style="width:50px;">
        <td width="120">
            <input type="text" name="add[sname][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[ssort][]" value="" id="addssort_7" style="width:20px;" class="px">
        </td>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(7)">删除</a>
          <a href="javascript:;" id="add8" onclick="addTabody(8)">添加</a></td>
    </tr>
</tbody>
<tbody id="div_add_del_8" name="div_add_del" style="display:none">
    <tr>
     <input type="hidden" name="add[sid][]" readonly disabled="disabled" value="" style="width:50px;">
        <td width="120">
            <input type="text" name="add[sname][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[ssort][]" value="" id="addssort_8" style="width:20px;" class="px">
        </td>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(8)">删除</a>
          <a href="javascript:;" id="add9" onclick="addTabody(9)">添加</a></td>
    </tr>
</tbody>
<tbody id="div_add_del_9" name="div_add_del" style="display:none">
    <tr>
     <input type="hidden" name="add[sid][]" readonly disabled="disabled" value="" style="width:50px;">
        <td width="120">
            <input type="text" name="add[sname][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[ssort][]" value="" id="addssort_9" style="width:20px;" class="px">
        </td>
         <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(9)">删除</a>
          <a href="javascript:;" id="add10" onclick="addTabody(10)">添加</a></td>
    </tr>
</tbody>

<tbody id="div_add_del_10" name="div_add_del" style="display:none">
    <tr>
     <input type="hidden" name="add[sid][]" readonly disabled="disabled" value="" style="width:50px;">
        <td width="120">
            <input type="text" name="add[sname][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">
        </td>
        <td>
            <input type="text" name="add[ssort][]" value=""  id="addssort_10" style="width:20px;" class="px">
        </td>
          <td width="50" class="norightborder"><a href="javascript:;" onclick="addDeltbody(10)">删除</a>
          </td>
    </tr>
</tbody>
<tbody>
        <tr>
            <td colspan="4" class="norightborder">
                添加顶级分类
        </td></tr>
  </tbody>
  <tbody>
       <tr>
        <td>
        <button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
       
        </td>
        </tr>
  </tbody>
</table>

</div>
</div>
    </form>
  </div>

        </div>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>