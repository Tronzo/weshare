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

<link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }

</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if(ACTION_NAME == 'index'): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('School/index',array('token'=>$token,'type'=>'semester'));?>">分类管理</a></li>
<li class="<?php if(ACTION_NAME == 'students'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('School/students',array('token'=>$token));?>">学员管理</a></li>
<!-- <li class="<?php if(ACTION_NAME == 'paycost'): ?>current<?php endif; ?> tabli" id="tab2">
<a href="<?php echo U('School/paycost',array('token'=>$token));?>">缴费管理</a></li> -->
<li class="<?php if((ACTION_NAME == 'assess') OR (ACTION_NAME == 'assess_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('School/assess',array('token'=>$token));?>">教师管理</a></li>
<li class="<?php if((ACTION_NAME == 'curriculum') OR (ACTION_NAME == 'assess_course')): ?>current<?php endif; ?> tabli" id="tab3"><a href="<?php echo U('School/curriculum',array('token'=>$token));?>">课程安排</a></li>
<li class="<?php if(ACTION_NAME == 'subscribe' OR (ACTION_NAME == 'subscribe_add')): ?>current<?php endif; ?> tabli" id="tab4"><a href="<?php echo U('School/subscribe',array('token'=>$token));?>">课程预约</a></li>
<li class="<?php if(ACTION_NAME == 'scoresearch' ): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('School/scoresearch',array('token'=>$token));?>">成绩查询</a></li>
<!-- <li class="<?php if(ACTION_NAME == 'campusnews'): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('School/campusnews',array('token'=>$token));?>">校内新闻</a></li> -->
<li class="<?php if(ACTION_NAME == 'cookbook'): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('School/cookbook',array('token'=>$token));?>">食谱安排</a></li>
<li class="<?php if(ACTION_NAME == 'introduction'): ?>current<?php endif; ?> tabli" id="tab7"><a href="<?php echo U('School/introduction',array('token'=>$token));?>">菜单/回复配置</a></li>
</ul>
</div>
<script src="<?php echo STATICS;?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo STATICS;?>/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo STATICS;?>/upyun.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
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
    <script>
    jQuery(document).ready(function(){
      jQuery("#formID").validationEngine();
    });
    </script>
<div class="content">
          <div class="cLineB">
              <h4 class="left">当前位置：微学校 >> 菜单配置项</h4>
              <div class="clr"></div>
          </div>
          <div class="cLineD"></div>
          <div class="msgWrap">
           <div style="background:#fefbe4;border:1px solid #f3ecb9;color:#993300;padding:10px;margin-top:5px;">请先配置好!.</div>
<form class="form" method="post" id="formID" action="" target="_top" enctype="multipart/form-data">

        <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
            <tbody>
                <tr>
                    <th width="120">触发关键词：</th>
                    <td> <input type="text" name="keyword" id="keyword"  class="px" value="<?php echo ($schoolSet['keyword']); ?>" data-validation-engine="validate[required,minSize[2],maxSize[5]]"
                    data-errormessage-value-missing="必须输入出发关键词!" style="width: 400px;"/>
                    <span class="maroon">*</span>
                    <span class="help-inline">如：学校 或者 微学校</span>
                    </td>
                </tr>
                <tr>
                    <th width="120">图文标题：</th>
                    <td>
                         <input type="text" name="title" id="title" placeholder="这里可以填写简单的介绍" value="<?php echo ($schoolSet['title']); ?>" class="px" data-validation-engine="validate[required,minSize[5],maxSize[15]]"
                    data-errormessage-value-missing="你写的太少了" style="width: 400px;"/>
                         <span class="maroon">* 图文封面标题</span>
                     </td>
                </tr>

                 <tr>
                    <th width="120">回复图片：</th>
                    <td>
                     <p>
