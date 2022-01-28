<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <h3>Ejercicio 3</h3>
        <p>Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día
de la semana.</p>
        <form action="ejercicio_3.php" method="post">
            <p>Número del día de la semana: <input type="text" name="num_dia" /></p>
            <p><input type="submit" value="Enviar" /></p>
        </form>
        <?php
        $num_dia=$_REQUEST['num_dia'];
            switch($num_dia){
                case "1":
                    echo "<p>Lunes</p>";
                    break;
                case "2":
                    echo "<p>Martes</p>";
                    break;
                case "3":
                    echo "<p>Miércoles</p>";
                    break;
                case "4":
                        echo "<p>Jueves</p>";
                        break;
                case "5":
                        echo "<p>Viernes</p>";
                        break;
                case "6":
                        echo "<p>Sábado</p>";
                        break;
                case "7":
                        echo "<p>Domingo</p>";
                        break;
                default:
                        echo "<p>Introduce un día de la semana [1-7]</p>";
                }
        ?>
    </body>
</html>