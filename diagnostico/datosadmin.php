<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id'])) {
	$id = $_POST['id'];
    }
    $sql = "SELECT * FROM admin WHERE id = $id";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
          'id' => $row['id'],
          'Nit' => $row['Nit'],
          'Razon' => $row['Razon'],
          'Economica' => $row['Economica'],
          'Telefono' => $row['Telefono'],
          'Email' => $row['Email'],
          'Direccion' => $row['Direccion'],
          'Departamento' => $row['Departamento'],
          'Ciudad' => $row['Ciudad'],
          'Sede' => $row['Sede'],
          'PersonaC' => $row['PersonaC'],
          'TelefonoC' => $row['TelefonoC'],
          'Profesional' => $row['Profesional'],
          'Pregrado' => $row['Pregrado'],
          'Posgrado' => $row['Posgrado'],
          'Tarjeta' => $row['Tarjeta'],
          'Licencia' => $row['Licencia'],
          'Expedicion' => $row['Expedicion'],
          'Activo' => $row['Activo'],
          'Archivo1' => $row['Archivo1'],
          'Archivo2' => $row['Archivo2']
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>