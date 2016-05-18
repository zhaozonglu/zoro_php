<?php
if(!defined('IN_ZORO')) exit('not access');
//数据库配置
$C['DB']['default'] = array(
	'TYPE'    => 'mysql' ,
	'HOST'    => 'localhost' ,
	'NAME'    => '',
	'USER'    => 'root',
	'PWD'     => '123456',
	'CHARSET' => 'utf8',
);
$C['default']['app'] = 'admin';
$C['default']['controller'] = 'user';
$C['default']['action'] = 'index';

return $C;
