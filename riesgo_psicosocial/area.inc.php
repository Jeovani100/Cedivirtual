<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
    }
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $date1 = new DateTime($Inicio0);
    $Inicio =  $date1->format('d-m-Y');
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $date2 = new DateTime($Terminacion0);
    $Terminacion =  $date2->format('d-m-Y');
    $sql = "SELECT * FROM controles WHERE id_admin = '$id_admin' && Area !='' && Fecha_registro >= '$Inicio0'";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $area_crear_eliminar0 = $row['area_crear_eliminar'];
        $area_existe0 = $row['area_existe'];
        if (!$area_crear_eliminar0 ) {
            $area_crear_eliminar = 'area_crear';
        } else {
            $area_crear_eliminar = $area_crear_eliminar0;
        }
        if (!$area_existe0 ) {
            $area_existe = '#666666';
        } else {
            $area_existe = $area_existe0;
        }
        $json[] = array(
            'id' => $row['id'],
            'Area' => $row['Area'],
            'area_existe' => $area_existe,
            'area_crear_eliminar' => $area_crear_eliminar
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>