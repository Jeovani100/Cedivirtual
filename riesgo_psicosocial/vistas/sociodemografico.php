<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Consolidado Sociodemográfico</title>
<meta name="robots" content="INDEX,FOLLOW">
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<?php
     error_reporting(0);
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion.inc.php';
    include_once 'app/redireccion.inc.php';
    if (!controlsesion::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGIN);}
    conexion :: abrir_conexion();
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM admin WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $id_ = $row['id_admin'];
    $Activo = $row['Activo'];
    if ($Activo == 1){
        $id_admin = $id_;
    } else {
        $id_admin = $id;
    }
    $_SESSION['id_usuario'] = $id_admin;
    $Activo = $row['Activo'];
    $Autor = $row['PersonaC'];
    $sql = "SELECT * FROM admin WHERE id = '$id_admin'";
    $resultado1 = $mysqli->query($sql);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
    $Nit = $row1['Nit'];
    $Razon = $row1['Razon'];
    $Fecha = date('d-m-Y');
    
    $sql = "SELECT * FROM controles WHERE id_admin = '$id_admin' && Certificada !=''";
    $resultado_certificada = $mysqli->query($sql);
    function mostrarDatos ($resultado_certificada) {
    if ($resultado_certificada !=NULL) {
        return $resultado_certificada['Certificada'];}
    }
    $extraido1= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada1'] = mostrarDatos($extraido1);
    $extraido2= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada2'] = mostrarDatos($extraido2);
    $extraido3= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada3'] = mostrarDatos($extraido3);
    $extraido4= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada4'] = mostrarDatos($extraido4);
    $extraido5= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada5'] = mostrarDatos($extraido5);
    $extraido6= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada6'] = mostrarDatos($extraido6);
    $extraido7= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada7'] = mostrarDatos($extraido7);
    $extraido8= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada8'] = mostrarDatos($extraido8);
    $extraido9= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada9'] = mostrarDatos($extraido9);
    $extraido10= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada10'] = mostrarDatos($extraido10);
    $extraido11= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada11'] = mostrarDatos($extraido11);
    $extraido12= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada12'] = mostrarDatos($extraido12);
    $extraido13= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada13'] = mostrarDatos($extraido13);
    $extraido14= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada14'] = mostrarDatos($extraido14);
    $extraido15= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada15'] = mostrarDatos($extraido15);
    $extraido16= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada16'] = mostrarDatos($extraido16);
    $extraido17= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada17'] = mostrarDatos($extraido17);
    $extraido18= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada18'] = mostrarDatos($extraido18);
    $extraido19= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada19'] = mostrarDatos($extraido19);
    $extraido20= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada20'] = mostrarDatos($extraido20);
    $extraido21= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada21'] = mostrarDatos($extraido21);
    $extraido22= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada22'] = mostrarDatos($extraido22);
    $extraido23= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada23'] = mostrarDatos($extraido23);
    $extraido24= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada24'] = mostrarDatos($extraido24);
    $extraido25= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada25'] = mostrarDatos($extraido25);
    $extraido26= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada26'] = mostrarDatos($extraido26);
    $extraido27= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada27'] = mostrarDatos($extraido27);
    $extraido28= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada28'] = mostrarDatos($extraido28);
    $extraido29= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada29'] = mostrarDatos($extraido29);
    $extraido30= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada30'] = mostrarDatos($extraido30);
    $extraido31= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada31'] = mostrarDatos($extraido31);
    $extraido32= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada32'] = mostrarDatos($extraido32);
    $extraido33= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada33'] = mostrarDatos($extraido33);
    $extraido34= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada34'] = mostrarDatos($extraido34);
    $extraido35= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada35'] = mostrarDatos($extraido35);
    $extraido36= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada36'] = mostrarDatos($extraido36);
    $extraido37= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada37'] = mostrarDatos($extraido37);
    $extraido38= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada38'] = mostrarDatos($extraido38);
    $extraido39= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada39'] = mostrarDatos($extraido39);
    $extraido40= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada40'] = mostrarDatos($extraido40);
    $extraido41= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada41'] = mostrarDatos($extraido41);
    $extraido42= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada42'] = mostrarDatos($extraido42);
    $extraido43= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada43'] = mostrarDatos($extraido43);
    $extraido44= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada44'] = mostrarDatos($extraido44);
    $extraido45= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada45'] = mostrarDatos($extraido45);
    $extraido46= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada46'] = mostrarDatos($extraido46);
    $extraido47= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada47'] = mostrarDatos($extraido47);
    $extraido48= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada48'] = mostrarDatos($extraido48);
    $extraido49= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada49'] = mostrarDatos($extraido49);
    $extraido50= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada50'] = mostrarDatos($extraido50);
    $extraido51= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada51'] = mostrarDatos($extraido51);
    $extraido52= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada52'] = mostrarDatos($extraido52);
    $extraido53= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada53'] = mostrarDatos($extraido53);
    $extraido54= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada54'] = mostrarDatos($extraido54);
    $extraido55= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada55'] = mostrarDatos($extraido55);
    $extraido56= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada56'] = mostrarDatos($extraido56);
    $extraido57= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada57'] = mostrarDatos($extraido57);
    $extraido58= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada58'] = mostrarDatos($extraido58);
    $extraido59= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada59'] = mostrarDatos($extraido59);
    $extraido60= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada60'] = mostrarDatos($extraido60);
    $extraido61= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada61'] = mostrarDatos($extraido61);
    $extraido62= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada62'] = mostrarDatos($extraido62);
    $extraido63= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada63'] = mostrarDatos($extraido63);
    $extraido64= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada64'] = mostrarDatos($extraido64);
    $extraido65= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada65'] = mostrarDatos($extraido65);
    $extraido66= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada66'] = mostrarDatos($extraido66);
    $extraido67= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada67'] = mostrarDatos($extraido67);
    $extraido68= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada68'] = mostrarDatos($extraido68);
    $extraido69= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada69'] = mostrarDatos($extraido69);
    $extraido70= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada70'] = mostrarDatos($extraido70);
    $extraido71= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada71'] = mostrarDatos($extraido71);
    $extraido72= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada72'] = mostrarDatos($extraido72);
    $extraido73= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada73'] = mostrarDatos($extraido73);
    $extraido74= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada74'] = mostrarDatos($extraido74);
    $extraido75= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada75'] = mostrarDatos($extraido75);
    $extraido76= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada76'] = mostrarDatos($extraido76);
    $extraido77= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada77'] = mostrarDatos($extraido77);
    $extraido78= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada78'] = mostrarDatos($extraido78);
    $extraido79= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada79'] = mostrarDatos($extraido79);
    $extraido80= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada80'] = mostrarDatos($extraido80);
    
    $Certificada1 = $_SESSION['Certificada1']; $Certificada2 = $_SESSION['Certificada2']; $Certificada3 = $_SESSION['Certificada3']; $Certificada4 = $_SESSION['Certificada4']; $Certificada5 = $_SESSION['Certificada5']; $Certificada6 = $_SESSION['Certificada6']; $Certificada7 = $_SESSION['Certificada7']; $Certificada8 = $_SESSION['Certificada8']; $Certificada9 = $_SESSION['Certificada9']; $Certificada10 = $_SESSION['Certificada10'];
    $Certificada11 = $_SESSION['Certificada11']; $Certificada12 = $_SESSION['Certificada12']; $Certificada13 = $_SESSION['Certificada13']; $Certificada14 = $_SESSION['Certificada14']; $Certificada15 = $_SESSION['Certificada15']; $Certificada16 = $_SESSION['Certificada16']; $Certificada17 = $_SESSION['Certificada17']; $Certificada18 = $_SESSION['Certificada18']; $Certificada19 = $_SESSION['Certificada19']; $Certificada20 = $_SESSION['Certificada20'];
    $Certificada21 = $_SESSION['Certificada21']; $Certificada22 = $_SESSION['Certificada22']; $Certificada23 = $_SESSION['Certificada23']; $Certificada24 = $_SESSION['Certificada24']; $Certificada25 = $_SESSION['Certificada25']; $Certificada26 = $_SESSION['Certificada26']; $Certificada27 = $_SESSION['Certificada27']; $Certificada28 = $_SESSION['Certificada28']; $Certificada29 = $_SESSION['Certificada29']; $Certificada30 = $_SESSION['Certificada30'];
    $Certificada31 = $_SESSION['Certificada31']; $Certificada32 = $_SESSION['Certificada32']; $Certificada33 = $_SESSION['Certificada33']; $Certificada34 = $_SESSION['Certificada34']; $Certificada35 = $_SESSION['Certificada35']; $Certificada36 = $_SESSION['Certificada36']; $Certificada37 = $_SESSION['Certificada37']; $Certificada38 = $_SESSION['Certificada38']; $Certificada39 = $_SESSION['Certificada39']; $Certificada40 = $_SESSION['Certificada40'];
    $Certificada41 = $_SESSION['Certificada41']; $Certificada42 = $_SESSION['Certificada42']; $Certificada43 = $_SESSION['Certificada43']; $Certificada44 = $_SESSION['Certificada44']; $Certificada45 = $_SESSION['Certificada45']; $Certificada46 = $_SESSION['Certificada46']; $Certificada47 = $_SESSION['Certificada47']; $Certificada48 = $_SESSION['Certificada48']; $Certificada49 = $_SESSION['Certificada49']; $Certificada50 = $_SESSION['Certificada50'];
    $Certificada51 = $_SESSION['Certificada51']; $Certificada52 = $_SESSION['Certificada52']; $Certificada53 = $_SESSION['Certificada53']; $Certificada54 = $_SESSION['Certificada54']; $Certificada55 = $_SESSION['Certificada55']; $Certificada56 = $_SESSION['Certificada56']; $Certificada57 = $_SESSION['Certificada57']; $Certificada58 = $_SESSION['Certificada58']; $Certificada59 = $_SESSION['Certificada59']; $Certificada60 = $_SESSION['Certificada60'];
    $Certificada61 = $_SESSION['Certificada61']; $Certificada62 = $_SESSION['Certificada62']; $Certificada63 = $_SESSION['Certificada63']; $Certificada64 = $_SESSION['Certificada64']; $Certificada65 = $_SESSION['Certificada65']; $Certificada66 = $_SESSION['Certificada66']; $Certificada67 = $_SESSION['Certificada67']; $Certificada68 = $_SESSION['Certificada68']; $Certificada69 = $_SESSION['Certificada69']; $Certificada70 = $_SESSION['Certificada70'];
    $Certificada71 = $_SESSION['Certificada71']; $Certificada72 = $_SESSION['Certificada72']; $Certificada73 = $_SESSION['Certificada73']; $Certificada74 = $_SESSION['Certificada74']; $Certificada75 = $_SESSION['Certificada75']; $Certificada76 = $_SESSION['Certificada76']; $Certificada77 = $_SESSION['Certificada77']; $Certificada78 = $_SESSION['Certificada78']; $Certificada79 = $_SESSION['Certificada79']; $Certificada80 = $_SESSION['Certificada80'];
    
    $sql = "SELECT * FROM controles WHERE id_admin = '$id_admin' && Sede !=''";
    $resultado_sede = $mysqli->query($sql);
    function mostrarDatos2 ($resultado_sede) {
    if ($resultado_sede !=NULL) {
        return $resultado_sede['Sede'];}
    }
    $extraido1= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede1'] = mostrarDatos2($extraido1);
    $extraido2= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede2'] = mostrarDatos2($extraido2);
    $extraido3= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede3'] = mostrarDatos2($extraido3);
    $extraido4= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede4'] = mostrarDatos2($extraido4);
    $extraido5= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede5'] = mostrarDatos2($extraido5);
    $extraido6= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede6'] = mostrarDatos2($extraido6);
    $extraido7= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede7'] = mostrarDatos2($extraido7);
    $extraido8= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede8'] = mostrarDatos2($extraido8);
    $extraido9= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede9'] = mostrarDatos2($extraido9);
    $extraido10= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede10'] = mostrarDatos2($extraido10);
    $extraido11= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede11'] = mostrarDatos2($extraido11);
    $extraido12= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede12'] = mostrarDatos2($extraido12);
    $extraido13= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede13'] = mostrarDatos2($extraido13);
    $extraido14= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede14'] = mostrarDatos2($extraido14);
    $extraido15= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede15'] = mostrarDatos2($extraido15);
    $extraido16= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede16'] = mostrarDatos2($extraido16);
    $extraido17= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede17'] = mostrarDatos2($extraido17);
    $extraido18= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede18'] = mostrarDatos2($extraido18);
    $extraido19= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede19'] = mostrarDatos2($extraido19);
    $extraido20= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede20'] = mostrarDatos2($extraido20);
    $extraido21= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede21'] = mostrarDatos2($extraido21);
    $extraido22= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede22'] = mostrarDatos2($extraido22);
    $extraido23= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede23'] = mostrarDatos2($extraido23);
    $extraido24= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede24'] = mostrarDatos2($extraido24);
    $extraido25= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede25'] = mostrarDatos2($extraido25);
    $extraido26= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede26'] = mostrarDatos2($extraido26);
    $extraido27= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede27'] = mostrarDatos2($extraido27);
    $extraido28= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede28'] = mostrarDatos2($extraido28);
    $extraido29= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede29'] = mostrarDatos2($extraido29);
    $extraido30= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede30'] = mostrarDatos2($extraido30);
    $extraido31= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede31'] = mostrarDatos2($extraido31);
    $extraido32= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede32'] = mostrarDatos2($extraido32);
    $extraido33= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede33'] = mostrarDatos2($extraido33);
    $extraido34= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede34'] = mostrarDatos2($extraido34);
    $extraido35= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede35'] = mostrarDatos2($extraido35);
    $extraido36= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede36'] = mostrarDatos2($extraido36);
    $extraido37= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede37'] = mostrarDatos2($extraido37);
    $extraido38= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede38'] = mostrarDatos2($extraido38);
    $extraido39= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede39'] = mostrarDatos2($extraido39);
    $extraido40= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede40'] = mostrarDatos2($extraido40);
    $extraido41= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede41'] = mostrarDatos2($extraido41);
    $extraido42= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede42'] = mostrarDatos2($extraido42);
    $extraido43= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede43'] = mostrarDatos2($extraido43);
    $extraido44= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede44'] = mostrarDatos2($extraido44);
    $extraido45= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede45'] = mostrarDatos2($extraido45);
    $extraido46= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede46'] = mostrarDatos2($extraido46);
    $extraido47= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede47'] = mostrarDatos2($extraido47);
    $extraido48= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede48'] = mostrarDatos2($extraido48);
    $extraido49= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede49'] = mostrarDatos2($extraido49);
    $extraido50= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede50'] = mostrarDatos2($extraido50);
    $extraido51= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede51'] = mostrarDatos2($extraido51);
    $extraido52= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede52'] = mostrarDatos2($extraido52);
    $extraido53= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede53'] = mostrarDatos2($extraido53);
    $extraido54= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede54'] = mostrarDatos2($extraido54);
    $extraido55= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede55'] = mostrarDatos2($extraido55);
    $extraido56= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede56'] = mostrarDatos2($extraido56);
    $extraido57= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede57'] = mostrarDatos2($extraido57);
    $extraido58= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede58'] = mostrarDatos2($extraido58);
    $extraido59= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede59'] = mostrarDatos2($extraido59);
    $extraido60= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede60'] = mostrarDatos2($extraido60);
    $extraido61= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede61'] = mostrarDatos2($extraido61);
    $extraido62= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede62'] = mostrarDatos2($extraido62);
    $extraido63= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede63'] = mostrarDatos2($extraido63);
    $extraido64= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede64'] = mostrarDatos2($extraido64);
    $extraido65= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede65'] = mostrarDatos2($extraido65);
    $extraido66= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede66'] = mostrarDatos2($extraido66);
    $extraido67= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede67'] = mostrarDatos2($extraido67);
    $extraido68= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede68'] = mostrarDatos2($extraido68);
    $extraido69= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede69'] = mostrarDatos2($extraido69);
    $extraido70= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede70'] = mostrarDatos2($extraido70);
    $extraido71= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede71'] = mostrarDatos2($extraido71);
    $extraido72= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede72'] = mostrarDatos2($extraido72);
    $extraido73= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede73'] = mostrarDatos2($extraido73);
    $extraido74= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede74'] = mostrarDatos2($extraido74);
    $extraido75= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede75'] = mostrarDatos2($extraido75);
    $extraido76= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede76'] = mostrarDatos2($extraido76);
    $extraido77= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede77'] = mostrarDatos2($extraido77);
    $extraido78= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede78'] = mostrarDatos2($extraido78);
    $extraido79= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede79'] = mostrarDatos2($extraido79);
    $extraido80= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede80'] = mostrarDatos2($extraido80);
    
    
    $sede1 = $_SESSION['sede1']; $sede2 = $_SESSION['sede2']; $sede3 = $_SESSION['sede3']; $sede4 = $_SESSION['sede4']; $sede5 = $_SESSION['sede5']; $sede6 = $_SESSION['sede6']; $sede7 = $_SESSION['sede7']; $sede8 = $_SESSION['sede8']; $sede9 = $_SESSION['sede9']; $sede9 = $_SESSION['sede9']; $sede10 = $_SESSION['sede10'];
    $sede11 = $_SESSION['sede11']; $sede12 = $_SESSION['sede12']; $sede13 = $_SESSION['sede13']; $sede14 = $_SESSION['sede14']; $sede15 = $_SESSION['sede15']; $sede16 = $_SESSION['sede16']; $sede17 = $_SESSION['sede17']; $sede18 = $_SESSION['sede18']; $sede19 = $_SESSION['sede19']; $sede20 = $_SESSION['sede20'];
    $sede21 = $_SESSION['sede21']; $sede22 = $_SESSION['sede22']; $sede23 = $_SESSION['sede23']; $sede24 = $_SESSION['sede24']; $sede25 = $_SESSION['sede25']; $sede26 = $_SESSION['sede26']; $sede27 = $_SESSION['sede27']; $sede28 = $_SESSION['sede28']; $sede29 = $_SESSION['sede29']; $sede30 = $_SESSION['sede30'];
    $sede31 = $_SESSION['sede31']; $sede32 = $_SESSION['sede32']; $sede33 = $_SESSION['sede33']; $sede34 = $_SESSION['sede34']; $sede35 = $_SESSION['sede35']; $sede36 = $_SESSION['sede36']; $sede37 = $_SESSION['sede37']; $sede38 = $_SESSION['sede38']; $sede39 = $_SESSION['sede39']; $sede40 = $_SESSION['sede40'];
    $sede41 = $_SESSION['sede41']; $sede42 = $_SESSION['sede42']; $sede43 = $_SESSION['sede43']; $sede44 = $_SESSION['sede44']; $sede45 = $_SESSION['sede45']; $sede46 = $_SESSION['sede46']; $sede47 = $_SESSION['sede47']; $sede48 = $_SESSION['sede48']; $sede49 = $_SESSION['sede49']; $sede50 = $_SESSION['sede50'];
    $sede51 = $_SESSION['sede51']; $sede52 = $_SESSION['sede52']; $sede53 = $_SESSION['sede53']; $sede54 = $_SESSION['sede54']; $sede55 = $_SESSION['sede55']; $sede56 = $_SESSION['sede56']; $sede57 = $_SESSION['sede57']; $sede58 = $_SESSION['sede58']; $sede59 = $_SESSION['sede59']; $sede60 = $_SESSION['sede60'];
    $sede61 = $_SESSION['sede61']; $sede62 = $_SESSION['sede62']; $sede63 = $_SESSION['sede63']; $sede64 = $_SESSION['sede64']; $sede65 = $_SESSION['sede65']; $sede66 = $_SESSION['sede66']; $sede67 = $_SESSION['sede67']; $sede68 = $_SESSION['sede68']; $sede69 = $_SESSION['sede69']; $sede70 = $_SESSION['sede70'];
    $sede71 = $_SESSION['sede71']; $sede72 = $_SESSION['sede72']; $sede73 = $_SESSION['sede73']; $sede74 = $_SESSION['sede74']; $sede75 = $_SESSION['sede75']; $sede76 = $_SESSION['sede76']; $sede77 = $_SESSION['sede77']; $sede78 = $_SESSION['sede78']; $sede79 = $_SESSION['sede79']; $sede80 = $_SESSION['sede80'];
    
    $sql = "SELECT * FROM controles WHERE id_admin = '$id_admin' && Area !=''";
    $resultado_Area = $mysqli->query($sql);
    function mostrarDatos3 ($resultado_Area) {
    if ($resultado_Area !=NULL) {
        return $resultado_Area['Area'];}
    }
    $extraido1c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area1'] = mostrarDatos3($extraido1c);
    $extraido2c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area2'] = mostrarDatos3($extraido2c);
    $extraido3c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area3'] = mostrarDatos3($extraido3c);
    $extraido4c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area4'] = mostrarDatos3($extraido4c);
    $extraido5c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area5'] = mostrarDatos3($extraido5c);
    $extraido6c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area6'] = mostrarDatos3($extraido6c);
    $extraido7c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area7'] = mostrarDatos3($extraido7c);
    $extraido8c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area8'] = mostrarDatos3($extraido8c);
    $extraido9c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area9'] = mostrarDatos3($extraido9c);
    $extraido10c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area10'] = mostrarDatos3($extraido10c);
    $extraido11c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area11'] = mostrarDatos3($extraido11c);
    $extraido12c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area12'] = mostrarDatos3($extraido12c);
    $extraido13c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area13'] = mostrarDatos3($extraido13c);
    $extraido14c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area14'] = mostrarDatos3($extraido14c);
    $extraido15c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area15'] = mostrarDatos3($extraido15c);
    $extraido16c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area16'] = mostrarDatos3($extraido16c);
    $extraido17c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area17'] = mostrarDatos3($extraido17c);
    $extraido18c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area18'] = mostrarDatos3($extraido18c);
    $extraido19c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area19'] = mostrarDatos3($extraido19c);
    $extraido20c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area20'] = mostrarDatos3($extraido20c);
    $extraido21c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area21'] = mostrarDatos3($extraido21c);
    $extraido22c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area22'] = mostrarDatos3($extraido22c);
    $extraido23c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area23'] = mostrarDatos3($extraido23c);
    $extraido24c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area24'] = mostrarDatos3($extraido24c);
    $extraido25c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area25'] = mostrarDatos3($extraido25c);
    $extraido26c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area26'] = mostrarDatos3($extraido26c);
    $extraido27c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area27'] = mostrarDatos3($extraido27c);
    $extraido28c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area28'] = mostrarDatos3($extraido28c);
    $extraido29c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area29'] = mostrarDatos3($extraido29c);
    $extraido30c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area30'] = mostrarDatos3($extraido30c);
    $extraido31c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area31'] = mostrarDatos3($extraido31c);
    $extraido32c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area32'] = mostrarDatos3($extraido32c);
    $extraido33c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area33'] = mostrarDatos3($extraido33c);
    $extraido34c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area34'] = mostrarDatos3($extraido34c);
    $extraido35c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area35'] = mostrarDatos3($extraido35c);
    $extraido36c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area36'] = mostrarDatos3($extraido36c);
    $extraido37c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area37'] = mostrarDatos3($extraido37c);
    $extraido38c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area38'] = mostrarDatos3($extraido38c);
    $extraido39c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area39'] = mostrarDatos3($extraido39c);
    $extraido40c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area40'] = mostrarDatos3($extraido40c);
    $extraido41c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area41'] = mostrarDatos3($extraido41c);
    $extraido42c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area42'] = mostrarDatos3($extraido42c);
    $extraido43c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area43'] = mostrarDatos3($extraido43c);
    $extraido44c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area44'] = mostrarDatos3($extraido44c);
    $extraido45c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area45'] = mostrarDatos3($extraido45c);
    $extraido46c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area46'] = mostrarDatos3($extraido46c);
    $extraido47c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area47'] = mostrarDatos3($extraido47c);
    $extraido48c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area48'] = mostrarDatos3($extraido48c);
    $extraido49c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area49'] = mostrarDatos3($extraido49c);
    $extraido50c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area50'] = mostrarDatos3($extraido50c);
    $extraido51c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area51'] = mostrarDatos3($extraido51c);
    $extraido52c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area52'] = mostrarDatos3($extraido52c);
    $extraido53c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area53'] = mostrarDatos3($extraido53c);
    $extraido54c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area54'] = mostrarDatos3($extraido54c);
    $extraido55c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area55'] = mostrarDatos3($extraido55c);
    $extraido56c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area56'] = mostrarDatos3($extraido56c);
    $extraido57c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area57'] = mostrarDatos3($extraido57c);
    $extraido58c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area58'] = mostrarDatos3($extraido58c);
    $extraido59c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area59'] = mostrarDatos3($extraido59c);
    $extraido60c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area60'] = mostrarDatos3($extraido60c);
    $extraido61c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area61'] = mostrarDatos3($extraido61c);
    $extraido62c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area62'] = mostrarDatos3($extraido62c);
    $extraido63c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area63'] = mostrarDatos3($extraido63c);
    $extraido64c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area64'] = mostrarDatos3($extraido64c);
    $extraido65c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area65'] = mostrarDatos3($extraido65c);
    $extraido66c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area66'] = mostrarDatos3($extraido66c);
    $extraido67c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area67'] = mostrarDatos3($extraido67c);
    $extraido68c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area68'] = mostrarDatos3($extraido68c);
    $extraido69c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area69'] = mostrarDatos3($extraido69c);
    $extraido70c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area70'] = mostrarDatos3($extraido70c);
    $extraido71c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area71'] = mostrarDatos3($extraido71c);
    $extraido72c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area72'] = mostrarDatos3($extraido72c);
    $extraido73c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area73'] = mostrarDatos3($extraido73c);
    $extraido74c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area74'] = mostrarDatos3($extraido74c);
    $extraido75c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area75'] = mostrarDatos3($extraido75c);
    $extraido76c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area76'] = mostrarDatos3($extraido76c);
    $extraido77c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area77'] = mostrarDatos3($extraido77c);
    $extraido78c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area78'] = mostrarDatos3($extraido78c);
    $extraido79c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area79'] = mostrarDatos3($extraido79c);
    $extraido80c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area80'] = mostrarDatos3($extraido80c);
    
    $Area1 = $_SESSION['Area1']; $Area2 = $_SESSION['Area2']; $Area3 = $_SESSION['Area3']; $Area4 = $_SESSION['Area4']; $Area5 = $_SESSION['Area5']; $Area6 = $_SESSION['Area6']; $Area7 = $_SESSION['Area7']; $Area8 = $_SESSION['Area8']; $Area9 = $_SESSION['Area9']; $Area10 = $_SESSION['Area10'];
    $Area11 = $_SESSION['Area11']; $Area12 = $_SESSION['Area12']; $Area13 = $_SESSION['Area13']; $Area14 = $_SESSION['Area14']; $Area15 = $_SESSION['Area15']; $Area16 = $_SESSION['Area16']; $Area17 = $_SESSION['Area17']; $Area18 = $_SESSION['Area18']; $Area19 = $_SESSION['Area19']; $Area20 = $_SESSION['Area20'];
    $Area21 = $_SESSION['Area21']; $Area22 = $_SESSION['Area22']; $Area23 = $_SESSION['Area23']; $Area24 = $_SESSION['Area24']; $Area25 = $_SESSION['Area25']; $Area26 = $_SESSION['Area26']; $Area27 = $_SESSION['Area27']; $Area28 = $_SESSION['Area28']; $Area29 = $_SESSION['Area29']; $Area30 = $_SESSION['Area30'];
    $Area31 = $_SESSION['Area31']; $Area32 = $_SESSION['Area32']; $Area33 = $_SESSION['Area33']; $Area34 = $_SESSION['Area34']; $Area35 = $_SESSION['Area35']; $Area36 = $_SESSION['Area36']; $Area37 = $_SESSION['Area37']; $Area38 = $_SESSION['Area38']; $Area39 = $_SESSION['Area39']; $Area40 = $_SESSION['Area40'];
    $Area41 = $_SESSION['Area41']; $Area42 = $_SESSION['Area42']; $Area43 = $_SESSION['Area43']; $Area44 = $_SESSION['Area44']; $Area45 = $_SESSION['Area45']; $Area46 = $_SESSION['Area46']; $Area47 = $_SESSION['Area47']; $Area48 = $_SESSION['Area48']; $Area49 = $_SESSION['Area49']; $Area50 = $_SESSION['Area50'];
    $Area51 = $_SESSION['Area51']; $Area52 = $_SESSION['Area52']; $Area53 = $_SESSION['Area53']; $Area54 = $_SESSION['Area54']; $Area55 = $_SESSION['Area55']; $Area56 = $_SESSION['Area56']; $Area57 = $_SESSION['Area57']; $Area58 = $_SESSION['Area58']; $Area59 = $_SESSION['Area59']; $Area60 = $_SESSION['Area60'];
    $Area61 = $_SESSION['Area61']; $Area62 = $_SESSION['Area62']; $Area63 = $_SESSION['Area63']; $Area64 = $_SESSION['Area64']; $Area65 = $_SESSION['Area65']; $Area66 = $_SESSION['Area66']; $Area67 = $_SESSION['Area67']; $Area68 = $_SESSION['Area68']; $Area69 = $_SESSION['Area69']; $Area70 = $_SESSION['Area70'];
    $Area71 = $_SESSION['Area71']; $Area72 = $_SESSION['Area72']; $Area73 = $_SESSION['Area73']; $Area74 = $_SESSION['Area74']; $Area75 = $_SESSION['Area75']; $Area76 = $_SESSION['Area76']; $Area77 = $_SESSION['Area77']; $Area78 = $_SESSION['Area78']; $Area79 = $_SESSION['Area79']; $Area80 = $_SESSION['Area80'];
    
    include_once 'app/repositorioadmin.inc.php'; 
    include_once 'app/repositorioadmin2.inc.php'; 
    
        //Género
        $Masculino = Consolidados2::Masculino(conexion::obtener_conexion()); 
        $Femenino = Consolidados2::Femenino(conexion::obtener_conexion()); 
        $Genero = $Masculino + $Femenino;
        $Masculino_porcentaje = round((($Masculino*100)/$Genero), 1, PHP_ROUND_HALF_UP);
        $Femenino_porcentaje = round((($Femenino*100)/$Genero), 1, PHP_ROUND_HALF_UP);
        if ($Masculino == 0) {$Masculino_excel = 0;} else {$Masculino_excel = round(($Masculino/$Genero), 3, PHP_ROUND_HALF_UP) ;}
        if ($Femenino == 0) {$Femenino_excel = 0;} else {$Femenino_excel = round(($Femenino/$Genero), 3, PHP_ROUND_HALF_UP) ;}
        //Edad
        $Edad1 = Consolidados2::edad1(conexion::obtener_conexion()); 
        $Edad2 = Consolidados2::edad2(conexion::obtener_conexion());
        $Edad3 = Consolidados2::edad3(conexion::obtener_conexion()); 
        $Edad4 = Consolidados2::edad4(conexion::obtener_conexion());
        $Edad = $Edad1 +$Edad2 + $Edad3 + $Edad4;
        $Edad1_porcentaje = round((($Edad1*100)/$Edad), 1, PHP_ROUND_HALF_UP);
        $Edad2_porcentaje = round((($Edad2*100)/$Edad), 1, PHP_ROUND_HALF_UP);
        $Edad3_porcentaje = round((($Edad3*100)/$Edad), 1, PHP_ROUND_HALF_UP);
        $Edad4_porcentaje = round((($Edad4*100)/$Edad), 1, PHP_ROUND_HALF_UP);
        //Civil
        $Soltero = Consolidados2::Soltero(conexion::obtener_conexion()); 
        $Casado = Consolidados2::Casado(conexion::obtener_conexion());
        $UnionL = Consolidados2::UnionL(conexion::obtener_conexion());
        $Separado = Consolidados2::Separado(conexion::obtener_conexion());
        $Divorciado = Consolidados2::Divorciado(conexion::obtener_conexion());
        $Viudo = Consolidados2::Viudo(conexion::obtener_conexion());
        $Civil = $Soltero + $Casado + $UnionL + $Separado + $Divorciado + $Viudo; 
        $Soltero_porcentaje = round((($Soltero*100)/$Civil), 1, PHP_ROUND_HALF_UP);
        $Casado_porcentaje = round((($Casado*100)/$Civil), 1, PHP_ROUND_HALF_UP);
        $UnionL_porcentaje = round((($UnionL*100)/$Civil), 1, PHP_ROUND_HALF_UP);
        $Separado_porcentaje = round((($Separado*100)/$Civil), 1, PHP_ROUND_HALF_UP);
        $Divorciado_porcentaje = round((($Divorciado*100)/$Civil), 1, PHP_ROUND_HALF_UP);
        $Viudo_porcentaje = round((($Viudo*100)/$Civil), 1, PHP_ROUND_HALF_UP);
        //Estrato
        $Uno = Consolidados2::Uno(conexion::obtener_conexion()); 
        $Dos = Consolidados2::Dos(conexion::obtener_conexion()); 
        $Tres = Consolidados2::Tres(conexion::obtener_conexion()); 
        $Cuatro = Consolidados2::Cuatro(conexion::obtener_conexion()); 
        $Cinco = Consolidados2::Cinco(conexion::obtener_conexion()); 
        $Seis = Consolidados2::Seis(conexion::obtener_conexion());
        $Finca = Consolidados2::Finca(conexion::obtener_conexion());
        $No_sabe = Consolidados2::No_sabe(conexion::obtener_conexion());
        $Estrato = $Uno + $Dos + $Tres + $Cuatro + $Cinco + $Seis + $Finca + $No_sabe;
        $Uno_porcentaje = round((($Uno*100)/$Estrato), 1, PHP_ROUND_HALF_UP);
        $Dos_porcentaje = round((($Dos*100)/$Estrato), 1, PHP_ROUND_HALF_UP);
        $Tres_porcentaje = round((($Tres*100)/$Estrato), 1, PHP_ROUND_HALF_UP);
        $Cuatro_porcentaje = round((($Cuatro*100)/$Estrato), 1, PHP_ROUND_HALF_UP);
        $Cinco_porcentaje = round((($Cinco*100)/$Estrato), 1, PHP_ROUND_HALF_UP);
        $Seis_porcentaje = round((($Seis*100)/$Estrato), 1, PHP_ROUND_HALF_UP);
        $Finca_porcentaje = round((($Finca*100)/$Estrato), 1, PHP_ROUND_HALF_UP);
        $No_sabe_porcentaje = round((($No_sabe*100)/$Estrato), 1, PHP_ROUND_HALF_UP);
        //Grado de escolaridad
        $PGC = Consolidados2::PGC(conexion::obtener_conexion());
        $PGI = Consolidados2::PGI(conexion::obtener_conexion());
        $PC = Consolidados2::PC(conexion::obtener_conexion());
        $PI = Consolidados2::PI(conexion::obtener_conexion());
        $CMP = Consolidados2::CMP(conexion::obtener_conexion());
        $TC = Consolidados2::TC(conexion::obtener_conexion());
        $TI = Consolidados2::TI(conexion::obtener_conexion());
        $BC = Consolidados2::BC(conexion::obtener_conexion());
        $BI = Consolidados2::BI(conexion::obtener_conexion());
        $PRC = Consolidados2::PRC(conexion::obtener_conexion());
        $PRI = Consolidados2::PRI(conexion::obtener_conexion());
        $N = Consolidados2::N(conexion::obtener_conexion()); 
        $Escolaridad = $PGC + $PGI + $PC + $PI + $CMP + $TC + $TI + $BC + $BI + $PRC + $PRI + $N; 
        $PGC_porcentaje = round((($PGC*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        $PGI_porcentaje = round((($PGI*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        $PC_porcentaje = round((($PC*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        $PI_porcentaje = round((($PI*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        $CMP_porcentaje = round((($CMP*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        $TC_porcentaje = round((($TC*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        $TI_porcentaje = round((($TI*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        $BC_porcentaje = round((($BC*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        $BI_porcentaje = round((($BI*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        $PRC_porcentaje = round((($PRC*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        $PRI_porcentaje = round((($PRI*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        $N_porcentaje = round((($N*100)/$Escolaridad), 1, PHP_ROUND_HALF_UP);
        //Vivienda
        $Propia = Consolidados2::Propia(conexion::obtener_conexion()); 
        $Arriendo = Consolidados2::Arriendo(conexion::obtener_conexion()); 
        $Familiar = Consolidados2::Familiar(conexion::obtener_conexion()); 
        $Vivienda= $Propia + $Arriendo + $Familiar;
        $Propia_porcentaje = round((($Propia*100)/$Vivienda), 1, PHP_ROUND_HALF_UP);
        $Arriendo_porcentaje = round((($Arriendo*100)/$Vivienda), 1, PHP_ROUND_HALF_UP);
        $Familiar_porcentaje = round((($Familiar*100)/$Vivienda), 1, PHP_ROUND_HALF_UP);
        //Dependencia
        $Dep0 = Consolidados2::Dep0(conexion::obtener_conexion()); 
        $Dep1 = Consolidados2::Dep1(conexion::obtener_conexion()); 
        $Dep2 = Consolidados2::Dep2(conexion::obtener_conexion()); 
        $Dep3 = Consolidados2::Dep3(conexion::obtener_conexion()); 
        $Dep4 = Consolidados2::Dep4(conexion::obtener_conexion()); 
        $Depmas4 = Consolidados2::Depmas4(conexion::obtener_conexion());
        $Dep = $Dep0 + $Dep1 + $Dep2 + $Dep3 + $Dep4 + $Depmas4;
        $Dep0_porcentaje = round((($Dep0*100)/$Dep), 1, PHP_ROUND_HALF_UP);
        $Dep1_porcentaje = round((($Dep1*100)/$Dep), 1, PHP_ROUND_HALF_UP);
        $Dep2_porcentaje = round((($Dep2*100)/$Dep), 1, PHP_ROUND_HALF_UP);
        $Dep3_porcentaje = round((($Dep3*100)/$Dep), 1, PHP_ROUND_HALF_UP);
        $Dep4_porcentaje = round((($Dep4*100)/$Dep), 1, PHP_ROUND_HALF_UP);
        $Depmas4_porcentaje = round((($Depmas4*100)/$Dep), 1, PHP_ROUND_HALF_UP);
        //Antigüedad
        $Añose0 = Consolidados2::Añose0(conexion::obtener_conexion()); 
        $Añose1 = Consolidados2::Añose1(conexion::obtener_conexion()); 
        $Añose2 = Consolidados2::Añose2(conexion::obtener_conexion()); 
        $Añose3 = Consolidados2::Añose3(conexion::obtener_conexion()); 
        $Añose4 = Consolidados2::Añose4(conexion::obtener_conexion()); 
        $Añose = $Añose0 + $Añose1 + $Añose2 + $Añose3 + $Añose4;
        $Añose0_porcentaje = round((($Añose0*100)/$Añose), 1, PHP_ROUND_HALF_UP);
        $Añose1_porcentaje = round((($Añose1*100)/$Añose), 1, PHP_ROUND_HALF_UP);
        $Añose2_porcentaje = round((($Añose2*100)/$Añose), 1, PHP_ROUND_HALF_UP);
        $Añose3_porcentaje = round((($Añose3*100)/$Añose), 1, PHP_ROUND_HALF_UP);
        $Añose4_porcentaje = round((($Añose4*100)/$Añose), 1, PHP_ROUND_HALF_UP);
         //Nivel
        $Nivel1 = Consolidados2::Nivel1(conexion::obtener_conexion()); 
        $Nivel2 = Consolidados2::Nivel2(conexion::obtener_conexion()); 
        $Nivel3 = Consolidados2::Nivel3(conexion::obtener_conexion()); 
        $Nivel4 = Consolidados2::Nivel4(conexion::obtener_conexion());
        $Nivel =  $Nivel1 + $Nivel2 + $Nivel3 + $Nivel4;
        $Nivel1_porcentaje = round((($Nivel1*100)/$Nivel), 1, PHP_ROUND_HALF_UP);
        $Nivel2_porcentaje = round((($Nivel2*100)/$Nivel), 1, PHP_ROUND_HALF_UP);
        $Nivel3_porcentaje = round((($Nivel3*100)/$Nivel), 1, PHP_ROUND_HALF_UP);
        $Nivel4_porcentaje = round((($Nivel4*100)/$Nivel), 1, PHP_ROUND_HALF_UP);
        //Tipo de contrato
        $menosde1 = Consolidados2::Menosde1(conexion::obtener_conexion());
        $masde1 = Consolidados2::masde1(conexion::obtener_conexion());
        $indefinido = Consolidados2::indefinido(conexion::obtener_conexion());
        $cooperado = Consolidados2::cooperado(conexion::obtener_conexion());
        $servicios = Consolidados2::servicios(conexion::obtener_conexion());
        $no_registra = Consolidados2::no_registra(conexion::obtener_conexion());
        $Tipo = $menosde1 + $masde1 + $indefinido + $cooperado + $servicios + $no_registra;
        $menosde1_porcentaje = round((($menosde1*100)/$Tipo), 1, PHP_ROUND_HALF_UP);
        $masde1_porcentaje = round((($masde1*100)/$Tipo), 1, PHP_ROUND_HALF_UP);
        $indefinido_porcentaje = round((($indefinido*100)/$Tipo), 1, PHP_ROUND_HALF_UP);
        $cooperado_porcentaje = round((($cooperado*100)/$Tipo), 1, PHP_ROUND_HALF_UP);
        $servicios_porcentaje = round((($servicios*100)/$Tipo), 1, PHP_ROUND_HALF_UP);
        $no_registra_porcentaje = round((($no_registra*100)/$Tipo), 1, PHP_ROUND_HALF_UP);
        //Tipo de salario
        $fijo = Consolidados2::fijo(conexion::obtener_conexion());
        $partes = Consolidados2::partes(conexion::obtener_conexion());
        $variables = Consolidados2::variable(conexion::obtener_conexion());
        $cooperado2 = Consolidados2::cooperado2(conexion::obtener_conexion());
        $Salario = $fijo + $partes + $variables + $cooperado2;
        $fijo_porcentaje = round((($fijo*100)/$Salario), 1, PHP_ROUND_HALF_UP);
        $partes_porcentaje = round((($partes*100)/$Salario), 1, PHP_ROUND_HALF_UP);
        $variables_porcentaje = round((($variables*100)/$Salario), 1, PHP_ROUND_HALF_UP);
        $cooperado2_porcentaje = round((($cooperado2*100)/$Salario), 1, PHP_ROUND_HALF_UP);
        //Horas de salario
        $horas1 = Consolidados2::horas1(conexion::obtener_conexion());
        $horas2 = Consolidados2::horas2(conexion::obtener_conexion());
        $horas3 = Consolidados2::horas3(conexion::obtener_conexion());
        $horas4 = Consolidados2::horas4(conexion::obtener_conexion());
        $horas5 = Consolidados2::horas5(conexion::obtener_conexion());
        $horas = $horas1+$horas2+$horas3+$horas4+$horas5;
        $horas1_porcentaje = round((($horas1*100)/$horas), 1, PHP_ROUND_HALF_UP);
        $horas2_porcentaje = round((($horas2*100)/$horas), 1, PHP_ROUND_HALF_UP);
        $horas3_porcentaje = round((($horas3*100)/$horas), 1, PHP_ROUND_HALF_UP);
        $horas4_porcentaje = round((($horas4*100)/$horas), 1, PHP_ROUND_HALF_UP);
        $horas5_porcentaje = round((($horas5*100)/$horas), 1, PHP_ROUND_HALF_UP);
?>
<style>
  @font-face {
        font-family: Roman;
        src: url(../fonts/times.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Romanbd;
        src: url(../fonts/timesbd.ttf);
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
    body {
        color: #797979;
        font-family: Verdana;
        line-height: 3rem;
        padding: 0px !important;
        margin: 0px !important;
        text-rendering: optimizeLegibility;
        overflow-x: hidden;
        background: url("../imagine/tapiz10.jpg");
        background-size: 450px 450px;
        font-family: arial, sans-serif;
    }
    ::-webkit-scrollbar {
        display: none;
    }
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
      
    }
    ul li {
        list-style: none;
    }
    a, a:hover, a:focus, button, input, textarea {
        text-decoration: none;
        outline: none;
        resize: none;
        outline:none !important;
        outline-width: 0 !important;
        box-shadow: none;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
    }
    .btn-theme:hover,
    .btn-theme:focus,
    .btn-theme:active,
    .btn-theme.active,
    .open .dropdown-toggle.btn-theme {
      color: #fff;
      background-color: #48bcb4;
      border-color: #48bcb4;
    }
    hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border: 0;
      border-top: 1px solid #797979;
    }
    .centered {
    	text-align: center;
    }
    .goleft {
    	text-align: left;
    }
    .goright {
    	text-align: right;
    }
    .no-padding {
    	padding: 0 !important;
    }
    .no-margin {
    	margin: 0 !important;
    }
    .label-theme {
    	background-color: #c8c5e2;
    }
    .bg-theme {
    	background-color: #c8c5e2;
    }
    .top-menu {
        margin-top:1.5em;
    }
     ul.top-menu > li > .logout {
    	color:#2f323a;
    	font-family:verdana;
    	font-size: 22px;
    	border-radius:0!important;
    	-webkit-border-radius: 4px;
    	border: 1px solid #c8c5e2 !important;
    	padding: 6px;
    	padding-top: 2px!important;
    	padding-bottom: 2px!important;
    	background: #c8c5e2;
    	transition: all 0.5s ease;
    	margin-right:-4px;
    }
    #sidebar {
        width: 210px;
        position: fixed;
        z-index:1;
    }
    #sidebar h5 {
    	color: #f2f2f2;
    	font-weight: 700;
    	   
    }
    #sidebar ul li span {
        position: relative;
        font-size:14px;
    	font-family:verdana;
    	
    }
    #sidebar .sub-menu > .sub li  {
        padding-left: 32px;
        font-size:14px;
    }
    #sidebar .sub-menu > .sub li:last-child {
        padding-bottom: 10px;
        font-size:14px;
    }

    ul.sidebar-menu , ul.sidebar-menu li ul.sub{
        margin: -2px 0 0;
        padding: 0;
    }
    ul.sidebar-menu {
        margin-top: 75px;
    }
    #sidebar > ul > li > ul.sub {
        display: none;
    }
    #sidebar > ul > li.active > ul.sub, #sidebar > ul > li > ul.sub > li > a {
        display: block;
        font-size:14px;
    }
    ul.sidebar-menu li ul.sub li{
        background: #2f323a;
        margin-bottom: 0;
        margin-left: 0;
        margin-right: 0;
    }
    ul.sidebar-menu li ul.sub li:last-child{
        border-radius: 0 0 4px 4px;
        -webkit-border-radius: 0 0 4px 4px;
    }
    ul.sidebar-menu li ul.sub li a {
        font-size: 12px;
        padding: 6px 0;
        line-height: 35px;
        height: 35px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
        color: #aeb2b7;
    }
    ul.sidebar-menu li ul.sub li a:hover {
    	color: white;
    	background: transparent;
    }
    ul.sidebar-menu li ul.sub li.active a {
        color: #c8c5e2;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
        display: block;
    }
    ul.sidebar-menu li{
        /*line-height: 20px !important;*/
        margin-bottom: 5px;
        margin-left:10px;
        margin-right:10px;
    }
    ul.sidebar-menu li.sub-menu{
        line-height: 15px;
    }
    ul.sidebar-menu li a span{
        display: inline-block;
        font-family:verdana;
    }
    ul.sidebar-menu li a{
        color:#ffffff;
        text-decoration: none;
        display: block;
        padding: 15px 0 15px 10px;
        font-size: 12px;
        outline: none;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    ul.sidebar-menu li a.active, ul.sidebar-menu li a:hover, ul.sidebar-menu li a:focus {
        background: #c8c5e2;
        color: #000000;
        display: block;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    ul.sidebar-menu li a i {
        font-size: 15px;
        padding-right: 6px;
        color:#fff;
    }
    ul.sidebar-menu li a:hover i, ul.sidebar-menu li a:focus i {
        color:#000000;;
    }
    ul.sidebar-menu li a.active i {
        color:#000000;;
    }
    .mail-info, .mail-info:hover {
        margin: -3px 6px 0 0;
        font-size: 11px;
    }
    #main-content {
        margin-left: 210px;
    }
    .header, .footer {
        min-height: 60px;
        padding: 0 15px;
    }
    .header {
        position: fixed;
        left: 0;
        right: 0;
        z-index: 1002;
    }
    .black-bg {
        background: #22242a;
        border-bottom: 1px solid #393d46;
        z-index:3!important
    }
    .wrapper {
        display: inline-block;
        margin-top: 60px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 15px;
        padding-top: 0px;
        width: 100%;
    }
    a.logo {
        font-family:narrow;
        font-size: 20px;
        letter-spacing:1px;
        color: #f2f2f2;
        float: left;
        margin-top: 15px;
    }
    a.logo b {
        font-weight: 900;
    }
    a.logo:hover, a.logo:focus {
        text-decoration: none;
        outline: none;
    }
    a.logo span {
        color: #f58634;
    }
    .notify-row {
        float: left;
        margin-left: 92px;
        color:#ffffff;
        font-family;verdana;
        font-size:20px;
        display:block!important;
        margin-top:0.7em;
    }
    ul.top-menu > li > a {
        color: #666666;
        font-size: 16px;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        border:1px solid #666666 !important;
        padding: 2px 6px;
        margin-right: 15px;
    }
    ul.top-menu > li > a:hover, ul.top-menu > li > a:focus {
        border:1px solid #b6b6b6 !important;
        background-color: transparent !important;
        border-color: #b6b6b6 !important;
        text-decoration: none;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        color: #b6b6b6 !important;
    }
    .sidebar-toggle-box {
        float: left;
        padding-right: 15px;
        margin-top: 18px;
    }
    .contact-form .error-message {
      display: none;
      color: #fff;
      background: #ed3c0d;
      text-align: center;
      padding: 15px;
      font-weight: 600;
      margin: 15px 0;
    }
    .contact-form .sent-message {
      display: none;
      color: #fff;
      background: #18d26e;
      text-align: center;
      padding: 15px;
      font-weight: 600;
      margin: 15px 0;
    }
    #copyrights {
      background: #222222;
      padding: 20px 0;
      text-align: center;
    }
    #copyrights p {
      margin-bottom: 5px;
      color: #fff;
    }
    #copyrights a {
      color: #fff;
    }
    #piezas {
        font-family:verdana;
        font-size:14px;
        padding:0.4em;
        background: #22242a;
    }
    .toggle-custom {
        position: absolute !important;
        top: 0;
        right: 0;
        background:#ffffff!important;
    }
    .toggle-custom[aria-expanded='true'] .glyphicon-plus:before {
        content: "\2212";                
    }
    #td {
        font-size:13px;
        padding:4px;
    }
    table{
        table-layout: fixed;
    }
    .titulo {
        background:#ffffff!important;
        font-family:verdanab;
        color:#333333!important;
        font-size:13px;
        line-height: 2.8rem;
    }
    .N {
        color:#278b85;
        font-size:14px;
    }
    .enlace:link, .enlace:visited {
        font-size:13px;
        color:#333333!important;
        font-family:verdanab;
        transition: font-family 1s, opacity 0.6s linear;
    }
    .enlace:hover, .enlaces:active {
        color:#000000;
        transition: font-family 1s, opacity 0.6s linear;
    }
    .glyphicon-plus {
        color:#333333;
        font-size:16px;
    }
    .fa-paperclip {
        font-size:24px!important;
    }
    .fa-cloud-upload {
        background:transparent!important;
        color: #333333;
        border:0;
        margin:0!important;
        padding:0!important;
        font-size:24px!important;
        padding-top:1em;
        text-decoration:none!important;
    } 
    .controles {
        min-height: 30px;
        max-width: 50px;
        margin-top:10px;
    }
    .controles-inner, .controles-inner:after, .controles-inner:before {
        background-color: #333333;
        position: absolute;
        width: 20px;
        height: 2px;
        border-radius: 5px;
        content: '';
        transition-timing-function: ease;
        transition-duration: .2s;
        transition-property: opacity,-webkit-transform;
        transition-property: transform,opacity;
        transition-property: transform,opacity,-webkit-transform;
    }
    .controles-inner:before {
        top: 6px;
    }
    .controles-inner:after {
        top: 12px;
    }
    .controles.open .controles-inner {
        -webkit-transform: translate3d(0,6px,0) rotate(45deg);
        transform: translate3d(0,6px,0) rotate(45deg);
    }
    .controles.open .controles-inner:after {
        -webkit-transform: translate3d(0,-12px,0) rotate(-90deg);
        transform: translate3d(0,-12px,0) rotate(-90deg);
    }
    .controles.open .controles-inner:before {
        -webkit-transform: translate3d(0,-12px,0) rotate(90deg);
        transform: translate3d(0,-12px,0) rotate(90deg);
        opacity: 0;
    }
    .fullscreen-modal .modal-dialog {
      margin: 0;
      margin-right: auto;
      margin-left: auto;
      width: 80%;
      height: 80%;
      text-align:center;
    }
    .container-fluid {
        position:fixed!important;
        right:0;
        bottom:0!important;
        z-index:3!important;
    }
    .etiqueta {
        font-size:13px;
        font-family:verdanab;
        display:none;
    }
    .etiqueta2 {
        font-size:13px!important;
        font-family:verdanab;
    }
    #nav-accordion{
        margin-top:4.5em!important;
        margin:0;
        padding:0.2em;
        opacity:0.9;
        background: -webkit-linear-gradient(to right, #4f5463,#f58634);  
        background: linear-gradient(to right, #4f5463, #17181c);
    }
    .nav {
        text-align:left;
    }
    .fa-angle-up {
        font-size:50px;
        color:#000000;
        opacity:0.5;
        text-align:center;
    }
    nav {
        position:fixed;
        left: 0;
        right: 0; 
        bottom:0;
        text-align:center;
    }
    .lista th {
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        font-size:14px;
        width:100%;
        text-align:center;
        padding:0.6em!important;
        border:1px solid #71788e!important;
    }
    .lista td {
        background:transparent;
        color:#333333;
        margin-top:2em;
        border:1px solid #71788e!important;
        height:4em;
    }
     .table_consolidados {
        font-size: 12px;
        text-align: center;
        table-layout: fixed;
        border-radius: 16px !important;
        border: 1px solid #71788e !important;
        border-collapse: separate;   
        border-spacing: 0;         
        overflow: hidden;         
    }
     .table_consolidados th {
        background: #fdf7fd;
        color: #000000;
        font-family: Verdanab;
        font-size:14px;
        text-align: center;
        line-height: 1.8rem !important;
        width: 100%;
        padding: 0.6em !important;
        border: none !important;
        border-top: none !important;
        border-bottom:1px solid #71788e !important;
        border-left: none !important;
        border-right: none !important;
        box-shadow: none !important;
    }
    .table_consolidados td {
        color:#333333;
        border:0;
    }
    #borderout {
        background:transparent!important;
        border:0!important;
        width:30%!important;
    }
    .delete {
        width:7em;
        height: 36px;
        font-family:verdanab;
        background:#ffffff;
        color: #666666;
        border: 1px solid #f58634;
        font-size:14px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .delete:hover {
        color:#f58634;
        background: #ffffff; 
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
     }
    .nuevo1,
    .nuevo {
        width:12em;
        height: 36px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:#eaeaea;
        color: #666666;
        border: 1px solid #f58634;
        font-size:14px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .nuevo1 {
        background:#ffffff!important;
    }
    .nuevo2 {
        width:12em;
        height: 36px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:#ffffff;
        color: #999999;
        border: 1px solid #999999;
        font-size:14px;
        border-radius:0!important;
    }
    .nuevo3 {
        width:12em;
        height: 36px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:#eaeaea;
        color: #666666;
        border: 1px solid #00cc00;
        font-size:14px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .nuevo3:hover, .submit:hover,
    .nuevo1:hover, .submit:hover,
    .nuevo:hover, .submit:hover {
        border: 1px solid #f58634;
        color: #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    #tdbd {
        padding:1em;
        color:#000000;
        padding-right:0;
        text-align:left!important;
        font-family:Moristonb;
        color:#666666;
    }
    #btn2{
        width:36px;
        height: 36px;
        color: #666666;
        border: 1px solid #333333;
        background:#eaeaea;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
     } 
    #btn2:hover, .submit:hover {
        border: 1px solid #f58634;
        font-size:18px;
        color: #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    #nregistro {
        float:left;
        margin-top:1em;
    }
    #boton_edit_admin,
    #boton_editar_riesgo,
    #boton_admin,
    #boton {
        transform-style: preserve-3d;
        border-radius:0;
        background:#000000;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    #boton_edit_admin:hover,
    #boton_editar_riesgo:hover,
    #boton_admin:hover,
    #boton:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #botonIBe,
    #botonIB,
    #botonIA,
    #botonIAe,
    #botonE,
    #botonEe,
    #botonES,
    #botonESe,
    #botonIA1,
    #botonIA2,
    #botonIA3,
    #botonIA4,
    #botonIA5,
    #botonIA6,
    #botonIA7,
    #botonIA8,
    #botonIA9,
    #botonIA10 {
        width: 270px;
        height: 35px;
        transform-style: preserve-3d;
        border:0!important;
        border-radius:0;
        background:#000000!important;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #botonIBe:hover,
    #botonIB:hover,
    #boton1A:hover,
    #botonIAe:hover,
    #botonE:hover,
    #botonEe:hover,
    #botonES:hover,
    #botonESe:hover,
    #botonIA1:hover, 
    #botonIA2:hover,
    #botonIA3:hover,
    #botonIA4:hover,
    #botonIA5:hover,
    #botonIA6:hover,
    #botonIA7:hover,
    #botonIA8:hover,
    #botonIA9:hover,
    #botonIA10:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        border: 1px solid #f58634!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #botonIB1,
    #botonIB2 {
        width: 270px;
        height: 35px;
        transform-style: preserve-3d;
        border:0!important;
        border-radius:0;
        background:#000000!important;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    #botonIB1:hover,
    #botonIB2:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        border: 1px solid #f58634!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #tasks2 td,
    #tasks td{
        font-family:verdana;
        font-size:14px;
        padding:0.8em;
    }
    input[type="radio"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
        visibility:hidden;
    }
    #check1::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 20px;
        height: 20px;
        background-color:#ffffff;
        border:1px solid #333333;
        text-align:center;
        margin-top:-1.6em;
        margin-left:2.2em;
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        margin-top:-0.2em;
        font-size:30px!important;
        color:#f58634;
        margin-top:-1.2em;
        margin-left:1.2em;
    }
    #check11::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 20px;
        height: 20px;
        background-color:#ffffff;
        border:1px solid #f58634;
        text-align:center;
        margin-top:-1.6em;
        margin-left:2.2em;
    }
    #check11::after {
        display: inline-block;
        position: absolute;
        margin-top:-0.2em;
        font-size:30px!important;
        color:#f58634;
        margin-top:-1.2em;
        margin-left:1.2em;
        
    }
    .radio input[type="radio"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
        font-size: 18px!important;
    } 
    .tableIA {
        width: 90%;
    }
    .tableIA th {
        font-family:Verdanab;
        width:4em!important;
        text-align:center;
        padding:8px;
        border:1px solid #333333!important;
    }
    .tableIA td {
        width:100%;
        text-align:left;
        padding:8px;
        border:none;
        vertical-align:middle!important;
    }
    .nIA {
        font-family:Verdanab!important;
        font-size:18px!important;
    }
    .tablabdm td{
        width:50%;
        font-size:14px;
        border:1px solid #333333!important;
        font-family:Verdana!important; 
        padding:8px;
    }
    #borderout2 {
        font-family:Verdanab!important;
        text-align:left;
        padding:10px;
    }
    .subt2{
        display:none;
    }  
    .col-md-12 p {
        color:#333333;
    } 
    #tdimension {
        text-align:center;
        font-family:verdanab;
        font-size:13px;
    }
    #tdimension1 {
        text-align:left;
        padding-left:6px;
        font-family:verdana;
        font-size:13px;
    }
    #tablas td{
        padding:4px;
        margin-left:30px;
    }
    .panel-body {
        background:transparent;
        font-size:14px;
        line-height: 2.8rem;
    }
    .cuadroseleccion {
        float:right;
        font-family:Verdanab;
        color:#666666;
        margin-right:2em;
    }
    @media screen and (max-width: 800px) {
        table {
            width:100%; 
        }
        tbody td {
            display: block;
            text-align:center;
            width:100%;
            height:3em!important;
            margin-top:-1px!important;
        }
        tbody td:before {               
            text-align:center;
        }
        tbody th {
            text-align:center;
        }
        tbody th:before {
            content: attr(data-th);
            text-align:center;
        }
        #panel_consolidados {
            padding-left:0!important;
            padding-right:0!important;
        }
        .tablaintra th,
        .table_consolidados th,
        .table th,
        .lista th {
            display:none!important;
        }
        .lista td {
            height:auto!important;
        }
        .tablaintra td,
        .table_consolidados td {
            display:block!important;
            font-size:14px;
            width:100%!important;
            height:auto!important;
            padding:8px!important;
            text-align:center!important;
         }
         .table_consolidados {
            width:100%!important;
         }
        .subt2{
            display:block!important;
            font-family:verdana;
            color:#333333;
        } 
        #tdbd {
            padding:0!important;
            font-size:14px!important;
        }
        tbody #borderout {
            display: inline!important;
            text-align:center;
        }
        #buscar td{
            display:inline!important;
        }
        #btn2 {
            margin-top:0!important;
        }
        #nregistro {
            text-align:center!important;
            width:100%!important;
        }
        .task-delete3, .submit,
        .task-editar3, .submit {
            margin-top:6px!important;
            margin-bottom:18px!important;
        } 
        .formxlsx {
            margin-right:0!important;
        }
        .tableIA {
            width: 100%!important;
        }
        .cuadroseleccion {
             margin-right:0!important;
        }
        .liker {
            font-size:11px!important;
        }
        #check1::before,
        #check11::before {
            width: 22px!important;
            height: 22px!important;
        }
        .title {
            margin-bottom:0.8em!important;
        }
        .top-menu {
        	margin-top:-4.3em!important;
        	margin-right:-0.2em!important;
        }
        .notify-row {
            margin-top:-1.5em;
        }
        .tablabdm td{
            width:100%!important;
            height:4em!important;
            text-align:center!important;
        }
         .lista td{
            text-align:center!important;
        }
        .etiquetas td {
            display:inline!important;
        }
    }
    @media screen and (max-width: 480px) {
        .collapse {
            margin-top:0!important;
        } 
        .fullscreen-modal .modal-dialog {
            width: 100%!important;
        }
        .etiqueta {
            display:inline!important;
        }
        #costumModal1 .modal-lg,
        #costumModal2 .modal-lg,
        #costumModal3 .modal-lg,
        #costumModal5 .modal-m,
        #costumModal6 .modal-m,
        #costumModal7 .modal-m,
        #costumModal8 .modal-m,
        #costumModal9 .modal-m,
        #costumModal10 .modal-m,
        #costumModal11 .modal-lg,
        #costumModal11 .modal-lg,
        #costumModal13 .modal-m {
            margin:0!important;
            padding:0!important;
            width:100%!important;
        }
        .inputfile-8 + label {
            height:auto!important;
        }
    }
    .title {
        font-family:verdanab;
        margin-bottom:2em;
    }
    .task-item {
        font-size:14px;
        font-family:verdanab;
        color:#333333;
        background:transparent;
        padding:6px;
        margin:0;
        border:0;
        transition: font-size 0.6s linear
    }
    .task-item:hover, .submit:hover{
        font-size:15px;
        transition: font-size 0.6s linear;
    }
    .task-delete3, .submit,
    .task-editar3, .submit {
        width:36px;
        height: 36px;
        font-family:Moristonb;
        color: #666666;
        background:transparent;
        border: 1px solid #333333;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-editar3:hover, .submit:hover {
        color:#e69900;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-delete3:hover, .submit:hover {
        color: #cc0000;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    #registro {
        padding:0.5em;
    }
    #registro label {
        position: absolute;
        display: block;
        width: 35px;
        height: 48px;
        line-height: 35px;
        font-size:16px;
        padding-left:10px;
    }
   #registro input {
        width: 270px;
        height: 35px;
        font-family:verdana;
        padding-left: 15px;
        background:#ffffff;
        border-radius:0px;
        border:1px solid #71788e!important;
    }
    #registro select {
        width: 270px;
        height: 35px;
        font-family:verdana;
        padding-left: 2px;
        padding-right: 2px;
        background:#ffffff;
        border-radius:0px;
        border:1px solid #71788e!important;
    }
    .clientes  {
        width:270px;
        text-align:left;
        color:#333333;
        font-family:verdanabi;
        font-size:13px;
        margin-top:0.8em;
    }
    input[type="file"]#file-9,
    input[type="file"]#file-8 {
        width: 0.1px;
        height: 0.1px;
        color:#000000!important;
        overflow: hidden;
        z-index: -1; 
    }
    .inputfile-8 + label {
        color: #999999;
        font-family:verdana;
        font-size:13px;
        letter-spacing:0.5px;
        border:1px solid #71788e;
        background-color: #fff;
        padding: 0;
        height:2.7em;
    }
    .inputfile-8 + label span {
        padding: 0.325rem 1.25rem;
        font-family:verdana;
        font-size:14px;
    }
    .inputfile-8 + label strong {
        padding: 0.425rem 1.25rem;
        height: 100%;
        color: #000000;
        font-family:verdanabi;
        background-color: #f2f2f2;
        display: inline-block;
        letter-spacing:0.3px;
    }
    .inputfile-8:focus + label strong,
    .inputfile-8.has-focus + label strong,
    .inputfile-8 + label:hover strong {
        background-color: #cccccc;
    }
    @media screen and (max-width: 50em) {
        .inputfile-8 + label strong {
        display: block;
        }
    }
    #foto_empleado {
        width:25em;
        height:25em;
        object-fit:scale-down;
    }
</style>
</head>
<body>
<div class="loader"></div>
<section id="container">
<header class="header black-bg" style="display: flex; align-items: center; justify-content: space-between;margin-top:-8px">
    <div id="etiqueta1" style="flex: 0 0 auto; margin-left: 15px; text-align:left!important;margin-bottom:4px">
           <?php if ($Activo == 1) { ?>
                <a href="#costumModal3" data-toggle="modal" class="logo">Cedisalud<span style="color:#f9ecf9"> IPS</span></a>
            <?php } else { ?>
                <a href="#" data-toggle="modal" class="logo">Cedisalud<span style="color:#f9ecf9"> IPS</span></a>
            <?php } ?>
    </div>
    <div style="margin-left: auto; margin-right: 15px;">
            <a href="<?php echo RUTA_PSICOSOCIAL ?>" data-toggle="modal" style="color: #ffffff; text-decoration: none; font-family: verdana; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;margin-top:16px">
                <i class="fa fa-pencil-square-o" style="font-size: 16px; color: #ffffff"></i>
                <span>Inicio</span>
            </a>
    </div>
</header>
</section>
<div class="container" style="min-height:50em;text-align:center;color:#333333"><br><br><br>
    <p style="font-family:verdanab;font-size:20px;color:#333333;text-align:center">CONSOLIDADO SOCIODEMOGRÁFICO Y LABORAL</p>
    <p style="font-family:narrow;font-size:20px;letter-spacing:3px;text-align:center;margin:0;color:#333333"><span><?php echo $Razon ?> </span><span>&nbsp&nbspNit:<?php echo $Nit ?> </span></p>
    <div class="panel panel-body">
        <div class="row" align="center">
                <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="genero"></div> </div>
                <table class="table_consolidados" style="width:30%">
                <tr>
                    <th>Masculino</th>
                    <th>Femenino</th>
                </tr>
                <tr style="font-family:verdana">
                    <td id="td" ><span class="subt2">Masculino: </span><?php echo $Masculino ?></td>
                    <td id="td"><span class="subt2">Femenino: </span><?php echo $Femenino ?></td>
                </tr>
                <tr>
                    <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                </tr>
                <tr style="font-family:verdana">
                    <td id="td"><span class="subt2">Masculino: </span><?php echo $Masculino_porcentaje.'%' ?></td>
                    <td id="td"><span class="subt2">Femenino: </span><?php echo $Femenino_porcentaje.'%' ?></td>
                </tr>
            </table>
        </div>
        <div class="row" align="center"><br><br>
            <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="edad"></div> </div>
            <table class="table_consolidados" style="width:70%">
                <tr>
                    <th>18 a 26 años</th>
                    <th>27 a 35 años</th>
                    <th>36 a 44 años</th>
                    <th>Mayor de 45 años</th>
                </tr>
                <tr style="font-family:verdana">
                    <td id="td" ><span class="subt2">18 a 26: </span><?php echo $Edad1 ?></td>
                    <td id="td"><span class="subt2">27 a 35: </span><?php echo $Edad2 ?></td>
                    <td id="td"><span class="subt2">36 a 44: </span><?php echo $Edad3 ?></td>
                    <td id="td"><span class="subt2">Mayor de 45: </span><?php echo $Edad4 ?></td>
                </tr>
                <tr>
                    <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                </tr>
                <tr style="font-family:verdana">
                    <td id="td"><span class="subt2">18 a 26: </span><?php echo $Edad1_porcentaje.'%' ?></td>
                    <td id="td"><span class="subt2">27 a 35: </span><?php echo $Edad2_porcentaje.'%' ?></td>
                    <td id="td"><span class="subt2">36 a 44: </span><?php echo $Edad3_porcentaje.'%' ?></td>
                    <td id="td"><span class="subt2">Mayor de 45: </span><?php echo $Edad4_porcentaje.'%' ?></td>
                </tr>
            </table>
        </div> 
        <div class="row" align="center"><br><br>
            <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="civil"></div> </div>
            <table class="table_consolidados" style="width:100%">
                    <tr>
                        <th>Soltero</th>
                        <th>Casado</th>
                        <th>Unión Libre</th>
                        <th>Separado</th>
                        <th>Divorciado</th>
                        <th>Viudo</th>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td" ><span class="subt2">Soltero: </span><?php echo $Soltero ?></td>
                        <td id="td"><span class="subt2">Casado: </span><?php echo $Casado?></td>
                        <td id="td"><span class="subt2">Unión Libre: </span><?php echo $UnionL ?></td>
                        <td id="td"><span class="subt2">Separado: </span><?php echo $Separado ?></td>
                        <td id="td"><span class="subt2">Divorciado: </span><?php echo $Divorciado ?></td>
                        <td id="td"><span class="subt2">Viudo: </span><?php echo $Viudo ?></td>
                    </tr>
                    <tr>
                        <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td"><span class="subt2">Soltero: </span><?php  echo $Soltero_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Casado: </span><?php  echo $Casado_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Unión Libre: </span><?php  echo $UnionL_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Separado: </span><?php  echo $Separado_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Divorciado: </span><?php  echo $Divorciado_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Viudo: </span><?php  echo $Viudo_porcentaje.'%' ?></td>
                    </tr>
                </table>
        </div>
         <div class="row" align="center"><br><br>
            <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="estrato"></div> </div>
            <table class="table_consolidados" style="width:100%">
                    <tr>
                        <th>Uno</th>
                        <th>Dos</th>
                        <th>Tres</th>
                        <th>Cuatro</th>
                        <th>Cinco</th>
                        <th>Seis</th>
                        <th>Finca</th>
                        <th>No sabe</th>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td" ><span class="subt2">Uno: </span><?php echo $Uno ?></td>
                        <td id="td"><span class="subt2">Dos: </span><?php echo $Dos ?></td>
                        <td id="td"><span class="subt2">Tres: </span><?php echo $Tres ?></td>
                        <td id="td"><span class="subt2">Cuatro: </span><?php echo $Cuatro ?></td>
                        <td id="td"><span class="subt2">Cinco: </span><?php echo $Cinco ?></td>
                        <td id="td"><span class="subt2">Seis: </span><?php echo $Seis ?></td>
                        <td id="td"><span class="subt2">Finca: </span><?php echo $Finca ?></td>
                        <td id="td"><span class="subt2">No sabe: </span><?php echo $No_sabe ?></td>
                    </tr>
                    <tr>
                        <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td"><span class="subt2">Uno: </span><?php echo $Uno_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Dos: </span><?php echo $Dos_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Tres: </span><?php echo $Tres_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Cuatro: </span><?php echo $Cuatro_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Cinco: </span><?php echo $Cinco_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Seis: </span><?php echo $Seis_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Finca: </span><?php echo $Finca_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">No sabe: </span><?php echo $No_sabe_porcentaje.'%' ?></td>
                    </tr>
                </table>
        </div>
        <div class="row"  align="center"><br><br>
            <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="escolaridad"></div> </div>
                <table class="table_consolidados" style="width:100%">
                    <tr style="font-family:verdana;font-size:10px">
                        <th>Ninguno</th>
                        <th>Primaria incompleto</th>
                        <th>Primaria completo</th>
                        <th>Bachiller incompleto</th>
                        <th>Bachiller completo</th>
                        <th>Técnico/ Tecnólogo Incompleto</th>
                        <th>Técnico/ Tecnólogo completo</th>
                        <th>Profesional Incompleto</th>
                        <th>Profesional completo</th>
                        <th>Postgrado Incompleto</th>
                        <th>Postgrado completo</th>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td" ><span class="subt2">Ninguno: </span><?php echo $N ?></td>
                        <td id="td"><span class="subt2">Primaria incompleto: </span><?php echo $PRI ?></td>
                        <td id="td"><span class="subt2">Primaria completo: </span><?php echo $PRC ?></td>
                        <td id="td"><span class="subt2">Bachiller incompleto: </span><?php echo $BI ?></td>
                        <td id="td"><span class="subt2">Bachiller completo: </span><?php echo $BC ?></td>
                        <td id="td"><span class="subt2">Técnico /Tecnólogo Incompleto: </span><?php echo $TI ?></td>
                        <td id="td"><span class="subt2">Técnico /Tecnólogo completo: </span><?php echo $TC ?></td>
                        <td id="td"><span class="subt2">Profesional Incompleto: </span><?php echo $PI ?></td>
                        <td id="td"><span class="subt2">Profesional completo: </span><?php echo $PC ?></td>
                        <td id="td"><span class="subt2">Postgrado Incompleto: </span><?php echo $PGI ?></td>
                        <td id="td"><span class="subt2">Postgrado completo: </span><?php echo $PGC ?></td>
                    </tr>
                    <tr>
                        <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td"><span class="subt2">Ninguno: </span><?php  echo $N_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Bachiller incompleto: </span><?php  echo $PRI_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Bachiller completo: </span><?php  echo $PRC_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Bachiller incompleto: </span><?php  echo $BI_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Bachiller completo: </span><?php  echo $BC_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Técnico /Tecnólogo Incompleto: </span><?php  echo $TI_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Técnico /Tecnólogo completo: </span><?php  echo $TC_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Profesional Incompleto: </span><?php  echo $PI_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Profesional completo: </span><?php  echo $PC_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Postgrado Incompleto: </span><?php  echo $PGI_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Postgrado completo: </span><?php  echo $PGC_porcentaje.'%' ?></td>
                    </tr>
                </table>
        </div>
        <div class="row" align="center"><br><br>
            <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="vivienda"></div> </div>
            <table class="table_consolidados" style="width:50%">
                    <tr>
                        <th>Propia</th>
                        <th>En arriendo</th>
                        <th>Familiar</th>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td" ><span class="subt2">Propia: </span><?php echo $Propia ?></td>
                        <td id="td"><span class="subt2">En arriendo: </span><?php echo $Arriendo ?></td>
                        <td id="td"><span class="subt2">Familiar: </span><?php echo $Familiar ?></td>
                    </tr>
                    <tr>
                        <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td"><span class="subt2">Propia: </span><?php echo $Propia_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">En arriendo: </span><?php echo $Arriendo_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Familiar: </span><?php echo $Familiar_porcentaje.'%' ?></td>
                    </tr>
                </table>
        </div>
        <div class="row" align="center"><br><br>
            <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="dependencia"></div> </div>
                <table class="table_consolidados" style="width:100%">
                    <tr>
                        <th>Ninguna</th>
                        <th>Una</th>
                        <th>Dos</th>
                        <th>Tres</th>
                        <th>Cuatro</th>
                        <th>Más de cuatro</th>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td" ><span class="subt2">Ninguna: </span><?php echo $Dep0 ?></td>
                        <td id="td"><span class="subt2">Una: </span><?php echo $Dep1 ?></td>
                        <td id="td"><span class="subt2">Dos: </span><?php echo $Dep2 ?></td>
                        <td id="td"><span class="subt2">Tres: </span><?php echo $Dep3 ?></td>
                        <td id="td"><span class="subt2">Cuatro: </span><?php echo $Dep4 ?></td>
                        <td id="td"><span class="subt2">Más de cuatro: </span><?php echo $Depmas4 ?></td>
                    </tr>
                    <tr>
                        <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td"><span class="subt2">Ninguna: </span><?php  echo $Dep0_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Una: </span><?php  echo $Dep1_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Dos: </span><?php  echo $Dep2_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Tres: </span><?php  echo $Dep3_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Cuatro: </span><?php  echo $Dep4_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Más de cuatro: </span><?php  echo $Depmas4_porcentaje.'%' ?></td>
                    </tr>
                </table>
        </div>
        <div class="row" align="center"><br><br>
            <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="antiguedad"></div> </div>
            <table class="table_consolidados" style="width:100%">
                    <tr>
                        <th>Menos de un año</th>
                        <th>Entre uno y tres años</th>
                        <th>Entre cuatro y seis años</th>
                        <th>Entre siete y diez años</th>
                        <th>Más de diez años</th>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td" ><span class="subt2">Menos de un año: </span><?php echo $Añose0 ?></td>
                        <td id="td"><span class="subt2">Entre uno y tres años: </span><?php echo $Añose1 ?></td>
                        <td id="td"><span class="subt2">Entre cuatro y seis años: </span><?php echo $Añose2 ?></td>
                        <td id="td"><span class="subt2">Entre siete y diez años: </span><?php echo $Añose3 ?></td>
                        <td id="td"><span class="subt2">Más de diez años: </span><?php echo $Añose4 ?></td>
                    </tr>
                    <tr>
                        <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td"><span class="subt2">Menos de un año: </span><?php  echo $Añose0_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Entre uno y tres años: </span><?php  echo $Añose1_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Entre cuatro y seis años: </span><?php  echo $Añose2_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Entre siete y diez años: </span><?php  echo $Añose3_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Más de diez años: </span><?php  echo $Añose4_porcentaje.'%' ?></td>
                    </tr>
                </table>
        </div>
       <div class="row" align="center"><br><br>
            <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="nivel"></div> </div>
            <table class="table_consolidados" style="width:70%">
                    <tr>
                        <th>Jefatura-tiene <br>personas a cargo</th>
                        <th>Profesional, <br>técnico, tecnólogo</th>
                        <th>Auxiliar, asistente <br>administrativo o técnico</th>
                        <th>Operario, ayudante <br>o servicios generales</th>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td" ><span class="subt2">Jefatura-tiene personas a cargo: </span><?php echo $Nivel1 ?></td>
                        <td id="td"><span class="subt2">Profesional, técnico, tecnólogo: </span><?php echo $Nivel2 ?></td>
                        <td id="td"><span class="subt2">Auxiliar, asistente administrativo o técnico: </span><?php echo $Nivel3 ?></td>
                        <td id="td"><span class="subt2">Operario, ayudante o servicios generales: </span><?php echo $Nivel4 ?></td>
                    </tr>
                    <tr>
                        <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td"><span class="subt2">Jefatura-tiene personas a cargo: </span><?php  echo $Nivel1_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Profesional, técnico, tecnólogo: </span><?php  echo $Nivel2_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Auxiliar, asistente administrativo o técnico: </span><?php  echo $Nivel3_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Operario, ayudante o servicios generales: </span><?php  echo $Nivel4_porcentaje.'%' ?></td>
                    </tr>
                </table>
        </div>
        <div class="row" align="center"><br><br>
            <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="tipo"></div> </div>
            <table class="table_consolidados" style="width:100%">
                    <tr>
                        <th>Temporal menos de 1 año</th>
                        <th>Temporal de 1 año o más</th>
                        <th>Término indefinido</th>
                        <th>Cooperado (cooperativa)</th>
                        <th>Prestación de servicios</th>
                        <th>No registra</th>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td" ><span class="subt2">Temporal menos de 1 año: </span><?php echo $menosde1 ?></td>
                        <td id="td"><span class="subt2">Temporal de 1 año o más: </span><?php echo $masde1 ?></td>
                        <td id="td"><span class="subt2">Término indefinido: </span><?php echo $indefinido ?></td>
                        <td id="td"><span class="subt2">Cooperado (cooperativa): </span><?php echo $cooperado ?></td>
                        <td id="td"><span class="subt2">Prestación de servicios: </span><?php echo $servicios ?></td>
                        <td id="td"><span class="subt2">No registra: </span><?php echo $no_registra ?></td>
                    </tr>
                    <tr>
                        <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td"><span class="subt2">Temporal menos de 1 año: </span><?php  echo $menosde1_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Temporal de 1 año o más: </span><?php  echo $masde1_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Término indefinido: </span><?php  echo $indefinido_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Cooperado (cooperativa): </span><?php  echo $cooperado_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Prestación de servicios: </span><?php  echo $servicios_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">No registra: </span><?php  echo $no_registra_porcentaje.'%' ?></td>
                    </tr>
                </table><br>
        </div>
        <div class="row" align="center"><br>
            <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="salario"></div> </div>
            <table class="table_consolidados" style="width:70%">
                    <tr>
                        <th>Fijo (diario, semanal, quincenal o mensual)</th>
                        <th>Una parte fija y otra variable</th>
                        <th>Todo variable(por producción o comisión</th>
                        <th>Cooperado (cooperativa)</th>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td" ><span class="subt2">Fijo (diario, semanal, quincenal o mensual): </span><?php echo $fijo ?></td>
                        <td id="td"><span class="subt2">Una parte fija y otra variable: </span><?php echo $partes ?></td>
                        <td id="td"><span class="subt2">Todo variable(por producción o comisión: </span><?php echo $variables ?></td>
                        <td id="td"><span class="subt2">Cooperado (cooperativa): </span><?php echo $cooperado2 ?></td>
                    </tr>
                    <tr>
                        <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td"><span class="subt2">Fijo (diario, semanal, quincenal o mensual): </span><?php  echo $fijo_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Una parte fija y otra variable: </span><?php  echo $partes_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Todo variable(por producción o comisión: </span><?php  echo $variables_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Cooperado (cooperativa): </span><?php  echo $cooperado2_porcentaje.'%' ?></td>
                    </tr>
                </table><br>
        </div>
         <div class="row" align="center"><br>
            <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="horas"></div> </div>
            <table class="table_consolidados" style="width:90%">
                    <tr>
                        <th>Igual o menor a 6 hrs</th>
                        <th>De 7 a 8 hrs.</th>
                        <th>De 9 a 10 hrs</th>
                        <th>De 11 a 12 hrs</th>
                        <th>Mayor de 12 hrs</th>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td" ><span class="subt2">Igual o menor a 6 hrs: </span><?php echo $horas1 ?></td>
                        <td id="td"><span class="subt2">De 7 a 8 hrs: </span><?php echo $horas2 ?></td>
                        <td id="td"><span class="subt2">De 9 a 10 hrs: </span><?php echo $horas3 ?></td>
                        <td id="td"><span class="subt2">De 11 a 12 hrs: </span><?php echo $horas4 ?></td>
                        <td id="td"><span class="subt2">Mayor de 12 hrs: </span><?php echo $horas5 ?></td>
                    </tr>
                    <tr>
                        <td id="td" class="subt2" style="color:#678e98">Porcentajes</td>
                    </tr>
                    <tr style="font-family:verdana">
                        <td id="td"><span class="subt2">Igual o menor a 6 hrs: </span><?php  echo $horas1_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">De 7 a 8 hrs: </span><?php  echo $horas2_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">De 9 a 10 hrs: </span><?php  echo $horas3_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">De 11 a 12 hrs: </span><?php  echo $horas4_porcentaje.'%' ?></td>
                        <td id="td"><span class="subt2">Mayor de 12 hrs: </span><?php  echo $horas5_porcentaje.'%' ?></td>
                    </tr>
                </table><br>
        </div> 
    </div>    
</div>
<nav>
    <a href="#container" class="scroll"><i class="fa fa-angle-up"></i></a>
</nav>
<div class="container"><br>
    <div class="col-lg-4 col-lg-push-8" align="center">
        <p style="font-family:Narrow;color:#666666;font-size:20px;letter-spacing:1px;">Certificado <span style="color:#e7744f">SSL &nbsp</span><a id="certificado" title="Certificado SSL" href="#costumModal4" style="padding-top:0px;padding-bottom:0" data-toggle="modal" target="_blank" aria-hidden="true"><img src="https://www.cedisalud.com.co/imagine/certificado.png" width="52" height="50"/></a></p>
        </div>
    <div class="col-lg-8 col-lg-pull-4">
        <span style="font-family:verdana;color:#333333">Diseño&nbspy&nbspdesarrollo&nbspweb: <a href="https://www.perfilar.com.co" style="letter-spacing:2px;font-size:14px">PERFILAR</a></span><br> 
        <span style="font-family:verdana;color:#333333">Copyright © 2020 - Medellín (Colombia)</span>
    </div>
</div>
<div id="costumModal3" class="modal fullscreen-modal" data-easein="slideRightIn" data-backdrop="static"> 
    <div class="modal-dialog modal-lg" align="justify" style="border-radius:0px;background-color:#ffffff;z-index:9999;height:auto">
        <div class="modal-header">
            <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
        </div>
        <div class="modal-body" style="text-align:center;padding:3em">
        <p style="font-family:verdanab;font-size:22px">LISTA DE CLIENTES</p>
        <table class="lista" style="width:100%"><br>
            <thead>
                <tr>
                    <th style="font-family:Verdanab">NIT</th>
                    <th>Razón Social</th>
                    <th>Contacto</th>
                    <th>Celular</th>
                    <th id="borderout"></th>
                    <td id="borderout"></th>
                </tr>
            </thead>    
            <tbody style="border:0!important;font-family:verdana;font-size:14px" id="admin01" align="center"></tbody>
        </table>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div>
<div id="costumModal4" class="modal" data-easein="flipBounceYIn" data-backdrop="static">  
    <div class="modal-dialog modal-title" style="box-shadow:0px 4px 3px rgba(0,0,0,.4)">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="row" align="center" style="padding-left:10%;padding-right:10%"><br>
                <p style="line-height:1em;font-family:Narrow;color:#666666;font-size:30px;letter-spacing:1px;">Certificado <span style="color:#e7744f">SSL</span></p>
                <p style="color:#999999;font-size:16px">Secure Sockets Layer (Capa de Conexión Segura)</p><br><br><p align="justify" style="line-height:1.8em">Es un protocolo que proporciona seguridad e integridad de datos en la comunicación en redes como la Internet. Los datos enviados vía una conexión SSL están protegidos por un cifrado, un mecanismo que evita el espionaje y manipulación de los datos transmitidos. Tener un SSL en su sitio hace que los usuarios no tengan desconfianza de proporcionar su información confidencial en un sitio web, por ej. número de tarjeta de crédito u otros datos de pagos para sitios web de comercio electrónico, u otra información personal que se comparte al registrarse en servicios habituales en línea.</span></p><br>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>               
    </div>
</div>
 <div id="costumModal13" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <p align="center" style="font-size:20px;font-family:Moristonb;color:#000000" id="Razonadmin0"></p>
                <input type="hidden"id="idadmin"> 
                <p style="font-family:narrow;font-size:20px;letter-spacing:2px!important"><span >Nit: </span><span id="Nitadmin" style="color:#f58634"></span></p><br>
                <p style="font-size:22px;line-height:1em;font-family:Narrow;letter-spacing:2px;color:#666666">Editar datos del cliente</p>
                <div class="row">
                    <div class="col-md-6" id="registro">               
                        <div class="clientes">Razón Social:
                            <input type="text" class="form-control" id="Razonadmin" placeholder="">    
                        </div>
                    </div>
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Actividad Económica:
                            <input type="text" class="form-control" id="Economicaadmin" placeholder="">
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Teléfono:
                            <input type="text" class="form-control" id="Telefonoadmin" placeholder="ejemplo: 71986532"   required>
                        </div>
                    </div>
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Email:
                            <input type="text" class="form-control" id="Emailadmin" placeholder="" required>
                        </div>
                    </div>
                </div> 
                <div class="row"> 
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Dirección: 
                            <input type="text" class="form-control" id="Direccionadmin" placeholder=""> 
                        </div>
                    </div>
                    <div class="col-md-6" id="registro">
                            <div class="clientes">Departamento:
                            <select type="text" class="form-control" id="Departamentoadmin">
                                <option></option>
                                <option>Amazonas</option>
                                <option>Antioquia</option>
                                <option>Arauca</option>
                                <option>Atlántico</option>
                                <option>Bolívar</option>
                                <option>Boyacá</option>
                                <option>Caldas</option>
                                <option>Caquetá</option>
                                <option>Casanare</option>
                                <option>Cauca</option>
                                <option>Cesar</option>
                                <option>Chocó</option>
                                <option>Córdoba</option>
                                <option>Cundinamarca</option>
                                <option>Guainía</option>
                                <option>Guaviare</option>
                                <option>Huila</option>
                                <option>La Guajira</option>
                                <option>Magdalena</option>
                                <option>Meta</option>
                                <option>Nariño</option>
                                <option>Norte de Santander</option>
                                <option>Putumayo</option>
                                <option>Quindío</option>
                                <option>Risaralda</option>
                                <option>San Andrés y Providencia</option>
                                <option>Santander</option>
                                <option>Sucre</option>
                                <option>Tolima</option>
                                <option>Valle del Cauca</option>
                                <option>Vaupés</option>
                                <option>Vichada</option>
                            </select></div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Ciudad/municipio:
                            <input type="text" class="form-control" id="Ciudadadmin" >
                        </div> 
                    </div>
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Sede:
                            <input type="text" class="form-control" id="Sedeadmin">
                        </div>
                    </div>
                </div>    
                <div class="row"> 
                    <div class="col-md-6" id="registro">
                        <div class="clientes">N° teléfono de contacto:
                            <input type="text" class="form-control" id="TelefonoCadmin" placeholder="ejemplo: 3136458975" pattern="[0123456789]{6,15}">
                        </div>   
                    </div>     
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Persona de contacto:
                            <input type="text" class="form-control" id="PersonaCadmin" placeholder="">
                           </div>
                    </div>
                </div>
                <div class="form-group" align="center"><br><p class="clientes" style="text-align:center">Logo de la empresa:</p>
                    <input type="file" name="files1" id="file-8" class="inputfile inputfile-8" data-multiple-caption="{count} archivos seleccionados"/>
                    <label for="file-8">
                        <span class="iborrainputfile"></span>
                        <strong>Imagen .PNG</strong>
                    </label>
                    <p id="ocultar_logo"><br><img id="salida_logo" style="width:16em" src="" /></p>
                </div><br>
                <p style="font-size:22px;line-height:1em;font-family:Narrow;letter-spacing:2px;color:#666666">Editar datos del profesional evaluador</p>
                <div class="row">
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Profesional que evalúa:
                            <input type="text" class="form-control" id="Profesionaladmin">
                        </div>
                    </div>
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Pregrado:
                            <input type="text" class="form-control" id="Pregradoadmin">
                        </div>   
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Posgrado:
                            <input type="text" class="form-control" id="Posgradoadmin">
                        </div>
                    </div>
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Tarjeta Profesional:
                            <input type="text" class="form-control" id="Tarjetaadmin" pattern="[0123456789]{6,11}">
                        </div>   
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Licencia SST:
                            <input type="text" class="form-control" id="Licenciaadmin" pattern="[0123456789]{6,11}">
                        </div>
                    </div>
                    <div class="col-md-6" id="registro">
                        <div class="clientes">Fecha de expedición:
                            <input type="date" class="form-control" id="Expedicionadmin">
                        </div>   
                    </div>
                </div>
                <div class="form-group" align="center"><br><p class="clientes" style="text-align:center">Firma del profesional:</p>
                    <input type="file" name="files2" id="file-9" class="inputfile inputfile-8" data-multiple-caption="{count} archivos seleccionados"/>
                    <label for="file-9">
                        <span class="iborrainputfile"></span>
                        <strong>Imagen .PNG</strong>
                    </label>
                    <p id="ocultar_firma"><br><img id="salida_firma" style="width:10em" src="" /></p>
                </div>
                <div class="row" style="padding-left:4%;padding-right:4%">
                    <input type="hidden" class="form-control" id="Activoadmin">
                    <input type="hidden" class="form-control" id="Archivo1admin">
                    <input type="hidden" class="form-control" id="Archivo2admin">
                    <button id="boton_edit_admin" type="submit" class="btn btn btn-default btn-block" style="font-size:14px!important;width:270px!important;height:35px;line-height:1em;" name="enviar">Enviar</button>                               
                </div><br>
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal14" class="modal" data-easein="slideRightIn" data-backdrop="static"> 
    <div class="modal-dialog modal-title" align="justify" style="border-radius:0px;background-color:#ffffff">
       <div class="modal-header">
            <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
        </div>
        <div class="modal-body" style="text-align:center">
            <div id="mensaje" style="font-family:verdana;font-size:14px;text-align:center"></div>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div>
<input type="hidden" id="delete_id"></input>
<input type="hidden" id="delete_id2"></input>
<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
<script src="<?php echo RUTA_JS ?>zlib.js"></script>
<script src="<?php echo RUTA_JS ?>png.js"></script>
<script src="<?php echo RUTA_JS ?>addimage.js"></script>
<script src="<?php echo RUTA_JS ?>filesaver.js"></script>
<script src="<?php echo RUTA_JS ?>jspdf.min.js"></script>
<script src="<?php echo RUTA_JS ?>base64.js"></script>
<script src="<?php echo RUTA_JS ?>autotable.js"></script>
<script src="<?php echo RUTA_JS ?>default_vfs.js"></script>
<script src="<?php echo RUTA_JS ?>jspdf.customfonts.min.js"></script>
<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.ui.min.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.flexslider.js"></script>
<script src="<?php echo RUTA_JS ?>main.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.scrollTo.min.js"></script>
<script src="<?php echo RUTA_JS ?>common-scripts.js"></script>
<script src="<?php echo RUTA_JS ?>custom-file-input.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="https://code.highcharts.com/11.0.0/highcharts.js"></script>
<script src="https://code.highcharts.com/11.0.0/modules/exporting.js"></script>
<script src="https://code.highcharts.com/11.0.0/modules/offline-exporting.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/svg2pdf.js/2.1.2/svg2pdf.umd.min.js"></script>
<script>
    $(window).load(function(){ 
        $( "#ocultar_firma" ).slideUp(1);
        $( "#ocultar_logo" ).slideUp(1);
        $(function() {
            $('#file-8').change(function(e) {
                $( "#ocultar_logo" ).show( "slow" );
                addImage1(e); 
            });
            function addImage1(e){
                var file = e.target.files[0],
                imageType = /image.*/;
                if (!file.type.match(imageType))
                return;
                var reader = new FileReader();
                reader.onload = fileOnload;
                reader.readAsDataURL(file);
            }
            function fileOnload(e) {
                var result=e.target.result;
                $('#salida_logo').attr("src",result);
            }
            $('#file-9').change(function(e) {
                $( "#ocultar_firma" ).show( "slow" );
                addImage2(e); 
            });
            function addImage2(e){
                var file2 = e.target.files[0],
                imageType = /image.*/;
                if (!file2.type.match(imageType))
                return;
                var reader2 = new FileReader();
                reader2.onload = fileOnload2;
                reader2.readAsDataURL(file2);
            }
            function fileOnload2(e) {
                var result=e.target.result;
                $('#salida_firma').attr("src",result);
            }
        });
    });
    $(".loader").fadeOut("slow");
    $(document).ready(function () {
        $('nav .scroll[href^="#"]').click(function () {
            var destino = $(this.hash);
            if (destino.length == 0) {
                destino = $('a[name="' + this.hash.substr(1) + '"]');
            }
            if (destino.length == 0) {
                destino = $('html');
            }
            $('html, body').animate({scrollTop: destino.offset().top}, 500);
            return false;
        });
    });
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
        var o = $(this).attr("data-easein");
        "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    $(document).ready(function() {
        fetchTasks();
        $(document).on('click', '.task-admin', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const admin = $(element).attr('taskId');
            const id = '<?php echo $id ?>';
            const postData = {
                id: id,
                admin:admin,
            };
            const url = '../insertar.php';
            $.post(url,  postData, (response) => {
                window.location = "../psicosocial/sociodemografico"
            });
        });
         $(document).on('click', '.task-delete3', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_empleado = $(element).attr('taskId');
            document.getElementById("delete_id2").value = (id_empleado);
            const nombre = $(element).attr('taskId1');
            $('#nombre_delete').html(nombre);
            $("#costumModal3").modal("hide");
            $("#costumModal4").modal("show");
            $(".delete").on('click', function(event) { 
                const eliminar_cliente = $('#delete_id2').val();
                $.ajax({
                    type: "post",
                    url: "../eliminarbdg.php",
                    data: "id_cliente=" + eliminar_cliente,
                    success: function(response) {
                        fetchTasks();
                        $('#costumModal4').modal('hide'); 
                    }
                });
            }); 
        });
       $(document).on('click', '.task-editar3', (e) => {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id = $(element).attr('taskId');
            $("#costumModal3").modal("hide");
            $("#costumModal13").modal("show");
            $.ajax({
                type: "post",
                url: "../datosadmin.php",
                data: "id=" + id,
                	befforesed: function(){
    			},
                success: function (response) {
                   const tasks2 = JSON.parse(response);
                   let id_= '';
                   let Nit= '';
                   let Razon= '';
                   let Economica = '';
                   let Telefono = '';
                   let Email = '';
                   let Direccion= '';
                   let Departamento = '';
                   let Ciudad = '';
                   let Sede = '';
                   let PersonaC= '';
                   let TelefonoC= '';
                   let Profesional= '';
                   let Pregrado= '';
                   let Posgrado= '';
                   let Tarjeta= '';
                   let Licencia= '';
                   let Expedicion= '';
                   let Activo= '';
                   let Archivo1= '';
                   let Archivo2= '';
                   tasks2.forEach(task2 => {
                        id_ += `${task2.id}`,
                        Nit += `${task2.Nit}`,
                        Razon += `${task2.Razon}`,
                        Economica += `${task2.Economica}`,
                        Telefono += `${task2.Telefono}`,
                        Email += `${task2.Email}`,
                        Direccion+= `${task2.Direccion}`,
                        Departamento+= `${task2.Departamento}`,
                        Ciudad+= `${task2.Ciudad}`,
                        Sede+= `${task2.Sede}`,
                        PersonaC+= `${task2.PersonaC}`,
                        TelefonoC+= `${task2.TelefonoC}`,
                        Profesional += `${task2.Profesional}`,
                        Pregrado += `${task2.Pregrado}`,
                        Posgrado += `${task2.Posgrado}`,
                        Tarjeta += `${task2.Tarjeta}`,
                        Licencia += `${task2.Licencia}`,
                        Expedicion += `${task2.Expedicion}`,
                        Activo+= `${task2.Activo}`,
                        Archivo1+= `${task2.Archivo1}`,
                        Archivo2+= `${task2.Archivo2}`
                   });
                $('#Razonadmin0').html(Razon);   
                document.getElementById("idadmin").value = (id);
                $('#Nitadmin').html(Nit);
                document.getElementById("Razonadmin").value = (Razon);
                document.getElementById("Economicaadmin").value = (Economica);
                document.getElementById("Telefonoadmin").value = (Telefono);
                document.getElementById("Emailadmin").value = (Email);
                document.getElementById("Direccionadmin").value = (Direccion);
                document.getElementById("Departamentoadmin").value = (Departamento);
                document.getElementById("Ciudadadmin").value = (Ciudad);
                document.getElementById("Sedeadmin").value = (Sede);
                document.getElementById("PersonaCadmin").value = (PersonaC);
                document.getElementById("TelefonoCadmin").value = (TelefonoC);
                document.getElementById("Profesionaladmin").value = (Profesional);
                document.getElementById("Pregradoadmin").value = (Pregrado);
                document.getElementById("Posgradoadmin").value = (Posgrado);
                document.getElementById("Tarjetaadmin").value = (Tarjeta);
                document.getElementById("Licenciaadmin").value = (Licencia);
                document.getElementById("Expedicionadmin").value = (Expedicion);
                document.getElementById("Activoadmin").value = (Activo);
                document.getElementById("Archivo1admin").value = (Archivo1);
                document.getElementById("Archivo2admin").value = (Archivo2);
                }      
            });
        });
        $("#boton_edit_admin").click(function (event) {
            event.preventDefault();
            var idadmin = $('#idadmin').val();
            var Nitadmin = document.getElementById("Nitadmin").innerHTML;
            var Razonadmin = $('#Razonadmin').val();
            var Economicaadmin = $('#Economicaadmin').val();
            var Telefonoadmin = $('#Telefonoadmin').val();
            var Direccionadmin =  $('#Direccionadmin').val();
            var Departamentoadmin =  $('#Departamentoadmin').val();
            var Ciudadadmin =  $('#Ciudadadmin').val();
            var Sedeadmin = $('#Sedeadmin').val();
            var PersonaCadmin = $('#PersonaCadmin').val();
            var TelefonoCadmin = $('#TelefonoCadmin').val();
            var Profesionaladmin = $('#Profesionaladmin').val();
            var Pregradoadmin = $('#Pregradoadmin').val();
            var Posgradoadmin = $('#Posgradoadmin').val();
            var Tarjetaadmin = $('#Tarjetaadmin').val();
            var Licenciaadmin = $('#Licenciaadmin').val();
            var Expedicionadmin = $('#Expedicionadmin').val();
            var Activoadmin = $('#Activoadmin').val();
            var Archivo1admin = $('#Archivo1admin').val();
            var Archivo2admin = $('#Archivo2admin').val();
            var formData = new FormData();
            var file = $('#file-8')[0].files[0];
            var file2 = $('#file-9')[0].files[0];
            formData.append('file',file);
            formData.append('file2',file2);
            formData.append("idadmin", idadmin);
            formData.append("Nitadmin", Nitadmin);
            formData.append("Razonadmin", Razonadmin);
            formData.append("Economicaadmin", Economicaadmin);
            formData.append("Telefonoadmin", Telefonoadmin);
            formData.append("Direccionadmin", Direccionadmin);
            formData.append("Departamentoadmin", Departamentoadmin);
            formData.append("Ciudadadmin", Ciudadadmin);
            formData.append("Sedeadmin", Sedeadmin);
            formData.append("PersonaCadmin", PersonaCadmin);
            formData.append("TelefonoCadmin", TelefonoCadmin);
            formData.append("Profesionaladmin", Profesionaladmin);
            formData.append("Pregradoadmin", Pregradoadmin);
            formData.append("Posgradoadmin", Posgradoadmin);
            formData.append("Tarjetaadmin", Tarjetaadmin);
            formData.append("Licenciaadmin", Licenciaadmin);
            formData.append("Expedicionadmin", Expedicionadmin);
            formData.append("Activoadmin", Activoadmin);
            formData.append("Archivo1admin", Archivo1admin);
            formData.append("Archivo2admin", Archivo2admin);
            $.ajax({
                url: '../editaradmin.php',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $("#costumModal13").modal("hide");
                    $("#costumModal15").modal("show");
                    $('#notificacion').html(response);
                    fetchTasks();
                    document.getElementById("file-8").addEventListener('click',limpiar);
                    document.getElementById("file-9").addEventListener('click',limpiar);
                }
            });
            return false;
        });
        function fetchTasks() {
        var idtabla = '<?php echo $id ?>';
            $.ajax({
                type: "post",
                url: "../listas/admin01.php",
                data: "id=" + idtabla,
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `<tr taskId="${task.id}" taskId1="${task.Razon}">
                                    <td id="td" style="font-family:verdanab"><a href="" data-toggle="modal" class="task-admin enlace">${task.Nit}</a></td>
                                    <td id="td" style="text-align:left;font-family:verdanab"><a href="" data-toggle="modal" class="task-admin enlace">${task.Razon}</a></td>
                                    <td id="td" style="text-align:left">${task.PersonaC}</td>
                                    <td id="td">${task.TelefonoC}</td>
                                    <td id="borderout" style="padding:1em"><button class="task-editar3" title="Editar"><span class="fa fa-pencil"></span></button></td>
                                    <td id="borderout" style="padding:1em"><button class="task-delete3" title="Eliminar"><span class="fa fa-trash"></span></button></td>
                                   </tr> `
                    });
                    $('#admin01').html(template);
                }
            });
        }
    });
    $(document).ready(function() {
        $.ajax({
            type: "post",
            url: "../codigo.php",
            success: function(response) {
                const tasksR = JSON.parse(response);
                let id_codigo = '';
                tasksR.forEach(taskR => {
                    id_codigo += `${taskR.id_admin}`
                });
                $.ajax({
                    type: "post",
                    url: "../logo.php",
                    data: "id_codigo=" + id_codigo,
                    success: function (response) {
                        const tasks2 = JSON.parse(response);
                        let Razon= '';
                        let Nit= '';
                        let Archivo1= '';
                        tasks2.forEach(task2 => {
                            Razon += `${task2.Razon}`,
                            Nit += `${task2.Nit}`,
                            Archivo1 += `${task2.Archivo1}`
                        });
                        $('#Razon_').html(Razon);
                        $('#Nit_').html(Nit);
                        $('#contenido_').html('<img src="../admin/'+Archivo1+'" width="100%" height="100%"></a></div>')
                    }
                });
            }
        });
    })     
