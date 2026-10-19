<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
    $sql = "SELECT * FROM turnero2 ORDER BY id DESC";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);

    $fechaEntrada= $_POST['fecha'];
    $fechaAuxiliar	= strtotime ( "-1 seconds" , strtotime ( $fechaEntrada ) ) ;	
    $fechaSalida 	= date ( 'Y-m-d H:i:s' , $fechaAuxiliar );

    $sql = "SELECT COUNT(*) as total FROM turnero2 WHERE Fecha_registro >= '$fechaSalida'";           
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $Contador = $resultado['total']; 
    
    $json[] = array(
        'Nombre' => $row['Nombre'],
        'Dependencia' => $row['Dependencia'],
        'Contador' => $Contador,
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>