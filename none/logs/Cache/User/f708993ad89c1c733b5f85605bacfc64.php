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
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="/tpl/User/default/common/js/panel.js"></script>
<script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp"></script>
<script src="/tpl/User/default/common/js/map/thickbox-compressed.js"></script>
<script src="/tpl/User/default/common/js/map/jquery-1.4.3.min.js">
<link href="/tpl/User/default/common/js/map/thickbox.css" media="screen" rel="stylesheet" type="text/css" />

</script><script>
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
function setlatlng(panoid){
	art.dialog.data('panoid', panoid);
	
	// 此时 iframeA.html 页面可以使用 art.dialog.data('test') 获取到数据，如：
	// document.getElementById('aInput').value = art.dialog.data('test');
	art.dialog.open('<?php echo U('Map/pano',array('token'=>$token,'id'=>$id));?>',{lock:false,title:'复制pano',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
<style type="text/css">
.userinfoArea th{ width:200px;}
</style>
<div class="content"  style="width:100%" >
  <div class="cLineB">
   
  <h4>街景导航设置： </h4>
 </div>
         
    <div class="msgWrap bgfc">
	  <form class="form" method="post" action=""   >
      <input type="hidden" name="id" value="<?php echo ($Jiejing["id"]); ?>"/>
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
           
				<tr>
				  <th valign="top"><span class="red">*</span>关键词：</th>
				  <td width="570">
					<input type="text" name="keyword" id="keyword" value="<?php echo ($Jiejing["keyword"]); ?>"
                            class="px" style="width:200px;"></td>
				</tr>
				<tr>
				  <th valign="top"><span class="red">*</span>标题：</th>
				  <td>
					<input type="text" name="title" id="title" value="<?php echo ($Jiejing["title"]); ?>"
                            class="px" style="width:200px;"></td>
				</tr>
				<tr>
                        <th>
                            <span class="red">*</span>封面图片：
                        </th>
                        <td>
                            <input type="text" name="picurl" id="picurl" value="<?php echo ($Jiejing["picurl"]); ?>"
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

					<th width="200"><span class="red">*</span>内容介绍：</th>

					<td><textarea style="width:400px;height:75px" name="text" id="text" class="px"><?php echo ($Jiejing["text"]); ?></textarea><br/>最多填写120个字</td>

				</tr>
				
				
					<th><span class="red">*</span>Pano：</th>
					<td><input type="text" name="pano" id="info2" value="<?php echo ($Jiejing["pano"]); ?>" class="px" style="width:300px;"><a href="###" onclick="setlatlng($('#longitude').val(),$('#latitude').val())" class="btn btn-primary btn_submit  J_ajax_submit_btn">&nbsp;&nbsp;在地图中查看</a>
                    </br><span style="color:red">保存后可以在下面实时预览街景</span>
      
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


 
    <div style="text-align: left;
width: 145px;
font-size: 14px;
font-weight: bold;
line-height: 1.5;
padding: 8px 0;">实景预览:</div>
   <div class="soso-box">
	<!-- soso街景容器 -->
	<div id="pano_container" class="soso-pano-box"></div>
	<div class="soso-map-box">
		<!-- soso地图容器 -->
		<div class="soso-map" id="map_container"></div>
		<div class="soso-map-control">
			<h4>查询路线：</h4>
			<ul class="soso-sea-input">
				<li>起点 <input type="text" id="J_soso_start" value="西单地铁站" /></li>
				<li>终点 <input type="text" id="J_soso_end" value="颐和园路口东" readonly /></li>
			</ul>
			<div class="soso-search-btn">
				<input type="button" id="J_sea_bus" value="公交" />
				<input type="button" id="J_sea_drive" value="驾车" />
			</div>
			<h4>搜附近：</h4>
			<div class="soso-near-hotdot" id="J_soso_hotdot">
				<a href="javascript:" title="交通" data-name="交通">交通</a>
				<a href="javascript:" title="学校" data-name="学校">学校</a>
				<a href="javascript:" title="购物" data-name="购物">购物</a>
				<a href="javascript:" title="医院" data-name="医院">医院</a>
				<a href="javascript:" title="生活" data-name="生活">生活</a>
				<a href="javascript:" title="娱乐" data-name="娱乐">娱乐</a>
				<a href="javascript:" title="餐饮" data-name="餐饮">餐饮</a>
				<a href="javascript:" title="酒店" data-name="酒店">酒店</a>
			</div>
			<div class="seach-res-panel" id="J_soso_panel">
				<a href="javascript:" class="" id="J_soso_return" title="返回">返回</a> 
				<!-- 检索结果面板 -->
				<div id="J_soso_panel_cont"></div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	/* 重置浏览器，可以删除 */
	body{font:12px/1.5 Microsoft Yahei,tahoma,arial,\5b8b\4f53;color:#000}
	button,input{font:12px/1.5 Microsoft Yahei,tahoma,arial,\5b8b\4f53}
	html,body,h1,h2,h3,h4,h5,h6,hr,p,ul,ol,li,form,button,input,textarea,th,td{margin:0;padding:0}
	img{border:0}
	ol,ul{list-style:none}

	.soso-box{width:95%;overflow:hidden;}
	.soso-pano-box{height:300px;}
	.soso-map-box{position:relative;}
	.soso-map{height:300px;margin:0 182px 0 0}
	.soso-map-control{position:absolute;top:0;right:0;width:170px;height:288px;padding:5px;background:#fff;border:solid 1px #ccc;overflow:hidden;font-size:14px}
	.soso-map-control h4{font-size:16px}
	.soso-sea-input li{margin:3px 0 6px 0}
	.soso-sea-input li input{width:124px;padding:2px 3px}
	.soso-search-btn{margin:0 0 10px 30px}
	.soso-search-btn input{margin:0 5px 0 0;padding:0 4px;border:1px solid #aaa;background:#eee;cursor:pointer;}
	.soso-near-hotdot{margin:0 -20px 0 0}
	.soso-near-hotdot a{display:inline-block;margin:0 13px 5px 13px}
	.seach-res-panel{display:none;position:absolute;z-index:2;left:0;top:0;width:180px;height:288px;background:#fff;overflow:auto;}
	/* 结果面板 */
	.drive-title{margin:3px 0;padding:2px 4px;font-size:13px;line-height:20px;text-align: left;color: #8A8989;background-color: #EDF4FB;}
	.drive-list li{padding: 10px 5px; color:#969696;font-size: 13px;border-bottom: dashed 1px #DCDEE0;cursor:pointer;}
	.drive-list li span{color: #538DBE;padding:0 4px;}
	.drive-list li p{margin:5px 0 0 0; color:#969696;font-size: 13px;}
	.drive-list li p.bus-title{margin:0;line-height: 20px;text-align: left;color: #0059B2;}
	.soso-sea-index{float: left;display:inline;width:20px;height: 20px;line-height:20px;overflow: hidden;text-align: center;}
	.soso-sea-title{overflow: hidden;padding:0 5px;zoom:1;}
	.soso-sea-t{font-size:14px;color:#0059B3;}
	.drive-list li .soso-sea-title p{font-size:12px;margin:2px 0 0 0;}
	.soso-page{padding: 10px 0;text-align:center;}
	.soso-page span{padding:2px;font-size: 12px;cursor:pointer;}
	.soso-page span.cur{margin:0 5px;padding:3px;font-weight: bold;border-bottom: 2px solid #999999;}
</style>

<!--以下引入SOSO地图API，调用参数中的key，请在实际使用时替换成自己的key-->
<script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&libraries=place,convertor&key=d84d6d83e0e51e481e50454ccbe8986b"></script>
<!--以下引入SOSO地图街景与地图连动插件-->
<script src="http://open.map.qq.com/plugin/v2/PanoramaOverview/PanoramaOverview-min.js"></script>
<!--以下引入 搜索结果面板 插件 -->
<script src="panel.js"></script>
<script type="text/javascript">

"use strict";
var _sosomaps = function(){

	var map = "";
	var pano = "";
	var panoLabels = [];
	var latlng = "";//初始默认坐标
	var panoServer = new soso.maps.PanoramaService();//街景检索对象
	var pano_id = "";//场景ID
	var pano_heading = "";//偏航角
	var pano_label = [];
	var latlngs = [];
	var pois = ""; /* 搜索附近POI结果 */
	var location = ""; 
	var ispano = 1; /* 判断是否存在街景 */
	var searKeyword = "";
	var _option = {};
	//通过ID获取DOM
	function $id(id){return document.getElementById(id);}
	//实例化自动完成
    var ap = new soso.maps.place.Autocomplete($id('J_soso_start'));

	/*
	 * 初始化 sosomaps.init(39.882326, 116.326088);
	 * @param lat 纬度
	 * @param lng 经度
	 * @param option 设置对象 
	   {
		 type : 坐标类型，默认空为soso地图标准坐标 1:gps经纬度，2:搜狗经纬度，3:百度经纬度，4:mapbar经纬度，5:google经纬度，6:搜狗墨卡托
		 pano : 街景初始化点
		 heading : 街景初始化朝向
		 pitch : 街景初始化俯仰角
		 zoom : 街景初始化缩放
		 auto : 是否开启自动旋转 true 开启  false 不开启
	   } 
	 */
	var init = function(lat, lng, option){
		_option = option || {};
		//坐标转换
		if(_option.type != null){
			soso.maps.convertor.translate(new soso.maps.LatLng(lat, lng), _option.type, function(res){
		        latlng = res[0];
		        _init();
		    });
		}else{
			latlng = new soso.maps.LatLng(lat, lng);
			_init();
		}
	};

	var _init = function(){
	
		if(_option.pano == null){
			//根据经纬度获取场景ID，创建街景，吸附半径1000米
			panoServer.getPano(latlng, 1000, function(result){
				/* 无街景处理 */
				
				if(result == null){
					
					ispano = 0;
					$id('pano_container').style.display = "none";
					line();
					map = new soso.maps.Map($id('map_container'), {
						center : latlng
					});
					return false;
				}
	            pano_id = result.svid;
				
				
	            pano_heading = getHeading(latlng['lat'], latlng['lng'], result.latlng.lat, result.latlng.lng);
	            //创建街景
				pano = new soso.maps.Panorama($id('pano_container'), {
			        pano : pano_id,
			        pov:{
			            heading : pano_heading
			        }
			    });
				
			    /*
				 * 添加街景场景点改变，从新计算marker坐标
			     */
			    soso.maps.event.addListener(pano, "pano_changed", function(){
			    	if(latlngs.length != 0){
			    		latlng = pano.getPosition();
			    		markerVoid(latlngs);
			    	}
			    });
			    //显示平面地图（使用地图与街景连动插件）
				var pano_overview = new soso.maps.PanoOverview($id('map_container'), {
			        panorama : pano
			    });
			    map = pano_overview.getMap();//获取插件中的地图对象
			    line();
	        });
		}else{
			var pov = {};
			if(_option.heading != null){
				pov.heading = _option.heading;
			}
			if(_option.pitch != null){
				pov.pitch = _option.pitch;
			}
			if(_option.zoom != null){
				pov.zoom = _option.zoom;
			}
			pano = new soso.maps.Panorama($id('pano_container'), {
		        pano : _option.pano,
		        pov: pov
		    });
		    /*
			 * 添加街景场景点改变，从新计算marker坐标
		     */
		    soso.maps.event.addListener(pano, "pano_changed", function(){
		    	if(latlngs.length != 0){
		    		latlng = pano.getPosition();
		    		markerVoid(latlngs);
		    	}
		    });
		    //显示平面地图（使用地图与街景连动插件）
			var pano_overview = new soso.maps.PanoOverview($id('map_container'), {
		        panorama : pano
		    });
		    map = pano_overview.getMap();//获取插件中的地图对象
			line();
		}
        //经纬度解析城市名
		var geocoder = new soso.maps.Geocoder({
        	complete : function(result){
        		location = result.detail.addressComponents.city;
        	}
        });
        geocoder.getAddress(latlng);
        //添加初始点marker
		var initMarker = new soso.maps.Marker({
			map : map,
			position : latlng
		});
	};

	/* 自动旋转 */
	var auto = function(){
		var heading = _option.heading != null ? _option.heading : 0;
		var timer = setInterval(function(){
            if(heading >= 360){
                heading = 0;
            }
            heading += 0.1;
            pano.setPov({heading : heading});
        }, 100);

        soso.maps.event.addListener(pano, 'pov_changed', function (){
            var pov = pano.getPov();
            if(Math.abs(pov.heading - heading) > 1 && Math.abs(pov.heading - heading) < 300){
                clearInterval(timer);
            }                     
        });

	};

	var drivingPanel, transferPanel, searchPanel;
	//实例化驾车与公交路线插件
	var line = function(){
		if(_option.auto){
			auto();
		}
		drivingPanel = new DrivingPanel(map, $id("J_soso_panel_cont"));
		transferPanel = new TransferPanel(map, $id("J_soso_panel_cont"));
		searchPanel = new SearchPanel(map, $id("J_soso_panel_cont"));
	}

	//搜附，创建SearchService实例
	var search = new soso.maps.SearchService({
        complete : function(results){
			pois = results.detail.pois;
			latlngs = [];
            for(var i = 0, l = pois.length; i < l; i++){
				latlngs.push(pois[i].latLng);
            }
            ispano == 1 && markerVoid(latlngs);
            $id("J_soso_panel").style.display = "block";
            searchPanel.init(results);
            /* 添加分页事件 */
            searchPanel.addPageEvent(search, searKeyword, latlng, 5000);
            clear();
        }
    });

	/*
	 * 搜索附近，默认半径5000米
	 * @param key 搜索关键词
	 * @param radius 搜索半径，默认5000米
	 */
	var searchNear = function(key, radius){
		var radius = radius || 5000;
		searKeyword = key || searKeyword;
	    search.searchNearBy(key, latlng, radius);
	};

	//驾车路线查询
	var drivingService = new soso.maps.DrivingService({
		location : location,
		complete : function(result){
			var del = result.detail;
			if(typeof del.distance != 'undefined'){
				$id("J_soso_panel").style.display = "block";
				drivingPanel.init(result);
			}else{
				var start = del.start[0].latLng;
				var end = del.end[0].latLng;
				drivingService.search(start, end);
			}
		}
	});
	function driveSea(start, end){
		drivingService.search(start, end);
		clear();
	}

	//公交路线查询
	var transferService = new soso.maps.TransferService({
		location : location,
		//panel : $id("J_soso_panel_cont"),
		complete : function(result){
			var del = result.detail;
			if(typeof del.city != 'undefined'){
				transferPanel.init(result);
				$id("J_soso_panel").style.display = "block";
			}else{
				var start = del.start[0].latLng;
				var end = del.end[0].latLng;
				transferService.search(start, end);
			}
		}
	});
	var transferSea = function(start, end){
		transferService.search(start, end);
		clear();
	};

	//返回，清除搜索结果和重置面板等
	function clear(){
		drivingPanel.clear();
		transferPanel.clear();
	}

	/*
	 * 简单版marker避让
	 * @param latlngs 需要避让的经纬度数组
	 */
	function markerVoid(latlngs){
		var headings = [];
		for(var i = 0; i < latlngs.length; i++){
			headings[i] = getHeading(latlngs[i]['lat'], latlngs[i]['lng'], latlng['lat'], latlng['lng']);
		}

		clearOverlays();
		/* marker避让，30度内只显示1个marker */
		for(var i = 0; i <= 360; i+=30){
			for(var k = 0; k < headings.length; k++){
				if(i < headings[k] && headings[k] < i+30){
					pano_label.push(new soso.maps.PanoramaLabel({
						position : pois[k].latLng,
						altitude : 100,
						panorama : pano,
						content : pois[k].name
					}));
					(function(k){
						soso.maps.event.addListener(pano_label[pano_label.length-1], "click", function(){							
							panoServer.getPano(pois[k].latLng, 1000, function(result){
					            pano_id = result.svid;
					            pano_heading = getHeading(pois[k].latLng['lat'], pois[k].latLng['lng'], result.latlng.lat, result.latlng.lng);
					            pano.setPano(pano_id);
					            pano.setPov({heading : pano_heading});
					        });
						});
					})(k);
					break;
				}	
			}
		}
	}

    /*
	 * 通过经纬度获取街景视线
	 * @param locLat,locLng 原始点纬度，经度
	 * @param panoLat,panoLng 街景纬度，经度 
     */
    function getHeading(locLat, locLng, panoLat, panoLng){
    	var heading = Math.acos((locLat - panoLat) / Math.sqrt(Math.pow(locLng - panoLng, 2) + Math.pow(locLat - panoLat, 2)));
		if (locLng - panoLng < 0) {
			heading = Math.PI * 2 - heading;
		}
		return heading/Math.PI*180;
    }

	/*
	 * 清除地图上的街景覆盖层
	 */
	function clearOverlays(){
	    var tmp = "";
	    while(tmp = pano_label.pop()){
	    	tmp.setVisible(false);
	    	tmp = null;
	    }
	}
	/* 隐藏结果面板 */
	soso.maps.event.addListener($id("J_soso_return"), "click", function(){
		clear();
		searchPanel.clear();
		$id("J_soso_panel").style.display = "none";
		/* 隐藏面板时，清除街景覆盖层 */
		clearOverlays();
	});

	return {
		init : init,
		searchNear : searchNear,
		driveSea : driveSea,
		transferSea : transferSea
	};

};


/* 以下为应用代码（程序入口） */
var sosomaps = _sosomaps();
sosomaps.init(39.882326, 116.326088, {
	pano : "<?php echo ($Jiejing["pano"]); ?>",
	heading : 277,
	auto : true
});
//搜索公交
document.getElementById("J_sea_bus").onclick = function(){
	var start = document.getElementById("J_soso_start").value;
	var end = document.getElementById("J_soso_end").value;
	sosomaps.transferSea(start, end);
};
//搜索驾车路线
document.getElementById("J_sea_drive").onclick = function(){
	var start = document.getElementById("J_soso_start").value;
	var end = document.getElementById("J_soso_end").value;
	sosomaps.driveSea(start, end);
};
//搜索附近
var near_search_obj = document.getElementById("J_soso_hotdot").getElementsByTagName("a");
for(var i = 0; i < near_search_obj.length; i++){
	near_search_obj[i].onclick = function(){
		sosomaps.searchNear(this.getAttribute("data-name"));
	};
}




</script>
 
      </div> 
        </div>
       
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>