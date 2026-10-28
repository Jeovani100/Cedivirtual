 <?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
    $id_admin = $_POST['id_admin'];
    $Codigo = $_POST['Codigo'];
    
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios = $resultado['total']; 
   // $total_usuarios = 2696; 
        
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
    $EL13 = $row['EL13'];
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
    $TEXP13 = $row['TEXP13'];
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
    $NANT13 = $row['NANT13'];
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
    $TEXP_13 = $row['TEXP_13'];
    
    $Total_evaluaciones = round((($total_usuarios*$Evaluar)/100), 0, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE id_admin = '$Codigo' && Fecha_registro >= '2023-01-01' && Fecha_registro <= '2023-06-31'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_auditivo1 = $resultado['total']; 
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE id_admin = '$Codigo' && Fecha_registro >= '2023-07-01' && Fecha_registro <= '2023-12-31'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_auditivo2 = $resultado['total'];
  //  $total_auditivo2 = 200;
    
    $sql = "SELECT AVG(Total1_C) as total FROM seguimiento_auditivo WHERE id_admin = '$Codigo' && Fecha_registro >= '2023-01-01' && Fecha_registro <= '2023-06-31'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $promedio1 = round($resultado['total'], 1, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT AVG(Total2_C) as total FROM seguimiento_auditivo WHERE id_admin = '$Codigo' && Fecha_registro >= '2023-07-01' && Fecha_registro <= '2023-12-31";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $promedio2 = round($resultado['total'], 1, PHP_ROUND_HALF_UP);
    //$promedio2 = 5;
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE id_admin = '$Codigo' && Total1_C >= 3 && Fecha_registro >= '2023-01-01' && Fecha_registro <= '2023-06-31'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $mayor3_1 = $resultado['total']; 
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE id_admin = '$Codigo' && Total2_C >= 3 && Fecha_registro >= '2023-07-01' && Fecha_registro <= '2023-12-31'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $mayor3_2 = $resultado['total']; 
   // $mayor3_2 = 150; 
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE id_admin = '$Codigo' && Total1_C < 3 && Total1_C > '0' && Fecha_registro >= '2023-01-01' && Fecha_registro <= '2023-06-31'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $menor3_1 = $resultado['total'];
    
    $sql = "SELECT COUNT(*) as total FROM seguimiento_auditivo WHERE id_admin = '$Codigo' && Total2_C < 3 && Total2_C > '0' && Fecha_registro >= '2023-07-01' && Fecha_registro <= '2023-12-31'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $menor3_2 = $resultado['total'];
   // $menor3_2 = 50;
    
    $eficaciacontroles1 = round(($mayor3_1/$Total_evaluaciones)*100, 1, PHP_ROUND_HALF_UP);
    $eficaciacontroles2 = round(($mayor3_2/$Total_evaluaciones)*100, 1, PHP_ROUND_HALF_UP);
    
    $eficaciacontroles1_ = round(($mayor3_1/$Total_evaluaciones)*100, 1, PHP_ROUND_HALF_UP);
    $eficaciacontroles2_ = round(($mayor3_2/$Total_evaluaciones)*100, 1, PHP_ROUND_HALF_UP);
    
    $totaleficiencia1 = round(($total_auditivo1/$Total_evaluaciones)*100, 1, PHP_ROUND_HALF_UP);
    $totaleficiencia2 = round(($total_auditivo2/$Total_evaluaciones)*100, 1, PHP_ROUND_HALF_UP);
    
    $totaleficiencia1_ = round(($total_auditivo1/$Total_evaluaciones)*100, 1, PHP_ROUND_HALF_UP);
    $totaleficiencia2_ = round(($total_auditivo2/$Total_evaluaciones)*100, 1, PHP_ROUND_HALF_UP);
    
    if($TEXP1 != 0){
        $R1 = round(($EL1/$TEXP1)*100, 2, PHP_ROUND_HALF_UP); 
    } else {
        $R1 = 0; 
    }
    if($TEXP2 != 0){
        $R2 = round(($EL2/$TEXP2)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R2 = 0; 
    }
    if($TEXP3 != 0){
        $R3 = round(($EL3/$TEXP3)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R3 = 0; 
    }
    if($TEXP4 != 0){
        $R4 = round(($EL4/$TEXP4)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R4 = 0; 
    }
    if($TEXP5 != 0){
        $R5 = round(($EL5/$TEXP5)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R5 = 0; 
    }
    if($TEXP6 != 0){
        $R6 = round(($EL6/$TEXP6)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R6 = 0; 
    }
    if($TEXP7 != 0){
        $R7 = round(($EL7/$TEXP7)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R7 = 0; 
    }
    if($TEXP8 != 0){
        $R8 = round(($EL8/$TEXP8)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R8 = 0; 
    }
    if($TEXP9 != 0){
        $R9 = round(($EL9/$TEXP9)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R9 = 0; 
    }
    if($TEXP10 != 0){
        $R10 = round(($EL10/$TEXP10)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R10 = 0; 
    }
    if($TEXP11 != 0){
        $R11 = round(($EL11/$TEXP11)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R11 = 0; 
    }
    if($TEXP12 != 0){
        $R12 = round(($EL12/$TEXP12)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R12 = 0; 
    }
    if($TEXP13 != 0){
        $R13_ = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10 + $R11 + $R12;
        $R13 = round(($R13_/12), 3, PHP_ROUND_HALF_UP);
    } else {
        $R13 = 0; 
    }
    
    if ($R1 == 0) {
        $E1 = 'LOGRADA';
    } else {
        $E1 = 'CONTROL';
    }
    if ($R2 == 0) {
        $E2 = 'LOGRADA';
    } else {
        $E2 = 'CONTROL';
    }
     if ($R3 == 0) {
        $E3 = 'LOGRADA';
    } else {
        $E3 = 'CONTROL';
    }
     if ($R4 == 0) {
        $E4 = 'LOGRADA';
    } else {
        $E4 = 'CONTROL';
    }
     if ($R5 == 0) {
        $E5 = 'LOGRADA';
    } else {
        $E5 = 'CONTROL';
    }
     if ($R6 == 0) {
        $E6 = 'LOGRADA';
    } else {
        $E6 = 'CONTROL';
    }
     if ($R7 == 0) {
        $E7 = 'LOGRADA';
    } else {
        $E7 = 'CONTROL';
    }
     if ($R8 == 0) {
        $E8 = 'LOGRADA';
    } else {
        $E8 = 'CONTROL';
    }
     if ($R9 == 0) {
        $E9 = 'LOGRADA';
    } else {
        $E9 = 'CONTROL';
    }
     if ($R10 == 0) {
        $E10 = 'LOGRADA';
    } else {
        $E10 = 'CONTROL';
    }
     if ($R11 == 0) {
        $E11 = 'LOGRADA';
    } else {
        $E11 = 'CONTROL';
    }
     if ($R12 == 0) {
        $E12 = 'LOGRADA';
    } else {
        $E12 = 'CONTROL';
    }
     if ($R13 == 0) {
        $E13 = 'LOGRADA';
    } else {
        $E13 = 'CONTROL';
    }
    
    if($TEXP_1 != 0){
        $R_1 = round(($NANT1/$TEXP_1)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_1 = 0; 
    }
    if($TEXP_2 != 0){
        $R_2 = round(($NANT2/$TEXP_2)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_2 = 0; 
    }
    if($TEXP_3 != 0){
        $R_3 = round(($NANT3/$TEXP_3)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_3 = 0; 
    }
    if($TEXP_4 != 0){
        $R_4 = round(($NANT4/$TEXP_4)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_4 = 0; 
    }
    if($TEXP_5 != 0){
        $R_5 = round(($NANT5/$TEXP_5)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_5 = 0; 
    }
    if($TEXP_6 != 0){
        $R_6 = round(($NANT6/$TEXP_6)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_6 = 0; 
    }
    if($TEXP_7 != 0){
        $R_7 = round(($NANT7/$TEXP_7)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_7 = 0; 
    }
    if($TEXP_8 != 0){
    $R_8 = round(($NANT8/$TEXP_8)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_8 = 0; 
    }
    if($TEXP_9 != 0){
        $R_9 = round(($NANT9/$TEXP_9)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_9 = 0; 
    }
    if($TEXP_10 != 0){
        $R_10 = round(($NANT10/$TEXP_10)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_10 = 0; 
    }
    if($TEXP_1 != 0){
       $R_11 = round(($NANT11/$TEXP_11)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_11 = 0; 
    }
    if($TEXP_1 != 0){
        $R_12 = round(($NANT12/$TEXP_12)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_12 = 0; 
    }
    if($TEXP_1 != 0){
        $R13_ = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10 + $R11 + $R12;
        $R13 = round(($R13_/12), 3, PHP_ROUND_HALF_UP);
        $R_13 = round(($NANT13/$TEXP_13)*100, 2, PHP_ROUND_HALF_UP);
    } else {
        $R_13 = 0; 
    }
    
    if ($R_1 == 0) {
        $E_1 = 'LOGRADA';
    } else {
        $E_1 = 'CONTROL';
    }
    if ($R_2 == 0) {
        $E_2 = 'LOGRADA';
    } else {
        $E_2 = 'CONTROL';
    }
     if ($R_3 == 0) {
        $E_3 = 'LOGRADA';
    } else {
        $E_3 = 'CONTROL';
    }
     if ($R_4 == 0) {
        $E_4 = 'LOGRADA';
    } else {
        $E_4 = 'CONTROL';
    }
     if ($R_5 == 0) {
        $E_5 = 'LOGRADA';
    } else {
        $E_5 = 'CONTROL';
    }
     if ($R_6 == 0) {
        $E_6 = 'LOGRADA';
    } else {
        $E_6 = 'CONTROL';
    }
     if ($R_7 == 0) {
        $E_7 = 'LOGRADA';
    } else {
        $E_7 = 'CONTROL';
    }
     if ($R_8 == 0) {
        $E_8 = 'LOGRADA';
    } else {
        $E_8 = 'CONTROL';
    }
     if ($R_9 == 0) {
        $E_9 = 'LOGRADA';
    } else {
        $E_9 = 'CONTROL';
    }
     if ($R_10 == 0) {
        $E_10 = 'LOGRADA';
    } else {
        $E_10 = 'CONTROL';
    }
     if ($R_11 == 0) {
        $E_11 = 'LOGRADA';
    } else {
        $E_11 = 'CONTROL';
    }
     if ($R_12 == 0) {
        $E_12 = 'LOGRADA';
    } else {
        $E_12 = 'CONTROL';
    }
     if ($R_13 == 0) {
        $E_13 = 'LOGRADA';
    } else {
        $E_13 = 'CONTROL';
    }
    
    $Meta1_D = $row['Meta1_D'];
    $Meta2_D = $row['Meta2_D'];

    $json[] = array(
        'total' => $total_usuarios,                         /*NUMERO TOTAL DE EMPLEADOS EXPUESTOS*/
        'evaluar' => $Evaluar,                              /*PORCENTAJE EMPLEADOS A EVALUAR (valor variable)*/
        'total_evaluaciones' => $Total_evaluaciones,        /*total evaluaciones por semestre*/
        'total_auditivo1' => $total_auditivo1,              /*TOTAL DE EVALUACIONES REALIZADAS 1 SEMESTRE*/
        'total_auditivo2' => $total_auditivo2,              /*TOTAL DE EVALUACIONES REALIZADAS 2 SEMESTRE*/           /*TOTAL DE EVALUACIONES REALIZADAS 2 SEMESTRE*/
        'promedio1' => $promedio1,                          /*CALIFICACIÓN PROMEDIO DE EVALUACIONES 1*/
        'promedio2' => $promedio2,                          /*CALIFICACIÓN PROMEDIO DE EVALUACIONES 2*/
        'mayor3_1' => $mayor3_1,                            /*# CALIFICACIÓN MAYOR O IGUAL A 3*/
        'mayor3_2' => $mayor3_2,                            /*# CALIFICACIÓN MAYOR O IGUAL A 3*/                    /*# CALIFICACIÓN MAYOR O IGUAL A 3*/
        'menor3_1' => $menor3_1,                            /*# HALLAZGOS DE INPECCIONES1 - CALIFICACIÓN MENOR DE 3*/
        'menor3_2' => $menor3_2,                            /*# HALLAZGOS DE INPECCIONES2 - CALIFICACIÓN MENOR DE 3*/
        'eficaciacontroles1' => $eficaciacontroles1,        /*% EFICACIA EN CONTROLES EFECTIVOS*/
        'eficaciacontroles2' => $eficaciacontroles2,        /*% EFICACIA EN CONTROLES EFECTIVOS*/
        'totaleficiencia1' => $totaleficiencia1,            /*TOTAL DE EFICACIA EN EVALUACIONES*/
        'totaleficiencia2' => $totaleficiencia2,            /*TOTAL DE EFICACIA EN EVALUACIONES*/
        'Meta1_C' => $Meta1_C,  
        'Meta2_C' => $Meta2_C, 
        'EL1' => $EL1,  
        'EL2' => $EL2, 
        'EL3' => $EL3, 
        'EL4' => $EL4, 
        'EL5' => $EL5, 
        'EL6' => $EL6, 
        'EL7' => $EL7, 
        'EL8' => $EL8,
        'EL9' => $EL9, 
        'EL10' => $EL10, 
        'EL11' => $EL11, 
        'EL12' => $EL12, 
        'EL13' => $EL13, 
        'TEXP1' => $TEXP1,  
        'TEXP2' => $TEXP2, 
        'TEXP3' => $TEXP3, 
        'TEXP4' => $TEXP4, 
        'TEXP5' => $TEXP5, 
        'TEXP6' => $TEXP6, 
        'TEXP7' => $TEXP7, 
        'TEXP8' => $TEXP8,
        'TEXP9' => $TEXP9, 
        'TEXP10' => $TEXP10, 
        'TEXP11' => $TEXP11, 
        'TEXP12' => $TEXP12, 
        'TEXP13' => $TEXP13, 
        'R1' => $R1, 
        'R2' => $R2, 
        'R3' => $R3,
        'R4' => $R4,
        'R5' => $R5,
        'R6' => $R6,
        'R7' => $R7,
        'R8' => $R8,
        'R9' => $R9,
        'R10' => $R10,
        'R11' => $R11,
        'R12' => $R12,
        'R13' => $R13,
        'E1' => $E1, 
        'E2' => $E2,
        'E3' => $E3,
        'E4' => $E4,
        'E5' => $E5,
        'E6' => $E6,
        'E7' => $E7,
        'E8' => $E8,
        'E9' => $E9,
        'E10' => $E10,
        'E11' => $E11,
        'E12' => $E12,
        'E13' => $E13,
        'NANT1' => $NANT1,  
        'NANT2' => $NANT2, 
        'NANT3' => $NANT3, 
        'NANT4' => $NANT4, 
        'NANT5' => $NANT5, 
        'NANT6' => $NANT6, 
        'NANT7' => $NANT7, 
        'NANT8' => $NANT8,
        'NANT9' => $NANT9, 
        'NANT10' => $NANT10, 
        'NANT11' => $NANT11, 
        'NANT12' => $NANT12, 
        'NANT13' => $NANT13, 
        'TEXP_1' => $TEXP_1,  
        'TEXP_2' => $TEXP_2, 
        'TEXP_3' => $TEXP_3, 
        'TEXP_4' => $TEXP_4, 
        'TEXP_5' => $TEXP_5, 
        'TEXP_6' => $TEXP_6, 
        'TEXP_7' => $TEXP_7, 
        'TEXP_8' => $TEXP_8,
        'TEXP_9' => $TEXP_9, 
        'TEXP_10' => $TEXP_10, 
        'TEXP_11' => $TEXP_11, 
        'TEXP_12' => $TEXP_12, 
        'TEXP_13' => $TEXP_13,
        'R_1' => $R_1, 
        'R_2' => $R_2, 
        'R_3' => $R_3,
        'R_4' => $R_4,
        'R_5' => $R_5,
        'R_6' => $R_6,
        'R_7' => $R_7,
        'R_8' => $R_8,
        'R_9' => $R_9,
        'R_10' => $R_10,
        'R_11' => $R_11,
        'R_12' => $R_12,
        'R_13' => $R_13,
        'E_1' => $E_1, 
        'E_2' => $E_2,
        'E_3' => $E_3,
        'E_4' => $E_4,
        'E_5' => $E_5,
        'E_6' => $E_6,
        'E_7' => $E_7,
        'E_8' => $E_8,
        'E_9' => $E_9,
        'E_10' => $E_10,
        'E_11' => $E_11,
        'E_12' => $E_12,
        'E_13' => $E_13,
        'eficaciacontroles1_' => $eficaciacontroles1_,        /*% EFICACIA EN CONTROLES EFECTIVOS 2*/
        'eficaciacontroles2_' => $eficaciacontroles2_,        /*% EFICACIA EN CONTROLES EFECTIVOS 2*/
        'Meta1_D' => $Meta1_D,  
        'Meta2_D' => $Meta2_D, 
        'totaleficiencia1_' => $totaleficiencia1_,            /*TOTAL DE EFICACIA EN EVALUACIONES*/
        'totaleficiencia2_' => $totaleficiencia2_,            /*TOTAL DE EFICACIA EN EVALUACIONES*/
    );

    $jsonstring = json_encode($json);
    echo $jsonstring;
?>