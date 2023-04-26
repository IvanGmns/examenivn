<h2>Comentarios View</h2>
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
			<th>Comentario</th>
			<th>Promedio</th>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($data['comentarios'])){ 
			foreach($data['comentarios'] as $com){?>
				<tr>
					<td><?php echo ++$cantidad;?></td>
					<th><?php echo $com['clave'];?></th>
					<td><?php echo $com['modelo'];?></td>
					<td><?php echo $com['categoria'];?></td>	
					<td><?php echo $com['marca'];?></td>
					<td><?php echo $com['especificaciones'];?></td>
					<td>$<?php echo number_format($com['precio'],2);?></td>
					<td><?php echo $com['comentario'];?></td>
					<td><?php echo $com['calificacionPromedio'];?></td>
				</tr>
			<?php }
		} ?>
	</tbody>
</table>
<div class='row'>
	<a href="<?php echo BASE_URL;?>"><button type="button" class="btn btn-primary btnPadding">Regresar</button></a>
</div>