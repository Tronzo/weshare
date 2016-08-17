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
 
<script>
function selectall(name) {
	var checkItems=$('.cbitem');
	if ($("#check_box").attr('checked')==false) {
		$.each(checkItems, function(i,val){
			val.checked=false;
		});
		
	} else {
		$.each(checkItems, function(i,val){
			val.checked=true;
		});
	}
}
</script> 
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<div class="content">
         
          <div class="cLineB">
              <h4 class="left">当前位置：<a href="<?php echo U('Member_card/index',array('token'=>$token));?>">会员卡</a> >> <?php echo ($thisCard["cardname"]); ?>：创建会员卡号　<span style="color:red">此会员卡号,会员领取一张，这里将会少一张,当全部被领取完了,请再次开卡</span></h4>
              <br />
           
              <div class="clr"></div>
          </div>
          <div class="cLine">
			<div class="pageNavigator left">
			
				<a href="<?php echo U('Member_card/create_add',array('token'=>$token,'id'=>$thisCard['id']));?>" title="创建会员卡号" class="add">创建会员卡号
				</a>&nbsp;&nbsp;<a class="delete" href="###" onclick="if(confirm('确定删除吗')){$('#info').submit()}">删除</a>&nbsp;&nbsp; <strong>已经领取 <span style="color:red"><?php echo ($usecount); ?></span> 张，剩余<span style="color:red"><?php echo ($ucount); ?></span>张未领取，一共 <span style="color:red"><?php echo ($count); ?></span>张</strong>
			</div>
			<a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:10px">返回</a>          
			<div class="clr"></div>
          </div>
          <div class="msgWrap">
          <form method="post" action="" id="info">
          <input name="delall" type="hidden" value="del">
           <input name="wxid" type="hidden" value="gh_423dwjkewad">
            <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                <tr>
					<th class="select"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
					<th class="category">会员卡号</th>					
					<th class="edit norightborder">状态</th>
                    <th class="category">会员资料</th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($data_vip)): $i = 0; $__LIST__ = $data_vip;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data_vip): $mod = ($i % 2 );++$i;?><tr>
					  <td><input type="checkbox" value="<?php echo ($data_vip["id"]); ?>" class="cbitem" name="id_<?php echo ($i); ?>"></td>

					  <td><div class="answer_text"><?php echo ($data_vip["number"]); ?></div></td>
					 
					  <td class="norightborder">
						<!--a href="">使用统计</a--> 
						<?php if($data_vip['wecha_id'] == false): ?>空闲卡<?php else: ?><strong>使用中</strong><?php endif; ?>
					  </td>
                      <td> 
                      <?php if($data_vip['wecha_id'] != false): ?><a href="index.php?g=User&m=Member_card&a=member&itemid=<?php echo ($data_vip["id"]); ?>&id=<?php echo ($thisCard["id"]); ?>">查看详情</a><?php endif; ?>
                    
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      			
              </tbody>
            </table>
           </form> 
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
					alert('未选中内容！')
					}
				}
			</script>
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