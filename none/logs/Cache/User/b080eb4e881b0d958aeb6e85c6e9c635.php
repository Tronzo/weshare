<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 微信公众平台源码,微信机器人源码,微信自动回复源码 wqlcms多用户微信营销系统</title>
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<style>

	.name {
		font-size:22px;
		text-align:left;
		font-weight:bold;
		
	}
	#nv_member {
		background: #fff;
	}



</style>
</head>
<body id="nv_member" >


<form class="form" method="post" id="form" action=""> 

<input type="hidden" name="uid" value="<?php echo ($uinfo["id"]); ?>" />
    <div class="msgWrap bgfc"> 
		<p class="name"><?php echo ($uinfo["wechaname"]); ?>（<?php echo ($uinfo["truename"]); ?>）</p>
     <table class="userinfoArea" style=" margin-left:100px;" border="0" cellspacing="0" cellpadding="0" width="70%"> 
      <tbody> 
      <tr> 
        <th><br /></th> 
        <td><br /></td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>充值金额(元)</th> 
        <td><input type="text" name="price" value="" class="px" style="width:150px;" /></td> 
       </tr> 
      <tr> 
        <th><br /></th> 
        <td><br /></td> 
       </tr> 
       <tr>         
       <th>&nbsp;</th>
       <td>
      <input type="hidden" name="groupon" value="1" />
       <button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">确认</button> </td> 
       </tr> 
      </tbody> 
     </table> 
     </div>
    
   </form> 
   
</body>
</html>