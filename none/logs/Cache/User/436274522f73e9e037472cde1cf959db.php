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

<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<div class="tab">
<ul>
<li class="<?php if(ACTION_NAME == 'index'): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Estate/index',array('token'=>$token));?>">楼盘简介</a></li>
<li class="<?php if(ACTION_NAME == 'son'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Estate/son',array('token'=>$token));?>">子楼盘</a></li>
<li class="<?php if(ACTION_NAME == 'housetype'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Estate/housetype',array('token'=>$token));?>">楼盘户型</a></li>
<li class="<?php if(ACTION_NAME == 'album'): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('Estate/album',array('token'=>$token));?>">楼盘相册</a></li>
<li class="<?php if(ACTION_NAME == 'impress'): ?>current<?php endif; ?> tabli" id="tab5" ><a href="<?php echo U('Estate/impress',array('token'=>$token));?>" >房友印象</a></li>
<li class="<?php if(ACTION_NAME == 'expert'): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('Estate/expert',array('token'=>$token));?>">专家点评</a></li>
<li class="<?php if(ACTION_NAME == 'reservation'): ?>current<?php endif; ?> tabli" id="tab7"><a href="<?php echo U('Estate/reservation',array('token'=>$token));?>">预约管理</a></li>

<li class="<?php if(ACTION_NAME == 'aboutus'): ?>current<?php endif; ?> tabli" id="tab7"><a href="<?php echo U('Estate/aboutus',array('token'=>$token));?>">关于我们</a></li>
</ul>
</div>
<script src="./tpl/User/default/common/js/date/WdatePicker.js"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

 <script src="/tpl/static/upyun.js"></script>
<div class="content">

<link rel="stylesheet" type="text/css" href="<?php echo Common;?>/default_user_com.css" media="all">
<div class="cLineB">

 </div>
  <div class="msgWrap bgfc">
  <form action="" method="post" class="form-horizontal form-validate" novalidate="novalidate">
  <input type="hidden" name="token" value="<?php echo ($token); ?>" />
<?php if($es_data['id'] != ''): ?><input type="hidden" name="id" value="<?php echo ($es_data['id']); ?>" /><?php endif; ?>
  <div class="control-group">
    <label for="title" class="control-label">图文消息标题：</label>
    <div class="controls">
      <input type="text" name="title" id="title" maxlength="10" class="span4" value="<?php echo ($es_data['title']); ?>" schoolSet><span class="maroon">*</span><span class="help-inline">触发关键词后返回图文消息标题</span>
    </div>
  </div>
  <div class="control-group">
    <label for="keyword" class="control-label">触发关键词：</label>
    <div class="controls">
      <input type="text" name="keyword" id="keyword" class="span4" schoolSet value="<?php echo ($es_data['keyword']); ?>"><span class="maroon">*</span><span class="help-inline">只能设置一个关键字</span>
    </div>
  </div>

  <div class="control-group">
    <label for="coverurl" class="control-label">图文消息封面：</label>
    <div class="controls">
<?php if($es_data['cover'] != ''): ?><img class="thumb_img" id="cover_src" src="<?php echo (($es_data['cover'])?($es_data['cover']):''); ?>" style="max-height:100px;"><?php endif; ?>
      <input type="text" class="px" id="cover" value="<?php echo (($es_data['cover'])?($es_data['cover']):''); ?>" name="cover" >

          <span class="help-inline">
               <script src="<?php echo STATICS;?>/upyun.js"></script><a href="###" onclick="upyunPicUpload('cover',720,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('cover')">预览</a>
              <span class="help-inline">建议尺寸：宽720像素，高400像素</span>
          </span>
       </div>
  </div>
  <div class="control-group">
         <label class="control-label">楼盘头部图片：</label>
                                    <div class="controls">
                                    <?php if($es_data['banner'] != ''): ?><img class="thumb_img" id="banner_src" src="<?php echo (($es_data['banner'])?($es_data['banner']):''); ?>" style="max-height:100px;"><?php endif; ?>
                                            <input type="text" id="banner" name="banner" class="px" value="<?php echo (($es_data['banner'])?($es_data['banner']):''); ?>">
                                            <span class="help-inline">
                                            <a href="###" onclick="upyunPicUpload('banner',720,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('banner')">预览</a>
                                            <span class="help-inline">建议尺寸：宽720像素，高350像素</span>
                                        </span>
                                    </div>
                                </div>
  <div class="control-group">
    <div class="control-group">
                                    <label class="control-label">户型头部图片：</label>
                                    <div class="controls">
