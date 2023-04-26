<h2>Examen Pt2</h2>
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
			<th>Insert</th>
			<td>Se ingresaran mas registros a las tablas y se guardara en un log</td>
			<td class='lvlBasico'>Basico</td>
			<td><a href="<?php echo BASE_URL;?>install/insertPT2_DB.php"><button type="button" class="btn btn-primary btn-block">Insert</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Log</th>
			<td>Visualizar contenido del log</td>
			<td class='lvlBasico'>Basico</td>
			<td><a href="<?php echo BASE_URL;?>productos/log/database"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Productos Generar</th>
			<td>Se generaran 200 productos de forma aleatoria y se mostraran en una tabla</td>
			<td class='lvlIntermedio'>Intermedio</td>
			<td><a href="<?php echo BASE_URL;?>productos/crearIntermedio/"><button type="button" class="btn btn-primary btn-block">Generar</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Comentarios Generar</th>
			<td>Se generaran 1000 comentarios lorem ipsum</td>
			<td class='lvlIntermedio'>Intermedio</td>
			<td><a href="<?php echo BASE_URL;?>productos/comentariosLoremIpsum"><button type="button" class="btn btn-primary btn-block">Generar</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Productos Especificaciones</th>
			<td>Productos con relación de especificaciones y precio</td>
			<td class='lvlAvanzado'>Avanzado</td>
			<td><a href="<?php echo BASE_URL;?>productos/especificaciones"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Productos Generar</th>
			<td>Se generaran 1000 productos de forma aleatoria y se mostraran en una tabla</td>
			<td class='lvlAvanzado'>Avanzado</td>
			<td><a href="<?php echo BASE_URL;?>productos/crearAvanzado/"><button type="button" class="btn btn-primary btn-block">Generar</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Productos Categorías</th>
			<td>Todas las categorías tienen productos asignados</td>
			<td class='lvlAvanzado'>Avanzado</td>
			<td><a href="<?php echo BASE_URL;?>productos/categoriasProductos/"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Comentarios Generar</th>
			<td>Se generaran 10,000 comentarios coherentes</td>
			<td class='lvlAvanzado'>Avanzado</td>
			<td><a href="<?php echo BASE_URL;?>productos/comentariosCoherentes"><button type="button" class="btn btn-primary btn-block">Generar</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Htaccess</th>
			<td>Se creo un htaccess para evitar el acceso a la carpeta public_html</td>
			<td class='lvlAvanzado'>Avanzado</td>
			<td><a href="<?php echo BASE_URL;?>public_html/interfaz.php"><button type="button" class="btn btn-primary btn-block">Probar</button></a></td>
		</tr>
	</tbody>
</table>
<div class='row'>
	<div class='col-md-6'>
		<a href="<?php echo BASE_URL;?>"><button type="button" class="btn btn-dark">Examen - Parte 1</button></a>
	</div>
	<div class='col-md-6 btnRight'>
		<a href="<?php echo BASE_URL;?>productos/parte3"><button type="button" class="btn btn-dark">Examen - Parte 3</button></a>
	</div>
</div>