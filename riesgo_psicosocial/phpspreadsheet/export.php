<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;

// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Configuración de conexión a la base de datos
$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313', 'cedisalud_usuario');
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}
mysqli_set_charset($mysqli, "utf8");

// Validar y obtener parámetros
$id_admin = $_POST['id_usuario'] ?? null;
if (!$id_admin) {
    die("Error: ID de usuario no proporcionado");
}

// Obtener información del administrador
$sql0 = "SELECT * FROM admin WHERE id = ?";
$stmt0 = $mysqli->prepare($sql0);
$stmt0->bind_param("s", $id_admin);
$stmt0->execute();
$resultado0 = $stmt0->get_result();
$row0 = $resultado0->fetch_array(MYSQLI_ASSOC);
$Razon = $row0['Razon'] ?? 'Sin_Razon';
$stmt0->close();

// Función auxiliar para obtener datos de controles
function obtenerDatosControl($mysqli, $id_admin, $campo, $condicion) {
    $sql = "SELECT $campo FROM controles WHERE id_admin = ? AND $condicion";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $id_admin);
    $stmt->execute();
    $resultado = $stmt->get_result();
    
    $datos = [];
    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
        if (!empty($row[$campo])) {
            $datos[] = $row[$campo];
        }
    }
    $stmt->close();
    return $datos;
}

// Obtener fechas de inicio y terminación
$inicio0 = null;
$terminacion0 = null;

$sql_inicio = "SELECT Inicio FROM controles WHERE id_admin = ? AND Inicio0 = 1 LIMIT 1";
$stmt_inicio = $mysqli->prepare($sql_inicio);
$stmt_inicio->bind_param("s", $id_admin);
$stmt_inicio->execute();
$resultado_inicio = $stmt_inicio->get_result();
if ($row_inicio = $resultado_inicio->fetch_array(MYSQLI_ASSOC)) {
    $inicio0 = $row_inicio['Inicio'];
}
$stmt_inicio->close();

$sql_terminacion = "SELECT Terminacion FROM controles WHERE id_admin = ? AND Terminacion0 = 1 LIMIT 1";
$stmt_terminacion = $mysqli->prepare($sql_terminacion);
$stmt_terminacion->bind_param("s", $id_admin);
$stmt_terminacion->execute();
$resultado_terminacion = $stmt_terminacion->get_result();
if ($row_terminacion = $resultado_terminacion->fetch_array(MYSQLI_ASSOC)) {
    $terminacion0 = $row_terminacion['Terminacion'];
}
$stmt_terminacion->close();

// Formatear fechas para mostrar
$Inicio = $inicio0 ? date('d-m-Y', strtotime($inicio0)) : 'No definida';
$Terminacion = $terminacion0 ? date('d-m-Y', strtotime($terminacion0)) : 'No definida';

// Obtener datos filtrados
$certificadas = obtenerDatosControl($mysqli, $id_admin, 'Certificada', "Certificada != '' AND certificada_existe = '#e7744f'");
$sedes = obtenerDatosControl($mysqli, $id_admin, 'Sede', "Sede != '' AND sede_existe = '#e7744f'");
$areas = obtenerDatosControl($mysqli, $id_admin, 'Area', "Area != '' AND area_existe = '#e7744f'");

// Construir consulta principal con parámetros
$sql = "SELECT * FROM datosg WHERE Autor = ?";
$params = [$id_admin];
$types = "s";

// Agregar filtro de fechas si están disponibles
if ($inicio0 && $terminacion0) {
    $sql .= " AND Fecha_registro >= ? AND Fecha_registro <= ?";
    $params[] = $inicio0;
    $params[] = $terminacion0;
    $types .= "ss";
}

// Agregar filtro de certificadas si hay datos
if (!empty($certificadas)) {
    $placeholders = implode(',', array_fill(0, count($certificadas), '?'));
    $sql .= " AND Certificada IN ($placeholders)";
    $params = array_merge($params, $certificadas);
    $types .= str_repeat("s", count($certificadas));
}

// Agregar filtro de sedes si hay datos
if (!empty($sedes)) {
    $placeholders = implode(',', array_fill(0, count($sedes), '?'));
    $sql .= " AND Sede IN ($placeholders)";
    $params = array_merge($params, $sedes);
    $types .= str_repeat("s", count($sedes));
}