var colors = Highcharts.getOptions().colors,
    categories = ['Masculino', 'Femenino'],
    data = [
        {
            y: <?php echo $Masculino ?>,
            color: colors[1],
            borderColor: colors[1],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Masculino',
                categories: ['Masculino'],
                data: [<?php echo $Masculino_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Femenino ?>,
            color: colors[2],
            borderColor: colors[2],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Femenino',
                categories: ['Femenino'],
                data: [<?php echo $Femenino_porcentaje ?>],
                website: 'Normal'
            }
        }
    ],
    browserData = [],
    versionsData = [],
    i, j,
    dataLen = data.length,
    drillDataLen,
    brightness,
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($Masculino + $Femenino) > 0 ? 'true' : 'false' ?>;

for (i = 0; i < dataLen; i += 1) {
    browserData.push({
        name: categories[i],
        website: data[i].website,
        y: data[i].y,
        color: data[i].color,
        borderColor: data[i].borderColor,
        borderWidth: data[i].borderWidth
    });
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            website: data[i].drilldown.website,
            color: hayDatos ? Highcharts.color(data[i].color).brighten(brightness).get() : 'transparent'
        });
    }
}

Highcharts.chart('genero', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Distribuición por Género',
        align: 'center',
        style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: 'Riesgo Psicosocial - <?php echo $Razon ?>',
        align: 'center',
        style: {
            fontSize: '16px',
            fontWeight: '400',
            color: '#6b7280',
            fontFamily: "Verdana"
        }
    },
    credits: {
        enabled: false
    },
   exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    'downloadPDF',
                    'downloadJPEG'
                ],
                theme: {
                    fill: 'transparent',
                    stroke: 'transparent',
                    'stroke-width': 0,
                    r: 0,
                }
            }
        },
        // Esta configuración fuerza fondo blanco en la exportación
        chartOptions: {
            chart: {
                backgroundColor: '#ffffff'
            }
        }
    },
    lang: {
        downloadPDF: 'Descargar PDF',
        downloadJPEG: 'Descargar JPG',
        contextButtonTitle: 'Opciones de exportación'
    },
    tooltip: {
        backgroundColor: '#ffffff',
        borderColor: '#e5e7eb',
        borderRadius: 12,
        borderWidth: 1,
        shadow: {
            color: 'rgba(0,0,0,0.08)',
            offsetX: 0,
            offsetY: 4,
            width: 12
        },
        padding: 15,
        headerFormat: '',
        useHTML: true,
        pointFormat: `
            <div style="line-height: 1.2;">
                <span style="color:{point.color};font-size:22px">●</span>
                <b style="font-size:13px;color:#1a1a2e;"> {point.name}</b><br/>
                <span style="font-size:12px;color:#6b7280;">Cantidad: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.y}</b><br/>
                <span style="font-size:14px;color:#6b7280;">Porcentaje: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.percentage:.1f}%</b>
                <br/>
            </div>`,
        style: {
            fontFamily: "'Inter', 'Segoe UI', sans-serif"
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 0,
            borderWidth: 0,
            states: {
                hover: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.1
                },
                select: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.2
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "'Inter', 'Segoe UI', sans-serif",
                    fontSize: '15px',
                    fontWeight: '600',
                    textOutline: 'none',
                    color: '#1a1a2e'
                }
            }
        },
        series: {
            dataLabels: {
                connectorPadding: 10,
                connectorWidth: 2,
                connectorColor: '#d1d5db'
            },
            point: {
                events: {
                    click: function() {
                        if (!hayDatos) return;
                        if (this.website == 'Normal') {
                            console.log('Normal');
                        }
                        if (this.website == 'Anormal') {
                            console.log('Anormal');
                        }
                    }
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '55%',
        innerSize: '30%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<b style="font-size:14px;color:#1a1a2e;">{point.name}</b><br/><span style="font-size:14px;font-weight:700;color:#666666;">{point.y} personas</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '16px',
                fontWeight: '600',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            connectorColor: '#d1d5db',
            connectorWidth: 2,
            distance: 25
        }
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<span style="font-size:14px;font-weight:700;color:#1a1a2e;">{point.percentage:.1f}%</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '14px',
                fontWeight: '700',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            distance: -5
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                series: [{
                    size: '65%',
                    innerSize: '40%',
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '<b>{point.name}</b><br/>{point.y}' : '',
                        style: {
                            fontSize: '13px'
                        }
                    }
                }, {
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '{point.percentage:.1f}%' : '',
                        style: {
                            fontSize: '14px'
                        },
                        distance: -5
                    }
                }]
            }
        }]
    }
});
var colors = Highcharts.getOptions().colors,
    categories = ['18-26', '27-36', '36-44', 'Más de 45'],
    data = [
        {
            y: <?php echo $Edad1 ?>,
            color: colors[1],
            borderColor: colors[1],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: '18-26',
                categories: ['18-26'],
                data: [<?php echo $Edad1_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Edad2 ?>,
            color: colors[2],
            borderColor: colors[2],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: '27-36',
                categories: ['27-36'],
                data: [<?php echo $Edad2_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Edad3 ?>,
            color: colors[3],
            borderColor: colors[3],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: '36-44',
                categories: ['36-44'],
                data: [<?php echo $Edad3_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Edad4 ?>,
            color: colors[4],
            borderColor: colors[4],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Más de 45',
                categories: ['Más de 45'],
                data: [<?php echo $Edad4_porcentaje ?>],
                website: 'Normal'
            }
        }
    ],
    browserData = [],
    versionsData = [],
    i, j,
    dataLen = data.length,
    drillDataLen,
    brightness,
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($Edad1 + $Edad2 + $Edad3 + $Edad4) > 0 ? 'true' : 'false' ?>;

for (i = 0; i < dataLen; i += 1) {
    browserData.push({
        name: categories[i],
        website: data[i].website,
        y: data[i].y,
        color: data[i].color,
        borderColor: data[i].borderColor,
        borderWidth: data[i].borderWidth
    });
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            website: data[i].drilldown.website,
            color: hayDatos ? Highcharts.color(data[i].color).brighten(brightness).get() : 'transparent'
        });
    }
}

