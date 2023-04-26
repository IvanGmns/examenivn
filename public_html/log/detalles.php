<h2>Log <?php echo $data["tipo"];?></h2>
<table id='tablaReportes' class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Registro</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$log = fopen('php/log/'.$data["tipo"].'.txt', "r") or die("Unable to open file!");
		$cantidad=0;
		if(!empty($log)){ 
			while(!feof($log)) {?>
				<tr>
					<th><?php echo ++$cantidad;?></th>
					<td><?php echo fgets($log) ;?></td>					
				</tr>
			<?php }
			fclose($log);
		} ?>
	</tbody>
</table>
<a href="<?php echo BASE_URL;?>productos/parte2"><button type="button" class="btn btn-primary btnPadding">Regresar</button></a>