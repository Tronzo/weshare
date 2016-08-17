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
<style type="text/css">
.plug-menu {
width:36px;
height:36px;
border-radius:36px;
-moz-box-shadow:0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25);
-webkit-box-shadow:0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25);
box-shadow:0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25);
background-color: FF0000;
position:relative
}
.plug-menu span {
display: block;
width:28px;
height:28px;
background: url(tpl/User/default/common/images/photo/plugmenu.png) no-repeat;
background-size: 28px 28px;
text-indent: -999px;
position:absolute;
top:4px;
left:4px;
overflow: hidden;
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/catemanu/style2.css" media="all">
<script src="<?php echo RES;?>/js/cart/jscolor.js" type="text/javascript"></script>
<div class="content">
<div class="cLineB"><h4>3G站点底部菜单设置</h4></div>
          
         <ul id="tags">
              <li class="selectTag"><a href="<?php echo U('Catemenu/index');?>">底部菜单分类设置</a> </li>
              <li><a href="<?php echo U('Catemenu/styleSet');?>">底部菜单风格选择</a> </li>
              <li><a href="<?php echo U('Home/plugmenu');?>">菜单颜色与版权</a> </li>
              <div class="clr"></div>
          </ul>
          <div class="cLineB" style="padding:0;margin:0"></div>

<div class="ftip" style="margin:10px 0 0 0">一级主菜单最多4个，菜单风格1-8无子菜单，菜单风格9-16子菜单最多10个。</div>

         <div class="cLineC" style="line-height: 32px;">
 <a <?php if($fid==0){if($countMenu>=4){;?>
     href="javascript:alert('主菜单最多4个');"
     <?php }else{;?> 
     href="<?php echo U('Catemenu/add');?>"
      <?php }}else{if($countMenu>=10){;?>
    href="javascript:alert('子菜单最多2个');"
    <?php }else{;?>
    href="<?php echo U('Catemenu/add',array('fid'=>$fid));?>"
  <?php }};?>
      class="btn btn-primary btn_submit  J_ajax_submit_btn">添加<?php if($fid != 0): echo ($thisCatemanu["name"]); ?>子<?php endif; ?>菜单</a>　 
</div>
 
 <div class="msgWrap form">

<div class="bdrcontent">
<div id="div_ptype">
<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
<thead>
<tr>
                    <th style=" width:120px;">菜单名称</th>
                   
<th style=" width:70px;">显示顺序</th>
<th><nobr>图标地址(透明png图标)</nobr></th>
<th>外链地址 </th>
<th style=" width:80px;"  >首页显示</th>
                        <th style=" width:140px;" class="norightborder">操作</th>
</tr>
</thead>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["name"]); ?></td>

<td><?php echo ($vo["orderss"]); ?></td>
<td><div class="cateimg"><img src="<?php echo ($vo["picurl"]); ?>" class="cateimg_small"  /><img src="<?php echo ($vo["picurl"]); ?>" class="cateimg_big"  /></div></td>
<td><?php echo ($vo["url"]); ?></td>
<td><?php if(($vo["status"]) == "1"): ?>显示<?php else: ?>不显示<?php endif; ?></td>
<td class="norightborder">

    <?php if ($vo['fid']==0){?><a href="<?php echo U('Catemenu/index',array('fid'=>$vo['id']));?>">子菜单</a><?php }?>
    <a href="<?php if ($vo['fid']==0){ echo U('Catemenu/edit',array('id'=>$vo['id'])); }else{ echo U('Catemenu/edit',array('id'=>$vo['id'],'fid'=>$vo['fid'])); }?>">编辑</a>
    <a href="<?php if ($vo['fid']==0){ echo U('Catemenu/del',array('id'=>$vo['id'])); }else{ echo U('Catemenu/del',array('id'=>$vo['id'],'fid'=>$vo['fid'])); }?>">删除</a>
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