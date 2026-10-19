<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

$Cedula = $_POST['Cedula'];

if(!empty($Cedula)) {
    $sql = "SELECT * FROM reg_psicologica WHERE Cedula = $Cedula ORDER BY id DESC";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $json = array();

    $json[] = array(
        'id' => $row['id'],
        'Codigo' => $row['Codigo'],
        'Tipo' => $row['Tipo'],
        'Nombre' => $row['Nombre'],
        'Edad' => $row['Edad'],
        'Genero' => $row['Genero'],
        'Estado' => $row['Estado'],
        'Empresa' => $row['Empresa'],
        'Sede' => $row['Sede'],
        'Cargo' => $row['Cargo'],
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>
