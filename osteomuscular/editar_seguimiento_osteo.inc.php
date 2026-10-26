 <?php 
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    if(isset($_POST['Observacion'])) {
        $id = $_POST['id'];
        $id_admin = $_POST['id_admin'];
        $Observacion = $_POST['Observacion'];
        $Codigo = $_POST['Codigo'];
        $sql = "INSERT INTO  observaciones_s_osteo (id_admin, usuario, observacion, Codigo, Fecha_registro) VALUES ($id_admin, $id, '$Observacion', '$Codigo', NOW())";
        $resultado = $mysqli->query($sql);
    }   
    if($_FILES["file"]){ 
        echo $id = $_POST['id'];
        echo $id_admin = $_POST['id_admin'];
        echo $Codigo = $_POST['Codigo'];
        $permitidos = array("video/mp4", "audio/mp3", "image/gif", "image/png", "image/jpg", "image/jpeg", "application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application/vnd.openxmlformats-officedocument.presentationml.presentation","application/vnd.oasis.opendocument.text", "application/msword","application/pdf","application/softgrid-pdf","application/vnd.ms-excel", "application/vnd.ms-excel.sheet.macroEnabled.12","text/html");
        $limite_kb =3000;
        if(in_array($_FILES["file"]["type"], $permitidos) && $_FILES["file"]["size"] <= $limite_kb * 3000){
            $extension = end(explode(".", $_FILES['file']['name']));
            $nombre = end(explode(".", $_FILES['file']['name'], -1));;
            $archivo = $Codigo.'1.'.$extension;
            $modificado = @move_uploaded_file($_FILES["file"]["tmp_name"], "doc_osteo/".$archivo);
            if($modificado){
                $sql = "INSERT INTO doc_osteo (id_admin,Usuario, Documento, Nombre, Extension, Codigo, Fecha_registro) VALUES ($id_admin,  $id, '$archivo', '$nombre', '$extension', '$Codigo', NOW())";
                $resultado = $mysqli->query($sql);
            }
            } else {
            echo "<p style='color:#000000;font-size:14px;font-family:verdanab'>El formato de la imágen para el logo debe ser .png y el tamaño no debe ser superior a 3 Mb</p>";
        }	
        } else {
    }
    if(isset($_POST['Estado_e'])) {
        $id = $_POST['id'];
        $id_admin = $_POST['id_admin'];
        $Codigo = $_POST['Codigo'];
        $Caso_e = $_POST['Caso_e'];
        $Estado_e = $_POST['Estado_e'];
        $Obs_caso = $_POST['Obs_caso'];
        $Obs_estado = $_POST['Obs_estado'];
        $Riesgo_e = $_POST['Riesgo_e'];
        $GES_e = $_POST['GES_e'];
        $Seg1 = $_POST['Seg1'];
        $Seg2 = $_POST['Seg2'];
        $Seg3 = $_POST['Seg3'];
        $Seg4 = $_POST['Seg4'];
        $Seg5 = $_POST['Seg5'];
        $Seg6 = $_POST['Seg6'];
        $Seg7 = $_POST['Seg7'];
        $Seg8 = $_POST['Seg8'];
        $Seg9 = $_POST['Seg9'];
        $Observacion = $_POST['Observacion'];
        $Riesgo1 = '';
        if ($Seg1 == 1) {
            $Riesgo1 = 'Bajo';
        } if ($Seg1 == 2){
            $Riesgo1 = 'Medio';
        } if ($Seg1 == 3){
            $Riesgo1 = 'Alto';
        } if ($Seg1 == 4){
            $Riesgo1 = 'Crítico';
        } 
        $Riesgo2 = '';
        if ($Seg2 == 1) {
            $Riesgo2 = 'Bajo';
        } if ($Seg2 == 2){
            $Riesgo2 = 'Medio';
        } if ($Seg2 == 3){
            $Riesgo2 = 'Alto';
        } if ($Seg2 == 4){
            $Riesgo2 = 'Crítico';
        } 
        $Riesgo3 = '';
        if ($Seg3 == 1) {
            $Riesgo3 = 'Bajo';
        } if ($Seg3 == 2){
            $Riesgo3 = 'Medio';
        } if ($Seg3 == 3){
            $Riesgo3 = 'Alto';
        } if ($Seg3 == 4){
            $Riesgo3 = 'Crítico';
        } 
        $Riesgo4 = '';
        if ($Seg4 == 1) {
            $Riesgo4 = 'Bajo';
        } if ($Seg4 == 2){
            $Riesgo4 = 'Medio';
        } if ($Seg4 == 3){
            $Riesgo4 = 'Alto';
        } if ($Seg4 == 4){
            $Riesgo4 = 'Crítico';
        }
        $Riesgo5 = '';
        if ($Seg5 == 1) {
            $Riesgo5 = 'Bajo';
        } if ($Seg5 == 2){
            $Riesgo5 = 'Medio';
        } if ($Seg5 == 3){
            $Riesgo5 = 'Alto';
        } if ($Seg5 == 4){
            $Riesgo15= 'Crítico';
        } 
        $Riesgo6 = '';
        if ($Seg6 == 1) {
            $Riesgo6 = 'Bajo';
        } if ($Seg6 == 2){
            $Riesgo6 = 'Medio';
        } if ($Seg6 == 3){
            $Riesgo6 = 'Alto';
        } if ($Seg6 == 4){
            $Riesgo6 = 'Crítico';
        } 
        $Riesgo7 = '';
        if ($Seg7 == 1) {
            $Riesgo7 = 'Bajo';
        } if ($Seg7 == 2){
            $Riesgo7 = 'Medio';
        } if ($Seg7 == 3){
            $Riesgo7 = 'Alto';
        } if ($Seg7 == 4){
            $Riesgo7 = 'Crítico';
        } 
        $Riesgo8 = '';
        if ($Seg8 == 1) {
            $Riesgo8 = 'Bajo';
        } if ($Seg8 == 2){
            $Riesgo8 = 'Medio';
        } if ($Seg8 == 3){
            $Riesgo8 = 'Alto';
        } if ($Seg8 == 4){
            $Riesgo8 = 'Crítico';
        } 
        $Riesgo9 = '';
        if ($Seg9 == 1) {
            $Riesgo9 = 'Bajo';
        } if ($Seg9 == 2){
            $Riesgo9 = 'Medio';
        } if ($Seg9 == 3){
            $Riesgo9 = 'Alto';
        } if ($Seg9 == 4){
            $Riesgo9 = 'Crítico';
        } 
        $sql = "UPDATE locomocion SET Caso = $Caso_e, Obs_caso = '$Obs_caso', Estado = $Estado_e, Obs_estado = '$Obs_estado', Riesgo = '$Riesgo_e', GES = '$GES_e', Riesgo1 = '$Riesgo1', Riesgo2 = '$Riesgo2', Riesgo3 = '$Riesgo3', Riesgo4 = '$Riesgo4', Riesgo5 = '$Riesgo5', Riesgo6 = '$Riesgo6', Riesgo7 = '$Riesgo7', Riesgo8 = '$Riesgo8', Riesgo9 = '$Riesgo9' WHERE id = $id"; 
        $resultado = $mysqli->query($sql);
    }   