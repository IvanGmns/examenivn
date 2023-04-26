<?php

class Home extends Controllers {

	public function __construct(){
		parent::__construct();
	}

	function inicio(){	
		$data['categoriasPadre']=$this->model->categoriasPadre();		
		$data['categorias']=$this->model->categoriasMenu();
		$data['productosTopVendidos']=$this->model->productosTopVendidos();			
		$data['productosRandom']=$this->model->productosRandom();		
		$data['contenido']='home/interfaz.php';						
		$data['subcontenido']='home/inicio.php';
		$this->view->get($this, 'interfaz', $data);
	}

	function buscar($categoria){
		$idCategoria=$_GET['id'];		
		$data['categoriasPadre']=$this->model->categoriasPadre();		
		$data['categorias']=$this->model->categoriasMenu();
		$data['productosTopVendidos']=$this->model->productosCategoriasTopVendidos($idCategoria);			
		$data['productosRandom']=$this->model->productosCategoriasRandom($idCategoria);		
		$data['contenido']='home/interfaz.php';						
		$data['subcontenido']='home/inicio.php';
		$this->view->get($this, 'interfaz', $data);
	}

	function producto($clave){
		$idProducto=$_GET['id'];
		$data['categoriasPadre']=$this->model->categoriasPadre();		
		$data['categorias']=$this->model->categoriasMenu();
		$data['producto']=$this->model->productoBuscar($idProducto);
		$data['comentarios']=$this->model->comentariosBuscar($idProducto);		
		$data['contenido']='home/interfaz.php';						
		$data['subcontenido']='home/producto.php';
		$this->view->get($this, 'interfaz', $data);
	}
	

	function busqueda(){
		$pagina=(!empty($_GET['p']) ? $_GET['p'] : 1);
		$clave=(!empty($_GET['b']) ? $_GET['b'] : FALSE);
		$search=$this->model->productos($pagina,$clave);		
		$data['categoriasPadre']=$this->model->categoriasPadre();		
		$data['categorias']=$this->model->categoriasMenu();
		$data['productos']=$search['productos'];
		$data['cantidad']=$search['cantidad'];
		$data['clave']=$clave;
		$data['pagina']=$pagina;
		$data['paginas']=_paginas($data['cantidad']);		
		$data['contenido']='home/interfaz.php';						
		$data['subcontenido']='home/buscar.php';
		$this->view->get($this, 'interfaz', $data);
	}

}
?>
