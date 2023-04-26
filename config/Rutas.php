<?php 
$url = (!empty($_GET['url']) ? $_GET['url'] : 'Productos/index');
$urlExplode = explode('/', $url);
$controller = $urlExplode[0];
$function = $urlExplode[0];
$parametros = "";
if (!empty($urlExplode[1]) ){
	($urlExplode[1] != "" ? $function = $urlExplode[1] : FALSE);		
}
if (!empty($urlExplode[2])) {
	if ($urlExplode[2] != "") {
		for ($i=2; $i < count($urlExplode) ; $i++) { 
			$parametros .= $urlExplode[$i].','; 
		}
		$parametros = trim($parametros,',');
	}
}
$controladorRuta = 'php/controllers/'.$controller.'.php';
if(file_exists($controladorRuta)){
	require_once($controladorRuta);
	$controller = new $controller();
	if (method_exists($controller, $function)) {
		$controller->{$function}($parametros);
	}else{
		echo '<br/>#302 Ruta no existe<br/>';
	}
}else{
	echo '<br/>#301 Ruta invalida<br/>';
}
?>