<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 11</title>
    </head>
    <body>
        <h3>Ejercicio 11</h3>
        <p>Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que faltan para llegar a la medianoche.</p>
            <form action="ejercicio_11.php" method="post">
            <p>
                <p>Hora: <input type="text" name="h" size="1"> Minutos: <input type="text" name="m" size="1"></p>
            </p>
            <p><input type="submit" value="Calcular"></p>
            </form>
        <?php
            $h = $_REQUEST['h'];
            $m = $_REQUEST['m'];
            $s = ($h*3600) + ($m*60);
            $md = 24*3600;
            if (!is_numeric($h) || !is_numeric($m)) {
                echo "<p>Inserta los valores</p>";
            } else {
                echo "<p>Quedan ".-($s-$md)." segundos hasta media noche</p>";
            }  
        ?>
    </body>
</html>