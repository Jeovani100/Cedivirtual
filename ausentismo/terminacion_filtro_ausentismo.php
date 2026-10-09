<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
    }
    $sql = "SELECT * FROM controles_ausentismo WHERE id_admin = $id_admin && Terminacion0 = 1";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion = $row['Terminacion'];
    $json[] = array(
        'Terminacion' => $Terminacion
    );
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>