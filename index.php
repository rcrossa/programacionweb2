<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Delfos Tour</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link href="css/style/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
</head>

<body>
    <?php
    require_once "archivosphp/funcionesproductoportada.php";
    
    // archivos html
    require_once "encabezado.php";
    require_once "carousel.php";
    ?>
    <div class="container text-center my-5 destinos-populares">
      <h2>Productos Destacados</h2>
    </div>

    <div class="pb-4 text-center">
      <svg width="20%" height="2">
        <rect width="100%" height="100" style="fill:#F78014;stroke-width:0;stroke:rgb(0,0,0)" />
      </svg>
    </div>
    <?php
    require_once "productoportada.php";
    require_once "newsletter.php";
    require_once "linkinteresesyherramientas.php";
    require_once "footer.php";
    ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

</body>

</html>