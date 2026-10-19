<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Consolidado Estrés</title>
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
    
    //Jefes y pofesionales
    $ESJP1 = Consolidados3::ESJP1(conexion::obtener_conexion());
    $ESJP2 = Consolidados3::ESJP2(conexion::obtener_conexion());
    $ESJP3 = Consolidados3::ESJP3(conexion::obtener_conexion());
    $ESJP4 = Consolidados3::ESJP4(conexion::obtener_conexion());
    $ESJP5 = Consolidados3::ESJP5(conexion::obtener_conexion());
    $ESJP = $ESJP1 + $ESJP2 + $ESJP3 + $ESJP4 + $ESJP5;
    if ($ESJP1 == 0) {$ESJP1_porcentaje  = 0;} else {$ESJP1_porcentaje = round((($ESJP1 * 100) / $ESJP), 1, PHP_ROUND_HALF_UP);}
    if ($ESJP2 == 0) {$ESJP2_porcentaje  = 0;} else {$ESJP2_porcentaje = round((($ESJP2 * 100) / $ESJP), 1, PHP_ROUND_HALF_UP);}
    if ($ESJP3 == 0) {$ESJP3_porcentaje  = 0;} else {$ESJP3_porcentaje = round((($ESJP3 * 100) / $ESJP), 1, PHP_ROUND_HALF_UP);}
    if ($ESJP4 == 0) {$ESJP4_porcentaje  = 0;} else {$ESJP4_porcentaje = round((($ESJP4 * 100) / $ESJP), 1, PHP_ROUND_HALF_UP);}
    if ($ESJP5 == 0) {$ESJP5_porcentaje  = 0;} else {$ESJP5_porcentaje = round((($ESJP5 * 100) / $ESJP), 1, PHP_ROUND_HALF_UP);}
    //Auxiliares y operarios
    $ESAO1 = Consolidados3::ESAO1(conexion::obtener_conexion());
    $ESAO2 = Consolidados3::ESAO2(conexion::obtener_conexion());
    $ESAO3 = Consolidados3::ESAO3(conexion::obtener_conexion());
    $ESAO4 = Consolidados3::ESAO4(conexion::obtener_conexion());
    $ESAO5 = Consolidados3::ESAO5(conexion::obtener_conexion());
    $ESAO = $ESAO1 + $ESAO2 + $ESAO3 + $ESAO4 + $ESAO5;
    if ($ESAO1 == 0) {$ESAO1_porcentaje = 0;} else {$ESAO1_porcentaje = round((($ESAO1 * 100) / $ESAO), 1, PHP_ROUND_HALF_UP);}
    if ($ESAO2 == 0) {$ESAO2_porcentaje = 0;} else {$ESAO2_porcentaje = round((($ESAO2 * 100) / $ESAO), 1, PHP_ROUND_HALF_UP);}
    if ($ESAO3 == 0) {$ESAO3_porcentaje = 0;} else {$ESAO3_porcentaje = round((($ESAO3 * 100) / $ESAO), 1, PHP_ROUND_HALF_UP);}
    if ($ESAO4 == 0) {$ESAO4_porcentaje = 0;} else {$ESAO4_porcentaje = round((($ESAO4 * 100) / $ESAO), 1, PHP_ROUND_HALF_UP);}
    if ($ESAO5 == 0) {$ESAO5_porcentaje = 0;} else {$ESAO5_porcentaje = round((($ESAO5 * 100) / $ESAO), 1, PHP_ROUND_HALF_UP);}
    $ESJAPO = $ESJP + $ESAO;
    //Grupos ocupacionales
    $ESTJ1 = Consolidados3::ESTJ1(conexion::obtener_conexion());
    $ESTJ2 = Consolidados3::ESTJ2(conexion::obtener_conexion());
    $ESTJ3 = Consolidados3::ESTJ3(conexion::obtener_conexion());
    $ESTJ4 = Consolidados3::ESTJ4(conexion::obtener_conexion());
    $ESTJ5 = Consolidados3::ESTJ5(conexion::obtener_conexion());
    $ESTJ = $ESTJ1 + $ESTJ2 + $ESTJ3 + $ESTJ4 + $ESTJ5;
    if ($ESTJ1 == 0) {$ESTJ1_porcentaje = 0;} else {$ESTJ1_porcentaje = round((($ESTJ1 * 100) / $ESTJ), 1, PHP_ROUND_HALF_UP);}
    if ($ESTJ2 == 0) {$ESTJ2_porcentaje = 0;} else {$ESTJ2_porcentaje = round((($ESTJ2 * 100) / $ESTJ), 1, PHP_ROUND_HALF_UP);}
    if ($ESTJ3 == 0) {$ESTJ3_porcentaje = 0;} else {$ESTJ3_porcentaje = round((($ESTJ3 * 100) / $ESTJ), 1, PHP_ROUND_HALF_UP);}
    if ($ESTJ4 == 0) {$ESTJ4_porcentaje = 0;} else {$ESTJ4_porcentaje = round((($ESTJ4 * 100) / $ESTJ), 1, PHP_ROUND_HALF_UP);}
    if ($ESTJ5 == 0) {$ESTJ5_porcentaje = 0;} else {$ESTJ5_porcentaje = round((($ESTJ5 * 100) / $ESTJ), 1, PHP_ROUND_HALF_UP);}
    $ESTP1 = Consolidados3::ESTP1(conexion::obtener_conexion());
    $ESTP2 = Consolidados3::ESTP2(conexion::obtener_conexion());
    $ESTP3 = Consolidados3::ESTP3(conexion::obtener_conexion());
    $ESTP4 = Consolidados3::ESTP4(conexion::obtener_conexion());
    $ESTP5 = Consolidados3::ESTP5(conexion::obtener_conexion());
    $ESTP = $ESTP1 + $ESTP2 + $ESTP3 + $ESTP4 + $ESTP5;
    if ($ESTP1 == 0) {$ESTP1_porcentaje = 0;} else { $ESTP1_porcentaje = round((($ESTP1 * 100) / $ESTP), 1, PHP_ROUND_HALF_UP);}
    if ($ESTP2 == 0) {$ESTP2_porcentaje = 0;} else { $ESTP2_porcentaje = round((($ESTP2 * 100) / $ESTP), 1, PHP_ROUND_HALF_UP);}
    if ($ESTP3 == 0) {$ESTP3_porcentaje = 0;} else { $ESTP3_porcentaje = round((($ESTP3 * 100) / $ESTP), 1, PHP_ROUND_HALF_UP);}
    if ($ESTP4 == 0) {$ESTP4_porcentaje = 0;} else { $ESTP4_porcentaje = round((($ESTP4 * 100) / $ESTP), 1, PHP_ROUND_HALF_UP);}
    if ($ESTP5 == 0) {$ESTP5_porcentaje = 0;} else { $ESTP5_porcentaje = round((($ESTP5 * 100) / $ESTP), 1, PHP_ROUND_HALF_UP);}
    $ESTA1 = Consolidados3::ESTA1(conexion::obtener_conexion());
    $ESTA2 = Consolidados3::ESTA2(conexion::obtener_conexion());
    $ESTA3 = Consolidados3::ESTA3(conexion::obtener_conexion());
    $ESTA4 = Consolidados3::ESTA4(conexion::obtener_conexion());
    $ESTA5 = Consolidados3::ESTA5(conexion::obtener_conexion());
    $ESTA = $ESTA1 + $ESTA2 + $ESTA3 + $ESTA4 + $ESTA5;
    if ($ESTA1 == 0) {$ESTA1_porcentaje = 0;} else {$ESTA1_porcentaje = round((($ESTA1 * 100) / $ESTA), 1, PHP_ROUND_HALF_UP);}
    if ($ESTA2 == 0) {$ESTA2_porcentaje = 0;} else {$ESTA2_porcentaje = round((($ESTA2 * 100) / $ESTA), 1, PHP_ROUND_HALF_UP);}
    if ($ESTA3 == 0) {$ESTA3_porcentaje = 0;} else {$ESTA3_porcentaje = round((($ESTA3 * 100) / $ESTA), 1, PHP_ROUND_HALF_UP);}
    if ($ESTA4 == 0) {$ESTA4_porcentaje = 0;} else {$ESTA4_porcentaje = round((($ESTA4 * 100) / $ESTA), 1, PHP_ROUND_HALF_UP);}
    if ($ESTA5 == 0) {$ESTA5_porcentaje = 0;} else {$ESTA5_porcentaje = round((($ESTA5 * 100) / $ESTA), 1, PHP_ROUND_HALF_UP);}
    $ESTO1 = Consolidados3::ESTO1(conexion::obtener_conexion());
    $ESTO2 = Consolidados3::ESTO2(conexion::obtener_conexion());
    $ESTO3 = Consolidados3::ESTO3(conexion::obtener_conexion());
    $ESTO4 = Consolidados3::ESTO4(conexion::obtener_conexion());
    $ESTO5 = Consolidados3::ESTO5(conexion::obtener_conexion());
    $ESTO = $ESTO1 + $ESTO2 + $ESTO3 + $ESTO4 + $ESTO5;
    if ($ESTO1 == 0) {$ESTO1_porcentaje = 0;} else {$ESTO1_porcentaje = round((($ESTO1 * 100) / $ESTO), 1, PHP_ROUND_HALF_UP);}
    if ($ESTO2 == 0) {$ESTO2_porcentaje= 0;} else {$ESTO2_porcentaje = round((($ESTO2 * 100) / $ESTO), 1, PHP_ROUND_HALF_UP);}
    if ($ESTO3 == 0) {$ESTO3_porcentaje = 0;} else {$ESTO3_porcentaje = round((($ESTO3 * 100) / $ESTO), 1, PHP_ROUND_HALF_UP);}
    if ($ESTO4 == 0) {$ESTO4_porcentaje = 0;} else {$ESTO4_porcentaje = round((($ESTO4 * 100) / $ESTO), 1, PHP_ROUND_HALF_UP);}
    if ($ESTO5 == 0) {$ESTO5_porcentaje = 0;} else {$ESTO5_porcentaje = round((($ESTO5 * 100) / $ESTO), 1, PHP_ROUND_HALF_UP);}
    $SFJ1 = Consolidados3::SFJ1(conexion::obtener_conexion());
    $SFJ2 = Consolidados3::SFJ2(conexion::obtener_conexion());
    $SFJ3 = Consolidados3::SFJ3(conexion::obtener_conexion());
    $SFJ4 = Consolidados3::SFJ4(conexion::obtener_conexion());
    $SFJ5 = Consolidados3::SFJ5(conexion::obtener_conexion());
    $SFJ = $SFJ1 + $SFJ2 + $SFJ3 + $SFJ4 + $SFJ5;
    if ($SFJ1 == 0) {$SFJ1_porcentaje = 0;} else {$SFJ1_porcentaje = round((($SFJ1 * 100) / $SFJ), 1, PHP_ROUND_HALF_UP);}
    if ($SFJ2 == 0) {$SFJ2_porcentaje = 0;} else {$SFJ2_porcentaje = round((($SFJ2 * 100) / $SFJ), 1, PHP_ROUND_HALF_UP);}
    if ($SFJ3 == 0) {$SFJ3_porcentaje = 0;} else {$SFJ3_porcentaje = round((($SFJ3 * 100) / $SFJ), 1, PHP_ROUND_HALF_UP);}
    if ($SFJ4 == 0) {$SFJ4_porcentaje = 0;} else {$SFJ4_porcentaje = round((($SFJ4 * 100) / $SFJ), 1, PHP_ROUND_HALF_UP);}
    if ($SFJ5 == 0) {$SFJ5_porcentaje = 0;} else {$SFJ5_porcentaje = round((($SFJ5 * 100) / $SFJ), 1, PHP_ROUND_HALF_UP);}
    $SFP1 = Consolidados3::SFP1(conexion::obtener_conexion());
    $SFP2 = Consolidados3::SFP2(conexion::obtener_conexion());
    $SFP3 = Consolidados3::SFP3(conexion::obtener_conexion());
    $SFP4 = Consolidados3::SFP4(conexion::obtener_conexion());
    $SFP5 = Consolidados3::SFP5(conexion::obtener_conexion());
    $SFP = $SFP1 + $SFP2 + $SFP3 + $SFP4 + $SFP5;
    if ($SFP1 == 0) {$SFP1_porcentaje = 0;} else {$SFP1_porcentaje = round((($SFP1 * 100) / $SFP), 1, PHP_ROUND_HALF_UP);}
    if ($SFP2 == 0) {$SFP2_porcentaje = 0;} else {$SFP2_porcentaje = round((($SFP2 * 100) / $SFP), 1, PHP_ROUND_HALF_UP);}
    if ($SFP3 == 0) {$SFP3_porcentaje = 0;} else {$SFP3_porcentaje = round((($SFP3 * 100) / $SFP), 1, PHP_ROUND_HALF_UP);}
    if ($SFP4 == 0) {$SFP4_porcentaje = 0;} else {$SFP4_porcentaje = round((($SFP4 * 100) / $SFP), 1, PHP_ROUND_HALF_UP);}
    if ($SFP5 == 0) {$SFP5_porcentaje = 0;} else {$SFP5_porcentaje = round((($SFP5 * 100) / $SFP), 1, PHP_ROUND_HALF_UP);}
    $SFA1 = Consolidados3::SFA1(conexion::obtener_conexion());
    $SFA2 = Consolidados3::SFA2(conexion::obtener_conexion());
    $SFA3 = Consolidados3::SFA3(conexion::obtener_conexion());
    $SFA4 = Consolidados3::SFA4(conexion::obtener_conexion());
    $SFA5 = Consolidados3::SFA5(conexion::obtener_conexion());
    $SFA = $SFA1 + $SFA2 + $SFA3 + $SFA4 + $SFA5;
    if ($SFA1 == 0) {$SFA1_porcentaje = 0;} else {$SFA1_porcentaje = round((($SFA1 * 100) / $SFA), 1, PHP_ROUND_HALF_UP);}
    if ($SFA2 == 0) {$SFA2_porcentaje = 0;} else {$SFA2_porcentaje = round((($SFA2 * 100) / $SFA), 1, PHP_ROUND_HALF_UP);}
    if ($SFA3 == 0) {$SFA3_porcentaje = 0;} else {$SFA3_porcentaje = round((($SFA3 * 100) / $SFA), 1, PHP_ROUND_HALF_UP);}
    if ($SFA4 == 0) {$SFA4_porcentaje = 0;} else {$SFA4_porcentaje = round((($SFA4 * 100) / $SFA), 1, PHP_ROUND_HALF_UP);}
    if ($SFA5 == 0) {$SFA5_porcentaje = 0;} else {$SFA5_porcentaje = round((($SFA5 * 100) / $SFA), 1, PHP_ROUND_HALF_UP);}
    $SFO1 = Consolidados3::SFO1(conexion::obtener_conexion());
    $SFO2 = Consolidados3::SFO2(conexion::obtener_conexion());
    $SFO3 = Consolidados3::SFO3(conexion::obtener_conexion());
    $SFO4 = Consolidados3::SFO4(conexion::obtener_conexion());
    $SFO5 = Consolidados3::SFO5(conexion::obtener_conexion());
    $SFO = $SFO1 + $SFO2 + $SFO3 + $SFO4 + $SFO5;
    if ($SFO1 == 0) {$SFO1_porcentaje = 0;} else {$SFO1_porcentaje = round((($SFO1 * 100) / $SFO), 1, PHP_ROUND_HALF_UP);}
    if ($SFO2 == 0) {$SFO2_porcentaje = 0;} else {$SFO2_porcentaje = round((($SFO2 * 100) / $SFO), 1, PHP_ROUND_HALF_UP);}
    if ($SFO3 == 0) {$SFO3_porcentaje = 0;} else {$SFO3_porcentaje = round((($SFO3 * 100) / $SFO), 1, PHP_ROUND_HALF_UP);}
    if ($SFO4 == 0) {$SFO4_porcentaje = 0;} else {$SFO4_porcentaje = round((($SFO4 * 100) / $SFO), 1, PHP_ROUND_HALF_UP);}
    if ($SFO5 == 0) {$SFO5_porcentaje = 0;} else {$SFO5_porcentaje = round((($SFO5 * 100) / $SFO), 1, PHP_ROUND_HALF_UP);}
    $CSJ1 = Consolidados3::CSJ1(conexion::obtener_conexion());
    $CSJ2 = Consolidados3::CSJ2(conexion::obtener_conexion());
    $CSJ3 = Consolidados3::CSJ3(conexion::obtener_conexion());
    $CSJ4 = Consolidados3::CSJ4(conexion::obtener_conexion());
    $CSJ5 = Consolidados3::CSJ5(conexion::obtener_conexion());
    $CSJ = $CSJ1 + $CSJ2 + $CSJ3 + $CSJ4 + $CSJ5;
    if ($CSJ1 == 0) {$CSJ1_porcentaje = 0;} else {$CSJ1_porcentaje = round((($CSJ1 * 100) / $CSJ), 1, PHP_ROUND_HALF_UP);}
    if ($CSJ2 == 0) {$CSJ2_porcentaje = 0;} else {$CSJ2_porcentaje = round((($CSJ2 * 100) / $CSJ), 1, PHP_ROUND_HALF_UP);}
    if ($CSJ3 == 0) {$CSJ3_porcentaje = 0;} else {$CSJ3_porcentaje = round((($CSJ3 * 100) / $CSJ), 1, PHP_ROUND_HALF_UP);}
    if ($CSJ4 == 0) {$CSJ4_porcentaje = 0;} else {$CSJ4_porcentaje = round((($CSJ4 * 100) / $CSJ), 1, PHP_ROUND_HALF_UP);}
    if ($CSJ5 == 0) {$CSJ5_porcentaje = 0;} else {$CSJ5_porcentaje = round((($CSJ5 * 100) / $CSJ), 1, PHP_ROUND_HALF_UP);}
    $CSP1 = Consolidados3::CSP1(conexion::obtener_conexion());
    $CSP2 = Consolidados3::CSP2(conexion::obtener_conexion());
    $CSP3 = Consolidados3::CSP3(conexion::obtener_conexion());
    $CSP4 = Consolidados3::CSP4(conexion::obtener_conexion());
    $CSP5 = Consolidados3::CSP5(conexion::obtener_conexion());
    $CSP = $CSP1 + $CSP2 + $CSP3 + $CSP4 + $CSP5;
    if ($CSP1 == 0) {$CSP1_porcentaje = 0;} else {$CSP1_porcentaje = round((($CSP1 * 100) / $CSP), 1, PHP_ROUND_HALF_UP);}
    if ($CSP2 == 0) {$CSP2_porcentaje = 0;} else {$CSP2_porcentaje = round((($CSP2 * 100) / $CSP), 1, PHP_ROUND_HALF_UP);}
    if ($CSP3 == 0) {$CSP3_porcentaje = 0;} else {$CSP3_porcentaje = round((($CSP3 * 100) / $CSP), 1, PHP_ROUND_HALF_UP);}
    if ($CSP4 == 0) {$CSP4_porcentaje = 0;} else {$CSP4_porcentaje = round((($CSP4 * 100) / $CSP), 1, PHP_ROUND_HALF_UP);}
    if ($CSP5 == 0) {$CSP5_porcentaje = 0;} else {$CSP5_porcentaje = round((($CSP5 * 100) / $CSP), 1, PHP_ROUND_HALF_UP);}
    $CSA1 = Consolidados3::CSA1(conexion::obtener_conexion());
    $CSA2 = Consolidados3::CSA2(conexion::obtener_conexion());
    $CSA3 = Consolidados3::CSA3(conexion::obtener_conexion());
    $CSA4 = Consolidados3::CSA4(conexion::obtener_conexion());
    $CSA5 = Consolidados3::CSA5(conexion::obtener_conexion());
    $CSA = $CSA1 + $CSA2 + $CSA3 + $CSA4 + $CSA5;
    if ($CSA1 == 0) {$CSA1_porcentaje = 0;} else {$CSA1_porcentaje = round((($CSA1 * 100) / $CSA), 1, PHP_ROUND_HALF_UP);}
    if ($CSA2 == 0) {$CSA2_porcentaje = 0;} else {$CSA2_porcentaje = round((($CSA2 * 100) / $CSA), 1, PHP_ROUND_HALF_UP);}
    if ($CSA3 == 0) {$CSA3_porcentaje = 0;} else {$CSA3_porcentaje = round((($CSA3 * 100) / $CSA), 1, PHP_ROUND_HALF_UP);}
    if ($CSA4 == 0) {$CSA4_porcentaje = 0;} else {$CSA4_porcentaje = round((($CSA4 * 100) / $CSA), 1, PHP_ROUND_HALF_UP);}
    if ($CSA5 == 0) {$CSA5_porcentaje = 0;} else {$CSA5_porcentaje = round((($CSA5 * 100) / $CSA), 1, PHP_ROUND_HALF_UP);}
    $CSO1 = Consolidados3::CSO1(conexion::obtener_conexion());
    $CSO2 = Consolidados3::CSO2(conexion::obtener_conexion());
    $CSO3 = Consolidados3::CSO3(conexion::obtener_conexion());
    $CSO4 = Consolidados3::CSO4(conexion::obtener_conexion());
    $CSO5 = Consolidados3::CSO5(conexion::obtener_conexion());
    $CSO = $CSO1 + $CSO2 + $CSO3 + $CSO4 + $CSO5;
    if ($CSO1 == 0) {$CSO1_porcentaje = 0;} else {$CSO1_porcentaje = round((($CSO1 * 100) / $CSO), 1, PHP_ROUND_HALF_UP);}
    if ($CSO2 == 0) {$CSO2_porcentaje = 0;} else {$CSO2_porcentaje = round((($CSO2 * 100) / $CSO), 1, PHP_ROUND_HALF_UP);}
    if ($CSO3 == 0) {$CSO3_porcentaje = 0;} else {$CSO3_porcentaje = round((($CSO3 * 100) / $CSO), 1, PHP_ROUND_HALF_UP);}
    if ($CSO4 == 0) {$CSO4_porcentaje = 0;} else {$CSO4_porcentaje = round((($CSO4 * 100) / $CSO), 1, PHP_ROUND_HALF_UP);}
    if ($CSO5 == 0) {$CSO5_porcentaje = 0;} else {$CSO5_porcentaje = round((($CSO5 * 100) / $CSO), 1, PHP_ROUND_HALF_UP);}
    $ILJ1 = Consolidados3::ILJ1(conexion::obtener_conexion());
    $ILJ2 = Consolidados3::ILJ2(conexion::obtener_conexion());
    $ILJ3 = Consolidados3::ILJ3(conexion::obtener_conexion());
    $ILJ4 = Consolidados3::ILJ4(conexion::obtener_conexion());
    $ILJ5 = Consolidados3::ILJ5(conexion::obtener_conexion());
    $ILJ = $ILJ1 + $ILJ2 + $ILJ3 + $ILJ4 + $ILJ5;
    if ($ILJ1 == 0) {$ILJ1_porcentaje = 0;} else {$ILJ1_porcentaje = round((($ILJ1 * 100) / $ILJ), 1, PHP_ROUND_HALF_UP);}
    if ($ILJ2 == 0) {$ILJ2_porcentaje = 0;} else {$ILJ2_porcentaje = round((($ILJ2 * 100) / $ILJ), 1, PHP_ROUND_HALF_UP);}
    if ($ILJ3 == 0) {$ILJ3_porcentaje = 0;} else {$ILJ3_porcentaje = round((($ILJ3 * 100) / $ILJ), 1, PHP_ROUND_HALF_UP);}
    if ($ILJ4 == 0) {$ILJ4_porcentaje = 0;} else {$ILJ4_porcentaje = round((($ILJ4 * 100) / $ILJ), 1, PHP_ROUND_HALF_UP);}
    if ($ILJ5 == 0) {$ILJ5_porcentaje = 0;} else {$ILJ5_porcentaje = round((($ILJ5 * 100) / $ILJ), 1, PHP_ROUND_HALF_UP);}
    $ILP1 = Consolidados3::ILP1(conexion::obtener_conexion());
    $ILP2 = Consolidados3::ILP2(conexion::obtener_conexion());
    $ILP3 = Consolidados3::ILP3(conexion::obtener_conexion());
    $ILP4 = Consolidados3::ILP4(conexion::obtener_conexion());
    $ILP5 = Consolidados3::ILP5(conexion::obtener_conexion());
    $ILP = $ILP1 + $ILP2 + $ILP3 + $ILP4 + $ILP5;
    if ($ILP1 == 0) {$ILP1_porcentaje = 0;} else {$ILP1_porcentaje = round((($ILP1 * 100) / $ILP), 1, PHP_ROUND_HALF_UP);}
    if ($ILP2 == 0) {$ILP2_porcentaje = 0;} else {$ILP2_porcentaje = round((($ILP2 * 100) / $ILP), 1, PHP_ROUND_HALF_UP);}
    if ($ILP3 == 0) {$ILP3_porcentaje = 0;} else {$ILP3_porcentaje = round((($ILP3 * 100) / $ILP), 1, PHP_ROUND_HALF_UP);}
    if ($ILP4 == 0) {$ILP4_porcentaje = 0;} else {$ILP4_porcentaje = round((($ILP4 * 100) / $ILP), 1, PHP_ROUND_HALF_UP);}
    if ($ILP5 == 0) {$ILP5_porcentaje = 0;} else {$ILP5_porcentaje = round((($ILP5 * 100) / $ILP), 1, PHP_ROUND_HALF_UP);}
    $ILA1 = Consolidados3::ILA1(conexion::obtener_conexion());
    $ILA2 = Consolidados3::ILA2(conexion::obtener_conexion());
    $ILA3 = Consolidados3::ILA3(conexion::obtener_conexion());
    $ILA4 = Consolidados3::ILA4(conexion::obtener_conexion());
    $ILA5 = Consolidados3::ILA5(conexion::obtener_conexion());
    $ILA = $ILA1 + $ILA2 + $ILA3 + $ILA4 + $ILA5;
    if ($ILA1 == 0) {$ILA1_porcentaje = 0;} else {$ILA1_porcentaje = round((($ILA1 * 100) / $ILA), 1, PHP_ROUND_HALF_UP);}
    if ($ILA2 == 0) {$ILA2_porcentaje = 0;} else {$ILA2_porcentaje = round((($ILA2 * 100) / $ILA), 1, PHP_ROUND_HALF_UP);}
    if ($ILA3 == 0) {$ILA3_porcentaje = 0;} else {$ILA3_porcentaje = round((($ILA3 * 100) / $ILA), 1, PHP_ROUND_HALF_UP);}
    if ($ILA4 == 0) {$ILA4_porcentaje = 0;} else {$ILA4_porcentaje = round((($ILA4 * 100) / $ILA), 1, PHP_ROUND_HALF_UP);}
    if ($ILA5 == 0) {$ILA5_porcentaje = 0;} else {$ILA5_porcentaje = round((($ILA5 * 100) / $ILA), 1, PHP_ROUND_HALF_UP);}
    $ILO1 = Consolidados3::ILO1(conexion::obtener_conexion());
    $ILO2 = Consolidados3::ILO2(conexion::obtener_conexion());
    $ILO3 = Consolidados3::ILO3(conexion::obtener_conexion());
    $ILO4 = Consolidados3::ILO4(conexion::obtener_conexion());
    $ILO5 = Consolidados3::ILO5(conexion::obtener_conexion());
    $ILO = $ILO1 + $ILO2 + $ILO3 + $ILO4 + $ILO5;
    if ($ILO1 == 0) {$ILO1_porcentaje = 0;} else {$ILO1_porcentaje = round((($ILO1 * 100) / $ILO), 1, PHP_ROUND_HALF_UP);}
    if ($ILO2 == 0) {$ILO2_porcentaje = 0;} else {$ILO2_porcentaje = round((($ILO2 * 100) / $ILO), 1, PHP_ROUND_HALF_UP);}
    if ($ILO3 == 0) {$ILO3_porcentaje = 0;} else {$ILO3_porcentaje = round((($ILO3 * 100) / $ILO), 1, PHP_ROUND_HALF_UP);}
    if ($ILO4 == 0) {$ILO4_porcentaje = 0;} else {$ILO4_porcentaje = round((($ILO4 * 100) / $ILO), 1, PHP_ROUND_HALF_UP);}
    if ($ILO5 == 0) {$ILO5_porcentaje = 0;} else {$ILO5_porcentaje = round((($ILO5 * 100) / $ILO), 1, PHP_ROUND_HALF_UP);}
    $PEJ1 = Consolidados3::PEJ1(conexion::obtener_conexion());
    $PEJ2 = Consolidados3::PEJ2(conexion::obtener_conexion());
    $PEJ3 = Consolidados3::PEJ3(conexion::obtener_conexion());
    $PEJ4 = Consolidados3::PEJ4(conexion::obtener_conexion());
    $PEJ5 = Consolidados3::PEJ5(conexion::obtener_conexion());
    $PEJ = $PEJ1 + $PEJ2 + $PEJ3 + $PEJ4 + $PEJ5;
    if ($PEJ1 == 0) {$PEJ1_porcentaje = 0;} else {$PEJ1_porcentaje = round((($PEJ1 * 100) / $PEJ), 1, PHP_ROUND_HALF_UP);}
    if ($PEJ2 == 0) {$PEJ2_porcentaje = 0;} else {$PEJ2_porcentaje = round((($PEJ2 * 100) / $PEJ), 1, PHP_ROUND_HALF_UP);}
    if ($PEJ3 == 0) {$PEJ3_porcentaje = 0;} else {$PEJ3_porcentaje = round((($PEJ3 * 100) / $PEJ), 1, PHP_ROUND_HALF_UP);}
    if ($PEJ4 == 0) {$PEJ4_porcentaje = 0;} else {$PEJ4_porcentaje = round((($PEJ4 * 100) / $PEJ), 1, PHP_ROUND_HALF_UP);}
    if ($PEJ5 == 0) {$PEJ5_porcentaje = 0;} else {$PEJ5_porcentaje = round((($PEJ5 * 100) / $PEJ), 1, PHP_ROUND_HALF_UP);}
    $PEP1 = Consolidados3::PEP1(conexion::obtener_conexion());
    $PEP2 = Consolidados3::PEP2(conexion::obtener_conexion());
    $PEP3 = Consolidados3::PEP3(conexion::obtener_conexion());
    $PEP4 = Consolidados3::PEP4(conexion::obtener_conexion());
    $PEP5 = Consolidados3::PEP5(conexion::obtener_conexion());
    $PEP = $PEP1 + $PEP2 + $PEP3 + $PEP4 + $PEP5;
    if ($PEP1 == 0) {$PEP1_porcentaje = 0;} else {$PEP1_porcentaje = round((($PEP1 * 100) / $PEP), 1, PHP_ROUND_HALF_UP);}
    if ($PEP2 == 0) {$PEP2_porcentaje = 0;} else {$PEP2_porcentaje = round((($PEP2 * 100) / $PEP), 1, PHP_ROUND_HALF_UP);}
    if ($PEP3 == 0) {$PEP3_porcentaje = 0;} else {$PEP3_porcentaje = round((($PEP3 * 100) / $PEP), 1, PHP_ROUND_HALF_UP);}
    if ($PEP4 == 0) {$PEP4_porcentaje = 0;} else {$PEP4_porcentaje = round((($PEP4 * 100) / $PEP), 1, PHP_ROUND_HALF_UP);}
    if ($PEP5 == 0) {$PEP5_porcentaje = 0;} else {$PEP5_porcentaje = round((($PEP5 * 100) / $PEP), 1, PHP_ROUND_HALF_UP);}
    $PEA1 = Consolidados3::PEA1(conexion::obtener_conexion());
    $PEA2 = Consolidados3::PEA2(conexion::obtener_conexion());
    $PEA3 = Consolidados3::PEA3(conexion::obtener_conexion());
    $PEA4 = Consolidados3::PEA4(conexion::obtener_conexion());
    $PEA5 = Consolidados3::PEA5(conexion::obtener_conexion());
    $PEA = $PEA1 + $PEA2 + $PEA3 + $PEA4 + $PEA5;
    if ($PEA1 == 0) {$PEA1_porcentaje = 0;} else {$PEA1_porcentaje = round((($PEA1 * 100) / $PEA), 1, PHP_ROUND_HALF_UP);}
    if ($PEA2 == 0) {$PEA2_porcentaje = 0;} else {$PEA2_porcentaje = round((($PEA2 * 100) / $PEA), 1, PHP_ROUND_HALF_UP);}
    if ($PEA3 == 0) {$PEA3_porcentaje = 0;} else {$PEA3_porcentaje = round((($PEA3 * 100) / $PEA), 1, PHP_ROUND_HALF_UP);}
    if ($PEA4 == 0) {$PEA4_porcentaje = 0;} else {$PEA4_porcentaje = round((($PEA4 * 100) / $PEA), 1, PHP_ROUND_HALF_UP);}
    if ($PEA5 == 0) {$PEA5_porcentaje = 0;} else {$PEA5_porcentaje = round((($PEA5 * 100) / $PEA), 1, PHP_ROUND_HALF_UP);}
    $PEO1 = Consolidados3::PEO1(conexion::obtener_conexion());
    $PEO2 = Consolidados3::PEO2(conexion::obtener_conexion());
    $PEO3 = Consolidados3::PEO3(conexion::obtener_conexion());
    $PEO4 = Consolidados3::PEO4(conexion::obtener_conexion());
    $PEO5 = Consolidados3::PEO5(conexion::obtener_conexion());
    $PEO = $PEO1 + $PEO2 + $PEO3 + $PEO4 + $PEO5;
    if ($PEO1 == 0) {$PEO1_porcentaje = 0;} else {$PEO1_porcentaje = round((($PEO1 * 100) / $PEO), 1, PHP_ROUND_HALF_UP);}
    if ($PEO2 == 0) {$PEO2_porcentaje = 0;} else {$PEO2_porcentaje = round((($PEO2 * 100) / $PEO), 1, PHP_ROUND_HALF_UP);}
    if ($PEO3 == 0) {$PEO3_porcentaje = 0;} else {$PEO3_porcentaje = round((($PEO3 * 100) / $PEO), 1, PHP_ROUND_HALF_UP);}
    if ($PEO4 == 0) {$PEO4_porcentaje = 0;} else {$PEO4_porcentaje = round((($PEO4 * 100) / $PEO), 1, PHP_ROUND_HALF_UP);}
    if ($PEO5 == 0) {$PEO5_porcentaje = 0;} else {$PEO5_porcentaje = round((($PEO5 * 100) / $PEO), 1, PHP_ROUND_HALF_UP);}
    $variable1= array($ESJP1_porcentaje, $ESJP2_porcentaje, $ESJP3_porcentaje, $ESJP4_porcentaje, $ESJP5_porcentaje);
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
    if ((($ESJP1_porcentaje == $high_1) or ( $ESJP1_porcentaje == $high_2)or($ESJP1_porcentaje > 20)) && ($ESJP1_porcentaje > 20)) {
        $ESJP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $ESJP1c = '';
    }
    if ((($ESJP2_porcentaje == $high_1) or ( $ESJP2_porcentaje == $high_2)or($ESJP2_porcentaje > 20)) && ($ESJP2_porcentaje > 20)) {
        $ESJP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $ESJP2c = '';
    }
    if ((($ESJP3_porcentaje == $high_1)or ( $ESJP3_porcentaje == $high_2)or($ESJP3_porcentaje > 20)) && ($ESJP3_porcentaje > 20)) {
        $ESJP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $ESJP3c = '';
    }
    if ((($ESJP4_porcentaje == $high_1) or ( $ESJP4_porcentaje == $high_2)or($ESJP4_porcentaje > 20)) && ($ESJP4_porcentaje > 20)) {
        $ESJP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $ESJP4c = '';
    }
    if ((($ESJP5_porcentaje == $high_1) or ( $ESJP5_porcentaje == $high_2)or($ESJP5_porcentaje > 20)) && ($ESJP5_porcentaje > 20)) {
        $ESJP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $ESJP5c = '';
    } 
    $variable2= array($ESAO1_porcentaje, $ESAO2_porcentaje, $ESAO3_porcentaje, $ESAO4_porcentaje, $ESAO5_porcentaje);
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
    if ((($ESAO1_porcentaje == $high_3) or ( $ESAO1_porcentaje == $high_4)or($ESAO1_porcentaje > 20)) && ($ESAO1_porcentaje > 20)) {
        $ESAO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $ESAO1c = '';
    }
    if ((($ESAO2_porcentaje == $high_3) or ( $ESAO2_porcentaje == $high_4)or($ESAO2_porcentaje > 20)) && ($ESAO2_porcentaje > 20)) {
        $ESAO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $ESAO2c = '';
    }
    if ((($ESAO3_porcentaje == $high_3)or ( $ESAO3_porcentaje == $high_4)or($ESAO3_porcentaje > 20)) && ($ESAO3_porcentaje > 20)) {
        $ESAO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $ESAO3c = '';
    }
    if ((($ESAO4_porcentaje == $high_3) or ( $ESAO4_porcentaje == $high_4)or($ESAO4_porcentaje > 20)) && ($ESAO4_porcentaje > 20)) {
        $ESAO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $ESAO4c = '';
    }
    if ((($ESAO5_porcentaje == $high_3) or ( $ESAO5_porcentaje == $high_4)or($ESAO5_porcentaje > 20)) && ($ESAO5_porcentaje > 20)) {
        $ESAO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $ESAO5c = '';
    } 
    $variable3= array($ESTJ1_porcentaje, $ESTJ2_porcentaje, $ESTJ3_porcentaje, $ESTJ4_porcentaje, $ESTJ5_porcentaje);
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
    if ((($ESTJ1_porcentaje == $high_5) or ( $ESTJ1_porcentaje == $high_6)or($ESTJ1_porcentaje > 20)) && ($ESTJ1_porcentaje > 20)) {
        $ESTJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $ESTJ1c = '';
    }
    if ((($ESTJ2_porcentaje == $high_5) or ( $ESTJ2_porcentaje == $high_6)or($ESTJ2_porcentaje > 20)) && ($ESTJ2_porcentaje > 20)) {
        $ESTJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $ESTJ2c = '';
    }
    if ((($ESTJ3_porcentaje == $high_5)or ( $ESTJ3_porcentaje == $high_6)or($ESTJ3_porcentaje > 20)) && ($ESTJ3_porcentaje > 20)) {
        $ESTJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $ESTJ3c = '';
    }
    if ((($ESTJ4_porcentaje == $high_5) or ( $ESTJ4_porcentaje == $high_6)or($ESTJ4_porcentaje > 20)) && ($ESTJ4_porcentaje > 20)) {
        $ESTJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $ESTJ4c = '';
    }
    if ((($ESTJ5_porcentaje == $high_5) or ( $ESTJ5_porcentaje == $high_6)or($ESTJ5_porcentaje > 20)) && ($ESTJ5_porcentaje > 20)) {
        $ESTJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $ESTJ5c = '';
    } 
    $variable4= array($ESTP1_porcentaje, $ESTP2_porcentaje, $ESTP3_porcentaje, $ESTP4_porcentaje, $ESTP5_porcentaje);
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
    if ((($ESTP1_porcentaje == $high_7) or ( $ESTP1_porcentaje == $high_8)or($ESTP1_porcentaje > 20)) && ($ESTP1_porcentaje > 20)) {
        $ESTP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $ESTP1c = '';
    }
    if ((($ESTP2_porcentaje == $high_7) or ( $ESTP2_porcentaje == $high_8)or($ESTP2_porcentaje > 20)) && ($ESTP2_porcentaje > 20)) {
        $ESTP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $ESTP2c = '';
    }
    if ((($ESTP3_porcentaje == $high_7)or ( $ESTP3_porcentaje == $high_8)or($ESTP3_porcentaje > 20)) && ($ESTP3_porcentaje > 20)) {
        $ESTP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $ESTP3c = '';
    }
    if ((($ESTP4_porcentaje == $high_7) or ( $ESTP4_porcentaje == $high_8)or($ESTP4_porcentaje > 20)) && ($ESTP4_porcentaje > 20)) {
        $ESTP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $ESTP4c = '';
    }
    if ((($ESTP5_porcentaje == $high_7) or ( $ESTP5_porcentaje == $high_8)or($ESTP5_porcentaje > 20)) && ($ESTP5_porcentaje > 20)) {
        $ESTP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $ESTP5c = '';
    } 
    $variable5= array($ESTA1_porcentaje, $ESTA2_porcentaje, $ESTA3_porcentaje, $ESTA4_porcentaje, $ESTA5_porcentaje);
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
    if ((($ESTA1_porcentaje == $high_9) or ( $ESTA1_porcentaje == $high_10)or($ESTA1_porcentaje > 20)) && ($ESTA1_porcentaje > 20)) {
        $ESTA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $ESTA1c = '';
    }
    if ((($ESTA2_porcentaje == $high_9) or ( $ESTA2_porcentaje == $high_10)or($ESTA2_porcentaje > 20)) && ($ESTA2_porcentaje > 20)) {
        $ESTA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $ESTA2c = '';
    }
    if ((($ESTA3_porcentaje == $high_9)or ( $ESTA3_porcentaje == $high_10)or($ESTA3_porcentaje > 20)) && ($ESTA3_porcentaje > 20)) {
        $ESTA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $ESTA3c = '';
    }
    if ((($ESTA4_porcentaje == $high_9) or ( $ESTA4_porcentaje == $high_10)or($ESTA4_porcentaje > 20)) && ($ESTA4_porcentaje > 20)) {
        $ESTA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $ESTA4c = '';
    }
    if ((($ESTA5_porcentaje == $high_9) or ( $ESTA5_porcentaje == $high_10)or($ESTA5_porcentaje > 20)) && ($ESTA5_porcentaje > 20)) {
        $ESTA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $ESTA5c = '';
    } 
    $variable6= array($ESTO1_porcentaje, $ESTO2_porcentaje, $ESTO3_porcentaje, $ESTO4_porcentaje, $ESTO5_porcentaje);
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
    if ((($ESTO1_porcentaje == $high_11) or ( $ESTO1_porcentaje == $high_12)or($ESTO1_porcentaje > 20)) && ($ESTO1_porcentaje > 20)) {
        $ESTO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $ESTO1c = '';
    }
    if ((($ESTO2_porcentaje == $high_11) or ( $ESTO2_porcentaje == $high_12)or($ESTO2_porcentaje > 20)) && ($ESTO2_porcentaje > 20)) {
        $ESTO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $ESTO2c = '';
    }
    if ((($ESTO3_porcentaje == $high_11)or ( $ESTO3_porcentaje == $high_12)or($ESTO3_porcentaje > 20)) && ($ESTO3_porcentaje > 20)) {
        $ESTO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $ESTO3c = '';
    }
    if ((($ESTO4_porcentaje == $high_11) or ( $ESTO4_porcentaje == $high_12)or($ESTO4_porcentaje > 20)) && ($ESTO4_porcentaje > 20)) {
        $ESTO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $ESTO4c = '';
    }
    if ((($ESTO5_porcentaje == $high_11) or ( $ESTO5_porcentaje == $high_12)or($ESTO5_porcentaje > 20)) && ($ESTO5_porcentaje > 20)) {
        $ESTO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $ESTO5c = '';
    } 
    $variable7= array($SFJ1_porcentaje, $SFJ2_porcentaje, $SFJ3_porcentaje, $SFJ4_porcentaje, $SFJ5_porcentaje);
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
    if ((($SFJ1_porcentaje == $high_13) or ( $SFJ1_porcentaje == $high_14)or($SFJ1_porcentaje > 20)) && ($SFJ1_porcentaje > 20)) {
        $SFJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $SFJ1c = '';
    }
    if ((($SFJ2_porcentaje == $high_13) or ( $SFJ2_porcentaje == $high_14)or($SFJ2_porcentaje > 20)) && ($SFJ2_porcentaje > 20)) {
        $SFJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $SFJ2c = '';
    }
    if ((($SFJ3_porcentaje == $high_13)or ( $SFJ3_porcentaje == $high_14)or($SFJ3_porcentaje > 20)) && ($SFJ3_porcentaje > 20)) {
        $SFJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $SFJ3c = '';
    }
    if ((($SFJ4_porcentaje == $high_13) or ( $SFJ4_porcentaje == $high_14)or($SFJ4_porcentaje > 20)) && ($SFJ4_porcentaje > 20)) {
        $SFJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $SFJ4c = '';
    }
    if ((($SFJ5_porcentaje == $high_13) or ( $SFJ5_porcentaje == $high_14)or($SFJ5_porcentaje > 20)) && ($SFJ5_porcentaje > 20)) {
        $SFJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $SFJ5c = '';
    }
    $variable8= array($SFP1_porcentaje, $SFP2_porcentaje, $SFP3_porcentaje, $SFP4_porcentaje, $SFP5_porcentaje);
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
    if ((($SFP1_porcentaje == $high_15) or ( $SFP1_porcentaje == $high_16)or($SFP1_porcentaje > 20)) && ($SFP1_porcentaje > 20)) {
        $SFP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $SFP1c = '';
    }
    if ((($SFP2_porcentaje == $high_15) or ( $SFP2_porcentaje == $high_16)or($SFP2_porcentaje > 20)) && ($SFP2_porcentaje > 20)) {
        $SFP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $SFP2c = '';
    }
    if ((($SFP3_porcentaje == $high_15)or ( $SFP3_porcentaje == $high_16)or($SFP3_porcentaje > 20)) && ($SFP3_porcentaje > 20)) {
        $SFP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $SFP3c = '';
    }
    if ((($SFP4_porcentaje == $high_15) or ( $SFP4_porcentaje == $high_16)or($SFP4_porcentaje > 20)) && ($SFP4_porcentaje > 20)) {
        $SFP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $SFP4c = '';
    }
    if ((($SFP5_porcentaje == $high_15) or ( $SFP5_porcentaje == $high_16)or($SFP5_porcentaje > 20)) && ($SFP5_porcentaje > 20)) {
        $SFP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $SFP5c = '';
    } 
    $variable9= array($SFA1_porcentaje, $SFA2_porcentaje, $SFA3_porcentaje, $SFA4_porcentaje, $SFA5_porcentaje);
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
    if ((($SFA1_porcentaje == $high_17) or ( $SFA1_porcentaje == $high_18)or($SFA1_porcentaje > 20)) && ($SFA1_porcentaje > 20)) {
        $SFA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $SFA1c = '';
    }
    if ((($SFA2_porcentaje == $high_17) or ( $SFA2_porcentaje == $high_18)or($SFA2_porcentaje > 20)) && ($SFA2_porcentaje > 20)) {
        $SFA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $SFA2c = '';
    }
    if ((($SFA3_porcentaje == $high_17)or ( $SFA3_porcentaje == $high_18)or($SFA3_porcentaje > 20)) && ($SFA3_porcentaje > 20)) {
        $SFA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $SFA3c = '';
    }
    if ((($SFA4_porcentaje == $high_17) or ( $SFA4_porcentaje == $high_18)or($SFA4_porcentaje > 20)) && ($SFA4_porcentaje > 20)) {
        $SFA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $SFA4c = '';
    }
    if ((($SFA5_porcentaje == $high_17) or ( $SFA5_porcentaje == $high_18)or($SFA5_porcentaje > 20)) && ($SFA5_porcentaje > 20)) {
        $SFA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $SFA5c = '';
    } 
    $variable10= array($SFO1_porcentaje, $SFO2_porcentaje, $SFO3_porcentaje, $SFO4_porcentaje, $SFO5_porcentaje);
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
    if ((($SFO1_porcentaje == $high_19) or ( $SFO1_porcentaje == $high_20)or($SFO1_porcentaje > 20)) && ($SFO1_porcentaje > 20)) {
        $SFO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $SFO1c = '';
    }
    if ((($SFO2_porcentaje == $high_19) or ( $SFO2_porcentaje == $high_20)or($SFO2_porcentaje > 20)) && ($SFO2_porcentaje > 20)) {
        $SFO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $SFO2c = '';
    }
    if ((($SFO3_porcentaje == $high_19)or ( $SFO3_porcentaje == $high_20)or($SFO3_porcentaje > 20)) && ($SFO3_porcentaje > 20)) {
        $SFO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $SFO3c = '';
    }
    if ((($SFO4_porcentaje == $high_19) or ( $SFO4_porcentaje == $high_20)or($SFO4_porcentaje > 20)) && ($SFO4_porcentaje > 20)) {
        $SFO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $SFO4c = '';
    }
    if ((($SFO5_porcentaje == $high_19) or ( $SFO5_porcentaje == $high_20)or($SFO5_porcentaje > 20)) && ($SFO5_porcentaje > 20)) {
        $SFO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $SFO5c = '';
    } 
    $variable12= array($CSJ1_porcentaje, $CSJ2_porcentaje, $CSJ3_porcentaje, $CSJ4_porcentaje, $CSJ5_porcentaje);
    $c = 0;
    $high_21= $high_22= 0;
    do {
        if (isset($variable12[$c])) {
            if ($variable12[$c] > $high_21) {
                $high_22= $high_21;
                $high_21= $variable12[$c];
            } else if ($variable12[$c] > $high_22) {
                $high_22= $variable12[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($CSJ1_porcentaje == $high_21) or ( $CSJ1_porcentaje == $high_22)or($CSJ1_porcentaje > 20)) && ($CSJ1_porcentaje > 20)) {
        $CSJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $CSJ1c = '';
    }
    if ((($CSJ2_porcentaje == $high_21) or ( $CSJ2_porcentaje == $high_22)or($CSJ2_porcentaje > 20)) && ($CSJ2_porcentaje > 20)) {
        $CSJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $CSJ2c = '';
    }
    if ((($CSJ3_porcentaje == $high_21)or ( $CSJ3_porcentaje == $high_22)or($CSJ3_porcentaje > 20)) && ($CSJ3_porcentaje > 20)) {
        $CSJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $CSJ3c = '';
    }
    if ((($CSJ4_porcentaje == $high_21) or ( $CSJ4_porcentaje == $high_22)or($CSJ4_porcentaje > 20)) && ($CSJ4_porcentaje > 20)) {
        $CSJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $CSJ4c = '';
    }
    if ((($CSJ5_porcentaje == $high_21) or ( $CSJ5_porcentaje == $high_22)or($CSJ5_porcentaje > 20)) && ($CSJ5_porcentaje > 20)) {
        $CSJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $CSJ5c = '';
    } 
    $variable13= array($CSP1_porcentaje, $CSP2_porcentaje, $CSP3_porcentaje, $CSP4_porcentaje, $CSP5_porcentaje);
    $c = 0;
    $high_23= $high_24= 0;
    do {
        if (isset($variable13[$c])) {
            if ($variable13[$c] > $high_23) {
                $high_24= $high_23;
                $high_23= $variable13[$c];
            } else if ($variable13[$c] > $high_24) {
                $high_24= $variable13[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($CSP1_porcentaje == $high_23) or ( $CSP1_porcentaje == $high_24)or($CSP1_porcentaje > 20)) && ($CSP1_porcentaje > 20)) {
        $CSP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $CSP1c = '';
    }
    if ((($CSP2_porcentaje == $high_23) or ( $CSP2_porcentaje == $high_24)or($CSP2_porcentaje > 20)) && ($CSP2_porcentaje > 20)) {
        $CSP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $CSP2c = '';
    }
    if ((($CSP3_porcentaje == $high_23)or ( $CSP3_porcentaje == $high_24)or($CSP3_porcentaje > 20)) && ($CSP3_porcentaje > 20)) {
        $CSP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $CSP3c = '';
    }
    if ((($CSP4_porcentaje == $high_23) or ( $CSP4_porcentaje == $high_24)or($CSP4_porcentaje > 20)) && ($CSP4_porcentaje > 20)) {
        $CSP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $CSP4c = '';
    }
    if ((($CSP5_porcentaje == $high_23) or ( $CSP5_porcentaje == $high_24)or($CSP5_porcentaje > 20)) && ($CSP5_porcentaje > 20)) {
        $CSP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $CSP5c = '';
    } 
    $variable14= array($CSA1_porcentaje, $CSA2_porcentaje, $CSA3_porcentaje, $CSA4_porcentaje, $CSA5_porcentaje);
    $c = 0;
    $high_25= $high_26= 0;
    do {
        if (isset($variable14[$c])) {
            if ($variable14[$c] > $high_25) {
                $high_26= $high_25;
                $high_25= $variable14[$c];
            } else if ($variable14[$c] > $high_26) {
                $high_26= $variable14[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($CSA1_porcentaje == $high_25) or ( $CSA1_porcentaje == $high_26)or($CSA1_porcentaje > 20)) && ($CSA1_porcentaje > 20)) {
        $CSA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $CSA1c = '';
    }
    if ((($CSA2_porcentaje == $high_25) or ( $CSA2_porcentaje == $high_26)or($CSA2_porcentaje > 20)) && ($CSA2_porcentaje > 20)) {
        $CSA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $CSA2c = '';
    }
    if ((($CSA3_porcentaje == $high_25)or ( $CSA3_porcentaje == $high_26)or($CSA3_porcentaje > 20)) && ($CSA3_porcentaje > 20)) {
        $CSA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $CSA3c = '';
    }
    if ((($CSA4_porcentaje == $high_25) or ( $CSA4_porcentaje == $high_26)or($CSA4_porcentaje > 20)) && ($CSA4_porcentaje > 20)) {
        $CSA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $CSA4c = '';
    }
    if ((($CSA5_porcentaje == $high_25) or ( $CSA5_porcentaje == $high_26)or($CSA5_porcentaje > 20)) && ($CSA5_porcentaje > 20)) {
        $CSA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $CSA5c = '';
    }
    $variable15= array($CSO1_porcentaje, $CSO2_porcentaje, $CSO3_porcentaje, $CSO4_porcentaje, $CSO5_porcentaje);
    $c = 0;
    $high_27= $high_28= 0;
    do {
        if (isset($variable15[$c])) {
            if ($variable15[$c] > $high_27) {
                $high_28= $high_27;
                $high_27= $variable15[$c];
            } else if ($variable15[$c] > $high_28) {
                $high_28= $variable15[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($CSO1_porcentaje == $high_27) or ( $CSO1_porcentaje == $high_28)or($CSO1_porcentaje > 20)) && ($CSO1_porcentaje > 20)) {
        $CSO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $CSO1c = '';
    }
    if ((($CSO2_porcentaje == $high_27) or ( $CSO2_porcentaje == $high_28)or($CSO2_porcentaje > 20)) && ($CSO2_porcentaje > 20)) {
        $CSO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $CSO2c = '';
    }
    if ((($CSO3_porcentaje == $high_27)or ( $CSO3_porcentaje == $high_28)or($CSO3_porcentaje > 20)) && ($CSO3_porcentaje > 20)) {
        $CSO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $CSO3c = '';
    }
    if ((($CSO4_porcentaje == $high_27) or ( $CSO4_porcentaje == $high_28)or($CSO4_porcentaje > 20)) && ($CSO4_porcentaje > 20)) {
        $CSO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $CSO4c = '';
    }
    if ((($CSO5_porcentaje == $high_27) or ( $CSO5_porcentaje == $high_28)or($CSO5_porcentaje > 20)) && ($CSO5_porcentaje > 20)) {
        $CSO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $CSO5c = '';
    } 
    $variable16= array($ILJ1_porcentaje, $ILJ2_porcentaje, $ILJ3_porcentaje, $ILJ4_porcentaje, $ILJ5_porcentaje);
    $c = 0;
    $high_29= $high_30= 0;
    do {
        if (isset($variable16[$c])) {
            if ($variable16[$c] > $high_29) {
                $high_30= $high_29;
                $high_29= $variable16[$c];
            } else if ($variable16[$c] > $high_30) {
                $high_30= $variable16[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($ILJ1_porcentaje == $high_29) or ( $ILJ1_porcentaje == $high_30)or($ILJ1_porcentaje > 20)) && ($ILJ1_porcentaje > 20)) {
        $ILJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $ILJ1c = '';
    }
    if ((($ILJ2_porcentaje == $high_29) or ( $ILJ2_porcentaje == $high_30)or($ILJ2_porcentaje > 20)) && ($ILJ2_porcentaje > 20)) {
        $ILJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $ILJ2c = '';
    }
    if ((($ILJ3_porcentaje == $high_29)or ( $ILJ3_porcentaje == $high_30)or($ILJ3_porcentaje > 20)) && ($ILJ3_porcentaje > 20)) {
        $ILJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $ILJ3c = '';
    }
    if ((($ILJ4_porcentaje == $high_29) or ( $ILJ4_porcentaje == $high_30)or($ILJ4_porcentaje > 20)) && ($ILJ4_porcentaje > 20)) {
        $ILJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $ILJ4c = '';
    }
    if ((($ILJ5_porcentaje == $high_29) or ( $ILJ5_porcentaje == $high_30)or($ILJ5_porcentaje > 20)) && ($ILJ5_porcentaje > 20)) {
        $ILJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $ILJ5c = '';
    }
    $variable17= array($ILP1_porcentaje, $ILP2_porcentaje, $ILP3_porcentaje, $ILP4_porcentaje, $ILP5_porcentaje);
    $c = 0;
    $high_31= $high_32= 0;
    do {
        if (isset($variable17[$c])) {
            if ($variable17[$c] > $high_31) {
                $high_32= $high_31;
                $high_31= $variable17[$c];
            } else if ($variable17[$c] > $high_32) {
                $high_32= $variable17[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($ILP1_porcentaje == $high_31) or ( $ILP1_porcentaje == $high_32)or($ILP1_porcentaje > 20)) && ($ILP1_porcentaje > 20)) {
        $ILP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $ILP1c = '';
    }
    if ((($ILP2_porcentaje == $high_31) or ( $ILP2_porcentaje == $high_32)or($ILP2_porcentaje > 20)) && ($ILP2_porcentaje > 20)) {
        $ILP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $ILP2c = '';
    }
    if ((($ILP3_porcentaje == $high_31)or ( $ILP3_porcentaje == $high_32)or($ILP3_porcentaje > 20)) && ($ILP3_porcentaje > 20)) {
        $ILP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $ILP3c = '';
    }
    if ((($ILP4_porcentaje == $high_31) or ( $ILP4_porcentaje == $high_32)or($ILP4_porcentaje > 20)) && ($ILP4_porcentaje > 20)) {
        $ILP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $ILP4c = '';
    }
    if ((($ILP5_porcentaje == $high_31) or ( $ILP5_porcentaje == $high_32)or($ILP5_porcentaje > 20)) && ($ILP5_porcentaje > 20)) {
        $ILP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $ILP5c = '';
    }
    $variable18= array($ILA1_porcentaje, $ILA2_porcentaje, $ILA3_porcentaje, $ILA4_porcentaje, $ILA5_porcentaje);
    $c = 0;
    $high_33= $high_34= 0;
    do {
        if (isset($variable18[$c])) {
            if ($variable18[$c] > $high_33) {
                $high_34= $high_33;
                $high_33= $variable18[$c];
            } else if ($variable18[$c] > $high_34) {
                $high_34= $variable18[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($ILA1_porcentaje == $high_33) or ( $ILA1_porcentaje == $high_34)or($ILA1_porcentaje > 20)) && ($ILA1_porcentaje > 20)) {
        $ILA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $ILA1c = '';
    }
    if ((($ILA2_porcentaje == $high_33) or ( $ILA2_porcentaje == $high_34)or($ILA2_porcentaje > 20)) && ($ILA2_porcentaje > 20)) {
        $ILA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $ILA2c = '';
    }
    if ((($ILA3_porcentaje == $high_33)or ( $ILA3_porcentaje == $high_34)or($ILA3_porcentaje > 20)) && ($ILA3_porcentaje > 20)) {
        $ILA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $ILA3c = '';
    }
    if ((($ILA4_porcentaje == $high_33) or ( $ILA4_porcentaje == $high_34)or($ILA4_porcentaje > 20)) && ($ILA4_porcentaje > 20)) {
        $ILA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $ILA4c = '';
    }
    if ((($ILA5_porcentaje == $high_33) or ( $ILA5_porcentaje == $high_34)or($ILA5_porcentaje > 20)) && ($ILA5_porcentaje > 20)) {
        $ILA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $ILA5c = '';
    }
    $variable19= array($ILO1_porcentaje, $ILO2_porcentaje, $ILO3_porcentaje, $ILO4_porcentaje, $ILO5_porcentaje);
    $c = 0;
    $high_35= $high_36= 0;
    do {
        if (isset($variable19[$c])) {
            if ($variable19[$c] > $high_35) {
                $high_36= $high_35;
                $high_35= $variable19[$c];
            } else if ($variable19[$c] > $high_36) {
                $high_36= $variable19[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($ILO1_porcentaje == $high_35) or ( $ILO1_porcentaje == $high_36)or($ILO1_porcentaje > 20)) && ($ILO1_porcentaje > 20)) {
        $ILO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $ILO1c = '';
    }
    if ((($ILO2_porcentaje == $high_35) or ( $ILO2_porcentaje == $high_36)or($ILO2_porcentaje > 20)) && ($ILO2_porcentaje > 20)) {
        $ILO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $ILO2c = '';
    }
    if ((($ILO3_porcentaje == $high_35)or ( $ILO3_porcentaje == $high_36)or($ILO3_porcentaje > 20)) && ($ILO3_porcentaje > 20)) {
        $ILO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $ILO3c = '';
    }
    if ((($ILO4_porcentaje == $high_35) or ( $ILO4_porcentaje == $high_36)or($ILO4_porcentaje > 20)) && ($ILO4_porcentaje > 20)) {
        $ILO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $ILO4c = '';
    }
    if ((($ILO5_porcentaje == $high_35) or ( $ILO5_porcentaje == $high_36)or($ILO5_porcentaje > 20)) && ($ILO5_porcentaje > 20)) {
        $ILO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $ILO5c = '';
    }
    $variable20= array($PEJ1_porcentaje, $PEJ2_porcentaje, $PEJ3_porcentaje, $PEJ4_porcentaje, $PEJ5_porcentaje);
    $c = 0;
    $high_37= $high_38= 0;
    do {
        if (isset($variable20[$c])) {
            if ($variable20[$c] > $high_37) {
                $high_38= $high_37;
                $high_37= $variable20[$c];
            } else if ($variable20[$c] > $high_38) {
                $high_38= $variable20[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($PEJ1_porcentaje == $high_37) or ( $PEJ1_porcentaje == $high_38)or($PEJ1_porcentaje > 20)) && ($PEJ1_porcentaje > 20)) {
        $PEJ1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $PEJ1c = '';
    }
    if ((($PEJ2_porcentaje == $high_37) or ( $PEJ2_porcentaje == $high_38)or($PEJ2_porcentaje > 20)) && ($PEJ2_porcentaje > 20)) {
        $PEJ2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $PEJ2c = '';
    }
    if ((($PEJ3_porcentaje == $high_37)or ( $PEJ3_porcentaje == $high_38)or($PEJ3_porcentaje > 20)) && ($PEJ3_porcentaje > 20)) {
        $PEJ3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $PEJ3c = '';
    }
    if ((($PEJ4_porcentaje == $high_37) or ( $PEJ4_porcentaje == $high_38)or($PEJ4_porcentaje > 20)) && ($PEJ4_porcentaje > 20)) {
        $PEJ4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $PEJ4c = '';
    }
    if ((($PEJ5_porcentaje == $high_37) or ( $PEJ5_porcentaje == $high_38)or($PEJ5_porcentaje > 20)) && ($PEJ5_porcentaje > 20)) {
        $PEJ5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $PEJ5c = '';
    }
    $variable21= array($PEP1_porcentaje, $PEP2_porcentaje, $PEP3_porcentaje, $PEP4_porcentaje, $PEP5_porcentaje);
    $c = 0;
    $high_39= $high_40= 0;
    do {
        if (isset($variable21[$c])) {
            if ($variable21[$c] > $high_39) {
                $high_40= $high_39;
                $high_39= $variable21[$c];
            } else if ($variable21[$c] > $high_40) {
                $high_40= $variable21[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($PEP1_porcentaje == $high_39) or ( $PEP1_porcentaje == $high_40)or($PEP1_porcentaje > 20)) && ($PEP1_porcentaje > 20)) {
        $PEP1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $PEP1c = '';
    }
    if ((($PEP2_porcentaje == $high_39) or ( $PEP2_porcentaje == $high_40)or($PEP2_porcentaje > 20)) && ($PEP2_porcentaje > 20)) {
        $PEP2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $PEP2c = '';
    }
    if ((($PEP3_porcentaje == $high_39)or ( $PEP3_porcentaje == $high_40)or($PEP3_porcentaje > 20)) && ($PEP3_porcentaje > 20)) {
        $PEP3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $PEP3c = '';
    }
    if ((($PEP4_porcentaje == $high_39) or ( $PEP4_porcentaje == $high_40)or($PEP4_porcentaje > 20)) && ($PEP4_porcentaje > 20)) {
        $PEP4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $PEP4c = '';
    }
    if ((($PEP5_porcentaje == $high_39) or ( $PEP5_porcentaje == $high_40)or($PEP5_porcentaje > 20)) && ($PEP5_porcentaje > 20)) {
        $PEP5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $PEP5c = '';
    }
    $variable22= array($PEA1_porcentaje, $PEA2_porcentaje, $PEA3_porcentaje, $PEA4_porcentaje, $PEA5_porcentaje);
    $c = 0;
    $high_41= $high_42= 0;
    do {
        if (isset($variable22[$c])) {
            if ($variable22[$c] > $high_41) {
                $high_42= $high_41;
                $high_41= $variable22[$c];
            } else if ($variable22[$c] > $high_42) {
                $high_42= $variable22[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($PEA1_porcentaje == $high_41) or ( $PEA1_porcentaje == $high_42)or($PEA1_porcentaje > 20)) && ($PEA1_porcentaje > 20)) {
        $PEA1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $PEA1c = '';
    }
    if ((($PEA2_porcentaje == $high_41) or ( $PEA2_porcentaje == $high_42)or($PEA2_porcentaje > 20)) && ($PEA2_porcentaje > 20)) {
        $PEA2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $PEA2c = '';
    }
    if ((($PEA3_porcentaje == $high_41)or ( $PEA3_porcentaje == $high_42)or($PEA3_porcentaje > 20)) && ($PEA3_porcentaje > 20)) {
        $PEA3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $PEA3c = '';
    }
    if ((($PEA4_porcentaje == $high_41) or ( $PEA4_porcentaje == $high_42)or($PEA4_porcentaje > 20)) && ($PEA4_porcentaje > 20)) {
        $PEA4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $PEA4c = '';
    }
    if ((($PEA5_porcentaje == $high_41) or ( $PEA5_porcentaje == $high_42)or($PEA5_porcentaje > 20)) && ($PEA5_porcentaje > 20)) {
        $PEA5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $PEA5c = '';
    }
    $variable23= array($PEO1_porcentaje, $PEO2_porcentaje, $PEO3_porcentaje, $PEO4_porcentaje, $PEO5_porcentaje);
    $c = 0;
    $high_43= $high_44= 0;
    do {
        if (isset($variable23[$c])) {
            if ($variable23[$c] > $high_43) {
                $high_44= $high_43;
                $high_43= $variable23[$c];
            } else if ($variable23[$c] > $high_44) {
                $high_44= $variable23[$c];
            }
        }$c++;
    } while ($c <= 20);
    if ((($PEO1_porcentaje == $high_43) or ( $PEO1_porcentaje == $high_44)or($PEO1_porcentaje > 20)) && ($PEO1_porcentaje > 20)) {
        $PEO1c = 'style="color:rgb(57, 77, 0);font-family:verdanab"';
    } else {
        $PEO1c = '';
    }
    if ((($PEO2_porcentaje == $high_43) or ( $PEO2_porcentaje == $high_44)or($PEO2_porcentaje > 20)) && ($PEO2_porcentaje > 20)) {
        $PEO2c = 'style="color:rgb(115, 153, 0);font-family:verdanab"';
    } else {
        $PEO2c = '';
    }
    if ((($PEO3_porcentaje == $high_43)or ( $PEO3_porcentaje == $high_44)or($PEO3_porcentaje > 20)) && ($PEO3_porcentaje > 20)) {
        $PEO3c = 'style="color:rgb(102, 102, 102);font-family:verdanab"';
    } else {
        $PEO3c = '';
    }
    if ((($PEO4_porcentaje == $high_43) or ( $PEO4_porcentaje == $high_44)or($PEO4_porcentaje > 20)) && ($PEO4_porcentaje > 20)) {
        $PEO4c = 'style="color:rgb(231, 116, 79);font-family:verdanab"';
    } else {
        $PEO4c = '';
    }
    if ((($PEO5_porcentaje == $high_43) or ( $PEO5_porcentaje == $high_44)or($PEO5_porcentaje > 20)) && ($PEO5_porcentaje > 20)) {
        $PEO5c = 'style="color:rgb(157, 55, 21);font-family:verdanab"';
    } else {
        $PEO5c = '';
    }
        $EstresJP0 = Consolidados3::EstresJP(conexion::obtener_conexion());
        $EstresJP = round($EstresJP0, 1, PHP_ROUND_HALF_UP);
                    if ($EstresJP > 25.1) {
                        $EstresJPR= 'Muy Alto';
                        $EstresJPC  = 'style="color:rgb(157, 55, 21)"';
                    } elseif ($EstresJP > 17.8) {
                        $EstresJPR= 'Alto';
                        $EstresJPC = 'style="color:rgb(231, 116, 79)"';
                    } elseif ($EstresJP > 12.7) {
                        $EstresJPR= 'Medio';
                        $EstresJPC = 'style="color:rgb(102, 102, 102)"';
                    } elseif ($EstresJP > 7.9) {
                        $EstresJPR= 'Bajo';
                        $EstresJPC = 'style="color:rgb(115, 153, 0)"';
                    } elseif ($EstresJP > 0) {
                        $EstresJPR= 'Sin Riesgo';
                        $EstresJPC = 'style="color:rgb(57, 77, 0)"';
                    }
        $EstresAO0 = Consolidados3::EstresAO(conexion::obtener_conexion());
        $EstresAO = round($EstresAO0, 1, PHP_ROUND_HALF_UP);
                    if ($EstresAO > 23.5) {
                        $EstresAOR= 'Muy Alto';
                        $EstresAOC  = 'style="color:rgb(157, 55, 21)"';
                    } elseif ($EstresAO > 17.1) {
                        $EstresAOR= 'Alto';
                        $EstresAOC = 'style="color:rgb(231, 116, 79)"';
                    } elseif ($EstresAO > 11.9) {
                        $EstresAOR= 'Medio';
                        $EstresAOC = 'style="color:rgb(102, 102, 102)"';
                    } elseif ($EstresAO > 6.6) {
                        $EstresAOR= 'Bajo';
                        $EstresAOC = 'style="color:rgb(115, 153, 0)"';
                    } elseif ($EstresAO > 0) {
                        $EstresAOR= 'Sin Riesgo';
                        $EstresAOC = 'style="color:rgb(57, 77, 0)"';
                    }
        $ESJP1 = Consolidados3::ESJP1(conexion::obtener_conexion());
        $ESJP2 = Consolidados3::ESJP2(conexion::obtener_conexion());
        $ESJP3 = Consolidados3::ESJP3(conexion::obtener_conexion());
        $ESJP4 = Consolidados3::ESJP4(conexion::obtener_conexion());
        $ESJP5 = Consolidados3::ESJP5(conexion::obtener_conexion());
        $ESAO1 = Consolidados3::ESAO1(conexion::obtener_conexion());
        $ESAO2 = Consolidados3::ESAO2(conexion::obtener_conexion());
        $ESAO3 = Consolidados3::ESAO3(conexion::obtener_conexion());
        $ESAO4 = Consolidados3::ESAO4(conexion::obtener_conexion());
        $ESAO5 = Consolidados3::ESAO5(conexion::obtener_conexion());
        $ES1 = $ESJP1 + $ESAO1;
        $ES2 = $ESJP2 + $ESAO2;
        $ES3 = $ESJP3 + $ESAO3;
        $ES4 = $ESJP4 + $ESAO4;
        $ES5 = $ESJP5 + $ESAO5;
        $ES = $ES1 + $ES2 + $ES3 + $ES4 + $ES5;
        if ($ES1 == 0) {$ES1_porcentaje = 0;} else {$ES1_porcentaje = round((($ES1 * 100) / $ES), 1, PHP_ROUND_HALF_UP);}
        if ($ES2 == 0) {$ES2_porcentaje = 0;} else {$ES2_porcentaje = round((($ES2 * 100) / $ES), 1, PHP_ROUND_HALF_UP);}
        if ($ES3 == 0) {$ES3_porcentaje = 0;} else {$ES3_porcentaje = round((($ES3 * 100) / $ES), 1, PHP_ROUND_HALF_UP);}
        if ($ES4 == 0) {$ES4_porcentaje = 0;} else {$ES4_porcentaje = round((($ES4 * 100) / $ES), 1, PHP_ROUND_HALF_UP);}
        if ($ES5 == 0) {$ES5_porcentaje = 0;} else {$ES5_porcentaje = round((($ES5 * 100) / $ES), 1, PHP_ROUND_HALF_UP);}
        $ESI1a = Consolidados3::ESI1a(conexion::obtener_conexion());
        $ESI1b = Consolidados3::ESI1b(conexion::obtener_conexion());
        $ESI1c = Consolidados3::ESI1c(conexion::obtener_conexion());
        $ESI1d = Consolidados3::ESI1d(conexion::obtener_conexion());
        $ESI1 = $ESI1a + $ESI1b + $ESI1c + $ESI1d;
        if ($ESI1a == 0) {$ESI1a_porcentaje = 0;} else {$ESI1a_porcentaje = round((($ESI1a * 100) / $ESI1), 1, PHP_ROUND_HALF_UP);}
        if ($ESI1b == 0) {$ESI1b_porcentaje = 0;} else {$ESI1b_porcentaje = round((($ESI1b * 100) / $ESI1), 1, PHP_ROUND_HALF_UP);}
        if ($ESI1c == 0) {$ESI1c_porcentaje = 0;} else {$ESI1c_porcentaje = round((($ESI1c * 100) / $ESI1), 1, PHP_ROUND_HALF_UP);}
        if ($ESI1d == 0) {$ESI1d_porcentaje = 0;} else {$ESI1d_porcentaje = round((($ESI1d * 100) / $ESI1), 1, PHP_ROUND_HALF_UP);}
        $ESI2a = Consolidados3::ESI2a(conexion::obtener_conexion());
        $ESI2b = Consolidados3::ESI2b(conexion::obtener_conexion());
        $ESI2c = Consolidados3::ESI2c(conexion::obtener_conexion());
        $ESI2d = Consolidados3::ESI2d(conexion::obtener_conexion());
        $ESI2 = $ESI2a + $ESI2b + $ESI2c + $ESI2d;
        if ($ESI2a == 0) {$ESI2a_porcentaje = 0;} else {$ESI2a_porcentaje = round((($ESI2a * 100) / $ESI2), 1, PHP_ROUND_HALF_UP);}
        if ($ESI2b == 0) {$ESI2b_porcentaje = 0;} else {$ESI2b_porcentaje = round((($ESI2b * 100) / $ESI2), 1, PHP_ROUND_HALF_UP);}
        if ($ESI2c == 0) {$ESI2c_porcentaje = 0;} else {$ESI2c_porcentaje = round((($ESI2c * 100) / $ESI2), 1, PHP_ROUND_HALF_UP);}
        if ($ESI2d == 0) {$ESI2d_porcentaje = 0;} else {$ESI2d_porcentaje = round((($ESI2d * 100) / $ESI2), 1, PHP_ROUND_HALF_UP);}
        $ESI3a = Consolidados3::ESI3a(conexion::obtener_conexion());
        $ESI3b = Consolidados3::ESI3b(conexion::obtener_conexion());
        $ESI3c = Consolidados3::ESI3c(conexion::obtener_conexion());
        $ESI3d = Consolidados3::ESI3d(conexion::obtener_conexion());
        $ESI3 = $ESI3a + $ESI3b + $ESI3c + $ESI3d;
        if ($ESI3a == 0) {$ESI3a_porcentaje = 0;} else {$ESI3a_porcentaje = round((($ESI3a * 100) / $ESI3), 1, PHP_ROUND_HALF_UP);}
        if ($ESI3b == 0) {$ESI3b_porcentaje = 0;} else {$ESI3b_porcentaje = round((($ESI3b * 100) / $ESI3), 1, PHP_ROUND_HALF_UP);}
        if ($ESI3c == 0) {$ESI3c_porcentaje = 0;} else {$ESI3c_porcentaje = round((($ESI3c * 100) / $ESI3), 1, PHP_ROUND_HALF_UP);}
        if ($ESI3d == 0) {$ESI3d_porcentaje = 0;} else {$ESI3d_porcentaje = round((($ESI3d * 100) / $ESI3), 1, PHP_ROUND_HALF_UP);}
        $ESI4a = Consolidados3::ESI4a(conexion::obtener_conexion());
        $ESI4b = Consolidados3::ESI4b(conexion::obtener_conexion());
        $ESI4c = Consolidados3::ESI4c(conexion::obtener_conexion());
        $ESI4d = Consolidados3::ESI4d(conexion::obtener_conexion());
        $ESI4 = $ESI4a + $ESI4b + $ESI4c + $ESI4d;
        if ($ESI4a == 0) {$ESI4a_porcentaje = 0;} else {$ESI4a_porcentaje = round((($ESI4a * 100) / $ESI4), 1, PHP_ROUND_HALF_UP);}
        if ($ESI4b == 0) {$ESI4b_porcentaje = 0;} else {$ESI4b_porcentaje = round((($ESI4b * 100) / $ESI4), 1, PHP_ROUND_HALF_UP);}
        if ($ESI4c == 0) {$ESI4c_porcentaje = 0;} else {$ESI4c_porcentaje = round((($ESI4c * 100) / $ESI4), 1, PHP_ROUND_HALF_UP);}
        if ($ESI4d == 0) {$ESI4d_porcentaje = 0;} else {$ESI4d_porcentaje = round((($ESI4d * 100) / $ESI4), 1, PHP_ROUND_HALF_UP);}
        $ESI5a = Consolidados3::ESI5a(conexion::obtener_conexion());
        $ESI5b = Consolidados3::ESI5b(conexion::obtener_conexion());
        $ESI5c = Consolidados3::ESI5c(conexion::obtener_conexion());
        $ESI5d = Consolidados3::ESI5d(conexion::obtener_conexion());
        $ESI5 = $ESI5a + $ESI5b + $ESI5c + $ESI5d;
        if ($ESI5a == 0) {$ESI5a_porcentaje = 0;} else {$ESI5a_porcentaje = round((($ESI5a * 100) / $ESI5), 1, PHP_ROUND_HALF_UP);}
        if ($ESI5b == 0) {$ESI5b_porcentaje = 0;} else {$ESI5b_porcentaje = round((($ESI5b * 100) / $ESI5), 1, PHP_ROUND_HALF_UP);}
        if ($ESI5c == 0) {$ESI5c_porcentaje = 0;} else {$ESI5c_porcentaje = round((($ESI5c * 100) / $ESI5), 1, PHP_ROUND_HALF_UP);}
        if ($ESI5d == 0) {$ESI5d_porcentaje = 0;} else {$ESI5d_porcentaje = round((($ESI5d * 100) / $ESI5), 1, PHP_ROUND_HALF_UP);}
        $ESI6a = Consolidados3::ESI6a(conexion::obtener_conexion());
        $ESI6b = Consolidados3::ESI6b(conexion::obtener_conexion());
        $ESI6c = Consolidados3::ESI6c(conexion::obtener_conexion());
        $ESI6d = Consolidados3::ESI6d(conexion::obtener_conexion());
        $ESI6 = $ESI6a + $ESI6b + $ESI6c + $ESI6d;
        if ($ESI6a == 0) {$ESI6a_porcentaje = 0;} else {$ESI6a_porcentaje = round((($ESI6a * 100) / $ESI6), 1, PHP_ROUND_HALF_UP);}
        if ($ESI6b == 0) {$ESI6b_porcentaje = 0;} else {$ESI6b_porcentaje = round((($ESI6b * 100) / $ESI6), 1, PHP_ROUND_HALF_UP);}
        if ($ESI6c == 0) {$ESI6c_porcentaje = 0;} else {$ESI6c_porcentaje = round((($ESI6c * 100) / $ESI6), 1, PHP_ROUND_HALF_UP);}
        if ($ESI6d == 0) {$ESI6d_porcentaje = 0;} else {$ESI6d_porcentaje = round((($ESI6d * 100) / $ESI6), 1, PHP_ROUND_HALF_UP);}
        
        $ESI7a = Consolidados3::ESI7a(conexion::obtener_conexion());
        $ESI7b = Consolidados3::ESI7b(conexion::obtener_conexion());
        $ESI7c = Consolidados3::ESI7c(conexion::obtener_conexion());
        $ESI7d = Consolidados3::ESI7d(conexion::obtener_conexion());
        $ESI7 = $ESI7a + $ESI7b + $ESI7c + $ESI7d;
        if ($ESI7a == 0) {$ESI7a_porcentaje = 0;} else {$ESI7a_porcentaje = round((($ESI7a * 100) / $ESI7), 1, PHP_ROUND_HALF_UP);}
        if ($ESI7b == 0) {$ESI7b_porcentaje = 0;} else {$ESI7b_porcentaje = round((($ESI7b * 100) / $ESI7), 1, PHP_ROUND_HALF_UP);}
        if ($ESI7c == 0) {$ESI7c_porcentaje = 0;} else {$ESI7c_porcentaje = round((($ESI7c * 100) / $ESI7), 1, PHP_ROUND_HALF_UP);}
        if ($ESI7d == 0) {$ESI7d_porcentaje = 0;} else {$ESI7d_porcentaje = round((($ESI7d * 100) / $ESI7), 1, PHP_ROUND_HALF_UP);}
        $ESI8a = Consolidados3::ESI8a(conexion::obtener_conexion());
        $ESI8b = Consolidados3::ESI8b(conexion::obtener_conexion());
        $ESI8c = Consolidados3::ESI8c(conexion::obtener_conexion());
        $ESI8d = Consolidados3::ESI8d(conexion::obtener_conexion());
        $ESI8 = $ESI8a + $ESI8b + $ESI8c + $ESI8d;
        if ($ESI8a == 0) {$ESI8a_porcentaje = 0;} else {$ESI8a_porcentaje = round((($ESI8a * 100) / $ESI8), 1, PHP_ROUND_HALF_UP);}
        if ($ESI8b == 0) {$ESI8b_porcentaje = 0;} else {$ESI8b_porcentaje = round((($ESI8b * 100) / $ESI8), 1, PHP_ROUND_HALF_UP);}
        if ($ESI8c == 0) {$ESI8c_porcentaje = 0;} else {$ESI8c_porcentaje = round((($ESI8c * 100) / $ESI8), 1, PHP_ROUND_HALF_UP);}
        if ($ESI8d == 0) {$ESI8d_porcentaje = 0;} else {$ESI8d_porcentaje = round((($ESI8d * 100) / $ESI8), 1, PHP_ROUND_HALF_UP);}
        $ESI9a = Consolidados3::ESI9a(conexion::obtener_conexion());
        $ESI9b = Consolidados3::ESI9b(conexion::obtener_conexion());
        $ESI9c = Consolidados3::ESI9c(conexion::obtener_conexion());
        $ESI9d = Consolidados3::ESI9d(conexion::obtener_conexion());
        $ESI9 = $ESI9a + $ESI9b + $ESI9c + $ESI9d;
        if ($ESI9a == 0) {$ESI9a_porcentaje = 0;} else {$ESI9a_porcentaje = round((($ESI9a * 100) / $ESI9), 1, PHP_ROUND_HALF_UP);}
        if ($ESI9b == 0) {$ESI9b_porcentaje = 0;} else {$ESI9b_porcentaje = round((($ESI9b * 100) / $ESI9), 1, PHP_ROUND_HALF_UP);}
        if ($ESI9c == 0) {$ESI9c_porcentaje = 0;} else {$ESI9c_porcentaje = round((($ESI9c * 100) / $ESI9), 1, PHP_ROUND_HALF_UP);}
        if ($ESI9d == 0) {$ESI9d_porcentaje = 0;} else {$ESI9d_porcentaje = round((($ESI9d * 100) / $ESI9), 1, PHP_ROUND_HALF_UP);}
        $ESI10a = Consolidados3::ESI10a(conexion::obtener_conexion());
        $ESI10b = Consolidados3::ESI10b(conexion::obtener_conexion());
        $ESI10c = Consolidados3::ESI10c(conexion::obtener_conexion());
        $ESI10d = Consolidados3::ESI10d(conexion::obtener_conexion());
        $ESI10 = $ESI10a + $ESI10b + $ESI10c + $ESI10d;
        if ($ESI10a == 0) {$ESI10a_porcentaje = 0;} else {$ESI10a_porcentaje = round((($ESI10a * 100) / $ESI10), 1, PHP_ROUND_HALF_UP);}
        if ($ESI10b == 0) {$ESI10b_porcentaje = 0;} else {$ESI10b_porcentaje = round((($ESI10b * 100) / $ESI10), 1, PHP_ROUND_HALF_UP);}
        if ($ESI10c == 0) {$ESI10c_porcentaje = 0;} else {$ESI10c_porcentaje = round((($ESI10c * 100) / $ESI10), 1, PHP_ROUND_HALF_UP);}
        if ($ESI10d == 0) {$ESI10d_porcentaje = 0;} else {$ESI10d_porcentaje = round((($ESI10d * 100) / $ESI10), 1, PHP_ROUND_HALF_UP);}
        $ESI11a = Consolidados3::ESI11a(conexion::obtener_conexion());
        $ESI11b = Consolidados3::ESI11b(conexion::obtener_conexion());
        $ESI11c = Consolidados3::ESI11c(conexion::obtener_conexion());
        $ESI11d = Consolidados3::ESI11d(conexion::obtener_conexion());
        $ESI11 = $ESI11a + $ESI11b + $ESI11c + $ESI11d;
        if ($ESI11a == 0) {$ESI11a_porcentaje = 0;} else {$ESI11a_porcentaje = round((($ESI11a * 100) / $ESI11), 1, PHP_ROUND_HALF_UP);}
        if ($ESI11b == 0) {$ESI11b_porcentaje = 0;} else {$ESI11b_porcentaje = round((($ESI11b * 100) / $ESI11), 1, PHP_ROUND_HALF_UP);}
        if ($ESI11c == 0) {$ESI11c_porcentaje = 0;} else {$ESI11c_porcentaje = round((($ESI11c * 100) / $ESI11), 1, PHP_ROUND_HALF_UP);}
        if ($ESI11d == 0) {$ESI11d_porcentaje = 0;} else {$ESI11d_porcentaje = round((($ESI11d * 100) / $ESI11), 1, PHP_ROUND_HALF_UP);}
        $ESI12a = Consolidados3::ESI12a(conexion::obtener_conexion());
        $ESI12b = Consolidados3::ESI12b(conexion::obtener_conexion());
        $ESI12c = Consolidados3::ESI12c(conexion::obtener_conexion());
        $ESI12d = Consolidados3::ESI12d(conexion::obtener_conexion());
        $ESI12 = $ESI12a + $ESI12b + $ESI12c + $ESI12d;
        if ($ESI12a == 0) {$ESI12a_porcentaje = 0;} else {$ESI12a_porcentaje = round((($ESI12a * 100) / $ESI12), 1, PHP_ROUND_HALF_UP);}
        if ($ESI12b == 0) {$ESI12b_porcentaje = 0;} else {$ESI12b_porcentaje = round((($ESI12b * 100) / $ESI12), 1, PHP_ROUND_HALF_UP);}
        if ($ESI12c == 0) {$ESI12c_porcentaje = 0;} else {$ESI12c_porcentaje = round((($ESI12c * 100) / $ESI12), 1, PHP_ROUND_HALF_UP);}
        if ($ESI12d == 0) {$ESI12d_porcentaje = 0;} else {$ESI12d_porcentaje = round((($ESI12d * 100) / $ESI12), 1, PHP_ROUND_HALF_UP);}
        $ESI13a = Consolidados3::ESI13a(conexion::obtener_conexion());
        $ESI13b = Consolidados3::ESI13b(conexion::obtener_conexion());
        $ESI13c = Consolidados3::ESI13c(conexion::obtener_conexion());
        $ESI13d = Consolidados3::ESI13d(conexion::obtener_conexion());
        $ESI13 = $ESI13a + $ESI13b + $ESI13c + $ESI13d;
        if ($ESI13a == 0) {$ESI13a_porcentaje = 0;} else {$ESI13a_porcentaje = round((($ESI13a * 100) / $ESI13), 1, PHP_ROUND_HALF_UP);}
        if ($ESI13b == 0) {$ESI13b_porcentaje = 0;} else {$ESI13b_porcentaje = round((($ESI13b * 100) / $ESI13), 1, PHP_ROUND_HALF_UP);}
        if ($ESI13c == 0) {$ESI13c_porcentaje = 0;} else {$ESI13c_porcentaje = round((($ESI13c * 100) / $ESI13), 1, PHP_ROUND_HALF_UP);}
        if ($ESI13d == 0) {$ESI13d_porcentaje = 0;} else {$ESI13d_porcentaje = round((($ESI13d * 100) / $ESI13), 1, PHP_ROUND_HALF_UP);}
        $ESI14a = Consolidados3::ESI14a(conexion::obtener_conexion());
        $ESI14b = Consolidados3::ESI14b(conexion::obtener_conexion());
        $ESI14c = Consolidados3::ESI14c(conexion::obtener_conexion());
        $ESI14d = Consolidados3::ESI14d(conexion::obtener_conexion());
        $ESI14 = $ESI14a + $ESI14b + $ESI14c + $ESI14d;
        if ($ESI14a == 0) {$ESI14a_porcentaje = 0;} else {$ESI14a_porcentaje = round((($ESI14a * 100) / $ESI14), 1, PHP_ROUND_HALF_UP);}
        if ($ESI14b == 0) {$ESI14b_porcentaje = 0;} else {$ESI14b_porcentaje = round((($ESI14b * 100) / $ESI14), 1, PHP_ROUND_HALF_UP);}
        if ($ESI14c == 0) {$ESI14c_porcentaje = 0;} else {$ESI14c_porcentaje = round((($ESI14c * 100) / $ESI14), 1, PHP_ROUND_HALF_UP);}
        if ($ESI14d == 0) {$ESI14d_porcentaje = 0;} else {$ESI14d_porcentaje = round((($ESI14d * 100) / $ESI14), 1, PHP_ROUND_HALF_UP);}
        $ESI15a = Consolidados3::ESI15a(conexion::obtener_conexion());
        $ESI15b = Consolidados3::ESI15b(conexion::obtener_conexion());
        $ESI15c = Consolidados3::ESI15c(conexion::obtener_conexion());
        $ESI15d = Consolidados3::ESI15d(conexion::obtener_conexion());
        $ESI15 = $ESI15a + $ESI15b + $ESI15c + $ESI15d;
        if ($ESI15a == 0) {$ESI15a_porcentaje = 0;} else {$ESI15a_porcentaje = round((($ESI15a * 100) / $ESI15), 1, PHP_ROUND_HALF_UP);}
        if ($ESI15b == 0) {$ESI15b_porcentaje = 0;} else {$ESI15b_porcentaje = round((($ESI15b * 100) / $ESI15), 1, PHP_ROUND_HALF_UP);}
        if ($ESI15c == 0) {$ESI15c_porcentaje = 0;} else {$ESI15c_porcentaje = round((($ESI15c * 100) / $ESI15), 1, PHP_ROUND_HALF_UP);}
        if ($ESI15d == 0) {$ESI15d_porcentaje = 0;} else {$ESI15d_porcentaje = round((($ESI15d * 100) / $ESI15), 1, PHP_ROUND_HALF_UP);}
        $ESI16a = Consolidados3::ESI16a(conexion::obtener_conexion());
        $ESI16b = Consolidados3::ESI16b(conexion::obtener_conexion());
        $ESI16c = Consolidados3::ESI16c(conexion::obtener_conexion());
        $ESI16d = Consolidados3::ESI16d(conexion::obtener_conexion());
        $ESI16 = $ESI16a + $ESI16b + $ESI16c + $ESI16d;
        if ($ESI16a == 0) {$ESI16a_porcentaje = 0;} else {$ESI16a_porcentaje = round((($ESI16a * 100) / $ESI16), 1, PHP_ROUND_HALF_UP);}
        if ($ESI16b == 0) {$ESI16b_porcentaje = 0;} else {$ESI16b_porcentaje = round((($ESI16b * 100) / $ESI16), 1, PHP_ROUND_HALF_UP);}
        if ($ESI16c == 0) {$ESI16c_porcentaje = 0;} else {$ESI16c_porcentaje = round((($ESI16c * 100) / $ESI16), 1, PHP_ROUND_HALF_UP);}
        if ($ESI16d == 0) {$ESI16d_porcentaje = 0;} else {$ESI16d_porcentaje = round((($ESI16d * 100) / $ESI16), 1, PHP_ROUND_HALF_UP);}
        $ESI17a = Consolidados3::ESI17a(conexion::obtener_conexion());
        $ESI17b = Consolidados3::ESI17b(conexion::obtener_conexion());
        $ESI17c = Consolidados3::ESI17c(conexion::obtener_conexion());
        $ESI17d = Consolidados3::ESI17d(conexion::obtener_conexion());
        $ESI17 = $ESI17a + $ESI17b + $ESI17c + $ESI17d;
        if ($ESI17a == 0) {$ESI17a_porcentaje = 0;} else {$ESI17a_porcentaje = round((($ESI17a * 100) / $ESI17), 1, PHP_ROUND_HALF_UP);}
        if ($ESI17b == 0) {$ESI17b_porcentaje = 0;} else {$ESI17b_porcentaje = round((($ESI17b * 100) / $ESI17), 1, PHP_ROUND_HALF_UP);}
        if ($ESI17c == 0) {$ESI17c_porcentaje = 0;} else {$ESI17c_porcentaje = round((($ESI17c * 100) / $ESI17), 1, PHP_ROUND_HALF_UP);}
        if ($ESI17d == 0) {$ESI17d_porcentaje = 0;} else {$ESI17d_porcentaje = round((($ESI17d * 100) / $ESI17), 1, PHP_ROUND_HALF_UP);}
        $ESI18a = Consolidados3::ESI18a(conexion::obtener_conexion());
        $ESI18b = Consolidados3::ESI18b(conexion::obtener_conexion());
        $ESI18c = Consolidados3::ESI18c(conexion::obtener_conexion());
        $ESI18d = Consolidados3::ESI18d(conexion::obtener_conexion());
        $ESI18 = $ESI18a + $ESI18b + $ESI18c + $ESI18d;
        if ($ESI18a == 0) {$ESI18a_porcentaje = 0;} else {$ESI18a_porcentaje = round((($ESI18a * 100) / $ESI18), 1, PHP_ROUND_HALF_UP);}
        if ($ESI18b == 0) {$ESI18b_porcentaje = 0;} else {$ESI18b_porcentaje = round((($ESI18b * 100) / $ESI18), 1, PHP_ROUND_HALF_UP);}
        if ($ESI18c == 0) {$ESI18c_porcentaje = 0;} else {$ESI18c_porcentaje = round((($ESI18c * 100) / $ESI18), 1, PHP_ROUND_HALF_UP);}
        if ($ESI18d == 0) {$ESI18d_porcentaje = 0;} else {$ESI18d_porcentaje = round((($ESI18d * 100) / $ESI18), 1, PHP_ROUND_HALF_UP);}
        $ESI19a = Consolidados3::ESI19a(conexion::obtener_conexion());
        $ESI19b = Consolidados3::ESI19b(conexion::obtener_conexion());
        $ESI19c = Consolidados3::ESI19c(conexion::obtener_conexion());
        $ESI19d = Consolidados3::ESI19d(conexion::obtener_conexion());
        $ESI19 = $ESI19a + $ESI19b + $ESI19c + $ESI19d;
        if ($ESI19a == 0) {$ESI19a_porcentaje = 0;} else {$ESI19a_porcentaje = round((($ESI19a * 100) / $ESI19), 1, PHP_ROUND_HALF_UP);}
        if ($ESI19b == 0) {$ESI19b_porcentaje = 0;} else {$ESI19b_porcentaje = round((($ESI19b * 100) / $ESI19), 1, PHP_ROUND_HALF_UP);}
        if ($ESI19c == 0) {$ESI19c_porcentaje = 0;} else {$ESI19c_porcentaje = round((($ESI19c * 100) / $ESI19), 1, PHP_ROUND_HALF_UP);}
        if ($ESI19d == 0) {$ESI19d_porcentaje = 0;} else {$ESI19d_porcentaje = round((($ESI19d * 100) / $ESI19), 1, PHP_ROUND_HALF_UP);}
        $ESI20a = Consolidados3::ESI20a(conexion::obtener_conexion());
        $ESI20b = Consolidados3::ESI20b(conexion::obtener_conexion());
        $ESI20c = Consolidados3::ESI20c(conexion::obtener_conexion());
        $ESI20d = Consolidados3::ESI20d(conexion::obtener_conexion());
        $ESI20 = $ESI20a + $ESI20b + $ESI20c + $ESI20d;
        if ($ESI20a == 0) {$ESI20a_porcentaje = 0;} else {$ESI20a_porcentaje = round((($ESI20a * 100) / $ESI20), 1, PHP_ROUND_HALF_UP);}
        if ($ESI20b == 0) {$ESI20b_porcentaje = 0;} else {$ESI20b_porcentaje = round((($ESI20b * 100) / $ESI20), 1, PHP_ROUND_HALF_UP);}
        if ($ESI20c == 0) {$ESI20c_porcentaje = 0;} else {$ESI20c_porcentaje = round((($ESI20c * 100) / $ESI20), 1, PHP_ROUND_HALF_UP);}
        if ($ESI20d == 0) {$ESI20d_porcentaje = 0;} else {$ESI20d_porcentaje = round((($ESI20d * 100) / $ESI20), 1, PHP_ROUND_HALF_UP);}
        $ESI21a = Consolidados3::ESI21a(conexion::obtener_conexion());
        $ESI21b = Consolidados3::ESI21b(conexion::obtener_conexion());
        $ESI21c = Consolidados3::ESI21c(conexion::obtener_conexion());
        $ESI21d = Consolidados3::ESI21d(conexion::obtener_conexion());
        $ESI21 = $ESI21a + $ESI21b + $ESI21c + $ESI21d;
        if ($ESI21a == 0) {$ESI21a_porcentaje = 0;} else {$ESI21a_porcentaje = round((($ESI21a * 100) / $ESI21), 1, PHP_ROUND_HALF_UP);}
        if ($ESI21b == 0) {$ESI21b_porcentaje = 0;} else {$ESI21b_porcentaje = round((($ESI21b * 100) / $ESI21), 1, PHP_ROUND_HALF_UP);}
        if ($ESI21c == 0) {$ESI21c_porcentaje = 0;} else {$ESI21c_porcentaje = round((($ESI21c * 100) / $ESI21), 1, PHP_ROUND_HALF_UP);}
        if ($ESI21d == 0) {$ESI21d_porcentaje = 0;} else {$ESI21d_porcentaje = round((($ESI21d * 100) / $ESI21), 1, PHP_ROUND_HALF_UP);}
        $ESI22a = Consolidados3::ESI22a(conexion::obtener_conexion());
        $ESI22b = Consolidados3::ESI22b(conexion::obtener_conexion());
        $ESI22c = Consolidados3::ESI22c(conexion::obtener_conexion());
        $ESI22d = Consolidados3::ESI22d(conexion::obtener_conexion());
        $ESI22 = $ESI22a + $ESI22b + $ESI22c + $ESI22d;
        if ($ESI22a == 0) {$ESI22a_porcentaje = 0;} else {$ESI22a_porcentaje = round((($ESI22a * 100) / $ESI22), 1, PHP_ROUND_HALF_UP);}
        if ($ESI22b == 0) {$ESI22b_porcentaje = 0;} else {$ESI22b_porcentaje = round((($ESI22b * 100) / $ESI22), 1, PHP_ROUND_HALF_UP);}
        if ($ESI22c == 0) {$ESI22c_porcentaje = 0;} else {$ESI22c_porcentaje = round((($ESI22c * 100) / $ESI22), 1, PHP_ROUND_HALF_UP);}
        if ($ESI22d == 0) {$ESI22d_porcentaje = 0;} else {$ESI22d_porcentaje = round((($ESI22d * 100) / $ESI22), 1, PHP_ROUND_HALF_UP);}
        $ESI23a = Consolidados3::ESI23a(conexion::obtener_conexion());
        $ESI23b = Consolidados3::ESI23b(conexion::obtener_conexion());
        $ESI23c = Consolidados3::ESI23c(conexion::obtener_conexion());
        $ESI23d = Consolidados3::ESI23d(conexion::obtener_conexion());
        $ESI23 = $ESI23a + $ESI23b + $ESI23c + $ESI23d;
        if ($ESI23a == 0) {$ESI23a_porcentaje = 0;} else {$ESI23a_porcentaje = round((($ESI23a * 100) / $ESI23), 1, PHP_ROUND_HALF_UP);}
        if ($ESI23b == 0) {$ESI23b_porcentaje = 0;} else {$ESI23b_porcentaje = round((($ESI23b * 100) / $ESI23), 1, PHP_ROUND_HALF_UP);}
        if ($ESI23c == 0) {$ESI23c_porcentaje = 0;} else {$ESI23c_porcentaje = round((($ESI23c * 100) / $ESI23), 1, PHP_ROUND_HALF_UP);}
        if ($ESI23d == 0) {$ESI23d_porcentaje = 0;} else {$ESI23d_porcentaje = round((($ESI23d * 100) / $ESI23), 1, PHP_ROUND_HALF_UP);}
        $ESI24a = Consolidados3::ESI24a(conexion::obtener_conexion());
        $ESI24b = Consolidados3::ESI24b(conexion::obtener_conexion());
        $ESI24c = Consolidados3::ESI24c(conexion::obtener_conexion());
        $ESI24d = Consolidados3::ESI24d(conexion::obtener_conexion());
        $ESI24 = $ESI24a + $ESI24b + $ESI24c + $ESI24d;
        if ($ESI24a == 0) {$ESI24a_porcentaje = 0;} else {$ESI24a_porcentaje = round((($ESI24a * 100) / $ESI24), 1, PHP_ROUND_HALF_UP);}
        if ($ESI24b == 0) {$ESI24b_porcentaje = 0;} else {$ESI24b_porcentaje = round((($ESI24b * 100) / $ESI24), 1, PHP_ROUND_HALF_UP);}
        if ($ESI24c == 0) {$ESI24c_porcentaje = 0;} else {$ESI24c_porcentaje = round((($ESI24c * 100) / $ESI24), 1, PHP_ROUND_HALF_UP);}
        if ($ESI24d == 0) {$ESI24d_porcentaje = 0;} else {$ESI24d_porcentaje = round((($ESI24d * 100) / $ESI24), 1, PHP_ROUND_HALF_UP);}
        $ESI25a = Consolidados3::ESI25a(conexion::obtener_conexion());
        $ESI25b = Consolidados3::ESI25b(conexion::obtener_conexion());
        $ESI25c = Consolidados3::ESI25c(conexion::obtener_conexion());
        $ESI25d = Consolidados3::ESI25d(conexion::obtener_conexion());
        $ESI25 = $ESI25a + $ESI25b + $ESI25c + $ESI25d;
        if ($ESI25a == 0) {$ESI25a_porcentaje = 0;} else {$ESI25a_porcentaje = round((($ESI25a * 100) / $ESI25), 1, PHP_ROUND_HALF_UP);}
        if ($ESI25b == 0) {$ESI25b_porcentaje = 0;} else {$ESI25b_porcentaje = round((($ESI25b * 100) / $ESI25), 1, PHP_ROUND_HALF_UP);}
        if ($ESI25c == 0) {$ESI25c_porcentaje = 0;} else {$ESI25c_porcentaje = round((($ESI25c * 100) / $ESI25), 1, PHP_ROUND_HALF_UP);}
        if ($ESI25d == 0) {$ESI25d_porcentaje = 0;} else {$ESI25d_porcentaje = round((($ESI25d * 100) / $ESI25), 1, PHP_ROUND_HALF_UP);}
        $ESI26a = Consolidados3::ESI26a(conexion::obtener_conexion());
        $ESI26b = Consolidados3::ESI26b(conexion::obtener_conexion());
        $ESI26c = Consolidados3::ESI26c(conexion::obtener_conexion());
        $ESI26d = Consolidados3::ESI26d(conexion::obtener_conexion());
        $ESI26 = $ESI26a + $ESI26b + $ESI26c + $ESI26d;
        if ($ESI26a == 0) {$ESI26a_porcentaje = 0;} else {$ESI26a_porcentaje = round((($ESI26a * 100) / $ESI26), 1, PHP_ROUND_HALF_UP);}
        if ($ESI26b == 0) {$ESI26b_porcentaje = 0;} else {$ESI26b_porcentaje = round((($ESI26b * 100) / $ESI26), 1, PHP_ROUND_HALF_UP);}
        if ($ESI26c == 0) {$ESI26c_porcentaje = 0;} else {$ESI26c_porcentaje = round((($ESI26c * 100) / $ESI26), 1, PHP_ROUND_HALF_UP);}
        if ($ESI26d == 0) {$ESI26d_porcentaje = 0;} else {$ESI26d_porcentaje = round((($ESI26d * 100) / $ESI26), 1, PHP_ROUND_HALF_UP);}
        $ESI27a = Consolidados3::ESI27a(conexion::obtener_conexion());
        $ESI27b = Consolidados3::ESI27b(conexion::obtener_conexion());
        $ESI27c = Consolidados3::ESI27c(conexion::obtener_conexion());
        $ESI27d = Consolidados3::ESI27d(conexion::obtener_conexion());
        $ESI27 = $ESI27a + $ESI27b + $ESI27c + $ESI27d;
        if ($ESI27a == 0) {$ESI27a_porcentaje = 0;} else {$ESI27a_porcentaje = round((($ESI27a * 100) / $ESI27), 1, PHP_ROUND_HALF_UP);}
        if ($ESI27b == 0) {$ESI27b_porcentaje = 0;} else {$ESI27b_porcentaje = round((($ESI27b * 100) / $ESI27), 1, PHP_ROUND_HALF_UP);}
        if ($ESI27c == 0) {$ESI27c_porcentaje = 0;} else {$ESI27c_porcentaje = round((($ESI27c * 100) / $ESI27), 1, PHP_ROUND_HALF_UP);}
        if ($ESI27d == 0) {$ESI27d_porcentaje = 0;} else {$ESI27d_porcentaje = round((($ESI27d * 100) / $ESI27), 1, PHP_ROUND_HALF_UP);}
        $ESI28a = Consolidados3::ESI28a(conexion::obtener_conexion());
        $ESI28b = Consolidados3::ESI28b(conexion::obtener_conexion());
        $ESI28c = Consolidados3::ESI28c(conexion::obtener_conexion());
        $ESI28d = Consolidados3::ESI28d(conexion::obtener_conexion());
        $ESI28 = $ESI28a + $ESI28b + $ESI28c + $ESI28d;
        if ($ESI28a == 0) {$ESI28a_porcentaje = 0;} else {$ESI28a_porcentaje = round((($ESI28a * 100) / $ESI28), 1, PHP_ROUND_HALF_UP);}
        if ($ESI28b == 0) {$ESI28b_porcentaje = 0;} else {$ESI28b_porcentaje = round((($ESI28b * 100) / $ESI28), 1, PHP_ROUND_HALF_UP);}
        if ($ESI28c == 0) {$ESI28c_porcentaje = 0;} else {$ESI28c_porcentaje = round((($ESI28c * 100) / $ESI28), 1, PHP_ROUND_HALF_UP);}
        if ($ESI28d == 0) {$ESI28d_porcentaje = 0;} else {$ESI28d_porcentaje = round((($ESI28d * 100) / $ESI28), 1, PHP_ROUND_HALF_UP);}
        $ESI29a = Consolidados3::ESI29a(conexion::obtener_conexion());
        $ESI29b = Consolidados3::ESI29b(conexion::obtener_conexion());
        $ESI29c = Consolidados3::ESI29c(conexion::obtener_conexion());
        $ESI29d = Consolidados3::ESI29d(conexion::obtener_conexion());
        $ESI29 = $ESI29a + $ESI29b + $ESI29c + $ESI29d;
        if ($ESI29a == 0) {$ESI29a_porcentaje = 0;} else {$ESI29a_porcentaje = round((($ESI29a * 100) / $ESI29), 1, PHP_ROUND_HALF_UP);}
        if ($ESI29b == 0) {$ESI29b_porcentaje = 0;} else {$ESI29b_porcentaje = round((($ESI29b * 100) / $ESI29), 1, PHP_ROUND_HALF_UP);}
        if ($ESI29c == 0) {$ESI29c_porcentaje = 0;} else {$ESI29c_porcentaje = round((($ESI29c * 100) / $ESI29), 1, PHP_ROUND_HALF_UP);}
        if ($ESI29d == 0) {$ESI29d_porcentaje = 0;} else {$ESI29d_porcentaje = round((($ESI29d * 100) / $ESI29), 1, PHP_ROUND_HALF_UP);}
        $ESI30a = Consolidados3::ESI30a(conexion::obtener_conexion());
        $ESI30b = Consolidados3::ESI30b(conexion::obtener_conexion());
        $ESI30c = Consolidados3::ESI30c(conexion::obtener_conexion());
        $ESI30d = Consolidados3::ESI30d(conexion::obtener_conexion());
        $ESI30 = $ESI30a + $ESI30b + $ESI30c + $ESI30d;
        if ($ESI30a == 0) {$ESI30a_porcentaje = 0;} else {$ESI30a_porcentaje = round((($ESI30a * 100) / $ESI30), 1, PHP_ROUND_HALF_UP);}
        if ($ESI30b == 0) {$ESI30b_porcentaje = 0;} else {$ESI30b_porcentaje = round((($ESI30b * 100) / $ESI30), 1, PHP_ROUND_HALF_UP);}
        if ($ESI30c == 0) {$ESI30c_porcentaje = 0;} else {$ESI30c_porcentaje = round((($ESI30c * 100) / $ESI30), 1, PHP_ROUND_HALF_UP);}
        if ($ESI30d == 0) {$ESI30d_porcentaje = 0;} else {$ESI30d_porcentaje = round((($ESI30d * 100) / $ESI30), 1, PHP_ROUND_HALF_UP);}
        $ESI31a = Consolidados3::ESI31a(conexion::obtener_conexion());
        $ESI31b = Consolidados3::ESI31b(conexion::obtener_conexion());
        $ESI31c = Consolidados3::ESI31c(conexion::obtener_conexion());
        $ESI31d = Consolidados3::ESI31d(conexion::obtener_conexion());
        $ESI31 = $ESI31a + $ESI31b + $ESI31c + $ESI31d;
        if ($ESI31a == 0) {$ESI31a_porcentaje = 0;} else {$ESI31a_porcentaje = round((($ESI31a * 100) / $ESI31), 1, PHP_ROUND_HALF_UP);}
        if ($ESI31b == 0) {$ESI31b_porcentaje = 0;} else {$ESI31b_porcentaje = round((($ESI31b * 100) / $ESI31), 1, PHP_ROUND_HALF_UP);}
        if ($ESI31c == 0) {$ESI31c_porcentaje = 0;} else {$ESI31c_porcentaje = round((($ESI31c * 100) / $ESI31), 1, PHP_ROUND_HALF_UP);}
        if ($ESI31d == 0) {$ESI31d_porcentaje = 0;} else {$ESI31d_porcentaje = round((($ESI31d * 100) / $ESI31), 1, PHP_ROUND_HALF_UP);}
      if ($ESI1a_porcentaje > 45) {$ESI1aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI1a_porcentaje > 30) {$ESI1aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI1b_porcentaje > 45) {$ESI1bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI1b_porcentaje > 30) {$ESI1bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI1c_porcentaje > 45) {$ESI1cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI1c_porcentaje > 30) {$ESI1cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI2a_porcentaje > 45) {$ESI2aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI2a_porcentaje > 30) {$ESI2aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI2b_porcentaje > 45) {$ESI2bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI2b_porcentaje > 30) {$ESI2bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI2c_porcentaje > 45) {$ESI2cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI2c_porcentaje > 30) {$ESI2cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI3a_porcentaje > 45) {$ESI3aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI3a_porcentaje > 30) {$ESI3aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI3b_porcentaje > 45) {$ESI3bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI3b_porcentaje > 30) {$ESI3bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI3c_porcentaje > 45) {$ESI3cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI3c_porcentaje > 30) {$ESI3cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI4a_porcentaje > 45) {$ESI4aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI4a_porcentaje > 30) {$ESI4aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI4b_porcentaje > 45) {$ESI4bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI4b_porcentaje > 30) {$ESI4bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI4c_porcentaje > 45) {$ESI4cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI4c_porcentaje > 30) {$ESI4cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI5a_porcentaje > 45) {$ESI5aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI5a_porcentaje > 30) {$ESI5aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI5b_porcentaje > 45) {$ESI5bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI5b_porcentaje > 30) {$ESI5bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI5c_porcentaje > 45) {$ESI5cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI5c_porcentaje > 30) {$ESI5cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI6a_porcentaje > 45) {$ESI6aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI6a_porcentaje > 30) {$ESI6aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI6b_porcentaje > 45) {$ESI6bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI6b_porcentaje > 30) {$ESI6bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI6c_porcentaje > 45) {$ESI6cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI6c_porcentaje > 30) {$ESI6cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; }
        if ($ESI7a_porcentaje > 45) {$ESI7aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI7a_porcentaje > 30) {$ESI7aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI7b_porcentaje > 45) {$ESI7bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI7b_porcentaje > 30) {$ESI7bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI7c_porcentaje > 45) {$ESI7cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI7c_porcentaje > 30) {$ESI7cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI8a_porcentaje > 45) {$ESI8aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI8a_porcentaje > 30) {$ESI8aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI8b_porcentaje > 45) {$ESI8bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI8b_porcentaje > 30) {$ESI8bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI8c_porcentaje > 45) {$ESI8cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI8c_porcentaje > 30) {$ESI8cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI9a_porcentaje > 45) {$ESI9aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI9a_porcentaje > 30) {$ESI9aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI9b_porcentaje > 45) {$ESI9bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI9b_porcentaje > 30) {$ESI9bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI9c_porcentaje > 45) {$ESI9cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI9c_porcentaje > 30) {$ESI9cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI10a_porcentaje > 45) {$ESI10aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI10a_porcentaje > 30) {$ESI10aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI10b_porcentaje > 45) {$ESI10bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI10b_porcentaje > 30) {$ESI10bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI10c_porcentaje > 45) {$ESI10cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI10c_porcentaje > 30) {$ESI10cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI11a_porcentaje > 45) {$ESI11aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI11a_porcentaje > 30) {$ESI11aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI11b_porcentaje > 45) {$ESI11bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI11b_porcentaje > 30) {$ESI11bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI11c_porcentaje > 45) {$ESI11cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI11c_porcentaje > 30) {$ESI11cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI12a_porcentaje > 45) {$ESI12aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI12a_porcentaje > 30) {$ESI12aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI12b_porcentaje > 45) {$ESI12bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI12b_porcentaje > 30) {$ESI12bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI12c_porcentaje > 45) {$ESI12cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI12c_porcentaje > 30) {$ESI12cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; }
        if ($ESI13a_porcentaje > 45) {$ESI13aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI13a_porcentaje > 30) {$ESI13aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI13b_porcentaje > 45) {$ESI13bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI13b_porcentaje > 30) {$ESI13bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI13c_porcentaje > 45) {$ESI13cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI13c_porcentaje > 30) {$ESI13cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI14a_porcentaje > 45) {$ESI14aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI14a_porcentaje > 30) {$ESI14aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI14b_porcentaje > 45) {$ESI14bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI14b_porcentaje > 30) {$ESI14bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI14c_porcentaje > 45) {$ESI14cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI14c_porcentaje > 30) {$ESI14cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI15a_porcentaje > 45) {$ESI15aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI15a_porcentaje > 30) {$ESI15aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI15b_porcentaje > 45) {$ESI15bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI15b_porcentaje > 30) {$ESI15bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI15c_porcentaje > 45) {$ESI15cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI15c_porcentaje > 30) {$ESI15cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI16a_porcentaje > 45) {$ESI16aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI16a_porcentaje > 30) {$ESI16aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI16b_porcentaje > 45) {$ESI16bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI16b_porcentaje > 30) {$ESI16bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI16c_porcentaje > 45) {$ESI16cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI16c_porcentaje > 30) {$ESI16cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI17a_porcentaje > 45) {$ESI17aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI17a_porcentaje > 30) {$ESI17aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI17b_porcentaje > 45) {$ESI17bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI17b_porcentaje > 30) {$ESI17bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI17c_porcentaje > 45) {$ESI17cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI17c_porcentaje > 30) {$ESI17cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI18a_porcentaje > 45) {$ESI18aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI18a_porcentaje > 30) {$ESI18aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI18b_porcentaje > 45) {$ESI18bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI18b_porcentaje > 30) {$ESI18bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI18c_porcentaje > 45) {$ESI18cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI18c_porcentaje > 30) {$ESI18cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI19a_porcentaje > 45) {$ESI19aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI19a_porcentaje > 30) {$ESI19aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI19b_porcentaje > 45) {$ESI19bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI19b_porcentaje > 30) {$ESI19bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI19c_porcentaje > 45) {$ESI19cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI19c_porcentaje > 30) {$ESI19cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI20a_porcentaje > 45) {$ESI20aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI20a_porcentaje > 30) {$ESI20aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI20b_porcentaje > 45) {$ESI20bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI20b_porcentaje > 30) {$ESI20bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI20c_porcentaje > 45) {$ESI20cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI20c_porcentaje > 30) {$ESI20cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; }
        if ($ESI21a_porcentaje > 45) {$ESI21aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI21a_porcentaje > 30) {$ESI21aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI21b_porcentaje > 45) {$ESI21bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI21b_porcentaje > 30) {$ESI21bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI21c_porcentaje > 45) {$ESI21cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI21c_porcentaje > 30) {$ESI21cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI22a_porcentaje > 45) {$ESI22aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI22a_porcentaje > 30) {$ESI22aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI22b_porcentaje > 45) {$ESI22bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI22b_porcentaje > 30) {$ESI22bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI22c_porcentaje > 45) {$ESI22cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI22c_porcentaje > 30) {$ESI22cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI23a_porcentaje > 45) {$ESI23aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI23a_porcentaje > 30) {$ESI23aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI23b_porcentaje > 45) {$ESI23bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI23b_porcentaje > 30) {$ESI23bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI23c_porcentaje > 45) {$ESI23cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI23c_porcentaje > 30) {$ESI23cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI24a_porcentaje > 45) {$ESI24aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI24a_porcentaje > 30) {$ESI24aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI24b_porcentaje > 45) {$ESI24bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI24b_porcentaje > 30) {$ESI24bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI24c_porcentaje > 45) {$ESI24cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI24c_porcentaje > 30) {$ESI24cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; }
        if ($ESI25a_porcentaje > 45) {$ESI25aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI25a_porcentaje > 30) {$ESI25aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI25b_porcentaje > 45) {$ESI25bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI25b_porcentaje > 30) {$ESI25bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI25c_porcentaje > 45) {$ESI25cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI25c_porcentaje > 30) {$ESI25cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; }
        if ($ESI26a_porcentaje > 45) {$ESI26aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI26a_porcentaje > 30) {$ESI26aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI26b_porcentaje > 45) {$ESI26bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI26b_porcentaje > 30) {$ESI26bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI26c_porcentaje > 45) {$ESI26cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI26c_porcentaje > 30) {$ESI26cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI27a_porcentaje > 45) {$ESI27aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI27a_porcentaje > 30) {$ESI27aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI27b_porcentaje > 45) {$ESI27bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI27b_porcentaje > 30) {$ESI27bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI27c_porcentaje > 45) {$ESI27cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI27c_porcentaje > 30) {$ESI27cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI28a_porcentaje > 45) {$ESI28aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI28a_porcentaje > 30) {$ESI28aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI28b_porcentaje > 45) {$ESI28bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI28b_porcentaje > 30) {$ESI28bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI28c_porcentaje > 45) {$ESI28cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI28c_porcentaje > 30) {$ESI28cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; }
        if ($ESI29a_porcentaje > 45) {$ESI29aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI29a_porcentaje > 30) {$ESI29aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI29b_porcentaje > 45) {$ESI29bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI29b_porcentaje > 30) {$ESI29bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI29c_porcentaje > 45) {$ESI29cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI29c_porcentaje > 30) {$ESI29cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI30a_porcentaje > 45) {$ESI30aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI30a_porcentaje > 30) {$ESI30aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI30b_porcentaje > 45) {$ESI30bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI30b_porcentaje > 30) {$ESI30bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI30c_porcentaje > 45) {$ESI30cC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI30c_porcentaje > 30) {$ESI30cC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI31a_porcentaje > 45) {$ESI31aC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI31a_porcentaje > 30) {$ESI31aC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
        if ($ESI31b_porcentaje > 45) {$ESI31bC  = 'style="color:rgb(157, 55, 21);font-family:verdanab"';} elseif ($ESI31b_porcentaje > 30) {$ESI31bC = 'style="color:rgb(230, 153, 0);font-family:verdanab"'; } 
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
<div class="container" style="min-height:50em;text-align:center;color:#333333"><br><br><br>
    <p style="font-family:verdanab;font-size:22px;color:#333333;text-align:center">CONSOLIDADO EVALUACIÓN DEL ESTRÉS</p>
    <div class="panel panel-body">
        <div class="row" align="center">
            <div class="col-md-8 col-md-offset-2" id="general"></div>
            <table class="table_consolidados" style="width:100%">
                <tr>
                    <th>Grupo Ocupacional</th>
                    <th>Sin Riesgo</th>
                    <th>Riesgo Bajo</th>
                    <th>Riesgo Medio</th>
                    <th>Riesgo Alto</th>
                    <th>Riesgo muy Alto</th>
                    <th>TOTAL EVALUADOS</th>
                </tr>
                <tr style="border-top:1px solid #333333">
                    <td id="td" style="font-family:verdanab;text-align:center">Jefaturas y profesionales</td>
                    <td id="td" <?php echo $ESJP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESJP1_porcentaje . '% (' . $ESJP1 . ')' ?></td>
                    <td id="td" <?php echo $ESJP2c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESJP2_porcentaje . '% (' . $ESJP2 . ')' ?></td>
                    <td id="td" <?php echo $ESJP3c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESJP3_porcentaje . '% (' . $ESJP3 . ')' ?></td>
                    <td id="td" <?php echo $ESJP4c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESJP4_porcentaje . '% (' . $ESJP4 . ')' ?></td>
                    <td id="td" <?php echo $ESJP5c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESJP5_porcentaje . '% (' . $ESJP5 . ')' ?></td>
                    <td id="td" style="font-family:verdanab;font-size:16px;color:#678e98"><span class="subt2">TOTAL EVALUADOS: </span><?php echo $ESJP ?></td>
                </tr>   
                <tr>
                    <td id="td" style="font-family:verdanab;text-align:center">Auxiliares y operativos</td>
                    <td id="td" <?php echo $ESAO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESAO1_porcentaje . '% (' . $ESAO1 . ')' ?></td>
                    <td id="td" <?php echo $ESAO2c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESAO2_porcentaje . '% (' . $ESAO2 . ')' ?></td>
                    <td id="td" <?php echo $ESAO3c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESAO3_porcentaje . '% (' . $ESAO3 . ')' ?></td>
                    <td id="td" <?php echo $ESAO4c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESAO4_porcentaje . '% (' . $ESAO4 . ')' ?></td>
                    <td id="td" <?php echo $ESAO5c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESAO5_porcentaje . '% (' . $ESAO5 . ')' ?></td>
                    <td id="td" style="font-family:verdanab;font-size:16px;color:#678e98"><span class="subt2">TOTAL EVALUADOS: </span><?php echo $ESAO ?></td>
                </tr>
            </table>
        </div>

    <!--<div class="row" id="registro" align="center" style="min-height:10em">
        <div id="ES"></div>
        <form>    
            <p id="analisis8v" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1.9em;color:#000000"></p>
            <button class="task-editar" id="btnanalisis8" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
            <textarea class="note" id="analisis8" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1.8em;color:#000000" onKeyDown="valida_longitud8()" placeholder="..."></textarea><br>
            <p id="conteo8" align="right">&nbsp... <span id="contador8" style="font-family:verdanab;font-size:12px"></span></p>
            <input id="botonIA8" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
        </form>
    </div>-->
    <div class="row" align="center"><br><br>
        <div class="col-md-8 col-md-offset-2" id="ocupacionales"></div>
        <table class="table_consolidados" style="width:100%">
            <tr>
                <th>Grupo Ocupacional</th>
                <th>Sin Riesgo</th>
                <th>Riesgo Bajo</th>
                <th>Riesgo Medio</th>
                <th>Riesgo Alto</th>
                <th>Riesgo muy Alto</th>
            </tr>
            <tr style="border-top:1px solid #333333">
                <td id="td" style="font-family:verdanab;text-align:center">Jefaturas</td>
                <td id="td" <?php echo $ESTJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESTJ1_porcentaje . '% (' . $ESTJ1 . ')' ?></td>
                <td id="td" <?php echo $ESTJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ESTJ2_porcentaje . '% (' . $ESTJ2 . ')' ?></td>
                <td id="td" <?php echo $ESTJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ESTJ3_porcentaje . '% (' . $ESTJ3 . ')' ?></td>
                <td id="td" <?php echo $ESTJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ESTJ4_porcentaje . '% (' . $ESTJ4 . ')' ?></td>
                <td id="td" <?php echo $ESTJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ESTJ5_porcentaje . '% (' . $ESTJ5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:center">Profesionales</td>
                <td id="td" <?php echo $ESTP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESTP1_porcentaje . '% (' . $ESTP1 . ')' ?></td>
                <td id="td" <?php echo $ESTP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ESTP2_porcentaje . '% (' . $ESTP2 . ')' ?></td>
                <td id="td" <?php echo $ESTP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ESTP3_porcentaje . '% (' . $ESTP3 . ')' ?></td>
                <td id="td" <?php echo $ESTP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ESTP4_porcentaje . '% (' . $ESTP4 . ')' ?></td>
                <td id="td" <?php echo $ESTP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ESTP5_porcentaje . '% (' . $ESTP5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:center">Auxiliares</td>
                <td id="td" <?php echo $ESTA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESTA1_porcentaje . '% (' . $ESTA1 . ')' ?></td>
                <td id="td" <?php echo $ESTA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ESTA2_porcentaje . '% (' . $ESTA2 . ')' ?></td>
                <td id="td" <?php echo $ESTA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ESTA3_porcentaje . '% (' . $ESTA3 . ')' ?></td>
                <td id="td" <?php echo $ESTA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ESTA4_porcentaje . '% (' . $ESTA4 . ')' ?></td>
                <td id="td" <?php echo $ESTA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ESTA5_porcentaje . '% (' . $ESTA5 . ')' ?></td>
            </tr>
            <tr>
                <td id="td" style="font-family:verdanab;text-align:center">Operativo</td>
                <td id="td" <?php echo $ESTO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ESTO1_porcentaje . '% (' . $ESTO1 . ')' ?></td>
                <td id="td" <?php echo $ESTO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ESTO2_porcentaje . '% (' . $ESTO2 . ')' ?></td>
                <td id="td" <?php echo $ESTO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ESTO3_porcentaje . '% (' . $ESTO3 . ')' ?></td>
                <td id="td" <?php echo $ESTO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ESTO4_porcentaje . '% (' . $ESTO4 . ')' ?></td>
                <td id="td" <?php echo $ESTO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ESTO5_porcentaje . '% (' . $ESTO5 . ')' ?></td>
            </tr>            
        </table>
    </div>
     <div class="row" align="center"><br><br>
        <p style="font-size:19px;font-family:verdana">SÍNTOMAS Y GRUPOS OCUPACIONALES</p>
        <table class="table_consolidados" style="width:100%">
            <tr>
                <th>Síntomas</th>
                <th>Grupo Ocupacional</th>
                <th>Sin Riesgo</th>
                <th>Riesgo Bajo</th>
                <th>Riesgo Medio</th>
                <th>Riesgo Alto</th>
                <th>Riesgo muy Alto</th>
            </tr>
             <tr style="border-top:1px solid #333333">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Síntomas: </span>Fisiológicos</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $SFJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $SFJ1_porcentaje . '% (' . $SFJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $SFJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $SFJ2_porcentaje . '% (' . $SFJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $SFJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $SFJ3_porcentaje . '% (' . $SFJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $SFJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $SFJ4_porcentaje . '% (' . $SFJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $SFJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $SFJ5_porcentaje . '% (' . $SFJ5 . ')' ?></td>
            </tr>  
             <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $SFP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $SFP1_porcentaje . '% (' . $SFP1 . ')' ?></td>
                <td id="td" <?php echo $SFP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $SFP2_porcentaje . '% (' . $SFP2 . ')' ?></td>
                <td id="td" <?php echo $SFP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $SFP3_porcentaje . '% (' . $SFP3 . ')' ?></td>
                <td id="td" <?php echo $SFP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $SFP4_porcentaje . '% (' . $SFP4 . ')' ?></td>
                <td id="td" <?php echo $SFP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $SFP5_porcentaje . '% (' . $SFP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $SFA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $SFA1_porcentaje . '% (' . $SFA1 . ')' ?></td>
                <td id="td" <?php echo $SFA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $SFA2_porcentaje . '% (' . $SFA2 . ')' ?></td>
                <td id="td" <?php echo $SFA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $SFA3_porcentaje . '% (' . $SFA3 . ')' ?></td>
                <td id="td" <?php echo $SFA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $SFA4_porcentaje . '% (' . $SFA4 . ')' ?></td>
                <td id="td" <?php echo $SFA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $SFA5_porcentaje . '% (' . $SFA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $SFO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $SFO1_porcentaje . '% (' . $SFO1 . ')' ?></td>
                <td id="td" <?php echo $SFO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $SFO2_porcentaje . '% (' . $SFO2 . ')' ?></td>
                <td id="td" <?php echo $SFO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $SFO3_porcentaje . '% (' . $SFO3 . ')' ?></td>
                <td id="td" <?php echo $SFO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $SFO4_porcentaje . '% (' . $SFO4 . ')' ?></td>
                <td id="td" <?php echo $SFO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $SFO5_porcentaje . '% (' . $SFO5 . ')' ?></td>
            </tr> 
             <tr style="border-top:1px solid #333333!important">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Síntomas: </span>De Comportamiento Social</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $CSJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CSJ1_porcentaje . '% (' . $CSJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $CSJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CSJ2_porcentaje . '% (' . $CSJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $CSJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CSJ3_porcentaje . '% (' . $CSJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $CSJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CSJ4_porcentaje . '% (' . $CSJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $CSJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CSJ5_porcentaje . '% (' . $CSJ5 . ')' ?></td>
            </tr>  
             <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $CSP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CSP1_porcentaje . '% (' . $CSP1 . ')' ?></td>
                <td id="td" <?php echo $CSP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CSP2_porcentaje . '% (' . $CSP2 . ')' ?></td>
                <td id="td" <?php echo $CSP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CSP3_porcentaje . '% (' . $CSP3 . ')' ?></td>
                <td id="td" <?php echo $CSP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CSP4_porcentaje . '% (' . $CSP4 . ')' ?></td>
                <td id="td" <?php echo $CSP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CSP5_porcentaje . '% (' . $CSP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $CSA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CSA1_porcentaje . '% (' . $CSA1 . ')' ?></td>
                <td id="td" <?php echo $CSA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CSA2_porcentaje . '% (' . $CSA2 . ')' ?></td>
                <td id="td" <?php echo $CSA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CSA3_porcentaje . '% (' . $CSA3 . ')' ?></td>
                <td id="td" <?php echo $CSA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CSA4_porcentaje . '% (' . $CSA4 . ')' ?></td>
                <td id="td" <?php echo $CSA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CSA5_porcentaje . '% (' . $CSA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $CSO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $CSO1_porcentaje . '% (' . $CSO1 . ')' ?></td>
                <td id="td" <?php echo $CSO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $CSO2_porcentaje . '% (' . $CSO2 . ')' ?></td>
                <td id="td" <?php echo $CSO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $CSO3_porcentaje . '% (' . $CSO3 . ')' ?></td>
                <td id="td" <?php echo $CSO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $CSO4_porcentaje . '% (' . $CSO4 . ')' ?></td>
                <td id="td" <?php echo $CSO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $CSO5_porcentaje . '% (' . $CSO5 . ')' ?></td>
            </tr> 
             <tr style="border-top:1px solid #333333!important">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Síntomas: </span>Intelectuales y laborales</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $ILJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ILJ1_porcentaje . '% (' . $ILJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $ILJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ILJ2_porcentaje . '% (' . $ILJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $ILJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ILJ3_porcentaje . '% (' . $ILJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $ILJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ILJ4_porcentaje . '% (' . $ILJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $ILJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ILJ5_porcentaje . '% (' . $ILJ5 . ')' ?></td>
            </tr>  
             <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $ILP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ILP1_porcentaje . '% (' . $ILP1 . ')' ?></td>
                <td id="td" <?php echo $ILP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ILP2_porcentaje . '% (' . $ILP2 . ')' ?></td>
                <td id="td" <?php echo $ILP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ILP3_porcentaje . '% (' . $ILP3 . ')' ?></td>
                <td id="td" <?php echo $ILP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ILP4_porcentaje . '% (' . $ILP4 . ')' ?></td>
                <td id="td" <?php echo $ILP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ILP5_porcentaje . '% (' . $ILP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $ILA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ILA1_porcentaje . '% (' . $ILA1 . ')' ?></td>
                <td id="td" <?php echo $ILA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ILA2_porcentaje . '% (' . $ILA2 . ')' ?></td>
                <td id="td" <?php echo $ILA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ILA3_porcentaje . '% (' . $ILA3 . ')' ?></td>
                <td id="td" <?php echo $ILA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ILA4_porcentaje . '% (' . $ILA4 . ')' ?></td>
                <td id="td" <?php echo $ILA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ILA5_porcentaje . '% (' . $ILA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $ILO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $ILO1_porcentaje . '% (' . $ILO1 . ')' ?></td>
                <td id="td" <?php echo $ILO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $ILO2_porcentaje . '% (' . $ILO2 . ')' ?></td>
                <td id="td" <?php echo $ILO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $ILO3_porcentaje . '% (' . $ILO3 . ')' ?></td>
                <td id="td" <?php echo $ILO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $ILO4_porcentaje . '% (' . $ILO4 . ')' ?></td>
                <td id="td" <?php echo $ILO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $ILO5_porcentaje . '% (' . $ILO5 . ')' ?></td>
            </tr> 
            <tr style="border-top:1px solid #333333!important">
                <td id="td" ROWSPAN=4 class="td" style="color:#678e98;font-family:verdanab;vertical-align:middle"><span class="subt2">Síntomas: </span>Psicoemocionales</td>
                <td id="td" class="td" style="font-family:verdanab;text-align:left">Jefaturas</td>
                <td id="td" class="td" <?php echo $PEJ1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PEJ1_porcentaje . '% (' . $PEJ1 . ')' ?></td>
                <td id="td" class="td" <?php echo $PEJ2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PEJ2_porcentaje . '% (' . $PEJ2 . ')' ?></td>
                <td id="td" class="td" <?php echo $PEJ3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PEJ3_porcentaje . '% (' . $PEJ3 . ')' ?></td>
                <td id="td" class="td" <?php echo $PEJ4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PEJ4_porcentaje . '% (' . $PEJ4 . ')' ?></td>
                <td id="td" class="td" <?php echo $PEJ5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PEJ5_porcentaje . '% (' . $PEJ5 . ')' ?></td>
            </tr>  
             <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Profesionales</td>
                <td id="td" <?php echo $PEP1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PEP1_porcentaje . '% (' . $PEP1 . ')' ?></td>
                <td id="td" <?php echo $PEP2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PEP2_porcentaje . '% (' . $PEP2 . ')' ?></td>
                <td id="td" <?php echo $PEP3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PEP3_porcentaje . '% (' . $PEP3 . ')' ?></td>
                <td id="td" <?php echo $PEP4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PEP4_porcentaje . '% (' . $PEP4 . ')' ?></td>
                <td id="td" <?php echo $PEP5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PEP5_porcentaje . '% (' . $PEP5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Auxiliares</td>
                <td id="td" <?php echo $PEA1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PEA1_porcentaje . '% (' . $PEA1 . ')' ?></td>
                <td id="td" <?php echo $PEA2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PEA2_porcentaje . '% (' . $PEA2 . ')' ?></td>
                <td id="td" <?php echo $PEA3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PEA3_porcentaje . '% (' . $PEA3 . ')' ?></td>
                <td id="td" <?php echo $PEA4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PEA4_porcentaje . '% (' . $PEA4 . ')' ?></td>
                <td id="td" <?php echo $PEA5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PEA5_porcentaje . '% (' . $PEA5 . ')' ?></td>
            </tr> 
            <tr>
                <td id="td" style="font-family:verdanab;text-align:left">Operarios</td>
                <td id="td" <?php echo $PEO1c ?>><span class="subt2">Sin Riesgo: </span><?php echo $PEO1_porcentaje . '% (' . $PEO1 . ')' ?></td>
                <td id="td" <?php echo $PEO2c ?>><span class="subt2">Riesgo Bajo: </span><?php echo $PEO2_porcentaje . '% (' . $PEO2 . ')' ?></td>
                <td id="td" <?php echo $PEO3c ?>><span class="subt2">Riesgo Medio: </span><?php echo $PEO3_porcentaje . '% (' . $PEO3 . ')' ?></td>
                <td id="td" <?php echo $PEO4c ?>><span class="subt2">Riesgo Alto: </span><?php echo $PEO4_porcentaje . '% (' . $PEO4 . ')' ?></td>
                <td id="td" <?php echo $PEO5c ?>><span class="subt2">Riesgo muy Alto: </span><?php echo $PEO5_porcentaje . '% (' . $PEO5 . ')' ?></td>
            </tr> 
        </table>
    </div>
    <!--<div class="row"><br><br>
        <p style="font-size:19px;font-family:verdana">PROMEDIO GENERAL</p>
        <table class="table_consolidados" style="width:100%">
        	<tr>
        	   <th ROWSPAN=2 id="tdimension">DIMENSIONES</th>  
        	   <th COLSPAN=2 id="tdimension">Jefaturas, profesionales <br>y técnicos</th>
        	   <th COLSPAN=2 id="tdimension">Asistentes y operarios</th>
        	</tr>
        	<tr>	
        	   <th id="tdimension">PT</th>
        	   <th id="tdimension">Nivel de Riesgo</th>
        	   <th id="tdimension">PT</TH>
        	   <th id="tdimension">Nivel de Riesgo</th>
        	</tr>
        	<tr style="background:#ebf9fa">	
        	    <td id="tdimension1" style="border-top:1px solid #678e98!important;font-family:verdanab">TOTAL GENERAL</td>
        	    <td <?php echo $EstresJPC ?>><?php echo $EstresJP ?></td>
        	    <td <?php echo $EstresJPC ?>><?php echo $EstresJPR ?></td>
        	    <td <?php echo $EstresAOC ?>><?php echo $EstresAO ?></td>
        	    <td <?php echo $EstresAOC ?>><?php echo $EstresAOR ?></td>
        	</tr>
        </table>
   </div>
    <div class="row" id="registro" align="center" style="min-height:10em"><br>
        <form>    
            <p id="analisis9v" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1.9em;color:#000000"></p>
            <button class="task-editar" id="btnanalisis9" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
            <textarea class="note" id="analisis9" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1.8em;color:#000000" onKeyDown="valida_longitud9()" placeholder="..."></textarea><br>
            <p id="conteo9" align="right">&nbsp... <span id="contador9" style="font-family:verdanab;font-size:12px"></span></p>
            <input id="botonIA9" type="submit" class="btn btn btn-default btn-block" style="width:12em"/><br></input>
        </form>
    </div>
    <div class="row" align="center">
        <p style="font-size:19px;font-family:verdana">EVALUACIÓN POR ÍTEMS</p>
        <table class="table_consolidados" style="width:100%">
            <tr>
                <th style="width:25%" id="tdimension">SÍNTOMAS</th>
                <th style="width:35%" id="tdimension">Items</th>
                <th style="width:10%" id="tdimension">Siempre</th>
                <th style="width:10%" id="tdimension">Casi <br>siempre</th>
                <th style="width:10%" id="tdimension">A veces</th>
                <th style="width:10%" id="tdimension">Nunca</th>
            </tr>
            <tr style="border-top:1px solid #333333">
                <td ROWSPAN=8  style="font-family:verdanab;vertical-align:middle"><span class="subt2">Síntomas: </span>Fisiológicos</td>
                <td style="text-align:left"><span class="subt2">ítems: </span>Dolores en el cuello y espalda o tensión muscular</td>
                <td <?php echo $ESI1aC ?>><span class="subt2">Siempre: </span><?php echo $ESI1a_porcentaje . '% (' . $ESI1a . ')' ?></td>
                <td <?php echo $ESI1bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI1b_porcentaje . '% (' . $ESI1b . ')' ?></td>
                <td <?php echo $ESI1cC ?>><span class="subt2">A veces: </span><?php echo $ESI1c_porcentaje . '% (' . $ESI1c . ')' ?></td>
                <td><span class="subt2">Nunca: </span><?php echo $ESI1d_porcentaje . '% (' . $ESI1d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Problemas gastrointestinales, úlcera péptica, acidez, problemas digestivos o del colon</td>
                <td <?php echo $ESI2aC ?>><span class="subt2">Siempre: </span><?php echo $ESI2a_porcentaje . '% (' . $ESI2a . ')' ?></td>
                <td <?php echo $ESI2bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI2b_porcentaje . '% (' . $ESI2b . ')' ?></td>
                <td <?php echo $ESI2cC ?>><span class="subt2">A veces: </span><?php echo $ESI2c_porcentaje . '% (' . $ESI2c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI2d_porcentaje . '% (' . $ESI2d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Problemas respiratorios</td>
                <td <?php  echo $ESI3aC ?>><span class="subt2">Siempre: </span><?php echo $ESI3a_porcentaje . '% (' . $ESI3a . ')' ?></td>
                <td <?php  echo $ESI3bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI3b_porcentaje . '% (' . $ESI3b . ')' ?></td>
                <td <?php  echo $ESI3cC ?>><span class="subt2">A veces: </span><?php echo $ESI3c_porcentaje . '% (' . $ESI3c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI3d_porcentaje . '% (' . $ESI3d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Dolor de cabeza</td>
                <td <?php  echo $ESI4aC ?>><span class="subt2">Siempre: </span><?php echo $ESI4a_porcentaje . '% (' . $ESI4a . ')' ?></td>
                <td <?php  echo $ESI4bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI4b_porcentaje . '% (' . $ESI4b . ')' ?></td>
                <td <?php  echo $ESI4cC ?>><span class="subt2">A veces: </span><?php echo $ESI4c_porcentaje . '% (' . $ESI4c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI4d_porcentaje . '% (' . $ESI4d . ')' ?></td>
            </tr>
             <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Trastornos del sueño como somnolencia durante el día o desvelo en la noche</td>
                <td <?php  echo $ESI5aC ?>><span class="subt2">Siempre: </span><?php echo $ESI5a_porcentaje . '% (' . $ESI5a . ')' ?></td>
                <td <?php  echo $ESI5bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI5b_porcentaje . '% (' . $ESI5b . ')' ?></td>
                <td <?php  echo $ESI5cC ?>><span class="subt2">A veces: </span><?php echo $ESI5c_porcentaje . '% (' . $ESI5c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI5d_porcentaje . '% (' . $ESI5d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Palpitaciones en el pecho o problemas cardíacos</td>
                <td <?php  echo $ESI6aC ?>><span class="subt2">Siempre: </span><?php echo $ESI6a_porcentaje . '% (' . $ESI6a . ')' ?></td>
                <td <?php  echo $ESI6bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI6b_porcentaje . '% (' . $ESI6b . ')' ?></td>
                <td <?php  echo $ESI6cC ?>><span class="subt2">A veces: </span><?php echo $ESI6c_porcentaje . '% (' . $ESI6c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI6d_porcentaje . '% (' . $ESI6d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Cambios fuertes del apetito</td>
                <td <?php  echo $ESI7aC ?>><span class="subt2">Siempre: </span><?php echo $ESI7a_porcentaje . '% (' . $ESI7a . ')' ?></td>
                <td <?php  echo $ESI7bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI7b_porcentaje . '% (' . $ESI7b . ')' ?></td>
                <td <?php  echo $ESI7cC ?>><span class="subt2">A veces: </span><?php echo $ESI7c_porcentaje . '% (' . $ESI7c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI7d_porcentaje . '% (' . $ESI7d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Problemas relacionados con la función de los órganos genitales (impotencia, frigidez)</td>
                <td <?php  echo $ESI8aC ?>><span class="subt2">Siempre: </span><?php echo $ESI8a_porcentaje . '% (' . $ESI8a . ')' ?></td>
                <td <?php  echo $ESI8bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI8b_porcentaje . '% (' . $ESI8b . ')' ?></td>
                <td <?php  echo $ESI8cC ?>><span class="subt2">A veces: </span><?php echo $ESI8c_porcentaje . '% (' . $ESI8c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI8d_porcentaje . '% (' . $ESI8d . ')' ?></td>
            </tr>
             <tr style="border-top:1px solid #333333!important">
                <td ROWSPAN=4  style="font-family:verdanab;vertical-align:middle"><span class="subt2">Síntomas: </span>Comportamiento Social</td>
                <td style="text-align:left"><span class="subt2">ítems: </span>Dificultad en las relaciones familiares</td>
                <td <?php  echo $ESI9aC ?>><span class="subt2">Siempre: </span><?php echo $ESI9a_porcentaje . '% (' . $ESI9a . ')' ?></td>
                <td <?php  echo $ESI9bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI9b_porcentaje . '% (' . $ESI9b . ')' ?></td>
                <td <?php  echo $ESI9cC ?>><span class="subt2">A veces: </span><?php echo $ESI9c_porcentaje . '% (' . $ESI9c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI9d_porcentaje . '% (' . $ESI9d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Dificultad para permanecer quieto o dificultad para iniciar actividades</td>
                <td <?php  echo $ESI10aC ?>><span class="subt2">Siempre: </span><?php echo $ESI10a_porcentaje . '% (' . $ESI10a . ')' ?></td>
                <td <?php  echo $ESI10bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI10b_porcentaje . '% (' . $ESI10b . ')' ?></td>
                <td <?php  echo $ESI10cC ?>><span class="subt2">A veces: </span><?php echo $ESI10c_porcentaje . '% (' . $ESI10c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI10d_porcentaje . '% (' . $ESI10d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Dificultad en las relaciones con otras personas</td>
                <td <?php  echo $ESI11aC ?>><span class="subt2">Siempre: </span><?php echo $ESI11a_porcentaje . '% (' . $ESI11a . ')' ?></td>
                <td <?php  echo $ESI11bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI11b_porcentaje . '% (' . $ESI11b . ')' ?></td>
                <td <?php  echo $ESI11cC ?>><span class="subt2">A veces: </span><?php echo $ESI11c_porcentaje . '% (' . $ESI11c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI11d_porcentaje . '% (' . $ESI11d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Sensación de aislamiento y desinterés</td>
                <td <?php  echo $ESI12aC ?>><span class="subt2">Siempre: </span><?php echo $ESI12a_porcentaje . '% (' . $ESI12a . ')' ?></td>
                <td <?php  echo $ESI12bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI12b_porcentaje . '% (' . $ESI12b . ')' ?></td>
                <td <?php  echo $ESI12cC ?>><span class="subt2">A veces: </span><?php echo $ESI12c_porcentaje . '% (' . $ESI12c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI12d_porcentaje . '% (' . $ESI12d . ')' ?></td>
            </tr>
              <tr style="border-top:1px solid #333333!important">
                <td ROWSPAN=10  style="font-family:verdanab;vertical-align:middle"><span class="subt2">Síntomas: </span>Laborales Intelectuales</td>
                <td style="text-align:left"><span class="subt2">ítems: </span>Sentimiento de sobrecarga de trabajo</td>
                <td <?php  echo $ESI13aC ?>><span class="subt2">Siempre: </span><?php echo $ESI13a_porcentaje . '% (' . $ESI13a . ')' ?></td>
                <td <?php  echo $ESI13bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI13b_porcentaje . '% (' . $ESI13b . ')' ?></td>
                <td <?php  echo $ESI13cC ?>><span class="subt2">A veces: </span><?php echo $ESI13c_porcentaje . '% (' . $ESI13c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI13d_porcentaje . '% (' . $ESI13d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Dificultad para concentrarse, olvidos frecuentes</td>
                <td <?php  echo $ESI14aC ?>><span class="subt2">Siempre: </span><?php echo $ESI14a_porcentaje . '% (' . $ESI14a . ')' ?></td>
                <td <?php  echo $ESI14bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI14b_porcentaje . '% (' . $ESI14b . ')' ?></td>
                <td <?php  echo $ESI14cC ?>><span class="subt2">A veces: </span><?php echo $ESI14c_porcentaje . '% (' . $ESI14c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI14d_porcentaje . '% (' . $ESI14d . ')' ?></td>
            </tr>
             <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Aumento en el número de accidentes de trabajo</td>
                <td <?php  echo $ESI15aC ?>><span class="subt2">Siempre: </span><?php echo $ESI15a_porcentaje . '% (' . $ESI15a . ')' ?></td>
                <td <?php  echo $ESI15bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI15b_porcentaje . '% (' . $ESI15b . ')' ?></td>
                <td <?php  echo $ESI15cC ?>><span class="subt2">A veces: </span><?php echo $ESI15c_porcentaje . '% (' . $ESI15c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI15d_porcentaje . '% (' . $ESI15d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Sentimiento de frustración, de no haber hecho lo que se quería en la vida</td>
                <td <?php  echo $ESI16aC ?>><span class="subt2">Siempre: </span><?php echo $ESI16a_porcentaje . '% (' . $ESI16a . ')' ?></td>
                <td <?php  echo $ESI16bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI16b_porcentaje . '% (' . $ESI16b . ')' ?></td>
                <td <?php  echo $ESI16cC ?>><span class="subt2">A veces: </span><?php echo $ESI16c_porcentaje . '% (' . $ESI16c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI16d_porcentaje . '% (' . $ESI16d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Cansancio, tedio o desgano</td>
                <td <?php  echo $ESI17aC ?>><span class="subt2">Siempre: </span><?php echo $ESI17a_porcentaje . '% (' . $ESI17a . ')' ?></td>
                <td <?php  echo $ESI17bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI17b_porcentaje . '% (' . $ESI17b . ')' ?></td>
                <td <?php  echo $ESI17cC?>><span class="subt2">A veces: </span><?php echo $ESI17c_porcentaje . '% (' . $ESI17c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI17d_porcentaje . '% (' . $ESI17d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Disminución del rendimiento en el trabajo o poca creatividad</td>
                <td <?php  echo $ESI18aC ?>><span class="subt2">Siempre: </span><?php echo $ESI18a_porcentaje . '% (' . $ESI18a . ')' ?></td>
                <td <?php  echo $ESI18bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI18b_porcentaje . '% (' . $ESI18b . ')' ?></td>
                <td <?php  echo $ESI18cC?>><span class="subt2">A veces: </span><?php echo $ESI18c_porcentaje . '% (' . $ESI18c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI18d_porcentaje . '% (' . $ESI18d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Deseo de no asistir al trabajo</td>
                <td <?php  echo $ESI19aC ?>><span class="subt2">Siempre: </span><?php echo $ESI19a_porcentaje . '% (' . $ESI19a . ')' ?></td>
                <td <?php  echo $ESI19bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI19b_porcentaje . '% (' . $ESI19b . ')' ?></td>
                <td <?php  echo $ESI19cC?>><span class="subt2">A veces: </span><?php echo $ESI19c_porcentaje . '% (' . $ESI19c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI19d_porcentaje . '% (' . $ESI19d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Bajo compromiso o poco interés con lo que se hace</td>
                <td <?php  echo $ESI20aC ?>><span class="subt2">Siempre: </span><?php echo $ESI20a_porcentaje . '% (' . $ESI20a . ')' ?></td>
                <td <?php  echo $ESI20bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI20b_porcentaje . '% (' . $ESI20b . ')' ?></td>
                <td <?php  echo $ESI20cC?>><span class="subt2">A veces: </span><?php echo $ESI20c_porcentaje . '% (' . $ESI20c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI20d_porcentaje . '% (' . $ESI20d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Dificultad para tomar decisiones</td>
                <td <?php  echo $ESI21aC ?>><span class="subt2">Siempre: </span><?php echo $ESI21a_porcentaje . '% (' . $ESI21a . ')' ?></td>
                <td <?php  echo $ESI21bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI21b_porcentaje . '% (' . $ESI21b . ')' ?></td>
                <td <?php  echo $ESI21cC?>><span class="subt2">A veces: </span><?php echo $ESI21c_porcentaje . '% (' . $ESI21c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI21d_porcentaje . '% (' . $ESI21d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Deseo de cambiar de empleo</td>
                <td <?php  echo $ESI22aC ?>><span class="subt2">Siempre: </span><?php echo $ESI22a_porcentaje . '% (' . $ESI22a . ')' ?></td>
                <td <?php  echo $ESI22bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI22b_porcentaje . '% (' . $ESI22b . ')' ?></td>
                <td <?php  echo $ESI22cC ?>><span class="subt2">A veces: </span><?php echo $ESI22c_porcentaje . '% (' . $ESI22c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI22d_porcentaje . '% (' . $ESI22d . ')' ?></td>
            </tr>
             <tr style="border-top:1px solid #333333!important">
                <td ROWSPAN=10  style="font-family:verdanab;vertical-align:middle"><span class="subt2">Síntomas: </span>Psicoemocionales</td>
                <td style="text-align:left"><span class="subt2">ítems: </span>Sentimiento de soledad y miedo</td>
                <td <?php  echo $ESI23aC ?>><span class="subt2">Siempre: </span><?php echo $ESI23a_porcentaje . '% (' . $ESI23a . ')' ?></td>
                <td <?php  echo $ESI23bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI23b_porcentaje . '% (' . $ESI23b . ')' ?></td>
                <td <?php  echo $ESI23cC ?>><span class="subt2">A veces: </span><?php echo $ESI23c_porcentaje . '% (' . $ESI23c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI23d_porcentaje . '% (' . $ESI23d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Sentimiento de irritabilidad, actitudes y pensamientos negativos</td>
                <td <?php  echo $ESI24aC ?>><span class="subt2">Siempre: </span><?php echo $ESI24a_porcentaje . '% (' . $ESI24a . ')' ?></td>
                <td <?php  echo $ESI24bC?>><span class="subt2">Casi siempre: </span><?php echo $ESI24b_porcentaje . '% (' . $ESI24b . ')' ?></td>
                <td <?php  echo $ESI24cC ?>><span class="subt2">A veces: </span><?php echo $ESI24c_porcentaje . '% (' . $ESI24c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI24d_porcentaje . '% (' . $ESI24d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Sentimiento de angustia, preocupación o tristeza</td>
                <td <?php  echo $ESI25aC ?>><span class="subt2">Siempre: </span><?php echo $ESI25a_porcentaje . '% (' . $ESI25a . ')' ?></td>
                <td <?php  echo $ESI25bC?>><span class="subt2">Casi siempre: </span><?php echo $ESI25b_porcentaje . '% (' . $ESI25b . ')' ?></td>
                <td <?php  echo $ESI25cC ?>><span class="subt2">A veces: </span><?php echo $ESI25c_porcentaje . '% (' . $ESI25c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI25d_porcentaje . '% (' . $ESI25d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Consumo de drogas para aliviar la tensión o los nervios</td>
                <td <?php  echo $ESI26aC ?>><span class="subt2">Siempre: </span><?php echo $ESI26a_porcentaje . '% (' . $ESI26a . ')' ?></td>
                <td <?php  echo $ESI26bC?>><span class="subt2">Casi siempre: </span><?php echo $ESI26b_porcentaje . '% (' . $ESI26b . ')' ?></td>
                <td <?php  echo $ESI26cC ?>><span class="subt2">A veces: </span><?php echo $ESI26c_porcentaje . '% (' . $ESI26c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI26d_porcentaje . '% (' . $ESI26d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Sentimientos de que ''no vale nada'', o ''no sirve para nada ''.</td>
                <td <?php  echo $ESI27aC ?>><span class="subt2">Siempre: </span><?php echo $ESI27a_porcentaje . '% (' . $ESI27a . ')' ?></td>
                <td <?php  echo $ESI27bC?>><span class="subt2">Casi siempre: </span><?php echo $ESI27b_porcentaje . '% (' . $ESI27b . ')' ?></td>
                <td <?php  echo $ESI27cC ?>><span class="subt2">A veces: </span><?php echo $ESI27c_porcentaje . '% (' . $ESI27c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI27d_porcentaje . '% (' . $ESI27d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Consumo de bebidas alcohólicas o café o cigarrillo</td>
                <td <?php  echo $ESI28aC ?>><span class="subt2">Siempre: </span><?php echo $ESI28a_porcentaje . '% (' . $ESI28a . ')' ?></td>
                <td <?php  echo $ESI28bC?>><span class="subt2">Casi siempre: </span><?php echo $ESI28b_porcentaje . '% (' . $ESI28b . ')' ?></td>
                <td <?php  echo $ESI28cC ?>><span class="subt2">A veces: </span><?php echo $ESI28c_porcentaje . '% (' . $ESI28c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI28d_porcentaje . '% (' . $ESI28d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Sentimiento de que está perdiendo la razón</td>
                <td <?php  echo $ESI29aC ?>><span class="subt2">Siempre: </span><?php echo $ESI29a_porcentaje . '% (' . $ESI29a . ')' ?></td>
                <td <?php  echo $ESI29bC?>><span class="subt2">Casi siempre: </span><?php echo $ESI29b_porcentaje . '% (' . $ESI29b . ')' ?></td>
                <td <?php  echo $ESI29cC ?>><span class="subt2">A veces: </span><?php echo $ESI29c_porcentaje . '% (' . $ESI29c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI29d_porcentaje . '% (' . $ESI29d . ')' ?></td>
            </tr>
            <tr>
                <td style="text-align:left"><span class="subt2">ítems: </span>Comportamientos rígidos, obstinación o terquedad</td>
                <td <?php  echo $ESI30aC ?>><span class="subt2">Siempre: </span><?php echo $ESI30a_porcentaje . '% (' . $ESI30a . ')' ?></td>
                <td <?php  echo $ESI30bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI30b_porcentaje . '% (' . $ESI30b . ')' ?></td>
                <td <?php  echo $ESI30cC ?>><span class="subt2">A veces: </span><?php echo $ESI30c_porcentaje . '% (' . $ESI30c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI30d_porcentaje . '% (' . $ESI30d . ')' ?></td>
            </tr>
            <tr style="border-bottom:1px solid #333333!important;">
                <td style="text-align:left"><span class="subt2">ítems: </span>Sensación de no poder manejar los problemas de la vida</td>
                <td <?php  echo $ESI31aC ?>><span class="subt2">Siempre: </span><?php echo $ESI31a_porcentaje . '% (' . $ESI31a . ')' ?></td>
                <td <?php  echo $ESI31bC ?>><span class="subt2">Casi siempre: </span><?php echo $ESI31b_porcentaje . '% (' . $ESI31b . ')' ?></td>
                <td <?php  echo $ESI31cC ?>><span class="subt2">A veces: </span><?php echo $ESI31c_porcentaje . '% (' . $ESI31c . ')' ?></td>
                <td <?php  ?>><span class="subt2">Nunca: </span><?php echo $ESI31d_porcentaje . '% (' . $ESI31d . ')' ?></td>
            </tr>
        </table>
    </div>
       <!-- <div class="row" id="registro" align="center" style="min-height:10em"><br>
            <form>    
                <p id="analisis10v" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1.9em;color:#000000"></p>
                <button class="task-editar" id="btnanalisis10" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
                <textarea class="note" id="analisis10" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1.8em;color:#000000" onKeyDown="valida_longitud10()" placeholder="..."></textarea><br>
                <p id="conteo10" align="right">&nbsp... <span id="contador10" style="font-family:verdanab;font-size:12px"></span></p>
                <input id="botonIA10" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
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
        <span style="font-family:verdana;padding-left:3%;color:#333333!important">Diseño y desarrollo web:&nbsp<a href="https://www.perfilar.com.co" >PERFILAR</a></span><br> 
        <span style="font-family:verdana;padding-left:3%;color:#333333!important">Copyright © 2020 - Medellín (Colombia)</span>
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
                window.location = "../psicosocial/psicosocial/estres"
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
        $('#analisis8').slideUp(1);
        $('#analisis9').slideUp(1);
        $('#analisis10').slideUp(1);
        $('#botonIA8').slideUp(1);
        $('#botonIA9').slideUp(1);
        $('#botonIA10').slideUp(1);
        $('#conteo8').slideUp(1);
        $('#conteo9').slideUp(1);
        $('#conteo10').slideUp(1);
        fetchTasks();
        valida_longitud8();
        valida_longitud9();
        valida_longitud10();
    });
    permitidos8 = 450
    function valida_longitud8(){
    num_caracteres8 = document.getElementById("analisis8").value.length
    contador = permitidos8 - num_caracteres8;
    document.getElementById('contador8').innerHTML = contador;
    if (num_caracteres > permitidos8){
        document.getElementById("analisis8").value = contenido_textarea;
        document.getElementById('contador8').style.color="#e7744f";
    } else {
        contenido_textarea = document.getElementById("analisis8").value;
        document.getElementById('contador8').style.color="#333333";
       }
    };
    permitidos9 = 450
    function valida_longitud9(){
    num_caracteres9 = document.getElementById("analisis9").value.length
    contador = permitidos9 - num_caracteres9;
    document.getElementById('contador9').innerHTML = contador;
    if (num_caracteres > permitidos9){
        document.getElementById("analisis9").value = contenido_textarea;
        document.getElementById('contador9').style.color="#e7744f";
    } else {
        contenido_textarea = document.getElementById("analisis9").value;
        document.getElementById('contador9').style.color="#333333";
       }
    };
    permitidos10 = 450
    function valida_longitud10(){
    num_caracteres10 = document.getElementById("analisis10").value.length
    contador = permitidos10 - num_caracteres10;
    document.getElementById('contador10').innerHTML = contador;
    if (num_caracteres > permitidos10){
        document.getElementById("analisis10").value = contenido_textarea;
        document.getElementById('contador10').style.color="#e7744f";
    } else {
        contenido_textarea = document.getElementById("analisis10").value;
        document.getElementById('contador10').style.color="#333333";
       }
    };
    $("#btnanalisis8").click(function(e){
        e.preventDefault();
        $('#analisis8').slideDown(1);
        $('#botonIA8').slideDown(1);
        $('#conteo8').slideDown(1);
        $('#btnanalisis8').slideUp(1);
        $('#analisis8v').slideUp(1);
    });
    $("#btnanalisis9").click(function(e){
        e.preventDefault();
        $('#analisis9').slideDown(1);
        $('#botonIA9').slideDown(1);
        $('#conteo9').slideDown(1);
        $('#btnanalisis9').slideUp(1);
        $('#analisis9v').slideUp(1);
    });
    $("#btnanalisis10").click(function(e){
        e.preventDefault();
        $('#analisis10').slideDown(1);
        $('#botonIA10').slideDown(1);
        $('#conteo10').slideDown(1);
        $('#btnanalisis10').slideUp(1);
        $('#analisis10v').slideUp(1);
    });
    $(document).on('click', '#botonIA8', (e) => {
        e.preventDefault();
        const postData1 = {
            empresa8:'<?php echo $Razon  ?>',
            analisis8:$('#analisis8').val(),
        };
        const url = '../analisisbdg.php';
            $.post(url,  postData1, (response) => {
            fetchTasks();
            $('#analisis8').slideUp(1);
            $('#botonIA8').slideUp(1);
            $('#conteo8').slideUp(1);
      	    $('#analisis8v').slideDown(1);
            $('#btnanalisis8').slideDown(1);
        });
    });
    $(document).on('click', '#botonIA9', (e) => {
        e.preventDefault();
        const postData1 = {
            empresa9:'<?php echo $Razon  ?>',
            analisis9:$('#analisis9').val(),
        };
        const url = '../analisisbdg.php';
            $.post(url,  postData1, (response) => {
            fetchTasks();
            $('#analisis9').slideUp(1);
            $('#botonIA9').slideUp(1);
            $('#conteo9').slideUp(1);
      	    $('#analisis9v').slideDown(1);
            $('#btnanalisis9').slideDown(1);
        });
    });
    $(document).on('click', '#botonIA10', (e) => {
        e.preventDefault();
        const postData1 = {
            empresa10:'<?php echo $Razon  ?>',
            analisis10:$('#analisis10').val(),
        };
        const url = '../analisisbdg.php';
            $.post(url,  postData1, (response) => {
            fetchTasks();
            $('#analisis10').slideUp(1);
            $('#botonIA10').slideUp(1);
            $('#conteo10').slideUp(1);
      	    $('#analisis10v').slideDown(1);
            $('#btnanalisis10').slideDown(1);
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
                let analisis_8 = '';
                let analisis_9 = '';
                let analisis_10 = '';
                tasksIA2.forEach(taskIA2 => {
                        analisis_8 += `${taskIA2.analisis8}`
                        analisis_9 += `${taskIA2.analisis9}`
                        analisis_10 += `${taskIA2.analisis10}`
                });  
                    var analisis8 = analisis_8.replace(/<br [/][>]/g, "");
                    document.getElementById('analisis8').innerHTML = analisis8;
                    var analisis8v = analisis_8.replace(/<br[/][>]/g, "");
                    document.getElementById('analisis8v').innerHTML = analisis8v;
                    var analisis9 = analisis_9.replace(/<br [/][>]/g, "");
                    document.getElementById('analisis9').innerHTML = analisis9;
                    var analisis9v = analisis_9.replace(/<br[/][>]/g, "");
                    document.getElementById('analisis9v').innerHTML = analisis9v;
                    var analisis10 = analisis_10.replace(/<br [/][>]/g, "");
                    document.getElementById('analisis10').innerHTML = analisis10;
                    var analisis10v = analisis_10.replace(/<br[/][>]/g, "");
                    document.getElementById('analisis10v').innerHTML = analisis10v;
            },   
        });
    }
/*  Highcharts.chart('ES', {
       chart: {
           type: 'column',
           backgroundColor: false,
        },
         title: {
            text: 'RIESGO DE ESTRÉS',
            style: {
               fontFamily: 'verdana',
               fontSize: '20px'
           }
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit:<?php echo $Nit ?>   </span></p><br><p>Empleados evaluados: <span><?php echo $ES ?> - Fecha: <?php echo $Fecha ?></span></p>',
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
              y: <?php echo $ES1_porcentaje ?>,
            },
            {
              name: "Bajo",
              color: '#739900',
              y: <?php echo $ES2_porcentaje ?>,
            },
            {
              name: "Medio",
              color: '#666666',
              y: <?php echo $ES3_porcentaje ?>,
            },
            {
              name: "Alto",
              color: '#e7744f',
              y: <?php echo $ES4_porcentaje ?>,
            },
            {
              name: "Muy Alto",
              color: '#9d3715',
              y: <?php echo $ES5_porcentaje ?>,
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
Highcharts.chart('general', {
    chart: {
        type: 'bar',
        backgroundColor: false,
        spacingBottom: 30,
        spacingTop: 20,
        spacingLeft: 20,
        spacingRight: 20
    },
    title: {
        text: 'Resultado General',
        style: {
            fontFamily: 'Verdanab',
            fontSize: '20px',
            fontWeight: 'bold',
            color: '#333333'
        }
    },
    subtitle: {
        text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit: <?php echo $Nit ?>   </span></p>',
        style: {
            fontFamily: 'Verdana',
            fontSize: '14px'
        }
    },
    xAxis: {
        categories: ['Forma A <br>Jefaturas y profesionales', 'Forma B<br>Auxiliares y operativos'],
        title: {
            text: null
        },
        labels: {
            style: {
                fontSize: '15px',      // ← letras más grandes
                fontWeight: 'bold',
                fontFamily: 'Verdana',
                color: '#333333'
            }
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Porcentaje (%)',
            align: 'high',
            style: {
                fontSize: '15px',
                fontWeight: 'bold',
                fontFamily: 'Verdana',
                color: '#333333'
            }
        },
        labels: {
            overflow: 'justify',
            style: {
                fontSize: '14px',      // ← letras más grandes
                fontFamily: 'Verdana',
                color: '#333333'
            }
        }
    },
    tooltip: {
        valueSuffix: ' %',
        style: {
            fontSize: '14px',
            fontFamily: 'Verdana'
        }
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f} %',
                style: {
                    fontSize: '13px',
                    fontWeight: 'bold',
                    textOutline: 'none',
                    fontFamily: 'Verdana'
                }
            },
            pointPadding: 0.1,
            groupPadding: 0.15
        }
    },
    legend: {
        enabled: true,
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom',
        floating: false,
        borderWidth: 0,
        backgroundColor: 'transparent',
        itemStyle: {
            fontSize: '14px',
            fontFamily: 'Verdana',
            fontWeight: 'normal'
        },
        symbolRadius: 0
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Sin Riesgo',
        color: '#394d00',
        data: [<?php echo $ESJP1_porcentaje ?>, <?php echo $ESAO1_porcentaje ?>]
    }, {
        name: 'Riesgo Bajo',
        color: '#739900',
        data: [<?php echo $ESJP2_porcentaje ?>, <?php echo $ESAO2_porcentaje ?>]
    }, {
        name: 'Riesgo Medio',
        color: '#666666',
        data: [<?php echo $ESJP3_porcentaje ?>, <?php echo $ESAO3_porcentaje ?>]
    }, {
        name: 'Riesgo Alto',
        color: '#e7744f',
        data: [<?php echo $ESJP4_porcentaje ?>, <?php echo $ESAO4_porcentaje ?>]
    }, {
        name: 'Riesgo muy Alto',
        color: '#9d3715',
        data: [<?php echo $ESJP5_porcentaje ?>, <?php echo $ESAO5_porcentaje ?>]
    }]
});

Highcharts.chart('ocupacionales', {
    chart: {
        type: 'bar',
        backgroundColor: false,
        spacingBottom: 30,
        spacingTop: 20,
        spacingLeft: 20,
        spacingRight: 20
    },
    title: {
        text: 'Grupos Ocupacionales',
        style: {
            fontFamily: 'Verdanab',
            fontSize: '20px',
            fontWeight: 'bold',
            color: '#333333'
        }
    },
    subtitle: {
        text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit: <?php echo $Nit ?> </p>',
        style: {
            fontFamily: 'Verdana',
            fontSize: '14px'
        }
    },
    xAxis: {
        categories: ['Jefaturas', 'Profesionales', 'Auxiliares', 'Operativos'],
        title: {
            text: null
        },
        labels: {
            style: {
                fontSize: '15px',      // ← letras más grandes
                fontWeight: 'bold',
                fontFamily: 'Verdana',
                color: '#333333'
            }
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Porcentaje (%)',
            align: 'high',
            style: {
                fontSize: '15px',
                fontWeight: 'bold',
                fontFamily: 'Verdana',
                color: '#333333'
            }
        },
        labels: {
            overflow: 'justify',
            style: {
                fontSize: '14px',      // ← letras más grandes
                fontFamily: 'Verdana',
                color: '#333333'
            }
        }
    },
    tooltip: {
        valueSuffix: ' %',
        style: {
            fontSize: '14px',
            fontFamily: 'Verdana'
        }
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f} %',
                style: {
                    fontSize: '13px',
                    fontWeight: 'bold',
                    textOutline: 'none',
                    fontFamily: 'Verdana'
                }
            },
            pointPadding: 0.1,
            groupPadding: 0.15
        }
    },
    legend: {
        enabled: true,
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom',
        floating: false,
        borderWidth: 0,
        backgroundColor: 'transparent',
        itemStyle: {
            fontSize: '14px',
            fontFamily: 'Verdana',
            fontWeight: 'normal'
        },
        symbolRadius: 0
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Sin Riesgo',
        color: '#394d00',
        data: [<?php echo $ESTJ1_porcentaje ?>, <?php echo $ESTP1_porcentaje ?>, <?php echo $ESTA1_porcentaje ?>, <?php echo $ESTO1_porcentaje ?>]
    }, {
        name: 'Riesgo Bajo',
        color: '#739900',
        data: [<?php echo $ESTJ2_porcentaje ?>, <?php echo $ESTP2_porcentaje ?>, <?php echo $ESTA2_porcentaje ?>, <?php echo $ESTO2_porcentaje ?>]
    }, {
        name: 'Riesgo Medio',
        color: '#666666',
        data: [<?php echo $ESTJ3_porcentaje ?>, <?php echo $ESTP3_porcentaje ?>, <?php echo $ESTA3_porcentaje ?>, <?php echo $ESTO3_porcentaje ?>]
    }, {
        name: 'Riesgo Alto',
        color: '#e7744f',
        data: [<?php echo $ESTJ4_porcentaje ?>, <?php echo $ESTP4_porcentaje ?>, <?php echo $ESTA4_porcentaje ?>, <?php echo $ESTO4_porcentaje ?>]
    }, {
        name: 'Riesgo muy Alto',
        color: '#9d3715',
        data: [<?php echo $ESTJ5_porcentaje ?>, <?php echo $ESTP5_porcentaje ?>, <?php echo $ESTA5_porcentaje ?>, <?php echo $ESTO5_porcentaje ?>]
    }]
});
</script>
</body>
</html>
