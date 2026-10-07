<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $sql = "SELECT * FROM controles_agenda WHERE id = 1";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $json[] = array(
           'enero' => $row['Enero'],
           'febrero' => $row['Febrero'],
           'marzo' => $row['Marzo'],
           'abril' => $row['Abril'],
           'mayo' => $row['Mayo'],
           'junio' => $row['Junio'],
           'julio' => $row['Julio'],
           'agosto' => $row['Agosto'],
           'septiembre' => $row['Septiembre'],
           'octubre' => $row['Octubre'],
           'noviembre' => $row['Noviembre'],
           'diciembre' => $row['Diciembre'],
           'N1' => $row['N1'],
           'N2' => $row['N2'],
           'N3' => $row['N3'],
           'N4' => $row['N4'],
           'N5' => $row['N5'],
           'N6' => $row['N6'],
           'N7' => $row['N7'],
           'N8' => $row['N8'],
           'N9' => $row['N9'],
           'N10' => $row['N10'],
           'N11' => $row['N11'],
           'N12' => $row['N12'],
           'N13' => $row['N13'],
           'N14' => $row['N14'],
           'N15' => $row['N15'],
           'N16' => $row['N16'],
           'N17' => $row['N17'],
           'N18' => $row['N18'],
           'N19' => $row['N19'],
           'N20' => $row['N20'],
           'N21' => $row['N21'],
           'N22' => $row['N22'],
           'N23' => $row['N23'],
           'N24' => $row['N24'],
           'N25' => $row['N25'],
           'N26' => $row['N26'],
           'N27' => $row['N27'],
           'N28' => $row['N28'],
           'N29' => $row['N29'],
           'N30' => $row['N30'],
           'N31' => $row['N31'],
           'A2021' => $row['A2021'],
           'A2022' => $row['A2022'],
           'A2023' => $row['A2023'],
           'A2024' => $row['A2024'],
           'A2025' => $row['A2025'],
           'A2026' => $row['A2026'],
           'A2027' => $row['A2027'],
           'A2028' => $row['A2028'],
           'Aliados' => $row['Aliados'],
           'Vistos' => $row['Vistos']
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>