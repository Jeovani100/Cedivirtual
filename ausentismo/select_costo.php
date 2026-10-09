<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
	    $year = $_POST['year'];
    }
    $sql = "SELECT * FROM controles_ausentismo2 WHERE Centro_ != '' && id_admin = '$id_admin' && Year = $year";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            'id' => $row['id'],
            'Opcion' => $row['Centro_']
        );
    }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>