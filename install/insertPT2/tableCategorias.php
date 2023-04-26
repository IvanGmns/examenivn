<?php
$querys['categorias'] = "INSERT INTO Categorias (id,idCategoriaPadre,categoria,nemonico, fechaRegistro)
VALUES 
(11,1,'Antivirus','ANT', date('Y-m-d H:i:s')),
(12,1,'Discos duros','DDS', date('Y-m-d H:i:s')),
(13,4,'Cables', 'CAB',date('Y-m-d H:i:s')),
(14,1,'Energía','ENE', date('Y-m-d H:i:s')),
(15,4,'Redes','RED', date('Y-m-d H:i:s')),
(16,4,'Videovigilancia','VIV',date('Y-m-d H:i:s')),
(17,2,'Papelería','PAP', date('Y-m-d H:i:s')),
(18,5,'Muebles','MBL',date('Y-m-d H:i:s')),
(19,3,'Salud','SAL',date('Y-m-d H:i:s')),
(20,7,'Celulares','CEL',date('Y-m-d H:i:s'))";
?>