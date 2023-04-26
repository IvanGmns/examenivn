<h2>Comentarios Lorem Ipsum</h2>
<table id='tablaReportes' class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Clave</th>
			<th>Modelo</th>			
			<th>Especificaciones</th>
			<th>Precio</th>
			<th>Comentario</th>
			<th>Calificación</th>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($data['comentarios'])){ 
			foreach($data['comentarios'] as $com){?>
				<tr>
					<td><?php echo ++$cantidad;?></td>
					<th><?php echo $com['clave'];?></th>
					<td><?php echo $com['modelo'];?></td>
					<td><?php echo $com['especificaciones'];?></td>
					<td>$<?php echo number_format($com['precio'],2);?></td>
					<td><?php echo $com['comentario'];?></td>
					<td><?php echo $com['calificacion'];?></td>
				</tr>
			<?php }
		} ?>
	</tbody>
</table>
<div class='row'>
	<a href="<?php echo BASE_URL;?>productos/parte2"><button type="button" class="btn btn-primary btnPadding">Regresar</button></a>
</div>