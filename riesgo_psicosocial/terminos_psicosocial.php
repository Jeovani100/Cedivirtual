<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8");     
 
    if(isset($_POST['id'])) {
       $id=$_POST["id"];
       $valor=$_POST["valor"];
       $sql = "UPDATE datosg SET  Consentimiento = '$valor' WHERE id = '$id'";
       $resultado = $mysqli->query($sql);
    }
?>