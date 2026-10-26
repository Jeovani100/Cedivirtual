<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';

	$id = $_POST['id'];
	
	$sql = "SELECT * FROM locomocion WHERE id = $id";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);

        $json[] = array(
            'id' => $row['id'],
            'Codigo' => $row['Codigo'],
            'Nombre' => $row['Nombre'],
            'Cedula' => $row['Cedula'],
            'Genero' => $row['Genero'],
            'Edad' => $row['Edad'],
            'Empresa' => $row['Empresa'],
            'Costo' => $row['Costo'],
            'Sede' => $row['Sede'],
            'Cargo' => $row['Cargo'],
            'Horas' => $row['Horas'],
            'Posturas' => $row['Posturas'],
            'Email' => $row['Email'],
            'Celular' => $row['Celular'],
            'Ciudad' => $row['Ciudad']
        );

    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>