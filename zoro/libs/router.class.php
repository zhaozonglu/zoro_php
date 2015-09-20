<?php
class Router{

	public function run(Dispatcher $dp){
		$uri = $dp->getRequest();
		if($index = strpos($uri, '?')){
			$uri = substr($uri, 0, $index);
			$dp->setParam($_GET);
		}
		$arr = explode('/',trim($uri,'/'));
		if(isset($arr[0])){
			$dp->setController(array_shift($arr));
		}
		if(isset($arr[0])){
			$dp->setAction(array_shift($arr));
		}
		if($count = count($arr)){
			for($i=0; $i < $count ;$i=$i+2){
				$temp[$arr[$i]] = $arr[$i+1];
			}
			$dp->addParam($temp);
		}
		if(isset($_POST)){
			$dp->addParam($_POST);
		}
	}
}