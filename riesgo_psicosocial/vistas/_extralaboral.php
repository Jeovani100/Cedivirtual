 <!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resultado extralaboral individual</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<script src="http://code.jquery.com/jquery-latest.js"></script>
<?php
     error_reporting(0);
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion.inc.php';
    include_once 'app/redireccion.inc.php';
    include_once 'app/repositorioadmin.inc.php';
    if (!controlsesion::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGIN);}
    conexion :: abrir_conexion();
    $id = $_SESSION['id'];
    $stmt = $mysqli->prepare("SELECT id_admin, Activo, PersonaC FROM admin WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $stmt->close();
    $id_ = $row['id_admin'] ?? null;
    $Activo = $row['Activo'] ?? 0;
    if ($Activo == 1){
        $id_admin = $id_;
    } else {
        $id_admin = $id;
    }
    $_SESSION['id_usuario'] = $id_admin;
    $Activo = $row['Activo'] ?? 0;
    $Autor = $row['PersonaC'] ?? '';
    $stmt1 = $mysqli->prepare("SELECT Nit, Razon FROM admin WHERE id = ?");
    $stmt1->bind_param("s", $id_admin);
    $stmt1->execute();
    $resultado1 = $stmt1->get_result();
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
    $stmt1->close();
    $Nit = $row1['Nit'] ?? '';
    $Razon = $row1['Razon'] ?? '';
    $Fecha = date('d-m-Y');
    $id7 = $_GET["xl4zyw6"] ?? ''; 
    $stmt4 = $mysqli->prepare("SELECT * FROM datosg WHERE id = ?");
    $stmt4->bind_param("s", $id7);
    $stmt4->execute();
    $resultado4 = $stmt4->get_result();
    $row4 = $resultado4->fetch_array(MYSQLI_ASSOC);
    $stmt4->close();
    $Cedula = $row4['Cedula'] ?? '';
    $Apellido1 = $row4['Apellido1'] ?? '';
    $Apellido2 = $row4['Apellido2'] ?? '';
    $Nombre = $row4['Nombre'] ?? '';
    $Genero = $row4['Genero'] ?? '';
    $Nacimiento = $row4['Nacimiento'] ?? '';
    $Anon = $row4['Anon'] ?? '';
    $Edad = $row4['Edad'] ?? '';
    $newDate2 = !empty($Nacimiento) ? date("d/m/Y", strtotime($Nacimiento)) : '';
    $Civil = $row4['Civil'] ?? '';
    $Escolaridad = $row4['Escolaridad'] ?? '';
    $Ocupacion = $row4['Ocupacion'] ?? '';
    $Departamentor = $row4['Departamentor'] ?? '';
    $Municipior = $row4['Municipior'] ?? '';
    $Estrato = $row4['Estrato'] ?? '';
    $Vivienda = $row4['Vivienda'] ?? '';
    $Dependencia = $row4['Dependencia'] ?? '';
    $Departamentot = $row4['Departamentot'] ?? '';
    $Municipiot = $row4['Municipiot'] ?? '';
    $Empresa = $row4['Empresa'] ?? '';
    $Añose = $row4['Añose'] ?? '';
    $Cargo = $row4['Cargo'] ?? '';
    $Nivel = $row4['Nivel'] ?? '';
    $Añosc = $row4['Añosc'] ?? '';
    $Seccion = $row4['Area'] ?? '';
    $Tipo = $row4['Tipo'] ?? '';
    $Horas = $row4['Horas'] ?? '';
    $Salario = $row4['Salario'] ?? '';
    $Fecha_prueba = $row4['Fecha_prueba'] ?? '';
    if (!empty($Fecha_prueba)) {
        $fechaEntera = strtotime($Fecha_prueba);
        $año = date("Y", $fechaEntera);
        $mes = date("m", $fechaEntera);
        $dia = date("d", $fechaEntera);
        $hora = date("H", $fechaEntera);
        $minutos = date("i", $fechaEntera);
        $segundos = date("s", $fechaEntera);
    }
    $Fecha = $row4['Fecha_registro'] ?? '';
    if (!isset($Out_edad) || $Out_edad == 0) {  
        $etiqueta = 'Edad:';
        $dato = $Edad . ' años';
    } else {
        $etiqueta = 'Edad:';
        $dato = $Edad . ' años';
    }
    $TF = $row4["TF2"] ?? '';
    $RF = $row4["RF2"] ?? '';
    $CRI = $row4["CRI2"] ?? '';
    $SE = $row4["SE2"] ?? '';
    $CV = $row4["CV2"] ?? '';
    $IE = $row4["IE2"] ?? '';
    $DV = $row4["DV2"] ?? '';
    $E = $row4["Extra"] ?? '';
    $stmt5 = $mysqli->prepare("SELECT id_usuario, Forma FROM extralaboral WHERE id_usuario = ?");
    $stmt5->bind_param("s", $id7);
    $stmt5->execute();
    $resultado5 = $stmt5->get_result();
    $row5 = $resultado5->fetch_array(MYSQLI_ASSOC);
    $stmt5->close();
    $id_usuarioE = $row5["id_usuario"] ?? '';
    $FormaEX = $row5["Forma"] ?? '';
    if ($id_usuarioE == "") {
        $validacionE = 0;
    } else {
        $validacionE = 1;
    } 
    if ($FormaEX == "A") {
        $FormaE = "Forma A";
    } else {
        $FormaE = "Forma B";
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
    	background: #eaeaea;
        font-family: verdana;
        padding: 0px !important;
        margin: 0px !important;
        font-size:13px;
        line-height: 2.8rem;
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
        background: url('../imagine/') 50% 50% no-repeat #ffffff;
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
    .header,
    .footer {
        min-height: 60px;
        padding: 0 15px;
    }
    .header {
        position: fixed;
        left: 0;
        right: 0;
        z-index: 1002;
        height:3em;
    }
    .black-bg {
        background: #22242a;
        z-index: 3 !important;
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
        font-family: narrow;
        font-size: 20px;
        letter-spacing: 1px;
        color: #f2f2f2;
        float: left;
        margin-top: 15px;
    }
    a.logo b {
        font-weight: 900;
    }
    a.logo:hover,
    a.logo:focus {
        text-decoration: none;
        outline: none;
    }
    a.logo span {
        color: #a9d312;
    }
    .notify-row {
        float: left;
        margin-left: 92px;
        color: #ffffff;
        font-family: verdana;
        font-size: 20px;
        display: block !important;
        margin-top: 0.7em;
    }
    ul.top-menu > li > a {
        color: #666666;
        font-size: 16px;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        border: 1px solid #666666 !important;
        padding: 2px 6px;
        margin-right: 15px;
    }
    ul.top-menu > li > a:hover,
    ul.top-menu > li > a:focus {
        border: 1px solid #b6b6b6 !important;
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
    input[type="file"].inputfile {
        width: 0.1px;
        height: 0.1px;
        color:#000000!important;
        overflow: hidden;
        z-index: -1; 
    }
    .inputfile-8 + label {
        color: #333333;
        font-family:verdana;
        letter-spacing:0.5px;
        border:0;
        font-family:verdanab!important;
    }
    .inputfile-8 + label span {
        padding: 4px;
        margin:0!important;
        font-size:13px;
    }
    @media screen and (max-width: 50em) {
        .inputfile-8 + label strong {
            display: block;
        }
    }
    input[type="radio"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
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
        border:1px solid #f58634!important;
    }
    .lista td {
        background:#eaeaea;
        color:#333333;
        margin-top:2em;
        border:1px solid #333333!important;
        height:5em;
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
    #search:focus ~ .focus-border{
        float:left!important;
        margin-right:-0.4px;
        width: 14em; 
        transition: 0.4s; 
        border: 2px solid #f58634;
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
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        width:100%;
        text-align:center;
        padding:0.6em!important;
        border:1px solid #f58634!important;
    }
    .table td {
        text-align:left;
        padding:1em;
        border:1px solid #333333!important;
        vertical-align:middle!important;
    }
    .tablaintra {
        background:#eaeaea;
        text-align:center;
        width:100%;
        font-family:verdanab;
        line-height:2.5rem;
        color:#333333;
        font-size:13px;
        border:1px solid #f58634!important
    }
    .tablaintra th {
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: #c6c9d2;
        color:#333333;
        font-family:Verdanab;
        text-align:center;
        border:1px solid #f58634!important;
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
        padding:6px;
        margin:0;
        border:0;
        transition: font-size 0.6s linear
    }
    .task-item:hover, .submit:hover{
        font-size:15px;
        transition: font-size 0.6s linear;
    }
    .task-estres,
    .task-extra,
    .task-intraA,
    .task-delete, .submit,
    .task-editar, .submit {
        width:36px;
        height: 36px;
        font-family:Moristonb;
        color: #666666;
        background:#eaeaea;
        border: 1px solid #333333;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-estres:hover, .submit:hover,
    .task-extra:hover, .submit:hover,
    .task-intraA:hover, .submit:hover {
        color: #006080;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-editar:hover, .submit:hover {
        color:#e69900;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-delete:hover, .submit:hover{
        color: #cc0000;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    #registro label {
        position: absolute;
        display: block;
        width: 35px;
        height: 48px;
        line-height: 35px;
        margin-left:0.5em;
        font-size:16px;
    }
    #registro input {
        width: 270px;
        height: 35px;
        padding-left: 15px;
        background:#ffffff;
        border-radius:0px;
        border-color:#333333!important;
        border-width:1px!important;
    }
    #registro select {
        width: 270px;
        height: 35px;
        padding-left: 2px;
        padding-right: 2px;
        background:#ffffff;
        border-radius:0px;
        border-color:#333333!important;
        border-width:1px!important;
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
    .borderout2 {
        font-family:Verdanab!important;
        text-align:left;
        padding:10px;
    }
    .table_consolidados {
        text-align:center;
        table-layout: fixed;
        border:1px solid #f58634!important;
        font-size:12px;
    }
    .table_consolidados th {
        color:#000000;
        font-family:Verdanab;
        text-align:center;
        line-height: 1.8rem!important;
        width:100%;
        padding:0.6em!important;
        border:1px solid #f58634!important;
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
    #registro textarea {
        border: none;
        width:100%!important;
        text-align:justify;
        font-family:verdana;
        background:#ebf9fa;
        padding:1.8em;
        color:#000000;
        border:1px solid #333333!important
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
        .table {
            width:100%!important;
        }
        .table td,
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
        .task-estres,
        .task-extra,
        .task-intraA,
        .task-delete, .submit,
        .task-editar, .submit {
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
        	margin-top:-4.15em!important;
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
        #dominio {
            display:none!important;
        }
        #dominio2 {
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
        #costumModal11 .modal-lg {
            margin:0!important;
            padding:0!important;
            width:100%!important;
        }
    }
    .title {
        font-family:verdanab;
        margin-bottom:2em;
    }
    .muyalto {
        font-family:Verdanab;
        font-size:14px;
        color:#9d3715;
        text-align:center;
    }
    .ralto {
        font-family:Verdanab;
        font-size:14px;
        color:#e7744f;
        text-align:center;
    }
    .rmedio {
        font-family:Verdanab;
        font-size:14px;
        color:#666666;
        text-align:center;
    }
    .rbajo {
        font-family:Verdanab;
        font-size:14px;
        color:#99cc00;
        text-align:center;
    }
    .muybajo {
        font-family:Verdanab;
        font-size:14px;
        color:#394d00;
        text-align:center;
    }
    #dominio {
        font-family:Verdanab;
    }
    #dominio2 {
        font-family:Verdanab;
        display:none;
        text-align:center!important;
    }
    .pagination {
        text-align:center;
    }
    .pagination li a{
        width:2.1em;
        height:2.1em;
        color: #000000;
        background:transparent;
        border: 1px solid #333333;
        font-size:19px;
        border-radius:0;
        padding:6px;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
     [data-title]:hover:after {
        opacity: 1;
        transition: all 0.1s ease 0.5s;
        visibility: visible;
    }
    [data-title]:after {
        content: attr(data-title);
        width:10em!important;
        background-color: #ffffff;
        color: #333333;
        font-size: 14px;
        font-family: verdanab;
        position: absolute;
        padding:6px;
        top: -3em;
        right: 100%;
        text-align:center;
        box-shadow: 1px 1px 3px #222222;
        opacity: 0;
        border: 1px solid #333333;
        z-index: 99999;
        visibility: hidden;
        border-radius:0;
    }
    [data-title] {
        position: relative;
    }
     input[type="checkbox"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
        visibility:hidden;
    }
    #check2::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 21px;
        height: 21px;
        background-color:transparent;
        border:1px solid #71788e;
        text-align:center;
    }
    #check2::after {
        display: inline-block;
        position: absolute;
        font-size:25px!important;
        color:#e7744f;
        margin-left:0px;
        margin-top:-4px;
    }
    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
        font-size: 18px!important;
    } 
  
  /* ===== ESTILO VIBRANTE CON COLOR #e0ebad - VERSIÓN 4 COLUMNAS ===== */
    /* Fondo transparente y sin border-radius */

    .tablabdm {
        width: 100%;
        max-width: 950px;
        margin: 0 auto;
        border-spacing: 0 6px;
        font-family: Verdana;
        font-size: 0.95rem;
        line-height: 1.5;
        color: #2d3a1f;
    }

    /* ===== FILAS ===== */
    .tablabdm tr {
        background: transparent;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .tablabdm tr:hover {
        transform: translateY(-2px);
    }

    /* ===== CELDAS ===== */
    .tablabdm td {
        padding: 12px 16px;
        vertical-align: middle;
        background: transparent;
        border: none;
    }

    /* ===== ETIQUETAS (columna 1 y 3) ===== */
    .tablabdm td:nth-child(1),
    .tablabdm td:nth-child(3) {
        font-family:Verdanab!important;
        color: #2d3a1f;
        font-size: 13px;
        background: #fbf3fb;
        width: 22%;
    }

    /* ===== VALORES (columna 2 y 4) ===== */
    .tablabdm td:nth-child(2),
    .tablabdm td:nth-child(4) {
        font-family: Verdana;
        color: #1f2a14;
        font-size: 13px;
        background: #ffffff;
        width: 32%;
        text-align:left;
    }

    /* ===== BADGE PARA LOS VALORES (puntitos verdes) ===== */
    .tablabdm td:nth-child(2)::before,
    .tablabdm td:nth-child(4)::before {
        content: '';
        display: inline-block;
        width: 6px;
        height: 6px;
        background: #d4e3a3;
        border-radius: 50%;
        margin-right: 10px;
        opacity: 0.6;
        vertical-align: middle;
        flex-shrink: 0;
    }

    .tablabdm tr:hover td:nth-child(2)::before,
    .tablabdm tr:hover td:nth-child(4)::before {
        opacity: 1;
        background: #b8cb7a;
        box-shadow: 0 0 0 3px rgba(224, 235, 173, 0.3);
    }

    /* ===== QUITAR BADGE EN VALORES VACÍOS ===== */
    .tablabdm td:nth-child(2):empty::before,
    .tablabdm td:nth-child(4):empty::before {
        content: '—';
        color: #9aaa7a;
        opacity: 0.6;
        background: none;
        width: auto;
        height: auto;
        margin-right: 0;
        box-shadow: none;
        border-radius: 0;
    }

    /* ===== RESPONSIVE: TABLA EN TARJETAS ===== */
    @media (max-width: 768px) {
        .tablabdm {
            border-spacing: 0 8px;
            font-size: 0.85rem;
            max-width: 100%;
        }
        .tablabdm tr {
            display: block;
            background: transparent;
        }
        .tablabdm tr:hover {
            transform: translateY(-3px);
        }
        .tablabdm td {
            display: block;
            width: 100% !important;
            padding: 8px 14px;
            border: none !important;
            white-space: normal !important;
        }
        /* Etiquetas */
        .tablabdm td:nth-child(1),
        .tablabdm td:nth-child(3) {
            background: rgba(224, 235, 173, 0.20);
            padding-top: 10px;
            padding-bottom: 4px;
            font-size: 12px;
            font-weight: 700;
            border-bottom: 1px solid rgba(224, 235, 173, 0.4);
        }
        /* Valores */
        .tablabdm td:nth-child(2),
        .tablabdm td:nth-child(4) {
            background: transparent;
            padding-top: 4px;
            padding-bottom: 10px;
            font-size: 14px;
        }
        .tablabdm td:nth-child(2)::before,
        .tablabdm td:nth-child(4)::before {
            margin-right: 8px;
            width: 5px;
            height: 5px;
        }
        .borderout1,
        .borderout2 {
            font-size:14px!important;
            text-align:center!important;
        }
        /* Por defecto en celulares, el sidebar está visible */
        #sidebar {
            margin-left: 0 !important;
        }
        #main-content {
            margin-left: 210px !important; /* O 0 si prefieres que el contenido ocupe todo el ancho de fondo */
        }
    
        /* Cuando se le dé clic a la hamburguesa y se active la clase, se oculta */
        body.sidebar-closed #sidebar {
            margin-left: -210px !important;
        }
        body.sidebar-closed #main-content {
            margin-left: 0 !important;
        }
    }
    @media (max-width: 480px) {
        .tablabdm td {
            padding: 6px 12px;
        }

        .tablabdm td:nth-child(1),
        .tablabdm td:nth-child(3) {
            font-size: 11px;
        }

        .tablabdm td:nth-child(2),
        .tablabdm td:nth-child(4) {
            font-size: 13px;
        }
    }

    /* ===== ANIMACIÓN SUTIL AL CARGAR ===== */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .tablabdm tr {
        animation: fadeInUp 0.4s ease forwards;
        opacity: 0;
    }

    .tablabdm tr:nth-child(1) { animation-delay: 0.02s; }
    .tablabdm tr:nth-child(2) { animation-delay: 0.04s; }
    .tablabdm tr:nth-child(3) { animation-delay: 0.06s; }
    .tablabdm tr:nth-child(4) { animation-delay: 0.08s; }

    @media (prefers-reduced-motion: reduce) {
        .tablabdm tr {
            animation: none;
            opacity: 1;
        }
    }
