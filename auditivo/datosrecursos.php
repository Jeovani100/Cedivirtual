<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id'])) {
	$id = $_POST['id'];
    }
    $sql = "SELECT * FROM recursos WHERE id = '$id'";
       $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
          'id' => $row['id'],
          'Recurso' => $row['Recurso'],
          'Descripcion' => $row['Descripcion']
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>