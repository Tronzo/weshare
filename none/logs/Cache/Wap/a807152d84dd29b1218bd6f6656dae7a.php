<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0081)http://digi.tech.qq.com/areyougeek/wwdc14.htm?from=singlemessage&isappinstalled=0 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<meta charset="">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<meta name="description" content="微乾隆技术支持，极客答题王">
<meta name="keywords" content="微乾隆技术支持，极客答">
<title><?php echo ($copyright["title"]); ?></title>
<link rel="stylesheet" type="text/css" href="/tpl/Wap/default/common/jikedati//survey.css">
<script type="text/javascript" charset="utf-8" async data-requirecontext="_" data-requiremodule="zepto" src="/tpl/Wap/default/common/jikedati/zepto.min.js"></script><script type="text/javascript" charset="utf-8" async data-requirecontext="_" data-requiremodule="corssdomain_http" src="/tpl/Wap/default/common/jikedati/corssdomain_http.js"></script><script type="text/javascript" charset="utf-8" async data-requirecontext="_" data-requiremodule="weixin_api" src="/tpl/Wap/default/common/jikedati/weixin_api.js"></script>
<style type="text/css">
.copyright {
padding: 8px;
text-align: center;
font-size: 14px;
color: #333;
}
#again {
	display: none;
}          /*banner图*/
.page-content {
	background-image: url(<?php echo ($copyright["banner"]); ?>);
}          /*封面图*/
.home .page-content {
	background-image: url(<?php echo ($copyright["banner"]); ?>);
}          /* 主题色*/
.progress div, h2 {
	color: #7cac0a;
}
.progress div, h2 {
	border: 5px solid #7cac0a;
}
.options li, .home .start span {
	background-color: #7cac0a;
}          /*主题按下色*/
.options li:active, .home .start span:active {
	background-color: #415c02;
}          /*结果反色*/
.result .score {
	background-color: #f85b28;
}
.result .score span i {
	color: #f85b28;
}
</style>
</head>
<body>
<div class="window">
  <div class="pages" style="width: 15900px; ">
    <div class="page home" style="width: 1325px; ">
      <div class="page-content">
        <h1></h1>
        <div class="start">
          <div><span>开始</span></div>
        </div>
      </div>
    </div>
   
    
    <div class="page result" style="width: 1325px; ">
      <div class="page-content">
        <div class="score"><b>0</b><span>你的<i>GEEK</i>指数</span></div>
        <p class="discription"></p>
        <ul class="options">
          <li id="share"><span class="share">给好友看看</span></li>
          <li id="again"></li>
          <li id="weixin" style="display: none; ">点击进入微信公众号</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="share_overmask">
    <div class="share_arrow"></div>
    <div class="share_words"></div>
  </div>
</div>
<script>
window.page_config ={
  "subject": [
   <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>{
      "voteid": "10003469",
      "subjectid": "6762",
      "title": "<?php echo ($vo["timu"]); ?>",
      "option": [
        {
          "voteid": "10003469",
          "subjectid": "6762",
          "optionid": "24888",
          "title": "<?php echo ($vo["answer1"]); ?>",
          "score": "<?php echo ($vo["score1"]); ?>"
        },
        {
          "voteid": "10003469",
          "subjectid": "6762",
          "optionid": "24889",
          "title": "<?php echo ($vo["answer2"]); ?>",
          "score": "<?php echo ($vo["score2"]); ?>"
        },
		{
          "voteid": "10003469",
          "subjectid": "6762",
          "optionid": "24889",
          "title": "<?php echo ($vo["answer3"]); ?>",
          "score": "<?php echo ($vo["score3"]); ?>"
        },
		{
          "voteid": "10003469",
          "subjectid": "6762",
          "optionid": "24889",
          "title": "<?php echo ($vo["answer4"]); ?>",
          "score": "<?php echo ($vo["score4"]); ?>"
        
         }
      ]
    },<?php endforeach; endif; else: echo "" ;endif; ?>
    ],
   
  "result": [
    {
      "range_start": "0",
      "range_end": "60",
      "summary": "<?php echo ($copyright["tip1"]); ?>"
    },
    {
      "range_start": "60",
      "range_end": "90",
      "summary": "<?php echo ($copyright["tip2"]); ?>"
    },
    {
      "range_start": "90",
      "range_end": "100",
      "summary": "<?php echo ($copyright["tip3"]); ?>"
    }
  ],
  "share": {
    "icon": "http://pnewsapp.tc.qq.com/newsapp_ls/0/18464751/0",
    "title": "敢说自己是大神不？快来答题，是真是假分分钟鉴定完毕！",
    "abstract": "快来答题，看你能拿多少分！"
  },
  "weixin": {
    "username": "",
    "nickname": ""
  },
  "style": {
    "color": "#7cac0a",
    "cover": "<?php echo ($copyright["banner"]); ?>",
    "banner": "<?php echo ($copyright["banner"]); ?>"
  },
  "index": {
    "name": "<?php echo ($copyright["scorename"]); ?>"
  },
  "next": {
    "title": "",
    "url": ""
  },
  voteid:10003469
};

</script> 
<script type="text/javascript" src="/tpl/Wap/default/common/jikedati/require.js" charset="UTF-8"></script> 
<script type="text/javascript" src="/tpl/Wap/default/common/jikedati/survey.js" charset="UTF-8"></script>
<div class="copyright">



<?php echo ($copyright["copyright"]); ?>



</div>
</body>
<style type="text/css" id="__360se6_success_css"></style>
</html>