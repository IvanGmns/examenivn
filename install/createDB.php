<?php
require_once('../config/Constants.php');
require_once('../helpers/Logs_helpers.php');
require_once('create/tableCategoriasPadre.php');
require_once('create/tableCategorias.php');
require_once('create/tableMarcas.php');
require_once('create/tableAccesorios.php');
require_once('create/tableProductos.php');
require_once('create/tableComentarios.php');
//Creamos la Base de datos
try {
  $conn = new PDO("mysql:host=".DB_HOST, DB_USER, DB_PASSWORD);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE ".DB_NAME;
  $conn->exec($sql);
  $mensaje='Se creo la BD: '.DB_NAME;
  $status['success'][]=$mensaje;
} catch(PDOException $e) {  
  $mensaje=$e->errorInfo[2];
  $status['error'][]= $mensaje;  
}
_logCreate('database',$mensaje);
//Creamos las tablas de la BD
if(!empty($querys)){
  foreach($querys as $tabla=>$query){
    try {  
      $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $query;
      $count=$conn->exec($sql);
      $mensaje='Tabla creada : '.$tabla;
      $status['success'][]=$mensaje;
    } catch(PDOException $e) {  
      $mensaje=$e->errorInfo[2];  
      $status['error'][]=$mensaje;
    }
    _logCreate('database',$mensaje);
  }
}
$conn = null;
$examenParte=1;
$data['contenido']='../install/status.php';
require_once('../'.DIR_VIEW.'install/interfazDB.php');
?> 