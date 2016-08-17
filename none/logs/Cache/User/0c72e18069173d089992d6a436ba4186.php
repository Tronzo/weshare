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

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>

<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="/tpl/static/upyun.js"></script>
<script>

var editor;
KindEditor.ready(function(K) {
editor = K.create('#info', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
						'source','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|', 'emoticons', 'image', 'link', 'music', 'video']
});

});
</script>

    <script>
    jQuery.validator.addMethod("white_list", function(value, element) { 
    var tel = /^[a-z/?=&A-Z0-9_-:,\.]*$/; 
    return this.optional(element) || (tel.test(value)); 
    }, "白名单格式错误，使用英文逗号(,)分隔主机名或IP地址。");
    function insert_home()
    {
        document.getElementById("success_url").value = "<?php echo C('site_url');?>/index.php?g=Wap&m=Index&a=index&token=<?php echo ($node_info["token"]); ?>";
    }
    </script>
   
<div class="content">
    <div id="main">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-title">
                            <div class="span12">
                                <h4><i class="icon-cog"></i>认证上网设置 (用户关注认证后可以上网，之后再次来店可免认证，取消关注后需要重新认证)</h4>
                               
                            </div>
                        </div>
                         <div class="msgWrap bgfc" style="margin-top:10px;">
                            <form action="<?php echo U('User/RippleOS/delete');?>" method="post" class="form-horizontal form-validate" novalidate>
                                <button class="btn btn-primary btn_submit  J_ajax_submit_btn" type="submit" data-loading-text="清除中...">清除配置</button>                                  <a  class="btn btn-primary btn_submit  J_ajax_submit_btn" href="http://www.rippletek.com" target="_blank">RippleOS官网</a>
                            </form>
                        </div>
                         <div class="msgWrap bgfc" style="margin-top:10px;">
                            <form action="<?php echo U('User/RippleOS/set');?>" method="post" class="form-horizontal form-validate" novalidate>
                               <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
                               <tbody>
                               <tr>

                                    <th valign="top"><span class="red">*</span>上网关键词</th>
                                    <td>
                                    
                                        <input type="text" name="keyword" id="keyword" value="<?php echo (($node_info["keyword"])?($node_info["keyword"]):''); ?>" class="px" data-rule-required="true" data-rule-maxlength="90">
                                        <span class="help-inline">用户输入此关键词将会返回认证提示，多个关键词之间使用空格分隔。例如：wifi 上网 免费上网</span></td>
                                    </tr>
                               <tr>
                                     <th valign="top"><span class="red">*</span>回复文字</th>
                                   <td>
                                        <input type="text" name="text" id="text" value="<?php echo (($node_info["text"])?($node_info["text"]):''); ?>" class="px" data-rule-required="true" data-rule-maxlength="90">
                                        <span class="help-inline">输入关键词后的返回认证文字。例如：10分钟内点击此文字，认证后可以上网x分钟</span></td>
                                        </tr>
                                  <tr>
                                    <th valign="top"><span class="red">*</span>获取验证码关键词</th>
                                     <td>
                                        <input type="text" name="code_keyword" id="code_keyword" value="<?php echo (($node_info["code_keyword"])?($node_info["code_keyword"]):''); ?>" class="px" data-rule-required="true" data-rule-maxlength="90">
                                        <span class="help-inline">用户输入此关键词将会返回上网验证码。例如: 电脑上网 上网验证码</span></td></tr>
                                  <tr>
                                <neq name="node_info.created_at" value="">
                                 
                                     <th valign="top"><span class="red"></span>节点名称</th>
                                    <td>
                                        <span><?php echo ($node_info["wx_id"]); ?></span></td></tr>
                                   <tr>
                                    <th valign="top"><span class="red"></span>创建时间</th>
                                    <td>
                                        <span><?php echo ($node_info["created_at"]); ?></span></td></tr>
                                    <tr>
                                
                                    <th valign="top"><span class="red"></span>更新时间</td></tr>
                                    <td>
                                        <span><?php echo ($node_info["updated_at"]); ?></td></tr>
                                   <tr>
                                     <th valign="top"><span class="red">*</span>认证地址</th>
                                   <td>
                                        <input type="text" name="login_url" id="login_url" value="<?php echo (($node_info["login_url"])?($node_info["login_url"]):''); ?>" class="px" data-rule-required="true" data-rule-url="true">
                                        <span class="help-inline">输入认证页面URL，以http://开头，例如：http://demo.rippletek.com/ext/portal/rptk3wxandcode.html</span></td></tr>
                                   <tr>
                                   <th valign="top"><span class="red">*</span>认证成功地址</th>
                                     <td>
                                        <input type="text" name="success_url" id="success_url" value="<?php echo (($node_info["success_url"])?($node_info["success_url"]):''); ?>" class="px" data-rule-required="true" data-rule-url="true">
                                        <a href="###" onclick="addLink('success_url',0)" class="btn btn-primary btn_submit  J_ajax_submit_btn">从功能库添加</a> 或输入成功页面URL，以http://开头，例如：http://demo.rippletek.com/ext/portal/rptksuccess.html</span></td></tr>
                                    <tr>
                                   <th valign="top"><span class="red">*</span>开启认证</th>
                                  <td>
                                    <label class="checkbox inline">
                                      <input type="checkbox" name="is_portal" value="1" <?php if(($node_info["is_portal"]) == "1"): ?>checked="checked"<?php endif; ?> >
                                    </label></td></tr>
                                  <tr>
                                    <th valign="top"><span class="red">*</span>未认证可微信聊天</th>
                                    <td>
                                        <input type="text" name="wx_unauth_timeout" id="wx_unauth_timeout" value="<?php echo (($node_info["wx_unauth_timeout"])?($node_info["wx_unauth_timeout"]):''); ?>" class="px" data-rule-number="true" data-msg-number="时间范围5-99分钟" data-rule-min="5" data-msg-min="时间范围5-99分钟" data-rule-max="99" data-msg-max="时间范围5-99分钟"> 分钟(5-99)
                                        <span class="help-inline">未认证可使用微信聊天的时间，无法在微信中访问网页。不填写为一直可以使用微信聊天10分钟</span></td></tr>
                                    <tr>
                                     <th valign="top"><span class="red"></span>认证后可上网:</th>
                                    <td>
                                        <input type="text" name="login_timeout" id="login_timeout" value="<?php echo (($node_info["login_timeout"])?($node_info["login_timeout"]):''); ?>" class="px" data-rule-number="true" data-msg-number="时间范围1-1440分钟" data-rule-min="1" data-msg-min="时间范围1-1440分钟" data-rule-max="1440" data-msg-max="时间范围1-1440分钟"> 分钟(1-1440)
                                        <span class="help-inline">认证成功后可以上网时间，不填写为可以上网1440分钟</span></td></tr>
                                   <tr>
                                 <th valign="top"><span class="red">*</span>再次认证方式</th>
                                   <td>
                                    <select name="auth2nd" id="auth2nd" class="input-medium">
                                      <option value="1" <?php if(($node_info["auth2nd"]) == "1"): ?>selected="selected"<?php endif; ?>>无需认证</option>
                                      <option value="0" <?php if(($node_info["auth2nd"]) == "0"): ?>selected="selected"<?php endif; ?>>与首次一致</option>
                                      <option value="2" <?php if(($node_info["auth2nd"]) == "2"): ?>selected="selected"<?php endif; ?>>简单认证</option>
                                    </select>
                                    <span class="help-inline">"简单认证"即在二次连接时候，需要打开浏览器点击任意网页。选择"与首次一致"，无法实现取消关注后需要重新认证。</span></td></tr>
                                 <tr>
                                  <th valign="top"><span class="red">*</span>关闭主动弹窗</th>
                                  <td>
                                    <label class="checkbox inline">
                                      <input type="checkbox" name="hide_cp" value="1" <?php if(($node_info["hide_cp"]) == "1"): ?>checked="checked"<?php endif; ?>>
                                    </label>
                                    <span class="help-inline">IOS终端(iPhone, iPod, iPad)和WP终端将不会主动弹窗，和Android认证流程一致</span></td></tr>
                                   <tr>
                                    <th valign="top"><span class="red"></span>网址白名单</th>
                                    <td>
                                       <textarea id="white_list" name="white_list" class="px ui-wizard-content ui-helper-reset ui-state-default" style="resize:none; width:274px; height:120px;" data-rule-white_list="true"><?php echo ($node_info["white_list"]); ?></textarea>
                                       <span class="help-inline">使用英文逗号(,)分隔主机名或IP地址，例如：qq.com,weibo.com</span></td></tr>
                                    
                                 <TR>
                                 <th>&nbsp;</th>
                                   <td> <button id="rptksubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button></td></tr>
                               
                                </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</div><div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>