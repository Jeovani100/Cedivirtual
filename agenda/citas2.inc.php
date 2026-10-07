<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $dia = date('d');
    $mes = date('m');
    $year = date('Y');
    $fecha = $year.'-'.$mes.'-'.$dia;
    $sql = "SELECT * FROM agenda WHERE Fecha = '$fecha' ORDER BY id DESC";
    $resultado = $mysqli->query($sql);
    $json = array();
    while($row = mysqli_fetch_array($resultado)) {
        $Tipo0 = $row['Tipo'];
        if ($Tipo0 == 'Cédula de ciudadanía') {
            $Tipo = 'C.C.';
        } else {
            $Tipo = 'C.E.';
        }
        $json[] = array(
            'id' => $row['id'],
            'Ips' => $row['Ips'],
            'Tipo' => $Tipo,
            'Cedula' => $row['Documento'],
            'Nombre' => $row['Nombre'],
            'Apellidos' => $row['Apellidos'],
            'Cargo' => $row['Cargo'],
            'Especifico' => $row['Especifico'],
            'Fecha' => $row['Fecha'],
            'Observaciones' => $row['Observaciones'],
            'Empresa' => $row['Empresa'],
            'Fecha_registro' => $row['Fecha_registro']
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>