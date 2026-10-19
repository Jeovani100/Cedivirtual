<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion5.inc.php';
    include_once 'app/redireccion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    /*function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
        };
    $Codigo= generarCodigo(6);*/
    
    $Codigo = $_POST['Codigo'];
    $Tipo=$_POST['Tipo'];
    $Cedula=$_POST['Cedula'];
    $Nombre=$_POST['Nombre'];
    $Edad=$_POST['Edad'];
    $Genero=$_POST['Genero'];
    $Estado=$_POST['Estado'];
    $Empresa=$_POST['Empresa'];
    $Sede=$_POST['Sede'];
    $Cargo=$_POST['Cargo'];
    
    $sql = "SELECT * FROM reg_psicologica WHERE Cedula = '$Cedula'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    
    $sql = "SELECT COUNT(*) as total FROM reg_psicologica WHERE Cedula = '$Cedula'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $Cantidad_ = $sentencia->fetch();
    $Cantidad = $Cantidad_['total'];
    
    if($Cantidad == 1) {
        $sql = "UPDATE reg_psicologica SET  Codigo = '$Codigo', Tipo = '$Tipo', Nombre = '$Nombre', Edad = $Edad, Genero = $Genero, Estado = '$Estado', Empresa = '$Empresa', Sede = '$Sede', Cargo = '$Cargo' WHERE Cedula = $Cedula";
        $result = $mysqli->query($sql);
        $confirmacion = 1;
    } else {
        $sql = "INSERT INTO reg_psicologica (Codigo, Tipo, Cedula, Nombre, Edad, Genero, Estado, Empresa, Sede, Cargo, Fecha_registro) VALUES ('$Codigo','$Tipo', '$Cedula', '$Nombre', $Edad, $Genero, '$Estado', '$Empresa', $Sede,'$Cargo', NOW())";
        $resultado = $mysqli->query($sql);
        $confirmacion = 0;
    }

    $json[] = array(
    'Codigo' => $Codigo,
    'confirmacion' => $confirmacion
);
$jsonstring = json_encode($json);
 echo $jsonstring;
 ?>
