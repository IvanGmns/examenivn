<?php
class ProductosModels extends Mysql{

    public function __construct(){
        parent::__construct();
    }

    function _database($query,$tabla){
        try {  
            $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $query;
            $count=$conn->exec($sql);
            $mensaje='Registros creado ('.$count.') :'.$tabla;
            $status['success'][]=$mensaje;
        } catch(PDOException $e) { 
            $mensaje=$e->errorInfo[2];  
            $status['error'][]=$mensaje;
        }
        _logCreateV2('database',$mensaje);
        return $status;
    }


    function accesoriosAll(){
        $query = "
        SELECT acc.accesorio,cat.categoria,acc.fechaRegistro,acc.fechaModificacion 
        FROM accesorios as acc 
        LEFT JOIN categorias as cat on cat.id=acc.idCategoria";
        return  $request = $this->select_all($query);
    }

    function comentariosView(){
        $query = "SELECT * FROM productosComentarios";
        return  $request = $this->select_all($query);
    }

    function productos(){
        $query = "
        SELECT p.clave,p.modelo,p.especificaciones,p.precio,p.likes,p.visitas,p.fechaRegistro,p.fechaModificacion,cat.categoria,mar.marca
        FROM productos as p 
        JOIN categorias as cat on cat.id=p.idCategoria 
        JOIN marcas as mar on mar.id=p.idMarca
        ORDER BY RAND()";
        return  $request = $this->select_all($query);
    }

    function mensualidadesView(){
        $query = "SELECT * FROM productosMensualidad";
        return  $request = $this->select_all($query);
    }

    function categorias(){
        $query = "SELECT id as idCategoria,categoria,nemonico FROM categorias";
        return  $request = $this->select_all($query);   
    }

    function marcas(){
        $query = "SELECT id as idMarca,marca,nemonico FROM marcas";
        return  $request = $this->select_all($query);   
    }

    function productosLast200(){
        $query = "
        SELECT p.id as idProducto,p.clave,p.modelo,p.especificaciones,p.precio,p.likes,p.visitas,p.fechaRegistro,p.fechaModificacion,cat.categoria,mar.marca
        FROM productos as p 
        JOIN categorias as cat on cat.id=p.idCategoria 
        JOIN marcas as mar on mar.id=p.idMarca
        ORDER BY p.id DESC
        LIMIT 200";
        return  $request = $this->select_all($query);
    }

    function productosLast1000(){
        $query = "
        SELECT p.id as idProducto,p.clave,p.modelo,p.especificaciones,p.precio,p.likes,p.visitas,p.fechaRegistro,p.fechaModificacion,cat.categoria,mar.marca
        FROM productos as p 
        JOIN categorias as cat on cat.id=p.idCategoria 
        JOIN marcas as mar on mar.id=p.idMarca
        ORDER BY p.id DESC
        LIMIT 1000";
        return  $request = $this->select_all($query);
    }

    function productosInsert($datos){       
        $query_insert = "INSERT INTO productos (clave, modelo,especificaciones,precio,likes,visitas,idCategoria,idMarca) values $datos"; 
        return $this->_database($query_insert,'productos');    
    }

    function productosID(){
        $query = "SELECT p.id as idProducto FROM productos as p";
        return  $request = $this->select_all($query);
    }

    function comentariosInsert($datos){
        $query_insert = "INSERT INTO Comentarios (comentario, calificacion,idProducto) values $datos";                                    
        return $this->_database($query_insert,'comentarios');        
    }

    function comentariosLoremIpsum(){
        $query = "SELECT * FROM productos as p 
        JOIN comentarios as c on c.idProducto=p.id ORDER BY RAND()";
        return  $request = $this->select_all($query);  
    }

    function comentariosLast(){
        $query = "SELECT * FROM productos as p 
        JOIN comentarios as c on c.idProducto=p.id ORDER BY c.id desc";
        return  $request = $this->select_all($query);  
    }

    function categoriasProductos(){
        $query = "
        SELECT p.id as idProducto,p.clave,cat.categoria,COUNT(p.id) as cantidad
        FROM productos as p 
        JOIN categorias as cat on cat.id=p.idCategoria 
        GROUP BY p.idCategoria";
        return  $request = $this->select_all($query);
    }




}
?>