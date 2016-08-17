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

<script type="text/javascript" src="<?php echo RES;?>/css/catemenu-style/common.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/catemenu-style/discuz_tips.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/catemenu-style/h.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/catemenu-style/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/catemenu-style/style2.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/news-render/news_render.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/catemenu-style/style_2_common.css" media="all">
 <div class="content">
        <div class="cLineB">
          <h4>3G站点底部菜单设置</h4>
        </div>
                 <ul id="tags">
          <li><a href="<?php echo U('Catemenu/index');?>">底部菜单分类设置</a> </li>
          <li class="selectTag"><a href="<?php echo U('Catemenu/styleSet');?>">底部菜单风格选择</a> </li>
          <li><a href="<?php echo U('Home/plugmenu');?>">菜单颜色与版权</a> </li>
          <div class="clr"></div>
        </ul>
        <div class="cLineB" style="padding:0;margin:0"></div>
        <div class="msgWrap">
          <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
            <tbody>
              <tr>
                <td><form id="form1" name="form1" method="post" action="">
                    <ul class="cateradio">
                     <li <?php if($radiogroup == 0): ?>class="active"<?php endif; ?> >
                        <label><img src="<?php echo RES;?>/css/catemenu-style/000.png">
                          <input class="radio" type="radio" name="radiogroup" value="0" id="radiogroup_0" <?php if($radiogroup == 0): ?>checked<?php endif; ?>>
                          关闭底部导航</label>
                      </li>
                      <li <?php if($radiogroup == 1): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/001.png">
                          <input class="radio" type="radio" name="radiogroup" value="1" id="radiogroup_1" <?php if($radiogroup == 1): ?>checked<?php endif; ?>>
                          1.左侧展开</label>
                      </li>
                      <li <?php if($radiogroup == 2): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/002.png">
                          <input class="radio" type="radio" name="radiogroup" value="2" id="radiogroup_2" <?php if($radiogroup == 2): ?>checked<?php endif; ?>>
                          2.右侧展开</label>
                      </li>
                      <li <?php if($radiogroup == 3): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/003.png">
                          <input class="radio" type="radio" name="radiogroup" value="3" id="radiogroup_3" <?php if($radiogroup == 3): ?>checked<?php endif; ?>>
                          3.左侧滑入</label>
                      </li>
                      <li <?php if($radiogroup == 4): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/004.png">
                          <input class="radio" type="radio" name="radiogroup" value="4" id="radiogroup_4" <?php if($radiogroup == 4): ?>checked<?php endif; ?>>
                          4.右侧滑入</label>
                      </li>
                      <li <?php if($radiogroup == 5): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/005.png">
                          <input class="radio" type="radio" name="radiogroup" value="5" id="radiogroup_5" <?php if($radiogroup == 5): ?>checked<?php endif; ?>>
                          5.左侧底部滑入</label>
                      </li>
                      <li <?php if($radiogroup == 6): ?>class="active"<?php endif; ?>> 
                        <label><img src="<?php echo RES;?>/css/catemenu-style/006.png">
                          <input class="radio" type="radio" name="radiogroup" value="6" id="radiogroup_6" <?php if($radiogroup == 6): ?>checked<?php endif; ?>>
                          6.右侧底部滑入</label>
                      </li>
                      <li <?php if($radiogroup == 7): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/007.png">
                          <input class="radio" type="radio" name="radiogroup" value="7" id="radiogroup_7" <?php if($radiogroup == 7): ?>checked<?php endif; ?>>
                          7</label>
                      </li>
                      <li <?php if($radiogroup == 8): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/008.png">
                          <input class="radio" type="radio" name="radiogroup" value="8" id="radiogroup_8" <?php if($radiogroup == 8): ?>checked<?php endif; ?>>
                          8</label>
                      </li>
                      <li <?php if($radiogroup == 9): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/009.png">
                          <input class="radio" type="radio" name="radiogroup" value="9" id="radiogroup_9" <?php if($radiogroup == 9): ?>checked<?php endif; ?>>
                          9</label>
                      </li>
                      <li <?php if($radiogroup == 10): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/010.png">
                          <input class="radio" type="radio" name="radiogroup" value="10" id="radiogroup_10" <?php if($radiogroup == 10): ?>checked<?php endif; ?>>
                          10</label>
                      </li>
                      <li <?php if($radiogroup == 11): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/011.png">
                          <input class="radio" type="radio" name="radiogroup" value="11" id="radiogroup_11" <?php if($radiogroup == 11): ?>checked<?php endif; ?>>
                          11</label>
                      </li>
                      <li <?php if($radiogroup == 12): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/012.png">
                          <input class="radio" type="radio" name="radiogroup" value="12" id="radiogroup_12" <?php if($radiogroup == 12): ?>checked<?php endif; ?>>
                          12</label>
                      </li>
                      <li <?php if($radiogroup == 13): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/013.png">
                          <input class="radio" type="radio" name="radiogroup" value="13" id="radiogroup_13" <?php if($radiogroup == 13): ?>checked<?php endif; ?>>
                          13</label>
                      </li>
                      <li <?php if($radiogroup == 14): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/014.png">
                          <input class="radio" type="radio" name="radiogroup" value="14" id="radiogroup_14" <?php if($radiogroup == 14): ?>checked<?php endif; ?>>
                          14</label>
                      </li>
                      <li <?php if($radiogroup == 15): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/015.png">
                          <input class="radio" type="radio" name="radiogroup" value="15" id="radiogroup_15" <?php if($radiogroup == 15): ?>checked<?php endif; ?>>
                          15</label>
                      </li>
                      <li <?php if($radiogroup == 16): ?>class="active"<?php endif; ?>>
                        <label><img src="<?php echo RES;?>/css/catemenu-style/016.png">
                          <input class="radio" type="radio" name="radiogroup" value="16" id="radiogroup_16" <?php if($radiogroup == 16): ?>checked<?php endif; ?>>
                          16</label>
                      </li>
                    </ul>
                    <script>
                    $(document).ready(function(){
                      $(".radio").click(function(){
                          var radiostyle=$(this).val();
                          //alert(radiostyle);
                          $(".cateradio li").each(function(){
                            $(this).removeClass("active");
                          });
                          $(this).parents("li").addClass("active");
                          $.ajax({
                              type:"get",
                              url:"index.php?g=User&m=Catemenu&a=styleChange&radiogroup="+radiostyle,
                              dataType:"json",
                          });
                      });
                    });
                    </script>

                  </form></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
<!--底部-->   </div>
  <div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>