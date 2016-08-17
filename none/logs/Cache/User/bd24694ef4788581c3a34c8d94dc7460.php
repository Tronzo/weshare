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
<!-- <script src="<?php echo STATICS;?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo STATICS;?>/artDialog/plugins/iframeTools.js"></script> -->

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

  <div class="cLineC" style="line-height: 32px;"> <a href="<?php echo U('Business/project_add',array('token'=>$token,'type'=>$type));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">添加
  <?php if($type == 'fitness'): ?>健身项目
      <?php elseif($type == 'gover'): ?>
服务类型
      <?php elseif($type == 'food'): ?>
食品分类
      <?php elseif($type == 'travel'): ?>
景 点
      <?php elseif($type == 'flower'): ?>
特色香花
      <?php elseif($type == 'property'): ?>
业主服务
      <?php elseif($type == 'ktv'): ?>
KTV包厢
      <?php elseif($type == 'bar'): ?>
酒水特色
      <?php elseif($type == 'fitment'): ?>
装修套餐
      <?php elseif($type == 'wedding'): ?>
服务项目
      <?php elseif($type == 'affections'): ?>
食品/用具
      <?php elseif($type == 'housekeeper'): ?>
服务项目
      <?php elseif($type == 'lease'): ?>
租赁类型
      <?php elseif($type == 'beauty'): ?>
美容套餐<?php endif; ?>
</a>　 </div>
  <div class="msgWrap form">
    <div class="bdrcontent">
      <div id="div_ptype">
        <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
      <?php if($type == 'fitness'): ?><thead>
            <tr>
              <th style=" width:100px;">健身项目名称</th>
              <th style=" width:100px;">健身房</th>
              <th style=" width:100px;">学时</th>
              <th style=" width:100px;">用途</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'gover'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">政务部门名称</th>
              <th style=" width:100px;">所属服务窗口</th>
              <th style=" width:100px;">工作时间</th>
              <th style=" width:100px;">所属类型</th>
              <!-- <th style=" width:100px;">预留</th> -->
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'food'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">食品名称</th>
              <th style=" width:100px;">所属销售门店</th>
              <th style=" width:100px;">口味</th>
              <th style=" width:100px;">重量</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'travel'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">景点名称</th>
              <th style=" width:100px;">所属景区</th>
              <th style=" width:100px;">等级</th>
              <th style=" width:100px;">景点特色</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'flower'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">特色鲜花</th>
              <th style=" width:100px;">所属分店</th>
              <th style=" width:100px;">套餐</th>
              <th style=" width:100px;">花语</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'property'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">业主服务</th>
              <th style=" width:100px;">所属小区</th>
              <th style=" width:100px;">简要描述</th>
              <th style=" width:100px;">服务描述</th>
             <!--  <th style=" width:100px;">价格(RMB)</th> -->
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'ktv'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">KTV分店名称</th>
              <th style=" width:100px;">所属KTV</th>
              <th style=" width:100px;">简要描述</th>
              <th style=" width:100px;">KTV包厢描述</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'bar'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">特色酒水</th>
              <th style=" width:100px;">所属酒吧分店</th>
              <th style=" width:100px;">重量</th>
              <th style=" width:100px;">简要描述</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'fitment'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">套餐名称</th>
              <th style=" width:100px;">所属分店</th>
              <th style=" width:100px;">套餐</th>
              <th style=" width:100px;">简要介绍</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'wedding'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">服务项目名称</th>
              <th style=" width:100px;">所属分店</th>
              <th style=" width:100px;">套餐</th>
              <th style=" width:100px;">服务范围</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'affections'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">食品/用具名称</th>
              <th style=" width:100px;">所属宠物分店</th>
              <th style=" width:100px;">重量/属性/用途</th>
              <th style=" width:100px;">简要描述</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'housekeeper'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">服务项目名称</th>
              <th style=" width:100px;">所属分店</th>
              <th style=" width:100px;">工时/价格</th>
              <th style=" width:100px;">服务范围</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'lease'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">租赁类型名称</th>
              <th style=" width:100px;">所属分店</th>
              <th style=" width:100px;">套餐</th>
              <th style=" width:100px;">服务范围</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead>
      <?php elseif($type == 'beauty'): ?>
          <thead>
            <tr>
              <th style=" width:100px;">套餐名称</th>
              <th style=" width:100px;">所属分店</th>
              <th style=" width:100px;">产品名称</th>
              <th style=" width:100px;">产品功效</th>
              <th style=" width:100px;">价格(RMB)</th>
              <th style=" width:100px;">图片</th>
              <th style=" width:120px;">操作</th>
            </tr>
          </thead><?php endif; ?>
          <tbody>
              <?php if(is_array($busines_second)): $i = 0; $__LIST__ = $busines_second;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo["name"]); ?></td>
                    <td><?php echo ($vo["0"]); ?></td>
                    <td><?php echo ($vo["learntime"]); ?></td>
                    <td><?php echo ($vo["datatype"]); ?></td>
<?php if($type == 'gover' OR $type == 'property'): else: ?>
<td><?php echo ($vo["oneprice"]); ?></td><?php endif; ?>
                    <td><div class="cateimg"><img src="<?php echo ($vo["picurl"]); ?>" class="cateimg_small"></div></td>
                    <td>
              <a href="<?php echo U('Business/project_add',array('sid'=>$vo['sid'],'type'=>$vo['type']));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">编辑</a>
              <a href="<?php echo U('Business/project_del',array('sid'=>$vo['sid'],'type'=>$vo['type']));?>" onclick="return(confirm('确定要删除吗？'))" class="btn btn-primary btn_submit  J_ajax_submit_btn">删除</a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
         </table>
      </div>
    </div>
    <div class="footactions" style="padding-left:10px">
      <div class="pages"></div>
    </div>
  </div>

</div>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>