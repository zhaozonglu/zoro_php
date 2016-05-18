<?php

/**
 * 加载类
 */
function load_class($folder, $name, $iscore = true, $app = 'admin'){
    if($iscore){
        require_once ZORO_PATH.'/'.$folder.'/'.$name.'.php';
    }else{
        require_once APP_PATH.'/'.$app.'/'.$folder.'/'.$name.'.php';
    }
    $class_name = ucfirst($name);
    return new $class_name;
}