<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link href="css/style/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <title>Document</title>
</head>

<body>

    <?php
    require_once "encabezado.php";
    ?>


<!-- Borrar -->
    <div class="container text-center pt-5 pb-4">
        <h1>Ushuaia</h1>
    </div>

    <div class="pb-5 text-center">
        <svg width="60%" height="2">
            <rect width="100%" height="100" style="fill:rgb(255,165,0);stroke-width:0;stroke:rgb(0,0,0)" />
        </svg>
    </div>

    <section>
        <div class="container shadow justify-content-around p-4">
            <div class="row justify-content-center text-center">

                <!-- Acá va la imagen del producto -->

                <div class="col-4">
                    <div class="imagen1">
                        <a href="images/Untitled-3.png" data-fancybox="gallery" data-caption="Caption for single image">
                            <img height="auto" width="100%" src="images/Untitled-3.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-4">
                    <div class="imagen2 img-fluid">
                        <a href="images/Untitled-2.png" data-fancybox="gallery" data-caption="Caption for single image">
                            <img height="auto" width="100%" src="images/Untitled-2.png" alt="imagen de acantilado">
                        </a>
                    </div>
                </div>

                <div class="col-4">
                    <div class="imagen3">
                        <div data-toggle="modal" data-target="#myModal2">
                            <a href="images/Untitled-4.png" data-fancybox="gallery" data-caption="Caption for single image">
                                <img height="auto" width="100%" src="images/Untitled-4.png" alt="imagen de acantilado">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="descripcion py-5">
        <div class="container py-5 shadow">
            <div class="row justify-content-center">
                <div class="col-sm-11 col-md-10 col-lg-10 incluye py-2">
                    <h5 class="pb-3">
                        Incluye:
                    </h5>
                    <ul>
                        <li> Acá va la descripción del producto. </li>
                        <li> Acá va la descripción del producto. </li>
                        <li> Acá va la descripción del producto. </li>
                        <li> Acá va la descripción del producto. </li>
                        <li> Acá va la descripción del producto. </li>
                        <li> Acá va la descripción del producto. </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div>
        <svg width="100%" height="10">
            <rect width="100%" height="100" style="fill:rgb(255,165,0);stroke-width:0;stroke:rgb(0,0,0)" />
        </svg>
    </div>

    <section>
        <div class="container bg-warning">
            <!--           <fieldset>-->
            <div class="text-center">
                <h4>Opinión del producto</h4>
            </div>

            <form action="#" method="post">
                <fieldset>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <label>Nombre y Apellido *</label>
                                <input type="text" name="nombre" required class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Mensaje *</label>
                            <textarea class="form-control" name="comentario" required rows="3"></textarea>
                        </div>
                    </div>
                    
                    
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-10 col-md-10 col-lg-11">
                                <div class="form1">
                                    <p class="clasificacion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <!--
                                        --><label for="radio1">★</label>
                                        <!--
                                        --><input id="radio2" type="radio" name="estrellas" value="4">
                                        <!--
                                        --><label for="radio2">★</label>
                                        <!--
                                        --><input id="radio3" type="radio" name="estrellas" value="3">
                                        <!--
                                        --><label for="radio3">★</label>
                                        <!--
                                        --><input id="radio4" type="radio" name="estrellas" value="2">
                                        <!--
                                        --><label for="radio4">★</label>
                                        <!--
                                        --><input id="radio5" type="radio" name="estrellas" value="1">
                                        <!--
                                        --><label for="radio5">★</label>
                                    </p>
                                </div>
                            </div>

                            <div class="col-1">
                                <input type="submit" value="Enviar" name="submit">
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>

            <!--            </fieldset>-->
        </div>
        
    </section>
<!-- Borrar -->


    <?php
    require_once "linkinteresesyherramientas.php";
    require_once "footer.php";
    ?>

    <!-- Scripts -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

</body>

</html>