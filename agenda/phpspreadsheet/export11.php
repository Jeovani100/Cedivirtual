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

    // Recibir el Código enviado por POST (igual que en tu script JSON)
    $Codigo = isset($_POST['Codigo']) ? $_POST['Codigo'] : '';

    if (empty($Codigo)) {
        die("No se ha proporcionado un código válido.");
    }

    // Consulta para obtener los IDs de reg_agenda con el código recibido
    $sql_ids = "SELECT id FROM reg_agenda WHERE Codigo = '$Codigo'";
    $resultado_ids = $mysqli->query($sql_ids);

    $ids_array = array();
    while ($row_id = mysqli_fetch_array($resultado_ids)) {
        $ids_array[] = $row_id['id'];
    }

    // Si no se encontraron IDs, detener o manejar vacío
    if (empty($ids_array)) {
        die("No se encontraron registros para el código proporcionado.");
    }

    // Convertir el array de IDs a una cadena para la consulta IN
    $ids_string = implode(',', $ids_array);

    // CONSULTA DE CARGOS: Utilizando $ids_string y la condición estricta de los 3 registros con EN no NULL
    $sql = "SELECT DISTINCT Cargo, Centro_costo, Area 
            FROM profesiograma_agenda 
            WHERE id_admin IN ($ids_string) 
            AND Cargo IN (
                SELECT Cargo 
                FROM profesiograma_agenda 
                WHERE id_admin IN ($ids_string) 
                AND T IN (1, 2, 3) 
                AND EN IS NOT NULL 
                GROUP BY Cargo 
                HAVING COUNT(DISTINCT T) = 3
            )
            ORDER BY Cargo ASC";

    $resultado = $mysqli->query($sql);
    $libros = array();
    while($rows = $resultado->fetch_assoc()) {
        $libros[] = $rows;
    }
    
    // Definir $Tipo (variable que se usa más adelante)
    $Tipo = ''; 

    // Configuración de estilos
    $tableHead0 = [
    	'font'=>['color'=>['rgb'=>'ffffff'],'bold'=>true,'size'=>12],
    	'fill'=>['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => '006080']]
    ];
    $tableHead = [
    	'font'=>['color'=>['rgb'=>'000000'],'bold'=>true,'size'=>12],
    	'fill'=>['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'c1d6f0']]
    ];
    $tableHead2 = [
    	'font'=>['color'=>['rgb'=>'000000'],'bold'=>true,'size'=>12],
    	'fill'=>['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'ccffcc']]
    ];
    $tableHead3 = [
    	'font'=>['color'=>['rgb'=>'000000'],'bold'=>true,'size'=>12],
    	'fill'=>['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'f5f5dc']]
    ];
    $tableHead4 = [
    	'font'=>['color'=>['rgb'=>'000000'],'bold'=>true,'size'=>12],
    	'fill'=>['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'ffcccc']]
    ];
    $tableHead5 = [
    	'font'=>['color'=>['rgb'=>'000000'],'bold'=>true,'size'=>12],
    	'fill'=>['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'e4dfec']]
    ];
    $tableHead6 = [
    	'font'=>['color'=>['rgb'=>'000000'],'bold'=>true,'size'=>12],
    	'fill'=>['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'd9d9d9']]
    ];
    $evenRow = [
    	'fill'=>['startColor' => ['rgb' => '00BDFF']],
    	'alignment' => ['vertical' => Alignment::VERTICAL_CENTER],
    ];
    $oddRow = [
    	'fill'=>['startColor' => ['rgb' => '00EAFF']],
    	'alignment' => ['vertical' => Alignment::VERTICAL_CENTER],
    ];

    // Crear el documento Excel
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle("Cargos-Profesiograma");
    
    // Configurar dimensiones y estilos generales
    $sheet->getDefaultRowDimension()->setRowHeight(40);
    $columns = [
        'A' => 20
    ];
    
    foreach ($columns as $col => $width) {
        $sheet->getColumnDimension($col)->setWidth($width);
        // Cambiado de HORIZONTAL_CENTER a HORIZONTAL_LEFT para alinear a la izquierda
        $sheet->getStyle($col)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
    }
    
    // Encabezados
    $headers = [
        'A' => "CARGOS"
    ];
    
    foreach ($headers as $col => $value) {
        $sheet->setCellValue($col.'1', $value);
    }
    
    $sheet->getStyle('A1:A1')->applyFromArray($tableHead);
    
    // Datos
    $row = 2;
    foreach($libros as $libro) {
        $spreadsheet->getActiveSheet()
        ->setCellValue('A'.$row, $libro['Cargo'] ?? '');
        $row++;
    }
    
    // Configurar propiedades del documento
    $spreadsheet->getProperties()
        ->setTitle('Cargos - Profesiograma - Cedisalud IPS')
        ->setDescription('Producto automatizado por https://www.perfilar.net')
        ->setCreator("Cedisalud IPS");
    
    // Configurar headers para descarga
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Cargos_profesiograma_'.date('Y-m-d').'.xlsx"');
    header('Cache-Control: max-age=0');
    
    // Guardar y enviar al navegador
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit;
?>