<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    function generarCodigoAleatorio($longitud = 5) {
        $caracteres = '1234567890abcdefghijklmnopqrstuvwxyz';
        $Codigo = '';
        for ($i = 0; $i < $longitud; $i++) {
            $Codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $Codigo;
    }
    $Codigo = generarCodigoAleatorio(5);
    $confirmacion = 0;
    if(isset($_POST['Titulo'])) {
        $id_admin=$_POST["id_admin"];
        $nuevaC=$_POST["nuevaC"];
        $Modulo=$_POST["Modulo"];
        $Titulo=$_POST["Titulo"];
        $Dia1=$_POST["Dia1"];
        $Dia2=$_POST["Dia2"];
        $Hora1=$_POST["Hora1"];
        $Hora2=$_POST["Hora2"];
        $Acreditadas=$_POST["Acreditadas"];
        $Modalidad=$_POST["Modalidad"];
        $Descripcion=$_POST["Descripcion"];
        $Destino=$_POST["Destino"];
        $Empresa=$_POST["Empresa"];
        $Responsable=$_POST["Responsable"];
        $Cargo=$_POST["Cargo"];
        $Licencia=$_POST["Licencia"];
        $Certificacion=$_POST["Certificacion"];
        $Roomname=$_POST["Roomname"];
        $sql = "INSERT INTO capacitacion (id_admin, Codigo, Titulo, Dia1, Dia2, Hora1, Hora2, Acreditadas, Tiempo, Modalidad, Descripcion, Destino, Empresa, Responsable, Cargo, Licencia, Certificacion, Modulo, Activo, Roomname, Fecha_registro) VALUES ($id_admin, '$nuevaC','$Titulo','$Dia1', '$Dia2','$Hora1', '$Hora2', '$Acreditadas', '$Tiempo', '$Modalidad', '$Descripcion', '$Destino', '$Empresa', '$Responsable', '$Cargo', '$Licencia', '$Certificacion', '$Modulo','1', '$Roomname', NOW())";
        $resultado = $mysqli->query($sql);
        if ($resultado) {
            $sql = "UPDATE controles_doc2 SET id_admin = '$Codigo' WHERE id = 1 || id = 2 || id = 3 || id = 4 || id = 5";
            $result = $mysqli->query($sql);
            $sql = "UPDATE controles_doc3 SET id_admin = '$Codigo' WHERE id = 1 || id = 2 || id = 3";
            $result = $mysqli->query($sql);
            $confirmacion = 1;
        }
    }
    $json[] = array(
    'confirmacion' => $confirmacion
    );
    $jsonstring = json_encode($json);
     echo $jsonstring;
?>