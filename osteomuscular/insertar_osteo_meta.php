<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    if(isset($_POST['val_meta'])) {
        $id_meta = $_POST['id_meta'];
        $val_meta = $_POST['val_meta'];
        $sql = "UPDATE indicadores_osteo SET Meta = '$val_meta' WHERE id = $id_meta";
        $result = $mysqli->query($sql);
    }
?>  