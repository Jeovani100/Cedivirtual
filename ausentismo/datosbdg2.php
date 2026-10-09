<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id'])) {
	$id = $_POST['id'];
    }
    $sql = "SELECT * FROM reg_ausentismo WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $Inicio0 = $row['Inicio'];
        $date0 = new DateTime($Inicio0);
        $Inicio =  $date0->format('Y-m-d');
        
        $Terminacion0 = $row['Terminacion'];
        $date1 = new DateTime($Terminacion0);
        $Terminacion =  $date1->format('Y-m-d');
        $json[] = array(
          'id' => $row['id'],
          'Cedula' => $row['Cedula'],
          'Nombre' => $row['Nombre'],
          'Apellido1' => $row['Apellido1'],
          'Apellido2' => $row['Apellido2'],
          'Cargo' => $row['Cargo'],
          'Seccion' => $row['Seccion'],
          'Mes' => $row['Mes'],
          'Tipo' => $row['Tipo'],
          'Inicio' => $Inicio,
          'Terminacion' => $Terminacion,
          'Dias' => $row['Dias'],
          'Prorroga' => $row['Prorroga'],
          'Cargados' => $row['Cargados'],
          'Codigo' => $row['Codigo'],
          'Diagnostico' => $row['Diagnostico'],
          'Salario' => $row['Salario'],
          'Asegurados_AT' => $row['Asegurados_AT'],
          'Asegurados_AC_EG' => $row['Asegurados_AC_EG'],
          'Asumidos_AC_EG' => $row['Asumidos_AC_EG'],
          'Asegurados_AFP' => $row['Asegurados_AFP'],
          'Fecha_registro' => $row['Fecha_registro'],
          'Contrato' => $row['Contrato'],
          'Centro' => $row['Centro'],
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>