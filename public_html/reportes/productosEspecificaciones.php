<h2>Productos especificaciones y precio</h2>
<table id='tablaReportes' class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Clave</th>			
			<th>Categoría</th>
			<th>Marca</th>
			<th>Especificaciones</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($data['productos'])){ 
			foreach($data['productos'] as $p){
				//Funcion en el helper de productos
				$precio=_precioMensualidades($p['precio'])?>
				<tr>
					<td><?php echo ++$cantidad;?></td>
					<th><?php echo $p['clave'];?></th>					
					<td><?php echo $p['categoria'];?></td>	
					<td><?php echo $p['marca'];?></td>
					<td><?php echo $p['especificaciones'];?></td>
					<td>$<?php echo number_format($p['precio'],2);?></td>
				</tr>
			<?php }
		} ?>
	</tbody>
</table>
<div class='row'>
	<a href="<?php echo BASE_URL;?>productos/parte2"><button type="button" class="btn btn-primary btnPadding">Regresar</button></a>
</div>