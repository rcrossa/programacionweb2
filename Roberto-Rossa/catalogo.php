<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "head.php"; ?>
    <title>Delfos Tour</title>
</head>

<body>
    <?php
    require_once "archivosphp/funcionesproductoportada.php";
    require_once "archivosphp/funcionesproductoportadainternacional.php";
    
    // archivos html
    $page = 'catalogo';
    require_once "encabezado.php";
    require_once "filtrocopy.php";
    // require_once "productoportada.php";
    require_once "linkinteresesyherramientas.php";
    require_once "footer.php";
    ?>

</body>

</html>