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
KindEditor.options.filterMode = false;
        KindEditor.ready(function(K) {
                window.editor = K.create('#content');
        });
 KindEditor.ready(function(K) {
                window.editor = K.create('#intro');
        });
		 KindEditor.ready(function(K) {
                window.editor = K.create('#content1');
        });
		KindEditor.ready(function(K) {
                window.editor = K.create('#content2');
        });
</script>
<script>



	KindEditor.ready(function(K){



		var editor = K.editor({



			allowFileManager:true



		});



		K('#upload_pic').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#pic').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#pic').val(url);



						}else{



							K('#pic').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_opening_animation').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#opening_animation').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#opening_animation').val(url);



						}else{



							K('#opening_animation').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_small_pic').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#small_pic').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#small_pic').val(url);



						}else{



							K('#small_pic').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_1').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_1').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_1').val(url);



						}else{



							K('#site_map_1').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_2').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_2').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_2').val(url);



						}else{



							K('#site_map_2').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_3').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_3').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_3').val(url);



						}else{



							K('#site_map_3').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_4').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_4').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_4').val(url);



						}else{



							K('#site_map_4').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_5').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_5').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_5').val(url);



						}else{



							K('#site_map_5').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



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



items : [
						'source','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|', 'emoticons', 'image', 'link', 'music', 'video']



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



<script src="<?php echo RES;?>/js/card/jquery.js"  type="text/javascript"></script>



<div class="content"  >



<div class="cLineB">



<h4 class="left">订单设置 (<?php echo ($page); ?>) </h4>



<div class="searchbar right">



<form method="post" action="">



</form>



</div>



<div class="clr"></div>



</div>







<div class="msgWrap">



	<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">



	<thead>



	<tr>



	<th width="210">字段类型</th>



	<th width="240">字段名称</th>



	<th width="240">初始内容</th>



	<th width="150" class="norightborder">操作</th>



	</tr>



	</thead>



	<tbody>



	<form method="post" action="" name="yuyue_info" enctype="multipart/form-data" id="info">



	



	<tr>



		<td>单行文字：</td>



		<td><input type="text"  class="px" disabled="disabled" value="联系人"  /></td>



		<td><input type="text" class="px"  disabled="disabled" value="请输入您的名字" /></td>



		<td><input type="checkbox" value="<?php echo ($data['person']); ?>" name="person" <?php if($data["person"]==1):?>checked="true"<?php endif;?> />是否显示</td>



	</tr>



	<tr>



		<td>单行文字：</td>



		<td><input type="text"  class="px" disabled="disabled" value="联系电话"  /></td>



		<td><input type="text" class="px"  disabled="disabled" value="请输入您的联系电话" /></td>



		<td><input type="checkbox" value="<?php echo ($data['phone']); ?>" name="phone" <?php if($data["phone"]==1):?>checked="true"<?php endif;?> />是否显示</td>



	</tr>



	<tr>



		<td>日期选择：</td>



		<td><input type="text"  class="px" disabled="disabled" value="预约日期"  /></td>



		<td><input type="text" class="px"  disabled="disabled" value="请输入您的预约日期" /></td>



		<td><input type="checkbox" value="<?php echo ($data['date']); ?>" name="date" <?php if($data["date"]==1):?>checked="true"<?php endif;?> />是否显示</td>



	</tr>



	<tr>



		<td>时间选择：</td>



		<td><input type="text"  class="px" disabled="disabled" value="预约时间"  /></td>



		<td><input type="text" class="px"  disabled="disabled" value="请输入您的预约时间" /></td>



		<td><input type="checkbox" value="<?php echo ($data['time']); ?>" name="time" <?php if($data["time"]==1):?>checked="true"<?php endif;?> />是否显示</td>



	</tr>



	<tr id="addtxt1">



		<td>输入需要增加的内容：</td>



		<td><input type="hidden" name="id1" value="<?php echo ($arr[0]['id']); ?>" /><input type="text" class="px" name="name1" id="txt1" placeholder="请输入您要添加的内容名称" value="<?php echo ($arr[0]['name']); ?>" /></td>



		<td><input type="text" class="px" name="content1" id="value1" placeholder="请输入您所添加内容的提示信息" value="<?php echo ($arr[0]['value']); ?>"  /></td>



		<td><a id="add2" href="javascript:doaddit(2)" style="">添加</a>&nbsp;&nbsp;<a href="javascript:dodelit(1)">删除</a></td>



	</tr>



	<tr id="addtxt2"  <?php if($arr[1]['id'] == ''): ?>style="display:none";<?php endif; ?> >



		<td>输入需要增加的内容：</td>



		<td><input type="hidden" name="id2" value="<?php echo ($arr[1]['id']); ?>" /><input type="text" class="px" name="name2" id="txt2" placeholder="请输入您要添加的内容名称" value="<?php echo ($arr[1]['name']); ?>" /></td>



		<td><input type="text" class="px" name="content2" id="value2" placeholder="请输入您所添加内容的提示信息" value="<?php echo ($arr[1]['value']); ?>"  /></td>



		<td><a id="add3" href="javascript:doaddit(3)" style="">添加</a>&nbsp;&nbsp;<a href="javascript:dodelit(2)">删除</a></td>



	</tr>



	<tr id="addtxt3"  <?php if($arr[2]['id'] == ''): ?>style="display:none";<?php endif; ?> >



		<td>输入需要增加的内容：</td>



		<td><input type="hidden" name="id3" value="<?php echo ($arr[2]['id']); ?>" /><input type="text" class="px" name="name3" id="txt3" placeholder="请输入您要添加的内容名称" value="<?php echo ($arr[2]['name']); ?>" /></td>



		<td><input type="text" class="px" name="content3" id="value3" placeholder="请输入您所添加内容的提示信息" value="<?php echo ($arr[2]['value']); ?>"  /></td>



		<td><a id="add4" href="javascript:doaddit(4)" style="">添加</a>&nbsp;&nbsp;<a href="javascript:dodelit(3)">删除</a></td>



	</tr>



	<tr id="addtxt4"  <?php if($arr[3]['id'] == ''): ?>style="display:none";<?php endif; ?> >



		<td>输入需要增加的内容：</td>



		<td><input type="hidden" name="id4" value="<?php echo ($arr[3]['id']); ?>" /><input type="text" class="px" name="name4" id="txt4" placeholder="请输入您要添加的内容名称" value="<?php echo ($arr[3]['name']); ?>" /></td>



		<td><input type="text" class="px" name="content4" id="value4" placeholder="请输入您所添加内容的提示信息" value="<?php echo ($arr[3]['value']); ?>"  /></td>



		<td><a id="add5" href="javascript:doaddit(5)" >添加</a>&nbsp;&nbsp;<a href="javascript:dodelit(4)">删除</a></td>



	</tr>



	<tr id="addtxt5"  <?php if($arr[4]['id'] == ''): ?>style="display:none";<?php endif; ?> >



		<td>输入需要增加的内容：</td>



		<td><input type="hidden" name="id5" value="<?php echo ($arr[4]['id']); ?>" /><input type="text" class="px" name="name5" id="txt5" placeholder="请输入您要添加的内容名称" value="<?php echo ($arr[4]['name']); ?>" /></td>



		<td><input type="text" class="px" name="content5" id="value5" placeholder="请输入您所添加内容的提示信息" value="<?php echo ($arr[4]['value']); ?>"  /></td>



		<td><a id="add6" href="javascript:doaddit(6)" style="" >添加</a>&nbsp;&nbsp;<a href="javascript:dodelit(5)">删除</a></td>



	</tr>



	<tr id="strtxt1">



		<td>添加多选设置：</td>



		<td><input type="hidden" name="id6" value="<?php echo ($list[0]['id']); ?>" />



		<input type="text" class="px" name="name6" placeholder="请输入您要添加的内容名称" value="<?php echo ($list[0]['name']); ?>" id="select1" /></td>



		<td><input type="text" class="px" name="content6"  id="svalue1" placeholder="每个选项之间以'|'分割" value="<?php echo ($list[0]['value']); ?>" /></td>



		<td><a id="sadd2" href="javascript:sdoaddit(2)" style="">添加</a>&nbsp;&nbsp;<a href="javascript:sdodelit(1)">删除</a></td>



	</tr>



	<tr id="strtxt2" <?php if($list[1]['name'] == ''): ?>style="display:none";<?php endif; ?> >



		<td>添加多选设置1：</td>



		<td><input type="hidden" name="id7" value="<?php echo ($list[1]['id']); ?>" />



		<input type="text" class="px" name="name7" placeholder="请输入您要添加的内容名称" value="<?php echo ($list[1]['name']); ?>" id="select2" /></td>



		<td><input type="text" class="px" name="content7"  id="svalue2" placeholder="每个选项之间以'|'分割" value="<?php echo ($list[1]['value']); ?>" /></td>



		<td><a id="sadd3" href="javascript:sdoaddit(3)" style="">添加</a>&nbsp;&nbsp;<a href="javascript:sdodelit(2)">删除</a></td>



	</tr>



	<tr id="strtxt3" <?php if($list[2]['name'] == ''): ?>style="display:none";<?php endif; ?> >



		<td>添加多选设置2：</td>



		<td><input type="hidden" name="id8" value="<?php echo ($list[2]['id']); ?>" />



		<input type="text" class="px" name="name8" placeholder="请输入您要添加的内容名称" placeholder="请输入您要添加的内容名称" value="<?php echo ($list[2]['name']); ?>" id="select3" /></td>



		<td><input type="text" class="px" name="content8"  id="svalue3" placeholder="每个选项之间以'|'分割" value="<?php echo ($list[2]['value']); ?>" /></td>



		<td><a id="sadd4" href="javascript:sdoaddit(4)" style="">添加</a>&nbsp;&nbsp;<a href="javascript:sdodelit(3)">删除</a></td>



	</tr>



	<tr id="strtxt4" <?php if($list[3]['name'] == ''): ?>style="display:none";<?php endif; ?> >



		<td>添加多选设置3：</td>



		<td><input type="hidden" name="id9" value="<?php echo ($list[3]['id']); ?>" />



		<input type="text" class="px" name="name9" placeholder="请输入您要添加的内容名称" value="<?php echo ($list[3]['name']); ?>" id="select4" /></td>



		<td><input type="text" class="px" name="content9"  id="svalue4" placeholder="每个选项之间以'|'分割" value="<?php echo ($list[3]['value']); ?>" /></td>



		<td><a id="sadd5" href="javascript:sdoaddit(5)" style="">添加</a>&nbsp;&nbsp;<a href="javascript:sdodelit(4)">删除</a></td>



	</tr>



	<tr id="strtxt5" <?php if($list[4]['name'] == ''): ?>style="display:none";<?php endif; ?> >



		<td>添加多选设置4：</td>



		<td><input type="hidden" name="id10" value="<?php echo ($list[4]['id']); ?>" />



		<input type="text" class="px" name="name10" placeholder="请输入您要添加的内容名称" value="<?php echo ($list[4]['name']); ?>" id="select5" /></td>



		<td><input type="text" class="px" name="content10"  id="svalue5" placeholder="每个选项之间以'|'分割" value="<?php echo ($list[4]['value']); ?>" /></td>



		<td><a id="sadd6" href="javascript:sdoaddit(6)" style="">添加</a>&nbsp;&nbsp;<a href="javascript:sdodelit(5)">删除</a></td>



	</tr>



	<tr id="strtxt6" <?php if($list[5]['name'] == ''): ?>style="display:none";<?php endif; ?> >



		<td>添加多选设置5：</td>



		<td><input type="hidden" name="id11" value="<?php echo ($list[5]['id']); ?>" />



		<input type="text" class="px" name="name11" placeholder="请输入您要添加的内容名称" value="<?php echo ($list[5]['name']); ?>" id="select6" /></td>



		<td><input type="text" class="px" name="content11"  id="svalue6" placeholder="每个选项之间以'|'分割" value="<?php echo ($list[5]['value']); ?>" /></td>



		<td><a id="sadd7" href="javascript:sdoaddit(7)" style="display:none;">添加</a>&nbsp;&nbsp;<a href="javascript:sdodelit(6)">删除</a></td>



	</tr>



	<tr>



		<td>多行文字：</td>



		<td><input type="hidden" name="id" value="<?php echo ($line[0]['id']); ?>" />



		<input type="text" class="px" name="textname" placeholder="备注" value="<?php echo ($line[0]['name']); ?>" id="dateline" /></td>



		<td><input type="text" class="px" disabled="disabled" readonly name="text" value="请留言!" id="dateline" /></td>



		<td>订单默认项</td>



	</tr>



	<input type="hidden" name="token" id="token" value="<?php echo ($data["token"]); ?>" />



	<tr>



		<th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>



        <th><button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn" onClick="yuYueInfo()">保存</button> &nbsp; <a href="<?php echo U($type.'/index',array('id'=>$id,'token'=>$token));?>"class="btn">取消</a></th>



		



	</tr> 



	



	</form>



	</tbody>



	</table>











</div>



<div class="cLine">



<div class="pageNavigator right">



<div class="pages"><?php echo ($page); ?></div>



</div>



<div class="clr"></div>



</div>



</div>



<script>



function dodelit(i) {



		



         document.getElementById("txt" + i).value = "";



         document.getElementById("value" + i).value = "";



         if (i != 1) {



			



               document.getElementById("addtxt" + i).style.display = "none";



               document.getElementById("add" + i).style.display = "";



            }



}



function doaddit(i){ 



        document.getElementById('addtxt' + i).style.display = "";



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











function yuYueInfo()



{



	//获取接受返回信息层



	var msg = document.getElementById("msg");







	//获取表单对象和用户信息值



	var f = document.yuyue_info;



	var txt = f.txt1.value;



	var value   = f.value1.value;







	//接收表单的URL地址



	var url = window.location.href;



	//alert(url);



	//需要POST的值，把每个变量都通过&来联接



	var postStr   = "user_name="+ txt +"&user_age="+ value1;



	//alert(postStr);



	//实例化Ajax



	//var ajax = InitAjax();











	var ajax = false;



	//开始初始化XMLHttpRequest对象



	if(window.XMLHttpRequest) 



	{ 	//Mozilla 浏览器



		ajax = new XMLHttpRequest();



        if (ajax.overrideMimeType) 



		{	//设置MiME类别



            ajax.overrideMimeType("text/xml");



        }



	}



	else if (window.ActiveXObject) 



	{ 	// IE浏览器



		try 



		{



			ajax = new ActiveXObject("Msxml2.XMLHTTP");



    	} 



		catch (e) 



		{



        	try 



			{



            	ajax = new ActiveXObject("Microsoft.XMLHTTP");



            } 



			catch (e) {}



         }



	}



    if (!ajax) 



	{ 	// 异常，创建对象实例失败



		window.alert("不能创建XMLHttpRequest对象实例.");



		return false;



	}







	//通过Post方式打开连接



	ajax.open("POST", url, true);







	//定义传输的文件HTTP头信息



	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");







	//发送POST数据



	ajax.send(postStr);



	



	//获取执行状态



	



	ajax.onreadystatechange = function() 



	{ 



	//history.go(0);



   		//如果执行状态成功，那么就把返回信息写到指定的层里



   		if (ajax.readyState == 4 && ajax.status == 200) 



		{ 



    		



			msg.innerHTML = ajax.responseText; 



   		} 



	}



	



	



	



}















</script>



<script>



$("input[type='checkbox']").click(function(){



	var i = $(this).val();



	if(i==1){



		$(this).attr("value",0);



	}else{



		$(this).attr("value",1);



	}



})



</script>







<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>