<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

$connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect->exec("SET CHARACTER SET utf8");
$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313', 'cedisalud_usuario');
mysqli_set_charset($mysqli, "utf8");

// Recibir parámetros
$Cargo = isset($_POST['Cargo']) ? trim($_POST['Cargo']) : '';
$T = isset($_POST['T']) ? intval($_POST['T']) : 0;

// Si no hay cargo o tipo, devolver array vacío
if (empty($Cargo) || $T == 0) {
    echo json_encode(array());
    exit;
}

// Definir etiquetas de exámenes
$etiquetas_E = array(
    1 => 'Examen Medico Enfasis Osteomuscular',
    2 => 'Audiometria Tamiz',
    3 => 'Visionetria',
    4 => 'Optometria',
    5 => 'Audiometria Clinica',
    6 => 'Espirometria',
    7 => 'Electrocardiograma',
    8 => 'Psicosensometrico'
);

$etiquetas_L = array(
    1 => 'Alcohol Metilico',
    2 => 'Alcoholemia',
    3 => 'Anticuerpos Anas',
    4 => 'Anticuerpos Hepatitis B - Anti Hbs',
    5 => 'Anticuerpos Varicela Igg',
    6 => 'Antigeno Especifico Para Prostata (Psa)',
    7 => 'Antigeno Hepatitis B',
    8 => 'Basciloscopia',
    9 => 'Bun - Nitrogeno Ureico',
    10 => 'Cholinesterase (Che)',
    11 => 'Colesterol Total',
    12 => 'Coprologico',
    13 => 'Creatinina Orina',
    14 => 'Creatinina Serica',
    15 => 'Ferritina',
    16 => 'Fiebre Amarilla Virus Anticuerpo',
    17 => 'Frotis De Uñas',
    18 => 'Frotis Faringeo',
    19 => 'Glicemia En Ayunas',
    20 => 'Grupo Rh',
    21 => 'Hemoclasificacion',
    22 => 'Hemograma Completo',
    23 => 'Lentes',
    24 => 'Prueba De Sustancias Md10',
    25 => 'Prueba De Sustancias Md5',
    26 => 'Parcial De Orina',
    27 => 'Perfil Hepatico',
    28 => 'Perfil Lipidico',
    29 => 'Plomo En Sangre',
    30 => 'Protectores Auditivos',
    31 => 'Prueba De Alcohol',
    32 => 'Prueba De Marihuana Y Cocaina',
    33 => 'Prueba Deteccion De Sustancias Psicoactivas',
    34 => 'Psicosensometrico',
    35 => 'T3 Libre',
    36 => 'T4',
    37 => 'Tamizaje De Voz',
    38 => 'Tamizaje Visual',
    39 => 'Test De Aptitud Mental',
    40 => 'Toxoplasma Igg',
    41 => 'Toxoplasma Igm',
    42 => 'Trigliceridos',
    43 => 'Tsh',
    44 => 'Vih 1 Y 2 Anticuerpo Cualitativa'
);

$etiquetas_V = array(
    1 => 'Vacuna De Influenza',
    2 => 'Vacuna Dengue Tetravalente',
    3 => 'Vacuna Dpt Acelular-Tosferina',
    4 => 'Vacuna Fiebre Amarilla',
    5 => 'Vacuna Fiebre Tifoidea',
    6 => 'Vacuna Hepatitis A',
    7 => 'Vacuna Hepatitis A+B',
    8 => 'Vacuna Hepatitis B',
    9 => 'Vacuna Meningococo',
    10 => 'Vacuna Neumococo Polisacarida 23',
    11 => 'Vacuna Neumococo Prevenar 13',
    12 => 'Vacuna Tetano Dipteria',
    13 => 'Vacuna Tetanos',
    14 => 'Vacuna Triple Viral',
    15 => 'Vacuna Varicela'
);

