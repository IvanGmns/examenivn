
<?php 
$querys['productos']="CREATE TABLE Productos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    clave VARCHAR(30) NOT NULL,
    modelo VARCHAR(30) NOT NULL,
    especificaciones VARCHAR(200) NOT NULL,
    precio decimal(11,2) NOT NULL,    
    likes int(10) NOT NULL DEFAULT 0,
    idCategoria INT(6) UNSIGNED,
    idMarca INT(6) UNSIGNED,    
    fechaRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fechaModificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    KEY `idProductoCategoriaFK` (`idCategoria`),
    KEY `idProductoMarcasFK` (`idMarca`),    
    CONSTRAINT `idProductoCategoriaFK` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `idProductoMarcasFK` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION    
)";
?>