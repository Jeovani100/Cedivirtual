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

    $sql = "SELECT * FROM controles_auditivo WHERE id_admin = '$Codigo' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');
    
    $sql = "SELECT COUNT(*) as total FROM planificacion WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1 = $sentencia->fetch();
    $total_usuarios1 = $resultado1['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2 = $sentencia->fetch();
    $total_usuarios2 = $resultado2['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3 = $sentencia->fetch();
    $total_usuarios3 = $resultado3['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4 = $sentencia->fetch();
    $total_usuarios4 = $resultado4['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5 = $sentencia->fetch();
    $total_usuarios5 = $resultado5['total'];
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1 = $sentencia->fetch();
    $porcentaje1 = round(($resultado1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2 = $sentencia->fetch();
    $porcentaje2 = round(($resultado2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3 = $sentencia->fetch();
    $porcentaje3 = round(($resultado3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4 = $sentencia->fetch();
    $porcentaje4 = round(($resultado4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5 = $sentencia->fetch();
    $porcentaje5 = round(($resultado5['total']), 2, PHP_ROUND_HALF_UP); 
    
    $porcentaje0 = round((($porcentaje1 + $porcentaje2 + $porcentaje3 + $porcentaje4 + $porcentaje5)/5), 2, PHP_ROUND_HALF_UP); ;

    $json[] = array(
        'Porcentaje0' =>$porcentaje0,
        'Porcentaje1' =>$porcentaje1,
        'Porcentaje2' =>$porcentaje2,
        'Porcentaje3' =>$porcentaje3,
        'Porcentaje4' =>$porcentaje4,
        'Porcentaje5' =>$porcentaje5,
    );
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>