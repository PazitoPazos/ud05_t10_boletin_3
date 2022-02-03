<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 14</title>
    </head>
    <body>
        <h3>Ejercicio 14</h3>
        <p>Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5.</p>
            <form action="ejercicio_14.php" method="post">
            <p>
                <p>Número: <input type="text" name="a" size="1" value=""></p>
            </p>
            <p><input type="submit" value="Enviar"></p>
            </form>
        <?php
            $a = $_REQUEST['a'] != "" ? intval($_REQUEST['a']) : "";
            if (!is_int($a)) {
                echo "<p>Introduce un valor entero</p>";
            } elseif ($a % 5 == 0) {
                echo "<p>El número $a es divisible entre 5</p>";
            } else {
                echo "<p>El número $a no es divisible entre 5</p>";
            }
        ?>
    </body>
</html>