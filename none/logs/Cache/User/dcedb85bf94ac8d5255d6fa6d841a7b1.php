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

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<style type="text/css">
.userinfoArea th {
width: 100px;
}
.clr{
clear:both;
}
.chatPanel .mediaFullText .mediaContent {
font-size: 14px;}
.chatPanel .media {
border:0px solid #D1D1D1;
box-shadow:0 0px 5px 0 rgba(0, 0, 0, 0.25);
-moz-box-shadow:0 0px 5px 0 rgba(0, 0, 0, 0.25);
-webkit-box-shadow:0 0px 5px 0 rgba(0, 0, 0, 0.25);
-webkit-border-radius:5px 5px 10px 10px;
-moz-border-radius:5px 5px 10px 10px;
border-radius:5px 5px 10px 10px;
background: url(<?php echo RES;?>/images/photo/bottom.png) repeat-x scroll left bottom #FFFFFF;
background-size:2px auto;
}
.chatPanel .media .mediaHead .title {
line-height:1.2em;
font-size:16px;
display:block;
text-align: left;
margin-top:0;
padding:0;
height: auto;
}
.chatPanel .media .mediaPanel {
padding:0px;
margin:0px;
}
.chatPanel .media .mediaHead {
padding: 10px 10px 8px;
border-bottom: 0px solid #D3D8DC;
color: #000000;
font-size: 20px;
}

.chatPanel .media .mediaFooter {
padding: 0 10px;
}
.chatPanel .mediaFullText .mediaImg {
width: 265px;
margin: 0 10px;}
.chatPanel .mediaFullText .mediaImg img{
width: 100%;}
.chatPanel .mediaFullText .mediaContentP {
margin: 5px 10px 0px;
}
.chatPanel .mediaFullText .mediaContentP p{
line-height:18px
}
.chatPanel .mediaFullText .mediaContent {
padding: 0 0 5px;
}
</style>

<div class="content">
          <div class="cLineB">
          	<h4>修改相册</h4><a href="javascript:history.go(-1);" class="right btnGrayS btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a></div>
         
          <form method="post" action="">
         <div class="msgWrap bgfc">
            <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
<tr>
<th valign="top"><span class="red">*</span>相册名称：</th>
<td width="430"><input type="text" name="title" value="<?php echo ($photo["title"]); ?>" class="px" style="width:400px;" id="name" onkeyup="DivFollowingText1()">
<script type="text/javascript">
function DivFollowingText1()
{
document.getElementById("zname").innerHTML=document.getElementById("name").value;
document.getElementById("zname2").innerHTML=document.getElementById("name").value;
}
</script> 
<br>
尽量简单，不要超过<span class="red">20字</span>.</td>
<td width="430" rowspan="4" valign="top" class="chatPanel" style="padding:0px;">


<!--完整显示所有内容的效果-->	
<div class="chatItem you" id="photo1" style="width:350px;" <?php if($photo['isshowinfo'] == 1): ?>display:none<?php else: endif; ?>> 
  　<a target="ddd" href="">
<div class="media mediaFullText">

<div class="mediaPanel">
<div class="mediaHead"><span class="title" id="zname"><?php echo ($photo["title"]); ?></span>
</div>
<div class="mediaImg"><img id="pic_src" src="<?php echo ($photo["picurl"]); ?>"></div>
<div class="mediaContent mediaContentP">
<p id="zinfo"><?php echo ($photo["info"]); ?></p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">查看全文</span>
<div class="clr"></div>
</div>
</div>
</div>
</a>
</div>

<!--最简单的显示效果-->	
<div class="chatItem you" id="photo2" style="<?php if($photo['isshowinfo'] == 0): ?>display:none<?php else: endif; ?>"> 
  　<a target="ddd" href="">
<div class="media mediaFullText">

<div class="mediaPanel">
<div class="mediaHead" style="padding: 10px 10px 0px;">
</div>
<div class="mediaImg"><img id="zpic2" src="<?php echo ($photo["picurl"]); ?>"/></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span>
<span style="line-height:50px; font-size:16px" id="zname2"><?php echo ($photo["title"]); ?></span>
<div class="clr"></div>
</div>
</div>
</div>
</a>
</div>


</td>

