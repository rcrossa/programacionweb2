<div class="container-fluid px-5">
            <div class="row justify-content-center">

                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="row">

                        <?php foreach ($interior as $key => $value) : ?>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                                <div class="card">

                                    <?php echo '<img src="' .  $interior[$key]["url"] . '" class="card-img-top" alt="..." />' ?>

                                    <div class="card-body">
                                        <h5 class="card-title1"><?php echo $interior[$key]["nombre"]; ?></h5>
                                        <p class="card-text"><?php echo $interior[$key]["descripcion"]; ?></p>
                                        <p class="card-text text-center"><?php echo $interior[$key]["precio"]; ?></p>
                                        <div class="container d-flex justify-content-around">
                                            <a href="#" class="btn btn-success">Comprar</a>
                                            <a href="#" class="btn btn-outline-success">Reservar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach ?>

                        <?php foreach ($exterior as $key => $value) : ?>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                                <div class="card">

                                    <?php echo '<img src="' .  $exterior[$key]["url"] . '" class="card-img-top" alt="..." />' ?>

                                    <div class="card-body">
                                        <h5 class="card-title1"><?php echo $exterior[$key]["nombre"]; ?></h5>
                                        <p class="card-text"><?php echo $exterior[$key]["descripcion"]; ?></p>
                                        <p class="card-text text-center"><?php echo $exterior[$key]["precio"]; ?></p>
                                        <div class="container d-flex justify-content-around">
                                            <a href="#" class="btn btn-success">Comprar</a>
                                            <a href="#" class="btn btn-outline-success">Reservar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach ?>

                    </div>
                </div>

            </div>
        </div>