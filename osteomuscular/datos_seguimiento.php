<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
	    
	$id_u = $_POST['id_u'];

    $sql = "SELECT * FROM locomocion WHERE id = '$id_u'";
    $resultado = $mysqli->query($sql);
    $json = array();
    while($row = mysqli_fetch_array($resultado)) {
        $Riesgo1_ = $row['Riesgo1'];
        switch ($Riesgo1_) {
            case 'Bajo':
                $Riesgo1 = 1;
                break;
            case 'Medio':
                $Riesgo1 = 2;
                break;
            case 'Alto':
                $Riesgo1 = 3;
                break;
            case 'Crítico':
                $Riesgo1 = 4;
                break;    
        }
        $Riesgo2_ = $row['Riesgo2'];
        switch ($Riesgo2_) {
            case 'Bajo':
                $Riesgo2 = 1;
                break;
            case 'Medio':
                $Riesgo2 = 2;
                break;
            case 'Alto':
                $Riesgo2 = 3;
                break;
            case 'Crítico':
                $Riesgo2 = 4;
                break;    
        }
        $Riesgo3_ = $row['Riesgo3'];
        switch ($Riesgo3_) {
            case 'Bajo':
                $Riesgo3 = 1;
                break;
            case 'Medio':
                $Riesgo3 = 2;
                break;
            case 'Alto':
                $Riesgo3 = 3;
                break;
            case 'Crítico':
                $Riesgo3 = 4;
                break;   
        }
         $Riesgo4_ = $row['Riesgo4'];
        switch ($Riesgo4_) {
            case 'Bajo':
                $Riesgo4 = 1;
                break;
            case 'Medio':
                $Riesgo4 = 2;
                break;
            case 'Alto':
                $Riesgo4 = 3;
                break;
            case 'Crítico':
                $Riesgo4 = 4;
                break;    
        }
         $Riesgo5_ = $row['Riesgo5'];
        switch ($Riesgo5_) {
           case 'Bajo':
                $Riesgo5 = 1;
                break;
            case 'Medio':
                $Riesgo5 = 2;
                break;
            case 'Alto':
                $Riesgo5 = 3;
                break;
            case 'Crítico':
                $Riesgo5 = 4;
                break;      
        }
        $Riesgo6_ = $row['Riesgo6'];
        switch ($Riesgo6_) {
           case 'Bajo':
                $Riesgo6 = 1;
                break;
            case 'Medio':
                $Riesgo6 = 2;
                break;
            case 'Alto':
                $Riesgo6 = 3;
                break;
            case 'Crítico':
                $Riesgo6 = 4;
                break;   
        }
         $Riesgo7_ = $row['Riesgo7'];
        switch ($Riesgo7_) {
            case 'Bajo':
                $Riesgo7 = 1;
                break;
            case 'Medio':
                $Riesgo7 = 2;
                break;
            case 'Alto':
                $Riesgo7 = 3;
                break;
            case 'Crítico':
                $Riesgo7 = 4;
                break;   
        }
         $Riesgo8_ = $row['Riesgo8'];
        switch ($Riesgo8_) {
            case 'Bajo':
                $Riesgo8 = 1;
                break;
            case 'Medio':
                $Riesgo8 = 2;
                break;
            case 'Alto':
                $Riesgo8 = 3;
                break;
            case 'Crítico':
                $Riesgo8 = 4;
                break;    
        }
         $Riesgo9_ = $row['Riesgo9'];
        switch ($Riesgo9_) {
           case 'Bajo':
                $Riesgo9 = 1;
                break;
            case 'Medio':
                $Riesgo9 = 2;
                break;
            case 'Alto':
                $Riesgo9 = 3;
                break;
            case 'Crítico':
                $Riesgo9 = 4;
                break;    
        }
        $json[] = array(
            'id' => $row['id'],
            'Nombre' => $row['Nombre'],
            'Caso' => $row['Caso'],
            'Estado' => $row['Estado'],
            'Obs_caso' => $row['Obs_caso'],
            'Obs_estado' => $row['Obs_estado'],
            'Riesgo' => $row['Riesgo'],
            'GES' => $row['GES'],
            'Segmentos' => $row['Segmentos'],
            'Riesgo1' => $Riesgo1,
            'Riesgo2' => $Riesgo2,
            'Riesgo3' => $Riesgo3,
            'Riesgo4' => $Riesgo4,
            'Riesgo5' => $Riesgo5,
            'Riesgo6' => $Riesgo6,
            'Riesgo7' => $Riesgo7,
            'Riesgo8' => $Riesgo8,
            'Riesgo9' => $Riesgo9
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>