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
         $sql = "SELECT DISTINCT Empresa_certificada FROM auditivo WHERE id_admin = '$Codigo' LIMIT 12";
    } else {
         $sql = "SELECT DISTINCT Empresa_certificada FROM auditivo WHERE id_admin = '$Codigo' && Empresa_certificada = '$certificada'";
    }
    $resultado17 = $mysqli->query($sql);
    while($row17 = mysqli_fetch_array($resultado17)) { 
    $Empresa_certificada = $row17['Empresa_certificada'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE Empresa_certificada = '$Empresa_certificada' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && id_admin = '$Codigo' && VOOI != 0 && VOOD != 0";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado18 = $sentencia->fetch();
    $total_usuarios18 = $resultado18['total'];
    $json[] = array(
        'Empresa_certificada' => $Empresa_certificada,
        'total_usuarios18' => $total_usuarios18
    );
    }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>