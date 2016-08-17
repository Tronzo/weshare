<?php if (!defined('THINK_PATH')) exit();?>



<!DOCTYPE html>



<html>



    <head>



        <meta charset="utf-8" />



<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/yuyue/common.css" media="all" />



<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/yuyue/datepicker.css" media="all" />



<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/yuyue/onlinebooking.css" media="all" />



<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/yuyue/weimob-ui-1-1.css" media="all" />



<script type="text/javascript" src="<?php echo RES;?>/js/yuyue/jQuery.js"></script>



<script type="text/javascript" src="<?php echo RES;?>/js/yuyue/jquery-ui.js"></script>



<script type="text/javascript" src="<?php echo RES;?>/js/yuyue/swipe.js"></script>

<script src="<?php echo RES;?>/js/yuyue/jquery.flexslider-min.js"></script>


<title><?php echo ($data["copyright"]); ?></title>



        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />



		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">



        <meta name="Keywords" content="微享、微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销" />



        <meta name="Description" content="微享，国内最大的微信公众智能服务平台，微享八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。" />



        <!-- Mobile Devices Support @begin -->



            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">



            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">



            <meta content="no-cache" http-equiv="pragma">



            <meta content="0" http-equiv="expires">



            <meta content="telephone=no, address=no" name="format-detection">



            <meta content="width=device-width, initial-scale=1.0" name="viewport">



            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->



            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />



        <!-- Mobile Devices Support @end -->



        <link rel="shortcut icon" href="img/favicon.ico" />



       


           



<script>
$(window).load(function() {
	$('.flexslider').flexslider({
		directionNav: false,
		pauseOnAction: false
	});
});
</script>
<style>
img{ width:100%}
* { margin: 0; padding: 0;}
.flexslider { position: relative; overflow: hidden;background: url(images/loading.gif) 50% no-repeat;}
.slides { position: relative; z-index: 1;}
.slides li { height: 100%;}
.flex-control-nav { position: absolute; bottom: 10px; z-index: 2; width: 100%; text-align: center;}
.flex-control-nav li { display: inline-block; width: 14px; height: 14px; margin: 0 5px; *display: inline; zoom: 1;}
.flex-control-nav a { display: inline-block; width: 14px; height: 14px; line-height: 40px; overflow: hidden; background: url(/tpl/Wap/default/common/js/yuyue/dot.png) right 0 no-repeat; cursor: pointer;}
.flex-control-nav .flex-active { background-position: 0 0;}
</style>

    </head>



    <body onselectstart="return true;" ondragstart="return false;">

<div class="flexslider">
	<ul class="slides">
    <?php if(is_array($info[pic])): foreach($info[pic] as $key=>$i): ?><li><img src="<?php echo ($i); ?>"></li><?php endforeach; endif; ?>
		
	</ul>
