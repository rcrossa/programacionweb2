<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "head.php"; ?>
    <title>Document</title>
</head>

<body>

    <?php
    $page = 'productos';
    require_once "encabezado.php";

    if(isset($_POST['submit'])){
        $data = $_POST;
        unset($data['submit']);
        $data['fecha'] = date('d/m/Y H:i:s');
        $fecha = new DateTime();
        $indexComentario = $fecha->format('YmdHisu');
        if(file_exists('archivosphp/comentarios.json')){
            $comentarioJson = file_get_contents('archivosphp/comentarios.json');
            $comentarioArray = json_decode($comentarioJson, true);
        }else{
            $comentarioArray = array();
        }
        $comentarioArray[$indexComentario] = $data;
        $fp = fopen('archivosphp/comentarios.json','w');
        fwrite($fp,json_encode($comentarioArray));
        fclose($fp);
        //var_dump($_POST);
    }
    ?>


    <div class="container text-center pt-5 pb-4">
        <h1>Tierra del Fuego</h1>
    </div>

    <div class="pb-5 text-center">
        <svg width="60%" height="2">
            <rect width="100%" height="100" style="fill:rgb(255,165,0);stroke-width:0;stroke:rgb(0,0,0)" />
        </svg>
    </div>

    <?php
        $fp = fopen('archivosphp/productos.json','r');
        $pArray = json_decode(fread($fp,filesize('archivosphp/productos.json')),true);
        fclose($fp);
        foreach($pArray as $prod){
            if($prod['id'] == $_GET['producto']){
                break;
            }
        }
    ?>

    <section>
        <div class="container shadow justify-content-around p-4">
            <div class="row justify-content-center text-center">

                <!-- Acá va la imagen del producto -->

                <div class="col-4">
                    <div class="imagen1">
                        <a href="<?php echo $prod['url']; ?>" data-fancybox="gallery" data-caption="Caption for single image">
                            <img height="auto" width="100%" src="<?php echo $prod['url']; ?>" alt="imagen del producto">
                        </a>
                    </div>
                </div>

                <div class="col-4">
                    <div class="imagen2 img-fluid">
                        <a href="<?php echo $prod['url']; ?>" data-fancybox="gallery" data-caption="Caption for single image">
                            <img height="auto" width="100%" src="<?php echo $prod['url']; ?>" alt="imagen del producto">
                        </a>
                    </div>
                </div>

                <div class="col-4">
                    <div class="imagen3">
                        <div data-toggle="modal" data-target="#myModal2">
                            <a href="<?php echo $prod['url']; ?>" data-fancybox="gallery" data-caption="Caption for single image">
                                <img height="auto" width="100%" src="<?php echo $prod['url']; ?>" alt="imagen del producto">
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
                    <h3 class="pb-3">
                        Incluye:
                    </h3>

                    <h4>
                        <?php
                        if($prod['id'] == $_GET['producto']){
                            echo $prod['descripcion'];
                        }
                        ?>
                    </h4>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <!--           <fieldset>-->
            <div class="text-center pb-3">
                <h2>Opiniones De Los Usuarios</h2>
            </div>

            <div class="pb-4 text-center">
                <svg width="20%" height="2">
                    <rect width="100%" height="100" style="fill:#F78014;stroke-width:0;stroke:rgb(0,0,0)" />
                </svg>
            </div>
        </div>
    </section>
    <!--
    <div class="container mt-3">
        <div class="media border p-3 shadow">
            <img src="imagenes/cerrocastor.png" alt="imagen de avatar" class="mr-3 mt-3 rounded-circle" style="width:60px;">
            <div class="media-body">
            <h4>Bart Simpson <small><i>Posted on April 29, 2020</i></small> ★★★★</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>      
            </div>
        </div>
    </div>
    -->
            <?php
                if(file_exists('archivosphp/comentarios.json')){
                    $comentarioJson = file_get_contents('archivosphp/comentarios.json');
                    $comentarioArray = json_decode($comentarioJson,true);
                    krsort($comentarioArray);
                    $cantidad = 0;
                    foreach($comentarioArray as $comentario) {
                        if($comentario['producto_id'] == $_GET['producto']){
                            $cantidad++;
                            if($cantidad == 11)break;
                            ?>

                            <div class="container mt-3">
                                <div class="media border p-3 shadow">
                                    <div class="media-body">
                                    <h4> <?php echo $comentario['email']; ?> <small><i> <?php echo $comentario['fecha']; ?> </i></small> <?php echo $comentario['estrellas']; ?></h4>

                                    <p> <?php echo $comentario['comentario']; ?> </p>  
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                }	
            ?>
            <!--
            <img src="imagenes/puertomadryn.png" alt="imagen de avatar" class="mr-3 mt-3 rounded-circle" style="width:60px;">
            <div class="media-body">
            <h4>Homero Simpson <small><i>Posted on April 29, 2020</i></small> ★★★</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>      
            </div>
            -->

    <section class="py-5">
        <div class="container">
            <!--           <fieldset>-->
            <div class="text-center pb-3">
                <h2>Danos Tu Opinión Del Producto</h2>
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
                                    <div class="col-sm-12 col-md-6">
                                        <label>Nombre y Apellido *</label>
                                        <input type="text" name="nombre" required class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-6">
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
                                    <div class="col-sm-6 col-md-10">
                                        <div class="form1">
                                            <p class="clasificacion" name="rankeo">
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
                                    
                                    <input type="hidden" class="input-xlarge" name="producto_id" value="<?php echo $_GET['producto'] ?>"/>

                                    <div class="col-sm-6 col-md-2">
                                        <input class="text-white btn btn-md btn-block text-center newsletter-btn" type="submit" value="Enviar" name="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

            <!--            </fieldset>-->
        </div>

    </section>
    <!-- Borrar -->


    <?php
    require_once "linkinteres.php";
    require_once "footer.php";
    ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

</body>

</html>