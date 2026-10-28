<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    
    if(isset($_POST['Enero_m1'])) {
        $Enero_m1=$_POST["Enero_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Enero = $Enero_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['Febrero_m1'])) {
        $Febrero_m1=$_POST["Febrero_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Febrero = $Febrero_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['Marzo_m1'])) {
        $Marzo_m1=$_POST["Marzo_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Marzo = $Marzo_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['Abril_m1'])) {
        $Abril_m1=$_POST["Abril_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Abril = $Abril_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['Mayo_m1'])) {
        $Mayo_m1=$_POST["Mayo_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Mayo = $Mayo_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['Junio_m1'])) {
        $Junio_m1=$_POST["Junio_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Junio = $Junio_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['Julio_m1'])) {
        $Julio_m1=$_POST["Julio_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Julio = $Julio_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['Agosto_m1'])) {
        $Agosto_m1=$_POST["Agosto_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Agosto = $Agosto_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['Septiembre_m1'])) {
        $Septiembre_m1=$_POST["Septiembre_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Septiembre = $Septiembre_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['Octubre_m1'])) {
        $Octubre_m1=$_POST["Octubre_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Octubre = $Octubre_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['Noviembre_m1'])) {
        $Noviembre_m1=$_POST["Noviembre_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Noviembre = $Noviembre_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['Diciembre_m1'])) {
        $Diciembre_m1=$_POST["Diciembre_m1"];
        $Codigo=$_POST["Codigo"];
        $sql = "UPDATE meta_auditivo SET Diciembre = $Diciembre_m1 WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
    };
    
?>    