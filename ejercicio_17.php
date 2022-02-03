<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 17</title>
    </head>
    <body>
        <h3>Ejercicio 17</h3>
        <p>Escribe un programa que diga cuál es la primera cifra de un número entero introducido por teclado. Se permiten números de hasta 5 cifras.</p>
            <form action="ejercicio_17.php" method="post">
            <p>
                <p>Número: <input type="text" name="a" size="3" value=""></p>
            </p>
            <p><input type="submit" value="Enviar"></p>
            </form>
        <?php
            $a = $_REQUEST['a'] != "" ? intval($_REQUEST['a']) : "";
            if (!is_int($a)) {
                echo "<p>Introduce un valor entero</p>";
            } elseif (strlen($a) > 5) {
                echo "<p>Sólo números enteros de un máximo de 5 cifras (máx. 99999)</p>";
            } else {
                $splita = str_split($a);
                echo "La primera cifra de $a es: ".$splita[0];
            }
        ?>
    </body>
</html>