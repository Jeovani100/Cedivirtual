<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8");  
	
	$id_admin = $_POST['id_admin'];
	$Codigo = $_POST['Codigo'];
	
	$sql = "SELECT * FROM controles_auditivo WHERE id_admin = '$Codigo' && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $Year_ = new DateTime($Inicio0);
    $Inicio =  $Year_->format('d-m-Y');
    
    $sql = "SELECT * FROM controles_auditivo WHERE id_admin = '$Codigo' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0);
    $Terminacion =  $Year_->format('d-m-Y');
    $Year = $Year_->format('Y');
	
    $sql = "SELECT * FROM auditivo WHERE id_admin = '$Codigo' && (GES = 2 || GES = 3 || GES = 4 || GES = 5) && Fecha >= '$Inicio0' && Fecha <= '$Terminacion0'";
    $resultado = $mysqli->query($sql);
    $numeracion = 0;
    while($row = mysqli_fetch_array($resultado)) { 
        $numeracion++;
        $id = $row['id'];
        $Cedula = $row['Cedula'];
        $Carta0 = $row['Carta'];
        $Estado_ = $row['Estado'];
        $Caso_ = $row['Caso'];
        if($Carta0 == "#e7744f"){
            $Carta = "#e7744f";
        } elseif (($Carta0 == "#666666") || ($Carta0 == "")) {
            $Carta = "#666666";
        }
        $GrupoGes0 =  $row['GES'];
        $GrupoGes = '0';
        switch ($GrupoGes0) {
            case 1:
                $GrupoGes = 'Grupo 1';
                $Riesgo = 'Bajo';
                $R_C = '#c3e29c';
                break;
            case 2:
                $GrupoGes = 'Grupo 2';
                $Riesgo = 'Medio';
                $R_C = '#ffff4d';
                break;
            case 3:
                $GrupoGes = 'Grupo 3';
                $Riesgo = 'Alto';
                $R_C = '#fab76b';
                break;
            case 4:
                $GrupoGes = 'Grupo 4';
                $Riesgo = 'Crítico';
                $R_C = '#fd6868';
                break;
            case 5:
                $GrupoGes = 'Grupo 5';
                $Riesgo = 'Grupo 1';
                $R_C = '#c3e29c';
                break;    
        }
      
        $VOOD = $row['VOOD'];
        $VOOI = $row['VOOI'];
        if($VOOD  >= 1 || $VOI >= 1) {
            $Tipo = 'Clínica';
        } else {
            $Tipo = 'Tamíz';
        }
        if($Estado_ == 1 || $Estado_ == 0) {
            $Estado = 'Activo en seguimiento';
            $S_C = '#02b14b';
        }
        if($Estado_ == 2) {
            $Estado = 'Activo sin seguimiento';
            $S_C = '#e7190b';
        }
        if($Estado_ == 3) {
            $S_C = '#005ce6';
            $Estado = 'Inactivo';
        }
        
         if($Caso_ == 1 || $Caso_  == 'NULL' || $Caso_  == 0) {
            $Caso = 'Caso confirmado';
            $C_C = '#e7190b';
        }
        if($Caso_ == 2) {
            $Caso = 'Caso sintomático/ No confirmado';
            $C_C = '#ff7733';
        }
        if($Caso_ == 3) {
            $Caso = 'No caso';
            $C_C = '#005ce6';
        }
        $sql = "SELECT * FROM auditivo WHERE Cedula = $Cedula ORDER BY Fecha ASC";
        $resultado2 = $mysqli->query($sql);
        $rowA = $resultado2->fetch_array(MYSQLI_ASSOC);
        $Fecha_A =  $rowA['Fecha'];
        $VAOD2000_A =  $rowA['VAOD2000'];
        $VAOD3000_A =  $rowA['VAOD3000'];
        $VAOD4000_A =  $rowA['VAOD4000'];
        $VAOI2000_A =  $rowA['VAOI2000'];
        $VAOI3000_A =  $rowA['VAOI3000'];
        $VAOI4000_A =  $rowA['VAOI4000'];
        $PROMEDIOVAOD_A =  round(($VAOD2000_A+$VAOD3000_A+$VAOD4000_A)/3, 2, PHP_ROUND_HALF_UP);
        $PROMEDIOVAOI_A =  round(($VAOI2000_A+$VAOI3000_A+$VAOI4000_A)/3, 2, PHP_ROUND_HALF_UP);
        $sql = "SELECT * FROM auditivo WHERE Cedula = $Cedula && YEAR(Fecha) = $Year"; 
        $resultado3 = $mysqli->query($sql);
        $rowZ = $resultado3->fetch_array(MYSQLI_ASSOC);
        $Fecha_Z =  $rowZ['Fecha'];
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
        if($VAOD_D > -10){
            $Texto1 ='Sin cambios en el umbral auditivo en el tiempo';
            $Color_PTA1 = '#c3e29c';
        }
        if($VAOD_D <= -10 && $VAOD_D >= -15){
            $Texto1 ='Con cambios en el umbral auditivo tempranos, requiere acción';
            $Color_PTA1 = '#fab76b';
        }    
        if($VAOD_D < -15){
            $Texto1 ='Cambio significativo en el umbarl auditivo, requiere acción';
            $Color_PTA1 = '#fd6868';
        }   
        
        if($VAOI_D > -10){
            $Texto2 ='Sin cambios en el umbral auditivo en el tiempo';
            $Color_PTA2 = '#c3e29c';
        }
        if($VAOI_D <= -10 && $VAOI_D >= -15){
            $Texto2 ='Con cambios en el umbral auditivo tempranos, requiere acción';
            $Color_PTA2 = '#fab76b';
        }    
        if($VAOI_D < -15){
            $Texto2 ='Cambio significativo en el umbarl auditivo, requiere acción';
            $Color_PTA2 = '#fd6868';
        }   

	    $sql = "UPDATE auditivo SET CUA_OD = '$Texto1' WHERE id = $id";
        $resultado5 = $mysqli->query($sql);
        $sql = "UPDATE auditivo SET CUA_OI = '$Texto2' WHERE id = $id";
        $resultado5 = $mysqli->query($sql);
        
        $json[] = array(
            'numeracion' => $numeracion,
            'id' => $row['id'],
            'Fecha' => $row['Fecha'],
            'Empresa' => $row['Empresa'],
            'Paciente' => $row['Paciente'],
            'Cedula' => $row['Cedula'],
            'Edad' => $row['Edad'],
            'Genero' => $row['Genero'],
            'Cargo' => $row['Cargo'],
            'Escolaridad' => $row['Escolaridad'],
            'Empresa_certificada' => $row['Empresa_certificada'],
            'VAOI250' => $row['VAOI250'],
            'VAOI500' => $row['VAOI500'],
            'VAOI1000' => $row['VAOI1000'],
            'VAOI2000' => $row['VAOI2000'],
            'VAOI3000' => $row['VAOI3000'],
            'VAOI4000' => $row['VAOI4000'],
            'VAOI6000' => $row['VAOI6000'],
            'VAOI8000' => $row['VAOI8000'],
            'VAOI' => $row['VAOI'],
            'DiagnosticoOI' => $row['DiagnosticoOI'],
            'VAOI2' => $row['VAOI2'],
            'VAOD250' => $row['VAOD250'],
            'VAOD500' => $row['VAOD500'],
            'VAOD1000' => $row['VAOD1000'],
            'VAOD2000' => $row['VAOD2000'],
            'VAOD3000' => $row['VAOD3000'],
            'VAOD4000' => $row['VAOD4000'],
            'VAOD6000' => $row['VAOD6000'],
            'VAOD8000' => $row['VAOD8000'],
            'VAOD' => $row['VAOD'],
            'DiagnosticoOD' => $row['DiagnosticoOD'],
            'VAOD2' => $row['VAOD2'],
            'VOOI250' => $row['VOOI250'],
            'VOOI500' => $row['VOOI500'],
            'VOOI1000' => $row['VOOI1000'],
            'VOOI2000' => $row['VOOI2000'],
            'VOOI3000' => $row['VOOI3000'],
            'VOOI4000' => $row['VOOI4000'],
            'VOOI' => $row['VOOI'],
            'VOOD250' => $row['VOOD250'],
            'VOOD500' => $row['VOOD500'],
            'VOOD1000' => $row['VOOD1000'],
            'VOOD2000' => $row['VOOD2000'],
            'VOOD3000' => $row['VOOD3000'],
            'VOOD4000' => $row['VOOD4000'],
            'VOOD' => $row['VOOD'],
            'NeurosensorialD' => $row['NeurosensorialD'],
            'ConductivaD' => $row['ConductivaD'],
            'MixtaD' => $row['MixtaD'],
            'Concepto' => $row['Concepto'],
            'GATISST' => $row['GATISST'],
            'Recomendaciones' => $row['Recomendaciones'],
            'Tipoexamen' => $row['Tipoexamen'],
            'Ingreso_SVE' => $row['Ingreso_SVE'],
            'Concepto2' => $row['Concepto2'],
            'Concepto_examenlaboral' => $row['Concepto_examenlaboral'],
            'Control1' => $row['Control1'],
            'Ips' => $row['Ips'],
            'Direccion' => $row['Direccion'],
            'Horario' => $row['Horario'],
            'Carta' => $Carta,
            'GES' => $GrupoGes0,
            'Riesgo' => $Riesgo,
            'Fecha_registro' => $row['Fecha_registro'],
            'Ciudad' => $row['Ciudad'],
            'Tamiz' => $row['Tamiz'],
            'Tipo' => $Tipo,
            'Celular' => $row['Celular'],
            'Email' => $row['Email'],
            'C_C' => $C_C,
            'S_C' => $S_C,
            'R_C' => $R_C,
            'Texto1' => $Texto1,
            'Texto2' => $Texto2,
            'Color_PTA1' => $Color_PTA1,
            'Color_PTA2' => $Color_PTA2,
            'Caso' => $Caso,
            'Estado' => $Estado
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>