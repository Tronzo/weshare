<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>围住神经猫 - <?php echo ($info["wxname"]); ?></title>
    <meta name="viewport"
          content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no,target-densitydpi=device-dpi"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <meta name="full-screen" content="true"/>
    <meta name="screen-orientation" content="portrait"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
    
    <!-- <base href="http://1251001823.cdn.myqcloud.com/1251001823/wechat/sjm/"/> to modified--> 


    <style>
        body {
            text-align: center;
            background: #000000;
            padding: 0;
            border: 0;
            margin: 0;
            height: 100%;
        }

        html {
            -ms-touch-action: none; /* Direct all pointer events to JavaScript code. */
        }
        .sbgshow{display:block;position:fixed;top:0;left:0;width:100%;height:100%;text-align:center;color:#fff;font-size:30px;line-height:1.7em;background:rgba(0,0,0,0.85);}
        .sbgshow .arron{ position:absolute;top:8px;right:8px;width:100px;height:100px;background:url(http://wgame.weapp.me/sjm/arron.png) no-repeat; background-size:100px 100px;}
        .sbgshow p{padding-top:78px;}
        .sbg{display:none;position:fixed;top:0;left:0;width:100%;height:100%;text-align:center;color:#fff;font-size:26px;line-height:1.7em;background:rgba(0,0,0,0.85);}
        .sbg .arron{ position:absolute;top:8px;right:8px;width:100px;height:100px;background:url(http://wgame.weapp.me/sjm/arron.png) no-repeat; background-size:100px 100px;}
        .sbg p{padding-top:78px;}
    </style>
</head>
<body>
<div style="display:inline-block;width:100%; height:100%;margin: 0 auto; background: black; position:relative;"
     id="gameDiv">
    <canvas id="gameCanvas" width="480" height="800" style="background-color: #000000"></canvas>
</div>
<div id="sbg" class="sbg" onclick="this.className='sbg'" ontouchstart="this.className='sbg'">
    <div class="arron" ></div>
    <p id="msg">请点击右上角<br/>点击【分享到朋友圈】<br/>测测好友的神经指数吧！</p>
</div>
<script>var document_class = "GameApp";</script><!--这部分内容在编译时会被替换，要修改文档类，请到工程目录下的egretProperties.json内编辑。-->
<script src="/tpl/Wap/default/common/sjm/egret_loader.js"></script>
<script src="/tpl/Wap/default/common/sjm/game-min-0722.js"></script>

<script>
    window.shareData = {
        "imgUrl": "<?php if($info['sharepicurl'] != false): echo ($info["sharepicurl"]); else: echo ($f_siteUrl); ?>/tpl/Wap/default/common/sjm/share/mao.jpg<?php endif; ?>",
        "timeLineLink": "<?php echo ($f_siteUrl); ?>/index.php?g=Wap&m=Sjm&a=index&token=<?php echo ($_GET['token']); ?>&wecha_id=<?php echo ($_GET['wecha_id']); ?>",
        "tTitle": "围住神经猫 - <?php echo ($info["wxname"]); ?>，玩过之后我整个人都精神了！",
        "tContent": "在9×9范围内的格子中，使用色块围住白色神经猫。"
    };
    function showme(){
        window.location.href="<?php echo ($info["url"]); ?>";
    }
    function share(n , m){
        if(m == 0){
            document.title = window.shareData.tTitle = "围住神经猫-根本停不下来，玩过之后我整个人都精神了！"
        }
        if(m == 1){
            document.title = window.shareData.tTitle = "我用了"+n+"步围住神经猫，击败"+(100-n)+"%的人，你能超过我吗？"
        }
        if(m == 2){
            document.title = window.shareData.tTitle = "我没有围住它，谁能帮个忙？"
        }
        document.getElementById("sbg").className="sbgshow";
        window.setTimeout(hiddenMe, 5000);
    }

    function hiddenMe(){
        document.getElementById("sbg").className="sbg";
    }

    var mebtnopenurl = window.location.href;

    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
    WeixinJSBridge.on('menu:share:appmessage', function(argv) {
        WeixinJSBridge.invoke('sendAppMessage', {
            "img_url": window.shareData.imgUrl,
            "link": window.shareData.timeLineLink,
            "desc": window.shareData.tContent,
            "title": window.shareData.tTitle
        }, function(res) {
            document.location.href = mebtnopenurl;
            if (confirm("【提示】<?php echo ($info["tip"]); ?>")){
                      window.location.href="<?php echo ($info["shareurl"]); ?>";
                    }
        })
    });

    WeixinJSBridge.on('menu:share:timeline', function(argv) {
        WeixinJSBridge.invoke('shareTimeline', {
            "img_url": window.shareData.imgUrl,
            "img_width": "640",
            "img_height": "640",
            "link": window.shareData.timeLineLink,
            "desc": window.shareData.tContent,
            "title": window.shareData.tTitle
        }, function(res) {
            document.location.href = mebtnopenurl;
            if (confirm("【提示】<?php echo ($info["tip"]); ?>")){
                      window.location.href="<?php echo ($info["shareurl"]); ?>";
                    }

        });
    });

    WeixinJSBridge.on('menu:share:weibo', function(argv) {
        WeixinJSBridge.invoke('shareWeibo', {
            "content": window.shareData.tContent,
            "url": window.shareData.timeLineLink
        }, function(res) {
            //document.location.href = mebtnopenurl;
            if (confirm("【提示】<?php echo ($info["tip"]); ?>")){
                      window.location.href="<?php echo ($info["shareurl"]); ?>";
                    }
        });
    });
    }, false)


    egret_h5.startGame();
</script>
<!-- <script type="text/javascript" src="http://js.tongji.linezing.com/3495865/tongji.js"></script> to modified-->
<script type="text/javascript" src="/tpl/Wap/default/common/sjm/WeixinApi.js"></script>
    //     <script type="text/javascript">
    //     function setCookie(key,value,date){
    //       var _date=new Date();
    //       _date.setDate(_date.getDate()+1);
    //       document.cookie=key+"="+value+";expires"+_date+";";
    //     }
    //     WeixinApi.ready(function(Api) {
    //         // 微信分享的数据
    //         // var wxData = {
    //         //     "appId": "", // 服务号可以填写appId
    //         //     "imgUrl" : "frogicon.png",
    //         //     "link" : "../index.html",
    //         //     "desc" : '玩起来怎么都停不下来的啊！',
    //         //     "title" : "一个都不能死"
    //         // };

    //         // 分享的回调
    //         var wxCallbacks = {
    //             // 分享操作开始之前
    //             ready : function() {
    //                 // 你可以在这里对分享的数据进行重组
    //             },
    //             // 分享被用户自动取消
    //             cancel : function(resp) {
    //                 // 你可以在你的页面上给用户一个小Tip，为什么要取消呢？
    //             },
    //             // 分享失败了
    //             fail : function(resp) {
    //                 // 分享失败了，是不是可以告诉用户：不要紧，可能是网络问题，一会儿再试试？
    //             },
    //             // 分享成功
    //             confirm : function(resp) {
    //                 // 分享成功了，我们是不是可以做一些分享统计呢？
    //                  if (confirm("【提示】关注微派桌游助手，在微游戏里可以再次玩'抓住神经猫'，要不要收藏这个游戏？")){
    //                   window.location.href="http://mp.weixin.qq.com/s?__biz=MjM5NjQ3OTgwMQ==&mid=230393667&idx=1&sn=bd4d12e12d310a4a434aa04291358f08#rd";
    //                 }
                    
    //             },
    //             // 整个分享过程结束
    //             all : function(resp) {
    //                 // 如果你做的是一个鼓励用户进行分享的产品，在这里是不是可以给用户一些反馈了？
                    
                    // if (confirm("【提示】关注微派桌游助手，在微游戏里可以再次玩'抓住神经猫'，要不要收藏这个游戏？")){
                    //   window.location.href="http://mp.weixin.qq.com/s?__biz=MjM5NjQ3OTgwMQ==&mid=230393667&idx=1&sn=bd4d12e12d310a4a434aa04291358f08#rd";
                    // }
    //             }
    //         };
    //         // 用户点开右上角popup菜单后，点击分享给好友，会执行下面这个代码
    //         Api.shareToFriend(wxData, wxCallbacks);

    //         // 点击分享到朋友圈，会执行下面这个代码
    //         Api.shareToTimeline(wxData, wxCallbacks);

    //         // 点击分享到腾讯微博，会执行下面这个代码
    //         Api.shareToWeibo(wxData, wxCallbacks);

    //         // 有可能用户是直接用微信“扫一扫”打开的，这个情况下，optionMenu、toolbar都是off状态
    //         // 为了方便用户测试，我先来trigger show一下
    //         // optionMenu
    //         var elOptionMenu = document.getElementById('optionMenu');
    //         elOptionMenu.click(); // 先隐藏
    //         elOptionMenu.click(); // 再显示
    //         // toolbar
    //         var elToolbar = document.getElementById('toolbar');
    //         elToolbar.click(); // 先隐藏
    //         elToolbar.click(); // 再显示
    //     });
    // </script>




<div style="display:none;">
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000536911'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1000536911' type='text/javascript'%3E%3C/script%3E"));</script>
</div>
</body>
</html>