<?php if($schoolSet['head_url'] != ''): ?><img class="thumb_img" id="head_url_src" src="<?php echo ($schoolSet['head_url']); ?>" style="max-height:100px;"><?php endif; ?>
                         <input type="input" class="px" id="head_url" value="<?php echo ($schoolSet['head_url']); ?>" name="head_url" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传回复图片!"  data-errormessage-custom-error="正确的网址,如: http://www.baidu.com/images/demo.png" style="width: 300px;">

                         <span class="help-inline">
                              <a href="###" onclick="upyunPicUpload('head_url',365,158,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('head_url')">预览</a>
                              <span class="maroon">图片大小不超过300K [365*158](仅图文回复显示)</span>
                         </span>
                     </p>
                    </td>
                </tr>

                 <tr>
                    <th width="120">图文介绍：</th>
                    <td>
                    <textarea style="border: 1px solid #D8D7D7;" name="info" id="info" cols="80" placeholder="" data-validation-engine="validate[required,minSize[15],maxSize[100]]"
                    data-errormessage-value-missing="你写的太少了!"  rows="10"><?php echo ($schoolSet['info']); ?></textarea>
                        <span class="maroon">* 仅仅在图文回复里显示(100字以内)</span>
                     </td>
                </tr>

                 <tr>
                    <th width="120">首页幻灯片</th>
                    <td>
                    <select id="album_id" name="album_id" data-validation-engine="validate[required]"  data-errormessage-value-missing="必须请选择相册哦,否则首页太空虚了!">
                            <option>请选择相册 [幻灯片]</option>
                                <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>" <?php if($vo['id'] == $schoolSet['album_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['title']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                          </select>
                    <span class="maroon">首页背景幻灯片［建议最多5张，3张效果更好］默认模板下背景图尺寸(460*693)</span>
                     ，如果没有请去：<a href="<?php echo U('Photo/add',array('token'=>$token,'poid'=>$schoolSet['album_id']));?>"class="btn btn-primary btn_submit  J_ajax_submit_btn">添加幻灯片</a>&nbsp;
                    <span class="tooltips"><img src="/tpl/Home/wqlcms/common/images/price_help.png" align="absmiddle"><span><font color='red'>请到[ 3G图集 ]创建相册,然后上传图片.<br/>相册要选择[ 显示此相册 ].建议最多5张，3张效果更好.大小不要超过100KB.</font>
                </span></span>
                     </td>
                </tr>

                <tr>
                    <th width="120">背景音乐</th>
                <td>
                    <table><tr><td><a style="width:120px;float:left" id="musicurl_src" class="audio {skin:'blue'}" href="<?php echo (($schoolSet["musicurl"])?($schoolSet["musicurl"]):'http://mp3.weiecn.com/vd.php/17647129/weiecn.mp3'); ?>">音乐播放</a></td><td> <input class="px" name="musicurl" value="<?php echo (($schoolSet["musicurl"])?($schoolSet["musicurl"]):'http://mp3.weiecn.com/vd.php/17647129/weiecn.mp3'); ?>" id="musicurl" style="width:200px;float:left" onchange="$('#musicurl_src').attr('href',this.value"> <a href="###" onclick="chooseFile('musicurl','music')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> &nbsp; 不懂点我
                    <span class="tooltips"><img src="/tpl/Home/wqlcms/common/images/price_help.png" align="absmiddle"><span><font color='red'>如果不需要背景音乐,<br/>留空即可</font>
                </span></span></td></tr></table>
                     </td>
                </tr>
                <tr>
                    <th width="120">首页模板：</th>
                  <TD>
    <input type="text" id="selecttpl" class="px" value="已选择模板 <?php echo ($schoolSet['tpid']); ?>" disabled size="40"  />
    <a class="btn btn-primary btn_submit  J_ajax_submit_btn" onclick="chooseTpl('tpid','selecttpl',1)">选择模板</a>
    <a class="btn btn-primary btn_submit  J_ajax_submit_btn" onclick="viewTpl()">预览</a> <font color="red">[请注意,并不是所有模板都支持,如果发现所选模板显示不正确,请另换一个]</font>
    <script>
        function viewTpl(){
            var tid = $('#tpid').val();
            chooseTpl(tid,'',2);
        }
    </script>
    <input type="hidden" class="px" id="tpid" value="<?php echo ($schoolSet['tpid']); ?>" name="tpid" style="width:250px">
  </TD>

                </tr>

                <tr>
                    <th width="120">菜单列表名称：</th>
                    <td>
                     <input type="text" name="menu1" id="menu1" class="px" value="<?php echo (($schoolSet['menu1'])?($schoolSet['menu1']):'学校环境'); ?>" data-validation-engine="validate[required,minSize[2],maxSize[4]]"> &nbsp;
                     <select id="menu1_id" name="menu1_id" class="input-medium" data-validation-engine="validate[required]"  data-errormessage-value-missing="亲,该项必须选择,学校得介绍一下吧." style="width: 150px;">
                                          <option value="">请选择</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $schoolSet['menu1_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                    <br>
 <input type="input" class="px"  value="<?php echo ($schoolSet['picurl1']); ?>" name="picurl1" id="img" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png"> <a href="###" onclick="chooseFile('img','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     <input type="text" name="menu2" id="menu2" value="<?php echo (($schoolSet['menu2'])?($schoolSet['menu2']):'教师风采'); ?>" class="px" data-validation-engine="validate[required,minSize[2],maxSize[4]]"> &nbsp;
                     <select  style="width: 150px;" disabled><option value=""><i style="font-style: italic;">读取[教师管理]数据</i></option></select><br>
<input type="input" class="px"  value="<?php echo ($schoolSet['picurl2']); ?>" name="picurl2" id="img2" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img2','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img2',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img2')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img2\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                    <br>

                     <input type="text" name="menu3" id="menu3" value="<?php echo (($schoolSet['menu3'])?($schoolSet['menu3']):'同学天地'); ?>"class="px" data-validation-engine="validate[required,minSize[2],maxSize[4]]"> &nbsp;
                     <select id="menu3_id" name="menu3_id" class="input-medium" data-validation-engine="validate[required]"  data-errormessage-value-missing="亲,该项必须选择."style="width: 150px;">
                                          <option value="">请选择</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $schoolSet['menu3_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <br>
<input type="input" class="px"  value="<?php echo ($schoolSet['picurl3']); ?>" name="picurl3" id="img3" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img3','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img3',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img3')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img3\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>

                     <input type="text" name="menu4" id="menu4" value="<?php echo (($schoolSet['menu4'])?($schoolSet['menu4']):'课程介绍'); ?>" class="px" data-validation-engine="validate[required,minSize[2],maxSize[4]]"> &nbsp;
                     <select id="menu4_id" name="menu4_id" class="input-medium" data-validation-engine="validate[required]"  data-errormessage-value-missing="亲,该项必须选择,咱课程得介绍一下吧."style="width: 150px;">
                                          <option value="">请选择</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $schoolSet['menu4_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select><br>
<input type="input" class="px"  value="<?php echo ($schoolSet['picurl4']); ?>" name="picurl4" id="img4" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img4','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img4',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img4')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img4\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     <input type="text" name="menu5" id="menu5" value="<?php echo (($schoolSet['menu5'])?($schoolSet['menu5']):'食谱安排'); ?>" class="px" data-validation-engine="validate[required,minSize[2],maxSize[4]]"> &nbsp;
                    <select  style="width: 150px;" disabled><option value=""><i style="font-style: italic;">默认食谱列表[固定]</i></option></select> <br>
