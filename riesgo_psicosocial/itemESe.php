<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['idEse'])) {
	$id = $_POST['idEse'];
    }
    $sql = "SELECT * FROM estres WHERE id_usuario = '$id'";
       $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
          'Forma' => $row['Forma'],
          'Ese1' => $row['I1'],
          'Ese2' => $row['I2'],
          'Ese3' => $row['I3'],
          'Ese4' => $row['I4'],
          'Ese5' => $row['I5'],
          'Ese6' => $row['I6'],
          'Ese7' => $row['I7'],
          'Ese8' => $row['I8'],
          'Ese9' => $row['I9'],
          'Ese10' => $row['I10'],
          'Ese11' => $row['I11'],
          'Ese12' => $row['I12'],
          'Ese13' => $row['I13'],
          'Ese14' => $row['I14'],
          'Ese15' => $row['I15'],
          'Ese16' => $row['I16'],
          'Ese17' => $row['I17'],
          'Ese18' => $row['I18'],
          'Ese19' => $row['I19'],
          'Ese20' => $row['I20'],
          'Ese21' => $row['I21'],
          'Ese22' => $row['I22'],
          'Ese23' => $row['I23'],
          'Ese24' => $row['I24'],
          'Ese25' => $row['I25'],
          'Ese26' => $row['I26'],
          'Ese27' => $row['I27'],
          'Ese28' => $row['I28'],
          'Ese29' => $row['I29'],
          'Ese30' => $row['I30'],
          'Ese31' => $row['I31'],
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>