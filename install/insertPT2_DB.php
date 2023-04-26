<?php
require_once('../config/Constants.php');
require_once('../helpers/Logs_helpers.php');
require_once('insertPT2/tableCategorias.php');
require_once('insertPT2/tableMarcas.php');
require_once('insertPT2/tableAccesorios.php');
require_once('insertPT2/tableProductos.php');
require_once('insertPT2/tableComentarios.php');
//Creamos las tablas de la BD
if(!empty($querys)){
  foreach($querys as $tabla=>$query){
    try {  
      $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $query;
      $count=$conn->exec($sql);
      $mensaje='Registros creados ('.$count.') : '.$tabla;
      $status['success'][]=$mensaje;
    } catch(PDOException $e) { 
       $mensaje=$e->errorInfo[2];  
      $status['error'][]=$mensaje;
    }
    _logCreate('database',$mensaje);
  }
}
$conn = null;
$examenParte=2;
$data['contenido']='../install/status.php';
require_once('../'.DIR_VIEW.'install/interfazDB.php');
?> 