</style>
</head>
<body>
<div class="loader"></div>
<div style="display:none"></span><span id="Profesional"></span> <span id="Tarjeta"></span> <span id="Licencia"></span> <span id="Expedicion"></span> <span id="Archivo2"></span></div>
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
   <p style="font-family:verdanab;font-size:20px;color:#333333;text-align:center">RESULTADO EXTRALABORAL INDIVIDUAL</p><br>
    <p style="font-size:20px;line-height:1em;font-family:Narrow;letter-spacing:2px;text-align:center;">DATOS GENERALES DEL TRABAJADOR</p><br>
    <table class="tablabdm table-sm" align="center">
        <tr>
            <td class="borderout2" style="font-family:Verdanab">Nombre:</td>
            <td class="borderout1"><?php echo $Nombre.' '.$Apellido1.' '.$Apellido2 ?></td>
            <td class="borderout2" style="font-family:Verdanab">Documento de identidad:</td>
            <td class="borderout1"><?php echo $Cedula ?></td>
        </tr>
        <tr>
            <td class="borderout2" style="font-family:Verdanab">Cargo:</td>
            <td class="borderout1"><?php echo $Cargo ?></td>
            <td class="borderout2" style="font-family:Verdanab">Area:</td>
            <td class="borderout1"><?php echo $Seccion ?></td>
        </tr>
        <tr>
            <td class="borderout2" style="font-family:Verdanab"><?php  echo $etiqueta; ?>:</td>
            <td class="borderout1"><?php  echo $dato; ?></td>
            <td class="borderout2" style="font-family:Verdanab">Género:</td>
            <td class="borderout1"<?php echo $Genero ?></td>
        </tr>
        <tr>
            <td class="borderout2" style="font-family:Verdanab">Empresa:</td>
            <td class="borderout1"><?php echo $Empresa ?></td>
            <td class="borderout2" style="font-family:Verdanab">Fecha de aplicación:</td>
            <td class="borderout1"><?php 
                $Date = $Fecha_prueba;
                $newDate = date("d/m/Y", strtotime($Date));
                echo $newDate;
            ?></td>
        </tr>
    </table><br>
    <p style="font-size:20px;line-height:1em;font-family:Narrow;letter-spacing:2px;text-align:center;">RESULTADOS DEL CUESTIONARIO</p><br>
     <table class="table table-sm" id="total" style="width:76%" align="center">
        <tr>
            <td style="font-family:Verdanab;text-align:center">EXTRALABORAL - <span id="formaEA"style="color:#e7744f;letter-spacing:2px">FORMA A</span><span id="formaEB"style="color:#e7744f;letter-spacing:2px">FORMA B</span></td>
            <td style="padding:0;width:31.3%"><div style="height:100%" id="E" class="E"></div><div style="height:100%" id="E2" class="E2"></div></td>
            <td style="width:18%"><div class="E">
                <?php
                if ($FormaEX == 'A') {
                    if ($E > 29.1) {
                        $Et= 'Muy Alto';
                        $Ec= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($E > 22.7) {
                        $Et= 'Alto';
                        $Ec= '231, 116, 79';
                        echo "<p class='ralto' >Alto</p>";
                    } elseif ($E > 17) {
                        $Et= 'Medio';
                        $Ec= '102, 102, 102';
                        echo "<p class='rmedio'>Medio</p>";
                    } elseif ($E > 11.4) {
                        $Et= 'Bajo';
                        $Ec= '115, 153, 0';
                        echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($E > 0) {
                        $Et= 'Sin Riesgo';
                        $Ec= '57, 77, 0';
                        echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }    
                ?></div> 
                <div class="E2">
                <?php
                if ($FormaEX == 'B') {
                    if ($E > 32.4) {
                        $Et= 'Muy Alto';
                        $Ec= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($E > 24.3) {
                        $Et= 'Alto';
                        $Ec= '231, 116, 79';
                        echo "<p class='ralto' >Alto</p>";
                    } elseif ($E > 17.8) {
                        $Et= 'Medio';
                        $Ec= '102, 102, 102';
                        echo "<p class='rmedio'>Medio</p>";
                    } elseif ($E > 13) {
                        $Et= 'Bajo';
                        $Ec= '115, 153, 0';
                        echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($E > 0) {
                        $Et= 'Sin Riesgo';
                        $Ec= '57, 77, 0';
                        echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }    
                ?></div>
            </td>
        </tr>
    </table><br>   
   
    <table class="table table-sm" align="center">
        <tr id="trdatos">
            <th style="width:70%">Dimensiones</th>
            <th style="width:40%">Puntaje</th>
            <th style="width:20%">Nivel del Riesgo</th>
        </tr>
        <tr>
            <td>Tiempo fuera del trabajo</td>
            <td style="padding:0"><div style="height:100%" id="TF" class="TF"></div><div style="height:100%" id="TF2" class="TF2"></div></td>
            <td><div class="TF">
                <?php
                if ($FormaEX == 'A') {
                    if ($TF > 50.1) {
                        $TFt= 'Muy Alto';
                        $TFc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($TF > 37.6) {
                        $TFt= 'Alto';
                        $TFc= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($TF > 25.1) {
                        $TFt= 'Medio';
                        $TFc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($TF > 6.4 ) {
                        $TFt= 'Bajo';
                        $TFc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($TF > 0) {
                        $TFt= 'Sin Riesgo';
                        $TFc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }
                ?></div> 
                <div class="TF2">
                <?php
                if ($FormaEX == 'B') {
                    if ($TF > 50.1) {
                        $TFt= 'Muy Alto';
                        $TFc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($TF > 37.6) {
                        $TFt= 'Alto';
                        $TFc= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($TF > 25.1) {
                        $TFt= 'Medio';
                        $TFc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($TF > 6.4 ) {
                        $TFt= 'Bajo';
                        $TFc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($TF > 0) {
                        $TFt= 'Sin Riesgo';
                        $TFc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }    
                ?></div>
            </td>
        </tr>
        <tr>
            <td>Relaciones familiares</td>
            <td style="padding:0"><div style="height:100%" id="RF" class="RF"></div><div style="height:100%" id="RF2" class="RF2"></div></td>
            <td><div class="RF">
                <?php
                if ($FormaEX == 'A') {
                    if ($RF > 50.1) {
                        $RFt= 'Muy Alto';
                        $RFc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($RF > 33.4) {
                        $RFt= 'Alto';
                        $RFc= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($RF > 25.1) {
                        $RFt= 'Medio';
                        $RFc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($RF > 8.4) {
                        $RFt= 'Bajo';
                        $RFc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($RF > 0) {
                        $RFt= 'Sin Riesgo';
                        $RFc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }    
                ?></div> 
                <div class="RF2">
                <?php
                if ($FormaEX == 'B') {
                    if ($RF > 50.1) {
                        $RFt= 'Muy Alto';
                        $RFc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($RF > 33.4) {
                        $RFt= 'Alto';
                        $RFc= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($RF > 25.1) {
                        $RFt= 'Medio';
                        $RFc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($RF > 8.4) {
                        $RFt= 'Bajo';
                        $RFc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($RF > 0) {
                        $RFt= 'Sin Riesgo';
                        $RFc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }
                ?></div> 
            </td>
        </tr>    
        <tr>
            <td>Comunicación y relaciones interpersonales</td>
            <td style="padding:0"><div style="height:100%" id="CRI" class="CRI"></div><div style="height:100%" id="CRI2" class="CRI2"></div></td>
            <td><div class="CRI">
                <?php
                if ($FormaEX == 'A') {
                    if ($CRI > 30.1) {
                        $CRIt= 'Muy Alto';
                        $CRIc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CRI > 20.1) {
                        $CRIt= 'Alto';
                        $CRIc= '231, 116, 79';
                        echo "<p class='ralto' >Alto</p>";
                    } elseif ($CRI > 10.1) {
                        $CRIt= 'Medio';
                        $CRIc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CRI > 1) {
                        $CRIt= 'Bajo';
                        $CRIc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CRI > 0) {
                        $CRIt= 'Sin Riesgo';
                        $CRIc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }
                ?> </div>
                <div class="CRI2">
                <?php
                if ($FormaEX == 'B') {
                    if ($CRI > 35.1) {
                        $CRIt= 'Muy Alto';
                        $CRIc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CRI > 25.1) {
                        $CRIt= 'Alto';
                        $CRIc= '231, 116, 79';
                        echo "<p class='ralto' >Alto</p>";
                    } elseif ($CRI > 15.1) {
                        $CRIt= 'Medio';
                        $CRIc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CRI > 5.1) {
                        $CRIt= 'Bajo';
                        $CRIc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CRI > 0) {
                        $CRIt= 'Sin Riesgo';
                        $CRIc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }    
                ?> </div>
            </td>
        </tr>
        <tr>
            <td>Situación económica del grupo familiar</td>
            <td style="padding:0"><div style="height:100%" id="SE" class="SE"></div><div style="height:100%" id="SE2" class="SE2"></div></td>
            <td><div class="SE">
                <?php
                if ($FormaEX == 'A') {
                    if ($SE > 50.1) {
                        $SEt= 'Muy Alto';
                        $SEc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($SE > 33.4) {
                        $SEt= 'Alto';
                        $SEc= '231, 116, 79';
                        echo "<p class='ralto' >Alto</p>";
                    } elseif ($SE > 25.1) {
                        $SEt= 'Medio';
                        $SEc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($SE > 8.4) {
                        $SEt= 'Bajo';
                        $SEc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($SE > 0) {
                        $SEt= 'Sin Riesgo';
                        $SEc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }    
                ?> </div>
                <div class="SE2">
                <?php
                if ($FormaEX == 'B') {
                    if ($SE > 50.1) {
                        $SEt= 'Muy Alto';
                        $SEc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($SE > 41.8) {
                        $SEt= 'Alto';
                        $SEc= '231, 116, 79';
                        echo "<p class='ralto' >Alto</p>";
                    } elseif ($SE > 25.1) {
                        $SEt= 'Medio';
                        $SEc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($SE > 16.8) {
                        $SEt= 'Bajo';
                        $SEc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($SE > 0) {
                        $SEt= 'Sin Riesgo';
                        $SEc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }    
                ?> </div>
            </td>
        </tr>
        <tr>
            <td>Características de la vivienda y de su entorno</td>
            <td style="padding:0"><div style="height:100%" id="CV" class="CV"></div><div style="height:100%" id="CV2" class="CV2"></div></td>
            <td><div class="CV">
                <?php
                if ($FormaEX == 'A') {
                    if ($CV > 22.3) {
                        $CVt= 'Muy Alto';
                        $CVc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CV > 14) {
                        $CVt= 'Alto';
                        $CVc= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($CV > 11.2) {
                        $CVt= 'Medio';
                        $CVc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CV > 5.7) {
                        $CVt= 'Bajo';
                        $CVc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CV > 0) {
                        $CVt= 'Sin Riesgo';
                        $CVc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }    
                ?></div>
                <div class="CV2">
                <?php
                if ($FormaEX == 'B') {
                    if ($CV > 27.9) {
                        $CVt= 'Muy Alto';
                        $CVc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CV > 16.8) {
                        $CVt= 'Alto';
                        $CVc= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($CV > 11.2) {
                        $CVt= 'Medio';
                        $CVc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CV > 5.7) {
                        $CVt= 'Bajo';
                        $CVc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CV > 0) {
                        $CVt= 'Sin Riesgo';
                        $CVc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }    
                ?></div>
            </td>
        </tr>
        <tr>
            <td>Influencia del entrono extralaboral sobre el trabajo</td>
            <td style="padding:0"><div style="height:100%" id="IE" class="IE"></div><div style="height:100%" id="IE2" class="IE2"></div></td>
            <td><div class="IE">
                <?php
                if ($FormaEX == 'A') {
                    if ($IE > 41.8) {
                        $IEt= 'Muy Alto';
                        $IEc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($IE > 25.1) {
                        $IEt= 'Alto';
                        $IEc= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($IE > 16.8) {
                        $IEt= 'Medio';
                        $IEc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($IE > 8.4) {
                        $IEt= 'Bajo';
                        $IEc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($IE > 0) {
                        $IEt= 'Sin Riesgo';
                        $IEc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }    
                ?></div>
                <div class="IE2">
                <?php
                if ($FormaEX == 'B') {
                    if ($IE > 41.8) {
                        $IEt= 'Muy Alto';
                        $IEc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($IE > 25.1) {
                        $IEt= 'Alto';
                        $IEc= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($IE > 16.8) {
                        $IEt= 'Medio';
                        $IEc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($IE > 1) {
                        $IEt= 'Bajo';
                        $IEc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($IE > 0) {
                        $IEt= 'Sin Riesgo';
                        $IEc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }
                ?></div>
            </td>
        </tr>
        <tr>
            <td>Desplazamiento vivienda-trabajo-vivienda</td>
            <td style="padding:0"><div style="height:100%" id="DV" class="DV"></div><div style="height:100%" id="DV2" class="DV2"></div></td>
            <td><div class="DV">
                <?php
                if ($FormaEX == 'A') {
                    if ($DV > 43.9) {
                        $DVt= 'Muy Alto';
                        $DVc= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DV > 25.1) {
                        $DVt= 'Alto';
                        $DVc= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DV > 12.6) {
                        $DVt= 'Medio';
                        $DVc= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DV > 1) {
                        $DVt= 'Bajo';
                        $DVc= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DV > 0) {
                        $DVt= 'Sin Riesgo';
                        $DVc= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }
                ?></div>
                <div class="DV2">
                <?php
                if ($FormaEX == 'B') {
                    if ($DV > 43.9) {
                        $DV2t= 'Muy Alto';
                        $DV2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DV > 25.1) {
                        $DV2t= 'Alto';
                        $DV2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DV > 12.6) {
                        $DV2t= 'Medio';
                        $DV2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DV > 1) {
                        $DV2t= 'Bajo';
                        $DV2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DV > 0) {
                        $DV2t= 'Sin Riesgo';
                        $DV2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                }
                ?></div>
            </td>
        </tr>
    </table><br>
    <div class="col-md-12"> 
        <div class="col-md-8" align="center" style="padding:0!important">
             <form>
                <div class="row" id="registro" align="center" style="min-height:10em">
                    <p style="font-size:20px;line-height:1em;font-family:Narrow;letter-spacing:1px;text-align:center">OBSERVACIONES Y COMENTARIOS:</p><br>
                      <p id="observacionesv" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1em;color:#000000"></p>
                      <button class="task-editar" id="btnobservaciones" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
                      <textarea type="text" id="observaciones" class="form-control" rows="6" name="Texto" placeholder=""></textarea><br>
                      <input id="botonIA1" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
                      <div style="display:none" id="fecha_E"></div><br>
                </form>
            </div>
            <form name="formI2">
                <div class="row" id="registro" align="center">
                    <p style="font-size:20px;line-height:1em;font-family:Narrow;letter-spacing:1px;text-align:center">RECOMENDACIONES PARTICULARES:</p><br>
                    <p id="recomendacionesv" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1em;color:#000000"></p>
                    <button class="task-editar" id="btnrecomendaciones" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
                    <textarea type="text" id="recomendaciones" class="form-control" rows="6" name="Texto" placeholder=""></textarea></p><br>
                    <input id="botonIA2" type="submit" class="btn btn btn-default btn-block" style="width:12em"/><br>
            </form> 
            </div>  
        </div> 
        <div class="col-md-4" align="right">
            <table id="tablaresultados">
                <tr>
                    <td>
                        <button type="submit" id="export_all" name="login" class="nuevo" style="width:12em!important">Crear PDF</button><br><br>
                        <div style="text-align:center" id="content"></div>
                    </td>
                </tr>
                <!--<tr>
                    <td>
                        <button type="submit" name="login" class="nuevo" style="width:12em!important;border: 1px solid #666666!important;color:#666666">Guardar PDF</button>  
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="login" class="nuevo" style="width:12em!important;border: 1px solid #666666!important;color:#666666">Enviar PDF</button>
                    </td>
                </tr>-->
            </table>
        </div>
    </div>
</div>    
<div class="container" style="text-align:center"><br>
<?php switch ($id) {
    case 1: ?>
        <ul class="pagination" >
        <li><a href="<?php echo RUTA_TOTAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" style="border: 1px solid #333333" data-title="Total"><span class="fa fa-bar-chart"></span></a></li>
        <li><a href="<?php echo RUTA__INTRALABORAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Intralaboral"><span class="fa fa-puzzle-piece"></span></a></li> 
        <li class="active"><a href="<?php echo RUTA__EXTRALABORAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Extralaboral"><span class="fa fa-home"></span></a></li> 
        <li><a href="<?php echo RUTA__ESTRES.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Estrés"><span class="fa fa-link"></span></a></li> 
    </ul>
    <?php break;
    case 2: ?>
        <ul class="pagination" >
        <li><a href="<?php echo RUTA_TOTAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" style="border: 1px solid #333333" data-title="Total"><span class="fa fa-bar-chart"></span></a></li>
        <li><a href="<?php echo RUTA__INTRALABORAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Intralaboral"><span class="fa fa-puzzle-piece"></span></a></li> 
        <li class="active"><a href="<?php echo RUTA__EXTRALABORAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Extralaboral"><span class="fa fa-home"></span></a></li> 
        <li><a href="<?php echo RUTA__ESTRES.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Estrés"><span class="fa fa-link"></span></a></li> 
    </ul>
    <?php break;
    default: ?>
    <ul class="pagination" >
        <li><a href="" style="border: 1px solid #333333" data-title="Total"><span class="fa fa-bar-chart"></span></a></li>
        <li><a href="" data-title="Intralaboral"><span class="fa fa-puzzle-piece"></span></a></li> 
        <li><a href="" data-title="Extralaboral"><span class="fa fa-home"></span></a></li> 
        <li><a href="" data-title="Estrés"><span class="fa fa-link"></span></a></li> 
    </ul>
    <?php break;
} ?>
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
                    <th>Fecha de Registro</th>
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
    $(".loader").fadeOut("slow");
    $(document).ready(function () {
        $(".loader").fadeOut("slow");
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
        fetchTasks2();
        $(document).on('click', '.task-admin', (e) => {
                e.preventDefault();
                const element = $(this)[0].activeElement.parentElement.parentElement;
                const admin = $(element).attr('taskId2');
                const id = '<?php echo $id ?>';
                console.log(id)
                const postData = {
                    id: id,
                    admin:admin,
                };
                const url = '../insertar.php';
                $.post(url,  postData, (response) => {
                    window.location = "https://www.cedisalud.com.co/psicosocial/intralaboral"
               });
        });
        function fetchTasks2() {
            var razontabla = '<?php echo $Razon ?>';
            var idtabla = '<?php echo $id ?>';
            $.ajax({
                type: "post",
                url: "../listas/admin01.php",
                data: "id=" + idtabla,
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                         template += `<tr taskId2="${task.id}" >
                                <td id="td" style="font-family:verdanab"><a href="" data-toggle="modal" class="task-admin enlace">${task.Nit}</a></td>
                                <td id="td" style="text-align:left;font-family:verdanab"><a href="" data-toggle="modal" class="task-admin enlace">${task.Razon}</a></td>
                                <td id="td" style="text-align:left">${task.PersonaC}</td>
                                <td id="td">${task.TelefonoC}</td>
                                <td id="td" style="margin-bottom:3em!important">${task.Fecha_registro}</td>
                               </tr> `
                    });
                    $('#admin01').html(template);
                }
            });
        }
    }); 
        $("#btnobservaciones").click(function(e){
            e.preventDefault();
            $('#observacionesv').slideUp(1);
            $('#observaciones').slideDown(1);
            $('#botonIA1').slideDown(1);
            $('#btnobservaciones').slideUp(1);
        });
         $("#btnrecomendaciones").click(function(e){
            e.preventDefault();
            $('#recomendacionesv').slideUp(1);
            $('#recomendaciones').slideDown(1);
            $('#botonIA2').slideDown(1);
            $('#btnrecomendaciones').slideUp(1);
        });
        $(document).ready(function () {
            fetchTasks();
            $('#observaciones').hide();
            $('#recomendaciones').hide();
            $('#botonIA1').hide();
            $('#botonIA2').hide();
            
        //Escribir comentarios
        $(document).on('click', '#botonIA1', (e) => {
            e.preventDefault();
            const postData1 = {
                idE:'<?php echo $id_usuarioE  ?>',
                observacionesE:$('#observaciones').val(),
            };
            const url = '../editarbdg.php';
             $.post(url,  postData1, (response) => {
               fetchTasks();
               $('#observaciones').slideUp(1);
               $('#botonIA1').slideUp(1);
      	       $('#observacionesv').slideDown(1);
               $('#btnobservaciones').slideDown(1);
            });
        });
        //Escribir recomendaciones
        $(document).on('click', '#botonIA2', (e) => {
            e.preventDefault();
            const postData3 = {
                idER:'<?php echo $id_usuarioE ?>',
                recomendacionesE: $('#recomendaciones').val(),
            };
            const url = '../editarbdg.php';
             $.post(url,  postData3, (response) => {
               fetchTasks();
               $('#recomendaciones').slideUp(1);
               $('#botonIA2').slideUp(1);
      	       $('#recomendacionesv').slideDown(1);
               $('#btnrecomendaciones').slideDown(1);
            });
        });

    function fetchTasks() {    
        var idE ='<?php echo $id_usuarioE ?>';
        $.ajax({
            type: "post",
            url: "../recobservacionesE.php",
            data: "idE=" + idE,
            befforesed: function(){
    		},
            success: function (response) {
                const tasksIA2 = JSON.parse(response);
                let idE3= '';
                let Fecha3= '';
                let Observaciones3 = '';
                let Recomendaciones3 = '';
                tasksIA2.forEach(taskIA2 => {
                        idE3 += `${taskIA2.idE}`
                        Fecha3 += `${taskIA2.Fecha_registro3}`
                        Observaciones3 += `${taskIA2.Observaciones3}`
                        Recomendaciones3 += `${taskIA2.Recomendaciones3}`
                });    
                    var FechaE = (moment(Fecha3).format('DD/MM/YYYY'));
                    console.log(FechaE)
                    document.getElementById('fecha_E').innerHTML = FechaE;
                    var Observaciones4= Observaciones3.replace(/<br [/][>]/g, "");
                    document.getElementById('observaciones').innerHTML = Observaciones4;
                    document.getElementById('observacionesv').innerHTML = Observaciones3;
                    var Recomendaciones4= Recomendaciones3.replace(/<br [/][>]/g, "");
                    document.getElementById('recomendaciones').innerHTML = Recomendaciones4;
                    document.getElementById('recomendacionesv').innerHTML = Recomendaciones3;
            },   
        });
        }
    });
      function limpiar() {
        document.formI.reset();
        return false;
    }
    //Graficar en JSPDF con Canvas
    $(document).ready(function() {
        $('#export_all').click(function() {
            $('#content').html('<div class="loading"><img src="../imagine/descarga.gif" class="img_carga" width="50"/></div>');
            setTimeout(function(){
                pdf2();
            },1000);
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
         // Función auxiliar para convertir cualquier gráfica de Highcharts a Base64 usando Promesas
        function obtenerImagenGrafica(selector) {
            return new Promise(function(resolve, reject) {
                var chartObj = $(selector).highcharts();
                if (!chartObj) {
                    return reject("No se encontró la gráfica para el selector: " + selector);
                }
                var svgData = chartObj.getSVG({
                    chart: {
                        width: 400,
                        backgroundColor: '#ffffff'
                    }
                });
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
                var img = new Image();
                img.onload = function() {
                    canvas.width = img.width;
                    canvas.height = img.height;
                    ctx.drawImage(img, 0, 0);
                    resolve(canvas.toDataURL('image/png'));
                };
                img.onerror = function() {
                    reject("Error al cargar la imagen SVG de la gráfica: " + selector);
                };
                img.src = 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svgData)));
            });
        }
         //Exportar PDF        
        async function pdf2() {
            var doc = new jsPDF({orientation: 'p',unit: 'pt',format: 'letter',compress: true});
            var img = new Image()
            img.src = '../imagine/logo.png'
            doc.addImage(img, 'png', 200, 80, 220, 180)
            var img2 = new Image();
            img2.src = '../imagine/informe6.png';
            doc.addImage(img2, 'png', 45, 370, 530, 22);
            if ('<?php echo $Genero ?>' == 'Masculino') {
                var nombre = 'Sr. '+'<?php echo $Nombre." ".$Apellido1." ".$Apellido2 ?>';
            } else {
                var nombre = 'Sra. '+'<?php echo $Nombre. " ".$Apellido1." ".$Apellido2 ?>';
            }
            var columns = [""];
            var data = [[nombre]];
            doc.autoTable(columns, data, { 
                margin: { top: 580, right: 100, left: 100 },  
                styles: { 
                    cellWidth: 'wrap', 
                    valign: 'middle', 
                    halign: 'center', 
                    fillColor: false,
                    textColor: [0, 0, 0]  // COLOR NEGRO
                }, 
                columnStyles: { 
                    0: { 
                        lineWidth: 0, 
                        fontSize: 16, 
                        font: 'helvetica', 
                        fontStyle: 'bold',
                        textColor: [0, 0, 0]  // COLOR NEGRO TAMBIÉN EN columnStyles
                    } 
                } 
            });
            var columns = [""];
            var data = [["I"]];
            doc.autoTable(columns, data, {
                margin: { top: 720, right: 0, left: 0, bottom: 0 }, 
                styles: { cellWidth: 10, halign: 'center', fillColor: [255, 255, 255], cellPadding: 20 }, 
                drawRow: function (row, data) { row.height = 50; },
                columnStyles: { 
                    0: { textColor: [0, 0, 0], fontSize: 10, font: 'helvetica', fontStyle: 'bold', lineColor: [103, 142, 152], lineWidth: 0, fillColor: [230, 230, 230] }, 
                    1: { textColor: [51, 51, 51], fontSize: 10, fontStyle: 'bold', fillColor: [230, 230, 230], halign: 'right' } 
                }
            });  
           
            doc.addPage();
            
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(60, 40, nombre);
            
            var f = new Date();
            var f2 = (f.getDate() + "/" + (f.getMonth() + 1) + "/" + f.getFullYear());
            doc.text(400, 40, "Fecha de elaboración:  " + f2);
            doc.setLineWidth(3); 
            doc.setDrawColor(204, 204, 204);
            doc.line(0, 50, 650, 50);
            
          // DATOS - SIN REMITIDO
            var data = [
                ["N° de identificación:", "<?php echo $Cedula ?>"],
                ["Cargo:", "<?php echo $Cargo ?>"],
                ["Departamento o sección:", "<?php echo $Seccion ?>"],
                ["<?php echo $etiqueta ?>", "<?php echo $dato ?>"],
                ["Género:", "<?php echo $Genero ?>"],
                ["Nombre de la empresa:", "<?php echo $Empresa ?>"],
                ["Fecha de aplicación del cuestionario:", "<?php echo $newDate ?>"]
            ];
            
            // COLUMNAS VACÍAS
            var columns = ["", ""];
            
            // GENERAR TABLA
            doc.autoTable(columns, data, {
                margin: { top: 85, right: 45, left: 45, bottom: 20 },
                
                styles: {
                    overflow: 'linebreak',
                    halign: 'left',
                    valign: 'middle',
                    fontSize: 10,
                    textColor: [50, 50, 50],
                    lineColor: [180, 180, 180],
                    lineWidth: 0.5,
                    cellPadding: 8
                },
                
                // ENCABEZADO BLANCO QUE CUBRE LA PRIMERA FILA
                headStyles: {
                    fillColor: [255, 255, 255],    // Fondo blanco
                    textColor: [255, 255, 255],    // Texto blanco (invisible)
                    fontSize: 0.1,
                    fontStyle: 'normal',
                    lineColor: [255, 255, 255],    // Borde blanco (invisible)
                    lineWidth: 0,
                    halign: 'left',
                    valign: 'middle'
                },
                
                bodyStyles: {
                    fontSize: 10,
                    textColor: [40, 40, 40],
                    lineColor: [180, 180, 180],
                    lineWidth: 0.5
                },
                
                columnStyles: {
                    0: {
                        fontStyle: 'bold',
                        fillColor: [243, 253, 232],
                        cellWidth: 45,
                        textColor: [0, 0, 0],
                        lineColor: [180, 180, 180],
                        lineWidth: 0.5
                    },
                    1: {
                        fillColor: [255, 255, 255],
                        cellWidth: 110,
                        textColor: [30, 30, 30],
                        lineColor: [180, 180, 180],
                        lineWidth: 0.5
                    }
                },
                
                alternateRowStyles: {
                    fillColor: [248, 248, 248],
                    lineColor: [180, 180, 180],
                    lineWidth: 0.5
                },
                
                tableLineColor: [180, 180, 180],
                tableLineWidth: 0.5,
                theme: 'plain',
                cellPadding: 8,
                showHead: false
            });
            
            // Línea decorativa
            doc.setDrawColor(243, 253, 232);
            doc.setLineWidth(2);
            doc.line(50, 55, 200, 55);
            
            // LÍNEA BLANCA EN LA POSICIÓN Y = 70
            doc.setFillColor(255, 255, 255);
            doc.rect(0, 84, doc.internal.pageSize.width, 20, 'F');
        
            doc.setTextColor(77, 77, 77);
            doc.setFontSize(12);
            doc.text(100, 340, 'EXTRALABORAL - ' + '<?php echo $FormaE ?>');
            
            if ('<?php echo $id_usuarioA ?>' != "") {  
                var imageData2 = await obtenerImagenGrafica('.E');
                doc.addImage(imageData2, 'PNG', 314, 325, 130, 22);
                doc.text(446, 340, '<?php echo $E?>');
                doc.setTextColor(<?php echo $Ec ?>);
                doc.text(485, 340, '<?php echo $Et ?>');
            } else { 
                var imageData2 = await obtenerImagenGrafica('.E2');
                doc.addImage(imageData2, 'PNG', 314, 325, 130, 22);
                doc.text(446, 340, '<?php echo $E ?>');
                doc.setTextColor(<?php echo $Ec ?>);
                doc.text(485, 340, '<?php echo $Et ?>');    
            };

            //Encabezado puntaje
            doc.setFont("helvetica");
            doc.setFontType("bold");
            doc.setFontSize(10);
            doc.setTextColor(0, 0, 0);
            doc.text(150, 420, 'DIMENSIONES'); 
            doc.setFontType("bold");
            doc.setTextColor(0, 0, 0);
            doc.text(370, 420, 'PUNTAJE'); 
            doc.text(500, 420, 'NIVEL'); 
            
            //Tiempo fuera del trabajo  
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 443, 'Tiempo fuera del trabajo');
            if ("<?php echo $FormaEX ?>" == 'A') {  
                var imageData1 = await obtenerImagenGrafica('.TF');
                doc.addImage(imageData1, 'PNG', 314, 431, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 443, '<?php echo $TF?>');
                doc.setTextColor(<?php echo $TFc ?>);
                doc.text(490, 443, '<?php echo $TFt ?>');
            } else { 
                var imageData1 = await obtenerImagenGrafica('.TF2');
                doc.addImage(imageData1, 'PNG', 314, 431, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 443, '<?php echo $TF ?>');
                doc.setTextColor(<?php echo $TFc ?>);
                doc.text(490, 443, '<?php echo $TFt ?>');
            }; 
            
            //Relaciones familiares
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 467, 'Relaciones familiares');
            if ("<?php echo $FormaEX ?>" == 'A') { 
                var imageData1 = await obtenerImagenGrafica('.RF');
                doc.addImage(imageData1, 'PNG', 314, 455, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 467, '<?php echo $RF?>');
                doc.setTextColor(<?php echo $RFc ?>);
                doc.text(490, 467, '<?php echo $RFt ?>');
            } else { 
                var imageData1 = await obtenerImagenGrafica('.RF2');
                doc.addImage(imageData1, 'PNG', 314, 455, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 467, '<?php echo $RF ?>');
                doc.setTextColor(<?php echo $RFc ?>);
                doc.text(490, 467, '<?php echo $RFt ?>');
            };
            
            //Comunicación y relaciones interpersonales
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 491, 'Comunicación y relaciones interpersonales');
            if ("<?php echo $FormaEX ?>" == 'A') {
                var imageData1 = await obtenerImagenGrafica('.CRI');
                doc.addImage(imageData1, 'PNG', 314, 479, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 491, '<?php echo $CRI?>');
                doc.setTextColor(<?php echo $CRIc ?>);
                doc.text(490, 491, '<?php echo $CRIt ?>');
            } else { 
                var imageData1 = await obtenerImagenGrafica('.CRI2');
                doc.addImage(imageData1, 'PNG', 314, 479, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 491, '<?php echo $CRI ?>');
                doc.setTextColor(<?php echo $CRIc ?>);
                doc.text(490, 491, '<?php echo $CRIt ?>');
            };
            
            //Situación económica del grupo familiar
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 515, 'Situación económica del grupo familiar');
            if ("<?php echo $FormaEX ?>" == 'A') {
                var imageData1 = await obtenerImagenGrafica('.SE');
                doc.addImage(imageData1, 'PNG', 314, 503, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 515, '<?php echo $SE?>');
                doc.setTextColor(<?php echo $SEc ?>);
                doc.text(490, 515, '<?php echo $SEt ?>');
            } else { 
                var imageData1 = await obtenerImagenGrafica('.SE2');
                doc.addImage(imageData1, 'PNG', 314, 503, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 515, '<?php echo $SE ?>');
                doc.setTextColor(<?php echo $SEc ?>);
                doc.text(490, 515, '<?php echo $SEt ?>');
            };
            
            //Características de la vivienda y de su entorno
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 539, 'Características de la vivienda y de su entorno');
            if ("<?php echo $FormaEX ?>" == 'A') { 
                var imageData1 = await obtenerImagenGrafica('.CV');
                doc.addImage(imageData1, 'PNG', 314, 527, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 539, '<?php echo $CV ?>');
                doc.setTextColor(<?php echo $CVc ?>);
                doc.text(490, 539, '<?php echo $CVt ?>');
            } else { 
                var imageData1 = await obtenerImagenGrafica('.CV2');
                doc.addImage(imageData1, 'PNG', 314, 527, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 539, '<?php echo $CV ?>');
                doc.setTextColor(<?php echo $CVc ?>);
                doc.text(490, 539, '<?php echo $CVt ?>');
            };
            
            //Influencia del entorno extralaboral sobre el trabajo
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 563, 'Influencia del entorno extralaboral sobre el trabajo');
            if ("<?php echo $FormaEX ?>" == 'A') {  
                var imageData1 = await obtenerImagenGrafica('.IE');
                doc.addImage(imageData1, 'PNG', 314, 551, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 563, '<?php echo $IE ?>');
                doc.setTextColor(<?php echo $IEc ?>);
                doc.text(490, 563, '<?php echo $IEt ?>');
            } else { 
                var imageData1 = await obtenerImagenGrafica('.IE2');
                doc.addImage(imageData1, 'PNG', 314, 551, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 563, '<?php echo $IE ?>');
                doc.setTextColor(<?php echo $IEc ?>);
                doc.text(490, 563, '<?php echo $IEt ?>');
            }; 
            
            //Desplazamiento vivienda-trabajo-vivienda
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 587, 'Desplazamiento vivienda-trabajo-vivienda');
            if ("<?php echo $FormaEX ?>" == 'A') {  
                var imageData1 = await obtenerImagenGrafica('.DV');
                doc.addImage(imageData1, 'PNG', 314, 575, 130, 18);
                doc.setFontType("bold");
                doc.text(450, 587, '<?php echo $DV ?>');
                doc.setTextColor(<?php echo $DVc ?>);
                doc.text(490, 587, '<?php echo $DVt ?>');
            } else { 
                var imageData1 = await obtenerImagenGrafica('.DV2');
                doc.addImage(imageData1, 'PNG', 314, 575, 130, 18);
                doc.setFontType("bold");
                doc.text(460, 587, '<?php echo $DV ?>');
                doc.setTextColor(<?php echo $DV2c ?>);
                doc.text(490, 587, '<?php echo $DV2t ?>');
            }; 

            var columns = ["", ""];
            var data = [["NOTA: este es un informe de demostración automatizado por https://www.perfilar.com.co","1 de 2"]];
            doc.autoTable(columns, data, {
                margin: { top: 720, right: 0, left: 0, bottom: 0 }, 
                styles: { cellWidth: 10, halign: 'left', fillColor: [255, 255, 255], cellPadding: 20 }, 
                drawRow: function (row, data) { row.height = 50 },
                columnStyles: { 0: { textColor: [0, 0, 0], fontSize: 10, font: 'helvetica', fontStyle: 'bold', lineColor: [103, 142, 152], lineWidth: 0, fillColor: [230, 230, 230] }, 1: { textColor: [51, 51, 51], fontSize: 10, fontStyle: 'italic', fillColor: [230, 230, 230], halign: 'right' } }
            });  
            var columns = [""];
            var data = [["1 de 2"]];
            doc.autoTable(columns, data, {
                margin: { top: 720, right: 0, left: 0, bottom: 0 }, 
                styles: { cellWidth: 10, halign: 'center', fillColor: [255, 255, 255], cellPadding: 20 }, 
                drawRow: function (row, data) { row.height = 50 },
                columnStyles: { 0: { textColor: [0, 0, 0], fontSize: 10, font: 'helvetica', fontStyle: 'bold', lineColor: [103, 142, 152], lineWidth: 0, fillColor: [230, 230, 230] }, 1: { textColor: [51, 51, 51], fontSize: 10, fontStyle: 'italic', fillColor: [230, 230, 230], halign: 'right' } }
            });
            
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setFontType("bold");
            doc.setTextColor(0, 0, 0); 
            doc.myText('DATOS GENERALES DEL TRABAJADOR', { align: "center" }, 0, 90);
            doc.myText('RESULTADOS DEL CUESTIONARIO', { align: "center" }, 0, 280);
        
            doc.addPage();
            
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(102, 102, 102);
            doc.text(60, 40, nombre);
            doc.text(400, 40, "Fecha de elaboración:  " + f2);
            doc.setLineWidth(3); 
            doc.setDrawColor(204, 204, 204);
            doc.line(0, 50, 650, 50);
            var Profesional = document.getElementById("Profesional").innerHTML;
            var Tarjeta= document.getElementById("Tarjeta").innerHTML;
            var Licencia= document.getElementById("Licencia").innerHTML;
            var Expedicion= document.getElementById("Expedicion").innerHTML;
            var Archivo2 = document.getElementById("Archivo2").innerHTML;
            // DATOS - SIN REMITIDO (como la primera tabla)
            var data = [
                ["Empresa:", 'SG Integrados'],
                ["Teléfono:", "4446604"],
                ["Psicologo Especialista:", Profesional],
                ["N° Tarjeta Profesional:", Tarjeta],
                ["N° Licencia en SST:", Licencia],
                ["Fecha de expedición de Licencia:", Expedicion]
            ];
            
            // COLUMNAS VACÍAS
            var columns = ["", ""];
            
            // GENERAR TABLA - IDÉNTICA A LA PRIMERA
            doc.autoTable(columns, data, {
                margin: { top: 85, right: 45, left: 45, bottom: 20 },  // MISMO MARGEN
                
                styles: {
                    overflow: 'linebreak',
                    halign: 'left',
                    valign: 'middle',
                    fontSize: 10,
                    textColor: [50, 50, 50],
                    lineColor: [180, 180, 180],     // MISMO COLOR DE BORDE
                    lineWidth: 0.5,
                    cellPadding: 8
                },
                
                // ENCABEZADO BLANCO QUE CUBRE LA PRIMERA FILA
                headStyles: {
                    fillColor: [255, 255, 255],    // Fondo blanco
                    textColor: [255, 255, 255],    // Texto blanco (invisible)
                    fontSize: 0.1,
                    fontStyle: 'normal',
                    lineColor: [255, 255, 255],    // Borde blanco (invisible)
                    lineWidth: 0,
                    halign: 'left',
                    valign: 'middle'
                },
                
                bodyStyles: {
                    fontSize: 10,
                    textColor: [40, 40, 40],
                    lineColor: [180, 180, 180],     // MISMO COLOR DE BORDE
                    lineWidth: 0.5
                },
                
                columnStyles: {
                    0: {
                        fontStyle: 'bold',
                        fillColor: [243, 253, 232], // #f3fde8 (VERDE)
                        cellWidth: 45,
                        textColor: [0, 0, 0],
                        lineColor: [180, 180, 180],
                        lineWidth: 0.5
                    },
                    1: {
                        fillColor: [255, 255, 255], // FONDO BLANCO
                        cellWidth: 110,
                        textColor: [30, 30, 30],
                        lineColor: [180, 180, 180],
                        lineWidth: 0.5
                    }
                },
                
                alternateRowStyles: {
                    fillColor: [248, 248, 248],     // FILAS ALTERNADAS GRIS CLARO
                    lineColor: [180, 180, 180],
                    lineWidth: 0.5
                },
                
                tableLineColor: [180, 180, 180],    // MISMO COLOR DE BORDE
                tableLineWidth: 0.5,
                theme: 'plain',
                cellPadding: 8,
                showHead: false
            });
            
            // Línea decorativa (como la primera tabla)
            doc.setDrawColor(243, 253, 232);
            doc.setLineWidth(2);
            doc.line(50, 55, 200, 55);

            // LÍNEA BLANCA EN LA POSICIÓN Y = 70
            doc.setFillColor(255, 255, 255);
            doc.rect(0, 84, doc.internal.pageSize.width, 20, 'F');
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setFontType("bold");
            doc.setTextColor(0, 0, 0); 
            doc.myText('DATOS DEL EVALUADOR', { align: "center" }, 0, 90);
            var observacionespdf= document.getElementById("observacionesv").innerHTML;
            var observacionespdf2= observacionespdf.replace(/<br>/g, "\n");
            var recomendacionespdf= document.getElementById("recomendacionesv").innerHTML;
            var recomendacionespdf2= recomendacionespdf.replace(/<br>/g, "\n");
            var Fecha_registro= document.getElementById("fecha_E").innerHTML;
            var columns = [""];
            var data = [
            ['OBSERVACIONES Y COMENTARIOS DEL EVALUADOR'],
            [observacionespdf2 +'\n'],
            ['RECOMENDACIONES PARTICULARES'],                     
            [recomendacionespdf2]];
            doc.autoTable(columns,data, { 
            margin:{top: 250, right: 60, left: 60 },  
            styles: {font: 'helvetica', fontStyle:'bold',overflow: 'linebreak', overflowColumns: 'linebreak',lineWidth:0, textColor:[0,0,0], fillColor: false}, 
            bodyStyles:{textColor:[0,0,0], fontStyle:'normal', fontSize:10}, 
            alternateRowStyles:{ textColor:[0,0,0], lineWidth:0, fontStyle:'bold',fontSize:11},
            //drawRow: function (row, data) {row.height = 20}
            });
            var img = new Image();
            img.src = '../admin/' + Archivo2;
            // Agregar imagen con mejor posicionamiento y tamaño
            doc.addImage(img, 'png', 270, 567, 80, 80);
            // Línea decorativa antes de la firma
            doc.setDrawColor(74, 86, 112);
            doc.setLineWidth(0.5);
            doc.line(200, 625, 420, 625);
            // Estilo para el nombre del psicólogo
            doc.setFontType("bolditalic");
            doc.setFontSize(14);
            doc.setTextColor(40, 50, 80);
            doc.myText('Jeovani Alexánder Durango Sánchez', { align: "center" }, 0, 645);
            // Estilo para el título profesional
            doc.setFontType("italic");
            doc.setFontSize(11);
            doc.setTextColor(74, 86, 112);
            doc.myText('Psicólogo con T.P. N° 174510', { align: "center" }, 0, 660);
            // Estilo para la especialización
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(100, 100, 120);
            doc.myText('Especialista en Gerencia en Riesgos Laborales, SST', { align: "center" }, 0, 673);
            // Línea decorativa inferior
            doc.setDrawColor(200, 200, 210);
            doc.setLineWidth(0.3);
            doc.line(230, 685, 390, 685);
            var columns = [""];
            var data = [["4 de 4"]];
            doc.autoTable(columns,data,
            {margin:{top: 720, right: 0, left: 0, bottom:0 }, styles: {cellWidth:10, halign: 'center', fillColor: [255, 255, 255], cellPadding:20}, 
            drawRow: function (row, data) {row.height = 50},
            columnStyles: {0: {textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', lineColor:[103, 142, 152], lineWidth:0, fillColor: [230, 230, 230]}, 1: {textColor:[51,51,51], fontSize:10, fontStyle:'italic',fillColor: [230, 230, 230],halign: 'right'}}});  
       
            var columns = [""];
            var data = [["2 de 2"]];
            doc.autoTable(columns, data, {
                margin: { top: 720, right: 0, left: 0, bottom: 0 },
                styles: { cellWidth: 10, halign: 'center', fillColor: false, cellPadding: 20 },
                drawRow: function (row, data) { row.height = 50 },
                columnStyles: { 0: { textColor: [0, 0, 0], fontSize: 10, font: 'helvetica', fontStyle: 'bold', lineColor: [103, 142, 152], lineWidth: 0, fillColor: [230, 230, 230] }, 1: { textColor: [51, 51, 51], fontSize: 10, fontStyle: 'italic', fillColor: [230, 230, 230], halign: 'right' } }
            });


            doc.save('<?php echo $Nombre?>'+'_'+'<?php echo $Apellido1 ?>'+'_extra.pdf');
            if (doc.save) {
                $(".loading").fadeOut("slow");
            }
        };
    });
    $(document).ready(function() {
        if('<?php echo $FormaEX ?>' == 'B') {
             $('.TF').hide();
             $('.RF').hide();
             $('.CRI').hide();
             $('.SE').hide();
             $('.CV').hide();
             $('.IE').hide();
             $('.DV').hide();
             $('#formaEA').hide();
             $('.E').hide();
        };
        if('<?php echo $FormaEX ?>' == 'A') {
            $('.TF2').hide();
            $('.RF2').hide();
            $('.CRI2').hide();
            $('.SE2').hide();
            $('.CV2').hide();
            $('.IE2').hide();
            $('.DV2').hide();
            $('#formaEB').hide(); 
            $('.E2').hide();
        }
    });
//EXTRALABORAL
//EXTRALABORAL
// 1. Tiempo fuera del trabajo (TF)
    $(function () {
        var chart;
        var inputTF = [<?php echo $TF ?>],
        dataTF = [],
        categories = [''];
        $.each(inputTF, function(index, value){
            var color;
            var originalColor;
            if (value >= 50.1) {
                originalColor = "#9d3715";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 37.6) {
                originalColor = "#e7744f";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 25.1) {
                originalColor = "#666666";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 6.4) {
                originalColor = "#ace600";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                    ]
                };
            } else {
                originalColor = "#394d00";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                    ]
                };
            }
            dataTF.push({
                y: value,
                color: color,
                url: "https://www.perfilar.com.co",
                borderRadius: 16
            });
        });
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: "TF",
                    type: "bar",
                    backgroundColor: false,
                    height: 36,
                    padding: -1,
                    margin: -1
                },
                title: { text: '' },
                xAxis: {
                    categories: categories,
                },
                yAxis: {
                    title: { text: '' },
                    min: 0, minRange: 100, maxPadding: 0, 
                },
                legend: { enabled: false },
                credits: { enabled: false },
                exporting: { enabled: false },
                plotOptions: {
                    series: {
                        stacking: 'normal',
                        pointWidth: 30,
                        borderRadius: 16
                    }
                },
                series: [{
                    name: '',
                    data: dataTF
                }]
            });
        });
    });
    // 2. Relaciones familiares (RF)
    $(function () {
        var chart;
        var inputRF = [<?php echo $RF ?>],
        dataRF = [],
        categories = [''];
        $.each(inputRF, function(index, value){
            var color;
            var originalColor;
            if (value >= 50.1) {
                originalColor = "#9d3715";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 33.4) {
                originalColor = "#e7744f";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 25.1) {
                originalColor = "#666666";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 8.4) {
                originalColor = "#ace600";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                    ]
                };
            } else {
                originalColor = "#394d00";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                    ]
                };
            }
            dataRF.push({
                y: value,
                color: color,
                url: "https://www.perfilar.com.co",
                borderRadius: 16
            });
        });
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: "RF",
                    type: "bar",
                    backgroundColor: false,
                    height: 36,
                    padding: -1,
                    margin: -1
                },
                title: { text: '' },
                xAxis: {
                    categories: categories,
                },
                yAxis: {
                    title: { text: '' },
                    min: 0, minRange: 100, maxPadding: 0, 
                },
                legend: { enabled: false },
                credits: { enabled: false },
                exporting: { enabled: false },
                plotOptions: {
                    series: {
                        stacking: 'normal',
                        pointWidth: 30,
                        borderRadius: 16
                    }
                },
                series: [{
                    name: '',
                    data: dataRF
                }]
            });
        });
    });
    // 3. Comunicación y relaciones interpersonales (CRI)
    $(function () {
        var chart;
        var inputCRI = [<?php echo $CRI ?>],
        dataCRI = [],
        categories = [''];
        $.each(inputCRI, function(index, value){
            var color;
            var originalColor;
            if (value >= 30.1) {
                originalColor = "#9d3715";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 20.1) {
                originalColor = "#e7744f";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 10.1) {
                originalColor = "#666666";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 1) {
                originalColor = "#ace600";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                    ]
                };
            } else {
                originalColor = "#394d00";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                    ]
                };
            }
            dataCRI.push({
                y: value,
                color: color,
                url: "https://www.perfilar.com.co",
                borderRadius: 16
            });
        });
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: "CRI",
                    type: "bar",
                    backgroundColor: false,
                    height: 36,
                    padding: -1,
                    margin: -1
                },
                title: { text: '' },
                xAxis: {
                    categories: categories,
                },
                yAxis: {
                    title: { text: '' },
                    min: 0, minRange: 100, maxPadding: 0, 
                },
                legend: { enabled: false },
                credits: { enabled: false },
                exporting: { enabled: false },
                plotOptions: {
                    series: {
                        stacking: 'normal',
                        pointWidth: 30,
                        borderRadius: 16
                    }
                },
                series: [{
                    name: '',
                    data: dataCRI
                }]
            });
        });
    });
    // 4. Situación económica del grupo familiar (SE)
    $(function () {
        var chart;
        var inputSE = [<?php echo $SE ?>],
        dataSE = [],
        categories = [''];
        $.each(inputSE, function(index, value){
            var color;
            var originalColor;
            if (value >= 50.1) {
                originalColor = "#9d3715";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 33.4) {
                originalColor = "#e7744f";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 25.1) {
                originalColor = "#666666";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 8.4) {
                originalColor = "#ace600";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                    ]
                };
            } else {
                originalColor = "#394d00";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                    ]
                };
            }
            dataSE.push({
                y: value,
                color: color,
                url: "https://www.perfilar.com.co",
                borderRadius: 16
            });
        });
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: "SE",
                    type: "bar",
                    backgroundColor: false,
                    height: 36,
                    padding: -1,
                    margin: -1
                },
                title: { text: '' },
                xAxis: {
                    categories: categories,
                },
                yAxis: {
                    title: { text: '' },
                    min: 0, minRange: 100, maxPadding: 0, 
                },
                legend: { enabled: false },
                credits: { enabled: false },
                exporting: { enabled: false },
                plotOptions: {
                    series: {
                        stacking: 'normal',
                        pointWidth: 30,
                        borderRadius: 16
                    }
                },
                series: [{
                    name: '',
                    data: dataSE
                }]
            });
        });
    });
    // 5. Características de la vivienda y del entorno (CV)
    $(function () {
        var chart;
        var inputCV = [<?php echo $CV ?>],
        dataCV = [],
        categories = [''];
        $.each(inputCV, function(index, value){
            var color;
            var originalColor;
            if (value >= 22.3) {
                originalColor = "#9d3715";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 14) {
                originalColor = "#e7744f";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 11.2) {
                originalColor = "#666666";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 5.7) {
                originalColor = "#ace600";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                    ]
                };
            } else {
                originalColor = "#394d00";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                    ]
                };
            }
            dataCV.push({
                y: value,
                color: color,
                url: "https://www.perfilar.com.co",
                borderRadius: 16
            });
        });
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: "CV",
                    type: "bar",
                    backgroundColor: false,
                    height: 36,
                    padding: -1,
                    margin: -1
                },
                title: { text: '' },
                xAxis: {
                    categories: categories,
                },
                yAxis: {
                    title: { text: '' },
                    min: 0, minRange: 100, maxPadding: 0, 
                },
                legend: { enabled: false },
                credits: { enabled: false },
                exporting: { enabled: false },
                plotOptions: {
                    series: {
                        stacking: 'normal',
                        pointWidth: 30,
                        borderRadius: 16
                    }
                },
                series: [{
                    name: '',
                    data: dataCV
                }]
            });
        });
    });
    // 6. Influencia del entorno extralaboral sobre el trabajo (IE)
    $(function () {
        var chart;
        var inputIE = [<?php echo $IE ?>],
        dataIE = [],
        categories = [''];
        $.each(inputIE, function(index, value){
            var color;
            var originalColor;
            if (value >= 41.8) {
                originalColor = "#9d3715";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 25.1) {
                originalColor = "#e7744f";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 16.8) {
                originalColor = "#666666";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 8.4) {
                originalColor = "#ace600";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                    ]
                };
            } else {
                originalColor = "#394d00";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                    ]
                };
            }
            dataIE.push({
                y: value,
                color: color,
                url: "https://www.perfilar.com.co",
                borderRadius: 16
            });
        });
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: "IE",
                    type: "bar",
                    backgroundColor: false,
                    height: 36,
                    padding: -1,
                    margin: -1
                },
                title: { text: '' },
                xAxis: {
                    categories: categories,
                },
                yAxis: {
                    title: { text: '' },
                    min: 0, minRange: 100, maxPadding: 0, 
                },
                legend: { enabled: false },
                credits: { enabled: false },
                exporting: { enabled: false },
                plotOptions: {
                    series: {
                        stacking: 'normal',
                        pointWidth: 30,
                        borderRadius: 16
                    }
                },
                series: [{
                    name: '',
                    data: dataIE
                }]
            });
        });
    });
    // 7. Desplazamiento vivienda-trabajo-vivienda (DV)
    $(function () {
        var chart;
        var inputDV = [<?php echo $DV ?>],
        dataDV = [],
        categories = [''];
        $.each(inputDV, function(index, value){
            var color;
            var originalColor;
            if (value >= 43.9) {
                originalColor = "#9d3715";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 25.1) {
                originalColor = "#e7744f";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 12.6) {
                originalColor = "#666666";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 1) {
                originalColor = "#ace600";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                    ]
                };
            } else {
                originalColor = "#394d00";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                    ]
                };
            }
            dataDV.push({
                y: value,
                color: color,
                url: "https://www.perfilar.com.co",
                borderRadius: 16
            });
        });
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: "DV",
                    type: "bar",
                    backgroundColor: false,
                    height: 36,
                    padding: -1,
                    margin: -1
                },
                title: { text: '' },
                xAxis: {
                    categories: categories,
                },
                yAxis: {
                    title: { text: '' },
                    min: 0, minRange: 100, maxPadding: 0, 
                },
                legend: { enabled: false },
                credits: { enabled: false },
                exporting: { enabled: false },
                plotOptions: {
                    series: {
                        stacking: 'normal',
                        pointWidth: 30,
                        borderRadius: 16
                    }
                },
                series: [{
                    name: '',
                    data: dataDV
                }]
            });
        });
    });
    // 8. GENERAL (E)
    $(function () {
        var chart;
        var inputE = [<?php echo $E ?>],
        dataE = [],
        categories = [''];
        $.each(inputE, function(index, value){
            var color;
            var originalColor;
            if (value >= 29.1) {
                originalColor = "#9d3715";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 22.7) {
                originalColor = "#e7744f";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 17) {
                originalColor = "#666666";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                    ]
                };
            } else if (value >= 11.4) {
                originalColor = "#ace600";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                    ]
                };
            } else {
                originalColor = "#394d00";
                color = {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                        [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                    ]
                };
            }
            dataE.push({
                y: value,
                color: color,
                url: "https://www.perfilar.com.co",
                borderRadius: 16
            });
        });
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: "E",
                    type: "bar",
                    backgroundColor: false,
                    height: 36,
                    padding: -1,
                    margin: -1
                },
                title: { text: '' },
                xAxis: {
                    categories: categories,
                },
                yAxis: {
                    title: { text: '' },
                    min: 0, minRange: 100, maxPadding: 0, 
                },
                legend: { enabled: false },
                credits: { enabled: false },
                exporting: { enabled: false },
                plotOptions: {
                    series: {
                        stacking: 'normal',
                        pointWidth: 30,
                        borderRadius: 16
                    }
                },
                series: [{
                    name: '',
                    data: dataE
                }]
            });
        });
    });
