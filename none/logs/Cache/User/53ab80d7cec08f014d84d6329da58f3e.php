<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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



<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />



<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>



<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>



<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />



<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />



<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>



<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>



<script type="text/javascript" src="<?php echo RES;?>/js/formCheck/formcheck.js"> </script>



<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>



<script>



	KindEditor.ready(function(K){



		var editor = K.editor({



			allowFileManager:true



		});



		K('#upload_pic').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#pic').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#pic').val(url);



						}else{



							K('#pic').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_opening_animation').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#opening_animation').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#opening_animation').val(url);



						}else{



							K('#opening_animation').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_small_pic').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#small_pic').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#small_pic').val(url);



						}else{



							K('#small_pic').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_1').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_1').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_1').val(url);



						}else{



							K('#site_map_1').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_2').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_2').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_2').val(url);



						}else{



							K('#site_map_2').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_3').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_3').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_3').val(url);



						}else{



							K('#site_map_3').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_4').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_4').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_4').val(url);



						}else{



							K('#site_map_4').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_5').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_5').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_5').val(url);



						}else{



							K('#site_map_5').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



	});



</script>







<script>







var editor;



KindEditor.ready(function(K) {



editor = K.create('#content', {



resizeType : 1,



allowPreviewEmoticons : false,



allowImageUpload : false,



items : [



'source','undo','clearhtml','hr',



'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',



'insertunorderedlist', '|', 'emoticons', 'image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut']



});







});



</script>



<script>



function selectall(name) {



	var checkItems=$('.cbitem');



	if ($("#check_box").attr('checked')==false) {



		$.each(checkItems, function(i,val){



			val.checked=false;



		});



		



	} else {



		$.each(checkItems, function(i,val){



			val.checked=true;



		});



	}



}



