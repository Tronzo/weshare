<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php echo ($info["acttitle"]); ?></title>

<script src="<?php echo RES;?>/js/jquery.js"></script>

<script type="text/javascript" src="/tpl/User/default/js/jquery-ui.min.js"></script>

<script src="/tpl/User/default/js/jquery.flip.min.js"></script>

<script src="/tpl/User/default/js/jquery.flip.js"></script>

<script src="/tpl/User/default/js/jquery.timer-.1.2.js"></script>





<script>

<!--翻转效果-->

$(document).ready(function(){ 

        

      }); 

var count=0;	  

function flipdata(i,name,sec){

//只显示10条数据，0起

	

	

		$('#f'+i).flip({

			speed:100,

			color: '#f90',

		});

	



}

function aaa(){

	if($("#ranking .progress-wbar .progress-bar:eq(0)").children('span').width()>=550){

		flipdata==0} 



	else{for(i=0;i<10;i++){

				setTimeout('flipdata('+i+',"aaav",500)',200*i);

		}

	count++;

	

	setTimeout('aaa()',3000);

}}



function aaaa(){ 

 

          $(".progress-wbar").flip({ 

              direction:'tb' 

          }); 

      } 

</script>

<!--end-->

<script>

$(function(){

 var hoko;

 var ss=<?php echo ($info["starttime"]); ?>;

 var tt;

 var anitime=550/<?php echo ($info["endshake"]); ?>;

 var stime=<?php echo ($info["showtime"]); ?>*1000;

 function getPoint(){ 

    $.ajax({ 

    type: "post", 

    url : "<?php echo U('Shake/sentpoint');?>",

    dataType:'json', 

    data: 'token=<?php echo ($info["token"]); ?>',

    success: function(json){

	  for(i=0;i<10;i++){

		  $("#ranking .progress-wbar .number:eq("+i+")").children('span').html(json[i]['phone']);

		  //$("#ranking div:eq("+i+")").width(json[i][1]*2);

		  if(json[i]['point']*anitime>550)

		  //$("#ranking div:eq("+i+")").children('span').stop().animate({width : 800}, stime);

		  $("#ranking .progress-wbar .progress-bar:eq("+i+")").children('span').css("width",550);

		  else

		  $("#ranking .progress-wbar .progress-bar:eq("+i+")").children('span').css("width",json[i]['point']*anitime);

		  //$("#ranking div:eq("+i+")").children('span').stop().animate({width : json[i]['point']*anitime}, stime);

		  //$("#ranking div:eq("+i+")").animate({width : json[i]['point']*3}, 3000);

		  }

        }

	  

	  });

	 if($("#ranking .progress-wbar .progress-bar:eq(0)").children('span').width()>=550){echo();$("#final").show("fast");clearTimeout(hoko);return false;}

	 hoko=setTimeout(getPoint,stime) ;

	 

   } 

    

	

   function start(){ 

    

    $.ajax({ 

    type: "post", 

    url : "<?php echo U('Shake/startgame');?>",

    dataType:'text', 

    data: 'token=<?php echo ($info["token"]); ?>',

    success: function(data){}});

	 }

	

	 

	

	 

	 

	function getman(){

	$.ajax({ 

    type: "post", 

    url : "<?php echo U('Shake/getman');?>",

    dataType:'text', 

    data: 'token=<?php echo ($info["token"]); ?>',

    success: function(data){

		//alert(data) 

		$("#mans").html(data); 

        }

	  

	  });

	 }

	  	   

   

   function count(){

	   $("#p2").remove();

	  $("#bignum").html(ss);

      ss=ss-1  

	  tt=setTimeout(count,1000)

	  if(ss==-1){

		/*

		 $(function(){setInterval('$(".top").trigger("click");',<?php echo ($info["showtime"]); ?>*1000);});

		*/ $("#ms").html('<audio id="p3"autoplay src="<?php echo ($info["pass3"]); ?>" loop></audio>');

		 setTimeout('aaa()',1000);

		  $("#bignum").hide("fast");

		  $("#head").hide("fast");

		  $("#ctrl_tool").hide("fast");

		  

		  $("#ranking").show();

		 

		  clearTimeout(tt);

		  start();

		  getPoint();

		  }

	}

	

	function echo(){

	     $(".top").remove();

		

		$("#ranking").hide("fast");

		var str="";

		for(i=0;i<10;i++){

			score=parseInt($("#ranking .progress-wbar .progress-bar:eq("+i+")").children('span').width())/anitime;

			str += "<tr>";

			str += "<td><img src='/tpl/User/default/img/"+(i+1)+".png'>第"+(i+1)+"名</td>";

			str += "<td>"+$("#ranking .progress-wbar .number:eq("+i+")").children('span').html();+"</td>";

			str += "<td>"+parseInt(score)+"</td>";

			str += "</tr>"

			}

		 $("#finaltable").append(str);

		}

   $("#c").click(function(){

	   clearInterval(yuni);

	   count()

	   })

	$("#qrcode").click(function(){

		

		$(this).hide();

		})

	 

	 var yuni=setInterval(getman,1000);

	 

})

