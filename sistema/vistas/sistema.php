 <!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dash Board</title></title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<?php
    session_start();
    //error_reporting(0);
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion.inc.php';
    include_once 'app/redireccion.inc.php';
    include_once 'app/admin.inc.php';
    include_once 'app/validadoradmin.inc.php';
    include_once 'app/repositorioadmin.inc.php'; 
    if (!controlsesion::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGIN);}
    conexion :: abrir_conexion();
    if (isset($_POST['enviar'])) {
        $validador = new validadoradmin($_POST['Nit'], $_POST['Razon'], $_POST['Clave1'], $_POST['Clave2'], $_POST['Economica'], $_POST['Telefono'], $_POST['Email'], $_POST['Direccion'], $_POST['Departamento'], $_POST['Ciudad'], $_POST['Sede'], $_POST['PersonaC'], $_POST['TelefonoC'], Conexion :: obtener_conexion());
        if (!$validador->registro_valido()) { 
            $mostrar_validador = 1;
            //redireccion::redirigir(RUTA_PSICOSOCIAL);
        }
        if ($validador->registro_valido()) { 
        	$usuario = new Usuario('',$validador->obtener_Nit(), $validador->obtener_Razon(), password_hash($validador->obtener_Clave(), PASSWORD_DEFAULT), $validador->obtener_Economica(), $validador->obtener_Telefono(), $validador->obtener_Email(), $validador->obtener_Direccion(), $validador->obtener_Departamento(), $validador->obtener_Ciudad(), $validador->obtener_Sede(), $validador->obtener_PersonaC(), $validador->obtener_TelefonoC(), '', '','','','');
            $usuario_insertado = repositorioadmin :: insertar_usuario(Conexion :: obtener_conexion(), $usuario);
            if ($usuario_insertado) {
                redireccion::redirigir(RUTA_SISTEMA);
            } 
        }
        Conexion:: cerrar_conexion();
    };
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM admin WHERE id = $id";
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
    $sql = "SELECT * FROM admin WHERE id = '$id_admin'";
    $resultado1 = $mysqli->query($sql);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
    $Nit = $row1['Nit'];
    $Razon = $row1['Razon'];
    $Codigo = $row1['Ausentismo'];
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
    a, a:hover, a:focus, button, input, textarea, select {
        text-decoration: none;
        outline: none;
        resize: none;
        outline:none !important;
        outline-width: 0 !important;
        box-shadow: none;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
    }
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
    	background-color: #f9ecf9;
    }
    .bg-theme {
    	background-color: #f9ecf9;
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
    	border: 1px solid #f9ecf9 !important;
    	padding: 6px;
    	padding-top: 2px!important;
    	padding-bottom: 2px!important;
    	background: #f9ecf9;
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
        background: #ffffff;
        margin-bottom: 0;
        margin-left: 6px;
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
        color: #f9ecf9;
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
        background: #f9ecf9;
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
        min-height: 50px;
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
        width:100%;
        height:100%;
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
        height:3em;
    }
    #borderout {
        background:transparent!important;
        border:0!important;
        width:30%!important;
    }
    #borderout2 {
        background:transparent!important;
        border:0!important;
        width:20%!important;
    }
    .delete,
    .delete2 {
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
    .delete:hover,
    .delete2:hover {
        color:#ff8080;
        background: #ffffff; 
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
     }
    .nuevo_cliente,
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
    .nuevo_cliente,
    .nuevo1 {
        background:#ffffff!important;
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
    .nuevo2:hover, .submit:hover,
    .nuevo1:hover, .submit:hover,
    .nuevo:hover, .submit:hover {
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
        background:#eaeaea;
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
        border:1px solid #CCCCCC!important;
        vertical-align:middle!important;
        height:auto!important;
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
        font-size:14px;
        transition: font-size 0.6s linear;
    }
    #boton_edit_admin,
    #boton_edit_P,
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
    #boton_edit_P:hover,
    #boton_admin:hover,
    #boton:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
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
    #container {
    	width:100%;
    	height:100%;
    	position:relative;
    	left:50%;
    	margin-left:-350px;
    }
    .hex {
    	width:150px;
    	height:86px; 
    	background-color: transparent;
    	background-repeat: no-repeat;
    	background-position: 50% 50%;			
    	-webkit-background-size: auto 173px;							
    	-moz-background-size: auto 173px;							
    	-ms-background-size: auto 173px;							
    	-o-background-size: auto 173px;							
    	position: relative;
    	float:left;
    	margin:25px 5px;
    	text-align:center;
    	zoom:1;
    
    }
    .hex.hex-gap {
    	margin-left: 86px;
    }
    
    .hex .corner-1,
    .hex .corner-2 {
    	position: absolute;
    	top:0;
    	left:0;
    	width:100%;
    	height:100%;
    	background: inherit;								
    	z-index:-2;						
    	overflow:hidden;
    	-webkit-backface-visibility: hidden;
    	-moz-backface-visibility: hidden;
    	-ms-backface-visibility: hidden;
    	-o-backface-visibility: hidden;			
    	backface-visibility: hidden;			
    }
    .hex .corner-1 {
    	z-index:-1;
    	-webkit-transform: rotate(60deg);
    	-moz-transform: rotate(60deg);
    	-ms-transform: rotate(60deg);
    	-o-transform: rotate(60deg);
    	transform: rotate(60deg);
    }
    .hex .corner-2 {
    	-webkit-transform: rotate(-60deg);
    	-moz-transform: rotate(-60deg);
    	-ms-transform: rotate(-60deg);
    	-o-transform: rotate(-60deg);
    	transform: rotate(-60deg);
    }
    .hex .corner-1:before,
    .hex .corner-2:before {
    	width: 173px;
    	height:	173px;
    	 content: '';
    	 position: absolute;
    	 background: inherit;
    	 top:0;
    	 left: 0;
    	 z-index: 1;
    	 background: inherit;
    	 background-repeat:no-repeat;
    	-webkit-backface-visibility: hidden;
    	-moz-backface-visibility: hidden;
    	-ms-backface-visibility: hidden;
    	-o-backface-visibility: hidden;	
    	backface-visibility: hidden;				  
    }			
    .hex .corner-1:before {
    	-webkit-transform: rotate(-60deg) translate(-87px, 0px);
    	-moz-transform: rotate(-60deg) translate(-87px, 0px);
    	-ms-transform: rotate(-60deg) translate(-87px, 0px);
    	-o-transform: rotate(-60deg) translate(-87px, 0px);
    	transform: rotate(-60deg) translate(-87px, 0px);	
    	 -webkit-transform-origin: 0 0;
    	 -moz-transform-origin: 0 0;
    	 -ms-transform-origin: 0 0;
    	 -o-transform-origin: 0 0;
    	 transform-origin: 0 0;
    }			
    .hex .corner-2:before {
    	-webkit-transform: rotate(60deg) translate(-48px, -11px);
    	-moz-transform: rotate(60deg) translate(-48px, -11px);
    	-ms-transform: rotate(60deg) translate(-48px, -11px);
    	-o-transform: rotate(60deg) translate(-48px, -11px);
    	transform: rotate(60deg) translate(-48px, -11px);	
    	bottom:0;
    }		
    .hex .inner {		
    	color:#000000;
    }
    .hex h4 {
    	font-family: verdana;		
    	margin:0;			
    }
    .hex hr {
    	border:0;
    	border-top:1px solid #eee;
    	width:60%;
    	
    }
    .hex p {
    	font-size:16px;
    	font-family: 'Kotta One', serif;
    	width:80%;
    	margin:0 auto;
    }
    .es {
        font-family:verdana!important;
        font-size:16px;
        margin-top:3.8em!important;
        margin-left:2em!important;
        color:#ffffff!important;
    }
    #fixed {
        position: fixed;
        z-index: -1 !important;
        margin: 0 !important;
        padding: 0 !important;
        height: 100%;
    }
    #fixed img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    @media screen and (max-width: 600px) {
        #container {
        	width:540px!important;
        	height:auto!important;
        	left:0%!important;
        	margin-left:0px!important;
        }
        .hex-gap6 {
            margin-left: 86px!important;
        }
        .hex-gap8 {
            margin-left:6px!important;
        }
        
    }    
     @media screen and (max-width: 480px) {
        #container {
        	width:400px!important;
        	height:auto!important;
        	left:0%!important;
        	margin-left:0px!important;
        }
        .hex-gap,
        .hex-gap4,
        .hex-gap6,
        .hex-gap7,
        .hex-gap8,
        .hex-gap10 {
            margin-left: 0px!important;
        }
        .hex {
        	height:auto!important; 
        	float:none!important;
        	margin:0!important;
        	margin-left:25%!important;
        	text-align:center!important;
        /*	background-color: transparent;
        	background-repeat: no-repeat;
        	background-position: 50% 50%;			
        	-webkit-background-size: auto 173px;							
        	-moz-background-size: auto 173px;							
        	-ms-background-size: auto 173px;							
        	-o-background-size: auto 173px;							
        	position: relative;
        	
        	margin:25px 5px;
        	text-align:center;
        	zoom:1;*/
        }
        #h3 {
            margin-bottom:1em!important;
        }
        #logo_v {
            width:200px!important;
        }
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
        .task-delete, .submit,
        .task-delete2, .submit,
        .task-download, .submit {
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
        #selectedDisplay {
            width:11.5em!important;
            margin-left:1.5em!important;
        }
        .header, .footer {
            height: 60px!important;
            padding: 0 15px;
        }
    }
    .task-atributos, .submit,
    .task-delete3, .submit,
    .task-editar3, .submit {
        width:36px;
        height: 36px;
        font-family:Moristonb;
        color: #666666;
        background:transparent;
        border:1px solid #71788e;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-atributos:hover, .submit:hover,
    .task-delete3:hover, .submit:hover,
    .task-editar3:hover, .submit:hover {
        color:#e69900;
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
    #search,
    #search2 {
        height: 36px;
        width:16.5em;
        padding-top:1px;
        border: 1px solid #71788e!important;
        background:transparent!important;
        border-bottom-color: #ccc; 
        transition: 0.4s;
        margin:0!important;
        border-radius:0;
        padding:4px;
        padding-left:40px;
        font-family:verdana!important;
    }
    #search:focus,
    #search2:focus{
        padding-top:1px;
        transition: 0.4s;
        padding:4px;
        padding-left:40px;
        border: 2px solid #e7744f;
        background:#f1f2f4;
    }
    
    :root {
      /* surface and button */
      --hue: 223;
      --sat: 50%;
      --hue1: 703;
      --sat1: 50%;
      --hue2: 100;
      --sat2: 60%;
      --hue3: 200;
      --sat3: 60%;
      --hue4: 223;
      --sat4: 0%;
      --light2: 80%;
      /* other */
      --primary: #ffffff;
      --trans-dur: 0.3s;
      --trans-timing: ease-in-out;
      --trans-timing2: cubic-bezier(0.42,-1.84,0.42,1.84);
      --trans-timing3: cubic-bezier(0.42,0,0.42,1.84);
    }
    /* Light */
    .col {
      background-image: linear-gradient(hsl(var(--hue),var(--sat),90%),hsl(var(--hue),var(--sat),75%));
      display: flex;
      flex: 1;
      padding: 1.5em 0;
      min-height: 10em;
    }
    .btn {
      background-color: transparent;
      background-image: linear-gradient(hsl(var(--hue),var(--sat),80%),hsl(var(--hue),var(--sat),85%));
      border-radius:16%;
      box-shadow:
        0 0 0 0.125em hsla(var(--hue),var(--sat),50%,0),
        0 0 0.25em hsl(var(--hue),var(--sat),55%) inset,
        0 0.125em 0.125em hsl(var(--hue),var(--sat),90%);
      cursor: pointer;
      margin: auto;
      outline: transparent;
      position: relative;
      width:8.6em;
      height:8.6em;
      transition: box-shadow var(--trans-dur) var(--trans-timing);
      -webkit-tap-highlight-color: transparent;
    }
    .btn:focus-visible {
      box-shadow:
        0 0 0 0.125em hsla(var(--hue),var(--sat),50%,1),
        0 0 0.25em hsl(var(--hue),var(--sat),55%) inset,
        0 0.125em 0.125em hsl(var(--hue),var(--sat),90%);
    }
    .btn:before,
    .btn:after {
      border-radius: inherit;
      content: "";
      display: block;
      position: absolute;
    }
    .btn:before {
      background-image: linear-gradient(#808080, #595959, #808080);
      box-shadow: 0 0.75em 0.75em 0.25em hsla(var(--hue2),0%,0%,0.3);
      top: 0.8em;
      left: 0.8em;
      width: 7em;
      height: 7em;
      transition:
        box-shadow var(--trans-dur) var(--trans-timing2),
        transform var(--trans-dur) var(--trans-timing2);
    }
    .btn__icon {
      display: block;
      position: absolute;
      top: 10%;
      left: 10%;
      width: 7em;
      height: 7em;
      transition: filter var(--trans-dur) var(--trans-timing);
      z-index: 1;
    }
    .btn__icon g {
      stroke: hsl(var(--hue),var(--sat),70%);
      transition: stroke var(--trans-dur) var(--trans-timing);
    }
    .btn__sr {
      overflow: hidden;
      position: absolute;
      width: 1px;
      height: 1px;
    }
    .btn[aria-pressed="true"]:before,
    .btn[aria-pressed="true"]:after,
    .btn[aria-pressed="true"] .btn__icon {
      transform: scale(0.98);
    }
    .btn[aria-pressed="true"] .btn__icon {
      filter: drop-shadow(0 0 0.25em var(--primary));
    }
    .btn[aria-pressed="true"] .btn__icon g {
      stroke: var(--primary);
    }
    .col--dark1 {
       margin-top:-2em;
       background:transparent;
       border:0px!important;
    }
    .col--dark1 .btn {
      background-image: linear-gradient(#a9efec, #68e3dd, #a9efec);
      border:0px!important;
      box-shadow:0 0 0 0.125em hsla(var(--hue2),var(--sat2),50%,0);
    }
    .col--dark2 {
       margin-top:-2em;
       background:transparent;
       border:0px!important;
    }
    .col--dark2 .btn {
      background-image: linear-gradient(#c7d9ea, #8fb3d6, #c7d9ea);
      border:0px!important;
      box-shadow:0 0 0 0.125em hsla(var(--hue2),var(--sat2),50%,0);
    }
    .col--dark3 {
       margin-top:-2em;
       background:transparent;
       border:0px!important;
    }
    .col--dark3 .btn {
      background-image: linear-gradient(#d7b3ff, #b066ff, #d7b3ff);
      border:0px!important;
      box-shadow:0 0 0 0.125em hsla(var(--hue2),var(--sat2),50%,0);
    }
    .col--dark4 {
       margin-top:-2em;
       background:transparent;
       border:0px!important;
    }
    .col--dark4 .btn {
      background-image: linear-gradient(#ffeb99, #ffe680, #ffeb99);
      border:0px!important;
      box-shadow:0 0 0 0.125em hsla(var(--hue2),var(--sat2),50%,0);
    }
    .col--dark5 {
       margin-top:-2em;
       background:transparent;
       border:0px!important;
    }
    .col--dark5 .btn {
      background-image: linear-gradient(#ffd6cc,#ffad99, #ffd6cc);
      border:0px!important;
      box-shadow:0 0 0 0.125em hsla(var(--hue2),var(--sat2),50%,0);
    }
    .col--dark6 {
       margin-top:-2em;
       background:transparent;
       border:0px!important;
    }
    .col--dark6 .btn {
      background-image: linear-gradient(#fdcedf,#fa85b0,#fdcedf);
      border:0px!important;
      box-shadow:0 0 0 0.125em hsla(var(--hue2),var(--sat2),50%,0);
    }
    .col--dark7 {
       margin-top:-2em;
       background:transparent;
       border:0px!important;
    }
    .col--dark7 .btn {
      background-image: linear-gradient(#ffe6f9,#ffb3ec,#ffe6f9);
      border:0px!important;
      box-shadow:0 0 0 0.125em hsla(var(--hue2),var(--sat2),50%,0);
    }
    .col--dark {
       margin-top:-2em;
       background:transparent;
       border:0px!important;
    }
    .col--dark .btn {
      background-image: linear-gradient(#cccccc, #999999, #cccccc);
      border:0px!important;
      box-shadow:0 0 0 0.125em hsla(var(--hue2),var(--sat2),50%,0);
    }
        /* Beyond mobile */
    @media (min-width: 768px) {
      main {
        flex-direction: row;
      }
    }
    @keyframes anim{
        0% {border: #404040 10px solid;} 
       25% {border: #1f5c7a 10px solid;} 
       50% {border: #72273c 10px solid;} 
       75% {border: #3b7b1e 10px solid;} 
      100% {border: #404040 10px solid;} 
    }
    #cuadrado {
      animation-name: anim;
      animation-duration: 8s;
      animation-iteration-count: infinite;
      min-height:15em;
    }
    /* === SELECT POPUP - COMPACTO === */
    .select-popup-wrapper {
      position: relative;
      display: inline-block;
      width: auto;
      min-width: 200px;
    }
    /* === SELECT OCULTO (trigger) - AHORA SOLO OCUPA EL ÁREA DEL BOTÓN === */
    .select-popup-wrapper .select-trigger {
      position: absolute;
      opacity: 0;
      width: 100%;
      height: 100%;  /* ← Cambiado de 16em a 100% */
      cursor: pointer;
      z-index: 2;
      top: 0;
      left: 0;
    }
    /* === DISPLAY DEL SELECT (compacto) === */
    .select-popup-wrapper .select-display {
      padding: 0.4rem 2.2rem 0.4rem 0.7rem;
      font-size: 14px;
      color: #ffffff;
      background: transparent;
      border: 2px solid #f9ecf9;
      border-radius: 16px;
      cursor: pointer;
      font-family: Verdanab;
      text-align: left;
      position: relative;
      transition: all 0.3s ease;
      box-sizing: border-box;
      pointer-events: none;
      white-space: nowrap;
      overflow: hidden;
      min-width: 120px;
      line-height: 1.4;
    }
    /* Hover del display */
    .select-popup-wrapper .select-trigger:hover + .select-display {
      border-color: #6a8fbf;
      background: rgba(106, 143, 191, 0.1);
    }
    /* Focus del display */
    .select-popup-wrapper .select-trigger:focus + .select-display {
      border-color: #bcd1e6;
      box-shadow: 0 0 0 3px rgba(188, 209, 230, 0.4);
    }
    /* Flecha del select */
    .select-popup-wrapper .select-display::after {
      content: "▼";
      position: absolute;
      right: 0.6rem;
      top: 50%;
      transform: translateY(-50%);
      font-size: 0.6rem;
      color: #ffffff;
    }
    /* Animación de la flecha al abrir */
    .select-popup-wrapper .select-trigger:focus + .select-display::after {
      transform: translateY(-50%) rotate(180deg);
    }
    /* === POPUP/MENÚ DESPLEGABLE === */
    .select-popup-wrapper .popup-menu {
      font-family: Verdanab !important;
      font-size: 13px !important;
      position: absolute;
      top: calc(100% + 6px);
      left: 0;
      right: 0;
      background-color: rgba(255, 255, 255, 0.95);
      border: 2px solid #bcd1e6;
      border-radius: 10px;
      padding: 0.4rem 0;
      max-height: 350px;
      overflow-y: auto;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
      z-index: 1000;
      opacity: 0;
      visibility: hidden;
      transform: translateY(-8px) scale(0.95);
      transition: all 0.25s ease;
      min-width: 120%;
    }
    /* Al abrir el popup (se mantiene igual) */
    .select-popup-wrapper .select-trigger:focus ~ .popup-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(0) scale(1);
    }
    /* === OPCIONES DEL POPUP CON ICONOS === */
    .select-popup-wrapper .popup-menu label {
      display: flex;
      align-items: center;
      padding: 0.5rem 0.8rem;
      font-family: Verdanab;
      font-size: 14px;
      color: #1a2639;
      cursor: pointer;
      transition: all 0.2s ease;
      border-left: 3px solid transparent;
    }
    .select-popup-wrapper .popup-menu label:hover {
      background: #f9ecf9;
      border-left-color: #6a8fbf;
    }
    .select-popup-wrapper .popup-menu label:active {
      background: #9a329a;
    }
    /* === ICONOS EN LAS OPCIONES === */
    .select-popup-wrapper .popup-menu label .icon {
      font-size: 16px;
      width: 20px;
      text-align: center;
      flex-shrink: 0;
    }
    
    .select-popup-wrapper .popup-menu input[type="radio"]:checked + label .icon {
      color: #1a2a4a;
    }
    .select-popup-wrapper .popup-menu input[type="radio"]:checked + label:hover .icon {
      color: #ffffff;
    }
    /* === OCULTAR RADIOS === */
    .select-popup-wrapper .popup-menu input[type="radio"] {
      display: none;
    }
    /* === SCROLL PERSONALIZADO === */
    .select-popup-wrapper .popup-menu::-webkit-scrollbar {
      width: 5px;
    }
    .select-popup-wrapper .popup-menu::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 8px;
    }
    .select-popup-wrapper .popup-menu::-webkit-scrollbar-thumb {
      background: #f9ecf9;
      border-radius: 8px;
    }
    .select-popup-wrapper .popup-menu::-webkit-scrollbar-thumb:hover {
      background: #f9ecf9;
    }
</style>
</head>
<body>
<div class="load"></div> 
<div class="col-md-12" id="fixed" align="center" style="opacity:0.05"><img src="../imagine/patron1.jpg" style="width:100%"></div>
<section id="container-fluid">
        <header class="header black-bg">
            <?php if ($id == 1 || $id == 2) { ?>
                <a href="#costumModal3" data-toggle="modal" class="logo">Cedisalud<span style="color:#f9ecf9"> IPS</span></a>
            <?php } else { ?>
                <a href="#" data-toggle="modal" class="logo">Cedisalud<span style="color:#f9ecf9"> IPS</span></a>
            <?php } ?>
            <?php if ($id == 1 || $id ==  2) { ?>
                <div class="nav notify-row">
                <table>
                  <tr>
                    <td>
                      <div class="select-popup-wrapper">
                        <input type="text" class="select-trigger" readonly>
                        <div class="select-display" id="selectedDisplay">❤️ Cardiovascular</div>
                            <div class="popup-menu">
                                  <input type="radio" name="opcion_popup" id="op1_popup" value="SISTEMA">
                                  <label for="op1_popup"><span class="icon">⚙️</span>&nbsp Sistema</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op2_popup" value="AUDITIVO">
                                  <label for="op2_popup"><span class="icon">👂</span>&nbsp  Auditivo</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op3_popup" value="VISUAL">
                                  <label for="op3_popup"><span class="icon">👁</span>&nbsp Visual</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op4_popup" value="CARDIOVASCULAR">
                                  <label for="op4_popup"><span class="icon">❤️</span>&nbsp  Cardiovascular</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op5_popup" value="OSTEOMUSCULAR">
                                  <label for="op5_popup"><span class="icon">🦴</span>&nbsp  Osteomuscular</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op6_popup" value="RESPIRATORIO"  checked>
                                  <label for="op6_popup"><span class="icon">👃</span>&nbsp  Respiratorio</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op7_popup" value="PSICOSOCIAL">
                                  <label for="op7_popup"><span class="icon">🧠</span>&nbsp  Psicosocial</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op8_popup" value="BIOLOGICO">
                                  <label for="op8_popup"><span class="icon">🧬</span>&nbsp  Biológico</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op9_popup" value="CRÓNICOS">
                                  <label for="op9_popup"><span class="icon">📊</span>&nbsp Crónicos</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op10_popup" value="SEGUIMIENTOS">
                                  <label for="op10_popup"><span class="icon">📋</span>&nbsp  Seguimientos</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op11_popup" value="RIESGO-PS">
                                  <label for="op11_popup"><span class="icon">⚠️</span> &nbsp Riesgo-PS</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op12_popup" value="DIAGNÓSTICO">
                                  <label for="op12_popup"><span class="icon">🔬</span>&nbsp  Diagnóstico</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op13_popup" value="AUSENTISMO">
                                  <label for="op13_popup"><span class="icon">📅</span>&nbsp  Ausentismo</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op14_popup" value="URNA VIRTUAL">
                                  <label for="op14_popup"><span class="icon">📥</span>&nbsp  Urna Virtual</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op15_popup" value="LABORATORIO">
                                  <label for="op15_popup"><span class="icon">🧪</span>&nbsp  Laboratorio</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op16_popup" value="AGENDA">
                                  <label for="op16_popup"><span class="icon">📆</span> &nbsp Agenda</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op17_popup" value="CONSENTIMIENTO">
                                  <label for="op17_popup"><span class="icon">📝</span>&nbsp  Consentimiento</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op18_popup" value="ISRA">
                                  <label for="op18_popup"><span class="icon">📊</span>&nbsp  ISRA</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op19_popup" value="NOTIFICACIONES">
                                  <label for="op19_popup"><span class="icon">🔔</span>&nbsp  Notificaciones</label>
                                  
                                  <input type="radio" name="opcion_popup" id="op20_popup" value="CAPACITACIONES">
                                  <label for="op20_popup"><span class="icon">📚</span> &nbsp Capacitaciones</label>
                            </div>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
                <?php } else { ?>
                <div class="nav notify-row">
                <table>
                  <tr>
                    <td>
                      <div class="select-popup-wrapper">
                        <input type="text" class="select-trigger" readonly>
                        <div class="select-display" id="selectedDisplay">❤️ Cardiovascular</div>
                            <div class="popup-menu">
                                  <input type="radio" name="opcion_popup" id="op1_popup" value="SISTEMA">
                                  <label for="op1_popup"><span class="icon">⚙️</span>&nbsp Sistema</label>
                                  
                            </div>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            <?php } ?>
          <div>
            <ul class="pull-right top-menu" style="color:#22242a">
                <li><a class="logout" href="<?php echo RUTA_LOGOUT ?>" title="Salir"><i class="fa fa-power-off"></i></a></li>
            </ul>
          </div>
        </header>
</section>
<section style="text-align:center;color:#333333;"><br><br><br>
<p id="h3" style="font-family:Moristonb;text-align:center;font-size:20px">PROGRAMA INTEGRADO DE VIGILANCIA Y PREVENCIÓN EMPRESARIAL</p>
<p style="display:flex;justify-content:center;align-items:center;gap:10px;margin:0;padding:0;font-family:narrow;font-size:20px;letter-spacing:2px;color:#333333;flex-wrap:wrap;"><?php echo $Razon ?></p>
<p style="display:flex;justify-content:center;align-items:center;gap:10px;margin:0;padding:0;font-family:narrow;font-size:20px;letter-spacing:2px;color:#333333;flex-wrap:wrap;">Nit: <?php echo $Nit ?></p><br>
<div class="container">
<?php switch ($id) {
        case 179: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="btn_1" class="btn" style="cursor: pointer"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true"></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="" class="btn" style="cursor: pointer;opacity:0.3"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>

        </div> 
        <?php break;
        case 110: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="btn_2" class="btn" style="cursor: pointer"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true"></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="btn_3" class="btn" style="cursor: pointer"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>

        </div> 
        <?php break;
         case 118: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="btn_1" class="btn" style="cursor: pointer"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="btn_3" class="btn" style="cursor: pointer"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="btn_4" class="btn" style="cursor: pointer"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="btn_5" class="btn" style="cursor: pointer"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="btn_7" class="btn" style="cursor: pointer"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="btn_10" class="btn" style="cursor: pointer"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="btn_11" class="btn" style="cursor: pointer"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="btn_13" class="btn" style="cursor: pointer"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>

        </div> 

    <?php break;
        case 101: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="btn_1" class="btn" style="cursor: pointer"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true"></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="" class="btn" style="cursor: pointer;opacity:0.3"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="btn_4" class="btn" style="cursor: pointer"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>

        </div> 
        <?php break;
        case 107: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="btn_1" class="btn" style="cursor: pointer"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true"></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="" class="btn" style="cursor: pointer;opacity:0.3"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>

        </div> 
        <?php break;
        case 106: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="btn_1" class="btn" style="cursor: pointer"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true"></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="" class="btn" style="cursor: pointer;opacity:0.3"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>

        </div> 
        <?php break;
        case 61: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="btn_1" class="btn" style="cursor: pointer"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="btn_2" class="btn" style="cursor: pointer"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true"></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="btn_3" class="btn" style="cursor: pointer"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="btn_4" class="btn" style="cursor: pointer"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="btn_5" class="btn" style="cursor: pointer"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="btn_7" class="btn" style="cursor: pointer"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="btn_8" class="btn" style="cursor: pointer"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="btn_9" class="btn" style="cursor: pointer"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="btn_11" class="btn" style="cursor: pointer"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="btn_12" class="btn" style="cursor: pointer"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="btn_13" class="btn" style="cursor: pointer"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>

        </div> 
        <?php break;
        case 138: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="btn_2" class="btn" style="cursor: pointer"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true"></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="" class="btn" style="cursor: pointer;opacity:0.3"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <?php break;
        case 160: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="btn_1" class="btn" style="cursor: pointer"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true"></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="" class="btn" style="cursor: pointer;opacity:0.3"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <?php break;
        case 183: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="btn_1" class="btn" style="cursor: pointer"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true"></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="" class="btn" style="cursor: pointer;opacity:0.3"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="btn_4" class="btn" style="cursor: pointer"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <?php break;
        case 29: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="" class="btn" style="cursor: pointer;opacity:0.3"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true"></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="btn_3" class="btn" style="cursor: pointer"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="btn_4" class="btn" style="cursor: pointer"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="" class="btn" style="cursor: pointer;opacity:0.5"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <?php break;
        default: ?>
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Auditivo</p>
                <div class="col col--dark1">
                <button id="btn_1" class="btn" style="cursor: pointer"> <img src="../imagine/Z4.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Visual</p>
                <div class="col col--dark2">
                <button id="btn_2" class="btn" style="cursor: pointer"> <img src="../imagine/Z3.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Cardiovascular</p>
                <div class="col col--dark3">
                <button id="btn_3" class="btn" style="cursor: pointer"> <img src="../imagine/Z12.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Osteomuscular</p>
                <div class="col col--dark4">
                <button id="btn_4" class="btn" style="cursor: pointer"> <img src="../imagine/Z13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
         </div> 
         <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Respiratorio</p>
                <div class="col col--dark5">
                <button id="btn_5" class="btn" style="cursor: pointer"> <img src="../imagine/Z14.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Biológico</p>
                <div class="col col--dark6">
                <button id="btn_6" class="btn" style="cursor: pointer"> <img src="../imagine/Z22.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Psicosocial</p>
                <div class="col col--dark">
                <button id="btn_7" class="btn" style="cursor: pointer"> <img src="../imagine/I8.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:20px;text-align:center;color:#404040">Riesgo-PS</p>
                <div class="col col--dark">
                <button id="btn_8" class="btn" style="cursor: pointer"> <img src="../imagine/I13.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Ausentismo</p>
                <div class="col col--dark">
                <button id="btn_9" class="btn" style="cursor: pointer"> <img src="../imagine/Z15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Capacitaciones</p>
                <div class="col col--dark">
                <button id="btn_10" class="btn" style="cursor: pointer"> <img src="../imagine/I15.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Profesiograma</p>
                <div class="col col--dark">
                <button id="btn_11" class="btn" style="cursor: pointer"> <img src="../imagine/Z16.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
            <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Indicadores</p>
                <div class="col col--dark">
                <button id="btn_12" class="btn" style="cursor: pointer"> <img src="../imagine/Z17.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
         <div class="col-md-12">
             <div class="col-md-3">
                <p style="font-family:Narrow;letter-spacing:1px;font-size:22px;text-align:center;color:#404040">Seguimiento</p>
                <div class="col col--dark7">
                <button id="btn_13" class="btn" style="cursor: pointer"> <img src="../imagine/Z21.png"  class="btn__icon" viewBox="0 0 24 24" aria-hidden="true" ></button>
                </div>
            </div>
        </div> 
    <?php break;
    }
?>  
</div>
</section>  
<!--<nav>
    <a href="#container" class="scroll"><i class="fa fa-angle-up"></i></a>
</nav>
<footer class="container" style="margin-bottom:2em"><br><br><br><br>
    <div class="col-lg-6" style="vertical-align: middle;text-align:center">
        <p style="font-family:Narrow;font-size:20px;letter-spacing:1px;vertical-align: middle;"><a id="certificado" title="Certificado SSL" href="#costumModal12" style="padding-top:0px;padding-bottom:0" data-toggle="modal" target="_blank" aria-hidden="true"><img src="https://www.cedisalud.com.co/imagine/certificado.png" width="70" height="68"/></a></p>
        <p style="font-family:Narrow;font-size:20px;letter-spacing:1px;vertical-align: middle;"><span  style="font-family:Narrow;color:#666666;font-size:20px;letter-spacing:1px;text-decoration: none!important">Certificado </span><span style="color:#e7744f">SSL &nbsp</span></p>
    </div>
    <div class="col-lg-12" align="center">
        <p style="font-family:verdana;color:#333333">Copyright © 2020  por <a href="https://cedisalud.com" style="letter-spacing:2px;font-size:14px" target="_blank">CEDISALUD IPS</a></p>
        <p style="font-family:verdana;color:#333333">Diseño&nbspy&nbspdesarrollo&nbspweb: <a href="#" style="letter-spacing:2px;font-size:14px" target="_blank">PERFILAR</a></p><br>
    </div>
</footer>-->
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
                <div class="col-md-12">
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
                <div class="col-md-12">
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
                <div class="col-md-12"> 
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
                <div class="col-md-12">
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
                <div class="col-md-12"> 
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
                <div class="col-md-12">
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
                <div class="col-md-12">
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
                <div class="col-md-12">
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
               <div align="center">
                    <button id="boton_edit_admin" type="submit" name="enviar" style="font-size:14px!important;width: 270px!important;height:35px;line-height:1em">Enviar</button><br>                               
                </div>
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
        <p style="font-family:verdanab;font-size:22px">LISTA DE CLIENTES</p><br>
        <table>
            <tr>
                <td><p><button class="nuevo_cliente" data-toggle="modal">Nuevo Cliente</button></p></td>
                <td><p><span class="col-22" ><label id="label" class="fa fa-search"></label><input name="search" id="search" type="search" placeholder="Número de cédula..." ></input><span class="focus-border"></span></p></td>
                <td style="border-color:#ffffff;padding:0;color:#000000"><p><button id="btn2" align="center" style="font-size:20px;color:#f58634;background:transparent" class="fa fa-times"  onClick="quitarfiltro()"></button></p></td> 
            </tr>
        </table>
        <table class="lista" style="width:100%"><br>
            <thead>
                <tr>
                    <th style="font-family:Verdanab">NIT</th>
                    <th>Razón Social</th>
                    <th>Sede</th>
                    <th>Contacto</th>
                    <th>Celular</th>
                    <th id="borderout"></th>
                    <td id="borderout"></th>
                    <td id="borderout"></th>
                </tr>
            </thead>    
            <tbody style="border:0!important;font-family:verdana;font-size:14px" id="admin01" align="center"></tbody>
            <tbody style="border:0!important;font-family:verdana;font-size:14px" id="admin02" align="center"></tbody>
        </table>
        </div>
        <div class="modal-footer">
            <br> 
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
                <p style="line-height:1em;font-family:Narrow;color:#666666;font-size:30px;letter-spacing:1px;">Certificado <span style="color:#f58634">SSL</span></p>
                <p style="color:#999999;font-size:16px">Secure Sockets Layer (Capa de Conexión Segura)</p><br><br><p align="justify" style="line-height:1.8em">Es un protocolo que proporciona seguridad e integridad de datos en la comunicación en redes como la Internet. Los datos enviados vía una conexión SSL están protegidos por un cifrado, un mecanismo que evita el espionaje y manipulación de los datos transmitidos. Tener un SSL en su sitio hace que los usuarios no tengan desconfianza de proporcionar su información confidencial en un sitio web, por ej. número de tarjeta de crédito u otros datos de pagos para sitios web de comercio electrónico, u otra información personal que se comparte al registrarse en servicios habituales en línea.</span></p><br>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>               
    </div>
</div>
<div id="costumModal4" class="modal" data-easein="" data-backdrop="static"> 
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
<div id="costumModal16" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
               <form role="form" id="form_clientes" name="form_clientes" method="post"  action="https://www.cedisalud.com.co/sistema" >
                <div><font style="color:#2f323a;font-family:Narrow;letter-spacing:1px;font-size:24px">Registro de Nuevos Clientes</font></div><br>
                    <?php if ($mostrar_validador  == 0){
                        include_once 'plantillas/registrovacio.inc.php';
                    } ?> <br>  
                </form>
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
 <div id="costumModal17" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
               <form role="form" id="form_clientes_edit" name="form_clientes" method="post"  action="https://www.cedisalud.com.co/sistema" >
                <div><font style="color:#2f323a;font-family:Narrow;letter-spacing:1px;font-size:24px">Registro de Nuevos Clientes</font></div><br>
                    <?php if ($mostrar_validador  == 1){
                        include_once 'plantillas/registrovalidado.inc.php';
               
                    } ?><br>  
                </form>
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal18" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <p style="font-family:verdanab;font-size:20px">PSICOSOCIAL</p><br>
                <table style="width:100%;font-family:verdanab;text-align:center">
                    <tr>
                        <td>Batería de diagnóstico<br>
                        <a href="<?php echo RUTA_PSICOSOCIAL ?>"><img src="../imagine/preocupacion2.png" id="imagen4" width="40%" /></a></td>
                        <td>Programa de vigilancia<br>
                        <a href="<?php echo RUTA_PSICOSOCIAL_SVE ?>"><img src="../imagine/investigacion.png" id="imagen4" width="40%" /></a></td>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="id0"></input>
<input type="hidden" id="id2"></input>
<input type="hidden" id="delete_id"></input>
<input type="hidden" id="codigo"></input>
<input type="hidden" id="extension"></input>
<input type="hidden" id="delete_id2"></input>
<input type="hidden" id="codigo_delete"></input>
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
$('.popup-menu input[type="radio"]').on('change', function() {
        if ($(this).is(':checked')) {
            var empresa = $(this).val();
            $('#selectedDisplay').text(empresa);
            $('.select-trigger').blur();
            switch (empresa) {
                case 'SISTEMA':
                    location.href = "../sistema";
                    break;
                case 'AUDITIVO':
                    location.href = "../auditivo";
                    break;
                case 'CARDIOVASCULAR':
                    location.href = "../cardiovascular";
                    break;
                case 'OSTEOMUSCULAR':
                    location.href = "../osteomuscular";
                    break;
                case 'RESPIRATORIO':
                    location.href = "../respiratorio";
                    break;
                case 'VISUAL':
                    location.href = "../visual";
                    break;
                case 'PSICOSOCIAL':
                    location.href = "../psicosocial-sve";
                    break;
                case 'BIOLOGICO':
                    location.href = "../biologico";
                    break;
                case 'CRÓNICOS':
                    location.href = "../cronicos";
                    break;
                case 'SEGUIMIENTOS':
                    location.href = "../seguimientos";
                    break;
                case 'RIESGO-PS':
                    location.href = "../psicosocial";
                    break;
                case 'DIAGNÓSTICO':
                    location.href = "../diagnostico_general";
                    break;
                case 'AUSENTISMO':
                    location.href = "../ausentismo";
                    break;
                case 'URNA VIRTUAL':
                    location.href = "../satisfaccion";
                    break;
                case 'LABORATORIO':
                    location.href = "../laboratorio";
                    break;
                case 'AGENDA':
                    location.href = "../agendamiento";
                    break;
                case 'CONSENTIMIENTO':
                    location.href = "../consentimiento_teleconsulta";
                    break;
                case 'PSICOMETRICO':
                    location.href = "../psicometrico";
                    break;
                case 'NOTIFICACIONES':
                    location.href = "../notificaciones_";
                    break;
                case 'CAPACITACIONES':
                    location.href = "../capacitaciones";
                    break;
                default:
            }
        }
    });
    setTimeout(function(){
          if('<?php echo $mostrar_validador ?>' == 1){
		      $("#costumModal17").modal("show")
		  };
    },1500);
    $("#btn_1").click(function (event) {
        setTimeout(function(){
            location.href="../auditivo";
        },1000);
    });
    $("#btn_2").click(function (event) {
        setTimeout(function(){
            location.href="../visual";
        },1000);
    });
    $("#btn_3").click(function (event) {
        setTimeout(function(){
            location.href="../cardiovascular";
        },1000);
    });
    $("#btn_4").click(function (event) {
        setTimeout(function(){
            location.href="../osteomuscular";
        },1000);
    });
    $("#btn_5").click(function (event) {
        setTimeout(function(){
            location.href="../respiratorio";
        },1000);
    });
    $("#btn_6").click(function (event) {
        setTimeout(function(){
            location.href="../biologico";
        },1000);
    });
    $("#btn_7").click(function (event) {
        setTimeout(function(){
            location.href="../psicosocial-sve";
        },1000);
    });
    $("#btn_8").click(function (event) {
        setTimeout(function(){
            location.href="../psicosocial";
        },1000);
    });
    $("#btn_9").click(function (event) {
        setTimeout(function(){
            location.href="../ausentismo";
        },1000);
    });
    $("#btn_10").click(function (event) {
        setTimeout(function(){
            location.href="../capacitaciones";
        },1000);
    });
    $("#btn_11").click(function (event) {
        setTimeout(function(){
            location.href="../profesiograma";
        },1000);
    });
    $("#btn_12").click(function (event) {
        setTimeout(function(){
            location.href="../indicadores_generales";
        },1000);
    });
    $("#btn_13").click(function (event) {
        setTimeout(function(){
            location.href="../seguimientos";
        },1000);
    });
   $(document).ready(function () {
        $(".load").fadeOut("slow");
        $('#verclave2').hide();
        $('#verclave4').hide();
        $('#verclave6').hide();
        $('#verclave8').hide();
    });
    function verclave1(){
        $('#clavep').get(0).type = 'text';
        $('#verclave1').hide();
        $('#verclave2').show();
    };
    function verclave2(){
        $('#clavep').get(0).type = 'password';
        $('#verclave2').hide();
        $('#verclave1').show();
    };
    function verclave3(){
        $('#clavep2').get(0).type = 'text';
        $('#verclave3').hide();
        $('#verclave4').show();
    };
    function verclave4(){
        $('#clavep2').get(0).type = 'password';
        $('#verclave4').hide();
        $('#verclave3').show();
    };
   function myFunction1() {
        var element = document.getElementById('imagen1');
        element.style.width = "119%";
        element.style.opacity = "0.5";
    }   
    function myFunction2() {
        var element = document.getElementById('imagen2');
        element.style.width = "119%";
        element.style.opacity = "0.5";
    }  
    function myFunction3() {
        var element = document.getElementById('imagen3');
        element.style.width = "119%";
        element.style.opacity = "0.5";
    }  
    function myFunction4() {
        var element = document.getElementById('imagen4');
        element.style.width = "119%";
        element.style.opacity = "0.5";
    }  
    function myFunction5() {
        var element = document.getElementById('imagen5');
        element.style.width = "119%";
        element.style.opacity = "0.5";
    }  
    function myFunction6() {
        var element = document.getElementById('imagen6');
        element.style.width = "119%";
        element.style.opacity = "0.5";
    }  
    function myFunction7() {
        var element = document.getElementById('imagen7');
        element.style.width = "119%";
        element.style.opacity = "0.5";
    }  
    function myFunction8() {
        var element = document.getElementById('imagen8');
        element.style.width = "119%";
        element.style.opacity = "0.5";
    }  
    function myFunction9() {
        var element = document.getElementById('imagen9');
        element.style.width = "119%";
        element.style.opacity = "0.5";
    }  
    function myFunction10() {
        var element = document.getElementById('imagen10');
        element.style.width = "119%";
        element.style.opacity = "0.5";
    } 
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
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
        var o = $(this).attr("data-easein");
        "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    $(document).ready(function() {
        fetchTasks2();
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
                document.getElementById("id0").value = (id);
                document.getElementById("id2").value = (id);
                //document.getElementById("id_admin1").value = (id_admin);
            }
        });
        $(document).on('click', '.task-delete3', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_empleado = $(element).attr('taskId');
            const nombre = $(element).attr('taskId1');
            const codigo0 = $(element).attr('taskId2');
            document.getElementById("delete_id2").value = (id_empleado);
            $('#nombre_delete').html(nombre);
            document.getElementById("codigo_delete").value = (codigo0);
            $("#costumModal4").modal("show");
            $(".delete").on('click', function(event) { 
                const eliminar_cliente = $('#delete_id2').val();
                const codigo = $('#codigo_delete').val();
                console.log(codigo)
                $.ajax({
                    type: "post",
                    url: "../eliminarbdg.php",
                    data: "id_cliente=" + eliminar_cliente + "&codigo=" + codigo,
                    success: function(response) {
                        fetchTasks2();
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
                success: function (response) {
                    console.log(response)
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
                    fetchTasks2();
                    document.getElementById("file-8").addEventListener('click',limpiar);
                    document.getElementById("file-9").addEventListener('click',limpiar);
                }
            });
            return false;
        });
        $(document).on('click', '.nuevo_cliente', (e) => {
            $('#form_clientes').trigger("reset");
            $("#costumModal3").modal("hide");
            $("#costumModal16").modal("show");
        })
        $(document).on('click', '.task-admin', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const admin = $(element).attr('taskId');
            const id = $('#id0').val();
            const postData = {
                id: id,
                admin:admin,
            };
            const url = '../insertar.php';
            $.post(url,  postData, (response) => {
                window.location = "../sistema"
            });
        });
         $(document).on('click', '.task-atributos', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id = $(element).attr('taskId');
             const postData = {
                id:id,
                atributos:'atributos',
            };
            const url = '../text_editar.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });
        });
        function fetchTasks2() {
            var idtabla = $('#id2').val();
            $.ajax({
                type: "post",
                url: "../listas/admin01.php",
                data: "id=" + idtabla,
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `<tr taskId="${task.id}" taskId1="${task.Razon}" taskId2="${task.Ausentismo}">
                                    <td id="td" style="font-family:verdanab"><a href="" data-toggle="modal" class="task-admin enlace">${task.Nit}</a></td>
                                    <td id="td" style="text-align:left;font-family:verdanab"><a href="" data-toggle="modal" class="task-admin enlace">${task.Razon}</a></td>
                                    <td id="td" style="text-align:left">${task.Sede}</td>
                                    <td id="td" style="text-align:left">${task.PersonaC}</td>
                                    <td id="td">${task.TelefonoC}</td>
                                    <td id="borderout" style="padding:1em"><button class="task-editar3" title="Editar"><span class="fa fa-pencil"></span></button></td>
                                    <td id="borderout" style="padding:1em"><button class="task-delete3" title="Eliminar"><span class="fa fa-trash"></span></button></td>
                                    <td id="borderout" style="padding:1em"><button class="task-atributos" style="color:${task.Color}" data-title="Enviar"><span class="fa fa-check"></span></button></td>
                                   </tr> `
                    });
                    $('#admin01').html(template);
                }
            });
        }
        
        $('#search').keyup(function() {
        if($('#search').val()) {
            $('#admin01').hide();
            $('#admin02').show();
            let search = $('#search').val();
            $.ajax({
                url: '../search13.php',
                data:"search=" + search,
                cache: false,
                type: 'POST',
                success: function (response) {
                    console.log(response)
                if(!response.error) {
                    let tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `<tr taskId="${task.id}" taskId1="${task.Razon}" taskId2="${task.Ausentismo}">
                                    <td id="td" style="font-family:verdanab"><a href="" data-toggle="modal" class="task-admin enlace">${task.Nit}</a></td>
                                    <td id="td" style="text-align:left;font-family:verdanab"><a href="" data-toggle="modal" class="task-admin enlace">${task.Razon}</a></td>
                                    <td id="td" style="text-align:left">${task.Sede}</td>
                                    <td id="td" style="text-align:left">${task.PersonaC}</td>
                                    <td id="td">${task.TelefonoC}</td>
                                    <td id="borderout" style="padding:1em"><button class="task-editar3" title="Editar"><span class="fa fa-pencil"></span></button></td>
                                    <td id="borderout" style="padding:1em"><button class="task-delete3" title="Eliminar"><span class="fa fa-trash"></span></button></td>
                                   </tr> `
                    });
                    $('#admin02').html(template);
                }}    
            })} 
        });
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
                        $('#contenido_').html('<img src="../admin/'+Archivo1+'" width="90%" height="100%"></a></div>')
                    }
                });
            }
        });
    }) 
    function quitarfiltro(){
        $('#admin02').hide();
        $('#admin01').show();
        document.getElementById("search").value = "";
    };
    
    window.addEventListener("DOMContentLoaded",() => {
        const b1 = new OnOffButton("#btn_1");
        const b2 = new OnOffButton("#btn_2");
        const b3 = new OnOffButton("#btn_3");
        const b4 = new OnOffButton("#btn_4");
        const b5 = new OnOffButton("#btn_5");
        const b6 = new OnOffButton("#btn_6");
        const b7 = new OnOffButton("#btn_7");
        const b8 = new OnOffButton("#btn_8");
        const b9 = new OnOffButton("#btn_9");
        const b10 = new OnOffButton("#btn_10");
        const b11 = new OnOffButton("#btn_11");
        const b12 = new OnOffButton("#btn_12");
    });
    
    class OnOffButton {
      constructor(el) {
        this.el = document.querySelector(el);
        this.el?.addEventListener("click",this.power.bind(this));
      }
      power() {
        const pressed = this.el?.getAttribute("aria-pressed") === "true";
        this.el?.setAttribute("aria-pressed",`${!pressed}`);
      }
    }

</script>
</body>
</html>