Highcharts.chart('edad', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Distribución por Edad',
        align: 'center',
        style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: 'Riesgo Psicosocial - <?php echo $Razon ?>',
        align: 'center',
        style: {
            fontSize: '16px',
            fontWeight: '400',
            color: '#6b7280',
            fontFamily: "Verdana"
        }
    },
    credits: {
        enabled: false
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    'downloadPDF',
                    'downloadJPEG'
                ],
                theme: {
                    fill: 'transparent',
                    stroke: 'transparent',
                    'stroke-width': 0,
                    r: 0,
                }
            }
        },
        // Esta configuración fuerza fondo blanco en la exportación
        chartOptions: {
            chart: {
                backgroundColor: '#ffffff'
            }
        }
    },
    lang: {
        downloadPDF: 'Descargar PDF',
        downloadJPEG: 'Descargar JPG',
        contextButtonTitle: 'Opciones de exportación'
    },
    tooltip: {
        backgroundColor: '#ffffff',
        borderColor: '#e5e7eb',
        borderRadius: 12,
        borderWidth: 1,
        shadow: {
            color: 'rgba(0,0,0,0.08)',
            offsetX: 0,
            offsetY: 4,
            width: 12
        },
        padding: 15,
        headerFormat: '',
        useHTML: true,
        pointFormat: `
            <div style="line-height: 1.2;">
                <span style="color:{point.color};font-size:22px">●</span>
                <b style="font-size:13px;color:#1a1a2e;"> {point.name}</b><br/>
                <span style="font-size:12px;color:#6b7280;">Cantidad: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.y}</b><br/>
                <span style="font-size:14px;color:#6b7280;">Porcentaje: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.percentage:.1f}%</b>
                <br/>
            </div>`,
        style: {
            fontFamily: "'Inter', 'Segoe UI', sans-serif"
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 0,
            borderWidth: 0,
            states: {
                hover: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.1
                },
                select: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.2
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "'Inter', 'Segoe UI', sans-serif",
                    fontSize: '15px',
                    fontWeight: '600',
                    textOutline: 'none',
                    color: '#1a1a2e'
                }
            }
        },
        series: {
            dataLabels: {
                connectorPadding: 10,
                connectorWidth: 2,
                connectorColor: '#d1d5db'
            },
            point: {
                events: {
                    click: function() {
                        if (!hayDatos) return;
                        if (this.website == 'Normal') {
                            console.log('Normal');
                        }
                        if (this.website == 'Anormal') {
                            console.log('Anormal');
                        }
                    }
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '55%',
        innerSize: '30%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<b style="font-size:14px;color:#1a1a2e;">{point.name}</b><br/><span style="font-size:14px;font-weight:700;color:#666666;">{point.y} personas</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '16px',
                fontWeight: '600',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            connectorColor: '#d1d5db',
            connectorWidth: 2,
            distance: 25
        }
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<span style="font-size:14px;font-weight:700;color:#1a1a2e;">{point.percentage:.1f}%</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '14px',
                fontWeight: '700',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            distance: -5
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                series: [{
                    size: '65%',
                    innerSize: '40%',
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '<b>{point.name}</b><br/>{point.y}' : '',
                        style: {
                            fontSize: '13px'
                        }
                    }
                }, {
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '{point.percentage:.1f}%' : '',
                        style: {
                            fontSize: '14px'
                        },
                        distance: -5
                    }
                }]
            }
        }]
    }
});
var colors = Highcharts.getOptions().colors,
    categories = ['Soltero', 'Casado', 'Unión Libre', 'Separado', 'Divorciado(a)', 'Viudo(a)'],
    data = [
        {
            y: <?php echo $Soltero ?>,
            color: colors[1],
            borderColor: colors[1],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Soltero',
                categories: ['Soltero'],
                data: [<?php echo $Soltero_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Casado ?>,
            color: colors[2],
            borderColor: colors[2],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Casado',
                categories: ['Casado'],
                data: [<?php echo $Casado_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $UnionL ?>,
            color: colors[3],
            borderColor: colors[3],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Unión Libre',
                categories: ['Unión Libre'],
                data: [<?php echo $UnionL_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Separado ?>,
            color: colors[4],
            borderColor: colors[4],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Separado',
                categories: ['Separado'],
                data: [<?php echo $Separado_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Divorciado ?>,
            color: colors[5],
            borderColor: colors[5],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Divorciado(a)',
                categories: ['Divorciado(a)'],
                data: [<?php echo $Divorciado_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Viudo ?>,
            color: colors[6],
            borderColor: colors[6],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Viudo(a)',
                categories: ['Viudo(a)'],
                data: [<?php echo $Viudo_porcentaje ?>],
                website: 'Normal'
            }
        }
    ],
    browserData = [],
    versionsData = [],
    i, j,
    dataLen = data.length,
    drillDataLen,
    brightness,
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($Soltero + $Casado + $UnionL + $Separado + $Divorciado + $Viudo) > 0 ? 'true' : 'false' ?>;

for (i = 0; i < dataLen; i += 1) {
    browserData.push({
        name: categories[i],
        website: data[i].website,
        y: data[i].y,
        color: data[i].color,
        borderColor: data[i].borderColor,
        borderWidth: data[i].borderWidth
    });
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            website: data[i].drilldown.website,
            color: hayDatos ? Highcharts.color(data[i].color).brighten(brightness).get() : 'transparent'
        });
    }
}

Highcharts.chart('civil', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Distribución por Estado Civil',
        align: 'center',
        style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: 'Riesgo Psicosocial - <?php echo $Razon ?>',
        align: 'center',
        style: {
            fontSize: '16px',
            fontWeight: '400',
            color: '#6b7280',
            fontFamily: "Verdana"
        }
    },
    credits: {
        enabled: false
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    'downloadPDF',
                    'downloadJPEG'
                ],
                theme: {
                    fill: 'transparent',
                    stroke: 'transparent',
                    'stroke-width': 0,
                    r: 0,
                }
            }
        },
        // Esta configuración fuerza fondo blanco en la exportación
        chartOptions: {
            chart: {
                backgroundColor: '#ffffff'
            }
        }
    },
    lang: {
        downloadPDF: 'Descargar PDF',
        downloadJPEG: 'Descargar JPG',
        contextButtonTitle: 'Opciones de exportación'
    },
    tooltip: {
        backgroundColor: '#ffffff',
        borderColor: '#e5e7eb',
        borderRadius: 12,
        borderWidth: 1,
        shadow: {
            color: 'rgba(0,0,0,0.08)',
            offsetX: 0,
            offsetY: 4,
            width: 12
        },
        padding: 15,
        headerFormat: '',
        useHTML: true,
        pointFormat: `
            <div style="line-height: 1.2;">
                <span style="color:{point.color};font-size:22px">●</span>
                <b style="font-size:13px;color:#1a1a2e;"> {point.name}</b><br/>
                <span style="font-size:12px;color:#6b7280;">Cantidad: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.y}</b><br/>
                <span style="font-size:14px;color:#6b7280;">Porcentaje: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.percentage:.1f}%</b>
                <br/>
            </div>`,
        style: {
            fontFamily: "'Inter', 'Segoe UI', sans-serif"
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 0,
            borderWidth: 0,
            states: {
                hover: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.1
                },
                select: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.2
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "'Inter', 'Segoe UI', sans-serif",
                    fontSize: '15px',
                    fontWeight: '600',
                    textOutline: 'none',
                    color: '#1a1a2e'
                }
            }
        },
        series: {
            dataLabels: {
                connectorPadding: 10,
                connectorWidth: 2,
                connectorColor: '#d1d5db'
            },
            point: {
                events: {
                    click: function() {
                        if (!hayDatos) return;
                        if (this.website == 'Normal') {
                            console.log('Normal');
                        }
                        if (this.website == 'Anormal') {
                            console.log('Anormal');
                        }
                    }
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '55%',
        innerSize: '30%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<b style="font-size:14px;color:#1a1a2e;">{point.name}</b><br/><span style="font-size:14px;font-weight:700;color:#666666;">{point.y} personas</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '16px',
                fontWeight: '600',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            connectorColor: '#d1d5db',
            connectorWidth: 2,
            distance: 25
        }
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<span style="font-size:14px;font-weight:700;color:#1a1a2e;">{point.percentage:.1f}%</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '14px',
                fontWeight: '700',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            distance: -5
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                series: [{
                    size: '65%',
                    innerSize: '40%',
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '<b>{point.name}</b><br/>{point.y}' : '',
                        style: {
                            fontSize: '13px'
                        }
                    }
                }, {
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '{point.percentage:.1f}%' : '',
                        style: {
                            fontSize: '14px'
                        },
                        distance: -5
                    }
                }]
            }
        }]
    }
});
var colors = Highcharts.getOptions().colors,
    categories = ['Uno', 'Dos', 'Tres', 'Cuatro', 'Cinco', 'Seis', 'Finca', 'No sabe'],
    data = [
        {
            y: <?php echo $Uno ?>,
            color: colors[1],
            borderColor: colors[1],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Uno',
                categories: ['Uno'],
                data: [<?php echo $Uno_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Dos ?>,
            color: colors[2],
            borderColor: colors[2],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Dos',
                categories: ['Dos'],
                data: [<?php echo $Dos_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Tres ?>,
            color: colors[3],
            borderColor: colors[3],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Tres',
                categories: ['Tres'],
                data: [<?php echo $Tres_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Cuatro ?>,
            color: colors[4],
            borderColor: colors[4],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Cuatro',
                categories: ['Cuatro'],
                data: [<?php echo $Cuatro_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Cinco ?>,
            color: colors[5],
            borderColor: colors[5],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Cinco',
                categories: ['Cinco'],
                data: [<?php echo $Cinco_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Seis ?>,
            color: colors[6],
            borderColor: colors[6],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Seis',
                categories: ['Seis'],
                data: [<?php echo $Seis_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Finca ?>,
            color: colors[7],
            borderColor: colors[7],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Finca',
                categories: ['Finca'],
                data: [<?php echo $Finca_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $No_sabe ?>,
            color: colors[8],
            borderColor: colors[8],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'No sabe',
                categories: ['No sabe'],
                data: [<?php echo $No_sabe_porcentaje ?>],
                website: 'Normal'
            }
        }
    ],
    browserData = [],
    versionsData = [],
    i, j,
    dataLen = data.length,
    drillDataLen,
    brightness,
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($Uno + $Dos + $Tres + $Cuatro + $Cinco + $Seis + $Finca + $No_sabe) > 0 ? 'true' : 'false' ?>;

for (i = 0; i < dataLen; i += 1) {
    browserData.push({
        name: categories[i],
        website: data[i].website,
        y: data[i].y,
        color: data[i].color,
        borderColor: data[i].borderColor,
        borderWidth: data[i].borderWidth
    });
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            website: data[i].drilldown.website,
            color: hayDatos ? Highcharts.color(data[i].color).brighten(brightness).get() : 'transparent'
        });
    }
}

Highcharts.chart('estrato', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Distribución por Estrato Socioeconómico',
        align: 'center',
       style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: 'Riesgo Psicosocial - <?php echo $Razon ?>',
        align: 'center',
        style: {
            fontSize: '16px',
            fontWeight: '400',
            color: '#6b7280',
            fontFamily: "Verdana"
        }
    },
    credits: {
        enabled: false
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    'downloadPDF',
                    'downloadJPEG'
                ],
                theme: {
                    fill: 'transparent',
                    stroke: 'transparent',
                    'stroke-width': 0,
                    r: 0,
                }
            }
        },
        // Esta configuración fuerza fondo blanco en la exportación
        chartOptions: {
            chart: {
                backgroundColor: '#ffffff'
            }
        }
    },
    lang: {
        downloadPDF: 'Descargar PDF',
        downloadJPEG: 'Descargar JPG',
        contextButtonTitle: 'Opciones de exportación'
    },
    tooltip: {
        backgroundColor: '#ffffff',
        borderColor: '#e5e7eb',
        borderRadius: 12,
        borderWidth: 1,
        shadow: {
            color: 'rgba(0,0,0,0.08)',
            offsetX: 0,
            offsetY: 4,
            width: 12
        },
        padding: 15,
        headerFormat: '',
        useHTML: true,
        pointFormat: `
            <div style="line-height: 1.2;">
                <span style="color:{point.color};font-size:22px">●</span>
                <b style="font-size:13px;color:#1a1a2e;"> {point.name}</b><br/>
                <span style="font-size:12px;color:#6b7280;">Cantidad: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.y}</b><br/>
                <span style="font-size:14px;color:#6b7280;">Porcentaje: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.percentage:.1f}%</b>
                <br/>
            </div>`,
        style: {
            fontFamily: "'Inter', 'Segoe UI', sans-serif"
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 0,
            borderWidth: 0,
            states: {
                hover: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.1
                },
                select: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.2
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "'Inter', 'Segoe UI', sans-serif",
                    fontSize: '15px',
                    fontWeight: '600',
                    textOutline: 'none',
                    color: '#1a1a2e'
                }
            }
        },
        series: {
            dataLabels: {
                connectorPadding: 10,
                connectorWidth: 2,
                connectorColor: '#d1d5db'
            },
            point: {
                events: {
                    click: function() {
                        if (!hayDatos) return;
                        if (this.website == 'Normal') {
                            console.log('Normal');
                        }
                        if (this.website == 'Anormal') {
                            console.log('Anormal');
                        }
                    }
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '55%',
        innerSize: '30%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<b style="font-size:14px;color:#1a1a2e;">{point.name}</b><br/><span style="font-size:14px;font-weight:700;color:#666666;">{point.y} personas</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '16px',
                fontWeight: '600',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            connectorColor: '#d1d5db',
            connectorWidth: 2,
            distance: 25
        }
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<span style="font-size:14px;font-weight:700;color:#1a1a2e;">{point.percentage:.1f}%</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '14px',
                fontWeight: '700',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            distance: -5
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                series: [{
                    size: '65%',
                    innerSize: '40%',
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '<b>{point.name}</b><br/>{point.y}' : '',
                        style: {
                            fontSize: '13px'
                        }
                    }
                }, {
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '{point.percentage:.1f}%' : '',
                        style: {
                            fontSize: '14px'
                        },
                        distance: -5
                    }
                }]
            }
        }]
    }
});
var colors = Highcharts.getOptions().colors,
    categories = ['Post-grado completo', 'Post-grado incompleto', 'Profesional completo', 'Profesional incompleto', 'Tecnológico completo', 'Tecnológico incompleto', 'Bachillerato completo', 'Bachillerato incompleto', 'Primaria completa', 'Primaria incompleta', 'Ninguno'],
    data = [
        {
            y: <?php echo $PGC ?>,
            color: colors[1],
            borderColor: colors[1],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Post-grado completo',
                categories: ['Post-grado completo'],
                data: [<?php echo $PGC_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $PGI ?>,
            color: colors[2],
            borderColor: colors[2],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Post-grado incompleto',
                categories: ['Post-grado incompleto'],
                data: [<?php echo $PGI_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $PC ?>,
            color: colors[3],
            borderColor: colors[3],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Profesional completo',
                categories: ['Profesional completo'],
                data: [<?php echo $PC_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $PI ?>,
            color: colors[4],
            borderColor: colors[4],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Profesional incompleto',
                categories: ['Profesional incompleto'],
                data: [<?php echo $PI_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $TC ?>,
            color: colors[5],
            borderColor: colors[5],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Tecnológico completo',
                categories: ['Tecnológico completo'],
                data: [<?php echo $TC_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $TI ?>,
            color: colors[6],
            borderColor: colors[6],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Tecnológico incompleto',
                categories: ['Tecnológico incompleto'],
                data: [<?php echo $TI_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $BC ?>,
            color: colors[7],
            borderColor: colors[7],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Bachillerato completo',
                categories: ['Bachillerato completo'],
                data: [<?php echo $BC_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $BI ?>,
            color: colors[8],
            borderColor: colors[8],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Bachillerato incompleto',
                categories: ['Bachillerato incompleto'],
                data: [<?php echo $BI_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $PRC ?>,
            color: colors[9],
            borderColor: colors[9],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Primaria completa',
                categories: ['Primaria completa'],
                data: [<?php echo $PRC_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $PRI ?>,
            color: colors[10],
            borderColor: colors[10],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Primaria incompleta',
                categories: ['Primaria incompleta'],
                data: [<?php echo $PRI_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $N ?>,
            color: colors[11],
            borderColor: colors[11],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Ninguno',
                categories: ['Ninguno'],
                data: [<?php echo $N_porcentaje ?>],
                website: 'Normal'
            }
        }
    ],
    browserData = [],
    versionsData = [],
    i, j,
    dataLen = data.length,
    drillDataLen,
    brightness,
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($PGC + $PGI + $PC + $PI + $TC + $TI + $BC + $BI + $PRC + $PRI + $N) > 0 ? 'true' : 'false' ?>;

for (i = 0; i < dataLen; i += 1) {
    browserData.push({
        name: categories[i],
        website: data[i].website,
        y: data[i].y,
        color: data[i].color,
        borderColor: data[i].borderColor,
        borderWidth: data[i].borderWidth
    });
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            website: data[i].drilldown.website,
            color: hayDatos ? Highcharts.color(data[i].color).brighten(brightness).get() : 'transparent'
        });
    }
}

Highcharts.chart('escolaridad', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Distribución por Grado de Escolaridad',
        align: 'center',
        style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: 'Riesgo Psicosocial - <?php echo $Razon ?>',
        align: 'center',
        style: {
            fontSize: '16px',
            fontWeight: '400',
            color: '#6b7280',
            fontFamily: "Verdana"
        }
    },
    credits: {
        enabled: false
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    'downloadPDF',
                    'downloadJPEG'
                ],
                theme: {
                    fill: 'transparent',
                    stroke: 'transparent',
                    'stroke-width': 0,
                    r: 0,
                }
            }
        },
        // Esta configuración fuerza fondo blanco en la exportación
        chartOptions: {
            chart: {
                backgroundColor: '#ffffff'
            }
        }
    },
    lang: {
        downloadPDF: 'Descargar PDF',
        downloadJPEG: 'Descargar JPG',
        contextButtonTitle: 'Opciones de exportación'
    },
    tooltip: {
        backgroundColor: '#ffffff',
        borderColor: '#e5e7eb',
        borderRadius: 12,
        borderWidth: 1,
        shadow: {
            color: 'rgba(0,0,0,0.08)',
            offsetX: 0,
            offsetY: 4,
            width: 12
        },
        padding: 15,
        headerFormat: '',
        useHTML: true,
        pointFormat: `
            <div style="line-height: 1.2;">
                <span style="color:{point.color};font-size:22px">●</span>
                <b style="font-size:13px;color:#1a1a2e;"> {point.name}</b><br/>
                <span style="font-size:12px;color:#6b7280;">Cantidad: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.y}</b><br/>
                <span style="font-size:14px;color:#6b7280;">Porcentaje: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.percentage:.1f}%</b>
                <br/>
            </div>`,
        style: {
            fontFamily: "'Inter', 'Segoe UI', sans-serif"
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 0,
            borderWidth: 0,
            states: {
                hover: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.1
                },
                select: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.2
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "'Inter', 'Segoe UI', sans-serif",
                    fontSize: '15px',
                    fontWeight: '600',
                    textOutline: 'none',
                    color: '#1a1a2e'
                }
            }
        },
        series: {
            dataLabels: {
                connectorPadding: 10,
                connectorWidth: 2,
                connectorColor: '#d1d5db'
            },
            point: {
                events: {
                    click: function() {
                        if (!hayDatos) return;
                        if (this.website == 'Normal') {
                            console.log('Normal');
                        }
                        if (this.website == 'Anormal') {
                            console.log('Anormal');
                        }
                    }
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '55%',
        innerSize: '30%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<b style="font-size:14px;color:#1a1a2e;">{point.name}</b><br/><span style="font-size:14px;font-weight:700;color:#666666;">{point.y} personas</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '16px',
                fontWeight: '600',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            connectorColor: '#d1d5db',
            connectorWidth: 2,
            distance: 25
        }
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<span style="font-size:14px;font-weight:700;color:#1a1a2e;">{point.percentage:.1f}%</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '14px',
                fontWeight: '700',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            distance: -5
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                series: [{
                    size: '65%',
                    innerSize: '40%',
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '<b>{point.name}</b><br/>{point.y}' : '',
                        style: {
                            fontSize: '13px'
                        }
                    }
                }, {
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '{point.percentage:.1f}%' : '',
                        style: {
                            fontSize: '14px'
                        },
                        distance: -5
                    }
                }]
            }
        }]
    }
});
var colors = Highcharts.getOptions().colors,
    categories = ['Propia', 'En arriendo', 'Familiar'],
    data = [
        {
            y: <?php echo $Propia ?>,
            color: colors[1],
            borderColor: colors[1],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Propia',
                categories: ['Propia'],
                data: [<?php echo $Propia_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Arriendo ?>,
            color: colors[2],
            borderColor: colors[2],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'En arriendo',
                categories: ['En arriendo'],
                data: [<?php echo $Arriendo_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Familiar ?>,
            color: colors[3],
            borderColor: colors[3],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Familiar',
                categories: ['Familiar'],
                data: [<?php echo $Familiar_porcentaje ?>],
                website: 'Normal'
            }
        }
    ],
    browserData = [],
    versionsData = [],
    i, j,
    dataLen = data.length,
    drillDataLen,
    brightness,
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($Propia + $Arriendo + $Familiar) > 0 ? 'true' : 'false' ?>;

for (i = 0; i < dataLen; i += 1) {
    browserData.push({
        name: categories[i],
        website: data[i].website,
        y: data[i].y,
        color: data[i].color,
        borderColor: data[i].borderColor,
        borderWidth: data[i].borderWidth
    });
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            website: data[i].drilldown.website,
            color: hayDatos ? Highcharts.color(data[i].color).brighten(brightness).get() : 'transparent'
        });
    }
}

