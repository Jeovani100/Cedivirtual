<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id'])) {
	$id = $_POST['id'];
    }
    $sql = "SELECT * FROM datosg WHERE id = '$id'";
       $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
          'Codigo' => $row['Codigo'],
          'Extension' => $row['Extension'],
          'id3' => $row['id'],
          'Cedula' => $row['Cedula'],
          'Apellido1' => $row['Apellido1'],
          'Apellido2' => $row['Apellido2'],
          'Nombre' => $row['Nombre'],
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
          'Empresa' => $row['Empresa'],
          'Sede' => $row['Sede'],
          'Añose' => $row['Añose'],
          'Cargo' => $row['Cargo'],
          'Nivel' => $row['Nivel'],
          'Añosc' => $row['Añosc'],
          'Seccion' => $row['Area'],
          'Tipo' => $row['Tipo'],
          'Horas' => $row['Horas'],
          'Salario' => $row['Salario'],
          'Fecha_prueba' => $row['Fecha_prueba'],
          'MesIn' => $row['MesIn'],
          'InicioIn' => $row['InicioIn'],
          'TerminacionIn' => $row['TerminacionIn'],
          'DiasIn' => $row['DiasIn'],
          'ProrrogaIn' => $row['ProrrogaIn'],
          'TotalIn' => $row['TotalIn'],
          'CargadosIn' => $row['CargadosIn'],
          'CodigoIn' => $row['CodigoIn'],
          'DescripcionIn' => $row['DescripcionIn'],
          'ObservacionesIn' => $row['ObservacionesIn'],
          'Salariob' => $row['Salariob'],
          'Salariobd' => $row['Salariobd'],
          'Asegurados_AT' => $row['Asegurados_AT'],
          'Asegurados_AC_EG' => $row['Asegurados_AC_EG'],
          'Asumidos_AT' => $row['Asumidos_AT'],
          'Asumidos_AC_EG' => $row['Asumidos_AC_EG'],
          'Asumidos_EPS' => $row['Asumidos_EPS'],
          'Fecha' => $row['Fecha_registro'],
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>