$(function () {
    var chart;
    var inputTF = [<?php echo $TF ?>],
        dataTF = [],
        categories = [''];
    $.each(inputTF, function(index, value){
        var color;
        var originalColor;
        
        // Función auxiliar para evitar errores de constructor
        var getGradient = function(hex, bright1, bright2) {
            return {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, new Highcharts.Color(hex).brighten(bright1).get('rgba')],
                    [1, new Highcharts.Color(hex).brighten(bright2).get('rgba')]
                ]
            };
        };
        if (value >= 50.1) {
            color = getGradient("#9d3715", 0.3, -0.2);
        } else if (value >= 37.6) {
            color = getGradient("#e7744f", 0.3, -0.2);
        } else if (value >= 25.1) {
            color = getGradient("#666666", 0.3, -0.2);
        } else if (value >= 6.4) {
            color = getGradient("#ace600", 0.2, 0.05);
        } else {
            color = getGradient("#394d00", 0.15, -0.1);
        }
        dataTF.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co"
        });
    });

    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "TF2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: { categories: categories },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16 // Esto aplica el redondeo globalmente
                }
            },
            series: [{
                name: '',
                data: dataTF
            }]
        });
    });
});
// Tiempo fuera del trabajo
$(function () {
    var chart;
    var inputTF2 = [<?php echo $TF ?>],
        dataTF2 = [],
        categories = [''];
    $.each(inputTF2, function(index, value){
        var originalColor;
        if (value >= 50.1) originalColor = "#9d3715";
        else if (value >= 37.6) originalColor = "#e7744f";
        else if (value >= 25.1) originalColor = "#666666";
        else if (value >= 6.4) originalColor = "#ace600";
        else originalColor = "#394d00";
        
        var color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, new Highcharts.Color(originalColor).brighten(0.3).get('rgba')],
                [1, new Highcharts.Color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
        dataTF2.push({y: value, color: color, url: "https://www.perfilar.com.co"});
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "TF2",
                type: "bar",
                height: 36,
                backgroundColor: false,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: { categories: categories },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{ name: '', data: dataTF2 }]
        });
    });
});

