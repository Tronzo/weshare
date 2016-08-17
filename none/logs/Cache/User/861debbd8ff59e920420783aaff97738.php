<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
 
 <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
 <link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/formCheck/formcheck.js"> </script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

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
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut']
});

});

</script>

  <div class="content"> 
   <div class="cLineB"> 
    <h4>自定义表单设置</h4> 
    <a href="<?php echo U('Custom/index',array('token'=>$token));?>" class="right  btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a> 
   </div> 
   

   <form class="form" method="post" id="form" action=""> 
<?php if($isUpdate == 1): ?><input type="hidden" name="id" value="<?php echo ($set["id"]); ?>" /><?php endif; ?>
<input type="hidden" name="discount" id="discount" value="<?php echo ($set["discount"]); ?>" />
    <div class="msgWrap bgfc"> 
     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 
      <tbody> 
       <tr> 
        <th><span class="red">*</span>标题：</th> 
        <td><input type="text" id="name" name="title" value="<?php echo ($set["title"]); ?>" class="px require" style="width:400px;" /></td> 
       </tr> 
       </tr>
        <tr> 
        <th><span class="red">*</span>关键词：</th>
        <td><input type="text" name="keyword" id="keyword" value="<?php echo ($set["keyword"]); ?>" class="px" style="width:400px;" /></td> 
       </tr>
      <tr> 
        <th><span class="red">*</span>联系电话：</th> 
        <td><input id="mp" class="px require" type="text" style="width:400px;" value="<?php echo ($set["tel"]); ?>" name="tel"></td> 
       </tr>
       <tr> 
        <th><span class="red">*</span>位置信息：</th> 
        <td><input id="address" class="px require" type="text" style="width:400px;" value="<?php echo ($set["address"]); ?>" name="address"></td> 
       </tr>
       <tr> 
        <th><span class="red">*</span>地图定位：</th> 
        <td>
          经度
          <input id="longitude" class="px" type="text" value="<?php echo ($set["longitude"]); ?>" size="14" name="longitude">
          纬度
          <input id="latitude" class="px" type="text" value="<?php echo ($set["latitude"]); ?>" size="14" name="latitude">
          <a onclick="setlatlng($('#longitude').val(),$('#latitude').val())" href="###">在地图中查看/设置</a>

        </td> 
       </tr>     
      <tr> 
        <th><span class="red"></span>简介：</th> 
        <td><textarea name="intro" class="px" style="width:400px;height:80px;"><?php echo ($set["intro"]); ?></textarea></td> 
       </tr>
        <tr> 
        <th><span class="red">*</span>Logo地址：</th>
        <td><input type="text" name="top_pic" value="<?php echo ($set["top_pic"]); ?>" class="px" id="pic" style="width:400px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic')">预览</a></td> 
       </tr>
       <tr>
         <th>表单提交限制：</th>
         <td>
           <input type="checkbox" name="endtime"     id="times"  value="1" <?php if($limit_info["enddate"] != 0): ?>checked<?php endif; ?> />限定时间 &nbsp;
           <input type="checkbox" name="today_total" id="today" value="1" <?php if($limit_info["today_total"] != 0): ?>checked<?php endif; ?> />限定每日量 &nbsp;
           <input type="checkbox" name="sub_total"   id="total"  value="1" <?php if($limit_info["sub_total"] != 0): ?>checked<?php endif; ?> />限定全部总量 &nbsp;
         </td>
       </tr>
       <tr id="times_ck" <?php if($limit_info["enddate"] == 0): ?>style="display:none;"<?php else: ?>style="display:;"<?php endif; ?>>
          <th> </th>
          <td>
            截止<input type="input" class="px" id="end_value" value="<?php if($limit_info["enddate"] == ''): echo (date("Y-m-d",$now)); else: echo (date("Y-m-d",$limit_info["enddate"])); endif; ?>" onClick="WdatePicker()" name="end_value" />
          </td>
        </tr>
        <tr  id="today_ck" <?php if($limit_info["today_total"] == 0): ?>style="display:none;"<?php else: ?>style="display:;"<?php endif; ?>>
          <th> </th>
          <td>
              每日<input type="text" class="px" name="today_value" value="<?php echo ($limit_info["today_total"]); ?>">
          </td>
        <tr  id="total_ck" <?php if($limit_info["sub_total"] == 0): ?>style="display:none;"<?php else: ?>style="display:;"<?php endif; ?>>
          <th> </th>
          <td>
              总量<input type="text"  class="px" name="sub_value" value="<?php echo ($limit_info["sub_total"]); ?>">
          </td>
       </tr>
       <tr> 
        <th><span class="red"></span>提交成功提示：</th>
        <td><input type="text" id="successtip" name="succ_info" value="<?php echo ($set["succ_info"]); ?>" class="px" style="width:400px;" /> 默认：提交成功</td> 
       </tr>
       <tr> 
        <th><span class="red"></span>提交失败提示：</th>
        <td><input type="text" id="failtip" name="err_info" value="<?php echo ($set["err_info"]); ?>" class="px" style="width:400px;" /> 默认：提交失败</td> 
       </tr>
        <TR>
                  <TH valign="top"><label for="info">图文详细页内容：</label></TH>
                  <TD><textarea name="detail" id="content"  rows="5" style="width:590px;height:360px"><?php echo ($set["detail"]); ?></textarea></TD>
                </TR>  
       <tr>         
       <th>&nbsp;</th>
       <td>
      <input type="hidden" name="set_id" value="<?php echo ($set["set_id"]); ?>" />
       <button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button> &nbsp; <a href="<?php echo U('Groupon/products',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">取消</a></td> 
       </tr> 
      </tbody> 
     </table> 
     </div>
    
   </form> 
  </div> 
<script language="javascript">
$(function(){

	$("#form").valid([
	{ name:"name",simple:"名称",require:true},
	{ name:"keyword",simple:"关键词",require:true}
		
	],true,true);
  $("#times").click(function(){
      if($("#times:checked").val() == 1){
        $("#times_ck").css('display','');
      }else{
        $("#times_ck").css('display','none');
      }
  });

  $("#today").click(function(){
      if($("#today:checked").val() == 1){
        $("#today_ck").css('display','');
      }else{
        $("#today_ck").css('display','none');
      }
  });

  $("#total").click(function(){
      if($("#total:checked").val() == 1){
        $("#total_ck").css('display','');
      }else{
        $("#total_ck").css('display','none');
      }
  });


})
function setlatlng(longitude,latitude){
  art.dialog.data('longitude', longitude);
  art.dialog.data('latitude', latitude);
  // 此时 iframeA.html 页面可以使用 art.dialog.data('test') 获取到数据，如：
  // document.getElementById('aInput').value = art.dialog.data('test');
  art.dialog.open('<?php echo U('Map/setLatLng',array('token'=>$token,'id'=>$id));?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
  <div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>