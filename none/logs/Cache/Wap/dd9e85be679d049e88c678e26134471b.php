<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>喜帖</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="微信喜帖">
<link rel="stylesheet" type="text/css" href="tpl/Wap/default/common/css/wedding/css/wedding.css" media="all">
<script src="tpl/Wap/default/common/css/wedding/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="tpl/Wap/default/common/css/wedding/js/wedding.js" type="text/javascript"></script>
<script src="tpl/Wap/default/common/css/wedding/js/jquery_easing.js" type="text/javascript"></script>
<script src="tpl/Wap/default/common/css/wedding/js/wedding_sys.js" type="text/javascript"></script>
<style type="text/css">
.loading {
    position: absolute;
    width: 100%;
    height: 100%;
    text-align: center;
    top: 0;
    left: 0;
    line-height: 100%;
    border: none;
    z-index: 9999;
}
.loading-part {
    position: absolute;
    padding: 0;
    margin: 0;
    width: 100%;
    height: 50%;
    background-color: #FFFFFF;
    z-index: 1;
}
.loading-part.top {
    top: 0;
}
.loading-part.bottom {
    bottom: 0;
}
.loading-panel {
    position: absolute;
    width: 200px;
    height: 82px;
    top: 50%;
    left: 50%;
    margin-top: -41px;
    margin-left: -100px;
    z-index: 2;
}
.loading-icon {
    position: relative;
    width: 50px;
    height: 50px;
    background: url(tpl/Wap/default/common/css/wedding/images/img/love.gif) center center no-repeat;
    margin: auto;
}
.loading-text {
    position: relative;
    width: 200px;
    height: 32px;
    color: #fc8e65;
    text-align: center;
    line-height: 32px;
    margin: auto;
}.cover {
    display: none;
    position: absolute;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
    background-color: #A00908;
    box-shadow: 5px 5px 5px 10px rgba(0,0,0,.6);
    z-index: 999;
}
/*封面模版:t1*/
.cover.t1 {
    min-height: 330px;
    background-color: #A00908;
}
.cover.t1 .slogan {
    position: absolute;
    width: 266px;
    height: 290px;
    left: 50%;
    margin-left: -133px;
    top: 50%;
    margin-top: -145px;
}
.cover.t1 .mask {
    position: absolute;
    width: 100%;
    height: 100%;
    background: url(tpl/Wap/default/common/css/wedding/images/img/icons.png) 0 0 no-repeat;
    top: 0;
    left: 0; 
}
.cover.t1 .head {
    position: absolute;
    width: 158px;
    height: 153px;
    top: 68px;
    left: 48px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
</head>
<body onselectstart="return true;" ondragstart="return false;">
<script>
        $().ready(function(){
        	playbox.init("playbox");

        	$("#overlay_ul").bind("click", function(evt){
        		if("UL" == evt.target.nodeName){
        		this.className = 'overlay_ul';
        		$(this).find('li').removeClass('on');
        		}
        		
        	});
        });

        function show(i){
        	$("#overlay_ul>li").removeClass("on")[i].className = "on";
        	$("#overlay_ul").addClass("on");
        }

        function submit1(){
        	var form1 = document.getElementById("form1");
        	var userName = form1.userName.value;
        	var telephone = form1.telephone.value;
        	var count = form1.count.value;
        	if(userName.length<1){
        		alert("请输入姓名！");
        		return;
        	}
        	if(telephone.length<6){
        		alert("请输入电话号码！");
        		return;
        	}
        	if(count.length<1){
        		alert("请输入人数！");
        		return;
        	}
        	var obj = {
				fid:<?php echo ($_GET['id']); ?>,		
				token:"<?php echo ($_GET['token']); ?>",
				type: "1",
        		name: userName,
        		phone: telephone,
        		num: count
        	}
        	$.post("<?php echo U('Wap/Wedding/info');?>", obj,function(result){
				alert(result);
				form1.reset();
				$("#overlay_ul").removeClass("on");
			});

        }
        //
       function submit2(){
        	var form2 = document.getElementById("form2");
        	var userName = form2.userName.value;
        	var telephone = form2.telephone.value;
        	var content = form2.content.value;
        	if(userName.length<1){
        		alert("请输入姓名！");
        		return;
        	}
        	if(telephone.length<6){
        		alert("请输入电话号码！");
        		return;
        	}
        	if(content.length>50){
        		alert("内容不能大于50个字！");
        		return;
        	}
        	if(content.length<1){
        		alert("请输入祝福内容！");
        		return;
        	}
        	var obj = {
        		fid:<?php echo ($_GET['id']); ?>,		
				token:"<?php echo ($_GET['token']); ?>",
				type: "2",
        		name: userName,
        		phone: telephone,
        		info: content
        	}
        	$.post("<?php echo U('Wap/Wedding/info');?>", obj,function(result){
				alert(result);
				form2.reset();
				$("#overlay_ul").removeClass("on");
			});
        }
</script>
 
    <script type="text/javascript">
    $(function () {
             var loading = $('.loading'),
                parts = $('.loading-part', loading),
                height = parts.height();
            var loadingpanel = $('.loading-panel', loading);
            var cover = $('.cover'); 
            function closeLoading(callback) {
                loadingpanel.fadeOut(function () {
                    loading.remove();
                });
                if (typeof callback === 'function') {
                    callback.call(this);
                }
            }
            function closeCover() { 
                cover.animate({
                    'top': -cover.height()
                }, 'linear', function () {
                    cover.remove();
                });
            }
            var handler_touch = function (e) {
                closeCover();
                e.preventDefault();
                return false;
            };
            //处理封面
            function initCover() {
                cover.one('touchstart MSPointerDown', handler_touch); 
                 if (window.navigator.msPointerEnabled !== undefined) {
                    window.setTimeout(function () {
                        closeCover();
                    }, 2000);
                }
            }
            closeLoading(function () {
                initCover();
                cover.fadeIn(1500, function () {
                    cover.animate({
                        top: '-120px'
                    }, 'easeOutBack', function () {
                        cover.animate({
                            top: 0
                        }, 500, 'easeOutElastic', function () { });
                    });
                });
            });
        });
    </script>


	
    <div class="cover t1" style="display: none; top: 0px;">
    <div class="slogan">
        <div class="head" style="background-image:url(<?php echo ($weddingData["openpic"]); ?>)"></div>
        <div class="mask"></div>
    </div>
</div>
<div class="container">
<header>
<div>
	<ul class="box">
		<li class="relative">
			<span class="pic">
				<img src="<?php echo ($weddingData["openpic"]); ?>">
			</span>
		</li>
		<li>
			<div class="name">
				<?php if($weddingData['who_first'] == 1): echo ($weddingData["man"]); else: echo ($weddingData["woman"]); endif; ?>
				<img src="tpl/Wap/default/common/css/wedding/images/04.png" style="width:30px;">
				<?php if($weddingData['who_first'] == 1): echo ($weddingData["woman"]); else: echo ($weddingData["man"]); endif; ?>                
				<div></div>
			</div>
		</li>
		<li>
			<span id="playbox" class="btn_music on" onClick="playbox.init(this).play();">
				<audio id="audio" loop="" src="<?php echo ($weddingData["mp3url"]); ?>"></audio>
			</span>
		</li>
	</ul>
</div>
</header>
            <div style=" height:70px"></div>
<section class="body">
            <!--视频-->
<div >
	<div class="video-box tpl-video"   id="content" style="display:block;"><?php echo ($weddingData["video"]); ?></div>
	 <script src="tpl/Wap/default/common/css/wedding/js/play.js" type="text/javascript"></script>
</div>
            <!--图片-->
<div style=" margin-top:10px">
	<ul>
		<?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photo): $mod = ($i % 2 );++$i;?><li class="pb_10"><img src="<?php echo ($photo["picurl"]); ?>" style="width:100%;"></li><?php endforeach; endif; else: echo "" ;endif; ?>
		<li class="pb_10"><img src="" style="width:100%;"></li>
	</ul>
