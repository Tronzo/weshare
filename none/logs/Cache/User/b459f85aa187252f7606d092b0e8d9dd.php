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
<script src="<?php echo RES;?>/js/cart/jscolor.js" type="text/javascript"></script>
<style type="text/css">
.vipcard{
margin: 0 auto;
position: relative;
height: 159px;
text-align: left;
width: 267px;
}
#cardbg{
height: 159px;
width: 267px;
position:absolute;
border-radius: 8px;
-webkit-border-radius:8px;
-moz-border-radius:8px;
box-shadow: 0 0 4px rgba(0, 0, 0, 0.6);
-moz-box-shadow:0 0 4px rgba(0, 0, 0, 0.6);
-webkit-box-shadow:0 0 8px rgba(0, 0, 0, 0.6);
top:0;
left:0;
z-index:1;
}
.vipcard .logo {
max-height:70px;
position:absolute;
top:8px;
left:5px;
z-index:2;
}
.vipcard .verify {
display:inline-block;
height:40px;
top:105px;
right:12px;
text-align:right;
line-height:24px;
color:#000;
font-size:20px;
text-shadow:0 1px rgba(255, 255, 255, 0.2);
z-index:2;
}

.vipcard h1 {
position:absolute;
right:10px;
top:7px;
text-shadow:0 1px rgba(255, 255, 255, 0.2);
color:#000;
font-size:11px;
line-height:25px;
text-align:right;
font-weight: normal;
z-index:2;
}
.vipcard .verify span {
display:inline-block;
text-align:left;
}
.vipcard .verify em {
display:block;
line-height:13px;
font-size:10px;
font-weight:normal;
font-style:normal;
}
.pdo {
position:absolute;
top:0;
left:0;
display:inline-block;
}
.userinfoArea td {
    padding: 8px 0 0px 15px;
}
#tishi{
text-align: center;display: block;
}
.banner{
display:block; width:213px;height: 278px;overflow: hidden;
}
.banner img{
display:block; width:213px; border:0;
}
.bannerbtn{ position:relative; display:block}
.bannerbtn .qiaodaobtn{ position: absolute; display:block; bottom:0}

</style>
  <form class="form" method="post" action=""   enctype="multipart/form-data">
        <div class="content">

          <div class="cLineB">
         <h4>会员卡版面设置<span class="FAQ">开始DIY你的会员卡吧，logo、背景以及字体颜色都可以自由调整。</span></h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-27px">返回</a></div>  
<div class="msgWrap bgfc">
 
<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
<tr>
<th width="303" rowspan="5" valign="top">
	<div class="vipcard">
		<img id="cardbg" src="<?php if($card["diybg"] != ''): echo ($card["diybg"]); else: echo ($card["bg"]); endif; ?>">
		<img id="cardlogo" class="logo" src="<?php echo ($card["logo"]); ?>">
		<h1 id="vipname" style="color:<?php echo ($card["vipnamecolor"]); ?>;"><?php echo ($card["cardname"]); ?>会员卡</h1>
		<strong class="pdo verify" id="number" style="color:<?php echo ($card["numbercolor"]); ?>"><span><em>会员卡号</em>6537 1998</span></strong>
	</div>
