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
 
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<!--弹出层样式-->
<style type="text/css">
body,h2{margin:0;padding:0;}
#faqbg{background-color:#666666;position:absolute;z-index:99;left:0;top:0;display:none;width:100%;height:1000px;opacity:0.5;filter:alpha(opacity=50);-moz-opacity:0.5;}
#faqdiv{position:absolute;width:600px;left:50%;top:50%;margin-left:-300px;height:auto;z-index:100;background-color:#fff;border:1px #8FA4F5 solid;padding:1px;}
#faqdiv h2{height:25px;font-size:14px;background-color:#BABABA;position:relative;padding-left:10px;line-height:25px;}
#faqdiv h2 a{position:absolute;right:5px;font-size:12px;color:#FF0000;}
#faqdiv .form{padding:10px;}
</style>
<script src="<?php echo RES;?>/js/jquery.min.js"></script>
<script>
//弹出层js start
$(function(){
	$(".but").click(function(){
            var messageid = $(this).attr("messageid");
		//var str = "这里是信息内容，这里是信息内容！";
		$(".form").html(messageid);
		$("#faqbg").css({display:"block",height:$(document).height()});
		var yscroll =document.documentElement.scrollTop;
		$("#faqdiv").css("top","100px");
		$("#faqdiv").css("display","block");
		document.documentElement.scrollTop=0;
	});
	$(".close").click(function(){
		$("#faqbg").css("display","none");
		$("#faqdiv").css("display","none");
	});
})
//弹出层end
$(document).ready(function(){
    $("#selected").click(function () {//反选  
        $("input[name='items']").each(function(){
            if (this.checked) {
                this.checked = false;
            }
            else {
                this.checked = true;
            }
        });
    }); 
    
    $("#checked").click(function(){
        var chk_value =[]; 
        var token = $("#tokened").val();
        $('input[name="items"]:checked').each(function(){    
            chk_value.push($(this).val());    
        }); 
        if(chk_value.length==0){
            alert("你还未选择要操作的项！");
            return;
        } 
        $.ajax({
            type:"get",
            url:"index.php?g=User&m=Reply&a=checkMany&token="+token+"&chk_value="+chk_value,
            success:function(result){
                $("input[name='items']").each(function(){
	            if (this.checked) {
	                this.checked = false;
	            }
	        });
                alert(result);
                window.location.reload();
            }
        });
    });
     $("#replyed").click(function(){
     
        var chk_value =[]; 
        var wecha_id =$("#wecha_id").val();
        //alert(wecha_id);exit;
        var checked =$("#needCheck").val();
        var token = $("#tokened").val();
        $('input[name="items"]:checked').each(function(){    
            chk_value.push($(this).val());    
        }); 
        if(chk_value.length==0){
            alert("你还未选择要操作的项！");
            return;
        }else{
            //location.href="<?php echo U('User/Reply/add',array('wecha_id'=>wecha_id,'checked'=>checked,'chk_value'=>chk_value));?>";
            location.href="index.php?g=User&m=Reply&a=add&chk_value="+chk_value+"&token="+token+"&wecha_id="+wecha_id+"&checked="+checked;
            return;
        } 
       
    });
    $("#del").click(function(){
    var chk_value =[]; 
    var token = $("#tokened").val();
    $('input[name="items"]:checked').each(function(){    
        chk_value.push($(this).val());    
    }); 
    if(chk_value.length==0){
        alert("你还未选择要操作的项！");
        return;
    } 
    $.ajax({
        type:"get",
        url:"index.php?g=User&m=Reply&a=del&token="+token+"&chk_value="+chk_value,
        success:function(result){
             $("input[name='items']").each(function(){
	            if (this.checked) {
	                this.checked = false;
	            }
	        });
            alert(result);
            window.location.reload(); 
        }
    });
   });
//    $(".replyeded").click(function(){
//        var chk_value = $(this).attr("messageid");
//        var wecha_id =$("#wecha_id").val();
//        //alert(wecha_id);exit;
//        var checked =$("#needCheck").val();
//        var token = $("#tokened").val();
//        location.href="index.php?g=User&m=Reply&a=add&chk_value="+chk_value+"&wecha_id="+wecha_id+"&checked="+checked+"&token="+token; 
//    });
    

})



</script>

        <div class="content">
<div class="cLineB">   
<h4 class="left">留言表单  <input type="text" name="tokened" id="tokened" value="<?php echo ($token); ?>" style="display:none;"></h4>
<div class="searchbar right">
</div>
<div class="clr"></div>
</div>

<div class="cLine">
<div class="pageNavigator left">
    <div class="pageNavigator left">  
    <span> <a href="#" title="选中审核" class="btn btn-primary btn_submit  J_ajax_submit_btn smallbtn" id="checked">选中审核</a></span>
    <span> <a href="#" title="选中回复" class="btn btn-primary btn_submit  J_ajax_submit_btn smallbtn" id="replyed">选中回复</a></span>
    <span> <a href="#" title="选中删除" class="btn btn-primary btn_submit  J_ajax_submit_btn smallbtn" id="del">选中删除</a></span>
    <span> <a href="?g=User&m=Reply&a=config" title="留言板配置" class="btn btn-primary btn_submit  J_ajax_submit_btn smallbtn">留言板配置</a></span>    
    
</div>

</div>
<div class="clr"></div>
</div>
<div class="msgWrap">
<form method="post" action="" id="info">
<input name="wecha_id" type="hidden" id="wecha_id" value="<?php echo ($wecha_id); ?>">
<input name="checked" type="hidden" id="needCheck" value="<?php echo ($needCheck); ?>">
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
<thead>
<tr>
<th class="select"><input type="button" value="反选" name="button" id="selected"  style="color:#94D38A;"></th>
<th width="130">昵称</th>
<th width="130">留言内容</th>
<th width="170">查看回复</th>
<th width="130">留言时间</th>
 
<th width="130" class="norightborder">操作</th>
</tr>
</thead>
<tbody>
<tr></tr>
<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr >
<td id="playlist"><input type="checkbox" name="items" value="<?php echo ($item["id"]); ?>"  class="checkitem"></td>
<td><?php echo ($item["name"]); ?></td>
<td><a href="###" onclick="art.dialog({content: '<?php echo ($item["message"]); ?>',width:300,height:200,yesText:'关闭',background: '#000',opacity: 0.45});">查看留言 <?php if($item['checked'] != 1): ?><font style="color:red;font-size:12px;">(未审核)</font><?php else: ?>
            <font ></font><?php endif; ?>
        </a></td>
<td><a href="<?php echo U('User/Reply/reply',array('msgid'=>$item['id'],'token'=>$token,'wecha_id'=>$wecha_id));?>">查看回复<font color="#04AA00">(共<font color="red"><?php echo ($item["count"]); ?></font>条回复/<font style="color:red"><?php echo ($item["chkcount"]); ?></font>条新回复)</font></a></td>
<td><?php echo (date("Y-m-d H:i:s",$item["time"])); ?></td> 

<td class="norightborder">
    <a href="<?php echo U('User/Reply/checkOne',array('chk_value'=>$item['id'],'token'=>$token));?>"><?php if($item['checked'] != 1): ?>&nbsp; 审核<?php endif; ?></a>
<!--    &nbsp;&nbsp;<a href="#" messageid="<?php echo ($item["id"]); ?>" class="replyeded">回复</a>-->
    &nbsp;&nbsp;<a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('User/Reply/deled',array('chk_value'=>$item['id'],'token'=>$token));?>');">删除</a></td>
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