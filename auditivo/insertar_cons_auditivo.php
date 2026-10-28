<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';  
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
    if(isset($_POST['Evaluar'])) {
       $Codigo=$_POST["Codigo"];
       $Evaluar=$_POST["Evaluar"];
       $sql = "UPDATE consolidado_auditivo SET Evaluar = $Evaluar WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['Meta1'])) {
       $Codigo=$_POST["Codigo"];
       $Meta1=$_POST["Meta1"];
       $sql = "UPDATE consolidado_auditivo SET Meta1 = '$Meta1' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['Meta2'])) {
       $Codigo=$_POST["Codigo"];
       $Meta2=$_POST["Meta2"];
       $sql = "UPDATE consolidado_auditivo SET Meta2 = '$Meta2' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['Meta1_D'])) {
       $Codigo=$_POST["Codigo"];
       $Meta1_D=$_POST["Meta1_D"];
       $sql = "UPDATE consolidado_auditivo SET Meta1_D = '$Meta1_D' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['Meta2_D'])) {
       $Codigo=$_POST["Codigo"];
       $Meta2_D=$_POST["Meta2_D"];
       $sql = "UPDATE consolidado_auditivo SET Meta2_D = '$Meta2_D' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    
        $Codigo=$_POST["Codigo"];
        $sql = "SELECT * FROM consolidado_auditivo WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $Evaluar = $row['Evaluar'];
        $Meta1_C = $row['Meta1'];
        $Meta2_C = $row['Meta2'];
        $EL1 = $row['EL1'];
        $EL2 = $row['EL2'];
        $EL3 = $row['EL3'];
        $EL4 = $row['EL4'];
        $EL5 = $row['EL5'];
        $EL6 = $row['EL6'];
        $EL7 = $row['EL7'];
        $EL8 = $row['EL8'];
        $EL9 = $row['EL9'];
        $EL10 = $row['EL10'];
        $EL11 = $row['EL11'];
        $EL12 = $row['EL12'];
        $TEXP1 = $row['TEXP1'];
        $TEXP2 = $row['TEXP2'];
        $TEXP3 = $row['TEXP3'];
        $TEXP4 = $row['TEXP4'];
        $TEXP5 = $row['TEXP5'];
        $TEXP6 = $row['TEXP6'];
        $TEXP7 = $row['TEXP7'];
        $TEXP8 = $row['TEXP8'];
        $TEXP9 = $row['TEXP9'];
        $TEXP10 = $row['TEXP10'];
        $TEXP11 = $row['TEXP11'];
        $TEXP12 = $row['TEXP12'];
        $NANT1 = $row['NANT1'];
        $NANT2 = $row['NANT2'];
        $NANT3 = $row['NANT3'];
        $NANT4 = $row['NANT4'];
        $NANT5 = $row['NANT5'];
        $NANT6 = $row['NANT6'];
        $NANT7 = $row['NANT7'];
        $NANT8 = $row['NANT8'];
        $NANT9 = $row['NANT9'];
        $NANT10 = $row['NANT10'];
        $NANT11 = $row['NANT11'];
        $NANT12 = $row['NANT12'];
        $TEXP_1 = $row['TEXP_1'];
        $TEXP_2 = $row['TEXP_2'];
        $TEXP_3 = $row['TEXP_3'];
        $TEXP_4 = $row['TEXP_4'];
        $TEXP_5 = $row['TEXP_5'];
        $TEXP_6 = $row['TEXP_6'];
        $TEXP_7 = $row['TEXP_7'];
        $TEXP_8 = $row['TEXP_8'];
        $TEXP_9 = $row['TEXP_9'];
        $TEXP_10 = $row['TEXP_10'];
        $TEXP_11 = $row['TEXP_11'];
        $TEXP_12 = $row['TEXP_12'];
        $Meta1_D = $row['Meta1_D'];
        $Meta2_D = $row['Meta2_D'];
    
    if(isset($_POST['EL1'])) {
       $Codigo=$_POST["Codigo"];
       $EL1=$_POST["EL1"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL1 = '$EL1', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['EL2'])) {
       $Codigo=$_POST["Codigo"];
       $EL2=$_POST["EL2"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL2 = '$EL2', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['EL3'])) {
       $Codigo=$_POST["Codigo"];
       $EL3=$_POST["EL3"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL3 = '$EL3', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['EL4'])) {
       $Codigo=$_POST["Codigo"];
       $EL4=$_POST["EL4"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL4 = '$EL4', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['EL5'])) {
       $Codigo=$_POST["Codigo"];
       $EL5=$_POST["EL5"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL5 = '$EL5', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['EL6'])) {
       $Codigo=$_POST["Codigo"];
       $EL6=$_POST["EL6"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL6 = '$EL6', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['EL7'])) {
       $Codigo=$_POST["Codigo"];
       $EL7=$_POST["EL7"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL7 = '$EL7', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['EL8'])) {
       $Codigo=$_POST["Codigo"];
       $EL8=$_POST["EL8"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL8 = '$EL8', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['EL9'])) {
       $Codigo=$_POST["Codigo"];
       $EL9=$_POST["EL9"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL9 = '$EL9', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['EL10'])) {
       $Codigo=$_POST["Codigo"];
       $EL10=$_POST["EL10"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL10 = '$EL10', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['EL11'])) {
       $Codigo=$_POST["Codigo"];
       $EL11=$_POST["EL11"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL11 = '$EL11', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['EL12'])) {
       $Codigo=$_POST["Codigo"];
       $EL12=$_POST["EL12"];
       $EL13 = $EL1 + $EL2 + $EL3 + $EL4 + $EL5 + $EL6 + $EL7 + $EL8 + $EL9 + $EL10 + $EL11 + $EL12;
       $sql = "UPDATE consolidado_auditivo SET EL12 = '$EL12', EL13 = '$EL13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    
     if(isset($_POST['TEXP1'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP1=$_POST["TEXP1"];
       $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP1 = '$TEXP1', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP2'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP2=$_POST["TEXP2"];
       $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP2 = '$TEXP2', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP3'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP3=$_POST["TEXP3"];
       $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP3 = '$TEXP3', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP4'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP4=$_POST["TEXP4"];
       $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP4 = '$TEXP4', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP5'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP5=$_POST["TEXP5"];
      $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP5 = '$TEXP5', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP6'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP6=$_POST["TEXP6"];
       $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP6 = '$TEXP6', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP7'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP7=$_POST["TEXP7"];
       $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP7 = '$TEXP7', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP8'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP8=$_POST["TEXP8"];
       $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP8 = '$TEXP8', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP9'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP9=$_POST["TEXP9"];
       $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP9 = '$TEXP9', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP10'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP10=$_POST["TEXP10"];
       $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP10 = '$TEXP10', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP11'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP11=$_POST["TEXP11"];
       $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP11 = '$TEXP11', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP12'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP12=$_POST["TEXP12"];
       $TEXP13_ = $TEXP1 + $TEXP2 + $TEXP3 + $TEXP4 + $TEXP5 + $TEXP6 + $TEXP7 + $TEXP8 + $TEXP9 + $TEXP10 + $TEXP11 + $TEXP12;
       $TEXP13 = round(($TEXP13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP12 = '$TEXP12', TEXP13 = '$TEXP13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    
     if(isset($_POST['NANT1'])) {
       $Codigo=$_POST["Codigo"];
       $NANT1=$_POST["NANT1"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT1 = '$NANT1', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['NANT2'])) {
       $Codigo=$_POST["Codigo"];
       $NANT2=$_POST["NANT2"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT2 = '$NANT2', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['NANT3'])) {
       $Codigo=$_POST["Codigo"];
       $NANT3=$_POST["NANT3"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT3 = '$NANT3', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['NANT4'])) {
       $Codigo=$_POST["Codigo"];
       $NANT4=$_POST["NANT4"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT4 = '$NANT4', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['NANT5'])) {
       $Codigo=$_POST["Codigo"];
       $NANT5=$_POST["NANT5"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT5 = '$NANT5', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['NANT6'])) {
       $Codigo=$_POST["Codigo"];
       $NANT6=$_POST["NANT6"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT6 = '$NANT6', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['NANT7'])) {
       $Codigo=$_POST["Codigo"];
       $NANT7=$_POST["NANT7"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT7 = '$NANT7', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['NANT8'])) {
       $Codigo=$_POST["Codigo"];
       $NANT8=$_POST["NANT8"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT8 = '$NANT8', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['NANT9'])) {
       $Codigo=$_POST["Codigo"];
       $NANT9=$_POST["NANT9"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT9 = '$NANT9', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['NANT10'])) {
       $Codigo=$_POST["Codigo"];
       $NANT10=$_POST["NANT10"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT10 = '$NANT10', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['NANT11'])) {
       $Codigo=$_POST["Codigo"];
       $NANT11=$_POST["NANT11"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT11 = '$NANT11', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['NANT12'])) {
       $Codigo=$_POST["Codigo"];
       $NANT12=$_POST["NANT12"];
       $NANT13 = $NANT1 + $NANT2 + $NANT3 + $NANT4 + $NANT5 + $NANT6 + $NANT7 + $NANT8 + $NANT9 + $NANT10 + $NANT11 + $NANT12;
       $sql = "UPDATE consolidado_auditivo SET NANT12 = '$NANT12', NANT13 = '$NANT13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    
    if(isset($_POST['TEXP_1'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_1=$_POST["TEXP_1"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_1 = '$TEXP_1', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP_2'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_2=$_POST["TEXP_2"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_2 = '$TEXP_2', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP_3'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_3=$_POST["TEXP_3"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_3 = '$TEXP_3', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP_4'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_4=$_POST["TEXP_4"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_4 = '$TEXP_4', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP_5'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_5=$_POST["TEXP_5"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_5 = '$TEXP_5', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP_6'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_6=$_POST["TEXP_6"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_6 = '$TEXP_6', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP_7'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_7=$_POST["TEXP_7"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_7 = '$TEXP_7', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP_8'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_8=$_POST["TEXP_8"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_8 = '$TEXP_8', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP_9'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_9=$_POST["TEXP_9"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_9 = '$TEXP_9', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP_10'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_10=$_POST["TEXP_10"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_10 = '$TEXP_10', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP_11'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_11=$_POST["TEXP_11"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_11 = '$TEXP_11', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['TEXP_12'])) {
       $Codigo=$_POST["Codigo"];
       $TEXP_12=$_POST["TEXP_12"];
       $TEXP_13_ = $TEXP_1 + $TEXP_2 + $TEXP_3 + $TEXP_4 + $TEXP_5 + $TEXP_6 + $TEXP_7 + $TEXP_8 + $TEXP_9 + $TEXP_10 + $TEXP_11 + $TEXP_12;
       $TEXP_13 = round(($TEXP_13_/12), 0, PHP_ROUND_HALF_UP);
       $sql = "UPDATE consolidado_auditivo SET TEXP_12 = '$TEXP_12', TEXP_13 = '$TEXP_13' WHERE Codigo = '$Codigo'";
       $resultado = $mysqli->query($sql);
    }