$etiquetas_OT = array(
    1 => 'Anexo Dermatologico (Piel Y Anexos)',
    2 => 'Anexo Neurologico',
    3 => 'Anexo Osteomuscular',
    4 => 'Anexo Rcv Framingham',
    5 => 'Anexo Rcv Gaziano-Nhanes',
    6 => 'Anexo Respiratorio',
    7 => 'Anexo Vascular Periferico',
    8 => 'Anexo Visual',
    9 => 'Cuestionario Stop Bang',
    10 => 'Cuestionario De Sintomas Neurologicos (Q16)',
    11 => 'Inventario De Personalidad De Eysenck',
    12 => 'Prueba Teorico-Practica Conductores Motorizado',
    13 => 'Prueba Teorico-Practica Seguridad Vial',
    14 => 'Pruebas De Equilibrio Y Cuestionario Para Alturas',
    15 => 'Test De Epworth',
    16 => 'Test De Farnsworth (D15)',
    17 => 'Test De Framingham',
    18 => 'Test De Harvard',
    19 => 'Test Psicologico Para Fobia Electricidad',
    20 => 'Ecografia Abdomen Total',
    21 => 'Ecografia Abdominal',
    22 => 'Ecografia Articular De Hombro',
    23 => 'Ecografia Articular De Rodilla',
    24 => 'Ecografia De Abdomen Total',
    25 => 'Ecografia De Higado, Pancreas, Via Biliar Y Vesicula',
    26 => 'Ecografia De Muñeca Derecha',
    27 => 'Ecografia De Rodillas',
    28 => 'Ecografia De Tejidos Blandos De Pared Abdominal',
    29 => 'Ecografia Tejidos Blandos Extremidades Superiores',
    30 => 'Electrocardiograma',
    31 => 'Espirometria Pre-Pos Broncodilatador',
    32 => 'Evaluacion Psicologica(Isra) Fobias-Alturas-Confinados',
    33 => 'Lectura Radiografia De Torax - Ilo',
    34 => 'Radiografia De Codo',
    35 => 'Radiografia De Columna Cervical',
    36 => 'Radiografia De Columna Dorsal - Lumbar',
    37 => 'Radiografia De Columna Lumbo-Sacra',
    38 => 'Radiografia De Dedo',
    39 => 'Radiografia De Mano',
    40 => 'Radiografia De Rodilla (Ap, Lateral)',
    41 => 'Radiografia De Rodillas Comparativas Posicion Vertical',
    42 => 'Radiografia De Tobillo (Ap, Lateral Y Rotacion Interna)',
    43 => 'Radiografia De Torax Pa- Lateral'
);

$etiquetas_D = array(
    1 => 'Fisica',
    2 => 'Mental',
    3 => 'Visual',
    4 => 'Psicosocial',
    5 => 'Auditiva',
    6 => 'Sordomudez',
    7 => 'Mixta'
);

// Consulta principal: obtener el registro que coincida con Cargo y T
$sql = "SELECT * FROM profesiograma_agenda WHERE Cargo = ? AND T = ? LIMIT 1";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("si", $Cargo, $T);
$stmt->execute();
$resultado = $stmt->get_result();
$row = $resultado->fetch_array(MYSQLI_ASSOC);

// Inicializar array para TODOS los exámenes combinados
$todos_los_examenes = array();

if ($row) {
    // Recorrer E1-E8
    for ($e = 1; $e <= 8; $e++) {
        $campo = 'E' . $e;
        if (isset($row[$campo]) && $row[$campo] == 1) {
            $todos_los_examenes[] = $etiquetas_E[$e];
        }
    }
    
    // Recorrer L1-L44
    for ($l = 1; $l <= 44; $l++) {
        $campo = 'L' . $l;
        if (isset($row[$campo]) && $row[$campo] == 1) {
            $todos_los_examenes[] = $etiquetas_L[$l];
        }
    }
    
    // Recorrer V1-V15
    for ($v = 1; $v <= 15; $v++) {
        $campo = 'V' . $v;
        if (isset($row[$campo]) && $row[$campo] == 1) {
            $todos_los_examenes[] = $etiquetas_V[$v];
        }
    }
    
    // Recorrer OT1-OT43
    for ($ot = 1; $ot <= 43; $ot++) {
        $campo = 'OT' . $ot;
        if (isset($row[$campo]) && $row[$campo] == 1) {
            $todos_los_examenes[] = $etiquetas_OT[$ot];
        }
    }
}

// Preparar el array base con todos los campos vacíos
$datos = array(
    'EX1' => '',
    'EX2' => '',
    'EX3' => '',
    'DIS' => '',
    'O' => '',
    'OBS' => ''
);

// Asignar TODOS los exámenes a la variable correspondiente según T
$texto_examenes = !empty($todos_los_examenes) ? implode('<br>', array_unique($todos_los_examenes)) : '';

if ($T == 1) {
    $datos['EX1'] = $texto_examenes;
} elseif ($T == 2) {
    $datos['EX2'] = $texto_examenes;
} elseif ($T == 3) {
    $datos['EX3'] = $texto_examenes;
}

// Procesar Discapacidades D1-D7
$discapacidades = array();
for ($d = 1; $d <= 7; $d++) {
    $campo = 'D' . $d;
    if (isset($row[$campo]) && $row[$campo] == 1) {
        $discapacidades[] = $etiquetas_D[$d];
    }
}
$datos['DIS'] = !empty($discapacidades) ? implode('<br>', array_unique($discapacidades)) : '';

// Procesar Observaciones O1-O7
$observaciones = array();
for ($o = 1; $o <= 7; $o++) {
    $campo = 'O' . $o;
    if (isset($row[$campo]) && $row[$campo] != 0 && !empty($row[$campo])) {
        $observaciones[] = $row[$campo];
    }
}
$datos['O'] = !empty($observaciones) ? implode('<br>', array_unique($observaciones)) : '';

// Observación general
$datos['OBS'] = isset($row['O']) && !empty($row['O']) ? $row['O'] : '';

// Envolver en un array para que sea [] y no {}
$json = array($datos);

$jsonstring = json_encode($json, JSON_UNESCAPED_UNICODE);
echo $jsonstring;
?>