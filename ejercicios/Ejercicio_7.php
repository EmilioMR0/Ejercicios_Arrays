<!-- Ejercicio 7. Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en un array.
El programa debe ser capaz de pasar todos los números par a las primeras posiciones del array (del 0 en adelante) y todos los números impar a las celdas restantes.
Utiliza arrays auxiliares si es necesario. -->

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización del Ejercicio 7 de Arrays">
        <title>Ejercicio 7</title>
        <link rel="stylesheet" href=".././css/estilos.css">
</head>
<body>
    <?php
        $contadorPar = 0;
        $contadorImpar = 0;
        // Bucle para generar los 20 números aleatorios entre 0 y 100
        for ($i = 0; $i < 20; $i++) {
            $num[$i] = rand(0, 100);
            echo "$num[$i] ";
        }

        echo "<br>";
        // Bucle para comprobar si los números son pares o impares y aumentar los contadores; y guardar los pares e impares en arrays distintos
        for ($i = 0; $i < 20; $i++) {
            if ($num[$i] % 2 == 0) {
                $par[$contadorPar] = $num[$i];
                $contadorPar++;
            } else {
                $impar[$contadorImpar] = $num[$i];
                $contadorImpar++;
            }
        }

        // Guardamos todos los números en el mismo array
        for ($i = 0; $i < $contadorPar; $i++) {
          $num[$i] = $par[$i];
        }
        for ($i = $contadorPar; $i < $contadorPar + $contadorImpar; $i++) {
            $num[$i] = $impar[$i - $contadorPar];
        }
        
        // Hacemos una tabla y mostramos el resultado final por pantalla
        echo "<br>Array con los pares e impares al principio y final, respectivamente:<br><br>";
        echo "<table border='1'><tr>";
        // Muestra las posiciones del array
        echo "<td>Posición</td>";
        for ($i = 0; $i < 20; $i++) {
            echo "<td>$i</td>";
        }
        echo "</tr>";
        echo "<tr>";
        echo "<td>Número</td>";
        // Muestra los números en dicha posición
        for ($i = 0; $i < 20; $i++) {
            echo "<td>$num[$i]</td>";
        }
        echo "</tr></table>";
      ?>
    <br>
    <form action="./Ejercicio_7.php">
        <input type="submit" value="Volver a generar y ordenar los números">
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
          <form action="./Ejercicio_6.php">
              <input type="submit" value="Ir al anterior ejercicio">
          </form>
        </td>
        <td>
          <form action="./Ejercicio_8.php">
              <input type="submit" value="Ir al siguiente ejercicio">
          </form>
        </td>
      </tr>
    </table>
</body>
</html>