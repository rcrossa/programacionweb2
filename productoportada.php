<div class="container px-5">
    <div class="row justify-content-center">

        <div class="col-12">
            <div class="filter-wrap py-4">
                <h3>Filtro</h3>
                <div class="filter-border p-4 border border-secondary">
                    <div class="filter-inner">
                        <div class="filtrolugar">
                            <div class="row justify-content-center align-items-center">

                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <select class="custom-select custom-select-lg">
                                        <option selected>Interior</option>
                                        <?php foreach ($interior as $key => $value) : ?>
                                            <option value="<?php echo $key ?>"><?php echo $interior[$key]["nombre"]; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <select class="custom-select custom-select-lg">
                                        <option selected>Exterior</option>
                                        <?php foreach ($exterior as $key => $value) : ?>
                                            <option value="<?php echo $key ?>"><?php echo $exterior[$key]["nombre"]; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="col-sm-12 col-lg-2 py-2">
                                    <button class="btn btn-danger btn-md btn-block px-4">Buscar</button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="row">

                <?php foreach ($interior as $key => $value) : ?>

                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                        <div class="card carta">

                            <?php echo '<img src="' .  $interior[$key]["url"] . '" class="card-img-top" alt="..." />' ?>

                            <div class="card-body">
                                <h5 class="card-title1"><?php echo $interior[$key]["nombre"]; ?></h5>
                                <p class="card-text"><?php echo $interior[$key]["descripcion"]; ?></p>
                                <p class="card-text text-center"><?php echo $interior[$key]["precio"]; ?></p>
                                <div class="container d-flex justify-content-around">
                                    <a href="#" class="btn btn-success">Comprar</a>
                                    <a href="#" class="btn btn-outline-primary">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

                <?php foreach ($exterior as $key => $value) : ?>

                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                        <div class="card carta">

                            <?php echo '<img src="' .  $exterior[$key]["url"] . '" class="card-img-top" alt="..." />' ?>

                            <div class="card-body">
                                <h5 class="card-title1"><?php echo $exterior[$key]["nombre"]; ?></h5>
                                <p class="card-text"><?php echo $exterior[$key]["descripcion"]; ?></p>
                                <p class="card-text text-center"><?php echo $exterior[$key]["precio"]; ?></p>
                                <div class="container d-flex justify-content-around">
                                    <a href="#" class="btn btn-success">Comprar</a>
                                    <a href="#" class="btn btn-outline-primary">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

            </div>
        </div>

    </div>
</div>