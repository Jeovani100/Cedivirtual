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
	
	$sql = "SELECT COUNT(*) as total FROM doc_auditivo WHERE usuario = $id Order by id DESC";         
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado0 = $sentencia->fetch();
    $total_usuarios = $resultado0['total'];
    
    if($total_usuarios >= 1) {

    $sql = "SELECT * FROM doc_auditivo WHERE id_admin = $id_admin && Usuario = $id Order by id DESC";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) { 
        $id = $row['id'];
        $Documento = $row['Documento'];
        $Nombre = $row['Nombre'];
        $Extension = $row['Extension'];
        $Fecha_registro = $row['Fecha_registro'];
        $json[] = array(
            'id' => $id,
            'Documento' => $Documento,
            'Nombre' => $Nombre,
            'Extension' => $Extension,
            'Fecha_registro' => $Fecha_registro,
            'Oculto' => 'block'
        );
    }
    } else {
        $json[] = array(
            'id' => '',
            'Documento' => '',
            'Nombre' => '',
            'Extension' => '',
            'Fecha_registro' => '',
            'Oculto' => 'none',
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>