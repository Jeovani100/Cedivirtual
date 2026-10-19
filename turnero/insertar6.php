<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    $Nombre=$_POST["Nombre"];
    $fechaEntrada= $_POST['fecha'];
    $fechaAuxiliar	= strtotime ( "-120 seconds" , strtotime ( $fechaEntrada ) ) ;	
    $fechaSalida 	= date ( 'Y-m-d H:i:s' , $fechaAuxiliar );
    $sql = "SELECT COUNT(*) as total FROM turnero WHERE Fecha_registro >= '$fechaSalida' && Nombre = '$Nombre'";           
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $Contador = $resultado['total']; 
    $sql = "SELECT * FROM turnero WHERE Fecha_registro >= '$fechaSalida' && Nombre = '$Nombre'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Dependencia = $row['Dependencia'];
    if($Contador >= 1) {
        $Mensaje = '<p style="font-family:verdanab;color:#000000">'.$Nombre.' está en '.$Dependencia.'</p>';
        $confirmacion = 1;
    } else {
        $Mensaje = '';
        $confirmacion = 0;
        $Dependencia=$_POST["Dependencia"];
        $sql = "INSERT INTO turnero (Nombre, Dependencia, Valor, Fecha_registro) VALUES ('$Nombre','$Dependencia', 1, NOW())";
        $resultado = $mysqli->query($sql);
    }
    $json[] = array(
    'mensaje' => $Mensaje,
    'confirmacion' => $confirmacion
    );
    $jsonstring = json_encode($json);
     echo $jsonstring;

?>