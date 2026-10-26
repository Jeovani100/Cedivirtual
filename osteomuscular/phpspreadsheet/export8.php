<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;

// Configuración de conexión a la base de datos
$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313', 'cedisalud_usuario');
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}
mysqli_set_charset($mysqli, "utf8");

// Obtener fecha actual
$fecha = date('Y-m-d');
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

$sql = "SELECT * FROM locomocion WHERE id_admin = '$Codigo' && Fecha_registro >= '$Inicio0' && Fecha_registro <= '$Terminacion0' ORDER BY id DESC"; 
$resultado = $mysqli->query($sql);

$libros = array();
while($rows = $resultado->fetch_assoc()) {
    $libros[] = $rows;
}

// Definir $Tipo (variable que se usa más adelante)
$Tipo = ''; // Puedes asignar el valor adecuado aquí o modificarlo en el bucle

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
$sheet->setTitle("PVE_osteomuscular");

// Configurar dimensiones y estilos generales
$sheet->getDefaultRowDimension()->setRowHeight(30);
$columns = [
    'A' => 20, 'B' => 20, 'C' => 20, 'D' => 20, 'E' => 20, 
    'F' => 20, 'G' => 20, 'H' => 20, 'I' => 20, 'J' => 20,
    'K' => 20, 'L' => 20, 'M' => 20, 'N' => 20, 'O' => 20,
    'P' => 20, 'Q' => 20, 'R' => 20, 'S' => 20, 'T' => 20,
    'U' => 20, 'V' => 20, 'W' => 20, 'X' => 20, 'Y' => 20,
    'Z' => 20, 'AA' => 20, 'AB' => 20, 'AC' => 20, 'AD' => 20,
    'AE' => 20, 'AF' => 20, 'AG' => 20, 'AH' => 20, 'AI' => 20,
    'AJ' => 20, 'AK' => 20, 'AL' => 20, 'AM' => 20, 'AN' => 20,
    'AO' => 20, 'AP' => 20, 'AQ' => 20, 'AR' => 20, 'AS' => 20,
    'AT' => 20, 'AU' => 20, 'AV' => 20, 'AW' => 20, 'AX' => 20,
    'AY' => 20, 'AZ' => 20, 'BA' => 20, 'BB' => 20, 'BC' => 20,
    'BD' => 20, 'BE' => 20, 'BF' => 20, 'BG' => 20, 'BH' => 20,
    'BI' => 20, 'BJ' => 20, 'BK' => 20, 'BL' => 20, 'BM' => 20,
    'BN' => 20, 'BO' => 20, 'BP' => 20, 'BQ' => 20, 'BR' => 20,
    'BS' => 20, 'BT' => 20, 'BU' => 20, 'BV' => 20, 'BW' => 20,
    'BX' => 20, 'BY' => 20, 'BZ' => 20, 'CA' => 20, 'CB' => 20,
    'CC' => 20, 'CD' => 20, 'CE' => 20, 'CF' => 20, 'CG' => 20,
    'CH' => 20, 'CI' => 20, 'CJ' => 20, 'CK' => 20, 'CL' => 20,
    'CM' => 20, 'CN' => 20, 'CO' => 20, 'CP' => 20, 'CQ' => 20,
    'CR' => 20, 'CS' => 20, 'CT' => 20, 'CU' => 20, 'CV' => 20,
    'CW' => 20, 'CX' => 20, 'CY' => 20, 'CZ' => 20, 'DA' => 20,
    'DB' => 20, 'DC' => 20, 'DD' => 20, 'DE' => 20, 'DF' => 20,
    'DG' => 20, 'DH' => 20, 'DI' => 20, 'DJ' => 20, 'DK' => 20,
    'DL' => 20, 'DM' => 20, 'DN' => 20, 'DO' => 20, 'DP' => 20,
    'DQ' => 20, 'DR' => 20, 'DS' => 20, 'DT' => 20, 'DU' => 20,
    'DV' => 20, 'DW' => 20, 'DX' => 20, 'DY' => 20, 'DZ' => 20,
    'EA' => 20, 'EB' => 20, 'EC' => 20, 'ED' => 20, 'EE' => 20,
    'EF' => 20, 'EG' => 20, 'EH' => 20, 'EI' => 20, 'EJ' => 20,
    'EK' => 20, 'EL' => 20, 'EM' => 20, 'EN' => 20, 'EO' => 20,
    'EP' => 20, 'EQ' => 20, 'ER' => 20, 'ES' => 20, 'ET' => 20,
    'EU' => 20, 'EV' => 20, 'EW' => 20, 'EX' => 20, 'EY' => 20,
    'EZ' => 20, 'FA' => 20, 'FB' => 20, 'FC' => 20, 'FD' => 20,
    'FE' => 20, 'FF' => 20, 'FG' => 20, 'FH' => 20, 'FI' => 20,
    'FJ' => 20, 'FK' => 20, 'FL' => 20, 'FM' => 20, 'FN' => 20,
    'FO' => 20, 'FP' => 20, 'FQ' => 20, 'FR' => 20, 'FS' => 20,
    'FT' => 20, 'FU' => 20, 'FV' => 20, 'FW' => 20, 'FX' => 20,
    'FY' => 20
];
foreach ($columns as $col => $width) {
    $sheet->getColumnDimension($col)->setWidth($width);
    $sheet->getStyle($col)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
}

