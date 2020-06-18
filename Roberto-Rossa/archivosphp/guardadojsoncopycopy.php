<?php
require_once "funcionesproductoportadainternacionalcopy.php";
require_once "funcionesproductoportadacopy.php";


$productosinternacionales;
$productosnacionales;

//defino variable

echo "----------------";
echo "<br>";
//recorro los elementos del array recibido
foreach ($productosinternacionales as $key => $value) {
    
}
foreach ($productosnacionales as $key => $value) {
    
}
//devuelvo el ultimo elemento agregado
var_dump(array_pop($productosinternacionales));
echo "<br>";
echo "----------------";
echo "<br>";
var_dump(array_pop($productosnacionales));
echo "<br>";
echo "----------------";
echo "<br>";

//creo el json si no fue creado
$file= 'internacional.json';
$file1= 'nacional.json';

//codifico
$json_string1=json_encode($productosinternacionales);
$json_string2=json_encode($productosnacionales);
//abro los archivos para escribir
$fp = fopen('internacional.json','r');
$fp1 = fopen('nacional.json','r');
//escribo contenido
file_put_contents($file,$json_string1.PHP_EOL);
file_put_contents($file1,$json_string2.PHP_EOL);

//leo el primer archivo
$datosjson = fread($fp,filesize('internacional.json'));
//decodifico
$exterior=json_decode($datosjson,true);//con true se transforma en array asociativo
foreach ($exterior as $data) {
    echo "\nInternacional:\n ".$data['nombre']."<br>";
}
//leo el segundo archivo
$datosjson1 = fread($fp1,filesize('nacional.json'));
//decodifico
$nacionales=json_decode($datosjson1,true);//con true se transforma en array asociativo
foreach ($nacionales as $data) {
    echo "\n Nacional:\n".$data['nombre']."<br>";
}
//cierro los archivos
fclose($fp);
fclose($fp1);
// var_dump($c);
echo "<br>";
echo "<br>";
echo "----------------------------";
echo "<br>";
?>
