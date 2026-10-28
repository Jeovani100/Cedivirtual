<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
$connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
$connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect -> exec("SET CHARACTER SET utf8");
$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
mysqli_set_charset($mysqli, "utf8"); 
function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
};
$Codigo=generarCodigo(6);
if(!empty($_FILES['data'])){
    $id_paciente = $_POST["id_paciente"];
    $sql = "SELECT * FROM auditivo WHERE id = '$id_paciente'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $documentos3 = $row['Pdf_auditivo'];
    $documentos = "pdf_auditivo/C_".$Codigo.$id_paciente.".pdf";
    $documentos2 = "C_".$Codigo.$id_paciente.".pdf";
    $sql = "SELECT * FROM auditivo WHERE id = $id_paciente";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Carta0 = $row['Carta'];
    if($Carta0 == "#e7744f"){
        $Carta = "#666666";
        unlink("pdf_auditivo/".$documentos3);
    } elseif (($Carta0 == "#666666") || ($Carta0 == "")) {
        $Carta = "#e7744f";
        move_uploaded_file($_FILES['data']['tmp_name'], $documentos);
    }
    $sql = "UPDATE auditivo SET Carta = '$Carta', Pdf_auditivo = '$documentos2' WHERE id = $id_paciente";
    $result = $mysqli->query($sql);

} else {
    return "No Data Sent";
}
?>