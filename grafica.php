<HTML Lang="es">
<link rel="stylesheet" type="text/css" href="estilos/estilo_graficas.css">
<head>
    <title>Consulta de resultados</title>
</head>

<body>
    <div class = "bot">
        <a href="index.php"><button class="boton1">Volver a inicio</button></a>
        <h1>Datos del alumnado</h1>
        <a href="?opcion=1"><button class="boton1">Edad</button></a>
        <a href="?opcion=2"><button class="boton1">Sexo</button></a>
        <a href="?opcion=3"><button class="boton1">Curso más alto</button></a>
        <a href="?opcion=4"><button class="boton1">Curso más bajo</button></a>
        <a href="?opcion=5"><button class="boton1">Número de matrículas</button></a>
        <a href="?opcion=6"><button class="boton1">Veces examinado</button></a>
        <a href="?opcion=7"><button class="boton1">Interés general</button></a>
        <a href="?opcion=8"><button class="boton1">Uso de tutorías</button></a>
        <a href="?opcion=9"><button class="boton1">Dificultad</button></a>
        <a href="?opcion=10"><button class="boton1">Calificación esperada</button></a>
        <a href="?opcion=11"><button class="boton1">Asistencia a clase</button></a>
        <h1>Evaluación del profesorado</h1>
        <a href="?opcion=12"><button class="boton1">Apartado 1</button></a>
        <a href="?opcion=13"><button class="boton1">Apartado 2</button></a>
        <a href="?opcion=14"><button class="boton1">Apartado 2.1</button></a>
        <a href="?opcion=15"><button class="boton1">Apartado 2.2</button></a>
        <a href="?opcion=16"><button class="boton1">Apartado 2.3</button></a>
        <a href="?opcion=17"><button class="boton1">Apartado 2.4</button></a>
        <a href="?opcion=18"><button class="boton1">Apartado 2.5</button></a>
        <a href="?opcion=19"><button class="boton1">Apartado 3</button></a>
    </div>
</body>

