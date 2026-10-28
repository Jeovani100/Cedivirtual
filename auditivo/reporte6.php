<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['Codigo'])) {
        
	$Codigo = $_POST['Codigo'];
	
	$sql = "SELECT * FROM controles_auditivo WHERE id_admin = '$Codigo' && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $date1 = new DateTime($Inicio0);
    $Inicio =  $date1->format('d-m-Y');
    
    $sql = "SELECT * FROM controles_auditivo WHERE id_admin = '$Codigo' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $date2 = new DateTime($Terminacion0);
    $Terminacion =  $date2->format('d-m-Y');
    
    $sql = "SELECT * FROM auditivo WHERE id_admin = '$Codigo' && TLV = 'Alta exposición' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' ORDER BY GrupoGes Asc";
    $resultado = $mysqli->query($sql);
    
    }
    while($row = mysqli_fetch_array($resultado)) { 
        $GrupoGes0 =  $row['GrupoGES'];
        switch ($GrupoGes0) {
            case 1:
                $GrupoGes = 'Grupo 1';
                break;
            case 2:
                $GrupoGes = 'Grupo 2';
                break;
            case 3:
                $GrupoGes = 'Grupo 3';
                break;
            case 4:
                $GrupoGes = 'Grupo 4';
                break;
        }
        $json[] = array(
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
            'Tamiz' => $row['Tamiz'],
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
            'GrupoGES' => $GrupoGes,
            'Metodo' => $row['Metodo'],
            'LEQ' => $row['LEQ'],
            'TLV' => $row['TLV'],
            'Color' => $row['Color'],
            'Recomendaciones2' => $row['Recomendaciones2'],
            'Fecha_registro' => $row['Fecha_registro']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>