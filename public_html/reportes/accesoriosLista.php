<h2>Accesorios Lista</h2>
<table id='tablaReportes' class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Accesorio</th>
			<th>Categoría Principal</th>
			<th>Fecha Registro</th>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($data['accesorios'])){ 
			foreach($data['accesorios'] as $acc){?>
				<tr>
					<td><?php echo ++$cantidad;?></td>
					<th><?php echo $acc['accesorio'];?></th>
					<td><?php echo $acc['categoria'];?></td>
					<td><?php echo $acc['fechaRegistro'];?></td>	
				</tr>
			<?php }
		} ?>
	</tbody>
</table>
<a href="<?php echo BASE_URL;?>"><button type="button" class="btn btn-primary btnPadding">Regresar</button></a>
