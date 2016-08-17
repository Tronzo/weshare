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

<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<div class="tab">
<ul>
<li class="<?php if(ACTION_NAME == 'index' OR ACTION_NAME == 'carbrand'): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Car/index',array('token'=>$token));?>">品牌管理</a></li>
<li class="<?php if(ACTION_NAME == 'series' OR ACTION_NAME == 'addseries'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Car/series',array('token'=>$token));?>">车系管理</a></li>
<li class="<?php if(ACTION_NAME == 'carmodel' OR ACTION_NAME == 'add_carmodel'): ?>current<?php endif; ?> tabli" id="tab3"><a href="<?php echo U('Car/carmodel',array('token'=>$token));?>">车型管理</a></li>
<li class="<?php if(ACTION_NAME == 'salers' OR ACTION_NAME == 'add_saler'): ?>current<?php endif; ?> tabli" id="tab4"><a href="<?php echo U('Car/salers',array('token'=>$token));?>">销售管理</a></li>
<li class="<?php if(ACTION_NAME == 'reservation' OR ACTION_NAME == 'res_edit' OR ACTION_NAME == 'res_manage'): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('Car/reservation',array('token'=>$token));?>">预约管理</a></li>
<li class="<?php if(ACTION_NAME == 'carowner'): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('Car/carowner',array('token'=>$token));?>">车主关怀</a></li>
<li class="<?php if(ACTION_NAME == 'utility'): ?>current<?php endif; ?> tabli" id="tab7"><a href="<?php echo U('Car/utility',array('token'=>$token));?>">实用工具</a></li>
<li class="<?php if(ACTION_NAME == 'carnews'): ?>current<?php endif; ?> tabli" id="tab8"><a href="<?php echo U('Car/carnews',array('token'=>$token));?>">汽车文章</a></li>
<li class="<?php if(ACTION_NAME == 'carset'): ?>current<?php endif; ?> tabli" id="tab8"><a href="<?php echo U('Car/carset',array('token'=>$token));?>">回复设置</a></li>
<li class="<?php if(ACTION_NAME == 'caronwers'): ?>current<?php endif; ?> tabli" id="tab8"><a href="<?php echo U('Car/caronwers',array('token'=>$token));?>">车主</a></li>
</ul>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo Common;?>/default_user_com.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />

<script src="<?php echo RES;?>/js/select/js/comm.js"></script>
<script src="<?php echo RES;?>/js/select/js/linkagesel-min.js"></script>
<script src="<?php echo STATICS;?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo STATICS;?>/artDialog/plugins/iframeTools.js"></script>
<script>
   jQuery(document).ready(function(){
      jQuery("#formID").validationEngine();
    });
</script>

<div class="content">

<div class="cLineB">
  <h4>添加车型</h4><a href="javascript:history.go(-1);return false;" class="btn btn-primary btn_submit  J_ajax_submit_btn right" style="margin-top:-27px">返回</a>
 </div>
 <!--tab start-->

<!--tab end-->
    <div class="msgWrap bgfc" style="margin-top:10px;">
      <form class="form" method="post" action=""   id="formID" enctype="multipart/form-data">

        <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
            <tbody>
                <tr>
                    <th width="120">车型名称：</th>
                    <td> <input type="text" name="name" id="name" class="px" data-validation-engine="validate[required,minSize[1],maxSize[20]]"
                    data-errormessage-value-missing="必填项!" value="<?php echo ($carmodel['name']); ?>"/>
                      <span class="maroon">*</span>
                    </td>
                </tr>
               <tr>
                    <th>品牌/车系：</th>
                    <td>
                    <select id="car_brands_id"></select>
                    <input type='hidden' name='brand_serise' id="brand_serise"  value="<?php echo ($carmodel['brand_serise']); ?>"/>
                    <input type='hidden' name='s_id' id="s_id" class='px' value="<?php echo ($carmodel['s_id']); ?>"/>
                    <span class="maroon">选择品牌，车系会自动出来</span>
                    <!--select name="car_series" id="car_series" class="input-medium px" schoolSet></select-->
<script>
    var opts = {
            select: '#car_brands_id',
            url: "<?php echo U('Car/get_car_brand',array('token'=>$token));?>",
            head:'请选择！',
            autoHide:true

    };

    var linkageSel = new LinkageSel(opts);
    linkageSel.onChange(function(){
        var input = $("#brand_serise"),
        d = this.getSelectedDataArr('name'),
        s_id = linkageSel.getSelectedData('s_id'),
        arr = [];
        for (var i = 0, len = d.length; i < len; i++) {
            arr.push(d[i]);
        }
        input.val(arr.join('/'));

        $("#s_id").val(s_id);

    });

