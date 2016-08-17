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


<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<div class="tab">
<ul>
<li class="<?php if(ACTION_NAME == 'index'): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Medical/index',array('token'=>$token,'addtype'=>'medical'));?>">挂号设置</a></li>
<li class="<?php if(ACTION_NAME == 'reser_manage'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Medical/reser_manage',array('token'=>$token));?>">预约管理</a></li>
<!-- <li class="<?php if(ACTION_NAME == 'housetype'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Medical/searchMedical',array('token'=>$token));?>">预约查询</a></li>
<li class="<?php if(ACTION_NAME == 'album'): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('Medical/totalMedical',array('token'=>$token));?>">预约统计</a></li> -->
<li class="<?php if(ACTION_NAME == 'aboutus'): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('Medical/aboutus',array('token'=>$token));?>">医院简介</a></li>
<li class="<?php if(ACTION_NAME == 'setIndex'): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('Medical/setIndex',array('token'=>$token));?>">首页配置</a></li>
</ul>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo Common;?>/default_user_com.css" media="all">
<script src="<?php echo RES;?>/js/select/js/jquery.js"></script>
<script src="<?php echo RES;?>/js/select/js/comm.js"></script>
<script src="<?php echo RES;?>/js/select/js/linkagesel-min.js"></script>

<script src="<?php echo STATICS;?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo STATICS;?>/artDialog/plugins/iframeTools.js"></script>

<link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
 <script>
    jQuery(document).ready(function(){
      jQuery("#formID").validationEngine();
    });
</script>

<style>

  .maroon{ color: red;
  }
</style>
<div class="content">
<div class="cLineB">
  <h4>微医疗首页回复配置</h4><!--a href="javascript:history.go(-1);return false;" class="right btnGrayS vm" style="margin-top:-27px">返回</a-->
 </div>
 <!--tab start-->

<!--tab end-->
    <div class="msgWrap bgfc" style="margin-top:10px;">
      <form class="form" method="post" action="" id="formID" target="_top" enctype="multipart/form-data">

        <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
            <tbody>
                <tr>
                    <th width="120">触发关键词：</th>
                    <td> <input type="text" name="keyword" id="keyword"  class="px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项"  value="<?php echo (($medicalSet['keyword'])?($medicalSet['keyword']):'微医疗'); ?>"/>
                    <span class="maroon">*</span>
                    <span class="help-inline">如：医疗 或者 微医疗</span>
                    </td>
                </tr>
                <tr>
                    <th width="120">图文标题：</th>
                    <td>
                         <input type="text" name="title" id="title" placeholder="某某医院，情人节来就送微创手术礼包" value="<?php echo ($medicalSet['title']); ?>" class="px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项" />
                         <span class="maroon">* 图文封面标题</span>
                     </td>
                </tr>

                 <tr>
                    <th width="120">回复图片：</th>
                    <td>
                     <p>
                         <img class="thumb_img" id="head_url_src" src="<?php echo (($medicalSet['head_url'])?($medicalSet['head_url']):'http://placehold.it/350x150&text=请上传图片'); ?>" style="max-height:100px;">
                         <input type="input" class="px" id="head_url" value="<?php echo ($medicalSet['head_url']); ?>" name="head_url" >

                         <span class="help-inline">
                              <script src="<?php echo STATICS;?>/upyun.js"></script><a href="###" onclick="upyunPicUpload('head_url',365,158,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('head_url')">预览</a>
                              <span class="maroon">图片大小不超过300K (仅图文回复显示)</span>
                         </span>
                     </p>
                    </td>
                </tr>

                 <tr>
                    <th width="120">图文介绍：</th>
                    <td>
                    <textarea style="border: 1px solid #D8D7D7;" name="info" id="info" cols="80" placeholder="某某医院，情人节来就送微创手术礼包"  rows="10" data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($medicalSet['info']); ?></textarea>
                        <span class="maroon">* 仅仅在图文回复里显示(100字以内)</span>
                     </td>
                </tr>

                 <tr>
                    <th width="120">首页幻灯片</th>
                    <td>
                        <select id="album_id" name="album_id" class="input-medium valid" medicalSet>
                            <option value="0">请选择相册 [幻灯片]</option>
                                <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>" <?php if($vo['id'] == $medicalSet['album_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['title']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                          </select>
                    <span class="maroon">如选择：微医疗首页 ［建议最多5张，3张效果更好］</span>
                     ，如果没有请去：<a href="<?php echo U('Photo/add',array('token'=>$token,'poid'=>$medicalSet['album_id']));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">添加幻灯片</a>
                     </td>
                </tr>
                <tr>
                    <th width="120">医院视频:</th>
                    <td>
                        <input type="text" name="video" placeholder="此处可以填写医院的宣传视频" id="video" class="span4" style="width:480px" value="<?php echo ($medicalSet['video']); ?>" >(只有默认模板会显示视频) 没有则留空.<p>
       支持优酷视频地址如：http://v.youku.com/v_show/id_XNDA1ODEyNjE2.html <br>
       腾讯fash视频地址：如http://static.video.qq.com/TPout.swf?vid=v0119s27wd5&amp;auto=0 <br>
       也支持mp4和ogg 格式地址 http://www.w3school.com.cn/example/html5/mov_bbb.mp4 </p>
                    </td>
                </tr>
                <tr>
        <th width="120">首页模板：</th>
                  <TD>
    <input type="text" id="selecttpl" class="px" value="已选择模板 <?php echo ($medicalSet['tpid']); ?>" disabled size="40"  />
    <a class="btn btn-primary btn_submit  J_ajax_submit_btn" onclick="chooseTpl('tpid','selecttpl',1)">选择模板</a>
    <a class="btn btn-primary btn_submit  J_ajax_submit_btn" onclick="viewTpl()">预览</a> <font color="red">[请注意,并不是所有模板都支持,如果发现所选模板显示不正确,请另换一个]</font>
    <script>
        function viewTpl(){
            var tid = $('#tpid').val();
            chooseTpl(tid,'',2);
        }
    </script>
    <input type="hidden" class="px" id="tpid" value="<?php echo ($medicalSet['tpid']); ?>" name="tpid" style="width:250px">
  </TD>

                </tr>
                <tr>
                    <th width="120">菜单列表名称：</th>
                    <td>
                     医院简介：<input type="text" name="menu1" class="px" value="<?php echo (($medicalSet['menu1'])?($medicalSet['menu1']):'医院简介'); ?>"><br>
 <input type="input" class="px"  value="<?php echo ($medicalSet['picurl1']); ?>" name="picurl1" id="img" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png"> <a href="###" onclick="chooseFile('img','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     热点聚焦：<input type="text" name="menu2" value="<?php echo (($medicalSet['menu2'])?($medicalSet['menu2']):'热点聚焦'); ?>" class="px"><br>
