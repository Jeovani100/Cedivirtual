<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
$connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
$connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect -> exec("SET CHARACTER SET utf8");
$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
mysqli_set_charset($mysqli, "utf8"); 
$id_admin = $_POST['id_admin'];
$search = $_POST['search'];
//$search = '13503361';
if(!empty($search)) {
    $sql = "SELECT * FROM locomocion WHERE id_admin = '$id_admin' && Cedula LIKE '$search%' && YEAR(Fecha_registro) = 2021 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row1 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula1 =  $row1['Cedula'];
    $Paciente1 =  $row1['Nombre'];
    $Cargo1 =  $row1['Cargo'];
    $Codigo1 =  $row1['Codigo'];
    $P1_R1 =  $row1['Riesgo1'];
    $P1_R2 =  $row1['Riesgo2'];
    $P1_R3 =  $row1['Riesgo3'];
    $P1_R4 =  $row1['Riesgo4'];
    $P1_R5 =  $row1['Riesgo5'];
    $P1_R6 =  $row1['Riesgo6'];
    $P1_R7 =  $row1['Riesgo7'];
    $P1_R8 =  $row1['Riesgo8'];
    $P1_R9 =  $row1['Riesgo9'];
    $P1_N1 =  $row1['P8'];
    $P1_N2 =  $row1['P9'];
    $P1_N3 =  $row1['P10'];
    $P1_N4 =  $row1['P11'];
    $P1_N5 =  $row1['P12'];
    $P1_N6 =  $row1['P13'];
    $P1_N7 =  $row1['P14'];
    $P1_N8 =  $row1['P15'];
    $P1_N9 =  $row1['P16'];
    
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo1' ORDER BY id ASC LIMIT 1";
        $resultado0 = $mysqli->query($sql);
        $row0 = $resultado0->fetch_array(MYSQLI_ASSOC);
        $diag1_ = $row0['Diagnostico'];
        if($diag1_ == null) {
            $diag1_1 = ' ';
        } else {
            $diag1_1 ='-'.$diag1_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo1' ORDER BY id ASC LIMIT 1,1";
        $resultado2 = $mysqli->query($sql);
        $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
        $diag2_ = $row2['Diagnostico'];
        if($diag2_ == null) {
            $diag1_2 = ' ';
        } else {
            $diag1_2 ='<br>-'.$diag2_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo1' ORDER BY id ASC LIMIT 2,1";
        $resultado3 = $mysqli->query($sql);
        $row3 = $resultado3->fetch_array(MYSQLI_ASSOC);
        $diag3_ = $row3['Diagnostico'];
        if($diag3_ == null) {
            $diag1_3 = ' ';
        } else {
            $diag1_3 ='<br>-'.$diag3_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo1' ORDER BY id ASC LIMIT 3,1";
        $resultado4 = $mysqli->query($sql);
        $row4 = $resultado4->fetch_array(MYSQLI_ASSOC);
        $diag4_ = $row4['Diagnostico'];
        if($diag4_ == null) {
            $diag1_4 = ' ';
        } else {
            $diag1_4 ='<br>-'.$diag4_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo1' ORDER BY id ASC LIMIT 4,1";
        $resultado5 = $mysqli->query($sql);
        $row5 = $resultado5->fetch_array(MYSQLI_ASSOC);
        $diag5_ = $row5['Diagnostico'];
        if($diag5_ == null) {
            $diag1_5 = ' ';
        } else {
            $diag1_5 ='<br>-'.$diag5_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo1' ORDER BY id ASC LIMIT 5,1";
        $resultado6 = $mysqli->query($sql);
        $row6 = $resultado6->fetch_array(MYSQLI_ASSOC);
        $diag6_ = $row6['Diagnostico'];
        if($diag6_ == null) {
            $diag1_6 = ' ';
        } else {
            $diag1_6 ='<br>-'.$diag6_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo1' ORDER BY id ASC LIMIT 6,1";
        $resultado7 = $mysqli->query($sql);
        $row7 = $resultado7->fetch_array(MYSQLI_ASSOC);
        $diag7_ = $row7['Diagnostico'];
        if($diag7_ == null) {
            $diag1_7 = ' ';
        } else {
            $diag1_7 ='<br>-'.$diag7_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo1' ORDER BY id ASC LIMIT 7,1";
        $resultado8 = $mysqli->query($sql);
        $row8 = $resultado8->fetch_array(MYSQLI_ASSOC);
        $diag8_ = $row8['Diagnostico'];
        if($diag8_ == null) {
            $diag1_8 = ' ';
        } else {
            $diag1_8 ='<br>-'.$diag8_;
        }

    $sql = "SELECT * FROM locomocion WHERE id_admin = '$id_admin' && Cedula LIKE '$search%' && YEAR(Fecha_registro) = 2022 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row2 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula2 =  $row2['Cedula'];
    $Paciente2 =  $row2['Nombre'];
    $Genero20 =  $row2['Genero'];
    $Cargo2 =  $row2['Cargo'];
    $Codigo2 =  $row2['Codigo'];
    $P2_R1 =  $row2['Riesgo1'];
    $P2_R2 =  $row2['Riesgo2'];
    $P2_R3 =  $row2['Riesgo3'];
    $P2_R4 =  $row2['Riesgo4'];
    $P2_R5 =  $row2['Riesgo5'];
    $P2_R6 =  $row2['Riesgo6'];
    $P2_R7 =  $row2['Riesgo7'];
    $P2_R8 =  $row2['Riesgo8'];
    $P2_R9 =  $row2['Riesgo9'];
    $P2_N1 =  $row2['P8'];
    $P2_N2 =  $row2['P9'];
    $P2_N3 =  $row2['P10'];
    $P2_N4 =  $row2['P11'];
    $P2_N5 =  $row2['P12'];
    $P2_N6 =  $row2['P13'];
    $P2_N7 =  $row2['P14'];
    $P2_N8 =  $row2['P15'];
    $P2_N9 =  $row2['P16'];
    
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo2' ORDER BY id ASC LIMIT 1";
        $resultado0 = $mysqli->query($sql);
        $row0 = $resultado0->fetch_array(MYSQLI_ASSOC);
        $diag1_ = $row0['Diagnostico'];
        if($diag1_ == null) {
            $diag2_1 = ' ';
        } else {
            $diag2_1 ='-'.$diag1_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo2' ORDER BY id ASC LIMIT 1,1";
        $resultado2 = $mysqli->query($sql);
        $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
        $diag2_ = $row2['Diagnostico'];
        if($diag2_ == null) {
            $diag2_2 = ' ';
        } else {
            $diag2_2 ='<br>-'.$diag2_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo2' ORDER BY id ASC LIMIT 2,1";
        $resultado3 = $mysqli->query($sql);
        $row3 = $resultado3->fetch_array(MYSQLI_ASSOC);
        $diag3_ = $row3['Diagnostico'];
        if($diag3_ == null) {
            $diag2_3 = ' ';
        } else {
            $diag2_3 ='<br>-'.$diag3_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo2' ORDER BY id ASC LIMIT 3,1";
        $resultado4 = $mysqli->query($sql);
        $row4 = $resultado4->fetch_array(MYSQLI_ASSOC);
        $diag4_ = $row4['Diagnostico'];
        if($diag4_ == null) {
            $diag2_4 = ' ';
        } else {
            $diag2_4 ='<br>-'.$diag4_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo2' ORDER BY id ASC LIMIT 4,1";
        $resultado5 = $mysqli->query($sql);
        $row5 = $resultado5->fetch_array(MYSQLI_ASSOC);
        $diag5_ = $row5['Diagnostico'];
        if($diag5_ == null) {
            $diag2_5 = ' ';
        } else {
            $diag2_5 ='<br>-'.$diag5_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo2' ORDER BY id ASC LIMIT 5,1";
        $resultado6 = $mysqli->query($sql);
        $row6 = $resultado6->fetch_array(MYSQLI_ASSOC);
        $diag6_ = $row6['Diagnostico'];
        if($diag6_ == null) {
            $diag2_6 = ' ';
        } else {
            $diag2_6 ='<br>-'.$diag6_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo2' ORDER BY id ASC LIMIT 6,1";
        $resultado7 = $mysqli->query($sql);
        $row7 = $resultado7->fetch_array(MYSQLI_ASSOC);
        $diag7_ = $row7['Diagnostico'];
        if($diag7_ == null) {
            $diag2_7 = ' ';
        } else {
            $diag2_7 ='<br>-'.$diag7_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo2' ORDER BY id ASC LIMIT 7,1";
        $resultado8 = $mysqli->query($sql);
        $row8 = $resultado8->fetch_array(MYSQLI_ASSOC);
        $diag8_ = $row8['Diagnostico'];
        if($diag8_ == null) {
            $diag2_8 = ' ';
        } else {
            $diag2_8 ='<br>-'.$diag8_;
        }

    $sql = "SELECT * FROM locomocion WHERE id_admin = '$id_admin' && Cedula LIKE '$search%' && YEAR(Fecha_registro) = 2023 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row3 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula3 =  $row3['Cedula'];
    $Paciente3 =  $row3['Nombre'];
    $Cargo3 =  $row3['Cargo'];
    $Codigo3 =  $row3['Codigo'];
    $P3_R1 =  $row3['Riesgo1'];
    $P3_R2 =  $row3['Riesgo2'];
    $P3_R3 =  $row3['Riesgo3'];
    $P3_R4 =  $row3['Riesgo4'];
    $P3_R5 =  $row3['Riesgo5'];
    $P3_R6 =  $row3['Riesgo6'];
    $P3_R7 =  $row3['Riesgo7'];
    $P3_R8 =  $row3['Riesgo8'];
    $P3_R9 =  $row3['Riesgo9'];
    $P3_N1 =  $row3['P8'];
    $P3_N2 =  $row3['P9'];
    $P3_N3 =  $row3['P10'];
    $P3_N4 =  $row3['P11'];
    $P3_N5 =  $row3['P12'];
    $P3_N6 =  $row3['P13'];
    $P3_N7 =  $row3['P14'];
    $P3_N8 =  $row3['P15'];
    $P3_N9 =  $row3['P16'];
    
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo3' ORDER BY id ASC LIMIT 1";
        $resultado0 = $mysqli->query($sql);
        $row0 = $resultado0->fetch_array(MYSQLI_ASSOC);
        $diag1_ = $row0['Diagnostico'];
        if($diag1_ == null) {
            $diag3_1 = ' ';
        } else {
            $diag3_1 ='-'.$diag1_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo3' ORDER BY id ASC LIMIT 1,1";
        $resultado2 = $mysqli->query($sql);
        $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
        $diag2_ = $row2['Diagnostico'];
        if($diag2_ == null) {
            $diag3_2 = ' ';
        } else {
            $diag3_2 ='<br>-'.$diag2_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo3' ORDER BY id ASC LIMIT 2,1";
        $resultado3 = $mysqli->query($sql);
        $row3 = $resultado3->fetch_array(MYSQLI_ASSOC);
        $diag3_ = $row3['Diagnostico'];
        if($diag3_ == null) {
            $diag3_3 = ' ';
        } else {
            $diag3_3 ='<br>-'.$diag3_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo3' ORDER BY id ASC LIMIT 3,1";
        $resultado4 = $mysqli->query($sql);
        $row4 = $resultado4->fetch_array(MYSQLI_ASSOC);
        $diag4_ = $row4['Diagnostico'];
        if($diag4_ == null) {
            $diag3_4 = ' ';
        } else {
            $diag3_4 ='<br>-'.$diag4_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo3' ORDER BY id ASC LIMIT 4,1";
        $resultado5 = $mysqli->query($sql);
        $row5 = $resultado5->fetch_array(MYSQLI_ASSOC);
        $diag5_ = $row5['Diagnostico'];
        if($diag5_ == null) {
            $diag3_5 = ' ';
        } else {
            $diag3_5 ='<br>-'.$diag5_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo3' ORDER BY id ASC LIMIT 5,1";
        $resultado6 = $mysqli->query($sql);
        $row6 = $resultado6->fetch_array(MYSQLI_ASSOC);
        $diag6_ = $row6['Diagnostico'];
        if($diag6_ == null) {
            $diag3_6 = ' ';
        } else {
            $diag3_6 ='<br>-'.$diag6_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo3' ORDER BY id ASC LIMIT 6,1";
        $resultado7 = $mysqli->query($sql);
        $row7 = $resultado7->fetch_array(MYSQLI_ASSOC);
        $diag7_ = $row7['Diagnostico'];
        if($diag7_ == null) {
            $diag3_7 = ' ';
        } else {
            $diag3_7 ='<br>-'.$diag7_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo3' ORDER BY id ASC LIMIT 7,1";
        $resultado8 = $mysqli->query($sql);
        $row8 = $resultado8->fetch_array(MYSQLI_ASSOC);
        $diag8_ = $row8['Diagnostico'];
        if($diag8_ == null) {
            $diag3_8 = ' ';
        } else {
            $diag3_8 ='<br>-'.$diag8_;
        }

    $sql = "SELECT * FROM locomocion WHERE id_admin = '$id_admin' && Cedula LIKE '$search%' && YEAR(Fecha_registro) = 2024 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row4 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula4 =  $row4['Cedula'];
    $Paciente4 =  $row4['Nombre'];
    $Cargo4 =  $row4['Cargo'];
    $Codigo4 =  $row4['Codigo'];
    $P4_R1 =  $row4['Riesgo1'];
    $P4_R2 =  $row4['Riesgo2'];
    $P4_R3 =  $row4['Riesgo3'];
    $P4_R4 =  $row4['Riesgo4'];
    $P4_R5 =  $row4['Riesgo5'];
    $P4_R6 =  $row4['Riesgo6'];
    $P4_R7 =  $row4['Riesgo7'];
    $P4_R8 =  $row4['Riesgo8'];
    $P4_R9 =  $row4['Riesgo9'];
    $P4_N1 =  $row4['P8'];
    $P4_N2 =  $row4['P9'];
    $P4_N3 =  $row4['P10'];
    $P4_N4 =  $row4['P11'];
    $P4_N5 =  $row4['P12'];
    $P4_N6 =  $row4['P13'];
    $P4_N7 =  $row4['P14'];
    $P4_N8 =  $row4['P15'];
    $P4_N9 =  $row4['P16'];
    
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo4' ORDER BY id ASC LIMIT 1";
        $resultado0 = $mysqli->query($sql);
        $row0 = $resultado0->fetch_array(MYSQLI_ASSOC);
        $diag1_ = $row0['Diagnostico'];
        if($diag1_ == null) {
            $diag4_1 = ' ';
        } else {
            $diag4_1 ='-'.$diag1_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo4' ORDER BY id ASC LIMIT 1,1";
        $resultado2 = $mysqli->query($sql);
        $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
        $diag2_ = $row2['Diagnostico'];
        if($diag2_ == null) {
            $diag4_2 = ' ';
        } else {
            $diag4_2 ='<br>-'.$diag2_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo4' ORDER BY id ASC LIMIT 2,1";
        $resultado3 = $mysqli->query($sql);
        $row3 = $resultado3->fetch_array(MYSQLI_ASSOC);
        $diag3_ = $row3['Diagnostico'];
        if($diag3_ == null) {
            $diag4_3 = ' ';
        } else {
            $diag4_3 ='<br>-'.$diag3_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo4' ORDER BY id ASC LIMIT 3,1";
        $resultado4 = $mysqli->query($sql);
        $row4 = $resultado4->fetch_array(MYSQLI_ASSOC);
        $diag4_ = $row4['Diagnostico'];
        if($diag4_ == null) {
            $diag4_4 = ' ';
        } else {
            $diag4_4 ='<br>-'.$diag4_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo4' ORDER BY id ASC LIMIT 4,1";
        $resultado5 = $mysqli->query($sql);
        $row5 = $resultado5->fetch_array(MYSQLI_ASSOC);
        $diag5_ = $row5['Diagnostico'];
        if($diag5_ == null) {
            $diag4_5 = ' ';
        } else {
            $diag4_5 ='<br>-'.$diag5_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo4' ORDER BY id ASC LIMIT 5,1";
        $resultado6 = $mysqli->query($sql);
        $row6 = $resultado6->fetch_array(MYSQLI_ASSOC);
        $diag6_ = $row6['Diagnostico'];
        if($diag6_ == null) {
            $diag4_6 = ' ';
        } else {
            $diag4_6 ='<br>-'.$diag6_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo4' ORDER BY id ASC LIMIT 6,1";
        $resultado7 = $mysqli->query($sql);
        $row7 = $resultado7->fetch_array(MYSQLI_ASSOC);
        $diag7_ = $row7['Diagnostico'];
        if($diag7_ == null) {
            $diag4_7 = ' ';
        } else {
            $diag4_7 ='<br>-'.$diag7_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo4' ORDER BY id ASC LIMIT 7,1";
        $resultado8 = $mysqli->query($sql);
        $row8 = $resultado8->fetch_array(MYSQLI_ASSOC);
        $diag8_ = $row8['Diagnostico'];
        if($diag8_ == null) {
            $diag4_8 = ' ';
        } else {
            $diag4_8 ='<br>-'.$diag8_;
        }


    $sql = "SELECT * FROM locomocion WHERE id_admin = '$id_admin' && Cedula LIKE '$search%' && YEAR(Fecha_registro) = 2025 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row5 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula5 =  $row5['Cedula'];
    $Paciente5 =  $row5['Nombre'];
    $Cargo5 =  $row5['Cargo'];
    $Codigo5 =  $row5['Codigo'];
    $P5_R1 =  $row5['Riesgo1'];
    $P5_R2 =  $row5['Riesgo2'];
    $P5_R3 =  $row5['Riesgo3'];
    $P5_R4 =  $row5['Riesgo4'];
    $P5_R5 =  $row5['Riesgo5'];
    $P5_R6 =  $row5['Riesgo6'];
    $P5_R7 =  $row5['Riesgo7'];
    $P5_R8 =  $row5['Riesgo8'];
    $P5_R9 =  $row5['Riesgo9'];
    $P5_N1 =  $row5['P8'];
    $P5_N2 =  $row5['P9'];
    $P5_N3 =  $row5['P10'];
    $P5_N4 =  $row5['P11'];
    $P5_N5 =  $row5['P12'];
    $P5_N6 =  $row5['P13'];
    $P5_N7 =  $row5['P14'];
    $P5_N8 =  $row5['P15'];
    $P5_N9 =  $row5['P16'];
    
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo5' ORDER BY id ASC LIMIT 1";
        $resultado0 = $mysqli->query($sql);
        $row0 = $resultado0->fetch_array(MYSQLI_ASSOC);
        $diag1_ = $row0['Diagnostico'];
        if($diag1_ == null) {
            $diag5_1 = ' ';
        } else {
            $diag5_1 ='-'.$diag1_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo5' ORDER BY id ASC LIMIT 1,1";
        $resultado2 = $mysqli->query($sql);
        $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
        $diag2_ = $row2['Diagnostico'];
        if($diag2_ == null) {
            $diag5_2 = ' ';
        } else {
            $diag5_2 ='<br>-'.$diag2_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo5' ORDER BY id ASC LIMIT 2,1";
        $resultado3 = $mysqli->query($sql);
        $row3 = $resultado3->fetch_array(MYSQLI_ASSOC);
        $diag3_ = $row3['Diagnostico'];
        if($diag3_ == null) {
            $diag5_3 = ' ';
        } else {
            $diag5_3 ='<br>-'.$diag3_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo5' ORDER BY id ASC LIMIT 3,1";
        $resultado4 = $mysqli->query($sql);
        $row4 = $resultado4->fetch_array(MYSQLI_ASSOC);
        $diag4_ = $row4['Diagnostico'];
        if($diag4_ == null) {
            $diag5_4 = ' ';
        } else {
            $diag5_4 ='<br>-'.$diag4_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo5' ORDER BY id ASC LIMIT 4,1";
        $resultado5 = $mysqli->query($sql);
        $row5 = $resultado5->fetch_array(MYSQLI_ASSOC);
        $diag5_ = $row5['Diagnostico'];
        if($diag5_ == null) {
            $diag5_5 = ' ';
        } else {
            $diag5_5 ='<br>-'.$diag5_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo5' ORDER BY id ASC LIMIT 5,1";
        $resultado6 = $mysqli->query($sql);
        $row6 = $resultado6->fetch_array(MYSQLI_ASSOC);
        $diag6_ = $row6['Diagnostico'];
        if($diag6_ == null) {
            $diag5_6 = ' ';
        } else {
            $diag5_6 ='<br>-'.$diag6_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo5' ORDER BY id ASC LIMIT 6,1";
        $resultado7 = $mysqli->query($sql);
        $row7 = $resultado7->fetch_array(MYSQLI_ASSOC);
        $diag7_ = $row7['Diagnostico'];
        if($diag7_ == null) {
            $diag5_7 = ' ';
        } else {
            $diag5_7 ='<br>-'.$diag7_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo5' ORDER BY id ASC LIMIT 7,1";
        $resultado8 = $mysqli->query($sql);
        $row8 = $resultado8->fetch_array(MYSQLI_ASSOC);
        $diag8_ = $row8['Diagnostico'];
        if($diag8_ == null) {
            $diag5_8 = ' ';
        } else {
            $diag5_8 ='<br>-'.$diag8_;
        }
        
    $sql = "SELECT * FROM locomocion WHERE id_admin = '$id_admin' && Cedula LIKE '$search%' && YEAR(Fecha_registro) = 2026 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row6 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula6 =  $row6['Cedula'];
    $Paciente6 =  $row6['Nombre'];
    $Cargo6 =  $row6['Cargo'];
    $P6_R1 =  $row6['Riesgo1'];
    $P6_R2 =  $row6['Riesgo2'];
    $P6_R3 =  $row6['Riesgo3'];
    $P6_R4 =  $row6['Riesgo4'];
    $P6_R5 =  $row6['Riesgo5'];
    $P6_R6 =  $row6['Riesgo6'];
    $P6_R7 =  $row6['Riesgo7'];
    $P6_R8 =  $row6['Riesgo8'];
    $P6_R9 =  $row6['Riesgo9'];
    $P6_N1 =  $row6['P8'];
    $P6_N2 =  $row6['P9'];
    $P6_N3 =  $row6['P10'];
    $P6_N4 =  $row6['P11'];
    $P6_N5 =  $row6['P12'];
    $P6_N6 =  $row6['P13'];
    $P6_N7 =  $row6['P14'];
    $P6_N8 =  $row6['P15'];
    $P6_N9 =  $row6['P16'];

    $sql = "SELECT * FROM locomocion WHERE id_admin = '$id_admin' && Cedula LIKE '$search%' && YEAR(Fecha_registro) = 2027 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row7 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula7 =  $row7['Cedula'];
    $Paciente7 =  $row7['Nombre'];
    $Cargo7 =  $row7['Cargo'];
    $P7_R1 =  $row7['Riesgo1'];
    $P7_R2 =  $row7['Riesgo2'];
    $P7_R3 =  $row7['Riesgo3'];
    $P7_R4 =  $row7['Riesgo4'];
    $P7_R5 =  $row7['Riesgo5'];
    $P7_R6 =  $row7['Riesgo6'];
    $P7_R7 =  $row7['Riesgo7'];
    $P7_R8 =  $row7['Riesgo8'];
    $P7_R9 =  $row7['Riesgo9'];
    $P7_N1 =  $row7['P8'];
    $P7_N2 =  $row7['P9'];
    $P7_N3 =  $row7['P10'];
    $P7_N4 =  $row7['P11'];
    $P7_N5 =  $row7['P12'];
    $P7_N6 =  $row7['P13'];
    $P7_N7 =  $row7['P14'];
    $P7_N8 =  $row7['P15'];
    $P7_N9 =  $row7['P16'];

    $sql = "SELECT * FROM locomocion WHERE id_admin = '$id_admin' && Cedula LIKE '$search%' && YEAR(Fecha_registro) = 2028 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row8 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula8 =  $row8['Cedula'];
    $Paciente8 =  $row8['Nombre'];
    $Cargo8 =  $row8['Cargo'];
    $P8_R1 =  $row8['Riesgo1'];
    $P8_R2 =  $row8['Riesgo2'];
    $P8_R3 =  $row8['Riesgo3'];
    $P8_R4 =  $row8['Riesgo4'];
    $P8_R5 =  $row8['Riesgo5'];
    $P8_R6 =  $row8['Riesgo6'];
    $P8_R7 =  $row8['Riesgo7'];
    $P8_R8 =  $row8['Riesgo8'];
    $P8_R9 =  $row8['Riesgo9'];
    $P8_N1 =  $row8['P8'];
    $P8_N2 =  $row8['P9'];
    $P8_N3 =  $row8['P10'];
    $P8_N4 =  $row8['P11'];
    $P8_N5 =  $row8['P12'];
    $P8_N6 =  $row8['P13'];
    $P8_N7 =  $row8['P14'];
    $P8_N8 =  $row8['P15'];
    $P8_N9 =  $row8['P16'];
    
    $Genero10 = $row1['Genero'];
    if ($Genero10 == 'M' || $Genero10 == 'MASCULINO') {
        $Genero1 = 'MASCULINO';
    } else if ($Genero10 == 'F' || $Genero10 == 'FEMENINO') {
        $Genero1 = 'FEMENINO';
    }
    $Genero20 = $row2['Genero'];
    if ($Genero20 == 'M' || $Genero20 == 'MASCULINO') {
        $Genero2 = 'MASCULINO';
    } else if ($Genero20 == 'F' || $Genero20 == 'FEMENINO') {
        $Genero2 = 'FEMENINO';
    }
    $Genero30 = $row3['Genero'];
    if ($Genero30 == 'M' || $Genero30 == 'MASCULINO') {
        $Genero3 = 'MASCULINO';
    } else if ($Genero30 == 'F' || $Genero30 == 'FEMENINO') {
        $Genero3 = 'FEMENINO';
    }
    $Genero40 = $row4['Genero'];
    if ($Genero40 == 'M' || $Genero40 == 'MASCULINO') {
        $Genero4 = 'MASCULINO';
    } else if ($Genero40 == 'F' || $Genero40 == 'FEMENINO') {
        $Genero4 = 'FEMENINO';
    }
     $Genero50 = $row5['Genero'];
    if ($Genero50 == 'M' || $Genero50 == 'MASCULINO') {
        $Genero5 = 'MASCULINO';
    } else if ($Genero50 == 'F' || $Genero50 == 'FEMENINO') {
        $Genero5 = 'FEMENINO';
    }
     $Genero60 = $row6['Genero'];
    if ($Genero60 == 'M' || $Genero70 == 'MASCULINO') {
        $Genero6 = 'MASCULINO';
    } else if ($Genero60 == 'F' || $Genero60 == 'FEMENINO') {
        $Genero6 = 'FEMENINO';
    }
     $Genero70 = $row7['Genero'];
    if ($Genero70 == 'M' || $Genero70 == 'MASCULINO') {
        $Genero7 = 'MASCULINO';
    } else if ($Genero70 == 'F' || $Genero70 == 'FEMENINO') {
        $Genero7 = 'FEMENINO';
    }
     $Genero80 = $row8['Genero'];
    if ($Genero80 == 'M' || $Genero80 == 'MASCULINO') {
        $Genero8 = 'MASCULINO';
    } else if ($Genero80 == 'F' || $Genero80 == 'FEMENINO') {
        $Genero8 = 'FEMENINO';
    }

    $json[] = array(
        'Cedula1' => $Cedula1,
        'Paciente1' => $Paciente1,
        'Genero1' => $Genero1,
        'Cargo1' => $Cargo1,
        'Diagnostico1' => $diag1_1.$diag1_2.$diag1_3.$diag1_4.$diag1_5.$diag1_6.$diag1_7.$diag1_8,
        'P1_R1' => $P1_R1,
        'P1_R2' => $P1_R2,
        'P1_R3' => $P1_R3,
        'P1_R4' => $P1_R4,
        'P1_R5' => $P1_R5,
        'P1_R6' => $P1_R6,
        'P1_R7' => $P1_R7,
        'P1_R8' => $P1_R8,
        'P1_R9' => $P1_R9,
        'P1_N1' => $P1_N1,
        'P1_N2' => $P1_N2,
        'P1_N3' => $P1_N3,
        'P1_N4' => $P1_N4,
        'P1_N5' => $P1_N5,
        'P1_N6' => $P1_N6,
        'P1_N7' => $P1_N7,
        'P1_N8' => $P1_N8,
        'P1_N9' => $P1_N9,
       
        'Cedula2' => $Cedula2,
        'Paciente2' => $Paciente2,
        'Genero2' => $Genero2,
        'Cargo2' => $Cargo2,
        'Diagnostico2' => $diag2_1.$diag2_2.$diag2_3.$diag2_4.$diag2_5.$diag2_6.$diag2_7.$diag2_8,
        'P2_R1' => $P2_R1,
        'P2_R2' => $P2_R2,
        'P2_R3' => $P2_R3,
        'P2_R4' => $P2_R4,
        'P2_R5' => $P2_R5,
        'P2_R6' => $P2_R6,
        'P2_R7' => $P2_R7,
        'P2_R8' => $P2_R8,
        'P2_R9' => $P2_R9,
        'P2_N1' => $P2_N1,
        'P2_N2' => $P2_N2,
        'P2_N3' => $P2_N3,
        'P2_N4' => $P2_N4,
        'P2_N5' => $P2_N5,
        'P2_N6' => $P2_N6,
        'P2_N7' => $P2_N7,
        'P2_N8' => $P2_N8,
        'P2_N9' => $P2_N9,
      
        'Cedula3' => $Cedula3,
        'Paciente3' => $Paciente3,
        'Genero3' => $Genero3,
        'Cargo3' => $Cargo3,
        'Diagnostico3' => $diag3_1.$diag3_2.$diag3_3.$diag3_4.$diag3_5.$diag3_6.$diag3_7.$diag3_8,
        'P3_R1' => $P3_R1,
        'P3_R2' => $P3_R2,
        'P3_R3' => $P3_R3,
        'P3_R4' => $P3_R4,
        'P3_R5' => $P3_R5,
        'P3_R6' => $P3_R6,
        'P3_R7' => $P3_R7,
        'P3_R8' => $P3_R8,
        'P3_R9' => $P3_R9,
        'P3_N1' => $P3_N1,
        'P3_N2' => $P3_N2,
        'P3_N3' => $P3_N3,
        'P3_N4' => $P3_N4,
        'P3_N5' => $P3_N5,
        'P3_N6' => $P3_N6,
        'P3_N7' => $P3_N7,
        'P3_N8' => $P3_N8,
        'P3_N9' => $P3_N9,
       
        'Cedula4' => $Cedula4,
        'Paciente4' => $Paciente4,
        'Genero4' => $Genero4,
        'Cargo4' => $Cargo4,
        'Diagnostico4' => $diag4_1.$diag4_2.$diag4_3.$diag4_4.$diag4_5.$diag4_6.$diag4_7.$diag4_8,
        'P4_R1' => $P4_R1,
        'P4_R2' => $P4_R2,
        'P4_R3' => $P4_R3,
        'P4_R4' => $P4_R4,
        'P4_R5' => $P4_R5,
        'P4_R6' => $P4_R6,
        'P4_R7' => $P4_R7,
        'P4_R8' => $P4_R8,
        'P4_R9' => $P4_R9,
        'P4_N1' => $P4_N1,
        'P4_N2' => $P4_N2,
        'P4_N3' => $P4_N3,
        'P4_N4' => $P4_N4,
        'P4_N5' => $P4_N5,
        'P4_N6' => $P4_N6,
        'P4_N7' => $P4_N7,
        'P4_N8' => $P4_N8,
        'P4_N9' => $P4_N9,
      
        'Cedula5' => $Cedula5,
        'Paciente5' => $Paciente5,
        'Genero5' => $Genero5,
        'Cargo5' => $Cargo5,
        'Diagnostico5' => $diag5_1.$diag5_2.$diag5_3.$diag5_4.$diag5_5.$diag5_6.$diag5_7.$diag5_8,
        'P5_R1' => $P5_R1,
        'P5_R2' => $P5_R2,
        'P5_R3' => $P5_R3,
        'P5_R4' => $P5_R4,
        'P5_R5' => $P5_R5,
        'P5_R6' => $P5_R6,
        'P5_R7' => $P5_R7,
        'P5_R8' => $P5_R8,
        'P5_R9' => $P5_R9,
        'P5_N1' => $P5_N1,
        'P5_N2' => $P5_N2,
        'P5_N3' => $P5_N3,
        'P5_N4' => $P5_N4,
        'P5_N5' => $P5_N5,
        'P5_N6' => $P5_N6,
        'P5_N7' => $P5_N7,
        'P5_N8' => $P5_N8,
        'P5_N9' => $P5_N9,
       
        'Cedula6' => $Cedula6,
        'Paciente6' => $Paciente6,
        'Genero6' => $Genero6,
        'Cargo6' => $Cargo6,
        'P6_R1' => $P6_R1,
        'P6_R2' => $P6_R2,
        'P6_R3' => $P6_R3,
        'P6_R4' => $P6_R4,
        'P6_R5' => $P6_R5,
        'P6_R6' => $P6_R6,
        'P6_R7' => $P6_R7,
        'P6_R8' => $P6_R8,
        'P6_R9' => $P6_R9,
        'P6_N1' => $P6_N1,
        'P6_N2' => $P6_N2,
        'P6_N3' => $P6_N3,
        'P6_N4' => $P6_N4,
        'P6_N5' => $P6_N5,
        'P6_N6' => $P6_N6,
        'P6_N7' => $P6_N7,
        'P6_N8' => $P6_N8,
        'P6_N9' => $P6_N9,
      
        'Cedula7' => $Cedula7,
        'Paciente7' => $Paciente7,
        'Genero7' => $Genero7,
        'Cargo7' => $Cargo7,
        'P7_R1' => $P7_R1,
        'P7_R2' => $P7_R2,
        'P7_R3' => $P7_R3,
        'P7_R4' => $P7_R4,
        'P7_R5' => $P7_R5,
        'P7_R6' => $P7_R6,
        'P7_R7' => $P7_R7,
        'P7_R8' => $P7_R8,
        'P7_R9' => $P7_R9,
        'P7_N1' => $P7_N1,
        'P7_N2' => $P7_N2,
        'P7_N3' => $P7_N3,
        'P7_N4' => $P7_N4,
        'P7_N5' => $P7_N5,
        'P7_N6' => $P7_N6,
        'P7_N7' => $P7_N7,
        'P7_N8' => $P7_N8,
        'P7_N9' => $P7_N9,
       
        'Cedula8' => $Cedula8,
        'Paciente8' => $Paciente8,
        'Genero8' => $Genero8,
        'Cargo8' => $Cargo8,
        'P8_R1' => $P8_R1,
        'P8_R2' => $P8_R2,
        'P8_R3' => $P8_R3,
        'P8_R4' => $P8_R4,
        'P8_R5' => $P8_R5,
        'P8_R6' => $P8_R6,
        'P8_R7' => $P8_R7,
        'P8_R8' => $P8_R8,
        'P8_R9' => $P8_R9,
        'P8_N1' => $P8_N1,
        'P8_N2' => $P8_N2,
        'P8_N3' => $P8_N3,
        'P8_N4' => $P8_N4,
        'P8_N5' => $P8_N5,
        'P8_N6' => $P8_N6,
        'P8_N7' => $P8_N7,
        'P8_N8' => $P8_N8,
        'P8_N9' => $P8_N9,
        
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>