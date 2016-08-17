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

<script src="./tpl/User/default/common/js/date/WdatePicker.js"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
 <script src="/tpl/static/upyun.js"></script>
<div class="content">
          <div class="cLineB"><h4>编辑贺卡</h4><a href="<?php echo U('User/Greeting_card/index');?>" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a></div>
          <form method="post" action="" enctype="multipart/form-data">
          <div class="msgWrap form">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <tbody>
               <tr style="display:">
                  <th>
                    <label for="title">触发关键词：</label></th>
                  <td><input type="text" class="px" id="keyword" value="<?php echo ($greeting_card['keyword']); ?>" required="" name="keyword" style="width:380px;"> </td>
                </tr>
                <tr>
                  <th>标题名字
                    <label for="title">：</label></th>
                  <td><input type="text" class="px" id="name" required="" value="<?php echo ($greeting_card['title']); ?>" name="title" style="width:380px;"> </td>
                </tr>
                <tr style="display:">
					  <th width="120"><label for="picurl">回复时封面图片：</label></th>
					  <td><?php if($greeting_card['picurl'] == ''): else: ?><img id="suicaipic1" src="<?php echo ($greeting_card['picurl']); ?>" width="200"/><br><?php endif; ?>
					  <input class="px" name="picurl" value="<?php echo ($greeting_card['picurl']); ?>" id="suicai1" style="width:280px;">
					  <span class="help-inline">
						<a href="javascript:void(0)" onclick="upyunPicUpload('suicai1',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
						<a href="###" onclick="viewImg('suicai1')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					  </span>
					  </td>
                </tr>
                <tr>
                  <th width="120"><label for="bjurl">背景图片：</label></th>
                  <td><?php if($greeting_card['bakcground_url'] == ''): else: ?><img id="suicaipic2" src="<?php echo ($greeting_card['bakcground_url']); ?>" width="200"><br><?php endif; ?>
                  <input class="px" name="bakcground_url" value="<?php echo ($greeting_card['bakcground_url']); ?>" id="suicai2" style="width:280px;">  
				  <span class="help-inline">
					<a href="javascript:void(0)" onclick="upyunPicUpload('suicai2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
					<a href="###" onclick="viewImg('suicai2')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
				 </span>只改变选中模版的背景图!
</td>
                </tr>
                <tr>
    <th>背景音乐:</th>
     <td>
	 
	 <input class="px" name="mp3" value="<?php echo ($greeting_card['mp3']); ?>" id="suicai3" style="width:300px" onchange="document.getElementById('plmp3').src=this.value"> 
	 <a href="###" onclick="upyunPicUpload('suicai3',0,0,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;<a href="###" onclick="chooseFile('suicai3','music')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a><br />
	 
	 <audio id="plmp3" src="" preload="none"></audio><font color="#FF0000"></font></td>
    </tr>
    <tr>
	 <th>选择背景动画：</th>
	  <td>
		<select name="type"> 
			<option value="" <?php if($greeting_card['type'] == ''): ?>selected<?php endif; ?>>请选择</option>
			 <option value="1" <?php if($greeting_card['type'] == 1): ?>selected<?php endif; ?>>下落的枫叶</option>
			 <option value="2" <?php if($greeting_card['type'] == 2): ?>selected<?php endif; ?>>飘雪</option>
			 <option style="display:none" value="3" <?php if($greeting_card['type'] == 3): ?>selected<?php endif; ?>>驱驴</option
			 <option value="4" <?php if($greeting_card['type'] == 4): ?>selected<?php endif; ?>>飘玫瑰</option
			</select> 
		</td>
	</tr>
  <tr></tr>
  <tr>
                  <th valign="top">
					<label for="text">默认文字：</label>
				  </th>
                  <td><textarea class="px" id="Hfcontent" name="info" style="width:280px;  height:40px"><?php echo ($greeting_card['info']); ?></textarea><font color="#FF0000"></font>
                    尽量控制在60字左右，生日卡，就写生日祝语。 圣诞卡就圣诞祝语...</td>
                </tr> 
				<tr>
                  <th valign="top">
					<label for="text">版权信息：</label>
				  </th>
                  <td><textarea class="px" id="Hfcontent" name="copy" style="width:280px;  height:40px"><?php echo ($greeting_card['copy']); ?></textarea><font color="#FF0000"></font>
                    尽量控制在10字左右，</td>
                </tr>
                                                   
                 <tr>
                  <th valign="top"><label for="text">转发时提醒文字：</label></th>
                  <td><input class="px" name="zfname" value="<?php echo ($greeting_card['zfname']); ?>" id="zfname" style="width:100px;"> 
                    </td>
                </tr>
               <tr style="display:none">
				   <th>是否显示转发数：</th>
				   <td>
						<select name="status"> 
							<option value="0">不显示</option>
							<option value="1">显示</option>
						</select> 
				    </td>
				</tr>
                <tr>
                  <th> 
					<label for="title">默认名字：</label>
				   </th>
                  <td><input class="px" name="name" value="<?php echo ($greeting_card['name']); ?>" id="suicai2" style="width:100px;"><font color="#FF0000"></font></td>
                </tr>
                <tr> 
                  <th></th>
                  <td>
					<button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>　
					<a href="" class="btn">取消</a>
				  </td>
                </tr>
              </tbody>
            </table>
            
          </div>
          </form>
          
        </div>
        </div>	
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>