<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "./includes/head.php"; ?>
    <title>Delfos Tour</title>
</head>

<body>
    <?php
    require_once "./functions/funcionesproductoportada.php";

    // archivos html
    $page = 'catalogo';
    require_once "./includes/encabezado.php";
    require_once "./includes/filtro.php";
    require_once "./includes/productoportada.php";
    require_once "./includes/linkinteresesyherramientas.php";
    require_once "./includes/footer.php";
    ?>

</body>

</html>