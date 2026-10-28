<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
	$id_admin = $_POST['id_admin'];
	
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
    
    $sql = "SELECT * FROM seguimiento_auditivo WHERE id_admin = '$id_admin' && C2 = 1 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'"; 
    $resultado = $mysqli->query($sql);
    $numeracion = 0;
    while($row = mysqli_fetch_array($resultado)) { 
        $numeracion++;
        $Codigo = $row['Codigo'];
        $sql = "SELECT * FROM auditivo WHERE id = $Codigo"; 
        $resultado2 = $mysqli->query($sql);
        $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
            'id' => $id,
            'N' => $numeracion,
            'Nombre' =>  $row2['Paciente'],
            'Cedula' =>  $row2['Cedula'],
            'Cargo' =>  $row2['Cargo'],
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>