<?php
    define ('SCRIPTPATH','/phpChart/');
    $connection = mysqli_connect("localhost","root","","formulariopw",3308)
        or die("Connection failed: " . $connection->connect_error);

    $opcion = isset($_GET['opcion']) ? $_GET['opcion'] : null ;
    //$opcion=$_GET['opcion'];

        switch ($opcion) {
            //OPCIONES DE ALUMNADO
            //OPCION 1
            case 1:
                {
                    $edad1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 24 AND valor = 0;")) {
                        $edad1 = $res->num_rows;
                    }
                    $edad2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 24 AND valor = 1;")) {
                        $edad2 = $res->num_rows;
                    }
                    $edad3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 24 AND valor = 2;")) {
                        $edad3 = $res->num_rows;
                    }
                    $edad4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 24 AND valor = 3;")) {
                        $edad4 = $res->num_rows;
                    }
                    $edad5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 24 AND valor = 4;")) {
                        $edad5 = $res->num_rows;
                    }

                    $datos_edad = array(
                        array("label" => "Personas <19", "y" => $edad1),
                        array("label" => "Personas 20-21", "y" => $edad2),
                        array("label" => "Personas 22-23", "y" => $edad3),
                        array("label" => "Personas 24-25", "y" => $edad4),
                        array("label" => "Personas >25", "y" => $edad5)
                    );
                };
                break;
            //OPCION 2
            case 2:
                {
                    $sexo1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 25 AND valor = 0;")) {
                        $sexo1 = $res->num_rows;
                    }
                    $sexo2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 25 AND valor = 1;")) {
                        $sexo2 = $res->num_rows;
                    }

                    $datos_sexo = array(
                        array("label" => "Hombres", "y" => $sexo1),
                        array("label" => "Mujeres", "y" => $sexo2)
                    );
                };
                break;
            //OPCION 3
            case 3:
                {
                    $cursoalto1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 26 AND valor = 1;")) {
                        $cursoalto1 = $res->num_rows;
                    }
                    $cursoalto2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 26 AND valor = 2;")) {
                        $cursoalto2 = $res->num_rows;
                    }
                    $cursoalto3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 26 AND valor = 3;")) {
                        $cursoalto3 = $res->num_rows;
                    }
                    $cursoalto4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 26 AND valor = 4;")) {
                        $cursoalto4 = $res->num_rows;
                    }
                    $cursoalto5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 26 AND valor = 5;")) {
                        $cursoalto5 = $res->num_rows;
                    }
                    $cursoalto6 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 26 AND valor = 6;")) {
                        $cursoalto6 = $res->num_rows;
                    }

                    $datos_cursoalto = array(
                        array("label" => "1º", "y" => $cursoalto1),
                        array("label" => "2º", "y" => $cursoalto2),
                        array("label" => "3º", "y" => $cursoalto3),
                        array("label" => "4º", "y" => $cursoalto4),
                        array("label" => "5º", "y" => $cursoalto5),
                        array("label" => "6º", "y" => $cursoalto6)
                    );
                };
                break;
            //OPCION 4
            case 4:
                {
                    $cursobajo1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 27 AND valor = 1;")) {
                        $cursobajo1 = $res->num_rows;
                    }
                    $cursobajo2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 27 AND valor = 2;")) {
                        $cursobajo2 = $res->num_rows;
                    }
                    $cursobajo3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 27 AND valor = 3;")) {
                        $cursobajo3 = $res->num_rows;
                    }
                    $cursobajo4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 27 AND valor = 4;")) {
                        $cursobajo4 = $res->num_rows;
                    }
                    $cursobajo5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 27 AND valor = 5;")) {
                        $cursobajo5 = $res->num_rows;
                    }
                    $cursobajo6 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 27 AND valor = 6;")) {
                        $cursobajo6 = $res->num_rows;
                    }

                    $datos_cursobajo = array(
                        array("label" => "1º", "y" => $cursobajo1),
                        array("label" => "2º", "y" => $cursobajo2),
                        array("label" => "3º", "y" => $cursobajo3),
                        array("label" => "4º", "y" => $cursobajo4),
                        array("label" => "5º", "y" => $cursobajo5),
                        array("label" => "6º", "y" => $cursobajo6)
                    );
                };
                break;
            //OPCION 5
            case 5:
                {
                    $matri1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 28 AND valor = 1;")) {
                        $matri1 = $res->num_rows;
                    }
                    $matri2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 28 AND valor = 2;")) {
                        $matri2 = $res->num_rows;
                    }
                    $matri3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 28 AND valor = 3;")) {
                        $matri3 = $res->num_rows;
                    }
                    $matri4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 28 AND valor = 4;")) {
                        $matri4 = $res->num_rows;
                    }

                    $datos_matriculas = array(
                        array("label" => "Una vez", "y" => $matri1),
                        array("label" => "Dos veces", "y" => $matri2),
                        array("label" => "Tres veces", "y" => $matri3),
                        array("label" => "Más de tres veces", "y" => $matri4)
                    );
                };
                break;
            //OPCION 6
            case 6:
                {
                    $exam1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 29 AND valor = 1;")) {
                        $exam1 = $res->num_rows;
                    }
                    $exam2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 29 AND valor = 2;")) {
                        $exam2 = $res->num_rows;
                    }
                    $exam3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 29 AND valor = 3;")) {
                        $exam3 = $res->num_rows;
                    }
                    $exam4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 29 AND valor = 4;")) {
                        $exam4 = $res->num_rows;
                    }

                    $datos_examinados = array(
                        array("label" => "Una vez", "y" => $exam1),
                        array("label" => "Dos veces", "y" => $exam2),
                        array("label" => "Tres veces", "y" => $exam3),
                        array("label" => "Más de tres veces", "y" => $exam4),
                    );
                };
                break;
            //OPCION 7
            case 7:
                {
                    $interes1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 30 AND valor = 1;")) {
                        $interes1 = $res->num_rows;
                    }
                    $interes2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 30 AND valor = 2;")) {
                        $interes2 = $res->num_rows;
                    }
                    $interes3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 30 AND valor = 3;")) {
                        $interes3 = $res->num_rows;
                    }
                    $interes4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 30 AND valor = 4;")) {
                        $interes4 = $res->num_rows;
                    }

                    $datos_interes = array(
                        array("label" => "Nada", "y" => $interes1),
                        array("label" => "Algo", "y" => $interes2),
                        array("label" => "Bastante", "y" => $interes3),
                        array("label" => "Mucho", "y" => $interes4)
                    );
                };
                break;
            //OPCION 8
            case 8:
                {
                    $tut1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 31 AND valor = 1;")) {
                        $tut1 = $res->num_rows;
                    }
                    $tut2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 31 AND valor = 2;")) {
                        $tut2 = $res->num_rows;
                    }
                    $tut3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 31 AND valor = 3;")) {
                        $tut3 = $res->num_rows;
                    }
                    $tut4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 31 AND valor = 4;")) {
                        $tut4 = $res->num_rows;
                    }
