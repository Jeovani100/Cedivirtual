<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

$id_admin = $_POST['id_admin'];
$search = $_POST['search'];
if(!empty($search)) {
    $sql = "SELECT * FROM datosg WHERE ((Apellido1 LIKE '$search%') or (Apellido2 LIKE '$search%') or (Nombre LIKE '$search%') or (Cedula LIKE '$search%') or (Nivel LIKE '$search%')) and (Autor ='$id_admin')";
    $resultado = $mysqli->query($sql);
    $json = array();
    $numeracion = 0;
      while($row = mysqli_fetch_array($resultado)) {
          $numeracion++;
        $boton_delete0 = $row['boton_delete'];
        if (!$boton_delete0 ) {
            $boton_delete = 'task-delete';
        } else {
            $boton_delete = $boton_delete0;
        }
        $json[] = array(
         'id' => $row['id'],
         'Numeracion' => $numeracion,
        'Autor' => $row['Autor'],
        'Codigo' => $row['Codigo'],
        'Cedula' => $row['Cedula'],
        'Apellido1' => $row['Apellido1'],
        'Apellido2' => $row['Apellido2'],
        'Nombre' => $row['Nombre'],
        'Nivel' => $row['Nivel'],
        'Fecha_prueba' => $row['Fecha_prueba'],
        'Fecha_registro' => $row['Fecha_registro'],
        'IAB' => $row['IAB'],
        'R_0' => $row['R_0'],
        'C_0' => $row['C_0'],
        'Codigo' => $row['Codigo'],
        'Extension' => $row['Extension'],
        'boton_delete' => $boton_delete,
        'boton_send' => $row['boton_send']
        );
    }
    $jsonstring = json_encode($json);
     echo $jsonstring;
}
?>
