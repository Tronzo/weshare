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


<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<div class="tab">
<ul>
<li class="<?php if(ACTION_NAME == 'index'): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Medical/index',array('token'=>$token,'addtype'=>'medical'));?>">挂号设置</a></li>
<li class="<?php if(ACTION_NAME == 'reser_manage'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Medical/reser_manage',array('token'=>$token));?>">预约管理</a></li>
<!-- <li class="<?php if(ACTION_NAME == 'housetype'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Medical/searchMedical',array('token'=>$token));?>">预约查询</a></li>
<li class="<?php if(ACTION_NAME == 'album'): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('Medical/totalMedical',array('token'=>$token));?>">预约统计</a></li> -->
<li class="<?php if(ACTION_NAME == 'aboutus'): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('Medical/aboutus',array('token'=>$token));?>">医院简介</a></li>
<li class="<?php if(ACTION_NAME == 'setIndex'): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('Medical/setIndex',array('token'=>$token));?>">首页配置</a></li>
</ul>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo Common;?>/default_user_com.css" media="all">
<script src="./tpl/User/default/common/js/date/WdatePicker.js"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo Common;?>/daterangepicker/daterangepicker-bs3.css" />
<script type="text/javascript" src="<?php echo Common;?>/daterangepicker/moment.js"></script>
<script type="text/javascript" src="<?php echo Common;?>/daterangepicker/daterangepicker.js"></script>

<link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
 <script>
    jQuery(document).ready(function(){
      jQuery("#formID").validationEngine();
    });
    </script>
<style>
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
<div class="content">
<div class="cLineB">
  <h4>挂号设置</h4><a href="javascript:history.go(-1);return false;" class="right btnGrayS vm" style="margin-top:-27px">返回</a>
 </div>
  <div class="msgWrap bgfc">
  <form action="" method="post" id="formID" class="form-horizontal form-validate" novalidate="novalidate">
 <input type="hidden" name="rid" id="rid" value="123"/>
 <?php if($reslist['id'] != ''): ?><input type="hidden" name="id" id="id" value="<?php echo ($reslist['id']); ?>"/><?php endif; ?>
    <div class="control-group">
        <label for="title" class="control-label">图文消息标题：</label>
        <div class="controls">
           <input type="text" placeholder="请输入图文消息标题" name="title" id="title" class="span4"  data-validation-engine="validate[required,minSize[2],maxSize[25]]" data-errormessage-value-missing="必填项"  value="<?php echo ($reslist['title']); ?>" schoolSet /><span class="maroon">*</span><span class="help-inline">尽量简单，不要超过25字</span>
        </div>
    </div>

    <div class="control-group">
        <label for="coverurl" class="control-label">图文封面：</label>
       <div class="controls">
      <img class="thumb_img" id="picurl_src" src="<?php echo (($reslist['picurl'])?($reslist['picurl']):'tpl/User/default/common/images/medical_default.png'); ?>" style="max-height:100px;">
      <input id="picurl" type="text" class="span4" name="picurl" class="input-xlarge"  schoolSet  value="<?php echo (($reslist['picurl'])?($reslist['picurl']):'tpl/User/default/common/images/medical_default.png'); ?>" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"/>
          <span class="help-inline">
               <script src="<?php echo STATICS;?>/upyun.js"></script><a href="###" onclick="upyunPicUpload('picurl',720,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('picurl')">预览</a>
              <span class="help-inline">建议尺寸：宽720像素，高400像素</span>
          </span>
       </div>
    </div>

      <div class="control-group">
         <label for="project_brief" class="control-label">挂号页头部图片:</label>
          <div class="controls">
             <img class="thumb_img" id="headpic_src" src="<?php echo (($reslist['headpic'])?($reslist['headpic']):'tpl/User/default/common/images/medical_default.png'); ?>" style="max-height: 100px;">
              <input id="headpic"type="text"class="input-large" name="headpic" class="span4 px"  schoolSet data-rule-url="true" value="<?php echo (($reslist['headpic'])?($reslist['headpic']):'tpl/User/default/common/images/medical_default.png'); ?>" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"/>
            <span class="maroon">*</span>
            <span class="help-inline">
            <a href="###" onclick="upyunPicUpload('headpic',640,109,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('headpic')">预览</a>
            <span class="help-inline">建议尺寸：宽640像素，高109像素</span>
         </div>
        <script>
