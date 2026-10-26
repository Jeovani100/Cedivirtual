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
       $id_admin=$_POST["id_admin"];
       $sve=$_POST["sve"];
       $Elemento=$_POST["Elemento"];
       $Elemento_titulo=$_POST["Elemento_titulo"];
       $permitidos = array("video/mp4", "audio/mp3", "image/gif", "image/png", "image/jpg", "image/jpeg", "application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application/vnd.openxmlformats-officedocument.presentationml.presentation","application/vnd.oasis.opendocument.text", "application/msword","application/pdf","application/softgrid-pdf","application/vnd.ms-excel", "application/vnd.ms-excel.sheet.macroEnabled.12","text/html");
       $limite_kb = 20000;
       //if ($existe != '') {
           //echo "<p style='color:#000000;font-size:14px'>El archivo <span style='font-family:verdanab'>$Archivo</span> ya existe en el registro de documentos.</p>";
           //} else {
               if(in_array($_FILES["file"]["type"], $permitidos) && $_FILES["file"]["size"] <= $limite_kb * 20000){
            	    $extension = end(explode(".", $_FILES['file']['name']));
                    $archivo = $Codigo.'.'.$extension;
                    $modificado = @move_uploaded_file($_FILES["file"]["tmp_name"], "files/".$archivo);
            		    if($modificado){
            				echo "<p style='color:#000000;font-size:14px'>El archivo <span style='color:#333333;font-family:verdanab;font-size:14px'>".$_FILES['file']['name'].'</span> fué guardado</p>';
            				$sql = "INSERT INTO controles_img (id_admin, sve, Codigo, Elemento_titulo, Elemento, Fecha_registro) VALUES ('$id_admin','$sve','$archivo','$Elemento_titulo','$Elemento',NOW())";
                            $resultado = $mysqli->query($sql);
            				} else {
            				echo "<p style='color:#000000;font-size:14px'>Error al guardar el archivo</p>";
            			}
            		} else {
            		echo "<p style='color:#000000;font-size:14px'>Archivo no permitido o excede el tamaño</p>";
            	}	
           //}
        }
?>