</script>

<style>

body, div, ul, li, p {

	padding: 0;

	margin: 0;

}

.page {

	width: 1000px;

	margin: 0 auto;

	position: relative

}

.head_right > h1 {

	color: black;

}

#ranking {

	width: 800px;

	margin-left: 450px;

	margin-top: 10px;

	display: none

}

#ranking di {

	background: rgba(43, 41, 41, .6);

}

#ranking div {

	margin-bottom: 8px;

	clear: both;

	line-height: 30px;

	font-weight: bold

}

#bignum, #final {

	margin-left: auto;

	margin-right: auto;

	font-size: 400px;

	width: 1000px;

	color: #000;

	margin-top: -80px;

	z-index: 99;

	text-align: center;

	padding-top: 100px;

	cursor: pointer;

}

#final {

	display: none;

	color: #960;

	z-index: 99;

	padding-top: 90px;

}

#final .finalbox {

	background: url(/tpl/User/default/img/finahead.png) no-repeat;

	width: 852px;

	height: 159px;

	margin: 0 auto;

	font-size: 60px;

	color: #930

}

#dd {

	position: absolute;

	left: 0;

	top: 0;

	z-index: 9999

}

#bignum .biginner {

}

#bignum .biginner a#c {

	text-align: center;

	display: block;

	width: 145px;

	height: 145px;

	margin: 0 auto;

	font-size: 100px;

}

#bignum .biginner a:hover {

}

#bignum .manbox {

	background: rgba(0, 0, 0, 0.59);

	text-align: center;

	width: 250px;

	height: 40px;

	margin-left: auto;

	margin-right: auto;

	margin-top: 20px;

	color: #F7F2F2;

	font-size: 16px;

	line-height: 40px;

	font-weight: bold;

	border-radius: 10px;

}

#mans {

	color: #FAF003;

	font-size: 18px;

}

#bignum .manbox a#d {

	font-size: 12px;

	padding: 0 10px;

}

#finaltable {

	font-size: 16px;

	background-color: #3A3434;

	width: 736px;

 height:320px;

  margin: 0 auto;

	text-align: center;

	border-radius: 5px;

	margin-bottom: 100px;

	margin-right: auto;

}

body {

background: <?php if($info['pass'] == ''): ?>url(/tpl/User/default/img/bg.jpg) no-repeat center top<?php else: ?>url("<?php echo ($info["pass"]); ?>") no-repeat center top<?php endif; ?>;

	font: 13px '微软雅黑', Arial, Helvetica;

	background-attachment: fixed;

	background-size: 100%;

}

h2, p {

	text-align: center;

	color: #fafafa;

	text-shadow: 0 1px 0 #111;

}

a {

	color: #777;

}

/*---------------------------*/	

		

