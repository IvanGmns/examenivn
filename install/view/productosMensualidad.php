<?php 
$querys['productosMensualidad']="CREATE VIEW productosMensualidad AS (
    SELECT p.clave,p.modelo,cat.categoria,mar.marca,p.precio,(p.precio/6) as meses6,(p.precio/12) as meses12,(p.precio/12) * 1.10 as intereses
    FROM productos as p 
    JOIN categorias as cat on cat.id=p.idCategoria
    JOIN marcas as mar on mar.id=p.idMarca
    ORDER BY RAND()
    LIMIT 10
)";
?>