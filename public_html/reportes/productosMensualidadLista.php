<h2>Información extra</h2>
<table id='tablaReportes' class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Clave</th>
			<th>Modelo</th>
			<th>Categoría</th>
			<th>Marca</th>
			<th>Precio</th>
			<th>6 meses</th>
			<th>12 meses</th>
			<th>Interes 10% | 12 meses</th>
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
					<td><?php echo $p['modelo'];?></td>
					<td><?php echo $p['categoria'];?></td>	
					<td><?php echo $p['marca'];?></td>
					<td>$<?php echo number_format($p['precio'],2);?></td>
					<td>$<?php echo number_format($precio['meses6'],2);?></td>
					<td>$<?php echo number_format($precio['meses12'],2);?></td>
					<td>$<?php echo number_format($precio['intereses'],2);?></td>
				</tr>
			<?php }
		} ?>
	</tbody>
</table>
<div class='row'>
	<a href="<?php echo BASE_URL;?>"><button type="button" class="btn btn-primary btnPadding">Regresar</button></a>
</div>