<div class="container">
  <div class="row justify-content-center pb-4">

    <div class="col-12">
      <div class="row">

        <?php

         foreach ($productos as $key => $value) : ?>

          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
            <div class="card carta">

              <?php echo '<img src="' .  $productos[$key]["url"] . '" class="card-img-top" alt="..." />' ?>

              <div class="card-body">
                <h5 class="card-title1 font-weight-bold"><?php echo $productos[$key]["nombre"]; ?></h5>
                <p class="card-text"><?php echo $productos[$key]["descripcion"]; ?></p>
                <div class="row justify-content-center pt-1 pb-3">
                  <h5>
                    <span class="card-text text-center badge badge-light"><?php echo $productos[$key]["precio"]; ?></span>
                  </h5>
                </div>
                <div class="container d-flex justify-content-around">
                  <a href="FormaDePago.php" class="btn btn-success">Comprar</a>
                  <a href="opiniones.php?producto=<?php echo $productos[$key]['id']?>" class="btn btn-outline-primary">Ver mas</a>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach ?>

      </div>
    </div>

  </div>
</div>