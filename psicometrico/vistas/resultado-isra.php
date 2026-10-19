<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio ISRA</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<script src="http://code.jquery.com/jquery-latest.js"></script>
<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion5.inc.php';
    include_once 'app/redireccion.inc.php';
    if (!controlsesion5::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGOUT_TEST);}
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $Codigo = $_SESSION['Codigo'];
    $Codigo2 = $_GET['id'];
    //$Codigo = 'h17zg9';
    //$Codigo2 = 'dbhror';
    $sql = "SELECT * FROM reg_psicologica WHERE Codigo = '$Codigo'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Nombre = $row['Nombre'];
    $Edad = $row['Edad'];
    $Genero0 = $row['Genero'];
    if ($Genero0 == 1) {
        $Genero = 'M';
        $Etiqueta = ' del Sr. ';
    } elseif ($Genero0 == 2)  {
        $Genero = 'F';
        $Etiqueta = ' de la Sra. ';
    }
    $Estado = $row['Estado'];
    $Empresa = $row['Empresa'];
    $Sede_0 = $row['Sede'];
    if ($Sede_0 == 1) {
        $Sede = "Medellín";
    } elseif ($Sede_0 == 2) {
        $Sede = "Apartadó";
    }
    $Cargo = $row['Cargo'];
    $Fecha0 = $row['Fecha_registro'];
    $Fecha = strtotime($Fecha0);
    $año = date("Y", $Fecha);
    $mes0 = date("m", $Fecha);
    $dia = date("d", $Fecha);
    $hora = date("H:i:s", $Fecha);
    $Sede0 = $row['Sede'];
    
    switch ($mes0) {
    case '01':
        $mes ="Enero";
        break;
    case '02':
        $mes ="Febrero";
        break;
    case '03':
        $mes ="Marzo";
        break;
    case '04':
        $mes ="Abril";
        break;
    case '05':
        $mes ="mayo";
        break;
    case '06':
        $mes ="Junio";
        break;
    case '07':
        $mes ="Julio";
        break;
    case '08':
        $mes ="Agosto";
        break;
    case '09':
        $mes ="Septiembre";
        break;
    case '10':
        $mes ="Octubre";
        break;
    case '11':
        $mes ="Noviembre";
        break;
    case '12':
        $mes ="Diciembre";
        break;
    }

    $sql = "SELECT * FROM formulario_isra WHERE Codigo = '$Codigo2'";
            $resultado = $mysqli->query($sql);
            $row = $resultado->fetch_array(MYSQLI_ASSOC);
            $R1_1_1 = $row['R1_1_1'];
            $R1_1_6 = $row['R1_1_6'];
            $R1_2_1 = $row['R1_2_1'];
            $R1_3_4 = $row['R1_3_4'];
            $R1_3_6 = $row['R1_3_6'];
            $R1_4_1 = $row['R1_4_1'];
            $R1_4_6 = $row['R1_4_6'];
            $R1_5_3 = $row['R1_5_3'];
            $R1_5_4 = $row['R1_5_4'];
            $R1_6_1 = $row['R1_6_1'];
            $R1_6_2 = $row['R1_6_2'];
            $R1_6_4 = $row['R1_6_4'];
            $R1_6_7 = $row['R1_6_7'];
            $R1_7_4 = $row['R1_7_4'];
            $R1_8_2 = $row['R1_8_2'];
            $R1_8_7 = $row['R1_8_7'];
            $R1_9_6 = $row['R1_9_6'];
            $R1_9_7 = $row['R1_9_7'];
            $R1_10_1 = $row['R1_10_1'];
            $R1_10_4 = $row['R1_10_4'];
            $R1_10_6 = $row['R1_10_6'];
            $R1_10_7 = $row['R1_10_7'];
            $R1_11_6 = $row['R1_11_6'];
            $R1_12_3 = $row['R1_12_3'];
            $R1_12_5 = $row['R1_12_5'];
            $R1_12_6 = $row['R1_12_6'];
            $R1_13_4 = $row['R1_13_4'];
            $R1_13_5 = $row['R1_13_5'];
            $R1_13_6 = $row['R1_13_6'];
            $R1_13_7 = $row['R1_13_7'];
            $R1_14_1 = $row['R1_14_1'];
            $R1_15_5 = $row['R1_15_5'];
            $R1_16_6 = $row['R1_16_6'];
            $R1_17_1 = $row['R1_17_1'];
            $R1_17_2 = $row['R1_17_2'];
            $R1_17_5 = $row['R1_17_5'];
            $R1_17_6 = $row['R1_17_6'];
            $R1_17_7 = $row['R1_17_7'];
            $R1_18_3 = $row['R1_18_3'];
            $R1_18_6 = $row['R1_18_6'];
            $R1_19_1 = $row['R1_19_1'];
            $R1_19_2 = $row['R1_19_2'];
            $R1_19_3 = $row['R1_19_3'];
            $R1_19_5 = $row['R1_19_5'];
            $R1_19_7 = $row['R1_19_7'];
            $R1_20_1 = $row['R1_20_1'];
            $R1_20_2 = $row['R1_20_2'];
            $R1_20_5 = $row['R1_20_5'];
            $R1_21_1 = $row['R1_21_1'];
            $R1_21_2 = $row['R1_21_2'];
            $R1_21_3 = $row['R1_21_3'];
            $R1_21_4 = $row['R1_21_4'];
            $R1_21_5 = $row['R1_21_5'];
            $R1_22_1 = $row['R1_22_1'];
            $R1_22_2 = $row['R1_22_2'];
            $R1_22_7 = $row['R1_22_7'];
            
            $R2_1_3= $row['R2_1_3'];
            $R2_1_4= $row['R2_1_4'];
            $R2_1_5= $row['R2_1_5'];
            $R2_1_7= $row['R2_1_7'];
            $R2_1_8= $row['R2_1_8'];
            $R2_1_9= $row['R2_1_9'];
            $R2_1_10= $row['R2_1_10'];
            $R2_2_1= $row['R2_2_1'];
            $R2_2_2= $row['R2_2_2'];
            $R2_2_3= $row['R2_2_3'];
            $R2_2_4= $row['R2_2_4'];
            $R2_2_6= $row['R2_2_6'];
            $R2_2_7= $row['R2_2_7'];
            $R2_2_9= $row['R2_2_9'];
            $R2_3_1= $row['R2_3_1'];
            $R2_3_2= $row['R2_3_2'];
            $R2_3_3= $row['R2_3_3'];
            $R2_3_4= $row['R2_3_4'];
            $R2_3_6= $row['R2_3_6'];
            $R2_3_7= $row['R2_3_7'];
            $R2_3_8= $row['R2_3_8'];
            $R2_3_9= $row['R2_3_9'];
            $R2_4_4= $row['R2_4_4'];
            $R2_5_1= $row['R2_5_1'];
            $R2_5_4= $row['R2_5_4'];
            $R2_5_6= $row['R2_5_6'];
            $R2_5_9= $row['R2_5_9'];
            $R2_6_1= $row['R2_6_1'];
            $R2_6_5= $row['R2_6_5'];
            $R2_6_7= $row['R2_6_7'];
            $R2_6_9= $row['R2_6_9'];
            $R2_7_3= $row['R2_7_3'];
            $R2_7_6= $row['R2_7_6'];
            $R2_7_7= $row['R2_7_7'];
            $R2_7_8= $row['R2_7_8'];
            $R2_7_9= $row['R2_7_9'];
            $R2_8_1= $row['R2_8_1'];
            $R2_8_3= $row['R2_8_3'];
            $R2_8_4= $row['R2_8_4'];
            $R2_8_6= $row['R2_8_6'];
            $R2_8_7= $row['R2_8_7'];
            $R2_8_8= $row['R2_8_8'];
            $R2_8_9= $row['R2_8_9'];
            $R2_9_3= $row['R2_9_3'];
            $R2_9_7= $row['R2_9_7'];
            $R2_9_8= $row['R2_9_8'];
            $R2_9_9= $row['R2_9_9'];
            $R2_10_1= $row['R2_10_1'];
            $R2_10_3= $row['R2_10_3'];
            $R2_10_4= $row['R2_10_4'];
            $R2_10_6= $row['R2_10_6'];
            $R2_10_7= $row['R2_10_7'];
            $R2_10_8= $row['R2_10_8'];
            $R2_10_9= $row['R2_10_9'];
            $R2_10_10= $row['R2_10_10'];
            $R2_11_5= $row['R2_11_5'];
            $R2_11_6= $row['R2_11_6'];
            $R2_11_7= $row['R2_11_7'];
            $R2_11_10= $row['R2_11_10'];
            $R2_12_2= $row['R2_12_2'];
            $R2_12_3= $row['R2_12_3'];
            $R2_12_4= $row['R2_12_4'];
            $R2_12_6= $row['R2_12_6'];
            $R2_12_7= $row['R2_12_7'];
            $R2_12_8= $row['R2_12_8'];
            $R2_12_9= $row['R2_12_9'];
            $R2_13_2= $row['R2_13_2'];
            $R2_13_3= $row['R2_13_3'];
            $R2_13_4= $row['R2_13_4'];
            $R2_13_7= $row['R2_13_7'];
            $R2_13_10= $row['R2_13_10'];
            $R2_14_4= $row['R2_14_4'];
            $R2_14_7= $row['R2_14_7'];
            $R2_14_10= $row['R2_14_10'];
            $R2_15_3= $row['R2_15_3'];
            $R2_15_4= $row['R2_15_4'];
            $R2_15_7= $row['R2_15_7'];
            $R2_15_9= $row['R2_15_9'];
            $R2_16_2= $row['R2_16_2'];
            $R2_16_3= $row['R2_16_3'];
            $R2_16_4= $row['R2_16_4'];
            $R2_16_5= $row['R2_16_5'];
            $R2_16_7= $row['R2_16_7'];
            $R2_16_9= $row['R2_16_9'];
            $R2_17_1= $row['R2_17_1'];
            $R2_17_2= $row['R2_17_2'];
            $R2_17_3= $row['R2_17_3'];
            $R2_17_4= $row['R2_17_4'];
            $R2_17_7= $row['R2_17_7'];
            $R2_18_1= $row['R2_18_1'];
            $R2_18_3= $row['R2_18_3'];
            $R2_18_4= $row['R2_18_4'];
            $R2_18_7= $row['R2_18_7'];
            $R2_18_9= $row['R2_18_9'];
            $R2_19_3= $row['R2_19_3'];
            $R2_19_6= $row['R2_19_6'];
            $R2_19_7= $row['R2_19_7'];
            $R2_19_8= $row['R2_19_8'];
            $R2_19_9= $row['R2_19_9'];
            $R2_19_10= $row['R2_19_10'];
            $R2_20_1= $row['R2_20_1'];
            $R2_20_6= $row['R2_20_6'];
            $R2_20_7= $row['R2_20_7'];
            $R2_20_8= $row['R2_20_8'];
            $R2_21_1= $row['R2_21_1'];
            $R2_21_3= $row['R2_21_3'];
            $R2_21_4= $row['R2_21_4'];
            $R2_21_6= $row['R2_21_6'];
            $R2_21_7= $row['R2_21_7'];
            $R2_21_8= $row['R2_21_8'];
            $R2_21_9= $row['R2_21_9'];
            $R2_22_4= $row['R2_22_4'];
          
            $R3_1_2= $row['R3_1_2'];
            $R3_1_5= $row['R3_1_5'];
            $R3_1_6= $row['R3_1_6'];
            $R3_2_2= $row['R3_2_2'];
            $R3_2_5= $row['R3_2_5'];
            $R3_3_1= $row['R3_3_1'];
            $R3_3_2= $row['R3_3_2'];
            $R3_3_3= $row['R3_3_3'];
            $R3_3_5= $row['R3_3_5'];
            $R3_3_6= $row['R3_3_6'];
            $R3_3_7= $row['R3_3_7'];
            $R3_4_3= $row['R3_4_3'];
            $R3_4_5= $row['R3_4_5'];
            $R3_4_7= $row['R3_4_7'];
            $R3_5_1= $row['R3_5_1'];
            $R3_5_3= $row['R3_5_3'];
            $R3_5_6= $row['R3_5_6'];
            $R3_6_3= $row['R3_6_3'];
            $R3_6_4= $row['R3_6_4'];
            $R3_7_3= $row['R3_7_3'];
            $R3_8_2= $row['R3_8_2'];
            $R3_8_3= $row['R3_8_3'];
            $R3_8_6= $row['R3_8_6'];
            $R3_9_2= $row['R3_9_2'];
            $R3_9_3= $row['R3_9_3'];
            $R3_9_6= $row['R3_9_6'];
            $R3_10_3= $row['R3_10_3'];
            $R3_11_2= $row['R3_11_2'];
            $R3_11_3= $row['R3_11_3'];
            $R3_11_5= $row['R3_11_5'];
            $R3_12_2= $row['R3_12_2'];
            $R3_12_4= $row['R3_12_4'];
            $R3_12_5= $row['R3_12_5'];
            $R3_12_6= $row['R3_12_6'];
            $R3_13_1= $row['R3_13_1'];
            $R3_13_3= $row['R3_13_3'];
            $R3_14_5= $row['R3_14_5'];
            $R3_14_7= $row['R3_14_7'];
            $R3_15_4= $row['R3_15_4'];
            $R3_16_2= $row['R3_16_2'];
            $R3_16_3= $row['R3_16_3'];
            $R3_17_1= $row['R3_17_1'];
            $R3_17_2= $row['R3_17_2'];
            $R3_17_3= $row['R3_17_3'];
            $R3_17_5= $row['R3_17_5'];
            $R3_17_6= $row['R3_17_6'];
            $R3_18_1= $row['R3_18_1'];
            $R3_18_3= $row['R3_18_3'];
            $R3_18_4= $row['R3_18_4'];
            $R3_18_6= $row['R3_18_6'];
            $R3_18_7= $row['R3_18_7'];
            $R3_19_6= $row['R3_19_6'];
            $R3_20_3= $row['R3_20_3'];
            $R3_20_5= $row['R3_20_5'];
            $R3_21_7= $row['R3_21_7'];
            $R3_22_5= $row['R3_22_5'];
          
            $R1 = $R1_1_1 + $R1_1_6 + $R1_2_1 + $R1_3_4 + $R1_3_6 + $R1_4_1 + $R1_4_6 + $R1_5_3 + $R1_5_4 + $R1_6_1 + $R1_6_2 + $R1_6_4 + $R1_6_7 + $R1_7_4 + $R1_8_2 + $R1_8_7 + $R1_9_6 + $R1_9_7 + $R1_10_1 + $R1_10_4 + $R1_10_6 + $R1_10_7 + $R1_11_6 + $R1_12_3 + $R1_12_5 + $R1_12_6 + $R1_13_4 + $R1_13_5 + $R1_13_6 + $R1_13_7 + $R1_14_1 + $R1_15_5 + $R1_16_6 + $R1_17_1 + $R1_17_2 + $R1_17_5 + $R1_17_6 + $R1_17_7 + $R1_18_3 + $R1_18_6 + $R1_19_1 + $R1_19_2 + $R1_19_3 + $R1_19_5 + $R1_19_7 + $R1_20_1 +  $R1_20_2 + $R1_20_5 + $R1_21_1 + $R1_21_2 + $R1_21_3 + $R1_21_4 + $R1_21_5 + $R1_22_1 + $R1_22_2 + $R1_22_7;
            $R2 = round(($R2_1_3 + $R2_1_4 + $R2_1_5 + $R2_1_7 + $R2_1_8 + $R2_1_9 + $R2_1_10 + $R2_2_1 + $R2_2_2 + $R2_2_3 + $R2_2_4 + $R2_2_6 + $R2_2_7 + $R2_2_9 + $R2_3_1 + $R2_3_2 + $R2_3_3 + $R2_3_4 + $R2_3_6 + $R2_3_7 + $R2_3_8 + $R2_3_9 + $R2_4_4 + $R2_5_1 + $R2_5_4 + $R2_5_6 + $R2_5_9 + $R2_6_1 + $R2_6_5 + $R2_6_7 + $R2_6_9 + $R2_7_3 + $R2_7_6 + $R2_7_7 + $R2_7_8 + $R2_7_9 + $R2_8_1 + $R2_8_3 + $R2_8_4 + $R2_8_6 + $R2_8_7 + $R2_8_8 + $R2_8_9 + $R2_9_3 + $R2_9_7 + $R2_9_8 + $R2_9_9 + $R2_10_1 + $R2_10_3 + $R2_10_4 + $R2_10_6 + $R2_10_7 + $R2_10_8 + $R2_10_9 + $R2_10_10 + $R2_11_5 + $R2_11_6 + $R2_11_7 + $R2_11_10 + $R2_12_2 + $R2_12_3 + $R2_12_4 + $R2_12_6 + $R2_12_7 + $R2_12_8 + $R2_12_9 + $R2_13_2 + $R2_13_3 + $R2_13_4 + $R2_13_7 + $R2_13_10 + $R2_14_4 + $R2_14_7 + $R2_14_10 + $R2_15_3 + $R2_15_4 + $R2_15_7 + $R2_15_9 + $R2_16_2 + $R2_16_3 + $R2_16_4 + $R2_16_5 + $R2_16_7 + $R2_16_9 + $R2_17_1 + $R2_17_2 + $R2_17_3 + $R2_17_4 + $R2_17_7 + $R2_18_1 + $R2_18_3 + $R2_18_4 + $R2_18_7 + $R2_18_9 + $R2_19_3 + $R2_19_6 + $R2_19_7 + $R2_19_8 + $R2_19_9 + $R2_19_10 + $R2_20_1 + $R2_20_6 + $R2_20_7 + $R2_20_8 + $R2_21_1 + $R2_21_3 + $R2_21_4 + $R2_21_6 + $R2_21_7 + $R2_21_8 + $R2_21_9 + $R2_22_4)/2,0, PHP_ROUND_HALF_UP);
            $R3 = $R3_1_2 + $R3_1_5 + $R3_1_6 + $R3_2_2 + $R3_2_5 + $R3_3_1 + $R3_3_2 + $R3_3_3 + $R3_3_5 + $R3_3_6 + $R3_3_7 + $R3_4_3 + $R3_4_5 + $R3_4_7 + $R3_5_1 + $R3_5_3 + $R3_5_6 + $R3_6_3 + $R3_6_4 + $R3_7_3 + $R3_8_2 + $R3_8_3 + $R3_8_6 + $R3_9_2 + $R3_9_3 + $R3_9_6 + $R3_10_3 + $R3_11_2 + $R3_11_3 + $R3_11_5 + $R3_12_2 + $R3_12_4 + $R3_12_5 + $R3_12_6 + $R3_13_1 + $R3_13_3 + $R3_14_5 + $R3_14_7 + $R3_15_4 + $R3_16_2 + $R3_16_3 + $R3_17_1 + $R3_17_2 + $R3_17_3 + $R3_17_5 + $R3_17_6 + $R3_18_1 + $R3_18_3 + $R3_18_4 + $R3_18_6 + $R3_18_7 + $R3_19_6 + $R3_20_3 + $R3_20_5 + $R3_21_7 + $R3_22_5;
            $R = $R1 + $R2 + $R3;
            
            $F1 = $R1_1_1 + $R1_1_6 + $R2_1_3 + $R2_1_4 + $R2_1_5 + $R2_1_7 + $R2_1_8 + $R2_1_9 + $R3_1_2 + $R3_1_5 + $R3_1_6 + $R1_4_1 + $R1_4_6 + $R2_4_4 + $R3_4_3 + $R3_4_5 + $R3_4_7 + $R1_8_2 + $R1_8_7 + $R2_8_1 + $R2_8_3 + $R2_8_4 + $R2_8_6 + $R2_8_7 + $R2_8_8 + $R2_8_9 + $R3_8_2 + $R3_8_3 + $R3_8_6 + $R1_10_1 + $R1_10_4 + $R1_10_6 + $R1_10_7 + $R2_10_7 + $R2_10_8 + $R2_10_9 + $R2_10_10 + $R3_10_3 + $R1_11_6 + $R2_11_5 + $R2_11_6 + $R2_11_7 + $R2_11_10 + $R3_11_2 + $R3_11_3 + $R3_11_5 + $R1_13_4 + $R1_13_5 + $R1_13_6 + $R1_13_7 + $R2_13_2 + $R2_13_3 + $R2_13_4 + $R2_13_7 + $R2_13_10 + $R3_13_1 + $R3_13_3;
            $F2 = $R1_7_4 + $R2_7_3 + $R2_7_6 + $R2_7_7 + $R2_7_8 + $R2_7_9 + $R3_7_3 + $R1_15_5 + $R2_15_3 + $R2_15_4 + $R2_15_7 + $R2_15_9 + $R3_15_4 + $R1_18_3 + $R1_18_6 + $R2_18_1 + $R2_18_3 + $R2_18_4 + $R2_18_7 + $R2_18_9 + $R3_18_1 + $R3_18_3 + $R3_18_4 + $R3_18_6 + $R3_18_7; 
            $F3 = $R1_12_3 + $R1_12_5 + $R1_12_6 + $R2_12_2 + $R2_12_3 + $R2_12_4 + $R2_12_6 + $R2_12_7 + $R2_12_8 + $R2_12_9 + $R3_12_2 + $R3_12_4 + $R3_12_5 + $R3_12_6  + $R1_14_1 + $R2_14_4 + $R2_14_7 + $R3_14_5 + $R3_14_7 + $R1_17_1 + $R1_17_2 + $R1_17_5 + $R1_17_6 + $R1_17_7 + $R2_17_1 + $R2_17_2 + $R2_17_3 + $R2_17_4 + $R2_17_7 + $R3_17_1 + $R3_17_2 + $R3_17_3 + $R3_17_5 + $R3_17_6 + $R1_19_1 + $R1_19_2 + $R1_19_3 + $R1_19_5 + $R1_19_7  + $R2_19_3 + $R2_19_6 + $R2_19_7 + $R2_19_8 + $R2_19_9 + $R2_19_10 + $R3_19_6; 
            $F4 = $R1_5_3 + $R1_5_4 + $R2_5_1 + $R2_5_4 + $R2_5_6 + $R2_5_9 + $R3_5_1 + $R3_5_3 + $R3_5_6  + $R1_21_1 + $R1_21_2 + $R1_21_3 + $R1_21_4 + $R1_21_5 + $R2_21_1 + $R2_21_3 + $R2_21_4 + $R2_21_6 + $R2_21_7 + $R2_21_8 + $R2_21_9 + $R3_21_7 +  $R1_22_1 + $R1_22_2 + $R1_22_7 + $R2_22_4 + $R3_22_5;
            
            /*$R1 = 50;
            $R2 = 85;
            $R3 = 15;
            $R = 150;
            
            $F1 = 50;
            $F2 = 20;
            $F3 = 15;
            $F4 = 150;*/

            if($Genero0 == 2) {
                switch ($R1) {
                    case $R1 === '':
                        $R1_C = 0;
                        break;
                    case $R1 === 0:
                        $R1_C = 0;
                        break;    
                    case $R1 > 0 && $R1 <= 26:
                        $R1_C = 5;
                        break;
                    case $R1 > 26 && $R1 <= 33:
                        $R1_C = 10;
                        break;
                    case $R1 > 33 && $R1 <= 37:
                        $R1_C = 15;
                        break;    
                    case $R1 > 37 && $R1 <= 40:
                        $R1_C = 20;
                        break;
                    case $R1 > 40 && $R1 <= 44:
                        $R1_C = 25;
                        break;
                    case $R1 > 44 && $R1 <= 48:
                        $R1_C = 30;
                        break;
                    case $R1 > 48 && $R1 <= 52:
                        $R1_C = 35;
                        break;
                    case $R1 > 52 && $R1 <= 55:
                        $R1_C = 40;
                        break; 
                    case $R1 > 55 && $R1 <= 59:
                        $R1_C = 45;
                        break;
                    case $R1 > 59 && $R1 <= 64:
                        $R1_C = 50;
                        break;
                    case $R1 > 64 && $R1 <= 67:
                        $R1_C = 55;
                        break;
                    case $R1 > 67 && $R1 <= 73:
                        $R1_C = 60;
                        break;
                    case $R1 > 73 && $R1 <= 78:
                        $R1_C = 65;
                        break;
                    case $R1 > 78 && $R1 <= 84:
                        $R1_C = 70;
                        break;
                    case $R1 > 84 && $R1 <= 90:
                        $R1_C = 75;
                        break;
                    case $R1 > 90 && $R1 <= 94:
                        $R1_C = 80;
                        break;
                    case $R1 > 94 && $R1 <= 102:
                        $R1_C = 85;
                        break;
                    case $R1 > 102 && $R1 <= 117:
                        $R1_C = 90;
                        break;
                    case $R1 > 117 && $R1 <= 129:
                        $R1_C = 95;
                        break;
                    case $R1 > 129 && $R1 <= 164:
                        $R1_C = 99;
                        break;
                }
                switch ($R2) {
                    case $R2 === '':
                        $R2_C = 0;
                        break;
                    case $R2 === 0:
                        $R2_C = 0;
                        break;    
                    case $R2 > 0 && $R2 <= 8:
                        $R2_C = 5;
                        break;    
                    case $R2 > 0 && $R2 <= 11:
                        $R2_C = 10;
                        break;
                    case $R2 > 11 && $R2 <= 13:
                        $R2_C = 15;
                        break;    
                    case $R2 > 13 && $R2  <=14:
                        $R2_C = 20;
                        break;
                    case $R2 > 14 && $R2 <= 16:
                        $R2_C = 25;
                        break;
                    case $R2 > 16 && $R2 <= 20:
                        $R2_C = 30;
                        break;
                    case $R2 > 20 && $R2 <= 23:
                        $R2_C = 35;
                        break;
                    case $R2 > 23 && $R2 <= 25:
                        $R2_C = 40;
                        break; 
                    case $R2 > 25 && $R2 <= 28:
                        $R2_C = 45;
                        break;
                    case $R2 > 28 && $R2 <= 30:
                        $R2_C = 50;
                        break;
                    case $R2 > 30 && $R2 <= 33:
                        $R2_C = 55;
                        break;
                    case $R2 > 33 && $R2 <= 37:
                        $R2_C = 60;
                        break;
                    case $R2 > 37 && $R2 <= 41:
                        $R2_C = 65;
                        break;
                    case $R2 > 41 && $R2 <= 45:
                        $R2_C = 70;
                        break;
                    case $R2 > 45 && $R2 <= 49:
                        $R2_C = 75;
                        break;
                    case $R2 > 49 && $R2 <= 54:
                        $R2_C = 80;
                        break;
                    case $R2 > 54 && $R2 <= 64:
                        $R2_C = 85;
                        break;
                    case$R2 > 64 &&  $R2 <= 71:
                        $R2_C = 90;
                        break;
                    case $R2 > 71 && $R2 <= 94:
                        $R2_C = 95;
                        break;
                    case $R2 > 94 && $R2 <= 124:
                        $R2_C = 99;
                        break;
                }
                switch ($R3) {
                    case $R3 === '':
                        $R3_C = 0;
                        break;   
                    case $R3 === 0:
                        $R3_C = 0;
                        break;     
                    case $R3 > 0 && $R3 <= 9:
                        $R3_C = 5;
                        break;
                    case $R3 > 9 && $R3 <= 14:
                        $R3_C = 10;
                        break;
                    case $R3 > 14 && $R3 <= 17:
                        $R3_C = 15;
                        break;    
                    case $R3 > 17 && $R3 <= 21:
                        $R3_C = 20;
                        break;
                    case $R3 > 21 && $R3 <= 24:
                        $R3_C = 25;
                        break;
                    case $R3 > 24 && $R3 <= 27:
                        $R3_C = 30;
                        break;
                    case $R3 > 27 && $R3 <= 30:
                        $R3_C = 35;
                        break;
                    case $R3 > 30 && $R3 <= 33:
                        $R3_C = 40;
                        break; 
                    case $R3 > 33 && $R3 <= 36:
                        $R3_C = 45;
                        break;
                    case $R3 > 36 && $R3 <= 39:
                        $R3_C = 50;
                        break;
                    case $R3 > 39 && $R3 <= 43:
                        $R3_C = 55;
                        break;
                    case $R3 > 43 && $R3 <= 47:
                        $R3_C = 60;
                        break;
                    case $R3 > 47 && $R3 <= 50:
                        $R3_C = 65;
                        break;
                    case $R3 > 50 && $R3 <= 55:
                        $R3_C = 70;
                        break;
                    case $R3 > 55 && $R3 <= 60:
                        $R3_C = 75;
                        break;
                    case $R3 > 60 && $R3 <= 65:
                        $R3_C = 80;
                        break;
                    case $R3 > 65 && $R3 <= 73:
                        $R3_C = 85;
                        break;
                    case $R3 > 73 && $R3 <= 82:
                        $R3_C = 90;
                        break;
                    case $R3 > 82 && $R3 <= 94:
                        $R3_C = 95;
                        break;
                    case $R3 > 94 && $R3 <= 121:
                        $R3_C = 99;
                        break;
                }
                switch ($R) {
                    case $R === '':
                        $R_C = 0;
                        break;
                    case $R === 0:
                        $R_C = 0;
                        break;    
                    case $R > 0 && $R <= 56:
                        $R_C = 5;
                        break;
                    case $R > 56 && $R <= 69:
                        $R_C = 10;
                        break;
                    case $R > 69 && $R <= 80:
                        $R_C = 15;
                        break;    
                    case $R > 80 && $R <= 88:
                        $R_C = 20;
                        break;
                    case $R > 88 && $R <= 96:
                        $R_C = 25;
                        break;
                    case $R > 96 && $R <= 105:
                        $R_C = 30;
                        break;
                    case $R > 105 && $R <= 112:
                        $R_C = 35;
                        break;
                    case $R > 112 && $R <= 122:
                        $R_C = 40;
                        break; 
                    case $R > 122 && $R <= 129:
                        $R_C = 45;
                        break;
                    case $R > 129 && $R <= 139:
                        $R_C = 50;
                        break;
                    case $R > 139 && $R <= 148:
                        $R_C = 55;
                        break;
                    case $R > 148 && $R <= 154:
                        $R_C = 60;
                        break;
                    case $R > 154 && $R <= 167:
                        $R_C = 65;
                        break;
                    case $R >167  && $R <= 181:
                        $R_C = 70;
                        break;
                    case $R > 181 && $R <= 194:
                        $R_C = 75;
                        break;
                    case $R > 194 && $R <= 207:
                        $R_C = 80;
                        break;
                    case $R > 207  && $R <= 223:
                        $R_C = 85;
                        break;
                    case $R > 223 && $R <= 245:
                        $R_C = 90;
                        break;
                    case $R > 245  && $R <= 299:
                        $R_C = 95;
                        break;
                    case $R > 299 && $R <= 376:
                        $R_C = 99;
                        break;
                }

                switch ($F1) {
                    case $F1 === '':
                        $F1_C = 0;
                        break;
                    case $F1 === 0:
                        $F1_C = 0;
                        break;    
                    case $F1 > 0 && $F1 <= 26:
                        $F1_C = 5;
                        break;
                    case $F1 > 26 && $F1 <= 31:
                        $F1_C = 10;
                        break;
                    case $F1 > 31 && $F1 <= 36:
                        $F1_C = 15;
                        break;    
                    case $F1 > 36 && $F1 <= 40:
                        $F1_C = 20;
                        break;
                    case $F1 > 40 && $F1 <= 44:
                        $F1_C = 25;
                        break;
                    case $F1 > 44 && $F1 <= 49:
                        $F1_C = 30;
                        break;
                    case $F1 > 49 && $F1 <= 53:
                        $F1_C = 35;
                        break;
                    case $F1 > 53 && $F1 <= 57:
                        $F1_C = 40;
                        break; 
                    case $F1 > 57 && $F1 <= 60:
                        $F1_C = 45;
                        break;
                    case $F1 > 60 && $F1 <= 65:
                        $F1_C = 50;
                        break;
                    case $F1 > 65 && $F1 <= 69:
                        $F1_C = 55;
                        break;
                    case $F1 > 69 && $F1 <= 74:
                        $F1_C = 60;
                        break;
                    case $F1 > 74 && $F1 <= 78:
                        $F1_C = 65;
                        break;
                    case $F1 > 78 && $F1 <= 84:
                        $F1_C = 70;
                        break;
                    case $F1 > 84 && $F1 <= 89:
                        $F1_C = 75;
                        break;
                    case $F1 > 89 && $F1 <= 94:
                        $F1_C = 80;
                        break;
                    case $F1 > 94 && $F1 <= 102:
                        $F1_C = 85;
                        break;
                    case $F1 > 102 && $F1 <= 113:
                        $F1_C = 90;
                        break;
                    case $F1 > 113 && $F1 <= 135:
                        $F1_C = 95;
                        break;
                    case $F1 > 136 && $F1 <= 155:
                        $F1_C = 99;
                        break;
                }
                switch ($F2) {
                    case $F2 === '':
                        $F2_C = 0;
                        break;
                    case $F2 === 0:
                        $F2_C = 0;
                        break;    
                    case ($F2 > 0 && $F2 <= 2):
                        $F2_C = 5;
                        break;
                    case $F2 > 2 && $F2 <= 4:
                        $F2_C = 10;
                        break;    
                    case $F2 > 4 && $F2 <= 6:
                        $F2_C = 15;
                        break;
                    case $F2 > 6 && $F2 <= 7:
                        $F2_C = 20;
                        break;
                    case $F2 > 7 && $F2 <= 8:
                        $F2_C = 25;
                        break;
                    case $F2 > 8 && $F2 <= 9:
                        $F2_C = 30;
                        break;
                    case $F2 > 9 && $F2 <= 10:
                        $F2_C = 35;
                        break; 
                    case $F2 > 10  && $F2 <= 11:
                        $F2_C = 40;
                        break;
                    case $F2 > 12 && $F2 <= 13:
                        $F2_C = 45;
                        break;
                    case $F2 > 13 && $F2 <= 14:
                        $F2_C = 50;
                        break;
                    case $F2 > 14 && $F2 <= 15:
                        $F2_C = 55;
                        break;
                    case $F2 > 15 && $F2 <= 17:
                        $F2_C = 60;
                        break;
                    case $F2 > 17 && $F2 <= 18:
                        $F2_C = 65;
                        break;
                    case $F2 > 19 && $F2 <= 21:
                        $F2_C = 70;
                        break;
                    case $F2 > 21 && $F2 <= 23:
                        $F2_C = 75;
                        break;
                    case $F2 > 23 && $F2 <= 25:
                        $F2_C = 80;
                        break;
                    case $F2 > 25 && $F2 <= 29:
                        $F2_C = 85;
                        break;
                    case $F2 > 29 && $F2 <= 33:
                        $F2_C = 90;
                        break;
                    case $F2 > 33 && $F2 <= 42:
                        $F2_C = 95;
                        break;
                    case $F2 > 42 && $F2 <= 55:
                        $F2_C = 99;
                        break;    
                }   

                switch ($F3) {
                    case $F3 <= '':
                        $F3_C = 0;
                        break;
                    case $F3 > 0 && $F3 <= 3:
                        $F3_C = 5;
                        break;
                    case $F3 > 3 && $F3 <= 6:
                        $F3_C = 10;
                        break;
                    case $F3 > 6 && $F3 <= 9:
                        $F3_C = 15;
                        break;    
                    case $F3 > 9 && $F3 <= 12:
                        $F3_C = 20;
                        break;
                    case $F3 > 12 && $F3 <= 14:
                        $F3_C = 25;
                        break;
                    case $F3 > 14 && $F3 <= 16:
                        $F3_C = 30;
                        break;
                    case $F3 > 16 && $F3 <= 20:
                        $F3_C = 35;
                        break;
                    case $F3 > 20 && $F3 <= 22:
                        $F3_C = 40;
                        break; 
                    case $F3 >22  && $F3 <= 25:
                        $F3_C = 45;
                        break;
                    case $F3 > 25 && $F3 <= 28:
                        $F3_C = 50;
                        break;
                    case $F3 > 28 && $F3 <= 31:
                        $F3_C = 55;
                        break;
                    case $F3 > 31 && $F3 <= 35:
                        $F3_C = 60;
                        break;
                    case $F3 > 35 && $F3 <= 40:
                        $F3_C = 65;
                        break;
                    case $F3 > 40 && $F3 <= 43:
                        $F3_C = 70;
                        break;
                    case $F3 > 43 && $F3 <= 48:
                        $F3_C = 75;
                        break;
                    case $F3 > 48 && $F3 <= 53:
                        $F3_C = 80;
                        break;
                    case $F3 > 53 && $F3 <= 62:
                        $F3_C = 85;
                        break;
                    case $F3 > 62 && $F3 <= 72:
                        $F3_C = 90;
                        break;
                    case $F3 > 72 && $F3 <= 86:
                        $F3_C = 95;
                        break;
                    case $F3 > 86 && $F3 <= 124:
                        $F3_C = 99;
                        break;
                }
                switch ($F4) {
                    case $F4 === '':
                        $F4_C = 0;
                        break;
                    case $F4 === 0:
                        $F4_C = 0;
                        break;    
                    case $F4 > 0 && $F4 <= 1:
                        $F4_C = 5;
                        break;
                    case $F4 > 1 && $F4 <= 2:
                        $F4_C = 10;
                        break;
                   /* case $F4 > 2 && $F4 <= 3:
                        $F4_C = 15;
                        break;*/    
                    case $F4 > 2 && $F4 <= 3:
                        $F4_C = 20;
                        break;
                    case $F4 > 3 && $F4 <= 4:
                        $F4_C = 25;
                        break;
                    case $F4 > 4 && $F4 <= 5:
                        $F4_C = 30;
                        break;
                    case $F4 > 5 && $F4 <= 6:
                        $F4_C = 35;
                        break;
                    case $F4 > 6 && $F4 <= 7:
                        $F4_C = 40;
                        break; 
                    case $F4 > 7 && $F4 <= 8:
                        $F4_C = 45;
                        break;
                    case $F4 > 8 && $F4 <= 10:
                        $F4_C = 50;
                        break;
                    case $F4 > 10 && $F4 <= 11:
                        $F4_C = 55;
                        break;
                    case $F4 > 11 && $F4 <= 13:
                        $F4_C = 60;
                        break;
                    case $F4 > 13 && $F4 <= 14:
                        $F4_C = 65;
                        break;
                    case $F4 > 14 && $F4 <= 17:
                        $F4_C = 70;
                        break;
                    case $F4 > 17 && $F4 <= 19:
                        $F4_C = 75;
                        break;
                    case $F4 > 19 && $F4 <= 21:
                        $F4_C = 80;
                        break;
                    case $F4 > 21 && $F4 <= 24:
                        $F4_C = 85;
                        break;
                    case $F4 > 24 && $F4 <= 31:
                        $F4_C = 90;
                        break;
                    case $F4 > 31 && $F4 <= 41:
                        $F4_C = 95;
                        break;
                    case $F4 > 41 && $F4 <= 58:
                        $F4_C = 99;
                        break;
                }
            }
            
            if($Genero0 == 1) {
                 switch ($R1) {
                    case $R1 === '':
                        $R1_C = 0;
                        break;
                    case $R1 === 0:
                        $R1_C = 0;
                        break;    
                    case $R1 > 0 && $R1 <= 20:
                        $R1_C = 5;
                        break;
                    case $R1 > 21 && $R1 <= 23:
                        $R1_C = 10;
                        break;
                    case $R1 > 23 && $R1 <= 29:
                        $R1_C = 15;
                        break;    
                    case $R1 > 29 && $R1 <= 35:
                        $R1_C = 20;
                        break;
                    case $R1 > 35 && $R1 <= 38:
                        $R1_C = 25;
                        break;
                    case $R1 > 38 && $R1 <= 42:
                        $R1_C = 30;
                        break;
                    case $R1 > 42 && $R1 <= 44:
                        $R1_C = 35;
                        break;
                    case $R1 > 44 && $R1 <= 47:
                        $R1_C = 40;
                        break; 
                    case $R1 > 47 && $R1 <= 52:
                        $R1_C = 45;
                        break;
                    case $R1 > 52 && $R1 <= 55:
                        $R1_C = 50;
                        break;
                    case $R1 > 55 && $R1 <= 60:
                        $R1_C = 55;
                        break;
                    case $R1 > 60 && $R1 <= 67:
                        $R1_C = 60;
                        break;
                    case $R1 > 67 && $R1 <= 71:
                        $R1_C = 65;
                        break;
                    case $R1 > 71 && $R1 <= 76:
                        $R1_C = 70;
                        break;
                    case $R1 > 76 && $R1 <= 80:
                        $R1_C = 75;
                        break;
                    case $R1 > 80 && $R1 <= 85:
                        $R1_C = 80;
                        break;
                    case $R1 > 85 && $R1 <= 91:
                        $R1_C = 85;
                        break;
                    case $R1 > 91 && $R1 <= 96:
                        $R1_C = 90;
                        break;
                    case $R1 > 96 && $R1 <= 109:
                        $R1_C = 95;
                        break;
                    case $R1 > 109 && $R1 <= 124:
                        $R1_C = 99;
                        break;    
                }
                switch ($R2) {
                    case $R2 === '':
                        $R2_C = 0;
                        break;
                    case $R2 === 0:
                        $R2_C = 0;
                        break;    
                    case $R2 > 0 && $R2 <= 6:
                        $R2_C = 10;
                        break;
                    case $R2 > 6 && $R2 <= 7:
                        $R2_C = 15;
                        break;    
                    case $R2 > 7 && $R2  <=9:
                        $R2_C = 20;
                        break;
                    case $R2 > 9 && $R2 <= 11:
                        $R2_C = 25;
                        break;
                    case $R2 > 11 && $R2 <= 15:
                        $R2_C = 30;
                        break;
                    case $R2 > 15 && $R2 <= 16:
                        $R2_C = 35;
                        break;
                    case $R2 > 16 && $R2 <= 19:
                        $R2_C = 40;
                        break; 
                    case $R2 > 19 && $R2 <= 20:
                        $R2_C = 45;
                        break;
                    case $R2 > 20 && $R2 <= 23:
                        $R2_C = 50;
                        break;
                    case $R2 > 23 && $R2 <= 26:
                        $R2_C = 55;
                        break;
                    case $R2 > 26 && $R2 <= 29:
                        $R2_C = 60;
                        break;
                    case $R2 > 29 && $R2 <= 30:
                        $R2_C = 65;
                        break;
                    case $R2 > 30 && $R2 <= 32:
                        $R2_C = 70;
                        break;
                    case $R2 > 32 && $R2 <= 36:
                        $R2_C = 75;
                        break;
                    case $R2 > 36 && $R2 <= 40:
                        $R2_C = 80;
                        break;
                    case $R2 > 40 && $R2 <= 45:
                        $R2_C = 85;
                        break;
                    case $R2 > 45 && $R2 <= 48:
                        $R2_C = 90;
                        break;
                    case $R2 > 48 && $R2 <= 53:
                        $R2_C = 95;
                        break;
                    case $R2 > 53 && $R2 <= 68:
                        $R2_C = 99;
                        break;
                    case $R2 > 68 && $R2 >= 84:
                        $R2_C = 99;
                        break;    
                }
                switch ($R3) {
                    case $R3 === '':
                        $R3_C = 0;
                        break;  
                    case $R3 === 0:
                        $R3_C = 0;
                        break;     
                    case $R3 > 0 && $R3 <= 2:
                        $R3_C = 5;
                        break;
                    case $R3 > 2 && $R3 <= 7:
                        $R3_C = 10;
                        break;
                    case $R3 > 7 && $R3 <= 12:
                        $R3_C = 15;
                        break;    
                    case $R3 > 12 && $R3 <= 16:
                        $R3_C = 20;
                        break;
                    case $R3 > 16 && $R3 <= 20:
                        $R3_C = 25;
                        break;
                    case $R3 > 20 && $R3 <= 22:
                        $R3_C = 30;
                        break;
                    case $R3 > 22 && $R3 <= 24:
                        $R3_C = 35;
                        break;
                    case $R3 > 24 && $R3 <= 27:
                        $R3_C = 40;
                        break; 
                    case $R3 > 27 && $R3 <= 29:
                        $R3_C = 45;
                        break;
                    case $R3 > 29 && $R3 <= 31:
                        $R3_C = 50;
                        break;
                    case $R3 > 31 && $R3 <= 35:
                        $R3_C = 55;
                        break;
                    case $R3 > 35 && $R3 <= 41:
                        $R3_C = 60;
                        break;
                    case $R3 > 41 && $R3 <= 46:
                        $R3_C = 65;
                        break;
                    case $R3 > 46 && $R3 <= 51:
                        $R3_C = 70;
                        break;
                    case $R3 > 51 && $R3 <= 59:
                        $R3_C = 75;
                        break;
                    case $R3 > 59 && $R3 <= 63:
                        $R3_C = 80;
                        break;
                    case $R3 > 64 && $R3 <= 69:
                        $R3_C = 85;
                        break;
                    case $R3 > 69 && $R3 <= 80:
                        $R3_C = 90;
                        break;
                    case $R3 > 80 && $R3 <= 94:
                        $R3_C = 95;
                        break;
                    case $R3 > 94 && $R3 >= 108:
                        $R3_C = 99;
                        break;
                }
                switch ($R) {
                    case $R === '':
                        $R_C = 0;
                        break;
                    case $R === 0:
                        $R_C = 0;
                        break;    
                    case $R > 0 && $R <= 38:
                        $R_C = 5;
                        break;
                    case $R > 38 && $R <= 55:
                        $R_C = 10;
                        break;
                    case $R > 55 && $R <= 64:
                        $R_C = 15;
                        break;    
                    case $R > 64 && $R <= 67:
                        $R_C = 20;
                        break;
                    case $R > 67 && $R <= 73:
                        $R_C = 25;
                        break;
                    case $R > 73 && $R <= 83:
                        $R_C = 30;
                        break;
                    case $R > 83 && $R <= 88:
                        $R_C = 35;
                        break;
                    case $R > 88 &&  $R <= 97:
                        $R_C = 40;
                        break; 
                    case $R > 97 &&  $R <= 106:
                        $R_C = 45;
                        break;
                    case $R > 106 &&  $R <= 115:
                        $R_C = 50;
                        break;
                    case $R > 115 &&  $R <= 129:
                        $R_C = 55;
                        break;
                    case $R > 129 &&  $R <= 140:
                        $R_C = 60;
                        break;
                    case $R > 140 &&  $R <= 152:
                        $R_C = 65;
                        break;
                    case $R > 152 && $R <= 165:
                        $R_C = 70;
                        break;
                    case $R > 165 && $R <= 176:
                        $R_C = 75;
                        break;
                    case $R > 176 && $R <= 186:
                        $R_C = 80;
                        break;
                    case $R > 186 && $R <= 197:
                        $R_C = 85;
                        break;
                    case $R > 197 && $R <= 211:
                        $R_C = 90;
                        break;
                    case $R > 211 && $R <= 260:
                        $R_C = 95;
                        break;
                    case $R > 260 && $R >= 261:
                        $R_C = 99;
                        break;
                }
                switch ($F1) {
                    case $F1 == '':
                        $F1_C = 0;
                        break;
                    case $F1 === 0:
                        $F1_C = 0;
                        break;    
                    case $F1 > 0 && $F1 <= 16:
                        $F1_C = 5;
                        break;
                    case $F1 > 16 && $F1 <= 22:
                        $F1_C = 10;
                        break;
                    case $F1 > 22 && $F1 <= 28:
                        $F1_C = 15;
                        break;    
                    case $F1 > 28 && $F1 <= 31:
                        $F1_C = 20;
                        break;
                    case $F1 > 31 && $F1 <= 33:
                        $F1_C = 25;
                        break;
                    case $F1 > 33 && $F1 <= 38:
                        $F1_C = 30;
                        break;
                    case $F1 > 38 && $F1 <= 45:
                        $F1_C = 35;
                        break;
                    case $F1 > 45 && $F1 <= 49:
                        $F1_C = 40;
                        break; 
                    case $F1 > 49 && $F1 <= 53:
                        $F1_C = 45;
                        break;
                    case $F1 > 53 && $F1 <= 58:
                        $F1_C = 50;
                        break;
                    case $F1 > 58 && $F1 <= 64:
                        $F1_C = 55;
                        break;
                    case $F1 > 64 && $F1 <= 67:
                        $F1_C = 60;
                        break;
                    case $F1 > 67 && $F1 <= 72:
                        $F1_C = 65;
                        break;
                    case $F1 > 72 && $F1 <= 77:
                        $F1_C = 70;
                        break;
                    case $F1 > 77 && $F1 <= 82:
                        $F1_C = 75;
                        break;
                    case $F1 > 82 && $F1 <= 88:
                        $F1_C = 80;
                        break;
                    case $F1 > 88 && $F1 <= 92:
                        $F1_C = 85;
                        break;
                    case $F1 > 92 && $F1 <= 99:
                        $F1_C = 90;
                        break;
                    case $F1 > 99 && $F1 <= 108:
                        $F1_C = 95;
                        break;
                    case $F1 > 108 && $F1 <= 137:
                        $F1_C = 99;
                        break;
                }
                switch ($F2) {
                    case $F2 === '':
                        $F2_C = 0;
                        break;
                    case $F2 === 0:
                        $F2_C = 0;
                        break;    
                    case $F2 > 0 &&  $F2 <= 2:
                        $F2_C = 5;
                        break;
                    case $F2 > 2 &&  $F2 <= 3:
                        $F2_C = 10;
                        break;
                    case $F2 > 3 &&  $F2 <= 4:
                        $F2_C = 15;
                        break;    
                    case $F2 > 4 &&  $F2 <= 6:
                        $F2_C = 20;
                        break;
                    case $F2 > 6 &&  $F2 <= 7:
                        $F2_C = 25;
                        break;
                    case $F2 > 7 &&  $F2 <= 8:
                        $F2_C = 30;
                        break;
                    case $F2 > 8 &&  $F2 <= 9:
                        $F2_C = 35;
                        break;
                    case $F2 > 9 &&  $F2 <= 10:
                        $F2_C = 40;
                        break; 
                    case $F2 > 10 &&  $F2 <= 12:
                        $F2_C = 45;
                        break;
                    case $F2 > 12 &&  $F2 <= 13:
                        $F2_C = 50;
                        break;
                    case $F2 > 13 &&  $F2 <= 14:
                        $F2_C = 55;
                        break;
                    case $F2 > 14 &&  $F2 <= 16:
                        $F2_C = 60;
                        break;
                    case $F2 > 16 &&  $F2 <= 17:
                        $F2_C = 65;
                        break;
                    case $F2 > 17 &&  $F2 <= 19:
                        $F2_C = 70;
                        break;
                    case $F2 > 19 &&  $F2 <= 21:
                        $F2_C = 75;
                        break;
                    case $F2 > 21 &&  $F2 <= 23:
                        $F2_C = 80;
                        break;
                    case $F2 > 23 &&  $F2 <= 25:
                        $F2_C = 85;
                        break;
                    case $F2 > 25 &&  $F2 <= 28:
                        $F2_C = 90;
                        break;
                    case $F2 > 28 &&  $F2 <= 34:
                        $F2_C = 95;
                        break;
                    case $F2 > 34 &&  $F2 <= 45:
                        $F2_C = 99;
                        break;
                }
                 switch ($F3) {
                    case $F3 === '':
                        $F3_C = 0;
                        break;
                    case $F3 === 0:
                        $F3_C = 0;
                        break;    
                    case $F3 > 0 && $F3 <= 2:
                        $F3_C = 5;
                        break;
                    case $F3 > 2 && $F3 <= 3:
                        $F3_C = 10;
                        break;
                    case $F3 > 3 && $F3 <= 5:
                        $F3_C = 15;
                        break;    
                    case $F3 > 5 && $F3 <= 8:
                        $F3_C = 20;
                        break;
                    case $F3 > 10 && $F3 <= 10:
                        $F3_C = 25;
                        break;
                    case $F3 > 14 && $F3 <= 14:
                        $F3_C = 30;
                        break;
                    case $F3 > 14 && $F3 <= 17:
                        $F3_C = 35;
                        break;
                    case $F3 > 17 && $F3 <= 19:
                        $F3_C = 40;
                        break; 
                    case $F3 > 19 && $F3 <= 21:
                        $F3_C = 45;
                        break;
                    case $F3 > 21 && $F3 <= 23:
                        $F3_C = 50;
                        break;
                    case $F3 > 23 && $F3 <= 25:
                        $F3_C = 55;
                        break;
                    case $F3 > 25 && $F3 <= 28:
                        $F3_C = 60;
                        break;
                    case $F3 > 28 && $F3 <= 34:
                        $F3_C = 65;
                        break;
                    case $F3 > 34 && $F3 <= 37:
                        $F3_C = 70;
                        break;
                    case $F3 > 37 && $F3 <= 41:
                        $F3_C = 75;
                        break;
                    case $F3 > 41 && $F3 <= 45:
                        $F3_C = 80;
                        break;
                    case $F3 > 45 && $F3 <= 50:
                        $F3_C = 85;
                        break;
                    case $F3 > 50 && $F3 <= 60:
                        $F3_C = 90;
                        break;
                    case $F3 > 60 && $F3 <= 71:
                        $F3_C = 95;
                        break;
                    case $F3 >71  && $F3 <= 90:
                        $F3_C = 99;
                        break;
                }
                switch ($F4) {
                    case $F4 === '':
                        $F4_C = 0;
                        break;
                    case $F4 === 0:
                        $F4_C = 0;
                        break;
                    case $F4 > 0 && $F4 <= 0:
                        $F4_C = 5;
                        break;
                    case $F4 > 0 && $F4 <= 1:
                        $F4_C = 10;
                        break;
                    /*case $F4 > 1 && $F4 <= '-':
                        $F4_C = 15;
                        break;*/    
                    case $F4 > 1 && $F4 <= 2:
                        $F4_C = 20;
                        break;
                    /*case $F4 >  && $F4 <= '-':
                        $F4_C = 25;
                        break;*/
                    case $F4 > 2 && $F4 <= 3:
                        $F4_C = 30;
                        break;
                    case $F4 > 3 && $F4 <= 4:
                        $F4_C = 35;
                        break;
                    case $F4 > 4 && $F4 <= 5:
                        $F4_C = 40;
                        break; 
                    case $F4 > 5 && $F4 <= 6:
                        $F4_C = 45;
                        break;
                    case $F4 > 6 && $F4 <= 7:
                        $F4_C = 50;
                        break;
                    case $F4 > 7 && $F4 <= 8:
                        $F4_C = 55;
                        break;
                    case $F4 > 8 && $F4 <= 9:
                        $F4_C = 60;
                        break;
                    case $F4 > 9 && $F4 <= 10:
                        $F4_C = 65;
                        break;
                    case $F4 > 10 && $F4 <= 12:
                        $F4_C = 70;
                        break;
                    case $F4 > 12 && $F4 <= 13:
                        $F4_C = 75;
                        break;
                    case $F4 > 13 && $F4 <= 15:
                        $F4_C = 80;
                        break;
                    case $F4 > 15 && $F4 <= 18:
                        $F4_C = 85;
                        break;
                    case $F4 > 18 && $F4 <= 25:
                        $F4_C = 90;
                        break;
                    case $F4 > 25 && $F4 <= 35:
                        $F4_C = 95;
                        break;
                    case $F4 > 35 && $F4 <= 42:
                        $F4_C = 99;
                        break;
                }
            }   
       

