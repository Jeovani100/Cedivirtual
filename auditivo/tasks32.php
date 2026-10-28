<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
	if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
	    $sve = $_POST['sve'];
    }
	
	$sql = "SELECT COUNT(*) as total FROM controles_img WHERE id_admin = '$id_admin' && sve = $sve";     
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios = $resultado['total']; 
    
    if ($total_usuarios >= 1){
    $sql = "SELECT * FROM controles_img WHERE id_admin = $id_admin && sve = $sve ORDER BY id DESC ";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) { 
        $json[] = array(
            'Codigo' => $row['Codigo'],
            'Elemento_titulo' => $row['Elemento_titulo'],
            'Elemento' => nl2br($row['Elemento'])
        );
    }
    } else {
        $json[] = array(
            'id' => '',
            'Codigo' => '',
            'Recurso' => '',
            'Descripcion' => '',
            'Nombre' => '',
            'Extension' => '',
            'Boton' => '',
            'Boton2' => '',
            'Fecha' => '',
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>