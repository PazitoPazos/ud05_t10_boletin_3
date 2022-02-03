<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 18</title>
    </head>
    <body>
        <h3>Ejercicio 18</h3>
        <p>Realiza un programa que nos diga cuántos dígitos tiene un número entero que puede ser positivo o
        negativo. Se permiten números de hasta 5 dígitos.</p>
            <form action="ejercicio_18.php" method="post">
            <p>
                <p>Número: <input type="text" name="a" size="3" value=""></p>
            </p>
            <p><input type="submit" value="Enviar"></p>
            </form>
        <?php
            $a = $_REQUEST['a'] != "" ? intval($_REQUEST['a']) : "";
            if (!is_int($a)) {
                echo "<p>Introduce un valor entero</p>";
            } elseif (strlen(abs($a)) > 5) {
                echo "<p>Sólo números enteros de un máximo de 5 cifras (máx. 99999)</p>";
            } else {
                echo "<p>El número $a tiene ".strlen(abs($a))." cifras.</p>";
            }
        ?>
    </body>
</html>