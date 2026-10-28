<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';

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
    
    $sql = "SELECT * FROM auditivo WHERE id_admin = '$Codigo'";
    $resultado = $mysqli->query($sql);
    $numeracion = 0;
    while($row = mysqli_fetch_array($resultado)) { 
        $id = $row['id'];
        $numeracion++;
         $Riesgo = $row['Riesgo'];
        if($Riesgo == 'Bajo') {
            $R_C = '#c3e29c';
        }
        if($Riesgo == 'Medio') {
            $R_C = '#ffff4d';
        }
        if($Riesgo == 'Alto') {
            $R_C = '#fab76b';
        }
        if($Riesgo == 'Crítico') {
            $R_C = '#fd6868';
        }
        $json[] = array(
            'numeracion' => $numeracion,
            'id' => $row['id'],
            'GES' => $row['GES'],
            'Riesgo' => $row['Riesgo'],
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
            'DiagnosticoODOI' => $row['DiagnosticoODOI'],
            'NeurosensorialD' => $row['NeurosensorialD'],
            'ConductivaD' => $row['ConductivaD'],
            'MixtaD' => $row['MixtaD'],
            'NeurosensorialI' => $row['NeurosensorialI'],
            'ConductivaI' => $row['ConductivaI'],
            'MixtaI' => $row['MixtaI'],
            'Tamiz' => $row['Tamiz'],
            'GATISST' => $row['GATISST'],
            'GrupoGES' => $row['GES'],
            'Concepto' => $row['Concepto'],
            'Recomendaciones' => $row['Recomendaciones'],
            'Tipoexamen' => $row['Tipoexamen'],
            'Conducta_SVE' => $row['Conducta_SVE'],
            'Ingreso_SVE' => $row['Riesgo'],
            'Concepto_examenlaboral' => $row['Concepto_examenlaboral'],
            'Reubicacion' => $row['Reubicacion'],
            'Email' => $row['Email'],
            'Celular' => $row['Celular'],
            'Ciudad' => $row['Ciudad'],
            'Ips' => $row['Ips'],
            'Carta' => $row['Carta'],
            'Notificacion' => $row['Notificacion'],
            'R_C' => $R_C,
            'Fecha_registro' => $row['Fecha_registro']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>