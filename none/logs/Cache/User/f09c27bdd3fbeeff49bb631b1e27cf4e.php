<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
 <link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/formCheck/formcheck.js"> </script>
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
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut']
});

});

function inputtypeChange(){
  var attr = $('#inputtype').attr('value');
	if(attr == 'select' || attr == 'checkbox' || attr == 'radio'){
		$('#troptions').css("display","");
	}else{
		$('#troptions').css("display","none");
	}
}
function regexChange(){
	$('#regex').attr('value',$('#regexSelect').attr('value'))
}
</script>

  <div class="content"> 
   <div class="cLineB"> 
    <h4>输入设置项</h4> 
    <a href="<?php echo U('Custom/forms',array('token'=>$token,'set_id'=>$set_id));?>" class="right  btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a> 
   </div> 
  
   <form class="form" method="post" id="form" action=""> 
<?php if($isUpdate == 1): ?><input type="hidden" name="id" value="<?php echo ($set["id"]); ?>" /><?php endif; ?>
    
    <div class="msgWrap bgfc"> 
     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 
      <tbody> 
      <tr> 
        <th><span class="red">*</span>字段说明：</th>
        <td><input type="text" id="displayname" name="field_name" value="<?php echo ($set["field_name"]); ?>" class="px require" style="width:300px;" /></td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>输入类型：</th>
        <td>
            <select name="field_type" id="inputtype" onchange="inputtypeChange()"><?php echo ($field_type); ?></select>
            <span id="troptions"<?php if(($set['field_type'] == 'select') or ($set['field_type'] == 'checkbox') or($set['field_type'] == 'radio') ): else: ?>style="display:none"<?php endif; ?>>
              <input type="text" id="options" name="filed_option" value="<?php echo ($set["filed_option"]); ?>" class="px require" style="width:210px;" /> 多个选项值，多个用“|”隔;
            </span>
        </td> 
       </tr>

       <tr> 
        <th><span class="red">*</span>输入限制：</th>
        <td><select name="field_match" id="regexSelect" onchange="regexChange()"><?php echo ($field_match); ?></select></td> 
       </tr>
       </tr>
              <tr> 
        <th><span class="red">*</span>是否必填：</th>
        <td>
          <select name="is_empty" id="require">
              <option value="1" <?php if($set["is_empty"] == '1'): ?>selected<?php endif; ?>> 必填 </option>
              <option value="0" <?php if($set["is_empty"] == '0'): ?>selected<?php endif; ?>> 可选 </option>   
          </select>
          选择用户是否必须填写该字段
        </td> 
       </tr> 
        <tr> 
        <th><span class="red">*</span>是否显示：</th>
        <td>
          <select name="is_show" id="require">
              <option value="1" <?php if($set["is_show"] == '1'): ?>selected<?php endif; ?>> 显示 </option>
              <option value="0" <?php if($set["is_show"] == '0'): ?>selected<?php endif; ?>> 不显示 </option>
          </select>
          选择用户端是否限制该输入选项
        </td> 
       </tr> 
        <tr> 
        <th><span class="red">*</span>排序：</th>
        <td><input type="text" name="sort" id="taxis" value="<?php if($set["sort"] == ''): ?>50<?php else: echo ($set["sort"]); endif; ?>" class="px" style="width:300px;" /></td> 
       </tr>
       <tr> 
        <th><span class="red"></span>错误提示：</th> 
        <td><input type="text" name="err_info" id="errortip" value="<?php echo ($set["err_info"]); ?>" class="px" style="width:300px;" /> 输入错误时的提示内容</td> 
       </tr>

       <th>&nbsp;</th>
       <td>
        <input type="hidden" name="field_id" value="<?php echo ($set["field_id"]); ?>" />
        <input type="hidden" name="set_id" value="<?php echo $set_id;?>">
          <button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button> &nbsp;
          <a href="<?php echo U('Custom_form/index',array('token'=>$token,'set_id'=>$set_id));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">取消</a>
       </td> 
       </tr> 
      </tbody> 
     </table> 
     </div>
    
   </form> 
  </div> 
<script language="javascript">
$(function(){

	$("#form").valid([
	{ name:"displayname",simple:"显示名称",require:true},
	{ name:"fieldname",type:"eng",simple:"字段名称",require:true},
	{ name:"inputtype",simple:"输入类型",require:true}	
	],true,true);

})
</script>
  <div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>