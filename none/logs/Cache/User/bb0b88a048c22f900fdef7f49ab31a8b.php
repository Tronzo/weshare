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

<div class="content"  >          

<div class="cLineB"><h4>摇一摇活动设置</h4><a href="javascript:history.go(-1);"  class="right btnGrayS vm" style="margin-top:-27px" >返回</a></div> 

<div class="msgWrap">

  <form class="form" method="post"   action="<?php echo U('Shake/insert');?>"  enctype="multipart/form-data" >

<TABLE class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">

  <THEAD>

<TR>

  <TH valign="top"><label for="acttitle">活动名称：</label></TH>

  <TD><input type="txt" class="px" id="acttitle"  name="acttitle" style="width:500px"  value="默认活动" >    </TD>

  <TD>&nbsp;</TD>

</TR>

                            <TR>

  <TH valign="top">摇一摇类型：</TH>

  <TD><label for="radio1"><input id="radio1" class="radio" type="radio" name="shaketype" value="1"  checked="checked"> 以手机竖直中轴线垂直地面的为临界点，左右摇省力</label><br /><label for="radio2"><input class="radio" id="radio2" type="radio" name="shaketype" value="2"> 以手机摇晃时达到一定的加速度值为一次来计算，较费力，但不用考虑方向</label></TD>

</TR>

                            </THEAD>

  <TBODY>

<TR>

  <TH valign="top"><label for="text">客户端传输间隔：</label></TH>

  <TD><input type="txt" class="px" id="clienttime"  name="clienttime" style="width:50px" value="3" >  数字越大服务器负担越小，但是要考虑客户体验!

 



</TD>

  <TD rowspan="2" valign="top"></TD>

</TR> 

<TR>

  <TH valign="top"><label for="text">前台页面传输间隔：</label></TH>

  <TD><input type="txt" class="px" id="showtime"  name="showtime" style="width:50px" value="3" >  数字越大服务器负担越小，但是要考虑客户体验!

 



</TD>

  <TD rowspan="2" valign="top"></TD>

</TR>

<TR>

  <TH valign="top"><label for="text">游戏开始倒数计时：</label></TH>

  <TD><input type="txt" class="px" id="starttime"  name="starttime" style="width:50px" value="3" >  倒数计时开始游戏

 



</TD>

  <TD rowspan="2" valign="top"></TD>

</TR>

<TR>

  <TH valign="top"><label for="text">截止摇晃数：</label></TH>

  <TD><input type="txt" class="px" id="endshake"  name="endshake" style="width:50px" value="133" >  当有用户达到此数值时，游戏结束。

 



</TD>

  <TD rowspan="2" valign="top"></TD>

</TR>

<TR>

  <TH valign="top"><label for="text">前台页面展示人数：</label></TH>

  <TD><input type="txt" class="px" id="shownum"  name="shownum" style="width:100px" value="10" >  成绩将以进度条形式显示在前台页面上的n个人

 



</TD>

  <TD rowspan="2" valign="top"></TD>

</TR>

<TR>

  <TH valign="top"><label for="text">前台页面背景：</label></TH>

  <TD><input type="txt" class="px" id="pass" value="" name="pass" style="width:250px" value="" > <script src="/tpl/static/upyun.js"></script><a href="###" onclick="chooseFile('pass','background')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="upyunPicUpload('pass',1500,1000,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('pass')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a> 定义前台页面背景，为URL地址

 



</TD>

  <TD rowspan="2" valign="top"></TD>

</TR>

<TR>

  <TH valign="top"><label for="text">前台背景音乐：</label></TH>

  <TD><input type="txt" class="px" id="pass2" value="" name="pass2" style="width:250px" value="" >  <a href="###" onclick="chooseFile('pass2','music')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> 定义前台背景音乐，为URL地址

 



</TD>

  <TD rowspan="2" valign="top"></TD>

</TR>

<TR>

  <TH valign="top"><label for="text">客户端起始音效：</label></TH>

  <TD><input type="txt" class="px" id="pass3" value="" name="pass3" style="width:250px" value="" > <a href="###" onclick="chooseFile('pass3','music')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a>

 



</TD>

  <TD rowspan="2" valign="top"></TD>

</TR>  

<TR>

  <TH valign="top"><label for="text">二维码图片地址：</label></TH>

  <TD><input type="txt" class="px" id="qrcode" value="" name="qrcode" style="width:250px" value="" > <a href="###" onclick="chooseFile('qrcode','my')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="upyunPicUpload('qrcode',1500,1000,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('qrcode')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a> 前台也显示二维码

 



</TD>

  <TD rowspan="2" valign="top"></TD>

</TR>  

<TR>

  <TH></TH>

  <TD><button type="submit"  name="button"  class="btn btn-primary btn_submit  J_ajax_submit_btn" >保存</button>　

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