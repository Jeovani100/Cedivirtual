<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Consolidado Extralaboral</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
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
        $TFJP0 = Consolidados3::TFJP(conexion::obtener_conexion());
        $TFJP = round($TFJP0, 1, PHP_ROUND_HALF_UP);
                     if ($TFJP > 50.1) {
                        $TFJPR= 'Muy Alto';
                        $TFJPC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($TFJP > 37.6) {
                        $TFJPR= 'Alto';
                        $TFJPC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($TFJP > 25.1) {
                        $TFJPR= 'Medio';
                        $TFJPC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($TFJP > 6.4 ) {
                        $TFJPR= 'Bajo';
                        $TFJPC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($TFJP > 0) {
                        $TFJPR= 'Sin Riesgo';
                        $TFJPC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $TFAO0 = Consolidados3::TFAO(conexion::obtener_conexion());
        $TFAO = round($TFAO0, 1, PHP_ROUND_HALF_UP);
                    if ($TFAO > 50.1) {
                        $TFAOR= 'Muy Alto';
                        $TFAOC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($TFAO > 37.6) {
                        $TFAOR= 'Alto';
                        $TFAOC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($TFAO > 25.1) {
                        $TFAOR= 'Medio';
                        $TFAOC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($TFAO > 6.4 ) {
                        $TFAOR= 'Bajo';
                        $TFAOC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($TFAO > 0) {
                        $TFAOR= 'Sin Riesgo';
                        $TFAOC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $RFJP0 = Consolidados3::RFJP(conexion::obtener_conexion());
        $RFJP = round($RFJP0, 1, PHP_ROUND_HALF_UP);
                    if ($RFJP > 50.1) {
                        $RFJPR= 'Muy Alto';
                        $RFJPC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($RFJP > 33.4) {
                        $RFJPR= 'Alto';
                        $RFJPC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($RFJP > 25.1) {
                        $RFJPR= 'Medio';
                        $RFJPC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($RFJP > 8.4) {
                        $RFJPR= 'Bajo';
                        $RFJPC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($RFJP > 0) {
                        $RFJPR= 'Sin Riesgo';
                        $RFJPC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $RFAO0 = Consolidados3::RFAO(conexion::obtener_conexion());
        $RFAO = round($RFAO0, 1, PHP_ROUND_HALF_UP);
                    if ($RFAO > 50.1) {
                        $RFAOR= 'Muy Alto';
                        $RFAOC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($RFAO > 33.4) {
                        $RFAOR= 'Alto';
                        $RFAOC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($RFAO > 25.1) {
                        $RFAOR= 'Medio';
                        $RFAOC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($RFAO > 8.4) {
                        $RFAOR= 'Bajo';
                        $RFAOC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($RFAO > 0) {
                        $RFAOR= 'Sin Riesgo';
                        $RFAOC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $CRIJP0 = Consolidados3::CRIJP(conexion::obtener_conexion());
        $CRIJP = round($CRIJP0, 1, PHP_ROUND_HALF_UP);
                    if ($CRIJP > 30.1) {
                        $CRIJPR= 'Muy Alto';
                        $CRIJPC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($CRIJP > 20.1) {
                        $CRIJPR= 'Alto';
                        $CRIJPC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($CRIJP > 10.1) {
                        $CRIJPR= 'Medio';
                        $CRIJPC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($CRIJP > 1) {
                        $CRIJPR= 'Bajo';
                        $CRIJPC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($CRIJP > 0) {
                        $CRIJPR= 'Sin Riesgo';
                        $CRIJPC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $CRIAO0 = Consolidados3::CRIAO(conexion::obtener_conexion());
        $CRIAO = round($CRIAO0, 1, PHP_ROUND_HALF_UP);            
                    if ($CRIAO > 35.1) {
                        $CRIAOR= 'Muy Alto';
                        $CRIAOC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($CRIAO > 25.1) {
                        $CRIAOR= 'Alto';
                        $CRIAOC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($CRIAO > 15.1) {
                        $CRIAOR= 'Medio';
                        $CRIAOC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($CRIAO > 5.1) {
                        $CRIAOR= 'Bajo';
                        $CRIAOC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($CRIAO > 0) {
                        $CRIAOR= 'Sin Riesgo';
                        $CRIAOC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $SEJP0 = Consolidados3::SEJP(conexion::obtener_conexion());
        $SEJP = round($SEJP0, 1, PHP_ROUND_HALF_UP);    
                    if ($SEJP > 50.1) {
                        $SEJPR= 'Muy Alto';
                        $SEJPC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($SEJP > 33.4) {
                        $SEJPR= 'Alto';
                        $SEJPC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($SEJP > 25.1) {
                        $SEJPR= 'Medio';
                        $SEJPC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($SEJP > 8.4) {
                        $SEJPR= 'Bajo';
                        $SEJPC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($SEJP > 0) {
                        $SEJPR= 'Sin Riesgo';
                        $SEJPC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $SEAO0 = Consolidados3::SEAO(conexion::obtener_conexion());
        $SEAO = round($SEAO0, 1, PHP_ROUND_HALF_UP); 
                    if ($SEAO > 50.1) {
                        $SEAOR= 'Muy Alto';
                        $SEAOC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($SEAO > 41.8) {
                        $SEAOR= 'Alto';
                        $SEAOC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($SEAO > 25.1) {
                        $SEAOR= 'Medio';
                        $SEAOC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($SEAO > 16.8) {
                        $SEAOR= 'Bajo';
                        $SEAOC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($SEAO > 0) {
                        $SEAOR= 'Sin Riesgo';
                        $SEAOC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $CVJP0 = Consolidados3::CVJP(conexion::obtener_conexion());
        $CVJP = round($CVJP0, 1, PHP_ROUND_HALF_UP);
                     if ($CVJP > 22.3) {
                        $CVJPR= 'Muy Alto';
                        $CVJPC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($CVJP > 14) {
                        $CVJPR= 'Alto';
                        $CVJPC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($CVJP > 11.2) {
                        $CVJPR= 'Medio';
                        $CVJPC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($CVJP > 5.7) {
                        $CVJPR= 'Bajo';
                        $CVJPC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($CVJP > 0) {
                        $CVJPR= 'Sin Riesgo';
                        $CVJPC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $CVAO0 = Consolidados3::CVAO(conexion::obtener_conexion());
        $CVAO = round($CVAO0, 1, PHP_ROUND_HALF_UP);
                    if ($CVAO > 27.9) {
                        $CVAOR= 'Muy Alto';
                        $CVAOC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($CVAO > 16.8) {
                        $CVAOR= 'Alto';
                        $CVAOC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($CVAO > 11.2) {
                        $CVAOR= 'Medio';
                        $CVAOC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($CVAO > 5.7) {
                        $CVAOR= 'Bajo';
                        $CVAOC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($CVAO > 0) {
                        $CVAOR= 'Sin Riesgo';
                        $CVAOC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $IEJP0 = Consolidados3::IEJP(conexion::obtener_conexion());
        $IEJP = round($IEJP0, 1, PHP_ROUND_HALF_UP);
                    if ($IEJP > 41.8) {
                        $IEJPR= 'Muy Alto';
                        $IEJPC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($IEJP > 25.1) {
                        $IEJPR= 'Alto';
                        $IEJPC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($IEJP > 16.8) {
                        $IEJPR= 'Medio';
                        $IEJPC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($IEJP > 8.4) {
                        $IEJPR= 'Bajo';
                        $IEJPC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($IEJP > 0) {
                        $IEJPR= 'Sin Riesgo';
                        $IEJPC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $IEAO0 = Consolidados3::IEAO(conexion::obtener_conexion());
        $IEAO = round($IEAO0, 1, PHP_ROUND_HALF_UP);
                    if ($IEAO > 41.8) {
                        $IEAOR= 'Muy Alto';
                        $IEAOC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($IEAO > 25.1) {
                        $IEAOR= 'Alto';
                        $IEAOC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($IEAO > 16.8) {
                        $IEAOR= 'Medio';
                        $IEAOC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($IEAO > 1) {
                        $IEAOR= 'Bajo';
                        $IEAOC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($IEAO > 0) {
                        $IEAOR= 'Sin Riesgo';
                        $IEAOC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $DVJP0 = Consolidados3::DVJP(conexion::obtener_conexion());
        $DVJP = round($DVJP0, 1, PHP_ROUND_HALF_UP);
                    if ($DVJP > 43.9) {
                        $DVJPR= 'Muy Alto';
                        $DVJPC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($DVJP > 25.1) {
                        $DVJPR= 'Alto';
                        $DVJPC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($DVJP > 12.6) {
                        $DVJPR= 'Medio';
                        $DVJPC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($DVJP > 1) {
                        $DVJPR= 'Bajo';
                        $DVJPC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($DVJP > 0) {
                        $DVJPR= 'Sin Riesgo';
                        $DVJPC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $DVAO0 = Consolidados3::DVAO(conexion::obtener_conexion());
        $DVAO = round($DVAO0, 1, PHP_ROUND_HALF_UP);
                    if ($DVAO > 43.9) {
                        $DVAOR= 'Muy Alto';
                        $DVAOC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($DVAO > 25.1) {
                        $DVAOR= 'Alto';
                        $DVAOC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($DVAO > 12.6) {
                        $DVAOR= 'Medio';
                        $DVAOC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($DVAO > 1) {
                        $DVAOR= 'Bajo';
                        $DVAOC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($DVAO > 0) {
                        $DVAOR= 'Sin Riesgo';
                        $DVAOC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $ExtraJP0 = Consolidados3::ExtraJP(conexion::obtener_conexion());
        $ExtraJP = round($ExtraJP0, 1, PHP_ROUND_HALF_UP);
                     if ($ExtraJP > 29.1) {
                        $ExtraJPR= 'Muy Alto';
                        $ExtraJPC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($ExtraJP > 22.7) {
                        $ExtraJPR= 'Alto';
                        $ExtraJPC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($ExtraJP > 17) {
                        $ExtraJPR= 'Medio';
                        $ExtraJPC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($ExtraJP > 11.4) {
                        $ExtraJPR= 'Bajo';
                        $ExtraJPC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($ExtraJP > 0) {
                        $ExtraJPR= 'Sin Riesgo';
                        $ExtraJPC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $ExtraAO0 = Consolidados3::ExtraAO(conexion::obtener_conexion());
        $ExtraAO = round($ExtraAO0, 1, PHP_ROUND_HALF_UP);
                    if ($ExtraAO > 32.4) {
                        $ExtraAOR= 'Muy Alto';
                        $ExtraAOC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
                    } elseif ($ExtraAO > 24.3) {
                        $ExtraAOR= 'Alto';
                        $ExtraAOC = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
                    } elseif ($ExtraAO > 17.8) {
                        $ExtraAOR= 'Medio';
                        $ExtraAOC = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
                    } elseif ($ExtraAO > 13) {
                        $ExtraAOR= 'Bajo';
                        $ExtraAOC = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
                    } elseif ($ExtraAO > 0) {
                        $ExtraAOR= 'Sin Riesgo';
                        $ExtraAOC = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
                    }
        $ETJ1 = Consolidados3::ETJ1(conexion::obtener_conexion());
        $ETJ2 = Consolidados3::ETJ2(conexion::obtener_conexion());
        $ETJ3 = Consolidados3::ETJ3(conexion::obtener_conexion());
        $ETJ4 = Consolidados3::ETJ4(conexion::obtener_conexion());
        $ETJ5 = Consolidados3::ETJ5(conexion::obtener_conexion());
        $ETP1 = Consolidados3::ETP1(conexion::obtener_conexion());
        $ETP2 = Consolidados3::ETP2(conexion::obtener_conexion());
        $ETP3 = Consolidados3::ETP3(conexion::obtener_conexion());
        $ETP4 = Consolidados3::ETP4(conexion::obtener_conexion());
        $ETP5 = Consolidados3::ETP5(conexion::obtener_conexion());
        $ETA1 = Consolidados3::ETA1(conexion::obtener_conexion());
        $ETA2 = Consolidados3::ETA2(conexion::obtener_conexion());
        $ETA3 = Consolidados3::ETA3(conexion::obtener_conexion());
        $ETA4 = Consolidados3::ETA4(conexion::obtener_conexion());
        $ETA5 = Consolidados3::ETA5(conexion::obtener_conexion());
        $ETO1 = Consolidados3::ETO1(conexion::obtener_conexion());
        $ETO2 = Consolidados3::ETO2(conexion::obtener_conexion());
        $ETO3 = Consolidados3::ETO3(conexion::obtener_conexion());
        $ETO4 = Consolidados3::ETO4(conexion::obtener_conexion());
        $ETO5 = Consolidados3::ETO5(conexion::obtener_conexion());
        $ET1 = $ETJ1 + $ETP1 + $ETA1+ $ETO1;
        $ET2 = $ETJ2 + $ETP2 + $ETA2+ $ETO2;
        $ET3 = $ETJ3 + $ETP3 + $ETA3+ $ETO3;
        $ET4 = $ETJ4 + $ETP4 + $ETA4+ $ETO4;
        $ET5 = $ETJ5 + $ETP5 + $ETA5+ $ETO5;
        $ET = $ET1 + $ET2 + $ET3 + $ET4 + $ET5;
        if ($ET1 == 0) {$ET1_porcentaje = 0;} else {$ET1_porcentaje = round((($ET1 * 100) / $ET), 1, PHP_ROUND_HALF_UP);}
        if ($ET2 == 0) {$ET2_porcentaje = 0;} else {$ET2_porcentaje = round((($ET2 * 100) / $ET), 1, PHP_ROUND_HALF_UP);}
        if ($ET3 == 0) {$ET3_porcentaje = 0;} else {$ET3_porcentaje = round((($ET3 * 100) / $ET), 1, PHP_ROUND_HALF_UP);}
        if ($ET4 == 0) {$ET4_porcentaje = 0;} else {$ET4_porcentaje = round((($ET4 * 100) / $ET), 1, PHP_ROUND_HALF_UP);}
        if ($ET5 == 0) {$ET5_porcentaje = 0;} else {$ET5_porcentaje = round((($ET5 * 100) / $ET), 1, PHP_ROUND_HALF_UP);}
        //Grupos ocupacionales
        $ETJ1 = Consolidados3::ETJ1(conexion::obtener_conexion());
        $ETJ2 = Consolidados3::ETJ2(conexion::obtener_conexion());
        $ETJ3 = Consolidados3::ETJ3(conexion::obtener_conexion());
        $ETJ4 = Consolidados3::ETJ4(conexion::obtener_conexion());
        $ETJ5 = Consolidados3::ETJ5(conexion::obtener_conexion());
        $ETJ = $ETJ1 + $ETJ2 + $ETJ3 + $ETJ4 + $ETJ5;
        if ($ETJ1 == 0) {$ETJ1_porcentaje = 0;} else {$ETJ1_porcentaje = round((($ETJ1 * 100) / $ETJ), 1, PHP_ROUND_HALF_UP);}
        if ($ETJ2 == 0) {$ETJ2_porcentaje = 0;} else {$ETJ2_porcentaje = round((($ETJ2 * 100) / $ETJ), 1, PHP_ROUND_HALF_UP);}
        if ($ETJ3 == 0) {$ETJ3_porcentaje = 0;} else {$ETJ3_porcentaje = round((($ETJ3 * 100) / $ETJ), 1, PHP_ROUND_HALF_UP);}
        if ($ETJ4 == 0) {$ETJ4_porcentaje = 0;} else {$ETJ4_porcentaje = round((($ETJ4 * 100) / $ETJ), 1, PHP_ROUND_HALF_UP);}
        if ($ETJ5 == 0) {$ETJ5_porcentaje = 0;} else {$ETJ5_porcentaje = round((($ETJ5 * 100) / $ETJ), 1, PHP_ROUND_HALF_UP);}
        if ($ETJ1 == 0) {$ETJ1_excel = 0;} else { $ETJ1_excel = round(($ETJ1  / $ETJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETJ2 == 0) {$ETJ2_excel = 0;} else { $ETJ2_excel = round(($ETJ2  / $ETJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETJ3 == 0) {$ETJ3_excel = 0;} else { $ETJ3_excel = round(($ETJ3  / $ETJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETJ4 == 0) {$ETJ4_excel = 0;} else { $ETJ4_excel = round(($ETJ4  / $ETJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETJ5 == 0) {$ETJ5_excel = 0;} else { $ETJ5_excel = round(($ETJ5  / $ETJ), 3, PHP_ROUND_HALF_UP) ;}
        $ETP1 = Consolidados3::ETP1(conexion::obtener_conexion());
        $ETP2 = Consolidados3::ETP2(conexion::obtener_conexion());
        $ETP3 = Consolidados3::ETP3(conexion::obtener_conexion());
        $ETP4 = Consolidados3::ETP4(conexion::obtener_conexion());
        $ETP5 = Consolidados3::ETP5(conexion::obtener_conexion());
        $ETP = $ETP1 + $ETP2 + $ETP3 + $ETP4 + $ETP5;
        if ($ETP1 == 0) {$ETP1_porcentaje = 0;} else {$ETP1_porcentaje = round((($ETP1 * 100) / $ETP), 1, PHP_ROUND_HALF_UP);}
        if ($ETP2 == 0) {$ETP2_porcentaje = 0;} else {$ETP2_porcentaje = round((($ETP2 * 100) / $ETP), 1, PHP_ROUND_HALF_UP);}
        if ($ETP3 == 0) {$ETP3_porcentaje = 0;} else {$ETP3_porcentaje = round((($ETP3 * 100) / $ETP), 1, PHP_ROUND_HALF_UP);}
        if ($ETP4 == 0) {$ETP4_porcentaje = 0;} else {$ETP4_porcentaje = round((($ETP4 * 100) / $ETP), 1, PHP_ROUND_HALF_UP);}
        if ($ETP5 == 0) {$ETP5_porcentaje = 0;} else {$ETP5_porcentaje = round((($ETP5 * 100) / $ETP), 1, PHP_ROUND_HALF_UP);}
        if ($ETP1 == 0) {$ETP1_excel = 0;} else { $ETP1_excel = round(($ETP1  / $ETP), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETP2 == 0) {$ETP2_excel = 0;} else { $ETP2_excel = round(($ETP2  / $ETP), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETP3 == 0) {$ETP3_excel = 0;} else { $ETP3_excel = round(($ETP3  / $ETP), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETP4 == 0) {$ETP4_excel = 0;} else { $ETP4_excel = round(($ETP4  / $ETP), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETP5 == 0) {$ETP5_excel = 0;} else { $ETP5_excel = round(($ETP5  / $ETP), 3, PHP_ROUND_HALF_UP) ;}
        $ETA1 = Consolidados3::ETA1(conexion::obtener_conexion());
        $ETA2 = Consolidados3::ETA2(conexion::obtener_conexion());
        $ETA3 = Consolidados3::ETA3(conexion::obtener_conexion());
        $ETA4 = Consolidados3::ETA4(conexion::obtener_conexion());
        $ETA5 = Consolidados3::ETA5(conexion::obtener_conexion());
        $ETA = $ETA1 + $ETA2 + $ETA3 + $ETA4 + $ETA5;
        if ($ETA1 == 0) {$ETA1_porcentaje = 0;} else {$ETA1_porcentaje = round((($ETA1 * 100) / $ETA), 1, PHP_ROUND_HALF_UP);}
        if ($ETA2 == 0) {$ETA2_porcentaje = 0;} else {$ETA2_porcentaje = round((($ETA2 * 100) / $ETA), 1, PHP_ROUND_HALF_UP);}
        if ($ETA3 == 0) {$ETA3_porcentaje = 0;} else {$ETA3_porcentaje = round((($ETA3 * 100) / $ETA), 1, PHP_ROUND_HALF_UP);}
        if ($ETA4 == 0) {$ETA4_porcentaje = 0;} else {$ETA4_porcentaje = round((($ETA4 * 100) / $ETA), 1, PHP_ROUND_HALF_UP);}
        if ($ETA5 == 0) {$ETA5_porcentaje = 0;} else {$ETA5_porcentaje = round((($ETA5 * 100) / $ETA), 1, PHP_ROUND_HALF_UP);}
        if ($ETA1 == 0) {$ETA1_excel = 0;} else { $ETA1_excel = round(($ETA1  / $ETA), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETA2 == 0) {$ETA2_excel = 0;} else { $ETA2_excel = round(($ETA2  / $ETA), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETA3 == 0) {$ETA3_excel = 0;} else { $ETA3_excel = round(($ETA3  / $ETA), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETA4 == 0) {$ETA4_excel = 0;} else { $ETA4_excel = round(($ETA4  / $ETA), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETA5 == 0) {$ETA5_excel = 0;} else { $ETA5_excel = round(($ETA5  / $ETA), 3, PHP_ROUND_HALF_UP) ;}
        $ETO1 = Consolidados3::ETO1(conexion::obtener_conexion());
        $ETO2 = Consolidados3::ETO2(conexion::obtener_conexion());
        $ETO3 = Consolidados3::ETO3(conexion::obtener_conexion());
        $ETO4 = Consolidados3::ETO4(conexion::obtener_conexion());
        $ETO5 = Consolidados3::ETO5(conexion::obtener_conexion());
        $ETO = $ETO1 + $ETO2 + $ETO3 + $ETO4 + $ETO5;
        if ($ETO1 == 0) {$ETO1_porcentaje = 0;} else {$ETO1_porcentaje = round((($ETO1 * 100) / $ETO), 1, PHP_ROUND_HALF_UP);}
        if ($ETO2 == 0) {$ETO2_porcentaje = 0;} else {$ETO2_porcentaje = round((($ETO2 * 100) / $ETO), 1, PHP_ROUND_HALF_UP);}
        if ($ETO3 == 0) {$ETO3_porcentaje = 0;} else {$ETO3_porcentaje = round((($ETO3 * 100) / $ETO), 1, PHP_ROUND_HALF_UP);}
        if ($ETO4 == 0) {$ETO4_porcentaje = 0;} else {$ETO4_porcentaje = round((($ETO4 * 100) / $ETO), 1, PHP_ROUND_HALF_UP);}
        if ($ETO5 == 0) {$ETO5_porcentaje = 0;} else {$ETO5_porcentaje = round((($ETO5 * 100) / $ETO), 1, PHP_ROUND_HALF_UP);}
        if ($ETO1 == 0) {$ETO1_excel = 0;} else { $ETO1_excel = round(($ETO1  / $ETO), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETO2 == 0) {$ETO2_excel = 0;} else { $ETO2_excel = round(($ETO2  / $ETO), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETO3 == 0) {$ETO3_excel = 0;} else { $ETO3_excel = round(($ETO3  / $ETO), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETO4 == 0) {$ETO4_excel = 0;} else { $ETO4_excel = round(($ETO4  / $ETO), 3, PHP_ROUND_HALF_UP) ;}
        if ($ETO5 == 0) {$ETO5_excel = 0;} else { $ETO5_excel = round(($ETO5  / $ETO), 3, PHP_ROUND_HALF_UP) ;}
        $TFJ1 = Consolidados3::TFJ1(conexion::obtener_conexion());
        $TFJ2 = Consolidados3::TFJ2(conexion::obtener_conexion());
        $TFJ3 = Consolidados3::TFJ3(conexion::obtener_conexion());
        $TFJ4 = Consolidados3::TFJ4(conexion::obtener_conexion());
        $TFJ5 = Consolidados3::TFJ5(conexion::obtener_conexion());
        $TFJ = $TFJ1 + $TFJ2 + $TFJ3 + $TFJ4 + $TFJ5;
        if ($TFJ1 == 0) {$TFJ1_porcentaje = 0;} else {$TFJ1_porcentaje = round((($TFJ1 * 100) / $TFJ), 1, PHP_ROUND_HALF_UP);}
        if ($TFJ2 == 0) {$TFJ2_porcentaje = 0;} else {$TFJ2_porcentaje = round((($TFJ2 * 100) / $TFJ), 1, PHP_ROUND_HALF_UP);}
        if ($TFJ3 == 0) {$TFJ3_porcentaje = 0;} else {$TFJ3_porcentaje = round((($TFJ3 * 100) / $TFJ), 1, PHP_ROUND_HALF_UP);}
        if ($TFJ4 == 0) {$TFJ4_porcentaje = 0;} else {$TFJ4_porcentaje = round((($TFJ4 * 100) / $TFJ), 1, PHP_ROUND_HALF_UP);}
        if ($TFJ5 == 0) {$TFJ5_porcentaje = 0;} else {$TFJ5_porcentaje = round((($TFJ5 * 100) / $TFJ), 1, PHP_ROUND_HALF_UP);}
        if ($TFJ1 == 0) {$TFJ1_excel = 0;} else { $TFJ1_excel = round(($TFJ1  / $TFJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFJ2 == 0) {$TFJ2_excel = 0;} else { $TFJ2_excel = round(($TFJ2  / $TFJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFJ3 == 0) {$TFJ3_excel = 0;} else { $TFJ3_excel = round(($TFJ3  / $TFJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFJ4 == 0) {$TFJ4_excel = 0;} else { $TFJ4_excel = round(($TFJ4  / $TFJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFJ5 == 0) {$TFJ5_excel = 0;} else { $TFJ5_excel = round(($TFJ5  / $TFJ), 3, PHP_ROUND_HALF_UP) ;}
        $TFP1 = Consolidados3::TFP1(conexion::obtener_conexion());
        $TFP2 = Consolidados3::TFP2(conexion::obtener_conexion());
        $TFP3 = Consolidados3::TFP3(conexion::obtener_conexion());
        $TFP4 = Consolidados3::TFP4(conexion::obtener_conexion());
        $TFP5 = Consolidados3::TFP5(conexion::obtener_conexion());
        $TFP = $TFP1 + $TFP2 + $TFP3 + $TFP4 + $TFP5;
        if ($TFP1 == 0) {$TFP1_porcentaje = 0;} else {$TFP1_porcentaje = round((($TFP1 * 100) / $TFP), 1, PHP_ROUND_HALF_UP);}
        if ($TFP2 == 0) {$TFP2_porcentaje = 0;} else {$TFP2_porcentaje = round((($TFP2 * 100) / $TFP), 1, PHP_ROUND_HALF_UP);}
        if ($TFP3 == 0) {$TFP3_porcentaje = 0;} else {$TFP3_porcentaje = round((($TFP3 * 100) / $TFP), 1, PHP_ROUND_HALF_UP);}
        if ($TFP4 == 0) {$TFP4_porcentaje = 0;} else {$TFP4_porcentaje = round((($TFP4 * 100) / $TFP), 1, PHP_ROUND_HALF_UP);}
        if ($TFP5 == 0) {$TFP5_porcentaje = 0;} else {$TFP5_porcentaje = round((($TFP5 * 100) / $TFP), 1, PHP_ROUND_HALF_UP);}
        if ($TFP1 == 0) {$TFP1_excel = 0;} else { $TFP1_excel = round(($TFP1  / $TFP), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFP2 == 0) {$TFP2_excel = 0;} else { $TFP2_excel = round(($TFP2  / $TFP), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFP3 == 0) {$TFP3_excel = 0;} else { $TFP3_excel = round(($TFP3  / $TFP), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFP4 == 0) {$TFP4_excel = 0;} else { $TFP4_excel = round(($TFP4  / $TFP), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFP5 == 0) {$TFP5_excel = 0;} else { $TFP5_excel = round(($TFP5  / $TFP), 3, PHP_ROUND_HALF_UP) ;}
        $TFA1 = Consolidados3::TFA1(conexion::obtener_conexion());
        $TFA2 = Consolidados3::TFA2(conexion::obtener_conexion());
        $TFA3 = Consolidados3::TFA3(conexion::obtener_conexion());
        $TFA4 = Consolidados3::TFA4(conexion::obtener_conexion());
        $TFA5 = Consolidados3::TFA5(conexion::obtener_conexion());
        $TFA = $TFA1 + $TFA2 + $TFA3 + $TFA4 + $TFA5;
        if ($TFA1 == 0) {$TFA1_porcentaje = 0;} else {$TFA1_porcentaje = round((($TFA1 * 100) / $TFA), 1, PHP_ROUND_HALF_UP);}
        if ($TFA2 == 0) {$TFA2_porcentaje = 0;} else {$TFA2_porcentaje = round((($TFA2 * 100) / $TFA), 1, PHP_ROUND_HALF_UP);}
        if ($TFA3 == 0) {$TFA3_porcentaje = 0;} else {$TFA3_porcentaje = round((($TFA3 * 100) / $TFA), 1, PHP_ROUND_HALF_UP);}
        if ($TFA4 == 0) {$TFA4_porcentaje = 0;} else {$TFA4_porcentaje = round((($TFA4 * 100) / $TFA), 1, PHP_ROUND_HALF_UP);}
        if ($TFA5 == 0) {$TFA5_porcentaje = 0;} else {$TFA5_porcentaje = round((($TFA5 * 100) / $TFA), 1, PHP_ROUND_HALF_UP);}
        if ($TFA1 == 0) {$TFA1_excel = 0;} else { $TFA1_excel = round(($TFA1  / $TFA), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFA2 == 0) {$TFA2_excel = 0;} else { $TFA2_excel = round(($TFA2  / $TFA), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFA3 == 0) {$TFA3_excel = 0;} else { $TFA3_excel = round(($TFA3  / $TFA), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFA4 == 0) {$TFA4_excel = 0;} else { $TFA4_excel = round(($TFA4  / $TFA), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFA5 == 0) {$TFA5_excel = 0;} else { $TFA5_excel = round(($TFA5  / $TFA), 3, PHP_ROUND_HALF_UP) ;}
        $TFO1 = Consolidados3::TFO1(conexion::obtener_conexion());
        $TFO2 = Consolidados3::TFO2(conexion::obtener_conexion());
        $TFO3 = Consolidados3::TFO3(conexion::obtener_conexion());
        $TFO4 = Consolidados3::TFO4(conexion::obtener_conexion());
        $TFO5 = Consolidados3::TFO5(conexion::obtener_conexion());
        $TFO = $TFO1 + $TFO2 + $TFO3 + $TFO4 + $TFO5;
        if ($TFO1 == 0) {$TFO1_porcentaje = 0;} else {$TFO1_porcentaje = round((($TFO1 * 100) / $TFO), 1, PHP_ROUND_HALF_UP);}
        if ($TFO2 == 0) {$TFO2_porcentaje = 0;} else {$TFO2_porcentaje = round((($TFO2 * 100) / $TFO), 1, PHP_ROUND_HALF_UP);}
        if ($TFO3 == 0) {$TFO3_porcentaje = 0;} else {$TFO3_porcentaje = round((($TFO3 * 100) / $TFO), 1, PHP_ROUND_HALF_UP);}
        if ($TFO4 == 0) {$TFO4_porcentaje = 0;} else {$TFO4_porcentaje = round((($TFO4 * 100) / $TFO), 1, PHP_ROUND_HALF_UP);}
        if ($TFO5 == 0) {$TFO5_porcentaje = 0;} else {$TFO5_porcentaje = round((($TFO5 * 100) / $TFO), 1, PHP_ROUND_HALF_UP);}
        if ($TFO1 == 0) {$TFO1_excel = 0;} else { $TFO1_excel = round(($TFO1  / $TFO), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFO2 == 0) {$TFO2_excel = 0;} else { $TFO2_excel = round(($TFO2  / $TFO), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFO3 == 0) {$TFO3_excel = 0;} else { $TFO3_excel = round(($TFO3  / $TFO), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFO4 == 0) {$TFO4_excel = 0;} else { $TFO4_excel = round(($TFO4  / $TFO), 3, PHP_ROUND_HALF_UP) ;}
        if ($TFO5 == 0) {$TFO5_excel = 0;} else { $TFO5_excel = round(($TFO5  / $TFO), 3, PHP_ROUND_HALF_UP) ;}
        $RFJ1 = Consolidados3::RFJ1(conexion::obtener_conexion());
        $RFJ2 = Consolidados3::RFJ2(conexion::obtener_conexion());
        $RFJ3 = Consolidados3::RFJ3(conexion::obtener_conexion());
        $RFJ4 = Consolidados3::RFJ4(conexion::obtener_conexion());
        $RFJ5 = Consolidados3::RFJ5(conexion::obtener_conexion());
        $RFJ = $RFJ1 + $RFJ2 + $RFJ3 + $RFJ4 + $RFJ5;
        if ($RFJ1 == 0) {$RFJ1_porcentaje = 0;} else {$RFJ1_porcentaje = round((($RFJ1 * 100) / $RFJ), 1, PHP_ROUND_HALF_UP);}
        if ($RFJ2 == 0) {$RFJ2_porcentaje = 0;} else {$RFJ2_porcentaje = round((($RFJ2 * 100) / $RFJ), 1, PHP_ROUND_HALF_UP);}
        if ($RFJ3 == 0) {$RFJ3_porcentaje = 0;} else {$RFJ3_porcentaje = round((($RFJ3 * 100) / $RFJ), 1, PHP_ROUND_HALF_UP);}
        if ($RFJ4 == 0) {$RFJ4_porcentaje = 0;} else {$RFJ4_porcentaje = round((($RFJ4 * 100) / $RFJ), 1, PHP_ROUND_HALF_UP);}
        if ($RFJ5 == 0) {$RFJ5_porcentaje = 0;} else {$RFJ5_porcentaje = round((($RFJ5 * 100) / $RFJ), 1, PHP_ROUND_HALF_UP);}
        if ($RFJ1 == 0) {$RFJ1_excel = 0;} else { $RFJ1_excel = round(($RFJ1  / $RFJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFJ2 == 0) {$RFJ2_excel = 0;} else { $RFJ2_excel = round(($RFJ2  / $RFJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFJ3 == 0) {$RFJ3_excel = 0;} else { $RFJ3_excel = round(($RFJ3  / $RFJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFJ4 == 0) {$RFJ4_excel = 0;} else { $RFJ4_excel = round(($RFJ4  / $RFJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFJ5 == 0) {$RFJ5_excel = 0;} else { $RFJ5_excel = round(($RFJ5  / $RFJ), 3, PHP_ROUND_HALF_UP) ;}
        $RFP1 = Consolidados3::RFP1(conexion::obtener_conexion());
        $RFP2 = Consolidados3::RFP2(conexion::obtener_conexion());
        $RFP3 = Consolidados3::RFP3(conexion::obtener_conexion());
        $RFP4 = Consolidados3::RFP4(conexion::obtener_conexion());
        $RFP5 = Consolidados3::RFP5(conexion::obtener_conexion());
        $RFP = $RFP1 + $RFP2 + $RFP3 + $RFP4 + $RFP5;
        if ($RFP1 == 0) {$RFP1_porcentaje = 0;} else {$RFP1_porcentaje = round((($RFP1 * 100) / $RFP), 1, PHP_ROUND_HALF_UP);}
        if ($RFP2 == 0) {$RFP2_porcentaje = 0;} else {$RFP2_porcentaje = round((($RFP2 * 100) / $RFP), 1, PHP_ROUND_HALF_UP);}
        if ($RFP3 == 0) {$RFP3_porcentaje = 0;} else {$RFP3_porcentaje = round((($RFP3 * 100) / $RFP), 1, PHP_ROUND_HALF_UP);}
        if ($RFP4 == 0) {$RFP4_porcentaje = 0;} else {$RFP4_porcentaje = round((($RFP4 * 100) / $RFP), 1, PHP_ROUND_HALF_UP);}
        if ($RFP5 == 0) {$RFP5_porcentaje = 0;} else {$RFP5_porcentaje = round((($RFP5 * 100) / $RFP), 1, PHP_ROUND_HALF_UP);}
        if ($RFP1 == 0) {$RFP1_excel = 0;} else { $RFP1_excel = round(($RFP1  / $RFP), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFP2 == 0) {$RFP2_excel = 0;} else { $RFP2_excel = round(($RFP2  / $RFP), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFP3 == 0) {$RFP3_excel = 0;} else { $RFP3_excel = round(($RFP3  / $RFP), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFP4 == 0) {$RFP4_excel = 0;} else { $RFP4_excel = round(($RFP4  / $RFP), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFP5 == 0) {$RFP5_excel = 0;} else { $RFP5_excel = round(($RFP5  / $RFP), 3, PHP_ROUND_HALF_UP) ;}
        $RFA1 = Consolidados3::RFA1(conexion::obtener_conexion());
        $RFA2 = Consolidados3::RFA2(conexion::obtener_conexion());
        $RFA3 = Consolidados3::RFA3(conexion::obtener_conexion());
        $RFA4 = Consolidados3::RFA4(conexion::obtener_conexion());
        $RFA5 = Consolidados3::RFA5(conexion::obtener_conexion());
        $RFA = $RFA1 + $RFA2 + $RFA3 + $RFA4 + $RFA5;
        if ($RFA1 == 0) {$RFA1_porcentaje = 0;} else {$RFA1_porcentaje = round((($RFA1 * 100) / $RFA), 1, PHP_ROUND_HALF_UP);}
        if ($RFA2 == 0) {$RFA2_porcentaje = 0;} else {$RFA2_porcentaje = round((($RFA2 * 100) / $RFA), 1, PHP_ROUND_HALF_UP);}
        if ($RFA3 == 0) {$RFA3_porcentaje = 0;} else {$RFA3_porcentaje = round((($RFA3 * 100) / $RFA), 1, PHP_ROUND_HALF_UP);}
        if ($RFA4 == 0) {$RFA4_porcentaje = 0;} else {$RFA4_porcentaje = round((($RFA4 * 100) / $RFA), 1, PHP_ROUND_HALF_UP);}
        if ($RFA5 == 0) {$RFA5_porcentaje = 0;} else {$RFA5_porcentaje = round((($RFA5 * 100) / $RFA), 1, PHP_ROUND_HALF_UP);}
        if ($RFA1 == 0) {$RFA1_excel = 0;} else { $RFA1_excel = round(($RFA1  / $RFA), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFA2 == 0) {$RFA2_excel = 0;} else { $RFA2_excel = round(($RFA2  / $RFA), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFA3 == 0) {$RFA3_excel = 0;} else { $RFA3_excel = round(($RFA3  / $RFA), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFA4 == 0) {$RFA4_excel = 0;} else { $RFA4_excel = round(($RFA4  / $RFA), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFA5 == 0) {$RFA5_excel = 0;} else { $RFA5_excel = round(($RFA5  / $RFA), 3, PHP_ROUND_HALF_UP) ;}
        $RFO1 = Consolidados3::RFO1(conexion::obtener_conexion());
        $RFO2 = Consolidados3::RFO2(conexion::obtener_conexion());
        $RFO3 = Consolidados3::RFO3(conexion::obtener_conexion());
        $RFO4 = Consolidados3::RFO4(conexion::obtener_conexion());
        $RFO5 = Consolidados3::RFO5(conexion::obtener_conexion());
        $RFO = $RFO1 + $RFO2 + $RFO3 + $RFO4 + $RFO5;
        if ($RFO1 == 0) {$RFO1_porcentaje = 0;} else {$RFO1_porcentaje = round((($RFO1 * 100) / $RFO), 1, PHP_ROUND_HALF_UP);}
        if ($RFO2 == 0) {$RFO2_porcentaje = 0;} else {$RFO2_porcentaje = round((($RFO2 * 100) / $RFO), 1, PHP_ROUND_HALF_UP);}
        if ($RFO3 == 0) {$RFO3_porcentaje = 0;} else {$RFO3_porcentaje = round((($RFO3 * 100) / $RFO), 1, PHP_ROUND_HALF_UP);}
        if ($RFO4 == 0) {$RFO4_porcentaje = 0;} else {$RFO4_porcentaje = round((($RFO4 * 100) / $RFO), 1, PHP_ROUND_HALF_UP);}
        if ($RFO5 == 0) {$RFO5_porcentaje = 0;} else {$RFO5_porcentaje = round((($RFO5 * 100) / $RFO), 1, PHP_ROUND_HALF_UP);}
        if ($RFO1 == 0) {$RFO1_excel = 0;} else { $RFO1_excel = round(($RFO1  / $RFO), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFO2 == 0) {$RFO2_excel = 0;} else { $RFO2_excel = round(($RFO2  / $RFO), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFO3 == 0) {$RFO3_excel = 0;} else { $RFO3_excel = round(($RFO3  / $RFO), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFO4 == 0) {$RFO4_excel = 0;} else { $RFO4_excel = round(($RFO4  / $RFO), 3, PHP_ROUND_HALF_UP) ;}
        if ($RFO5 == 0) {$RFO5_excel = 0;} else { $RFO5_excel = round(($RFO5  / $RFO), 3, PHP_ROUND_HALF_UP) ;}
        $CRIJ1 = Consolidados3::CRIJ1(conexion::obtener_conexion());
        $CRIJ2 = Consolidados3::CRIJ2(conexion::obtener_conexion());
        $CRIJ3 = Consolidados3::CRIJ3(conexion::obtener_conexion());
        $CRIJ4 = Consolidados3::CRIJ4(conexion::obtener_conexion());
        $CRIJ5 = Consolidados3::CRIJ5(conexion::obtener_conexion());
        $CRIJ = $CRIJ1 + $CRIJ2 + $CRIJ3 + $CRIJ4 + $CRIJ5;
        if ($CRIJ1 == 0) {$CRIJ1_porcentaje = 0;} else {$CRIJ1_porcentaje = round((($CRIJ1 * 100) / $CRIJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRIJ2 == 0) {$CRIJ2_porcentaje = 0;} else {$CRIJ2_porcentaje = round((($CRIJ2 * 100) / $CRIJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRIJ3 == 0) {$CRIJ3_porcentaje = 0;} else {$CRIJ3_porcentaje = round((($CRIJ3 * 100) / $CRIJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRIJ4 == 0) {$CRIJ4_porcentaje = 0;} else {$CRIJ4_porcentaje = round((($CRIJ4 * 100) / $CRIJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRIJ5 == 0) {$CRIJ5_porcentaje = 0;} else {$CRIJ5_porcentaje = round((($CRIJ5 * 100) / $CRIJ), 1, PHP_ROUND_HALF_UP);}
        if ($CRIJ1 == 0) {$CRIJ1_excel = 0;} else { $CRIJ1_excel = round(($CRIJ1  / $CRIJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIJ2 == 0) {$CRIJ2_excel = 0;} else { $CRIJ2_excel = round(($CRIJ2  / $CRIJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIJ3 == 0) {$CRIJ3_excel = 0;} else { $CRIJ3_excel = round(($CRIJ3  / $CRIJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIJ4 == 0) {$CRIJ4_excel = 0;} else { $CRIJ4_excel = round(($CRIJ4  / $CRIJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIJ5 == 0) {$CRIJ5_excel = 0;} else { $CRIJ5_excel = round(($CRIJ5  / $CRIJ), 3, PHP_ROUND_HALF_UP) ;}
        $CRIP1 = Consolidados3::CRIP1(conexion::obtener_conexion());
        $CRIP2 = Consolidados3::CRIP2(conexion::obtener_conexion());
        $CRIP3 = Consolidados3::CRIP3(conexion::obtener_conexion());
        $CRIP4 = Consolidados3::CRIP4(conexion::obtener_conexion());
        $CRIP5 = Consolidados3::CRIP5(conexion::obtener_conexion());
        $CRIP = $CRIP1 + $CRIP2 + $CRIP3 + $CRIP4 + $CRIP5;
        if ($CRIP1 == 0) {$CRIP1_porcentaje = 0;} else {$CRIP1_porcentaje = round((($CRIP1 * 100) / $CRIP), 1, PHP_ROUND_HALF_UP);}
        if ($CRIP2 == 0) {$CRIP2_porcentaje = 0;} else {$CRIP2_porcentaje = round((($CRIP2 * 100) / $CRIP), 1, PHP_ROUND_HALF_UP);}
        if ($CRIP3 == 0) {$CRIP3_porcentaje = 0;} else {$CRIP3_porcentaje = round((($CRIP3 * 100) / $CRIP), 1, PHP_ROUND_HALF_UP);}
        if ($CRIP4 == 0) {$CRIP4_porcentaje = 0;} else {$CRIP4_porcentaje = round((($CRIP4 * 100) / $CRIP), 1, PHP_ROUND_HALF_UP);}
        if ($CRIP5 == 0) {$CRIP5_porcentaje = 0;} else {$CRIP5_porcentaje = round((($CRIP5 * 100) / $CRIP), 1, PHP_ROUND_HALF_UP);}
        if ($CRIP1 == 0) {$CRIP1_excel = 0;} else { $CRIP1_excel = round(($CRIP1  / $CRIP), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIP2 == 0) {$CRIP2_excel = 0;} else { $CRIP2_excel = round(($CRIP2  / $CRIP), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIP3 == 0) {$CRIP3_excel = 0;} else { $CRIP3_excel = round(($CRIP3  / $CRIP), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIP4 == 0) {$CRIP4_excel = 0;} else { $CRIP4_excel = round(($CRIP4  / $CRIP), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIP5 == 0) {$CRIP5_excel = 0;} else { $CRIP5_excel = round(($CRIP5  / $CRIP), 3, PHP_ROUND_HALF_UP) ;}
        $CRIA1 = Consolidados3::CRIA1(conexion::obtener_conexion());
        $CRIA2 = Consolidados3::CRIA2(conexion::obtener_conexion());
        $CRIA3 = Consolidados3::CRIA3(conexion::obtener_conexion());
        $CRIA4 = Consolidados3::CRIA4(conexion::obtener_conexion());
        $CRIA5 = Consolidados3::CRIA5(conexion::obtener_conexion());
        $CRIA = $CRIA1 + $CRIA2 + $CRIA3 + $CRIA4 + $CRIA5;
        if ($CRIA1 == 0) {$CRIA1_porcentaje = 0;} else {$CRIA1_porcentaje = round((($CRIA1 * 100) / $CRIA), 1, PHP_ROUND_HALF_UP);}
        if ($CRIA2 == 0) {$CRIA2_porcentaje = 0;} else {$CRIA2_porcentaje = round((($CRIA2 * 100) / $CRIA), 1, PHP_ROUND_HALF_UP);}
        if ($CRIA3 == 0) {$CRIA3_porcentaje = 0;} else {$CRIA3_porcentaje = round((($CRIA3 * 100) / $CRIA), 1, PHP_ROUND_HALF_UP);}
        if ($CRIA4 == 0) {$CRIA4_porcentaje = 0;} else {$CRIA4_porcentaje = round((($CRIA4 * 100) / $CRIA), 1, PHP_ROUND_HALF_UP);}
        if ($CRIA5 == 0) {$CRIA5_porcentaje = 0;} else {$CRIA5_porcentaje = round((($CRIA5 * 100) / $CRIA), 1, PHP_ROUND_HALF_UP);}
        if ($CRIA1 == 0) {$CRIA1_excel = 0;} else { $CRIA1_excel = round(($CRIA1  / $CRIA), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIA2 == 0) {$CRIA2_excel = 0;} else { $CRIA2_excel = round(($CRIA2  / $CRIA), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIA3 == 0) {$CRIA3_excel = 0;} else { $CRIA3_excel = round(($CRIA3  / $CRIA), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIA4 == 0) {$CRIA4_excel = 0;} else { $CRIA4_excel = round(($CRIA4  / $CRIA), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIA5 == 0) {$CRIA5_excel = 0;} else { $CRIA5_excel = round(($CRIA5  / $CRIA), 3, PHP_ROUND_HALF_UP) ;}
        $CRIO1 = Consolidados3::CRIO1(conexion::obtener_conexion());
        $CRIO2 = Consolidados3::CRIO2(conexion::obtener_conexion());
        $CRIO3 = Consolidados3::CRIO3(conexion::obtener_conexion());
        $CRIO4 = Consolidados3::CRIO4(conexion::obtener_conexion());
        $CRIO5 = Consolidados3::CRIO5(conexion::obtener_conexion());
        $CRIO = $CRIO1 + $CRIO2 + $CRIO3 + $CRIO4 + $CRIO5;
        if ($CRIO1 == 0) {$CRIO1_excel = 0;} else {$CRIO1_porcentaje = round((($CRIO1 * 100) / $CRIO), 1, PHP_ROUND_HALF_UP);}
        if ($CRIO1 == 0) {$CRIO1_excel = 0;} else {$CRIO2_porcentaje = round((($CRIO2 * 100) / $CRIO), 1, PHP_ROUND_HALF_UP);}
        if ($CRIO1 == 0) {$CRIO1_excel = 0;} else {$CRIO3_porcentaje = round((($CRIO3 * 100) / $CRIO), 1, PHP_ROUND_HALF_UP);}
        if ($CRIO1 == 0) {$CRIO1_excel = 0;} else {$CRIO4_porcentaje = round((($CRIO4 * 100) / $CRIO), 1, PHP_ROUND_HALF_UP);}
        if ($CRIO1 == 0) {$CRIO1_excel = 0;} else {$CRIO5_porcentaje = round((($CRIO5 * 100) / $CRIO), 1, PHP_ROUND_HALF_UP);}
        if ($CRIO1 == 0) {$CRIO1_excel = 0;} else { $CRIO1_excel = round(($CRIO1  / $CRIO), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIO2 == 0) {$CRIO2_excel = 0;} else { $CRIO2_excel = round(($CRIO2  / $CRIO), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIO3 == 0) {$CRIO3_excel = 0;} else { $CRIO3_excel = round(($CRIO3  / $CRIO), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIO4 == 0) {$CRIO4_excel = 0;} else { $CRIO4_excel = round(($CRIO4  / $CRIO), 3, PHP_ROUND_HALF_UP) ;}
        if ($CRIO5 == 0) {$CRIO5_excel = 0;} else { $CRIO5_excel = round(($CRIO5  / $CRIO), 3, PHP_ROUND_HALF_UP) ;}
        $SEJ1 = Consolidados3::SEJ1(conexion::obtener_conexion());
        $SEJ2 = Consolidados3::SEJ2(conexion::obtener_conexion());
        $SEJ3 = Consolidados3::SEJ3(conexion::obtener_conexion());
        $SEJ4 = Consolidados3::SEJ4(conexion::obtener_conexion());
        $SEJ5 = Consolidados3::SEJ5(conexion::obtener_conexion());
        $SEJ = $SEJ1 + $SEJ2 + $SEJ3 + $SEJ4 + $SEJ5;
        if ($SEJ1 == 0) {$SEJ1_porcentaje = 0;} else { $SEJ1_porcentaje = round((($SEJ1 * 100) / $SEJ), 1, PHP_ROUND_HALF_UP);}
        if ($SEJ2 == 0) {$SEJ2_porcentaje = 0;} else { $SEJ2_porcentaje = round((($SEJ2 * 100) / $SEJ), 1, PHP_ROUND_HALF_UP);}
        if ($SEJ3 == 0) {$SEJ3_porcentaje = 0;} else { $SEJ3_porcentaje = round((($SEJ3 * 100) / $SEJ), 1, PHP_ROUND_HALF_UP);}
        if ($SEJ4 == 0) {$SEJ4_porcentaje = 0;} else { $SEJ4_porcentaje = round((($SEJ4 * 100) / $SEJ), 1, PHP_ROUND_HALF_UP);}
        if ($SEJ5 == 0) {$SEJ5_porcentaje = 0;} else { $SEJ5_porcentaje = round((($SEJ5 * 100) / $SEJ), 1, PHP_ROUND_HALF_UP);}
        if ($SEJ1 == 0) {$SEJ1_porcentaje = 0;} else { $SEJ1_excel = round(($SEJ1  / $SEJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEJ2 == 0) {$SEJ2_excel = 0;} else { $SEJ2_excel = round(($SEJ2  / $SEJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEJ3 == 0) {$SEJ3_excel = 0;} else { $SEJ3_excel = round(($SEJ3  / $SEJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEJ4 == 0) {$SEJ4_excel = 0;} else { $SEJ4_excel = round(($SEJ4  / $SEJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEJ5 == 0) {$SEJ5_excel = 0;} else { $SEJ5_excel = round(($SEJ5  / $SEJ), 3, PHP_ROUND_HALF_UP) ;}
        $SEP1 = Consolidados3::SEP1(conexion::obtener_conexion());
        $SEP2 = Consolidados3::SEP2(conexion::obtener_conexion());
        $SEP3 = Consolidados3::SEP3(conexion::obtener_conexion());
        $SEP4 = Consolidados3::SEP4(conexion::obtener_conexion());
        $SEP5 = Consolidados3::SEP5(conexion::obtener_conexion());
        $SEP = $SEP1 + $SEP2 + $SEP3 + $SEP4 + $SEP5;
        if ($SEP1 == 0) {$SEP1_porcentaje = 0;} else {$SEP1_porcentaje = round((($SEP1 * 100) / $SEP), 1, PHP_ROUND_HALF_UP);}
        if ($SEP2 == 0) {$SEP2_porcentaje = 0;} else {$SEP2_porcentaje = round((($SEP2 * 100) / $SEP), 1, PHP_ROUND_HALF_UP);}
        if ($SEP3 == 0) {$SEP3_porcentaje = 0;} else {$SEP3_porcentaje = round((($SEP3 * 100) / $SEP), 1, PHP_ROUND_HALF_UP);}
        if ($SEP4 == 0) {$SEP4_porcentaje = 0;} else {$SEP4_porcentaje = round((($SEP4 * 100) / $SEP), 1, PHP_ROUND_HALF_UP);}
        if ($SEP5 == 0) {$SEP5_porcentaje = 0;} else {$SEP5_porcentaje = round((($SEP5 * 100) / $SEP), 1, PHP_ROUND_HALF_UP);}
        if ($SEP1 == 0) {$SEP1_excel = 0;} else { $SEP1_excel = round(($SEP1  / $SEP), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEP2 == 0) {$SEP2_excel = 0;} else { $SEP2_excel = round(($SEP2  / $SEP), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEP3 == 0) {$SEP3_excel = 0;} else { $SEP3_excel = round(($SEP3  / $SEP), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEP4 == 0) {$SEP4_excel = 0;} else { $SEP4_excel = round(($SEP4  / $SEP), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEP5 == 0) {$SEP5_excel = 0;} else { $SEP5_excel = round(($SEP5  / $SEP), 3, PHP_ROUND_HALF_UP) ;}
        $SEA1 = Consolidados3::SEA1(conexion::obtener_conexion());
        $SEA2 = Consolidados3::SEA2(conexion::obtener_conexion());
        $SEA3 = Consolidados3::SEA3(conexion::obtener_conexion());
        $SEA4 = Consolidados3::SEA4(conexion::obtener_conexion());
        $SEA5 = Consolidados3::SEA5(conexion::obtener_conexion());
        $SEA = $SEA1 + $SEA2 + $SEA3 + $SEA4 + $SEA5;
        if ($SEA1 == 0) {$SEA1_porcentaje = 0;} else {$SEA1_porcentaje = round((($SEA1 * 100) / $SEA), 1, PHP_ROUND_HALF_UP);}
        if ($SEA2 == 0) {$SEA2_porcentaje = 0;} else {$SEA2_porcentaje = round((($SEA2 * 100) / $SEA), 1, PHP_ROUND_HALF_UP);}
        if ($SEA3 == 0) {$SEA3_porcentaje = 0;} else {$SEA3_porcentaje = round((($SEA3 * 100) / $SEA), 1, PHP_ROUND_HALF_UP);}
        if ($SEA4 == 0) {$SEA4_porcentaje = 0;} else {$SEA4_porcentaje = round((($SEA4 * 100) / $SEA), 1, PHP_ROUND_HALF_UP);}
        if ($SEA5 == 0) {$SEA5_porcentaje = 0;} else {$SEA5_porcentaje = round((($SEA5 * 100) / $SEA), 1, PHP_ROUND_HALF_UP);}
        if ($SEA1 == 0) {$SEA1_excel = 0;} else { $SEA1_excel = round(($SEA1  / $SEA), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEA2 == 0) {$SEA2_excel = 0;} else { $SEA2_excel = round(($SEA2  / $SEA), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEA3 == 0) {$SEA3_excel = 0;} else { $SEA3_excel = round(($SEA3  / $SEA), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEA4 == 0) {$SEA4_excel = 0;} else { $SEA4_excel = round(($SEA4  / $SEA), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEA5 == 0) {$SEA5_excel = 0;} else { $SEA5_excel = round(($SEA5  / $SEA), 3, PHP_ROUND_HALF_UP) ;}
        $SEO1 = Consolidados3::SEO1(conexion::obtener_conexion());
        $SEO2 = Consolidados3::SEO2(conexion::obtener_conexion());
        $SEO3 = Consolidados3::SEO3(conexion::obtener_conexion());
        $SEO4 = Consolidados3::SEO4(conexion::obtener_conexion());
        $SEO5 = Consolidados3::SEO5(conexion::obtener_conexion());
        $SEO = $SEO1 + $SEO2 + $SEO3 + $SEO4 + $SEO5;
        if ($SEO1 == 0) {$SEO1_porcentaje = 0;} else {$SEO1_porcentaje = round((($SEO1 * 100) / $SEO), 1, PHP_ROUND_HALF_UP);}
        if ($SEO2 == 0) {$SEO2_porcentaje = 0;} else {$SEO2_porcentaje = round((($SEO2 * 100) / $SEO), 1, PHP_ROUND_HALF_UP);}
        if ($SEO3 == 0) {$SEO3_porcentaje = 0;} else {$SEO3_porcentaje = round((($SEO3 * 100) / $SEO), 1, PHP_ROUND_HALF_UP);}
        if ($SEO4 == 0) {$SEO4_porcentaje = 0;} else {$SEO4_porcentaje = round((($SEO4 * 100) / $SEO), 1, PHP_ROUND_HALF_UP);}
        if ($SEO5 == 0) {$SEO5_porcentaje = 0;} else {$SEO5_porcentaje = round((($SEO5 * 100) / $SEO), 1, PHP_ROUND_HALF_UP);}
        if ($SEO1 == 0) {$SEO1_excel = 0;} else { $SEO1_excel = round(($SEO1  / $SEO), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEO2 == 0) {$SEO2_excel = 0;} else { $SEO2_excel = round(($SEO2  / $SEO), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEO3 == 0) {$SEO3_excel = 0;} else { $SEO3_excel = round(($SEO3  / $SEO), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEO4 == 0) {$SEO4_excel = 0;} else { $SEO4_excel = round(($SEO4  / $SEO), 3, PHP_ROUND_HALF_UP) ;}
        if ($SEO5 == 0) {$SEO5_excel = 0;} else { $SEO5_excel = round(($SEO5  / $SEO), 3, PHP_ROUND_HALF_UP) ;}
        $CVJ1 = Consolidados3::CVJ1(conexion::obtener_conexion());
        $CVJ2 = Consolidados3::CVJ2(conexion::obtener_conexion());
        $CVJ3 = Consolidados3::CVJ3(conexion::obtener_conexion());
        $CVJ4 = Consolidados3::CVJ4(conexion::obtener_conexion());
        $CVJ5 = Consolidados3::CVJ5(conexion::obtener_conexion());
        $CVJ = $CVJ1 + $CVJ2 + $CVJ3 + $CVJ4 + $CVJ5;
        if ($CVJ1 == 0) {$CVJ1_porcentaje = 0;} else {$CVJ1_porcentaje = round((($CVJ1 * 100) / $CVJ), 1, PHP_ROUND_HALF_UP);}
        if ($CVJ2 == 0) {$CVJ2_porcentaje = 0;} else {$CVJ2_porcentaje = round((($CVJ2 * 100) / $CVJ), 1, PHP_ROUND_HALF_UP);}
        if ($CVJ3 == 0) {$CVJ3_porcentaje = 0;} else {$CVJ3_porcentaje = round((($CVJ3 * 100) / $CVJ), 1, PHP_ROUND_HALF_UP);}
        if ($CVJ4 == 0) {$CVJ4_porcentaje = 0;} else {$CVJ4_porcentaje = round((($CVJ4 * 100) / $CVJ), 1, PHP_ROUND_HALF_UP);}
        if ($CVJ5 == 0) {$CVJ5_porcentaje = 0;} else {$CVJ5_porcentaje = round((($CVJ5 * 100) / $CVJ), 1, PHP_ROUND_HALF_UP);}
        if ($CVJ1 == 0) {$CVJ1_excel = 0;} else { $CVJ1_excel = round(($CVJ1  / $CVJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVJ2 == 0) {$CVJ2_excel = 0;} else { $CVJ2_excel = round(($CVJ2  / $CVJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVJ3 == 0) {$CVJ3_excel = 0;} else { $CVJ3_excel = round(($CVJ3  / $CVJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVJ4 == 0) {$CVJ4_excel = 0;} else { $CVJ4_excel = round(($CVJ4  / $CVJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVJ5 == 0) {$CVJ5_excel = 0;} else { $CVJ5_excel = round(($CVJ5  / $CVJ), 3, PHP_ROUND_HALF_UP) ;}
        $CVP1 = Consolidados3::CVP1(conexion::obtener_conexion());
        $CVP2 = Consolidados3::CVP2(conexion::obtener_conexion());
        $CVP3 = Consolidados3::CVP3(conexion::obtener_conexion());
        $CVP4 = Consolidados3::CVP4(conexion::obtener_conexion());
        $CVP5 = Consolidados3::CVP5(conexion::obtener_conexion());
        $CVP = $CVP1 + $CVP2 + $CVP3 + $CVP4 + $CVP5;
        if ($CVP1 == 0) {$CVP1_porcentaje = 0;} else {$CVP1_porcentaje = round((($CVP1 * 100) / $CVP), 1, PHP_ROUND_HALF_UP);}
        if ($CVP2 == 0) {$CVP2_porcentaje = 0;} else {$CVP2_porcentaje = round((($CVP2 * 100) / $CVP), 1, PHP_ROUND_HALF_UP);}
        if ($CVP3 == 0) {$CVP3_porcentaje = 0;} else {$CVP3_porcentaje = round((($CVP3 * 100) / $CVP), 1, PHP_ROUND_HALF_UP);}
        if ($CVP4 == 0) {$CVP4_porcentaje = 0;} else {$CVP4_porcentaje = round((($CVP4 * 100) / $CVP), 1, PHP_ROUND_HALF_UP);}
        if ($CVP5 == 0) {$CVP5_porcentaje = 0;} else {$CVP5_porcentaje = round((($CVP5 * 100) / $CVP), 1, PHP_ROUND_HALF_UP);}
        if ($CVP1 == 0) {$CVP1_excel = 0;} else { $CVP1_excel = round(($CVP1  / $CVP), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVP2 == 0) {$CVP2_excel = 0;} else { $CVP2_excel = round(($CVP2  / $CVP), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVP3 == 0) {$CVP3_excel = 0;} else { $CVP3_excel = round(($CVP3  / $CVP), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVP4 == 0) {$CVP4_excel = 0;} else { $CVP4_excel = round(($CVP4  / $CVP), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVP5 == 0) {$CVP5_excel = 0;} else { $CVP5_excel = round(($CVP5  / $CVP), 3, PHP_ROUND_HALF_UP) ;}
        $CVA1 = Consolidados3::CVA1(conexion::obtener_conexion());
        $CVA2 = Consolidados3::CVA2(conexion::obtener_conexion());
        $CVA3 = Consolidados3::CVA3(conexion::obtener_conexion());
        $CVA4 = Consolidados3::CVA4(conexion::obtener_conexion());
        $CVA5 = Consolidados3::CVA5(conexion::obtener_conexion());
        $CVA = $CVA1 + $CVA2 + $CVA3 + $CVA4 + $CVA5;
        if ($CVA1 == 0) {$CVA1_porcentaje = 0;} else {$CVA1_porcentaje = round((($CVA1 * 100) / $CVA), 1, PHP_ROUND_HALF_UP);}
        if ($CVA2 == 0) {$CVA2_porcentaje = 0;} else {$CVA2_porcentaje = round((($CVA2 * 100) / $CVA), 1, PHP_ROUND_HALF_UP);}
        if ($CVA3 == 0) {$CVA3_porcentaje = 0;} else {$CVA3_porcentaje = round((($CVA3 * 100) / $CVA), 1, PHP_ROUND_HALF_UP);}
        if ($CVA4 == 0) {$CVA4_porcentaje = 0;} else {$CVA4_porcentaje = round((($CVA4 * 100) / $CVA), 1, PHP_ROUND_HALF_UP);}
        if ($CVA5 == 0) {$CVA5_porcentaje = 0;} else {$CVA5_porcentaje = round((($CVA5 * 100) / $CVA), 1, PHP_ROUND_HALF_UP);}
        if ($CVA6 == 0) {$CVA1_excel = 0;} else { $CVA1_excel = round(($CVA1  / $CVA), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVA2 == 0) {$CVA2_excel = 0;} else { $CVA2_excel = round(($CVA2  / $CVA), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVA3 == 0) {$CVA3_excel = 0;} else { $CVA3_excel = round(($CVA3  / $CVA), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVA4 == 0) {$CVA4_excel = 0;} else { $CVA4_excel = round(($CVA4  / $CVA), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVA5 == 0) {$CVA5_excel = 0;} else { $CVA5_excel = round(($CVA5  / $CVA), 3, PHP_ROUND_HALF_UP) ;}
        $CVO1 = Consolidados3::CVO1(conexion::obtener_conexion());
        $CVO2 = Consolidados3::CVO2(conexion::obtener_conexion());
        $CVO3 = Consolidados3::CVO3(conexion::obtener_conexion());
        $CVO4 = Consolidados3::CVO4(conexion::obtener_conexion());
        $CVO5 = Consolidados3::CVO5(conexion::obtener_conexion());
        $CVO = $CVO1 + $CVO2 + $CVO3 + $CVO4 + $CVO5;
        if ($CVO1 == 0) {$CVO1_porcentaje = 0;} else {$CVO1_porcentaje = round((($CVO1 * 100) / $CVO), 1, PHP_ROUND_HALF_UP);}
        if ($CVO2 == 0) {$CVO2_porcentaje = 0;} else {$CVO2_porcentaje = round((($CVO2 * 100) / $CVO), 1, PHP_ROUND_HALF_UP);}
        if ($CVO3 == 0) {$CVO3_porcentaje = 0;} else {$CVO3_porcentaje = round((($CVO3 * 100) / $CVO), 1, PHP_ROUND_HALF_UP);}
        if ($CVO4 == 0) {$CVO4_porcentaje = 0;} else {$CVO4_porcentaje = round((($CVO4 * 100) / $CVO), 1, PHP_ROUND_HALF_UP);}
        if ($CVO5 == 0) {$CVO5_porcentaje = 0;} else {$CVO5_porcentaje = round((($CVO5 * 100) / $CVO), 1, PHP_ROUND_HALF_UP);}
        if ($CVO1 == 0) {$CVO1_porcentaje = 0;} else { $CVO1_excel = round(($CVO1  / $CVO), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVO2 == 0) {$CVO2_excel = 0;} else { $CVO2_excel = round(($CVO2  / $CVO), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVO3 == 0) {$CVO3_excel = 0;} else { $CVO3_excel = round(($CVO3  / $CVO), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVO4 == 0) {$CVO4_excel = 0;} else { $CVO4_excel = round(($CVO4  / $CVO), 3, PHP_ROUND_HALF_UP) ;}
        if ($CVO5 == 0) {$CVO5_excel = 0;} else { $CVO5_excel = round(($CVO5  / $CVO), 3, PHP_ROUND_HALF_UP) ;}
        $IEJ1 = Consolidados3::IEJ1(conexion::obtener_conexion());
        $IEJ2 = Consolidados3::IEJ2(conexion::obtener_conexion());
        $IEJ3 = Consolidados3::IEJ3(conexion::obtener_conexion());
        $IEJ4 = Consolidados3::IEJ4(conexion::obtener_conexion());
        $IEJ5 = Consolidados3::IEJ5(conexion::obtener_conexion());
        $IEJ = $IEJ1 + $IEJ2 + $IEJ3 + $IEJ4 + $IEJ5;
        if ($IEJ1 == 0) {$IEJ1_porcentaje = 0;} else {$IEJ1_porcentaje = round((($IEJ1 * 100) / $IEJ), 1, PHP_ROUND_HALF_UP);}
        if ($IEJ2 == 0) {$IEJ2_porcentaje = 0;} else {$IEJ2_porcentaje = round((($IEJ2 * 100) / $IEJ), 1, PHP_ROUND_HALF_UP);}
        if ($IEJ3 == 0) {$IEJ3_porcentaje = 0;} else {$IEJ3_porcentaje = round((($IEJ3 * 100) / $IEJ), 1, PHP_ROUND_HALF_UP);}
        if ($IEJ4 == 0) {$IEJ4_porcentaje = 0;} else {$IEJ4_porcentaje = round((($IEJ4 * 100) / $IEJ), 1, PHP_ROUND_HALF_UP);}
        if ($IEJ5 == 0) {$IEJ5_porcentaje = 0;} else {$IEJ5_porcentaje = round((($IEJ5 * 100) / $IEJ), 1, PHP_ROUND_HALF_UP);}
        if ($IEJ1 == 0) {$IEJ1_excel = 0;} else { $IEJ1_excel = round(($IEJ1  / $IEJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEJ2 == 0) {$IEJ2_excel = 0;} else { $IEJ2_excel = round(($IEJ2  / $IEJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEJ3 == 0) {$IEJ3_excel = 0;} else { $IEJ3_excel = round(($IEJ3  / $IEJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEJ4 == 0) {$IEJ4_excel = 0;} else { $IEJ4_excel = round(($IEJ4  / $IEJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEJ5 == 0) {$IEJ5_excel = 0;} else { $IEJ5_excel = round(($IEJ5  / $IEJ), 3, PHP_ROUND_HALF_UP) ;}
        $IEP1 = Consolidados3::IEP1(conexion::obtener_conexion());
        $IEP2 = Consolidados3::IEP2(conexion::obtener_conexion());
        $IEP3 = Consolidados3::IEP3(conexion::obtener_conexion());
        $IEP4 = Consolidados3::IEP4(conexion::obtener_conexion());
        $IEP5 = Consolidados3::IEP5(conexion::obtener_conexion());
        $IEP = $IEP1 + $IEP2 + $IEP3 + $IEP4 + $IEP5;
        if ($IEP1 == 0) {$IEP1_porcentaje = 0;} else {$IEP1_porcentaje = round((($IEP1 * 100) / $IEP), 1, PHP_ROUND_HALF_UP);}
        if ($IEP2 == 0) {$IEP2_porcentaje = 0;} else {$IEP2_porcentaje = round((($IEP2 * 100) / $IEP), 1, PHP_ROUND_HALF_UP);}
        if ($IEP3 == 0) {$IEP3_porcentaje = 0;} else {$IEP3_porcentaje = round((($IEP3 * 100) / $IEP), 1, PHP_ROUND_HALF_UP);}
        if ($IEP4 == 0) {$IEP4_porcentaje = 0;} else {$IEP4_porcentaje = round((($IEP4 * 100) / $IEP), 1, PHP_ROUND_HALF_UP);}
        if ($IEP5 == 0) {$IEP5_porcentaje = 0;} else {$IEP5_porcentaje = round((($IEP5 * 100) / $IEP), 1, PHP_ROUND_HALF_UP);}
        if ($IEP1 == 0) {$IEP1_excel = 0;} else { $IEP1_excel = round(($IEP1  / $IEP), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEP2 == 0) {$IEP2_excel = 0;} else { $IEP2_excel = round(($IEP2  / $IEP), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEP3 == 0) {$IEP3_excel = 0;} else { $IEP3_excel = round(($IEP3  / $IEP), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEP4 == 0) {$IEP4_excel = 0;} else { $IEP4_excel = round(($IEP4  / $IEP), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEP5 == 0) {$IEP5_excel = 0;} else { $IEP5_excel = round(($IEP5  / $IEP), 3, PHP_ROUND_HALF_UP) ;}
        $IEA1 = Consolidados3::IEA1(conexion::obtener_conexion());
        $IEA2 = Consolidados3::IEA2(conexion::obtener_conexion());
        $IEA3 = Consolidados3::IEA3(conexion::obtener_conexion());
        $IEA4 = Consolidados3::IEA4(conexion::obtener_conexion());
        $IEA5 = Consolidados3::IEA5(conexion::obtener_conexion());
        $IEA = $IEA1 + $IEA2 + $IEA3 + $IEA4 + $IEA5;
        if ($IEA1 == 0) {$IEA1_porcentaje = 0;} else {$IEA1_porcentaje = round((($IEA1 * 100) / $IEA), 1, PHP_ROUND_HALF_UP);}
        if ($IEA2 == 0) {$IEA2_porcentaje = 0;} else {$IEA2_porcentaje = round((($IEA2 * 100) / $IEA), 1, PHP_ROUND_HALF_UP);}
        if ($IEA3 == 0) {$IEA3_porcentaje = 0;} else {$IEA3_porcentaje = round((($IEA3 * 100) / $IEA), 1, PHP_ROUND_HALF_UP);}
        if ($IEA4 == 0) {$IEA4_porcentaje = 0;} else {$IEA4_porcentaje = round((($IEA4 * 100) / $IEA), 1, PHP_ROUND_HALF_UP);}
        if ($IEA5 == 0) {$IEA5_porcentaje = 0;} else {$IEA5_porcentaje = round((($IEA5 * 100) / $IEA), 1, PHP_ROUND_HALF_UP);}
        if ($IEA1 == 0) {$IEA1_excel = 0;} else { $IEA1_excel = round(($IEA1  / $IEA), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEA2 == 0) {$IEA2_excel = 0;} else { $IEA2_excel = round(($IEA2  / $IEA), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEA3 == 0) {$IEA3_excel = 0;} else { $IEA3_excel = round(($IEA3  / $IEA), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEA4 == 0) {$IEA4_excel = 0;} else { $IEA4_excel = round(($IEA4  / $IEA), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEA5 == 0) {$IEA5_excel = 0;} else { $IEA5_excel = round(($IEA5  / $IEA), 3, PHP_ROUND_HALF_UP) ;}
        $IEO1 = Consolidados3::IEO1(conexion::obtener_conexion());
        $IEO2 = Consolidados3::IEO2(conexion::obtener_conexion());
        $IEO3 = Consolidados3::IEO3(conexion::obtener_conexion());
        $IEO4 = Consolidados3::IEO4(conexion::obtener_conexion());
        $IEO5 = Consolidados3::IEO5(conexion::obtener_conexion());
        $IEO = $IEO1 + $IEO2 + $IEO3 + $IEO4 + $IEO5;
        if ($IEO1 == 0) {$IEO1_porcentaje = 0;} else {$IEO1_porcentaje = round((($IEO1 * 100) / $IEO), 1, PHP_ROUND_HALF_UP);}
        if ($IEO2 == 0) {$IEO2_porcentaje = 0;} else {$IEO2_porcentaje = round((($IEO2 * 100) / $IEO), 1, PHP_ROUND_HALF_UP);}
        if ($IEO3 == 0) {$IEO3_porcentaje = 0;} else {$IEO3_porcentaje = round((($IEO3 * 100) / $IEO), 1, PHP_ROUND_HALF_UP);}
        if ($IEO4 == 0) {$IEO4_porcentaje = 0;} else {$IEO4_porcentaje = round((($IEO4 * 100) / $IEO), 1, PHP_ROUND_HALF_UP);}
        if ($IEO5 == 0) {$IEO5_porcentaje = 0;} else {$IEO5_porcentaje = round((($IEO5 * 100) / $IEO), 1, PHP_ROUND_HALF_UP);} 
        if ($IEO1 == 0) {$IEO1_excel = 0;} else { $IEO1_excel = round(($IEO1  / $IEO), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEO2 == 0) {$IEO2_excel = 0;} else { $IEO2_excel = round(($IEO2  / $IEO), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEO3 == 0) {$IEO3_excel = 0;} else { $IEO3_excel = round(($IEO3  / $IEO), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEO4 == 0) {$IEO4_excel = 0;} else { $IEO4_excel = round(($IEO4  / $IEO), 3, PHP_ROUND_HALF_UP) ;}
        if ($IEO5 == 0) {$IEO5_excel = 0;} else { $IEO5_excel = round(($IEO5  / $IEO), 3, PHP_ROUND_HALF_UP) ;}
        $DVJ1 = Consolidados3::DVJ1(conexion::obtener_conexion());
        $DVJ2 = Consolidados3::DVJ2(conexion::obtener_conexion());
        $DVJ3 = Consolidados3::DVJ3(conexion::obtener_conexion());
        $DVJ4 = Consolidados3::DVJ4(conexion::obtener_conexion());
        $DVJ5 = Consolidados3::DVJ5(conexion::obtener_conexion());
        $DVJ = $DVJ1 + $DVJ2 + $DVJ3 + $DVJ4 + $DVJ5;
        if ($DVJ1 == 0) {$DVJ1_porcentaje = 0;} else {$DVJ1_porcentaje = round((($DVJ1 * 100) / $DVJ), 1, PHP_ROUND_HALF_UP);}
        if ($DVJ2 == 0) {$DVJ2_porcentaje = 0;} else {$DVJ2_porcentaje = round((($DVJ2 * 100) / $DVJ), 1, PHP_ROUND_HALF_UP);}
        if ($DVJ3 == 0) {$DVJ3_porcentaje = 0;} else {$DVJ3_porcentaje = round((($DVJ3 * 100) / $DVJ), 1, PHP_ROUND_HALF_UP);}
        if ($DVJ4 == 0) {$DVJ4_porcentaje = 0;} else {$DVJ4_porcentaje = round((($DVJ4 * 100) / $DVJ), 1, PHP_ROUND_HALF_UP);}
        if ($DVJ5 == 0) {$DVJ5_porcentaje = 0;} else {$DVJ5_porcentaje = round((($DVJ5 * 100) / $DVJ), 1, PHP_ROUND_HALF_UP);}
        if ($DVJ1 == 0) {$DVJ1_excel = 0;} else { $DVJ1_excel = round(($DVJ1  / $DVJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVJ2 == 0) {$DVJ2_excel = 0;} else { $DVJ2_excel = round(($DVJ2  / $DVJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVJ3 == 0) {$DVJ3_excel = 0;} else { $DVJ3_excel = round(($DVJ3  / $DVJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVJ4 == 0) {$DVJ4_excel = 0;} else { $DVJ4_excel = round(($DVJ4  / $DVJ), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVJ5 == 0) {$DVJ5_excel = 0;} else { $DVJ5_excel = round(($DVJ5  / $DVJ), 3, PHP_ROUND_HALF_UP) ;}
        $DVP1 = Consolidados3::DVP1(conexion::obtener_conexion());
        $DVP2 = Consolidados3::DVP2(conexion::obtener_conexion());
        $DVP3 = Consolidados3::DVP3(conexion::obtener_conexion());
        $DVP4 = Consolidados3::DVP4(conexion::obtener_conexion());
        $DVP5 = Consolidados3::DVP5(conexion::obtener_conexion());
        $DVP = $DVP1 + $DVP2 + $DVP3 + $DVP4 + $DVP5;
        if ($DVP1 == 0) {$DVP1_porcentaje = 0;} else {$DVP1_porcentaje = round((($DVP1 * 100) / $DVP), 1, PHP_ROUND_HALF_UP);}
        if ($DVP2 == 0) {$DVP2_porcentaje = 0;} else {$DVP2_porcentaje = round((($DVP2 * 100) / $DVP), 1, PHP_ROUND_HALF_UP);}
        if ($DVP3 == 0) {$DVP3_porcentaje = 0;} else {$DVP3_porcentaje = round((($DVP3 * 100) / $DVP), 1, PHP_ROUND_HALF_UP);}
        if ($DVP4 == 0) {$DVP4_porcentaje = 0;} else {$DVP4_porcentaje = round((($DVP4 * 100) / $DVP), 1, PHP_ROUND_HALF_UP);}
        if ($DVP5 == 0) {$DVP5_porcentaje = 0;} else {$DVP5_porcentaje = round((($DVP5 * 100) / $DVP), 1, PHP_ROUND_HALF_UP);}
        if ($DVP1 == 0) {$DVP1_excel = 0;} else { $DVP1_excel = round(($DVP1  / $DVP), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVP2 == 0) {$DVP2_excel = 0;} else { $DVP2_excel = round(($DVP2  / $DVP), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVP3 == 0) {$DVP3_excel = 0;} else { $DVP3_excel = round(($DVP3  / $DVP), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVP4 == 0) {$DVP4_excel = 0;} else { $DVP4_excel = round(($DVP4  / $DVP), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVP5 == 0) {$DVP5_excel = 0;} else { $DVP5_excel = round(($DVP5  / $DVP), 3, PHP_ROUND_HALF_UP) ;}
        $DVA1 = Consolidados3::DVA1(conexion::obtener_conexion());
        $DVA2 = Consolidados3::DVA2(conexion::obtener_conexion());
        $DVA3 = Consolidados3::DVA3(conexion::obtener_conexion());
        $DVA4 = Consolidados3::DVA4(conexion::obtener_conexion());
        $DVA5 = Consolidados3::DVA5(conexion::obtener_conexion());
        $DVA = $DVA1 + $DVA2 + $DVA3 + $DVA4 + $DVA5;
        if ($DVA1 == 0) {$DVA1_porcentaje = 0;} else {$DVA1_porcentaje = round((($DVA1 * 100) / $DVA), 1, PHP_ROUND_HALF_UP);}
        if ($DVA2 == 0) {$DVA2_porcentaje = 0;} else {$DVA2_porcentaje = round((($DVA2 * 100) / $DVA), 1, PHP_ROUND_HALF_UP);}
        if ($DVA3 == 0) {$DVA3_porcentaje = 0;} else {$DVA3_porcentaje = round((($DVA3 * 100) / $DVA), 1, PHP_ROUND_HALF_UP);}
        if ($DVA4 == 0) {$DVA4_porcentaje = 0;} else {$DVA4_porcentaje = round((($DVA4 * 100) / $DVA), 1, PHP_ROUND_HALF_UP);}
        if ($DVA5 == 0) {$DVA5_porcentaje = 0;} else {$DVA5_porcentaje = round((($DVA5 * 100) / $DVA), 1, PHP_ROUND_HALF_UP);}
        if ($DVA1 == 0) {$DVA1_excel = 0;} else { $DVA1_excel = round(($DVA1  / $DVA), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVA2 == 0) {$DVA2_excel = 0;} else { $DVA2_excel = round(($DVA2  / $DVA), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVA3 == 0) {$DVA3_excel = 0;} else { $DVA3_excel = round(($DVA3  / $DVA), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVA4 == 0) {$DVA4_excel = 0;} else { $DVA4_excel = round(($DVA4  / $DVA), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVA5 == 0) {$DVA5_excel = 0;} else { $DVA5_excel = round(($DVA5  / $DVA), 3, PHP_ROUND_HALF_UP) ;}
        $DVO1 = Consolidados3::DVO1(conexion::obtener_conexion());
        $DVO2 = Consolidados3::DVO2(conexion::obtener_conexion());
        $DVO3 = Consolidados3::DVO3(conexion::obtener_conexion());
        $DVO4 = Consolidados3::DVO4(conexion::obtener_conexion());
        $DVO5 = Consolidados3::DVO5(conexion::obtener_conexion());
        $DVO = $DVO1 + $DVO2 + $DVO3 + $DVO4 + $DVO5;
        if ($DVO1 == 0) {$DVO1_porcentaje = 0;} else {$DVO1_porcentaje = round((($DVO1 * 100) / $DVO), 1, PHP_ROUND_HALF_UP);}
        if ($DVO2 == 0) {$DVO2_porcentaje = 0;} else {$DVO2_porcentaje = round((($DVO2 * 100) / $DVO), 1, PHP_ROUND_HALF_UP);}
        if ($DVO3 == 0) {$DVO3_porcentaje = 0;} else {$DVO3_porcentaje = round((($DVO3 * 100) / $DVO), 1, PHP_ROUND_HALF_UP);}
        if ($DVO4 == 0) {$DVO4_porcentaje = 0;} else {$DVO4_porcentaje = round((($DVO4 * 100) / $DVO), 1, PHP_ROUND_HALF_UP);}
        if ($DVO5 == 0) {$DVO5_porcentaje = 0;} else {$DVO5_porcentaje = round((($DVO5 * 100) / $DVO), 1, PHP_ROUND_HALF_UP);} 
        if ($DVO1 == 0) {$DVO1_excel = 0;} else { $DVO1_excel = round(($DVO1  / $DVO), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVO2 == 0) {$DVO2_excel = 0;} else { $DVO2_excel = round(($DVO2  / $DVO), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVO3 == 0) {$DVO3_excel = 0;} else { $DVO3_excel = round(($DVO3  / $DVO), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVO4 == 0) {$DVO4_excel = 0;} else { $DVO4_excel = round(($DVO4  / $DVO), 3, PHP_ROUND_HALF_UP) ;}
        if ($DVO5 == 0) {$DVO5_excel = 0;} else { $DVO5_excel = round(($DVO5  / $DVO), 3, PHP_ROUND_HALF_UP) ;}
        $variable1= array($TFJ1_porcentaje, $TFJ2_porcentaje, $TFJ3_porcentaje, $TFJ4_porcentaje, $TFJ5_porcentaje);
        $c = 0;
        $high_1= $high_2= 0;
        do {
            if (isset($variable1[$c])) {
                if ($variable1[$c] > $high_1) {
                    $high_2= $high_1;
                    $high_1= $variable1[$c];
                } else if ($variable1[$c] > $high_2) {
                    $high_2= $variable1[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($TFJ1_porcentaje == $high_1) or ( $TFJ1_porcentaje == $high_2)or($TFJ1_porcentaje > 20)) && ($TFJ1_porcentaje > 20)) {
            $TFJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $TFJ1c = '';
        }
        if ((($TFJ2_porcentaje == $high_1) or ( $TFJ2_porcentaje == $high_2)or($TFJ2_porcentaje > 20)) && ($TFJ2_porcentaje > 20)) {
            $TFJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $TFJ2c = '';
        }
        if ((($TFJ3_porcentaje == $high_1)or ( $TFJ3_porcentaje == $high_2)or($TFJ3_porcentaje > 20)) && ($TFJ3_porcentaje > 20)) {
            $TFJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $TFJ3c = '';
        }
        if ((($TFJ4_porcentaje == $high_1) or ( $TFJ4_porcentaje == $high_2)or($TFJ4_porcentaje > 20)) && ($TFJ4_porcentaje > 20)) {
            $TFJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $TFJ4c = '';
        }
        if ((($TFJ5_porcentaje == $high_1) or ( $TFJ5_porcentaje == $high_2)or($TFJ5_porcentaje > 20)) && ($TFJ5_porcentaje > 20)) {
            $TFJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $TFJ5c = '';
        }
        $variable2= array($TFP1_porcentaje, $TFP2_porcentaje, $TFP3_porcentaje, $TFP4_porcentaje, $TFP5_porcentaje);
        $c = 0;
        $high_3= $high_4= 0;
        do {
            if (isset($variable2[$c])) {
                if ($variable2[$c] > $high_3) {
                    $high_4= $high_3;
                    $high_3= $variable2[$c];
                } else if ($variable2[$c] > $high_4) {
                    $high_4= $variable2[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($TFP1_porcentaje == $high_3) or ( $TFP1_porcentaje == $high_4)or($TFP1_porcentaje > 20)) && ($TFP1_porcentaje > 20)) {
            $TFP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $TFP1c = '';
        }
        if ((($TFP2_porcentaje == $high_3) or ( $TFP2_porcentaje == $high_4)or($TFP2_porcentaje > 20)) && ($TFP2_porcentaje > 20)) {
            $TFP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $TFP2c = '';
        }
        if ((($TFP3_porcentaje == $high_3)or ( $TFP3_porcentaje == $high_4)or($TFP3_porcentaje > 20)) && ($TFP3_porcentaje > 20)) {
            $TFP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $TFP3c = '';
        }
        if ((($TFP4_porcentaje == $high_3) or ( $TFP4_porcentaje == $high_4)or($TFP4_porcentaje > 20)) && ($TFP4_porcentaje > 20)) {
            $TFP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $TFP4c = '';
        }
        if ((($TFP5_porcentaje == $high_3) or ( $TFP5_porcentaje == $high_4)or($TFP5_porcentaje > 20)) && ($TFP5_porcentaje > 20)) {
            $TFP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $TFP5c = '';
        }
        $variable3= array($TFA1_porcentaje, $TFA2_porcentaje, $TFA3_porcentaje, $TFA4_porcentaje, $TFA5_porcentaje);
        $c = 0;
        $high_5= $high_6= 0;
        do {
            if (isset($variable3[$c])) {
                if ($variable3[$c] > $high_5) {
                    $high_6= $high_5;
                    $high_5= $variable3[$c];
                } else if ($variable3[$c] > $high_6) {
                    $high_6= $variable3[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($TFA1_porcentaje == $high_5) or ( $TFA1_porcentaje == $high_6)or($TFA1_porcentaje > 20)) && ($TFA1_porcentaje > 20)) {
            $TFA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $TFA1c = '';
        }
        if ((($TFA2_porcentaje == $high_5) or ( $TFA2_porcentaje == $high_6)or($TFA2_porcentaje > 20)) && ($TFA2_porcentaje > 20)) {
            $TFA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $TFA2c = '';
        }
        if ((($TFA3_porcentaje == $high_5)or ( $TFA3_porcentaje == $high_6)or($TFA3_porcentaje > 20)) && ($TFA3_porcentaje > 20)) {
            $TFA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $TFA3c = '';
        }
        if ((($TFA4_porcentaje == $high_5) or ( $TFA4_porcentaje == $high_6)or($TFA4_porcentaje > 20)) && ($TFA4_porcentaje > 20)) {
            $TFA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $TFA4c = '';
        }
        if ((($TFA5_porcentaje == $high_5) or ( $TFA5_porcentaje == $high_6)or($TFA5_porcentaje > 20)) && ($TFA5_porcentaje > 20)) {
            $TFA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $TFA5c = '';
        }
        $variable4= array($TFO1_porcentaje, $TFO2_porcentaje, $TFO3_porcentaje, $TFO4_porcentaje, $TFO5_porcentaje);
        $c = 0;
        $high_7= $high_8= 0;
        do {
            if (isset($variable4[$c])) {
                if ($variable4[$c] > $high_7) {
                    $high_8= $high_7;
                    $high_7= $variable4[$c];
                } else if ($variable4[$c] > $high_8) {
                    $high_8= $variable4[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($TFO1_porcentaje == $high_7) or ( $TFO1_porcentaje == $high_8)or($TFO1_porcentaje > 20)) && ($TFO1_porcentaje > 20)) {
            $TFO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $TFO1c = '';
        }
        if ((($TFO2_porcentaje == $high_7) or ( $TFO2_porcentaje == $high_8)or($TFO2_porcentaje > 20)) && ($TFO2_porcentaje > 20)) {
            $TFO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $TFO2c = '';
        }
        if ((($TFO3_porcentaje == $high_7)or ( $TFO3_porcentaje == $high_8)or($TFO3_porcentaje > 20)) && ($TFO3_porcentaje > 20)) {
            $TFO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $TFO3c = '';
        }
        if ((($TFO4_porcentaje == $high_7) or ( $TFO4_porcentaje == $high_8)or($TFO4_porcentaje > 20)) && ($TFO4_porcentaje > 20)) {
            $TFO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $TFO4c = '';
        }
        if ((($TFO5_porcentaje == $high_7) or ( $TFO5_porcentaje == $high_8)or($TFO5_porcentaje > 20)) && ($TFO5_porcentaje > 20)) {
            $TFO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $TFO5c = '';
        }
        $variable5= array($RFJ1_porcentaje, $RFJ2_porcentaje, $RFJ3_porcentaje, $RFJ4_porcentaje, $RFJ5_porcentaje);
        $c = 0;
        $high_9= $high_10= 0;
        do {
            if (isset($variable5[$c])) {
                if ($variable5[$c] > $high_9) {
                    $high_10= $high_9;
                    $high_9= $variable5[$c];
                } else if ($variable5[$c] > $high_10) {
                    $high_10= $variable5[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RFJ1_porcentaje == $high_9) or ( $RFJ1_porcentaje == $high_10)or($RFJ1_porcentaje > 20)) && ($RFJ1_porcentaje > 20)) {
            $RFJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RFJ1c = '';
        }
        if ((($RFJ2_porcentaje == $high_9) or ( $RFJ2_porcentaje == $high_10)or($RFJ2_porcentaje > 20)) && ($RFJ2_porcentaje > 20)) {
            $RFJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RFJ2c = '';
        }
        if ((($RFJ3_porcentaje == $high_9)or ( $RFJ3_porcentaje == $high_10)or($RFJ3_porcentaje > 20)) && ($RFJ3_porcentaje > 20)) {
            $RFJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RFJ3c = '';
        }
        if ((($RFJ4_porcentaje == $high_9) or ( $RFJ4_porcentaje == $high_10)or($RFJ4_porcentaje > 20)) && ($RFJ4_porcentaje > 20)) {
            $RFJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RFJ4c = '';
        }
        if ((($RFJ5_porcentaje == $high_9) or ( $RFJ5_porcentaje == $high_10)or($RFJ5_porcentaje > 20)) && ($RFJ5_porcentaje > 20)) {
            $RFJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RFJ5c = '';
        }
        $variable6= array($RFP1_porcentaje, $RFP2_porcentaje, $RFP3_porcentaje, $RFP4_porcentaje, $RFP5_porcentaje);
        $c = 0;
        $high_11= $high_12= 0;
        do {
            if (isset($variable6[$c])) {
                if ($variable6[$c] > $high_11) {
                    $high_12= $high_11;
                    $high_11= $variable6[$c];
                } else if ($variable6[$c] > $high_12) {
                    $high_12= $variable6[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RFP1_porcentaje == $high_11) or ( $RFP1_porcentaje == $high_12)or($RFP1_porcentaje > 20)) && ($RFP1_porcentaje > 20)) {
            $RFP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RFP1c = '';
        }
        if ((($RFP2_porcentaje == $high_11) or ( $RFP2_porcentaje == $high_12)or($RFP2_porcentaje > 20)) && ($RFP2_porcentaje > 20)) {
            $RFP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RFP2c = '';
        }
        if ((($RFP3_porcentaje == $high_11)or ( $RFP3_porcentaje == $high_12)or($RFP3_porcentaje > 20)) && ($RFP3_porcentaje > 20)) {
            $RFP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RFP3c = '';
        }
        if ((($RFP4_porcentaje == $high_11) or ( $RFP4_porcentaje == $high_12)or($RFP4_porcentaje > 20)) && ($RFP4_porcentaje > 20)) {
            $RFP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RFP4c = '';
        }
        if ((($RFP5_porcentaje == $high_11) or ( $RFP5_porcentaje == $high_12)or($RFP5_porcentaje > 20)) && ($RFP5_porcentaje > 20)) {
            $RFP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RFP5c = '';
        }
        $variable7= array($RFA1_porcentaje, $RFA2_porcentaje, $RFA3_porcentaje, $RFA4_porcentaje, $RFA5_porcentaje);
        $c = 0;
        $high_13= $high_14= 0;
        do {
            if (isset($variable7[$c])) {
                if ($variable7[$c] > $high_13) {
                    $high_14= $high_13;
                    $high_13= $variable7[$c];
                } else if ($variable7[$c] > $high_14) {
                    $high_14= $variable7[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RFA1_porcentaje == $high_13) or ( $RFA1_porcentaje == $high_14)or($RFA1_porcentaje > 20)) && ($RFA1_porcentaje > 20)) {
            $RFA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RFA1c = '';
        }
        if ((($RFA2_porcentaje == $high_13) or ( $RFA2_porcentaje == $high_14)or($RFA2_porcentaje > 20)) && ($RFA2_porcentaje > 20)) {
            $RFA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RFA2c = '';
        }
        if ((($RFA3_porcentaje == $high_13)or ( $RFA3_porcentaje == $high_14)or($RFA3_porcentaje > 20)) && ($RFA3_porcentaje > 20)) {
            $RFA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RFA3c = '';
        }
        if ((($RFA4_porcentaje == $high_13) or ( $RFA4_porcentaje == $high_14)or($RFA4_porcentaje > 20)) && ($RFA4_porcentaje > 20)) {
            $RFA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RFA4c = '';
        }
        if ((($RFA5_porcentaje == $high_13) or ( $RFA5_porcentaje == $high_14)or($RFA5_porcentaje > 20)) && ($RFA5_porcentaje > 20)) {
            $RFA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RFA5c = '';
        }
        $variable8= array($RFO1_porcentaje, $RFO2_porcentaje, $RFO3_porcentaje, $RFO4_porcentaje, $RFO5_porcentaje);
        $c = 0;
        $high_15= $high_16= 0;
        do {
            if (isset($variable8[$c])) {
                if ($variable8[$c] > $high_15) {
                    $high_16= $high_15;
                    $high_15= $variable8[$c];
                } else if ($variable8[$c] > $high_16) {
                    $high_16= $variable8[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($RFO1_porcentaje == $high_15) or ( $RFO1_porcentaje == $high_16)or($RFO1_porcentaje > 20)) && ($RFO1_porcentaje > 20)) {
            $RFO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $RFO1c = '';
        }
        if ((($RFO2_porcentaje == $high_15) or ( $RFO2_porcentaje == $high_16)or($RFO2_porcentaje > 20)) && ($RFO2_porcentaje > 20)) {
            $RFO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $RFO2c = '';
        }
        if ((($RFO3_porcentaje == $high_15)or ( $RFO3_porcentaje == $high_16)or($RFO3_porcentaje > 20)) && ($RFO3_porcentaje > 20)) {
            $RFO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $RFO3c = '';
        }
        if ((($RFO4_porcentaje == $high_15) or ( $RFO4_porcentaje == $high_16)or($RFO4_porcentaje > 20)) && ($RFO4_porcentaje > 20)) {
            $RFO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $RFO4c = '';
        }
        if ((($RFO5_porcentaje == $high_15) or ( $RFO5_porcentaje == $high_16)or($RFO5_porcentaje > 20)) && ($RFO5_porcentaje > 20)) {
            $RFO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $RFO5c = '';
        }
        $variable9= array($CRIJ1_porcentaje, $CRIJ2_porcentaje, $CRIJ3_porcentaje, $CRIJ4_porcentaje, $CRIJ5_porcentaje);
        $c = 0;
        $high_17= $high_18= 0;
        do {
            if (isset($variable9[$c])) {
                if ($variable9[$c] > $high_17) {
                    $high_18= $high_17;
                    $high_17= $variable9[$c];
                } else if ($variable9[$c] > $high_18) {
                    $high_18= $variable9[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CRIJ1_porcentaje == $high_17) or ( $CRIJ1_porcentaje == $high_18)or($CRIJ1_porcentaje > 20)) && ($CRIJ1_porcentaje > 20)) {
            $CRIJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CRIJ1c = '';
        }
        if ((($CRIJ2_porcentaje == $high_17) or ( $CRIJ2_porcentaje == $high_18)or($CRIJ2_porcentaje > 20)) && ($CRIJ2_porcentaje > 20)) {
            $CRIJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CRIJ2c = '';
        }
        if ((($CRIJ3_porcentaje == $high_17)or ( $CRIJ3_porcentaje == $high_18)or($CRIJ3_porcentaje > 20)) && ($CRIJ3_porcentaje > 20)) {
            $CRIJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CRIJ3c = '';
        }
        if ((($CRIJ4_porcentaje == $high_17) or ( $CRIJ4_porcentaje == $high_18)or($CRIJ4_porcentaje > 20)) && ($CRIJ4_porcentaje > 20)) {
            $CRIJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CRIJ4c = '';
        }
        if ((($CRIJ5_porcentaje == $high_17) or ( $CRIJ5_porcentaje == $high_18)or($CRIJ5_porcentaje > 20)) && ($CRIJ5_porcentaje > 20)) {
            $CRIJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CRIJ5c = '';
        }
        $variable10= array($CRIP1_porcentaje, $CRIP2_porcentaje, $CRIP3_porcentaje, $CRIP4_porcentaje, $CRIP5_porcentaje);
        $c = 0;
        $high_19= $high_20= 0;
        do {
            if (isset($variable10[$c])) {
                if ($variable10[$c] > $high_19) {
                    $high_20= $high_19;
                    $high_19= $variable10[$c];
                } else if ($variable10[$c] > $high_20) {
                    $high_20= $variable10[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CRIP1_porcentaje == $high_19) or ( $CRIP1_porcentaje == $high_20)or($CRIP1_porcentaje > 20)) && ($CRIP1_porcentaje > 20)) {
            $CRIP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CRIP1c = '';
        }
        if ((($CRIP2_porcentaje == $high_19) or ( $CRIP2_porcentaje == $high_20)or($CRIP2_porcentaje > 20)) && ($CRIP2_porcentaje > 20)) {
            $CRIP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CRIP2c = '';
        }
        if ((($CRIP3_porcentaje == $high_19)or ( $CRIP3_porcentaje == $high_20)or($CRIP3_porcentaje > 20)) && ($CRIP3_porcentaje > 20)) {
            $CRIP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CRIP3c = '';
        }
        if ((($CRIP4_porcentaje == $high_19) or ( $CRIP4_porcentaje == $high_20)or($CRIP4_porcentaje > 20)) && ($CRIP4_porcentaje > 20)) {
            $CRIP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CRIP4c = '';
        }
        if ((($CRIP5_porcentaje == $high_19) or ( $CRIP5_porcentaje == $high_20)or($CRIP5_porcentaje > 20)) && ($CRIP5_porcentaje > 20)) {
            $CRIP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CRIP5c = '';
        }
        $variable11= array($CRIA1_porcentaje, $CRIA2_porcentaje, $CRIA3_porcentaje, $CRIA4_porcentaje, $CRIA5_porcentaje);
        $c = 0;
        $high_21= $high_22= 0;
        do {
            if (isset($variable11[$c])) {
                if ($variable11[$c] > $high_21) {
                    $high_22= $high_21;
                    $high_21= $variable11[$c];
                } else if ($variable11[$c] > $high_22) {
                    $high_22= $variable11[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CRIA1_porcentaje == $high_21) or ( $CRIA1_porcentaje == $high_22)or($CRIA1_porcentaje > 20)) && ($CRIA1_porcentaje > 20)) {
            $CRIA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CRIA1c = '';
        }
        if ((($CRIA2_porcentaje == $high_21) or ( $CRIA2_porcentaje == $high_22)or($CRIA2_porcentaje > 20)) && ($CRIA2_porcentaje > 20)) {
            $CRIA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CRIA2c = '';
        }
        if ((($CRIA3_porcentaje == $high_21)or ( $CRIA3_porcentaje == $high_22)or($CRIA3_porcentaje > 20)) && ($CRIA3_porcentaje > 20)) {
            $CRIA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CRIA3c = '';
        }
        if ((($CRIA4_porcentaje == $high_21) or ( $CRIA4_porcentaje == $high_22)or($CRIA4_porcentaje > 20)) && ($CRIA4_porcentaje > 20)) {
            $CRIA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CRIA4c = '';
        }
        if ((($CRIA5_porcentaje == $high_21) or ( $CRIA5_porcentaje == $high_22)or($CRIA5_porcentaje > 20)) && ($CRIA5_porcentaje > 20)) {
            $CRIA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CRIA5c = '';
        }
        $variable12= array($CRIO1_porcentaje, $CRIO2_porcentaje, $CRIO3_porcentaje, $CRIO4_porcentaje, $CRIO5_porcentaje);
        $c = 0;
        $high_23= $high_24= 0;
        do {
            if (isset($variable12[$c])) {
                if ($variable12[$c] > $high_23) {
                    $high_24= $high_23;
                    $high_23= $variable12[$c];
                } else if ($variable12[$c] > $high_24) {
                    $high_24= $variable12[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CRIO1_porcentaje == $high_23) or ( $CRIO1_porcentaje == $high_24)or($CRIO1_porcentaje > 20)) && ($CRIO1_porcentaje > 20)) {
            $CRIO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CRIO1c = '';
        }
        if ((($CRIO2_porcentaje == $high_23) or ( $CRIO2_porcentaje == $high_24)or($CRIO2_porcentaje > 20)) && ($CRIO2_porcentaje > 20)) {
            $CRIO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CRIO2c = '';
        }
        if ((($CRIO3_porcentaje == $high_23)or ( $CRIO3_porcentaje == $high_24)or($CRIO3_porcentaje > 20)) && ($CRIO3_porcentaje > 20)) {
            $CRIO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CRIO3c = '';
        }
        if ((($CRIO4_porcentaje == $high_23) or ( $CRIO4_porcentaje == $high_24)or($CRIO4_porcentaje > 20)) && ($CRIO4_porcentaje > 20)) {
            $CRIO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CRIO4c = '';
        }
        if ((($CRIO5_porcentaje == $high_23) or ( $CRIO5_porcentaje == $high_24)or($CRIO5_porcentaje > 20)) && ($CRIO5_porcentaje > 20)) {
            $CRIO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CRIO5c = '';
        }
        $variable13= array($SEJ1_porcentaje, $SEJ2_porcentaje, $SEJ3_porcentaje, $SEJ4_porcentaje, $SEJ5_porcentaje);
        $c = 0;
        $high_25= $high_26= 0;
        do {
            if (isset($variable13[$c])) {
                if ($variable13[$c] > $high_25) {
                    $high_26= $high_25;
                    $high_25= $variable13[$c];
                } else if ($variable13[$c] > $high_26) {
                    $high_26= $variable13[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($SEJ1_porcentaje == $high_25) or ( $SEJ1_porcentaje == $high_26)or($SEJ1_porcentaje > 20)) && ($SEJ1_porcentaje > 20)) {
            $SEJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $SEJ1c = '';
        }
        if ((($SEJ2_porcentaje == $high_25) or ( $SEJ2_porcentaje == $high_26)or($SEJ2_porcentaje > 20)) && ($SEJ2_porcentaje > 20)) {
            $SEJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $SEJ2c = '';
        }
        if ((($SEJ3_porcentaje == $high_25)or ( $SEJ3_porcentaje == $high_26)or($SEJ3_porcentaje > 20)) && ($SEJ3_porcentaje > 20)) {
            $SEJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $SEJ3c = '';
        }
        if ((($SEJ4_porcentaje == $high_25) or ( $SEJ4_porcentaje == $high_26)or($SEJ4_porcentaje > 20)) && ($SEJ4_porcentaje > 20)) {
            $SEJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $SEJ4c = '';
        }
        if ((($SEJ5_porcentaje == $high_25) or ( $SEJ5_porcentaje == $high_26)or($SEJ5_porcentaje > 20)) && ($SEJ5_porcentaje > 20)) {
            $SEJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $SEJ5c = '';
        }
        $variable14= array($SEP1_porcentaje, $SEP2_porcentaje, $SEP3_porcentaje, $SEP4_porcentaje, $SEP5_porcentaje);
        $c = 0;
        $high_27= $high_28= 0;
        do {
            if (isset($variable14[$c])) {
                if ($variable14[$c] > $high_27) {
                    $high_28= $high_27;
                    $high_27= $variable14[$c];
                } else if ($variable14[$c] > $high_28) {
                    $high_28= $variable14[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($SEP1_porcentaje == $high_27) or ( $SEP1_porcentaje == $high_28)or($SEP1_porcentaje > 20)) && ($SEP1_porcentaje > 20)) {
            $SEP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $SEP1c = '';
        }
        if ((($SEP2_porcentaje == $high_27) or ( $SEP2_porcentaje == $high_28)or($SEP2_porcentaje > 20)) && ($SEP2_porcentaje > 20)) {
            $SEP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $SEP2c = '';
        }
        if ((($SEP3_porcentaje == $high_27)or ( $SEP3_porcentaje == $high_28)or($SEP3_porcentaje > 20)) && ($SEP3_porcentaje > 20)) {
            $SEP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $SEP3c = '';
        }
        if ((($SEP4_porcentaje == $high_27) or ( $SEP4_porcentaje == $high_28)or($SEP4_porcentaje > 20)) && ($SEP4_porcentaje > 20)) {
            $SEP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $SEP4c = '';
        }
        if ((($SEP5_porcentaje == $high_27) or ( $SEP5_porcentaje == $high_28)or($SEP5_porcentaje > 20)) && ($SEP5_porcentaje > 20)) {
            $SEP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $SEP5c = '';
        }
        $variable15= array($SEA1_porcentaje, $SEA2_porcentaje, $SEA3_porcentaje, $SEA4_porcentaje, $SEA5_porcentaje);
        $c = 0;
        $high_29= $high_30= 0;
        do {
            if (isset($variable15[$c])) {
                if ($variable15[$c] > $high_29) {
                    $high_30= $high_29;
                    $high_29= $variable15[$c];
                } else if ($variable15[$c] > $high_30) {
                    $high_30= $variable15[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($SEA1_porcentaje == $high_29) or ( $SEA1_porcentaje == $high_30)or($SEA1_porcentaje > 20)) && ($SEA1_porcentaje > 20)) {
            $SEA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $SEA1c = '';
        }
        if ((($SEA2_porcentaje == $high_29) or ( $SEA2_porcentaje == $high_30)or($SEA2_porcentaje > 20)) && ($SEA2_porcentaje > 20)) {
            $SEA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $SEA2c = '';
        }
        if ((($SEA3_porcentaje == $high_29)or ( $SEA3_porcentaje == $high_30)or($SEA3_porcentaje > 20)) && ($SEA3_porcentaje > 20)) {
            $SEA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $SEA3c = '';
        }
        if ((($SEA4_porcentaje == $high_29) or ( $SEA4_porcentaje == $high_30)or($SEA4_porcentaje > 20)) && ($SEA4_porcentaje > 20)) {
            $SEA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $SEA4c = '';
        }
        if ((($SEA5_porcentaje == $high_29) or ( $SEA5_porcentaje == $high_30)or($SEA5_porcentaje > 20)) && ($SEA5_porcentaje > 20)) {
            $SEA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $SEA5c = '';
        }
        $variable16= array($SEO1_porcentaje, $SEO2_porcentaje, $SEO3_porcentaje, $SEO4_porcentaje, $SEO5_porcentaje);
        $c = 0;
        $high_31= $high_32= 0;
        do {
            if (isset($variable16[$c])) {
                if ($variable16[$c] > $high_31) {
                    $high_32= $high_31;
                    $high_31= $variable16[$c];
                } else if ($variable16[$c] > $high_32) {
                    $high_32= $variable16[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($SEO1_porcentaje == $high_31) or ( $SEO1_porcentaje == $high_32)or($SEO1_porcentaje > 20)) && ($SEO1_porcentaje > 20)) {
            $SEO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $SEO1c = '';
        }
        if ((($SEO2_porcentaje == $high_31) or ( $SEO2_porcentaje == $high_32)or($SEO2_porcentaje > 20)) && ($SEO2_porcentaje > 20)) {
            $SEO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $SEO2c = '';
        }
        if ((($SEO3_porcentaje == $high_31)or ( $SEO3_porcentaje == $high_32)or($SEO3_porcentaje > 20)) && ($SEO3_porcentaje > 20)) {
            $SEO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $SEO3c = '';
        }
        if ((($SEO4_porcentaje == $high_31) or ( $SEO4_porcentaje == $high_32)or($SEO4_porcentaje > 20)) && ($SEO4_porcentaje > 20)) {
            $SEO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $SEO4c = '';
        }
        if ((($SEO5_porcentaje == $high_31) or ( $SEO5_porcentaje == $high_32)or($SEO5_porcentaje > 20)) && ($SEO5_porcentaje > 20)) {
            $SEO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $SEO5c = '';
        }
        $variable17= array($CVJ1_porcentaje, $CVJ2_porcentaje, $CVJ3_porcentaje, $CVJ4_porcentaje, $CVJ5_porcentaje);
        $c = 0;
        $high_33= $high_34= 0;
        do {
            if (isset($variable17[$c])) {
                if ($variable17[$c] > $high_33) {
                    $high_34= $high_33;
                    $high_33= $variable17[$c];
                } else if ($variable17[$c] > $high_34) {
                    $high_34= $variable17[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CVJ1_porcentaje == $high_33) or ( $CVJ1_porcentaje == $high_34)or($CVJ1_porcentaje > 20)) && ($CVJ1_porcentaje > 20)) {
            $CVJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CVJ1c = '';
        }
        if ((($CVJ2_porcentaje == $high_33) or ( $CVJ2_porcentaje == $high_34)or($CVJ2_porcentaje > 20)) && ($CVJ2_porcentaje > 20)) {
            $CVJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CVJ2c = '';
        }
        if ((($CVJ3_porcentaje == $high_33)or ( $CVJ3_porcentaje == $high_34)or($CVJ3_porcentaje > 20)) && ($CVJ3_porcentaje > 20)) {
            $CVJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CVJ3c = '';
        }
        if ((($CVJ4_porcentaje == $high_33) or ( $CVJ4_porcentaje == $high_34)or($CVJ4_porcentaje > 20)) && ($CVJ4_porcentaje > 20)) {
            $CVJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CVJ4c = '';
        }
        if ((($CVJ5_porcentaje == $high_33) or ( $CVJ5_porcentaje == $high_34)or($CVJ5_porcentaje > 20)) && ($CVJ5_porcentaje > 20)) {
            $CVJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CVJ5c = '';
        }
        $variable18= array($CVP1_porcentaje, $CVP2_porcentaje, $CVP3_porcentaje, $CVP4_porcentaje, $CVP5_porcentaje);
        $c = 0;
        $high_35= $high_36= 0;
        do {
            if (isset($variable18[$c])) {
                if ($variable18[$c] > $high_35) {
                    $high_36= $high_35;
                    $high_35= $variable18[$c];
                } else if ($variable18[$c] > $high_36) {
                    $high_36= $variable18[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CVP1_porcentaje == $high_35) or ( $CVP1_porcentaje == $high_36)or($CVP1_porcentaje > 20)) && ($CVP1_porcentaje > 20)) {
            $CVP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CVP1c = '';
        }
        if ((($CVP2_porcentaje == $high_35) or ( $CVP2_porcentaje == $high_36)or($CVP2_porcentaje > 20)) && ($CVP2_porcentaje > 20)) {
            $CVP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CVP2c = '';
        }
        if ((($CVP3_porcentaje == $high_35)or ( $CVP3_porcentaje == $high_36)or($CVP3_porcentaje > 20)) && ($CVP3_porcentaje > 20)) {
            $CVP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CVP3c = '';
        }
        if ((($CVP4_porcentaje == $high_35) or ( $CVP4_porcentaje == $high_36)or($CVP4_porcentaje > 20)) && ($CVP4_porcentaje > 20)) {
            $CVP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CVP4c = '';
        }
        if ((($CVP5_porcentaje == $high_35) or ( $CVP5_porcentaje == $high_36)or($CVP5_porcentaje > 20)) && ($CVP5_porcentaje > 20)) {
            $CVP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CVP5c = '';
        }
        $variable19= array($CVA1_porcentaje, $CVA2_porcentaje, $CVA3_porcentaje, $CVA4_porcentaje, $CVA5_porcentaje);
        $c = 0;
        $high_37= $high_38= 0;
        do {
            if (isset($variable19[$c])) {
                if ($variable19[$c] > $high_37) {
                    $high_38= $high_37;
                    $high_37= $variable19[$c];
                } else if ($variable19[$c] > $high_38) {
                    $high_38= $variable19[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CVA1_porcentaje == $high_37) or ( $CVA1_porcentaje == $high_38)or($CVA1_porcentaje > 20)) && ($CVA1_porcentaje > 20)) {
            $CVA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CVA1c = '';
        }
        if ((($CVA2_porcentaje == $high_37) or ( $CVA2_porcentaje == $high_38)or($CVA2_porcentaje > 20)) && ($CVA2_porcentaje > 20)) {
            $CVA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CVA2c = '';
        }
        if ((($CVA3_porcentaje == $high_37)or ( $CVA3_porcentaje == $high_38)or($CVA3_porcentaje > 20)) && ($CVA3_porcentaje > 20)) {
            $CVA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CVA3c = '';
        }
        if ((($CVA4_porcentaje == $high_37) or ( $CVA4_porcentaje == $high_38)or($CVA4_porcentaje > 20)) && ($CVA4_porcentaje > 20)) {
            $CVA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CVA4c = '';
        }
        if ((($CVA5_porcentaje == $high_37) or ( $CVA5_porcentaje == $high_38)or($CVA5_porcentaje > 20)) && ($CVA5_porcentaje > 20)) {
            $CVA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CVA5c = '';
        }
        $variable20= array($CVO1_porcentaje, $CVO2_porcentaje, $CVO3_porcentaje, $CVO4_porcentaje, $CVO5_porcentaje);
        $c = 0;
        $high_39= $high_40= 0;
        do {
            if (isset($variable20[$c])) {
                if ($variable20[$c] > $high_39) {
                    $high_40= $high_39;
                    $high_39= $variable20[$c];
                } else if ($variable20[$c] > $high_40) {
                    $high_40= $variable20[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($CVO1_porcentaje == $high_39) or ( $CVO1_porcentaje == $high_40)or($CVO1_porcentaje > 20)) && ($CVO1_porcentaje > 20)) {
            $CVO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $CVO1c = '';
        }
        if ((($CVO2_porcentaje == $high_39) or ( $CVO2_porcentaje == $high_40)or($CVO2_porcentaje > 20)) && ($CVO2_porcentaje > 20)) {
            $CVO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $CVO2c = '';
        }
        if ((($CVO3_porcentaje == $high_39)or ( $CVO3_porcentaje == $high_40)or($CVO3_porcentaje > 20)) && ($CVO3_porcentaje > 20)) {
            $CVO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $CVO3c = '';
        }
        if ((($CVO4_porcentaje == $high_39) or ( $CVO4_porcentaje == $high_40)or($CVO4_porcentaje > 20)) && ($CVO4_porcentaje > 20)) {
            $CVO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $CVO4c = '';
        }
        if ((($CVO5_porcentaje == $high_39) or ( $CVO5_porcentaje == $high_40)or($CVO5_porcentaje > 20)) && ($CVO5_porcentaje > 20)) {
            $CVO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $CVO5c = '';
        }
        $variable21= array($IEJ1_porcentaje, $IEJ2_porcentaje, $IEJ3_porcentaje, $IEJ4_porcentaje, $IEJ5_porcentaje);
        $c = 0;
        $high_41= $high_42= 0;
        do {
            if (isset($variable21[$c])) {
                if ($variable21[$c] > $high_41) {
                    $high_42= $high_41;
                    $high_41= $variable21[$c];
                } else if ($variable21[$c] > $high_42) {
                    $high_42= $variable21[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($IEJ1_porcentaje == $high_41) or ( $IEJ1_porcentaje == $high_42)or($IEJ1_porcentaje > 20)) && ($IEJ1_porcentaje > 20)) {
            $IEJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $IEJ1c = '';
        }
        if ((($IEJ2_porcentaje == $high_41) or ( $IEJ2_porcentaje == $high_42)or($IEJ2_porcentaje > 20)) && ($IEJ2_porcentaje > 20)) {
            $IEJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $IEJ2c = '';
        }
        if ((($IEJ3_porcentaje == $high_41)or ( $IEJ3_porcentaje == $high_42)or($IEJ3_porcentaje > 20)) && ($IEJ3_porcentaje > 20)) {
            $IEJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $IEJ3c = '';
        }
        if ((($IEJ4_porcentaje == $high_41) or ( $IEJ4_porcentaje == $high_42)or($IEJ4_porcentaje > 20)) && ($IEJ4_porcentaje > 20)) {
            $IEJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $IEJ4c = '';
        }
        if ((($IEJ5_porcentaje == $high_41) or ( $IEJ5_porcentaje == $high_42)or($IEJ5_porcentaje > 20)) && ($IEJ5_porcentaje > 20)) {
            $IEJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $IEJ5c = '';
        }
        $variable22= array($IEP1_porcentaje, $IEP2_porcentaje, $IEP3_porcentaje, $IEP4_porcentaje, $IEP5_porcentaje);
        $c = 0;
        $high_43= $high_44= 0;
        do {
            if (isset($variable22[$c])) {
                if ($variable22[$c] > $high_43) {
                    $high_44= $high_43;
                    $high_43= $variable22[$c];
                } else if ($variable22[$c] > $high_44) {
                    $high_44= $variable22[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($IEP1_porcentaje == $high_43) or ( $IEP1_porcentaje == $high_44)or($IEP1_porcentaje > 20)) && ($IEP1_porcentaje > 20)) {
            $IEP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $IEP1c = '';
        }
        if ((($IEP2_porcentaje == $high_43) or ( $IEP2_porcentaje == $high_44)or($IEP2_porcentaje > 20)) && ($IEP2_porcentaje > 20)) {
            $IEP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $IEP2c = '';
        }
        if ((($IEP3_porcentaje == $high_43)or ( $IEP3_porcentaje == $high_44)or($IEP3_porcentaje > 20)) && ($IEP3_porcentaje > 20)) {
            $IEP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $IEP3c = '';
        }
        if ((($IEP4_porcentaje == $high_43) or ( $IEP4_porcentaje == $high_44)or($IEP4_porcentaje > 20)) && ($IEP4_porcentaje > 20)) {
            $IEP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $IEP4c = '';
        }
        if ((($IEP5_porcentaje == $high_43) or ( $IEP5_porcentaje == $high_44)or($IEP5_porcentaje > 20)) && ($IEP5_porcentaje > 20)) {
            $IEP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $IEP5c = '';
        }
        $variable23= array($IEA1_porcentaje, $IEA2_porcentaje, $IEA3_porcentaje, $IEA4_porcentaje, $IEA5_porcentaje);
        $c = 0;
        $high_45= $high_46= 0;
        do {
            if (isset($variable23[$c])) {
                if ($variable23[$c] > $high_45) {
                    $high_46= $high_45;
                    $high_45= $variable23[$c];
                } else if ($variable23[$c] > $high_46) {
                    $high_46= $variable23[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($IEA1_porcentaje == $high_45) or ( $IEA1_porcentaje == $high_46)or($IEA1_porcentaje > 20)) && ($IEA1_porcentaje > 20)) {
            $IEA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $IEA1c = '';
        }
        if ((($IEA2_porcentaje == $high_45) or ( $IEA2_porcentaje == $high_46)or($IEA2_porcentaje > 20)) && ($IEA2_porcentaje > 20)) {
            $IEA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $IEA2c = '';
        }
        if ((($IEA3_porcentaje == $high_45)or ( $IEA3_porcentaje == $high_46)or($IEA3_porcentaje > 20)) && ($IEA3_porcentaje > 20)) {
            $IEA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $IEA3c = '';
        }
        if ((($IEA4_porcentaje == $high_45) or ( $IEA4_porcentaje == $high_46)or($IEA4_porcentaje > 20)) && ($IEA4_porcentaje > 20)) {
            $IEA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $IEA4c = '';
        }
        if ((($IEA5_porcentaje == $high_45) or ( $IEA5_porcentaje == $high_46)or($IEA5_porcentaje > 20)) && ($IEA5_porcentaje > 20)) {
            $IEA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $IEA5c = '';
        }
        $variable24= array($IEO1_porcentaje, $IEO2_porcentaje, $IEO3_porcentaje, $IEO4_porcentaje, $IEO5_porcentaje);
        $c = 0;
        $high_47= $high_48= 0;
        do {
            if (isset($variable24[$c])) {
                if ($variable24[$c] > $high_47) {
                    $high_48= $high_47;
                    $high_47= $variable24[$c];
                } else if ($variable24[$c] > $high_48) {
                    $high_48= $variable24[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($IEO1_porcentaje == $high_47) or ( $IEO1_porcentaje == $high_48)or($IEO1_porcentaje > 20)) && ($IEO1_porcentaje > 20)) {
            $IEO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $IEO1c = '';
        }
        if ((($IEO2_porcentaje == $high_47) or ( $IEO2_porcentaje == $high_48)or($IEO2_porcentaje > 20)) && ($IEO2_porcentaje > 20)) {
            $IEO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $IEO2c = '';
        }
        if ((($IEO3_porcentaje == $high_47)or ( $IEO3_porcentaje == $high_48)or($IEO3_porcentaje > 20)) && ($IEO3_porcentaje > 20)) {
            $IEO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $IEO3c = '';
        }
        if ((($IEO4_porcentaje == $high_47) or ( $IEO4_porcentaje == $high_48)or($IEO4_porcentaje > 20)) && ($IEO4_porcentaje > 20)) {
            $IEO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $IEO4c = '';
        }
        if ((($IEO5_porcentaje == $high_47) or ( $IEO5_porcentaje == $high_48)or($IEO5_porcentaje > 20)) && ($IEO5_porcentaje > 20)) {
            $IEO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $IEO5c = '';
        }
        $variable25= array($DVJ1_porcentaje, $DVJ2_porcentaje, $DVJ3_porcentaje, $DVJ4_porcentaje, $DVJ5_porcentaje);
        $c = 0;
        $high_49= $high_50= 0;
        do {
            if (isset($variable25[$c])) {
                if ($variable25[$c] > $high_49) {
                    $high_50= $high_49;
                    $high_49= $variable25[$c];
                } else if ($variable25[$c] > $high_50) {
                    $high_50= $variable25[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DVJ1_porcentaje == $high_49) or ( $DVJ1_porcentaje == $high_50)or($DVJ1_porcentaje > 20)) && ($DVJ1_porcentaje > 20)) {
            $DVJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DVJ1c = '';
        }
        if ((($DVJ2_porcentaje == $high_49) or ( $DVJ2_porcentaje == $high_50)or($DVJ2_porcentaje > 20)) && ($DVJ2_porcentaje > 20)) {
            $DVJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DVJ2c = '';
        }
        if ((($DVJ3_porcentaje == $high_49)or ( $DVJ3_porcentaje == $high_50)or($DVJ3_porcentaje > 20)) && ($DVJ3_porcentaje > 20)) {
            $DVJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DVJ3c = '';
        }
        if ((($DVJ4_porcentaje == $high_49) or ( $DVJ4_porcentaje == $high_50)or($DVJ4_porcentaje > 20)) && ($DVJ4_porcentaje > 20)) {
            $DVJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DVJ4c = '';
        }
        if ((($DVJ5_porcentaje == $high_49) or ( $DVJ5_porcentaje == $high_50)or($DVJ5_porcentaje > 20)) && ($DVJ5_porcentaje > 20)) {
            $DVJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DVJ5c = '';
        }
        $variable26= array($DVP1_porcentaje, $DVP2_porcentaje, $DVP3_porcentaje, $DVP4_porcentaje, $DVP5_porcentaje);
        $c = 0;
        $high_51= $high_52= 0;
        do {
            if (isset($variable26[$c])) {
                if ($variable26[$c] > $high_51) {
                    $high_52= $high_51;
                    $high_51= $variable26[$c];
                } else if ($variable26[$c] > $high_52) {
                    $high_52= $variable26[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DVP1_porcentaje == $high_51) or ( $DVP1_porcentaje == $high_52)or($DVP1_porcentaje > 20)) && ($DVP1_porcentaje > 20)) {
            $DVP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DVP1c = '';
        }
        if ((($DVP2_porcentaje == $high_51) or ( $DVP2_porcentaje == $high_52)or($DVP2_porcentaje > 20)) && ($DVP2_porcentaje > 20)) {
            $DVP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DVP2c = '';
        }
        if ((($DVP3_porcentaje == $high_51)or ( $DVP3_porcentaje == $high_52)or($DVP3_porcentaje > 20)) && ($DVP3_porcentaje > 20)) {
            $DVP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DVP3c = '';
        }
        if ((($DVP4_porcentaje == $high_51) or ( $DVP4_porcentaje == $high_52)or($DVP4_porcentaje > 20)) && ($DVP4_porcentaje > 20)) {
            $DVP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DVP4c = '';
        }
        if ((($DVP5_porcentaje == $high_51) or ( $DVP5_porcentaje == $high_52)or($DVP5_porcentaje > 20)) && ($DVP5_porcentaje > 20)) {
            $DVP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DVP5c = '';
        }
        $variable27= array($DVA1_porcentaje, $DVA2_porcentaje, $DVA3_porcentaje, $DVA4_porcentaje, $DVA5_porcentaje);
        $c = 0;
        $high_53= $high_54= 0;
        do {
            if (isset($variable27[$c])) {
                if ($variable27[$c] > $high_53) {
                    $high_54= $high_53;
                    $high_53= $variable27[$c];
                } else if ($variable27[$c] > $high_54) {
                    $high_54= $variable27[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DVA1_porcentaje == $high_53) or ( $DVA1_porcentaje == $high_54)or($DVA1_porcentaje > 20)) && ($DVA1_porcentaje > 20)) {
            $DVA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DVA1c = '';
        }
        if ((($DVA2_porcentaje == $high_53) or ( $DVA2_porcentaje == $high_54)or($DVA2_porcentaje > 20)) && ($DVA2_porcentaje > 20)) {
            $DVA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DVA2c = '';
        }
        if ((($DVA3_porcentaje == $high_53)or ( $DVA3_porcentaje == $high_54)or($DVA3_porcentaje > 20)) && ($DVA3_porcentaje > 20)) {
            $DVA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DVA3c = '';
        }
        if ((($DVA4_porcentaje == $high_53) or ( $DVA4_porcentaje == $high_54)or($DVA4_porcentaje > 20)) && ($DVA4_porcentaje > 20)) {
            $DVA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DVA4c = '';
        }
        if ((($DVA5_porcentaje == $high_53) or ( $DVA5_porcentaje == $high_54)or($DVA5_porcentaje > 20)) && ($DVA5_porcentaje > 20)) {
            $DVA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DVA5c = '';
        }
        $variable28= array($DVO1_porcentaje, $DVO2_porcentaje, $DVO3_porcentaje, $DVO4_porcentaje, $DVO5_porcentaje);
        $c = 0;
        $high_55= $high_56= 0;
        do {
            if (isset($variable28[$c])) {
                if ($variable28[$c] > $high_55) {
                    $high_56= $high_55;
                    $high_55= $variable28[$c];
                } else if ($variable28[$c] > $high_56) {
                    $high_56= $variable28[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($DVO1_porcentaje == $high_55) or ( $DVO1_porcentaje == $high_56)or($DVO1_porcentaje > 20)) && ($DVO1_porcentaje > 20)) {
            $DVO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $DVO1c = '';
        }
        if ((($DVO2_porcentaje == $high_55) or ( $DVO2_porcentaje == $high_56)or($DVO2_porcentaje > 20)) && ($DVO2_porcentaje > 20)) {
            $DVO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $DVO2c = '';
        }
        if ((($DVO3_porcentaje == $high_55)or ( $DVO3_porcentaje == $high_56)or($DVO3_porcentaje > 20)) && ($DVO3_porcentaje > 20)) {
            $DVO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $DVO3c = '';
        }
        if ((($DVO4_porcentaje == $high_55) or ( $DVO4_porcentaje == $high_56)or($DVO4_porcentaje > 20)) && ($DVO4_porcentaje > 20)) {
            $DVO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $DVO4c = '';
        }
        if ((($DVO5_porcentaje == $high_55) or ( $DVO5_porcentaje == $high_56)or($DVO5_porcentaje > 20)) && ($DVO5_porcentaje > 20)) {
            $DVO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $DVO5c = '';
        }
        $variable29= array($ET1_porcentaje, $ET2_porcentaje, $ET3_porcentaje, $ET4_porcentaje, $ET5_porcentaje);
        $c = 0;
        $high_57= $high_58= 0;
        do {
            if (isset($variable29[$c])) {
                if ($variable29[$c] > $high_57) {
                    $high_58= $high_57;
                    $high_57= $variable29[$c];
                } else if ($variable29[$c] > $high_58) {
                    $high_58= $variable29[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ET1_porcentaje == $high_57) or ( $ET1_porcentaje == $high_58)or($ET1_porcentaje > 20)) && ($ET1_porcentaje > 20)) {
            $ET1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ET1c = '';
        }
        if ((($ET2_porcentaje == $high_57) or ( $ET2_porcentaje == $high_58)or($ET2_porcentaje > 20)) && ($ET2_porcentaje > 20)) {
            $ET2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ET2c = '';
        }
        if ((($ET3_porcentaje == $high_57)or ( $ET3_porcentaje == $high_58)or($ET3_porcentaje > 20)) && ($ET3_porcentaje > 20)) {
            $ET3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ET3c = '';
        }
        if ((($ET4_porcentaje == $high_57) or ( $ET4_porcentaje == $high_58)or($ET4_porcentaje > 20)) && ($ET4_porcentaje > 20)) {
            $ET4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ET4c = '';
        }
        if ((($ET5_porcentaje == $high_57) or ( $ET5_porcentaje == $high_58)or($ET5_porcentaje > 20)) && ($ET5_porcentaje > 20)) {
            $ET5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ET5c = '';
        } 
        $variable30= array($ETJ1_porcentaje, $ETJ2_porcentaje, $ETJ3_porcentaje, $ETJ4_porcentaje, $ETJ5_porcentaje);
        $c = 0;
        $high_59= $high_60= 0;
        do {
            if (isset($variable30[$c])) {
                if ($variable30[$c] > $high_59) {
                    $high_60= $high_59;
                    $high_59= $variable30[$c];
                } else if ($variable30[$c] > $high_60) {
                    $high_60= $variable30[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ETJ1_porcentaje == $high_59) or ( $ETJ1_porcentaje == $high_60)or($ETJ1_porcentaje > 20)) && ($ETJ1_porcentaje > 20)) {
            $ETJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ETJ1c = '';
        }
        if ((($ETJ2_porcentaje == $high_59) or ( $ETJ2_porcentaje == $high_60)or($ETJ2_porcentaje > 20)) && ($ETJ2_porcentaje > 20)) {
            $ETJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ETJ2c = '';
        }
        if ((($ETJ3_porcentaje == $high_59)or ( $ETJ3_porcentaje == $high_60)or($ETJ3_porcentaje > 20)) && ($ETJ3_porcentaje > 20)) {
            $ETJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ETJ3c = '';
        }
        if ((($ETJ4_porcentaje == $high_59) or ( $ETJ4_porcentaje == $high_60)or($ETJ4_porcentaje > 20)) && ($ETJ4_porcentaje > 20)) {
            $ETJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ETJ4c = '';
        }
        if ((($ETJ5_porcentaje == $high_59) or ( $ETJ5_porcentaje == $high_60)or($ETJ5_porcentaje > 20)) && ($ETJ5_porcentaje > 20)) {
            $ETJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ETJ5c = '';
        }
        $variable31= array($ETP1_porcentaje, $ETP2_porcentaje, $ETP3_porcentaje, $ETP4_porcentaje, $ETP5_porcentaje);
        $c = 0;
        $high_61= $high_62= 0;
        do {
            if (isset($variable31[$c])) {
                if ($variable31[$c] > $high_61) {
                    $high_62= $high_61;
                    $high_61= $variable31[$c];
                } else if ($variable31[$c] > $high_62) {
                    $high_62= $variable31[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ETP1_porcentaje == $high_61) or ( $ETP1_porcentaje == $high_62)or($ETP1_porcentaje > 20)) && ($ETP1_porcentaje > 20)) {
            $ETP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ETP1c = '';
        }
        if ((($ETP2_porcentaje == $high_61) or ( $ETP2_porcentaje == $high_62)or($ETP2_porcentaje > 20)) && ($ETP2_porcentaje > 20)) {
            $ETP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ETP2c = '';
        }
        if ((($ETP3_porcentaje == $high_61)or ( $ETP3_porcentaje == $high_62)or($ETP3_porcentaje > 20)) && ($ETP3_porcentaje > 20)) {
            $ETP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ETP3c = '';
        }
        if ((($ETP4_porcentaje == $high_61) or ( $ETP4_porcentaje == $high_62)or($ETP4_porcentaje > 20)) && ($ETP4_porcentaje > 20)) {
            $ETP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ETP4c = '';
        }
        if ((($ETP5_porcentaje == $high_61) or ( $ETP5_porcentaje == $high_62)or($ETP5_porcentaje > 20)) && ($ETP5_porcentaje > 20)) {
            $ETP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ETP5c = '';
        } 
        $variable32= array($ETA1_porcentaje, $ETA2_porcentaje, $ETA3_porcentaje, $ETA4_porcentaje, $ETA5_porcentaje);
        $c = 0;
        $high_63= $high_64= 0;
        do {
            if (isset($variable32[$c])) {
                if ($variable32[$c] > $high_63) {
                    $high_64= $high_63;
                    $high_63= $variable32[$c];
                } else if ($variable32[$c] > $high_64) {
                    $high_64= $variable32[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ETA1_porcentaje == $high_63) or ( $ETA1_porcentaje == $high_64)or($ETA1_porcentaje > 20)) && ($ETA1_porcentaje > 20)) {
            $ETA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ETA1c = '';
        }
        if ((($ETA2_porcentaje == $high_63) or ( $ETA2_porcentaje == $high_64)or($ETA2_porcentaje > 20)) && ($ETA2_porcentaje > 20)) {
            $ETA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ETA2c = '';
        }
        if ((($ETA3_porcentaje == $high_63)or ( $ETA3_porcentaje == $high_64)or($ETA3_porcentaje > 20)) && ($ETA3_porcentaje > 20)) {
            $ETA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ETA3c = '';
        }
        if ((($ETA4_porcentaje == $high_63) or ( $ETA4_porcentaje == $high_64)or($ETA4_porcentaje > 20)) && ($ETA4_porcentaje > 20)) {
            $ETA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ETA4c = '';
        }
        if ((($ETA5_porcentaje == $high_63) or ( $ETA5_porcentaje == $high_64)or($ETA5_porcentaje > 20)) && ($ETA5_porcentaje > 20)) {
            $ETA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ETA5c = '';
        } 
        $variable33= array($ETO1_porcentaje, $ETO2_porcentaje, $ETO3_porcentaje, $ETO4_porcentaje, $ETO5_porcentaje);
        $c = 0;
        $high_65= $high_66= 0;
        do {
            if (isset($variable33[$c])) {
                if ($variable33[$c] > $high_65) {
                    $high_66= $high_65;
                    $high_65= $variable33[$c];
                } else if ($variable33[$c] > $high_66) {
                    $high_66= $variable33[$c];
                }
            }$c++;
        } while ($c <= 20);
        if ((($ETO1_porcentaje == $high_65) or ( $ETO1_porcentaje == $high_66)or($ETO1_porcentaje > 20)) && ($ETO1_porcentaje > 20)) {
            $ETO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
        } else {
            $ETO1c = '';
        }
        if ((($ETO2_porcentaje == $high_65) or ( $ETO2_porcentaje == $high_66)or($ETO2_porcentaje > 20)) && ($ETO2_porcentaje > 20)) {
            $ETO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
        } else {
            $ETO2c = '';
        }
        if ((($ETO3_porcentaje == $high_65)or ( $ETO3_porcentaje == $high_66)or($ETO3_porcentaje > 20)) && ($ETO3_porcentaje > 20)) {
            $ETO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
        } else {
            $ETO3c = '';
        }
        if ((($ETO4_porcentaje == $high_65) or ( $ETO4_porcentaje == $high_66)or($ETO4_porcentaje > 20)) && ($ETO4_porcentaje > 20)) {
            $ETO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
        } else {
            $ETO4c = '';
        }
        if ((($ETO5_porcentaje == $high_65) or ( $ETO5_porcentaje == $high_66)or($ETO5_porcentaje > 20)) && ($ETO5_porcentaje > 20)) {
            $ETO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
        } else {
            $ETO5c = '';
        } 
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
    <p style="font-family:verdanab;font-size:22px;color:#333333;text-align:center">CONSOLIDADO EXTRALABORAL</p><br>
    <div class="panel panel-body">
        <div class="row" id="registro" align="center" style="min-height:10em">
            <div id="general"></div>
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
                    <td id="td" <?php echo $ET1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ET1_porcentaje . '% (' . $ET1 . ')' ?></td>
                    <td id="td" <?php echo $ET2c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ET2_porcentaje . '% (' . $ET2 . ')' ?></td>
                    <td id="td" <?php echo $ET3c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ET3_porcentaje . '% (' . $ET3 . ')' ?></td>
                    <td id="td" <?php echo $ET4c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ET4_porcentaje . '% (' . $ET4 . ')' ?></td>
                    <td id="td" <?php echo $ET5c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ET5_porcentaje . '% (' . $ET5 . ')' ?></td>
                    <td id="td" style="font-family:verdanab;font-size:16px;color:#678e98"><span class="subt2">TOTAL EVALUADOS: </span><?php echo $ET ?></td>
                </tr>            
            </table><br>
            <!--<form>    
                <p id="analisis6v" style="text-align:justify;font-family:verdana;background:#ebf9fa;padding:1.9em;color:#000000"></p>
                <button class="task-editar" id="btnanalisis6" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
                <textarea class="note" id="analisis6" onKeyDown="valida_longitud6()" placeholder="..."></textarea><br>
                <p id="conteo6" align="right">&nbsp... <span id="contador6" style="font-family:verdanab;font-size:12px"></span></p>
                <input id="botonIA6" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
            </form>-->
        </div>
       <!-- <div class="row" id="registro" align="center" style="min-height:10em">
            <div id="ET"></div>
            <form>    
                <p id="analisis6v" style="text-align:justify;font-family:verdana;background:#ebf9fa;padding:1.9em;color:#000000"></p>
                <button class="task-editar" id="btnanalisis6" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
                <textarea class="note" id="analisis6" onKeyDown="valida_longitud6()" placeholder="..."></textarea><br>
                <p id="conteo6" align="right">&nbsp... <span id="contador6" style="font-family:verdanab;font-size:12px"></span></p>
                <input id="botonIA6" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
            </form>
        </div>-->
        <div class="row" align="center"><br>
            <div class="col-md-8 col-md-offset-2" id="ocupacionales"></div>
            <table class="table_consolidados" style="width:100%"><br>
                <tr>
                    <th>Grupo Ocupacional</th>
                    <th>Sin Riesgo</th>
                    <th>Riesgo Bajo</th>
                    <th>Riesgo Medio</th>
                    <th>Riesgo Alto</th>
                    <th>Riesgo muy Alto</th>
                </tr>
                <tr style="border-top:1px solid #333333">
                    <td id="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                    <td id="td" <?php echo $ETJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ETJ1_porcentaje . '% (' . $ETJ1 . ')' ?></td>
                    <td id="td" <?php echo $ETJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ETJ2_porcentaje . '% (' . $ETJ2 . ')' ?></td>
                    <td id="td" <?php echo $ETJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ETJ3_porcentaje . '% (' . $ETJ3 . ')' ?></td>
                    <td id="td" <?php echo $ETJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ETJ4_porcentaje . '% (' . $ETJ4 . ')' ?></td>
                    <td id="td" <?php echo $ETJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ETJ5_porcentaje . '% (' . $ETJ5 . ')' ?></td>
                </tr>
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                    <td id="td" <?php echo $ETP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ETP1_porcentaje . '% (' . $ETP1 . ')' ?></td>
                    <td id="td" <?php echo $ETP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ETP2_porcentaje . '% (' . $ETP2 . ')' ?></td>
                    <td id="td" <?php echo $ETP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ETP3_porcentaje . '% (' . $ETP3 . ')' ?></td>
                    <td id="td" <?php echo $ETP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ETP4_porcentaje . '% (' . $ETP4 . ')' ?></td>
                    <td id="td" <?php echo $ETP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ETP5_porcentaje . '% (' . $ETP5 . ')' ?></td>
                </tr>
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Auxiliar</td>
                    <td id="td" <?php echo $ETA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ETA1_porcentaje . '% (' . $ETA1 . ')' ?></td>
                    <td id="td" <?php echo $ETA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ETA2_porcentaje . '% (' . $ETA2 . ')' ?></td>
                    <td id="td" <?php echo $ETA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ETA3_porcentaje . '% (' . $ETA3 . ')' ?></td>
                    <td id="td" <?php echo $ETA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ETA4_porcentaje . '% (' . $ETA4 . ')' ?></td>
                    <td id="td" <?php echo $ETA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ETA5_porcentaje . '% (' . $ETA5 . ')' ?></td>
                </tr>
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Operativo</td>
                    <td id="td" <?php echo $ETO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ETO1_porcentaje . '% (' . $ETO1 . ')' ?></td>
                    <td id="td" <?php echo $ETO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ETO2_porcentaje . '% (' . $ETO2 . ')' ?></td>
                    <td id="td" <?php echo $ETO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ETO3_porcentaje . '% (' . $ETO3 . ')' ?></td>
                    <td id="td" <?php echo $ETO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ETO4_porcentaje . '% (' . $ETO4 . ')' ?></td>
                    <td id="td" <?php echo $ETO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ETO5_porcentaje . '% (' . $ETO5 . ')' ?></td>
                </tr>            
            </table><br>
       </div>
        <div class="row" align="center"><br>
            <p style="font-size:19px;font-family:verdana;color:#333333">DIMENSIONES Y GRUPOS OCUPACIONALES</p>
            <table class="table_consolidados" style="width:100%">
                <tr>
                    <th>Dimensión</th>
                    <th>Grupo Ocupacional</th>
                    <th>Sin Riesgo</th>
                    <th>Riesgo Bajo</th>
                    <th>Riesgo Medio</th>
                    <th>Riesgo Alto</th>
                    <th>Riesgo muy Alto</th>
                </tr>
                 <tr style="border-top:1px solid #333333">
                    <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensión: </span>Tiempo fuera del trabajo</td>
                    <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                    <td id="td" class="td" <?php echo $TFJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $TFJ1_porcentaje . '% (' . $TFJ1 . ')' ?></td>
                    <td id="td" class="td" <?php echo $TFJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $TFJ2_porcentaje . '% (' . $TFJ2 . ')' ?></td>
                    <td id="td" class="td" <?php echo $TFJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $TFJ3_porcentaje . '% (' . $TFJ3 . ')' ?></td>
                    <td id="td" class="td" <?php echo $TFJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $TFJ4_porcentaje . '% (' . $TFJ4 . ')' ?></td>
                    <td id="td" class="td" <?php echo $TFJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $TFJ5_porcentaje . '% (' . $TFJ5 . ')' ?></td>
                </tr>  
                 <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                    <td id="td" <?php echo $TFP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $TFP1_porcentaje . '% (' . $TFP1 . ')' ?></td>
                    <td id="td" <?php echo $TFP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $TFP2_porcentaje . '% (' . $TFP2 . ')' ?></td>
                    <td id="td" <?php echo $TFP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $TFP3_porcentaje . '% (' . $TFP3 . ')' ?></td>
                    <td id="td" <?php echo $TFP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $TFP4_porcentaje . '% (' . $TFP4 . ')' ?></td>
                    <td id="td" <?php echo $TFP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $TFP5_porcentaje . '% (' . $TFP5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                    <td id="td" <?php echo $TFA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $TFA1_porcentaje . '% (' . $TFA1 . ')' ?></td>
                    <td id="td" <?php echo $TFA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $TFA2_porcentaje . '% (' . $TFA2 . ')' ?></td>
                    <td id="td" <?php echo $TFA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $TFA3_porcentaje . '% (' . $TFA3 . ')' ?></td>
                    <td id="td" <?php echo $TFA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $TFA4_porcentaje . '% (' . $TFA4 . ')' ?></td>
                    <td id="td" <?php echo $TFA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $TFA5_porcentaje . '% (' . $TFA5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                    <td id="td" <?php echo $TFO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $TFO1_porcentaje . '% (' . $TFO1 . ')' ?></td>
                    <td id="td" <?php echo $TFO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $TFO2_porcentaje . '% (' . $TFO2 . ')' ?></td>
                    <td id="td" <?php echo $TFO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $TFO3_porcentaje . '% (' . $TFO3 . ')' ?></td>
                    <td id="td" <?php echo $TFO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $TFO4_porcentaje . '% (' . $TFO4 . ')' ?></td>
                    <td id="td" <?php echo $TFO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $TFO5_porcentaje . '% (' . $TFO5 . ')' ?></td>
                </tr> 
                
                 <tr style="border-top:1px solid #333333!important">
                    <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensión: </span>Relaciones familiares</td>
                    <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                    <td id="td" class="td" <?php echo $RFJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RFJ1_porcentaje . '% (' . $RFJ1 . ')' ?></td>
                    <td id="td" class="td" <?php echo $RFJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RFJ2_porcentaje . '% (' . $RFJ2 . ')' ?></td>
                    <td id="td" class="td" <?php echo $RFJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RFJ3_porcentaje . '% (' . $RFJ3 . ')' ?></td>
                    <td id="td" class="td" <?php echo $RFJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RFJ4_porcentaje . '% (' . $RFJ4 . ')' ?></td>
                    <td id="td" class="td" <?php echo $RFJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RFJ5_porcentaje . '% (' . $RFJ5 . ')' ?></td>
                </tr>  
                 <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                    <td id="td" <?php echo $RFP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RFP1_porcentaje . '% (' . $RFP1 . ')' ?></td>
                    <td id="td" <?php echo $RFP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RFP2_porcentaje . '% (' . $RFP2 . ')' ?></td>
                    <td id="td" <?php echo $RFP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RFP3_porcentaje . '% (' . $RFP3 . ')' ?></td>
                    <td id="td" <?php echo $RFP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RFP4_porcentaje . '% (' . $RFP4 . ')' ?></td>
                    <td id="td" <?php echo $RFP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RFP5_porcentaje . '% (' . $RFP5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                    <td id="td" <?php echo $RFA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RFA1_porcentaje . '% (' . $RFA1 . ')' ?></td>
                    <td id="td" <?php echo $RFA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RFA2_porcentaje . '% (' . $RFA2 . ')' ?></td>
                    <td id="td" <?php echo $RFA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RFA3_porcentaje . '% (' . $RFA3 . ')' ?></td>
                    <td id="td" <?php echo $RFA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RFA4_porcentaje . '% (' . $RFA4 . ')' ?></td>
                    <td id="td" <?php echo $RFA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RFA5_porcentaje . '% (' . $RFA5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                    <td id="td" <?php echo $RFO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $RFO1_porcentaje . '% (' . $RFO1 . ')' ?></td>
                    <td id="td" <?php echo $RFO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $RFO2_porcentaje . '% (' . $RFO2 . ')' ?></td>
                    <td id="td" <?php echo $RFO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $RFO3_porcentaje . '% (' . $RFO3 . ')' ?></td>
                    <td id="td" <?php echo $RFO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $RFO4_porcentaje . '% (' . $RFO4 . ')' ?></td>
                    <td id="td" <?php echo $RFO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $RFO5_porcentaje . '% (' . $RFO5 . ')' ?></td>
                </tr> 
                <tr style="border-top:1px solid #333333!important">
                    <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensión: </span>Comunicación y relaciones interpersonales</td>
                    <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                    <td id="td" class="td" <?php echo $CRIJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CRIJ1_porcentaje . '% (' . $CRIJ1 . ')' ?></td>
                    <td id="td" class="td" <?php echo $CRIJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CRIJ2_porcentaje . '% (' . $CRIJ2 . ')' ?></td>
                    <td id="td" class="td" <?php echo $CRIJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CRIJ3_porcentaje . '% (' . $CRIJ3 . ')' ?></td>
                    <td id="td" class="td" <?php echo $CRIJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CRIJ4_porcentaje . '% (' . $CRIJ4 . ')' ?></td>
                    <td id="td" class="td" <?php echo $CRIJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CRIJ5_porcentaje . '% (' . $CRIJ5 . ')' ?></td>
                </tr>  
                 <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                    <td id="td" <?php echo $CRIP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CRIP1_porcentaje . '% (' . $CRIP1 . ')' ?></td>
                    <td id="td" <?php echo $CRIP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CRIP2_porcentaje . '% (' . $CRIP2 . ')' ?></td>
                    <td id="td" <?php echo $CRIP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CRIP3_porcentaje . '% (' . $CRIP3 . ')' ?></td>
                    <td id="td" <?php echo $CRIP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CRIP4_porcentaje . '% (' . $CRIP4 . ')' ?></td>
                    <td id="td" <?php echo $CRIP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CRIP5_porcentaje . '% (' . $CRIP5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                    <td id="td" <?php echo $CRIA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CRIA1_porcentaje . '% (' . $CRIA1 . ')' ?></td>
                    <td id="td" <?php echo $CRIA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CRIA2_porcentaje . '% (' . $CRIA2 . ')' ?></td>
                    <td id="td" <?php echo $CRIA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CRIA3_porcentaje . '% (' . $CRIA3 . ')' ?></td>
                    <td id="td" <?php echo $CRIA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CRIA4_porcentaje . '% (' . $CRIA4 . ')' ?></td>
                    <td id="td" <?php echo $CRIA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CRIA5_porcentaje . '% (' . $CRIA5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                    <td id="td" <?php echo $CRIO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CRIO1_porcentaje . '% (' . $CRIO1 . ')' ?></td>
                    <td id="td" <?php echo $CRIO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CRIO2_porcentaje . '% (' . $CRIO2 . ')' ?></td>
                    <td id="td" <?php echo $CRIO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CRIO3_porcentaje . '% (' . $CRIO3 . ')' ?></td>
                    <td id="td" <?php echo $CRIO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CRIO4_porcentaje . '% (' . $CRIO4 . ')' ?></td>
                    <td id="td" <?php echo $CRIO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CRIO5_porcentaje . '% (' . $CRIO5 . ')' ?></td>
                </tr> 
                
                 <tr style="border-top:1px solid #333333!important">
                    <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensión: </span>Situación económica del grupo familiar</td>
                    <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                    <td id="td" class="td" <?php echo $SEJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $SEJ1_porcentaje . '% (' . $SEJ1 . ')' ?></td>
                    <td id="td" class="td" <?php echo $SEJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $SEJ2_porcentaje . '% (' . $SEJ2 . ')' ?></td>
                    <td id="td" class="td" <?php echo $SEJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $SEJ3_porcentaje . '% (' . $SEJ3 . ')' ?></td>
                    <td id="td" class="td" <?php echo $SEJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $SEJ4_porcentaje . '% (' . $SEJ4 . ')' ?></td>
                    <td id="td" class="td" <?php echo $SEJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $SEJ5_porcentaje . '% (' . $SEJ5 . ')' ?></td>
                </tr>  
                 <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                    <td id="td" <?php echo $SEP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $SEP1_porcentaje . '% (' . $SEP1 . ')' ?></td>
                    <td id="td" <?php echo $SEP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $SEP2_porcentaje . '% (' . $SEP2 . ')' ?></td>
                    <td id="td" <?php echo $SEP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $SEP3_porcentaje . '% (' . $SEP3 . ')' ?></td>
                    <td id="td" <?php echo $SEP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $SEP4_porcentaje . '% (' . $SEP4 . ')' ?></td>
                    <td id="td" <?php echo $SEP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $SEP5_porcentaje . '% (' . $SEP5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                    <td id="td" <?php echo $SEA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $SEA1_porcentaje . '% (' . $SEA1 . ')' ?></td>
                    <td id="td" <?php echo $SEA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $SEA2_porcentaje . '% (' . $SEA2 . ')' ?></td>
                    <td id="td" <?php echo $SEA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $SEA3_porcentaje . '% (' . $SEA3 . ')' ?></td>
                    <td id="td" <?php echo $SEA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $SEA4_porcentaje . '% (' . $SEA4 . ')' ?></td>
                    <td id="td" <?php echo $SEA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $SEA5_porcentaje . '% (' . $SEA5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                    <td id="td" <?php echo $SEO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $SEO1_porcentaje . '% (' . $SEO1 . ')' ?></td>
                    <td id="td" <?php echo $SEO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $SEO2_porcentaje . '% (' . $SEO2 . ')' ?></td>
                    <td id="td" <?php echo $SEO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $SEO3_porcentaje . '% (' . $SEO3 . ')' ?></td>
                    <td id="td" <?php echo $SEO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $SEO4_porcentaje . '% (' . $SEO4 . ')' ?></td>
                    <td id="td" <?php echo $SEO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $SEO5_porcentaje . '% (' . $SEO5 . ')' ?></td>
                </tr>
                
                 <tr style="border-top:1px solid #333333!important">
                    <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensión: </span>Caracteristicas de la vivienda y del entorno</td>
                    <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                    <td id="td" class="td" <?php echo $CVJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CVJ1_porcentaje . '% (' . $CVJ1 . ')' ?></td>
                    <td id="td" class="td" <?php echo $CVJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CVJ2_porcentaje . '% (' . $CVJ2 . ')' ?></td>
                    <td id="td" class="td" <?php echo $CVJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CVJ3_porcentaje . '% (' . $CVJ3 . ')' ?></td>
                    <td id="td" class="td" <?php echo $CVJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CVJ4_porcentaje . '% (' . $CVJ4 . ')' ?></td>
                    <td id="td" class="td" <?php echo $CVJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CVJ5_porcentaje . '% (' . $CVJ5 . ')' ?></td>
                </tr>  
                 <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                    <td id="td" <?php echo $CVP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CVP1_porcentaje . '% (' . $CVP1 . ')' ?></td>
                    <td id="td" <?php echo $CVP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CVP2_porcentaje . '% (' . $CVP2 . ')' ?></td>
                    <td id="td" <?php echo $CVP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CVP3_porcentaje . '% (' . $CVP3 . ')' ?></td>
                    <td id="td" <?php echo $CVP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CVP4_porcentaje . '% (' . $CVP4 . ')' ?></td>
                    <td id="td" <?php echo $CVP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CVP5_porcentaje . '% (' . $CVP5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                    <td id="td" <?php echo $CVA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CVA1_porcentaje . '% (' . $CVA1 . ')' ?></td>
                    <td id="td" <?php echo $CVA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CVA2_porcentaje . '% (' . $CVA2 . ')' ?></td>
                    <td id="td" <?php echo $CVA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CVA3_porcentaje . '% (' . $CVA3 . ')' ?></td>
                    <td id="td" <?php echo $CVA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CVA4_porcentaje . '% (' . $CVA4 . ')' ?></td>
                    <td id="td" <?php echo $CVA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CVA5_porcentaje . '% (' . $CVA5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                    <td id="td" <?php echo $CVO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CVO1_porcentaje . '% (' . $CVO1 . ')' ?></td>
                    <td id="td" <?php echo $CVO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CVO2_porcentaje . '% (' . $CVO2 . ')' ?></td>
                    <td id="td" <?php echo $CVO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CVO3_porcentaje . '% (' . $CVO3 . ')' ?></td>
                    <td id="td" <?php echo $CVO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CVO4_porcentaje . '% (' . $CVO4 . ')' ?></td>
                    <td id="td" <?php echo $CVO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CVO5_porcentaje . '% (' . $CVO5 . ')' ?></td>
                </tr> 
                
                <tr style="border-top:1px solid #333333!important">
                    <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensión: </span>Influencia del entorno extralaboral sobre el trabajo</td>
                    <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                    <td id="td" class="td" <?php echo $IEJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $IEJ1_porcentaje . '% (' . $IEJ1 . ')' ?></td>
                    <td id="td" class="td" <?php echo $IEJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $IEJ2_porcentaje . '% (' . $IEJ2 . ')' ?></td>
                    <td id="td" class="td" <?php echo $IEJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $IEJ3_porcentaje . '% (' . $IEJ3 . ')' ?></td>
                    <td id="td" class="td" <?php echo $IEJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $IEJ4_porcentaje . '% (' . $IEJ4 . ')' ?></td>
                    <td id="td" class="td" <?php echo $IEJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $IEJ5_porcentaje . '% (' . $IEJ5 . ')' ?></td>
                </tr>  
                 <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                    <td id="td" <?php echo $IEP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $IEP1_porcentaje . '% (' . $IEP1 . ')' ?></td>
                    <td id="td" <?php echo $IEP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $IEP2_porcentaje . '% (' . $IEP2 . ')' ?></td>
                    <td id="td" <?php echo $IEP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $IEP3_porcentaje . '% (' . $IEP3 . ')' ?></td>
                    <td id="td" <?php echo $IEP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $IEP4_porcentaje . '% (' . $IEP4 . ')' ?></td>
                    <td id="td" <?php echo $IEP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $IEP5_porcentaje . '% (' . $IEP5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                    <td id="td" <?php echo $IEA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $IEA1_porcentaje . '% (' . $IEA1 . ')' ?></td>
                    <td id="td" <?php echo $IEA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $IEA2_porcentaje . '% (' . $IEA2 . ')' ?></td>
                    <td id="td" <?php echo $IEA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $IEA3_porcentaje . '% (' . $IEA3 . ')' ?></td>
                    <td id="td" <?php echo $IEA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $IEA4_porcentaje . '% (' . $IEA4 . ')' ?></td>
                    <td id="td" <?php echo $IEA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $IEA5_porcentaje . '% (' . $IEA5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                    <td id="td" <?php echo $IEO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $IEO1_porcentaje . '% (' . $IEO1 . ')' ?></td>
                    <td id="td" <?php echo $IEO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $IEO2_porcentaje . '% (' . $IEO2 . ')' ?></td>
                    <td id="td" <?php echo $IEO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $IEO3_porcentaje . '% (' . $IEO3 . ')' ?></td>
                    <td id="td" <?php echo $IEO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $IEO4_porcentaje . '% (' . $IEO4 . ')' ?></td>
                    <td id="td" <?php echo $IEO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $IEO5_porcentaje . '% (' . $IEO5 . ')' ?></td>
                </tr>
                 <tr style="border-top:1px solid #333333!important">
                    <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Dimensión: </span>Desplazamiento vivienda-trabajo-vivienda</td>
                    <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                    <td id="td" class="td" <?php echo $DVJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DVJ1_porcentaje . '% (' . $DVJ1 . ')' ?></td>
                    <td id="td" class="td" <?php echo $DVJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DVJ2_porcentaje . '% (' . $DVJ2 . ')' ?></td>
                    <td id="td" class="td" <?php echo $DVJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DVJ3_porcentaje . '% (' . $DVJ3 . ')' ?></td>
                    <td id="td" class="td" <?php echo $DVJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DVJ4_porcentaje . '% (' . $DVJ4 . ')' ?></td>
                    <td id="td" class="td" <?php echo $DVJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DVJ5_porcentaje . '% (' . $DVJ5 . ')' ?></td>
                </tr>  
                 <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                    <td id="td" <?php echo $DVP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DVP1_porcentaje . '% (' . $DVP1 . ')' ?></td>
                    <td id="td" <?php echo $DVP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DVP2_porcentaje . '% (' . $DVP2 . ')' ?></td>
                    <td id="td" <?php echo $DVP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DVP3_porcentaje . '% (' . $DVP3 . ')' ?></td>
                    <td id="td" <?php echo $DVP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DVP4_porcentaje . '% (' . $DVP4 . ')' ?></td>
                    <td id="td" <?php echo $DVP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DVP5_porcentaje . '% (' . $DVP5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                    <td id="td" <?php echo $DVA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DVA1_porcentaje . '% (' . $DVA1 . ')' ?></td>
                    <td id="td" <?php echo $DVA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DVA2_porcentaje . '% (' . $DVA2 . ')' ?></td>
                    <td id="td" <?php echo $DVA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DVA3_porcentaje . '% (' . $DVA3 . ')' ?></td>
                    <td id="td" <?php echo $DVA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DVA4_porcentaje . '% (' . $DVA4 . ')' ?></td>
                    <td id="td" <?php echo $DVA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DVA5_porcentaje . '% (' . $DVA5 . ')' ?></td>
                </tr> 
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                    <td id="td" <?php echo $DVO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $DVO1_porcentaje . '% (' . $DVO1 . ')' ?></td>
                    <td id="td" <?php echo $DVO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $DVO2_porcentaje . '% (' . $DVO2 . ')' ?></td>
                    <td id="td" <?php echo $DVO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $DVO3_porcentaje . '% (' . $DVO3 . ')' ?></td>
                    <td id="td" <?php echo $DVO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $DVO4_porcentaje . '% (' . $DVO4 . ')' ?></td>
                    <td id="td" <?php echo $DVO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $DVO5_porcentaje . '% (' . $DVO5 . ')' ?></td>
                </tr>
            </table><br>
       </div>
        <!--<div class="row"><br>
            <p style="font-size:19px;font-family:verdana;color:#333333">PROMEDIOS POR DIMENSIONES</p>
            <table class="table_consolidados" style="width:100%">
            	<tr>
            	   <th rowSPAN=2 id="tdimension" style="width:40%">DIMENSIONES</th>  
            	   <th COLSPAN=2 id="tdimension">Jefaturas, profesionales y técnicos</th>
            	   <th COLSPAN=2 id="tdimension">Asistentes, auxiliares y operarios</th>
            	</tr>
            	<tr>	
            	   <th id="tdimension">PT</th>
            	   <th id="tdimension">Nivel de Riesgo</th>
            	   <th id="tdimension">PT</TH>
            	   <th id="tdimension">Nivel de Riesgo</th>
            	</tr>
            	<tr>	
            	    <td id="tdimension1">Tiempo fuera del trabajo</td>
            	    <td <?php echo $TFJPC ?>><?php echo $TFJP ?></td>
            	    <td <?php echo $TFJPC ?>><?php echo $TFJPR ?></td>
            	    <td <?php echo $TFAOC ?>><?php echo $TFAO ?></td>
            	    <td <?php echo $TFAOC ?>><?php echo $TFAOR ?></td>
            	</tr>
            	<tr>	
            	    <td id="tdimension1">Relaciones familiares</td>
            	    <td <?php echo $RFJPC ?>><?php echo $RFJP ?></td>
            	    <td <?php echo $RFJPC ?>><?php echo $RFJPR ?></td>
            	    <td <?php echo $RFAOC ?>><?php echo $RFAO ?></td>
            	    <td <?php echo $RFAOC ?>><?php echo $RFAOR ?></td>
            	</tr>
            	<tr>	
            	    <td id="tdimension1">Comunicación y relaciones interpersonales</td>
            	    <td <?php echo $CRIJPC ?>><?php echo $CRIJP ?></td>
            	    <td <?php echo $CRIJPC ?>><?php echo $CRIJPR ?></td>
            	    <td <?php echo $CRIAOC ?>><?php echo $CRIAO ?></td>
            	    <td <?php echo $CRIAOC ?>><?php echo $CRIAOR ?></td>
            	</tr>
            	<tr>	
            	    <td id="tdimension1">Situación económica del grupo familiar</td>
            	    <td <?php echo $SEJPC ?>><?php echo $SEJP ?></td>
            	    <td <?php echo $SEJPC ?>><?php echo $SEJPR ?></td>
            	    <td <?php echo $SEAOC ?>><?php echo $SEAO ?></td>
            	    <td <?php echo $SEAOC ?>><?php echo $SEAOR ?></td>
            	</tr>
            	<tr>	
            	    <td id="tdimension1">Características de la vivienda y de su entorno</td>
            	    <td <?php echo $CVJPC ?>><?php echo $CVJP ?></td>
            	    <td <?php echo $CVJPC ?>><?php echo $CVJPR ?></td>
            	    <td <?php echo $CVAOC ?>><?php echo $CVAO ?></td>
            	    <td <?php echo $CVAOC ?>><?php echo $CVAOR ?></td>
            	</tr>
            	<tr>	
            	    <td id="tdimension1">Influencia del entorno extralaboral sobre el trabajo</td>
            	    <td <?php echo $IEJPC ?>><?php echo $IEJP ?></td>
            	    <td <?php echo $IEJPC ?>><?php echo $IEJPR ?></td>
            	    <td <?php echo $IEAOC ?>><?php echo $IEAO ?></td>
            	    <td <?php echo $IEAOC ?>><?php echo $IEAOR ?></td>
            	</tr>
            	<tr>	
            	    <td id="tdimension1">Desplazamiento vivienda-trabajo-vivienda</td>
            	    <td <?php echo $DVJPC ?>><?php echo $DVJP ?></td>
            	    <td <?php echo $DVJPC ?>><?php echo $DVJPR ?></td>
            	    <td <?php echo $DVAOC ?>><?php echo $DVAO ?></td>
            	    <td <?php echo $DVAOC ?>><?php echo $DVAOR ?></td>
            	</tr>
            	<tr>	
            	    <td id="tdimension1" style="font-family:verdanab">TOTAL GENERAL FRP EXTRALABORAL</td>
            	    <td <?php echo $ExtraJPC ?>><?php echo $ExtraJP ?></td>
            	    <td <?php echo $ExtraJPC ?>><?php echo $ExtraJPR ?></td>
            	    <td <?php echo $ExtraAOC ?>><?php echo $ExtraAO ?></td>
            	    <td <?php echo $ExtraAOC ?>><?php echo $ExtraAOR ?></td>
            	</tr>
            </table>
       </div>
        <div class="row" id="registro" align="center" style="min-height:10em"><br>
            <form>    
                <p id="analisis7v" style="text-align:justify;font-family:verdana;background:#ebf9fa;padding:1.9em;color:#000000"></p>
                <button class="task-editar" id="btnanalisis7" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
                <textarea class="note" id="analisis7" onKeyDown="valida_longitud7()" placeholder="..."></textarea><br>
                <p id="conteo7" align="right">&nbsp... <span id="contador7" style="font-family:verdanab;font-size:12px"></span></p>
                <input id="botonIA7" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
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
                window.location = "../psicosocial/extralaboral"
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
        $('#analisis6').slideUp(1);
        $('#analisis7').slideUp(1);
        $('#botonIA6').slideUp(1);
        $('#botonIA7').slideUp(1);
        $('#conteo6').slideUp(1);
        $('#conteo7').slideUp(1);
        fetchTasks();
        valida_longitud6();
        valida_longitud7();
    });
    permitidos6 = 450
    function valida_longitud6(){
    num_caracteres6 = document.getElementById("analisis6").value.length
    contador = permitidos6 - num_caracteres6;
    document.getElementById('contador6').innerHTML = contador;
    if (num_caracteres > permitidos6){
        document.getElementById("analisis6").value = contenido_textarea;
        document.getElementById('contador6').style.color="#e7744f";
    } else {
        contenido_textarea = document.getElementById("analisis6").value;
        document.getElementById('contador6').style.color="#333333";
       }
    };
    permitidos7 = 450
    function valida_longitud7(){
    num_caracteres7 = document.getElementById("analisis7").value.length
    contador = permitidos7 - num_caracteres7;
    document.getElementById('contador7').innerHTML = contador;
    if (num_caracteres > permitidos7){
        document.getElementById("analisis7").value = contenido_textarea;
        document.getElementById('contador7').style.color="#e7744f";
    } else {
        contenido_textarea = document.getElementById("analisis7").value;
        document.getElementById('contador7').style.color="#333333";
       }
    };
    $("#btnanalisis6").click(function(e){
        e.preventDefault();
        $('#analisis6').slideDown(1);
        $('#botonIA6').slideDown(1);
        $('#conteo6').slideDown(1);
        $('#btnanalisis6').slideUp(1);
        $('#analisis6v').slideUp(1);
    });
    $("#btnanalisis7").click(function(e){
        e.preventDefault();
        $('#analisis7').slideDown(1);
        $('#botonIA7').slideDown(1);
        $('#conteo7').slideDown(1);
        $('#btnanalisis7').slideUp(1);
        $('#analisis7v').slideUp(1);
    });
    $(document).on('click', '#botonIA6', (e) => {
        e.preventDefault();
        const postData1 = {
            empresa6:'<?php echo $Razon  ?>',
            analisis6:$('#analisis6').val(),
        };
        const url = '../analisisbdg.php';
            $.post(url,  postData1, (response) => {
            fetchTasks();
            $('#analisis6').slideUp(1);
            $('#botonIA6').slideUp(1);
            $('#conteo6').slideUp(1);
      	    $('#analisis6v').slideDown(1);
            $('#btnanalisis6').slideDown(1);
        });
    });
    $(document).on('click', '#botonIA7', (e) => {
        e.preventDefault();
        const postData1 = {
            empresa7:'<?php echo $Razon  ?>',
            analisis7:$('#analisis7').val(),
        };
        const url = '../analisisbdg.php';
            $.post(url,  postData1, (response) => {
            fetchTasks();
            $('#analisis7').slideUp(1);
            $('#botonIA7').slideUp(1);
            $('#conteo7').slideUp(1);
      	    $('#analisis7v').slideDown(1);
            $('#btnanalisis7').slideDown(1);
        });
    });
    function fetchTasks() {    
        var empresa ='<?php echo $Razon  ?>';
        $.ajax({
            type: "post",
            url: "../recanalisis.php",
            data: "empresa=" + empresa,
            befforesed: function(){
    		},
            success: function (response) {
                const tasksIA2 = JSON.parse(response);
                let analisis_6 = '';
                let analisis_7 = '';
                tasksIA2.forEach(taskIA2 => {
                        analisis_6 += `${taskIA2.analisis6}`
                        analisis_7 += `${taskIA2.analisis7}`
                });  
                    var analisis6 = analisis_6.replace(/<br [/][>]/g, "");
                    document.getElementById('analisis6').innerHTML = analisis6;
                    var analisis6v = analisis_6.replace(/<br[/][>]/g, "");
                    document.getElementById('analisis6v').innerHTML = analisis6v;
                    var analisis7 = analisis_7.replace(/<br [/][>]/g, "");
                    document.getElementById('analisis7').innerHTML = analisis7;
                    var analisis7v = analisis_7.replace(/<br[/][>]/g, "");
                    document.getElementById('analisis7v').innerHTML = analisis7v;
            },   
        });
    }
   /*Highcharts.chart('ET', {
       chart: {
           type: 'column',
           backgroundColor: false,
        },
          title: {
            text: 'Riesgo Extralaboral',
            style: {
                fontFamily: 'Verdana',
                fontSize: '19px',
                color:'#333333'     
           }
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit:<?php echo $Nit ?>   </span></p><br><p>Empleados evaluados: <span><?php echo $ET ?> - Fecha: <?php echo $Fecha ?></span></p>',
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
              y: <?php echo $ET1_porcentaje ?>,
            },
            {
              name: "Bajo",
              color: '#739900',
              y: <?php echo $ET2_porcentaje ?>,
            },
            {
              name: "Medio",
              color: '#666666',
              y: <?php echo $ET3_porcentaje ?>,
            },
            {
              name: "Alto",
              color: '#e7744f',
              y: <?php echo $ET4_porcentaje ?>,
            },
            {
              name: "Muy Alto",
              color: '#9d3715',
              y: <?php echo $ET5_porcentaje ?>,
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
            y: <?php echo $ET1 ?>,
            color: '#394d00',
            borderColor: '#394d00',
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Sin Riesgo',
                categories: ['Sin Riesgo'],
                data: [<?php echo $ET1_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $ET2 ?>,
            color: '#739900',
            borderColor: '#739900',
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Riesgo Bajo',
                categories: ['Riesgo Bajo'],
                data: [<?php echo $ET2_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $ET3 ?>,
            color: '#666666',
            borderColor: '#666666',
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Riesgo Medio',
                categories: ['Riesgo Medio'],
                data: [<?php echo $ET3_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $ET4 ?>,
            color: '#e7744f',
            borderColor: '#e7744f',
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Riesgo Alto',
                categories: ['Riesgo Alto'],
                data: [<?php echo $ET4_porcentaje ?>],
                website: 'Normal'
            }
        },
        {
            y: <?php echo $ET5 ?>,
            color: '#9d3715',
            borderColor: '#9d3715',
            borderWidth: 0,
            website: 'Normal',
            drilldown: {
                name: 'Riesgo muy Alto',
                categories: ['Riesgo muy Alto'],
                data: [<?php echo $ET5_porcentaje ?>],
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
    hayDatos = <?php echo (($ET1 + $ET2 + $ET3 + $ET4 + $ET5) > 0) ? 'true' : 'false'; ?>;

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
        backgroundColor: 'transparent'
    },
    title: {
        text: 'Resultado Extralaboral General',
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
                    r: 0
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
/*Highcharts.chart('ocupacionales', {
    chart: {
        type: 'bar',
        backgroundColor: false,
    },
    title: {
        text: 'GRUPOS OCUPACIONALES',
        style: {
          fontFamily: 'Verdana',
          fontSize: '19px',
          color:'#666666'
        }
    },
    subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit: <?php echo $Nit ?>   </span></p><br><p>Empleados evaluados: <span><?php echo $ET ?> - Fecha: <?php echo $Fecha ?></span></p>',
            style: {
                fontFamily: 'verdana',
                fontSize: '14px'
             }
        },
    xAxis: {
        categories: ['Jefaturas', 'Profesionales', 'Auxiliares', 'Operativos'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Porcentaje (%)',
            align: 'high'
        },
        min:0, minRange:100, maxPadding:0, 
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' %'
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
    credits: {
        enabled: false
    },
    series: [{
        name: 'Sin Riesgo',
        color: '#739900',
        data: [<?php echo $ETJ1_porcentaje ?>, <?php echo $ETP1_porcentaje ?>, <?php echo $ETA1_porcentaje ?>, <?php echo $ETO1_porcentaje ?>]
    }, {
        name: 'Riesgo Bajo',
        color: '#739900',
        data: [<?php echo $ETJ2_porcentaje ?>, <?php echo $ETP2_porcentaje ?>, <?php echo $ETA2_porcentaje ?>, <?php echo $ETO2_porcentaje ?>]
    }, {
        name: 'Riesgo Medio',
        color: '#666666',
        data: [<?php echo $ETJ3_porcentaje ?>, <?php echo $ETP3_porcentaje ?>, <?php echo $ETA3_porcentaje ?>, <?php echo $ETO3_porcentaje ?>]
    }, {
        name: 'Riesgo Alto',
        color: '#e7744f',
        data: [<?php echo $ETJ4_porcentaje ?>, <?php echo $ETP4_porcentaje ?>, <?php echo $ETA4_porcentaje ?>, <?php echo $ETO4_porcentaje ?>]
    }, {
        name: 'Riesgo muy Alto',
        color: '#e7744f',
        data: [<?php echo $ETJ5_porcentaje ?>, <?php echo $ETP5_porcentaje ?>, <?php echo $ETA5_porcentaje ?>, <?php echo $ETO5_porcentaje ?>]
    }]
});*/
</script>
</body>
</html>
