<html lang="es">
<LINK rel="stylesheet" type="text/css" href="estilos/estilo_index.css">
<?php
    $connection = mysqli_connect ("localhost", "root", "","formulariopw","3308")
        or die("Connection failed: " . $connection->connect_error);

    $user = $_POST["usuario"];
    $pass = $_POST["password"];
    $logeado = false;

    $query = "SELECT * FROM login";

    if ($res = $connection->query($query)) {
        while ($row = $res->fetch_assoc()) {
            if ($row['udni'] == $user && $row['password'] == $pass) {
                $logeado = true;
             }
        }
    }
    ?>
<div class = "bot">
    <?php
    if($logeado == false){
        echo "<h1>Encuesta de satisfacción del profesorado</h1>";
        echo "<a href = \"index.php\"><button class = \"boton1\">Volver a inicio</button></a>";
    }
    else if($logeado == true){
        echo "<h1>Bienvenido usuario $user</h1>";
        echo "<a href = \"grafica.php\"><button class = \"boton1\">Estadísticas de encuestas</button></a>";
        echo "<a href = \"index.php\"><button class = \"boton1\">Volver a inicio</button></a>";
    }
?>
</div>
</html>

