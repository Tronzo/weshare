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


<div class="content" >



<div class="cLineB">

  <h4>现场摇一摇活动设置<span class="FAQ">每次只能开启一个活动，上个活动未结束不能创建下个活动</span></h4>

  

 </div>

         <div class="cLineC" style="line-height: 32px;">

 <a href="<?php echo U('Shake/add');?>" class="btnGrayS vm bigbtn" >添加活动</a>　 

</div>

 

 <div class="msgWrap form">



<div class="bdrcontent">

<div id="div_ptype">

<table class="ListProduct" border="0" style="margin-bottom:20px; border:2px #0b94fe solid" cellSpacing="0" cellPadding="0" width="100%">

<thead>

<tr>

<th style=" width:180px;">正在进行的活动名称</th>                 

<th style=" width:110px;">客户端发送间隔</th>

<th>前台发送间隔</th>

<th>前台显示人数</th>

<th>前台背景图片</th>

<th>摇晃类型</th>

<th style=" width:150px;" class="norightborder">操作</th>

</tr>

</thead>



<tr>

<?php if($actinfo != NULL): ?><td><?php echo ($actinfo["acttitle"]); ?></td>

<td><?php echo ($actinfo["clienttime"]); ?></td>

<td><?php echo ($actinfo["showtime"]); ?></td>

<td><?php echo ($actinfo["shownum"]); ?></td>

<td><img style="width:100px" src="<?php echo ($actinfo["pass"]); ?>"></td>

<td><?php echo ($actinfo["shaketype"]); ?></td>

<td class="norightborder">

    <?php if($actinfo['isopen'] == 0): ?><a href="<?php echo U('Shake/change',array('id'=>$actinfo['id'],'actid'=>0,'token'=>$_SESSION['token']));?>">启动</a>&nbsp;&nbsp;&nbsp;

    <?php else: ?> <a href="<?php echo U('Shake/change',array('id'=>$actinfo['id'],'actid'=>1,'token'=>$_SESSION['token']));?>">停止</a>&nbsp;&nbsp;&nbsp;

    <a target="_blank" href="<?php echo U('Shake/show',array('token'=>$_SESSION['token']));?>">前台</a>&nbsp;&nbsp;&nbsp;<?php endif; ?>

    <a href="<?php echo U('Shake/edit',array('id'=>$actinfo['id'],'token'=>$_SESSION['token']));?>" >编辑</a>&nbsp;&nbsp;&nbsp;

    <a href="<?php echo U('Shake/change',array('id'=>$actinfo['id'],'actid'=>2,'token'=>$_SESSION['token']));?>" title="统计活动人数并关闭活动，无法再次开启">关闭</a>

</td>

<?php else: ?>

<td colspan="7" style="text-align:center">目前没有进行中的活动哦</td><?php endif; ?>

</tr>



</table>



<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">

<thead>

<tr>

<th style=" width:120px;">过往活动名称</th>                 

<th style=" width:70px;">结束时间</th>

<th>参与人数</th>

<th>摇晃类型</th>

<th style=" width:100px;" class="norightborder">操作</th>

</tr>

</thead>

<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

<td><?php echo ($vo["acttitle"]); ?></td>

<td><?php echo (date("Y-m-d",$vo["endtime"])); ?></td>

<td><?php echo ($vo["joinnum"]); ?></td>

<td><?php echo ($vo["shaketype"]); ?></td>

<td class="norightborder">

	<a target="ddd" href="<?php echo U('Shake/check',array('id'=>$vo['id'],'token'=>$_SESSION['token']));?>">查看成绩</a>&nbsp;&nbsp;

	<a href="<?php echo U('Shake/delold',array('id'=>$vo['id']));?>">删除</a>

</td>

</tr><?php endforeach; endif; else: echo "" ;endif; ?>

               

  </table>

</div>

</div>

<div class="footactions" style="padding-left:10px">

  <div class="pages"><?php echo ($page); ?></div>

</div>

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