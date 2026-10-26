<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
	$Codigo = $_POST['Codigo'];
	    
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$Codigo' && Terminacion0 = 1";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion = $row['Terminacion'];
    $json[] = array(
        'Terminacion' => $Terminacion
    );
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>