// Agregar filtro de áreas si hay datos
if (!empty($areas)) {
    $placeholders = implode(',', array_fill(0, count($areas), '?'));
    $sql .= " AND Area IN ($placeholders)";
    $params = array_merge($params, $areas);
    $types .= str_repeat("s", count($areas));
}

// Ejecutar consulta principal
$stmt = $mysqli->prepare($sql);
if (!$stmt) {
    die("Error en la preparación de la consulta: " . $mysqli->error);
}

$stmt->bind_param($types, ...$params);
$stmt->execute();
$resultado = $stmt->get_result();

$libros = [];
while($rows = $resultado->fetch_assoc()) {
    $libros[] = $rows;
} 
$stmt->close();
$mysqli->close();

// Si no hay datos, mostrar mensaje
if (empty($libros)) {
    die("No se encontraron datos para los criterios seleccionados");
}

// Configuración de estilos
    $tableHead0 = [
    	'font'=>[
    		'color'=>[
    			'rgb'=>'ffffff'
    		],
    		'bold'=>true,
    		'size'=>12
    	],
    	'fill'=>[
    		'fillType' => Fill::FILL_SOLID,
    		'startColor' => [
    			'rgb' => '006080',
    		]
    	],
    ];
    $tableHead = [
    	'font'=>[
    		'color'=>[
    			'rgb'=>'000000'
    		],
    		'bold'=>true,
    		'size'=>12
    	],
    	'fill'=>[
    		'fillType' => Fill::FILL_SOLID,
    		'startColor' => [
    			'rgb' => 'c1d6f0',
    		]
    	],
    ];
    $tableHead2 = [
    	'font'=>[
    		'color'=>[
    			'rgb'=>'000000'
    		],
    		'bold'=>true,
    		'size'=>12
    	],
    	'fill'=>[
    		'fillType' => Fill::FILL_SOLID,
    		'startColor' => [
    			'rgb' => 'ccffcc',
    		]
    	],
    ];
    $tableHead3 = [
    	'font'=>[
    		'color'=>[
    			'rgb'=>'000000'
    		],
    		'bold'=>true,
    		'size'=>12
    	],
    	'fill'=>[
    		'fillType' => Fill::FILL_SOLID,
    		'startColor' => [
    			'rgb' => 'f5f5dc',
    		]
    	],
    ];
    $tableHead4 = [
    	'font'=>[
    		'color'=>[
    			'rgb'=>'000000'
    		],
    		'bold'=>true,
    		'size'=>12
    	],
    	'fill'=>[
    		'fillType' => Fill::FILL_SOLID,
    		'startColor' => [
    			'rgb' => 'ffcccc',
    		]
    	],
    ];
    $tableHead5 = [
    	'font'=>[
    		'color'=>[
    			'rgb'=>'000000'
    		],
    		'bold'=>true,
    		'size'=>12
    	],
    	'fill'=>[
    		'fillType' => Fill::FILL_SOLID,
    		'startColor' => [
    			'rgb' => 'e4dfec',
    		]
    	],
    ];
    $tableHead6 = [
    	'font'=>[
    		'color'=>[
    			'rgb'=>'000000'
    		],
    		'bold'=>true,
    		'size'=>12
    	],
    	'fill'=>[
    		'fillType' => Fill::FILL_SOLID,
    		'startColor' => [
    			'rgb' => 'd9d9d9',
    		]
    	],
    ];
    $evenRow = [
    	'fill'=>[
    		'startColor' => [
    			'rgb' => '00BDFF'
    		]
    	],
    	'alignment' => [
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
        ],
    ];
    $oddRow = [
    	'fill'=>[
    		'startColor' => [
    			'rgb' => '00EAFF'
    		]
    	],
    	 'alignment' => [
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
        ],
    ];

// Crear el documento Excel
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle("Consolidado_general");

// Configurar dimensiones y estilos generales
$sheet->getDefaultRowDimension()->setRowHeight(25);

// Configurar anchos de columnas principales
$columnWidths = [
    'A' => 25, 'B' => 20, 'C' => 25, 'D' => 20, 'E' => 25, 
    'F' => 20, 'G' => 25, 'H' => 20, 'I' => 25, 'J' => 20,
    'K' => 20, 'L' => 20, 'M' => 25, 'N' => 15, 'O' => 15, 
    'P' => 20, 'Q' => 25, 'R' => 20, 'S' => 20, 'T' => 20,
    'U' => 15, 'V' => 15, 'W' => 20, 'X' => 20, 'Y' => 20,
    'Z' => 20, 'AA' => 15, 'AB' => 15, 'AC' => 15, 'AD' => 15,
    'AE' => 20, 'AF' => 15, 'AG' => 15, 'AH' => 15, 'AI' => 15,
    'AJ' => 15, 'AK' => 25, 'AL' => 15, 'AM' => 15
];

