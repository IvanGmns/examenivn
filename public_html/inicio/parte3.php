<h2>Examen Pt3</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Tarea</th>
			<th>Descripción</th>
			<th>Nivel</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Home</th>
			<td>Mostrar categorías padres dentro de un menu, Top 10 productos aleatorios y por clasificación, seleccionar una categoria del menu y mostrar resultados, al seleccionar un producto mostrar una vista con las especificaciones y comentarios.</td>
			<td class='lvlBasico'>Basico</td>
			<td><a href="<?php echo BASE_URL;?>home/inicio"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Paginación</th>
			<td>Mostrar los productos con paginación y busqueda</td>
			<td class='lvlAvanzado'>Intermedio y Avanzado</td>
			<td><a href="<?php echo BASE_URL;?>home/busqueda"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
		</tr>
	</tbody>
</table>
<div class='row'>
	<div class='col-md-6'>
		<a href="<?php echo BASE_URL;?>"><button type="button" class="btn btn-dark">Examen - Parte 1</button></a>
	</div>
	<div class='col-md-6 btnRight'>
		<a href="<?php echo BASE_URL;?>productos/parte2"><button type="button" class="btn btn-dark">Examen - Parte 2</button></a>
	</div>
</div>