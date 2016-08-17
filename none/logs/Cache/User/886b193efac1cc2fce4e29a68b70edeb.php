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

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
 <div class="content">
          <div class="cLineB"><h4>添加文章分类</h4><a href="javascript:history.go(-1);"  class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px" >返回</a></div> 
<div class="msgWrap">
  <form class="form" method="post" name="addform" action="<?php echo U('Classify/insert');?>"    enctype="multipart/form-data" >
<TABLE class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">
  <THEAD>
  <?php if($fid != 0): ?><TR>
  <TH valign="top"><label for="keyword">上级分类名称：</label></TH>
  <TD><?php echo ($thisClassify["name"]); ?><input type="hidden" name="fid" value="<?php echo ($fid); ?>" /></TD>
  <TD>&nbsp;</TD>
</TR><?php endif; ?>
<TR>
  <TH valign="top"><label for="keyword">分类名称：</label></TH>
  <TD><input type="text" class="px" id="keyword" value="" name="name" style="width:500px" ><br />
                  </TD>
  <TD>&nbsp;</TD>
</TR>
                            </THEAD>
  <TBODY>
  

  
  
<TR>
  <TH valign="top"><label for="keyword">分类描述：</label></TH>
  <TD><input type="text" class="px" id="keyword" value="" name="info" style="width:500px" ><br />
                  30个字简短分类描述，可为空   </TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TH valign="top"><label for="keyword">分类图片：</label></TH>
  <TD><input type="text" class="px" id="img" value="" name="img" id="img" style="width:500px" >  <script src="/tpl/static/upyun.js?2013"></script><a href="###" onclick="chooseFile('img','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img')">预览</a></TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TH valign="top"><label for="keyword">外链网站或活动 ：</label></TH>
  <TD><input type="text" class="px" id="url" value="" name="url" style="width:300px" > <a href="###" onclick="addLink('url',0)" class="btn btn-primary btn_submit  J_ajax_submit_btn">从功能库添加</a><br />
  </TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TH valign="top"><label for="keyword">排序：</label></TH>
  <TD><input type="text" class="px" id="keyword" value="1" name="sorts" style="width:500px" ><br />
                   </TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TH valign="top"><label for="keyword">是否显示：</label></TH>
  <TD><input type="radio" class="px" id="keyword" value="1" name="status" checked />是<br />
  <input type="radio" class="px" id="keyword" value="0" name="status" />否
                   </TD>
  <TD>&nbsp;</TD>
</TR>

  
<TR>
  <TH valign="top"><label for="keyword">分类页模板：</label></TH>
  <TD>
	
	
	<input type="text" id="selecttpl" class="px" value="点击右侧按钮选择" disabled size="40"  />
	<a class="btn btn-primary btn_submit  J_ajax_submit_btn" onclick="chooseTpl('tpid','selecttpl',1)">选择模板</a>
	<a class="btn btn-primary btn_submit  J_ajax_submit_btn" onclick="viewTpl()">预览</a>
	<script>
		function viewTpl(){
			var tid = $('#tpid').val();
			chooseTpl(tid,'',2);
		}
	</script>
	<input type="hidden" class="px" id="tpid" value="38" name="tpid" style="width:250px">
  </TD>
  <TD>
	&nbsp;
  </TD>
</TR>

<tr>
  <TH valign="top"><label for="keyword">内容页模板：</label></TH>
  <TD>
	<input type="text" id="selectconttpl" class="px" value="点击右侧按钮选择" disabled size="40"  />
	<a class="btn btn-primary btn_submit  J_ajax_submit_btn" onclick="chooseTpl('conttpid','selectconttpl',3)">选择模板</a>
	<a class="btn btn-primary btn_submit  J_ajax_submit_btn" onclick="viewTpl2()">预览</a>
	<input type="hidden" class="px" value="1" id="conttpid" name="conttpid" style="width:250px">
	<script>
		function viewTpl2(){
			var tid = $('#conttpid').val();
			chooseTpl(tid,'',4);
		}
	</script>
  </TD>
  <TD>
	&nbsp;
  </TD>
</tr>


<TR>
  <TH></TH>
  <TD><button type="submit"  name="button"  class="btn btn-primary btn_submit  J_ajax_submit_btn" >保存</button>
  	<div class="clr"></div>
  	</TD>
  </TR>
  </TBODY>
</TABLE>
  </form>
  </div> 

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