<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
	    
	$id_u = $_POST['id_u'];

    $sql = "SELECT * FROM auditivo WHERE id = '$id_u'";
    $resultado = $mysqli->query($sql);
    $json = array();
    while($row = mysqli_fetch_array($resultado)) {
        $Estado = $row['Estado'];
        $Caso = $row['Caso'];
        if($Estado == 0 || $Estado == 'NULL') {$Estado = 1;}
        if($Caso == 0 || $Caso == 'NULL') {$Caso = 1;}
        $json[] = array(
            'id' => $row['id'],
            'Caso' => $Caso,
            'Obs_caso' => $row['Obs_caso'],
            'Estado' => $Estado,
            'Obs_estado' => $row['Obs_estado'],
            'GES' => $row['GES'],
            'Paciente' => $row['Paciente'],
            'Cedula' => $row['Cedula'],
            'Cargo' => $row['Cargo'],
            'Edad' => $row['Edad'],
            'Genero' => $row['Genero'],
            'Escolaridad' => $row['Escolaridad'],
            'Empresacertificada' => $row['Empresa_certificada'],
            'Celular' => $row['Celular'],
            'Email' => $row['Email'],

        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>