<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
    }
    $sql = "SELECT DISTINCT Empresa_certificada FROM auditivo WHERE id_admin = '$id_admin'";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $Certificada = $row['Empresa_certificada'];
        $json[] = array(
            'Certificada' => $Certificada
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>