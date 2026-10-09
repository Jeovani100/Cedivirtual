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
        $id_admin =$_POST["id_admin"];
        $sql = "DELETE FROM controles_ausentismo WHERE id_admin = $id_admin && Inicio0 = 1"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles_ausentismo (id_admin, Inicio, Inicio0, Fecha_registro)  VALUES ($id_admin,'$source' , 1,NOW())";
        $resultado2 = $mysqli->query($sql);
    }
    if(isset($_POST['Terminacion0'])) {
        $source2 = $_POST["Terminacion0"];
        $date2 = new DateTime($source2);
        $Terminacion  =  $date2->format('d/m/Y');
        $id_admin =$_POST["id_admin"];
        $sql = "DELETE FROM controles_ausentismo WHERE id_admin = $id_admin && Terminacion0 = 1"; 
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO controles_ausentismo (id_admin, Terminacion, Terminacion0, Fecha_registro)  VALUES ($id_admin,'$source2', 1, NOW())";
        $resultado2 = $mysqli->query($sql);
    }
?> 