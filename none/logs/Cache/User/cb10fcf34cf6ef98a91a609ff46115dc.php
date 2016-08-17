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

          <div class="cLineB"><h4>无线打印</h4></div>

          <form method="post" action="<?php echo U('Index/upsave');?>" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">

          <div class="msgWrap">

            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">

              <thead>

			    <tr>

                  <th><span class="red">*</span>商户代码：</th>

                  <td><input type="text" required class="px" name="member_code" value="<?php echo ($info["member_code"]); ?>" tabindex="1" size="25">

                  <span class="red">登录<a href="http://www.feyin.net/" target="_blank">《飞印》</a>后在“API集成”->“获取API集成信息”获取</span>

                  </td>

                </tr>

                <tr>

                  <th><span class="red">*</span>密钥：</th>

                  <td><input type="text" required class="px" name="feiyin_key" value="<?php echo ($info["feiyin_key"]); ?>" tabindex="1" size="25">

                  <span class="red">获取方法同上</span>

                  </td>

                </tr>

				<tr>

                  <th><span class="red">*</span>打印机设备编码：</th>

                  <td><input type="text" required class="px" name="device_no" value="<?php echo ($info["device_no"]); ?>" tabindex="1" size="25">

                  <span class="red">通过打印机后面的激活按键获取，为16位数字，例如"4600365507768327"</span>

                  </td>

                </tr>

				<tr>

                  <th><span class="red">*</span>无线打印状态：</th>

                  <td>

                  <input type="radio" value="1" <?php if(($info["printstatus"] == 1) OR ($info['printstatus'] == '') ): ?>checked=""<?php endif; ?>  name="printstatus"/>开启 

                  <input type="radio" value="0" <?php if(($info["printstatus"] == 0)): ?>checked=""<?php endif; ?>  name="printstatus"/>关闭
                  <input type="hidden" required class="px" name="wxname" value="<?php echo ($info["wxname"]); ?>" tabindex="1" size="25">

				<input type="hidden" required  name="wxid" value="<?php echo ($info["wxid"]); ?>" class="px" tabindex="1" size="25" >

				<input type="hidden" required name="weixin" value="<?php echo ($info["weixin"]); ?>" class="px" tabindex="1" size="25">

				<input type="hidden" class="px" name="headerpic" value="<?php echo ($info["headerpic"]); ?>" size="60">

				<input type="hidden" name="token" value="<?php echo ($info["token"]); ?>" class="px" tabindex="1" size="40">

				<input type="hidden" class="px" id="province" value="<?php echo ($info["province"]); ?>" name="province" tabindex="1" size="20">

				<input id="city" value="<?php echo ($info["city"]); ?>" type="hidden" name="city" class="px" tabindex="1" size="20">

				<input type="hidden" required class="px" tabindex="1" value="<?php echo ($info["qq"]); ?>" name="qq" size="25">

				<input type="hidden" required name="wxfans" value="<?php echo ($info["wxfans"]); ?>" class="px" tabindex="1" size="25">

				<input type="hidden" required name="type" value="<?php echo ($info["typeid"]); ?>" class="px" tabindex="1" size="25">

				<input type="hidden" name="appid" value="<?php echo ($info["appid"]); ?>" class="px" tabindex="1" size="35">

				<input type="hidden" name="appsecret" value="<?php echo ($info["appsecret"]); ?>" class="px" tabindex="1" size="35">

				<input type="hidden" name="winxintype" value="<?php echo ($info["winxintype"]); ?>" class="px" tabindex="1" size="35">

				

                  </td>

                </tr>

				

              </thead>

              

                <tr>

                  <td><button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn" id="saveSetting">保存</button></td>

                </tr>

            </table>

            

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