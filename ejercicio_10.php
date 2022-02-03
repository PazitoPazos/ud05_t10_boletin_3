<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <h3>Ejercicio 10</h3>
        <p>Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento</p>
            <form action="ejercicio_10.php" method="post">
            <p>
                <p>Día: <input type="text" name="d" size="1"> Mes: <input type="text" name="m" size="1"></p>
            </p>
            <p><input type="submit" value="Calcular"></p>
            </form>
        <?php
            $d = $_REQUEST["d"];
            $m = $_REQUEST["m"];

            if (!is_numeric("$d") && !is_numeric("$m")) {
                echo "<p>Inserta el día y mes</p>";
            } else {
                switch ($m) {
                    case '1':
                            if ($d >= 21) {
                                echo "Eres Acuario";
                            } else {
                                echo "Eres Capricornio";
                            }
                        break;
                    
                    case '2':
                        if ($d >= 20) {
                            echo "Eres Piscis";
                        } else {
                            echo "Eres Acuario";
                        }
                        break;
    
                    case '3':
                        if ($d >= 21) {
                            echo "Eres Aries";
                        } else {
                            echo "Eres piscis";
                        }
                        break;
    
                    case '4':
                        if ($d >= 20) {
                            echo "Eres Tauro";
                        } else {
                            echo "Eres Aries";
                        }
                        break;
    
                    case '5':
                        if ($d >= 21) {
                            echo "Eres Géminis";
                        } else {
                            echo "Eres Tauro";
                        }
                        break;
    
                    case '6':
                        if ($d >= 21) {
                            echo "Eres Cáncer";
                        } else {
                            echo "Eres Géminis";
                        }
                        break;
    
                    case '7':
                        if ($d >= 23) {
                            echo "Eres Leo";
                        } else {
                            echo "Eres Cáncer";
                        }
                        break;
    
                    case '8':
                        if ($d >= 23) {
                            echo "Eres Virgo";
                        } else {
                            echo "Eres Leo";
                        }
                        break;
    
                    case '9':
                        if ($d >= 23) {
                            echo "Eres Libra";
                        } else {
                            echo "Eres Virgo";
                        }
                        break;
    
                    case '10':
                        if ($d >= 23) {
                            echo "Eres Escorpio";
                        } else {
                            echo "Eres Libra";
                        }
                        break;
                        
                    case '11':
                        if ($d >= 22) {
                            echo "Eres Sagitario";
                        } else {
                            echo "Eres Escorpio";
                        }
                        break;
                    
                    case '12':
                        if ($d >= 22) {
                            echo "Eres Capricornio";
                        } else {
                            echo "Eres Sagitario";
                        }
                        break;
    
                    default:
                            echo "El mes $m no es válido";
                        break;
                }
            }
        ?>
    </body>
</html>