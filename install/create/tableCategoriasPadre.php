<?php 
$querys['categoriasPadre']="CREATE TABLE CategoriasPadre (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,    
    categoria VARCHAR(100) NOT NULL,        
    fechaRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fechaModificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
?>