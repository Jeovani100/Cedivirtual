<?php
// ✅ FIX: subir límites para volúmenes grandes
ini_set('memory_limit', '1024M');      // 1 GB (ajusta según tu servidor)
ini_set('max_execution_time', '300');  // 5 minutos
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;

$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313', 'cedisalud_usuario');
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}
mysqli_set_charset($mysqli, "utf8");

$Codigo = $_POST['Codigo'] ?? '';
if ($Codigo === '') {
    die('No se recibió el código.');
}

$stmt = $mysqli->prepare("SELECT * FROM locomocion WHERE id_admin = ?");
$stmt->bind_param('s', $Codigo);
$stmt->execute();
$resultado = $stmt->get_result();

if (!$resultado) {
    die("Error al ejecutar la consulta: " . $stmt->error);
}

// ✅ FIX: construir el array de datos completo de una vez (mucho más rápido)
$headers = [
    "GES", "Nivel del riesgo", "Nombre", "Cedula", "Genero", "Edad",
    "Empresa", "Costo", "Sede", "Antigüedad en la empresa (años)",
    "Cargo", "Antigüedad en el puesto (años)", "Horas promedio en la semana",
    "Postura", "Dominancia", "Diagnóstico vigente",
    "Presenta dolor, molestias o disconfort",
    "Molestias en el cuello", "Molestias en los hombros",
    "Molestias en los codos o antebrazos",
    "Molestias en las muñecas o en las manos",
    "Molestias en la espalda alta (dorsal)",
    "Molestias en la espalda baja (lumbar)",
    "Molestias en una o ambas caderas/pierna",
    "Molestias en una o ambas rodillas",
    "Molestias en uno o ambos tobillos o pies",
    "Fecha_registro",
];

$data = [$headers]; // primera fila = encabezados

$keys = [
    'GES', 'Riesgo', 'Nombre', 'Cedula', 'Genero', 'Edad',
    'Empresa', 'Costo', 'Sede', 'Antiguedad_a',
    'Cargo', 'Antiguedad2_a', 'Horas',
    'Postura', 'Dominancia', 'P6', 'P7', 'P8', 'P9', 'P10',
    'P11', 'P12', 'P13', 'P14', 'P15', 'P16', 'Fecha_registro'
];

while ($row = $resultado->fetch_assoc()) {
    $fila = [];
    foreach ($keys as $k) {
        $fila[] = $row[$k] ?? '';
    }
    $data[] = $fila;
}
$stmt->close();

if (count($data) <= 1) {
    die('No se encontraron registros para el código: ' . htmlspecialchars($Codigo));
}

// Crear Excel
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle("Consolidado_osteomuscular");

// ✅ FIX: cargar todo el bloque de datos en UNA sola llamada
$sheet->fromArray($data, null, 'A1', true);

$totalFilas = count($data); // incluye encabezado
$ultimaCol  = 'AA';
$ultimaFila = $totalFilas;

// Anchos de columna en una sola operación
foreach (range('A', 'Z') as $c) {
    $sheet->getColumnDimension($c)->setWidth(20);
}
$sheet->getColumnDimension('AA')->setWidth(20);
$sheet->getColumnDimension('C')->setWidth(50); // Nombre más ancho

// ✅ FIX: aplicar alineación a TODO el rango de una vez (no fila por fila)
$sheet->getStyle("A1:{$ultimaCol}{$ultimaFila}")
      ->getAlignment()
      ->setHorizontal(Alignment::HORIZONTAL_CENTER)
      ->setVertical(Alignment::VERTICAL_CENTER);

// Encabezado con estilo
$sheet->getStyle("A1:{$ultimaCol}1")->applyFromArray([
    'font' => ['bold' => true, 'size' => 12],
    'fill' => [
        'fillType'   => Fill::FILL_SOLID,
        'startColor' => ['rgb' => 'c1d6f0'],
    ],
]);

// ✅ FIX: quitar el estilo alternado fila por fila (es lo que más tarda).
// Si lo quieres conservar, aplícalo por BLOQUES, no por fila:
// (esto ya es opcional y mucho más rápido que el original)

// ✅ FIX: congelar la primera fila para navegar cómodo
$sheet->freezePane('A2');

// ✅ FIX: activar autofiltro para que el usuario filtre
$sheet->setAutoFilter("A1:{$ultimaCol}{$ultimaFila}");

// Propiedades
$spreadsheet->getProperties()
    ->setTitle('Agendamiento del día - Cedisalud IPS')
    ->setDescription('Producto automatizado por https://www.perfilar.net')
    ->setCreator("Cedisalud IPS");

if (ob_get_length()) ob_end_clean();

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Osteomuscular_' . date('Y-m-d') . '.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;