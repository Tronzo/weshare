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
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
 <form class="form" method="post" action=""  target="_top" enctype="multipart/form-data" >
        <div class="content">
<!--活动开始-->
<div class="cLineB">
    <h4>编辑微调研活动开始内容</h4><a href="javascript:history.go(-1);"  class="btn btn-primary btn_submit  J_ajax_submit_btn right" style="margin-top:-27px" >返回</a>
</div> 
<div class="msgWrap bgfc"> 
<TABLE class="userinfoArea" style=" margin:0;" border="0" cellSpacing="0" cellPadding="0" width="100%"><TBODY>

  	<input type="hidden" name="researchid" value="<?php echo ($research['id']); ?>"/>
	<input type="hidden" id="statdate"  name="statdate" value="<?php echo (date('Y-m-d',$research['starttime'])); ?>" />
	<input type="hidden" id="enddate"  name="enddate" value="<?php echo (date('Y-m-d',$research['endtime'])); ?>" />
	<input type="hidden" class="px" id="canrqnums" name="canrqnums" value="1"/>
	<input type="hidden"class="px" id="daynums" name="daynums"  value="1"/>
	<input type="hidden" class="px" id="keyword" value="<?php echo ($research['keyword']); ?>" name="keyword" style="width:400px" ><br />
	<input type="hidden" class="px" id="title" value="<?php echo ($research['title']); ?>" name="title" style="width:400px" />
	<input type="hidden" class="px" id="info" value="<?php echo ($research['description']); ?>" name="info" style="width:400px" />

<TR>
  <TR>
  	<th valign="top"><span class="red">*</span>兑奖信息：</th>
  	<td>
		<input type="text" class="px" id="txt" value="<?php if($vo['txt'] == ''): ?>兑奖请联系我们，电话138********<?php else: echo ($vo["txt"]); endif; ?>" name="txt" style="width:400px" />
  		<br />请不要多于100字! 这个设定但用户输入兑奖时候的显示信息!
	</td>
  </TR>
 <TR>
  	<th valign="top"><span class="red">*</span>中奖提示：</th>
  	<td><textarea class="px"   name="sttxt" style="width:400px"  ><?php echo ($vo["sttxt"]); ?></textarea>
  		 </td>
</TR>
</TBODY>
</TABLE>
  </div> 
  
<!--活动结束-->
<div class="cLineB">
          	<h4>活动结束内容</h4></div> 
<div class="msgWrap bgfc">
 
  	<table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
  		<tbody>
  			<tr>
  				<th valign="top"><span class="red">*</span>活动结束公告主题：</th>
  				<td><input type="text" class="px" id="endtite" value="<?php if($vo['endtite'] == ''): ?>微调研活动已经结束了<?php else: echo ($vo["endtite"]); endif; ?>" name="endtite" style="width:400px" />
  					<br />
  					请不要多于50字! </td>
  				</tr>
  			<tr>
  				<th valign="top">活动结束说明：</th>
  				<td valign="top"><textarea  class="px" id="endinfo" name="endinfo"  style="width:400px; height:125px" ><?php if($vo['endinfo'] == ''): ?>亲，活动已经结束，请继续关注我们的后续活动哦。<?php else: echo ($vo["endinfo"]); endif; ?></textarea><br />换行请输入
 &lt;br&gt;
  				  </td>
  				</tr>
  			</tbody>
  		</table>
  </div> 
  
  
<!--奖项设置-->
<div class="cLineB">
          	<h4>奖项设置</h4></div> 
<div class="msgWrap bgfc">

<TABLE class="userinfoArea" style=" margin: 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">
<TBODY>
<TR>
<th valign="top"><span class="red">*</span>一等奖奖品设置：</th>
<td><input type="text" class="px" id="fist"   name="fist" value="<?php echo ($vo["fist"]); ?>"  style="width:250px"/>
请不要多于50字! </td>
  <TD rowspan="9" valign="top">&nbsp;</TD>
</TR>
<TR>
<th valign="top"><span class="red">*</span>一等奖奖品数量：</th>
<td><input type="text" class="px" id="fistnums" name="fistnums"      value="<?php echo ($vo["fistnums"]); ?>" style="width:60px" />
  <span class="red">如果是100%中奖,请把一等奖的奖品数量[ 1000就代表前1000人都中奖 ]填写多点</span></td>
                                      </TR>
