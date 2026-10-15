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
    //ORDER BY id DESC
    $sql = "SELECT * FROM controles WHERE id_admin = '$id_admin' && Certificada !=''";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $certificada_crear_eliminar0 = $row['certificada_crear_eliminar'];
        $certificada_existe0 = $row['certificada_existe'];
        if (!$certificada_crear_eliminar0 ) {
            $certificada_crear_eliminar = 'centro_crear';
        } else {
            $certificada_crear_eliminar = $certificada_crear_eliminar0;
        }
        if (!$certificada_existe0 ) {
            $certificada_existe = '#666666';
        } else {
            $certificada_existe = $certificada_existe0;
        }
        $json[] = array(
            'id' => $row['id'],
            'Certificada' => $row['Certificada'],
            'certificada_existe' => $certificada_existe,
            'certificada_crear_eliminar' => $certificada_crear_eliminar
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>