Highcharts.chart('vivienda', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Distribución por Tipo de Vivienda',
        align: 'center',
       style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: 'Riesgo Psicosocial - <?php echo $Razon ?>',
        align: 'center',
        style: {
            fontSize: '16px',
            fontWeight: '400',
            color: '#6b7280',
            fontFamily: "Verdana"
        }
    },
    credits: {
        enabled: false
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    'downloadPDF',
                    'downloadJPEG'
                ],
                theme: {
                    fill: 'transparent',
                    stroke: 'transparent',
                    'stroke-width': 0,
                    r: 0,
                }
            }
        },
        // Esta configuración fuerza fondo blanco en la exportación
        chartOptions: {
            chart: {
                backgroundColor: '#ffffff'
            }
        }
    },
    lang: {
        downloadPDF: 'Descargar PDF',
        downloadJPEG: 'Descargar JPG',
        contextButtonTitle: 'Opciones de exportación'
    },
    tooltip: {
        backgroundColor: '#ffffff',
        borderColor: '#e5e7eb',
        borderRadius: 12,
        borderWidth: 1,
        shadow: {
            color: 'rgba(0,0,0,0.08)',
            offsetX: 0,
            offsetY: 4,
            width: 12
        },
        padding: 15,
        headerFormat: '',
        useHTML: true,
        pointFormat: `
            <div style="line-height: 1.2;">
                <span style="color:{point.color};font-size:22px">●</span>
                <b style="font-size:13px;color:#1a1a2e;"> {point.name}</b><br/>
                <span style="font-size:12px;color:#6b7280;">Cantidad: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.y}</b><br/>
                <span style="font-size:14px;color:#6b7280;">Porcentaje: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.percentage:.1f}%</b>
                <br/>
            </div>`,
        style: {
            fontFamily: "'Inter', 'Segoe UI', sans-serif"
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 0,
            borderWidth: 0,
            states: {
                hover: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.1
                },
                select: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.2
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "'Inter', 'Segoe UI', sans-serif",
                    fontSize: '15px',
                    fontWeight: '600',
                    textOutline: 'none',
                    color: '#1a1a2e'
                }
            }
        },
        series: {
            dataLabels: {
                connectorPadding: 10,
                connectorWidth: 2,
                connectorColor: '#d1d5db'
            },
            point: {
                events: {
                    click: function() {
                        if (!hayDatos) return;
                        if (this.website == 'Normal') {
                            console.log('Normal');
                        }
                        if (this.website == 'Anormal') {
                            console.log('Anormal');
                        }
                    }
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '55%',
        innerSize: '30%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<b style="font-size:14px;color:#1a1a2e;">{point.name}</b><br/><span style="font-size:14px;font-weight:700;color:#666666;">{point.y} personas</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '16px',
                fontWeight: '600',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            connectorColor: '#d1d5db',
            connectorWidth: 2,
            distance: 25
        }
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<span style="font-size:14px;font-weight:700;color:#1a1a2e;">{point.percentage:.1f}%</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '14px',
                fontWeight: '700',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            distance: -5
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                series: [{
                    size: '65%',
                    innerSize: '40%',
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '<b>{point.name}</b><br/>{point.y}' : '',
                        style: {
                            fontSize: '13px'
                        }
                    }
                }, {
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '{point.percentage:.1f}%' : '',
                        style: {
                            fontSize: '14px'
                        },
                        distance: -5
                    }
                }]
            }
        }]
    }
});
var colors = Highcharts.getOptions().colors,
    categories = ['','','','','','',],
    data = [
        { y: <?php echo $Dep0 ?>,
            color: colors[1],
            drilldown: {
                name: '',
                categories: ['Ninguna'],
                data: [<?php echo $Dep0_porcentaje ?>]}}, 
        { y: <?php echo $Dep1 ?>,
            color: colors[2],
            drilldown: {
                name: '',
                categories: ['Una'],
                data: [<?php echo $Dep1_porcentaje ?>]}},
        { y: <?php echo $Dep2 ?>,
            color: colors[3],
            drilldown: {
                name: '',
                categories: ['Dos'],
                data: [<?php echo $Dep2_porcentaje ?>]}},
        { y: <?php echo $Dep3 ?>,
            color: colors[4],
            drilldown: {
                name: '',
                categories: ['Tres'],
                data: [<?php echo $Dep3_porcentaje ?>]}},
        { y: <?php echo $Dep4 ?>,
            color: colors[5],
            drilldown: {
                name: '',
                categories: ['Cuatro'],
                data: [<?php echo $Dep4_porcentaje ?>]}},
        { y: <?php echo $Depmas4 ?>,
            color: colors[6],
            drilldown: {
                name: '',
                categories: ['Más de 4'],
                data: [<?php echo $Depmas4_porcentaje ?>]}}
    ],
    browserData = [],
    versionsData = [],
    i,j,
    dataLen = data.length,
    drillDataLen,
    brightness;

