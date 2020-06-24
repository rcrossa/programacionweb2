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

</body>

</html>