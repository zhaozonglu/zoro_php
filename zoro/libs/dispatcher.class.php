<?php
//解析uri
class Dispatcher{

	private $_request;
	private $_controller;
	private $_action;
	private $_params;

	public function __construct(){
		$this->setRequest();
	}

	public function setRequest($request=''){
		if(null == $request){
			if(empty($_SERVER['PATH_INFO'])){
				$_SERVER['PATH_INFO'] = C::$config['default']['controller'].'/'.C::$config['default']['action'];
			}
			$this->_request = $_SERVER['PATH_INFO'];
		}else{
			$this->_request = $request;
		}
	}
	public function getRequest(){
		if(null == $this->_request){
			$this->setRequest();
		}
		return $this->_request;
	}
	public function getController(){
		return $this->_controller;
	}
	public function setController($controller=''){
		$this->_controller = $controller;
	}
	public function getAction(){
		return $this->_action;
	}
	public function setAction($action=''){
		$this->_action = $action;
	}
	public function setParam($param = ''){
		$this->_params = $param;
	}
	public function getParam(){
		return $this->_params;
	}
	public function addParam($param = ''){
		if(null == $this->_params){
			$this->_params = array();
		}
		$this->_params = $this->_params + $param;
	}
}