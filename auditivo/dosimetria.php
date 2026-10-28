<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    if (isset($_POST['id_admin'])) {
	$id_admin = $_POST['id_admin'];
    }
    
    $sql = "SELECT * FROM controles_auditivo WHERE id_admin = '$id_admin' && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $date1 = new DateTime($Inicio0);
    $Inicio =  $date1->format('d-m-Y');
    
    $sql = "SELECT * FROM controles_auditivo WHERE id_admin = '$id_admin' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $date2 = new DateTime($Terminacion0);
    $Terminacion =  $date2->format('d-m-Y');
    
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$id_admin' && Metodo = 'Dosimetría' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $Dosimetria_programadas = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$id_admin' && Metodo = 'Dosimetría' && LEQ != '' && LEQ != '0' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $Dosimetria_realizadas = $resultado['total'];
    
    $Dosimetria_porcentaje = round((($Dosimetria_realizadas/$Dosimetria_programadas)*100), 1, PHP_ROUND_HALF_UP);
    
    $json[] = array(
        'Dosimetria_P' => $Dosimetria_programadas,
        'Dosimetria_R' => $Dosimetria_realizadas,
        'Dosimetria_Pj' => $Dosimetria_porcentaje,
    );
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>