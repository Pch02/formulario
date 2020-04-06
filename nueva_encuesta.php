<html>
<link rel="stylesheet" type="text/css" href="estilos/estilo_encuesta.css">
<head>
    <title>Nueva encuesta</title>
</head>
<body>
    <form class = "bot" METHOD="POST" ACTION="guarda_datos.php">
        <h1>Encuesta de opinión de los/as estudiantes sobre la labor docente del profesorado</h1>
    <h2>Código de la asignatura</h2>
        Titulación
        <input type="number" name="t1" min="0" max="9">
        <input type="number" name="t2" min="0" max="9">
        <input type="number" name="t3" min="0" max="9">
        <input type="number" name="t4" min="0" max="9">
        <br><br>Asignatura
        <input type="number" name="a1" min="0" max="9">
        <input type="number" name="a2" min="0" max="9">
        <input type="number" name="a3" min="0" max="9">
        <br><br>Grupo
        <input type="number" name="g1" min="0" max="9">
        <input type="number" name="g2" min="0" max="9">

    <h2>Información personal y académica de los estudiantes</h2>
        <br>Edad
        <input type="radio" name="ed" value="0" CHECKED>19 o menos
        <input type="radio" name="ed" value="1">20-21
        <input type="radio" name="ed" value="2">22-23
        <input type="radio" name="ed" value="3">24-25
        <input type="radio" name="ed" value="4">más de 25

        <br><br>Sexo
        <input type="radio" name="se" value="0" CHECKED>Hombre
        <input type="radio" name="se" value="1">Mujer

        <br><br>Curso más alto en el que estás matriculado
        <input type="radio" name="cma" value="1" CHECKED>1º
        <input type="radio" name="cma" value="2">2º
        <input type="radio" name="cma" value="3">3º
        <input type="radio" name="cma" value="4">4º
        <input type="radio" name="cma" value="5">5º
        <input type="radio" name="cma" value="6">6º

        <br><br>Curso más bajo en el que estás matriculado
        <input type="radio" name="cmb" value="1" CHECKED>1º
        <input type="radio" name="cmb" value="2">2º
        <input type="radio" name="cmb" value="3">3º
        <input type="radio" name="cmb" value="4">4º
        <input type="radio" name="cmb" value="5">5º
        <input type="radio" name="cmb" value="6">6º

        <br><br>Veces que te has matriculado en esta asignatura
        <input type="radio" name="mat" value="1" CHECKED>1
        <input type="radio" name="mat" value="2">2
        <input type="radio" name="mat" value="3">3
        <input type="radio" name="mat" value="4">más de 3

        <br><br>Veces que te has matinado en esta asignatura
        <input type="radio" name="ex" value="1" CHECKED>1
        <input type="radio" name="ex" value="2">2
        <input type="radio" name="ex" value="3">3
        <input type="radio" name="ex" value="4">más de 3

        <br><br>La asignatura me interesa
        <input type="radio" name="int" value="1" CHECKED>Nada
        <input type="radio" name="int" value="2">Algo
        <input type="radio" name="int" value="3">Bastante
        <input type="radio" name="int" value="4">Mucho

        <br><br>Hago uso de las tutorías
        <input type="radio" name="tut" value="1" CHECKED>Nada
        <input type="radio" name="tut" value="2">Algo
        <input type="radio" name="tut" value="3">Bastante
        <input type="radio" name="tut" value="4">Mucho

        <br><br>Dificultad de esta asignatura
        <input type="radio" name="dif" value="1" CHECKED>Baja
        <input type="radio" name="dif" value="2">Media
        <input type="radio" name="dif" value="3">Alta
        <input type="radio" name="dif" value="4">Muy alta

        <br><br>Calificación esperada
        <input type="radio" name="cal" value="1" CHECKED>Nada
        <input type="radio" name="cal" value="2">Algo
        <input type="radio" name="cal" value="3">Bastante
        <input type="radio" name="cal" value="4">Mucho

        <br><br>Asistencia clase (% de horas lectivas)
        <input type="radio" name="asi" value="1" CHECKED>Nada
        <input type="radio" name="asi" value="2">Algo
        <input type="radio" name="asi" value="3">Bastante
        <input type="radio" name="asi" value="4">Mucho

        <br><br>Código de profesor/a
        <input type="number" name="c1" min="0" max="9">
        <input type="number" name="c2" min="0" max="9">
        <input type="number" name="c3" min="0" max="9">
        <input type="number" name="c4" min="0" max="9">

    <br><br>
    <h2>A continuación se presentan una serie de cuestiones relativas a la docencia en esta asignatura.
    Tu colaboración es necesaria y consiste en señalar en la escala de respuesta tu grado de acuerdo con cada una de las afirmaciones (1 es totalmente en desacuerdo y
    5 totalmente de acuerdo). Si el enunciado no procede o tienes suficiente información, marca con NS.
    </h2>
    <br>
