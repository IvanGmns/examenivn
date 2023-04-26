<?php 
$querys['productosComentarios']="CREATE VIEW productosComentarios AS (
    SELECT p.clave,p.modelo,cat.categoria,mar.marca,p.especificaciones,p.precio,com.comentario,AVG(com.calificacion) AS calificacionPromedio
    FROM productos as p 
    LEFT JOIN comentarios as com on com.idProducto=p.id
    JOIN categorias as cat on cat.id=p.idCategoria
    JOIN marcas as mar on mar.id=p.idMarca
    GROUP BY p.id
    ORDER BY calificacionPromedio DESC
)";
?>