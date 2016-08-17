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

  <?php if($type == 'fitness'): ?><link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'fitness'));?>">健身中心简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'fitness'));?>">健身房设置</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'fitness'));?>">健身项目</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'fitness'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'fitness'));?>">客户点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'fitness'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'gover'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'gover'));?>">政务部门简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'gover'));?>">服务窗口设置</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'gover'));?>">服务类型</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'gover'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'gover'));?>">领导点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'gover'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'food'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'food'));?>">食品公司简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'food'));?>">销售门店</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'food'));?>">食品分类</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'food'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'food'));?>">客户点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'food'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'travel'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'travel'));?>">旅游区简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'travel'));?>">景区</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'travel'));?>">景点</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'travel'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'travel'));?>">专家点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'travel'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'flower'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'flower'));?>">花店公司简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'flower'));?>">花店分店</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'flower'));?>">特色鲜花</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'flower'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'flower'));?>">客户点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'flower'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'property'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'property'));?>">物业公司简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'property'));?>">小区</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'property'));?>">业主服务</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'property'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'property'));?>">专家点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'property'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'ktv'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
#myClas ul li {
    margin-left: 5px;
}

.tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>
<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'ktv'));?>">KTV简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'ktv'));?>">KTV分店</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'ktv'));?>">KTV包厢</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'ktv'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'ktv'));?>">客户家点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'ktv'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'bar'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'bar'));?>">酒吧简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'bar'));?>">酒吧分店</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'bar'));?>">酒水特色</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'bar'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'bar'));?>">客户点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'bar'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'fitment'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'fitment'));?>">装修公司简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'fitment'));?>">装修分店</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'fitment'));?>">装修套餐</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'fitment'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'fitment'));?>">客户点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'fitment'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'wedding'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'wedding'));?>">婚庆公司简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'wedding'));?>">分店设置</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'wedding'));?>">服务项目</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'wedding'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'wedding'));?>">客户点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'wedding'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'affections'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'affections'));?>">宠物店简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'affections'));?>">宠物分店</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'affections'));?>">宠物起居</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'affections'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'affections'));?>">客户点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'affections'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'housekeeper'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'housekeeper'));?>">家政公司简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'housekeeper'));?>">分店设置</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'housekeeper'));?>">服务项目</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'housekeeper'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'housekeeper'));?>">客户点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'housekeeper'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'lease'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'lease'));?>">租赁公司简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'lease'));?>">分店设置</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'lease'));?>">租赁类型</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'lease'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'lease'));?>">客户点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'lease'));?>">订单管理</a></li>
</ul>
</div>
      <?php elseif($type == 'beauty'): ?>
          <link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }
</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if((ACTION_NAME == 'index') OR (ACTION_NAME == 'index_add')): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Business/index',array('token'=>$token,'type'=>'beauty'));?>">美容公司简介</a></li>
<li class="<?php if(ACTION_NAME == 'classify' OR (ACTION_NAME == 'classify_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/classify',array('token'=>$token,'type'=>'beauty'));?>">分店设置</a></li>
<li class="<?php if(ACTION_NAME == 'project' OR (ACTION_NAME == 'project_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/project',array('token'=>$token,'type'=>'beauty'));?>">美容套餐</a></li>
<li class="<?php if(ACTION_NAME == 'poster' OR (ACTION_NAME == 'poster_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/poster',array('token'=>$token,'type'=>'beauty'));?>">宣传海报/相册</a></li>
<li class="<?php if(ACTION_NAME == 'comments' OR (ACTION_NAME == 'comments_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/comments',array('token'=>$token,'type'=>'beauty'));?>">客户点评</a></li>
<li class="<?php if(ACTION_NAME == 'orders' OR (ACTION_NAME == 'orders_list')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Business/orders',array('token'=>$token,'type'=>'beauty'));?>">订单管理</a></li>
</ul>
</div><?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?php echo Common;?>/default_user_com.css" media="all">

<script src="./tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="./tpl/static/artDialog/plugins/iframeTools.js"></script>
<div class="content">
          <div class="cLineB">
              <h4 class="left">订单管理</h4>

          </div>

          <div class="cLine">
    <div class="alert">
    <p>（ 订单总数：<span class="redamount"><?php echo ($count); ?></span>　
<?php if(($type == 'gover') OR ($type == 'property')): ?>）
<?php else: ?>
    　付款成功：<span class="redamount"><?php echo ($ok_count); ?></span>　　付款失败(或者未付款)：<span class="redamount"><?php echo ($lose_count); ?></span>　　等待受理订单：<span class="redamount"><?php echo ($call_count); ?></span>）<?php endif; ?>


     </p>
    </div>
</div>

          <div class="msgWrap">
          <form method="post" action="" id="info">

            <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                    <tr>
                    <!-- <th width="20">序号</th> -->
                    <th width="60">真实姓名</th>
                    <th class="85">电话</th>
                    <th class="85">预约项目</th>
                    <th width="160">下单时间</th>
                    <?php if(($type == 'gover') OR ($type == 'property')): else: ?>
                    <th class="60">付款状态</th><?php endif; ?>
                    <th class="60">处理状态</th>
                    <th width="150" class="norightborder">操作</th>
                    </tr>
                  </thead>
              <tbody>
                <tr></tr>
                <?php if(is_array($books)): $i = 0; $__LIST__ = $books;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i;?><tr>
                        <!-- <td><?php echo ($o["id"]); ?></td> -->
                        <td><?php echo ($o['truename']); ?></td>
                        <td><?php echo ($o['tel']); ?></td>
                        <td><?php echo ($o['orderName']); ?> </td>
                        <td><?php echo (date('Y-m-d H:i:s',$o['booktime'])); ?></td>
                        <?php if(($type == 'gover') OR ($type == 'property')): else: ?>
                        <td><?php if($o['paid'] == 0): ?>未付款<?php elseif($o['paid'] == 1): ?>已付款<?php endif; ?></td><?php endif; ?>
                        <td>
                        <?php if($o['remate'] == 0): ?>待处理<?php elseif($o['remate'] == 1): ?>确认付款<?php elseif($o['remate'] == 2): ?>拒绝<?php endif; ?></td>



                        <td class="norightborder"><a href="###" onclick="showIntroDetail(<?php echo ($o['id']); ?>)" class="btn btn-primary btn_submit  J_ajax_submit_btn">详细</a>
                        <a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Business/order_del',array('token'=>$o['token'],'id'=>$o['id'],'type'=>$o['type']));?>');"  class="btn btn-primary btn_submit  J_ajax_submit_btn">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <input type="hidden" name="token" value="<?php echo ($_GET['token']); ?>" />
           </form>
          </div>
           <script>
            function showIntroDetail(id){
                art.dialog.open('<?php echo U('Business/orders_list',array('token'=>$token,'type'=>$type));?>&id='+id,{lock:false,title:'订单详情',width:700,height:420,yesText:'关闭',background: '#000',opacity: 0.87});
            }
        </script>

          <div class="cLine">
            <div class="pageNavigator right">
                 <div class="pages"><?php echo ($page); ?></div>
            </div>
            <div class="clr"></div>
          </div>
        </div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>