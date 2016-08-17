<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>资费介绍 - <?php echo ($f_siteName); ?> <?php echo ($f_siteTitle); ?></title>
<meta name="keywords" content="<?php echo ($f_metaKeyword); ?>" />
<meta name="description" content="<?php echo ($f_metaDes); ?>" />
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
<style>
.topbg{height:30px;background-color:#000;}
.toplink{MARGIN: 0px auto; WIDTH: 988px;color:#999;PADDING-TOP:5px }
.toplink .welcome{ float:left;}
.toplink .memberinfo{ float:right;}
.toplink .memberinfo a{ color:#999;}
.toplink .memberinfo a:hover{ color:#F90}
.toplink .memberinfo a.green{ background:none; color:#0C0}
</style>
<div class="topbg">
<div class="toplink">
<div class="welcome">欢迎使用<?php echo ($f_siteTitle); ?>多用户微信营销服务平台!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION['uid']==false): ?><a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="<?php echo U('User/Index/index');?>" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="<?php echo U('Home/Index/logout');?>" >退出</a><?php endif; ?>	
	</div>
</div>
</div></div>
<div class="header">
    <div class="header-left">
        <a href="/" class="logo"><img src="<?php echo ($f_logo); ?>" /> </a>
        <dl>
            <dd class="logo-text">最专业的企业微信营销平台</dd>
            <dd class="tel-whole">全国招商热线：<?php echo ($f_tel); ?></dd>
        </dl>
    </div>
<!--
<div class="login">
<?php if($_SESSION['uid']==false): ?>你好&nbsp;&nbsp;<span class="f_red">游客</span>&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好，<a href="<?php echo U('User/Index/index');?>" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="<?php echo U('System/Admin/logout');?>" >退出</a><?php endif; ?>
</div>
-->
    <div class="navbar">
        <ul>
            <li> <a href="/">首页 </a></li>
            <li> <a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
            <li> <a href="<?php echo U('Home/Index/price');?>">资费介绍</a></li>
            <li> <a href="<?php echo U('Home/Index/fc');?>">功能说明</a></li>
            <li> <a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
            <li> <a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>
            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_qq); ?>&site=qq&menu=yes" target="_blank">在线咨询</a></li>
        </ul>		
    </div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style-price.css"/>
<style type="text/css">
<!--
.STYLE1 {
	color: #00FF00;
	font-weight: bold;
}
.STYLE2 {color: #FF0000}
-->
</style>
    <div class="top">
        <div class="top-container">
            <div class="top-left">
                <p class="top-text1">Price</p>
                <p class="top-title">资费介绍</p>
                <div>
                    <p>最专业的企业微信营销服务平台</p>
                    <p>联系电话：<?php echo ($f_tel); ?></p>
                </div>
            </div>

            <p class="top-img"><img src="<?php echo RES;?>/images/icon1.png"style="margin-top: 26px" /></p>
        </div>
    </div>

    <div class="center">
        <div class="center-right">
            <div class="about-main">
                  	<table width="100%" border="0" cellpadding="0" cellspacing="0" class=" ListProduct8">
<thead>
                			<tr>
                				<th class="lefttitle"><strong>微信号流量套餐</strong></th>
                				<th width="200">vip0</th>
                				<th width="200">vip1</th>
                				<th width="200">vip2</th>
                				<th width="200">vip3</th>
               				</tr>
</thead>
<tbody>
                			<tr>
                				<td height="60" valign="middle" class="lefttitle">VIP价格
                					<a  class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>VIP只是流量套餐（自定义数和赠送的请求数不同而已），点击问号查看详细购买流程！</p>
</span></a></td>
                				<td><span class=>100元 / 月
               				    </span><p class="STYLE1">1000 元 / 年 </p></td>
                				<td><span class=>200元 / 月
                				  <p class="STYLE1">2000 元 / 年</p>
                				</span></td>
                				<td><span class=>300元 / 月
                				  <p class="STYLE1">3000 元 / 年</p>
                				</span></td>
                				<td><span class=>400元 / 月
               				    </span><p class="STYLE1">4000 元 / 年 </p></td>
               				</tr>
                			<tr>
                				<td height="32" class="lefttitle">自定义条数限额 <span class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p><strong>什么是自定义限额数？</strong></p>
<p>自定义分：自定义文本、自定义图文、自定义语音。意思是，你在【 <?php echo ($f_siteName); ?> 】 写一个图文就少一个自定义图文〔vip0图文、文本、语音都有2000自定义，够挥霍了。〕</p>
</span></span></td>
                				<td>80</td>
                				<td>300</td>
                				<td>700</td>
                				<td>1300</td>
               				</tr>
                			<tr>
                				<td height="32" class="lefttitle">赠送月请求次数 <span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是请求数？</strong></p>
<p>用户发送一句话，就代表一个请求。
比如：用户发送 "你好！"，系统回复"你也好！"
这就算一个请求，如果系统没回复，则不计。
〔温馨提示：【 <?php echo ($f_siteName); ?> 】 3G功能〔分类功能〕请求也算在内。3G请求看不到，只是粉丝在浏览里3G网站时候，浏览一篇文章，或者重新打开一个分类就算一个请求。目前3G功能只统计请求并不收费。〕</p>
<p><strong>什么是赠送请求？</strong></p>
<p>用户购买VIP流量套餐后会赠送用户一些功能和请求数，这个请求数被【 <?php echo ($f_siteName); ?> 】 称为赠送请求数。</p>
</span></span></td>
                				<td>1000</td>
                				<td>5000</td>
                				<td>10000</td>
                				<td>20000</td>
               				</tr>
                            <tr >
                				<td height="50" class="lefttitle">每月免收活动创建费次数<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是活动创建费？</strong></p>
<p>创建1次活动的基础费是10元,这就是活动创建费。免收活动创建费就是免10元，其他资源消耗还是要正常扣费（如：SN码费用和实际参与抽奖人数的费用）!</p>
</span></span></td>
                				<td>0次</td>
                				<td>1次</td>
                				<td>2次</td>
                				<td>3次</td>
               				</tr>
							<td class="lefttitle">会员卡数量</td>
                				<td class="error">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class=" ">1000</td>
               				<tr >
                				<td height="50" class="lefttitle">底部版权信息<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>版权信息？</strong></p>
<p>	V0 页面有:此页面是由【<a href="<?php echo ($f_siteUrl); ?>"><?php echo ($f_siteTitle); ?>接口平台</a>】系统生成 版权信息</p>
</span></span></td>
                				<td>有</td>
                				<td>有</td>
                				<td>无</td>
                				<td>无</td>
               				</tr>
                			<tr >
               				  <td height="50" class="lefttitle"> <span class="red STYLE2"><a href="<?php echo ($f_siteUrl); ?>"target="_blank">充值请先点击这里查看流程。</a></span></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>0));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>1));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>2));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>3));?>"><em>立即充值</em></a></td>
               				</tr>
                			<tr>
                				<td height="36" class="lefttitle"><strong>基础功能</strong></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
               				</tr>
                			<tr>
                				<td class="lefttitle">天气</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">查快递</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">翻译</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">百科</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">手机归属地查询</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">身份证查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">糗事</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">笑话</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">藏头藏尾诗</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">解梦</td>
                				<td class="error">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">健康指数计算器</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">公交查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">火车查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">网络音乐搜索</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>