<input type="input" class="px"  value="<?php echo ($medicalSet['picurl2']); ?>" name="picurl2" id="img2" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img2','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img2',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img2')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img2\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     医院专家：<input type="text" name="menu3" value="<?php echo (($medicalSet['menu3'])?($medicalSet['menu3']):'医院专家'); ?>"class="px"><br>
<input type="input" class="px"  value="<?php echo ($medicalSet['picurl3']); ?>" name="picurl3" id="img3" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img3','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img3',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img3')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img3\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     尖端设备：<input type="text" name="menu4" value="<?php echo (($medicalSet['menu4'])?($medicalSet['menu4']):'尖端设备'); ?>" class="px"><br>
<input type="input" class="px"  value="<?php echo ($medicalSet['picurl4']); ?>" name="picurl4" id="img4" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img4','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img4',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img4')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img4\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     康复案例：<input type="text" name="menu5" value="<?php echo (($medicalSet['menu5'])?($medicalSet['menu5']):'康复案例'); ?>" class="px"><br>
<input type="input" class="px"  value="<?php echo ($medicalSet['picurl5']); ?>" name="picurl5" id="img5" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img5','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img5',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img5')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img5\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     先进技术：<input type="text" name="menu6" value="<?php echo (($medicalSet['menu6'])?($medicalSet['menu6']):'先进技术'); ?>" class="px"><br>
<input type="input" class="px"  value="<?php echo ($medicalSet['picurl6']); ?>" name="picurl6" id="img6" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img6','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img6',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img6')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img6\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     研发药物：<input type="text" name="menu7" value="<?php echo (($medicalSet['menu7'])?($medicalSet['menu7']):'研发药物'); ?>" class="px"><br>
<input type="input" class="px"  value="<?php echo ($medicalSet['picurl7']); ?>" name="picurl7" id="img7" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img7','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img7',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img7')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img7\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     就医指南：<input type="text" name="menu8" value="<?php echo (($medicalSet['menu8'])?($medicalSet['menu8']):'就医指南'); ?>" class="px"><br>
<input type="input" class="px"  value="<?php echo ($medicalSet['picurl8']); ?>" name="picurl8" id="img8" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img8','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img8',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img8')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img8\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     症状自查：<input type="text" name="menu9" value="<?php echo (($medicalSet['menu9'])?($medicalSet['menu9']):'症状自查'); ?>" class="px"><br>
<input type="input" class="px"  value="<?php echo ($medicalSet['picurl9']); ?>" name="picurl9" id="img9" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img9','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img9',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img9')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img9\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     官方活动：<input type="text" name="menu10" value="<?php echo (($medicalSet['menu10'])?($medicalSet['menu10']):'官方活动'); ?>" class="px"><br>
<input type="input" class="px"  value="<?php echo ($medicalSet['picurl10']); ?>" name="picurl10" id="img10" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img10','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img10',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img10')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img10\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                    </td>
                </tr>

                 <tr>
                    <th width="120"><?php echo (($medicalSet['menu2'])?($medicalSet['menu2']):'热点聚焦'); ?>：</th>
                    <td>
                          <select id="hotfocus_id" name="hotfocus_id" class="input-medium" >
                                          <option value="0">请选择热点聚焦</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $medicalSet['hotfocus_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有，请先到<a href="<?php echo U('Classify/add',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn"> <strong><font color='red'>文章分类管理</strong></font></a>添加</span> <span class="maroon">注意：只能添加［图文回复］的［新增图文自定义回复］！</span>
                     </td>
                </tr>
                <tr>
                    <th width="120"><?php echo (($medicalSet['menu3'])?($medicalSet['menu3']):'医院专家'); ?>：</th>
                    <td>
                          <select id="experts_id" name="experts_id" class="input-medium" >
                                          <option value="0">请选择医院专家</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $medicalSet['experts_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有，请先到<a href="<?php echo U('Classify/add',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn"> <strong><font color='red'>文章分类管理</strong></font></a>添加</span> <span class="maroon">注意：只能添加［图文回复］的［新增图文自定义回复］！</span>
                     </td>
                </tr>
               <tr>
                    <th width="120"><?php echo (($medicalSet['menu4'])?($medicalSet['menu4']):'尖端设备'); ?>：</th>
                    <td>
                          <select id="ceem_id" name="ceem_id" class="input-medium" >
                                          <option value="0">请选择尖端设备</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $medicalSet['ceem_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有，请先到<a href="<?php echo U('Classify/add',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn"> <strong><font color='red'>文章分类管理</strong></font></a>添加</span> <span class="maroon">注意：只能添加［图文回复］的［新增图文自定义回复］！</span>
                     </td>
                </tr>
                 <tr>
                    <th width="120"><?php echo (($medicalSet['menu5'])?($medicalSet['menu5']):'康复案例'); ?>：</th>
                    <td>
                          <select id="Rcase_id" name="Rcase_id" class="input-medium" >
                                          <option value="0">请选择康复案例</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $medicalSet['Rcase_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有，请先到<a href="<?php echo U('Classify/add',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn"> <strong><font color='red'>文章分类管理</strong></font></a>添加</span> <span class="maroon">注意：只能添加［图文回复］的［新增图文自定义回复］！</span>
                     </td>
                </tr>
                 <tr>
                    <th width="120"><?php echo (($medicalSet['menu6'])?($medicalSet['menu6']):'先进技术'); ?>：</th>
                    <td>
                          <select id="technology_id" name="technology_id" class="input-medium" >
                                          <option value="0">请选择先进技术</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $medicalSet['technology_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有，请先到<a href="<?php echo U('Classify/add',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn"> <strong><font color='red'>文章分类管理</strong></font></a>添加</span> <span class="maroon">注意：只能添加［图文回复］的［新增图文自定义回复］！</span>
                     </td>
                </tr>
                 <tr>
                    <th width="120"><?php echo (($medicalSet['menu7'])?($medicalSet['menu7']):'研发药物'); ?>：</th>
                    <td>
                          <select id="drug_id" name="drug_id" class="input-medium" >
                                          <option value="0">请选择研发药物</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $medicalSet['drug_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有，请先到<a href="<?php echo U('Classify/add',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn"> <strong><font color='red'>文章分类管理</strong></font></a>添加</span> <span class="maroon">注意：只能添加［图文回复］的［新增图文自定义回复］！</span>
                     </td>
                </tr>
                 <tr>
                    <th width="120"><?php echo (($medicalSet['menu9'])?($medicalSet['menu9']):'症状自查'); ?>：</th>
                    <td>
                          <select id="symptoms_id" name="symptoms_id" class="input-medium" >
                                          <option value="0">请选择症状分类</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $medicalSet['symptoms_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有，请先到<a href="<?php echo U('Classify/add',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn"> <strong><font color='red'>文章分类管理</strong></font></a>添加</span> <span class="maroon">注意：只能添加［图文回复］的［新增图文自定义回复］！</span>
                     </td>
                </tr>

                 <tr>
                    <th width="120"><?php echo (($medicalSet['menu10'])?($medicalSet['menu10']):'官方活动'); ?>：</th>
                    <td>
                          <select id="evants_id" name="evants_id" class="input-medium" >
                                          <option value="0">请选择官方活动</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $medicalSet['evants_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有，请先到<a href="<?php echo U('Classify/add',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn"> <strong><font color='red'>文章分类管理</strong></font></a>添加</span> <span class="maroon">注意：只能添加［图文回复］的［新增图文自定义回复］！</span>
                     </td>
                </tr>

                  <tr>
                    <td>
                    <?php if($medicalSet['id'] != ''): ?><input type="hidden" name="id" value="<?php echo ($medicalSet['id']); ?>" /><?php endif; ?>
                      <input type="hidden" name="token" value="<?php echo ($token); ?>" />
                        <button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
                        <a href="javascript:history.go(-1);" class="btn btn-primary btn_submit  J_ajax_submit_btn">取消</a>
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