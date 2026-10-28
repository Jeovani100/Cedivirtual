<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
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
    
    $sql = "SELECT * FROM auditivo WHERE id_admin = '$Codigo' && Conducta_SVE='CONTROL AUDIOMETRIA ANUAL, RIESGO LEVE' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' ORDER BY GATISST ASC";

    $resultado = $mysqli->query($sql);
    $numeracion = 0;
    while($row = mysqli_fetch_array($resultado)) { 
        $numeracion++;
        $id = $row['id'];
        $Nombre = $row['Paciente'];
        $Cedula = $row['Cedula'];
        $Cargo = $row['Cargo'];
        $Sede = $row['Sede'];
        $Empresa_certificada = $row['Empresa_certificada'];
        $DiagnosticoODOI = $row['DiagnosticoODOI'];
        $GATISST = $row['GATISST'];
        if($GATISST_ =='AUDICION NORMAL') {
            $GATISST = 'Audición normal';
        } if($GATISST_ =='CAMBIOS EN UMBRAL AUDITIVO TEMPORAL') {
            $GATISST = 'CUAT';
        } if($GATISST_ =='CAMBIOS EN UMBRAL AUDITIVO PERMANENTE') {
            $GATISST = 'CUAP';
        } if($GATISST_ =='SOSPECHA DISMINUCION AUDITIVA INDUCIDA POR RUIDO') {
            $GATISST = 'SDAIR';
        }
        $json[] = array(
            'id' => $id,
            'N' => $numeracion,
            'Nombre' => $Nombre,
            'Cedula' => $Cedula,
            'Cargo' => $Cargo,
            'Sede' => $Sede,
            'Empresa_certificada' => $Empresa_certificada,
            'total_usuarios' => $total_usuarios,
            'Ingreso_SVE' => $Ingreso_SVE,
            'GATISST' => $GATISST,
            'DiagnosticoODOI' => $DiagnosticoODOI
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>