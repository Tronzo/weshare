<?php if (!defined('THINK_PATH')) exit();?>
<div id="wp" class="wp"><link href="./tpl/User/default/common/css/style.css" rel="stylesheet" type="text/css">
 <div class="contentmanage">
    <div class="developer">
       <div class="appTitle normalTitle" style="padding: 20px;">
        <h2>短信管理（剩余<?php echo ($smscount); ?>条）</h2>
        <div class="accountInfo">
        
        </div>
        <div class="clr"></div>
      </div>
      <div class="tableContent">
        <!--左侧功能菜单-->
        <div class="sideBar">
          <div class="catalogList">
            <ul>
    
				<li > <a href="index.php?g=User&amp;m=Sms&amp;a=index">短信记录</a></li>
				<li > <a href="index.php?g=User&amp;m=Sms&amp;a=expense">消费记录</a></li>
				<li class=" subCatalogList "><a href="index.php?g=User&amp;m=Sms&amp;a=buy">设置短信</a> </li>
            </ul>
          </div>
        </div>
<script src="./tpl/static/jquery-1.4.2.min.js" type="text/javascript"></script>

<div class="content">
<style>
.usercontent ul li{
float:none;
line-height:50px;
padding-left:10px;
}
input{border: 1px solid #DDDDDD;height:30px;width:200px;margin-left:10px;}
.new-btn-login{
    background-color: transparent;
    background-image: url("<?php echo RES;?>/images/img/new-btn-fixed.png");
    border: medium none;
	border:1px solid red;
	
}
.new-btn-login{
    background-position: 0 -198px;
    width: 82px;
	color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
	
}
.new-btn-login:hover{
	background-position: 0 -167px;
	width: 82px;
	color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
}
.bottonbox{
border: 1px solid #D74C00;
padding: 1px;
display: inline-block;
}
.tablecontent .content {
border-left: 1px solid lightGrey;
margin-left: 0px;
padding:0px;
width: 909px;
background-color: white;
min-height: 925px;
float: right;}
.contentmanage {
margin: 0 auto;
text-align: left;
width: 100%;
}
table.listproduct {
BORDER-TOP: #d3d3d3 1px solid;
MARGIN-TOP: 0px;
MARGIN-BOTTOM: 5px;
_border-collapse: collapse;
}
</style>
<script>

$(function(){
	var price=new Array();
	<?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>price[<?php echo ($p["id"]); ?>]=<?php echo ($p["price"]); ?>;<?php endforeach; endif; else: echo "" ;endif; ?>
	$('#group').change(function(){
		$('#price').val(price[$('#group').val()]*$('#num').val());
		$('#needprice').val(price[$('#group').val()]*$('#num').val());
	});
	$('#num').change(function(){

		$('#price').val(price[$('#group').val()]*$('#num').val());
		$('#needprice').val(price[$('#group').val()]*$('#num').val());
	});
});
function checkcz(){
	if($('#group').val()==0){
		alert('请选择级别');
		return false;
	}
	return true;
}
</script>
<div class="usercontent">
 <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR>
<TH class="keywords">购买条数</TH>
<TH class="answer">花费</TH>
<TH class="time">时间</TH>
                     
                </TR>
              </THEAD>
              <TBODY>
                <TR>
				</TR>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                  <td><?php echo ($vo["count"]); ?></td>
                  <td><div class="answer_text"><?php echo ($vo["price"]); ?></div></td>
                    <td><?php echo date('Y-m-d',$vo['time']); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                             
              </TBODY>
            </TABLE>
        <div class="clr"></div>
      </div>
          <div class="cLine">
            <div class="pageNavigator right">
              <div class="pages"><?php echo ($page); ?></div>
            </div>
            <div class="clr"></div>
          </div>
        </div>
        
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <!--底部-->
  	</div>



<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>