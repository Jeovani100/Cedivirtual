<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
    }
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$id_admin' && (Diligenciados = 1 || Diligenciados = '0')";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $json[] = array(
        'Diligenciados' => $row['Diligenciados']
    );
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>