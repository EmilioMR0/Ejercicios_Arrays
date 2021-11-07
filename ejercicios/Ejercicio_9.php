<!-- Ejercicio 9. Realiza un programa que pida 10 números por teclado y que los almacene en un array.
A continuación se mostrará el contenido de ese array junto al índice (0 – 9).
Seguidamente el programa pedirá dos posiciones a las que llamaremos “inicial” y “final”.
Se debe comprobar que inicial es menor que final y que ambos números están entre 0 y 9.
El programa deberá colocar el número de la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno.
Al final se debe mostrar el array resultante.  -->

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización del Ejercicio 9 de Arrays">
        <title>Ejercicio 9</title>
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
        if ($contador == 10){
    ?>
            <form action="#" method="post">
                Introduzca la posición inicial: <input type="number" name="inicial" autofocus><br>
                Introduzca la posición final: <input type="number" name="final"><br>
                <input type="hidden" name="contador" value="<?php echo ++$contador; ?>"><br>
                <input type="hidden" name="numToText" value="<?php echo $numToText; ?>"><br>
                <input type="submit" value="Enviar">
    <?php
        }
        if ($contador == 11) {
            /*if (($inicial >= $final) || ($inicial < 0) || ($final < 0) || ($inicial > 9) || ($final > 9)) {
                echo "Introduzca los valores de manera que el inicial es menor que el final y que ambos números están entre 0 y 9";
                echo "<br>$inicial $final";
            } else {*/
                $numero = explode(" ", $numToText);
                echo "Array original:<br>";
                echo "<table border='1'><tr>";
                echo "<td>Posición</td>";
                for ($i = 0; $i < 10; $i++) {
                    echo "<td>$i</td>";
                }
                echo "</tr>";
                echo "<tr>";
                echo "<td>Número</td>";
                for ($i = 0; $i < 10; $i++) {
                    echo "<td>$numero[$i]</td>";
                }
                echo "</tr></table>";
            
           // Realizamos la rotación mediante dos bucles for y usando variables auxiliares para ayudarnos a ello
                $aux = $numero[9];
                for ($i = 9; $i > $final; $i--) {
                    $numero[$i] = $numero[$i - 1];
                }

                $numero[$final] = $numero[$inicial];
                for ($i = $inicial; $i > 0; $i--) {
                    $numero[$i] = $numero[$i - 1];
                }
                $numero[0] = $aux;
            
            
            // Mostramos el array con las posiciones ya cambiadas
                echo "<br>Array resultante:<br>";
                echo "<table border='1'><tr>";
                echo "<td>Posición</td>";
                for ($i = 0; $i < 10; $i++) {
                    echo "<td>$i</td>";
                }
                echo "</tr>";
                echo "<tr>";
                echo "<td>Número</td>";
                for ($i = 0; $i < 10; $i++) {
                    echo "<td>$numero[$i]</td>";
                }
                echo "</tr></table>";      
            //}
        }
      ?>
    <br>
    <form action="./Ejercicio_9.php">
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
          <form action="./Ejercicio_8.php">
              <input type="submit" value="Ir al anterior ejercicio">
          </form>
        </td>
        <td>
          <form action="./Ejercicio_11.php">
              <input type="submit" value="Ir al siguiente ejercicio">
          </form>
        </td>
      </tr>
    </table>
</body>
</html>