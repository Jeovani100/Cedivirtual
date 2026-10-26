<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    if(isset($_POST['Inicio0'])) {
        $source = $_POST["Inicio0"];
        $date = new DateTime($source);
        $Inicio =  $date->format('d/m/Y');
        $Codigo =$_POST["Codigo"];
        $sql = "DELETE FROM controles_osteo WHERE id_admin = '$Codigo' && Inicio0 = 1"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles_osteo (id_admin,Inicio,Inicio0,Fecha_registro) VALUES ('$Codigo','$source',1,NOW())";
        $resultado2 = $mysqli->query($sql);
    }
    if(isset($_POST['Terminacion0'])) {
        $source2 = $_POST["Terminacion0"];
        $date2 = new DateTime($source2);
        $Terminacion  =  $date2->format('d/m/Y');
        $Codigo =$_POST["Codigo"];
        $sql = "DELETE FROM controles_osteo WHERE id_admin = '$Codigo' && Terminacion0 = 1"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles_osteo (id_admin,Terminacion,Terminacion0,Fecha_registro) VALUES ('$Codigo','$source2',1,NOW())";
        $resultado2 = $mysqli->query($sql);
    }
     if(isset($_POST['Email'])) {
        $Email = $_POST["Email"];
        $id_admin =$_POST["id_admin"];
        $sql = "DELETE FROM controles_osteo WHERE id_admin = '$id_admin' && (Email = 1 || Email = '0')"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles_osteo (id_admin,Email,Fecha_registro) VALUES ('$id_admin','$Email',NOW())";
        $resultado2 = $mysqli->query($sql);
    }
    if(isset($_POST['Whatsaap'])) {
        $Whatsaap = $_POST["Whatsaap"];
        $id_admin =$_POST["id_admin"];
        $sql = "DELETE FROM controles_osteo WHERE id_admin = '$id_admin' && (Whatsaap = 1 || Whatsaap = '0')"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles_osteo (id_admin,Whatsaap,Fecha_registro) VALUES ('$id_admin','$Whatsaap',NOW())";
        $resultado2 = $mysqli->query($sql);
    }
    if(isset($_POST['Diligenciados'])) {
        $Diligenciados = $_POST["Diligenciados"];
        $id_admin =$_POST["id_admin"];
        $sql = "DELETE FROM controles_osteo WHERE id_admin = '$id_admin' && (Diligenciados = 1 || Diligenciados = '0')"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles_osteo (id_admin,Diligenciados,Fecha_registro) VALUES ('$id_admin','$Diligenciados',NOW())";
        $resultado2 = $mysqli->query($sql);
    }
 
?> 