;
                    $datos_tutorias = array(
                        array("label" => "Nada", "y" => $tut1),
                        array("label" => "Algo", "y" => $tut2),
                        array("label" => "Bastante", "y" => $tut3),
                        array("label" => "Mucho", "y" => $tut4)
                    );
                };
                break;
            //OPCION 9
            case 9:
                {
                    $difi1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 32 AND valor = 1;")) {
                        $difi1 = $res->num_rows;
                    }
                    $difi2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 32 AND valor = 2;")) {
                        $tut2 = $res->num_rows;
                    }
                    $difi3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 32 AND valor = 3;")) {
                        $tut3 = $res->num_rows;
                    }
                    $difi4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 32 AND valor = 4;")) {
                        $tut4 = $res->num_rows;
                    }

                    $datos_dificultad = array(
                        array("label" => "Baja", "y" => $difi1),
                        array("label" => "Media", "y" => $difi2),
                        array("label" => "Alta", "y" => $difi3),
                        array("label" => "Muy alta", "y" => $difi4)
                    );
                };
                break;
            //OPCION 10
            case 10:
                {
                    $cali1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 33 AND valor = 1;")) {
                        $cali1 = $res->num_rows;
                    }
                    $cali2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 33 AND valor = 2;")) {
                        $cali2 = $res->num_rows;
                    }
                    $cali3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 33 AND valor = 3;")) {
                        $cali3 = $res->num_rows;
                    }
                    $cali4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 33 AND valor = 4;")) {
                        $cali4 = $res->num_rows;
                    }
                    $cali5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 33 AND valor = 5;")) {
                        $cali5 = $res->num_rows;
                    }
                    $cali6 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 33 AND valor = 6;")) {
                        $cali6 = $res->num_rows;
                    }

                    $datos_calificaciones = array(
                        array("label" => "No presentado", "y" => $cali1),
                        array("label" => "Suspenso", "y" => $cali2),
                        array("label" => "Aprobado", "y" => $cali3),
                        array("label" => "Notable", "y" => $cali4),
                        array("label" => "Sobresaliente", "y" => $cali5),
                        array("label" => "Matrícula de Honor", "y" => $cali6),
                    );
                };
                break;
            //OPCION 11
            case 11:
                {
                    $asis1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 34 AND valor = 1;")) {
                        $asis1 = $res->num_rows;
                    }
                    $asis2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 34 AND valor = 2;")) {
                        $asis2 = $res->num_rows;
                    }
                    $asis3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 34 AND valor = 3;")) {
                        $asis3 = $res->num_rows;
                    }

                    $datos_asistencias = array(
                        array("label" => "Menos del 50%", "y" => $asis1),
                        array("label" => "Entre 50% y 80%", "y" => $asis2),
                        array("label" => "Más de 80%", "y" => $asis3)
                    );
                };
                break;

            //OPCIONES DE PROFESORADO
            //OPCION 12
            case 12:
                {
                    $apartado1_1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 1 AND valor = 0;")) {
                        $apartado1_1 = $res->num_rows;
                    }
                    $apartado1_2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 1 AND valor = 1;")) {
                        $apartado1_2 = $res->num_rows;
                    }
                    $apartado1_3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 1 AND valor = 2;")) {
                        $apartado1_3 = $res->num_rows;
                    }
                    $apartado1_4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 1 AND valor = 3;")) {
                        $apartado1_4 = $res->num_rows;
                    }
                    $apartado1_5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 1 AND valor = 4;")) {
                        $apartado1_5 = $res->num_rows;
                    }
                    $apartado1_6 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 1 AND valor = 5;")) {
                        $apartado1_6 = $res->num_rows;
                    }

                    if(($apartado1_2+$apartado1_3+$apartado1_4+$apartado1_5+$apartado1_6) > 0) {
                        $notamedia_ap1 = round((((($apartado1_2 * 1) + ($apartado1_3 * 2) + ($apartado1_4 * 3) + ($apartado1_5 * 4) + ($apartado1_6 * 5))) / ($apartado1_2 + $apartado1_3 + $apartado1_4 + $apartado1_5 + $apartado1_6)), 2);
                    }else{
                        $notamedia_ap1 = 0;
                    }

                    $datos_apartado1 = array(
                        array("label" => "NS", "y" => $apartado1_1),
                        array("label" => "1", "y" => $apartado1_2),
                        array("label" => "2", "y" => $apartado1_3),
                        array("label" => "3", "y" => $apartado1_4),
                        array("label" => "4", "y" => $apartado1_5),
                        array("label" => "5", "y" => $apartado1_6),
                        array("label" => "Nota media = $notamedia_ap1", "y" => $notamedia_ap1)
                    );
                };
                break;
            //OPCION 13
            case 13:
                {
                    $apartado2_1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 31 AND valor = 0;")) {
                        $apartado2_1 = $res->num_rows;
                    }
                    $apartado2_2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 31 AND valor = 1;")) {
                        $apartado2_2 = $res->num_rows;
                    }
                    $apartado2_3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 31 AND valor = 2;")) {
                        $apartado2_3 = $res->num_rows;
                    }
                    $apartado2_4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 31 AND valor = 3;")) {
                        $apartado2_4 = $res->num_rows;
                    }
                    $apartado2_5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 31 AND valor = 4;")) {
                        $apartado2_5 = $res->num_rows;
                    }
                    $apartado2_6 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 31 AND valor = 5;")) {
                        $apartado2_6 = $res->num_rows;
                    }

                    if(($apartado2_2+$apartado2_3+$apartado2_4+$apartado2_5+$apartado2_6) > 0) {
                        $notamedia_ap2 = round((((($apartado2_2 * 1) + ($apartado2_3 * 2) + ($apartado2_4 * 3) + ($apartado2_5 * 4) + ($apartado2_6 * 5))) / ($apartado2_2 + $apartado2_3 + $apartado2_4 + $apartado2_5 + $apartado2_6)), 2);
                    }else{
                        $notamedia_ap2 = 0;
                    }

                    $datos_apartado2 = array(
                        array("label" => "NS", "y" => $apartado2_1),
                        array("label" => "1", "y" => $apartado2_2),
                        array("label" => "2", "y" => $apartado2_3),
                        array("label" => "3", "y" => $apartado2_4),
                        array("label" => "4", "y" => $apartado2_5),
                        array("label" => "5", "y" => $apartado2_6),
                        array("label" => "Nota media = $notamedia_ap2", "y" => $notamedia_ap2)
                    );
                };
                break;
            //OPCION 14
            case 14:
                {
                    $apartado21_1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 4 AND valor = 0;")) {
                        $apartado21_1 = $res->num_rows;
                    }
                    $apartado21_2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 4 AND valor = 1;")) {
                        $apartado21_2 = $res->num_rows;
                    }
                    $apartado21_3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 4 AND valor = 2;")) {
                        $apartado21_3 = $res->num_rows;
                    }
                    $apartado21_4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 4 AND valor = 3;")) {
                        $apartado21_4 = $res->num_rows;
                    }
                    $apartado21_5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 4 AND valor = 4;")) {
                        $apartado21_5 = $res->num_rows;
                    }
                    $apartado21_6 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 2 AND 4 AND valor = 5;")) {
                        $apartado21_6 = $res->num_rows;
                    }

                    if (($apartado21_2+$apartado21_3+$apartado21_4+$apartado21_5+$apartado21_6) > 0) {
                        $notamedia_ap21 = round((((($apartado21_2 * 1) + ($apartado21_3 * 2) + ($apartado21_4 * 3) + ($apartado21_5 * 4) + ($apartado21_6 * 5))) / ($apartado21_2 + $apartado21_3 + $apartado21_4 + $apartado21_5 + $apartado21_6)), 2);
                    }else{
                        $notamedia_ap21 = 0;
                    }

                    $datos_apartado21 = array(
                        array("label" => "NS", "y" => $apartado21_1),
                        array("label" => "1", "y" => $apartado21_2),
                        array("label" => "2", "y" => $apartado21_3),
                        array("label" => "3", "y" => $apartado21_4),
                        array("label" => "4", "y" => $apartado21_5),
                        array("label" => "5", "y" => $apartado21_6),
                        array("label" => "Nota media = $notamedia_ap21", "y" => $notamedia_ap21),
                        array("label" => "Desv.Tipica = $resultado", "y" => $resultado)
                    );
                };
                break;
            //OPCION 15
            case 15:
                {
                    $apartado22_1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 5 AND 8 AND valor = 0;")) {
                        $apartado22_1 = $res->num_rows;
                    }
                    $apartado22_2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 5 AND 8 AND valor = 1;")) {
                        $apartado22_2 = $res->num_rows;
                    }
                    $apartado22_3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 5 AND 8 AND valor = 2;")) {
                        $apartado22_3 = $res->num_rows;
                    }
                    $apartado22_4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 5 AND 8 AND valor = 3;")) {
                        $apartado22_4 = $res->num_rows;
                    }
                    $apartado22_5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 5 AND 8 AND valor = 4;")) {
                        $apartado22_5 = $res->num_rows;
                    }
                    $apartado22_6 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 5 AND 8 AND valor = 5;")) {
                        $apartado22_6 = $res->num_rows;
                    }

                    if (($apartado22_2+$apartado22_3+$apartado22_4+$apartado22_5+$apartado22_6) > 0) {
                        $notamedia_ap22 = round((((($apartado22_2 * 1) + ($apartado22_3 * 2) + ($apartado22_4 * 3) + ($apartado22_5 * 4) + ($apartado22_6 * 5))) / ($apartado22_2 + $apartado22_3 + $apartado22_4 + $apartado22_5 + $apartado22_6)), 2);
                    }else{
                        $notamedia_ap22 = 0;
                    }

                    $datos_apartado22 = array(
                        array("label" => "NS", "y" => $apartado22_1),
                        array("label" => "1", "y" => $apartado22_2),
                        array("label" => "2", "y" => $apartado22_3),
                        array("label" => "3", "y" => $apartado22_4),
                        array("label" => "4", "y" => $apartado22_5),
                        array("label" => "5", "y" => $apartado22_6),
                        array("label" => "Nota media = $notamedia_ap22", "y" => $notamedia_ap22)
                    );
                };
                break;
            //OPCION 16
            case 16:
                {
                    $apartado23_1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 9 AND 10 AND valor = 0;")) {
                        $apartado23_1 = $res->num_rows;
                    }
                    $apartado23_2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 9 AND 10 AND valor = 1;")) {
                        $apartado23_2 = $res->num_rows;
                    }
                    $apartado23_3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 9 AND 10 AND valor = 2;")) {
                        $apartado23_3 = $res->num_rows;
                    }
                    $apartado23_4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 9 AND 10 AND valor = 3;")) {
                        $apartado23_4 = $res->num_rows;
                    }
                    $apartado23_5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 9 AND 10 AND valor = 4;")) {
                        $apartado23_5 = $res->num_rows;
                    }
                    $apartado23_6 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 9 AND 10 AND valor = 5;")) {
                        $apartado23_6 = $res->num_rows;
                    }

                    if (($apartado23_2+$apartado23_3+$apartado23_4+$apartado23_5+$apartado23_6) > 0) {
                        $notamedia_ap23 = round((((($apartado23_2 * 1) + ($apartado23_3 * 2) + ($apartado23_4 * 3) + ($apartado23_5 * 4) + ($apartado23_6 * 5))) / ($apartado23_2 + $apartado23_3 + $apartado23_4 + $apartado23_5 + $apartado23_6)), 2);
                    }else{
                        $notamedia_ap23 = 0;
                    }

                    $datos_apartado23 = array(
                        array("label" => "NS", "y" => $apartado23_1),
                        array("label" => "1", "y" => $apartado23_2),
                        array("label" => "2", "y" => $apartado23_3),
                        array("label" => "3", "y" => $apartado23_4),
                        array("label" => "4", "y" => $apartado23_5),
                        array("label" => "5", "y" => $apartado23_6),
                        array("label" => "Nota media = $notamedia_ap23", "y" => $notamedia_ap23)
                    );
                };
                break;
            //OPCION 17
            case 17:
                {
                    $apartado24_1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 11 AND 19 AND valor = 0;")) {
                        $apartado24_1 = $res->num_rows;
                    }
                    $apartado24_2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 11 AND 19 AND valor = 1;")) {
                        $apartado24_2 = $res->num_rows;
                    }
                    $apartado24_3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 11 AND 19 AND valor = 2;")) {
                        $apartado24_3 = $res->num_rows;
                    }
                    $apartado24_4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 11 AND 19 AND valor = 3;")) {
                        $apartado24_4 = $res->num_rows;
                    }
                    $apartado24_5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 11 AND 19 AND valor = 4;")) {
                        $apartado24_5 = $res->num_rows;
                    }
                    $apartado24_6 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 11 AND 19 AND valor = 5;")) {
                        $apartado24_6 = $res->num_rows;
                    }

                    if (($apartado24_2+$apartado24_3+$apartado24_4+$apartado24_5+$apartado24_6) > 0) {
                        $notamedia_ap24 = round((((($apartado24_2 * 1) + ($apartado24_3 * 2) + ($apartado24_4 * 3) + ($apartado24_5 * 4) + ($apartado24_6 * 5))) / ($apartado24_2 + $apartado24_3 + $apartado24_4 + $apartado24_5 + $apartado24_6)), 2);
                    }else{
                        $notamedia_ap24 = 0;
                    }

                    $datos_apartado24 = array(
                        array("label" => "NS", "y" => $apartado24_1),
                        array("label" => "1", "y" => $apartado24_2),
                        array("label" => "2", "y" => $apartado24_3),
                        array("label" => "3", "y" => $apartado24_4),
                        array("label" => "4", "y" => $apartado24_5),
                        array("label" => "5", "y" => $apartado24_6),
                        array("label" => "Nota media = $notamedia_ap24", "y" => $notamedia_ap24)
                    );
                };
                break;
            //OPCION 18
            case 18:
                {
                    $apartado25_1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 20 AND 21 AND valor = 0;")) {
                        $apartado25_1 = $res->num_rows;
                    }
                    $apartado25_2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 20 AND 21 AND valor = 1;")) {
                        $apartado25_2 = $res->num_rows;
                    }
                    $apartado25_3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 20 AND 21 AND valor = 2;")) {
                        $apartado25_3 = $res->num_rows;
                    }
                    $apartado25_4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 20 AND 21 AND valor = 3;")) {
                        $apartado25_4 = $res->num_rows;
                    }
                    $apartado25_5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 20 AND 21 AND valor = 4;")) {
                        $apartado25_5 = $res->num_rows;
                    }
                    $apartado25_6 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 20 AND 21 AND valor = 5;")) {
                        $apartado25_6 = $res->num_rows;
                    }

                    if (($apartado25_2+$apartado25_3+$apartado25_4+$apartado25_5+$apartado25_6) > 0) {
                        $notamedia_ap25 = round((((($apartado25_2 * 1) + ($apartado25_3 * 2) + ($apartado25_4 * 3) + ($apartado25_5 * 4) + ($apartado25_6 * 5))) / ($apartado25_2 + $apartado25_3 + $apartado25_4 + $apartado25_5 + $apartado25_6)), 2);
                    }else {
                        $notamedia_ap25 = 0;
                    }

                    $datos_apartado25 = array(
                        array("label" => "NS", "y" => $apartado25_1),
                        array("label" => "1", "y" => $apartado25_2),
                        array("label" => "2", "y" => $apartado25_3),
                        array("label" => "3", "y" => $apartado25_4),
                        array("label" => "4", "y" => $apartado25_5),
                        array("label" => "5", "y" => $apartado25_6),
                        array("label" => "Media = opción $notamedia_ap25", "y" => $notamedia_ap25)
                    );
                };
                break;
            case 19:
                {
                    $apartado3_1 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 22 AND 23 AND valor = 0;")) {
                        $apartado3_1 = $res->num_rows;
                    }
                    $apartado3_2 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 22 AND 23 AND valor = 1;")) {
                        $apartado3_2 = $res->num_rows;
                    }
                    $apartado3_3 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 22 AND 23 AND valor = 2;")) {
                        $apartado3_3 = $res->num_rows;
                    }
                    $apartado3_4 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 22 AND 23 AND valor = 3;")) {
                        $apartado3_4 = $res->num_rows;
                    }
                    $apartado3_5 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 22 AND 23 AND valor = 4;")) {
                        $apartado3_5 = $res->num_rows;
                    }
                    $apartado3_6 = 0;
                    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta BETWEEN 22 AND 23 AND valor = 5;")) {
                        $apartado3_6 = $res->num_rows;
                    }

                    if (($apartado3_2+$apartado3_3+$apartado3_4+$apartado3_5+$apartado3_6) > 0) {
                        $notamedia_ap3 = round((((($apartado3_2 * 1) + ($apartado3_3 * 2) + ($apartado3_4 * 3) + ($apartado3_5 * 4) + ($apartado3_6 * 5))) / ($apartado3_2 + $apartado3_3 + $apartado3_4 + $apartado3_5 + $apartado3_6)), 2);
                    }else{
                        $notamedia_ap3=0;
                    }
                        $datos_apartado3 = array(
                            array("label" => "NS", "y" => $apartado3_1),
                            array("label" => "1", "y" => $apartado3_2),
                            array("label" => "2", "y" => $apartado3_3),
                            array("label" => "3", "y" => $apartado3_4),
                            array("label" => "4", "y" => $apartado3_5),
                            array("label" => "5", "y" => $apartado3_6),
                            array("label" => "Nota media = $notamedia_ap3", "y" => $notamedia_ap3)
                        );
                };
                break;
    }