// Relaciones familiares
$(function () {
    var chart;
    var inputRF2 = [<?php echo $RF ?>],
        dataRF2 = [],
        categories = [''];
    $.each(inputRF2, function(index, value){
        var originalColor;
        if (value >= 50.1) originalColor = "#9d3715";
        else if (value >= 33.4) originalColor = "#e7744f";
        else if (value >= 25.1) originalColor = "#666666";
        else if (value >= 8.4) originalColor = "#ace600";
        else originalColor = "#394d00";

        var color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, new Highcharts.Color(originalColor).brighten(0.3).get('rgba')],
                [1, new Highcharts.Color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
        dataRF2.push({y: value, color: color, url: "https://www.perfilar.com.co"});
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "RF2",
                type: "bar",
                height: 36,
                backgroundColor: false,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: { categories: categories },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{ name: '', data: dataRF2 }]
        });
    });
});

// Comunicación y relaciones interpersonales
$(function () {
    var chart;
    var inputCRI2 = [<?php echo $CRI ?>],
        dataCRI2 = [],
        categories = [''];
    $.each(inputCRI2, function(index, value){
        var originalColor;
        if (value >= 35.1) originalColor = "#9d3715";
        else if (value >= 25.1) originalColor = "#e7744f";
        else if (value >= 15.1) originalColor = "#666666";
        else if (value >= 5.1) originalColor = "#ace600";
        else originalColor = "#394d00";

        var color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, new Highcharts.Color(originalColor).brighten(0.3).get('rgba')],
                [1, new Highcharts.Color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
        dataCRI2.push({y: value, color: color, url: "https://www.perfilar.com.co"});
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "CRI2",
                type: "bar",
                height: 36,
                backgroundColor: false,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: { categories: categories },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{ name: '', data: dataCRI2 }]
        });
    });
});

