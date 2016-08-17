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
<script src="<?php echo STATICS;?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo STATICS;?>/artDialog/plugins/iframeTools.js"></script>


<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
 <style>
.cLine {
    overflow: hidden;
    padding: 5px 0;
  color:#000000;
}
.alert {
padding: 8px 35px 0 10px;
text-shadow: none;
-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
background-color: #f9edbe;
border: 1px solid #f0c36d;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
color: #333333;
margin-top: 5px;
}
.alert p {
margin: 0 0 10px;
display: block;
}
.alert .bold{
font-weight:bold;
}
 </style>
<script>

// var editor;
// KindEditor.ready(function(K) {
// editor = K.create('#second_desc', {
// resizeType : 1,
// allowPreviewEmoticons : false,
// allowImageUpload : true,
// uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
// items : [
// 'source','undo','plainpaste','wordpaste','clearhtml','quickformat','selectall','fullscreen','fontname', 'fontsize','subscript','superscript','indent','outdent','|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline','hr']
// });
// });
// </script>
 <script>
    jQuery(document).ready(function(){
      jQuery("#formID").validationEngine();
    });
    </script>

  <?php if($type == 'fitness'): ?><div class="content">
  <div class="cLineB">
    <h4>设置健身中心相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>设置健身中心相关内容,注意：第一次使用，请点击添加健身中心等相关设置，并点击保存 </font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'gover'): ?>
          <div class="content">
  <div class="cLineB">
    <h4>设置政务部门相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>请设置政务部门相关内容,注意：第一次使用，请点击添加政务部门等相关设置，并点击保存</font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'food'): ?>
          <div class="content">
  <div class="cLineB">
    <h4>请设置食品公司相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>请设置食品公司相关内容,注意：第一次使用，请点击添加食品公司简介等相关设置，并点击保存</font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'travel'): ?>
          <div class="content">
  <div class="cLineB">
    <h4>请设置旅游区相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>请设置旅游区相关内容,注意：第一次使用，请点击添加旅游区简介等相关设置，并点击保存</font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'flower'): ?>
          
<div class="content">
  <div class="cLineB">
    <h4>请设置花店相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>请设置花店相关内容,注意：第一次使用，请点击添加花店相关设置，并点击保存</font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'property'): ?>
          <div class="content">
  <div class="cLineB">
    <h4>设置婚庆公司相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>设置婚庆公司相关内容,注意：第一次使用，请点击添加婚庆公司等相关设置，并点击保存 </font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'ktv'): ?>
          <div class="content">
  <div class="cLineB">
    <h4>请设置KTV相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>请设置KTV相关内容,注意：第一次使用，请点击添KTV简介等相关设置，并点击保存</font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'bar'): ?>
          
<div class="content">
  <div class="cLineB">
    <h4>请设置酒吧相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>请设置酒吧相关内容,注意：第一次使用，请点击添酒吧简介等相关设置，并点击保存</font></strong>
    </p>
    </div>
   </div>
</div>

      <?php elseif($type == 'fitment'): ?>
          <div class="content">
  <div class="cLineB">
    <h4>请设置装修相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>请设置装修相关内容,注意：第一次使用，请点击添加装修相关设置，并点击保存</font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'wedding'): ?>
          <div class="content">
  <div class="cLineB">
    <h4>设置婚庆公司相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>设置婚庆公司相关内容,注意：第一次使用，请点击添加婚庆公司等相关设置，并点击保存 </font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'affections'): ?>
          
<div class="content">
  <div class="cLineB">
    <h4>请设置宠物公司相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>请设置宠物公司相关内容,注意：第一次使用，请点击添宠物公司简介等相关设置，并点击保存</font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'housekeeper'): ?>
          <div class="content">
  <div class="cLineB">
    <h4>设置家政公司相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>设置家政公司相关内容,注意：第一次使用，请点击添加家政公司等相关设置，并点击保存 </font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'lease'): ?>
          
<div class="content">
  <div class="cLineB">
    <h4>设置租赁公司相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>设置租赁公司相关内容,注意：第一次使用，请点击添加租赁公司等相关设置，并点击保存 </font></strong>
    </p>
    </div>
   </div>
</div>
      <?php elseif($type == 'beauty'): ?>
          <div class="content">
  <div class="cLineB">
    <h4>设置美容公司相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>设置美容公司相关内容,注意：第一次使用，请点击添加美容公司等相关设置，并点击保存 </font></strong>
    </p>
    </div>
   </div>
