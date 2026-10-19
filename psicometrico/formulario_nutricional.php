<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    if(isset($_POST['Codigo'])) {
        $Codigo = $_POST['Codigo'];
        $Codigo2 = $_POST['Codigo2'];
        $Email = $_POST['Email'];
        $Nombre = $_POST['Nombre'];
        $Edad = $_POST['Edad'];
        $Empresa = $_POST['Empresa'];
        $sql = "INSERT INTO formulario_nutricional (id_admin,Codigo,Nombre,Cedula,Edad,Email,Empresa,Fecha_registro) VALUES ($Codigo,'$Codigo2','$Nombre','',$Edad,'$Email','$Empresa',NOW())";
        $resultado = $mysqli->query($sql);
    }
    for($i = 1; $i <= 10; $i++) {
        if(isset($_POST['P'.$i])) {
            $Item = $_POST['P'.$i];
            $Codigo = $_POST['Codigo2'];
            $stmt = $mysqli->prepare("UPDATE formulario_nutricional SET P".$i." = ? WHERE Codigo = ?");
            $stmt->bind_param("is", $Item, $Codigo);
            $stmt->execute();
        }
    }
    if(isset($_POST['P11'])) {
        $P11 = $_POST['P11'];
        $Codigo2 = $_POST['Codigo2'];
        $sql = "UPDATE formulario_nutricional SET P11 = $P11 WHERE Codigo = '$Codigo2'";
        $result = $mysqli->query($sql);
    }
    for($i = 1; $i <= 10; $i++) {
        if(isset($_POST['P_'.$i])) {
            $Item = $_POST['P_'.$i];
            $Codigo = $_POST['Codigo2'];
            $stmt = $mysqli->prepare("UPDATE formulario_nutricional SET P_".$i." = ? WHERE Codigo = ?");
            $stmt->bind_param("is", $Item, $Codigo);
            $stmt->execute();
        }
    }
    
    
    
    
    
?>    