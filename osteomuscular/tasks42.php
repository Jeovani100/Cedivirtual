<?php
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
	$Codigo = $_POST['Codigo'];
    
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
    
    //Seguimiento PVE
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && GES = '0' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoT_1 = $sentencia->fetch();
    $total_usuariosT_1 = $resultadoT_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && GES != '0' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoT_2 = $sentencia->fetch();
    $total_usuariosT_2 = $resultadoT_2['total'];
    
    $total_usuariosT = $total_usuariosT_1 + $total_usuariosT_2;
    if($total_usuariosT_1 >= 1) {
        $total_usuariosT_1_porcentaje = round((($total_usuariosT_1/$total_usuariosT)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosT_1_porcentaje = 0;
    }
    if($total_usuariosT_2 >= 1) {
        $total_usuariosT_2_porcentaje = round((($total_usuariosT_2/$total_usuariosT)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosT_2_porcentaje = 0;
    }

    //Ingresan SVE
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && (Riesgo = 'Medio' || Riesgo = 'Alto' || Riesgo = 'Crítico') && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";        
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2 = $resultado['total'];
    
    $total_usuarios = $total_usuarios1 + $total_usuarios2;
    if($total_usuarios1 >= 1) {
        $total_usuarios1_porcentaje = round((($total_usuarios1/$total_usuarios)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuarios1_porcentaje = 0;
    }
    if($total_usuarios2 >= 1) {
        $total_usuarios2_porcentaje = round((($total_usuarios2/$total_usuarios)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuarios2_porcentaje = 0;
    }
    
    //Fuma
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P1 = 1  && GES != '0' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P1 = '0' && GES != '0' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_2 = $resultado['total'];
    
    $total_usuarios1_0 = $total_usuarios1_1 + $total_usuarios1_2;
    if($total_usuarios1_1 >= 1) {
        $total_usuarios1_1_porcentaje = round((($total_usuarios1_1/$total_usuarios1_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
        $total_usuarios1_1_porcentaje = 0;
    }
    if($total_usuarios1_2 >= 1) {
        $total_usuarios1_2_porcentaje = round((($total_usuarios1_2/$total_usuarios1_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
        $total_usuarios1_2_porcentaje = 0;
    }
    
    //Deporte
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P2_2 = 1 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_2_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P2_2 = 2 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_2_2 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P2_2 = 3 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_2_3 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P2_2 = 4 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_2_4 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P2_2 = 5 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_2_5 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P2_2 = 6 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_2_6 = $resultado['total'];
    
    $total_usuarios2_2 = $total_usuarios2_2_1 + $total_usuarios2_2_2 + $total_usuarios2_2_3 + $total_usuarios2_2_4 + $total_usuarios2_2_5 + $total_usuarios2_2_6;

    if($total_usuarios2_2_1 >= 1) {
    $total_usuarios2_2_1_porcentaje = round((($total_usuarios2_2_1/$total_usuarios2_2)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios2_2_1_porcentaje = 0;
    }

    if($total_usuarios2_2_2 >= 1) {
    $total_usuarios2_2_2_porcentaje = round((($total_usuarios2_2_2/$total_usuarios2_2)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios2_2_2_porcentaje = 0;
    }
    if($total_usuarios2_2_3 >= 1) {
    $total_usuarios2_2_3_porcentaje = round((($total_usuarios2_2_3/$total_usuarios2_2)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios2_2_3_porcentaje = 0;
    }
    if($total_usuarios2_2_4 >= 1) {
    $total_usuarios2_2_4_porcentaje = round((($total_usuarios2_2_4/$total_usuarios2_2)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios2_2_4_porcentaje = 0;
    }
    if($total_usuarios2_2_5 >= 1) {
    $total_usuarios2_2_5_porcentaje = round((($total_usuarios2_2_5/$total_usuarios2_2)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios2_2_5_porcentaje = 0;
    }
    if($total_usuarios2_2_6 >= 1) {
    $total_usuarios2_2_6_porcentaje = round((($total_usuarios2_2_6/$total_usuarios2_2)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios2_2_6_porcentaje = 0;
    }
    
    //Cargas
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P4_1 = 1 && GES != '0' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P4_1 = 2 && GES != '0' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_2 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P4_1 = 3 && GES != '0' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_3 = $resultado['total'];
    
    $total_usuarios4_0 = $total_usuarios4_1 + $total_usuarios4_2 + $total_usuarios4_3;
    if($total_usuarios4_1 >= 1) {
    $total_usuarios4_1_porcentaje = round((($total_usuarios4_1/$total_usuarios4_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios4_1_porcentaje = 0;
    }
    if($total_usuarios4_1 >= 1) {
    $total_usuarios4_2_porcentaje = round((($total_usuarios4_2/$total_usuarios4_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios4_2_porcentaje  = 0;
    }
    if($total_usuarios4_1 >= 1) {
    $total_usuarios4_3_porcentaje = round((($total_usuarios4_3/$total_usuarios4_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios4_3_porcentaje = 0;
    }
    
    //Diagnostico
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P6 = 20 && GES != '0' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios6_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P6 = '0' && GES != '0' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios6_2 = $resultado['total'];
    
    $total_usuarios6_0 = $total_usuarios6_1 + $total_usuarios6_2;
    
    if($total_usuarios6_1 >= 1) {
    $total_usuarios6_1_porcentaje = round((($total_usuarios6_1/$total_usuarios6_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios6_1_porcentaje = 0;
    }
    if($total_usuarios6_2 >= 1) {
    $total_usuarios6_2_porcentaje = round((($total_usuarios6_2/$total_usuarios6_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios6_2_porcentaje = 0;
    }

    
    //Diagnostico
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P7 >= 6 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios7_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && P7 = '0' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios7_2 = $resultado['total'];
    
    $total_usuarios7_0 = $total_usuarios7_1 + $total_usuarios7_2;
    if($total_usuarios7_1 >= 1) {
    $total_usuarios7_1_porcentaje = round((($total_usuarios7_1/$total_usuarios7_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios7_1_porcentaje = 0;
    }
    if($total_usuarios7_2 >= 1) {
    $total_usuarios7_2_porcentaje = round((($total_usuarios7_2/$total_usuarios7_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios7_2_porcentaje = 0;
    }
    
   
    //Cuello
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo1 = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios8_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo1 = 'Medio' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios8_2 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo1 = 'Alto' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios8_3 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo1 = 'Crítico' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios8_4 = $resultado['total'];
    
    $total_usuarios8_0 = $total_usuarios8_1 + $total_usuarios8_2 + $total_usuarios8_3 + $total_usuarios8_4;
    
    if($total_usuarios8_1 >= 1) {
    $total_usuarios8_1_porcentaje = round((($total_usuarios8_1/$total_usuarios8_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios8_1_porcentaje = 0;
    }
    if($total_usuarios8_2 >= 1) {
    $total_usuarios8_2_porcentaje = round((($total_usuarios8_2/$total_usuarios8_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios8_2_porcentaje = 0;
    }
    if($total_usuarios8_3 >= 1) {
    $total_usuarios8_3_porcentaje = round((($total_usuarios8_3/$total_usuarios8_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios8_3_porcentaje = 0;
    }
    if($total_usuarios8_4 >= 1) {
    $total_usuarios8_4_porcentaje = round((($total_usuarios8_4/$total_usuarios8_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios8_4_porcentaje = 0;
    }
    
    //Hombros
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo2 = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios9_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo2 = 'Medio' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios9_2 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo2 = 'Alto' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios9_3 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo2 = 'Crítico' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios9_4 = $resultado['total'];
    
    $total_usuarios9_0 = $total_usuarios9_1 + $total_usuarios9_2 + $total_usuarios9_3 + $total_usuarios9_4;
    
    if($total_usuarios9_1 >= 1) {
    $total_usuarios9_1_porcentaje = round((($total_usuarios9_1/$total_usuarios9_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios9_1_porcentaje = 0;
    }
    if($total_usuarios9_2 >= 1) {
    $total_usuarios9_2_porcentaje = round((($total_usuarios9_2/$total_usuarios9_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios9_2_porcentaje = 0;
    }
    if($total_usuarios9_3 >= 1) {
    $total_usuarios9_3_porcentaje = round((($total_usuarios9_3/$total_usuarios9_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios9_3_porcentaje = 0;
    }
    if($total_usuarios9_4 >= 1) {
    $total_usuarios9_4_porcentaje = round((($total_usuarios9_4/$total_usuarios9_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios9_4_porcentaje = 0;
    }
    
    
    //Codos o antebrazos
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo3 = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios10_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo3 = 'Medio' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios10_2 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo3 = 'Alto' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios10_3 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo3 = 'Crítico' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios10_4 = $resultado['total'];
    
    $total_usuarios10_0 = $total_usuarios10_1 + $total_usuarios10_2 + $total_usuarios10_3 + $total_usuarios10_4;
    
    if($total_usuarios10_1 >= 1) {
    $total_usuarios10_1_porcentaje = round((($total_usuarios10_1/$total_usuarios10_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios10_1_porcentaje = 0;
    }
    if($total_usuarios10_2 >= 1) {
    $total_usuarios10_2_porcentaje = round((($total_usuarios10_2/$total_usuarios10_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios10_2_porcentaje = 0;
    }
    if($total_usuarios10_3 >= 1) {
    $total_usuarios10_3_porcentaje = round((($total_usuarios10_3/$total_usuarios10_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios10_3_porcentaje = 0;
    }
    if($total_usuarios10_4 >= 1) {
    $total_usuarios10_4_porcentaje = round((($total_usuarios10_4/$total_usuarios10_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios10_4_porcentaje = 0;
    }
    
    //Muñecas o manos
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo4 = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios11_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo4 = 'Medio' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios11_2 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo4 = 'Alto' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios11_3 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo4 = 'Crítico' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios11_4 = $resultado['total'];
    
    $total_usuarios11_0 = $total_usuarios11_1 + $total_usuarios11_2 + $total_usuarios11_3 + $total_usuarios11_4;
    
    if($total_usuarios11_1 >= 1) {
    $total_usuarios11_1_porcentaje = round((($total_usuarios11_1/$total_usuarios11_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios11_1_porcentaje = 0;
    }
    if($total_usuarios11_2 >= 1) {
    $total_usuarios11_2_porcentaje = round((($total_usuarios11_2/$total_usuarios11_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios11_2_porcentaje = 0;
    }
    if($total_usuarios11_3 >= 1) {
    $total_usuarios11_3_porcentaje = round((($total_usuarios11_3/$total_usuarios11_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios11_3_porcentaje = 0;
    }
    if($total_usuarios11_4 >= 1) {
    $total_usuarios11_4_porcentaje = round((($total_usuarios11_4/$total_usuarios11_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios11_4_porcentaje = 0;
    }
    
    //Dorsal
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo5 = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios12_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo5 = 'Medio' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios12_2 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo5 = 'Alto' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios12_3 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo5 = 'Crítico' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios12_4 = $resultado['total'];
    
    $total_usuarios12_0 = $total_usuarios12_1 + $total_usuarios12_2 + $total_usuarios12_3 + $total_usuarios12_4;
    
    if($total_usuarios12_1 >= 1) {
    $total_usuarios12_1_porcentaje = round((($total_usuarios8_1/$total_usuarios8_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios12_1_porcentaje = 0;
    }
    if($total_usuarios12_2 >= 1) {
    $total_usuarios12_2_porcentaje = round((($total_usuarios8_2/$total_usuarios8_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios12_2_porcentaje = 0;
    }
    if($total_usuarios12_3 >= 1) {
    $total_usuarios12_3_porcentaje = round((($total_usuarios8_3/$total_usuarios8_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios12_3_porcentaje = 0;
    }
    if($total_usuarios12_4 >= 1) {
    $total_usuarios12_4_porcentaje = round((($total_usuarios8_4/$total_usuarios8_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios12_4_porcentaje = 0;
    }
    
     //Lumbar
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo6 = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios13_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo6 = 'Medio' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios13_2 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo6 = 'Alto' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios13_3 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo6 = 'Crítico' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios13_4 = $resultado['total'];
    
    $total_usuarios13_0 = $total_usuarios13_1 + $total_usuarios13_2 + $total_usuarios13_3 + $total_usuarios13_4;
    
    if($total_usuarios13_1 >= 1) {
    $total_usuarios13_1_porcentaje = round((($total_usuarios13_1/$total_usuarios13_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios13_1_porcentaje = 0;
    }
    if($total_usuarios13_2 >= 1) {
    $total_usuarios13_2_porcentaje = round((($total_usuarios13_2/$total_usuarios13_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios13_2_porcentaje = 0;
    }
    if($total_usuarios13_3 >= 1) {
    $total_usuarios13_3_porcentaje = round((($total_usuarios13_3/$total_usuarios13_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios13_3_porcentaje = 0;
    }
    if($total_usuarios13_4 >= 1) {
    $total_usuarios13_4_porcentaje = round((($total_usuarios13_4/$total_usuarios13_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios13_4_porcentaje = 0;
    }
    
     //Caderas o piernas
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo7 = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios14_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo7 = 'Medio' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios14_2 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo7 = 'Alto' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios14_3 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo7 = 'Crítico' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios14_4 = $resultado['total'];
    
    $total_usuarios14_0 = $total_usuarios14_1 + $total_usuarios14_2 + $total_usuarios14_3 + $total_usuarios14_4;
    
    if($total_usuarios14_1 >= 1) {
    $total_usuarios14_1_porcentaje = round((($total_usuarios14_1/$total_usuarios14_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios14_1_porcentaje = 0;
    }
    if($total_usuarios14_2 >= 1) {
    $total_usuarios14_2_porcentaje = round((($total_usuarios14_2/$total_usuarios14_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios14_2_porcentaje = 0;
    }
    if($total_usuarios14_3 >= 1) {
    $total_usuarios14_3_porcentaje = round((($total_usuarios14_3/$total_usuarios14_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios14_3_porcentaje = 0;
    }
    if($total_usuarios14_4 >= 1) {
    $total_usuarios14_4_porcentaje = round((($total_usuarios14_4/$total_usuarios14_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios14_4_porcentaje = 0;
    }
    
     //Rodillas
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo8 = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios15_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo8 = 'Medio' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios15_2 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo8 = 'Alto' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios15_3 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo8 = 'Crítico' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios15_4 = $resultado['total'];
    
    $total_usuarios15_0 = $total_usuarios15_1 + $total_usuarios15_2 + $total_usuarios15_3 + $total_usuarios15_4;
    
    if($total_usuarios15_1 >= 1) {
    $total_usuarios15_1_porcentaje = round((($total_usuarios15_1/$total_usuarios15_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios15_1_porcentaje = 0;
    }
    if($total_usuarios15_2 >= 1) {
    $total_usuarios15_2_porcentaje = round((($total_usuarios15_2/$total_usuarios15_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios15_2_porcentaje = 0;
    }
    if($total_usuarios15_3 >= 1) {
    $total_usuarios15_3_porcentaje = round((($total_usuarios15_3/$total_usuarios15_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios15_3_porcentaje = 0;
    }
    if($total_usuarios15_4 >= 1) {
    $total_usuarios15_4_porcentaje = round((($total_usuarios15_4/$total_usuarios15_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios15_4_porcentaje = 0;
    }
    
     //Tobillos y pies
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo9 = 'Bajo' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios16_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo9 = 'Medio' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios16_2 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo9 = 'Alto' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios16_3 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo9 = 'Crítico' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios16_4 = $resultado['total'];
    
    $total_usuarios16_0 = $total_usuarios16_1 + $total_usuarios16_2 + $total_usuarios16_3 + $total_usuarios16_4;
    
    if($total_usuarios16_1 >= 1) {
    $total_usuarios16_1_porcentaje = round((($total_usuarios16_1/$total_usuarios16_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios16_1_porcentaje = 0;
    }
    if($total_usuarios16_2 >= 1) {
    $total_usuarios16_2_porcentaje = round((($total_usuarios16_2/$total_usuarios16_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios16_2_porcentaje = 0;
    }
    if($total_usuarios16_3 >= 1) {
    $total_usuarios16_3_porcentaje = round((($total_usuarios16_3/$total_usuarios16_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios16_3_porcentaje = 0;
    }
    if($total_usuarios16_4 >= 1) {
    $total_usuarios16_4_porcentaje = round((($total_usuarios16_4/$total_usuarios16_0)*100), 1, PHP_ROUND_HALF_UP);
    } else {
    $total_usuarios16_4_porcentaje = 0;
    }
    
     //Estado
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' &&  Caso = 1 && Riesgo != '' && Riesgo != 'Bajo'  && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoE_1 = $sentencia->fetch();
    $total_usuariosE_1 = $resultadoE_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Caso = 2 && Riesgo != '' && Riesgo != 'Bajo'  && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";        
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoE_2 = $sentencia->fetch();
    $total_usuariosE_2 = $resultadoE_2['total']; 
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' &&  Caso = 3 && Riesgo != '' && Riesgo != 'Bajo'  && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoE_3 = $sentencia->fetch();
    $total_usuariosE_3 = $resultadoE_3['total'];
    
    $total_usuariosE = $total_usuariosE_1 + $total_usuariosE_2 + $total_usuariosE_3;
    if($total_usuariosE_1 >= 1) {
        $total_usuariosE_1_porcentaje = round((($total_usuariosE_1/$total_usuariosE)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosE_1_porcentaje = 0;
    }
    if($total_usuariosE_2 >= 1) {
        $total_usuariosE_2_porcentaje = round((($total_usuariosE_2/$total_usuariosE)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosE_2_porcentaje = 0;
    }
    if($total_usuariosE_3 >= 1) {
        $total_usuariosE_3_porcentaje = round((($total_usuariosE_3/$total_usuariosE)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosE_3_porcentaje = 0;
    }
    
   /*   //Estado2
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Caso = 1 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoE2_1 = $sentencia->fetch();
    $total_usuariosE2_1 = $resultadoE2_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Caso = 2 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";        
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoE2_2 = $sentencia->fetch();
    $total_usuariosE2_2 = $resultadoE2_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Caso = 3 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoE2_3 = $sentencia->fetch();
    $total_usuariosE2_3 = $resultadoE2_3['total'];
    
    $total_usuariosE2 = $total_usuariosE2_1 + $total_usuariosE2_2 + $total_usuariosE2_3;
    if($total_usuariosE2_1 >= 1) {
        $total_usuariosE2_1_porcentaje = round((($total_usuariosE2_1/$total_usuariosE2)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosE2_1_porcentaje = 0;
    }
    if($total_usuariosE2_2 >= 1) {
        $total_usuariosE2_2_porcentaje = round((($total_usuariosE2_2/$total_usuariosE2)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosE2_2_porcentaje = 0;
    }
    if($total_usuariosE2_3 >= 1) {
        $total_usuariosE2_3_porcentaje = round((($total_usuariosE2_3/$total_usuariosE2)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosE2_3_porcentaje = 0;
    }
    */
    
     //Seguimiento PVE
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && (GES = 2 || GES = 3 || GES = 4)  && Estado = 1 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoS_1 = $sentencia->fetch();
    $total_usuariosS_1 = $resultadoS_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && (GES = 2 || GES = 3 || GES = 4) && Estado = 2 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoS_2 = $sentencia->fetch();
    $total_usuariosS_2 = $resultadoS_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && (GES = 2 || GES = 3 || GES = 4) && Estado = 3 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoS_3 = $sentencia->fetch();
    $total_usuariosS_3 = $resultadoS_3['total'];
    
    $total_usuariosS = $total_usuariosS_1 + $total_usuariosS_2 + $total_usuariosS_3;
    if($total_usuariosS_1 >= 1) {
        $total_usuariosS_1_porcentaje = round((($total_usuariosS_1/$total_usuariosS)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosS_1_porcentaje = 0;
    }
    if($total_usuariosS_2 >= 1) {
        $total_usuariosS_2_porcentaje = round((($total_usuariosS_2/$total_usuariosS)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosS_2_porcentaje = 0;
    }
    if($total_usuariosS_3 >= 1) {
        $total_usuariosS_3_porcentaje = round((($total_usuariosS_3/$total_usuariosS)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosS_3_porcentaje = 0;
    }

    $json[] = array(
        'total_usuariosT_1' => $total_usuariosT_1,
        'total_usuariosT_2' => $total_usuariosT_2,
        'total_usuariosT_1_porcentaje' => $total_usuariosT_1_porcentaje,
        'total_usuariosT_2_porcentaje' => $total_usuariosT_2_porcentaje,
        
        'total_usuarios1' => $total_usuarios1,
        'total_usuarios2' => $total_usuarios2,
        'total_usuarios1_porcentaje' => $total_usuarios1_porcentaje,
        'total_usuarios2_porcentaje' => $total_usuarios2_porcentaje,
        
        'total_usuarios1_1' => $total_usuarios1_1,
        'total_usuarios1_2' => $total_usuarios1_2,
        'total_usuarios1_1_porcentaje' => $total_usuarios1_1_porcentaje,
        'total_usuarios1_2_porcentaje' => $total_usuarios1_2_porcentaje,
        
        'total_usuarios2_2_1' => $total_usuarios2_2_1,
        'total_usuarios2_2_2' => $total_usuarios2_2_2,
        'total_usuarios2_2_3' => $total_usuarios2_2_3,
        'total_usuarios2_2_4' => $total_usuarios2_2_4,
        'total_usuarios2_2_5' => $total_usuarios2_2_5,
        'total_usuarios2_2_6' => $total_usuarios2_2_6,
        'total_usuarios2_2_1_porcentaje' => $total_usuarios2_2_1_porcentaje,
        'total_usuarios2_2_2_porcentaje' => $total_usuarios2_2_2_porcentaje,
        'total_usuarios2_2_3_porcentaje' => $total_usuarios2_2_3_porcentaje,
        'total_usuarios2_2_4_porcentaje' => $total_usuarios2_2_4_porcentaje,
        'total_usuarios2_2_5_porcentaje' => $total_usuarios2_2_5_porcentaje,
        'total_usuarios2_2_6_porcentaje' => $total_usuarios2_2_6_porcentaje,
        
        'total_usuarios4_1' => $total_usuarios4_1,
        'total_usuarios4_2' => $total_usuarios4_2,
        'total_usuarios4_3' => $total_usuarios4_3,
        'total_usuarios4_1_porcentaje' => $total_usuarios4_1_porcentaje,
        'total_usuarios4_2_porcentaje' => $total_usuarios4_2_porcentaje,
        'total_usuarios4_3_porcentaje' => $total_usuarios4_3_porcentaje,
        
        'total_usuarios6_1' => $total_usuarios6_1,
        'total_usuarios6_2' => $total_usuarios6_2,
        'total_usuarios6_1_porcentaje' => $total_usuarios6_1_porcentaje,
        'total_usuarios6_2_porcentaje' => $total_usuarios6_2_porcentaje,
        
        'total_usuarios7_1' => $total_usuarios7_1,
        'total_usuarios7_2' => $total_usuarios7_2,
        'total_usuarios7_1_porcentaje' => $total_usuarios7_1_porcentaje,
        'total_usuarios7_2_porcentaje' => $total_usuarios7_2_porcentaje,
        
        'total_usuarios8_1' => $total_usuarios8_1,
        'total_usuarios8_2' => $total_usuarios8_2,
        'total_usuarios8_3' => $total_usuarios8_3,
        'total_usuarios8_4' => $total_usuarios8_4,
        'total_usuarios8_1_porcentaje' => $total_usuarios8_1_porcentaje,
        'total_usuarios8_2_porcentaje' => $total_usuarios8_2_porcentaje,
        'total_usuarios8_3_porcentaje' => $total_usuarios8_3_porcentaje,
        'total_usuarios8_4_porcentaje' => $total_usuarios8_4_porcentaje,
        
        'total_usuarios9_1' => $total_usuarios9_1,
        'total_usuarios9_2' => $total_usuarios9_2,
        'total_usuarios9_3' => $total_usuarios9_3,
        'total_usuarios9_4' => $total_usuarios9_4,
        'total_usuarios9_1_porcentaje' => $total_usuarios9_1_porcentaje,
        'total_usuarios9_2_porcentaje' => $total_usuarios9_2_porcentaje,
        'total_usuarios9_3_porcentaje' => $total_usuarios9_3_porcentaje,
        'total_usuarios9_4_porcentaje' => $total_usuarios9_4_porcentaje,
        
        'total_usuarios10_1' => $total_usuarios10_1,
        'total_usuarios10_2' => $total_usuarios10_2,
        'total_usuarios10_3' => $total_usuarios10_3,
        'total_usuarios10_4' => $total_usuarios10_4,
        'total_usuarios10_1_porcentaje' => $total_usuarios10_1_porcentaje,
        'total_usuarios10_2_porcentaje' => $total_usuarios10_2_porcentaje,
        'total_usuarios10_3_porcentaje' => $total_usuarios10_3_porcentaje,
        'total_usuarios10_4_porcentaje' => $total_usuarios10_4_porcentaje,
        
        'total_usuarios11_1' => $total_usuarios11_1,
        'total_usuarios11_2' => $total_usuarios11_2,
        'total_usuarios11_3' => $total_usuarios11_3,
        'total_usuarios11_4' => $total_usuarios11_4,
        'total_usuarios11_1_porcentaje' => $total_usuarios11_1_porcentaje,
        'total_usuarios11_2_porcentaje' => $total_usuarios11_2_porcentaje,
        'total_usuarios11_3_porcentaje' => $total_usuarios11_3_porcentaje,
        'total_usuarios11_4_porcentaje' => $total_usuarios11_4_porcentaje,
        
        'total_usuarios12_1' => $total_usuarios12_1,
        'total_usuarios12_2' => $total_usuarios12_2,
        'total_usuarios12_3' => $total_usuarios12_3,
        'total_usuarios12_4' => $total_usuarios12_4,
        'total_usuarios12_1_porcentaje' => $total_usuarios12_1_porcentaje,
        'total_usuarios12_2_porcentaje' => $total_usuarios12_2_porcentaje,
        'total_usuarios12_3_porcentaje' => $total_usuarios12_3_porcentaje,
        'total_usuarios12_4_porcentaje' => $total_usuarios12_4_porcentaje,
        
        'total_usuarios13_1' => $total_usuarios13_1,
        'total_usuarios13_2' => $total_usuarios13_2,
        'total_usuarios13_3' => $total_usuarios13_3,
        'total_usuarios13_4' => $total_usuarios13_4,
        'total_usuarios13_1_porcentaje' => $total_usuarios13_1_porcentaje,
        'total_usuarios13_2_porcentaje' => $total_usuarios13_2_porcentaje,
        'total_usuarios13_3_porcentaje' => $total_usuarios13_3_porcentaje,
        'total_usuarios13_4_porcentaje' => $total_usuarios13_4_porcentaje,
        
        'total_usuarios14_1' => $total_usuarios14_1,
        'total_usuarios14_2' => $total_usuarios14_2,
        'total_usuarios14_3' => $total_usuarios14_3,
        'total_usuarios14_4' => $total_usuarios14_4,
        'total_usuarios14_1_porcentaje' => $total_usuarios14_1_porcentaje,
        'total_usuarios14_2_porcentaje' => $total_usuarios14_2_porcentaje,
        'total_usuarios14_3_porcentaje' => $total_usuarios14_3_porcentaje,
        'total_usuarios14_4_porcentaje' => $total_usuarios14_4_porcentaje,
        
        'total_usuarios15_1' => $total_usuarios15_1,
        'total_usuarios15_2' => $total_usuarios15_2,
        'total_usuarios15_3' => $total_usuarios15_3,
        'total_usuarios15_4' => $total_usuarios15_4,
        'total_usuarios15_1_porcentaje' => $total_usuarios15_1_porcentaje,
        'total_usuarios15_2_porcentaje' => $total_usuarios15_2_porcentaje,
        'total_usuarios15_3_porcentaje' => $total_usuarios15_3_porcentaje,
        'total_usuarios15_4_porcentaje' => $total_usuarios15_4_porcentaje,
        
        'total_usuarios16_1' => $total_usuarios16_1,
        'total_usuarios16_2' => $total_usuarios16_2,
        'total_usuarios16_3' => $total_usuarios16_3,
        'total_usuarios16_4' => $total_usuarios16_4,
        'total_usuarios16_1_porcentaje' => $total_usuarios16_1_porcentaje,
        'total_usuarios16_2_porcentaje' => $total_usuarios16_2_porcentaje,
        'total_usuarios16_3_porcentaje' => $total_usuarios16_3_porcentaje,
        'total_usuarios16_4_porcentaje' => $total_usuarios16_4_porcentaje,
        
        'total_usuariosE_1' => $total_usuariosE_1,
        'total_usuariosE_2' => $total_usuariosE_2,
        'total_usuariosE_3' => $total_usuariosE_3,
        'total_usuariosE_1_porcentaje' => $total_usuariosE_1_porcentaje,
        'total_usuariosE_2_porcentaje' => $total_usuariosE_2_porcentaje,
        'total_usuariosE_3_porcentaje' => $total_usuariosE_3_porcentaje,
        
        'total_usuariosE2_1' => $total_usuariosE2_1,
        'total_usuariosE2_2' => $total_usuariosE2_2,
        'total_usuariosE2_3' => $total_usuariosE2_3,
        'total_usuariosE2_1_porcentaje' => $total_usuariosE2_1_porcentaje,
        'total_usuariosE2_2_porcentaje' => $total_usuariosE2_2_porcentaje,
        'total_usuariosE2_3_porcentaje' => $total_usuariosE2_3_porcentaje,
        
        'total_usuariosS_1' => $total_usuariosS_1,
        'total_usuariosS_2' => $total_usuariosS_2,
        'total_usuariosS_3' => $total_usuariosS_3,
        'total_usuariosS_1_porcentaje' => $total_usuariosS_1_porcentaje,
        'total_usuariosS_2_porcentaje' => $total_usuariosS_2_porcentaje,
        'total_usuariosS_3_porcentaje' => $total_usuariosS_3_porcentaje,
 
    );
        
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>