// Situación económica del grupo familiar
$(function () {
    var chart;
    var inputSE2 = [<?php echo $SE ?>],
        dataSE2 = [],
        categories = [''];
    $.each(inputSE2, function(index, value){
        var originalColor;
        if (value >= 50.1) originalColor = "#9d3715";
        else if (value >= 41.8) originalColor = "#e7744f";
        else if (value >= 25.1) originalColor = "#666666";
        else if (value >= 16.8) originalColor = "#ace600";
        else originalColor = "#394d00";

        var color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, new Highcharts.Color(originalColor).brighten(0.3).get('rgba')],
                [1, new Highcharts.Color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
        dataSE2.push({y: value, color: color, url: "https://www.perfilar.com.co"});
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "SE2",
                type: "bar",
                height: 36,
                backgroundColor: false,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: { categories: categories },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{ name: '', data: dataSE2 }]
        });
    });
});

// Características de la vivienda y del entorno
$(function () {
    var chart;
    var inputCV2 = [<?php echo $CV ?>],
        dataCV2 = [],
        categories = [''];
    $.each(inputCV2, function(index, value){
        var originalColor;
        if (value >= 27.9) originalColor = "#9d3715";
        else if (value >= 16.8) originalColor = "#e7744f";
        else if (value >= 11.2) originalColor = "#666666";
        else if (value >= 5.7) originalColor = "#ace600";
        else originalColor = "#394d00";

        var color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, new Highcharts.Color(originalColor).brighten(0.3).get('rgba')],
                [1, new Highcharts.Color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
        dataCV2.push({y: value, color: color, url: "https://www.perfilar.com.co"});
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "CV2",
                type: "bar",
                height: 36,
                backgroundColor: false,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: { categories: categories },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{ name: '', data: dataCV2 }]
        });
    });
});

