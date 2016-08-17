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
<link href="<?php echo RES;?>/css/activity.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/tpl/User/default/common/js/date/WdatePicker.js"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<div class="content">
<div class="cLineB">
<h4 class="left">微调研</h4>
<div class="clr"></div>
</div>
<!--tab start-->
<div class="tab">
<ul>
<li class="tabli" id="tab0"><a href="<?php echo U('Research/index', array('token' => $token));?>">调研列表</a></li>
<li class="current tabli" id="tab0"><a href="<?php echo U('Research/saveInfo', array('token' => $token));?>">调研操作</a></li>
</ul>
</div>
<!--tab end-->
<div class="indexout">
<div class="new_pub">
            <div class="activity">
            <form id="survey_form" method="post">  
            <ul class="activity_list">
                <li>
                    调研标题：
                    <input type="text" class="txt" id="questionnaire_til" name="title" value="您可以在这里创建您的调研题目，同时对调研活动加以说明">
                </li>
                <li>
                    　关键词：
                    <input type="text" class="txt" id="keyword" name="keyword" value="">
                </li>
                <li>
                    　 LOGO：
                    <input type="text" class="txt" id="logourl" name="logourl" value="">  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('logourl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('logourl')">预览</a>
                </li>
                <li id="explanation" style="display: list-item;">
                    调研说明：
                    <p>
                        <textarea class="txt" id="description" name="description"></textarea>
                    </p>
                </li>
                <li>
                   开始时间：
                    <span class="up_time" style="width:150px;border:none" >
                        <u id="t">
                        <input type="text" value="" id="starttime"   name="starttime" class="txt" onClick="WdatePicker({dateFmt:'yyyy-MM-dd  HH:mm:ss'})">
                        </u>                            
                    </span>
                </li>
                <li>
                    截至时间：
                    <span class="up_time" style="width:150px;border:none">
                        <u id="t">
                        <input type="text" value="" id="deadline"  name="deadline" class="txt" onClick="WdatePicker({dateFmt:'yyyy-MM-dd  HH:mm:ss'})">
                        </u>                            
                    </span>
                </li>
            </ul>
            <div class="topic_box">
                    <div class="question_box" id="question_info_1">
                    <p class="question_info">
                        <span>问题<u>1</u>：</span>
                        <input type="text" class="txt" name="question[1]" value="请填写问题的题目">
                        <input type="checkbox" class="checkd" name="ismulti[1]" id="ismulti_1" value="1">
                        <input type="hidden" class="hide_qid" name="qid[1]" id="qid[1]">
                        <label for="ismulti_1"> 允许多选</label>
                    </p>
                    <span class="insert_pic hidden">图片建议尺寸：150*100</span>
                    <ul id="1" class="optionul">
                        <li>
                            <span>A</span><u>选项：</u>
                            <input type="hidden" class="hide_txt" name="oid[1][0]">
                            <input type="text" class="txt" name="option[1][0]">
                            <input type="hidden" class="image_class" name="image[1][0]" id="userfile_0"  >
                            <a class="list_del" href="javascript:;" title="删除这个选项">×</a>
                            <!--没传图片-->
                            <span class="no_pic hidden">
                                <a href="javascript:;" class="up" onclick="upyunPicUpload('userfile_0',700,700,'<?php echo ($token); ?>')">
                                    <i></i>
                                    插入图片
                                    <input type="button" name="userfile" title="图片建议尺寸：150*100" alt="图片建议尺寸：150*100">
                                </a>
                                <div class="uppic_prompt">
                                    图片建议尺寸：<span>150*100</span>
                                    <div class="caret_Up"><em>◆</em><span>◆</span></div>
                                </div>
                            </span>
                            <!--传了图片-->
                            <span class="pic hidden" style="width:auto">
                                <a href="javascript:;">../fjdskjf.jpg</a>
                                <img src="" width="150" height="100">
                                <a href="javascript:;" class="del">×</a>
                            </span>
                        </li>
                        <li>
                            <span>B</span><u>选项：</u>
                            <input type="hidden" class="hide_txt" name="oid[1][1]">
                            <input type="text" class="txt" name="option[1][1]">
                            <input type="hidden" class="image_class" name="image[1][1]">
                             <a class="list_del" href="javascript:;" title="删除这个选项">×</a>
                            <!--没传图片-->
                            <span class="no_pic hidden">
                                <a href="javascript:;" class="up">
                                    <i></i>
                                    插入图片
                                    <input type="file" name="userfile" title="图片建议尺寸：150*100" alt="图片建议尺寸：150*100" id="userfile_1">
                                </a>
                                <div class="uppic_prompt">
                                    图片建议尺寸：<span>150*100</span>
                                    <div class="caret_Up"><em>◆</em><span>◆</span></div>
                                </div>
                            </span>
                            <!--传了图片-->
                            <span class="pic hidden" style="width:auto">
                                <a href="javascript:;">../fjdskjf.jpg</a>
                                <img src="" width="150" height="100">
                                <a href="javascript:;" class="del">×</a>
                            </span>
                        </li>
                        <li>
                            <span>C</span><u>选项：</u>
                            <input type="hidden" class="hide_txt" name="oid[1][2]">
                            <input type="text" class="txt" name="option[1][2]">
                            <input type="hidden" class="image_class" name="image[1][2]">
                             <a class="list_del" href="javascript:;" title="删除这个选项">×</a>
                            <!--没传图片-->
                            <span class="no_pic hidden">
                                <a href="javascript:;" class="up">
                                    <i></i>
                                    插入图片
                                    <input type="file" name="userfile" title="图片建议尺寸：150*100" alt="图片建议尺寸：150*100" id="userfile_2">
                                </a>
                                <div class="uppic_prompt">
                                    图片建议尺寸：<span>150*100</span>
                                    <div class="caret_Up"><em>◆</em><span>◆</span></div>
                                </div>
                            </span>
                            <span class="pic hidden" style="width:auto">
                                <a href="javascript:;">../fjdskjf.jpg</a>
                                <img src="" width="150" height="100">
                                <a href="javascript:;" class="del">×</a>
                            </span>
                        </li>
                     </ul>
                <p class="bot_add"><a href="javascript:;" class="btnGrayS btn btn-primary btn_submit  J_ajax_submit_btn bigbtn">再添加一个选项</a></p>
                </div>
                <p class="add_questio"><a href="javascript:;" title="添加" class="btn btn-primary btn_submit  J_ajax_submit_btn">再添加一题</a></p>
            </div>
           
            <ul>            
		<ul class="pub_list">
		<li class="bot">
      	<input class="btn btn-primary btn_submit  J_ajax_submit_btn" type="button" id="submit_survey" value="保存"> &nbsp; <a href="<?php echo U('Research/index',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">取消</a>
      	</li>
		</ul>
</ul>     
</form>
</div>
</div>
</div>

</div>
<script type="text/javascript">
$(document).ready(function(e) {
	dateformat('starttime', 0);
	dateformat('deadline', 7);
	number();
    $("#submit_survey").click(function(){
         var cid = $('#contentid').val();
         var title = $('#questionnaire_til').val();
         if (title == '您可以在这里创建您的调研题目，同时对调研活动加以说明') {
        	 title = '';
         }
         if (title == '') {
        	 alert('请填写调研标题');
        	 return false;
         }
		 save_survey();
		 return false;
    });
    
    $(".del").live("click",function(){
    	delimage($(this));   	
    });
    
    $(".optionul li .pic").live('mouseenter',function(){
    	$(this).children("img").show();
    });
    
    $(".optionul li .pic").live('mouseleave',function(){
    	$(this).children("img").hide();
    });
    
});

function delimage(obj){
	obj.parent().addClass("hidden");
	obj.parent().prev("span").removeClass("hidden");
	obj.parent().parent().find("input[class='image_class']").val("");
}

function save_survey()
{
   $.post("<?php echo U('Research/saveInfo',array('token' => $token));?>", $('#survey_form').serialize(), function(response){
       if (response.error_code) {
       	alert(response.msg);	
           return false;
       } else {
       	location.href="<?php echo U('Research/index',array('token' => $token));?>";
		return false; 
       } 
   }, 'json'); 
}

function clear_form()
{
	$("input").val(''); 
	$("textarea").val(''); 
	$("select").val('');
	$("#infotype").val(3);
    $("#tag_image_show").hide();
    $("#explanation").hide();
}

/*添加选项*/
function number(){
	var i = 0;
    $(".optionul li").each(function(){
        $(this).find("input[name='userfile']").attr("id","userfile_" + i).live("change",function(){
        	uploadimage($(this).attr("id"));
        });
        i ++;
    })  
}
$("#userfile").change(function(){ 
	upload_image();            
});
function upload_cancel()
{
 $('#tag_image_show').hide();
     $("#cover_image").val('');
     $("#file_name").val('');
     $("#show_name").html('');
     $("#tag_image_src").attr('src', '').hide();
     $("#file_partpath").val('');
}

$(".orange_tips a.close").click(function(){
    $(".orange_tips").remove();
})

/*添加选项*/
var a = new Array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
function letters(){
    $(".question_box ul li").each(function(){
        $(this).find("span:first").html(a[$(this).index()]);  
        $(this).find(".txt").attr('name', 'option['+$(this).parent().attr('id')+']['+$(this).index()+']');
        $(this).find(".hide_txt").attr('name', 'oid['+$(this).parent().attr('id')+']['+$(this).index()+']');
        $(this).find(".image_class").attr('name', 'image['+$(this).parent().attr('id')+']['+$(this).index()+']');
    }); 
    $(".topic_box .question_box").each(function(){
        $(this).find(".question_info span u").html($(this).index() + 1);
    }); 
    $('#question_info_1 .box_del').remove();
    $('.question_box ul li .txt').focus(function(){
        $(this).next().show();
    });

}

letters();

$(".question_box ul li .list_del").live('click',function(){												 
	$(this).parents("li").remove();
	letters();
});  

    
$(".question_box .bot_add a.btnGrayS").live('click',function(){
    var t = '<li><span>A</span><u>选项：</u><input type="hidden" class="hide_txt"> <input type="text" class="txt"/><input type="hidden" class="image_class" /> <a class="list_del" href="javascript:;" title="删除这个选项">×</a><span class="no_pic hidden"><a href="javascript:;" class="up"><i></i>插入图片<input type="file" name="userfile" title="图片建议尺寸：150*100" alt="图片建议尺寸：150*100"></a><div class="uppic_prompt">图片建议尺寸：<span>150*100</span><div class="caret_Up"><em>◆</em><span>◆</span></div></div></span><span class="pic hidden" style="width:auto"><a href="javascript:;">../fjdskjf.jpg</a><img src="" width="150" height="100"><a href="javascript:;" class="del">×</a></span></li>';
    if($(this).parents(".question_box").find("ul li").size() <= 25){
        $(this).parents(".question_box").find("ul").append(t);
        letters();
        number();
    }else{
        alert("您添加的数量够您用一辈子了！");
    }
});
/*添加选项结束*/

/*添加题目和删除题目*/
$(".add_questio a").click(function(){
    var t = '<div class="question_box"><p class="question_info"><span>问题<u>1</u>：</span><input type="text" class="txt" value="请填写问题的题目" />'
           +'<input type="checkbox" class="checkd" value="1" /><input type="hidden" id="qid[1]" ><label> 允许多选</label>&nbsp;&nbsp;<a href="javascript:;" class="box_del">删除</a></p>'
           +'<span class="insert_pic hidden">图片建议尺寸：150*100</span><ul id="1" class="optionul"><li><span>A</span><u>选项：</u><input type="hidden" class="hide_txt"> <input type="text" class="txt" /><input type="hidden" class="image_class" /> <a class="list_del" href="javascript:;" title="删除这个选项">×</a><span class="no_pic hidden"><a href="javascript:;" class="up"><i></i>插入图片<input type="file" name="userfile" title="图片建议尺寸：150*100" alt="图片建议尺寸：150*100"></a><div class="uppic_prompt">图片建议尺寸：<span>150*100</span><div class="caret_Up"><em>◆</em><span>◆</span></div></div></span><span class="pic hidden" style="width:auto"><a href="javascript:;">../fjdskjf.jpg</a><img src="" width="150" height="100"><a href="javascript:;" class="del">×</a></span></li>'
           +'<li><span>B</span><u>选项：</u><input type="hidden" class="hide_txt" > <input type="text" class="txt" /><input type="hidden" class="image_class" /> <a class="list_del" href="javascript:;" title="删除这个选项">×</a><span class="no_pic hidden"><a href="javascript:;" class="up"><i></i>插入图片<input type="file" name="userfile" title="图片建议尺寸：150*100" alt="图片建议尺寸：150*100"></a><div class="uppic_prompt">图片建议尺寸：<span>150*100</span><div class="caret_Up"><em>◆</em><span>◆</span></div></div></span><span class="pic hidden" style="width:auto"><a href="javascript:;">../fjdskjf.jpg</a><img src="" width="150" height="100"><a href="javascript:;" class="del">×</a></span></li>'
           +'<li><span>C</span><u>选项：</u><input type="hidden" class="hide_txt" > <input type="text" class="txt" /><input type="hidden" class="image_class" /> <a class="list_del" href="javascript:;" title="删除这个选项">×</a><span class="no_pic hidden"><a href="javascript:;" class="up"><i></i>插入图片<input type="file" name="userfile" title="图片建议尺寸：150*100" alt="图片建议尺寸：150*100"></a><div class="uppic_prompt">图片建议尺寸：<span>150*100</span><div class="caret_Up"><em>◆</em><span>◆</span></div></div></span><span class="pic hidden" style="width:auto"><a href="javascript:;">../fjdskjf.jpg</a><img src="" width="150" height="100"><a href="javascript:;" class="del">×</a></span></li>'
           +'</ul><p class="bot_add"><a href="javascript:;" class="btnGrayS btn btn-primary btn_submit  J_ajax_submit_btn bigbtn">再添加一个选项</a></p></div>';
    $(".add_questio").before(t);
    $(".question_box:last").find("li:eq(2)").nextAll().remove();
    $(".question_box").each(function() {
        //$(this).find("u").html($(this).index());
        $(this).find(".question_info .txt").attr('name', 'question['+$(this).index()+']');
        $(this).find(".question_info .checkd").attr('name', 'ismulti['+$(this).index()+']');
        $(this).find(".question_info .checkd").attr('id', 'ismulti_'+$(this).index());
        $(this).find(".question_info label").attr('for', 'ismulti_'+$(this).index());
        $(this).find(".question_info .hide_qid").attr('name', 'qid['+$(this).index()+']');
        $(this).find("ul").attr('id', $(this).index());
    }); 
    letters();
    number();
})
$(".box_del").live('click',function(){
    $(this).parents(".question_box").remove();
    $(".question_box").each(function() {
        //$(this).find("u").html($(this).index());
    }); 
    letters();
    number();
})
/*添加题目和删除题目结束*/

/*input默认文字显示、消失*/
$("#questionnaire_til").focusin(function(){
    if($(this).val() == "您可以在这里创建您的调研题目，同时对调研活动加以说明"){
        $(this).val("");
		$(this).css("color","#666");
    }
}).focusout(function(){
    if($(this).val() == ""){
        $(this).val("您可以在这里创建您的调研题目，同时对调研活动加以说明");
		$(this).css("color","#999");
    }
})
$(".question_box p .txt").live('focusin',function(){
    if($(this).val() == "请填写问题的题目"){
        $(this).val("");
		$(this).css("color","#666");
    }
}).live('focusout',function(){
    if($(this).val() == ""){
        $(this).val("请填写问题的题目");
		$(this).css("color","#999");
    }
});


function dateformat(id, day){
 var date = new Date();
 date.setDate(date.getDate()+day);
 var deadline = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate()+' '+date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();
 $("#" + id).val(deadline);
}
</script>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>