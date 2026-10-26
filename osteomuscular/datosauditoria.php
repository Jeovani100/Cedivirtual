<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
    if (isset($_POST['id'])) {
	$id = $_POST['id'];
	$sql = "SELECT * FROM auditoria WHERE id = '$id'";
    }
    if (isset($_POST['id2'])) {
	$id = $_POST['id2'];
	$sql = "SELECT * FROM auditoria2 WHERE id = '$id'";
    }
    if (isset($_POST['id3'])) {
	$id = $_POST['id3'];
	$sql = "SELECT * FROM auditoria3 WHERE id = '$id'";
    }
    if (isset($_POST['id4'])) {
	$id = $_POST['id4'];
	$sql = "SELECT * FROM auditoria4 WHERE id = '$id'";
    }
    if (isset($_POST['id5'])) {
	$id = $_POST['id5'];
	$sql = "SELECT * FROM auditoria5 WHERE id = '$id'";
    }
    if (isset($_POST['id6'])) {
	$id = $_POST['id6'];
	$sql = "SELECT * FROM auditoria6 WHERE id = '$id'";
    }
        
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
          'id' => $row['id'],
          'Actividades' => $row['Actividades'],
          'Responsabilidades' => $row['Responsabilidades'],
          'Periodicidad' => $row['Periodicidad'],
          'Observaciones' => $row['Observaciones'],
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>