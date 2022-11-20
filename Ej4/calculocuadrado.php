<?php

if(!isset($_POST["lado"])){
    echo "Error, no has introducido el lado";
}
else{

$lado = $_POST["lado"];

echo "<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='es'>
  <head>
    <meta charset='utf-8' />
    <title>Ejercicio 1.1</title>
    <link rel='stylesheet' href='../general.css'>
  </head>

  <body>";

echo "<div id='formulario'>";

echo "<p>El lado del cuadrado es: ".$lado."</p>";

echo "<p>El perímetro del cuadrado es: ".($lado * 4 )."</p>";

echo "<p>El área del cuadrado es: ".($lado * $lado)."</p>";

echo "<p><a href='cuadrado.html'>Volver</p>";

echo "</div>";

echo "</body></html>";

}
?>