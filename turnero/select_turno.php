<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
	$id = $_POST['id'];
    $sql = "SELECT * FROM admin_turnos WHERE id = $id";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $json[] = array(
        'id' => $row['id'],
        'Dependencia' => $row['Dependencia']
    );

  $jsonstring = json_encode($json);
  echo $jsonstring;
?>