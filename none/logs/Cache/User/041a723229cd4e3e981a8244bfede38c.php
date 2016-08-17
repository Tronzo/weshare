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
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<script src="./tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="./tpl/static/artDialog/plugins/iframeTools.js"></script>
<div class="content">
          <div class="cLineB">
              <h4 class="left">预约挂号订单管理</h4>
               
          </div>
          
          <div class="cLine">
    <div class="alert">
    <p>（ 本次收集订单总数：<span class="redamount"><?php echo ($count); ?></span>个　　预订成功：<span class="redamount"><?php echo ($ok_count); ?></span>个　　预订失败：<span class="redamount"><?php echo ($lose_count); ?></span>个　　等待客服回电订单：<span class="redamount"><?php echo ($call_count); ?></span>个） </p>
    </div>
</div>

          <div class="msgWrap">
          <form method="post" action="" id="info">
          <input name="delall" type="hidden" value="del">
           <input name="wxid" type="hidden" value="gh_423dwjkewad">
            <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                    <tr>
                    <th width="20">序号</th>
                    <th width="60">姓名</th>
                    <th class="85">电话</th>
                    <th class="85">预约科室</th>
                    <th class="85">预约专家</th>
                    <th class="85">预约病种</th>
                    <th width="160">预定日期</th>
                    <th class="60">订单状态</th>
                    <th width="150" class="norightborder">操作</th>
                    </tr>
                  </thead>
              <tbody>
                <tr></tr>
                <?php if(is_array($books)): $i = 0; $__LIST__ = $books;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($o["iid"]); ?></td>
                        <td><?php echo ($o["truename"]); ?></td>
                        <td><?php echo ($o["utel"]); ?></td>
                        <td><?php echo ($o["yyks"]); ?></td>
                        <td><?php echo ($o["yyzj"]); ?></td>
                        <td><?php echo ($o["yybz"]); ?></td>
                        <td><?php echo ($o["dateline"]); ?></td>
                        
                        <td><?php if($o["remate"] == 0): ?>待回复<?php elseif($o["remate"] == 1): ?>确认<?php elseif($o["remate"] == 2): ?>拒绝<?php endif; ?></td>



                        <td class="norightborder"><a class="btn btn-primary btn_submit  J_ajax_submit_btn" href="###" onclick="showIntroDetail(<?php echo ($o["iid"]); ?>)">详细</a>  <a class="btn btn-primary btn_submit  J_ajax_submit_btn" href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Medical/manage_del',array('token'=>$o['token'],'iid'=>$o['iid']));?>');"  title="删除">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <input type="hidden" name="token" value="<?php echo ($_GET['token']); ?>" />
           </form> 
          </div>
           <script>
            function showIntroDetail(id){
                art.dialog.open('<?php echo U('Medical/reser_uinfo',array('token'=>$token));?>&iid='+id,{lock:false,title:'预约订单详情',width:700,height:420,yesText:'关闭',background: '#000',opacity: 0.87});
            }
        </script>

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