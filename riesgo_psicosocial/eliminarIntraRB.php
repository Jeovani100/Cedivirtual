<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

if(isset($_POST['deletintb'])) {
   $id = $_POST['deletintb'];
   $sql = "DELETE FROM intralaboralB WHERE id_usuario = $id"; 
   $result = $mysqli->query($sql);
  
   $sql = "UPDATE datosg SET IAB = '', R_0 = '', CLb = ' ', R_25 = ' ', RSb = ' ', R_26 = ' ', RDb = ' ', R_27 = ' ',  LRb = ' ', R_28 = ' ', CRb = ' ', R_29 = ' ', Cb = ' ', R_30 = ' ', 
    PMb  = ' ', R_31 = ' ', PDb = ' ', R_32 = ' ', CAb = ' ',  R_33 = ' ', CTb = ' ', R_34 = ' ', DAEb = ' ', R_35 = ' ', DEb = ' ', R_36 = ' ', DCb = ' ', R_37 = ' ', ITb = ' ', R_38 = ' ', 
    DCMb = ' ', R_39 = ' ',  DJTb = ' ', R_40 = ' ', DTb = ' ', R_41 = ' ', RPb = ' ',  R_42 = ' ', RYCb = ' ', R_43 = ' ', Rb = ' ', R_44 = ' ', IntraB = ' ' , R_45 = ' ' WHERE id = '$id'";
   $resultado = $mysqli->query($sql);
}
?>