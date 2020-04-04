<HTML Lang="es">
<link rel="stylesheet" type="text/css" href="estilos/estilo_graficos.css">
<header>Seleccione filtrado:</header>
<body>
<nav>
    <ul>
        <h1>Datos del alumnado</h1>
        <a href="?opcion=1"><li><button type="button">Edad</button></li></a>
        <a href="?opcion=2"><li><button type="button">Sexo</button></li></a>
        <a href="?opcion=3"><li><button type="button">Curso más alto</button></li></a>
        <a href="?opcion=4"><li><button type="button">Curso más bajo</button></li></a>
        <a href="?opcion=5"><li><button type="button">Número de matrículas</button></li></a>
        <a href="?opcion=6"><li><button type="button">Veces examinado</button></li></a>
        <a href="?opcion=7"><li><button type="button">Interés general</button></li></a>
        <a href="?opcion=8"><li><button type="button">Uso de tutorías</button></li></a>
        <a href="?opcion=9"><li><button type="button">Calificación esperada</button></li></a>
        <a href="?opcion=10"><li><button type="button">Asistencia a clase</button></li></a>
    </ul>
</nav>
<nav>
    <ul>
        <h1>Evaluación del profesorado</h1>
        <a href="?opcion=11"><li><button type="button">Apartado 1</button></li></a>
        <a href="?opcion=12"><li><button type="button">Apartado 2</button></li></a>
        <a href="?opcion=13"><li><button type="button">Apartado 2.1</button></li></a>
        <a href="?opcion=14"><li><button type="button">Apartado 2.2</button></li></a>
        <a href="?opcion=15"><li><button type="button">Apartado 2.3</button></li></a>
        <a href="?opcion=16"><li><button type="button">Apartado 2.4</button></li></a>
        <a href="?opcion=17"><li><button type="button">Apartado 2.5</button></li></a>
        <a href="?opcion=18"><li><button type="button">Apartado 3</button></li></a>
    </ul>
</nav>
<?php
    define ('SCRIPTPATH','/phpChart/');
    $connection = mysqli_connect("localhost","root","","formulariopw",3308)
        or die("Connection failed: " . $connection->connect_error);

    if (empty($_GET["opcion"])){
        echo "Seleccione una opción por favor";
    }else{
        $opcion=$_GET['opcion'];
    }

    //OPCIONES DE ALUMNADO
    //OPCION 1
    if ($opcion = 1){
        $edad1=0;
        if($res=$connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 24 AND valor = 0;")){
            $edad1=$res->num_rows;
        }
        $edad2=0;
        if($res=$connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 24 AND valor = 1;")){
            $edad2=$res->num_rows;
        }
        $edad3=0;
        if($res=$connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 24 AND valor = 2;")){
            $edad3=$res->num_rows;
        }
        $edad4=0;
        if($res=$connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 24 AND valor = 3;")){
            $edad4=$res->num_rows;
        }
        $edad5=0;
        if($res=$connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 24 AND valor = 4;")){
            $edad5=$res->num_rows;
        }

        $datos_edad = array (
            array ("label" => "Personas <19", "y"=> $edad1),
            array ("label" => "Personas 20-21", "y"=> $edad2),
            array ("label" => "Personas 22-23", "y" => $edad3),
            array ("label" => "Personas 24-25", "y" => $edad4),
            array ("label" => "Personas >25", "y" => $edad5)
        );
    }

    //OPCION 2
    if ($opcion = 2) {
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
    }

    //OPCION 3
    if ($opcion = 3) {
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

        $datos_cursoalto = array (
            array ("label" => "1º", "y"=> $cursoalto1),
            array ("label" => "2º", "y"=> $cursoalto2),
            array ("label" => "3º", "y" => $cursoalto3),
            array ("label" => "4º", "y" => $cursoalto4),
            array ("label" => "5º", "y" => $cursoalto5),
            array ("label" => "6º", "y" => $cursoalto6)
        );
    }

    //OPCION 4
    if ($opcion = 4) {
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

        $datos_cursobajo = array (
            array ("label" => "1º", "y"=> $cursobajo1),
            array ("label" => "2º", "y"=> $cursobajo2),
            array ("label" => "3º", "y" => $cursobajo3),
            array ("label" => "4º", "y" => $cursobajo4),
            array ("label" => "5º", "y" => $cursobajo5),
            array ("label" => "6º", "y" => $cursobajo6)
        );
    }

    //OPCION 5
    if ($opcion = 5) {
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

        $datos_matriculas = array (
            array ("label" => "Una vez", "y"=> $matri1),
            array ("label" => "Dos veces", "y"=> $matri2),
            array ("label" => "Tres veces", "y" => $matri3),
            array ("label" => "Más de tres veces", "y" => $matri4)
        );
    }

    //OPCION 6
    if ($opcion = 6) {
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

        $datos_examinados = array (
            array ("label" => "1º", "y"=> $cursobajo1),
            array ("label" => "2º", "y"=> $cursobajo2),
            array ("label" => "3º", "y" => $cursobajo3),
            array ("label" => "4º", "y" => $cursobajo4)
        );
    }

    //OPCION 7
if ($opcion = 1) {
    $edad1 = 0;
    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 30 AND valor = 0;")) {
        $edad1 = $res->num_rows;
    }
    $edad2 = 0;
    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 30 AND valor = 1;")) {
        $edad2 = $res->num_rows;
    }
    $edad3 = 0;
    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 30 AND valor = 2;")) {
        $edad3 = $res->num_rows;
    }
    $edad4 = 0;
    if ($res = $connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 30 AND valor = 3;")) {
        $edad4 = $res->num_rows;
    }
}



    //OPCION 8
if ($opcion = 1) {
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
}



    //OPCION 9
if ($opcion = 1) {
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
}

    //OPCION 10
if ($opcion = 1) {
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
}


    //OPCIONES DE PROFESORADO
    //OPCION 11




    //OPCION 12





    //OPCION 13





    //OPCION 14




    //OPCION 15





    //OPCION 16





    //OPCION 17





    //OPCION 18








?>
</body>
<script>
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer",{
            animationEnabled: true,

            theme:"light2",
            title: {
                text: "Encuesta de satisfacción"
            },

            data: [{
                type: "column",
                //yValueFormatString: "#,##0\",
                indexLabel: "{y}",
                indexLabelPlacement: "inside",
                indexLabelFontColor: "white",
                dataPoints:
                <?php
                    $opcion=$_GET["opcion"];
                    switch ($opcion){
                        case 1:{
                            echo json_encode($datos_edad,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 2:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 3:{
                            echo json_encode($datos_cursoalto,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 4:{
                            echo json_encode($datos_cursobajo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 5:{
                            echo json_encode($datos_matriculas,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 6:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 7:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 8:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 9:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 10:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 11:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 12:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 13:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 14:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 15:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 16:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 17:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                        case 18:{
                            echo json_encode($datos_sexo,JSON_NUMERIC_CHECK);
                            break;
                        }
                    }
                ?>
            }]
        });
        chart.render();
    }
</script>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</HTML>