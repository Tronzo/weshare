<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

<title>帮助中心 - <?php echo ($f_siteName); ?> <?php echo ($f_siteTitle); ?></title>

<meta name="keywords" content="<?php echo ($f_metaKeyword); ?>" />

<meta name="description" content="<?php echo ($f_metaDes); ?>" />

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css"/>

<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />

<link href="<?php echo RES;?>/css/css.css" rel="stylesheet" type="text/css" />

<!--[if lte IE 6]>

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/ie6.css"/>

<![endif]-->

<script type="text/javascript">window.onerror=function(){return true;}</script>

<script type="text/javascript" src="<?php echo RES;?>/js/lang.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/js/config.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/js/jquery.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/js/page.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/js/jquery.lazyload.js"></script>

<script type="text/javascript">

GoMobile('');

var searchid = 5;

</script>

</head>

<body>



<style type="text/css">

.normalTitle {

    border-bottom: 1px solid #D7DDE6;

    border-radius: 10px 10px 0 0;

    padding: 20px;

    text-shadow: 0 1px 1px #FFFFFF;

}

.normalTitle h2, .panelTitle h2, .processTitle h2 {

    font-size: 20px;

    font-weight: bold;

}

.content {

 margin: 0 auto;

    text-align: left;

    width: 707px;

}

.article, .intro, .download, .document, .developer {

margin:40px 0px;



background:#f5f6f7;

box-shadow:0px 1px 3px #ccc;

}

.section {

padding:0 0 20px 0;

margin:0 0 20px 0;

border-bottom:1px solid #eee;

overflow: hidden;

}

.lastSection {

border:none;

margin-bottom:0px;

}

.normalTitle {

border-bottom:1px solid #d7dde6;

border-radius:10px 10px 0 0;

padding:20px 40px;

text-shadow:0 1px 1px #fff;

}

.normalContent {

background:#fff;/*border-radius:0 0 10px 10px;*/

padding:40px;

}

.normalTitle h2, .panelTitle h2, .processTitle h2 {

font-size:20px;

font-weight:bold;

}

.green{ color:#090}

.red{ color: #F00}

.collapsible {

    background: none repeat scroll 0 0 #FFFFFF;

    padding: 20px;

}

.CollapsiblePanel {

    margin-bottom: 10px;

    width: 870px;

}

.CollapsiblePanelTab {

    background: url(style/images/img/arrow_unclick.png) no-repeat scroll 820px 20px #FFFFFF;

    border: 1px solid #DEDEDE;

    border-radius: 3px 3px 3px 3px;

    color: #626B8A;

    cursor: pointer;

    font-size: 18px;

    padding: 20px 40px 20px 20px;

    text-shadow: 0 1px 0 white;

}

.CollapsiblePanelTab.hover {

    background: url(style/images/img/arrow_unclick.png) no-repeat scroll 820px 20px #D7DDE6;

border: 1px solid #C1C9D4;

}

.CollapsiblePanelTab.clicked {

    background: url(style/images/img/arrow_click.png) no-repeat scroll 820px 20px #D7DDE6;

border: 1px solid #C1C9D4;

}

.CollapsiblePanelContent {

    display: none;

    overflow: hidden;

}

.CollapsiblePanelContent .normalContent {

    padding: 20px 20px 0;

}

</style>

<div class="content" style="width:1100px;">

<div class="document" style="margin-top:0px;">

            <div class="normalTitle"><h2>如何为微信公众号配置接口？</h2></div>

                <div class="collapsible">

<div class="section lastSection">

<p>请务必认真阅读以下2步内容，才能更有效的完成配置工作，有疑问的请联系QQ：<?php echo ($f_qq); ?>提问。<br/><?php if($_GET['token'] != ''): ?>你的接口URL是：<font color="red"><?php echo ($f_siteUrl); ?>/index.php/api/<?php echo $_GET['token']; ?></font><br>您的token是：<font color="red"><?php echo $_GET['token']; ?></font><?php endif; ?></p>

</div>

                <div id="CollapsiblePanel2" class="CollapsiblePanel">

                    <div class="CollapsiblePanelTab clicked">第一步、在<?php echo ($f_siteTitle); ?>绑定你的微信公众号。<span></span></div>

                    <div style="" class="">

                        <div class="articleContent catalogHome normalContent">

                            <div class="section lastSection">

                                <p>1、注册并登录<a href="<?php echo U('Index/login');?>"><?php echo ($f_siteTitle); ?>接口平台</a></p>

                                <p>2、添加公众号 → 功能管理 → 勾选要开启的功能</p>									

								<p><img src="<?php echo STATICS;?>/help/help01.jpg" width="790px"></p>

								<p><img src="<?php echo STATICS;?>/help/help0.jpg" width="790px"></p>

                            </div>

                        </div>

                    </div>                        

                </div>

<div id="CollapsiblePanel3" class="CollapsiblePanel">

                        <div class="CollapsiblePanelTab clicked">第二步、到微信公众平台设置接口。<span></span></div>

                        <div style="" class="">

                            <div class="articleContent catalogHome normalContent">

                                <div class="section lastSection">

                                   <div class="section lastSection">

                                    <p>1、登录 <a href="http://mp.weixin.qq.com/">微信公众平台</a>（<a href="http://mp.weixin.qq.com/">http://mp.weixin.qq.com/</a>），进行身份认证，填写信息，提交身份证。</p>

                                    <p>认证后，点击高级功能 → 进入开发模式</p><br>

                                    <p><img src="<?php echo STATICS;?>/help/help002.jpg" width="790px"></p><br>

									<p>2、点击"成为开发者"按钮</p>

									<p><img src="<?php echo STATICS;?>/help/help003.jpg" width="790px"></p><br>

									<p>3、填写接口配置信息</p>

									<?php if($_GET['token'] == ''): ?><p>比如你<?php echo ($f_siteTitle); ?>平台上的地址是<?php echo ($f_siteUrl); ?>/index.php/api/demo</p>

									<p>那么URL就是<?php echo ($f_siteUrl); ?>/INDEX.PHP/api/demo</p>

									<?php else: ?>

									<p>你的URL是 <font color="red"><?php echo ($f_siteUrl); ?>/index.php/api/<?php echo $_GET['token']; ?></font></p><?php endif; ?>

									<p>Token填写 <font color="red"><?php echo $_GET['token']; ?></font></p>

									<p><img src="<?php echo STATICS;?>/help/help004.jpg" width="790px"></p><br>

									<p>4、确认开启</p>

									<p>5、在手机上用微信给你的公众号输入"帮助"，测试你的接口是否配置正常！</p><br>									

                                </div>

                              

                            </div>

                        </div>

                        

                    </div>

                </div>

            </div>

    </div>

    </div>

<!--结束-->

</div>

<script type="text/javascript">try{Dd('webpage_7').className='left_menu_on';}catch(e){}</script>