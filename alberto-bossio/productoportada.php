<div class="container">
    
    <div class="row pb-5">

        <div class="col-12">

            <div class="row">

                <?php foreach ($productos as $key => $value) : ?>

                    <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                        <div class="card carta">
                            <img src="https://images.pexels.com/photos/1450353/pexels-photo-1450353.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title1"><?php echo $productos[$key]["nombre"]; ?></h5>
                                <p class="card-text"><?php echo $productos[$key]["descripcion"]; ?></p>
                                <div class="row justify-content-center pt-1 pb-3">
                                    <h5>
                                        <span class="card-text text-center badge badge-light"><?php echo $productos[$key]["precio"]; ?></span>
                                    </h5>
                                </div>
                                <div class="container">
                                    <div class="row justify-content-around pb-2">
                                        <a href="#" class="btn btn-success">Comprar</a>
                                        <a href="opiniones.php" class="btn btn-outline-primary">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

            </div>
        </div>

    </div>
</div>