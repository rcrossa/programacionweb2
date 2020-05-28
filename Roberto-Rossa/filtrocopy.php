
<div class="container pt-4 px-5">
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


                                        <!-- Se comenta codigo para muestra en reunion -->
                                        <option></option>
                                        <option>Interior</option>
                                        <option>Exterior</option>



                                    </select>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <select class="custom-select custom-select-lg">

                                        <!--                                      
                                        Se comenta codigo para muestra en reunion
                                         -->
                                        <option></option>
                                        
                                        <!-- codigo adicional para implementacion posterior a reunion -->
                                        <?php foreach ($productosinternacionales as $key => $value) : ?> 
                                        <option value="<?php echo $key ?>">
                                            <?php echo $productosinternacionales[$key]["nombre"]; ?>
                                        </option>
                                        
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                                            <div class="card carta">

                                               <?php if ($key == Rio) {?>
                                                <?php echo '<img src="' .  $productosinternacionales[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                               <?php }?>

                                                <div class="card-body">
                                                    <h5 class="card-title1 font-weight-bold">
                                                        <?php echo $productosinternacionales[$key]["nombre"]; ?></h5>
                                                    <p class="card-text"><?php echo $productosinternacionales[$key]["descripcion"]; ?>
                                                    </p>
                                                    <div class="row justify-content-center pt-1 pb-3">
                                                        <h5>
                                                            <span
                                                                class="card-text text-center badge badge-light"><?php echo $productos[$key]["precio"]; ?></span>
                                                        </h5>
                                                    </div>
                                                    <div class="container d-flex justify-content-around">
                                                        <a href="#" class="btn btn-success">Comprar</a>
                                                        <a href="opiniones.php" class="btn btn-outline-primary">Ver
                                                            mas</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

    </div>
</div>