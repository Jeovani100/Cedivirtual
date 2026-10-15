<?php
include 'vendor/autoload.php';
$connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
$connect -> exec("SET CHARACTER SET utf8");

$confirmacion = 0;

if($_FILES["file"]["name"] != '') {
    $allowed_extension = array('xls', 'csv', 'xlsx');
    $file_array = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($file_array);
    
    if(in_array($file_extension, $allowed_extension)){
        $file_name = time() . '.' . $file_extension;
        move_uploaded_file($_FILES['file']['tmp_name'], $file_name);
        $file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_name);
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);
        $spreadsheet = $reader->load($file_name);
        unlink($file_name);
        $data = $spreadsheet->getActiveSheet()->toArray();
        
        // Eliminar encabezados si existen (primera fila)
        $encabezados = array_shift($data);
        
        foreach($data as $row) {
            // Mapeo de columnas según tu formato
            $Cargo = $row[0];                    // CARGO
            $Centro_costo = $row[1];              // CENTRO DE COSTO/PROCESO
            $Area = $row[2];                     // AREA
            $T = $row[3];                        // TIPO DE EXÁMEN
            $EN = $row[4];                       // ÉNFASIS
            $E1 = $row[5];                       // EXAMENES
            $L1 = $row[6];                       // LABORATORIO
            $V1 = $row[7];                       // VACUNACION
            $OT1 = $row[8];                      // OTROS
            $D1 = $row[9];                       // DISCAPACIDADES
            $O = $row[10];                       // OBSERVACIÓN PARA EL CARGO
            $O1 = $row[11];                      // OBSERVACIÓN DISCAPACIDADES
            
            $id_admin = $_POST['id'];
            
            $insert_data = array(
                ':id_admin' => $id_admin,
                ':Cargo' => $Cargo,
                ':Centro_costo' => $Centro_costo,
                ':Area' => $Area,
                ':T' => $T,
                ':EN' => $EN,
                ':E1' => $E1,
                ':L1' => $L1,
                ':V1' => $V1,
                ':OT1' => $OT1,
                ':D1' => $D1,
                ':O' => $O,
                ':O1' => $O1
            );

            $query = "INSERT INTO profesiograma_agenda (
                id_admin, 
                Cargo, 
                Centro_costo, 
                Area, 
                T, 
                EN, 
                E1, 
                L1, 
                V1, 
                OT1, 
                D1, 
                O, 
                O1, 
                Fecha_registro
            ) VALUES (
                :id_admin,
                :Cargo,
                :Centro_costo,
                :Area,
                :T,
                :EN,
                :E1,
                :L1,
                :V1,
                :OT1,
                :D1,
                :O,
                :O1,
                NOW()
            )";

            $statement = $connect->prepare($query);
            
            if($statement->execute($insert_data)){
                $confirmacion = 1;
            } else {
                $confirmacion = 0;
                // Para depuración - muestra el error
                $errorInfo = $statement->errorInfo();
                $error_msg = $errorInfo[2];
            }
        }
        $message = '<div style="font-family:verdanab;color:#000000">Los datos fueron guardados exitosamente</div>';
    } else {
        $message = '<div style="font-family:verdanab;color:#000000">Sólo se permiten archivos .xls .csv o .xlsx</div>';
    }
} else {
    $message = '<div style="font-family:verdanab;color:#000000">Por favor, seleccione un archivo</div>';
}

$json[] = array(
    'mensaje' => $message,
    'confirmacion' => $confirmacion
);
$jsonstring = json_encode($json);
echo $jsonstring;
?>