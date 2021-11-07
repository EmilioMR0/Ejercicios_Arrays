<!-- Ejercicio 1. Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100.
En el array “cuadrado” se deben almacenar los cuadrados de los valores que hay en el array “numero”.
En el array “cubo” se deben almacenar los cubos de los valores que hay en “numero”.
A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas. -->

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización del Ejercicio 1 de Arrays">
        <title>Ejercicio 1</title>
        <link rel="stylesheet" href=".././css/estilos.css">
</head>
<body>
    <?php
        // Realizamos este bucle para sacar de manera aleatoria los 20 números de los Arrays
        for ($i = 0; $i < 20; $i++) {
            $numero[] = rand(0,100);
        }
        // Aquí usamos el foreach para que se recorra el array y almacene los cuadrados y los cubos que hay en el array número
        foreach ($numero as $valores) {
            // Usamos la función pow para elevar al cuadrado y al cubo el número generado
            $cuadrado[] = pow($valores,2);
            $cubo[] = pow($valores,3);
        }
    ?>
    <!-- Aquí empezamos a hacer la tabla para poder poner los números en las columnas como se nos pide -->
        <table border="1" id="tablaEj1">
        <tr>
            <td>Número</td>
            <td>Cuadrado</td>
            <td>Cubo</td>
        </tr>
    <?php
        // En este bucle imprimimos por pantalla los números aleatorios con sus cuadrados y cubos en sus respectivas columnas
        for ($i = 0; $i < 20; $i++) {
            echo "<tr><td>$numero[$i]</td>";
            echo "<td>$cuadrado[$i]</td>";
            echo "<td>$cubo[$i]</td></tr>";
        }
    ?>
        </table>
    <br>
    <br>
    <!-- Hacemos dos botones para que se haga más ameno el navegar entre los ejercicios -->
    <form action="../index.php">
        <input type="submit" value="Volver a la página principal">
    </form>
    <form action="./Ejercicio_2.php">
        <input type="submit" value="Ir al siguiente ejercicio">
    </form>
</body>
</html>