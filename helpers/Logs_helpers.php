
<?php

function _logCreate($log,$mensaje)	{
		$logFile = fopen("../php/log/".$log.".txt", 'a') or die("No se pudo crear el archivo");
		fwrite($logFile, "\n".date("d/m/Y H:i:s")." $mensaje") or die("No se pudo guardar el mensaje");
		fclose($logFile);
		return true;
}

function _logCreateV2($log,$mensaje)	{
		$logFile = fopen("php/log/".$log.".txt", 'a') or die("No se pudo crear el archivo");
		fwrite($logFile, "\n".date("d/m/Y H:i:s")." $mensaje") or die("No se pudo guardar el mensaje");
		fclose($logFile);
		return true;
}

?>