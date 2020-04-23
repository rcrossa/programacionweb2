<?php
include('./productos.php')
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Delfos Tour</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-orangened">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="images/logo_cabecera.png" alt="Logo" class="logomenu" width="74" height="90">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Paquetes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">Contacto</a>
                    </li>
                    <li class="nav-item dropdown">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>

        <div class="container-fluid px-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="images/imagencarrusel1.png" height="218" width="918" alt="Foto promocion caribe">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="images/imagencarrusel3.png" height="218" width="918" alt="foto pileta de hotel">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="images/imagencarrusel2.png" height="218" width="918" alt="foto de gente caminando por la playa">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <div class="container-fluid px-5">
            <div class="row justify-content-center">

                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="filter-wrap py-4">
                        <h3>Filtro</h3>
                        <div class="filter-border p-4 border border-secondary">
                            <div class="filter-inner">
                                <div class="row">
                                    <div class="col-12">
                                        <select class="custom-select custom-select-lg mb-3">
                                            <option selected>Interior</option>
                                            <?php foreach ($interior as $key => $value) : ?>
                                                <option value="<?php echo $key ?>"><?php echo $interior[$key]["nombre"]; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <select class="custom-select custom-select-lg mb-3">
                                            <option selected>Exterior</option>
                                            <?php foreach ($exterior as $key => $value) : ?>
                                                <option value="<?php echo $key ?>"><?php echo $exterior[$key]["nombre"]; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <button class="btn btn-danger btn-lg px-5 btn-block">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>

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



        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="herramientas"> Links De Interés y Herramientas Útiles</h2>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="tab-content">

            <div class="row text-center">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="tab-0"><a class="text-light" href="https://www.argentina.gob.ar/turismo" target="_blank">Secretaria de turismo de la nación</a></div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="tab-1">
                        <a class="text-light" href="http://www.migraciones.gov.ar/accesible/templates/tarjeta_migratoria/tarjeta_migratoria_p.htm" target="_blank">Imprima Su Tarjeta Migratoría Aquí</a></div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="tab-2"><a class="text-light" href="http://www.migraciones.gov.ar/site_docs/indexDoc.php?arg_requisitos" target="_blank">Migraciones - Ingreso y Egreso Del País</a></div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="tab-4"><a class="text-light" href="https://www.horlogeparlante.com/reloj-mundial.html?sort=country" target="_blank">Horario Mundial</a></div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="tab-3"><a class="text-light" href="http://www.aa2000.com.ar/" target="_blank">Arribos y
                            Partidas</a></div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="tab-5"><a class="text-light" href="egresoconmenores/egresoconmenores.html">Egreso Del
                            País Con Menores</a></div>
                </div>
            </div>

        </div>

        <div class="container-fluid" id="tab-content-1">

            <div class="row text-center">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="tab-0a"><a class="text-light" href="somos.html">Quienes Somos</a></div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="tab-1a"><a class="text-light" href="formadepago.html">Forma De Pago</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="tab-2a"><a class="text-light" href="protecciondatos.html">Protección
                            Datos Personales</a></div>
                </div>
            </div>


        </div>
    </section>


    <footer>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 ">
                    <div>
                        <img src="images/logo_delfos.png" id="logo" alt="logo delfos" width="72" height="84">
                    </div>
                    <div class="Legajo">
                        N° Legajo 11486
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                    <div>
                        <img src="images/Phone-icon.png" class="phoneicon" alt="icono de telefono" width="128" height="128">
                        0810 8103353
                    </div>
                </div>


                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                    <div>
                        <a href="mailto:info@delfos.tur.ar"> <img src="images/email-2-icon.png" class="emailicon" alt="icono de correo" width="128" height="128"></a>
                        info@delfos.tur.ar
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="locationicon">
                        <a href="https://goo.gl/maps/dif9jy2WHjwzRtiG7" target="_blank"><img src="images/location-icon.png" class="ubicacion" alt="icono de direccionamiento a google mapas" width="128" height="128"></a>
                    </div>
                    <div> Cnel. Juan Beverina 1988</div>
                    <div> CP: X5009IOH</div>
                    <div> Centro de las Rosas Cordoba</div>
                </div>



                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                    <div>Mapa del sitio</div>
                    <div><a href="index.php">Home</a></div>
                    <div><a href="gallery.html">Paquetes</a></div>
                    <div><a href="contacto.html">Contacto</a></div>
                </div>
            </div>



        </div>
    </footer>


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->

</body>

</html>