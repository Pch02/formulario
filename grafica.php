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
        if($res=$connection->query("SELECT * FROM datosrespuesta WHERE cod_pregunta = 24 AND valor = 4")){
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
                yValueFormatString: "#,##0\"%\"",
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