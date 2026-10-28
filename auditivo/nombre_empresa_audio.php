<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $id_admin = $_POST['id_admin'];
    $sql = "SELECT DISTINCT Empresa_certificada FROM auditivo WHERE id_admin = '$id_admin'";
    $resultado = $mysqli->query($sql);
    $json = array();
    $hoy = getdate();  
    while($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            'Centro' => $row['Empresa_certificada'],
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>