?>
<style>
      @font-face {
        font-family: MyriadPro;
        src: url(../fonts/MyriadPro-Regular.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: MyriadProB;
        src: url(../fonts/MyriadPro-Bold.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Amerika;
        src: url(../fonts/Amerika.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Roman;
        src: url(../fonts/helvetica.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Romanbd;
        src: url(../fonts/helveticabd.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Narrow;
        src: url(../fonts/Narrow.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family:Verdana;
        src: url(../fonts/verdana.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family:Verdanab;
        src: url(../fonts/verdanab.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family:Verdanabi;
        src: url(../fonts/verdanabi.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family:Verdanai;
        src: url(../fonts/verdanai.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family:Verdanal;
        src: url(../fonts/verdanal.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Moriston;
        src: url(../fonts/Moriston.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Moristonl;
        src: url(../fonts/Moristonl.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Moristonb;
        src: url(../fonts/Moristonbd.otf);
        font-weight: normal;
        font-style: normal;
    } 
    @font-face {
        font-family: elmessiri;
        src: url(../fonts/elmessiri.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Raleway;
        src: url(../fonts/Raleway.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Ralewaym;
        src: url(../fonts/Ralewaym.ttf);
        font-weight: normal;
        font-style: normal;
    }
    html,
    body {
        font-family:Verdana;
        font-size:13px;
        line-height: 2rem;
        color: #000000;
        border:none;
        overflow-x: hidden;
        text-align:justify;
        text-rendering: optimizeLegibility; 
        background:#f1f3f3;
    }
    tbody td {
        text-align:center;
        height:12px;
    }
    .ventana_flotante {
        box-shadow: 0px 4px 10px 0px rgba(0,0,0,8);
        background-color: #ffffff;
        margin-bottom:30px;
        padding:1em;
    }
    .container-fluid li a:link, .container-fluid li a:visited {
        color: #000000!important;
        background-color:transparent!important;
    }
    .container-fluid li a:hover, .container-fluid li a:active {
        color: #333333!important;
    } 
    input[type="checkbox"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
    }
    .checkbox label {
        display: inline-block;
        position: relative;
        float:center!important;
        margin-left:24px!important;
    }
    #check1::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 15px;
        height: 15px;
        left: 0;
        margin-left: -20px;
        background-color:#6fc0b2;
        box-shadow:0px 4px 3px rgba(0,0,0,.1);
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        width: 16px;
        height: 16px;
        left: -19px;
        top: -6px;
        font-size: 11px;
    }
    #check2::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 15px;
        height: 15px;
        left: 0;
        margin-left: -20px;
        background-color:#b3c7cc;            
    }
    #check2::after {
        display: inline-block;
        position: absolute;
        width: 16px;
        height: 16px;
        left: -19px;
        top: -6px;
        font-size: 11px;
    }
    #rotar {
        position:relative;
        -moz-transform: rotate(-90.0deg);  /* FF3.5+ */
        -o-transform: rotate(-90.0deg);  /* Opera 10.5 */
        -webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */
        filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
    }
    td select,
    td input {
        font-size:18px;
        border-radius:0;
        border-color:#006699;
        text-align:center;
        width:3em;
        height:3em;
        margin-top:0.8em!important;
    }
    #boton {
        width: 270px;
        height: 45px;
        font-size:22px;
        transform-style: preserve-3d;
        border:0!important;
        border-radius:0;
        background:#000000!important;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    #boton:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        border: 1px solid #f58634!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    .toggle-custom {
        background:transparent!important;
    }
    .toggle-custom[aria-expanded='true'] .glyphicon-plus:before {
        content: "\2212";                
    }
    
    .table {
        table-layout: fixed;
        border:hidden!importnat;
        color:#000000;
    }
    .table th {
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        width:100%;
        text-align:center;
        padding:0.6em!important;
        border:1px solid #71788e!important;
    }
    .table td {
        text-align:center;
        padding:1em;
        border:1px solid #71788e;
        vertical-align:middle!important;
    }
        
    #cognitivo {
        margin-top:-54em;
        margin-left:25.5%;
    }
    #fisiologico {
        margin-top:-54em;
        margin-left:39.6%;
    }
    #motriz {
        margin-top:-54em;
        margin-left:54.2%;
    }
    #total {
        margin-top:-54em;
        margin-left:68.5%;
    } 

    
</style> 
</head> 
<body>
<div class="container-fluid" style="background-color:#f1f3f3;font-size:16px;font-family:Moriston;z-index:-1">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#">
                <?php echo ' ' . $Nombre; ?>
            </a>
        </li>                           
        <li>
            <a href=<?php echo RUTA_LOGOUT_ISRA ?>>
                <i class="fa fa-share-square-o" aria-hidden="true"></i> Cerrar sesión</a>
        </li>
</div>
<div class="container-fluid" style="padding:0">
    <div class=" col-md-6 col-md-offset-3"><br><br>
            <p style="color:#a69dc8;font-family:MyriadProB;letter-spacing:2px;font-size:70px;text-shadow: 0.1em 0.1em 0.05em #333;text-align:center">ISRA</p><br>
            <p style="text-align:center;font-family:narrow;color:#666666;font-size:30px;letter-spacing:2px;">RESULTADOS</p>
            <table class="table" style="width:100%!important;font-size:16px;padding:0;margin:0;text-align:center;font-size:13px"><br>
                <tr style="border-color:#000000">
                    <td style="font-family:verdanab;width:25%;text-align:left;border-color:#000000">Puntuaciones directas</td>
                    <td style="width:15%;border-color:#000000"><?php echo $R1 ?></td>
                    <td style="width:15%;border-color:#000000"><?php echo $R2 ?></td>
                    <td style="width:15%;border-color:#000000"><?php echo $R3 ?></td>
                    <td style="width:15%;border-color:#000000"><?php echo $R ?></td>
                    <td style="font-size:13px;font-family:verdanab;width:15%;border-color:#000000" ROWSPAN=3>Clasificación</td>
                </tr>
                <tr>
                    <td style="font-family:verdanab;text-align:left">Puntuaciones centiles</td>
                    <td><?php echo $R1_C ?></td>
                    <td><?php echo $R2_C ?></td>
                    <td><?php echo $R3_C ?></td>
                    <td><?php echo $R_C ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-family:verdanab">Cognitivo</td>
                    <td style="font-family:verdanab">Fisiológico</td>
                    <td style="font-family:verdanab">Motor</td>
                    <td style="font-family:verdanab">Total (Rasgo)</td>
                </tr>
                
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab">99</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="font-family:verdanab">Ansiedad extrema</td>
                </tr>
                
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">95</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td ROWSPAN=4 style="font-family:verdanab">Ansiedad severa</td>
                </tr><tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">90</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">85</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab">80</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">75</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td ROWSPAN=11 style="font-family:verdanab">De ansiedad moderada a ansiedad marcada</td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">70</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">65</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">60</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">55</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">50</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">45</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">40</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">35</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">30</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab">25</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">20</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td ROWSPAN=4 style="font-family:verdanab">Ausencia de ansiedad o ansiedad mínima</td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">15</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab;border-bottom:0!important">10</td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                    <td style="border-bottom:0!important"></td>
                </tr>
                <tr>
                    <td style="font-size:13px;color:#666666;font-family:verdanab">5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
            </table>
            
            
          
            

            <div id="cognitivo" style="position:absolute"></div>
            <div id="fisiologico" style="position:absolute"></div>
            <div id="motriz" style="position:absolute"></div>
            <div id="total" style="position:absolute"></div>
            <div id="factor1" style="position:absolute;display:none"></div>
            <div id="factor2" style="position:absolute;display:none"></div>
            <div id="factor3" style="position:absolute;display:none"></div>
            <div id="factor4" style="position:absolute;display:none"></div>
            <br><br><br>
    
    </div>
</div>

<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
<script src="<?php echo RUTA_JS ?>highcharts2.js"></script>
<script src="<?php echo RUTA_JS ?>highcharts-more.js"></script>
<script src="<?php echo RUTA_JS ?>zlib.js"></script>
<script src="<?php echo RUTA_JS ?>png.js"></script>
<script src="<?php echo RUTA_JS ?>addimage.js"></script>
<script src="<?php echo RUTA_JS ?>filesaver.js"></script>
<script src="<?php echo RUTA_JS ?>jspdf.min.js"></script>
<script src="<?php echo RUTA_JS ?>base64.js"></script>
<script src="<?php echo RUTA_JS ?>autotable.js"></script>
<script src="<?php echo RUTA_JS ?>default_vfs.js"></script>
<script src="<?php echo RUTA_JS ?>jspdf.customfonts.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="<?php echo RUTA_JS ?>exporting.js"></script>
<script src="<?php echo RUTA_JS ?>canvas.js"></script>
<script src="<?php echo RUTA_JS ?>rgbcolor.js"></script>
<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.ui.min.js"></script>
<script src="<?php echo RUTA_JS ?>main.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.scrollTo.min.js"></script>
<script src="<?php echo RUTA_JS ?>common-scripts.js"></script>
<script src="<?php echo RUTA_JS ?>custom-file-input.js"></script>
<script>
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
            var o = $(this).attr("data-easein");
            "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    $(document).ready(function (){
        $(".loader").fadeOut("slow");
    });
    
    var input = [<?php echo $R1_C ?>],
    data = [],
    categories = [];
    $.each(input, function(index, value){
    var color;
    if (value <= 25) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#02e360'],[1, '#029740']]};
    else if (value > 25 && value <= 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#ccc900']]};
    else if (value > 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#f8766d'],[1, '#aa1308']]};
    data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
    });
    
    Highcharts.chart('cognitivo', {
    chart: {
    type: 'column',
    backgroundColor: false,
    width:80,
    height:700,
    padding:-1,
    margin:-1
    },
    title: {
            text: ''
    },
    xAxis: {
        title: {
            text: ''
        },
    },
    yAxis: {
        title: {
            text: ''
        },
        min:0, minRange:100, maxPadding:0, 
        gridLineWidth: 0, minorGridLineWidth: 0
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
        stacking: 'normal'
        }
    },
    tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color};font-size:20px">\u25CF</span> <b> {point.name}</b>' + ' <b> {point.y}%</b><br/>'
            },
    series: [{
        data: data
        }]
    });


    var input = [<?php echo $R2_C ?>],
    data = [],
    categories = [];
    $.each(input, function(index, value){
    var color;
    if (value <= 25) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#02e360'],[1, '#029740']]};
    else if (value > 25 && value <= 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#ccc900']]};
    else if (value > 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#f8766d'],[1, '#aa1308']]};
    data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
    });
    
    Highcharts.chart('fisiologico', {
    chart: {
    type: 'column',
    backgroundColor: false,
    width:80,
    height:700,
    padding:-1,
    margin:-1
    },
    title: {
            text: ''
    },
    xAxis: {
        title: {
            text: ''
        },
    },
    yAxis: {
        title: {
            text: ''
        },
        min:0, minRange:100, maxPadding:0, 
        gridLineWidth: 0, minorGridLineWidth: 0
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
        stacking: 'normal'
        }
    },
    tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color};font-size:20px">\u25CF</span> <b> {point.name}</b>' + ' <b> {point.y}%</b><br/>'
            },
    series: [{
        data: data
        }]
    });


    var input = [<?php echo $R3_C ?>],
    data = [],
    categories = [];
    $.each(input, function(index, value){
    var color;
    if (value <= 25) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#02e360'],[1, '#029740']]};
    else if (value > 25 && value <= 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#ccc900']]};
    else if (value > 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#f8766d'],[1, '#aa1308']]};
    data.push({y:value, color: color});
    });
    
    Highcharts.chart('motriz', {
    chart: {
    type: 'column',
    backgroundColor: false,
    width:80,
    height:700,
    padding:-1,
    margin:-1
    },
    title: {
            text: ''
    },
    xAxis: {
        title: {
            text: ''
        },
    },
    yAxis: {
        title: {
            text: ''
        },
        min:0, minRange:100, maxPadding:0, 
        gridLineWidth: 0, minorGridLineWidth: 0
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
        stacking: 'normal'
        }
    },
    tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color};font-size:20px">\u25CF</span> <b> {point.name}</b>' + ' <b> {point.y}%</b><br/>'
            },
    series: [{
        data: data
        }]
    });
    

    var input = [<?php echo $R_C ?>],
    data = [],
    categories = [];
    $.each(input, function(index, value){
    var color;
    if (value <= 25) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#02e360'],[1, '#029740']]};
    else if (value > 25 && value <= 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#ccc900']]};
    else if (value > 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#f8766d'],[1, '#aa1308']]};
    data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
    });
    
    Highcharts.chart('total', {
    chart: {
    type: 'column',
    backgroundColor: false,
    width:80,
    height:700,
    padding:-1,
    margin:-1
    },
    title: {
            text: ''
    },
    xAxis: {
        title: {
            text: ''
        },
    },
    yAxis: {
        title: {
            text: ''
        },
        min:0, minRange:100, maxPadding:0, 
        gridLineWidth: 0, minorGridLineWidth: 0
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
        stacking: 'normal'
        }
    },
    tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color};font-size:20px">\u25CF</span> <b> {point.name}</b>' + ' <b> {point.y}%</b><br/>'
            },
    series: [{
        data: data
        }]
    });

    var input = [<?php echo $F1_C ?>],
    data = [],
    categories = [];
    $.each(input, function(index, value){
    var color;
    if (value <= 25) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#02e360'],[1, '#029740']]};
    else if (value > 25 && value <= 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#ccc900']]};
    else if (value > 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#f8766d'],[1, '#aa1308']]};
    data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
    });
    
    Highcharts.chart('factor1', {
    chart: {
    type: 'column',
    backgroundColor: false,
    width:80,
    height:700,
    padding:-1,
    margin:-1
    },
    title: {
            text: ''
    },
    xAxis: {
        title: {
            text: ''
        },
    },
    yAxis: {
        title: {
            text: ''
        },
        min:0, minRange:100, maxPadding:0, 
        gridLineWidth: 0, minorGridLineWidth: 0
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
        stacking: 'normal'
        }
    },
    tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color};font-size:20px">\u25CF</span> <b> {point.name}</b>' + ' <b> {point.y}%</b><br/>'
            },
    series: [{
        data: data
        }]
    });
    
    var input = [<?php echo $F2_C ?>],
    data = [],
    categories = [];
    $.each(input, function(index, value){
    var color;
    if (value <= 25) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#02e360'],[1, '#029740']]};
    else if (value > 25 && value <= 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#ccc900']]};
    else if (value > 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#f8766d'],[1, '#aa1308']]};
    data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
    });
    
    Highcharts.chart('factor2', {
    chart: {
    type: 'column',
    backgroundColor: false,
    width:80,
    height:700,
    padding:-1,
    margin:-1
    },
    title: {
            text: ''
    },
    xAxis: {
        title: {
            text: ''
        },
    },
    yAxis: {
        title: {
            text: ''
        },
        min:0, minRange:100, maxPadding:0, 
        gridLineWidth: 0, minorGridLineWidth: 0
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
        stacking: 'normal'
        }
    },
    tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color};font-size:20px">\u25CF</span> <b> {point.name}</b>' + ' <b> {point.y}%</b><br/>'
            },
    series: [{
        data: data
        }]
    });

    var input = [<?php echo $F3_C ?>],
    data = [],
    categories = [];
    $.each(input, function(index, value){
    var color;
    if (value <= 25) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#02e360'],[1, '#029740']]};
    else if (value > 25 && value <= 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#ccc900']]};
    else if (value > 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#f8766d'],[1, '#aa1308']]};
    data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
    });
    
    Highcharts.chart('factor3', {
    chart: {
    type: 'column',
    backgroundColor: false,
    width:80,
    height:700,
    padding:-1,
    margin:-1
    },
    title: {
            text: ''
    },
    xAxis: {
        title: {
            text: ''
        },
    },
    yAxis: {
        title: {
            text: ''
        },
        min:0, minRange:100, maxPadding:0, 
        gridLineWidth: 0, minorGridLineWidth: 0
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
        stacking: 'normal'
        }
    },
    tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color};font-size:20px">\u25CF</span> <b> {point.name}</b>' + ' <b> {point.y}%</b><br/>'
            },
    series: [{
        data: data
        }]
    });
    
    var input = [<?php echo $F4_C ?>],
    data = [],
    categories = [];
    $.each(input, function(index, value){
    var color;
    if (value <= 25) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#02e360'],[1, '#029740']]};
    else if (value > 25 && value <= 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#ccc900']]};
    else if (value > 75) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#f8766d'],[1, '#aa1308']]};
    data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
    });
    
    Highcharts.chart('factor4', {
    chart: {
    type: 'column',
    backgroundColor: false,
    width:80,
    height:700,
    padding:-1,
    margin:-1
    },
    title: {
            text: ''
    },
    xAxis: {
        title: {
            text: ''
        },
    },
    yAxis: {
        title: {
            text: ''
        },
        min:0, minRange:100, maxPadding:0, 
        gridLineWidth: 0, minorGridLineWidth: 0
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
        stacking: 'normal'
        }
    },
    tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color};font-size:20px">\u25CF</span> <b> {point.name}</b>' + ' <b> {point.y}%</b><br/>'
            },
    series: [{
        data: data
        }]
    });
    
    (function(API){
            API.myText = function(txt, options, x, y) {
                options = options ||{};
                if( options.align == "center" ){
                    var fontSize = this.internal.getFontSize();
                    var pageWidth = this.internal.pageSize.width;
                    txtWidth = this.getStringUnitWidth(txt)*fontSize/this.internal.scaleFactor;
                    x = ( pageWidth - txtWidth ) / 2;
                }
                this.text(txt,x,y);
        };
    })(jsPDF.API);
    (function(H) {
        H.Chart.prototype.createCanvas = function(divId) {
            var svg = this.getSVG(),
                   width = parseInt(svg.match(/width="([0-9]+)"/)[9]),
                height = parseInt(svg.match(/height="([0-9]+)"/)[9]),
                canvas = document.createElement('canvas');
                canvas.setAttribute('width', width);
                canvas.setAttribute('height', height);
            if (canvas.getContext && canvas.getContext('2d')) {
                    canvg(canvas, svg);
                    return canvas.toDataURL("image/png");
                }
                else {
                    alert("Your browser doesn't support this feature, please use a modern browser");
                    return false;
                }
            }
    }(Highcharts));
 

    var doc = new jsPDF('p', 'pt', 'letter');
    
    var img = new Image();
    img.src = '../imagine/isra1.jpg'
    doc.addImage(img, 'png', 240, 30, 120, 50)
    
    doc.setFont("helvetica");
    doc.setFontSize(16);
    doc.setTextColor(102, 102, 102);
    doc.myText('HOJA DE PERFIL (Sistema de respuestas)',{align: "center"},0,110);
    
    var columns = ['', '','','','',''];
    var data = [['Nombre y Apellidos:','<?php echo $Nombre ?>','Edad:','<?php echo $Edad ?> años','Sexo:','<?php echo $Genero ?>']];
    doc.autoTable(columns,data, {margin:{ top: 120, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
    columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 40}, 3: {fontStyle:'normal',columnWidth: 58, fillColor: [239, 237, 247]}, 4: {columnWidth: 40}, 5: {fontStyle:'normal',columnWidth: 18, fillColor: [239, 237, 247]}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    
    var columns = ['', '','','','',''];
    var data = [['Estado civil:','<?php echo $Estado ?>','Empresa:','<?php echo $Empresa.' - '.$Sede ?>','Cargo:','<?php echo $Cargo ?>']];
    doc.autoTable(columns,data, {margin:{ top: 140, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
    columnStyles: {0: {columnWidth: 70}, 1: {fontStyle:'normal',columnWidth: 80, fillColor: [239, 237, 247]}, 2: {columnWidth: 55}, 3: {fontStyle:'normal',columnWidth: 170, fillColor: [239, 237, 247]}, 4: {columnWidth: 45}, 5: {fontStyle:'normal',columnWidth: 120, fillColor: [239, 237, 247]}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    
    var columns = ['', '', '', '', ''];
    var data = [['Puntuaciones directas','<?php echo $R1 ?>','<?php echo $R2 ?>','<?php echo $R3 ?>','<?php echo $R ?>'],
                ['Puntuaciones centiles','<?php echo $R1_C ?>','<?php echo $R2_C ?>','<?php echo $R3_C ?>','<?php echo $R_C ?>'],
                ['','Cognitivo','Fisiológico','Motor','Total \n(rasgo)']];
    doc.autoTable(columns,data, {margin:{ top: 200, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
    columnStyles: {0: {columnWidth: 140}, 1: {columnWidth: 70}, 2: {columnWidth: 70}, 3: {columnWidth: 70}, 4: {columnWidth: 70}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    
    var columns = [''];
    var data = [['\n\n\nClasificación\n\n']];
    doc.autoTable(columns,data, {margin:{ top: 200, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    
    var columns = ['','','','',''];
    var data = [['99','','','','']];
    doc.autoTable(columns,data, {margin:{ top: 271, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[102, 102, 102], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {columnWidth: 140}, 1: {columnWidth: 70}, 2: {columnWidth: 70}, 3: {columnWidth: 70}, 4: {columnWidth: 70}, 5: {columnWidth: 120}},
    bodyStyles:{textColor:[102, 102, 102], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5,fillColor: [255,255,255]} });

    var columns = ['','','','',''];
    var data = [['95','','','',''],
                ['90','','','',''],
                ['85','','','',''],
                ['80','','','',''],
                ['75','','','',''],
                ['70','','','',''],
                ['65','','','',''],
                ['60','','','',''],
                ['55','','','',''],
                ['50','','','',''],
                ['45','','','',''],
                ['40','','','',''],
                ['35','','','',''],
                ['30','','','',''],
                ['25','','','',''],
                ['20','','','',''],
                ['15','','','',''],
                ['10','','','',''],
                ['5','','','','']];
    doc.autoTable(columns,data, {margin:{ top: 291, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[102, 102, 102], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {columnWidth: 140}, 1: {columnWidth: 70}, 2: {columnWidth: 70}, 3: {columnWidth: 70}, 4: {columnWidth: 70}, 5: {columnWidth: 120}},
    bodyStyles:{textColor:[102, 102, 102], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5,fillColor: [255,255,255]} });
    
    var columns = [''];
    var data = [['\n\n\n\n\nAnsiedad severa\n\n']];
    doc.autoTable(columns,data, {margin:{ top: 271, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor: [255,255,255]} });
    var columns = [''];
    var data = [['Ansiedad extrema']];
    doc.autoTable(columns,data, {margin:{ top: 271, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor: [255,255,255]} });
    var columns = [''];
    var data = [['\n\n\n\n\n\n\n\n\nDe ansiedad moderada a ansiedad marcada\n\n\n\n\n\n\n\n']];
    doc.autoTable(columns,data, {margin:{ top: 371, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor: [255,255,255]} });
    var columns = [''];
    var data = [['\n\nAusencia de ansiedad o ansiedad mínima\n']];
    doc.autoTable(columns,data, {margin:{ top: 591, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor: [255,255,255]} });
    var columns = [''];
    var data = [['\n']];
    doc.autoTable(columns,data, {margin:{ top: 639.5, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor: [255,255,255]} });
    
    doc.setLineWidth(1); 
    doc.setDrawColor(0,0,0);
    doc.line(40, 294, 579.5, 294);
    doc.line(40, 314, 579.5, 314);
    doc.line(40, 394, 579.5, 394);
    doc.line(40, 614, 579.5, 614);
    doc.line(40, 694, 579.5, 694);
    doc.setLineWidth(3); 
    doc.setDrawColor(255,255,255);
    doc.line(460.5, 662, 579.5, 662);

    var imageData = $('#cognitivo').highcharts().createCanvas();
    doc.addImage(imageData,'PNG', 190, 295, 50, 398);
    
    var imageData = $('#fisiologico').highcharts().createCanvas();
    doc.addImage(imageData,'PNG', 260, 295, 50, 398);
    
    var imageData = $('#motriz').highcharts().createCanvas();
    doc.addImage(imageData,'PNG', 330, 295, 50, 398);

    var imageData = $('#total').highcharts().createCanvas();
    doc.addImage(imageData,'PNG', 400, 295, 50, 398);
    
    doc.addPage();
    
    var img = new Image();
    img.src = '../imagine/isra1.jpg'
    doc.addImage(img, 'png', 240, 30, 120, 50)
    
    doc.setFont("helvetica");
    doc.setFontSize(16);
    doc.setTextColor(102, 102, 102);
    doc.myText('HOJA DE PERFIL (Rasgos específicos)',{align: "center"},0,110);
    
    var columns = ['', '','','','',''];
    var data = [['Nombre y Apellidos:','<?php echo $Nombre ?>','Edad:','<?php echo $Edad ?> años','Sexo:','<?php echo $Genero ?>']];
    doc.autoTable(columns,data, {margin:{ top: 120, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
    columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 40}, 3: {fontStyle:'normal',columnWidth: 58, fillColor: [239, 237, 247]}, 4: {columnWidth: 40}, 5: {fontStyle:'normal',columnWidth: 18, fillColor: [239, 237, 247]}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    
    var columns = ['', '','','','',''];
    var data = [['Estado civil:','<?php echo $Estado ?>','Empresa:','<?php echo $Empresa.' - '.$Sede ?>','Cargo:','<?php echo $Cargo ?>']];
    doc.autoTable(columns,data, {margin:{ top: 140, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
    columnStyles: {0: {columnWidth: 70}, 1: {fontStyle:'normal',columnWidth: 80, fillColor: [239, 237, 247]}, 2: {columnWidth: 55}, 3: {fontStyle:'normal',columnWidth: 170, fillColor: [239, 237, 247]}, 4: {columnWidth: 45}, 5: {fontStyle:'normal',columnWidth: 120, fillColor: [239, 237, 247]}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    
    var columns = ['', '', '', '', ''];
    var data = [['Puntuaciones directas','<?php echo $F1 ?>','<?php echo $F2 ?>','<?php echo $F3 ?>','<?php echo $F4 ?>'],
                ['Puntuaciones centiles','<?php echo $F1_C ?>','<?php echo $F2_C ?>','<?php echo $F3_C ?>','<?php echo $F4_C ?>'],
                ['','F-1','F-2','F-3','F-4']];
    doc.autoTable(columns,data, {margin:{ top: 200, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
    columnStyles: {0: {columnWidth: 140}, 1: {columnWidth: 70}, 2: {columnWidth: 70}, 3: {columnWidth: 70}, 4: {columnWidth: 70}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    
    var columns = [''];
    var data = [['\n\nClasificación\n\n\n']];
    doc.autoTable(columns,data, {margin:{ top: 200, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    
    var columns = ['','','','',''];
    var data = [['99','','','','']];
    doc.autoTable(columns,data, {margin:{ top: 260, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[102, 102, 102], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {columnWidth: 140}, 1: {columnWidth: 70}, 2: {columnWidth: 70}, 3: {columnWidth: 70}, 4: {columnWidth: 70}, 5: {columnWidth: 120}},
    bodyStyles:{textColor:[102, 102, 102], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5,fillColor: [255,255,255]} });

    var columns = ['','','','',''];
    var data = [['95','','','',''],
                ['90','','','',''],
                ['85','','','',''],
                ['80','','','',''],
                ['75','','','',''],
                ['70','','','',''],
                ['65','','','',''],
                ['60','','','',''],
                ['55','','','',''],
                ['50','','','',''],
                ['45','','','',''],
                ['40','','','',''],
                ['35','','','',''],
                ['30','','','',''],
                ['25','','','',''],
                ['20','','','',''],
                ['15','','','',''],
                ['10','','','',''],
                ['5','','','','']];
    doc.autoTable(columns,data, {margin:{ top: 280, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[102, 102, 102], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {columnWidth: 140}, 1: {columnWidth: 70}, 2: {columnWidth: 70}, 3: {columnWidth: 70}, 4: {columnWidth: 70}, 5: {columnWidth: 120}},
    bodyStyles:{textColor:[102, 102, 102], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5,fillColor: [255,255,255]} });
    
    var columns = [''];
    var data = [['\n\n\n\nAnsiedad severa\n\n\n']];
    doc.autoTable(columns,data, {margin:{ top: 266, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor: [255,255,255]} });
    var columns = [''];
    var data = [['Ansiedad extrema']];
    doc.autoTable(columns,data, {margin:{ top: 260, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor: [255,255,255]} });
    var columns = [''];
    var data = [['\n\n\n\n\n\n\n\n\nDe ansiedad moderada a ansiedad marcada\n\n\n\n\n\n\n\n']];
    doc.autoTable(columns,data, {margin:{ top: 360, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor: [255,255,255]} });
    var columns = [''];
    var data = [['\n\nAusencia de ansiedad o ansiedad mínima\n']];
    doc.autoTable(columns,data, {margin:{ top: 580, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor: [255,255,255]} });
    var columns = [''];
    var data = [['\n']];
    doc.autoTable(columns,data, {margin:{ top: 628.5, left:460 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: false}, 
    columnStyles: {0: {fontStyle:'bold', columnWidth: 120}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor: [255,255,255]} });
    
    doc.setLineWidth(1); 
    doc.setDrawColor(0,0,0);
    doc.line(40, 283, 579.5, 283);
    doc.line(40, 303, 579.5, 303);
    doc.line(40, 383, 579.5, 383);
    doc.line(40, 603, 579.5, 603);
    doc.line(40, 683, 579.5, 683);
    doc.setLineWidth(3); 
    doc.setDrawColor(255,255,255);
    doc.line(460.5, 650, 579.5, 650);

    var imageData = $('#factor1').highcharts().createCanvas();
    doc.addImage(imageData,'PNG', 190, 284, 50, 398);
    
    var imageData = $('#factor2').highcharts().createCanvas();
    doc.addImage(imageData,'PNG', 260, 284, 50, 398);
    
    var imageData = $('#factor3').highcharts().createCanvas();
    doc.addImage(imageData,'PNG', 330, 284, 50, 398);

    var imageData = $('#factor4').highcharts().createCanvas();
    doc.addImage(imageData,'PNG', 400, 284, 50, 398);
    
    doc.setFontSize(11);
    doc.setFontType("bold");
    doc.text(80,700, "F-1 ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
    doc.text(80,720, "F-2 ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
    doc.text(80,740, "F-3 ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
    doc.text(80,760, "F-4 ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
    doc.setFontSize(11);
    doc.setFontType("normal");
    doc.text(100,700, "Situaciones que implican evaluación y asunción de responsabilidades.", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
    doc.text(100,720, "Situaciones sexuales y de interacción social. ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
    doc.text(100,740, "Situaciones fóbicas.", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
    doc.text(100,760, "Situaciones habituales o de la vida cotidiana.", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
    
    
    doc.addPage();
    
    var img = new Image();
    img.src = '../imagine/isra1.jpg'
    doc.addImage(img, 'png', 240, 30, 120, 50)
    
    doc.setFont("helvetica");
    doc.setFontSize(13);
    doc.setTextColor(102, 102, 102);
    doc.myText('HISTORIA PSICOLOGICA (CONCEPTO)',{align: "left"},50,130);
    doc.setFontSize(11);
    if(<?php echo $R_C ?> <= 20) {
        doc.setTextColor(4, 107, 1);
        doc.text(50,160, "NO PRESENTA ALTERACIÓN EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.", {maxWidth: 500,align:'justify', lineHeightFactor: 1.5});
        doc.setTextColor(102, 102, 102);
        doc.setFontSize(13);
        doc.myText('IMPRESIÓN DIAGNÓSTICA',{align: "left"},50,220);
        doc.setTextColor(0,0,0);
        doc.setFontSize(11);
        doc.text(50,250, "CUMPLE CON CRITERIOS DE NORMALIDAD EN NIVELES DE ANSIEDAD ADAPTATIVA QUE PREPARA PARA EJECUTAR TAREAS O ALERTAR FRENTE A AMENAZAS. PUEDE PERMANECER POR PERIODOS LARGOS EN ALTURAS Y ESPACIOS CONFINADOS. LAS SITUACIONES NO INFLUYE EN SU CONDUCTA FRENTE A LOS ESTÍMULOS YA QUE POSEE BUENAS ESTRUCTURAS COGNITIVAS Y EMOCIONALES PARA PERCIBIR Y POR ENDE AFRONTAR DE MANERA ASERTIVA LAS EXPERIENCIAS DISPLACENTERAS O CONFLICTIVAS DE SU DÍA A DÍA. NO PRESENTA ALTERACIÓN EN SUS RESPUESTAS COGNITIVAS, MOTRICES O FISIOLÓGICAS.", {maxWidth: 500,align:'justify', lineHeightFactor: 1.5})
    } else if(<?php echo $R_C ?> <= 75 && <?php echo $R_C ?> >= 21) {
        doc.setTextColor(150, 147, 3);
        doc.text(50,160, "PRESENTA ALTERACIÓN LEVE EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.", {maxWidth: 500,align:'justify', lineHeightFactor: 1.5});
        doc.setTextColor(102, 102, 102);
        doc.setFontSize(13);
        doc.myText('IMPRESIÓN DIAGNÓSTICA',{align: "left"},50,220);
        doc.setTextColor(0,0,0);
        doc.setFontSize(11);
        doc.text(50,250, "CUMPLE CON CRITERIOS DE NORMALIDAD EN NIVELES DE ANSIEDAD PARA LABORAR EN ALTURAS Y ESPACIOS CONFINADOS. PRESENTA ANSIEDAD LEVE SIN EVIDENCIAR PATOLOGÍA EN RESPUESTAS FRENTE A LAS EXPERIENCIAS DISPLACENTERAS O CONFLICTIVAS YA QUE SON RESPUESTAS INMEDIATAS A FACTORES INMEDIATOS ESTRESANTES. PUEDE DEMPEÑAR SU FUNCIÓN DEL CARGO CON NORMALIDAD, A SU VEZ SE SUGUIERE TRABAJAR EN SUS RESPUESTAS COGNITIVAS, MOTRICES O FISIOLÓGICAS EN SU INEMDIATEZ.", {maxWidth: 500,align:'justify', lineHeightFactor: 1.5})   
    } else if(<?php echo $R_C ?> <= 95 && <?php echo $R_C ?> >= 76) {
        doc.setTextColor(124, 7, 3);
        doc.text(50,160, "PRESENTA ALTERACIÓN MODERADA EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.", {maxWidth: 500,align:'justify', lineHeightFactor: 1.5});
        doc.setTextColor(102, 102, 102);
        doc.setFontSize(13);
        doc.myText('IMPRESIÓN DIAGNÓSTICA',{align: "left"},50,220);
        doc.setTextColor(0,0,0);
        doc.setFontSize(11);
        doc.text(50,250, "PUEDE DESEMPEÑAR FUNCIONES DEL CARGO CON ACOMPAÑAMIENTO DE SUPERIORES MIENTRAS ADECUA SU ESTRUCTURA COGNITIVA Y PERCEPTUAL CON RESPECTO A SU MEDIO AMBIENTE LABORAL AL NUEVO CARGO QUE EJERCERÁ. DEBIDO A QUE PRESENTA ALTERACIÓN EN NIVELES DE ANSIEDAD MODERADA.", {maxWidth: 500,align:'justify', lineHeightFactor: 1.5})
    } else if(<?php echo $R_C ?> >= 96) {
        doc.setTextColor(124, 7, 3);
        doc.text(50,160, "PRESENTA ALTERACIÓN GRAVE EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.", {maxWidth: 500,align:'justify', lineHeightFactor: 1.5});
        doc.setTextColor(102, 102, 102);
        doc.setFontSize(13);
        doc.myText('IMPRESIÓN DIAGNÓSTICA',{align: "left"},50,220);
        doc.setTextColor(0,0,0);
        doc.setFontSize(11);
        doc.text(50,250, "PRESENTA ALTERACIÓN EN NIVELES DE ANSIEDAD, SU RESPUESTA FRENTE A ESTÍMULOS DISPLACENTEROS O CONFLICTIVOS ES DESPROPORCIONADA Y SU INTENSIDAD Y DURACIÓN EXCEDE LOS LÍMITES ACEPTABLES. PIERDE LA INTENCIÓN ADAPTATIVA GENERANDO MALESTAR EN EL PACIENTE, LO QUE IMPIDE QUE PUIEDA DESEMPEÑARSE ADECUADAMENTE EN EL CARGO.", {maxWidth: 500,align:'justify', lineHeightFactor: 1.5})
    }
    
    doc.setFontSize(13);
    doc.setTextColor(102, 102, 102);
    doc.myText('Fecha y hora de realización:',{align: "center"},-200,700);
    doc.setTextColor(0,0,0);
    doc.myText('<?php echo $mes.' '.$dia.' del '.$año.'  Hora: '.$hora ?>',{align: "center"},-200,720);
    
    
    const pageCount = doc.internal.getNumberOfPages();
    for(var i = 1; i <= pageCount; i++) {
    doc.setPage(i);
    doc.setTextColor(153, 153, 153);
    doc.text('Pág. ' + String(i) + ' de ' + String(pageCount),520,40,null,null,"left");
    doc.setFontSize(9);
    doc.myText('CEDISALUD IPS -PBX (574) 444 66 04 - MEDELLIN-APARTADÓ',{align: "center"},-200,780);
    }
    

    //doc.save('<?php echo $Nombre ?>.pdf'); 
    var blob = doc.output('blob');
    var fd = new FormData();
    fd.append('data', blob);
    fd.append('Codigo', '<?php echo $Codigo ?>');
    fd.append('Nombre', '<?php echo $Nombre ?>');
    fd.append('Etiqueta', '<?php echo $Etiqueta ?>');
    fd.append('Empresa', '<?php echo $Empresa ?>');
    fd.append('Cargo', '<?php echo $Cargo ?>');
    fd.append('Sede', '<?php echo $Sede ?>');
    fd.append('Sede0', '<?php echo $Sede0 ?>');
    $.ajax({
       type: 'POST',
       url: '../PHPMailer/pdf3.php',
       data: fd,
       processData: false,
       contentType: false
    }).done(function(data) {
        window.location = "logout_test" 
    });

</script>
</body>
</html>        