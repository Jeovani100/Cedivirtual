<?php
include 'vendor/autoload.php';
$connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
$connect -> exec("SET CHARACTER SET utf8");
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
        function generarCodigoAleatorio($longitud = 10) {
            $caracteres = '1234567890abcdefghijklmnopqrstuvwxyz';
            $Codigo = '';
            for ($i = 0; $i < $longitud; $i++) {
                $Codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
            }
            return $Codigo;
        }
        foreach($data as $row) {
            $Codigo=generarCodigoAleatorio(6);
            $id = 0;
            $id_admin = $_POST['Codigo'];
            $Cedula  = $row[0];
            $Nombre = $row[1];
            $Genero = $row[2];
            $Empresa = $row[3];
            $Costo = $row[4];
            $Sede = $row[5];
            $Cargo = $row[6];
            $Email = $row[7];
            $Celular = $row[8];
            $insert_data = array(
                ':id' => $id,
                ':id_admin' => $id_admin,
                ':Codigo' => $Codigo,
                ':Cedula' => $Cedula,
                ':Nombre' => $Nombre,
                ':Genero' => $Genero,
                ':Edad' => '',
                ':Empresa' => $Empresa,
                ':Costo' => $Costo,
                ':Sede' => $Sede,
                ':Cargo' => $Cargo,
                ':Email' => $Email,
                ':Celular' => $Celular,
            );
           $query = "INSERT INTO locomocion (id, id_admin, Codigo, Cedula, Nombre, Genero, Edad, Empresa, Costo, Sede, Cargo, Email, Celular, GES, Fecha_registro) 
                                VALUES (:id, :id_admin, :Codigo, :Cedula, :Nombre, :Genero, :Edad, :Empresa, :Costo, :Sede, :Cargo, :Email, :Celular, '0', NOW())";
           $statement = $connect->prepare($query);
           $statement->execute($insert_data);
           if ($statement){
               $confirmacion = 1;
           } else {
               $confirmacion = 0;
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