<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    if (isset($_POST['id_admin'])) {
	$id_admin = $_POST['id_admin'];
	$sve = $_POST['sve'];
    }
    $sql = "SELECT COUNT(*) as total FROM recursos_formacion WHERE id_admin = '$id_admin' && sve = $sve";     
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios = $resultado['total']; 
    
    $sql = "SELECT * FROM admin WHERE id = '$id_admin'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Botones_ = $row['Botones'];
    if($Botones_ == 1) {
        $Boton ='';
        $Boton2 ='inline';
    } else {
        $Boton ='disabled'; 
        $Boton2 ='none';
    }
    if ($total_usuarios >= 1){
    $sql = "SELECT * FROM recursos_formacion WHERE id_admin = '$id_admin' && sve = $sve ORDER BY id DESC";
    $resultado = $mysqli->query($sql);
    while($row = mysqli_fetch_array($resultado)) { 
        
        $Fecha_ = $row['Fecha_registro'];
        $Fecha = strtotime($Fecha_);
        $year = date("Y", $Fecha);
        $mes0 = date("m", $Fecha);
        $dia = date("d", $Fecha);
        $hora = date("H", $Fecha);
        $minutos = date("i", $Fecha);
        $segundos = date("s", $Fecha);
        switch ($mes0) {
            case '01':
                $mes = "enero";
                break;
            case '02':
                $mes = "febrero";
                break;
            case '03':
                $mes = "marzo";
                break;
            case '04':
                $mes = "abril";
                break;
            case '05':
                $mes = "mayo";
                break;
            case '06':
                $mes = "junio";
                break;
            case '07':
                $mes = "julio";
                break;
            case '08':
                $mes = "agosto";
                break;
            case '09':
                $mes = "septiembre";
                break;
            case '10':
                $mes = "octubre";
                break;
            case '11':
                $mes = "noviembre";
                break;
            case '12':
                $mes = "diciembre";
                break;
        }
        $Fecha_final = $dia.' de '.$mes.' de '.$year.' '.$hora.':'.$minutos.':'.$segundos;
    
        $Extension = end(explode(".", $row['Nombre']));
        $json[] = array(
            'id' => $row['id'],
            'Codigo' => $row['Codigo'],
            'Recurso' => $row['Recurso'],
            'Descripcion' => $row['Descripcion'],
            'Nombre' => $row['Nombre'],
            'Extension' => $Extension,
            'Boton' => $Boton,
            'Boton2' => $Boton2,
            'Fecha' => $Fecha_final
        );
    }
    } else {
        $json[] = array(
            'id' => '',
            'Codigo' => '',
            'Recurso' => '',
            'Descripcion' => '',
            'Nombre' => '',
            'Extension' => '',
            'Boton' => '',
            'Boton2' => '',
            'Fecha' => '',
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>