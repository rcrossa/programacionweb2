<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once "head.php"; ?>
  <title>Delfos Tour</title>
</head>

<body>
    <?php
    require_once "archivosphp/funcionesproductoportada.php";
    
    // archivos html
    $page = 'index';
    require_once "encabezado.php";
    require_once "carousel.php";
    ?>
    

    <div class="col-12 text-center pt-5 pb-4">
      <h1>Destinos populares</h1>
    </div>

    <div class="pb-5 text-center">
        <svg width="20%" height="2">
            <rect width="100%" height="100" style="fill:rgb(255,165,0);stroke-width:0;stroke:rgb(0,0,0)" />
        </svg>
    </div>
    
    <?php
    require_once "productoportada.php";
    require_once "recibircorreos.php";
    require_once "linkinteres.php";
    require_once "footer.php";
    ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

</body>

</html>