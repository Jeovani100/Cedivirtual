<?php 
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';
   
   if(isset($_POST['atributos'])) {
        $id = $_POST['id'];
        $sql = "SELECT * FROM admin WHERE id = $id";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $Botones = $row['Botones'];
        if($Botones == 1) {
            $sql = "UPDATE admin SET Botones = '0' WHERE id = $id";
        } else {
            $sql = "UPDATE admin SET Botones = 1 WHERE id = $id"; 
        }
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['objetivo'])) {
        $objetivo = $_POST['objetivo'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Objetivo = '$objetivo' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['alcance'])) {
        $alcance = $_POST['alcance'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Alcance = '$alcance' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['definicion'])) {
        $definicion = $_POST['definicion'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Definicion = '$definicion' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['responsabilidades'])) {
        $responsabilidades = $_POST['responsabilidades'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Responsabilidades = '$responsabilidades' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['planear'])) {
        $planear = $_POST['planear'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Planear = '$planear' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['hacer'])) {
        $hacer = $_POST['hacer'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Hacer = '$hacer' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['verificar'])) {
        $verificar = $_POST['verificar'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Verificar = '$verificar' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['corregir'])) {
        $corregir = $_POST['corregir'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Corregir = '$corregir' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    
    
    if(isset($_POST['objetivo2'])) {
        $objetivo = $_POST['objetivo2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Objetivo = '$objetivo' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['alcance2'])) {
        $alcance = $_POST['alcance2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Alcance = '$alcance' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['definicion2'])) {
        $definicion = $_POST['definicion2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Definicion = '$definicion' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['responsabilidades2'])) {
        $responsabilidades = $_POST['responsabilidades2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Responsabilidades = '$responsabilidades' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['planear2'])) {
        $planear = $_POST['planear2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Planear = '$planear' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['hacer2'])) {
        $hacer = $_POST['hacer2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Hacer = '$hacer' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['verificar2'])) {
        $verificar = $_POST['verificar2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Verificar = '$verificar' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['corregir2'])) {
        $corregir = $_POST['corregir2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Corregir = '$corregir' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    
    
    if(isset($_POST['objetivo3'])) {
        $objetivo = $_POST['objetivo3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Objetivo = '$objetivo' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['alcance3'])) {
        $alcance = $_POST['alcance3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Alcance = '$alcance' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['definicion3'])) {
        $definicion = $_POST['definicion3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Definicion = '$definicion' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['responsabilidades3'])) {
        $responsabilidades = $_POST['responsabilidades3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Responsabilidades = '$responsabilidades' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['planear3'])) {
        $planear = $_POST['planear3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Planear = '$planear' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['hacer3'])) {
        $hacer = $_POST['hacer3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Hacer = '$hacer' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['verificar3'])) {
        $verificar = $_POST['verificar3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Verificar = '$verificar' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['corregir3'])) {
        $corregir = $_POST['corregir3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Corregir = '$corregir' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    
    
    if(isset($_POST['objetivo4'])) {
        $objetivo = $_POST['objetivo4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Objetivo = '$objetivo' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['alcance4'])) {
        $alcance = $_POST['alcance4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Alcance = '$alcance' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['definicion4'])) {
        $definicion = $_POST['definicion4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Definicion = '$definicion' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['responsabilidades4'])) {
        $responsabilidades = $_POST['responsabilidades4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Responsabilidades = '$responsabilidades' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['planear4'])) {
        $planear = $_POST['planear4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Planear = '$planear' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['hacer4'])) {
        $hacer = $_POST['hacer4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Hacer = '$hacer' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['verificar4'])) {
        $verificar = $_POST['verificar4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Verificar = '$verificar' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['corregir4'])) {
        $corregir = $_POST['corregir4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Corregir = '$corregir' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    
    
    if(isset($_POST['objetivo5'])) {
        $objetivo = $_POST['objetivo5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Objetivo = '$objetivo' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['alcance5'])) {
        $alcance = $_POST['alcance5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Alcance = '$alcance' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['definicion5'])) {
        $definicion = $_POST['definicion5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Definicion = '$definicion' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['responsabilidades5'])) {
        $responsabilidades = $_POST['responsabilidades5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Responsabilidades = '$responsabilidades' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['planear5'])) {
        $planear = $_POST['planear5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Planear = '$planear' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['hacer5'])) {
        $hacer = $_POST['hacer5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Hacer = '$hacer' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['verificar5'])) {
        $verificar = $_POST['verificar5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Verificar = '$verificar' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['corregir5'])) {
        $corregir = $_POST['corregir5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Corregir = '$corregir' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    
    
    if(isset($_POST['objetivo6'])) {
        $objetivo = $_POST['objetivo6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Objetivo = '$objetivo' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['alcance6'])) {
        $alcance = $_POST['alcance6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Alcance = '$alcance' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['definicion6'])) {
        $definicion = $_POST['definicion6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Definicion = '$definicion' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['responsabilidades6'])) {
        $responsabilidades = $_POST['responsabilidades6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Responsabilidades = '$responsabilidades' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['planear6'])) {
        $planear = $_POST['planear6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Planear = '$planear' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['hacer6'])) {
        $hacer = $_POST['hacer6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Hacer = '$hacer' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['verificar6'])) {
        $verificar = $_POST['verificar6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Verificar = '$verificar' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['corregir6'])) {
        $corregir = $_POST['corregir6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Corregir = '$corregir' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };