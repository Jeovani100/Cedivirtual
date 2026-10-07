<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

if(isset($_POST['id_empresa'])) {
   $id = $_POST['id_empresa'];
   $sql = "DELETE FROM reg_agenda WHERE id = $id"; 
   $result = $mysqli->query($sql);
}