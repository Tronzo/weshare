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

<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

  <div class="content"> 
   <div class="cLineB"> 
    <h4>商品设置</h4> 
    <a href="<?php echo U('Store/product',array('token'=>$token,'catid'=>$catid));?>" class="right  btnGreen" style="margin-top:-27px">返回</a> 
   </div> 
<?php if($isUpdate == 1): ?><input type="hidden" name="id" value="<?php echo ($set["id"]); ?>" /><?php endif; ?>
<form method="post" action="" id="formID">
<input type="hidden" name="discount" id="discount" value="<?php echo ($set["discount"]); ?>" />
    <div class="msgWrap bgfc"> 
     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 
      <tbody> 
       <tr> 
        <th><span class="red">*</span>名称：</th> 
        <td>
        <input type="hidden" name="pid" id="pid" value="<?php echo ($set["id"]); ?>"/>
        <input type="text" name="name" id="name" value="<?php echo ($set["name"]); ?>" class="px" style="width:400px;" />
        </td> 
       </tr> 
       <tr> 
        <th>类别：</th> 
        <td><span class="red"><?php echo ($productCatData["name"]); ?></span></td> 
       </tr>
       <?php if(empty($productCatData['color']) != true): ?><tr>
	       <th><?php echo ($productCatData["color"]); ?>：</th>
	       <td>
	       		<table>
	       		<tr>
	       		<?php if(is_array($colorData)): $i = 0; $__LIST__ = $colorData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$norms): $mod = ($i % 2 );++$i;?><td width="130">
				<?php if((in_array($norms['id'], $colorList))): ?><input type="checkbox" name="color[]" value="<?php echo ($norms["id"]); ?>" class="color" id="norms_<?php echo ($norms["id"]); ?>" atr="<?php echo ($norms["value"]); ?>" checked/>&nbsp;&nbsp;<label for="norms_<?php echo ($norms["id"]); ?>"><?php echo ($norms["value"]); ?></label>
				<?php else: ?>
				<input type="checkbox" name="color[]" value="<?php echo ($norms["id"]); ?>" class="color" id="norms_<?php echo ($norms["id"]); ?>" atr="<?php echo ($norms["value"]); ?>"/>&nbsp;&nbsp;<label for="norms_<?php echo ($norms["id"]); ?>"><?php echo ($norms["value"]); ?></label><?php endif; ?>
				</td>
				<?php if(($i%5 == 0)): ?></tr><tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</tr>
				</table>
	       </td>
       </tr><?php endif; ?>
       <!-- 规格 -->
       <?php if(empty($productCatData['norms']) != true): ?><tr>
	       <th><?php echo ($productCatData["norms"]); ?>：</th>
	       <td>
	       		<table>
	       		<tr>
	       		<?php if(is_array($formatData)): $i = 0; $__LIST__ = $formatData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$norms): $mod = ($i % 2 );++$i;?><td width="130">
				<?php if((in_array($norms['id'], $formatList))): ?><input type="checkbox" name="norms[]" value="<?php echo ($norms["id"]); ?>" class="norms" id="norms_<?php echo ($norms["id"]); ?>" atr="<?php echo ($norms["value"]); ?>" checked/>&nbsp;&nbsp;<label for="norms_<?php echo ($norms["id"]); ?>"><?php echo ($norms["value"]); ?></label>
				<?php else: ?>
				<input type="checkbox" name="norms[]" value="<?php echo ($norms["id"]); ?>" class="norms" id="norms_<?php echo ($norms["id"]); ?>" atr="<?php echo ($norms["value"]); ?>"/>&nbsp;&nbsp;<label for="norms_<?php echo ($norms["id"]); ?>"><?php echo ($norms["value"]); ?></label><?php endif; ?>
				</td>
				<?php if(($i%5 == 0)): ?></tr><tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</tr>
				</table>
	       </td>
       </tr><?php endif; ?>
       <tr>
			<td colspan="2">
				<table id="priceList">
					<?php if(($productDetailData != null) ): ?><tr><th width="130">产品外观</th><th width="130">产品规格</th><th width="130">价格</th><th width="130">会员价</th><th width="130">数量</th></tr>
			        <?php if(is_array($productDetailData)): $i = 0; $__LIST__ = $productDetailData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$detail): $mod = ($i % 2 );++$i;?><input type="hidden" class="editselect" value="<?php echo ($detail["id"]); ?>,<?php echo ($detail["color"]); ?>,<?php echo ($detail["colorName"]); ?>,<?php echo ($detail["format"]); ?>,<?php echo ($detail["formatName"]); ?>,<?php echo ($detail["price"]); ?>,<?php echo ($detail["vprice"]); ?>,<?php echo ($detail["num"]); ?>"/>
				       <tr class="tnorms">
					       <td width="130"><?php echo ($detail["colorName"]); ?><input type="hidden" value="<?php echo ($detail["color"]); ?>"/></td>
					       <td width="130"><?php echo ($detail["formatName"]); ?><input type="hidden" value="<?php echo ($detail["format"]); ?>"/></td>
					       <td width="130"><input type="text" class="px" style="width:60px;" value="<?php echo ($detail["price"]); ?>"/></td>
					       <td width="130"><input type="text" class="px" style="width:60px;" value="<?php echo ($detail["vprice"]); ?>"/></td>
					       <td width="130"><input type="text" class="px" style="width:60px;" value="<?php echo ($detail["num"]); ?>"/></td>
					       <td width="130"><input type="hidden" value="<?php echo ($detail["id"]); ?>"/></td>
				       </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
				</table>
			</td>
       </tr>
       <?php if(is_array($attributeData)): $i = 0; $__LIST__ = $attributeData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attribute): $mod = ($i % 2 );++$i;?><tr>
		       <th><?php echo ($attribute["name"]); ?>：</th>
		       <td>
					<input type="text" value="<?php echo ($attribute["value"]); ?>" class="attribute px" style="width:400px;" atr="<?php echo ($attribute["name"]); ?>" id="<?php echo ($attribute["id"]); ?>" aid="<?php echo ($attribute["aid"]); ?>"/>
		       </td>
	       </tr><?php endforeach; endif; else: echo "" ;endif; ?>
       <tr> 
        <th><span class="red">*</span>价格：</th>
        <td><input type="text" id="price" name="price" value="<?php echo ($set["price"]); ?>" class="validate[required, length[0,20]] px" style="width:100px;" /> 元</td> 
       </tr>
       <tr> 
        <th><span class="red">*</span>会员价：</th> 
        <td><input type="text" id="vprice" name="vprice" value="<?php echo ($set["vprice"]); ?>" class="px" style="width:100px;" /> 元</td> 
       </tr>
       <tr> 
        <th><span class="red">*</span>原价：</th> 
        <td><input type="text" id="oprice" name="oprice" value="<?php echo ($set["oprice"]); ?>" class="px" style="width:100px;" /> 元</td> 
       </tr>
       <tr> 
        <th>库存：</th> 
        <td><input type="text" id="num" name="num" value="<?php echo ($set["num"]); ?>" class="px" style="width:100px;" /></td> 
       </tr>
       <tr> 
        <th>邮费：</th> 
        <td><input type="text" id="mailprice" name="mailprice" value="<?php echo ($set["mailprice"]); ?>" class="px" style="width:100px;" /> 元</td> 
       </tr>
        <tr> 
        <th><span class="red">*</span>关键词：</th>
        <td><input type="text" name="keyword" id="keyword" value="<?php echo ($set["keyword"]); ?>" class="px" style="width:400px;" /></td> 
       </tr>
       <tr> 
        <th>Logo地址：</th>
        <td><input type="text" name="logourl" value="<?php echo ($set["logourl"]); ?>" class="px" id="pic" style="width:400px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic',700,700,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic')">预览</a></td> 
       </tr>
       <tr> 
        <th>展示图片一：</th>
        <td><input type="text" name="image1" value="<?php echo ($imageList[0]["image"]); ?>" imageid="<?php echo ($imageList[0]["id"]); ?>" class="px" id="image1" style="width:400px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('image1',700,700,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('image1')">预览</a></td> 
       </tr>
       <tr> 
        <th>展示图片二：</th>
        <td><input type="text" name="image2" value="<?php echo ($imageList[1]["image"]); ?>" imageid="<?php echo ($imageList[1]["id"]); ?>" class="px" id="image2" style="width:400px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('image2',700,700,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('image2')">预览</a></td> 
       </tr>
       <tr> 
        <th>展示图片三：</th>
        <td><input type="text" name="image3" value="<?php echo ($imageList[2]["image"]); ?>" imageid="<?php echo ($imageList[2]["id"]); ?>" class="px" id="image3" style="width:400px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('image3',700,700,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('image3')">预览</a></td> 
       </tr>
       <tr> 
        <th>展示图片四：</th>
        <td><input type="text" name="image4" value="<?php echo ($imageList[3]["image"]); ?>" imageid="<?php echo ($imageList[3]["id"]); ?>" class="px" id="image4" style="width:400px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('image4',700,700,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('image4')">预览</a></td> 
       </tr>
       <tr> 
        <th>展示图片五：</th>
        <td><input type="text" name="image5" value="<?php echo ($imageList[4]["image"]); ?>" imageid="<?php echo ($imageList[4]["id"]); ?>" class="px" id="image5" style="width:400px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('image5',700,700,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('image5')">预览</a></td> 
       </tr>
       <tr> 
        <th>展示图片六：</th>
        <td><input type="text" name="image6" value="<?php echo ($imageList[5]["image"]); ?>" imageid="<?php echo ($imageList[5]["id"]); ?>" class="px" id="image6" style="width:400px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('image6',700,700,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('image6')">预览</a></td> 
       </tr>
       <tr> 
        <th>排序：</th> 
        <td><input type="text" id="sort" name="sort" value="<?php echo ($set["sort"]); ?>" class="px" style="width:50px;" />  数字越小排再越前（大于等于0的整数）</td> 
       </tr>
       <TR>
          <TH valign="top"><label for="info">图文详细页内容：</label></TH>
          <TD><textarea name="intro" id="intro"  rows="5" style="width:590px;height:360px"><?php echo ($set["intro"]); ?></textarea></TD>
       </TR>  
       <tr>         
       <th>&nbsp;</th>
       <td>
       <button type="button" name="button" class="btnGreen" id="save">保存</button> &nbsp; <a href="<?php echo U('Store/index',array('token'=>$token, 'catid' => $catid));?>" class="btnGray vm">取消</a></td> 
       </tr> 
      </tbody> 
     </table> 
     </div>
