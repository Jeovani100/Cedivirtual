<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';

    $sql = "SELECT * FROM turnero3 ORDER BY id DESC LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $id = $row['Valor'];
    if ($id) {
        $id2 = $id;
    } else if (!$id)  {
       $id2 = '0'; 
    }   
    $json[] = array(
        'id2' => $id2,
        'Nombre' => $row['Nombre'],
        'Dependencia' => $row['Dependencia'],
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
    
    if ($id2 == 1) {
    $sql = "DELETE FROM turnero3"; 
    $result = $mysqli->query($sql);
}
?>