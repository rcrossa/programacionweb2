<?php 
         $fp = fopen('archivosphp/internacional.json','r');
         $fp1 = fopen('archivosphp/nacional.json','r');
         //leo y asigno a variable
            $datosjson = fread($fp,filesize('archivosphp/internacional.json'));
            $datosjson1 = fread($fp1,filesize('archivosphp/nacional.json'));
             //decodifico 
             $exterior=json_decode($datosjson,true);//con true se transforma en array asociativo
             $nacional=json_decode($datosjson1,true);//con true se transforma en array asociativo
            //cierro conexion
            fclose($fp);
            fclose($fp1);
           
        //     foreach ($exterior as $data) {
        //         echo "\n\n".$data['nombre']."<br>";
        // }
        ?>
<form action="filtrocopy.php" method="post">
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
                                        <select id="status" name="status" class="custom-select custom-select-lg"
                                            onChange="mostrar(this.value);">
                                            <!-- Se comenta codigo para muestra en reunion -->
                                            <option value="0"></option>
                                            <option value="interior">Argentina</option>
                                            <option value="exterior">Internacional</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4 py-2">
                                        <select  class="custom-select custom-select-lg">

                                            <!--                                      
                                        Se comenta codigo para muestra en reunion
                                         -->
                                            <option></option>
                                            <!-- $_SERVER["REQUEST_METHOD"] == "POST") -->
                                            <!-- codigo adicional para implementacion posterior a reunion -->
                                           

                                            <?php foreach ($productosinternacionales as $key => $value) : ?>
                                            <option value="<?php echo $key ?>">
                                                <?php echo $productosinternacionales[$key]["nombre"]; ?>
                                            </option>
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

    <div id="interior" class="element" style="display: none;">
        <h2>Promociones nacionales...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">
                        <?php foreach ($nacional as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $nacional[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $nacional[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $nacional[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $nacional[$key]["precio"]; ?></span>
                                        </h5>
                                    </div>
                                    <div class="container d-flex justify-content-around">
                                        <a href="#" class="btn btn-success">Comprar</a>
                                        <a href="opiniones.php" class="btn btn-outline-primary">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="exterior" class="element" style="display: none;">
        <h2>Promociones Internacionales...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-12">
                    <div class="row">
                        <?php foreach ($exterior as $key => $value) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">
                                <?php echo '<img src="' .  $exterior[$key]["url"] . '" class="card-img-top" alt="..." />' ?>
                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $exterior[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $exterior[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $exterior[$key]["precio"]; ?></span>
                                        </h5>
                                    </div>
                                    <div class="container d-flex justify-content-around">
                                        <a href="#" class="btn btn-success">Comprar</a>
                                        <a href="opiniones.php" class="btn btn-outline-primary">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>

                    </div>
                </div>

            </div>
        </div>
    </div>




    <script>
    function mostrar(id) {
        if (id == "0") {
            $("#interior").hide();
            $("#exterior").hide();
        }

        if (id == "interior") {
            $("#interior").show();
            $("#exterior").hide();
        }



        if (id == "exterior") {
            $("#exterior").show();
            $("#interior").hide();
        }

    }
    </script>
    <script type="text/javascript" src="js/jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.fancybox.min.js"></script>