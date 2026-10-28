<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
    $search = $_POST['search'];
    $id_admin = $_POST['id_admin'];
    
    //$search = '13503361';
    $sql = "SELECT * FROM controles_auditivo WHERE id_admin = '$id_admin' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');

    $sql = "SELECT * FROM auditivo WHERE Cedula = $search ORDER BY Fecha ASC";
    $resultado = $mysqli->query($sql);
    $rowA = $resultado->fetch_array(MYSQLI_ASSOC);
    $Empresa_A =  $rowA['Empresa'];
    $Fecha_A__ =  $rowA['Fecha'];
    $Fecha_A_ = new DateTime($Fecha_A__); 
    $Fecha_A = $Fecha_A_->format('Y');
    $VAOD2000_A =  $rowA['VAOD2000'];
    $VAOD3000_A =  $rowA['VAOD3000'];
    $VAOD4000_A =  $rowA['VAOD4000'];
    $VAOI2000_A =  $rowA['VAOI2000'];
    $VAOI3000_A =  $rowA['VAOI3000'];
    $VAOI4000_A =  $rowA['VAOI4000'];
    $PROMEDIOVAOD_A =  round(($VAOD2000_A+$VAOD3000_A+$VAOD4000_A)/3, 2, PHP_ROUND_HALF_UP);
    $PROMEDIOVAOI_A =  round(($VAOI2000_A+$VAOI3000_A+$VAOI4000_A)/3, 2, PHP_ROUND_HALF_UP);
    $sql = "SELECT * FROM auditivo WHERE Cedula = $search && YEAR(Fecha) = $Year"; 
    $resultado = $mysqli->query($sql);
    $rowZ = $resultado->fetch_array(MYSQLI_ASSOC);
    $Empresa_Z =  $rowZ['Empresa'];
    $Fecha_Z__ =  $rowZ['Fecha'];
    $Fecha_Z_ = new DateTime($Fecha_Z__); 
    $Fecha_Z = $Fecha_Z_->format('Y');
    $VAOD2000_Z =  $rowZ['VAOD2000'];
    $VAOD3000_Z =  $rowZ['VAOD3000'];
    $VAOD4000_Z =  $rowZ['VAOD4000'];
    $VAOI2000_Z =  $rowZ['VAOI2000'];
    $VAOI3000_Z =  $rowZ['VAOI3000'];
    $VAOI4000_Z =  $rowZ['VAOI4000'];
    $PROMEDIOVAOD_Z =  round(($VAOD2000_Z+$VAOD3000_Z+$VAOD4000_Z)/3, 2, PHP_ROUND_HALF_UP);
    $PROMEDIOVAOI_Z =  round(($VAOI2000_Z+$VAOI3000_Z+$VAOI4000_Z)/3, 2, PHP_ROUND_HALF_UP);
    
    $VAOD2000_D = $VAOD2000_A -$VAOD2000_Z;
    $VAOD3000_D = $VAOD3000_A -$VAOD3000_Z;
    $VAOD4000_D = $VAOD4000_A -$VAOD4000_Z;
    $VAOD_D = round($PROMEDIOVAOD_A - $PROMEDIOVAOD_Z, 2, PHP_ROUND_HALF_UP);
    $VAOI2000_D = $VAOI2000_A -$VAOI2000_Z;
    $VAOI3000_D = $VAOI3000_A -$VAOI3000_Z;
    $VAOI4000_D = $VAOI4000_A -$VAOI4000_Z;
    $VAOI_D = round($PROMEDIOVAOI_A - $PROMEDIOVAOI_Z, 2, PHP_ROUND_HALF_UP);
    

