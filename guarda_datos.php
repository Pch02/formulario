<html>
<head>
    <title>Encuesta de satisfacción</title>
    <style type="text/css"> BODY{ font-family: Arial; } </style>
</head>

<header>Datos guardados</header>
<body>
<nav>
    <ul>
        <a href="index.php"><li>Volver a Inicio</li></a>
    </ul>
</nav>
</body>

<?php
    /*--TITULACION--*/
    $t1=$_POST["t1"];
    $t2=$_POST["t2"];
    $t3=$_POST["t3"];
    $t4=$_POST["t4"];

    /*--ASIGNATURA--*/
    $a1=$_POST["a1"];
    $a2=$_POST["a2"];
    $a3=$_POST["a3"];

    /*--GRUPO--*/
    $g1=$_POST["g1"];
    $g2=$_POST["g2"];

    /*--CONCATENACION DE TITULACION Y ASIGNATURA--*/
    $t1=$t1.$t2.$t3.$t4;
    $a1=$a1.$a2.$a3;

    /*--INFORMACION PERSONAL Y ACADEMICA--*/
    $ed=$_POST["ed"];   //Edad
    $se=$_POST["se"];   //Sexo
    $cma=$_POST["cma"]; //Curso mas alto
    $cmb=$_POST["cmb"]; //Curso mas bajo
    $mat=$_POST["mat"]; //Veces matriculado
    $ex=$_POST["ex"];   //Veces examinado
    $int=$_POST["int"]; //Interes
    $tut=$_POST["tut"]; //Tutorias
    $dif=$_POST["dif"]; //Dificultad
    $cal=$_POST["cal"]; //Calificacion
    $asi=$_POST["asi"]; //Asistencia

    /*--CODIGO PROFESOR--*/
    $c1=$_POST["c1"];
    $c2=$_POST["c2"];
    $c3=$_POST["c3"];
    $c4=$_POST["c4"];

    /*--PREGUNTAS DE LA ENCUESTA--*/

    /*--APARTADO 1--*/
    $pr1=$_POST["pr1"];
    /*--APARTADO 2--*/
    $pr2=$_POST["pr2"];
    $pr3=$_POST["pr3"];
    $pr4=$_POST["pr4"];
    $pr5=$_POST["pr5"];
    $pr6=$_POST["pr6"];
    $pr7=$_POST["pr7"];
    $pr8=$_POST["pr8"];
    $pr9=$_POST["pr9"];
    $pr10=$_POST["pr10"];
    $pr11=$_POST["pr11"];
    $pr12=$_POST["pr12"];
    $pr13=$_POST["pr13"];
    $pr14=$_POST["pr14"];
    $pr15=$_POST["pr15"];
    $pr16=$_POST["pr16"];
    $pr17=$_POST["pr17"];
    $pr18=$_POST["pr18"];
    $pr19=$_POST["pr19"];
    $pr20=$_POST["pr20"];
    $pr21=$_POST["pr21"];
    /*--APARTADO 3--*/
    $pr22=$_POST["pr22"];
    $pr23=$_POST["pr23"];

    /*--CONEXION A LA BASE DE DATOS--*/
    $connection = mysqli_connect ("localhost", "root", "","formularioPW","3308")
        or die("No se puede conectar al servidor");






?>




















</html>
