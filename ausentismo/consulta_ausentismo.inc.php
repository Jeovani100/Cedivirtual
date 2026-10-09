<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
        if(isset($_POST['codigo'])) {
           $codigo =$_POST["codigo"];
        }   
        $sql = "SELECT * FROM controles_ausentismo WHERE Codigo = '$codigo'";
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
           'A2020' => $row['A2020'],
           'A2021' => $row['A2021'],
           'A2022' => $row['A2022'],
           'A2023' => $row['A2023'],
           'A2024' => $row['A2024']
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
        
?>