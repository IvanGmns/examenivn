<hr>
<h2>Productos Top Vendidos</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Clave</th>			
			<th>Categoría</th>
			<th>Marca</th>
			<th>Especificaciones</th>
			<th>Precio</th>
			<th>Promedio</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($data['productosTopVendidos'])){ 
			foreach($data['productosTopVendidos'] as $p){ ?>
				<tr>
					<td><?php echo ++$cantidad;?></td>
					<th><?php echo $p['clave'];?></th>					
					<td><?php echo $p['categoria'];?></td>	
					<td><?php echo $p['marca'];?></td>
					<td><?php echo $p['especificaciones'];?></td>
					<td>$<?php echo number_format($p['precio'],2);?></td>
					<td><?php echo number_format($p['calificacionPromedio'],2);?></td>
					<td><a href="<?php echo BASE_URL;?>home/producto/<?php echo $p['clave'];?>/?id=<?php echo $p['idProducto'];?>"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
				</tr>
			<?php }
		} ?>
	</tbody>
</table>
