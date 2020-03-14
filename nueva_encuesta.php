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
        <input type="number" name="a1" min="0" max="9">
        <input type="number" name="a2" min="0" max="9">
        <input type="number" name="a3" min="0" max="9">
        <input type="number" name="a4" min="0" max="9">
        <br>Asignatura
        <input type="number" name="b1" min="0" max="9">
        <input type="number" name="b2" min="0" max="9">
        <input type="number" name="b3" min="0" max="9">
        <br>Grupo
        <input type="number" name="c1" min="0" max="9">
        <input type="number" name="c2" min="0" max="9">
</nav>
<br>

<nav>
    <h1>Información personal y académica de los estudiantes</h1>
        <br>Edad
        <input type="radio" name="d1" value="0" checked>19 o menos
        <input type="radio" name="d1" value="1">20-21
        <input type="radio" name="d1" value="2">22-23
        <input type="radio" name="d1" value="3">24-25
        <input type="radio" name="d1" value="4">más de 25

        <br>Sexo
        <input type="radio" name="e1" value="0" checked>Hombre
        <input type="radio" name="e1" value="1">Mujer

        <br>Curso más alto en el que estás matriculado
        <input type="radio" name="f1" value="1">20-21
        <input type="radio" name="f1" value="2">22-23
        <input type="radio" name="f1" value="3">24-25
        <input type="radio" name="f1" value="4">más de 25

        <br>Curso más bajo en el que estás matriculado
        <br>Veces que te has matriculado en esta asignatura
        <br>Veces que te has examinado en esta asignatura
        <br>La asignatura me interesa
        <br>Hago uso de las tutorías
        <br>Dificultad de esta asignatura
        <br>Calificación esperada
        <br>Asistencia clase (% de horas lectivas)
</nav>

        <br>Código de profesor/a






    </form>
<?php

?>
</body>
</html>
