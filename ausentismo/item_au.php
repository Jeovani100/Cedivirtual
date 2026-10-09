<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id_admin'])) {
	    $id_admin = $_POST['id_admin'];
	    $Year = $_POST['Year'];
	    $Centro = $_POST['Centro'];
    }
    $sql = "SELECT * FROM controles_ausentismo2 WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$Centro'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC); 
    $Anual_NNT0 = $row['Anual_NNT'];
    $Anual_NNT = round($Anual_NNT0, 0, PHP_ROUND_HALF_UP);
    $json[] = array(
        'enero_NNT' => $row['Enero_NNT'],
        'febrero_NNT' => $row['Febrero_NNT'],
        'marzo_NNT' => $row['Marzo_NNT'],
        'abril_NNT' => $row['Abril_NNT'],
        'mayo_NNT' => $row['Mayo_NNT'],
        'junio_NNT' => $row['Junio_NNT'],
        'julio_NNT' => $row['Julio_NNT'],
        'agosto_NNT' => $row['Agosto_NNT'],
        'septiembre_NNT' => $row['Septiembre_NNT'],
        'octubre_NNT' => $row['Octubre_NNT'],
        'noviembre_NNT' => $row['Noviembre_NNT'],
        'diciembre_NNT' => $row['Diciembre_NNT'],
        'anual_NNT' => $Anual_NNT,
        'enero_HE' => $row['Enero_HE'],
        'febrero_HE' => $row['Febrero_HE'],
        'marzo_HE' => $row['Marzo_HE'],
        'abril_HE' => $row['Abril_HE'],
        'mayo_HE' => $row['Mayo_HE'],
        'junio_HE' => $row['Junio_HE'],
        'julio_HE' => $row['Julio_HE'],
        'agosto_HE' => $row['Agosto_HE'],
        'septiembre_HE' => $row['Septiembre_HE'],
        'octubre_HE' => $row['Octubre_HE'],
        'noviembre_HE' => $row['Noviembre_HE'],
        'diciembre_HE' => $row['Diciembre_HE'],
        'anual_HE' => $row['Anual_HE'],
        'enero_HHTP' => $row['Enero_HHTP'],
        'febrero_HHTP' => $row['Febrero_HHTP'],
        'marzo_HHTP' => $row['Marzo_HHTP'],
        'abril_HHTP' => $row['Abril_HHTP'],
        'mayo_HHTP' => $row['Mayo_HHTP'],
        'junio_HHTP' => $row['Junio_HHTP'],
        'julio_HHTP' => $row['Julio_HHTP'],
        'agosto_HHTP' => $row['Agosto_HHTP'],
        'septiembre_HHTP' => $row['Septiembre_HHTP'],
        'octubre_HHTP' => $row['Octubre_HHTP'],
        'noviembre_HHTP' => $row['Noviembre_HHTP'],
        'diciembre_HHTP' => $row['Diciembre_HHTP'],
        'anual_HHTP' => $row['Anual_HHTP']
    );
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>