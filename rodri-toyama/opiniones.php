<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./includes/head.php" ?>
    <title>Document</title>
</head>

<body>
    <?php $page = 'catalogo'; ?>
    <?php require_once "./includes/encabezado.php"; ?>

    <div class="container text-center pt-5 pb-4">
        <h1>Tierra del Fuego</h1>
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

                <div class="col-md-12 col-lg-4">
                    <div class="imagen1">
                        <a href="./images/Untitled-3.png" data-fancybox data-fancybox="gallery" data-caption="Caption for single image">
                            <img height="auto" width="100%" src="./images/Untitled-3.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="imagen2 img-fluid">
                        <a href="./images/Untitled-2.png" data-fancybox data-fancybox="gallery" data-caption="Caption for single image">
                            <img height="auto" width="100%" src="./images/Untitled-2.png" alt="imagen de acantilado">
                        </a>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="imagen3">
                        <div data-toggle="modal" data-target="#myModal2">
                            <a href="./images/Untitled-4.png" data-fancybox data-fancybox="gallery" data-caption="Caption for single image">
                                <img height="auto" width="100%" src="./images/Untitled-4.png" alt="imagen de acantilado">
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

    <section class="py-5">
        <div class="container">
            <!--           <fieldset>-->
            <div class="text-center pb-3">
                <h2>Opinión del producto</h4>
            </div>

            <div class="pb-4 text-center">
                <svg width="20%" height="2">
                    <rect width="100%" height="100" style="fill:#F78014;stroke-width:0;stroke:rgb(0,0,0)" />
                </svg>
            </div>

            <div class="container">
                <form action="#" method="post">
                    <fieldset>
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-12">
                                        <label>Nombre*</label>
                                        <input type="text" name="nombre" required class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="email">Email *</label>
                                        <input type="email" id="email" name="email" required class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label>Mensaje *</label>
                                        <textarea class="form-control" name="comentario" required rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
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
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-lg-2 mr-auto">
                                        <input class="text-white btn btn-md btn-block text-center newsletter-btn" type="submit" value="Enviar" name="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>

    </section>

    <?php
    require_once "./includes/linkinteresesyherramientas.php";
    require_once "./includes/footer.php";
    ?>
</body>

</html>