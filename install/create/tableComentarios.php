<?php 
$querys['comentarios']="CREATE TABLE Comentarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    comentario TEXT(500) NOT NULL,
    calificacion INT(10) NOT NULL DEFAULT 0,
    idProducto INT(6) UNSIGNED,    
    fechaRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,    
    KEY `idProductoComentarioFK` (`idProducto`),
    CONSTRAINT `idProductoComentarioFK` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
)";
?>