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
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $usuarios = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C11 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1 = $sentencia->fetch();
    $usuarios1 = $resultado1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C11 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado01 = $sentencia->fetch();
    $usuarios01 = $resultado01['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C12 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2 = $sentencia->fetch();
    $usuarios2 = $resultado2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C12 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado02 = $sentencia->fetch();
    $usuarios02 = $resultado02['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C13 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3 = $sentencia->fetch();
    $usuarios3 = $resultado3['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C13 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado03 = $sentencia->fetch();
    $usuarios03 = $resultado03['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C21 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4 = $sentencia->fetch();
    $usuarios4 = $resultado4['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C21 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado04 = $sentencia->fetch();
    $usuarios04 = $resultado04['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C22 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5 = $sentencia->fetch();
    $usuarios5 = $resultado5['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C22 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado05 = $sentencia->fetch();
    $usuarios05 = $resultado05['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C221 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado6 = $sentencia->fetch();
    $usuarios6 = $resultado6['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C221 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado06 = $sentencia->fetch();
    $usuarios06 = $resultado06['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C222 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado7 = $sentencia->fetch();
    $usuarios7 = $resultado7['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C222 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado07 = $sentencia->fetch();
    $usuarios07 = $resultado07['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C223 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado8 = $sentencia->fetch();
    $usuarios8 = $resultado8['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C223 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado08 = $sentencia->fetch();
    $usuarios08 = $resultado08['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C224 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado9 = $sentencia->fetch();
    $usuarios9 = $resultado9['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C224 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado09 = $sentencia->fetch();
    $usuarios09 = $resultado09['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C225 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado10 = $sentencia->fetch();
    $usuarios10 = $resultado10['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C225 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado010 = $sentencia->fetch();
    $usuarios010 = $resultado010['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C226 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado11 = $sentencia->fetch();
    $usuarios11 = $resultado11['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C226 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado011 = $sentencia->fetch();
    $usuarios011 = $resultado011['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C31 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado12 = $sentencia->fetch();
    $usuarios12 = $resultado12['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C31 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado012 = $sentencia->fetch();
    $usuarios012 = $resultado012['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C41 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado13 = $sentencia->fetch();
    $usuarios13 = $resultado13['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C41 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado013 = $sentencia->fetch();
    $usuarios013 = $resultado013['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C42 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado14 = $sentencia->fetch();
    $usuarios14 = $resultado14['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C42 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado014 = $sentencia->fetch();
    $usuarios014 = $resultado014['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C43 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado15 = $sentencia->fetch();
    $usuarios15 = $resultado15['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C43 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado015 = $sentencia->fetch();
    $usuarios015 = $resultado015['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C44 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado16 = $sentencia->fetch();
    $usuarios16 = $resultado16['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C44 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado016 = $sentencia->fetch();
    $usuarios016 = $resultado016['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C45 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado17 = $sentencia->fetch();
    $usuarios17 = $resultado17['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C45 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado017 = $sentencia->fetch();
    $usuarios017 = $resultado017['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C46 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado18 = $sentencia->fetch();
    $usuarios18 = $resultado18['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C46 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado018 = $sentencia->fetch();
    $usuarios018 = $resultado018['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C51 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado51_0 = $sentencia->fetch();
    $usuarios51_0 = $resultado51_0['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C51 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado51_1 = $sentencia->fetch();
    $usuarios51_1 = $resultado51_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C51 = 2 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado51_2 = $sentencia->fetch();
    $usuarios51_2 = $resultado51_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C51 = 3 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado51_3 = $sentencia->fetch();
    $usuarios51_3 = $resultado51_3['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C51 = 4 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado51_4 = $sentencia->fetch();
    $usuarios51_4 = $resultado51_4['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C511 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado511_0 = $sentencia->fetch();
    $usuarios511_0 = $resultado511_0['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C511 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado511_1 = $sentencia->fetch();
    $usuarios511_1 = $resultado511_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C511 = 2 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado511_2 = $sentencia->fetch();
    $usuarios511_2 = $resultado511_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C511 = 3 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado511_3 = $sentencia->fetch();
    $usuarios511_3 = $resultado511_3['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C511 = 4 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado511_4 = $sentencia->fetch();
    $usuarios511_4 = $resultado511_4['total'];
    
    $sql = "SELECT SUM(C5121) as total FROM confort WHERE id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado512_1 = $sentencia->fetch();
    $usuarios512_1 = $resultado512_1['total'];
    
    $sql = "SELECT SUM(C5122) as total FROM confort WHERE id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado512_2 = $sentencia->fetch();
    $usuarios512_2 = $resultado512_2['total'];
    
    $sql = "SELECT SUM(C5123) as total FROM confort WHERE id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado512_3 = $sentencia->fetch();
    $usuarios512_3 = $resultado512_3['total'];
    
    $sql = "SELECT SUM(C5124) as total FROM confort WHERE id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado512_4 = $sentencia->fetch();
    $usuarios512_4 = $resultado512_4['total'];
    
    $usuarios2 = $usuarios512_1 + $usuarios512_2 + $usuarios512_3 + $usuarios512_4;
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C61 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado61_0 = $sentencia->fetch();
    $usuarios61_0 = $resultado61_0['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C61 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado61_1 = $sentencia->fetch();
    $usuarios61_1 = $resultado61_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C61 = 2 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado61_2 = $sentencia->fetch();
    $usuarios61_2 = $resultado61_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C61 = 3 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado61_3 = $sentencia->fetch();
    $usuarios61_3 = $resultado61_3['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C61 = 4 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado61_4 = $sentencia->fetch();
    $usuarios61_4 = $resultado61_4['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C62 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado62_0 = $sentencia->fetch();
    $usuarios62_0 = $resultado62_0['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C62 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado62_1 = $sentencia->fetch();
    $usuarios62_1 = $resultado62_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C62 = 2 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado62_2 = $sentencia->fetch();
    $usuarios62_2 = $resultado62_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C62 = 3 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado62_3 = $sentencia->fetch();
    $usuarios62_3 = $resultado62_3['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C62 = 4 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado62_4 = $sentencia->fetch();
    $usuarios62_4 = $resultado62_4['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C71 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado71_0 = $sentencia->fetch();
    $usuarios71_0 = $resultado71_0['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C71 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado71_1 = $sentencia->fetch();
    $usuarios71_1 = $resultado71_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C71 = 2 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado71_2 = $sentencia->fetch();
    $usuarios71_2 = $resultado71_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C71 = 3 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado71_3 = $sentencia->fetch();
    $usuarios71_3 = $resultado71_3['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C71 = 4 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado71_4 = $sentencia->fetch();
    $usuarios71_4 = $resultado71_4['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C72 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado72_0 = $sentencia->fetch();
    $usuarios72_0 = $resultado72_0['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C72 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado72_1 = $sentencia->fetch();
    $usuarios72_1 = $resultado72_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C72 = 2 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado72_2 = $sentencia->fetch();
    $usuarios72_2 = $resultado72_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C72 = 3 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado72_3 = $sentencia->fetch();
    $usuarios72_3 = $resultado72_3['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C72 = 4 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado72_4 = $sentencia->fetch();
    $usuarios72_4 = $resultado72_4['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C73 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado73_0 = $sentencia->fetch();
    $usuarios73_0 = $resultado73_0['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C73 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado73_1 = $sentencia->fetch();
    $usuarios73_1 = $resultado73_1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C73 = 2 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado73_2 = $sentencia->fetch();
    $usuarios73_2 = $resultado73_2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C73 = 3 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado73_3 = $sentencia->fetch();
    $usuarios73_3 = $resultado73_3['total'];
    
    $sql = "SELECT COUNT(*) as total FROM confort WHERE C73 = 4 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado73_4 = $sentencia->fetch();
    $usuarios73_4 = $resultado73_4['total'];
    
    
    $usuarios1_porcentaje = round((($usuarios1/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios01_porcentaje = round((($usuarios01/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios2_porcentaje = round((($usuarios2/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios02_porcentaje = round((($usuarios02/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios3_porcentaje = round((($usuarios3/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios03_porcentaje = round((($usuarios03/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios4_porcentaje = round((($usuarios4/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios04_porcentaje = round((($usuarios04/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios5_porcentaje = round((($usuarios5/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios05_porcentaje = round((($usuarios05/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios6_porcentaje = round((($usuarios6/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios06_porcentaje = round((($usuarios06/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios7_porcentaje = round((($usuarios7/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios07_porcentaje = round((($usuarios07/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios8_porcentaje = round((($usuarios8/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios08_porcentaje = round((($usuarios08/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios9_porcentaje = round((($usuarios9/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios09_porcentaje = round((($usuarios09/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios10_porcentaje = round((($usuarios10/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios010_porcentaje = round((($usuarios010/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios11_porcentaje = round((($usuarios11/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios011_porcentaje = round((($usuarios011/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios12_porcentaje = round((($usuarios12/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios012_porcentaje = round((($usuarios012/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios13_porcentaje = round((($usuarios13/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios013_porcentaje = round((($usuarios013/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios14_porcentaje = round((($usuarios14/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios014_porcentaje = round((($usuarios014/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios15_porcentaje = round((($usuarios15/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios015_porcentaje = round((($usuarios015/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios16_porcentaje = round((($usuarios16/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios016_porcentaje = round((($usuarios016/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios17_porcentaje = round((($usuarios17/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios017_porcentaje = round((($usuarios017/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios18_porcentaje = round((($usuarios18/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios018_porcentaje = round((($usuarios018/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios51_0_porcentaje = round((($usuarios51_0/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios51_1_porcentaje = round((($usuarios51_1/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios51_2_porcentaje = round((($usuarios51_2/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios51_3_porcentaje = round((($usuarios51_3/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios51_4_porcentaje = round((($usuarios51_4/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios511_0_porcentaje = round((($usuarios511_0/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios511_1_porcentaje = round((($usuarios511_1/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios511_2_porcentaje = round((($usuarios511_2/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios511_3_porcentaje = round((($usuarios511_3/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios511_4_porcentaje = round((($usuarios511_4/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios512_1_porcentaje = round((($usuarios512_1/$usuarios2)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios512_2_porcentaje = round((($usuarios512_2/$usuarios2)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios512_3_porcentaje = round((($usuarios512_3/$usuarios2)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios512_4_porcentaje = round((($usuarios512_4/$usuarios2)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios61_0_porcentaje = round((($usuarios61_0/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios61_1_porcentaje = round((($usuarios61_1/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios61_2_porcentaje = round((($usuarios61_2/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios61_3_porcentaje = round((($usuarios61_3/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios61_4_porcentaje = round((($usuarios61_4/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios62_0_porcentaje = round((($usuarios62_0/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios62_1_porcentaje = round((($usuarios62_1/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios62_2_porcentaje = round((($usuarios62_2/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios62_3_porcentaje = round((($usuarios62_3/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios62_4_porcentaje = round((($usuarios62_4/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios71_0_porcentaje = round((($usuarios71_0/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios71_1_porcentaje = round((($usuarios71_1/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios71_2_porcentaje = round((($usuarios71_2/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios71_3_porcentaje = round((($usuarios71_3/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios71_4_porcentaje = round((($usuarios71_4/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios72_0_porcentaje = round((($usuarios72_0/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios72_1_porcentaje = round((($usuarios72_1/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios72_2_porcentaje = round((($usuarios72_2/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios72_3_porcentaje = round((($usuarios72_3/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios72_4_porcentaje = round((($usuarios72_4/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios73_0_porcentaje = round((($usuarios73_0/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios73_1_porcentaje = round((($usuarios73_1/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios73_2_porcentaje = round((($usuarios73_2/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios73_3_porcentaje = round((($usuarios73_3/$usuarios)*100), 0, PHP_ROUND_HALF_UP);
    $usuarios73_4_porcentaje = round((($usuarios73_4/$usuarios)*100), 0, PHP_ROUND_HALF_UP);

    $json[] = array(
        'usuarios1' => $usuarios1,
        'usuarios01' => $usuarios01,
        'usuarios2' => $usuarios2,
        'usuarios02' => $usuarios02,
        'usuarios3' => $usuarios3,
        'usuarios03' => $usuarios03,
        'usuarios4' => $usuarios4,
        'usuarios04' => $usuarios04,
        'usuarios5' => $usuarios5,
        'usuarios05' => $usuarios05,
        'usuarios6' => $usuarios6,
        'usuarios06' => $usuarios06,
        'usuarios7' => $usuarios7,
        'usuarios07' => $usuarios07,
        'usuarios8' => $usuarios8,
        'usuarios08' => $usuarios08,
        'usuarios9' => $usuarios9,
        'usuarios09' => $usuarios09,
        'usuarios10' => $usuarios10,
        'usuarios010' => $usuarios010,
        'usuarios11' => $usuarios11,
        'usuarios011' => $usuarios011,
        'usuarios12' => $usuarios12,
        'usuarios012' => $usuarios012,
        'usuarios13' => $usuarios13,
        'usuarios013' => $usuarios013,
        'usuarios14' => $usuarios14,
        'usuarios014' => $usuarios014,
        'usuarios15' => $usuarios15,
        'usuarios015' => $usuarios015,
        'usuarios16' => $usuarios16,
        'usuarios016' => $usuarios016,
        'usuarios17' => $usuarios17,
        'usuarios017' => $usuarios017,
        'usuarios18' => $usuarios18,
        'usuarios018' => $usuarios018,
        'usuarios51_0' => $usuarios51_0,
        'usuarios51_1' => $usuarios51_1,
        'usuarios51_2' => $usuarios51_2,
        'usuarios51_3' => $usuarios51_3,
        'usuarios51_4' => $usuarios51_4,
        'usuarios511_0' => $usuarios511_0,
        'usuarios511_1' => $usuarios511_1,
        'usuarios511_2' => $usuarios511_2,
        'usuarios511_3' => $usuarios511_3,
        'usuarios511_4' => $usuarios511_4,
        'usuarios512_1' => $usuarios512_1,
        'usuarios512_2' => $usuarios512_2,
        'usuarios512_3' => $usuarios512_3,
        'usuarios512_4' => $usuarios512_4,
        'usuarios61_0' => $usuarios61_0,
        'usuarios61_1' => $usuarios61_1,
        'usuarios61_2' => $usuarios61_2,
        'usuarios61_3' => $usuarios61_3,
        'usuarios61_4' => $usuarios61_4,
        'usuarios62_0' => $usuarios62_0,
        'usuarios62_1' => $usuarios62_1,
        'usuarios62_2' => $usuarios62_2,
        'usuarios62_3' => $usuarios62_3,
        'usuarios62_4' => $usuarios62_4,
        'usuarios61_4' => $usuarios61_4,
        'usuarios71_0' => $usuarios71_0,
        'usuarios71_1' => $usuarios71_1,
        'usuarios71_2' => $usuarios71_2,
        'usuarios71_3' => $usuarios71_3,
        'usuarios71_4' => $usuarios71_4,
        'usuarios72_0' => $usuarios72_0,
        'usuarios72_1' => $usuarios72_1,
        'usuarios72_2' => $usuarios72_2,
        'usuarios72_3' => $usuarios72_3,
        'usuarios72_4' => $usuarios72_4,
        'usuarios73_0' => $usuarios73_0,
        'usuarios73_1' => $usuarios73_1,
        'usuarios73_2' => $usuarios73_2,
        'usuarios73_3' => $usuarios73_3,
        'usuarios73_4' => $usuarios73_4,
        
        'usuarios1_porcentaje' => $usuarios1_porcentaje,
        'usuarios01_porcentaje' => $usuarios01_porcentaje,
        'usuarios2_porcentaje' => $usuarios2_porcentaje,
        'usuarios02_porcentaje' => $usuarios02_porcentaje,
        'usuarios3_porcentaje' => $usuarios3_porcentaje,
        'usuarios03_porcentaje' => $usuarios03_porcentaje,
        'usuarios4_porcentaje' => $usuarios4_porcentaje,
        'usuarios04_porcentaje' => $usuarios04_porcentaje,
        'usuarios5_porcentaje' => $usuarios5_porcentaje,
        'usuarios05_porcentaje' => $usuarios05_porcentaje,
        'usuarios6_porcentaje' => $usuarios6_porcentaje,
        'usuarios06_porcentaje' => $usuarios06_porcentaje,
        'usuarios7_porcentaje' => $usuarios7_porcentaje,
        'usuarios07_porcentaje' => $usuarios07_porcentaje,
        'usuarios8_porcentaje' => $usuarios8_porcentaje,
        'usuarios08_porcentaje' => $usuarios08_porcentaje,
        'usuarios9_porcentaje' => $usuarios9_porcentaje,
        'usuarios09_porcentaje' => $usuarios09_porcentaje,
        'usuarios10_porcentaje' => $usuarios10_porcentaje,
        'usuarios010_porcentaje' => $usuarios010_porcentaje,
        'usuarios11_porcentaje' => $usuarios11_porcentaje,
        'usuarios011_porcentaje' => $usuarios011_porcentaje,
        'usuarios12_porcentaje' => $usuarios12_porcentaje,
        'usuarios012_porcentaje' => $usuarios012_porcentaje,
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
        'usuarios51_0_porcentaje' => $usuarios51_0_porcentaje,
        'usuarios51_1_porcentaje' => $usuarios51_1_porcentaje,
        'usuarios51_2_porcentaje' => $usuarios51_2_porcentaje,
        'usuarios51_3_porcentaje' => $usuarios51_3_porcentaje,
        'usuarios51_4_porcentaje' => $usuarios51_4_porcentaje,
        'usuarios511_0_porcentaje' => $usuarios511_0_porcentaje,
        'usuarios511_1_porcentaje' => $usuarios511_1_porcentaje,
        'usuarios511_2_porcentaje' => $usuarios511_2_porcentaje,
        'usuarios511_3_porcentaje' => $usuarios511_3_porcentaje,
        'usuarios511_4_porcentaje' => $usuarios511_4_porcentaje,
        'usuarios512_1_porcentaje' => $usuarios512_1_porcentaje,
        'usuarios512_2_porcentaje' => $usuarios512_2_porcentaje,
        'usuarios512_3_porcentaje' => $usuarios512_3_porcentaje,
        'usuarios512_4_porcentaje' => $usuarios512_4_porcentaje,
        'usuarios61_0_porcentaje' => $usuarios61_0_porcentaje,
        'usuarios61_1_porcentaje' => $usuarios61_1_porcentaje,
        'usuarios61_2_porcentaje' => $usuarios61_2_porcentaje,
        'usuarios61_3_porcentaje' => $usuarios61_3_porcentaje,
        'usuarios61_4_porcentaje' => $usuarios61_4_porcentaje,
        'usuarios62_0_porcentaje' => $usuarios62_0_porcentaje,
        'usuarios62_1_porcentaje' => $usuarios62_1_porcentaje,
        'usuarios62_2_porcentaje' => $usuarios62_2_porcentaje,
        'usuarios62_3_porcentaje' => $usuarios62_3_porcentaje,
        'usuarios62_4_porcentaje' => $usuarios62_4_porcentaje,
        'usuarios71_0_porcentaje' => $usuarios71_0_porcentaje,
        'usuarios71_1_porcentaje' => $usuarios71_1_porcentaje,
        'usuarios71_2_porcentaje' => $usuarios71_2_porcentaje,
        'usuarios71_3_porcentaje' => $usuarios71_3_porcentaje,
        'usuarios71_4_porcentaje' => $usuarios71_4_porcentaje,
        'usuarios72_0_porcentaje' => $usuarios72_0_porcentaje,
        'usuarios72_1_porcentaje' => $usuarios72_1_porcentaje,
        'usuarios72_2_porcentaje' => $usuarios72_2_porcentaje,
        'usuarios72_3_porcentaje' => $usuarios72_3_porcentaje,
        'usuarios72_4_porcentaje' => $usuarios72_4_porcentaje,
        'usuarios73_0_porcentaje' => $usuarios73_0_porcentaje,
        'usuarios73_1_porcentaje' => $usuarios73_1_porcentaje,
        'usuarios73_2_porcentaje' => $usuarios73_2_porcentaje,
        'usuarios73_3_porcentaje' => $usuarios73_3_porcentaje,
        'usuarios73_4_porcentaje' => $usuarios73_4_porcentaje,
        
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;