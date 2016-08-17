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

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default">
</script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js">
</script>
<style type="text/css">
.userinfoArea th{ width:200px;}
</style>
<div class="content"  style="width:100%" >
  <div class="cLineB">
   
  <h4>在线客服设置： </h4>
 </div>
         
    <div class="msgWrap bgfc">
	  <form class="form" method="post" action=""   >
      <input type="hidden" name="id" value="<?php echo ($kefu["id"]); ?>"/>
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
				<tr>
				  <th valign="top"><span class="red">*</span>关键词：</th>
				  <td width="570">
					<input type="text" name="keyword" id="keyword" value="<?php echo ($kefu["keyword"]); ?>"
                            class="px" style="width:200px;"></td>
				</tr>
				<tr>
				  <th valign="top">标题：</th>
				  <td>
					<input type="text" name="title" id="title" value="<?php echo ($kefu["title"]); ?>"
                            class="px" style="width:200px;"></td>
				</tr>
				<tr>
                        <th>
                            封面图片：
                        </th>
                        <td>
                            <input type="text" name="picurl" id="picurl" value="<?php echo ($kefu["picurl"]); ?>"
                            class="px" style="width:350px;">
                            <script src="/tpl/static/upyun.js">
                            </script>
                            <a href="#" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')"
                            class="btn btn-primary btn_submit  J_ajax_submit_btn">
                                上传
                            </a>
                            <a href="#" onclick="viewImg('picurl')" class="btn btn-primary btn_submit  J_ajax_submit_btn">
                                预览
                            </a>
                        </td>
                </tr>
                <tr>

					<th width="200">内容介绍：</th>

					<td><textarea style="width:400px;height:75px" name="text" id="text" class="px"><?php echo ($kefu["text"]); ?></textarea><br/>最多填写120个字</td>

				</tr>
				
				
					<th>客服链接：</br>（直接聊天）</th>
					<td><input type="text" name="info2" id="info2" value="<?php echo ($kefu["info2"]); ?>" class="px" style="width:400px;">
					</td>
					<td>例如&nbsp;http://kefu6.kuaishang.com.cn/bs/im.htm?cas=10128___177444&fi=10282</td>
				</tr>
				<tr>
				<th></th>
				<td><a style="color:#F00; font-size:15px" target="_blank" href="http://www.kuaishang.cn">点击下载客户端获取相关代码</a></td>
				</tr>
                <tr>
                 

                  <th><span class="red">*</span>微网站客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["status"] == 1): ?>checked="checked"<?php endif; ?> name="status"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["status"] == 0): ?>checked="checked"<?php endif; ?>name="status"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微商城客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["sc"] == 1): ?>checked="checked"<?php endif; ?> name="sc"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["sc"] == 0): ?>checked="checked"<?php endif; ?>name="sc"/>关闭

                  </td>

                </tr>
                  <tr>
                 

                  <th><span class="red">*</span>微餐饮客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["cy"] == 1): ?>checked="checked"<?php endif; ?> name="cy"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["cy"] == 0): ?>checked="checked"<?php endif; ?>name="cy"/>关闭

                  </td>

                </tr>
                  <tr>
                 

                  <th><span class="red">*</span>微论坛客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["lt"] == 1): ?>checked="checked"<?php endif; ?> name="lt"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["lt"] == 0): ?>checked="checked"<?php endif; ?>name="lt"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微预约客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["yy"] == 1): ?>checked="checked"<?php endif; ?> name="yy"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["yy"] == 0): ?>checked="checked"<?php endif; ?>name="yy"/>关闭

                  </td>

                </tr>
                      <tr>
                 

                  <th><span class="red">*</span>微会员客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["hyk"] == 1): ?>checked="checked"<?php endif; ?> name="hyk"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["hyk"] == 0): ?>checked="checked"<?php endif; ?>name="hyk"/>关闭

                  </td>

                </tr>
                  <tr>
                 

                  <th><span class="red">*</span>微汽车客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["car"] == 1): ?>checked="checked"<?php endif; ?> name="car"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["car"] == 0): ?>checked="checked"<?php endif; ?>name="car"/>关闭

                  </td>

                </tr>
                  <tr>
                 

                  <th><span class="red">*</span>微医疗客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["yiliao"] == 1): ?>checked="checked"<?php endif; ?> name="yiliao"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["yiliao"] == 0): ?>checked="checked"<?php endif; ?>name="yiliao"/>关闭

                  </td>

                </tr>
                
				<tr>
                  <tr>
                 

                  <th><span class="red">*</span>微教育客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["jiaoyu"] == 1): ?>checked="checked"<?php endif; ?> name="jiaoyu"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["jiaoyu"] == 0): ?>checked="checked"<?php endif; ?>name="jiaoyu"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微酒店宾馆客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["jdbg"] == 1): ?>checked="checked"<?php endif; ?> name="jdbg"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["jdbg"] == 0): ?>checked="checked"<?php endif; ?>name="jdbg"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微房产馆客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["fc"] == 1): ?>checked="checked"<?php endif; ?> name="fc"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["fc"] == 0): ?>checked="checked"<?php endif; ?>name="fc"/>关闭

                  </td>

                </tr>
                <tr>
                 

                  <th><span class="red">*</span>微ktv馆客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["ktv"] == 1): ?>checked="checked"<?php endif; ?> name="ktv"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["ktv"] == 0): ?>checked="checked"<?php endif; ?>name="ktv"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微酒吧馆客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["jiuba"] == 1): ?>checked="checked"<?php endif; ?> name="jiuba"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["jiuba"] == 0): ?>checked="checked"<?php endif; ?>name="jiuba"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微会所客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["huisuo"] == 1): ?>checked="checked"<?php endif; ?> name="huisuo"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["huisuo"] == 0): ?>checked="checked"<?php endif; ?>name="huisuo"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微美容客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["meirong"] == 1): ?>checked="checked"<?php endif; ?> name="meirong"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["meirong"] == 0): ?>checked="checked"<?php endif; ?>name="meirong"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微装修客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["zhuangxiu"] == 1): ?>checked="checked"<?php endif; ?> name="zhuangxiu"/>开启 <input type="radio" value="0" <?php if($kefu["zhuangxiu"] == 0): ?>checked="checked"<?php endif; ?>name="zhuangxiu"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微食品客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["shipin"] == 1): ?>checked="checked"<?php endif; ?> name="shipin"/>开启 <input type="radio" value="0"  <?php if($kefu["shipin"] == 0): ?>checked="checked"<?php endif; ?>name="shipin"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微健身客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["jianshen"] == 1): ?>checked="checked"<?php endif; ?> name="jianshen"/>开启 <input type="radio" value="0" <?php if($kefu["jianshen"] == 0): ?>checked="checked"<?php endif; ?>name="jianshen"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微政务客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["zhengwu"] == 1): ?>checked="checked"<?php endif; ?> name="zhengwu"/>开启 <input type="radio" value="0" <?php if($kefu["zhengwu"] == 0): ?>checked="checked"<?php endif; ?>name="zhengwu"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微旅游客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["lvyou"] == 1): ?>checked="checked"<?php endif; ?> name="lvyou"/>开启 <input type="radio" value="0" <?php if($kefu["lvyou"] == 0): ?>checked="checked"<?php endif; ?>name="lvyou"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微物业客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["wuye"] == 1): ?>checked="checked"<?php endif; ?> name="wuye"/>开启 <input type="radio" value="0"  <?php if($kefu["wuye"] == 0): ?>checked="checked"<?php endif; ?>name="wuye"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微投票客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["toupiao"] == 1): ?>checked="checked"<?php endif; ?> name="toupiao"/>开启 <input type="radio" value="0"  <?php if($kefu["toupiao"] == 0): ?>checked="checked"<?php endif; ?>name="toupiao"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微调研客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["dianyan"] == 1): ?>checked="checked"<?php endif; ?> name="dianyan"/>开启 <input type="radio" value="0"  <?php if($kefu["dianyan"] == 0): ?>checked="checked"<?php endif; ?>name="dianyan"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>活动报名客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["baoming"] == 1): ?>checked="checked"<?php endif; ?> name="baoming"/>开启 <input type="radio" value="0"  <?php if($kefu["baoming"] == 0): ?>checked="checked"<?php endif; ?>name="baoming"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>在线预定客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["zxyd"] == 1): ?>checked="checked"<?php endif; ?> name="zxyd"/>开启 <input type="radio" value="0"  <?php if($kefu["zxyd"] == 0): ?>checked="checked"<?php endif; ?>name="zxyd"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微邀请客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["yaoqing"] == 1): ?>checked="checked"<?php endif; ?> name="yaoqing"/>开启 <input type="radio" value="0"  <?php if($kefu["yaoqing"] == 0): ?>checked="checked"<?php endif; ?>name="yaoqing"/>关闭

                  </td>

                </tr>
                
                
				<tr>
					<th></th>
					<td><input type="hidden"  name="token" i value="<?php echo ($token); ?>" class="px" style="width:550px;">
						<button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button> &nbsp;&nbsp;<a href="javascript:history.go(-1);" class="btn">取消</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
  </div> 
 
  
        </div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>