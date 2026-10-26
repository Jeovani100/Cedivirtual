<?php
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
	$Codigo = $_POST['Codigo'];

    // ===== FUNCIÓN: va AQUÍ, fuera del while =====
    function formatearAntiguedad($anios, $meses) {
        $anios = (int)($anios ?? 0);
        $meses = (int)($meses ?? 0);
        if ($anios === 0 && $meses === 0) {
            return '';
        }
        $partes = [];
        if ($anios > 0) {
            $partes[] = $anios . ' ' . ($anios === 1 ? 'año' : 'años');
        }
        if ($meses > 0) {
            $partes[] = $meses . ' ' . ($meses === 1 ? 'mes' : 'meses');
        }
        return implode(' y ', $partes);
    }
    // =============================================
    
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
    
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$Codigo' && (Diligenciados = 1 || Diligenciados = '0')";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Diligenciados = $row['Diligenciados'];
    
    if($Diligenciados == 1) {
        $sql = "SELECT * FROM locomocion WHERE id_admin = '$Codigo' && Fecha_registro >= '$Inicio0' && Fecha_registro <= '$Terminacion0' ORDER BY id DESC LIMIT 5000";
    } else {
        $sql = "SELECT * FROM locomocion WHERE id_admin = '$Codigo' && Fecha_registro >= '$Inicio0' && Fecha_registro <= '$Terminacion0' ORDER BY id DESC LIMIT 5000";
    }
    

    $resultado = $mysqli->query($sql);
    $numeracion = 0;
    while($row = mysqli_fetch_array($resultado)) { 
        $id = $row['id'];
        $numeracion++;
        $Notificacion0 = $row['Notificacion'];
        if($Notificacion0 == "#e7744f"){
            $Notificacion = "#e7744f";
        } elseif (($Notificacion0 == "#666666") || ($Notificacion0 == "")) {
            $Notificacion = "#666666";
        }
        
        $P8 = $row['P8'];
        $P9 = $row['P9'];
        $P10 = $row['P10'];
        $P11 = $row['P11'];
        $P12 = $row['P12'];
        $P13 = $row['P13'];
        $P14 = $row['P14'];
        $P15 = $row['P15'];
        $P16 = $row['P16'];
        $Riesgo_C_ = $row['Riesgo'];
        $Enviado = $row['Enviado'];
        
        $Riesgo1 = 'transparent';
        $Riesgo2 = 'transparent';
        $Riesgo3 = 'transparent';
        $Riesgo4 = 'transparent';
        $Riesgo5 = 'transparent';
        $Riesgo6 = 'transparent';
        $Riesgo7 = 'transparent';
        $Riesgo8 = 'transparent';
        $Riesgo9 = 'transparent';
        
        if($Enviado == 1) {
            $P6 = $row['P6'];
            $P7 = $row['P7'];
            $P8 = $row['P8'];
            $P9 = $row['P9'];
            $P10 = $row['P10'];
            $P11 = $row['P11'];
            $P12 = $row['P12'];
            $P13 = $row['P13'];
            $P14 = $row['P14'];
            $P15 = $row['P15'];
            $P16 = $row['P16'];
        } else {
            $P6 = '';
            $P7 = '';
            $P8 = '';
            $P9 = '';
            $P10 = '';
            $P11 = '';
            $P12 = '';
            $P13 = '';
            $P14 = '';
            $P15 = '';
            $P16 = '';
        }
        
        $Riesgo1 = "#ffffff";
        $Riesgo2 = "#ffffff";
        $Riesgo3 = "#ffffff";
        $Riesgo4 = "#ffffff";
        $Riesgo5 = "#ffffff";
        $Riesgo6 = "#ffffff";
        $Riesgo7 = "#ffffff";
        $Riesgo8 = "#ffffff";
        $Riesgo9 = "#ffffff";
        
        if($P8 <= 7 && $Enviado == 1){
            $Riesgo1 = '#c3e29c';
        } if($P8 >= 8 && $P8 <= 15) {
            $Riesgo1 = '#ffff4d';
        } if($P8 >= 16 && $P8 <= 20) {
            $Riesgo1 = '#fab76b';
        } if($P8 > 20) {
            $Riesgo1 = '#fd6868';
        }
        if($P9 <= 7 && $Enviado == 1){
            $Riesgo2 = '#c3e29c';
        } if($P9 >= 8 && $P9 <= 15) {
            $Riesgo2 = '#ffff4d';
        } if($P9 >= 16 && $P9 <= 20) {
            $Riesgo2 = '#fab76b';
        } if($P9 > 20) {
            $Riesgo2 = '#fd6868';
        }
        if($P10 <= 7 && $Enviado == 1){
            $Riesgo3 = '#c3e29c';
        } if($P10 >= 8 && $P10 <= 15) {
            $Riesgo3 = '#ffff4d';
        } if($P10 >= 16 && $P10 <= 20) {
            $Riesgo3 = '#fab76b';
        } if($P10 > 20) {
            $Riesgo3 = '#fd6868';
        }
        if($P11 <= 7 && $Enviado == 1){
            $Riesgo4 = '#c3e29c';
        } if($P11 >= 8 && $P11 <= 15) {
            $Riesgo4 = '#ffff4d';
        } if($P11 >= 16 && $P11 <= 20) {
            $Riesgo4 = '#fab76b';
        } if($P11 > 20) {
            $Riesgo4 = '#fd6868';
        }
        if($P12 <= 7 && $Enviado == 1){
            $Riesgo5 = '#c3e29c';
        } if($P12 >= 8 && $P12 <= 15) {
            $Riesgo5 = '#ffff4d';
        } if($P12 >= 16 && $P12 <= 20) {
            $Riesgo5 = '#fab76b';
        } if($P12 > 20) {
            $Riesgo5 = '#fd6868';
        }
        if($P13 <= 7 && $Enviado == 1){
            $Riesgo6 = '#c3e29c';
        } if($P13 >= 8 && $P13 <= 15) {
            $Riesgo6 = '#ffff4d';
        } if($P13 >= 16 && $P13 <= 20) {
            $Riesgo6 = '#fab76b';
        } if($P13 > 20) {
            $Riesgo6 = '#fd6868';
        }
        if($P14 <= 7 && $Enviado == 1){
            $Riesgo7 = '#c3e29c';
        } if($P14 >= 8 && $P14 <= 15) {
            $Riesgo7 = '#ffff4d';
        } if($P14 >= 16 && $P14 <= 20) {
            $Riesgo7 = '#fab76b';
        } if($P14 > 20) {
            $Riesgo7 = '#fd6868';
        }
        if($P15 <= 7 && $Enviado == 1){
            $Riesgo8 = '#c3e29c';
        } if($P15 >= 8 && $P15 <= 15) {
            $Riesgo8 = '#ffff4d';
        } if($P15 >= 16 && $P15 <= 20) {
            $Riesgo8 = '#fab76b';
        } if($P15 > 20) {
            $Riesgo8 = '#fd6868';
        }
        if($P16 <= 7 && $Enviado == 1){
            $Riesgo9 = '#c3e29c';
        } if($P16 >= 8 && $P16 <= 15) {
            $Riesgo9 = '#ffff4d';
        } if($P16 >= 16 && $P16 <= 20) {
            $Riesgo9 = '#fab76b';
        } if($P16 > 20) {
            $Riesgo9 = '#fd6868';
        }
        
        $R_C = '#ffffff';
        
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
        $Horas = $row['Horas'];
        if($Horas === null || $Horas === '' || $Horas === 'null') {
            $Horas = 0;
        }
        $json[] = array(
            'numeracion' => $numeracion,
            'id' => $row['id'],
            'Codigo' => $row['Codigo'],
            'GES' => $row['GES'],
            'Riesgo' => $row['Riesgo'],
            'Nombre' => $row['Nombre'],
            'Cedula' => $row['Cedula'],
            'Genero' => $row['Genero'],
            'Edad' => $row['Edad'],
            'Empresa' => $row['Empresa'],
            'Costo' => $row['Costo'],
            'Sede' => $row['Sede'],
            'Dominancia' => $row['Dominancia'],
            'Antiguedad_1' => formatearAntiguedad($row['Antiguedad_a'] ?? 0, $row['Antiguedad_m'] ?? 0),
            'Cargo' => $row['Cargo'],
            'Antiguedad_2' => formatearAntiguedad($row['Antiguedad2_a'] ?? 0, $row['Antiguedad2_m'] ?? 0),
            'Horas' => $Horas,
            'Postura' => $row['Postura'],
            'Email' => $row['Email'],
            'Celular' => $row['Celular'],
            'Notificacion' => $Notificacion,
            'P6' => $P6,
            'P7' => $P7,
            'P8' =>$P8,
            'P9' =>$P9,
            'P10' => $P10,
            'P11' => $P11,
            'P12' => $P12,
            'P13' => $P13,
            'P14' => $P14,
            'P15' => $P15,
            'P16' => $P16,
            'Riesgo1' => $Riesgo1,
            'Riesgo2' => $Riesgo2,
            'Riesgo3' => $Riesgo3,
            'Riesgo4' => $Riesgo4,
            'Riesgo5' => $Riesgo5,
            'Riesgo6' => $Riesgo6,
            'Riesgo7' => $Riesgo7,
            'Riesgo8' => $Riesgo8,
            'Riesgo9' => $Riesgo9,
            'R_C' => $R_C,
            'Fecha_registro' => date('d-m-Y', strtotime($row['Fecha_registro'])),
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>