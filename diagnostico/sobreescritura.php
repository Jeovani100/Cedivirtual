<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $reescribir = $_POST['reescribir'];
    $sql = "SELECT * FROM controles_diagnostico WHERE id_admin = 1";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Sobrescritura = $row['Sobrescritura'];
    $Sobrescritura2  = $row['Sobrescritura'];
    if($reescribir == 1 && $Sobrescritura == 1) {
        $sql = "UPDATE controles_diagnostico SET Sobrescritura = '0' WHERE id_admin = 1";
        $result = $mysqli->query($sql);
        $Sobrescritura2 = 0;
    } 
    if($reescribir == 1 && $Sobrescritura == 0) {
        $sql = "UPDATE controles_diagnostico SET Sobrescritura = '1' WHERE id_admin = 1";
        $result = $mysqli->query($sql);
        $Sobrescritura2 = 1;
    }
    $json[] = array(
        'Sobrescritura' => $Sobrescritura2
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>    