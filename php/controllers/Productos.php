<?php
class Productos extends Controllers {

	public function __construct(){
		parent::__construct();
	}

	function index(){		
		$data['contenido']='inicio/parte1.php';						
		$this->view->get($this, 'interfaz', $data);
	}

	function parte2(){
		$data['contenido']='inicio/parte2.php';						
		$this->view->get($this, 'interfaz', $data);
	}

	function parte3(){
		$data['contenido']='inicio/parte3.php';						
		$this->view->get($this, 'interfaz', $data);
	}

	function accesorios(){
		$data['accesorios'] = $this->model->accesoriosAll();				
		$data['contenido']='reportes/accesoriosLista.php';						
		$this->view->get($this, 'interfaz', $data);	
	}

	function comentarios(){
		$data['comentarios'] = $this->model->comentariosView();				
		$data['contenido']='reportes/comentariosViewLista.php';						
		$this->view->get($this, 'interfaz', $data);	
	}

	function informacionExtra(){
		$data['informacionExtra'] = $this->model->productos();
		$data['contenido']='reportes/informacionExtraLista.php';						
		$this->view->get($this, 'interfaz', $data);		
	}

	function mensualidades(){
		$data['productos'] = $this->model->productos();
		$data['contenido']='reportes/productosMensualidadLista.php';						
		$this->view->get($this, 'interfaz', $data);			
	}

	function mensualidadesVista(){
		$data['productos'] = $this->model->mensualidadesView();
		$data['contenido']='reportes/productosMensualidadLista.php';						
		$this->view->get($this, 'interfaz', $data);			
	}

	function log($tipo){
		$data['tipo']=$tipo;				
		$data['contenido']='log/detalles.php';						
		$this->view->get($this, 'interfaz', $data);
	}

	function crearIntermedio(){
		$cantidad=200;
		$this->_generarClaves($cantidad);	
		$data['cantidad']=$cantidad;	
		$data['productos']=$this->model->productosLast200();
		$data['contenido']='reportes/productosGeneradosLista.php';						
		$this->view->get($this, 'interfaz', $data);	
	}

	function crearAvanzado($limite=FALSE){
		$cantidad=1000;
		$this->_generarClaves($cantidad);	
		$data['cantidad']=$cantidad;	
		$data['productos']=$this->model->productosLast1000();
		$data['contenido']='reportes/productosGeneradosLista.php';						
		$this->view->get($this, 'interfaz', $data);	
	}

	function comentariosLoremIpsum(){		
		$this->_generarComentariosLoremIpsum();	
		$data['comentarios'] = $this->model->comentariosLoremIpsum();
		$data['contenido']='reportes/comentariosLoremIpsum.php';	
		$this->view->get($this, 'interfaz', $data);		
	}

	function comentariosCoherentes(){		
		$this->_generarComentariosCoherentes();			
		$data['comentarios'] = $this->model->comentariosLast();
		$data['contenido']='reportes/comentariosLoremIpsum.php';	
		$this->view->get($this, 'interfaz', $data);		
	}

	function especificaciones(){
		$data['productos'] = $this->model->productos();
		$data['contenido']='reportes/productosEspecificaciones.php';						
		$this->view->get($this, 'interfaz', $data);	
	}

	function categoriasProductos(){
		$data['productos'] = $this->model->categoriasProductos();		
		$data['contenido']='reportes/categoriasProductos.php';						
		$this->view->get($this, 'interfaz', $data);		
	}

	function _generarComentariosCoherentes(){
		$productosID=$this->model->productosID();		
		if(!empty($productosID)){
			$productosCantidad=count($productosID);
			--$productosCantidad;
			$datos='';
			for($i=0;$i<10000;++$i){	
				$randID=mt_rand(0,$productosCantidad);					
				//1 Buen review 2 Mal Review 3 Neutral Review
				$randComentario=mt_rand(1,3);
				//Dependiendo del tipo de review es la calificación
				$randCalificacion=($randComentario==1 ? mt_rand(9,10) : ($randComentario==2 ? mt_rand(1,5) : ($randComentario==3 ? mt_rand(6,8) : FALSE)));
				//Generamos el comentario
				$comentarios=_comentariosGenerator($randComentario);
				$idProducto=$productosID[$randID]['idProducto'];
				$datos.="('$comentarios',$randCalificacion,$idProducto),";
			}				
			$status=$this->model->comentariosInsert(rtrim($datos,','));	
		}
		return $status;
	}

	function _generarComentariosLoremIpsum(){
		$loremIpsumExplode=_loremIpsumExplode();
		$productosID=$this->model->productosID();
		$datos='';
		if(!empty($productosID)){
			$productosCantidad=count($productosID);
			--$productosCantidad;
			for($i=0;$i<1000;++$i){
				$randID=mt_rand(0,$productosCantidad);
				$randCalificacion=mt_rand(1,10);
				$loremIpsum=_loremIpsumGenerator($loremIpsumExplode);
				$idProducto=$productosID[$randID]['idProducto'];
				$datos.="('$loremIpsum',$randCalificacion,$idProducto),";
			}	
			$status=$this->model->comentariosInsert(rtrim($datos,','));		
		}
		return $status;
	}

	function _generarClaves($limite=FALSE){
		$categorias=$this->model->categorias();		
		$marcas=$this->model->marcas();	
		$datos='';	
		$cantidad=(!empty($limite) && $limite==1000 ? 1000 : 200);
		for($i=0;$i<$cantidad;++$i){
			$randomCat=mt_rand(0,19);
			$randomMar=mt_rand(0,19);	
			$randomNumber= mt_rand(1000,9999);
			$randomPrecio=_precioCategoria($randomCat);			
			$randomLikes=mt_rand(100,1000);
			$randomVisitas=mt_rand(100,1000);
			$clave=$categorias[$randomCat]['nemonico'].$marcas[$randomMar]['nemonico'].$randomNumber;
			$modelo=_modeloGenerar();
			$especificacionesRand=_especificaciones($randomCat);
			$especificaciones=$categorias[$randomCat]['categoria'].' de la marca '.$marcas[$randomMar]['marca'].' '.$especificacionesRand;
			$idCategoria=$categorias[$randomCat]['idCategoria'];
			$idMarca=$marcas[$randomMar]['idMarca'];
			$datos.="('$clave','$modelo','$especificaciones',$randomPrecio,$randomLikes,$randomVisitas,$idCategoria,$idMarca),";
		}		
		$status=$this->model->productosInsert(rtrim($datos,','));								
		return (!empty($status) ? TRUE : FALSE);
	}
}
?>