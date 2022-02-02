<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <h3>Ejercicio 7</h3>
        <p>Realiza un programa que calcule la media de tres notas.</p>
            <form action="ejercicio_7.php" method="post">
            <p>
                <p>Nota 1: <input type="text" name="a" size="1"></input></p>
                <p>Nota 2: <input type="text" name="b" size="1"></input></p>
                <p>Nota 3: <input type="text" name="c" size="1"></input></p>
            </p>
            <p><input type="submit" value="Calcular"></p>
            </form>
        <?php
            $a = $_REQUEST['a'];
            $b = $_REQUEST['b'];
            $c = $_REQUEST['c'];
                if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
                    echo "<p>Inserta los valores</p>";
                } else {
                    $res=($a + $b + $c)/3;
                    echo "<p>La media es: $res</p>";
                }
        ?>
    </body>
</html>