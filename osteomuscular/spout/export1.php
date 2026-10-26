<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../export_app/vendor/autoload.php';

use OpenSpout\Writer\XLSX\Writer;
use OpenSpout\Common\Entity\Row;
use OpenSpout\Common\Entity\Style\Style;
use OpenSpout\Common\Entity\Style\CellAlignment;
use OpenSpout\Common\Entity\Style\Color;

$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313', 'cedisalud_usuario');
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}
mysqli_set_charset($mysqli, "utf8");

$Codigo = $_POST['Codigo'] ?? '';
if ($Codigo === '') {
    die('No se recibió el código.');
}

// --- Fecha de inicio ---
$stmt = $mysqli->prepare("SELECT Inicio FROM controles_osteo WHERE id_admin = ? AND Inicio0 = 1");
$stmt->bind_param('s', $Codigo);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();
if (!$row || empty($row['Inicio'])) {
    die('No se encontró fecha de inicio.');
}
$Inicio0 = $row['Inicio'];
$stmt->close();

// --- Fecha de terminación ---
$stmt = $mysqli->prepare("SELECT Terminacion FROM controles_osteo WHERE id_admin = ? AND Terminacion0 = 1");
$stmt->bind_param('s', $Codigo);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();
if (!$row || empty($row['Terminacion'])) {
    die('No se encontró fecha de terminación.');
}
$Terminacion0 = $row['Terminacion'];
$stmt->close();

// --- Datos del rango ---
$stmt = $mysqli->prepare("SELECT * FROM locomocion WHERE id_admin = ? AND Fecha_registro >= ? AND Fecha_registro <= ? ORDER BY id DESC");
$stmt->bind_param('sss', $Codigo, $Inicio0, $Terminacion0);
$stmt->execute();
$resultado = $stmt->get_result();

// --- Crear Writer (OpenSpout 4.x) ---
$writer = new Writer();
$writer->openToBrowser('Evaluaciones_osteomusculares.xlsx');

// Estilo del encabezado
$headerStyle = (new Style())
    ->setFontBold()
    ->setFontSize(11)
    ->setBackgroundColor(Color::rgb(193, 214, 240))
    ->setCellAlignment(CellAlignment::CENTER)
    ->setShouldWrapText();

$header = [
    'GES', 'Nivel del riesgo', 'Nombre', 'Cedula', 'Género', 'Edad', 'Empresa',
    'Centro de costo', 'Sede', 'Antigüedad en la empresa (años)', 'Cargo',
    'Antigüedad en el puesto (años)', 'Horas promedio en la semana', 'Email',
    'Celular', 'Diagnóstico vigente', 'Presenta dolor, molestias o disconfort',
    'Molestias en el cuello', 'Molestias en los hombros', 'Molestias en los codos o antebrazos',
    'Molestias en las muñecas o en las manos', 'Molestias en la espalda alta (dorsal)',
    'Molestias en la espalda baja (lumbar)', 'Molestias en una o ambas caderas/pierna',
    'Molestias en una o ambas rodillas', 'Molestias en uno o ambos tobillos o pies',
    'Fecha del registro'
];

$writer->addRow(Row::fromValues($header, $headerStyle));

while ($libro = $resultado->fetch_assoc()) {
    $writer->addRow(Row::fromValues([
        $libro['GES'],
        $libro['Riesgo'],
        $libro['Nombre'],
        $libro['Cedula'],
        $libro['Genero'],
        $libro['Edad'],
        $libro['Empresa'],
        $libro['Costo'],
        $libro['Sede'],
        $libro['Antiguedad_a'],
        $libro['Cargo'],
        $libro['Antiguedad2_a'],
        $libro['Horas'],
        $libro['Email'],
        $libro['Celular'],
        $libro['P6'],
        $libro['P7'],
        $libro['P8'],
        $libro['P9'],
        $libro['P10'],
        $libro['P11'],
        $libro['P12'],
        $libro['P13'],
        $libro['P14'],
        $libro['P15'],
        $libro['P16'],
        $libro['Fecha_registro']
    ]));
}

$writer->close();
$stmt->close();
$mysqli->close();