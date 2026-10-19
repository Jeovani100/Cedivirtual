<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
    $id = $_POST['id'];
     
    $sql = "SELECT * FROM turnero2 where id = $id";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    
    $json[] = array(
        'nombre' => $row['Nombre'],
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>