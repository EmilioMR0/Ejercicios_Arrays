<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Un índice para acceder a todos los ejercicios realizados">
        <title>Índice de los Ejercicios</title>
        <link rel="stylesheet" href="./css/index.css">
    </head>
    <body>
        <h2>Índice de Ejercicios</h2>
        <hr>
        <details>
            <summary>Ejercicio 1</summary>
            <ul>
                <li>
                Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.<br>
                Carga el array “numero” con valores aleatorios entre 0 y 100.<br>
                En el array “cuadrado” se deben almacenar los cuadrados de los valores que hay en el array “numero”.<br>
                En el array “cubo” se deben almacenar los cubos de los valores que hay en “numero”.<br>
                A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas.
                </li>
            </ul>
            <form action="./ejercicios/Ejercicio_1.php">
                <input type="submit" value="Ir al ejercicio" />
            </form>
        </details>
        <hr>
        <details>
            <summary>Ejercicio 2</summary>
            <ul>
                <li>
                Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto con las palabras “máximo” y “mínimo”
                al lado del máximo y del mínimo respectivamente.
                </li>
            </ul>
            <form action="./ejercicios/Ejercicio_2.php">
                <input type="submit" value="Ir al ejercicio" />
            </form>
        </details>
        <hr>
        <details>
            <summary>Ejercicio 3</summary>
            <ul>
                <li>
                Escribe un programa que lea 15 números por teclado y que los almacene en un array.<br>
                Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a la 2, etc.<br>
                El número que se encuentra en la última posición debe pasar a la posición 0.<br>
                Finalmente, muestra el contenido del array.
                </li>
            </ul>
            <form action="./ejercicios/Ejercicio_3.php">
                <input type="submit" value="Ir al ejercicio" />
            </form>
        </details>
        <hr>
        <details>
            <summary>Ejercicio 4</summary>
            <ul>
                <li>
                Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla separados por espacios.<br>
                El programa pedirá entonces por teclado dos valores y a continuación cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.<br>
                Los números que se han cambiado deben aparecer resaltados de un color diferente.
                </li>
            </ul>
            <form action="./ejercicios/Ejercicio_4.php">
                <input type="submit" value="Ir al ejercicio" />
            </form>
        </details>
        <hr>
        <details>
            <summary>Ejercicio 6</summary>
            <ul>
                <li>
                Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
                pares de un color y los impares de otro.
                </li>
            </ul>
            <form action="./ejercicios/Ejercicio_6.php">
                <input type="submit" value="Ir al ejercicio" />
            </form>
        </details>
        <hr>
        <details>
            <summary>Ejercicio 7</summary>
            <ul>
                <li>
                Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en un array.<br>
                El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
                array (del 0 en adelante) y todos los números impares a las celdas restantes.<br>
                Utiliza arrays auxiliares si es necesario.
                </li>
            </ul>
            <form action="./ejercicios/Ejercicio_7.php">
                <input type="submit" value="Ir al ejercicio" />
            </form>
        </details>
        <hr>
        <details>
            <summary>Ejercicio 8</summary>
            <ul>
                <li>
                Realiza un programa que pida 10 números por teclado y que los almacene en un array.<br>
                A continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una tabla.<br>
                Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto
                de números (los que no son primos) de tal forma que no se pierda ninguno.<br>
                Al final se debe mostrar el array resultante.
                </li>
            </ul>
            <form action="./ejercicios/Ejercicio_8.php">
                <input type="submit" value="Ir al ejercicio" />
            </form>
        </details>
        <hr>
        <details>
            <summary>Ejercicio 9</summary>
            <ul>
                <li>
                Realiza un programa que pida 10 números por teclado y que los almacene en un array.<br>
                A continuación se mostrará el contenido de ese array junto al índice (0 – 9).<br>
                Seguidamente el programa pedirá dos posiciones a las que llamaremos “inicial” y “final”.<br>
                Se debe comprobar que inicial es menor que final y que ambos números están entre 0 y 9.<br>
                El programa deberá colocar el número de la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno.<br>
                Al final se debe mostrar el array resultante.
                </li>
            </ul>
            <form action="./ejercicios/Ejercicio_9.php">
                <input type="submit" value="Ir al ejercicio" />
            </form>
        </details>
        <hr>
        <details>
            <summary>Ejercicio 11</summary>
            <ul>
                <li>
                Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).<br>
                Utiliza un array asociativo para almacenar las parejas de palabras.<br>
                El programa pedirá una palabra en español y dará la correspondiente traducción en inglés.
                </li>
            </ul>
            <form action="./ejercicios/Ejercicio_11.php">
                <input type="submit" value="Ir al ejercicio" />
            </form>
        </details>
        <hr>
        <details>
            <summary>Ejercicio 12</summary>
            <ul>
                <li>
                Realiza un programa que escoja al azar 5 palabras en español del mini-diccionario del ejercicio anterior.<br>
                El programa pedirá que el usuario teclee la traducción al inglés de cada una de las palabras y comprobará si son correctas.<br>
                Al final, el programa deberá mostrar cuántas respuestas son válidas y cuántas erróneas.
                </li>
            </ul>
            <form action="./ejercicios/Ejercicio_12.php">
                <input type="submit" value="Ir al ejercicio" />
            </form>
        </details>
        <hr>
    </body>
</html>