<?php if($es_data['house_banner']): ?><img class="thumb_img" id="house_banner_src" src="<?php echo (($es_data['house_banner'])?($es_data['house_banner']):''); ?>" style="max-height:100px;"><?php endif; ?>

                                        <input type="text" name="house_banner" id="house_banner" class="px" value="<?php echo (($es_data['house_banner'])?($es_data['house_banner']):''); ?>">
                                        <span class="help-inline">
                                             <script src="<?php echo STATICS;?>/upyun.js"></script><a href="###" onclick="upyunPicUpload('house_banner',720,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('house_banner')">预览</a>
                                            <span class="help-inline">建议尺寸：宽720像素，高350像素</span>
                                        </span>
                                    </div>
                                </div>
  </div>

  <div class="control-group">
                                    <label for="album_title" class="control-label">全景相册名称：</label>
                                    <div class="controls">
                                    <select id="panorama_id" name="panorama_id" class="input-medium" schoolSet>
                                          <option value="0">请选择360全景相册</option>
                                            <?php if(is_array($panorama)): $i = 0; $__LIST__ = $panorama;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['pid']); ?>" <?php if($vo['pid'] == $es_data['panorama_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有，请先到 <a href="<?php echo U('Panorama/add',array('token'=>$token));?>" class="btn"><strong><font color='red'>360°全景</strong></font></a>添加</span>

                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">楼盘新闻：</label>
                                    <div class="controls">
                                     <select id="classify_id" name="classify_id" class="input-medium" schoolSet>
                                          <option value="0">请选择3G楼盘新闻</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $es_data['classify_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有，请先到<a href="<?php echo U('Classify/add',array('token'=>$token));?>" class="btn"> <strong><font color='red'>文章分类管理</strong></font></a>添加</span> <span class="maroon">注意：只能添加［图文回复］的［新增图文自定义回复］！</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">预约版面：</label>
                                    <div class="controls">
                                     <select id="res_id" name="res_id" class="input-medium" schoolSet>
                                          <option value="0">请选择预约版面</option>
                                            <?php if(is_array($reslist)): $i = 0; $__LIST__ = $reslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['rid']); ?>" <?php if($vo['rid'] == $es_data['res_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['title']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有，请先到<a href="<?php echo U('Reservation/index',array('token'=>$token));?>" class="btn"><strong><font color='red'>预约管理</strong></font></a>添加</span>
                                    </div>
                                </div>
  <div class="control-group">
    <label for="video" class="control-label">楼盘视频：</label>
    <div class="controls">
       <input type="text" name="video" id="video" class="span4" style="width:480px" value="<?php echo ($es_data['video']); ?>"><p>
       支持优酷视频地址如：http://v.youku.com/v_show/id_XNDA1ODEyNjE2.html <br>
       腾讯fash视频地址：如http://static.video.qq.com/TPout.swf?vid=v0119s27wd5&amp;auto=0 <br>
       也支持mp4和ogg 格式地址 http://www.w3school.com.cn/example/html5/mov_bbb.mp4 </p>
    </div>
  </div>

<script>
function setlatlng(longitude,latitude){
  art.dialog.data('longitude', longitude);
  art.dialog.data('latitude', latitude);
  // 此时 iframeA.html 页面可以使用 art.dialog.data('test') 获取到数据，如：
  // document.getElementById('aInput').value = art.dialog.data('test');
  art.dialog.open('<?php echo U('Map/setLatLng',array('token'=>$token,'id'=>$id));?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
<div class="control-group">
    <label for="place" class="control-label">楼盘地址地址：</label>
    <div class="controls">
      <div class="input-prepend">
         <input type="text" id="suggestId" class="span4 px"  name="place" value="<?php echo ($es_data['place']); ?>" class="input-xlarge" schoolSet> <span class="maroon">*</span>
      </div>
    </div>
  </div>
    <div class="control-group">
    <label for="suggestId" class="control-label">地图标识：</label>
         <div class="controls">
         经度 <input type="text" id="longitude"  name="lng" size="14" class="px" value="<?php echo ($es_data['lng']); ?>" /> 纬度 <input type="text"  name="lat" size="14" id="latitude" class="px" value="<?php echo ($es_data['lat']); ?>" /> <a href="###" onclick="setlatlng($('#longitude').val(),$('#latitude').val())">在地图中查看/设置</a>
         </div>
    </div>
<div class="control-group">
         <label for="estate_desc" class="control-label">楼盘简介：</label>
         <div class="controls">
             <textarea class="px" id="content" name="estate_desc" style="width: 605px; height: 150px;display:none;"><?php echo ($es_data['estate_desc']); ?></textarea>


         </div>
     </div>
     <div class="control-group">
         <label for="project_brief" class="control-label">项目简介：</label>
         <div class="controls">
             <textarea class="px" id="content1" name="project_brief" style="width: 605px; height: 150px;display:none; "><?php echo ($es_data['project_brief']); ?></textarea>

         </div>
     </div>
     <div class="control-group">
        <label for="traffic_desc" class="control-label">交通配套：</label>
        <div class="controls">
            <textarea class="px"id="content2" name="traffic_desc" style="width: 605px; height: 150px; display:none;"><?php echo ($es_data['traffic_desc']); ?></textarea>
			
        </div>
    </div>
 <?php if($es_data['id'] != ''): ?><input type="hidden" name="id" value="<?php echo ($es_data['id']); ?>" /><?php endif; ?>
   <div class="form-actions">
      <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>　<button type="button" class="btn">取消</button>
    </div>
</form>
  </div>


        </div>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>