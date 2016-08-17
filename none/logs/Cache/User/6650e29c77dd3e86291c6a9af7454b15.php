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
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/default_user_com.css" media="all">
<div class="content">
          <div class="cLineB">
              <h4 class="left">预约管理</h4>
          </div>

          <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：添加一项即可,请勿重复添加。</span> <a class="btn" href="javascript:location.reload()">刷新</a></p>
    </div>
</div>

          <div class="cLine">

            <div class="pageNavigator left">
          <?php if($count == 0): ?><a href="<?php echo U('Estate/reservation_add',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">
                    <img src="tpl/User/default/common/images/pic.png" class="vm">添加预约
                </a><?php endif; ?>
            </div>

            <div class="clr"></div>
          </div>
          <div class="msgWrap">
          <form method="post" action="" id="info">
          <input name="delall" type="hidden" value="del">
           <input name="wxid" type="hidden" value="gh_423dwjkewad">
            <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
              <tr> 
                  <th>预约名称</th>
                      <th>关键字</th>
                      <th>预约电话</th>
                      <!--th>限定量</th>
                      <th>总订单限制</th>
                      <th>开始时间/结束时间</th-->
                      <th>外链地址</th>
                      <th>操作</th>
              </tr>
              </thead>
              <tbody>
                <?php if(is_array($reslist)): $i = 0; $__LIST__ = $reslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                         <td><?php echo ($vo['title']); ?></td>
                        <td><?php echo ($vo['keyword']); ?></td>
                        <td><?php echo ($vo['tel']); ?></td>
                        <!--td><?php if($vo['type'] == 1): ?>时间限制<?php elseif($vo['type'] == 2): ?>限定每日量<?php else: ?>限定全部总量<?php endif; ?></td>
                         <td></td>
                        <td><?php echo ($vo['date']); ?></td-->
                        <td>外链地址 <?php echo ($vo['id']); ?></td>
                        <td >
                             <a href="<?php echo U('Estate/reservation_manage',array('token'=>$vo['token'],'id'=>$vo['id'],'addtype'=>$vo['addtype']));?>" class="btn" title="订单管理">订单管理</a>
                            <a class="btn" href="<?php echo U('Estate/reservation_edit',array('token'=>$vo['token'],'id'=>$vo['id'],'addtype'=>$vo['addtype']));?>" title="编辑">编辑</a> 
                             <a class="btn" href="<?php echo U('Estate/reservation_del',array('token'=>$vo['token'],'id'=>$vo['id'],'addtype'=>$vo['addtype']));?>" onclick="return(confirm('确定要删除吗？'))"  title="删除">删除</a></td>
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