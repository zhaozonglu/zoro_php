<?php
/**
 * 入口文件
 */
define('ROOT_PATH', dirname(__FILE__));
define('APP_PATH', ROOT_PATH.DIRECTORY_SEPARATOR.'app/');
define('ZORO_PATH',ROOT_PATH.DIRECTORY_SEPARATOR.'zoro/');

require_once ZORO_PATH.'app.class.php';

$app = new Zoro();
$app->run();