<input type="input" class="px"  value="<?php echo ($schoolSet['picurl5']); ?>" name="picurl5" id="img5" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img5','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img5',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img5')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img5\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     <input type="text" name="menu6" id="menu6" value="<?php echo (($schoolSet['menu6'])?($schoolSet['menu6']):'校内新闻'); ?>" class="px" data-validation-engine="validate[required,minSize[2],maxSize[4]]"> &nbsp;
                     <select id="menu6_id" name="menu6_id" class="input-medium"style="width: 150px;" >
                                          <option value="">请选择</option>
                                            <?php if(is_array($classify)): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cid']); ?>" <?php if($vo['cid'] == $schoolSet['menu6_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select><br>
<input type="input" class="px"  value="<?php echo ($schoolSet['picurl6']); ?>" name="picurl6" id="img6" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img6','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img6',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img6')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img6\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                     <input type="text" name="menu7" id="menu7" value="<?php echo (($schoolSet['menu7'])?($schoolSet['menu7']):'成绩查询'); ?>" class="px" data-validation-engine="validate[required,minSize[2],maxSize[4]]"> &nbsp;
<input type="input" class="px"  value="<?php echo ($schoolSet['picurl7']); ?>" name="picurl7" id="img7" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img7','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img7',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img7')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img7\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                    <input type="text" name="menu8" id="menu8" value="<?php echo (($schoolSet['menu8'])?($schoolSet['menu8']):'家长建议'); ?>" class="px" data-validation-engine="validate[required,minSize[2],maxSize[4]]"> &nbsp;
<input type="input" class="px"  value="<?php echo ($schoolSet['picurl8']); ?>" name="picurl8" id="img8" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img8','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img8',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img8')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img8\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                    <input type="text" name="menu9" id="menu9" value="<?php echo (($schoolSet['menu9'])?($schoolSet['menu9']):'课程预约'); ?>" class="px" data-validation-engine="validate[required,minSize[2],maxSize[4]]"> &nbsp;
<input type="input" class="px"  value="<?php echo ($schoolSet['picurl9']); ?>" name="picurl9" id="img9" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img9','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img9',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img9')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img9\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                    <input type="text" name="menu10" id="menu10" value="<?php echo (($schoolSet['menu10'])?($schoolSet['menu10']):'课程安排'); ?>" class="px" data-validation-engine="validate[required,minSize[2],maxSize[4]]"> &nbsp;
<input type="input" class="px"  value="<?php echo ($schoolSet['picurl10']); ?>" name="picurl10" id="img10" style="width:400px" data-validation-engine="validate[required,custom[url]]" data-errormessage-value-missing="必须选择(上传)图片!!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.yourdomain.com/images/demo.png">  <a href="###" onclick="chooseFile('img10','icon')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> <a href="###" onclick="upyunPicUpload('img10',236,236,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('img10')">预览</a>
  <br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）236 × 236</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img10\').value=this.src" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div>
                    </td>
                </tr>

                  <tr>
                    <td>
                    <?php if($schoolSet['setid'] != ''): ?><input type="hidden" name="setid" value="<?php echo ($schoolSet['setid']); ?>" />
                    <input type="hidden" name="type" value="eidt" /><?php endif; ?>
                      <input type="hidden" name="token" value="<?php echo ($token); ?>" />
                        <button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>

                        <a href="javascript:history.go(-1);" class="btn btn-primary btn_submit  J_ajax_submit_btn left">取消</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <!--底部-->
    </div>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>