</div>


	<div class="cardexplain">



	<!--后台可控制是否显示-->



	<ul class="round">



		<li class="biaotou bradius pad">



			<table border="0" cellpadding="0" cellspacing="0" width="100%">



				<tr>



					<td><?php if($info['lxzdy'] == ''): ?>类型<?php else: echo ($info["lxzdy"]); endif; ?></td>



					<td class="yuanjia"><?php if($info['lxzdy'] == ''): ?>原价<?php else: echo ($info["yjzdy"]); endif; ?></td>



					<td class="youhuijia"><?php if($info['lxzdy'] == ''): ?>优惠价<?php else: echo ($info["yhzdy"]); endif; ?></td>
                    <td class="youhuijia">为你节省</td>



					</tr>



			</table>



		</li>



		<li>



			<span class="noneorder">



			<table class="jiagebiao" border="0" cellpadding="0" cellspacing="0" width="100%">



				<tr>



					<td><?php echo ($info["name"]); ?></td>



					<td class="yuanjia" id="yj"><?php echo ($info["yuanjia"]); ?></td>



					<td class="youhuijia" id="yhj"><?php echo ($info["youhui"]); ?></td>
                    <td class="youhuijia" id="yhj"><?php echo ($info["sheng"]); ?></td>
                   



				</tr>



			</table>



			</span>



		</li>



	</ul>



	



	<ul class="round">



		<li>



			<h2>相关说明</h2>



			<div class="text"><?php echo ($info["memo"]); ?></div>



		</li>



		<li class="tel"><a href="tel:<?php echo ($data["phone"]); ?>"><span><?php echo ($data["phone"]); ?> 电话预订</span></a></li>



	</ul>
    
    <ul class="round">



		<li>



			<h2>配套设施</h2>



			<div class="text"><?php echo ($info["messages"]); ?></div>



		</li>



		



	</ul>







	<!--后台可控制是否显示-->







	<ul class="round roundyellow" style="display:none;">



		<li class="userinfo"><a href="dingdan"><span>请完善个人资料再填表单</span></a></li>



	</ul>







	<!--粉丝填写过的信息的，直接就显示名字电话，粉丝没有填写过信息的话，这里就直接留空让粉丝填写-->



	<ul class="round">



		<form action="javascript:;" method="post">



		<li class="title mb"><span class="none">请认真填写在线订单</span></li>



		<?php if($str['person'] == 0): ?><li class="nob" style="display:none;"><?php else: ?><li class="nob"><?php endif; ?> 



			<input name="formhash" id="formhash" value="2be3071a" type="hidden">



			<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">



				<tr>



					<th>联系人</th>



					<td><input name="name" class="px" id="truename" value="" placeholder="请输入您的真实姓名" type="text"></td>



				</tr>



			</table>



		</li>



		<?php if($str['phone'] == 0): ?><li class="nob" style="display:none;"><?php else: ?><li class="nob"><?php endif; ?>



			<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">



				<tr>



					<th>联系电话</th>



					<td><input name="phone" class="px" id="tel" value="" placeholder="请输入您的电话" type="tel"></td>



				</tr>



			</table>



		</li>



		<?php if($str['date'] == 0): ?><li class="nob" style="display:none;"><?php else: ?><li class="nob"><?php endif; ?>



			<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">



			<tr>



				<th>预约日期</th>



				<td>



					<input type="text" class="px" name="date" id="dateline" readonly/>



					



				</td>



				</tr>



			</table>



		</li>



		<?php if($str['time'] == 0): ?><li class="nob" style="display:none;"><?php else: ?><li class="nob"><?php endif; ?>



			<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">



			<tr>



				<th>预约时间</th>



				<td>



					<select name="time" id="timepart" class="dropdown-select">



									<option value="0:00-1:00" selected>0:00-1:00</option><option value="1:00-2:00">1:00-2:00</option><option value="2:00-3:00">2:00-3:00</option><option value="3:00-4:00">3:00-4:00</option><option value="4:00-5:00">4:00-5:00</option><option value="5:00-6:00">5:00-6:00</option><option value="6:00-7:00">6:00-7:00</option><option value="7:00-8:00">7:00-8:00</option><option value="8:00-9:00">8:00-9:00</option><option value="9:00-10:00">9:00-10:00</option><option value="10:00-11:00">10:00-11:00</option><option value="11:00-12:00">11:00-12:00</option><option value="12:00-13:00">12:00-13:00</option><option value="13:00-14:00">13:00-14:00</option><option value="14:00-15:00">14:00-15:00</option><option value="15:00-16:00">15:00-16:00</option><option value="16:00-17:00">16:00-17:00</option><option value="17:00-18:00">17:00-18:00</option><option value="18:00-19:00">18:00-19:00</option><option value="19:00-20:00">19:00-20:00</option><option value="20:00-21:00">20:00-21:00</option><option value="21:00-22:00">21:00-22:00</option><option value="22:00-23:00">22:00-23:00</option><option value="23:00-24:00">23:00-24:00</option>					</select>



				</td>



				</tr>



			</table>



		</li>



		<li class="nob">



			<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">



				<tr>



					<th><?php if($info['lxzdy'] == ''): ?>类型<?php else: echo ($info["lxzdy"]); endif; ?></th>



					<td><input class="px" id="room_type" value="<?php echo ($info["name"]); ?>" readonly type="text"></td>



				</tr>



			</table>



		</li>



		<li class="nob">



			<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">



				<tr>



					<th>预订数量</th>



					<td>



						<select name="nums" class="dropdown-select" id="nums" onchange="dothis(this.value)">



							<option selected="selected" value="1">1</option>



							<option value="2">2</option>



							<option value="3">3</option>



							<option value="4">4</option>



							<option value="5">5</option>



							<option value="6">6</option>



							<option value="7">7</option>



							<option value="8">8</option>



							<option value="9">9</option>



							<option value="10">10</option>



							<option value="11">11</option>



							<option value="12">12</option>



							<option value="13">13</option>



							<option value="14">14</option>



							<option value="15">15</option>



							<option value="16">16</option>



							<option value="17">17</option>



							<option value="18">18</option>



							<option value="19">19</option>



							<option value="20">20</option>



						</select>



					</td>



				</tr>



			</table>



		</li>



		






		



		



		



		<?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="nob" >



			<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">



				<tr>



					<th><?php echo ($item["name"]); ?></th>



					<td><input name="text<?php echo ($i); ?>" class="single px" id="text<?php echo ($i); ?>" value="" placeholder="<?php echo ($item["value"]); ?>" type="text"></td>



				</tr>



			</table>



		</li><?php endforeach; endif; else: echo "" ;endif; ?>



		



		<?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($k % 2 );++$k;?><li class="nob" >



			<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">



				<tr>



					<th><?php echo ($item["name"]); ?></th>



					<td>



						<select name="" class="download dropdown-select">



						<?php if(is_array($item[value])): $i = 0; $__LIST__ = $item[value];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><option value="<?php echo ($i); ?>"><?php echo ($i); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>



						</select>



					</td>



				</tr>



			</table>



		</li><?php endforeach; endif; else: echo "" ;endif; ?>



		



		



		<li class="nob">



			<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">



				<tr>



					<th class="thtop" valign="top"><?php echo ($str["message"]); ?></th>



					<td>



						<textarea name="memo" class="pxtextarea" style=" height:99px;overflow-y:visible" id="info" placeholder="请输入备注信息"></textarea>



						<input type="hidden" name="wecha_id" id="wecha_id" value="<?php echo ($data["wecha_id"]); ?>" />



						<input type="hidden" name="pid" id="pid" value="<?php echo ($data["id"]); ?>" />



						<input type="hidden" name="token" id="token" value="<?php echo ($data["token"]); ?>" />



						<input type="hidden" name="price" id="price" value="<?php echo ($info["youhui"]); ?>" />



					</td>



				</tr>



			</table>



		</li>



		</form>



	</ul>



	<div class="footReturn">



		<input id="showcard" class="submit" value="提交" type="button" > 



		<div class="window" id="windowcenter">



			<div id="title" class="wtitle">操作提示<span class="close" id="alertclose"></span></div>



			<div class="content">



				<div id="txt"></div>



			</div>



		</div>



	</div>



	</div>











