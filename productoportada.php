<div class="container">
    <div class="row pb-5">

        <div class="col-sm-12 col-sm-12 col-md-12 col-lg-12">
            <div class="filter-wrap py-4">
                <h3>Filtro</h3>
                <div class="filter-border p-4 border border-secondary">
                    <div class="filter-inner">
                        <div class="filtrolugar">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 py-2">
                                    <select class="custom-select custom-select-lg">
                                        <option selected></option>
                                        <option value="0">Lugar</option>
                                        <option value="1">Interior</option>
                                        <option value="2">Exterior</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 py-2">
                                    <select class="custom-select custom-select-lg">
                                        <option selected></option>
                                        <option value="0">Tipo de viaje</option>
                                        <option value="1">Premium</option>
                                        <option value="2">Economico</option>
                                    </select>
                                </div>
                                <div class="row button">
                                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                        <button class="btn btn-danger btn-md px-4">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">

                <?php foreach ($productos as $key => $value) : ?>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 my-3">
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
                                        <a href="#" class="btn btn-outline-primary">Ver mas</a>
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