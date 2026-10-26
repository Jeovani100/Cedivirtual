<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    $Codigo = $_POST['Codigo'];
    $Costos_ = $_POST['Costos'];
    
    
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$Codigo' && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $date1 = new DateTime($Inicio0);
    $Inicio =  $date1->format('d-m-Y');
    
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$Codigo' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $date2 = new DateTime($Terminacion0);
    $Terminacion =  $date2->format('d-m-Y');

    //Grupos de exposición
    if ($Costos_ != 'TODOS') {
        $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Costo = '$Costos_' &&  Riesgo = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";   
    } else {
        $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";   
    }
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_ = $resultado['total'];
    
    if ($Costos_ != 'TODOS') {
        $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Costo = '$Costos_' && Riesgo = 'Medio' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";
    } else {
        $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo = 'Medio' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";
    }
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_ = $resultado['total'];
    
    if ($Costos_ != 'TODOS') {
        $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Costo = '$Costos_' && Riesgo = 'Alto' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'"; 
    } else {
        $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' &&  Riesgo = 'Alto' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'"; 
    }
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_ = $resultado['total'];
    
    if ($Costos_ != 'TODOS') {
        $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Costo = '$Costos_' && Riesgo = 'Crítico' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'"; 
    } else {
        $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo = 'Crítico' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'"; 
    }
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_ = $resultado['total'];
    
    $total_usuarios_1 = $total_usuarios1_ + $total_usuarios2_ + $total_usuarios3_ + $total_usuarios4_;
    if ($total_usuarios1_ >= 1) {
        $total_usuarios1 = $total_usuarios1_;
        $total_usuarios1_porcentaje = round((($total_usuarios1/$total_usuarios_1)*100), 1, PHP_ROUND_HALF_UP);
    } else {
        $total_usuarios1 = 0;
        $total_usuarios1_porcentaje = '0';
    }
    if ($total_usuarios2_ >= 1) {
        $total_usuarios2 = $total_usuarios2_;
        $total_usuarios2_porcentaje = round((($total_usuarios2/$total_usuarios_1)*100), 1, PHP_ROUND_HALF_UP);
    }else {
        $total_usuarios2 = 0;
        $total_usuarios2_porcentaje = '0';
    }
    if ($total_usuarios3_ >= 1) {
        $total_usuarios3 = $total_usuarios3_;
        $total_usuarios3_porcentaje = round((($total_usuarios3/$total_usuarios_1)*100), 1, PHP_ROUND_HALF_UP);
    }else {
        $total_usuarios3 = 0;
        $total_usuarios3_porcentaje = '0';
    }
    if ($total_usuarios4_ >= 1) {
        $total_usuarios4 = $total_usuarios4_;
        $total_usuarios4_porcentaje = round((($total_usuarios4/$total_usuarios_1)*100), 1, PHP_ROUND_HALF_UP);
    }else {
        $total_usuarios4 = 0;
        $total_usuarios4_porcentaje = '0';
    }

    $json[] = array(
        'total_usuarios1' => $total_usuarios1,
        'total_usuarios2' => $total_usuarios2,
        'total_usuarios3' => $total_usuarios3,
        'total_usuarios4' => $total_usuarios4,
        'total_usuarios1_porcentaje' => $total_usuarios1_porcentaje,
        'total_usuarios2_porcentaje' => $total_usuarios2_porcentaje,
        'total_usuarios3_porcentaje' => $total_usuarios3_porcentaje,
        'total_usuarios4_porcentaje' => $total_usuarios4_porcentaje,
    );
        
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>