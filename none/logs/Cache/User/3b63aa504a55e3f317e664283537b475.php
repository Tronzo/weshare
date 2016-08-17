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

<script src="/tpl/static/fushionCharts/JSClass/FusionCharts.js" type="text/javascript"></script>   
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<div class="content">
         
          <div class="cLineB">
              <h4 class="left">粉丝行为统计分析</h4>
                  
              <div class="clr"></div>
          </div>
 <div class="cLineD">

         </div>
          <div class="cLine">
    <div class="ftip" style="margin:0 auto">高级服务号才能使用此功能</div>
</div>
 <div class="msgWrap form">
<ul id="tags" style="width:100%">
		<li <?php if($listinfo == '1'): ?>class="selectTag"<?php endif; ?>>
				<a href="<?php echo U('Wechat_behavior/statistics');?>"><?php echo ($days); ?>日行为统计分析</a> 
			</li>
			<li <?php if($listinfo != '1'): ?>class="selectTag"<?php endif; ?>>
				<a href="<?php echo U('Wechat_behavior/statisticsTrend');?>">趋势对比分析</a> 
			</li>
			<?php if($detail == 1): ?><li style="float:right;background:none">
				<a href="<?php echo U('Wechat_behavior/statistics');?>" style="background:none">返回</a> 
			</li><?php endif; ?>
			<div class="clr" style="height:1px;background:#eee;margin-bottom:20px;"></div>
		</ul>
</div>

          <div class="msgWrap" style="margin-top:50px;">
         <div id="chartdiv1" align="center"></div>
         <?php if($statisticsAll == 1): ?><script type="text/javascript">
					var chart = new FusionCharts("/tpl/static/fushionCharts/Charts/Pie3D.swf", "ChartId", "600", "500", "0", "1");
					//chart.setTransparent("false");
					chart.setDataXML('<?php echo ($xml); ?>');
					//chart.setDataURL("data.html");
					chart.render("chartdiv1");
					</script><?php endif; ?>
         <?php if($detail == 1): ?><script type="text/javascript">
					var chart = new FusionCharts("/tpl/static/fushionCharts/Charts/Bar2D.swf", "ChartId", "600", "500", "0", "1");
					chart.setDataXML('<?php echo ($xml); ?>');
					chart.render("chartdiv1");
					</script><?php endif; ?>
					<?php if($statisticsTrend == 1): ?><script type="text/javascript">
					var chart = new FusionCharts("/tpl/static/fushionCharts/Charts/MSArea.swf", "ChartId", "900", "500", "0", "1");
					chart.setDataXML('<?php echo ($xml); ?>');
					chart.render("chartdiv1");
					</script><?php endif; ?>
          </div>
<?php if (!$statisticsTrend){ ?>

           <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="90%">
              <thead>
                <tr>
					<th style="width:600px;">&nbsp;模块</th>
					<th>次数</th>
					<?php if($detail != 1): ?><th>详情</th><?php endif; ?>
                </tr>
              </thead>
              <tbody>
			  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                  <td>&nbsp;<?php echo ($list["name"]); ?></td>
                  <td><?php echo ($list["count"]); ?></td>
                  <?php if($detail != 1): ?><td>
						<a href="<?php echo U('Wechat_behavior/statisticsOfModule',array('module'=>$list['module']));?>">详情</a>　
						
						
				   </td><?php endif; ?>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                 <tr>

                </tr>
              </tbody>
            </table>
            	<?php
}else { ?>
	<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="90%">
              <thead>
                <tr>
					<th style="width:600px;">&nbsp;模块</th>
					<th align="center" style="text-align:center">上一周期</th>
					<th align="center" style="text-align:center">本周期</th>
					<th align="center" style="text-align:center">趋势</th>
                </tr>
              </thead>
              <tbody>
			  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                  <td>&nbsp;<?php echo ($list["name"]); ?></td>
                  <td align="center"><?php echo ($list["lastcount"]); ?></td>
                   <td align="center"><?php echo ($list["count"]); ?></td>
                 
                  <td align="center">
						<?php if ($list['count']>$list['lastcount']){echo '<span style="color:#f30;font-size:14px;font-weight:bold">↑</span>';}elseif ($list['count']<$list['lastcount']){echo '<span style="color:green;font-size:14px;font-weight:bold">↓</span>';}else {echo '-';}?>
				   </td>
				   
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                 <tr>

                </tr>
              </tbody>
            </table>
	<?php
} ?>
        </div>	
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>