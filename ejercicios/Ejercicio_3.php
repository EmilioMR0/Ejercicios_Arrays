<!-- Ejercicio 3. Escribe un programa que lea 15 números por teclado y que los almacene en un array.
Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a la 2, etc.
El número que se encuentra en la última posición debe pasar a la posición 0.
Finalmente, muestra el contenido del array. -->

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización del Ejercicio 3 de Arrays">
        <title>Ejercicio 3</title>
        <link rel="stylesheet" href=".././css/estilos.css">
</head>
<body>
    <?php
    // Para realizar el código de éste ejercicio vamos a reutilizar un poco de código del ejercicio anterior, como variables y formulario
        $num = $_POST['num'];
        $contador = $_POST['contador'];
        $numToText = $_POST['numToText'];   
        if (!isset($num)) {
            $contador = 0;
            $numToText = "";
    ?>
            <form action="#" method="post">
                Introduzca 15 números: <input type="number" name="num" autofocus><br>
                <input type="hidden" name="contador" value="<?php echo $contador; ?>"><br>
                <input type="hidden" name="numToText" value="<?php echo "$numToText $num"; ?>"><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
    //Este echo es para comprobar si el contador funciona
    echo "Lleva $contador números introducidos<br>";
        }else if ($contador < 15){
    ?>
            <form action="#" method="post">
                Introduzca 15 números: <input type="number" name="num" autofocus><br>
                <input type="hidden" name="contador" value="<?php echo ++$contador; ?>"><br>
                <input type="hidden" name="numToText" value="<?php echo $numToText; ?>"><br>
                <input type="hidden" name="numToText" value="<?php echo "$numToText $num"; ?>"><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
    //Este echo es para comprobar si el contador funciona
    echo "Lleva $contador números introducidos<br>";
        }
        if ($contador == 15) {
            // Con esta primera variable añadimos el último número que se ha leído
            $numToText = "$numToText $num";
            // sCon este substring quitamos los espacios sobrantes
            $numToText = substr($numToText, 2);
            // Creamos una nueva variable y usamos el explode para poder separar la cadena usando el delimitador "espacio"
            $numero = explode(" ", $numToText);
        
            echo "<br>Array introducido<br><br>";
            // Creamos una tabla para que el programa tenga una mejor presentación
            echo "<table border='1'><tr>";
            echo "<td>Posición</td>";
            // Este primer array es para mostrar en la posición en la que está el número que ha introducido el usuario
            for ($i = 0; $i < 15; $i++) {
              echo "<td>$i</td>";
            }
        
            echo "</tr>";
            echo "<tr>";
            echo "<td>Número</td>";
            // Este segundo array es para mostrar el número que ha introducido el usuario
            for ($i = 0; $i < 15; $i++) {
              echo "<td>$numero[$i]</td>";
            }
        
            echo "</tr></table>";
            // A través de la variable auxiliar cambiaremos las posiciones del último número del array al primer número del mismo
            $aux = $numero[14];
            // Este for es para rotar los elementos del array un espacio hacia la derecha
            for ($i = 14; $i > 0; $i--) {
               $numero[$i] = $numero[$i - 1];
            }
            // Después de realizar las rotaciones ponemos en la primera posición el último número del array original
            $numero[0] = $aux;
        
            echo "<br>Array rotado 1 espacio a la derecha<br><br>";
            // Creamos una tabla para que el programa tenga una mejor presentacións
            echo "<table border='1'><tr>";
            echo "<td>Posición</td>";
            // Este primer bucle es para mostrar en la posición en la que está el número que ha introducido el usuario
            for ($i = 0; $i < 15; $i++) {
              echo "<td>$i</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<td>Número</td>";
            // Este segundo bucle es para mostrar el número que ha introducido el usuario
            for ($i = 0; $i < 15; $i++) {
              echo "<td>$numero[$i]</td>";
            }
            
            echo "</tr></table>"; 
          }
      ?>
    <br>
    <form action="./Ejercicio_3.php">
        <input type="submit" value="Volver a introducir 15 números">
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
          <form action="./Ejercicio_2.php">
              <input type="submit" value="Ir al anterior ejercicio">
          </form>
        </td>
        <td>
          <form action="./Ejercicio_4.php">
              <input type="submit" value="Ir al siguiente ejercicio">
          </form>
        </td>
      </tr>
    </table>
</body>
</html>