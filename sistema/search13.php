<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';

    $search = $_POST['search'];

    $sql = "SELECT * FROM admin WHERE (Nit LIKE '$search%') or (Razon LIKE '$search%') ";
    $resultado = $mysqli->query($sql);
    $json = array();
    while($row = mysqli_fetch_array($resultado)) {
        $fecha = $row['Fecha_registro'];   
        $fecha0 = strtotime($fecha);
        $Y = date("d/m/y   H:i", $fecha0);
        $json[] = array(
            'id' => $row['id'],
            'Nit' => $row['Nit'],
            'Razon' => $row['Razon'],
            'Sede' => $row['Sede'],
            'PersonaC' => $row['PersonaC'],
            'TelefonoC' => $row['TelefonoC'],
            'Ausentismo' => $row['Ausentismo'],
            'Fecha_registro' => $Y    
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>