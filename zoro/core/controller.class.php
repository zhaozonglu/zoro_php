<?php
class Controller{

	//父类负责调度各个控制器
	public function dispatch($action_name,$data=''){
		$methods = get_class_methods($this);
		if(!in_array($action_name, $methods)){
			return $this->index();
		}
		return $this->$action_name($data);

	}
	//负责显示画面
	public function display($page){
		
	}
	//负责给画面绑定数据
	public function assign($data){

	}
}