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


<div class="content">
          <div class="cLineB"><h4><?php echo ($thisCard["cardname"]); ?>：商家开卡配置 <span class="FAQ">卡号自定义啦</span> <strong>本月可创建 <span style="color:red"><?php echo ($count); ?></span> 张，剩余<span style="color:red"><?php echo ($cancrnum); ?></span>张</strong></h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-27px">返回</a></div>
         
          <form method="post" action="">
          <div class="msgWrap form">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <tbody>
  <tr>
              		<th>卡号英文编号：</th>
              		<td><input type="input" class="px" id="title" value="" name="title" style="width:200px;"> 例：<font style="color:red">BSD</font>-65535 <font style="color:red">BSD</font>就是英文编号</td>
              		</tr>
  <tr style="display:none">
              		<th >选择人群：</th>
              		<td>
						<label><input name="group" type="radio" value="1" checked="checked">所有会员</label>　
						<label><input type="radio" name="group" value="2">普通会员</label>　
						<label><input type="radio" name="group" value="3">银卡会员</label>
						<label><input type="radio" name="group" value="4">金卡会员</label>
						<label><input type="radio" name="group" value="5">钻石会员</label>
					</td>
              		</tr>



              	<tr>
<th>卡号生成范围：</th>
<td>
	起始卡号：&nbsp;
	<input type="input" class="px" id="stat" value="" onClick="WdatePicker()" name="stat">&nbsp;到
	<input type="input" class="px" id="enddate" value="" name="end" onClick="WdatePicker()">&nbsp;结束卡号.
	<font style="color:red">最小起始卡为:1,最大结束卡号为:65535,
  <br />例如输入1到100那么就会创建99张会员卡</font>
</td>
</tr>

</tr>

<tr>
	<th valign="top">使用说明：</th>
	<td>
			在此说明生成会员卡的说明，每次最多生成100张，请及时关注，会员卡是否被领取完了,全部被发放后请再次生成。
	</td>
</tr>
<tr>
	<th></th>
	<td><button type="submit" id="button" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>　<a href="javascript:history.go(-1);" class="btnGray vm">取消</a></td>
</tr>
 </tbody>
</table>
            
          </div>
          </form>
          
        </div>
<script  type="text/javascript" charset="utf-8">

  function inputchek(obj){
    var reg = new RegExp("^[0-9]*[1-9]*$");
    if(!reg.test(obj.value)){
        alert("请输入大于零的整数!");
    }
   
    if(obj.value > 65535){
        alert("请不要输入大于 65535 的整数!");
    }
   
  }

  $("#stat").focusout(function(event) {
      inputchek(this);
  });
  $("#enddate").focusout(function(event) {
      inputchek(this);
  });

</script>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>