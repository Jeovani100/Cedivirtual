<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    if(isset($_POST['Certificada'])) {
       $Certificada =$_POST["Certificada"];
       $id_admin =$_POST["id_admin"];
       $sql = "INSERT INTO controles (id_admin, Certificada, certificada_existe, certificada_crear_eliminar, Fecha_registro)  VALUES ('$id_admin','$Certificada','#666666','certificada_crear', NOW())";
       $resultado2 = $mysqli->query($sql);
    }
    if(isset($_POST['Sede'])) {
       $Sede =$_POST["Sede"];
       $id_admin =$_POST["id_admin"];
       $sql = "INSERT INTO controles (id_admin, Sede, sede_existe, sede_crear_eliminar, Fecha_registro)  VALUES ('$id_admin','$Sede','#666666','sede_crear', NOW())";
       $resultado2 = $mysqli->query($sql);
    }
    if(isset($_POST['Area'])) {
       $Area =$_POST["Area"];
       $id_admin =$_POST["id_admin"];
       $sql = "INSERT INTO controles (id_admin, Area, area_existe, area_crear_eliminar, Fecha_registro)  VALUES ('$id_admin','$Area','#666666','area_crear', NOW())";
       $resultado2 = $mysqli->query($sql);
    }
    if(isset($_POST['Inicio0'])) {
        echo $source = $_POST["Inicio0"];
        $date = new DateTime($source);
        $Inicio =  $date->format('d/m/Y');
        $id_admin =$_POST["id_admin"];
        $sql = "DELETE FROM controles WHERE id_admin = $id_admin && Inicio0 = 1"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles (id_admin, Inicio, Inicio0, Fecha_registro)  VALUES ($id_admin,'$source' , 1,NOW())";
        $resultado2 = $mysqli->query($sql);
    }
    if(isset($_POST['Terminacion0'])) {
        $source2 = $_POST["Terminacion0"];
        $date2 = new DateTime($source2);
        $Terminacion  =  $date2->format('d/m/Y');
        $id_admin =$_POST["id_admin"];
        $sql = "DELETE FROM controles WHERE id_admin = $id_admin && Terminacion0 = 1"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles (id_admin, Terminacion, Terminacion0, Fecha_registro)  VALUES ($id_admin,'$source2', 1, NOW())";
        $resultado2 = $mysqli->query($sql);
    }
    if(isset($_POST['Email'])) {
        $Email = $_POST["Email"];
        $id_admin =$_POST["id_admin"];
        $sql = "DELETE FROM controles WHERE id_admin = $id_admin && (Email = 1 || Email = '0')"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles (id_admin,Email,Fecha_registro) VALUES ($id_admin,'$Email',NOW())";
        $resultado2 = $mysqli->query($sql);
    }
    if(isset($_POST['Whatsaap'])) {
        $Whatsaap = $_POST["Whatsaap"];
        $id_admin =$_POST["id_admin"];
        $sql = "DELETE FROM controles WHERE id_admin = $id_admin && (Whatsaap = 1 || Whatsaap = '0')"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles (id_admin,Whatsaap,Fecha_registro) VALUES ($id_admin,'$Whatsaap',NOW())";
        $resultado2 = $mysqli->query($sql);
    }
    if(isset($_POST['Diligenciados'])) {
        $Diligenciados = $_POST["Diligenciados"];
        $id_admin =$_POST["id_admin"];
        $sql = "DELETE FROM controles WHERE id_admin = $id_admin && (Diligenciados = 1 || Diligenciados = '0')"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles (id_admin,Diligenciados,Fecha_registro) VALUES ($id_admin,'$Diligenciados',NOW())";
        $resultado2 = $mysqli->query($sql);
    }
?> 




