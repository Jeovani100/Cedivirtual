<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';

	$Codigo = $_POST['Codigo'];

    $sql = "SELECT * FROM text_osteo WHERE id_admin = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
            'id' => $row['id'],
            'Alcance' => nl2br($row['Alcance']),
            'Objetivo' => nl2br($row['Objetivo']),
            'Definicion' => nl2br($row['Definicion']),
            'Responsabilidades' => nl2br($row['Responsabilidades']),
            'Planear' => nl2br($row['Planear']),
            'Hacer' => nl2br($row['Hacer']),
            'Verificar' => nl2br($row['Verificar']),
            'Corregir' => nl2br($row['Corregir'])
        );
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>