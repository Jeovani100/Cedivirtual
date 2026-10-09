<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
    }
    $sql = "SELECT * FROM controles_ausentismo2 WHERE Centro_ != '' && id_admin = '$id_admin' && Year = 2022";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            'id' => $row['id'],
            'id_admin' => $row['id_admin'],
            'Centro' => $row['Centro_'],
            'Centro_existe' => $row['Centro_existe'],
            'Centro_crear_eliminar' => $row['Centro_crear_eliminar']
        );
    }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>