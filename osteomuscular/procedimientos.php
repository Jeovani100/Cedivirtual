<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
    if(isset($_POST['planear'])) {
        $planear = $_POST['planear'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Planear = '$planear' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['planear2'])) {
        $planear2 = $_POST['planear2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Planear = '$planear2' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['planear3'])) {
        $planear3 = $_POST['planear3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Planear = '$planear3' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['planear4'])) {
        $planear4 = $_POST['planear4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Planear = '$planear4' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['planear5'])) {
        $planear5 = $_POST['planear5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Planear = '$planear5' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['planear6'])) {
        $planear6 = $_POST['planear6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Planear = '$planear6' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['planear7'])) {
        $planear7 = $_POST['planear7'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_biologico SET Planear = '$planear7' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    
    if(isset($_POST['hacer'])) {
        $hacer = $_POST['hacer'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Hacer = '$hacer' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['hacer2'])) {
        $hacer2 = $_POST['hacer2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Hacer = '$hacer2' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['hacer3'])) {
        $hacer3 = $_POST['hacer3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Hacer = '$hacer3' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['hacer4'])) {
        $hacer4 = $_POST['hacer4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Hacer = '$hacer4' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
      if(isset($_POST['hacer5'])) {
        $hacer5 = $_POST['hacer5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Hacer = '$hacer5' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
      if(isset($_POST['hacer6'])) {
        $hacer6 = $_POST['hacer6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Hacer = '$hacer6' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
      if(isset($_POST['hacer7'])) {
        $hacer7 = $_POST['hacer7'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_biologico SET Hacer = '$hacer7' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    
    if(isset($_POST['verificar'])) {
        $verificar = $_POST['verificar'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Verificar = '$verificar' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['verificar2'])) {
        $verificar2 = $_POST['verificar2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Verificar = '$verificar2' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['verificar3'])) {
        $verificar3 = $_POST['verificar3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Verificar = '$verificar3' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['verificar4'])) {
        $verificar4 = $_POST['verificar4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Verificar = '$verificar4' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
      if(isset($_POST['verificar5'])) {
        $verificar5 = $_POST['verificar5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Verificar = '$verificar5' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
      if(isset($_POST['verificar6'])) {
        $verificar6 = $_POST['verificar6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Verificar = '$verificar6' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };  
    if(isset($_POST['verificar7'])) {
        $verificar7 = $_POST['verificar7'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_biologico SET Verificar = '$verificar7' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    
    if(isset($_POST['hacer'])) {
        $hacer = $_POST['hacer'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Hacer = '$hacer' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['hacer2'])) {
        $hacer2 = $_POST['hacer2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Hacer = '$hacer2' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['hacer3'])) {
        $hacer3 = $_POST['hacer3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Hacer = '$hacer3' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['hacer4'])) {
        $hacer4 = $_POST['hacer4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Hacer = '$hacer4' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['hacer5'])) {
        $hacer5 = $_POST['hacer5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Hacer = '$hacer5' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['hacer6'])) {
        $hacer6 = $_POST['hacer6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Hacer = '$hacer6' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['hacer7'])) {
        $hacer7 = $_POST['hacer7'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_biologico SET Hacer = '$hacer7' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    
    
    if(isset($_POST['corregir'])) {
        $corregir = $_POST['corregir'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_auditivo SET Corregir = '$corregir' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['corregir2'])) {
        $corregir2 = $_POST['corregir2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_visual SET Corregir = '$corregir2' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['corregir3'])) {
        $corregir3 = $_POST['corregir3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_cardio SET Corregir = '$corregir3' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['corregir4'])) {
        $corregir4 = $_POST['corregir4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_osteo SET Corregir = '$corregir4' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['corregir5'])) {
        $corregir5 = $_POST['corregir5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_respiratorio SET Corregir = '$corregir5' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['corregir6'])) {
        $corregir6 = $_POST['corregir6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_psicosocial SET Corregir = '$corregir6' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['corregir7'])) {
        $corregir7 = $_POST['corregir7'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE text_biologico SET Corregir = '$corregir7' WHERE id_admin = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    
    
?>