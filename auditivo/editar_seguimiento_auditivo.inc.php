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
        $sql = "INSERT INTO  observaciones_s_auditivo (id_admin, usuario, observacion, Codigo, Fecha_registro) VALUES ('$id_admin', $id, '$Observacion', '$Codigo', NOW())";
        $resultado = $mysqli->query($sql);
    }   
    if($_FILES["file"]){ 
            $id = $_POST['id'];
            $id_admin = $_POST['id_admin'];
            $Codigo = $_POST['Codigo'];
            $permitidos = array("video/mp4", "audio/mp3", "image/gif", "image/png", "image/jpg", "image/jpeg", "application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application/vnd.openxmlformats-officedocument.presentationml.presentation","application/vnd.oasis.opendocument.text", "application/msword","application/pdf","application/softgrid-pdf","application/vnd.ms-excel", "application/vnd.ms-excel.sheet.macroEnabled.12","text/html");
            $limite_kb =10000;
            if(in_array($_FILES["file"]["type"], $permitidos) && $_FILES["file"]["size"] <= $limite_kb * 10000){
                $extension = end(explode(".", $_FILES['file']['name']));
                $nombre = end(explode(".", $_FILES['file']['name'], -1));;
                $archivo = $Codigo.'1.'.$extension;
                $modificado = @move_uploaded_file($_FILES["file"]["tmp_name"], "doc_auditivo/".$archivo);
                if($modificado){
                    $sql = "INSERT INTO doc_auditivo (id_admin,Usuario, Documento, Nombre, Extension, Codigo, Fecha_registro) VALUES ($id_admin,  $id, '$archivo', '$nombre', '$extension', '$Codigo', NOW())";
                    $resultado = $mysqli->query($sql);
                }
                } else {
                echo "<p style='color:#000000;font-size:14px;font-family:verdanab'>El formato de la imágen para el logo debe ser .png y el tamaño no debe ser superior a 3 Mb</p>";
            }	
        } else {
    }
    if(isset($_POST['Estado'])) {
        $id = $_POST['id'];
        $Estado = $_POST['Estado'];
        $Caso = $_POST['Caso'];
        $Obs_estado = $_POST['Obs_estado'];
        $Obs_caso = $_POST['Obs_caso'];
        $GES = $_POST['GES'];
        $Nombre = $_POST['Nombre'];
        $Cedula = $_POST['Cedula'];
        $Cargo = $_POST['Cargo'];
        $Edad = $_POST['Edad'];
        $Genero = $_POST['Genero'];
        $Escolaridad = $_POST['Escolaridad'];
        $Empresacertificada = $_POST['Empresacertificada'];
        $Celular = $_POST['Celular'];
        $Email = $_POST['Email'];
        $sql = "UPDATE auditivo SET Paciente = '$Nombre', Cedula = $Cedula, Edad = $Edad, Genero = '$Genero', Cargo = '$Cargo', Escolaridad = '$Escolaridad', Empresa_certificada = '$Empresacertificada', GES = $GES, Estado = $Estado, Caso = $Caso, Obs_estado = '$Obs_estado', Obs_caso = '$Obs_caso', Celular = $Celular, Email = '$Email' WHERE id = $id"; 
        $resultado = $mysqli->query($sql);
    }   
?>    














