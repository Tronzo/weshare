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
  
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo RES;?>/js/cart/jscolor.js" type="text/javascript"></script>
<style type="text/css">
.vipcard{
margin: 0 auto;
position: relative;
height: 159px;
text-align: left;
width: 267px;
}
#cardbg{
height: 159px;
width: 267px;
position:absolute;
border-radius: 8px;
-webkit-border-radius:8px;
-moz-border-radius:8px;
box-shadow: 0 0 4px rgba(0, 0, 0, 0.6);
-moz-box-shadow:0 0 4px rgba(0, 0, 0, 0.6);
-webkit-box-shadow:0 0 8px rgba(0, 0, 0, 0.6);
top:0;
left:0;
z-index:1;
}
.vipcard .logo {
max-height:70px;
position:absolute;
top:8px;
left:5px;
z-index:2;
}
.vipcard .verify {
display:inline-block;
height:40px;
top:105px;
right:12px;
text-align:right;
line-height:24px;
color:#000;
font-size:20px;
text-shadow:0 1px rgba(255, 255, 255, 0.2);
z-index:2;
}

.vipcard h1 {
position:absolute;
right:10px;
top:7px;
text-shadow:0 1px rgba(255, 255, 255, 0.2);
color:#000;
font-size:11px;
line-height:25px;
text-align:right;
font-weight: normal;
z-index:2;
}
.vipcard .verify span {
display:inline-block;
text-align:left;
}
.vipcard .verify em {
display:block;
line-height:13px;
font-size:10px;
font-weight:normal;
font-style:normal;
}
.pdo {
position:absolute;
top:0;
left:0;
display:inline-block;
}
.userinfoArea td {
    padding: 8px 0 0px 15px;
}
#tishi{
text-align: center;display: block;
}
.banner{
display:block; width:213px;height: 278px;overflow: hidden;
}
.banner img{
display:block; width:213px; border:0;
}
.bannerbtn{ position:relative; display:block}
.bannerbtn .qiaodaobtn{ position: absolute; display:block; bottom:0}

</style>
<div class="content">
<div class="cLineB">
<h4 class="left">会员卡</h4>
<div class="searchbar right">
</div>
<div class="clr"></div>
</div>
<div class="cLine">
<div class="pageNavigator left"> <a href='/index.php?g=User&m=Member_card&a=design&token=<?php echo ($token); ?>' title='新增会员卡' class='btn btn-primary btn_submit  J_ajax_submit_btn'>添加会员卡</a></div>
<div class="clr"></div>
</div>
<div class="msgWrap">
 <div style="background:#fefbe4;border:1px solid #f3ecb9;color:#993300;padding:10px;margin-top:5px;">在这里可以添加多种级别的会员卡，比如：普通卡、银卡、金卡等，可以设置每个会员卡的最低积分要求，然会员根据不同的积分领取不同的卡</div>
<form method="post"  action="" id="info" >
<TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
<THEAD>
<tr>
<th>名称</th>
<th width="60">会员数量</th>
<th width="65">外链代码</th>
<th class="norightborder">操作</th>
</tr>
</THEAD>
<TBODY>
<TR></TR>
<?php if(is_array($cards)): $i = 0; $__LIST__ = $cards;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><TR>
<TD><?php echo ($item["cardname"]); ?></TD>
<TD><?php echo ($item["usercount"]); ?></TD>
<TD> <a  class="green" href="###">会员卡</a></TD>
<TD class="norightborder">
<a href="/index.php?g=User&m=Member_card&a=design&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>">设计</a> <a href="/index.php?g=User&m=Member_card&a=create&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>">在线开卡</a> <a href="/index.php?g=User&m=Member_card&a=exchange&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>">积分设置</a> <a href="/index.php?g=User&m=Member_card&a=notice&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>">通知管理</a> <a href="/index.php?g=User&m=Member_card&a=privilege&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>">特权管理</a> <a href="/index.php?g=User&m=Member_card&a=coupon&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>">优惠券管理</a> <a href="/index.php?g=User&m=Member_card&a=integral&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>">礼品券管理</a> <a href="/index.php?g=User&m=Member_card&a=members&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>">会员管理</a> <a href="/index.php?g=User&m=Member_card&a=staff&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>">店员管理</a> <a href="javascript:drop_confirm('您确定要删除吗?', '/index.php?g=User&m=Member_card&a=delete&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>');">删除</a></TD>
</TR><?php endforeach; endif; else: echo "" ;endif; ?>
</TBODY>
</TABLE>
</form>

</div>
<div class="cLine">
<div class="pageNavigator right">
<div class="pages"></div>
</div>
<div class="clr"></div>
</div>
</div>
      
        <div class="clr"></div>
		<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>

      </div>
    </div>
  </div>