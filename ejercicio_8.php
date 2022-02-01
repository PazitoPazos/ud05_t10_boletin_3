<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <h3>Ejercicio 8</h3>
        <p>Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien, notable o sobresaliente).</p>
            <form action="ejercicio_8.php" method="post">
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
            $res=($a + $b + $c)/3;
                if ($a == "" || $b == "" || $c == "") {
                    echo "<p>Inserta los valores</p>";
                } elseif ($res >= 9) {
                    echo "<p>Sobresaliente</p>";
                } elseif ($res >= 7 && $res < 9) {
                    echo "<p>Notable</p>";
                } elseif ($res >= 6 && $res < 7) {
                    echo "<p>Bien</p>";
                } elseif ($res >= 5 && $res < 6) {
                    echo "<p>Suficiente</p>";
                } elseif ($res < 5) {
                    echo "<p>Insuficiente</p>";
                }
        ?>
    </body>
</html>