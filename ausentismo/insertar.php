<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/admin.inc.php';
    include_once 'app/redireccion.inc.php';
    include_once 'app/repositorioadmin.inc.php';
    include_once 'app/validadoradmin.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    if($_FILES["file"]){
       $id_usuario=$_POST["id_usuario"];
       $Numeral=$_POST["Numeral"];
       $Archivo=$_POST["Archivo"];
       $Nombre=$_POST["Nombre"];
       $Extension=$_POST["Extension"];
       $Size=$_POST["Size"];
       $Autor=$_POST["Autor"];
       $sql = "SELECT * FROM folder WHERE Archivo = '$Archivo'";
       $resultado2 = $mysqli->query($sql);
       $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
       $existe = $row2['id'];
       $permitidos = array("video/mp4", "audio/mp3", "image/gif", "image/png", "image/jpg", "image/jpeg", "application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application/vnd.openxmlformats-officedocument.presentationml.presentation","application/vnd.oasis.opendocument.text", "application/msword","application/pdf","application/softgrid-pdf","application/vnd.ms-excel", "application/vnd.ms-excel.sheet.macroEnabled.12","text/html");
       $limite_kb = 1000;
       if ($existe != '') {
           echo "<p style='color:#000000;font-size:14px'>El archivo <span style='font-family:verdanab'>$Archivo</span> ya existe en el registro de documentos.</p>";
           } else {
               if(in_array($_FILES["file"]["type"], $permitidos) && $_FILES["file"]["size"] <= $limite_kb * 10000){
            		$ruta = 'files/';
            		$file =$ruta.'imagen'.substr($_FILES["file"]["name"],-4);
            		if(!file_exists($ruta)){
            			mkdir($ruta);
            		}
            		$modificado = @move_uploaded_file($_FILES["file"]["tmp_name"], "files/".$_FILES['file']['name']);
            			if($modificado){
            				echo "<p style='color:#000000;font-size:14px'>El archivo <span style='color:#333333;font-family:verdanab;font-size:14px'>".$_FILES['file']['name'].'</span> fué guardado</p>';
            				$sql = "INSERT INTO folder (id_usuario, Numeral, Archivo, Nombre, Extension, Size, Autor, Fecha_registro) 
                            VALUES ('$id_usuario','$Numeral','$Archivo','$Nombre','$Extension','$Size', '$Autor', NOW())";
                            $resultado = $mysqli->query($sql);
            				} else {
            				echo "<p style='color:#000000;font-size:14px'>Error al guardar el archivo</p>";
            			}
            		} else {
            		echo "<p style='color:#000000;font-size:14px'>Archivo no permitido o excede el tamaño</p>";
            	}	
            }
    }
    if (isset($_POST['id'])) {
	    $id = $_POST['id'];
	    $admin = $_POST['admin'];
	    $sql = "UPDATE admin SET id_admin = '$admin' WHERE id = '$id'";
        $resultado = $mysqli->query($sql);
	}
?>


















