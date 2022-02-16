<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 19</title>
    </head>
    <body>
        <h3>Ejercicio 19</h3>
        <p>Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa. Se permiten números de hasta 5 cifras.</p>
            <form action="ejercicio_19.php" method="post">
            <p>
                <p>Número: <input type="text" name="a" size="3" value=""></p>
            </p>
            <p><input type="submit" value="Enviar"></p>
            </form>
        <?php
            $a = $_REQUEST['a'] != "" ? intval($_REQUEST['a']) : "";
            $splita = str_split($a);
            $ar = implode(array_reverse($splita));
            if (!is_int($a)) {
                echo "<p>Introduce un valor entero</p>";
            } elseif (strlen($a) > 5 || $a < 0) {
                echo "<p>Sólo números enteros positivos de un máximo de 5 cifras (máx. 99999)</p>";
            } elseif ($a == $ar) {
                echo "<p>El número $a es capicúa</p>";
            } else {
                echo "<p>El número $a no es capicúa</p>";
            }
        ?>
    </body>
</html>