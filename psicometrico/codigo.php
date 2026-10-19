<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/controlsesion.inc.php';
session_start();
$id = $_SESSION['id'];
$sql = "SELECT * FROM admin WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
$id_ = $row['id_admin'];
$Activo = $row['Activo'];
if ($Activo == 1){
$id_admin = $id_;
} else {
$id_admin = $id;
}    
$json[] = array(
    'id' => $id,
    'id_admin' => $id_admin
);
$jsonstring = json_encode($json);
echo $jsonstring; 
?>