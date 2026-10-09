<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id'])) {
	$id = $_POST['id'];
    }
    $sql = "SELECT * FROM reg_ausentismo WHERE id = '$id'";
       $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
          'id' => $row['id'],
          'Cedula' => $row['Cedula'],
          'Nombre' => $row['Nombre'],
          'Apellido1' => $row['Apellido1'],
          'Apellido2' => $row['Apellido2'],
          'Cargo' => $row['Cargo'],
          'Seccion' => $row['Seccion'],
          'Contrato' => $row['Contrato'],
          'Centro' => $row['Centro'],
          'Mes' => $row['Mes'],
          'Tipo' => $row['Tipo'],
          'Inicio' => $row['Inicio'],
          'Terminacion' => $row['Terminacion'],
          'Dias' => $row['Dias'],
          'Prorroga' => $row['Prorroga'],
          'Total' => $row['Total'],
          'Cargados' => $row['Cargados'],
          'Codigo' => $row['Codigo'],
          'Diagnostico' => $row['Diagnostico'],
          'Salario' => $row['Salario'],
          'Asegurados_AT' => $row['Asegurados_AT'],
          'Asegurados_AC_EG' => $row['Asegurados_AC_EG'],
          'Asegurados_AFP' => $row['Asegurados_AFP'],
          'Asumidos_AC_EG' => $row['Asumidos_AC_EG'],
          'Asumidos_E' => $row['Asumidos_E'],
          'Fecha' => $row['Fecha_registro'],
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>