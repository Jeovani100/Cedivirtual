<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

if(isset($_POST['deletestres'])) {
   $id = $_POST['deletestres'];
   $sql = "DELETE FROM estres WHERE id_usuario = $id"; 
   $result = $mysqli->query($sql);
  
   $sql = "UPDATE datosg SET Estres = '', R_54 = '' WHERE id = '$id'";
   $resultado = $mysqli->query($sql);
}
?>