<!--APARTADO 1-->
    <h2>Planificación de la enseñanza y aprendizaje</h2>
        1. El/la profesor/a informa sobre los distintos aspectos de la guia docente o programa de la asignatura (objetivos, actividades, contenidos del temario, metodología, bibliografía, sistemas de evalucación,...)
        <select name="pr1">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>
<!--APARTADO 2-->
    <br>
    <h2>Desarrollo de la docencia</h2>
    <h3>Cumplimiento de las obligaciones docentes (del encargo docente)</h3>
        2. Imparte las clases en el horario fijado
        <select name="pr2">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>3. Asiste regularmente a clase
        <select name="pr3">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr4">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

    <br><h3>Cumplimiento de la planificación</h3>

        5. Se ajusta a la planificación de la asignatura
        <select name="pr5">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>6. Se han coordinado las actividades teóricas y prácticas previstas
            <select name="pr6">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>7. Se ajusta a los sistemas de evaluación especificados en la guía docente/programa de la asignatura
        <select name="pr7">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>8. La bibliografía y otras fuentes de información recomendadas en el programa son útiles para el aprendizaje de la asignatura
        <select name="pr8">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

    <br><h3>Metodología docente</h3>
        9. El/la profesor/a organiza bien las actividades que se realizan en clase
        <select name="pr9">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>10. Utiliza recursos didácticos (pizarra, transparencias, medios audiovisuales, material de apoyo en red virtual,...) que facilitan el aprendizaje
        <select name="pr10">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

    <br><h3>Competencias docentes desarrolladas por el/la profesor/a</h3>

        11. Explica con claridad y resalta los contenidos importantes
        <select name="pr11">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>12. Se interesa por el grado de comprensión de sus explicaciones
        <select name="pr12">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>13. Expone ejemplos en los que se ponen en práctica los contenidos de la asignatura
        <select name="pr13">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>14. Explica los contenidos con seguridad
        <select name="pr14">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>15. Resuelve las dudas que se le plantean
        <select name="pr15">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>16. Fomenta un clima de trabajo y participación
        <select name="pr16">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>17. Propicia una comunicación fluida y espontánea
        <select name="pr17">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>18. Motiva a los/as estudiantes para que se interesen por la asignatura
        <select name="pr18">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>19. Es respetuoso/a en el trato con los/as estudiantes
        <select name="pr19">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

    <br><h3>Sistemas de evaluación</h3>
        20. Tengo claro lo que se me va a exigir para superar esta asignatura
        <select name="pr20">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>21. Los criterios y sistemas de evaluación me parecen adecuados, en el contexto de la asignatura
        <select name="pr21">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

<!--APARTADO 3-->
    <br><h2>Resultados</h2>
        22. Las actividades desarrolladas (teóricas, prácticas, de trabajo individual, en grupo,...) contribuyen a alcanzar los objetivos de la asignatura
        <select name="pr22">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>23. Estoy satisfecho/a con la labor docente de este/a profesor/a
        <select name="pr23">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>
    <br>
    <br>
    <input type="submit" class="boton1" value="Enviar">
    </form>
    <a href="index.php"><button class="inicio">Inicio</button></a>
</body>
</html>