function setlatlng(longitude,latitude){



	art.dialog.data('longitude', longitude);



	art.dialog.data('latitude', latitude);



	// 此时 iframeA.html 页面可以使用 art.dialog.data('test') 获取到数据，如：



	// document.getElementById('aInput').value = art.dialog.data('test');



	art.dialog.open('<?php echo U('Map/setLatLng',array('token'=>$token,'id'=>$id));?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});



}



</script>



<div class="content"  >



   <div class="cLineB"> 



    <h4>类别设置</h4> 



    <a href="<?php echo U('Fenlei/setcin',array('id'=>$id,'token'=>$token));?>" class="right  btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a> 



   </div> 







   <form class="form" method="post" id="form" action="" enctype="multipart/form-data"> 







    <div class="msgWrap bgfc"> 



     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 



      <tbody> 



        <tr>



			<th>商家名称<td><input style="width:400px;" type="text" name="name" placeholder="请输入商家名称" class="px" value="<?php echo $data[name];?>"  /></td>



		</tr>
         <tr>



			<th>简要介绍<td><input style="width:400px;" type="text" name="info" placeholder="请输入简要介绍,30字左右" class="px" value="<?php echo $data[info];?>"  /></td>



		</tr>



		<tr>



			<th>商家电话</td>



			<td><input style="width:400px;" type="text" name="tel" placeholder="请输入商家联系电话" class="px" value="<?php echo $data[tel];?>"  /></td>



		</tr>



		<tr>



			<th>商家地址</td>



			<td><input style="width:400px;" type="text" name="address" placeholder="请输入商家所在地址"  class="px" value="<?php echo $data[address];?>"  /></td>	



		</tr>
        <TH valign="top"><label for="keyword">经纬地址</label></TH>
            <td><div class="control-group">
              <label class="control-label" for="suggestId"></label>
              <div class="controls">
              <div id="l-map"  style="width:605px; height:320px;"> </div>
              <div id="r-result">
                <input type="text" class="px" id="lng" value="<?php echo $data[lng];?>"  name="lng" style="width:80px;">
                <input type="text" class="px" id="lat" value="<?php echo $data[lat];?>"  name="lat" style="width:80px;">
                <input  type="hidden"  name="city" class="px" id="city" size="20" value=""/>
              </div>
              <div id="searchResultPanel" style="border:1px solid #C0C0C0;width:350px;height:auto;"> </div></td>






		<tr> 



			<th>商家展示图片：</th>



			<td><input type="text" name="banner" value="<?php echo $data[banner];?>" id="small_pic" class="px" style="width:400px;"  readonly="readonly"/><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('small_pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('small_pic')">预览</a></td> 



        </tr>
        <tr> 



			<th>商家广告图片1：</th>



			<td><input type="text" name="picurl1" value="<?php echo $data[picurl1];?>" id="picurl1" class="px" style="width:400px;"  readonly="readonly"/><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('picurl1',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('picurl1')">预览</a></td> 



        </tr>
         <tr> 



			<th>商家广告图片2：</th>



			<td><input type="text" name="picurl2" value="<?php echo $data[picurl2];?>" id="picurl2" class="px" style="width:400px;"  readonly="readonly"/><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('picurl2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('picurl2')">预览</a></td> 



        </tr>
         <tr> 



			<th>商家广告图片3：</th>



			<td><input type="text" name="picurl3" value="<?php echo $data[picurl3];?>" id="picurl3" class="px" style="width:400px;"  readonly="readonly"/><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('picurl3',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('picurl3')">预览</a></td> 



        </tr>



		





        <TR>



			<TH valign="top"><label for="info">商家详细设施：</label></TH>


 <input type="hidden" class="px" id="token" value="<?php echo ($_SESSION["token"]); ?>" name="token" style="width:500px" >
            <TD><textarea name="messages" id="content"  rows="5" style="width:590px;height:360px"><?php echo $data[messages];?></textarea></TD>



        </TR>  



		



       <tr>         



       <th>&nbsp;</th>



       <td>



		<!--input type="hidden" name="time" value="<?php echo ($set["time"]); ?>" /-->



       <button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button> &nbsp; <a href="<?php echo U('Fenlei/setcin',array('pid'=>$id,'token'=>$token));?>" class="btn">取消</a></td> 



       </tr> 



	   



      </tbody> 



     </table> 



     </div>



    



   </form> 



  </div> 



<script language="javascript">



$(function(){



	$("#form").valid([



	{ name:"name",simple:"名称",require:true},



	{ name:"keyword",simple:"关键词",require:true}



		



	],true,true);







});



</script>

<script src="<?php echo RES;?>/js/baidu.js" type="text/javascript" type="text/javascript" >
</script>
<script type="text/javascript">
var map = new BMap.Map("l-map");
var myGeo = new BMap.Geocoder();  
//map.addControl(new BMap.MapTypeControl({mapTypes: [BMAP_NORMAL_MAP,BMAP_HYBRID_MAP]}));     //2D图，卫星图

//map.addControl(new BMap.MapTypeControl({anchor: BMAP_ANCHOR_TOP_LEFT}));    //左上角，默认地图控件

//alert(city);
var currentPoint ;
var marker1;
var marker2;
map.enableScrollWheelZoom(); 
//var point = new BMap.Point(116.331398,39.897445);  

map.enableDragging();   
map.enableContinuousZoom();
map.addControl(new BMap.NavigationControl());  
map.addControl(new BMap.ScaleControl());  
map.addControl(new BMap.OverviewMapControl());

var point = new BMap.Point(116.331398,39.897445);
doit(point);
window.setTimeout(function(){
auto();
},100);

 function auto(){
 var geolocation = new BMap.Geolocation();  
geolocation.getCurrentPosition(function(r){  
if(this.getStatus() == BMAP_STATUS_SUCCESS){  
//var mk = new BMap.Marker(r.point);  
//map.addOverlay(mk);  
 // point = r.point;  
//map.panTo(r.point); 

var point = new BMap.Point(r.point.lng,r.point.lat);  
marker1 = new BMap.Marker(point);        // 创建标注
map.addOverlay(marker1);
var opts = {
width : 220,     // 信息窗口宽度 220-730
height: 60,     // 信息窗口高度 60-650
title : ""  // 信息窗口标题
}
var infoWindow = new BMap.InfoWindow("定位成功这是你当前的位置!,移动红点标注目标位置，你也可以直接修改上方位置,系统自动定位!", opts);  // 创建信息窗口对象
marker1.openInfoWindow(infoWindow);      // 打开信息窗口
doit(point);

}else {  
 
}  
})
 }
function  doit(point){

//map.centerAndZoom(point,12);  
 

//myGeo.getPoint(city, function(point){ 
if (point) {
//window.external.setlngandlat(point.lng,point.lat);
//alert(point.lng + "  ddd " + point.lat);

 document.getElementById('lat').value = point.lat;
  document.getElementById('lng').value =point.lng;
map.setCenter(point);
map.centerAndZoom(point, 15);
map.panTo(point);

var cp = map.getCenter();		
myGeo.getLocation(point, function(result){  
/*if (result){
 document.getElementById('suggestId').value = result.address;
}	*/		
});	
marker2 = new BMap.Marker(point);        // 创建标注  
var opts = {
width : 220,     // 信息窗口宽度 220-730
height: 60,     // 信息窗口高度 60-650
title : ""  // 信息窗口标题
}
var infoWindow = new BMap.InfoWindow("拖拽地图或红点，在地图上用红点标注您的店铺位置。", opts);  // 创建信息窗口对象
marker2.openInfoWindow(infoWindow);      // 打开信息窗口

map.addOverlay(marker2);                     // 将标注添加到地图中

marker2.enableDragging();
marker2.addEventListener("dragend", function(e){
 document.getElementById('lat').value =e.point.lat;
   document.getElementById('lng').value =e.point.lng;
myGeo.getLocation(new BMap.Point(e.point.lng,e.point.lat), function(result){  
if (result){
//$('suggestId').value = result.address;
//$('city').value = result.city;
//			alert(result.address)				
//	window.external.setaddress(result.address);//setarrea(result.address);//
//marker1.setPoint(new BMap.Point(e.point.lng,e.point.lat));        // 移动标注
marker2.setPoint(new BMap.Point(e.point.lng,e.point.lat));     
map.panTo(new BMap.Point(e.point.lng,e.point.lat));
//window.external.setlngandlat(e.point.lng,e.point.lat);
}			
});	
});	

map.addEventListener("dragend", function showInfo(){
var cp = map.getCenter();		
myGeo.getLocation(new BMap.Point(cp.lng,cp.lat), function(result){  
if (result){
 //document.getElementById('suggestId').value = result.address;
 document.getElementById('lat').value =cp.lat;
   document.getElementById('lng').value =cp.lng;
//	window.external.setaddress(result.address);//setarrea(result.address);//
//alert(point.lng + "  ddd " + point.lat);
//marker1.setPoint(new BMap.Point(cp.lng,cp.lat));        // 移动标注
marker2.setPoint(new BMap.Point(cp.lng,cp.lat));     
map.panTo(new BMap.Point(cp.lng,cp.lat));
//window.external.setlngandlat(cp.lng,cp.lat);
}			
});	
});	

map.addEventListener("dragging", function showInfo(){
var cp = map.getCenter();
//marker1.setPoint(new BMap.Point(cp.lng,cp.lat));        // 移动标注
marker2.setPoint(new BMap.Point(cp.lng,cp.lat)); 
map.panTo(new BMap.Point(cp.lng,cp.lat));
map.centerAndZoom(marker2.getPoint(), map.getZoom());
});	


}


//}, province);


}


function loadmap() {
var province =  document.getElementById('city').value;
var city =   document.getElementById('address').value ;
// 将结果显示在地图上，并调整地图视野  
myGeo.getPoint(city, function(point){  
if (point) {
//marker1.setPoint(new BMap.Point(point.lng,point.lat));        // 移动标注
marker2.setPoint(new BMap.Point(point.lng,point.lat));  
//window.external.setlngandlat(marker2.getPoint().lng,marker2.getPoint().lat);
//alert(point.lng + "  ddd " + point.lat);
 document.getElementById('lat').value =point.lat;
   document.getElementById('lng').value =point.lng;
map.panTo(new BMap.Point(marker2.getPoint().lng,marker2.getPoint().lat));
map.centerAndZoom(marker2.getPoint(), map.getZoom());
}}, province);
} 

function setarrea(address,city) {
//$('suggestId').value = address;
//$('city').value=city;
window.setTimeout(function(){
loadmap();
},2000);
}

function initarreawithpoint(lng,lat){
window.setTimeout(function(){
//marker1.setPoint(new BMap.Point(lng,lat));        // 移动标注
marker2.setPoint(new BMap.Point(lng,lat));  
//window.external.setlngandlat(lng,lat);
map.panTo(new BMap.Point(lng,lat));
map.centerAndZoom(marker2.getPoint(), map.getZoom());
}, 2000);	
}





</script>

  <div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>