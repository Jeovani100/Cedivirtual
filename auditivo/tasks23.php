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
    
    if ($certificada == 'TODOS') {
        $sql = "SELECT DISTINCT DiagnosticoODOI FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'"; 
    } else {
        $sql = "SELECT DISTINCT DiagnosticoODOI FROM auditivo WHERE id_admin = '$Codigo' && Empresa_certificada = '$certificada' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'"; 
    }
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) { 
    $DiagnosticoODOI = $row['DiagnosticoODOI'];
    $Empresa_certificada_ = $row['Empresa_certificada'];
    if ($certificada == 'TODOS') {
        $sql = "SELECT COUNT(*) as total FROM auditivo WHERE DiagnosticoODOI = '$DiagnosticoODOI' &&  Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && id_admin = '$Codigo'";   
    } else {
        $sql = "SELECT COUNT(*) as total FROM auditivo WHERE DiagnosticoODOI = '$DiagnosticoODOI' && Empresa_certificada = '$certificada' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && id_admin = '$Codigo'";  
    }
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado41 = $sentencia->fetch();
    $total_usuarios41 = $resultado41['total'];
    $json[] = array(
        'DiagnosticoODOI' => $DiagnosticoODOI,
        'total_usuarios41' => $total_usuarios41,
    );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>