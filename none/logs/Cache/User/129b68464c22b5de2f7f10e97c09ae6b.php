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
  
        <div class="content">
          <div class="cLineB">
              <h4 class="left">微邀请管理</h4>
                 
<div class="searchbar right">
<form method="post" action="">
<input type="text" id="msgSearchInput" class="txt left" placeholder="输入关键词搜索" name="searchkey" value="<?php echo ($key); ?>">
<input type="submit" value="搜索" id="msgSearchBtn" href="" class="btnGrayS" title="搜索">
</form>
</div>
              <div class="clr"></div>
          </div>
          <div class="cLine">
            <div class="pageNavigator left">
			<a href="<?php echo U('Invites/add',array('token'=>$token));?>" title='新增微邀请内容' class='btn btn-primary btn_submit  J_ajax_submit_btn'><img src="<?php echo RES;?>/images/product/add.png" class="vm" />新增微邀请内容</a>
            </div>
          
            <div class="clr"></div>
          </div>
          <div class="msgWrap">
          <form method="post"  action="" id="info" >
          <input name="delall"  type="hidden" value="" />
           <input name="wxid"  type="hidden" value="" />
            <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR>
                    <TH class="select">选择</TH>
                    <TH>邀请标题</TH>
                    <TH>关键词</TH>
                    <TH>邀请类型</TH>
                    <TH>外链代码</TH>
                    <TH style=" width:300px;">操作</TH>
                </TR>
              </THEAD>
              <TBODY>
         <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><TD>  <input type="checkbox" name='del_id[]' value="239" class="checkitem"></TD>
                    <TD><?php echo ($list["title"]); ?></TD>
                    <TD><?php echo ($list["keyword"]); ?></TD>
                    <TD><?php if($list["type"] == 1): ?>会议
				    <?php elseif($list["type"] == 2): ?>聚会
				    <?php elseif($list["type"] == 3): ?>活动<?php else: endif; ?></TD>
                     <TD>邀请 <?php echo ($list["id"]); ?></TD>
                   <TD align="center">
				   <a href="index.php?g=User&m=Invites&a=info&type=<?php echo ($list["type"]); ?>&id=<?php echo ($list["id"]); ?>&token=<?php echo ($list["token"]); ?>" class="button icon arrowright">查看名单</a>
				   <a href="index.php?g=User&m=Invites&a=edit&id=<?php echo ($list["id"]); ?>" class="button icon edit">编辑</a>
				   <a href="javascript:drop_confirm('您确定要删除吗?', 'index.php?g=User&m=Invites&a=del&id=<?php echo ($list["id"]); ?>&token=<?php echo ($list["token"]); ?>');" class="button danger icon remove">删除</a></TD>
          
                </TR><?php endforeach; endif; else: echo "" ;endif; ?>
                         
              </TBODY>
            </TABLE>
           </form> 
</div>
<div class="cLine">
<div class="pageNavigator right">
<div class="pages"><?php echo ($page); ?></div>
</div>
<div class="clr"></div>
</div>
</div>
  <!--底部-->
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>