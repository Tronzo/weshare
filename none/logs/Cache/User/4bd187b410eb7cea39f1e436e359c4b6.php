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

<?php if(isset($_POST['PHPSESSID'])){ session_id($_POST['PHPSESSID']); } ?>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="/tpl/static/upyun.js"></script>
<div class="content">
<!--	swfupload	-->
<script type="text/javascript">

var path = '/tpl/static/swfupload';
var url='__URL__';
var upyunSite = '<?php echo C("up_domainname");?>';
var upload_type = '<?php echo C("upload_type");?>';
</script>

<script type="text/javascript" src="/tpl/static/swfupload/js/swfupload.js"></script>
<script type="text/javascript" src="/tpl/static/swfupload/js/handlers.js"></script>
<link href="/tpl/static/swfupload/css/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
		var swfu;
		window.onload = function () {
			swfu = new SWFUpload({
				upload_url: "<?php if(C("upload_type") == "upyun"): ?>http://v0.api.upyun.com/<?php echo ($bucket); ?>/<?php else: echo U('Upyun/upload',array('imgfrom'=>'photo_list')); endif; ?>",
				post_params: {"PHPSESSID": "<?php echo session_id();?>"<?php if(C('upload_type') == 'upyun'): ?>,"policy":"<?php echo ($policy); ?>","signature":"<?php echo ($sign); ?>"<?php endif; ?>},
				file_size_limit : "2 MB",
				file_types : "*.jpg;*.png;*.gif;*.bmp",
				file_types_description : "JPG Images",
				file_upload_limit : "100",
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				button_image_url : "/tpl/static/swfupload/images/upload.png",
				button_placeholder_id : "spanButtonPlaceholder",
				button_width: 89,
				button_height: 38,
				button_text : '',
				button_text_style : '.spanButtonPlaceholder { font-family: Helvetica, Arial, sans-serif; font-size: 14pt;} ',
				button_text_top_padding: 0,
				button_text_left_padding: 0,
				button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
				button_cursor: SWFUpload.CURSOR.HAND,			
				flash_url : "/tpl/static/swfupload/swf/swfupload.swf",
				custom_settings : {
					upload_target : "divFileProgressContainer"
				},				
				debug: false

			});
			 
		};
	</script>
	
	
<div class="cLineB">
  <h4>上传图片</h4><a href="javascript:history.go(-1);" class="btn btn-primary btn_submit  J_ajax_submit_btn right" style="margin-top:-27px">返回</a>
  
 </div>
 
 <div class="cLineB">
<div class="pageNavigator left"><strong>此相册地址：<a href="<?php echo ($f_siteUrl); ?>/index.php?g=Wap&m=Photo&a=plist&token=<?php echo ($token); ?>&id=<?php echo ($_GET['id']); ?>" target="_blank" class="green"><?php echo ($f_siteUrl); ?>/index.php?g=Wap&m=Photo&a=plist&token=<?php echo ($token); ?>&id=<?php echo ($_GET['id']); ?></a></strong></div>
<div class="clr"></div>
</div>
 <div class="msgWrap form">
           

<div class="bdrcontent">
<div id="div_ptype">
<form action="#" method="post" name="addListForm">
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">

<thead>
	<tr>
		<th style=" width:120px;">名称</th>                   
		<th style=" width:70px;">显示顺序</th>
		<th>图片外链地址（宽720够了，高不限制）</th>
		<th>图片简单说明（可不填）</th>
		<th style=" width:80px;">显示</th>
		<th style=" width:100px;" class="norightborder">操作</th>
	</tr>
</thead>



	<tbody id="pic_list">

	<tr>
		<td class="norightborder" colspan="6">
			<div style="width:86px;height: auto; font-size: 12px; padding: 5px 20px;float:left;margin-right:20px;">
				<span id="spanButtonPlaceholder"></span>

			</div>
				<input type="hidden" name="pid" value="<?php echo ($_GET['id']); ?>" />	
				<button class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
			
		</td>
	</tr>
	<tr>
		<td class="norightborder" colspan="6">
			

			　
		</td>
	</tr>
	</tbody>

</table>
</form>
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">



 <tr>
	<td colspan="6"><div class="cLineB">
  <h4>图片列表</h4>  
 </div></td>
 </tr>
 <thead>
 
<tr>
<th style=" width:120px;">名称</th>
                   
<th style=" width:70px;">显示顺序</th>
<th>图片外链地址</th>
                        <th>图片简单说明（可不填）</th>
<th style=" width:80px;">显示</th>
                        <th style=" width:100px;" class="norightborder">操作</th>
</tr>
</thead> 
<tbody>
<?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photo): $mod = ($i % 2 );++$i;?><form method="post" action="<?php echo U('Photo/list_edit',array('token'=>session('token')));?>">              
<tr>
	<td><input type="text" name="title" value="<?php echo ($photo["title"]); ?>"  class="px"    /></td>
	<td><input type="text" name="sort" value="<?php echo ($photo["sort"]); ?>"  class="px" style="width:50px;" /></td>
	<td><div class="cateimg"></div><input class="px"  style="width:250px;"   type="text"   name="picurl" id="picurl<?php echo ($i); ?>" value="<?php echo ($photo["picurl"]); ?>"  /> <a href="###" onclick="upyunPicUpload('picurl<?php echo ($i); ?>',1500,1000,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('picurl<?php echo ($i); ?>')">预览</a></td>
	<td><input class="px" type="text"  style="width:250px;"  name="info" value="<?php echo ($photo["info"]); ?>"  /></td>
	<td>
		<input class="checkbox" type="checkbox" name="status" value="1"  <?php if($photo['status'] == 1): ?>checked<?php endif; ?> >
		<input type="hidden"   name="id" value="<?php echo ($photo["id"]); ?>"  /></td>
	<td class="norightborder">
		<button type="submit" name="edit" value="true" class="btn btn-primary btn_submit  J_ajax_submit_btn" style="height:20px;font-size:12px;line-height:10px;">
			<strong>修改</strong>
		</button>
	<a href="<?php echo U('Photo/list_del',array('id'=>$photo['id'],'token'=>session('token')));?>">删除</a>
	</td>
</tr>
</form><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
  </table>
</div>
</div>
<div class="footactions" style="padding-left:10px">
  <div class="pages"></div>
</div>


 </div>
  
        </div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>