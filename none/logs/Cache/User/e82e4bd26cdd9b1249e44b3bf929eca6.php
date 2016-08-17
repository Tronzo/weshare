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

<div class="content" <?php if(session('isQcloud') == true): ?>style="float:center;"<?php endif; ?>>

<div class="cLineB">

  <h4>自定义输入项 <span class="FAQ">（会员资料是否需要显示或填写）</span></h4>

 </div>
         

 
 <div class="msgWrap form">

	<form class="form" method="post" action="<?php echo U('Member_card/customSave');?>">	 
		<table class="ListProduct" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
				
				<tr>
					<td width="120">微信昵称</td>
					<td>
						<input type="radio" name="wechaname" id="wechaname" <?php if($conf['wechaname'] == 1): ?>checked<?php endif; ?> value="1" /> <label for="wechaname">显示 &nbsp; &nbsp; &nbsp;</label>
						<input type="radio" name="wechaname" id="nowechaname" <?php if($conf['wechaname'] === 0): ?>checked<?php endif; ?> value="0" /> <label for="nowechaname">不显示</label>
					</td>
				</tr>
								
				<tr>
					<td width="120">手机号</td>
					<td>
						<input type="radio" name="tel" id="tel" <?php if($conf['tel'] == 1): ?>checked<?php endif; ?> value="1" /> <label for="tel">显示 &nbsp; &nbsp; &nbsp;</label>
						<input type="radio" name="tel" id="notel" <?php if($conf['tel'] === 0): ?>checked<?php endif; ?> value="0" /> <label for="notel">不显示</label>
					</td>
				</tr>
								
				<tr>
					<td width="120">真实姓名</td>
					<td>
						<input type="radio" name="truename" id="truename" <?php if($conf['truename'] == 1): ?>checked<?php endif; ?> value="1" /> <label for="truename">显示 &nbsp; &nbsp; &nbsp;</label>
						<input type="radio" name="truename" id="notruename" <?php if($conf['truename'] === 0): ?>checked<?php endif; ?> value="0" /> <label for="notruename">不显示</label>
					</td>
				</tr>
								
				<tr>
					<td width="120">QQ号码</td>
					<td>
						<input type="radio" name="qq" id="qq" <?php if($conf['qq'] == 1): ?>checked<?php endif; ?> value="1" /> <label for="qq">显示 &nbsp; &nbsp; &nbsp;</label>
						<input type="radio" name="qq" id="noqq" <?php if($conf['qq'] === 0): ?>checked<?php endif; ?> value="0" /> <label for="noqq">不显示</label>
					</td>
				</tr>
								
				<tr>
					<td width="120">支付密码</td>
					<td>
						<input type="radio" name="paypass" id="paypass" <?php if($conf['paypass'] == 1): ?>checked<?php endif; ?> value="1" /> <label for="paypass">显示 &nbsp; &nbsp; &nbsp;</label>
						<input type="radio" name="paypass" id="nopaypass" <?php if($conf['paypass'] === 0): ?>checked<?php endif; ?> value="0" /> <label for="nopaypass">不显示</label>
					</td>
				</tr>
								
				<tr>
					<td width="120">头像</td>
					<td>
						<input type="radio" name="portrait" id="portrait" <?php if($conf['portrait'] == 1): ?>checked<?php endif; ?> value="1" /> <label for="portrait">显示 &nbsp; &nbsp; &nbsp;</label>
						<input type="radio" name="portrait" id="noportrait" <?php if($conf['portrait'] === 0): ?>checked<?php endif; ?> value="0" /> <label for="noportrait">不显示</label>
					</td>
				</tr>
								
				<tr>
					<td width="120">性别</td>
					<td>
						<input type="radio" name="sex" id="sex" <?php if($conf['sex'] == 1): ?>checked<?php endif; ?> value="1" /> <label for="sex">显示 &nbsp; &nbsp; &nbsp;</label>
						<input type="radio" name="sex" id="nosex" <?php if($conf['sex'] === 0): ?>checked<?php endif; ?> value="0" /> <label for="nosex">不显示</label>
					</td>
				</tr>
								
				<tr>
					<td width="120">出生年</td>
					<td>
						<input type="radio" name="bornyear" id="bornyear" <?php if($conf['bornyear'] == 1): ?>checked<?php endif; ?> value="1" /> <label for="bornyear">显示 &nbsp; &nbsp; &nbsp;</label>
						<input type="radio" name="bornyear" id="nobornyear" <?php if($conf['bornyear'] === 0): ?>checked<?php endif; ?> value="0" /> <label for="nobornyear">不显示</label>
					</td>
				</tr>
				
								
				<tr>
					<td width="120">出生月</td>
					<td>
						<input type="radio" name="bornmonth" id="bornmonth" <?php if($conf['bornmonth'] == 1): ?>checked<?php endif; ?> value="1" /> <label for="bornmonth">显示 &nbsp; &nbsp; &nbsp;</label>
						<input type="radio" name="bornmonth" id="nobornmonth" <?php if($conf['bornmonth'] === 0): ?>checked<?php endif; ?> value="0" /> <label for="nobornmonth">不显示</label>
					</td>
				</tr>
				
								
				<tr>
					<td width="120">出生日</td>
					<td>
						<input type="radio" name="bornday" id="bornday" <?php if($conf['bornday'] == 1): ?>checked<?php endif; ?> value="1" /> <label for="bornday">显示 &nbsp; &nbsp; &nbsp;</label>
						<input type="radio" name="bornday" id="nobornday" <?php if($conf['bornday'] === 0): ?>checked<?php endif; ?> value="0" /> <label for="nobornday">不显示</label>
					</td>
				</tr>
				

					

				
				
				
				<td>&nbsp;</td>
					<td>
						<input type="hidden" name="token" value="<?php echo ($_GET['token']); ?>" />
						<button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
						<a href="javascript:history.go(-1);" class="btn btn-primary btn_submit  J_ajax_submit_btn">取消</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
  
  
  
  
  
  
  
  
  
  
  
</div>  
  
  
  
        </div>
   
        <div class="clr"></div>
      </div>
    </div>
  </div> 
  <!--底部-->
  	</div>

<?php if(session('isQcloud') != true): ?><div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div><?php endif; ?>