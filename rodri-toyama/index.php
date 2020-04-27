<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "./includes/head.php"; ?>
    
    <title>Delfos Tour</title>
</head>

<body>
    <?php
    require_once "functions/funcionesproductoportada.php";

    // archivos html
    $page = 'index';
    require_once "./includes/encabezado.php";
    require_once "./includes/carousel.php";
    ?>

    <div class="container text-center my-5 destinos-populares">
        <h2>Destinos populares</h2>
    </div>

    <div class="pb-4 text-center">
        <svg width="60%" height="2">
            <rect width="100%" height="100" style="fill:#F78014;stroke-width:0;stroke:rgb(0,0,0)" />
        </svg>
    </div>
    
    <?php
    require_once "./includes/productoportada.php";
    require_once "./includes/newsletter.php";
    require_once "./includes/linkinteresesyherramientas.php";
    require_once "./includes/footer.php";
    ?>
</body>

</html>