for (i = 0; i < dataLen; i += 1) {
browserData.push({
    name: categories[i],
    y: data[i].y,
    color: data[i].color
});
drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            color: Highcharts.color(data[i].color).brighten(brightness).get()
        });
    }
}
Highcharts.chart('dependencia', {
    chart: {
        type: 'pie',
        backgroundColor: false,
    },
    title: {
        text: 'Distribución por personas a cargo',
        style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit:<?php echo $Nit ?>   </span></p><br><p>Empleados evaluados: <span><?php echo $Dep ?> - Fecha: <?php echo $Fecha ?></span></p>',
        style: {
              fontFamily: 'verdana',
              fontSize: '14px'
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '50%',
        dataLabels: {
            distance: -45,
            formatter: function () {
                return this.y > 0 ? '<b>' + this.point.name + this.y + ' ' : null;
            }
        },
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        dataLabels: {
            distance: 2,
            formatter: function () {
                return this.y > 1 ? '<b>' + this.point.name + ':</b> ' + this.y + '%' : null;
            }
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' + 'Porcentaje: <b>{point.y}%</b><br/>'
        },
        id: 'versions'
    }],
});
var colors = Highcharts.getOptions().colors,
    categories = ['Menos de un año', 'Entre uno y tres años', 'Entre cuatro y seis años', 'Entre siete y diez años', 'Más de diez años'],
    data = [
        {
            y: <?php echo $Añose0 ?>,
            color: colors[1],
            borderColor: colors[1],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Menos de un año',
                categories: ['Menos de un año'],
                data: [<?php echo $Añose0_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Añose1 ?>,
            color: colors[2],
            borderColor: colors[2],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Entre uno y tres años',
                categories: ['Entre uno y tres años'],
                data: [<?php echo $Añose1_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Añose2 ?>,
            color: colors[3],
            borderColor: colors[3],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Entre cuatro y seis años',
                categories: ['Entre cuatro y seis años'],
                data: [<?php echo $Añose2_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Añose3 ?>,
            color: colors[4],
            borderColor: colors[4],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Entre siete y diez años',
                categories: ['Entre siete y diez años'],
                data: [<?php echo $Añose3_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Añose4 ?>,
            color: colors[5],
            borderColor: colors[5],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Más de diez años',
                categories: ['Más de diez años'],
                data: [<?php echo $Añose4_porcentaje ?>],
                website: 'Normal'
            }
        }
    ],
    browserData = [],
    versionsData = [],
    i, j,
    dataLen = data.length,
    drillDataLen,
    brightness,
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($Añose0 + $Añose1 + $Añose2 + $Añose3 + $Añose4) > 0 ? 'true' : 'false' ?>;

for (i = 0; i < dataLen; i += 1) {
    browserData.push({
        name: categories[i],
        website: data[i].website,
        y: data[i].y,
        color: data[i].color,
        borderColor: data[i].borderColor,
        borderWidth: data[i].borderWidth
    });
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            website: data[i].drilldown.website,
            color: hayDatos ? Highcharts.color(data[i].color).brighten(brightness).get() : 'transparent'
        });
    }
}

