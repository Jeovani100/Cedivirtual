<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

if(isset($_POST['deletinta'])) {
    $id = $_POST['deletinta'];
    $sql = "DELETE FROM intralaboralA WHERE id_usuario = $id"; 
    $result = $mysqli->query($sql);
  
    $sql = "UPDATE datosg SET IAB = '', R_0 = '', CL = '', R_1 = '', RS = '', R_2 = '', RD = '', R_3 = '', RC = '', R_4 = '', LR = '', R_5 = '', CR = '', R_6 = '', C = '', R_7 = '', PM  = '', 
    R_8 = '', PD = '', R_9 = '', CA = '',  R_10 = '', CT = '', R_11 = '', DAE = '', R_12 = '', DE = '', R_13 = '', DC = '', R_14 = '', IT = '', R_15 = '', ER = '', R_16 = '', DCM = '', R_17 = '', 
    CRL = '', R_18 = '', DJT = '', R_19 = '', DT = '', R_20 = '', RP = '',  R_21 = '', RYC = '', R_22 = '', R= '', R_23 = '', IntraA = '' , R_24 = '' WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
}
?>