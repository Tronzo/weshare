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
KindEditor.options.filterMode = false;
        KindEditor.ready(function(K) {
                window.editor = K.create('#content');
        });
 KindEditor.ready(function(K) {
                window.editor = K.create('#intro');
        });
		 KindEditor.ready(function(K) {
                window.editor = K.create('#content1');
        });
		KindEditor.ready(function(K) {
                window.editor = K.create('#content2');
        });
</script>
<script>



	KindEditor.ready(function(K){



		var editor = K.editor({



			allowFileManager:true



		});



		K('#upload_pic').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#pic').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#pic').val(url);



						}else{



							K('#pic').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_opening_animation').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#opening_animation').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#opening_animation').val(url);



						}else{



							K('#opening_animation').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_small_pic').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#small_pic').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#small_pic').val(url);



						}else{



							K('#small_pic').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_1').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_1').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_1').val(url);



						}else{



							K('#site_map_1').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_2').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_2').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_2').val(url);



						}else{



							K('#site_map_2').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_3').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_3').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_3').val(url);



						}else{



							K('#site_map_3').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_4').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_4').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_4').val(url);



						}else{



							K('#site_map_4').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_5').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_5').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_5').val(url);



						}else{



							K('#site_map_5').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



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



items : [
						'source','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|', 'emoticons', 'image', 'link', 'music', 'video']



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
 
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<div class="content">
<div class="cLineB">
<h4>表单输入项管理 </h4>
<div class="clr"></div>
</div>
<!--<a href="<?php echo U('Custom/index',array('token'=>$token));?>" class="right  btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a> -->
<style>
	#tags .btn btn-primary btn_submit  J_ajax_submit_btn{background-image:none;background-color: #5BA607;color:#ffffff;height:30px;line-height: 30px;}
	#tags .btn btn-primary btn_submit  J_ajax_submit_btn:hover{background-color: #2F8BC9}
</style>
<div class="msgWrap form">
<ul id="tags" style="width:100%">
        <li <?php if(ACTION_NAME == 'record'): ?>class="selectTag"<?php endif; ?>>
                <a href="<?php echo U('Custom/record');?>">表单数据统计</a> 
            </li>
            <li <?php if(ACTION_NAME != 'record'): ?>class="selectTag"<?php endif; ?>>
                <a href="<?php echo U('Custom/index');?>">表单设置项</a> 
            </li>
            <li style="float:right;">
            	<a href="<?php echo U('Custom/index',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">返回</a>
            </li>
            <div class="clr" style="height:1px;background:#eee;margin-bottom:20px;"></div>
        </ul>
</div>



<div class="cLine">
<div class="left"> 
	<a href="<?php echo U('Custom/forms_set',array('token'=>$token,'set_id'=>$set_id));?>" title="输入设置" class="btn btn-primary btn_submit  J_ajax_submit_btn"><img src="<?php echo RES;?>/images/product/add.png" width="16" class="vm">输入设置</a>
</div>
<div class="clr"></div>
</div>
<div class="msgWrap">
<form method="post" action="" id="info">
<input name="delall" type="hidden" value="">
<input name="wxid" type="hidden" value="">
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
<thead>
<tr>
<th width="150">显示名称</th>
<th width="50">输入类型</th>
<th width="50">效果预览</th>
<th width="40">排序</th>
<th width="40">是否显示</th>
<th width="100" class="norightborder">操作</th>
</tr>
</thead>
<tbody>
<tr></tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($item["field_name"]); ?></td>
<td><?php echo ($item["field_type"]); ?></td>
<td><?php echo ($item["input"]); ?></td>
<td><?php echo ($item["sort"]); ?></td>
<td>
	<?php if($item["is_show"] == '1'): ?>显示
	<?php else: ?>
		不显示<?php endif; ?>
</td>
<td class="norightborder">
	<a href="<?php echo U('Custom/forms_set',array('field_id'=>$item['field_id'],'token'=>$token,'set_id'=>$set_id));?>">修改</a> |
	<a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Custom/forms_del',array('field_id'=>$item['field_id'],'token'=>$token));?>');">删除</a>
</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>
</form>

</div>
<div class="cLine">
<div class="pageNavigator right">
<div class="pages"><?php echo ($page); ?></div>
</div>
<div class="clr"></div>
</div>
</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>