Highcharts.chart('antiguedad', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Distribución por Antigüedad en la Empresa',
        align: 'center',
        style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: 'Riesgo Psicosocial - <?php echo $Razon ?>',
        align: 'center',
        style: {
            fontSize: '16px',
            fontWeight: '400',
            color: '#6b7280',
            fontFamily: "Verdana"
        }
    },
    credits: {
        enabled: false
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    'downloadPDF',
                    'downloadJPEG'
                ],
                theme: {
                    fill: 'transparent',
                    stroke: 'transparent',
                    'stroke-width': 0,
                    r: 0,
                }
            }
        },
        // Esta configuración fuerza fondo blanco en la exportación
        chartOptions: {
            chart: {
                backgroundColor: '#ffffff'
            }
        }
    },
    lang: {
        downloadPDF: 'Descargar PDF',
        downloadJPEG: 'Descargar JPG',
        contextButtonTitle: 'Opciones de exportación'
    },
    tooltip: {
        backgroundColor: '#ffffff',
        borderColor: '#e5e7eb',
        borderRadius: 12,
        borderWidth: 1,
        shadow: {
            color: 'rgba(0,0,0,0.08)',
            offsetX: 0,
            offsetY: 4,
            width: 12
        },
        padding: 15,
        headerFormat: '',
        useHTML: true,
        pointFormat: `
            <div style="line-height: 1.2;">
                <span style="color:{point.color};font-size:22px">●</span>
                <b style="font-size:13px;color:#1a1a2e;"> {point.name}</b><br/>
                <span style="font-size:12px;color:#6b7280;">Cantidad: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.y}</b><br/>
                <span style="font-size:14px;color:#6b7280;">Porcentaje: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.percentage:.1f}%</b>
                <br/>
            </div>`,
        style: {
            fontFamily: "'Inter', 'Segoe UI', sans-serif"
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 0,
            borderWidth: 0,
            states: {
                hover: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.1
                },
                select: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.2
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "'Inter', 'Segoe UI', sans-serif",
                    fontSize: '15px',
                    fontWeight: '600',
                    textOutline: 'none',
                    color: '#1a1a2e'
                }
            }
        },
        series: {
            dataLabels: {
                connectorPadding: 10,
                connectorWidth: 2,
                connectorColor: '#d1d5db'
            },
            point: {
                events: {
                    click: function() {
                        if (!hayDatos) return;
                        if (this.website == 'Normal') {
                            console.log('Normal');
                        }
                        if (this.website == 'Anormal') {
                            console.log('Anormal');
                        }
                    }
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '55%',
        innerSize: '30%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<b style="font-size:14px;color:#1a1a2e;">{point.name}</b><br/><span style="font-size:14px;font-weight:700;color:#666666;">{point.y} personas</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '16px',
                fontWeight: '600',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            connectorColor: '#d1d5db',
            connectorWidth: 2,
            distance: 25
        }
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<span style="font-size:14px;font-weight:700;color:#1a1a2e;">{point.percentage:.1f}%</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '14px',
                fontWeight: '700',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            distance: -5
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                series: [{
                    size: '65%',
                    innerSize: '40%',
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '<b>{point.name}</b><br/>{point.y}' : '',
                        style: {
                            fontSize: '13px'
                        }
                    }
                }, {
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '{point.percentage:.1f}%' : '',
                        style: {
                            fontSize: '14px'
                        },
                        distance: -5
                    }
                }]
            }
        }]
    }
});
var colors = Highcharts.getOptions().colors,
    categories = ['Operario', 'Auxiliar', 'Profesional', 'Jefatura'],
    data = [
        {
            y: <?php echo $Nivel4 ?>,
            color: colors[1],
            borderColor: colors[1],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Operario',
                categories: ['Operario'],
                data: [<?php echo $Nivel4_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Nivel3 ?>,
            color: colors[2],
            borderColor: colors[2],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Auxiliar',
                categories: ['Auxiliar'],
                data: [<?php echo $Nivel3_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Nivel2 ?>,
            color: colors[3],
            borderColor: colors[3],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Profesional',
                categories: ['Profesional'],
                data: [<?php echo $Nivel2_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $Nivel1 ?>,
            color: colors[4],
            borderColor: colors[4],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Jefatura',
                categories: ['Jefatura'],
                data: [<?php echo $Nivel1_porcentaje ?>],
                website: 'Normal'
            }
        }
    ],
    browserData = [],
    versionsData = [],
    i, j,
    dataLen = data.length,
    drillDataLen,
    brightness,
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($Nivel1 + $Nivel2 + $Nivel3 + $Nivel4) > 0 ? 'true' : 'false' ?>;

for (i = 0; i < dataLen; i += 1) {
    browserData.push({
        name: categories[i],
        website: data[i].website,
        y: data[i].y,
        color: data[i].color,
        borderColor: data[i].borderColor,
        borderWidth: data[i].borderWidth
    });
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            website: data[i].drilldown.website,
            color: hayDatos ? Highcharts.color(data[i].color).brighten(brightness).get() : 'transparent'
        });
    }
}