<tr>
                				<td class="lefttitle">翻译朗读开关</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">发地理位置直接显示周边</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">自定义LBS数据</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">文本回复模糊匹配</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">图文回复包含匹配</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">回答不上启用第三方接口</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>



                			<tr>
                				<td height="36" class="lefttitle"><strong>高级功能（不需要单独收费）</strong></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
               				</tr>
                			<tr>
                				<td class="lefttitle"><a class="tooltips" href="forum.php?mod=viewthread&amp;tid=498&amp;extra=page=1" target="999"><span><p>&nbsp;</p>
</span></a>刮刮卡活动</td>
                				<td class="error">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">大转盘活动</td>
                				<td class="error">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">优惠券活动<span></span></td>
                				<td class="error">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>

<tr>
                				<td class="lefttitle">投票活动 <span class="tooltips" ><span><p>&nbsp;</p></span></span></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">店铺管理</td>
                				<td class="error">&nbsp;</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
               				</tr>
                			<tr>
                				<td class="lefttitle">第三方接口融合<a class="tooltips" href="forum.php?mod=viewthread&amp;tid=340" target="999"><span>
                				  <p>&nbsp;</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
<tr>
                				<td align="left" class="lefttitle">淘宝客模块<span></span></td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
               				</tr>
                			<tr>
                				<td class="lefttitle">技术指导</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">3G网站</td>
                				<td class="error " >&nbsp;</td>
                				<td class="error " >&nbsp;</td>
                				<td class="error " >&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义语音</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义图文</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义文本</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				</tr>
</tbody>
               			</table>
					  </div>
        </div>
    </div>
<div class="footer">
    <div class="footer-bottom">
        <div>
            <p><?php echo ($f_siteTitle); ?> 版权所有  Copyright © 2013 All Rights Reserved.</p>
            <p class="ipc"><a href="http://www.miitbeian.gov.cn" target="_blank" rel="nofollow"><?php echo C('ipc');?></a></p>
            <p class="tongji"><?php echo base64_decode(C('countsz'));?></p>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/js.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/g.base.js"></script>
</div>
</div>
</body>
</html>

</body>
</html>