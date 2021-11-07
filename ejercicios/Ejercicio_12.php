<!-- Ejercicio 12. Realiza un programa que escoja al azar 5 palabras en español del mini-traducciones del ejercicio anterior.
El programa pedirá que el usuario teclee la traducción al inglés de cada una de las palabras y comprobará si son correctas.
Al final, el programa deberá mostrar cuántas respuestas son válidas y cuántas erróneas. -->

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización del Ejercicio 12 de Arrays">
        <title>Ejercicio 12</title>
        <link rel="stylesheet" href=".././css/estilos.css">
</head>
<body>
    <?php
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

// ================================================= PRIMER INTENTO =================================================

        /*if (!isset($palabraES)) {
    ?>
            <form action="#" method="post">
                Introduzca la palabra en Inglés: <input type="text" name="palabraEN" autofocus><br>
                <input type="hidden" name="contador" value="<?php echo ++$contador; ?>"><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
        }else{
            do {
                $palabraES = $palabraEnEspanol[rand(0, 22)];
                if (!in_array($palabra, $espanol)) {
                    $espanol[] = $palabraES;
                    $contador++;
                }
            }while($contador < 5){
    ?>
            <form action="#" method="post">
                Introduzca la palabra en Inglés: <input type="text" name="palabraES" autofocus><br>
                <input type="hidden" name="contador" value="<?php echo $contador; ?>"><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
            }
            // Hacemos un foreach para que al array las palabras en español del traducciones
            foreach ($traducciones as $clave => $valor) {
                $palabraEnEspanol[] = $clave;
            }
        }*/

// ================================================= SEGUNDO INTENTO =================================================

        /*if (!isset($_POST['espanol'])) {
            echo "Por favor, introduzca la traducción al inglés de las siguientes palabras.<br>";
        
            // Extrae las palabras españolas
            foreach ($traducciones as $clave => $valor) {
                $palabraEnEspanol[] = $clave;
            }
        
            // Elige 5 palabras en español sin que se repita ninguna
            $contador = 0;
            do {
                $palabra = $palabraEnEspanol[rand(0, 22)];
                if (!in_array($palabra, $espanol)) {
                    $espanol[] = $palabra;
                    $contador++;
                }
            }while ($contador < 5);
        
                echo '<form action="#" method="post">';

                for ($i = 0; $i < 5; $i++) {
                    echo $espanol[$i]." ";
                    echo '<input type="hidden" name="espanol['.$i.']" value="'.$espanol[$i].'">';
                    echo '<input type="text" name="ingles['.$i.']" ><br>';
                }
                echo '<input type="submit" value="Aceptar">';
                echo '</form>';
        }else {
                $espanol = $_POST['espanol'];
                $ingles = $_POST['ingles'];
        
            for ($i = 0; $i < 5; $i++) {
                if ($traducciones[$espanol[$i]] == $ingles[$i]) {
                    echo '<span style="color: green;">'.$espanol[$i].": ".$ingles[$i];
                    echo " - correcto</span><br>";
                }else {
                    echo '<span style="color: red;">'.$espanol[$i].": ".$ingles[$i];
                    echo " - incorrecto</span>, la respuesta correcta es <b>".$traducciones[$espanol[$i]]."</b><br>";
                }
            }
        }*/
      ?>
    <br>
    <br>
    <!-- Hacemos dos botones para que se haga más ameno el navegar entre los ejercicios -->
    <table>
      <tr>
        <td>
          <form action="../index.php">
              <input type="submit" value="Volver a la página principal">
          </form>
        </td>
      </tr>
      <tr>
        <td>
          <form action="./Ejercicio_11.php">
              <input type="submit" value="Ir al anterior ejercicio">
          </form>
        </td>
      </tr>
    </table>
</body>
</html>