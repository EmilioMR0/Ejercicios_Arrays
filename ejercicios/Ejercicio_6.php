<!-- Ejercicio 6. Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los pares de un color y los impares de otro. -->

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización del Ejercicio 6 de Arrays">
        <title>Ejercicio 6</title>
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
                Introduzca 8 números: <input type="number" name="num" autofocus><br>
                <input type="hidden" name="contador" value="<?php echo $contador; ?>"><br>
                <input type="hidden" name="numToText" value="<?php echo $numToText; ?>"><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
    //Este echo es para comprobar si el contador funciona
    echo "Lleva $contador números introducidos<br>";
        }else if ($contador < 8){
            // Con este if añadimos el último número que se ha leído
            if ($numToText == "") {
                $numToText = $num;
            } else {
                $numToText = "$numToText $num";
            }
    ?>
            <form action="#" method="post">
                Introduzca 8 números: <input type="number" name="num" autofocus><br>
                <input type="hidden" name="contador" value="<?php echo ++$contador; ?>"><br>
                <input type="hidden" name="numToText" value="<?php echo $numToText; ?>"><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
    //Este echo es para comprobar si el contador funciona
    echo "Lleva $contador números introducidos<br>";
        }
        // Mostramos el estilo que le vamos a dar a los pares e impares
        echo "<span style='color: #AD4B7F; font-weight: bolder;'><br>Color números Pares<br></span>";
        echo "<span style='color: #A36F46; font-weight: bolder;'>Color números Impares</span><br>";
        if ($contador == 8) {
            // Creamos una nueva variable y usamos el explode para poder separar la cadena usando el delimitador "espacio"
            $numero = explode(" ", $numToText);
            // Hacemos el foreach para que recorra el array y con el if poder ver cual es par y cual es impar
            foreach ($numero as $num) {
                if ($num % 2 == 0) {
                    echo "<span style='color: #AD4B7F; font-weight: bolder;'>$num&nbsp;&nbsp;</span>";
                } else {
                    echo "<span style='color: #A36F46; font-weight: bolder;'>$num&nbsp;&nbsp;</span>";
                }
            }
        }
      ?>
    <br>
    <form action="./Ejercicio_6.php">
        <input type="submit" value="Volver a introducir 8 números">
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
          <form action="./Ejercicio_4.php">
              <input type="submit" value="Ir al anterior ejercicio">
          </form>
        </td>
        <td>
          <form action="./Ejercicio_7.php">
              <input type="submit" value="Ir al siguiente ejercicio">
          </form>
        </td>
      </tr>
    </table>
</body>
</html>