<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $sql = "SELECT * FROM reg_agenda ORDER BY Razon ASC";
    $resultado = $mysqli->query($sql);
    $json = array();
    while($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            'id' => $row['id'],
            'Razon' => $row['Razon']
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
