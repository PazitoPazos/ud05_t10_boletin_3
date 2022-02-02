<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 9</title>
    </head>
    <body>
        <h3>Ejercicio 9</h3>
        <p>Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax2 + bx + c = 0).</p>
            <form action="ejercicio_9.php" method="post">
            <p>
                <p><input type="text" name="a" size="1" value="a">x^2+<input type="text" name="b" size="1" value="b">x+<input type="text" name="c" size="1" value="c"> = 0</p>
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
                $inta = intval($a);
                $intb = intval($b);
                $intc = intval($c);
                $resp=(-($intb)+sqrt(pow($intb,2)-(4*$inta*$intc)))/(2*$inta);
                $resn=(-($intb)-sqrt(pow($intb,2)-(4*$inta*$intc)))/(2*$inta);
                echo "<p>x = ".round($resp,2)." || ".round($resn,2)."</p>";
            }  
        ?>
    </body>
</html>