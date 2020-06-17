<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "head.php"; ?>
    <title>Catálogo</title>
</head>

<body>
    <?php
    require_once "archivosphp/funcionesproductoportada.php";

    // archivos html
    $page = 'productos';
    require_once "encabezado.php";
    require_once "filtro.php";
    require_once "productoportada.php";
    require_once "linkinteres.php";
    require_once "footer.php";
    ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

</body>

</html>