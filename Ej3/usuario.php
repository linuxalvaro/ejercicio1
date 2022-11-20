<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='es'>
  <head>
    <meta charset='utf-8' />
    <title>Ejercicio 1.1</title>
    <link rel="stylesheet" href="../general.css">
  </head>
    <?php
    if(is_null($_POST["nombre"]) || is_null($_POST["apellidos"]) || is_null($_POST["correo"]) || is_null($_POST["texto"])){
      echo "Error, no has introducido alguno de los valores obligatorios.";
      echo "<br>";
      echo "<p><a href='index.html'>Volver</p>";
    }
    
    else{
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["correo"];
      //  $telefono = $_POST["telefono"];
       // $web = $_POST["web"];
        $comentario = $_POST["texto"];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nombre)) {
          echo "Error al introducir el nombre";
        }
        elseif (!preg_match("/^[a-zA-Z-' ]*$/",$apellidos)) {
          echo "Error al introducir el apellido";
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "Error al introducir el correo";
        }
        else{

        echo "<p>Hola, estos son los datos introducidos en el formulario<p>";
        echo "Tu nombre es ".$nombre.". Tus apellidos son ".$apellidos.". ".$email." es el correo electrónico que nos has facilitado.";
        echo "<br>";
        if(!empty($_POST["telefono"])){
          echo "Tu número es: ".$_POST["telefono"];
          echo "<br>";
        }
        if(!empty($_POST["web"])){
          echo "Tu página web es: ".$_POST["web"];
          echo "<br>";
        }
        echo "Tu comentario es: ".$comentario;
        }
    }
    ?>
  <body>