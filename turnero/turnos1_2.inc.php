<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
    $sql = "SELECT * FROM turnero2 ORDER BY id DESC";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $id = $row['id'];
        
    $sql = "SELECT * FROM turnero2 WHERE id != $id ORDER BY id DESC LIMIT 4";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            'Nombre' => $row['Nombre'],
            'Dependencia' => $row['Dependencia'],
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>