// Influencia del entorno extralaboral sobre el trabajo
$(function () {
    var chart;
    var inputIE2 = [<?php echo $IE ?>],
        dataIE2 = [],
        categories = [''];
    $.each(inputIE2, function(index, value){
        var originalColor;
        if (value >= 41.8) originalColor = "#9d3715";
        else if (value >= 25.1) originalColor = "#e7744f";
        else if (value >= 16.8) originalColor = "#666666";
        else if (value >= 1) originalColor = "#ace600";
        else originalColor = "#394d00";

        var color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, new Highcharts.Color(originalColor).brighten(0.3).get('rgba')],
                [1, new Highcharts.Color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
        dataIE2.push({y: value, color: color, url: "https://www.perfilar.com.co"});
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "IE2",
                type: "bar",
                height: 36,
                backgroundColor: false,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: { categories: categories },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{ name: '', data: dataIE2 }]
        });
    });
});

// Desplazamiento vivienda-trabajo-vivienda
$(function () {
    var chart;
    var inputDV2 = [<?php echo $DV ?>],
        dataDV2 = [],
        categories = [''];
    $.each(inputDV2, function(index, value){
        var originalColor;
        if (value >= 43.9) originalColor = "#9d3715";
        else if (value >= 25.1) originalColor = "#e7744f";
        else if (value >= 12.6) originalColor = "#666666";
        else if (value >= 1) originalColor = "#ace600";
        else originalColor = "#394d00";

        var color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, new Highcharts.Color(originalColor).brighten(0.3).get('rgba')],
                [1, new Highcharts.Color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
        dataDV2.push({y: value, color: color, url: "https://www.perfilar.com.co"});
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DV2",
                type: "bar",
                height: 36,
                backgroundColor: false,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: { categories: categories },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{ name: '', data: dataDV2 }]
        });
    });
});

