 <hr>
 <h2>Busqueda</h2>
 <hr>
 <form class="form-inline" action="<?php echo BASE_URL;?>home/busqueda" method='GET'>
  <label for="email">Buscar:</label>
  <input type="text" class="form-control" placeholder="Buscar producto" id="buscar" name='b' value='<?php echo $data["clave"];?>'>  
  <button type="submit" class="btn btn-primary">Buscar</button>
</form> 
<hr>
<table class="table table-hover">
    <thead>
        <tr>            
            <th>Clave</th>          
            <th>Categoría</th>
            <th>Marca</th>
            <th>Especificaciones</th>
            <th>Precio</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($data['productos'])){ 
            foreach($data['productos'] as $p){ ?>
                <tr>
                    <th><?php echo $p['clave'];?></th>                  
                    <td><?php echo $p['categoria'];?></td>  
                    <td><?php echo $p['marca'];?></td>
                    <td><?php echo $p['especificaciones'];?></td>
                    <td>$<?php echo number_format($p['precio'],2);?></td>
                    <td><a href="<?php echo BASE_URL;?>home/producto/<?php echo $p['clave'];?>/?id=<?php echo $p['idProducto'];?>"><button type="button" class="btn btn-primary btn-block">Ver</button></a></td>
                </tr>
            <?php }
        } ?>
    </tbody>
</table>
<?php
$pagina=$data['pagina'];
$paginas=$data['paginas'];
$pagination = _pagination($pagina, $paginas);
$mostrar = $pagination['mostrar'];
?>
<ul class="pagination">
  <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
  <li class="page-item"><a class="page-link" href="<?php BASE_URL;?>busqueda/<?php echo '?p=1';?><?php echo (!empty($clave) ? '?s='.$clave : FALSE);?>">1</a></li>
  <?php if(!empty($pagination['puntos'])){ ?>
    <li class="page-item"><a class="page-link" href="#">..</a></li>
<?php } ?> 
<?php for ($i = $pagination['inicio']; $i <= $mostrar; ++$i) { ?>
    <li class="page-item"><a class="page-link" href="<?php BASE_URL;?>busqueda/<?php echo '?p='.$i;?><?php echo (!empty($clave) ? '?s='.$clave : FALSE);?>"><?php echo $i;?></a></li>
<?php } ?>
<?php if ($paginas > $mostrar) { ?>
    <li class="page-item"><a class="page-link" href="#">..</a></li>
    <li class="page-item"><a class="page-link" href="<?php BASE_URL;?>busqueda/<?php echo '?p='.$paginas;?><?php echo (!empty($clave) ? '?s='.$clave : FALSE);?>"><?php echo $paginas; ?></a></li>
<?php } ?>  
</ul> 