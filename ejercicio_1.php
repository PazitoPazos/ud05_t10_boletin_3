<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h3>Ejercicio 1</h3>
        <p>Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
primera hora ese día.</p>
        <form action="ejercicio_1.php" method="post">
            <p>Día de la semana: <input type="text" name="day" /></p>
            <p><input type="submit" value="Enviar" /></p>
        </form>
        <?php
            switch($_REQUEST["day"]){
                case "Lunes":
                    echo "<p>IAW</p>";
                    break;
                case "Martes":
                    echo "<p>SAD</p>";
                    break;
                case "Miércoles":
                    echo "<p>ASX</p>";
                    break;
                case "Jueves":
                        echo "<p>ASX</p>";
                        break;
                case "Viernes":
                        echo "<p>IAW</p>";
                        break;
                default:
                        echo "<p>Introduce un día de la semana [Lunes/Martes/Miércoles/Jueves/Viernes]</p>";
                }
        ?>
    </body>
</html>