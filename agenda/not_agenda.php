<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8");     
    
    if(isset($_POST['agenda_titulo'])) {
        $agenda_titulo =$_POST["agenda_titulo"];
        $sql = "UPDATE not_agenda SET Titulo = '$agenda_titulo' WHERE id = 1";
        $resultado = $mysqli->query($sql);
    }
    
    if(isset($_POST['notificaciones'])) {
        $Notificacion =$_POST["notificaciones"];
        $sql = "UPDATE not_agenda SET Notificacion = '$Notificacion' WHERE id = 1";
        $resultado = $mysqli->query($sql);
    }
?>