<script type="text/javascript"> 



function dothis(nums){



		var yj = $("#yj").text();



		var yhj = $("#yhj").text();



		var diff = yj - yhj;



		var str1 = yj*nums;



		var str2 = yhj*nums;



		var str3 = diff*nums;



		$("#price1").text("￥"+str1);



		$("#price2").text("￥"+str2);



		$("#price3").text("￥"+str3);



}







$(document).ready(function () {



	new Swipe(document.getElementById('imgs_box'), {



				speed:1000,



				auto:5000,



				callback: function(){



					var lis = $(this.element).next("ol").children();



					lis.removeClass("on").eq(this.index).addClass("on");



				}



			}); 



	$( "#dateline" ).datepicker({



		minDate: new Date(),



		dateFormat: "yy-mm-dd"



	}).val((



			function(d){



				return [d.getFullYear(), d.getMonth()+1, d.getDate()].join("-");



			}



		)(new Date()));
	


	$("#showcard").click(function () {



		var ret_single = ret_download = tel_num = '';



		$(".single").each(function(i){



			var s_name = $(this).parent().siblings().text();



			var s_value = $(this).val();



			if('' != s_value) ret_single += '$'+s_name+'#'+s_value;



		});



	



		$(".download").each(function(i){



			var s_name = $(this).parent().siblings().text();



			var s_value = $(this).val();



			if('' != s_value) ret_download += '$'+s_name+'#'+s_value;



		});







		tel_num = $("#tel").val();



		if("<?php echo ($str['phone']); ?>" == 1){



		if('undefined' !== typeof(tel_num)){



			if(tel_num ==''){alert('电话不能为空');return;} 



			if(tel_num.length < 11){alert('请输入正确的电话');return;} 



		}}







		if("<?php echo ($str['name']); ?>" == 1){if($("#truename").val()==''){alert('名字不能为空');return;}}



		//if($("#dateline").val()==''){alert('请选择时间');return;}



		var mydate = new Date();



		var submitData = {



			wecha_id: $("#wecha_id").val(),



			pid: $("#pid").val(),



			token: $("#token").val(),



			name: $("#truename").val(),



			phone: $("#tel").val(),



			or_date: $("#dateline").val(),



			time: $("#timepart").val(),


			nums: $("#nums").val(),



			memo: $("#info").val(),



			kind: $("#room_type").val(),



			price: $("#price").val(),



			fieldsigle: ret_single,



			fielddownload: ret_download,



		};



		if('fromUsername' == submitData.wechatid) submitData.wechatid = '';



		$.post('index.php?g=Wap&m=<?php echo ($type); ?>&a=add', submitData,



			function(data) {



				if (0 == data.error) {



					alert(data.msg);



					//setTimeout('window.location.href=location.href',1000);



				} else {



					alert(data.msg);



					setTimeout('window.location.href="'+data.url+'"',3000);



				}



			},



		"json")







	}); 



}); 











$("#dateline").change(function () {



	var submitData = {



	wxname: "o5JGbjuFTr6lumWIyyW3yfP-G5m0",



	dateline: $("#dateline").val(),



	formhash: $("#formhash").val(),



	action: "getcount"



	};



}); 

 















$("#windowclosebutton").click(function () { 



$("#windowcenter").slideUp(500);







}); 



$("#alertclose").click(function () { 



$("#windowcenter").slideUp(500);







}); 



function jumpurl(url){



	window.location.href = url;



}



function alert(title){ 







$("#windowcenter").slideToggle("slow"); 



$("#txt").html(title);



//$("#windowcenter").hide("slow"); 



setTimeout('$("#windowcenter").slideUp(500)',4000);



} 









		document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('showOptionMenu');
});
</script>



<footer style="text-align:center; color:#ffd800;margin-right:20px;margin-top:0px;"><a>©<?php echo ($data["copyright"]); ?></a></footer>



         		<div mark="stat_code" style="width:0px; height:0px; display:none;">



					</div>



<?php if($kefu['yy'] == '1'): ?><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?> 
</body>
 



</html>