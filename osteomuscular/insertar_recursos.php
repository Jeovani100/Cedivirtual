<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
     function generarCodigoAleatorio($longitud = 6) {
        $caracteres = '1234567890abcdefghijklmnopqrstuvwxyz';
        $Codigo = '';
        for ($i = 0; $i < $longitud; $i++) {
            $Codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $Codigo;
    }
    $Codigo = generarCodigoAleatorio(6);
    if($_FILES["file"]){
       $permitidos = array("video/mp4", "audio/mp3", "image/gif", "image/png", "image/jpg", "image/jpeg", "application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application/vnd.openxmlformats-officedocument.presentationml.presentation","application/vnd.oasis.opendocument.text", "application/msword","application/pdf","application/softgrid-pdf","application/vnd.ms-excel", "application/vnd.ms-excel.sheet.macroEnabled.12","text/html");
       $limite_kb = 20000;
               if(in_array($_FILES["file"]["type"], $permitidos) && $_FILES["file"]["size"] <= $limite_kb * 20000){
            	    $Extension = end(explode(".", $_FILES['file']['name']));
            	    $Nombre = $_FILES['file']['name'];
                    $Archivo = $Codigo.'.'.$Extension;
                    $modificado = @move_uploaded_file($_FILES["file"]["tmp_name"], "files_recursos/".$Archivo);
            			if($modificado){
            				$message = "<p style='color:#000000;font-size:14px'>El archivo <span style='color:#333333;font-family:verdanab;font-size:14px'>".$_FILES['file']['name'].'</span> fué guardado</p>';
            				$insert_data = array(
                               ':id_admin'  => $_POST["id_admin"],
                               ':sve'  => $_POST["sve"],
                               ':Codigo'  => $Codigo,
                               ':Recurso' => $_POST["Recurso"],
                               ':Descripcion' => $_POST["Descripcion"],
                               ':Nombre'  => $Nombre,
                            );
            				$query = "INSERT INTO recursos (id_admin,sve,Codigo,Recurso,Descripcion,Nombre,Fecha_registro) VALUES (:id_admin,:sve,:Codigo,:Recurso,:Descripcion,:Nombre,NOW())";
                            $statement = $connect->prepare($query);
                            $statement->execute($insert_data);
                                if ($insert_data){
                                   $confirmacion = 1;
                                   $message = "<p style='color:#000000;font-size:14px'>Archivo guardado correctamente</p>";
                                } else {
                                   $confirmacion = 0;
                                }
            				} else {
            				$message = "<p style='color:#000000;font-size:14px'>Error al guardar el archivo</p>";
            			
            			}
            		} else {
            		$message = "<p style='color:#000000;font-size:14px'>Archivo no permitido o excede el tamaño</p>";
            	}	
        }
echo json_encode([$message]);
?>
