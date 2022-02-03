<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 13</title>
    </head>
    <body>
        <h3>Ejercicio 13</h3>
        <p>Escribe un programa que ordene tres números enteros introducidos por teclado.</p>
            <form action="ejercicio_13.php" method="post">
            <p>
                <p>Número 1: <input type="text" name="a" size="1" value=""></p>
                <p>Número 2: <input type="text" name="b" size="1" value=""></p>
                <p>Número 3: <input type="text" name="c" size="1" value=""></p>
            </p>
            <p><input type="submit" value="Enviar"></p>
            </form>
        <?php
            $a = $_REQUEST['a'] != "" ? intval($_REQUEST['a']) : "";
            $b = $_REQUEST['b'] != "" ? intval($_REQUEST['b']) : "";
            $c = $_REQUEST['c'] != "" ? intval($_REQUEST['c']) : "";
            if (!is_int($a) || !is_int($b) || !is_int($c)) {
                echo "<p>Introduce tres valores enteros</p>";
            } else {
                echo "<p>Números ($a / $b / $c)</p>";
            }
        ?>
    </body>
</html>