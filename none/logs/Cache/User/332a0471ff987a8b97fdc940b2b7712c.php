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


 <link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script>
	KindEditor.ready(function(K){
		var editor = K.editor({
			allowFileManager:true
		});
		K('#upload').click(function() {
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
		
		K('#upload2').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					fileUrl : K('#pic2').val(),
					clickFn : function(url, title) {
						if(url.indexOf("http") > -1){
							K('#pic2').val(url);
						}else{
							K('#pic2').val("<?php echo C('site_url');?>"+url);
						}
						editor.hideDialog();
					}
				});
			});
		});		
	});
</script>



<script type="text/javascript">
function bg_(id,type){
     pre_id = $("#"+type+"_pre").text();
     if(pre_id != id && document.getElementById(type+"_"+pre_id) != null){
          document.getElementById(type+"_"+pre_id).style.display='none';
     }
     document.getElementById(type+"_"+id).style.display='block';
     $("#"+type+"_pre").text(id);
}


//载入完成
$(document).ready(function() {
bg_(1,'aa');
});

</script>


<div class="content" style="width:920px; background:none;   border:none; margin-bottom:30px;" >
          <div class="cLineB"><h4>修改商户</h4><a href="javascript:history.go(-1);" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a>
		  <br/>
			    <div class="tab">
              
              <ul>
              <li class="current tabli" id="tab2"><a href="javascript:void(0):"  onclick="bg_(1,'aa')">基础设置</a>&nbsp;&nbsp;</li>
			 <li class="tabli" id="tab2"> <a href="javascript:void(0):"  onclick="bg_(2,'aa')">商户信息</a>&nbsp;&nbsp;</li>
			 <li class="tabli" id="tab2"> <a href="<?php echo U('Weilive/product_index',array('token'=>$token,'catid'=>$vo['catid'],'bid'=>$vo['id']));?>">商品展示</a>&nbsp;&nbsp;</li>
			  <li class="tabli" id="tab2"><a href="<?php echo U('Weilive/case_index',array('token'=>$token,'bid'=>$vo['id']));?>">案例展示</a>&nbsp;&nbsp;</li>
			  <li class="tabli" id="tab2"> <a href="<?php echo U('Weilive/fav_index',array('token'=>$token,'bid'=>$vo['id']));?>">优惠活动</a></ul></div>&nbsp;&nbsp;</li>
			  <!--<a href="<?php echo U('Member_card/index',array('token'=>$token));?>">会员设置</a>&nbsp;&nbsp;-->
		  </div>
         
          <form method="post" action="">
		    <input type="hidden" value="<?php echo ($vo["id"]); ?>" name="id" >
		    <input type="hidden" value="<?php echo ($vo["catid"]); ?>" name="catid" >
			<div id="aa_pre" style="display:none;">0</div>	

			<div class="msgWrap form" id="aa_1" style="display:none;">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <tbody>			  
			    <tr>
				<th>触发官网关键词：</th>
				<td><input type="text" class="px" id="keyword" value="<?php echo ($vo["keyword"]); ?>" name="keyword" style="width:200px;"> </td>
				</tr>

				 <tr>
				<th>标题：</th>
				<td><input type="text" class="px" id="title" value="<?php echo ($vo["title"]); ?>" name="title"> </td>
				</tr>
				
				 <tr>
				<th>图文消息封面：</th>
				<td><input type="text" id="pic" name="font_img" value="<?php echo ($vo["font_img"]); ?>" class="px" style="width:400px;" readonly/><script src="/tpl/static/upyun.js?<?php echo date('YmdHis',time());?>"></script><a href="###" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
				</td>
				</tr>				
	
				<tr>
				<th>图文消息简介 ：</th>
				<td>
					 <textarea name="font_summary" style="width:60%;height:200px;border:1px solid;" ><?php echo ($vo["font_summary"]); ?></textarea>
				</td>
				</tr>
	
				<tr>
				<th>外链地址：</th>
				<td><input type="text" class="px" id="url" value="<?php echo ($vo["url"]); ?>" name="url"> 
				<span style="color:red;">此项可设空，</span>如填写链接，会跳转到链接页面，请填写正确的URL
				</td>
				</tr>
				 </tbody>
				</table>
			</div>			
	
          <div class="msgWrap form" id="aa_2" style="display:none;" >
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <tbody>			  
			  <tr>
				<th>商户名称：</th>
				<td><input type="text" class="px" value="<?php echo ($vo["name"]); ?>" name="name" style="width:200px;"> </td>
				</tr>

				<tr>
				<th>logo：</th>
				<td><input type="text" id="pic2" name="logo" value="<?php echo ($vo["logo"]); ?>" class="px" style="width:400px;" readonly/><span class="ke-button-common" id="upload2" style="margin-top: 3px;margin-left: 5px;"><input type="button" class="ke-button-common ke-button" value="上传"></span></td>
				</tr>

				<tr>
				<th>显示顺序：</th>
				<td><input type="text"  name="displayorder" value="<?php echo ($vo["displayorder"]); ?>" class="px" style="width:50px;"/>
				</td>
				</tr>	
				
				 <tr>
				<th>商家详细地址：</th>
				<td><input type="text"  name="addr" value="<?php echo ($vo["addr"]); ?>" class="px" style="width:400px;"/>
				</td>
				</tr>

				 <tr>
				<th>联系方式：</th>
				<td><input type="text"  name="tel" value="<?php echo ($vo["tel"]); ?>" class="px" style="width:400px;"/>
				</td>
				</tr>



				 <tr>
				<th>地图导航：</th>
				<td><input type="text"  name="map" value="<?php echo ($vo["map"]); ?>" class="px" style="width:400px;"/>
				</td>
				</tr>
				
			    <tr>
				<th>是否推荐：</th>
				<td>
					<select name="flag_c">
					  <option <?php if($vo['flag_c']==='0'){echo 'selected';} ?> value="0">否</option>
					  <option <?php if($vo['flag_c']==='1'){echo 'selected';} ?> value="1">是</option>
					</select>             
				</td>
				</tr>	
				


				<tr>
				<th>区域：</th>
				<td>
					<select name="flag_q">
					  <option <?php if($vo['flag_q']==='1'){echo 'selected';} ?> value="1">青羊区</option>
					  <option <?php if($vo['flag_q']==='2'){echo 'selected';} ?> value="2">锦江区</option>
					  <option <?php if($vo['flag_q']==='3'){echo 'selected';} ?> value="3">金牛区</option>
					  <option <?php if($vo['flag_q']==='4'){echo 'selected';} ?> value="4">成华区</option>
					  <option <?php if($vo['flag_q']==='5'){echo 'selected';} ?> value="5">武候区</option>
					  <option <?php if($vo['flag_q']==='6'){echo 'selected';} ?> value="6">青白江区</option>
					  <option <?php if($vo['flag_q']==='7'){echo 'selected';} ?> value="7">龙泉驿区</option>
					  <option <?php if($vo['flag_q']==='9'){echo 'selected';} ?> value="8">新都区</option>
					  <option <?php if($vo['flag_q']==='10'){echo 'selected';} ?> value="9">温江区</option>
					  <option <?php if($vo['flag_q']==='0'){echo 'selected';} ?> value="0">周边近郊</option>
					</select>             
				</td>
				</tr>


			    <tr>
				<th>星级：</th>
				<td>
					<select name="flag_x">
					  <option <?php if($vo['flag_x']==='5'){echo 'selected';} ?> value="5">5星级酒店</option>
					  <option <?php if($vo['flag_x']==='4'){echo 'selected';} ?> value="4">4星级酒店</option>
					  <option <?php if($vo['flag_x']==='3'){echo 'selected';} ?> value="3">3星级酒店</option>
					  <option <?php if($vo['flag_x']==='2'){echo 'selected';} ?> value="2">酒家酒楼</option>
					  <option <?php if($vo['flag_x']==='1'){echo 'selected';} ?> value="1">田园农家乐</option>
					  <option <?php if($vo['flag_x']==='0'){echo 'selected';} ?> value="0">特色场地</option>
					</select>             
				</td>
				</tr>

			    <tr>
				<th>桌数：</th>
				<td>
					<select name="flag_z">
					  <option <?php if($vo['flag_z']==='0'){echo 'selected';} ?> value="0">10以下</option>
					  <option <?php if($vo['flag_z']==='1'){echo 'selected';} ?> value="1">10-20桌</option>
					  <option <?php if($vo['flag_z']==='2'){echo 'selected';} ?> value="2">20-30桌</option>
					  <option <?php if($vo['flag_z']==='3'){echo 'selected';} ?> value="3">30-50桌</option>
					  <option <?php if($vo['flag_z']==='4'){echo 'selected';} ?> value="4">50桌以上</option>
					</select>             
				</td>
				</tr>			

				 <tr>
				<th>选择模板：</th>
				<td>
				
	<input  name="style" type="text" id="selecttpl" class="px" value="已选择模板<?php echo ($vo["style"]); ?>" disabled size="40"  />
	<a class="btn btn-primary btn_submit  J_ajax_submit_btn" onclick="chooseTpl('tpid','selecttpl',1)">选择模板</a>
	<a class="btn btn-primary btn_submit  J_ajax_submit_btn" onclick="viewTpl()">预览</a>
	<script>
		function viewTpl(){
			var tid = $('#tpid').val();
			chooseTpl(tid,'',2);
		}
	</script>
	<input type="hidden" class="px" id="tpid" value="<?php echo ($info["tpid"]); ?>" name="tpid" style="width:250px">
	
       

				</td>
				</tr>	
	
				
				<tr>
				<th>档期 ：</th>
				<td>
					 <textarea name="schedule" style="width:60%;height:100px;border:1px solid;" ><?php echo ($vo["Schedule"]); ?></textarea>
				</td>
				</tr>	
	
				<tr>
				<th>商户介绍 ：</th>
				<td>
					 <textarea name="description" style="width:60%;height:200px;border:1px solid;" ><?php echo ($vo["description"]); ?></textarea>
				</td>
				</tr>	
				 </tbody>
				</table>
			</div>
	
			<table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
			  <tbody>			  
			<tr>
				<th></th>
				<td><button type="submit" id="button" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>　<a href="javascript:history.go(-1);" class="btn">取消</a></td>
			</tr>
			 </tbody>
			</table>
		  
          </form>
		  
		  
          
        </div>
<script  type="text/javascript" charset="utf-8">
  function inputchek(obj){
    var reg = new RegExp("^[0-9]*[1-9]*$");
    if(!reg.test(obj.value)){
        alert("请输入大于零的整数!");
    }
   
    if(obj.value > 65535){
        alert("请不要输入大于 65535 的整数!");
    }
   
  }

  $("#stat").focusout(function(event) {
      inputchek(this);
  });
  $("#enddate").focusout(function(event) {
      inputchek(this);
  });

</script>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>