</div>
              <!--想说的话-->
<div class="des">
	<h3 class="align_center">想说的话</h3>
	<p><?php echo ($weddingData["word"]); ?></p>
</div>
                <!--宴会时间地址电话-->
<div>
<ul class="list_font">
	<li>
		<a href="javascript:;" class="tbox">
			<div class="dat"><?php echo (date('Y-m-d',$weddingData["time"])); ?></div>
			<div>
			<figure>
			<p><span><img src="tpl/Wap/default/common/css/wedding/images/08.png"></span></p>
			<figcaption>宴会时间</figcaption>
			</figure>
			</div>
		</a>
	</li>
	<li>
		<a href="http://chabus.duapp.com/mapapi.php?lng=<?php echo ($weddingData["lng"]); ?>&amp;lat=<?php echo ($weddingData["lat"]); ?>&amp;title=<?php echo ($weddingData["title"]); ?>&amp;info=亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福。" class="tbox">
			<div class="add"><?php echo ($weddingData["place"]); ?></div>
			<div>
				<figure>
					<p><span><img src="tpl/Wap/default/common/css/wedding/images/06.png"></span></p>
					<figcaption>点此导航</figcaption>
				</figure>
			</div>
		</a>
	</li>
	<li>
		<a href="tel:<?php echo ($weddingData["phone"]); ?>" class="tbox">
			<div class="tel"><?php echo ($weddingData["phone"]); ?></div>
			<div>
				<figure>
					<p>
						<span>
							<img src="tpl/Wap/default/common/css/wedding/images/07.png">
						</span>
					</p>
					<figcaption>接待电话</figcaption>
				</figure>
			</div>
		</a>
	</li>
