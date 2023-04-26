<hr>
<div class='row'>
	<?php if(!empty($data['producto'])){ 
		foreach($data['producto'] as $p){ ?>
			<div class='col-md-12'>
				<div class='productoDescripcion'>
					<div class='row'>
						<div class='col-md-8'>
							<div class='col-md-12 productoClave colorPrincipal'>
								<?php echo $p['clave'];?> 
							</div>
							<div class='col-md-12 productoCategoriasMarca colorSecundario'>
								<?php echo $p['categoria'];?> / <?php echo $p['marca'];?>
							</div>
							<div class='col-md-12'>
								<?php echo $p['especificaciones'];?>
							</div>

							<div class='col-md-12'>
								Modelo: <?php echo $p['modelo'];?>
							</div>
						</div>
						<div class='col-md-4'>
							<div class='col-md-12 productoPrecio colorPrincipal'>
								$<?php echo number_format($p['precio'],2);?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } 
	}?>
</div>
<hr>
<div class="jumbotron">
	<h1>Comentarios</h1>	
</div>
<div class='row'>
	<div class='col-md-12'>
		<?php if(!empty($data['comentarios'])){ 
			foreach($data['comentarios'] as $c){ ?>
				<div class='productoComentarios'>
					<div class='row'>
						<div class='col-md-8'>
							<?php echo $c['comentario'];?>
						</div>
						<div class='col-md-4 comentarioCalificacion <?php echo ($c['calificacion'] > 6 ? 'colorPrincipal' : 'colorSecundario');?>'>
							<?php echo $c['calificacion'];?>
						</div>	
					</div>
				</div>	
			<?php } 
		}?>
	</div>
</div>