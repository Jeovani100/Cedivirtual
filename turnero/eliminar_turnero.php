<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';

    if(isset($_POST['turnos1'])) {
        $id=$_POST["id1"];
        $sql = "UPDATE turnero SET Valor = 0 WHERE id = $id";
        $resultado = $mysqli->query($sql);
    }
    
    if(isset($_POST['turnos2'])) {
        $id=$_POST["id2"];
        $sql = "UPDATE turnero2 SET Valor = 0 WHERE id = $id";
        $resultado = $mysqli->query($sql);
    }