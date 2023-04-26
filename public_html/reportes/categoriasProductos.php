<h2>Ultimos <b><?php echo $data['cantidad'];?></b> registros</h2>
<table id='tablaReportes' class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Categoría</th>
			<th>Productos Relacionados</th>			
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($data['productos'])){ 
			foreach($data['productos'] as $p){?>
				<tr>
					<td><?php echo ++$cantidad;?></td>
					<th><?php echo $p['categoria'];?></th>
					<td><?php echo $p['cantidad'];?></td>			
				</tr>
			<?php }
		} ?>
	</tbody>
</table>
<div class='row'>
	<a href="<?php echo BASE_URL;?>productos/parte2"><button type="button" class="btn btn-primary btnPadding">Regresar</button></a>
</div>
<script>
	$(document).ready(function () {
		$('#tablaReportes').DataTable();
	});
</script>