function setlatlng(longitude,latitude){
  art.dialog.data('longitude', longitude);
  art.dialog.data('latitude', latitude);
  art.dialog.open('<?php echo U('Map/setLatLng',array('token'=>$token,'id'=>$id));?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
     <div class="control-group">
                                <label for="address" class="control-label">医院详细地址:</label>
                                <div class="controls">
                                    <input type="text" name="address" id="address" class="span4"  value="<?php echo ($reslist['address']); ?>" schoolSet  placeholder="请输入接待预约用户的地址" data-validation-engine="validate[required,minSize[5]]" data-errormessage-value-missing="必填项" /><span class="maroon">*</span><span class="help-inline">如合肥市政务区南二环路3818号某某医院</span>
                                </div>
                             </div>
    <div class="control-group">
    <label for="suggestId" class="control-label">地图标识：</label>
         <div class="controls">
          <span class="maroon">注意：这个只是模糊定位，准确位置请地图上标注！</span><br />
                经度 <input type="text" id="longitude"  name="lng" size="14" class="span4" value="<?php echo ($reslist['lng']); ?>" />
                纬度 <input type="text"  name="lat" size="14" id="latitude" class="span4" value="<?php echo ($reslist['lat']); ?>" />
                <a href="###" onclick="setlatlng($('#longitude').val(),$('#latitude').val())">在地图中查看/设置</a>
         </div>
    </div>

<div class="control-group">
         <label for="estate_desc" class="control-label">医院电话：</label>
         <div class="controls">
             <input type="text" name="tel" id="tel" class="span4" value="<?php echo ($reslist['tel']); ?>"
             data-validation-engine="validate[required,custom[tel]]" data-errormessage-value-missing="必填项"   placeholder="请输入接收预约的电话号码"/><span class="maroon">*</span><span class="help-inline">如 0551-65371998</span>
         </div>
     </div>

     </div>
     <div class="control-group">
        <label for="traffic_desc" class="control-label">图文简介：</label>
        <div class="controls">
          <textarea class="px" id="info" name="info" style="width:560px;height:75px"  data-validation-engine="validate[required,minSize[5]]" data-errormessage-value-missing="必填项"  placeholder="显示在图文封面下方，文字请尽量的简洁"><?php echo ($reslist['info']); ?></textarea>
        </div>
    </div>
<div class="control-group">
         <label for="estate_desc" class="control-label">预约费用：</label>
         <div class="controls">
             <input type="text" name="price" id="price" class="span4" value="<?php echo ($reslist['price']); ?>"
             data-validation-engine="validate[custom[number],min[0]]"  placeholder="例如:12"/><span class="maroon">*</span><span class="help-inline">如果没有该项可以不填写,默认即可(单位:元)</span>
         </div>
     </div>
<div class="control-group">
      <label for="typename" class="control-label">预约信息设置：</label>
       <div class="controls">
           <input type="text" class="span4" name="typename" value="<?php echo (($reslist['typename'])?($reslist['typename']):'我的挂号订单'); ?>" id="typename" schoolSet />
    <span class="maroon">*</span><span class="help-inline">修改用户手机中“我的订单”栏目的名称，您可以将其修改成诸如“挂号订单”、“我的订单”等</span>
       </div>
</div>
<div class="control-group" style="display: none;">
 <label for="typename2" class="control-label">重命名订单说明：</label>
<div class="controls">
    <input type="text" class="span4" name="typename2" value="<?php echo (($reslist['typename2'])?($reslist['typename2']):'订单说明'); ?>" id="typename2"/>
     <span class="maroon">*</span><span class="help-inline">用户修改用户手机中“订单说明”栏目的名称，您可以将其修改成诸如“预约说明”、“试驾说明”等</span>
 </div>
</div>
<div class="control-group" style="display: none;">
    <label for="typename3" class="control-label">预约信息设置：</label>
    <div class="controls">
         <input type="text" class="span4" name="typename3" value="<?php echo (($reslist['typename3'])?($reslist['typename3']):'订单电话'); ?>" id="typename3"/>
         <span class="maroon">*</span><span class="help-inline">用户修改用户手机中“订单电话”栏目的名称，您可以将其修改成诸如“预约电话”、“试驾电话”等</span>
     </div>
</div>




    <script type="text/javascript">
    $(function () {
         $("input[type='radio']").click(function () {
            var $this = $(this), $val = $this.val(), $div = $this.parents(".control-group");
            if ($val == 1) {
                $div.next().show();
                $div.next().next().hide();
                $("#type1").show();
                $("#type2").hide();
                $("#type3").hide();
            } else {
                $div.next().next().show();
                $div.next().hide();
                if($val == 2){
                    $("#type2").show();
                    $("#type1").hide();
                    $("#type3").hide();
                }else{
                    $("#type3").show();
                    $("#type1").hide();
                    $("#type2").hide();
                }
            }
         })
            </script>

<script>
function dodelit(i) {
   document.getElementById("txt" + i).value = "";
   document.getElementById("value" + i).value = "";
   if (i != 1) {
       document.getElementById("trtxt" + i).style.display = "none";
       document.getElementById("add" + i).style.display = "";
   }
}
   function doaddit(i) {

    document.getElementById('trtxt' + i).style.display = "";
   document.getElementById('add' + i).style.display = "none";
}

function sdodelit(i) {

    document.getElementById("select" + i).value = "";
    document.getElementById("svalue" + i).value = "";
    if (i != 1) {
        document.getElementById("strtxt" + i).style.display = "none";
       document.getElementById("sadd" + i).style.display = "";
    }
}
function sdoaddit(i) {

     document.getElementById('strtxt' + i).style.display = "";
     document.getElementById('sadd' + i).style.display = "none";
}
  </script>

<div class="control-group" >
        <label for="tel" class="control-label">订单内容设置：</label>
        <div class="controls">
            <span class="help-inline">填写你要收集的内容！订单默认选项不可以修改删除！<font color="red">如果手动添加的项想删除,把[字段名称]\[初始内容]里的值清空提交即可.</font></span>
<table id="listTable" class="ListProduct table table-bordered table-hover dataTable">
    <thead>
        <tr>
            <th>字段类型</th>
             <th>字段名称</th>
             <th>初始内容</th>

            <th>操作</th>
        </tr>
    </thead>
<tbody>
    <tr>
        <td>单行文字：</td>
        <td>
            <input  type="button" disabled="disabled" value="患者姓名" readonly="readonly"></td>
        <td>
            <input   type="button" disabled="disabled"  value="请输入您的名字" readonly="readonly"></td>

        <td>
            <label class="checkbox">
                <input type="checkbox"     checked="checked" name="name_show" value="1">是否显示
             </label>
        </td>
     </tr>
    <tr>
        <td>单行文字：</td>
        <td>
             <input type="button" disabled="disabled"  value="联系电话" readonly="readonly"></td>
        <td>
            <input  type="button" disabled="disabled" value="请输入您的电话" readonly="readonly"></td>

        <td>
            <label class="checkbox">
                <input type="checkbox"  checked="checked"   name="tel_show" value="1">是否显示
            </label>
        </td>
    </tr>
    <tr>
        <td>日期选择：</td>
        <td>
            <input  type="button" disabled="disabled"  value="预约日期" ></td>
        <td>
            <input  type="button" disabled="disabled" value="请输入预约日期"></td>

        <td>
            <label class="checkbox">
                <input type="checkbox"   checked="checked" name="date_show" value="1">是否显示
            </label>
         </td>
    </tr>
     <tr style="display: none;">
        <td>时间选择：</td>
        <td>
             <input name=" " type="text" disabled="disabled" class="px wizard-ignore" value="预约时间" onchange="$('odid').value='请输入'+this.value;"></td>
        <td>
            <input name="add[order][]" type="text" disabled="disabled" id="odid" class="px wizard-ignore" value="请输入预约时间"></td>

        <td>
            <label class="checkbox">
                <input type="checkbox"  checked="checked" name="time_show" value="1">是否显示
             </label>
        </td>
    </tr>
    <tr>
    <td>单行文字：</td>
    <td>
        <input type="button" disabled="disabled"   value="患者性别"></td>
    <td>
        <!--input name="value1" class="px" id="value1" type="text" value="<?php echo ($reslist['value1']); ?>"-->
        <select name="value1" >
            <option value="1">男</option>
            <option value="2">女</option>
        </select>
    </td>

    <td>

    </td>
  </tr>
<tr    >
    <td>单行文字：</td>
    <td>
        <input type="button" disabled="disabled" value="患者年龄"></td>
    <td>
        <input disabled="disabled" type="button" value="请输入您的年龄"></td>

    <td>

    </td>
</tr>
<tr id="trtxt1" >
<td>单行文字：</td>
<td>
    <input type="text" class="px" name="txt3" id="txt1" value="<?php echo ($reslist['txt3']); ?>"></td>
<td>
    <input name="value3" class="px" id="value1" type="text" value="<?php echo ($reslist['value3']); ?>"></td>

<td>
<p><?php if($reslist['txt4'] == ''): ?><a class="btnGrayS vm" id="add2" href="javascript:doaddit(2)">添加</a><?php endif; ?>　<a href="javascript:dodelit(1)">删除</a><span class="tooltips"><img src="/tpl/Home/wqlcms/common/images/price_help.png" align="absmiddle"><span>                 <font color='red'>如果添加的项想删除,<br/>把[字段名称]\[初始内容]里的值清空<br/>提交即可</font>
                </span></span></p>
</td> </tr>
                                            <tr id="trtxt2" <?php if($reslist['txt4'] == ''): ?>style="display: none"<?php endif; ?> >
                                                <td>单行文字：</td>
                                                <td>
                                                    <input type="text" class="px" name="txt4" id="txt2" value="<?php echo ($reslist['txt4']); ?>"></td>
                                                <td>
                                                    <input name="value4" class="px" id="value2" type="text" value="<?php echo ($reslist['value4']); ?>"></td>
                                                <td>
                                                    <p><?php if($reslist['txt5'] == ''): ?><a class="btnGrayS vm" id="add3" href="javascript:doaddit(3)">添加</a><?php endif; ?>　<a href="javascript:dodelit(2)">删除</a> <span class="tooltips"><img src="/tpl/Home/wqlcms/common/images/price_help.png" align="absmiddle"><span>                 <font color='red'>如果添加的项想删除,<br/>把[字段名称]\[初始内容]里的值清空<br/>提交即可</font>
                </span></span></p>
                                                </td>
                                            </tr>
                                            <tr id="trtxt3"  <?php if($reslist['txt5'] == ''): ?>style="display: none"<?php endif; ?>>
                                                <td>单行文字：</td>
                                                <td>
                                                    <input type="text" class="px" name="txt5" id="txt3" value="<?php echo ($reslist['txt5']); ?>"></td>
                                                <td>
                                                    <input name="value5" class="px" id="value3" type="text" value="<?php echo ($reslist['value5']); ?>"></td>

                                                <td>
                                                    <p><a href="javascript:dodelit(3)">删除</a><span class="tooltips"><img src="/tpl/Home/wqlcms/common/images/price_help.png" align="absmiddle"><span>                 <font color='red'>如果添加的项想删除,<br/>把[字段名称]\[初始内容]里的值清空<br/>提交即可</font>
                </span></span></p>
                                                </td>
                                            </tr>
<tr>
     <td width="120">科室选择：</td>
     <td>
        <input type="text" class="px" name="select1" value="<?php echo (($reslist['select1'])?($reslist['select1']):'预约科室'); ?>" ></td>
     <td>
         <input name="svalue1" class="px"  type="text" value="<?php echo ($reslist['svalue1']); ?>" placeholder="选项之间以英文“|”分割"></td>

    <td>

    </td>
</tr>
<tr >
    <td>专家选择：</td>
    <td>
         <input type="text" class="px" name="select2"  value="<?php echo (($reslist['select2'])?($reslist['select2']):'预约专家'); ?>"></td>
    <td>
        <input name="svalue2" class="px"  type="text" value="<?php echo ($reslist['svalue2']); ?>" placeholder="选项之间以英文“|”分割"></td>

    <td>

    </td>
</tr>

<tr  >
    <td>病种选择：</td>
    <td>
        <input type="text" class="px" name="select3" value="<?php echo (($reslist['select3'])?($reslist['select3']):'预约病种'); ?>"></td>
    <td>
         <input name="svalue3" class="px" type="text" value="<?php echo ($reslist['svalue3']); ?>" placeholder="选项之间以英文“|”分割"></td>

     <td>
         <p></p>
    </td>
 </tr>
                                            <tr id="strtxt1"  >
                                                <td>下拉框1：</td>
                                                <td>
                                                    <input type="text" class="px" name="select4" id="select1" value="<?php echo ($reslist['select4']); ?>"></td>
                                                <td>
                                                    <input name="svalue4" class="px" id="svalue" type="text" value="<?php echo ($reslist['svalue4']); ?>" placeholder="选项之间以英文“|”分割"></td>

                                                <td>
                                                    <p><?php if($reslist['select5'] == ''): ?><a class="btnGrayS vm" id="sadd2" href="javascript:sdoaddit(2)">添加</a><?php endif; ?>　<a href="javascript:sdodelit(1)">删除</a><span class="tooltips"><img src="/tpl/Home/wqlcms/common/images/price_help.png" align="absmiddle"><span>                 <font color='red'>如果添加的项想删除,<br/>把[字段名称]\[初始内容]里的值清空<br/>提交即可</font>
                </span></span></p>
                                                </td>
                                            </tr>
                                            <tr id="strtxt2" <?php if($reslist['select5'] == ''): ?>style="display: none"<?php endif; ?>>
                                                <td>下拉框2：</td>
                                                <td>
                                                    <input type="text" name="select5" class="px" id="select2" value="<?php echo ($reslist['select5']); ?>"></td>
                                                <td>
                                                    <input name="svalue5" id="svalue2" class="px" type="text" value="<?php echo ($reslist['svalue5']); ?>" placeholder="选项之间以英文“|”分割"></td>

                                                <td>
                                                    <p><a href="javascript:sdodelit(2)">删除</a><span class="tooltips"><img src="/tpl/Home/wqlcms/common/images/price_help.png" align="absmiddle"><span>                 <font color='red'>如果添加的项想删除,<br/>把[字段名称]\[初始内容]里的值清空<br/>提交即可</font>
                </span></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>多行文字：</td>
                                                <td>
                                                    <input name="datename" class="px" type="text" value="<?php echo (($reslist['datename'])?($reslist['datename']):'留言信息'); ?>"></td>
                                                <td>
                                                    <input name="add[order][]" class="px" type="text" disabled="disabled" value="请输入备注信息" readonly="readonly"></td>

                                                <td>订单默认项</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                                </div>
                                            </div>
                                <div class="control-group" style="display:none">
                                    <label for="" class="control-label">商家通知设置：</label>
                                    <input type="hidden" name="take" value="1" />
                                    <div class="controls">
                                        <div class="row-fluid margin-bm10">
                                            订单通知邮箱：<input type="text" class="input-large" data-rule-email="true" name="email" value="<?php echo ($reslist['email']); ?>"><span class="help-inline"><label class="checkbox inline">
                                                <input type="checkbox" name="open_email" value="1" <?php if($reslist['open_email'] == 1): ?>checked="checked"<?php endif; ?>>
                                                开启
                                            </label>
                                            </span>
                                        </div><p style="margin-left:83px;">当有新订单时，发送邮件到此邮箱</p>
                                    </div>
                                     <div class="controls">
                                        <div class="row-fluid">
                                            订单短信通知：<input type="text" class="input-large" data-rule-mobile="true" name="sms" value="<?php echo ($reslist['sms']); ?>"><span class="help-inline" ><label class="checkbox inline">
                                                <input type="checkbox" name="open_sms" value="1" <?php if($reslist['open_sms'] == 1): ?>checked="checked"<?php endif; ?>>
                                                开启
                                            </label>
                                            </span>
                                        </div><p style="margin-left:83px;">当有新订单时，发送短信到此手机</p>
                                    </div>
                                </div>
                                <div class="form-actions">
            <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>　<button type="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">取消</button>
        </div>
                        </div>

</form>
  </div>
 <script>
 $("#check_form").validationEngine();
 </script>

        </div>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>