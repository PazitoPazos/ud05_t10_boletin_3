<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 15</title>
    </head>
    <body>
        <h3>Ejercicio 15</h3>
        <p>Realiza un programa que nos diga si hay probabilidad de que nuestra pareja nos está siendo infiel. El programa irá haciendo preguntas que el usuario contestará con verdadero o falso. Puedes utilizar radio buttons. Cada pregunta contestada como verdadero sumará 3 puntos. Las preguntas contestadas con falso no suman puntos. Utiliza el fichero <a href="https://github.com/LuisJoseSanchez/aprende-php-con-ejercicios/blob/master/soluciones/03_SentenciaCondicional/test_infidelidad.txt">test_infidelidad.txt</a> para obtener las preguntas y las conclusiones del programa.</p>
            <form action="ejercicio_15.php" method="post">
            <p>1. Tu pareja parece estar más inquieta de lo normal sin ningún motivo aparente.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r0" value="s"> Sí <input type="radio" name="r0" value="n"> No</p>
            <p>2. Ha aumentado sus gastos de vestuario.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r1" value="s"> Sí <input type="radio" name="r1" value="n"> No</p>
            <p>3. Ha perdido el interés que mostraba anteriormente por ti.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r2" value="s"> Sí <input type="radio" name="r2" value="n"> No</p>
            <p>4. Ahora se afeita y se asea con más frecuencia (si es hombre) o ahora se arregla el pelo y se asea con más frecuencia (si es mujer).</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r3" value="s"> Sí <input type="radio" name="r3" value="n"> No</p>
            <p>5. No te deja que mires la agenda de su teléfono móvil.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r4" value="s"> Sí <input type="radio" name="r4" value="n"> No</p>
            <p>6. A veces tiene llamadas que dice no querer contestar cuando estás tú delante.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r5" value="s"> Sí <input type="radio" name="r5" value="n"> No</p>
            <p>7. Últimamente se preocupa más en cuidar la línea y/o estar bronceado/a.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r6" value="s"> Sí <input type="radio" name="r6" value="n"> No</p>
            <p>8. Muchos días viene tarde después de trabajar porque dice tener mucho más trabajo.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r7" value="s"> Sí <input type="radio" name="r7" value="n"> No</p>
            <p>9. Has notado que últimamente se perfuma más.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r8" value="s"> Sí <input type="radio" name="r8" value="n"> No</p>
            <p>10. Se confunde y te dice que ha estado en sitios donde no ha ido contigo.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r9" value="s"> Sí <input type="radio" name="r9" value="n"> No</p>
            <p><input type="submit" value="Enviar"></p>
            </form>
        <?php
            $nota = 0;
            for ($i=0; $i < 10; $i++) {
                if (isset($_REQUEST["r$i"])) {
                    if ($_REQUEST["r$i"] == "s") {
                        $nota = $nota + 3;
                    }
                }
            }
            if ($nota >= 0 && $nota <= 10) {
                echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
            } elseif ($nota >= 11 && $nota <= 22) {
                echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
            } elseif ($nota >= 23 && $nota <= 30) {
                echo "Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.";
            } else {
                echo "";
            }
        ?>
    </body>
</html>