 <!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agenda</title></title></title>
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
    include_once 'app/admin.inc.php';
    include_once 'app/validadoradmin.inc.php';
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
    $dia = date('d');
    $mes0 = date('m');
    $year = date('Y');
    switch ($mes0) {
        case '01':
            $mes ="enero";
            break;
        case '02':
            $mes ="febrero";
            break;
        case '03':
            $mes ="marzo";
            break;
        case '04':
            $mes ="abril";
            break;
        case '05':
            $mes ="mayo";
            break;
        case '06':
            $mes ="junio";
            break;
        case '07':
            $mes ="julio";
            break;
        case '08':
            $mes ="agosto";
            break;
        case '09':
            $mes ="septiembre";
            break;
        case '10':
            $mes ="octubre";
            break;
        case '11':
            $mes ="noviembre";
            break;
        case '12':
            $mes ="diciembre";
            break;
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
        font-family:verdana;
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
    #borderout2 {
        background:transparent!important;
        border:0!important;
        width:20%!important;
    }
     #borderout3 {
        background:transparent!important;
        border:0!important;
    }
    .delete,
    .delete2,
    .delete3 {
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
    .delete2:hover,
    .delete3:hover {
        color:#990000;
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
        background:transparent;
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
    #search,
    #search2 {
        height: 36px;
        width:16.5em;
        padding-top:1px;
        border: 1px solid #71788e!important;
        background:transparent;
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
        background:transparent;
    }
    #search2 ~ .focus-border,
    #search ~ .focus-border{
        position: absolute; 
        height: 36px; 
        right: 0; 
        width: 0;
        transition: 0.5s;
        margin-right:2px;
    }
    #search2:focus ~ .focus-border,
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
        width:13em!important;
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        text-align:center;
        padding:0.6em!important;
        border:1px solid #71788e!important;
    }
    .table td {
        text-align:left;
        padding:1em;
        border:1px solid #71788e!important;
        vertical-align:middle!important;
    }
    .table2 {
        border:hidden!importnat;
        color:#000000;
    }
    .table2 th {
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        text-align:center;
        padding:0.6em!important;
        border:1px solid #71788e!important;
    }
     .table2 td {
        text-align:left;
        padding:1em;
        border:1px solid #71788e!important;
        vertical-align:middle!important;
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
    #boton_cliente,
    #boton_empresas,
    #boton_citas2,
    #boton_citas,
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
    #boton_cliente:hover,
    #boton_empresas:hover,
    #boton_citas2:hover,
    #boton_citas:hover,
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
        .task-pdf, .submit,
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
        #costumModal4 .modal-lg  {
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
        border-width:1px!important;
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
        color:#000000;
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
        width:100%;
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
    .task-estado, .submit,
    .task-envio, .submit,
    .task-editar, .submit,
    .task-editar2, .submit,
    .task-editar4, .submit,
    .task-delete, .submit,
    .task-delete2, .submit,
    .task-delete3, .submit,
    .task-pdf, .submit,
    .task-download, .submit {
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
    .task-editar4:hover, .submit:hover,
    .task-editar2:hover, .submit:hover,
    .task-editar:hover, .submit:hover {
        color:#e69900;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-estado:hover, .submit:hover,
    .task-envio:hover, .submit:hover,
    .task-delete3:hover, .submit:hover,
    .task-delete2:hover, .submit:hover,
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
     input[type="checkbox"] { 
        display:inline-block;
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
        background:url(imagen_checkbox.png) left top no-repeat;                
        cursor:pointer;
        float:right!important;
 
    }
    .checkbox label {
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
        background-color:transparent;
        border:1px solid #71788e;
        text-align:center;
        margin-top:-1.6em;
        margin-left:2.2em;
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        font-size:25px!important;
        color:#e7744f;
        margin-left:28px;
        margin-top:-24px;
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
     
    }
    #check2::after {
        display: inline-block;
        position: absolute;
        font-size:25px!important;
        color:#e7744f;
        margin-left:0px;
        margin-top:-24px;
    }
    #check3::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 21px;
        height: 21px;
        background-color:transparent;
        border:1px solid #71788e;
        text-align:center;
        margin-top:-1.6em;
    }
    #check3::after {
        display: inline-block;
        position: absolute;
        font-size:25px!important;
        color:#e7744f;
        margin-left:0px;
        margin-top:-24px;
    }
    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
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
    .nuevo_cliente  {
        width:12em;
        height: 36px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:transparent;
        color: #666666;
        border: 1px solid #f58634;
        font-size:14px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .nuevo_cliente:hover, .submit:hover {
        border: 1px solid #f58634;
        color: #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .todoapp,
    .todoapp2 {
    	 background:transparent;
    	 padding:0;
    	 margin-bottom:3em;
    }
    .todoapp input{
    	color:#000000;
    	font-size:17px;
    }
    .todoapp input::-webkit-input-placeholder {
    	color:#999999;
    	font-size:16px!important;
    }
    .todoapp input::-moz-placeholder {
    	color:#999999;
    	font-size:16px!important;
    }
    .todoapp input::input-placeholder {
    	color:#999999;
    	font-size:16px!important;
    }
    .todoapp textarea::-webkit-input-placeholder {
    	color:#999999;
    	font-size:16px!important;
    }
    .todoapp textarea::-moz-placeholder {
    	color:#999999;
    	font-size:16px!important;
    }
    .todoapp textarea::input-placeholder {
    	color:#999999;
    	font-size:16px!important;
    }
    .new-todo  {
    	position: relative;
    	margin: 0;
    	width: 100%;
    	height:4em;
    	font-size: 14px;
    	font-family: inherit;
    	font-weight: inherit;
    	line-height: 1.4em;
    	border: 0;
    	color: inherit;
    	border: 1px solid #999;
    	box-shadow: inset 0 -1px 5px 0 rgba(0, 0, 0, 0.2);
    	box-sizing: border-box;
    	-webkit-font-smoothing: antialiased;
    	-moz-osx-font-smoothing: grayscale;
    }
    .new-todo {
    	padding: 16px 16px 16px 30px;
    	border: none;
    	background: rgba(0, 0, 0, 0.003);
    	box-shadow: inset 0 -2px 1px rgba(0,0,0,0.03);
    }
    button {
    	margin: 0;
    	padding: 0;
    	border: 0;
    	background: none;
    	font-size: 100%;
    	vertical-align: baseline;
    	font-family: inherit;
    	font-weight: inherit;
    	color: inherit;
    	-webkit-appearance: none;
    	appearance: none;
    	-webkit-font-smoothing: antialiased;
    	-moz-osx-font-smoothing: grayscale;
    }
    .todoapp select {
        background-image: url(../imagine/abajo.pn); 
        background-repeat: no-repeat;
        background-position: 96% 50%;
        background-size:22px;
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
    }
    .todoapp select::-ms-expand {
        display: none; 
    }
    .new-todo > option:not(:first-of-type) {
      color:#4d4d4d;
      font-size:16px;
      font-family:verdana;
    }
    .todoapp textarea {
        font-size:16px;
    }
    #fixed {
        position:fixed;
        z-index:-1!important;
        margin:0!important;
        padding:0!important;
        top:2em;
    }
    #boton:after {
        top: -100%;
        left: 0px;
        height: 100%;
        width: 100%;
        position: absolute;
        background: rgb(250, 255, 189);
        color:rgba(0,0,0,0.87)!important;
        font-size: 14px;
        line-height:2.2em;
        border-radius:0px;
        content: 'Enviar';
        transform-origin: left bottom;
        transform: rotateX(90deg);
    }
    #boton {
        background: #000000!important;
        color: #ffffff!important;
        font-size: 14px;
        border-radius: 0px!important;
        position: relative;
        transition: all 500ms ease;
        border-color:#000000!important;
        border-width:1px!important;
        box-shadow:0px 4px 3px rgba(0,0,0,.5);
    }
    #boton {
        transform-style: preserve-3d;
    }
    #boton:hover {
        transform-origin: center bottom;
        transform: rotateX(-90deg) translateY(100%)
    }
    
    @media screen and (max-width: 800px) {
        #imagen_fija {
            width:100%!important;
        }
    } 
    #tabla_dia tr:nth-child(even) {
        background-color: #ffe6e6;
    }
    #tabla_dia tr:nth-child(odd) {
        background-color: #fff;
    }
    #tabla_dia2 tr:nth-child(even) {
        background-color: #eee;
    }
    #tabla_dia2 tr:nth-child(odd) {
        background-color: #fff;
    }
    .fullscreen-modal .modal-dialog {
        margin: 0;
        margin-right: auto;
        margin-left: auto;
        width:100%;
        height:100%;
        text-align:center;
    }
   
    select option {
	   color:#ffffff;
	}
	select .negro option {
	   color:#000000!important;
	}
    
     #filas {
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
    #foto_empleado {
        width:25em;
        text-align:left;
        object-fit:scale-down;
    }
    #borderout2 {
        font-family:Verdanab!important;
        text-align:left;
        padding:10px;
    }
    #boton_recursos {
        transform-style: preserve-3d;
        border-radius:0;
        background:#000000;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    #boton_recursos:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    .popup {
        position:absolute;
        top:0em;
        left:5em;
        right:0;
        bottom:0;
        margin:0;
        width:40em;
        background:#ffffff;
        box-shadow: 1px 1px 3px #222222;
        border: 1px solid #333333;
        border-radius:0;
        z-index:9;
        padding:10px;
        opacity:1;
        font-family:verdanabi;
        color:#000000;
        font-size:13px;
    }
    #popup_0,
    #popup0 {
        position:fixed;
        top:5em;
        left:40%;
        right:40%;
        bottom:0;
        margin:0;
        width:40em;
        background:#ffffff;
        box-shadow: 1px 1px 3px #222222;
        border: 1px solid #333333;
        border-radius:0;
        z-index:9999;
        padding:10px;
        opacity:0.85;
        font-family:verdanabi;
        color:#000000;
        font-size:13px;
    }
