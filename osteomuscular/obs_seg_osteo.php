<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
    $id_admin = $_POST['id_admin'];
	$id = $_POST['id'];
	
	$sql = "SELECT COUNT(*) as total FROM observaciones_s_osteo WHERE usuario = $id Order by id DESC";         
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado0 = $sentencia->fetch();
    $total_usuarios = $resultado0['total'];
    
    if($total_usuarios >= 1) {
    $sql = "SELECT * FROM observaciones_s_osteo WHERE usuario = $id Order by id DESC";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) { 
        $json[] = array(
            'id' => $row['id'],
            'observacion' => $row['observacion'],
            'Fecha_registro' => $row['Fecha_registro'],
            'Oculto' => 'block',
        );
    }
    } else {
        $json[] = array(
            'id' => '',
            'observacion' => '',
            'Fecha_registro' => '',
            'Oculto' => 'none',
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>