Highcharts.chart('nivel', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Distribución por Tipo de Cargo',
        align: 'center',
        style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: 'Riesgo Psicosocial - <?php echo $Razon ?>',
        align: 'center',
        style: {
            fontSize: '16px',
            fontWeight: '400',
            color: '#6b7280',
            fontFamily: "Verdana"
        }
    },
    credits: {
        enabled: false
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    'downloadPDF',
                    'downloadJPEG'
                ],
                theme: {
                    fill: 'transparent',
                    stroke: 'transparent',
                    'stroke-width': 0,
                    r: 0,
                }
            }
        },
        // Esta configuración fuerza fondo blanco en la exportación
        chartOptions: {
            chart: {
                backgroundColor: '#ffffff'
            }
        }
    },
    lang: {
        downloadPDF: 'Descargar PDF',
        downloadJPEG: 'Descargar JPG',
        contextButtonTitle: 'Opciones de exportación'
    },
    tooltip: {
        backgroundColor: '#ffffff',
        borderColor: '#e5e7eb',
        borderRadius: 12,
        borderWidth: 1,
        shadow: {
            color: 'rgba(0,0,0,0.08)',
            offsetX: 0,
            offsetY: 4,
            width: 12
        },
        padding: 15,
        headerFormat: '',
        useHTML: true,
        pointFormat: `
            <div style="line-height: 1.2;">
                <span style="color:{point.color};font-size:22px">●</span>
                <b style="font-size:13px;color:#1a1a2e;"> {point.name}</b><br/>
                <span style="font-size:12px;color:#6b7280;">Cantidad: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.y}</b><br/>
                <span style="font-size:14px;color:#6b7280;">Porcentaje: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.percentage:.1f}%</b>
                <br/>
            </div>`,
        style: {
            fontFamily: "'Inter', 'Segoe UI', sans-serif"
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 0,
            borderWidth: 0,
            states: {
                hover: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.1
                },
                select: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.2
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "'Inter', 'Segoe UI', sans-serif",
                    fontSize: '15px',
                    fontWeight: '600',
                    textOutline: 'none',
                    color: '#1a1a2e'
                }
            }
        },
        series: {
            dataLabels: {
                connectorPadding: 10,
                connectorWidth: 2,
                connectorColor: '#d1d5db'
            },
            point: {
                events: {
                    click: function() {
                        if (!hayDatos) return;
                        if (this.website == 'Normal') {
                            console.log('Normal');
                        }
                        if (this.website == 'Anormal') {
                            console.log('Anormal');
                        }
                    }
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '55%',
        innerSize: '30%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<b style="font-size:14px;color:#1a1a2e;">{point.name}</b><br/><span style="font-size:14px;font-weight:700;color:#666666;">{point.y} personas</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '16px',
                fontWeight: '600',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            connectorColor: '#d1d5db',
            connectorWidth: 2,
            distance: 25
        }
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<span style="font-size:14px;font-weight:700;color:#1a1a2e;">{point.percentage:.1f}%</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '14px',
                fontWeight: '700',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            distance: -5
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                series: [{
                    size: '65%',
                    innerSize: '40%',
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '<b>{point.name}</b><br/>{point.y}' : '',
                        style: {
                            fontSize: '13px'
                        }
                    }
                }, {
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '{point.percentage:.1f}%' : '',
                        style: {
                            fontSize: '14px'
                        },
                        distance: -5
                    }
                }]
            }
        }]
    }
});
var colors = Highcharts.getOptions().colors,
    categories = ['Temporal menos de 1 año', 'Temporal de 1 año o más', 'Término indefinido', 'Cooperado(cooperativa)', 'Prestación de servicios', 'No registra'],
    data = [
        {
            y: <?php echo $menosde1 ?>,
            color: colors[1],
            borderColor: colors[1],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Temporal menos de 1 año',
                categories: ['Temporal menos de 1 año'],
                data: [<?php echo $menosde1_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $masde1 ?>,
            color: colors[2],
            borderColor: colors[2],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Temporal de 1 año o más',
                categories: ['Temporal de 1 año o más'],
                data: [<?php echo $masde1_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $indefinido ?>,
            color: colors[3],
            borderColor: colors[3],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Término indefinido',
                categories: ['Término indefinido'],
                data: [<?php echo $indefinido_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $cooperado ?>,
            color: colors[4],
            borderColor: colors[4],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Cooperado(cooperativa)',
                categories: ['Cooperado(cooperativa)'],
                data: [<?php echo $cooperado_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $servicios ?>,
            color: colors[5],
            borderColor: colors[5],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Prestación de servicios',
                categories: ['Prestación de servicios'],
                data: [<?php echo $servicios_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $no_registra ?>,
            color: colors[5],
            borderColor: colors[5],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'No registra',
                categories: ['No registra'],
                data: [<?php echo $no_registra_porcentaje ?>],
                website: 'Normal'
            }
        }
    ],
    browserData = [],
    versionsData = [],
    i, j,
    dataLen = data.length,
    drillDataLen,
    brightness,
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($menosde1 + $masde1 + $indefinido + $cooperado + $servicios + $no_registra) > 0 ? 'true' : 'false' ?>;

for (i = 0; i < dataLen; i += 1) {
    browserData.push({
        name: categories[i],
        website: data[i].website,
        y: data[i].y,
        color: data[i].color,
        borderColor: data[i].borderColor,
        borderWidth: data[i].borderWidth
    });
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            website: data[i].drilldown.website,
            color: hayDatos ? Highcharts.color(data[i].color).brighten(brightness).get() : 'transparent'
        });
    }
}

Highcharts.chart('tipo', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Distribución por Tipo de Contrato',
        align: 'center',
        style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: 'Riesgo Psicosocial - <?php echo $Razon ?>',
        align: 'center',
        style: {
            fontSize: '16px',
            fontWeight: '400',
            color: '#6b7280',
            fontFamily: "Verdana"
        }
    },
    credits: {
        enabled: false
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    'downloadPDF',
                    'downloadJPEG'
                ],
                theme: {
                    fill: 'transparent',
                    stroke: 'transparent',
                    'stroke-width': 0,
                    r: 0,
                }
            }
        },
        // Esta configuración fuerza fondo blanco en la exportación
        chartOptions: {
            chart: {
                backgroundColor: '#ffffff'
            }
        }
    },
    lang: {
        downloadPDF: 'Descargar PDF',
        downloadJPEG: 'Descargar JPG',
        contextButtonTitle: 'Opciones de exportación'
    },
    tooltip: {
        backgroundColor: '#ffffff',
        borderColor: '#e5e7eb',
        borderRadius: 12,
        borderWidth: 1,
        shadow: {
            color: 'rgba(0,0,0,0.08)',
            offsetX: 0,
            offsetY: 4,
            width: 12
        },
        padding: 15,
        headerFormat: '',
        useHTML: true,
        pointFormat: `
            <div style="line-height: 1.2;">
                <span style="color:{point.color};font-size:22px">●</span>
                <b style="font-size:13px;color:#1a1a2e;"> {point.name}</b><br/>
                <span style="font-size:12px;color:#6b7280;">Cantidad: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.y}</b><br/>
                <span style="font-size:14px;color:#6b7280;">Porcentaje: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.percentage:.1f}%</b>
                <br/>
            </div>`,
        style: {
            fontFamily: "'Inter', 'Segoe UI', sans-serif"
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 0,
            borderWidth: 0,
            states: {
                hover: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.1
                },
                select: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.2
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "'Inter', 'Segoe UI', sans-serif",
                    fontSize: '15px',
                    fontWeight: '600',
                    textOutline: 'none',
                    color: '#1a1a2e'
                }
            }
        },
        series: {
            dataLabels: {
                connectorPadding: 10,
                connectorWidth: 2,
                connectorColor: '#d1d5db'
            },
            point: {
                events: {
                    click: function() {
                        if (!hayDatos) return;
                        if (this.website == 'Normal') {
                            console.log('Normal');
                        }
                        if (this.website == 'Anormal') {
                            console.log('Anormal');
                        }
                    }
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '55%',
        innerSize: '30%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<b style="font-size:14px;color:#1a1a2e;">{point.name}</b><br/><span style="font-size:14px;font-weight:700;color:#666666;">{point.y} personas</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '16px',
                fontWeight: '600',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            connectorColor: '#d1d5db',
            connectorWidth: 2,
            distance: 25
        }
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<span style="font-size:14px;font-weight:700;color:#1a1a2e;">{point.percentage:.1f}%</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '14px',
                fontWeight: '700',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            distance: -5
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                series: [{
                    size: '65%',
                    innerSize: '40%',
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '<b>{point.name}</b><br/>{point.y}' : '',
                        style: {
                            fontSize: '13px'
                        }
                    }
                }, {
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '{point.percentage:.1f}%' : '',
                        style: {
                            fontSize: '14px'
                        },
                        distance: -5
                    }
                }]
            }
        }]
    }
});
var colors = Highcharts.getOptions().colors,
    categories = ['Fijo (diario, semanal, quincenal o mensual)', 'Una parte fija y otra variable', 'Todo variable(por producción o comisión)', 'Cooperado (cooperativa)'],
    data = [
        {
            y: <?php echo $fijo ?>,
            color: colors[1],
            borderColor: colors[1],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Fijo (diario, semanal, quincenal o mensual)',
                categories: ['Fijo (diario, semanal, quincenal o mensual)'],
                data: [<?php echo $fijo_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $partes ?>,
            color: colors[2],
            borderColor: colors[2],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Una parte fija y otra variable',
                categories: ['Una parte fija y otra variable'],
                data: [<?php echo $partes_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $variables ?>,
            color: colors[3],
            borderColor: colors[3],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Todo variable(por producción o comisión)',
                categories: ['Todo variable(por producción o comisión)'],
                data: [<?php echo $variables_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $cooperado2 ?>,
            color: colors[4],
            borderColor: colors[4],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Cooperado (cooperativa)',
                categories: ['Cooperado (cooperativa)'],
                data: [<?php echo $cooperado2_porcentaje ?>],
                website: 'Normal'
            }
        }
    ],
    browserData = [],
    versionsData = [],
    i, j,
    dataLen = data.length,
    drillDataLen,
    brightness,
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($fijo + $partes + $variables + $cooperado2) > 0 ? 'true' : 'false' ?>;

for (i = 0; i < dataLen; i += 1) {
    browserData.push({
        name: categories[i],
        website: data[i].website,
        y: data[i].y,
        color: data[i].color,
        borderColor: data[i].borderColor,
        borderWidth: data[i].borderWidth
    });
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            website: data[i].drilldown.website,
            color: hayDatos ? Highcharts.color(data[i].color).brighten(brightness).get() : 'transparent'
        });
    }
}

