<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

if(isset($_POST['deletextra'])) {
    $id = $_POST['deletextra'];
    $sql = "DELETE FROM extralaboral WHERE id_usuario = $id"; 
    $result = $mysqli->query($sql);
  
    $sql = "UPDATE datosg SET IAB = '', R_0 = '', TF2 = '', R_46 = '', RF2 = '', R_47 = '', CRI2 = '', R_48 = '', SE2 = '', R_49 = '', CV2 = '', R_50 = '', IE2 = '', R_51 = '', 
    DV2 = '', R_52 = '', Extra = '', R_53 = '' WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
}
?>