</ul>
</div>
<div>
<ul class="btns_1 box">
	<li><a href="javascript:show(0);" class="px">我要赴宴</a></li>
	<li><a href="javascript:show(1);" class="px">送上祝福</a></li>
	<li><a href="javascript:show(2);" class="px">分享喜帖</a></li>
</ul>
<ul id="overlay_ul" class="overlay_ul">
	<li id="fuyan">
		<form id="form1" action="javascript:;" method="post">
			<input type="hidden" name="fid" value="304">
			<input type="hidden" name="token" value="304">
			<table>
			<tbody>
				<tr><th colspan="2"><label>我要赴宴</label></th></tr>
				<tr><td style="width:45px;">姓名</td><td><input type="text" name="userName"></td></tr>
				<tr><td>手机</td><td><input type="tel" name="telephone"></td></tr>
				<tr><td>人数</td><td><input type="number" value="1" name="count"></td></tr>
				<tr><td colspan="2" style="text-align:center;" class="btns_1"><a href="javascript:submit1();" class="px">提交</a></td></tr>
			</tbody></table>
		</form>
	</li>
	<li id="zhufu">
		<form id="form2" action="javascript:;" method="post">
			<table>
				<tbody>
					<tr>
						<th colspan="2">
							<label>送上祝福</label>
						</th>
					</tr>
					<tr>
						<td style="width:45px;">姓名</td>
						<td>
							<input type="text" name="userName">
						</td>
					</tr>
					<tr>
						<td>手机</td>
						<td>
							<input type="tel" name="telephone">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<textarea placeholder="这里写一些祝福语给男方和女方" style="width:100%;height:50px;" maxlength="100" name="content"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center;" class="btns_1">
							<a href="javascript:submit2();" class="px">提交</a>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</li>
	<li style="text-align: right;margin-left: 0;top: 0;background-color: transparent; left:auto;right: 0; width:291px; height:169px;" onClick="$(#overlay_ul).click();event.preventDefault(); return false;">
	<img src="tpl/Wap/default/common/css/wedding/images/09.png">
	</li>
	<li style="text-align: right;margin-left: 0;top: 0;background-color: transparent; left:auto;right: 0; width:291px; height:169px;" onClick="$(#overlay_ul).click();event.preventDefault(); return false;">
	<img src="tpl/Wap/default/common/css/wedding/images/10.png" >
	</li>
</ul>
<div style=" margin-top:10px">
	<ul>
		<li class="pb_10"><img src="<?php echo ($weddingData["qr_code"]); ?>" style="width:100%;"></li>
		<li class="pb_10"><img src="" style="width:100%;"></li>
	</ul>
</div>
</div>
</section>
</div>   
<footer><?php echo ($weddingData["copyrite"]); ?></footer>
<script type="text/javascript">
window.shareData = {  
            "imgUrl": "<?php echo ($weddingData["picurl"]); ?>", 
            "timeLineLink": "<?php echo ($f_siteUrl); echo U('Wap/Wedding/index',array('token'=>htmlspecialchars($_GET['token']),'id'=>htmlspecialchars($_GET['id'])));?>",
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Wap/Wedding/index',array('token'=>htmlspecialchars($_GET['token']),'id'=>htmlspecialchars($_GET['id'])));?>",
            "weiboLink": "<?php echo ($f_siteUrl); echo U('Wap/Wedding/index',array('token'=>htmlspecialchars($_GET['token']),'id'=>htmlspecialchars($_GET['id'])));?>",
            "tTitle": "<?php echo ($weddingData["title"]); ?>",
            "tContent": "<?php echo ($weddingData["word"]); ?>",
            "fTitle": "<?php echo ($weddingData["title"]); ?>",
            "fContent": "<?php echo ($weddingData["title"]); ?>",
            "wContent": "<?php echo ($weddingData["title"]); ?>" 
        };
 	        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
            WeixinJSBridge.invoke('sendAppMessage', { 
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.sendFriendLink,
                "desc": window.shareData.fContent,
                "title": window.shareData.fTitle
            }, function (res) {
                _report('send_msg', res.err_msg);
            })
        });

        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function (argv) {
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.timeLineLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function (res) {
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink,
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
        }, false)
    </script>

<script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('hideToolbar');
});
</script>
</body>
</html>