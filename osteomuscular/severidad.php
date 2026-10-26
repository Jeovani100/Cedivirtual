<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
    }
    $sql = "SELECT DISTINCT Empresa_certificada FROM auditivo WHERE id_admin = '$id_admin'";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        /*$sede_crear_eliminar0 = $row['sede_crear_eliminar'];
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
        }*/
        $Empresa_certificada = $row['Empresa_certificada'];
        $json[] = array(
            'certificada' => $Empresa_certificada

        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>