</th>
<td colspan="2">会员卡的名称：
<input type="text" name="cardname" value="<?php echo ($card["cardname"]); ?>" id="cardname" class="px" style="width:200px;" onkeyup="DivFollowingText()"> 
<script type="text/javascript">
function DivFollowingText()
{
document.getElementById("vipname").innerHTML=document.getElementById("cardname").value+'会员卡';
}
</script> 
颜色：
<input type="text" name="vipnamecolor" id="vipnamecolor" value="<?php echo ($card["vipnamecolor"]); ?>" class="px color" style="width: 55px; background:<?php echo ($card["vipnamecolor"]); ?>; color: rgb(255, 255, 255);" onblur="document.getElementById('vipname').style.color=document.getElementById('vipnamecolor').value;">
</td>
</tr>
<tr>
<td colspan="2">最低积分要求：
<input type="text" name="miniscore" id="miniscore" value="<?php echo ($card["miniscore"]); ?>" class="px" style="width:100px;">  只有到达(含)这个积分后才可以申领此卡</td>
</tr>
<tr>
<td colspan="2">会员卡的图标：
<input type="text" name="logo" id="logo" value="<?php echo ($card["logo"]); ?>" class="px" style="width:200px;"> 
<input type="button" onclick="document.getElementById(&#39;cardlogo&#39;).src=document.getElementById(&#39;logo&#39;).value;" value="显示效果" class="btnGrayS"> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('logo',1000,600,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('logo')">预览</a></td>
</tr>
<tr>
<td colspan="2">会员卡的背景：
	<select name="bg" onchange="document.getElementById(&#39;cardbg&#39;).src=this.options[this.selectedIndex].value;" class="pt" style="width:210px;"> 
	<option selected="">请选择会员卡背景图</option>
		<?php  for($i=1;$i<=23;$i++){ $i=$i<10?'0'.$i:$i; $str='./tpl/User/default/common/images/card/card_bg'.$i.'.png'; if($card['bg']==$str){ echo $str='<option value="'.$str.'" selected="selected" >'.$i.'</option>'; }else{ echo $str='<option value="'.$str.'">'.$i.'</option>'; } } ?>
		
	</select>
</td>
</tr>
<tr>
<td colspan="2">自己设计背景：
	<input type="text" name="diybg" id="bg" class="px" value="<?php echo ($card["diybg"]); ?>" style="width:200px;"> 
	<input type="button" onclick="document.getElementById(&#39;cardbg&#39;).src=document.getElementById(&#39;bg&#39;).value;" value="显示效果" class="btnGrayS"> 
	  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('bg',1000,600,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('bg')">预览</a> 背景图
</td>
</tr>
<tr>
<td colspan="2">卡号文字颜色：
<input type="text" name="numbercolor" id="numbercolor" value="<?php echo ($card["numbercolor"]); ?>" class="px color" style="width: 55px; background-image: none; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255);" onblur="document.getElementById('number').style.color=document.getElementById('numbercolor').value;"> </td>
</tr>
<tr>
<td><span id="tishi"></span></td>
<td colspan="2">首页提示文字：
<input type="text" name="msg" value="<?php echo ($card["msg"]); ?>" id="tishi2" class="px" style="width:287px;" onkeyup="DivFollowingText2()"> 请不要超过20个字。
<script type="text/javascript">
function DivFollowingText2()
{
document.getElementById("tishi").innerHTML=document.getElementById("tishi2").value;
}
</script></td>
</tr>
<tr>
<th valign="top" height="40"></th>
<td colspan="2"><span class="red">备注：Logo宽370px高170px，图案上下左右居中，背景图宽534px高318px，图片类型png。</span><a href="<?php echo RES;?>/images/cart_info/template.rar" class="green">请下载模板</a></td>
</tr>
<tr>
<th>&nbsp;</th>
<td width="70">&nbsp;</td>
<td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button></td>
</tr>
</tbody>
</table>
  </div> 
  
<div class="cLineB">
          	<h4>各内容页头部Benner图片设置<span class="FAQ">根据你企业的特色设计内容页头部图片，完全展示出不同的会员卡风格。</span></h4></div> 
<div class="msgWrap bgfc">
 
  	<table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
	 <tr>
		<td align="center" valign="top">
			<div class="banner">
				<img src="<?php echo RES;?>/images/cart_info/news-2.jpg">
				<img id="news2_src" src="<?php echo ($card["Lastmsg"]); ?>">
				<img src="<?php echo RES;?>/images/cart_info/news-3.jpg">
			</div>
		</td>
		<td align="center" valign="top">
			<div class="banner">
				<img src="<?php echo RES;?>/images/cart_info/vippower-2.jpg">
				<img id="vippower2_src" src="<?php echo ($card["vip"]); ?>">
				<img src="<?php echo RES;?>/images/cart_info/vippower-3.jpg"></div>
		</td>
		<td align="center" valign="top">
			<div class="banner">
				<img src="<?php echo RES;?>/images/cart_info/qiandao-2.jpg">
				<img id="qiandao2_src" src="<?php echo ($card["qiandao"]); ?>">
				<div class="bannerbtn">
					<img src="<?php echo RES;?>/images/cart_info/qiandao-3.jpg">
					<img class="qiaodaobtn" src="<?php echo RES;?>/images/cart_info/qiandao-4.png">
				</div>
			</div>
		</td>
		<td align="center" valign="top">
			<div class="banner">
				<img src="<?php echo RES;?>/images/cart_info/shopping-2.jpg">
				<img id="shopping2_src" src="<?php echo ($card["shopping"]); ?>">
				<img src="<?php echo RES;?>/images/cart_info/shopping-3.jpg">
			</div>
		</td>
	</tr>
<tr>
<td align="center">上传或填写外链地址查看效果</td>
<td align="center">上传或填写外链地址查看效果</td>
<td align="center">上传或填写外链地址查看效果</td>
<td align="center">上传或填写外链地址查看效果</td>
</tr>
<tr>
	<td align="center">
		<textarea name="Lastmsg" class="px" id="news2" style="width:210px; height:36px" onblur="document.getElementById('news2_src').src=document.getElementById('news2').value;"><?php echo ($card["Lastmsg"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('news2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('news2')">预览</a>
	</td>
	<td align="center">
		<textarea name="vip" class="px" id="vippower2" style="width:210px; height:36px" onblur="document.getElementById('vippower2_src').src=document.getElementById('vippower2').value;"><?php echo ($card["vip"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('vippower2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('vippower2')">预览</a>
	</td>
	<td align="center">
		<textarea name="qiandao" class="px" id="qiandao2" style="width:210px; height:36px" onblur="document.getElementById('qiandao2_scr').src=document.getElementById('qiandao2').value;"><?php echo ($card["qiandao"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('qiandao2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('qiandao2')">预览</a>
	</td>
	<td align="center">
		<textarea name="shopping" class="px" id="shopping2" style="width:210px; height:36px" onblur="document.getElementById('shopping2_src').src=document.getElementById('shopping2').value;"><?php echo ($card["shopping"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('shopping2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('shopping2')">预览</a>
	</td>
 </tr>
<tr>
<td></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center" valign="top">
	<div class="banner">
		<img src="<?php echo RES;?>/images/cart_info/user-2.jpg">
		<img id="user2_src" src="<?php echo ($card["memberinfo"]); ?>">
		<img src="<?php echo RES;?>/images/cart_info/user-3.jpg">
	</div>
</td>
<td align="center" valign="top">
	<div class="banner">
		<img src="<?php echo RES;?>/images/cart_info/info-2.jpg">
		<img id="info2_src" src="<?php echo ($card["membermsg"]); ?>">
		<img src="<?php echo RES;?>/images/cart_info/info-3.jpg">
	</div>
</td>
<td align="center" valign="top">
	<div class="banner">
		<img src="<?php echo RES;?>/images/cart_info/addr-2.jpg">
		<img id="addr2_src" src="<?php echo ($card["contact"]); ?>">
		<img src="<?php echo RES;?>/images/cart_info/addr-3.jpg">
	</div>
</td>
 <td align="center" valign="middle">
 	<div class="banner">
		<img src="<?php echo RES;?>/images/cart_info/rech.jpg">
		<img id="rech2_src" src="<?php echo ($card["recharge"]); ?>">
		<img src="<?php echo RES;?>/images/cart_info/rech-3.jpg">
	</div>
 

</td> 
</tr>
<tr>
<td align="center">上传或填写外链地址查看效果</td>
<td align="center">上传或填写外链地址查看效果</td>
<td align="center">上传或填写外链地址查看效果</td>
<td align="center">上传或填写外链地址查看效果</td>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center">
	<textarea name="memberinfo" class="px" id="user2" style="width:210px; height:36px" onblur="document.getElementById('user2_src').src=document.getElementById('user2').value;"><?php echo ($card["memberinfo"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('user2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('user2')">预览</a>
</td>
<td align="center">
	<textarea name="membermsg" class="px" id="info2" style="width:210px; height:36px" onblur="document.getElementById('info2_src').src=document.getElementById('info2').value;"><?php echo ($card["membermsg"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('info2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('info2')">预览</a>
</td>
<td align="center">
	<textarea name="contact" class="px" id="addr2" style="width:210px; height:36px" onblur="document.getElementById('addr2_src').src=document.getElementById('addr2').value;"><?php echo ($card["contact"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('addr2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('addr2')">预览</a>
</td>
<td>
<textarea name="recharge" class="px" id="rech2" style="width:210px; height:36px" onblur="document.getElementById('rech2_src').src=document.getElementById('rech2').value;"><?php echo ($card["recharge"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('rech2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('rech2')">预览</a>

</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center" valign="top">
	<div class="banner">
		<img src="<?php echo RES;?>/images/cart_info/payre.jpg">
		<img id="payre2_src" src="<?php echo ($card["payrecord"]); ?>">
		<img src="<?php echo RES;?>/images/cart_info/payre-3.jpg">
	</div>
</td>
<td><span class="red">备注：图片宽640px高109px或者更高，但是不要高太多；图片类型为jpg，签到图片外与其他图片高度不同，尽量根据模板图片修改。</span></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center">上传或填写外链地址查看效果</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center">
	<textarea name="payrecord" class="px" id="payre2" style="width:210px; height:36px" onblur="document.getElementById('payre2_src').src=document.getElementById('payre2').value;"><?php echo ($card["payrecord"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('payre2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('payre2')">预览</a>
</td>
<td align="center"><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
  </div> 
        </div>
</form>
        
      
        <div class="clr"></div>
		<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>

      </div>
    </div>
  </div>