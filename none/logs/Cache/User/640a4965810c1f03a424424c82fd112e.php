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

<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>  
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="/tpl/static/upyun.js?<?php echo date('YmdHis',time());?>"></script>
<div class="content">
         
          <div class="cLineB">
              <h4 class="left">当前位置：<a href="<?php echo U('Member_card/index',array('token'=>$token));?>">会员卡</a> >> <a href="<?php echo U('Member_card/members',array('token'=>$token,'id'=>$thisCard['id']));?>"><?php echo ($thisCard["cardname"]); ?>会员管理</a> >> <?php echo ($thisUser["truename"]); ?></h4>
                 
              <div class="clr"></div>
          </div>
      
          <div class="msgWrap">
          
         
          <input name="delall"  type="hidden" value="del" />
           <input name="wxid"  type="hidden" value="gh_423dwjkewad" />
           <h5 style="margin-top:20px;">会员资料</h5>
            <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR>
				<TH>卡号</TH>
				<TH>微信名</TH>
				<TH>姓名</TH>
        <TH>联系电话</TH>
				<TH>QQ号码</TH> 
        <TH>领卡时间</TH>
        <TH>积分</TH>
        <TH>消费总额(元)</TH>
        <TH>余额(元)</TH>

                </TR>
              </THEAD>
              <TBODY>
                <TR></TR>

				 <?php if(is_array($members)): $i = 0; $__LIST__ = $members;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><TR>
                  <TD><?php echo ($list["number"]); ?></TD>
                  <TD><?php echo ($list["wechaname"]); ?></TD>
                  <TD><?php echo ($list["truename"]); ?></TD>
                  <TD><?php echo ($list["tel"]); ?></TD>
                  <TD><?php echo ($list["qq"]); ?></TD> 
                  <TD>
                   <?php if($list['getcardtime'] > 0): echo (date('Y-m-d',$list["getcardtime"])); ?>
                    <?php else: ?>
                    无时间记录<?php endif; ?>                      
                  </TD>
                  <TD><?php echo ($list["total_score"]); ?></TD> 
                  <TD><?php echo ($list["expensetotal"]); ?></TD> 
                  <TD><?php echo ($list["balance"]); ?> &nbsp; <a href="###" onclick="memberCardRecharge(<?php echo ($list["uid"]); ?>)" class="btn btn-primary btn_submit  J_ajax_submit_btn">充值</a></TD> 
                </TR>
					<?php $wecha_id = $list['wecha_id']; endforeach; endif; else: echo "" ;endif; ?>


              </TBODY>
            </TABLE>

  <!-- 导入 -->	
			<div style="margin-top:20px;">
				<a href="###" onclick="$('#import').css('display','')" class="btnGrayS vm">导入积分、线下消费记录</a>
				<a href="/tpl/User/default/common/images/cardUseRecord.xls" class="btnGrayS vm">下载导入示例Excel</a>
				<a href="?g=User&amp;m=Member_card&amp;a=exportCardUseRecord&wecha_id=<?php echo ($wecha_id); ?>" class="btnGrayS vm">导出此会员的积分、线下消费记录</a>
				<a href="?g=User&amp;m=Member_card&amp;a=exportCardUseRecord&wecha_id=<?php echo ($wecha_id); ?>&amp;type=all" class="btnGrayS vm">导出所有会员的积分、线下消费记录</a>
			</div>
			
			<div style="margin-top: 20px;display:none" id="import">
				<form enctype="multipart/form-data" action="?g=User&amp;m=Upyun&amp;a=localUploadUsecordExcel" id="thumbForm" method="POST" style="font-size:14px;padding:10px 20px 10px 0px;">
					<div>
						选择本地文件：<input type="file" style="width:250px;border:1px solid #ddd" name="photo">
						<input id="submitbtn" name="doSubmit" type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn" value="上传" onclick="this.value='上传中...'">
						<input name="id" type="hidden" value="<?php echo (intval($_GET['id'])); ?>" />
						<input name="wecha_id" type="hidden" value="<?php echo ($wecha_id); ?>" />
						<a href="###" onclick="$('#import').css('display','none')" class="btnGrayS vm">取消导入</a> 注意：不支持xlsx格式
					</div>
				</form>
			</div>
