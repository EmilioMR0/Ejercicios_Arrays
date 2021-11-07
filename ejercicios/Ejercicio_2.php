<!-- Ejercicio 2. Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto con las palabras “máximo” y “mínimo”
al lado del máximo y del mínimo respectivamente. -->

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización del Ejercicio 2 de Arrays">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" href=".././css/estilos.css">
</head>
<body>
    <?php
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
                <input type="hidden" name="numToText" value="<?php echo "$numToText $num"; ?>"><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
    //Este echo es para comprobar si el contador funciona
    echo "Lleva $contador números introducidos<br>";
        }else if ($contador < 10){
    ?>
            <form action="#" method="post">
                Introduzca 10 números: <input type="number" name="num" autofocus><br>
                <input type="hidden" name="contador" value="<?php echo ++$contador; ?>"><br>
                <input type="hidden" name="numToText" value="<?php echo $numToText; ?>"><br>
                <input type="hidden" name="numToText" value="<?php echo "$numToText $num"; ?>"><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
    //Este echo es para comprobar si el contador funciona
    echo "Lleva $contador números introducidos<br>";
        }
        if ($contador == 10) {
            // Con esta primera variable añadimos el último número que se ha leído
            $numToText = "$numToText $num";
            // Con este substring quitamos los espacios sobrantes
            $numToText = substr($numToText, 2);
            // Creamos una nueva variable y usamos el explode para poder separar la cadena usando el delimitador "espacio"
            $cadenaNumero = explode(" ", $numToText);

            // A estas variables les asignamos constantes para poder compararlas posteriormente con los números
            $minimo = PHP_INT_MAX;
            $maximo = -PHP_INT_MAX;
            
            // En este foreach le asignamos a las variables mínimo y máximo el número correspondiente
            foreach ($cadenaNumero as $num) {
                if ($num < $minimo) {
                  $minimo = $num;
                }
                if ($num > $maximo) {
                  $maximo = $num;
                }
            } 
            // Este foreach es para imprimir la respuesta por pantalla
            foreach ($cadenaNumero as $num) {
                if ($num == $minimo) {
                  echo "$num mínimo<br>";
                } else if ($num == $maximo) {
                  echo "$num máximo<br>";
                } else {
                  echo "$num<br>";
                }
            }
        }
      ?>
    <br>
    <form action="./Ejercicio_2.php">
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
          <form action="./Ejercicio_1.php">
              <input type="submit" value="Ir al anterior ejercicio">
          </form>
        </td>
        <td>
          <form action="./Ejercicio_3.php">
              <input type="submit" value="Ir al siguiente ejercicio">
          </form>
        </td>
      </tr>
    </table>
</body>
</html>