<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>微调研</title>
<link rel="stylesheet" type="text/css" href="/tpl/static/research/css/survey.css" media="all">
<script src="../tpl/static/research/js/jquery-1.10.1.min.js"></script>
<script src="../tpl/static/research/js/alert.js"></script>
<style>
.window {
	width:290px;
	position:fixed;
	display:none;
	bottom:30px;
	left:50%;
	 z-index:9999;
	margin:-50px auto 0 -145px;
	padding:2px;
	border-radius:0.6em;
	-webkit-border-radius:0.6em;
	-moz-border-radius:0.6em;
	background-color: #ffffff;
	-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	-o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	font:14px/1.5 Microsoft YaHei,Helvitica,Verdana,Arial,san-serif;
}
.window .title {
	background-color: #A3A2A1;
	line-height: 26px;
    padding: 5px 5px 5px 10px;
	color:#ffffff;
	font-size:16px;
	border-radius:0.5em 0.5em 0 0;
	-webkit-border-radius:0.5em 0.5em 0 0;
	-moz-border-radius:0.5em 0.5em 0 0;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #585858 ), to( #565656 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient(#585858, #565656); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient(#585858, #565656); /* FF3.6 */
	background-image:     -ms-linear-gradient(#585858, #565656); /* IE10 */
	background-image:      -o-linear-gradient(#585858, #565656); /* Opera 11.10+ */
	background-image:         linear-gradient(#585858, #565656);
	
}
.window .content {
	/*min-height:100px;*/
	overflow:auto;
	padding:10px;
	background: linear-gradient(#FBFBFB, #EEEEEE) repeat scroll 0 0 #FFF9DF;
    color: #222222;
    text-shadow: 0 1px 0 #FFFFFF;
	border-radius: 0 0 0.6em 0.6em;
	-webkit-border-radius: 0 0 0.6em 0.6em;
	-moz-border-radius: 0 0 0.6em 0.6em;
}
.window #txt {
	min-height:30px;font-size:16px; line-height:22px;
}
.window .txtbtn {
	
	background: #f1f1f1;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #DCDCDC ), to( #f1f1f1 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #DCDCDC ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #DCDCDC ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #DCDCDC ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #DCDCDC ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #DCDCDC );
	border: 1px solid #CCCCCC;
	border-bottom: 1px solid #B4B4B4;
	color: #555555;
	font-weight: bold;
	text-shadow: 0 1px 0 #FFFFFF;
	border-radius: 0.6em 0.6em 0.6em 0.6em;
	display: block;
	width: 100%;
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
	text-overflow: ellipsis;
	white-space: nowrap;
	cursor: pointer;
	text-align: windowcenter;
	font-weight: bold;
	font-size: 18px;
	padding:6px;
	margin:10px 0 0 0;
}
.window .txtbtn:visited {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffffff ), to( #cccccc )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #cccccc ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #cccccc ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #cccccc ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #cccccc ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #cccccc );
}
.window .txtbtn:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffffff ), to( #cccccc )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #cccccc ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #cccccc ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #cccccc ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #cccccc ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #cccccc );
}
.window .txtbtn:active {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #cccccc ), to( #ffffff )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #cccccc , #ffffff ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #cccccc , #ffffff ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #cccccc , #ffffff ); /* IE10 */
	background-image:      -o-linear-gradient( #cccccc , #ffffff ); /* Opera 11.10+ */
	background-image:         linear-gradient( #cccccc , #ffffff );
	border: 1px solid #C9C9C9;
	border-top: 1px solid #B4B4B4;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3) inset;
}

.window .title .close {
	float:right;
	width:26px;
	height:26px;
	display:block;	
}
.question{z-index: 2;position: relative;padding-top: 20px;}
.index{position: absolute;color: #b40000;top: 75px;left: 80px;font-size: 10px;}
.index strong{font-size: 12px;}
.question .title{
	font-size: 24px;
	text-align: center;
	max-height: 77px;
	overflow: hidden;
	text-overflow: ellipsis;
	padding: 0 10px;
	line-height: 26px;
	margin-bottom: 10px;
}
.question .option{position: relative;height: 45px;}
.question .option .text{position: relative;line-height: 40px;overflow: hidden;}
.question .option .i{float: left;margin-left: 20px;}
.question .option .otext{
margin-left: 45px;
overflow: hidden;
max-width: 260px;
height: 40px;
}
.question .option .oimg,.question .option .oimg-sel{position: absolute;top: 4px;left: 10px;width: 300px;}
.question .option .oimg-sel{display: none;}
.question .option-sel .oimg{display: none;}
.question .option-sel .oimg-sel{display: block;}
.result-timeout .timg{
margin-left: -40px;
}
#submit{
	width: 80px;
	margin: 20px 20px 0px 0px;
	float: right;
	position: relative;
}
#submit img{
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
}
#submit span{
	position: relative;
	color: #FFF;
	font-size: 18px;
	line-height: 40px;
	margin-left: 8px;
}
.tip{
	color: #FFF;
	font-size: 12px;
	margin-left: 20px;
}
.textarea {
	height: 60px;
	padding: .4em;
	margin: 10px 0 0 14px;
	line-height: 1.4em;
	font-size: 14px;
	display: block;
	width: 282px;
	outline: 0;
	background-clip: padding-box;
	box-shadow: inset 0 1px 10px rgba(0, 0, 0, 0.5),0 0 0 3px rgba(0, 0, 0, 0.17);
	border-radius: .6em;
	color: #333333;
	border: 0;
	text-shadow: 0 1px 0 #ffffff;
	background: rgba(255, 255, 255, 1);
}
</style>
<body>

<div class="window" id="windowcenter">
	<div id="title" class="title">消息提醒<span class="close" id="alertclose"></span></div>
	<div class="content">
	 <div id="txt"></div>
	 <input type="button" value="确定" id="windowclosebutton" name="确定" class="txtbtn">	
	</div>
</div>

<div class="wrapper">
	<img class="bg" src="../tpl/static/research/images/bg.jpg">
	<div class="question" style="overflow:hidden;">
		<div class="title"><?php echo ($question['name']); ?></div>
		<?php if($maxsel == 1): ?><div class="tip">注：本题最多能选择1个答案！</div><?php endif; ?>
		<div class="options">
			<?php if(is_array($answer)): $i = 0; $__LIST__ = $answer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="option <?php if($row['select'] == 1): ?>option-sel<?php endif; ?>" data-value="<?php echo ($row['id']); ?>">
				<img class="oimg" src="../tpl/static/research/images/option_bg.png">
				<img class="oimg-sel" src="../tpl/static/research/images/option_sel_bg.png">
				<div class="text">
				<div class="otext"><?php echo ($row['name']); ?></div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<div style="display:none"><textarea id="yj" name="yj" placeholder="请填写您的建议" class="textarea"></textarea></div>
		
		</div>
		<?php if($nextqid > 0): ?><div id="submit" onclick="location.href='<?php echo U('Research/detail', array('reid' => $rid, 'token' => $token, 'wecha_id' => $wecha_id, 'nextqid' => $nextqid));?>'">
			<img src="../tpl/static/research/images/next_btn.png">
			<span>下一题</span>
		</div>
		<?php else: ?>            
		<div id="submit" onclick="location.href='<?php echo U('Research/index', array('reid' => $rid, 'token' => $token, 'wecha_id' => $wecha_id));?>'">
			<img src="../tpl/static/research/images/next_btn.png">
			<span>返回</span>
		</div><?php endif; ?>
	</div>
	<audio id="musicClick" src="../tpl/static/research/res/click.mp3" preload="auto"></audio>
</div>

<div id="loading" class="loading-mask">
<img class="gimg" src="../tpl/static/research/images/ajax-loader.gif">
</div>

</body>
</html>