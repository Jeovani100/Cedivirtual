 <!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Psicométrico</title></title>
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
   // if (!controlsesion::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGIN);}
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
        padding-top: 10px;
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
        width:20%!important;
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
    .nuevo1,
    .nuevo {
        width:13em;
        height: 36px;
        font-size:12px!important;
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
    #boton {
        transform-style: preserve-3d;
        border-radius:0;
        background:#000000;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
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
        .task-delete1, .submit,
        .task-delete2, .submit,
        .task-delete3, .submit,
        .task-delete4, .submit,
        .task-delete5, .submit,
        .task-download, .submit,
        .task-download1, .submit,
        .task-download2, .submit,
        .task-download3, .submit,
        .task-download4, .submit,
        .task-download5, .submit,
        .task-download6, .submit {
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
    .task-editar, .submit,
    .task-editar2, .submit,
    .task-delete1, .submit,
    .task-delete2, .submit,
    .task-delete3, .submit,
    .task-delete4, .submit,
    .task-delete5, .submit,
    .task-delete6, .submit,
    .task-download, .submit,
    .task-download1, .submit,
    .task-download2, .submit,
    .task-download3, .submit,
    .task-download4, .submit,
    .task-download5, .submit,
    .task-download6, .submit {
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
    .task-editar:hover, .submit:hover,
    .task-editar2:hover, .submit:hover,
    .task-download:hover, .submit:hover,
    .task-download1:hover, .submit:hover,
    .task-download2:hover, .submit:hover,
    .task-download3:hover, .submit:hover,
    .task-download4:hover, .submit:hover,
    .task-download5:hover, .submit:hover,
    .task-download6:hover, .submit:hover {
        color:#e69900;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-delete1:hover, .submit:hover,
    .task-delete2:hover, .submit:hover,
    .task-delete3:hover, .submit:hover,
    .task-delete4:hover, .submit:hover,
    .task-delete5:hover, .submit:hover,
    .task-delete6:hover, .submit:hover {
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
    input[type="file"]#file-9,
    input[type="file"]#file-8,
    input[type="file"]#file-7 {
        width: 0.1px;
        height: 0.1px;
        color:#000000!important;
        overflow: hidden;
        z-index: -1; 
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
        background-color:#ffffff;
        border:1px solid #71788e;
        text-align:center;
        margin-top:-1.6em;
        margin-left:2.2em;
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        font-size:20px!important;
        color:#e7744f;
        margin-left:31px;
        margin-top:-24px;
    }
    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f0c8";
       
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
    .task-ver, .submit,
    .task-descargar, .submit,
    .task-delete, .submit{
        width:36px;
        height: 36px;
        font-family:Moristonb;
        color: #666666;
        background:transparent;
        border: 0px solid #678e98;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-descargar:hover, .submit:hover,
    .task-ver:hover, .submit:hover,
    .task-delete:hover, .submit:hover {
        color: #cc0000;
        border: 0px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
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
    <section id="container">
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
               <div class="fa fa-bars" style="font-size:22px"></div>
            </div>
            <?php if ($Activo == 1) { ?>
                <a href="#costumModal" data-toggle="modal" class="logo">Cedisalud<span> IPS</span></a>
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
                            <option selected>AUDITIVO</option>
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
                            <option>AGENDA</option>
                            <option>CONSENTIMIENTO</option>
                            <option selected>PSICOMETRICO</option>
                            <option>NOTIFICACIONES</option></option>
                            <option>CAPACITACIONES</option></option>
                        </select>
                        <span class="focus-border3"></span>
                    </td>
                </tr>
            </table>
            <?php } else { ?>
               <!--<table>
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
                            <option>RIESGO-PS</option>
                            <option>AUSENTISMO</option>
                        </select>
                        <span class="focus-border3"></span>
                    </td>
                </tr>
            </table>-->
            <?php } ?>
            </div>
            <div>
            <ul class="pull-right top-menu" >
                <li><a class="logout" href="<?php echo RUTA_LOGOUT ?>" title="Salir"><i class="fa fa-power-off"></i></a></li>
            </ul>
          </div>
        </header>
        <aside>
            <div id="sidebar">
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered" id="Razon_" style="font-size:14px;color:#cccccc;opacity:10!important;font-family:verdanab;margin-top:0.5em"></p>
                </ul>
            </div>
        </aside>
    </header>
    </section>
    <div class="container-fluid" style="text-align:center;color:#333333;min-height:45em!important"><br><br><br>
        <p style="font-family:verdanab;font-size:24px;color:#333333;text-align:center;margin:0">HERRAMIENTAS PSICOMÉTRICAS</p><br>
        <table style="width:100%;font-family:verdanab;font-size:16px;text-align:center">
            <tr>
                <td>Tamíz Psicológico<br>
                <button id="I1" style="background:transparent;border:0"><img src="../imagine/test5.png" width="120" /></button></td>
                <td>Inventario de Ansiedad ISRA<br>
                <button id="I2" style="background:transparent;border:0"><img src="../imagine/test1.png" width="120" /></button></td>
                <td>Test de Personalidad de Eysenck<br>
                <button id="I3" style="background:transparent;border:0"><img src="../imagine/test2.png" width="120" /></button></td>
                <td>Evaluación de la somnolencia Epworth<br>
                <button id="I4" style="background:transparent;border:0"><img src="../imagine/test3.png" width="120" /></button></td>
                <td>Encuesta síntomas neurotoxicos Q16<br>
                <button id="I5" style="background:transparent;border:0"><img src="../imagine/test4.png" width="120" /></button></td>
                <td>Cuestionario STOP-BANG<br>
                <button id="I6" style="background:transparent;border:0"><img src="../imagine/test5.png" width="120" /></button></td>
            </tr>
        </table>
        
        <div id="T1"><br>
            <p style="font-family:narrow;font-size:28px;color:#333333;letter-spacing:1px;color:#333333;text-align:center;margin:0">Tamíz psicológico</p><br>
            <div class="col-lg-12">
                <table style="text-align:right">
                    <tr>
                        <td><form class="formxlsx" action="../spout/export8.php" method="post">
                            <button  type="submit" id="export_data" name='export_data' class="nuevo2" style="width:12em">Consolidado.xlsx</button></form>
                        </td>
                    </tr>
                </table> 
            </div>
             <div class="col-lg-12">
                <h4 style="text-align:right;line-height:1em;font-family:Narrow;letter-spacing:2px;margin-top:-0.3em"><span>Número de registros:</span> <span style="font-family:verdanab;color:#e7744f" id="contador"></span></h4>
                <table class="table table-sm" align="center">
                    <thead>
                        <tr>
                            <th style="width:25%"></th>
                            <th>Nombre y Apellido</th>
                            <th>Cedula</th>
                            <th>Empresa</th>
                            <th>Sede</th>
                            <th>Cargo</th>
                            <th>Fecha de la prueba</th>
                            <th id="borderout"></th>
                            <th id="borderout"></th>
                        </tr>
                    </thead>
                    <tbody style="border:0!important" id="tasks1" align="center"></tbody>
                </table>
            </div>
        </div>
        <div id="T2"><br>
            <p style="font-family:narrow;font-size:28px;color:#333333;letter-spacing:1px;color:#333333;text-align:center;margin:0">ISRA- Inventario de Situaciones y Respuestas de Ansiedad</p><br>
            <div class="col-lg-12">
                <table style="text-align:right">
                    <tr>
                        <td><form class="formxlsx" action="../spout/export9.php" method="post">
                            <button  type="submit" id="export_data" name='export_data' class="nuevo2" style="width:12em">Consolidado.xlsx</button></form>
                        </td>
                    </tr>
                </table> 
            </div>
             <div class="col-lg-12">
                <h4 style="text-align:right;line-height:1em;font-family:Narrow;letter-spacing:2px;margin-top:-0.3em"><span>Número de registros:</span> <span style="font-family:verdanab;color:#e7744f" id="contador"></span></h4>
                <table class="table table-sm" align="center">
                    <thead>
                        <tr>
                            <th style="width:25%"></th>
                            <th>Nombre y Apellido</th>
                            <th>Cedula</th>
                            <th>Empresa</th>
                            <th>Sede</th>
                            <th>Cargo</th>
                            <th>Fecha de la prueba</th>
                            <th id="borderout"></th>
                            <th id="borderout"></th>
                        </tr>
                    </thead>
                    <tbody style="border:0!important" id="tasks2" align="center"></tbody>
                </table>
            </div>
        </div>
        <div id="T3"><br>
            <p style="font-family:narrow;font-size:28px;color:#333333;letter-spacing:1px;color:#333333;text-align:center;margin:0">Test de Personalidad de Eysenck</p><br>
            <div class="col-lg-12">
                <form class="formxlsx" action="../spout/export10.php" method="post">
                    <button  type="submit" id="export_data" name='export_data' class="nuevo3" style="width:12em">Consolidado.xlsx</button>
                </form>
            </div>
             <div class="col-lg-12"><br>
                <h4 style="text-align:right;line-height:1em;font-family:Narrow;letter-spacing:2px;margin-top:-0.3em"><span>Número de registros:</span> <span style="font-family:verdanab;color:#e7744f" id="contador"></span></h4>
                <table class="table table-sm" align="center">
                    <thead>
                        <tr>
                            <th style="width:25%"></th>
                            <th>Nombre y Apellido</th>
                            <th>Cedula</th>
                            <th>Empresa</th>
                            <th>Sede</th>
                            <th>Cargo</th>
                            <th>Fecha de la prueba</th>
                            <th id="borderout"></th>
                            <th id="borderout"></th>
                        </tr>
                    </thead>
                    <tbody style="border:0!important" id="tasks3" align="center"></tbody>
                </table>
            </div>
        </div>
        <div id="T4"><br>
            <p style="font-family:narrow;font-size:28px;color:#333333;letter-spacing:1px;color:#333333;text-align:center;margin:0">Evaluación de la somnolencia Epworth</p><br>
            <div class="col-lg-12">
                <form class="formxlsx" action="../spout/export12.php" method="post">
                    <button  type="submit" id="export_data" name='export_data' class="nuevo3" style="width:12em">Consolidado.xlsx</button>
                </form>
            </div>
            <div class="col-lg-12"><br>
                <h4 style="text-align:right;line-height:1em;font-family:Narrow;letter-spacing:2px;margin-top:-0.3em"><span>Número de registros:</span> <span style="font-family:verdanab;color:#e7744f" id="contador"></span></h4>
                <table class="table table-sm" align="center">
                    <thead>
                        <tr>
                            <th style="width:25%"></th>
                            <th>Nombre y Apellido</th>
                            <th>Cedula</th>
                            <th>Empresa</th>
                            <th>Sede</th>
                            <th>Cargo</th>
                            <th>Fecha de la prueba</th>
                            <th id="borderout"></th>
                            <th id="borderout"></th>
                        </tr>
                    </thead>
                    <tbody style="border:0!important" id="tasks4" align="center"></tbody>
                </table>
            </div>
        </div>
        <div id="T5"><br>
            <p style="font-family:narrow;font-size:28px;color:#333333;letter-spacing:1px;color:#333333;text-align:center;margin:0">Encuesta síntomas neurotoxicos Q16</p><br>
             <div class="col-lg-12">
                <form class="formxlsx" action="../spout/export13.php" method="post">
                    <button  type="submit" id="export_data" name='export_data' class="nuevo3" style="width:12em">Consolidado.xlsx</button>
                </form>
            </div>
            <div class="col-lg-12"><br>
                <h4 style="text-align:right;line-height:1em;font-family:Narrow;letter-spacing:2px;margin-top:-0.3em"><span>Número de registros:</span> <span style="font-family:verdanab;color:#e7744f" id="contador"></span></h4>
                <table class="table table-sm" align="center">
                    <thead>
                        <tr>
                            <th style="width:25%"></th>
                            <th>Nombre y Apellido</th>
                            <th>Cedula</th>
                            <th>Empresa</th>
                            <th>Sede</th>
                            <th>Cargo</th>
                            <th>Fecha de la prueba</th>
                            <th id="borderout"></th>
                            <th id="borderout"></th>
                        </tr>
                    </thead>
                    <tbody style="border:0!important" id="tasks5" align="center"></tbody>
                </table>
            </div>
        </div>
        <div id="T6"><br>
            <p style="font-family:narrow;font-size:28px;color:#333333;letter-spacing:1px;color:#333333;text-align:center;margin:0">Evaluación de Riesgo de Apnea Obstructiva del Sueño (AOS) - Cuestionario STOP-BANG</p><br>
             <div class="col-lg-12">
                <form class="formxlsx" action="../phpspreadsheet/export15.php" method="post">
                    <button  type="submit" id="export_data" name='export_data' class="nuevo3" style="width:12em">Consolidado.xlsx</button>
                </form>
            </div>
            <div class="col-lg-12"><br>
                <h4 style="text-align:right;line-height:1em;font-family:Narrow;letter-spacing:2px;margin-top:-0.3em"><span>Número de registros:</span> <span style="font-family:verdanab;color:#e7744f" id="contador"></span></h4>
                <table class="table table-sm" align="center">
                    <thead>
                        <tr>
                            <th style="width:25%"></th>
                            <th>Nombre y Apellido</th>
                            <th>Cedula</th>
                            <th>Empresa</th>
                            <th>Sede</th>
                            <th>Cargo</th>
                            <th>Fecha de la prueba</th>
                            <th id="borderout"></th>
                            <th id="borderout"></th>
                        </tr>
                    </thead>
                    <tbody style="border:0!important" id="tasks6" align="center"></tbody>
                </table>
            </div>
        </div>

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
<div id="costumModal11" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <p style="font-size:22px;line-height:1em;font-family:Moristonb;letter-spacing:2px;color:#000000">NUEVO DOCUMENTO</p><br>
                <form id="form_recursos">
                    <p class="clientes"><textarea rows="1" value="" style="width:100%;border-radius:0" id="Recurso"/></textarea></p> 
                    <input title="Adjuntar" type="file" name="files" id="file-8" class="inputfile inputfile-8" data-multiple-caption="{count} archivos seleccionados" />
                    <label for="file-8">
                    <span class="iborrainputfile"></span>
                    <strong style="margin-left:-10em;margin-bottom:10px;background:trasparent!important" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="fa fa-paperclip"></span><span class="etiqueta2" >Adjuntar</span>&nbsp&nbsp&nbsp&nbsp</strong><br>
                    <p style="border:0!important" id="imagen" align="center"></p>
                    <p><input id="boton" type="submit" class="btn btn btn-default btn-block" style="width:12em"/></p>
                </form>  
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal" class="modal fullscreen-modal" data-easein="slideRightIn" data-backdrop="static"> 
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
<div id="costumModal4" class="modal" data-easein="" data-backdrop="static"> 
    <div class="modal-dialog modal-title" style="background:#ffffff">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" style="text-align:center;font-size:14px;">
                <input type="hidden" id="delete_id"></input>
                <p style="color:#666666;font-family:verdana;letter-spacing:0.4px">¿Deseas eliminar a <span id="nombre_delete" style="color:#333333;font-family:verdanab"></span>&nbspdel registro?</p>
                <p id="boton-delete"><button type"submit" data-dismiss="modal" aria-hidden="true" class="delete">Eliminar</button><br></p>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="id0"></input>
<div id="grafica4" style="display: none"></div>
<div id="grafica5" style="display: none"></div>
<div id="grafica6" style="display: none"></div>
<div id="grafica7" style="display: none"></div>
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
<script src="<?php echo RUTA_JS ?>codigo_ausentismo.js"></script>
<script>
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
        var o = $(this).attr("data-easein");
        "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
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
    $(document).ready(function() {
        $(".load").fadeOut("slow");
        $('#T1').hide();
        $('#T2').hide();
        $('#T3').show();
        $('#T4').hide();
        $('#T5').hide();
        $('#T6').hide();
        $(document).on('click', '#I1', (e) => {
            e.preventDefault();
            $('#T1').show();
            $('#T2').hide();
            $('#T3').hide();
            $('#T4').hide();
            $('#T5').hide();
            $('#T6').hide();
        });
        $(document).on('click', '#I2', (e) => {
            e.preventDefault();
            $('#T1').hide();
            $('#T2').show();
            $('#T3').hide();
            $('#T4').hide();
            $('#T5').hide();
            $('#T6').hide();
        });
        $(document).on('click', '#I3', (e) => {
            e.preventDefault();
            $('#T1').hide();
            $('#T2').hide();
            $('#T3').show();
            $('#T4').hide();
            $('#T5').hide();
            $('#T6').hide();
        });
         $(document).on('click', '#I4', (e) => {
            e.preventDefault();
            $('#T1').hide();
            $('#T2').hide();
            $('#T3').hide();
            $('#T4').show();
            $('#T5').hide();
            $('#T6').hide();
        });
         $(document).on('click', '#I5', (e) => {
            e.preventDefault();
            $('#T1').hide();
            $('#T2').hide();
            $('#T3').hide();
            $('#T4').hide();
            $('#T5').show();
            $('#T6').hide();
        });
         $(document).on('click', '#I6', (e) => {
            e.preventDefault();
            $('#T1').hide();
            $('#T2').hide();
            $('#T3').hide();
            $('#T4').hide();
            $('#T5').hide();
            $('#T6').show();
        });
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
                window.location = "../psicometrico"
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
                                   </tr> `
                    });
                    $('#admin01').html(template);
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
                        $('#contenido_').html('<img src="../admin/'+Archivo1+'" width="90%" height="100%"></a></div>')
                    }
                });
            }
        });
         $(document).on('click', '.task-download', (e) => {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const Nombre = $(element).attr('taskId1');
            const Cedula = $(element).attr('taskId2');
            const Empresa = $(element).attr('taskId3');
            const Sede = $(element).attr('taskId4');
            const Cargo = $(element).attr('taskId5');
            const Edad = $(element).attr('taskId6');
            const Genero = $(element).attr('taskId7');
            const Estado = $(element).attr('taskId8');
            const Items_ = $(element).attr('taskId9');
            
            var doc = new jsPDF('p', 'pt', 'letter');
            
            
            
            
            
            doc.save('<?php echo $Nombre ?>.pdf'); 
        })
        fetchTasks1()
        function fetchTasks1() {
            $.ajax({
                type: "post",
                url: "../tasks26.php",
                success: function(response) {
                const tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                          <tr taskId1="${task.Nombre}" taskId2="${task.Cedula}" taskId3="${task.Empresa}" taskId4="${task.Sede}" taskId5="${task.Cargo}" taskId6="${task.Edad}" taskId7="${task.Genero}" taskId8="${task.Estado}" taskId9="${task.Items}" taskId11="${task.Codigo}">
                              <td id="td" style="padding:10px" width="6%"><button class="task-item" data-title="visualizar"><img src="https://www.cedisalud.com.co/imagine/pdf.png" width="30" height="30"/></button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Sede}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Nombre}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Documento}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Empresa}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Cargo}</button></td>
                              <td id="td" style="text-align:right!important">${task.Fecha_registro}</td>
                              <td id="borderout" width="6%"><button class="task-download" data-title="Descargar"><span class="fa fa-cloud-download"></span></button></td>
                              <td id="borderout" width="6%"><button class="task-delete" data-title="Eliminar"><span class="fa fa-trash"></span></button></td>
                          </tr>`
                    });
                $('#tasks1').html(template);
                }
            });
        };
        
        /*fetchTasks2()
        function fetchTasks2() {
            $.ajax({
                type: "post",
                url: "../tasks26.php",
                success: function(response) {
                const tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                          <tr taskId="${task.Codigo}" taskId2="${task.Nombre}">
                              <td id="td" style="padding:10px" width="6%"><button class="task-item" data-title="visualizar"><img src="https://www.cedisalud.com.co/imagine/pdf.png" width="30" height="30"/></button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Sede}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Nombre}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Empresa}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Cargo}</button></td>
                              <td id="td" style="text-align:right!important">${task.Fecha_registro}</td>
                              <td id="borderout" width="6%"><button class="task-download" data-title="Descargar"><span class="fa fa-cloud-download"></span></button></td>
                              <td id="borderout" width="6%"><button class="task-delete" data-title="Eliminar"><span class="fa fa-trash"></span></button></td>
                          </tr>`
                    });
                $('#tasks2').html(template);
                }
            });
        };*/

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
        
       
        $(document).on('click', '.task-download3', (e) => {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const Nombre = $(element).attr('taskId1');
            const Cedula = $(element).attr('taskId2');
            const Empresa = $(element).attr('taskId3');
            const Sede = $(element).attr('taskId4');
            const Cargo = $(element).attr('taskId5');
            const Edad = $(element).attr('taskId6');
            const Genero = $(element).attr('taskId7');
            const ejey__ = $(element).attr('taskId8');
            const ejex__ = $(element).attr('taskId9');
            const Veracidad = $(element).attr('taskId10');
            if (!Veracidad || Veracidad.trim() === '') {
                // Asignar valor entre 0 y 1
                Veracidad = 1; // o 0 según prefieras
            }
            var  ejey = parseInt(ejey__); 
            var  ejex = parseInt(ejex__); 

            switch (ejex) {
                case 0:
                   var ejex_ = -12;  
                   var eje1 = 105;
                break;
                case 1:
                    var ejex_ = -11;  
                    var eje1 = 119;
                break;
                case 2:
                    var ejex_ = -10; 
                    var eje1 = 134;
                break;
                case 3:
                    var ejex_ = -9; 
                    var eje1 = 149;
                break;
                case 4:
                    var ejex_ = -8;
                    var eje1 = 164;
                break;
                case 5:
                    var ejex_ = -7; 
                    var eje1 = 179;
                break;
                case 6:
                    var ejex_ = -6; 
                    var eje1 = 194;
                break;
                case 7:
                    var ejex_ = -5; 
                    var eje1 = 209;
                break;
                case 8:
                    var ejex_ = -4;
                    var eje1 = 224 ;
                break;
                case 9:
                    var ejex_ = -3;
                    var eje1 = 239;
                break;
                case 10:
                    var ejex_ = -2;
                    var eje1 = 254;
                break;
                case 11:
                    var ejex_ = -1; 
                    var eje1 = 269;
                break;
                case 12:
                    var ejex_ = '0';
                    var eje1 = 284;
                break;
                case 13:
                     var ejex_ = 1; 
                     var eje1 = 299;
                break;
                case 14:
                    var ejex_ = 2;  
                    var eje1 = 314;
                break;
                case 15:
                    var ejex_ = 3; 
                    var eje1 = 329;
                break;
                case 16:
                    var ejex_ = 4; 
                    var eje1 = 344;
                break;
                case 17:
                    var ejex_ = 5; 
                    var eje1 = 359;
                break;
                case 18:
                    var ejex_ = 6; 
                    var eje1 = 374;
                break;
                case 19:
                    var ejex_ = 7; 
                    var eje1 = 389;
                break;
                case 20:
                    var ejex_ = 8; 
                    var eje1 = 404;
                break;
                case 21:
                    var ejex_ = 9;  
                    var eje1 = 419;
                break;
                case 22:
                    var ejex_ = 10; 
                    var eje1 = 434;
                break;
                case 23:
                    var ejex_ = 11; 
                    var eje1 = 449;
                break;
                case 24:
                    var ejex_ = 12; 
                    var eje1 = 464;
                break;
            }
            switch (ejey) {
                case 0:
                   var ejey_ = -12;     
                   var eje2 = 592;
                break;
                case 1:
                    var ejey_ = -11;  
                    var eje2 = 577;
                break;
                case 2:
                    var ejey_ = -10;   
                    var eje2 = 562;
                break;
                case 3:
                    var ejey_ = -9; 
                    var eje2 = 547;
                break;
                case 4:
                    var ejey_ = -8; 
                    var eje2 = 532;
                break;
                case 5:
                    var ejey_ = -7;     
                    var eje2 = 517;
                break;
                case 6:
                    var ejey_ = -6;  
                    var eje2 = 502;
                break;
                case 7:
                    var ejey_ = -5;     
                    var eje2 = 487;
                break;
                case 8:
                    var ejey_ = -4;   
                    var eje2 = 472;
                break;
                case 9:
                    var ejey_ = -3;
                    var eje2 = 457;
                break;
                case 10:
                    var ejey_ = -2;
                    var eje2 = 442;
                break;
                case 11:
                    var ejey_ = -1;  
                    var eje2 = 427;
                break;
                case 12:
                    var ejey_ = 0;  
                    var eje2 = 412;
                break;
                case 13:
                     var ejey_ = 1; 
                     var eje2 = 397;
                break;
                case 14:
                    var ejey_ = 2; 
                    var eje2 = 382;
                break;
                case 15:
                    var ejey_ = 3;    
                    var eje2 = 367;
                break;
                case 16:
                    var ejey_ = 4;     
                    var eje2 = 352;
                break;
                case 17:
                    var ejey_ = 5;  
                    var eje2 = 337;
                break;
                case 18:
                    var ejey_ = 6;  
                    var eje2 = 322;
                break;
                case 19:
                    var ejey_ = 7;     
                    var eje2 = 307;
                break;
                case 20:
                    var ejey_ = 8; 
                    var eje2 = 292;
                break;
                case 21:
                    var ejey_ = 9;  
                    var eje2 = 277;
                break;
                case 22:
                    var ejey_ = 10;     
                    var eje2 = 262;
                break;
                case 23:
                    var ejey_ = 11; 
                    var eje2 = 247;
                break;
                case 24:
                    var ejey_ = 12;   
                    var eje2 = 232;
                break;
            } 

            var doc = new jsPDF('p', 'pt', 'letter');
            
            doc.setFontSize(13);
            doc.setFont("helvetica");
            doc.setFontType("bold");
            doc.setTextColor(109, 70, 96);
            doc.myText('INVENTARIO DE PERSONALIDAD - EYSENCK',{align: "center"},0,90);
            var columns = ['','','','',];
            var data = [['Nombre y Apellidos:',Nombre,'Cédula:',Cedula]];
            doc.autoTable(columns,data, {margin:{ top: 105, left:40 },  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
            columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 60}, 3: {fontStyle:'normal',columnWidth: 96, fillColor: [239, 237, 247]}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
            var columns = ['', '','','','',''];
            var data = [['Cargo:',Cargo,'Edad:',Edad,'Género:',Genero]];
            doc.autoTable(columns,data, {margin:{ top: 125, left:40 },  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
            columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 48}, 3: {fontStyle:'normal',columnWidth: 30, fillColor: [239, 237, 247],halign: 'center'}, 4: {columnWidth: 48}, 5: {fontStyle:'normal',columnWidth: 30, fillColor: [239, 237, 247], halign: 'center'}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
            var columns = ['','','',''];
            var data = [['Empresa:',Empresa,'Sede:',Sede]];
            doc.autoTable(columns,data, {margin:{ top: 145, left:40 },  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
            columnStyles: {0: {columnWidth: 70}, 1: {fontStyle:'normal',columnWidth: 200, fillColor: [239, 237, 247]}, 2: {columnWidth: 70}, 3: {fontStyle:'normal',columnWidth: 200, fillColor: [239, 237, 247]}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
            doc.setFont("helvetica");;
            doc.setFontSize(11);
            doc.setFontType("bold");
            doc.setTextColor(0, 0, 0);
            doc.myText('PERFIL DEL EVALUADO',{align: "center"},0,120);
            doc.myText('RESULTADO',{align: "center"},0,220);
            
            var img = new Image();
            img.src = '../imagine/transparente2.png'
            doc.addImage(img, 'png',237,354, 164, 174)
        
            doc.setFontType("normal");
            doc.setLineWidth(3); 
            doc.setDrawColor(109, 70, 96);
            doc.line(120, 442, 490, 442);
            doc.line(304, 260, 304, 625);
            
            doc.line(124, 437, 124, 447);
            doc.line(139, 437, 139, 447);
            doc.line(154, 437, 154, 447);
            doc.line(169, 437, 169, 447);
            doc.line(184, 437, 184, 447);
            doc.line(199, 437, 199, 447);
            doc.line(214, 437, 214, 447);
            doc.line(229, 437, 229, 447);
            doc.line(244, 437, 244, 447);
            doc.line(259, 437, 259, 447);
            doc.line(274, 437, 274, 447);
            doc.line(291, 437, 291, 447);
            //doc.line(304, 437, 304, 447);
            doc.line(319, 437, 319, 447);
            doc.line(334, 437, 334, 447);
            doc.line(349, 437, 349, 447);
            doc.line(364, 437, 364, 447);
            doc.line(379, 437, 379, 447);
            doc.line(394, 437, 394, 447);
            doc.line(409, 437, 409, 447);
            doc.line(424, 437, 424, 447);
            doc.line(440, 437, 440, 447);
            doc.line(455, 437, 455, 447);
            doc.line(470, 437, 470, 447);
            doc.line(485, 437, 485, 447);
            
            doc.line(300, 262,310, 262);
            doc.line(300, 277,310, 277);
            doc.line(300, 292,310, 292);
            doc.line(300, 307,310, 307);
            doc.line(300, 307,310, 307);
            doc.line(300, 322,310, 322);
            doc.line(300, 337,310, 337);
            doc.line(300, 352,310, 352);
            doc.line(300, 367,310, 367);
            doc.line(300, 382,310, 382);
            doc.line(300, 397,310, 397);
            doc.line(300, 412,310, 412);
            doc.line(300, 427,310, 427);
            doc.line(300, 442,310, 442);
            doc.line(300, 457,310, 457);
            doc.line(300, 472,310, 472);
            doc.line(300, 487,310, 487);
            doc.line(300, 502,310, 502);
            doc.line(300, 517,310, 517);
            doc.line(300, 532,310, 532);
            doc.line(300, 547,310, 547);
            doc.line(300, 562,310, 562);
            doc.line(300, 577,310, 577);
            doc.line(300, 592,310, 592);
            doc.line(300, 607,310, 607);
            doc.line(300, 622,310, 622);
            
            doc.setFontSize(10);
            doc.setFontType("normal");
            doc.setTextColor(51, 51, 51);
            doc.text(119,430, "0", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(135,430, "1", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(150,430, "2", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(165,430, "3", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(180,430, "4", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(195,430, "5", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(210,430, "6", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(225,430, "7", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(240,430, "8", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(255,430, "9", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(270,430, "10", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(285,430, "11", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            //doc.text(300,430, "12", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,430, "13", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(330,430, "14", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(345,430, "15", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(360,430, "16", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(375,430, "17", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(390,430, "18", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(405,430, "19", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(420,430, "20", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(435,430, "21", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(450,430, "22", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(465,430, "23", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(480,430, "24", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            
            doc.text(315,265, "24", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,280, "23", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,295, "22", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,310, "21", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,325, "20", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,340, "19", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,355, "18", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,370, "17", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,385, "16", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,400, "15", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,415, "14", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,430, "13", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            //doc.text(315,445, "12", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,460, "11", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,475, "10", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,490, "9", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,505, "8", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,520, "7", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,535, "6", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,550, "5", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,565, "4", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,580, "3", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,595, "2", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,610, "1", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            doc.text(315,625, "0", {maxWidth: 400,align:'justify', lineHeightFactor: 1.5});
            
            doc.setFontSize(12);
            doc.setFont("Times-Bold");
            doc.setFontType("bold");
            doc.setTextColor(109, 70, 96);
            doc.text(129,250, "MELANCÓLICO                                                                                                                                                                                                                                             ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            doc.text(425,250, "COLÉRICO                                                                                                                                                                                                                                             ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            doc.text(120,640, "FLEMÁTICO                                                                                                                                                                                                                                             ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            doc.text(415,640, "SANGUÍNEO                                                                                                                                                                                                                                             ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            
            doc.setFontSize(11);
            doc.setFont("helvetica");
            doc.setFontType("bold");
            doc.setTextColor(102, 102, 102);
            doc.text(285,640, "Estable                                                                                                                                                                                                                                             ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            doc.text(280,250, "Inestable                                                                                                                                                                                                                                          ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            doc.text(45,445, "Introversión                                                                                                                                                                                                                                            ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            doc.text(500,445, "Extraversión                                                                                                                                                                                                                                             ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            
            doc.setFontSize(10);
            doc.setTextColor(153, 153, 153);
            doc.text(120,350, "Altamente                                                                                                                                                                                                                                             ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            doc.text(425,350, "Altamente                                                                                                                                                                                                                                             ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            doc.text(120,540, "Altamente                                                                                                                                                                                                                                             ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            doc.text(415,540, "Altamente                                                                                                                                                                                                                                             ", {maxWidth: 445,align:'justify', lineHeightFactor: 1.5});
            
            var img = new Image();
            img.src = '../imagine/P24.png'
            doc.addImage(img, 'png', eje1,eje2, 38, 36);
           
            doc.addPage();
            
            if(Veracidad <= 4) {
                var texto1 = '';
                var texto2 = '';
                var texto3 = '';
                
                // ================================================================
                // CUADRANTE COLÉRICO (Extraversión Alta + Estabilidad Alta)
                // ================================================================
                
                // Altamente Colérico: ejex >= 18, ejey >= 17
                if(ejex >= 18 && ejey >= 17) {
                    var texto1 = 'ALTAMENTE COLÉRICO';
                    var texto2 = 'Alta extraversión, alta estabilidad emocional';
                    var texto3 = 'Tu perfil refleja una combinación de extroversión con una sólida estabilidad emocional. Eres alguien sociable, confiable y optimista, capaz de mantener la calma y la compostura en diversas situaciones. Esta combinación te hace destacar como un líder natural y alguien que disfruta de interactuar con los demás, brindando energía positiva y estabilidad emocional a tu entorno. Tu capacidad para mantener relaciones sociales fuertes y tu actitud positiva son aspectos destacados de tu personalidad.';
                }
                
                // Colérico: ejex 13-17, ejey 13-24
                else if(ejex >= 13 && ejex <= 17 && ejey >= 13) {
                    var texto1 = 'COLÉRICO';
                    var texto2 = 'Alta extraversión, alta estabilidad emocional';
                    var texto3 = 'Tu perfil refleja una combinación de extroversión con una sólida estabilidad emocional. Eres alguien sociable, confiable y optimista, capaz de mantener la calma y la compostura en diversas situaciones. Esta combinación te hace destacar como un líder natural y alguien que disfruta de interactuar con los demás, brindando energía positiva y estabilidad emocional a tu entorno. Tu capacidad para mantener relaciones sociales fuertes y tu actitud positiva son aspectos destacados de tu personalidad.';
                }
                
                // Medianamente Colérico: ejex 12-17, ejey 12-16
                else if(ejex >= 12 && ejex <= 17 && ejey >= 12 && ejey <= 16) {
                    var texto1 = 'MEDIANAMENTE COLÉRICO';
                    var texto2 = 'Mediana extraversión, mediana estabilidad emocional';
                    var texto3 = 'Tu perfil refleja una combinación de extroversión con una sólida estabilidad emocional. Eres alguien sociable, confiable y optimista, capaz de mantener la calma y la compostura en diversas situaciones. Esta combinación te hace destacar como un líder natural y alguien que disfruta de interactuar con los demás, brindando energía positiva y estabilidad emocional a tu entorno. Tu capacidad para mantener relaciones sociales fuertes y tu actitud positiva son aspectos destacados de tu personalidad.';
                }
                
                // ================================================================
                // CUADRANTE SANGUÍNEO (Extraversión Alta + Estabilidad Baja)
                // ================================================================
                
                // Altamente Sanguíneo: ejex >= 18, ejey <= 7
                else if(ejex >= 18 && ejey <= 7) {
                    var texto1 = 'ALTAMENTE SANGUÍNEO';
                    var texto2 = 'Alta extraversión, baja estabilidad emocional';
                    var texto3 = 'Este resultado indica que eres una persona extrovertida y sociable, que disfruta de la compañía de otros y tiende a ser energético y entusiasta en diferentes situaciones sociales. Sin embargo, también puedes experimentar emociones intensas y variadas, lo que puede llevar a cambios emocionales rápidos. Tu capacidad para adaptarte fácilmente a diferentes entornos y tu habilidad para liderar naturalmente en grupos destacan como fortalezas, aunque es importante mantener un equilibrio emocional para gestionar mejor los altibajos emocionales.';
                }
                
                // Sanguíneo: ejex 13-17, ejey <= 7
                else if(ejex >= 13 && ejex <= 17 && ejey <= 7) {
                    var texto1 = 'SANGUÍNEO';
                    var texto2 = 'Alta extraversión, baja estabilidad emocional';
                    var texto3 = 'Este resultado indica que eres una persona extrovertida y sociable, que disfruta de la compañía de otros y tiende a ser energético y entusiasta en diferentes situaciones sociales. Sin embargo, también puedes experimentar emociones intensas y variadas, lo que puede llevar a cambios emocionales rápidos. Tu capacidad para adaptarte fácilmente a diferentes entornos y tu habilidad para liderar naturalmente en grupos destacan como fortalezas, aunque es importante mantener un equilibrio emocional para gestionar mejor los altibajos emocionales.';
                }
                
                // Medianamente Sanguíneo: ejex 12-17, ejey 7-11
                else if(ejex >= 12 && ejex <= 17 && ejey >= 7 && ejey <= 11) {
                    var texto1 = 'MEDIANAMENTE SANGUÍNEO';
                    var texto2 = 'Mediana extraversión, baja estabilidad emocional';
                    var texto3 = 'Este resultado indica que eres una persona extrovertida y sociable, que disfruta de la compañía de otros y tiende a ser energético y entusiasta en diferentes situaciones sociales. Sin embargo, también puedes experimentar emociones intensas y variadas, lo que puede llevar a cambios emocionales rápidos. Tu capacidad para adaptarte fácilmente a diferentes entornos y tu habilidad para liderar naturalmente en grupos destacan como fortalezas, aunque es importante mantener un equilibrio emocional para gestionar mejor los altibajos emocionales.';
                }
                
                // ================================================================
                // CUADRANTE MELANCÓLICO (Extraversión Baja + Estabilidad Alta)
                // ================================================================
                
                // Altamente Melancólico: ejex <= 10, ejey >= 17
                else if(ejex <= 10 && ejey >= 17) {
                    var texto1 = 'ALTAMENTE MELANCÓLICO';
                    var texto2 = 'Baja extraversión, alta estabilidad emocional';
                    var texto3 = 'Tu perfil indica que eres una persona tranquila, reservada y emocionalmente estable. Disfrutas de la paz y la estabilidad en tu vida, y prefieres un ritmo de vida más relajado y constante. Eres paciente, tolerante y capaz de mantener la calma bajo presión, lo que te permite enfrentar los desafíos con serenidad y resolver problemas de manera eficaz. Tu capacidad para mantener relaciones estables y tu enfoque reflexivo en las decisiones destacan como rasgos positivos de tu personalidad.';
                }
                
                // Melancólico: ejex 0-11, ejey 13-24
                else if(ejex <= 11 && ejey >= 13) {
                    var texto1 = 'MELANCÓLICO';
                    var texto2 = 'Baja extraversión, alta estabilidad emocional';
                    var texto3 = 'Tu perfil indica que eres una persona tranquila, reservada y emocionalmente estable. Disfrutas de la paz y la estabilidad en tu vida, y prefieres un ritmo de vida más relajado y constante. Eres paciente, tolerante y capaz de mantener la calma bajo presión, lo que te permite enfrentar los desafíos con serenidad y resolver problemas de manera eficaz. Tu capacidad para mantener relaciones estables y tu enfoque reflexivo en las decisiones destacan como rasgos positivos de tu personalidad.';
                }
                
                // Medianamente Melancólico: ejex 10-12, ejey 12-16
                else if(ejex >= 10 && ejex <= 12 && ejey >= 12 && ejey <= 16) {
                    var texto1 = 'MEDIANAMENTE MELANCÓLICO';
                    var texto2 = 'Baja extraversión, mediana estabilidad emocional';
                    var texto3 = 'Tu perfil indica que eres una persona tranquila, reservada y emocionalmente estable. Disfrutas de la paz y la estabilidad en tu vida, y prefieres un ritmo de vida más relajado y constante. Eres paciente, tolerante y capaz de mantener la calma bajo presión, lo que te permite enfrentar los desafíos con serenidad y resolver problemas de manera eficaz. Tu capacidad para mantener relaciones estables y tu enfoque reflexivo en las decisiones destacan como rasgos positivos de tu personalidad.';
                }
                
                // ================================================================
                // CUADRANTE FLEMÁTICO (Extraversión Baja + Estabilidad Baja)
                // ================================================================
                
                // Altamente Flemático: ejex <= 10, ejey <= 11
                else if(ejex <= 10 && ejey <= 11) {
                    var texto1 = 'ALTAMENTE FLEMÁTICO';
                    var texto2 = 'Baja extraversión, baja estabilidad emocional';
                    var texto3 = 'Si obtuviste un resultado bajo en extraversión y baja estabilidad emocional, es probable que seas introspectivo, reservado y propenso a experiencias emocionales intensas. Prefieres la tranquilidad y disfrutas de tiempo a solas para reflexionar sobre tus pensamientos y emociones. Aunque eres capaz de profundizar en tus emociones y entenderlas a un nivel más profundo, es importante que cuides tu bienestar emocional y busques formas saludables de gestionar el estrés y la ansiedad que puedan surgir debido a tu sensibilidad emocional.';
                    var texto4 = 'Trabajo individual';
                    var texto5 = 'Prefiere trabajar sólo, estable emocionalmente, meticuloso y organizado';
                    var texto6 = 'Maneja el estrés internamente, se auto-motiva.';
                    var texto7 = 'Sigue órdenes con precisión, atención a detalles.';
                }
                
                // Flemático: ejex <= 11, ejey <= 11
                else if(ejex <= 11 && ejey <= 11) {
                    var texto1 = 'FLEMÁTICO';
                    var texto2 = 'Baja extraversión, baja estabilidad emocional';
                    var texto3 = 'Si obtuviste un resultado bajo en extraversión y baja estabilidad emocional, es probable que seas introspectivo, reservado y propenso a experiencias emocionales intensas. Prefieres la tranquilidad y disfrutas de tiempo a solas para reflexionar sobre tus pensamientos y emociones. Aunque eres capaz de profundizar en tus emociones y entenderlas a un nivel más profundo, es importante que cuides tu bienestar emocional y busques formas saludables de gestionar el estrés y la ansiedad que puedan surgir debido a tu sensibilidad emocional.';
                }
                
                // Medianamente Flemático: ejex 10-12, ejey 7-11
                else if(ejex >= 10 && ejex <= 12 && ejey >= 7 && ejey <= 11) {
                    var texto1 = 'MEDIANAMENTE FLEMÁTICO';
                    var texto2 = 'Baja extraversión, baja estabilidad emocional';
                    var texto3 = 'Si obtuviste un resultado bajo en extraversión y baja estabilidad emocional, es probable que seas introspectivo, reservado y propenso a experiencias emocionales intensas. Prefieres la tranquilidad y disfrutas de tiempo a solas para reflexionar sobre tus pensamientos y emociones. Aunque eres capaz de profundizar en tus emociones y entenderlas a un nivel más profundo, es importante que cuides tu bienestar emocional y busques formas saludables de gestionar el estrés y la ansiedad que puedan surgir debido a tu sensibilidad emocional.';
                    var texto4 = 'Trabajo individual';
                    var texto5 = 'Prefiere trabajar sólo, estable emocionalmente, meticuloso y organizado';
                    var texto6 = 'Maneja el estrés internamente, se auto-motiva.';
                    var texto7 = 'Sigue órdenes con precisión, atención a detalles.';
                }
                
                // ================================================================
                // ZONA CENTRAL (ejex 12, ejey 12) - Punto de equilibrio
                // ================================================================
                else if(ejex === 12 && ejey === 12) {
                    var texto1 = 'PERFIL EQUILIBRADO';
                    var texto2 = 'Extraversión y estabilidad en equilibrio';
                    var texto3 = 'Te encuentras en un punto de equilibrio entre la extraversión y la estabilidad emocional. Esto indica que tienes la capacidad de adaptarte a diferentes situaciones, mostrando tanto habilidades sociales como una buena gestión emocional. Eres flexible y puedes desenvolverte tanto en entornos sociales como en situaciones que requieren introspección. Tu perfil muestra una personalidad versátil y bien adaptada.';
                }
                
                // ================================================================
                // CASO POR DEFECTO (cualquier otro valor no capturado)
                // ================================================================
                else {
                    var texto1 = 'PERFIL NO CLASIFICADO';
                    var texto2 = 'Valores fuera del rango estándar';
                    var texto3 = 'Los resultados obtenidos no corresponden a un perfil típico del modelo de Eysenck. Se recomienda una evaluación complementaria para una mejor comprensión del perfil de personalidad.';
                }
                
              // ================================================================
                // FUNCIONES DE FACTORES DERIVADOS - RANGOS AMPLIADOS
                // ================================================================
                
                // 1. ESTILO DE LIDERAZGO
                function getEstiloLiderazgo(ejex, ejey) {
                    if(ejex >= 13 && ejey >= 13) return 'LIDERAZGO CARISMÁTICO - Inspira y motiva, toma decisiones rápidas, delegador';
                    if(ejex >= 13 && ejey <= 11) return 'LIDERAZGO PARTICIPATIVO - Colaborador, entusiasta, generador de consensos';
                    if(ejex <= 11 && ejey >= 13) return 'LIDERAZGO ANALÍTICO - Reflexivo, meticuloso, planificador estratégico';
                    if(ejex <= 11 && ejey <= 11) return 'LIDERAZGO DE APOYO - Paciente, estabilizador, orientado a procesos';
                    if(ejex >= 12 && ejex <= 14 && ejey >= 12 && ejey <= 14) return 'LIDERAZGO ADAPTATIVO - Flexible, situacional, equilibrado';
                    return 'LIDERAZGO EQUILIBRADO - Combina características de diferentes estilos';
                }
                
                // 2. ESTILO DE COMUNICACIÓN
                function getEstiloComunicacion(ejex, ejey) {
                    if(ejex >= 13 && ejey >= 13) return 'COMUNICACIÓN DIRECTA Y ENÉRGICA - Habla con convicción, interrumpe, expresa emociones abiertamente';
                    if(ejex >= 13 && ejey <= 11) return 'COMUNICACIÓN EXPRESIVA Y OPTIMISTA - Habla mucho, animado, cuenta historias, contagioso';
                    if(ejex <= 11 && ejey >= 13) return 'COMUNICACIÓN REFLEXIVA - Escucha más que habla, elige palabras cuidadosamente';
                    if(ejex <= 11 && ejey <= 11) return 'COMUNICACIÓN CALMADA - Habla pausado, claro, directo, sin emociones excesivas';
                    return 'COMUNICACIÓN EQUILIBRADA - Se adapta al contexto y al interlocutor';
                }
                
                // 3. MANEJO DEL ESTRÉS
                function getManejoEstres(ejex, ejey) {
                    if(ejex >= 13 && ejey >= 13) return 'ESTRÉS POR FRUSTRACIÓN - Reacciona con impaciencia, necesita canales de descarga';
                    if(ejex >= 13 && ejey <= 11) return 'ESTRÉS POR SOBREESTIMULACIÓN - Busca actividad constante, evita el aburrimiento';
                    if(ejex <= 11 && ejey >= 13) return 'ESTRÉS POR PREOCUPACIÓN - Tiende a la rumiación, necesita tranquilidad y control';
                    if(ejex <= 11 && ejey <= 11) return 'ESTRÉS POR RUTINA - Se estresa con cambios bruscos, necesita predictibilidad';
                    return 'MANEJO DE ESTRÉS MODERADO - Reacciona según la situación y el contexto';
                }
                
                // 4. INTELIGENCIA EMOCIONAL
                function getInteligenciaEmocional(ejex, ejey) {
                    if(ejex >= 13 && ejey >= 13) return 'ALTA EXPRESIÓN, BAJA REGULACIÓN - Expresa emociones intensas, le cuesta controlarlas';
                    if(ejex >= 13 && ejey <= 11) return 'ALTA EXPRESIÓN, ALTA REGULACIÓN - Expresa emociones con control, empático y optimista';
                    if(ejex <= 11 && ejey >= 13) return 'BAJA EXPRESIÓN, BAJA REGULACIÓN - Siente intensamente pero no lo expresa, tendencia a la depresión';
                    if(ejex <= 11 && ejey <= 11) return 'BAJA EXPRESIÓN, ALTA REGULACIÓN - Controla sus emociones, parece imperturbable';
                    return 'INTELIGENCIA EMOCIONAL EQUILIBRADA - Buena capacidad de expresión y regulación emocional';
                }
                
                // 5. AMBIENTE LABORAL IDEAL
                function getAmbienteLaboral(ejex, ejey) {
                    if(ejex >= 13 && ejey >= 13) return 'AMBIENTE DINÁMICO - Roles de liderazgo, proyectos desafiantes, trabajo con equipos grandes';
                    if(ejex >= 13 && ejey <= 11) return 'AMBIENTE SOCIAL - Contacto con personas, eventos, relaciones públicas, ventas';
                    if(ejex <= 11 && ejey >= 13) return 'AMBIENTE ESTRUCTURADO - Trabajo individual, análisis, investigación, planificación';
                    if(ejex <= 11 && ejey <= 11) return 'AMBIENTE ESTABLE - Tareas repetitivas, procesos claros, entorno predecible';
                    return 'AMBIENTE FLEXIBLE - Se adapta bien a diferentes entornos laborales';
                }
                
                // 6. RESILIENCIA
                function getResiliencia(ejex, ejey) {
                    if(ejex >= 13 && ejey >= 13) return 'RESILIENCIA MODERADA - Se recupera rápido pero con intensidad emocional';
                    if(ejex >= 13 && ejey <= 11) return 'ALTA RESILIENCIA - Se recupera rápido, mantiene optimismo, ve oportunidades';
                    if(ejex <= 11 && ejey >= 13) return 'RESILIENCIA BAJA - Tarda en recuperarse, tendencia a la rumiación';
                    if(ejex <= 11 && ejey <= 11) return 'RESILIENCIA ALTA - Mantiene estabilidad, pero puede ser lento para adaptarse';
                    return 'RESILIENCIA ADAPTATIVA - Capacidad de recuperación según el contexto';
                }
                
                // 7. TOMA DE DECISIONES
                function getTomaDecisiones(ejex, ejey) {
                    if(ejex >= 13 && ejey >= 13) return 'DECISIONES INTUITIVAS - Rápidas, basadas en instinto, asume riesgos';
                    if(ejex >= 13 && ejey <= 11) return 'DECISIONES SOCIALES - Consulta con otros, busca consenso, optimista';
                    if(ejex <= 11 && ejey >= 13) return 'DECISIONES ANALÍTICAS - Largas, basadas en datos, evita riesgos';
                    if(ejex <= 11 && ejey <= 11) return 'DECISIONES PRUDENTES - Pausadas, metódicas, predecibles';
                    return 'DECISIONES BALANCEADAS - Combina intuición y análisis según la situación';
                }
                
                // 8. ESTILO DE APRENDIZAJE
                function getEstiloAprendizaje(ejex, ejey) {
                    if(ejex >= 13 && ejey >= 13) return 'APRENDIZAJE PRÁCTICO - Aprende haciendo, experimenta, prueba-error';
                    if(ejex >= 13 && ejey <= 11) return 'APRENDIZAJE SOCIAL - Aprende en grupo, discutiendo, colaborando';
                    if(ejex <= 11 && ejey >= 13) return 'APRENDIZAJE TEÓRICO - Aprende leyendo, analizando, reflexionando';
                    if(ejex <= 11 && ejey <= 11) return 'APRENDIZAJE ESTRUCTURADO - Sigue pasos, repite, memoriza';
                    return 'APRENDIZAJE MIXTO - Combina diferentes estilos según la necesidad';
                }
                // ================================================================
                // IMPRESIÓN DEL DOCUMENTO - Página de Interpretación
                // ================================================================
                
                // === AJUSTE: Títulos más arriba ===
                doc.setFontSize(11);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.myText('INTERPRETACIÓN',{align: "center"},0,80);  // Subido de 100 a 80
                doc.setTextColor(109, 70, 96);
                doc.setFontSize(12);
                doc.setFont("Times-Bold");
                doc.myText('TEMPERAMENTO: '+texto1,{align: "center"},0,105);  // Subido de 130 a 105
                doc.setFontSize(11);
                doc.setFont("helvetica");
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.myText(texto2,{align: "center"},0,130);  // Subido de 160 a 130
                doc.setFontSize(10);
                doc.setFontType("normal");
                doc.setTextColor(0, 0, 0);
                doc.text(82,155, texto3, {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});  // Subido de 190 a 155
                
                // ================================================================
                // RECOMENDACIONES ESPECÍFICAS
                // ================================================================
            
                var yPosRecomendaciones = 280;
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(82, yPosRecomendaciones, "RECOMENDACIONES ESPECÍFICAS", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 16;
                doc.setFontType("normal");
                doc.setTextColor(0, 0, 0);
                if(ejex <= 10 && ejey <= 7) {
                doc.text(82, yPosRecomendaciones, "• Trabajo individual: Prefiere trabajar sólo, estable emocionalmente, meticuloso y organizado.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Maneja el estrés internamente, se auto-motiva.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Sigue órdenes con precisión y atención a detalles.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                }
                else if(ejex >= 12 && ejey <= 7) {
                doc.text(82, yPosRecomendaciones, "• Trabajo en grupo: Sociable y activo, colaborativo y empático.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Maneja bien el estrés en entornos grupales.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Sigue órdenes con flexibilidad, contribuyendo con ideas propias.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Socialización con compañeros: Muy sociable y enérgico, respetuoso y considerado.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• No se deja afectar por el estrés en la socialización.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                }
                else if(ejex >= 15 && ejey >= 12) {
                doc.text(82, yPosRecomendaciones, "• Liderazgo: Destaca como líder natural, toma decisiones rápidas y asume responsabilidades.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Motiva e inspira a su equipo con energía y confianza.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Maneja bien la presión y mantiene la calma en situaciones difíciles.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Comunicación: Directa y asertiva, expresa ideas con claridad y convicción.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Escucha activa, valora las opiniones de los demás.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                }
                else if(ejex <= 11 && ejey >= 12) {
                doc.text(82, yPosRecomendaciones, "• Trabajo analítico: Excelente para trabajos que requieren análisis y precisión.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Planificación estratégica y pensamiento reflexivo.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Capacidad para trabajar de forma autónoma y concentrada.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Estabilidad emocional: Mantiene la calma bajo presión, es tolerante y paciente.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Capacidad para resolver problemas de manera eficaz y serena.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                }
                else if(ejex === 12 && ejey === 12) {
                doc.text(82, yPosRecomendaciones, "• Versatilidad: Capacidad para adaptarse a diferentes roles y situaciones laborales.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Equilibrio entre habilidades sociales y capacidad de introspección.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Buena gestión emocional y flexibilidad en el trabajo en equipo.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                }
                else if(ejex >= 13 && ejex <= 14 && ejey >= 13 && ejey <= 14) {
                doc.text(82, yPosRecomendaciones, "• Perfil intermedio: Combina características de diferentes temperamentos.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Aprovecha tus fortalezas sociales y tu capacidad de análisis.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Busca un ambiente laboral que valore tanto la interacción como el trabajo individual.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                }
                else if(ejex >= 13 && ejex <= 14 && ejey <= 11) {
                doc.text(82, yPosRecomendaciones, "• Perfil intermedio: Combina extraversión moderada con estabilidad emocional variable.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Disfruta de la interacción social pero también valora la tranquilidad.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Flexible y adaptable a diferentes entornos laborales.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                }
                else if(ejex <= 12 && ejey >= 7 && ejey <= 11) {
                doc.text(82, yPosRecomendaciones, "• Perfil reservado: Prefiere la tranquilidad y el trabajo estructurado.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Buena capacidad de concentración y análisis detallado.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Estable emocionalmente, maneja bien la presión.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                }
                else {
                doc.text(82, yPosRecomendaciones, "• Tu perfil combina características de diferentes temperamentos.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Aprovecha tus fortalezas sociales y tu estabilidad emocional.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Busca un ambiente laboral que se adapte a tu estilo de trabajo.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Desarrolla habilidades de comunicación y trabajo en equipo.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                doc.text(82, yPosRecomendaciones, "• Mantén un equilibrio entre la vida personal y profesional.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
                yPosRecomendaciones += 15;
                }
                yPosRecomendaciones += 8;
                doc.setFontType("italic");
                doc.setTextColor(102, 102, 102);
                doc.text(82, yPosRecomendaciones, "Estas recomendaciones son orientativas y basadas en tu perfil de personalidad.", {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});

             // ================================================================
                // NUEVA PÁGINA - FACTORES DERIVADOS DEL MODELO EYSENCK
                // ================================================================
                doc.addPage();
                
                // Título de la página
                doc.setFontSize(14);
                doc.setFontType("bold");
                doc.setTextColor(109, 70, 96);
                doc.myText('FACTORES DERIVADOS DE PERSONALIDAD', {align: "center"}, 0, 100);
                
                doc.setFontSize(10);
                doc.setFontType("italic");
                doc.setTextColor(102, 102, 102);
                doc.myText('Basados en el modelo PEN de Eysenck', {align: "center"}, 0, 120);
                
                var yPos = 150;
                
                // 1. ESTILO DE LIDERAZGO
                doc.setFontSize(10);
                doc.setFontType("bold");
                doc.setTextColor(109, 70, 96);
                doc.text(82, yPos, "1. ESTILO DE LIDERAZGO:", {maxWidth: 445});
                yPos += 16;
                doc.setFontType("normal");
                doc.setTextColor(0, 0, 0);
                var liderazgo = getEstiloLiderazgo(ejex, ejey);
                doc.text(82, yPos, liderazgo, {maxWidth: 445});
                yPos += 28;
                
                // 2. ESTILO DE COMUNICACIÓN
                doc.setFontType("bold");
                doc.setTextColor(109, 70, 96);
                doc.text(82, yPos, "2. ESTILO DE COMUNICACIÓN:", {maxWidth: 445});
                yPos += 16;
                doc.setFontType("normal");
                doc.setTextColor(0, 0, 0);
                var comunicacion = getEstiloComunicacion(ejex, ejey);
                doc.text(82, yPos, comunicacion, {maxWidth: 445});
                yPos += 28;
                
                // 3. MANEJO DEL ESTRÉS
                doc.setFontType("bold");
                doc.setTextColor(109, 70, 96);
                doc.text(82, yPos, "3. MANEJO DEL ESTRÉS:", {maxWidth: 445});
                yPos += 16;
                doc.setFontType("normal");
                doc.setTextColor(0, 0, 0);
                var manejoEstres = getManejoEstres(ejex, ejey);
                doc.text(82, yPos, manejoEstres, {maxWidth: 445});
                yPos += 28;
                
                // 4. INTELIGENCIA EMOCIONAL
                doc.setFontType("bold");
                doc.setTextColor(109, 70, 96);
                doc.text(82, yPos, "4. INTELIGENCIA EMOCIONAL:", {maxWidth: 445});
                yPos += 16;
                doc.setFontType("normal");
                doc.setTextColor(0, 0, 0);
                var intEmocional = getInteligenciaEmocional(ejex, ejey);
                doc.text(82, yPos, intEmocional, {maxWidth: 445});
                yPos += 28;
                
                // 5. AMBIENTE LABORAL IDEAL
                doc.setFontType("bold");
                doc.setTextColor(109, 70, 96);
                doc.text(82, yPos, "5. AMBIENTE LABORAL IDEAL:", {maxWidth: 445});
                yPos += 16;
                doc.setFontType("normal");
                doc.setTextColor(0, 0, 0);
                var ambiente = getAmbienteLaboral(ejex, ejey);
                doc.text(82, yPos, ambiente, {maxWidth: 445});
                yPos += 28;
                
                // 6. RESILIENCIA
                doc.setFontType("bold");
                doc.setTextColor(109, 70, 96);
                doc.text(82, yPos, "6. RESILIENCIA:", {maxWidth: 445});
                yPos += 16;
                doc.setFontType("normal");
                doc.setTextColor(0, 0, 0);
                var resiliencia = getResiliencia(ejex, ejey);
                doc.text(82, yPos, resiliencia, {maxWidth: 445});
                yPos += 28;
                
                // 7. TOMA DE DECISIONES
                doc.setFontType("bold");
                doc.setTextColor(109, 70, 96);
                doc.text(82, yPos, "7. TOMA DE DECISIONES:", {maxWidth: 445});
                yPos += 16;
                doc.setFontType("normal");
                doc.setTextColor(0, 0, 0);
                var decisiones = getTomaDecisiones(ejex, ejey);
                doc.text(82, yPos, decisiones, {maxWidth: 445});
                yPos += 28;
                
                // 8. ESTILO DE APRENDIZAJE
                doc.setFontType("bold");
                doc.setTextColor(109, 70, 96);
                doc.text(82, yPos, "8. ESTILO DE APRENDIZAJE:", {maxWidth: 445});
                yPos += 16;
                doc.setFontType("normal");
                doc.setTextColor(0, 0, 0);
                var aprendizaje = getEstiloAprendizaje(ejex, ejey);
                doc.text(82, yPos, aprendizaje, {maxWidth: 445});
                yPos += 35;
                
                // Línea separadora
                doc.setDrawColor(109, 70, 96);
                doc.setLineWidth(0.5);
                doc.line(82, yPos, 527, yPos);
                yPos += 16;
                
                // Nota final
                doc.setFontSize(7);
                doc.setFontType("italic");
                doc.setTextColor(102, 102, 102);
                doc.text(82, yPos, "Nota: Estos factores son derivados del modelo PEN de Eysenck y proporcionan una visión complementaria", {maxWidth: 445});
                yPos += 10;
                doc.text(82, yPos, "al temperamento principal. Cada persona es única y estos resultados son orientativos.", {maxWidth: 445});
                
            } else {
                // ================================================================
                // PRUEBA ANULADA
                // ================================================================
                doc.setFontSize(12);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.myText('INTERPRETACIÓN',{align: "center"},0,80);
                doc.setTextColor(109, 70, 96);
                doc.setFontSize(12);
                doc.setFont("Times-Bold");
                doc.myText('PRUEBA ANULADA',{align: "center"},0,110);
                doc.setFont("helvetica");
                doc.setFontSize(10);
                doc.setFontType("normal");
                doc.setTextColor(0, 0, 0);
                doc.myText('Se puede inferir la presencia de rasgos tendientes a ocultar la autoimagen real.',{align: "center"},0,140);
            }

            doc.save(Nombre+'.pdf'); 
        })
        $(document).on('click', '.task-delete3', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_empleado = $(element).attr('taskId11');
            document.getElementById("delete_id").value = (id_empleado);
            const nombre = $(element).attr('taskId1');
            $('#nombre_delete').html(nombre);
            $("#costumModal4").modal("show");
            $(".delete").on('click', function(event) { 
                const eliminar = $('#delete_id').val();
                $.ajax({
                    type: "post",
                    url: "../eliminarbdg.php",
                    data: "id_eysenck=" + eliminar,
                    success: function(response) {
                        fetchTasks3();
                        $('#costumModal4').modal('hide'); 
                    }
                });
            }); 
        });
        fetchTasks3();
        function fetchTasks3() {
            $.ajax({
                type: "post",
                url: "../tasks51.php",
                success: function(response) {
                const tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                          <tr taskId="${task.id}" taskId1="${task.Nombre}" taskId2="${task.Cedula}" taskId3="${task.Empresa}" taskId4="${task.Sede}" taskId5="${task.Cargo}" taskId6="${task.Edad}" taskId7="${task.Genero}" taskId8="${task.ejex}" taskId9="${task.ejey}" taskId10="${task.Veracidad}" taskId11="${task.Codigo}">
                              <td id="td" style="padding:10px" width="6%"><button class="task-item" data-title="visualizar"><img src="https://www.cedisalud.com.co/imagine/pdf.png" width="30" height="30"/></button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Nombre}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Cedula}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Empresa}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Sede}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Cargo}</button></td>
                              <td id="td" style="text-align:right!important">${task.Fecha_registro}</td>
                              <td id="borderout" width="6%"><button class="task-download3" data-title="Descargar"><span class="fa fa-cloud-download"></span></button></td>
                              <td id="borderout" width="6%"><button class="task-delete3" data-title="Eliminar"><span class="fa fa-trash"></span></button></td>
                          </tr>`
                    });
                $('#tasks3').html(template);
                }
            });
        };

        $(document).on('click', '.task-download4', (e) => {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const Nombre = $(element).attr('taskId1');
            const Cedula = $(element).attr('taskId2');
            const Empresa = $(element).attr('taskId3');
            const Sede = $(element).attr('taskId4');
            const Cargo = $(element).attr('taskId5');
            const Edad = $(element).attr('taskId6');
            const Genero = $(element).attr('taskId7');
            const Estado = $(element).attr('taskId8');
            const Items_ = $(element).attr('taskId9');
            var Item = parseInt(Items_);

            var input = [Item],
            data = [],
            categories = [];
            $.each(input, function(index, value){
            var color;
            if (value <= 6) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#00ff01'],[1, '#03ca04']]};
            else if (value >= 7 && value <= 8) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#eae616']]};
            else if (value >= 9 && value <= 24) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fa0e0e'],[1, '#d60d0d']]};
            data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
            });

            Highcharts.chart('grafica4', {
            chart: {
            type: 'bar',
            height:2000,
            width:2000,
            padding:0,
            margin:0
            },
            title: {
                    text: ''
            },
            xAxis: {
                title: {
                    text: ''
                },
                categories: [''],
            },
            yAxis: {
                title: {
                    text: ''
                },
                min:0, minRange:24, maxPadding:0, 
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
            
            var texto = '';
            if(Item <= 6) {
                var texto = 'Sueño normal'; 
            }
            if(Item >= 7 && Item <= 8) {
                var texto = 'Somnolencia promedio';
            }
            if(Item >= 9 && Item <= 24) {
                var texto = 'Somnolencia anormal (posiblemente patológica)';
            }
            
            var doc = new jsPDF('p', 'pt', 'letter');

            var img = new Image();
            img.src = '../imagine/logo_v3.jpg';
            doc.addImage(img, 'png', 200, 300, 200, 200);
            
            doc.setFont("helvetica");
            doc.setFontSize(16);
            doc.setFontType("bold");
            doc.setTextColor(90, 17, 91);
            doc.myText('EVALUACIÓN DE LA SOMNOLENCIA EPWORTH',{align: "center"},0,90);
            var columns = ['','','','',];
            var data = [['Nombre y Apellidos:',Nombre,'Cédula:',Cedula]];
            doc.autoTable(columns,data, {margin:{ top: 105, left:40 },  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
            columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 60}, 3: {fontStyle:'normal',columnWidth: 96, fillColor: [239, 237, 247]}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
            var columns = ['', '','','','',''];
            var data = [['Cargo:',Cargo,'Edad:',Edad,'Género:',Genero]];
            doc.autoTable(columns,data, {margin:{ top: 125, left:40 },  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
            columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 48}, 3: {fontStyle:'normal',columnWidth: 30, fillColor: [239, 237, 247],halign: 'center'}, 4: {columnWidth: 48}, 5: {fontStyle:'normal',columnWidth: 30, fillColor: [239, 237, 247], halign: 'center'}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
            var columns = ['','','',''];
            var data = [['Empresa:',Empresa,'Sede:',Sede]];
            doc.autoTable(columns,data, {margin:{ top: 145, left:40 },  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
            columnStyles: {0: {columnWidth: 70}, 1: {fontStyle:'normal',columnWidth: 200, fillColor: [239, 237, 247]}, 2: {columnWidth: 70}, 3: {fontStyle:'normal',columnWidth: 200, fillColor: [239, 237, 247]}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setFontType("normal");
            doc.setTextColor(102, 102, 102);
            doc.myText('PERFIL DEL EVALUADO',{align: "center"},0,115);
            doc.myText('RESULTADO',{align: "center"},0,220);
            doc.myText('VALORACIÓN PSICOLÓGICA',{align: "center"},0,310);
            var img = new Image()
            var imageData = $('#grafica4').highcharts().createCanvas();
            doc.addImage(imageData,'PNG', 130, 235, 330, 35);
            var columns = [''];
            var data = [['']];
            doc.autoTable(columns,data, {margin:{ top: 210, left: 120 },  
            styles: {font: 'times', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', valign:'middle', textColor:[255,255,255], lineWidth:0, lineColor:false, fillColor: false}, 
            drawRow:function(row,data) {row.height = 50;},
            columnStyles: {0: {columnWidth: 364, lineWidth:0.5, lineColor:[79, 84, 99]}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'times', fontStyle:'normal', halign: 'center', lineColor:[0,0,0], lineWidth:1, fillColor:false}});
            doc.setFontSize(10);
            doc.setFont("helvetica");
            doc.setTextColor(102, 102, 102);
            doc.text(130, 274, "0    1    2    3    4    5    6    7    8    9   10  11  12   13  14  15  16  17  18  19   20  21  22  23  24  25", {maxWidth: 460,align:'justify', lineHeightFactor: 1.5});
           
            if(Item <= 6) {
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            doc.setFontType("bold");
            doc.myText('SOMNOLENCIA NORMAL',{align: "center"},0,340);
            doc.setFontSize(10);
            doc.myText('No se requiere intervención médica, ya que este nivel de somnolencia se considera dentro del rango normal. ',{align: "center"},0,365);
            doc.text(40,395, "Posibles causas:                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("normal");
            doc.text(40,430, "Variaciones circadianas normales: nuestro cuerpo experimenta fluctuaciones naturales en los niveles de alerta a lo largo del día.                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,470, "Somnolencia transitoria por factores ambientales: situaciones relajantes como leer o ver televisión pueden inducir somnolencia.                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("bold");
            doc.text(40,520, "Riesgos Laborales:                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("normal");
            doc.text(40,550, "En general, el riesgo es bajo. Sin embargo, se debe tener precaución en tareas monótonas o que requieren alta vigilancia, como conducir vehículos u operar maquinaria entre otros                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("bold");
            doc.text(40,600, "Método de Control:                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("normal");
            doc.text(40,630, "Mantener una buena higiene del sueño: acostarse y levantarse a la misma hora, crear un ambiente propicio para el descanso.                                                                                                                                                                                ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,670, "Evitar el consumo excesivo de alcohol y cafeína.                                                                                                                                                                               ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,700, "Realizar pausas activas durante la jornada laboral para mejorar la concentración y el estado de alerta.                                                                                                                                                                                ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            }
            if(Item >= 7 && Item <= 8) {
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            doc.setFontType("bold");
            doc.myText('SOMNOLENCIA PROMEDIO',{align: "center"},0,340);
            doc.setFontSize(10);
            doc.setTextColor(0, 0, 0);
            doc.setFontType("bold");
            doc.myText('Se recomienda observar la situación y realizar cambios en el estilo de vida para mejorar la calidad del sueño.',{align: "center"},0,365);
            doc.text(40,395, "Posibles causas:                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("normal");
            doc.text(40,420, "Estrés.                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,450, "Falta de sueño o mala calidad del sueño.                                                                                                                                                                                ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,480, "Dieta inadecuada.                                                                                                                                                                                                               ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,510, "Falta de ejercicio físico.                                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("bold");
            doc.text(40,540, "Riesgos Laborales:                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("normal");
            doc.text(40,570, "Ligero aumento del riesgo de errores y accidentes.                                                                                                                                                                                                            ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,600, "Disminución de la productividad y la concentración.                                                                                                                                                                                                                                                               ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("bold");
            doc.text(40,630, "Método de Control:                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("normal");
            doc.text(40,660, "Mejorar los hábitos de sueño: establecer una rutina regular, evitar las pantallas antes de dormir.                                                                                                                                                                              ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,690, "Manejar el estrés: técnicas de relajación, meditación, ejercicio.                                                                                                                                                                               ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,720, "Realizar ejercicio físico regularmente.                                                                                                                                                                              ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,750, "Evaluar la necesidad de una siesta corta durante el día si es posible y permitido en el entorno laboral.                                                                                                                                                                            ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            }
            if(Item >= 9 && Item <= 24) {
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            doc.setFontType("bold");
            doc.myText('SOMNOLENCIA ANORMAL(Posiblemente Patológica)',{align: "center"},0,340);
            doc.setFontSize(10);
            doc.setTextColor(0, 0, 0);
            doc.setFontType("bold");
            doc.myText('Es crucial buscar atención médica de inmediato para identificar la causa de la somnolencia excesiva.',{align: "center"},0,365);
            doc.text(40,395, "Posibles causas:                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("normal");
            doc.text(40,420, "Trastornos del sueño: insomnio, apnea del sueño, narcolepsia, síndrome de piernas inquietas.                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,450, "Condiciones médicas: depresión, ansiedad, hipotiroidismo, enfermedades neurológicas.                                                                                                                                                                               ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,480, "Efectos secundarios de medicamentos.                                                                                                                                                                                                              ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("bold");
            doc.text(40,510, "Riesgos Laborales:                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("normal");
            doc.text(40,540, "Alto riesgo de accidentes laborales.                                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,570, "Deterioro significativo del rendimiento y la seguridad.                                                                                                                                                                                                                                                              ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,600, "Posible ausentismo laboral por la condición médica subyacente.                                                                                                                                                                                                                                                             ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("bold");
            doc.text(40,630, "Método de Control:                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontType("normal");
            doc.text(40,660, "Diagnóstico y tratamiento médico de la causa subyacente.                                                                                                                                                                             ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,690, "Ajustes en el lugar de trabajo según las recomendaciones médicas: cambio de horario, tareas menos riesgosas.                                                                                                                                                                            ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,720, "En casos graves, puede ser necesaria una baja laboral temporal.                                                                                                                                                                    ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            }
        
            const pageCount = doc.internal.getNumberOfPages();
            for(var i = 1; i <= pageCount; i++) {
            doc.setPage(i);
            var img = new Image();
            img.src = '../imagine/logo.jpg';
            doc.addImage(img, 'png',10,15,60,45);
            doc.setTextColor(153, 153, 153);
            doc.setFontSize(10);
            doc.text('Pág. ' + String(i) + ' de ' + String(pageCount),550,30,null,null,"left");
            doc.myText('CEDISALUD IPS -PBX (574) 444 66 04 - MEDELLIN-APARTADÓ',{align: "center"},-200,780);
            }
            doc.save('<?php echo $Nombre ?>.pdf'); 
        })
        $(document).on('click', '.task-delete4', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_empleado = $(element).attr('taskId11');
            document.getElementById("delete_id").value = (id_empleado);
            const nombre = $(element).attr('taskId1');
            $('#nombre_delete').html(nombre);
            $("#costumModal4").modal("show");
            $(".delete").on('click', function(event) { 
                const eliminar = $('#delete_id').val();
                $.ajax({
                    type: "post",
                    url: "../eliminarbdg.php",
                    data: "id_somnolencia=" + eliminar,
                    success: function(response) {
                        fetchTasks4();
                        $('#costumModal4').modal('hide'); 
                    }
                });
            }); 
        });
        fetchTasks4();
        function fetchTasks4() {
            $.ajax({
                type: "post",
                url: "../tasks52.php",
                success: function(response) {
                const tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                          <tr taskId="${task.id}" taskId1="${task.Nombre}" taskId2="${task.Cedula}" taskId3="${task.Empresa}" taskId4="${task.Sede}" taskId5="${task.Cargo}" taskId6="${task.Edad}" taskId7="${task.Genero}" taskId8="${task.Estado}" taskId9="${task.Items}" taskId11="${task.Codigo}">
                              <td id="td" style="padding:10px" width="6%"><button class="task-item" data-title="visualizar"><img src="https://www.cedisalud.com.co/imagine/pdf.png" width="30" height="30"/></button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Nombre}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Cedula}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Empresa}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Sede}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Cargo}</button></td>
                              <td id="td" style="text-align:right!important">${task.Fecha_registro}</td>
                              <td id="borderout" width="6%"><button class="task-download4" data-title="Descargar"><span class="fa fa-cloud-download"></span></button></td>
                              <td id="borderout" width="6%"><button class="task-delete4" data-title="Eliminar"><span class="fa fa-trash"></span></button></td>
                          </tr>`
                    });
                $('#tasks4').html(template);
                }
            });
        };
        
        $(document).on('click', '.task-download5', (e) => {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const Nombre = $(element).attr('taskId1');
            const Cedula = $(element).attr('taskId2');
            const Empresa = $(element).attr('taskId3');
            const Sede = $(element).attr('taskId4');
            const Cargo = $(element).attr('taskId5');
            const Edad = $(element).attr('taskId6');
            const Genero = $(element).attr('taskId7');
            const Estado = $(element).attr('taskId8');
            const Items_ = $(element).attr('taskId9');
            var Item = parseInt(Items_);
            var input = [Item],
            data = [],
            categories = [];
            $.each(input, function(index, value){
            var color;
            if (value <= 6) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#00ff01'],[1, '#03ca04']]};
            else if (value >= 7 && value <= 8) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#eae616']]};
            else if (value >= 9 && value <= 24) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fa0e0e'],[1, '#d60d0d']]};
            data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
            });

            Highcharts.chart('grafica5', {
            chart: {
            type: 'bar',
            height:2000,
            width:2000,
            padding:0,
            margin:0
            },
            title: {
                    text: ''
            },
            xAxis: {
                title: {
                    text: ''
                },
                categories: [''],
            },
            yAxis: {
                title: {
                    text: ''
                },
                min:0, minRange:24, maxPadding:0, 
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
            
            var texto = '';
            if(Item <= 6) {
                var texto = 'RIESGO BAJO'; 
            }
            if(Item >= 7 && Item <= 8) {
                var texto = 'RIESGO MODERADO';
            }
            if(Item >= 9 && Item <= 24) {
                var texto = 'ALTO RIESGO';
            }
    
            var doc = new jsPDF('p', 'pt', 'letter');

            var img = new Image();
            img.src = '../imagine/logo_v3.jpg';
            doc.addImage(img, 'png', 200, 300, 200, 200);
            
            doc.setFont("helvetica");
            doc.setFontSize(16);
            doc.setFontType("bold");
            doc.setTextColor(90, 17, 91);
            doc.myText('ENCUESTA DE SÍNTOMAS NEUROTÓXICOS Q16',{align: "center"},0,90);
            var columns = ['','','','',];
            var data = [['Nombre y Apellidos:',Nombre,'Cédula:',Cedula]];
            doc.autoTable(columns,data, {margin:{ top: 105, left:40 },  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
            columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 60}, 3: {fontStyle:'normal',columnWidth: 96, fillColor: [239, 237, 247]}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
            var columns = ['', '','','','',''];
            var data = [['Cargo:',Cargo,'Edad:',Edad,'Género:',Genero]];
            doc.autoTable(columns,data, {margin:{ top: 125, left:40 },  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
            columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 48}, 3: {fontStyle:'normal',columnWidth: 30, fillColor: [239, 237, 247],halign: 'center'}, 4: {columnWidth: 48}, 5: {fontStyle:'normal',columnWidth: 30, fillColor: [239, 237, 247], halign: 'center'}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
            var columns = ['','','',''];
            var data = [['Empresa:',Empresa,'Sede:',Sede]];
            doc.autoTable(columns,data, {margin:{ top: 145, left:40 },  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
            columnStyles: {0: {columnWidth: 70}, 1: {fontStyle:'normal',columnWidth: 200, fillColor: [239, 237, 247]}, 2: {columnWidth: 70}, 3: {fontStyle:'normal',columnWidth: 200, fillColor: [239, 237, 247]}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setFontType("normal");
            doc.setTextColor(102, 102, 102);
            doc.myText('PERFIL DEL EVALUADO',{align: "center"},0,110);
            doc.myText('RESULTADO',{align: "center"},0,220);
            doc.myText('VALORACIÓN PSICOLÓGICA',{align: "center"},0,310);
            var img = new Image()
            var imageData = $('#grafica5').highcharts().createCanvas();
            doc.addImage(imageData,'PNG', 200, 235, 330, 35);
            var columns = [''];
            var data = [['']];
            doc.autoTable(columns,data, {margin:{ top: 210, left: 190 },  
            styles: {font: 'times', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', valign:'middle', textColor:[255,255,255], lineWidth:0, lineColor:false, fillColor: false}, 
            drawRow:function(row,data) {row.height = 50;},
            columnStyles: {0: {columnWidth: 240, lineWidth:0.5, lineColor:[79, 84, 99]}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'times', fontStyle:'normal', halign: 'center', lineColor:[0,0,0], lineWidth:1, fillColor:false}});
            doc.setFontSize(10);
            doc.setFont("helvetica");
            doc.setTextColor(102, 102, 102);
            doc.text(200, 274, "0    1    2    3    4    5    6    7    8    9   10  11  12   13  14  15  16", {maxWidth: 460,align:'justify', lineHeightFactor: 1.5});
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            doc.setFontType("bold");
            doc.myText(texto,{align: "center"},0,340);
            
            if(Item <= 5) {
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            doc.setFontType("bold");
            doc.myText('RIESGO BAJO',{align: "center"},0,340);
            doc.setFontSize(10);
            doc.text(40,365, "No se evidencia síntomas neurotóxicos significativos en este momento.  El riesgo de afectación neurotóxica se considera bajo; lo cual significa que, en este momento, es poco problable si se presenta algún síntomas, estén relacionados con la exposición a sustancias neurotóxicas.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            }
            if(Item >= 6 && Item <= 10) {
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            doc.setFontType("bold");
            doc.myText('RIESGO MODERADO',{align: "center"},0,340);
            doc.setFontSize(10);
            doc.text(40,365, "Sugieren una posible afectación neurotóxica leve, principalmente en el área de la memoria y la concentración.  Sería recomendable consultar con un médico para una evaluación más exhaustiva y descartar otras posibles causas, realizar rotación en área de trabajo con menor exposición a bencenos y otros aromáticos, revisar condiciones ambientales como intercambio de aire en zonas de trabajo y uso de elementos de protección.                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            }
            if(Item >= 11) {
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            doc.setFontType("bold");
            doc.myText('ALTO RIESGO',{align: "center"},0,340);
            doc.setFontSize(10);
            doc.text(40,365, "Tus respuestas indican la presencia de varios síntomas neurotóxicos con una frecuencia considerable.  Es fundamental en la brevedad pra realizar exámenes complementarios, revisar condiciones ambientales en el intecambio de aire, uso de elementos de protección y realizar pruebas complementarias como: hidrocarburos cuantitativos:FENOL(Benceno); ACIDO HIPURICO(Tolueno); ACIDO METIL HIPURICO(Xileno); P-CRESOL(Complejo BTX).                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            }
        
            const pageCount = doc.internal.getNumberOfPages();
            for(var i = 1; i <= pageCount; i++) {
            doc.setPage(i);
            var img = new Image();
            img.src = '../imagine/logo.jpg';
            doc.addImage(img, 'png',10,15,60,45);
            doc.setTextColor(153, 153, 153);
            doc.setFontSize(10);
            doc.text('Pág. ' + String(i) + ' de ' + String(pageCount),550,30,null,null,"left");
            doc.myText('CEDISALUD IPS -PBX (574) 444 66 04 - MEDELLIN-APARTADÓ',{align: "center"},-200,780);
            }
    
            doc.save('neurotoxico.pdf'); 
        })
        $(document).on('click', '.task-delete5', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_empleado = $(element).attr('taskId11');
            document.getElementById("delete_id").value = (id_empleado);
            const nombre = $(element).attr('taskId1');
            $('#nombre_delete').html(nombre);
            $("#costumModal4").modal("show");
            $(".delete").on('click', function(event) { 
                const eliminar = $('#delete_id').val();
                $.ajax({
                    type: "post",
                    url: "../eliminarbdg.php",
                    data: "id_neurotoxicos=" + eliminar,
                    success: function(response) {
                        fetchTasks5();
                        $('#costumModal4').modal('hide'); 
                    }
                });
            }); 
        });
        fetchTasks5();
        function fetchTasks5() {
            $.ajax({
                type: "post",
                url: "../tasks53.php",
                success: function(response) {
                const tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                          <tr taskId="${task.id}" taskId1="${task.Nombre}" taskId2="${task.Cedula}" taskId3="${task.Empresa}" taskId4="${task.Sede}" taskId5="${task.Cargo}" taskId6="${task.Edad}" taskId7="${task.Genero}" taskId8="${task.Estado}" taskId9="${task.Items}" taskId11="${task.Codigo}">
                              <td id="td" style="padding:10px" width="6%"><button class="task-item" data-title="visualizar"><img src="https://www.cedisalud.com.co/imagine/pdf.png" width="30" height="30"/></button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Nombre}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Cedula}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Empresa}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Sede}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Cargo}</button></td>
                              <td id="td" style="text-align:right!important">${task.Fecha_registro}</td>
                              <td id="borderout" width="6%"><button class="task-download5" data-title="Descargar"><span class="fa fa-cloud-download"></span></button></td>
                              <td id="borderout" width="6%"><button class="task-delete5" data-title="Eliminar"><span class="fa fa-trash"></span></button></td>
                          </tr>`
                    });
                $('#tasks5').html(template);
                }
            });
        };

        
        
        $(document).on('click', '.task-download6', (e) => {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const Nombre = $(element).attr('taskId1');
            const Cedula = $(element).attr('taskId2');
            const Empresa = $(element).attr('taskId3');
            const Sede = $(element).attr('taskId4');
            const Cargo = $(element).attr('taskId5');
            const Edad = $(element).attr('taskId6');
            const Genero = $(element).attr('taskId7');
            const Estado = $(element).attr('taskId8');
            const Items_ = $(element).attr('taskId9');
            const Value = $(element).attr('taskId10');
            var Item = parseInt(Items_);
            var valor = parseInt(Value);
            var input = [Item],
            data = [],
            categories = [];
            $.each(input, function(index, value){
            var color;
            if (valor == 1) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#00ff01'],[1, '#03ca04']]};
            else if (valor == 2) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#eae616']]};
            else if (valor == 3) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fa0e0e'],[1, '#d60d0d']]};
            data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
            });

            Highcharts.chart('grafica6', {
            chart: {
            type: 'bar',
            height:200,
            width:200,
            padding:0,
            margin:0
            },
            title: {
                    text: ''
            },
            xAxis: {
                title: {
                    text: ''
                },
                categories: [''],
            },
            yAxis: {
                title: {
                    text: ''
                },
                min:0, minRange:8, maxPadding:0, 
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
            var texto = '';
            if(Item <= 6) {
                var texto = 'RIESGO BAJO'; 
            }
            if(Item >= 7 && Item <= 8) {
                var texto = 'RIESGO MODERADO';
            }
            if(Item >= 9 && Item <= 24) {
                var texto = 'ALTO RIESGO';
            }

            var doc = new jsPDF('p', 'pt', 'letter');
            
            var img = new Image();
            img.src = '../imagine/logo_v3.jpg';
            doc.addImage(img, 'png', 200, 300, 200, 200);
            
            doc.setFont("helvetica");
            doc.setFontSize(13);
            doc.setFontType("bold");
            doc.setTextColor(90, 17, 91);
            doc.myText('Evaluación de Riesgo de Apnea Obstructiva del Sueño (AOS)',{align: "center"},0,90);
            doc.myText('Cuestionario STOP-BANG',{align: "center"},0,110);
            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            var columns = ['', '','','','',''];
            var data = [['Nombre y Apellidos:',Nombre,'Edad:',Edad+' años','Sexo:',Genero]];
            doc.autoTable(columns,data, {margin:{ top: 140, left:40 },  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
            columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 40}, 3: {fontStyle:'normal',columnWidth: 58, fillColor: [239, 237, 247]}, 4: {columnWidth: 40}, 5: {fontStyle:'normal',columnWidth: 18, fillColor: [239, 237, 247]}},
            bodyStyles:{textColor:[0,0,0], fontSize:9, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
            var columns = ['', '','','','',''];
            var data = [['Estado civil:',Estado,'Empresa:',Estado+' '+Sede,'Cargo:',Cargo]];
            doc.autoTable(columns,data, {margin:{ top: 160, left:40 },  
            styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
            columnStyles: {0: {columnWidth: 70}, 1: {fontStyle:'normal',columnWidth: 80, fillColor: [239, 237, 247]}, 2: {columnWidth: 55}, 3: {fontStyle:'normal',columnWidth: 145, fillColor: [239, 237, 247]}, 4: {columnWidth: 45}, 5: {fontStyle:'normal',columnWidth: 145, fillColor: [239, 237, 247]}},
            bodyStyles:{textColor:[0,0,0], fontSize:9, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
            doc.text(40,150, "Perfil del Evaluado                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
           
            doc.setTextColor(0,0,0);
            doc.text(40,240, "Introducción al Cuestionario STOP-BANG                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.setFontSize(11);
            doc.setTextColor(0,0,0);
            doc.setFontType("normal");
            doc.text(40,270, "El cuestionario STOP-BANG es una herramienta de cribado (screening) simple, validada y ampliamente utilizada a nivel mundial para la evaluación rápida del riesgo de padecer Apnea Obstructiva del Sueño (AOS) en la población general.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,330, "La prueba consta de ocho preguntas dicotómicas (Sí/No) que evalúan los principales factores de riesgo y síntomas clínicos asociados a la AOS. Las primeras cuatro preguntas (S-T-O-P) se centran en los síntomas y signos del sueño, mientras que las últimas cuatro (B-A-N-G) evalúan características demográficas y factores físicos.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,410, "•	S (Snoring): Evalúa si la persona presenta Ronquidos fuertes.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,430, "•	T (Tiredness): Evalúa si la persona experimenta Cansancio o somnolencia diurna.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,450, "•	O (Observed Apnea): Evalúa si se han Observado Apneas o pausas respiratorias durante el sueño.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,470, "•	P (Pressure): Evalúa si la persona padece Presión arterial alta o hipertensión.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,500, "Los siguientes cuatro factores son características demográficas y físicas:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,530, "•	B (BMI): Evalúa si el Índice de Masa Corporal (IMC) es mayor a 35                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,550, "•	A (Age): Evalúa si la Edad es mayor a 50 años.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,570, "•	N (Neck Circuference): Evalúa si la Circunferencia del cuello es grande mayor a 43 en hombres o 41 cm en mujeres.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,610, "•	G (Gender): Evalúa si la persona es de Género masculino o femenino.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(60,640, "El factor clave de limitación de la capacidad laboral asociado al riesgo de APNEA OBSTRUCTIVA DEL SUEÑO es la somnolencia diurna excesiva, que afecta directamente la atención, el tiempo de reacción y la toma de decisiones, elevando significativamente el riesgo de accidentes.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
          
            doc.addPage();
        
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setFontType("bold");
            doc.myText('Resultado',{align: "center"},0,110);
            doc.myText('Valoración Psicológica ',{align: "center"},0,230);
            
            var img = new Image()
            var imageData = $('#grafica6').highcharts().createCanvas();
            doc.addImage(imageData,'PNG', 240, 135, 110, 35);
            var columns = [''];
            var data = [['']];
            doc.autoTable(columns,data, {margin:{ top: 110, left: 230 },  
            styles: {font: 'times', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', valign:'middle', textColor:[255,255,255], lineWidth:0, lineColor:false, fillColor: false}, 
            drawRow:function(row,data) {row.height = 50;},
            columnStyles: {0: {columnWidth: 140, lineWidth:0.5, lineColor:[79, 84, 99]}},
            bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'times', fontStyle:'normal', halign: 'center', lineColor:[0,0,0], lineWidth:1, fillColor:false}});
            doc.setFontSize(10);
            doc.setFont("helvetica");
            doc.setTextColor(102, 102, 102);
            doc.text(240, 174, "0    1    2    3    4    5    6    7    8", {maxWidth: 460,align:'justify', lineHeightFactor: 1.5});
            
            if(Item == 1) {
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setTextColor(0, 153, 0);
            doc.setFontType("bold");
            doc.myText('RIESGO BAJO',{align: "center"},0,260);
            doc.setTextColor(0,0,0);
            doc.setFontSize(10);
            doc.setFontType("normal");
            doc.text(40,300, "Riesgo Bajo de APNEA OBSTRUCTIVA DEL SUEÑO (0 - 2 preguntas 'Sí'): La capacidad laboral NO se considera limitación. El trabajador puede ser considerado SIN RESTRICCIONES para todo tipo de tareas, incluyendo las críticas, ya que el riesgo de APNEA OBSTRUCTIVA DEL SUEÑO es mínimo.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,370, "El enfoque del plan de acción es la Vigilancia y Educación General, que incluye fomentar la Educación en Higiene del Sueño, Campañas de Promoción de Hábitos Saludables y el monitoreo personal de síntomas para prevenir futuros riesgos.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            }
            if(Item == 2) {
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setTextColor(179, 176, 0);
            doc.setFontType("bold");
            doc.myText('RIESGO MODERADO',{align: "center"},0,260);
            doc.setTextColor(0,0,0);
            doc.setFontSize(10);
            doc.setFontType("normal");
            doc.text(40,300, "Sugieren una posible afectación neurotóxica leve, principalmente en el área de la memoria y la concentración.  Sería recomendable consultar con un médico para una evaluación más exhaustiva y descartar otras posibles causas, realizar rotación en área de trabajo con menor exposición a bencenos y otros aromáticos, revisar condiciones ambientales como intercambio de aire en zonas de trabajo y uso de elementos de protección.                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,370, "En Puestos Críticos (Alto Riesgo), el médico ocupacional debe profundizar la evaluación. Si se detecta somnolencia significativa o una alteración documentada de la calidad del sueño, y considerar CON RESTRICCIONES TEMPORALES hasta realizar estudios adicionales. El plan de acción incluye la Evaluación Médica Ocupacional, el Análisis del Puesto de Trabajo y la implementación de Intervenciones de Estilo de Vida.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            }
            if(Item == 3) {
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setTextColor(225, 5, 5);
            doc.setFontType("bold");
            doc.myText('ALTO RIESGO',{align: "center"},0,260);
            doc.setTextColor(0,0,0);
            doc.setFontSize(10);
            doc.setFontType("normal");
            doc.text(40,300, "Riesgo Alto de APNEA OBSTRUCTIVA DEL SUEÑO (5 - 8 preguntas 'Sí' La capacidad requiere RESTRICCION TEMPORAL para tareas críticas hasta recibir tratamiento. Un riesgo alto es una fuerte indicación de APNEA OBSTRUCTIVA DEL SUEÑO, una condición que sin tratamiento pone en riesgo la seguridad. Para Puestos Críticos (Alto Riesgo), el trabajador es considerado CON RESTRICCION TEMPORAL para (ej. conducir, operar maquinaria, trabajo nocturno o en alturas) hasta que se realice la Polisomnografía y se inicie el tratamiento efectivo (ej. CPAP). Para Puestos NO Críticos, puede ser considerado CON RESTRICCIONES TEMPORALES (ej. evitar trabajo en turnos rotativos o nocturnos, evitar tareas monótonas).                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            doc.text(40,420, "El plan de acción exige una Referencia Urgente a Especialista del Sueño, la Restricción o Reubicación Inmediata de tareas críticas, la implementación de Políticas de Fatiga y el Control de la Aptitud Laboral condicionado a la adherencia documentada al tratamiento. La capacidad laboral solo se restablece plenamente para tareas críticas cuando se ha confirmado el diagnóstico de APNEA OBSTRUCTIVA DEL SUEÑO y el trabajador ha demostrado una adherencia exitosa y documentada al tratamiento, garantizando la restauración de la vigilancia.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
            }
        
            const pageCount = doc.internal.getNumberOfPages();
            for(var i = 1; i <= pageCount; i++) {
            doc.setPage(i);
            var img = new Image();
            img.src = '../imagine/logo.jpg';
            doc.addImage(img, 'png',10,15,60,45);
            doc.setTextColor(153, 153, 153);
            doc.setFontSize(10);
            doc.text('Pág. ' + String(i) + ' de ' + String(pageCount),550,30,null,null,"left");
            doc.myText('CEDISALUD IPS -PBX (574) 444 66 04 - MEDELLIN-APARTADÓ',{align: "center"},-200,780);
            }
            
            doc.save('stop_bang.pdf'); 
        })
        $(document).on('click', '.task-delete6', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_empleado = $(element).attr('taskId11');
            document.getElementById("delete_id").value = (id_empleado);
            const nombre = $(element).attr('taskId1');
            $('#nombre_delete').html(nombre);
            $("#costumModal4").modal("show");
            $(".delete").on('click', function(event) { 
                const eliminar = $('#delete_id').val();
                $.ajax({
                    type: "post",
                    url: "../eliminarbdg.php",
                    data: "id_stop_bang=" + eliminar,
                    success: function(response) {
                        fetchTasks6();
                        $('#costumModal4').modal('hide'); 
                    }
                });
            }); 
        });
        fetchTasks6();
        function fetchTasks6() {
            $.ajax({
                type: "post",
                url: "../tasks55.php",
                success: function(response) {
                const tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template += `
                          <tr taskId="${task.id}" taskId1="${task.Nombre}" taskId2="${task.Cedula}" taskId3="${task.Empresa}" taskId4="${task.Sede}" taskId5="${task.Cargo}" taskId6="${task.Edad}" taskId7="${task.Genero}" taskId8="${task.Estado}" taskId9="${task.Items}" taskId10="${task.Value}" taskId11="${task.Codigo}" >
                              <td id="td" style="padding:10px" width="6%"><button class="task-item" data-title="visualizar"><img src="https://www.cedisalud.com.co/imagine/pdf.png" width="30" height="30"/></button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Nombre}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Cedula}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Empresa}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Sede}</button></td>
                              <td id="td"><button class="task-item" data-title="visualizar" style="text-align:left!important">${task.Cargo}</button></td>
                              <td id="td" style="text-align:right!important">${task.Fecha_registro}</td>
                              <td id="borderout" width="6%"><button class="task-download6" data-title="Descargar"><span class="fa fa-cloud-download"></span></button></td>
                              <td id="borderout" width="6%"><button class="task-delete6" data-title="Eliminar"><span class="fa fa-trash"></span></button></td>
                          </tr>`
                    });
                $('#tasks6').html(template);
                }
            });
        };

        
    }) 
</script>
</body>
</html>
