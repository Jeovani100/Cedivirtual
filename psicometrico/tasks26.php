<?php    
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    //$sql = "SELECT * FROM reg_psicologica ORDER BY id DESC LIMIT 100";
    $sql = "SELECT * FROM reg_psicologica ORDER BY id DESC LIMIT 100";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
    $id = $row['id'];
    $Codigo = $row['Codigo'];
    $Nombre = $row['Nombre'];
    $Empresa = $row['Empresa'];
    $Cargo = $row['Cargo'];
    $Sede0 = $row['Sede'];
    if($Sede0 ==1) {
        $Sede = 'Medellín';
    } elseif ($Sede0 == 2) {
        $Sede = 'Apartadó';
    } elseif ($Sede0 == 2) {
        $Sede = 'Otras';
    }
    $Fecha_registro = $row['Fecha_registro'];
    $json[] = array(
        'id' => $id,
        'Sede' => $Sede,
        'Codigo' => $Codigo,
        'Nombre' => $Nombre,
        'Empresa' => $Empresa,
        'Cargo' => $Cargo,
        'Fecha_registro' => $Fecha_registro,
        );
    }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>