<h2>Examen Pt1</h2>
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
			<th>Crear BD y tablas</th>
			<td>Se crearan la BD examen.</td>
			<td class='lvlBasico'>Basico</td>
			<td><a href="<?php echo BASE_URL;?>install/createDB.php"><button type="button" class="btn btn-primary btn-block">Generar</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Insert</th>
			<td>Se generaran registros para las tablas creadas.</td>
			<td class='lvlBasico'>Basico</td>
			<td><a href="<?php echo BASE_URL;?>install/insertDB.php"><button type="button" class="btn btn-primary btn-block">Insertar</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>View</th>
			<td>Se creara la vista de comentarios de productos</td>
			<td class='lvlIntermedio'>Intermedio</td>
			<td><a href="<?php echo BASE_URL;?>install/viewDB.php"><button type="button" class="btn btn-primary btn-block">View</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Comentarios</th>
			<td>Visualizar la vista mysql de comentarios</td>
			<td class='lvlIntermedio'>Intermedio</td>
			<td><a href="<?php echo BASE_URL;?>productos/comentarios"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Tabla accesorios</th>
			<td>La tabla de accesorios y las llaves foraneas se crearon al momento de ejecutar la creación de la BD en el punto 1.</td>
			<td class='lvlIntermedio'>Intermedio</td>
			<td><a href="<?php echo BASE_URL;?>productos/accesorios"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Productos visitas</th>
			<td>Agregar a la tabla de productos un campo de visitas.</td>
			<td class='lvlIntermedio'>Intermedio</td>
			<td><a href="<?php echo BASE_URL;?>install/alterProductosDB.php"><button type="button" class="btn btn-primary btn-block">Alter</button></a></td>
		</tr>	
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Información extra solicitada</th>
			<td>Las tablas tienen los registros automaticos de fecha y se agrego el campo de visitas al producto.</td>
			<td class='lvlAvanzado'>Avanzado</td>
			<td><a href="<?php echo BASE_URL;?>productos/informacionExtra"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
		</tr>	
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Mensualidades</th>
			<td>Mostrar como quedarian los pagos si se seleccionaran en 6 o 12 meses con una función.</td>
			<td class='lvlAvanzado'>Avanzado</td>
			<td><a href="<?php echo BASE_URL;?>productos/mensualidades"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
		</tr>
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>View Mensualidad</th>
			<td>Crear vista de mensualidad</td>
			<td class='lvlAvanzado'>Avanzado</td>
			<td><a href="<?php echo BASE_URL;?>install/viewMensualidadDB.php"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
		</tr>	
		<tr>
			<td><?php echo ++$cantidad;?></td>
			<th>Mensualidades Vista</th>
			<td>Mostrar la vista mysql de mensualidades con productos aleatorios</td>
			<td class='lvlAvanzado'>Avanzado</td>
			<td><a href="<?php echo BASE_URL;?>productos/mensualidadesVista"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
		</tr>		
	</tbody>
</table>
<div class='row'>
	<div class='col-md-12 btnRight'>
		<a href="<?php echo BASE_URL;?>productos/parte2"><button type="button" class="btn btn-dark">Examen - Parte 2</button></a>
	</div>
</div>