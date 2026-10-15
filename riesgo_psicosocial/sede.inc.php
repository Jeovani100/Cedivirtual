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
    
    $sql = "SELECT * FROM controles WHERE id_admin = '$id_admin' && Sede !=''";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $sede_crear_eliminar0 = $row['sede_crear_eliminar'];
        $sede_existe0 = $row['sede_existe'];
        if (!$sede_crear_eliminar0 ) {
            $sede_crear_eliminar = 'sede_crear';
        } else {
            $sede_crear_eliminar = $sede_crear_eliminar0;
        }
        if (!$sede_existe0 ) {
            $sede_existe = '#666666';
        } else {
            $sede_existe = $sede_existe0;
        }
        $json[] = array(
            'id' => $row['id'],
            'Sede' => $row['Sede'],
            'sede_existe' => $sede_existe,
            'sede_crear_eliminar' => $sede_crear_eliminar
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>