foreach ($columnWidths as $col => $width) {
    $sheet->getColumnDimension($col)->setWidth($width);
}

// Aplicar alineación central a todas las celdas
$sheet->getStyle('A1:EP' . (count($libros) + 1))->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

// Encabezados (simplificado - puedes expandir según necesites)
$headers = [
    'A' => "PUNTAJE TOTAL - Intralaboral y extralaboral",
    'B' => "Nivel de riesgo",
    'C' => "PUNTAJE TOTAL - INTRALABORAL - Forma A",
    'D' => "Nivel de riesgo",
    'E' => "PUNTAJE TOTAL - INTRALABORAL - Forma B",
    'F' => "Nivel de riesgo",
    'G' => "PUNTAJE TOTAL - EXTRALABORAL",
    'H' => "Nivel de riesgo",
    'I' => "PUNTAJE TOTAL - ESTRÉS",
    'J' => "Nivel de riesgo",
    'K' => "N° de Cédula",
    'L' => "Nombres",
    'M' => "Apellidos",
    'N' => "Género",
    'O' => "Edad",
    'P' => "Estado civil",
    'Q' => "Grado de escolaridad",
    'R' => "Ocupación",
    'S' => "Departamento residencia",
    'T' => "Municipio residencia",
    'U' => "Estrato",
    'V' => "Vivienda",
    'W' => "Dependencia",
    'X' => "Departamento trabajo",
    'Y' => "Municipio trabajo",
    'Z' => "Empresa",
    'AA' => "Certificada",
    'AB' => "Sede",
    'AC' => "Area",
    'AD' => "Años experiencia",
    'AE' => "Cargo",
    'AF' => "Nivel",
    'AG' => "Años compañía",
    'AH' => "Tipo",
    'AI' => "Horas",
    'AJ' => "Salario",
    'AK' => "Email",
    'AL' => "Celular",
    'AM' => "Fecha prueba",
    'AN' => "Fecha registro",
    'AO' => "",
    'AP' => "CL",
    'AQ' => "R_1",
    'AR' => "RS",
    'AS' => "R_2",
    'AT' => "RD",
    'AU' => "R_3",
    'AV' => "RC",
    'AW' => "R_4",
    'AX' => "LR",
    'AY' => "R_5",
    'AZ' => "CR",
    'BA' => "R_6",
    'BB' => "C",
    'BC' => "R_7",
    'BD' => "PM",
    'BE' => "R_8",
    'BF' => "PD",
    'BG' => "R_9",
    'BH' => "CA",
    'BI' => "R_10",
    'BJ' => "CT",
    'BK' => "R_11",
    'BL' => "DAE",
    'BM' => "R_12",
    'BN' => "DE",
    'BO' => "R_13",
    'BP' => "DC",
    'BQ' => "R_14",
    'BR' => "IT",
    'BS' => "R_15",
    'BT' => "ER",
    'BU' => "R_16",
    'BV' => "DCM",
    'BW' => "R_17",
    'BX' => "CRL",
    'BY' => "R_18",
    'BZ' => "DJT",
    'CA' => "R_19",
    'CB' => "DT",
    'CC' => "R_20",
    'CD' => "RP",
    'CE' => "R_21",
    'CF' => "RYC",
    'CG' => "R_22",
    'CH' => "R",
    'CI' => "R_23",
    'CJ' => "CLb",
    'CK' => "R_25",
    'CL' => "RSb",
    'CM' => "R_26",
    'CN' => "RDb",
    'CO' => "R_27",
    'CP' => "LRb",
    'CQ' => "R_28",
    'CR' => "CRb",
    'CS' => "R_29",
    'CT' => "Cb",
    'CU' => "R_30",
    'CV' => "PMb",
    'CW' => "R_31",
    'CX' => "PDb",
    'CY' => "R_32",
    'CZ' => "CAb",
    'DA' => "R_33",
    'DB' => "CTb",
    'DC' => "R_34",
    'DD' => "DAEb",
    'DE' => "R_35",
    'DF' => "DEb",
    'DG' => "R_36",
    'DH' => "DCb",
    'DI' => "R_37",
    'DJ' => "ITb",
    'DK' => "R_38",
    'DL' => "DCMb",
    'DM' => "R_39",
    'DN' => "DJTb",
    'DO' => "R_40",
    'DP' => "DTb",
    'DQ' => "R_41",
    'DR' => "RPb",
    'DS' => "R_42",
    'DT' => "RYCb",
    'DU' => "R_43",
    'DV' => "Rb",
    'DW' => "R_44",
    'DX' => "TF2",
    'DY' => "R_46",
    'DZ' => "RF2",
    'EA' => "R_47",
    'EB' => "CRI2",
    'EC' => "R_48",
    'ED' => "SE2",
    'EE' => "R_49",
    'EF' => "CV2",
    'EG' => "R_50",
    'EH' => "IE2",
    'EI' => "R_51",
    'EJ' => "DV2",
    'EK' => "R_52",
    'EL' => "Observaciones",
    'EM' => "Recomendaciones"
];

