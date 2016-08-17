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



<title><?php echo ($data["copyright"]); ?></title>



        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />



		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">



        <meta name="Keywords" content="微盟、微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销" />



        <meta name="Description" content="微盟，国内最大的微信公众智能服务平台，微盟八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。" />



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



        <style>



            img{width:100%!important;}



        </style>



    </head>



    <body onselectstart="return true;" ondragstart="return false;">



        <body id="onlinebooking">



<!-- -------------------------------------------------------------------------------------------------------------------------------- -->



	<div class="qiandaobanner"> 



		<?php if($data['topic'] != ''): ?><img src="<?php echo ($data["topic"]); ?>"><?php else: ?><img src="<?php echo RES;?>/images/yuyue/head_pic.jpg"><?php endif; ?>



	</div>



	<div class="cardexplain">



	<!--普通用户登录时显示-->



	<ul class="round">



		<li>



			<a href="<?php echo U($type.'/order',array('token'=> $data['token'], 'wecha_id'=> $data['wecha_id'],'id'=>$data['id']));?>"  ><span>我的订单<em class="ok"><?php echo ($data["count"]); ?></em></span></a>



		</li>



	</ul>



	<!--后台可控制是否显示-->



	



	<ul class="round">



		<li class="title">



			<span class="none"><?php echo ($data["title"]); ?></span>



		</li>



		<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="dandanb">



			<a href="<?php echo U($type.'/info',array('token'=> $data['token'], 'wecha_id'=> $data['wecha_id'],'id'=>$item['pid'],'aid'=>$item['id']));?>" >



			<span>



			<table class="jiagebiao" border="0" cellpadding="0" cellspacing="0" width="100%">



				<tr>



					<td><div><?php echo ($item["name"]); ?></div>



						<div><img src="<?php echo ($item["pic1"]); ?>" class="showimg" style="max-width:100px;">                            <p><?php echo ($item["memo"]); ?></p>



							<p><?php if($item['yjzdy'] == ''): ?>原价<?php else: echo ($item["yjzdy"]); endif; ?>：<a class="yuanjia">￥<?php echo ($item["yuanjia"]); ?></a></p>



							<p><?php if($item['yhzdy'] == ''): ?>优惠价<?php else: echo ($item["yhzdy"]); endif; ?>：<a class="youhuijia">￥<?php echo ($item["youhui"]); ?></a></p></div></td>



				</tr>



			</table>



			</span>



			</a>



		</li><?php endforeach; endif; else: echo "" ;endif; ?>



	</ul>



	



	<ul class="round">



		<li>



		<h2>订单说明</h2>



		<div class="text"><?php echo ($data["info"]); ?></div>



		</li>



	</ul>







	<!--后台可控制是否显示-->



	<ul class="round">



		<li class="addr"><a href="    http://api.map.baidu.com/marker?location=<?php echo ($data["longitude"]); ?>,<?php echo ($data["latitude"]); ?>&title=<?php echo ($data["copyright"]); ?>&content=<?php echo ($data["copyright"]); ?>&output=html"><span>地址： <?php echo ($data["address"]); ?></span></a></li>
  
        



		<li class="tel"><a href="tel:<?php echo ($data["phone"]); ?>"><span>订单电话： <?php echo ($data["phone"]); ?></span></a></li>



	</ul>











	</div>











<script type="text/javascript"> 







$(document).ready(function () {



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



		if('undefined' !== typeof(tel_num)){



			if(tel_num ==''){alert('电话不能为空');return;} 



			if(tel_num.length < 11){alert('请输入正确的电话');return;} 



		}







		if($("#truename").val()==''){alert('名字不能为空');return;}



//		if($("#dateline").val()==''){alert('请选择时间');return;}



		var submitData = {



			wecha_id: $("#wecha_id").val(),



			pid: $("#pid").val(),



			token: $("#token").val(),



			name: $("#truename").val(),



			phone: $("#tel").val(),



			date: $("#dateline").val(),



			time: $("#timepart").val(),



			memo: $("#info").val(),



			fieldsigle: ret_single,



			fielddownload: ret_download,



		};



		if('fromUsername' == submitData.wechatid) submitData.wechatid = '';



		$.post('index.php?g=wap&m='+<?php echo ($type); ?>+'&a=add', submitData,



			function(data) {



				if (0 == data.errno) {



					alert(data.msg);



					setTimeout('window.location.href=location.href',1000);



				} else {



					alert(data.msg);



					setTimeout('window.location.href=location.href',1000);



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



	<!-- wtoken.com Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");

document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F866a46b8a4d233aa883b072a2158aaa2' type='text/javascript'%3E%3C/script%3E"));

</script>
<script type="text/javascript" src="/tpl/Wap/default/common/js/ChatFloat.js"></script>
<?php if($kefu['yy'] == '1'): ?><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?> 
 </body>



</html>