</div><?php endif; ?>

  <div class="msgWrap">
    <form class="form" method="post" action="" id="formID"    enctype="multipart/form-data">
      <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
            <?php if($busines_second['pid'] != ''): ?><input type="hidden" class="px" id="pid" value="<?php echo ($busines_second['pid']); ?>" name="pid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >
          </tr>

          <tr>
            <th valign="top"><label for="bid_id">
            <?php if($type == 'fitness'): ?>健身中心名称
      <?php elseif($type == 'gover'): ?>
政务部门
      <?php elseif($type == 'food'): ?>
食品公司名称
      <?php elseif($type == 'travel'): ?>
旅游公司名称
      <?php elseif($type == 'flower'): ?>
花店公司
      <?php elseif($type == 'property'): ?>
物业公司
      <?php elseif($type == 'ktv'): ?>
KVT名称
      <?php elseif($type == 'bar'): ?>
酒吧名称
      <?php elseif($type == 'fitment'): ?>
装修公司名称
      <?php elseif($type == 'wedding'): ?>
婚庆公司名称
      <?php elseif($type == 'affections'): ?>
宠物公司名称
      <?php elseif($type == 'housekeeper'): ?>
家政公司名称
      <?php elseif($type == 'lease'): ?>
租赁公司名称
      <?php elseif($type == 'beauty'): ?>
美容公司名称<?php endif; ?>
           </label></th>
            <td><select name="bid_id" id="bid_id">
            <option value="">请选择</option>
            <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["bid"]); ?>" <?php if($vo["bid"] == $busines_second['bid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["mtitle"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              <br>
            </td>
            <td></td>
          </tr>
        <tr>
            <th valign="top"><label for="ablum_id">选择相册</label></th>
            <td><select name="ablum_id" id="ablum_id">
            <option value="">请选择相册</option>
            <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo["id"] == $busines_second['ablum_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="picurl_1">海报1</label></th>
            <td>
            <?php if($busines_second['picurl_1'] != ''): ?><img class="thumb_img" id="picurl_1_src" src="<?php echo ($busines_second['picurl_1']); ?>" style="max-height:100px;max-width: 150px;"><?php endif; ?>
            <input type="input" class="px" id="picurl_1" value="<?php echo ($busines_second['picurl_1']); ?>" name="picurl_1" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl_1',1150,625,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl_1')">预览</a> [高: (320 或者 1366) ,宽: 640] 单位 px</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="picurl_2">海报2</label></th>
            <td>
<?php if($busines_second['picurl_2'] != ''): ?><img class="thumb_img" id="picurl_2_src" src="<?php echo ($busines_second['picurl_2']); ?>" style="max-height:100px;max-width: 150px;"><?php endif; ?><input type="input" class="px" id="picurl_2" value="<?php echo ($busines_second['picurl_2']); ?>" name="picurl_2" data-validation-engine="validate[custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl_2',1150,625,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl_2')">预览</a> </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="picurl_3">海报3</label></th>
            <td><?php if($busines_second['picurl_3'] != ''): ?><img class="thumb_img" id="picurl_3_src" src="<?php echo ($busines_second['picurl_3']); ?>" style="max-height:100px;max-width: 150px;"><?php endif; ?>
            <input type="input" class="px" id="picurl_3" value="<?php echo ($busines_second['picurl_3']); ?>" name="picurl_3" data-validation-engine="validate[custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl_3',1150,625,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl_3')">预览</a>   </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="picurl_4">海报4</label></th>
            <td><?php if($busines_second['picurl_1'] != ''): ?><img class="thumb_img" id="picurl_4_src" src="<?php echo ($busines_second['picurl_4']); ?>" style="max-height:100px;max-width: 150px;"><?php endif; ?><input type="input" class="px" id="picurl_4" value="<?php echo ($busines_second['picurl_4']); ?>" name="picurl_4" data-validation-engine="validate[custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl_4',1150,625,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl_4')">预览</a>  </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="picurl_5">海报5</label></th>
            <td><?php if($busines_second['picurl_1'] != ''): ?><img class="thumb_img" id="picurl_5_src" src="<?php echo ($busines_second['picurl_5']); ?>" style="max-height:100px;max-width: 150px;"><?php endif; ?><input type="input" class="px" id="picurl_5" value="<?php echo ($busines_second['picurl_5']); ?>" name="picurl_5" data-validation-engine="validate[custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl_5',1150,625,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl_5')">预览</a>  </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
   </form>
  </div>


</div>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>