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

var editor;
KindEditor.ready(function(K) {
editor = K.create('#second_desc', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','plainpaste','wordpaste','clearhtml','quickformat','selectall','fullscreen','fontname', 'fontsize','subscript','superscript','indent','outdent','|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline','hr']
});
});
</script>
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
    <form class="form" method="post" id="formID" action=""    enctype="multipart/form-data">
     <?php if($type == 'fitness'): ?><table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
        <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
          <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">健身项目名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择健身房</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选择健身房</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo['mid'] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">项目图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">学时</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              例：72学时</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">健身用途</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
               比如: 锻炼腹肌,锻炼腰部等等
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">健身项目介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'gover'): ?>
          <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">服务名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择服务窗口</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选择服务窗口</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo["mid"] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务窗口图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">工作时间</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              例：周一至周五</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">所属类型</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
               比如: 服务,办证等等
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务类型介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'food'): ?>
          <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">食品名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择销售门店</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选择销售门店</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo["mid"] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">食品图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">口味</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              例：微辣,微甜</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">重量</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
               比如: 300g
              </td>
            <td></td>
          </tr>
                  <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">食品介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'travel'): ?>
          <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">景点名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择景区</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选择景区</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo["mid"] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">景点图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">景点等级</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              例：AAAA级</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">景点特色</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
               比如: 休闲,舒适等等
              </td>
            <td></td>
          </tr>
        <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">景点介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'flower'): ?>
        <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">特色鲜花名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择分店</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选择分店</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo["mid"] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">特色鲜花图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">套餐</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">花语</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
               比如: 爱情 ,事业等等
              </td>
            <td></td>
          </tr>
                  <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">鲜花介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'property'): ?>
          <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">业主服务名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择小区</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选择分店</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo["mid"] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">简要描述</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务描述</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
               比如: 爱情 ,事业等等
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'ktv'): ?>
          <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">ktv包厢名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择KTV分店</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选KTV分店</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo["mid"] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">ktv图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">简要描述</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">ktv包厢描述</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
                  <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">ktv包厢介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'bar'): ?>
          <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">特色酒水名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择酒吧分店</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选酒吧分店</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo["mid"] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">酒吧图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">重量</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">简要描述</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
                  <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">特色介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'fitment'): ?>
          <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">套餐名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择分店</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选择分店</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo["mid"] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">套餐图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">套餐</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">简要描述</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
                  <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">套餐介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'wedding'): ?>
          <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">服务项目名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择分店</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选择分店</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo['mid'] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">套餐</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              例：欧式罗马风格</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务范围</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
               比如: 婚车租赁 流程策划 司仪督导 乐队视频 摄像摄影 婚礼跟妆等等
              </td>
            <td></td>
          </tr>
                  <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务项目介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'affections'): ?>
           <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">食品/用具名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">所属宠物分店</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选所属宠物分店</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo["mid"] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">重量/属性/用途</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">简要描述</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
                  <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">特色介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'housekeeper'): ?>
          <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">服务项目名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择分店</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选择分店</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo['mid'] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">工时/价格</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              例：25元/小时 ,6元/平米</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务范围</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
               比如: 日常保洁,大扫除,新居开荒,衣鞋物干洗等等
              </td>
            <td></td>
          </tr>
                  <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务项目介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'lease'): ?>
          <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">服务项目名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过20字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择分店</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选择分店</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo['mid'] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">套餐</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[20]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">服务范围</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
                  <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">租赁类型介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table>
      <?php elseif($type == 'beauty'): ?>
          <table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tbody>
          <tr>
              <?php if($busines_second['sid'] != ''): ?><input type="hidden" class="px" id="sid" value="<?php echo ($busines_second['sid']); ?>" name="sid" >
            <input type="hidden" class="px" id="status" value="edit" name="status" ><?php endif; ?>
            <input type="hidden" class="px" id="type" value="<?php echo ($type); ?>" name="type" >

            <th valign="top"><label for="keyword">套餐名称</label></th>
            <td><input type="input" class="px" id="name" value="<?php echo ($busines_second['name']); ?>" name="name" style="width:300px" data-validation-engine="validate[required,minSize[2],maxSize[30]]" data-errormessage-value-missing="必填项">
              尽量简单，不要超过30字 </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">选择分店</label></th>
            <td><select name="mid_id" id="mid_id"  data-validation-engine="validate[required]" data-errormessage-value-missing="必填项">
                <option value="">请选择分店</option>
                <?php if(is_array($busines_list)): $i = 0; $__LIST__ = $busines_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($vo["mid"] == $busines_second['mid_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              <br>
            </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">套餐图片</label></th>
            <td><img class="thumb_img" id="picurl_src" src="<?php echo ($busines_second['picurl']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="picurl" value="<?php echo ($busines_second['picurl']); ?>" name="picurl" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('picurl')">预览</a> [700*420]</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">产品名称</label></th>
            <td><input type="input" class="px" id="learntime" value="<?php echo ($busines_second['learntime']); ?>" name="learntime" style="width:100px" data-validation-engine="validate[required,minSize[2],maxSize[30]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">产品功效</label></th>
            <td><input type="input" class="px" id="datatype" value="<?php echo ($busines_second['datatype']); ?>" name="datatype" style="width:200px" data-validation-engine="validate[required,minSize[2],maxSize[50]]" data-errormessage-value-missing="必填项">
              </td>
            <td></td>
          </tr>
                  <tr>
            <th valign="top"><label for="oneprice">一口价</label></th>
            <td><input type="input" class="px" id="oneprice" value="<?php echo ($busines_second['oneprice']); ?>" name="oneprice" style="width:100px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
              默认单位:RMB</td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="googsnumber">库存数 :</label></th>
            <td><input type="input" class="px" id="googsnumber" value="<?php echo ($busines_second['googsnumber']); ?>" name="googsnumber" style="width:200px" data-validation-engine="validate[required,custom[number],min[0]]" data-errormessage-value-missing="必填项">
            如果是库存是 0 ,那么就是等于商品下架. 每下一单,就减少1个库存.
              </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">排序</label></th>
            <td><input type="input" class="px" id="sort" value="<?php echo (($busines_second['sort'])?($busines_second['sort']):1); ?>" name="sort" style="width:30px"data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项">
              数字越大,越在前面显示. </td>
            <td></td>
          </tr>
          <tr>
            <th valign="top"><label for="keyword">产品介绍</label></th>
            <td>
    <textarea class="px" id="second_desc" name="second_desc" style="width: 605px; height: 350px;"  data-validation-engine="validate[required,minSize[2]]" data-errormessage-value-missing="必填项" ><?php echo ($busines_second['second_desc']); ?></textarea>
            </td>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn left">保存</button>
              <div class="clr"></div></td>
          </tr>
        </tbody>
      </table><?php endif; ?>

   </form>
  </div>


</div>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>