?>
<script>
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer",{
            animationEnabled: true,
            exportEnabled: true,
            theme:"light1",
            title: {
                text: "Encuesta de satisfacción"
            },

            axisY: {
                title: "Número de personas"
            },

            data: [{
                type: "column",
                indexLabel: "{y}",
                indexLabelFontSize: 12,
                indexLabelPlacement: "inside",
                indexLabelFontColor: "white",
                dataPoints:
                <?php

                    $opcion=$_GET["opcion"];
                    switch ($opcion){
                        case 1:{
                            echo json_encode($datos_edad,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 2:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 3:{
                            echo json_encode($datos_cursoalto,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 4:{
                            echo json_encode($datos_cursobajo,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 5:{
                            echo json_encode($datos_matriculas,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 6:{
                            echo json_encode($datos_examinados,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 7:{
                            echo json_encode($datos_interes,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 8:{
                            echo json_encode($datos_tutorias,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 9:{
                            echo json_encode($datos_dificultad,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 10:{
                            echo json_encode($datos_calificaciones,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 11:{
                            echo json_encode($datos_asistencias,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 12:{
                            echo json_encode($datos_apartado1,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 13:{
                            echo json_encode($datos_apartado2,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 14:{
                            echo json_encode($datos_apartado21,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 15:{
                            echo json_encode($datos_apartado22,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 16:{
                            echo json_encode($datos_apartado23,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 17:{
                            echo json_encode($datos_apartado24,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 18:{
                            echo json_encode($datos_apartado25,JSON_NUMERIC_CHECK);
                        };
                        break;
                        case 19:{
                            echo json_encode($datos_apartado3,JSON_NUMERIC_CHECK);
                        };
                        break;
                    }
                ?>
            }]
        });
        chart.render();
    }
</script>
<body>
<div id="chartContainer" style="height:410px; width: 100%; position: absolute;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</HTML>
