<?php
    include_once '../app/config.inc.php';
    include_once '../app/conexion.inc.php';
    if (isset($_POST['id'])) {
	$id = $_POST['id'];}
    $sql = "SELECT * FROM admin WHERE id != 222";
    $resultado = $mysqli->query($sql);
    $json = array();
    while($row = mysqli_fetch_array($resultado)) {
        $fecha = $row['Fecha_registro'];   
        $fecha0 = strtotime($fecha);
        $Y = date("d/m/y   H:i", $fecha0);
        $Botones = $row['Botones'];
        if($Botones == 1) {
            $Color ="#f58634";
        } else {
            $Color ="#666666";
        }
        $json[] = array(
            'id' => $row['id'],
            'Nit' => $row['Nit'],
            'Razon' => $row['Razon'],
            'Sede' => $row['Sede'],
            'PersonaC' => $row['PersonaC'],
            'TelefonoC' => $row['TelefonoC'],
            'Codigo' => $row['Ausentismo'],
            'Fecha_registro' => $Y,
            'Color' => $Color
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>