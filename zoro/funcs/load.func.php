<?php
	/*
	 * 用来加载zoro下的类
	 * 使用方法如 load('core/module')
	 */
	function load_class($name){
		$info = explode('/', $name);
		require ZORO_PATH.DIRECTORY_SEPARATOR.$info[0].DIRECTORY_SEPARATOR.$info[1].'.class.php';
		$c_name = ucfirst($info[1]);
		return new $c_name;
	}
	
	function auto_load($name){
		$dd = load_class($name);
		return $dd;
	}
	
	function load($name){
		C::$load[$name] = load_class($name);
	}

	foreach (C::$auto_load as $class_name) {
		array_shift(C::$auto_load);
		C::$auto_load[$class_name] = auto_load($class_name);
	}