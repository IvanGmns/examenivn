<?php
$querys['categorias'] = "INSERT INTO Categorias (id,idCategoriaPadre,categoria,nemonico,fechaRegistro)
VALUES 
(1,1,'Laptop','LAP', date('Y-m-d H:i:s')),
(2,1,'Memorias','MEM',date('Y-m-d H:i:s')),
(3,1,'Gaming','GAM',date('Y-m-d H:i:s')),
(4,2,'Impresoras','IMP', date('Y-m-d H:i:s')),
(5,2,'Cartuchos','CAR', date('Y-m-d H:i:s')),
(6,1,'Servidores','SER', date('Y-m-d H:i:s')),
(7,8,'Ipad','IPD', date('Y-m-d H:i:s')),
(8,9,'Audifonos','AUD', date('Y-m-d H:i:s')),
(9,6,'Televisión','TEL', date('Y-m-d H:i:s')),
(10,9,'Otros','ACC', date('Y-m-d H:i:s'))";
?>