<TR>
<th valign="top">二等奖奖品设置：</th>
<td><input type="text" class="px" id="second" name="second"     value="<?php echo ($vo["second"]); ?>"  style="width:250px"/>
请不要多于50字! </td>
                                          </TR>
<TR>
<th valign="top">二等奖奖品数量：</th>
<td><input type="text" class="px" id="secondnums" name="secondnums"   value="<?php echo ($vo["secondnums"]); ?>" style="width:60px" />
</td>
                                          </TR>
<TR>
<th valign="top">三等奖奖品设置：</th>
<td><input type="text" class="px" id="third" name="third"   value="<?php echo ($vo["third"]); ?>" style="width:250px" />
请不要多于50字! </td>
                                        
                                          </TR>
<TR>
<th valign="top">三等奖奖品数量：</th>
<td><input type="text" class="px" id="thirdnums" name="thirdnums"     value="<?php echo ($vo["thirdnums"]); ?>" style="width:60px" />
</td>
                                       
                                          </TR>
  
  </tbody>
 <tbody>
<TR>
<th valign="top"><span class="red">*</span>预计活动的人数：</th>
<td><input type="text" class="px" id="allpeople" name="allpeople"   value="<?php echo ($vo["allpeople"]); ?>" style="width:150px"/>  预估活动人数直接影响抽奖概率：中奖概率 = 奖品总数/预估活动人数  如果要确保任何时候都100%中奖建议设置为1人参加!<span class='red'>如果要确保任何时候都100%中奖建议设置为1人参加!并且奖项只设置一等奖.</span></td>
</TR>                        
<tr style="display:none">
<th valign="top">SN码生成设置：</th>
<td>
    <input class="radio" type="radio" checked name="snimport" value="0">自动生成  
    <input class="radio" type="radio" name="snimport" value="1">手动生成(SN码管理)
</td> 
</tr>
<tr>
<th valign="top"><span class="red">*</span>兑奖密码：</th>
<td><input class="px" id="parssword" name="parssword" value="<?php echo ($vo["parssword"]); ?>" style="width:150px" type="text">
消费确认密码长度小于15位</td>
                                        </tr>
                                                                       <!-- <tr>
<th valign="top">SN码重命名为：</th>
<td><input class="px" id="renamesn" name="renamesn" value="<?php if($vo.renamesn): echo ($vo["renamesn"]); else: ?>SN码<?php endif; ?>" style="width:150px" type="text"> 例如：CND码,充值密码,SN码 这个主意用于修改SN码的名称，不懂请别修改</td>
                                        </tr>
                                         <tr>
<th valign="top">手机号重命名：</th>
<td><input class="px" id="renametel" name="renametel" value="<?php if($vo.renametel): echo ($vo["renametel"]); else: ?>手机号<?php endif; ?>" style="width:150px" type="text"> 例如：QQ号,微信号,手机号等其他联系方式，不懂请别修改</td> 
                                        </tr> -->
<TR>
	<th valign="top">抽奖页面是否显示奖品数量：</th>
	<td><input class="radio" type="radio" name="displayjpnums" value="1"  <?php if($vo['displayjpnums'] == 1): ?>checked<?php endif; ?> >显示  <input class="radio" type="radio" name="displayjpnums" value="0"  <?php if($vo['displayjpnums'] == 0): ?>checked<?php endif; ?>>不显</td> 
</TR> 
<TR>
	<th valign="top">注册后才能参与：</th>
	<td><input class="radio" type="radio" name="needreg" value="1"  <?php if($vo['needreg'] == 1): ?>checked<?php endif; ?> > 需要先注册  <input class="radio" type="radio" name="needreg" value="0"  <?php if($vo['needreg'] == 0): ?>checked<?php endif; ?>> 不需要先注册</td> 
</TR> 
<TR>
<th>&nbsp;</th>
<td><button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn" >保存</button>　<a href=""  class="btn btn-primary btn_submit  J_ajax_submit_btn">取消</a>　<span class="red">请确认功能管理已开启大转盘功能</span></td>
</TBODY>
</TABLE>
  </div> 
 </div>
</form>
        <div class="clr"></div>
      </div>
    </div>
  </div> 
  <script type="text/javascript">
	//onFocus事件就是当光标落在文本框中时发生的事件。
	//onBlur事件是光标失去焦点时发生的事件。
	function onfocus(obj){
		obj.html = '';
	}
	function onblur(obj,str){
		obj.html = str;
	}
  </script>
<!--底部-->
</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>