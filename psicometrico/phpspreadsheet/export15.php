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
$id_admin = $_POST['id_usuario'];

$sql = "SELECT * FROM formulario_stopbang ORDER BY id DESC LIMIT 200"; 
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
$sheet->setTitle("Stop_bang");

// Configurar dimensiones y estilos generales
$sheet->getDefaultRowDimension()->setRowHeight(30);
$columns = [
    'A' => 50, 'B' => 20, 'C' => 20, 'D' => 20, 'E' => 20, 
    'F' => 20, 'G' => 20, 'H' => 20, 'I' => 20, 'J' => 20,
    'K' => 20, 'L' => 20, 'M' => 20, 'N' => 20, 'O' => 20,
    'P' => 20, 'Q' => 20
];
foreach ($columns as $col => $width) {
    $sheet->getColumnDimension($col)->setWidth($width);
}
$sheet->getStyle('A1:Q1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('A2:A' . $sheet->getHighestRow()) ->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
// Encabezados con las nuevas variables
$headers = [
    'A' => "Nombre",
    'B' => "Edad",
    'C' => "Estado civil",
    'D' => "Empresa",
    'E' => "Sede",
    'F' => "¿Ronca alto (lo suficientemente alto para oírse a través de las puertas cerradas o para que su pareja le dé codazos por roncar por la noche)?",
    'G' => "¿Se siente a menudo cansado/a, fatigado/a o somnoliento/a durante el día (como, por ejemplo, quedarse dormido/a mientras conduce)?",
    'H' => "¿Alguien ha observado que usted dejara de respirar o que se ahogara/quedara sin aliento mientras duerme?",
    'I' => "¿Padece o está recibiendo algún tratamiento para la hipertensión",
    'J' => "¿El índice de masa corporal es superior a 35 kg/m2?",
    'K' => "¿Tiene más de 50 años?",
    'L' => "¿Cuál es la circunferencia de su cuello? (mídala alrededor de la nuez) Para hombres, ¿el cuello de la camisa mide 43 cm o más? Para mujeres, ¿el cuello de la camisa mide 41 cm o más?",
    'M' => "Sexo= ¿hombre?",
    'N' => "Total",
    'O' => "IMC",
    'P' => "Cuello",
    'Q' => "Fecha del registro"
];
foreach ($headers as $col => $value) {
    $sheet->setCellValue($col.'1', $value);
}
$sheet->getStyle('A1:Q1')->applyFromArray($tableHead);
// Datos con las nuevas variables
$row = 2;
foreach($libros as $libro) {
    $id_admin = $libro['id_admin']; 
    $sql = "SELECT * FROM reg_psicologica WHERE Codigo = '$id_admin'";
    $resultado2 = $mysqli->query($sql);
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
    $Nombre = $row2['Nombre'];
    $Edad = $row2['Edad'];
    $Estado = $row2['Estado'];
    $Empresa = $row2['Empresa'];
    $Sede_ = $row2['Sede'];
    $Sede = '';
    if($Sede_ == 1) {
        $Sede = 'Medellín';
    }
    if($Sede_ == 2) {
        $Sede = 'Apartadó';
    }
    $Cargo = $row2['Cargo'];
    $Item1_ = $libro['Item1'];
    $Item2_ = $libro['Item2'];
    $Item3_ = $libro['Item3'];
    $Item4_ = $libro['Item4'];
    $Item5_ = $libro['Item5'];
    $Item6_ = $libro['Item6'];
    $Item7_ = $libro['Item7'];
    $Item8_ = $libro['Item8'];
    if($Item1_ == 1) {$Item1 = 'Si';} else {$Item1 = 'No';}
    if($Item2_ == 1) {$Item2 = 'Si';} else {$Item2 = 'No';}
    if($Item3_ == 1) {$Item3 = 'Si';} else {$Item3 = 'No';}
    if($Item4_ == 1) {$Item4 = 'Si';} else {$Item4 = 'No';}
    if($Item5_ == 1) {$Item5 = 'Si';} else {$Item5 = 'No';}
    if($Item6_ == 1) {$Item6 = 'Si';} else {$Item6 = 'No';}
    if($Item7_ == 1) {$Item7 = 'Si';} else {$Item7 = 'No';}
    if($Item8_ == 1) {$Item8 = 'Si';} else {$Item8 = 'No';}
    $spreadsheet->getActiveSheet()
        ->setCellValue('A'.$row, $Nombre ?? '')
        ->setCellValue('B'.$row, $Edad ?? '')
        ->setCellValue('C'.$row, $Estado ?? '')
        ->setCellValue('D'.$row, $Empresa ?? '')
        ->setCellValue('E'.$row, $Sede ?? '')
        ->setCellValue('F'.$row, $Item1 ?? '')
        ->setCellValue('G'.$row, $Item2 ?? '')
        ->setCellValue('H'.$row, $Item3 ?? '')
        ->setCellValue('I'.$row, $Item4 ?? '')
        ->setCellValue('J'.$row, $Item5 ?? '')
        ->setCellValue('K'.$row, $Item6 ?? '')
        ->setCellValue('L'.$row, $Item7 ?? '')
        ->setCellValue('M'.$row, $Item8 ?? '')
        ->setCellValue('N'.$row, $libro['Items'] ?? '')
        ->setCellValue('O'.$row, $libro['IMC'] ?? '')
        ->setCellValue('P'.$row, $libro['Cuello'] ?? '')
        ->setCellValue('Q'.$row, $libro['Fecha_registro'] ?? '');
    
    $style = ($row % 2 == 0) ? $evenRow : $oddRow;
    $sheet->getStyle('A'.$row.':BD'.$row)->applyFromArray($style);
    $row++;
}
// Configurar propiedades del documento
$spreadsheet->getProperties()
    ->setTitle('PVE_respiratorio - Cedisalud IPS')
    ->setDescription('Producto automatizado por https://www.perfilar.net')
    ->setCreator("Cedisalud IPS");
// Configurar headers para descarga
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Stop_bang_'.date('Y-m-d').'.xlsx"');
header('Cache-Control: max-age=0');
// Guardar y enviar al navegador
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;
?>