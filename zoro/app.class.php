<?php
if(!defined('IN_ZORO')) define('IN_ZORO', true);
class APP{

	public function __construct(){
		$this->init();
		header('Content-Type:text/html;charset=utf-8');
	}

	private function init(){
		include 'libs/c.class.php';
		include 'funcs/load.func.php';
		$config = include 'config.inc.php';
		date_default_timezone_set('PRC');
		$this->loadConfig($config);
		load('libs/dispatcher');
		load('libs/router');
	
	}

	public function run(){
		$dp = C::$load['libs/dispatcher'];
		C::$load['libs/router']->run($dp);
		$controller = $dp->getController();
		$action = $dp->getAction();
		$app = C::$config['default']['app'];
		include APP_PATH.DIRECTORY_SEPARATOR.$app.DIRECTORY_SEPARATOR.'controllers'
		                .DIRECTORY_SEPARATOR.$controller.'controller.class.php';
		$controller_name = ucfirst($controller).'Controller';
		$control = new $controller_name;
		$pm = $dp->getParam();
		$control->dispatch($action);
	}

	public function loadConfig($config){
		C::$config = $config;
	}
}