if(!empty($search)) {
    $sql = "SELECT * FROM auditivo WHERE Cedula = $search && YEAR(Fecha) = 2018 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row1 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula1 =  $row1['Cedula'];
    $Paciente1 =  $row1['Paciente'];
    $Genero10 =  $row1['Genero'];
    $Cargo1 =  $row1['Cargo'];
    $Escolaridad1 =  $row1['Escolaridad'];
    $Tipoexamen1 =  $row1['Tipoexamen'];
    $VAOD250_1 =  $row1['VAOD250'];
    $VAOD500_1 =  $row1['VAOD500'];
    $VAOD1000_1 =  $row1['VAOD1000'];
    $VAOD2000_1 =  $row1['VAOD2000'];
    $VAOD3000_1 =  $row1['VAOD3000'];
    $VAOD4000_1 =  $row1['VAOD4000'];
    $VAOD6000_1 =  $row1['VAOD6000'];
    $VAOD8000_1 =  $row1['VAOD8000'];
    $VAOD_1 =  $row1['VAOD'];
    $DiagnosticoOD_1 =  $row1['DiagnosticoOD'];
    $VAOI250_1 =  $row1['VAOI250'];
    $VAOI500_1 =  $row1['VAOI500'];
    $VAOI1000_1 =  $row1['VAOI1000'];
    $VAOI2000_1 =  $row1['VAOI2000'];
    $VAOI3000_1 =  $row1['VAOI3000'];
    $VAOI4000_1 =  $row1['VAOI4000'];
    $VAOI6000_1 =  $row1['VAOI6000'];
    $VAOI8000_1 =  $row1['VAOI8000'];
    $VAOI_1 =  $row1['VAOI'];
    $DiagnosticoOI_1 =  $row1['DiagnosticoOI'];
    $GATISST_1 =  $row1['GATISST'];
    
    $sql = "SELECT * FROM auditivo WHERE Cedula = $search  && YEAR(Fecha) = 2019 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row2 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula2 =  $row2['Cedula'];
    $Paciente2 =  $row2['Paciente'];
    $Genero20 =  $row2['Genero'];
    $Cargo2 =  $row2['Cargo'];
    $Escolaridad2 =  $row2['Escolaridad'];
    $Tipoexamen2 =  $row2['Tipoexamen'];
    $VAOD250_2 =  $row2['VAOD250'];
    $VAOD500_2 =  $row2['VAOD500'];
    $VAOD1000_2 =  $row2['VAOD1000'];
    $VAOD2000_2 =  $row2['VAOD2000'];
    $VAOD3000_2 =  $row2['VAOD3000'];
    $VAOD4000_2 =  $row2['VAOD4000'];
    $VAOD6000_2 =  $row2['VAOD6000'];
    $VAOD8000_2 =  $row2['VAOD8000'];
    $VAOD_2 =  $row2['VAOD'];
    $DiagnosticoOD_2 =  $row2['DiagnosticoOD'];
    $VAOI250_2 =  $row2['VAOI250'];
    $VAOI500_2 =  $row2['VAOI500'];
    $VAOI1000_2 =  $row2['VAOI1000'];
    $VAOI2000_2 =  $row2['VAOI2000'];
    $VAOI3000_2 =  $row2['VAOI3000'];
    $VAOI4000_2 =  $row2['VAOI4000'];
    $VAOI6000_2 =  $row2['VAOI6000'];
    $VAOI8000_2 =  $row2['VAOI8000'];
    $VAOI_2 =  $row2['VAOI'];
    $DiagnosticoOI_2 =  $row2['DiagnosticoOI'];
    $GATISST_2 =  $row2['GATISST'];

    $sql = "SELECT * FROM auditivo WHERE Cedula = $search  && YEAR(Fecha) = 2020 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row3 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula3 =  $row3['Cedula'];
    $Paciente3 =  $row3['Paciente'];
    $Genero30 =  $row3['Genero'];
    $Cargo3 =  $row3['Cargo'];
    $Escolaridad3 =  $row3['Escolaridad'];
    $Tipoexamen3 =  $row3['Tipoexamen'];
    $VAOD250_3 =  $row3['VAOD250'];
    $VAOD500_3 =  $row3['VAOD500'];
    $VAOD1000_3 =  $row3['VAOD1000'];
    $VAOD2000_3 =  $row3['VAOD2000'];
    $VAOD3000_3 =  $row3['VAOD3000'];
    $VAOD4000_3 =  $row3['VAOD4000'];
    $VAOD6000_3 =  $row3['VAOD6000'];
    $VAOD8000_3 =  $row3['VAOD8000'];
    $VAOD_3 =  $row3['VAOD'];
    $DiagnosticoOD_3 =  $row3['DiagnosticoOD'];
    $VAOI250_3 =  $row3['VAOI250'];
    $VAOI500_3 =  $row3['VAOI500'];
    $VAOI1000_3 =  $row3['VAOI1000'];
    $VAOI2000_3 =  $row3['VAOI2000'];
    $VAOI3000_3 =  $row3['VAOI3000'];
    $VAOI4000_3 =  $row3['VAOI4000'];
    $VAOI6000_3 =  $row3['VAOI6000'];
    $VAOI8000_3 =  $row3['VAOI8000'];
    $VAOI_3 =  $row3['VAOI'];
    $DiagnosticoOI_3 =  $row3['DiagnosticoOI'];
    $GATISST_3 =  $row3['GATISST'];
    
    $sql = "SELECT * FROM auditivo WHERE Cedula = $search  && YEAR(Fecha) = 2021 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row4 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula4 =  $row4['Cedula'];
    $Paciente4 =  $row4['Paciente'];
    $Genero40 =  $row4['Genero'];
    $Cargo4 =  $row4['Cargo'];
    $Escolaridad4 =  $row4['Escolaridad'];
    $Tipoexamen4 =  $row4['Tipoexamen'];
    $VAOD250_4 =  $row4['VAOD250'];
    $VAOD500_4 =  $row4['VAOD500'];
    $VAOD1000_4 =  $row4['VAOD1000'];
    $VAOD2000_4 =  $row4['VAOD2000'];
    $VAOD3000_4 =  $row4['VAOD3000'];
    $VAOD4000_4 =  $row4['VAOD4000'];
    $VAOD6000_4 =  $row4['VAOD6000'];
    $VAOD8000_4 =  $row4['VAOD8000'];
    $VAOD_4 =  $row4['VAOD'];
    $DiagnosticoOD_4 =  $row4['DiagnosticoOD'];
    $VAOI250_4 =  $row4['VAOI250'];
    $VAOI500_4 =  $row4['VAOI500'];
    $VAOI1000_4 =  $row4['VAOI1000'];
    $VAOI2000_4 =  $row4['VAOI2000'];
    $VAOI3000_4 =  $row4['VAOI3000'];
    $VAOI4000_4 =  $row4['VAOI4000'];
    $VAOI6000_4 =  $row4['VAOI6000'];
    $VAOI8000_4 =  $row4['VAOI8000'];
    $VAOI_4 =  $row4['VAOI'];
    $DiagnosticoOI_4 =  $row4['DiagnosticoOI'];
    $GATISST_4 =  $row4['GATISST'];
    
    $sql = "SELECT * FROM auditivo WHERE Cedula = $search  && YEAR(Fecha) = 2022 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row5 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula5 =  $row5['Cedula'];
    $Paciente5 =  $row5['Paciente'];
    $Genero50 =  $row5['Genero'];
    $Cargo5 =  $row5['Cargo'];
    $Escolaridad5 =  $row5['Escolaridad'];
    $Tipoexamen5 =  $row5['Tipoexamen'];
    $VAOD250_5 =  $row5['VAOD250'];
    $VAOD500_5 =  $row5['VAOD500'];
    $VAOD1000_5 =  $row5['VAOD1000'];
    $VAOD2000_5 =  $row5['VAOD2000'];
    $VAOD3000_5 =  $row5['VAOD3000'];
    $VAOD4000_5 =  $row5['VAOD4000'];
    $VAOD6000_5 =  $row5['VAOD6000'];
    $VAOD8000_5 =  $row5['VAOD8000'];
    $VAOD_5 =  $row5['VAOD'];
    $DiagnosticoOD_5 =  $row5['DiagnosticoOD'];
    $VAOI250_5 =  $row5['VAOI250'];
    $VAOI500_5 =  $row5['VAOI500'];
    $VAOI1000_5 =  $row5['VAOI1000'];
    $VAOI2000_5 =  $row5['VAOI2000'];
    $VAOI3000_5 =  $row5['VAOI3000'];
    $VAOI4000_5 =  $row5['VAOI4000'];
    $VAOI6000_5 =  $row5['VAOI6000'];
    $VAOI8000_5 =  $row5['VAOI8000'];
    $VAOI_5 =  $row5['VAOI'];
    $DiagnosticoOI_5 =  $row5['DiagnosticoOI'];
    $GATISST_5 =  $row5['GATISST'];
    
    $sql = "SELECT * FROM auditivo WHERE Cedula = $search  && YEAR(Fecha) = 2023 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row6 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula6 =  $row6['Cedula'];
    $Paciente6 =  $row6['Paciente'];
    $Genero60 =  $row6['Genero'];
    $Cargo6 =  $row6['Cargo'];
    $Escolaridad6 =  $row6['Escolaridad'];
    $Tipoexamen6 =  $row6['Tipoexamen'];
    $VAOD250_6 =  $row6['VAOD250'];
    $VAOD500_6 =  $row6['VAOD500'];
    $VAOD1000_6 =  $row6['VAOD1000'];
    $VAOD2000_6 =  $row6['VAOD2000'];
    $VAOD3000_6 =  $row6['VAOD3000'];
    $VAOD4000_6 =  $row6['VAOD4000'];
    $VAOD6000_6 =  $row6['VAOD6000'];
    $VAOD8000_6 =  $row6['VAOD8000'];
    $VAOD_6 =  $row6['VAOD'];
    $DiagnosticoOD_6 =  $row6['DiagnosticoOD'];
    $VAOI250_6 =  $row6['VAOI250'];
    $VAOI500_6 =  $row6['VAOI500'];
    $VAOI1000_6 =  $row6['VAOI1000'];
    $VAOI2000_6 =  $row6['VAOI2000'];
    $VAOI3000_6 =  $row6['VAOI3000'];
    $VAOI4000_6 =  $row6['VAOI4000'];
    $VAOI6000_6 =  $row6['VAOI6000'];
    $VAOI8000_6 =  $row6['VAOI8000'];
    $VAOI_6 =  $row6['VAOI'];
    $DiagnosticoOI_6 =  $row6['DiagnosticoOI'];
    $GATISST_6 =  $row6['GATISST'];
    
    $sql = "SELECT * FROM auditivo WHERE Cedula = $search  && YEAR(Fecha) = 2024 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row7 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula7 =  $row7['Cedula'];
    $Paciente7 =  $row7['Paciente'];
    $Genero70 =  $row7['Genero'];
    $Cargo7 =  $row7['Cargo'];
    $Escolaridad7 =  $row7['Escolaridad'];
    $Tipoexamen7 =  $row7['Tipoexamen'];
    $VAOD250_7 =  $row7['VAOD250'];
    $VAOD500_7 =  $row7['VAOD500'];
    $VAOD1000_7 =  $row7['VAOD1000'];
    $VAOD2000_7 =  $row7['VAOD2000'];
    $VAOD3000_7 =  $row7['VAOD3000'];
    $VAOD4000_7 =  $row7['VAOD4000'];
    $VAOD6000_7 =  $row7['VAOD6000'];
    $VAOD8000_7 =  $row7['VAOD8000'];
    $VAOD_7 =  $row7['VAOD'];
    $DiagnosticoOD_7 =  $row7['DiagnosticoOD'];
    $VAOI250_7 =  $row7['VAOI250'];
    $VAOI500_7 =  $row7['VAOI500'];
    $VAOI1000_7 =  $row7['VAOI1000'];
    $VAOI2000_7 =  $row7['VAOI2000'];
    $VAOI3000_7 =  $row7['VAOI3000'];
    $VAOI4000_7 =  $row7['VAOI4000'];
    $VAOI6000_7 =  $row7['VAOI6000'];
    $VAOI8000_7 =  $row7['VAOI8000'];
    $VAOI_7 =  $row7['VAOI'];
    $DiagnosticoOI_7 =  $row7['DiagnosticoOI'];
    $GATISST_7 =  $row7['GATISST'];
    
    $sql = "SELECT * FROM auditivo WHERE Cedula = $search  && YEAR(Fecha) = 2025 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row8 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula8 =  $row8['Cedula'];
    $Paciente8 =  $row8['Paciente'];
    $Genero80 =  $row8['Genero'];
    $Cargo8 =  $row8['Cargo'];
    $Escolaridad8 =  $row8['Escolaridad'];
    $Tipoexamen8 =  $row8['Tipoexamen'];
    $VAOD250_8 =  $row8['VAOD250'];
    $VAOD500_8 =  $row8['VAOD500'];
    $VAOD1000_8 =  $row8['VAOD1000'];
    $VAOD2000_8 =  $row8['VAOD2000'];
    $VAOD3000_8 =  $row8['VAOD3000'];
    $VAOD4000_8 =  $row8['VAOD4000'];
    $VAOD6000_8 =  $row8['VAOD6000'];
    $VAOD8000_8 =  $row8['VAOD8000'];
    $VAOD_8 =  $row8['VAOD'];
    $DiagnosticoOD_8 =  $row8['DiagnosticoOD'];
    $VAOI250_8 =  $row8['VAOI250'];
    $VAOI500_8 =  $row8['VAOI500'];
    $VAOI1000_8 =  $row8['VAOI1000'];
    $VAOI2000_8 =  $row8['VAOI2000'];
    $VAOI3000_8 =  $row8['VAOI3000'];
    $VAOI4000_8 =  $row8['VAOI4000'];
    $VAOI6000_8 =  $row8['VAOI6000'];
    $VAOI8000_8 =  $row8['VAOI8000'];
    $VAOI_8 =  $row8['VAOI'];
    $DiagnosticoOI_8 =  $row8['DiagnosticoOI'];
    $GATISST_8 =  $row8['GATISST'];
    
    $sql = "SELECT * FROM auditivo WHERE Cedula = $search  && YEAR(Fecha) = 2026 LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row9 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Cedula9 =  $row9['Cedula'];
    $Paciente9 =  $row9['Paciente'];
    $Genero90 =  $row9['Genero'];
    $Cargo9 =  $row9['Cargo'];
    $Escolaridad9 =  $row9['Escolaridad'];
    $Tipoexamen9 =  $row9['Tipoexamen'];
    $VAOD250_9 =  $row9['VAOD250'];
    $VAOD500_9 =  $row9['VAOD500'];
    $VAOD1000_9 =  $row9['VAOD1000'];
    $VAOD2000_9 =  $row9['VAOD2000'];
    $VAOD3000_9 =  $row9['VAOD3000'];
    $VAOD4000_9 =  $row9['VAOD4000'];
    $VAOD6000_9 =  $row9['VAOD6000'];
    $VAOD8000_9 =  $row9['VAOD8000'];
    $VAOD_9 =  $row9['VAOD'];
    $DiagnosticoOD_9 =  $row9['DiagnosticoOD'];
    $VAOI250_9 =  $row9['VAOI250'];
    $VAOI500_9 =  $row9['VAOI500'];
    $VAOI1000_9 =  $row9['VAOI1000'];
    $VAOI2000_9 =  $row9['VAOI2000'];
    $VAOI3000_9 =  $row9['VAOI3000'];
    $VAOI4000_9 =  $row9['VAOI4000'];
    $VAOI6000_9 =  $row9['VAOI6000'];
    $VAOI8000_9 =  $row9['VAOI8000'];
    $VAOI_9 =  $row9['VAOI'];
    $DiagnosticoOI_9 =  $row9['DiagnosticoOI'];
    $GATISST_9 =  $row9['GATISST'];
    
    
    $Genero10 = $row1['Genero'];
    if ($Genero10 == 'M') {
        $Genero1 = 'MASCULINO';
    } else if ($Genero10 == 'F') {
        $Genero1 = 'FEMENINO';
    }
    $Genero20 = $row2['Genero'];
    if ($Genero20 == 'M') {
        $Genero2 = 'MASCULINO';
    } else if ($Genero20 == 'F') {
        $Genero2 = 'FEMENINO';
    }
    $Genero30 = $row3['Genero'];
    if ($Genero30 == 'M') {
        $Genero3 = 'MASCULINO';
    } else if ($Genero30 == 'F') {
        $Genero3 = 'FEMENINO';
    }
    $Genero40 = $row4['Genero'];
    if ($Genero40 == 'M') {
        $Genero4 = 'MASCULINO';
    } else if ($Genero40 == 'F') {
        $Genero4 = 'FEMENINO';
    }
     $Genero50 = $row5['Genero'];
    if ($Genero50 == 'M') {
        $Genero5 = 'MASCULINO';
    } else if ($Genero50 == 'F') {
        $Genero5 = 'FEMENINO';
    }
     $Genero60 = $row6['Genero'];
    if ($Genero60 == 'M') {
        $Genero6 = 'MASCULINO';
    } else if ($Genero60 == 'F') {
        $Genero6 = 'FEMENINO';
    }
     $Genero70 = $row7['Genero'];
    if ($Genero70 == 'M') {
        $Genero7 = 'MASCULINO';
    } else if ($Genero70 == 'F') {
        $Genero7 = 'FEMENINO';
    }
     $Genero80 = $row8['Genero'];
    if ($Genero80 == 'M') {
        $Genero8 = 'MASCULINO';
    } else if ($Genero80 == 'F') {
        $Genero8 = 'FEMENINO';
    }
     $Genero90 = $row9['Genero'];
    if ($Genero90 == 'M') {
        $Genero9 = 'MASCULINO';
    } else if ($Genero90 == 'F') {
        $Genero9 = 'FEMENINO';
    }
    $json[] = array(
        'Cedula1' => $Cedula1,
        'Paciente1' => $Paciente1,
        'Genero1' => $Genero1,
        'Cargo1' => $Cargo1,
        'Escolaridad1' => $Escolaridad1,
        'Tipoexamen1' => $Tipoexamen1,
        'Cedula2' => $Cedula2 ,
        'Paciente2' => $Paciente2,
        'Genero2' => $Genero2,
        'Cargo2' => $Cargo2,
        'Escolaridad2' => $Escolaridad2,
        'Tipoexamen2' => $Tipoexamen2,
        'Cedula3' => $Cedula3,
        'Paciente3' => $Paciente3,
        'Genero3' => $Genero3,
        'Cargo3' => $Cargo3,
        'Escolaridad3' => $Escolaridad3,
        'Tipoexamen3' => $Tipoexamen3,
        'Cedula4' => $Cedula4,
        'Paciente4' => $Paciente4,
        'Genero4' => $Genero4,
        'Cargo4' => $Cargo4,
        'Escolaridad4' => $Escolaridad4,
        'Tipoexamen4' => $Tipoexamen4,
        'Cedula5' => $Cedula5,
        'Paciente5' => $Paciente5,
        'Genero5' => $Genero5,
        'Cargo5' => $Cargo5,
        'Escolaridad5' => $Escolaridad5,
        'Tipoexamen5' => $Tipoexamen5,
        'Cedula6' => $Cedula6,
        'Paciente6' => $Paciente6,
        'Genero6' => $Genero6,
        'Cargo6' => $Cargo6,
        'Escolaridad6' => $Escolaridad6,
        'Tipoexamen6' => $Tipoexamen6,
        'Cedula7' => $Cedula7,
        'Paciente7' => $Paciente7,
        'Genero7' => $Genero7,
        'Cargo7' => $Cargo7,
        'Escolaridad7' => $Escolaridad7,
        'Tipoexamen7' => $Tipoexamen7,
        'Cedula8' => $Cedula8,
        'Paciente8' => $Paciente8,
        'Genero8' => $Genero8,
        'Cargo8' => $Cargo8,
        'Escolaridad8' => $Escolaridad8,
        'Tipoexamen8' => $Tipoexamen8,
        'Cedula9' => $Cedula9,
        'Paciente9' => $Paciente9,
        'Genero9' => $Genero9,
        'Cargo9' => $Cargo9,
        'Escolaridad9' => $Escolaridad9,
        'Tipoexamen9' => $Tipoexamen9,
        
        'VAOD250_1' => $VAOD250_1,
        'VAOD500_1' => $VAOD500_1,
        'VAOD1000_1' => $VAOD1000_1,
        'VAOD2000_1' => $VAOD2000_1,
        'VAOD3000_1' => $VAOD3000_1,
        'VAOD4000_1' => $VAOD4000_1,
        'VAOD6000_1' => $VAOD6000_1,
        'VAOD8000_1' => $VAOD8000_1,
        'VAOD250_2' => $VAOD250_2,
        'VAOD500_2' => $VAOD500_2,
        'VAOD1000_2' => $VAOD1000_2,
        'VAOD2000_2' => $VAOD2000_2,
        'VAOD3000_2' => $VAOD3000_2,
        'VAOD4000_2' => $VAOD4000_2,
        'VAOD6000_2' => $VAOD6000_2,
        'VAOD8000_2' => $VAOD8000_2,
        'VAOD250_3' => $VAOD250_3,
        'VAOD500_3' => $VAOD500_3,
        'VAOD1000_3' => $VAOD1000_3,
        'VAOD2000_3' => $VAOD2000_3,
        'VAOD3000_3' => $VAOD3000_3,
        'VAOD4000_3' => $VAOD4000_3,
        'VAOD6000_3' => $VAOD6000_3,
        'VAOD8000_3' => $VAOD8000_3,
        'VAOD250_4' => $VAOD250_4,
        'VAOD500_4' => $VAOD500_4,
        'VAOD1000_4' => $VAOD1000_4,
        'VAOD2000_4' => $VAOD2000_4,
        'VAOD3000_4' => $VAOD3000_4,
        'VAOD4000_4' => $VAOD4000_4,
        'VAOD6000_4' => $VAOD6000_4,
        'VAOD8000_4' => $VAOD8000_4,
        'VAOD250_5' => $VAOD250_5,
        'VAOD500_5' => $VAOD500_5,
        'VAOD1000_5' => $VAOD1000_5,
        'VAOD2000_5' => $VAOD2000_5,
        'VAOD3000_5' => $VAOD3000_5,
        'VAOD4000_5' => $VAOD4000_5,
        'VAOD6000_5' => $VAOD6000_5,
        'VAOD8000_5' => $VAOD8000_5,
        'VAOD250_6' => $VAOD250_6,
        'VAOD500_6' => $VAOD500_6,
        'VAOD1000_6' => $VAOD1000_6,
        'VAOD2000_6' => $VAOD2000_6,
        'VAOD3000_6' => $VAOD3000_6,
        'VAOD4000_6' => $VAOD4000_6,
        'VAOD6000_6' => $VAOD6000_6,
        'VAOD8000_6' => $VAOD8000_6,
        'VAOD250_7' => $VAOD250_7,
        'VAOD500_7' => $VAOD500_7,
        'VAOD1000_7' => $VAOD1000_7,
        'VAOD2000_7' => $VAOD2000_7,
        'VAOD3000_7' => $VAOD3000_7,
        'VAOD4000_7' => $VAOD4000_7,
        'VAOD6000_7' => $VAOD6000_7,
        'VAOD8000_7' => $VAOD8000_7,
        'VAOD250_8' => $VAOD250_8,
        'VAOD500_8' => $VAOD500_8,
        'VAOD1000_8' => $VAOD1000_8,
        'VAOD2000_8' => $VAOD2000_8,
        'VAOD3000_8' => $VAOD3000_8,
        'VAOD4000_8' => $VAOD4000_8,
        'VAOD6000_8' => $VAOD6000_8,
        'VAOD8000_8' => $VAOD8000_8,
        'VAOD250_9' => $VAOD250_9,
        'VAOD500_9' => $VAOD500_9,
        'VAOD1000_9' => $VAOD1000_9,
        'VAOD2000_9' => $VAOD2000_9,
        'VAOD3000_9' => $VAOD3000_9,
        'VAOD4000_9' => $VAOD4000_9,
        'VAOD6000_9' => $VAOD6000_9,
        'VAOD8000_9' => $VAOD8000_9,
        
        'VAOD_1' => $VAOD_1,
        'VAOD_2' => $VAOD_2,
        'VAOD_3' => $VAOD_3,
        'VAOD_4' => $VAOD_4,
        'VAOD_5' => $VAOD_5,
        'VAOD_6' => $VAOD_6,
        'VAOD_7' => $VAOD_7,
        'VAOD_8' => $VAOD_8,
        'VAOD_9' => $VAOD_9,
        
        'DiagnosticoOD_1' => $DiagnosticoOD_1,
        'DiagnosticoOD_2' => $DiagnosticoOD_2,
        'DiagnosticoOD_3' => $DiagnosticoOD_3,
        'DiagnosticoOD_4' => $DiagnosticoOD_4,
        'DiagnosticoOD_5' => $DiagnosticoOD_5,
        'DiagnosticoOD_6' => $DiagnosticoOD_6,
        'DiagnosticoOD_7' => $DiagnosticoOD_7,
        'DiagnosticoOD_8' => $DiagnosticoOD_8,
        'DiagnosticoOD_9' => $DiagnosticoOD_9,
        
        'VAOI250_1' => $VAOI250_1,
        'VAOI500_1' => $VAOI500_1,
        'VAOI1000_1' => $VAOI1000_1,
        'VAOI2000_1' => $VAOI2000_1,
        'VAOI3000_1' => $VAOI3000_1,
        'VAOI4000_1' => $VAOI4000_1,
        'VAOI6000_1' => $VAOI6000_1,
        'VAOI8000_1' => $VAOI8000_1,
        'VAOI250_2' => $VAOI250_2,
        'VAOI500_2' => $VAOI500_2,
        'VAOI1000_2' => $VAOI1000_2,
        'VAOI2000_2' => $VAOI2000_2,
        'VAOI3000_2' => $VAOI3000_2,
        'VAOI4000_2' => $VAOI4000_2,
        'VAOI6000_2' => $VAOI6000_2,
        'VAOI8000_2' => $VAOI8000_2,
        'VAOI250_3' => $VAOI250_3,
        'VAOI500_3' => $VAOI500_3,
        'VAOI1000_3' => $VAOI1000_3,
        'VAOI2000_3' => $VAOI2000_3,
        'VAOI3000_3' => $VAOI3000_3,
        'VAOI4000_3' => $VAOI4000_3,
        'VAOI6000_3' => $VAOI6000_3,
        'VAOI8000_3' => $VAOI8000_3,
        'VAOI250_4' => $VAOI250_4,
        'VAOI500_4' => $VAOI500_4,
        'VAOI1000_4' => $VAOI1000_4,
        'VAOI2000_4' => $VAOI2000_4,
        'VAOI3000_4' => $VAOI3000_4,
        'VAOI4000_4' => $VAOI4000_4,
        'VAOI6000_4' => $VAOI6000_4,
        'VAOI8000_4' => $VAOI8000_4,
        'VAOI250_5' => $VAOI250_5,
        'VAOI500_5' => $VAOI500_5,
        'VAOI1000_5' => $VAOI1000_5,
        'VAOI2000_5' => $VAOI2000_5,
        'VAOI3000_5' => $VAOI3000_5,
        'VAOI4000_5' => $VAOI4000_5,
        'VAOI6000_5' => $VAOI6000_5,
        'VAOI8000_5' => $VAOI8000_5,
        'VAOI250_6' => $VAOI250_6,
        'VAOI500_6' => $VAOI500_6,
        'VAOI1000_6' => $VAOI1000_6,
        'VAOI2000_6' => $VAOI2000_6,
        'VAOI3000_6' => $VAOI3000_6,
        'VAOI4000_6' => $VAOI4000_6,
        'VAOI6000_6' => $VAOI6000_6,
        'VAOI8000_6' => $VAOI8000_6,
        'VAOI250_7' => $VAOI250_7,
        'VAOI500_7' => $VAOI500_7,
        'VAOI1000_7' => $VAOI1000_7,
        'VAOI2000_7' => $VAOI2000_7,
        'VAOI3000_7' => $VAOI3000_7,
        'VAOI4000_7' => $VAOI4000_7,
        'VAOI6000_7' => $VAOI6000_7,
        'VAOI8000_7' => $VAOI8000_7,
        'VAOI250_8' => $VAOI250_8,
        'VAOI500_8' => $VAOI500_8,
        'VAOI1000_8' => $VAOI1000_8,
        'VAOI2000_8' => $VAOI2000_8,
        'VAOI3000_8' => $VAOI3000_8,
        'VAOI4000_8' => $VAOI4000_8,
        'VAOI6000_8' => $VAOI6000_8,
        'VAOI8000_8' => $VAOI8000_8,
        'VAOI250_9' => $VAOI250_9,
        'VAOI500_9' => $VAOI500_9,
        'VAOI1000_9' => $VAOI1000_9,
        'VAOI2000_9' => $VAOI2000_9,
        'VAOI3000_9' => $VAOI3000_9,
        'VAOI4000_9' => $VAOI4000_9,
        'VAOI6000_9' => $VAOI6000_9,
        'VAOI8000_9' => $VAOI8000_9,
        
        'VAOI_1' => $VAOI_1,
        'VAOI_2' => $VAOI_2,
        'VAOI_3' => $VAOI_3,
        'VAOI_4' => $VAOI_4,
        'VAOI_5' => $VAOI_5,
        'VAOI_6' => $VAOI_6,
        'VAOI_7' => $VAOI_7,
        'VAOI_8' => $VAOI_8,
        'VAOI_9' => $VAOI_9,
        
        'DiagnosticoOI_1' => $DiagnosticoOI_1,
        'DiagnosticoOI_2' => $DiagnosticoOI_2,
        'DiagnosticoOI_3' => $DiagnosticoOI_3,
        'DiagnosticoOI_4' => $DiagnosticoOI_4,
        'DiagnosticoOI_5' => $DiagnosticoOI_5,
        'DiagnosticoOI_6' => $DiagnosticoOI_6,
        'DiagnosticoOI_7' => $DiagnosticoOI_7,
        'DiagnosticoOI_8' => $DiagnosticoOI_8,
        'DiagnosticoOI_9' => $DiagnosticoOI_9,
        
        'GATISST_1' => $GATISST_1,
        'GATISST_2' => $GATISST_2,
        'GATISST_3' => $GATISST_3,
        'GATISST_4' => $GATISST_4,
        'GATISST_5' => $GATISST_5,
        'GATISST_6' => $GATISST_6,
        'GATISST_7' => $GATISST_7,
        'GATISST_8' => $GATISST_8,
        'GATISST_9' => $GATISST_9,
        'Empresa_A' =>  $Empresa_A,
        'Fecha_A' =>  $Fecha_A,
        'VAOD2000_A' => $VAOD2000_A,
        'VAOD3000_A' => $VAOD3000_A,
        'VAOD4000_A' => $VAOD4000_A,
        'VAOI2000_A' => $VAOI2000_A,
        'VAOI3000_A' => $VAOI3000_A,
        'VAOI4000_A' => $VAOI4000_A,
        'Empresa_Z' =>  $Empresa_Z,
        'Fecha_Z' => $Fecha_Z,
        'VAOD2000_Z' => $VAOD2000_Z,
        'VAOD3000_Z' => $VAOD3000_Z,
        'VAOD4000_Z' => $VAOD4000_Z,
        'VAOI2000_Z' => $VAOI2000_Z,
        'VAOI3000_Z' => $VAOI3000_Z,
        'VAOI4000_Z' => $VAOI4000_Z,
        
        'PROMEDIOVAOD_A' => $PROMEDIOVAOD_A,
        'PROMEDIOVAOI_A' => $PROMEDIOVAOD_A,
        'PROMEDIOVAOD_Z' => $PROMEDIOVAOD_Z,
        'PROMEDIOVAOI_Z' => $PROMEDIOVAOD_Z,
        
        'VAOD2000_D' => $VAOD2000_D,
        'VAOD3000_D' => $VAOD3000_D,
        'VAOD4000_D' => $VAOD4000_D,
        'VAOD_D' => $VAOD_D,
        
        'VAOI2000_D' => $VAOI2000_D,
        'VAOI3000_D' => $VAOI3000_D,
        'VAOI4000_D' => $VAOI4000_D,
        'VAOI_D' => $VAOI_D,
        
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>