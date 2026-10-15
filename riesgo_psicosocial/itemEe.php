<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['idEe'])) {
	$id = $_POST['idEe'];
    }
    $sql = "SELECT * FROM extralaboral WHERE id_usuario = '$id'";
       $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
          'Forma' => $row['Forma'],
          'Ee1' => $row['I1'],
          'Ee2' => $row['I2'],
          'Ee3' => $row['I3'],
          'Ee4' => $row['I4'],
          'Ee5' => $row['I5'],
          'Ee6' => $row['I6'],
          'Ee7' => $row['I7'],
          'Ee8' => $row['I8'],
          'Ee9' => $row['I9'],
          'Ee10' => $row['I10'],
          'Ee11' => $row['I11'],
          'Ee12' => $row['I12'],
          'Ee13' => $row['I13'],
          'Ee14' => $row['I14'],
          'Ee15' => $row['I15'],
          'Ee16' => $row['I16'],
          'Ee17' => $row['I17'],
          'Ee18' => $row['I18'],
          'Ee19' => $row['I19'],
          'Ee20' => $row['I20'],
          'Ee21' => $row['I21'],
          'Ee22' => $row['I22'],
          'Ee23' => $row['I23'],
          'Ee24' => $row['I24'],
          'Ee25' => $row['I25'],
          'Ee26' => $row['I26'],
          'Ee27' => $row['I27'],
          'Ee28' => $row['I28'],
          'Ee29' => $row['I29'],
          'Ee30' => $row['I30'],
          'Ee31' => $row['I31'],
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>