<!-- 导入end -->	  
<h5 style="margin-top:20px;">积分、线下消费记录</h5>
            <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR>
				<TH>日期</TH>
				<TH>金额(元)</TH>
				<TH>获取积分</TH>
				<TH>操作</TH>

                </TR>
              </THEAD>
              <TBODY>
				 <?php if(is_array($records)): $i = 0; $__LIST__ = $records;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><TR>
                  <TD><?php echo (date('Y-m-d',$r["time"])); ?></TD>
                  <TD><?php echo ($r["expense"]); ?></TD>
                  <TD><?php echo ($r["score"]); ?></TD>
                
                  <TD><a href="javascript:drop_confirm('您确定要删除吗?', '/index.php?g=User&m=Member_card&a=useRecord_del&token=<?php echo ($_GET['token']); ?>&itemid=<?php echo ($r["id"]); ?>&id=<?php echo ($thisCard["id"]); ?>');"><strong>删除</strong></a></TD> 
                </TR><?php endforeach; endif; else: echo "" ;endif; ?>
              </TBODY>
            </TABLE>
			<div class="cLine">
            <div class="pageNavigator right">
                <div class="pages"><?php echo ($page); ?></div>
              </div>
            <div class="clr"></div>
          </div>
  <!-- 导入 -->	
			<div style="margin-top:20px;">
				<a href="###" onclick="$('#import2').css('display','')" class="btnGrayS vm">导入会员卡消费记录</a>
				<a href="/tpl/User/default/common/images/CardPayRecord.xls" class="btnGrayS vm">下载导入示例Excel</a>
				<a href="?g=User&amp;m=Member_card&amp;a=exportrmb&wecha_id=<?php echo ($wecha_id); ?>" class="btnGrayS vm">导出此会员的会员卡消费记录</a>
				<a href="?g=User&amp;m=Member_card&amp;a=exportrmb&wecha_id=<?php echo ($wecha_id); ?>&amp;type=all" class="btnGrayS vm">导出所有会员的会员卡消费记录</a>
			</div>
			
			<div style="margin-top: 20px;display:none" id="import2">
				<form enctype="multipart/form-data" action="?g=User&amp;m=Upyun&amp;a=localUploadPayrecordExcel" id="thumbForm2" method="POST" style="font-size:14px;padding:10px 20px 10px 0px;">
					<div>
						选择本地文件：<input type="file" style="width:250px;border:1px solid #ddd" name="photo">
						<input id="submitbtn2" name="doSubmit" type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn" value="上传" onclick="this.value='上传中...'">
						<input name="id" type="hidden" value="<?php echo (intval($_GET['id'])); ?>" />
						<input name="wecha_id" type="hidden" value="<?php echo ($wecha_id); ?>" />
						<a href="###" onclick="$('#import2').css('display','none')" class="btnGrayS vm">取消导入</a> 注意：不支持xlsx格式
					</div>
				</form>
			</div>
<!-- 导入end -->	
			<h5 style="margin-top:20px;">会员卡消费记录</h5>
            <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR>
				<TH>日期</TH>
				<TH>订单号</TH>
				<TH>订单名称</TH>
				<TH>交易金额</TH>
				<TH>状态</TH>
        <TH>操作</TH>

                </TR>
              </THEAD>
              <TBODY>
				 <?php if(is_array($rmb)): $i = 0; $__LIST__ = $rmb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rmb): $mod = ($i % 2 );++$i;?><TR>
                  <TD><?php echo (date('Y-m-d H:i',$rmb["createtime"])); ?></TD>
                  <TD><?php echo ($rmb["orderid"]); ?></TD>
                  <TD><?php echo ($rmb["ordername"]); ?></TD>
                  <TD><?php echo ($rmb["price"]); ?></TD>
                  <TD><?php if($rmb['paid'] == 1): ?>交易成功<?php else: ?><font color="red">未付款</font><?php endif; ?></TD>
               
                  <TD><a href="javascript:drop_confirm('您确定要删除吗?', '/index.php?g=User&m=Member_card&a=payRecord_del&id=<?php echo ($rmb["id"]); ?>');"><strong>删除</strong></a></TD> 
                </TR><?php endforeach; endif; else: echo "" ;endif; ?>
              </TBODY>
            </TABLE>
			
			
			
			
          </div>
            

 
 
          <div class="cLine">
            <div class="pageNavigator right">
                <div class="pages"><?php echo ($page2); ?></div>
              </div>
            <div class="clr"></div>
          </div>
        </div>

        <div class="clr"></div>
      </div>
    </div>
  </div>
  <script>

function checkAll(form, name) {
for(var i = 0; i < form.elements.length; i++) {
var e = form.elements[i];
if(e.name.match(name)) {
e.checked = form.elements['chkall'].checked;
}
}
}
  </script>
  <!--底部-->
  	</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>