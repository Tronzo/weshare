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

<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>  
<div class="content">
         
          <div class="cLineB">
              <h4 class="left">会员管理</h4>
                 
              <div class="clr"></div>
          </div>
          <div class="cLineD">
查询资料[仅支持 <strong> 微信名(如 we ),手机号(如 158)</strong> 的(模糊)查询]
	<form method="post" action="">
		<input size="80" value="" name="searchkey" class="px">
		<button type="submit" name="appidsubmit" value="true" class="btn btn-primary btn_submit  J_ajax_submit_btn vm" ><strong>查询</strong></button>
	</form>
 </div>
          <div class="msgWrap">
          <font color="red">注意:消费金额只能填整数(采取进一取整法,加入消费了 40.22 元,1元=10个积分.那么消费金额去整=50,积分就是 50*10=500个积分)
           <br />
           每修改一次,就增加一条新的消费积分记录,请慎用!(只显示最后一次修改记录)
          </font>
         
          <input name="delall"  type="hidden" value="del" />
           <input name="wxid"  type="hidden" value="gh_423dwjkewad" />
            <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR>
				<TH class="select">选择</TH>
				<TH>编号</TH>
				<TH>微信名</TH>
				<TH>姓名</TH>
        <TH>联系电话</TH>
				<TH>QQ号码</TH> 
				<TH>备注</TH>
        <TH>领卡时间</TH>
        <TH>消费金额(元)</TH> 
        <TH>消费日期</TH>  
        <TH class="norightborder">添加</TH>              
				<TH >操作</TH>
                </TR>
              </THEAD>
              <TBODY>
                <TR></TR>

				 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><TR>
                  <TD></TD>
                  <TD><?php echo ($i); ?></TD>
                  <TD><?php echo ($list["wechaname"]); ?></TD>
                  <TD><?php echo ($list["truename"]); ?></TD>
                  <TD><?php echo ($list["tel"]); ?></TD>
                  <TD><?php echo ($list["qq"]); ?></TD> 
                  <TD><?php echo ($list["info"]); ?></TD> 
                  <TD>
                   <?php if($list['getcardtime'] != false): echo (date('Y-m-d',$list["getcardtime"])); ?>
                    <?php else: ?>
                    无时间记录<?php endif; ?>                      
                  </TD>
 <form method="post"  action="/index.php?g=User&m=Member&a=edit" >
                  <TD>
                  <input type="text" name="add_expend" value="<?php echo ($list["add_expend"]); ?>" class="px" style="width:40px;">
                  <input type="hidden" name="token" value="<?php echo ($list["token"]); ?>">
                  <input type="hidden" name="wecha_id" value="<?php echo ($list["wecha_id"]); ?>">
                   </TD>
                  <TD>
                  <input type="text" class="px" id="add_expend_time" value="<?php
 if(!empty($list['add_expend_time'])): echo date('Y-m-d',$list['add_expend_time']); else: echo date('Y-m-d',time()); endif; ?>" onClick="WdatePicker()" name="add_expend_time" />  
                   <TD>  <button type="submit" style="cursor:pointer">修改</button></TD>
</form>
                  <TD class="norightborder">				  
				                 <a href="javascript:drop_confirm('您确定要删除吗?', '/index.php?g=User&m=Member&a=del&token=<?php echo ($_GET['token']); ?>&id=<?php echo ($list["id"]); ?>');"><strong>删除</strong></a> 
                  </TD>
                </TR><?php endforeach; endif; else: echo "" ;endif; ?>

                <tr>
                <td colspan="11" class="norightborder"> 
					<input type="checkbox" id="chkall" name="chkall" onclick="checkAll(this.form, 'del_id')">
					<label for="checkallBottom">全选</label>
					<input type="radio"  checked="checked" name="optype" value="1">删除					
				</td>
                </tr>
              </TBODY>
            </TABLE>
          

           <script>
   function checkvotethis() {
var aa=document.getElementsByName('del_id[]');
var mnum = aa.length;
j=0;
for(i=0;i<mnum;i++){
if(aa[i].checked){
j++;
}
}
if(j>0) {
document.getElementById('info').submit();
} else {
alert('未选中任何文章或回复！')
}
}

   </script>
          </div>
            

 
 
          <div class="cLine">
            <div class="pageNavigator right">
                 <div class="pages"></div>
              </div>
            <div class="clr"></div>
          </div>
        </div>

        <div class="clr"></div>
      </div>
    </div>
  </div>
  <script>

function checkAll(form, name) {
for(var i = 0; i < form.elements.length; i++) {
var e = form.elements[i];
if(e.name.match(name)) {
e.checked = form.elements['chkall'].checked;
}
}
}
  </script>
  <!--底部-->
  	</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>