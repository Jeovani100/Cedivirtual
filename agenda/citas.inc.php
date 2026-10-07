<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $filas = $_POST['filas'];
    $sql = "SELECT * FROM controles_agenda";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Enero0 = $row['Enero'];
    $Febrero0 = $row['Febrero'];
    $Marzo0 = $row['Marzo'];
    $Abril0 = $row['Abril'];
    $Mayo0 = $row['Mayo'];
    $Junio0 = $row['Junio'];
    $Julio0 = $row['Julio'];
    $Agosto0 = $row['Agosto'];
    $Septiembre0 = $row['Septiembre'];
    $Octubre0 = $row['Octubre'];
    $Noviembre0 = $row['Noviembre'];
    $Diciembre0 = $row['Diciembre'];
    $N1_0 = $row['N1'];
    $N2_0 = $row['N2'];
    $N3_0 = $row['N3'];
    $N4_0 = $row['N4'];
    $N5_0 = $row['N5'];
    $N6_0 = $row['N6'];
    $N7_0 = $row['N7'];
    $N8_0 = $row['N8'];
    $N9_0 = $row['N9'];
    $N10_0 = $row['N10'];
    $N11_0 = $row['N11'];
    $N12_0 = $row['N12'];
    $N13_0 = $row['N13'];
    $N14_0 = $row['N14'];
    $N15_0 = $row['N15'];
    $N16_0 = $row['N16'];
    $N17_0 = $row['N17'];
    $N18_0 = $row['N18'];
    $N19_0 = $row['N19'];
    $N20_0 = $row['N20'];
    $N21_0 = $row['N21'];
    $N22_0 = $row['N22'];
    $N23_0 = $row['N23'];
    $N24_0 = $row['N24'];
    $N25_0 = $row['N25'];
    $N26_0 = $row['N26'];
    $N27_0 = $row['N27'];
    $N28_0 = $row['N28'];
    $N29_0 = $row['N29'];
    $N30_0 = $row['N30'];
    $N31_0 = $row['N31'];
    $A2021_0 = $row['A2021'];
    $A2022_0 = $row['A2022'];
    $A2023_0 = $row['A2023'];
    $A2024_0 = $row['A2024'];
    $A2025_0 = $row['A2025'];
    $A2026_0 = $row['A2026'];
    $A2027_0 = $row['A2027'];
    $A2028_0 = $row['A2028'];
    if ($Enero0 == 1) {
        $Enero = 1;
    }
    if ($Febrero0 == 1) {
        $Febrero = 2;
    }
    if ($Marzo0 == 1) {
        $Marzo = 3;
    } 
    if ($Abril0 == 1) {
        $Abril = 4;
    } 
    if ($Mayo0 == 1) {
        $Mayo = 5;
    } 
    if ($Junio0 == 1) {
        $Junio = 6;
    } 
    if ($Julio0 == 1) {
        $Julio = 7;
    }
    if ($Agosto0 == 1) {
        $Agosto = 8;
    }
    if ($Septiembre0 == 1) {
        $Septiembre = 9;
    }
    if ($Octubre0 == 1) {
        $Octubre = 10;
    }
    if ($Noviembre0 == 1) {
        $Noviembre = 11;
    }
    if ($Diciembre0 == 1) {
        $Diciembre = 12;
    } 
    if ($N1_0 == 1) {
        $N1 = 1;
    } 
    if ($N2_0 == 1) {
        $N2 = 2;
    } 
    if ($N3_0 == 1) {
        $N3 = 3;
    } 
    if ($N4_0 == 1) {
        $N4 = 4;
    } 
    if ($N5_0 == 1) {
        $N5 = 5;
    } 
    if ($N6_0 == 1) {
        $N6 = 6;
    }
    if ($N7_0 == 1) {
        $N7 = 7;
    }
    if ($N8_0 == 1) {
        $N8 = 8;
    }
    if ($N9_0 == 1) {
        $N9 = 9;
    }
    if ($N10_0 == 1) {
        $N10 = 10;
    }
    if ($N11_0 == 1) {
        $N11 = 11;
    }
    if ($N12_0 == 1) {
        $N12 = 12;
    }
    if ($N13_0 == 1) {
        $N13 = 13;
    }
    if ($N14_0 == 1) {
        $N14 = 14;
    }
    if ($N15_0 == 1) {
        $N15 = 15;
    }
    if ($N16_0 == 1) {
        $N16 = 16;
    }
    if ($N17_0 == 1) {
        $N17 = 17;
    }
    if ($N18_0 == 1) {
        $N18 = 18;
    }
    if ($N19_0 == 1) {
        $N19 = 19;
    }
    if ($N20_0 == 1) {
        $N20 = 20;
    }
    if ($N21_0 == 1) {
        $N21 = 21;
    }
    if ($N22_0 == 1) {
        $N22 = 22;
    }
    if ($N23_0 == 1) {
        $N23 = 23;
    }
    if ($N24_0 == 1) {
        $N24 = 24;
    }
    if ($N25_0 == 1) {
        $N25 = 25;
    }
     if ($N26_0 == 1) {
        $N26 = 26;
    }
     if ($N27_0 == 1) {
        $N27 = 27;
    }
     if ($N28_0 == 1) {
        $N28 = 28;
    }
     if ($N29_0 == 1) {
        $N29 = 29;
    }
     if ($N30_0 == 1) {
        $N30 = 30;
    }
     if ($N31_0 == 1) {
        $N31 = 31;
    }
    if ($A2021_0 == 1) {
        $A2021 = 2021;
    }
    if ($A2022_0 == 1) {
        $A2022 = 2022;
    }
    if ($A2023_0 == 1) {
        $A2023 = 2023;
    }
    if ($A2024_0 == 1) {
        $A2024 = 2024;
    }
    if ($A2025_0 == 1) {
        $A2025 = 2025;
    }
    if ($A2026_0 == 1) {
        $A2026 = 2026;
    }
    if ($A2027_0 == 1) {
        $A2027 = 2027;
    }
    if ($A2028_0 == 1) {
        $A2028 = 2028;
    }
    $Aliados = $row['Aliados'];
    $Vistos = $row['Vistos'];
    
    if($Aliados == '1') {
        $sql = "SELECT * FROM agenda WHERE (Ips != 'Cedisalud IPS (Medellín)' && Ips != 'Cedisalud IPS (Apartadó)') && (Año = '$A2021' || Año = '$A2022' || Año = '$A2023' || Año = '$A2024' || || Año = '$A2025' || Año = '$A2026' || Año = '$A2027') && (Dia = '$N1' || Dia = '$N2' || Dia = '$N3' || Dia = '$N4' || Dia = '$N5' || Dia = '$N6' || Dia = '$N7' || Dia = '$N8' || Dia = '$N9' || Dia = '$N10' || Dia = '$N11' || Dia = '$N12' || Dia = '$N13' || Dia = '$N14' || Dia = '$N15' || Dia = '$N16' || Dia = '$N17' || Dia = '$N18' || Dia = '$N19' || Dia = '$N20' || Dia = '$N21' || Dia = '$N22' || Dia = '$N23' || Dia = '$N24' || Dia = '$N25' || Dia = '$N26' || Dia = '$N27' || Dia = '$N28' || Dia = '$N29' || Dia = '$N30' || Dia = '$N31') && (Mes = '$Enero' || Mes = '$Febrero' || Mes = '$Marzo' || Mes = '$Abril' || Mes = '$Mayo'|| Mes = '$Junio' || Mes = '$Julio' || Mes = '$Agosto' || Mes = '$Septiembre' || Mes = '$Octubre' || Mes = '$Noviembre' || Mes = '$Diciembre') ORDER BY id DESC LIMIT $filas";  
    }
    if($Vistos == '1') {
        $sql = "SELECT * FROM agenda WHERE Orden = 1 && (Año = '$A2021' || Año = '$A2022' || Año = '$A2023' || Año = '$A2024' || Año = '$A2025' || Año = '$A2026' || Año = '$A2027') && (Dia = '$N1' || Dia = '$N2' || Dia = '$N3' || Dia = '$N4' || Dia = '$N5' || Dia = '$N6' || Dia = '$N7' || Dia = '$N8' || Dia = '$N9' || Dia = '$N10' || Dia = '$N11' || Dia = '$N12' || Dia = '$N13' || Dia = '$N14' || Dia = '$N15' || Dia = '$N16' || Dia = '$N17' || Dia = '$N18' || Dia = '$N19' || Dia = '$N20' || Dia = '$N21' || Dia = '$N22' || Dia = '$N23' || Dia = '$N24' || Dia = '$N25' || Dia = '$N26' || Dia = '$N27' || Dia = '$N28' || Dia = '$N29' || Dia = '$N30' || Dia = '$N31') && (Mes = '$Enero' || Mes = '$Febrero' || Mes = '$Marzo' || Mes = '$Abril' || Mes = '$Mayo'|| Mes = '$Junio' || Mes = '$Julio' || Mes = '$Agosto' || Mes = '$Septiembre' || Mes = '$Octubre' || Mes = '$Noviembre' || Mes = '$Diciembre') ORDER BY id DESC LIMIT $filas"; 
    }
    if($Vistos == '1' && $Aliados == '1') {
        $sql = "SELECT * FROM agenda WHERE Orden = 1 && (Ips != 'Cedisalud IPS (Medellín)' && Ips != 'Cedisalud IPS (Apartadó)') && (Año = '$A2021' || Año = '$A2022' || Año = '$A2023' || Año = '$A2024' || Año = '$A2025' || Año = '$A2026' || Año = '$A2027') && (Dia = '$N1' || Dia = '$N2' || Dia = '$N3' || Dia = '$N4' || Dia = '$N5' || Dia = '$N6' || Dia = '$N7' || Dia = '$N8' || Dia = '$N9' || Dia = '$N10' || Dia = '$N11' || Dia = '$N12' || Dia = '$N13' || Dia = '$N14' || Dia = '$N15' || Dia = '$N16' || Dia = '$N17' || Dia = '$N18' || Dia = '$N19' || Dia = '$N20' || Dia = '$N21' || Dia = '$N22' || Dia = '$N23' || Dia = '$N24' || Dia = '$N25' || Dia = '$N26' || Dia = '$N27' || Dia = '$N28' || Dia = '$N29' || Dia = '$N30' || Dia = '$N31') && (Mes = '$Enero' || Mes = '$Febrero' || Mes = '$Marzo' || Mes = '$Abril' || Mes = '$Mayo'|| Mes = '$Junio' || Mes = '$Julio' || Mes = '$Agosto' || Mes = '$Septiembre' || Mes = '$Octubre' || Mes = '$Noviembre' || Mes = '$Diciembre') ORDER BY id DESC LIMIT $filas"; 
    }
    if($Vistos == '0' && $Aliados == '0') {
    $sql = "SELECT * FROM agenda WHERE (Año = '$A2021' || Año = '$A2022' || Año = '$A2023' || Año = '$A2024' || Año = '$A2025' || Año = '$A2026' || Año = '$A2027') && (Dia = '$N1' || Dia = '$N2' || Dia = '$N3' || Dia = '$N4' || Dia = '$N5' || Dia = '$N6' || Dia = '$N7' || Dia = '$N8' || Dia = '$N9' || Dia = '$N10' || Dia = '$N11' || Dia = '$N12' || Dia = '$N13' || Dia = '$N14' || Dia = '$N15' || Dia = '$N16' || Dia = '$N17' || Dia = '$N18' || Dia = '$N19' || Dia = '$N20' || Dia = '$N21' || Dia = '$N22' || Dia = '$N23' || Dia = '$N24' || Dia = '$N25' || Dia = '$N26' || Dia = '$N27' || Dia = '$N28' || Dia = '$N29' || Dia = '$N30' || Dia = '$N31') && (Mes = '$Enero' || Mes = '$Febrero' || Mes = '$Marzo' || Mes = '$Abril' || Mes = '$Mayo'|| Mes = '$Junio' || Mes = '$Julio' || Mes = '$Agosto' || Mes = '$Septiembre' || Mes = '$Octubre' || Mes = '$Noviembre' || Mes = '$Diciembre') ORDER BY id DESC LIMIT $filas";
    }
    
    
    $resultado = $mysqli->query($sql);
    $json = array();
    $numeracion = 0;
    while($row = mysqli_fetch_array($resultado)) {
        $numeracion++;
        $Tipo0 = $row['Tipo'];
        $ips = $row['Ips'];
        switch ($ips) {
            case 'Cedisalud IPS (Apartadó)':
                $color = "#000000";
                break;
            case 'Cedisalud IPS (Medellín)':
                $color = "#000000";
                break;
            default:
                $color = "#0000cc";
                break;
        } 
        $orden = $row['Orden'];
        switch ($orden) {
            case '1':
                $color2 = "#c35709";
                $style='verdanab';
                break;
            default:
                $color2 = "#000000";
                $style='verdana';
                break;
        } 
        if ($Tipo0 == 'Cédula de ciudadanía') {
            $Tipo = 'C.C.';
        } else {
            $Tipo = 'C.E.';
        }
        $Especifico = $row['Especifico'];
        switch ($Especifico) {
            case 'Ingreso para alturas y espacios confinados':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura (realizado por médico, no es prueba psicologicas), Evaluación psicológica espacios confinados, Concepto aptitud laboral trabajo en alturas y espacios confinados, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                break;
            case 'Ingreso para conductores':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Prueba de sustancia (marihuana y cocaína), Psocosensométrico (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.), Concepto aptitud laboral conducción';
                break;   
            case 'Ingreso manipulador de alimentos':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, KOH en uñas, Coprológico, Frotis faríngeo, Concepto aptitud laboral manipulación de alimentos';
                break;  
            case 'Ingreso seguridad vial y énfasis en alturas':
                $descripcion2 = '';
                break;  
            case 'Ingreso seguridad vial y énfasis espacios confinados y alturas':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Trigliceridos, Glicemia en ayunas, Prueba de sustancia <i>(marihuana y cocaína), Psocosensométrico (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.), Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Concepto aptitud laboral conducción y trabajo en alturas, Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                break;      
            case 'Ingreso con énfasis en alturas':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Concepto aptitud laboral trabajo en alturas, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado).';
                break; 
            case 'Periódico seguridad vial y énfasis en alturas':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Prueba de sustancia (marihuana y cocaína), Psocosensométrico (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.), Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Concepto aptitud laboral conducción y trabajo en alturas, Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado).';
                break;  
            case 'Periódico seguridad vial y énfasis espacios confinados y alturas':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Prueba de sustancia <i>(marihuana y cocaína), Psocosensométrico (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i>, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Concepto aptitud laboral conducción y trabajo en alturas, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                break;     
            case 'Periódico de alturas':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Concepto aptitud laboral trabajo en alturas, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                break;  
            case 'Periódico manipulador de alimentos':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, KOH en uñas, Coprológico, Frotis faríngeo, Concepto aptitud laboral manipulación de alimentos';
                break;  
            case 'Periódico para conductores':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Prueba de sustancia (marihuana y cocaína), Psocosensométrico (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.), Concepto aptitud laboral conducción.';
                break;  
            case 'Postincapacidad':
                $descripcion2 = 'Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica. HORARIO DE ATENCIÓN PARA ESTE EXAMEN UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00';
                break; 
            case 'Retorno laboral':
                $descripcion2 = 'Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.';
                break;  
            case 'Seguimiento, recomendaciones y/o restricciones médicas':
                $descripcion2 = 'Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica. HORARIO DE ATENCIÓN PARA ESTE EXAMEN UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00';
                break;
            case 'Periódico para alturas y espacios confinados':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Evaluación psicológica espacios confinados, Concepto aptitud laboral trabajo en alturas y espacios confinados, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                break;  
            case 'Periódico para alturas y espacios confinados':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Evaluación psicológica espacios confinados, Concepto aptitud laboral trabajo en alturas y espacios confinados, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                break;     
            case 'PRUEBA PSICOSENSOMETRICA O PSICOMOTRIZ PARA CONDUCTOR':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Evaluación psicológica espacios confinados, Prueba de sustancia MD2 (marihuana y cocaina), Concepto aptitud laboral trabajo en alturas y espacios confinados y conduccion, Todos los concepto en el mismo certificado de aptitud laboral, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                break;  
            case 'INGRESO TIPO 2':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE) , Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;   
            case '3A: INGRESO CON ENFASIS EN ALTURAS':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Laboratorio:, glucemia en ayunas, perfil lipìdico, hemoleucograma, Cuestionario de alturas, Electrocardiograma (EKG):, a personas de 45 años o más, Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;  
            case '3B: INGRESO CONDUCTORES SEGURIDAD VIAL Y ALTURAS':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Cuestionario de alturas, Psicosensométrico, Test de psicología psicométrico, Laboratorio:, glucemia en ayunas, perfil lipìdico, hemoleucograma Electrocardiograma (EKG):, a personas de 45 años o más, Radiografía de columna lumbo-sacra:, (para conductores de vehículos u operadores de maquinaria amarilla), Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;
             case '3C: INGRESO CONDUCTORES SEGURIDAD VIAL':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Psicosensométrico, Test de psicología psicométrico, Laboratorio:, glucemia en ayunas, perfil lipídico, hemoleucograma,  Electrocardiograma (EKG):, a personas de 45 años o más,  Radiografía de columna lumbo-sacra:, (para conductores de vehículos u operadores de maquinaria amarilla),  adiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;  
            case 'PERIÓDICO TIPO 1':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;   
            case '3A: PERIÓDICO CON ENFASIS EN ALTURAS':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Laboratorio:, glucemia en ayunas, perfil lipìdico, hemoleucograma, Cuestionario de alturas, Electrocardiograma (EKG):, a personas de 45 años o más,  Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;  
            case '3B: PERIÓDICO CONDUCTORES SEGURIDAD VIAL Y ALTURAS':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Cuestionario de alturas, Psicosensométrico, Test de psicología psicométrico,, Laboratorio:, glucemia en ayunas, perfil lipìdico, hemoleucogramaElectrocardiograma (EKG): a personas de 45 años o más, Radiografía de columna lumbo-sacra:, (para conductores de vehículos u operadores de maquinaria amarilla), Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
             break;
                break;
             case '3C: PERIÓDICO CONDUCTORES SEGURIDAD VIAL':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Psicosensométrico, Test de psicología psicométrico,, Laboratorio:, glucemia en ayunas, perfil lipídico, hemoleucograma, Electrocardiograma (EKG):, a personas de 45 años o más, Radiografía de columna lumbo-sacra:, (para conductores de vehículos u operadores de maquinaria amarilla), Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico),  Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;  
            case 'EGRESO TIPO 1':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Visiometría (no realizar la tamización visual si lleva menos de un año de realizada), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;
            case 'EGRESO TIPO 2':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Visiometría, Audiometría, Espirometría, NOTA: Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más, Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;
             case '3A: EGRESO':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Visiometría, Audiometría, Espirometría, NOTA: Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más, Electrocardiograma (EKG):, a personas de 45 años o más, Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;
            case '3B: EGRESO':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Visiometría, Audiometría, Espirometría, NOTA: Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más, Electrocardiograma (EKG):,  a personas de 45 años o más, Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;
            case '3C: EGRESO':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Visiometría, Audiometría, Espirometría, NOTA: Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más, Electrocardiograma (EKG):, a personas de 45 años o más, Radiografía de columna lumbo-sacra:, (para conductores de vehículos u operadores de maquinaria amarilla),  Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:Tetano<, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                break;  
            case 'Ingreso seguridad vial, énfasis en alturas y espacios confinados':
                $descripcion2 = 'Exámen médico con énfasis osteomuscularr, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Triglicerido, Glicemia en ayunas, prueba de sustancia (marihuana y cocaína),, Psicosensométrico (1. Test de atención concentrada y resistencia a la monotonía. 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones.  6. prueba de personalidad-test para conductor.), Evaluación psicológica y concepto aptitud laboral trabajo en alturas y espacios confinados., NOTA: En caso de de requerir examenes adicionales, por favor escribirlos en el campo observaciones.';
                break;  
            case 'Periódico seguridad vial, énfasis en alturas y espacios confinados':
                $descripcion2 = 'Exámen médico con énfasis osteomuscularr, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Triglicerido, Glicemia en ayunas, prueba de sustancia (marihuana y cocaína),, Psicosensométrico (1. Test de atención concentrada y resistencia a la monotonía. 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. prueba de personalidad-test para conductor.), Evaluación psicológica y concepto aptitud laboral trabajo en alturas y espacios confinados., NOTA: En caso de de requerir examenes adicionales, por favor escribirlos en el campo observaciones.';
                break;     
            default:
                $descripcion2 = $Especifico;
                break;    
        } 
        $Observaciones2_ = $row['Observaciones2'];
        if($Observaciones2_ == 'null') {
            $Observaciones2 = $Observaciones2_;
        } else {
            $Observaciones2 = '';
        }
        $Fecha_ = $row['Fecha'];
        $Fecha = strtotime($Fecha_);
        $year = date("Y",  $Fecha);
        $mes = date("m", $Fecha);
        $dia = date("d", $Fecha);
        if($mes == '01'){
            $mes_ = 'enero';
        }
        if($mes == '02'){
            $mes_ = 'febrero';
        }
        if($mes == '03'){
            $mes_ = 'marzo';
        }
        if($mes == '04'){
            $mes_ = 'abril';
        }
        if($mes == '05'){
            $mes_ = 'mayo';
        }
        if($mes == '06'){
            $mes_ = 'junio';
        }
        if($mes == '07'){
            $mes_ = 'julio';
        }
        if($mes == '08'){
            $mes_ = 'agosto';
        }
        if($mes == '09'){
            $mes_ = 'septiembre';
        }
        if($mes == '10'){
            $mes_ = 'octubre';
        }
        if($mes == '11'){
            $mes_ = 'noviembre';
        }
        if($mes == '12'){
            $mes_ = 'diciembre';
        }
        $fecha= $dia.' de '.$mes_.' de '.$year;
        $json[] = array(
            'numeracion' => $numeracion,
            'id' => $row['id'],
            'Ips' => $row['Ips'],
            'Color' => $color,
            'Color2' => $color2,
            'style' => $style,
            'Tipo' => $Tipo,
            'Cedula' => $row['Documento'],
            'Nombre' => $row['Nombre'],
            'Apellidos' => $row['Apellidos'],
            'Cargo' => $row['Cargo'],
            'Examen' => $row['Examen'],
            'Especifico' => $row['Especifico'],
            'Descripcion' => $descripcion2,
            'Fecha' => $fecha,
            'Observaciones' => $row['Observaciones'],
            'Observaciones2' => $row['Observaciones2'],
            'Empresa' => $row['Empresa'],
            'Responsable' => $row['Responsable'],
            'Celular' => $row['Celular'],
            'Fecha_registro' => $row['Fecha_registro']
        );}
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>