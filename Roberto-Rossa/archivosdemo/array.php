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
    // require_once "funcionesproductoportadainternacional.php";
    // require_once "funcionesproductoportada.php";
    ?>

    <?php 
     
    //  $x=$productosinternacionales;
    //  $x2=$productos
    ?>

    <?php 
         $fp1 = fopen('americadelnorte.json','r');
         $fp2 = fopen('americadelsur.json','r');
         $fp3 = fopen('argentina.json','r');
         $fp4 = fopen('centroamerica.json','r');
         $fp5 = fopen('europa.json','r');
         $fp6 = fopen('brasil.json','r');
         $fp7 =fopen('eeuu.json','r');
         $fp8 =fopen('canada.json','r');
         $fp9 =fopen('espana.json','r');
         $fp10 =fopen('mexico.json','r');
         $fp11 =fopen('peru.json','r');
         //leo y asigno a variable
         
            $datosjson1 = fread($fp1,filesize('americadelnorte.json'));
            $datosjson2 = fread($fp2,filesize('americadelsur.json'));
            $datosjson3 = fread($fp3,filesize('argentina.json'));
            $datosjson4 = fread($fp4,filesize('centroamerica.json'));
            $datosjson5 = fread($fp5,filesize('europa.json'));
            $datosjson6 = fread($fp6,filesize('brasil.json'));
            $datosjson7 = fread($fp7,filesize('eeuu.json'));
            $datosjson8 = fread($fp8,filesize('canada.json'));
            $datosjson9 = fread($fp9,filesize('espana.json'));
            $datosjson10 = fread($fp10,filesize('mexico.json'));
            $datosjson11 = fread($fp11,filesize('peru.json'));



        
           //decodifico 
             $americadelnorte=json_decode($datosjson1,true);
             $americadelsur=json_decode($datosjson2,true);
             $argentina=json_decode($datosjson3,true);
             $centroamerica=json_decode($datosjson4,true);
             $europa=json_decode($datosjson5,true);
             $brasil=json_decode($datosjson6,true);
             $eeuu=json_decode($datosjson7,true);
             $canada=json_decode($datosjson8,true);
             $espana = json_decode($datosjson9,true);
             $mexico = json_decode($datosjson10,true);
             $peru = json_decode($datosjson11,true);
             //cierro conexion
            fclose($fp1);
            fclose($fp2);
            fclose($fp3);
            fclose($fp4);
            fclose($fp5);
            fclose($fp6);
            fclose($fp7);
            fclose($fp8);
            fclose($fp9);
            fclose($fp10);
            fclose($fp11);

        //     foreach ($exterior as $data) {
        //         echo "\n\n".$data['nombre']."<br>";
        // }
                // foreach ($americadelsur as $key => $value) {
                //     // echo $americadelnorte[$key]["nombre"];
                //      if ($americadelnorte[$key]["argentina"]) {
                //         echo "ok";
                //      }
                // }
                ?>
                <?php
                $productosinternacionales = array(
                    array(
                        "id" => 0,
                        'nombre' => 'Rio',
                        'precio' => '$50000',
                        'categoria' => 'mexico',
                    ),
                    array(
                        'id' => 1,
                        'nombre' => 'Cancun',
                        'precio' => '$45000',
                        'categoria' => 'mexico',
                    ),
                    array(
                        'id' => 2,
                        'nombre' => 'lima',
                        'precio' => '$60000',
                        'categoria' => 'peru',
                    ),
                );
        ?>


                <?php foreach ($americadelsur as $cat) {?>
                <li class="container-fluid">
                    <a href="array.php?cat=<?php echo $cat['Nombre']?>&nombre=<?php echo isset($_GET['Nombre'])?$_GET['Nombre']:''?>">
                   America del Norte</a>
                </li>
                <li>
                <?php echo $cat['nombre']?>
                </li>
                <?php echo $cat['precio']?>
                <li>
                
                </li>
                <?php } ?>

        <?php
            $array = array(
                'fruta1' => 'manzana',
                'fruta2' => 'naranja',
                'fruta3' => 'uva',
                'fruta4' => 'manzana',
                'fruta5' => 'manzana');

            // Este ciclo muestra todas las claves del array asociativo
            // donde el valor equivale a "manzana"
            while ($nombre_fruta = current($array)) {
                if ($nombre_fruta == 'manzana') {
                    echo key($array).'<br />';
                }
                next($array);
                        }
?>
   
   <!-- <select>
        <?php foreach($argentina as $datos){ ?>
        <option><?php echo $id->id; ?></option>
        <option><?php echo $nombre->nombre; ?></option>
        <option><?php echo $precio->precio; ?></option>
        
        <?php  }?>
    </select> -->
            


    </body>
</html>