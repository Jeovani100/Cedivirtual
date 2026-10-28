<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    $id_admin = $_POST['id_admin'];
	$Codigo = $_POST['Codigo'];
	
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
    
    //grafia1
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && VOOI != 0 && VOOD != 0";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && VOOI = '0' && VOOD = '0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2 = $resultado['total'];
    
    $total_usuarios_1 = $total_usuarios1 + $total_usuarios2;
    if($total_usuarios_1) {
        $total_usuarios1_porcentaje = round((($total_usuarios1/$total_usuarios_1)*100), 1, PHP_ROUND_HALF_UP);
        $total_usuarios2_porcentaje = round((($total_usuarios2/$total_usuarios_1)*100), 1, PHP_ROUND_HALF_UP);
    } else {
        $total_usuarios1_porcentaje = '0';
        $total_usuarios2_porcentaje = '0';
    }
    
    //grafica2
  
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' &&  (GES = 2 || GES = 3 || GES = 4 || GES = 5) && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3 = $sentencia->fetch();
    $total_usuarios3 = $resultado3['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo'  && GES = 1 && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4 = $sentencia->fetch();
    $total_usuarios4 = $resultado4['total'];
    
    $total_usuarios_2 = $total_usuarios1 + $total_usuarios2;
    if($total_usuarios_2) {
        $total_usuarios3_porcentaje = (($total_usuarios3/$total_usuarios_2)*100);
        $total_usuarios4_porcentaje = round(($total_usuarios4/$total_usuarios_2)*100);
    } else {
        $total_usuarios3_porcentaje = '0';
        $total_usuarios4_porcentaje = '0';
    }

    //grafica3
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && VAOD <= 25 && GATISST = 'AUDICION NORMAL'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado6= $sentencia->fetch();
    $total_usuarios6= $resultado6['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && VAOI <= 25 &&  GATISST = 'AUDICION NORMAL'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado7 = $sentencia->fetch();
    $total_usuarios7 = $resultado7['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && VAOD <= 25 && VAOI <= 25 && GATISST = 'AUDICION NORMAL'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado_1= $sentencia->fetch();
    $total_usuarios5 = $resultado_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && VAOD > 25 && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado9 = $sentencia->fetch();
    $total_usuarios9 = $resultado9['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' &&  VAOI > 25 && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado10 = $sentencia->fetch();
    $total_usuarios10 = $resultado10['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && VAOD > 25 && VAOI > 25 && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado10 = $sentencia->fetch();
    $total_usuarios8 = $resultado10['total'];


    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && VAOD > 25 && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado12= $sentencia->fetch();
    $total_usuarios12= $resultado12['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' &&  VAOI > 25 && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado13 = $sentencia->fetch();
    $total_usuarios13 = $resultado13['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' &&  VAOD > 25 && VAOI > 25 && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado_2 = $sentencia->fetch();
    $total_usuarios11 = $resultado_2['total'];
    
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && VAOD_SDAIR >= 41 && GATISST = 'SOSPECHA DISMINUCION AUDITIVA INDUCIDA POR RUIDO'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado15 = $sentencia->fetch();
    $total_usuarios15 = $resultado15['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' &&  VAOI_SDAIR >= 41 && GATISST = 'SOSPECHA DISMINUCION AUDITIVA INDUCIDA POR RUIDO'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado16 = $sentencia->fetch();
    $total_usuarios16 = $resultado16['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' &&  VAOD_SDAIR >= 41 &&  VAOI_SDAIR >= 41 && GATISST = 'SOSPECHA DISMINUCION AUDITIVA INDUCIDA POR RUIDO'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado16 = $sentencia->fetch();
    $total_usuarios14 = $resultado16['total'];
    
    /*$sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'SOSPECHA DISMINUCION AUDITIVA INDUCIDA POR RUIDO' && Conducta_SVE='CONTROL AUDIOMETRIA SEMESTRAL, RIESGO ALTO'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado35 = $sentencia->fetch();
    $total_usuarios35 = $resultado35['total'];*/
    

    //Grafica4
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'AUDICION NORMAL'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado20 = $sentencia->fetch();
    $total_usuarios20 = $resultado20['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado21 = $sentencia->fetch();
    $total_usuarios21 = $resultado21['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado22 = $sentencia->fetch();
    $total_usuarios22 = $resultado22['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'SOSPECHA DISMINUCION AUDITIVA INDUCIDA POR RUIDO'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado23 = $sentencia->fetch();
    $total_usuarios23 = $resultado23['total'];
    
    $total_usuarios_3 = $total_usuarios20 + $total_usuarios21+ $total_usuarios22+ $total_usuarios23;
    if($total_usuarios_3) {
        $total_usuarios20_porcentaje = (($total_usuarios20 /$total_usuarios_3)*100);
        $total_usuarios21_porcentaje = (($total_usuarios21 /$total_usuarios_3)*100);
        $total_usuarios22_porcentaje = (($total_usuarios22 /$total_usuarios_3)*100);
        $total_usuarios23_porcentaje = (($total_usuarios23 /$total_usuarios_3)*100);
    } else {
        $total_usuarios20_porcentaje = '0';
        $total_usuarios21_porcentaje = '0';
        $total_usuarios22_porcentaje = '0';
        $total_usuarios23_porcentaje = '0';
    }
    
   
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL' && Conducta_SVE='CONTROL AUDIOMETRIA ANUAL, SIN RIEGOS'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado24 = $sentencia->fetch();
    $total_usuarios24 = $resultado24['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL' && Conducta_SVE='CONTROL AUDIOMETRIA ANUAL, RIESGO LEVE'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado25 = $sentencia->fetch();
    $total_usuarios25 = $resultado25['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL' && Conducta_SVE='CONTROL AUDIOMETRIA SEMESTRAL, RIESGO MODERADO'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado26 = $sentencia->fetch();
    $total_usuarios26 = $resultado26['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL' && Conducta_SVE='CONTROL AUDIOMETRIA SEMESTRAL, RIESGO ALTO'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado27 = $sentencia->fetch();
    $total_usuarios27 = $resultado27['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE' && Conducta_SVE='CONTROL AUDIOMETRIA ANUAL, SIN RIEGOS'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado28 = $sentencia->fetch();
    $total_usuarios28 = $resultado28['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE' && Conducta_SVE='CONTROL AUDIOMETRIA ANUAL, RIESGO LEVE'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado29 = $sentencia->fetch();
    $total_usuarios29 = $resultado29['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE' && Conducta_SVE='CONTROL AUDIOMETRIA SEMESTRAL, RIESGO MODERADO'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado30 = $sentencia->fetch();
    $total_usuarios30 = $resultado30['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE' && Conducta_SVE='CONTROL AUDIOMETRIA SEMESTRAL, RIESGO ALTO'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado31 = $sentencia->fetch();
    $total_usuarios31 = $resultado31['total'];
    

    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'SOSPECHA DISMINUCION AUDITIVA INDUCIDA POR RUIDO' && Conducta_SVE='CONTROL AUDIOMETRIA ANUAL, SIN RIESGOS'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado32 = $sentencia->fetch();
    $total_usuarios32 = $resultado32['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'SOSPECHA DISMINUCION AUDITIVA INDUCIDA POR RUIDO' && Conducta_SVE='CONTROL AUDIOMETRIA ANUAL, RIESGO LEVE'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado33 = $sentencia->fetch();
    $total_usuarios33 = $resultado33['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'SOSPECHA DISMINUCION AUDITIVA INDUCIDA POR RUIDO' && Conducta_SVE='CONTROL AUDIOMETRIA SEMESTRAL, RIESGO MODERADO'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado34 = $sentencia->fetch();
    $total_usuarios34 = $resultado34['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'SOSPECHA DISMINUCION AUDITIVA INDUCIDA POR RUIDO' && Conducta_SVE='CONTROL AUDIOMETRIA SEMESTRAL, RIESGO ALTO'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado35 = $sentencia->fetch();
    $total_usuarios35 = $resultado35['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0' && GATISST = 'AUDICION NORMAL' && Conducta_SVE='CONTROL AUDIOMETRIA ANUAL, SIN RIESGOS'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado36 = $sentencia->fetch();
    $total_usuarios36 = $resultado36['total'];
    
     //Seguimiento PVE
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && (Estado = 0 || Estado = 1) && (GES = 2 || GES = 3 || GES = 4 || GES = 5) && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoS_1 = $sentencia->fetch();
    $total_usuariosS_1 = $resultadoS_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Estado = 2 && (GES = 2 || GES = 3 || GES = 4 || GES = 5) && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoS_2 = $sentencia->fetch();
    $total_usuariosS_2 = $resultadoS_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Estado = 3 && (GES = 2 || GES = 3 || GES = 4 || GES = 5) && Riesgo != 'Bajo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
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
    
     //Estado
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && (GES = 3 || GES = 4) && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoE_1 = $sentencia->fetch();
    $total_usuariosE_1 = $resultadoE_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && GES = 2 && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";        
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoE_2 = $sentencia->fetch();
    $total_usuariosE_2 = $resultadoE_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && GES = 1 && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
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
    
      //Estado2
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && (GES = 3 || GES = 4) && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoE2_1 = $sentencia->fetch();
    $total_usuariosE2_1 = $resultadoE2_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && GES = 2 && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";        
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoE2_2 = $sentencia->fetch();
    $total_usuariosE2_2 = $resultadoE2_2['total'];
    
    /*$sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && GES = 1 && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoE2_3 = $sentencia->fetch();
    $total_usuariosE2_3 = $resultadoE2_3['total'];*/
    
    $total_usuariosE2 = $total_usuariosE2_1 + $total_usuariosE2_2;
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
    /*if($total_usuariosE2_3 >= 1) {
        $total_usuariosE2_3_porcentaje = round((($total_usuariosE2_3/$total_usuariosE2)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosE2_3_porcentaje = 0;
    }*/


    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && CUA_OD = 'Sin cambios en el umbral auditivo en el tiempo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoC_1 = $sentencia->fetch();
    $total_usuariosC_1 = $resultadoC_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && CUA_OD = 'Con cambios en el umbral auditivo tempranos, requiere acción' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";        
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoC_2 = $sentencia->fetch();
    $total_usuariosC_2 = $resultadoC_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && CUA_OD = 'Cambio significativo en el umbarl auditivo, requiere acción' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoC_3 = $sentencia->fetch();
    $total_usuariosC_3 = $resultadoC_3['total'];
    
    $total_usuariosC = $total_usuariosC_1 + $total_usuariosC_2 + $total_usuariosC_3;
    if($total_usuariosC_1 >= 1) {
        $total_usuariosC_1_porcentaje = round((($total_usuariosC_1/$total_usuariosC)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosC_1_porcentaje = 0;
    }
    if($total_usuariosC_2 >= 1) {
        $total_usuariosC_2_porcentaje = round((($total_usuariosC_2/$total_usuariosC)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosC_2_porcentaje = 0;
    }
    if($total_usuariosC_3 >= 1) {
        $total_usuariosC_3_porcentaje = round((($total_usuariosC_3/$total_usuariosC)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosC_3_porcentaje = 0;
    }    

    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && CUA_OI = 'Sin cambios en el umbral auditivo en el tiempo' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoC2_1 = $sentencia->fetch();
    $total_usuariosC2_1 = $resultadoC2_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && CUA_OI = 'Con cambios en el umbral auditivo tempranos, requiere acción' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";        
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoC2_2 = $sentencia->fetch();
    $total_usuariosC2_2 = $resultadoC2_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && CUA_OI = 'Cambio significativo en el umbarl auditivo, requiere acción' && Fecha >= '$Inicio0' &&  Fecha <= '$Terminacion0'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultadoC2_3 = $sentencia->fetch();
    $total_usuariosC2_3 = $resultadoC2_3['total'];
    
    $total_usuariosC2 = $total_usuariosC2_1 + $total_usuariosC2_2 + $total_usuariosC2_3;
    if($total_usuariosC2_1 >= 1) {
        $total_usuariosC2_1_porcentaje = round((($total_usuariosC2_1/$total_usuariosC2)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosC2_1_porcentaje = 0;
    }
    if($total_usuariosC2_2 >= 1) {
        $total_usuariosC2_2_porcentaje = round((($total_usuariosC2_2/$total_usuariosC2)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosC2_2_porcentaje = 0;
    }
    if($total_usuariosC2_3 >= 1) {
        $total_usuariosC2_3_porcentaje = round((($total_usuariosC2_3/$total_usuariosC2)*100), 0, PHP_ROUND_HALF_UP);
    } else {
        $total_usuariosC2_3_porcentaje = 0;
    }    


    $json[] = array(
        'total_usuarios1' => $total_usuarios1,
        'total_usuarios2' => $total_usuarios2,
        'total_usuarios1_porcentaje' => $total_usuarios1_porcentaje,
        'total_usuarios2_porcentaje' => $total_usuarios2_porcentaje,
        'total_usuarios3' => $total_usuarios3,
        'total_usuarios4' => $total_usuarios4,
        'total_usuarios3_porcentaje' => $total_usuarios3_porcentaje,
        'total_usuarios4_porcentaje' => $total_usuarios4_porcentaje,
        'total_usuarios5' => $total_usuarios5,
        'total_usuarios6' => $total_usuarios6,
        'total_usuarios7' => $total_usuarios7,
        'total_usuarios8' => $total_usuarios8,
        'total_usuarios9' => $total_usuarios9,
        'total_usuarios10' => $total_usuarios10,
        'total_usuarios11' => $total_usuarios11,
        'total_usuarios12' => $total_usuarios12,
        'total_usuarios13' => $total_usuarios13,
        'total_usuarios14' => $total_usuarios14,
        'total_usuarios15' => $total_usuarios15,
        'total_usuarios16' => $total_usuarios16,
        'total_usuarios20' => $total_usuarios20,
        'total_usuarios21' => $total_usuarios21,
        'total_usuarios22' => $total_usuarios22,
        'total_usuarios23' => $total_usuarios23,
        'total_usuarios24' => $total_usuarios24,
        'total_usuarios25' => $total_usuarios25,
        'total_usuarios26' => $total_usuarios26,
        'total_usuarios27' => $total_usuarios27,
        'total_usuarios28' => $total_usuarios28,
        'total_usuarios29' => $total_usuarios29,
        'total_usuarios30' => $total_usuarios30,
        'total_usuarios31' => $total_usuarios31,
        'total_usuarios32' => $total_usuarios32,
        'total_usuarios33' => $total_usuarios33,
        'total_usuarios34' => $total_usuarios34,
        'total_usuarios35' => $total_usuarios35,
        'total_usuarios36' => $total_usuarios36,
        
        'total_usuarios20_porcentaje' => $total_usuarios20_porcentaje,
        'total_usuarios21_porcentaje' => $total_usuarios21_porcentaje,
        'total_usuarios22_porcentaje' => $total_usuarios22_porcentaje,
        'total_usuarios23_porcentaje' => $total_usuarios23_porcentaje,
        
        'total_usuariosS_1' => $total_usuariosS_1,
        'total_usuariosS_2' => $total_usuariosS_2,
        'total_usuariosS_3' => $total_usuariosS_3,
        'total_usuariosS_1_porcentaje' => $total_usuariosS_1_porcentaje,
        'total_usuariosS_2_porcentaje' => $total_usuariosS_2_porcentaje,
        'total_usuariosS_3_porcentaje' => $total_usuariosS_3_porcentaje,
        
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
        
        'total_usuariosC_1' => $total_usuariosC_1,
        'total_usuariosC_2' => $total_usuariosC_2,
        'total_usuariosC_3' => $total_usuariosC_3,
        'total_usuariosC_1_porcentaje' => $total_usuariosC_1_porcentaje,
        'total_usuariosC_2_porcentaje' => $total_usuariosC_2_porcentaje,
        'total_usuariosC_3_porcentaje' => $total_usuariosC_3_porcentaje,
        
        'total_usuariosC2_1' => $total_usuariosC2_1,
        'total_usuariosC2_2' => $total_usuariosC2_2,
        'total_usuariosC2_3' => $total_usuariosC2_3,
        'total_usuariosC2_1_porcentaje' => $total_usuariosC2_1_porcentaje,
        'total_usuariosC2_2_porcentaje' => $total_usuariosC2_2_porcentaje,
        'total_usuariosC2_3_porcentaje' => $total_usuariosC2_3_porcentaje,

    );
        
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>