</script>
                    </td>
                </tr>
                <tr>
                    <th width="120">年款：</th>
                    <td>
                         <select class="input-medium valid" name="model_year">
                             <option value="2025">2025</option>
                             <option value="2024">2024</option>
                             <option value="2023">2023</option>
                             <option value="2022">2022</option>
                             <option value="2021">2021</option>
                             <option value="2020">2020</option>
                             <option value="2019">2019</option>
                             <option value="2018">2018</option>
                             <option value="2017">2017</option>
                             <option value="2016">2016</option>
                             <option value="2015">2015</option>
                             <option value="2014" selected="">2014</option>
                             <option value="2013" >2013</option>
                             <option value="2012">2012</option>
                             <option value="2011">2011</option>
                             <option value="2010">2010</option>
                             <option value="2009">2009</option>
                             <option value="2008">2008</option>
                             <option value="2007">2007</option>
                             <option value="2006">2006</option>
                             <option value="2005">2005</option>
                             <option value="2004">2004</option>
                             <option value="2003">2003</option>
                             <option value="2002">2002</option>
                             <option value="2001">2001</option>
                            <option value="2000">2000</option>
                         </select>
                     </td>
                </tr>
                <tr>
                    <th width="120">显示顺序：</th>
                    <td>  <input type="text" id="sort" name="sort" value="<?php echo (($carmodel['sort'])?($carmodel['sort']):1); ?>" class="input-mini px" data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项"  /><span class="maroon">*</span>
                    <span class="help-inline">数字越大越靠前</span></td>
                </tr>
                <tr>
                    <th>指导价：</th>
                    <td>
                    <input type="text" id="prices" name="guide_price" value="<?php echo ($carmodel['guide_price']); ?>" class="input-mini px" data-rule-number="true" />
                      <span class="help-inline">(万元) 如: 23.99-25.99</span>
                    </td>
                </tr>
                <tr>
                    <th width="120">经销商报价：</th>
                    <td> <input type="text" id="Text1" name="dealer_price" class="input-medium px" value="<?php echo ($carmodel['dealer_price']); ?>"/>
                         <span class="help-inline">(万元) 如:19.24-35.59</span></td>
                </tr>

                <tr>
                    <th width="120">图片：</th>
                    <td>
                                        <p>
<?php if($carmodel['pic_url'] != ''): ?><img class="thumb_img" id="pic_url_src" src="<?php echo ($carmodel['pic_url']); ?>" style="max-height:100px;"><?php endif; ?>
    <input type="input" class="px" id="pic_url" value="<?php echo ($carmodel['pic_url']); ?>" name="pic_url" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写外链,正确的网址,如: http://www.baidu.com/images/demo.png">

                                            <span class="help-inline">
                                                 <script src="<?php echo STATICS;?>/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic_url',720,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic_url')">预览</a>
                                                <span class="help-inline">建议尺寸：宽720像素，高400像素</span>
                                            </span>
                                        </p>
                    </td>
                </tr>
                  <tr>
                    <th width="120">全景相册名称:</th>
                    <td>
                         <select id="panorama_id" name="panorama_id" class="input-medium" schoolSet>
                                          <option value="0">请选择360全景相册</option>
                                            <?php if(is_array($panorama)): $i = 0; $__LIST__ = $panorama;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['pid']); ?>" <?php if($vo['pid'] == $carmodel['panorama_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有留空或者到 <a href="<?php echo U('Panorama/add',array('token'=>$token));?>" class="btn btn-primary btn_submit  J_ajax_submit_btn"><strong><font color='red'>360°全景</strong></font></a>添加</span>
                    </td>
                </tr>
                <tr>
                    <th width="120">排量：</th>
                    <td><input type="text" id="pl" name="emission" class="px" value="<?php echo ($carmodel['emission']); ?>" data-validation-engine="validate[required]"
                    data-errormessage-value-missing="必填项!" />请选择:
                    <select name="type" id="type">
                        <option value="1" <?php if($carmodel['type'] == 1): ?>selected="selected"<?php endif; ?>>L</option>
                        <option value="2" <?php if($carmodel['type'] == 2): ?>selected="selected"<?php endif; ?>>T</option>
                    </select>
                    </td>
                <tr>
                    <th width="120">挡位个数：</th>
                    <td>  <input type="text" id="dwgs" name="stalls" class="px" value="<?php echo ($carmodel['stalls']); ?>" data-rule-integer="true" /></td>
                </tr>
                <tr>
                    <th width="120">变速箱：</th>
                    <td>
                            <select name="box" id="bsx" class="input-medium">
                                <option value="1" <?php if($carmodel['box'] == 1): ?>selected<?php endif; ?> >自动变速箱(AT)</option>
                                <option value="2" <?php if($carmodel['box'] == 2): ?>selected<?php endif; ?> >手动变速箱(MT)</option>
                                <option value="3" <?php if($carmodel['box'] == 3): ?>selected<?php endif; ?> >手自一体 </option>
                                <option value="4" <?php if($carmodel['box'] == 4): ?>selected<?php endif; ?> >无级变速箱(CVT)</option>
                                <option value="5" <?php if($carmodel['box'] == 5): ?>selected<?php endif; ?> >无级变速(VDT)</option>
                                <option value="6" <?php if($carmodel['box'] == 6): ?>selected<?php endif; ?> >双离合变速箱(DCT)</option>
                                <option value="7" <?php if($carmodel['box'] == 7): ?>selected<?php endif; ?> >序列变速箱(AMT)</option>
                            </select>
                    </td>
                </tr>

                  </tr>
                    <td>
                    <?php if($carmodel['id'] != ''): ?><input type="hidden" name="id" value="<?php echo ($carmodel['id']); ?>" /><?php endif; ?>
                      <input type="hidden" name="token" value="<?php echo ($token); ?>" />
                        <button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
                        <a href="javascript:history.go(-1);" class="btn btn-primary btn_submit  J_ajax_submit_btn">取消</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
  </div>

        </div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>