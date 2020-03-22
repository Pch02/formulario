<html lang="es">
<LINK rel="stylesheet" type="text/css" href="estilos/estiloindex.css">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proy_encuesta";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST["nnombre"];
$pass = $_POST["npassword"];
$logged = false;

$res = $conn->query('SELECT * FROM login_admin');
while($row = $res->fetch_assoc()){
    if($row['id_admin'] == $user && $row['password'] == $pass){
        $logged = true;
        //$nombre = $row['nombre'];
    }
}
if($logged == false){
    echo "<header>Error en la autentificacion.</header>";
    echo "<nav><ul><a href='index.php'><li>Volver a inicio</li></a>";
}
else if($logged == true){
    echo "<header>Bienvenido, $user</header>";
    echo "<nav><ul><a href='mostrargrafica.php'><li>Consultar estadisticas</li></a>";
    echo "<a href='index.php'><li>Volver a Inicio</li></a></ul></nav>";
}
?>


</html>