</style>
</head>
<body>
<?php if(isset($_GET["pdf"])) { ?>
<div class="loader no-scroll-y">
	<section>
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
    </div> <?php } else {?> <div class="load"></div> <?php } ?>
    <!--<div id="popup">
        <button type="button" id="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button>
        <p style="text-align:center;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab;font-size:15px">Tipo específico de exámen</p>
        <p style="text-align:left;color:#453969;font-family:verdanab">Ingreso para alturas y espacios confinados:</p>
        <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, cuestionario anexo alturas, evaluación psicológica (ISRA) y concepto aptitud laboral trabajo en alturas y espacios confinados.</p><br>
        <p style="text-align:left;color:#453969;font-family:verdanab">Ingreso para conductores:</p>
        <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico<i style="font-family:verdanai"> (1. Test de atención concentrada y resistencia a la monotonía.  2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i> y concepto aptitud laboral conducción.</p><br>
        <p style="text-align:left;color:#000000;font-family:verdanab">Ingreso manipulador de alimentos:</p>
        <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, KOH en uñas, coprológico, frotis faríngeo y concepto aptitud laboral manipulación de alimentos.</p><br>
        <p style="text-align:left;color:#453969;font-family:verdanab">Ingreso seguridad vial y énfasis en alturas:</p>
        <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico<i style="font-family:verdanai"> (1. Test de atención concentrada y resistencia a la monotonía.  2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i>, cuestionario anexo alturas y concepto aptitud laboral conducción y trabajo en alturas</p><br>
        <p style="text-align:left;color:#453969;font-family:verdanab">Ingreso con énfasis en alturas:</p>
        <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, cuestionario anexo alturas y concepto aptitud laboral trabajo en alturas.</p><br>
        <p style="text-align:left;color:#453969;font-family:verdanab">Periódico seguridad vial y énfasis en alturas:</p>
        <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico<i style="font-family:verdanai"> (1. Test de atención concentrada y resistencia a la monotonía.  2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i>, cuestionario anexo alturas y concepto aptitud laboral conducción y trabajo en alturas</p><br>
        <p style="text-align:left;color:#453969;font-family:verdanab">Periódico de alturas:</p>
        <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, cuestionario anexo alturas y concepto aptitud laboral trabajo en alturas</p><br>
        <p style="text-align:left;color:#453969;font-family:verdanab">Periódico manipulador de alimentos:</p>
        <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, KOH en uñas, coprológico, frotis faríngeo y concepto aptitud laboral manipulación de alimentos.</p><br>
        <p style="text-align:left;color:#453969;font-family:verdanab">Periódico para conductores:</p>
        <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico<i style="font-family:verdanai"> (1. Test de atención concentrada y resistencia a la monotonía.  2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i> y concepto aptitud laboral conducción y trabajo en alturas.</p><br>
        <p style="text-align:left;color:#453969;font-family:verdanab">Postincapacidad</p>
        <p>Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.</p><br>
        <p style="text-align:left;color:#453969;font-family:verdanab">Reintegro laboral</p>
        <p>Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.</p><br>
        <p style="text-align:left;color:#453969;font-family:verdanab">Seguimiento, recomendaciones y/o restricciones médicas</p>
        <p>Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.</p>
    </div>-->

    <section id="container">
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
               <div class="fa fa-bars" style="font-size:22px"></div>
            </div>
            <a href="#" data-toggle="modal" class="logo">Cedisalud<span> IPS</span></a>
            <div class="nav notify-row">
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
                            <option>AUSENTISMO</option>
                            <option>URNA VIRTUAL</option>
                            <option>LABORATORIO</option>
                            <option selected>AGENDA</option>
                            <option>CONSENTIMIENTO</option>
                            <option>ISRA</option>
                            <option>NOTIFICACIONES</option></option>
                            <option>CAPACITACIONES</option></option>
                        </select>
                        <span class="focus-border3"></span>
                    </td>
                </tr>
            </table>
          </div>
          <div>
            <ul class="pull-right top-menu" >
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
                       <a href="#costumModal5" data-toggle="modal">
                           <i class="fa fa-user-plus"></i>
                           <span>Empresas</span>
                       </a>
                    </li>
                    <li class="sub-menu">
                       <a href="#costumModal17" data-toggle="modal">
                           <i class="fa fa-commenting"></i>
                           <span>Notificaciones</span>
                       </a>
                    </li>
                    <li class="sub-menu">
                       <a href="#costumModal10" data-toggle="modal">
                           <i class="fa fa-commenting"></i>
                           <span>Notif. program.</span>
                       </a>
                    </li><br>
                </ul>
            </div>
        </aside>
    </header>
    </section>
    <div class="container-fluid" style="text-align:center;color:#333333"><br><br><br>
        <p style="font-family:verdanab;font-size:24px;color:#333333;text-align:center;margin:0">AGENDA DE CITAS</p><br>
        <table>
            <tr>
                <td>
                    <form class="formxlsx" action="../phpspreadsheet/export2.php" method="post">
                        <input type="hidden" name="id_usuario" value="<?php echo $id_admin ?>"></input>
                        <button  type="submit" id="export_data" name='export_data' class="nuevo3" style="width:12em">Consolidado.xlsx</button>
                    </form>
                </td>
                <td>
                    <form class="formxlsx" action="../phpspreadsheet/table7.php" method="post">
                        <input type="hidden" name="id_usuario" value="<?php echo $id_admin ?>"></input>
                        <button  type="submit" id="export_data" name='export_data' class="nuevo3" style="width:12em">Simedi.xlsx</button>
                    </form>
                </td>
                <!--<td><button class="nuevo2" id="export_xlsx" href="">Plantilla .xlsx</button></td>
                <form method="post" id="import_excel_form" enctype="multipart/form-data">
                    <td><input type="submit" name="import" id="import" class="btn nuevo2" style="width:10em" value="Importar" /></td>
                    <td style="height:auto!important"><input type="file" name="import_excel" name="files1" id="file-7" class="inputfile inputfile-8" data-multiple-caption="{count} archivos seleccionados"/>    
                        <label for="file-7">
                        <span class="iborrainputfile"></span>
                        <strong>Archivo.xlsx</strong>
                        </label>
                    </td>
                </form>-->
            </tr>
        </table><br>
        <table>
            <tr>
                <td><span class="col-22" ><label id="label" class="fa fa-search"></label><input name="search" id="search" type="search" placeholder="Cédula o empresa..." ></input><span class="focus-border"></span></td>
                <td style="border-color:#ffffff;padding:0;color:#000000"><button id="btn2" align="center" style="font-size:20px;color:#f58634" class="fa fa-times" data-title="Quitar filtro" onClick="quitarfiltro()"></button></td>
                <td style="border-color:#ffffff;padding:0;color:#000000"><button href="#costumModal8" data-toggle="modal" id="btn2" align="center" style="font-size:20px;color:#f58634" class="fa fa-filter" data-title="Filtrar" onClick="quitarfiltro()"></button></td>
                <td style="padding-right:10px"><select type="text" class="form-control" id="filas" style="font-size:14px;width:5em!important;color:#000000;padding:4px">
                    <option style="color:#000000">10</option>
                    <option selected="true" style="color:#000000">50</option>
                    <option style="color:#000000">100</option>
                    <option style="color:#000000">250</option>
                </select></td>
                <td style="font-family:verdanab;margin:0!important">Aliados:</td>
                <td class="checkbox"> 
                    <input type="checkbox" id="aliados" name="aliados" value="1"/>
                    <label id="check3" for="aliados">
                </td> 
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                <td style="font-family:verdanab">Vistos:</td>
                <td class="checkbox"> 
                    <input type="checkbox" id="vistos" name="vistos" value="1"/>
                    <label id="check3" for="vistos">
                </td> 
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
               <!-- <td style="padding-left:3em"><button class="nuevo" id="rnuevo" href="#costumModal1" data-toggle="modal">Nueva Cita</button></td>-->
                <td><button class="nuevo" id="rnuevo" href="#costumModal3" data-toggle="modal">Citas del día</button></td>
            </tr>
        </table><br>
        <table class="table table-striped" align="center" style="width:100%!important">
            <thead>
                <tr style="font-size:10px!important">
                    <th id="borderout3" style="width:5em!important"></th>
                    <th id="borderout3" style="width:5em!important"></th>
                    <th id="borderout3" style="width:5em!important"></th>
                    <th style="width:3em!important">N°</th>
                    <th style="width:8em!important" align="center">IPS</th>
                    <th style="width:10em!important" align="center">Fecha de agendamiento</th>
                    <th style="width:4em!important" align="center">Tipo de doc.</th>
                    <th style="width:10em!important" align="center">N° del documento</th>
                    <th style="width:13em!important">Nombres</th>
                    <th style="width:13em!important">Apellidos</th>
                    <th style="width:13em!important">Cargo</th>
                    <th style="width:10em!important">Tipo de examen</th>
                    <th style="width:13em!important">Examen específico</th>
                    <th style="width:50em!important">Descripcion</th>
                    <th style="width:10em!important">Fecha de la cita</th>
                    <th style="width:30em!important">Observaciones</th>
                    <th style="width:30em!important">Observaciones especiales</th>
                    <th style="width:20em!important">Empresa</th>
                    <th style="width:12em!important">Persona que agenda</th>
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
        <span style="font-family:verdana;color:#333333">Diseño&nbspy&nbspdesarrollo&nbspweb: <a href="https://www.perfilar.net" style="letter-spacing:2px;font-size:14px">PERFILAR</a></span><br> 
        <span style="font-family:verdana;color:#333333">Copyright © 2021 - Medellín (Colombia)</span>
    </div>
</div>
</section>
<div id="costumModal7" class="modal" data-easein="flash" data-backdrop="static"> 
    <div class="modal-dialog modal-title" style="background:#ffffff">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body todoapp" style="text-align:center;font-size:14px;">
                <h4 style="color:#453969">EDITAR LA FECHA DE LA CITA</h4><br>
                    <input type="hidden" id="id_A">
                    <p style="font-family:verdanab;font-size:20px"><span id="Nombre_A"></span> <span id="Apellidos_A"></span></p><br>
                    <p class="col-md-6 col-md-offset-3"  style="text-align:center;color:#666666;font-family:verdanab;font-size:22px"><input type="date" id="Fecha_A" style="border:none" placeholder="De clic aquí para seleccionar una fecha..." ></p>
                    <p class="col-md-6 col-md-offset-3"><button href="#citas" id="boton_citas2" type="submit" name="enviar" class="new-todo btn btn btn-default btn-block scroll" style="font-size:14px!important;height:35px;line-height:0.1em">Enviar</button></p><br><br><br><br>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
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
                <p style="font-family:Narrow!important;color:#666666;font-size:26px;letter-spacing:1px;text-align:center">FILTROS</span></p>
                <form id="form_filtro">
                    <p style="font-family:Narrow!important;color:#e7744f;font-size:20px;letter-spacing:1px">Dia:</p>
                <table style="width:100%">
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">1</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N1" value="0"/>
                            <input type="checkbox" id="checkbox13" name ="N1" value="1" />
                            <label id="check2" for="checkbox13">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">2</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N2" value="0"/>
                            <input type="checkbox" id="checkbox14" name ="N2" value="1" />
                            <label id="check2" for="checkbox14">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">3</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N3" value="0"/>
                            <input type="checkbox" id="checkbox15" name ="N3" value="1" />
                            <label id="check2" for="checkbox15">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">4</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N4" value="0"/>
                            <input type="checkbox" id="checkbox16" name ="N4" value="1" />
                            <label id="check2" for="checkbox16">
                        </td> 
                    </tr>
                   <tr>
                        <td style="font-family:verdanab;font-size:14px">5</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N5" value="0"/>
                            <input type="checkbox" id="checkbox17" name ="N5" value="1" />
                            <label id="check2" for="checkbox17">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">6</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N6" value="0"/>
                            <input type="checkbox" id="checkbox18" name ="N6" value="1" />
                            <label id="check2" for="checkbox18">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">7</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N7" value="0"/>
                            <input type="checkbox" id="checkbox19" name ="N7" value="1" />
                            <label id="check2" for="checkbox19">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">8</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N8" value="0"/>
                            <input type="checkbox" id="checkbox20" name ="N8" value="1" />
                            <label id="check2" for="checkbox20">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">9</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N9" value="0"/>
                            <input type="checkbox" id="checkbox21" name ="N9" value="1" />
                            <label id="check2" for="checkbox21">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">10</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N10" value="0"/>
                            <input type="checkbox" id="checkbox22" name ="N10" value="1" />
                            <label id="check2" for="checkbox22">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">11</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N11" value="0"/>
                            <input type="checkbox" id="checkbox23" name ="N11" value="1" />
                            <label id="check2" for="checkbox23">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">12</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N12" value="0"/>
                            <input type="checkbox" id="checkbox24" name ="N12" value="1" />
                            <label id="check2" for="checkbox24">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">13</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N13" value="0"/>
                            <input type="checkbox" id="checkbox25" name ="N13" value="1" />
                            <label id="check2" for="checkbox25">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">14</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N14" value="0"/>
                            <input type="checkbox" id="checkbox26" name ="N14" value="1" />
                            <label id="check2" for="checkbox26">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">15</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N15" value="0"/>
                            <input type="checkbox" id="checkbox27" name ="N15" value="1" />
                            <label id="check2" for="checkbox27">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">16</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N16" value="0"/>
                            <input type="checkbox" id="checkbox28" name ="N16" value="1" />
                            <label id="check2" for="checkbox28">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">17</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N17" value="0"/>
                            <input type="checkbox" id="checkbox29" name ="N17" value="1" />
                            <label id="check2" for="checkbox29">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">18</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N18" value="0"/>
                            <input type="checkbox" id="checkbox30" name ="N18" value="1" />
                            <label id="check2" for="checkbox30">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">19</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N19" value="0"/>
                            <input type="checkbox" id="checkbox31" name ="N19" value="1" />
                            <label id="check2" for="checkbox31">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">20</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N20" value="0"/>
                            <input type="checkbox" id="checkbox32" name ="N20" value="1" />
                            <label id="check2" for="checkbox32">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">21</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N21" value="0"/>
                            <input type="checkbox" id="checkbox33" name ="N21" value="1" />
                            <label id="check2" for="checkbox33">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">22</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N22" value="0"/>
                            <input type="checkbox" id="checkbox34" name ="N22" value="1" />
                            <label id="check2" for="checkbox34">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">23</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N23" value="0"/>
                            <input type="checkbox" id="checkbox35" name ="N23" value="1" />
                            <label id="check2" for="checkbox35">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">24</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N24" value="0"/>
                            <input type="checkbox" id="checkbox36" name ="N24" value="1" />
                            <label id="check2" for="checkbox36">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">25</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N25" value="0"/>
                            <input type="checkbox" id="checkbox37" name ="N25" value="1" />
                            <label id="check2" for="checkbox37">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">26</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N26" value="0"/>
                            <input type="checkbox" id="checkbox38" name ="N26" value="1" />
                            <label id="check2" for="checkbox38">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">27</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N27" value="0"/>
                            <input type="checkbox" id="checkbox39" name ="N27" value="1" />
                            <label id="check2" for="checkbox39">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">28</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N28" value="0"/>
                            <input type="checkbox" id="checkbox40" name ="N28" value="1" />
                            <label id="check2" for="checkbox40">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">29</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N29" value="0"/>
                            <input type="checkbox" id="checkbox41" name ="N29" value="1" />
                            <label id="check2" for="checkbox41">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">30</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N30" value="0"/>
                            <input type="checkbox" id="checkbox42" name ="N30" value="1" />
                            <label id="check2" for="checkbox42">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px">31</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="N31" value="0"/>
                            <input type="checkbox" id="checkbox43" name ="N31" value="1" />
                            <label id="check2" for="checkbox43">
                        </td> 
                        <td style="font-family:verdanab;font-size:14px"></td>
                        <td class="checkbox"> </td>
                    </tr>
                </table><br>
                <p style="font-family:Narrow!important;color:#e7744f;font-size:20px;letter-spacing:1px">Mes:</p>
                <table>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Enero </td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="enero" value="0"/>
                            <input type="checkbox" id="checkbox1" name ="enero" value="1"/>
                            <label id="check1" for="checkbox1">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Febrero </td>
                        <td class="checkbox">
                            <input type="hidden" name ="febrero" value="0"/> 
                            <input type="checkbox" id="checkbox2" name ="febrero" value="1"/>
                            <label id="check1" for="checkbox2">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Marzo </td>
                        <td class="checkbox"> 
                        <input type="hidden" name ="marzo" value="0"/>
                            <input type="checkbox" id="checkbox3" name ="marzo" value="1"/>
                            <label id="check1" for="checkbox3">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Abril </td>
                        <td class="checkbox"> 
                        <input type="hidden" name ="abril" value="0"/>
                            <input type="checkbox" id="checkbox4" name ="abril" value="1"/>
                            <label id="check1" for="checkbox4">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Mayo </td>
                        <td class="checkbox"> 
                        <input type="hidden" name ="mayo" value="0"/>
                            <input type="checkbox" id="checkbox5" name ="mayo" value="1"/>
                            <label id="check1" for="checkbox5">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Junio </td>
                        <td class="checkbox"> 
                        <input type="hidden" name ="junio" value="0"/>
                            <input type="checkbox" id="checkbox6" name ="junio" value="1"/>
                            <label id="check1" for="checkbox6">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Julio </td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="julio" value="0"/>
                            <input type="checkbox" id="checkbox7" name ="julio" value="1"/>
                            <label id="check1" for="checkbox7">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Agosto </td>
                        <td class="checkbox"> 
                        <input type="hidden" name ="agosto" value="0"/>
                            <input type="checkbox" id="checkbox8" name ="agosto" value="1"/>
                            <label id="check1" for="checkbox8">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Septiembre </td>
                        <td class="checkbox"> 
                        <input type="hidden" name ="septiembre" value="0"/>
                            <input type="checkbox" id="checkbox9" name ="septiembre" value="1"/>
                            <label id="check1" for="checkbox9">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Octubre </td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="octubre" value="0"/>
                            <input type="checkbox" id="checkbox10" name ="octubre" value="1"/>
                            <label id="check1" for="checkbox10">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Noviembre </td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="noviembre" value="0"/>
                            <input type="checkbox" id="checkbox11" name ="noviembre" value="1"/>
                            <label id="check1" for="checkbox11">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">Diciembre </td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="diciembre" value="0"/>
                            <input type="checkbox" id="checkbox12" name ="diciembre" value="1"/>
                            <label id="check1" for="checkbox12">
                        </td> 
                    </tr>
                </table><br>
                <p style="font-family:Narrow!important;color:#e7744f;font-size:20px;letter-spacing:1px">Año:</p>
                <table>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">2021</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="A2021" value="0"/>
                            <input type="checkbox" id="checkbox44" name ="A2021" value="1"/>
                            <label id="check1" for="checkbox44">
                        </td> 
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td style="font-family:verdanab;font-size:14px">2025</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="A2025" value="0"/>
                            <input type="checkbox" id="checkbox48" name ="A2025" value="1"/>
                            <label id="check1" for="checkbox48">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">2022</td>
                        <td class="checkbox">
                            <input type="hidden" name ="A2022" value="0"/> 
                            <input type="checkbox" id="checkbox45" name ="A2022" value="1"/>
                            <label id="check1" for="checkbox45">
                        </td> 
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td style="font-family:verdanab;font-size:14px">2026</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="A2026" value="0"/>
                            <input type="checkbox" id="checkbox49" name ="A2026" value="1"/>
                            <label id="check1" for="checkbox49">
                        </td> 
                    </tr>
                    <tr>
                        <td style="font-family:verdanab;font-size:14px">2023</td>
                        <td class="checkbox"> 
                        <input type="hidden" name ="A2023" value="0"/>
                            <input type="checkbox" id="checkbox46" name ="A2023" value="1"/>
                            <label id="check1" for="checkbox46">
                        </td> 
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td style="font-family:verdanab;font-size:14px">2027</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="A2027" value="0"/>
                            <input type="checkbox" id="checkbox50" name ="A2027" value="1"/>
                            <label id="check1" for="checkbox50">
                        </td> 
                    </tr>
                     <tr>
                        <td style="font-family:verdanab;font-size:14px">2024</td>
                        <td class="checkbox"> 
                        <input type="hidden" name ="A2024" value="0"/>
                            <input type="checkbox" id="checkbox47" name ="A2024" value="1"/>
                            <label id="check1" for="checkbox47">
                        </td> 
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td style="font-family:verdanab;font-size:14px">2028</td>
                        <td class="checkbox"> 
                            <input type="hidden" name ="A2028" value="0"/>
                            <input type="checkbox" id="checkbox51" name ="A2028" value="1"/>
                            <label id="check1" for="checkbox51">
                        </td> 
                    </tr>
                </table><br>
                </form>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>               
    </div>
</div>
<div id="costumModal1" class="modal" data-easein="flash" data-backdrop="static"> 
    <div class="modal-dialog modal-title" style="background:#ffffff">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body todoapp" style="text-align:center;font-size:14px;">
                <div id="popup1" class="popup" style="height:19em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso para alturas y espacios confinados</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, espirometría, colesterol total, trigliceridos, glicemia en ayunas, cuestionario anexo alturas, evaluación psicológica, concepto aptitud laboral trabajo en alturas y espacios confinados, y prueba de embarazo (<span style="font-family:verdana">Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado</span>).</p><br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup2" class="popup" style="height:22em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso para conductores</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico<i style="font-family:verdanai"> (1. Test de atención concentrada y resistencia a la monotonía.  2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i> y concepto aptitud laboral conducción.</p><br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup3" class="popup" style="height:17em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso manipulador de alimentos</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, KOH en uñas, coprológico, frotis faríngeo y concepto aptitud laboral manipulación de alimentos.</p><br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup4" class="popup" style="height:24em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso seguridad vial y énfasis en alturas</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico<i style="font-family:verdanai"> (1. Test de atención concentrada y resistencia a la monotonía.  2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i>, cuestionario anexo alturas, concepto aptitud laboral conducción y trabajo en alturas, y prueba de embarazo (<span style="font-family:verdana">Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado</span>).</p><br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup5" class="popup" style="height:18em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso con énfasis en alturas</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, cuestionario anexo alturas, concepto aptitud laboral trabajo en alturas y prueba de embarazo (<span style="font-family:verdana">Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado</span>).</p><br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup6" class="popup" style="height:25em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico seguridad vial y énfasis en alturas</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico<i style="font-family:verdanai"> (1. Test de atención concentrada y resistencia a la monotonía.  2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i>, cuestionario anexo alturas, concepto aptitud laboral conducción y trabajo en alturas, y prueba de embarazo (<span style="font-family:verdana">Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado</span>).</p><br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup7" class="popup" style="height:18em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico de alturas</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, cuestionario anexo alturas, concepto aptitud laboral trabajo en alturas y prueba de embarazo (<span style="font-family:verdana">Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado</span>).</p><br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup8" class="popup" style="height:17em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico manipulador de alimentos</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, KOH en uñas, coprológico, frotis faríngeo y concepto aptitud laboral manipulación de alimentos.</p><br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup9" class="popup" style="height:22em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico para conductores</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico<i style="font-family:verdanai"> (1. Test de atención concentrada y resistencia a la monotonía.  2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i> y concepto aptitud laboral conducción y trabajo en alturas.</p><br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup10" class="popup" style="height:19em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Postincapacidad</p>
                    <p>Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.</p>
                    <p style="color:#cc0000;font-family:verdanab;font-size:14px">HORARIO DE ATENCIÓN PARA ESTE EXAMEN</p>
                    <p style="color:#cc0000;font-family:verdanab;font-size:14px">UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00</p>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup11" class="popup" style="height:17em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Reintegro laboral</p>
                    <p>Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.</p><br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup12" class="popup" style="height:21em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Seguimiento, recomendaciones y/o restricciones médicas</p>
                    <p>Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.</p>
                    <p style="color:#cc0000;font-family:verdanab;font-size:14px">HORARIO DE ATENCIÓN PARA ESTE EXAMEN</p>
                    <p style="color:#cc0000;font-family:verdanab;font-size:14px">UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00</p>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                <div id="popup13" class="popup" style="height:19em">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico para alturas y espacios confinados</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, espirometría, colesterol total, trigliceridos, glicemia en ayunas, cuestionario anexo alturas, evaluación psicológica, concepto aptitud laboral trabajo en alturas y espacios confinados, y prueba de embarazo (<span style="font-family:verdana">Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado</span>).</p><br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:14px!important">observaciones</span>.</p>
                </div>
                
                <h3 style="color:#453969">NUEVA CITA</h3>
                <form role="form" id="form_clientes" name="form_clientes" onsubmit="return marcado();">
                <div style="min-height:6em!important">
                    <p id="seleccion_empresa" style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab;text-align:center"><br>Para iniciar, seleccione una Empresa:</p>
                   <div id="Sede_A">
                        <div class="col-md-6" style="margin:0;padding:0">
                            <p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab"><br>Sede Cedisalud IPS:</p><select class="new-todo Sede_A" id="Sede" style='color:#999999;font-size:16px!important' oninput='style.color="black"' >
                                <option value="" style='display:none;color:#999999' hidden>Seleccione una opción...</option>
                                <option>Apartadó/Cedisalud IPS</option>
                                <option>Medellín/Cedisalud IPS</option>
                            </select>
                        </div>
                        <div class="col-md-6" style="margin:0;padding:0">
                            <p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab"><br>IPS Aliada Red Nacional:</p>
                            <select class="new-todo Red_A" id="Red" style='color:#999999;font-size:16px!important' oninput='style.color="black"' name="Red" >
                                <option value="" style='display:none;color:#999999' hidden>Seleccione una opción...</option>
                                <option style="font-family:verdanab!important" disabled>Zona Caribe</option>
                                <!--<option>Barranquilla/Medikcorp SAS</option>-->
                                <option>Aguachica/Capella IPS</option>
                                <option>Barranquilla/SSTA Consulting S.A.S</option>
                                <option>Cartagena/H&S Occupational</option>
                                <option>Montería/Peña Asesores Salud Ocupacional S.A.S. -PASO-</option>
                                <!--<option>Montería/Fundación Certificar</option>-->
                                <option>Riohacha/APREHSI GROUP</option>
                                <option>Santa Marta/PREVENIR 1-A SA</option>
                                <option>Sincelejo/LABORMED</option>
                                <option>Valledupar/APREHSI GROUP</option>
                                <option disabled></option>
                                <option style="font-family:verdanab!important" disabled>Zona Oriental</option>
                                <option>Villavicencio/ASEINCAP</option>
                                <option disabled></option>
                                <option style="font-family:verdanab!important" disabled>Zona Pacífico</option>
                                <option>Cali/CEMESST</option>
                                <option>Palmira/CEMESST</option>
                                <option>Buga/Laboratorio Clínico López Línea Ocupacional IPS</option>
                                <option>Tuluá/IPS Opositiva Salud Integral Tuluá SAS</option>
                                <option>Quibdó/BIOLABORAL IPS</option>
                                <option>Pasto/OCUPSALUD SST SAS</option>
                                <option disabled></option>
                                <option style="font-family:verdanab!important" disabled>Zona Central</option>
                                <!--<option>Bogotá Norte/Unimsalud</option>
                                <!--<option>Bogotá Norte/Human Group Corp IPS VIP</option>-->
                                <option>Bogotá Norte/Zonamedica IPS</option>
                                <option>Bogotá La Soledad/Zonamedica IPS</option>
                                <option>Bogotá Central-Galerías/Grupo Ocupacional</option>
                                <option>Funza/IPS Sigmedical Funza</option>
                                <option>Madrid/IPS Sigmedical Madrid</option>
                                <option>Mosquera/IPS Sigmedical Mosquera</option>
                                <!--<option>Bogotá Central/Unimsalud</option>-->
                                <option>Barrancabermeja/RVG IPS</option>
                                <!--<option>Bogotá Sur/Unimos Salud</option>-->
                                <option>Bucaramanga/IPS Prosynergo SAS</option>
                                <option>Cúcuta/Progresando en Salud IPS</option>
                                <option>Tunja/Carvajal Laboratorios IPS SAS</option>
                                <option disabled></option>
                                <option style="font-family:verdanab!important" disabled>Zona eje Cafetero</option>
                                <option>La Ceja/IPS Corriente Vital</option>
                                <option>Armenia/PROENSO</option>
                                <option>Ibagué/Servir SAS</option>
                                <!--<option>La Dorada/IPS Fisiohealth</option>-->
                                <option>Neiva/IPS Centro de Diagnóstico Ocupacional</option>
                                <!--<option>Manizales/UNIRSALUD</option>-->
                                <option>Pereira/Previsión Ocupacional SAS</option>
                                <option>Pereira/Proteccion Integral IPS</option>
                                <option>Popayan/Salud Ocupacional</option>
                                <option>Puerto Berrío/IPS Salud Integral Preventiva SAS</option>
                                <option disabled></option>
                            </select>
                        </div>  
                    </div> 
                    <div id="notificacion"><br><button type="button" class="close" id="btn_notificacion" ><span style=" font-size:22px;margin-right:1em" class="fa fa-times"></button><br><br><p id="notificacion1" style="font-family:verdanab;fons-size:16px"></p></div>
                </div>
                <p  style="text-align:left;margin-left:2em;margin-top:1em!important;color:#453969;font-family:verdanab"><br><span style="color:#ffffff!important">:</span><br>Fecha:</p><input type="date" class="new-todo" id="Fecha" placeholder="De clic aquí para seleccionar una fecha..." >
                <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Nombres:</p><input class="new-todo" id="Nombre" placeholder="Escriba aquí...">
                <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Apellidos:</p><input class="new-todo" id="Apellidos" placeholder="Escriba aquí..." >
                <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo de documento:</p><select class="new-todo negro" id="Tipo" style='color:#999999;font-size:16px!important' oninput='style.color="black"' >
                    <option value="" style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                    <option>Cédula de ciudadanía</option>
                    <option>Cédula de extranjería</option>
                    <option>Pasaporte</option>
                    <option>Permiso temporal de trabajo</option>
                </select>
                <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Número de documento:</p><input class="new-todo" id="Documento" placeholder="ejemplo: 756985632" >
                <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Cargo para examen ocupacional:</p><input class="new-todo" id="Cargo" placeholder="Escriba aquí..." >
                <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Empresa:</p><select class="new-todo negro" id="Empresa00" style='color:#999999;font-size:16px!important' oninput='style.color="black"' >
                    <option></option>
                </select>
                <p type="email"  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Correo electrónico:</p><input class="new-todo" id="Email" placeholder="ejemplo: mi_correo@gmail.com" >
                <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Número Celular: <span style="font-family:verdana;color:#1c752a"> (opcional para envío de información por WhatsApp)</span></p><input class="new-todo" id="Celular" placeholder="ejemplo: 3043698547" required>
                <p type="email"  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Correo electrónico de la empresa:</p><input class="new-todo" id="Email2" placeholder="ejemplo: correo_empresa@gmail.com" >
                <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo de exámen:</p><select class="new-todo negro" id="Examen" style='color:#999999;font-size:16px!important' oninput='style.color="black"' onChange="departamento(this.form)" name="Departamento" required>
                    <option value="" style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                    <option>Ingreso</option>
                    <option>Egreso</option>
                    <option>Periódico</option>
                    <option>Laboratorio</option>
                    <option>Vacunación</option>
                </select>
                <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo específico de exámen:</p><select class="new-todo negro" id="Especifico" style='color:#999999;font-size:16px!important' oninput='style.color="black"' name="Ciudad" required>
                    <option value="" style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                    <option></option>
                </select>
                <p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Observaciones:</p><textarea class="new-todo note" id="Observaciones" style='color:#000000;font-size:16px!important' placeholder="Escriba aquí..."></textarea>
               <p class="col-md-6 col-md-offset-3"><button href="#citas" id="boton_citas" type="submit" name="enviar" class="btn btn btn-default btn-block scroll" style="font-size:14px!important;height:35px;line-height:1em">Enviar</button></p><br><br><br>
            </form>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal2" class="modal" data-easein="flash" data-backdrop="static"> 
    <div class="modal-dialog modal-title" style="background:#ffffff">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" style="text-align:center;font-size:14px;">
                <p style="display:none" id="id_usuario"></p>
                <p style="color:#666666;font-family:verdana;letter-spacing:0.4px">¿Deseas eliminar a <span id="nombre_usuario" style="color:#333333;font-family:verdanab"></span> <span id="apellido_usuario" style="color:#333333;font-family:verdanab"></span> del registro?</p>
                <p id="boton-delete"><button type"submit" data-dismiss="modal" aria-hidden="true" class="delete2">Eliminar</button><br></p>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div> 
<div id="costumModal3" class="modal fullscreen-modal" data-easein="flash" data-backdrop="static"> 
    <div class="modal-dialog modal-lg" style="background:#ffffff">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" style="text-align:center;font-size:14px;min-height:50em!important">
                <h3 style="color:#453969">CITAS DEL DÍA</h3>
                <h4 align="center" style="line-height:1em;font-family:Narrow;color:#e7744f;letter-spacing:2px;margin-top:-0.3em"><?php echo $dia ?> de <?php echo $mes ?> del <?php echo $year ?></h4><br>
                <h4 style="text-align:right;line-height:1em;font-family:Narrow;letter-spacing:2px;margin-top:-0.3em"><span>Número de citas:</span> <span style="font-family:verdanab;color:#e7744f" id="contador"></span></h4>
                <table id="tabla_dia" class="table table-sm" align="center" style="width:100%">
                    <thead>
                        <tr>
                            <th align="center">IPS</th>
                            <th align="center">Fecha de agendamiento</th>
                            <th align="center" style="width:50%!important">Tipo de docum.</th>
                            <th align="center">N° del documento</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Cargo</th>
                            <th>Tipo de examen<br>
                            <th>Fecha de la cita</th>
                            <th style="width:200%!important">Observaciones</th>
                            <th>Empresa</th>
                        </tr>
                    </thead> 
                    <tbody style="border:0!important" id="tasks3" align="center"></tbody>
            </table>
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
        
<div id="costumModal5" class="modal fullscreen-modal" data-easein="slideRightIn" data-backdrop="static" style="overflow-y: scroll!important;"> 
    <div class="modal-dialog modal-dialog" align="justify" style="border-radius:0px;background-color:transparent">
        <div id="popup14" class="popup" style="height:35em!important;position:absolute!important;top:0;z-index:9999">
            <div style="text-align:right"><button type="button" class="popup_delete14" style="padding-top:0em;padding-right:0.5em"><span style=" font-size:22px!important" class="fa fa-times"></button></div>
            <div class="modal-body" style="htext-align:center">
                <div class="row">
                    <form id="editar_cliente">
                        <div class="col-md-12">
                            <p style="font-family:narrow;font-size:24px;letter-spacing:0.5px;text-align:center;margin:0;color:#453969">Editar Lista de Empresas</p><br>
                            <p id="razon" style="font-family:verdanab;font-size:20px;letter-spacing:0.5px;text-align:center;margin:0;color:#666666"></p><br>
                            <input type="hidden" id="id_P_e"></input>
                            <p style="font-family:verdanabi;text-align:left;padding-left:2em">Correo electrónico:</p>
                            <p class="clientes"><input type="text" class="note" id="email_cliente" style="width:100%;border-radius:0;font-family:Verdana!important"/></input></p> 
                            <p style="font-family:verdanabi;text-align:left;padding-left:2em">Código:</p>
                            <p class="clientes"><input type="text" class="note" id="codigo_cliente" style="width:100%;border-radius:0;font-family:Verdana!important"/></input></p> 
                            <div style="float:right"><input id="boton_cliente" type="submit" class="btn btn btn-default btn-block" style="width:12em"/></div>
                        </div>   
                    </form>  
                    <input id="boton_cliente2" type="submit" class="btn btn btn-default btn-block" style="width:12em;display:none"/>
                </div>    
            </div>   
        </div>
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
        <div class="modal-header">
            <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
        </div>
        <div class="modal-body" style="text-align:center;padding:3em">
        <p style="font-family:verdanab;font-size:22px">LISTA DE EMPRESAS</p><br>
        <div id="envio_clientes" style="font-family:verdanab;font-size:18px;color:#cc0000"><p>¡Se creó un nuevo cliente y el mensaje fué enviado con éxito!</p></p><br></div>
        <table>
            <tr>
                <td><span class="col-22" ><label id="label" class="fa fa-search"></label><input name="search2" id="search2" type="search2" placeholder="Palabra clave..." ></input><span class="focus-border"></span></td>
                <td style="border-color:#ffffff;padding:0;color:#000000"><button id="btn2" align="center" style="font-size:20px;color:#f58634" class="fa fa-times" data-title="Quitar filtro" onClick="quitarfiltro2()"></button></td>
                <td><button class="nuevo2" id="export_xlsx2" href="">Plantilla .xlsx</button></td>
                <form method="post" id="import_excel_form2" enctype="multipart/form-data">
                    <td><input type="submit" name="import" id="import" class="btn nuevo2" style="width:10em" value="Importar" /></td>
                    <td style="height:auto!important"><input type="file" name="import_excel" name="files1" id="file-8" class="inputfile inputfile-8" data-multiple-caption="{count} archivos seleccionados"/>    
                        <label for="file-8">
                        <span class="iborrainputfile"></span>
                        <strong>Archivo.xlsx</strong>
                        </label>
                    </td>
                </form>
                <td><td><button class="nuevo nueva_empresa" id="rnuevo"  data-toggle="modal" style="background:transparent!important">Nueva Empresa</button></td></td>
            </tr>
        </table>
        <div id="popup0" class="popup" style="height:12em">
            <p></p><button type="button" class="popup_delete" style="float:right;padding:0.3em"><span style=" font-size:22px!important" class="fa fa-times"></button></p><br>
            <p style="text-align:center!important;color:#453969;font-family:verdanab;font-size:15px" id="message0"></p>
        </div>
         <div id="popup_0" class="popup" style="height:12em">
            <button type="button" class="popup_delete" style="float:right;padding:0.3em"><span style=" font-size:22px!important" class="fa fa-times"></button><br>
            <p style="display:none" id="id_empresa"></p>
            <p style="color:#990000;font-family:verdanab;letter-spacing:0.4px;text-align:center;font-size:14px">¿Deseas eliminar a <span id="Razon" style="color:#333333;font-family:verdanab"></span> del registro?</p>
            <p id="boton-delete"><button type"submit" class="delete3 popup_delete">Eliminar</button><br></p>
        </div>
        <table class="table2"><br>
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Empresa</th>
                    <th>Sector económico</th>
                    <th>Persona a cargo</th>
                    <th>Correo</th>
                    <th>Clave</th>
                    <th>Codigo</th>
                    <th>Activo</th>
                    <th id="borderout2"></th>
                    <th id="borderout2"></th>
                </tr>
            </thead>      
            <tbody style="border:0!important;font-family:verdana;font-size:14px;width:100%!important" id="tasks4" align="center"></tbody>
            <tbody style="border:0!important;font-family:verdana;font-size:14px;width:100%!important" id="tasks5" align="center"></tbody>
        </table>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div></div>
<div id="costumModal17" class="modal" data-easein="slideRightIn" data-backdrop="static"> 
    <div class="modal-dialog modal-title" align="justify" style="border-radius:0px;background-color:#ffffff">
       <div class="modal-header">
            <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
        </div>
        <div class="modal-body" style="text-align:center">
            <p style="font-family:verdanab;font-size:18px;color:#000000">CREAR NOTIFICACIÓN</p><br>
            <textarea class="note"  id="agenda_titulo" laceholder="" style="font-size:15px;background:#ffffff;width:100%;text-align:center" rows="2" ></textarea>
            <textarea class="note"  id="agenda_text" laceholder="" style="font-size:15px;background:#ffffff;width:100%" rows="2" ></textarea>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div>
<div id="costumModal19" class="modal" data-easein="flash" data-backdrop="static"> 
    <div class="modal-dialog modal-title" style="background:#ffffff">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body todoapp" style="text-align:center;font-size:14px;">
                <h3 style="color:#453969">NUEVA EMPRESA</h3><br>
                <form role="form" id="form_empresas" name="form_empresas" onsubmit="return marcado();">
                <p  style="text-align:left;margin-left:2em;color:#453969;font-family:verdanab">Usuario:</p><p style="margin-top:-1em"><input class="new-todo" id="Usuario"  placeholder=". . ." ></p>
                <p  style="text-align:left;margin-left:2em;color:#453969;font-family:verdanab">Empresa:</p><p style="margin-top:-1em"><input class="new-todo" id="Empresa" placeholder=". . ." ></p>
                <p  style="text-align:left;margin-left:2em;color:#453969;font-family:verdanab">Actividad económica de la empresa:</p>
                <p style="margin-top:-1em"><input type="text" class="new-todo" id="codigoInput" placeholder="Ej: 0111 o 6209..." autocomplete="off"></p>
                <ul id="listaSugerencias" style="text-align:left;color:#000000"></ul><br>
                <p  style="text-align:left;margin-left:2em;color:#453969;font-family:verdanab">Persona a cargo:</p><p style="margin-top:-1em"><input class="new-todo" id="Persona" placeholder=". . ." ></p>
                <p  style="text-align:left;margin-left:2em;color:#453969;font-family:verdanab">Correo:</p><p style="margin-top:-1em"><input class="new-todo" id="Correo" placeholder=". . ." ></p>
                <p class="col-md-4 col-md-offset-4"><button href="#citas" id="boton_empresas" type="submit" name="enviar" class="btn btn btn-default btn-block scroll" style="font-size:14px!important;height:35px;line-height:1em">Enviar</button></p><br><br><br>
                </form>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal10" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <p style="font-family:narrow;font-size:24px;letter-spacing:0.5px;text-align:center;margin:0;color:#453969">NOTIFICACIONES PROGRAMADAS A CLIENTES</p><br>
                <form id="form_recursos">
                    <div class="col-md-12">
                        <p style="font-family:verdanab;text-align:left">Mensaje:</p>
                        <p class="clientes"><textarea class="new-todo note" id="Titulo" placeholder=". . ."  style="border-radius:0;font-family:verdana"/></textarea></p> 
                        <input title="Adjuntar" type="file" name="archivo" id="file-838" class="inputfile inputfile-10" data-multiple-caption="{count} archivos seleccionados" />
                        <label for="file-838">
                        <span class="iborrainputfile"></span><br>
                        <strong style="margin-left:-10em;margin-bottom:10px;background:trasparent!important" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="fa fa-paperclip"></span><span class="etiqueta2" style="font-size:18px!important;font-family:verdanab">&nbsp&nbspAdjuntar</span>&nbsp&nbsp&nbsp&nbsp</strong><br>
                        <p style="border:0!important" id="imagen" align="center"></p>
                    </div>
                    <p><input id="boton_recursos" type="submit" class="btn btn btn-default btn-block" style="width:12em"/></p>
                </form>    
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
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
    $(document).on('change', '#Especifico', (e) => {
    	var Especifico = $('#Especifico').val();
    	if(Especifico == 'Ingreso para alturas y espacios confinados') {
    	    $('#popup1').slideDown(1);
    	}
    	if(Especifico == 'Ingreso para conductores') {
    	    $('#popup2').slideDown(1);
    	}
    	if(Especifico == 'Ingreso manipulador de alimentos') {
    	    $('#popup3').slideDown(1);
    	}
    	if(Especifico == 'Ingreso seguridad vial y énfasis en alturas') {
    	    $('#popup4').slideDown(1);
    	}
    	if(Especifico == 'Ingreso con énfasis en alturas') {
    	    $('#popup5').slideDown(1);
    	}
    	if(Especifico == 'Periódico seguridad vial y énfasis en alturas') {
    	    $('#popup6').slideDown(1);
    	}
    	if(Especifico == 'Periódico de alturas') {
    	    $('#popup7').slideDown(1);
    	}
    	if(Especifico == 'Periódico manipulador de alimentos') {
    	    $('#popup8').slideDown(1);
    	}
    	if(Especifico == 'Periódico para conductores') {
    	    $('#popup9').slideDown(1);
    	}
    	if(Especifico == 'Postincapacidad') {
    	    $('#popup10').slideDown(1);
    	}
    	if(Especifico == 'Reintegro laboral') {
    	    $('#popup11').slideDown(1);
    	}
    	if(Especifico == 'Seguimiento, recomendaciones y/o restricciones médicas') {
    	    $('#popup12').slideDown(1);
    	}
    	if(Especifico == 'Periódico para alturas y espacios confinados') {
    	    $('#popup13').slideDown(1);
    	}
    });
    $(document).on('click', '.popup_delete', (e) => {
        $('#popup0').slideUp(1);
        $('#popup_0').slideUp(1);
    	$('#popup1').slideUp(1);
    	$('#popup2').slideUp(1);
    	$('#popup3').slideUp(1);
    	$('#popup4').slideUp(1);
    	$('#popup5').slideUp(1);
    	$('#popup6').slideUp(1);
    	$('#popup7').slideUp(1);
    	$('#popup8').slideUp(1);
    	$('#popup9').slideUp(1);
    	$('#popup10').slideUp(1);
    	$('#popup11').slideUp(1);
    	$('#popup12').slideUp(1);
    	$('#popup13').slideUp(1);
    	$('#popup14').slideUp(1);
    });
    $(document).on('click', '#export_xlsx', (e) => {
       location.href="../phpspreadsheet/plantilla_agenda1_1.xlsx";
    });
    $(document).on('click', '#export_xlsx2', (e) => {
       location.href="../phpspreadsheet/plantilla2_agenda.xlsx";
    });
    $(document).on('change', '.Sede_A', (e) => {
        $('#Sede_A').hide();
        $('#Red_A').show();
        var Sede = $('#Sede').val();
        $('#notificacion1').html(Sede);
        $('#notificacion').slideDown();
        $('#seleccion_empresa').slideUp();
    })
     $(document).on('change', '.Red_A', (e) => {
        $('#Sede_A').hide();
        $('#Red_A').show();
        var Red = $('#Red').val();
        $('#notificacion1').html(Red);
        $('#notificacion').slideDown();
        $('#seleccion_empresa').slideUp();
    })
    $("#btn_notificacion").click(function (event) {
        $('#Sede_A').show();
        $('#Red_A').hide();
        $('#notificacion').slideUp();
        $('#seleccion_empresa').slideDown();
        document.getElementById("form_clientes").reset();
    })
   // autosize(document.getElementsByClassName("note"));
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
        //$("#costumModal5").modal("show");
        $('#envio_clientes').slideUp(1);
        $('#popup0').slideUp(1);
        $('#popup_0').slideUp(1);
        $('#popup1').slideUp(1);
        $('#popup2').slideUp(1);
        $('#popup3').slideUp(1);
        $('#popup4').slideUp(1);
        $('#popup5').slideUp(1);
        $('#popup6').slideUp(1);
        $('#popup7').slideUp(1);
        $('#popup8').slideUp(1);
        $('#popup9').slideUp(1);
        $('#popup10').slideUp(1);
        $('#popup11').slideUp(1);
        $('#popup12').slideUp(1);
        //$('#popup13').slideUp(1);
        $('#popup14').slideUp(1);
        $('#notificacion').slideUp(1);
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
            case 'CAPACITACIONES':
                location.href="../capacitaciones";
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
        fetchTasks7();
        function fetchTasks7() {
            $.ajax({
                type: "post",
                url: "../select_agendamiento.php",
                success: function(response) {
                    const tasks0 = JSON.parse(response);
                    tasks0.push({"Razon":"De clic aquí para seleccionar una opción..."});
                    const tasks = tasks0.reverse();
                    let template = '';
                    tasks.forEach(task => {
                        template += `<option style="font-size:14px!important">${task.Razon}</option><br>`
                    });
                    $('#Empresa00').html(template);
                }
            });
        }
        
        
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
    var municipios = new Array()
    municipios [1] = ["Seleccione una opción","- Ingreso con énfasis osteomuscular","- Ingreso con énfasis osteomuscular, visiometría tamíz","- Ingreso con énfasis osteomuscular, audiometría tamíz","- Ingreso con énfasis osteomuscular, visiometría tamíz, audiometría tamíz","Ingreso para alturas y espacios confinados","Ingreso para conductores","Ingreso manipulador de alimentos","Ingreso seguridad vial y énfasis en alturas","Ingreso con énfasis en alturas","Ingreso - Telemedicina"]
    municipios [2] = ["Seleccione una opción","- Egreso con énfasis osteomuscular","- Egreso con énfasis osteomuscular, visiometría tamíz","- Egreso con énfasis osteomuscular, audiometría tamíz","- Egreso con énfasis osteomuscular, visiometría tamíz, audiometría tamíz","Egreso - Telemedicina"]
    municipios [3] = ["Seleccione una opción","- Periódico con énfasis osteomuscular","- Periódico con énfasis osteomuscular, visiometría tamíz","- Periódico con énfasis osteomuscular, audiometría tamíz","- Periódico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz","Periódico seguridad vial y énfasis en alturas","Periódico para alturas y espacios confinados","Periódico de alturas","Periódico manipulador de alimentos","Periódico para conductores","Postincapacidad","Reintegro laboral","Seguimiento, recomendaciones y/o restricciones médicas","Periódico - Telemedicina"]
    municipios [4] = ["Seleccione una opción","Prueba antígeno Covid hisopado","Psicosensométrico","Prueba de sustancias Panel 2","Prueba de sustancias Panel 5","Prueba de sustancias Panel 10","Prueba teórico práctica","Audiometría clínica","Espirometría","Coprológico","Audiometría tamíz","Optometría"]
    municipios [5] = ["Seleccione una opción","Covid 19","Fiebre amarilla","Hepatitis B","Influenza","Tetano"]
    function departamento(formu) {
        var dr = formu.Departamento.selectedIndex
        formu.Ciudad.length = municipios[dr].length
        for (i = 0; i < formu.Ciudad.length; i++)
        {
            formu.Ciudad.options[i].text = municipios[dr][i]
    }};
    function quitarfiltro(){
        $('#tasks2').hide();
        $('#tasks').show();
        document.getElementById("search").value = "";
        document.getElementById("search2").value = "";
    };
    function quitarfiltro2(){
        $('#tasks5').hide();
        $('#tasks4').show();
        document.getElementById("search").value = "";
        document.getElementById("search2").value = "";
    };
    $(document).on('change', '.Examen_A', (e) => {
        $('.Especifico_A').hide();
        $('.Especifico').show();
        $('#Especifico_A').hide();
        $('#Especifico').show();
    })
    $(document).ready(function () {
        fetchTasks2();
        fetchTasks3();
        fetchTasks4();
        fetchTasks5();
        $("#aliados").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                aliados:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
        $("#vistos").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                vistos:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
        $("#checkbox1").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Enero',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox2").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Febrero',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
        $("#checkbox3").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Marzo',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox4").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Abril',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox5").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Mayo',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox6").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Junio',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox7").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Julio',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox8").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Agosto',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox9").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Septiembre',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox10").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Octubre',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox11").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Noviembre',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox12").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'Diciembre',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox13").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N1',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
        $("#checkbox14").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N2',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
        $("#checkbox15").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N3',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
        $("#checkbox16").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N4',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
        $("#checkbox17").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N5',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox18").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N6',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox19").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N7',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox20").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N8',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox21").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N9',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox22").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N10',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox23").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N11',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox24").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N12',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox25").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N13',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox26").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N14',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox27").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N15',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox28").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N16',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox29").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N17',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox30").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N18',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox31").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N19',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox32").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N20',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox33").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N21',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox34").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N22',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox35").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N23',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox36").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N24',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox37").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N25',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox38").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N26',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox39").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N27',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox40").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N28',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox41").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N29',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox42").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N30',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox43").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'N31',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox44").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'A2021',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox45").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'A2022',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox46").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'A2023',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox47").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'A2024',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox48").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'A2025',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox49").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'A2026',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox50").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'A2027',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
         $("#checkbox51").on('change', function() {
            var valor = '0';
           	if ($(this).is(':checked')) {
                var valor = $(this).val(); 
            } 
            const postData = {
                mes:'A2028',
                valor:valor,
            };
            const url = '../filtro_agenda.inc.php';
            $.post(url,  postData, (response) => {
                fetchTasks2();
            });   
        });
        $('#import_excel_form').on('submit', function(event){
        var id = '<?php echo $id ?>';   
        var formData = new FormData();
        var file = $('#file-7')[0].files[0];
        formData.append("file", file);
        formData.append("id", id);  
        event.preventDefault();
            $.ajax({
                url:"../PHPMailer/importar_multiple.php",
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
                    $("#costumModal14").modal("show");
                    $('#message').html(mensaje);
                    $('#import').attr('disabled', false);
                    $('#import').val('Importar');
                    fetchTasks2();
                    fetchTasks3();
                    fetchTasks6();
                }
            })
        });
        $('#form_clientes').submit(e => {
            e.preventDefault();
            Sede=$('#Sede').val();
            Red=$('#Red').val();
            if(Sede != '') {
                var cliente = Sede;
            } 
            if(Red != '') {
                var cliente = Red;
            }
            var empresa = '<?php echo $Razon ?>';
            const postData = {
                Cliente:cliente,
                Fecha:$('#Fecha').val(),
                Nombre:$('#Nombre').val(),
                Apellidos:$('#Apellidos').val(),
                Tipo:$('#Tipo').val(),
                Documento:$('#Documento').val(),
                Cargo:$('#Cargo').val(),
                Email:$('#Email').val(),
                Celular:$('#Celular').val(),
                Email2:$('#Email2').val(),
                Examen:$('#Examen').val(),
                Especifico:$('#Especifico').val(),
                Empresa:$('#Empresa00').val(),
                Observaciones:$('#Observaciones').val(),
            };
            const url = '../PHPMailer/importar_individual.php';
            $.post(url,  postData, (response) => {
                $("#costumModal1").modal("hide");
                document.getElementById("form_clientes").reset();
                fetchTasks2();
                fetchTasks3();
                fetchTasks6();
            });
        });
        $(document).on('click', '.task-editar2', (e) => {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_usuario = $(element).attr('taskId');
            $("#costumModal7").modal("show");
             $.ajax({
                type: "post",
                url: "../datosagenda.inc.php",
                data: "id_usuario=" + id_usuario,
                	befforesed: function(){
    			},
                success: function (response) {
                    const tasks = JSON.parse(response);
                    let id= '';
                    let Nombre= '';
                    let Apellidos= '';
                    let Fecha= '';
                    tasks.forEach(task => {
                        id += `${task.id}`,
                        Nombre += `${task.Nombre}`,
                        Apellidos += `${task.Apellidos}`,
                        Fecha += `${task.Fecha}`
                    });
                    document.getElementById("id_A").value = (id);
                    $('#Nombre_A').html(Nombre);
                    $('#Apellidos_A').html(Apellidos);
                    document.getElementById("Fecha_A").value = (Fecha);
                }      
            });
            $("#boton_citas2").click(function (event) {
                event.preventDefault();
                var id_A = $('#id_A').val();
                var Fecha_A = $('#Fecha_A').val();
                var formData = new FormData();
                formData.append('id_A',id_A);
                formData.append('Fecha_A',Fecha_A);
                $.ajax({
                    url: '../editaragenda.inc.php',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $("#costumModal7").modal("hide");
                        fetchTasks2();
                        fetchTasks3();
                    }
                });
            }); 
        });
        $(document).on('click', '.task-delete2', (e) => {
    	    const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_usuario = $(element).attr('taskId');
            const nombre_usuario = $(element).attr('taskId2');
            const apellido_usuario = $(element).attr('taskId3');
            $("#costumModal2").modal("show");
            $('#id_usuario').html(id_usuario);
            $('#nombre_usuario').html(nombre_usuario);
            $('#apellido_usuario').html(apellido_usuario);
            $(".delete2").on('click', function(event) { 
                id_usuario2 = document.getElementById("id_usuario").innerHTML;
                $.ajax({
                    type: "post",
                    url: "../eliminar_cita.inc.php",
                    data: "id_usuario=" + id_usuario2,
                    success: function(response) {
                        fetchTasks2();
                        fetchTasks3();
                        fetchTasks6();
                    }
                });
            });
        }); 
        $('#search').keyup(function() {
        if($('#search').val()) {
            $('#tasks').hide();
            $('#tasks2').show();
            let search = $('#search').val();
            $.ajax({
                url: '../search6.php',
                data:"search=" + search,
                cache: false,
                type: 'POST',
                success: function (response) {
                if(!response.error) {
                    let tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `<tr taskId="${task.id}" taskId0="${task.Fecha}" taskId1="${task.Cedula}" taskId2="${task.Nombre}" taskId3="${task.Apellidos}" taskId4="${task.Cargo}" taskId5="${task.Celular}" taskId6="${task.Empresa}" taskId7="${task.Examen}" taskId8="${task.Especifico}" taskId9="${task.Descripcion}" taskId10="${task.Observaciones}" taskId11="${task.Observaciones2}">
                                    <td id="borderout2" ><button class="task-editar2" data-title="Editar la fecha de la cita"><span class="fa fa-pencil"></span></button></td>
                                    <td id="borderout2" ><button class="task-delete2" data-title="Eliminar el registro"><span class="fa fa-trash"></span></button></td>
                                    <td id="borderout2" ><button class="task-pdf" data-title="Orden de servicio"><span class="fa fa-file-pdf-o"></span></button></td>
                                    <td id="td" style="font-size:11px!important;text-align:center">${task.numeracion}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left;color:${task.Color}">${task.Ips}</td>
                                    <td id="td" style="font-size:11px!important;text-align:center">${task.Fecha_registro}</td>
                                    <td id="td" style="font-size:11px!important;text-align:center">${task.Tipo}</td>
                                    <td id="td" style="font-size:11px!important;font-family:verdanab;text-align:center">${task.Cedula}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left;color:${task.Color2};font-family:${task.style}">${task.Nombre}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left">${task.Apellidos}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left">${task.Cargo}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left">${task.Examen}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left">${task.Especifico}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left">${task.Descripcion}</td>
                                    <td id="td" style="font-size:11px!important;font-family:verdanab;text-align:center">${task.Fecha}</td>
                                    <td id="td" style="font-size:11px!important;text-align:lef">${task.Observaciones}</td>
                                    <td id="td" style="font-size:11px!important;text-align:lef">${task.Observaciones2}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left;font-family:verdanab;color:#c35709">${task.Empresa}</td>
                                    <td id="td" style="font-size:11px!important;text-align:lef">${task.Responsable}</td>
                                   </tr> `
                    });
                    $('#tasks2').html(template);
                }}    
            })} 
        });
        var filas = 50;
        $(document).on('change', '#filas', (e) => {
            filas = $('#filas').val();
            fetchTasks2()
           
        })
         $(document).on('click', '.task-pdf', (e) => {
    	    const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_usuario = $(element).attr('taskId');
            const Fecha = $(element).attr('taskId0');
            const Documento = $(element).attr('taskId1');
            const Nombre = $(element).attr('taskId2');
            const Apellidos = $(element).attr('taskId3');
            const Cargo = $(element).attr('taskId4');
            const Celular = $(element).attr('taskId5');
            const Empresa = $(element).attr('taskId6');
            const Examen = $(element).attr('taskId7');
            const Especifico = $(element).attr('taskId8');
            const Descripcion = $(element).attr('taskId9');
            const Observaciones = $(element).attr('taskId10');
            const Observaciones2  = $(element).attr('taskId11');

            var doc = new jsPDF('p', 'pt', 'letter');
            
            var img = new Image()
            img.src = '../imagine/membrete12.jpg'
            doc.addImage(img, 'png', 0, 0, 615, 792)
            
            doc.setFont("helvetica");
            doc.setFontSize(11);
            doc.text(70,120, "Cordial saludo Sres./as. <?php echo $Ips ?>:"                                                                                                                                                                                                                                                                                                                                                                                            , {maxWidth: 450,align:'justify', lineHeightFactor: 1.5}); 
            doc.text(70,150, "Solicito amablemente la atención el día "+Fecha+" al siguiente usuario, para la realización de los examenes médicos ocupacionales descritos a continuación:                                                                                                                                                                                                                                                                                                                     ", {maxWidth: 450,align:'justify', lineHeightFactor: 1.5}); 
            doc.setFontType("bold");
            doc.setTextColor(102, 0, 102);
            doc.text(70,195, "CEDISALUD IPS ALIANZA RED NACIONAL                                                                                                                                                                                                                                                                                                                                                                                                                              ", {maxWidth: 450,align:'justify', lineHeightFactor: 1.5}); 
            var columns = ['',''];
            var data = [['Nombre y apellidos:',Nombre+' '+Apellidos],
            ['Documento:',Documento],
            ['Cargo:',Cargo],
            ['Número celular:',Celular],
            ['Empresa a certificar:',Empresa],
            ['Tipo de examen:',Examen],
            ['Examen específico:',Especifico],
            ['Examenes a realizar:',Descripcion],
            ['Observaciones:',Observaciones],
            ['Observaciones especiales:',Observaciones2]];
            doc.autoTable(columns,data, {margin:{ top: 190 , left: 65},  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', valign:'middle', textColor:[255,255,255], lineWidth:0, lineColor:[79, 84, 99], fillColor:false}, 
            columnStyles: {0: {fontSize:10, fontStyle:'bold', columnWidth:130, halign: 'left', textColor:[102, 0, 102]}, 1: {fontSize:10, fontStyle:'normal', columnWidth:400, halign: 'left'}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', lineColor:[0,0,0], lineWidth:0, fillColor:false}});
            doc.setFontSize(10);
            doc.setFontType("bold");
            doc.text(70,550, "NOTAS:"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              , {maxWidth: 450,align:'justify', lineHeightFactor: 1.5}); 
            doc.setFontType("normal");
            doc.text(70,570, "Si en este examen hay una SOLICITUD DE LABORATORIO con el nombre alcohol metílico; por favor, realizar SEROLOGIA II, PRUEBA MARIPOSA, GRAVITEX, como se tenga contemplado en su IPS. No se autoriza un examen diferente para este ÍTEM en especifico."                                                                                                                                                                                                                                                                                                                     , {maxWidth: 460,align:'justify', lineHeightFactor: 1.5}); 
            doc.text(70,625, "Si las pruebas de sustancias están dentro de los examenes solicitados, por favor realizarla de primera.  En caso de ser positivo, informar por chat creado para envío de información - no realizar examenes hasta nueva orden."                                                                                                                                                                                                                                                                                                                                                                                               , {maxWidth: 460,align:'justify', lineHeightFactor: 1.5}); 
            doc.setFontType("bold");
            doc.text(70,680, "INFORMACIÓN:"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       , {maxWidth: 450,align:'justify', lineHeightFactor: 1.5}); 
            doc.setFontType("normal");
            doc.text(70,700, "Las pruebas denominadas MD2-MD5–MD10 corresponden a las pruebas de sustancias con 2-5-10 metabólicos de análisis."                                                                                                                                                                                                                                                                                                                                                               , {maxWidth: 460,align:'justify', lineHeightFactor: 1.5}); 

            doc.save('Orden_'+Nombre+'_'+Apellidos+'.pdf');
            if (doc.save) {
               $(".loading").fadeOut("slow");
            }

        }); 
        fetchTasks2()
        function fetchTasks2() {
            $.ajax({
                type: "post",
                url: "../citas.inc.php",
                data:"filas=" + filas,
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `<tr taskId="${task.id}" taskId0="${task.Fecha}" taskId1="${task.Cedula}" taskId2="${task.Nombre}" taskId3="${task.Apellidos}" taskId4="${task.Cargo}" taskId5="${task.Celular}" taskId6="${task.Empresa}" taskId7="${task.Examen}" taskId8="${task.Especifico}" taskId9="${task.Descripcion}" taskId10="${task.Observaciones}" taskId11="${task.Observaciones2}">
                                    <td id="borderout2" ><button class="task-editar2" data-title="Editar la fecha de la cita"><span class="fa fa-pencil"></span></button></td>
                                    <td id="borderout2" ><button class="task-delete2" data-title="Eliminar el registro"><span class="fa fa-trash"></span></button></td>
                                    <td id="borderout2" ><button class="task-pdf" data-title="Orden de servicio"><span class="fa fa-file-pdf-o"></span></button></td>
                                    <td id="td" style="font-size:11px!important;text-align:center">${task.numeracion}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left;color:${task.Color}">${task.Ips}</td>
                                    <td id="td" style="font-size:11px!important;text-align:center">${task.Fecha_registro}</td>
                                    <td id="td" style="font-size:11px!important;text-align:center">${task.Tipo}</td>
                                    <td id="td" style="font-size:11px!important;font-family:verdanab;text-align:center">${task.Cedula}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left;color:${task.Color2};font-family:${task.style}">${task.Nombre}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left">${task.Apellidos}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left">${task.Cargo}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left">${task.Examen}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left">${task.Especifico}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left">${task.Descripcion}</td>
                                    <td id="td" style="font-size:11px!important;font-family:verdanab;text-align:center">${task.Fecha}</td>
                                    <td id="td" style="font-size:11px!important;text-align:lef">${task.Observaciones}</td>
                                    <td id="td" style="font-size:11px!important;text-align:lef">${task.Observaciones2}</td>
                                    <td id="td" style="font-size:11px!important;text-align:left;font-family:verdanab;color:#c35709">${task.Empresa}</td>
                                    <td id="td" style="font-size:11px!important;text-align:lef">${task.Responsable}</td>
                                   </tr> `
                    });
                    $('#tasks').html(template);
                }
            });
        }
        function fetchTasks3() {
            $.ajax({
                type: "post",
                url: "../citas2.inc.php",
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `<tr taskId="${task.id}" taskId2="${task.Nombre}" taskId3="${task.Apellidos}">
                                    <td id="td" style="text-align:left">${task.Ips}</td>
                                    <td id="td" style="text-align:center">${task.Fecha_registro}</td>
                                    <td id="td" style="text-align:center">${task.Tipo}</td>
                                    <td id="td" style="font-family:verdanab;text-align:center">${task.Cedula}</td>
                                    <td id="td" style="text-align:left">${task.Nombre}</td>
                                    <td id="td" style="text-align:left">${task.Apellidos}</td>
                                    <td id="td" style="text-align:left">${task.Cargo}</td>
                                    <td id="td" style="text-align:left">${task.Especifico}</td>
                                    <td id="td" style="font-family:verdanab;text-align:center">${task.Fecha}</td>
                                    <td id="td" style="text-align:left">${task.Observaciones}</td>
                                    <td id="td" style="text-align:left">${task.Empresa}</td>
                                   </tr> `
                    });
                    $('#tasks3').html(template);
                }
            });
        }

        $('#import_excel_form2').on('submit', function(event){
        var id = '<?php echo $id ?>';   
        var formData = new FormData();
        var file = $('#file-8')[0].files[0];
        formData.append("file", file);
        formData.append("id", id);  
        event.preventDefault();
            $.ajax({
                url:"../PHPMailer/importar_cliente.php",
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
                    $('#popup0').slideDown(1);
                    $('#message0').html(mensaje);
                    $('#import').attr('disabled', false);
                    $('#import').val('Importar');
                    fetchTasks4();
                }
            })
        });
        
        $(document).on('click', '.task-delete3', (e) => {
        	    const element = $(this)[0].activeElement.parentElement.parentElement;
                const id_empresa = $(element).attr('taskId');
                const Razon = $(element).attr('taskId2');
                $('#popup_0').slideDown(1);
                $('#id_empresa').html(id_empresa);
                $('#Razon').html(Razon);
                $(".delete3").on('click', function(event) { 
                    id_empresa2 = document.getElementById("id_empresa").innerHTML;
                    $.ajax({
                        type: "post",
                        url: "../eliminar_empresa_agenda.inc.php",
                        data: "id_empresa=" + id_empresa2,
                        success: function(response) {
                            $('#tasks5').hide();
                            $('#tasks4').show();
                            $('#popup_0').slideUp(1);
                        }
                    });
                });
        });
        $(document).on('click', '.task-envio', (e) => {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_empresa = $(element).attr('taskId');
            const postData = {
                id_send: id_empresa,
            };
            const url = '../PHPMailer/empresas_individual_envio.php';
            $.post(url, postData, (response) => {
            });
        }) 
        $(document).on('click', '.task-estado', (e) => {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_empresa = $(element).attr('taskId');
            const postData = {
                id_estado: id_empresa,
            };
            const url = '../empresas_individual_estado.php';
            $.post(url, postData, (response) => {
               fetchTasks4();
               
            });
        }) 
        $(document).on('click', '.task-editar4', (e) => {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id= $(element).attr('taskId');
            const razon= $(element).attr('taskId2');
    	    $('#popup14').slideDown(1);
    	   // $("#costumModal5").modal("hide");
    	    $('#razon').html(razon);
    	    $('#editar_cliente').submit(e => {
    	         e.preventDefault();
    	        var email_cliente = $('#email_cliente').val();
    	        var codigo_cliente = $('#codigo_cliente').val();
                var formData = new FormData();
                formData.append('id',id);
                formData.append('email_cliente',email_cliente);
                formData.append('codigo_cliente',codigo_cliente);
                $.ajax({
                    url: '../editar.inc.php',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                       // $("#costumModal5").modal("show");
                        fetchTasks4();
                        const boton = document.getElementById('boton_cliente2');
                        boton.click();
                    }
                });
    	    });    
        });
        $('#search2').keyup(function() {
            $('#tasks4').hide();
            $('#tasks5').show();
            
            $(document).on('click', '.task-estado', (e) => {
                fetchTasks10();
                fetchTasks4();
                //$('#tasks4').hide();
                //$('#tasks5').show();
            }) 
             $(document).on('click', '#boton_cliente2', (e) => {
                fetchTasks10();
                $('#popup14').slideUp(1);
            }) 
            fetchTasks10()
            function fetchTasks10() {
                let search2 = $('#search2').val();
            $.ajax({
                url: '../search8.php',
                data:"search=" + search2,
                cache: false,
                type: 'POST',
                success: function (response) {
                if(!response.error) {
                    let tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `<tr taskId="${task.id}" taskId2="${task.Nombre}" taskId3="${task.Apellidos}">
                                    <td id="td" style="text-align:left">${task.Usuario}</td>
                                    <td id="td" style="text-align:left;font-family:verdanab">${task.Razon}</td>
                                    <td id="td" style="text-align:left;font-family:verdanab">${task.Sector}</td>
                                    <td id="td" style="text-align:left;font-family:verdanab">${task.Nombre}</td>
                                    <td id="td" style="text-align:left">${task.Email}</td>
                                    <td id="td" style="text-align:left">${task.Clave}</td>
                                    <td id="td" style="text-align:left">${task.Codigo}</td>
                                    <td id="td" style="text-align:center">${task.Activo}</td>
                                    <td id="borderout2" ><button class="task-editar4" data-title="Editar la fecha de la cita"><span class="fa fa-pencil"></span></button></td>
                                    <td id="borderout2"><button class="task-delete3" title="Eliminar"><span class="fa fa-trash"></span></button></td>
                                    <td id="borderout2"><button class="task-envio" title="Email"><span class="fa fa-paper-plane"></span></button></td>
                                    <td id="borderout2"><button class="task-estado" title="Estado" style="color:${task.Color}"><span class="fa fa-star"></span></button></td>
                                   </tr> `
                    });
                    $('#tasks5').html(template);
                }}    
            })
            } 
        });
        $(document).on('click', '.popup_delete14', (e) => {
            $("#costumModal5").modal("show");
            $('#popup14').slideUp(1);
        });
        function fetchTasks4() {
            $.ajax({
                type: "post",
                url: "../citas3.inc.php",
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `<tr taskId="${task.id}" taskId2="${task.Razon}">
                                    <td id="td" style="text-align:left">${task.Usuario}</td>
                                    <td id="td" style="text-align:left;font-family:verdanab">${task.Razon}</td>
                                    <td id="td" style="text-align:left;font-family:verdanab">${task.Sector}</td>
                                    <td id="td" style="text-align:left;font-family:verdanab">${task.Nombre}</td>
                                    <td id="td" style="text-align:left">${task.Email}</td>
                                    <td id="td" style="text-align:left">${task.Clave}</td>
                                    <td id="td" style="text-align:left">${task.Codigo}</td>
                                    <td id="td" style="text-align:center">${task.Activo}</td>
                                    <td id="borderout2" ><button class="task-editar4" data-title="Editar la fecha de la cita"><span class="fa fa-pencil"></span></button></td>
                                    <td id="borderout2"><button class="task-delete3" title="Eliminar"><span class="fa fa-trash"></span></button></td>
                                    <td id="borderout2"><button class="task-envio" title="Email"><span class="fa fa-paper-plane"></span></button></td>
                                    <td id="borderout2"><button class="task-estado" title="Estado" style="color:${task.Color}"><span class="fa fa-star"></span></button></td>
                                   </tr> `
                    });
                    $('#tasks4').html(template);
                }
            });
        }
        
        $('#agenda_titulo').on('keyup', function() {
            var agenda_titulo = $('#agenda_titulo').val();
            $.ajax({
                type: "post",
                url: "../not_agenda.php",
                data: "agenda_titulo=" + agenda_titulo,
                success: function (response) {
                    fethTasks8();
                },   
            });
        }); 
        
        $('#agenda_text').on('keyup', function() {
            var notificaciones = $('#agenda_text').val();
            $.ajax({
                type: "post",
                url: "../not_agenda.php",
                data: "notificaciones=" + notificaciones,
                success: function (response) {
                    fethTasks8();
                },   
            });
        }); 
    
        fethTasks8();
        function fethTasks8() {
            $.ajax({
                type: "post",
                url: "../agenda_text.php",
                success: function(response) {
                    console.log(response)
                    const tasks = JSON.parse(response);
                    let text = '';
                    tasks.forEach(task => {
                        text += `${task.text}`
                    });
                    $('#agenda_text').html(text);
                }
            });
        };
        
        function fetchTasks5() {
            $.ajax({
                type: "post",
                url: "../consulta_agenda.inc.php",
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
                    let  N1 = '';
                    let  N2 = '';
                    let  N3 = '';
                    let  N4 = '';
                    let  N5 = '';
                    let  N6 = '';
                    let  N7 = '';
                    let  N8 = '';
                    let  N9 = '';
                    let  N10 = '';
                    let  N11 = '';
                    let  N12 = '';
                    let  N13 = '';
                    let  N14 = '';
                    let  N15 = '';
                    let  N16 = '';
                    let  N17 = '';
                    let  N18 = '';
                    let  N19 = '';
                    let  N20 = '';
                    let  N21 = '';
                    let  N22 = '';
                    let  N23 = '';
                    let  N24 = '';
                    let  N25 = '';
                    let  N26 = '';
                    let  N27 = '';
                    let  N28 = '';
                    let  N29 = '';
                    let  N30 = '';
                    let  N31 = '';
                    let  A2021 = '';
                    let  A2022 = '';
                    let  A2023 = '';
                    let  A2024 = '';
                    let  A2025 = '';
                    let  A2026 = '';
                    let  A2027 = '';
                    let  A2028 = '';
                    let  Aliados = '';
                    let  Vistos = '';
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
                        N1+= `${task.N1}`
                        N2+= `${task.N2}`
                        N3+= `${task.N3}`
                        N4+= `${task.N4}`
                        N5+= `${task.N5}`
                        N6+= `${task.N6}`
                        N7+= `${task.N7}`
                        N8+= `${task.N8}`
                        N9+= `${task.N9}`
                        N10+= `${task.N10}`
                        N11+= `${task.N11}`
                        N12+= `${task.N12}`
                        N13+= `${task.N13}`
                        N14+= `${task.N14}`
                        N15+= `${task.N15}`
                        N16+= `${task.N16}`
                        N17+= `${task.N17}`
                        N18+= `${task.N18}`
                        N19+= `${task.N19}`
                        N20+= `${task.N20}`
                        N21+= `${task.N21}`
                        N22+= `${task.N22}`
                        N23+= `${task.N23}`
                        N24+= `${task.N24}`
                        N25+= `${task.N25}`
                        N26+= `${task.N26}`
                        N27+= `${task.N27}`
                        N28+= `${task.N28}`
                        N29+= `${task.N29}`
                        N30+= `${task.N30}`
                        N31+= `${task.N31}`
                        A2021+= `${task.A2021}`
                        A2022+= `${task.A2022}`
                        A2023+= `${task.A2023}`
                        A2024+= `${task.A2024}`
                        A2025+= `${task.A2025}`
                        A2026+= `${task.A2026}`
                        A2027+= `${task.A2027}`
                        A2028+= `${task.A2028}`
                        Aliados+= `${task.Aliados}`
                        Vistos+= `${task.Vistos}`
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
                    document.querySelector("[name=N1][value='"+ N1 +"']").checked = true;
                    document.querySelector("[name=N2][value='"+ N2 +"']").checked = true;
                    document.querySelector("[name=N3][value='"+ N3 +"']").checked = true;
                    document.querySelector("[name=N4][value='"+ N4 +"']").checked = true;
                    document.querySelector("[name=N5][value='"+ N5 +"']").checked = true;
                    document.querySelector("[name=N6][value='"+ N6 +"']").checked = true;
                    document.querySelector("[name=N7][value='"+ N7 +"']").checked = true;
                    document.querySelector("[name=N8][value='"+ N8 +"']").checked = true;
                    document.querySelector("[name=N9][value='"+ N9 +"']").checked = true;
                    document.querySelector("[name=N10][value='"+ N10 +"']").checked = true;
                    document.querySelector("[name=N11][value='"+ N11 +"']").checked = true;
                    document.querySelector("[name=N12][value='"+ N12 +"']").checked = true;
                    document.querySelector("[name=N13][value='"+ N13 +"']").checked = true;
                    document.querySelector("[name=N14][value='"+ N14 +"']").checked = true;
                    document.querySelector("[name=N15][value='"+ N15 +"']").checked = true;
                    document.querySelector("[name=N16][value='"+ N16 +"']").checked = true;
                    document.querySelector("[name=N17][value='"+ N17 +"']").checked = true;
                    document.querySelector("[name=N18][value='"+ N18 +"']").checked = true;
                    document.querySelector("[name=N19][value='"+ N19 +"']").checked = true;
                    document.querySelector("[name=N20][value='"+ N20 +"']").checked = true;
                    document.querySelector("[name=N21][value='"+ N21 +"']").checked = true;
                    document.querySelector("[name=N22][value='"+ N22 +"']").checked = true;
                    document.querySelector("[name=N23][value='"+ N23 +"']").checked = true;
                    document.querySelector("[name=N24][value='"+ N24 +"']").checked = true;
                    document.querySelector("[name=N25][value='"+ N25 +"']").checked = true;
                    document.querySelector("[name=N26][value='"+ N26 +"']").checked = true;
                    document.querySelector("[name=N27][value='"+ N27 +"']").checked = true;
                    document.querySelector("[name=N28][value='"+ N28 +"']").checked = true;
                    document.querySelector("[name=N29][value='"+ N29 +"']").checked = true;
                    document.querySelector("[name=N30][value='"+ N30 +"']").checked = true;
                    document.querySelector("[name=N31][value='"+ N31 +"']").checked = true;
                    document.querySelector("[name=A2021][value='"+ A2021 +"']").checked = true;
                    document.querySelector("[name=A2022][value='"+ A2022 +"']").checked = true;
                    document.querySelector("[name=A2023][value='"+ A2023 +"']").checked = true;
                    document.querySelector("[name=A2024][value='"+ A2024 +"']").checked = true;
                    document.querySelector("[name=A2025][value='"+ A2025 +"']").checked = true;
                    document.querySelector("[name=A2026][value='"+ A2026 +"']").checked = true;
                    document.querySelector("[name=A2027][value='"+ A2027 +"']").checked = true;
                    document.querySelector("[name=A2028][value='"+ A2028 +"']").checked = true;
                    document.querySelector("[name=aliados][value='"+ Aliados +"']").checked = true;
                    document.querySelector("[name=vistos][value='"+ Vistos +"']").checked = true;
                },   
            });
        }
        fetchTasks6();
        function fetchTasks6() {
            $.ajax({
                type: "post",
                url: "../contador_citas.php",
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let contador = '';
                    tasks.forEach(task => {
                        contador += `${task.contador}`
                    });
                    $('#contador').html(contador);
                }
            });
        }

       $(document).on('click', '.nueva_empresa', (e) => {
           $("#costumModal5").modal("hide");
           $("#costumModal19").modal("show");
       });
       $(document).on('click', '.close', (e) => {
        $('#envio_clientes').slideUp(1);
       });
       $('#form_empresas').submit(e => {
            e.preventDefault();
            const postData = {
                Usuario:$('#Usuario').val(),
                Empresa:$('#Empresa').val(),
                Sector:$('#codigoInput').val(),
                Persona:$('#Persona').val(),
                Correo:$('#Correo').val(),
            };
            console.log(postData)
            const url = '../PHPMailer/empresas_individual.php';
            $.post(url,  postData, (response) => {
                $("#costumModal5").modal("show");
                $("#costumModal19").modal("hide");
                $('#envio_clientes').slideDown(1);
            });
       })   
    });
    
    
    
    
      // --- BASE DE DATOS (TODOS LOS CÓDIGOS Y DESCRIPCIONES) ---
    const datos = [
        // Cultivos agrícolas transitorios
        { codigo: "0111", descripcion: "Cultivo de cereales (excepto arroz), legumbres y semillas oleaginosas" },
        { codigo: "0112", descripcion: "Cultivo de arroz" },
        { codigo: "0113", descripcion: "Cultivo de hortalizas, raíces y tubérculos" },
        { codigo: "0114", descripcion: "Cultivo de tabaco" },
        { codigo: "0115", descripcion: "Cultivo de plantas textiles" },
        { codigo: "0119", descripcion: "Otros cultivos transitorios n.c.p." },
        // Cultivos agrícolas permanentes
        { codigo: "0121", descripcion: "Cultivo de frutas tropicales y subtropicales" },
        { codigo: "0122", descripcion: "Cultivo de plátano y banano" },
        { codigo: "0123", descripcion: "Cultivo de café" },
        { codigo: "0124", descripcion: "Cultivo de caña de azúcar" },
        { codigo: "0125", descripcion: "Cultivo de flor de corte" },
        { codigo: "0126", descripcion: "Cultivo de palma para aceite (palma africana) y otros frutos oleaginosos" },
        { codigo: "0127", descripcion: "Cultivo de plantas con las que se preparan bebidas" },
        { codigo: "0128", descripcion: "Cultivo de especias y de plantas aromáticas y medicinales" },
        { codigo: "0129", descripcion: "Otros cultivos permanentes n.c.p." },
        { codigo: "0130", descripcion: "Propagación de plantas (actividades de los viveros, excepto viveros forestales)" },
        // Ganadería
        { codigo: "0141", descripcion: "Cría de ganado bovino y bufalino" },
        { codigo: "0142", descripcion: "Cría de caballos y otros equinos" },
        { codigo: "0143", descripcion: "Cría de ovejas y cabras" },
        { codigo: "0144", descripcion: "Cría de ganado porcino" },
        { codigo: "0145", descripcion: "Cría de aves de corral" },
        { codigo: "0149", descripcion: "Cría de otros animales n.c.p." },
        { codigo: "0150", descripcion: "Explotación mixta (agrícola y pecuaria)" },
        // Actividades de apoyo...
        { codigo: "0161", descripcion: "Actividades de apoyo a la agricultura" },
        { codigo: "0162", descripcion: "Actividades de apoyo a la ganadería" },
        { codigo: "0163", descripcion: "Actividades posteriores a la cosecha" },
        { codigo: "0164", descripcion: "Tratamiento de semillas para propagación" },
        { codigo: "0170", descripcion: "Caza ordinaria y mediante trampas y actividades de servicios conexas" },
        // Silvicultura
        { codigo: "0210", descripcion: "Silvicultura y otras actividades forestales" },
        { codigo: "0220", descripcion: "Extracción de madera" },
        { codigo: "0230", descripcion: "Recolección de productos forestales diferentes a la madera" },
        { codigo: "0240", descripcion: "Servicios de apoyo a la silvicultura" },
        // Pesca
        { codigo: "0311", descripcion: "Pesca marítima" },
        { codigo: "0312", descripcion: "Pesca de agua dulce" },
        { codigo: "0321", descripcion: "Acuicultura marítima" },
        { codigo: "0322", descripcion: "Acuicultura de agua dulce" },
        // Minas
        { codigo: "0510", descripcion: "Extracción de hulla (carbón de piedra)" },
        { codigo: "0520", descripcion: "Extracción de carbón lignito" },
        { codigo: "0610", descripcion: "Extracción de petróleo crudo" },
        { codigo: "0620", descripcion: "Extracción de gas natural" },
        { codigo: "0710", descripcion: "Extracción de minerales de hierro" },
        { codigo: "0721", descripcion: "Extracción de minerales de uranio y de torio" },
        { codigo: "0722", descripcion: "Extracción de oro y otros metales preciosos" },
        { codigo: "0723", descripcion: "Extracción de minerales de níquel" },
        { codigo: "0729", descripcion: "Extracción de otros minerales metalíferos no ferrosos n.c.p." },
        { codigo: "0811", descripcion: "Extracción de piedra, arena, arcillas comunes, yeso y anhidrita" },
        { codigo: "0812", descripcion: "Extracción de arcillas de uso industrial, caliza, caolín y bentonitas" },
        { codigo: "0820", descripcion: "Extracción de esmeraldas, piedras preciosas y semipreciosas" },
        { codigo: "0891", descripcion: "Extracción de minerales para la fabricación de abonos y productos químicos" },
        { codigo: "0892", descripcion: "Extracción de halita (sal)" },
        { codigo: "0899", descripcion: "Extracción de otros minerales no metálicos n.c.p." },
        { codigo: "0910", descripcion: "Actividades de apoyo para la extracción de petróleo y de gas natural" },
        { codigo: "0990", descripcion: "Actividades de apoyo para otras actividades de explotación de minas y canteras" },
        // Industriales (Alimentos)
        { codigo: "1011", descripcion: "Procesamiento y conservación de carne y productos cárnicos" },
        { codigo: "1012", descripcion: "Procesamiento y conservación de pescados, crustáceos y moluscos" },
        { codigo: "1020", descripcion: "Procesamiento y conservación de frutas, legumbres, hortalizas y tubérculos" },
        { codigo: "1030", descripcion: "Elaboración de aceites y grasas de origen vegetal y animal" },
        { codigo: "1040", descripcion: "Elaboración de productos lácteos" },
        { codigo: "1051", descripcion: "Elaboración de productos de molinería" },
        { codigo: "1052", descripcion: "Elaboración de almidones y productos derivados del almidón" },
        { codigo: "1061", descripcion: "Trilla de café" },
        { codigo: "1062", descripcion: "Descafeinado, tostión y molienda del café" },
        { codigo: "1063", descripcion: "Otros derivados del café" },
        { codigo: "1071", descripcion: "Elaboración y refinación de azúcar" },
        { codigo: "1072", descripcion: "Elaboración de panela" },
        { codigo: "1081", descripcion: "Elaboración de productos de panadería" },
        { codigo: "1082", descripcion: "Elaboración de cacao, chocolate y productos de confitería" },
        { codigo: "1083", descripcion: "Elaboración de macarrones, fideos, alcuzcuz y productos farináceos similares" },
        { codigo: "1084", descripcion: "Elaboración de comidas y platos preparados" },
        { codigo: "1089", descripcion: "Elaboración de otros productos alimenticios n.c.p." },
        { codigo: "1090", descripcion: "Elaboración de alimentos preparados para animales" },
        // Bebidas
        { codigo: "1101", descripcion: "Destilación, rectificación y mezcla de bebidas alcohólicas" },
        { codigo: "1102", descripcion: "Elaboración de bebidas fermentadas no destiladas" },
        { codigo: "1103", descripcion: "Producción de malta, elaboración de cervezas y otras bebidas malteadas" },
        { codigo: "1104", descripcion: "Elaboración de bebidas no alcohólicas, producción de aguas minerales y de otras aguas embotelladas" },
        { codigo: "1200", descripcion: "Elaboración de productos de tabaco" },
        // Textiles
        { codigo: "1311", descripcion: "Preparación e hilatura de fibras textiles" },
        { codigo: "1312", descripcion: "Tejeduría de productos textiles" },
        { codigo: "1313", descripcion: "Acabado de productos textiles" },
        { codigo: "1391", descripcion: "Fabricación de tejidos de punto y ganchillo" },
        { codigo: "1392", descripcion: "Confección de artículos con materiales textiles, excepto prendas de vestir" },
        { codigo: "1393", descripcion: "Fabricación de tapetes y alfombras para pisos" },
        { codigo: "1394", descripcion: "Fabricación de cuerdas, cordeles, cables, bramantes y redes" },
        { codigo: "1399", descripcion: "Fabricación de otros artículos textiles n.c.p." },
        { codigo: "1410", descripcion: "Confección de prendas de vestir, excepto prendas de piel" },
        { codigo: "1420", descripcion: "Fabricación de artículos de piel" },
        { codigo: "1430", descripcion: "Fabricación de artículos de punto y ganchillo" },
        // Cuero
        { codigo: "1511", descripcion: "Curtido y recurtido de cueros; recurtido y teñido de pieles" },
        { codigo: "1512", descripcion: "Fabricación de artículos de viaje, bolsos de mano y artículos similares elaborados en cuero, y fabricación de artículos de talabartería y guarnicionería" },
        { codigo: "1513", descripcion: "Fabricación de artículos de viaje, bolsos de mano y artículos similares; artículos de talabartería y guarnicionería elaborados en otros materiales" },
        { codigo: "1521", descripcion: "Fabricación de calzado de cuero y piel, con cualquier tipo de suela" },
        { codigo: "1522", descripcion: "Fabricación de otros tipos de calzado, excepto calzado de cuero y piel" },
        { codigo: "1523", descripcion: "Fabricación de partes del calzado" },
        // Madera
        { codigo: "1610", descripcion: "Aserrado, acepillado e impregnación de la madera" },
        { codigo: "1620", descripcion: "Fabricación de hojas de madera para enchapado; fabricación de tableros contrachapados, tableros laminados, tableros de partículas y otros tableros y paneles" },
        { codigo: "1630", descripcion: "Fabricación de partes y piezas de madera, de carpintería y ebanistería para la construcción" },
        { codigo: "1640", descripcion: "Fabricación de recipientes de madera" },
        { codigo: "1690", descripcion: "Fabricación de otros productos de madera; fabricación de artículos de corcho, cestería y espartería" },
        // Papel
        { codigo: "1701", descripcion: "Fabricación de pulpas (pastas) celulósicas; papel y cartón" },
        { codigo: "1702", descripcion: "Fabricación de papel y cartón ondulado (corrugado); fabricación de envases, empaques y de embalajes de papel y cartón." },
        { codigo: "1709", descripcion: "Fabricación de otros artículos de papel y cartón" },
        // Impresión
        { codigo: "1811", descripcion: "Actividades de impresión" },
        { codigo: "1812", descripcion: "Actividades de servicios relacionados con la impresión" },
        { codigo: "1820", descripcion: "Producción de copias a partir de grabaciones originales" },
        // Coque y petróleo
        { codigo: "1910", descripcion: "Fabricación de productos de hornos de coque" },
        { codigo: "1921", descripcion: "Fabricación de productos de la refinación del petróleo" },
        { codigo: "1922", descripcion: "Actividad de mezcla de combustibles" },
        // Químicos
        { codigo: "2011", descripcion: "Fabricación de sustancias y productos químicos básicos" },
        { codigo: "2012", descripcion: "Fabricación de abonos y compuestos inorgánicos nitrogenados" },
        { codigo: "2013", descripcion: "Fabricación de plásticos en formas primarias" },
        { codigo: "2014", descripcion: "Fabricación de caucho sintético en formas primarias" },
        { codigo: "2021", descripcion: "Fabricación de plaguicidas y otros productos químicos de uso agropecuario" },
        { codigo: "2022", descripcion: "Fabricación de pinturas, barnices y revestimientos similares, tintas para impresión y masillas" },
        { codigo: "2023", descripcion: "Fabricación de jabones y detergentes, preparados para limpiar y pulir; perfumes y preparados de tocador" },
        { codigo: "2029", descripcion: "Fabricación de otros productos químicos n.c.p." },
        { codigo: "2030", descripcion: "Fabricación de fibras sintéticas y artificiales" },
        { codigo: "2100", descripcion: "Fabricación de productos farmacéuticos, sustancias químicas medicinales y productos botánicos de uso farmacéutico" },
        // Caucho y plástico
        { codigo: "2211", descripcion: "Fabricación de llantas y neumáticos de caucho" },
        { codigo: "2212", descripcion: "Reencauche de llantas usadas" },
        { codigo: "2219", descripcion: "Fabricación de formas básicas de caucho y otros productos de caucho n.c.p." },
        { codigo: "2221", descripcion: "Fabricación de formas básicas de plástico" },
        { codigo: "2229", descripcion: "Fabricación de artículos de plástico n.c.p." },
        // Minerales no metálicos
        { codigo: "2310", descripcion: "Fabricación de vidrio y productos de vidrio" },
        { codigo: "2391", descripcion: "Fabricación de productos refractarios" },
        { codigo: "2392", descripcion: "Fabricación de materiales de arcilla para la construcción" },
        { codigo: "2393", descripcion: "Fabricación de otros productos de cerámica y porcelana" },
        { codigo: "2394", descripcion: "Fabricación de cemento, cal y yeso" },
        { codigo: "2395", descripcion: "Fabricación de artículos de hormigón, cemento y yeso" },
        { codigo: "2396", descripcion: "Corte, tallado y acabado de la piedra" },
        { codigo: "2399", descripcion: "Fabricación de otros productos minerales no metálicos n.c.p." },
        // Metalurgia
        { codigo: "2410", descripcion: "Industrias básicas de hierro y de acero" },
        { codigo: "2421", descripcion: "Industrias básicas de metales preciosos" },
        { codigo: "2429", descripcion: "Industrias básicas de otros metales no ferrosos" },
        { codigo: "2431", descripcion: "Fundición de hierro y de acero" },
        { codigo: "2432", descripcion: "Fundición de metales no ferrosos" },
        // Productos metálicos
        { codigo: "2511", descripcion: "Fabricación de productos metálicos para uso estructural" },
        { codigo: "2512", descripcion: "Fabricación de tanques, depósitos y recipientes de metal, excepto los utilizados para el envase o transporte de mercancías" },
        { codigo: "2513", descripcion: "Fabricación de generadores de vapor, excepto calderas de agua caliente para calefacción central" },
        { codigo: "2520", descripcion: "Fabricación de armas y municiones" },
        { codigo: "2591", descripcion: "Forja, prensado, estampado y laminado de metal; pulvimetalurgia" },
        { codigo: "2592", descripcion: "Tratamiento y revestimiento de metales; mecanizado" },
        { codigo: "2593", descripcion: "Fabricación de artículos de cuchillería, herramientas de mano y artículos de ferretería" },
        { codigo: "2599", descripcion: "Fabricación de otros productos elaborados de metal n.c.p." },
        // Electrónica
        { codigo: "2610", descripcion: "Fabricación de componentes y tableros electrónicos" },
        { codigo: "2620", descripcion: "Fabricación de computadoras y de equipo periférico" },
        { codigo: "2630", descripcion: "Fabricación de equipos de comunicación" },
        { codigo: "2640", descripcion: "Fabricación de aparatos electrónicos de consumo" },
        { codigo: "2651", descripcion: "Fabricación de equipo de medición, prueba, navegación y control" },
        { codigo: "2652", descripcion: "Fabricación de relojes" },
        { codigo: "2660", descripcion: "Fabricación de equipo de irradiación y equipo electrónico de uso médico y terapéutico" },
        { codigo: "2670", descripcion: "Fabricación de instrumentos ópticos y equipo fotográfico" },
        { codigo: "2680", descripcion: "Fabricación de medios magnéticos y ópticos para almacenamiento de datos" },
        // Equipo eléctrico
        { codigo: "2711", descripcion: "Fabricación de motores, generadores y transformadores eléctricos" },
        { codigo: "2712", descripcion: "Fabricación de aparatos de distribución y control de la energía eléctrica" },
        { codigo: "2720", descripcion: "Fabricación de pilas, baterías y acumuladores eléctricos" },
        { codigo: "2731", descripcion: "Fabricación de hilos y cables eléctricos y de fibra óptica" },
        { codigo: "2732", descripcion: "Fabricación de dispositivos de cableado" },
        { codigo: "2740", descripcion: "Fabricación de equipos eléctricos de iluminación" },
        { codigo: "2750", descripcion: "Fabricación de aparatos de uso doméstico" },
        { codigo: "2790", descripcion: "Fabricación de otros tipos de equipo eléctrico n.c.p." },
        // Maquinaria
        { codigo: "2811", descripcion: "Fabricación de motores, turbinas, y partes para motores de combustión interna" },
        { codigo: "2812", descripcion: "Fabricación de equipos de potencia hidráulica y neumática" },
        { codigo: "2813", descripcion: "Fabricación de otras bombas, compresores, grifos y válvulas" },
        { codigo: "2814", descripcion: "Fabricación de cojinetes, engranajes, trenes de engranajes y piezas de transmisión" },
        { codigo: "2815", descripcion: "Fabricación de hornos, hogares y quemadores industriales" },
        { codigo: "2816", descripcion: "Fabricación de equipo de elevación y manipulación" },
        { codigo: "2817", descripcion: "Fabricación de maquinaria y equipo de oficina (excepto computadoras y equipo periférico)" },
        { codigo: "2818", descripcion: "Fabricación de herramientas manuales con motor" },
        { codigo: "2819", descripcion: "Fabricación de otros tipos de maquinaria y equipo de uso general n.c.p." },
        { codigo: "2821", descripcion: "Fabricación de maquinaria agropecuaria y forestal" },
        { codigo: "2822", descripcion: "Fabricación de máquinas formadoras de metal y de máquinas herramienta" },
        { codigo: "2823", descripcion: "Fabricación de maquinaria para la metalurgia" },
        { codigo: "2824", descripcion: "Fabricación de maquinaria para explotación de minas y canteras y para obras de construcción" },
        { codigo: "2825", descripcion: "Fabricación de maquinaria para la elaboración de alimentos, bebidas y tabaco" },
        { codigo: "2826", descripcion: "Fabricación de maquinaria para la elaboración de productos textiles, prendas de vestir y cueros" },
        { codigo: "2829", descripcion: "Fabricación de otros tipos de maquinaria y equipo de uso especial n.c.p." },
        // Vehículos
        { codigo: "2910", descripcion: "Fabricación de vehículos automotores y sus motores" },
        { codigo: "2920", descripcion: "Fabricación de carrocerías para vehículos automotores; fabricación de remolques y semirremolques" },
        { codigo: "2930", descripcion: "Fabricación de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores" },
        // Otro transporte
        { codigo: "3011", descripcion: "Construcción de barcos y de estructuras flotantes" },
        { codigo: "3012", descripcion: "Construcción de embarcaciones de recreo y deporte" },
        { codigo: "3020", descripcion: "Fabricación de locomotoras y de material rodante para ferrocarriles" },
        { codigo: "3030", descripcion: "Fabricación de aeronaves, naves espaciales y de maquinaria conexa" },
        { codigo: "3040", descripcion: "Fabricación de vehículos militares de combate" },
        { codigo: "3091", descripcion: "Fabricación de motocicletas" },
        { codigo: "3092", descripcion: "Fabricación de bicicletas y de sillas de ruedas para personas con discapacidad" },
        { codigo: "3099", descripcion: "Fabricación de otros tipos de equipo de transporte n.c.p." },
        // Muebles
        { codigo: "3110", descripcion: "Fabricación de muebles" },
        { codigo: "3120", descripcion: "Fabricación de colchones y somieres" },
        // Otras industrias
        { codigo: "3210", descripcion: "Fabricación de joyas, bisutería y artículos conexos" },
        { codigo: "3220", descripcion: "Fabricación de instrumentos musicales" },
        { codigo: "3230", descripcion: "Fabricación de artículos y equipo para la práctica del deporte" },
        { codigo: "3240", descripcion: "Fabricación de juegos, juguetes y rompecabezas" },
        { codigo: "3250", descripcion: "Fabricación de instrumentos, aparatos y materiales médicos y odontológicos (incluido mobiliario)" },
        { codigo: "3290", descripcion: "Otras industrias manufactureras n.c.p." },
        // Mantenimiento
        { codigo: "3311", descripcion: "Mantenimiento y reparación especializado de productos elaborados en metal" },
        { codigo: "3312", descripcion: "Mantenimiento y reparación especializado de maquinaria y equipo" },
        { codigo: "3313", descripcion: "Mantenimiento y reparación especializado de equipo electrónico y óptico" },
        { codigo: "3314", descripcion: "Mantenimiento y reparación especializado de equipo eléctrico" },
        { codigo: "3315", descripcion: "Mantenimiento y reparación especializado de equipo de transporte, excepto los vehículos automotores, motocicletas y bicicletas" },
        { codigo: "3319", descripcion: "Mantenimiento y reparación de otros tipos de equipos y sus componentes n.c.p." },
        { codigo: "3320", descripcion: "Instalación especializada de maquinaria y equipo industrial" },
        // Electricidad, gas
        { codigo: "3511", descripcion: "Generación de energía eléctrica" },
        { codigo: "3512", descripcion: "Transmisión de energía eléctrica" },
        { codigo: "3513", descripcion: "Distribución de energía eléctrica" },
        { codigo: "3514", descripcion: "Comercialización de energía eléctrica" },
        { codigo: "3520", descripcion: "Producción de gas; distribución de combustibles gaseosos por tuberías" },
        { codigo: "3530", descripcion: "Suministro de vapor y aire acondicionado" },
        // Agua
        { codigo: "3600", descripcion: "Captación, tratamiento y distribución de agua" },
        { codigo: "3700", descripcion: "Evacuación y tratamiento de aguas residuales" },
        // Desechos
        { codigo: "3811", descripcion: "Recolección de desechos no peligrosos" },
        { codigo: "3812", descripcion: "Recolección de desechos peligrosos" },
        { codigo: "3821", descripcion: "Tratamiento y disposición de desechos no peligrosos" },
        { codigo: "3822", descripcion: "Tratamiento y disposición de desechos peligrosos" },
        { codigo: "3830", descripcion: "Recuperación de materiales" },
        { codigo: "3900", descripcion: "Actividades de saneamiento ambiental y otros servicios de gestión de desechos" },
        // Construcción
        { codigo: "4111", descripcion: "Construcción de edificios residenciales" },
        { codigo: "4112", descripcion: "Construcción de edificios no residenciales" },
        { codigo: "4210", descripcion: "Construcción de carreteras y vías de ferrocarril" },
        { codigo: "4220", descripcion: "Construcción de proyectos de servicio público" },
        { codigo: "4290", descripcion: "Construcción de otras obras de ingeniería civil" },
        { codigo: "4311", descripcion: "Demolición" },
        { codigo: "4312", descripcion: "Preparación del terreno" },
        { codigo: "4321", descripcion: "Instalaciones eléctricas" },
        { codigo: "4322", descripcion: "Instalaciones de fontanería, calefacción y aire acondicionado" },
        { codigo: "4329", descripcion: "Otras instalaciones especializadas" },
        { codigo: "4330", descripcion: "Terminación y acabado de edificios y obras de ingeniería civil" },
        { codigo: "4390", descripcion: "Otras actividades especializadas para la construcción de edificios y obras de ingeniería civil" },
        // Comercio
        { codigo: "4511", descripcion: "Comercio de vehículos automotores nuevos" },
        { codigo: "4512", descripcion: "Comercio de vehículos automotores usados" },
        { codigo: "4520", descripcion: "Mantenimiento y reparación de vehículos automotores" },
        { codigo: "4530", descripcion: "Comercio de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores" },
        { codigo: "4541", descripcion: "Comercio de motocicletas y de sus partes, piezas y accesorios" },
        { codigo: "4542", descripcion: "Mantenimiento y reparación de motocicletas y de sus partes y piezas" },
        { codigo: "4610", descripcion: "Comercio al por mayor a cambio de una retribución o por contrata" },
        { codigo: "4620", descripcion: "Comercio al por mayor de materias primas agropecuarias; animales vivos" },
        { codigo: "4631", descripcion: "Comercio al por mayor de productos alimenticios" },
        { codigo: "4632", descripcion: "Comercio al por mayor de bebidas y tabaco" },
        { codigo: "4641", descripcion: "Comercio al por mayor de productos textiles, productos confeccionados para uso doméstico" },
        { codigo: "4642", descripcion: "Comercio al por mayor de prendas de vestir" },
        { codigo: "4643", descripcion: "Comercio al por mayor de calzado" },
        { codigo: "4644", descripcion: "Comercio al por mayor de aparatos y equipo de uso doméstico" },
        { codigo: "4645", descripcion: "Comercio al por mayor de productos farmacéuticos, medicinales, cosméticos y de tocador" },
        { codigo: "4649", descripcion: "Comercio al por mayor de otros utensilios domésticos n.c.p." },
        { codigo: "4651", descripcion: "Comercio al por mayor de computadores, equipo periférico y programas de informática" },
        { codigo: "4652", descripcion: "Comercio al por mayor de equipo, partes y piezas electrónicos y de telecomunicaciones" },
        { codigo: "4653", descripcion: "Comercio al por mayor de maquinaria y equipo agropecuarios" },
        { codigo: "4659", descripcion: "Comercio al por mayor de otros tipos de maquinaria y equipo n.c.p." },
        { codigo: "4661", descripcion: "Comercio al por mayor de combustibles sólidos, líquidos, gaseosos y productos conexos" },
        { codigo: "4662", descripcion: "Comercio al por mayor de metales y productos metalíferos" },
        { codigo: "4663", descripcion: "Comercio al por mayor de materiales de construcción, artículos de ferretería, pinturas, productos de vidrio, equipo y materiales de fontanería y calefacción" },
        { codigo: "4664", descripcion: "Comercio al por mayor de productos químicos básicos, cauchos y plásticos en formas primarias y productos químicos de uso agropecuario" },
        { codigo: "4665", descripcion: "Comercio al por mayor de desperdicios, desechos y chatarra" },
        { codigo: "4669", descripcion: "Comercio al por mayor de otros productos n.c.p." },
        { codigo: "4690", descripcion: "Comercio al por mayor no especializado" },
        // Menor
        { codigo: "4711", descripcion: "Comercio al por menor en establecimientos no especializados con surtido compuesto principalmente por alimentos, bebidas o tabaco" },
        { codigo: "4719", descripcion: "Comercio al por menor en establecimientos no especializados, con surtido compuesto principalmente por productos diferentes de alimentos (víveres en general), bebidas y tabaco" },
        { codigo: "4721", descripcion: "Comercio al por menor de productos agrícolas para el consumo en establecimientos especializados" },
        { codigo: "4722", descripcion: "Comercio al por menor de leche, productos lácteos y huevos, en establecimientos especializados" },
        { codigo: "4723", descripcion: "Comercio al por menor de carnes (incluye aves de corral), productos cárnicos, pescados y productos de mar, en establecimientos especializados" },
        { codigo: "4724", descripcion: "Comercio al por menor de bebidas y productos del tabaco, en establecimientos especializados" },
        { codigo: "4729", descripcion: "Comercio al por menor de otros productos alimenticios n.c.p., en establecimientos especializados" },
        { codigo: "4731", descripcion: "Comercio al por menor de combustible para automotores" },
        { codigo: "4732", descripcion: "Comercio al por menor de lubricantes (aceites, grasas), aditivos y productos de limpieza para vehículos automotores" },
        { codigo: "4741", descripcion: "Comercio al por menor de computadores, equipos periféricos, programas de informática y equipos de telecomunicaciones en establecimientos especializados" },
        { codigo: "4742", descripcion: "Comercio al por menor de equipos y aparatos de sonido y de video, en establecimientos especializados" },
        { codigo: "4751", descripcion: "Comercio al por menor de productos textiles en establecimientos especializados" },
        { codigo: "4752", descripcion: "Comercio al por menor de artículos de ferretería, pinturas y productos de vidrio en establecimientos especializados" },
        { codigo: "4753", descripcion: "Comercio al por menor de tapices, alfombras y cubrimientos para paredes y pisos en establecimientos especializados" },
        { codigo: "4754", descripcion: "Comercio al por menor de electrodomésticos y gasodomésticos de uso doméstico, muebles y equipos de iluminación" },
        { codigo: "4755", descripcion: "Comercio al por menor de artículos y utensilios de uso doméstico" },
        { codigo: "4759", descripcion: "Comercio al por menor de otros artículos domésticos en establecimientos especializados" },
        { codigo: "4761", descripcion: "Comercio al por menor de libros, periódicos, materiales y artículos de papelería y escritorio, en establecimientos especializados" },
        { codigo: "4762", descripcion: "Comercio al por menor de artículos deportivos, en establecimientos especializados" },
        { codigo: "4769", descripcion: "Comercio al por menor de otros artículos culturales y de entretenimiento n.c.p. en establecimientos especializados" },
        { codigo: "4771", descripcion: "Comercio al por menor de prendas de vestir y sus accesorios (incluye artículos de piel) en establecimientos especializados" },
        { codigo: "4772", descripcion: "Comercio al por menor de todo tipo de calzado y artículos de cuero y sucedáneos del cuero en establecimientos especializados." },
        { codigo: "4773", descripcion: "Comercio al por menor de productos farmacéuticos y medicinales, cosméticos y artículos de tocador en establecimientos especializados" },
        { codigo: "4774", descripcion: "Comercio al por menor de otros productos nuevos en establecimientos especializados" },
        { codigo: "4775", descripcion: "Comercio al por menor de artículos de segunda mano" },
        { codigo: "4781", descripcion: "Comercio al por menor de alimentos, bebidas y tabaco, en puestos de venta móviles" },
        { codigo: "4782", descripcion: "Comercio al por menor de productos textiles, prendas de vestir y calzado, en puestos de venta móviles" },
        { codigo: "4789", descripcion: "Comercio al por menor de otros productos en puestos de venta móviles" },
        { codigo: "4791", descripcion: "Comercio al por menor realizado a través de Internet" },
        { codigo: "4792", descripcion: "Comercio al por menor realizado a través de casas de venta o por correo" },
        { codigo: "4799", descripcion: "Otros tipos de comercio al por menor no realizado en establecimientos, puestos de venta o mercados." },
        // Transporte
        { codigo: "4911", descripcion: "Transporte férreo de pasajeros" },
        { codigo: "4912", descripcion: "Transporte férreo de carga" },
        { codigo: "4921", descripcion: "Transporte de pasajeros" },
        { codigo: "4922", descripcion: "Transporte mixto" },
        { codigo: "4923", descripcion: "Transporte de carga por carretera" },
        { codigo: "4930", descripcion: "Transporte por tuberías" },
        { codigo: "5011", descripcion: "Transporte de pasajeros marítimo y de cabotaje" },
        { codigo: "5012", descripcion: "Transporte de carga marítimo y de cabotaje" },
        { codigo: "5021", descripcion: "Transporte fluvial de pasajeros" },
        { codigo: "5022", descripcion: "Transporte fluvial de carga" },
        { codigo: "5111", descripcion: "Transporte aéreo nacional de pasajeros" },
        { codigo: "5112", descripcion: "Transporte aéreo internacional de pasajeros" },
        { codigo: "5121", descripcion: "Transporte aéreo nacional de carga" },
        { codigo: "5122", descripcion: "Transporte aéreo internacional de carga" },
        { codigo: "5210", descripcion: "Almacenamiento y depósito" },
        { codigo: "5221", descripcion: "Actividades de estaciones, vías y servicios complementarios para el transporte terrestre" },
        { codigo: "5222", descripcion: "Actividades de puertos y servicios complementarios para el transporte acuático" },
        { codigo: "5223", descripcion: "Actividades de aeropuertos, servicios de navegación aérea y demás actividades conexas al transporte aéreo" },
        { codigo: "5224", descripcion: "Manipulación de carga" },
        { codigo: "5229", descripcion: "Otras actividades complementarias al transporte" },
        { codigo: "5310", descripcion: "Actividades postales nacionales" },
        { codigo: "5320", descripcion: "Actividades de mensajería" },
        // Alojamiento
        { codigo: "5511", descripcion: "Alojamiento en hoteles" },
        { codigo: "5512", descripcion: "Alojamiento en apartahoteles" },
        { codigo: "5513", descripcion: "Alojamiento en centros vacacionales" },
        { codigo: "5514", descripcion: "Alojamiento rural" },
        { codigo: "5519", descripcion: "Otros tipos de alojamientos para visitantes" },
        { codigo: "5520", descripcion: "Actividades de zonas de camping y parques para vehículos recreacionales" },
        { codigo: "5530", descripcion: "Servicio por horas" },
        { codigo: "5590", descripcion: "Otros tipos de alojamiento n.c.p." },
        // Comidas
        { codigo: "5611", descripcion: "Expendio a la mesa de comidas preparadas" },
        { codigo: "5612", descripcion: "Expendio por autoservicio de comidas preparadas" },
        { codigo: "5613", descripcion: "Expendio de comidas preparadas en cafeterías" },
        { codigo: "5619", descripcion: "Otros tipos de expendio de comidas preparadas n.c.p." },
        { codigo: "5621", descripcion: "Catering para eventos" },
        { codigo: "5629", descripcion: "Actividades de otros servicios de comidas" },
        { codigo: "5630", descripcion: "Expendio de bebidas alcohólicas para el consumo dentro del establecimiento" },
        // Información
        { codigo: "5811", descripcion: "Edición de libros" },
        { codigo: "5812", descripcion: "Edición de directorios y listas de correo" },
        { codigo: "5813", descripcion: "Edición de periódicos, revistas y otras publicaciones periódicas" },
        { codigo: "5819", descripcion: "Otros trabajos de edición" },
        { codigo: "5820", descripcion: "Edición de programas de informática (software)" },
        // Cine
        { codigo: "5911", descripcion: "Actividades de producción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión" },
        { codigo: "5912", descripcion: "Actividades de posproducción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión" },
        { codigo: "5913", descripcion: "Actividades de distribución de películas cinematográficas, videos, programas, anuncios y comerciales de televisión" },
        { codigo: "5914", descripcion: "Actividades de exhibición de películas cinematográficas y videos" },
        { codigo: "5920", descripcion: "Actividades de grabación de sonido y edición de música" },
        // Radio/TV
        { codigo: "6010", descripcion: "Actividades de programación y transmisión en el servicio de radiodifusión sonora" },
        { codigo: "6020", descripcion: "Actividades de programación y transmisión de televisión" },
        // Telecom
        { codigo: "6110", descripcion: "Actividades de telecomunicaciones alámbricas" },
        { codigo: "6120", descripcion: "Actividades de telecomunicaciones inalámbricas" },
        { codigo: "6130", descripcion: "Actividades de telecomunicación satelital" },
        { codigo: "6190", descripcion: "Otras actividades de telecomunicaciones" },
        // Informática
        { codigo: "6201", descripcion: "Actividades de desarrollo de sistemas informáticos (planificación, análisis, diseño, programación, pruebas)" },
        { codigo: "6202", descripcion: "Actividades de consultoría informática y actividades de administración de instalaciones informáticas" },
        { codigo: "6209", descripcion: "Otras actividades de tecnologías de información y actividades de servicios informáticos" },
        // Servicios de información
        { codigo: "6311", descripcion: "Procesamiento de datos, alojamiento (hosting) y actividades relacionadas" },
        { codigo: "6312", descripcion: "Portales web" },
        { codigo: "6391", descripcion: "Actividades de agencias de noticias" },
        { codigo: "6399", descripcion: "Otras actividades de servicio de información n.c.p." },
        // Financieras
        { codigo: "6411", descripcion: "Banco Central" },
        { codigo: "6412", descripcion: "Bancos comerciales" },
        { codigo: "6421", descripcion: "Actividades de las corporaciones financieras" },
        { codigo: "6422", descripcion: "Actividades de las compañías de financiamiento" },
        { codigo: "6423", descripcion: "Banca de segundo piso" },
        { codigo: "6424", descripcion: "Actividades de las cooperativas financieras" },
        { codigo: "6431", descripcion: "Fideicomisos, fondos y entidades financieras similares" },
        { codigo: "6432", descripcion: "Fondos de cesantías" },
        { codigo: "6491", descripcion: "Leasing financiero (arrendamiento financiero)" },
        { codigo: "6492", descripcion: "Actividades financieras de fondos de empleados y otras formas asociativas del sector solidario" },
        { codigo: "6493", descripcion: "Actividades de compra de cartera o factoring" },
        { codigo: "6494", descripcion: "Otras actividades de distribución de fondos" },
        { codigo: "6495", descripcion: "Instituciones especiales oficiales" },
        { codigo: "6499", descripcion: "Otras actividades de servicio financiero, excepto las de seguros y pensiones n.c.p." },
        // Seguros
        { codigo: "6511", descripcion: "Seguros generales" },
        { codigo: "6512", descripcion: "Seguros de vida" },
        { codigo: "6513", descripcion: "Reaseguros" },
        { codigo: "6514", descripcion: "Capitalización" },
        { codigo: "6521", descripcion: "Servicios de seguros sociales de salud" },
        { codigo: "6522", descripcion: "Servicios de seguros sociales de riesgos profesionales" },
        { codigo: "6531", descripcion: "Régimen de prima media con prestación definida (RPM)" },
        { codigo: "6532", descripcion: "Régimen de ahorro individual (RAI)" },
        // Auxiliares financieros
        { codigo: "6611", descripcion: "Administración de mercados financieros" },
        { codigo: "6612", descripcion: "Corretaje de valores y de contratos de productos básicos" },
        { codigo: "6613", descripcion: "Otras actividades relacionadas con el mercado de valores" },
        { codigo: "6614", descripcion: "Actividades de las casas de cambio" },
        { codigo: "6615", descripcion: "Actividades de los profesionales de compra y venta de divisas" },
        { codigo: "6619", descripcion: "Otras actividades auxiliares de las actividades de servicios financieros n.c.p." },
        { codigo: "6621", descripcion: "Actividades de agentes y corredores de seguros" },
        { codigo: "6629", descripcion: "Evaluación de riesgos y daños, y otras actividades de servicios auxiliares" },
        { codigo: "6630", descripcion: "Actividades de administración de fondos" },
        // Inmobiliarias
        { codigo: "6810", descripcion: "Actividades inmobiliarias realizadas con bienes propios o arrendados" },
        { codigo: "6820", descripcion: "Actividades inmobiliarias realizadas a cambio de una retribución o por contrata" },
        // Profesionales
        { codigo: "6910", descripcion: "Actividades jurídicas" },
        { codigo: "6920", descripcion: "Actividades de contabilidad, teneduría de libros, auditoría financiera y asesoría tributaria" },
        { codigo: "7010", descripcion: "Actividades de administración empresarial" },
        { codigo: "7020", descripcion: "Actividades de consultaría de gestión" },
        { codigo: "7110", descripcion: "Actividades de arquitectura e ingeniería y otras actividades conexas de consultoría técnica" },
        { codigo: "7120", descripcion: "Ensayos y análisis técnicos" },
        { codigo: "7210", descripcion: "Investigaciones y desarrollo experimental en el campo de las ciencias naturales y la ingeniería" },
        { codigo: "7220", descripcion: "Investigaciones y desarrollo experimental en el campo de las ciencias sociales y las humanidades" },
        { codigo: "7310", descripcion: "Publicidad" },
        { codigo: "7320", descripcion: "Estudios de mercado y realización de encuestas de opinión pública" },
        { codigo: "7410", descripcion: "Actividades especializadas de diseño" },
        { codigo: "7420", descripcion: "Actividades de fotografía" },
        { codigo: "7490", descripcion: "Otras actividades profesionales, científicas y técnicas n.c.p." },
        { codigo: "7500", descripcion: "Actividades veterinarias" },
        // Servicios administrativos
        { codigo: "7710", descripcion: "Alquiler y arrendamiento de vehículos automotores" },
        { codigo: "7721", descripcion: "Alquiler y arrendamiento de equipo recreativo y deportivo" },
        { codigo: "7722", descripcion: "Alquiler de videos y discos" },
        { codigo: "7729", descripcion: "Alquiler y arrendamiento de otros efectos personales y enseres domésticos n.c.p." },
        { codigo: "7730", descripcion: "Alquiler y arrendamiento de otros tipos de maquinaria, equipo y bienes tangibles n.c.p." },
        { codigo: "7740", descripcion: "Arrendamiento de propiedad intelectual y productos similares, excepto obras protegidas por derechos de autor" },
        { codigo: "7810", descripcion: "Actividades de agencias de empleo" },
        { codigo: "7820", descripcion: "Actividades de agencias de empleo temporal" },
        { codigo: "7830", descripcion: "Otras actividades de suministro de recurso humano" },
        { codigo: "7911", descripcion: "Actividades de las agencias de viaje" },
        { codigo: "7912", descripcion: "Actividades de operadores turísticos" },
        { codigo: "7990", descripcion: "Otros servicios de reserva y actividades relacionadas" },
        { codigo: "8010", descripcion: "Actividades de seguridad privada" },
        { codigo: "8020", descripcion: "Actividades de servicios de sistemas de seguridad" },
        { codigo: "8030", descripcion: "Actividades de detectives e investigadores privados" },
        { codigo: "8110", descripcion: "Actividades combinadas de apoyo a instalaciones" },
        { codigo: "8121", descripcion: "Limpieza general interior de edificios" },
        { codigo: "8129", descripcion: "Otras actividades de limpieza de edificios e instalaciones industriales" },
        { codigo: "8130", descripcion: "Actividades de paisajismo y servicios de mantenimiento conexos" },
        { codigo: "8211", descripcion: "Actividades combinadas de servicios administrativos de oficina" },
        { codigo: "8219", descripcion: "Fotocopiado, preparación de documentos y otras actividades especializadas de apoyo a oficina" },
        { codigo: "8220", descripcion: "Actividades de centros de llamadas (Call center)" },
        { codigo: "8230", descripcion: "Organización de convenciones y eventos comerciales" },
        { codigo: "8291", descripcion: "Actividades de agencias de cobranza y oficinas de calificación crediticia" },
        { codigo: "8292", descripcion: "Actividades de envase y empaque" },
        { codigo: "8299", descripcion: "Otras actividades de servicio de apoyo a las empresas n.c.p." },
        // Administración pública
        { codigo: "8411", descripcion: "Actividades legislativas de la administración pública" },
        { codigo: "8412", descripcion: "Actividades ejecutivas de la administración pública" },
        { codigo: "8413", descripcion: "Regulación de las actividades de organismos que prestan servicios de salud, educativos, culturales y otros servicios sociales, excepto servicios de seguridad social" },
        { codigo: "8414", descripcion: "Actividades reguladoras y facilitadoras de la actividad económica" },
        { codigo: "8415", descripcion: "Actividades de los otros órganos de control" },
        { codigo: "8421", descripcion: "Relaciones exteriores" },
        { codigo: "8422", descripcion: "Actividades de defensa" },
        { codigo: "8423", descripcion: "Orden público y actividades de seguridad" },
        { codigo: "8424", descripcion: "Administración de justicia" },
        { codigo: "8430", descripcion: "Actividades de planes de seguridad social de afiliación obligatoria" },
        // Educación
        { codigo: "8511", descripcion: "Educación de la primera infancia" },
        { codigo: "8512", descripcion: "Educación preescolar" },
        { codigo: "8513", descripcion: "Educación básica primaria" },
        { codigo: "8521", descripcion: "Educación básica secundaria" },
        { codigo: "8522", descripcion: "Educación media académica" },
        { codigo: "8523", descripcion: "Educación media técnica y de formación laboral" },
        { codigo: "8530", descripcion: "Establecimientos que combinan diferentes niveles de educación" },
        { codigo: "8541", descripcion: "Educación técnica profesional" },
        { codigo: "8542", descripcion: "Educación tecnológica" },
        { codigo: "8543", descripcion: "Educación de instituciones universitarias o de escuelas tecnológicas" },
        { codigo: "8544", descripcion: "Educación de universidades" },
        { codigo: "8551", descripcion: "Formación académica no formal" },
        { codigo: "8552", descripcion: "Enseñanza deportiva y recreativa" },
        { codigo: "8553", descripcion: "Enseñanza cultural" },
        { codigo: "8559", descripcion: "Otros tipos de educación n.c.p." },
        { codigo: "8560", descripcion: "Actividades de apoyo a la educación" },
        // Salud
        { codigo: "8610", descripcion: "Actividades de hospitales y clínicas, con internación" },
        { codigo: "8621", descripcion: "Actividades de la práctica médica, sin internación" },
        { codigo: "8622", descripcion: "Actividades de la práctica odontológica" },
        { codigo: "8691", descripcion: "Actividades de apoyo diagnóstico" },
        { codigo: "8692", descripcion: "Actividades de apoyo terapéutico" },
        { codigo: "8699", descripcion: "Otras actividades de atención de la salud humana" },
        { codigo: "8710", descripcion: "Actividades de atención residencial medicalizada de tipo general" },
        { codigo: "8720", descripcion: "Actividades de atención residencial, para el cuidado de pacientes con retardo mental, enfermedad mental y consumo de sustancias psicoactivas" },
        { codigo: "8730", descripcion: "Actividades de atención en instituciones para el cuidado de personas mayores y/o discapacitadas" },
        { codigo: "8790", descripcion: "Otras actividades de atención en instituciones con alojamiento" },
        { codigo: "8810", descripcion: "Actividades de asistencia social sin alojamiento para personas mayores y discapacitadas" },
        { codigo: "8890", descripcion: "Otras actividades de asistencia social sin alojamiento" },
        // Arte
        { codigo: "9001", descripcion: "Creación literaria" },
        { codigo: "9002", descripcion: "Creación musical" },
        { codigo: "9003", descripcion: "Creación teatral" },
        { codigo: "9004", descripcion: "Creación audiovisual" },
        { codigo: "9005", descripcion: "Artes plásticas y visuales" },
        { codigo: "9006", descripcion: "Actividades teatrales" },
        { codigo: "9007", descripcion: "Actividades de espectáculos musicales en vivo" },
        { codigo: "9008", descripcion: "Otras actividades de espectáculos en vivo" },
        // Bibliotecas
        { codigo: "9101", descripcion: "Actividades de bibliotecas y archivos" },
        { codigo: "9102", descripcion: "Actividades y funcionamiento de museos, conservación de edificios y sitios históricos" },
        { codigo: "9103", descripcion: "Actividades de jardines botánicos, zoológicos y reservas naturales" },
        { codigo: "9200", descripcion: "Actividades de juegos de azar y apuestas" },
        // Deportes
        { codigo: "9311", descripcion: "Gestión de instalaciones deportivas" },
        { codigo: "9312", descripcion: "Actividades de clubes deportivos" },
        { codigo: "9319", descripcion: "Otras actividades deportivas" },
        { codigo: "9321", descripcion: "Actividades de parques de atracciones y parques temáticos" },
        { codigo: "9329", descripcion: "Otras actividades recreativas y de esparcimiento n.c.p." },
        // Asociaciones
        { codigo: "9411", descripcion: "Actividades de asociaciones empresariales y de empleadores" },
        { codigo: "9412", descripcion: "Actividades de asociaciones profesionales" },
        { codigo: "9420", descripcion: "Actividades de sindicatos de empleados" },
        { codigo: "9491", descripcion: "Actividades de asociaciones religiosas" },
        { codigo: "9492", descripcion: "Actividades de asociaciones políticas" },
        { codigo: "9499", descripcion: "Actividades de otras asociaciones n.c.p." },
        // Reparaciones
        { codigo: "9511", descripcion: "Mantenimiento y reparación de computadores y de equipo periférico" },
        { codigo: "9512", descripcion: "Mantenimiento y reparación de equipos de comunicación" },
        { codigo: "9521", descripcion: "Mantenimiento y reparación de aparatos electrónicos de consumo" },
        { codigo: "9522", descripcion: "Mantenimiento y reparación de aparatos y equipos domésticos y de jardinería" },
        { codigo: "9523", descripcion: "Reparación de calzado y artículos de cuero" },
        { codigo: "9524", descripcion: "Reparación de muebles y accesorios para el hogar" },
        { codigo: "9529", descripcion: "Mantenimiento y reparación de otros efectos personales y enseres domésticos" },
        // Servicios personales
        { codigo: "9601", descripcion: "Lavado y limpieza, incluso la limpieza en seco, de productos textiles y de piel" },
        { codigo: "9602", descripcion: "Peluquería y otros tratamientos de belleza" },
        { codigo: "9603", descripcion: "Pompas fúnebres y actividades relacionadas" },
        { codigo: "9609", descripcion: "Otras actividades de servicios personales n.c.p." },
        // Hogares
        { codigo: "9700", descripcion: "Actividades de los hogares individuales como empleadores de personal doméstico" },
        { codigo: "9810", descripcion: "Actividades no diferenciadas de los hogares individuales como productores de bienes para uso propio" },
        { codigo: "9820", descripcion: "Actividades no diferenciadas de los hogares individuales como productores de servicios para uso propio" },
        // Extraterritorial
        { codigo: "9900", descripcion: "Actividades de organizaciones y entidades extraterritoriales" }
    ];

    // --- Referencias al DOM ---
    const input = document.getElementById('codigoInput');
    const lista = document.getElementById('listaSugerencias');
    const descDiv = document.getElementById('descripcionSeleccionada');

    // --- Función para ordenar resultados: primero los que empiezan con el texto, luego los que contienen ---
    function ordenarResultados(resultados, texto) {
        const textoLower = texto.toLowerCase();
        return resultados.sort((a, b) => {
            const aStarts = a.codigo.toLowerCase().startsWith(textoLower);
            const bStarts = b.codigo.toLowerCase().startsWith(textoLower);
            if (aStarts && !bStarts) return -1;
            if (!aStarts && bStarts) return 1;
            // Si ambos empiezan o ninguno, ordenar por código
            return a.codigo.localeCompare(b.codigo);
        });
    }

    // --- Función para actualizar la lista de sugerencias ---
    function actualizarSugerencias(texto) {
        // Limpiar lista
        lista.innerHTML = '';
        
        if (texto.trim() === '') {
            lista.style.display = 'none';
            return;
        }

        const textoLower = texto.toLowerCase();
        // Filtrar: buscar en código Y en descripción (coincidencia parcial)
        const resultados = datos.filter(item => 
            item.codigo.toLowerCase().includes(textoLower) || 
            item.descripcion.toLowerCase().includes(textoLower)
        );

        if (resultados.length === 0) {
            // Mostrar mensaje de no resultados
            const li = document.createElement('li');
            li.className = 'no-resultados';
            li.textContent = 'No se encontraron coincidencias.';
            lista.appendChild(li);
            lista.style.display = 'block';
            return;
        }

        // Ordenar para mostrar primero los códigos que empiezan con el texto
        const ordenados = ordenarResultados(resultados, texto);

        // Limitar a 10 resultados para no saturar
        const mostrar = ordenados.slice(0, 10);

        mostrar.forEach(item => {
            const li = document.createElement('li');
            li.innerHTML = `<span class="codigo-item">${item.codigo}</span> <span class="descripcion-item">${item.descripcion}</span>`;
            // Al hacer clic, seleccionar y mostrar descripción
            li.addEventListener('click', () => {
                seleccionarItem(item);
            });
            lista.appendChild(li);
        });

        lista.style.display = 'block';
    }

    // --- Función para seleccionar un ítem y mostrar la descripción ---
    function seleccionarItem(item) {
        input.value = item.codigo;  // Ponemos el código en el input
        descDiv.innerHTML = `<span class="etiqueta-resultado">Código:</span> ${item.codigo} <br> <span class="etiqueta-resultado">Descripción:</span> ${item.descripcion}`;
        // Ocultar lista
        lista.style.display = 'none';
    }

    // --- Evento al escribir en el input ---
    input.addEventListener('input', function(e) {
        const texto = this.value;
        actualizarSugerencias(texto);
    });

    // --- Al hacer clic fuera del input, ocultar la lista ---
    document.addEventListener('click', function(e) {
        if (!document.querySelector('.input-group').contains(e.target)) {
            lista.style.display = 'none';
        }
    });

    // --- Al presionar Enter, si hay un resultado destacado (el primero), seleccionarlo ---
    input.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            const primerItem = lista.querySelector('li:not(.no-resultados)');
            if (primerItem) {
                // Buscar el código correspondiente en la lista de datos
                const codigoTexto = primerItem.querySelector('.codigo-item')?.textContent;
                if (codigoTexto) {
                    const encontrado = datos.find(d => d.codigo === codigoTexto);
                    if (encontrado) {
                        seleccionarItem(encontrado);
                    }
                }
            }
        }
    });

    // --- (Opcional) Si el input pierde el foco y tiene un código válido, mostrar su descripción ---
    input.addEventListener('blur', function() {
        const texto = this.value.trim();
        if (texto !== '') {
            const encontrado = datos.find(d => d.codigo === texto);
            if (encontrado) {
                descDiv.innerHTML = `<span class="etiqueta-resultado">Código:</span> ${encontrado.codigo} <br> <span class="etiqueta-resultado">Descripción:</span> ${encontrado.descripcion}`;
            }
        }
    });

    console.log('✅ Buscador de códigos CIIU cargado. ¡Listo para usar!');
    
    
    
</script>
</body>
</html>
