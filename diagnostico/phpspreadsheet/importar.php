<?php
include 'vendor/autoload.php';

// ⚠️ Solo mientras depuras. En producción puedes dejar error_reporting(0)
error_reporting(0);
ini_set('display_errors', 1);

set_time_limit(0); 
ini_set('memory_limit', '2000M'); 

$connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect->exec("SET CHARACTER SET utf8"); 

$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313', 'cedisalud_usuario');
mysqli_set_charset($mysqli, "utf8"); 

date_default_timezone_set('America/Bogota');
session_start();

$message = '';

if (!empty($_FILES["file"]["name"])) {

    $allowed_extension = array('xls', 'csv', 'xlsx');
    $file_array = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($file_array);

    if (in_array($file_extension, $allowed_extension)) {

        // Config de sobrescritura
        $sql = "SELECT * FROM controles_diagnostico WHERE id_admin = 1";   
        $resultado = $mysqli->query($sql);
        $row_ctrl = $resultado->fetch_array(MYSQLI_ASSOC);
        $Sobrescritura = $row_ctrl['Sobrescritura'] ?? 0;

        if ($Sobrescritura == 1) {
            $connect->query("DELETE FROM general"); 
        } 

        // Guardar y leer archivo
        $file_name = time() . '.' . $file_extension;
        move_uploaded_file($_FILES['file']['tmp_name'], $file_name);

        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load($file_name);
        unlink($file_name);

        $data = $spreadsheet->getActiveSheet()->toArray();

        // ⚠️ Quita la fila de encabezados si tu Excel la tiene.
        // Si no tiene encabezados, comenta esta línea.
        array_shift($data);

        $id = $_POST['id'] ?? 1;

        // Preparar INSERT UNA sola vez (mejor rendimiento y más limpio)
        $sql_insert = "INSERT INTO general (
            Autor, Fecha_registro, Nombre_apellidos, Identificacion, Certificado, Area, Cargo, Descrcargo,
            Fecha_ingreso, Antiguedad, Edad, Edad_1, Edad_2, Edad_3, Edad_4, Edad_5, Edad_6, Edad_7,
            Genero, Civil, Soltero, Casado, Union_libre, Separado, Viudo,
            AccidenteT, AccidenteT_D, EnfermedadP, EnfermedadP_D,
            Fumador, Tipo_fumador, Anos_fumador, Anos_fumador_S, Num_cigarrillos,
            Tipo_bebedor, Tipo_licor, Frecuencia_licor, Problema_bebida, Tipo_problema_bebida,
            Exbebedor, Anos_suplic, Anos_licor, Habitos, Tipo_habitos, Deportes, Tipo_deporte,
            Frecuencia, Fre_deporte, IMC, Valor_IMC, Talla, Peso,
            INSPECCIONCOLUMNA, PALPACIONCOLUMNA, MIEMBROSSUPERIORES, MIEMBROSINFERIORES,
            FLEXIBILIDADWELLS, COMPRESIONRADICULAR, LASEGUE, TINELDER, TINELDERIZQBI,
            PHALENDER, PHALENDERIZBI, FINKELSTEIN, FINKELSIZDEBL,
            Audio_D, Audio_R, Audio_CIE10, Audio_C, Audiometria_C, Audio_SVE,
            Espiro_D, Espiro_R, Espiro_CIE10, Espiro_C, Espirometria_C, Espiro_SVE,
            Visio_D, Visio_R, Visio_CIE10, Visio_correccion, Visio_C, Visiometria_C, Visio_SVE,
            Opto_D, Opto_R, Opto_CIE10, Opto_C, Optometria_C, Opto_SVE,
            Maestro, Tipo_examen, Tipo_certificado, Empresa, Fecha_nacimiento,
            Antiguedad_1, Antiguedad_2, Antiguedad_3, Antiguedad_4, Antiguedad_5,
            EPS, AFP, ARL, Primaria, Bachillerato, Tecnico, Tecnologo, Universidad,
            Analfabeta, Especializacion, Maestria, Doctorado, Estado, Escolaridad,
            Electro_D, Electro_R, Electro_CIE10, Psico_D, Psico_R,
            Alturas_D, Alturas_R, Osteomuscular_D, Osteomuscular_R,
            Concepto_1, Concepto_2, Concepto_3, Recomendaciones, Notas,
            Tension, Tension1, Tension2, Observaciones, Enfermedad_actual,
            CIE10_1, DIAG_1, CAP_1, CIE10_2, DIAG_2, CAP_2,
            CIE10_3, DIAG_3, CAP_3, CIE10_4, DIAG_4, CAP_4,
            CIE10_5, DIAG_5, CAP_5, CIE10_6, DIAG_6, CAP_6,
            CIE10_7, DIAG_7, CAP_7, CIE10_8, DIAG_8, CAP_8,
            CIE10_9, DIAG_9, CAP_9, CIE10_10, DIAG_10, CAP_10,
            Diagnostico, Virus, Parasitos, Hongos, Bacterias, Ricketsias,
            Picaduras, Mordeduras, Fluidos_excrementos,
            Ruido, Iluminacion, Vibracion, Temperaturas, Presion_ATM,
            Ionizante, No_ionizante, Polvo, Fibras, Liquidos, Gases, Vapores, Humos,
            Material_particulado, Trabajo_estatico, Esfuerzo_fisico, Manejo_cargas,
            Posturas_forzadas, Trabajo_sedente, Mov_repetitivos,
            Contenido_tarea, Relaciones_humanas, Riesgo_contra_personas,
            Secretos_productos, Secretos_procesos, Gestion_admin,
            R_mecanico, R_electrico, R_locativo, R_tecnologico,
            Accidente_transito, Publico, Trabajo_alturas, Trabajo_confinado,
            Sismo, Terremoto, Vendaval, Inundacion, Derrumbe, Precipitaciones,
            Control_fuente, Control_medio, Usaepp, Tipo_exposicion,
            Ante_hta, Ante_infarto, Ante_acv, Ante_alergias, Ante_ulcera,
            Ante_diabetes, Ante_asma, Ante_tbc, Ante_artritis, Ante_enf_mental,
            Ante_cancer, Ante_otros, Ante_patologico, Ante_hospitalario, Ante_quirurgico,
            Ante_traumatico, Ante_alergico, Ante_toxicoalergico, Ante_farmacologico,
            Ante_psiquiatrico, Ante_inmunologico, Remisiones, Sistema_vigilancia,
            DGLAB_1, DGLAB_2, DGLAB_3, Tiempo_libre, Tipo_contrato,
            Promedio_ingreso, Personas_cargo, Tipo_vivienda, Composicion_familiar,
            Estrato, Direccion, Telefono, Ciudad, Departamento, Nit, Caso_osteo,
            Restricciones, Saturacion, Clasificacion_osteo, Vacunacion, Psicosensometrico,
            Glicemia, Hem_glicosilada, Colesterol, Trigliceridos, HDL, LDL,
            Creatina, NHANES, FRAMINGHAM, Fecha_repositorio
        ) VALUES (
            :Autor, :Fecha_registro, :Nombre_apellidos, :Identificacion, :Certificado, :Area, :Cargo, :Descrcargo,
            :Fecha_ingreso, :Antiguedad, :Edad, :Edad_1, :Edad_2, :Edad_3, :Edad_4, :Edad_5, :Edad_6, :Edad_7,
            :Genero, :Civil, :Soltero, :Casado, :Union_libre, :Separado, :Viudo,
            :AccidenteT, :AccidenteT_D, :EnfermedadP, :EnfermedadP_D,
            :Fumador, :Tipo_fumador, :Anos_fumador, :Anos_fumador_S, :Num_cigarrillos,
            :Tipo_bebedor, :Tipo_licor, :Frecuencia_licor, :Problema_bebida, :Tipo_problema_bebida,
            :Exbebedor, :Anos_suplic, :Anos_licor, :Habitos, :Tipo_habitos, :Deportes, :Tipo_deporte,
            :Frecuencia, :Fre_deporte, :IMC, :Valor_IMC, :Talla, :Peso,
            :INSPECCIONCOLUMNA, :PALPACIONCOLUMNA, :MIEMBROSSUPERIORES, :MIEMBROSINFERIORES,
            :FLEXIBILIDADWELLS, :COMPRESIONRADICULAR, :LASEGUE, :TINELDER, :TINELDERIZQBI,
            :PHALENDER, :PHALENDERIZBI, :FINKELSTEIN, :FINKELSIZDEBL,
            :Audio_D, :Audio_R, :Audio_CIE10, :Audio_C, :Audiometria_C, :Audio_SVE,
            :Espiro_D, :Espiro_R, :Espiro_CIE10, :Espiro_C, :Espirometria_C, :Espiro_SVE,
            :Visio_D, :Visio_R, :Visio_CIE10, :Visio_correccion, :Visio_C, :Visiometria_C, :Visio_SVE,
            :Opto_D, :Opto_R, :Opto_CIE10, :Opto_C, :Optometria_C, :Opto_SVE,
            :Maestro, :Tipo_examen, :Tipo_certificado, :Empresa, :Fecha_nacimiento,
            :Antiguedad_1, :Antiguedad_2, :Antiguedad_3, :Antiguedad_4, :Antiguedad_5,
            :EPS, :AFP, :ARL, :Primaria, :Bachillerato, :Tecnico, :Tecnologo, :Universidad,
            :Analfabeta, :Especializacion, :Maestria, :Doctorado, :Estado, :Escolaridad,
            :Electro_D, :Electro_R, :Electro_CIE10, :Psico_D, :Psico_R,
            :Alturas_D, :Alturas_R, :Osteomuscular_D, :Osteomuscular_R,
            :Concepto_1, :Concepto_2, :Concepto_3, :Recomendaciones, :Notas,
            :Tension, :Tension1, :Tension2, :Observaciones, :Enfermedad_actual,
            :CIE10_1, :DIAG_1, :CAP_1, :CIE10_2, :DIAG_2, :CAP_2,
            :CIE10_3, :DIAG_3, :CAP_3, :CIE10_4, :DIAG_4, :CAP_4,
            :CIE10_5, :DIAG_5, :CAP_5, :CIE10_6, :DIAG_6, :CAP_6,
            :CIE10_7, :DIAG_7, :CAP_7, :CIE10_8, :DIAG_8, :CAP_8,
            :CIE10_9, :DIAG_9, :CAP_9, :CIE10_10, :DIAG_10, :CAP_10,
            :Diagnostico, :Virus, :Parasitos, :Hongos, :Bacterias, :Ricketsias,
            :Picaduras, :Mordeduras, :Fluidos_excrementos,
            :Ruido, :Iluminacion, :Vibracion, :Temperaturas, :Presion_ATM,
            :Ionizante, :No_ionizante, :Polvo, :Fibras, :Liquidos, :Gases, :Vapores, :Humos,
            :Material_particulado, :Trabajo_estatico, :Esfuerzo_fisico, :Manejo_cargas,
            :Posturas_forzadas, :Trabajo_sedente, :Mov_repetitivos,
            :Contenido_tarea, :Relaciones_humanas, :Riesgo_contra_personas,
            :Secretos_productos, :Secretos_procesos, :Gestion_admin,
            :R_mecanico, :R_electrico, :R_locativo, :R_tecnologico,
            :Accidente_transito, :Publico, :Trabajo_alturas, :Trabajo_confinado,
            :Sismo, :Terremoto, :Vendaval, :Inundacion, :Derrumbe, :Precipitaciones,
            :Control_fuente, :Control_medio, :Usaepp, :Tipo_exposicion,
            :Ante_hta, :Ante_infarto, :Ante_acv, :Ante_alergias, :Ante_ulcera,
            :Ante_diabetes, :Ante_asma, :Ante_tbc, :Ante_artritis, :Ante_enf_mental,
            :Ante_cancer, :Ante_otros, :Ante_patologico, :Ante_hospitalario, :Ante_quirurgico,
            :Ante_traumatico, :Ante_alergico, :Ante_toxicoalergico, :Ante_farmacologico,
            :Ante_psiquiatrico, :Ante_inmunologico, :Remisiones, :Sistema_vigilancia,
            :DGLAB_1, :DGLAB_2, :DGLAB_3, :Tiempo_libre, :Tipo_contrato,
            :Promedio_ingreso, :Personas_cargo, :Tipo_vivienda, :Composicion_familiar,
            :Estrato, :Direccion, :Telefono, :Ciudad, :Departamento, :Nit, :Caso_osteo,
            :Restricciones, :Saturacion, :Clasificacion_osteo, :Vacunacion, :Psicosensometrico,
            :Glicemia, :Hem_glicosilada, :Colesterol, :Trigliceridos, :HDL, :LDL,
            :Creatina, :NHANES, :FRAMINGHAM, NOW()
        )";

        $statement = $connect->prepare($sql_insert);

        $confirmacion = 1;
        $errores = [];

        foreach ($data as $index => $row) {

            // --- Fechas ---
            $Fecha_registro   = !empty($row[0])  ? date("Y-m-d", strtotime($row[0]))  : null;
            $Fecha_ingreso    = !empty($row[7])  ? date("Y-m-d", strtotime($row[7]))  : null;
            $Fecha_nacimiento = !empty($row[93]) ? date("Y-m-d", strtotime($row[93])) : null;

            // --- Tensión ---
            $Tension = $row[128] ?? '';
            $ten = explode("/", (string)$Tension);
            $Tension1 = isset($ten[0]) && $ten[0] !== '' ? (int)$ten[0] : null;
            $Tension2 = isset($ten[1]) && $ten[1] !== '' ? (int)$ten[1] : null;

            // --- CIE10 usados por cap_X.inc.php ---
            $Codigo1  = $row[130] ?? '';
            $Codigo2  = $row[132] ?? '';
            $Codigo3  = $row[134] ?? '';
            $Codigo4  = $row[136] ?? '';
            $Codigo5  = $row[138] ?? '';
            $Codigo6  = $row[140] ?? '';
            $Codigo7  = $row[142] ?? '';
            $Codigo8  = $row[144] ?? '';
            $Codigo9  = $row[146] ?? '';
            $Codigo10 = $row[148] ?? '';

            // Inicializar variables que los include deben llenar
            $CAP_1 = $CAP_2 = $CAP_3 = $CAP_4 = $CAP_5 = '';
            $CAP_6 = $CAP_7 = $CAP_8 = $CAP_9 = $CAP_10 = '';
            $Diagnostico1 = $Diagnostico2 = $Diagnostico3 = $Diagnostico4 = $Diagnostico5 = '';
            $Diagnostico6 = $Diagnostico7 = $Diagnostico8 = $Diagnostico9 = $Diagnostico10 = '';

            include 'cap_1.inc.php';
            include 'cap_2.inc.php';
            include 'cap_3.inc.php';
            include 'cap_4.inc.php';
            include 'cap_5.inc.php';
            include 'cap_6.inc.php';
            include 'cap_7.inc.php';
            include 'cap_8.inc.php';
            include 'cap_9.inc.php';
            include 'cap_10.inc.php';

            $insert_data = array(
                ':Autor' => 1,
                ':Fecha_registro' => $Fecha_registro,
                ':Nombre_apellidos' => $row[1],
                ':Identificacion' => $row[2],
                ':Certificado' => $row[3],
                ':Area' => $row[4],
                ':Cargo' => $row[5],
                ':Descrcargo' => $row[6],
                ':Fecha_ingreso' => $Fecha_ingreso,
                ':Antiguedad' => $row[8],
                ':Edad' => $row[9],
                ':Edad_1' => $row[10],
                ':Edad_2' => $row[11],
                ':Edad_3' => $row[12],
                ':Edad_4' => $row[13],
                ':Edad_5' => $row[14],
                ':Edad_6' => $row[15],
                ':Edad_7' => $row[16],
                ':Genero' => $row[17],
                ':Civil' => $row[18],
                ':Soltero' => $row[19],
                ':Casado' => $row[20],
                ':Union_libre' => $row[21],
                ':Separado' => $row[22],
                ':Viudo' => $row[23],
                ':AccidenteT' => $row[24],
                ':AccidenteT_D' => $row[25],
                ':EnfermedadP' => $row[26],
                ':EnfermedadP_D' => $row[27],
                ':Fumador' => $row[28],
                ':Tipo_fumador' => $row[29],
                ':Anos_fumador' => $row[30],
                ':Anos_fumador_S' => $row[31],
                ':Num_cigarrillos' => $row[32],
                ':Tipo_bebedor' => $row[33],
                ':Tipo_licor' => $row[34],
                ':Frecuencia_licor' => $row[35],
                ':Problema_bebida' => $row[36],
                ':Tipo_problema_bebida' => $row[37],
                ':Exbebedor' => $row[38],
                ':Anos_suplic' => $row[39],
                ':Anos_licor' => $row[40],
                ':Habitos' => $row[41],
                ':Tipo_habitos' => $row[42],
                ':Deportes' => $row[43],
                ':Tipo_deporte' => $row[44],
                ':Frecuencia' => $row[45],
                ':Fre_deporte' => $row[46],
                ':IMC' => $row[47],
                ':Valor_IMC' => $row[48],
                ':Talla' => $row[49],
                ':Peso' => $row[50],
                ':INSPECCIONCOLUMNA' => $row[51],
                ':PALPACIONCOLUMNA' => $row[52],
                ':MIEMBROSSUPERIORES' => $row[53],
                ':MIEMBROSINFERIORES' => $row[54],
                ':FLEXIBILIDADWELLS' => $row[55],
                ':COMPRESIONRADICULAR' => $row[56],
                ':LASEGUE' => $row[57],
                ':TINELDER' => $row[58],
                ':TINELDERIZQBI' => $row[59],
                ':PHALENDER' => $row[60],
                ':PHALENDERIZBI' => $row[61],
                ':FINKELSTEIN' => $row[62],
                ':FINKELSIZDEBL' => $row[63],
                ':Audio_D' => $row[64],
                ':Audio_R' => $row[65],
                ':Audio_CIE10' => $row[66],
                ':Audio_C' => $row[67],
                ':Audiometria_C' => $row[68],
                ':Audio_SVE' => $row[69],
                ':Espiro_D' => $row[70],
                ':Espiro_R' => $row[71],
                ':Espiro_CIE10' => $row[72],
                ':Espiro_C' => $row[73],
                ':Espirometria_C' => $row[74],
                ':Espiro_SVE' => $row[75],
                ':Visio_D' => $row[76],
                ':Visio_R' => $row[77],
                ':Visio_CIE10' => $row[78],
                ':Visio_correccion' => $row[79],
                ':Visio_C' => $row[80],
                ':Visiometria_C' => $row[81],
                ':Visio_SVE' => $row[82],
                ':Opto_D' => $row[83],
                ':Opto_R' => $row[84],
                ':Opto_CIE10' => $row[85],
                ':Opto_C' => $row[86],
                ':Optometria_C' => $row[87],
                ':Opto_SVE' => $row[88],
                ':Maestro' => $row[89],
                ':Tipo_examen' => $row[90],
                ':Tipo_certificado' => $row[91],
                ':Empresa' => $row[92],
                ':Fecha_nacimiento' => $Fecha_nacimiento,
                ':Antiguedad_1' => $row[94],
                ':Antiguedad_2' => $row[95],
                ':Antiguedad_3' => $row[96],
                ':Antiguedad_4' => $row[97],
                ':Antiguedad_5' => $row[98],
                ':EPS' => $row[99],
                ':AFP' => $row[100],
                ':ARL' => $row[101],
                ':Primaria' => $row[102],
                ':Bachillerato' => $row[103],
                ':Tecnico' => $row[104],
                ':Tecnologo' => $row[105],
                ':Universidad' => $row[106],
                ':Analfabeta' => $row[107],
                ':Especializacion' => $row[108],
                ':Maestria' => $row[109],
                ':Doctorado' => $row[110],
                ':Estado' => $row[111],
                ':Escolaridad' => $row[112],
                ':Electro_D' => $row[113],
                ':Electro_R' => $row[114],
                ':Electro_CIE10' => $row[115],
                ':Psico_D' => $row[116],
                ':Psico_R' => $row[117],
                ':Alturas_D' => $row[118],
                ':Alturas_R' => $row[119],
                ':Osteomuscular_D' => $row[120],
                ':Osteomuscular_R' => $row[121],
                ':Concepto_1' => $row[122],
                ':Concepto_2' => $row[123],
                ':Concepto_3' => $row[124],
                ':Recomendaciones' => $row[125],
                ':Notas' => $row[126],
                ':Tension' => $Tension,
                ':Tension1' => $Tension1,
                ':Tension2' => $Tension2,
                ':Observaciones' => $row[128],
                ':Enfermedad_actual' => $row[129],
                ':CIE10_1' => $row[130],
                ':DIAG_1' => $Diagnostico1,
                ':CIE10_2' => $row[132],
                ':DIAG_2' => $Diagnostico2,
                ':CIE10_3' => $row[134],
                ':DIAG_3' => $Diagnostico3,
                ':CIE10_4' => $row[136],
                ':DIAG_4' => $Diagnostico4,
                ':CIE10_5' => $row[138],
                ':DIAG_5' => $Diagnostico5,
                ':CIE10_6' => $row[140],
                ':DIAG_6' => $Diagnostico6,
                ':CIE10_7' => $row[142],
                ':DIAG_7' => $Diagnostico7,
                ':CIE10_8' => $row[144],
                ':DIAG_8' => $Diagnostico8,
                ':CIE10_9' => $row[146],
                ':DIAG_9' => $Diagnostico9,
                ':CIE10_10' => $row[148],
                ':DIAG_10' => $Diagnostico10,
                ':Diagnostico' => $row[150],
                ':Virus' => $row[151],
                ':Parasitos' => $row[152],
                ':Hongos' => $row[153],
                ':Bacterias' => $row[154],
                ':Ricketsias' => $row[155],
                ':Picaduras' => $row[156],
                ':Mordeduras' => $row[157],
                ':Fluidos_excrementos' => $row[158],
                ':Ruido' => $row[159],
                ':Iluminacion' => $row[160],
                ':Vibracion' => $row[161],
                ':Temperaturas' => $row[162],
                ':Presion_ATM' => $row[163],
                ':Ionizante' => $row[164],
                ':No_ionizante' => $row[165],
                ':Polvo' => $row[166],
                ':Fibras' => $row[167],
                ':Liquidos' => $row[168],
                ':Gases' => $row[169],
                ':Vapores' => $row[170],
                ':Humos' => $row[171],
                ':Material_particulado' => $row[172],
                ':Trabajo_estatico' => $row[173],
                ':Esfuerzo_fisico' => $row[174],
                ':Manejo_cargas' => $row[175],
                ':Posturas_forzadas' => $row[176],
                ':Trabajo_sedente' => $row[177],
                ':Mov_repetitivos' => $row[178],
                ':Contenido_tarea' => $row[179],
                ':Relaciones_humanas' => $row[180],
                ':Riesgo_contra_personas' => $row[181],
                ':Secretos_productos' => $row[182],
                ':Secretos_procesos' => $row[183],
                ':Gestion_admin' => $row[184],
                ':R_mecanico' => $row[185],
                ':R_electrico' => $row[186],
                ':R_locativo' => $row[187],
                ':R_tecnologico' => $row[188],
                ':Accidente_transito' => $row[189],
                ':Publico' => $row[190],
                ':Trabajo_alturas' => $row[191],
                ':Trabajo_confinado' => $row[192],
                ':Sismo' => $row[193],
                ':Terremoto' => $row[194],
                ':Vendaval' => $row[195],
                ':Inundacion' => $row[196],
                ':Derrumbe' => $row[197],
                ':Precipitaciones' => $row[198],
                ':Control_fuente' => $row[199],
                ':Control_medio' => $row[200],
                ':Usaepp' => $row[201],
                ':Tipo_exposicion' => $row[202],
                ':Ante_hta' => $row[203],
                ':Ante_infarto' => $row[204],
                ':Ante_acv' => $row[205],
                ':Ante_alergias' => $row[206],
                ':Ante_ulcera' => $row[207],
                ':Ante_diabetes' => $row[208],
                ':Ante_asma' => $row[209],
                ':Ante_tbc' => $row[210],
                ':Ante_artritis' => $row[211],
                ':Ante_enf_mental' => $row[212],
                ':Ante_cancer' => $row[213],
                ':Ante_otros' => $row[214],
                ':Ante_patologico' => $row[215],
                ':Ante_hospitalario' => $row[216],
                ':Ante_quirurgico' => $row[217],
                ':Ante_traumatico' => $row[218],
                ':Ante_alergico' => $row[219],
                ':Ante_toxicoalergico' => $row[220],
                ':Ante_farmacologico' => $row[221],
                ':Ante_psiquiatrico' => $row[222],
                ':Ante_inmunologico' => $row[223],
                ':Remisiones' => $row[224],
                ':Sistema_vigilancia' => $row[225],
                ':DGLAB_1' => $row[226],
                ':DGLAB_2' => $row[227],
                ':DGLAB_3' => $row[228],
                ':Tiempo_libre' => $row[229],
                ':Tipo_contrato' => $row[230],
                ':Promedio_ingreso' => $row[231],
                ':Personas_cargo' => $row[232],
                ':Tipo_vivienda' => $row[233],
                ':Composicion_familiar' => $row[234],
                ':Estrato' => $row[235],
                ':Direccion' => $row[236],
                ':Telefono' => $row[237],
                ':Ciudad' => $row[238],
                ':Departamento' => $row[239],
                ':Nit' => $row[240],
                ':Caso_osteo' => 1,
                ':Restricciones' => $row[241],
                ':Saturacion' => $row[242],
                ':Clasificacion_osteo' => $row[243],
                ':Vacunacion' => $row[244],
                ':Psicosensometrico' => $row[245],
                ':Glicemia' => $row[246],
                ':Hem_glicosilada' => $row[247],
                ':Colesterol' => $row[248],
                ':Trigliceridos' => $row[249],
                ':HDL' => $row[250],
                ':LDL' => $row[251],
                ':Creatina' => $row[252],
                ':NHANES' => $row[253],
                ':FRAMINGHAM' => $row[254],
                ':CAP_1' => $CAP_1,
                ':CAP_2' => $CAP_2,
                ':CAP_3' => $CAP_3,
                ':CAP_4' => $CAP_4,
                ':CAP_5' => $CAP_5,
                ':CAP_6' => $CAP_6,
                ':CAP_7' => $CAP_7,
                ':CAP_8' => $CAP_8,
                ':CAP_9' => $CAP_9,
                ':CAP_10' => $CAP_10,
            );

            try {
                $statement->execute($insert_data);
            } catch (PDOException $e) {
                $confirmacion = 0;
                $errores[] = "Fila $index: " . $e->getMessage();
            }
        }

        if ($confirmacion) {
            $message = '<div style="font-family:verdanab;color:#000000">Los datos fueron guardados exitosamente</div>';
        } else {
            $message = '<div style="font-family:verdanab;color:#cc0000">Errores al importar:<br>' . implode('<br>', $errores) . '</div>';
        }

    } else {
        $message = '<div style="font-family:verdanab;color:#000000">Sólo se permiten archivos .xls .csv o .xlsx</div>';
    }
} else {
    $message = '<div style="font-family:verdanab;color:#000000">Por favor, seleccione un archivo</div>';
}

echo $message;
?>