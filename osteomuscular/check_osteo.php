<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
$connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
$connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect -> exec("SET CHARACTER SET utf8");
$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
mysqli_set_charset($mysqli, "utf8"); 
if(isset($_POST['check1'])) {
    $id = $_POST["check1"];
    $sql = "SELECT * FROM locomocion WHERE id = $id";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Notificacion0 = $row['Notificacion'];
    if($Notificacion0 == "#e7744f"){
        $Notificacion = "#666666";
    } elseif (($Notificacion0 == "#666666") || ($Notificacion0 == "")) {
        $Notificacion = "#e7744f";
    }
    $sql = "UPDATE locomocion SET Notificacion = '$Notificacion' WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['check_2'])) {
    $id = $_POST["check_2"];
    $sql = "SELECT * FROM locomocion WHERE id = $id";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Notificacion0 = $row['Notificacion'];
    if($Notificacion0 == "#e7744f"){
        $Notificacion = "#666666";
    } elseif (($Notificacion0 == "#666666") || ($Notificacion0 == "")) {
        $Notificacion = "#e7744f";
    }
    $sql = "UPDATE locomocion SET Notificacion = '$Notificacion' WHERE id = $id";
    $result = $mysqli->query($sql);
}
?>