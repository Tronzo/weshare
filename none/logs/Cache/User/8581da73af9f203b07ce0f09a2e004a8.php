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

<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/global.js"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>


<script type="text/javascript">
 $(document).ready(function() {
	
	$("#iframe1").click(function(){
		art.dialog.open("<?php echo ($f_siteUrl); echo U('Diymen/class_add');?>",{lock:true,title:'添加菜单',width:760,height:480,yesText:'关闭',background: '#000',opacity: 0.45});
	});
 });
 </script>

<div class="content">

<div class="cLineB">
  <h4><span class=""><h1>注意：1级菜单最多只能开启3个，2级子菜单最多开启5个!</h1></span></h4>
			  <button style="margin-top:-27px" class="ajax right btn btn-primary btn_submit  J_ajax_submit_btn cboxElement" id="iframe1" title="添加主菜单">添加菜单</button>
 </div>
 <div class="cLineD">
 	<form enctype="multipart/form-data" action="" method="post"> 
    AppId:<input type="text" size="20" tabindex="1" class="px" value="<?php echo ($diymen["appid"]); ?>" id="appid" name="appid" style="width:150px;">　 
	AppSecret: <input type="text" size="20" tabindex="1" class="px" value="<?php echo ($diymen["appsecret"]); ?>" id="appsecret" name="appsecret" style="width:250px;">
	<button class=" btn btn-primary btn_submit  J_ajax_submit_btn" value="true" name="appidsubmit" type="submit"><strong>保存</strong></button>
	<br><span style="color:red">通过认证服务号才能得到这2个值!</span>
</form>
         </div>
         
 <div class="msgWrap form">
       <form enctype="multipart/form-data" action="" method="post"><input type="hidden" value="" name="anchor">
<script src="/tpl/static/upyun.js"></script>

		没内容      	  
    <table width="100%" cellspacing="0" cellpadding="0" border="0" class="ListProduct"> 
<thead>
<tr>
	<th style=" width:60px;">显示顺序</th>
	<th style=" width:220px;">主菜单名称</th>
	<th style=" width:170px;">关联关键词</th>
	<th>外链URL</th>
	<th class="norightborder" style=" width:160px;">操作</th>
</tr>
</thead>
   <tbody>
  	<?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$class): $mod = ($i % 2 );++$i;?><tr class="hover">
        <td class="td25">
			<span><?php echo ($class["sort"]); ?></span>
		</td>
        <td>
          <div>
			<span><?php echo ($class["title"]); ?></span>
          </div>
        </td>
        <td><span><?php echo ($class["keyword"]); ?></span></td>
        <td><span><?php if($class['url'] == false): ?>无链接地址<?php else: ?>
			 <?php $url=$class['url']; $url=htmlspecialchars_decode(str_replace(array('{siteUrl}'),array(C('site_url')),$url)); ?>
			 <a class="ajax btn btn-primary btn_submit  J_ajax_submit_btn cboxElement" href='###' Onclick='javascript:demo("<?php echo $url; ?>");' title="预览">预览</a>

        <!--
        <?php echo ($class["url"]); ?>--><?php endif; ?></span></td>
        <td>
			<a class="ajax btn btn-primary btn_submit  J_ajax_submit_btn  cboxElement" href='###' Onclick='javascript:art.dialog.open("<?php echo ($f_siteUrl); echo U('Diymen/class_edit',array('id'=>$class['id']));?>",{lock:true,title:"修改菜单",width:760,height:480,yesText:"关闭",background: "#000",opacity: 0.45});' title="修改主菜单">修改</a>
			<a class=" btn btn-primary btn_submit  J_ajax_submit_btn " href="javascript:drop_confirm('您确定要删除吗?', '<?php echo ($f_siteUrl); echo U('Diymen/class_del',array('id'=>$class['id']));?>');">删除</a>
		</td>				
      </tr>
	  <?php if(is_array($class['class'])): $i = 0; $__LIST__ = $class['class'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$class1): $mod = ($i % 2 );++$i;?><tr class="td29">
			<td class="td25" colspan="1">
				<span><?php echo ($class1["sort"]); ?></span>
			</td>
			<td colspan="1">
			  <div class="board">
				<span><?php echo ($class1["title"]); ?></span>
			  </div>
			</td>
			
			<td colspan="1">
				<span><?php echo ($class1["keyword"]); ?></span>
			</td>
			 <td><span><?php if($class1['url'] == false): ?>无链接地址<?php else: ?>
			 <?php $url=$class1['url']; $url=str_replace(array('{siteUrl}'),array(C('site_url')),$url); ?>
			 <a class="ajax btn btn-primary btn_submit  J_ajax_submit_btn cboxElement" href='###' Onclick='javascript:demo("<?php echo $url; ?>");' title="预览">预览</a><?php endif; ?></span></td>			
			<td colspan="1">

			<a class="ajax btn btn-primary btn_submit  J_ajax_submit_btn  cboxElement" href='###' Onclick='javascript:art.dialog.open("<?php echo ($f_siteUrl); echo U('Diymen/class_edit',array('id'=>$class1['id']));?>",{lock:true,title:"修改菜单",width:760,height:480,yesText:"关闭",background: "#000",opacity: 0.45});' title="修改主菜单">修改</a>
			<a class=" btn btn-primary btn_submit  J_ajax_submit_btn " href="javascript:drop_confirm('您确定要删除吗?', '<?php echo ($f_siteUrl); ?>/<?php echo U('Diymen/class_del',array('id'=>$class1['id']));?>');">删除</a></td>				
	 </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
	<tr class="hover">
        <td class="td25" colspan="5">
		<?php if($class != false): ?><a class="btn btn-primary btn_submit  J_ajax_submit_btn " onclick="drop_confirm('自定义菜单最多勾选3个，每个菜单的子菜单最多5个，请确认!', '<?php echo U('Diymen/class_send');?>');" title="">生成自定义菜单</a><?php endif; ?>
		<span style="float:left;" id="cdul">
		<style>
			#cdul{
				float:left;
				color:red;
			}
		</style>
		注：<br>
		(使用前提是已经拥有了自定义菜单的用户才能够使用，)<br>
		第一步:必须先填写【AppId】【 AppSecret】！<br>
		第二步:添加菜单，<br>
		第三步:点击生成!<br>
		注意：1级菜单最多只能开启3个，2级子菜单最多开启5个<br>
		官方说明：修改后，需要重新关注，或者最迟隔天才会看到修改后的效果！<br>
		</span>
		</td>				
      </tr>
	      	  
    </tbody>
</table>
</form>
       <p>

       </p>
       <div class="clear"></div>
      </div>
  </div>
         </div>
        </dd>
</dl>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>