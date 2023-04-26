<?php 
class View{
	function get($controller,$view,$data = ''){
		$controller = get_class($controller);
		($controller == 'Productos' || $controller == 'Home' ? $view = DIR_VIEW.''.$view.'.php' : $view = DIR_VIEW.$controller.'/'.$view.'.php');			
		require_once($view);
	}

}
?>