<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id'])) {
	$id = $_POST['id'];
    }
    $sql = "SELECT * FROM datosg WHERE id = $id";
       $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
          'id2' => $row['id'],
          'Cedula' => $row['Cedula'],
          'Nombre' => $row['Nombre'],
          'Apellido1' => $row['Apellido1'],
          'Apellido2' => $row['Apellido2'],
          'Genero' => $row['Genero'],
          'Nacimiento' => $row['Nacimiento'],
          'Anon' => $row['Anon'],
          'Edad' => $row['Edad'],
          'Civil' => $row['Civil'],
          'Escolaridad' => $row['Escolaridad'],
          'Ocupacion' => $row['Ocupacion'],
          'Departamentor' => $row['Departamentor'],
          'Municipior' => $row['Municipior'],
          'Estrato' => $row['Estrato'],
          'Vivienda' => $row['Vivienda'],
          'Dependencia' => $row['Dependencia'],
          'Departamentot' => $row['Departamentot'],
          'Municipiot' => $row['Municipiot'],
          'Añose' => $row['Añose'],
          'Cargo' => $row['Cargo'],
          'Nivel' => $row['Nivel'],
          'Añosc' => $row['Añosc'],
          'Tipo' => $row['Tipo'],
          'Horas' => $row['Horas'],
          'Salario' => $row['Salario'],
          'Fecha_prueba' => $row['Fecha_prueba'],
          'Email' => $row['Email'],
          'Celular' => $row['Celular'],
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>