</tr>
<tr>
<th valign="top"><span class="red">*</span>相册封面图：</th><input type="hidden" name="id" value="<?php echo ($photo["id"]); ?>" />
<td width="430"><input type="text" name="picurl" value="<?php echo ($photo["picurl"]); ?>" class="px" style="width:400px;" id="pic" onblur="document.getElementById('pic_src').src=document.getElementById('pic').value;document.getElementById('zpic2').src=document.getElementById('pic').value;" onchange="document.getElementById('pic_src').src=document.getElementById('pic').value;document.getElementById('zpic2').src=document.getElementById('pic').value;"><br>
<script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic')">预览</a></td>
</tr>
<tr>
   <th valign="top">相册介绍：</th>
	<td valign="top">
		<textarea class="px" id="info" name="info" style="width:400px; height:120px" onkeyup="DivFollowingText2()"><?php echo ($photo["info"]); ?></textarea><br>
			<script type="text/javascript">
			function DivFollowingText2()
			{
			document.getElementById("zinfo").innerHTML=document.getElementById("info").value;
			}
	</script> 
		请简单描述相册内容，尽量控制在<span class="red">150文字以内</span>。<br>
		<label>
			<input name="isshowinfo" <?php if($photo['isshowinfo'] == 0): ?>checked="checked"<?php endif; ?> type="radio" id="RadioGroup0_0" value="0" checked="checked" onclick="document.getElementById('photo2').style.display='none';document.getElementById('photo1').style.display='';">
			显示简介
		</label>　　
		<label>
			<input type="radio" <?php if($photo['isshowinfo'] == 1): ?>checked="checked"<?php endif; ?> name="isshowinfo" value="1" id="RadioGroup0_1" onclick="document.getElementById('photo1').style.display='none';document.getElementById('photo2').style.display='';">
			不显示简介
		</label>	
	</td>
</tr>
<tr>
<th valign="top">是否显示：</th>
	<td valign="top">
	<select name="status">
	<option value="1" <?php if($photo['status'] == 1): ?>selected<?php endif; ?>>显示此相册</option>
	<option value="0" <?php if($photo['status'] == 0): ?>selected<?php endif; ?>>不显示此相册</option>
	</select>						
	                       	
	</td>
</tr>
<tr>
	<th valign="top">&nbsp;</th>
	<td>
		<button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
		<a href="index.php?ac=photo-list&amp;id=9878" class="btn btn-primary btn_submit  J_ajax_submit_btn">取消</a></td>
		<td>&nbsp;
	</td>
</tr>
</tbody>
</table>
            
          </div>
          </form>
          
        </div>
				<script type="text/javascript">
var selUser = {};

function addvotetouser(obj, type) {
var liid = 'votetouser_' + type + '_' + obj.value;
var userObj = $('vote_user_'+type);
if(obj.checked) {
if($(liid) == null) {
var newli = document.createElement("li");
newli.id = liid;

//创建隐含域
try {
var InputNode = document.createElement("<input type=\"hidden\" value=\""+ obj.value +"\" name=\"votetouser["+type+"]["+obj.getAttribute('user')+"]\">");
} catch(e) {
var InputNode = document.createElement("input");
InputNode.setAttribute("name", "votetouser["+type+"][]");
InputNode.setAttribute("type", "hidden");
InputNode.setAttribute("value", obj.value);
}
newli.appendChild(InputNode);
var newspan = document.createElement("span");
newspan.innerHTML ='<p>' + obj.getAttribute('user')+'</p> <a href="javascript:;" onclick="delSelUser(\''+liid+'\', \''+obj.value+'\');" title="删除" class="deltw">删除</a>';
newli.appendChild(newspan);
userObj.appendChild(newli);
selUser[obj.value] = obj.value;
}
} else {
userObj.removeChild($(liid));
delete selUser[obj.value];
}
}
function delSelUser(lid, uid) {
delete selUser[uid];
$(lid).parentNode.removeChild($(lid));
}

function setFlag(obj, utype) {
var uids = common = '';
obj.href = ''+utype;
for(var key in selUser) {
if(parseInt(selUser[key])) {
uids = uids + common + selUser[key];
common = ',';
}
}
if(uids != '') {
obj.href += '&uids=' +  uids;
}
}
</script>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>