Highcharts.chart('salario', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Distribución por Tipo de Salario',
        align: 'center',
       style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: 'Riesgo Psicosocial - <?php echo $Razon ?>',
        align: 'center',
        style: {
            fontSize: '16px',
            fontWeight: '400',
            color: '#6b7280',
            fontFamily: "Verdana"
        }
    },
    credits: {
        enabled: false
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    'downloadPDF',
                    'downloadJPEG'
                ],
                theme: {
                    fill: 'transparent',
                    stroke: 'transparent',
                    'stroke-width': 0,
                    r: 0,
                }
            }
        },
        // Esta configuración fuerza fondo blanco en la exportación
        chartOptions: {
            chart: {
                backgroundColor: '#ffffff'
            }
        }
    },
    lang: {
        downloadPDF: 'Descargar PDF',
        downloadJPEG: 'Descargar JPG',
        contextButtonTitle: 'Opciones de exportación'
    },
    tooltip: {
        backgroundColor: '#ffffff',
        borderColor: '#e5e7eb',
        borderRadius: 12,
        borderWidth: 1,
        shadow: {
            color: 'rgba(0,0,0,0.08)',
            offsetX: 0,
            offsetY: 4,
            width: 12
        },
        padding: 15,
        headerFormat: '',
        useHTML: true,
        pointFormat: `
            <div style="line-height: 1.2;">
                <span style="color:{point.color};font-size:22px">●</span>
                <b style="font-size:13px;color:#1a1a2e;"> {point.name}</b><br/>
                <span style="font-size:12px;color:#6b7280;">Cantidad: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.y}</b><br/>
                <span style="font-size:14px;color:#6b7280;">Porcentaje: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.percentage:.1f}%</b>
                <br/>
            </div>`,
        style: {
            fontFamily: "'Inter', 'Segoe UI', sans-serif"
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 0,
            borderWidth: 0,
            states: {
                hover: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.1
                },
                select: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.2
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "'Inter', 'Segoe UI', sans-serif",
                    fontSize: '15px',
                    fontWeight: '600',
                    textOutline: 'none',
                    color: '#1a1a2e'
                }
            }
        },
        series: {
            dataLabels: {
                connectorPadding: 10,
                connectorWidth: 2,
                connectorColor: '#d1d5db'
            },
            point: {
                events: {
                    click: function() {
                        if (!hayDatos) return;
                        if (this.website == 'Normal') {
                            console.log('Normal');
                        }
                        if (this.website == 'Anormal') {
                            console.log('Anormal');
                        }
                    }
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '55%',
        innerSize: '30%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<b style="font-size:14px;color:#1a1a2e;">{point.name}</b><br/><span style="font-size:14px;font-weight:700;color:#666666;">{point.y} personas</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '16px',
                fontWeight: '600',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            connectorColor: '#d1d5db',
            connectorWidth: 2,
            distance: 25
        }
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<span style="font-size:14px;font-weight:700;color:#1a1a2e;">{point.percentage:.1f}%</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '14px',
                fontWeight: '700',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            distance: -5
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                series: [{
                    size: '65%',
                    innerSize: '40%',
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '<b>{point.name}</b><br/>{point.y}' : '',
                        style: {
                            fontSize: '13px'
                        }
                    }
                }, {
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '{point.percentage:.1f}%' : '',
                        style: {
                            fontSize: '14px'
                        },
                        distance: -5
                    }
                }]
            }
        }]
    }
});
var colors = Highcharts.getOptions().colors,
    categories = ['Igual o menor a 6 hrs', 'De 7 a 8 hrs', 'De 9 a 10 hrs', 'De 11 a 12 hrs', 'Mayor de 12 hrs'],
    data = [
        {
            y: <?php echo $horas1 ?>,
            color: colors[1],
            borderColor: colors[1],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Igual o menor a 6 hrs',
                categories: ['Igual o menor a 6 hrs'],
                data: [<?php echo $horas1_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $horas2 ?>,
            color: colors[2],
            borderColor: colors[2],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'De 7 a 8 hrs',
                categories: ['De 7 a 8 hrs'],
                data: [<?php echo $horas2_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $horas3 ?>,
            color: colors[3],
            borderColor: colors[3],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'De 9 a 10 hrs',
                categories: ['De 9 a 10 hrs'],
                data: [<?php echo $horas3_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $horas4 ?>,
            color: colors[4],
            borderColor: colors[4],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'De 11 a 12 hrs',
                categories: ['De 11 a 12 hrs'],
                data: [<?php echo $horas4_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $horas5 ?>,
            color: colors[5],
            borderColor: colors[5],
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Mayor de 12 hrs',
                categories: ['Mayor de 12 hrs'],
                data: [<?php echo $horas5_porcentaje ?>],
                website: 'Normal'
            }
        }
    ],
    browserData = [],
    versionsData = [],
    i, j,
    dataLen = data.length,
    drillDataLen,
    brightness,
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($horas1 + $horas2 + $horas3 + $horas4 + $horas5) > 0 ? 'true' : 'false' ?>;

for (i = 0; i < dataLen; i += 1) {
    browserData.push({
        name: categories[i],
        website: data[i].website,
        y: data[i].y,
        color: data[i].color,
        borderColor: data[i].borderColor,
        borderWidth: data[i].borderWidth
    });
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            website: data[i].drilldown.website,
            color: hayDatos ? Highcharts.color(data[i].color).brighten(brightness).get() : 'transparent'
        });
    }
}

Highcharts.chart('horas', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Distribución por Horas de Trabajo',
        align: 'center',
        style: {
            fontSize: '22px',
            fontWeight: '600',
            color: '#1a1a2e',
            fontFamily: "Helvetica"
        }
    },
    subtitle: {
        text: 'Riesgo Psicosocial - <?php echo $Razon ?>',
        align: 'center',
        style: {
            fontSize: '16px',
            fontWeight: '400',
            color: '#6b7280',
            fontFamily: "Verdana"
        }
    },
    credits: {
        enabled: false
    },
    exporting: {
        buttons: {
            contextButton: {
                menuItems: [
                    'downloadPDF',
                    'downloadJPEG'
                ],
                theme: {
                    fill: 'transparent',
                    stroke: 'transparent',
                    'stroke-width': 0,
                    r: 0,
                }
            }
        },
        // Esta configuración fuerza fondo blanco en la exportación
        chartOptions: {
            chart: {
                backgroundColor: '#ffffff'
            }
        }
    },
    lang: {
        downloadPDF: 'Descargar PDF',
        downloadJPEG: 'Descargar JPG',
        contextButtonTitle: 'Opciones de exportación'
    },
    tooltip: {
        backgroundColor: '#ffffff',
        borderColor: '#e5e7eb',
        borderRadius: 12,
        borderWidth: 1,
        shadow: {
            color: 'rgba(0,0,0,0.08)',
            offsetX: 0,
            offsetY: 4,
            width: 12
        },
        padding: 15,
        headerFormat: '',
        useHTML: true,
        pointFormat: `
            <div style="line-height: 1.2;">
                <span style="color:{point.color};font-size:22px">●</span>
                <b style="font-size:13px;color:#1a1a2e;"> {point.name}</b><br/>
                <span style="font-size:12px;color:#6b7280;">Cantidad: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.y}</b><br/>
                <span style="font-size:14px;color:#6b7280;">Porcentaje: </span>
                <b style="font-size:12px;color:#1a1a2e;">{point.percentage:.1f}%</b>
                <br/>
            </div>`,
        style: {
            fontFamily: "'Inter', 'Segoe UI', sans-serif"
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 0,
            borderWidth: 0,
            states: {
                hover: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.1
                },
                select: {
                    enabled: hayDatos ? true : false,
                    brightness: 0.2
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "'Inter', 'Segoe UI', sans-serif",
                    fontSize: '15px',
                    fontWeight: '600',
                    textOutline: 'none',
                    color: '#1a1a2e'
                }
            }
        },
        series: {
            dataLabels: {
                connectorPadding: 10,
                connectorWidth: 2,
                connectorColor: '#d1d5db'
            },
            point: {
                events: {
                    click: function() {
                        if (!hayDatos) return;
                        if (this.website == 'Normal') {
                            console.log('Normal');
                        }
                        if (this.website == 'Anormal') {
                            console.log('Anormal');
                        }
                    }
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        data: browserData,
        size: '55%',
        innerSize: '30%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<b style="font-size:14px;color:#1a1a2e;">{point.name}</b><br/><span style="font-size:14px;font-weight:700;color:#666666;">{point.y} personas</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '16px',
                fontWeight: '600',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            connectorColor: '#d1d5db',
            connectorWidth: 2,
            distance: 25
        }
    }, {
        name: 'Porcentaje',
        data: versionsData,
        size: '70%',
        innerSize: '50%',
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: hayDatos ? '<span style="font-size:14px;font-weight:700;color:#1a1a2e;">{point.percentage:.1f}%</span>' : '',
            style: {
                fontFamily: "'Inter', 'Segoe UI', sans-serif",
                fontSize: '14px',
                fontWeight: '700',
                textOutline: 'none',
                color: '#1a1a2e'
            },
            distance: -5
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                series: [{
                    size: '65%',
                    innerSize: '40%',
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '<b>{point.name}</b><br/>{point.y}' : '',
                        style: {
                            fontSize: '13px'
                        }
                    }
                }, {
                    dataLabels: {
                        enabled: true,
                        format: hayDatos ? '{point.percentage:.1f}%' : '',
                        style: {
                            fontSize: '14px'
                        },
                        distance: -5
                    }
                }]
            }
        }]
    }
});
</script>
</body>
</html>
