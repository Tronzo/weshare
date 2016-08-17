<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="" name="Keywords">
	<meta content="" name="Description">
    <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/diaoyan/common.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/diaoyan/survey.css" media="all" />
    <script src="/tpl/Wap/default/common/css/product/js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo RES;?>/js/diaoyan/zepto.js"></script>
	<title>调研</title>
	<style type="text/css">
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
		/*.page-url{
			position: absolute;
			width: 100%;
			bottom: 0px;
		}*/
		.tip{
			color: #FFF;
			font-size: 12px;
			margin-left: 20px;
		}
	</style>
</head>
<body>
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
		<?php if($question > 0): ?><div id="submit" onclick="location.href='<?php echo U('Research/answer', array('reid' => $rid, 'token' => $token, 'wecha_id' => $wecha_id, 'nextqid' => $nextqid));?>'">
			<img src="../tpl/static/research/images/next_btn.png">
			<span>下一题</span>
		</div> 	<p class="page-url">
		<a href="Research_Comment.html" target="_blank" class="page-url-link"></a>
	</p>

		<audio id="musicClick" src="<?php echo RES;?>/images/diaoyan/click.mp3" preload="auto"></audio>
	</div>
	<div id="loading" class="loading-mask">
		<img class="gimg" src="<?php echo RES;?>/images/diaoyan/ajax-loader.gif">
	</div>

<script type="text/javascript">
$(function(){
	var maxsel = '2';
	$(".option").click(function(){
		var option = $(this);
		option.toggleClass("option-sel");
		$("#musicClick")[0].play();
	});
	$("#submit").click(function(){
		var btn = $(this);
		if(btn.hasClass("disabled")) return;
		var answer = $(".options .option-sel");
		if(answer.size() == 0){
			alert("请选择一个答案!");
			return;
		}
		
		if(answer.size() > maxsel){
			alert("本题最多只能选择个"+maxsel+"答案!");
			return;
		}
		
		var i=0;
		var ans = "";
		answer.each(function(index,o){
			if(i++ != 0){
				ans += ",";
			}
			ans += $(o).attr("data-value");
		});
		
		var submitData = {
			"qid":"7",
			"yj":$("#yj").val(),
			"answers":ans
		};
		
		btn.addClass("disabled");
		$.ajax({
			type : "POST",
			url : "/index.php?g=Wap&m=Research&a=answer&reid=<?php echo ($_GET['reid']); ?>&token=<?php echo ($_GET['token']); ?>&wecha_id=<?php echo ($_GET['wecha_id']); ?>",
			data : submitData,
			contentType: "application/x-www-form-urlencoded; charset=utf-8",
			dataType : "json",
			success : function(data){
				if(data.error_code == true){
					alert(data.msg);
					return false;
				} else {
					
					window.location.href = "/index.php?g=Wap&m=Research&a=answer&reid=$que['id']&token=$token&wecha_id=$wecha_id";
				}
			},
			error : function(data){
				btn.removeClass("disabled");
				alert("抱歉,服务器繁忙");
			}
		});
	});
	$(document).ajaxBeforeSend(function(e, xhr, options){
		$("#loading").show();
	}).ajaxComplete(function(e, xhr, options){
		$("#loading").hide();
	});
});
</script>
<script type="text/javascript" src="/tpl/Wap/default/common/js/ChatFloat.js"></script>
<if condition="$kefu['diaoyan'] eq '1'"><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?></body>
</html>