<?php
/**
 * 路由 
 * 解析出控制器
 */
class Router{

    public function start(){
        global $config;
        //判断使用url模式
        switch ($config['url_schema']) {
            case '1':
                //todo coding
                break;
            case '2':
                //解析url
                $default = $config['default_url'];
                if(empty($_SERVER['PATH_INFO'])){
                    //使用配置文件中的默认
                    $data = $default;
                }else{
                    $_SERVER['PATH_INFO'] = trim($_SERVER['PATH_INFO'],'/');
                    $data = explode('/', $_SERVER['PATH_INFO']);
                }
                break;
        }
        $count = count($data);
        switch ($count) {
            case '1':
                array_unshift($data, $default[1]);
                array_unshift($data, $default[0]);
                break;
            case '2':
                // $data[] = $default[2];
                array_unshift($data, $default[0]);
                break;
        }
        return $data;
    }
}