<?php
include 'vendor/autoload.php';
$connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
$connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect -> exec("SET CHARACTER SET utf8"); 
$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
mysqli_set_charset($mysqli, "utf8");
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
        $id_admin = $_POST['id_admin'];
        foreach($data as $row) {
            $Cargo = $row[0];
            $insert_data = array(
            ':id_admin' => $id_admin,
            ':Cargo' => $Cargo
        );
        $query = "INSERT INTO controles_cargo (id_admin,Cargo,Fecha_registro) VALUES (:id_admin,:Cargo,NOW())";
        $statement = $connect->prepare($query);
        $statement->execute($insert_data);
           if ($insert_data){
               $confirmacion = 1;
                $message = '<div style="font-family:verdanab;color:#000000">Los datos fueron guardados exitosamente</div>';
           } else {
               $confirmacion = 0;
           }
        }
       
    } else {
        $message = '<div style="font-family:verdanab;color:#000000">S贸lo se permiten archivos .xls .csv o .xlsx</div>';
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