// GENERAL
$(function () {
    var chart;
    var inputE2 = [<?php echo $E ?>],
        dataE2 = [],
        categories = [''];
    $.each(inputE2, function(index, value){
        var originalColor;
        if (value >= 32.4) originalColor = "#9d3715";
        else if (value >= 24.3) originalColor = "#e7744f";
        else if (value >= 17.8) originalColor = "#666666";
        else if (value >= 13) originalColor = "#ace600";
        else originalColor = "#394d00";

        var color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, new Highcharts.Color(originalColor).brighten(0.3).get('rgba')],
                [1, new Highcharts.Color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
        dataE2.push({y: value, color: color, url: "https://www.perfilar.com.co"});
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "E2",
                type: "bar",
                height: 36,
                backgroundColor: false,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: { categories: categories },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{ name: '', data: dataE2 }]
        });
    });
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
                console.log(id_codigo)
                $.ajax({
                    type: "post",
                    url: "../logo.php",
                    data: "id_codigo=" + id_codigo,
                    success: function (response) {
                        const tasks2 = JSON.parse(response);
                        let Profesional= '';
                        let Tarjeta= '';
                        let Licencia= '';
                        let Expedicion= '';
                        let Archivo2= '';
                        let Razon= '';
                        let Nit= '';
                        let Archivo1= '';
                        tasks2.forEach(task2 => {
                            Razon += `${task2.Razon}`,
                            Nit += `${task2.Nit}`,
                            Archivo1 += `${task2.Archivo1}`
                            Profesional += `${task2.Profesional}`
                            Tarjeta += `${task2.Tarjeta}`
                            Licencia += `${task2.Licencia}`
                            Expedicion += `${task2.Expedicion}`
                            Archivo2 += `${task2.Archivo2}`
                        });
                        $('#Profesional').html(Profesional);
                        $('#Tarjeta').html(Tarjeta);
                        $('#Licencia').html(Licencia);
                        $('#Expedicion').html(Expedicion);
                        $('#Archivo2').html(Archivo2);
                        $('#Razon_').html(Razon);
                        $('#Nit_').html(Nit);
                        $('#contenido_').html('<img src="../admin/'+Archivo1+'" width="100%" height="100%"></a></div>');
                    }
                });
            }
        });
    }) 
</script>
</body>
</html>
