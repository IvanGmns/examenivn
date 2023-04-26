<?php 
$querys['accesorios']="CREATE TABLE Accesorios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    accesorio VARCHAR(100) NOT NULL,    
    idCategoria INT(6) UNSIGNED,    
    fechaRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fechaModificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    KEY `idCategoriaAccesorioFK` (`idCategoria`),
    CONSTRAINT `idCategoriaAccesorioFK` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION    
)";
?>