<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    if (isset($_POST['id_admin'])) {
    $id_admin=$_POST["id_admin"];
    $sql = "SELECT * FROM controles_auditivo WHERE id_admin = '$id_admin' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');
    $Actividad=$_POST["Actividad_I"];
    $Responsable=$_POST["Responsable_I"];
    $Periodicidad=$_POST["Periodicidad_I"];
    $Observaciones=$_POST["Observaciones_I"];
    $sql = "INSERT INTO implementacion (id_admin, Tipo, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$id_admin', 2, $Year, '$Actividad', '$Responsable', '$Periodicidad',   0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
    $resultado = $mysqli->query($sql);
    }
    
    if (isset($_POST['id_admin2'])) {
    $id_admin=$_POST["id_admin2"];
    $sql = "SELECT * FROM controles_visual WHERE id_admin = '$id_admin' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');
    $Actividad=$_POST["Actividad_I"];
    $Responsable=$_POST["Responsable_I"];
    $Periodicidad=$_POST["Periodicidad_I"];
    $Observaciones=$_POST["Observaciones_I"];
    $sql = "INSERT INTO implementacion2 (id_admin, Tipo, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$id_admin', 2, $Year, '$Actividad', '$Responsable', '$Periodicidad',   0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
    $resultado = $mysqli->query($sql);
    }
    
    if (isset($_POST['id_admin3'])) {
    $id_admin=$_POST["id_admin3"];
    $sql = "SELECT * FROM controles_cardio WHERE id_admin = '$id_admin' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');
    $Actividad=$_POST["Actividad_I"];
    $Responsable=$_POST["Responsable_I"];
    $Periodicidad=$_POST["Periodicidad_I"];
    $Observaciones=$_POST["Observaciones_I"];
    $sql = "INSERT INTO implementacion3 (id_admin, Tipo, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$id_admin', 2, $Year, '$Actividad', '$Responsable', '$Periodicidad',   0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
    $resultado = $mysqli->query($sql);
    }
    
    if (isset($_POST['id_admin4'])) {
    $id_admin=$_POST["id_admin4"];
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$id_admin' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');
    $Actividad=$_POST["Actividad_I"];
    $Responsable=$_POST["Responsable_I"];
    $Periodicidad=$_POST["Periodicidad_I"];
    $Observaciones=$_POST["Observaciones_I"];
    $sql = "INSERT INTO implementacion4 (id_admin, Tipo, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$id_admin', 2, $Year, '$Actividad', '$Responsable', '$Periodicidad',   0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
    $resultado = $mysqli->query($sql);
    }
    
    if (isset($_POST['id_admin5'])) {
    $id_admin=$_POST["id_admin5"];
    $sql = "SELECT * FROM controles_respiratorio WHERE id_admin = '$id_admin' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');
    $Actividad=$_POST["Actividad_I"];
    $Responsable=$_POST["Responsable_I"];
    $Periodicidad=$_POST["Periodicidad_I"];
    $Observaciones=$_POST["Observaciones_I"];
    $sql = "INSERT INTO implementacion5 (id_admin, Tipo, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$id_admin', 2, $Year, '$Actividad', '$Responsable', '$Periodicidad',   0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
    $resultado = $mysqli->query($sql);
    }
    
    if (isset($_POST['id_admin6'])) {
    $id_admin=$_POST["id_admin6"];
    $sql = "SELECT * FROM controles_psicosocial WHERE id_admin = '$id_admin' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');
    $Actividad=$_POST["Actividad_I"];
    $Responsable=$_POST["Responsable_I"];
    $Periodicidad=$_POST["Periodicidad_I"];
    $Observaciones=$_POST["Observaciones_I"];
    $sql = "INSERT INTO implementacion6 (id_admin, Tipo, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$id_admin', 2, $Year, '$Actividad', '$Responsable', '$Periodicidad',   0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
    $resultado = $mysqli->query($sql);
    }
    
?>