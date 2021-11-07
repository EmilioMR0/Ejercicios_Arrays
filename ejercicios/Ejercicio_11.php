<!-- Ejercicio 11. Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras.
El programa pedirá una palabra en español y dará la correspondiente traducción en inglés. -->

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización del Ejercicio 11 de Arrays">
        <title>Ejercicio 11</title>
        <link rel="stylesheet" href=".././css/estilos.css">
</head>
<body>
    <?php
        $palabraES = $_POST['palabraES'];
        $traducciones = array ("ordenador" => "computer",
            "nosotros" => "us",      
            "la mayoría" => "most",
            "día" => "day",
            "dar" => "give",
            "porque" => "because",
            "nuevo" => "new",
            "camino" => "way",
            "bebé" => "baby",
            "ahora" => "now",
            "tiempo" => "time",
            "cuando" => "when",
            "ir" => "go",
            "quién" => "who",
            "cohete" => "rocket",
            "fuego" => "fire",
            "rojo" => "red",
            "pato" => "duck",
            "zorro" => "fox",
            "fútbol" => "football",
            "hacer" => "do/make",
            "jugar" => "play");
        if (!isset($palabraES)) {
    ?>
            <form action="#" method="post">
                Introduzca una palabra en Español: <input type="text" name="palabraES" autofocus><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
        }else{
    ?>
            <form action="#" method="post">
                Introduzca una palabra en Español: <input type="text" name="palabraES" autofocus><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
            // Hacemos un foreach para añadir al array las palabras en español del diccionario
            foreach ($traducciones as $clave => $valor) {
                $palabraEnEspanol[] = $clave;
            }
            // Usamos la función in_array para buscar el valor introducido por el usuario en el array, y en caso de que esté mostrarlo por pantalla
            if (in_array($palabraES, $palabraEnEspanol)) {
                echo "$palabraES en inglés es $traducciones[$palabraES]<br><br>";
            } else {
                echo "La palabra introducida no está en el diccionario.";
            }
        }
      ?>
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
          <form action="./Ejercicio_9.php">
              <input type="submit" value="Ir al anterior ejercicio">
          </form>
        </td>
        <td>
          <form action="./Ejercicio_12.php">
              <input type="submit" value="Ir al siguiente ejercicio">
          </form>
        </td>
      </tr>
    </table>
</body>
</html>