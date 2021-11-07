<!-- Ejercicio 4. Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla separados por espacios.
El programa pedirá entonces por teclado dos valores y a continuación cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.  -->

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización del Ejercicio 4 de Arrays">
        <title>Ejercicio 4</title>
        <link rel="stylesheet" href=".././css/estilos.css">
</head>
<body>
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $numToText = $_POST['numToText'];  
        if (!isset($num1) && !isset($num2)) {
            // Este bucle lo usamos para generar los 100 números aleatorios entre 0 y 20
            for ($i = 0; $i < 100; $i++) {
                $numero[$i] = rand(0, 20);
                echo "$numero[$i] ";
            }
        // Usamos el implode para devolver un string que contiene los valores del array
        $numToText = implode(" ", $numero);
    ?>
        <br><br>
            <form action="#" method="post">
                Número que va a sustituir: <input type="number" name ="num1" autofocus><br><br>
                Número de sustitución: <input type="number" name ="num2"><br>
                <input type="hidden" name="numToText" value="<?php echo $numToText; ?>"><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
        }else{
            // Usamos el explode para poder separar la cadena usando el delimitador "espacio"
            $numero = explode(" ", $numToText);
            //Con el foreach recorremos el array y comprobamos cual es el número buscado para sustituirlo
            foreach ($numero as $num) {
                if ($num == $num1) { 
                    /* Con el style le damos un formato distinto al número introducido y usamos el span porque es un contenedor en línea
                    y así no alteramos la secuencia empresa*/
                    echo "<span style='background-color: yellow;'>$num2</span> ";
                } else {
                    echo  "$num ";
                }
            }
            echo "<br>";
        }
      ?>
    <br>
    <form action="./Ejercicio_4.php">
        <input type="submit" value="Volver a generar y sustituir los números">
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
          <form action="./Ejercicio_3.php">
              <input type="submit" value="Ir al anterior ejercicio">
          </form>
        </td>
        <td>
          <form action="./Ejercicio_6.php">
              <input type="submit" value="Ir al siguiente ejercicio">
          </form>
        </td>
      </tr>
    </table>
</body>
</html>