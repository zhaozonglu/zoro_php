<?php
/**
 * 
 */
class Zoro{

    public function __construct(){
        $this->_init();
    }
    /**
     * 
     *
     */
    private function _init(){
        //加载配置文件
        global $config;
        $config = require_once 'config.php';
        require_once ZORO_PATH.'/core/controller.php';
        // require_once ZORO_PATH.'/libs/dispatcher.php';
        require_once ZORO_PATH.'/libs/functions.php';
        //包含必要类库
    }
    
    public function run(){
        //路由URL
        $router = load_class('libs','router');
        list($app, $controller, $action) = $router->start();
        //加载控制器
        $dp = load_class('libs','dispatcher');
        $dp->dispatch($controller,$action,$app);
    }
}