<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='es'>
  <head>
    <meta charset='utf-8' />
    <title>Ejercicio 1.1</title>
    <link rel="stylesheet" href="../general.css">
  </head>

  <body>
    <div id="formulario">
    <p>Juego de piedra, papel, tijera, lagarto o spock</p>
    <p>Escoge uno:</p>
    
        <form method="post">
            <ul><input type="submit" name="1" id="piedra" value="Piedra"></ul>
            <ul><input type="submit" name="2" id="papel" value="Papel"></ul>
            <ul><input type="submit" name="3" id="tijeras" value="Tijeras"></ul>
            <ul><input type="submit" name="4" id="lagarto" value="Lagarto"></ul>
            <ul><input type="submit" name="5" id="spock" value="Spock"></ul>
        </form>
    

    <?php
   
    

    function usuarioPiedra(){

      echo "Has elegido piedra<br>";
      $eleccionOrdenador = rand(1,5);
      switch($eleccionOrdenador){
        case 1:
          echo "La máquina ha elegido piedra<br>";
          echo "El resultado es empate";
          break;
        case 2:
          echo "La máquina ha elegido papel<br>";
          echo "Gana la máquina";
          break;
        case 3:
          echo "La máquina ha elegido tijeras<br>";
          echo "Ganas tú";
          break;
        case 4:
          echo "La máquina ha elegido lagarto<br>";
          echo "Ganas tú";
          break;
        case 5:
          echo "La máquina ha elegido spock<br>";
          echo "Gana la máquina";
          break;
      }
    }
    function usuarioPapel(){

      echo "Has elegido papel<br>";
      $eleccionOrdenador = rand(1,5);
      switch($eleccionOrdenador){
        case 1:
          echo "La máquina ha elegido piedra<br>";
          echo "Ganas tú";
          break;
        case 2:
          echo "La máquina ha elegido papel<br>";
          echo "El resultado es empate";
          break;
        case 3:
          echo "La máquina ha elegido tijeras<br>";
          echo "Gana la máquina";
          break;
        case 4:
          echo "La máquina ha elegido lagarto<br>";
          echo "Gana la máquina";
          break;
        case 5:
          echo "La máquina ha elegido spock<br>";
          echo "Ganas tú";
          break;
      }
    }
    function usuarioTijeras(){

      echo "Has elegido tijeras<br>";
      $eleccionOrdenador = rand(1,5);
      switch($eleccionOrdenador){
        case 1:
          echo "La máquina ha elegido piedra<br>";
          echo "Gana la máquina";
          break;
        case 2:
          echo "La máquina ha elegido papel<br>";
          echo "Ganas tú";
          break;
        case 3:
          echo "La máquina ha elegido tijeras<br>";
          echo "El resultado es empate";
          break;
        case 4:
          echo "La máquina ha elegido lagarto<br>";
          echo "Ganas tú";
          break;
        case 5:
          echo "La máquina ha elegido spock<br>";
          echo "Gana la máquina";
          break;
      }
    }
    function usuarioLagarto(){

      echo "Has elegido lagarto<br>";
      $eleccionOrdenador = rand(1,5);
      switch($eleccionOrdenador){
        case 1:
          echo "La máquina ha elegido piedra<br>";
          echo "Gana la máquina";
          break;
        case 2:
          echo "La máquina ha elegido papel<br>";
          echo "Ganas tú";
          break;
        case 3:
          echo "La máquina ha elegido tijeras<br>";
          echo "Gana la máquina";
          break;
        case 4:
          echo "La máquina ha elegido lagarto<br>";
          echo "El resultado es empate";
          break;
        case 5:
          echo "La máquina ha elegido spock<br>";
          echo "Ganas tú";
          break;
      }
    }
    function usuarioSpock(){
  
      echo "Has elegido spock<br>";
      $eleccionOrdenador = rand(1,5);
      switch($eleccionOrdenador){
        case 1:
          echo "La máquina ha elegido piedra<br>";
          echo "Ganas tú";
          break;
        case 2:
          echo "La máquina ha elegido papel<br>";
          echo "Gana la máquina";
          break;
        case 3:
          echo "La máquina ha elegido tijeras<br>";
          echo "Ganas tú";
          break;
        case 4:
          echo "La máquina ha elegido lagarto<br>";
          echo "Gana la máquina";
          break;
        case 5:
          echo "La máquina ha elegido spock<br>";
          echo "El resultado es empate";
          break;
      }
    }

    /*
      Las elecciones son del 1->5 en orden Piedra, Papel, Tijeras, Lagarto y Spock.
    */
      if(isset($_POST["1"])){
        usuarioPiedra();
        echo "<p>¡Juega otra vez!</p>";
      }
      if(isset($_POST["2"])){
        usuarioPapel();
        echo "<p>¡Juega otra vez!</p>";
      }
      if(isset($_POST["3"])){
        usuarioTijeras();
        echo "<p>¡Juega otra vez!</p>";
      }
      if(isset($_POST["4"])){
        usuarioLagarto();
        echo "<p>¡Juega otra vez!</p>";
      }
      if(isset($_POST["5"])){
        usuarioSpock();
        echo "<p>¡Juega otra vez!</p>";
      }

    ?>
    </div>
  </body>
</html>