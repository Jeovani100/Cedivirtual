<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['grupo'])) {
	    $id_grupo = $_POST['id_grupo'];
    }
    $sql = "SELECT * FROM grupoges_auditivo WHERE id = '$id_grupo'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $id = $row['id'];
        $json[] = array(
            'id' => $id,
            'Grupo' => $row['Grupo'],
            'Descripcion' => $row['Descripcion'],
            'Individual' => $row['Individual'],
            'Ambiental' => $row['Ambiental'],
            'Periodicidad' => $row['Periodicidad'],
            'Cantidad' => $row['Cantidad'],
            'Nivel' => $row['Nivel']
        );
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>