// Encabezados con las nuevas variables
$headers = [
    'A' => "Nombre",
    'B' => "Cedula",
    'C' => "Genero",
    'D' => "Edad",
    'E' => "Empresa",
    'F' => "Costo",
    'G' => "Sede",
    'H' => "Antiguedad_a",
    'I' => "Antiguedad_m",
    'J' => "Cargo",
    'K' => "Antiguedad2_a",
    'L' => "Antiguedad2_m",
    'M' => "Horas",
    'N' => "Postura",
    'O' => "Dominancia",
    'P' => "P1",
    'Q' => "P1_1",
    'R' => "P1_2",
    'S' => "P1_3",
    'T' => "P2",
    'U' => "P2_1",
    'V' => "P2_2",
    'W' => "P2_3",
    'X' => "P3_1",
    'Y' => "P3_1_1",
    'Z' => "P3_2",
    'AA' => "P3_2_1",
    'AB' => "P3_3",
    'AC' => "P3_3_1",
    'AD' => "P3_4",
    'AE' => "P3_4_1",
    'AF' => "P3_5",
    'AG' => "P3_5_1",
    'AH' => "P3_6",
    'AI' => "P4",
    'AJ' => "P4_1",
    'AK' => "P5",
    'AL' => "P6",
    'AM' => "P6_1",
    'AN' => "P6_2",
    'AO' => "P6_4_1",
    'AP' => "P6_4_2",
    'AQ' => "P6_4_3",
    'AR' => "P6_4_4",
    'AS' => "P6_4_5",
    'AT' => "P6_4_6",
    'AU' => "P6_4_7",
    'AV' => "P6_4_8",
    'AW' => "P6_4_9",
    'AX' => "P7",
    'AY' => "P8",
    'AZ' => "P8_1_1",
    'BA' => "P8_1_2",
    'BB' => "P8_2",
    'BC' => "P8_3",
    'BD' => "P8_4",
    'BE' => "P8_5",
    'BF' => "P8_6",
    'BG' => "P8_7",
    'BH' => "P8_8",
    'BI' => "P8_9",
    'BJ' => "P8_10",
    'BK' => "Riesgo1",
    'BL' => "P9",
    'BM' => "P9_1_1",
    'BN' => "P9_1_2",
    'BO' => "P9_2",
    'BP' => "P9_3",
    'BQ' => "P9_4",
    'BR' => "P9_5",
    'BS' => "P9_6",
    'BT' => "P9_7",
    'BU' => "P9_8",
    'BV' => "P9_9",
    'BW' => "P9_10",
    'BX' => "Riesgo2",
    'BY' => "P10",
    'BZ' => "P10_1_1",
    'CA' => "P10_1_2",
    'CB' => "P10_2",
    'CC' => "P10_3",
    'CD' => "P10_4",
    'CE' => "P10_5",
    'CF' => "P10_6",
    'CG' => "P10_7",
    'CH' => "P10_8",
    'CI' => "P10_9",
    'CJ' => "P10_10",
    'CK' => "Riesgo3",
    'CL' => "P11",
    'CM' => "P11_1_1",
    'CN' => "P11_1_2",
    'CO' => "P11_2",
    'CP' => "P11_3",
    'CQ' => "P11_4",
    'CR' => "P11_5",
    'CS' => "P11_6",
    'CT' => "P11_7",
    'CU' => "P11_8",
    'CV' => "P11_9",
    'CW' => "P11_10",
    'CX' => "Riesgo4",
    'CY' => "P12",
    'CZ' => "P12_1_1",
    'DA' => "P12_1_2",
    'DB' => "P12_2",
    'DC' => "P12_3",
    'DD' => "P12_4",
    'DE' => "P12_5",
    'DF' => "P12_6",
    'DG' => "P12_7",
    'DH' => "P12_8",
    'DI' => "P12_9",
    'DJ' => "P12_10",
    'DK' => "Riesgo5",
    'DL' => "P13",
    'DM' => "P13_1_1",
    'DN' => "P13_1_2",
    'DO' => "P13_2",
    'DP' => "P13_3",
    'DQ' => "P13_4",
    'DR' => "P13_5",
    'DS' => "P13_6",
    'DT' => "P13_7",
    'DU' => "P13_8",
    'DV' => "P13_9",
    'DW' => "P13_10",
    'DX' => "Riesgo6",
    'DY' => "P14",
    'DZ' => "P14_1_1",
    'EA' => "P14_1_2",
    'EB' => "P14_2",
    'EC' => "P14_3",
    'ED' => "P14_4",
    'EE' => "P14_5",
    'EF' => "P14_6",
    'EG' => "P14_7",
    'EH' => "P14_8",
    'EI' => "P14_9",
    'EJ' => "P14_10",
    'EK' => "Riesgo7",
    'EL' => "P15",
    'EM' => "P15_1_1",
    'EN' => "P15_1_2",
    'EO' => "P15_2",
    'EP' => "P15_3",
    'EQ' => "P15_4",
    'ER' => "P15_5",
    'ES' => "P15_6",
    'ET' => "P15_7",
    'EU' => "P15_8",
    'EV' => "P15_9",
    'EW' => "P15_10",
    'EX' => "Riesgo8",
    'EY' => "P16",
    'EZ' => "P16_1_1",
    'FA' => "P16_1_2",
    'FB' => "P16_2",
    'FC' => "P16_3",
    'FD' => "P16_4",
    'FE' => "P16_5",
    'FF' => "P16_6",
    'FG' => "P16_7",
    'FH' => "P16_8",
    'FI' => "P16_9",
    'FJ' => "P16_10",
    'FK' => "Riesgo9",
    'FL' => "GES",
    'FM' => "Riesgo",
    'FN' => "bs_estado",
    'FO' => "Email",
    'FP' => "Celular",
    'FQ' => "Enfermedad",
    'FR' => "Notificacion",
    'FS' => "Enviado",
    'FT' => "Estado",
    'FU' => "Caso",
    'FV' => "Obs_estado",
    'FW' => "Obs_caso",
    'FX' => "Fecha_registro"
];

