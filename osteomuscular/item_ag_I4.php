<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';

	$Codigo = $_POST['Codigo'];
	$id_admin = $_POST['id_admin'];
	$id = $_POST['id'];

    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$Codigo' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');  // Formatea antes de imprimir
    
	$sql = "SELECT * FROM admin WHERE id = $id";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Botones_ = $row['Botones'];
    if($Botones_ == 1) {
        $Boton ='';
        $Boton2 ='block';
    } else {
        $Boton ='disabled'; 
        $Boton2 ='none';
    }
    
    $sql = "SELECT * FROM implementacion4 WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) { 
        $id = $row['id'];
        $P1 = $row['P1'];
        $P2 = $row['P2'];
        $P3 = $row['P3'];
        $P4 = $row['P4'];
        $P5 = $row['P5'];
        $P6 = $row['P6'];
        $P7 = $row['P7'];
        $P8 = $row['P8'];
        $P9 = $row['P9'];
        $P10 = $row['P10'];
        $P11 = $row['P11'];
        $P12 = $row['P12'];
        $E1 = $row['E1'];
        $E2 = $row['E2'];
        $E3 = $row['E3'];
        $E4 = $row['E4'];
        $E5 = $row['E5'];
        $E6 = $row['E6'];
        $E7 = $row['E7'];
        $E8 = $row['E8'];
        $E9 = $row['E9'];
        $E10 = $row['E10'];
        $E11 = $row['E11'];
        $E12 = $row['E12'];
        $Total_P_0 = $P1+$P2+$P3+$P4+$P5+$P6+$P7+$P8+$P9+$P10+$P11+$P12;
        $Total_E = $E1+$E2+$E3+$E4+$E5+$E6+$E7+$E8+$E9+$E10+$E11+$E12;   
        if ($Total_P_0 == 0) {
            $Total_P = 1;
        } else {
            $Total_P = $Total_P_0;
        }
        $porcentaje = round((($Total_E/$Total_P)*100), 1, PHP_ROUND_HALF_UP);
        $sql = "UPDATE implementacion4 SET Porcentaje = $porcentaje WHERE id = '$id'"; 
        $result = $mysqli->query($sql);
        
        $json[] = array(
            'id' => $row['id'],
            'Tipo' => $row['Tipo'],
            'Actividades' => $row['Actividades'],
            'Responsabilidades' => $row['Responsabilidades'],
            'Periodicidad' => $row['Periodicidad'],
            'P1' => $P1,
            'P2' => $P2,
            'P3' => $P3,
            'P4' => $P4,
            'P5' => $P5,
            'P6' => $P6,
            'P7' => $P7,
            'P8' => $P8,
            'P9' => $P9,
            'P10' => $P10,
            'P11' => $P11,
            'P12' => $P12,
            'E1' => $E1,
            'E2' => $E2,
            'E3' => $E3,
            'E4' => $E4,
            'E5' => $E5,
            'E6' => $E6,
            'E7' => $E7,
            'E8' => $E8,
            'E9' => $E9,
            'E10' => $E10,
            'E11' => $E11,
            'E12' => $E12,
            'Total_P' => $Total_P_0,
            'Total_E' => $Total_E,
            'Porcentaje' => $porcentaje,
            'Observaciones' => $row['Observaciones'],
            'Boton' => $Boton,
            'Boton2' => $Boton2,
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>