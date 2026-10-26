<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    if(isset($_POST['Codigo'])) {
        $Codigo = $_POST['Codigo'];
    }    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $usuarios = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C1 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1 = $sentencia->fetch();
    $usuarios1 = $resultado1['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C1_1 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1_1 = $sentencia->fetch();
    $usuarios1_1 = $resultado1_1['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C1_2 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1_2 = $sentencia->fetch();
    $usuarios1_2 = $resultado1_2['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C1_3 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1_3 = $sentencia->fetch();
    $usuarios1_3 = $resultado1_3['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C1 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado01 = $sentencia->fetch();
    $usuarios01 = $resultado01['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C2 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2 = $sentencia->fetch();
    $usuarios2 = $resultado2['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C2_1 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2_1 = $sentencia->fetch();
    $usuarios2_1 = $resultado2_1['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C2_2 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2_2 = $sentencia->fetch();
    $usuarios2_2 = $resultado2_2['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C2_3 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2_3 = $sentencia->fetch();
    $usuarios2_3 = $resultado2_3['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C2 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado02 = $sentencia->fetch();
    $usuarios02 = $resultado02['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C3 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3 = $sentencia->fetch();
    $usuarios3 = $resultado3['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C3 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado03 = $sentencia->fetch();
    $usuarios03 = $resultado03['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C4 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4 = $sentencia->fetch();
    $usuarios4 = $resultado4['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C4 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado04 = $sentencia->fetch();
    $usuarios04 = $resultado04['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5 = $sentencia->fetch();
    $usuarios5 = $resultado5['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5_1 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_1 = $sentencia->fetch();
    $usuarios5_1 = $resultado5_1['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5_2 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_2 = $sentencia->fetch();
    $usuarios5_2 = $resultado5_2['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5_3 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_3 = $sentencia->fetch();
    $usuarios5_3 = $resultado5_3['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5_4 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_4 = $sentencia->fetch();
    $usuarios5_4 = $resultado5_4['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5_5 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_5 = $sentencia->fetch();
    $usuarios5_5 = $resultado5_5['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5_6 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_6 = $sentencia->fetch();
    $usuarios5_6 = $resultado5_6['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5_7 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_7 = $sentencia->fetch();
    $usuarios5_7 = $resultado5_7['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5_8 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_8 = $sentencia->fetch();
    $usuarios5_8 = $resultado5_8['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5_9 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_9 = $sentencia->fetch();
    $usuarios5_9 = $resultado5_9['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5_10 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_10 = $sentencia->fetch();
    $usuarios5_10 = $resultado5_10['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C5 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado05 = $sentencia->fetch();
    $usuarios05 = $resultado05['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C6 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado6 = $sentencia->fetch();
    $usuarios6 = $resultado6['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C6_1 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado6_1 = $sentencia->fetch();
    $usuarios6_1 = $resultado6_1['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C6_2 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado6_2 = $sentencia->fetch();
    $usuarios6_2 = $resultado6_2['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C6_3 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado6_3 = $sentencia->fetch();
    $usuarios6_3 = $resultado6_3['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C6 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado06 = $sentencia->fetch();
    $usuarios06 = $resultado06['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C7 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado7 = $sentencia->fetch();
    $usuarios7 = $resultado7['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C7 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado07 = $sentencia->fetch();
    $usuarios07 = $resultado07['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C8 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado8 = $sentencia->fetch();
    $usuarios8 = $resultado8['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C8 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado08 = $sentencia->fetch();
    $usuarios08 = $resultado08['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C9 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado9 = $sentencia->fetch();
    $usuarios9 = $resultado9['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C9_1 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado9_1 = $sentencia->fetch();
    $usuarios9_1 = $resultado9_1['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C9_2 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado9_2 = $sentencia->fetch();
    $usuarios9_2 = $resultado9_2['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C9_3 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado9_3 = $sentencia->fetch();
    $usuarios9_3 = $resultado9_3['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C9 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado09 = $sentencia->fetch();
    $usuarios09 = $resultado09['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C10 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado10 = $sentencia->fetch();
    $usuarios10 = $resultado10['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C10_1 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado10_1 = $sentencia->fetch();
    $usuarios10_1 = $resultado10_1['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C10_2 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado10_2 = $sentencia->fetch();
    $usuarios10_2 = $resultado10_2['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C10_3 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado10_3 = $sentencia->fetch();
    $usuarios10_3 = $resultado10_3['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C10 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado010 = $sentencia->fetch();
    $usuarios010 = $resultado010['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C12 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado12 = $sentencia->fetch();
    $usuarios12 = $resultado12['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C12_1 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado12_1 = $sentencia->fetch();
    $usuarios12_1 = $resultado12_1['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C12_2 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado12_2 = $sentencia->fetch();
    $usuarios12_2 = $resultado12_2['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C12_3 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado12_3 = $sentencia->fetch();
    $usuarios12_3 = $resultado112_3['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C12 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado012 = $sentencia->fetch();
    $usuarios012 = $resultado012['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C13 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado13 = $sentencia->fetch();
    $usuarios13 = $resultado13['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C13_1 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado13_1 = $sentencia->fetch();
    $usuarios13_1 = $resultado13_1['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C13_2 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado13_2 = $sentencia->fetch();
    $usuarios13_2 = $resultado13_2['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C13_3 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado13_3 = $sentencia->fetch();
    $usuarios13_3 = $resultado113_3['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C13 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado013 = $sentencia->fetch();
    $usuarios013 = $resultado013['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C14 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado14 = $sentencia->fetch();
    $usuarios14 = $resultado14['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C14 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado014 = $sentencia->fetch();
    $usuarios014 = $resultado014['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C15 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado15 = $sentencia->fetch();
    $usuarios15 = $resultado15['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C15 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado015 = $sentencia->fetch();
    $usuarios015 = $resultado015['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C16 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado16 = $sentencia->fetch();
    $usuarios16 = $resultado16['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C16 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado016 = $sentencia->fetch();
    $usuarios016 = $resultado016['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C17 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado17 = $sentencia->fetch();
    $usuarios17 = $resultado17['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C17 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado017 = $sentencia->fetch();
    $usuarios017 = $resultado017['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C18 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado18 = $sentencia->fetch();
    $usuarios18 = $resultado18['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C18 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado018 = $sentencia->fetch();
    $usuarios018 = $resultado018['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C19 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado19 = $sentencia->fetch();
    $usuarios19 = $resultado19['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C19 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado019 = $sentencia->fetch();
    $usuarios019 = $resultado019['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C20 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado20 = $sentencia->fetch();
    $usuarios20 = $resultado20['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C20 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado020 = $sentencia->fetch();
    $usuarios020 = $resultado020['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C21 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado21 = $sentencia->fetch();
    $usuarios21 = $resultado21['total'];
    $sql = "SELECT COUNT(*) as total FROM seguimiento_osteomuscular WHERE C21 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado021 = $sentencia->fetch();
    $usuarios021 = $resultado021['total'];

    if($usuarios1 >= 1) {
        $usuarios1_porcentaje = round((($usuarios1/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios01 >= 1) {
        $usuarios01_porcentaje = round((($usuarios01/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios2 >= 1) {
        $usuarios2_porcentaje = round((($usuarios2/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios02 >= 1) {
        $usuarios02_porcentaje = round((($usuarios02/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios3 >= 1) {
        $usuarios3_porcentaje = round((($usuarios3/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios03 >= 1) {
        $usuarios03_porcentaje = round((($usuarios03/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios4 >= 1) {
        $usuarios4_porcentaje = round((($usuarios4/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios04 >= 1) {
        $usuarios04_porcentaje = round((($usuarios04/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios5 >= 1) {
        $usuarios5_porcentaje = round((($usuarios5/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios05 >= 1) {
        $usuarios05_porcentaje = round((($usuarios05/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios6 >= 1) {
        $usuarios6_porcentaje = round((($usuarios6/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios06 >= 1) {
        $usuarios06_porcentaje = round((($usuarios06/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios7 >= 1) {
        $usuarios7_porcentaje = round((($usuarios7/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios07 >= 1) {
        $usuarios07_porcentaje = round((($usuarios07/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios8 >= 1) {
        $usuarios8_porcentaje = round((($usuarios8/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios08 >= 1) {
        $usuarios08_porcentaje = round((($usuarios08/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios9 >= 1) {
        $usuarios9_porcentaje = round((($usuarios9/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios09 >= 1) {
        $usuarios09_porcentaje = round((($usuarios09/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios10 >= 1) {
        $usuarios10_porcentaje = round((($usuarios10/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios010 >= 1) {
        $usuarios010_porcentaje = round((($usuarios010/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios12 >= 1) {
        $usuarios12_porcentaje = round((($usuarios12/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios012 >= 1) {
        $usuarios012_porcentaje = round((($usuarios012/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios13 >= 1) {
        $usuarios13_porcentaje = round((($usuarios13/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios013 >= 1) {
        $usuarios013_porcentaje = round((($usuarios013/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios14 >= 1) {
        $usuarios14_porcentaje = round((($usuarios14/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios014 >= 1) {
        $usuarios014_porcentaje = round((($usuarios014/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }    
    if($usuarios15 >= 1) {
        $usuarios15_porcentaje = round((($usuarios15/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios015 >= 1) {
        $usuarios015_porcentaje = round((($usuarios015/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    } 
    if($usuarios16 >= 1) {
        $usuarios16_porcentaje = round((($usuarios16/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios016 >= 1) {
        $usuarios016_porcentaje = round((($usuarios016/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }    
    if($usuarios17 >= 1) {
        $usuarios17_porcentaje = round((($usuarios17/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios017 >= 1) {
        $usuarios017_porcentaje = round((($usuarios017/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }    
    if($usuarios18 >= 1) {
        $usuarios18_porcentaje = round((($usuarios18/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios018 >= 1) {
        $usuarios018_porcentaje = round((($usuarios018/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }    
    if($usuarios19 >= 1) {
        $usuarios19_porcentaje = round((($usuarios19/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios019 >= 1) {
        $usuarios019_porcentaje = round((($usuarios019/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }   
    if($usuarios20 >= 1) {
        $usuarios20_porcentaje = round((($usuarios20/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios020 >= 1) {
        $usuarios020_porcentaje = round((($usuarios020/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }  
    if($usuarios21 >= 1) {
        $usuarios21_porcentaje = round((($usuarios21/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }
    if($usuarios021 >= 1) {
        $usuarios021_porcentaje = round((($usuarios021/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    }    
    $json[] = array(
        'usuarios1' => $usuarios1,
        'usuarios1_1' => $usuarios1_1,
        'usuarios1_2' => $usuarios1_2,
        'usuarios1_3' => $usuarios1_3,
        'usuarios01' => $usuarios01,
        'usuarios1_porcentaje' => $usuarios1_porcentaje,
        'usuarios01_porcentaje' => $usuarios01_porcentaje,
        'usuarios2' => $usuarios2,
        'usuarios2_1' => $usuarios2_1,
        'usuarios2_2' => $usuarios2_2,
        'usuarios2_3' => $usuarios2_3,
        'usuarios02' => $usuarios02,
        'usuarios2_porcentaje' => $usuarios2_porcentaje,
        'usuarios02_porcentaje' => $usuarios02_porcentaje,
        'usuarios3_porcentaje' => $usuarios3_porcentaje,
        'usuarios03_porcentaje' => $usuarios03_porcentaje,
        'usuarios4_porcentaje' => $usuarios4_porcentaje,
        'usuarios04_porcentaje' => $usuarios04_porcentaje,
        'usuarios5' => $usuarios5,
        'usuarios5_1' => $usuarios5_1,
        'usuarios5_2' => $usuarios5_2,
        'usuarios5_3' => $usuarios5_3,
        'usuarios5_4' => $usuarios5_4,
        'usuarios5_5' => $usuarios5_5,
        'usuarios5_6' => $usuarios5_6,
        'usuarios5_7' => $usuarios5_7,
        'usuarios5_8' => $usuarios5_8,
        'usuarios5_9' => $usuarios5_9,
        'usuarios5_10' => $usuarios5_10,
        'usuarios05' => $usuarios05,
        'usuarios5_porcentaje' => $usuarios5_porcentaje,
        'usuarios05_porcentaje' => $usuarios05_porcentaje,
        'usuarios6' => $usuarios6,
        'usuarios6_1' => $usuarios6_1,
        'usuarios6_2' => $usuarios6_2,
        'usuarios6_3' => $usuarios6_3,
        'usuarios06' => $usuarios06,
        'usuarios6_porcentaje' => $usuarios6_porcentaje,
        'usuarios06_porcentaje' => $usuarios06_porcentaje,
        'usuarios7_porcentaje' => $usuarios7_porcentaje,
        'usuarios07_porcentaje' => $usuarios07_porcentaje,
        'usuarios8_porcentaje' => $usuarios8_porcentaje,
        'usuarios08_porcentaje' => $usuarios08_porcentaje,
        'usuarios9' => $usuarios9,
        'usuarios9_1' => $usuarios9_1,
        'usuarios9_2' => $usuarios9_2,
        'usuarios9_3' => $usuarios9_3,
        'usuarios09' => $usuarios09,
        'usuarios9_porcentaje' => $usuarios9_porcentaje,
        'usuarios09_porcentaje' => $usuarios09_porcentaje,
        'usuarios10' => $usuarios10,
        'usuarios10_1' => $usuarios10_1,
        'usuarios10_2' => $usuarios10_2,
        'usuarios10_3' => $usuarios10_3,
        'usuarios010' => $usuarios010,
        'usuarios10_porcentaje' => $usuarios10_porcentaje,
        'usuarios010_porcentaje' => $usuarios010_porcentaje,
        'usuarios12_1' => $usuarios12_1,
        'usuarios12_2' => $usuarios12_2,
        'usuarios12_3' => $usuarios12_3,
        'usuarios012' => $usuarios012,
        'usuarios12_porcentaje' => $usuarios12_porcentaje,
        'usuarios012_porcentaje' => $usuarios012_porcentaje,
        'usuarios13_1' => $usuarios13_1,
        'usuarios13_2' => $usuarios13_2,
        'usuarios13_3' => $usuarios13_3,
        'usuarios013' => $usuarios013,
        'usuarios13_porcentaje' => $usuarios13_porcentaje,
        'usuarios013_porcentaje' => $usuarios013_porcentaje,
        'usuarios14_porcentaje' => $usuarios14_porcentaje,
        'usuarios014_porcentaje' => $usuarios014_porcentaje,
        'usuarios15_porcentaje' => $usuarios15_porcentaje,
        'usuarios015_porcentaje' => $usuarios015_porcentaje,
        'usuarios16_porcentaje' => $usuarios16_porcentaje,
        'usuarios016_porcentaje' => $usuarios016_porcentaje,
        'usuarios17_porcentaje' => $usuarios17_porcentaje,
        'usuarios017_porcentaje' => $usuarios017_porcentaje,
        'usuarios18_porcentaje' => $usuarios18_porcentaje,
        'usuarios018_porcentaje' => $usuarios018_porcentaje,
        'usuarios19_porcentaje' => $usuarios19_porcentaje,
        'usuarios019_porcentaje' => $usuarios019_porcentaje,
        'usuarios20_porcentaje' => $usuarios20_porcentaje,
        'usuarios020_porcentaje' => $usuarios020_porcentaje,
        'usuarios21_porcentaje' => $usuarios21_porcentaje,
        'usuarios021_porcentaje' => $usuarios021_porcentaje,
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;