foreach ($headers as $col => $value) {
    $sheet->setCellValue($col.'1', $value);
}

$sheet->getStyle('A1:FX1')->applyFromArray($tableHead);

// Datos con las nuevas variables
$row = 2;
foreach($libros as $libro) {
    $spreadsheet->getActiveSheet()
        ->setCellValue('A'.$row, $libro['Nombre'] ?? '')
        ->setCellValue('B'.$row, $libro['Cedula'] ?? '')
        ->setCellValue('C'.$row, $libro['Genero'] ?? '')
        ->setCellValue('D'.$row, $libro['Edad'] ?? '')
        ->setCellValue('E'.$row, $libro['Empresa'] ?? '')
        ->setCellValue('F'.$row, $libro['Costo'] ?? '')
        ->setCellValue('G'.$row, $libro['Sede'] ?? '')
        ->setCellValue('H'.$row, $libro['Antiguedad_a'] ?? '')
        ->setCellValue('I'.$row, $libro['Antiguedad_m'] ?? '')
        ->setCellValue('J'.$row, $libro['Cargo'] ?? '')
        ->setCellValue('K'.$row, $libro['Antiguedad2_a'] ?? '')
        ->setCellValue('L'.$row, $libro['Antiguedad2_m'] ?? '')
        ->setCellValue('M'.$row, $libro['Horas'] ?? '')
        ->setCellValue('N'.$row, $libro['Postura'] ?? '')
        ->setCellValue('O'.$row, $libro['Dominancia'] ?? '')
        ->setCellValue('P'.$row, $libro['P1'] ?? '')
        ->setCellValue('Q'.$row, $libro['P1_1'] ?? '')
        ->setCellValue('R'.$row, $libro['P1_2'] ?? '')
        ->setCellValue('S'.$row, $libro['P1_3'] ?? '')
        ->setCellValue('T'.$row, $libro['P2'] ?? '')
        ->setCellValue('U'.$row, $libro['P2_1'] ?? '')
        ->setCellValue('V'.$row, $libro['P2_2'] ?? '')
        ->setCellValue('W'.$row, $libro['P2_3'] ?? '')
        ->setCellValue('X'.$row, $libro['P3_1'] ?? '')
        ->setCellValue('Y'.$row, $libro['P3_1_1'] ?? '')
        ->setCellValue('Z'.$row, $libro['P3_2'] ?? '')
        ->setCellValue('AA'.$row, $libro['P3_2_1'] ?? '')
        ->setCellValue('AB'.$row, $libro['P3_3'] ?? '')
        ->setCellValue('AC'.$row, $libro['P3_3_1'] ?? '')
        ->setCellValue('AD'.$row, $libro['P3_4'] ?? '')
        ->setCellValue('AE'.$row, $libro['P3_4_1'] ?? '')
        ->setCellValue('AF'.$row, $libro['P3_5'] ?? '')
        ->setCellValue('AG'.$row, $libro['P3_5_1'] ?? '')
        ->setCellValue('AH'.$row, $libro['P3_6'] ?? '')
        ->setCellValue('AI'.$row, $libro['P4'] ?? '')
        ->setCellValue('AJ'.$row, $libro['P4_1'] ?? '')
        ->setCellValue('AK'.$row, $libro['P5'] ?? '')
        ->setCellValue('AL'.$row, $libro['P6'] ?? '')
        ->setCellValue('AM'.$row, $libro['P6_1'] ?? '')
        ->setCellValue('AN'.$row, $libro['P6_2'] ?? '')
        ->setCellValue('AO'.$row, $libro['P6_4_1'] ?? '')
        ->setCellValue('AP'.$row, $libro['P6_4_2'] ?? '')
        ->setCellValue('AQ'.$row, $libro['P6_4_3'] ?? '')
        ->setCellValue('AR'.$row, $libro['P6_4_4'] ?? '')
        ->setCellValue('AS'.$row, $libro['P6_4_5'] ?? '')
        ->setCellValue('AT'.$row, $libro['P6_4_6'] ?? '')
        ->setCellValue('AU'.$row, $libro['P6_4_7'] ?? '')
        ->setCellValue('AV'.$row, $libro['P6_4_8'] ?? '')
        ->setCellValue('AW'.$row, $libro['P6_4_9'] ?? '')
        ->setCellValue('AX'.$row, $libro['P7'] ?? '')
        ->setCellValue('AY'.$row, $libro['P8'] ?? '')
        ->setCellValue('AZ'.$row, $libro['P8_1_1'] ?? '')
        ->setCellValue('BA'.$row, $libro['P8_1_2'] ?? '')
        ->setCellValue('BB'.$row, $libro['P8_2'] ?? '')
        ->setCellValue('BC'.$row, $libro['P8_3'] ?? '')
        ->setCellValue('BD'.$row, $libro['P8_4'] ?? '')
        ->setCellValue('BE'.$row, $libro['P8_5'] ?? '')
        ->setCellValue('BF'.$row, $libro['P8_6'] ?? '')
        ->setCellValue('BG'.$row, $libro['P8_7'] ?? '')
        ->setCellValue('BH'.$row, $libro['P8_8'] ?? '')
        ->setCellValue('BI'.$row, $libro['P8_9'] ?? '')
        ->setCellValue('BJ'.$row, $libro['P8_10'] ?? '')
        ->setCellValue('BK'.$row, $libro['Riesgo1'] ?? '')
        ->setCellValue('BL'.$row, $libro['P9'] ?? '')
        ->setCellValue('BM'.$row, $libro['P9_1_1'] ?? '')
        ->setCellValue('BN'.$row, $libro['P9_1_2'] ?? '')
        ->setCellValue('BO'.$row, $libro['P9_2'] ?? '')
        ->setCellValue('BP'.$row, $libro['P9_3'] ?? '')
        ->setCellValue('BQ'.$row, $libro['P9_4'] ?? '')
        ->setCellValue('BR'.$row, $libro['P9_5'] ?? '')
        ->setCellValue('BS'.$row, $libro['P9_6'] ?? '')
        ->setCellValue('BT'.$row, $libro['P9_7'] ?? '')
        ->setCellValue('BU'.$row, $libro['P9_8'] ?? '')
        ->setCellValue('BV'.$row, $libro['P9_9'] ?? '')
        ->setCellValue('BW'.$row, $libro['P9_10'] ?? '')
        ->setCellValue('BX'.$row, $libro['Riesgo2'] ?? '')
        ->setCellValue('BY'.$row, $libro['P10'] ?? '')
        ->setCellValue('BZ'.$row, $libro['P10_1_1'] ?? '')
        ->setCellValue('CA'.$row, $libro['P10_1_2'] ?? '')
        ->setCellValue('CB'.$row, $libro['P10_2'] ?? '')
        ->setCellValue('CC'.$row, $libro['P10_3'] ?? '')
        ->setCellValue('CD'.$row, $libro['P10_4'] ?? '')
        ->setCellValue('CE'.$row, $libro['P10_5'] ?? '')
        ->setCellValue('CF'.$row, $libro['P10_6'] ?? '')
        ->setCellValue('CG'.$row, $libro['P10_7'] ?? '')
        ->setCellValue('CH'.$row, $libro['P10_8'] ?? '')
        ->setCellValue('CI'.$row, $libro['P10_9'] ?? '')
        ->setCellValue('CJ'.$row, $libro['P10_10'] ?? '')
        ->setCellValue('CK'.$row, $libro['Riesgo3'] ?? '')
        ->setCellValue('CL'.$row, $libro['P11'] ?? '')
        ->setCellValue('CM'.$row, $libro['P11_1_1'] ?? '')
        ->setCellValue('CN'.$row, $libro['P11_1_2'] ?? '')
        ->setCellValue('CO'.$row, $libro['P11_2'] ?? '')
        ->setCellValue('CP'.$row, $libro['P11_3'] ?? '')
        ->setCellValue('CQ'.$row, $libro['P11_4'] ?? '')
        ->setCellValue('CR'.$row, $libro['P11_5'] ?? '')
        ->setCellValue('CS'.$row, $libro['P11_6'] ?? '')
        ->setCellValue('CT'.$row, $libro['P11_7'] ?? '')
        ->setCellValue('CU'.$row, $libro['P11_8'] ?? '')
        ->setCellValue('CV'.$row, $libro['P11_9'] ?? '')
        ->setCellValue('CW'.$row, $libro['P11_10'] ?? '')
        ->setCellValue('CX'.$row, $libro['Riesgo4'] ?? '')
        ->setCellValue('CY'.$row, $libro['P12'] ?? '')
        ->setCellValue('CZ'.$row, $libro['P12_1_1'] ?? '')
        ->setCellValue('DA'.$row, $libro['P12_1_2'] ?? '')
        ->setCellValue('DB'.$row, $libro['P12_2'] ?? '')
        ->setCellValue('DC'.$row, $libro['P12_3'] ?? '')
        ->setCellValue('DD'.$row, $libro['P12_4'] ?? '')
        ->setCellValue('DE'.$row, $libro['P12_5'] ?? '')
        ->setCellValue('DF'.$row, $libro['P12_6'] ?? '')
        ->setCellValue('DG'.$row, $libro['P12_7'] ?? '')
        ->setCellValue('DH'.$row, $libro['P12_8'] ?? '')
        ->setCellValue('DI'.$row, $libro['P12_9'] ?? '')
        ->setCellValue('DJ'.$row, $libro['P12_10'] ?? '')
        ->setCellValue('DK'.$row, $libro['Riesgo5'] ?? '')
        ->setCellValue('DL'.$row, $libro['P13'] ?? '')
        ->setCellValue('DM'.$row, $libro['P13_1_1'] ?? '')
        ->setCellValue('DN'.$row, $libro['P13_1_2'] ?? '')
        ->setCellValue('DO'.$row, $libro['P13_2'] ?? '')
        ->setCellValue('DP'.$row, $libro['P13_3'] ?? '')
        ->setCellValue('DQ'.$row, $libro['P13_4'] ?? '')
        ->setCellValue('DR'.$row, $libro['P13_5'] ?? '')
        ->setCellValue('DS'.$row, $libro['P13_6'] ?? '')
        ->setCellValue('DT'.$row, $libro['P13_7'] ?? '')
        ->setCellValue('DU'.$row, $libro['P13_8'] ?? '')
        ->setCellValue('DV'.$row, $libro['P13_9'] ?? '')
        ->setCellValue('DW'.$row, $libro['P13_10'] ?? '')
        ->setCellValue('DX'.$row, $libro['Riesgo6'] ?? '')
        ->setCellValue('DY'.$row, $libro['P14'] ?? '')
        ->setCellValue('DZ'.$row, $libro['P14_1_1'] ?? '')
        ->setCellValue('EA'.$row, $libro['P14_1_2'] ?? '')
        ->setCellValue('EB'.$row, $libro['P14_2'] ?? '')
        ->setCellValue('EC'.$row, $libro['P14_3'] ?? '')
        ->setCellValue('ED'.$row, $libro['P14_4'] ?? '')
        ->setCellValue('EE'.$row, $libro['P14_5'] ?? '')
        ->setCellValue('EF'.$row, $libro['P14_6'] ?? '')
        ->setCellValue('EG'.$row, $libro['P14_7'] ?? '')
        ->setCellValue('EH'.$row, $libro['P14_8'] ?? '')
        ->setCellValue('EI'.$row, $libro['P14_9'] ?? '')
        ->setCellValue('EJ'.$row, $libro['P14_10'] ?? '')
        ->setCellValue('EK'.$row, $libro['Riesgo7'] ?? '')
        ->setCellValue('EL'.$row, $libro['P15'] ?? '')
        ->setCellValue('EM'.$row, $libro['P15_1_1'] ?? '')
        ->setCellValue('EN'.$row, $libro['P15_1_2'] ?? '')
        ->setCellValue('EO'.$row, $libro['P15_2'] ?? '')
        ->setCellValue('EP'.$row, $libro['P15_3'] ?? '')
        ->setCellValue('EQ'.$row, $libro['P15_4'] ?? '')
        ->setCellValue('ER'.$row, $libro['P15_5'] ?? '')
        ->setCellValue('ES'.$row, $libro['P15_6'] ?? '')
        ->setCellValue('ET'.$row, $libro['P15_7'] ?? '')
        ->setCellValue('EU'.$row, $libro['P15_8'] ?? '')
        ->setCellValue('EV'.$row, $libro['P15_9'] ?? '')
        ->setCellValue('EW'.$row, $libro['P15_10'] ?? '')
        ->setCellValue('EX'.$row, $libro['Riesgo8'] ?? '')
        ->setCellValue('EY'.$row, $libro['P16'] ?? '')
        ->setCellValue('EZ'.$row, $libro['P16_1_1'] ?? '')
        ->setCellValue('FA'.$row, $libro['P16_1_2'] ?? '')
        ->setCellValue('FB'.$row, $libro['P16_2'] ?? '')
        ->setCellValue('FC'.$row, $libro['P16_3'] ?? '')
        ->setCellValue('FD'.$row, $libro['P16_4'] ?? '')
        ->setCellValue('FE'.$row, $libro['P16_5'] ?? '')
        ->setCellValue('FF'.$row, $libro['P16_6'] ?? '')
        ->setCellValue('FG'.$row, $libro['P16_7'] ?? '')
        ->setCellValue('FH'.$row, $libro['P16_8'] ?? '')
        ->setCellValue('FI'.$row, $libro['P16_9'] ?? '')
        ->setCellValue('FJ'.$row, $libro['P16_10'] ?? '')
        ->setCellValue('FK'.$row, $libro['Riesgo9'] ?? '')
        ->setCellValue('FL'.$row, $libro['GES'] ?? '')
        ->setCellValue('FM'.$row, $libro['Riesgo'] ?? '')
        ->setCellValue('FN'.$row, $libro['bs_estado'] ?? '')
        ->setCellValue('FO'.$row, $libro['Email'] ?? '')
        ->setCellValue('FP'.$row, $libro['Celular'] ?? '')
        ->setCellValue('FQ'.$row, $libro['Enfermedad'] ?? '')
        ->setCellValue('FR'.$row, $libro['Notificacion'] ?? '')
        ->setCellValue('FS'.$row, $libro['Enviado'] ?? '')
        ->setCellValue('FT'.$row, $libro['Estado'] ?? '')
        ->setCellValue('FU'.$row, $libro['Caso'] ?? '')
        ->setCellValue('FV'.$row, $libro['Obs_estado'] ?? '')
        ->setCellValue('FW'.$row, $libro['Obs_caso'] ?? '')
        ->setCellValue('FX'.$row, $libro['Fecha_registro'] ?? '');
    
    $style = ($row % 2 == 0) ? $evenRow : $oddRow;
    $sheet->getStyle('A'.$row.':FX'.$row)->applyFromArray($style);
    $row++;
}

// Configurar propiedades del documento
$spreadsheet->getProperties()
    ->setTitle('PVE_osteomuscular - Cedisalud IPS')
    ->setDescription('Producto automatizado por https://www.perfilar.net')
    ->setCreator("Cedisalud IPS");

// Configurar headers para descarga
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="PVE_osteomuscular_'.date('Y-m-d').'.xlsx"');
header('Cache-Control: max-age=0');

// Guardar y enviar al navegador
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;
?>



