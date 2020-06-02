<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="css/style/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&family=Rubik:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/fancybox/jquery.fancybox.min.css" />
</head>

<body>
    <?php
    require_once "funcionesproductoportadainternacional.php";
    require_once "funcionesproductoportada.php";
    ?>

    <?php 
     
     $x=$productosinternacionales;
    //  $x2=$productos
    ?>
   
         <?php 
         $fp = fopen('internacional.json','r');
         //leo y asigno a variable
            $datosjson = fread($fp,filesize('internacional.json'));
            //cierro conexion
            fclose($fp);
            //decodifico 
            $exterior=json_decode($datosjson,true);//con true se transforma en array asociativo
        //     foreach ($exterior as $data) {
        //         echo "\n\n".$data['nombre']."<br>";
        // }?>
    <!-- tomo el array y lo imprimo dentro del select -->
    <!-- <Select> -->
        <!-- <option></option> -->
        <!-- Recorro el array que viene de  -->
        <!-- <?php foreach ($exterior as $key => $value) : ?> -->
        <!-- <option id="04" value="<?php echo $key ?>"> -->
            <!-- <?php echo $exterior[$key]["nombre"]; ?> -->
        <!-- </option> -->
        <!-- <?php endforeach ?> -->
    <!-- </Select> -->



    <!-- <Select> -->
        <!-- <option></option> -->
        <!-- <?php foreach ($exterior as $key => $value) : ?> -->
        <!-- <option id="04" value="<?php echo $key ?>"> -->
            <!-- <?php echo $exterior[$key]["nombre"]; ?> -->
        <!-- </option> -->
        <!-- <?php endforeach ?> -->
    <!-- </Select> -->

    <form action="prueba.php" method="post">
        Estado actual:
        <select id="status" name="status" onChange="mostrar(this.value);">
            <option value="interior">America Del Sur</option>
            <option value="exterior">America del Norte</option>
        </select>
        <select id="status1" name="status" onChange="mostrar(this.value);">
            <option value="interior">Argentina</option>
        </select>
    </form>
    </div>

    <div id="interior" class="element" style="display: none;">
        <h2>Promociones interior...</h2>
        <div class="container">
            <div class="row justify-content-center pb-4">

                <div class="col-12">
                    <div class="row">

                        <?php foreach ($productosnacionales as $key => $value) : ?>

                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 my-3">
                            <div class="card carta">

                                <?php echo '<img src="' .  $productosnacionales[$key]["url"] . '" class="card-img-top" alt="..." />' ?>

                                <div class="card-body">
                                    <h5 class="card-title1 font-weight-bold"><?php echo $productosnacionales[$key]["nombre"]; ?>
                                    </h5>
                                    <p class="card-text"><?php echo $productosnacionales[$key]["descripcion"]; ?></p>
                                    <div class="row justify-content-center pt-1 pb-3">
                                        <h5>
                                            <span
                                                class="card-text text-center badge badge-light"><?php echo $productosnacionales[$key]["precio"]; ?></span>
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
        <h2>Promociones interior...</h2>
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
            $("#interior").show();
            $("#exterior").hide();

        }
        if (id == "interior") {
            $("#exterior").hide();
            $("#interior").show();
        }
        if (id == "exterior") {
            $("#exterior").show();
            $("#interior").hide();
        }

    }
    </script>

    <script type="text/javascript" src="../js/jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/popper/popper.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/fancybox/jquery.fancybox.min.js"></script>
</body>

</html>