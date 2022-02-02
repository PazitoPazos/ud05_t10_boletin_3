<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <h3>Ejercicio 5</h3>
        <p>Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0).</p>
            <form action="ejercicio_5.php" method="post">
            <p>
                <input type="text" name="a" size="1" value="a">x + 
                <input type="text" name="b" size="1" value="b"> = 0<br>
            </p>
            <p><input type="submit" value="Calcular"></p>
            </form>
        <?php
            $a = $_REQUEST['a'];
            $b = $_REQUEST['b'];
                if (!is_numeric($a) || !is_numeric($b)) {
                    echo "<p>Inserta los valores</p>";
                } elseif ($a == 0) {
                    echo "Esa ecuación no tiene solución real.";
                } else {
                    echo "x = ", (-$b / $a);
                }
        ?>
    </body>
</html>