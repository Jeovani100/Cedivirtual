<?php    
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
    $sql = "SELECT * FROM formulario_stopbang ORDER BY id DESC LIMIT 100";
    $resultado = $mysqli->query($sql);
    
    while($row = mysqli_fetch_array($resultado)) {
        $id_admin = $row['id_admin'];
        $Item1 = $row['Item1'];
        $Item2 = $row['Item2'];
        $Item3 = $row['Item3'];
        $Item4 = $row['Item4'];
        $Item5 = $row['Item5'];
        $Item6 = $row['Item6'];
        $Item7 = $row['Item7'];
        $Item8 = $row['Item8'];
        $Items = $row['Items'];
        $Items_1 = $Item1 + $Item2 + $Item3 + $Item4;
        $Codigo = $row['Codigo'];
        $IMC = $row['IMC'];
        $Cuello = $row['Cuello'];
        if($Items <= 2) {
            $Value = 1;
        }
        if($Items >= 3 && $Items <= 4) {
            $Value = 2;
        }
        if($Items >= 5 && $Items <= 8) {
            $Value = 3;
        }
        if($Items_1 >= 2 && $Genero0 == 1) {
            $Value = 3;
        }
        if($Items_1 >= 2 && $Genero0 == 1) {
            $Value = 3;
        }
        if($Items_1 >= 2 && $Genero0 == 1) {
            $Value = 3;
        }
        if($Items_1 >= 2 && $IMC >= 35) {
            $Value = 3;
        }
        if($Items_1 >= 2 && (($Cuello >= 43 && $Genero0 == 1)||($Cuello >= 41 && $Genero0 == 2))) {
            $Value = 3;
        }
        
        $sql = "SELECT * FROM reg_psicologica WHERE Codigo = '$id_admin'";
        $resultado2 = $mysqli->query($sql);
        $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
        $Nombre = $row2['Nombre'];
        $Cedula = $row2['Cedula'];
        $Genero = $row2['Genero'];
        $Edad = $row2['Edad'];
        $Estado = $row2['Estado'];
        $Empresa = $row2['Empresa'];
        $Cargo = $row2['Cargo'];
        $Sede0 = $row2['Sede'];
        if($Sede0 == 1) {
            $Sede = 'Medellín';
        } elseif ($Sede0 == 2) {
            $Sede = 'Apartadó';
        } elseif ($Sede0 == 2) {
            $Sede = 'Otras';
        }
        $Fecha_registro = $row2['Fecha_registro'];
    
        $json[] = array(
            'id' => $id,
            'Sede' => $Sede,
            'Codigo' => $Codigo,
            'Nombre' => $Nombre,
            'Cedula' => $Cedula,
            'Edad' => $Edad,
            'Genero' => $Genero,
            'Edad' => $Edad,
            'Estado' => $Estado,
            'Empresa' => $Empresa,
            'Cargo' => $Cargo,
            'Fecha_registro' => $Fecha_registro,
            'Item1' => $Item1,
            'Item2' => $Item2,
            'Item3' => $Item3,
            'Item4' => $Item4,
            'Item5' => $Item5,
            'Item6' => $Item6,
            'Item7' => $Item7,
            'Item8' => $Item8,
            'Items' => $Items,
            'Value' => $Value,            
        );
    }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>