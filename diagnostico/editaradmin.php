 <?php 
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';
    function generarCodigoAleatorio($longitud = 5) {
        $caracteres = '1234567890abcdefghijklmnopqrstuvwxyz';
        $Codigo = '';
        for ($i = 0; $i < $longitud; $i++) {
            $Codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $Codigo;
    }
    $Codigo = generarCodigoAleatorio(5);;
    if(isset($_POST['idadmin'])) {
        $id = $_POST['idadmin'];
        $Nit = $_POST['Nitadmin'];
        $Razon = $_POST['Razonadmin'];
        $Economica = $_POST['Economicaadmin'];
        $Telefono = $_POST['Telefonoadmin'];
        $Direccion = $_POST['Direccionadmin'];
        $Departamento = $_POST['Departamentoadmin'];
        $Ciudad = $_POST['Ciudadadmin'];
        $Sede = $_POST['Sedeadmin'];
        $PersonaC = $_POST['PersonaCadmin'];
        $TelefonoC = $_POST['TelefonoCadmin'];
        $Profesional = $_POST['Profesionaladmin'];
        $Pregrado = $_POST['Pregradoadmin'];
        $Posgrado = $_POST['Posgradoadmin'];
        $Tarjeta = $_POST['Tarjetaadmin'];
        $Licencia = $_POST['Licenciaadmin'];
        $Expedicion = $_POST['Expedicionadmin'];
        $Activo = $_POST['Activoadmin'];
        $Archivo1 = $_POST['Archivo1admin'];
        $Archivo2 = $_POST['Archivo2admin'];
        if($_FILES["file"]){ 
            $permitidos = array("image/png", "image/PNG");
            $limite_kb =3000;
            if(in_array($_FILES["file"]["type"], $permitidos) && $_FILES["file"]["size"] <= $limite_kb * 3000){
                $extension = end(explode(".", $_FILES['file']['name']));
                $archivo = $Codigo.'1.'.$extension;
                $modificado = @move_uploaded_file($_FILES["file"]["tmp_name"], "admin/".$archivo);
                    if($modificado){
                        $sql = "UPDATE admin SET Archivo1 = '$archivo' WHERE id = '$id'"; 
            			$resultado = $mysqli->query($sql);
                			if($resultado){
                    			echo "<p style='color:#000000;font-size:14px;font-family:verdanab'>La imagen para el logo fué guardada</p>";
                                unlink("admin/".$Archivo1);
                			}
                    	} else {
                    	echo "<p style='color:#000000;font-size:14px;font-family:verdanab'>Error al guardar la imágen para el logo</p>";
                    }
                } else {
                echo "<p style='color:#000000;font-size:14px;font-family:verdanab'>El formato de la imágen para el logo debe ser .png y el tamaño no debe ser superior a 3 Mb</p>";
            }	
          } else {
        }
        if($_FILES["file2"]){ 
            $permitidos2 = array("image/png", "image/PNG");
            $limite_kb =3000;
            if(in_array($_FILES["file2"]["type"], $permitidos2) && $_FILES["file2"]["size"] <= $limite_kb * 3000){
                $extension2 = end(explode(".", $_FILES['file2']['name']));
                $archivo2 = $Codigo.'2.'.$extension2;
                $modificado2 = @move_uploaded_file($_FILES["file2"]["tmp_name"], "admin/".$archivo2);
                    if($modificado2){
                        $sql = "UPDATE admin SET Archivo2 = '$archivo2' WHERE id = '$id'"; 
            			$resultado = $mysqli->query($sql);
                			if($resultado){
                    			echo "<p style='color:#000000;font-size:14px;font-family:verdanab'>La imagen con la firma del profesional evaluador fué gurdada</p>";
                                unlink("admin/".$Archivo2);
                			}
                    	} else {
                    	echo "<p style='color:#000000;font-size:14px;font-family:verdanab'>Error al guardar la imagen con la firma del profesional evaluador</p>";
                    }
                } else {
                echo "<p style='color:#000000;font-size:14px;font-family:verdanab'>El formato de la imágen con la firma debe ser .png <br>y el tamaño no debe ser superior a 3 Mb</p>";
            }	
          } else {
          }
        $sql = "UPDATE admin SET Nit = '$Nit', Razon = '$Razon', Economica = '$Economica', Telefono = '$Telefono' , Direccion = '$Direccion', Departamento = '$Departamento',  Ciudad= '$Ciudad', 
        Sede= '$Sede', PersonaC= '$PersonaC', TelefonoC= '$TelefonoC', Profesional= '$Profesional', Pregrado= '$Pregrado', Posgrado= '$Posgrado', Tarjeta= '$Tarjeta', Licencia= '$Licencia',  
        Expedicion= '$Expedicion' WHERE id = '$id'";
        echo "<p style='color:#000000;font-size:14px;font-family:verdanab'>Se guardaron los datos editados</p>";
        $result = $mysqli->query($sql);
};

    
    
    
    