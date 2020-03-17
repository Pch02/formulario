<html>
<head>
    <title>Nueva encuesta</title>
</head>
<body>
<header>
    Encuesta de opinión de los/as estudiantes sobre la labor docente del profesorado
</header>
<br>
<nav>
    <h1>Código de la asignatura</h1>
    <form METHOD="POST" ACTION=guarda_datos.php">
        <br>Titulación
        <input type="number" name="t1" min="0" max="9">
        <input type="number" name="t2" min="0" max="9">
        <input type="number" name="t3" min="0" max="9">
        <input type="number" name="t4" min="0" max="9">
        <br>Asignatura
        <input type="number" name="a1" min="0" max="9">
        <input type="number" name="a2" min="0" max="9">
        <input type="number" name="a3" min="0" max="9">
        <br>Grupo
        <input type="number" name="g1" min="0" max="9">
        <input type="number" name="g2" min="0" max="9">
</nav>
<br>

<nav>
    <h1>Información personal y académica de los estudiantes</h1>
        <br>Edad
        <input type="radio" name="edad" value="0">19 o menos
        <input type="radio" name="edad" value="1">20-21
        <input type="radio" name="edad" value="2">22-23
        <input type="radio" name="edad" value="3">24-25
        <input type="radio" name="edad" value="4">más de 25

        <br>Sexo
        <input type="radio" name="sexo" value="0">Hombre
        <input type="radio" name="sexo" value="1">Mujer

        <br>Curso más alto en el que estás matriculado
        <input type="radio" name="cursoma" value="1">1º
        <input type="radio" name="cursoma" value="2">2º
        <input type="radio" name="cursoma" value="3">3º
        <input type="radio" name="cursoma" value="4">4º
        <input type="radio" name="cursoma" value="5">5º
        <input type="radio" name="cursoma" value="6">6º

        <br>Curso más bajo en el que estás matriculado
        <input type="radio" name="cursomb" value="1">1º
        <input type="radio" name="cursomb" value="2">2º
        <input type="radio" name="cursomb" value="3">3º
        <input type="radio" name="cursomb" value="4">4º
        <input type="radio" name="cursomb" value="5">5º
        <input type="radio" name="cursomb" value="6">6º

        <br>Veces que te has matriculado en esta asignatura
        <input type="radio" name="vecesmat" value="1">1
        <input type="radio" name="vecesmat" value="2">2
        <input type="radio" name="vecesmat" value="3">3
        <input type="radio" name="vecesmat" value="4">más de 3

        <br>Veces que te has examinado en esta asignatura
        <input type="radio" name="vecesex" value="1">1
        <input type="radio" name="vecesex" value="2">2
        <input type="radio" name="vecesex" value="3">3
        <input type="radio" name="vecesex" value="4">más de 3

        <br>La asignatura me interesa
        <input type="radio" name="" value="1">Nada
        <input type="radio" name="asigint" value="2">Algo
        <input type="radio" name="asigint" value="3">Bastante
        <input type="radio" name="asigint" value="4">Mucho

        <br>Hago uso de las tutorías
        <input type="radio" name="asigint" value="1">Nada
        <input type="radio" name="asigint" value="2">Algo
        <input type="radio" name="asigint" value="3">Bastante
        <input type="radio" name="asigint" value="4">Mucho

        <br>Dificultad de esta asignatura
        <input type="radio" name="asigint" value="1">Baja
        <input type="radio" name="asigint" value="2">Media
        <input type="radio" name="asigint" value="3">Alta
        <input type="radio" name="asigint" value="4">Muy alta

        <br>Calificación esperada
        <input type="radio" name="asigint" value="1">Nada
        <input type="radio" name="asigint" value="2">Algo
        <input type="radio" name="asigint" value="3">Bastante
        <input type="radio" name="asigint" value="4">Mucho

        <br>Asistencia clase (% de horas lectivas)
        <input type="radio" name="asigint" value="1">Nada
        <input type="radio" name="asigint" value="2">Algo
        <input type="radio" name="asigint" value="3">Bastante
        <input type="radio" name="asigint" value="4">Mucho
</nav>
        <br>Código de profesor/a
        <input type="number" name="c1" min="0" max="9">
        <input type="number" name="c2" min="0" max="9">
        <input type="number" name="c3" min="0" max="9">
        <input type="number" name="c4" min="0" max="9">

    <h1>A continuación se presentan una serie de cuestiones relativas a la docencia en esta asignatura.
    Tu colaboración es necesaria y consiste en señalar en la escala de respuesta tu grado de acuerdo con cada una de las afirmaciones (1 es totalmente en desacuerdo y
    5 totalmente de acuerdo). Si el enunciado no procede o tienes suficiente información, marca con NS.
    </h1>

<!--APARTADO 1-->
<nav>
    <h2>
        Planificación de la enseñanza y aprendizaje
    </h2>
        <br>1. El/la profesor/a informa sobre los distintos aspectos de la guia docente o programa de la asignatura (objetivos, actividades, contenidos del temario, metodología, bibliografía, sistemas de evalucación,...)
        <select name="pr1">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>
</nav>

<!--APARTADO 2-->
<nav>
    <h2>
        Desarrollo de la docencia
    </h2>
    <h3>
        Cumplimiento de las obligaciones docentes (del encargo docente)
    </h3>
        <br>2. Imparte las clases en el horario fijado
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
    <h3>
        Cumplimiento de la planificación
    </h3>
        <br>5. Se ajusta a la planificación de la asignatura
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

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr9">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr10">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr11">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr12">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr13">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr14">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr15">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr16">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr17">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr18">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr19">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr20">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr21">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>
</nav>

<!--APARTADO 3-->
<nav>
    <h2>
        Resultados
    </h2>
        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr22">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>

        <br>4. Cumple adecuadamente su labor de tutoría (presencial o virtual)
        <select name="pr23">
            <option value="0"> NS
            <option value="1"> 1
            <option value="2"> 2
            <option value="3"> 3
            <option value="4"> 4
            <option value="5"> 5
        </select>
</nav>
    <input type="submit" name="Enviar" value="Enviar">
    </form>
<?php
?>
</body>
</html>
