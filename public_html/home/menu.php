<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo BASE_URL;?>home/pagina">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php if(!empty($data['categoriasPadre'])){ 
        foreach($data['categoriasPadre'] as $catP){?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $catP['categoria'];?>
            </a>
            <?php if(!empty($data['categorias'][$catP['idCategoriaPadre']])){ ?>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach($data['categorias'][$catP['idCategoriaPadre']] as $c){ ?>
                  <a class="dropdown-item" href="<?php echo BASE_URL;?>home/buscar/<?php echo _slug($c['categoria']);?>/?id=<?php echo $c['idCategoria'];?>"><?php echo $c['categoria'];?></a>                
                <?php } ?>
              </div>
            <?php } ?>
          </li>
        <?php }
      } ?>
    </ul>
  </div>
</nav>