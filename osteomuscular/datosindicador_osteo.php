<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id'])) {
	$id = $_POST['id'];
    }
    $sql = "SELECT * FROM indicadores_osteo WHERE id = '$id'";
       $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
          'id' => $row['id'],
          'Tipo' => $row['Tipo'],
          'Definicion' => $row['Definicion'],
          'Interpretacion' => $row['Interpretacion'],
          'Fuente' => $row['Fuente'],
          'Indicador' => $row['Indicador'],
          'Numerador' => $row['Numerador'],
          'Denominador' => $row['Denominador'],
          'Meta' => $row['Meta'],
          'Resultado' => $row['Resultado'],
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>