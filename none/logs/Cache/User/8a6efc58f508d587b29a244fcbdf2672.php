<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<script src="./tpl/User/default/common/js/date/WdatePicker.js"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

 <script src="/tpl/static/upyun.js"></script>
<div class="content">
<style>
.msgWrap .control-group {
margin-bottom: 20px;
}
.msgWrap .control-label {
text-align: left;
width: 140px;
font-weight: bold;
padding-top: 5px;
float: left;
display: block;
margin-bottom: 5px;
}
.msgWrap .controls {
margin-left: 160px;
}
.msgWrap .form-actions {
padding: 19px 20px 20px 160px;
margin-top: 20px;
}
.span4, .span1, .option, .valid, .input-large{
	background: url(../images/px.png) repeat-x scroll 0 0 #FFFFFF;
    border-color: #848484 #E0E0E0 #E0E0E0 #848484;
    border-style: solid;
    border-width: 1px;
	border-radius: 2px 2px 2px 2px;
	padding:5px;
	width: 210px;
}
</style>
<script>
function setlatlng(longitude,latitude){
	art.dialog.data('longitude', longitude);
	art.dialog.data('latitude', latitude);
	art.dialog.open('<?php echo U('Map/setLatLng');?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
<div class="cLineB">
  <h4>新建微喜帖</h4><a href="<?php echo U('Wedding/index');?>" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a>
 </div> 
  <div class="msgWrap bgfc">
  <form action="" method="post" class="form-horizontal form-validate" novalidate="novalidate">
	<div class="control-group">
		<label for="title" class="control-label">喜帖标题：</label>
		<div class="controls">
			<input type="text" name="title" id="title" maxlength="10" class="span4" value="<?php echo ($wedding["title"]); ?>" data-rule-required="true"><span class="maroon">*</span><span class="help-inline">喜帖标题限制在十个字以内</span>
		</div>
	</div>
	<div class="control-group">
		<label for="keyword" class="control-label">触发关键词：</label>
		<div class="controls">
			<input type="text" name="keyword" id="keyword" class="span4" data-rule-required="true" value="<?php echo ($wedding["keyword"]); ?>"><span class="maroon">*</span><span class="help-inline">只能设置一个关键字</span>
		</div>
	</div>
	<div class="control-group">
		<label for="coverurl" class="control-label">喜帖封面：</label>
		<div class="controls">
			<img class="thumb_img" id="suicai1_src" src="<?php if($wedding['coverurl'] != false): echo ($wedding["coverurl"]); else: ?>http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png<?php endif; ?>" style="max-height: 100px;">
			<input id="suicai1" type="text" name="coverurl" class="px hide" onchange="changpic(this,1)" value="<?php if($wedding['coverurl'] != false): echo ($wedding["coverurl"]); else: ?>http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png<?php endif; ?>">
			<span class="help-inline">
				<a href="javascript:void(0)" onclick="upyunPicUpload('suicai1',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
				<a href="###" onclick="viewImg('suicai1')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
			</span>
			<span class="help-inline"><span class="maroon">*</span>封面默认大小720*400</span>
		</div>
	</div>
	<div class="control-group">
		<label for="openpic" class="control-label">开场动画：</label>
		<div class="controls">
			<img class="thumb_img" id="suicaipic2_src" src="<?php if($wedding['openpic'] != false): echo ($wedding["openpic"]); else: ?>http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg<?php endif; ?>" style="width: 180px; height: 180px;">
			<input id="suicaipic2" type="text" name="openpic" class="px hide" onchange="changpic(this,2)" value="<?php if($wedding['openpic'] != false): echo ($wedding["openpic"]); else: ?>http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg<?php endif; ?>">
			<span class="help-inline">
						<a href="javascript:void(0)" onclick="upyunPicUpload('suicaipic2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
				<a href="###" onclick="viewImg('suicaipic2')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
			</span>
			<span class="help-inline"> 上传400*400左右的新郎新娘合影图,用于喜帖打开时的动画中,图片大小不超过300K </span>
			<span class="red">不想要开场动画图片地址留空即可!</span>
		</div>
	</div>
	<div class="control-group">
		<label for="picurl" class="control-label">缩略图：</label>
		<div class="controls">
			<img class="thumb_img" id="suicai3_src" src="<?php if($wedding['openpic'] != false): echo ($wedding["openpic"]); else: ?>http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg<?php endif; ?>" style="width: 40px; height: 40px;">
			<input id="suicai3" type="text" name="picurl" class="px hide" onchange="changpic(this,3)" value="<?php if($wedding['openpic'] != false): echo ($wedding["openpic"]); else: ?>http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg<?php endif; ?>">
			<span class="help-inline">
				<a href="javascript:void(0)" onclick="upyunPicUpload('suicai3',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
				<a href="###" onclick="viewImg('suicai3')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
			</span><span class="help-inline"><span class="maroon">*</span>默认40x40,显示在喜帖主页</span>
		</div>
	</div>
		<div class="control-group">
		<label for="picurl" class="control-label">相册选择：</label>
		<div class="controls">
			<select name="pid">
				<option value="">请选择相册名称</option>
				<?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($photo["id"]); ?>" <?php if($photo['id'] == $wedding['pid']): ?>selected="selected"<?php endif; ?>><?php echo ($photo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<span class="help-inline">
			</span>
			<span class="help-inline">
				<span class="maroon">*</span>
				<a  class="btn btn-primary btn_submit  J_ajax_submit_btn" href="<?php echo U('Photo/add');?>">创建相册</a>  如果没有请创建
			</span>
		</div>
	</div>
	<div class="control-group">
		<label for="address" class="control-label">新郎名字：</label>
		<div class="controls">
			<input type="text" name="man" id="man" class="span4" value="<?php echo ($wedding["man"]); ?>" data-rule-required="true">
			<span class="maroon">*</span>
		</div>
	</div>
	<div class="control-group">
		<label for="woman" class="control-label">新娘名字：</label>
		<div class="controls">
			<input type="text" name="woman" id="woman" class="span4" value="<?php echo ($wedding["woman"]); ?>" data-rule-required="true">
			<span class="maroon">*</span>
		</div> 
	</div>
	<div class="control-group">
		<label for="typename" class="control-label"></label>
		<div class="controls">
			<label class="radio inline">
				<input type="radio" name="who_first" checked="checked" value="1"><span class="help-inline">新郎名字在前</span>
			</label>
			<label class="radio inline">
				<input type="radio" name="who_first" value="2"><span class="help-inline">新娘名字在前</span>
			</label>
		</div>
	</div>
	<div class="control-group">
		<label for="tel" class="control-label">联系电话：</label>
		<div class="controls">
			<input type="text" name="phone" id="phone" class="span4" value="<?php echo ($wedding["phone"]); ?>" data-rule-required="true" data-rule-phone="true"><span class="maroon">*</span><span class="help-inline">如0551-63474223 </span>
		</div>
	</div>
	<div class="control-group">
		<label for="time" class="control-label">婚宴日期：</label>
		<div class="controls"> 
			<div class="input-prepend">
				<span class="add-on">
					<i class="icon-calendar"></i>
				</span>
				<input type="text" class="px" onClick="WdatePicker()"  value="<?php if($wedding['time'] != false): echo (date('Y-m-d',$wedding["time"])); endif; ?>" name="time"> <span class="maroon">*</span> 
			</div>
		</div>
	</div>
	<div class="control-group">
		<label for="place" class="control-label">宴席地址：</label>
		<div class="controls"> 
			<div class="input-prepend">
				<input type="text" name="place" class="span4" value="<?php echo ($wedding["place"]); ?>" onchange="loadmap()" id="suggestId" data-rule-required="true"/> <span class="maroon">*</span> 
			</div>
		</div>
	</div>
	<div class="control-group">
		 <label class="control-label" for="suggestId">经纬地址</label>
		 <div class="controls">
			<div id="r-result">
				 <input type="text" class="px" id="longitude" value="<?php echo ($wedding["lng"]); ?>"  name="lng" style="width:80px;">
				 <input type="text" class="px" id="latitude" value="<?php echo ($wedding["lat"]); ?>"  name="lat" style="width:80px;">  <a href="###" onclick="setlatlng($('#longitude').val(),$('#latitude').val())">在地图中查看/设置</a>
				 <input  type="hidden"  name="city" class="px" id="city" size="20" value="" /> 
			 </div>
			 <div id="searchResultPanel"></div>
		 </div>
    </div>
	<div class="control-group">
		<label for="video" class="control-label">喜帖视频：</label>
		<div class="controls"> 
			 <input type="text" name="video" id="video" class="span4" style="width:480px" value="<?php echo ($wedding["video"]); ?>"><p>支持优酷视频地址如;http://v.youku.com/v_show/id_XNjI4ODk5NDQ4.html <br> 腾讯fash视频地址：如http://static.video.qq.com/TPout.swf?vid=v0119s27wd5&amp;auto=0 <br> 也支持mp4和ogg 格式地址 http://www.w3school.com.cn/example/html5/mov_bbb.mp4 </p>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="mp3url">背景音乐</label>
		<div class="controls">
			<input class="px" name="mp3url" value="<?php echo ($wedding["mp3url"]); ?>" id="suicai4" style="width:300px" onchange="document.getElementById('plmp3').src=this.value"> <a href="###" onclick="chooseFile('suicai4','music')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a><br />
		
			<audio  id="plmp3" src="" preload="none"></audio>
		</div>
	</div>
	<div class="control-group">
		<label for="tel" class="control-label">密码：</label>
		<div class="controls">
			<input type="text" name="passowrd" id="password" class="span4" value="<?php echo ($wedding["passowrd"]); ?>" data-rule-required="true" maxlength="10"><span class="maroon">*</span><span class="help-inline">设置微信上查看来宾名单的验证密码(10位以内）</span>
		</div>
	</div>
	<div class="control-group">
		<label for="tel" class="control-label">想要给朋友说的话：</label>
		<div class="controls">
			<textarea rows="5" name="word" id="word" class="px" data-rule-required="true" data-rule-maxlength="200" style=" width:450px; height:60px"><?php if($wedding['word'] != false): echo ($wedding["word"]); else: ?>亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福.<?php endif; ?></textarea>
			<span class="maroon">*</span><span class="help-inline">喜帖文字限制在200字以内</span>
		</div>
	</div>
	<div class="control-group">
		<label for="qr_code" class="control-label">二维码图片地址：</label>
		<div class="controls">
			<input id="suicai6" type="text" name="qr_code" class="span4" value="<?php echo ($wedding["qr_code"]); ?>">
			<span class="help-inline">
				<a href="javascript:void(0)" onclick="upyunPicUpload('suicai6',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
				<a href="###" onclick="viewImg('suicai6')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
			</span>
			<span class="help-inline">
			<span class="maroon">*</span>默认100x100,显示在喜帖底部</span>
		</div>
	</div>
	<div class="control-group">
		<label for="copr" class="control-label">底部版权：</label>
		<div class="controls">
		<textarea name="copyrite" id="copyrite" class="px" rows="5" style="width:450px; height:60px"><?php echo ($wedding["copyrite"]); ?></textarea>
		</div>
	</div>
   <div class="form-actions">
			<button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>　<button type="button" class="btn">取消</button>
		</div>
</form>
  </div> 
 
  
        </div>
		
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>