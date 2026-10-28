<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['Codigo'])) {
	    $Codigo = $_POST['Codigo'];
    }
    $sql = "SELECT * FROM grupoges WHERE id_admin = '$Codigo'";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $Grupo0 =$row['Grupo'];
        $Grupo =$Grupo0;
        switch ($Grupo0) {
            case 'Grupo 1':
                $Grupo = '1';
                break;
            case 'Grupo 2':
                $Grupo = '2';
                break;
            case 'Grupo 3':
                $Grupo = '3';
                break;
            case 'Grupo 4':
                $Grupo = '4';
                break;    
        }
        $json[] = array(
            'id' => $row['id'],
            'Grupo' => $Grupo
        );
    }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>