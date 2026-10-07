<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

$connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect->exec("SET CHARACTER SET utf8");
$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
mysqli_set_charset($mysqli, "utf8"); 

$Cedula = $_POST['Cedula'];
$Razon = $_POST['Razon'];

if(!empty($Cedula)) {
    // Si tienes campos separados
    $sql = "SELECT * FROM agenda2 WHERE Documento = $Cedula && Empresa = '$Razon' ORDER BY id ASC LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $json = array();

    $json[] = array(
        'id' => $row['id'],
        'Codigo' => $row['Codigo'],
        'Tipo' => $row['Tipo'],
        'Nombre' => $row['Nombre'],      // Solo nombre
        'Apellidos' => $row['Apellidos'], // Si existe este campo
        'Genero' => $row['Genero'],
        'Cargo' => $row['Cargo'],
        'Email' => $row['Email'],
        'Celular' => $row['Celular'],
        'Email2' => $row['Email2'],
    );
    
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>