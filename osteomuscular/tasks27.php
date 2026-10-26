<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
    if (isset($_POST['id_admin'])) {
        $id = $_POST['id'];
	    $id_admin = $_POST['id_admin'];
	    $sve = $_POST['sve'];
    }
    $sql = "SELECT * FROM admin WHERE id = $id";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Botones_ = $row['Botones'];
    if($Botones_ == 1) {
        $Boton ='';
        $Boton2 ='inline';
    } else {
        $Boton ='disabled'; 
        $Boton2 ='none';
    }
    
    $sql = "SELECT COUNT(*) as total FROM controles_doc WHERE id_admin = '$id_admin' && sve = $sve";     
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios = $resultado['total']; 
    
    if ($total_usuarios >= 1){
    $sql = "SELECT * FROM controles_doc WHERE id_admin = $id_admin && sve = $sve ORDER BY id DESC ";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) { 
        $id = $row['id'];
        $Codigo = $row['Codigo'];
        $Nombre = $row['Nombre'];
        $Extension = end(explode(".", $Codigo));
        $Fecha_registro = $row['Fecha_registro'];
        $json[] = array(
            'id' => $id,
            'Codigo' => $Codigo,
            'Extension' => $Extension,
            'Nombre' => $Nombre,
            'Boton' => $Boton,
            'Boton2' => $Boton2,
            'Fecha_registro' => $Fecha_registro
        );
    }
    } else {
        $json[] = array(
            'id' => '',
            'Codigo' => '',
            'Extension' => '',
            'Nombre' => '',
            'Boton' => '',
            'Boton2' => '',
            'Fecha_registro' => '',
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>