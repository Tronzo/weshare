<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />



<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/yuyue/common.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/yuyue/onlinebooking.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/yuyue/weimob-ui-1-1.css" media="all" />

<script type="text/javascript" src="<?php echo RES;?>/js/yuyue/jQuery.js"></script>



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

        <style>

            img{width:100%!important;}

        </style>

    </head>

    <body onselectstart="return true;" ondragstart="return false;">

        <body id="onlinebooking-list">

<div class="qiandaobanner">

	<a href="javascript:;">

		<?php if($info['topic'] != ''): ?><img src="<?php echo ($info["topic"]); ?>"><?php else: ?><img src="<?php echo RES;?>/images/yuyue/head_pic.jpg"><?php endif; ?>

	</a>

	</div>

	<div class="cardexplain">

	<!--普通用户登"-->

	

</div>

<div class="cardexplain"> 



<!--超过预订时间3天后自动删掉预订记录，免得占服务器资源！-->

 <?php if($data == ''): ?><ul class="round">

 <li class="title">温馨提示</li>

 <li><table style="width:100%" class="jiagebiao">

 <td><tr><p></p></td></tr> <td><tr><p></p></td></tr> <td><tr><p></p></td></tr>

 <tr><td style="margin:0 auto;text-align:center">暂 无 订 单</td></tr>

 <td><tr><p></p></td></tr> <td><tr><p></p></td></tr> <td><tr><p></p></td></tr>

 </table></li>

 </ul><?php endif; ?>

 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><ul class="round">

		<li class="title">

			<span><?php echo ($v["date"]); ?>订单详情

			<?php if($v['type']==0){ ?>

				<em class="no" >等待客服回电</em>

			<?php }elseif($v['type']==1){ ?>

				<em class="no">订单受理中</em>

			<?php }elseif($v['type']==2){ ?>

				<em class="no">订单被拒绝</em>

			<?php } ?>

			

			</span>

		</li>

		<li>

			<div class="text">

			<p>联系人：<?php echo ($v["name"]); ?></p>				

			<p>联系电话：<?php echo ($v["phone"]); ?></p>	
            <p>预约类型：<?php echo ($v["kind"]); ?></p>								

			<p>预约时间 ：<?php echo ($v["or_date"]); ?> <?php echo ($v["time"]); ?></p>				

			<p>提交时间：<?php echo ($v["date"]); ?></p>				

			<p>备注：<?php echo ($v["memo"]); ?></p>

			<div class="footReturn">

				<a id="" style="color:#fff;" class="submit" href="<?php echo U($type.'/set',array('token'=> $v['token'], 'wecha_id'=> $v['wecha_id'], 'id'=> $v['id'], 'pid'=> $v['pid']));?>">修改订单 </a>

			</div>

			</div>

		</li>

	</ul><?php endforeach; endif; else: echo "" ;endif; ?>

<!--页码-->

    </div>

<footer style="text-align:center; color:#ffd800;margin-right:20px;margin-top:0px;"><a>©<?php echo ($info1["copyright"]); ?></a></footer>

         		<div mark="stat_code" style="width:0px; height:0px; display:none;">

					</div>

	<!-- wtoken.com Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F866a46b8a4d233aa883b072a2158aaa2' type='text/javascript'%3E%3C/script%3E"));
</script>
<?php if($kefu['yy'] == '1'): ?><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?> 
 </body>

</html>