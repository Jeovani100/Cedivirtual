<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
    }
    $sql = "SELECT * FROM controles WHERE Certificada != '' && id_admin = '$id_admin'";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            'id' => $row['id'],
            'Certificada' => $row['Certificada']
        );
    }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>