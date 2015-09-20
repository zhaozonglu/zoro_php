<?php
if(!defined('IN_ZORO')) exit('not access');

define('ZORO_PATH', dirname(__FILE__));
define('ROOT_PATH', substr(dirname(__FILE__),0,-4));
define('APP_PATH',ROOT_PATH.DIRECTORY_SEPARATOR.'app');

//数据库配置
$C['DB']['default'] = array(
	'TYPE'    => 'mysql' ,
	'HOST'    => 'localhost' ,
	'NAME'    => '',
	'USER'    => 'root',
	'PWD'     => '123456',
	'CHARSET' => 'utf8',
);