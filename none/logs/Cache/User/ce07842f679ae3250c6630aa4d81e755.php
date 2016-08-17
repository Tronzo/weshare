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

 
<script type="text/javascript" src="/tpl/static/audioplayer/inc/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="/tpl/static/audioplayer/inc/jquery.mb.miniPlayer.js"></script>
    <link rel="stylesheet" type="text/css" href="/tpl/static/audioplayer/css/miniplayer.css" title="style" media="screen"/>
    <script type="text/javascript">
        $(function () {

            $(".audio").mb_miniPlayer({
                width: 200,
                inLine: false,
                onEnd: playNext
            });

            function playNext(player) {
                var players = $(".audio");
                document.playerIDX = player.idx + 1 <= players.length - 1 ? player.idx + 1 : 0;
                players.eq(document.playerIDX).mb_miniPlayer_play();
            }
        });
    </script>
    
<div class="content">

<div class="cLineB">
  <h4>首页回复配置 </h4><a href="javascript:history.go(-1);" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a>
 </div>
         
    <div class="msgWrap bgfc">
	  <form class="form" method="post" action=""   enctype="multipart/form-data">	 
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
				<tr>
				  <th valign="top"><span class="red">*</span>关键词：</th>
				  <td>
					<input type="text" name="keyword" value="<?php echo ($home["keyword"]); ?>" class="px" style="width:550px;"><p style="color:#F00">默认为——首页</p></td>
				</tr>
				<tr>
					<th width="120">回复标题：</th>
					<td><input type="text" name="title" value="<?php echo ($home["title"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120">内容介绍：</th>
					<td><textarea style="width:560px;height:75px" name="info" id="info" class="px"><?php echo ($home["info"]); ?></textarea><br/>最多填写120个字</td>
				</tr>
				<tr>
					<th>回复图片：</th>
					<td><input type="text" name="picurl" id="picurl" value="<?php echo ($home["picurl"]); ?>" class="px" style="width:550px;">   <script src="/tpl/static/upyun.js?<?php echo date('YmdHis',time());?>"></script><a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('picurl')">预览</a></td>
				</tr>
				<tr>
					<th>3G网站背景：</th>
					<td><input type="hidden" name="homeurl" id="homeurl" value="<?php echo ($home["homeurl"]); ?>" class="px" style="width:550px;"><a href="?g=User&m=Flash&a=index&token=<?php echo ($token); ?>&tip=2">请在首页背景图中设置</a></td>
				</tr>
				<tr>
					<th>背景音乐：</th>
					<td>
					<table><tr><?php if($home["musicurl"] != ''): ?><td><a style="width:120px;float:left" id="musicurl_src" class="audio {skin:'blue'}" href="<?php echo ($home["musicurl"]); ?>">音乐播放</a></td><?php endif; ?><td> <input class="px" name="musicurl" value="<?php echo ($home["musicurl"]); ?>" id="musicurl" style="width:200px;float:left" onchange="$('#musicurl_src').attr('href',this.value"> <a href="###" onclick="upyunPicUpload('musicurl',0,0,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;<a href="###" onclick="chooseFile('musicurl','music')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a></td></tr></table>
					 </td>
				</tr>

   <tr><TH  >选择背景动画：</TH>
  <TD><select name="bjdh"   > 


  <?php for($i=0;$i<=7;$i++) { if($i==0)$dhname='无动画'; if($i==1)$dhname='下落的枫叶'; if($i==2)$dhname='飘雪'; if($i==3)$dhname='大枫叶'; if($i==4)$dhname='飘玫瑰'; if($i==5)$dhname='花瓣'; if($i==6)$dhname='金元宝'; if($i==7)$dhname='冰花'; if($home['bjdh']==$i){ $list=$list.'<option selected  value="'.$i.'">'.$dhname.'</option>'; } else { $list=$list.'<option value="'.$i.'">'.$dhname.'</option>'; } } echo $list; ?>
                   
</select> </TD>
                </tr>  
				<tr>
					<th>公司Logo：</th>
					<td><input type="text" name="logo" id="logo" value="<?php echo ($home["logo"]); ?>" class="px" style="width:550px;">  <a href="###" onclick="upyunPicUpload('logo',1500,1000,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('logo')">预览</a><br/> </td>
				</tr>
				<tr>
					<th>第三方接口：</th>
					<td><input type="text" name="apiurl" value="<?php echo ($home["apiurl"]); ?>" class="px" style="width:550px;"><br/> 只适用于引用第三方3G网站的链接</td>
				</tr>
				<th>&nbsp;</th>
					<td>
						<button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
						<a href="javascript:history.go(-1);" class="btn">取消</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
  </div> 
 
  
        </div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>