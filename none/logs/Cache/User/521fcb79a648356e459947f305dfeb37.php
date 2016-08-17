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

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />



<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />



<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
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
						'source','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|', 'emoticons', 'image', 'link', 'music', 'video']


});







});



</script>

<div class="content">
          <div class="cLineB"><h4>编辑图文自定义内容</h4><a href="javascript:history.go(-1);"  class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px" >返回</a></div>
         
          <form method="post"   action="<?php echo U('Img/insert');?>"  enctype="multipart/form-data" >
          <div class="msgWrap form">
            <TABLE class="userinfoArea" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR>
                  <TH style="width:120px" valign="top"><label for="keyword">关键词：</label></TH>
                  <TD><input type="text" class="px" id="keyword" value=""  name="keyword" style="width:580px;"><br />
                  多个关键词请用空格格开：例如: 美丽&nbsp;漂亮&nbsp;好看 </TD>
                </TR>
                 <TR style="display:none">
  <TH valign="top">关键词类型：</TH>
  <TD><label for="radio1"><input id="radio1" class="radio" type="radio" name="type" value="2"  checked="checked"    > 完全匹配  用户输入的和此关键词一样才会触发!</label><br /><label for="radio2"><input class="radio" id="radio2" type="radio" name="type" value="1"   > 包含匹配 (只要用户输入的文字包含本关键词就触发!v2用户才生效)</label></TD>
</TR>
              </THEAD>
              <TBODY>
               <TR>
                  <TH><span class="red">*</span><label for="title">标题：</label></TH>
                  <TD><input type="text" class="px" id="title" value=""    name="title" style="width:580px;"> </TD>
                </TR>
                <TR>
                  <TH valign="top"><label for="text">简介：</label></TH>
                  <TD><textarea  class="px" id="Hfcontent"     name="text" style="width:580px;  height:100px"></textarea><br />限制200字内
                   

</TD>
                </TR>
                <TR>
                  <TH valign="top"><span class="red">*</span><label for="classid">文章所属类别：</label></TH>
                  <TD>
					<div id="classname" style="padding:5px;"></div>
					<input type="hidden" id="classid" value="" name="classid" />
					<a href="###" onclick="editClass('classid','classname',0)" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择所属分类</a>
					<a href="<?php echo U('Classify/add');?>" class="btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-left:10px;" target="ddd" >添加分类</a>
                  </TD>
                </TR>
			<tr>
				<th valign="top" class="f_l_r">顺序数字：</th>
			<td><input type="text" class="px" id="usort" value="0" name="usort" style="width:420px;">&nbsp;&nbsp;由大到小排列</td>
			</tr>
                <TR style="display:none">
                  <TH valign="top"><label for="picurl">封面图片：</label></TH>
                  <TD>（尺寸：宽720像素，高400像素） 小于500k;<div style="display:none"><input name="upfile" type="file"  class="text textMiddle inputQ" value="请选择图片" /></div></TD>
                </TR>
                
                          <TR>
                  <TH valign="top"><label for="pic">封面图片地址：</label></TH>
                  <TD><input class="px"  name="pic" id="pic" value="" style="width:580px;"  />  <script src="/tpl/static/upyun.js?<?php echo date('YmdHis',time());?>"></script><a href="###" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic')">预览</a>
</TD>
                </TR>
               <TR>
                  <TH valign="top"><label for="showpic">详细页是否显示封面：</label></TH>
                  <TD>是<input class="radio" type="radio" name="showpic" value="1"  checked="checked"   > 否<input class="radio" type="radio" name="showpic" value="0"   >
                  
</TD>
                </TR>
                <TR>
                  <TH valign="top"><label for="info">图文详细页内容：</label></TH>
                  <TD><textarea name="info"  id="content"  rows="5" style="width:590px;height:360px;display:none;"   >   </textarea>

                  </TD>
                </TR>  
                 <TR>
                  <TH valign="top"><label for="url">图文外链网址：</label></TH>
                  <TD><input type="text" class="px" id="url" value="" name="url" style="width:280px;">  <a href="###" onclick="addLink('url',0)" class="btn btn-primary btn_submit  J_ajax_submit_btn">从功能库添加</a><br /><span class="red">如需跳转到其他网址，请在输入框右侧选择或这里填写网址(例如：http://baidu.com，记住如果填写必须有http://)</span>如果填写了图文详细内容，这里请留空，不要设置！</TD>
                </TR>
                <TR>
                  <TH></TH>
                  <TD><input type="submit" value="保存" name="sbmt" class="btn btn-primary btn_submit  J_ajax_submit_btn">　<a href="<?php echo U('Img/index');?>"  class="btn">取消</a></TD>
                </TR>
              </TBODY>
            </TABLE>
            
          </div>
          </form>
          
        </div>     
 
        <div class="clr"></div>
      </div>
    </div>
  </div> 
<!--底部-->
  	</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>