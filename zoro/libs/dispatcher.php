<?php
class Dispatcher{
    
    public function __construct(){

    }
    
    public function dispatch($controller, $action , $app='admin'){
        require_once APP_PATH.$app.'/controllers/'.$controller.'controller.php';
        $controller_name = ucfirst($controller.'Controller');
        $controller = new $controller_name;
        $controller->$action();
    }
}