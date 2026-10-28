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
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $usuarios = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C1 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1 = $sentencia->fetch();
    $usuarios1 = $resultado1['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C1 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado01 = $sentencia->fetch();
    $usuarios01 = $resultado01['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C2 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2 = $sentencia->fetch();
    $usuarios2 = $resultado2['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C2 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado02 = $sentencia->fetch();
    $usuarios02 = $resultado02['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C3 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3 = $sentencia->fetch();
    $usuarios3 = $resultado3['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C3 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado03 = $sentencia->fetch();
    $usuarios03 = $resultado03['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C4 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4 = $sentencia->fetch();
    $usuarios4 = $resultado4['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C4 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado04 = $sentencia->fetch();
    $usuarios04 = $resultado04['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C5 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5 = $sentencia->fetch();
    $usuarios5 = $resultado5['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C5 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado05 = $sentencia->fetch();
    $usuarios05 = $resultado05['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C6 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado6 = $sentencia->fetch();
    $usuarios6 = $resultado6['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C6 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado06 = $sentencia->fetch();
    $usuarios06 = $resultado06['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C7 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado7 = $sentencia->fetch();
    $usuarios7 = $resultado7['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C7 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado07 = $sentencia->fetch();
    $usuarios07 = $resultado07['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C8 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado8 = $sentencia->fetch();
    $usuarios8 = $resultado8['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C8 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado08 = $sentencia->fetch();
    $usuarios08 = $resultado08['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C9 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado9 = $sentencia->fetch();
    $usuarios9 = $resultado9['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C9 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado09 = $sentencia->fetch();
    $usuarios09 = $resultado09['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C10 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado10 = $sentencia->fetch();
    $usuarios10 = $resultado10['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C10 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado010 = $sentencia->fetch();
    $usuarios010 = $resultado010['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C11 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado11 = $sentencia->fetch();
    $usuarios11 = $resultado11['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C11 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado011 = $sentencia->fetch();
    $usuarios011 = $resultado011['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C12 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado12 = $sentencia->fetch();
    $usuarios12 = $resultado12['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C12 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado012 = $sentencia->fetch();
    $usuarios012 = $resultado012['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C13 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado13 = $sentencia->fetch();
    $usuarios13 = $resultado13['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C13 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado013 = $sentencia->fetch();
    $usuarios013 = $resultado013['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C14 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado14 = $sentencia->fetch();
    $usuarios14 = $resultado14['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C14 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado014 = $sentencia->fetch();
    $usuarios014 = $resultado014['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C15 = 1 && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado15 = $sentencia->fetch();
    $usuarios15 = $resultado15['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE C15 = '0' && id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado015 = $sentencia->fetch();
    $usuarios015 = $resultado015['total'];
    
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
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>