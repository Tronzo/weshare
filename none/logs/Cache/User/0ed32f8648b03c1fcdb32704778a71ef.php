<?php if (!defined('THINK_PATH')) exit();?><script src="/tpl/static/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="/tpl/static/upyun.js?2013"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<style>
.action {
    background: none repeat scroll 0 0 #FFFFFF;
    box-shadow: 1px 1px 3px #666666;
    width: 359px;
}
a{text-decoration:none}
a.btn btn-primary btn_submit  J_ajax_submit_btn,a.btn btn-primary btn_submit  J_ajax_submit_btn{border:1px solid #3d810c;box-shadow:0 1px #CCCCCC;-moz-box-shadow:0 1px #CCCCCC;-webkit-box-shadow:0 1px #CCCCCC;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;vertical-align:middle;background-color:#f1f1f1;background-image: -webkit-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); color:#000;border:1px solid #AAA;padding:2px 8px 2px 8px;text-shadow: 0 1px #FFFFFF;font-size: 14px;line-height: 1.5;
}
td{text-align: -webkit-left;font-size:12px;}
</style>

	<form action="" method="post" target="_parent" id="realinfo_form">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
		<tr bgcolor="#F1F1F1">
			<td align="right" height="62" width="">父级菜单：</td>
			<td>
				<div class="mr15 l">
				<select name="pid" id="pid">
					<option selected="selected" value="0">请选择菜单：</option>
					<?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$class): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($class["id"]); ?>"><?php echo ($class["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</div>
			</td>
		</tr>
		<tr>
			<td align="right" height="62" width="">主菜单名称：</td>
			<td>
				<div class="mr15 l">
				<input id="menu_title" class="txt" name="title" title="主菜单名称" value="" type="text"></div>
				<div class="system l"></div>
			</td>
		</tr>					
		<tr bgcolor="#F1F1F1">
			<td align="right" height="62" width="">关联关键词：</td>
			<td>
				<div class="mr15 l"><input id="menu_keyword" class="txt" name="keyword" title="关联关键词" value="" type="text"> <a href="###" onclick="addLink('menu_keyword',1)" class="btn btn-primary btn_submit  J_ajax_submit_btn">从功能库添加</a></div>
				<div class="system l"></div>
			</td>
		</tr>
		<tr>
			<td align="right" height="62" width="">外链接url：</td>
			<td>
				<div class="mr15 l"><input id="url" class="txt" name="url" title="外链接url" value="" type="text"><a href="###" onclick="addLink('url',0)" class="btn btn-primary btn_submit  J_ajax_submit_btn">从功能库添加</a> <br/>如无特殊需要，这里请不要填写 (如果要实现一键拨号，请填写"tel:您的电话号码")</div>
				<div class="system l"></div>
			</td>
		</tr>
		<tr bgcolor="#F1F1F1">
			<td align="right" height="62">显示：</td>
			<td>
				<div class="mr15 l">
				<input type="radio" name="is_show" checked="checked" value="1">是&nbsp;
				<input type="radio" name="is_show" value="0">否&nbsp;
				</div>
				<div class="system l"></div>
			</td>
		</tr>
		<tr>
			<td align="right" height="62">排序：</td>
			<td>
				<div class="mr15 l">
				<input id="sortid" class="txt" name="sort" title="排序" value="" type="text"></div>
				<div class="system l"></div>
			</td>
		</tr>
		<tr bgcolor="#F1F1F1">
			<td height="42">&nbsp;</td>
			<td>
				<input class="btn" type="submit" name="submit" value="提交">
			</td>
		</tr>
			
	</tbody></table>
</form>