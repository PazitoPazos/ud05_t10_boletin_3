<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <h3>Ejercicio 6</h3>
        <p>Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. Aplica la fórmula t = √2h/g siendo g = 9.81m/s^2.</p>
            <form action="ejercicio_6.php" method="post">
            <p>
                <p>t = &#8730;2<input type="text" name="h" size="1" value="h">/g</p>
            </p>
            <p><input type="submit" value="Calcular"></p>
            </form>
        <?php
            $g = 9.81;
            $a = $_REQUEST['h'];
                if ($a == "") {
                    echo "<p>Inserta los valores</p>";
                } elseif ($a == 0) {
                    echo "<p>Esa ecuación no tiene solución real.</p>";
                } else {
                    echo "t = ", (sqrt((2*$a)/9.81)), " s";
                }
        ?>
    </body>
</html>