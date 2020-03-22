<html lang="es">
<LINK rel="stylesheet" type="text/css" href="estilos/estilo_index.css">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formularioPW";

// Create connection
$connection = mysqli_connect ("localhost", "root", "","formularioPW","3308")
    or die("Connection failed: " . $connection->connect_error); //CHECK CONNECTION


$user = $_POST["nnombre"];
$pass = $_POST["npassword"];
$logged = false;

$res = $connection->query('SELECT * FROM login');
while($row = $res->fetch_assoc()){
    if($row['udni'] == $user && $row['password'] == $pass){
        $logged = true;
        //$nombre = $row['nombre'];
    }
}
if($logged == false){
    echo "<h3>Error en la autentificacion.</h3>";
    echo "<nav><ul><a href='index.php'><li>Volver a inicio</li></a>";
}
else if($logged == true){
    echo "<h3>Bienvenido, $user</h3>";
    echo "<nav><ul><a href='mostrargrafica.php'><li>Consultar estadisticas</li></a>";
    echo "<a href='index.php'><li>Volver a Inicio</li></a></ul></nav>";
}
?>


</html>

