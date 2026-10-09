<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_codigo'])) {
	$id = $_POST['id_codigo'];
    }
    $sql = "SELECT * FROM admin WHERE id = '$id'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
            'id' => $row['id'],
            'Razon' => $row['Razon'],
            'Nit' => $row['Nit'],
            'Archivo1' => $row['Archivo1'],
            'Profesional' => $row['Profesional'],
            'Tarjeta' => $row['Tarjeta'],
            'Licencia' => $row['Licencia'],
            'Expedicion' => $row['Expedicion'],
            'Archivo2' => $row['Archivo2'],
        );
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>