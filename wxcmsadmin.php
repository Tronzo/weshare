<?php
error_reporting(E_ALL);

//�������ݼ���� DOCUMENT_ROOT ��ֵ������
header("Content-type: text/html; charset=utf-8");
if(empty($_SERVER['DOCUMENT_ROOT']) && !empty($_SERVER['SCRIPT_FILENAME'])) {
if(PATH_SEPARATOR==':') $_SERVER['DOCUMENT_ROOT'] = str_replace( '\\', '/', substr($_SERVER['SCRIPT_FILENAME'], 0, 0 - strlen($_SERVER['PHP_SELF'])));
else $_SERVER['DOCUMENT_ROOT'] = substr($_SERVER['SCRIPT_FILENAME'], 0, 0 - strlen($_SERVER['PHP_SELF']));
}else if(empty($_SERVER['DOCUMENT_ROOT']) && !empty($_SERVER['PATH_TRANSLATED'])) {
    if(PATH_SEPARATOR==':') $_SERVER['DOCUMENT_ROOT'] = str_replace( '\\', '/', substr(str_replace('\\\\', '\\', $_SERVER['PATH_TRANSLATED']), 0, 0 - strlen($_SERVER['PHP_SELF'])));
    else $_SERVER['DOCUMENT_ROOT'] = substr(str_replace('\\\\', '\\', $_SERVER['PATH_TRANSLATED']), 0, 0 - strlen($_SERVER['PHP_SELF']));
}

if (get_magic_quotes_gpc()) {
	function stripslashes_deep($value){
		$value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value); 
		return $value; 
	}
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE); 
}
define('APP_DEBUG',1);
define('APP_NAME', 'cms');
define('CONF_PATH','./WQLData/Conf/');
define('RUNTIME_PATH','./WQLData/logs/');
define('TMPL_PATH','./tpl/');
define('HTML_PATH','./WQLData/html/');
define('APP_PATH','./WQLCms/');
define('CORE','./WQLCms/_Core');
require(CORE.'/WQLCms.php');
?>