foreach ($headers as $col => $value) {
    $sheet->setCellValue($col.'1', $value);
}

// Aplicar estilo a los encabezados
$sheet->getStyle('A1:EM1')->applyFromArray($tableHead);

// Datos
$row = 2;
foreach($libros as $libro) {
    $Apellidos = $libro['Apellido1'].' '.$libro['Apellido2'];
    $sheet->setCellValue('A'.$row, $libro['IAB'] ?? '')
          ->setCellValue('B'.$row, $libro['R_0'] ?? '')
          ->setCellValue('C'.$row, $libro['IntraA'] ?? '')
          ->setCellValue('D'.$row, $libro['R_24'] ?? '')
          ->setCellValue('E'.$row, $libro['IntraB'] ?? '')
          ->setCellValue('F'.$row, $libro['R_45'] ?? '')
          ->setCellValue('G'.$row, $libro['Extra'] ?? '')
          ->setCellValue('H'.$row, $libro['R_53'] ?? '')
          ->setCellValue('I'.$row, $libro['Estres'] ?? '')
          ->setCellValue('J'.$row, $libro['R_54'] ?? '')
          ->setCellValue('K'.$row, $libro['Cedula'] ?? '')
          ->setCellValue('L'.$row, $libro['Nombre'] ?? '')
          ->setCellValue('M'.$row, $Apellidos ?? '') 
          ->setCellValue('N'.$row, $libro['Genero'] ?? '')
          ->setCellValue('O'.$row, $libro['Edad'] ?? '')
          ->setCellValue('P'.$row, $libro['Civil'] ?? '')
          ->setCellValue('Q'.$row, $libro['Escolaridad'] ?? '')
          ->setCellValue('R'.$row, $libro['Ocupacion'] ?? '')
          ->setCellValue('S'.$row, $libro['Departamentor'] ?? '')
          ->setCellValue('T'.$row, $libro['Municipior'] ?? '')
          ->setCellValue('U'.$row, $libro['Estrato'] ?? '')
          ->setCellValue('V'.$row, $libro['Vivienda'] ?? '')
          ->setCellValue('W'.$row, $libro['Dependencia'] ?? '')
          ->setCellValue('X'.$row, $libro['Departamentot'] ?? '')
          ->setCellValue('Y'.$row, $libro['Municipiot'] ?? '')
          ->setCellValue('Z'.$row, $libro['Empresa'] ?? '')
          ->setCellValue('AA'.$row, $libro['Certificada'] ?? '')
          ->setCellValue('AB'.$row, $libro['Sede'] ?? '')
          ->setCellValue('AC'.$row, $libro['Area'] ?? '')
          ->setCellValue('AD'.$row, $libro['Añose'] ?? '')
          ->setCellValue('AE'.$row, $libro['Cargo'] ?? '')
          ->setCellValue('AF'.$row, $libro['Nivel'] ?? '')
          ->setCellValue('AG'.$row, $libro['Añosc'] ?? '')
          ->setCellValue('AH'.$row, $libro['Tipo'] ?? '')
          ->setCellValue('AI'.$row, $libro['Horas'] ?? '')
          ->setCellValue('AJ'.$row, $libro['Salario'] ?? '')
          ->setCellValue('AK'.$row, $libro['Email'] ?? '')
          ->setCellValue('AL'.$row, $libro['Celular'] ?? '')
          ->setCellValue('AM'.$row, $libro['Fecha_prueba'] ?? '')
          ->setCellValue('AN'.$row, $libro['Fecha_registro'] ?? '')
          ->setCellValue('AO'.$row, '' ?? '')
          ->setCellValue('AP'.$row, $libro['CL'] ?? '')
          ->setCellValue('AQ'.$row, $libro['R_1'] ?? '')
          ->setCellValue('AR'.$row, $libro['RS'] ?? '')
          ->setCellValue('AS'.$row, $libro['R_2'] ?? '')
          ->setCellValue('AT'.$row, $libro['RD'] ?? '')
          ->setCellValue('AU'.$row, $libro['R_3'] ?? '')
          ->setCellValue('AV'.$row, $libro['RC'] ?? '')
          ->setCellValue('AW'.$row, $libro['R_4'] ?? '')
          ->setCellValue('AX'.$row, $libro['LR'] ?? '')
          ->setCellValue('AY'.$row, $libro['R_5'] ?? '')
          ->setCellValue('AZ'.$row, $libro['CR'] ?? '')
          ->setCellValue('BA'.$row, $libro['R_6'] ?? '')
          ->setCellValue('BB'.$row, $libro['C'] ?? '')
          ->setCellValue('BC'.$row, $libro['R_7'] ?? '')
          ->setCellValue('BD'.$row, $libro['PM'] ?? '')
          ->setCellValue('BE'.$row, $libro['R_8'] ?? '')
          ->setCellValue('BF'.$row, $libro['PD'] ?? '')
          ->setCellValue('BG'.$row, $libro['R_9'] ?? '')
          ->setCellValue('BH'.$row, $libro['CA'] ?? '')
          ->setCellValue('BI'.$row, $libro['R_10'] ?? '')
          ->setCellValue('BJ'.$row, $libro['CT'] ?? '')
          ->setCellValue('BK'.$row, $libro['R_11'] ?? '')
          ->setCellValue('BL'.$row, $libro['DAE'] ?? '')
          ->setCellValue('BM'.$row, $libro['R_12'] ?? '')
          ->setCellValue('BN'.$row, $libro['DE'] ?? '')
          ->setCellValue('BO'.$row, $libro['R_13'] ?? '')
          ->setCellValue('BP'.$row, $libro['DC'] ?? '')
          ->setCellValue('BQ'.$row, $libro['R_14'] ?? '')
          ->setCellValue('BR'.$row, $libro['IT'] ?? '')
          ->setCellValue('BS'.$row, $libro['R_15'] ?? '')
          ->setCellValue('BT'.$row, $libro['ER'] ?? '')
          ->setCellValue('BU'.$row, $libro['R_16'] ?? '')
          ->setCellValue('BV'.$row, $libro['DCM'] ?? '')
          ->setCellValue('BW'.$row, $libro['R_17'] ?? '')
          ->setCellValue('BX'.$row, $libro['CRL'] ?? '')
          ->setCellValue('BY'.$row, $libro['R_18'] ?? '')
          ->setCellValue('BZ'.$row, $libro['DJT'] ?? '')
          ->setCellValue('CA'.$row, $libro['R_19'] ?? '')
          ->setCellValue('CB'.$row, $libro['DT'] ?? '')
          ->setCellValue('CC'.$row, $libro['R_20'] ?? '')
          ->setCellValue('CD'.$row, $libro['RP'] ?? '')
          ->setCellValue('CE'.$row, $libro['R_21'] ?? '')
          ->setCellValue('CF'.$row, $libro['RYC'] ?? '')
          ->setCellValue('CG'.$row, $libro['R_22'] ?? '')
          ->setCellValue('CH'.$row, $libro['R'] ?? '')
          ->setCellValue('CI'.$row, $libro['R_23'] ?? '')
          ->setCellValue('CJ'.$row, $libro['CLb'] ?? '')
          ->setCellValue('CK'.$row, $libro['R_25'] ?? '')
          ->setCellValue('CL'.$row, $libro['RSb'] ?? '')
          ->setCellValue('CM'.$row, $libro['R_26'] ?? '')
          ->setCellValue('CN'.$row, $libro['RDb'] ?? '')
          ->setCellValue('CO'.$row, $libro['R_27'] ?? '')
          ->setCellValue('CP'.$row, $libro['LRb'] ?? '')
          ->setCellValue('CQ'.$row, $libro['R_28'] ?? '')
          ->setCellValue('CR'.$row, $libro['CRb'] ?? '')
          ->setCellValue('CS'.$row, $libro['R_29'] ?? '')
          ->setCellValue('CT'.$row, $libro['Cb'] ?? '')
          ->setCellValue('CU'.$row, $libro['R_30'] ?? '')
          ->setCellValue('CV'.$row, $libro['PMb'] ?? '')
          ->setCellValue('CW'.$row, $libro['R_31'] ?? '')
          ->setCellValue('CX'.$row, $libro['PDb'] ?? '')
          ->setCellValue('CY'.$row, $libro['R_32'] ?? '')
          ->setCellValue('CZ'.$row, $libro['CAb'] ?? '')
          ->setCellValue('DA'.$row, $libro['R_33'] ?? '')
          ->setCellValue('DB'.$row, $libro['CTb'] ?? '')
          ->setCellValue('DC'.$row, $libro['R_34'] ?? '')
          ->setCellValue('DD'.$row, $libro['DAEb'] ?? '')
          ->setCellValue('DE'.$row, $libro['R_35'] ?? '')
          ->setCellValue('DF'.$row, $libro['DEb'] ?? '')
          ->setCellValue('DG'.$row, $libro['R_36'] ?? '')
          ->setCellValue('DH'.$row, $libro['DCb'] ?? '')
          ->setCellValue('DI'.$row, $libro['R_37'] ?? '')
          ->setCellValue('DJ'.$row, $libro['ITb'] ?? '')
          ->setCellValue('DK'.$row, $libro['R_38'] ?? '')
          ->setCellValue('DL'.$row, $libro['DCMb'] ?? '')
          ->setCellValue('DM'.$row, $libro['R_39'] ?? '')
          ->setCellValue('DN'.$row, $libro['DJTb'] ?? '')
          ->setCellValue('DO'.$row, $libro['R_40'] ?? '')
          ->setCellValue('DP'.$row, $libro['DTb'] ?? '')
          ->setCellValue('DQ'.$row, $libro['R_41'] ?? '')
          ->setCellValue('DR'.$row, $libro['RPb'] ?? '')
          ->setCellValue('DS'.$row, $libro['R_42'] ?? '')
          ->setCellValue('DT'.$row, $libro['RYCb'] ?? '')
          ->setCellValue('DU'.$row, $libro['R_43'] ?? '')
          ->setCellValue('DV'.$row, $libro['Rb'] ?? '')
          ->setCellValue('DW'.$row, $libro['R_44'] ?? '')
          ->setCellValue('DX'.$row, $libro['TF2'] ?? '')
          ->setCellValue('DY'.$row, $libro['R_46'] ?? '')
          ->setCellValue('DZ'.$row, $libro['RF2'] ?? '')
          ->setCellValue('EA'.$row, $libro['R_47'] ?? '')
          ->setCellValue('EB'.$row, $libro['CRI2'] ?? '')
          ->setCellValue('EC'.$row, $libro['R_48'] ?? '')
          ->setCellValue('ED'.$row, $libro['SE2'] ?? '')
          ->setCellValue('EE'.$row, $libro['R_49'] ?? '')
          ->setCellValue('EF'.$row, $libro['CV2'] ?? '')
          ->setCellValue('EG'.$row, $libro['R_50'] ?? '')
          ->setCellValue('EH'.$row, $libro['IE2'] ?? '')
          ->setCellValue('EI'.$row, $libro['R_51'] ?? '')
          ->setCellValue('EJ'.$row, $libro['DV2'] ?? '')
          ->setCellValue('EK'.$row, $libro['R_52'] ?? '')
          ->setCellValue('EL'.$row, $libro['Observaciones'] ?? '')
          ->setCellValue('EM'.$row, $libro['Recomendaciones'] ?? '');
    
    // Aplicar estilo de fila
    $style = ($row % 2 == 0) ? $evenRow : $oddRow;
    $sheet->getStyle('A'.$row.':EM'.$row)->applyFromArray($style);
    
    $row++;
}


// Congelar paneles para mantener visibles los encabezados
$sheet->freezePane('A2');

// Configurar propiedades del documento
$spreadsheet->getProperties()
    ->setTitle('Riesgo Psicosocial - Cedisalud IPS')
    ->setDescription('Producto automatizado por https://www.perfilar.net')
    ->setCreator("Cedisalud IPS");

// Configurar headers para descarga
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Riesgo_psicosocial_'.$Razon.'_'.date('Y-m-d').'.xlsx"');
header('Cache-Control: max-age=0');
header('Pragma: no-cache');

// Guardar y enviar al navegador
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;
?>