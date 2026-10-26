<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
	    
	$Codigo = $_POST['Codigo'];

    $sql = "SELECT * FROM meta_osteo WHERE Codigo = '$Codigo'";
    $resultado = $mysqli->query($sql);
    $json = array();
    while($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            'id' => $row['id'],
            'Codigo' => $row['Codigo'],
            'Enero' => $row['Enero'],
            'Febrero' => $row['Febrero'],
            'Marzo' => $row['Marzo'],
            'Abril' => $row['Abril'],
            'Mayo' => $row['Mayo'],
            'Junio' => $row['Junio'],
            'Julio' => $row['Julio'],
            'Agosto' => $row['Agosto'],
            'Septiembre' => $row['Septiembre'],
            'Octubre' => $row['Octubre'],
            'Noviembre' => $row['Noviembre'],
            'Diciembre' => $row['Diciembre'],
            
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>