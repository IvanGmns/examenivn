<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once(DIR_VIEW.'head.php');?>
</head>
<body>
	<?php $cantidad=0;?>
	<div class="container">
		<div class='row'>
			<div class='col-md-4'></div>
			<div class='col-md-4'><img id='logoPrincipal' class='img-fluid' src='<?php echo BASE_URL;?>static/img/pagina/logo-principal.jpg'/></div>
			<div class='col-md-4'></div>		
		</div>	
		<?php require_once(DIR_VIEW.$data['contenido']);?>
	</div>
</body>
</html>
<script>
	$(document).ready(function () {
		$('#tablaReportes').DataTable();
	});
</script>
<?php require_once(DIR_VIEW.'librerias.js');?>