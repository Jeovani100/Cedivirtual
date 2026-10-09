<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ausentismo</title></title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<?php
   // error_reporting(0);
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion.inc.php';
    include_once 'app/redireccion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    if (!controlsesion::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGIN);}
    conexion :: abrir_conexion();
    $GET = $_GET["*"];
    if ($GET == 1) {
        $costumModalmenu = 1;
    } else {
        $costumModalmenu = '0';
    }
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
    $Portada = 1;
    if(isset($_POST['portada'])) {
       $Portada_ = $_POST['portada'];
    } 

    if (!$Portada_) {
        $Portada = 1;
    } else {
        $Portada = $Portada_;
    }
    $sql = "SELECT * FROM admin WHERE id = '$id_admin'"; 
    $resultado2 = $mysqli->query($sql);
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
    $Razon = $row2['Razon'];
    $Nit = $row2['Nit'];
    $Year2 = $row2['Ausentismo2'];
    $id_admin_aus = $row2['Ausentismo'];
    $_SESSION['Razon'] = $Razon;
    $_SESSION['id_usuario'] = $id_admin_aus;
    $_SESSION['year'] = $Year2;
    setlocale(LC_TIME, "spanish");
    $sql = "SELECT * FROM reg_ausentismo WHERE id_admin2 = '$id_admin_aus' ORDER BY id ASC LIMIT 1";
    $resultado4 = $mysqli->query($sql);
    $row4 = $resultado4->fetch_array(MYSQLI_ASSOC);
    $mesDesc1 = $row4['Mes0'];
    $anoDesc1 = $row4['Ano0'];
    
    $sql = "SELECT * FROM reg_ausentismo WHERE id_admin2 = '$id_admin_aus' ORDER BY id DESC LIMIT 1";
    $resultado5 = $mysqli->query($sql);
    $row5 = $resultado5->fetch_array(MYSQLI_ASSOC);
    $mesDesc2 = $row5['Mes0'];
    $anoDesc3 = $row5['Ano0'];
    
    $sql = "SELECT * FROM controles_ausentismo WHERE id_admin = $id_admin && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $date1 = new DateTime($Inicio0);
    $Inicio =  $date1->format('d-m-Y');
    $_SESSION['Inicio'] = $Inicio;
    
    $sql = "SELECT * FROM controles_ausentismo WHERE id_admin = $id_admin && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $date2 = new DateTime($Terminacion0);
    $Terminacion =  $date2->format('d-m-Y');
    $_SESSION['Terminacion'] = $Terminacion;

    $sql = "SELECT * FROM controles_ausentismo2 WHERE id_admin = '$id_admin_aus' && Centro_ != '0' && Centro_existe = '#e7744f'";
    $resultado_centro = $mysqli->query($sql);
    function mostrarDatos ($resultado_centro) {
    if ($resultado_centro !=NULL) {
        return $resultado_centro['Centro_'];}
    }
    $extraido1= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro1'] = mostrarDatos($extraido1);
    $extraido2= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro2'] = mostrarDatos($extraido2);
    $extraido3= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro3'] = mostrarDatos($extraido3);
    $extraido4= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro4'] = mostrarDatos($extraido4);
    $extraido5= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro5'] = mostrarDatos($extraido5);
    $extraido6= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro6'] = mostrarDatos($extraido6);
    $extraido7= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro7'] = mostrarDatos($extraido7);
    $extraido8= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro8'] = mostrarDatos($extraido8);
    $extraido9= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro9'] = mostrarDatos($extraido9);
    $extraido10= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro10'] = mostrarDatos($extraido10);
    $extraido11= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro11'] = mostrarDatos($extraido11);
    $extraido12= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro12'] = mostrarDatos($extraido12);
    $extraido13= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro13'] = mostrarDatos($extraido13);
    $extraido14= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro14'] = mostrarDatos($extraido14);
    $extraido15= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro15'] = mostrarDatos($extraido15);
    $extraido16= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro16'] = mostrarDatos($extraido16);
    $extraido17= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro17'] = mostrarDatos($extraido17);
    $extraido18= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro18'] = mostrarDatos($extraido18);
    $extraido19= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro19'] = mostrarDatos($extraido19);
    $extraido20= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro20'] = mostrarDatos($extraido20);
    $extraido21= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro21'] = mostrarDatos($extraido21);
    $extraido22= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro22'] = mostrarDatos($extraido22);
    $extraido23= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro23'] = mostrarDatos($extraido23);
    $extraido24= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro24'] = mostrarDatos($extraido24);
    $extraido25= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro25'] = mostrarDatos($extraido25);
    $extraido26= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro26'] = mostrarDatos($extraido26);
    $extraido27= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro27'] = mostrarDatos($extraido27);
    $extraido28= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro28'] = mostrarDatos($extraido28);
    $extraido29= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro29'] = mostrarDatos($extraido29);
    $extraido30= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro30'] = mostrarDatos($extraido30);
    $extraido31= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro31'] = mostrarDatos($extraido31);
    $extraido32= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro32'] = mostrarDatos($extraido32);
    $extraido33= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro33'] = mostrarDatos($extraido33);
    $extraido34= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro34'] = mostrarDatos($extraido34);
    $extraido35= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro35'] = mostrarDatos($extraido35);
    $extraido36= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro36'] = mostrarDatos($extraido36);
    $extraido37= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro37'] = mostrarDatos($extraido37);
    $extraido38= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro38'] = mostrarDatos($extraido38);
    $extraido39= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro39'] = mostrarDatos($extraido39);
    $extraido40= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro40'] = mostrarDatos($extraido40);
    $extraido41= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro41'] = mostrarDatos($extraido41);
    $extraido42= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro42'] = mostrarDatos($extraido42);
    $extraido43= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro43'] = mostrarDatos($extraido43);
    $extraido44= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro44'] = mostrarDatos($extraido44);
    $extraido45= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro45'] = mostrarDatos($extraido45);
    $extraido46= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro46'] = mostrarDatos($extraido46);
    $extraido47= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro47'] = mostrarDatos($extraido47);
    $extraido48= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro48'] = mostrarDatos($extraido48);
    $extraido49= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro49'] = mostrarDatos($extraido49);
    $extraido50= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro50'] = mostrarDatos($extraido50);
    
    $Centro1 = $_SESSION['Centro1']; $Centro2 = $_SESSION['Centro2']; $Centro3 = $_SESSION['Centro3']; $Centro4 = $_SESSION['Centro4']; $Centro5 = $_SESSION['Centro5']; $Centro6 = $_SESSION['Centro6']; $Centro7 = $_SESSION['Centro7']; $Centro8 = $_SESSION['Centro8']; $Centro9 = $_SESSION['Centro9']; $Centro9 = $_SESSION['Centro9']; $Centro10 = $_SESSION['Centro10'];
    $Centro11 = $_SESSION['Centro11']; $Centro12 = $_SESSION['Centro12']; $Centro13 = $_SESSION['Centro13']; $Centro14 = $_SESSION['Centro14']; $Centro15 = $_SESSION['Centro15']; $Centro16 = $_SESSION['Centro16']; $Centro17 = $_SESSION['Centro17']; $Centro18 = $_SESSION['Centro18']; $Centro19 = $_SESSION['Centro19']; $Centro19 = $_SESSION['Centro19']; $Centro20 = $_SESSION['Centro20'];
    $Centro21 = $_SESSION['Centro21']; $Centro22 = $_SESSION['Centro22']; $Centro23 = $_SESSION['Centro23']; $Centro24 = $_SESSION['Centro24']; $Centro25 = $_SESSION['Centro25']; $Centro26 = $_SESSION['Centro26']; $Centro27 = $_SESSION['Centro27']; $Centro28 = $_SESSION['Centro28']; $Centro29 = $_SESSION['Centro29']; $Centro29 = $_SESSION['Centro29']; $Centro30 = $_SESSION['Centro30'];
    $Centro31 = $_SESSION['Centro31']; $Centro32 = $_SESSION['Centro32']; $Centro33 = $_SESSION['Centro33']; $Centro34 = $_SESSION['Centro34']; $Centro35 = $_SESSION['Centro35']; $Centro36 = $_SESSION['Centro36']; $Centro37 = $_SESSION['Centro37']; $Centro38 = $_SESSION['Centro38']; $Centro39 = $_SESSION['Centro39']; $Centro39 = $_SESSION['Centro39']; $Centro40 = $_SESSION['Centro40'];
    $Centro41 = $_SESSION['Centro41']; $Centro42 = $_SESSION['Centro42']; $Centro43 = $_SESSION['Centro43']; $Centro44 = $_SESSION['Centro44']; $Centro45 = $_SESSION['Centro45']; $Centro46 = $_SESSION['Centro46']; $Centro47 = $_SESSION['Centro47']; $Centro48 = $_SESSION['Centro48']; $Centro49 = $_SESSION['Centro49']; $Centro49 = $_SESSION['Centro49']; $Centro50 = $_SESSION['Centro50'];
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
    	background: #eaeaea;
        font-family: verdana;
        padding: 0px !important;
        margin: 0px !important;
        font-size:13px;
        line-height: 2.8rem;
    }
   /* ::-webkit-scrollbar {
        display: none;
    }*/
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('../imagine/carga6.gif') 50% 50% no-repeat #ffffff;
    }
    .load {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('../imagine/carga6.gif') 50% 50% no-repeat #ffffff;
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
        right:0;
        bottom:0!important;
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
        background: -webkit-linear-gradient(to top, #4f5463,#e7744f);  
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
        height:5em;
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
        border: 1px solid #71788e;
        font-size:14px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .delete:hover {
        color:#ff8080;
        background: #ffffff; 
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
     }
    .nuevo1,
    .nuevo {
        width:10em;
        height: 36px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:#eaeaea;
        color: #666666;
        border: 1px solid #e7744f;
        font-size:14px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .nuevo1 {
        background:#ffffff!important;
    }
    .nuevo2 {
        width:10em;
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
    .nuevo3 {
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
    .nuevo2:hover, .submit:hover,
    .nuevo1:hover, .submit:hover,
    .nuevo:hover, .submit:hover {
        border: 1px solid #71788e;
        color: #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .nuevo4 {
        width:4em;
        height:30px;
        float:left;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:transparent;
        color: #666666;
        border: 1px solid #00cc00;
        font-size:13px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .nuevo4:hover, .submit:hover {
        border: 1px solid #71788e;
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
        border: 1px solid #71788e;
        background:transparent;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
     } 
    #btn2:hover, .submit:hover {
        border: 1px solid #000000;
        font-size:18px;
        color: #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
     #btn3{
        width:34px;
        height: 34px;
        color: #666666;
        border: 1px solid #71788e;
        background:transparent;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
     } 
    #btn3:hover, .submit:hover {
        border: 1px solid #000000;
        color: #f58634;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    #search{
        height: 36px;
        width:16.5em;
        padding-top:1px;
        border: 1px solid #71788e!important;
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
        border: 2px solid #e7744f;
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
    #search:focus ~ .focus-border{
        float:left!important;
        margin-right:-0.4px;
        width: 14em; 
        transition: 0.4s; 
        border: 2px solid #e7744f;
    }
    .col-22{
        width:229px; 
        position: relative;
    } 
     #label {
        position: absolute;
        width: 35px;
        height: 48px;
        line-height: 35px;
        text-align: center;  
        font-size:18px;
    }
    #titulo_empresa {
        font-size:24px;
        font-family:verdanab;
        color:#666666;
        text-align:center;
    }
    #captura {
        font-size:28px;
        font-family:verdanab;
        color:#666666;
        text-align:center;
    }
    #nregistro {
        float:left;
        margin-top:1em;
    }
    .table {
        table-layout: fixed;
        border:hidden!importnat;
        color:#000000;
    }
    .table th {
        background: -webkit-linear-gradient(to top, #4f5463,#e7744f);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        width:100%;
        text-align:center;
        padding:0.6em!important;
        border:1px solid #71788e!important;
    }
    .table td {
        text-align:left;
        padding:1em;
        border:1px solid #71788e!important;
        vertical-align:middle!important;
        height:auto!important;
    }
    .tablaintra {
        background:#eaeaea;
        text-align:center;
        width:100%;
        font-family:verdanab;
        line-height:2.5rem;
        color:#333333;
        font-size:13px;
        border:1px solid #71788e!important
    }
    .tablaintra th {
        background: -webkit-linear-gradient(to top, #4f5463,#e7744f);  
        background: #c6c9d2;
        color:#333333;
        font-family:Verdanab;
        text-align:center;
        border:1px solid #71788e!important;
    }
    .tablaintra td {
        padding:10px;
    }
    #borderout {
        background:transparent!important;
        border:0!important;
        width:30%!important;
    }
    .task-item {
        font-size:14px;
        font-family:verdanab;
        color:#333333;
        background:transparent;
        margin:0;
        border:0;
        transition: font-size 0.6s linear
    }
    .task-item:hover, .submit:hover{
        font-size:15px;
        transition: font-size 0.6s linear;
    }
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
        border: 1px solid #71788e!important;
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
        border: 1px solid #71788e!important;
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
        display:inline-block;
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
        background:url(imagen_checkbox.png) left top no-repeat;                
        cursor:pointer;
        float:right!important;
 
    }
    .radio label {
        display: inline-block;
        position: relative;
        float:center!important;
        margin:-2em!important;
    }
    #check1::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 21px;
        height: 21px;
        background-color:#ffffff;
        border:1px solid #71788e;
        text-align:center;
        margin-top:-1.6em;
        margin-left:2.2em;
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        font-size:24px!important;
        color:#e7744f;
        margin-left:28px;
        margin-top:-26px;
    }
     #check2::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 21px;
        height: 21px;
        background-color:#ffffff;
        border:1px solid #71788e;
        text-align:center;
        margin-top:-1.6em;
        margin-left:-1.6em;
    }
    #check2::after {
        display: inline-block;
        position: absolute;
        font-size:24px!important;
        color:#e7744f;
        margin-left:-0.8em;
        margin-top:-27px;
    }
    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
       
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
        border:1px solid #71788e!important;
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
        border:1px solid #71788e!important;
        font-family:Verdana!important; 
        padding:8px;
    }
    #borderout2 {
        font-family:Verdanab!important;
        text-align:left;
        padding:10px;
    }
    .table_consolidados {
        text-align:center;
        table-layout: fixed;
        border:1px solid #71788e!important;
        font-size:12px;
    }
    .table_consolidados th {
        color:#000000;
        font-family:Verdanab;
        text-align:center;
        line-height: 1.8rem!important;
        width:100%;
        padding:0.6em!important;
        border:1px solid #71788e!important;
    }
    .table_consolidados td {
        color:#333333;
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
        background:#eaeaea;
        font-size:14px;
        line-height: 2.8rem;
    }
    .cuadroseleccion {
        float:right;
        font-family:Verdanab;
        color:#666666;
        margin-right:2em;
    }
    @media (min-width: 1200px) {
   
    }
    @media (min-width: 992px) {
   
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
        #costumModalmenu .modal-lg {
            margin:0!important;
            padding:0!important;
            width:100%!important;
        }
        .table_ind th,
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
        .task-delete, .submit,
        .task-editar, .submit,
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
        }
        .notify-row {
            margin-top:-1.5em;
        }
        .tablabdm td{
            width:100%!important;
            min-height:3em!important;
            height:auto!important;
            text-align:center!important;
        }
         .lista td{
            text-align:center!important;
        }
        .etiquetas td {
            display:inline!important;
        }
        #numeros {
            text-align:center!important;
        }
        #tipo_portada {
            width:100%!important;
        }
    }
    @media (min-width: 768px) {
     
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
        #costumModal12 .modal-title,
        #costumModal13 .modal-m {
            margin:0!important;
            padding:0!important;
            width:100%!important;
        }
    }
    .title {
        font-family:verdanab;
        margin-bottom:2em;
    }
    #registro label {
        position: absolute;
        display: block;
        width: 35px;
        height: 48px;
        line-height: 35px;
        text-align: center;      
    }
    #registro input {
        width:270px;
        height: 35px;
        font-family:verdana;
        padding-left: 15px;
        background:#ffffff;
        border-radius:0px;
        border-color:#71788e!important;
        border-width:1px;
    }
    #registro select {
        width: 270px!important;
        height: 35px;
        font-family:verdana;
        padding-left: 2px;
        padding-right: 2px;
        background:#ffffff;
        border-radius:0px;
        border-color:#71788e!important;
        border-width:1px!important;
    }
    #registro textarea {
        width:270px;
        height: 35px;
        font-family:verdana;
        padding-left: 15px;
        background:#ffffff;
        border-radius:0px;
        border-color:#71788e!important;
        border-width:1px!important;
    }
    .clientes  {
        width:270px;
        text-align:left;
        color:#333333;
        font-family:verdanabi;
        font-size:13px;
        margin-top:0.8em;
    }
  
    #foto_empresa {
        width:14em;
        height:14em;
        object-fit:scale-down;
    }
    .task-delete, .submit,
    .task-delete3, .submit,
    .task-editar, .submit,
    .task-editar3, .submit{
        width:36px;
        height: 36px;
        font-family:Moristonb;
        color: #666666;
        background:transparent;
        border: 1px solid #71788e;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-editar3:hover, .submit:hover,
    .task-editar:hover, .submit:hover {
        color:#e69900;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-delete3:hover, .submit:hover,
    .task-delete:hover, .submit:hover{
        color: #cc0000;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    #boton_edit_admin {
        transform-style: preserve-3d;
        border-radius:0;
        background:#000000;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    #boton_edit_admin:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    
     .no-scroll-y {
    	overflow-y: hidden!important;
    }
    .prelogo {
        fill: currentColor;
        margin: 0 auto;
        position: absolute;
        color:#e5e5e5;
        left: 50%;
        top: 50%;
        margin-left: -42px;
        margin-top: -105px;
    }
    .ctn-preloader {
    	align-items: center;
        cursor: none;
    	display: flex;
        height: 100%;
        justify-content: center;
    	position: fixed;
    	left: 0;
        top: 6em;
    	width: 100%;
        z-index: 900;
    }
    .ctn-preloader .animation-preloader {
    	position: absolute;
        z-index: 100;
    }
    .ctn-preloader .animation-preloader .txt-loading {
        font-size:2em;
        font-family:verdanab;
    	text-align: center;
    	user-select: none;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:before {
        animation: letters-loading 4s infinite;
        color: #000;
        content: attr(data-text-preloader);
        left: 0;
        opacity: 0;
        position: absolute;
        transform: rotateY(-90deg);
        margin-top:1px;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading {
    	color: rgba(0, 0, 0, 0.2);
    	position: relative;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(2):before {
      animation-delay: 0.2s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(3):before {
      animation-delay: 0.4s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(4):before {
      animation-delay: 0.6s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(5):before {
      animation-delay: 0.8s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(6):before {
      animation-delay: 1s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(7):before {
      animation-delay: 1.2s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(8):before {
      animation-delay: 1.4s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(9):before {
      animation-delay: 1.6s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(10):before {
      animation-delay: 1.8s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(11):before {
      animation-delay: 1.8s;
    }
    .ctn-preloader .loader-section {
        height: 100%;
        position: fixed;
        top: 0;
        width: calc(50% + 1px);
    }
    .ctn-preloader .loader-section.section-left {
      left: 0;
    }
    .ctn-preloader .loader-section.section-right {
      right: 0;
    }
    .loaded .animation-preloader {
      opacity: 0;
      transition: 0.3s ease-out;
    }
    .loaded .loader-section.section-left {
      transform: translateX(-101%);
      transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
    }
    .loaded .loader-section.section-right {
      transform: translateX(101%);
      transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
    }
    @keyframes letters-loading {
      0%,
      75%,
      100% {
      	 opacity: 0;
         transform: rotateY(-90deg);
      }
      25%,
      50% {
         opacity: 1;
         transform: rotateY(0deg);
      }
    }
    @media screen and (max-width: 767px) {
    	.ctn-preloader .animation-preloader .txt-loading {
    	  font: bold 3.5em 'verdanab', sans-serif;
    	}
    }
    @media screen and (max-width: 500px) {
    	.ctn-preloader .animation-preloader .txt-loading {
    	  font: bold 2em 'verdanab', sans-serif;
    	}
    } 
    input[type="file"]#file-10,
    input[type="file"]#file-9,
    input[type="file"]#file-8,
    input[type="file"]#file-7 {
        width: 0.1px;
        height: 0.1px;
        color:#000000!important;
        overflow: hidden;
        z-index: -1; 
    }
    .inputfile-8 + label {
        min-width:10.5em;
        color: #000000;
        font-family:verdanabi;
        font-size:13px;
        letter-spacing:0.5px;
        border:1px solid #71788e;
        background-color:transparent;
        padding: 0;
        margin-top:4px;
    }
    .inputfile-0 + label {
        min-width:10.5em;
        color: #000000;
        font-family:verdanabi;
        font-size:13px;
        letter-spacing:0.5px;
        border:0!important;
        background-color:transparent!important;
        padding: 0;
        margin-top:4px;
    }
    .inputfile-8 + label span {
        padding: 0.325rem 1.25rem;
        font-family:verdanabi;
        font-size:13px;
    }
    .inputfile-8 + label strong {
        padding: 0.285rem 1.25rem;
        height: 100%;
        color: #000000;
        font-family:verdanabi;
        background-color: transparent;
        display: inline-block;
        letter-spacing:0.3px;
    }
    .inputfile-8:focus + label strong,
    .inputfile-8.has-focus + label strong,
    .inputfile-8 + label:hover strong {
        background-color: transparent;
    }
    @media screen and (max-width: 50em) {
        .inputfile-8 + label strong {
        display: block;
        }
    }
    #tipo_portada {
        height: 36px;
        padding:0!important;
        margin:0!important;
        background:#eaeaea;
        color: #666666;
        border: 1px solid #71788e;
        font-family:verdanabi;
        font-size:12px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear; 
     }
      .table_ind th {
        background: -webkit-linear-gradient(to top, #4f5463,#e7744f);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        font-size:14px;
        text-align:center;
        padding:0.2em!important;
        border:1px solid #71788e!important;
        padding:0.5em;
    }
    .table_ind td {
        text-align:left;
        border:1px solid #71788e!important;
        vertical-align:middle!important;
        height:5em;
        padding:0.5em;
    }
    .registro textarea {
        font-size:12px;
        color:#006699;
        text-align:center!important;
        vertical-align:middle!important;
        background:transparent;
        width:3em!important;
        margin:0!important;
        border:none;
        border-radius:0!important;
        resize: none;
    }
    .registro p {
        margin-top:10px;
        text-align:center;
        font-family:verdana;
        font-size:12px;
        color:#333333;
    }
     #textarea button{
       border:0;
       background:transparent;
       font-family:verdanab;
       font-size:16px!important;
       text-align:center;
       width:1.8em!important;
       height:1.8em!important;
       vertical-align:middle;
    }
    .popup {
        position:absolute;
        top:5em;
        left:5em;
        right:0;
        bottom:0;
        margin:0;
        width:45%;
        background:#ffffff;
        box-shadow: 1px 1px 3px #222222;
        border: 1px solid #333333;
        border-radius:0;
        z-index:9999;
        padding:10px;
        opacity:0.95;
        font-family:verdanabi;
        color:#000000;
        font-size:13px;
        line-height: 1.8rem!important;
    }
    #cargo1 {
        width:34px;
        height: 34px;
        color: #666666;
        border: 1px solid #71788e;
        background:transparent!important;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
     } 
    #cargo1:hover, .submit:hover {
        border: 1px solid #000000;
        color: #f58634;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    #scroll {
        overflow-y: scroll!important;
    }
    .nuevo3 {
        width:4em;
        height: 30px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:transparent;
        color: #666666;
        border: 1px solid #e7744f;
        font-size:14px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .nuevo3:hover, .submit:hover {
        border: 1px solid #71788e;
        color: #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
     .task-contador {
        font-family:Moristonb;
        color: #666666;
        background:transparent;
        border: 0;
        padding-left:1em;
        padding-top:1em;
    } 
</style>
</head>
<body>
<!--<?php if(isset($_GET["pdf"])) { ?>
<div class="loader no-scroll-y">
<!--	<section>
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="animation-preloader">
                <div class="prelogo">
                </div>
					<div class="txt-loading">
						<span data-text-preloader="C" class="letters-loading">C</span>
						<span data-text-preloader="R" class="letters-loading">R</span>
						<span data-text-preloader="E" class="letters-loading">E</span>
						<span data-text-preloader="A" class="letters-loading">A</span>
						<span data-text-preloader="N" class="letters-loading">N</span>
						<span data-text-preloader="D" class="letters-loading">D</span>
						<span data-text-preloader="O" class="letters-loading">O</span>
						<span data-text-preloader="." class="letters-loading">.</span>
						<span data-text-preloader="." class="letters-loading">.</span>
						<span data-text-preloader="." class="letters-loading">.</span>
						<span style="font-family:verdana;font-size:32px;color:#f58634">  PDF</span>
					</div>
				</div>	
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>
	</section>
    </div> <?php } else {?> <div class="load"></div> <?php } ?>-->
    <section id="container">
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
               <div class="fa fa-bars" style="font-size:22px"></div>
            </div>
            <?php if ($id == 1 || $id == 2) { ?>
                <a href="#costumModal3" data-toggle="modal" class="logo">Cedisalud<span> IPS</span></a>
            <?php } else { ?>
                <a href="#" data-toggle="modal" class="logo">Cedisalud<span> IPS</span></a>
            <?php } ?>
            <div class="nav notify-row">
            <?php if ($id == 1 || $id == 2) { ?>
            <table>
                <tr>
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp
                        <select id='piezas' class="effect-6" style="bakcground:#ffffff">
                            <option></option>
                            <option>SISTEMA</option>
                            <option>AUDITIVO</option>
                            <option>VISUAL</option>
                            <option>CARDIOVASCULAR</option>
                            <option>OSTEOMUSCULAR</option>
                            <option>RESPIRATORIO</option>
                            <option>PSICOSOCIAL</option>
                            <option>BIOLOGICO</option>
                            <option>CRÓNICOS</option>
                            <option>SEGUIMIENTOS</option>
                            <option>RIESGO-PS</option>
                            <option>DIAGNÓSTICO</option>
                            <option selected>AUSENTISMO</option>
                            <option>URNA VIRTUAL</option>
                            <option>LABORATORIO</option>
                            <option>AGENDA</option>
                            <option>CONSENTIMIENTO</option>
                            <option>ISRA</option>
                            <option>NOTIFICACIONES</option></option>
                            <option>CAPACITACIONES</option></option>
                        </select>
                        <span class="focus-border3"></span>
                    </td>
                </tr>
            </table>
            <?php } else { ?>
               <table>
                <tr>
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp
                        <select id='piezas' class="effect-6" style="bakcground:#ffffff">
                            <option></option>
                            <option>SISTEMA</option>
                            <option>AUDITIVO</option>
                            <option>CARDIOVASCULAR</option>
                            <option>OSTEOMUSCULAR</option>
                            <option>RESPIRATORIO</option>
                            <option>BIOLOGICO</option>
                            <option>CRÓNICOS</option>
                            <option>SEGUIMIENTOS</option>
                            <option>RIESGO-PS</option>
                            <option selected>AUSENTISMO</option>
                        </select>
                        <span class="focus-border3"></span>
                    </td>
                </tr>
            </table>
            <?php } ?>
          </div>
          <div>
            <ul class="pull-right top-menu" style="color:#22242a">
                <li><a class="logout" href="<?php echo RUTA_LOGOUT ?>" title="Salir"><i class="fa fa-power-off"></i></a></li>
            </ul>
          </div>
        </header>
        <aside>
            <div id="sidebar">
                <ul class="sidebar-menu" id="nav-accordion"><br>
                    <p class="centered" id="contenido_" style="opacity:10!important;min-height:8em"></p>
                    <p class="centered" id="Razon_" style="font-size:16px;color:#cccccc;opacity:10!important;font-family:verdanab"></p>
                    <p class="centered"  style="font-size:14px;color:#ffffff;opacity:10!important">NIT: <span id="Nit_"></span></p>
                    <li class="sub-menu">
                        <a class="active" href="<?php echo RUTA_AUSENTISMO ?>">
                           <i class="fa fa-folder-o"></i>
                           <span>Gestor</span>
                        </a>
                  </li>
                  <li class="sub-menu">
                        <a href="<?php echo RUTA_INDICADORES ?>">
                           <i class="fa fa-list-ul"></i>
                           <span>Indicadores</span>
                        </a>
                  </li>
                  <li class="sub-menu">
                        <a href="<?php echo RUTA_CONSOLIDADOS ?>">
                           <i class="fa fa-bar-chart"></i>
                           <span>Consolidados</span>
                       </a>
                  </li><br>
                </ul>
            </div>
        </aside>
    </header>
    </section>
    <div class="container-fluid" style="text-align:center;color:#333333"><br><br><br>
        <p style="font-family:verdanab;font-size:26px;color:#333333;text-align:center;margin:0">AUSENTISMO LABORAL</p>
        <p style="font-size:18px;font-family:verdanab;color:#082b29"><span><?php echo $Razon ?> </span><span style="font-family:narrow;font-size:20px;letter-spacing:3px;text-align:center;margin:0;color:#333333">&nbsp&nbspNit:<?php echo $Nit ?></p><br>
            <div id="numeros" style="position:relative;text-align:right"><?php        
            echo $Asegurados_AT1;
            echo $Asegurados_AT2;
            echo $Asegurados_AT3;
            echo $Asegurados_AT4;
            echo $Asegurados_AT5;
            echo $Asegurados_AT6;
            echo $Asegurados_AT7;
            echo $Asegurados_AT8;
            echo $Asegurados_AT9;
            echo $Asegurados_AT10;
            echo $Asegurados_AT11;
            echo $Asegurados_AT12;
        ?></div>
            <table>
                    <tr>
                        <td>
                            <form class="formxlsx" action="../phpspreadsheet/export3.php" method="post">
                                <input type="hidden" name="codigo" value="<?php echo $id_admin_aus ?>"></input>
                                <input type="hidden" name="razon" value="<?php echo $Razon ?>"></input>
                                <input type="hidden" name="id_admin" value="<?php echo $id_admin ?>"></input>
                                <button  type="submit" id="export_data" name='export_data' class="nuevo2" style="width:13em!important">Consolidado.xlsx</button>
                            </form>
                        </td>
                        <td >
                           <select type="text" class="form-control" id="tipo_portada" align="center"style="width:13em;color:#000000">
                               <option selected="true" value="1">CEDISALUD IPS</option>
                               <option value="2">ARL BOLÍVAR</option>
                               <option value="3">AXA COLPATRIA</option>
                            </select>
                        </td>
                        <td>
                             <form role="form" method="post" action="https://www.cedisalud.com.co/ausentismo_?pdf">
                                <input type="hidden" class="form-control" id="portada" name="portada" value="1"></input>
                                <button type="submit" name="empresa" class="nuevo" style="width:13em!important">Consolidado.pdf</button>
                            </form>
                        </td>
                    </tr>
            </table>
        <table id="buscar">
            <td><button class="nuevo" id="rnuevo" href="#costumModal1" data-toggle="modal" style="width:13em!important">Nuevo Registro</button></td>
            <?php switch ($id_admin) {
                case 61:?>
                    <td><button class="nuevo2" id="export_xlsx2" href="" style="width:13em!important">Plantilla .xlsx</button></td>
                   <?php break;  
                default:?>
                    <td><button class="nuevo2" id="export_xlsx1" href="" style="width:13em!important">Plantilla .xlsx</button></td>
                   <?php break;
                
                
               /* case 61:?>
                    <td><button class="nuevo2" id="export_xlsx2" href="" style="width:13em!important">Plantilla .xlsx</button></td>
                   <?php break;
                case 103:?>
                    <td><button class="nuevo2" id="export_xlsx3" href="" style="width:13em!important">Plantilla .xlsx</button></td>
                   <?php break;
                 case 131:?>
                    <td><button class="nuevo2" id="export_xlsx3" href="" style="width:13em!important">Plantilla .xlsx</button></td>
                   <?php break;
                 case 118:?>
                    <td><button class="nuevo2" id="export_xlsx3" href="" style="width:13em!important">Plantilla .xlsx</button></td>
                   <?php break;  
                default:?>
                    <td><button class="nuevo2" id="export_xlsx1" href="" style="width:13em!important">Plantilla .xlsx</button></td>
                   <?php break;     */
            }?>
            <form method="post" id="import_excel_form" enctype="multipart/form-data">
            <td><input type="submit" name="import" id="import" class="btn nuevo2" style="width:13em" value="Importar" /></td>
            <td style="height:auto!important"><input type="file" name="import_excel" name="files1" id="file-7" class="inputfile inputfile-8" data-multiple-caption="{count} archivos seleccionados"/>    
                <label for="file-7">
                <span class="iborrainputfile"></span>
                <strong>Archivo.xlsx</strong>
                </label>
            </td>
            <td><span style="font-family:verdanab;font-size:14px">&nbsp&nbspN° de registros:&nbsp&nbsp</span></td>
            <td><span style="font-family:narrow;color:#e7744f;font-size:28px" id="contador"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            </form>
        </table>
         <table >
            <tr>
                <td><span class="col-22" ><label id="label" class="fa fa-search"></label><input name="search" id="search" type="search" placeholder="Cédula o nombre..." ></input><span class="focus-border"></span></td>
                <td style="border-color:#ffffff;padding:0;color:#000000"><button id="btn2" align="center" style="font-size:20px;color:#f58634" class="fa fa-times" data-title="Quitar filtro" onClick="quitarfiltro()"></button></td>
                <td style="border-color:#ffffff;padding:0;color:#000000"><button href="#costumModal8" data-toggle="modal" id="btn2" align="center" style="font-size:20px;color:#f58634" class="fa fa-filter" data-title="Filtrar" onClick="quitarfiltro()"></button></td>
                <td><p class="task-contador">Año <?php echo $Year2 ?></p></td>
            </tr>
        </table>
        <table  class="table table-sm" align="center" >
            <thead>
                <tr>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <th align="center">N°&nbspde&nbspcédula</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Cargo</th>
                    <th>Codigo</th>
                    <th>Tipo de evento</th>
                    <th>Días de incapacidad</th>
                    <th>Diagnostico</th>
                    <th>Costos</th>
                    <th>Fecha de inicio</th>
                    <th id="borderout"></th>
                    <td id="borderout"></th>
                </tr>
            </thead>    
            <tbody style="border:0!important" id="tasks" align="center"></tbody>
            <tbody style="border:0!important" id="tasks2" align="center"></tbody>
        </table>
    </div>
    
</div>    
<nav>
    <a href="#container" class="scroll"><i class="fa fa-angle-up"></i></a>
</nav>
<div class="container"><br>
    <div class="col-lg-4 col-lg-push-8" align="center">
        <p style="font-family:Narrow;color:#666666;font-size:20px;letter-spacing:1px;">Certificado <span style="color:#e7744f">SSL &nbsp</span><a id="certificado" title="Certificado SSL" href="#costumModal12" style="padding-top:0px;padding-bottom:0" data-toggle="modal" target="_blank" aria-hidden="true"><img src="https://www.cedisalud.com.co/imagine/certificado.png" width="52" height="50"/></a></p>
    </div>
    <div class="col-lg-8 col-lg-pull-4">
        <span style="font-family:verdana;color:#333333">Diseño&nbspy&nbspdesarrollo&nbspweb: <a href="https://www.perfilar.com.co" style="letter-spacing:2px;font-size:14px">PERFILAR</a></span><br> 
        <span style="font-family:verdana;color:#333333">Copyright © 2020 - Medellín (Colombia)</span>
    </div>
</div>
</section>
<div id="costumModal1" class="modal" data-easein="slideLeftIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-lg" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <p style="font-size:24px;line-height:1em;font-family:Narrow;letter-spacing:2px">REGISTRO DE AUSENTISMO</p>
                    <?php
                         include_once 'plantillas/ausentismovacio.inc.php';
                    ?> 
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal2" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-lg" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <p style="font-size:24px;line-height:1em;font-family:Narrow;letter-spacing:2px">EDICIÓN DE DATOS AUSENTISMO</p>
                <?php
                    include_once 'plantillas/ausentismoeditar.inc.php';
                ?>
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal3" class="modal fullscreen-modal" data-easein="slideRightIn" data-backdrop="static"> 
    <div class="modal-dialog modal-lg" align="justify" style="border-radius:0px;background-color:#ffffff;z-index:9999;height:auto">
        <div class="modal-header">
            <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
        </div>
        <div class="modal-body" style="text-align:center;padding:3em">
        <p style="font-family:verdanab;font-size:22px">LISTA DE CLIENTES</p>
        <!--<p id="nregistro"><button class="nuevo_cliente" data-toggle="modal">Nuevo Cliente</button></p><br><br>-->
        <table class="lista" style="width:100%"><br>
            <thead>
                <tr>
                    <th style="font-family:Verdanab">NIT</th>
                    <th>Razón Social</th>
                    <th>Sede</th>
                    <th>Contacto</th>
                    <th>Celular</th>
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
<div id="costumModal4" class="modal" data-easein="flash" data-backdrop="static"> 
    <div class="modal-dialog modal-title" style="background:#ffffff">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" style="text-align:center;font-size:14px;">
                <p style="color:#666666;font-family:verdana;letter-spacing:0.4px">¿Deseas eliminar a <span id="nombre_delete" style="color:#333333;font-family:verdanab"></span>&nbsp<span id="apellido1_delete" style="color:#666666;font-family:verdanab"></span> del registro?</p>
                <p id="boton-delete"><button type"submit" data-dismiss="modal" aria-hidden="true" class="delete">Eliminar</button><br></p>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal11" class="modal" data-easein="whirlIn" data-backdrop="static"> 
    <div class="modal-dialog modal-lg">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff;color:#333333">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                       <p style="font-size:20px;font-family:Moristonb;text-align:center;color:#333333"><span id="Nombrebdm"></span> <span id="Apellido1bdm"></span> <span id="Apellido2bdm"></span></p><br>
                        <table class="tablabdm" width="100%">
                           <tr>
                               <td id="borderout2">Cédula de ciudadanía:&nbsp</td>
                               <td class="bdm" id="Cedulabdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Cargo que ocupa en la empresa:&nbsp</td>
                               <td class="bdm" id="Cargobdm"></td>
                           </tr>
                            <tr>
                               <td id="borderout2">Área en la que trabaja:&nbsp</td>
                               <td class="bdm" id="Seccionbdm"></td>
                           </tr>
                            <tr>
                               <td id="borderout2">Tipo de contrato:&nbsp</td>
                               <td class="bdm" id="Contratobdm"></td>
                           </tr>
                            <tr>
                               <td id="borderout2">Centro de costos:&nbsp</td>
                               <td class="bdm" id="Centrobdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Mes del evento:&nbsp</td>
                               <td class="bdm" id="Mesbdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Tipo de evento:&nbsp</td>
                               <td class="bdm" id="Tipobdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Fecha de inicio de incapacidad:&nbsp</td>
                               <td class="bdm" id="Iniciobdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Fecha de terminación de incapacidad:&nbsp</td>
                               <td class="bdm" id="Terminacionbdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Días de incapacidad:&nbsp</td>
                               <td class="bdm" id="Diasbdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Prórroga:&nbsp</td>
                               <td class="bdm" id="Prorrogabdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Total días de incapacidad:&nbsp</td>
                               <td class="bdm" id="Totalbdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Días cargados:&nbsp</td>
                               <td class="bdm" id="Cargadobdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Código diagnóstico:&nbsp</td>
                               <td class="bdm" id="Codigobdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Diagnóstico:&nbsp</td>
                               <td class="bdm" id="Diagnosticobdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Salario base:&nbsp</td>
                               <td class="bdm" id="Salariobdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Costos asegurados A.T. por la ARL:&nbsp</td>
                               <td class="bdm" id="Asegurados_ATbdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Costos asegurados A.C. - E.G. por la EPS:&nbsp</td>
                               <td class="bdm" id="Asegurados_AC_EGbdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Costos asegurados A.C. - E.G. por la AFP:&nbsp</td>
                               <td class="bdm" id="Asegurados_AFPbdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Costos asumidos A.C. - E.G. por la empresa:&nbsp</td>
                               <td class="bdm" id="Asumidos_AC_EGbdm"></td>
                           </tr>
                           <tr>
                               <td id="borderout2">Fecha y hora del registro:&nbsp</td>
                               <td class="bdm"><span id="Fechabdm"></span></td>
                           </tr>
                       </table>
                 </div><br><br>    
            <div class="modal-footer" style="margin-top:-2em">
              <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal12" class="modal" data-easein="flipBounceYIn" data-backdrop="static">  
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
                    <input type="hidden" class="form-control" id="id_redireccion">
                    <button id="boton_edit_admin" type="submit" class="btn btn btn-default btn-block" style="font-size:14px!important;width:270px!important;height:35px;line-height:1em;" name="enviar">Enviar</button>                               
                </div><br>
                <p style="font-size:22px;line-height:1em;font-family:Narrow;letter-spacing:2px;color:#666666">Redirección del cliente</p>
                <style>
                     #redireccion {
                        width: 150px;
                        height: 35px;
                        font-family:verdana;
                        color:#000000;
                        padding-left: 4px;
                        background:#ffffff;
                        border-radius:0px;
                        border:1px solid #71788e!important;
                    }
                </style>
                <div>
                    <select  id="redireccion" class="select">
                        <option></option>
                        <option>ADMINISTRADOR</option>
                        <option>RIESGO-PS</option>
                        <option>AUSENTISMO</option>
                    </select>
                </div>
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
            <div id="message" style="font-family:verdana;font-size:14px;text-align:center"></div>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div>
<div id="costumModal8" class="modal" data-easein="bounceLeftIn" data-backdrop="static">  
    <div class="modal-dialog modal-sm" style="box-shadow:0px 4px 3px rgba(0,0,0,.4);margin-left:0;margin-top:0px;line-height: 2.8rem">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff;opacity:0.9">
            <div class="modal-header">
                <button type="button" id="button" class="close" data-dismiss="modal" aria-hidden="true"><span style=" font-size:22px!important" class="fa fa-times"></span></button>
            </div>
            <div class="modal-body" id="demo">
                <p style="font-family:Narrow!important;color:#666666;font-size:26px;letter-spacing:1px;text-align:center">FILTROS</span></p><br>
                <p style="font-family:Narrow!important;color:#e7744f;font-size:20px;letter-spacing:1px">Centro de costo:</p>
                <form name="form_">
                    <table>
                        <tr>
                            <td>
                               <input type="text" id="centro" name ="centro" value=""/> 
                            </td>
                            <td>
                                <td style="border-color:#ffffff;padding:0;color:#000000"><button id="btn3" align="center" style="font-size:20px" class="fa fa-paper-plane-o" data-title="Filtrar"></button></td>
                            </td>
                        </tr>
                    </table><br>
                </form>
                <p id="Centro"></p><br>
                <p style="font-family:Narrow;font-size:20px;color:#e7744f">Informe .pdf:</p>
                    <table style="width:100%;text-align:center">
                        <tr>
                           <td><input type="submit" id="n_2018" class="nuevo3" value="2018" /></td>
                           <td><input type="submit" id="n_2019" class="nuevo3" value="2019" /></td>
                           <td><input type="submit" id="n_2020" class="nuevo3" value="2020" /></td>
                        </tr>
                        <tr>
                           <td><input type="submit" id="n_2021" class="nuevo3" value="2021" /></td>
                           <td><input type="submit" id="n_2022" class="nuevo3" value="2022" /></td>
                           <td><input type="submit" id="n_2023" class="nuevo3" value="2023" /></td>
                        </tr>
                        <tr>
                           <td><input type="submit" id="n_2024" class="nuevo3" value="2024" /></td>
                           <td><input type="submit" id="n_2025" class="nuevo3" value="2025" /></td>
                           <td><input type="submit" id="n_2026" class="nuevo3" value="2026" /></td>
                        </tr>
                    </table><br>
                    
                    <p style="font-family:Narrow;font-size:20px;color:#00cc00;letter-spacing:1px">Consolidado .xlsx:</p>
                        <form name="form_certificada">
                            <table>
                                <tr>
                                    <td>
                                       <p style="font-family:verdanab">Inicio&nbsp&nbsp</p>
                                    </td>
                                    <td>
                                        <input type="date" id="Inicio0"/> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <p style="font-family:verdanab">Fin&nbsp&nbsp</p>
                                    </td>
                                    <td>
                                        <input type="date" id="Terminacion0" name ="centro" value=""/> 
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </p>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>               
    </div>
</div>
<style>
    .table_ind th {
        width:7%;
    }
    .table_ind td {
        text-align:center;
    }
</style>
<div id="costumModalmenu" class="modal" data-easein="" data-backdrop="static"> 
    <div class="modal-dialog modal-lg" align="justify" style="border-radius:0px;background-color:#ffffff;width:100%;margin-top:0">
       <div class="modal-header">
            <button type="button" class="close indicadores" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
        </div>
        <div class="modal-body" style="text-align:center">
            <p id="centro_nombre" style="font-family:verdanab;font-size:24px"></p>
            <input type="hidden" id="id_centro" ></input>
            <p style="font-family:Narrow!important;color:#666666;font-size:20px;letter-spacing:1px;text-align:center">Indicadores Generales <span id="Year_"></span></p>
            <input type="hidden" id="Year__"></input>
            <table style="width:70%">
                <tr>
                    <td style="font-family:verdanab;font-size:14px">2018</td>
                    <td class="radio"> 
                        <input type="radio" id="radio1" class="N1" name ="N1" value="2018" />
                        <label id="check2" for="radio1">
                    </td> 
                    <td style="font-family:verdanab;font-size:14px">2019</td>
                    <td class="radio"> 
                        <input type="radio" id="radio2"  class="N1" name ="N1" value="2019" />
                        <label id="check2" for="radio2">
                    </td> 
                    <td style="font-family:verdanab;font-size:14px">2020</td>
                    <td class="radio"> 
                        <input type="radio" id="radio3"  class="N1" name ="N1" value="2020" />
                        <label id="check2" for="radio3">
                    </td>
                    <td style="font-family:verdanab;font-size:14px">2021</td>
                    <td class="radio"> 
                        <input type="radio" id="radio4"  class="N1" name ="N1" value="2021" />
                        <label id="check2" for="radio4">
                    </td>
                    <td style="font-family:verdanab;font-size:14px">2022</td>
                    <td class="radio"> 
                        <input type="radio" id="radio5"  class="N1" name ="N1" value="2022"/>
                        <label id="check2" for="radio5">
                    </td>
                    <td style="font-family:verdanab;font-size:14px">2023</td>
                    <td class="radio"> 
                        <input type="radio" id="radio6"  class="N1" name ="N1" value="2023"/>
                        <label id="check2" for="radio6">
                    </td>
                    <td style="font-family:verdanab;font-size:14px">2024</td>
                    <td class="radio"> 
                        <input type="radio" id="radio7"  class="N1" name ="N1" value="2024" />
                        <label id="check2" for="radio7">
                    </td>
                    <td style="font-family:verdanab;font-size:14px">2025</td>
                    <td class="radio"> 
                        <input type="radio" id="radio8"  class="N1" name ="N1" value="2025" />
                        <label id="check2" for="radio8">
                    </td>
                    <td style="font-family:verdanab;font-size:14px">2026</td>
                    <td class="radio"> 
                        <input type="radio" id="radio9"  class="N1" name ="N1" value="2026" />
                        <label id="check2" for="radio9">
                    </td>
                <tr>
            </table>            

            <table  class="table_ind table-sm" align="center" style=";width:100%!important"><br>
                <thead>
                    <tr>
                        <th style="width:10%"><span class="numerador">Período</span>/<span class="denominador">Variable</span></th>
                        <th>En.</th>
                        <th>Febr.</th>
                        <th>Mzo.</th>
                        <th>Abr.</th>
                        <th>My.</th>
                        <th>Jun.</th>
                        <th>Jul.</th>
                        <th>Ag.</th>
                        <th>Sept.</th>
                        <th>Oct.</th>
                        <th>Nov.</th>
                        <th>Dic.</th>
                        <th style="font-family:verdanab">Anual</th>
                    </tr>
                </thead>    
                <tr>
                    <td style="font-family:verdanab;color:#333333">N° total de trabajadores</td>
                    <td class="registro"><input id="enero_NNT" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="febrero_NNT" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="marzo_NNT" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center"  value=""/></input></td>
                    <td class="registro"><input id="abril_NNT" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center"  value=""/></input></td>
                    <td class="registro"><input id="mayo_NNT"  style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="junio_NNT"  style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="julio_NNT"  style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="agosto_NNT"  style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="septiembre_NNT"  style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="octubre_NNT"  style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="noviembre_NNT"  style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="diciembre_NNT"  style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><p id="anual_NNT" style="font-family:verdanab;color:#000000!important;border:0!important;width:100%;text-align:center"  value=""/></p></td>
                </tr>
                <tr>
                    <td style="font-family:verdanab;color:#333333">N° de horas extras en el mes</td>
                    <td class="registro"><input id="enero_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="febrero_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="marzo_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="abril_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="mayo_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="junio_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="julio_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="agosto_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="septiembre_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="octubre_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="noviembre_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><input id="diciembre_HE" style="border:0!important;width:100%; font-size:12px;color:#006699;text-align:center" value=""/></input></td>
                    <td class="registro"><p id="anual_HE" style="font-family:verdanab;color:#000000!important;border:0!important;width:100%;text-align:center" value=""/></p></td>
                </tr>
                <tr>
                    <td style="font-family:verdanab;color:#333333">N° de horas h. trabajadas</td>
                    <td class="registro"><p id="enero_HHTP"></p></td>
                    <td class="registro"><p id="febrero_HHTP"></p></td>
                    <td class="registro"><p id="marzo_HHTP"></p></td>
                    <td class="registro"><p id="abril_HHTP"></p></td>
                    <td class="registro"><p id="mayo_HHTP"></p></td>
                    <td class="registro"><p id="junio_HHTP"></p></td>
                    <td class="registro"><p id="julio_HHTP"></p></td>
                    <td class="registro"><p id="agosto_HHTP"></p></td>
                    <td class="registro"><p id="septiembre_HHTP"></p></td>
                    <td class="registro"><p id="octubre_HHTP"></p></td>
                    <td class="registro"><p id="noviembre_HHTP"></p></td>
                    <td class="registro"><p id="diciembre_HHTP"></p></td>
                    <td class="registro"><p style="font-family:verdanab;color:#000000!important" id="anual_HHTP"/></p></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div>
<!-- Modal de progreso -->
<div class="modal fade" id="uploadProgressModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Importando archivo</h5>
            </div>
            <div class="modal-body">
                <div class="progress mb-3" style="height: 25px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" 
                         role="progressbar" 
                         style="width: 0%" 
                         aria-valuenow="0" 
                         aria-valuemin="0" 
                         aria-valuemax="100">
                        <span id="progressPercent" style="color: #fff;">0%</span>
                    </div>
                </div>
                <p id="progressMessage" class="text-center">Iniciando carga...</p>
                <p id="progressStatus" class="text-center text-muted small"></p>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="delete_id2"></input>
<input type="hidden" id="id_codigo"></input>
<input type="hidden" id="delete_id"></input>
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
<script src="<?php echo RUTA_JS ?>codigo_ausentismo1.js"></script>
<script src="<?php echo RUTA_JS ?>codigo_ausentismo2.js"></script>
<script>
    $(document).ready(function() {
       // $("#costumModal8").modal("show");
        $(document).on('click', '.indicadores', (e) => {
            location.href="../ausentismo?*=1";
        });
        if(<?php echo $costumModalmenu?> == 1) {
            $("#costumModal8").modal("show");
        }
         $(document).on('click', '#n_2018', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2018,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../ausentismo";
            });
        });
         $(document).on('click', '#n_2019', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2019,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../ausentismo";
            });
        });
         $(document).on('click', '#n_2020', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2020,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../ausentismo";
            });
        });
         $(document).on('click', '#n_2021', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2021,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../ausentismo";
            });
        });
         $(document).on('click', '#n_2022', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2022,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../ausentismo";
            });
        });
         $(document).on('click', '#n_2023', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2023,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../ausentismo";
            });
        });
         $(document).on('click', '#n_2024', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2024,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../ausentismo";
            });
        });
         $(document).on('click', '#n_2025', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2025,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../ausentismo";
            });
        });
         $(document).on('click', '#n_2026', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2026,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../ausentismo";
            });
        });
        
        fetchTasks_cargo();
        fetchTasks_cargo2();
        $(document).on('click', '#import2', (e) => {
        var id_admin = '<?php echo $id_admin ?>';   
        var formData = new FormData();
        var file = $('#file-10')[0].files[0];
        formData.append("file", file);
        formData.append("id_admin", id_admin); 
        event.preventDefault();
            $.ajax({
                url:"../phpspreadsheet/importar5.php",
                method:"POST",
                data:formData,
                contentType:false,
                cache:false,
                processData:false,
                beforeSend:function(){
                $('#import').attr('disabled', 'disabled');
                $('#import').val('Importando...');
                },
                success:function(response) {
                    const tasks = JSON.parse(response);
                    let mensaje = '';
                    let confirmacion = '';
                    tasks.forEach(task => {
                        mensaje += `${task.mensaje}`
                        confirmacion += `${task.confirmacion}`
                    });
                    $('#import').attr('disabled', false);
                    $('#import').val('Importar');
                    fetchTasks_cargo();
                    fetchTasks_cargo2();
                }
            })
        });
        $("#cargo1").click(function (event) {
            event.preventDefault();
            var id_admin = '<?php echo $id_admin ?>';
                var cargo_1  = $('#cargo_1').val();
                const postData = {
                    cargo_1:cargo_1, 
                    id_admin :id_admin 
                };
                const url = '../insertar_cargo.php';
                $.post(url,  postData, (response) => {
                   fetchTasks_cargo();
                   fetchTasks_cargo2();
                   document.form_cargo.reset();
                });   
        });
         $(document).on('click', '.eliminar_cargo', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_cargo = $(element).attr('taskId');
                $.ajax({
                    type: "post",
                    url: "../eliminarbdg.php",
                    data: "id_cargo=" + id_cargo,
                    success: function(response) {
                        fetchTasks_cargo();
                        fetchTasks_cargo2();
                    }
                });
        }); 
        function fetchTasks_cargo() {
            var id_admin = '<?php echo $id_admin ?>';
            $.ajax({
                type: "post",
                url: "../cargo.inc.php",
                data: "id_admin=" + id_admin,
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `
                            <tr id="textarea" taskId="${task.id}">
                                <td id="td"><a href="" style="font-family:verdanab;color:#000000;text-align:left!important">${task.Cargo}</a><button class="eliminar_cargo" data-title="Eliminar" style="float:right"><span class="fa fa-trash"></span></button></td>
                            </tr>   `
                    });
                    $('#cargo_').html(template);
                }
            });
        }
        function fetchTasks_cargo2() {
            var id_admin = '<?php echo $id_admin ?>';
            $.ajax({
                type: "post",
                url: "../select_cargo.php",
                data: "id_admin=" + id_admin,
                success: function(response) {
                    const tasks0 = JSON.parse(response);
                    tasks0.push({"Cargo":" "});
                    const tasks = tasks0.reverse();
                    let template = '';
                    tasks.forEach(task => {
                        template += `<option>${task.Cargo}</option><br>`
                    });
                    $('#CargoIn').html(template);
                }
            });
        }
    })    
	function cargo1() {
        $('#popup1').slideDown(1);
    }
    $(document).on('click', '.popup_delete', (e) => {
    	$('#popup1').slideUp(1);
    });
    $(document).on('change', '#tipo_portada', (e) => {
        var portada = $('#tipo_portada').val();
        document.getElementById("portada").value = (portada);
    })
    $(window).load(function(){ 
        //$("#costumModal1").modal("show");
        $('#popup1').slideUp(1);
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
    function quitarfiltro(){
        $('#tasks2').hide();
        $('#tasks').show();
        document.getElementById("search").value = "";
    };
    $(document).ready(function() {
        fetchTasks();
        fetchTasks3();
        $("#btn3").click(function (event) {
            event.preventDefault();
            var id_admin = '<?php echo $id_admin_aus ?>';
            var centro  = $('#centro').val();
            const postData = {
                centro:centro, 
                id_admin :id_admin 
            };
            const url = '../filtro_ausentismo2.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks3();
                fetchTasks4();
                document.form_.reset();
            });   
        });
         $(document).on('click', '.centro_crear', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_centro = $(element).attr('taskId');
            const postData = {
                centro_crear:'centro_crear',
                id_centro :id_centro 
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
               fetchTasks3();
               fetchTasks();
            });
        });
        $(document).on('click', '.centro_eliminar', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_centro = $(element).attr('taskId');
            const postData = {
                centro_eliminar:'centro_eliminar',
                id_centro :id_centro 
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks3();
                fetchTasks();
            });
        });
        function Radio_Value(ctrl) {
            for(i=0;i<ctrl.length;i++)
            if(ctrl[i].checked) return ctrl[i].value;
        }
        document.querySelector('#radio9').checked = true;
        $(document).on('contextmenu', '#Centro', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_centro = $(element).attr('taskId1');
            const id_admin = $(element).attr('taskId2');
            const centro = $(element).attr('taskId1');

            document.querySelector('#radio9').checked = true;
            $("#costumModalmenu").modal("show");
    
            document.getElementById("id_centro").value = (id_centro);
            
            var Year = 2026; 
            $(".N1").click(function () {	 
                Year = $('input:radio[name=N1]:checked').val();
                lector2();
                lector3();
                lector4();
                Year_e();
            })
            Year_e();
            function Year_e() {
                $('#Year_').html(Year);
                 document.getElementById("Year__").value = (Year);
            }

            $('#enero_NNT').blur(function () {
                const id_centro = $('#id_centro').val();
                var enero_NNT = $('#enero_NNT').val();
                var enero_HE0 = $('#enero_HE').val();
                var enero_HE = parseInt(enero_HE0);
                var enero_NNT2 = (((enero_NNT * 8)* 24) + enero_HE);
                var Year = $('#Year__').val();
                const postData = {
                   enero_NNT: enero_NNT,
                   enero_NNT2: enero_NNT2,
                   id_admin: id_admin,
                   Year: Year,
                   centro: centro,
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#febrero_NNT').blur(function () {
                const id_centro = $('#id_centro').val();
                var febrero_NNT = $('#febrero_NNT').val();
                var febrero_HE0 = $('#febrero_HE').val();
                var febrero_HE = parseInt(febrero_HE0);
                var febrero_NNT2 = (((febrero_NNT * 8)* 24) + febrero_HE);
                var Year = $('#Year__').val();
                const postData = {
                   febrero_NNT: febrero_NNT,
                   febrero_NNT2: febrero_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#marzo_NNT').blur(function () {
                const id_centro = $('#id_centro').val();
                var marzo_NNT = $('#marzo_NNT').val();
                var marzo_HE0 = $('#marzo_HE').val();
                var marzo_HE = parseInt(marzo_HE0);
                var marzo_NNT2 = (((marzo_NNT * 8)* 24) + marzo_HE);
                var Year = $('#Year__').val();
                const postData = {
                   marzo_NNT: marzo_NNT,
                   marzo_NNT2: marzo_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#abril_NNT').blur(function () {
                const id_centro = $('#id_centro').val();
                var abril_NNT = $('#abril_NNT').val();
                var abril_HE0 = $('#abril_HE').val();
                var abril_HE = parseInt(abril_HE0);
                var abril_NNT2 = (((abril_NNT * 8)* 24) + abril_HE);
                var Year = $('#Year__').val();
                const postData = {
                   abril_NNT: abril_NNT,
                   abril_NNT2: abril_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
             $('#mayo_NNT').blur(function () {
                 const id_centro = $('#id_centro').val();
                var mayo_NNT = $('#mayo_NNT').val();
                var mayo_HE0 = $('#mayo_HE').val();
                var mayo_HE = parseInt(mayo_HE0);
                var mayo_NNT2 = (((mayo_NNT * 8)* 24) + mayo_HE);
                var Year = $('#Year__').val();
                const postData = {
                   mayo_NNT: mayo_NNT,
                   mayo_NNT2: mayo_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#junio_NNT').blur(function () {
                const id_centro = $('#id_centro').val();
                var junio_NNT = $('#junio_NNT').val();
                var junio_HE0 = $('#junio_HE').val();
                var junio_HE = parseInt(junio_HE0);
                var junio_NNT2 = (((junio_NNT * 8)* 24) + junio_HE);
                var Year = $('#Year__').val();
                const postData = {
                   junio_NNT: junio_NNT,
                   junio_NNT2: junio_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
             $('#julio_NNT').blur(function () {
                 const id_centro = $('#id_centro').val();
                var julio_NNT = $('#julio_NNT').val();
                var julio_HE0 = $('#julio_HE').val();
                var julio_HE = parseInt(julio_HE0);
                var julio_NNT2 = (((julio_NNT * 8)* 24) + julio_HE);
                var Year = $('#Year__').val();
                const postData = {
                   julio_NNT: julio_NNT,
                   julio_NNT2: julio_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#agosto_NNT').blur(function () {
                const id_centro = $('#id_centro').val();
                var agosto_NNT = $('#agosto_NNT').val();
                var agosto_HE0 = $('#agosto_HE').val();
                var agosto_HE = parseInt(agosto_HE0);
                var agosto_NNT2 = (((agosto_NNT * 8)* 24) + agosto_HE);
                var Year = $('#Year__').val();
                const postData = {
                   agosto_NNT: agosto_NNT,
                   agosto_NNT2: agosto_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#septiembre_NNT').blur(function () {
                const id_centro = $('#id_centro').val();
                var septiembre_NNT = $('#septiembre_NNT').val();
                var septiembre_HE0 = $('#septiembre_HE').val();
                var septiembre_HE = parseInt(septiembre_HE0);
                var septiembre_NNT2 = (((septiembre_NNT * 8)* 24) + septiembre_HE);
                var Year = $('#Year__').val();
                const postData = {
                   septiembre_NNT: septiembre_NNT,
                   septiembre_NNT2: septiembre_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#octubre_NNT').blur(function () {
                const id_centro = $('#id_centro').val();
                var octubre_NNT = $('#octubre_NNT').val();
                var octubre_HE0 = $('#octubre_HE').val();
                var octubre_HE = parseInt(octubre_HE0);
                var octubre_NNT2 = (((octubre_NNT * 8)* 24) + octubre_HE);
                var Year = $('#Year__').val();
                const postData = {
                   octubre_NNT: octubre_NNT,
                   octubre_NNT2: octubre_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#noviembre_NNT').blur(function () {
                const id_centro = $('#id_centro').val();
                var noviembre_NNT = $('#noviembre_NNT').val();
                var noviembre_HE0 = $('#noviembre_HE').val();
                var noviembre_HE = parseInt(noviembre_HE0);
                var noviembre_NNT2 = (((noviembre_NNT * 8)* 24) + noviembre_HE);
                var Year = $('#Year__').val();
                const postData = {
                   noviembre_NNT: noviembre_NNT,
                   noviembre_NNT2: noviembre_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            })
            $('#diciembre_NNT').blur(function () {
                const id_centro = $('#id_centro').val();
                var diciembre_NNT = $('#diciembre_NNT').val();
                var diciembre_HE0 = $('#diciembre_HE').val();
                var diciembre_HE = parseInt(diciembre_HE0);
                var diciembre_NNT2 = (((diciembre_NNT * 8)* 24) + diciembre_HE);
                var Year = $('#Year__').val();
                const postData = {
                   diciembre_NNT: diciembre_NNT,
                   diciembre_NNT2: diciembre_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            })
            $('#enero_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var enero_NNT = $('#enero_NNT').val();
                var enero_HE0 = $('#enero_HE').val();
                var enero_HE = parseInt(enero_HE0);
                var enero_NNT2 = (((enero_NNT * 8)* 24) + enero_HE);
                var Year = $('#Year__').val();
                const postData = {
                   enero_HE: enero_HE,
                   enero_NNT2: enero_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#febrero_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var febrero_NNT = $('#febrero_NNT').val();
                var febrero_HE0 = $('#febrero_HE').val();
                var febrero_HE = parseInt(febrero_HE0);
                var febrero_NNT2 = (((febrero_NNT * 8)* 24) + febrero_HE);
                var Year = $('#Year__').val();
                const postData = {
                   febrero_HE: febrero_HE,
                   febrero_NNT2: febrero_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#marzo_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var marzo_NNT = $('#marzo_NNT').val();
                var marzo_HE0 = $('#marzo_HE').val();
                var marzo_HE = parseInt(marzo_HE0);
                var marzo_NNT2 = (((marzo_NNT * 8)* 24) + marzo_HE);
                var Year = $('#Year__').val();
                const postData = {
                   marzo_HE: marzo_HE,
                   marzo_NNT2: marzo_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#abril_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var abril_NNT = $('#abril_NNT').val();
                var abril_HE0 = $('#abril_HE').val();
                var abril_HE = parseInt(abril_HE0);
                var abril_NNT2 = (((abril_NNT * 8)* 24) + abril_HE);
                var Year = $('#Year__').val();
                const postData = {
                   abril_HE: abril_HE,
                   abril_NNT2: abril_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#mayo_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var mayo_NNT = $('#mayo_NNT').val();
                var mayo_HE0 = $('#mayo_HE').val();
                var mayo_HE = parseInt(mayo_HE0);
                var mayo_NNT2 = (((mayo_NNT * 8)* 24) + mayo_HE);
                var Year = $('#Year__').val();
                const postData = {
                   mayo_HE: mayo_HE,
                   mayo_NNT2: mayo_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#junio_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var junio_NNT = $('#junio_NNT').val();
                var junio_HE0 = $('#junio_HE').val();
                var junio_HE = parseInt(junio_HE0);
                var junio_NNT2 = (((junio_NNT * 8)* 24) + junio_HE);
                var Year = $('#Year__').val();
                const postData = {
                   junio_HE: junio_HE,
                   junio_NNT2: junio_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#julio_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var julio_NNT = $('#julio_NNT').val();
                var julio_HE0 = $('#julio_HE').val();
                var julio_HE = parseInt(julio_HE0);
                var julio_NNT2 = (((julio_NNT * 8)* 24) + julio_HE);
                var Year = $('#Year__').val();
                const postData = {
                   julio_HE: julio_HE,
                   julio_NNT2: julio_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#agosto_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var agosto_NNT = $('#agosto_NNT').val();
                var agosto_HE0 = $('#agosto_HE').val();
                var agosto_HE = parseInt(agosto_HE0);
                var agosto_NNT2 = (((agosto_NNT * 8)* 24) + agosto_HE);
                var Year = $('#Year__').val();
                const postData = {
                   agosto_HE: agosto_HE,
                   agosto_NNT2: agosto_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#septiembre_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var septiembre_NNT = $('#septiembre_NNT').val();
                var septiembre_HE0 = $('#septiembre_HE').val();
                var septiembre_HE = parseInt(septiembre_HE0);
                var septiembre_NNT2 = (((septiembre_NNT * 8)* 24) + septiembre_HE);
                var Year = $('#Year__').val();
                const postData = {
                   septiembre_HE: septiembre_HE,
                   septiembre_NNT2: septiembre_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#octubre_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var octubre_NNT = $('#octubre_NNT').val();
                var octubre_HE0 = $('#octubre_HE').val();
                var octubre_HE = parseInt(octubre_HE0);
                var octubre_NNT2 = (((octubre_NNT * 8)* 24) + octubre_HE);
                var Year = $('#Year__').val();
                const postData = {
                   octubre_HE: octubre_HE,
                   octubre_NNT2: octubre_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            });
            $('#noviembre_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var noviembre_NNT = $('#noviembre_NNT').val();
                var noviembre_HE0 = $('#noviembre_HE').val();
                var noviembre_HE = parseInt(noviembre_HE0);
                var noviembre_NNT2 = (((noviembre_NNT * 8)* 24) + noviembre_HE);
                var Year = $('#Year__').val();
                const postData = {
                   noviembre_HE: noviembre_HE,
                   noviembre_NNT2: noviembre_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            })
            $('#diciembre_HE').blur(function () {
                const id_centro = $('#id_centro').val();
                var diciembre_NNT = $('#diciembre_NNT').val();
                var diciembre_HE0 = $('#diciembre_HE').val();
                var diciembre_HE = parseInt(diciembre_HE0);
                var diciembre_NNT2 = (((diciembre_NNT * 8)* 24) + diciembre_HE);
                var Year = $('#Year__').val();
                const postData = {
                   diciembre_HE: diciembre_HE,
                   diciembre_NNT2: diciembre_NNT2,
                   id_admin: id_admin,
                   centro: centro,
                   Year: Year
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                   lector2();
                });
            })
            lector2();
            function lector2() {
                $.ajax({
                type: "post",
                url: "../item_au.php",
                data: "id_admin=" + id_admin + "&Year=" + Year + "&Centro=" + centro,
                success: function (response) {
                    console.log(response)
                const tasks = JSON.parse(response);
                let enero_NNT0 = '';
                let febrero_NNT0 = '';
                let marzo_NNT0 = '';
                let abril_NNT0 = '';
                let mayo_NNT0 = '';
                let junio_NNT0 = '';
                let julio_NNT0 = '';
                let agosto_NNT0 = '';
                let septiembre_NNT0 = '';
                let octubre_NNT0 = '';
                let noviembre_NNT0 = '';
                let diciembre_NNT0 = '';
                let anual_NNT0 = '';
                let enero_HE0 = '';
                let febrero_HE0 = '';
                let marzo_HE0 = '';
                let abril_HE0 = '';
                let mayo_HE0 = '';
                let junio_HE0 = '';
                let julio_HE0 = '';
                let agosto_HE0 = '';
                let septiembre_HE0 = '';
                let octubre_HE0 = '';
                let noviembre_HE0 = '';
                let diciembre_HE0 = '';
                let enero_HHTP0 = '';
                let febrero_HHTP0 = '';
                let marzo_HHTP0 = '';
                let abril_HHTP0 = '';
                let mayo_HHTP0 = '';
                let junio_HHTP0 = '';
                let julio_HHTP0 = '';
                let agosto_HHTP0 = '';
                let septiembre_HHTP0 = '';
                let octubre_HHTP0 = '';
                let noviembre_HHTP0 = '';
                let diciembre_HHTP0 = '';
                    tasks.forEach(task => {
                        enero_NNT0 += `${task.enero_NNT}`
                        febrero_NNT0 += `${task.febrero_NNT}`
                        marzo_NNT0 += `${task.marzo_NNT}`
                        abril_NNT0 += `${task.abril_NNT}`
                        mayo_NNT0 += `${task.mayo_NNT}`
                        junio_NNT0 += `${task.junio_NNT}`
                        julio_NNT0 += `${task.julio_NNT}`
                        agosto_NNT0 += `${task.agosto_NNT}`
                        septiembre_NNT0 += `${task.septiembre_NNT}`
                        octubre_NNT0 += `${task.octubre_NNT}`
                        noviembre_NNT0 += `${task.noviembre_NNT}`
                        diciembre_NNT0 += `${task.diciembre_NNT}`
                        anual_NNT0 += `${task.anual_NNT}`
                        enero_HE0 += `${task.enero_HE}`
                        febrero_HE0 += `${task.febrero_HE}`
                        marzo_HE0 += `${task.marzo_HE}`
                        abril_HE0 += `${task.abril_HE}`
                        mayo_HE0 += `${task.mayo_HE}`
                        junio_HE0 += `${task.junio_HE}`
                        julio_HE0 += `${task.julio_HE}`
                        agosto_HE0 += `${task.agosto_HE}`
                        septiembre_HE0 += `${task.septiembre_HE}`
                        octubre_HE0 += `${task.octubre_HE}`
                        noviembre_HE0 += `${task.noviembre_HE}`
                        diciembre_HE0 += `${task.diciembre_HE}`
                        enero_HHTP0 += `${task.enero_HHTP}`
                        febrero_HHTP0 += `${task.febrero_HHTP}`
                        marzo_HHTP0 += `${task.marzo_HHTP}`
                        abril_HHTP0 += `${task.abril_HHTP}`
                        mayo_HHTP0 += `${task.mayo_HHTP}`
                        junio_HHTP0 += `${task.junio_HHTP}`
                        julio_HHTP0 += `${task.julio_HHTP}`
                        agosto_HHTP0 += `${task.agosto_HHTP}`
                        septiembre_HHTP0 += `${task.septiembre_HHTP}`
                        octubre_HHTP0 += `${task.octubre_HHTP}`
                        noviembre_HHTP0 += `${task.noviembre_HHTP}`
                        diciembre_HHTP0 += `${task.diciembre_HHTP}`
                    });
                    var enero_NNT = parseInt(enero_NNT0);
                    var febrero_NNT = parseInt(febrero_NNT0);
                    var marzo_NNT = parseInt(marzo_NNT0);
                    var abril_NNT = parseInt(abril_NNT0);
                    var mayo_NNT = parseInt(mayo_NNT0);
                    var junio_NNT = parseInt(junio_NNT0);
                    var julio_NNT = parseInt(julio_NNT0);
                    var agosto_NNT = parseInt(agosto_NNT0);
                    var septiembre_NNT = parseInt(septiembre_NNT0);
                    var octubre_NNT = parseInt(octubre_NNT0);
                    var noviembre_NNT = parseInt(noviembre_NNT0);
                    var diciembre_NNT = parseInt(diciembre_NNT0);
                    var enero_HE = parseInt(enero_HE0);
                    var febrero_HE = parseInt(febrero_HE0);
                    var marzo_HE = parseInt(marzo_HE0);
                    var abril_HE = parseInt(abril_HE0);
                    var mayo_HE = parseInt(mayo_HE0);
                    var junio_HE = parseInt(junio_HE0);
                    var julio_HE = parseInt(julio_HE0);
                    var agosto_HE = parseInt(agosto_HE0);
                    var septiembre_HE = parseInt(septiembre_HE0);
                    var octubre_HE = parseInt(octubre_HE0);
                    var noviembre_HE = parseInt(noviembre_HE0);
                    var diciembre_HE = parseInt(diciembre_HE0);
                    var enero_HHTP = parseInt(enero_HHTP0);
                    var febrero_HHTP = parseInt(febrero_HHTP0);
                    var marzo_HHTP = parseInt(marzo_HHTP0);
                    var abril_HHTP = parseInt(abril_HHTP0);
                    var mayo_HHTP = parseInt(mayo_HHTP0);
                    var junio_HHTP = parseInt(junio_HHTP0);
                    var julio_HHTP = parseInt(julio_HHTP0);
                    var agosto_HHTP = parseInt(agosto_HHTP0);
                    var septiembre_HHTP = parseInt(septiembre_HHTP0);
                    var octubre_HHTP = parseInt(octubre_HHTP0);
                    var noviembre_HHTP = parseInt(noviembre_HHTP0);
                    var diciembre_HHTP = parseInt(diciembre_HHTP0);
                    if(enero_NNT > 0){
                        var enero_NNT_ = 1;
                    } else {
                        var enero_NNT_ = 0;
                    }
                    if(febrero_NNT > 0){
                        var febrero_NNT_ = 1;
                    } else {
                        var febrero_NNT_ = 0;
                    }
                    if(marzo_NNT > 0){
                        var marzo_NNT_ = 1;
                    } else {
                        var marzo_NNT_ = 0;
                    }
                    if(abril_NNT > 0){
                        var abril_NNT_ = 1;
                    } else {
                        var abril_NNT_ = 0;
                    }
                    if(mayo_NNT > 0){
                        var mayo_NNT_ = 1;
                    } else {
                        var mayo_NNT_ = 0;
                    }
                    if(junio_NNT > 0){
                        var junio_NNT_ = 1;
                    } else {
                        var junio_NNT_ = 0;
                    }
                    if(julio_NNT > 0){
                        var julio_NNT_ = 1;
                    } else {
                        var julio_NNT_ = 0;
                    }
                    if(agosto_NNT > 0){
                        var agosto_NNT_ = 1;
                    } else {
                        var agosto_NNT_ = 0;
                    }
                    if(septiembre_NNT > 0){
                        var septiembre_NNT_ = 1;
                    } else {
                        var septiembre_NNT_ = 0;
                    }
                    if(octubre_NNT > 0){
                        var octubre_NNT_ = 1;
                    } else {
                        var octubre_NNT_ = 0;
                    } 
                    if(noviembre_NNT > 0){
                        var noviembre_NNT_ = 1;
                    } else {
                        var noviembre_NNT_ = 0;
                    }
                    if(diciembre_NNT > 0){
                        var diciembre_NNT_ = 1;
                    } else {
                        var diciembre_NNT_ = 0;
                    }
                    var anual_NNT_ = enero_NNT_ + febrero_NNT_ + marzo_NNT_ + abril_NNT_+ mayo_NNT_ + junio_NNT_ + julio_NNT_ + agosto_NNT_ + septiembre_NNT_ + octubre_NNT_ + noviembre_NNT_ + diciembre_NNT_; 
              
                    var anual_NNT_0 = enero_NNT + febrero_NNT + marzo_NNT + abril_NNT+ mayo_NNT + junio_NNT + julio_NNT + agosto_NNT + septiembre_NNT + octubre_NNT + noviembre_NNT + diciembre_NNT; 
                    var anual_NNT_I = anual_NNT_0/anual_NNT_;
                    const postData2 = {
                       anual_NNT : anual_NNT_I,
                       id_admin: id_admin,
                       centro: centro,
                       Year: Year
                    };console.log(postData2)
                    const url2 = '../indicadores_au.php';
                    $.post(url2, postData2, (response) => {
                        lector4();
                    });
                    var anual_HE = enero_HE + febrero_HE + marzo_HE + abril_HE + mayo_HE + junio_HE + julio_HE + agosto_HE + septiembre_HE + octubre_HE + noviembre_HE + diciembre_HE; 
                    const postData3 = {
                       anual_HE : anual_HE,
                       id_admin: id_admin,
                       centro: centro,
                       Year: Year
                    };
                    const url3 = '../indicadores_au.php';
                    $.post(url3, postData3, (response) => {
                        lector4();
                    });
                    var anual_HHTP = enero_HHTP + febrero_HHTP + marzo_HHTP + abril_HHTP + mayo_HHTP + junio_HHTP + julio_HHTP + agosto_HHTP + septiembre_HHTP + octubre_HHTP + noviembre_HHTP + diciembre_HHTP; 
                    const postData = {
                       anual_HHTP : anual_HHTP,
                       id_admin: id_admin,
                       centro: centro,
                       Year: Year
                    };
                    const url = '../indicadores_au.php';
                    $.post(url, postData, (response) => {
                        lector4();
                    });
                },   
            });
            }
            lector3();
            function lector3() {
            $.ajax({
                type: "post",
                url: "../item_au.php",
                data: "id_admin=" + id_admin + "&Year=" + Year + "&Centro=" + centro,
                success: function (response) {
                const tasks = JSON.parse(response);
                let enero_NNT0 = '';
                let febrero_NNT0 = '';
                let marzo_NNT0 = '';
                let abril_NNT0 = '';
                let mayo_NNT0 = '';
                let junio_NNT0 = '';
                let julio_NNT0 = '';
                let agosto_NNT0 = '';
                let septiembre_NNT0 = '';
                let octubre_NNT0 = '';
                let noviembre_NNT0 = '';
                let diciembre_NNT0 = '';
                let enero_HE0 = '';
                let febrero_HE0 = '';
                let marzo_HE0 = '';
                let abril_HE0 = '';
                let mayo_HE0 = '';
                let junio_HE0 = '';
                let julio_HE0 = '';
                let agosto_HE0 = '';
                let septiembre_HE0 = '';
                let octubre_HE0 = '';
                let noviembre_HE0 = '';
                let diciembre_HE0 = '';
                    tasks.forEach(task => {
                        enero_NNT0 += `${task.enero_NNT}`
                        febrero_NNT0 += `${task.febrero_NNT}`
                        marzo_NNT0 += `${task.marzo_NNT}`
                        abril_NNT0 += `${task.abril_NNT}`
                        mayo_NNT0 += `${task.mayo_NNT}`
                        junio_NNT0 += `${task.junio_NNT}`
                        julio_NNT0 += `${task.julio_NNT}`
                        agosto_NNT0 += `${task.agosto_NNT}`
                        septiembre_NNT0 += `${task.septiembre_NNT}`
                        octubre_NNT0 += `${task.octubre_NNT}`
                        noviembre_NNT0 += `${task.noviembre_NNT}`
                        diciembre_NNT0 += `${task.diciembre_NNT}`
                        enero_HE0 += `${task.enero_HE}`
                        febrero_HE0 += `${task.febrero_HE}`
                        marzo_HE0 += `${task.marzo_HE}`
                        abril_HE0 += `${task.abril_HE}`
                        mayo_HE0 += `${task.mayo_HE}`
                        junio_HE0 += `${task.junio_HE}`
                        julio_HE0 += `${task.julio_HE}`
                        agosto_HE0 += `${task.agosto_HE}`
                        septiembre_HE0 += `${task.septiembre_HE}`
                        octubre_HE0 += `${task.octubre_HE}`
                        noviembre_HE0 += `${task.noviembre_HE}`
                        diciembre_HE0 += `${task.diciembre_HE}`
                    });
                    var enero_NNT = parseInt(enero_NNT0);
                    var febrero_NNT = parseInt(febrero_NNT0);
                    var marzo_NNT = parseInt(marzo_NNT0);
                    var abril_NNT = parseInt(abril_NNT0);
                    var mayo_NNT = parseInt(mayo_NNT0);
                    var junio_NNT = parseInt(junio_NNT0);
                    var julio_NNT = parseInt(julio_NNT0);
                    var agosto_NNT = parseInt(agosto_NNT0);
                    var septiembre_NNT = parseInt(septiembre_NNT0);
                    var octubre_NNT = parseInt(octubre_NNT0);
                    var noviembre_NNT = parseInt(noviembre_NNT0);
                    var diciembre_NNT = parseInt(diciembre_NNT0);
                    var enero_HE = parseInt(enero_HE0);
                    var febrero_HE = parseInt(febrero_HE0);
                    var marzo_HE = parseInt(marzo_HE0);
                    var abril_HE = parseInt(abril_HE0);
                    var mayo_HE = parseInt(mayo_HE0);
                    var junio_HE = parseInt(junio_HE0);
                    var julio_HE = parseInt(julio_HE0);
                    var agosto_HE = parseInt(agosto_HE0);
                    var septiembre_HE = parseInt(septiembre_HE0);
                    var octubre_HE = parseInt(octubre_HE0);
                    var noviembre_HE = parseInt(noviembre_HE0);
                    var diciembre_HE = parseInt(diciembre_HE0);
                    document.getElementById("enero_NNT").value = (enero_NNT0);
                    document.getElementById("febrero_NNT").value = (febrero_NNT);
                    document.getElementById("marzo_NNT").value = (marzo_NNT);
                    document.getElementById("abril_NNT").value = (abril_NNT);
                    document.getElementById("mayo_NNT").value = (mayo_NNT);
                    document.getElementById("junio_NNT").value = (junio_NNT);
                    document.getElementById("julio_NNT").value = (julio_NNT);
                    document.getElementById("agosto_NNT").value = (agosto_NNT);
                    document.getElementById("septiembre_NNT").value = (septiembre_NNT);
                    document.getElementById("octubre_NNT").value = (octubre_NNT);
                    document.getElementById("noviembre_NNT").value = (noviembre_NNT);
                    document.getElementById("diciembre_NNT").value = (diciembre_NNT);
                    document.getElementById("enero_HE").value = (enero_HE);
                    document.getElementById("febrero_HE").value = (febrero_HE);
                    document.getElementById("marzo_HE").value = (marzo_HE);
                    document.getElementById("abril_HE").value = (abril_HE);
                    document.getElementById("mayo_HE").value = (mayo_HE);
                    document.getElementById("junio_HE").value = (junio_HE);
                    document.getElementById("julio_HE").value = (julio_HE);
                    document.getElementById("agosto_HE").value = (agosto_HE);
                    document.getElementById("septiembre_HE").value = (septiembre_HE);
                    document.getElementById("octubre_HE").value = (octubre_HE);
                    document.getElementById("noviembre_HE").value = (noviembre_HE);
                    document.getElementById("diciembre_HE").value = (diciembre_HE);
                },   
            });
            }
            lector4();
            function lector4() {
            $.ajax({
                type: "post",
                url: "../item_au.php",
                data: "id_admin=" + id_admin + "&Year=" + Year + "&Centro=" + centro,
                success: function (response) {
                const tasks = JSON.parse(response);
                let anual_NNT0 = '';
                let anual_HE0 = '';
                let enero_HHTP0 = '';
                let febrero_HHTP0 = '';
                let marzo_HHTP0 = '';
                let abril_HHTP0 = '';
                let mayo_HHTP0 = '';
                let junio_HHTP0 = '';
                let julio_HHTP0 = '';
                let agosto_HHTP0 = '';
                let septiembre_HHTP0 = '';
                let octubre_HHTP0 = '';
                let noviembre_HHTP0 = '';
                let diciembre_HHTP0 = '';
                let anual_HHTP0 = '';
                    tasks.forEach(task => {
                        anual_NNT0 += `${task.anual_NNT}`
                        anual_HE0 += `${task.anual_HE}`
                        enero_HHTP0 += `${task.enero_HHTP}`
                        febrero_HHTP0 += `${task.febrero_HHTP}`
                        marzo_HHTP0 += `${task.marzo_HHTP}`
                        abril_HHTP0 += `${task.abril_HHTP}`
                        mayo_HHTP0 += `${task.mayo_HHTP}`
                        junio_HHTP0 += `${task.junio_HHTP}`
                        julio_HHTP0 += `${task.julio_HHTP}`
                        agosto_HHTP0 += `${task.agosto_HHTP}`
                        septiembre_HHTP0 += `${task.septiembre_HHTP}`
                        octubre_HHTP0 += `${task.octubre_HHTP}`
                        noviembre_HHTP0 += `${task.noviembre_HHTP}`
                        diciembre_HHTP0 += `${task.diciembre_HHTP}`
                        anual_HHTP0 += `${task.anual_HHTP}`
                    });
                    var anual_NNT = parseInt(anual_NNT0);
                    var anual_HE = parseInt(anual_HE0);
                     var enero_HHTP = parseInt(enero_HHTP0);
                    var febrero_HHTP = parseInt(febrero_HHTP0);
                    var marzo_HHTP = parseInt(marzo_HHTP0);
                    var abril_HHTP = parseInt(abril_HHTP0);
                    var mayo_HHTP = parseInt(mayo_HHTP0);
                    var junio_HHTP = parseInt(junio_HHTP0);
                    var julio_HHTP = parseInt(julio_HHTP0);
                    var agosto_HHTP = parseInt(agosto_HHTP0);
                    var septiembre_HHTP = parseInt(septiembre_HHTP0);
                    var octubre_HHTP = parseInt(octubre_HHTP0);
                    var noviembre_HHTP = parseInt(noviembre_HHTP0);
                    var diciembre_HHTP = parseInt(diciembre_HHTP0);
                    var anual_HHTP = parseInt(anual_HHTP0);
         
                    $('#anual_NNT').html(anual_NNT0);
                    $('#anual_HE').html(anual_HE0);
                    $('#enero_HHTP').html(enero_HHTP);
                    $('#febrero_HHTP').html(febrero_HHTP);
                    $('#marzo_HHTP').html(marzo_HHTP);
                    $('#abril_HHTP').html(abril_HHTP);
                    $('#mayo_HHTP').html(mayo_HHTP);
                    $('#junio_HHTP').html(junio_HHTP);
                    $('#julio_HHTP').html(julio_HHTP);
                    $('#agosto_HHTP').html(agosto_HHTP);
                    $('#septiembre_HHTP').html(septiembre_HHTP);
                    $('#octubre_HHTP').html(octubre_HHTP);
                    $('#noviembre_HHTP').html(noviembre_HHTP);
                    $('#diciembre_HHTP').html(diciembre_HHTP);
                    $('#anual_HHTP').html(anual_HHTP);
                },   
            });
            } 
        });
         $(document).on('click', '.eliminar_In', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_admin= $(element).attr('taskId2');
            const Centro= $(element).attr('taskId1');
            const postData = {
                eliminar_centro:'centro_eliminar',
                id_admin :id_admin,
                Centro:Centro
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks3();
            });
        });
        function fetchTasks3() {
            var id_admin = '<?php echo $id_admin_aus ?>';
            $.ajax({
                type: "post",
                url: "../costo_agenda.inc.php",
                data: "id_admin=" + id_admin,
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `
                            <tr id="textarea" taskId="${task.id}" taskId1="${task.Centro}" taskId2="${task.id_admin}" >
                                <td id="td"><a href="" class="${task.Centro_crear_eliminar}" id="Centro" style="font-family:verdanab;color:${task.Centro_existe}">${task.Centro}</a><button class="eliminar_In" data-title="Eliminar" style="float:right;left:0em"><span class="fa fa-trash"></span></button></td>
                            </tr>`
                    });
                    $('#Centro').html(template);
                }
            });
        }
        fetchTasks4();
        function fetchTasks4() {
            var year = '<?php echo $Year2?>';
            var id_admin = '<?php echo $id_admin_aus ?>';
            $.ajax({
                type: "post",
                url: "../select_costo.php",
                data: "id_admin=" + id_admin + "&year=" + year,
                success: function(response) {
                    const tasks0 = JSON.parse(response);
                    tasks0.push({"Opcion":" "});
                    const tasks = tasks0.reverse();
                    let template = '';
                    tasks.forEach(task => {
                        template += `<option>${task.Opcion}</option><br>`
                    });
                     $('#CentroIn').html(template);
                    $('#CentroInbdg').html(template);
                }
            });
        }
        $("#checkbox1").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Enero',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks(); 
            });   
        });
         $("#checkbox2").on('change', function() {
             var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Febrero',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks(); 
            });   
        });
        $("#checkbox3").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Marzo',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks(); 
            });   
        });
         $("#checkbox4").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Abril',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks(); 
            });   
        });
         $("#checkbox5").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Mayo',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
         $("#checkbox6").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Junio',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
         $("#checkbox7").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Julio',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
         $("#checkbox8").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Agosto',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
         $("#checkbox9").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Septiembre',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
         $("#checkbox10").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Octubre',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
         $("#checkbox11").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Noviembre',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
         $("#checkbox12").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'Diciembre',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
         $("#checkbox44").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'A2020',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
        $("#checkbox45").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'A2021',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
         $("#checkbox46").on('change', function() {
             var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'A2022',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
         $("#checkbox47").on('change', function() {
            var codigo = '<?php echo $id_admin_aus ?>';
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                codigo:codigo,
                mes:'A2023',
                valor:valor,
            };
            const url = '../filtro_ausentismo.inc.php';
            $.post(url,  postData, (response) => {
                
                fetchTasks();
            });   
        });
        fetchTasks5();
        function fetchTasks5() {
            var codigo = '<?php echo $id_admin_aus ?>';
            $.ajax({
                type: "post",
                data: "codigo=" + codigo,
                url: "../consulta_ausentismo.inc.php",
                befforesed: function(){
            	},
                success: function (response) {
                    const tasks = JSON.parse(response);
                    let enero = '';
                    let febrero= '';
                    let marzo = '';
                    let abril = '';
                    let mayo = '';
                    let junio = '';
                    let julio = '';
                    let agosto = '';
                    let septiembre = '';
                    let octubre = '';
                    let noviembre = '';
                    let diciembre = '';
                    let  A2020 = '';
                    let  A2021 = '';
                    let  A2022 = '';
                    let  A2023 = '';
                    let  A2024 = '';
                    tasks.forEach(task => {
                        enero += `${task.enero}`
                        febrero+= `${task.febrero}`
                        marzo+= `${task.marzo}`
                        abril+= `${task.abril}`
                        mayo+= `${task.mayo}`
                        junio+= `${task.junio}`
                        julio+= `${task.julio}`
                        agosto+= `${task.agosto}`
                        septiembre+= `${task.septiembre}`
                        octubre+= `${task.octubre}`
                        noviembre+= `${task.noviembre}`
                        diciembre+= `${task.diciembre}`
                        A2020+= `${task.A2020}`
                        A2021+= `${task.A2021}`
                        A2022+= `${task.A2022}`
                        A2023+= `${task.A2023}`
                        A2024+= `${task.A2024}`
                    });
                    document.querySelector("[name=enero][value='"+ enero +"']").checked = true;
                    document.querySelector("[name=febrero][value='"+ febrero +"']").checked = true;
                    document.querySelector("[name=marzo][value='"+ marzo +"']").checked = true;
                    document.querySelector("[name=abril][value='"+ abril +"']").checked = true;
                    document.querySelector("[name=mayo][value='"+ mayo +"']").checked = true;
                    document.querySelector("[name=junio][value='"+ junio +"']").checked = true;
                    document.querySelector("[name=julio][value='"+ julio +"']").checked = true;
                    document.querySelector("[name=agosto][value='"+ agosto +"']").checked = true;
                    document.querySelector("[name=septiembre][value='"+ septiembre +"']").checked = true;
                    document.querySelector("[name=octubre][value='"+ octubre+"']").checked = true;
                    document.querySelector("[name=noviembre][value='"+ noviembre +"']").checked = true;
                    document.querySelector("[name=diciembre][value='"+ diciembre +"']").checked = true;
                    document.querySelector("[name=A2020][value='"+ A2020 +"']").checked = true;
                    document.querySelector("[name=A2021][value='"+ A2021 +"']").checked = true;
                    document.querySelector("[name=A2022][value='"+ A2022 +"']").checked = true;
                    document.querySelector("[name=A2023][value='"+ A2023 +"']").checked = true;
                    document.querySelector("[name=A2024][value='"+ A2024 +"']").checked = true;
                },   
            });
        }
        $('#task-form').submit(e => {
            e.preventDefault();
            CodigoIn = $('#CodigoIn').val();
            cadena = CodigoIn.toUpperCase();
            var InicioIn0 = $('#InicioIn').val();
            var TerminacionIn0 = $('#TerminacionIn').val();
            var Salariob0 = $('#Salariob').val();
            var ProrrogaIn0 = $('#ProrrogaIn').val();
            var MesIn0 = $('#MesIn').val();
            var TipoIn0 = $('#TipoIn').val();
            var ProrrogaIn00 = parseInt(ProrrogaIn0)
            var fecha1 = moment(InicioIn0);
            var fecha2 = moment(TerminacionIn0); 
            var fecha00 = new Date(InicioIn0);
            var mes = fecha00.getMonth() + 1;
            var ano = fecha00.getFullYear();
            var tiempo = fecha2 - fecha1; 
            var dias = Math.floor(tiempo / (1000 * 60 * 60 * 24)); 
            var DiasIn0 = (dias + 1);
            var TotalIn0 = DiasIn0 + ProrrogaIn00;
            var Salariobd0= Salariob0/30;
            
            //Asegurados ARL
            if ((TipoIn0 == 'Accidente de trabajo (A.T.)') || (TipoIn0 == 'Enfermedad laboral (E.L.)')) {
                var Asegurados_AT = TotalIn0 * ((Salariobd0/100)*100); 
            } else {
                var Asegurados_AT = 0; 
            }
            //Asumidos empresa
            if ((TipoIn0 == 'Accidente común (A.C.)' || TipoIn0 == 'Enfermedad general (E.G.)' || TipoIn0== 'Permisos y/o ausentismo especial remunerado') && (TotalIn0 <= 3)) {
                var Asumidos_AC_EG= TotalIn0 * ((Salariobd0/100)*66.66); 
            } else {
                var Asumidos_AC_EG = 0; 
            }
            //Asegurados EPS
            if ((TipoIn0 == 'Accidente común (A.C.)' || TipoIn0 == 'Enfermedad general (E.G.)' || TipoIn0== 'Licencia maternidad' || TipoIn0== 'Licencia paternidad') && (TotalIn0 >= 3) && (TotalIn0 <= 180)) {
                var Asegurados_AC_EG = TotalIn0 * ((Salariobd0/100)*66.66); 
            } else {
                var Asegurados_AC_EG = 0; 
            }
            //Asegurados AFP
            if ((TipoIn0 == 'Accidente común (A.C.)' || TipoIn0 == 'Enfermedad general (E.G.)') && (TotalIn0 >= 181) && (TotalIn0 <= 540)) {
                var Asegurados_AFP = TotalIn0 * ((Salariobd0/100)*66.66); 
            } else {
                var Asegurados_AFP = 0; 
            }
            
            const postData = {
              id_admin: '<?php echo $id_admin_aus ?>',
              Razon: '<?php echo $Razon ?>',
              Cedula: $('#Cedula').val(),
              Nombre: $('#Nombre').val(),
              Apellido1: $('#Apellido1').val(),
              Apellido2: $('#Apellido2').val(),
              CargoIn: $('#CargoIn').val(),
              SeccionIn: $('#SeccionIn').val(),
              MesIn: MesIn0,
              TipoIn: TipoIn0,
              InicioIn: InicioIn0,
              TerminacionIn: TerminacionIn0,
              DiasIn: DiasIn0,
              ProrrogaIn: ProrrogaIn00,
              TotalIn: TotalIn0,
              CargadosIn: $('#CargadosIn').val(),
              CodigoIn:cadena,
              DiagnosticoIn: document.getElementById("CodigoOff").innerHTML,
              Salariob: Salariob0,
              Salariobd: Salariobd0,
              Asegurados_AT: Asegurados_AT,
              Asegurados_AC_EG: Asegurados_AC_EG,
              Asegurados_AFP: Asegurados_AFP,
              Asumidos_AC_EG: Asumidos_AC_EG,
              ContratoIn: $('#ContratoIn').val(),
              CentroIn: $('#CentroIn').val(),
              Mes:mes,
              Ano:ano,
            };
            const url = '../insertar5.php';
            $.post(url, postData, (response) => {
               $("#costumModal1").modal("hide");
               fetchTasks();
               document.getElementById('task-form').reset();
            });
        });

        $(document).on('click', '.task-delete', (e) => {
            e.preventDefault();
            $("#costumModal4").modal("show");
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_empleado = $(element).attr('taskId');
            document.getElementById("delete_id").value = (id_empleado);
            const nombre = $(element).attr('taskId1');
            const apellido1 = $(element).attr('taskId2');
            const apellido2 = $(element).attr('taskId3');
            $('#nombre_delete').html(nombre);
            $('#apellido1_delete').html(apellido1);
            $('#apellido2_delete').html(apellido2);
            $(".delete").on('click', function(event) { 
                const eliminar_empleado = $('#delete_id').val();
                $.ajax({
                    type: "post",
                    url: "../eliminarbdg.php",
                    data: "id_empleado2=" + eliminar_empleado,
                    success: function(response) {
                        fetchTasks();
                        $('#costumModal3').modal('hide'); 
                        $('#search').keyup();
                   
                    }
                });
            }); 
        }); 
        $(document).on('click', '.task-item', (e) => {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id4 = $(element).attr('taskId');
        $("#costumModal11").modal("show");
        $.ajax({
            type: "post",
            url: "../itembdg2.php",
            data: "id=" + id4,
            befforesed: function(){
    		},
            success: function (response) {
                const tasks5 = JSON.parse(response);
                let id= '';
                let Nombre= '';
                let Apellido1 = '';
                let Apellido2 = '';
                let Cedula= '';
                let Cargo= '';
                let Seccion= '';
                let Contrato= '';
                let Centro= '';
                let Mes= '';
                let Tipo= '';
                let Inicio= '';
                let Terminacion= '';
                let Dias= '';
                let Prorroga= '';
                let Total= '';
                let Cargados= '';
                let Codigo= '';
                let Diagnostico= '';
                let Salario= '';
                let Asegurados_AT= '';
                let Asegurados_AC_EG= '';
                let Asegurados_AFP= '';
                let Asumidos_AC_EG= '';
                let Fecha= '';
                tasks5.forEach(task5 => {
                        id += `${task5.id}`
                        Nombre += `${task5.Nombre}`
                        Apellido1 += `${task5.Apellido1}`
                        Apellido2 += `${task5.Apellido2}`
                        Cedula += `${task5.Cedula}`
                        Cargo+= `${task5.Cargo}`
                        Seccion+= `${task5.Seccion}`
                        Contrato+= `${task5.Contrato}`
                        Centro+= `${task5.Centro}`
                        Mes+= `${task5.Mes}`
                        Tipo+= `${task5.Tipo}`
                        Inicio+= `${task5.Inicio}`
                        Terminacion+= `${task5.Terminacion}`
                        Dias+= `${task5.Dias}`
                        Prorroga+= `${task5.Prorroga}`
                        Total+= `${task5.Total}`
                        Cargados+= `${task5.Cargados}`
                        Codigo+= `${task5.Codigo}`
                        Diagnostico+= `${task5.Diagnostico}`
                        Salario+= `${task5.Salario}`
                        Asegurados_AT+= `${task5.Asegurados_AT}`
                        Asegurados_AC_EG+= `${task5.Asegurados_AC_EG}`
                        Asegurados_AFP+= `${task5.Asegurados_AFP}`
                        Asumidos_AC_EG+= `${task5.Asumidos_AC_EG}`
                        Fecha+= `${task5.Fecha}`
                });
                        document.getElementById('Nombrebdm').innerHTML = Nombre;
                        document.getElementById('Apellido1bdm').innerHTML = Apellido1;
                        document.getElementById('Apellido2bdm').innerHTML = Apellido2;
                        document.getElementById('Cedulabdm').innerHTML = Cedula;
                        document.getElementById('Cargobdm').innerHTML = Cargo;
                        document.getElementById('Seccionbdm').innerHTML = Seccion;
                        document.getElementById('Contratobdm').innerHTML = Contrato;
                        document.getElementById('Centrobdm').innerHTML = Centro;
                        document.getElementById('Mesbdm').innerHTML = Mes;
                        document.getElementById('Tipobdm').innerHTML = Tipo;
                        var fechaInicio = (moment(Inicio).format('DD/MM/YYYY'));
                        document.getElementById('Iniciobdm').innerHTML = fechaInicio;
                        var fechaTerminacion = (moment(Terminacion).format('DD/MM/YYYY'));
                        document.getElementById('Terminacionbdm').innerHTML = fechaTerminacion;
                        document.getElementById('Diasbdm').innerHTML = Dias;
                        document.getElementById('Prorrogabdm').innerHTML = Prorroga;
                        document.getElementById('Totalbdm').innerHTML = Total;
                        document.getElementById('Cargadobdm').innerHTML = Cargados;
                        document.getElementById('Codigobdm').innerHTML = Codigo;
                        document.getElementById('Diagnosticobdm').innerHTML = Diagnostico;
                        document.getElementById('Salariobdm').innerHTML = '$'+Salario;
                        document.getElementById('Asegurados_ATbdm').innerHTML = '$'+Asegurados_AT;
                        document.getElementById('Asegurados_AC_EGbdm').innerHTML = '$'+Asegurados_AC_EG;
                        document.getElementById('Asegurados_AFPbdm').innerHTML = '$'+Asegurados_AFP;
                        document.getElementById('Asumidos_AC_EGbdm').innerHTML = '$'+Asumidos_AC_EG;
                        var fechaR = (moment(Fecha).format('DD/MM/YYYY, h:m A'));
                        document.getElementById('Fechabdm').innerHTML = fechaR;
                },   
            });
        });
        $(document).on('click', '.task-editar', (e) => {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id1 = $(element).attr('taskId');
            $("#costumModal2").modal("show");
            $.ajax({
                type: "post",
                url: "../datosbdg2.php",
                data: "id=" + id1,
                	befforesed: function(){
    			},
                success: function (response) {
                   const tasks2 = JSON.parse(response);
                   let id= '';
                   let Cedula= '';
                   let Nombre= '';
                   let Apellido1 = '';
                   let Apellido2 = '';
                   let Cargo = '';
                   let Seccion = '';
                   let Contrato = '';
                   let Centro = '';
                   let Mes= '';
                   let Tipo= '';
                   let Inicio= '';
                   let Terminacion= '';
                   let Dias= '';
                   let Prorroga= '';
                   let Cargados= '';
                   let Salario= '';
                   let Codigo= '';
                   let Diagnostico= '';
                   tasks2.forEach(task2 => {
                        id += `${task2.id}`
                        Cedula += `${task2.Cedula}`
                        Nombre += `${task2.Nombre}`
                        Apellido1 += `${task2.Apellido1}`
                        Apellido2 += `${task2.Apellido2}`
                        Cargo += `${task2.Cargo}`
                        Seccion += `${task2.Seccion}`
                        Contrato += `${task2.Contrato}`
                        Centro += `${task2.Centro}`
                        Mes+= `${task2.Mes}`
                        Tipo+= `${task2.Tipo}`
                        Inicio+= `${task2.Inicio}`
                        Terminacion+= `${task2.Terminacion}`
                        Dias+= `${task2.Dias}`
                        Prorroga+= `${task2.Prorroga}`
                        Cargados+= `${task2.Cargados}`
                        Salario+= `${task2.Salario}`
                        Codigo+= `${task2.Codigo}`
                        Diagnostico+= `${task2.Diagnostico}`
                   });
                document.getElementById("idbdg").value = (id);
                document.getElementById("Cedulabdg").value = (Cedula);
                document.getElementById("Nombrebdg").value = (Nombre);
                document.getElementById("Apellido1bdg").value = (Apellido1);
                document.getElementById("Apellido2bdg").value = (Apellido2);
                document.getElementById("CargoInbdg").value = (Cargo);
                document.getElementById("SeccionInbdg").value = (Seccion);
                document.getElementById("ContratoInbdg").value = (Contrato);
                document.getElementById("CentroInbdg").value = (Centro);
                document.getElementById("MesInbdg").value = (Mes);
                document.getElementById("TipoInbdg").value = (Tipo);
                document.getElementById("InicioInbdg").value = (Inicio);
                document.getElementById("TerminacionInbdg").value = (Terminacion);
                document.getElementById("DiasInbdg").value = (Dias);
                document.getElementById("ProrrogaInbdg").value = (Prorroga);
                document.getElementById("CargadosInbdg").value = (Cargados);
                document.getElementById("Salariobbdg").value = (Salario);
                document.getElementById("CodigoInbdg").value = (Codigo);
                $('#CodigoOff_').html(Diagnostico);
                $('#task-form2').submit(e => {
                   e.preventDefault();
                    var InicioInbdg0 = $('#InicioInbdg').val();
                    var TerminacionInbdg0 = $('#TerminacionInbdg').val();
                    var ProrrogaInbdg0 =  $('#ProrrogaInbdg').val();;
                    var Salariobbdg0 = $('#Salariobbdg').val();
                    var MesInbdg0 = $('#MesInbdg').val();
                    var TipoInbdg0 = $('#TipoInbdg').val();
                    var ProrrogaInbdg00 = parseInt(ProrrogaInbdg0)
                    var fecha1 = moment(InicioInbdg0);
                    var fecha2 = moment(TerminacionInbdg0); 
                    var fecha00 = new Date(fecha1);
                    var mes = fecha00.getMonth() + 1;
                    var ano = fecha00.getFullYear();
                    var tiempo = fecha2 - fecha1; 
                    var dias = Math.floor(tiempo / (1000 * 60 * 60 * 24)); 
                  
                    var DiasInbdg0 = (dias + 1);

                    var TotalInbdg0 = DiasInbdg0 + ProrrogaInbdg00;
                    var Salariobdbdg0= Salariobbdg0/30;
                    
                    var Asegurados_AT = 0; 
                    var Asumidos_AC_EG = 0; 
                    var Asegurados_AC_EG = 0; 
                    var Asegurados_AFP = 0; 
                    
                     //Asegurados ARL
                    if ((TipoInbdg0 == 'Accidente de trabajo (A.T.)') || (TipoInbdg0 == 'Enfermedad laboral (E.L.)')) {
                        var Asegurados_AT = TotalInbdg0 * ((Salariobdbdg0/100)*100); 
                    } else {
                        var Asegurados_AT = 1; 
                    }
                    //Asumidos empresa
                    if ((TipoInbdg0 == 'Accidente común (A.C.)' || TipoInbdg0 == 'Enfermedad general (E.G.)' || TipoInbdg0 == 'Permisos y/o ausentismo especial remunerado') && (TotalInbdg0 <= 3)) {
                        var Asumidos_AC_EG= TotalInbdg0 * ((Salariobdbdg0/100)*66.66); 
                    } else {
                        var Asumidos_AC_EG = 1; 
                    }
                    //Asegurados EPS
                    if ((TipoInbdg0 == 'Accidente común (A.C.)' || TipoInbdg0 == 'Enfermedad general (E.G.)' || TipoInbdg0== 'Licencia maternidad' || TipoInbdg0== 'Licencia paternidad') && (TotalInbdg0 >= 3) && (TotalInbdg0 <= 180)) {
                        var Asegurados_AC_EG = TotalInbdg0 * ((Salariobdbdg0/100)*66.66); 
                    } else {
                        var Asegurados_AC_EG = 1; 
                    }
                    //Asegurados AFP
                    if ((TipoInbdg0 == 'Accidente común (A.C.)' || TipoInbdg0 == 'Enfermedad general (E.G.)') && (TotalInbdg0 >= 181) && (TotalInbdg0 <= 540)) {
                        var Asegurados_AFP = TotalInbdg0 * ((Salariobdbdg0/100)*66.66); 
                    } else {
                        var Asegurados_AFP = 1; 
                    }
                    
                    const postData = {
                          id3bdg:$('#idbdg').val(),
                          Cedulabdg:$('#Cedulabdg').val(),
                          Nombrebdg: $('#Nombrebdg').val(),
                          Apellido1bdg: $('#Apellido1bdg').val(),
                          Apellido2bdg: $('#Apellido2bdg').val(),
                          CargoInbdg: $('#CargoInbdg').val(),
                          SeccionInbdg: $('#SeccionInbdg').val(),
                          MesInbdg:MesInbdg0,
                          TipoInbdg: $('#TipoInbdg').val(),
                          InicioInbdg: InicioInbdg0,
                          TerminacionInbdg: TerminacionInbdg0,
                          DiasInbdg: DiasInbdg0,
                          ProrrogaInbdg: ProrrogaInbdg00,
                          TotalInbdg: TotalInbdg0,
                          CargadosInbdg: $('#CargadosInbdg').val(),
                          Salariobbdg: Salariobbdg0,
                          CodigoInbdg: $('#CodigoInbdg').val(),
                          DiagnosticoInbdg: document.getElementById("CodigoOff_").innerHTML,
                          Asegurados_ATbdg: Asegurados_AT,
                          Asegurados_AC_EGbdg: Asegurados_AC_EG,
                          Asegurados_AFPbdg: Asegurados_AFP,
                          Asumidos_AC_EGbdg: Asumidos_AC_EG,
                          ContratoInbdg: $('#ContratoInbdg').val(),
                          CentroInbdg: $('#CentroInbdg').val(),
                          Mes:mes,
                          Ano:ano
                    };
                        console.log(postData)
                        
                        const url = '../editarbdg2.php';
                        $.post(url,  postData, (response) => {
                            fetchTasks();
                            $("#costumModal2").modal("hide");
                            $('#search').keyup();
                        });
                    }); 
                }      
            }); 
        });
        $('#search').keyup(function() {
        if($('#search').val()) {
            $('#tasks').hide();
            $('#tasks2').show();
            var id_admin = '<?php echo $id_admin_aus ?>'
            let search = $('#search').val();
            $.ajax({
                url: '../search3.php',
                data:"search=" + search + "&id_admin=" + id_admin,
                cache: false,
                type: 'POST',
                success: function (response) {
                if(!response.error) {
                    let tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `
                            <tr taskId="${task.id}" taskId1="${task.Nombre}" taskId2="${task.Apellido1}" taskId3="${task.Apellido2}">
                                <td id="td" style="text-align:center!important"><button title="Perfil del Usuario" class="task-item">${task.Cedula}</button></td>
                                <td id="td">${task.Nombre}</td>
                                <td id="td">${task.Apellido1}</td>
                                <td id="td" style="text-align:center">${task.Cargo}</td>
                                <td id="td" style="text-align:center">${task.Codigo}</td>
                                <td id="td" style="text-align:center">${task.Tipo}</td>
                                <td id="td" style="text-align:center">${task.Total}</td>
                                <td id="td" style="text-align:left">${task.Diagnostico}</td>
                                <td id="td" style="text-align:center">$ ${task.Costo}</td>
                                <td id="td" style="text-align:center">${task.Inicio}</td>
                                <td id="borderout"><button class="task-editar" title="Editar"><span class="fa fa-pencil"></span></button></td>
                                <td id="borderout"><button class="task-delete" title="Eliminar"><span class="fa fa-trash"></span></button></td>
                          </tr>` 
                    });
                    $('#tasks2').html(template);
                }}    
            })} 
        });
       $('#import_excel_form').on('submit', function(event){
            event.preventDefault();
            var codigo = '<?php echo $id_admin_aus ?>';   
            var razon = '<?php echo $Razon ?>';
            var formData = new FormData();
            var file = $('#file-7')[0].files[0];
            
            // Verificar si se seleccionó un archivo
            if(!file) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Archivo no seleccionado',
                    text: 'Por favor, seleccione un archivo Excel para importar',
                    confirmButtonColor: '#3085d6'
                });
                return false;
            }
            
            // Verificar el tipo de archivo
            var allowedExtensions = ['xls', 'xlsx', 'csv'];
            var fileName = file.name;
            var fileExtension = fileName.split('.').pop().toLowerCase();
            if(!allowedExtensions.includes(fileExtension)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Formato no válido',
                    text: 'Solo se permiten archivos con extensión .xls, .xlsx o .csv',
                    confirmButtonColor: '#3085d6'
                });
                return false;
            }
            
            // Verificar el tamaño del archivo (máximo 20MB)
            var maxSize = 20 * 1024 * 1024;
            if(file.size > maxSize) {
                Swal.fire({
                    icon: 'error',
                    title: 'Archivo demasiado grande',
                    text: 'El archivo no debe exceder los 20MB',
                    confirmButtonColor: '#3085d6'
                });
                return false;
            }
            
            formData.append("file", file);
            formData.append("codigo", codigo); 
            formData.append("razon", razon);
            
            console.log("Archivo seleccionado:", file.name);
            console.log("Tamaño:", (file.size / 1024 / 1024).toFixed(2), "MB");
            
            // Función para actualizar la barra de progreso
            function updateProgressBar(percent, message) {
                $('#progressPercent').text(percent + '%');
                $('.progress-bar').css('width', percent + '%').attr('aria-valuenow', percent);
                $('#progressMessage').text(message);
                
                if(percent === 100) {
                    $('#progressStatus').text('Finalizando...');
                } else if(percent > 0 && percent < 100) {
                    $('#progressStatus').text('Procesando...');
                }
            }
            
            function closeProgressModal() {
                setTimeout(function() {
                    $('#uploadProgressModal').modal('hide');
                    // Resetear la barra de progreso
                    updateProgressBar(0, 'Iniciando carga...');
                    $('.progress-bar').removeClass('bg-success bg-danger').addClass('bg-primary');
                }, 500);
            }
            
            // Mostrar modal de progreso
            $('#uploadProgressModal').modal({
                backdrop: 'static',
                keyboard: false
            });
            updateProgressBar(0, 'Iniciando carga...');
            
            $.ajax({
                url: "../phpspreadsheet/importar2.php",
                method: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    
                    // Configurar el evento de progreso de subida
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = Math.round((evt.loaded / evt.total) * 100);
                            updateProgressBar(percentComplete, 'Subiendo archivo: ' + percentComplete + '% completado');
                            console.log('Progreso de subida:', percentComplete + '%');
                        }
                    }, false);
                    
                    // Configurar el evento de progreso de descarga (respuesta)
                    xhr.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = Math.round((evt.loaded / evt.total) * 100);
                            if(percentComplete < 100) {
                                updateProgressBar(percentComplete, 'Procesando respuesta del servidor...');
                            }
                        }
                    }, false);
                    
                    return xhr;
                },
                timeout: 300000, // 5 minutos
                beforeSend: function() {
                    $('#import').attr('disabled', 'disabled');
                    $('#import').val('Importando...');
                },
                success: function(response) {
                    console.log("Respuesta completa:", response);
                    
                    try {
                        // Actualizar progreso al 100% mientras se procesa
                        updateProgressBar(100, 'Procesando datos...');
                        
                        // Pequeño delay para que se vea el 100%
                        setTimeout(function() {
                            const tasks = JSON.parse(response);
                            let mensaje = '';
                            let confirmacion = '';
                            
                            tasks.forEach(task => {
                                mensaje += `${task.mensaje}`;
                                confirmacion += `${task.confirmacion}`;
                            });
                            
                            // Cerrar modal de progreso
                            closeProgressModal();
                            
                            // Mostrar resultado
                            $("#costumModal14").modal("show");
                            $('#message').html(mensaje);
                            
                            // Si la importación fue exitosa, recargar la tabla
                            if(confirmacion.includes('success')) {
                                setTimeout(function() {
                                    fetchTasks();
                                }, 1500);
                            }
                            
                        }, 500);
                        
                    } catch(e) {
                        console.error("Error al parsear JSON:", e);
                        console.log("Respuesta cruda:", response);
                        closeProgressModal();
                        
                        Swal.fire({
                            icon: 'error',
                            title: 'Error en la respuesta',
                            html: 'Error al procesar la respuesta del servidor:<br><br>' + e.message,
                            confirmButtonColor: '#3085d6'
                        });
                    }
                    
                    $('#import').attr('disabled', false);
                    $('#import').val('Importar');
                },
                error: function(xhr, status, error) {
                    console.error("Error AJAX:", status, error);
                    console.log("Estado HTTP:", xhr.status);
                    console.log("Respuesta del servidor:", xhr.responseText);
                    
                    closeProgressModal();
                    
                    let errorMessage = '';
                    if(xhr.status === 404) {
                        errorMessage = 'No se encontró el script del servidor. Verifique la ruta.';
                    } else if(xhr.status === 500) {
                        errorMessage = 'Error interno del servidor. Por favor, contacte al administrador.';
                    } else if(status === 'timeout') {
                        errorMessage = 'La operación excedió el tiempo de espera (5 minutos). El archivo es demasiado grande.';
                    } else if(status === 'parsererror') {
                        errorMessage = 'Error al procesar la respuesta del servidor. El formato no es válido.';
                    } else {
                        errorMessage = 'Error al procesar el archivo: ' + error + '<br><br>Detalles: ' + xhr.responseText;
                    }
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Error de conexión',
                        html: errorMessage,
                        confirmButtonColor: '#3085d6'
                    });
                    
                    $('#import').attr('disabled', false);
                    $('#import').val('Importar');
                }
            });
        });
        $('#Inicio0').on('change', function() {
            var Inicio0 = $('#Inicio0').val();
            var id_admin = '<?php echo $id_admin ?>';
            $.ajax({
                type: "post",
                url: "../filtro_ausentismo.inc.php",
                data: "id_admin=" + id_admin + "&Inicio0=" + Inicio0,
                success: function (response) {
                    inicio_filtro();
                    fetchTasks();
                },   
            });
        });
         $('#Terminacion0').on('change', function() {
            var Terminacion0 = $('#Terminacion0').val();
            var id_admin = '<?php echo $id_admin ?>';
            $.ajax({
                type: "post",
                url: "../filtro_ausentismo.inc.php",
                data: "id_admin=" + id_admin + "&Terminacion0=" + Terminacion0,
                success: function (response) {
                    terminacion_filtro();
                    fetchTasks();
                },   
            });
        });
        inicio_filtro();
        function inicio_filtro() {
            var id_admin = '<?php echo $id_admin ?>';
            $.ajax({
                type: "post",
                url: "../inicio_filtro_ausentismo.php",
                data: "id_admin=" + id_admin,
                success: function(response) {
                const tasks = JSON.parse(response);
                let Inicio = '';
                tasks.forEach(task => {
                    Inicio += `${task.Inicio}`
                    });
                 $('#Inicio0').val(Inicio);
                }
            });
        };
        terminacion_filtro();
        function terminacion_filtro() {
            var id_admin = '<?php echo $id_admin ?>';
            $.ajax({
                type: "post",
                url: "../terminacion_filtro_ausentismo.php",
                data: "id_admin=" + id_admin,
                success: function(response) {
                const tasks = JSON.parse(response);
                let Terminacion = '';
                tasks.forEach(task => {
                    Terminacion += `${task.Terminacion}`
                    });
                 $('#Terminacion0').val(Terminacion);
                }
            });
        };
        function fetchTasks() {
            var id_admin = '<?php echo $id_admin ?>';
            var codigo = '<?php echo $id_admin_aus ?>';
            var year = '<?php echo $Year2?>';
            $.ajax({
                    type: "post",
                    url: "../tasks2.php",
                    data: "id_admin=" + id_admin + "&codigo=" + codigo + "&year=" + year,
                    success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `
                              <tr taskId="${task.id}" taskId1="${task.Nombre}" taskId2="${task.Apellido1}" taskId3="${task.Apellido2}">
                                  <td id="td" style="text-align:center!important"><button title="Perfil del Usuario" class="task-item">${task.Cedula}</button></td>
                                  <td id="td">${task.Nombre}</td>
                                  <td id="td">${task.Apellido1}</td>
                                  <td id="td" style="text-align:center">${task.Cargo}</td>
                                  <td id="td" style="text-align:center">${task.Codigo}</td>
                                  <td id="td" style="text-align:center">${task.Tipo}</td>
                                  <td id="td" style="text-align:center">${task.Total}</td>
                                  <td id="td" style="text-align:left">${task.Diagnostico}</td>
                                  <td id="td" style="text-align:center">$ ${task.Costo}</td>
                                  <td id="td" style="text-align:center">${task.Inicio}</td>
                                  <td id="borderout"><button class="task-editar" title="Editar"><span class="fa fa-pencil"></span></button></td>
                                  <td id="borderout"><button class="task-delete" title="Eliminar"><span class="fa fa-trash"></span></button></td>
                              </tr>`
                        });
                    $('#tasks').html(template);
                }
            });
        };
    });
    $(document).ready(function () {
        $(".load").fadeOut("slow");
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
     $('.effect-6').change(function () {
        empresa = $('.effect-6').val();
        switch (empresa) {
            case 'SISTEMA':
                location.href="../sistema";
                break;
            case 'AUDITIVO':
                location.href="../auditivo";
                break;
            case 'CARDIOVASCULAR':
                location.href="../cardiovascular";
                break;
            case 'OSTEOMUSCULAR':
                location.href="../osteomuscular";
                break;    
            case 'RESPIRATORIO':
                location.href="../respiratorio";
                break;
            case 'VISUAL':
                location.href="../visual";
                break; 
            case 'PSICOSOCIAL':
                location.href="../psicosocial-sve";
                break; 
             case 'BIOLOGICO':
                location.href="../biologico";
                break;    
            case 'CRÓNICOS':
                location.href="../cronicos";
                break;     
            case 'SEGUIMIENTOS':
                location.href="../seguimientos";
                break;    
            case 'RIESGO-PS':
                location.href="../psicosocial";
                break;
            case 'DIAGNÓSTICO':
                location.href="../diagnostico_general";
                break;     
            case 'AUSENTISMO':
                location.href="../ausentismo";
                break;
            case 'URNA VIRTUAL':
                location.href="../satisfaccion";
                break;  
            case 'LABORATORIO':
                location.href="../laboratorio";
                break;   
            case 'AGENDA':
                location.href="../agendamiento";
                break;   
            case 'CONSENTIMIENTO':
                location.href="../consentimiento_teleconsulta";
                break;     
            case 'ISRA':
                location.href="../resultados-isra";
                break;   
            case 'NOTIFICACIONES':
                location.href="../notificaciones_";
                break; 
        }        
    });
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
        var o = $(this).attr("data-easein");
        "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
$(document).ready(function() {
    $.ajax({
        type: "post",
        url: "../codigo.php",
            success: function(response) {
            const tasksR = JSON.parse(response);
            let id = '';
            let id_admin = '';
            tasksR.forEach(taskR => {
                id += `${taskR.id}`,
                id_admin += `${taskR.id_admin}`
            });
            document.getElementById("id_codigo").value = (id);
        }
    });
    setInterval(function(){ 
        fetchTasks0(); 
        codigo();
    }, 3000);
    $(document).on('click', '.nuevo_cliente', (e) => {
        $('#form_clientes').trigger("reset");
        $("#costumModal3").modal("hide");
        $("#costumModal16").modal("show");
    })
    codigo();
    function codigo() {
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
    } 
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
            window.location = "https://www.cedisalud.com.co/ausentismo"
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
                        fetchTasks0();
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
                document.getElementById("id_redireccion").value = (id);
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
                    
                    document.getElementById("file-8").addEventListener('click',limpiar);
                    document.getElementById("file-9").addEventListener('click',limpiar);
                }
            });
            return false;
        });
        fetchTasks0();
        function fetchTasks0() {
        var idtabla = $('#id_codigo').val();
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
                                    <td id="td" style="text-align:left">${task.Sede}</td>
                                    <td id="td" style="text-align:left">${task.PersonaC}</td>
                                    <td id="td">${task.TelefonoC}</td>
                                   </tr> `
                    });
                    $('#admin01').html(template);
                }
            });
        }
    });   
    $('#export_all').click(function() {     
         window.location.assign('https://www.cedisalud.com.co/ausentismo?pdf');
    });
    $(document).on('click', '#export_xlsx1', (e) => {
        location.href="../phpspreadsheet/plantilla_ausentismo.xlsx";
    });  
    $(document).on('click', '#export_xlsx2', (e) => {
        location.href="../phpspreadsheet/plantilla_ausentismo2.xlsx";
    });  
    $(document).on('click', '#export_xlsx3', (e) => {
        location.href="../phpspreadsheet/plantilla_ausentismo3.xlsx";
    });  
    $('#redireccion').change(function () {
        var id_redireccion = $('#id_redireccion').val();
        var redireccion0 = $('#redireccion').val();
        switch (redireccion0) {
            case 'ADMINISTRADOR':
                var Activo  = 1;
                var Activo1 = 0;
                var Activo2 = 0;
                break;
            case 'RIESGO-PS':
                var Activo  = 0;
                var Activo2 = 1;
                var Activo3 = 0;
                break;
            case 'AUSENTISMO':
                var Activo  = 0;
                var Activo2 = 0;
                var Activo3 = 1;
                break;
        }
        const postData = {
            Activo:  Activo,
            Activo2: Activo2,
            Activo3: Activo3,
            id: id_redireccion
        };
        const url = '../redireccion.php';
        $.post(url, postData, (response) => {
           
        });
    })
    /*setInterval(function () {
        fetchTasks6();
    }, 500);*/
    fetchTasks6();
        function fetchTasks6() {
        var year = '<?php echo $Year2?>';
        var Codigo = '<?php echo  $id_admin_aus ?>';
        $.ajax({
            type: "post",
            data: "Codigo=" + Codigo + "&year=" + year,
            url: "../contador_ausentismo.php",
            success: function (response) {
            const tasks = JSON.parse(response);
                    let contador = '';
                    tasks.forEach(task => {
                        contador += `${task.contador}`
                    });
                    $('#contador').html(contador);
                }
        });
    }

    myFunction();
    function myFunction() {
        if('<?php echo $Botones ?>' == 1) {
            $('.X1').show();
        }     
        if('<?php echo $Botones ?>' == '0') {
            $('.X1').hide();
        }
    };
    
</script>
</body>
</html>
