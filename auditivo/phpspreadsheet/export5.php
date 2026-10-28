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
$id_admin = $_POST['Codigo'];

$sql = "SELECT * FROM formulario_nutricional ORDER BY id DESC"; 
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
$sheet->setTitle("Consolidado_nutricional");

// Configurar dimensiones y estilos generales
$sheet->getDefaultRowDimension()->setRowHeight(30);
$columns = [
    'A' => 20, 'B' => 20, 'C' => 20, 'D' => 20, 'E' => 20, 
    'F' => 20, 'G' => 20, 'H' => 20, 'I' => 20, 'J' => 20,
    'K' => 20, 'L' => 20, 'M' => 20, 'N' => 20, 'O' => 20,
    'P' => 20, 'Q' => 20, 'R' => 20, 'S' => 20, 'T' => 20,
    'U' => 20, 'V' => 20, 'W' => 20, 'X' => 20, 'Y' => 20,
    'Z' => 20, 'AA' => 20
];

foreach ($columns as $col => $width) {
    $sheet->getColumnDimension($col)->setWidth($width);
    
    // Aplicar alineación según la columna
    if ($col == 'B' || $col == 'E') {
        $sheet->getStyle($col)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
    } else {
        $sheet->getStyle($col)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    }
}

// Encabezados
$headers = [
    'A' => "Codigo de la empresa",
    'B' => "Nombre",
    'C' => "Edad",
    'D' => "Email",
    'E' => "Empresa",
    'F' => "1. ¿Cuántas porciones de fruta consumes al día?",
    'G' => "2. ¿Incluyes verduras/hortalizas en tu almuerzo y cena?",
    'H' => "3. ¿Cuál es tu principal fuente de hidratación?",
    'I' => "4. ¿Con qué frecuencia consumes leguminosas (frijol, lenteja)?",
    'J' => "5. ¿Qué tipo de cereales prefieres?",
    'K' => "6. ¿Cuántas veces por semana consumes 'comida rápida'?",
    'L' => "7. ¿Consumes snacks procesados (paquetes, galletas)?",
    'M' => "8. ¿Cuál es tu grasa principal para cocinar?",
    'N' => "9. ¿Cuántas veces por semana consumes pescados/omega 3?",
    'O' => "10. ¿Cómo describirías el tamaño de tus porciones?",
    'P' => "Termómetro del hambre",
    'Q' => "1. ¿Evitas comer aunque tengas hambre para no ganar peso? (Restricción Cognitiva)",
    'R' => "2. ¿Sientes que pierdes el control sobre todo cuánto comes? (Descontrol Alimentario)",
    'S' => "3. ¿Comes más cuando te sientes ansioso/a, triste o aburrido/a? (Alimentación Emocional)",
    'T' => "4. ¿Te sientes culpable o con remordimiento después de comer?",
    'U' => "5. ¿Te pesas obsesivamente o te preocupa en exceso tu silueta?",
    'V' => "6. ¿Sueles comer a escondidas o te da vergüenza que te vean comer?",
    'W' => "7. ¿Cuentas las calorías de todo lo que ingieres de forma rígida? (Restricción Cognitiva)",
    'X' => "8. ¿Sientes una necesidad física de comer algo dulce/graso tras un día difícil? (Alimentación Emocional)",
    'Y' => "9. ¿Prefieres comer solo/a para poder comer grandes cantidades?",
    'Z' => "10. ¿Sientes que tu valor como persona depende de lo que marca la báscula?",
    'AA' => "Fecha_registro",
];

foreach ($headers as $col => $value) {
    $sheet->setCellValue($col.'1', $value);
}

$sheet->getStyle('A1:AA1')->applyFromArray($tableHead);

// Datos
$row = 2;
foreach($libros as $libro) {
    $spreadsheet->getActiveSheet()
        ->setCellValue('A'.$row, $libro['Codigo'] ?? '')
        ->setCellValue('B'.$row, $libro['Nombre'] ?? '')
        ->setCellValue('C'.$row, $libro['Edad'] ?? '')
        ->setCellValue('D'.$row, $libro['Email'] ?? '')
        ->setCellValue('E'.$row, $libro['Empresa'] ?? '')
        ->setCellValue('F'.$row, $libro['P1'] ?? '')
        ->setCellValue('G'.$row, $libro['P2'] ?? '')
        ->setCellValue('H'.$row, $libro['P3'] ?? '')
        ->setCellValue('I'.$row, $libro['P4'] ?? '')
        ->setCellValue('J'.$row, $libro['P5'] ?? '')
        ->setCellValue('K'.$row, $libro['P6'] ?? '')
        ->setCellValue('L'.$row, $libro['P7'] ?? '')
        ->setCellValue('M'.$row, $libro['P8'] ?? '')
        ->setCellValue('N'.$row, $libro['P9'] ?? '')
        ->setCellValue('O'.$row, $libro['P10'] ?? '')
        ->setCellValue('P'.$row, $libro['P11'] ?? '')
        ->setCellValue('Q'.$row, $libro['P_1'] ?? '')
        ->setCellValue('R'.$row, $libro['P_2'] ?? '')
        ->setCellValue('S'.$row, $libro['P_3'] ?? '')
        ->setCellValue('T'.$row, $libro['P_4'] ?? '')
        ->setCellValue('U'.$row, $libro['P_5'] ?? '')
        ->setCellValue('V'.$row, $libro['P_6'] ?? '')
        ->setCellValue('W'.$row, $libro['P_7'] ?? '')
        ->setCellValue('X'.$row, $libro['P_8'] ?? '')
        ->setCellValue('Y'.$row, $libro['P_9'] ?? '')
        ->setCellValue('Z'.$row, $libro['P_10'] ?? '')
        ->setCellValue('AA'.$row, $libro['Fecha_registro'] ?? '');
    
    $style = ($row % 2 == 0) ? $evenRow : $oddRow;
    $sheet->getStyle('A'.$row.':AA'.$row)->applyFromArray($style);
    $row++;
}

// Configurar propiedades del documento
$spreadsheet->getProperties()
    ->setTitle('PVE_auditivo - Cedisalud IPS')
    ->setDescription('Producto automatizado por https://www.perfilar.net')
    ->setCreator("Cedisalud IPS");

// Configurar headers para descarga
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="PVE_auditivo_'.date('Y-m-d').'.xlsx"');
header('Cache-Control: max-age=0');

// Guardar y enviar al navegador
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;
?>