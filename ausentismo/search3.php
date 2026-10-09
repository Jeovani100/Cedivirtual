<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

$id_admin = $_POST['id_admin'];
$search = $_POST['search'];
if(!empty($search)) {
    //$sql = "SELECT * FROM reg_ausentismo WHERE ((Apellido1 LIKE '$search%') or (Apellido2 LIKE '$search%') or (Nombre LIKE '$search%') or (Cedula LIKE '$search%') or (Dias LIKE '$search%') or (Diagnostico LIKE '$search%')) and (id_admin ='$id_admin') and (Dias > 0)";
     $sql = "SELECT * FROM reg_ausentismo WHERE (Cedula LIKE '$search%' or Nombre LIKE '$search%') && id_admin2 ='$id_admin'";
    $resultado = $mysqli->query($sql);
    $json = array();
    while($row = mysqli_fetch_array($resultado)) {
        $Asegurados_AT = $row['Asegurados_AT'];
        $Asegurados_AC_EG = $row['Asegurados_AC_EG'];
        $Asumidos_AC_EG = $row['Asumidos_AC_EG'];
        $Asegurados_AFP = $row['Asegurados_AFP'];
        $Costo = $Asegurados_AT + $Asegurados_AC_EG + $Asumidos_AC_EG + $Asegurados_AFP;
        $json[] = array(
        'id' => $row['id'],
        'Cedula' => $row['Cedula'],
        'Apellido1' => $row['Apellido1'],
        'Apellido2' => $row['Apellido2'],
        'Nombre' => $row['Nombre'],
        'Inicio' => $row['Inicio'],
        'Mes' => $row['Mes'],
        'Codigo' => $row['Codigo'],
        'Tipo' => $row['Tipo'],
        'Cargo' => $row['Cargo'],
        'Total' => $row['Total'],
        'Diagnostico' => $row['Diagnostico'],
        'Costo' => number_format($Costo),
        'Fecha_registro' => $row['Fecha_registro']
        );
    }
    $jsonstring = json_encode($json);
     echo $jsonstring;
}
?>