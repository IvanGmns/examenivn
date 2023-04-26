<?php 

class Controllers{
	
	public function __construct(){
		$this->view = new View;
		$this->loadModel();
	}

	public function loadModel(){
		$model = get_class($this).'Models';
		$routeClass = 'php/models/'.$model.'.php';		
		if(file_exists($routeClass)){
			require_once($routeClass);
			$this->model = new $model();
		}
	}
}