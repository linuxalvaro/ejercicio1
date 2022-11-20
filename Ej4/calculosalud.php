<?php

$sexo = $_POST["sexo"];

//sexo 1 -> hombre, sexo 2 -> mujer

$altura = $_POST["altura"];
$edad = $_POST["edad"];
$peso = $_POST["peso"];

$imc = $peso / ($altura/100 * $altura/100);

echo "<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='es'>
  <head>
    <meta charset='utf-8' />
    <title>Ejercicio 1.1</title>
    <link rel='stylesheet' href='../general.css'>
  </head>

  <body>";

echo "<div id='formulario'>";

echo "Tu IMC es: ".$imc;

echo "<br>";

if($sexo == 1){
    $s=5;
}
else{
    $s=-161;
}

$tmb = (10*$peso + 6.25*$altura - 5*$s);

echo "Tu tasa metabólica basal es: ".$tmb;

echo "<p><a href='salud.html'>Volver</p>";

echo "</div>";

echo "</body></html>";

?>