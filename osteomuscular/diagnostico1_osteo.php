<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
	$Codigo = $_POST['Codigo'];
	
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
    
    $sql = "SELECT * FROM locomocion WHERE id_admin = '$Codigo'  && P6 = 20 && Fecha_registro >= '$Inicio0' &&  Fecha_registro <= '$Terminacion0'";
    $resultado = $mysqli->query($sql);
    $numeracion = 0;
    while($row = mysqli_fetch_array($resultado)) { 
        $numeracion++;
        $id = $row['id'];
        $Codigo = $row['Codigo'];
        $Nombre = $row['Nombre'];
        $Cedula = $row['Cedula'];
        $Cargo = $row['Cargo'];
        $Sede = $row['Sede'];
        $Empresa_certificada = $row['Empresa_certificada'];
        $Ingreso_SVE = $row['Ingreso_SVE'];
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo'";
        $resultado2 = $mysqli->query($sql);
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo' ORDER BY id ASC LIMIT 1";
        $resultado0 = $mysqli->query($sql);
        $row0 = $resultado0->fetch_array(MYSQLI_ASSOC);
        $diag1_ = $row0['Diagnostico'];
        if($diag1_ == null) {
            $diag1 = ' ';
        } else {
            $diag1 ='-'.$diag1_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo' ORDER BY id ASC LIMIT 1,1";
        $resultado2 = $mysqli->query($sql);
        $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
        $diag2_ = $row2['Diagnostico'];
        if($diag2_ == null) {
            $diag2 = ' ';
        } else {
            $diag2 ='<br>-'.$diag2_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo' ORDER BY id ASC LIMIT 2,1";
        $resultado3 = $mysqli->query($sql);
        $row3 = $resultado3->fetch_array(MYSQLI_ASSOC);
        $diag3_ = $row3['Diagnostico'];
        if($diag3_ == null) {
            $diag3 = ' ';
        } else {
            $diag3 ='<br>-'.$diag3_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo' ORDER BY id ASC LIMIT 3,1";
        $resultado4 = $mysqli->query($sql);
        $row4 = $resultado4->fetch_array(MYSQLI_ASSOC);
        $diag4_ = $row4['Diagnostico'];
        if($diag4_ == null) {
            $diag4 = ' ';
        } else {
            $diag4 ='<br>-'.$diag4_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo' ORDER BY id ASC LIMIT 4,1";
        $resultado5 = $mysqli->query($sql);
        $row5 = $resultado5->fetch_array(MYSQLI_ASSOC);
        $diag5_ = $row5['Diagnostico'];
        if($diag5_ == null) {
            $diag5 = ' ';
        } else {
            $diag5 ='<br>-'.$diag5_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo' ORDER BY id ASC LIMIT 5,1";
        $resultado6 = $mysqli->query($sql);
        $row6 = $resultado6->fetch_array(MYSQLI_ASSOC);
        $diag6_ = $row6['Diagnostico'];
        if($diag6_ == null) {
            $diag6 = ' ';
        } else {
            $diag6 ='<br>-'.$diag6_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo' ORDER BY id ASC LIMIT 6,1";
        $resultado7 = $mysqli->query($sql);
        $row7 = $resultado7->fetch_array(MYSQLI_ASSOC);
        $diag7_ = $row7['Diagnostico'];
        if($diag7_ == null) {
            $diag7 = ' ';
        } else {
            $diag7 ='<br>-'.$diag7_;
        }
        
        $sql = "SELECT * FROM diagnostico_osteomuscular WHERE id_admin = '$Codigo' ORDER BY id ASC LIMIT 7,1";
        $resultado8 = $mysqli->query($sql);
        $row8 = $resultado8->fetch_array(MYSQLI_ASSOC);
        $diag8_ = $row8['Diagnostico'];
        if($diag8_ == null) {
            $diag8 = ' ';
        } else {
            $diag8 ='<br>-'.$diag8_;
        }

 
        $json[] = array(
            'id' => $id,
            'N' => $numeracion,
            'Nombre' => $Nombre,
            'Cedula' => $Cedula,
            'Cargo' => $Cargo,
            'Sede' => $Sede,
            'Diagnostico' => $diag1.$diag2.$diag3.$diag4.$diag5.$diag6.$diag7.$diag8,
            'Empresa_certificada' => $Empresa_certificada,
            'total_usuarios' => $total_usuarios,
            'Ingreso_SVE' => $Ingreso_SVE

        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 

?>