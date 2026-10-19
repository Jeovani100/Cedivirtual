<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
    $sql = "SELECT * FROM turnero ORDER BY id DESC";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
        
    $sql = "SELECT * FROM turnero ORDER BY id DESC LIMIT 20";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $Hora00 = $row['Fecha_registro'];
        $Hora0 = strtotime($Hora00);
        $Hora = date('h:i:s a', $Hora0); 
        $json[] = array(
            'id' => $row['id'],
            'Nombre' => $row['Nombre'],
            'Dependencia' => $row['Dependencia'],
            'Hora' => $Hora
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>