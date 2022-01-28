<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <h3>Ejercicio 2</h3>
        <p>Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.</p>
        <form action="ejercicio_2.php" method="post">
            <p>Hora: <input type="text" name="hour" /></p>
            <p><input type="submit" value="Enviar" /></p>
        </form>
        <?php
        $hora=$_REQUEST['hour'];
            if ($hora == "") {
                echo "<p>Introduce una hora [0-23]</p>";
            } elseif ($hora >= 6 && $hora <= 12) {
                echo "<p>Buenos días!</p>";
            } elseif ($hora >= 13 && $hora <= 20) {
                echo "<p>Buenas tardes!</p>";
            } elseif (($hora >= 0 && $hora <= 5) || ($hora >= 21 && $hora <= 23)) {
                echo "<p>Buenas noches!</p>";
            } else {
                echo "<p>Introduce una hora [0-23]</p>";
            }
        ?>
    </body>
</html>