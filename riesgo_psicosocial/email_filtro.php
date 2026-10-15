<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
    }
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && (Email = 1 || Email = '0')";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $json[] = array(
        'Email' => $row['Email']
    );
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>