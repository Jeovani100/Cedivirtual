 <?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $dia = date('d');
    $mes = date('m');
    $year = date('Y');
    $fecha = $year.'-'.$mes.'-'.$dia;
    $sql = "SELECT COUNT(*) as total FROM agenda WHERE Fecha = '$fecha' ORDER BY id DESC";     
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios = $resultado['total']; 
    $json[] = array(
            'contador' => $total_usuarios,
        );
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>