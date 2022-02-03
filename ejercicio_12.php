<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 12</title>
    </head>
    <body>
        <h3>Ejercicio 12</h3>
        <p>Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan de conocimientos en las diferentes asignaturas del curso.</p>
        <form action="ejercicio_12.php" method="post">
            <p>1. Pregunta: A</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Respuesta: 
                <input type="radio" name="r0" value="a"> A
                <input type="radio" name="r0" value="b"> B
                <input type="radio" name="r0" value="c"> C
            </p>
            <p>2. Pregunta: B</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Respuesta: 
                <input type="radio" name="r1" value="a"> A
                <input type="radio" name="r1" value="b"> B
                <input type="radio" name="r1" value="c"> C
            </p>
            <p>3. Pregunta: C</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Respuesta: 
                <input type="radio" name="r2" value="a"> A
                <input type="radio" name="r2" value="b"> B
                <input type="radio" name="r2" value="c"> C
            </p>
            <p>4. Pregunta: D</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Respuesta: 
                <input type="radio" name="r3" value="a"> A
                <input type="radio" name="r3" value="b"> B
                <input type="radio" name="r3" value="c"> C
            </p>
            <p>5. Pregunta: E</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Respuesta: 
                <input type="radio" name="r4" value="a"> A
                <input type="radio" name="r4" value="b"> B
                <input type="radio" name="r4" value="c"> C
            </p>
            <p>6. Pregunta: F</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Respuesta: 
                <input type="radio" name="r5" value="a"> A
                <input type="radio" name="r5" value="b"> B
                <input type="radio" name="r5" value="c"> C
            </p>
            <p>7. Pregunta: G</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Respuesta: 
                <input type="radio" name="r6" value="a"> A
                <input type="radio" name="r6" value="b"> B
                <input type="radio" name="r6" value="c"> C
            </p>
            <p>8. Pregunta: H</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Respuesta: 
                <input type="radio" name="r7" value="a"> A
                <input type="radio" name="r7" value="b"> B
                <input type="radio" name="r7" value="c"> C
            </p>
            <p>9. Pregunta: I</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Respuesta: 
                <input type="radio" name="r8" value="a"> A
                <input type="radio" name="r8" value="b"> B
                <input type="radio" name="r8" value="c"> C
            </p>
            <p>10. Pregunta: J</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Respuesta: 
                <input type="radio" name="r9" value="a"> A
                <input type="radio" name="r9" value="b"> B
                <input type="radio" name="r9" value="c"> C
            </p>
            <p><input type="submit" value="Enviar"></p>
            <?php
                $r = ["a","b","a","c","c","b","a","b","c","a"];
                $nota = 0;
                for ($i=0; $i < 10; $i++) {
                    if (isset($_REQUEST["r$i"])) {
                        if ($_REQUEST["r$i"] == $r[$i]) {
                            echo "<p>($i) Respuesta correcta (+1p)</p>";
                            $nota = $nota + 1;
                        } else {
                            echo "<p>($i) Respuesta incorrecta (-0,5p)</p>";
                            $nota = $nota - 0.5;
                        }
                    }
                }
                echo "La nota es: $nota";
            ?>
        </form>
    </body>
</html>