<?php
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
	$Codigo = $_POST['Codigo'];
    
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$Codigo' && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $date1 = new DateTime($Inicio0);
    $Inicio =  $date1->format('d-m-Y');
    
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$Codigo' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $date2 = new DateTime($Terminacion0);
    $Terminacion =  $date2->format('d-m-Y');
    
    $sql = "SELECT * FROM locomocion WHERE id_admin = '$Codigo' && (GES = 2 || GES = 3 || GES = 4) && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";
    $resultado = $mysqli->query($sql);
    $numeracion = 0;
    while($row = mysqli_fetch_array($resultado)) { 
        $numeracion++;
        $id = $row['id'];
        $Estado_ = $row['Estado'];
        $Caso_ = $row['Caso'];
        $GES = $row['GES'];
        $R_C = 'transparent';
        $Riesgo_C_ = $row['Riesgo'];

        if($Riesgo_C_ == 'Bajo') {
            $R_C = '#c3e29c';
        }
        if($Riesgo_C_ == 'Medio') {
            $R_C = '#ffff4d';
        }
        if($Riesgo_C_ == 'Alto') {
            $R_C = '#fab76b';
        }
        if($Riesgo_C_ == 'Crítico') {
            $R_C = '#fd6868';
        }
        /*if(($GES == 3 || $GES == 4) && $Caso_ != 3) {
            $Caso = 'Caso confirmado';
            $C_C = '#e7190b';
        }
        if($GES == 2 && $Caso_ != 3) {
            $Caso = 'Caso sintomático/ No confirmado';
            $C_C = '#ff7733';
        }
        if(($GES == 2 || $GES == 3 || $GES == 4) && $Caso_ == 3) {
            $Caso = 'No caso';
            $C_C = '#999999';
        }*/
        
        if($Caso_ == 1) {
            $Caso = 'Caso confirmado';
            $C_C = '#e7190b';
        }
        if($Caso_ == 2) {
            $Caso = 'Caso sintomático/ No confirmado';
            $C_C = '#ff7733';
        }
        if($Caso_ == 3) {
            $Caso = 'No caso';
            $C_C = '#005ce6';
        }

        /*if(($GES == 2 || $GES == 3 || $GES == 4) && $Estado_ == 1) {
            $Seguimiento = 'Activo en seguimiento';
            $S_C = '#ff7733';
        }
        if(($GES == 2 || $GES == 3 || $GES == 4) && $Estado_ == 2) {
            $Seguimiento = 'Activo sin seguimiento';
            $S_C = '#e7190b';
        }
        if(($GES == 2 || $GES == 3 || $GES == 4) && $Estado_ == 3) {
            $Seguimiento = 'Inactivo';
            $S_C = '#005ce6';
        }*/
        
        if($Estado_ == 1) {
            $Seguimiento = 'Activo en seguimiento';
            $S_C = '#ff7733';
        }
        if($Estado_ == 2) {
            $Seguimiento = 'Activo sin seguimiento';
            $S_C = '#e7190b';
        }
        if($Estado_ == 3) {
            $Seguimiento = 'Inactivo';
            $S_C = '#005ce6';
        }
       
        $json[] = array(
            'numeracion' => $numeracion,
            'id' => $row['id'],
            'Riesgo' => $row['Riesgo'],
            'GES' => $row['GES'],
            'Nombre' => $row['Nombre'],
            'Cedula' => $row['Cedula'],
            'Cargo' => $row['Cargo'],
            'Costo' => $row['Costo'],
            'Sede' => $row['Sede'],
            'R_C' => $R_C,
            'S_C' => $S_C,
            'C_C' => $C_C,
            'Caso' => $Caso,
            'Seguimiento' => $Seguimiento
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>