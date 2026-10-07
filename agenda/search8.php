<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

$search = $_POST['search'];
if(!empty($search)) {
    $sql = "SELECT * FROM reg_agenda WHERE Razon LIKE '$search%' ORDER BY Razon DESC";
    $resultado = $mysqli->query($sql);
    $json = array();
    while($row = mysqli_fetch_array($resultado)) {
          $Activo = $row['Activo'];
        if($Activo == 'S'){
            $color = '#e7744f';
        } else {
            $color = '#666666';
        }
         $Sector = $row["Sector"];
        if (empty($Sector) || $Sector == "NULL") {
            $Descripcion_sector = "Código no encontrado";
        } else {
            $Descripcion_sector = $Sector;
        }
        $json[] = array(
            'id' => $row['id'],
            'Usuario' => $row['Usuario'],
            'Razon' => $row['Razon'],
            'Sector' => $Descripcion_sector,
            'Nombre' => $row['Nombre'],
            'Email' => $row['Email'],
            'Clave' => $row['Clave'],
            'Codigo' => $row['Codigo'],
            'Color' => $color,
            'Activo' => $row['Activo'],
            'Fecha_registro' => $row['Fecha_registro']
    );}
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>