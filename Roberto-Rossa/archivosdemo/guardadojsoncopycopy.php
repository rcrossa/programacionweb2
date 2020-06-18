<?php
require_once "americadelnorte.php";
require_once "americadelsur.php";
require_once "argentina.php";
require_once "centroamerica.php";
require_once "europa.php";
require_once "brasil.php";
require_once "eeuu.php";
require_once "canada.php";
require_once "espana.php";
require_once "mexico.php";
require_once "peru.php";
// require_once "paises.php";



$americadelnorte;
$americadelsur;
$argentina;
$centroamerica;
$europa;
$brasil;
$eeuu;
$canada;
$espana;
$peru;
$mexico;
$paises;


//defino variable

echo "----------------";
echo "<br>";
//recorro los elementos del array recibido
foreach ($americadelnorte as $key => $value) {
}
foreach ($americadelsur as $key => $value) {
}
foreach ($argentina as $key => $value) {
}
foreach ($centroamerica as $key => $value) {   
}
foreach ($europa as $key => $value) { 
}
foreach ($brasil as $key => $value) { 
}
foreach ($eeuu as $key => $value) { 
}
foreach ($canada as $key => $value) { 
}
foreach ($espana as $key => $value) { 
}
foreach ($mexico as $key => $value) { 
}
foreach ($peru as $key => $value) { 
}

//devuelvo el ultimo elemento agregado
// var_dump(array_pop($productosinternacionales));
// echo "<br>";
// echo "----------------";
// echo "<br>";
// var_dump(array_pop($productosnacionales));
// echo "<br>";
// echo "----------------";
// echo "<br>";

//creo el json si no fue creado
$file1='americadelnorte.json';
$file2='americadelsur.json';
$file3='argentina.json';
$file4='centroamerica.json';
$file5='europa.json';
$file6='brasil.json';
$file7 ='eeuu.json';
$file8 ='canada.json';
$file9 ='espana.json';
$file10='mexico.json';
$file11='peru.json';
$file12='paises.json';
//codifico
$json_string1=json_encode($americadelnorte);
$json_string2=json_encode($americadelsur);
$json_string3=json_encode($argentina);
$json_string4=json_encode($centroamerica);
$json_string5=json_encode($europa);
$json_string6=json_encode($brasil);
$json_string7 =json_encode($eeuu);
$json_string8=json_encode($canada);
$json_string9=json_encode($espana);
$json_string10=json_encode($mexico);
$json_string11=json_encode($peru);
// $json_string12=json_encode($paises);
//abro los archivos para escribir
$fp1 = fopen('americadelnorte.json','r');
$fp2 = fopen('americadelsur.json','r');
$fp3 = fopen('argentina.json','r');
$fp4 = fopen('centroamerica.json','r');
$fp5 = fopen('europa.json','r');
$fp6 = fopen('brasil.json','r');
$fp7  =fopen('eeuu.json','r');
$fp8  =fopen('canada.json','r');
$fp9  =fopen('espana.json','r');
$fp10 =fopen('mexico.json','r');
$fp11 =fopen('peru.json','r');
// $fp12=fopen('paises.json','r');

//escribo contenido
file_put_contents($file1,$json_string1.PHP_EOL);
file_put_contents($file2,$json_string2.PHP_EOL);
file_put_contents($file3,$json_string3.PHP_EOL);
file_put_contents($file4,$json_string4.PHP_EOL);
file_put_contents($file5,$json_string5.PHP_EOL);
file_put_contents($file6,$json_string6.PHP_EOL);
file_put_contents($file7,$json_string7.PHP_EOL);
file_put_contents($file8,$json_string8.PHP_EOL);
file_put_contents($file9,$json_string9.PHP_EOL);
file_put_contents($file10,$json_string10.PHP_EOL);
file_put_contents($file11,$json_string11.PHP_EOL);
// file_put_contents($file12,$json_string12.PHP_EOL);
//como decodificar y leer archivos:
//leo el primer archivo
$datosjson1= fread($fp1,filesize('americadelnorte.json'));
$datosjson2= fread($fp2,filesize('americadelsur.json'));
// $datosjson3= fread($fp3,filesize('argentina.json'));
// $datosjson4= fread($fp4,filesize('centroamerica.json'));
// $datosjson5= fread($fp5,filesize('europa.json'));
// $datosjson6= fread($fp6,filesize('brasil.json'));
//decodifico
$exterior=json_decode($datosjson1,true);//con true se transforma en array asociativo
foreach ($exterior as $data) {
    echo "\nAmerica del Norte:\n ".$data['nombre']."<br>";
}
//decodifico
$americadelsur1=json_decode($datosjson2,true);//con true se transforma en array asociativo
foreach ($americadelsur1 as $data) {
    echo "\n America del sur:\n".$data['nombre']."<br>";
}

//cierro los archivos
fclose($fp1);
fclose($fp2);
// fclose($fp3);
// fclose($fp4);
// fclose($fp5);
// fclose($fp6);
// fclose($fp7);
// fclose($fp8);
// fclose($fp9);
// fclose($fp10);
// fclose($fp11);
// var_dump($c);
echo "<br>";
echo "<br>";
echo "----------------------------";
echo "<br>";
?>
