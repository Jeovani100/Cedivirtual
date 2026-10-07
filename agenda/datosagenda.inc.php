<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_usuario'])) {
	$id_usuario = $_POST['id_usuario'];
    }
    $sql = "SELECT * FROM agenda WHERE id = '$id_usuario'";
        $resultado = $mysqli->query($sql);
        while($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            'id' => $row['id'],
            'Nombre' => $row['Nombre'],
            'Apellidos' => $row['Apellidos'],
            'Fecha' => $row['Fecha']
        );}
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>