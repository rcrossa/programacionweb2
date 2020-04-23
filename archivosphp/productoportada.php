<div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="filter-wrap py-4">
                        <h3>Filtro</h3>
                        <div class="filter-border p-4 border border-secondary">
                            <div class="filter-inner">
                                <div class="row">
                                    <div class="col-12">
                                        <select class="custom-select custom-select-lg mb-3">
                                            <option selected>Lugar</option>
                                            <option value="1">Interior</option>
                                            <option value="2">Exterior</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <select class="custom-select custom-select-lg mb-3">
                                            <option selected>Tipo de viaje</option>
                                            <option value="1">Premium</option>
                                            <option value="2">Economico</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <button class="btn btn-danger btn-lg px-5 btn-block">RESET</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="row">

                        <?php foreach ($productos as $key => $value) : ?>

                            <div class="col-sm-12 col-md-12 col-lg-6 my-3">
                                <div class="card">
                                    <img src="https://images.pexels.com/photos/1450353/pexels-photo-1450353.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title1"><?php echo $productos[$key]["nombre"]; ?></h5>
                                        <p class="card-text"><?php echo $productos[$key]["descripcion"]; ?></p>
                                        <p class="card-text text-center"><?php echo $productos[$key]["precio"]; ?></p>
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
