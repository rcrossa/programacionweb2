<?php
require_once "funcionesproductoportadainternacional.php";
//creo el json si no fue creado
$file= 'archivo.json';
//array de ejemplo recibido
// $post =['java',"1"];
$productosinternacionales;
//defino variable

echo "----------------";
echo "<br>";
//recorro los elementos del array recibido
foreach ($productosinternacionales as $key => $value) {
    // echo "\n\nPais : " .$productosinternacionales[$key]["nombre"]."<br>" ;
    // $a=$productosinternacionales[$key];
}
// print_r($productosinternacionales);
var_dump($productosinternacionales);
echo "<br>";
echo "----------------";
echo "<br>";
$json_string1=json_encode($productosinternacionales);

$fp = fopen('archivo.json','r');
$datosjson = fread($fp,filesize('archivo.json'));
fclose($fp);
$exterior=json_decode($datosjson,true);//con tru se transforma en array asociativo
foreach ($exterior as $data) {
    echo "\n\n".$data['nombre']."<br>";
}
// var_dump($c);
echo "<br>";
echo "<br>";
echo "----------------------------";
echo "<br>";
?>
