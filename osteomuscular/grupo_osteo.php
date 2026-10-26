<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    $Codigo=$_POST["Codigo"];
    $Grupo =$_POST['Grupo'];
    $Descripcion =$_POST['Descripcion'];
    $Individual =$_POST['Individual'];
    $Ambiental =$_POST['Ambiental'];
    $Periodicidad =$_POST['Periodicidad'];
    $Cantidad =$_POST['Cantidad'];
    $Inspecciones =$_POST['Inspecciones'];

    $sql = "INSERT INTO grupoges_osteo (id_admin, Grupo, Descripcion, Individual, Ambiental, Periodicidad, Cantidad, Inspecciones, Fecha_registro) VALUES ('$Codigo','$Grupo', '$Descripcion', '$Individual', '$Ambiental', '$Periodicidad', '$Cantidad', '$Inspecciones', NOW())";
    $resultado = $mysqli->query($sql);
?>