<?php    
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';

    $sql = "SELECT * FROM formulario_eysenck ORDER BY id DESC LIMIT 100";
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
        $Item9 = $row['Item9'];
        $Item10 = $row['Item10'];
        $Item11 = $row['Item11'];
        $Item12 = $row['Item12'];
        $Item13 = $row['Item13'];
        $Item14 = $row['Item14'];
        $Item15 = $row['Item15'];
        $Item16 = $row['Item16'];
        $Item17 = $row['Item17'];
        $Item18 = $row['Item18'];
        $Item19 = $row['Item19'];
        $Item20 = $row['Item20'];
        $Item21 = $row['Item21'];
        $Item22 = $row['Item22'];
        $Item23 = $row['Item23'];
        $Item24 = $row['Item24'];
        $Item25 = $row['Item25'];
        $Item26 = $row['Item26'];
        $Item27 = $row['Item27'];
        $Item28 = $row['Item28'];
        $Item29 = $row['Item29'];
        $Item30 = $row['Item30'];
        $Item31 = $row['Item31'];
        $Item32 = $row['Item32'];
        $Item33 = $row['Item33'];
        $Item34 = $row['Item34'];
        $Item35 = $row['Item35'];
        $Item36 = $row['Item36'];
        $Item37 = $row['Item37'];
        $Item38 = $row['Item38'];
        $Item39 = $row['Item39'];
        $Item40 = $row['Item40'];
        $Item41 = $row['Item41'];
        $Item42 = $row['Item42'];
        $Item43 = $row['Item43'];
        $Item44 = $row['Item44'];
        $Item45 = $row['Item45'];
        $Item46 = $row['Item46'];
        $Item47 = $row['Item47'];
        $Item48 = $row['Item48'];
        $Item49 = $row['Item49'];
        $Item50 = $row['Item50'];
        $Item51 = $row['Item51'];
        $Item52 = $row['Item52'];
        $Item53 = $row['Item53'];
        $Item54 = $row['Item54'];
        $Item55 = $row['Item55'];
        $Item56 = $row['Item56'];
        $Item57 = $row['Item57'];
        $Codigo = $row['Codigo'];
      
        $Items = $Item1 + $Item2 + $Item3 + $Item4 + $Item5 + $Item6 + $Item7 + $Item8 + $Item9 + $Item10 + $Item11 + $Item12 + $Item13 + $Item14 + $Item15 + $Item16 + $Item17 + $Item18 + $Item19 + $Item20 + $Item21 + $Item22 + $Item23 + $Item24 + $Item25 + $Item26 + $Item27 + $Item28 + $Item29 + $Item30 + $Item31 + $Item32 + $Item33 + $Item34 + $Item35 + $Item36 + $Item37 + $Item38 + $Item39 + $Item40;
        
        $E = '0';
        $N = '0';
        $V = '0';
        $E = $Item1 + $Item3 + $Item5 + $Item8 + $Item10 + $Item13 + $Item15 + $Item17 + $Item20 + $Item22 + $Item25 + $Item27 + $Item29 + $Item32 + $Item34 + $Item37 + $Item39 + $Item41 + $Item44 + $Item46 + $Item49 + $Item51 + $Item53 + $Item56;
        $N = $Item2 + $Item4 + $Item7 + $Item9 + $Item11 + $Item14 + $Item16 + $Item19 + $Item21 + $Item23 + $Item26 + $Item28 + $Item31 + $Item33 + $Item35 + $Item38 + $Item40 + $Item43 + $Item45 + $Item47 + $Item50 + $Item52 + $Item55 + $Item57;
        $Veracidad = $Item6 + $Item12 + $Item18 + $Item24 + $Item30 + $Item36 + $Item42 + $Item48 + $Item54;    
            
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
        'Empresa' => $Empresa,
        'Cargo' => $Cargo,
        'Fecha_registro' => $Fecha_registro,
        
        'Item1' => $row['Item1'],
        'Item2' => $row['Item2'],
        'Item3' => $row['Item3'],
        'Item4' => $row['Item4'],
        'Item5' => $row['Item5'],
        'Item6' => $row['Item6'],
        'Item7' => $row['Item7'],
        'Item8' => $row['Item8'],
        'Item9' => $row['Item9'],
        'Item10' => $row['Item10'],
        'Item11' => $row['Item11'],
        'Item12' => $row['Item12'],
        'Item13' => $row['Item13'],
        'Item14' => $row['Item14'],
        'Item15' => $row['Item15'],
        'Item16' => $row['Item16'],
        'Item17' => $row['Item17'],
        'Item18' => $row['Item18'],
        'Item19' => $row['Item19'],
        'Item20' => $row['Item20'],
        'Item21' => $row['Item21'],
        'Item22' => $row['Item22'],
        'Item23' => $row['Item23'],
        'Item24' => $row['Item24'],
        'Item25' => $row['Item25'],
        'Item26' => $row['Item26'],
        'Item27' => $row['Item27'],
        'Item28' => $row['Item28'],
        'Item29' => $row['Item29'],
        'Item30' => $row['Item30'],
        'Item31' => $row['Item31'],
        'Item32' => $row['Item32'],
        'Item33' => $row['Item33'],
        'Item34' => $row['Item34'],
        'Item35' => $row['Item35'],
        'Item36' => $row['Item36'],
        'Item37' => $row['Item37'],
        'Item38' => $row['Item38'],
        'Item39' => $row['Item39'],
        'Item40' => $row['Item40'],
        'Item41' => $row['Item41'],
        'Item42' => $row['Item42'],
        'Item43' => $row['Item43'],
        'Item44' => $row['Item44'],
        'Item45' => $row['Item45'],
        'Item46' => $row['Item46'],
        'Item47' => $row['Item47'],
        'Item48' => $row['Item48'],
        'Item49' => $row['Item49'],
        'Item50' => $row['Item50'],
        'Item51' => $row['Item51'],
        'Item52' => $row['Item52'],
        'Item53' => $row['Item53'],
        'Item54' => $row['Item54'],
        'Item55' => $row['Item55'],
        'Item56' => $row['Item56'],
        'Item57' => $row['Item57'],
        'ejex' => $E,
        'ejey' => $N,
        'Veracidad' => $Veracidad,
        
        );
    }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>