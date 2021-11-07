<!-- Ejercicio 8. Realiza un programa que pida 10 números por teclado y que los almacene en un array.
A continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una tabla.
Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto de números (los que no son primos) de tal forma que no se pierda ninguno.
Al final se debe mostrar el array resultante. -->

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización del Ejercicio 8 de Arrays">
        <title>Ejercicio 8</title>
        <link rel="stylesheet" href=".././css/estilos.css">
</head>
<body>
    <?php
    // Para realizar el código de éste ejercicio vamos a reutilizar un poco de código de ejercicios anteriores, como variables y formularios
        $num = $_POST['num'];
        $contador = $_POST['contador'];
        $numToText = $_POST['numToText'];   
        if (!isset($num)) {
            $contador = 0;
            $numToText = "";
    ?>
            <form action="#" method="post">
                Introduzca 10 números: <input type="number" name="num" autofocus><br>
                <input type="hidden" name="contador" value="<?php echo $contador; ?>"><br>
                <input type="hidden" name="numToText" value="<?php echo $numToText; ?>"><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
    //Este echo es para comprobar si el contador funciona
    echo "Lleva $contador números introducidos<br>";
        }else if ($contador < 10){
            // Con este if añadimos el último número que se ha leído
            if ($numToText == "") {
                $numToText = $num;
            } else {
                $numToText = "$numToText $num";
            }
    ?>
            <form action="#" method="post">
                Introduzca 10 números: <input type="number" name="num" autofocus><br>
                <input type="hidden" name="contador" value="<?php echo ++$contador; ?>"><br>
                <input type="hidden" name="numToText" value="<?php echo $numToText; ?>"><br>
                <input type="submit" value="Enviar">
    <?php
    //Este echo es para comprobar si el contador funciona
    echo "<br>Lleva $contador números introducidos<br>";
        }
        if ($contador == 10) {
            $numero = explode(" ", $numToText);

            // Guardamos los primos y no primos en arrays distintos
            $contadorPrimo = 0;
            $contadorNoPrimo = 0;
            // Bucle para saber si es primo
            for ($i = 0; $i < 10; $i++) {
                $esPrimo = 1;
                // Bucle para saber si no es primo
                for ($j = 2; $j < $numero[$i]; $j++) {
                    if (($numero[$i] % $j) == 0) {
                        $esPrimo = 0;
                    }
                }
                // Bucles para aumentar los cntadores según sea primo o no
                if ($esPrimo == 1) {
                    $primo[$contadorPrimo] = $numero[$i];
                    $contadorPrimo++;
                } else {
                    $noPrimo[$contadorNoPrimo] = $numero[$i];
                    $contadorNoPrimo++;
                }
            }
        
            // Guardamos todos los números en el mismo array
            for ($i = 0; $i < $contadorPrimo; $i++) {
                $numero[$i] = $primo[$i];
            }
            for ($i = $contadorPrimo; $i < $contadorPrimo + $contadorNoPrimo; $i++) {
                $numero[$i] = $noPrimo[$i - $contadorPrimo];
            }
            
            // Hacemos una tabla y mostramos el resultado final por pantalla
            echo "<br>Array con los primos y no primos al principio y final, respectivamente:<br><br>";
            echo "<table border='1'><tr>";
            // Muestra las posiciones del array
            echo "<td>Posición</td>";
            for ($i = 0; $i < 10; $i++) {
                echo "<td>$i</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<td>Número</td>";
            // Muestra los números en dicha posición
            for ($i = 0; $i < 10; $i++) {
                echo "<td>$numero[$i]</td>";
            }
            echo "</tr></table>";
        }
      ?>
    <br>
    <form action="./Ejercicio_8.php">
        <input type="submit" value="Volver a introducir 10 números">
    </form>
    <br>
    <br>
    <!-- Hacemos dos botones para que se haga más ameno el navegar entre los ejercicios -->
    <table>
      <tr>
        <td colspan="2" align="center">
          <form action="../index.php">
              <input type="submit" value="Volver a la página principal">
          </form>
        </td>
      </tr>
      <tr>
        <td>
          <form action="./Ejercicio_7.php">
              <input type="submit" value="Ir al anterior ejercicio">
          </form>
        </td>
        <td>
          <form action="./Ejercicio_9.php">
              <input type="submit" value="Ir al siguiente ejercicio">
          </form>
        </td>
      </tr>
    </table>
</body>
</html>