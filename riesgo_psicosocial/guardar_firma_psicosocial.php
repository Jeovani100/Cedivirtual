<?php
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    if(!empty($_FILES['data'])){
        $Codigo=$_POST["Codigo"];
        $permitidos = array("video/mp4", "audio/mp3", "image/gif", "image/png", "image/jpg", "image/jpeg", "application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application/vnd.openxmlformats-officedocument.presentationml.presentation","application/vnd.oasis.opendocument.text", "application/msword","application/pdf","application/softgrid-pdf","application/vnd.ms-excel", "application/vnd.ms-excel.sheet.macroEnabled.12","text/html");
        $limite_kb = 1000;
               if(in_array($_FILES["data"]["type"], $permitidos) && $_FILES["data"]["size"] <= $limite_kb * 10000){
                    $Nombre = $Codigo.'.png';
                    $documentos = "firmas_psicosocial/$Nombre";
                    $modificado = move_uploaded_file($_FILES['data']['tmp_name'], $documentos);	
                    if($modificado){
            				$message = "<p style='font-family:verdanab;color:#000000;font-size:15px'>La firma fué guardada exitosamente</p>";
            				$sql = "UPDATE firmas SET Firma = '$Nombre' WHERE Codigo = '$Codigo'";
                            $result = $mysqli->query($sql);
            				} else {
            				$message = "<p style='color:#000000;font-size:14px'>Error al guardar el archivo</p>";
            			}
               } else {
            		$message = "<p style='color:#000000;font-size:14px'>Archivo no permitido o excede el tamaño</p>";
               }  
    }

$jsonstring = json_encode($message);
echo $message;    
?>