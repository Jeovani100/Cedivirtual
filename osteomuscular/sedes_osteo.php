<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
    }
    $sql = "SELECT DISTINCT Sede FROM locomocion WHERE id_admin = '$id_admin'";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $Sede = $row['Sede'];
        $json[] = array(
            'Sede' => $Sede
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>