<?php
class HomeModels extends Mysql{

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

    function categoriasPadre(){
        $query = "SELECT id as idCategoriaPadre,categoria FROM categoriasPadre";
        return  $request = $this->select_all($query);   
    }

    function categoriasMenu(){
        $query = "SELECT id as idCategoria,idCategoriaPadre,categoria FROM categorias";
        $categorias= $request = $this->select_all($query);   
        if(!empty($categorias)){
            foreach($categorias as $cat){
                $catMenu[$cat['idCategoriaPadre']][]=$cat;
            }
            return $catMenu;            
        }
        return false;
    }

    function accesorios(){
        $query = "SELECT id as idAccesorio,accesorio,idCategoria FROM accesorios";
        $accesorios=$request = $this->select_all($query);   
        if(!empty($accesorios)){
            foreach($accesorios as $acc){
                $accesorioCat[$acc['idCategoria']][]=$acc;
            }
            return $accesorioCat;            
        }
        return false;
    }

    function _productosCantidad(){
        $query2="SELECT FOUND_ROWS() AS `cantidad";
        $cantidad= $this->select_all($query2);
        return (!empty($cantidad) ? $cantidad[0]['cantidad'] : 0);
    }

    function productos($pagina,$clave=FALSE){
         $paginaLimit=_paginaQuery($pagina);  
        $query = "
        SELECT SQL_CALC_FOUND_ROWS p.id, p.id as idProducto,p.clave,p.modelo,p.especificaciones,p.precio,p.likes,p.visitas,p.fechaRegistro,p.fechaModificacion,cat.categoria,mar.marca
        FROM productos as p 
        JOIN categorias as cat on cat.id=p.idCategoria 
        JOIN marcas as mar on mar.id=p.idMarca";  
        (!empty($clave) ? $query.=" WHERE p.clave LIKE('%$clave%') OR p.especificaciones LIKE('%$clave%')" : FALSE);
        $query.=" LIMIT $paginaLimit,12"; 
        return array('productos'=>$this->select_all($query),'cantidad'=>$this->_productosCantidad());      
    }

    function productoBuscar($idProducto){        
        $query = "
        SELECT p.id as idProducto,p.clave,p.modelo,p.especificaciones,p.precio,p.likes,p.visitas,p.fechaRegistro,p.fechaModificacion,cat.categoria,mar.marca
        FROM productos as p 
        JOIN categorias as cat on cat.id=p.idCategoria 
        JOIN marcas as mar on mar.id=p.idMarca        
        WHERE p.id= $idProducto";
        return  $request = $this->select_all($query);
    }

    function comentariosBuscar($idProducto){
        $query = "SELECT * FROM comentarios  WHERE idProducto = $idProducto";
        return  $request = $this->select_all($query);
    }

    function productosTopVendidos(){
        $query = "
        SELECT p.id as idProducto,p.clave,p.modelo,p.especificaciones,p.precio,p.likes,p.visitas,p.fechaRegistro,p.fechaModificacion,cat.categoria,mar.marca,AVG(com.calificacion) AS calificacionPromedio
        FROM productos as p 
        JOIN categorias as cat on cat.id=p.idCategoria 
        JOIN marcas as mar on mar.id=p.idMarca
        JOIN comentarios as com on com.idProducto=p.id
        GROUP BY p.id
        ORDER BY calificacionPromedio DESC
        LIMIT 10";
        return  $request = $this->select_all($query);
    }


    function productosCategoriasTopVendidos($idCategoria){        
        $query = "
        SELECT p.id as idProducto,p.clave,p.modelo,p.especificaciones,p.precio,p.likes,p.visitas,p.fechaRegistro,p.fechaModificacion,cat.categoria,mar.marca,AVG(com.calificacion) AS calificacionPromedio
        FROM productos as p 
        JOIN categorias as cat on cat.id=p.idCategoria 
        JOIN marcas as mar on mar.id=p.idMarca
        JOIN comentarios as com on com.idProducto=p.id
        WHERE p.idCategoria= $idCategoria
        GROUP BY p.id
        ORDER BY calificacionPromedio DESC
        LIMIT 10";
        return  $request = $this->select_all($query);
    }

    function productosRandom(){
        $query = "
        SELECT p.id as idProducto,p.clave,p.modelo,p.especificaciones,p.precio,p.likes,p.visitas,p.fechaRegistro,p.fechaModificacion,cat.categoria,mar.marca
        FROM productos as p 
        JOIN categorias as cat on cat.id=p.idCategoria 
        JOIN marcas as mar on mar.id=p.idMarca
        JOIN comentarios as com on com.idProducto=p.id
        ORDER BY RAND()
        LIMIT 10";
        return  $request = $this->select_all($query);
    }

    function productosCategoriasRandom($idCategoria){
        $query = "
        SELECT p.id as idProducto,p.clave,p.modelo,p.especificaciones,p.precio,p.likes,p.visitas,p.fechaRegistro,p.fechaModificacion,cat.categoria,mar.marca
        FROM productos as p 
        JOIN categorias as cat on cat.id=p.idCategoria 
        JOIN marcas as mar on mar.id=p.idMarca
        JOIN comentarios as com on com.idProducto=p.id
        WHERE p.idCategoria= $idCategoria
        ORDER BY RAND()
        LIMIT 10";
        return  $request = $this->select_all($query);
    }
}
?>