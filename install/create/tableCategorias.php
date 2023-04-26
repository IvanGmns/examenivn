<?php 
$querys['categorias']="CREATE TABLE Categorias (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    idCategoriaPadre INT(6) UNSIGNED,
    categoria VARCHAR(100) NOT NULL,    
    nemonico VARCHAR(3) NOT NULL,   
    fechaRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fechaModificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    KEY `idCategoriaPadreFK` (`idCategoriaPadre`),
    CONSTRAINT `idCategoriaPadreFK` FOREIGN KEY (`idCategoriaPadre`) REFERENCES `categoriasPadre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
)";
?>