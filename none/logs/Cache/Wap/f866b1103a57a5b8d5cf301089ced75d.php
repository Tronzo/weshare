<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>懒人模板</title>
        <base href=".">
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <link href="./tpl/Wap/default/common/css/allcss/cate18_00.css" rel="stylesheet" type="text/css">
        <link href="./tpl/Wap/default/common/css/110/iscroll.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="./tpl/Wap/default/common/css/flash/css/plugmenu.css">
        <style>
            #cate10 .catemenu li:nth-child(n+4) img {
                display: block;
            }
            #cate10 .catemenu li:nth-child(n+4) a {
                padding: 20px 5px 10px;
            }
            #cate10 .catemenu li a {
                background:#75c13b;
                margin:0;
                border-radius: 0;
            }
            #cate10 .catemenu li:nth-child(2n) a {
                background:#01adc5;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(3n) a {
                background:#ec7815;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(4n) a {
                background:#ecac02;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(5n) a {
                background:#3064d2;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(6n) a {
                background:#9454ab;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(7n) a {
                background:#00b0c4;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(8n) a {
                background:#77c03b;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(9n) a {
                background:#75c13b;
                margin:0;
                border-radius: 0;
            }
            #cate10 .catemenu li:nth-child(10n) a {
                background:#01adc5;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(11n) a {
                background:#ec7815;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(12n) a {
                background:#ecac02;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(13n) a {
                background:#3064d2;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(14n) a {
                background:#9454ab;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(15n) a {
                background:#00b0c4;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu li:nth-child(16n) a {
                background:#77c03b;
                color:#fff;/*文字的颜色，可以自由更换*/
            }
            #cate10 .catemenu {
                margin:3px;
                border-radius: 0;
            } 
            #cate10 .catemenu a {
                border:0; color:#ccc;/*文字的颜色，可以自由更换*/
            } 
            #cate10 {
                background-color:#000000;/*黑色背景，可以自由更换*/
            }

        </style>
        <script src="./tpl/Wap/default/common/css/110/iscroll.js" type="text/javascript"></script>
        <script type="text/javascript">
            var myScroll;

            function loaded() {
                myScroll = new iScroll('wrapper', {
                    snap: true,
                    momentum: false,
                    hScrollbar: false,
                    onScrollEnd: function () {
                        document.querySelector('#indicator > li.active').className = '';
                        document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
                    }
                });
 
 
            }

            document.addEventListener('DOMContentLoaded', loaded, false);
        </script>

    </head>

    <body id="cate10">

		<div class="banner">
		<div id="wrapper" style="overflow: hidden;">
			<div id="scroller" style="width: 909px; -webkit-transition: 0ms; transition: 0ms; -webkit-transform: translate3d(0px, 0px, 0px) scale(1);">
				<ul id="thelist"> 

<!--广告切换-->

<?php
 $list1 = findList("member_business_ad","","addtime",3); foreach($list1 as $v){ echo '<li><p></p><a href="'.$v['url'].'"><img src="'.$v['img'].'" style="width: 303px;"></a></li>
			'; } ?>
	<!--END 广告切换	-->	
				
				
				
				
								</ul>
			</div>
		</div>
		<div id="nav">
			<div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,3);return false">← prev</div>
			<ul id="indicator">
			<li class="">1</li><li>2</li><li>3</li>			 
			</ul>
			<div id="next" onclick="myScroll.scrollToPage('next', 0);return false">next →</div>
		</div>
		<div class="clr"></div>
		</div>

        <div id="insert1"></div>

        <div class="catemenu">
            <ul > 



                 <li>
                    <a href="/index.php?g=Wap&m=Weilive&a=schedule&token=<?php echo ($vo["token"]); ?>&wecha_id=<?php echo $_GET['wecha_id']?>&id=<?php echo ($vo["id"]); ?>">
                        <img src="/Uploads/image/20140403/533cd5a9e8b25.png" />婚宴档期
                    </a>
                </li>


 <li>
                    <a href="/index.php?g=Wap&m=Weilive&a=company&token=<?php echo ($vo["token"]); ?>&wecha_id=<?php echo $_GET['wecha_id']?>&id=<?php echo ($vo["id"]); ?>">
                        <img src="/Uploads/image/20140403/533cd4cd3567f.png" />酒店详情
                    </a>
                </li>

				 <li>
                    <a href="/index.php?g=Wap&m=Weilive&a=product&token=<?php echo ($vo["token"]); ?>&wecha_id=<?php echo $_GET['wecha_id']?>&id=<?php echo ($vo["id"]); ?>">
                        <img src="/Uploads/image/20140403/533cd58489544.png" />宴席菜单
                    </a>
                </li>

				 <li>
                    <a href="/index.php?g=Wap&m=Weilive&a=wcase&token=<?php echo ($vo["token"]); ?>&wecha_id=<?php echo $_GET['wecha_id']?>&id=<?php echo ($vo["id"]); ?>">
                        <img src="/Uploads/image/20140403/533cd48a9c672.png" />婚礼案例
                    </a>
                </li>

				 <li>
                    <a href="<?php echo ($vo["map"]); ?>">
                        <img src="/Uploads/image/20140403/533cd4aef0537.png" />地图交通
                    </a>
                </li>


				 <li>
                    <a href="/index.php?g=Wap&m=Weilive&a=fav&token=<?php echo ($vo["token"]); ?>&wecha_id=<?php echo $_GET['wecha_id']?>&id=<?php echo ($vo["id"]); ?>">
                        <img src="/Uploads/image/20140403/533cd4c16ea06.png" />优惠活动
                    </a>
                </li>


                <div class="clr"></div>
            </ul>
        </div>

        <script>


            var count = document.getElementById("thelist").getElementsByTagName("img").length;	


            for(i=0;i<count;i++){
                document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

            }

            document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";


            setInterval(function(){
                myScroll.scrollToPage('next', 0,400,count);
            },3500 );

            window.onresize = function(){ 
                for(i=0;i<count;i++){
                    document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

                }

                document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
            } 

        </script>
        <div id="insert2"></div>
        <div style="display:none"> </div>

  <div class="copyright">
</div>   </body></html>