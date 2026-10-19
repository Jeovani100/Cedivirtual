<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Consolidado Intralaboral</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
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
    
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $date1 = new DateTime($Inicio0);
    $Inicio =  $date1->format('d-m-Y');
    $_SESSION['Inicio'] = $Inicio;
    
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $date2 = new DateTime($Terminacion0);
    $Terminacion =  $date2->format('d-m-Y');
    $_SESSION['Terminacion'] = $Terminacion;
   
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Certificada !='' && certificada_existe = '#e7744f'";
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
    
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Sede !='' && sede_existe = '#e7744f'";
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
    
    if($sede1 != ''){
        $sede1_c = 1; 
    } else {
        $sede1_c = 0;
    }
    if($sede2 != ''){
        $sede2_c = 1; 
    } else {
        $sede2_c = 0;
    }
    if($sede3 != ''){
        $sede3_c = 1; 
    } else {
        $sede3_c = 0;
    }
    if($sede4 != ''){
        $sede4_c = 1; 
    } else {
        $sede4_c = 0;
    }
    if($sede5 != ''){
        $sede5_c = 1; 
    } else {
        $sede5_c = 0;
    }
    if($sede6 != ''){
        $sede6_c = 1; 
    } else {
        $sede6_c = 0;
    }
    if($sede7 != ''){
        $sede7_c = 1; 
    } else {
        $sede7_c = 0;
    }
    if($sede8 != ''){
        $sede8_c = 1; 
    } else {
        $sede8_c = 0;
    }
    if($sede9 != ''){
        $sede9_c = 1; 
    } else {
        $sede9_c = 0;
    }
    if($sede10 != ''){
        $sede10_c = 1; 
    } else {
        $sede10_c = 0;
    }
    if($sede11 != ''){
        $sede11_c = 1; 
    } else {
        $sede11_c = 0;
    }
    if($sede12 != ''){
        $sede12_c = 1; 
    } else {
        $sede12_c = 0;
    }
    if($sede13 != ''){
        $sede13_c = 1; 
    } else {
        $sede13_c = 0;
    }
    if($sede14 != ''){
        $sede14_c = 1; 
    } else {
        $sede14_c = 0;
    }
    if($sede15 != ''){
        $sede15_c = 1; 
    } else {
        $sede15_c = 0;
    }
    if($sede16 != ''){
        $sede_c16 = 1; 
    } else {
        $sede_c16 = 0;
    }
    if($sede17 != ''){
        $sede17_c = 1; 
    } else {
        $sede17_c = 0;
    }
    if($sede18 != ''){
        $sede18_c = 1; 
    } else {
        $sede18_c = 0;
    }
    if($sede19 != ''){
        $sede19_c = 1; 
    } else {
        $sede19_c = 0;
    }
    if($sede20 != ''){
        $sede20_c = 1; 
    } else {
        $sede20_c = 0;
    }
    if($sede21 != ''){
        $sede21_c = 1; 
    } else {
        $sede21_c = 0;
    }
    if($sede22 != ''){
        $sede22_c = 1; 
    } else {
        $sede22_c = 0;
    }
    if($sede23 != ''){
        $sede23_c = 1; 
    } else {
        $sede23_c = 0;
    }
    if($sede24 != ''){
        $sede24_c = 1; 
    } else {
        $sede24_c = 0;
    }
    if($sede25 != ''){
        $sede25_c = 1; 
    } else {
        $sede25_c = 0;
    }
    if($sede26 != ''){
        $sede26_c = 1; 
    } else {
        $sede26_c = 0;
    }
    if($sede27 != ''){
        $sede27_c = 1; 
    } else {
        $sede27_c = 0;
    }
    if($sede28 != ''){
        $sede28_c = 1; 
    } else {
        $sede28_c = 0;
    }
    if($sede29 != ''){
        $sede29_c = 1; 
    } else {
        $sede29_c = 0;
    }
    if($sede30 != ''){
        $sede30_c = 1; 
    } else {
        $sede30_c = 0;
    }
    if($sede31 != ''){
        $sede31_c = 1; 
    } else {
        $sede31_c = 0;
    }
    if($sede32 != ''){
        $sede32_c = 1; 
    } else {
        $sede32_c = 0;
    }
    if($sede33 != ''){
        $sede33_c = 1; 
    } else {
        $sede33_c = 0;
    }
    if($sede34 != ''){
        $sede34_c = 1; 
    } else {
        $sede34_c = 0;
    }
    if($sede35 != ''){
        $sede35_c = 1; 
    } else {
        $sede35_c = 0;
    }
    if($sede36 != ''){
        $sede36_c = 1; 
    } else {
        $sede36_c = 0;
    }
    if($sede37 != ''){
        $sede37_c = 1; 
    } else {
        $sede37_c = 0;
    }
    if($sede38 != ''){
        $sede38_c = 1; 
    } else {
        $sede38_c = 0;
    }
    if($sede39 != ''){
        $sede39_c = 1; 
    } else {
        $sede39_c = 0;
    }
    if($sede40 != ''){
        $sede40_c = 1; 
    } else {
        $sede40_c = 0;
    }
    if($sede41 != ''){
        $sede41_c = 1; 
    } else {
        $sede41_c = 0;
    }
    if($sede42 != ''){
        $sede42_c = 1; 
    } else {
        $sede42_c = 0;
    }
    if($sede43 != ''){
        $sede43_c = 1; 
    } else {
        $sede43_c = 0;
    }
    if($sede44 != ''){
        $sede44_c = 1; 
    } else {
        $sede44_c = 0;
    }
    if($sede45 != ''){
        $sede45_c = 1; 
    } else {
        $sede45_c = 0;
    }
    if($sede46 != ''){
        $sede46_c = 1; 
    } else {
        $sede46_c = 0;
    }
    if($sede47 != ''){
        $sede47_c = 1; 
    } else {
        $sede47_c = 0;
    }
    if($sede48 != ''){
        $sede48_c = 1; 
    } else {
        $sede48_c = 0;
    }
    if($sede49 != ''){
        $sede49_c = 1; 
    } else {
        $sede49_c = 0;
    }
    if($sede50 != ''){
        $sede50_c = 1; 
    } else {
        $sede50_c = 0;
    }
    if($sede51 != ''){
        $sede51_c = 1; 
    } else {
        $sede51_c = 0;
    }
    if($sede52 != ''){
        $sede52_c = 1; 
    } else {
        $sede52_c = 0;
    }
    if($sede53 != ''){
        $sede53_c = 1; 
    } else {
        $sede53_c = 0;
    }
    if($sede54 != ''){
        $sede54_c = 1; 
    } else {
        $sede54_c = 0;
    }
    if($sede55 != ''){
        $sede55_c = 1; 
    } else {
        $sede55_c = 0;
    }
    if($sede56 != ''){
        $sede56_c = 1; 
    } else {
        $sede56_c = 0;
    }
    if($sede57 != ''){
        $sede57_c = 1; 
    } else {
        $sede57_c = 0;
    }
    if($sede58 != ''){
        $sede58_c = 1; 
    } else {
        $sede58_c = 0;
    }
    if($sede59 != ''){
        $sede59_c = 1; 
    } else {
        $sede59_c = 0;
    }
    if($sede60 != ''){
        $sede60_c = 1; 
    } else {
        $sede60_c = 0;
    }
     if($sed61e != ''){
        $sede61_c = 1; 
    } else {
        $sede61_c = 0;
    }
     if($sed62e != ''){
        $sede62_c = 1; 
    } else {
        $sede62_c = 0;
    }
     if($sed63e != ''){
        $sede63_c = 1; 
    } else {
        $sede63_c = 0;
    }
     if($sed64e != ''){
        $sede64_c = 1; 
    } else {
        $sede64_c = 0;
    }
     if($sed65e != ''){
        $sede65_c = 1; 
    } else {
        $sede65_c = 0;
    }
     if($sed66e != ''){
        $sede66_c = 1; 
    } else {
        $sede66_c = 0;
    }
     if($sed67e != ''){
        $sede67_c = 1; 
    } else {
        $sede67_c = 0;
    }
     if($sed68e != ''){
        $sede68_c = 1; 
    } else {
        $sede68_c = 0;
    }
     if($sed69e != ''){
        $sede69_c = 1; 
    } else {
        $sede69_c = 0;
    }
     if($sed70e != ''){
        $sede70_c = 1; 
    } else {
        $sede70_c = 0;
    }
    
    $sede_c = $sede1_c + $sede2_c + $sede3_c + $sede4_c + $sede5_c + $sede6_c + $sede7_c + $sede8_c + $sede9_c + $sede10_c + $sede11_c + $sede12_c + $sede13_c + $sede14_c + $sede15_c + $sede16_c + $sede17_c + $sede18_c + $sede19_c + $sede20_c + $sede21_c + $sede22_c + $sede23_c + $sede24_c + $sede25_c + $sede26_c + $sede27_c + $sede28_c + $sede29_c + $sede30_c + $sede31_c + $sede32_c + $sede33_c + $sede34_c + $sede35_c + $sede36_c + $sede37_c + $sede38_c + $sede39_c + $sede40_c + $sede41_c + $sede42_c + $sede43_c + $sede44_c + $sede45_c + $sede46_c + $sede47_c + $sede48_c + $sede49_c + $sede50_c + $sede51_c + $sede52_c + $sede53_c + $sede54_c + $sede55_c + $sede56_c + $sede57_c + $sede58_c + $sede59_c + $sede60_c + $sede61_c + $sede62_c + $sede63_c + $sede64_c + $sede65_c + $sede66_c + $sede67_c + $sede68_c + $sede69_c + $sede70_c; 
    $sede_0 = $sede_c - 6;
    
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Area !='' && area_existe = '#e7744f'";
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
    
    $Area1 = $_SESSION['Area1']; $Area2 = $_SESSION['Area2']; $Area3 = $_SESSION['Area3']; $Area4 = $_SESSION['Area4']; $Area5 = $_SESSION['Area5']; $Area6 = $_SESSION['Area6']; $Area7 = $_SESSION['Area7']; $Area8 = $_SESSION['Area8']; $Area9 = $_SESSION['Area9']; $Area9 = $_SESSION['Area9']; $Area10 = $_SESSION['Area10'];
    $Area11 = $_SESSION['Area11']; $Area12 = $_SESSION['Area12']; $Area13 = $_SESSION['Area13']; $Area14 = $_SESSION['Area14']; $Area15 = $_SESSION['Area15']; $Area16 = $_SESSION['Area16']; $Area17 = $_SESSION['Area17']; $Area18 = $_SESSION['Area18']; $Area19 = $_SESSION['Area19']; $Area20 = $_SESSION['Area20'];
    $Area21 = $_SESSION['Area21']; $Area22 = $_SESSION['Area22']; $Area23 = $_SESSION['Area23']; $Area24 = $_SESSION['Area24']; $Area25 = $_SESSION['Area25']; $Area26 = $_SESSION['Area26']; $Area27 = $_SESSION['Area27']; $Area28 = $_SESSION['Area28']; $Area29 = $_SESSION['Area29']; $Area30 = $_SESSION['Area30'];
    $Area31 = $_SESSION['Area31']; $Area32 = $_SESSION['Area32']; $Area33 = $_SESSION['Area33']; $Area34 = $_SESSION['Area34']; $Area35 = $_SESSION['Area35']; $Area36 = $_SESSION['Area36']; $Area37 = $_SESSION['Area37']; $Area38 = $_SESSION['Area38']; $Area39 = $_SESSION['Area39']; $Area40 = $_SESSION['Area40'];
    $Area41 = $_SESSION['Area41']; $Area42 = $_SESSION['Area42']; $Area43 = $_SESSION['Area43']; $Area44 = $_SESSION['Area44']; $Area45 = $_SESSION['Area45']; $Area46 = $_SESSION['Area46']; $Area47 = $_SESSION['Area47']; $Area48 = $_SESSION['Area48']; $Area49 = $_SESSION['Area49']; $Area50 = $_SESSION['Area50'];
    $Area51 = $_SESSION['Area51']; $Area52 = $_SESSION['Area52']; $Area53 = $_SESSION['Area53']; $Area54 = $_SESSION['Area54']; $Area55 = $_SESSION['Area55']; $Area56 = $_SESSION['Area56']; $Area57 = $_SESSION['Area57']; $Area58 = $_SESSION['Area58']; $Area59 = $_SESSION['Area59']; $Area60 = $_SESSION['Area60'];
    $Area61 = $_SESSION['Area61']; $Area62 = $_SESSION['Area62']; $Area63 = $_SESSION['Area63']; $Area64 = $_SESSION['Area64']; $Area65 = $_SESSION['Area65']; $Area66 = $_SESSION['Area66']; $Area67 = $_SESSION['Area67']; $Area68 = $_SESSION['Area68']; $Area69 = $_SESSION['Area69']; $Area70 = $_SESSION['Area70'];
    $Area71 = $_SESSION['Area71']; $Area72 = $_SESSION['Area72']; $Area73 = $_SESSION['Area73']; $Area74 = $_SESSION['Area74']; $Area75 = $_SESSION['Area75']; $Area76 = $_SESSION['Area76']; $Area77 = $_SESSION['Area77']; $Area78 = $_SESSION['Area78']; $Area79 = $_SESSION['Area79']; $Area80 = $_SESSION['Area80'];
    
    include_once 'app/repositorioadmin.inc.php'; 
    include_once 'app/repositorioadmin2.inc.php';
    include_once 'app/repositorioadmin3.inc.php'; 
    include_once 'app/repositorioadmin4.inc.php'; 
    
    $CLJP0 = Consolidados::CLJP(conexion::obtener_conexion());
    $CLJP = round($CLJP0, 1, PHP_ROUND_HALF_UP);
                   if ($CLJP  > 46.3) {
                        $CLJPR= 'Muy Alto';
                        $CLJPC  = 'style="color:rgb(157, 55, 21)"';
                    } elseif ($CLJP  > 30.9) {
                        $CLJPR= 'Alto';
                        $CLJPC = 'style="color:rgb(231, 116, 79)"';
                    } elseif ($CLJP  > 15.5) {
                        $CLJPR= 'Medio';
                        $CLJPC = 'style="color:rgb(102, 102, 102)"';
                    } elseif ($CLJP  > 3.9 ) {
                        $CLJPR= 'Bajo';
                        $CLJPC = 'style="color:rgb(115, 153, 0)"';
                    } elseif ($CLJP  > 0) {
                        $CLJPR= 'Sin Riesgo';
                        $CLJPC = 'style="color:rgb(57, 77, 0)"';
                    }
        $CLAO0 = Consolidados::CLAO(conexion::obtener_conexion());
        $CLAO = round($CLAO0, 1, PHP_ROUND_HALF_UP);
                    if ($CLAO > 38.6) {
                        $CLAOR= 'Muy Alto';
                        $CLAOC  = 'style="color:rgb(157, 55, 21)"';
                    } elseif ($CLAO > 25.1) {
                        $CLAOR= 'Alto';
                        $CLAOC = 'style="color:rgb(231, 116, 79)"';
                    } elseif ($CLAO > 13.6) {
                        $CLAOR= 'Medio';
                        $CLAOC = 'style="color:rgb(102, 102, 102)"';
                    } elseif ($CLAO > 3.9 ) {
                        $CLAOR= 'Bajo';
                        $CLAOC = 'style="color:rgb(115, 153, 0)"';
                    } elseif ($CLAO > 0) {
                        $CLAOR= 'Sin Riesgo';
                        $CLAOC = 'style="color:rgb(57, 77, 0)"';
                    }
                    
        $RSJP0 = Consolidados::RSJP(conexion::obtener_conexion());
        $RSJP = round($RSJP0, 1, PHP_ROUND_HALF_UP);
                    if ($RSJP > 37.6) {
                        $RSJPR= 'Muy Alto';
                        $RSJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($RSJP > 25.1) {
                        $RSJPR= 'Alto';
                        $RSJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($RSJP > 16.2) {
                        $RSJPR= 'Medio';
                        $RSJPC='style="color:rgb(102, 102, 102)"';
                    } elseif ($RSJP > 5.5) {
                        $RSJPR= 'Bajo';
                        $RSJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($RSJP > 0) {
                        $RSJPR= 'Sin Riesgo';
                        $RSJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $RSAO0 = Consolidados::RSAO(conexion::obtener_conexion());
        $RSAO = round($RSAO0, 1, PHP_ROUND_HALF_UP);
                    if ($RSAO > 37.6) {
                        $RSAOR= 'Muy Alto';
                        $RSAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($RSAO > 27.2) {
                        $RSAOR= 'Alto';
                        $RSAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($RSAO > 14.7) {
                        $RSAOR= 'Medio';
                        $RSAOC='style="color:rgb(102, 102, 102)"';
                    } elseif ($RSAO > 6.4) {
                        $RSAOR= 'Bajo';
                        $RSAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($RSAO > 0) {
                        $RSAOR= 'Sin Riesgo';
                        $RSAOC= 'style="color:rgb(57, 77, 0)"';
                    }
                    
                    
        $RDJP0 = Consolidados::RDJP(conexion::obtener_conexion());
        $RDJP = round($RDJP0, 1, PHP_ROUND_HALF_UP);
                    if ($RDJP > 55.1) {
                        $RDJPR= 'Muy Alto';
                        $RDJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($RDJP > 40.1) {
                        $RDJPR= 'Alto';
                        $RDJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($RDJP > 25.1) {
                        $RDJPR= 'Medio';
                        $RDJPC='style="color:rgb(102, 102, 102)"';
                    } elseif ($RDJP > 10.1) {
                        $RDJPR= 'Bajo';
                        $RDJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($RDJP > 0) {
                        $RDJPR= 'Sin Riesgo';
                        $RDJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $RDAO0 = Consolidados::RDAO(conexion::obtener_conexion());
        $RDAO = round($RDAO0, 1, PHP_ROUND_HALF_UP);
                   if ($RDAO > 50.1) {
                        $RDAOR= 'Muy Alto';
                        $RDAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($RDAO > 30.1) {
                        $RDAOR= 'Alto';
                        $RDAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($RDAO > 20.1) {
                        $RDAOR= 'Medio';
                        $RDAOC='style="color:rgb(102, 102, 102)"';
                    } elseif ($RDAO > 5.1) {
                        $RDAOR= 'Bajo';
                        $RDAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($RDAO > 0) {
                        $RDAOR= 'Sin Riesgo';
                        $RDAOC= 'style="color:rgb(57, 77, 0)"';
                    }
                    
        $RCJP0 = Consolidados::RCJP(conexion::obtener_conexion());
        $RCJP = round($RCJP0, 1, PHP_ROUND_HALF_UP);
                    if ($RCJP > 47.3) {
                        $RCJPR= 'Muy Alto';
                        $RCJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($RCJP > 33.4) {
                        $RCJPR= 'Alto';
                        $RCJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($RCJP > 25.1) {
                        $RCJPR= 'Medio';
                        $RCJPC='style="color:rgb(102, 102, 102)"';
                    } elseif ($RCJP > 14) {
                        $RCJPR= 'Bajo';
                        $RCJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($RCJP > 0) {
                        $RCJPR= 'Sin Riesgo';
                        $RCJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        //DOMINIO Liderazgo y relaciones sociales en el trabajo            
        $LR0 = (($CLJP0 + $RSJP0 + $RDJP0 + $RCJP0)/4);
        $LRJPa = round($LR0, 1, PHP_ROUND_HALF_UP);
                    if ($LRJPa > 34.9) {
                        $LRJPR= 'Muy Alto';
                        $LRJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($LRJPa > 25.7) {
                        $LRJPR= 'Alto';
                        $LRJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($LRJPa > 17.8) {
                        $LRJPR= 'Medio';
                        $LRJPC='style="color:rgb(102, 102, 102)"';
                    } elseif ($LRJPa > 9.2) {
                        $LRJPR= 'Bajo';
                        $LRJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($LRJPa > 0) {
                        $LRJPR= 'Sin Riesgo';
                        $LRJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $LRb0 = (($CLAO0 + $RSAO0 + $RDAO0 + $RCAO0)/3);
        $LRAOb = round($LRb0, 1, PHP_ROUND_HALF_UP);
                   if ($LRAOb > 38.4) {
                        $LRAOR= 'Muy Alto';
                        $LRAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($LRAOb > 26.8) {
                        $LRAOR= 'Muy Alto';
                        $LRAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($LRAOb > 17.6) {
                        $LRAOR= 'Medio';
                        $LRAOC='style="color:rgb(102, 102, 102)"';
                    } elseif ($LAORb > 8.4) {
                        $LRAOR= 'Bajo';
                        $LRAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($LRAOb > 0) {
                        $LRAOR= 'Sin Riesgo';
                        $LRAOC= 'style="color:rgb(57, 77, 0)"';
                    }

        $CRJP0 = Consolidados::CRJP(conexion::obtener_conexion());
        $CRJP = round($CRJP0, 1, PHP_ROUND_HALF_UP);
                    if ($CRJP > 39.4) {
                        $CRJPR= 'Muy Alto';
                        $CRJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($CRJP > 21.5) {
                        $CRJPR= 'Alto';
                        $CRJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($CRJP > 10.8) {
                        $CRJPR= 'Medio';
                        $CRJPC='style="color:rgb(102, 102, 102)"';
                    } elseif ($CRJP > 1) {
                        $CRJPR= 'Bajo';
                        $CRJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($CRJP > 0) {
                        $CRJPR= 'Sin Riesgo';
                        $CRJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $CRAO0 = Consolidados::CRAO(conexion::obtener_conexion());
        $CRAO = round($CRAO0, 1, PHP_ROUND_HALF_UP);
                     if ($CRAO > 30.1) {
                        $CRAOR= 'Muy Alto';
                        $CRAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($CRAO > 15.1) {
                        $CRAOR= 'Alto';
                        $CRAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($CRAO > 5.1) {
                        $CRAOR= 'Medio';
                        $CRAOC='style="color:rgb(102, 102, 102)"';
                    } elseif ($CRAO > 1) {
                        $CRAOR= 'Bajo';
                        $CRAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($CRAO > 0) {
                        $CRAOR= 'Sin Riesgo';
                        $CRAOC= 'style="color:rgb(57, 77, 0)"';
                    }
        $CJP0 = Consolidados::CJP(conexion::obtener_conexion());
        $CJP = round($CJP0, 1, PHP_ROUND_HALF_UP);
                     if ($CJP > 50.1) {
                        $CJPR= 'Muy Alto';
                        $CJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($CJP > 33.4) {
                        $CJPR= 'Alto';
                        $CJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($CJP > 16.8) {
                        $CJPR= 'Medio';
                        $CJPC='style="color:rgb(102, 102, 102)"';
                    } elseif ($CJP > 1) {
                        $CJPR= 'Bajo';
                        $CJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($CJP > 0) {
                        $CJPR= 'Sin Riesgo';
                        $CJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $CAO0 = Consolidados::CAO(conexion::obtener_conexion());
        $CAO = round($CAO0, 1, PHP_ROUND_HALF_UP);
                    if ($CAO > 50.1) {
                        $CAOR= 'Muy Alto';
                        $CAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($CAO > 25.1) {
                        $CAOR= 'Alto';
                        $CAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($CAO > 16.8) {
                        $CAOR= 'Medio';
                        $CAOC='style="color:rgb(102, 102, 102)"';
                    } elseif ($CAO > 1) {
                        $CAOR= 'Bajo';
                        $CAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($CAO > 0) {
                        $CAOR= 'Sin Riesgo';
                        $CAOC= 'style="color:rgb(57, 77, 0)"';
                    }
        $PMJP0 = Consolidados::PMJP(conexion::obtener_conexion());
        $PMJP = round($PMJP0, 1, PHP_ROUND_HALF_UP);
                    if ($PMJP > 50.1) {
                        $PMJPR= 'Muy Alto';
                        $PMJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($PMJP > 37.6) {
                        $PMJPR= 'Alto';
                        $PMJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($PMJP > 25.1) {
                        $PMJPR= 'Medio';
                        $PMJPC='style="color:rgb(102, 102, 102)"';
                    } elseif ($PMJP > 12.6) {
                        $PMJPR= 'Bajo';
                        $PMJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($PMJP > 0) {
                        $PMJPR= 'Sin Riesgo';
                        $PMJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $PMAO0 = Consolidados::PMAO(conexion::obtener_conexion());
        $PMAO = round($PMAO0, 1, PHP_ROUND_HALF_UP);            
                    if ($PMAO > 58.4) {
                        $PMAOR= 'Muy Alto';
                        $PMAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($PMAO > 41.8) {
                        $PMAOR= 'Alto';
                        $PMAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($PMAO > 33.4) {
                        $PMAOR= 'Medio';
                        $PMAOC='style="color:rgb(102, 102, 102)"';
                    } elseif ($PMAO > 16.8) {
                        $PMAOR= 'Bajo';
                        $PMAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($PMAO > 0) {
                        $PMAOR= 'Sin Riesgo';
                        $PMAOC= 'style="color:rgb(57, 77, 0)"';
                    }
        $PDJP0 = Consolidados::PDJP(conexion::obtener_conexion());
        $PDJP = round($PDJP0, 1, PHP_ROUND_HALF_UP);            
                    if ($PDJP > 31.4) {
                        $PDJPR= 'Muy Alto';
                        $PDJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($PDJP > 18.9) {
                        $PDJPR= 'Alto';
                        $PDJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($PDJP > 6.4) {
                        $PDJPR= 'Medio';
                        $PDJPC='style="color:rgb(102, 102, 102)"';
                    } elseif ($PDJP > 1) {
                        $PDJPR= 'Bajo';
                        $PDJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($PDJP > 0) {
                        $PDJPR= 'Sin Riesgo';
                        $PDJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $PDAO0 = Consolidados::PDAO(conexion::obtener_conexion());
        $PDAO = round($PDAO0, 1, PHP_ROUND_HALF_UP);             
                    if ($PDAO > 56.4) {
                        $PDAOR= 'Muy Alto';
                        $PDAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($PDAO > 37.6) {
                        $PDAOR= 'Alto';
                        $PDAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($PDAO > 25.1) {
                        $PDAOR= 'Medio';
                        $PDAOC='style="color:rgb(102, 102, 102)"';
                    } elseif ($PDAO > 12.6) {
                        $PDAOR= 'Bajo';
                        $PDAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($PDAO > 0) {
                        $PDAOR= 'Sin Riesgo';
                        $PDAOC= 'style="color:rgb(57, 77, 0)"';
                    }
        $CAJP0 = Consolidados::CAJP(conexion::obtener_conexion());
        $CAJP = round($CAJP0, 1, PHP_ROUND_HALF_UP); 
                    if ($CAJP > 58.4) {
                        $CAJPR= 'Muy Alto';
                        $CAJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($CAJP > 41.8) {
                        $CAJPR= 'Alto';
                        $CAJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($CAJP > 25.1) {
                        $CAJPR= 'Medio';
                        $CAJPC='style="color:rgb(102, 102, 102)"';
                    } elseif ($CAJP > 8.4) {
                        $CAJPR= 'Bajo';
                        $CAJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($CAJP > 0) {
                        $CAJPR= 'Sin Riesgo';
                        $CAJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $CAAO0 = Consolidados::CAAO(conexion::obtener_conexion());
        $CAAO = round($CAAO0, 1, PHP_ROUND_HALF_UP);  
                    if ($CAAO > 75.1) {
                        $CAAOR= 'Muy Alto';
                        $CAAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($CAAO > 66.8) {
                        $CAAOR= 'Alto';
                        $CAAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($CAAO > 50.1) {
                        $CAAOR= 'Medio';
                        $CAAOC='style="color:rgb(102, 102, 102)"';
                    } elseif ($CAAO > 33.4) {
                        $CAAOR= 'Bajo';
                        $CAAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($CAAO > 0) {
                        $CAAOR= 'Sin Riesgo';
                        $CAAOC= 'style="color:rgb(57, 77, 0)"';
                    }
        //DOMINIO Control sobre el trabajo           
        $CT0 = (($CRJP0 + $CJP0 + $PMJP0 + $PDJP0 + $CAJP0)/5);
        $CTJPa = round($CT0, 1, PHP_ROUND_HALF_UP);
                    if ($CTJPa > 40.6) {
                        $CTJPR= 'Muy Alto';
                        $CTJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($CTJPa  > 29.9) {
                        $CTJPR= 'Alto';
                        $CTJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($CTJPa  > 19.1) {
                        $CTJPR= 'Medio';
                        $CTJPC='style="color:rgb(102, 102, 102)"';
                    } elseif ($CTJPa  > 10.8) {
                        $CTJPR= 'Bajo';
                        $CTJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($CTJPa  > 0) {
                        $CTJPR= 'Sin Riesgo';
                        $CTJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $CTb0 = (($CRAO0 + $CAO0 + $PMAO0 + $PDAO0 + $CAAO0)/4);
        $CTAOb = round($CTb0, 1, PHP_ROUND_HALF_UP);                
                    if ($CTAOb > 43.2) {
                        $CTAOR= 'Muy Alto';
                        $CTAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($CTAOb  > 34.8) {
                        $CTAOR= 'Alto';
                        $CTAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($CTAOb  > 26.5) {
                        $CTAOR= 'Medio';
                        $CTAOC='style="color:rgb(102, 102, 102)"';
                    } elseif ($CTAOb  > 19.5) {
                        $CTAOR= 'Bajo';
                        $CTAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($CTAOb  > 0) {
                        $CTAOR= 'Sin Riesgo';
                        $CTAOC= 'style="color:rgb(57, 77, 0)"';
                    }          
                    
        $DAEJP0 = Consolidados::DAEJP(conexion::obtener_conexion());
        $DAEJP = round($DAEJP0, 1, PHP_ROUND_HALF_UP); 
                    if ($DAEJP > 39.7) {
                        $DAEJPR= 'Muy Alto';
                        $DAEJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DAEJP > 31.4) {
                        $DAEJPR= 'Alto';
                         $DAEJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DAEJP > 23) {
                        $DAEJPR= 'Medio';
                        $DAEJPC='style="color:rgb(102, 102, 102)"';
                    } elseif ($DAEJP > 14.7) {
                        $DAEJPR= 'Bajo';
                        $DAEJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DAEJP > 0) {
                        $DAEJPR= 'Sin Riesgo';
                        $DAEJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $DAEAO0 = Consolidados::DAEAO(conexion::obtener_conexion());
        $DAEAO = round($DAEAO0, 1, PHP_ROUND_HALF_UP);  
                     if ($DAEAO > 48) {
                        $DAEAOR= 'Muy Alto';
                        $DAEAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DAEAO > 39.7) {
                        $DAEAOR= 'Alto';
                        $DAEAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DAEAO > 31.4) {
                        $DAEAOR= 'Medio';
                        $DAEAOC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($DAEAO > 23) {
                        $DAEAOR= 'Bajo';
                        $DAEAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DAEAO > 0) {
                        $DAEAOR= 'Sin Riesgo';
                        $DAEAOC= 'style="color:rgb(57, 77, 0)"';
                    }
        $DEJP0 = Consolidados::DEJP(conexion::obtener_conexion());
        $DEJP = round($DEJP0, 1, PHP_ROUND_HALF_UP); 
                    if ($DEJP > 47.3) {
                        $DEJPR= 'Muy Alto';
                        $DEJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DEJP > 33.4) {
                        $DEJPR= 'Alto';
                        $DEJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DEJP > 25.1) {
                        $DEJPR= 'Medio';
                        $DEJPC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($DEJP > 14) {
                        $DEJPR= 'Bajo';
                        $DEJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DEJP > 0) {
                        $DEJPR= 'Sin Riesgo';
                        $DEJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $DEAO0 = Consolidados::DEAO(conexion::obtener_conexion());
        $DEAO = round($DEAO0, 1, PHP_ROUND_HALF_UP);  
                    if ($DEAO > 47.3) {
                        $DEAOR= 'Muy Alto';
                        $DEAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DEAO > 39) {
                        $DEAOR= 'Alto';
                        $DEAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DEAO > 27.9) {
                        $DEAOR= 'Medio';
                        $DEAOC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($DEAO > 19.5) {
                        $DEAOR= 'Bajo';
                        $DEAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DEAO > 0) {
                        $DEAOR= 'Sin Riesgo';
                        $DEAOC= 'style="color:rgb(57, 77, 0)"';
                    }
        $DCJP0 = Consolidados::DCJP(conexion::obtener_conexion());
        $DCJP = round($DCJP0, 1, PHP_ROUND_HALF_UP); 
                    if ($DCJP > 54.3) {
                        $DCJPR= 'Muy Alto';
                        $DCJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DCJP > 45.9) {
                        $DCJPR= 'Alto';
                        $DCJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DCJP > 33.4) {
                        $DCJPR= 'Medio';
                        $DCJPC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($DCJP > 25.1) {
                        $DCJPR= 'Bajo';
                        $DCJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DCJP > 0) {
                        $DCJPR= 'Sin Riesgo';
                        $DCJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $DCAO0 = Consolidados::DCAO(conexion::obtener_conexion());
        $DCAO = round($DCAO0, 1, PHP_ROUND_HALF_UP);  
                if ($DCAO > 50.1) {
                        $DCAOR= 'Muy Alto';
                        $DCAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DCAO > 41.8) {
                        $DCAOR= 'Alto';
                        $DCAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DCAO > 33.4) {
                        $DCAOR= 'Medio';
                        $DCAOC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($DCAO > 16.8) {
                        $DCAOR= 'Bajo';
                        $DCAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DCAO > 0) {
                        $DCAOR= 'Sin Riesgo';
                        $DCAOC= 'style="color:rgb(57, 77, 0)"';
                    }   
        
        $ITJP0 = Consolidados::ITJP(conexion::obtener_conexion());
        $ITJP = round($ITJP0, 1, PHP_ROUND_HALF_UP); 
                   if ($ITJP > 50.1) {
                        $ITJPR= 'Muy Alto';
                        $ITJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($ITJP > 43.9) {
                        $ITJPR= 'Alto';
                        $ITJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($ITJP > 31.4) {
                        $ITJPR= 'Medio';
                        $ITJPC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($ITJP > 18.9) {
                        $ITJPR= 'Bajo';
                        $ITJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($ITJP > 0) {
                        $ITJPR= 'Sin Riesgo';
                        $ITJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $ITAO0 = Consolidados::ITAO(conexion::obtener_conexion());
        $ITAO = round($ITAO0, 1, PHP_ROUND_HALF_UP);  
                    if ($ITAO > 50.1) {
                        $ITAOR= 'Muy Alto';
                        $ITAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($ITAO > 31.4) {
                        $ITAOR= 'Alto';
                        $ITAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($AO > 25.1) {
                        $ITAOR= 'Medio';
                        $ITAOC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($ITAO > 12.6) {
                        $ITAOR= 'Bajo';
                        $ITAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($ITAO > 0) {
                        $ITAOR= 'Sin Riesgo';
                        $ITAOC= 'style="color:rgb(57, 77, 0)"';
                    }     
        $ERJP0 = Consolidados::ERJP(conexion::obtener_conexion());
        $ERJP = round($ERJP0, 1, PHP_ROUND_HALF_UP);            
                    if ($ERJP > 79.3) {
                        $ERJPR= 'Muy Alto';
                        $ERJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($ERJP > 66.8) {
                        $ERJPR= 'Alto';
                        $ERJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($ERJP > 54.3) {
                        $ERJPR= 'Medio';
                        $ERJPC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($ERJP > 37.6) {
                        $ERJPR= 'Bajo';
                        $ERJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($ERJP > 0) {
                        $ERJPR= 'Sin Riesgo';
                        $ERJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        
        $DCMJP0 = Consolidados::DCMJP(conexion::obtener_conexion());
        $DCMJP = round($DCMJP0, 1, PHP_ROUND_HALF_UP);  
                     if ($DCMJP > 90.1) {
                        $DCMJPR= 'Muy Alto';
                        $DCMJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DCMJP > 80.1) {
                        $DCMJPR= 'Alto';
                        $DCMJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DCMJP > 70.1) {
                        $DCMJPR= 'Medio';
                        $DCMJPC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($DCMJP > 60.1) {
                        $DCMJPR= 'Bajo';
                        $DCMJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DCMJP > 0) {
                        $DCMJPR= 'Sin Riesgo';
                        $DCMJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $DCMAO0 = Consolidados::DCMAO(conexion::obtener_conexion());
        $DCMAO = round($DCMAO0, 1, PHP_ROUND_HALF_UP);  
                     if ($DCMAO > 85.1) {
                        $DCMAOR= 'Muy Alto';
                        $DCMAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DCMAO > 75.1) {
                        $DCMAOR= 'Alto';
                        $DCMAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DCMAO > 65.1) {
                        $DCMAOR= 'Medio';
                        $DCMAOC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($DCMAO > 50.1) {
                        $DCMAOR= 'Bajo';
                        $DCMAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DCMAO > 0) {
                        $DCMAOR= 'Sin Riesgo';
                        $DCMAOC= 'style="color:rgb(57, 77, 0)"';
                    }
        
        $CRLJP0 = Consolidados::CRLJP(conexion::obtener_conexion());
        $CRLJP = round($CRLJP0, 1, PHP_ROUND_HALF_UP); 
                    if ($CRLJP > 45.1) {
                        $CRLJPR= 'Muy Alto';
                        $CRLJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($CRLJP > 35.1) {
                        $CRLJPR= 'Alto';
                        $CRLJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($CRLJP > 25.1) {
                        $CRLJPR= 'Medio';
                        $CRLJPC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($CRLJP > 15.1) {
                        $CRLJPR= 'Bajo';
                        $CRLJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($CRLJP > 0) {
                        $CRLJPR= 'Sin Riesgo';
                        $CRLJPC= 'style="color:rgb(57, 77, 0)"';
                    }
                    
        $DJTJP0 = Consolidados::DJTJP(conexion::obtener_conexion());
        $DJTJP = round($DJTJP0, 1, PHP_ROUND_HALF_UP); 
                    if ($DJTJP > 50.1) {
                        $DJTJPR= 'Muy Alto';
                        $DJTJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DJTJP > 33.4) {
                        $DJTJPR= 'Alto';
                        $DJTJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DJTJP > 25.1) {
                        $DJTJPR= 'Medio';
                        $DJTJPC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($DJTJP > 8.4) {
                        $DJTJPR= 'Bajo';
                        $DJTJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DJTJP > 0) {
                        $DJTJPR= 'Sin Riesgo';
                        $DJTJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $DJTAO0 = Consolidados::DJTAO(conexion::obtener_conexion());
        $DJTAO = round($DJTAO0, 1, PHP_ROUND_HALF_UP); 
                   if ($DJTAO > 58.4) {
                        $DJTAOR= 'Muy Alto';
                        $DJTAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DJTAO > 45.9) {
                        $DJTAOR= 'Alto';
                         $DJTAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DJTAO > 37.6) {
                        $DJTAOR= 'Medio';
                        $DJTAOC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($DJTAO > 25.1) {
                        $DJTAOR= 'Bajo';
                        $DJTAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DJTAO > 0) {
                        $DJTAOR= 'Sin Riesgo';
                        $DJTAOC= 'style="color:rgb(57, 77, 0)"';
                    }
         //DOMINIO Demandas del trabajo           
        $DTJP0 = (($DAEJP0 + $DEJP0 + $DCJP0 + $ITJP0 + $ERJP0 + $DCMJP0 + $CRLJP0 + $DJTJP0)/8);
        $DTJPa = round($DTJP0, 1, PHP_ROUND_HALF_UP);
                    if ($DTJPa > 47.6) {
                        $DTJPR= 'Muy Alto';
                        $DTJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DTJPa  > 41.6) {
                        $DTJPR= 'Alto';
                        $DTJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DTJPa  > 35.1) {
                        $DTJPR= 'Medio';
                        $DTJPC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($DTJPa  > 28.6) {
                        $DTJPR= 'Bajo';
                        $DTJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DTJPa  > 0) {
                        $DTJPR= 'Sin Riesgo';
                        $DTJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $DTAO0 = (($DAEAO0 + $DEAO0 + $DCAO0 + $ITAO0 +  $DCMAO0 +  $DJTAO0)/6);
        $DTAOb = round($DTAO0, 1, PHP_ROUND_HALF_UP);
                    if ($DTAOb > 44.3) {
                        $DTAOR= 'Muy Alto';
                        $DTAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($DTAOb  > 37.9) {
                        $DTAOR= 'Alto';
                        $DTAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($DTAOb  > 33.4) {
                        $DTAOR= 'Medio';
                        $DTAOC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($DTAOb  > 27) {
                        $DTAOR= 'Bajo';
                        $DTAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($DTAOb  > 0) {
                        $DTAOR= 'Sin Riesgo';
                        $DTAOC= 'style="color:rgb(57, 77, 0)"';
                    }

        $RPJP0 = Consolidados::RPJP(conexion::obtener_conexion());
        $RPJP = round($RPJP0, 1, PHP_ROUND_HALF_UP); 
                    if ($RPJP > 20.1) {
                        $RPJPR= 'Muy Alto';
                        $RPJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($RPJP > 10.1) {
                        $RPJPR= 'Alto';
                        $RPJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($RPJP > 5.1) {
                        $RPJPR= 'Medio';
                        $RPJPC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($RPJP > 1) {
                        $RPJPR= 'Bajo';
                        $RPJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($RPJP > 0) {
                        $RPJPR= 'Sin Riesgo';
                        $RPJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        
        $RPAO0 = Consolidados::RPAO(conexion::obtener_conexion());
        $RPAO = round($RPAO0, 1, PHP_ROUND_HALF_UP); 
                    if ($RPAO > 18.9) {
                        $RPAOR= 'Muy Alto';
                        $RPAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($RPAO > 12.6) {
                        $RPAOR= 'Alto';
                        $RPAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($RPAO > 6.4) {
                        $RPAOR= 'Medio';
                        $RPAOC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($RPAO > 1) {
                        $RPAOR= 'Bajo';
                        $RPAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($RPAO > 0) {
                        $RPAOR= 'Sin Riesgo';
                        $RPAOC= 'style="color:rgb(57, 77, 0)"';
                    }

        $RYCJP0 = Consolidados::RYCJP(conexion::obtener_conexion());
        $RYCJP = round($RYCJP0, 1, PHP_ROUND_HALF_UP);
                   if ($RYCJP > 37.6) {
                        $RYCJPR= 'Muy Alto';
                        $RYCJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($RYCJP > 25.1) {
                        $RYCJPR= 'Alto';
                         $RYCJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($RYCJP > 16.8) {
                        $RYCJPR= 'Medio';
                        $RYCJPC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($RYCJP > 4.3) {
                        $RYCJPR= 'Bajo';
                        $RYCJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($RYCJP > 0) {
                        $RYCJPR= 'Sin Riesgo';
                        $RYCJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $RYCAO0 = Consolidados::RYCAO(conexion::obtener_conexion());
        $RYCAO = round($RYCAO0, 1, PHP_ROUND_HALF_UP);
                     if ($RYCAO > 37.6) {
                        $RYCAOR= 'Muy Alto';
                        $RYCAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($RYCAO > 25.1) {
                        $RYCAOR= 'Alto';
                        $RYCAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($RYCAO > 12.6) {
                        $RYCAOR= 'Medio';
                        $RYCAOC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($RYCAO > 1) {
                        $RYCAOR= 'Bajo';
                        $RYCAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($RYCAO > 0) {
                        $RYCAOR= 'Sin Riesgo';
                        $RYCAOC= 'style="color:rgb(57, 77, 0)"';
                    }
         //DOMINIO Recompensas           
        $RJP0 = (($RPJP0 + $RYCJP0)/2);
        $RJPa = round($RJP0, 1, PHP_ROUND_HALF_UP);
                    if ($RJPa > 29.6) {
                        $RJPR= 'Muy Alto';
                        $RJPC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($RJPa  > 20.6) {
                        $RJPR= 'Alto';
                        $RJPC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($RJPa  > 11.5) {
                        $RJPR= 'Medio';
                        $RJPC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($RJPa  > 4.6) {
                        $RJPR= 'Bajo';
                        $RJPC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($RJPa  > 0) {
                        $RJPR= 'Sin Riesgo';
                        $RJPC= 'style="color:rgb(57, 77, 0)"';
                    }
        $RAO0 = (($RPAO0 + $RYCAO0)/2);
        $RAOb = round($RAO0, 1, PHP_ROUND_HALF_UP);
                    if ($RAOb > 27.6) {
                        $RAOR= 'Muy Alto';
                        $RAOC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($RAOb > 17.6) {
                        $RAOR= 'Alto';
                        $RAOC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($RAOb  > 10.7) {
                        $RAOR= 'Medio';
                        $RAOC= 'style="color:rgb(102, 102, 102)"';
                    } elseif ($RAOb  > 2.6) {
                        $RAOR= 'Bajo';
                        $RAOC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($RAOb  > 0) {
                        $RAOR= 'Sin Riesgo';
                        $RAOC= 'style="color:rgb(57, 77, 0)"';
                    }
                    
       //Resultado por Grupos Ocupacionales
        $GJ1 = Consolidados::GJ1(conexion::obtener_conexion());
        $GJ2 = Consolidados::GJ2(conexion::obtener_conexion());
        $GJ3 = Consolidados::GJ3(conexion::obtener_conexion());
        $GJ4 = Consolidados::GJ4(conexion::obtener_conexion());
        $GJ5 = Consolidados::GJ5(conexion::obtener_conexion());
        $GP1 = Consolidados::GP1(conexion::obtener_conexion());
        $GP2 = Consolidados::GP2(conexion::obtener_conexion());
        $GP3 = Consolidados::GP3(conexion::obtener_conexion());
        $GP4 = Consolidados::GP4(conexion::obtener_conexion());
        $GP5 = Consolidados::GP5(conexion::obtener_conexion());
        $GA1 = Consolidados::GA1(conexion::obtener_conexion());
        $GA2 = Consolidados::GA2(conexion::obtener_conexion());
        $GA3 = Consolidados::GA3(conexion::obtener_conexion());
        $GA4 = Consolidados::GA4(conexion::obtener_conexion());
        $GA5 = Consolidados::GA5(conexion::obtener_conexion());
        $GO1 = Consolidados::GO1(conexion::obtener_conexion());
        $GO2 = Consolidados::GO2(conexion::obtener_conexion());
        $GO3 = Consolidados::GO3(conexion::obtener_conexion());
        $GO4 = Consolidados::GO4(conexion::obtener_conexion());
        $GO5 = Consolidados::GO5(conexion::obtener_conexion());

        $GJP1 = $GJ1 + $GP1;
        $GJP2 = $GJ2 + $GP2;
        $GJP3 = $GJ3 + $GP3;
        $GJP4 = $GJ4 + $GP4;
        $GJP5 = $GJ5 + $GP5;
        $GJP = $GJP1 + $GJP2 + $GJP3 + $GJP4 + $GJP5;
        if ($GJP1 == 0) {$GJP1_porcentaje = 0;} else {$GJP1_porcentaje = round((($GJP1 * 100) / $GJP), 1, PHP_ROUND_HALF_UP);}
        if ($GJP2 == 0) {$GJP2_porcentaje = 0;} else {$GJP2_porcentaje = round((($GJP2 * 100) / $GJP), 1, PHP_ROUND_HALF_UP);}
        if ($GJP3 == 0) {$GJP3_porcentaje = 0;} else {$GJP3_porcentaje = round((($GJP3 * 100) / $GJP), 1, PHP_ROUND_HALF_UP);}
        if ($GJP4 == 0) {$GJP4_porcentaje = 0;} else {$GJP4_porcentaje = round((($GJP4 * 100) / $GJP), 1, PHP_ROUND_HALF_UP);}
        if ($GJP5 == 0) {$GJP5_porcentaje = 0;} else {$GJP5_porcentaje = round((($GJP5 * 100) / $GJP), 1, PHP_ROUND_HALF_UP);}
        $GAO1 = $GA1+ $GO1;
        $GAO2 = $GA2+ $GO2;
        $GAO3 = $GA3+ $GO3;
        $GAO4 = $GA4+ $GO4;
        $GAO5 = $GA5+ $GO5;
        $GAO = $GAO1 + $GAO2 + $GAO3 + $GAO4 + $GAO5;
        if ($GAO1 == 0) {$GAO1_porcentaje = 0;} else {$GAO1_porcentaje = round((($GAO1 * 100) / $GAO), 1, PHP_ROUND_HALF_UP);}
        if ($GAO2 == 0) {$GAO2_porcentaje = 0;} else {$GAO2_porcentaje = round((($GAO2 * 100) / $GAO), 1, PHP_ROUND_HALF_UP);}
        if ($GAO3 == 0) {$GAO3_porcentaje = 0;} else {$GAO3_porcentaje = round((($GAO3 * 100) / $GAO), 1, PHP_ROUND_HALF_UP);}
        if ($GAO4 == 0) {$GAO4_porcentaje = 0;} else {$GAO4_porcentaje = round((($GAO4 * 100) / $GAO), 1, PHP_ROUND_HALF_UP);}
        if ($GAO5 == 0) {$GAO5_porcentaje = 0;} else {$GAO5_porcentaje = round((($GAO5 * 100) / $GAO), 1, PHP_ROUND_HALF_UP);}
        $GJPAO = $GJP + $GAO;
        $LRJ1 = Consolidados::LRJ1(conexion::obtener_conexion());
        $LRJ2 = Consolidados::LRJ2(conexion::obtener_conexion());
        $LRJ3 = Consolidados::LRJ3(conexion::obtener_conexion());
        $LRJ4 = Consolidados::LRJ4(conexion::obtener_conexion());
        $LRJ5 = Consolidados::LRJ5(conexion::obtener_conexion());
        $LRP1 = Consolidados::LRP1(conexion::obtener_conexion());
        $LRP2 = Consolidados::LRP2(conexion::obtener_conexion());
        $LRP3 = Consolidados::LRP3(conexion::obtener_conexion());
        $LRP4 = Consolidados::LRP4(conexion::obtener_conexion());
        $LRP5 = Consolidados::LRP5(conexion::obtener_conexion());
        $LRJP1 = $LRJ1 + $LRP1;
        $LRJP2 = $LRJ2 + $LRP2;
        $LRJP3 = $LRJ3 + $LRP3;
        $LRJP4 = $LRJ4 + $LRP4;
        $LRJP5 = $LRJ5 + $LRP5;
        $LRJP = $LRJP1 + $LRJP2 + $LRJP3 + $LRJP4 + $LRJP5;
        if ($LRJP1 == 0) {$LRJP1_porcentaje = 0;} else {$LRJP1_porcentaje = round((($LRJP1 * 100) / $LRJP), 1, PHP_ROUND_HALF_UP);}
        if ($LRJP2 == 0) {$LRJP2_porcentaje = 0;} else {$LRJP2_porcentaje = round((($LRJP2 * 100) / $LRJP), 1, PHP_ROUND_HALF_UP);}
        if ($LRJP3 == 0) {$LRJP3_porcentaje = 0;} else {$LRJP3_porcentaje = round((($LRJP3 * 100) / $LRJP), 1, PHP_ROUND_HALF_UP);}
        if ($LRJP4 == 0) {$LRJP4_porcentaje = 0;} else {$LRJP4_porcentaje = round((($LRJP4 * 100) / $LRJP), 1, PHP_ROUND_HALF_UP);}
        if ($LRJP5 == 0) {$LRJP5_porcentaje = 0;} else {$LRJP5_porcentaje = round((($LRJP5 * 100) / $LRJP), 1, PHP_ROUND_HALF_UP);}
        $CTJ1 = Consolidados::CTJ1(conexion::obtener_conexion());
        $CTJ2 = Consolidados::CTJ2(conexion::obtener_conexion());
        $CTJ3 = Consolidados::CTJ3(conexion::obtener_conexion());
        $CTJ4 = Consolidados::CTJ4(conexion::obtener_conexion());
        $CTJ5 = Consolidados::CTJ5(conexion::obtener_conexion());
        $CTP1 = Consolidados::CTP1(conexion::obtener_conexion());
        $CTP2 = Consolidados::CTP2(conexion::obtener_conexion());
        $CTP3 = Consolidados::CTP3(conexion::obtener_conexion());
        $CTP4 = Consolidados::CTP4(conexion::obtener_conexion());
        $CTP5 = Consolidados::CTP5(conexion::obtener_conexion());
        $CTJP1 = $CTJ1 + $CTP1;
        $CTJP2 = $CTJ2 + $CTP2;
        $CTJP3 = $CTJ3 + $CTP3;
        $CTJP4 = $CTJ4 + $CTP4;
        $CTJP5 = $CTJ5 + $CTP5;
        $CTJP = $CTJP1 + $CTJP2 + $CTJP3 + $CTJP4 + $CTJP5;
        if ($CTJP1 == 0) {$CTJP1_porcentaje = 0;} else {$CTJP1_porcentaje = round((($CTJP1 * 100) / $CTJP), 1, PHP_ROUND_HALF_UP);}
        if ($CTJP2 == 0) {$CTJP2_porcentaje = 0;} else {$CTJP2_porcentaje = round((($CTJP2 * 100) / $CTJP), 1, PHP_ROUND_HALF_UP);}
        if ($CTJP3 == 0) {$CTJP3_porcentaje = 0;} else {$CTJP3_porcentaje = round((($CTJP3 * 100) / $CTJP), 1, PHP_ROUND_HALF_UP);}
        if ($CTJP4 == 0) {$CTJP4_porcentaje = 0;} else {$CTJP4_porcentaje = round((($CTJP4 * 100) / $CTJP), 1, PHP_ROUND_HALF_UP);}
        if ($CTJP5 == 0) {$CTJP5_porcentaje = 0;} else {$CTJP5_porcentaje = round((($CTJP5 * 100) / $CTJP), 1, PHP_ROUND_HALF_UP);}
        $DTJ1 = Consolidados::DTJ1(conexion::obtener_conexion());
        $DTJ2 = Consolidados::DTJ2(conexion::obtener_conexion());
        $DTJ3 = Consolidados::DTJ3(conexion::obtener_conexion());
        $DTJ4 = Consolidados::DTJ4(conexion::obtener_conexion());
        $DTJ5 = Consolidados::DTJ5(conexion::obtener_conexion());
        $DTP1 = Consolidados::DTP1(conexion::obtener_conexion());
        $DTP2 = Consolidados::DTP2(conexion::obtener_conexion());
        $DTP3 = Consolidados::DTP3(conexion::obtener_conexion());
        $DTP4 = Consolidados::DTP4(conexion::obtener_conexion());
        $DTP5 = Consolidados::DTP5(conexion::obtener_conexion());
        $DTJP1 = $DTJ1 + $DTP1;
        $DTJP2 = $DTJ2 + $DTP2;
        $DTJP3 = $DTJ3 + $DTP3;
        $DTJP4 = $DTJ4 + $DTP4;
        $DTJP5 = $DTJ5 + $DTP5;
        $DTJP = $DTJP1 + $DTJP2 + $DTJP3 + $DTJP4 + $DTJP5;
        if ($DTJP1 == 0) {$DTJP1_porcentaje = 0;} else {$DTJP1_porcentaje = round((($DTJP1 * 100) / $DTJP), 1, PHP_ROUND_HALF_UP);}
        if ($DTJP2 == 0) {$DTJP2_porcentaje = 0;} else {$DTJP2_porcentaje = round((($DTJP2 * 100) / $DTJP), 1, PHP_ROUND_HALF_UP);}
        if ($DTJP3 == 0) {$DTJP3_porcentaje = 0;} else {$DTJP3_porcentaje = round((($DTJP3 * 100) / $DTJP), 1, PHP_ROUND_HALF_UP);}
        if ($DTJP4 == 0) {$DTJP4_porcentaje = 0;} else {$DTJP4_porcentaje = round((($DTJP4 * 100) / $DTJP), 1, PHP_ROUND_HALF_UP);}
        if ($DTJP5 == 0) {$DTJP5_porcentaje = 0;} else {$DTJP5_porcentaje = round((($DTJP5 * 100) / $DTJP), 1, PHP_ROUND_HALF_UP);}
        $RJ1 = Consolidados::RJ1(conexion::obtener_conexion());
        $RJ2 = Consolidados::RJ2(conexion::obtener_conexion());
        $RJ3 = Consolidados::RJ3(conexion::obtener_conexion());
        $RJ4 = Consolidados::RJ4(conexion::obtener_conexion());
        $RJ5 = Consolidados::RJ5(conexion::obtener_conexion());
        $RP1 = Consolidados::RP1(conexion::obtener_conexion());
        $RP2 = Consolidados::RP2(conexion::obtener_conexion());
        $RP3 = Consolidados::RP3(conexion::obtener_conexion());
        $RP4 = Consolidados::RP4(conexion::obtener_conexion());
        $RP5 = Consolidados::RP5(conexion::obtener_conexion());
        $RJP1 = $RJ1 + $RP1;
        $RJP2 = $RJ2 + $RP2;
        $RJP3 = $RJ3 + $RP3;
        $RJP4 = $RJ4 + $RP4;
        $RJP5 = $RJ5 + $RP5;
        $RJP = $RJP1 + $RJP2 + $RJP3 + $RJP4 + $RJP5;
        if ($RJP1 == 0) {$RJP1_porcentaje = 0;} else {$RJP1_porcentaje = round((($RJP1 * 100) / $RJP), 1, PHP_ROUND_HALF_UP);}
        if ($RJP2 == 0) {$RJP2_porcentaje = 0;} else {$RJP2_porcentaje = round((($RJP2 * 100) / $RJP), 1, PHP_ROUND_HALF_UP);}
        if ($RJP3 == 0) {$RJP3_porcentaje = 0;} else {$RJP3_porcentaje = round((($RJP3 * 100) / $RJP), 1, PHP_ROUND_HALF_UP);}
        if ($RJP4 == 0) {$RJP4_porcentaje = 0;} else {$RJP4_porcentaje = round((($RJP4 * 100) / $RJP), 1, PHP_ROUND_HALF_UP);}
        if ($RJP5 == 0) {$RJP5_porcentaje = 0;} else {$RJP5_porcentaje = round((($RJP5 * 100) / $RJP), 1, PHP_ROUND_HALF_UP);}
        $LRA1 = Consolidados::LRA1(conexion::obtener_conexion());
        $LRA2 = Consolidados::LRA2(conexion::obtener_conexion());
        $LRA3 = Consolidados::LRA3(conexion::obtener_conexion());
        $LRA4 = Consolidados::LRA4(conexion::obtener_conexion());
        $LRA5 = Consolidados::LRA5(conexion::obtener_conexion());
        $LRO1 = Consolidados::LRO1(conexion::obtener_conexion());
        $LRO2 = Consolidados::LRO2(conexion::obtener_conexion());
        $LRO3 = Consolidados::LRO3(conexion::obtener_conexion());
        $LRO4 = Consolidados::LRO4(conexion::obtener_conexion());
        $LRO5 = Consolidados::LRO5(conexion::obtener_conexion());
        $LRAO1 = $LRA1 + $LRO1;
        $LRAO2 = $LRA2 + $LRO2;
        $LRAO3 = $LRA3 + $LRO3;
        $LRAO4 = $LRA4 + $LRO4;
        $LRAO5 = $LRA5 + $LRO5;
        $LRAO = $LRAO1 + $LRAO2 + $LRAO3 + $LRAO4 + $LRAO5;
        if ($LRAO1 == 0) {$LRAO1_porcentaje = 0;} else {$LRAO1_porcentaje = round((($LRAO1 * 100) / $LRAO), 1, PHP_ROUND_HALF_UP);}
        if ($LRAO2 == 0) {$LRAO2_porcentaje = 0;} else {$LRAO2_porcentaje = round((($LRAO2 * 100) / $LRAO), 1, PHP_ROUND_HALF_UP);}
        if ($LRAO3 == 0) {$LRAO3_porcentaje = 0;} else {$LRAO3_porcentaje = round((($LRAO3 * 100) / $LRAO), 1, PHP_ROUND_HALF_UP);}
        if ($LRAO4 == 0) {$LRAO4_porcentaje = 0;} else {$LRAO4_porcentaje = round((($LRAO4 * 100) / $LRAO), 1, PHP_ROUND_HALF_UP);}
        if ($LRAO5 == 0) {$LRAO5_porcentaje = 0;} else {$LRAO5_porcentaje = round((($LRAO5 * 100) / $LRAO), 1, PHP_ROUND_HALF_UP);}
        $CTA1 = Consolidados::CTA1(conexion::obtener_conexion());
        $CTA2 = Consolidados::CTA2(conexion::obtener_conexion());
        $CTA3 = Consolidados::CTA3(conexion::obtener_conexion());
        $CTA4 = Consolidados::CTA4(conexion::obtener_conexion());
        $CTA5 = Consolidados::CTA5(conexion::obtener_conexion());
        $CTO1 = Consolidados::CTO1(conexion::obtener_conexion());
        $CTO2 = Consolidados::CTO2(conexion::obtener_conexion());
        $CTO3 = Consolidados::CTO3(conexion::obtener_conexion());
        $CTO4 = Consolidados::CTO4(conexion::obtener_conexion());
        $CTO5 = Consolidados::CTO5(conexion::obtener_conexion());
        $CTAO1 = $CTA1 + $CTO1;
        $CTAO2 = $CTA2 + $CTO2;
        $CTAO3 = $CTA3 + $CTO3;
        $CTAO4 = $CTA4 + $CTO4;
        $CTAO5 = $CTA5 + $CTO5;
        $CTAO = $CTAO1 + $CTAO2 + $CTAO3 + $CTAO4 + $CTAO5;
        if ($CTAO1 == 0) {$CTAO1_porcentaje = 0;} else {$CTAO1_porcentaje = round((($CTAO1 * 100) / $CTAO), 1, PHP_ROUND_HALF_UP);}
        if ($CTAO2 == 0) {$CTAO2_porcentaje = 0;} else {$CTAO2_porcentaje = round((($CTAO2 * 100) / $CTAO), 1, PHP_ROUND_HALF_UP);}
        if ($CTAO3 == 0) {$CTAO3_porcentaje = 0;} else {$CTAO3_porcentaje = round((($CTAO3 * 100) / $CTAO), 1, PHP_ROUND_HALF_UP);}
        if ($CTAO4 == 0) {$CTAO4_porcentaje = 0;} else {$CTAO4_porcentaje = round((($CTAO4 * 100) / $CTAO), 1, PHP_ROUND_HALF_UP);}
        if ($CTAO5 == 0) {$CTAO5_porcentaje = 0;} else {$CTAO5_porcentaje = round((($CTAO5 * 100) / $CTAO), 1, PHP_ROUND_HALF_UP);}
        $DTA1 = Consolidados::DTA1(conexion::obtener_conexion());
        $DTA2 = Consolidados::DTA2(conexion::obtener_conexion());
        $DTA3 = Consolidados::DTA3(conexion::obtener_conexion());
        $DTA4 = Consolidados::DTA4(conexion::obtener_conexion());
        $DTA5 = Consolidados::DTA5(conexion::obtener_conexion());
        $DTO1 = Consolidados::DTO1(conexion::obtener_conexion());
        $DTO2 = Consolidados::DTO2(conexion::obtener_conexion());
        $DTO3 = Consolidados::DTO3(conexion::obtener_conexion());
        $DTO4 = Consolidados::DTO4(conexion::obtener_conexion());
        $DTO5 = Consolidados::DTO5(conexion::obtener_conexion());
        $DTAO1 = $DTA1 + $DTO1;
        $DTAO2 = $DTA2 + $DTO2;
        $DTAO3 = $DTA3 + $DTO3;
        $DTAO4 = $DTA4 + $DTO4;
        $DTAO5 = $DTA5 + $DTO5;
        $DTAO = $DTAO1 + $DTAO2 + $DTAO3 + $DTAO4 + $DTAO5;
        if ($DTAO1 == 0) {$DTAO1_porcentaje = 0;} else {$DTAO1_porcentaje = round((($DTAO1 * 100) / $DTAO), 1, PHP_ROUND_HALF_UP);}
        if ($DTAO2 == 0) {$DTAO2_porcentaje = 0;} else {$DTAO2_porcentaje = round((($DTAO2 * 100) / $DTAO), 1, PHP_ROUND_HALF_UP);}
        if ($DTAO3 == 0) {$DTAO3_porcentaje = 0;} else {$DTAO3_porcentaje = round((($DTAO3 * 100) / $DTAO), 1, PHP_ROUND_HALF_UP);}
        if ($DTAO4 == 0) {$DTAO4_porcentaje = 0;} else {$DTAO4_porcentaje = round((($DTAO4 * 100) / $DTAO), 1, PHP_ROUND_HALF_UP);}
        if ($DTAO5 == 0) {$DTAO5_porcentaje = 0;} else {$DTAO5_porcentaje = round((($DTAO5 * 100) / $DTAO), 1, PHP_ROUND_HALF_UP);}
        $RA1 = Consolidados::RA1(conexion::obtener_conexion());
        $RA2 = Consolidados::RA2(conexion::obtener_conexion());
        $RA3 = Consolidados::RA3(conexion::obtener_conexion());
        $RA4 = Consolidados::RA4(conexion::obtener_conexion());
        $RA5 = Consolidados::RA5(conexion::obtener_conexion());
        $RO1 = Consolidados::RO1(conexion::obtener_conexion());
        $RO2 = Consolidados::RO2(conexion::obtener_conexion());
        $RO3 = Consolidados::RO3(conexion::obtener_conexion());
        $RO4 = Consolidados::RO4(conexion::obtener_conexion());
        $RO5 = Consolidados::RO5(conexion::obtener_conexion());
        $RAO1 = $RA1 + $RO1;
        $RAO2 = $RA2 + $RO2;
        $RAO3 = $RA3 + $RO3;
        $RAO4 = $RA4 + $RO4;
        $RAO5 = $RA5 + $RO5;
        $RAO = $RAO1 + $RAO2 + $RAO3 + $RAO4 + $RAO5;
        if ($RAO1 == 0) {$RAO1_porcentaje = 0;} else {$RAO1_porcentaje = round((($RAO1 * 100) / $RAO), 1, PHP_ROUND_HALF_UP);}
        if ($RAO2 == 0) {$RAO2_porcentaje = 0;} else {$RAO2_porcentaje = round((($RAO2 * 100) / $RAO), 1, PHP_ROUND_HALF_UP);}
        if ($RAO3 == 0) {$RAO3_porcentaje = 0;} else {$RAO3_porcentaje = round((($RAO3 * 100) / $RAO), 1, PHP_ROUND_HALF_UP);}
        if ($RAO4 == 0) {$RAO4_porcentaje = 0;} else {$RAO4_porcentaje = round((($RAO4 * 100) / $RAO), 1, PHP_ROUND_HALF_UP);}
        if ($RAO5 == 0) {$RAO5_porcentaje = 0;} else {$RAO5_porcentaje = round((($RAO5 * 100) / $RAO), 1, PHP_ROUND_HALF_UP);}
        //Resultado General
        $GTA1 = Consolidados::GTA1(conexion::obtener_conexion());
        $GTA2 = Consolidados::GTA2(conexion::obtener_conexion());
        $GTA3 = Consolidados::GTA3(conexion::obtener_conexion());
        $GTA4 = Consolidados::GTA4(conexion::obtener_conexion());
        $GTA5 = Consolidados::GTA5(conexion::obtener_conexion());
        $GTB1 = Consolidados::GTB1(conexion::obtener_conexion());
        $GTB2 = Consolidados::GTB2(conexion::obtener_conexion());
        $GTB3 = Consolidados::GTB3(conexion::obtener_conexion());
        $GTB4 = Consolidados::GTB4(conexion::obtener_conexion());
        $GTB5 = Consolidados::GTB5(conexion::obtener_conexion());
        $GT1 = $GTA1 + $GTB1;
        $GT2 = $GTA2 + $GTB2;
        $GT3 = $GTA3 + $GTB3;
        $GT4 = $GTA4 + $GTB4;
        $GT5 = $GTA5 + $GTB5;
        $GT = $GT1 + $GT2 + $GT3 + $GT4 + $GT5;
        if ($GT1 == 0) {$GT1_porcentaje = 0;} else {$GT1_porcentaje = round((($GT1 * 100) / $GT), 1, PHP_ROUND_HALF_UP);}
        if ($GT2 == 0) {$GT2_porcentaje = 0;} else {$GT2_porcentaje = round((($GT2 * 100) / $GT), 1, PHP_ROUND_HALF_UP);}
        if ($GT3 == 0) {$GT3_porcentaje = 0;} else {$GT3_porcentaje = round((($GT3 * 100) / $GT), 1, PHP_ROUND_HALF_UP);}
        if ($GT4 == 0) {$GT4_porcentaje = 0;} else {$GT4_porcentaje = round((($GT4 * 100) / $GT), 1, PHP_ROUND_HALF_UP);}
        if ($GT5 == 0) {$GT5_porcentaje = 0;} else {$GT5_porcentaje = round((($GT5 * 100) / $GT), 1, PHP_ROUND_HALF_UP);}
      
        $LRJ1 = Consolidados::LRJ1(conexion::obtener_conexion());
        $LRJ2 = Consolidados::LRJ2(conexion::obtener_conexion());
        $LRJ3 = Consolidados::LRJ3(conexion::obtener_conexion());
        $LRJ4 = Consolidados::LRJ4(conexion::obtener_conexion());
        $LRJ5 = Consolidados::LRJ5(conexion::obtener_conexion());
        $LRJ = $LRJ1 + $LRJ2 + $LRJ3 + $LRJ4 + $LRJ5;
        if ($LRJ1 == 0) {$LRJ1_porcentaje = 0;} else {$LRJ1_porcentaje = round((($LRJ1 * 100) / $LRJ), 1, PHP_ROUND_HALF_UP);}
        if ($LRJ2 == 0) {$LRJ2_porcentaje = 0;} else {$LRJ2_porcentaje = round((($LRJ2 * 100) / $LRJ), 1, PHP_ROUND_HALF_UP);}
        if ($LRJ3 == 0) {$LRJ3_porcentaje = 0;} else {$LRJ3_porcentaje = round((($LRJ3 * 100) / $LRJ), 1, PHP_ROUND_HALF_UP);}
        if ($LRJ4 == 0) {$LRJ4_porcentaje = 0;} else {$LRJ4_porcentaje = round((($LRJ4 * 100) / $LRJ), 1, PHP_ROUND_HALF_UP);}
        if ($LRJ5 == 0) {$LRJ5_porcentaje = 0;} else {$LRJ5_porcentaje = round((($LRJ5 * 100) / $LRJ), 1, PHP_ROUND_HALF_UP);}
        $LRP1 = Consolidados::LRP1(conexion::obtener_conexion());
        $LRP2 = Consolidados::LRP2(conexion::obtener_conexion());
        $LRP3 = Consolidados::LRP3(conexion::obtener_conexion());
        $LRP4 = Consolidados::LRP4(conexion::obtener_conexion());
        $LRP5 = Consolidados::LRP5(conexion::obtener_conexion());
        $LRP = $LRP1 + $LRP2 + $LRP3 + $LRP4 + $LRP5;
        if ($LRP1 == 0) {$LRP1_porcentaje = 0;} else { $LRP1_porcentaje = round((($LRP1 * 100) / $LRP), 1, PHP_ROUND_HALF_UP);}
        if ($LRP2 == 0) {$LRP2_porcentaje = 0;} else { $LRP2_porcentaje = round((($LRP2 * 100) / $LRP), 1, PHP_ROUND_HALF_UP);}
        if ($LRP3 == 0) {$LRP3_porcentaje = 0;} else { $LRP3_porcentaje = round((($LRP3 * 100) / $LRP), 1, PHP_ROUND_HALF_UP);}
        if ($LRP4 == 0) {$LRP4_porcentaje = 0;} else { $LRP4_porcentaje = round((($LRP4 * 100) / $LRP), 1, PHP_ROUND_HALF_UP);}
        if ($LRP5 == 0) {$LRP5_porcentaje = 0;} else { $LRP5_porcentaje = round((($LRP5 * 100) / $LRP), 1, PHP_ROUND_HALF_UP);}
        $LRA1 = Consolidados::LRA1(conexion::obtener_conexion());
        $LRA2 = Consolidados::LRA2(conexion::obtener_conexion());
        $LRA3 = Consolidados::LRA3(conexion::obtener_conexion());
        $LRA4 = Consolidados::LRA4(conexion::obtener_conexion());
        $LRA5 = Consolidados::LRA5(conexion::obtener_conexion());
        $LRA = $LRA1 + $LRA2 + $LRA3 + $LRA4 + $LRA5;
        if ($LRA1 == 0) {$LRA1_porcentaje = 0;} else {$LRA1_porcentaje = round((($LRA1 * 100) / $LRA), 1, PHP_ROUND_HALF_UP);}
        if ($LRA2 == 0) {$LRA2_porcentaje = 0;} else {$LRA2_porcentaje = round((($LRA2 * 100) / $LRA), 1, PHP_ROUND_HALF_UP);}
        if ($LRA3 == 0) {$LRA3_porcentaje = 0;} else {$LRA3_porcentaje = round((($LRA3 * 100) / $LRA), 1, PHP_ROUND_HALF_UP);}
        if ($LRA4 == 0) {$LRA4_porcentaje = 0;} else {$LRA4_porcentaje = round((($LRA4 * 100) / $LRA), 1, PHP_ROUND_HALF_UP);}
        if ($LRA5 == 0) {$LRA5_porcentaje = 0;} else {$LRA5_porcentaje = round((($LRA5 * 100) / $LRA), 1, PHP_ROUND_HALF_UP);}
        $LRO1 = Consolidados::LRO1(conexion::obtener_conexion());
        $LRO2 = Consolidados::LRO2(conexion::obtener_conexion());
        $LRO3 = Consolidados::LRO3(conexion::obtener_conexion());
        $LRO4 = Consolidados::LRO4(conexion::obtener_conexion());
        $LRO5 = Consolidados::LRO5(conexion::obtener_conexion());
        $LRO = $LRO1 + $LRO2 + $LRO3 + $LRO4 + $LRO5;
        if ($LRO1 == 0) {$LRO1_porcentaje = 0;} else {$LRO1_porcentaje = round((($LRO1 * 100) / $LRO), 1, PHP_ROUND_HALF_UP);}
        if ($LRO2 == 0) {$LRO2_porcentaje = 0;} else {$LRO2_porcentaje = round((($LRO2 * 100) / $LRO), 1, PHP_ROUND_HALF_UP);}
        if ($LRO3 == 0) {$LRO3_porcentaje = 0;} else {$LRO3_porcentaje = round((($LRO3 * 100) / $LRO), 1, PHP_ROUND_HALF_UP);}
        if ($LRO4 == 0) {$LRO4_porcentaje = 0;} else {$LRO4_porcentaje = round((($LRO4 * 100) / $LRO), 1, PHP_ROUND_HALF_UP);}
        if ($LRO5 == 0) {$LRO5_porcentaje = 0;} else {$LRO5_porcentaje = round((($LRO5 * 100) / $LRO), 1, PHP_ROUND_HALF_UP);}
        $CTJ1 = Consolidados::CTJ1(conexion::obtener_conexion());
        $CTJ2 = Consolidados::CTJ2(conexion::obtener_conexion());
        $CTJ3 = Consolidados::CTJ3(conexion::obtener_conexion());
        $CTJ4 = Consolidados::CTJ4(conexion::obtener_conexion());
        $CTJ5 = Consolidados::CTJ5(conexion::obtener_conexion());
        $CTJ = $CTJ1 + $CTJ2 + $CTJ3 + $CTJ4 + $CTJ5;
        if ($CTJ1 == 0) {$CTJ1_porcentaje = 0;} else {$CTJ1_porcentaje = round((($CTJ1 * 100) / $CTJ), 1, PHP_ROUND_HALF_UP);}
        if ($CTJ2 == 0) {$CTJ2_porcentaje = 0;} else {$CTJ2_porcentaje = round((($CTJ2 * 100) / $CTJ), 1, PHP_ROUND_HALF_UP);}
        if ($CTJ3 == 0) {$CTJ3_porcentaje = 0;} else {$CTJ3_porcentaje = round((($CTJ3 * 100) / $CTJ), 1, PHP_ROUND_HALF_UP);}
        if ($CTJ4 == 0) {$CTJ4_porcentaje = 0;} else {$CTJ4_porcentaje = round((($CTJ4 * 100) / $CTJ), 1, PHP_ROUND_HALF_UP);}
        if ($CTJ5 == 0) {$CTJ5_porcentaje = 0;} else {$CTJ5_porcentaje = round((($CTJ5 * 100) / $CTJ), 1, PHP_ROUND_HALF_UP);}
        $CTP1 = Consolidados::CTP1(conexion::obtener_conexion());
        $CTP2 = Consolidados::CTP2(conexion::obtener_conexion());
        $CTP3 = Consolidados::CTP3(conexion::obtener_conexion());
        $CTP4 = Consolidados::CTP4(conexion::obtener_conexion());
        $CTP5 = Consolidados::CTP5(conexion::obtener_conexion());
        $CTP = $CTP1 + $CTP2 + $CTP3 + $CTP4 + $CTP5;
        if ($CTP1 == 0) {$CTP1_porcentaje = 0;} else {$CTP1_porcentaje = round((($CTP1 * 100) / $CTP), 1, PHP_ROUND_HALF_UP);}
        if ($CTP2 == 0) {$CTP2_porcentaje = 0;} else {$CTP2_porcentaje = round((($CTP2 * 100) / $CTP), 1, PHP_ROUND_HALF_UP);}
        if ($CTP3 == 0) {$CTP3_porcentaje = 0;} else {$CTP3_porcentaje = round((($CTP3 * 100) / $CTP), 1, PHP_ROUND_HALF_UP);}
        if ($CTP4 == 0) {$CTP4_porcentaje = 0;} else {$CTP4_porcentaje = round((($CTP4 * 100) / $CTP), 1, PHP_ROUND_HALF_UP);}
        if ($CTP5 == 0) {$CTP5_porcentaje = 0;} else {$CTP5_porcentaje = round((($CTP5 * 100) / $CTP), 1, PHP_ROUND_HALF_UP);}
        $CTA1 = Consolidados::CTA1(conexion::obtener_conexion());
        $CTA2 = Consolidados::CTA2(conexion::obtener_conexion());
        $CTA3 = Consolidados::CTA3(conexion::obtener_conexion());
        $CTA4 = Consolidados::CTA4(conexion::obtener_conexion());
        $CTA5 = Consolidados::CTA5(conexion::obtener_conexion());
        $CTA = $CTA1 + $CTA2 + $CTA3 + $CTA4 + $CTA5;
        if ($CTA1 == 0) {$CTA1_porcentaje = 0;} else {$CTA1_porcentaje = round((($CTA1 * 100) / $CTA), 1, PHP_ROUND_HALF_UP);}
        if ($CTA2 == 0) {$CTA2_porcentaje = 0;} else {$CTA2_porcentaje = round((($CTA2 * 100) / $CTA), 1, PHP_ROUND_HALF_UP);}
        if ($CTA3 == 0) {$CTA3_porcentaje = 0;} else {$CTA3_porcentaje = round((($CTA3 * 100) / $CTA), 1, PHP_ROUND_HALF_UP);}
        if ($CTA4 == 0) {$CTA4_porcentaje = 0;} else {$CTA4_porcentaje = round((($CTA4 * 100) / $CTA), 1, PHP_ROUND_HALF_UP);}
        if ($CTA5 == 0) {$CTA5_porcentaje = 0;} else {$CTA5_porcentaje = round((($CTA5 * 100) / $CTA), 1, PHP_ROUND_HALF_UP);}
        $CTO1 = Consolidados::CTO1(conexion::obtener_conexion());
        $CTO2 = Consolidados::CTO2(conexion::obtener_conexion());
        $CTO3 = Consolidados::CTO3(conexion::obtener_conexion());
        $CTO4 = Consolidados::CTO4(conexion::obtener_conexion());
        $CTO5 = Consolidados::CTO5(conexion::obtener_conexion());
        $CTO = $CTO1 + $CTO2 + $CTO3 + $CTO4 + $CTO5;
        if ($CTO1 == 0) {$CTO1_porcentaje = 0;} else {$CTO1_porcentaje = round((($CTO1 * 100) / $CTO), 1, PHP_ROUND_HALF_UP);}
        if ($CTO2 == 0) {$CTO2_porcentaje = 0;} else {$CTO2_porcentaje = round((($CTO2 * 100) / $CTO), 1, PHP_ROUND_HALF_UP);}
        if ($CTO3 == 0) {$CTO3_porcentaje = 0;} else {$CTO3_porcentaje = round((($CTO3 * 100) / $CTO), 1, PHP_ROUND_HALF_UP);}
        if ($CTO4 == 0) {$CTO4_porcentaje = 0;} else {$CTO4_porcentaje = round((($CTO4 * 100) / $CTO), 1, PHP_ROUND_HALF_UP);}
        if ($CTO5 == 0) {$CTO5_porcentaje = 0;} else {$CTO5_porcentaje = round((($CTO5 * 100) / $CTO), 1, PHP_ROUND_HALF_UP);}
        $DTJ1 = Consolidados::DTJ1(conexion::obtener_conexion());
        $DTJ2 = Consolidados::DTJ2(conexion::obtener_conexion());
        $DTJ3 = Consolidados::DTJ3(conexion::obtener_conexion());
        $DTJ4 = Consolidados::DTJ4(conexion::obtener_conexion());
        $DTJ5 = Consolidados::DTJ5(conexion::obtener_conexion());
        $DTJ = $DTJ1 + $DTJ2 + $DTJ3 + $DTJ4 + $DTJ5;
        if ($DTJ1 == 0) {$DTJ1_porcentaje = 0;} else {$DTJ1_porcentaje = round((($DTJ1 * 100) / $DTJ), 1, PHP_ROUND_HALF_UP);}
        if ($DTJ2 == 0) {$DTJ2_porcentaje = 0;} else {$DTJ2_porcentaje = round((($DTJ2 * 100) / $DTJ), 1, PHP_ROUND_HALF_UP);}
        if ($DTJ3 == 0) {$DTJ3_porcentaje = 0;} else {$DTJ3_porcentaje = round((($DTJ3 * 100) / $DTJ), 1, PHP_ROUND_HALF_UP);}
        if ($DTJ4 == 0) {$DTJ4_porcentaje = 0;} else {$DTJ4_porcentaje = round((($DTJ4 * 100) / $DTJ), 1, PHP_ROUND_HALF_UP);}
        if ($DTJ5 == 0) {$DTJ5_porcentaje = 0;} else {$DTJ5_porcentaje = round((($DTJ5 * 100) / $DTJ), 1, PHP_ROUND_HALF_UP);}
        $DTP1 = Consolidados::DTP1(conexion::obtener_conexion());
        $DTP2 = Consolidados::DTP2(conexion::obtener_conexion());
        $DTP3 = Consolidados::DTP3(conexion::obtener_conexion());
        $DTP4 = Consolidados::DTP4(conexion::obtener_conexion());
        $DTP5 = Consolidados::DTP5(conexion::obtener_conexion());
        $DTP = $DTP1 + $DTP2 + $DTP3 + $DTP4 + $DTP5;
        if ($DTP1 == 0) {$DTP1_porcentaje = 0;} else {$DTP1_porcentaje = round((($DTP1 * 100) / $DTP), 1, PHP_ROUND_HALF_UP);}
        if ($DTP2 == 0) {$DTP2_porcentaje = 0;} else {$DTP2_porcentaje = round((($DTP2 * 100) / $DTP), 1, PHP_ROUND_HALF_UP);}
        if ($DTP3 == 0) {$DTP3_porcentaje = 0;} else {$DTP3_porcentaje = round((($DTP3 * 100) / $DTP), 1, PHP_ROUND_HALF_UP);}
        if ($DTP4 == 0) {$DTP4_porcentaje = 0;} else {$DTP4_porcentaje = round((($DTP4 * 100) / $DTP), 1, PHP_ROUND_HALF_UP);}
        if ($DTP5 == 0) {$DTP5_porcentaje = 0;} else {$DTP5_porcentaje = round((($DTP5 * 100) / $DTP), 1, PHP_ROUND_HALF_UP);}
        $DTA1 = Consolidados::DTA1(conexion::obtener_conexion());
        $DTA2 = Consolidados::DTA2(conexion::obtener_conexion());
        $DTA3 = Consolidados::DTA3(conexion::obtener_conexion());
        $DTA4 = Consolidados::DTA4(conexion::obtener_conexion());
        $DTA5 = Consolidados::DTA5(conexion::obtener_conexion());
        $DTA = $DTA1 + $DTA2 + $DTA3 + $DTA4 + $DTA5;
        if ($DTA1 == 0) {$DTA1_porcentaje = 0;} else {$DTA1_porcentaje = round((($DTA1 * 100) / $DTA), 1, PHP_ROUND_HALF_UP);}
        if ($DTA2 == 0) {$DTA2_porcentaje = 0;} else {$DTA2_porcentaje = round((($DTA2 * 100) / $DTA), 1, PHP_ROUND_HALF_UP);}
        if ($DTA3 == 0) {$DTA3_porcentaje = 0;} else {$DTA3_porcentaje = round((($DTA3 * 100) / $DTA), 1, PHP_ROUND_HALF_UP);}
        if ($DTA4 == 0) {$DTA4_porcentaje = 0;} else {$DTA4_porcentaje = round((($DTA4 * 100) / $DTA), 1, PHP_ROUND_HALF_UP);}
        if ($DTA5 == 0) {$DTA5_porcentaje = 0;} else {$DTA5_porcentaje = round((($DTA5 * 100) / $DTA), 1, PHP_ROUND_HALF_UP);}
        $DTO1 = Consolidados::DTO1(conexion::obtener_conexion());
        $DTO2 = Consolidados::DTO2(conexion::obtener_conexion());
        $DTO3 = Consolidados::DTO3(conexion::obtener_conexion());
        $DTO4 = Consolidados::DTO4(conexion::obtener_conexion());
        $DTO5 = Consolidados::DTO5(conexion::obtener_conexion());
        $DTO = $DTO1 + $DTO2 + $DTO3 + $DTO4 + $DTO5;
        if ($DTO1 == 0) {$DTO1_porcentaje = 0;} else {$DTO1_porcentaje = round((($DTO1 * 100) / $DTO), 1, PHP_ROUND_HALF_UP);}
        if ($DTO2 == 0) {$DTO2_porcentaje = 0;} else {$DTO2_porcentaje = round((($DTO2 * 100) / $DTO), 1, PHP_ROUND_HALF_UP);}
        if ($DTO3 == 0) {$DTO3_porcentaje = 0;} else {$DTO3_porcentaje = round((($DTO3 * 100) / $DTO), 1, PHP_ROUND_HALF_UP);}
        if ($DTO4 == 0) {$DTO4_porcentaje = 0;} else {$DTO4_porcentaje = round((($DTO4 * 100) / $DTO), 1, PHP_ROUND_HALF_UP);}
        if ($DTO5 == 0) {$DTO5_porcentaje = 0;} else {$DTO5_porcentaje = round((($DTO5 * 100) / $DTO), 1, PHP_ROUND_HALF_UP);}
        $RJ1 = Consolidados::RJ1(conexion::obtener_conexion());
        $RJ2 = Consolidados::RJ2(conexion::obtener_conexion());
        $RJ3 = Consolidados::RJ3(conexion::obtener_conexion());
        $RJ4 = Consolidados::RJ4(conexion::obtener_conexion());
        $RJ5 = Consolidados::RJ5(conexion::obtener_conexion());
        $RJ = $RJ1 + $RJ2 + $RJ3 + $RJ4 + $RJ5;
        if ($RJ1 == 0) {$RJ1_porcentaje = 0;} else {$RJ1_porcentaje = round((($RJ1 * 100) / $RJ), 1, PHP_ROUND_HALF_UP);}
        if ($RJ2 == 0) {$RJ2_porcentaje = 0;} else {$RJ2_porcentaje = round((($RJ2 * 100) / $RJ), 1, PHP_ROUND_HALF_UP);}
        if ($RJ3 == 0) {$RJ3_porcentaje = 0;} else {$RJ3_porcentaje = round((($RJ3 * 100) / $RJ), 1, PHP_ROUND_HALF_UP);}
        if ($RJ4 == 0) {$RJ4_porcentaje = 0;} else {$RJ4_porcentaje = round((($RJ4 * 100) / $RJ), 1, PHP_ROUND_HALF_UP);}
        if ($RJ5 == 0) {$RJ5_porcentaje = 0;} else {$RJ5_porcentaje = round((($RJ5 * 100) / $RJ), 1, PHP_ROUND_HALF_UP);}
        $RP1 = Consolidados::RP1(conexion::obtener_conexion());
        $RP2 = Consolidados::RP2(conexion::obtener_conexion());
        $RP3 = Consolidados::RP3(conexion::obtener_conexion());
        $RP4 = Consolidados::RP4(conexion::obtener_conexion());
        $RP5 = Consolidados::RP5(conexion::obtener_conexion());
        $RP = $RP1 + $RP2 + $RP3 + $RP4 + $RP5;
        if ($RP1 == 0) {$RP1_porcentaje = 0;} else {$RP1_porcentaje = round((($RP1 * 100) / $RP), 1, PHP_ROUND_HALF_UP);}
        if ($RP2 == 0) {$RP2_porcentaje = 0;} else {$RP2_porcentaje = round((($RP2 * 100) / $RP), 1, PHP_ROUND_HALF_UP);}
        if ($RP3 == 0) {$RP3_porcentaje = 0;} else {$RP3_porcentaje = round((($RP3 * 100) / $RP), 1, PHP_ROUND_HALF_UP);}
        if ($RP4 == 0) {$RP4_porcentaje = 0;} else {$RP4_porcentaje = round((($RP4 * 100) / $RP), 1, PHP_ROUND_HALF_UP);}
        if ($RP5 == 0) {$RP5_porcentaje = 0;} else {$RP5_porcentaje = round((($RP5 * 100) / $RP), 1, PHP_ROUND_HALF_UP);}
        $RA1 = Consolidados::RA1(conexion::obtener_conexion());
        $RA2 = Consolidados::RA2(conexion::obtener_conexion());
        $RA3 = Consolidados::RA3(conexion::obtener_conexion());
        $RA4 = Consolidados::RA4(conexion::obtener_conexion());
        $RA5 = Consolidados::RA5(conexion::obtener_conexion());
        $RA = $RA1 + $RA2 + $RA3 + $RA4 + $RA5;
        if ($RA1 == 0) {$RA1_porcentaje = 0;} else { $RA1_porcentaje = round((($RA1 * 100) / $RA), 1, PHP_ROUND_HALF_UP);}
        if ($RA2 == 0) {$RA2_porcentaje = 0;} else { $RA2_porcentaje = round((($RA2 * 100) / $RA), 1, PHP_ROUND_HALF_UP);}
        if ($RA3 == 0) {$RA3_porcentaje = 0;} else { $RA3_porcentaje = round((($RA3 * 100) / $RA), 1, PHP_ROUND_HALF_UP);}
        if ($RA4 == 0) {$RA4_porcentaje = 0;} else { $RA4_porcentaje = round((($RA4 * 100) / $RA), 1, PHP_ROUND_HALF_UP);}
        if ($RA5 == 0) {$RA5_porcentaje = 0;} else { $RA5_porcentaje = round((($RA5 * 100) / $RA), 1, PHP_ROUND_HALF_UP);}

        $RO1 = Consolidados::RO1(conexion::obtener_conexion());
        $RO2 = Consolidados::RO2(conexion::obtener_conexion());
        $RO3 = Consolidados::RO3(conexion::obtener_conexion());
        $RO4 = Consolidados::RO4(conexion::obtener_conexion());
        $RO5 = Consolidados::RO5(conexion::obtener_conexion());
        $RO = $RO1 + $RO2 + $RO3 + $RO4 + $RO5;
        if ($RO1 == 0) {$RO1_porcentaje = 0;} else {$RO1_porcentaje = round((($RO1 * 100) / $RO), 1, PHP_ROUND_HALF_UP);}
        if ($RO2 == 0) {$RO2_porcentaje = 0;} else {$RO2_porcentaje = round((($RO2 * 100) / $RO), 1, PHP_ROUND_HALF_UP);}
        if ($RO3 == 0) {$RO3_porcentaje = 0;} else {$RO3_porcentaje = round((($RO3 * 100) / $RO), 1, PHP_ROUND_HALF_UP);}
        if ($RO4 == 0) {$RO4_porcentaje = 0;} else {$RO4_porcentaje = round((($RO4 * 100) / $RO), 1, PHP_ROUND_HALF_UP);}
        if ($RO5 == 0) {$RO5_porcentaje = 0;} else {$RO5_porcentaje = round((($RO5 * 100) / $RO), 1, PHP_ROUND_HALF_UP);}
        $CLJ1 = Consolidados::CLJ1(conexion::obtener_conexion());
        $CLJ2 = Consolidados::CLJ2(conexion::obtener_conexion());
        $CLJ3 = Consolidados::CLJ3(conexion::obtener_conexion());
        $CLJ4 = Consolidados::CLJ4(conexion::obtener_conexion());
        $CLJ5 = Consolidados::CLJ5(conexion::obtener_conexion());
        $CLJ = $CLJ1 + $CLJ2 + $CLJ3 + $CLJ4 + $CLJ5;
        if ($CLJ1 == 0) {$CLJ1_porcentaje = 0;} else {$CLJ1_porcentaje = round((($CLJ1 * 100) / $CLJ), 1, PHP_ROUND_HALF_UP);}
        if ($CLJ2 == 0) {$CLJ2_porcentaje = 0;} else {$CLJ2_porcentaje = round((($CLJ2 * 100) / $CLJ), 1, PHP_ROUND_HALF_UP);}
        if ($CLJ3 == 0) {$CLJ3_porcentaje = 0;} else {$CLJ3_porcentaje = round((($CLJ3 * 100) / $CLJ), 1, PHP_ROUND_HALF_UP);}
        if ($CLJ4 == 0) {$CLJ4_porcentaje = 0;} else {$CLJ4_porcentaje = round((($CLJ4 * 100) / $CLJ), 1, PHP_ROUND_HALF_UP);}
        if ($CLJ5 == 0) {$CLJ5_porcentaje = 0;} else {$CLJ5_porcentaje = round((($CLJ5 * 100) / $CLJ), 1, PHP_ROUND_HALF_UP);}
        $CLP1 = Consolidados::CLP1(conexion::obtener_conexion());
        $CLP2 = Consolidados::CLP2(conexion::obtener_conexion());
        $CLP3 = Consolidados::CLP3(conexion::obtener_conexion());
        $CLP4 = Consolidados::CLP4(conexion::obtener_conexion());
        $CLP5 = Consolidados::CLP5(conexion::obtener_conexion());
        $CLP = $CLP1 + $CLP2 + $CLP3 + $CLP4 + $CLP5;
        if ($CLP1 == 0) {$CLP1_porcentaje = 0;} else {$CLP1_porcentaje = round((($CLP1 * 100) / $CLP), 1, PHP_ROUND_HALF_UP);}
        if ($CLP2 == 0) {$CLP2_porcentaje = 0;} else {$CLP2_porcentaje = round((($CLP2 * 100) / $CLP), 1, PHP_ROUND_HALF_UP);}
        if ($CLP3 == 0) {$CLP3_porcentaje = 0;} else {$CLP3_porcentaje = round((($CLP3 * 100) / $CLP), 1, PHP_ROUND_HALF_UP);}
        if ($CLP4 == 0) {$CLP4_porcentaje = 0;} else {$CLP4_porcentaje = round((($CLP4 * 100) / $CLP), 1, PHP_ROUND_HALF_UP);}
        if ($CLP5 == 0) {$CLP5_porcentaje = 0;} else {$CLP5_porcentaje = round((($CLP5 * 100) / $CLP), 1, PHP_ROUND_HALF_UP);}
        $CLA1 = Consolidados::CLA1(conexion::obtener_conexion());
        $CLA2 = Consolidados::CLA2(conexion::obtener_conexion());
        $CLA3 = Consolidados::CLA3(conexion::obtener_conexion());
        $CLA4 = Consolidados::CLA4(conexion::obtener_conexion());
        $CLA5 = Consolidados::CLA5(conexion::obtener_conexion());
        $CLA = $CLA1 + $CLA2 + $CLA3 + $CLA4 + $CLA5;
        if ($CLA1 == 0) {$CLA1_porcentaje = 0;} else {$CLA1_porcentaje = round((($CLA1 * 100) / $CLA), 1, PHP_ROUND_HALF_UP);}
        if ($CLA2 == 0) {$CLA2_porcentaje = 0;} else {$CLA2_porcentaje = round((($CLA2 * 100) / $CLA), 1, PHP_ROUND_HALF_UP);}
        if ($CLA3 == 0) {$CLA3_porcentaje = 0;} else {$CLA3_porcentaje = round((($CLA3 * 100) / $CLA), 1, PHP_ROUND_HALF_UP);}
        if ($CLA4 == 0) {$CLA4_porcentaje = 0;} else {$CLA4_porcentaje = round((($CLA4 * 100) / $CLA), 1, PHP_ROUND_HALF_UP);}
        if ($CLA5 == 0) {$CLA5_porcentaje = 0;} else {$CLA5_porcentaje = round((($CLA5 * 100) / $CLA), 1, PHP_ROUND_HALF_UP);}
        $CLO1 = Consolidados::CLO1(conexion::obtener_conexion());
        $CLO2 = Consolidados::CLO2(conexion::obtener_conexion());
        $CLO3 = Consolidados::CLO3(conexion::obtener_conexion());
        $CLO4 = Consolidados::CLO4(conexion::obtener_conexion());
        $CLO5 = Consolidados::CLO5(conexion::obtener_conexion());
        $CLO = $CLO1 + $CLO2 + $CLO3 + $CLO4 + $CLO5;
        if ($CLO1 == 0) {$CLO1_porcentaje = 0;} else {$CLO1_porcentaje = round((($CLO1 * 100) / $CLO), 1, PHP_ROUND_HALF_UP);}
        if ($CLO2 == 0) {$CLO2_porcentaje = 0;} else {$CLO2_porcentaje = round((($CLO2 * 100) / $CLO), 1, PHP_ROUND_HALF_UP);}
        if ($CLO3 == 0) {$CLO3_porcentaje = 0;} else {$CLO3_porcentaje = round((($CLO3 * 100) / $CLO), 1, PHP_ROUND_HALF_UP);}
        if ($CLO4 == 0) {$CLO4_porcentaje = 0;} else {$CLO4_porcentaje = round((($CLO4 * 100) / $CLO), 1, PHP_ROUND_HALF_UP);}
        if ($CLO5 == 0) {$CLO5_porcentaje = 0;} else {$CLO5_porcentaje = round((($CLO5 * 100) / $CLO), 1, PHP_ROUND_HALF_UP);}
        $RSJ1 = Consolidados::RSJ1(conexion::obtener_conexion());
        $RSJ2 = Consolidados::RSJ2(conexion::obtener_conexion());
        $RSJ3 = Consolidados::RSJ3(conexion::obtener_conexion());
        $RSJ4 = Consolidados::RSJ4(conexion::obtener_conexion());
        $RSJ5 = Consolidados::RSJ5(conexion::obtener_conexion());
        $RSJ = $RSJ1 + $RSJ2 + $RSJ3 + $RSJ4 + $RSJ5;
        if ($RSJ1 == 0) {$RSJ1_porcentaje = 0;} else {$RSJ1_porcentaje = round((($RSJ1 * 100) / $RSJ), 1, PHP_ROUND_HALF_UP);}
        if ($RSJ2 == 0) {$RSJ2_porcentaje = 0;} else {$RSJ2_porcentaje = round((($RSJ2 * 100) / $RSJ), 1, PHP_ROUND_HALF_UP);}
        if ($RSJ3 == 0) {$RSJ3_porcentaje = 0;} else {$RSJ3_porcentaje = round((($RSJ3 * 100) / $RSJ), 1, PHP_ROUND_HALF_UP);}
        if ($RSJ4 == 0) {$RSJ4_porcentaje = 0;} else {$RSJ4_porcentaje = round((($RSJ4 * 100) / $RSJ), 1, PHP_ROUND_HALF_UP);}
        if ($RSJ5 == 0) {$RSJ5_porcentaje = 0;} else {$RSJ5_porcentaje = round((($RSJ5 * 100) / $RSJ), 1, PHP_ROUND_HALF_UP);}
        $RSP1 = Consolidados::RSP1(conexion::obtener_conexion());
        $RSP2 = Consolidados::RSP2(conexion::obtener_conexion());
        $RSP3 = Consolidados::RSP3(conexion::obtener_conexion());
        $RSP4 = Consolidados::RSP4(conexion::obtener_conexion());
        $RSP5 = Consolidados::RSP5(conexion::obtener_conexion());
        $RSP = $RSP1 + $RSP2 + $RSP3 + $RSP4 + $RSP5;
        if ($RSP1 == 0) {$RSP1_porcentaje  = 0;} else { $RSP1_porcentaje = round((($RSP1 * 100) / $RSP), 1, PHP_ROUND_HALF_UP);}
        if ($RSP2 == 0) {$RSP2_porcentaje  = 0;} else { $RSP2_porcentaje = round((($RSP2 * 100) / $RSP), 1, PHP_ROUND_HALF_UP);}
        if ($RSP3 == 0) {$RSP3_porcentaje  = 0;} else { $RSP3_porcentaje = round((($RSP3 * 100) / $RSP), 1, PHP_ROUND_HALF_UP);}
        if ($RSP4 == 0) {$RSP4_porcentaje  = 0;} else { $RSP4_porcentaje = round((($RSP4 * 100) / $RSP), 1, PHP_ROUND_HALF_UP);}
        if ($RSP5 == 0) {$RSP5_porcentaje  = 0;} else { $RSP5_porcentaje = round((($RSP5 * 100) / $RSP), 1, PHP_ROUND_HALF_UP);}
        $RSA1 = Consolidados::RSA1(conexion::obtener_conexion());
        $RSA2 = Consolidados::RSA2(conexion::obtener_conexion());
        $RSA3 = Consolidados::RSA3(conexion::obtener_conexion());
        $RSA4 = Consolidados::RSA4(conexion::obtener_conexion());
        $RSA5 = Consolidados::RSA5(conexion::obtener_conexion());
        $RSA = $RSA1 + $RSA2 + $RSA3 + $RSA4 + $RSA5;
        if ($RSA1 == 0) {$RSA1_porcentaje = 0;} else {$RSA1_porcentaje = round((($RSA1 * 100) / $RSA), 1, PHP_ROUND_HALF_UP);}
        if ($RSA2 == 0) {$RSA2_porcentaje = 0;} else {$RSA2_porcentaje = round((($RSA2 * 100) / $RSA), 1, PHP_ROUND_HALF_UP);}
        if ($RSA3 == 0) {$RSA3_porcentaje = 0;} else {$RSA3_porcentaje = round((($RSA3 * 100) / $RSA), 1, PHP_ROUND_HALF_UP);}
        if ($RSA4 == 0) {$RSA4_porcentaje = 0;} else {$RSA4_porcentaje = round((($RSA4 * 100) / $RSA), 1, PHP_ROUND_HALF_UP);}
        if ($RSA5 == 0) {$RSA5_porcentaje = 0;} else {$RSA5_porcentaje = round((($RSA5 * 100) / $RSA), 1, PHP_ROUND_HALF_UP);}
        $RSO1 = Consolidados::RSO1(conexion::obtener_conexion());
        $RSO2 = Consolidados::RSO2(conexion::obtener_conexion());
        $RSO3 = Consolidados::RSO3(conexion::obtener_conexion());
        $RSO4 = Consolidados::RSO4(conexion::obtener_conexion());
        $RSO5 = Consolidados::RSO5(conexion::obtener_conexion());
        $RSO = $RSO1 + $RSO2 + $RSO3 + $RSO4 + $RSO5;
        if ($RSO1 == 0) {$RSO1_porcentaje = 0;} else {$RSO1_porcentaje = round((($RSO1 * 100) / $RSO), 1, PHP_ROUND_HALF_UP);}
        if ($RSO2 == 0) {$RSO2_porcentaje = 0;} else {$RSO2_porcentaje = round((($RSO2 * 100) / $RSO), 1, PHP_ROUND_HALF_UP);}
        if ($RSO3 == 0) {$RSO3_porcentaje = 0;} else {$RSO3_porcentaje = round((($RSO3 * 100) / $RSO), 1, PHP_ROUND_HALF_UP);}
        if ($RSO4 == 0) {$RSO4_porcentaje = 0;} else {$RSO4_porcentaje = round((($RSO4 * 100) / $RSO), 1, PHP_ROUND_HALF_UP);}
        if ($RSO5 == 0) {$RSO5_porcentaje = 0;} else {$RSO5_porcentaje = round((($RSO5 * 100) / $RSO), 1, PHP_ROUND_HALF_UP);}
        $RDJ1 = Consolidados::RDJ1(conexion::obtener_conexion());
        $RDJ2 = Consolidados::RDJ2(conexion::obtener_conexion());
        $RDJ3 = Consolidados::RDJ3(conexion::obtener_conexion());
        $RDJ4 = Consolidados::RDJ4(conexion::obtener_conexion());
        $RDJ5 = Consolidados::RDJ5(conexion::obtener_conexion());
        $RDJ = $RDJ1 + $RDJ2 + $RDJ3 + $RDJ4 + $RDJ5;
        if ($RDJ1 == 0) {$RDJ1_porcentaje = 0;} else {$RDJ1_porcentaje = round((($RDJ1 * 100) / $RDJ), 1, PHP_ROUND_HALF_UP);}
        if ($RDJ2 == 0) {$RDJ2_porcentaje = 0;} else {$RDJ2_porcentaje = round((($RDJ2 * 100) / $RDJ), 1, PHP_ROUND_HALF_UP);}
        if ($RDJ3 == 0) {$RDJ3_porcentaje = 0;} else {$RDJ3_porcentaje = round((($RDJ3 * 100) / $RDJ), 1, PHP_ROUND_HALF_UP);}
        if ($RDJ4 == 0) {$RDJ4_porcentaje = 0;} else {$RDJ4_porcentaje = round((($RDJ4 * 100) / $RDJ), 1, PHP_ROUND_HALF_UP);}
        if ($RDJ5 == 0) {$RDJ5_porcentaje = 0;} else {$RDJ5_porcentaje = round((($RDJ5 * 100) / $RDJ), 1, PHP_ROUND_HALF_UP);}
        $RDP1 = Consolidados::RDP1(conexion::obtener_conexion());
        $RDP2 = Consolidados::RDP2(conexion::obtener_conexion());
        $RDP3 = Consolidados::RDP3(conexion::obtener_conexion());
        $RDP4 = Consolidados::RDP4(conexion::obtener_conexion());
        $RDP5 = Consolidados::RDP5(conexion::obtener_conexion());
        $RDP = $RDP1 + $RDP2 + $RDP3 + $RDP4 + $RDP5;
        if ($RDP1 == 0) {$RDP1_porcentaje = 0;} else {$RDP1_porcentaje = round((($RDP1 * 100) / $RDP), 1, PHP_ROUND_HALF_UP);}
        if ($RDP2 == 0) {$RDP2_porcentaje = 0;} else {$RDP2_porcentaje = round((($RDP2 * 100) / $RDP), 1, PHP_ROUND_HALF_UP);}
        if ($RDP3 == 0) {$RDP3_porcentaje = 0;} else {$RDP3_porcentaje = round((($RDP3 * 100) / $RDP), 1, PHP_ROUND_HALF_UP);}
        if ($RDP4 == 0) {$RDP4_porcentaje = 0;} else {$RDP4_porcentaje = round((($RDP4 * 100) / $RDP), 1, PHP_ROUND_HALF_UP);}
        if ($RDP5 == 0) {$RDP5_porcentaje = 0;} else {$RDP5_porcentaje = round((($RDP5 * 100) / $RDP), 1, PHP_ROUND_HALF_UP);}
        $RDA1 = Consolidados::RDA1(conexion::obtener_conexion());
        $RDA2 = Consolidados::RDA2(conexion::obtener_conexion());
        $RDA3 = Consolidados::RDA3(conexion::obtener_conexion());
        $RDA4 = Consolidados::RDA4(conexion::obtener_conexion());
        $RDA5 = Consolidados::RDA5(conexion::obtener_conexion());
        $RDA = $RDA1 + $RDA2 + $RDA3 + $RDA4 + $RDA5;
        if ($RDA1 == 0) {$RDA1_porcentaje = 0;} else {$RDA1_porcentaje = round((($RDA1 * 100) / $RDA), 1, PHP_ROUND_HALF_UP);}
        if ($RDA2 == 0) {$RDA2_porcentaje = 0;} else {$RDA2_porcentaje = round((($RDA2 * 100) / $RDA), 1, PHP_ROUND_HALF_UP);}
        if ($RDA3 == 0) {$RDA3_porcentaje = 0;} else {$RDA3_porcentaje = round((($RDA3 * 100) / $RDA), 1, PHP_ROUND_HALF_UP);}
        if ($RDA4 == 0) {$RDA4_porcentaje = 0;} else {$RDA4_porcentaje = round((($RDA4 * 100) / $RDA), 1, PHP_ROUND_HALF_UP);}
        if ($RDA5 == 0) {$RDA5_porcentaje = 0;} else {$RDA5_porcentaje = round((($RDA5 * 100) / $RDA), 1, PHP_ROUND_HALF_UP);}
        $RDO1 = Consolidados::RDO1(conexion::obtener_conexion());
        $RDO2 = Consolidados::RDO2(conexion::obtener_conexion());
        $RDO3 = Consolidados::RDO3(conexion::obtener_conexion());
        $RDO4 = Consolidados::RDO4(conexion::obtener_conexion());
        $RDO5 = Consolidados::RDO5(conexion::obtener_conexion());
        $RDO = $RDO1 + $RDO2 + $RDO3 + $RDO4 + $RDO5;
        if ($RDO1 == 0) {$RDO1_porcentaje = 0;} else {$RDO1_porcentaje = round((($RDO1 * 100) / $RDO), 1, PHP_ROUND_HALF_UP);}
        if ($RDO2 == 0) {$RDO2_porcentaje = 0;} else {$RDO2_porcentaje = round((($RDO2 * 100) / $RDO), 1, PHP_ROUND_HALF_UP);}
        if ($RDO3 == 0) {$RDO3_porcentaje = 0;} else {$RDO3_porcentaje = round((($RDO3 * 100) / $RDO), 1, PHP_ROUND_HALF_UP);}
        if ($RDO4 == 0) {$RDO4_porcentaje = 0;} else {$RDO4_porcentaje = round((($RDO4 * 100) / $RDO), 1, PHP_ROUND_HALF_UP);}
        if ($RDO5 == 0) {$RDO5_porcentaje = 0;} else {$RDO5_porcentaje = round((($RDO5 * 100) / $RDO), 1, PHP_ROUND_HALF_UP);}
        $RCJ1 = Consolidados::RCJ1(conexion::obtener_conexion());
        $RCJ2 = Consolidados::RCJ2(conexion::obtener_conexion());
        $RCJ3 = Consolidados::RCJ3(conexion::obtener_conexion());
        $RCJ4 = Consolidados::RCJ4(conexion::obtener_conexion());
        $RCJ5 = Consolidados::RCJ5(conexion::obtener_conexion());
        $RCJ = $RCJ1 + $RCJ2 + $RCJ3 + $RCJ4 + $RCJ5;
        if ($RCJ1 == 0) {$RCJ1_porcentaje = 0;} else {$RCJ1_porcentaje = round((($RCJ1 * 100) / $RCJ), 1, PHP_ROUND_HALF_UP);}
        if ($RCJ2 == 0) {$RCJ2_porcentaje = 0;} else {$RCJ2_porcentaje = round((($RCJ2 * 100) / $RCJ), 1, PHP_ROUND_HALF_UP);}
        if ($RCJ3 == 0) {$RCJ3_porcentaje = 0;} else {$RCJ3_porcentaje = round((($RCJ3 * 100) / $RCJ), 1, PHP_ROUND_HALF_UP);}
        if ($RCJ4 == 0) {$RCJ4_porcentaje = 0;} else {$RCJ4_porcentaje = round((($RCJ4 * 100) / $RCJ), 1, PHP_ROUND_HALF_UP);}
        if ($RCJ5 == 0) {$RCJ5_porcentaje = 0;} else {$RCJ5_porcentaje = round((($RCJ5 * 100) / $RCJ), 1, PHP_ROUND_HALF_UP);}
        $RCP1 = Consolidados::RCP1(conexion::obtener_conexion());
        $RCP2 = Consolidados::RCP2(conexion::obtener_conexion());
        $RCP3 = Consolidados::RCP3(conexion::obtener_conexion());
        $RCP4 = Consolidados::RCP4(conexion::obtener_conexion());
        $RCP5 = Consolidados::RCP5(conexion::obtener_conexion());
        $RCP = $RCP1 + $RCP2 + $RCP3 + $RCP4 + $RCP5;
        if ($RCP1 == 0) {$RCP1_porcentaje = 0;} else {$RCP1_porcentaje = round((($RCP1 * 100) / $RCP), 1, PHP_ROUND_HALF_UP);}
        if ($RCP2 == 0) {$RCP2_porcentaje = 0;} else {$RCP2_porcentaje = round((($RCP2 * 100) / $RCP), 1, PHP_ROUND_HALF_UP);}
        if ($RCP3 == 0) {$RCP3_porcentaje = 0;} else {$RCP3_porcentaje = round((($RCP3 * 100) / $RCP), 1, PHP_ROUND_HALF_UP);}
        if ($RCP4 == 0) {$RCP4_porcentaje = 0;} else {$RCP4_porcentaje = round((($RCP4 * 100) / $RCP), 1, PHP_ROUND_HALF_UP);}
        if ($RCP5 == 0) {$RCP5_porcentaje = 0;} else {$RCP5_porcentaje = round((($RCP5 * 100) / $RCP), 1, PHP_ROUND_HALF_UP);}
        $CRJ1 = Consolidados::CRJ1(conexion::obtener_conexion());
        $CRJ2 = Consolidados::CRJ2(conexion::obtener_conexion());
        $CRJ3 = Consolidados::CRJ3(conexion::obtener_conexion());
        $CRJ4 = Consolidados::CRJ4(conexion::obtener_conexion());
        $CRJ5 = Consolidados::CRJ5(conexion::obtener_conexion());
        $CRJ = $CRJ1 + $CRJ2 + $CRJ3 + $CRJ4 + $CRJ5;
        if ($CRJ1 == 0) {$CRJ1_porcentaje = 0;} else {$CRJ1_porcentaje = round((($CRJ1 * 100) / $CRJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRJ2 == 0) {$CRJ2_porcentaje = 0;} else {$CRJ2_porcentaje = round((($CRJ2 * 100) / $CRJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRJ3 == 0) {$CRJ3_porcentaje = 0;} else {$CRJ3_porcentaje = round((($CRJ3 * 100) / $CRJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRJ4 == 0) {$CRJ4_porcentaje = 0;} else {$CRJ4_porcentaje = round((($CRJ4 * 100) / $CRJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRJ5 == 0) {$CRJ5_porcentaje = 0;} else {$CRJ5_porcentaje = round((($CRJ5 * 100) / $CRJ), 1, PHP_ROUND_HALF_UP);}
        $CRP1 = Consolidados::CRP1(conexion::obtener_conexion());
        $CRP2 = Consolidados::CRP2(conexion::obtener_conexion());
        $CRP3 = Consolidados::CRP3(conexion::obtener_conexion());
        $CRP4 = Consolidados::CRP4(conexion::obtener_conexion());
        $CRP5 = Consolidados::CRP5(conexion::obtener_conexion());
        $CRP = $CRP1 + $CRP2 + $CRP3 + $CRP4 + $CRP5;
        if ($CRP1 == 0) {$CRP1_porcentaje = 0;} else {$CRP1_porcentaje = round((($CRP1 * 100) / $CRP), 1, PHP_ROUND_HALF_UP);}
        if ($CRP2 == 0) {$CRP2_porcentaje = 0;} else {$CRP2_porcentaje = round((($CRP2 * 100) / $CRP), 1, PHP_ROUND_HALF_UP);}
        if ($CRP3 == 0) {$CRP3_porcentaje = 0;} else {$CRP3_porcentaje = round((($CRP3 * 100) / $CRP), 1, PHP_ROUND_HALF_UP);}
        if ($CRP4 == 0) {$CRP4_porcentaje = 0;} else {$CRP4_porcentaje = round((($CRP4 * 100) / $CRP), 1, PHP_ROUND_HALF_UP);}
        if ($CRP5 == 0) {$CRP5_porcentaje = 0;} else {$CRP5_porcentaje = round((($CRP5 * 100) / $CRP), 1, PHP_ROUND_HALF_UP);}
        $CRA1 = Consolidados::CRA1(conexion::obtener_conexion());
        $CRA2 = Consolidados::CRA2(conexion::obtener_conexion());
        $CRA3 = Consolidados::CRA3(conexion::obtener_conexion());
        $CRA4 = Consolidados::CRA4(conexion::obtener_conexion());
        $CRA5 = Consolidados::CRA5(conexion::obtener_conexion());
        $CRA = $CRA1 + $CRA2 + $CRA3 + $CRA4 + $CRA5;
        if ($CRA1 == 0) {$CRA1_porcentaje = 0;} else {$CRA1_porcentaje = round((($CRA1 * 100) / $CRA), 1, PHP_ROUND_HALF_UP);}
        if ($CRA2 == 0) {$CRA2_porcentaje = 0;} else {$CRA2_porcentaje = round((($CRA2 * 100) / $CRA), 1, PHP_ROUND_HALF_UP);}
        if ($CRA3 == 0) {$CRA3_porcentaje = 0;} else {$CRA3_porcentaje = round((($CRA3 * 100) / $CRA), 1, PHP_ROUND_HALF_UP);}
        if ($CRA4 == 0) {$CRA4_porcentaje = 0;} else {$CRA4_porcentaje = round((($CRA4 * 100) / $CRA), 1, PHP_ROUND_HALF_UP);}
        if ($CRA5 == 0) {$CRA5_porcentaje = 0;} else {$CRA5_porcentaje = round((($CRA5 * 100) / $CRA), 1, PHP_ROUND_HALF_UP);}
        $CRO1 = Consolidados::CRO1(conexion::obtener_conexion());
        $CRO2 = Consolidados::CRO2(conexion::obtener_conexion());
        $CRO3 = Consolidados::CRO3(conexion::obtener_conexion());
        $CRO4 = Consolidados::CRO4(conexion::obtener_conexion());
        $CRO5 = Consolidados::CRO5(conexion::obtener_conexion());
        $CRO = $CRO1 + $CRO2 + $CRO3 + $CRO4 + $CRO5;
        if ($CRO1 == 0) {$CRO1_porcentaje = 0;} else {$CRO1_porcentaje = round((($CRO1 * 100) / $CRO), 1, PHP_ROUND_HALF_UP);}
        if ($CRO2 == 0) {$CRO2_porcentaje = 0;} else {$CRO2_porcentaje = round((($CRO2 * 100) / $CRO), 1, PHP_ROUND_HALF_UP);}
        if ($CRO3 == 0) {$CRO3_porcentaje = 0;} else {$CRO3_porcentaje = round((($CRO3 * 100) / $CRO), 1, PHP_ROUND_HALF_UP);}
        if ($CRO4 == 0) {$CRO4_porcentaje = 0;} else {$CRO4_porcentaje = round((($CRO4 * 100) / $CRO), 1, PHP_ROUND_HALF_UP);}
        if ($CRO5 == 0) {$CRO5_porcentaje = 0;} else {$CRO5_porcentaje = round((($CRO5 * 100) / $CRO), 1, PHP_ROUND_HALF_UP);}
        $CJ1 = Consolidados::CJ1(conexion::obtener_conexion());
        $CJ2 = Consolidados::CJ2(conexion::obtener_conexion());
        $CJ3 = Consolidados::CJ3(conexion::obtener_conexion());
        $CJ4 = Consolidados::CJ4(conexion::obtener_conexion());
        $CJ5 = Consolidados::CJ5(conexion::obtener_conexion());
        $CJ = $CJ1 + $CJ2 + $CJ3 + $CJ4 + $CJ5;
        if ($CJ1 == 0) {$CJ1_porcentaje = 0;} else {$CJ1_porcentaje = round((($CJ1 * 100) / $CJ), 1, PHP_ROUND_HALF_UP);}
        if ($CJ2 == 0) {$CJ2_porcentaje = 0;} else {$CJ2_porcentaje = round((($CJ2 * 100) / $CJ), 1, PHP_ROUND_HALF_UP);}
        if ($CJ3 == 0) {$CJ3_porcentaje = 0;} else {$CJ3_porcentaje = round((($CJ3 * 100) / $CJ), 1, PHP_ROUND_HALF_UP);}
        if ($CJ4 == 0) {$CJ4_porcentaje = 0;} else {$CJ4_porcentaje = round((($CJ4 * 100) / $CJ), 1, PHP_ROUND_HALF_UP);}
        if ($CJ5 == 0) {$CJ5_porcentaje = 0;} else {$CJ5_porcentaje = round((($CJ5 * 100) / $CJ), 1, PHP_ROUND_HALF_UP);}
        $CP1 = Consolidados::CP1(conexion::obtener_conexion());
        $CP2 = Consolidados::CP2(conexion::obtener_conexion());
        $CP3 = Consolidados::CP3(conexion::obtener_conexion());
        $CP4 = Consolidados::CP4(conexion::obtener_conexion());
        $CP5 = Consolidados::CP5(conexion::obtener_conexion());
        $CP = $CP1 + $CP2 + $CP3 + $CP4 + $CP5;
        if ($CP1 == 0) {$CP1_porcentaje = 0;} else {$CP1_porcentaje = round((($CP1 * 100) / $CP), 1, PHP_ROUND_HALF_UP);}
        if ($CP2 == 0) {$CP2_porcentaje = 0;} else {$CP2_porcentaje = round((($CP2 * 100) / $CP), 1, PHP_ROUND_HALF_UP);}
        if ($CP3 == 0) {$CP3_porcentaje = 0;} else {$CP3_porcentaje = round((($CP3 * 100) / $CP), 1, PHP_ROUND_HALF_UP);}
        if ($CP4 == 0) {$CP4_porcentaje = 0;} else {$CP4_porcentaje = round((($CP4 * 100) / $CP), 1, PHP_ROUND_HALF_UP);}
        if ($CP5 == 0) {$CP5_porcentaje = 0;} else {$CP5_porcentaje = round((($CP5 * 100) / $CP), 1, PHP_ROUND_HALF_UP);}
        $CA1 = Consolidados::CA1(conexion::obtener_conexion());
        $CA2 = Consolidados::CA2(conexion::obtener_conexion());
        $CA3 = Consolidados::CA3(conexion::obtener_conexion());
        $CA4 = Consolidados::CA4(conexion::obtener_conexion());
        $CA5 = Consolidados::CA5(conexion::obtener_conexion());
        $CA = $CA1 + $CA2 + $CA3 + $CA4 + $CA5;
        if ($CA1 == 0) {$CA1_porcentaje = 0;} else {$CA1_porcentaje = round((($CA1 * 100) / $CA), 1, PHP_ROUND_HALF_UP);}
        if ($CA2 == 0) {$CA2_porcentaje = 0;} else {$CA2_porcentaje = round((($CA2 * 100) / $CA), 1, PHP_ROUND_HALF_UP);}
        if ($CA3 == 0) {$CA3_porcentaje = 0;} else {$CA3_porcentaje = round((($CA3 * 100) / $CA), 1, PHP_ROUND_HALF_UP);}
        if ($CA4 == 0) {$CA4_porcentaje = 0;} else {$CA4_porcentaje = round((($CA4 * 100) / $CA), 1, PHP_ROUND_HALF_UP);}
        if ($CA5 == 0) {$CA5_porcentaje = 0;} else {$CA5_porcentaje = round((($CA5 * 100) / $CA), 1, PHP_ROUND_HALF_UP);}
        $CO1 = Consolidados::CO1(conexion::obtener_conexion());
        $CO2 = Consolidados::CO2(conexion::obtener_conexion());
        $CO3 = Consolidados::CO3(conexion::obtener_conexion());
        $CO4 = Consolidados::CO4(conexion::obtener_conexion());
        $CO5 = Consolidados::CO5(conexion::obtener_conexion());
        $CO = $CO1 + $CO2 + $CO3 + $CO4 + $CO5;
        if ($CO1 == 0) {$CO1_porcentaje = 0;} else {$CO1_porcentaje = round((($CO1 * 100) / $CO), 1, PHP_ROUND_HALF_UP);}
        if ($CO2 == 0) {$CO2_porcentaje = 0;} else {$CO2_porcentaje = round((($CO2 * 100) / $CO), 1, PHP_ROUND_HALF_UP);}
        if ($CO3 == 0) {$CO3_porcentaje = 0;} else {$CO3_porcentaje = round((($CO3 * 100) / $CO), 1, PHP_ROUND_HALF_UP);}
        if ($CO4 == 0) {$CO4_porcentaje = 0;} else {$CO4_porcentaje = round((($CO4 * 100) / $CO), 1, PHP_ROUND_HALF_UP);}
        if ($CO5 == 0) {$CO5_porcentaje = 0;} else {$CO5_porcentaje = round((($CO5 * 100) / $CO), 1, PHP_ROUND_HALF_UP);}
        $PMJ1 = Consolidados::PMJ1(conexion::obtener_conexion());
        $PMJ2 = Consolidados::PMJ2(conexion::obtener_conexion());
        $PMJ3 = Consolidados::PMJ3(conexion::obtener_conexion());
        $PMJ4 = Consolidados::PMJ4(conexion::obtener_conexion());
        $PMJ5 = Consolidados::PMJ5(conexion::obtener_conexion());
        $PMJ = $PMJ1 + $PMJ2 + $PMJ3 + $PMJ4 + $PMJ5;
        if ($PMJ1 == 0) {$PMJ1_porcentaje = 0;} else { $PMJ1_porcentaje = round((($PMJ1 * 100) / $PMJ), 1, PHP_ROUND_HALF_UP);}
        if ($PMJ2 == 0) {$PMJ2_porcentaje = 0;} else { $PMJ2_porcentaje = round((($PMJ2 * 100) / $PMJ), 1, PHP_ROUND_HALF_UP);}
        if ($PMJ3 == 0) {$PMJ3_porcentaje = 0;} else { $PMJ3_porcentaje = round((($PMJ3 * 100) / $PMJ), 1, PHP_ROUND_HALF_UP);}
        if ($PMJ4 == 0) {$PMJ4_porcentaje = 0;} else { $PMJ4_porcentaje = round((($PMJ4 * 100) / $PMJ), 1, PHP_ROUND_HALF_UP);}
        if ($PMJ5 == 0) {$PMJ5_porcentaje = 0;} else { $PMJ5_porcentaje = round((($PMJ5 * 100) / $PMJ), 1, PHP_ROUND_HALF_UP);}
        $PMP1 = Consolidados::PMP1(conexion::obtener_conexion());
        $PMP2 = Consolidados::PMP2(conexion::obtener_conexion());
        $PMP3 = Consolidados::PMP3(conexion::obtener_conexion());
        $PMP4 = Consolidados::PMP4(conexion::obtener_conexion());
        $PMP5 = Consolidados::PMP5(conexion::obtener_conexion());
        $PMP = $PMP1 + $PMP2 + $PMP3 + $PMP4 + $PMP5;
        if ($PMP1 == 0) {$PMP1_porcentaje = 0;} else {$PMP1_porcentaje = round((($PMP1 * 100) / $PMP), 1, PHP_ROUND_HALF_UP);}
        if ($PMP2 == 0) {$PMP2_porcentaje = 0;} else {$PMP2_porcentaje = round((($PMP2 * 100) / $PMP), 1, PHP_ROUND_HALF_UP);}
        if ($PMP3 == 0) {$PMP3_porcentaje = 0;} else {$PMP3_porcentaje = round((($PMP3 * 100) / $PMP), 1, PHP_ROUND_HALF_UP);}
        if ($PMP4 == 0) {$PMP4_porcentaje = 0;} else {$PMP4_porcentaje = round((($PMP4 * 100) / $PMP), 1, PHP_ROUND_HALF_UP);}
        if ($PMP5 == 0) {$PMP5_porcentaje = 0;} else {$PMP5_porcentaje = round((($PMP5 * 100) / $PMP), 1, PHP_ROUND_HALF_UP);}
        $PMA1 = Consolidados::PMA1(conexion::obtener_conexion());
        $PMA2 = Consolidados::PMA2(conexion::obtener_conexion());
        $PMA3 = Consolidados::PMA3(conexion::obtener_conexion());
        $PMA4 = Consolidados::PMA4(conexion::obtener_conexion());
        $PMA5 = Consolidados::PMA5(conexion::obtener_conexion());
        $PMA = $PMA1 + $PMA2 + $PMA3 + $PMA4 + $PMA5;
        if ($PMA1 == 0) {$PMA1_porcentaje = 0;} else {$PMA1_porcentaje = round((($PMA1 * 100) / $PMA), 1, PHP_ROUND_HALF_UP);}
        if ($PMA2 == 0) {$PMA2_porcentaje = 0;} else {$PMA2_porcentaje = round((($PMA2 * 100) / $PMA), 1, PHP_ROUND_HALF_UP);}
        if ($PMA3 == 0) {$PMA3_porcentaje = 0;} else {$PMA3_porcentaje = round((($PMA3 * 100) / $PMA), 1, PHP_ROUND_HALF_UP);}
        if ($PMA4 == 0) {$PMA4_porcentaje = 0;} else {$PMA4_porcentaje = round((($PMA4 * 100) / $PMA), 1, PHP_ROUND_HALF_UP);}
        if ($PMA5 == 0) {$PMA5_porcentaje = 0;} else {$PMA5_porcentaje = round((($PMA5 * 100) / $PMA), 1, PHP_ROUND_HALF_UP);}
        $PMO1 = Consolidados::PMO1(conexion::obtener_conexion());
        $PMO2 = Consolidados::PMO2(conexion::obtener_conexion());
        $PMO3 = Consolidados::PMO3(conexion::obtener_conexion());
        $PMO4 = Consolidados::PMO4(conexion::obtener_conexion());
        $PMO5 = Consolidados::PMO5(conexion::obtener_conexion());
        $PMO = $PMO1 + $PMO2 + $PMO3 + $PMO4 + $PMO5;
        if ($PMO1 == 0) {$PMO1_porcentaje = 0;} else {$PMO1_porcentaje = round((($PMO1 * 100) / $PMO), 1, PHP_ROUND_HALF_UP);}
        if ($PMO2 == 0) {$PMO2_porcentaje = 0;} else {$PMO2_porcentaje = round((($PMO2 * 100) / $PMO), 1, PHP_ROUND_HALF_UP);}
        if ($PMO3 == 0) {$PMO3_porcentaje = 0;} else {$PMO3_porcentaje = round((($PMO3 * 100) / $PMO), 1, PHP_ROUND_HALF_UP);}
        if ($PMO4 == 0) {$PMO4_porcentaje = 0;} else {$PMO4_porcentaje = round((($PMO4 * 100) / $PMO), 1, PHP_ROUND_HALF_UP);}
        if ($PMO5 == 0) {$PMO5_porcentaje = 0;} else {$PMO5_porcentaje = round((($PMO5 * 100) / $PMO), 1, PHP_ROUND_HALF_UP);}
        $PDJ1 = Consolidados::PDJ1(conexion::obtener_conexion());
        $PDJ2 = Consolidados::PDJ2(conexion::obtener_conexion());
        $PDJ3 = Consolidados::PDJ3(conexion::obtener_conexion());
        $PDJ4 = Consolidados::PDJ4(conexion::obtener_conexion());
        $PDJ5 = Consolidados::PDJ5(conexion::obtener_conexion());
        $PDJ = $PDJ1 + $PDJ2 + $PDJ3 + $PDJ4 + $PDJ5;
        if ($PDJ1 == 0) {$PDJ1_porcentaje = 0;} else {$PDJ1_porcentaje = round((($PDJ1 * 100) / $PDJ), 1, PHP_ROUND_HALF_UP);}
        if ($PDJ2 == 0) {$PDJ2_porcentaje = 0;} else {$PDJ2_porcentaje = round((($PDJ2 * 100) / $PDJ), 1, PHP_ROUND_HALF_UP);}
        if ($PDJ3 == 0) {$PDJ3_porcentaje = 0;} else {$PDJ3_porcentaje = round((($PDJ3 * 100) / $PDJ), 1, PHP_ROUND_HALF_UP);}
        if ($PDJ4 == 0) {$PDJ4_porcentaje = 0;} else {$PDJ4_porcentaje = round((($PDJ4 * 100) / $PDJ), 1, PHP_ROUND_HALF_UP);}
        if ($PDJ5 == 0) {$PDJ5_porcentaje = 0;} else {$PDJ5_porcentaje = round((($PDJ5 * 100) / $PDJ), 1, PHP_ROUND_HALF_UP);}
        $PDP1 = Consolidados::PDP1(conexion::obtener_conexion());
        $PDP2 = Consolidados::PDP2(conexion::obtener_conexion());
        $PDP3 = Consolidados::PDP3(conexion::obtener_conexion());
        $PDP4 = Consolidados::PDP4(conexion::obtener_conexion());
        $PDP5 = Consolidados::PDP5(conexion::obtener_conexion());
        $PDP = $PDP1 + $PDP2 + $PDP3 + $PDP4 + $PDP5;
        if ($PDP1 == 0) {$PDP1_porcentaje = 0;} else {$PDP1_porcentaje = round((($PDP1 * 100) / $PDP), 1, PHP_ROUND_HALF_UP);}
        if ($PDP2 == 0) {$PDP2_porcentaje = 0;} else {$PDP2_porcentaje = round((($PDP2 * 100) / $PDP), 1, PHP_ROUND_HALF_UP);}
        if ($PDP3 == 0) {$PDP3_porcentaje = 0;} else {$PDP3_porcentaje = round((($PDP3 * 100) / $PDP), 1, PHP_ROUND_HALF_UP);}
        if ($PDP4 == 0) {$PDP4_porcentaje = 0;} else {$PDP4_porcentaje = round((($PDP4 * 100) / $PDP), 1, PHP_ROUND_HALF_UP);}
        if ($PDP5 == 0) {$PDP5_porcentaje = 0;} else {$PDP5_porcentaje = round((($PDP5 * 100) / $PDP), 1, PHP_ROUND_HALF_UP);}
        $PDA1 = Consolidados::PDA1(conexion::obtener_conexion());
        $PDA2 = Consolidados::PDA2(conexion::obtener_conexion());
        $PDA3 = Consolidados::PDA3(conexion::obtener_conexion());
        $PDA4 = Consolidados::PDA4(conexion::obtener_conexion());
        $PDA5 = Consolidados::PDA5(conexion::obtener_conexion());
        $PDA = $PDA1 + $PDA2 + $PDA3 + $PDA4 + $PDA5;
        if ($PDA1 == 0) {$PDA1_porcentaje = 0;} else {$PDA1_porcentaje = round((($PDA1 * 100) / $PDA), 1, PHP_ROUND_HALF_UP);}
        if ($PDA2 == 0) {$PDA2_porcentaje = 0;} else {$PDA2_porcentaje = round((($PDA2 * 100) / $PDA), 1, PHP_ROUND_HALF_UP);}
        if ($PDA3 == 0) {$PDA3_porcentaje = 0;} else {$PDA3_porcentaje = round((($PDA3 * 100) / $PDA), 1, PHP_ROUND_HALF_UP);}
        if ($PDA4 == 0) {$PDA4_porcentaje = 0;} else {$PDA4_porcentaje = round((($PDA4 * 100) / $PDA), 1, PHP_ROUND_HALF_UP);}
        if ($PDA5 == 0) {$PDA5_porcentaje = 0;} else {$PDA5_porcentaje = round((($PDA5 * 100) / $PDA), 1, PHP_ROUND_HALF_UP);}
        $PDO1 = Consolidados::PDO1(conexion::obtener_conexion());
        $PDO2 = Consolidados::PDO2(conexion::obtener_conexion());
        $PDO3 = Consolidados::PDO3(conexion::obtener_conexion());
        $PDO4 = Consolidados::PDO4(conexion::obtener_conexion());
        $PDO5 = Consolidados::PDO5(conexion::obtener_conexion());
        $PDO = $PDO1 + $PDO2 + $PDO3 + $PDO4 + $PDO5;
        if ($PDO1 == 0) {$PDO1_porcentaje = 0;} else {$PDO1_porcentaje = round((($PDO1 * 100) / $PDO), 1, PHP_ROUND_HALF_UP);}
        if ($PDO2 == 0) {$PDO2_porcentaje = 0;} else {$PDO2_porcentaje = round((($PDO2 * 100) / $PDO), 1, PHP_ROUND_HALF_UP);}
        if ($PDO3 == 0) {$PDO3_porcentaje = 0;} else {$PDO3_porcentaje = round((($PDO3 * 100) / $PDO), 1, PHP_ROUND_HALF_UP);}
        if ($PDO4 == 0) {$PDO4_porcentaje = 0;} else {$PDO4_porcentaje = round((($PDO4 * 100) / $PDO), 1, PHP_ROUND_HALF_UP);}
        if ($PDO5 == 0) {$PDO5_porcentaje = 0;} else {$PDO5_porcentaje = round((($PDO5 * 100) / $PDO), 1, PHP_ROUND_HALF_UP);}
        $CAJ1 = Consolidados::CAJ1(conexion::obtener_conexion());
        $CAJ2 = Consolidados::CAJ2(conexion::obtener_conexion());
        $CAJ3 = Consolidados::CAJ3(conexion::obtener_conexion());
        $CAJ4 = Consolidados::CAJ4(conexion::obtener_conexion());
        $CAJ5 = Consolidados::CAJ5(conexion::obtener_conexion());
        $CAJ = $CAJ1 + $CAJ2 + $CAJ3 + $CAJ4 + $CAJ5;
        if ($CAJ1 == 0) {$CAJ1_porcentaje = 0;} else {$CAJ1_porcentaje = round((($CAJ1 * 100) / $CAJ), 1, PHP_ROUND_HALF_UP);}
        if ($CAJ2 == 0) {$CAJ2_porcentaje = 0;} else {$CAJ2_porcentaje = round((($CAJ2 * 100) / $CAJ), 1, PHP_ROUND_HALF_UP);}
        if ($CAJ3 == 0) {$CAJ3_porcentaje = 0;} else {$CAJ3_porcentaje = round((($CAJ3 * 100) / $CAJ), 1, PHP_ROUND_HALF_UP);}
        if ($CAJ4 == 0) {$CAJ4_porcentaje = 0;} else {$CAJ4_porcentaje = round((($CAJ4 * 100) / $CAJ), 1, PHP_ROUND_HALF_UP);}
        if ($CAJ5 == 0) {$CAJ5_porcentaje = 0;} else {$CAJ5_porcentaje = round((($CAJ5 * 100) / $CAJ), 1, PHP_ROUND_HALF_UP);}
        $CAP1 = Consolidados::CAP1(conexion::obtener_conexion());
        $CAP2 = Consolidados::CAP2(conexion::obtener_conexion());
        $CAP3 = Consolidados::CAP3(conexion::obtener_conexion());
        $CAP4 = Consolidados::CAP4(conexion::obtener_conexion());
        $CAP5 = Consolidados::CAP5(conexion::obtener_conexion());
        $CAP = $CAP1 + $CAP2 + $CAP3 + $CAP4 + $CAP5;
        if ($CAP1 == 0) {$CAP1_porcentaje = 0;} else {$CAP1_porcentaje = round((($CAP1 * 100) / $CAP), 1, PHP_ROUND_HALF_UP);}
        if ($CAP2 == 0) {$CAP2_porcentaje = 0;} else {$CAP2_porcentaje = round((($CAP2 * 100) / $CAP), 1, PHP_ROUND_HALF_UP);}
        if ($CAP3 == 0) {$CAP3_porcentaje = 0;} else {$CAP3_porcentaje = round((($CAP3 * 100) / $CAP), 1, PHP_ROUND_HALF_UP);}
        if ($CAP4 == 0) {$CAP4_porcentaje = 0;} else {$CAP4_porcentaje = round((($CAP4 * 100) / $CAP), 1, PHP_ROUND_HALF_UP);}
        if ($CAP5 == 0) {$CAP5_porcentaje = 0;} else {$CAP5_porcentaje = round((($CAP5 * 100) / $CAP), 1, PHP_ROUND_HALF_UP);}
        $CAA1 = Consolidados::CAA1(conexion::obtener_conexion());
        $CAA2 = Consolidados::CAA2(conexion::obtener_conexion());
        $CAA3 = Consolidados::CAA3(conexion::obtener_conexion());
        $CAA4 = Consolidados::CAA4(conexion::obtener_conexion());
        $CAA5 = Consolidados::CAA5(conexion::obtener_conexion());
        $CAA = $CAA1 + $CAA2 + $CAA3 + $CAA4 + $CAA5;
        if ($CAA1 == 0) {$CAA1_porcentaje = 0;} else {$CAA1_porcentaje = round((($CAA1 * 100) / $CAA), 1, PHP_ROUND_HALF_UP);}
        if ($CAA2 == 0) {$CAA2_porcentaje = 0;} else {$CAA2_porcentaje = round((($CAA2 * 100) / $CAA), 1, PHP_ROUND_HALF_UP);}
        if ($CAA3 == 0) {$CAA3_porcentaje = 0;} else {$CAA3_porcentaje = round((($CAA3 * 100) / $CAA), 1, PHP_ROUND_HALF_UP);}
        if ($CAA4 == 0) {$CAA4_porcentaje = 0;} else {$CAA4_porcentaje = round((($CAA4 * 100) / $CAA), 1, PHP_ROUND_HALF_UP);}
        if ($CAA5 == 0) {$CAA5_porcentaje = 0;} else {$CAA5_porcentaje = round((($CAA5 * 100) / $CAA), 1, PHP_ROUND_HALF_UP);}
        $CAO1 = Consolidados::CAO1(conexion::obtener_conexion());
        $CAO2 = Consolidados::CAO2(conexion::obtener_conexion());
        $CAO3 = Consolidados::CAO3(conexion::obtener_conexion());
        $CAO4 = Consolidados::CAO4(conexion::obtener_conexion());
        $CAO5 = Consolidados::CAO5(conexion::obtener_conexion());
        $CAO = $CAO1 + $CAO2 + $CAO3 + $CAO4 + $CAO5;
        if ($CAO1 == 0) {$CAO1_porcentaje = 0;} else {$CAO1_porcentaje = round((($CAO1 * 100) / $CAO), 1, PHP_ROUND_HALF_UP);}
        if ($CAO2 == 0) {$CAO2_porcentaje = 0;} else {$CAO2_porcentaje = round((($CAO2 * 100) / $CAO), 1, PHP_ROUND_HALF_UP);}
        if ($CAO3 == 0) {$CAO3_porcentaje = 0;} else {$CAO3_porcentaje = round((($CAO3 * 100) / $CAO), 1, PHP_ROUND_HALF_UP);}
        if ($CAO4 == 0) {$CAO4_porcentaje = 0;} else {$CAO4_porcentaje = round((($CAO4 * 100) / $CAO), 1, PHP_ROUND_HALF_UP);}
        if ($CAO5 == 0) {$CAO5_porcentaje = 0;} else {$CAO5_porcentaje = round((($CAO5 * 100) / $CAO), 1, PHP_ROUND_HALF_UP);}
        $DAEJ1 = Consolidados::DAEJ1(conexion::obtener_conexion());
        $DAEJ2 = Consolidados::DAEJ2(conexion::obtener_conexion());
        $DAEJ3 = Consolidados::DAEJ3(conexion::obtener_conexion());
        $DAEJ4 = Consolidados::DAEJ4(conexion::obtener_conexion());
        $DAEJ5 = Consolidados::DAEJ5(conexion::obtener_conexion());
        $DAEJ = $DAEJ1 + $DAEJ2 + $DAEJ3 + $DAEJ4 + $DAEJ5;
        if ($DAEJ1 == 0) {$DAEJ1_porcentaje = 0;} else {$DAEJ1_porcentaje = round((($DAEJ1 * 100) / $DAEJ), 1, PHP_ROUND_HALF_UP);}
        if ($DAEJ2 == 0) {$DAEJ2_porcentaje = 0;} else {$DAEJ2_porcentaje = round((($DAEJ2 * 100) / $DAEJ), 1, PHP_ROUND_HALF_UP);}
        if ($DAEJ3 == 0) {$DAEJ3_porcentaje = 0;} else {$DAEJ3_porcentaje = round((($DAEJ3 * 100) / $DAEJ), 1, PHP_ROUND_HALF_UP);}
        if ($DAEJ4 == 0) {$DAEJ4_porcentaje = 0;} else {$DAEJ4_porcentaje = round((($DAEJ4 * 100) / $DAEJ), 1, PHP_ROUND_HALF_UP);}
        if ($DAEJ5 == 0) {$DAEJ5_porcentaje = 0;} else {$DAEJ5_porcentaje = round((($DAEJ5 * 100) / $DAEJ), 1, PHP_ROUND_HALF_UP);}
        $DAEP1 = Consolidados::DAEP1(conexion::obtener_conexion());
        $DAEP2 = Consolidados::DAEP2(conexion::obtener_conexion());
        $DAEP3 = Consolidados::DAEP3(conexion::obtener_conexion());
        $DAEP4 = Consolidados::DAEP4(conexion::obtener_conexion());
        $DAEP5 = Consolidados::DAEP5(conexion::obtener_conexion());
        $DAEP = $DAEP1 + $DAEP2 + $DAEP3 + $DAEP4 + $DAEP5;
        if ($DAEP1 == 0) {$DAEP1_porcentaje = 0;} else {$DAEP1_porcentaje = round((($DAEP1 * 100) / $DAEP), 1, PHP_ROUND_HALF_UP);}
        if ($DAEP2 == 0) {$DAEP2_porcentaje = 0;} else {$DAEP2_porcentaje = round((($DAEP2 * 100) / $DAEP), 1, PHP_ROUND_HALF_UP);}
        if ($DAEP3 == 0) {$DAEP3_porcentaje = 0;} else {$DAEP3_porcentaje = round((($DAEP3 * 100) / $DAEP), 1, PHP_ROUND_HALF_UP);}
        if ($DAEP4 == 0) {$DAEP4_porcentaje = 0;} else {$DAEP4_porcentaje = round((($DAEP4 * 100) / $DAEP), 1, PHP_ROUND_HALF_UP);}
        if ($DAEP5 == 0) {$DAEP5_porcentaje = 0;} else {$DAEP5_porcentaje = round((($DAEP5 * 100) / $DAEP), 1, PHP_ROUND_HALF_UP);}
        $DAEA1 = Consolidados::DAEA1(conexion::obtener_conexion());
        $DAEA2 = Consolidados::DAEA2(conexion::obtener_conexion());
        $DAEA3 = Consolidados::DAEA3(conexion::obtener_conexion());
        $DAEA4 = Consolidados::DAEA4(conexion::obtener_conexion());
        $DAEA5 = Consolidados::DAEA5(conexion::obtener_conexion());
        $DAEA = $DAEA1 + $DAEA2 + $DAEA3 + $DAEA4 + $DAEA5;
        if ($DAEA1 == 0) {$DAEA1_porcentaje = 0;} else {$DAEA1_porcentaje = round((($DAEA1 * 100) / $DAEA), 1, PHP_ROUND_HALF_UP);}
        if ($DAEA2 == 0) {$DAEA2_porcentaje = 0;} else {$DAEA2_porcentaje = round((($DAEA2 * 100) / $DAEA), 1, PHP_ROUND_HALF_UP);}
        if ($DAEA3 == 0) {$DAEA3_porcentaje = 0;} else {$DAEA3_porcentaje = round((($DAEA3 * 100) / $DAEA), 1, PHP_ROUND_HALF_UP);}
        if ($DAEA4 == 0) {$DAEA4_porcentaje = 0;} else {$DAEA4_porcentaje = round((($DAEA4 * 100) / $DAEA), 1, PHP_ROUND_HALF_UP);}
        if ($DAEA5 == 0) {$DAEA5_porcentaje = 0;} else {$DAEA5_porcentaje = round((($DAEA5 * 100) / $DAEA), 1, PHP_ROUND_HALF_UP);}
        $DAEO1 = Consolidados::DAEO1(conexion::obtener_conexion());
        $DAEO2 = Consolidados::DAEO2(conexion::obtener_conexion());
        $DAEO3 = Consolidados::DAEO3(conexion::obtener_conexion());
        $DAEO4 = Consolidados::DAEO4(conexion::obtener_conexion());
        $DAEO5 = Consolidados::DAEO5(conexion::obtener_conexion());
        $DAEO = $DAEO1 + $DAEO2 + $DAEO3 + $DAEO4 + $DAEO5;
        if ($DAEO1 == 0) {$DAEO1_porcentaje = 0;} else {$DAEO1_porcentaje = round((($DAEO1 * 100) / $DAEO), 1, PHP_ROUND_HALF_UP);}
        if ($DAEO2 == 0) {$DAEO2_porcentaje = 0;} else {$DAEO2_porcentaje = round((($DAEO2 * 100) / $DAEO), 1, PHP_ROUND_HALF_UP);}
        if ($DAEO3 == 0) {$DAEO3_porcentaje = 0;} else {$DAEO3_porcentaje = round((($DAEO3 * 100) / $DAEO), 1, PHP_ROUND_HALF_UP);}
        if ($DAEO4 == 0) {$DAEO4_porcentaje = 0;} else {$DAEO4_porcentaje = round((($DAEO4 * 100) / $DAEO), 1, PHP_ROUND_HALF_UP);}
        if ($DAEO5 == 0) {$DAEO5_porcentaje = 0;} else {$DAEO5_porcentaje = round((($DAEO5 * 100) / $DAEO), 1, PHP_ROUND_HALF_UP);}
        $DEJ1 = Consolidados::DEJ1(conexion::obtener_conexion());
        $DEJ2 = Consolidados::DEJ2(conexion::obtener_conexion());
        $DEJ3 = Consolidados::DEJ3(conexion::obtener_conexion());
        $DEJ4 = Consolidados::DEJ4(conexion::obtener_conexion());
        $DEJ5 = Consolidados::DEJ5(conexion::obtener_conexion());
        $DEJ = $DEJ1 + $DEJ2 + $DEJ3 + $DEJ4 + $DEJ5;
        if ($DEJ1 == 0) {$DEJ1_porcentaje = 0;} else {$DEJ1_porcentaje = round((($DEJ1 * 100) / $DEJ), 1, PHP_ROUND_HALF_UP);}
        if ($DEJ2 == 0) {$DEJ2_porcentaje = 0;} else {$DEJ2_porcentaje = round((($DEJ2 * 100) / $DEJ), 1, PHP_ROUND_HALF_UP);}
        if ($DEJ3 == 0) {$DEJ3_porcentaje = 0;} else {$DEJ3_porcentaje = round((($DEJ3 * 100) / $DEJ), 1, PHP_ROUND_HALF_UP);}
        if ($DEJ4 == 0) {$DEJ4_porcentaje = 0;} else {$DEJ4_porcentaje = round((($DEJ4 * 100) / $DEJ), 1, PHP_ROUND_HALF_UP);}
        if ($DEJ5 == 0) {$DEJ5_porcentaje = 0;} else {$DEJ5_porcentaje = round((($DEJ5 * 100) / $DEJ), 1, PHP_ROUND_HALF_UP);}
        $DEP1 = Consolidados::DEP01(conexion::obtener_conexion());
        $DEP2 = Consolidados::DEP02(conexion::obtener_conexion());
        $DEP3 = Consolidados::DEP03(conexion::obtener_conexion());
        $DEP4 = Consolidados::DEP04(conexion::obtener_conexion());
        $DEP5 = Consolidados::DEP05(conexion::obtener_conexion());
        $DEP = $DEP1 + $DEP2 + $DEP3 + $DEP4 + $DEP5;
        if ($DEP1 == 0) {$DEP1_porcentaje = 0;} else {$DEP1_porcentaje = round((($DEP1 * 100) / $DEP), 1, PHP_ROUND_HALF_UP);}
        if ($DEP2 == 0) {$DEP2_porcentaje = 0;} else {$DEP2_porcentaje = round((($DEP2 * 100) / $DEP), 1, PHP_ROUND_HALF_UP);}
        if ($DEP3 == 0) {$DEP3_porcentaje = 0;} else {$DEP3_porcentaje = round((($DEP3 * 100) / $DEP), 1, PHP_ROUND_HALF_UP);}
        if ($DEP4 == 0) {$DEP4_porcentaje = 0;} else {$DEP4_porcentaje = round((($DEP4 * 100) / $DEP), 1, PHP_ROUND_HALF_UP);}
        if ($DEP5 == 0) {$DEP5_porcentaje = 0;} else {$DEP5_porcentaje = round((($DEP5 * 100) / $DEP), 1, PHP_ROUND_HALF_UP);}
        $DEA1 = Consolidados::DEA1(conexion::obtener_conexion());
        $DEA2 = Consolidados::DEA2(conexion::obtener_conexion());
        $DEA3 = Consolidados::DEA3(conexion::obtener_conexion());
        $DEA4 = Consolidados::DEA4(conexion::obtener_conexion());
        $DEA5 = Consolidados::DEA5(conexion::obtener_conexion());
        $DEA = $DEA1 + $DEA2 + $DEA3 + $DEA4 + $DEA5;
        if ($DEA1 == 0) {$DEA1_porcentaje = 0;} else {$DEA1_porcentaje = round((($DEA1 * 100) / $DEA), 1, PHP_ROUND_HALF_UP);}
        if ($DEA2 == 0) {$DEA2_porcentaje = 0;} else {$DEA2_porcentaje = round((($DEA2 * 100) / $DEA), 1, PHP_ROUND_HALF_UP);}
        if ($DEA3 == 0) {$DEA3_porcentaje = 0;} else {$DEA3_porcentaje = round((($DEA3 * 100) / $DEA), 1, PHP_ROUND_HALF_UP);}
        if ($DEA4 == 0) {$DEA4_porcentaje = 0;} else {$DEA4_porcentaje = round((($DEA4 * 100) / $DEA), 1, PHP_ROUND_HALF_UP);}
        if ($DEA5 == 0) {$DEA5_porcentaje = 0;} else {$DEA5_porcentaje = round((($DEA5 * 100) / $DEA), 1, PHP_ROUND_HALF_UP);}
        $DEO1 = Consolidados::DEO1(conexion::obtener_conexion());
        $DEO2 = Consolidados::DEO2(conexion::obtener_conexion());
        $DEO3 = Consolidados::DEO3(conexion::obtener_conexion());
        $DEO4 = Consolidados::DEO4(conexion::obtener_conexion());
        $DEO5 = Consolidados::DEO5(conexion::obtener_conexion());
        $DEO = $DEO1 + $DEO2 + $DEO3 + $DEO4 + $DEO5;
        if ($DEO1 == 0) {$DEO1_porcentaje = 0;} else {$DEO1_porcentaje = round((($DEO1 * 100) / $DEO), 1, PHP_ROUND_HALF_UP);}
        if ($DEO2 == 0) {$DEO2_porcentaje = 0;} else {$DEO2_porcentaje = round((($DEO2 * 100) / $DEO), 1, PHP_ROUND_HALF_UP);}
        if ($DEO3 == 0) {$DEO3_porcentaje = 0;} else {$DEO3_porcentaje = round((($DEO3 * 100) / $DEO), 1, PHP_ROUND_HALF_UP);}
        if ($DEO4 == 0) {$DEO4_porcentaje = 0;} else {$DEO4_porcentaje = round((($DEO4 * 100) / $DEO), 1, PHP_ROUND_HALF_UP);}
        if ($DEO5 == 0) {$DEO5_porcentaje = 0;} else {$DEO5_porcentaje = round((($DEO5 * 100) / $DEO), 1, PHP_ROUND_HALF_UP);}
        $DCJ1 = Consolidados::DCJ1(conexion::obtener_conexion());
        $DCJ2 = Consolidados::DCJ2(conexion::obtener_conexion());
        $DCJ3 = Consolidados::DCJ3(conexion::obtener_conexion());
        $DCJ4 = Consolidados::DCJ4(conexion::obtener_conexion());
        $DCJ5 = Consolidados::DCJ5(conexion::obtener_conexion());
        $DCJ = $DCJ1 + $DCJ2 + $DCJ3 + $DCJ4 + $DCJ5;
        if ($DCJ1 == 0) {$DCJ1_porcentaje = 0;} else { $DCJ1_porcentaje = round((($DCJ1 * 100) / $DCJ), 1, PHP_ROUND_HALF_UP);}
        if ($DCJ2 == 0) {$DCJ2_porcentaje = 0;} else { $DCJ2_porcentaje = round((($DCJ2 * 100) / $DCJ), 1, PHP_ROUND_HALF_UP);}
        if ($DCJ3 == 0) {$DCJ3_porcentaje = 0;} else { $DCJ3_porcentaje = round((($DCJ3 * 100) / $DCJ), 1, PHP_ROUND_HALF_UP);}
        if ($DCJ4 == 0) {$DCJ4_porcentaje = 0;} else { $DCJ4_porcentaje = round((($DCJ4 * 100) / $DCJ), 1, PHP_ROUND_HALF_UP);}
        if ($DCJ5 == 0) {$DCJ5_porcentaje = 0;} else { $DCJ5_porcentaje = round((($DCJ5 * 100) / $DCJ), 1, PHP_ROUND_HALF_UP);}
        $DCP1 = Consolidados::DCP1(conexion::obtener_conexion());
        $DCP2 = Consolidados::DCP2(conexion::obtener_conexion());
        $DCP3 = Consolidados::DCP3(conexion::obtener_conexion());
        $DCP4 = Consolidados::DCP4(conexion::obtener_conexion());
        $DCP5 = Consolidados::DCP5(conexion::obtener_conexion());
        $DCP = $DCP1 + $DCP2 + $DCP3 + $DCP4 + $DCP5;
        if ($DCP1 == 0) {$DCP1_porcentaje = 0;} else {$DCP1_porcentaje = round((($DCP1 * 100) / $DCP), 1, PHP_ROUND_HALF_UP);}
        if ($DCP2 == 0) {$DCP2_porcentaje = 0;} else {$DCP2_porcentaje = round((($DCP2 * 100) / $DCP), 1, PHP_ROUND_HALF_UP);}
        if ($DCP3 == 0) {$DCP3_porcentaje = 0;} else {$DCP3_porcentaje = round((($DCP3 * 100) / $DCP), 1, PHP_ROUND_HALF_UP);}
        if ($DCP4 == 0) {$DCP4_porcentaje = 0;} else {$DCP4_porcentaje = round((($DCP4 * 100) / $DCP), 1, PHP_ROUND_HALF_UP);}
        if ($DCP5 == 0) {$DCP5_porcentaje = 0;} else {$DCP5_porcentaje = round((($DCP5 * 100) / $DCP), 1, PHP_ROUND_HALF_UP);}
        $DCA1 = Consolidados::DCA1(conexion::obtener_conexion());
        $DCA2 = Consolidados::DCA2(conexion::obtener_conexion());
        $DCA3 = Consolidados::DCA3(conexion::obtener_conexion());
        $DCA4 = Consolidados::DCA4(conexion::obtener_conexion());
        $DCA5 = Consolidados::DCA5(conexion::obtener_conexion());
        $DCA = $DCA1 + $DCA2 + $DCA3 + $DCA4 + $DCA5;
        if ($DCA1 == 0) {$DCA1_porcentaje = 0;} else {$DCA1_porcentaje = round((($DCA1 * 100) / $DCA), 1, PHP_ROUND_HALF_UP);}
        if ($DCA2 == 0) {$DCA2_porcentaje = 0;} else {$DCA2_porcentaje = round((($DCA2 * 100) / $DCA), 1, PHP_ROUND_HALF_UP);}
        if ($DCA3 == 0) {$DCA3_porcentaje = 0;} else {$DCA3_porcentaje = round((($DCA3 * 100) / $DCA), 1, PHP_ROUND_HALF_UP);}
        if ($DCA4 == 0) {$DCA4_porcentaje = 0;} else {$DCA4_porcentaje = round((($DCA4 * 100) / $DCA), 1, PHP_ROUND_HALF_UP);}
        if ($DCA5 == 0) {$DCA5_porcentaje = 0;} else {$DCA5_porcentaje = round((($DCA5 * 100) / $DCA), 1, PHP_ROUND_HALF_UP);}
        $DCO1 = Consolidados::DCO1(conexion::obtener_conexion());
        $DCO2 = Consolidados::DCO2(conexion::obtener_conexion());
        $DCO3 = Consolidados::DCO3(conexion::obtener_conexion());
        $DCO4 = Consolidados::DCO4(conexion::obtener_conexion());
        $DCO5 = Consolidados::DCO5(conexion::obtener_conexion());
        $DCO = $DCO1 + $DCO2 + $DCO3 + $DCO4 + $DCO5;
        if ($DCO1 == 0) {$DCO1_porcentaje = 0;} else {$DCO1_porcentaje = round((($DCO1 * 100) / $DCO), 1, PHP_ROUND_HALF_UP);}
        if ($DCO2 == 0) {$DCO2_porcentaje = 0;} else {$DCO2_porcentaje = round((($DCO2 * 100) / $DCO), 1, PHP_ROUND_HALF_UP);}
        if ($DCO3 == 0) {$DCO3_porcentaje = 0;} else {$DCO3_porcentaje = round((($DCO3 * 100) / $DCO), 1, PHP_ROUND_HALF_UP);}
        if ($DCO4 == 0) {$DCO4_porcentaje = 0;} else {$DCO4_porcentaje = round((($DCO4 * 100) / $DCO), 1, PHP_ROUND_HALF_UP);}
        if ($DCO5 == 0) {$DCO5_porcentaje = 0;} else {$DCO5_porcentaje = round((($DCO5 * 100) / $DCO), 1, PHP_ROUND_HALF_UP);}
        $ITJ1 = Consolidados::ITJ1(conexion::obtener_conexion());
        $ITJ2 = Consolidados::ITJ2(conexion::obtener_conexion());
        $ITJ3 = Consolidados::ITJ3(conexion::obtener_conexion());
        $ITJ4 = Consolidados::ITJ4(conexion::obtener_conexion());
        $ITJ5 = Consolidados::ITJ5(conexion::obtener_conexion());
        $ITJ = $ITJ1 + $ITJ2 + $ITJ3 + $ITJ4 + $ITJ5;
        if ($ITJ1 == 0) {$ITJ1_porcentaje = 0;} else {$ITJ1_porcentaje = round((($ITJ1 * 100) / $ITJ), 1, PHP_ROUND_HALF_UP);}
        if ($ITJ2 == 0) {$ITJ2_porcentaje = 0;} else {$ITJ2_porcentaje = round((($ITJ2 * 100) / $ITJ), 1, PHP_ROUND_HALF_UP);}
        if ($ITJ3 == 0) {$ITJ3_porcentaje = 0;} else {$ITJ3_porcentaje = round((($ITJ3 * 100) / $ITJ), 1, PHP_ROUND_HALF_UP);}
        if ($ITJ4 == 0) {$ITJ4_porcentaje = 0;} else {$ITJ4_porcentaje = round((($ITJ4 * 100) / $ITJ), 1, PHP_ROUND_HALF_UP);}
        if ($ITJ5 == 0) {$ITJ5_porcentaje = 0;} else {$ITJ5_porcentaje = round((($ITJ5 * 100) / $ITJ), 1, PHP_ROUND_HALF_UP);}
        $ITP1 = Consolidados::ITP1(conexion::obtener_conexion());
        $ITP2 = Consolidados::ITP2(conexion::obtener_conexion());
        $ITP3 = Consolidados::ITP3(conexion::obtener_conexion());
        $ITP4 = Consolidados::ITP4(conexion::obtener_conexion());
        $ITP5 = Consolidados::ITP5(conexion::obtener_conexion());
        $ITP = $ITP1 + $ITP2 + $ITP3 + $ITP4 + $ITP5;
        if ($ITP1 == 0) {$ITP1_porcentaje = 0;} else {$ITP1_porcentaje = round((($ITP1 * 100) / $ITP), 1, PHP_ROUND_HALF_UP);}
        if ($ITP2 == 0) {$ITP2_porcentaje = 0;} else {$ITP2_porcentaje = round((($ITP2 * 100) / $ITP), 1, PHP_ROUND_HALF_UP);}
        if ($ITP3 == 0) {$ITP3_porcentaje = 0;} else {$ITP3_porcentaje = round((($ITP3 * 100) / $ITP), 1, PHP_ROUND_HALF_UP);}
        if ($ITP4 == 0) {$ITP4_porcentaje = 0;} else {$ITP4_porcentaje = round((($ITP4 * 100) / $ITP), 1, PHP_ROUND_HALF_UP);}
        if ($ITP5 == 0) {$ITP5_porcentaje = 0;} else {$ITP5_porcentaje = round((($ITP5 * 100) / $ITP), 1, PHP_ROUND_HALF_UP);}
        $ITA1 = Consolidados::ITA1(conexion::obtener_conexion());
        $ITA2 = Consolidados::ITA2(conexion::obtener_conexion());
        $ITA3 = Consolidados::ITA3(conexion::obtener_conexion());
        $ITA4 = Consolidados::ITA4(conexion::obtener_conexion());
        $ITA5 = Consolidados::ITA5(conexion::obtener_conexion());
        $ITA = $ITA1 + $ITA2 + $ITA3 + $ITA4 + $ITA5;
        if ($ITA1 == 0) {$ITA1_porcentaje = 0;} else {$ITA1_porcentaje = round((($ITA1 * 100) / $ITA), 1, PHP_ROUND_HALF_UP);}
        if ($ITA2 == 0) {$ITA2_porcentaje = 0;} else {$ITA2_porcentaje = round((($ITA2 * 100) / $ITA), 1, PHP_ROUND_HALF_UP);}
        if ($ITA3 == 0) {$ITA3_porcentaje = 0;} else {$ITA3_porcentaje = round((($ITA3 * 100) / $ITA), 1, PHP_ROUND_HALF_UP);}
        if ($ITA4 == 0) {$ITA4_porcentaje = 0;} else {$ITA4_porcentaje = round((($ITA4 * 100) / $ITA), 1, PHP_ROUND_HALF_UP);}
        if ($ITA5 == 0) {$ITA5_porcentaje = 0;} else {$ITA5_porcentaje = round((($ITA5 * 100) / $ITA), 1, PHP_ROUND_HALF_UP);}
        $ITO1 = Consolidados::ITO1(conexion::obtener_conexion());
        $ITO2 = Consolidados::ITO2(conexion::obtener_conexion());
        $ITO3 = Consolidados::ITO3(conexion::obtener_conexion());
        $ITO4 = Consolidados::ITO4(conexion::obtener_conexion());
        $ITO5 = Consolidados::ITO5(conexion::obtener_conexion());
        $ITO = $ITO1 + $ITO2 + $ITO3 + $ITO4 + $ITO5;
        if ($ITO1 == 0) {$ITO1_porcentaje = 0;} else {$ITO1_porcentaje = round((($ITO1 * 100) / $ITO), 1, PHP_ROUND_HALF_UP);}
        if ($ITO2 == 0) {$ITO2_porcentaje = 0;} else {$ITO2_porcentaje = round((($ITO2 * 100) / $ITO), 1, PHP_ROUND_HALF_UP);}
        if ($ITO3 == 0) {$ITO3_porcentaje = 0;} else {$ITO3_porcentaje = round((($ITO3 * 100) / $ITO), 1, PHP_ROUND_HALF_UP);}
        if ($ITO4 == 0) {$ITO4_porcentaje = 0;} else {$ITO4_porcentaje = round((($ITO4 * 100) / $ITO), 1, PHP_ROUND_HALF_UP);}
        if ($ITO5 == 0) {$ITO5_porcentaje = 0;} else {$ITO5_porcentaje = round((($ITO5 * 100) / $ITO), 1, PHP_ROUND_HALF_UP);}
        $ERJ1 = Consolidados::ERJ1(conexion::obtener_conexion());
        $ERJ2 = Consolidados::ERJ2(conexion::obtener_conexion());
        $ERJ3 = Consolidados::ERJ3(conexion::obtener_conexion());
        $ERJ4 = Consolidados::ERJ4(conexion::obtener_conexion());
        $ERJ5 = Consolidados::ERJ5(conexion::obtener_conexion());
        $ERJ = $ERJ1 + $ERJ2 + $ERJ3 + $ERJ4 + $ERJ5;
        if ($ERJ1 == 0) {$ERJ1_porcentaje = 0;} else {$ERJ1_porcentaje = round((($ERJ1 * 100) / $ERJ), 1, PHP_ROUND_HALF_UP);}
        if ($ERJ2 == 0) {$ERJ2_porcentaje = 0;} else {$ERJ2_porcentaje = round((($ERJ2 * 100) / $ERJ), 1, PHP_ROUND_HALF_UP);}
        if ($ERJ3 == 0) {$ERJ3_porcentaje = 0;} else {$ERJ3_porcentaje = round((($ERJ3 * 100) / $ERJ), 1, PHP_ROUND_HALF_UP);}
        if ($ERJ4 == 0) {$ERJ4_porcentaje = 0;} else {$ERJ4_porcentaje = round((($ERJ4 * 100) / $ERJ), 1, PHP_ROUND_HALF_UP);}
        if ($ERJ5 == 0) {$ERJ5_porcentaje = 0;} else {$ERJ5_porcentaje = round((($ERJ5 * 100) / $ERJ), 1, PHP_ROUND_HALF_UP);}
        $ERP1 = Consolidados::ERP1(conexion::obtener_conexion());
        $ERP2 = Consolidados::ERP2(conexion::obtener_conexion());
        $ERP3 = Consolidados::ERP3(conexion::obtener_conexion());
        $ERP4 = Consolidados::ERP4(conexion::obtener_conexion());
        $ERP5 = Consolidados::ERP5(conexion::obtener_conexion());
        $ERP = $ERP1 + $ERP2 + $ERP3 + $ERP4 + $ERP5;
        if ($ERP1 == 0) {$ERP1_porcentaje = 0;} else {$ERP1_porcentaje = round((($ERP1 * 100) / $ERP), 1, PHP_ROUND_HALF_UP);}
        if ($ERP2 == 0) {$ERP2_porcentaje = 0;} else {$ERP2_porcentaje = round((($ERP2 * 100) / $ERP), 1, PHP_ROUND_HALF_UP);}
        if ($ERP3 == 0) {$ERP3_porcentaje = 0;} else {$ERP3_porcentaje = round((($ERP3 * 100) / $ERP), 1, PHP_ROUND_HALF_UP);}
        if ($ERP4 == 0) {$ERP4_porcentaje = 0;} else {$ERP4_porcentaje = round((($ERP4 * 100) / $ERP), 1, PHP_ROUND_HALF_UP);}
        if ($ERP5 == 0) {$ERP5_porcentaje = 0;} else {$ERP5_porcentaje = round((($ERP5 * 100) / $ERP), 1, PHP_ROUND_HALF_UP);}
        $DCMJ1 = Consolidados::DCMJ1(conexion::obtener_conexion());
        $DCMJ2 = Consolidados::DCMJ2(conexion::obtener_conexion());
        $DCMJ3 = Consolidados::DCMJ3(conexion::obtener_conexion());
        $DCMJ4 = Consolidados::DCMJ4(conexion::obtener_conexion());
        $DCMJ5 = Consolidados::DCMJ5(conexion::obtener_conexion());
        $DCMJ = $DCMJ1 + $DCMJ2 + $DCMJ3 + $DCMJ4 + $DCMJ5;
        if ($DCMJ1 == 0) {$DCMJ1_porcentaje = 0;} else {$DCMJ1_porcentaje = round((($DCMJ1 * 100) / $DCMJ), 1, PHP_ROUND_HALF_UP);}
        if ($DCMJ2 == 0) {$DCMJ2_porcentaje = 0;} else {$DCMJ2_porcentaje = round((($DCMJ2 * 100) / $DCMJ), 1, PHP_ROUND_HALF_UP);}
        if ($DCMJ3 == 0) {$DCMJ3_porcentaje = 0;} else {$DCMJ3_porcentaje = round((($DCMJ3 * 100) / $DCMJ), 1, PHP_ROUND_HALF_UP);}
        if ($DCMJ4 == 0) {$DCMJ4_porcentaje = 0;} else {$DCMJ4_porcentaje = round((($DCMJ4 * 100) / $DCMJ), 1, PHP_ROUND_HALF_UP);}
        if ($DCMJ5 == 0) {$DCMJ5_porcentaje = 0;} else {$DCMJ5_porcentaje = round((($DCMJ5 * 100) / $DCMJ), 1, PHP_ROUND_HALF_UP);}
        $DCMP1 = Consolidados::DCMP1(conexion::obtener_conexion());
        $DCMP2 = Consolidados::DCMP2(conexion::obtener_conexion());
        $DCMP3 = Consolidados::DCMP3(conexion::obtener_conexion());
        $DCMP4 = Consolidados::DCMP4(conexion::obtener_conexion());
        $DCMP5 = Consolidados::DCMP5(conexion::obtener_conexion());
        $DCMP = $DCMP1 + $DCMP2 + $DCMP3 + $DCMP4 + $DCMP5;
        if ($DCMP1 == 0) {$DCMP1_porcentaje = 0;} else {$DCMP1_porcentaje = round((($DCMP1 * 100) / $DCMP), 1, PHP_ROUND_HALF_UP);}
        if ($DCMP2 == 0) {$DCMP2_porcentaje = 0;} else {$DCMP2_porcentaje = round((($DCMP2 * 100) / $DCMP), 1, PHP_ROUND_HALF_UP);}
        if ($DCMP3 == 0) {$DCMP3_porcentaje = 0;} else {$DCMP3_porcentaje = round((($DCMP3 * 100) / $DCMP), 1, PHP_ROUND_HALF_UP);}
        if ($DCMP4 == 0) {$DCMP4_porcentaje = 0;} else {$DCMP4_porcentaje = round((($DCMP4 * 100) / $DCMP), 1, PHP_ROUND_HALF_UP);}
        if ($DCMP5 == 0) {$DCMP5_porcentaje = 0;} else {$DCMP5_porcentaje = round((($DCMP5 * 100) / $DCMP), 1, PHP_ROUND_HALF_UP);}
        $DCMA1 = Consolidados::DCMA1(conexion::obtener_conexion());
        $DCMA2 = Consolidados::DCMA2(conexion::obtener_conexion());
        $DCMA3 = Consolidados::DCMA3(conexion::obtener_conexion());
        $DCMA4 = Consolidados::DCMA4(conexion::obtener_conexion());
        $DCMA5 = Consolidados::DCMA5(conexion::obtener_conexion());
        $DCMA = $DCMA1 + $DCMA2 + $DCMA3 + $DCMA4 + $DCMA5;
        if ($DCMA1 == 0) {$DCMA1_porcentaje = 0;} else {$DCMA1_porcentaje = round((($DCMA1 * 100) / $DCMA), 1, PHP_ROUND_HALF_UP);}
        if ($DCMA2 == 0) {$DCMA2_porcentaje = 0;} else {$DCMA2_porcentaje = round((($DCMA2 * 100) / $DCMA), 1, PHP_ROUND_HALF_UP);}
        if ($DCMA3 == 0) {$DCMA3_porcentaje = 0;} else {$DCMA3_porcentaje = round((($DCMA3 * 100) / $DCMA), 1, PHP_ROUND_HALF_UP);}
        if ($DCMA4 == 0) {$DCMA4_porcentaje = 0;} else {$DCMA4_porcentaje = round((($DCMA4 * 100) / $DCMA), 1, PHP_ROUND_HALF_UP);}
        if ($DCMA5 == 0) {$DCMA5_porcentaje = 0;} else {$DCMA5_porcentaje = round((($DCMA5 * 100) / $DCMA), 1, PHP_ROUND_HALF_UP);}
        $DCMO1 = Consolidados::DCMO1(conexion::obtener_conexion());
        $DCMO2 = Consolidados::DCMO2(conexion::obtener_conexion());
        $DCMO3 = Consolidados::DCMO3(conexion::obtener_conexion());
        $DCMO4 = Consolidados::DCMO4(conexion::obtener_conexion());
        $DCMO5 = Consolidados::DCMO5(conexion::obtener_conexion());
        $DCMO = $DCMO1 + $DCMO2 + $DCMO3 + $DCMO4 + $DCMO5;
        if ($DCMO1 == 0) {$DCMO1_porcentaje = 0;} else {$DCMO1_porcentaje = round((($DCMO1 * 100) / $DCMO), 1, PHP_ROUND_HALF_UP);}
        if ($DCMO2 == 0) {$DCMO2_porcentaje = 0;} else {$DCMO2_porcentaje = round((($DCMO2 * 100) / $DCMO), 1, PHP_ROUND_HALF_UP);}
        if ($DCMO3 == 0) {$DCMO3_porcentaje = 0;} else {$DCMO3_porcentaje = round((($DCMO3 * 100) / $DCMO), 1, PHP_ROUND_HALF_UP);}
        if ($DCMO4 == 0) {$DCMO4_porcentaje = 0;} else {$DCMO4_porcentaje = round((($DCMO4 * 100) / $DCMO), 1, PHP_ROUND_HALF_UP);}
        if ($DCMO5 == 0) {$DCMO5_porcentaje = 0;} else {$DCMO5_porcentaje = round((($DCMO5 * 100) / $DCMO), 1, PHP_ROUND_HALF_UP);}
        $CRLJ1 = Consolidados::CRLJ1(conexion::obtener_conexion());
        $CRLJ2 = Consolidados::CRLJ2(conexion::obtener_conexion());
        $CRLJ3 = Consolidados::CRLJ3(conexion::obtener_conexion());
        $CRLJ4 = Consolidados::CRLJ4(conexion::obtener_conexion());
        $CRLJ5 = Consolidados::CRLJ5(conexion::obtener_conexion());
        $CRLJ = $CRLJ1 + $CRLJ2 + $CRLJ3 + $CRLJ4 + $CRLJ5;
        if ($CRLJ1 == 0) {$CRLJ1_porcentaje = 0;} else {$CRLJ1_porcentaje = round((($CRLJ1 * 100) / $CRLJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRLJ2 == 0) {$CRLJ2_porcentaje = 0;} else {$CRLJ2_porcentaje = round((($CRLJ2 * 100) / $CRLJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRLJ3 == 0) {$CRLJ3_porcentaje = 0;} else {$CRLJ3_porcentaje = round((($CRLJ3 * 100) / $CRLJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRLJ4 == 0) {$CRLJ4_porcentaje = 0;} else {$CRLJ4_porcentaje = round((($CRLJ4 * 100) / $CRLJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRLJ5 == 0) {$CRLJ5_porcentaje = 0;} else {$CRLJ5_porcentaje = round((($CRLJ5 * 100) / $CRLJ), 1, PHP_ROUND_HALF_UP);}
        $CRLP1 = Consolidados::CRLP1(conexion::obtener_conexion());
        $CRLP2 = Consolidados::CRLP2(conexion::obtener_conexion());
        $CRLP3 = Consolidados::CRLP3(conexion::obtener_conexion());
        $CRLP4 = Consolidados::CRLP4(conexion::obtener_conexion());
        $CRLP5 = Consolidados::CRLP5(conexion::obtener_conexion());
        $CRLP = $CRLP1 + $CRLP2 + $CRLP3 + $CRLP4 + $CRLP5;
        if ($CRLP1 == 0) {$CRLP1_porcentaje = 0;} else {$CRLP1_porcentaje = round((($CRLP1 * 100) / $CRLP), 1, PHP_ROUND_HALF_UP);}
        if ($CRLP2 == 0) {$CRLP2_porcentaje = 0;} else {$CRLP2_porcentaje = round((($CRLP2 * 100) / $CRLP), 1, PHP_ROUND_HALF_UP);}
        if ($CRLP3 == 0) {$CRLP3_porcentaje = 0;} else {$CRLP3_porcentaje = round((($CRLP3 * 100) / $CRLP), 1, PHP_ROUND_HALF_UP);}
        if ($CRLP4 == 0) {$CRLP4_porcentaje = 0;} else {$CRLP4_porcentaje = round((($CRLP4 * 100) / $CRLP), 1, PHP_ROUND_HALF_UP);}
        if ($CRLP5 == 0) {$CRLP5_porcentaje = 0;} else {$CRLP5_porcentaje = round((($CRLP5 * 100) / $CRLP), 1, PHP_ROUND_HALF_UP);}
        $DJTJ1 = Consolidados::DJTJ1(conexion::obtener_conexion());
        $DJTJ2 = Consolidados::DJTJ2(conexion::obtener_conexion());
        $DJTJ3 = Consolidados::DJTJ3(conexion::obtener_conexion());
        $DJTJ4 = Consolidados::DJTJ4(conexion::obtener_conexion());
        $DJTJ5 = Consolidados::DJTJ5(conexion::obtener_conexion());
        $DJTJ = $DJTJ1 + $DJTJ2 + $DJTJ3 + $DJTJ4 + $DJTJ5;
        if ($DJTJ1 == 0) {$DJTJ1_porcentaje = 0;} else {$DJTJ1_porcentaje = round((($DJTJ1 * 100) / $DJTJ), 1, PHP_ROUND_HALF_UP);}
        if ($DJTJ2 == 0) {$DJTJ2_porcentaje = 0;} else {$DJTJ2_porcentaje = round((($DJTJ2 * 100) / $DJTJ), 1, PHP_ROUND_HALF_UP);}
        if ($DJTJ3 == 0) {$DJTJ3_porcentaje = 0;} else {$DJTJ3_porcentaje = round((($DJTJ3 * 100) / $DJTJ), 1, PHP_ROUND_HALF_UP);}
        if ($DJTJ4 == 0) {$DJTJ4_porcentaje = 0;} else {$DJTJ4_porcentaje = round((($DJTJ4 * 100) / $DJTJ), 1, PHP_ROUND_HALF_UP);}
        if ($DJTJ5 == 0) {$DJTJ5_porcentaje = 0;} else {$DJTJ5_porcentaje = round((($DJTJ5 * 100) / $DJTJ), 1, PHP_ROUND_HALF_UP);}
        $DJTP1 = Consolidados::DJTP1(conexion::obtener_conexion());
        $DJTP2 = Consolidados::DJTP2(conexion::obtener_conexion());
        $DJTP3 = Consolidados::DJTP3(conexion::obtener_conexion());
        $DJTP4 = Consolidados::DJTP4(conexion::obtener_conexion());
        $DJTP5 = Consolidados::DJTP5(conexion::obtener_conexion());
        $DJTP = $DJTP1 + $DJTP2 + $DJTP3 + $DJTP4 + $DJTP5;
        if ($DJTP1 == 0) {$DJTP1_porcentaje = 0;} else {$DJTP1_porcentaje = round((($DJTP1 * 100) / $DJTP), 1, PHP_ROUND_HALF_UP);}
        if ($DJTP2 == 0) {$DJTP2_porcentaje = 0;} else {$DJTP2_porcentaje = round((($DJTP2 * 100) / $DJTP), 1, PHP_ROUND_HALF_UP);}
        if ($DJTP3 == 0) {$DJTP3_porcentaje = 0;} else {$DJTP3_porcentaje = round((($DJTP3 * 100) / $DJTP), 1, PHP_ROUND_HALF_UP);}
        if ($DJTP4 == 0) {$DJTP4_porcentaje = 0;} else {$DJTP4_porcentaje = round((($DJTP4 * 100) / $DJTP), 1, PHP_ROUND_HALF_UP);}
        if ($DJTP5 == 0) {$DJTP5_porcentaje = 0;} else {$DJTP5_porcentaje = round((($DJTP5 * 100) / $DJTP), 1, PHP_ROUND_HALF_UP);}
        $DJTA1 = Consolidados::DJTA1(conexion::obtener_conexion());
        $DJTA2 = Consolidados::DJTA2(conexion::obtener_conexion());
        $DJTA3 = Consolidados::DJTA3(conexion::obtener_conexion());
        $DJTA4 = Consolidados::DJTA4(conexion::obtener_conexion());
        $DJTA5 = Consolidados::DJTA5(conexion::obtener_conexion());
        $DJTA = $DJTA1 + $DJTA2 + $DJTA3 + $DJTA4 + $DJTA5;
        if ($DJTA1 == 0) {$DJTA1_porcentaje = 0;} else {$DJTA1_porcentaje = round((($DJTA1 * 100) / $DJTA), 1, PHP_ROUND_HALF_UP);}
        if ($DJTA2 == 0) {$DJTA2_porcentaje = 0;} else {$DJTA2_porcentaje = round((($DJTA2 * 100) / $DJTA), 1, PHP_ROUND_HALF_UP);}
        if ($DJTA3 == 0) {$DJTA3_porcentaje = 0;} else {$DJTA3_porcentaje = round((($DJTA3 * 100) / $DJTA), 1, PHP_ROUND_HALF_UP);}
        if ($DJTA4 == 0) {$DJTA4_porcentaje = 0;} else {$DJTA4_porcentaje = round((($DJTA4 * 100) / $DJTA), 1, PHP_ROUND_HALF_UP);}
        if ($DJTA5 == 0) {$DJTA5_porcentaje = 0;} else {$DJTA5_porcentaje = round((($DJTA5 * 100) / $DJTA), 1, PHP_ROUND_HALF_UP);}
        $DJTO1 = Consolidados::DJTO1(conexion::obtener_conexion());
        $DJTO2 = Consolidados::DJTO2(conexion::obtener_conexion());
        $DJTO3 = Consolidados::DJTO3(conexion::obtener_conexion());
        $DJTO4 = Consolidados::DJTO4(conexion::obtener_conexion());
        $DJTO5 = Consolidados::DJTO5(conexion::obtener_conexion());
        $DJTO = $DJTO1 + $DJTO2 + $DJTO3 + $DJTO4 + $DJTO5;
        if ($DJTO1 == 0) {$DJTO1_porcentaje = 0;} else {$DJTO1_porcentaje = round((($DJTO1 * 100) / $DJTO), 1, PHP_ROUND_HALF_UP);}
        if ($DJTO2 == 0) {$DJTO2_porcentaje = 0;} else {$DJTO2_porcentaje = round((($DJTO2 * 100) / $DJTO), 1, PHP_ROUND_HALF_UP);}
        if ($DJTO3 == 0) {$DJTO3_porcentaje = 0;} else {$DJTO3_porcentaje = round((($DJTO3 * 100) / $DJTO), 1, PHP_ROUND_HALF_UP);}
        if ($DJTO4 == 0) {$DJTO4_porcentaje = 0;} else {$DJTO4_porcentaje = round((($DJTO4 * 100) / $DJTO), 1, PHP_ROUND_HALF_UP);}
        if ($DJTO5 == 0) {$DJTO5_porcentaje = 0;} else {$DJTO5_porcentaje = round((($DJTO5 * 100) / $DJTO), 1, PHP_ROUND_HALF_UP);} 
        $RPJ1 = Consolidados::RPJ1(conexion::obtener_conexion());
        $RPJ2 = Consolidados::RPJ2(conexion::obtener_conexion());
        $RPJ3 = Consolidados::RPJ3(conexion::obtener_conexion());
        $RPJ4 = Consolidados::RPJ4(conexion::obtener_conexion());
        $RPJ5 = Consolidados::RPJ5(conexion::obtener_conexion());
        $RPJ = $RPJ1 + $RPJ2 + $RPJ3 + $RPJ4 + $RPJ5;
        if ($RPJ1 == 0) {$RPJ1_porcentaje = 0;} else {$RPJ1_porcentaje = round((($RPJ1 * 100) / $RPJ), 1, PHP_ROUND_HALF_UP);}
        if ($RPJ2 == 0) {$RPJ2_porcentaje = 0;} else {$RPJ2_porcentaje = round((($RPJ2 * 100) / $RPJ), 1, PHP_ROUND_HALF_UP);}
        if ($RPJ3 == 0) {$RPJ3_porcentaje = 0;} else {$RPJ3_porcentaje = round((($RPJ3 * 100) / $RPJ), 1, PHP_ROUND_HALF_UP);}
        if ($RPJ4 == 0) {$RPJ4_porcentaje = 0;} else {$RPJ4_porcentaje = round((($RPJ4 * 100) / $RPJ), 1, PHP_ROUND_HALF_UP);}
        if ($RPJ5 == 0) {$RPJ5_porcentaje = 0;} else {$RPJ5_porcentaje = round((($RPJ5 * 100) / $RPJ), 1, PHP_ROUND_HALF_UP);}
        $RPP1 = Consolidados::RPP1(conexion::obtener_conexion());
        $RPP2 = Consolidados::RPP2(conexion::obtener_conexion());
        $RPP3 = Consolidados::RPP3(conexion::obtener_conexion());
        $RPP4 = Consolidados::RPP4(conexion::obtener_conexion());
        $RPP5 = Consolidados::RPP5(conexion::obtener_conexion());
        $RPP = $RPP1 + $RPP2 + $RPP3 + $RPP4 + $RPP5;
        if ($RPP1 == 0) {$RPP1_porcentaje = 0;} else {$RPP1_porcentaje = round((($RPP1 * 100) / $RPP), 1, PHP_ROUND_HALF_UP);}
        if ($RPP2 == 0) {$RPP2_porcentaje = 0;} else {$RPP2_porcentaje = round((($RPP2 * 100) / $RPP), 1, PHP_ROUND_HALF_UP);}
        if ($RPP3 == 0) {$RPP3_porcentaje = 0;} else {$RPP3_porcentaje = round((($RPP3 * 100) / $RPP), 1, PHP_ROUND_HALF_UP);}
        if ($RPP4 == 0) {$RPP4_porcentaje = 0;} else {$RPP4_porcentaje = round((($RPP4 * 100) / $RPP), 1, PHP_ROUND_HALF_UP);}
        if ($RPP5 == 0) {$RPP5_porcentaje = 0;} else {$RPP5_porcentaje = round((($RPP5 * 100) / $RPP), 1, PHP_ROUND_HALF_UP);}
        $RPA1 = Consolidados::RPA1(conexion::obtener_conexion());
        $RPA2 = Consolidados::RPA2(conexion::obtener_conexion());
        $RPA3 = Consolidados::RPA3(conexion::obtener_conexion());
        $RPA4 = Consolidados::RPA4(conexion::obtener_conexion());
        $RPA5 = Consolidados::RPA5(conexion::obtener_conexion());
        $RPA = $RPA1 + $RPA2 + $RPA3 + $RPA4 + $RPA5;
        if ($RPA1 == 0) {$RPA1_porcentaje = 0;} else {$RPA1_porcentaje = round((($RPA1 * 100) / $RPA), 1, PHP_ROUND_HALF_UP);}
        if ($RPA2 == 0) {$RPA2_porcentaje = 0;} else {$RPA2_porcentaje = round((($RPA2 * 100) / $RPA), 1, PHP_ROUND_HALF_UP);}
        if ($RPA3 == 0) {$RPA3_porcentaje = 0;} else {$RPA3_porcentaje = round((($RPA3 * 100) / $RPA), 1, PHP_ROUND_HALF_UP);}
        if ($RPA4 == 0) {$RPA4_porcentaje = 0;} else {$RPA4_porcentaje = round((($RPA4 * 100) / $RPA), 1, PHP_ROUND_HALF_UP);}
        if ($RPA5 == 0) {$RPA5_porcentaje = 0;} else {$RPA5_porcentaje = round((($RPA5 * 100) / $RPA), 1, PHP_ROUND_HALF_UP);}
        $RPO1 = Consolidados::RPO1(conexion::obtener_conexion());
        $RPO2 = Consolidados::RPO2(conexion::obtener_conexion());
        $RPO3 = Consolidados::RPO3(conexion::obtener_conexion());
        $RPO4 = Consolidados::RPO4(conexion::obtener_conexion());
        $RPO5 = Consolidados::RPO5(conexion::obtener_conexion());
        $RPO = $RPO1 + $RPO2 + $RPO3 + $RPO4 + $RPO5;
        if ($RPO1 == 0) {$RPO1_porcentaje = 0;} else {$RPO1_porcentaje = round((($RPO1 * 100) / $RPO), 1, PHP_ROUND_HALF_UP);}
        if ($RPO2 == 0) {$RPO2_porcentaje = 0;} else {$RPO2_porcentaje = round((($RPO2 * 100) / $RPO), 1, PHP_ROUND_HALF_UP);}
        if ($RPO3 == 0) {$RPO3_porcentaje = 0;} else {$RPO3_porcentaje = round((($RPO3 * 100) / $RPO), 1, PHP_ROUND_HALF_UP);}
        if ($RPO4 == 0) {$RPO4_porcentaje = 0;} else {$RPO4_porcentaje = round((($RPO4 * 100) / $RPO), 1, PHP_ROUND_HALF_UP);}
        if ($RPO5 == 0) {$RPO5_porcentaje = 0;} else {$RPO5_porcentaje = round((($RPO5 * 100) / $RPO), 1, PHP_ROUND_HALF_UP);} 
        $RYCJ1 = Consolidados::RPJ1(conexion::obtener_conexion());
        $RYCJ2 = Consolidados::RPJ2(conexion::obtener_conexion());
        $RYCJ3 = Consolidados::RPJ3(conexion::obtener_conexion());
        $RYCJ4 = Consolidados::RPJ4(conexion::obtener_conexion());
        $RYCJ5 = Consolidados::RPJ5(conexion::obtener_conexion());
        $RYCJ = $RYCJ1 + $RYCJ2 + $RYCJ3 + $RYCJ4 + $RYCJ5;
        if ($RYCJ1 == 0) {$RYCJ1_porcentaje = 0;} else {$RYCJ1_porcentaje = round((($RYCJ1 * 100) / $RYCJ), 1, PHP_ROUND_HALF_UP);}
        if ($RYCJ2 == 0) {$RYCJ2_porcentaje = 0;} else {$RYCJ2_porcentaje = round((($RYCJ2 * 100) / $RYCJ), 1, PHP_ROUND_HALF_UP);}
        if ($RYCJ3 == 0) {$RYCJ3_porcentaje = 0;} else {$RYCJ3_porcentaje = round((($RYCJ3 * 100) / $RYCJ), 1, PHP_ROUND_HALF_UP);}
        if ($RYCJ4 == 0) {$RYCJ4_porcentaje = 0;} else {$RYCJ4_porcentaje = round((($RYCJ4 * 100) / $RYCJ), 1, PHP_ROUND_HALF_UP);}
        if ($RYCJ5 == 0) {$RYCJ5_porcentaje = 0;} else {$RYCJ5_porcentaje = round((($RYCJ5 * 100) / $RYCJ), 1, PHP_ROUND_HALF_UP);}
        $RYCP1 = Consolidados::RPP1(conexion::obtener_conexion());
        $RYCP2 = Consolidados::RPP2(conexion::obtener_conexion());
        $RYCP3 = Consolidados::RPP3(conexion::obtener_conexion());
        $RYCP4 = Consolidados::RPP4(conexion::obtener_conexion());
        $RYCP5 = Consolidados::RPP5(conexion::obtener_conexion());
        $RYCP = $RYCP1 + $RYCP2 + $RYCP3 + $RYCP4 + $RYCP5;
        if ($RYCP1 == 0) {$RYCP1_porcentaje = 0;} else {$RYCP1_porcentaje = round((($RYCP1 * 100) / $RYCP), 1, PHP_ROUND_HALF_UP);}
        if ($RYCP2 == 0) {$RYCP2_porcentaje = 0;} else {$RYCP2_porcentaje = round((($RYCP2 * 100) / $RYCP), 1, PHP_ROUND_HALF_UP);}
        if ($RYCP3 == 0) {$RYCP3_porcentaje = 0;} else {$RYCP3_porcentaje = round((($RYCP3 * 100) / $RYCP), 1, PHP_ROUND_HALF_UP);}
        if ($RYCP4 == 0) {$RYCP4_porcentaje = 0;} else {$RYCP4_porcentaje = round((($RYCP4 * 100) / $RYCP), 1, PHP_ROUND_HALF_UP);}
        if ($RYCP5 == 0) {$RYCP5_porcentaje = 0;} else {$RYCP5_porcentaje = round((($RYCP5 * 100) / $RYCP), 1, PHP_ROUND_HALF_UP);}
        $RYCA1 = Consolidados::RPA1(conexion::obtener_conexion());
        $RYCA2 = Consolidados::RPA2(conexion::obtener_conexion());
        $RYCA3 = Consolidados::RPA3(conexion::obtener_conexion());
        $RYCA4 = Consolidados::RPA4(conexion::obtener_conexion());
        $RYCA5 = Consolidados::RPA5(conexion::obtener_conexion());
        $RYCA = $RYCA1 + $RYCA2 + $RYCA3 + $RYCA4 + $RYCA5;
        if ($RYCA1 == 0) {$RYCA1_porcentaje = 0;} else {$RYCA1_porcentaje = round((($RYCA1 * 100) / $RYCA), 1, PHP_ROUND_HALF_UP);}
        if ($RYCA2 == 0) {$RYCA2_porcentaje = 0;} else {$RYCA2_porcentaje = round((($RYCA2 * 100) / $RYCA), 1, PHP_ROUND_HALF_UP);}
        if ($RYCA3 == 0) {$RYCA3_porcentaje = 0;} else {$RYCA3_porcentaje = round((($RYCA3 * 100) / $RYCA), 1, PHP_ROUND_HALF_UP);}
        if ($RYCA4 == 0) {$RYCA4_porcentaje = 0;} else {$RYCA4_porcentaje = round((($RYCA4 * 100) / $RYCA), 1, PHP_ROUND_HALF_UP);}
        if ($RYCA5 == 0) {$RYCA5_porcentaje = 0;} else {$RYCA5_porcentaje = round((($RYCA5 * 100) / $RYCA), 1, PHP_ROUND_HALF_UP);}
        $RYCO1 = Consolidados::RPO1(conexion::obtener_conexion());
        $RYCO2 = Consolidados::RPO2(conexion::obtener_conexion());
        $RYCO3 = Consolidados::RPO3(conexion::obtener_conexion());
        $RYCO4 = Consolidados::RPO4(conexion::obtener_conexion());
        $RYCO5 = Consolidados::RPO5(conexion::obtener_conexion());
        $RYCO = $RYCO1 + $RYCO2 + $RYCO3 + $RYCO4 + $RYCO5;
        if ($RYCO1 == 0) {$RYCO1_porcentaje = 0;} else {$RYCO1_porcentaje = round((($RYCO1 * 100) / $RYCO), 1, PHP_ROUND_HALF_UP);}
        if ($RYCO2 == 0) {$RYCO2_porcentaje = 0;} else {$RYCO2_porcentaje = round((($RYCO2 * 100) / $RYCO), 1, PHP_ROUND_HALF_UP);}
        if ($RYCO3 == 0) {$RYCO3_porcentaje = 0;} else {$RYCO3_porcentaje = round((($RYCO3 * 100) / $RYCO), 1, PHP_ROUND_HALF_UP);}
        if ($RYCO4 == 0) {$RYCO4_porcentaje = 0;} else {$RYCO4_porcentaje = round((($RYCO4 * 100) / $RYCO), 1, PHP_ROUND_HALF_UP);}
        if ($RYCO5 == 0) {$RYCO5_porcentaje = 0;} else {$RYCO5_porcentaje = round((($RYCO5 * 100) / $RYCO), 1, PHP_ROUND_HALF_UP);}
        
        $variable = array($LRJ1_porcentaje, $LRJ2_porcentaje, $LRJ3_porcentaje, $LRJ4_porcentaje, $LRJ5_porcentaje);
        $c = 0;
        $high_1 = $high_2 = 0;
        do {
            if (isset($variable[$c])) {
                if ($variable[$c] > $high_1) {
                    $high_2 = $high_1;
                    $high_1 = $variable[$c];
                } else if ($variable[$c] > $high_2) {
                    $high_2 = $variable[$c];
                }
            }$c++;
        } while ($c <= 10);
        if ((($LRJ1_porcentaje == $high_1) or ( $LRJ1_porcentaje == $high_2)or($LRJ1_porcentaje > 20)) && ($LRJ1_porcentaje > 20)) {
            $LRJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $LRJ1c = '';
        }
        if ((($LRJ2_porcentaje == $high_1) or ( $LRJ2_porcentaje == $high_2)or($LRJ2_porcentaje > 20)) && ($LRJ2_porcentaje > 20)) {
            $LRJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $LRJ2c = '';
        }
        if ((($LRJ3_porcentaje == $high_1) or ( $LRJ3_porcentaje == $high_2)or($LRJ3_porcentaje > 20)) && ($LRJ3_porcentaje > 20)) {
            $LRJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $LRJ3c = '';
        }
        if ((($LRJ4_porcentaje == $high_1) or ( $LRJ4_porcentaje == $high_2)or($LRJ4_porcentaje > 20)) && ($LRJ4_porcentaje > 20)) {
            $LRJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $LRJ4c = '';
        }
        if ((($LRJ5_porcentaje == $high_1) or ( $LRJ5_porcentaje == $high_2)or($LRJ5_porcentaje > 20)) && ($LRJ5_porcentaje > 20)) {
            $LRJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $LRJ5c = '';
        };
        $variable2 = array($LRP1_porcentaje, $LRP2_porcentaje, $LRP3_porcentaje, $LRP4_porcentaje, $LRP5_porcentaje);
        $c = 0;
        $high_3 = $high_4 = 0;
        do {
            if (isset($variable2[$c])) {
                if ($variable2[$c] > $high_3) {
                    $high_4 = $high_3;
                    $high_3 = $variable2[$c];
                } else if ($variable2[$c] > $high_4) {
                    $high_4 = $variable2[$c];
                }
            }$c++;
        } while ($c <= 10);
        if ((($LRP1_porcentaje == $high_3) or ( $LRP1_porcentaje == $high_4)or($LRP1_porcentaje > 20)) && ($LRP1_porcentaje > 20)) {
            $LRP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $LRP1c = '';
        }
        if ((($LRP2_porcentaje == $high_3) or ( $LRP2_porcentaje == $high_4)or($LRP2_porcentaje > 20)) && ($LRP2_porcentaje > 20)) {
            $LRP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $LRP2c = '';
        }
        if ((($LRP3_porcentaje == $high_3 )or ( $LRP3_porcentaje == $high_4)or($LRP3_porcentaje > 20)) && ($LRP3_porcentaje > 20)) {
            $LRP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $LRP3c = '';
        }
        if ((($LRP4_porcentaje == $high_3) or ( $LRP4_porcentaje == $high_4)or($LRP4_porcentaje > 20)) && ($LRP4_porcentaje > 20)) {
            $LRP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $LRP4c = '';
        }
        if ((($LRP5_porcentaje == $high_3) or ( $LRP5_porcentaje == $high_4)or($LRP5_porcentaje > 20)) && ($LRP5_porcentaje > 20)) {
            $LRP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $LRP5c = '';
        }
        $variable3 = array($LRA1_porcentaje, $LRA2_porcentaje, $LRA3_porcentaje, $LRA4_porcentaje, $LRA5_porcentaje);
        $c = 0;
        $high_5 = $high_6 = 0;
        do {
            if (isset($variable3[$c])) {
                if ($variable3[$c] > $high_5) {
                    $high_6 = $high_5;
                    $high_5 = $variable3[$c];
                } else if ($variable3[$c] > $high_6) {
                    $high_6 = $variable3[$c];
                }
            }$c++;
        } while ($c <= 10);
        if ((($LRA1_porcentaje == $high_5) or ( $LRA1_porcentaje == $high_6)or($LRA1_porcentaje > 20)) && ($LRA1_porcentaje > 20)) {
            $LRA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $LRA1c = '';
        }
        if ((($LRA2_porcentaje == $high_5) or ( $LRA2_porcentaje == $high_6)or($LRA2_porcentaje > 20)) && ($LRA2_porcentaje > 20)) {
            $LRA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $LRA2c = '';
        }
        if ((($LRA3_porcentaje == $high_5 )or ( $LRA3_porcentaje == $high_6)or($LRA3_porcentaje > 20)) && ($LRA3_porcentaje > 20)) {
            $LRA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $LRA3c = '';
        }
        if ((($LRA4_porcentaje == $high_5) or ( $LRA4_porcentaje == $high_6)or($LRA4_porcentaje > 20)) && ($LRA4_porcentaje > 20)) {
            $LRA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $LRA4c = '';
        }
        if ((($LRA5_porcentaje == $high_5) or ( $LRA5_porcentaje == $high_6)or($LRA5_porcentaje > 20)) && ($LRA5_porcentaje > 20)) {
            $LRA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $LRA5c = '';
        }
        $variable4 = array($LRO1_porcentaje, $LRO2_porcentaje, $LRO3_porcentaje, $LRO4_porcentaje, $LRO5_porcentaje);
        $c = 0;
        $high_7 = $high_8 = 0;
        do {
            if (isset($variable4[$c])) {
                if ($variable4[$c] > $high_7) {
                    $high_8 = $high_7;
                    $high_7 = $variable4[$c];
                } else if ($variable4[$c] > $high_8) {
                    $high_8 = $variable4[$c];
                }
            }$c++;
        } while ($c <= 10);
        if ((($LRO1_porcentaje == $high_7) or ( $LRO1_porcentaje == $high_8)or($LRO1_porcentaje > 20)) && ($LRO1_porcentaje > 20)) {
            $LRO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $LRO1c = '';
        }
        if ((($LRO2_porcentaje == $high_7) or ( $LRO2_porcentaje == $high_8)or($LRO2_porcentaje > 20)) && ($LRO2_porcentaje > 20)) {
            $LRO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $LRO2c = '';
        }
        if ((($LRO3_porcentaje == $high_7 )or ( $LRO3_porcentaje == $high_8)or($LRO3_porcentaje > 20)) && ($LRO3_porcentaje > 20)) {
            $LRO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $LRO3c = '';
        }
        if ((($LRO4_porcentaje == $high_7) or ( $LRO4_porcentaje == $high_8)or($LRO4_porcentaje > 20)) && ($LRO4_porcentaje > 20)) {
            $LRO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $LRO4c = '';
        }
        if ((($LRO5_porcentaje == $high_7) or ( $LRO5_porcentaje == $high_8)or($LRO5_porcentaje > 20)) && ($LRO5_porcentaje > 20)) {
            $LRO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $LRO5c = '';
        }
        $variable5 = array($CTJ1_porcentaje, $CTJ2_porcentaje, $CTJ3_porcentaje, $CTJ4_porcentaje, $CTJ5_porcentaje);
        $c = 0;
        $high_9 = $high_10 = 0;
        do {
            if (isset($variable5[$c])) {
                if ($variable5[$c] > $high_9) {
                    $high_10 = $high_9;
                    $high_9 = $variable5[$c];
                } else if ($variable5[$c] > $high_10) {
                    $high_10 = $variable5[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CTJ1_porcentaje == $high_9) or ( $CTJ1_porcentaje == $high_10)or($CTJ1_porcentaje > 20)) && ($CTJ1_porcentaje > 20)) {
            $CTJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CTJ1c = '';
        }
        if ((($CTJ2_porcentaje == $high_9) or ( $CTJ2_porcentaje == $high_10)or($CTJ2_porcentaje > 20)) && ($CTJ2_porcentaje > 20)) {
            $CTJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CTJ2c = '';
        }
        if ((($CTJ3_porcentaje == $high_9 )or ( $CTJ3_porcentaje == $high_10)or($CTJ3_porcentaje > 20)) && ($CTJ3_porcentaje > 20)) {
            $CTJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CTJ3c = '';
        }
        if ((($CTJ4_porcentaje == $high_9) or ( $CTJ4_porcentaje == $high_10)or($CTJ4_porcentaje > 20)) && ($CTJ4_porcentaje > 20)) {
            $CTJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CTJ4c = '';
        }
        if ((($CTJ5_porcentaje == $high_9) or ( $CTJ5_porcentaje == $high_10)or($CTJ5_porcentaje > 20)) && ($CTJ5_porcentaje > 20)) {
            $CTJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CTJ5c = '';
        }
        
        $variable6 = array($CTP1_porcentaje, $CTP2_porcentaje, $CTP3_porcentaje, $CTP4_porcentaje, $CTP5_porcentaje);
        $c = 0;
        $high_11 = $high_12 = 0;
        do {
            if (isset($variable6[$c])) {
                if ($variable6[$c] > $high_11) {
                    $high_12 = $high_11;
                    $high_11 = $variable6[$c];
                } else if ($variable6[$c] > $high_12) {
                    $high_12 = $variable6[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CTP1_porcentaje == $high_11) or ( $CTP1_porcentaje == $high_12)or($CTP1_porcentaje > 20)) && ($CTP1_porcentaje > 20)) {
            $CTP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CTP1c = '';
        }
        if ((($CTP2_porcentaje == $high_11) or ( $CTP2_porcentaje == $high_12)or($CTP2_porcentaje > 20)) && ($CTP2_porcentaje > 20)) {
            $CTP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CTP2c = '';
        }
        if ((($CTP3_porcentaje == $high_11 )or ( $CTP3_porcentaje == $high_12)or($CTP3_porcentaje > 20)) && ($CTP3_porcentaje > 20)) {
            $CTP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CTP3c = '';
        }
        if ((($CTP4_porcentaje == $high_11) or ( $CTP4_porcentaje == $high_12)or($CTP4_porcentaje > 20)) && ($CTP4_porcentaje > 20)) {
            $CTP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CTP4c = '';
        }
        if ((($CTP5_porcentaje == $high_11) or ( $CTP5_porcentaje == $high_12)or($CTP5_porcentaje > 20)) && ($CTP5_porcentaje > 20)) {
            $CTP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CTP5c = '';
        }
        $variable7 = array($CTA1_porcentaje, $CTA2_porcentaje, $CTA3_porcentaje, $CTA4_porcentaje, $CTA5_porcentaje);
        $c = 0;
        $high_13 = $high_14 = 0;
        do {
            if (isset($variable7[$c])) {
                if ($variable7[$c] > $high_13) {
                    $high_14 = $high_13;
                    $high_13 = $variable7[$c];
                } else if ($variable7[$c] > $high_14) {
                    $high_14 = $variable7[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CTA1_porcentaje == $high_13) or ( $CTA1_porcentaje == $high_14)or($CTA1_porcentaje > 20)) && ($CTA1_porcentaje > 20)) {
            $CTA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CTA1c = '';
        }
        if ((($CTA2_porcentaje == $high_13) or ( $CTA2_porcentaje == $high_14)or($CTA2_porcentaje > 20)) && ($CTA2_porcentaje > 20)) {
            $CTA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CTA2c = '';
        }
        if ((($CTA3_porcentaje == $high_13 )or ( $CTA3_porcentaje == $high_14)or($CTA3_porcentaje > 20)) && ($CTA3_porcentaje > 20)) {
            $CTA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CTA3c = '';
        }
        if ((($CTA4_porcentaje == $high_13) or ( $CTA4_porcentaje == $high_14)or($CTA4_porcentaje > 20)) && ($CTA4_porcentaje > 20)) {
            $CTA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CTA4c = '';
        }
        if ((($CTA5_porcentaje == $high_13) or ( $CTA5_porcentaje == $high_14)or($CTA5_porcentaje > 20)) && ($CTA5_porcentaje > 20)) {
            $CTA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CTA5c = '';
        }
        $variable8 = array($CTO1_porcentaje, $CTO2_porcentaje, $CTO3_porcentaje, $CTO4_porcentaje, $CTO5_porcentaje);
        $c = 0;
        $high_15 = $high_16 = 0;
        do {
            if (isset($variable8[$c])) {
                if ($variable8[$c] > $high_15) {
                    $high_16 = $high_15;
                    $high_15 = $variable8[$c];
                } else if ($variable8[$c] > $high_16) {
                    $high_16 = $variable8[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CTO1_porcentaje == $high_15) or ( $CTO1_porcentaje == $high_16)or($CTO1_porcentaje > 20)) && ($CTO1_porcentaje > 20)) {
            $CTO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CTO1c = '';
        }
        if ((($CTO2_porcentaje == $high_15) or ( $CTO2_porcentaje == $high_16)or($CTO2_porcentaje > 20)) && ($CTO2_porcentaje > 20)) {
            $CTO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CTO2c = '';
        }
        if ((($CTO3_porcentaje == $high_15 )or ( $CTO3_porcentaje == $high_16)or($CTO3_porcentaje > 20)) && ($CTO3_porcentaje > 20)) {
            $CTO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CTO3c = '';
        }
        if ((($CTO4_porcentaje == $high_15) or ( $CTO4_porcentaje == $high_16)or($CTO4_porcentaje > 20)) && ($CTO4_porcentaje > 20)) {
            $CTO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CTO4c = '';
        }
        if ((($CTO5_porcentaje == $high_15) or ( $CTO5_porcentaje == $high_16)or($CTO5_porcentaje > 20)) && ($CTO5_porcentaje > 20)) {
            $CTO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CTO5c = '';
        }
        $variable9 = array($DTJ1_porcentaje, $DTJ2_porcentaje, $DTJ3_porcentaje, $DTJ4_porcentaje, $DTJ5_porcentaje);
        $c = 0;
        $high_17 = $high_18 = 0;
        do {
            if (isset($variable9[$c])) {
                if ($variable9[$c] > $high_17) {
                    $high_18 = $high_17;
                    $high_17 = $variable9[$c];
                } else if ($variable9[$c] > $high_18) {
                    $high_18 = $variable9[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DTJ1_porcentaje == $high_17) or ( $DTJ1_porcentaje == $high_18)or($DTJ1_porcentaje > 20)) && ($DTJ1_porcentaje > 20)) {
            $DTJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DTJ1c = '';
        }
        if ((($DTJ2_porcentaje == $high_17) or ( $DTJ2_porcentaje == $high_18)or($DTJ2_porcentaje > 20)) && ($DTJ2_porcentaje > 20)) {
            $DTJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DTJ2c = '';
        }
        if ((($DTJ3_porcentaje == $high_17 )or ( $DTJ3_porcentaje == $high_18)or($DTJ3_porcentaje > 20)) && ($DTJ3_porcentaje > 20)) {
            $DTJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DTJ3c = '';
        }
        if ((($DTJ4_porcentaje == $high_17) or ( $DTJ4_porcentaje == $high_18)or($DTJ4_porcentaje > 20)) && ($DTJ4_porcentaje > 20)) {
            $DTJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DTJ4c = '';
        }
        if ((($DTJ5_porcentaje == $high_17) or ( $DTJ5_porcentaje == $high_18)or($DTJ5_porcentaje > 20)) && ($DTJ5_porcentaje > 20)) {
            $DTJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DTJ5c = '';
        }
        $variable10 = array($DTP1_porcentaje, $DTP2_porcentaje, $DTP3_porcentaje, $DTP4_porcentaje, $DTP5_porcentaje);
        $c = 0;
        $high_19 = $high_20 = 0;
        do {
            if (isset($variable10[$c])) {
                if ($variable10[$c] > $high_19) {
                    $high_20 = $high_19;
                    $high_19 = $variable10[$c];
                } else if ($variable10[$c] > $high_20) {
                    $high_20 = $variable10[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DTP1_porcentaje == $high_19) or ( $DTP1_porcentaje == $high_20)or($DTP1_porcentaje > 20)) && ($DTP1_porcentaje > 20)) {
            $DTP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DTP1c = '';
        }
        if ((($DTP2_porcentaje == $high_19) or ( $DTP2_porcentaje == $high_20)or($DTP2_porcentaje > 20)) && ($DTP2_porcentaje > 20)) {
            $DTP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DTP2c = '';
        }
        if ((($DTP3_porcentaje == $high_19 )or ( $DTP3_porcentaje == $high_20)or($DTP3_porcentaje > 20)) && ($DTP3_porcentaje > 20)) {
            $DTP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DTP3c = '';
        }
        if ((($DTP4_porcentaje == $high_19) or ( $DTP4_porcentaje == $high_20)or($DTP4_porcentaje > 20)) && ($DTP4_porcentaje > 20)) {
            $DTP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DTP4c = '';
        }
        if ((($DTP5_porcentaje == $high_19) or ( $DTP5_porcentaje == $high_20)or($DTP5_porcentaje > 20)) && ($DTP5_porcentaje > 20)) {
            $DTP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DTP5c = '';
        }
        $variable11 = array($DTA1_porcentaje, $DTA2_porcentaje, $DTA3_porcentaje, $DTA4_porcentaje, $DTA5_porcentaje);
        $c = 0;
        $high_21 = $high_22 = 0;
        do {
            if (isset($variable11[$c])) {
                if ($variable11[$c] > $high_21) {
                    $high_22 = $high_21;
                    $high_21 = $variable11[$c];
                } else if ($variable11[$c] > $high_22) {
                    $high_22 = $variable11[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DTA1_porcentaje == $high_21) or ( $DTA1_porcentaje == $high_22)or($DTA1_porcentaje > 20)) && ($DTA1_porcentaje > 20)) {
            $DTA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DTA1c = '';
        }
        if ((($DTA2_porcentaje == $high_21) or ( $DTA2_porcentaje == $high_22)or($DTA2_porcentaje > 20)) && ($DTA2_porcentaje > 20)) {
            $DTA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DTA2c = '';
        }
        if ((($DTA3_porcentaje == $high_21 )or ( $DTA3_porcentaje == $high_22)or($DTA3_porcentaje > 20)) && ($DTA3_porcentaje > 20)) {
            $DTA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DTA3c = '';
        }
        if ((($DTA4_porcentaje == $high_21) or ( $DTA4_porcentaje == $high_22)or($DTA4_porcentaje > 20)) && ($DTA4_porcentaje > 20)) {
            $DTA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DTA4c = '';
        }
        if ((($DTA5_porcentaje == $high_21) or ( $DTA5_porcentaje == $high_22)or($DTA5_porcentaje > 20)) && ($DTA5_porcentaje > 20)) {
            $DTA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DTA5c = '';
        }
        $variable12 = array($DTO1_porcentaje, $DTO2_porcentaje, $DTO3_porcentaje, $DTO4_porcentaje, $DTO5_porcentaje);
        $c = 0;
        $high_23 = $high_24 = 0;
        do {
            if (isset($variable12[$c])) {
                if ($variable12[$c] > $high_23) {
                    $high_24 = $high_23;
                    $high_23 = $variable12[$c];
                } else if ($variable12[$c] > $high_24) {
                    $high_24 = $variable12[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DTO1_porcentaje == $high_23) or ( $DTO1_porcentaje == $high_24)or($DTO1_porcentaje > 20)) && ($DTO1_porcentaje > 20)) {
            $DTO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DTO1c = '';
        }
        if ((($DTO2_porcentaje == $high_23) or ( $DTO2_porcentaje == $high_24)or($DTO2_porcentaje > 20)) && ($DTO2_porcentaje > 20)) {
            $DTO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DTO2c = '';
        }
        if ((($DTO3_porcentaje == $high_23 )or ( $DTO3_porcentaje == $high_24)or($DTO3_porcentaje > 20)) && ($DTO3_porcentaje > 20)) {
            $DTO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DTO3c = '';
        }
        if ((($DTO4_porcentaje == $high_23) or ( $DTO4_porcentaje == $high_24)or($DTO4_porcentaje > 20)) && ($DTO4_porcentaje > 20)) {
            $DTO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DTO4c = '';
        }
        if ((($DTO5_porcentaje == $high_23) or ( $DTO5_porcentaje == $high_24)or($DTO5_porcentaje > 20)) && ($DTO5_porcentaje > 20)) {
            $DTO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DTO5c = '';
        }
        $variable13 = array($RJ1_porcentaje, $RJ2_porcentaje, $RJ3_porcentaje, $RJ4_porcentaje, $RJ5_porcentaje);
        $c = 0;
        $high_25 = $high_26 = 0;
        do {
            if (isset($variable13[$c])) {
                if ($variable13[$c] > $high_25) {
                    $high_26 = $high_25;
                    $high_25 = $variable13[$c];
                } else if ($variable13[$c] > $high_26) {
                    $high_26 = $variable13[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RJ1_porcentaje == $high_25) or ( $RJ1_porcentaje == $high_26)or($RJ1_porcentaje > 20)) && ($RJ1_porcentaje > 20)) {
            $RJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RJ1c = '';
        }
        if ((($RJ2_porcentaje == $high_25) or ( $RJ2_porcentaje == $high_26)or($RJ2_porcentaje > 20)) && ($RJ2_porcentaje > 20)) {
            $RJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RJ2c = '';
        }
        if ((($RJ3_porcentaje == $high_25 )or ( $RJ3_porcentaje == $high_26)or($RJ3_porcentaje > 20)) && ($RJ3_porcentaje > 20)) {
            $RJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RJ3c = '';
        }
        if ((($RJ4_porcentaje == $high_25) or ( $RJ4_porcentaje == $high_26)or($RJ4_porcentaje > 20)) && ($RJ4_porcentaje > 20)) {
            $RJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RJ4c = '';
        }
        if ((($RJ5_porcentaje == $high_25) or ( $RJ5_porcentaje == $high_26)or($RJ5_porcentaje > 20)) && ($RJ5_porcentaje > 20)) {
            $RJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RJ5c = '';
        }
        $variable14 = array($RP1_porcentaje, $RP2_porcentaje, $RP3_porcentaje, $RP4_porcentaje, $RP5_porcentaje);
        $c = 0;
        $high_27 = $high_28 = 0;
        do {
            if (isset($variable14[$c])) {
                if ($variable14[$c] > $high_27) {
                    $high_28 = $high_27;
                    $high_27 = $variable14[$c];
                } else if ($variable14[$c] > $high_28) {
                    $high_28 = $variable14[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RP1_porcentaje == $high_27) or ( $RP1_porcentaje == $high_28)or($RP1_porcentaje > 20)) && ($RP1_porcentaje > 20)) {
            $RP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RP1c = '';
        }
        if ((($RP2_porcentaje == $high_27) or ( $RP2_porcentaje == $high_28)or($RP2_porcentaje > 20)) && ($RP2_porcentaje > 20)) {
            $RP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RP2c = '';
        }
        if ((($RP3_porcentaje == $high_27 )or ( $RP3_porcentaje == $high_28)or($RP3_porcentaje > 20)) && ($RP3_porcentaje > 20)) {
            $RP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RP3c = '';
        }
        if ((($RP4_porcentaje == $high_27) or ( $RP4_porcentaje == $high_28)or($RP4_porcentaje > 20)) && ($RP4_porcentaje > 20)) {
            $RP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RP4c = '';
        }
        if ((($RP5_porcentaje == $high_27) or ( $RP5_porcentaje == $high_28)or($RP5_porcentaje > 20)) && ($RP5_porcentaje > 20)) {
            $RP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RP5c = '';
        }
        $variable15 = array($RA1_porcentaje, $RA2_porcentaje, $RA3_porcentaje, $RA4_porcentaje, $RA5_porcentaje);
        $c = 0;
        $high_29 = $high_30 = 0;
        do {
            if (isset($variable15[$c])) {
                if ($variable15[$c] > $high_29) {
                    $high_30 = $high_29;
                    $high_29 = $variable15[$c];
                } else if ($variable15[$c] > $high_30) {
                    $high_30 = $variable15[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RA1_porcentaje == $high_29) or ( $RA1_porcentaje == $high_30)or($RA1_porcentaje > 20)) && ($RA1_porcentaje > 20)) {
            $RA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RA1c = '';
        }
        if ((($RA2_porcentaje == $high_29) or ( $RA2_porcentaje == $high_30)or($RA2_porcentaje > 20)) && ($RA2_porcentaje > 20)) {
            $RA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RA2c = '';
        }
        if ((($RA3_porcentaje == $high_29 )or ( $RA3_porcentaje == $high_30)or($RA3_porcentaje > 20)) && ($RA3_porcentaje > 20)) {
            $RA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RA3c = '';
        }
        if ((($RA4_porcentaje == $high_29) or ( $RA4_porcentaje == $high_30)or($RA4_porcentaje > 20)) && ($RA4_porcentaje > 20)) {
            $RA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RA4c = '';
        }
        if ((($RA5_porcentaje == $high_29) or ( $RA5_porcentaje == $high_30)or($RA5_porcentaje > 20)) && ($RA5_porcentaje > 20)) {
            $RA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RA5c = '';
        }
        $variable16 = array($RO1_porcentaje, $RO2_porcentaje, $RO3_porcentaje, $RO4_porcentaje, $RO5_porcentaje);
        $c = 0;
        $high_31 = $high_32 = 0;
        do {
            if (isset($variable16[$c])) {
                if ($variable16[$c] > $high_31) {
                    $high_32 = $high_31;
                    $high_31 = $variable16[$c];
                } else if ($variable16[$c] > $high_32) {
                    $high_32 = $variable16[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RO1_porcentaje == $high_31) or ( $RO1_porcentaje == $high_32)or($RO1_porcentaje > 20)) && ($RO1_porcentaje > 20)) {
            $RO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RO1c = '';
        }
        if ((($RO2_porcentaje == $high_31) or ( $RO2_porcentaje == $high_32)or($RO2_porcentaje > 20)) && ($RO2_porcentaje > 20)) {
            $RO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RO2c = '';
        }
        if ((($RO3_porcentaje == $high_31 )or ( $RO3_porcentaje == $high_32)or($RO3_porcentaje > 20)) && ($RO3_porcentaje > 20)) {
            $RO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RO3c = '';
        }
        if ((($RO4_porcentaje == $high_31) or ( $RO4_porcentaje == $high_32)or($RO4_porcentaje > 20)) && ($RO4_porcentaje > 20)) {
            $RO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RO4c = '';
        }
        if ((($RO5_porcentaje == $high_31) or ( $RO5_porcentaje == $high_32)or($RO5_porcentaje > 20)) && ($RO5_porcentaje > 20)) {
            $RO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RO5c = '';
        }
        $variable17 = array($GJ1_porcentaje, $GJ2_porcentaje, $GJ3_porcentaje, $GJ4_porcentaje, $GJ5_porcentaje);
        $c = 0;
        $high_33 = $high_34 = 0;
        do {
            if (isset($variable17[$c])) {
                if ($variable17[$c] > $high_33) {
                    $high_34 = $high_33;
                    $high_33 = $variable17[$c];
                } else if ($variable17[$c] > $high_34) {
                    $high_34 = $variable17[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($GJ1_porcentaje == $high_33) or ( $GJ1_porcentaje == $high_34)or($GJ1_porcentaje > 20)) && ($GJ1_porcentaje > 20)) {
            $GJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $GJ1c = '';
        }
        if ((($GJ2_porcentaje == $high_33) or ( $GJ2_porcentaje == $high_34)or($GJ2_porcentaje > 20)) && ($GJ2_porcentaje > 20)) {
            $GJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $GJ2c = '';
        }
        if ((($GJ3_porcentaje == $high_33 )or ( $GJ3_porcentaje == $high_34)or($GJ3_porcentaje > 20)) && ($GJ3_porcentaje > 20)) {
            $GJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $GJ3c = '';
        }
        if ((($GJ4_porcentaje == $high_33) or ( $GJ4_porcentaje == $high_34)or($GJ4_porcentaje > 20)) && ($GJ4_porcentaje > 20)) {
            $GJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $GJ4c = '';
        }
        if ((($GJ5_porcentaje == $high_33) or ( $GJ5_porcentaje == $high_34)or($GJ5_porcentaje > 20)) && ($GJ5_porcentaje > 20)) {
            $GJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $GJ5c = '';
        }
        $variable18 = array($GP1_porcentaje, $GP2_porcentaje, $GP3_porcentaje, $GP4_porcentaje, $GP5_porcentaje);
        $c = 0;
        $high_35 = $high_36 = 0;
        do {
            if (isset($variable18[$c])) {
                if ($variable18[$c] > $high_35) {
                    $high_36 = $high_35;
                    $high_35 = $variable18[$c];
                } else if ($variable18[$c] > $high_36) {
                    $high_36 = $variable18[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($GP1_porcentaje == $high_35) or ( $GP1_porcentaje == $high_36)or($GP1_porcentaje > 20)) && ($GP1_porcentaje > 20)) {
            $GP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $GP1c = '';
        }
        if ((($GP2_porcentaje == $high_35) or ( $GP2_porcentaje == $high_36)or($GP2_porcentaje > 20)) && ($GP2_porcentaje > 20)) {
            $GP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $GP2c = '';
        }
        if ((($GP3_porcentaje == $high_35 )or ( $GP3_porcentaje == $high_36)or($GP3_porcentaje > 20)) && ($GP3_porcentaje > 20)) {
            $GP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $GP3c = '';
        }
        if ((($GP4_porcentaje == $high_35) or ( $GP4_porcentaje == $high_36)or($GP4_porcentaje > 20)) && ($GP4_porcentaje > 20)) {
            $GP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $GP4c = '';
        }
        if ((($GP5_porcentaje == $high_35) or ( $GP5_porcentaje == $high_36)or($GP5_porcentaje > 20)) && ($GP5_porcentaje > 20)) {
            $GP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $GP5c = '';
        }
        $variable19 = array($GA1_porcentaje, $GA2_porcentaje, $GA3_porcentaje, $GA4_porcentaje, $GA5_porcentaje);
        $c = 0;
        $high_37 = $high_38 = 0;
        do {
            if (isset($variable19[$c])) {
                if ($variable19[$c] > $high_37) {
                    $high_38 = $high_37;
                    $high_37 = $variable19[$c];
                } else if ($variable19[$c] > $high_38) {
                    $high_38 = $variable19[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($GA1_porcentaje == $high_37) or ( $GA1_porcentaje == $high_38)or($GA1_porcentaje > 20)) && ($GA1_porcentaje > 20)) {
            $GA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $GA1c = '';
        }
        if ((($GA2_porcentaje == $high_37) or ( $GA2_porcentaje == $high_38)or($GA2_porcentaje > 20)) && ($GA2_porcentaje > 20)) {
            $GA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $GA2c = '';
        }
        if ((($GA3_porcentaje == $high_37 )or ( $GA3_porcentaje == $high_38)or($GA3_porcentaje > 20)) && ($GA3_porcentaje > 20)) {
            $GA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $GA3c = '';
        }
        if ((($GA4_porcentaje == $high_37) or ( $GA4_porcentaje == $high_38)or($GA4_porcentaje > 20)) && ($GA4_porcentaje > 20)) {
            $GA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $GA4c = '';
        }
        if ((($GA5_porcentaje == $high_37) or ( $GA5_porcentaje == $high_38)or($GA5_porcentaje > 20)) && ($GA5_porcentaje > 20)) {
            $GA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $GA5c = '';
        }
        $variable20 = array($GO1_porcentaje, $GO2_porcentaje, $GO3_porcentaje, $GO4_porcentaje, $GO5_porcentaje);
        $c = 0;
        $high_39 = $high_40 = 0;
        do {
            if (isset($variable20[$c])) {
                if ($variable20[$c] > $high_39) {
                    $high_40 = $high_39;
                    $high_39 = $variable20[$c];
                } else if ($variable20[$c] > $high_40) {
                    $high_40 = $variable20[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($GO1_porcentaje == $high_39) or ( $GO1_porcentaje == $high_40)or($GO1_porcentaje > 20)) && ($GO1_porcentaje > 20)) {
            $GO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $GO1c = '';
        }
        if ((($GO2_porcentaje == $high_39) or ( $GO2_porcentaje == $high_40)or($GO2_porcentaje > 20)) && ($GO2_porcentaje > 20)) {
            $GO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $GO2c = '';
        }
        if ((($GO3_porcentaje == $high_39 )or ( $GO3_porcentaje == $high_40)or($GO3_porcentaje > 20)) && ($GO3_porcentaje > 20)) {
            $GO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $GO3c = '';
        }
        if ((($GO4_porcentaje == $high_39) or ( $GO4_porcentaje == $high_40)or($GO4_porcentaje > 20)) && ($GO4_porcentaje > 20)) {
            $GO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $GO4c = '';
        }
        if ((($GO5_porcentaje == $high_39) or ( $GO5_porcentaje == $high_40)or($GO5_porcentaje > 20)) && ($GO5_porcentaje > 20)) {
            $GO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $GO5c = '';
        }
        $variable21 = array($GT1_porcentaje, $GT2_porcentaje, $GT3_porcentaje, $GT4_porcentaje, $GT5_porcentaje);
        $c = 0;
        $high_41 = $high_42 = 0;
        do {
            if (isset($variable21[$c])) {
                if ($variable21[$c] > $high_41) {
                    $high_42 = $high_41;
                    $high_41 = $variable21[$c];
                } else if ($variable21[$c] > $high_42) {
                    $high_42 = $variable21[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($GT1_porcentaje == $high_41) or ( $GT1_porcentaje == $high_42)or($GT1_porcentaje > 20)) && ($GT1_porcentaje > 20)) {
            $GT1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $GT1c = '';
        }
        if ((($GT2_porcentaje == $high_41) or ( $GT2_porcentaje == $high_42)or($GT2_porcentaje > 20)) && ($GT2_porcentaje > 20)) {
            $GT2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $GT2c = '';
        }
        if ((($GT3_porcentaje == $high_41 )or ( $GT3_porcentaje == $high_42)or($GT3_porcentaje > 20)) && ($GT3_porcentaje > 20)) {
            $GT3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $GT3c = '';
        }
        if ((($GT4_porcentaje == $high_41) or ( $GT4_porcentaje == $high_42)or($GT4_porcentaje > 20)) && ($GT4_porcentaje > 20)) {
            $GT4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $GT4c = '';
        }
        if ((($GT5_porcentaje == $high_41) or ( $GT5_porcentaje == $high_42)or($GT5_porcentaje > 20)) && ($GT5_porcentaje > 20)) {
            $GT5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $GT5c = '';
        }
        $variable22 = array($CLJ1_porcentaje, $CLJ2_porcentaje, $CLJ3_porcentaje, $CLJ4_porcentaje, $CLJ5_porcentaje);
        $c = 0;
        $high_43 = $high_44 = 0;
        do {
            if (isset($variable22[$c])) {
                if ($variable22[$c] > $high_43) {
                    $high_44 = $high_43;
                    $high_43 = $variable22[$c];
                } else if ($variable22[$c] > $high_44) {
                    $high_44 = $variable22[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CLJ1_porcentaje == $high_43) or ( $CLJ1_porcentaje == $high_44)or($CLJ1_porcentaje > 20)) && ($CLJ1_porcentaje > 20)) {
            $CLJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CLJ1c = '';
        }
        if ((($CLJ2_porcentaje == $high_43) or ( $CLJ2_porcentaje == $high_44)or($CLJ2_porcentaje > 20)) && ($CLJ2_porcentaje > 20)) {
            $CLJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CLJ2c = '';
        }
        if ((($CLJ3_porcentaje == $high_43 )or ( $CLJ3_porcentaje == $high_44)or($CLJ3_porcentaje > 20)) && ($CLJ3_porcentaje > 20)) {
            $CLJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CLJ3c = '';
        }
        if ((($CLJ4_porcentaje == $high_43) or ( $CLJ4_porcentaje == $high_44)or($CLJ4_porcentaje > 20)) && ($CLJ4_porcentaje > 20)) {
            $CLJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CLJ4c = '';
        }
        if ((($CLJ5_porcentaje == $high_43) or ( $CLJ5_porcentaje == $high_44)or($CLJ5_porcentaje > 20)) && ($CLJ5_porcentaje > 20)) {
            $CLJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CLJ5c = '';
        }
        
        $variable23 = array($CLP1_porcentaje, $CLP2_porcentaje, $CLP3_porcentaje, $CLP4_porcentaje, $CLP5_porcentaje);
        $c = 0;
        $high_45 = $high_46 = 0;
        do {
            if (isset($variable23[$c])) {
                if ($variable23[$c] > $high_45) {
                    $high_46 = $high_45;
                    $high_45 = $variable23[$c];
                } else if ($variable23[$c] > $high_46) {
                    $high_46 = $variable23[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CLP1_porcentaje == $high_45) or ( $CLP1_porcentaje == $high_46)or($CLP1_porcentaje > 20)) && ($CLP1_porcentaje > 20)) {
            $CLP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CLP1c = '';
        }
        if ((($CLP2_porcentaje == $high_45) or ( $CLP2_porcentaje == $high_46)or($CLP2_porcentaje > 20)) && ($CLP2_porcentaje > 20)) {
            $CLP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CLP2c = '';
        }
        if ((($CLP3_porcentaje == $high_45 )or ( $CLP3_porcentaje == $high_46)or($CLP3_porcentaje > 20)) && ($CLP3_porcentaje > 20)) {
            $CLP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CLP3c = '';
        }
        if ((($CLP4_porcentaje == $high_45) or ( $CLP4_porcentaje == $high_46)or($CLP4_porcentaje > 20)) && ($CLP4_porcentaje > 20)) {
            $CLP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CLP4c = '';
        }
        if ((($CLP5_porcentaje == $high_45) or ( $CLP5_porcentaje == $high_46)or($CLP5_porcentaje > 20)) && ($CLP5_porcentaje > 20)) {
            $CLP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CLP5c = '';
        }
        $variable25 = array($CLA1_porcentaje, $CLA2_porcentaje, $CLA3_porcentaje, $CLA4_porcentaje, $CLA5_porcentaje);
        $c = 0;
        $high_47 = $high_48 = 0;
        do {
            if (isset($variable25[$c])) {
                if ($variable25[$c] > $high_47) {
                    $high_48 = $high_47;
                    $high_47 = $variable25[$c];
                } else if ($variable25[$c] > $high_48) {
                    $high_48 = $variable25[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CLA1_porcentaje == $high_47) or ( $CLA1_porcentaje == $high_48)or($CLA1_porcentaje > 20)) && ($CLA1_porcentaje > 20)) {
            $CLA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CLA1c = '';
        }
        if ((($CLA2_porcentaje == $high_47) or ( $CLA2_porcentaje == $high_48)or($CLA2_porcentaje > 20)) && ($CLA2_porcentaje > 20)) {
            $CLA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CLA2c = '';
        }
        if ((($CLA3_porcentaje == $high_47 )or ( $CLA3_porcentaje == $high_48)or($CLA3_porcentaje > 20)) && ($CLA3_porcentaje > 20)) {
            $CLA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CLA3c = '';
        }
        if ((($CLA4_porcentaje == $high_47) or ( $CLA4_porcentaje == $high_48)or($CLA4_porcentaje > 20)) && ($CLA4_porcentaje > 20)) {
            $CLA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CLA4c = '';
        }
        if ((($CLA5_porcentaje == $high_47) or ( $CLA5_porcentaje == $high_48)or($CLA5_porcentaje > 20)) && ($CLA5_porcentaje > 20)) {
            $CLA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CLA5c = '';
        }
        $variable26 = array($CLO1_porcentaje, $CLO2_porcentaje, $CLO3_porcentaje, $CLO4_porcentaje, $CLO5_porcentaje);
        $c = 0;
        $high_49 = $high_50 = 0;
        do {
            if (isset($variable26[$c])) {
                if ($variable26[$c] > $high_49) {
                    $high_50 = $high_49;
                    $high_49 = $variable26[$c];
                } else if ($variable26[$c] > $high_50) {
                    $high_50 = $variable26[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CLO1_porcentaje == $high_49) or ( $CLO1_porcentaje == $high_50)or($CLO1_porcentaje > 20)) && ($CLO1_porcentaje > 20)) {
            $CLO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CLO1c = '';
        }
        if ((($CLO2_porcentaje == $high_49) or ( $CLO2_porcentaje == $high_50)or($CLO2_porcentaje > 20)) && ($CLO2_porcentaje > 20)) {
            $CLO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CLO2c = '';
        }
        if ((($CLO3_porcentaje == $high_49 )or ( $CLO3_porcentaje == $high_50)or($CLO3_porcentaje > 20)) && ($CLO3_porcentaje > 20)) {
            $CLO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CLO3c = '';
        }
        if ((($CLO4_porcentaje == $high_49) or ( $CLO4_porcentaje == $high_50)or($CLO4_porcentaje > 20)) && ($CLO4_porcentaje > 20)) {
            $CLO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CLO4c = '';
        }
        if ((($CLO5_porcentaje == $high_49) or ( $CLO5_porcentaje == $high_50)or($CLO5_porcentaje > 20)) && ($CLO5_porcentaje > 20)) {
            $CLO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CLO5c = '';
        }
        $variable27 = array($RSJ1_porcentaje, $RSJ2_porcentaje, $RSJ3_porcentaje, $RSJ4_porcentaje, $RSJ5_porcentaje);
        $c = 0;
        $high_51 = $high_52 = 0;
        do {
            if (isset($variable27[$c])) {
                if ($variable27[$c] > $high_51) {
                    $high_52 = $high_51;
                    $high_51 = $variable27[$c];
                } else if ($variable27[$c] > $high_52) {
                    $high_52 = $variable27[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RSJ1_porcentaje == $high_51) or ( $RSJ1_porcentaje == $high_52)or($RSJ1_porcentaje > 20)) && ($RSJ1_porcentaje > 20)) {
            $RSJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RSJ1c = '';
        }
        if ((($RSJ2_porcentaje == $high_51) or ( $RSJ2_porcentaje == $high_52)or($RSJ2_porcentaje > 20)) && ($RSJ2_porcentaje > 20)) {
            $RSJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RSJ2c = '';
        }
        if ((($RSJ3_porcentaje == $high_51 )or ( $RSJ3_porcentaje == $high_52)or($RSJ3_porcentaje > 20)) && ($RSJ3_porcentaje > 20)) {
            $RSJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RSJ3c = '';
        }
        if ((($RSJ4_porcentaje == $high_51) or ( $RSJ4_porcentaje == $high_52)or($RSJ4_porcentaje > 20)) && ($RSJ4_porcentaje > 20)) {
            $RSJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RSJ4c = '';
        }
        if ((($RSJ5_porcentaje == $high_51) or ( $RSJ5_porcentaje == $high_52)or($RSJ5_porcentaje > 20)) && ($RSJ5_porcentaje > 20)) {
            $RSJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RSJ5c = '';
        }
        $variable28 = array($RSP1_porcentaje, $RSP2_porcentaje, $RSP3_porcentaje, $RSP4_porcentaje, $RSP5_porcentaje);
        $c = 0;
        $high_53 = $high_54 = 0;
        do {
            if (isset($variable28[$c])) {
                if ($variable28[$c] > $high_53) {
                    $high_54 = $high_53;
                    $high_53 = $variable28[$c];
                } else if ($variable28[$c] > $high_54) {
                    $high_54 = $variable28[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RSP1_porcentaje == $high_53) or ( $RSP1_porcentaje == $high_54)or($RSP1_porcentaje > 20)) && ($RSP1_porcentaje > 20)) {
            $RSP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RSP1c = '';
        }
        if ((($RSP2_porcentaje == $high_53) or ( $RSP2_porcentaje == $high_54)or($RSP2_porcentaje > 20)) && ($RSP2_porcentaje > 20)) {
            $RSP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RSP2c = '';
        }
        if ((($RSP3_porcentaje == $high_53 )or ( $RSP3_porcentaje == $high_54)or($RSP3_porcentaje > 20)) && ($RSP3_porcentaje > 20)) {
            $RSP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RSP3c = '';
        }
        if ((($RSP4_porcentaje == $high_53) or ( $RSP4_porcentaje == $high_54)or($RSP4_porcentaje > 20)) && ($RSP4_porcentaje > 20)) {
            $RSP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RSP4c = '';
        }
        if ((($RSP5_porcentaje == $high_53) or ( $RSP5_porcentaje == $high_54)or($RSP5_porcentaje > 20)) && ($RSP5_porcentaje > 20)) {
            $RSP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RSP5c = '';
        }
        $variable29 = array($RSA1_porcentaje, $RSA2_porcentaje, $RSA3_porcentaje, $RSA4_porcentaje, $RSA5_porcentaje);
        $c = 0;
        $high_55 = $high_56 = 0;
        do {
            if (isset($variable29[$c])) {
                if ($variable29[$c] > $high_55) {
                    $high_56 = $high_55;
                    $high_55 = $variable29[$c];
                } else if ($variable29[$c] > $high_56) {
                    $high_56 = $variable29[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RSA1_porcentaje == $high_55) or ( $RSA1_porcentaje == $high_56)or($RSA1_porcentaje > 20)) && ($RSA1_porcentaje > 20)) {
            $RSA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RSA1c = '';
        }
        if ((($RSA2_porcentaje == $high_55) or ( $RSA2_porcentaje == $high_56)or($RSA2_porcentaje > 20)) && ($RSA2_porcentaje > 20)) {
            $RSA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RSA2c = '';
        }
        if ((($RSA3_porcentaje == $high_55 )or ( $RSA3_porcentaje == $high_56)or($RSA3_porcentaje > 20)) && ($RSA3_porcentaje > 20)) {
            $RSA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RSA3c = '';
        }
        if ((($RSA4_porcentaje == $high_55) or ( $RSA4_porcentaje == $high_56)or($RSA4_porcentaje > 20)) && ($RSA4_porcentaje > 20)) {
            $RSA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RSA4c = '';
        }
        if ((($RSA5_porcentaje == $high_55) or ( $RSA5_porcentaje == $high_56)or($RSA5_porcentaje > 20)) && ($RSA5_porcentaje > 20)) {
            $RSA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RSA5c = '';
        }
        $variable30 = array($RSO1_porcentaje, $RSO2_porcentaje, $RSO3_porcentaje, $RSO4_porcentaje, $RSO5_porcentaje);
        $c = 0;
        $high_57= $high_58= 0;
        do {
            if (isset($variable30[$c])) {
                if ($variable30[$c] > $high_57) {
                    $high_58= $high_57;
                    $high_57= $variable30[$c];
                } else if ($variable30[$c] > $high_58) {
                    $high_58= $variable30[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RSO1_porcentaje == $high_57) or ( $RSO1_porcentaje == $high_58)or($RSO1_porcentaje > 20)) && ($RSO1_porcentaje > 20)) {
            $RSO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RSO1c = '';
        }
        if ((($RSO2_porcentaje == $high_57) or ( $RSO2_porcentaje == $high_58)or($RSO2_porcentaje > 20)) && ($RSO2_porcentaje > 20)) {
            $RSO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RSO2c = '';
        }
        if ((($RSO3_porcentaje == $high_57)or ( $RSO3_porcentaje == $high_58)or($RSO3_porcentaje > 20)) && ($RSO3_porcentaje > 20)) {
            $RSO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RSO3c = '';
        }
        if ((($RSO4_porcentaje == $high_57) or ( $RSO4_porcentaje == $high_58)or($RSO4_porcentaje > 20)) && ($RSO4_porcentaje > 20)) {
            $RSO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RSO4c = '';
        }
        if ((($RSO5_porcentaje == $high_57) or ( $RSO5_porcentaje == $high_58)or($RSO5_porcentaje > 20)) && ($RSO5_porcentaje > 20)) {
            $RSO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RSO5c = '';
        }
        $variable31 = array($RDJ1_porcentaje, $RDJ2_porcentaje, $RDJ3_porcentaje, $RDJ4_porcentaje, $RDJ5_porcentaje);
        $c = 0;
        $high_59= $high_60= 0;
        do {
            if (isset($variable31[$c])) {
                if ($variable31[$c] > $high_59) {
                    $high_60= $high_59;
                    $high_59= $variable31[$c];
                } else if ($variable31[$c] > $high_60) {
                    $high_60= $variable31[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RDJ1_porcentaje == $high_59) or ( $RDJ1_porcentaje == $high_60)or($RDJ1_porcentaje > 20)) && ($RDJ1_porcentaje > 20)) {
            $RDJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RDJ1c = '';
        }
        if ((($RDJ2_porcentaje == $high_59) or ( $RDJ2_porcentaje == $high_60)or($RDJ2_porcentaje > 20)) && ($RDJ2_porcentaje > 20)) {
            $RDJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RDJ2c = '';
        }
        if ((($RDJ3_porcentaje == $high_59)or ( $RDJ3_porcentaje == $high_60)or($RDJ3_porcentaje > 20)) && ($RDJ3_porcentaje > 20)) {
            $RDJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RDJ3c = '';
        }
        if ((($RDJ4_porcentaje == $high_59) or ( $RDJ4_porcentaje == $high_60)or($RDJ4_porcentaje > 20)) && ($RDJ4_porcentaje > 20)) {
            $RDJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RDJ4c = '';
        }
        if ((($RDJ5_porcentaje == $high_59) or ( $RDJ5_porcentaje == $high_60)or($RDJ5_porcentaje > 20)) && ($RDJ5_porcentaje > 20)) {
            $RDJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RDJ5c = '';
        } 
        $variable32 = array($RDP1_porcentaje, $RDP2_porcentaje, $RDP3_porcentaje, $RDP4_porcentaje, $RDP5_porcentaje);
        $c = 0;
        $high_61= $high_62= 0;
        do {
            if (isset($variable32[$c])) {
                if ($variable32[$c] > $high_61) {
                    $high_62= $high_61;
                    $high_61= $variable32[$c];
                } else if ($variable32[$c] > $high_62) {
                    $high_62= $variable32[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RDP1_porcentaje == $high_61) or ( $RDP1_porcentaje == $high_62)or($RDP1_porcentaje > 20)) && ($RDP1_porcentaje > 20)) {
            $RDP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RDP1c = '';
        }
        if ((($RDP2_porcentaje == $high_61) or ( $RDP2_porcentaje == $high_62)or($RDP2_porcentaje > 20)) && ($RDP2_porcentaje > 20)) {
            $RDP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RDP2c = '';
        }
        if ((($RDP3_porcentaje == $high_61)or ( $RDP3_porcentaje == $high_62)or($RDP3_porcentaje > 20)) && ($RDP3_porcentaje > 20)) {
            $RDP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RDP3c = '';
        }
        if ((($RDP4_porcentaje == $high_61) or ( $RDP4_porcentaje == $high_62)or($RDP4_porcentaje > 20)) && ($RDP4_porcentaje > 20)) {
            $RDP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RDP4c = '';
        }
        if ((($RDP5_porcentaje == $high_61) or ( $RDP5_porcentaje == $high_62)or($RDP5_porcentaje > 20)) && ($RDP5_porcentaje > 20)) {
            $RDP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RDP5c = '';
        } 
        $variable34 = array($RDA1_porcentaje, $RDA2_porcentaje, $RDA3_porcentaje, $RDA4_porcentaje, $RDA5_porcentaje);
        $c = 0;
        $high_61= $high_64= 0;
        do {
            if (isset($variable34[$c])) {
                if ($variable34[$c] > $high_61) {
                    $high_64= $high_61;
                    $high_61= $variable34[$c];
                } else if ($variable34[$c] > $high_64) {
                    $high_64= $variable34[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RDA1_porcentaje == $high_61) or ( $RDA1_porcentaje == $high_64)or($RDA1_porcentaje > 20)) && ($RDA1_porcentaje > 20)) {
            $RDA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RDA1c = '';
        }
        if ((($RDA2_porcentaje == $high_61) or ( $RDA2_porcentaje == $high_64)or($RDA2_porcentaje > 20)) && ($RDA2_porcentaje > 20)) {
            $RDA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RDA2c = '';
        }
        if ((($RDA3_porcentaje == $high_61)or ( $RDA3_porcentaje == $high_64)or($RDA3_porcentaje > 20)) && ($RDA3_porcentaje > 20)) {
            $RDA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RDA3c = '';
        }
        if ((($RDA4_porcentaje == $high_61) or ( $RDA4_porcentaje == $high_64)or($RDA4_porcentaje > 20)) && ($RDA4_porcentaje > 20)) {
            $RDA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RDA4c = '';
        }
        if ((($RDA5_porcentaje == $high_61) or ( $RDA5_porcentaje == $high_64)or($RDA5_porcentaje > 20)) && ($RDA5_porcentaje > 20)) {
            $RDA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RDA5c = '';
        } 
        $variable35 = array($RDO1_porcentaje, $RDO2_porcentaje, $RDO3_porcentaje, $RDO4_porcentaje, $RDO5_porcentaje);
        $c = 0;
        $high_65= $high_66= 0;
        do {
            if (isset($variable35[$c])) {
                if ($variable35[$c] > $high_65) {
                    $high_66= $high_65;
                    $high_65= $variable35[$c];
                } else if ($variable35[$c] > $high_66) {
                    $high_66= $variable35[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RDO1_porcentaje == $high_65) or ( $RDO1_porcentaje == $high_66)or($RDO1_porcentaje > 20)) && ($RDO1_porcentaje > 20)) {
            $RDO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RDO1c = '';
        }
        if ((($RDO2_porcentaje == $high_65) or ( $RDO2_porcentaje == $high_66)or($RDO2_porcentaje > 20)) && ($RDO2_porcentaje > 20)) {
            $RDO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RDO2c = '';
        }
        if ((($RDO3_porcentaje == $high_65)or ( $RDO3_porcentaje == $high_66)or($RDO3_porcentaje > 20)) && ($RDO3_porcentaje > 20)) {
            $RDO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RDO3c = '';
        }
        if ((($RDO4_porcentaje == $high_65) or ( $RDO4_porcentaje == $high_66)or($RDO4_porcentaje > 20)) && ($RDO4_porcentaje > 20)) {
            $RDO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RDO4c = '';
        }
        if ((($RDO5_porcentaje == $high_65) or ( $RDO5_porcentaje == $high_66)or($RDO5_porcentaje > 20)) && ($RDO5_porcentaje > 20)) {
            $RDO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RDO5c = '';
        }
        $variable36 = array($RCJ1_porcentaje, $RCJ2_porcentaje, $RCJ3_porcentaje, $RCJ4_porcentaje, $RCJ5_porcentaje);
        $c = 0;
        $high_67= $high_68= 0;
        do {
            if (isset($variable36[$c])) {
                if ($variable36[$c] > $high_67) {
                    $high_68= $high_67;
                    $high_67= $variable36[$c];
                } else if ($variable36[$c] > $high_68) {
                    $high_68= $variable36[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RCJ1_porcentaje == $high_67) or ( $RCJ1_porcentaje == $high_68)or($RCJ1_porcentaje > 20)) && ($RCJ1_porcentaje > 20)) {
            $RCJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RCJ1c = '';
        }
        if ((($RCJ2_porcentaje == $high_67) or ( $RCJ2_porcentaje == $high_68)or($RCJ2_porcentaje > 20)) && ($RCJ2_porcentaje > 20)) {
            $RCJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RCJ2c = '';
        }
        if ((($RCJ3_porcentaje == $high_67)or ( $RCJ3_porcentaje == $high_68)or($RCJ3_porcentaje > 20)) && ($RCJ3_porcentaje > 20)) {
            $RCJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RCJ3c = '';
        }
        if ((($RCJ4_porcentaje == $high_67) or ( $RCJ4_porcentaje == $high_68)or($RCJ4_porcentaje > 20)) && ($RCJ4_porcentaje > 20)) {
            $RCJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RCJ4c = '';
        }
        if ((($RCJ5_porcentaje == $high_67) or ( $RCJ5_porcentaje == $high_68)or($RCJ5_porcentaje > 20)) && ($RCJ5_porcentaje > 20)) {
            $RCJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RCJ5c = '';
        }
        $variable37 = array($RCP1_porcentaje, $RCP2_porcentaje, $RCP3_porcentaje, $RCP4_porcentaje, $RCP5_porcentaje);
        $c = 0;
        $high_69= $high_70= 0;
        do {
            if (isset($variable37[$c])) {
                if ($variable37[$c] > $high_69) {
                    $high_70= $high_69;
                    $high_69= $variable37[$c];
                } else if ($variable37[$c] > $high_70) {
                    $high_70= $variable37[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RCP1_porcentaje == $high_69) or ( $RCP1_porcentaje == $high_70)or($RCP1_porcentaje > 20)) && ($RCP1_porcentaje > 20)) {
            $RCP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RCP1c = '';
        }
        if ((($RCP2_porcentaje == $high_69) or ( $RCP2_porcentaje == $high_70)or($RCP2_porcentaje > 20)) && ($RCP2_porcentaje > 20)) {
            $RCP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RCP2c = '';
        }
        if ((($RCP3_porcentaje == $high_69)or ( $RCP3_porcentaje == $high_70)or($RCP3_porcentaje > 20)) && ($RCP3_porcentaje > 20)) {
            $RCP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RCP3c = '';
        }
        if ((($RCP4_porcentaje == $high_69) or ( $RCP4_porcentaje == $high_70)or($RCP4_porcentaje > 20)) && ($RCP4_porcentaje > 20)) {
            $RCP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RCP4c = '';
        }
        if ((($RCP5_porcentaje == $high_69) or ( $RCP5_porcentaje == $high_70)or($RCP5_porcentaje > 20)) && ($RCP5_porcentaje > 20)) {
            $RCP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RCP5c = '';
        }
        $variable38= array($CRJ1_porcentaje, $CRJ2_porcentaje, $CRJ3_porcentaje, $CRJ4_porcentaje, $CRJ5_porcentaje);
        $c = 0;
        $high_71= $high_72= 0;
        do {
            if (isset($variable38[$c])) {
                if ($variable38[$c] > $high_71) {
                    $high_72= $high_71;
                    $high_71= $variable38[$c];
                } else if ($variable38[$c] > $high_72) {
                    $high_72= $variable38[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CRJ1_porcentaje == $high_71) or ( $CRJ1_porcentaje == $high_72)or($CRJ1_porcentaje > 20)) && ($CRJ1_porcentaje > 20)) {
            $CRJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CRJ1c = '';
        }
        if ((($CRJ2_porcentaje == $high_71) or ( $CRJ2_porcentaje == $high_72)or($CRJ2_porcentaje > 20)) && ($CRJ2_porcentaje > 20)) {
            $CRJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CRJ2c = '';
        }
        if ((($CRJ3_porcentaje == $high_71)or ( $CRJ3_porcentaje == $high_72)or($CRJ3_porcentaje > 20)) && ($CRJ3_porcentaje > 20)) {
            $CRJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CRJ3c = '';
        }
        if ((($CRJ4_porcentaje == $high_71) or ( $CRJ4_porcentaje == $high_72)or($CRJ4_porcentaje > 20)) && ($CRJ4_porcentaje > 20)) {
            $CRJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CRJ4c = '';
        }
        if ((($CRJ5_porcentaje == $high_71) or ( $CRJ5_porcentaje == $high_72)or($CRJ5_porcentaje > 20)) && ($CRJ5_porcentaje > 20)) {
            $CRJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CRJ5c = '';
        }
        $variable39= array($CRP1_porcentaje, $CRP2_porcentaje, $CRP3_porcentaje, $CRP4_porcentaje, $CRP5_porcentaje);
        $c = 0;
        $high_73= $high_74= 0;
        do {
            if (isset($variable39[$c])) {
                if ($variable39[$c] > $high_73) {
                    $high_74= $high_73;
                    $high_73= $variable39[$c];
                } else if ($variable39[$c] > $high_74) {
                    $high_74= $variable39[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CRP1_porcentaje == $high_73) or ( $CRP1_porcentaje == $high_74)or($CRP1_porcentaje > 20)) && ($CRP1_porcentaje > 20)) {
            $CRP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CRP1c = '';
        }
        if ((($CRP2_porcentaje == $high_73) or ( $CRP2_porcentaje == $high_74)or($CRP2_porcentaje > 20)) && ($CRP2_porcentaje > 20)) {
            $CRP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CRP2c = '';
        }
        if ((($CRP3_porcentaje == $high_73)or ( $CRP3_porcentaje == $high_74)or($CRP3_porcentaje > 20)) && ($CRP3_porcentaje > 20)) {
            $CRP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CRP3c = '';
        }
        if ((($CRP4_porcentaje == $high_73) or ( $CRP4_porcentaje == $high_74)or($CRP4_porcentaje > 20)) && ($CRP4_porcentaje > 20)) {
            $CRP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CRP4c = '';
        }
        if ((($CRP5_porcentaje == $high_73) or ( $CRP5_porcentaje == $high_74)or($CRP5_porcentaje > 20)) && ($CRP5_porcentaje > 20)) {
            $CRP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CRP5c = '';
        }
        $variable40= array($CRA1_porcentaje, $CRA2_porcentaje, $CRA3_porcentaje, $CRA4_porcentaje, $CRA5_porcentaje);
        $c = 0;
        $high_75= $high_76= 0;
        do {
            if (isset($variable40[$c])) {
                if ($variable40[$c] > $high_75) {
                    $high_76= $high_75;
                    $high_75= $variable40[$c];
                } else if ($variable40[$c] > $high_76) {
                    $high_76= $variable40[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CRA1_porcentaje == $high_75) or ( $CRA1_porcentaje == $high_76)or($CRA1_porcentaje > 20)) && ($CRA1_porcentaje > 20)) {
            $CRA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CRA1c = '';
        }
        if ((($CRA2_porcentaje == $high_75) or ( $CRA2_porcentaje == $high_76)or($CRA2_porcentaje > 20)) && ($CRA2_porcentaje > 20)) {
            $CRA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CRA2c = '';
        }
        if ((($CRA3_porcentaje == $high_75)or ( $CRA3_porcentaje == $high_76)or($CRA3_porcentaje > 20)) && ($CRA3_porcentaje > 20)) {
            $CRA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CRA3c = '';
        }
        if ((($CRA4_porcentaje == $high_75) or ( $CRA4_porcentaje == $high_76)or($CRA4_porcentaje > 20)) && ($CRA4_porcentaje > 20)) {
            $CRA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CRA4c = '';
        }
        if ((($CRA5_porcentaje == $high_75) or ( $CRA5_porcentaje == $high_76)or($CRA5_porcentaje > 20)) && ($CRA5_porcentaje > 20)) {
            $CRA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CRA5c = '';
        }
        $variable41= array($CRO1_porcentaje, $CRO2_porcentaje, $CRO3_porcentaje, $CRO4_porcentaje, $CRO5_porcentaje);
        $c = 0;
        $high_77= $high_78= 0;
        do {
            if (isset($variable41[$c])) {
                if ($variable41[$c] > $high_77) {
                    $high_78= $high_77;
                    $high_77= $variable41[$c];
                } else if ($variable41[$c] > $high_78) {
                    $high_78= $variable41[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CRO1_porcentaje == $high_77) or ( $CRO1_porcentaje == $high_78)or($CRO1_porcentaje > 20)) && ($CRO1_porcentaje > 20)) {
            $CRO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CRO1c = '';
        }
        if ((($CRO2_porcentaje == $high_77) or ( $CRO2_porcentaje == $high_78)or($CRO2_porcentaje > 20)) && ($CRO2_porcentaje > 20)) {
            $CRO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CRO2c = '';
        }
        if ((($CRO3_porcentaje == $high_77)or ( $CRO3_porcentaje == $high_78)or($CRO3_porcentaje > 20)) && ($CRO3_porcentaje > 20)) {
            $CRO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CRO3c = '';
        }
        if ((($CRO4_porcentaje == $high_77) or ( $CRO4_porcentaje == $high_78)or($CRO4_porcentaje > 20)) && ($CRO4_porcentaje > 20)) {
            $CRO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CRO4c = '';
        }
        if ((($CRO5_porcentaje == $high_77) or ( $CRO5_porcentaje == $high_78)or($CRO5_porcentaje > 20)) && ($CRO5_porcentaje > 20)) {
            $CRO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CRO5c = '';
        }
        $variable43= array($CJ1_porcentaje, $CJ2_porcentaje, $CJ3_porcentaje, $CJ4_porcentaje, $CJ5_porcentaje);
        $c = 0;
        $high_79= $high_80= 0;
        do {
            if (isset($variable43[$c])) {
                if ($variable43[$c] > $high_79) {
                    $high_80= $high_79;
                    $high_79= $variable43[$c];
                } else if ($variable43[$c] > $high_80) {
                    $high_80= $variable43[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CJ1_porcentaje == $high_79) or ( $CJ1_porcentaje == $high_80)or($CJ1_porcentaje > 20)) && ($CJ1_porcentaje > 20)) {
            $CJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CJ1c = '';
        }
        if ((($CJ2_porcentaje == $high_79) or ( $CJ2_porcentaje == $high_80)or($CJ2_porcentaje > 20)) && ($CJ2_porcentaje > 20)) {
            $CJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CJ2c = '';
        }
        if ((($CJ3_porcentaje == $high_79)or ( $CJ3_porcentaje == $high_80)or($CJ3_porcentaje > 20)) && ($CJ3_porcentaje > 20)) {
            $CJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CJ3c = '';
        }
        if ((($CJ4_porcentaje == $high_79) or ( $CJ4_porcentaje == $high_80)or($CJ4_porcentaje > 20)) && ($CJ4_porcentaje > 20)) {
            $CJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CJ4c = '';
        }
        if ((($CJ5_porcentaje == $high_79) or ( $CJ5_porcentaje == $high_80)or($CJ5_porcentaje > 20)) && ($CJ5_porcentaje > 20)) {
            $CJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CJ5c = '';
        }
        $variable44= array($CP1_porcentaje, $CP2_porcentaje, $CP3_porcentaje, $CP4_porcentaje, $CP5_porcentaje);
        $c = 0;
        $high_81= $high_82= 0;
        do {
            if (isset($variable44[$c])) {
                if ($variable44[$c] > $high_81) {
                    $high_82= $high_81;
                    $high_81= $variable44[$c];
                } else if ($variable44[$c] > $high_82) {
                    $high_82= $variable44[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CP1_porcentaje == $high_81) or ( $CP1_porcentaje == $high_82)or($CP1_porcentaje > 20)) && ($CP1_porcentaje > 20)) {
            $CP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CP1c = '';
        }
        if ((($CP2_porcentaje == $high_81) or ( $CP2_porcentaje == $high_82)or($CP2_porcentaje > 20)) && ($CP2_porcentaje > 20)) {
            $CP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CP2c = '';
        }
        if ((($CP3_porcentaje == $high_81)or ( $CP3_porcentaje == $high_82)or($CP3_porcentaje > 20)) && ($CP3_porcentaje > 20)) {
            $CP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CP3c = '';
        }
        if ((($CP4_porcentaje == $high_81) or ( $CP4_porcentaje == $high_82)or($CP4_porcentaje > 20)) && ($CP4_porcentaje > 20)) {
            $CP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CP4c = '';
        }
        if ((($CP5_porcentaje == $high_81) or ( $CP5_porcentaje == $high_82)or($CP5_porcentaje > 20)) && ($CP5_porcentaje > 20)) {
            $CP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CP5c = '';
        }
        $variable45= array($CA1_porcentaje, $CA2_porcentaje, $CA3_porcentaje, $CA4_porcentaje, $CA5_porcentaje);
        $c = 0;
        $high_83= $high_84= 0;
        do {
            if (isset($variable45[$c])) {
                if ($variable45[$c] > $high_83) {
                    $high_84= $high_83;
                    $high_83= $variable45[$c];
                } else if ($variable45[$c] > $high_84) {
                    $high_84= $variable45[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CA1_porcentaje == $high_83) or ( $CA1_porcentaje == $high_84)or($CA1_porcentaje > 20)) && ($CA1_porcentaje > 20)) {
            $CA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CA1c = '';
        }
        if ((($CA2_porcentaje == $high_83) or ( $CA2_porcentaje == $high_84)or($CA2_porcentaje > 20)) && ($CA2_porcentaje > 20)) {
            $CA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CA2c = '';
        }
        if ((($CA3_porcentaje == $high_83)or ( $CA3_porcentaje == $high_84)or($CA3_porcentaje > 20)) && ($CA3_porcentaje > 20)) {
            $CA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CA3c = '';
        }
        if ((($CA4_porcentaje == $high_83) or ( $CA4_porcentaje == $high_84)or($CA4_porcentaje > 20)) && ($CA4_porcentaje > 20)) {
            $CA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CA4c = '';
        }
        if ((($CA5_porcentaje == $high_83) or ( $CA5_porcentaje == $high_84)or($CA5_porcentaje > 20)) && ($CA5_porcentaje > 20)) {
            $CA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CA5c = '';
        }
        $variable47= array($CO1_porcentaje, $CO2_porcentaje, $CO3_porcentaje, $CO4_porcentaje, $CO5_porcentaje);
        $c = 0;
        $high_85= $high_86= 0;
        do {
            if (isset($variable47[$c])) {
                if ($variable47[$c] > $high_85) {
                    $high_86= $high_85;
                    $high_85= $variable47[$c];
                } else if ($variable47[$c] > $high_86) {
                    $high_86= $variable47[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CO1_porcentaje == $high_85) or ( $CO1_porcentaje == $high_86)or($CO1_porcentaje > 20)) && ($CO1_porcentaje > 20)) {
            $CO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CO1c = '';
        }
        if ((($CO2_porcentaje == $high_85) or ( $CO2_porcentaje == $high_86)or($CO2_porcentaje > 20)) && ($CO2_porcentaje > 20)) {
            $CO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CO2c = '';
        }
        if ((($CO3_porcentaje == $high_85)or ( $CO3_porcentaje == $high_86)or($CO3_porcentaje > 20)) && ($CO3_porcentaje > 20)) {
            $CO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CO3c = '';
        }
        if ((($CO4_porcentaje == $high_85) or ( $CO4_porcentaje == $high_86)or($CO4_porcentaje > 20)) && ($CO4_porcentaje > 20)) {
            $CO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CO4c = '';
        }
        if ((($CO5_porcentaje == $high_85) or ( $CO5_porcentaje == $high_86)or($CO5_porcentaje > 20)) && ($CO5_porcentaje > 20)) {
            $CO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CO5c = '';
        }
        $variable48= array($PMJ1_porcentaje, $PMJ2_porcentaje, $PMJ3_porcentaje, $PMJ4_porcentaje, $PMJ5_porcentaje);
        $c = 0;
        $high_87= $high_88= 0;
        do {
            if (isset($variable48[$c])) {
                if ($variable48[$c] > $high_87) {
                    $high_88= $high_87;
                    $high_87= $variable48[$c];
                } else if ($variable48[$c] > $high_88) {
                    $high_88= $variable48[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($PMJ1_porcentaje == $high_87) or ( $PMJ1_porcentaje == $high_88)or($PMJ1_porcentaje > 20)) && ($PMJ1_porcentaje > 20)) {
            $PMJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $PMJ1c = '';
        }
        if ((($PMJ2_porcentaje == $high_87) or ( $PMJ2_porcentaje == $high_88)or($PMJ2_porcentaje > 20)) && ($PMJ2_porcentaje > 20)) {
            $PMJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $PMJ2c = '';
        }
        if ((($PMJ3_porcentaje == $high_87)or ( $PMJ3_porcentaje == $high_88)or($PMJ3_porcentaje > 20)) && ($PMJ3_porcentaje > 20)) {
            $PMJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $PMJ3c = '';
        }
        if ((($PMJ4_porcentaje == $high_87) or ( $PMJ4_porcentaje == $high_88)or($PMJ4_porcentaje > 20)) && ($PMJ4_porcentaje > 20)) {
            $PMJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $PMJ4c = '';
        }
        if ((($PMJ5_porcentaje == $high_87) or ( $PMJ5_porcentaje == $high_88)or($PMJ5_porcentaje > 20)) && ($PMJ5_porcentaje > 20)) {
            $PMJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $PMJ5c = '';
        }
        $variable49= array($PMP1_porcentaje, $PMP2_porcentaje, $PMP3_porcentaje, $PMP4_porcentaje, $PMP5_porcentaje);
        $c = 0;
        $high_89= $high_90= 0;
        do {
            if (isset($variable49[$c])) {
                if ($variable49[$c] > $high_89) {
                    $high_90= $high_89;
                    $high_89= $variable49[$c];
                } else if ($variable49[$c] > $high_90) {
                    $high_90= $variable49[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($PMP1_porcentaje == $high_89) or ( $PMP1_porcentaje == $high_90)or($PMP1_porcentaje > 20)) && ($PMP1_porcentaje > 20)) {
            $PMP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $PMP1c = '';
        }
        if ((($PMP2_porcentaje == $high_89) or ( $PMP2_porcentaje == $high_90)or($PMP1_porcentaje > 20)) && ($PMP2_porcentaje > 20)) {
            $PMP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $PMP2c = '';
        }
        if ((($PMP3_porcentaje == $high_89)or ( $PMP3_porcentaje == $high_90)or($PMP2_porcentaje > 20)) && ($PMP3_porcentaje > 20)) {
            $PMP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $PMP3c = '';
        }
        if ((($PMP4_porcentaje == $high_89) or ( $PMP4_porcentaje == $high_90)or($PMP3_porcentaje > 20)) && ($PMP4_porcentaje > 20)) {
            $PMP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $PMP4c = '';
        }
        if ((($PMP5_porcentaje == $high_89) or ( $PMP5_porcentaje == $high_90)or($PMP4_porcentaje > 20)) && ($PMP5_porcentaje > 20)) {
            $PMP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $PMP5c = '';
        }
        $variable50= array($PMA1_porcentaje, $PMA2_porcentaje, $PMA3_porcentaje, $PMA5_porcentaje, $PMA5_porcentaje);
        $c = 0;
        $high_91= $high_92= 0;
        do {
            if (isset($variable50[$c])) {
                if ($variable50[$c] > $high_91) {
                    $high_92= $high_91;
                    $high_91= $variable50[$c];
                } else if ($variable50[$c] > $high_92) {
                    $high_92= $variable50[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($PMA1_porcentaje == $high_91) or ( $PMA1_porcentaje == $high_92)or($PMA1_porcentaje > 20)) && ($PMA1_porcentaje > 20)) {
            $PMA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $PMA1c = '';
        }
        if ((($PMA2_porcentaje == $high_91) or ( $PMA2_porcentaje == $high_92)or($PMA2_porcentaje > 20)) && ($PMA2_porcentaje > 20)) {
            $PMA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $PMA2c = '';
        }
        if ((($PMA3_porcentaje == $high_91)or ( $PMA3_porcentaje == $high_92)or($PMA3_porcentaje > 20)) && ($PMA3_porcentaje > 20)) {
            $PMA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $PMA3c = '';
        }
        if ((($PMA4_porcentaje == $high_91) or ( $PMA4_porcentaje == $high_92)or($PMA4_porcentaje > 20)) && ($PMA4_porcentaje > 20)) {
            $PMA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $PMA4c = '';
        }
        if ((($PMA5_porcentaje == $high_91) or ( $PMA5_porcentaje == $high_92)or($PMA5_porcentaje > 20)) && ($PMA5_porcentaje > 20)) {
            $PMA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $PMA5c = '';
        }
        $variable51= array($PMO1_porcentaje, $PMO2_porcentaje, $PMO3_porcentaje, $PMO4_porcentaje, $PMO5_porcentaje);
        $c = 0;
        $high_93= $high_94= 0;
        do {
            if (isset($variable51[$c])) {
                if ($variable51[$c] > $high_93) {
                    $high_94= $high_93;
                    $high_93= $variable51[$c];
                } else if ($variable51[$c] > $high_94) {
                    $high_94= $variable51[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($PMO1_porcentaje == $high_93) or ( $PMO1_porcentaje == $high_94)or($PMO1_porcentaje > 20)) && ($PMO1_porcentaje > 20)) {
            $PMO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $PMO1c = '';
        }
        if ((($PMO2_porcentaje == $high_93) or ( $PMO2_porcentaje == $high_94)or($PMO2_porcentaje > 20)) && ($PMO2_porcentaje > 20)) {
            $PMO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $PMO2c = '';
        }
        if ((($PMO3_porcentaje == $high_93)or ( $PMO3_porcentaje == $high_94)or($PMO3_porcentaje > 20)) && ($PMO3_porcentaje > 20)) {
            $PMO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $PMO3c = '';
        }
        if ((($PMO4_porcentaje == $high_93) or ( $PMO4_porcentaje == $high_94)or($PMO4_porcentaje > 20)) && ($PMO4_porcentaje > 20)) {
            $PMO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $PMO4c = '';
        }
        if ((($PMO5_porcentaje == $high_93) or ( $PMO5_porcentaje == $high_94)or($PMO5_porcentaje > 20)) && ($PMO5_porcentaje > 20)) {
            $PMO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $PMO5c = '';
        }
        $variable52= array($PDJ1_porcentaje, $PDJ2_porcentaje, $PDJ3_porcentaje, $PDJ4_porcentaje, $PDJ5_porcentaje);
        $c = 0;
        $high_95= $high_96= 0;
        do {
            if (isset($variable52[$c])) {
                if ($variable52[$c] > $high_95) {
                    $high_96= $high_95;
                    $high_95= $variable52[$c];
                } else if ($variable52[$c] > $high_96) {
                    $high_96= $variable52[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($PDJ1_porcentaje == $high_95) or ( $PDJ1_porcentaje == $high_96)or($PDJ1_porcentaje > 20)) && ($PDJ1_porcentaje > 20)) {
            $PDJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $PDJ1c = '';
        }
        if ((($PDJ2_porcentaje == $high_95) or ( $PDJ2_porcentaje == $high_96)or($PDJ2_porcentaje > 20)) && ($PDJ2_porcentaje > 20)) {
            $PDJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $PDJ2c = '';
        }
        if ((($PDJ3_porcentaje == $high_95)or ( $PDJ3_porcentaje == $high_96)or($PDJ3_porcentaje > 20)) && ($PDJ3_porcentaje > 20)) {
            $PDJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $PDJ3c = '';
        }
        if ((($PDJ4_porcentaje == $high_95) or ( $PDJ4_porcentaje == $high_96)or($PDJ4_porcentaje > 20)) && ($PDJ4_porcentaje > 20)) {
            $PDJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $PDJ4c = '';
        }
        if ((($PDJ5_porcentaje == $high_95) or ( $PDJ5_porcentaje == $high_96)or($PDJ5_porcentaje > 20)) && ($PDJ5_porcentaje > 20)) {
            $PDJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $PDJ5c = '';
        }
        $variable53= array($PDP1_porcentaje, $PDP2_porcentaje, $PDP3_porcentaje, $PDP4_porcentaje, $PDP5_porcentaje);
        $c = 0;
        $high_97= $high_98= 0;
        do {
            if (isset($variable53[$c])) {
                if ($variable53[$c] > $high_97) {
                    $high_98= $high_97;
                    $high_97= $variable53[$c];
                } else if ($variable53[$c] > $high_98) {
                    $high_98= $variable53[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($PDP1_porcentaje == $high_97) or ( $PDP1_porcentaje == $high_98)or($PDP1_porcentaje > 20)) && ($PDP1_porcentaje > 20)) {
            $PDP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $PDP1c = '';
        }
        if ((($PDP2_porcentaje == $high_97) or ( $PDP2_porcentaje == $high_98)or($PDP2_porcentaje > 20)) && ($PDP2_porcentaje > 20)) {
            $PDP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $PDP2c = '';
        }
        if ((($PDP3_porcentaje == $high_97)or ( $PDP3_porcentaje == $high_98)or($PDP3_porcentaje > 20)) && ($PDP3_porcentaje > 20)) {
            $PDP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $PDP3c = '';
        }
        if ((($PDP4_porcentaje == $high_97) or ( $PDP4_porcentaje == $high_98)or($PDP4_porcentaje > 20)) && ($PDP4_porcentaje > 20)) {
            $PDP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $PDP4c = '';
        }
        if ((($PDP5_porcentaje == $high_97) or ( $PDP5_porcentaje == $high_98)or($PDP5_porcentaje > 20)) && ($PDP5_porcentaje > 20)) {
            $PDP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $PDP5c = '';
        }
        $variable54= array($PDA1_porcentaje, $PDA2_porcentaje, $PDA3_porcentaje, $PDA4_porcentaje, $PDA5_porcentaje);
        $c = 0;
        $high_99= $high_100= 0;
        do {
            if (isset($variable54[$c])) {
                if ($variable54[$c] > $high_99) {
                    $high_100= $high_99;
                    $high_99= $variable54[$c];
                } else if ($variable54[$c] > $high_100) {
                    $high_100= $variable54[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($PDA1_porcentaje == $high_99) or ( $PDA1_porcentaje == $high_100)or($PDA1_porcentaje > 20)) && ($PDA1_porcentaje > 20)) {
            $PDA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $PDA1c = '';
        }
        if ((($PDA2_porcentaje == $high_99) or ( $PDA2_porcentaje == $high_100)or($PDA2_porcentaje > 20)) && ($PDA2_porcentaje > 20)) {
            $PDA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $PDA2c = '';
        }
        if ((($PDA3_porcentaje == $high_99)or ( $PDA3_porcentaje == $high_100)or($PDA3_porcentaje > 20)) && ($PDA3_porcentaje > 20)) {
            $PDA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $PDA3c = '';
        }
        if ((($PDA4_porcentaje == $high_99) or ( $PDA4_porcentaje == $high_100)or($PDA4_porcentaje > 20)) && ($PDA4_porcentaje > 20)) {
            $PDA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $PDA4c = '';
        }
        if ((($PDA5_porcentaje == $high_99) or ( $PDA5_porcentaje == $high_100)or($PDA5_porcentaje > 20)) && ($PDA5_porcentaje > 20)) {
            $PDA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $PDA5c = '';
        }
        $variable55= array($PDO1_porcentaje, $PDO2_porcentaje, $PDO3_porcentaje, $PDO4_porcentaje, $PDO5_porcentaje);
        $c = 0;
        $high_101= $high_102= 0;
        do {
            if (isset($variable55[$c])) {
                if ($variable55[$c] > $high_101) {
                    $high_102= $high_101;
                    $high_101= $variable55[$c];
                } else if ($variable55[$c] > $high_102) {
                    $high_102= $variable55[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($PDO1_porcentaje == $high_101) or ( $PDO1_porcentaje == $high_102)or($PDO1_porcentaje > 20)) && ($PDO1_porcentaje > 20)) {
            $PDO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $PDO1c = '';
        }
        if ((($PDO2_porcentaje == $high_101) or ( $PDO2_porcentaje == $high_102)or($PDO2_porcentaje > 20)) && ($PDO2_porcentaje > 20)) {
            $PDO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $PDO2c = '';
        }
        if ((($PDO3_porcentaje == $high_101)or ( $PDO3_porcentaje == $high_102)or($PDO3_porcentaje > 20)) && ($PDO3_porcentaje > 20)) {
            $PDO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $PDO3c = '';
        }
        if ((($PDO4_porcentaje == $high_101) or ( $PDO4_porcentaje == $high_102)or($PDO4_porcentaje > 20)) && ($PDO4_porcentaje > 20)) {
            $PDO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $PDO4c = '';
        }
        if ((($PDO5_porcentaje == $high_101) or ( $PDO5_porcentaje == $high_102)or($PDO5_porcentaje > 20)) && ($PDO5_porcentaje > 20)) {
            $PDO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $PDO5c = '';
        }
        $variable56= array($CAJ1_porcentaje, $CAJ2_porcentaje, $CAJ3_porcentaje, $CAJ4_porcentaje, $CAJ5_porcentaje);
        $c = 0;
        $high_103= $high_104= 0;
        do {
            if (isset($variable56[$c])) {
                if ($variable56[$c] > $high_103) {
                    $high_104= $high_103;
                    $high_103= $variable56[$c];
                } else if ($variable56[$c] > $high_104) {
                    $high_104= $variable56[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CAJ1_porcentaje == $high_103) or ( $CAJ1_porcentaje == $high_104)or($CAJ1_porcentaje > 20)) && ($CAJ1_porcentaje > 20)) {
            $CAJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CAJ1c = '';
        }
        if ((($CAJ2_porcentaje == $high_103) or ( $CAJ2_porcentaje == $high_104)or($CAJ2_porcentaje > 20)) && ($CAJ2_porcentaje > 20)) {
            $CAJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CAJ2c = '';
        }
        if ((($CAJ3_porcentaje == $high_103)or ( $CAJ3_porcentaje == $high_104)or($CAJ3_porcentaje > 20)) && ($CAJ3_porcentaje > 20)) {
            $CAJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CAJ3c = '';
        }
        if ((($CAJ4_porcentaje == $high_103) or ( $CAJ4_porcentaje == $high_104)or($CAJ4_porcentaje > 20)) && ($CAJ4_porcentaje > 20)) {
            $CAJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CAJ4c = '';
        }
        if ((($CAJ5_porcentaje == $high_103) or ( $CAJ5_porcentaje == $high_104)or($CAJ5_porcentaje > 20)) && ($CAJ5_porcentaje > 20)) {
            $CAJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CAJ5c = '';
        }
        $variable57= array($CAP1_porcentaje, $CAP2_porcentaje, $CAP3_porcentaje, $CAP4_porcentaje, $CAP5_porcentaje);
        $c = 0;
        $high_105= $high_106= 0;
        do {
            if (isset($variable57[$c])) {
                if ($variable57[$c] > $high_105) {
                    $high_106= $high_105;
                    $high_105= $variable57[$c];
                } else if ($variable57[$c] > $high_106) {
                    $high_106= $variable57[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CAP1_porcentaje == $high_105) or ( $CAP1_porcentaje == $high_106)or($CAP1_porcentaje > 20)) && ($CAP1_porcentaje > 20)) {
            $CAP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CAP1c = '';
        }
        if ((($CAP2_porcentaje == $high_105) or ( $CAP2_porcentaje == $high_106)or($CAP2_porcentaje > 20)) && ($CAP2_porcentaje > 20)) {
            $CAP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CAP2c = '';
        }
        if ((($CAP3_porcentaje == $high_105)or ( $CAP3_porcentaje == $high_106)or($CAP3_porcentaje > 20)) && ($CAP3_porcentaje > 20)) {
            $CAP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CAP3c = '';
        }
        if ((($CAP4_porcentaje == $high_105) or ( $CAP4_porcentaje == $high_106)or($CAP4_porcentaje > 20)) && ($CAP4_porcentaje > 20)) {
            $CAP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CAP4c = '';
        }
        if ((($CAP5_porcentaje == $high_105) or ( $CAP5_porcentaje == $high_106)or($CAP5_porcentaje > 20)) && ($CAP5_porcentaje > 20)) {
            $CAP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CAP5c = '';
        }
        $variable58= array($CAA1_porcentaje, $CAA2_porcentaje, $CAA3_porcentaje, $CAA4_porcentaje, $CAA5_porcentaje);
        $c = 0;
        $high_107= $high_108= 0;
        do {
            if (isset($variable58[$c])) {
                if ($variable58[$c] > $high_107) {
                    $high_108= $high_107;
                    $high_107= $variable58[$c];
                } else if ($variable58[$c] > $high_108) {
                    $high_108= $variable58[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CAA1_porcentaje == $high_107) or ( $CAA1_porcentaje == $high_108)or($CAA1_porcentaje > 20)) && ($CAA1_porcentaje > 20)) {
            $CAA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CAA1c = '';
        }
        if ((($CAA2_porcentaje == $high_107) or ( $CAA2_porcentaje == $high_108)or($CAA2_porcentaje > 20)) && ($CAA2_porcentaje > 0)) {
            $CAA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CAA2c = '';
        }
        if ((($CAA3_porcentaje == $high_107)or ( $CAA3_porcentaje == $high_108)or($CAA3_porcentaje > 20)) && ($CAA3_porcentaje > 20)) {
            $CAA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CAA3c = '';
        }
        if ((($CAA4_porcentaje == $high_107) or ( $CAA4_porcentaje == $high_108)or($CAA4_porcentaje > 20)) && ($CAA4_porcentaje > 20)) {
            $CAA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CAA4c = '';
        }
        if ((($CAA5_porcentaje == $high_107) or ( $CAA5_porcentaje == $high_108)or($CAA5_porcentaje > 20)) && ($CAA5_porcentaje > 20)) {
            $CAA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CAA5c = '';
        }
        $variable59= array($CAO1_porcentaje, $CAO2_porcentaje, $CAO3_porcentaje, $CAO4_porcentaje, $CAO5_porcentaje);
        $c = 0;
        $high_109= $high_110= 0;
        do {
            if (isset($variable59[$c])) {
                if ($variable59[$c] > $high_109) {
                    $high_110= $high_109;
                    $high_109= $variable59[$c];
                } else if ($variable59[$c] > $high_110) {
                    $high_110= $variable59[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CAO1_porcentaje == $high_109) or ( $CAO1_porcentaje == $high_110)or($CAO1_porcentaje > 20)) && ($CAO1_porcentaje > 20)) {
            $CAO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CAO1c = '';
        }
        if ((($CAO2_porcentaje == $high_109) or ( $CAO2_porcentaje == $high_110)or($CAO2_porcentaje > 20)) && ($CAO2_porcentaje > 20)) {
            $CAO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CAO2c = '';
        }
        if ((($CAO3_porcentaje == $high_109)or ( $CAO3_porcentaje == $high_110)or($CAO3_porcentaje > 20)) && ($CAO3_porcentaje > 20)) {
            $CAO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CAO3c = '';
        }
        if ((($CAO4_porcentaje == $high_109) or ( $CAO4_porcentaje == $high_110)or($CAO4_porcentaje > 20)) && ($CAO4_porcentaje > 20)) {
            $CAO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CAO4c = '';
        }
        if ((($CAO5_porcentaje == $high_109) or ( $CAO5_porcentaje == $high_110)or($CAO5_porcentaje > 20)) && ($CAO5_porcentaje > 20)) {
            $CAO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CAO5c = '';
        }
        $variable60= array($DAEJ1_porcentaje, $DAEJ2_porcentaje, $DAEJ3_porcentaje, $DAEJ4_porcentaje, $DAEJ5_porcentaje);
        $c = 0;
        $high_111= $high_112= 0;
        do {
            if (isset($variable60[$c])) {
                if ($variable60[$c] > $high_111) {
                    $high_112= $high_111;
                    $high_111= $variable60[$c];
                } else if ($variable60[$c] > $high_112) {
                    $high_112= $variable60[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DAEJ1_porcentaje == $high_111) or ( $DAEJ1_porcentaje == $high_112)or($DAEJ1_porcentaje > 20)) && ($DAEJ1_porcentaje > 20)) {
            $DAEJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DAEJ1c = '';
        }
        if ((($DAEJ2_porcentaje == $high_111) or ( $DAEJ2_porcentaje == $high_112)or($DAEJ2_porcentaje > 20)) && ($DAEJ2_porcentaje > 20)) {
            $DAEJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DAEJ2c = '';
        }
        if ((($DAEJ3_porcentaje == $high_111)or ( $DAEJ3_porcentaje == $high_112)or($DAEJ3_porcentaje > 20)) && ($DAEJ3_porcentaje > 20)) {
            $DAEJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DAEJ3c = '';
        }
        if ((($DAEJ4_porcentaje == $high_111) or ( $DAEJ4_porcentaje == $high_112)or($DAEJ4_porcentaje > 20)) && ($DAEJ4_porcentaje > 20)) {
            $DAEJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DAEJ4c = '';
        }
        if ((($DAEJ5_porcentaje == $high_111) or ( $DAEJ5_porcentaje == $high_112)or($DAEJ5_porcentaje > 20)) && ($DAEJ5_porcentaje > 20)) {
            $DAEJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DAEJ5c = '';
        }
        $variable61= array($DAEP1_porcentaje, $DAEP2_porcentaje, $DAEP3_porcentaje, $DAEP4_porcentaje, $DAEP5_porcentaje);
        $c = 0;
        $high_113= $high_114= 0;
        do {
            if (isset($variable61[$c])) {
                if ($variable61[$c] > $high_113) {
                    $high_114= $high_113;
                    $high_113= $variable61[$c];
                } else if ($variable61[$c] > $high_114) {
                    $high_114= $variable61[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DAEP1_porcentaje == $high_113) or ( $DAEP1_porcentaje == $high_114)or($DAEP1_porcentaje > 20)) && ($DAEP1_porcentaje > 20)) {
            $DAEP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DAEP1c = '';
        }
        if ((($DAEP2_porcentaje == $high_113) or ( $DAEP2_porcentaje == $high_114)or($DAEP2_porcentaje > 20)) && ($DAEP2_porcentaje > 20)) {
            $DAEP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DAEP2c = '';
        }
        if ((($DAEP3_porcentaje == $high_113)or ( $DAEP3_porcentaje == $high_114)or($DAEP3_porcentaje > 20)) && ($DAEP3_porcentaje > 20)) {
            $DAEP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DAEP3c = '';
        }
        if ((($DAEP4_porcentaje == $high_113) or ( $DAEP4_porcentaje == $high_114)or($DAEP4_porcentaje > 20)) && ($DAEP4_porcentaje > 20)) {
            $DAEP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DAEP4c = '';
        }
        if ((($DAEP5_porcentaje == $high_113) or ( $DAEP5_porcentaje == $high_114)or($DAEP5_porcentaje > 20)) && ($DAEP5_porcentaje > 20)) {
            $DAEP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DAEP5c = '';
        }
        $variable62= array($DAEA1_porcentaje, $DAEA2_porcentaje, $DAEA3_porcentaje, $DAEA4_porcentaje, $DAEA5_porcentaje);
        $c = 0;
        $high_115= $high_116= 0;
        do {
            if (isset($variable62[$c])) {
                if ($variable62[$c] > $high_115) {
                    $high_116= $high_115;
                    $high_115= $variable62[$c];
                } else if ($variable62[$c] > $high_116) {
                    $high_116= $variable62[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DAEA1_porcentaje == $high_115) or ( $DAEA1_porcentaje == $high_116)or($DAEA1_porcentaje > 20)) && ($DAEA1_porcentaje > 20)) {
            $DAEA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DAEA1c = '';
        }
        if ((($DAEA2_porcentaje == $high_115) or ( $DAEA2_porcentaje == $high_116)or($DAEA1_porcentaje > 20)) && ($DAEA2_porcentaje > 20)) {
            $DAEA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DAEA2c = '';
        }
        if ((($DAEA3_porcentaje == $high_115)or ( $DAEA3_porcentaje == $high_116)or($DAEA1_porcentaje > 20)) && ($DAEA3_porcentaje > 20)) {
            $DAEA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DAEA3c = '';
        }
        if ((($DAEA4_porcentaje == $high_115) or ( $DAEA4_porcentaje == $high_116)or($DAEA1_porcentaje > 20)) && ($DAEA4_porcentaje > 20)) {
            $DAEA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DAEA4c = '';
        }
        if ((($DAEA5_porcentaje == $high_115) or ( $DAEA5_porcentaje == $high_116)or($DAEA1_porcentaje > 20)
                
                ) && ($DAEA5_porcentaje > 20)) {
            $DAEA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DAEA5c = '';
        }
        $variable63= array($DAEO1_porcentaje, $DAEO2_porcentaje, $DAEO3_porcentaje, $DAEO4_porcentaje, $DAEO5_porcentaje);
        $c = 0;
        $high_117= $high_118= 0;
        do {
            if (isset($variable63[$c])) {
                if ($variable63[$c] > $high_117) {
                    $high_118= $high_117;
                    $high_117= $variable63[$c];
                } else if ($variable63[$c] > $high_118) {
                    $high_118= $variable63[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DAEO1_porcentaje == $high_117) or ( $DAEO1_porcentaje == $high_118)or($DAEO1_porcentaje > 20)) && ($DAEO1_porcentaje > 20)) {
            $DAEO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DAEO1c = '';
        }
        if ((($DAEO2_porcentaje == $high_117) or ( $DAEO2_porcentaje == $high_118)or($DAEO2_porcentaje > 20)) && ($DAEO2_porcentaje > 20)) {
            $DAEO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DAEO2c = '';
        }
        if ((($DAEO3_porcentaje == $high_117)or ( $DAEO3_porcentaje == $high_118)or($DAEO3_porcentaje > 20)) && ($DAEO3_porcentaje > 20)) {
            $DAEO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DAEO3c = '';
        }
        if ((($DAEO4_porcentaje == $high_117) or ( $DAEO4_porcentaje == $high_118)or($DAEO4_porcentaje > 20)) && ($DAEO4_porcentaje > 20)) {
            $DAEO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DAEO4c = '';
        }
        if ((($DAEO5_porcentaje == $high_117) or ( $DAEO5_porcentaje == $high_118)or($DAEO5_porcentaje > 20)) && ($DAEO5_porcentaje > 20)) {
            $DAEO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DAEO5c = '';
        }
        $variable64= array($DEJ1_porcentaje, $DEJ2_porcentaje, $DEJ3_porcentaje, $DEJ4_porcentaje, $DEJ5_porcentaje);
        $c = 0;
        $high_119= $high_120= 0;
        do {
            if (isset($variable64[$c])) {
                if ($variable64[$c] > $high_119) {
                    $high_120= $high_119;
                    $high_119= $variable64[$c];
                } else if ($variable64[$c] > $high_120) {
                    $high_120= $variable64[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DEJ1_porcentaje == $high_119) or ( $DEJ1_porcentaje == $high_120)or($DEJ1_porcentaje > 20)) && ($DEJ1_porcentaje > 20)) {
            $DEJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DEJ1c = '';
        }
        if ((($DEJ2_porcentaje == $high_119) or ( $DEJ2_porcentaje == $high_120)or($DEJ2_porcentaje > 20)) && ($DEJ2_porcentaje > 20)) {
            $DEJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DEJ2c = '';
        }
        if ((($DEJ3_porcentaje == $high_119)or ( $DEJ3_porcentaje == $high_120)or($DEJ3_porcentaje > 20)) && ($DEJ3_porcentaje > 20)) {
            $DEJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DEJ3c = '';
        }
        if ((($DEJ4_porcentaje == $high_119) or ( $DEJ4_porcentaje == $high_120)or($DEJ4_porcentaje > 20)) && ($DEJ4_porcentaje > 20)) {
            $DEJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DEJ4c = '';
        }
        if ((($DEJ5_porcentaje == $high_119) or ( $DEJ5_porcentaje == $high_120)or($DEJ5_porcentaje > 20)) && ($DEJ5_porcentaje > 20)) {
            $DEJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DEJ5c = '';
        }
        $variable65= array($DEP1_porcentaje, $DEP2_porcentaje, $DEP3_porcentaje, $DEP4_porcentaje, $DEP5_porcentaje);
        $c = 0;
        $high_121= $high_122= 0;
        do {
            if (isset($variable65[$c])) {
                if ($variable65[$c] > $high_121) {
                    $high_122= $high_121;
                    $high_121= $variable65[$c];
                } else if ($variable65[$c] > $high_122) {
                    $high_122= $variable65[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DEP1_porcentaje == $high_121) or ( $DEP1_porcentaje == $high_122)or($DEP1_porcentaje > 20)) && ($DEP1_porcentaje > 20)) {
            $DEP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DEP1c = '';
        }
        if ((($DEP2_porcentaje == $high_121) or ( $DEP2_porcentaje == $high_122)or($DEP2_porcentaje > 20)) && ($DEP2_porcentaje > 20)) {
            $DEP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DEP2c = '';
        }
        if ((($DEP3_porcentaje == $high_121)or ( $DEP3_porcentaje == $high_122)or($DEP3_porcentaje > 20)) && ($DEP3_porcentaje > 20)) {
            $DEP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DEP3c = '';
        }
        if ((($DEP4_porcentaje == $high_121) or ( $DEP4_porcentaje == $high_122)or($DEP4_porcentaje > 20)) && ($DEP4_porcentaje > 20)) {
            $DEP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DEP4c = '';
        }
        if ((($DEP5_porcentaje == $high_121) or ( $DEP5_porcentaje == $high_122)or($DEP5_porcentaje > 20)) && ($DEP5_porcentaje > 20)) {
            $DEP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DEP5c = '';
        }
        $variable66= array($DEA1_porcentaje, $DEA2_porcentaje, $DEA3_porcentaje, $DEA4_porcentaje, $DEA5_porcentaje);
        $c = 0;
        $high_123= $high_124= 0;
        do {
            if (isset($variable66[$c])) {
                if ($variable66[$c] > $high_123) {
                    $high_124= $high_123;
                    $high_123= $variable66[$c];
                } else if ($variable66[$c] > $high_124) {
                    $high_124= $variable66[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DEA1_porcentaje == $high_123) or ( $DEA1_porcentaje == $high_124)or($DEA1_porcentaje > 20)) && ($DEA1_porcentaje > 20)) {
            $DEA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DEA1c = '';
        }
        if ((($DEA2_porcentaje == $high_123) or ( $DEA2_porcentaje == $high_124)or($DEA2_porcentaje > 20)) && ($DEA2_porcentaje > 20)) {
            $DEA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DEA2c = '';
        }
        if ((($DEA3_porcentaje == $high_123)or ( $DEA3_porcentaje == $high_124)or($DEA3_porcentaje > 20)) && ($DEA3_porcentaje > 20)) {
            $DEA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DEA3c = '';
        }
        if ((($DEA4_porcentaje == $high_123) or ( $DEA4_porcentaje == $high_124)or($DEA4_porcentaje > 20)) && ($DEA4_porcentaje > 20)) {
            $DEA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DEA4c = '';
        }
        if ((($DEA5_porcentaje == $high_123) or ( $DEA5_porcentaje == $high_124)or($DEA5_porcentaje > 20)) && ($DEA5_porcentaje > 20)) {
            $DEA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DEA5c = '';
        }
        $variable67= array($DEO1_porcentaje, $DEO2_porcentaje, $DEO3_porcentaje, $DEO4_porcentaje, $DEO5_porcentaje);
        $c = 0;
        $high_125= $high_126= 0;
        do {
            if (isset($variable67[$c])) {
                if ($variable67[$c] > $high_125) {
                    $high_126= $high_125;
                    $high_125= $variable67[$c];
                } else if ($variable67[$c] > $high_126) {
                    $high_126= $variable67[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DEO1_porcentaje == $high_125) or ( $DEO1_porcentaje == $high_126)or($DEO1_porcentaje > 20)) && ($DEO1_porcentaje > 20)) {
            $DEO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DEO1c = '';
        }
        if ((($DEO2_porcentaje == $high_125) or ( $DEO2_porcentaje == $high_126)or($DEO2_porcentaje > 20)) && ($DEO2_porcentaje > 20)) {
            $DEO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DEO2c = '';
        }
        if ((($DEO3_porcentaje == $high_125)or ( $DEO3_porcentaje == $high_126)or($DEO3_porcentaje > 20)) && ($DEO3_porcentaje > 20)) {
            $DEO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DEO3c = '';
        }
        if ((($DEO4_porcentaje == $high_125) or ( $DEO4_porcentaje == $high_126)or($DEO4_porcentaje > 20)) && ($DEO4_porcentaje > 20)) {
            $DEO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DEO4c = '';
        }
        if ((($DEO5_porcentaje == $high_125) or ( $DEO5_porcentaje == $high_126)or($DEO5_porcentaje > 20)) && ($DEO5_porcentaje > 20)) {
            $DEO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DEO5c = '';
        }
        $variable68= array($DCJ1_porcentaje, $DCJ2_porcentaje, $DCJ3_porcentaje, $DCJ4_porcentaje, $DCJ5_porcentaje);
        $c = 0;
        $high_127= $high_128= 0;
        do {
            if (isset($variable68[$c])) {
                if ($variable68[$c] > $high_127) {
                    $high_128= $high_127;
                    $high_127= $variable68[$c];
                } else if ($variable68[$c] > $high_128) {
                    $high_128= $variable68[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DCJ1_porcentaje == $high_127) or ( $DCJ1_porcentaje == $high_128)or($DCJ1_porcentaje > 20)) && ($DCJ1_porcentaje > 20)) {
            $DCJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DCJ1c = '';
        }
        if ((($DCJ2_porcentaje == $high_127) or ( $DCJ2_porcentaje == $high_128)or($DCJ2_porcentaje > 20)) && ($DCJ2_porcentaje > 20)) {
            $DCJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DCJ2c = '';
        }
        if ((($DCJ3_porcentaje == $high_127)or ( $DCJ3_porcentaje == $high_128)or($DCJ3_porcentaje > 20)) && ($DCJ3_porcentaje > 20)) {
            $DCJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DCJ3c = '';
        }
        if ((($DCJ4_porcentaje == $high_127) or ( $DCJ4_porcentaje == $high_128)or($DCJ4_porcentaje > 20)) && ($DCJ4_porcentaje > 20)) {
            $DCJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DCJ4c = '';
        }
        if ((($DCJ5_porcentaje == $high_127) or ( $DCJ5_porcentaje == $high_128)or($DCJ5_porcentaje > 20)) && ($DCJ5_porcentaje > 20)) {
            $DCJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DCJ5c = '';
        }
        $variable69= array($DCP1_porcentaje, $DCP2_porcentaje, $DCP3_porcentaje, $DCP4_porcentaje, $DCP5_porcentaje);
        $c = 0;
        $high_129= $high_130= 0;
        do {
            if (isset($variable69[$c])) {
                if ($variable69[$c] > $high_129) {
                    $high_130= $high_129;
                    $high_129= $variable69[$c];
                } else if ($variable69[$c] > $high_130) {
                    $high_130= $variable69[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DCP1_porcentaje == $high_129) or ( $DCP1_porcentaje == $high_130)or($DCP1_porcentaje > 20)) && ($DCP1_porcentaje > 20)) {
            $DCP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DCP1c = '';
        }
        if ((($DCP2_porcentaje == $high_129) or ( $DCP2_porcentaje == $high_130)or($DCP2_porcentaje > 20)) && ($DCP2_porcentaje > 20)) {
            $DCP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DCP2c = '';
        }
        if ((($DCP3_porcentaje == $high_129)or ( $DCP3_porcentaje == $high_130)or($DCP3_porcentaje > 20)) && ($DCP3_porcentaje > 20)) {
            $DCP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DCP3c = '';
        }
        if ((($DCP4_porcentaje == $high_129) or ( $DCP4_porcentaje == $high_130)or($DCP4_porcentaje > 20)) && ($DCP4_porcentaje > 20)) {
            $DCP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DCP4c = '';
        }
        if ((($DCP5_porcentaje == $high_129) or ( $DCP5_porcentaje == $high_130)or($DCP5_porcentaje > 20)) && ($DCP5_porcentaje > 20)) {
            $DCP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DCP5c = '';
        }
        $variable70= array($DCA1_porcentaje, $DCA2_porcentaje, $DCA3_porcentaje, $DCA4_porcentaje, $DCA5_porcentaje);
        $c = 0;
        $high_131= $high_132= 0;
        do {
            if (isset($variable70[$c])) {
                if ($variable70[$c] > $high_131) {
                    $high_132= $high_131;
                    $high_131= $variable70[$c];
                } else if ($variable70[$c] > $high_132) {
                    $high_132= $variable70[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DCA1_porcentaje == $high_131) or ( $DCA1_porcentaje == $high_132)or($DCA1_porcentaje > 20)) && ($DCA1_porcentaje > 20)) {
            $DCA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DCA1c = '';
        }
        if ((($DCA2_porcentaje == $high_131) or ( $DCA2_porcentaje == $high_132)or($DCA2_porcentaje > 20)) && ($DCA2_porcentaje > 20)) {
            $DCA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DCA2c = '';
        }
        if ((($DCA3_porcentaje == $high_131)or ( $DCA3_porcentaje == $high_132)or($DCA3_porcentaje > 20)) && ($DCA3_porcentaje > 20)) {
            $DCA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DCA3c = '';
        }
        if ((($DCA4_porcentaje == $high_131) or ( $DCA4_porcentaje == $high_132)or($DCA4_porcentaje > 20)) && ($DCA4_porcentaje > 20)) {
            $DCA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DCA4c = '';
        }
        if ((($DCA5_porcentaje == $high_131) or ( $DCA5_porcentaje == $high_132)or($DCA5_porcentaje > 20)) && ($DCA5_porcentaje > 20)) {
            $DCA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DCA5c = '';
        }
        $variable71= array($DCO1_porcentaje, $DCO2_porcentaje, $DCO3_porcentaje, $DCO4_porcentaje, $DCO5_porcentaje);
        $c = 0;
        $high_133= $high_134= 0;
        do {
            if (isset($variable71[$c])) {
                if ($variable71[$c] > $high_133) {
                    $high_134= $high_133;
                    $high_133= $variable71[$c];
                } else if ($variable71[$c] > $high_134) {
                    $high_134= $variable71[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DCO1_porcentaje == $high_133) or ( $DCO1_porcentaje == $high_134)or($DCO1_porcentaje > 20)) && ($DCO1_porcentaje > 20)) {
            $DCO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DCO1c = '';
        }
        if ((($DCO2_porcentaje == $high_133) or ( $DCO2_porcentaje == $high_134)or($DCO2_porcentaje > 20)) && ($DCO2_porcentaje > 20)) {
            $DCO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DCO2c = '';
        }
        if ((($DCO3_porcentaje == $high_133)or ( $DCO3_porcentaje == $high_134)or($DCO3_porcentaje > 20)) && ($DCO3_porcentaje > 20)) {
            $DCO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DCO3c = '';
        }
        if ((($DCO4_porcentaje == $high_133) or ( $DCO4_porcentaje == $high_134)or($DCO4_porcentaje > 20)) && ($DCO4_porcentaje > 20)) {
            $DCO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DCO4c = '';
        }
        if ((($DCO5_porcentaje == $high_133) or ( $DCO5_porcentaje == $high_134)or($DCO5_porcentaje > 20)) && ($DCO5_porcentaje > 20)) {
            $DCO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DCO5c = '';
        }
        $variable72= array($ITJ1_porcentaje, $ITJ2_porcentaje, $ITJ3_porcentaje, $ITJ4_porcentaje, $ITJ5_porcentaje);
        $c = 0;
        $high_135= $high_136= 0;
        do {
            if (isset($variable72[$c])) {
                if ($variable72[$c] > $high_135) {
                    $high_136= $high_135;
                    $high_135= $variable72[$c];
                } else if ($variable72[$c] > $high_136) {
                    $high_136= $variable72[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ITJ1_porcentaje == $high_135) or ( $ITJ1_porcentaje == $high_136)or($ITJ1_porcentaje > 20)) && ($ITJ1_porcentaje > 20)) {
            $ITJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ITJ1c = '';
        }
        if ((($ITJ2_porcentaje == $high_135) or ( $ITJ2_porcentaje == $high_136)or($ITJ2_porcentaje > 20)) && ($ITJ2_porcentaje > 20)) {
            $ITJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ITJ2c = '';
        }
        if ((($ITJ3_porcentaje == $high_135)or ( $ITJ3_porcentaje == $high_136)or($ITJ3_porcentaje > 20)) && ($ITJ3_porcentaje > 20)) {
            $ITJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ITJ3c = '';
        }
        if ((($ITJ4_porcentaje == $high_135) or ( $ITJ4_porcentaje == $high_136)or($ITJ4_porcentaje > 20)) && ($ITJ4_porcentaje > 20)) {
            $ITJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ITJ4c = '';
        }
        if ((($ITJ5_porcentaje == $high_135) or ( $ITJ5_porcentaje == $high_136)or($ITJ5_porcentaje > 20)) && ($ITJ5_porcentaje > 20)) {
            $ITJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ITJ5c = '';
        }
        $variable73= array($ITP1_porcentaje, $ITP2_porcentaje, $ITP3_porcentaje, $ITP4_porcentaje, $ITP5_porcentaje);
        $c = 0;
        $high_137= $high_138= 0;
        do {
            if (isset($variable73[$c])) {
                if ($variable73[$c] > $high_137) {
                    $high_138= $high_137;
                    $high_137= $variable73[$c];
                } else if ($variable73[$c] > $high_138) {
                    $high_138= $variable73[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ITP1_porcentaje == $high_137) or ( $ITP1_porcentaje == $high_138)or($ITP1_porcentaje > 20)) && ($ITP1_porcentaje > 20)) {
            $ITP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ITP1c = '';
        }
        if ((($ITP2_porcentaje == $high_137) or ( $ITP2_porcentaje == $high_138)or($ITP2_porcentaje > 20)) && ($ITP2_porcentaje > 20)) {
            $ITP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ITP2c = '';
        }
        if ((($ITP3_porcentaje == $high_137)or ( $ITP3_porcentaje == $high_138)or($ITP3_porcentaje > 20)) && ($ITP3_porcentaje > 20)) {
            $ITP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ITP3c = '';
        }
        if ((($ITP4_porcentaje == $high_137) or ( $ITP4_porcentaje == $high_138)or($ITP4_porcentaje > 20)) && ($ITP4_porcentaje > 20)) {
            $ITP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ITP4c = '';
        }
        if ((($ITP5_porcentaje == $high_137) or ( $ITP5_porcentaje == $high_138)or($ITP5_porcentaje > 20)) && ($ITP5_porcentaje > 20)) {
            $ITP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ITP5c = '';
        }
        $variable74= array($ITA1_porcentaje, $ITA2_porcentaje, $ITA3_porcentaje, $ITA4_porcentaje, $ITA5_porcentaje);
        $c = 0;
        $high_139= $high_140= 0;
        do {
            if (isset($variable74[$c])) {
                if ($variable74[$c] > $high_139) {
                    $high_140= $high_139;
                    $high_139= $variable74[$c];
                } else if ($variable74[$c] > $high_140) {
                    $high_140= $variable74[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ITA1_porcentaje == $high_139) or ( $ITA1_porcentaje == $high_140)or($ITA1_porcentaje > 20)) && ($ITA1_porcentaje > 20)) {
            $ITA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ITA1c = '';
        }
        if ((($ITA2_porcentaje == $high_139) or ( $ITA2_porcentaje == $high_140)or($ITA2_porcentaje > 20)) && ($ITA2_porcentaje > 20)) {
            $ITA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ITA2c = '';
        }
        if ((($ITA3_porcentaje == $high_139)or ( $ITA3_porcentaje == $high_140)or($ITA3_porcentaje > 20)) && ($ITA3_porcentaje > 20)) {
            $ITA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ITA3c = '';
        }
        if ((($ITA4_porcentaje == $high_139) or ( $ITA4_porcentaje == $high_140)or($ITA4_porcentaje > 20)) && ($ITA4_porcentaje > 20)) {
            $ITA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ITA4c = '';
        }
        if ((($ITA5_porcentaje == $high_139) or ( $ITA5_porcentaje == $high_140)or($ITA5_porcentaje > 20)) && ($ITA5_porcentaje > 20)) {
            $ITA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ITA5c = '';
        }
        $variable75= array($ITO1_porcentaje, $ITO2_porcentaje, $ITO3_porcentaje, $ITO4_porcentaje, $ITO5_porcentaje);
        $c = 0;
        $high_141= $high_142= 0;
        do {
            if (isset($variable75[$c])) {
                if ($variable75[$c] > $high_141) {
                    $high_142= $high_141;
                    $high_141= $variable75[$c];
                } else if ($variable75[$c] > $high_142) {
                    $high_142= $variable75[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ITO1_porcentaje == $high_141) or ( $ITO1_porcentaje == $high_142)or($ITO1_porcentaje > 20)) && ($ITO1_porcentaje > 20)) {
            $ITO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ITO1c = '';
        }
        if ((($ITO2_porcentaje == $high_141) or ( $ITO2_porcentaje == $high_142)or($ITO2_porcentaje > 20)) && ($ITO2_porcentaje > 20)) {
            $ITO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ITO2c = '';
        }
        if ((($ITO3_porcentaje == $high_141)or ( $ITO3_porcentaje == $high_142)or($ITO3_porcentaje > 20)) && ($ITO3_porcentaje > 20)) {
            $ITO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ITO3c = '';
        }
        if ((($ITO4_porcentaje == $high_141) or ( $ITO4_porcentaje == $high_142)or($ITO4_porcentaje > 20)) && ($ITO4_porcentaje > 20)) {
            $ITO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ITO4c = '';
        }
        if ((($ITO5_porcentaje == $high_141) or ( $ITO5_porcentaje == $high_142)or($ITO5_porcentaje > 20)) && ($ITO5_porcentaje > 20)) {
            $ITO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ITO5c = '';
        }
        $variable76= array($ERJ1_porcentaje, $ERJ2_porcentaje, $ERJ3_porcentaje, $ERJ4_porcentaje, $ERJ5_porcentaje);
        $c = 0;
        $high_143= $high_144= 0;
        do {
            if (isset($variable76[$c])) {
                if ($variable76[$c] > $high_143) {
                    $high_144= $high_143;
                    $high_143= $variable76[$c];
                } else if ($variable76[$c] > $high_144) {
                    $high_144= $variable76[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ERJ1_porcentaje == $high_143) or ( $ERJ1_porcentaje == $high_144)or($ITO1_porcentaje > 20)) && ($ERJ1_porcentaje > 20)) {
            $ERJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ERJ1c = '';
        }
        if ((($ERJ2_porcentaje == $high_143) or ( $ERJ2_porcentaje == $high_144)or($ITO2_porcentaje > 20)) && ($ERJ2_porcentaje > 20)) {
            $ERJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ERJ2c = '';
        }
        if ((($ERJ3_porcentaje == $high_143)or ( $ERJ3_porcentaje == $high_144)or($ITO3_porcentaje > 20)) && ($ERJ3_porcentaje > 20)) {
            $ERJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ERJ3c = '';
        }
        if ((($ERJ4_porcentaje == $high_143) or ( $ERJ4_porcentaje == $high_144)or($ITO4_porcentaje > 20)) && ($ERJ4_porcentaje > 20)) {
            $ERJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ERJ4c = '';
        }
        if ((($ERJ5_porcentaje == $high_143) or ( $ERJ5_porcentaje == $high_144)or($ITO5_porcentaje > 20)) && ($ERJ5_porcentaje > 20)) {
            $ERJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ERJ5c = '';
        }
        $variable77= array($ERP1_porcentaje, $ERP2_porcentaje, $ERP3_porcentaje, $ERP4_porcentaje, $ERP5_porcentaje);
        $c = 0;
        $high_145= $high_146= 0;
        do {
            if (isset($variable77[$c])) {
                if ($variable77[$c] > $high_145) {
                    $high_146= $high_145;
                    $high_145= $variable77[$c];
                } else if ($variable77[$c] > $high_146) {
                    $high_146= $variable77[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ERP1_porcentaje == $high_145) or ( $ERP1_porcentaje == $high_146)or($ERP1_porcentaje > 20)) && ($ERP1_porcentaje > 20)) {
            $ERP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ERP1c = '';
        }
        if ((($ERP2_porcentaje == $high_145) or ( $ERP2_porcentaje == $high_146)or($ERP2_porcentaje > 20)) && ($ERP2_porcentaje > 20)) {
            $ERP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ERP2c = '';
        }
        if ((($ERP3_porcentaje == $high_145)or ( $ERP3_porcentaje == $high_146)or($ERP3_porcentaje > 20)) && ($ERP3_porcentaje > 20)) {
            $ERP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ERP3c = '';
        }
        if ((($ERP4_porcentaje == $high_145) or ( $ERP4_porcentaje == $high_146)or($ERP4_porcentaje > 20)) && ($ERP4_porcentaje > 20)) {
            $ERP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ERP4c = '';
        }
        if ((($ERP5_porcentaje == $high_145) or ( $ERP5_porcentaje == $high_146)or($ERP5_porcentaje > 20)) && ($ERP5_porcentaje > 20)) {
            $ERP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ERP5c = '';
        }
        $variable78= array($ERJ1_porcentaje, $ERJ2_porcentaje, $ERJ3_porcentaje, $ERJ4_porcentaje, $ERJ5_porcentaje);
        $c = 0;
        $high_147= $high_148= 0;
        do {
            if (isset($variable78[$c])) {
                if ($variable78[$c] > $high_147) {
                    $high_148= $high_147;
                    $high_147= $variable78[$c];
                } else if ($variable78[$c] > $high_148) {
                    $high_148= $variable78[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ERJ1_porcentaje == $high_147) or ( $ERJ1_porcentaje == $high_148)or($ERJ1_porcentaje > 20)) && ($ERJ1_porcentaje > 20)) {
            $ERJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ERJ1c = '';
        }
        if ((($ERJ2_porcentaje == $high_147) or ( $ERJ2_porcentaje == $high_148)or($ERJ2_porcentaje > 20)) && ($ERJ2_porcentaje > 20)) {
            $ERJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ERJ2c = '';
        }
        if ((($ERJ3_porcentaje == $high_147)or ( $ERJ3_porcentaje == $high_148)or($ERJ3_porcentaje > 20)) && ($ERJ3_porcentaje > 20)) {
            $ERJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ERJ3c = '';
        }
        if ((($ERJ4_porcentaje == $high_147) or ( $ERJ4_porcentaje == $high_148)or($ERJ4_porcentaje > 20)) && ($ERJ4_porcentaje > 20)) {
            $ERJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ERJ4c = '';
        }
        if ((($ERJ5_porcentaje == $high_147) or ( $ERJ5_porcentaje == $high_148)or($ERJ5_porcentaje > 20)) && ($ERJ5_porcentaje > 20)) {
            $ERJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ERJ5c = '';
        }
        $variable79= array($ERP1_porcentaje, $ERP2_porcentaje, $ERP3_porcentaje, $ERP4_porcentaje, $ERP5_porcentaje);
        $c = 0;
        $high_149= $high_150= 0;
        do {
            if (isset($variable79[$c])) {
                if ($variable79[$c] > $high_149) {
                    $high_150= $high_149;
                    $high_149= $variable79[$c];
                } else if ($variable79[$c] > $high_150) {
                    $high_150= $variable79[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ERP1_porcentaje == $high_149) or ( $ERP1_porcentaje == $high_150)or($ERP1_porcentaje > 20)) && ($ERP1_porcentaje > 20)) {
            $ERP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ERP1c = '';
        }
        if ((($ERP2_porcentaje == $high_149) or ( $ERP2_porcentaje == $high_150)or($ERP2_porcentaje > 20)) && ($ERP2_porcentaje > 20)) {
            $ERP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ERP2c = '';
        }
        if ((($ERP3_porcentaje == $high_149)or ( $ERP3_porcentaje == $high_150)or($ERP3_porcentaje > 20)) && ($ERP3_porcentaje > 20)) {
            $ERP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ERP3c = '';
        }
        if ((($ERP4_porcentaje == $high_149) or ( $ERP4_porcentaje == $high_150)or($ERP4_porcentaje > 20)) && ($ERP4_porcentaje > 20)) {
            $ERP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ERP4c = '';
        }
        if ((($ERP5_porcentaje == $high_149) or ( $ERP5_porcentaje == $high_150)or($ERP5_porcentaje > 20)) && ($ERP5_porcentaje > 20)) {
            $ERP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ERP5c = '';
        }
        $variable80= array($DCMJ1_porcentaje, $DCMJ2_porcentaje, $DCMJ3_porcentaje, $DCMJ4_porcentaje, $DCMJ5_porcentaje);
        $c = 0;
        $high_151= $high_152= 0;
        do {
            if (isset($variable80[$c])) {
                if ($variable80[$c] > $high_151) {
                    $high_152= $high_151;
                    $high_151= $variable80[$c];
                } else if ($variable80[$c] > $high_152) {
                    $high_152= $variable80[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DCMJ1_porcentaje == $high_151) or ( $DCMJ1_porcentaje == $high_152)or($DCMJ1_porcentaje > 20)) && ($DCMJ1_porcentaje > 20)) {
            $DCMJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DCMJ1c = '';
        }
        if ((($DCMJ2_porcentaje == $high_151) or ( $DCMJ2_porcentaje == $high_152)or($DCMJ2_porcentaje > 20)) && ($DCMJ2_porcentaje > 20)) {
            $DCMJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DCMJ2c = '';
        }
        if ((($DCMJ3_porcentaje == $high_151)or ( $DCMJ3_porcentaje == $high_152)or($DCMJ3_porcentaje > 20)) && ($DCMJ3_porcentaje > 20)) {
            $DCMJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DCMJ3c = '';
        }
        if ((($DCMJ4_porcentaje == $high_151) or ( $DCMJ4_porcentaje == $high_152)or($DCMJ4_porcentaje > 20)) && ($DCMJ4_porcentaje > 20)) {
            $DCMJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DCMJ4c = '';
        }
        if ((($DCMJ5_porcentaje == $high_151) or ( $DCMJ5_porcentaje == $high_152)or($DCMJ5_porcentaje > 20)) && ($DCMJ5_porcentaje > 20)) {
            $DCMJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DCMJ5c = '';
        }
        $variable81= array($DCMP1_porcentaje, $DCMP2_porcentaje, $DCMP3_porcentaje, $DCMP4_porcentaje, $DCMP5_porcentaje);
        $c = 0;
        $high_153= $high_154= 0;
        do {
            if (isset($variable81[$c])) {
                if ($variable81[$c] > $high_153) {
                    $high_154= $high_153;
                    $high_153= $variable81[$c];
                } else if ($variable81[$c] > $high_154) {
                    $high_154= $variable81[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DCMP1_porcentaje == $high_153) or ( $DCMP1_porcentaje == $high_154)or($DCMP1_porcentaje > 20)) && ($DCMP1_porcentaje > 20)) {
            $DCMP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DCMP1c = '';
        }
        if ((($DCMP2_porcentaje == $high_153) or ( $DCMP2_porcentaje == $high_154)or($DCMP2_porcentaje > 20)) && ($DCMP2_porcentaje > 20)) {
            $DCMP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DCMP2c = '';
        }
        if ((($DCMP3_porcentaje == $high_153)or ( $DCMP3_porcentaje == $high_154)or($DCMP3_porcentaje > 20)) && ($DCMP3_porcentaje > 20)) {
            $DCMP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DCMP3c = '';
        }
        if ((($DCMP4_porcentaje == $high_153) or ( $DCMP4_porcentaje == $high_154)or($DCMP4_porcentaje > 20)) && ($DCMP4_porcentaje > 20)) {
            $DCMP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DCMP4c = '';
        }
        if ((($DCMP5_porcentaje == $high_153) or ( $DCMP5_porcentaje == $high_154)or($DCMP5_porcentaje > 20)) && ($DCMP5_porcentaje > 20)) {
            $DCMP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DCMP5c = '';
        }
        $variable82= array($DCMA1_porcentaje, $DCMA2_porcentaje, $DCMA3_porcentaje, $DCMA4_porcentaje, $DCMA5_porcentaje);
        $c = 0;
        $high_155= $high_156= 0;
        do {
            if (isset($variable82[$c])) {
                if ($variable82[$c] > $high_155) {
                    $high_156= $high_155;
                    $high_155= $variable82[$c];
                } else if ($variable82[$c] > $high_156) {
                    $high_156= $variable82[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DCMA1_porcentaje == $high_155) or ( $DCMA1_porcentaje == $high_156)or($DCMA1_porcentaje > 20)) && ($DCMA1_porcentaje > 20)) {
            $DCMA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DCMA1c = '';
        }
        if ((($DCMA2_porcentaje == $high_155) or ( $DCMA2_porcentaje == $high_156)or($DCMA2_porcentaje > 20)) && ($DCMA2_porcentaje > 20)) {
            $DCMA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DCMA2c = '';
        }
        if ((($DCMA3_porcentaje == $high_155)or ( $DCMA3_porcentaje == $high_156)or($DCMA3_porcentaje > 20)) && ($DCMA3_porcentaje > 20)) {
            $DCMA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DCMA3c = '';
        }
        if ((($DCMA4_porcentaje == $high_155) or ( $DCMA4_porcentaje == $high_156)or($DCMA4_porcentaje > 20)) && ($DCMA4_porcentaje > 20)) {
            $DCMA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DCMA4c = '';
        }
        if ((($DCMA5_porcentaje == $high_155) or ( $DCMA5_porcentaje == $high_156)or($DCMA5_porcentaje > 20)) && ($DCMA5_porcentaje > 20)) {
            $DCMA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DCMA5c = '';
        }
        $variable83= array($DCMO1_porcentaje, $DCMO2_porcentaje, $DCMO3_porcentaje, $DCMO4_porcentaje, $DCMO5_porcentaje);
        $c = 0;
        $high_157= $high_158= 0;
        do {
            if (isset($variable83[$c])) {
                if ($variable83[$c] > $high_157) {
                    $high_158= $high_157;
                    $high_157= $variable83[$c];
                } else if ($variable83[$c] > $high_158) {
                    $high_158= $variable83[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DCMO1_porcentaje == $high_157) or ( $DCMO1_porcentaje == $high_158)or($DCMO1_porcentaje > 20)) && ($DCMO1_porcentaje > 20)) {
            $DCMO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DCMO1c = '';
        }
        if ((($DCMO2_porcentaje == $high_157) or ( $DCMO2_porcentaje == $high_158)or($DCMO2_porcentaje > 20)) && ($DCMO2_porcentaje > 20)) {
            $DCMO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DCMO2c = '';
        }
        if ((($DCMO3_porcentaje == $high_157)or ( $DCMO3_porcentaje == $high_158)or($DCMO3_porcentaje > 20)) && ($DCMO3_porcentaje > 20)) {
            $DCMO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DCMO3c = '';
        }
        if ((($DCMO4_porcentaje == $high_157) or ( $DCMO4_porcentaje == $high_158)or($DCMO4_porcentaje > 20)) && ($DCMO4_porcentaje > 20)) {
            $DCMO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DCMO4c = '';
        }
        if ((($DCMO5_porcentaje == $high_157) or ( $DCMO5_porcentaje == $high_158)or($DCMO5_porcentaje > 20)) && ($DCMO5_porcentaje > 20)) {
            $DCMO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DCMO5c = '';
        }
        $variable84= array($CRLJ1_porcentaje, $CRLJ2_porcentaje, $CRLJ3_porcentaje, $CRLJ4_porcentaje, $CRLJ5_porcentaje);
        $c = 0;
        $high_159= $high_160= 0;
        do {
            if (isset($variable84[$c])) {
                if ($variable84[$c] > $high_159) {
                    $high_160= $high_159;
                    $high_159= $variable84[$c];
                } else if ($variable84[$c] > $high_160) {
                    $high_160= $variable84[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CRLJ1_porcentaje == $high_159) or ( $CRLJ1_porcentaje == $high_160)or($CRLJ1_porcentaje > 20)) && ($CRLJ1_porcentaje > 20)) {
            $CRLJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CRLJ1c = '';
        }
        if ((($CRLJ2_porcentaje == $high_159) or ( $CRLJ2_porcentaje == $high_160)or($CRLJ2_porcentaje > 20)) && ($CRLJ2_porcentaje > 20)) {
            $CRLJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CRLJ2c = '';
        }
        if ((($CRLJ3_porcentaje == $high_159)or ( $CRLJ3_porcentaje == $high_160)or($CRLJ3_porcentaje > 20)) && ($CRLJ3_porcentaje > 20)) {
            $CRLJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CRLJ3c = '';
        }
        if ((($CRLJ4_porcentaje == $high_159) or ( $CRLJ4_porcentaje == $high_160)or($CRLJ4_porcentaje > 20)) && ($CRLJ4_porcentaje > 20)) {
            $CRLJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CRLJ4c = '';
        }
        if ((($CRLJ5_porcentaje == $high_159) or ( $CRLJ5_porcentaje == $high_160)or($CRLJ5_porcentaje > 20)) && ($CRLJ5_porcentaje > 20)) {
            $CRLJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CRLJ5c = '';
        }
        $variable85= array($CRLP1_porcentaje, $CRLP2_porcentaje, $CRLP3_porcentaje, $CRLP4_porcentaje, $CRLP5_porcentaje);
        $c = 0;
        $high_161= $high_162= 0;
        do {
            if (isset($variable85[$c])) {
                if ($variable85[$c] > $high_161) {
                    $high_162= $high_161;
                    $high_161= $variable85[$c];
                } else if ($variable85[$c] > $high_162) {
                    $high_162= $variable85[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CRLP1_porcentaje == $high_161) or ( $CRLP1_porcentaje == $high_162)or($CRLP1_porcentaje > 20)) && ($CRLP1_porcentaje > 20)) {
            $CRLP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CRLP1c = '';
        }
        if ((($CRLP2_porcentaje == $high_161) or ( $CRLP2_porcentaje == $high_162)or($CRLP2_porcentaje > 20)) && ($CRLP2_porcentaje > 20)) {
            $CRLP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CRLP2c = '';
        }
        if ((($CRLP3_porcentaje == $high_161)or ( $CRLP3_porcentaje == $high_162)or($CRLP3_porcentaje > 20)) && ($CRLP3_porcentaje > 20)) {
            $CRLP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CRLP3c = '';
        }
        if ((($CRLP4_porcentaje == $high_161) or ( $CRLP4_porcentaje == $high_162)or($CRLP4_porcentaje > 20)) && ($CRLP4_porcentaje > 20)) {
            $CRLP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CRLP4c = '';
        }
        if ((($CRLP5_porcentaje == $high_161) or ( $CRLP5_porcentaje == $high_162)or($CRLP5_porcentaje > 20)) && ($CRLP5_porcentaje > 20)) {
            $CRLP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CRLP5c = '';
        }
        $variable86= array($DJTJ1_porcentaje, $DJTJ2_porcentaje, $DJTJ3_porcentaje, $DJTJ4_porcentaje, $DJTJ5_porcentaje);
        $c = 0;
        $high_163= $high_164= 0;
        do {
            if (isset($variable86[$c])) {
                if ($variable86[$c] > $high_163) {
                    $high_164= $high_163;
                    $high_163= $variable86[$c];
                } else if ($variable86[$c] > $high_164) {
                    $high_164= $variable86[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DJTJ1_porcentaje == $high_163) or ( $DJTJ1_porcentaje == $high_164)or($DJTJ1_porcentaje > 20)) && ($DJTJ1_porcentaje > 20)) {
            $DJTJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DJTJ1c = '';
        }
        if ((($DJTJ2_porcentaje == $high_163) or ( $DJTJ2_porcentaje == $high_164)or($DJTJ2_porcentaje > 20)) && ($DJTJ2_porcentaje > 20)) {
            $DJTJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DJTJ2c = '';
        }
        if ((($DJTJ3_porcentaje == $high_163)or ( $DJTJ3_porcentaje == $high_164)or($DJTJ3_porcentaje > 20)) && ($DJTJ3_porcentaje > 20)) {
            $DJTJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DJTJ3c = '';
        }
        if ((($DJTJ4_porcentaje == $high_163) or ( $DJTJ4_porcentaje == $high_164)or($DJTJ4_porcentaje > 20)) && ($DJTJ4_porcentaje > 20)) {
            $DJTJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DJTJ4c = '';
        }
        if ((($DJTJ5_porcentaje == $high_163) or ( $DJTJ5_porcentaje == $high_164)or($DJTJ5_porcentaje > 20)) && ($DJTJ5_porcentaje > 20)) {
            $DJTJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DJTJ5c = '';
        }
        $variable87= array($DJTP1_porcentaje, $DJTP2_porcentaje, $DJTP3_porcentaje, $DJTP4_porcentaje, $DJTP5_porcentaje);
        $c = 0;
        $high_165= $high_166= 0;
        do {
            if (isset($variable87[$c])) {
                if ($variable87[$c] > $high_165) {
                    $high_166= $high_165;
                    $high_165= $variable87[$c];
                } else if ($variable87[$c] > $high_166) {
                    $high_166= $variable87[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DJTP1_porcentaje == $high_165) or ( $DJTP1_porcentaje == $high_166)or($DJTP1_porcentaje > 20)) && ($DJTP1_porcentaje > 20)) {
            $DJTP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DJTP1c = '';
        }
        if ((($DJTP2_porcentaje == $high_165) or ( $DJTP2_porcentaje == $high_166)or($DJTP2_porcentaje > 20)) && ($DJTP2_porcentaje > 20)) {
            $DJTP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DJTP2c = '';
        }
        if ((($DJTP3_porcentaje == $high_165)or ( $DJTP3_porcentaje == $high_166)or($DJTP3_porcentaje > 20)) && ($DJTP3_porcentaje > 20)) {
            $DJTP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DJTP3c = '';
        }
        if ((($DJTP4_porcentaje == $high_165) or ( $DJTP4_porcentaje == $high_166)or($DJTP4_porcentaje > 20)) && ($DJTP4_porcentaje > 20)) {
            $DJTP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DJTP4c = '';
        }
        if ((($DJTP5_porcentaje == $high_165) or ( $DJTP5_porcentaje == $high_166)or($DJTP5_porcentaje > 20)) && ($DJTP5_porcentaje > 20)) {
            $DJTP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DJTP5c = '';
        }
        $variable88= array($DJTA1_porcentaje, $DJTA2_porcentaje, $DJTA3_porcentaje, $DJTA4_porcentaje, $DJTA5_porcentaje);
        $c = 0;
        $high_167= $high_168= 0;
        do {
            if (isset($variable88[$c])) {
                if ($variable88[$c] > $high_167) {
                    $high_168= $high_167;
                    $high_167= $variable88[$c];
                } else if ($variable88[$c] > $high_168) {
                    $high_168= $variable88[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DJTA1_porcentaje == $high_167) or ( $DJTA1_porcentaje == $high_168)or($DJTA1_porcentaje > 20)) && ($DJTA1_porcentaje > 20)) {
            $DJTA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DJTA1c = '';
        }
        if ((($DJTA2_porcentaje == $high_167) or ( $DJTA2_porcentaje == $high_168)or($DJTA2_porcentaje > 20)) && ($DJTA2_porcentaje > 20)) {
            $DJTA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DJTA2c = '';
        }
        if ((($DJTA3_porcentaje == $high_167)or ( $DJTA3_porcentaje == $high_168)or($DJTA3_porcentaje > 20)) && ($DJTA3_porcentaje > 20)) {
            $DJTA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DJTA3c = '';
        }
        if ((($DJTA4_porcentaje == $high_167) or ( $DJTA4_porcentaje == $high_168)or($DJTA4_porcentaje > 20)) && ($DJTA4_porcentaje > 20)) {
            $DJTA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DJTA4c = '';
        }
        if ((($DJTA5_porcentaje == $high_167) or ( $DJTA5_porcentaje == $high_168)or($DJTA5_porcentaje > 20)) && ($DJTA5_porcentaje > 20)) {
            $DJTA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DJTA5c = '';
        }
        $variable89= array($DJTO1_porcentaje, $DJTO2_porcentaje, $DJTO3_porcentaje, $DJTO4_porcentaje, $DJTO5_porcentaje);
        $c = 0;
        $high_169= $high_170= 0;
        do {
            if (isset($variable89[$c])) {
                if ($variable89[$c] > $high_169) {
                    $high_170= $high_169;
                    $high_169= $variable89[$c];
                } else if ($variable89[$c] > $high_170) {
                    $high_170= $variable89[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DJTO1_porcentaje == $high_169) or ( $DJTO1_porcentaje == $high_170)or($DJTO1_porcentaje > 20)) && ($DJTO1_porcentaje > 20)) {
            $DJTO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DJTO1c = '';
        }
        if ((($DJTO2_porcentaje == $high_169) or ( $DJTO2_porcentaje == $high_170)or($DJTO2_porcentaje > 20)) && ($DJTO2_porcentaje > 20)) {
            $DJTO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DJTO2c = '';
        }
        if ((($DJTO3_porcentaje == $high_169)or ( $DJTO3_porcentaje == $high_170)or($DJTO3_porcentaje > 20)) && ($DJTO3_porcentaje > 20)) {
            $DJTO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DJTO3c = '';
        }
        if ((($DJTO4_porcentaje == $high_169) or ( $DJTO4_porcentaje == $high_170)or($DJTO4_porcentaje > 20)) && ($DJTO4_porcentaje > 20)) {
            $DJTO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DJTO4c = '';
        }
        if ((($DJTO5_porcentaje == $high_169) or ( $DJTO5_porcentaje == $high_170)or($DJTO5_porcentaje > 20)) && ($DJTO5_porcentaje > 20)) {
            $DJTO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DJTO5c = '';
        }
        $variable90= array($RPJ1_porcentaje, $RPJ2_porcentaje, $RPJ3_porcentaje, $RPJ4_porcentaje, $RPJ5_porcentaje);
        $c = 0;
        $high_171= $high_172= 0;
        do {
            if (isset($variable90[$c])) {
                if ($variable90[$c] > $high_171) {
                    $high_172= $high_171;
                    $high_171= $variable90[$c];
                } else if ($variable90[$c] > $high_172) {
                    $high_172= $variable90[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RPJ1_porcentaje == $high_171) or ( $RPJ1_porcentaje == $high_172)or($RPJ1_porcentaje > 20)) && ($RPJ1_porcentaje > 20)) {
            $RPJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RPJ1c = '';
        }
        if ((($RPJ2_porcentaje == $high_171) or ( $RPJ2_porcentaje == $high_172)or($RPJ2_porcentaje > 20)) && ($RPJ2_porcentaje > 20)) {
            $RPJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RPJ2c = '';
        }
        if ((($RPJ3_porcentaje == $high_171)or ( $RPJ3_porcentaje == $high_172)or($RPJ3_porcentaje > 20)) && ($RPJ3_porcentaje > 20)) {
            $RPJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RPJ3c = '';
        }
        if ((($RPJ4_porcentaje == $high_171) or ( $RPJ4_porcentaje == $high_172)or($RPJ4_porcentaje > 20)) && ($RPJ4_porcentaje > 20)) {
            $RPJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RPJ4c = '';
        }
        if ((($RPJ5_porcentaje == $high_171) or ( $RPJ5_porcentaje == $high_172)or($RPJ5_porcentaje > 20)) && ($RPJ5_porcentaje > 20)) {
            $RPJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RPJ5c = '';
        }
        $variable91= array($RPP1_porcentaje, $RPP2_porcentaje, $RPP3_porcentaje, $RPP4_porcentaje, $RPP5_porcentaje);
        $c = 0;
        $high_173= $high_174= 0;
        do {
            if (isset($variable91[$c])) {
                if ($variable91[$c] > $high_173) {
                    $high_174= $high_173;
                    $high_173= $variable91[$c];
                } else if ($variable91[$c] > $high_174) {
                    $high_174= $variable91[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RPP1_porcentaje == $high_173) or ( $RPP1_porcentaje == $high_174)or($RPP1_porcentaje > 20)) && ($RPP1_porcentaje > 20)) {
            $RPP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RPP1c = '';
        }
        if ((($RPP2_porcentaje == $high_173) or ( $RPP2_porcentaje == $high_174)or($RPP2_porcentaje > 20)) && ($RPP2_porcentaje > 20)) {
            $RPP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RPP2c = '';
        }
        if ((($RPP3_porcentaje == $high_173)or ( $RPP3_porcentaje == $high_174)or($RPP3_porcentaje > 20)) && ($RPP3_porcentaje > 20)) {
            $RPP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RPP3c = '';
        }
        if ((($RPP4_porcentaje == $high_173) or ( $RPP4_porcentaje == $high_174)or($RPP4_porcentaje > 20)) && ($RPP4_porcentaje > 20)) {
            $RPP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RPP4c = '';
        }
        if ((($RPP5_porcentaje == $high_173) or ( $RPP5_porcentaje == $high_174)or($RPP5_porcentaje > 20)) && ($RPP5_porcentaje > 20)) {
            $RPP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RPP5c = '';
        }
        $variable92= array($RPA1_porcentaje, $RPA2_porcentaje, $RPA3_porcentaje, $RPA4_porcentaje, $RPA5_porcentaje);
        $c = 0;
        $high_175= $high_176= 0;
        do {
            if (isset($variable92[$c])) {
                if ($variable92[$c] > $high_175) {
                    $high_176= $high_175;
                    $high_175= $variable92[$c];
                } else if ($variable92[$c] > $high_176) {
                    $high_176= $variable92[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RPA1_porcentaje == $high_175) or ( $RPA1_porcentaje == $high_176)or($RPA1_porcentaje > 20)) && ($RPA1_porcentaje > 20)) {
            $RPA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RPA1c = '';
        }
        if ((($RPA2_porcentaje == $high_175) or ( $RPA2_porcentaje == $high_176)or($RPA2_porcentaje > 20)) && ($RPA2_porcentaje > 20)) {
            $RPA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RPA2c = '';
        }
        if ((($RPA3_porcentaje == $high_175)or ( $RPA3_porcentaje == $high_176)or($RPA3_porcentaje > 20)) && ($RPA3_porcentaje > 20)) {
            $RPA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RPA3c = '';
        }
        if ((($RPA4_porcentaje == $high_175) or ( $RPA4_porcentaje == $high_176)or($RPA4_porcentaje > 20)) && ($RPA4_porcentaje > 20)) {
            $RPA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RPA4c = '';
        }
        if ((($RPA5_porcentaje == $high_175) or ( $RPA5_porcentaje == $high_176)or($RPA5_porcentaje > 20)) && ($RPA5_porcentaje > 20)) {
            $RPA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RPA5c = '';
        }
        $variable93= array($RPO1_porcentaje, $RPO2_porcentaje, $RPO3_porcentaje, $RPO4_porcentaje, $RPO5_porcentaje);
        $c = 0;
        $high_177= $high_178= 0;
        do {
            if (isset($variable93[$c])) {
                if ($variable93[$c] > $high_177) {
                    $high_178= $high_177;
                    $high_177= $variable93[$c];
                } else if ($variable93[$c] > $high_178) {
                    $high_178= $variable93[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RPO1_porcentaje == $high_177) or ( $RPO1_porcentaje == $high_178)or($RPO1_porcentaje > 20)) && ($RPO1_porcentaje > 20)) {
            $RPO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RPO1c = '';
        }
        if ((($RPO2_porcentaje == $high_177) or ( $RPO2_porcentaje == $high_178)or($RPO2_porcentaje > 20)) && ($RPO2_porcentaje > 20)) {
            $RPO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RPO2c = '';
        }
        if ((($RPO3_porcentaje == $high_177)or ( $RPO3_porcentaje == $high_178)or($RPO3_porcentaje > 20)) && ($RPO3_porcentaje > 20)) {
            $RPO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RPO3c = '';
        }
        if ((($RPO4_porcentaje == $high_177) or ( $RPO4_porcentaje == $high_178)or($RPO4_porcentaje > 20)) && ($RPO4_porcentaje > 20)) {
            $RPO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RPO4c = '';
        }
        if ((($RPO5_porcentaje == $high_177) or ( $RPO5_porcentaje == $high_178)or($RPO5_porcentaje > 20)) && ($RPO5_porcentaje > 20)) {
            $RPO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RPO5c = '';
        }
        $variable96= array($RYCJ1_porcentaje, $RYCJ2_porcentaje, $RYCJ3_porcentaje, $RYCJ4_porcentaje, $RYCJ5_porcentaje);
        $c = 0;
        $high_179= $high_180= 0;
        do {
            if (isset($variable96[$c])) {
                if ($variable96[$c] > $high_179) {
                    $high_180= $high_179;
                    $high_179= $variable96[$c];
                } else if ($variable96[$c] > $high_180) {
                    $high_180= $variable96[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RYCJ1_porcentaje == $high_179) or ( $RYCJ1_porcentaje == $high_180)or($RYCJ1_porcentaje > 20)) && ($RYCJ1_porcentaje > 20)) {
            $RYCJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RYCJ1c = '';
        }
        if ((($RYCJ2_porcentaje == $high_179) or ( $RYCJ2_porcentaje == $high_180)or($RYCJ2_porcentaje > 20)) && ($RYCJ2_porcentaje > 20)) {
            $RYCJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RYCJ2c = '';
        }
        if ((($RYCJ3_porcentaje == $high_179)or ( $RYCJ3_porcentaje == $high_180)or($RYCJ3_porcentaje > 20)) && ($RYCJ3_porcentaje > 20)) {
            $RYCJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RYCJ3c = '';
        }
        if ((($RYCJ4_porcentaje == $high_179) or ( $RYCJ4_porcentaje == $high_180)or($RYCJ4_porcentaje > 20)) && ($RYCJ4_porcentaje > 20)) {
            $RYCJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RYCJ4c = '';
        }
        if ((($RYCJ5_porcentaje == $high_179) or ( $RYCJ5_porcentaje == $high_180)or($RYCJ5_porcentaje > 20)) && ($RYCJ5_porcentaje > 20)) {
            $RYCJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RYCJ5c = '';
        }
        $variable97= array($RYCP1_porcentaje, $RYCP2_porcentaje, $RYCP3_porcentaje, $RYCP4_porcentaje, $RYCP5_porcentaje);
        $c = 0;
        $high_181= $high_182= 0;
        do {
            if (isset($variable97[$c])) {
                if ($variable97[$c] > $high_181) {
                    $high_182= $high_181;
                    $high_181= $variable97[$c];
                } else if ($variable97[$c] > $high_182) {
                    $high_182= $variable97[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RYCP1_porcentaje == $high_181) or ( $RYCP1_porcentaje == $high_182)or($RYCP1_porcentaje > 20)) && ($RYCP1_porcentaje > 20)) {
            $RYCP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RYCP1c = '';
        }
        if ((($RYCP2_porcentaje == $high_181) or ( $RYCP2_porcentaje == $high_182)or($RYCP2_porcentaje > 20)) && ($RYCP2_porcentaje > 20)) {
            $RYCP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RYCP2c = '';
        }
        if ((($RYCP3_porcentaje == $high_181)or ( $RYCP3_porcentaje == $high_182)or($RYCP3_porcentaje > 20)) && ($RYCP3_porcentaje > 20)) {
            $RYCP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RYCP3c = '';
        }
        if ((($RYCP4_porcentaje == $high_181) or ( $RYCP4_porcentaje == $high_182)or($RYCP4_porcentaje > 20)) && ($RYCP4_porcentaje > 20)) {
            $RYCP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RYCP4c = '';
        }
        if ((($RYCP5_porcentaje == $high_181) or ( $RYCP5_porcentaje == $high_182)or($RYCP5_porcentaje > 20)) && ($RYCP5_porcentaje > 20)) {
            $RYCP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RYCP5c = '';
        }
        $variable98= array($RYCA1_porcentaje, $RYCA2_porcentaje, $RYCA3_porcentaje, $RYCA4_porcentaje, $RYCA5_porcentaje);
        $c = 0;
        $high_183= $high_184= 0;
        do {
            if (isset($variable98[$c])) {
                if ($variable98[$c] > $high_183) {
                    $high_184= $high_183;
                    $high_183= $variable98[$c];
                } else if ($variable98[$c] > $high_184) {
                    $high_184= $variable98[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RYCA1_porcentaje == $high_183) or ( $RYCA1_porcentaje == $high_184)or($RYCA1_porcentaje > 20)) && ($RYCA1_porcentaje > 20)) {
            $RYCA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RYCA1c = '';
        }
        if ((($RYCA2_porcentaje == $high_183) or ( $RYCA2_porcentaje == $high_184)or($RYCA2_porcentaje > 20)) && ($RYCA2_porcentaje > 20)) {
            $RYCA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RYCA2c = '';
        }
        if ((($RYCA3_porcentaje == $high_183)or ( $RYCA3_porcentaje == $high_184)or($RYCA3_porcentaje > 20)) && ($RYCA3_porcentaje > 20)) {
            $RYCA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RYCA3c = '';
        }
        if ((($RYCA4_porcentaje == $high_183) or ( $RYCA4_porcentaje == $high_184)or($RYCA4_porcentaje > 20)) && ($RYCA4_porcentaje > 20)) {
            $RYCA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RYCA4c = '';
        }
        if ((($RYCA5_porcentaje == $high_183) or ( $RYCA5_porcentaje == $high_184)or($RYCA5_porcentaje > 20)) && ($RYCA5_porcentaje > 20)) {
            $RYCA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RYCA5c = '';
        }
        $variable99= array($RYCO1_porcentaje, $RYCO2_porcentaje, $RYCO3_porcentaje, $RYCO4_porcentaje, $RYCO5_porcentaje);
        $c = 0;
        $high_185= $high_186= 0;
        do {
            if (isset($variable99[$c])) {
                if ($variable99[$c] > $high_185) {
                    $high_186= $high_185;
                    $high_185= $variable99[$c];
                } else if ($variable99[$c] > $high_186) {
                    $high_186= $variable99[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RYCO1_porcentaje == $high_185) or ( $RYCO1_porcentaje == $high_186)or($RYCO1_porcentaje > 20)) && ($RYCO1_porcentaje > 20)) {
            $RYCO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RYCO1c = '';
        }
        if ((($RYCO2_porcentaje == $high_185) or ( $RYCO2_porcentaje == $high_186)or($RYCO2_porcentaje > 20)) && ($RYCO2_porcentaje > 20)) {
            $RYCO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RYCO2c = '';
        }
        if ((($RYCO3_porcentaje == $high_185)or ( $RYCO3_porcentaje == $high_186)or($RYCO3_porcentaje > 20)) && ($RYCO3_porcentaje > 20)) {
            $RYCO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RYCO3c = '';
        }
        if ((($RYCO4_porcentaje == $high_185) or ( $RYCO4_porcentaje == $high_186)or($RYCO4_porcentaje > 20)) && ($RYCO4_porcentaje > 20)) {
            $RYCO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RYCO4c = '';
        }
        if ((($RYCO5_porcentaje == $high_185) or ( $RYCO5_porcentaje == $high_186)or($RYCO5_porcentaje > 20)) && ($RYCO5_porcentaje > 20)) {
            $RYCO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RYCO5c = '';
        }
        $variable100= array($GTJP1_porcentaje, $GTJP2_porcentaje, $GTJP3_porcentaje, $GTJP4_porcentaje, $GTJP5_porcentaje);
        $c = 0;
        $high_187= $high_188= 0;
        do {
            if (isset($variable100[$c])) {
                if ($variable100[$c] > $high_187) {
                    $high_188= $high_187;
                    $high_187= $variable100[$c];
                } else if ($variable100[$c] > $high_188) {
                    $high_188= $variable100[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($GTJP1_porcentaje == $high_187) or ( $GTJP1_porcentaje == $high_188)or($GTJP1_porcentaje > 20)) && ($GTJP1_porcentaje > 20)) {
            $GTJP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $GTJP1c = '';
        }
        if ((($GTJP2_porcentaje == $high_187) or ( $GTJP2_porcentaje == $high_188)or($GTJP2_porcentaje > 20)) && ($GTJP2_porcentaje > 20)) {
            $GTJP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $GTJP2c = '';
        }
        if ((($GTJP3_porcentaje == $high_187)or ( $GTJP3_porcentaje == $high_188)or($GTJP3_porcentaje > 20)) && ($GTJP3_porcentaje > 20)) {
            $GTJP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $GTJP3c = '';
        }
        if ((($GTJP4_porcentaje == $high_187) or ( $GTJP4_porcentaje == $high_188)or($GTJP4_porcentaje > 20)) && ($GTJP4_porcentaje > 20)) {
            $GTJP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $GTJP4c = '';
        }
        if ((($GTJP5_porcentaje == $high_187) or ( $GTJP5_porcentaje == $high_188)or($GTJP5_porcentaje > 20)) && ($GTJP5_porcentaje > 20)) {
            $GTJP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $GTJP5c = '';
        }
        $variable101= array($GTAO1_porcentaje, $GTAO2_porcentaje, $GTAO3_porcentaje, $GTAO4_porcentaje, $GTAO5_porcentaje);
        $c = 0;
        $high_189= $high_190= 0;
        do {
            if (isset($variable101[$c])) {
                if ($variable101[$c] > $high_189) {
                    $high_190= $high_189;
                    $high_189= $variable101[$c];
                } else if ($variable101[$c] > $high_190) {
                    $high_190= $variable101[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($GTAO1_porcentaje == $high_189) or ( $GTAO1_porcentaje == $high_190)or($GTAO1_porcentaje > 20)) && ($GTAO1_porcentaje > 20)) {
            $GTAO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $GTAO1c = '';
        }
        if ((($GTAO2_porcentaje == $high_189) or ( $GTAO2_porcentaje == $high_190)or($GTAO2_porcentaje > 20)) && ($GTAO2_porcentaje > 20)) {
            $GTAO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $GTAO2c = '';
        }
        if ((($GTAO3_porcentaje == $high_189)or ( $GTAO3_porcentaje == $high_190)or($GTAO3_porcentaje > 20)) && ($GTAO3_porcentaje > 20)) {
            $GTAO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $GTAO3c = '';
        }
        if ((($GTAO4_porcentaje == $high_189) or ( $GTAO4_porcentaje == $high_190)or($GTAO4_porcentaje > 20)) && ($GTAO4_porcentaje > 20)) {
            $GTAO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $GTAO4c = '';
        }
        if ((($GTAO5_porcentaje == $high_189) or ( $GTAO5_porcentaje == $high_190)or($GTAO5_porcentaje > 20)) && ($GTAO5_porcentaje > 20)) {
            $GTAO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $GTAO5c = '';
        }
        
        
        
        
//TOTAL POR NIVEL
$TA_0 = Consolidados::TA(conexion::obtener_conexion());
$TA = round($TA_0, 1, PHP_ROUND_HALF_UP);

if ($TA >= 35.5) {
    $TAR = 'Muy Alto';
    $TAC = '#F80203';
} elseif ($TA >= 29.6) {
    $TAR = 'Alto';
    $TAC = '#F79729';
} elseif ($TA >= 24.5) {
    $TAR = 'Medio';
    $TAC = '#FFFE01';
} elseif ($TA >= 18.9) {
    $TAR = 'Bajo';
    $TAC = '#97CD53';
} elseif ($TA >= 0) {
    $TAR = 'Sin Riesgo';
    $TAC = '#00AFF0';
}

// ============================================================
//  TOTAL POR NIVEL
// ============================================================
$TB_0 = Consolidados::TB(conexion::obtener_conexion());
$TB = round($TB_0, 1, PHP_ROUND_HALF_UP);
if ($TB >= 35.5) {
    $TBR = 'Muy Alto';
    $TBC = '#F80203';
} elseif ($TB >= 29.6) {
    $TBR = 'Alto';
    $TBC = '#F79729';
} elseif ($TB >= 24.9) {
    $TBR = 'Medio';
    $TBC = '#FFFE01';
} elseif ($TB >= 20) {
    $TBR = 'Bajo';
    $TBC = '#97CD53';
} elseif ($TB >= 0) {
    $TBR = 'Sin Riesgo';
    $TBC = '#00AFF0';
}

//Liderazgo y relaciones sociales en el trabajo
$LR_media_0 = Consolidados::LR_media(conexion::obtener_conexion());
$LR_media = round($LR_media_0, 1, PHP_ROUND_HALF_UP);
if ($LR_media > 34.9) { $LRR_media = 'Muy Alto'; $LRC_media = '#F80203'; }
elseif ($LR_media > 25.7) { $LRR_media = 'Alto'; $LRC_media = '#F79729'; }
elseif ($LR_media > 17.8) { $LRR_media = 'Medio'; $LRC_media = '#FFFE01'; }
elseif ($LR_media > 9.2)  { $LRR_media = 'Bajo'; $LRC_media = '#97CD53'; }
elseif ($LR_media >= 0)   { $LRR_media = 'Sin Riesgo'; $LRC_media = '#00AFF0'; }

$CL_media_0 = Consolidados::CL_media(conexion::obtener_conexion());
$CL_media = round($CL_media_0, 1, PHP_ROUND_HALF_UP);
if ($CL_media > 46.3) { $CLR_media = 'Muy Alto'; $CLC_media = '#F80203'; }
elseif ($CL_media > 30.9) { $CLR_media = 'Alto'; $CLC_media = '#F79729'; }
elseif ($CL_media > 15.5) { $CLR_media = 'Medio'; $CLC_media = '#FFFE01'; }
elseif ($CL_media > 3.9)  { $CLR_media = 'Bajo'; $CLC_media = '#97CD53'; }
elseif ($CL_media >= 0)   { $CLR_media = 'Sin Riesgo'; $CLC_media = '#00AFF0'; }

$RS_media_0 = Consolidados::RS_media(conexion::obtener_conexion());
$RS_media = round($RS_media_0, 1, PHP_ROUND_HALF_UP);
if ($RS_media > 37.6) { $RSR_media = 'Muy Alto'; $RSC_media = '#F80203'; }
elseif ($RS_media > 25.1) { $RSR_media = 'Alto'; $RSC_media = '#F79729'; }
elseif ($RS_media > 16.2) { $RSR_media = 'Medio'; $RSC_media = '#FFFE01'; }
elseif ($RS_media > 5.5)  { $RSR_media = 'Bajo'; $RSC_media = '#97CD53'; }
elseif ($RS_media >= 0)   { $RSR_media = 'Sin Riesgo'; $RSC_media = '#00AFF0'; }

$RD_media_0 = Consolidados::RD_media(conexion::obtener_conexion());
$RD_media = round($RD_media_0, 1, PHP_ROUND_HALF_UP);
if ($RD_media > 55.1) { $RDR_media = 'Muy Alto'; $RDC_media = '#F80203'; }
elseif ($RD_media > 40.1) { $RDR_media = 'Alto'; $RDC_media = '#F79729'; }
elseif ($RD_media > 25.1) { $RDR_media = 'Medio'; $RDC_media = '#FFFE01'; }
elseif ($RD_media > 10.1) { $RDR_media = 'Bajo'; $RDC_media = '#97CD53'; }
elseif ($RD_media >= 0)   { $RDR_media = 'Sin Riesgo'; $RDC_media = '#00AFF0'; }

$RC_media_0 = Consolidados::RC_media(conexion::obtener_conexion());
$RC_media = round($RC_media_0, 1, PHP_ROUND_HALF_UP);
if ($RC_media > 47.3) { $RCR_media = 'Muy Alto'; $RCC_media = '#F80203'; }
elseif ($RC_media > 33.4) { $RCR_media = 'Alto'; $RCC_media = '#F79729'; }
elseif ($RC_media > 25.1) { $RCR_media = 'Medio'; $RCC_media = '#FFFE01'; }
elseif ($RC_media > 14)   { $RCR_media = 'Bajo'; $RCC_media = '#97CD53'; }
elseif ($RC_media >= 0)   { $RCR_media = 'Sin Riesgo'; $RCC_media = '#00AFF0'; }

//Control sobre el trabajo
$C_media_0 = Consolidados::C_media(conexion::obtener_conexion());
$C_media = round($C_media_0, 1, PHP_ROUND_HALF_UP);
if ($C_media > 50.1) { $CR_media = 'Muy Alto'; $CC_media = '#F80203'; }
elseif ($C_media > 33.4) { $CR_media = 'Alto'; $CC_media = '#F79729'; }
elseif ($C_media > 16.8) { $CR_media = 'Medio'; $CC_media = '#FFFE01'; }
elseif ($C_media > 1)    { $CR_media = 'Bajo'; $CC_media = '#97CD53'; }
elseif ($C_media >= 0)   { $CR_media = 'Sin Riesgo'; $CC_media = '#00AFF0'; }

$CDR_media_0 = Consolidados::CR_media(conexion::obtener_conexion());
$CDR_media = round($CDR_media_0, 1, PHP_ROUND_HALF_UP);
if ($CDR_media > 39.4) { $CDRR_media = 'Muy Alto'; $CDRC_media = '#F80203'; }
elseif ($CDR_media > 21.5) { $CDRR_media = 'Alto'; $CDRC_media = '#F79729'; }
elseif ($CDR_media > 10.8) { $CDRR_media = 'Medio'; $CDRC_media = '#FFFE01'; }
elseif ($CDR_media > 1)    { $CDRR_media = 'Bajo'; $CDRC_media = '#97CD53'; }
elseif ($CDR_media >= 0)   { $CDRR_media = 'Sin Riesgo'; $CDRC_media = '#00AFF0'; }

$C_media_0 = Consolidados::C_media(conexion::obtener_conexion());
$C_media = round($C_media_0, 1, PHP_ROUND_HALF_UP);
if ($C_media > 50.1) { $CR_media = 'Muy Alto'; $CC_media = '#F80203'; }
elseif ($C_media > 33.4) { $CR_media = 'Alto'; $CC_media = '#F79729'; }
elseif ($C_media > 16.8) { $CR_media = 'Medio'; $CC_media = '#FFFE01'; }
elseif ($C_media > 1)    { $CR_media = 'Bajo'; $CC_media = '#97CD53'; }
elseif ($C_media >= 0)   { $CR_media = 'Sin Riesgo'; $CC_media = '#00AFF0'; }

$PM_media_0 = Consolidados::PM_media(conexion::obtener_conexion());
$PM_media = round($PM_media_0, 1, PHP_ROUND_HALF_UP);
if ($PM_media > 50.1) { $PMR_media = 'Muy Alto'; $PMC_media = '#F80203'; }
elseif ($PM_media > 37.6) { $PMR_media = 'Alto'; $PMC_media = '#F79729'; }
elseif ($PM_media > 25.1) { $PMR_media = 'Medio'; $PMC_media = '#FFFE01'; }
elseif ($PM_media > 12.6) { $PMR_media = 'Bajo'; $PMC_media = '#97CD53'; }
elseif ($PM_media >= 0)   { $PMR_media = 'Sin Riesgo'; $PMC_media = '#00AFF0'; }

$PD_media_0 = Consolidados::PD_media(conexion::obtener_conexion());
$PD_media = round($PD_media_0, 1, PHP_ROUND_HALF_UP);
if ($PD_media > 31.4) { $PDR_media = 'Muy Alto'; $PDC_media = '#F80203'; }
elseif ($PD_media > 18.9) { $PDR_media = 'Alto'; $PDC_media = '#F79729'; }
elseif ($PD_media > 6.4)  { $PDR_media = 'Medio'; $PDC_media = '#FFFE01'; }
elseif ($PD_media > 1)    { $PDR_media = 'Bajo'; $PDC_media = '#97CD53'; }
elseif ($PD_media >= 0)   { $PDR_media = 'Sin Riesgo'; $PDC_media = '#00AFF0'; }

$CA_media_0 = Consolidados::CA_media(conexion::obtener_conexion());
$CA_media = round($CA_media_0, 1, PHP_ROUND_HALF_UP);
if ($CA_media > 58.4) { $CAR_media = 'Muy Alto'; $CAC_media = '#F80203'; }
elseif ($CA_media > 41.8) { $CAR_media = 'Alto'; $CAC_media = '#F79729'; }
elseif ($CA_media > 25.1) { $CAR_media = 'Medio'; $CAC_media = '#FFFE01'; }
elseif ($CA_media > 8.4)  { $CAR_media = 'Bajo'; $CAC_media = '#97CD53'; }
elseif ($CA_media >= 0)   { $CAR_media = 'Sin Riesgo'; $CAC_media = '#00AFF0'; }

//Demandas del trabajo
$DT_media_0 = Consolidados::DT_media(conexion::obtener_conexion());
$DT_media = round($DT_media_0, 1, PHP_ROUND_HALF_UP);
if ($DT_media > 47.6) { $DTR_media = 'Muy Alto'; $DTC_media = '#F80203'; }
elseif ($DT_media > 41.6) { $DTR_media = 'Alto'; $DTC_media = '#F79729'; }
elseif ($DT_media > 35.1) { $DTR_media = 'Medio'; $DTC_media = '#FFFE01'; }
elseif ($DT_media > 28.6) { $DTR_media = 'Bajo'; $DTC_media = '#97CD53'; }
elseif ($DT_media >= 0)   { $DTR_media = 'Sin Riesgo'; $DTC_media = '#00AFF0'; }

$DAE_media_0 = Consolidados::DAE_media(conexion::obtener_conexion());
$DAE_media = round($DAE_media_0, 1, PHP_ROUND_HALF_UP);
if ($DAE_media > 39.7) { $DAER_media = 'Muy Alto'; $DAEC_media = '#F80203'; }
elseif ($DAE_media > 31.4) { $DAER_media = 'Alto'; $DAEC_media = '#F79729'; }
elseif ($DAE_media > 23)   { $DAER_media = 'Medio'; $DAEC_media = '#FFFE01'; }
elseif ($DAE_media > 14.7) { $DAER_media = 'Bajo'; $DAEC_media = '#97CD53'; }
elseif ($DAE_media >= 0)   { $DAER_media = 'Sin Riesgo'; $DAEC_media = '#00AFF0'; }

$DE_media_0 = Consolidados::DE_media(conexion::obtener_conexion());
$DE_media = round($DE_media_0, 1, PHP_ROUND_HALF_UP);
if ($DE_media > 47.3) { $DER_media = 'Muy Alto'; $DEC_media = '#F80203'; }
elseif ($DE_media > 33.4) { $DER_media = 'Alto'; $DEC_media = '#F79729'; }
elseif ($DE_media > 25.1) { $DER_media = 'Medio'; $DEC_media = '#FFFE01'; }
elseif ($DE_media > 14)   { $DER_media = 'Bajo'; $DEC_media = '#97CD53'; }
elseif ($DE_media >= 0)   { $DER_media = 'Sin Riesgo'; $DEC_media = '#00AFF0'; }

$DE_media_0 = Consolidados::DE_media(conexion::obtener_conexion());
$DE_media = round($DE_media_0, 1, PHP_ROUND_HALF_UP);
if ($DE_media > 47.3) { $DER_media = 'Muy Alto'; $DEC_media = '#F80203'; }
elseif ($DE_media > 33.4) { $DER_media = 'Alto'; $DEC_media = '#F79729'; }
elseif ($DE_media > 25.1) { $DER_media = 'Medio'; $DEC_media = '#FFFE01'; }
elseif ($DE_media > 14)   { $DER_media = 'Bajo'; $DEC_media = '#97CD53'; }
elseif ($DE_media >= 0)   { $DER_media = 'Sin Riesgo'; $DEC_media = '#00AFF0'; }

$DC_media_0 = Consolidados::DC_media(conexion::obtener_conexion());
$DC_media = round($DC_media_0, 1, PHP_ROUND_HALF_UP);
if ($DC_media > 54.3) { $DCR_media = 'Muy Alto'; $DCC_media = '#F80203'; }
elseif ($DC_media > 45.9) { $DCR_media = 'Alto'; $DCC_media = '#F79729'; }
elseif ($DC_media > 33.4) { $DCR_media = 'Medio'; $DCC_media = '#FFFE01'; }
elseif ($DC_media > 25.1) { $DCR_media = 'Bajo'; $DCC_media = '#97CD53'; }
elseif ($DC_media >= 0)   { $DCR_media = 'Sin Riesgo'; $DCC_media = '#00AFF0'; }

$IT_media_0 = Consolidados::IT_media(conexion::obtener_conexion());
$IT_media = round($IT_media_0, 1, PHP_ROUND_HALF_UP);
if ($IT_media > 50.1) { $ITR_media = 'Muy Alto'; $ITC_media = '#F80203'; }
elseif ($IT_media > 43.9) { $ITR_media = 'Alto'; $ITC_media = '#F79729'; }
elseif ($IT_media > 31.4) { $ITR_media = 'Medio'; $ITC_media = '#FFFE01'; }
elseif ($IT_media > 18.9) { $ITR_media = 'Bajo'; $ITC_media = '#97CD53'; }
elseif ($IT_media >= 0)   { $ITR_media = 'Sin Riesgo'; $ITC_media = '#00AFF0'; }

$ER_media_0 = Consolidados::ER_media(conexion::obtener_conexion());
$ER_media = round($ER_media_0, 1, PHP_ROUND_HALF_UP);
if ($ER_media > 79.3) { $ERR_media = 'Muy Alto'; $ERC_media = '#F80203'; }
elseif ($ER_media > 66.8) { $ERR_media = 'Alto'; $ERC_media = '#F79729'; }
elseif ($ER_media > 54.3) { $ERR_media = 'Medio'; $ERC_media = '#FFFE01'; }
elseif ($ER_media > 37.6) { $ERR_media = 'Bajo'; $ERC_media = '#97CD53'; }
elseif ($ER_media >= 0)   { $ERR_media = 'Sin Riesgo'; $ERC_media = '#00AFF0'; }

$DCM_media_0 = Consolidados::DCM_media(conexion::obtener_conexion());
$DCM_media = round($DCM_media_0, 1, PHP_ROUND_HALF_UP);
if ($DCM_media > 90.1) { $DCMR_media = 'Muy Alto'; $DCMC_media = '#F80203'; }
elseif ($DCM_media > 80.1) { $DCMR_media = 'Alto'; $DCMC_media = '#F79729'; }
elseif ($DCM_media > 70.1) { $DCMR_media = 'Medio'; $DCMC_media = '#FFFE01'; }
elseif ($DCM_media > 60.1) { $DCMR_media = 'Bajo'; $DCMC_media = '#97CD53'; }
elseif ($DCM_media >= 0)   { $DCMR_media = 'Sin Riesgo'; $DCMC_media = '#00AFF0'; }

$CRL_media_0 = Consolidados::CRL_media(conexion::obtener_conexion());
$CRL_media = round($CRL_media_0, 1, PHP_ROUND_HALF_UP);
if ($CRL_media > 45.1) { $CRLR_media = 'Muy Alto'; $CRLC_media = '#F80203'; }
elseif ($CRL_media > 35.1) { $CRLR_media = 'Alto'; $CRLC_media = '#F79729'; }
elseif ($CRL_media > 25.1) { $CRLR_media = 'Medio'; $CRLC_media = '#FFFE01'; }
elseif ($CRL_media > 15.1) { $CRLR_media = 'Bajo'; $CRLC_media = '#97CD53'; }
elseif ($CRL_media >= 0)   { $CRLR_media = 'Sin Riesgo'; $CRLC_media = '#00AFF0'; }

$DJT_media_0 = Consolidados::DJT_media(conexion::obtener_conexion());
$DJT_media = round($DJT_media_0, 1, PHP_ROUND_HALF_UP);
if ($DJT_media > 50.1) { $DJTR_media = 'Muy Alto'; $DJTC_media = '#F80203'; }
elseif ($DJT_media > 33.4) { $DJTR_media = 'Alto'; $DJTC_media = '#F79729'; }
elseif ($DJT_media > 25.1) { $DJTR_media = 'Medio'; $DJTC_media = '#FFFE01'; }
elseif ($DJT_media > 8.4)  { $DJTR_media = 'Bajo'; $DJTC_media = '#97CD53'; }
elseif ($DJT_media >= 0)   { $DJTR_media = 'Sin Riesgo'; $DJTC_media = '#00AFF0'; }

//Recompensas
$RE_media_0 = Consolidados::RE_media(conexion::obtener_conexion());
$RE_media = round($RE_media_0, 1, PHP_ROUND_HALF_UP);
if ($RE_media > 29.6) { $RER_media = 'Muy Alto'; $REC_media = '#F80203'; }
elseif ($RE_media > 20.6) { $RER_media = 'Alto'; $REC_media = '#F79729'; }
elseif ($RE_media > 11.5) { $RER_media = 'Medio'; $REC_media = '#FFFE01'; }
elseif ($RE_media > 4.6)  { $RER_media = 'Bajo'; $REC_media = '#97CD53'; }
elseif ($RE_media >= 0)   { $RER_media = 'Sin Riesgo'; $REC_media = '#00AFF0'; }

$RP_media_0 = Consolidados::RP_media(conexion::obtener_conexion());
$RP_media = round($RP_media_0, 1, PHP_ROUND_HALF_UP);
if ($RP_media > 20.1) { $RPR_media = 'Muy Alto'; $RPC_media = '#F80203'; }
elseif ($RP_media > 10.1) { $RPR_media = 'Alto'; $RPC_media = '#F79729'; }
elseif ($RP_media > 5.1)  { $RPR_media = 'Medio'; $RPC_media = '#FFFE01'; }
elseif ($RP_media > 1)    { $RPR_media = 'Bajo'; $RPC_media = '#97CD53'; }
elseif ($RP_media >= 0)   { $RPR_media = 'Sin Riesgo'; $RPC_media = '#00AFF0'; }

$RYC_media_0 = Consolidados::RYC_media(conexion::obtener_conexion());
$RYC_media = round($RYC_media_0, 1, PHP_ROUND_HALF_UP);
if ($RYC_media > 37.6) { $RYCR_media = 'Muy Alto'; $RYCC_media = '#F80203'; }
elseif ($RYC_media > 25.1) { $RYCR_media = 'Alto'; $RYCC_media = '#F79729'; }
elseif ($RYC_media > 16.8) { $RYCR_media = 'Medio'; $RYCC_media = '#FFFE01'; }
elseif ($RYC_media > 4.3)  { $RYCR_media = 'Bajo'; $RYCC_media = '#97CD53'; }
elseif ($RYC_media >= 0)   { $RYCR_media = 'Sin Riesgo'; $RYCC_media = '#00AFF0'; }

//FORMATO B
$DTb_media_0 = Consolidados::DTb_media(conexion::obtener_conexion());
$DTb_media = round($DTb_media_0, 1, PHP_ROUND_HALF_UP);
if ($DTb_media > 44.3) { $DTbR_media = 'Muy Alto'; $DTbC_media = '#F80203'; }
elseif ($DTb_media > 37.9) { $DTbR_media = 'Alto'; $DTbC_media = '#F79729'; }
elseif ($DTb_media > 33.4) { $DTbR_media = 'Medio'; $DTbC_media = '#FFFE01'; }
elseif ($DTb_media > 27)   { $DTbR_media = 'Bajo'; $DTbC_media = '#97CD53'; }
elseif ($DTb_media >= 0)   { $DTbR_media = 'Sin Riesgo'; $DTbC_media = '#00AFF0'; }

$DCb_media_0 = Consolidados::DCb_media(conexion::obtener_conexion());
$DCb_media = round($DCb_media_0, 1, PHP_ROUND_HALF_UP);
if ($DCb_media > 50.1) { $DCbR_media = 'Muy Alto'; $DCbC_media = '#F80203'; }
elseif ($DCb_media > 41.8) { $DCbR_media = 'Alto'; $DCbC_media = '#F79729'; }
elseif ($DCb_media > 33.4) { $DCbR_media = 'Medio'; $DCbC_media = '#FFFE01'; }
elseif ($DCb_media > 16.8) { $DCbR_media = 'Bajo'; $DCbC_media = '#97CD53'; }
elseif ($DCb_media >= 0)   { $DCbR_media = 'Sin Riesgo'; $DCbC_media = '#00AFF0'; }

$DCMb_media_0 = Consolidados::DCMb_media(conexion::obtener_conexion());
$DCMb_media = round($DCMb_media_0, 1, PHP_ROUND_HALF_UP);
if ($DCMb_media > 85.1) { $DCMbR_media = 'Muy Alto'; $DCMbC_media = '#F80203'; }
elseif ($DCMb_media > 75.1) { $DCMbR_media = 'Alto'; $DCMbC_media = '#F79729'; }
elseif ($DCMb_media > 65.1) { $DCMbR_media = 'Medio'; $DCMbC_media = '#FFFE01'; }
elseif ($DCMb_media > 50.1) { $DCMbR_media = 'Bajo'; $DCMbC_media = '#97CD53'; }
elseif ($DCMb_media >= 0)   { $DCMbR_media = 'Sin Riesgo'; $DCMbC_media = '#00AFF0'; }

$DEb_media_0 = Consolidados::DEb_media(conexion::obtener_conexion());
$DEb_media = round($DEb_media_0, 1, PHP_ROUND_HALF_UP);
if ($DEb_media > 47.3) { $DEbR_media = 'Muy Alto'; $DEbC_media = '#F80203'; }
elseif ($DEb_media > 39)   { $DEbR_media = 'Alto'; $DEbC_media = '#F79729'; }
elseif ($DEb_media > 27.9) { $DEbR_media = 'Medio'; $DEbC_media = '#FFFE01'; }
elseif ($DEb_media > 19.5) { $DEbR_media = 'Bajo'; $DEbC_media = '#97CD53'; }
elseif ($DEb_media >= 0)   { $DEbR_media = 'Sin Riesgo'; $DEbC_media = '#00AFF0'; }

$DAEb_media_0 = Consolidados::DAEb_media(conexion::obtener_conexion());
$DAEb_media = round($DAEb_media_0, 1, PHP_ROUND_HALF_UP);
if ($DAEb_media > 48)   { $DAEbR_media = 'Muy Alto'; $DAEbC_media = '#F80203'; }
elseif ($DAEb_media > 39.7) { $DAEbR_media = 'Alto'; $DAEbC_media = '#F79729'; }
elseif ($DAEb_media > 31.4) { $DAEbR_media = 'Medio'; $DAEbC_media = '#FFFE01'; }
elseif ($DAEb_media > 23)   { $DAEbR_media = 'Bajo'; $DAEbC_media = '#97CD53'; }
elseif ($DAEb_media >= 0)   { $DAEbR_media = 'Sin Riesgo'; $DAEbC_media = '#00AFF0'; }

$DJTb_media_0 = Consolidados::DJTb_media(conexion::obtener_conexion());
$DJTb_media = round($DJTb_media_0, 1, PHP_ROUND_HALF_UP);
if ($DJTb_media > 58.4) { $DJTbR_media = 'Muy Alto'; $DJTbC_media = '#F80203'; }
elseif ($DJTb_media > 45.9) { $DJTbR_media = 'Alto'; $DJTbC_media = '#F79729'; }
elseif ($DJTb_media > 37.6) { $DJTbR_media = 'Medio'; $DJTbC_media = '#FFFE01'; }
elseif ($DJTb_media > 25.1) { $DJTbR_media = 'Bajo'; $DJTbC_media = '#97CD53'; }
elseif ($DJTb_media >= 0)   { $DJTbR_media = 'Sin Riesgo'; $DJTbC_media = '#00AFF0'; }

$ITb_media_0 = Consolidados::ITb_media(conexion::obtener_conexion());
$ITb_media = round($ITb_media_0, 1, PHP_ROUND_HALF_UP);
if ($ITb_media > 50.1) { $ITbR_media = 'Muy Alto'; $ITbC_media = '#F80203'; }
elseif ($ITb_media > 31.4) { $ITbR_media = 'Alto'; $ITbC_media = '#F79729'; }
elseif ($ITb_media > 25.1) { $ITbR_media = 'Medio'; $ITbC_media = '#FFFE01'; }
elseif ($ITb_media > 12.6) { $ITbR_media = 'Bajo'; $ITbC_media = '#97CD53'; }
elseif ($ITb_media >= 0)   { $ITbR_media = 'Sin Riesgo'; $ITbC_media = '#00AFF0'; }

$LRb_media_0 = Consolidados::LRb_media(conexion::obtener_conexion());
$LRb_media = round($LRb_media_0, 1, PHP_ROUND_HALF_UP);
if ($LRb_media > 38.4) { $LRbR_media = 'Muy Alto'; $LRbC_media = '#F80203'; }
elseif ($LRb_media > 26.8) { $LRbR_media = 'Alto'; $LRbC_media = '#F79729'; }
elseif ($LRb_media > 17.6) { $LRbR_media = 'Medio'; $LRbC_media = '#FFFE01'; }
elseif ($LRb_media > 8.4)  { $LRbR_media = 'Bajo'; $LRbC_media = '#97CD53'; }
elseif ($LRb_media >= 0)   { $LRbR_media = 'Sin Riesgo'; $LRbC_media = '#00AFF0'; }

$CLb_media_0 = Consolidados::CLb_media(conexion::obtener_conexion());
$CLb_media = round($CLb_media_0, 1, PHP_ROUND_HALF_UP);
if ($CLb_media > 38.6) { $CLbR_media = 'Muy Alto'; $CLbC_media = '#F80203'; }
elseif ($CLb_media > 25.1) { $CLbR_media = 'Alto'; $CLbC_media = '#F79729'; }
elseif ($CLb_media > 13.6) { $CLbR_media = 'Medio'; $CLbC_media = '#FFFE01'; }
elseif ($CLb_media > 3.9)  { $CLbR_media = 'Bajo'; $CLbC_media = '#97CD53'; }
elseif ($CLb_media >= 0)   { $CLbR_media = 'Sin Riesgo'; $CLbC_media = '#00AFF0'; }

$RSb_media_0 = Consolidados::RSb_media(conexion::obtener_conexion());
$RSb_media = round($RSb_media_0, 1, PHP_ROUND_HALF_UP);
if ($RSb_media > 37.6) { $RSbR_media = 'Muy Alto'; $RSbC_media = '#F80203'; }
elseif ($RSb_media > 27.2) { $RSbR_media = 'Alto'; $RSbC_media = '#F79729'; }
elseif ($RSb_media > 14.7) { $RSbR_media = 'Medio'; $RSbC_media = '#FFFE01'; }
elseif ($RSb_media > 6.4)  { $RSbR_media = 'Bajo'; $RSbC_media = '#97CD53'; }
elseif ($RSb_media >= 0)   { $RSbR_media = 'Sin Riesgo'; $RSbC_media = '#00AFF0'; }

$RDb_media_0 = Consolidados::RDb_media(conexion::obtener_conexion());
$RDb_media = round($RDb_media_0, 1, PHP_ROUND_HALF_UP);
if ($RDb_media > 50.1) { $RDbR_media = 'Muy Alto'; $RDbC_media = '#F80203'; }
elseif ($RDb_media > 30.1) { $RDbR_media = 'Alto'; $RDbC_media = '#F79729'; }
elseif ($RDb_media > 20.1) { $RDbR_media = 'Medio'; $RDbC_media = '#FFFE01'; }
elseif ($RDb_media > 5.1)  { $RDbR_media = 'Bajo'; $RDbC_media = '#97CD53'; }
elseif ($RDb_media >= 0)   { $RDbR_media = 'Sin Riesgo'; $RDbC_media = '#00AFF0'; }

$CTb_media_0 = Consolidados::CTb_media(conexion::obtener_conexion());
$CTb_media = round($CTb_media_0, 1, PHP_ROUND_HALF_UP);
if ($CTb_media > 43.2) { $CTbR_media = 'Muy Alto'; $CTbC_media = '#F80203'; }
elseif ($CTb_media > 34.8) { $CTbR_media = 'Alto'; $CTbC_media = '#F79729'; }
elseif ($CTb_media > 26.5) { $CTbR_media = 'Medio'; $CTbC_media = '#FFFE01'; }
elseif ($CTb_media > 19.5) { $CTbR_media = 'Bajo'; $CTbC_media = '#97CD53'; }
elseif ($CTb_media >= 0)   { $CTbR_media = 'Sin Riesgo'; $CTbC_media = '#00AFF0'; }

$CDRb_media_0 = Consolidados::CRb_media(conexion::obtener_conexion());
$CDRb_media = round($CDRb_media_0, 1, PHP_ROUND_HALF_UP);
if ($CDRb_media > 30.1) { $CDRbR_media = 'Muy Alto'; $CDRbC_media = '#F80203'; }
elseif ($CDRb_media > 15.1) { $CDRbR_media = 'Alto'; $CDRbC_media = '#F79729'; }
elseif ($CDRb_media > 5.1)  { $CDRbR_media = 'Medio'; $CDRbC_media = '#FFFE01'; }
elseif ($CDRb_media > 1)    { $CDRbR_media = 'Bajo'; $CDRbC_media = '#97CD53'; }
elseif ($CDRb_media >= 0)   { $CDRbR_media = 'Sin Riesgo'; $CDRbC_media = '#00AFF0'; }

$Cb_media_0 = Consolidados::Cb_media(conexion::obtener_conexion());
$Cb_media = round($Cb_media_0, 1, PHP_ROUND_HALF_UP);
if ($Cb_media > 50.1) { $CbR_media = 'Muy Alto'; $CbC_media = '#F80203'; }
elseif ($Cb_media > 25.1) { $CbR_media = 'Alto'; $CbC_media = '#F79729'; }
elseif ($Cb_media > 16.8) { $CbR_media = 'Medio'; $CbC_media = '#FFFE01'; }
elseif ($Cb_media > 1)    { $CbR_media = 'Bajo'; $CbC_media = '#97CD53'; }
elseif ($Cb_media >= 0)   { $CbR_media = 'Sin Riesgo'; $CbC_media = '#00AFF0'; }

$PMb_media_0 = Consolidados::PMb_media(conexion::obtener_conexion());
$PMb_media = round($PMb_media_0, 1, PHP_ROUND_HALF_UP);
if ($PMb_media > 58.4) { $PMbR_media = 'Muy Alto'; $PMbC_media = '#F80203'; }
elseif ($PMb_media > 41.8) { $PMbR_media = 'Alto'; $PMbC_media = '#F79729'; }
elseif ($PMb_media > 33.4) { $PMbR_media = 'Medio'; $PMbC_media = '#FFFE01'; }
elseif ($PMb_media > 16.8) { $PMbR_media = 'Bajo'; $PMbC_media = '#97CD53'; }
elseif ($PMb_media >= 0)   { $PMbR_media = 'Sin Riesgo'; $PMbC_media = '#00AFF0'; }

$PDb_media_0 = Consolidados::PDb_media(conexion::obtener_conexion());
$PDb_media = round($PDb_media_0, 1, PHP_ROUND_HALF_UP);
if ($PDb_media > 56.4) { $PDbR_media = 'Muy Alto'; $PDbC_media = '#F80203'; }
elseif ($PDb_media > 37.6) { $PDbR_media = 'Alto'; $PDbC_media = '#F79729'; }
elseif ($PDb_media > 25.1) { $PDbR_media = 'Medio'; $PDbC_media = '#FFFE01'; }
elseif ($PDb_media > 12.6) { $PDbR_media = 'Bajo'; $PDbC_media = '#97CD53'; }
elseif ($PDb_media >= 0)   { $PDbR_media = 'Sin Riesgo'; $PDbC_media = '#00AFF0'; }

$CAb_media_0 = Consolidados::CAb_media(conexion::obtener_conexion());
$CAb_media = round($CAb_media_0, 1, PHP_ROUND_HALF_UP);
if ($CAb_media > 75.1) { $CAbR_media = 'Muy Alto'; $CAbC_media = '#F80203'; }
elseif ($CAb_media > 66.8) { $CAbR_media = 'Alto'; $CAbC_media = '#F79729'; }
elseif ($CAb_media > 50.1) { $CAbR_media = 'Medio'; $CAbC_media = '#FFFE01'; }
elseif ($CAb_media > 33.4) { $CAbR_media = 'Bajo'; $CAbC_media = '#97CD53'; }
elseif ($CAb_media >= 0)   { $CAbR_media = 'Sin Riesgo'; $CAbC_media = '#00AFF0'; }

$REb_media_0 = Consolidados::REb_media(conexion::obtener_conexion());
$REb_media = round($REb_media_0, 1, PHP_ROUND_HALF_UP);
if ($REb_media > 27.6) { $REbR_media = 'Muy Alto'; $REbC_media = '#F80203'; }
elseif ($REb_media > 17.6) { $REbR_media = 'Alto'; $REbC_media = '#F79729'; }
elseif ($REb_media > 10.7) { $REbR_media = 'Medio'; $REbC_media = '#FFFE01'; }
elseif ($REb_media > 2.6)  { $REbR_media = 'Bajo'; $REbC_media = '#97CD53'; }
elseif ($REb_media >= 0)   { $REbR_media = 'Sin Riesgo'; $REbC_media = '#00AFF0'; }

$RPb_media_0 = Consolidados::RPb_media(conexion::obtener_conexion());
$RPb_media = round($RPb_media_0, 1, PHP_ROUND_HALF_UP);
if ($RPb_media > 18.9) { $RPbR_media = 'Muy Alto'; $RPbC_media = '#F80203'; }
elseif ($RPb_media > 12.6) { $RPbR_media = 'Alto'; $RPbC_media = '#F79729'; }
elseif ($RPb_media > 6.4)  { $RPbR_media = 'Medio'; $RPbC_media = '#FFFE01'; }
elseif ($RPb_media > 1)    { $RPbR_media = 'Bajo'; $RPbC_media = '#97CD53'; }
elseif ($RPb_media >= 0)   { $RPbR_media = 'Sin Riesgo'; $RPbC_media = '#00AFF0'; }

$RYCb_media_0 = Consolidados::RYCb_media(conexion::obtener_conexion());
$RYCb_media = round($RYCb_media_0, 1, PHP_ROUND_HALF_UP);
if ($RYCb_media > 37.6) { $RYCbR_media = 'Muy Alto'; $RYCbC_media = '#F80203'; }
elseif ($RYCb_media > 25.1) { $RYCbR_media = 'Alto'; $RYCbC_media = '#F79729'; }
elseif ($RYCb_media > 12.6) { $RYCbR_media = 'Medio'; $RYCbC_media = '#FFFE01'; }
elseif ($RYCb_media > 1)    { $RYCbR_media = 'Bajo'; $RYCbC_media = '#97CD53'; }
elseif ($RYCb_media >= 0)   { $RYCbR_media = 'Sin Riesgo'; $RYCbC_media = '#00AFF0'; }


        
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
    	border: 1px solid  #c8c5e2 !important;
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
    .task-download,
    .task-delete,
    .task-delete4 {
        background:transparent!important;
        color: #333333;
        border:0;
        margin:0!important;
        padding:0!important;
        font-size:20px!important;
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
    #search{
        height: 36px;
        width:16.5em;
        padding-top:1px;
        border: 1px solid #333333!important;
        background:#eaeaea;
        border-bottom-color: #ccc; 
        transition: 0.4s;
        margin:0!important;
        border-radius:0;
        padding:4px;
        padding-left:40px;
        font-family:verdana!important;
    }
    #search:focus{
        padding-top:1px;
        transition: 0.4s;
        padding:4px;
        padding-left:40px;
        border: 2px solid #f58634;
        background:#f1f2f4;
    }
    #search ~ .focus-border{
        position: absolute; 
        height: 36px; 
        right: 0; 
        width: 0;
        transition: 0.5s;
        margin-right:2px;
    }
    #nregistro {
        float:left;
        margin-top:1em;
    }
    #borderout {
        background:transparent!important;
        border:0!important;
        width:30%!important;
    }
    .clientes  {
        width:270px;
        text-align:left;
        color:#333333;
        font-family:verdanabi;
        font-size:13px;
        margin-top:0.8em;
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
            margin-top: -4.15em!important
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
     #registro textarea {
        border: none;
        width:100%!important;
        text-align:justify;
        font-family:verdana;
        /*background:#ebf9fa;*/
        padding:1.8em;
        color:#000000;
        border:1px solid #007acc!important
    }
      .burbuja-explicativa {
            position: absolute;
            top: 20px;
            right: 35px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(183, 202, 86, 0.35);
            border-radius: 16px;
            padding: 14px 20px 14px 18px;
            font-family: 'Helvetica Neue', helvetica;
            font-size: 12px;
            font-weight: 500;
            color: #3d4d3d;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06), 0 2px 10px rgba(183, 202, 86, 0.10);
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 1000;
            max-width: 370px;
            line-height: 1.4;
            cursor: default;
            transition: all 0.4s ease;
            pointer-events: none;
        }
         #container-wrapper {
            position: relative;
            max-width: 950px;
            margin: 20px auto;
        }

        #lista-items {
            max-width: 950px;
            margin: 15px auto 10px auto;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(183, 202, 86, 0.3);
            border-radius: 16px;
            padding: 15px 20px;
            box-shadow: 0 4px 20px rgba(183, 202, 86, 0.08);
            display: flex;
            flex-direction: column;
            gap: 6px;
            min-height: 60px;
            transition: all 0.3s ease;
        }
        #lista-items.oculto {
            display: none;
        }
        #lista-items .titulo-lista {
            font-size: 14px;
            font-family:Verdanab;
            color: #091626;
            padding-bottom: 6px;
            border-bottom: 2px solid rgba(183, 202, 86, 0.3);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        #lista-items .item-lista {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            padding: 6px 12px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.5);
            transition: background 0.2s;
        }
        #lista-items .item-lista .numero {
            font-weight: 800;
            font-size: 16px;
            color: #000000 !important;
            min-width: 28px;
            text-align: center;
            background: #fdf7fd;
            border-radius: 50%;
            padding: 1px 0;
        }
        #lista-items .item-lista .nombre {
            color: #000000 !important;
            font-size: 15px;
            font-family:Raleway;
            flex: 1;
        }
        #lista-items .item-lista .nivel-riesgo {
            font-size: 13px!important;
            font-family:verdana;
            padding: 2px 10px;
            border-radius: 12px;
            background: rgba(255,255,255,0.8);
            border: 2px solid currentColor;
            white-space: nowrap;
        }
            .burbuja-explicativa.oculta {
                opacity: 0;
                transform: translateY(-10px) scale(0.95);
                pointer-events: none;
            }
            .burbuja-explicativa .icono {
                font-size: 20px;
                color: #b7ca56;
                flex-shrink: 0;
                animation: pulse-icon 2s ease-in-out infinite;
            }
            .burbuja-explicativa .texto {
                font-size: 14px!important;
                color: #000000 !important;
                font-family:Raleway;
            }
            .burbuja-explicativa .texto strong {
                color: #000000 !important;
                font-family:Raleway;
                Font-size:16px;
            }
            .burbuja-explicativa::after {
                content: '';
                position: absolute;
                bottom: -9px;
                left: 35px;
                width: 14px;
                height: 14px;
                background: rgba(255, 255, 255, 0.95);
                border-right: 1px solid rgba(183, 202, 86, 0.35);
                border-bottom: 1px solid rgba(183, 202, 86, 0.35);
                transform: rotate(45deg);
                border-radius: 0 0 4px 0;
                box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.06);
                -webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.06);
            }
            @keyframes pulse-icon {
                0%, 100% { transform: scale(1) rotate(0deg); }
                50% { transform: scale(1.2) rotate(-5deg); }
            }
            .breadcrumbs {
                font-family:Verdana!important;
                font-size: 15px!important;
                padding: 8px 16px;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 12px;
                border: 1px solid rgba(183, 202, 86, 0.3);
                margin: 0 auto 10px auto;
                max-width: 950px;
                text-align: center;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
                min-height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
                gap: 8px;
                box-sizing: border-box;
            }
            .breadcrumbs span {
                cursor: pointer;
                color: #000000 !important;
                font-family:Verdana;
                font-size: 16px;
            }
            .breadcrumbs span:hover {
                text-decoration: underline;
            }
            .breadcrumbs .separator {
                color: #888;
                cursor: default;
                font-weight: 300;
            }
            .breadcrumbs .separator:hover {
                text-decoration: none;
            }
            .breadcrumbs .current {
                color: #000000 !important;
                font-weight: 700 !important;
                cursor: default !important;
                font-size: 14px !important;
            }
            .breadcrumbs .current:hover {
                text-decoration: none !important;
            }
            
            .highcharts-axis-labels span,
            .highcharts-axis-labels text,
            .highcharts-label text,
            .highcharts-label span {
                text-decoration: none !important;
                border-bottom: none !important;
                border: none !important;
                box-shadow: none !important;
                outline: none !important;
                cursor: default !important;
                color: #000000 !important;
            }
            .highcharts-point {
                cursor: pointer !important;
                -webkit-tap-highlight-color: transparent !important;
            }
    
            /* FORZAR TODOS LOS TEXTOS A NEGRO */
            .highcharts-data-label text,
            .highcharts-data-label span,
            .highcharts-drilldown-data-label text,
            .highcharts-drilldown-data-label span,
            .highcharts-axis-labels text,
            .highcharts-axis-labels span,
            .highcharts-legend-item text,
            .highcharts-legend-item span,
            .highcharts-tooltip text,
            .highcharts-tooltip span {
                color: #000000 !important;
                fill: #000000 !important;
            }

            /* RUTA DE NIVELES (DRILLUP BUTTON) - TAMAÑO 16px FONT FAMILY VERDANA */
            .highcharts-drillup-button text {
                font-size: 16px !important;
                font-family: Verdana !important;
                font-weight: 600 !important;
                fill: #000000 !important;
                color: #000000 !important;
            }
            /* Aumentar el tamaño de los textos de la ruta nativa de Highcharts */
            .highcharts-breadcrumbs-group text {
                font-size: 16px !important;
                pointer-events: auto !important;
            }
            
            /* Asegurar que los botones de retorno respondan correctamente al hacer clic */
            .highcharts-drillup-button {
                cursor: pointer !important;
                pointer-events: auto !important;
            }
/* ============================================================
   TABLA CONSOLIDADA - ESTILO MODERNO
   ============================================================ */
.table_consolidados {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    font-family: Verdana, Geneva, sans-serif;
    font-size: 12px;
    color: #000000;
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    margin: 20px auto;
    table-layout: fixed;
}

/* ---------- ENCABEZADOS (th) ---------- */
.table_consolidados th {
    background: linear-gradient(180deg, #433c77 0%, #564d99 100%);
    color: #ffffff;
    font-family: Verdana, Geneva, sans-serif;
    font-weight: 700;
    font-size: 12px;
    text-align: center;
    padding: 12px 8px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.15);
    letter-spacing: 0.3px;
    vertical-align: middle;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
}

/* Encabezado principal (primera fila) */
.table_consolidados tr:first-child th {
   background: linear-gradient(180deg, #433c77 0%, #564d99 100%);
    color: #ffffff;
    font-size: 12.5px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border-bottom: 2px solid rgba(0, 0, 0, 0.25);
}

/* Segunda fila de encabezados (PT, Nivel de Riesgo...) */
.table_consolidados tr:nth-child(2) th {
  background: linear-gradient(180deg, #433c77 0%, #564d99 100%);
    color: #f5e6e8;
    font-size: 11.5px;
    padding: 8px 6px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}

/* ---------- CELDAS (td) ---------- */
.table_consolidados td {
    padding: 10px 8px;
    text-align: center;
    color: #000000;
    font-family: Verdana;
    font-size: 13px;
    border-bottom: 1px solid #f4e5e8;
    vertical-align: middle;
    transition: background 0.2s ease;
}

/* Hover por fila */
.table_consolidados tr:hover td {
    background: #fdf5f7;
}

/* ---------- COLUMNA DOMINIOS (Verdana negrita · SIN background) ---------- */
.celda-dominio,
.table_consolidados td.celda-dominio,
.table_consolidados td[rowspan].celda-dominio {
    background: transparent;
    font-family: Verdanab;
    color: #000000;
    font-size: 13px;
    text-align: left;
    padding-left: 12px;
    line-height: 1.4;
    border-right: 1px solid rgba(122, 31, 43, 0.15);
    vertical-align: middle;
}

/* ---------- COLUMNA DIMENSIONES ---------- */
.celda-dimension,
.table_consolidados td.celda-dimension {
    text-align: left;
    padding-left: 13px;
    font-family:verdanab;
    color: #000000;
    font-size: 13px;
    line-height: 1.4;
}

/* ---------- FILAS TOTAL (AZUL) ---------- */
.fila-total td,
.table_consolidados tr.fila-total td {
    background: #ebf9fa !important;
    color: #000000;
    border-top: 1px solid rgba(122, 31, 43, 0.3);
    border-bottom: 1px solid rgba(122, 31, 43, 0.3);
}

/* Etiqueta TOTAL dentro de la fila */
.celda-total,
.table_consolidados tr.fila-total td.celda-total {
    background: #ebf9fa !important;
    color: #000000;
    font-family: Verdana;
    text-align: left;
    padding-left: 13px;
}

/* ---------- CELDAS N/A ---------- */
.na {
    color: #999999;
    font-style: italic;
}

/* ---------- SEPARADOR ENTRE DOMINIOS ---------- */
.fila-dominio td,
.table_consolidados tr.fila-dominio td {
    border-top: 2px solid #7a1f2b;
    padding-top: 13px;
}

/* ---------- ESQUINAS REDONDEADAS ---------- */
.table_consolidados tr:first-child th:first-child {
    border-top-left-radius: 16px;
}
.table_consolidados tr:first-child th:last-child {
    border-top-right-radius: 16px;
}
.table_consolidados tr:last-child td:first-child {
    border-bottom-left-radius: 16px;
}
.table_consolidados tr:last-child td:last-child {
    border-bottom-right-radius: 16px;
}

/* ---------- RESPONSIVE ---------- */
@media (max-width: 900px) {
    .table_consolidados {
        font-size: 10.5px;
    }
    .table_consolidados th,
    .table_consolidados td {
        padding: 6px 4px;
        font-size: 10px;
    }
}

@media (max-width: 600px) {
    .table_consolidados {
        font-size: 9.5px;
        border-radius: 12px;
    }
    .table_consolidados th,
    .table_consolidados td {
        padding: 5px 3px;
        font-size: 9px;
    }
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
    <p style="font-family:verdanab;font-size:22px;color:#333333;text-align:center">CONSOLIDADO INTRALABORAL</p>
    <p style="font-family:narrow;font-size:20px;letter-spacing:3px;text-align:center;margin:0;color:#333333"><span><?php echo $Razon ?> </span><span>&nbsp&nbspNit:<?php echo $Nit ?> </span></p><br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div style="text-align: center; width: 100%;">
                <!-- Título -->
                <div style="text-align: center;font-size: 22px;font-weight: 600;color: #1a1a2e;font-family: Helvetica, Arial, sans-serif;">Resultado Intralaboral por Dominios y Dimensiones</div>
                <!-- Subtítulo -->
                <div style="text-align: center;font-size: 16px;font-weight: 400;color: #6b7280;font-family: Verdana, Geneva, sans-serif;margin-top: 4px;">Riesgo Psicosocial - <?php echo $Razon ?>
                </div>
            </div>
    
            <!-- 👇 SELECTOR DE FORMA (arriba de la gráfica) -->
            <div style="margin: 15px 0; display: flex; align-items: center; justify-content: center; gap: 10px;">
                <label for="selectForma" style="font-weight: bold; font-size: 15px; color: #1a1a2e; font-family: Helvetica, Arial, sans-serif;">
                    Forma:
                </label>
                <select id="selectForma"
                        style="padding: 6px 14px; font-size: 14px; border: 1px solid #b7ca56; border-radius: 6px; background: #fff; cursor: pointer; font-family: Helvetica, Arial, sans-serif; color: #000;">
                    <option value="A" selected>Forma A</option>
                    <option value="B">Forma B</option>
                </select>
            </div>
    
            <div id="container-wrapper" style="margin-top:0;">
                <!-- Burbuja -->
                <div id="burbuja" class="burbuja-explicativa">
                    <span class="icono">👇</span>
                    <span class="texto">
                        <strong>Haz clic</strong> en las barras para explorar sus dominios y dimensiones.
                    </span>
                </div>
                <!-- Contenedor de la gráfica -->
                <div id="consolidado" style="min-height:340px;"></div>
            </div>
            <!-- Lista lateral -->
            <div id="lista-items" style="margin-top:10px;">
                <div class="titulo-lista" id="lista-titulo">📊 TOTAL RIESGO PSICOSOCIAL</div>
                <div id="lista-contenido" style="text-align:left!important"></div>
            </div>
        </div>
    </div>
    </div>
    </div>    
    <div class="panel panel-body">
    <div class="row" align="center">
        <div class="col-md-12" ><div class="col-md-6 col-md-offset-3" style="min-height:32em;margin-top:4em!important" id="general"></div></div>
        <div class="col-md-8 col-md-offset-2">
        <table class="table_consolidados" style="width:100%">
            <tr>
                <th>Sin Riesgo</th>
                <th>Riesgo Bajo</th>
                <th>Riesgo Medio</th>
                <th>Riesgo Alto</th>
                <th>Riesgo muy Alto</th>
                <th>TOTAL EVALUADOS</th>
            </tr>
            <tr style="border-top:1px solid #333333">
                <td id="td" <?php echo $GT1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $GT1_porcentaje . '% (' . $GT1 . ')' ?></td>
                <td id="td" <?php echo $GT2c ?>><span class="subt2">Sin Riesgo: </span><?php echo $GT2_porcentaje . '% (' . $GT2 . ')' ?></td>
                <td id="td" <?php echo $GT3c ?>><span class="subt2">Sin Riesgo: </span><?php echo $GT3_porcentaje . '% (' . $GT3 . ')' ?></td>
                <td id="td" <?php echo $GT4c ?>><span class="subt2">Sin Riesgo: </span><?php echo $GT4_porcentaje . '% (' . $GT4 . ')' ?></td>
                <td id="td" <?php echo $GT5c ?>><span class="subt2">Sin Riesgo: </span><?php echo $GT5_porcentaje . '% (' . $GT5 . ')' ?></td>
                <td id="td" style="font-family:verdanab;font-size:16px;color:#48636a"><span class="subt2">TOTAL EVALUADOS: </span><?php echo $GT ?></td>
            </tr>            
        </table>
        </div>
    </div>
 <!--
    <div class="row" align="center"><br><br>
        <p style="font-size:16px;font-family:verdanab;text-align:left;color:#333333;text-align:center">DEMANDAS DEL TRABAJO</p><br>
        <table class="table_consolidados" style="width:100%">
            <tr>
                <th>DIMENSIÓN/ Nivel del riesgo</th>
                <th>Demandas ambientales y de esfuerzo físico</th>
                <th>Exigencias de responsabilidad del cargo</th>
                <th>Consistencia del rol</th>
                <th>Demandas emocionales</th>
                <th>Demandas de la jornada de trabajo</th>
                <th>Influencia del trabajo sobre el entorno extralaboral</th>
                <th>Demandas cuantitativas</th>
                <th>Demandas de carga mental</th>
                <th>TOTAL DOMINIO</th>
            </tr>
           
        </table>
    </div> 
    <div class="row" id="registro" align="center" style="min-height:10em"><br><br>
        <div id="JPT"></div><br>
        <form>    
            <p id="analisis1v" style="text-align:justify;font-family:verdana;background:#ebf9fa;padding:1.9em;color:#000000"></p>
            <button class="task-editar" id="btnanalisis1" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
            <textarea class="note" id="analisis1" style="border-radius:0px!important;border:1px solid #678e98!important;" onKeyDown="valida_longitud1()" placeholder="..."></textarea><br>
            <p id="conteo1" align="right">&nbsp... <span id="contador1" style="font-family:verdanab;font-size:12px"></span></p>
            <input id="botonIA1" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
        </form>
    </div>
    <div class="row" id="registro" align="center" style="min-height:10em"><br><br>
        <div id="dominios"></div><br>
        <form>    
            <p id="analisis2v" style="text-align:justify;font-family:verdana;background:#ebf9fa;padding:1.9em;color:#000000"></p>
            <button class="task-editar" id="btnanalisis2" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
            <textarea class="note" id="analisis2" onKeyDown="valida_longitud2()" placeholder="..."></textarea><br>
            <p id="conteo2" align="right">&nbsp... <span id="contador2" style="font-family:verdanab;font-size:12px"></span></p>
            <input id="botonIA2" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
        </form>
    </div>
    <div class="row" id="registro" align="center" style="min-height:10em"><br><br>
        <div id="AOT"></div>
        <form>    
            <p id="analisis3v" style="text-align:justify;font-family:verdana;background:#ebf9fa;padding:1.9em;color:#000000"></p>
            <button class="task-editar" id="btnanalisis3" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
            <textarea class="note" id="analisis3" onKeyDown="valida_longitud3()" placeholder="..."></textarea><br>
            <p id="conteo3" align="right">&nbsp... <span id="contador3" style="font-family:verdanab;font-size:12px"></span></p>
            <input id="botonIA3" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
        </form>
    </div>
    <div class="row" id="registro" align="center" style="min-height:10em"><br><br>
        <div id="dominios2"></div>
        <form>    
            <p id="analisis4v" style="text-align:justify;font-family:verdana;background:#ebf9fa;padding:1.9em;color:#000000"></p>
            <button class="task-editar" id="btnanalisis4" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
            <textarea class="note" id="analisis4" onKeyDown="valida_longitud4()" placeholder="..."></textarea><br>
            <p id="conteo4" align="right">&nbsp... <span id="contador4" style="font-family:verdanab;font-size:12px"></span></p>
            <input id="botonIA4" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
        </form>
    </div>    -->
    <div class="col-md-8 col-md-offset-2" align="center"><br>
        <p style="font-size:17px;font-family:verdanab;color:#000000">DOMINIOS Y GRUPOS OCUPACIONALES</p>
        <table class="table_consolidados" style="width:100%">
            <tr>
                <th>Dominio</th>
                <th>Grupo Ocupacional</th>
                <th>Sin Riesgo</th>
                <th>Riesgo Bajo</th>
                <th>Riesgo Medio</th>
                <th>Riesgo Alto</th>
                <th>Riesgo muy Alto</th>
            </tr>
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dominio: </span>Liderazgo y Relaciones Sociales en el Trabajo </td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $LRJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $LRJ1_porcentaje . '% (' . $LRJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $LRJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $LRJ2_porcentaje . '% (' . $LRJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $LRJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $LRJ3_porcentaje . '% (' . $LRJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $LRJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $LRJ4_porcentaje . '% (' . $LRJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $LRJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $LRJ5_porcentaje . '% (' . $LRJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $LRP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $LRP1_porcentaje . '% (' . $LRP1 . ')' ?></td>
                <td id="td" <?php echo $LRP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $LRP2_porcentaje . '% (' . $LRP2 . ')' ?></td>
                <td id="td" <?php echo $LRP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $LRP3_porcentaje . '% (' . $LRP3 . ')' ?></td>
                <td id="td" <?php echo $LRP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $LRP4_porcentaje . '% (' . $LRP4 . ')' ?></td>
                <td id="td" <?php echo $LRP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $LRP5_porcentaje . '% (' . $LRP5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $LRA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $LRA1_porcentaje . '% (' . $LRA1 . ')' ?></td>
                <td id="td" <?php echo $LRA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $LRA2_porcentaje . '% (' . $LRA2 . ')' ?></td>
                <td id="td" <?php echo $LRA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $LRA3_porcentaje . '% (' . $LRA3 . ')' ?></td>
                <td id="td" <?php echo $LRA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $LRA4_porcentaje . '% (' . $LRA4 . ')' ?></td>
                <td id="td" <?php echo $LRA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $LRA5_porcentaje . '% (' . $LRA5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $LRO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $LRO1_porcentaje . '% (' . $LRO1 . ')' ?></td>
                <td id="td" <?php echo $LRO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $LRO2_porcentaje . '% (' . $LRO2 . ')' ?></td>
                <td id="td" <?php echo $LRO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $LRO3_porcentaje . '% (' . $LRO3 . ')' ?></td>
                <td id="td" <?php echo $LRO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $LRO4_porcentaje . '% (' . $LRO4 . ')' ?></td>
                <td id="td" <?php echo $LRO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $LRO5_porcentaje . '% (' . $LRO5 . ')' ?></td>
            </tr>
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dominio: </span>Control sobre el Trabajo</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $CTJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CTJ1_porcentaje . '% (' . $CTJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $CTJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CTJ2_porcentaje . '% (' . $CTJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $CTJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CTJ3_porcentaje . '% (' . $CTJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $CTJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CTJ4_porcentaje . '% (' . $CTJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $CTJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CTJ5_porcentaje . '% (' . $CTJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td"  style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $CTP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CTP1_porcentaje . '% (' . $CTP1 . ')' ?></td>
                <td id="td" <?php echo $CTP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CTP2_porcentaje . '% (' . $CTP2 . ')' ?></td>
                <td id="td" <?php echo $CTP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CTP3_porcentaje . '% (' . $CTP3 . ')' ?></td>
                <td id="td" <?php echo $CTP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CTP4_porcentaje . '% (' . $CTP4 . ')' ?></td>
                <td id="td" <?php echo $CTP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CTP5_porcentaje . '% (' . $CTP5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $CTA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CTA1_porcentaje . '% (' . $CTA1 . ')' ?></td>
                <td id="td" <?php echo $CTA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CTA2_porcentaje . '% (' . $CTA2 . ')' ?></td>
                <td id="td" <?php echo $CTA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CTA3_porcentaje . '% (' . $CTA3 . ')' ?></td>
                <td id="td" <?php echo $CTA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CTA4_porcentaje . '% (' . $CTA4 . ')' ?></td>
                <td id="td" <?php echo $CTA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CTA5_porcentaje . '% (' . $CTA5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $CTO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CTO1_porcentaje . '% (' . $CTO1 . ')' ?></td>
                <td id="td" <?php echo $CTO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CTO2_porcentaje . '% (' . $CTO2 . ')' ?></td>
                <td id="td" <?php echo $CTO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CTO3_porcentaje . '% (' . $CTO3 . ')' ?></td>
                <td id="td" <?php echo $CTO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CTO4_porcentaje . '% (' . $CTO4 . ')' ?></td>
                <td id="td" <?php echo $CTO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CTO5_porcentaje . '% (' . $CTO5 . ')' ?></td>
            </tr>
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dominio: </span>Demandas del Trabajo</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $DTJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DTJ1_porcentaje . '% (' . $DTJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $DTJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DTJ2_porcentaje . '% (' . $DTJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $DTJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DTJ3_porcentaje . '% (' . $DTJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $DTJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DTJ4_porcentaje . '% (' . $DTJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $DTJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DTJ5_porcentaje . '% (' . $DTJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $DTP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DTP1_porcentaje . '% (' . $DTP1 . ')' ?></td>
                <td id="td" <?php echo $DTP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DTP2_porcentaje . '% (' . $DTP2 . ')' ?></td>
                <td id="td" <?php echo $DTP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DTP3_porcentaje . '% (' . $DTP3 . ')' ?></td>
                <td id="td" <?php echo $DTP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DTP4_porcentaje . '% (' . $DTP4 . ')' ?></td>
                <td id="td" <?php echo $DTP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DTP5_porcentaje . '% (' . $DTP5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $DTA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DTA1_porcentaje . '% (' . $DTA1 . ')' ?></td>
                <td id="td" <?php echo $DTA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DTA2_porcentaje . '% (' . $DTA2 . ')' ?></td>
                <td id="td" <?php echo $DTA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DTA3_porcentaje . '% (' . $DTA3 . ')' ?></td>
                <td id="td" <?php echo $DTA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DTA4_porcentaje . '% (' . $DTA4 . ')' ?></td>
                <td id="td" <?php echo $DTA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DTA5_porcentaje . '% (' . $DTA5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $DTO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DTO1_porcentaje . '% (' . $DTO1 . ')' ?></td>
                <td id="td" <?php echo $DTO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DTO2_porcentaje . '% (' . $DTO2 . ')' ?></td>
                <td id="td" <?php echo $DTO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DTO3_porcentaje . '% (' . $DTO3 . ')' ?></td>
                <td id="td" <?php echo $DTO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DTO4_porcentaje . '% (' . $DTO4 . ')' ?></td>
                <td id="td" <?php echo $DTO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DTO5_porcentaje . '% (' . $DTO5 . ')' ?></td>
            </tr>
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dominio: </span>Recompensas</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $RJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RJ1_porcentaje . '% (' . $RJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $RJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RJ2_porcentaje . '% (' . $RJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $RJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RJ3_porcentaje . '% (' . $RJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $RJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RJ4_porcentaje . '% (' . $RJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $RJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RJ5_porcentaje . '% (' . $RJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $RP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RP1_porcentaje . '% (' . $RP1 . ')' ?></td>
                <td id="td" <?php echo $RP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RP2_porcentaje . '% (' . $RP2 . ')' ?></td>
                <td id="td" <?php echo $RP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RP3_porcentaje . '% (' . $RP3 . ')' ?></td>
                <td id="td" <?php echo $RP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RP4_porcentaje . '% (' . $RP4 . ')' ?></td>
                <td id="td" <?php echo $RP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RP5_porcentaje . '% (' . $RP5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $RA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RA1_porcentaje . '% (' . $RA1 . ')' ?></td>
                <td id="td" <?php echo $RA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RA2_porcentaje . '% (' . $RA2 . ')' ?></td>
                <td id="td" <?php echo $RA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RA3_porcentaje . '% (' . $RA3 . ')' ?></td>
                <td id="td" <?php echo $RA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RA4_porcentaje . '% (' . $RA4 . ')' ?></td>
                <td id="td" <?php echo $RA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RA5_porcentaje . '% (' . $RA5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $RO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RO1_porcentaje . '% (' . $RO1 . ')' ?></td>
                <td id="td" <?php echo $RO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RO2_porcentaje . '% (' . $RO2 . ')' ?></td>
                <td id="td" <?php echo $RO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RO3_porcentaje . '% (' . $RO3 . ')' ?></td>
                <td id="td" <?php echo $RO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RO4_porcentaje . '% (' . $RO4 . ')' ?></td>
                <td id="td" <?php echo $RO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RO5_porcentaje . '% (' . $RO5 . ')' ?></td>
            </tr>
        </table>
    </div> 
    <div class="col-md-8 col-md-offset-2" align="center"><br>
        <p style="font-size:17px;font-family:verdanab;color:#000000">DIMENSIONES Y GRUPOS OCUPACIONALES</p>
        <p style="font-size:14px;font-family:verdanab;text-align:left;color:#48636a">Liderazgo y relaciones sociales en el trabajo</p>
        <table class="table_consolidados" style="width:100%">
            <tr>
                <th>Dimensiones</th>
                <th>Grupo Ocupacional</th>
                <th>Sin Riesgo</th>
                <th>Riesgo Bajo</th>
                <th>Riesgo Medio</th>
                <th>Riesgo Alto</th>
                <th>Riesgo muy Alto</th>
            </tr>
            <tr>
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Características del Liderazgo</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $CLJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CLJ1_porcentaje . '% (' . $CLJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $CLJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CLJ2_porcentaje . '% (' . $CLJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $CLJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CLJ3_porcentaje . '% (' . $CLJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $CLJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CLJ4_porcentaje . '% (' . $CLJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $CLJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CLJ5_porcentaje . '% (' . $CLJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $CLP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CLP1_porcentaje . '% (' . $CLP1 . ')' ?></td>
                <td id="td" <?php echo $CLP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CLP2_porcentaje . '% (' . $CLP2 . ')' ?></td>
                <td id="td" <?php echo $CLP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CLP3_porcentaje . '% (' . $CLP3 . ')' ?></td>
                <td id="td" <?php echo $CLP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CLP4_porcentaje . '% (' . $CLP4 . ')' ?></td>
                <td id="td" <?php echo $CLP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CLP5_porcentaje . '% (' . $CLP5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $CLA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CLA1_porcentaje . '% (' . $CLA1 . ')' ?></td>
                <td id="td" <?php echo $CLA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CLA2_porcentaje . '% (' . $CLA2 . ')' ?></td>
                <td id="td" <?php echo $CLA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CLA3_porcentaje . '% (' . $CLA3 . ')' ?></td>
                <td id="td" <?php echo $CLA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CLA4_porcentaje . '% (' . $CLA4 . ')' ?></td>
                <td id="td" <?php echo $CLA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CLA5_porcentaje . '% (' . $CLA5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $CLO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CLO1_porcentaje . '% (' . $CLO1 . ')' ?></td>
                <td id="td" <?php echo $CLO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CLO2_porcentaje . '% (' . $CLO2 . ')' ?></td>
                <td id="td" <?php echo $CLO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CLO3_porcentaje . '% (' . $CLO3 . ')' ?></td>
                <td id="td" <?php echo $CLO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CLO4_porcentaje . '% (' . $CLO4 . ')' ?></td>
                <td id="td" <?php echo $CLO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CLO5_porcentaje . '% (' . $CLO5 . ')' ?></td>
            </tr>
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Relaciones sociales en el trabajo</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $RSJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RSJ1_porcentaje . '% (' . $RSJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $RSJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RSJ2_porcentaje . '% (' . $RSJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $RSJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RSJ3_porcentaje . '% (' . $RSJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $RSJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RSJ4_porcentaje . '% (' . $RSJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $RSJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RSJ5_porcentaje . '% (' . $RSJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $RSP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RSP1_porcentaje . '% (' . $RSP1 . ')' ?></td>
                <td id="td" <?php echo $RSP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RSP2_porcentaje . '% (' . $RSP2 . ')' ?></td>
                <td id="td" <?php echo $RSP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RSP3_porcentaje . '% (' . $RSP3 . ')' ?></td>
                <td id="td" <?php echo $RSP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RSP4_porcentaje . '% (' . $RSP4 . ')' ?></td>
                <td id="td" <?php echo $RSP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RSP5_porcentaje . '% (' . $RSP5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $RSA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RSA1_porcentaje . '% (' . $RSA1 . ')' ?></td>
                <td id="td" <?php echo $RSA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RSA2_porcentaje . '% (' . $RSA2 . ')' ?></td>
                <td id="td" <?php echo $RSA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RSA3_porcentaje . '% (' . $RSA3 . ')' ?></td>
                <td id="td" <?php echo $RSA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RSA4_porcentaje . '% (' . $RSA4 . ')' ?></td>
                <td id="td" <?php echo $RSA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RSA5_porcentaje . '% (' . $RSA5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $RSO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RSO1_porcentaje . '% (' . $RSO1 . ')' ?></td>
                <td id="td" <?php echo $RSO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RSO2_porcentaje . '% (' . $RSO2 . ')' ?></td>
                <td id="td" <?php echo $RSO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RSO3_porcentaje . '% (' . $RSO3 . ')' ?></td>
                <td id="td" <?php echo $RSO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RSO4_porcentaje . '% (' . $RSO4 . ')' ?></td>
                <td id="td" <?php echo $RSO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RSO5_porcentaje . '% (' . $RSO5 . ')' ?></td>
            </tr> 
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span><span style="font-size:11px!important">Retroalimentación</span> del desempeño</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $RDJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RDJ1_porcentaje . '% (' . $RDJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $RDJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RDJ2_porcentaje . '% (' . $RDJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $RDJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RDJ3_porcentaje . '% (' . $RDJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $RDJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RDJ4_porcentaje . '% (' . $RDJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $RDJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RDJ5_porcentaje . '% (' . $RDJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $RDP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RDP1_porcentaje . '% (' . $RDP1 . ')' ?></td>
                <td id="td" <?php echo $RDP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RDP2_porcentaje . '% (' . $RDP2 . ')' ?></td>
                <td id="td" <?php echo $RDP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RDP3_porcentaje . '% (' . $RDP3 . ')' ?></td>
                <td id="td" <?php echo $RDP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RDP4_porcentaje . '% (' . $RDP4 . ')' ?></td>
                <td id="td" <?php echo $RDP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RDP5_porcentaje . '% (' . $RDP5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $RDA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RDA1_porcentaje . '% (' . $RDA1 . ')' ?></td>
                <td id="td" <?php echo $RDA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RDA2_porcentaje . '% (' . $RDA2 . ')' ?></td>
                <td id="td" <?php echo $RDA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RDA3_porcentaje . '% (' . $RDA3 . ')' ?></td>
                <td id="td" <?php echo $RDA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RDA4_porcentaje . '% (' . $RDA4 . ')' ?></td>
                <td id="td" <?php echo $RDA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RDA5_porcentaje . '% (' . $RDA5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $RDO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RDO1_porcentaje . '% (' . $RDO1 . ')' ?></td>
                <td id="td" <?php echo $RDO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RDO2_porcentaje . '% (' . $RDO2 . ')' ?></td>
                <td id="td" <?php echo $RDO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RDO3_porcentaje . '% (' . $RDO3 . ')' ?></td>
                <td id="td" <?php echo $RDO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RDO4_porcentaje . '% (' . $RDO4 . ')' ?></td>
                <td id="td" <?php echo $RDO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RDO5_porcentaje . '% (' . $RDO5 . ')' ?></td>
            </tr>            
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Relación con los colaboradores</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $RCJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RCJ1_porcentaje . '% (' . $RCJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $RCJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RCJ2_porcentaje . '% (' . $RCJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $RCJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RCJ3_porcentaje . '% (' . $RCJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $RCJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RCJ4_porcentaje . '% (' . $RCJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $RCJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RCJ5_porcentaje . '% (' . $RCJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $RCP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RCP1_porcentaje . '% (' . $RCP1 . ')' ?></td>
                <td id="td" <?php echo $RCP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RCP2_porcentaje . '% (' . $RCP2 . ')' ?></td>
                <td id="td" <?php echo $RCP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RCP3_porcentaje . '% (' . $RCP3 . ')' ?></td>
                <td id="td" <?php echo $RCP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RCP4_porcentaje . '% (' . $RCP4 . ')' ?></td>
                <td id="td" <?php echo $RCP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RCP5_porcentaje . '% (' . $RCP5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $RCA1c ?>><span class="subt2">Sin Riesgo: </span>No Aplica</td>
                <td id="td" <?php echo $RCA2c ?>><span class="subt2">Riesgo Bajo: </span>No Aplica</td>
                <td id="td" <?php echo $RCA3c ?>><span class="subt2">Riesgo Medio: </span>No Aplica</td>
                <td id="td" <?php echo $RCA4c ?>><span class="subt2">Riesgo Alto: </span>No Aplica</td>
                <td id="td" <?php echo $RCA5c ?>><span class="subt2">Riesgo muy Alto: </span>No Aplica</td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $RCO1c ?>><span class="subt2">Sin Riesgo: </span>No Aplica</td>
                <td id="td" <?php echo $RCO2c ?>><span class="subt2">Riesgo Bajo: </span>No Aplica</td>
                <td id="td" <?php echo $RCO3c ?>><span class="subt2">Riesgo Medio: </span>No Aplica</td>
                <td id="td" <?php echo $RCO4c ?>><span class="subt2">Riesgo Alto: </span>No Aplica</td>
                <td id="td" <?php echo $RCO5c ?>><span class="subt2">Riesgo muy Alto: </span>No Aplica</td>
            </tr> 
        </table><br>
        <p style="font-size:14px;font-family:verdanab;text-align:left;color:#48636a">Control sobre el Trabajo</p>
        <table class="table_consolidados" style="width:100%">
            <tr>
                <th>Dimensiones</th>
                <th>Grupo Ocupacional</th>
                <th>Sin Riesgo</th>
                <th>Riesgo Bajo</th>
                <th>Riesgo Medio</th>
                <th>Riesgo Alto</th>
                <th>Riesgo muy Alto</th>
            </tr>
            <tr>
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Claridad de rol</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $CRJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CRJ1_porcentaje . '% (' . $CRJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $CRJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CRJ2_porcentaje . '% (' . $CRJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $CRJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CRJ3_porcentaje . '% (' . $CRJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $CRJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CRJ4_porcentaje . '% (' . $CRJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $CRJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CRJ5_porcentaje . '% (' . $CRJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $CRP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CRP1_porcentaje . '% (' . $CRP1 . ')' ?></td>
                <td id="td" <?php echo $CRP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CRP2_porcentaje . '% (' . $CRP2 . ')' ?></td>
                <td id="td" <?php echo $CRP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CRP3_porcentaje . '% (' . $CRP3 . ')' ?></td>
                <td id="td" <?php echo $CRP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CRP4_porcentaje . '% (' . $CRP4 . ')' ?></td>
                <td id="td" <?php echo $CRP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CRP5_porcentaje . '% (' . $CRP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $CRA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CRA1_porcentaje . '% (' . $CRA1 . ')' ?></td>
                <td id="td" <?php echo $CRA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CRA2_porcentaje . '% (' . $CRA2 . ')' ?></td>
                <td id="td" <?php echo $CRA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CRA3_porcentaje . '% (' . $CRA3 . ')' ?></td>
                <td id="td" <?php echo $CRA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CRA4_porcentaje . '% (' . $CRA4 . ')' ?></td>
                <td id="td" <?php echo $CRA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CRA5_porcentaje . '% (' . $CRA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $CRO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CRO1_porcentaje . '% (' . $CRO1 . ')' ?></td>
                <td id="td" <?php echo $CRO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CRO2_porcentaje . '% (' . $CRO2 . ')' ?></td>
                <td id="td" <?php echo $CRO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CRO3_porcentaje . '% (' . $CRO3 . ')' ?></td>
                <td id="td" <?php echo $CRO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CRO4_porcentaje . '% (' . $CRO4 . ')' ?></td>
                <td id="td" <?php echo $CRO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CRO5_porcentaje . '% (' . $CRO5 . ')' ?></td>
            </tr>             
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Capacitación</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $CJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CJ1_porcentaje . '% (' . $CJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $CJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CJ2_porcentaje . '% (' . $CJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $CJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CJ3_porcentaje . '% (' . $CJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $CJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CJ4_porcentaje . '% (' . $CJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $CJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CJ5_porcentaje . '% (' . $CJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $CP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CP1_porcentaje . '% (' . $CP1 . ')' ?></td>
                <td id="td" <?php echo $CP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CP2_porcentaje . '% (' . $CP2 . ')' ?></td>
                <td id="td" <?php echo $CP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CP3_porcentaje . '% (' . $CP3 . ')' ?></td>
                <td id="td" <?php echo $CP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CP4_porcentaje . '% (' . $CP4 . ')' ?></td>
                <td id="td" <?php echo $CP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CP5_porcentaje . '% (' . $CP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $CA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CA1_porcentaje . '% (' . $CA1 . ')' ?></td>
                <td id="td" <?php echo $CA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CA2_porcentaje . '% (' . $CA2 . ')' ?></td>
                <td id="td" <?php echo $CA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CA3_porcentaje . '% (' . $CA3 . ')' ?></td>
                <td id="td" <?php echo $CA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CA4_porcentaje . '% (' . $CA4 . ')' ?></td>
                <td id="td" <?php echo $CA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CA5_porcentaje . '% (' . $CA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $CO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CO1_porcentaje . '% (' . $CO1 . ')' ?></td>
                <td id="td" <?php echo $CO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CO2_porcentaje . '% (' . $CO2 . ')' ?></td>
                <td id="td" <?php echo $CO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CO3_porcentaje . '% (' . $CO3 . ')' ?></td>
                <td id="td" <?php echo $CO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CO4_porcentaje . '% (' . $CO4 . ')' ?></td>
                <td id="td" <?php echo $CO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CO5_porcentaje . '% (' . $CO5 . ')' ?></td>
            </tr>            
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Participación y manejo del cambio</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $PMJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PMJ1_porcentaje . '% (' . $PMJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $PMJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PMJ2_porcentaje . '% (' . $PMJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $PMJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PMJ3_porcentaje . '% (' . $PMJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $PMJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PMJ4_porcentaje . '% (' . $PMJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $PMJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PMJ5_porcentaje . '% (' . $PMJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $PMP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PMP1_porcentaje . '% (' . $PMP1 . ')' ?></td>
                <td id="td" <?php echo $PMP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PMP2_porcentaje . '% (' . $PMP2 . ')' ?></td>
                <td id="td" <?php echo $PMP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PMP3_porcentaje . '% (' . $PMP3 . ')' ?></td>
                <td id="td" <?php echo $PMP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PMP4_porcentaje . '% (' . $PMP4 . ')' ?></td>
                <td id="td" <?php echo $PMP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PMP5_porcentaje . '% (' . $PMP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $PMA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PMA1_porcentaje . '% (' . $PMA1 . ')' ?></td>
                <td id="td" <?php echo $PMA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PMA2_porcentaje . '% (' . $PMA2 . ')' ?></td>
                <td id="td" <?php echo $PMA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PMA3_porcentaje . '% (' . $PMA3 . ')' ?></td>
                <td id="td" <?php echo $PMA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PMA4_porcentaje . '% (' . $PMA4 . ')' ?></td>
                <td id="td" <?php echo $PMA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PMA5_porcentaje . '% (' . $PMA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $PMO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PMO1_porcentaje . '% (' . $PMO1 . ')' ?></td>
                <td id="td" <?php echo $PMO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PMO2_porcentaje . '% (' . $PMO2 . ')' ?></td>
                <td id="td" <?php echo $PMO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PMO3_porcentaje . '% (' . $PMO3 . ')' ?></td>
                <td id="td" <?php echo $PMO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PMO4_porcentaje . '% (' . $PMO4 . ')' ?></td>
                <td id="td" <?php echo $PMO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PMO5_porcentaje . '% (' . $PMO5 . ')' ?></td>
            </tr>            
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Oportunidades para el uso y desarrollo de habiIidades y conocimientos</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $PDJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PDJ1_porcentaje . '% (' . $PDJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $PDJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PDJ2_porcentaje . '% (' . $PDJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $PDJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PDJ3_porcentaje . '% (' . $PDJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $PDJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PDJ4_porcentaje . '% (' . $PDJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $PDJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PDJ5_porcentaje . '% (' . $PDJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $PDP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PDP1_porcentaje . '% (' . $PDP1 . ')' ?></td>
                <td id="td" <?php echo $PDP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PDP2_porcentaje . '% (' . $PDP2 . ')' ?></td>
                <td id="td" <?php echo $PDP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PDP3_porcentaje . '% (' . $PDP3 . ')' ?></td>
                <td id="td" <?php echo $PDP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PDP4_porcentaje . '% (' . $PDP4 . ')' ?></td>
                <td id="td" <?php echo $PDP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PDP5_porcentaje . '% (' . $PDP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $PDA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PDA1_porcentaje . '% (' . $PDA1 . ')' ?></td>
                <td id="td" <?php echo $PDA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PDA2_porcentaje . '% (' . $PDA2 . ')' ?></td>
                <td id="td" <?php echo $PDA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PDA3_porcentaje . '% (' . $PDA3 . ')' ?></td>
                <td id="td" <?php echo $PDA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PDA4_porcentaje . '% (' . $PDA4 . ')' ?></td>
                <td id="td" <?php echo $PDA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PDA5_porcentaje . '% (' . $PDA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $PDO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PDO1_porcentaje . '% (' . $PDO1 . ')' ?></td>
                <td id="td" <?php echo $PDO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PDO2_porcentaje . '% (' . $PDO2 . ')' ?></td>
                <td id="td" <?php echo $PDO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PDO3_porcentaje . '% (' . $PDO3 . ')' ?></td>
                <td id="td" <?php echo $PDO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PDO4_porcentaje . '% (' . $PDO4 . ')' ?></td>
                <td id="td" <?php echo $PDO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PDO5_porcentaje . '% (' . $PDO5 . ')' ?></td>
            </tr>            
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Control y autonomía sobre el trabajo</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $CAJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CAJ1_porcentaje . '% (' . $CAJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $CAJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CAJ2_porcentaje . '% (' . $CAJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $CAJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CAJ3_porcentaje . '% (' . $CAJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $CAJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CAJ4_porcentaje . '% (' . $CAJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $CAJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CAJ5_porcentaje . '% (' . $CAJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $CAP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CAP1_porcentaje . '% (' . $CAP1 . ')' ?></td>
                <td id="td" <?php echo $CAP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CAP2_porcentaje . '% (' . $CAP2 . ')' ?></td>
                <td id="td" <?php echo $CAP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CAP3_porcentaje . '% (' . $CAP3 . ')' ?></td>
                <td id="td" <?php echo $CAP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CAP4_porcentaje . '% (' . $CAP4 . ')' ?></td>
                <td id="td" <?php echo $CAP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CAP5_porcentaje . '% (' . $CAP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $CAA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CAA1_porcentaje . '% (' . $CAA1 . ')' ?></td>
                <td id="td" <?php echo $CAA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CAA2_porcentaje . '% (' . $CAA2 . ')' ?></td>
                <td id="td" <?php echo $CAA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CAA3_porcentaje . '% (' . $CAA3 . ')' ?></td>
                <td id="td" <?php echo $CAA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CAA4_porcentaje . '% (' . $CAA4 . ')' ?></td>
                <td id="td" <?php echo $CAA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CAA5_porcentaje . '% (' . $CAA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $CAO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CAO1_porcentaje . '% (' . $CAO1 . ')' ?></td>
                <td id="td" <?php echo $CAO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CAO2_porcentaje . '% (' . $CAO2 . ')' ?></td>
                <td id="td" <?php echo $CAO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CAO3_porcentaje . '% (' . $CAO3 . ')' ?></td>
                <td id="td" <?php echo $CAO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CAO4_porcentaje . '% (' . $CAO4 . ')' ?></td>
                <td id="td" <?php echo $CAO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CAO5_porcentaje . '% (' . $CAO5 . ')' ?></td>
            </tr>
        </table>    
    </div>
    <div class="col-md-8 col-md-offset-2" align="center"><br>
        <p style="font-size:14px;font-family:verdanab;text-align:left;color:#48636a">Demandas del Trabajo</p>
        <table class="table_consolidados" style="width:100%">
            <tr>
                <th>Dimensiones</th>
                <th>Grupo Ocupacional</th>
                <th>Sin Riesgo</th>
                <th>Riesgo Bajo</th>
                <th>Riesgo Medio</th>
                <th>Riesgo Alto</th>
                <th>Riesgo muy Alto</th>
            </tr>
            <tr>
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Demandas ambientales y de esfuerzo físico</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $DAEJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DAEJ1_porcentaje . '% (' . $DAEJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $DAEJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DAEJ2_porcentaje . '% (' . $DAEJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $DAEJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DAEJ3_porcentaje . '% (' . $DAEJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $DAEJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DAEJ4_porcentaje . '% (' . $DAEJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $DAEJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DAEJ5_porcentaje . '% (' . $DAEJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $DAEP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DAEP1_porcentaje . '% (' . $DAEP1 . ')' ?></td>
                <td id="td" <?php echo $DAEP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DAEP2_porcentaje . '% (' . $DAEP2 . ')' ?></td>
                <td id="td" <?php echo $DAEP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DAEP3_porcentaje . '% (' . $DAEP3 . ')' ?></td>
                <td id="td" <?php echo $DAEP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DAEP4_porcentaje . '% (' . $DAEP4 . ')' ?></td>
                <td id="td" <?php echo $DAEP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DAEP5_porcentaje . '% (' . $DAEP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $DAEA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DAEA1_porcentaje . '% (' . $DAEA1 . ')' ?></td>
                <td id="td" <?php echo $DAEA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DAEA2_porcentaje . '% (' . $DAEA2 . ')' ?></td>
                <td id="td" <?php echo $DAEA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DAEA3_porcentaje . '% (' . $DAEA3 . ')' ?></td>
                <td id="td" <?php echo $DAEA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DAEA4_porcentaje . '% (' . $DAEA4 . ')' ?></td>
                <td id="td" <?php echo $DAEA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DAEA5_porcentaje . '% (' . $DAEA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $DAEO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DAEO1_porcentaje . '% (' . $DAEO1 . ')' ?></td>
                <td id="td" <?php echo $DAEO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DAEO2_porcentaje . '% (' . $DAEO2 . ')' ?></td>
                <td id="td" <?php echo $DAEO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DAEO3_porcentaje . '% (' . $DAEO3 . ')' ?></td>
                <td id="td" <?php echo $DAEO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DAEO4_porcentaje . '% (' . $DAEO4 . ')' ?></td>
                <td id="td" <?php echo $DAEO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DAEO5_porcentaje . '% (' . $DAEO5 . ')' ?></td>
            </tr>
            
             <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Demandas emocionales</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $DEJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DEJ1_porcentaje . '% (' . $DEJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $DEJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DEJ2_porcentaje . '% (' . $DEJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $DEJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DEJ3_porcentaje . '% (' . $DEJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $DEJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DEJ4_porcentaje . '% (' . $DEJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $DEJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DEJ5_porcentaje . '% (' . $DEJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $DEP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DEP1_porcentaje . '% (' . $DEP1 . ')' ?></td>
                <td id="td" <?php echo $DEP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DEP2_porcentaje . '% (' . $DEP2 . ')' ?></td>
                <td id="td" <?php echo $DEP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DEP3_porcentaje . '% (' . $DEP3 . ')' ?></td>
                <td id="td" <?php echo $DEP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DEP4_porcentaje . '% (' . $DEP4 . ')' ?></td>
                <td id="td" <?php echo $DEP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DEP5_porcentaje . '% (' . $DEP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $DEA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DEA1_porcentaje . '% (' . $DEA1 . ')' ?></td>
                <td id="td" <?php echo $DEA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DEA2_porcentaje . '% (' . $DEA2 . ')' ?></td>
                <td id="td" <?php echo $DEA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DEA3_porcentaje . '% (' . $DEA3 . ')' ?></td>
                <td id="td" <?php echo $DEA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DEA4_porcentaje . '% (' . $DEA4 . ')' ?></td>
                <td id="td" <?php echo $DEA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DEA5_porcentaje . '% (' . $DEA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $DEO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DEO1_porcentaje . '% (' . $DEO1 . ')' ?></td>
                <td id="td" <?php echo $DEO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DEO2_porcentaje . '% (' . $DEO2 . ')' ?></td>
                <td id="td" <?php echo $DEO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DEO3_porcentaje . '% (' . $DEO3 . ')' ?></td>
                <td id="td" <?php echo $DEO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DEO4_porcentaje . '% (' . $DEO4 . ')' ?></td>
                <td id="td" <?php echo $DEO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DEO5_porcentaje . '% (' . $DEO5 . ')' ?></td>
            </tr>
            
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Demandas cuantitativas</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $DCJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DCJ1_porcentaje . '% (' . $DCJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $DCJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DCJ2_porcentaje . '% (' . $DCJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $DCJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DCJ3_porcentaje . '% (' . $DCJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $DCJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DCJ4_porcentaje . '% (' . $DCJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $DCJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DCJ5_porcentaje . '% (' . $DCJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $DCP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DCP1_porcentaje . '% (' . $DCP1 . ')' ?></td>
                <td id="td" <?php echo $DCP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DCP2_porcentaje . '% (' . $DCP2 . ')' ?></td>
                <td id="td" <?php echo $DCP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DCP3_porcentaje . '% (' . $DCP3 . ')' ?></td>
                <td id="td" <?php echo $DCP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DCP4_porcentaje . '% (' . $DCP4 . ')' ?></td>
                <td id="td" <?php echo $DCP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DCP5_porcentaje . '% (' . $DCP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $DCA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DCA1_porcentaje . '% (' . $DCA1 . ')' ?></td>
                <td id="td" <?php echo $DCA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DCA2_porcentaje . '% (' . $DCA2 . ')' ?></td>
                <td id="td" <?php echo $DCA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DCA3_porcentaje . '% (' . $DCA3 . ')' ?></td>
                <td id="td" <?php echo $DCA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DCA4_porcentaje . '% (' . $DCA4 . ')' ?></td>
                <td id="td" <?php echo $DCA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DCA5_porcentaje . '% (' . $DCA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $DCO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DCO1_porcentaje . '% (' . $DCO1 . ')' ?></td>
                <td id="td" <?php echo $DCO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DCO2_porcentaje . '% (' . $DCO2 . ')' ?></td>
                <td id="td" <?php echo $DCO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DCO3_porcentaje . '% (' . $DCO3 . ')' ?></td>
                <td id="td" <?php echo $DCO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DCO4_porcentaje . '% (' . $DCO4 . ')' ?></td>
                <td id="td" <?php echo $DCO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DCO5_porcentaje . '% (' . $DCO5 . ')' ?></td>
            </tr>
            
             <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Influencia del trabajo sobre el entorno extralaboral</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $ITJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ITJ1_porcentaje . '% (' . $ITJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $ITJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ITJ2_porcentaje . '% (' . $ITJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $ITJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ITJ3_porcentaje . '% (' . $ITJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $ITJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ITJ4_porcentaje . '% (' . $ITJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $ITJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ITJ5_porcentaje . '% (' . $ITJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $ITP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ITP1_porcentaje . '% (' . $ITP1 . ')' ?></td>
                <td id="td" <?php echo $ITP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ITP2_porcentaje . '% (' . $ITP2 . ')' ?></td>
                <td id="td" <?php echo $ITP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ITP3_porcentaje . '% (' . $ITP3 . ')' ?></td>
                <td id="td" <?php echo $ITP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ITP4_porcentaje . '% (' . $ITP4 . ')' ?></td>
                <td id="td" <?php echo $ITP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ITP5_porcentaje . '% (' . $ITP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $ITA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ITA1_porcentaje . '% (' . $ITA1 . ')' ?></td>
                <td id="td" <?php echo $ITA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ITA2_porcentaje . '% (' . $ITA2 . ')' ?></td>
                <td id="td" <?php echo $ITA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ITA3_porcentaje . '% (' . $ITA3 . ')' ?></td>
                <td id="td" <?php echo $ITA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ITA4_porcentaje . '% (' . $ITA4 . ')' ?></td>
                <td id="td" <?php echo $ITA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ITA5_porcentaje . '% (' . $ITA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $ITO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ITO1_porcentaje . '% (' . $ITO1 . ')' ?></td>
                <td id="td" <?php echo $ITO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ITO2_porcentaje . '% (' . $ITO2 . ')' ?></td>
                <td id="td" <?php echo $ITO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ITO3_porcentaje . '% (' . $ITO3 . ')' ?></td>
                <td id="td" <?php echo $ITO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ITO4_porcentaje . '% (' . $ITO4 . ')' ?></td>
                <td id="td" <?php echo $ITO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ITO5_porcentaje . '% (' . $ITO5 . ')' ?></td>
            </tr>
            
            
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Exigencias de responsabilidad del cargo</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $ERJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ERJ1_porcentaje . '% (' . $ERJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $ERJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ERJ2_porcentaje . '% (' . $ERJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $ERJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ERJ3_porcentaje . '% (' . $ERJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $ERJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ERJ4_porcentaje . '% (' . $ERJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $ERJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ERJ5_porcentaje . '% (' . $ERJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $ERP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ERP1_porcentaje . '% (' . $ERP1 . ')' ?></td>
                <td id="td" <?php echo $ERP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ERP2_porcentaje . '% (' . $ERP2 . ')' ?></td>
                <td id="td" <?php echo $ERP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ERP3_porcentaje . '% (' . $ERP3 . ')' ?></td>
                <td id="td" <?php echo $ERP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ERP4_porcentaje . '% (' . $ERP4 . ')' ?></td>
                <td id="td" <?php echo $ERP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ERP5_porcentaje . '% (' . $ERP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td"><span class="subt2">Sin Riesgo: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Bajo: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Medio: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Alto: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo muy Alto: </span>No Aplica</td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td"><span class="subt2">Sin Riesgo: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Bajo: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Medio: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Alto: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo muy Alto: </span>No Aplica</td>
            </tr>
            
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Demandas de carga mental</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $DCMJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DCMJ1_porcentaje . '% (' . $DCMJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $DCMJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DCMJ2_porcentaje . '% (' . $DCMJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $DCMJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DCMJ3_porcentaje . '% (' . $DCMJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $DCMJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DCMJ4_porcentaje . '% (' . $DCMJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $DCMJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DCMJ5_porcentaje . '% (' . $DCMJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $DCMP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DCMP1_porcentaje . '% (' . $DCMP1 . ')' ?></td>
                <td id="td" <?php echo $DCMP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DCMP2_porcentaje . '% (' . $DCMP2 . ')' ?></td>
                <td id="td" <?php echo $DCMP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DCMP3_porcentaje . '% (' . $DCMP3 . ')' ?></td>
                <td id="td" <?php echo $DCMP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DCMP4_porcentaje . '% (' . $DCMP4 . ')' ?></td>
                <td id="td" <?php echo $DCMP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DCMP5_porcentaje . '% (' . $DCMP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $DCMA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DCMA1_porcentaje . '% (' . $DCMA1 . ')' ?></td>
                <td id="td" <?php echo $DCMA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DCMA2_porcentaje . '% (' . $DCMA2 . ')' ?></td>
                <td id="td" <?php echo $DCMA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DCMA3_porcentaje . '% (' . $DCMA3 . ')' ?></td>
                <td id="td" <?php echo $DCMA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DCMA4_porcentaje . '% (' . $DCMA4 . ')' ?></td>
                <td id="td" <?php echo $DCMA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DCMA5_porcentaje . '% (' . $DCMA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $DCMO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DCMO1_porcentaje . '% (' . $DCMO1 . ')' ?></td>
                <td id="td" <?php echo $DCMO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DCMO2_porcentaje . '% (' . $DCMO2 . ')' ?></td>
                <td id="td" <?php echo $DCMO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DCMO3_porcentaje . '% (' . $DCMO3 . ')' ?></td>
                <td id="td" <?php echo $DCMO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DCMO4_porcentaje . '% (' . $DCMO4 . ')' ?></td>
                <td id="td" <?php echo $DCMO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DCMO5_porcentaje . '% (' . $DCMO5 . ')' ?></td>
            </tr>    
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Consistencia del rol</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $CRLJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CRLJ1_porcentaje . '% (' . $CRLJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $CRLJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CRLJ2_porcentaje . '% (' . $CRLJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $CRLJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CRLJ3_porcentaje . '% (' . $CRLJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $CRLJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CRLJ4_porcentaje . '% (' . $CRLJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $CRLJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CRLJ5_porcentaje . '% (' . $CRLJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $CRLP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CRLP1_porcentaje . '% (' . $CRLP1 . ')' ?></td>
                <td id="td" <?php echo $CRLP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CRLP2_porcentaje . '% (' . $CRLP2 . ')' ?></td>
                <td id="td" <?php echo $CRLP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CRLP3_porcentaje . '% (' . $CRLP3 . ')' ?></td>
                <td id="td" <?php echo $CRLP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CRLP4_porcentaje . '% (' . $CRLP4 . ')' ?></td>
                <td id="td" <?php echo $CRLP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CRLP5_porcentaje . '% (' . $CRLP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td"><span class="subt2">Sin Riesgo: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Bajo: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Medio: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Alto: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo muy Alto: </span>No Aplica</td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td"><span class="subt2">Sin Riesgo: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Bajo: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Medio: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo Alto: </span>No Aplica</td>
                <td id="td"><span class="subt2">Riesgo muy Alto: </span>No Aplica</td>
            </tr>
            
            <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Demandas de la jornada de trabajo</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $DJTJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DJTJ1_porcentaje . '% (' . $DJTJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $DJTJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DJTJ2_porcentaje . '% (' . $DJTJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $DJTJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DJTJ3_porcentaje . '% (' . $DJTJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $DJTJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DJTJ4_porcentaje . '% (' . $DJTJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $DJTJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DJTJ5_porcentaje . '% (' . $DJTJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $DJTP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DJTP1_porcentaje . '% (' . $DJTP1 . ')' ?></td>
                <td id="td" <?php echo $DJTP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DJTP2_porcentaje . '% (' . $DJTP2 . ')' ?></td>
                <td id="td" <?php echo $DJTP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DJTP3_porcentaje . '% (' . $DJTP3 . ')' ?></td>
                <td id="td" <?php echo $DJTP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DJTP4_porcentaje . '% (' . $DJTP4 . ')' ?></td>
                <td id="td" <?php echo $DJTP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DJTP5_porcentaje . '% (' . $DJTP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $DJTA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DJTA1_porcentaje . '% (' . $DJTA1 . ')' ?></td>
                <td id="td" <?php echo $DJTA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DJTA2_porcentaje . '% (' . $DJTA2 . ')' ?></td>
                <td id="td" <?php echo $DJTA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DJTA3_porcentaje . '% (' . $DJTA3 . ')' ?></td>
                <td id="td" <?php echo $DJTA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DJTA4_porcentaje . '% (' . $DJTA4 . ')' ?></td>
                <td id="td" <?php echo $DJTA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DJTA5_porcentaje . '% (' . $DJTA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $DJTO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DJTO1_porcentaje . '% (' . $DJTO1 . ')' ?></td>
                <td id="td" <?php echo $DJTO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DJTO2_porcentaje . '% (' . $DJTO2 . ')' ?></td>
                <td id="td" <?php echo $DJTO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DJTO3_porcentaje . '% (' . $DJTO3 . ')' ?></td>
                <td id="td" <?php echo $DJTO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DJTO4_porcentaje . '% (' . $DJTO4 . ')' ?></td>
                <td id="td" <?php echo $DJTO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DJTO5_porcentaje . '% (' . $DJTO5 . ')' ?></td>
            </tr>
        </table>
    </div> 
    <div class="col-md-8 col-md-offset-2" align="center"><br>
        <p style="font-size:14px;font-family:verdanab;text-align:left;color:#48636a">Recompensas</p>
        <table class="table_consolidados" style="width:100%">
            <tr>
                <th>Dimensiones</th>
                <th>Grupo Ocupacional</th>
                <th>Sin Riesgo</th>
                <th>Riesgo Bajo</th>
                <th>Riesgo Medio</th>
                <th>Riesgo Alto</th>
                <th>Riesgo muy Alto</th>
            </tr>
           <tr>
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Derivadas de la pertenencia a la organización y del trabajo que se realiza</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $RPJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RPJ1_porcentaje . '% (' . $RPJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $RPJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RPJ2_porcentaje . '% (' . $RPJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $RPJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RPJ3_porcentaje . '% (' . $RPJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $RPJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RPJ4_porcentaje . '% (' . $RPJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $RPJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RPJ5_porcentaje . '% (' . $RPJ5 . ')' ?></td>
            </tr>  
             <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $RPP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RPP1_porcentaje . '% (' . $RPP1 . ')' ?></td>
                <td id="td" <?php echo $RPP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RPP2_porcentaje . '% (' . $RPP2 . ')' ?></td>
                <td id="td" <?php echo $RPP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RPP3_porcentaje . '% (' . $RPP3 . ')' ?></td>
                <td id="td" <?php echo $RPP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RPP4_porcentaje . '% (' . $RPP4 . ')' ?></td>
                <td id="td" <?php echo $RPP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RPP5_porcentaje . '% (' . $RPP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $RPA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RPA1_porcentaje . '% (' . $RPA1 . ')' ?></td>
                <td id="td" <?php echo $RPA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RPA2_porcentaje . '% (' . $RPA2 . ')' ?></td>
                <td id="td" <?php echo $RPA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RPA3_porcentaje . '% (' . $RPA3 . ')' ?></td>
                <td id="td" <?php echo $RPA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RPA4_porcentaje . '% (' . $RPA4 . ')' ?></td>
                <td id="td" <?php echo $RPA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RPA5_porcentaje . '% (' . $RPA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $RPO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RPO1_porcentaje . '% (' . $RPO1 . ')' ?></td>
                <td id="td" <?php echo $RPO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RPO2_porcentaje . '% (' . $RPO2 . ')' ?></td>
                <td id="td" <?php echo $RPO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RPO3_porcentaje . '% (' . $RPO3 . ')' ?></td>
                <td id="td" <?php echo $RPO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RPO4_porcentaje . '% (' . $RPO4 . ')' ?></td>
                <td id="td" <?php echo $RPO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RPO5_porcentaje . '% (' . $RPO5 . ')' ?></td>
            </tr>
            
             <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensiones: </span>Reconocimiento y compensación</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $RYCJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RYCJ1_porcentaje . '% (' . $RYCJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $RYCJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RYCJ2_porcentaje . '% (' . $RYCJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $RYCJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RYCJ3_porcentaje . '% (' . $RYCJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $RYCJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RYCJ4_porcentaje . '% (' . $RYCJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $RYCJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RYCJ5_porcentaje . '% (' . $RYCJ5 . ')' ?></td>
            </tr>  
             <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $RYCP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RYCP1_porcentaje . '% (' . $RYCP1 . ')' ?></td>
                <td id="td" <?php echo $RYCP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RYCP2_porcentaje . '% (' . $RYCP2 . ')' ?></td>
                <td id="td" <?php echo $RYCP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RYCP3_porcentaje . '% (' . $RYCP3 . ')' ?></td>
                <td id="td" <?php echo $RYCP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RYCP4_porcentaje . '% (' . $RYCP4 . ')' ?></td>
                <td id="td" <?php echo $RYCP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RYCP5_porcentaje . '% (' . $RYCP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $RYCA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RYCA1_porcentaje . '% (' . $RYCA1 . ')' ?></td>
                <td id="td" <?php echo $RYCA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RYCA2_porcentaje . '% (' . $RYCA2 . ')' ?></td>
                <td id="td" <?php echo $RYCA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RYCA3_porcentaje . '% (' . $RYCA3 . ')' ?></td>
                <td id="td" <?php echo $RYCA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RYCA4_porcentaje . '% (' . $RYCA4 . ')' ?></td>
                <td id="td" <?php echo $RYCA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RYCA5_porcentaje . '% (' . $RYCA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $RYCO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RYCO1_porcentaje . '% (' . $RYCO1 . ')' ?></td>
                <td id="td" <?php echo $RYCO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RYCO2_porcentaje . '% (' . $RYCO2 . ')' ?></td>
                <td id="td" <?php echo $RYCO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RYCO3_porcentaje . '% (' . $RYCO3 . ')' ?></td>
                <td id="td" <?php echo $RYCO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RYCO4_porcentaje . '% (' . $RYCO4 . ')' ?></td>
                <td id="td" <?php echo $RYCO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RYCO5_porcentaje . '% (' . $RYCO5 . ')' ?></td>
            </tr>
        </table>  
        </div>
    <div class="col-md-8 col-md-offset-2" align="center"><br>
            <p style="font-size:17px;font-family:verdanab;color:#000000">CUESTIONARIO INTRALABORAL GENERAL</p>
             <table class="table_consolidados">
                <!-- ============ ENCABEZADOS ============ -->
                <thead>
                    <tr>
                        <th rowspan="2" class="col-dominio">DOMINIOS</th>
                        <th rowspan="2" class="col-dimension">DIMENSIONES</th>
                        <th colspan="2" class="col-grupo">Jefaturas, profesionales <br>y técnicos</th>
                        <th colspan="2" class="col-grupo">Asistentes y operarios</th>
                    </tr>
                    <tr>
                        <th class="col-sub">Puntaje</th>
                        <th class="col-sub">Nivel de Riesgo</th>
                        <th class="col-sub">Puntaje</th>
                        <th class="col-sub">Nivel de Riesgo</th>
                    </tr>
                </thead>
            
                <tbody>
                    <!-- ============ DOMINIO: LIDERAZGO ============ -->
                    <tr class="fila-dominio">
                        <td rowspan="5" class="celda-dominio">Liderazgo y relaciones <br>sociales en el trabajo</td>
                        <td class="celda-dimension">Características del liderazgo</td>
                        <td class="<?php echo $CLJPC ?>"><?php echo $CLJP ?></td>
                        <td class="<?php echo $CLJPC ?>"><?php echo $CLJPR ?></td>
                        <td class="<?php echo $CLAOC ?>"><?php echo $CLAO ?></td>
                        <td class="<?php echo $CLAOC ?>"><?php echo $CLAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Relaciones sociales en el trabajo</td>
                        <td class="<?php echo $RSJPC ?>"><?php echo $RSJP ?></td>
                        <td class="<?php echo $RSJPC ?>"><?php echo $RSJPR ?></td>
                        <td class="<?php echo $RSAOC ?>"><?php echo $RSAO ?></td>
                        <td class="<?php echo $RSAOC ?>"><?php echo $RSAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Retroalimentación del desempeño</td>
                        <td class="<?php echo $RDJPC ?>"><?php echo $RDJP ?></td>
                        <td class="<?php echo $RDJPC ?>"><?php echo $RDJPR ?></td>
                        <td class="<?php echo $RDAOC ?>"><?php echo $RDAO ?></td>
                        <td class="<?php echo $RDAOC ?>"><?php echo $RDAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Relación con los colaboradores</td>
                        <td class="<?php echo $RCJPC ?>"><?php echo $RCJP ?></td>
                        <td class="<?php echo $RCJPC ?>"><?php echo $RCJPR ?></td>
                        <td class="na">N/A</td>
                        <td class="na">N/A</td>
                    </tr>
                    <tr class="fila-total">
                        <td class="celda-total">TOTAL</td>
                        <td class="<?php echo $LRJPC ?>"><?php echo $LRJPa ?></td>
                        <td class="<?php echo $LRJPC ?>"><?php echo $LRJPR ?></td>
                        <td class="<?php echo $LRAOC ?>"><?php echo $LRAOb ?></td>
                        <td class="<?php echo $LRAOC ?>"><?php echo $LRJPR ?></td>
                    </tr>
            
                    <!-- ============ DOMINIO: CONTROL SOBRE EL TRABAJO ============ -->
                    <tr class="fila-dominio">
                        <td rowspan="6" class="celda-dominio">Control sobre el trabajo</td>
                        <td class="celda-dimension">Claridad del rol</td>
                        <td class="<?php echo $CRJPC ?>"><?php echo $CRJP ?></td>
                        <td class="<?php echo $CRJPC ?>"><?php echo $CRJPR ?></td>
                        <td class="<?php echo $CRAOC ?>"><?php echo $CRAO ?></td>
                        <td class="<?php echo $CRAOC ?>"><?php echo $CRAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Capacitación</td>
                        <td class="<?php echo $CJPC ?>"><?php echo $CJP ?></td>
                        <td class="<?php echo $CJPC ?>"><?php echo $CJPR ?></td>
                        <td class="<?php echo $CAOC ?>"><?php echo $CAO ?></td>
                        <td class="<?php echo $CAOC ?>"><?php echo $CAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Participación y manejo del cambio</td>
                        <td class="<?php echo $PMJPC ?>"><?php echo $PMJP ?></td>
                        <td class="<?php echo $PMJPC ?>"><?php echo $PMJPR ?></td>
                        <td class="<?php echo $PMAOC ?>"><?php echo $PMAO ?></td>
                        <td class="<?php echo $PMAOC ?>"><?php echo $PMAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Oportunidades de desarrollo y uso de habilidades y conocimientos</td>
                        <td class="<?php echo $PDJPC ?>"><?php echo $PDJP ?></td>
                        <td class="<?php echo $PDJPC ?>"><?php echo $PDJPR ?></td>
                        <td class="<?php echo $PDAOC ?>"><?php echo $PDAO ?></td>
                        <td class="<?php echo $PDAOC ?>"><?php echo $PDAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Control y autonomía sobre el trabajo</td>
                        <td class="<?php echo $CAJPC ?>"><?php echo $CAJP ?></td>
                        <td class="<?php echo $CAJPC ?>"><?php echo $CAJPR ?></td>
                        <td class="<?php echo $CAAOC ?>"><?php echo $CAAO ?></td>
                        <td class="<?php echo $CAAOC ?>"><?php echo $CAAOR ?></td>
                    </tr>
                    <tr class="fila-total">
                        <td class="celda-total">TOTAL</td>
                        <td class="<?php echo $CTJPC ?>"><?php echo $CTJPa ?></td>
                        <td class="<?php echo $CTJPC ?>"><?php echo $CTJPR ?></td>
                        <td class="<?php echo $CTAOC ?>"><?php echo $CTAOb ?></td>
                        <td class="<?php echo $CTAOC ?>"><?php echo $CTAOR ?></td>
                    </tr>
            
                    <!-- ============ DOMINIO: DEMANDAS DEL TRABAJO ============ -->
                    <tr class="fila-dominio">
                        <td rowspan="9" class="celda-dominio">Demandas del Trabajo</td>
                        <td class="celda-dimension">Demandas ambientales y de esfuerzo físico</td>
                        <td class="<?php echo $DAEJPC ?>"><?php echo $DAEJP ?></td>
                        <td class="<?php echo $DAEJPC ?>"><?php echo $DAEJPR ?></td>
                        <td class="<?php echo $DAEAOC ?>"><?php echo $DAEAO ?></td>
                        <td class="<?php echo $DAEAOC ?>"><?php echo $DAEAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Demandas emocionales</td>
                        <td class="<?php echo $DEJPC ?>"><?php echo $DEJP ?></td>
                        <td class="<?php echo $DEJPC ?>"><?php echo $DEJPR ?></td>
                        <td class="<?php echo $DEAOC ?>"><?php echo $DEAO ?></td>
                        <td class="<?php echo $DEAOC ?>"><?php echo $DEAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Demandas cuantitativas</td>
                        <td class="<?php echo $DCJPC ?>"><?php echo $DCJP ?></td>
                        <td class="<?php echo $DCJPC ?>"><?php echo $DCJPR ?></td>
                        <td class="<?php echo $DCAOC ?>"><?php echo $DCAO ?></td>
                        <td class="<?php echo $DCAOC ?>"><?php echo $DCAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Influencia del trabajo sobre el entorno extralaboral</td>
                        <td class="<?php echo $ITJPC ?>"><?php echo $ITJP ?></td>
                        <td class="<?php echo $ITJPC ?>"><?php echo $ITJPR ?></td>
                        <td class="<?php echo $ITAOC ?>"><?php echo $ITAO ?></td>
                        <td class="<?php echo $ITAOC ?>"><?php echo $ITAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Exigencias de responsabilidad del cargo</td>
                        <td class="<?php echo $ERJPC ?>"><?php echo $ERJP ?></td>
                        <td class="<?php echo $ERJPC ?>"><?php echo $ERJPR ?></td>
                        <td class="na">N/A</td>
                        <td class="na">N/A</td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Demandas de carga mental</td>
                        <td class="<?php echo $DCMJPC ?>"><?php echo $DCMJP ?></td>
                        <td class="<?php echo $DCMJPC ?>"><?php echo $DCMJPR ?></td>
                        <td class="<?php echo $DCMAOC ?>"><?php echo $DCMAO ?></td>
                        <td class="<?php echo $DCMAOC ?>"><?php echo $DCMAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Consistencia del rol</td>
                        <td class="<?php echo $CRLJPC ?>"><?php echo $CRLJP ?></td>
                        <td class="<?php echo $CRLJPC ?>"><?php echo $CRLJPR ?></td>
                        <td class="na">N/A</td>
                        <td class="na">N/A</td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Demandas de la jornada de trabajo</td>
                        <td class="<?php echo $DJTJPC ?>"><?php echo $DJTJP ?></td>
                        <td class="<?php echo $DJTJPC ?>"><?php echo $DJTJPR ?></td>
                        <td class="<?php echo $DJTAOC ?>"><?php echo $DJTAO ?></td>
                        <td class="<?php echo $DJTAOC ?>"><?php echo $DJTAOR ?></td>
                    </tr>
                    <tr class="fila-total">
                        <td class="celda-total">TOTAL</td>
                        <td class="<?php echo $DTJPC ?>"><?php echo $DTJPa ?></td>
                        <td class="<?php echo $DTJPC ?>"><?php echo $DTJPR ?></td>
                        <td class="<?php echo $DTAOC ?>"><?php echo $DTAOb ?></td>
                        <td class="<?php echo $DTAOC ?>"><?php echo $DTAOR ?></td>
                    </tr>
            
                    <!-- ============ DOMINIO: RECOMPENSAS ============ -->
                    <tr class="fila-dominio">
                        <td rowspan="3" class="celda-dominio">Recompensas</td>
                        <td class="celda-dimension">Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza</td>
                        <td class="<?php echo $RPJPC ?>"><?php echo $RPJP ?></td>
                        <td class="<?php echo $RPJPC ?>"><?php echo $RPJPR ?></td>
                        <td class="<?php echo $RPAOC ?>"><?php echo $RPAO ?></td>
                        <td class="<?php echo $RPAOC ?>"><?php echo $RPAOR ?></td>
                    </tr>
                    <tr>
                        <td class="celda-dimension">Reconocimiento y compensación</td>
                        <td class="<?php echo $RYCJPC ?>"><?php echo $RYCJP ?></td>
                        <td class="<?php echo $RYCJPC ?>"><?php echo $RYCJPR ?></td>
                        <td class="<?php echo $RYCAOC ?>"><?php echo $RYCAO ?></td>
                        <td class="<?php echo $RYCAOC ?>"><?php echo $RYCAOR ?></td>
                    </tr>
                    <tr class="fila-total">
                        <td class="celda-total">TOTAL</td>
                        <td class="<?php echo $RJPC ?>"><?php echo $RJPa ?></td>
                        <td class="<?php echo $RJPC ?>"><?php echo $RJPR ?></td>
                        <td class="<?php echo $RAOC ?>"><?php echo $RAOb ?></td>
                        <td class="<?php echo $RAOC ?>"><?php echo $RAOR ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <!--<div class="row" id="registro" align="center" style="min-height:10em"><br>
        <form>    
            <p id="analisis5v" style="text-align:justify;font-family:verdana;background:#ebf9fa;padding:1.9em;color:#000000"></p>
            <button class="task-editar" id="btnanalisis5" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
            <textarea class="note" id="analisis5" onKeyDown="valida_longitud5()" placeholder="..."></textarea><br>
            <p id="conteo5" align="right">&nbsp... <span id="contador5" style="font-family:verdanab;font-size:12px"></span></p>
            <input id="botonIA5" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
        </form>
    </div>-->
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
                window.location = "../psicosocial/intralaboral"
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
                        id_ += `${task2.id}`
                        Nit += `${task2.Nit}`
                        Razon += `${task2.Razon}`
                        Economica += `${task2.Economica}`
                        Telefono += `${task2.Telefono}`
                        Email += `${task2.Email}`
                        Direccion+= `${task2.Direccion}`
                        Departamento+= `${task2.Departamento}`
                        Ciudad+= `${task2.Ciudad}`
                        Sede+= `${task2.Sede}`
                        PersonaC+= `${task2.PersonaC}`
                        TelefonoC+= `${task2.TelefonoC}`
                        Profesional += `${task2.Profesional}`
                        Pregrado += `${task2.Pregrado}`
                        Posgrado += `${task2.Posgrado}`
                        Tarjeta += `${task2.Tarjeta}`
                        Licencia += `${task2.Licencia}`
                        Expedicion += `${task2.Expedicion}`
                        Activo+= `${task2.Activo}`
                        Archivo1+= `${task2.Archivo1}`
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
    $(document).ready(function () {
        $(".loader").fadeOut("slow");
        $('#analisis1').slideUp(1);
        $('#analisis2').slideUp(1);
        $('#analisis3').slideUp(1);
        $('#analisis4').slideUp(1);
        $('#analisis5').slideUp(1);
        $('#botonIA1').slideUp(1);
        $('#botonIA2').slideUp(1);
        $('#botonIA3').slideUp(1);
        $('#botonIA4').slideUp(1);
        $('#botonIA5').slideUp(1);
        $('#conteo1').slideUp(1);
        $('#conteo2').slideUp(1);
        $('#conteo3').slideUp(1);
        $('#conteo4').slideUp(1);
        $('#conteo5').slideUp(1);
        fetchTasks();
        valida_longitud1();
        valida_longitud2();
        valida_longitud3();
        valida_longitud4();
        valida_longitud5();
    });
    permitidos1 = 300
    function valida_longitud1(){
    num_caracteres1 = document.getElementById("analisis1").value.length
    contador = permitidos1 - num_caracteres1;
    document.getElementById('contador1').innerHTML = contador;
    if (num_caracteres > permitidos1){
        document.getElementById("analisis1").value = contenido_textarea;
        document.getElementById('contador1').style.color="#e7744f";
    } else {
        contenido_textarea = document.getElementById("analisis1").value;
        document.getElementById('contador1').style.color="#333333";
       }
    };
    permitidos2 = 450
    function valida_longitud2(){
    num_caracteres2 = document.getElementById("analisis2").value.length
    contador = permitidos2 - num_caracteres2;
    document.getElementById('contador2').innerHTML = contador;
    if (num_caracteres > permitidos2){
        document.getElementById("analisis2").value = contenido_textarea;
        document.getElementById('contador2').style.color="#e7744f";
    } else {
        contenido_textarea = document.getElementById("analisis2").value;
        document.getElementById('contador2').style.color="#333333";
       }
    };
    permitidos3 = 450
    function valida_longitud3(){
    num_caracteres3 = document.getElementById("analisis3").value.length
    contador = permitidos3 - num_caracteres3;
    document.getElementById('contador3').innerHTML = contador;
    if (num_caracteres > permitidos3){
        document.getElementById("analisis3").value = contenido_textarea;
        document.getElementById('contador3').style.color="#e7744f";
    } else {
        contenido_textarea = document.getElementById("analisis3").value;
        document.getElementById('contador3').style.color="#333333";
       }
    };
    permitidos4 = 450
    function valida_longitud4(){
    num_caracteres4 = document.getElementById("analisis4").value.length
    contador = permitidos4 - num_caracteres4;
    document.getElementById('contador4').innerHTML = contador;
    if (num_caracteres > permitidos4){
        document.getElementById("analisis4").value = contenido_textarea;
        document.getElementById('contador4').style.color="#e7744f";
    } else {
        contenido_textarea = document.getElementById("analisis4").value;
        document.getElementById('contador4').style.color="#333333";
       }
    };
    permitidos5 = 450
    function valida_longitud5(){
    num_caracteres5 = document.getElementById("analisis5").value.length
    contador = permitidos5 - num_caracteres5;
    document.getElementById('contador5').innerHTML = contador;
    if (num_caracteres > permitidos5){
        document.getElementById("analisis5").value = contenido_textarea;
        document.getElementById('contador5').style.color="#e7744f";
    } else {
        contenido_textarea = document.getElementById("analisis5").value;
        document.getElementById('contador5').style.color="#333333";
       }
    };
     $("#btnanalisis1").click(function(e){
        e.preventDefault();
        $('#analisis1').slideDown(1);
        $('#botonIA1').slideDown(1);
        $('#conteo1').slideDown(1);
        $('#btnanalisis1').slideUp(1);
        $('#analisis1v').slideUp(1);
    });
    $("#btnanalisis2").click(function(e){
        e.preventDefault();
        $('#analisis2').slideDown(1);
        $('#botonIA2').slideDown(1);
        $('#conteo2').slideDown(1);
        $('#btnanalisis2').slideUp(1);
        $('#analisis2v').slideUp(1);
    });
    $("#btnanalisis3").click(function(e){
        e.preventDefault();
        $('#analisis3').slideDown(1);
        $('#botonIA3').slideDown(1);
        $('#conteo3').slideDown(1);
        $('#btnanalisis3').slideUp(1);
        $('#analisis3v').slideUp(1);
    });
    $("#btnanalisis4").click(function(e){
        e.preventDefault();
        $('#analisis4').slideDown(1);
        $('#botonIA4').slideDown(1);
        $('#conteo4').slideDown(1);
        $('#btnanalisis4').slideUp(1);
        $('#analisis4v').slideUp(1);
    });
    $("#btnanalisis5").click(function(e){
        e.preventDefault();
        $('#analisis5').slideDown(1);
        $('#botonIA5').slideDown(1);
        $('#conteo5').slideDown(1);
        $('#btnanalisis5').slideUp(1);
        $('#analisis5v').slideUp(1);
    });
      $(document).on('click', '#botonIA1', (e) => {
        e.preventDefault();
        const postData1 = {
            empresa1:'<?php echo $Razon  ?>',
            analisis1:$('#analisis1').val(),
        };
        console.log(postData1)
        const url = '../analisisbdg.php';
            $.post(url,  postData1, (response) => {
            fetchTasks();
            $('#analisis1').slideUp(1);
            $('#botonIA1').slideUp(1);
            $('#conteo1').slideUp(1);
      	    $('#analisis1v').slideDown(1);
            $('#btnanalisis1').slideDown(1);
        });
    });
    $(document).on('click', '#botonIA2', (e) => {
        e.preventDefault();
        const postData1 = {
            empresa2:'<?php echo $Razon  ?>',
            analisis2:$('#analisis2').val(),
        };
        const url = '../analisisbdg.php';
            $.post(url,  postData1, (response) => {
            fetchTasks();
            $('#analisis2').slideUp(1);
            $('#botonIA2').slideUp(1);
            $('#conteo2').slideUp(1);
      	    $('#analisis2v').slideDown(1);
            $('#btnanalisis2').slideDown(1);
        });
    });
    $(document).on('click', '#botonIA3', (e) => {
        e.preventDefault();
        const postData1 = {
            empresa3:'<?php echo $Razon  ?>',
            analisis3:$('#analisis3').val(),
        };
        const url = '../analisisbdg.php';
            $.post(url,  postData1, (response) => {
            fetchTasks();
            $('#analisis3').slideUp(1);
            $('#botonIA3').slideUp(1);
            $('#conteo3').slideUp(1);
      	    $('#analisis3v').slideDown(1);
            $('#btnanalisis3').slideDown(1);
        });
    });
    $(document).on('click', '#botonIA4', (e) => {
        e.preventDefault();
        const postData1 = {
            empresa4:'<?php echo $Razon  ?>',
            analisis4:$('#analisis4').val(),
        };
        const url = '../analisisbdg.php';
            $.post(url,  postData1, (response) => {
            fetchTasks();
            $('#analisis4').slideUp(1);
            $('#botonIA4').slideUp(1);
            $('#conteo4').slideUp(1);
      	    $('#analisis4v').slideDown(1);
            $('#btnanalisis4').slideDown(1);
        });
    });
    $(document).on('click', '#botonIA5', (e) => {
        e.preventDefault();
        const postData1 = {
            empresa5:'<?php echo $Razon  ?>',
            analisis5:$('#analisis5').val(),
        };
        const url = '../analisisbdg.php';
            $.post(url,  postData1, (response) => {
            fetchTasks();
            $('#analisis5').slideUp(1);
            $('#botonIA5').slideUp(1);
            $('#conteo5').slideUp(1);
      	    $('#analisis5v').slideDown(1);
            $('#btnanalisis5').slideDown(1);
        });
    });
    function fetchTasks() {    
        var empresa ='<?php echo $Razon ?>';
        $.ajax({
            type: "post",
            url: "../recanalisis.php",
            data: "empresa=" + empresa,
            befforesed: function(){
    		},
            success: function (response) {
                const tasksIA2 = JSON.parse(response);
                let analisis_1 = '';
                let analisis_2 = '';
                let analisis_3 = '';
                let analisis_4 = '';
                let analisis_5 = '';
                tasksIA2.forEach(taskIA2 => {
                        analisis_1 += `${taskIA2.analisis1}`
                        analisis_2 += `${taskIA2.analisis2}`
                        analisis_3 += `${taskIA2.analisis3}`
                        analisis_4 += `${taskIA2.analisis4}`
                        analisis_5 += `${taskIA2.analisis5}`
                });  
                    var analisis1 = analisis_1.replace(/<br [/][>]/g, "");
                    document.getElementById('analisis1').innerHTML = analisis1;
                    var analisis1v = analisis_1.replace(/<br[/][>]/g, "");
                    document.getElementById('analisis1v').innerHTML = analisis1v;
                    var analisis2 = analisis_2.replace(/<br [/][>]/g, "");
                    document.getElementById('analisis2').innerHTML = analisis2;
                    var analisis2v = analisis_2.replace(/<br[/][>]/g, "");
                    document.getElementById('analisis2v').innerHTML = analisis2v;
                    var analisis3 = analisis_3.replace(/<br [/][>]/g, "");
                    document.getElementById('analisis3').innerHTML = analisis3;
                    var analisis3v = analisis_3.replace(/<br[/][>]/g, "");
                    document.getElementById('analisis3v').innerHTML = analisis3v;
                    var analisis4 = analisis_4.replace(/<br [/][>]/g, "");
                    document.getElementById('analisis4').innerHTML = analisis4;
                    var analisis4v = analisis_4.replace(/<br[/][>]/g, "");
                    document.getElementById('analisis4v').innerHTML = analisis4v;
                    var analisis5 = analisis_5.replace(/<br [/][>]/g, "");
                    document.getElementById('analisis5').innerHTML = analisis5;
                    var analisis5v = analisis_5.replace(/<br[/][>]/g, "");
                    document.getElementById('analisis5v').innerHTML = analisis5v;
            },   
        });
    }
 /*   Highcharts.chart('JPT', {
       chart: {
           type: 'column',
           backgroundColor: false,
        },
        title: {
            text: 'JEFATURAS, PROFESIONALES Y TÉCNICOS',
            style: {
               fontFamily: 'Verdana',
               fontSize: '19px',
               color:'#333333'
           }
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit: <?php echo $Nit ?>   </span></p><br><p>Empleados evaluados: <span><?php echo $GJP ?> - Fecha: <?php echo $Fecha ?> - Intralaboral-Forma A</span></p>',
          style: {
               fontFamily: 'verdana',
               fontSize: '14px'
           }
        },
        xAxis: {
            type: 'category',
            labels: {
                style: {
                    fontSize: '13px',
                }
            },
        },
        yAxis: {
            title: {
              text: '',
            },
           labels: {
                style: {
                    fontSize: '12px',
                    fontFamily: 'verdana'
                }
            },
            min: 0,
            min:0, minRange:100, maxPadding:0,
            //gridLineWidth: 0,
            //minorGridLineWidth: 0
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' + 'Porcentaje: <b>{point.y}%</b><br/>'
        },
         plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f} %'
                }
            }
        },
        legend: {
            enabled: false
        },
        credits: {
            enabled: false
        },
        series: [
             {
            colorByPoint: true,
            data: [
            {
              name: "Sin Riesgo",
              color: '#394d00',
              y: <?php echo $GJP1_porcentaje ?>,
            },
            {
              name: "Bajo",
              color: '#739900',
              y: <?php echo $GJP2_porcentaje ?>,
            },
            {
              name: "Medio",
              color: '#666666',
              y: <?php echo $GJP3_porcentaje ?>,
            },
            {
              name: "Alto",
              color: '#e7744f',
              y: <?php echo $GJP4_porcentaje ?>,
            },
            {
              name: "Muy Alto",
              color: '#9d3715',
              y: <?php echo $GJP5_porcentaje ?>,
            }
          ],
           dataLabels: {
                    distance: 2,
                    style: {
            			fontSize: '14px',
            		},
                },
            }]
    });
    Highcharts.chart('dominios', {
        chart: {
            type: 'column',
            backgroundColor: false,
        },
        title: {
            text: 'DOMINIOS INTRALABORALES - A',
            style: {
               fontFamily: 'Verdana',
               fontSize: '19px',
               color:'#333333'
           }
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit: <?php echo $Nit ?>   </span></p><br><p>Empleados evaluados: <span><?php echo $GJP ?> - Fecha: <?php echo $Fecha ?> - Intralaboral-Forma A</span></p>',
          style: {
               fontFamily: 'verdana',
               fontSize: '14px'
           }
        },
          xAxis: {
            categories: [
              'Liderazgo y relaciones <br>sociales en el trabajo',
              'Control sobre el trabajo',
              'Demandas del Trabajo',
              'Recompensas '
            ],
            labels: {
                style: {fontSize: '13px',
                }
            }
          },
          yAxis: {
            min: 0,
            title: {
               text: 'Porcentaje (%)',
            },
            min: 0,
            min:0, minRange:100, maxPadding:0,
          },
          tooltip: {
            backgroundColor:'#ffffff',
            borderWidth: 1,
            borderColor:'#678e98',
            borderRadius:0,
            style: {opacity: 0.9},
            headerFormat: '<span style="font-size:14px">{point.key}</span><table class="etiquetas">',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:13px">{series.name}: </td>' + '<td style="padding:0;font-size:13px;color:#000000;text-align:right">  {point.y:.1f} %</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
          },
        plotOptions: {
            series: {
              borderWidth: 0,
              dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
              }
            }
         },
          credits: {
                enabled: false
            },
          series: [{
            name: 'Sin Riesgo',
            color: '#394d00',
            data: [<?php echo $LRJP1_porcentaje ?>, <?php echo $CTJP1_porcentaje ?>, <?php echo $DTJP1_porcentaje ?>, <?php echo $RJP1_porcentaje ?>]
        
          }, {
            name: 'Bajo',
            color: '#739900',
            data: [<?php echo $LRJP2_porcentaje ?>, <?php echo $CTJP2_porcentaje ?>, <?php echo $DTJP2_porcentaje ?>, <?php echo $RJP2_porcentaje ?>]

          }, {
            name: 'Medio',
            color: '#666666',
            data: [<?php echo $LRJP3_porcentaje ?>, <?php echo $CTJP3_porcentaje ?>, <?php echo $DTJP3_porcentaje ?>, <?php echo $RJP3_porcentaje ?>]
        
          }, {
            name: 'Alto',
            color: '#e7744f',
            data: [<?php echo $LRJP4_porcentaje ?>, <?php echo $CTJP4_porcentaje ?>, <?php echo $DTJP4_porcentaje ?>, <?php echo $RJP4_porcentaje ?>]
          }, {
            name: 'Muy Alto',
            color: '#9d3715',
            data: [<?php echo $LRJP5_porcentaje ?>, <?php echo $CTJP5_porcentaje ?>, <?php echo $DTJP5_porcentaje ?>, <?php echo $RJP5_porcentaje ?>]
          }]
    });
     Highcharts.chart('dominios2', {
        chart: {
            type: 'column',
            backgroundColor: false,
        },
        title: {
            text: 'DOMINIOS INTRALABORALES - B',
            style: {
               fontFamily: 'Verdana',
               fontSize: '19px',
               color:'#333333'
           }
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit: <?php echo $Nit ?>   </span></p><br><p>Empleados evaluados: <span><?php echo $GAO ?> - Fecha: <?php echo $Fecha ?> - Intralaboral-Forma B</span></p>',
          style: {
               fontFamily: 'verdana',
               fontSize: '14px'
           }
        },
        xAxis: {
            categories: [
              'Liderazgo y relaciones <br>sociales en el trabajo',
              'Control sobre el trabajo',
              'Demandas del Trabajo',
              'Recompensas '
            ],
            labels: {
                style: {fontSize: '13px',
                }
            }
          },
          yAxis: {
            min: 0,
            title: {
               text: 'Porcentaje (%)',
            },
            min: 0,
            min:0, minRange:100, maxPadding:0,
          },
          tooltip: {
            backgroundColor:'#ffffff',
            borderWidth: 1,
            borderColor:'#678e98',
            borderRadius:0,
            style: {opacity: 0.9},
            headerFormat: '<span style="font-size:14px">{point.key}</span><table class="etiquetas">',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:13px">{series.name}: </td>' + '<td style="padding:0;font-size:13px;color:#000000;text-align:right">  {point.y:.1f} %</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
          },
            plotOptions: {
            series: {
              borderWidth: 0,
              dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
              }
            }
         },
          credits: {
                enabled: false
            },
          series: [{
            name: 'Sin Riesgo',
            color: '#394d00',
            data: [<?php echo $LRAO1_porcentaje ?>, <?php echo $CTAO1_porcentaje ?>, <?php echo $DTAO1_porcentaje ?>, <?php echo $RAO1_porcentaje ?>]
        
          }, {
            name: 'Bajo',
            color: '#739900',
            data: [<?php echo $LRAO2_porcentaje ?>, <?php echo $CTAO2_porcentaje ?>, <?php echo $DTAO2_porcentaje ?>, <?php echo $RAO2_porcentaje ?>]

          }, {
            name: 'Medio',
            color: '#666666',
            data: [<?php echo $LRAO3_porcentaje ?>, <?php echo $CTAO3_porcentaje ?>, <?php echo $DTAO3_porcentaje ?>, <?php echo $RAO3_porcentaje ?>]
        
          }, {
            name: 'Alto',
            color: '#e7744f',
            data: [<?php echo $LRAO4_porcentaje ?>, <?php echo $CTAO4_porcentaje ?>, <?php echo $DTAO4_porcentaje ?>, <?php echo $RAO4_porcentaje ?>]
          }, {
            name: 'Muy Alto',
            color: '#9d3715',
            data: [<?php echo $LRAO5_porcentaje ?>, <?php echo $CTAO5_porcentaje ?>, <?php echo $DTAO5_porcentaje ?>, <?php echo $RAO5_porcentaje ?>]
          }]
    });
     Highcharts.chart('AOT', {
       chart: {
           type: 'column',
           backgroundColor: false,
        },
         title: {
            text: 'ASISTENTES, AUXILIARES Y OPERARIOS',
            style: {
                fontFamily: 'Verdana',
                fontSize: '19px',
                color:'#333333'
            }
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit: <?php echo $Nit ?>   </span></p><br><p>Empleados evaluados: <span><?php echo $GAO ?> - Fecha: <?php echo $Fecha ?> - Intralaboral-Forma B</span></p>',
          style: {
               fontFamily: 'verdana',
               fontSize: '14px'
           }
        },
        xAxis: {
            type: 'category',
            labels: {
                style: {
                    fontSize: '13px',
                }
            },
        },
        yAxis: {
            title: {
              text: '',
            },
           labels: {
                style: {
                    fontSize: '12px',
                    fontFamily: 'verdana'
                }
            },
            min: 0,
            min:0, minRange:100, maxPadding:0,
            //gridLineWidth: 0,
            //minorGridLineWidth: 0
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' + 'Porcentaje: <b>{point.y}%</b><br/>'
        },
        plotOptions: {
            series: {
              borderWidth: 0,
              dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
              }
            }
         },
        legend: {
            enabled: false
        },
        credits: {
            enabled: false
        },
        series: [
             {
            colorByPoint: true,
            data: [
            {
              name: "Sin Riesgo",
              color: '#394d00',
              y: <?php echo $GAO1_porcentaje ?>,
            },
            {
              name: "Bajo",
              color: '#739900',
              y: <?php echo $GAO2_porcentaje ?>,
            },
            {
              name: "Medio",
              color: '#666666',
              y: <?php echo $GAO3_porcentaje ?>,
            },
            {
              name: "Alto",
              color: '#e7744f',
              y: <?php echo $GAO4_porcentaje ?>,
            },
            {
              name: "Muy Alto",
              color: '#9d3715',
              y: <?php echo $GAO5_porcentaje ?>,
            }
          ],
           dataLabels: {
                    distance: 2,
                    style: {
            			fontSize: '14px',
            		},
                },
            }]
    });*/
var colors = Highcharts.getOptions().colors,
    categories = ['Sin Riesgo', 'Riesgo Bajo', 'Riesgo Medio', 'Riesgo Alto', 'Riesgo muy Alto'],
    data = [
        {
            y: <?php echo $GT1 ?>,
            color: '#394d00',
            borderColor: '#394d00',
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Sin Riesgo',
                categories: ['Sin Riesgo'],
                data: [<?php echo $GT1_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $GT2 ?>,
            color: '#739900',
            borderColor: '#739900',
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Riesgo Bajo',
                categories: ['Riesgo Bajo'],
                data: [<?php echo $GT2_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $GT3 ?>,
            color: '#666666',
            borderColor: '#666666',
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Riesgo Medio',
                categories: ['Riesgo Medio'],
                data: [<?php echo $GT3_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $GT4 ?>,
            color: '#e7744f',
            borderColor: '#e7744f',
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Riesgo Alto',
                categories: ['Riesgo Alto'],
                data: [<?php echo $GT4_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $GT5 ?>,
            color: '#9d3715',
            borderColor: '#9d3715',
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Riesgo muy Alto',
                categories: ['Riesgo muy Alto'],
                data: [<?php echo $GT5_porcentaje ?>],
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
    hayDatos = true; // Ajusta según tu lógica PHP: <?php echo ($GT1 + $GT2 + $GT3 + $GT4 + $GT5) > 0 ? 'true' : 'false' ?>;

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

Highcharts.chart('general', {
    chart: {
        type: 'pie',
        backgroundColor: 'transparent',
    },
    title: {
        text: 'Resultado Intralaboral General',
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
            shadow: false,
            center: ['50%', '50%'],
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
                    click: function () {
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

/* ============================================================
   DATOS
   ============================================================ */
var colores = {
    'Sin Riesgo': '#394d00',
    'Bajo':       '#739900',
    'Medio':      '#666666',
    'Alto':       '#e7744f',
    'Muy Alto':   '#9d3715'
};

/* ============================================================
   VARIABLES PHP → OBJETOS A y B
   ============================================================ */
var FORMA_A = {
    LR:  <?php echo (float)($LR_media  ?? 0); ?>,
    LRR: <?php echo json_encode((string)($LRR_media ?? '')); ?>,
    LRC: <?php echo json_encode((string)($LRC_media ?? '')); ?>,

    CL:  <?php echo (float)($CL_media  ?? 0); ?>,
    CLR: <?php echo json_encode((string)($CLR_media ?? '')); ?>,
    CLC: <?php echo json_encode((string)($CLC_media ?? '')); ?>,

    RS:  <?php echo (float)($RS_media  ?? 0); ?>,
    RSR: <?php echo json_encode((string)($RSR_media ?? '')); ?>,
    RSC: <?php echo json_encode((string)($RSC_media ?? '')); ?>,

    RD:  <?php echo (float)($RD_media  ?? 0); ?>,
    RDR: <?php echo json_encode((string)($RDR_media ?? '')); ?>,
    RDC: <?php echo json_encode((string)($RDC_media ?? '')); ?>,

    RC:  <?php echo (float)($RC_media  ?? 0); ?>,
    RCR: <?php echo json_encode((string)($RCR_media ?? '')); ?>,
    RCC: <?php echo json_encode((string)($RCC_media ?? '')); ?>,

    C:   <?php echo (float)($C_media  ?? 0); ?>,
    CR:  <?php echo json_encode((string)($CR_media ?? '')); ?>,
    CC:  <?php echo json_encode((string)($CC_media ?? '')); ?>,

    CDR:  <?php echo (float)($CDR_media  ?? 0); ?>,
    CDRR: <?php echo json_encode((string)($CDRR_media ?? '')); ?>,
    CDRC: <?php echo json_encode((string)($CDRC_media ?? '')); ?>,

    PM:  <?php echo (float)($PM_media ?? 0); ?>,
    PMR: <?php echo json_encode((string)($PMR_media ?? '')); ?>,
    PMC: <?php echo json_encode((string)($PMC_media ?? '')); ?>,

    PD:  <?php echo (float)($PD_media ?? 0); ?>,
    PDR: <?php echo json_encode((string)($PDR_media ?? '')); ?>,
    PDC: <?php echo json_encode((string)($PDC_media ?? '')); ?>,

    CA:  <?php echo (float)($CA_media ?? 0); ?>,
    CAR: <?php echo json_encode((string)($CAR_media ?? '')); ?>,
    CAC: <?php echo json_encode((string)($CAC_media ?? '')); ?>,

    DT:  <?php echo (float)($DT_media ?? 0); ?>,
    DTR: <?php echo json_encode((string)($DTR_media ?? '')); ?>,
    DTC: <?php echo json_encode((string)($DTC_media ?? '')); ?>,

    DAE:  <?php echo (float)($DAE_media ?? 0); ?>,
    DAER: <?php echo json_encode((string)($DAER_media ?? '')); ?>,
    DAEC: <?php echo json_encode((string)($DAEC_media ?? '')); ?>,

    DE:  <?php echo (float)($DE_media ?? 0); ?>,
    DER: <?php echo json_encode((string)($DER_media ?? '')); ?>,
    DEC: <?php echo json_encode((string)($DEC_media ?? '')); ?>,

    DC:  <?php echo (float)($DC_media ?? 0); ?>,
    DCR: <?php echo json_encode((string)($DCR_media ?? '')); ?>,
    DCC: <?php echo json_encode((string)($DCC_media ?? '')); ?>,

    IT:  <?php echo (float)($IT_media ?? 0); ?>,
    ITR: <?php echo json_encode((string)($ITR_media ?? '')); ?>,
    ITC: <?php echo json_encode((string)($ITC_media ?? '')); ?>,

    ER:  <?php echo (float)($ER_media ?? 0); ?>,
    ERR: <?php echo json_encode((string)($ERR_media ?? '')); ?>,
    ERC: <?php echo json_encode((string)($ERC_media ?? '')); ?>,

    DCM:  <?php echo (float)($DCM_media ?? 0); ?>,
    DCMR: <?php echo json_encode((string)($DCMR_media ?? '')); ?>,
    DCMC: <?php echo json_encode((string)($DCMC_media ?? '')); ?>,

    CRL:  <?php echo (float)($CRL_media ?? 0); ?>,
    CRLR: <?php echo json_encode((string)($CRLR_media ?? '')); ?>,
    CRLC: <?php echo json_encode((string)($CRLC_media ?? '')); ?>,

    DJT:  <?php echo (float)($DJT_media ?? 0); ?>,
    DJTR: <?php echo json_encode((string)($DJTR_media ?? '')); ?>,
    DJTC: <?php echo json_encode((string)($DJTC_media ?? '')); ?>,

    RE:  <?php echo (float)($RE_media ?? 0); ?>,
    RER: <?php echo json_encode((string)($RER_media ?? '')); ?>,
    REC: <?php echo json_encode((string)($REC_media ?? '')); ?>,

    RP:  <?php echo (float)($RP_media ?? 0); ?>,
    RPR: <?php echo json_encode((string)($RPR_media ?? '')); ?>,
    RPC: <?php echo json_encode((string)($RPC_media ?? '')); ?>,

    RYC:  <?php echo (float)($RYC_media ?? 0); ?>,
    RYCR: <?php echo json_encode((string)($RYCR_media ?? '')); ?>,
    RYCC: <?php echo json_encode((string)($RYCC_media ?? '')); ?>,

    TA:  <?php echo (int)($TA ?? 0); ?>,
    TAR: <?php echo json_encode((string)($TAR ?? '')); ?>,
    TAC: <?php echo json_encode((string)($TAC ?? '')); ?>
};

var FORMA_B = {
    LR:  <?php echo (float)($LRb_media  ?? 0); ?>,
    LRR: <?php echo json_encode((string)($LRbR_media ?? '')); ?>,
    LRC: <?php echo json_encode((string)($LRbC_media ?? '')); ?>,

    CL:  <?php echo (float)($CLb_media  ?? 0); ?>,
    CLR: <?php echo json_encode((string)($CLbR_media ?? '')); ?>,
    CLC: <?php echo json_encode((string)($CLbC_media ?? '')); ?>,

    RS:  <?php echo (float)($RSb_media  ?? 0); ?>,
    RSR: <?php echo json_encode((string)($RSbR_media ?? '')); ?>,
    RSC: <?php echo json_encode((string)($RSbC_media ?? '')); ?>,

    RD:  <?php echo (float)($RDb_media  ?? 0); ?>,
    RDR: <?php echo json_encode((string)($RDbR_media ?? '')); ?>,
    RDC: <?php echo json_encode((string)($RDbC_media ?? '')); ?>,

    C:   <?php echo (float)($Cb_media  ?? 0); ?>,
    CR:  <?php echo json_encode((string)($CbR_media ?? '')); ?>,
    CC:  <?php echo json_encode((string)($CbC_media ?? '')); ?>,

    CDR:  <?php echo (float)($CDRb_media  ?? 0); ?>,
    CDRR: <?php echo json_encode((string)($CDRbR_media ?? '')); ?>,
    CDRC: <?php echo json_encode((string)($CDRbC_media ?? '')); ?>,

    PM:  <?php echo (float)($PMb_media ?? 0); ?>,
    PMR: <?php echo json_encode((string)($PMbR_media ?? '')); ?>,
    PMC: <?php echo json_encode((string)($PMbC_media ?? '')); ?>,

    PD:  <?php echo (float)($PDb_media ?? 0); ?>,
    PDR: <?php echo json_encode((string)($PDbR_media ?? '')); ?>,
    PDC: <?php echo json_encode((string)($PDbC_media ?? '')); ?>,

    CA:  <?php echo (float)($CAb_media ?? 0); ?>,
    CAR: <?php echo json_encode((string)($CAbR_media ?? '')); ?>,
    CAC: <?php echo json_encode((string)($CAbC_media ?? '')); ?>,

    DT:  <?php echo (float)($DTb_media ?? 0); ?>,
    DTR: <?php echo json_encode((string)($DTbR_media ?? '')); ?>,
    DTC: <?php echo json_encode((string)($DTbC_media ?? '')); ?>,

    DAE:  <?php echo (float)($DAEb_media ?? 0); ?>,
    DAER: <?php echo json_encode((string)($DAEbR_media ?? '')); ?>,
    DAEC: <?php echo json_encode((string)($DAEbC_media ?? '')); ?>,

    DE:  <?php echo (float)($DEb_media ?? 0); ?>,
    DER: <?php echo json_encode((string)($DEbR_media ?? '')); ?>,
    DEC: <?php echo json_encode((string)($DEbC_media ?? '')); ?>,

    DC:  <?php echo (float)($DCb_media ?? 0); ?>,
    DCR: <?php echo json_encode((string)($DCbR_media ?? '')); ?>,
    DCC: <?php echo json_encode((string)($DCbC_media ?? '')); ?>,

    IT:  <?php echo (float)($ITb_media ?? 0); ?>,
    ITR: <?php echo json_encode((string)($ITbR_media ?? '')); ?>,
    ITC: <?php echo json_encode((string)($ITbC_media ?? '')); ?>,

    DCM:  <?php echo (float)($DCMb_media ?? 0); ?>,
    DCMR: <?php echo json_encode((string)($DCMbR_media ?? '')); ?>,
    DCMC: <?php echo json_encode((string)($DCMbC_media ?? '')); ?>,

    DJT:  <?php echo (float)($DJTb_media ?? 0); ?>,
    DJTR: <?php echo json_encode((string)($DJTbR_media ?? '')); ?>,
    DJTC: <?php echo json_encode((string)($DJTbC_media ?? '')); ?>,

    RE:  <?php echo (float)($REb_media ?? 0); ?>,
    RER: <?php echo json_encode((string)($REbR_media ?? '')); ?>,
    REC: <?php echo json_encode((string)($REbC_media ?? '')); ?>,

    RP:  <?php echo (float)($RPb_media ?? 0); ?>,
    RPR: <?php echo json_encode((string)($RPbR_media ?? '')); ?>,
    RPC: <?php echo json_encode((string)($RPbC_media ?? '')); ?>,

    RYC:  <?php echo (float)($RYCb_media ?? 0); ?>,
    RYCR: <?php echo json_encode((string)($RYCbR_media ?? '')); ?>,
    RYCC: <?php echo json_encode((string)($RYCbC_media ?? '')); ?>,

    TA:  <?php echo (int)($TB ?? 0); ?>,
    TAR: <?php echo json_encode((string)($TBR ?? '')); ?>,
    TAC: <?php echo json_encode((string)($TBC ?? '')); ?>
};

/* ============================================================
   ESTADO GLOBAL
   ============================================================ */
var V = FORMA_A;
window.nivelActual   = 'total';
window.historial     = ['total'];
window.dominioActivo = null;
window.chart         = null;
var dominios               = [];
var datosDominio           = [];
var drilldownSeriesLimpios = [];
var nivel0                 = null;

/* ============================================================
   UTILIDADES
   ============================================================ */
function getNivel(v){
    if(v<=10) return 'Sin Riesgo';
    if(v<=25) return 'Bajo';
    if(v<=50) return 'Medio';
    if(v<=75) return 'Alto';
    return 'Muy Alto';
}
function getColorPorNivel(n){ return colores[n] || '#999'; }
function buscarDominio(id){
    for(var i=0;i<dominios.length;i++){
        if(dominios[i].id===id || dominios[i].nombre===id || dominios[i].nombreCorto===id) return dominios[i];
    }
    return null;
}
function crearGradiente(color){
    var r=0,g=0,b=0,hex=color.substring(1);
    if(hex.length===3) hex=hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
    r=parseInt(hex.substring(0,2),16); g=parseInt(hex.substring(2,4),16); b=parseInt(hex.substring(4,6),16);
    return {
        linearGradient:{x1:0,y1:0,x2:0,y2:1},
        stops:[[0,'rgba('+r+','+g+','+b+',0.6)'],[0.5,'rgba('+r+','+g+','+b+',0.85)'],[1,'rgba('+r+','+g+','+b+',1)']]
    };
}
function obtenerNumero(nombre){
    for(var i=0;i<dominios.length;i++) if(dominios[i].nombre===nombre||dominios[i].nombreCorto===nombre) return i+1;
    for(var j=0;j<dominios.length;j++) for(var k=0;k<dominios[j].dimensiones.length;k++) if(dominios[j].dimensiones[k][0]===nombre) return k+1;
    return '';
}

/* ============================================================
   CONSTRUIR DOMINIOS SEGÚN LA FORMA ACTIVA
   ============================================================ */
function construirDominios(forma){
    var esA = (forma === 'A');

    var dLid = {
        id: 'liderazgo_dimensiones',
        nombre: 'Liderazgo y relaciones sociales',
        nombreCorto: '🤝 Liderazgo y relaciones',
        y: V.LR, nivel: V.LRR, color: V.LRC,
        dimensiones: [
            ['Características del liderazgo',     V.CL, V.CLR, V.CLC],
            ['Relaciones sociales en el trabajo', V.RS, V.RSR, V.RSC],
            ['Retroalimentación del desempeño',   V.RD, V.RDR, V.RDC]
        ]
    };
    if (esA) dLid.dimensiones.push(['Relación con los colaboradores', V.RC, V.RCR, V.RCC]);

    var dControl = {
        id: 'control_dimensiones',
        nombre: 'Control sobre el trabajo',
        nombreCorto: '⚙️ Control sobre el trabajo',
        y: V.C, nivel: V.CR, color: V.CC,
        dimensiones: [
            ['Claridad de rol',                                       V.CDR, V.CDRR, V.CDRC],
            ['Capacitación',                                          V.C,   V.CR,   V.CC],
            ['Participación y manejo del cambio',                     V.PM,  V.PMR,  V.PMC],
            ['Oportunidades para el uso y desarrollo de habilidades', V.PD,  V.PDR,  V.PDC],
            ['Control y autonomía sobre el trabajo',                  V.CA,  V.CAR,  V.CAC]
        ]
    };

    var dDem = {
        id: 'demandas_dimensiones',
        nombre: 'Demandas del trabajo',
        nombreCorto: '⚡ Demandas del trabajo',
        y: V.DT, nivel: V.DTR, color: V.DTC,
        dimensiones: [
            ['Demandas ambientales y de esfuerzo físico',            V.DAE, V.DAER, V.DAEC],
            ['Demandas emocionales',                                 V.DE,  V.DER,  V.DEC],
            ['Demandas cuantitativas',                               V.DC,  V.DCR,  V.DCC],
            ['Influencia del trabajo sobre el entorno extralaboral', V.IT,  V.ITR,  V.ITC]
        ]
    };
    if (esA) dDem.dimensiones.push(['Exigencias de responsabilidad del cargo', V.ER, V.ERR, V.ERC]);
    dDem.dimensiones.push(['Demandas de carga mental', V.DCM, V.DCMR, V.DCMC]);
    if (esA) dDem.dimensiones.push(['Consistencia del rol', V.CRL, V.CRLR, V.CRLC]);
    dDem.dimensiones.push(['Demandas de la jornada de trabajo', V.DJT, V.DJTR, V.DJTC]);

    var dRec = {
        id: 'recompensas_dimensiones',
        nombre: 'Recompensas',
        nombreCorto: '🏆 Recompensas',
        y: V.RE, nivel: V.RER, color: V.REC,
        dimensiones: [
            ['Recompensas por pertenencia a la organización', V.RP,  V.RPR,  V.RPC],
            ['Reconocimiento y compensación',                 V.RYC, V.RYCR, V.RYCC]
        ]
    };

    return [dLid, dControl, dDem, dRec];
}

/* ============================================================
   RECONSTRUIR DATOS DE LA GRÁFICA
   ============================================================ */
function reconstruirDatos(){
    var forma = (V === FORMA_A) ? 'A' : 'B';
    dominios = construirDominios(forma);

    nivel0 = {
        name: '📂 Dominios',
        y: V.TA,
        drilldown: 'nivel_dominios',
        color: crearGradiente(V.TAC),
        nivel: V.TAR
    };

    datosDominio = dominios.map(function(d,i){
        return {
            name: d.nombreCorto,
            y: d.y,
            drilldown: d.id,
            color: crearGradiente(colores[d.nivel]),
            nivel: d.nivel,
            numero: i+1
        };
    });

    drilldownSeriesLimpios = dominios.map(function(d){
        return {
            id: d.id,
            name: d.nombreCorto,
            data: d.dimensiones.map(function(item,i2){
                var v = item[1], nv = item[2] || getNivel(v);
                return { name:item[0], y:v, color:crearGradiente(colores[nv]), nivel:nv, numero:i2+1 };
            })
        };
    });
}

/* ============================================================
   CONSTRUIR LA GRÁFICA
   ============================================================ */
function crearGrafica(){
    window.chart = Highcharts.chart('consolidado', {
        chart: {
            type: 'column',
            style: { fontFamily: '"Helvetica Neue", Helvetica, Arial, sans-serif' },
            backgroundColor: 'transparent',
            borderRadius: 16,
            spacing: [10, 10, 0, 10],
            marginBottom: 45,
            height: 340,
            events: {
                drilldown: function (e) {
                    if (e && e.point) {
                        var nombrePunto = e.point.name;
                        if (nombrePunto === '📂 Dominios') {
                            window.nivelActual = 'dominios';
                            if (window.historial[window.historial.length - 1] !== 'dominios') window.historial.push('dominios');
                            window.dominioActivo = null;
                        } else {
                            window.nivelActual = 'dimension';
                            if (window.historial[window.historial.length - 1] !== 'dimension') window.historial.push('dimension');
                            window.dominioActivo = buscarDominio(e.point.drilldown) || buscarDominio(nombrePunto);
                        }
                        actualizarBreadcrumbs();
                        actualizarLista(window.nivelActual);
                        var b = document.getElementById('burbuja');
                        if (b) b.classList.add('oculta');
                    }
                    setTimeout(agregarEventosTouch, 300);
                },
                drillup: function () {
                    if (window.historial.length > 1) window.historial.pop();
                    window.nivelActual = window.historial[window.historial.length - 1] || 'total';
                    if (window.nivelActual === 'total' || window.nivelActual === 'dominios') window.dominioActivo = null;
                    actualizarBreadcrumbs();
                    actualizarLista(window.nivelActual);
                    var b = document.getElementById('burbuja');
                    if (b) {
                        if (window.nivelActual === 'total') b.classList.remove('oculta');
                        else b.classList.add('oculta');
                    }
                    setTimeout(agregarEventosTouch, 300);
                }
            }
        },
        title: { text: '' },
        subtitle: { text: '' },
        xAxis: {
            type: 'category',
            title: { text: '' },
            labels: {
                style: { fontSize: '14px', color: '#000000' },
                useHTML: true, rotation: 0, y: 22,
                formatter: function () {
                    var num = this.point ? this.point.numero : '';
                    if (!num && this.value) num = obtenerNumero(this.value);
                    if (num) return '<span style="display:inline-block;font-size:14px;font-weight:800;color:#000;background:#fdf7fd;width:28px;height:28px;line-height:28px;border-radius:50%;text-align:center;">' + num + '</span>';
                    return '';
                }
            },
            lineWidth: 0, tickWidth: 0, gridLineWidth: 0
        },
        yAxis: {
            title: { text: '' },
            min: 0, max: 100,
            startOnTick: false, endOnTick: false,
            labels: { enabled: false },
            gridLineColor: '#fdf7fd', gridLineWidth: 1
        },
        tooltip: {
            backgroundColor: 'rgba(255,255,255,0.95)',
            borderColor: '#b7ca56', borderRadius: 12,
            style: { fontFamily: '"Helvetica Neue", Helvetica, Arial, sans-serif', fontSize: '13px' },
            formatter: function () {
                var num = this.point.numero || obtenerNumero(this.point.name);
                var nombre = num ? '#' + num + ' - ' + this.point.name : this.point.name;
                var nivelPunto = this.point.nivel || getNivel(this.y);
                var colorPunto = getColorPorNivel(nivelPunto);
                return '<b>' + nombre + '</b><br/>' +
                       'Nivel: <b style="color:' + colorPunto + ';">' + nivelPunto + '</b><br/>' +
                       'Puntaje: <b>' + this.y + '</b>';
            }
        },
        plotOptions: {
            column: {
                cursor: 'pointer', threshold: 0,
                dataLabels: {
                    enabled: true, format: '{point.y}', position: 'top',
                    style: { color: '#000', fontSize: '18px', fontWeight: '800', textOutline: '1px 1px 2px rgba(255,255,255,0.8)' }
                },
                borderRadius: 6, borderWidth: 0,
                pointPadding: 0.2, groupPadding: 0.15,
                point: { events: { click: function () { handleBarClick(this); } } }
            }
        },
        series: [{
            name: 'Total', colorByPoint: true,
            data: [nivel0],
            dataLabels: {
                enabled: true, format: '{point.y}',
                style: { fontSize: '18px', fontWeight: '800', color: '#000', textOutline: '1px 1px 2px rgba(255,255,255,0.8)' }
            }
        }],
        drilldown: {
            series: [{ id:'nivel_dominios', name:'Dominios', data: datosDominio }].concat(drilldownSeriesLimpios),
            drillUpButton: {
                relativeTo: 'spacingBox',
                position: { y: 0, x: 0 },
                theme: {
                    fill: 'rgba(255,255,255,0.9)', stroke: '#b7ca56', strokeWidth: 1, r: 20,
                    style: { color: '#000', fontWeight: '600', fontSize: '16px', fontFamily: 'Verdana' }
                }
            }
        },
        credits: { enabled: false },
        exporting: {
            enabled: true,
            buttons: { contextButton: { theme: { fill: 'rgba(255,255,255,0.9)', stroke: 'rgba(183,202,86,0.2)', strokeWidth: 1, r: 6 } } }
        },
        legend: { enabled: false }
    });
}

/* ============================================================
   CAMBIO DE FORMA
   ============================================================ */
function cambiarForma(forma){
    V = (forma === 'B') ? FORMA_B : FORMA_A;
    reconstruirDatos();

    window.historial = ['total'];
    window.nivelActual = 'total';
    window.dominioActivo = null;

    if (window.chart) { window.chart.destroy(); window.chart = null; }
    crearGrafica();

    actualizarBreadcrumbs();
    actualizarLista('total');
    var b = document.getElementById('burbuja');
    if (b) b.classList.remove('oculta');
    setTimeout(agregarEventosTouch, 300);
}

/* ============================================================
   UI
   ============================================================ */
function actualizarNivelIndicador(){
    var icono = document.getElementById('nivel-icono');
    var texto = document.getElementById('nivel-texto');
    if(!icono||!texto) return;
    if(window.nivelActual==='total'){ icono.textContent='📊'; texto.textContent='Total'; }
    else if(window.nivelActual==='dominios'){ icono.textContent='📂'; texto.textContent='Dominios'; }
    else if(window.nivelActual==='dimension'&&window.dominioActivo){ icono.textContent='📋'; texto.textContent='Dimensión - '+window.dominioActivo.nombreCorto; }
}

function actualizarBreadcrumbs(){
    var c = document.getElementById('breadcrumbs-container');
    if(!c) return;
    if(window.nivelActual==='total'||window.nivelActual==='dominios'){
        c.innerHTML = '<span class="current">🏠 Inicio</span>';
    } else if(window.nivelActual==='dimension'&&window.dominioActivo){
        c.innerHTML = '<span onclick="irAInicio()" style="cursor:pointer;color:#0073e6;font-weight:500;">🏠 Inicio</span> <span class="separator">›</span> <span class="current">'+window.dominioActivo.nombreCorto+'</span>';
    }
    actualizarNivelIndicador();
}

function actualizarLista(nivelActual){
    var cont = document.getElementById('lista-contenido');
    var tit  = document.getElementById('lista-titulo');
    if(!cont) return;
    cont.style.display = 'block';
    var listaItems = document.getElementById('lista-items');
    if (listaItems) { listaItems.classList.remove('oculto'); listaItems.style.display = 'block'; }

    var html = '';
    if(nivelActual==='total'){
        if(tit) tit.innerHTML='📊 TOTAL RIESGO PSICOSOCIAL';
        html += '<div class="item-lista"><span class="numero">1</span><span class="nombre">Resultado</span><span class="nivel-riesgo" style="color:'+getColorPorNivel('Alto')+';">Alto</span></div>';
    } else if(nivelActual==='dominios'){
        if(tit) tit.innerHTML='📂 Dominios';
        dominios.forEach(function(d,i){
            html += '<div class="item-lista"><span class="numero">'+(i+1)+'</span><span class="nombre">'+d.nombre+'</span><span class="nivel-riesgo" style="color:'+getColorPorNivel(d.nivel)+';">'+d.nivel+'</span></div>';
        });
    } else if(nivelActual==='dimension'&&window.dominioActivo){
        var d = window.dominioActivo;
        if(tit) tit.innerHTML = d.nombreCorto;
        d.dimensiones.forEach(function(dim,i){
            var nv = dim[2] || getNivel(dim[1]);
            html += '<div class="item-lista"><span class="numero">'+(i+1)+'</span><span class="nombre">'+dim[0]+'</span><span class="nivel-riesgo" style="color:'+getColorPorNivel(nv)+';">'+nv+'</span></div>';
        });
    }
    cont.innerHTML = html;
}

/* ============================================================
   NAVEGACIÓN
   ============================================================ */
function handleBarClick(point){
    if(!point||!point.drilldown) return;
    var target = point.drilldown;
    var dom = buscarDominio(target) || buscarDominio(point.name);

    if(point.name==='📂 Dominios'||target==='nivel_dominios'){
        window.nivelActual='dominios';
        window.historial.push('dominios');
        window.dominioActivo=null;
    } else {
        window.nivelActual='dimension';
        window.historial.push('dimension');
        window.dominioActivo=dom;
    }
    actualizarBreadcrumbs();
    actualizarLista(window.nivelActual);
    var b = document.getElementById('burbuja');
    if(b) b.classList.add('oculta');

    if(typeof point.doDrilldown==='function') point.doDrilldown();
}

function irAInicio(){
    window.historial=['total'];
    window.nivelActual='total';
    window.dominioActivo=null;
    actualizarBreadcrumbs();
    actualizarLista('total');
    var b = document.getElementById('burbuja');
    if(b) b.classList.remove('oculta');

    if(window.chart){
        while(window.chart.series.length>1){
            window.chart.series[window.chart.series.length-1].remove(false);
        }
        window.chart.series[0].setData([nivel0],true);
        window.chart.xAxis[0].setCategories(['📂 Dominios']);
        window.chart.redraw();
    }
}

/* ============================================================
   TOUCH
   ============================================================ */
function agregarEventosTouch(){
    if(!window.chart) return;
    setTimeout(function(){
        try{
            window.chart.series.forEach(function(s){
                if(!s.points) return;
                s.points.forEach(function(p){
                    if(p && p.graphic && p.graphic.element){
                        var el = p.graphic.element;
                        if(p._th) el.removeEventListener('touchstart', p._th);
                        p._th = function(){ handleBarClick(this); }.bind(p);
                        el.addEventListener('touchstart', p._th, {passive:true});
                        el.style.cursor = 'pointer';
                    }
                });
            });
        }catch(e){ console.log('Touch error:',e); }
    },300);
}

/* ============================================================
   INICIALIZACIÓN
   ============================================================ */
function initUI(){
    actualizarBreadcrumbs();
    actualizarLista('total');
    var b = document.getElementById('burbuja');
    if(b) b.classList.remove('oculta');
    agregarEventosTouch();
}

function init(){
    reconstruirDatos();
    crearGrafica();

    var sel = document.getElementById('selectForma');
    if (sel) {
        sel.addEventListener('change', function(){
            cambiarForma(this.value);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function(){ setTimeout(initUI, 500); });
    } else {
        setTimeout(initUI, 500);
    }
    setTimeout(function(){ if(window.chart) window.chart.reflow(); initUI(); }, 1200);
}

init();

// Reflow al mostrar un modal Bootstrap (si aplica)
if (window.jQuery && jQuery.fn && jQuery.fn.modal) {
    jQuery(document).on('shown.bs.modal', '.modal', function(){
        setTimeout(function(){
            if(window.chart) window.chart.reflow();
            initUI();
        }, 250);
    });
}

Highcharts.addEvent(window.chart, 'drilldown', function(){ setTimeout(agregarEventosTouch,500); });
Highcharts.addEvent(window.chart, 'drillup',   function(){ setTimeout(agregarEventosTouch,500); });
window.addEventListener('resize', function(){
    setTimeout(function(){
        if(window.chart) window.chart.reflow();
        agregarEventosTouch();
    }, 500);
});
</script>
</script>
</body>
</html>
