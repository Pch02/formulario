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

    if($logeado == false){
        echo "Error en la autentificacion";
        echo "<nav><ul><a href='index.php'><li>Volver a inicio</li></a>";
    }
    else if($logeado == true){
        echo "Bienvenido usuario $user";
        echo "<nav><ul><a href='grafica.php'><li>Estadisticas de las encuestas</li></a>";
        echo "<a href='index.php'><li>Volver a Inicio</li></a></ul></nav>";
    }
?>
</html>

