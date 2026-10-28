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
	$sql = "SELECT * FROM controles WHERE id_admin = '$id_admin' && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $Year_ = new DateTime($Inicio0);
    $Inicio =  $Year_->format('d-m-Y');
    $sql = "SELECT * FROM controles WHERE id_admin = '$id_admin' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0);
    $Terminacion =  $Year_->format('d-m-Y');
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && Fecha >= '$Inicio0' && Fecha <= '$Terminacion0'";
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