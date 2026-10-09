<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
    }
    $sql = "SELECT * FROM controles_ausentismo WHERE id_admin = $id_admin && Inicio0 = 1";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $date2 = new DateTime($Inicio0);
    $Inicio =  $date2->format('Y-m-d 00:00:00');
    $json[] = array(
        'Inicio' => $Inicio0
    );
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>