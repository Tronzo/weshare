<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台首页</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<meta http-equiv="x-ua-compatible" content="ie=7" />
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
</head>
<body style="background:none">
<div class="content">
<div class="box">
	<h3>微享微信营销更新消息</h3>
    <div class="con dcon">
    <div class="update">
    <p>服务器环境：[<?php echo PHP_OS; ?>]<?php echo $_SERVER[SERVER_SOFTWARE];?> MySql:<?php echo mysql_get_server_info(); ?> php:<?php echo PHP_VERSION; ?></p>
    <p>服务器IP：<?php echo $_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT']; ?></p>
    <p>当前网站语言：UTF-8简体中文</p>
    <p>系统版本：<?php if($updateRecord.version): echo (date("Ymd",$updateRecord["version"])); else: ?>暂无版本记录<?php endif; ?>&nbsp;&nbsp;<a href="?g=System&m=System&a=checkUpdate" class="blue">检查更新</a> <?php if($canEnUpdate != 1): ?><span style="color:red;font-weight:bold"></span><?php endif; ?></p>
    <p style="display:none">数据库版本： <a href="?g=System&m=System&a=checkUpdate" class="blue">检查更新</a></p>
    </div>
    <ul class="myinfo">
   <li><p class="red">您的程序版本为：微享微信营销系统</p><span>[ 授权版本：商业版 (终身使用权) ]</span></li>
   <li style="display:none"><p class="red" style="display:none">您的程序版本为：微享微信营销系统v2014</p><span style="display:none">[ 授权版本：商业版  ]</span></li>
  
	</ul>
    </div>
</div>
<!--/box-->
<div class="box">
	<h3>微享微信营销说明</h3>
    <div class="con dcon">
    <div class="kjnav" style="display:none">
    <a href="">使用帮助</a><a href="">技术售后</a><a href="">安装指导</a><a href="">联系我们</a><a href="">升级咨询</a>
    </div>
    <ul class="myinfo kjinfo">
   <li class="title">售后服务范围</li>
<li>程序第一次安装指导,或第一次协助安装</li>
<li>服务时间：早9:00 晚10:00 如有疑问请在这个时间段联系我们，周未双休</li>
<li>您的擅自修改出现的任何问题,将不在售后内('可指导')</li>
<li>如果有BUG,我们承诺1至3天内发布修复补丁</li>
	</ul>
    </div>
</div>

<!--/box-->
</div>

</body>
</html>