.progress-wbar {

	width: 800px;

	background-color: #3A3434;

	height: 50px;

	border-radius: 5px;

	padding-right: 10px;

}

.number{ 

width: 150px;

height: 50px;

color:#FFF;

position: absolute;

margin-left: 120px;}

.huangguan{

	position: absolute;

height: 50px;

width: 100px;

margin-left:

10px;

}

.progress-bar {

	background-color: #1a1a1a;

	height: 34px;

	margin-top: 8px;

	width: 550px;

	-moz-border-radius: 5px;

	-webkit-border-radius: 5px;

	border-radius: 5px;

	-moz-box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;

	-webkit-box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;

	box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;

	float: right;

}

.progress-bar span {

	color: #666;

	display: inline-block;

	height: 100%;

	width: 0;

	background-color: #777;

	-moz-border-radius: 3px;

	-webkit-border-radius: 3px;

	border-radius: 3px;

	-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;

	-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;

	box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;

	-webkit-transition: width .4s ease-in-out;

	-moz-transition: width .4s ease-in-out;

	-ms-transition: width .4s ease-in-out;

	-o-transition: width .4s ease-in-out;

	transition: width .4s ease-in-out;

}

/*---------------------------*/			

		

.blue span {

	background-color: #34c2e3;

}

.orange span {

	background-color: #fecf23;

	background-image: -webkit-gradient(linear, left top, left bottom, from(#fecf23), to(#fd9215));

	background-image: -webkit-linear-gradient(top, #fecf23, #fd9215);

	background-image: -moz-linear-gradient(top, #fecf23, #fd9215);

	background-image: -ms-linear-gradient(top, #fecf23, #fd9215);

	background-image: -o-linear-gradient(top, #fecf23, #fd9215);

	background-image: linear-gradient(top, #fecf23, #fd9215);

}

.green span {

	background-color: #a5df41;

	background-image: -webkit-gradient(linear, left top, left bottom, from(#a5df41), to(#4ca916));

	background-image: -webkit-linear-gradient(top, #a5df41, #4ca916);

	background-image: -moz-linear-gradient(top, #a5df41, #4ca916);

	background-image: -ms-linear-gradient(top, #a5df41, #4ca916);

	background-image: -o-linear-gradient(top, #a5df41, #4ca916);

	background-image: linear-gradient(top, #a5df41, #4ca916);

}

/*---------------------------*/		

		

.stripes span {

	-webkit-background-size: 30px 30px;

	-moz-background-size: 30px 30px;

	background-size: 30px 30px;

	background-image: -webkit-gradient(linear, left top, right bottom, color-stop(.25, rgba(255, 255, 255, .15)), color-stop(.25, transparent), color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .15)), color-stop(.75, rgba(255, 255, 255, .15)), color-stop(.75, transparent), to(transparent));

	background-image: -webkit-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);

	background-image: -moz-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);

	background-image: -ms-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);

	background-image: -o-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);

	background-image: linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);

	-webkit-animation: animate-stripes 3s linear infinite;

	-moz-animation: animate-stripes 3s linear infinite;

}

 @-webkit-keyframes animate-stripes {

 0% {

background-position: 0 0;

}

100% {

background-position: 60px 0;

}

}

 @-moz-keyframes animate-stripes {

 0% {

background-position: 0 0;

}

100% {

background-position: 60px 0;

}

}

/*---------------------------*/	 



.shine span {

	position: relative;

}

.shine span::after {

	content: '';

	opacity: 0;

	position: absolute;

	top: 0;

	right: 0;

	bottom: 0;

	left: 0;

	background: #fff;

	-moz-border-radius: 3px;

	-webkit-border-radius: 3px;

	border-radius: 3px;

	-webkit-animation: animate-shine 2s ease-out infinite;

	-moz-animation: animate-shine 2s ease-out infinite;

}

 @-webkit-keyframes animate-shine {

 0% {

opacity: 0;

width: 0;

}

 50% {

opacity: .5;

}

 100% {

opacity: 0;

width: 95%;

}

}

 @-moz-keyframes animate-shine {

 0% {

opacity: 0;

width: 0;

}

 50% {

opacity: .5;

}

 100% {

opacity: 0;

width: 95%;

}

}

/*---------------------------*/	 

		

.glow span {

	-moz-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;

	-webkit-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;

	box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;

	-webkit-animation: animate-glow 1s ease-out infinite;

	-moz-animation: animate-glow 1s ease-out infinite;

}

 @-webkit-keyframes animate-glow {

 0% {

-webkit-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;

}

 50% {

-webkit-box-shadow: 0 5px 5px rgba(255, 255, 255, .3) inset, 0 -5px 5px rgba(255, 255, 255, .3) inset;

}

 100% {

-webkit-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;

}

}

 @-moz-keyframes animate-glow {

 0% {

-moz-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;

}

 50% {

-moz-box-shadow: 0 5px 5px rgba(255, 255, 255, .3) inset, 0 -5px 5px rgba(255, 255, 255, .3) inset;

}

 100% {

-moz-box-shadow: 0 5px 5px rgba(255, 255, 255, .7) inset, 0 -5px 5px rgba(255, 255, 255, .7) inset;

}

}

th {

	margin: 0px;

	padding: 0px;

	line-height: 15px;

	color: #000;

	font-size: 12px;

	border-radius: 5px;

	background-color: #1A1A1A;

}

#finaltable th {

	text-align: left;

	font-weight: normal;

	width: 150px;

	height: 35px;

	background-color: #0599FC;

}

#finaltable caption {

	background: #328AA4;

	color: #FFF;

	line-height: 30px;

	border: 1px solid #FFF;

}

#finaltable td {

	background: #1A1A1A;

	color: #FCF7F7;

	margin:0;

	padding:0;

}

.wbao {

	width: 780px;

	margin-left: auto;

	margin-right: auto;

	background-color: #6B6464;

	border-radius: 10px;

	padding-top: 10px;

	height: 400px;

}

<!--头部style-->

 .head {

	background: rgba(255, 255, 255, .9);

	margin: 10px;

}

.head_info {

	display: inline-block;

	float: left;

	background: rgba(215, 41, 80, .8);

	color: white;

}

.head h1 {

	padding: 20px;

	margin: 0;

}

.head_flag {

	float: left;

	margin: 0;

	width: 0;

	height: 0;

	padding: 0;

	border: 0;

	border-top: 20px rgba(215, 41, 80, .8) solid;

	border-right: 20px rgba(215, 41, 80, 0) solid;

	border-left: 0;

}

.head_right > h1, .head_right > h2, .head_right > h3 {

	display: inline-block;

	padding: 20px 0;

	margin: 0 6px;

	line-height: 1.2em;

	color: #444;

}

.head_right > h3 > span {

	font-size: 1.3em;

	margin: 0 6px;

	color: black;

}

.clear {

	clear: both;

}

<!--

底部工具--> 

.ctrl_tool {

	position: fixed;

	left: 0;

	bottom: 0;

	/*background: rgba(0,0,0,.7);*/

	background: rgba(33,33,33,.6);

	width: 100%;

	height: 40px;

	z-index: 100;

}

.ctrl_button {

	width: 26px;

	height: 26px;

	display: inline-block;

	overflow: hidden;

	cursor: pointer;

	margin: 5px 20px;

	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, .2);

	-moz-box-shadow: 1px 1px 1px rgba(0,0,0,.2);

	box-shadow: 1px 1px 1px rgba(0, 0, 0, .2);

}

.ctrl_button img {

	padding: 0;

	margin: 0;

	border: 0;

	width: 100%;

	height: 100%;

}

<!--

结束-->

</style>

</head>



<body>



<div  id="head" class="head" style="background: rgba(255, 255, 255, .9);margin: 10px; width:930px; margin-left:auto; margin-right:auto">

  <div class="head_left">

    <div class="head_info">

      <h1>微信火拼摇一摇</h1>

    </div>

    <div class="head_flag"></div>

  </div>

  <div class="head_right"> <img src="http://5.lkdzs.sinaapp.com/img/bullhorn.png" width="32" height="32"  alt=""/>

    <h2>添加</h2>

    <h1><?php echo ($info["acttitle"]); ?></h1>

    <h2>公众账号</h2>

    <h3>发送<span>yyy&nbsp;+ 你的手机号</span>即可参与游戏</h3>

  </div>

  <div class="clear"></div>

</div>

<div id="ranking">

  <?php
 $ka=$info['shownum']; $class=array('blue stripes','orange shine','green glow','blue stripes','orange shine','green glow','blue stripes','orange shine','green glow','green glow'); for($i=0;$i<$ka;$i++){ echo "<div class='progress-wbar' style='background-color: #3A3434' id='f$i'><div class='huangguan' style='background: url(tpl/User/default/hg/$i.png) no-repeat center'></div><div class='number'>玩家：<span style='line-height:50px'></span></div><div class='progress-bar ".$class[$i]."'> <span></span> </div>

</div>

"; } ?>

</div>

<!--<div class="page">

  <h1><?php echo ($info["acttitle"]); ?></h1>

  

  <div id="ranking">

     <?php $ka=$info['shownum']; $class=array('blue stripes','orange shine','green glow','blue stripes','orange shine','green glow','blue stripes','orange shine','green glow','green glow'); for($i=0;$i<$ka;$i++){ echo "<div class='progress-bar ".$class[$i]."'>

    <span></span> </div>"; } ?>

      



  </div>--> 

<!--<div id="dd"><input id="ddd" type="button" value="初始化游戏"></div>-->

<div id="bignum">

  <div class="biginner"> <a onClick="qingchu()" id="c" href="javascript:void(0)"><img src="/tpl/User/default/img/player.png"></a>

    <div class="manbox">当前已连接人数&nbsp;&nbsp;&nbsp;&nbsp;<span id="mans"> 0 </span> </div>

  </div>

  <div id="qrcode" style="z-index:99; position:absolute; left:350px; top:15px; display:none; text-align:center; width:600px;height:600px"> <img style="width:557px; height:557px" src="<?php echo ($info["qrcode"]); ?>"> </div>

</div>

<!--底部工具-->

<div id="ctrl_tool" class="ctrl_tool" style="position: fixed;left: 0;bottom: 0;background: rgba(33,33,33,.6);width: 100%;height: 40px;z-index: 100;">

  <div class="ctrl_button" title="显示/隐藏" id="ctrl_hide"><img alt="qrcode" src="/tpl/User/default/img/arrow-left.png"></div>

  <a id="d" href="javascript:$('#qrcode').show()">

  <div class="ctrl_button" title="二维码" id="ctrl_qrcode"><img alt="qrcode" src="/tpl/User/default/img/qrcode-ico.png"></div>

  </a>

  <div class="ctrl_button" title="开始/暂停" id="ctrl_run"><img alt="run" src="/tpl/User/default/img/stop.png"></div>

  <em class="load_text right">3</em> </div>

<!--结束-->

<div id="final">

  <div class="finalbox"></div>

  <div class="wbao">

    <table id="finaltable">

      <tr>

        <th><img src="/tpl/User/default/img/paiming.png"></th>

        <th><img src="/tpl/User/default/img/tel.png"></th>

        <th><img src="/tpl/User/default/img/number.png"></th>

      </tr>

    </table>

  </div>

</div>

</div>

<audio id="p2" autoplay src="<?php echo ($info["pass2"]); ?>" loop></audio>

<div id="ms"></div>

<!-- wtoken.com Baidu tongji analytics -->

<script type="text/javascript">

var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");



document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F866a46b8a4d233aa883b072a2158aaa2' type='text/javascript'%3E%3C/script%3E"));



</script>

</body>

</html>