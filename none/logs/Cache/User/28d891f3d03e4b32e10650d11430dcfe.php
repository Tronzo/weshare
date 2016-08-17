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




<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />



<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />



<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />



<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>



<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>



<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />



<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />



<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>



<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>



<script type="text/javascript" src="<?php echo RES;?>/js/formCheck/formcheck.js"> </script>



<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>


<style>
.userinfoArea th {
text-align: left;
width: 545px;
font-size: 14px;
font-weight: bold;
line-height: 1.5;
padding: 8px 0;
}
</style>
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



allowImageUpload : false,



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



function setlatlng(longitude,latitude){



	art.dialog.data('longitude', longitude);



	art.dialog.data('latitude', latitude);



	// 此时 iframeA.html 页面可以使用 art.dialog.data('test') 获取到数据，如：



	// document.getElementById('aInput').value = art.dialog.data('test');



	art.dialog.open('<?php echo U('Map/setLatLng',array('token'=>$token,'id'=>$id));?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});



}



</script>



<div class="content"  >



   <div class="cLineB"> 



    <h4>类型设置</h4> 



    <a href="<?php echo U($type.'/setcin',array('id'=>$id,'token'=>$token));?>" class="right  btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a> 



   </div> 







   <form class="form" method="post" id="form" action="" enctype="multipart/form-data"> 







    <div class="msgWrap bgfc"> 



     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 



      <tbody> 



        <tr>



			<th>请输入原价自定义&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="默认为'类型'"  name="lxzdy" class="px" value="<?php echo $data[lxzdy];?>"  /></td>



			<td><input type="text" name="name" placeholder="请输入价格" class="px" value="<?php echo $data[name];?>"  /></td>



		</tr>



		<tr>



			<th>请输入原价自定义&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  placeholder="默认为'原价'" name="yjzdy" class="px" value="<?php echo $data[yjzdy];?>"  /></td>



			<td><input type="text" name="yuanjia" placeholder="请输入原价" class="px" value="<?php echo $data[yuanjia];?>"  /></td>



		</tr>



		<tr>



			<th>请输入优惠价自定义<input type="text"  placeholder="默认为'优惠价'" name="yhzdy" class="px" value="<?php echo $data[yhzdy];?>"  /></td>



			<td><input type="text" name="youhui" placeholder="请输入优惠价"  class="px" value="<?php echo $data[youhui];?>"  /></td>	



		</tr>



		<tr>



			<th>简要说明：</td>



			<td><input type="text" name="memo" class="px" value="<?php echo $data[memo];?>"  /></td>



		</tr>



		<tr> 



			<th>图片：</th>



			<td><input type="text" name="pic1" value="<?php echo $data[pic1];?>" id="small_pic" class="px" style="width:400px;"  readonly="readonly"/><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('small_pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('small_pic')">预览</a></td> 



        </tr>



		<tr> 



			<th></th>



			<td><input type="text" name="pic2" value="<?php echo $data[pic2];?>" id="pic" class="px" style="width:400px;"  readonly="readonly"/><a href="###" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic')">预览</a></td> 



        </tr>



		<tr> 



			<th></th>



			<td><input type="text" name="pic3" value="<?php echo $data[pic3];?>" id="opening_animation" class="px" style="width:400px;"  readonly="readonly"/><a href="###" onclick="upyunPicUpload('opening_animation',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('opening_animation')">预览</a></td> 



        </tr>



		<tr> 



			<th></th>



			<td><input type="text" name="pic4" value="<?php echo $data[pic4];?>" id="site_map_2" class="px" style="width:400px;"  readonly="readonly"/><a href="###" onclick="upyunPicUpload('site_map_2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('site_map_2')">预览</a></td> 



        </tr>



		<tr> 



			<th></th>



			<td><input type="text" name="pic5" value="<?php echo $data[pic5];?>" id="site_map_5" class="px" style="width:400px;"  readonly="readonly"/><a href="###" onclick="upyunPicUpload('site_map_5',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('site_map_5')">预览</a></td> 



        </tr>



        <TR>



			<TH valign="top"><label for="info">配套设施：</label></TH>



            <TD><textarea name="messages" id="content"  rows="5" style="width:590px;height:360px"><?php echo $data[messages];?></textarea></TD>



        </TR>  



		



       <tr>         



       <th>&nbsp;</th>



       <td>



		<!--input type="hidden" name="time" value="<?php echo ($set["time"]); ?>" /-->



       <button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button> &nbsp; <a href="<?php echo U($type.'/setcin',array('pid'=>$id,'token'=>$token));?>" class="btn">取消</a></td> 



       </tr> 



	   



      </tbody> 



     </table> 



     </div>



    



   </form> 



  </div> 



<script language="javascript">



$(function(){



	$("#form").valid([



	{ name:"name",simple:"名称",require:true},



	{ name:"keyword",simple:"关键词",require:true}



		



	],true,true);







});



</script>



  <div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>