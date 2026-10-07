<?php 
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';

    if(isset($_POST['email_cliente'])) {
        $email_cliente = $_POST['email_cliente'];
        $codigo_cliente = $_POST['codigo_cliente'];
        $id = $_POST['id'];
        if($email_cliente) {
            $sql = "UPDATE reg_agenda SET Email = '$email_cliente' WHERE id = $id";
            $result = $mysqli->query($sql);
        
        if($codigo_cliente) {
            $sql = "UPDATE reg_agenda SET Codigo = '$codigo_cliente' WHERE id = $id";
            $result = $mysqli->query($sql);
        }
    };
       if(isset($_POST['email_cliente'])) {
        $email_cliente = $_POST['email_cliente'];
        $codigo_cliente = $_POST['codigo_cliente'];
        $id = $_POST['id'];
        if($email_cliente) {
            $sql = "UPDATE reg_agenda SET Email = '$email_cliente' WHERE id = $id";
            $result = $mysqli->query($sql);
        }
        if($codigo_cliente) {
            $sql = "UPDATE reg_agenda SET Codigo = '$codigo_cliente' WHERE id = $id";
            $result = $mysqli->query($sql);
        }}
    };
    if(isset($_POST['Cantidad'])) {
        $Cantidad = $_POST['Cantidad'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE admin SET Cantidad = '$Cantidad' WHERE Ausentismo = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['Inicio'])) {
        $Inicio = $_POST['Inicio'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE admin SET Inicio = '$Inicio' WHERE Ausentismo = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['Finalizacion'])) {
        $Finalizacion = $_POST['Finalizacion'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE admin SET Finalizacion = '$Finalizacion' WHERE Ausentismo = '$Codigo'";
        $result = $mysqli->query($sql);
    };
    
?>    