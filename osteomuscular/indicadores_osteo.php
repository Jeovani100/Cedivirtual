<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $Codigo=$_POST["Codigo"];
    $Tipo=$_POST["Tipo"];
    $Definicion=$_POST["Definicion"];
    $Interpretacion=$_POST["Interpretacion"];
    $Fuente=$_POST["Fuente"];
    $Indicador=$_POST["Indicador"];
    $Numerador=$_POST["Numerador"];
    $Denominador=$_POST["Denominador"];
    $Meta=$_POST["Meta"];
    $Frecuencia=$_POST["Frecuencia"];
    $Resultado1=$_POST["Resultado1"];
    $Resultado2=$_POST["Resultado2"];
    $sql = "INSERT INTO indicadores_osteo (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Meta, Frecuencia, Resultado1, Resultado2, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Meta','$Frecuencia','$Resultado1','$Resultado2',NOW())";
    $resultado = $mysqli->query($sql);
?>