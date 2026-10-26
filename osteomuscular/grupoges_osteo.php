<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> exec("SET CHARACTER SET utf8");
 
	$id_admin = $_POST['id_admin'];
    
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$id_admin' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');
	
	$sql = "SELECT * FROM admin WHERE Ausentismo = '$id_admin'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Botones_ = $row['Botones'];
    if($Botones_ == 1) {
        $Boton ='';
        $Boton2 ='block';
    } else {
        $Boton ='disabled'; 
        $Boton2 ='none';
    }
	
    $sql = "SELECT * FROM grupoges_osteo WHERE id_admin = '$id_admin'";
    $resultado = $mysqli->query($sql);
    
    while($row = mysqli_fetch_array($resultado)) { 
        $id = $row['id'];
        $Grupo_ = $row['Grupo'];

        $Grupo = $Grupo_;
        
        if($Grupo_ == 'Grupo 1') {
            $Grupo = 'Grupo 1<br>RIESGO BAJO';
            $Grupo_ = 1;
        }
        if($Grupo_ == 'Grupo 2') {
            $Grupo = 'Grupo 2<br>RIESGO MEDIO';
            $Grupo_ = 2;
        }
        if($Grupo_ == 'Grupo 3') {
            $Grupo = 'Grupo 3<br>RIESGO ALTO';
            $Grupo_ = 3;
        }
        if($Grupo_ == 'Grupo 4') {
            $Grupo = 'Grupo 4<br>RIESGO CRÍTICO';
            $Grupo_ = 4;
        }
        
        $sql = "SELECT COUNT(*) as total FROM locomocion WHERE GES = $Grupo_ && id_admin = '$id_admin' && YEAR(Fecha_registro) = $Year";        
        $sentencia2 = $connect->prepare($sql);
        $sentencia2->execute();
        $resultado2 = $sentencia2->fetch();
        $Cantidad = $resultado2['total'];
        
        $json[] = array(
            'id' => $id,
            'Codigo' => $id_admin,
            'Promedio' => $Promedio,
            'Grupo' => nl2br($Grupo),
            'Grupo_n' => $Grupo_,
            'Descripcion' => $row['Descripcion'],
            'Individual' => $row['Individual'],
            'Ambiental' => $row['Ambiental'],
            'Periodicidad' => $row['Periodicidad'],
            'Cantidad' => $Cantidad,
            'Inspecciones' => $row['Inspecciones'],
            'Boton' => $Boton,
            'Boton2' => $Boton2,
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>