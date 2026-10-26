<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
    $Grupo = $_POST['Grupo'];
    $Codigo = $_POST['Codigo'];
    
    $Grupo_ges = $Grupo;
    
    if($Grupo == 'Grupo 1') {
        $Grupo_ges = 1;
    }
    if($Grupo == 'Grupo 2') {
        $Grupo_ges = 2;
    }
    if($Grupo == 'Grupo 3') {
        $Grupo_ges = 3;
    }
    if($Grupo == 'Grupo 4') {
        $Grupo_ges = 4;
    }
    
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$Codigo' && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $date1 = new DateTime($Inicio0);
    $Inicio =  $date1->format('d-m-Y');
    
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$Codigo' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $date2 = new DateTime($Terminacion0);
    $Terminacion =  $date2->format('d-m-Y');

    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && GES = $Grupo_ges && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";           
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios = $resultado['total']; 
    
    $sql = "SELECT * FROM locomocion WHERE id_admin = '$Codigo' && GES = '$Grupo_ges' && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";
    $resultado = $mysqli->query($sql);
    $numeracion = 0;
    while($row = mysqli_fetch_array($resultado)) { 
        $numeracion++;
        $id = $row['id'];
        $Paciente = $row['Nombre'];
        $Cedula = $row['Cedula'];
        $Cargo = $row['Cargo'];
        $Empresa_certificada = $row['Empresa_certificada'];
        $DiagnosticoODOI = $row['DiagnosticoODOI'];
        $Sede = $row['Sede'];
        $json[] = array(
            'id' => $id,
            'numeracion' => $numeracion,
            'Paciente' => $Paciente,
            'Cedula' => $Cedula,
            'Cargo' => $Cargo,
            'Empresa_certificada' => $Empresa_certificada,
            'DiagnosticoODOI' => $DiagnosticoODOI,
            'Sede' => $Sede

        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 

?>