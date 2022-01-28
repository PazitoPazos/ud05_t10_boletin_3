<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h3>Ejercicio 4</h3>
        <p>Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se pagan a 16 euros la hora.</p>
        <form action="ejercicio_4.php" method="post">
            <p>Horas trabajadas: 
                <input type="text" name="num1" />
            </p>
            <p>
                <input type="submit" value="Calcular" />
            </p>
        </form>
        <?php
            $horas=$_REQUEST["num1"];
            if ($horas >= 0 && $horas <= 40) {
                $sueldo=$horas * 12;
                echo "El salario semanal es de: ".$sueldo."€";
            } elseif ($horas > 40) {
                $sueldo= 40 * 12;
                $extras= ($horas - 40) * 16;
                $total= $sueldo + $extras;
                echo "El salario semanal es de: ".$total."€";
            }
            
        ?>
    </body>
</html>