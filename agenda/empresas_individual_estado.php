<?php
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8");  
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    if(isset($_POST['id_estado'])) {
        $id=$_POST["id_estado"];
        $sql = "SELECT * FROM reg_agenda WHERE id = '$id'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $Activo = $row['Activo'];
        if($Activo == 'S') {
            $Estado = 'N';
        } else {
            $Estado = 'S';
        }
        $sql = "UPDATE reg_agenda SET Activo = '$Estado' WHERE id = '$id'";
        $resultado = $mysqli->query($sql);
    }
?>    