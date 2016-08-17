<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/stylet.css" rel="stylesheet" type="text/css" />
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/global.js"></script>
  <link rel="stylesheet" href="/tpl/User/default/common/css/cymain.css" />
  <link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<script src="/tpl/static/upyun.js"></script>

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>

<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />



<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>

<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#content2', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','clearhtml','hr',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut', 'music', 'video'],
afterBlur: function(){this.sync();}
});
});
</script>
<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#content1', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','clearhtml','hr',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut', 'music', 'video'],
afterBlur: function(){this.sync();}
});
});
</script>
<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#content', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','clearhtml','hr',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut', 'music', 'video'],
afterBlur: function(){this.sync();}
});
});
</script>
<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#intro', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','clearhtml','hr',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut', 'music', 'video'],
afterBlur: function(){this.sync();}
});
});
</script>


<style>
.content {
 background:none; margin-left:30px; margin-top:20px; border:none; margin-bottom:30px;
}
</style>
</head>

<body>

 <script src="<?php echo RES;?>/flash/FusionCharts.js" type="text/javascript"></script>
 <script src="<?php echo RES;?>/flash/MSLine.swf" language="javascript" type="text/javascript"></script>      
<style>
    .msgWrap{padding:10px 0;}
    .msgWrap .table{float:left;width:800px;}
    .msgWrap .count{float:right;width:185px;border: 1px solid #e6e6e6;background: #f9f9f9;}
    .msgWrap .count .c_1{text-align: center;font-weight: bold;font-size: 15px;border-bottom: 1px solid #e6e6e6;padding: 5px 0;color: #2F8BC9;}
    .msgWrap .count .c_2{border-bottom: 1px solid #e6e6e6;}
    .msgWrap .count .c_2 .cr1{color: #ff7500;}
    .msgWrap .count .c_2 .cr2{color: #999999;}
    .msgWrap .count .c_2 .cr3{color: #2F8BC9;}
    .msgWrap .count .c_2 .p_t{text-align: center;font-weight: bold; font-size: 3em;padding-top: 10px;}
    .msgWrap .count .c_2 .p_b{text-align: center;font-size: 14px;padding-bottom: 5px;height: 25px;line-height: 25px;}
    .msgWrap .count .c_3{text-align: center;font-size: 12px;padding: 5px 0;height: 25px;line-height: 25px;}
</style>

<div class="content">
<div class="cLineB">
<h4><?php if($set_name != ''): ?>“<?php echo ($set_name); ?>”提交统计<?php else: ?>用户表单提交统计<?php endif; ?> </h4>
<div class="clr"></div>
</div>

<style>
    #tags .btn btn-primary btn_submit  J_ajax_submit_btn{background-image:none;background-color: #5BA607;color:#ffffff;height:30px;line-height: 30px;}
    #tags .btn btn-primary btn_submit  J_ajax_submit_btn:hover{background-color: #2F8BC9}
</style>
<div class="msgWrap form">
<ul id="tags" style="width:100%;margin:0;">
        <li <?php if(ACTION_NAME == 'record'): ?>class="selectTag"<?php endif; ?>>
                <a href="<?php echo U('Custom/record');?>">表单数据统计</a> 
            </li>
            <li <?php if(ACTION_NAME != 'record'): ?>class="selectTag"<?php endif; ?>>
                <a href="<?php echo U('Custom/index');?>">表单设置项</a> 
            </li>
            <?php if($set_id != ''): ?><li style="float:right;">
                <a href="<?php echo U('Custom/index',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">返回</a>
            </li><?php endif; ?>
            <div class="clr" style="height:1px;background:#eee;margin-bottom:20px;"></div>
        </ul>
</div>

<div class="searchbar right"> </div>
<div class="clr"></div>

        	<h4 class="cLineB">选择年份<select class="setting-period" name="year" id="year" onchange="doit($('#period').val())"><?php echo ($yearOption); ?></select> 选择月份&nbsp;&nbsp;<select class="setting-period" name="period" id="period" onchange="doit(this.value)">
                
            <option value="1" <?php if($month == 1): ?>selected<?php endif; ?>>1月</option>
            <option value="2" <?php if($month == 2): ?>selected<?php endif; ?>>2月</option>
            <option value="3" <?php if($month == 3): ?>selected<?php endif; ?>>3月</option>
            <option value="4" <?php if($month == 4): ?>selected<?php endif; ?>>4月</option>
            <option value="5" <?php if($month == 5): ?>selected<?php endif; ?>>5月</option>
            <option value="6" <?php if($month == 6): ?>selected<?php endif; ?>>6月</option>
            <option value="7" <?php if($month == 7): ?>selected<?php endif; ?>>7月</option>
            <option value="8" <?php if($month == 8): ?>selected<?php endif; ?>>8月</option>
            <option value="9" <?php if($month == 9): ?>selected<?php endif; ?>>9月</option>
            <option value="10" <?php if($month == 10): ?>selected<?php endif; ?>>10月</option>
            <option value="11" <?php if($month == 11): ?>selected<?php endif; ?>>11月</option>
            <option value="12" <?php if($month == 12): ?>selected<?php endif; ?>>12月</option>
            </select></h4>
                <script>
function doit(month){
    var year = $('#year').val();
    location.href= '<?php echo U('Custom/record',array('token'=>$token,'set_id'=>$set_id));?>&'+'month='+month+'&year='+year;
}
</script>
<div class="msgWrap">
    <div class="table">
       <table width="100%" cellspacing="0" cellpadding="0" border="0"
 		<tbody>
 			<tr>
 				<td align="center" bgcolor="#f9f9f9">
					<div id="chartdiv1" align="center">
					</div>
					<script type="text/javascript">
						var chart = new FusionCharts("<?php echo RES;?>/flash/MSLine.swf", "ChartId", "800", "260", "0", "1");
						//chart.setTransparent("false");
						chart.setDataXML('<?php echo ($xml); ?>');
						//chart.setDataURL("data.html");
						chart.render("chartdiv1");
					</script>
 				</td>
			</tr>
                <tr>
 				<td align="center" bgcolor="#f9f9f9">
                  <div id="chartdiv2" align="center"></div>
 				</td>
				</tr>
 			</tbody>
 		</table>   
    </div>
    <div class="count">
        <div class="c_1">表单提交统计</div>
        <div class="c_2">
            <p class="p_t cr1"><?php echo ($today_count); ?></p>
            <p class="p_b cr1">今日提交总数</p>             
            <p class="p_t cr2"><?php echo ($yesterday_count); ?></p>
            <p class="p_b cr2">昨日提交总数</p>                   
        </div>
        <div class="c_3">提交总计<?php echo ($count); ?>次</div>
    </div>    
<div class="clr"></div>
</div>
 
</div>

  <div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>