</form>
  </div> 
<script type="text/javascript">

$(document).ready(function(){
	
	var oldselect = [];
	$(".editselect").each(function(){
		var t = $(this).val().split(",");
		//alert(t[0]+'---'+ parseInt(t[1])+'---'+  t[2]+'---'+  t[3]+'---'+  t[4]+'---'+  t[5]+'---'+  t[6]);
		oldselect[t[1] + '_' + t[3]] = new Array(t[0], t[1], t[2], t[3], t[4], t[5], t[6], t[7]);
	});
	$(".color").click(function(){
		var selectValue = [];
		var html = '';
		var header = '<tr><th width="130">产品外观</th><th width="130">产品规格</th><th width="130">价格</th><th width="130">会员价</th><th width="130">数量</th></tr>';
		if ($(".norms").html() == null) {
			$(".color").each(function(){
				if ($(this).attr('checked')) {
					var color = $(this).attr('atr');
					var colorid = $(this).val();
					selectValue[colorid + '_' + 0] = new Array(0, colorid, color, 0, '', 0, 0, 0);
				}
			});
		} else {
			$(".color").each(function(){
				if ($(this).attr('checked')) {
					var color = $(this).attr('atr');
					var colorid = $(this).val();
					$(".norms").each(function(){
						if ($(this).attr('checked')) {
							var norms = $(this).attr('atr');
							var normsid = $(this).val();
							selectValue[colorid + '_' + normsid] = new Array(0, colorid, color, normsid, norms, 0, 0, 0);
							//selectValue[colorid + '_' + normsid] = '<tr class="tnorms"><td width="130">' + color + '<input type="hidden" value="' + colorid + '"/></td><td width="130">' + norms + '<input type="hidden" value="' + normsid + '"/></td><td width="130"><input type="text" class="px" style="width:60px;"/></td><td width="130"><input type="text" class="px" style="width:60px;"/></td><td><input type="hidden" value="0"/></td></tr>';
						}
					});
				}
			});
		}
		for (var index in selectValue) {
			if (oldselect[index] != null && oldselect[index] != '') {
				html += '<tr class="tnorms"><td width="130">' + oldselect[index][2] + '<input type="hidden" value="' + oldselect[index][1] + '"/></td>';
				html += '<td width="130">' + oldselect[index][4] + '<input type="hidden" value="' + oldselect[index][3] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + oldselect[index][5] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + oldselect[index][6] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + oldselect[index][7] + '"/></td>';
				html += '<td><input type="hidden" value="' + oldselect[index][0] + '"/></td></tr>';
			} else {
				html += '<tr class="tnorms"><td width="130">' + selectValue[index][2] + '<input type="hidden" value="' + selectValue[index][1] + '"/></td>';
				html += '<td width="130">' + selectValue[index][4] + '<input type="hidden" value="' + selectValue[index][3] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + selectValue[index][5] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + selectValue[index][6] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + selectValue[index][7] + '"/></td>';
				html += '<td><input type="hidden" value="' + selectValue[index][0] + '"/></td></tr>';
			}
			//html += selectValue[index];
		}
		if (html != '') {
			$("#priceList").html(header + html);
		} else {
			$("#priceList").html('');
		}
	});
	$(".norms").click(function(){
		var selectValue = [];
		var html = '';
		var header = '<tr><th width="130">产品外观</th><th width="130">产品规格</th><th width="130">价格</th><th width="130">会员价</th><th width="130">数量</th></tr>';
		if ($(".color").html() == null) {
			$(".norms").each(function(){
				if ($(this).attr('checked')) {
					var norms = $(this).attr('atr');
					var normsid = $(this).val();
					selectValue[0 + '_' + normsid] = new Array(0, 0, '', normsid, norms, 0, 0, 0);
					//selectValue[colorid + '_' + normsid] = '<tr class="tnorms"><td width="130">' + color + '<input type="hidden" value="' + colorid + '"/></td><td width="130">' + norms + '<input type="hidden" value="' + normsid + '"/></td><td width="130"><input type="text" class="px" style="width:60px;"/></td><td width="130"><input type="text" class="px" style="width:60px;"/></td><td><input type="hidden" value="0"/></td></tr>';
				}
			});
		} else {
			$(".color").each(function(){
				if ($(this).attr('checked')) {
					var color = $(this).attr('atr');
					var colorid = $(this).val();
					$(".norms").each(function(){
						if ($(this).attr('checked')) {
							var norms = $(this).attr('atr');
							var normsid = $(this).val();
							selectValue[colorid + '_' + normsid] = new Array(0, colorid, color, normsid, norms, 0, 0, 0);
							//selectValue[colorid + '_' + normsid] = '<tr class="tnorms"><td width="130">' + color + '<input type="hidden" value="' + colorid + '"/></td><td width="130">' + norms + '<input type="hidden" value="' + normsid + '"/></td><td width="130"><input type="text" class="px" style="width:60px;"/></td><td width="130"><input type="text" class="px" style="width:60px;"/></td><td><input type="hidden" value="0"/></td></tr>';
						}
					});
				}
			});
		}
		for (var index in selectValue) {
			if (oldselect[index] != null && oldselect[index] != '') {
				html += '<tr class="tnorms"><td width="130">' + oldselect[index][2] + '<input type="hidden" value="' + oldselect[index][1] + '"/></td>';
				html += '<td width="130">' + oldselect[index][4] + '<input type="hidden" value="' + oldselect[index][3] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + oldselect[index][5] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + oldselect[index][6] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + oldselect[index][7] + '"/></td>';
				html += '<td><input type="hidden" value="' + oldselect[index][0] + '"/></td></tr>';
			} else {
				html += '<tr class="tnorms"><td width="130">' + selectValue[index][2] + '<input type="hidden" value="' + selectValue[index][1] + '"/></td>';
				html += '<td width="130">' + selectValue[index][4] + '<input type="hidden" value="' + selectValue[index][3] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + selectValue[index][5] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + selectValue[index][6] + '"/></td>';
				html += '<td width="130"><input type="text" class="px" style="width:60px;" value="' + selectValue[index][7] + '"/></td>';
				html += '<td><input type="hidden" value="' + selectValue[index][0] + '"/></td></tr>';
			}
			//html += selectValue[index];
		}
		if (html != '') {
			$("#priceList").html(header + html);
		} else {
			$("#priceList").html('');
		}
	});
	$("#save").click(function(){
		
		var name = $("#name").val();
		if (name.length < 1) {
			art.dialog({title:'消息提示', ok:true, width:300, height:200, content:'名称不能为空'});
			return false;
		}
		var num = $("#num").val();
		if (isNaN(num)) {
			art.dialog({title:'消息提示', ok:true, width:300, height:200, content:'库存应该是为正整数'});
			return false;
		}
		var price = $("#price").val();
		var vprice = $("#vprice").val();
		var oprice = $("#oprice").val();
		var mailprice = $("#mailprice").val();
		var keyword = $("#keyword").val();
		var pic = $("#pic").val();
		
		var intro = $("#intro").val();
		var attribute = [];
		var i = 0;
		var str = '';
		$(".attribute").each(function(){
			attribute[i]= {'name':$(this).attr('atr'), 'value':$(this).val(), 'aid':$(this).attr('aid'), 'id':$(this).attr('id')};//new Array($(this).attr('atr'), $(this).val());
			i ++;
		});
		var norms = [];
		var i = 0;
		var tnum = 0;
		$(".tnorms").each(function(){
			tnum += parseInt($(this).children('td').eq(4).children('input').val());
			norms[i]= {'color':$(this).children('td').eq(0).children('input').val(), 'format':$(this).children('td').eq(1).children('input').val(), 'price':$(this).children('td').eq(2).children('input').val(), 'vprice':$(this).children('td').eq(3).children('input').val(), 'num':$(this).children('td').eq(4).children('input').val(), 'id':$(this).children('td').eq(5).children('input').val()};
			i ++;
		});
		if (tnum > 0) {
			num = tnum;
		}
		//num = num > tnum ? num : tnum;
		var image1 = $("#image1").val();
		var image2 = $("#image2").val();
		var image3 = $("#image3").val();
		var image4 = $("#image4").val();
		var image5 = $("#image5").val();
		var image6 = $("#image6").val();
		var imageid1 = parseInt($("#image1").attr('imageid'));
		var imageid2 = parseInt($("#image2").attr('imageid'));
		var imageid3 = parseInt($("#image3").attr('imageid'));
		var imageid4 = parseInt($("#image4").attr('imageid'));
		var imageid5 = parseInt($("#image5").attr('imageid'));
		var imageid6 = parseInt($("#image6").attr('imageid'));
		var images = [];
		images[0] = {'id':imageid1, 'image':image1};
		images[1] = {'id':imageid2, 'image':image2};
		images[2] = {'id':imageid3, 'image':image3};
		images[3] = {'id':imageid4, 'image':image4};
		images[4] = {'id':imageid5, 'image':image5};
		images[5] = {'id':imageid6, 'image':image6};
		var data = {pid:$("#pid").val(),
					name:name,
					num:num,
					price:price,
					vprice:vprice,
					oprice:oprice,
					mailprice:mailprice,
					keyword:keyword,
					pic:pic,
					intro:intro,
					attribute:JSON.stringify(attribute),
					norms:JSON.stringify(norms),
					images:JSON.stringify(images),
					token:'<?php echo ($token); ?>',
					catid:'<?php echo ($catid); ?>',
					sort:$("#sort").val()
					};
		$.post('index.php?g=User&m=Store&a=productSave', data, function(response){
			if (response.error_code == false) {
				art.dialog({
					title:'消息提示', 
				    content: response.msg, 
				    width:300, 
				    height:200,
				    lock: true,
				    ok: function () {
				    	this.time(3);
				    	location.href='index.php?g=User&m=Store&a=product&token=<?php echo ($token); ?>&catid=<?php echo ($catid); ?>'
				        return false;
				    },
				    cancelVal: '关闭'
				});
			} else {
				art.dialog({title:'消息提示', time:2, width:300, height:200, content:response.msg});
			}
			
		}, 'json');
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
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>