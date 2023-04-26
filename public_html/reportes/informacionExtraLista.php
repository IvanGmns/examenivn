<h2>Información extra</h2>
<table id='tablaReportes' class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Clave</th>
			<th>Modelo</th>
			<th>Categoría</th>
			<th>Marca</th>
			<th>Especificaciones</th>
			<th>Precio</th>
			<th>Likes</th>
			<th>Visitas</th>
			<th>Fecha Registro</th>
			<th>Fecha Modificación</th>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($data['informacionExtra'])){ 
			foreach($data['informacionExtra'] as $p){?>
				<tr>
					<td><?php echo ++$cantidad;?></td>
					<th><?php echo $p['clave'];?></th>
					<td><?php echo $p['modelo'];?></td>
					<td><?php echo $p['categoria'];?></td>	
					<td><?php echo $p['marca'];?></td>
					<td><?php echo $p['especificaciones'];?></td>
					<td>$<?php echo number_format($p['precio'],2);?></td>
					<td><?php echo $p['likes'];?></td>
					<td><?php echo $p['visitas'];?></td>
					<td><?php echo $p['fechaRegistro'];?></td>
					<td><?php echo $p['fechaModificacion'];?></td>					
				</tr>
			<?php }
		} ?>
	</tbody>
</table>
<div class='row'>
	<a href="<?php echo BASE_URL;?>"><button type="button" class="btn btn-primary btnPadding">Regresar</button></a>
</div>