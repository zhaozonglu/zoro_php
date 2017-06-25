<?php
/**
 * 入口文件test
 */
define('ROOT_PATH', dirname(__FILE__));
define('APP_PATH', ROOT_PATH.DIRECTORY_SEPARATOR.'app/');
define('ZORO_PATH',ROOT_PATH.DIRECTORY_SEPARATOR.'zoro/');

define('ZORO_VERSION','0.1');

require_once ZORO_PATH.'zoro.php';

$app = new Zoro();
$app->run();
