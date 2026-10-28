<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
    $Codigo = $_POST['Codigo'];
	$id_admin = $_POST['id_admin'];
	$certificada = $_POST['certificada'];
	
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
    
    $sql = "SELECT DISTINCT Empresa_certificada FROM auditivo WHERE id_admin = '$Codigo' && Empresa_certificada = '$certificada' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Empresa_certificada = $row['Empresa_certificada'];
    
    if ($certificada == 'TODOS') {
         $sql = "SELECT COUNT(*) as total FROM auditivo WHERE Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && id_admin = '$Codigo'  && GATISST = 'AUDICION NORMAL'"; 
    } else {
         $sql = "SELECT COUNT(*) as total FROM auditivo WHERE Empresa_certificada = '$Empresa_certificada' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && id_admin = '$Codigo'  && GATISST = 'AUDICION NORMAL'"; 
    }
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado37= $sentencia->fetch();
    $total_usuarios37 = $resultado37['total'];
    
    if ($certificada == 'TODOS') {
        $sql = "SELECT COUNT(*) as total FROM auditivo WHERE Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && id_admin = '$Codigo' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL'";   
    } else {
        $sql = "SELECT COUNT(*) as total FROM auditivo WHERE Empresa_certificada = '$Empresa_certificada' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && id_admin = '$Codigo' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL'";   
    }
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado38= $sentencia->fetch();
    $total_usuarios38 = $resultado38['total'];
    
    if ($certificada == 'TODOS') {
        $sql = "SELECT COUNT(*) as total FROM auditivo WHERE Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && id_admin = '$Codigo' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE'";
    } else {
        $sql = "SELECT COUNT(*) as total FROM auditivo WHERE Empresa_certificada = '$Empresa_certificada' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && id_admin = '$Codigo' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE'";  
    }
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado39= $sentencia->fetch();
    $total_usuarios39 = $resultado39['total'];
    
    if ($certificada == 'TODOS') {
        $sql = "SELECT COUNT(*) as total FROM auditivo WHERE Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && id_admin = '$Codigo' && GATISST = 'SOSPECHA DISMINUCION AUDITIVA INDUCIDA POR RUIDO'";  
    } else {
        $sql = "SELECT COUNT(*) as total FROM auditivo WHERE Empresa_certificada = '$Empresa_certificada' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && id_admin = '$Codigo' && GATISST = 'DISMINUCION AUDITIVA INDUCIDA POR RUIDO'";   
    }
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado40= $sentencia->fetch();
    $total_usuarios40 = $resultado40['total'];
    
    $json[] = array(
        'Empresa_certificada' => $Empresa_certificada,
        'total_usuarios37' => $total_usuarios37,
        'total_usuarios38' => $total_usuarios38,
        'total_usuarios39' => $total_usuarios39,
        'total_usuarios40' => $total_usuarios40
    );

  $jsonstring = json_encode($json);
  echo $jsonstring;
?>