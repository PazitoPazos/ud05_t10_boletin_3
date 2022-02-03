<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 16</title>
    </head>
    <body>
        <h3>Ejercicio 16</h3>
        <p>Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado.</p>
            <form action="ejercicio_16.php" method="post">
            <p>
                <p>Número: <input type="text" name="a" size="1" value=""></p>
            </p>
            <p><input type="submit" value="Enviar"></p>
            </form>
        <?php
            $a = $_REQUEST['a'] != "" ? intval($_REQUEST['a']) : "";
            if (!is_int($a)) {
                echo "<p>Introduce un valor entero</p>";
            } else {
                $splita = str_split($a);
                echo "La última cifra de $a es: ".end($splita);
            }
        ?>
    </body>
</html>