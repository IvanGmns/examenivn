<?php echo $examenParte;?>
<div  class="container">
	<div class='row'>
		<div class='col-md-4'></div>
		<div class='col-md-4'><img id='logoPrincipal' class='img-fluid' src='../<?php echo DIR_IMG;?>pagina/logo-principal.jpg'/></div>
		<div class='col-md-4'></div>		
	</div>
	<h2>Base de datos</h2>
	<div class="alert alert-warning">
		<strong>Info!</strong> El codigo se encuentra en la carpeta install en la raiz del sitio.
	</div>
	<div class="alert alert-info">
		<strong>Info!</strong> En caso de ser la primera vez se mostrara el mensaje de success, si las tablas ya existen o los registros se mostrara mensaje de que ya estan creados, para volver a generar este script y que muestre el mensaje de success se tiene que borrar la BD.
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php if(!empty($status['error'])){ 
				foreach($status['error'] as $error){ ?>
					<tr>
						<td class='dbError'><?php echo $error;?></td>						
					</tr>
				<?php } 
			} 
			if(!empty($status['success'])){ 
				foreach($status['success'] as $success){ ?>
					<tr>
						<td class='dbSuccess'><?php echo $success;?></td>						
					</tr>
				<?php } 
			} ?>
		</tbody>
	</table>	
	<a href="<?php echo ($examenParte==1 ? BASE_URL : ($examenParte==2 ? BASE_URL.'productos/parte2' : ($examenParte==3 ? BASE_URL.'productos/parte3' : FALSE)));?>"><button type="button" class="btn btn-primary btnPadding">Regresar</button></a>
</div>