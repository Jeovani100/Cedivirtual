<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type"content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible"content="IE=edge">
<meta name="viewport"content="width=device-width, initial-scale=1">
<title>Agenda de citas</title>
<link rel="icon"type="imagen/png"href="../imagine/boton_logo.png"/>
<link href="<?php  echo RUTA_CSS ?>font-awesome.css"rel="stylesheet"> 
<link href="<?php  echo RUTA_CSS ?>bootstrap.min.css"rel="stylesheet">
<?php 
    //error_reporting(0);
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion4.inc.php';
    include_once 'app/redireccion.inc.php';
    include_once 'app/repositorioadmin.inc.php';
    include_once 'app/validadorloginusuario.inc.php';
    include_once 'app/admin.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
     function generarCodigoAleatorio($longitud = 1) {
        $caracteres = '1234567890abcdefghijklmnopqrstuvwxyz';
        $Codigo = '';
        for ($i = 0; $i < $longitud; $i++) {
            $Codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $Codigo;
    }
    $Codigo = generarCodigoAleatorio(1);
    if (!controlsesion4::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGIN_AGENDA);}
    conexion :: abrir_conexion();
    $clave = $_SESSION['Clave'];
    $sql = "SELECT * FROM reg_agenda WHERE Clave = '$clave'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $id = $row['id'];
    $Clave = $row['Clave'];
    $Usuario = $row['Usuario'];
    $Razon = $row['Razon'];
    $Sector=$row["Sector"];
    $Nombre = $row['Nombre'];
    $Sector = $row['Sector'];
    $Email = $row['Email'];
    $Observacionp = nl2br($row['Observacion']);
    $Codigo_ = $row['Codigo'];
    $Activo = $row['Activo'];
    if($Codigo_) {
    $sql_ids = "SELECT id FROM reg_agenda WHERE Codigo = '$Codigo_'";
    $resultado_ids = $mysqli->query($sql_ids);
    $ids_array = array();
    $registro = '0';
    while ($row_id = mysqli_fetch_array($resultado_ids)) {
        $ids_array[] = $row_id['id'];
    }
    if (empty($ids_array)) {
        echo json_encode(array());
        exit;
    }
    $ids_string = implode(',', $ids_array);
    $sql = "SELECT COUNT(*) as total FROM profesiograma_agenda WHERE id_admin IN ($ids_string)";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $registro = $resultado['total'];
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
        color: #000000;
    	background: #eaeaea;
        font-family: verdana;
        padding: 0px !important;
        margin: 0px !important;
        font-size:16px;
        line-height: 2.2rem;
    }
    .load {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999!important;
        background: url('../imagine/carga6.gif') 50% 50% no-repeat #ffffff;
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
    /* ::-webkit-scrollbar {
        display: none;
    }*/
    .todoapp,
    .todoapp2 {
    	 background:#ffffff;
    	 padding:0;
    	 border-radius:16px;
    	 margin-bottom:3em;
    	 box-shadow: 0 8px 4px 0 rgba(0, 0, 0, 0.3), 0 25px 50px 0 rgba(0, 0, 0, 0.1);
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
    .todoapp h1 {
    	position: absolute;
    	top: -105px;
    	width: 100%;
    	font-size: 60px;
    	font-weight: 100;
    	text-align: center;
    	color: rgba(175, 47, 47, 0.35);
    	-webkit-text-rendering: optimizeLegibility;
    	-moz-text-rendering: optimizeLegibility;
    	text-rendering: optimizeLegibility;
    }
    .new-todo  {
    	position: relative;
    	margin: 0;
    	width: 100%;
    	height:4em;
    	font-size: 13px;
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
    .main {
    	position: relative;
    	z-index: 2;
    	border-top: 1px solid #e6e6e6;
    }
    .toggle-all {
    	text-align: center;
    	border: none; /* Mobile Safari */
    	opacity: 0;
    	position: absolute;
    }
    .toggle-all + label {
    	width: 60px;
    	height: 34px;
    	font-size: 0;
    	position: absolute;
    	top: -52px;
    	left: -13px;
    	-webkit-transform: rotate(90deg);
    	transform: rotate(90deg);
    }
    .toggle-all:checked + label:before {
    	color: #737373;
    }
    #clear-completed,
    html #clear-completed:active {
    	float: right;
    	position: relative;
    	text-decoration: none;
    	cursor: pointer;
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
    input[type="checkbox"] { 
        display:inline-block;
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
    }
    .checkbox label {
        display: inline-block;
        position: relative;
        float:center!important;
        margin-left:10px!important;
    }
    #check0::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 26px;
        height: 26px;
        left: 0;
        background-color:transparent;
        border: 2px solid #000000;
    }
    #check0::after {
        display: inline-block;
        position: absolute;
        left: 1px;
        top:2px;
        font-size: 25px!important;
    }
      #check2::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 20px;
        height: 20px;
        background-color:transparent;
        border:1px solid #742574;
        border-radius:18px;
        text-align:center;
        margin-top:-0.2em;
        margin-left:0em;
    }
    #check2::after {
        display: inline-block;
        position: absolute;
        font-size:26px!important;
        color:#742574;
        margin-top:-6px;
        margin-left:0em;
    }
    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
        color:#00cc00;
    }
    .footer {
    	color: #777;
    	padding: 10px 15px ;
    	height: 40px;
    	text-align: center;
    	border-top: 1px solid #e6e6e6;
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
    select > option:not(:first-of-type) {
      color:#4d4d4d;
      font-size:14px;
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
    #boton:after,
    #boton2:after,
    #boton3:after,
    #boton4:after {
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
    #boton,
    #boton2,
    #boton3,
    #boton4 {
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
        #costumModal .modal-lg,
        #costumModal2 .modal-lg,
        #costumModal3 .modal-m, 
        #costumModal4 .modal-m, 
        #costumModal5 .modal-m, 
        #costumModal6 .modal-m, 
        #costumModal7 .modal-m, 
        #costumModal8 .modal-m, 
        #costumModal9 .modal-m, 
        #costumModal10 .modal-m,
        #costumModal11 .modal-m,
        #costumModal12 .modal-m,
        #costumModal13 .modal-m,
        #costumModal14 .modal-m,
        #costumModal15 .modal-m,
        #costumModal16 .modal-m {
            margin:0!important;
            padding:0!important;
            width:100%!important;
        }
    }
    
    .nuevo2 {
        width:10em;
        height:29px;
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
    .nuevo {
        width:10em;
        height: 29px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:#eaeaea;
        color: #666666;
        border: 1px solid #f58634;
        font-size:13px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
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
    .fullscreen-modal .modal-dialog {
        margin: 0;
        margin-right: auto;
        margin-left: auto;
        width:100%;
        height:100%;
        text-align:center;
    }
    .sedes td {
        padding:0.4em!important;
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
    }
 /* ================================================================
   POPUP CON ESTILO DE MODAL - AJUSTADO A TU HTML
   ================================================================ */

/* Contenedor principal del popup */
.popup {
    position: fixed !important;
    top: 50% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;
    width: 40em !important;
    max-width: 95vw !important;
    max-height: 90vh !important;
    background: #ffffff !important;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15) !important;
    border: none !important;
    border-radius: 16px !important;
    box-sizing: border-box !important;
    z-index:4!important;
    color: #1a1a1a !important;
    font-size: 14px !important;
    line-height: 1.8 !important;
    /* 🔥 Estructura flexible: altura automática según contenido */
    flex-direction: column !important;
    overflow: hidden !important;
    height: auto !important; /* ← Altura automática según contenido */
    min-height: 150px !important;
}

/* ================================================================
   HEADER - Usando modal-header (tu clase real)
   ================================================================ */
.popup .modal-header {
     background: #fcf6fc !important; /* ← Color rosado/gris */
    padding: 10px 15px !important;
    border-bottom: 1px solid #e8eff7 !important;
    border-radius: 16px 16px 0 0 !important;
    display: flex !important;
    justify-content: flex-end !important;
    align-items: center !important;
    flex-shrink: 0 !important;
    min-height: 45px !important;
    width: 100% !important;
    box-sizing: border-box !important;
    visibility: visible !important;
    opacity: 1 !important;
}

/* 🔥 Botón cerrar del header - Solución para float:right */
.popup .modal-header .popup_delete {
    background: none !important;
    border: none !important;
    cursor: pointer !important;
    padding: 4px 8px !important;
    border-radius: 50% !important;
    transition: all 0.3s ease !important;
    opacity: 0.7 !important;
    line-height: 1 !important;
    font-size: 18px !important;
    color: #1a1a1a !important;
    margin-left: auto !important;
}

.popup .modal-header .popup_delete:hover {
    opacity: 1 !important;
    background: rgba(0,0,0,0.05) !important;
    transform: rotate(90deg) !important;
}

.popup .modal-header .popup_delete span {
    font-size: 22px !important;
}

/* ================================================================
   BODY - Usando modal-body (tu clase real)
   ================================================================ */
.popup .modal-body {
    padding: 20px 25px !important;
    overflow-y: auto !important;
    flex: 1 !important;
    background: #ffffff !important;
    box-sizing: border-box !important;
    text-align: center !important;
    font-size: 13px !important;
    /* 🔥 Altura automática según contenido */
    height: auto !important;
    min-height: 50px !important;
}

/* Contenido interno del body */
.popup .modal-body .examenes_prof {
    text-align: left !important;
    font-size: 14px !important;
    font-family: verdana !important;
}

/* ================================================================
   FOOTER - Usando modal-footer (tu clase real)
   ================================================================ */
.popup .modal-footer {
    background: #fcf6fc !important; /* ← Color rosado/gris */
    padding: 8px 15px !important;
    border-top: 1px solid #e8eff7 !important;
    border-radius: 0 0 16px 16px !important;
    display: flex !important;
    justify-content: flex-end !important;
    align-items: center !important;
    flex-shrink: 0 !important;
    min-height: 45px !important;
    width: 100% !important;
    box-sizing: border-box !important;
    visibility: visible !important;
    opacity: 1 !important;
    margin-top: auto !important;
}

/* 🔥 Si el footer tiene <br> solo, ocultarlos */
.popup .modal-footer br {
    display: none !important;
}

/* ================================================================
   BOTONES DEL FOOTER (si los agregas)
   ================================================================ */
.popup .modal-footer .btn {
    border-radius: 8px !important;
    padding: 8px 20px !important;
    border: none !important;
    cursor: pointer !important;
    font-weight: 600 !important;
    font-size: 13px !important;
    transition: all 0.3s ease !important;
}

.popup .modal-footer .btn-primary {
    background: #0066cc !important;
    color: #ffffff !important;
}

.popup .modal-footer .btn-primary:hover {
    background: #0052a3 !important;
}

.popup .modal-footer .btn-secondary {
    background: #e8eff7 !important;
    color: #1a1a1a !important;
}

.popup .modal-footer .btn-secondary:hover {
    background: #d5dde8 !important;
}

/* ================================================================
   SCROLLBAR DEL BODY
   ================================================================ */
.popup .modal-body::-webkit-scrollbar {
    width: 6px;
}

.popup .modal-body::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 4px;
}

.popup .modal-body::-webkit-scrollbar-track {
    background: #f5f5f5;
}

/* ================================================================
   RESPONSIVE
   ================================================================ */
@media (max-width: 650px) {
    .popup {
        width: 95vw !important;
        max-height: 90vh !important;
        border-radius: 12px !important;
    }
    
    .popup .modal-body {
        padding: 15px !important;
    }
}

@media (max-height: 600px) {
    .popup {
        top: 2% !important;
        transform: translate(-50%, 0%) !important;
        max-height: 95vh !important;
    }
}

/* ================================================================
   OVERLAY
   ================================================================ */
.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9998;
    display: none;
}

.popup-overlay.active {
    display: block;
}
/* ================================================================
   OVERLAY
   ================================================================ */
.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9998;
    display: none;
}

.popup-overlay.active {
    display: block;
}
    /* Cuando el popup está abierto, mostrar el overlay */
    .popup-overlay.active {
        display: block;
    }
    [data-title]:hover:after {
        opacity: 1;
        transition: all 0.1s ease 0.5s;
        visibility: visible;
    }
    [data-title]:after {
        content: attr(data-title);
        width:14em!important;
        background-color: #ffffff;
        color: #333333;
        font-size: 13px;
        font-family: verdanab;
        position: absolute;
        padding:6px;
        top:2em;
        left: 50%;
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
    .blink_me {
      animation: blinker 1s linear infinite;
    }
    @keyframes blinker {  
      50% { opacity: 0; }
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
        font-size:1.5em;
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
    	  font: bold 1.5em 'verdanab', sans-serif;
    	}
    }
    @media screen and (max-width: 500px) {
    	.ctn-preloader .animation-preloader .txt-loading {
    	  font: bold 1.5em 'verdanab', sans-serif;
    	}
    } 
      input[type="radio"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
        visibility:hidden;
    }
     #check::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 20px;
        height: 20px;
        background-color:transparent;
        border:1px solid #742574;
        border-radius:18px;
        text-align:center;
        margin-top:-0.2em;
        margin-left:0em;
    }
    #check::after {
        display: inline-block;
        position: absolute;
        font-size:24px!important;
        color:#742574;
        margin-top:-4px;
        margin-left:0em;
    }
    .radio input[type="radio"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f111";   /* Círculo con punto interior (radio seleccionado) */
    } 

    .progress-container {
        width: 80%;
        max-width: 500px;
        margin: 20px auto 0;
        background: #f0f0f0;
        border-radius: 25px;
        height: 20px;
        position: relative;
        overflow: hidden;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.2);
    }
    
    .progress-bar {
        height: 100%;
        width: 0%;
        background: linear-gradient(90deg, #FF6B00, #FF9500, #FF6B00);
        background-size: 200% 100%;
        border-radius: 25px;
        transition: width 0.3s ease;
        animation: shimmer 2s infinite;
    }
    
    @keyframes shimmer {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }
    
    .progress-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: Moristonb;
        font-size: 18px;
        color:#333333;
        font-weight: bold;;
        text-shadow: 0 1px 2px rgba(255,255,255,0.5);
    }
     @keyframes anim{
        0% {background-color: #ffffcc;} /*Amarillo*/
       25% {background-color: #ffe6cc;} /*Naranja*/
       50% {background-color: #f2f2f2;} /*Negro*/
       75% {background-color: #cce5ff;} /*azúl*/
      100% {background-color: #ffffcc;} /*Otra vez amarillo*/
    }
    body{
      animation-name: anim;
      animation-duration: 12s;
      animation-iteration-count: infinite;
    }
    .table1 {
        table-layout: fixed; /* Esto es necesario para que funcione width */
        border: hidden !important;
        color: #000000;
        width: 100%;
    }
    
    .table1 th {
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color: #ffffff;
        font-family:Verdanab;
        text-align:center;
        border:1px solid #71788e!important;
        font-size:10px!important;
        opacity:1!important;
    }
    
    .table1 td {
        text-align:left;
        padding:0.4em!important;
        margin:0.4em!important;
        border:0;
        vertical-align:middle!important;
        font-size:9px!important;
    }
        /* ================================================================
   BORDER RADIUS PARA TODOS LOS MODALES
   ================================================================ */
.modal .modal-content {
    border-radius: 16px !important;
    overflow: hidden !important;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15) !important;
}

.modal .modal-dialog {
    border-radius: 16px !important;
    overflow: hidden !important;
}
.modal .modal-dialog .modal-content {
    border-radius: 16px !important;
}
.modal .modal-header {
    border-radius: 16px 16px 0 0 !important;
    padding: 10px 15px !important;
    background: #fcf6fc !important;
    border-bottom: 1px solid #e8eff7 !important;
}
.modal .modal-body {
    padding: 25px 30px !important;
}
.modal .modal-footer {
    border-radius: 0 0 16px 16px !important;
    padding: 10px 15px !important;
    background: #fcf6fc !important;
    border-top: 1px solid #e8eff7 !important;
}
.modal .modal-header .close {
    padding: 8px !important;
    border-radius: 50% !important;
    transition: all 0.3s ease !important;
    opacity: 0.7 !important;
}
.modal .modal-header .close:hover {
    opacity: 1 !important;
    background: rgba(0,0,0,0.05) !important;
    transform: rotate(90deg) !important;
}
.modal-dialog.modal-m .modal-content {
    border-radius: 16px !important;
}
.modal-dialog.modal-lg .modal-content {
    border-radius: 16px !important;
}
.modal-dialog.modal-sm .modal-content {
    border-radius: 16px !important;
}
.modal-dialog.modal-title .modal-content {
    border-radius: 16px !important;
}
.modal-content[style*="background-color:#ffffff"] {
    border-radius: 16px !important;
}
/* Estilos para elementos dentro del modal */
.modal .clientes textarea,
.modal .clientes input,
.modal #registro textarea,
.modal #registro input {
    border-radius: 8px !important;
}
.modal .btn,
.modal .nuevo,
.modal .delete {
    border-radius: 8px !important;
}
.modal .table,
.modal .tablabdm,
.modal .table_ges_2 {
    border-radius: 8px !important;
    overflow: hidden !important;
}
/* Modales con IDs específicos */
.modal[data-easein] .modal-content {
    border-radius: 16px !important;
}
[id^="costumModal"] .modal-content {
    border-radius: 16px !important;
}
[id^="costumModal"] .modal-header {
    border-radius: 16px 16px 0 0 !important;
}
[id^="costumModal"] .modal-footer {
    border-radius: 0 0 16px 16px !important;
}
[id$="_modal"] .modal-content {
    border-radius: 16px !important;
}
[id$="_modal"] .modal-header {
    border-radius: 16px 16px 0 0 !important;
}
[id$="_modal"] .modal-footer {
    border-radius: 0 0 16px 16px !important;
}
#editar_controles .modal-content {
    border-radius: 16px !important;
}
#adjuntar_controles .modal-content {
    border-radius: 16px !important;
}
#popup6,
#popup7 {
    border-radius: 16px !important;
}
#popup6 .modal-body,
#popup7 .modal-body {
    border-radius: 16px !important;
}
/* Scrollbar personalizado */
.modal .modal-body::-webkit-scrollbar {
    width: 6px;
}
.modal .modal-body::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}
.modal .modal-body::-webkit-scrollbar-thumb {
    background: #6a8fbf;
    border-radius: 10px;
}
.modal .modal-body video,
.modal .modal-body iframe {
    width: 100% !important;
    height: auto !important;
    aspect-ratio: 16 / 9;
    max-height: 70vh;
    object-fit: contain;
}
/* ================================================================
   SCROLL PARA MODAL FULLSCREEN
   ================================================================ */

/* Asegurar que el modal fullscreen tenga scroll */
.modal.fullscreen-modal .modal-dialog {
    max-height: 100vh !important;
    height: auto !important;
    margin: 0 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.modal.fullscreen-modal .modal-content {
    max-height: 95vh !important;
    overflow-y: auto !important;
    overflow-x: hidden !important;
    border-radius: 16px !important;
}

/* Scroll para el body del modal fullscreen */
.modal.fullscreen-modal .modal-body {
    max-height: calc(95vh - 120px) !important;
    overflow-y: auto !important;
    overflow-x: hidden !important;
    padding: 20px 25px !important;
}

/* Para el modal específico con id Modal_examenes */
#Modal_examenes .modal-content {
    max-height: 95vh !important;
    overflow-y: auto !important;
}

#Modal_examenes .modal-body {
    max-height: calc(95vh - 120px) !important;
    overflow-y: auto !important;
    padding: 10px 20px !important;
}

/* Para el modal costumModal110 */
#costumModal110 .modal-content {
    max-height: 95vh !important;
    overflow-y: auto !important;
}

#costumModal110 .modal-body {
    max-height: calc(95vh - 120px) !important;
    overflow-y: auto !important;
}

/* Estilos para el scrollbar */
#Modal_examenes .modal-body::-webkit-scrollbar,
#costumModal110 .modal-body::-webkit-scrollbar,
.modal.fullscreen-modal .modal-body::-webkit-scrollbar {
    width: 8px !important;
}

#Modal_examenes .modal-body::-webkit-scrollbar-track,
#costumModal110 .modal-body::-webkit-scrollbar-track,
.modal.fullscreen-modal .modal-body::-webkit-scrollbar-track {
    background: #f1f1f1 !important;
    border-radius: 4px !important;
}

#Modal_examenes .modal-body::-webkit-scrollbar-thumb,
#costumModal110 .modal-body::-webkit-scrollbar-thumb,
.modal.fullscreen-modal .modal-body::-webkit-scrollbar-thumb {
    background: #ccc !important;
    border-radius: 4px !important;
}

#Modal_examenes .modal-body::-webkit-scrollbar-thumb:hover,
#costumModal110 .modal-body::-webkit-scrollbar-thumb:hover,
.modal.fullscreen-modal .modal-body::-webkit-scrollbar-thumb:hover {
    background: #aaa !important;
}

/* Asegurar que el contenido del modal no se desborde */
#Modal_examenes .modal-body .row,
#costumModal110 .modal-body .row {
    margin-left: 0 !important;
    margin-right: 0 !important;
}

#Modal_examenes .modal-body .col-md-6,
#costumModal110 .modal-body .col-md-6 {
    padding-left: 10px !important;
    padding-right: 10px !important;
}

/* Tablas dentro del modal con scroll */
#Modal_examenes .table1 {
    width: 100% !important;
    display: table !important;
}

/* Para pantallas pequeñas */
@media (max-width: 768px) {
    #Modal_examenes .modal-body,
    #costumModal110 .modal-body,
    .modal.fullscreen-modal .modal-body {
        max-height: calc(90vh - 100px) !important;
        padding: 10px 15px !important;
    }
    
    #Modal_examenes .modal-content,
    #costumModal110 .modal-content,
    .modal.fullscreen-modal .modal-content {
        max-height: 92vh !important;
        border-radius: 12px !important;
    }
}
</style>
<body>
<?php 
    if (controlsesion4::sesion_iniciada()) {
?> 
<!--<div class="loader no-scroll-y">
	<section>
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="animation-preloader">
                <div class="prelogo">
                </div>
					<div class="txt-loading">
						<span data-text-preloader="E" class="letters-loading">E</span>
						<span data-text-preloader="N" class="letters-loading">N</span>
						<span data-text-preloader="V" class="letters-loading">V</span>
						<span data-text-preloader="I" class="letters-loading">I</span>
						<span data-text-preloader="A" class="letters-loading">A</span>
						<span data-text-preloader="N" class="letters-loading">N</span>
						<span data-text-preloader="D" class="letters-loading">D</span>
						<span data-text-preloader="O" class="letters-loading">O</span>
						<span data-text-preloader="." class="letters-loading">.</span>
						<span data-text-preloader="." class="letters-loading">.</span>
						<span data-text-preloader="." class="letters-loading">.</span>
						<span style="font-family:verdana;font-size:32px;color:#f58634">  Cita </span>
					</div>
				</div>	
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>
	</section>
</div>-->
<div class="load no-scroll-y">
	<section>
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="animation-preloader">
                <div class="prelogo">
                </div>
					<div class="txt-loading">
						<span style="font-family:verdana;font-size:20px;color:#000000">Cargando la página y sus componentes. Por favor, espere un momento... </span>
					</div>
					<!-- BARRA DE PROGRESO (LECTOR DE AVANCE DE CARGA) -->
					<div class="progress-container">
						<div class="progress-bar" id="progressBar"></div>
						<div class="progress-text" id="progressText">0%</div>
					</div>
				</div>	
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>
	</section>
</div>
<div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="<?php echo RUTA_PROFESIOGRAMA_AGENDA ?>" style="color:#453969;border:0!important;font-family:Moristonb;font-size:13px;background:transparent;margin-top:-0.2em">Profesiograma</a>
        </li> 
        <li>
            <a href="<?php echo RUTA_ESTADISTICAS_AGENDA ?>" style="color:#453969;border:0!important;font-family:Moristonb;font-size:13px;background:transparent;margin-top:-0.2em">Estadísticas</a>
        </li> 
        <li>
            <button href="#costumModal101" data-toggle="modal" style="color:#453969;width:10.3em;border:0!important;font-family:Moristonb;font-size:13px;margin-top:0.9em" data-title="Observación permanente"/>Observación</button>
        </li>
        <li>
            <form class="formxlsx"action="lista_agenda"method="post">
                <input type="hidden"name="empresa"value="<?php  echo $Clave ?>"></input>
                <button type="submit"name="import"id="import"class="blink_me"style="color:#453969;width:10.3em;border:0!important;font-family:Moristonb;font-size:13px;margin-top:0.9em" data-title="Ver mi lista agendada"/>Ver agenda</button>
            </form>
        </li>
        <li>
            <a href="#"style="color:#333333!important;font-family:Moriston;font-size:13px">
                <?php  echo '<span style="font-family:verdanab">EMPRESA:</span> '. $Razon.' ('.$Sector.')'; ?>
            </a>
        </li>    
        <li>
            <a href="#"style="color:#333333!important;font-family:Moriston;font-size:13px">
                <?php  echo '<span style="font-family:verdanab"> PERSONA ENCARGADA:</span> '. $Nombre ?>
            </a>
        </li> 
        <li>
            <a href=<?php  echo RUTA_LOGOUT_AGENDA ?>>
            <i class="fa fa-share-square-o"aria-hidden="true"style="color:#453969"></i>&nbsp <span style="color:#453969;font-family:verdanab">Cerrar sesión</span></a>
        </li>
    </ul>
</div>
<?php  } ?>
<div class="container-fluid"align="center">
    <!--<div id="fixed"align="center"style="opacity:0.3"><img id="imagen_fija"src="../imagine/fondo_laboratorio3.png"width="800"></div>-->
      <div class="col-md-12" style="margin:0!important;padding:0!important">
       <div id="citas"></div>
       <h3 style="color:#453969;font-family:verdanab">AGENDA UNA CITA</h3>
        <div class="modal-body todoapp"style="text-align:center;font-size:13px;">
            <!-- popup1 -->
            <div id="popup1" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso para alturas y espacios confinados</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, cuestionario anexo alturas, evaluación psicológica y concepto aptitud laboral trabajo en alturas y espacios confinados.</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup2 -->
            <div id="popup2" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso para conductores</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico <i style="font-family:verdanai">(1. Test de atención concentrada y resistencia a la monotonía. 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i> y concepto aptitud laboral conducción.</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup3 -->
            <div id="popup3" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso manipulador de alimentos</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, KOH en uñas, coprológico, frotis faríngeo y concepto aptitud laboral manipulación de alimentos.</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup4 -->
            <div id="popup4" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso seguridad vial y énfasis en alturas</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico <i style="font-family:verdanai">(1. Test de atención concentrada y resistencia a la monotonía. 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i>, cuestionario anexo alturas y concepto aptitud laboral conducción y trabajo en alturas.</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup5 -->
            <div id="popup5" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso con énfasis en alturas</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, cuestionario anexo alturas y concepto aptitud laboral trabajo en alturas.</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup6 -->
            <div id="popup6" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico seguridad vial y énfasis en alturas</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico <i style="font-family:verdanai">(1. Test de atención concentrada y resistencia a la monotonía. 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i>, cuestionario anexo alturas y concepto aptitud laboral conducción y trabajo en alturas.</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup7 -->
            <div id="popup7" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico de alturas</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, cuestionario anexo alturas y concepto aptitud laboral trabajo en alturas.</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup8 -->
            <div id="popup8" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico manipulador de alimentos</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, KOH en uñas, coprológico, frotis faríngeo y concepto aptitud laboral manipulación de alimentos.</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup9 -->
            <div id="popup9" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico para conductores</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, colesterol total, trigliceridos, glicemia en ayunas, prueba de sustancia <i style="font-family:verdanai">(marihuana y cocaína)</i>, psicosensométrico <i style="font-family:verdanai">(1. Test de atención concentrada y resistencia a la monotonía. 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i> y concepto aptitud laboral conducción.</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup10 -->
            <div id="popup10" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Postincapacidad</p>
                    <p>Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.</p>
                    <p style="color:#cc0000;font-family:verdanab;font-size:13px">HORARIO DE ATENCIÓN PARA ESTE EXAMEN</p>
                    <p style="color:#cc0000;font-family:verdanab;font-size:13px">UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00</p>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup11 -->
            <div id="popup11" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Retorno laboral</p>
                    <p>Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup12 -->
            <div id="popup12" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Seguimiento, recomendaciones y/o restricciones médicas</p>
                    <p>Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.</p>
                    <p style="color:#cc0000;font-family:verdanab;font-size:13px">HORARIO DE ATENCIÓN PARA ESTE EXAMEN</p>
                    <p style="color:#cc0000;font-family:verdanab;font-size:13px">UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00</p>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup13 -->
            <div id="popup13" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico para alturas y espacios confinados</p>
                    <p>Exámen médico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz, espirometría, colesterol total, trigliceridos, glicemia en ayunas, cuestionario anexo alturas, evaluación psicológica, concepto aptitud laboral trabajo en alturas y espacios confinados, y prueba de embarazo (<span style="font-family:verdana">Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado</span>).</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup14 -->
            <div id="popup14" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Tipo I Operativo</p>
                    <p>Exámen médico con énfasis osteomuscular<br>Audiometría<br>Creatinina sérica</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup15 -->
            <div id="popup15" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Tipo II Administrativo</p>
                    <p>Exámen médico con énfasis osteomuscular<br>Audiometría<br>Creatinina sérica<br>Visiometría</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup16 -->
            <div id="popup16" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Tipo III Motorizado</p>
                    <p>Exámen médico con énfasis osteomuscular<br>Audiometría<br>Creatinina sérica<br>Visiometría<br>Psicosensométrico</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup17 -->
            <div id="popup17" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Tipo IV Ascenso administrativo-control</p>
                    <p>Exámen médico con énfasis osteomuscular<br>Audiometría<br>Creatinina sérica</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup18 -->
            <div id="popup18" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso Tipo 1</p>
                    <p>Examen médico con énfasis osteomuscular<br>Optometría<br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span></p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup19 -->
            <div id="popup19" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Ingreso Tipo 2</p>
                    <p>Examen médico con énfasis osteomuscular<br>Optometría<br>Audiometría<br>Espirometría<br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup20 -->
            <div id="popup20" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">3A: Ingreso con enfasis en alturas</p>
                    <p>Examen médico con énfasis osteomuscular<br>Optometría<br>Audiometría<br>Espirometría<br>Laboratorio:<br><span style="font-family:verdana">glucemia en ayunas, perfil lipìdico, hemoleucograma</span><br>Cuestionario de alturas<br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Electrocardiograma (EKG):<br></span><span style="font-family:verdana">a personas de 45 años o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup21 -->
            <div id="popup21" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">3B: Ingreso conductores "Seguridad vial" y Alturas</p>
                    <p>Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Cuestionario de alturas, Psicosensométrico, Test de psicología psicométrico,<br>Laboratorio:<br><span style="font-family:verdana">glucemia en ayunas, perfil lipìdico, hemoleucograma</span>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Electrocardiograma (EKG):<br></span><span style="font-family:verdana">a personas de 45 años o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de columna lumbo-sacra:<br></span><span style="font-family:verdana">(para conductores de vehículos u operadores de maquinaria amarilla) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup22 -->
            <div id="popup22" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">3C: Ingreso conductores "Seguridad vial"</p>
                    <p>Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Psicosensométrico, Test de psicología psicométrico,<br>Laboratorio:<br><span style="font-family:verdana">glucemia en ayunas, perfil lipídico, hemoleucograma</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Electrocardiograma (EKG):<br></span><span style="font-family:verdana">a personas de 45 años o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de columna lumbo-sacra:<br></span><span style="font-family:verdana">(para conductores de vehículos u operadores de maquinaria amarilla) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup23 -->
            <div id="popup23" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico Tipo 1</p>
                    <p>Examen médico con énfasis osteomuscular<br>Optometría<br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span></p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup24 -->
            <div id="popup24" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Periódico Tipo 2</p>
                    <p>Examen médico con énfasis osteomuscular<br>Optometría<br>Audiometría<br>Espirometría<br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup25 -->
            <div id="popup25" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">3A: Periódico con énfasis en alturas</p>
                    <p>Examen médico con énfasis osteomuscular<br>Optometría<br>Audiometría<br>Espirometría<br>Laboratorio:<br><span style="font-family:verdana">glucemia en ayunas, perfil lipìdico, hemoleucograma</span><br>Cuestionario de alturas.<br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Electrocardiograma (EKG):<br></span><span style="font-family:verdana">a personas de 45 años o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup26 -->
            <div id="popup26" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">3B: Periódico conductores "Seguridad vial" y Alturas</p>
                    <p>Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Cuestionario de alturas, Psicosensométrico, Test de psicología psicométrico,<br>Laboratorio:<br><span style="font-family:verdana">glucemia en ayunas, perfil lipìdico, hemoleucograma</span>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Electrocardiograma (EKG):<br></span><span style="font-family:verdana">a personas de 45 años o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de columna lumbo-sacra :<br></span><span style="font-family:verdana">(para conductores de vehículos u operadores de maquinaria amarilla) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup27 -->
            <div id="popup27" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">3C: Periódico conductores "Seguridad vial"</p>
                    <p>Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Psicosensométrico, Test de psicología psicométrico,<br>Laboratorio:<br><span style="font-family:verdana">glucemia en ayunas, perfil lipídico, hemoleucograma</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Electrocardiograma (EKG):<br></span><span style="font-family:verdana">a personas de 45 años o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de columna lumbo-sacra:<br></span><span style="font-family:verdana">(para conductores de vehículos u operadores de maquinaria amarilla) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup28 -->
            <div id="popup28" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EGRESO TIPO 1</p>
                    <p>Examen médico con énfasis osteomuscular<br>Visiometría <span style="font-family:verdana">(no realizar la tamización visual si lleva menos de un año de realizada)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span></p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup29 -->
            <div id="popup29" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Egreso Tipo 2</p>
                    <p>Examen médico con énfasis osteomuscular<br>Visiometría<br>Audiometría<br>Espirometría<br>NOTA: <span style="font-family:verdana">Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup30 -->
            <div id="popup30" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">3A: Egreso</p>
                    <p>Examen médico con énfasis osteomuscular<br>Visiometría<br>Audiometría<br>Espirometría<br>NOTA: <span style="font-family:verdana">Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Electrocardiograma (EKG):<br></span><span style="font-family:verdana">a personas de 45 años o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup31 -->
            <div id="popup31" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">3B: Egreso</p>
                    <p>Examen médico con énfasis osteomuscular<br>Visiometría<br>Audiometría<br>Espirometría<br>NOTA: <span style="font-family:verdana">Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Electrocardiograma (EKG):<br></span><span style="font-family:verdana">a personas de 45 años o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de columna lumbo-sacra:<br></span><span style="font-family:verdana">(para conductores de vehículos u operadores de maquinaria amarilla) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup32 -->
            <div id="popup32" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">3C: Egreso</p>
                    <p>Examen médico con énfasis osteomuscular<br>Visiometría<br>Audiometría<br>Espirometría<br>NOTA: <span style="font-family:verdana">Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Electrocardiograma (EKG):<br></span><span style="font-family:verdana">a personas de 45 años o más</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de columna lumbo-sacra:<br></span><span style="font-family:verdana">(para conductores de vehículos u operadores de maquinaria amarilla) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(si y solo si, sale la espirometría alterada al ingreso o periódico)</span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Radiografía de tórax PA y lateral:<br></span><span style="font-family:verdana">(PARA SOLDADORES O TRABAJO EN CALIENTE) </span><br>
                    <span style="text-align:center;font-family:verdanabi;font-size:13px">Vacunación:</span><br><span style="font-family:verdana">Tetano</span><br><span style="font-family:verdana">Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                    </p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup33 -->
            <div id="popup33" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Examen Médico Ocupacional, con énfasis en el sistema Osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Optometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Glicemia: Si la glicemia pre se encuentra entre 100 y 125 mg/dl, se recomienda realizar confirmatorio con glicemia pre-post carga de 75gr</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">EKG: Si la persona que va a realizar el curso es mayor de 40 años</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Perfil Lipídico: Colesterol Total, HDL, LDL, Triglicéridos</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup34 -->
            <div id="popup34" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Manipulación de alimentos</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup35 -->
            <div id="popup35" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Examen Médico Ocupacional Con Énfasis Osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Visiometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup36 -->
            <div id="popup36" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Examen Médico Ocupacional Con Énfasis Osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Optometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría Clinica</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Espirometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Perfil Hepatico (GOT-GPT)</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Perfil Renal BUN-Creatinina</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup37 -->
            <div id="popup37" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Examen Médico Ocupacional Con Énfasis Osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Optometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría Clinica</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup38 -->
            <div id="popup38" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Examen Médico Ocupacional Con Énfasis Osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Optometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría Clinica</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup39 -->
            <div id="popup39" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Examen Médico Ocupacional Con Énfasis Osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Visiometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Test psicosensometrico</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup40 -->
            <div id="popup40" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Examen Médico Ocupacional Con Énfasis Osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Optometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría clínica</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Prueba Psicológica Con Énfasis En Manejo De Armas</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup41 -->
            <div id="popup41" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Examen Médico Ocupacional Con Énfasis Osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Visiometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría clínica</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup42 -->
            <div id="popup42" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Examen Médico Ocupacional Con Énfasis Osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Optometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría clínica</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Espirometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Test psicosensometrico</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup43 -->
            <div id="popup43" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Examen Médico Ocupacional Con Énfasis Osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Optometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría clínica</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Prueba Psicológica Con Énfasis En Manejo De Armas</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Test psicosensometrico</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup44 -->
            <div id="popup44" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Examen Médico Ocupacional Con Énfasis Osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Visiometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Espirometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Perfil Hepatico (GOT-GPT)</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Perfil Renal BUN-Creatinina</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup45 -->
            <div id="popup45" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <br>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Exámen médico con énfasis osteomuscular</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Visiometría tamíz</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Audiometría tamíz</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Espirometría</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Colesterol total</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Trigliceridos</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Glicemia en ayunas, prueba de sustancia (marihuana y cocaína)</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Psicosensométrico (1. Test de atención concentrada y resistencia a la monotonía. 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. preuba de personalidad-test para conductor.)</p>
                    <p style="text-align:left;font-family:verdanabi;font-size:12px">Evaluación psicológica y concepto aptitud laboral trabajo en alturas y espacios confinados.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup46 -->
            <div id="popup46" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <p style="text-align:center;font-family:verdanabi;font-size:13px">Exámen médico con énfasis osteomuscular, Optometría, Audiometría tamíz, Espirometría, Perfil Lipidico, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologica), Evaluación psicológica espacios confinados, Concepto aptitud laboral trabajo en alturas y espacios confinados, Hemograma, Radiografia columna lumbosacra, Prueba de embarazo(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado), Electrocardiograma a mayores de 45 AÑOS, (DEBE TENER APLICADA LAS VACUNAS TETANO, FIEBRE AMARILLA, SOLO VERIFICAR ESQUEMA VACUNACION NO APLICAR)</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup47 -->
            <div id="popup47" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">EXÁMENES A REALIZAR</p>
                    <p style="text-align:center;font-family:verdanabi;font-size:13px">Exámen médico con énfasis osteomuscular, Optometría, Audiometría tamíz, Espirometría, Perfil Lipidico, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologica), Hemograma, Prueba de embarazo(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado), Electrocardiograma a mayores de 45 AÑOS, (DEBE TENER APLICADA LAS VACUNAS TETANO, FIEBRE AMARILLA, SOLO VERIFICAR ESQUEMA VACUNACION NO APLICAR)</p>
                    <br>
                    <p style="text-align:center;color:#333333;font-family:verdanab;font-size:13px">En caso de de requerir examenes adicionales, por favor escribirlos en el campo <span style="text-align:left;color:#453969;font-family:verdanab;font-size:13px!important">observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup48 -->
            <div id="popup48" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <br>
                    <p style="text-align:center;font-family:verdanab;font-size:13px">En caso de seleccionar <span style="color:#ff1a1a">Otros</span>, por favor escribir el <span style="color:#453969">Tipo específico de exámen</span> en el campo <span style="color:#453969">Observaciones</span>.</p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup49 -->
            <div id="popup49" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <br>
                    <p style="text-align:center;font-family:verdanabi;font-size:13px">Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.<br><span style="color:#cc0000">HORARIO DE ATENCIÓN PARA ESTE EXAMEN UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00</span></p>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup55 -->
            <div id="popup55" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:left;font-size:13px;font-family:verdana">
                    <div id="resultadoExamenes" class="resultado-examenes" style="text-align:left!important;font-size:13px!important;font-family:verdana!important"></div>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        
            <!-- popup56 -->
            <div id="popup56" class="popup">
                <div class="modal-header">
                    <button type="button" class="popup_delete" style="float:right;padding:0.5em"><span style="font-size:22px!important" class="fa fa-times"></span></button><br>
                </div>
                <div class="modal-body" style="text-align:center;font-size:13px;">
                    <p style="text-align:center;color:#453969;font-family:verdanab;font-size:15px">Exámenes a realizar:</p>
                    <table style="width:100%!important">
                        <tboby id="examenes_prof" class="examenes_prof" style="text-align:left;font-size:14px;font-family:Verdana!important;width:100%!important"></tboby>
                    </table>
                </div>
                <div class="modal-footer">
                    <br>
                </div>
            </div>
        </div>    
       <div class="todoapp">
     
            <header class="header checkbox">
                <form role="form" id="form_clientes" name="form_clientes"onsubmit="return marcado();">
                <div style="min-height:6em!important">
                    <p id="seleccion_empresa"style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab;text-align:center"><br>Para iniciar, seleccione una IPS:</p>
                    <div id="Sede_A">
                        <div class="col-md-6"style="margin:0;padding:0">
                            <p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab"><br>Sede Cedisalud IPS:</p><select class="new-todo Sede_A"id="Sede"style='color:#999999;font-size:16px!important' oninput='style.color="black"' >
                                <option value=""style='display:none;color:#999999' hidden>Seleccione una opción...</option>
                                <option>Apartadó/Cedisalud IPS</option>
                                <option>Medellín/Cedisalud IPS</option>
                            </select>
                        </div>
                        <div class="col-md-6"style="margin:0;padding:0">
                            <p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab"><br>IPS Aliada Red Nacional:</p>
                            <select class="new-todo Red_A"id="Red"style='color:#999999;font-size:16px!important' oninput='style.color="black"' name="Red">
                                <option value=""style='display:none;color:#999999' hidden>Seleccione una opción...</option>
                                <option style="font-family:verdanab!important"disabled>Zona Caribe</option>
                                <!--<option>Barranquilla/Medikcorp SAS</option>-->
                                <option>Aguachica/Capella IPS</option>
                                <option>Barranquilla/SSTA Consulting S.A.S</option>
                                <option>Cartagena/H&S Occupational</option>
                                <option>Magangué/UMER IPS Servicios Ocupacionales</option>
                                <option>Montería/Peña Asesores Salud Ocupacional S.A.S. -PASO-</option>
                                <!--<option>Montería/Fundación Certificar</option>-->
                                <option>Riohacha/APREHSI GROUP</option>
                                <option>Santa Marta/PREVENIR 1-A SA</option>
                                <option>Sincelejo/LABORMED</option>
                                <option>Valledupar/APREHSI GROUP</option>
                                <option>Caucasia/Nueva ASC en Salud Total SAS</option>
                                <option>Montelíbano/Su Salud Integral SAS</option>
                                <option disabled></option>
                                <option style="font-family:verdanab!important"disabled>Zona Oriental</option>
                                <option>Villavicencio/ASEINCAP</option>
                                <option>Puerto Gaitán/Clínica Grupo Sanar</option>
                                <option>Mocoa/Diagnostico E.U</option>
                                <option>Puerto Asís/Clínica Salud Center</option>
                                <option disabled></option>
                                <option style="font-family:verdanab!important"disabled>Zona Pacífico</option>
                                <option>Cali/CEMESST</option>
                                <option>Palmira/CEMESST</option>
                                <option>Buga/Laboratorio Clínico López Línea Ocupacional IPS</option>
                                <option>Tuluá/IPS Opositiva Salud Integral Tuluá SAS</option>
                                <option>Quibdó/BIOLABORAL IPS</option>
                                <option>Pasto/IPS AM PM 24 SAS</option>
                                <option>Pasto/OCUPSALUD SST SAS</option>
                                <option disabled></option>
                                <option style="font-family:verdanab!important"disabled>Zona Central</option>
                                <!--<option>Bogotá Norte/Unimsalud</option>
                                <option>Bogotá Norte/Human Group Corp IPS VIP</option>-->
                                <option>Chía/INSSOMEDIC Ocupacional SAS</option>
                                <option>Bogotá Norte/Zonamedica IPS</option>
                                <option>Bogotá La Soledad/Zonamedica IPS</option>
                                <option>Bogotá Central-Galerías/Grupo Ocupacional</option>
                                <option>Bogotá Sur/Ocupasalud IPS Bogotá</option>
                                <option>Bogotá Américas/Zonamedica IPS</option>
                                <option>Facatativa/Medical Helsen IPS</option>
                                <option>Funza/IPS Sigmedical Funza</option>
                                <option>Madrid/Medical Helsen IPS</option>
                                <option>Madrid/IPS Sigmedical Madrid</option>
                                <option>Mosquera/IPS Sigmedical Mosquera</option>
                                <option>Zipaquirá/SANILAB IPS</option>
                                <!--<option>Bogotá Central/Unimsalud</option>-->
                                <!--<option>Barrancabermeja/RVG IPS</option>-->
                                <option>Barrancabermeja/RVO IPS S.A.S</option>
                                <!--<option>Bogotá Sur/Unimos Salud</option>-->
                                <option>Bucaramanga/Ocupasalud IPS</option>
                                <option>Bucaramanga/IPS Prosynergo SAS</option>
                                <option>Cúcuta/Progresando en Salud IPS</option>
                                <option>Ocaña/Progresando en Salud IPS</option>
                                <option>Tunja/Carvajal Laboratorios IPS SAS</option>
                                <option disabled></option>
                                <option style="font-family:verdanab!important"disabled>Zona eje Cafetero</option>
                                <option>Rionegro/ORIENTESALUD</option>
                                <option>La Ceja/IPS Corriente Vital</option>
                                <option>Armenia/PROENSO</option>
                                <option>Ibagué/Servir SAS</option>
                                <!--<option>La Dorada/IPS Fisiohealth</option>-->
                                <!--<option>Neiva/IPS Centro de Diagnóstico Ocupacional</option>-->
                                <option>Neiva/LABORVIDA IPS</option>
                                <option>Manizales/Eje salud laboral SAS</option>
                                <option>Manizales/UNIRSALUD</option>
                                <option>Pereira/Previsión Ocupacional SAS</option>
                                <option>Pereira/Proteccion Integral IPS</option>
                                <option>Pereira/BIO QUALITY SALUD SAS</option>
                                <option>Popayan/Salud Ocupacional</option>
                                <option>Puerto Berrío/IPS Salud Integral Preventiva SAS</option>
                                <option disabled></option>
                            </select>
                        </div>  
                    </div> 
                    <div id="notificacion"><br><button type="button"class="close"id="btn_notificacion"><span style="font-size:22px;margin-right:1em"class="fa fa-times"></button><br><br><p id="notificacion1"style="font-family:verdanab;font-size:18px!important"></p></div>
                </div>
                <div class="row">
                <div class="col-md-4"><p style="text-align:left;margin-left:2em;margin-top:1em!important;color:#453969;font-family:verdanab">Fecha:</p><input type="date"class="new-todo"id="Fecha"placeholder="De clic aquí para seleccionar una fecha..."required></div>
                <div class="col-md-4"><p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Nombres:</p><input class="new-todo"id="Nombre"placeholder="Escriba aquí..."required></div>
                <div class="col-md-4"><p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Apellidos:</p><input class="new-todo"id="Apellidos"placeholder="Escriba aquí..."required></div>
                </div>
                <div class="row">
                <div class="col-md-4">
                    <p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo de documento:</p><select class="new-todo" id="Tipo" style="color:#999999;font-size:16px!important">
                    <option value="" selected disabled hidden>De clic aquí para seleccionar una opción...</option>
                    <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                    <option value="Cédula de extranjería">Cédula de extranjería</option>
                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                    <option value="Pasaporte">Pasaporte</option>
                    <option value="Permiso temporal de trabajo">Permiso temporal de trabajo</option>
                </select></p>
                </div>
                <div class="col-md-4">
                <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Número de documento<span style="font-family:verdanabi"> (sin puntos)</span>:</p><input class="new-todo"id="Documento"placeholder="ejemplo: 756985632"pattern="[0123456789]{6,15}"required></input></p>
                </div>
                <div class="col-md-4">
                <div id="Nacimiento_A" ><p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Fecha de nacimiento:</p><input type="date" class="new-todo" id="Nacimiento"></input</p></div>
                <p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Genero:</p><select class="new-todo" id="Genero" style='color:#999999;font-size:16px!important' >
                    <option value=""style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Indeterminado">Indeterminado</option></select>
                </p>
                </div>    
                </div> 
                <div class="row">
                <div class="col-md-4">
                <p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Cargo para examen ocupacional:</p>
                <div class="cargo1">
                    <?php  
                switch ($Clave) {
                    case 'uxn2xser': ?>
                        <input class="new-todo Cargo" id="Cargo" placeholder="Escriba aquí...">
                        <?php 
                        break;
                    case 'qdw434g2':?>
                        <select class="new-todo Cargo" id="Cargo" style='color:#999999;font-size:16px!important' oninput='style.color="black"'>
                            <option></option>
                        </select>
                        <?php 
                        break;
                    case 'gdlpoud6':?>
                       <select class="new-todo Cargo" id="Cargo" style='color:#999999;font-size:16px!important' oninput='style.color="black"'>
                            <option></option>
                       </select>
                        <?php 
                        break;    
                    case 'jnxp6m5k':?>
                       <select class="new-todo" id="Cargo" style='color:#999999;font-size:16px!important' oninput='style.color="black"'>
                            <option style="color:#a2a2a2">Seleccione una opción...</option>
                            <option>ALTURAS</option>
                            <option>ESTUDIO DE CASO</option>
                            <option>MANIPULACIÓN DE ALIMENTOS</option>
                            <option>ADMINISTRADOR BASE DE DATOS</option>
                            <option>AGENTE - LIDER - COORDINADOR - SOPORTE LOGISTICO INBOUND - ANBOUND</option>
                            <option>AGENTE DE CANAL</option>
                            <option>AGENTE FLETE AL COBRO</option>
                            <option>AGENTE - LIDER QYR</option>
                            <option>ALMACENISTA</option>
                            <option>ANALISTA DE AUDITORIA</option>
                            <option>ANALISTA DE CALIDAD</option>
                            <option>ANALISTA DE MEDIOS TECNOLOGICOS</option>
                            <option>ANALISTA DE CAPACITACIÓN</option>
                            <option>ANALISTA DE COMPRAS</option>
                            <option>ANALISTA DE COMUNICACIONES</option>
                            <option>ANALISTA DE CONTABILIDAD</option>
                            <option>ANALISTA DE ADMINISTRACION DE BENEFICIOS</option>
                            <option>ANALISTA DE MERCADEO</option>
                            <option>ANALISTA DE PROYECTOS</option>
                            <option>ANALISTA PRODUCTIVIDAD DE FLOTA</option>
                            <option>ANALISTA DE SERVICIOS GENERALES</option>
                            <option>ANALISTA MESA DE AYUDA</option>
                            <option>ANALISTA SENIOR DE SELECCION</option>
                            <option>ANALISTA JURIDICO</option>
                            <option>ANALISTA DESARROLLADOR</option>
                            <option>ANALISTA EXTERNO SGCS</option>
                            <option>ANALISTA DE GESTION DE TRANSITO</option>
                            <option>ANALISTA INTERNO SGCS</option>
                            <option>ANALISTA DE CALIDAD EN SEGURIDAD</option>
                            <option>ANALISTA NACIONAL DE CARTERA</option>
                            <option>ANALISTA NACIONAL DE NOMINA</option>
                            <option>ANALISTA NACIONAL DE OPERACIONES</option>
                            <option>ANALISTA NACIONAL - REGIONAL SOPORTE USUARIOS</option>
                            <option>ANALISTA NACIONAL DE FACTURACION</option>
                            <option>ANALISTA NACIONAL DE FACTURACION Y CARTERA</option>
                            <option>ANALISTA NACIONAL DE S.S.T</option>
                            <option>AUXILIAR OFICINA OPERATIVA TEMPORADA</option>
                            <option>ANALISTA PLANTILLA DE PERSONAL</option>
                            <option>ANALISTA PROGRAMADOR</option>
                            <option>ANALISTA PROGRAMADOR JUNIOR</option>
                            <option>AUXILIAR DE MEDIOS TECNOLOGICOS</option>
                            <option>ANALISTA PROGRAMADOR SENIOR</option>
                            <option>ANALISTA REGIONAL SOPORTE USUARIOS</option>
                            <option>ANALISTA SENIOR DE INTELIGENCIA DE NEGOCIOS</option>
                            <option>ANALISTA SGCS</option>
                            <option>ANALISTA SOPORTE DE NEGOCIOS</option>
                            <option>ASESOR COMERCIAL</option>
                            <option>ASESOR COMERCIAL JUNIOR</option>
                            <option>ASESOR DE NEGOCIOS Y LOGISTICA</option>
                            <option>ASESOR DE PRODUCTOS ESPECIALIZADOS</option>
                            <option>ASISTENTE ADMINISTRATIVA</option>
                            <option>ASISTENTE ADMINISTRATIVO PRODUCIÓN INTERNACIONAL</option>
                            <option>ASISTENTE DE ARCHIVO</option>
                            <option>ASISTENTE DE CAPACITACION</option>
                            <option>ASISTENTE DE CONTABILIDAD</option>
                            <option>ASISTENTE DE HARDWARE REGIONAL</option>
                            <option>ASISTENTE DE MANTENIMIENTO</option>
                            <option>ASISTENTE DE REPARACIONES LOCATIVAS</option>
                            <option>ASISTENTE SORTER</option>
                            <option>ASISTENTE DE IMPUESTOS</option>
                            <option>ANALISTA DE IMPUESTOS</option>
                            <option>ARCHIVISTA OPERATIVO</option>
                            <option>ASISTENTE DE MENSAJERIA</option>
                            <option>ASISTENTE DE MERCADEO</option>
                            <option>ASISTENTE DE NOMINA</option>
                            <option>ASISTENTE DE OFICINA OPERATIVA</option>
                            <option>ASISTENTE DE SELECCION</option>
                            <option>ASISTENTE DE TESORERIA</option>
                            <option>ASISTENTE DE LA GERENCIA FINANCIERA</option>
                            <option>ASISTENTE DESARROLLO HUMANO REGIONAL</option>
                            <option>ASISTENTE JEFE DE DESPACHOS</option>
                            <option>ASISTENTE JEFE DE OPERACIONES</option>
                            <option>ASISTENTE JEFE DE REPARTO</option>
                            <option>ASISTENTE JURIDICO</option>
                            <option>ASISTENTE DE OPERACIONES</option>
                            <option>ASISTENTE OPÉRACIONES NOCTURNAS</option>
                            <option>ASISTENTE OPERATIVO DE PRODUCTOS ESPECIALES</option>
                            <option>ASISTENTE OPERATIVO MQP</option>
                            <option>ASISTENTE OFICINA OPERATIVA MQP</option>
                            <option>ASISTENTE REGIONAL DE S.S.T.</option>
                            <option>ASISTENTE SOPORTE DE NEGOCIOS</option>
                            <option>AUDITOR DESTINATARIOS</option>
                            <option>AUXILIAR ADMINISTRATIVO</option>
                            <option>AUXILIAR ALMACEN EN CONTROL LLANTAS</option>
                            <option>AUXILIAR ANALISTA PLANTILLA DE PERSONAL</option>
                            <option>AUXILIAR CONTABLE</option>
                            <option>AUXILIAR CONTABLE Y ADMINISTRATIVA</option>
                            <option>AUXILIAR CONTROL NACIONAL</option>
                            <option>AUXILIAR DE S.S.T. REGIONAL</option>
                            <option>AUXILIAR DE ACTIVOS FIJOS</option>
                            <option>AUXILIAR DE ALMACEN</option>
                            <option>AUXILIAR DE ARCHIVO</option>
                            <option>AUXILIAR DE AUDITORIA</option>
                            <option>AUXILIAR DE CARTERA</option>
                            <option>AUXILIAR DE COMPRAS</option>
                            <option>AUXILIAR DE COMUNICACIONES</option>
                            <option>AUXILIAR DE CORRESPONDENCIA</option>
                            <option>AUXILIAR DE DESARROLLO HUMANO</option>
                            <option>AUXILIAR DE DISPOSITIVOS TI</option>
                            <option>AUXILIAR DE DOTACIONES Y ALMACEN</option>
                            <option>AUXILIAR DE FACTURACION NACIONAL</option>
                            <option>AUXILIAR DE LOGISTICA Y DISTRIBUCION</option>
                            <option>AUXILIAR DE MENSAJERIA DIURNO</option>
                            <option>AUXILIAR DE MENSAJERIA NOCTURNO</option>
                            <option>AUXILIAR DE MERCADEO</option>
                            <option>AUXILIAR DE MERCADEO Y ALMACEN</option>
                            <option>AUXILIAR DE MERCADEO Y VENTAS</option>
                            <option>AUXILIAR DE NOMINA</option>
                            <option>AUXILIAR DE NOTIFICACIONES</option>
                            <option>AUXILIAR DE NOTIFICACIONES NACIONAL</option>
                            <option>AUXILIAR DE OFICINA DE DESARROLLO HUMANO</option>
                            <option>AUXILIAR DE OFICINA OPERATIVA</option>
                            <option>AUXILIAR DE PAQUETES</option>
                            <option>AUXILIAR DE PROCESOS MENSAJERIA</option>
                            <option>AUXILIAR DE SERVICIOS GENERALES</option>
                            <option>AUXILIAR DE SERVICIOS Y MANTENIMIENTO</option>
                            <option>AUXILIAR DE SORTER</option>
                            <option>AUXILIAR DE TESORERIA</option>
                            <option>AUXILIAR DESARROLLO HUMANO REGIONAL</option>
                            <option>AUXILIAR HARDWARE</option>
                            <option>AUXILIAR IN-HOUSE</option>
                            <option>AUXILIAR N Y S - DESTINO</option>
                            <option>AUXILIAR NACIONAL DE DE HARDWARE Y REDES</option>
                            <option>AUXILIAR OFICINA SISTEMAS</option>
                            <option>AUXILIAR OFICINA VENTAS</option>
                            <option>AUXILIAR OPERATIVO MENSAJERIA</option>
                            <option>AUXILIAR OPERATIVO NOCTURNO</option>
                            <option>AUXILIAR OPERATIVO NOCTURNO TEMPORADA</option>
                            <option>AUXILIAR SELECCIÓN DE PERSONAL</option>
                            <option>AUXILIAR INTELIGENCIA DE NEGOCIOS</option>
                            <option>AUXILIAR SOPORTE TI</option>
                            <option>AUXILIAR TIM REPARTO</option>
                            <option>AUXILIAR ZONA DE DESCANSO</option>
                            <option>AYUDANTE DE CERRAJERIA</option>
                            <option>AYUDANTE DE ELECTRICIDAD</option>
                            <option>AYUDANTE DE MECANICA</option>
                            <option>AYUDANTE DE OFICINA OPERATIVA</option>
                            <option>AYUDANTE MECANICO DE TRAYLER</option>
                            <option>AYUDANTE OFICINA MANTENIMIENTO</option>
                            <option>BACK OFFICE DE VENTAS</option>
                            <option>CAJERA GENERAL</option>
                            <option>CAJERO AUXILIAR</option>
                            <option>CAJERO AUXILIAR JUNIOR</option>
                            <option>CERRAJERO I</option>
                            <option>CERRAJERO II</option>
                            <option>COBRADOR</option>
                            <option>COMUNNITY MANAGER</option>
                            <option>CONDUCTOR - AUXILIAR OPERATIVO</option>
                            <option>CONDUCTOR AUXILIAR OPERATIVO MULERO</option>
                            <option>CONDUCTOR AUXILIAR OPERATIVO NOCTURNO</option>
                            <option>CONDUCTOR DE RELEVO - AUXILIAR</option>
                            <option>CONDUCTOR PATINADOR MTTO Y ALMACEN</option>
                            <option>CONDUCTOR PATIO II</option>
                            <option>CONDUCTOR RUTA NACIONAL</option>
                            <option>CONSULTOR DE CONSTRUCCIÓN</option>
                            <option>CONTRALOR CALIDAD DE INFORMACION BD</option>
                            <option>CONTRALOR DE DISPOSITIVOS TI</option>
                            <option>CONTRALOR NACIONAL PUNTOS DROOP</option>
                            <option>CONTRALOR LLANTAS</option>
                            <option>CONTRALOR MERCANCIA EN TRANSITO</option>
                            <option>CONTRALOR PIEZA DE NOVEDADES</option>
                            <option>CONTRALOR REEXPEDIDORES</option>
                            <option>CONTRALOR SMM</option>
                            <option>CONTRALOR TIM- RECOGIDA</option>
                            <option>CONTRALOR TIM- REPARTO</option>
                            <option>CONTRALOR TIM-REPARTO Y RECOGIDA</option>
                            <option>CONTRALOR-AUXILIAR OPERATIVO</option>
                            <option>CONTRALOR RED DE ALIADOS</option>
                            <option>CONTRALOR NACIONAL RED DE ALIADOS INDEPENDIENTES</option>
                            <option>COORDINADOR ADMINISTRATIVO</option>
                            <option>COORDINADOR DE ALMACENES</option>
                            <option>COORDINADOR DE CALIDAD EN PROCESOS</option>
                            <option>COORDINADOR JURIDICO</option>
                            <option>COORDINADOR NACIONAL RED ALIADOS DISTRIBUCIÓ</option>
                            <option>COORDINADOR DE NODO LOGISTICO</option>
                            <option>COORDINADOR DE NOMINA</option>
                            <option>COORDINADOR DE REPARACIONES LOCATIVAS</option>
                            <option>COORDINADOR CARTERA FLETES DE CONTADO</option>
                            <option>COORDINADOR DE FLETE DE CONTADO</option>
                            <option>COORDINADOR DE ALISTAMIENTO MM</option>
                            <option>COORDINADOR DE CALL CENTER</option>
                            <option>COORDINADOR DE CARTERA REGIONAL</option>
                            <option>COORDINADOR DE DESTINATARIOS</option>
                            <option>COORDINADOR DE ENTREGA Y RECOGIDA</option>
                            <option>COORDINADOR DE EQUIPOS PRODUCTOS ESPECIALES</option>
                            <option>COORDINADOR NACIONAL DE FACTURACION Y CARTERA</option>
                            <option>COORDINADOR DE MENSAJERIA</option>
                            <option>COORDINADOR DE MESA RECOGIDA</option>
                            <option>COORDINADOR DE MESA REPARTO</option>
                            <option>COORDINADOR DE OBRAS CIVILES</option>
                            <option>COORDINADOR DE OPERACIONES</option>
                            <option>COORDINADOR DE NO NORMALIZADOS</option>
                            <option>COORDINADOR NACIONAL DE OPERACIONES</option>
                            <option>COORDINADOR DE PATIO</option>
                            <option>COORDINADOR DE PROYECTOS</option>
                            <option>COORDINADOR DE PROYECTOS INFORMATICO</option>
                            <option>COORDINADOR DE RECOGIDAS</option>
                            <option>COORDINADOR DE RUTA MENSAJERIA</option>
                            <option>COORDINADOR DE SEGURIDAD</option>
                            <option>COORDINADOR DE ZONA</option>
                            <option>COORDINADOR LOGISTICA DE REVERSA</option>
                            <option>COORDINADOR MESA DE AYUDA TI</option>
                            <option>COORDINADOR NACIONAL DE INFORMACION OPERATIVA</option>
                            <option>COORDINADOR NACIONAL GPS</option>
                            <option>COORDINADOR OPERATIVO BASE SATELITE</option>
                            <option>COORDINADOR OPERATIVO DE SOPORTE COMERCIAL</option>
                            <option>COORDINADOR OPERATIVO DE SOPORTE COMERCIAL JR</option>
                            <option>COORDINADOR OPERATIVO ÉXITO</option>
                            <option>COORDINADOR OPERATIVO MQP</option>
                            <option>COORDINADOR DE PLATAFORMAS</option>
                            <option>COORDINADOR REGIONAL DE S.S.T</option>
                            <option>COORDINADOR RELACIONES LABORALES</option>
                            <option>COORDINADOR NUEVO CANAL</option>
                            <option>COORDINADOR SERV. AL CLIENTE Y VENTAS DE CANAL</option>
                            <option>COORDINADOR DE MERCADEO</option>
                            <option>CONTRALOR DE ACTIVOS FIJOS</option>
                            <option>COORDINADORA DE DESARROLLO</option>
                            <option>COORDINADORA DESARROLLO HUMANO</option>
                            <option>COORDINADOR INFRAESTRUCTURA Y REDES</option>
                            <option>COORDINADORA NACIONAL DE CAPACITACIÓN</option>
                            <option>COORDINADORA NACIONAL DE COMUNICACIONES</option>
                            <option>COORDINADORA NACIONAL DE SELECCION</option>
                            <option>COORDINADORA NACIONAL DE TESORERIA</option>
                            <option>COORDINADORA OFICIOS VARIOS</option>
                            <option>CHEQUEADOR OPERATIVO</option>
                            <option>CHEQUEADOR RED ALIADOS</option>
                            <option>DESCARGADOR - AUXILIAR OPERATIVO</option>
                            <option>DESCARGADOR- AUXILIAR OPERAT TEMPORADA</option>
                            <option>DESCARGADOR MONTACARGUISTA</option>
                            <option>DESPACHADOR</option>
                            <option>DIRECTOR DE ANALITICA</option>
                            <option>DIRECTOR DE ANALISIS Y QA</option>
                            <option>DIRECTOR DE INFRAESTRUCTURA Y REDES</option>
                            <option>DIRECTOR CENTRO DE ATENCION LOGISTICO</option>
                            <option>DIRECTOR DE CONTRALORIA</option>
                            <option>DIRECTOR DE DESARROLLO TI</option>
                            <option>DIRECTOR DE MERCADEO</option>
                            <option>DIRECTOR DE PRODUCTIVIDAD</option>
                            <option>DIRECTOR DE PROYECTOS</option>
                            <option>DIRECTOR DE REDES</option>
                            <option>DIRECTOR GENERAL DE T.I</option>.
                            <option>DIRECTOR FINANCIERO</option>
                            <option>DIRECTOR HARDWARE Y REDES</option>
                            <option>AUXILIAR DE HARDWARE Y REDES DG</option>
                            <option>DIRECTOR JURIDICO</option>
                            <option>DIRECTOR NACIONAL DE DLL. HUMANO</option>
                            <option>DIRECTOR NACIONAL DE MANTENIMIENTO</option>
                            <option>DIRECTOR NACIONAL DE OPERACIONES</option>
                            <option>DIRECTOR NACIONAL DE PRODUCTOS ESPECIALIZADOS</option>
                            <option>DIRECTOR NACIONAL DE RELACIONES LABORALES</option>
                            <option>DIRECTOR NACIONAL DE S.S.T.</option>
                            <option>DIRECTOR NACIONAL DE SEGURIDAD</option>
                            <option>DIRECTOR PUNTOS DROOP</option>
                            <option>DIRECTOR REGIONAL DE VENTAS</option>
                            <option>DISEÑADOR EXPERIENCIA DE USUARIOS</option>
                            <option>DISEÑADOR</option>
                            <option>EMBARCADOR</option>
                            <option>ESCOLTA</option>
                            <option>ELECTRICISTA I</option>
                            <option>ELECTRICISTA II</option>
                            <option>FACTURADOR DIURNO</option>
                            <option>FACTURADOR NOCTURNO</option>
                            <option>FACTURADOR SUPERNUMERARIO</option>
                            <option>FIBRERO- PINTOR</option>
                            <option>GEOREFERENCIADOR</option>
                            <option>GERENTE DE INFORMATICA</option>
                            <option>GERENTE ADMINISTRATIVO NACIONA</option>
                            <option>GERENTE LOGISTICO</option>
                            <option>GERENTE ADMINISTRATIVA Y DE OPERACIONES</option>
                            <option>GERENTE DE GESTIÓN HUMANA</option>
                            <option>GERENTE DE MERCADEO</option>
                            <option>GERENTE DE VENTAS CORPORATIVAS</option>
                            <option>GERENTE FINANCIERA</option>
                            <option>GERENTE JURIDICO</option>
                            <option>GERENTE REGIONAL</option>
                            <option>GESTOR CLIENTES PARETO</option>
                            <option>GESTOR DE PRODUCTOS INTERNACIONALES</option>
                            <option>IN-HOUSE</option>
                            <option>INGENIERO DE AUTOMATIZACION</option>
                            <option>INGENIERO DE ANALISIS Y QA</option>
                            <option>INGENIERO DE ANALISIS Y QA SENIOR</option>
                            <option>INGENIERO DE ANALISIS Y QA JUNIOR</option>
                            <option>INGENIERO ARQUITECTURA INFORMATICA</option>
                            <option>IMPULSADOR VENTAS CONTADO BASES Y VENTANILLA</option>
                            <option>IMPULSADOR DE ZONA</option>
                            <option>INSPECTOR DE EQUIPOS</option>
                            <option>INSTRUCTOR DE CONDUCTORES LOCALES</option>
                            <option>INSTRUCTOR DE OPERACIONES</option>
                            <option>INSTRUCTOR DE RUTA NACIONAL</option>
                            <option>INTERVENTOR FALTANTES</option>
                            <option>JEFE ADMINISTRACIÓN DOCUMENTAL</option>
                            <option>JEFE DE ALMACEN</option>
                            <option>JEFE DE AUDITORIA</option>
                            <option>JEFE DE CARTERA</option>
                            <option>JEFE NACIONAL DE CARTERA</option>
                            <option>JEFE DE CONTABILIDAD</option>
                            <option>JEFE DE DESARROLLO HUMANO</option>
                            <option>JEFE DE DESPACHOS</option>
                            <option>JEFE DE MANTENIMIENTO</option>
                            <option>JEFE DE NOMINA</option>
                            <option>JEFE DE NOMINA NACIONAL</option>
                            <option>JEFE DE OPERACIONES</option>
                            <option>JEFE DE OPERACIÓN SATELITAL</option>
                            <option>JEFE DE PRODUCCION</option>
                            <option>JEFE DE REPARTO</option>
                            <option>JEFE DE SEGURIDAD</option>
                            <option>JEFE DE SERVICIO AL CLIENTE</option>
                            <option>KARDISTA</option>
                            <option>LATONERO-PINTOR</option>
                            <option>LAVADOR</option>
                            <option>LIDER REGIONAL TI</option>
                            <option>LIDER DE SELECCIÓN</option>
                            <option>LIDER DE SEGURIDAD OPERATIVA</option>
                            <option>LIDER DE SEGURIDAD FISICA</option>
                            <option>LUBRICADOR</option>
                            <option>MECANICO DE PATIO I</option>
                            <option>MECANICO DE PATIO II</option>
                            <option>MECANICO DE TRAYLER-I</option>
                            <option>MECANICO GENERAL I</option>
                            <option>MECANICO GENERAL II</option>
                            <option>MENSAJERO ADMINISTRATIVO</option>
                            <option>MONITOR NACIONAL GPS</option>
                            <option>MONTALLANTAS</option>
                            <option>NEGOCIADOR REDES</option>
                            <option>OBSERVADOR DE RUTA</option>
                            <option>OFICIAL DE SEGURIDAD INFORMATICA</option>
                            <option>OFICIAL DE REPARACIONES LOCATIVAS</option>
                            <option>OFICIOS VARIOS</option>
                            <option>OPERADOR C4</option>
                            <option>OPERADOR MONTACARGA AUXILIAR OPERATIVO</option>
                            <option>PINTOR</option>
                            <option>PRACTICANTE OPERACIONES</option>
                            <option>PRIMERO - AUXILIAR OPERATIVO</option>
                            <option>PRIMERO FIJO BASE - AUXILIAR OPERATIVO</option>
                            <option>PRESIDENTE EJECUTIVO</option>
                            <option>PRESIDENTE OPERATIVO</option>
                            <option>PROFESIONAL EN FORMACIÓN</option>
                            <option>PROGRAMADOR Y DESARROLLADOR WEB</option>
                            <option>PROGRAMADOR SENIOR</option>
                            <option>PROGRAMADOR RUTA NACIONAL</option>
                            <option>PROGRAMADOR RUTA NACIONAL JUNIOR</option>
                            <option>RECEPCIONISTA</option>
                            <option>SECRETARIA DE CARTERA</option>
                            <option>SECRETARIA DE SEGURIDAD</option>
                            <option>SECRETARIA DE JURIDICO</option>
                            <option>SEGUNDO - AUXILIAR OPERATIVO</option>
                            <option>SOLDADOR</option>
                            <option>SUPERNUM CONDUCTOR-AUX OPER TEMPORADA</option>
                            <option>SUPERNUMERARIO ADMINISTRATIVO</option>
                            <option>SUPERNUMERARIO CONDUCTOR AUXILIAR OPERATIVO</option>
                            <option>SUPERNUMERARIO CONTABLE</option>
                            <option>SUPERNUMERARIO DISTRIBUCION</option>
                            <option>SUPERNUMERARIO DISTRIBUCION - TEMPORADA</option>
                            <option>SUPERNUMERARIO OFICINA OPERATIVA</option>
                            <option>SUPERNUMERARIO DE FACTURACION</option>
                            <option>SUPERVISOR DE LATONERÍA Y PINTURA</option>
                            <option>SUPERVISOR DE LAVADO</option>
                            <option>SUPERVISOR DE MENSAJERIA</option>
                            <option>SUPERVISOR DE SEGURIDAD REGIONAL</option>
                            <option>COORDINADOR ARQUITECTURA INFORMATICA</option>
                            <option>COORDINADOR DE ANALISIS Y QA</option>
                            <option>COORDINADOR DE HUB</option>
                            <option>SUPERVISOR SORTER</option>
                            <option>SUPERVISOR INTERIOR MESA</option>
                            <option>TANQUEADOR</option>
                            <option>TECNICO COMUNICACIONES I</option>
                            <option>TECNICO COMUNICACIONES II</option>
                            <option>TECNICO EN MANTENIMIENTO Y OPERACIONES</option>
                            <option>TECNICO EN MTTO. ELCTRIO Y ELECTR DE AUTOM</option>
                            <option>TECNOLOGO EN ADMINISTRACIÓN DOCUMENTAL</option>
                            <option>VENDEDOR SUPERNUMERARIO</option>
                            <option>VENDEDOR SUPERNUMERARIO CUENTA CORRIENTE</option>
                            <option>VENDEDOR SUPERNUMERARIO JR</option>
                            <option>VICEPRESIDENTE ADMINISTRATIVO</option>
                            <option>VICEPRESIDENTE CADENA DE ABASTECIMIENTO</option>
                            <option>VICEPRESIDENTE COMERCIAL</option>
                            <option>VICEPRESIDENTE DE OPERACIONES</option>
                            <option>VIGILANTE</option>
                            <option>VIGILANTE CAMARAS</option>
                            <option>ZONIFICADOR</option>
                       </select>
                        <?php 
                        break; 
                        case 'v50aenuf':?>
                        <select class="new-todo" id="Cargo"style='color:#999999;font-size:16px!important' oninput='style.color="black"'>
                            <option style="color:#a2a2a2">Seleccione una opción...</option>
                            <option>ADMINISTRATIVO</option>
                            <option>AUXILIAR DE BODEGA</option>
                            <option>SUPERVISOR DE BODEGA</option>
                            <option>LIDER LOGISTICO</option>
                       </select>
                        <?php 
                        break; 
                    default:?>
                        <input class="new-todo"id="Cargo" placeholder="Escriba aquí...">
                        <?php 
                    break;
                }
                ?>
                </div>
                <div class="cargo2"> 
                    <select id="Cargo2" class="Cargo_ new-todo" style='color:#999999;font-size:16px!important' oninput='style.color="black"'>
                        <option value="">Cargando...</option>
                    </select>
                </div>
                </div>
                <div class="col-md-4">
                <p type="email" style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Correo electrónico del empleado:</p><input class="new-todo"id="Email"placeholder="ejemplo: mi_correo@gmail.com"required>
                </div>
                <div class="col-md-4">
                <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Número Celular: <span style="font-family:verdana;color:#1c752a"> (opcional para envío de información por WhatsApp)</span></p><input class="new-todo"id="Celular"placeholder="ejemplo: 3043698547">
                </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                <p type="email" style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Correo electrónico de la empresa:</p><input class="new-todo"id="Email2"placeholder="ejemplo: correo_empresa@gmail.com"required>
               </div>
               <div class="col-md-4">
               <?php  
                switch ($Clave) {
                    case 'uxn2xser': ?>
                       <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo de exámen:</p><select class="new-todo"id="Examen"style='color:#999999;font-size:16px!important' oninput='style.color="black"' onChange="departamento2(this.form)"name="Departamento2">
                            <option value=""style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                            <option>Ingreso</option>
                            <option>Egreso</option>
                            <option>Periódico</option>
                            <option class="especifico">Retorno laboral</option>
                            <option class="especifico">Seguimiento, recomendaciones y/o restricciones médicas</option>
                        </select>
                        <?php 
                        break;
                    case 'qdw434g2':?>
                       <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo de exámen:</p><select class="new-todo"id="Examen"style='color:#999999;font-size:16px!important' oninput='style.color="black"' onChange="departamento3(this.form)"name="Departamento3">
                            <option value=""style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                            <option>INGRESO</option>
                            <option>PERIÓDICO</option>
                            <option>EGRESO</option>
                        </select>
                        <?php 
                        break;
                    case 'gdlpoud6':?>
                       <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo de exámen:</p><select class="new-todo"id="Examen"style='color:#999999;font-size:16px!important' oninput='style.color="black"' onChange="departamento3(this.form)"name="Departamento3">
                            <option value=""style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                            <option>INGRESO</option>
                            <option>PERIÓDICO</option>
                            <option>EGRESO</option>
                        </select>
                        <?php 
                        break;  
                    case 'jnxp6m5k':?>
                       <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo de exámen:</p><select class="new-todo"id="Examen"style='color:#999999;font-size:16px!important' oninput='style.color="black"'>
                            <option value=""style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                            <option>INGRESO</option>
                            <option>PERIODICO</option>
                            <option>EGRESO</option>
                            <option class="especifico">ALTURAS</option>
                            <option class="especifico">MANIPULACIÓN DE ALIMENTOS</option>
                            <option class="especifico">POSTINCAPACIDAD</option>
                            <option class="especifico">SEGUIIMIENTO A CONDICIONES DE SALUD</option>
                        </select>
                        <?php 
                        break;  
                    case 'v50aenuf':?>
                       <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo de exámen:</p><select class="new-todo"id="Examen"style='color:#999999;font-size:16px!important' oninput='style.color="black"' >
                            <option value=""style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                            <option>INGRESO</option>
                            <option>PERIODICO</option>
                            <option>EGRESO</option>
                            <option> class="especifico" ALTURAS</option>
                            <option class="especifico">MANIPULACIÓN DE ALIMENTOS</option>
                            <option class="especifico">POSTINCAPACIDAD</option>
                            <option class="especifico">SEGUIIMIENTO A CONDICIONES DE SALUD</option>
                        </select>
                        <?php 
                        break;       
                    default:?>
                       <p  style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo de exámen:</p><select class="new-todo"id="Examen"style='color:#999999;font-size:16px!important' oninput='style.color="black"' onChange="departamento(this.form)"name="Departamento">
                            <option value=""style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                            <option>Ingreso</option>
                            <option>Egreso</option>
                            <option>Periódico</option>
                            <option class="especifico">Laboratorios</option>
                            <option class="especifico">Vacunación</option>
                        </select>
                        <?php 
                    break;
                }
                ?>
                </div>
                <div class="col-md-4">
               <?php  
                switch ($Clave) {
                    case 'uxn2xser': ?>
                        <p class="especifico" style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo específico de exámen:</p><select class="new-todo especifico"id="Especifico"style='color:#999999;font-size:16px!important' oninput='style.color="black"' name="Ciudad2">
                            <option value=""style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                            <option></option>
                        </select>
                        <?php 
                        break;
                    case 'qdw434g2':?>
                        <p class="especifico" style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo específico de exámen:</p><select class="new-todo especifico"id="Especifico"style='color:#999999;font-size:16px!important' oninput='style.color="black"' name="Ciudad3">
                            <option value=""style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                            <option></option>
                        </select>
                        <?php 
                        break;
                    case 'gdlpoud6':?>
                        <p class="especifico" style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo específico de exámen:</p><select class="new-todo especifico"id="Especifico"style='color:#999999;font-size:16px!important' oninput='style.color="black"' name="Ciudad3">
                            <option value=""style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                            <option></option>
                        </select>
                        <?php 
                        break;  
                    case 'jnxp6m5k':?>
                        <?php 
                        break;  
                    case 'v50aenuf':?>
                        <?php 
                        break;       
                    default:?>
                        <p class="especifico" style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Tipo específico de exámen:</p><select class="new-todo especifico"id="Especifico"style='color:#999999;font-size:16px!important' oninput='style.color="black"' name="Ciudad">
                            <option value=""style='display:none' hidden>De clic aquí para seleccionar una opción...</option>
                            <option></option>
                        </select> 
                        
                        <?php 
                    break;
                }
                ?>
                </div>
                </div>
                
                <div class="row">
                <div class="col-md-4">
                <table style="text-align:left;margin-left:2em;margin-top:1em;font-family:verdanab">
                    <tr>
                        <td><a href="#Modal_examenes" data-toggle="modal" id="btn2" align="center" style="font-family:Verdanab;text-align:left!important;color:#453969;font-size:14px">Clic para adicionar exámenes</a><br><br></td>
                    </tr>
                    <tr>
                        <td><p id="adicionales" style="color:#333333;padding:1em;font-family:Verdana;font-size:14px"></p></td>
                    </tr>
                </table><br>
                </div>
                <div class="col-md-4">
                <p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Observaciones:</p><textarea class="new-todo note" id="Observaciones"style='color:#000000;font-size:16px!important' placeholder="Escriba aquí..."></textarea>
                </div>
                <div class="col-md-4">
                <p style="text-align:left;margin-left:2em;margin-top:1em;color:#453969;font-family:verdanab">Observaciones especiales:<br><span style="color:#ff1a1a;font-family:verdana">(Texto visible sólo para la empresa que realiza los exámenes, no para el usuario agendado)</span></p><textarea class="new-todo note" id="Observaciones2"style='color:#000000;font-size:16px!important' placeholder="Escriba aquí..."></textarea>
                </div>
                <p style="font-size:16px;color:#666666;font-family:verdanab"><br>Acepto los términos<input type="checkbox"id="checkbox2"value="1"name="termin"id="termin"/></input><label id="check0"for="checkbox2"></p><br>
                <div class="col-lg-2 col-lg-offset-5">
                    <nav ><button href="#citas"id="boton"type="submit"name="enviar"class="btn btn btn-default btn-block scroll"style="font-size:13px!important;height:35px;line-height:1em">Enviar</button></nav>
                </div>
            </form>
            <div class="col-lg-2 col-lg-offset-5">
                <nav><button href="#citas"id="boton2"type="submit"name="enviar"class="btn btn btn-default btn-block scroll"style="font-size:13px!important;height:35px;line-height:1em;border-radius:0">Enviar</button></nav><br><br>
            </div><br><br>
            
          </header>
          <footer class="footer"align="center">
                <button id="clear-completed">Limpiar formulario</button>
            </footer>
       </div>
    </div>
</div>
    <div class="col-md-12" style="margin:0!important;padding:0!important;text-align:left;font-size:14px;font-family:verdana">
        <div style="background:#ffffff;padding:1em;border-radius:16px!important;margin-bottom:3em;box-shadow: 0 8px 4px 0 rgba(0, 0, 0, 0.3), 0 25px 50px 0 rgba(0, 0, 0, 0.1);">
        <h3 style="font-size:20px;color:#453969;font-family:verdanab;text-align:center">Carga masiva de usuarios</h3><br>
        <h3 style="font-size:20px;color:#000000;font-family:narrow">Instrucciones</h3>
        <p><script style="color:#008000;font-size:20px"class="fa fa-check"></script>&nbsp&nbsp<span>Descargue la plantilla modelo:</p>
        <table>
            <tr>
                <td><button class="nuevo2"id="export_xlsx"href="">Plantilla .xlsx</button></td>
                <td class="excel">
                    <form class="formxlsx" action="../phpspreadsheet/export11.php" method="post">
                        <input type="hidden" name="Codigo" value="<?php echo $Codigo_ ?>"></input>
                        <button  type="submit" id="export_data" name='export_data' class="nuevo2" style="width:12em">Cargos.xlsx</button>
                    </form>
                </td>
            </tr>
        </table><br>
        <p><script style="color:#008000;font-size:20px"class="fa fa-check"></script>&nbsp&nbsp<span>Diligencie los campos según el orden. El formato de fecha debe ser: año/mes/dia. Elimine las dos primeras filas de encabezado.</p>
        <p><img id="imagen_fija"src="../imagine/ejemploxlsx3.jpeg"style="width:100%"></p>
        <p><script style="color:#008000;font-size:20px"class="fa fa-check"></script>&nbsp&nbsp<span>Seleccione el archivo y de clic en importar.</p>
        <table>
            <tr>
                 <form method="post"id="import_excel_form"enctype="multipart/form-data">
                    <td ><input type="file"name="import_excel"name="files1"id="file-7"class="inputfile inputfile-8"data-multiple-caption="{count} archivos seleccionados"/>    
                        <label for="file-7">
                        <span class="iborrainputfile"></span>
                        <strong>Archivo.xlsx</strong>
                        </label>
                    </td>
                    
            </tr>
            <tr>
                <td><input type="submit"name="import"id="import"class="btn nuevo2"style="width:10.3em;margin-top:1em!important"value="Importar"/></td>
                </form>    
            </tr>
            <tr>
                <td><span style="font-family:verdanab;font-size:14px"><br>N° de citas guardadas:&nbsp&nbsp</span> <span style="font-family:narrow;color:#e7744f;font-size:28px" id="contador"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>   
            </tr>
        </table><br><br><br>
         <div class="col-lg-2 col-lg-offset-5">
                <nav><button href="#citas"id="boton2"type="submit"name="enviar"class="btn btn btn-default btn-block scroll"style="font-size:13px!important;height:35px;line-height:1em;border-radius:0">Enviar</button></nav><br><br>
            </div><br><br>
        </div>
        
     </div>
        
       
        
        <!--<h3 style="font-size:20px;color:#453969;font-family:verdanab">Instrucciones Generales</h3><br>
        <h3 style="font-size:20px;color:#000000;font-family:narrow">Química sanguínea, hormonas, serología e inmunología</h3>
        <p><script style="color:#008000;font-size:20px"class="fa fa-angle-right"></script>&nbsp&nbsp<span>Toma de muestra. Hora inicio: 6:30 a.m. lunes a sábado.</p>
        <p><script style="color:#008000;font-size:20px"class="fa fa-angle-right"></script>&nbsp&nbsp<span>Para la muestra de sangre, debe presentarse en ayunas, evitando modificar la forma de vida cotidiana, esto garantizará resultados reales.</p>
        <p><script style="color:#008000;font-size:20px"class="fa fa-angle-right"></script>&nbsp&nbsp<span>El ayuno recomendado es un período de 10 a 12 horas del día antes de la cita. NO ingerir bebidas alcohólicas o fumar, preferiblemente dos días antes de la toma de la muestra.</p>
        <p><script style="color:#008000;font-size:20px"class="fa fa-angle-right"></script>&nbsp&nbsp<span>Informe al personal del laboratorio, si está tomando algún tipo de medicamento y su dosificación.</p><br>
        <h3 style="font-size:20px;color:#000000;font-family:narrow">Instrucciones para examen coprológico</h3>
        <p><script style="color:#008000;font-size:20px"class="fa fa-angle-right"></script>&nbsp&nbsp<span>Recoger Muestra de Materia Fecal en frasco limpio y seco.</p>
        <p><script style="color:#008000;font-size:20px"class="fa fa-angle-right"></script>&nbsp&nbsp<span>Ciérrelo bien.</p>
        <p><script style="color:#008000;font-size:20px"class="fa fa-angle-right"></script>&nbsp&nbsp<span>Rotúlelo con el nombre.</p>
        <p><script style="color:#008000;font-size:20px"class="fa fa-angle-right"></script>&nbsp&nbsp<span>Los manipuladores de alimentos deben traer las uñas sin ningún tipo de color o barníz, preferiblemente cortas.</p><br>
        <h3 style="font-size:20px;color:#000000;font-family:narrow">Instrucciones otros examenes</h3>
        <p><script style="color:#008000;font-size:20px"class="fa fa-angle-right"></script>&nbsp&nbsp<span>Para otros examenes como evaluación médica, espirometría, audiometría, psicométrico y otros, no se requiere ningún tipo de preparación, puede acercarse para una atención oportuna con calidad.</p><br>
        -->
        
        
        
        
        
        <h3 style="font-size:20px;color:#453969;font-family:verdanab;text-align:center">Nuestras sedes a nivel nacional</h3><br>
        <table class="sedes">
    <tr>
        <td><button class="nuevo2" id="aguachica" href="">Arguachica</button></td>
        <td><button class="nuevo2" id="armenia" href="">Armenia</button></td>
        <td><button class="nuevo2" id="apartado" href="">Apartadó</button></td>
        <td><button class="nuevo2" id="barranquilla" href="">Barranquilla</button></td>
        <td><button class="nuevo2" id="barranquilla2" href="">Barranquilla</button></td>
        <td><button class="nuevo2" id="barrancabermeja" href="">Barrancabermeja</button></td>
        <td><button class="nuevo2" id="barrancabermeja2" href="">Barrancabermeja</button></td>
        <td><button class="nuevo2" id="buga" href="">Buga</button></td>
    </tr>
    <tr>
        <td><button class="nuevo2" id="central" href="">Bogotá Central</button></td>
        <td><button class="nuevo2" id="chia" href="">Chía</button></td>
        <td><button class="nuevo2" id="norte" href="">Bogotá Norte</button></td>
        <td><button class="nuevo2" id="norte3" href="">Bogotá Norte</button></td>
        <td><button class="nuevo2" id="central2" href="">Bogotá Central</button></td>
        <td><button class="nuevo2" id="sur" href="">Bogotá Sur</button></td>
        <td><button class="nuevo2" id="sur2" href="">Bogotá Sur</button></td>
        <td><button class="nuevo2" id="lasoledad" href="">Bogotá La Sole...</button></td>
    </tr>
    <tr>
        <td><button class="nuevo2" id="americas" href="">Bogotá Américas</button></td>
        <td><button class="nuevo2" id="bucaramanga" href="">Bucaramanga</button></td>
        <td><button class="nuevo2" id="bucaramanga2" href="">Bucaramanga</button></td>
        <td><button class="nuevo2" id="funza" href="">Funza</button></td>
        <td><button class="nuevo2" id="madrid" href="">Madrid</button></td>
        <td><button class="nuevo2" id="mosquera" href="">Mosquera</button></td>
        <td><button class="nuevo2" id="cali2" href="">Cali Norte</button></td>
        <td><button class="nuevo2" id="cartagena" href="">Cartagena</button></td>
    </tr>
    <tr>
        <td><button class="nuevo2" id="ibague" href="">Ibagué</button></td>
        <td><button class="nuevo2" id="laceja" href="">La Ceja</button></td>
        <td><button class="nuevo2" id="ladorada" href="">La Dora</button></td>
        <td><button class="nuevo2" id="medellin" href="">Medellín</button></td>
        <td><button class="nuevo2" id="cartagena2" href="">Cartagena</button></td>
        <td><button class="nuevo2" id="monteria" href="">Montería</button></td>
        <td><button class="nuevo2" id="palmira" href="">Palmira</button></td>
        <td><button class="nuevo2" id="pereira" href="">Pereira</button></td>
    </tr>
    <tr>
        <td><button class="nuevo2" id="pereira2" href="">Pereira</button></td>
        <td><button class="nuevo2" id="pereira3" href="">Pereira</button></td>
        <td><button class="nuevo2" id="pasto" href="">Pasto</button></td>
        <td><button class="nuevo2" id="cucuta" href="">Cúcuta</button></td>
        <td><button class="nuevo2" id="mocoa" href="">Mocoa</button></td>
        <td><button class="nuevo2" id="neiva" href="">Neiva</button></td>
        <td><button class="nuevo2" id="neiva2" href="">Neiva</button></td>
        <td><button class="nuevo2" id="pasto2" href="">Pasto</button></td>
    </tr>
    <tr>
        <td><button class="nuevo2" id="popayan" href="">Popayan</button></td>
        <td><button class="nuevo2" id="puertogaitan" href="">Puerto Gaitán</button></td>
        <td><button class="nuevo2" id="berrio" href="">Puerto Berrío</button></td>
        <td><button class="nuevo2" id="quibdo" href="">Quibdó</button></td>
        <td><button class="nuevo2" id="santamarta" href="">Santa Marta</button></td>
        <td><button class="nuevo2" id="sincelejo" href="">Sincelejo</button></td>
        <td><button class="nuevo2" id="tunja" href="">Tunja</button></td>
        <td><button class="nuevo2" id="tulua" href="">Tuluá</button></td>
    </tr>
    <tr>
        <td><button class="nuevo2" id="riohacha" href="">Riohacha</button></td>
        <td><button class="nuevo2" id="villavicencio" href="">Villavicencio</button></td>
        <td><button class="nuevo2" id="valledupar" href="">Valledupar</button></td>
        <td><button class="nuevo2" id="manizales" href="">Manizales</button></td>
        <td><button class="nuevo2" id="ocaña" href="">Ocaña</button></td>
        <td><button class="nuevo2" id="caucasia" href="">Caucasia</button></td>
        <td><button class="nuevo2" id="magangue" href="">Magangué</button></td>
        <td><button class="nuevo2" id="puertoasis" href="">Puerto Asís</button></td>
    </tr>
    <tr>
        <td><button class="nuevo2" id="montelibano" href="">Montelíbano</button></td>
        <td><button class="nuevo2" id="rionegro" href="">Rionegro</button></td>
        <td><button class="nuevo2" id="Facatativa" href="">Facatativa</button></td>
        <td><button class="nuevo2" id="Madrid2" href="">Madrid</button></td>
        <!-- Las últimas 4 celdas quedan vacías para mantener 8 columnas -->
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
    </div>    
   
</div>
        <div style="text-align:center;z-index:9999!important"><a href="https://www.cedisalud.com"><img src="../imagine/logo.png"width="150"></a></div>
<div class="col-lg-6 col-lg-push-6"align="center">
    <p style="font-family:Narrow;color:#666666;font-size:20px;letter-spacing:1px;">Certificado <span style="color:#f58634">SSL &nbsp</span><a id="certificado"title="Certificado SSL"href="#"style="padding-top:0px;padding-bottom:0"data-toggle="modal"target="_blank"aria-hidden="true"><img src="https://www.cedisalud.com.co/imagine/certificado.png"width="52"height="50"/></a></p>
</div>
<div class="col-lg-6 col-lg-pull-6">
    <span style="font-size:14px;font-family:verdana;color:#333333!important">Diseño&nbspy&nbspdesarrollo&nbspweb: <a href='https://api.whatsapp.com/send?phone=573046311473' style="letter-spacing:2px;font-size:13px">PERFILAR</a></span><br> 
    <span style="font-size:14px;font-family:verdana;color:#333333!important">Copyright © 2021 - Medellín (Colombia)</span>
</div>
<div id="costumModal"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-lg"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <br>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;">
                <a type="button"id="btn_cierre" href="https://www.cedisalud.com.co/agenda"style="font-family:verdanab;color:#666666;font-size:18px;margin-right:1em;float:right">Agendar nuevamente</a><br>
                <div id="message"style='color:#000000;font-size:16px;padding:2em'></div>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal2"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-title"align="justify"style="border-radius:0px;background-color:#ffffff">
       <div class="modal-header">
            <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
        </div>
        <div class="modal-body"style="text-align:center">
            <div id="message2"style="font-family:verdana;font-size:13px;text-align:center"></div><br>
            <p style="font-family:verdanab;font-size:13px;">¿Desea enviarlos por whatsaap a los usuarios?</p>
            <input type="hidden"id="_fecha"></input>
            <input type="hidden"id="_autor"></input>
            <table style="width:100%"><br>
                <tr>
                    <td><button class="nuevo2 _si"style="width:2em;height:2em;font-size:20px"href="">Si</button></td>
                    <td><button class="nuevo2 _no"style="width:2em;height:2em;font-size:20px;border: 1px solid #666666"href="">No</button></td>
                </tr>
            </table>
            <p id="content"style="position:absolute;left:45%"></p><br>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div>
<div id="costumModal3"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-title"align="justify"style="border-radius:0px;background-color:#ffffff">
       <div class="modal-header">
            <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
        </div>
        <div class="modal-body"style="text-align:center">
            <div style="font-family:verdana;font-size:13px;text-align:center;font-family:verdanab">Antes de diligenciar el formulario, por favor seleccione una sede.</div>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div>
<div id="costumModal4"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Cedisalud IPS - Medellín</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?hl=en&amp;q=Cl.%2031%20%2343-50%2C%20Medell%C3%ADn%2C%20Antioquia+(Cedisalud%20IPS%20Medell%C3%ADn)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://embedfbvideo.com">embed facebook video on website</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal5"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Cedisalud IPS - Apartadó</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cl.%2098%20%23102-68%2C%20Apartad%C3%B3%2C%20Antioquia+(Cedisalud%20IPS)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">Googlemapsgenerator.com/ja/</a> & <a href="https://enablecookies.info">How to enable cookies in safari</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal6"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Medikcorp SAS - Barranquilla</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%2047%20%23%2376-79%2C%20Barranquilla%2C%20Atl%C3%A1ntico+(Cedisalud%20IPS)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/fr/">gmapgen fr</a> & <a href="https://embedvimeovideo.com">Vimeo embed</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal7"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
             <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Zonamedica IPS - Bogotá Norte</h3>
                    <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Autopista Norte. N 105 - 27, zona medica Bogotá&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps</a> and <a href="https://skipboregler.com/skip-bo-regle/">skip bo règle</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/fr/">Googlemapsgenerator.com/fr/</a> & <a href="https://onlinecasinoutansvensklicens.se/">https://onlinecasinoutansvensklicens.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal8"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Unimos Salud - Bogotá Sur</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=%2368b-%20a%2068b-%2C%20Cl.%2044%20Bis%20BSur%20%2368b21%2C%20Bogot%C3%A1+(Cedisalud%20IPS)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/es/">Googlemapsgenerator.com/es/</a> & <a href="https://embedinstagramfeed.com">Embed instagram feed</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal9"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">IPS Prosynergo SAS - Bucaramanga</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Carrera 31 N 49-67, IPS Prosynergo SAS, Bucaramanga, Santander&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps</a> and <a href="https://xn--helgln-mua.com/">sms lån helg</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">Googlemapsgenerator.com/ja/</a> & <a href="https://embedtwitterwidget.com">Twitter embed</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal10"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Salud Ocupacional y Medicinas Alternativas - Cali</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Av.%202e%20Nte.%20%23%2324N-58%2C%20Cali%2C%20Valle%20del%20Cauca+(Cedisalud%20IPS)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">Googlemapsgenerator.com/zh/</a> & <a href="https://www.unorules.org/">https://www.unorules.org/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal11"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
                <div class="modal-header">
                    <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
                </div>
                <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                    <h3 style="color:#453969;font-family:verdanab">H&S Occupational - Cartagena</h3>
                    <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Transversal  54 N° 21A 91 LOCAL 6,  Cartagena, Bolívar&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">embed google maps</a> and <a href="https://utaninkomst.se/">låna pengar utan inkomst</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/es/">Googlemapsgenerator.com/es/</a> & <a href="https://embedinstagramfeed.com">Embed instagram feed</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                <div class="modal-footer">
                    <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal12"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Proteccion Integral IPS - Pereira</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?q=Cl+19+N5-13%2C+cl%C3%ADnica+risaralda&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/es/">Googlemapsgenerator.com/es/</a> & <a href="https://embedinstagramfeed.com">Embed instagram feed</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal13"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Carvajal Laboratorios IPS SAS - Tunja</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cl.%2039%20%2340%2C%20Tunja%2C%20Boyac%C3%A1+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://xn--snabbln5000-28a.com/lana-10000-kr/">låna 10000</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal14"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">GESMED - Cartagena</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Barrio%20Contadora%2C%20Edificio%20la%20Caracola%20Local%201%20Calle%2031%20%23%2069%20-%2075+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">Googlemapsgenerator.com/zh/</a> & <a href="https://embedvimeovideo.com">Vimeo embed</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal15"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">ASEINCAP - Villavicencio</h3>
                <p style="font-family:verdanab">Carrera 38 N° 33a-38 Barzal</p>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Carrera 38 N 33a38, Barzal, Villavicencio, Meta&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps</a> and <a href="https://skipboregler.com/skip-bo-regle/">skip bo règle</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">Googlemapsgenerator.com/zh/</a> & <a href="https://enablejavascript.co">How to enable javascript on chrome</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal16"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">IPS Corriente Vital - La Ceja</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cl.%2017%20%231866%2C%20La%20Ceja%2C%20Antioquia+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/fr/">Googlemapsgenerator.com/fr/</a> & <a href="https://mgacasinoutansvensklicens.se/">utländska casinon</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal17"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Biolaboral IPS - Quibdó</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=BIOLABORAL IPS, Carrera8 N° 30 - 31, Quibdó, Chocó&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps</a> and <a href="https://skipboregler.com/skip-bo-regle/">skip bo règle</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://harpangratis.se/">harpan spel</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal18"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Grupo Ocupacional - Bogotá Central</h3>
                 <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%2027a%20%23%2352-48%2C%20Bogot%C3%A1+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">Googlemapsgenerator.com/ja/</a> & <a href="https://kasinoutanspelpaus.se/">https://kasinoutanspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal19"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Progresando en Salud IPS - Cúcuta</h3>
                  <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cl.%2021a%20%230B-75%2C%20C%C3%BAcuta%2C%20Norte%20de%20Santander+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">Googlemapsgenerator.com/zh/</a> & <a href="https://nyacasinoutansvensklicens.se/">https://nyacasinoutansvensklicens.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>    
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal20"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Peña Asesores Salud Ocupacional S.A.S. -PASO-'</h3>
                  <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cr14%2016%20-%2028%2C%20Av.%20Circunvalar%2C%20Monter%C3%ADa%2C%20C%C3%B3rdoba+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/es/">Googlemapsgenerator.com/es/</a> & <a href="https://nouc.se/">sms lån utan uc</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style> 
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal21"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">CEMESST - Cali</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Calle 24a Norte Avenida 2 Bis N° 38, San Vicente, Cali, Valle del Cauca Cemesst&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps generator</a> and <a href="https://beviljaralla.se/">sms lån utan uc</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">Googlemapsgenerator.com/ja/</a> & <a href="https://xn--mikroln-jxa.com/">mikrolån.com</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal22"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">CEMESST - Palmira</h3>
                   <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cl.%2034%20%23%2327-85%2C%20Palmira%2C%20Valle%20del%20Cauca+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://onlinecasinoutanspelpaus.se/">https://onlinecasinoutanspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal23"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Zonamedica IPS - Bogotá La Soledad</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=500&amp;height=440&amp;hl=en&amp;q=Ak.%2028%20%2341-36%2C%20Teusaquillo%2C%20Bogot%C3%A1%2C%20Cundinamarca+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">Googlemapsgenerator.com/zh/</a> & <a href="https://harpangratis.se/spindelharpan/">spindelharpan gratisspela</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal24"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Unimsalud - Bogotá Norte</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%2023%20%23124-87%2C%20Bogot%C3%A1%2C%20Unimsalud+(Unimsalud%20Norte)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/fr/">Googlemapsgenerator.com/fr/</a> & <a href="https://kasinoutansvensklicens.nu/">https://kasinoutansvensklicens.nu/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal25"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Unimsalud - Bogotá Central</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cl.%2072a%20%2320c-55%2C%20Bogot%C3%A1%20Unimsalud+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/fr/">gmapgen fr</a> & <a href="https://kasinoutanlicens.nu/">https://kasinoutanlicens.nu/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal26"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">IPS Centro de Diagnóstico Ocupacional - Neiva</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=ClL%2014%20%23%203-88%20neiva+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">Googlemapsgenerator.com/zh/</a> & <a href="https://schackportalen.nu/">emotichur går kungen i schackons list</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal27"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">LABORMED - Sincelejo</h3>
                <p style="text-align:center;color:#666666;font-size:16px">Carrera 19 N° 15-67</p>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Carrera 19 N° 15 - 67, Las Flores, Sincelejo, Sucre&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps</a> and <a href="https://skipboregler.com/skip-bo-regle/">skip bo règle</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">Googlemapsgenerator.com/ja/</a> & <a href="https://spelsidorutansvensklicens.se/">https://spelsidorutansvensklicens.se</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal28"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">SSTA CONSULTING S.A.S - Barranquilla</h3>
                <p style="text-align:center;color:#666666;font-size:16px">Cra. 47 #79-129</p>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Cra. 47 N° 79-129, Nte. Centro Historico, Barranquilla, Atlántico&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">embed google maps html</a> and <a href="https://skipboregler.com/skip-bo-reglas/">skip bo reglas</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">Googlemapsgenerator.com/zh/</a> & <a href="https://bettingsidorutansvensklicens.nu/">bettingsidorutansvensklicens.nu</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal29"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">APREHSI GROUP - Valledupar</h3>
                <p style="text-align:center;color:#666666;font-size:16px">Transv. 33B # 37 - 16 Barrio Las Delicias</p>
               <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=%F0%9D%97%94%F0%9D%97%A3%F0%9D%97%A5%F0%9D%97%98%F0%9D%97%9B%F0%9D%97%A6%F0%9D%97%9C%20%F0%9D%97%9A%F0%9D%97%A5%F0%9D%97%A2%F0%9D%97%A8%F0%9D%97%A3%2C%20Cl.%2018b%20%23%2320-32%2C%20Valledupar%2C%20Cesar+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">Googlemapsgenerator.com/nl/</a> & <a href="https://casinosnabbutbetalning.net/">https://casinosnabbutbetalning.net/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal30"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">UNIRSALUD - Manizales</h3>
                <p style="text-align:center;color:#666666;font-size:16px">Carrera 22, Av. del Centro # 26-12, Manizales, Caldas</p>>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Carrera%2022%2C%20Av.%20Del%20Centro%20%23%2326-12%2C%20Manizales%2C%20Caldas+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://casinosnabbutbetalning.net/">https://casinosnabbutbetalning.net/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal31"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">OCUPSALUD SST SAS - Pasto</h3>
                <p style="text-align:center;color:#666666;font-size:16px">CRA 38 # 20 - 37, Barrio Morasurco, Pasto, Nariño</p>>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%2038%20%23%232037%2C%20Pasto%2C%20Nari%C3%B1o+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://www.xn--casinoutanspelgrnser-qzb.se/happy-slots-casino/">https://www.casinoutanspelgränser.se/happy-slots-casino/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal32"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">PROENSO - Armenia</h3>
                <p style="text-align:center;color:#666666;font-size:16px">CARRERA 14 # 9 -18 Edificio Tarantella</p>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Edificio%20Tarantella%2C%20Carrera%2014%20%239-18%2C%20piso%202%2C%20Centro%2C%20Armenia%2C%20Quind%C3%ADo+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">Googlemapsgenerator.com/zh/</a> & <a href="https://casinoutangranser.nu/payoutz-casino/">https://casinoutangranser.nu/payoutz-casino/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal33"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">APREHSI GROUP- Riohacha</h3>
                <p style="text-align:center;color:#666666;font-size:16px">CARRERA 10 # 14-60</p>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%2010%20%2314-60%2C%20Riohacha%2C%20La%20Guajira+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://www.xn--casinoutanspelgrnser-qzb.se/payoutz-casino/">https://www.casinoutanspelgränser.se/payoutz-casino/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal34"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">RVG IPS - Barrancabermeja</h3>
                <p style="text-align:center;color:#666666;font-size:16px">Calle 46 No. 25-25, Barrio El Recreo</p>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%2025%20%2345-50%2C%20Barrancabermeja%2C%20Santander+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal35"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">PREVENIR 1-A SA - Santa Marta</h3>
                <p style="text-align:center;color:#666666;font-size:16px">CARRERA 20 # 12-32, Barrio San Francisco, frente al edificio Davinci</p>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%2020%20%2312-32%2C%20Comuna%204%2C%20Santa%20Marta%2C%20Magdalena+(PREVENIR%201-A%20SA)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">gmapgen jp</a> & <a href="https://harpangratis.se/spindelharpan/">patiens spindelharpan</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal36"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Previsión Ocupacional SAS - Pereira</h3>
                <iframe  style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cl.%2019%20%235-13%20piso%204%2C%20Pereira%2C%20Risaralda+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/fr/">gmapgen fr</a> & <a href="https://harpangratis.se/spindelharpan/">spindelharpan</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal37"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Laboratorio Clínico López Línea Ocupacional IPS - Buga</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Carrera 15 N° 4-61 Buga, Valle del Cauca&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps</a> and <a href="https://skipboregler.com/skip-bo-regle/">skip bo règle</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/fr/">Googlemapsgenerator.com/fr/</a> & <a href="https://solitairespider.co/freecell/">solitairespider.co/freecell</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal38"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">IPS Opositiva Salud Integral Tuluá SAS - Tuluá</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%2037%20%2325-31%2C%20IPS%20Opositiva%20Salud%20Integral%20Tulu%C3%A1%20SAS%2C%20Tulu%C3%A1%2C%20Valle%20del%20Cauca+(IPS%20Opositiva%20Salud%20Integral%20Tulu%C3%A1%20SAS)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">gmapgen jp</a> & <a href="https://spindelharpan.nu/kungen/">patiens kungen</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal39"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Capella IPS - Aguachica (Cesar)</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%2022%20%236-19%2C%20Aguachica%2C%20Cesar+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">Googlemapsgenerator.com/zh/</a> & <a href="unoregler.com/da/">unoregler.com/da/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal40"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Human Group Corp IPS VIP (Bogotá Norte)</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cl.%20102a%20%2345A-03%2C%20Bogot%C3%A1%20human%20group+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">Googlemapsgenerator.com/nl/</a> & <a href="https://unoregler.com/">regler uno</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal41"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">IPS Sigmedical Funza (Bogotá)</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cl.%2014%20%2310%20%E2%80%93%2064%20%E2%80%93%2066%2C%20Funza%2C%20Cundinamarca+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/fr/">Googlemapsgenerator.com/fr/</a> & <a href="https://unoregler.com/">https://unoregler.com/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal42"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">IPS Sigmedical Madrid (Bogotá)</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%201%20Este%20%234-3%2C%20Mosquera%2C%20Cundinamarca+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://xn--snabbln5000-28a.com/lana-2000/">låna 2000 utan uc</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal43"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">IPS Sigmedical Mosquera (Bogotá)</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%201%20Este%20%234-3%2C%20Mosquera%2C%20Cundinamarca+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://xn--snabbln5000-28a.com/lana-2000/">låna 2000 utan uc</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal44"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Salud Ocupacional (Popayán)</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Cra. 9a N°17AN-41 OCUPACIONAL SALUD IPSO Popayán, Cauca&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com">html embed google maps</a> and <a href="https://yatzyregler.com/da/">yatzy blok</a></iframe></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://sms-lån-direkt.nu/">sms lån direkt utbetalning utan uc</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal45"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">IPS Salud Integral Preventiva SAS (Puerto Berrío)</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cra.%205%20%2348-3%2C%20Puerto%20Berr%C3%ADo%2C%20Antioquia+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/ja/">Googlemapsgenerator.com/ja/</a> & <a href="https://låna-pengar-utan-uc.nu/">låna pengar direkt utan uc</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal46"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Servir SAS (Ibagué)</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cl.%2037%20%234H-24%2C%20Ibagu%C3%A9%2C%20Tolima+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://uuc.nu/">lån med betalningsanmärkningar utan uc</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal47"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="font-size:13px;padding:1em">
                <h3 style="color:#453969;font-family:verdanab;text-align:center">IPS Fisiohealth (La Dorada)</h3>
                <iframe style="width:100%;height:50em"src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Cl.%2012%20%232%2066%2C%20La%20Dorada%2C%20Caldas+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"frameborder="0"scrolling="no"marginheight="0"marginwidth="0"></iframe>
                
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal48"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="font-size:13px;padding:1em">
                <h3 style="color:#453969;font-family:verdanab;text-align:center">Clínica Grupo Sanar (Puerto Gaitán)</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Grupo Preferencial Sanar IPS Carrera 13  numero13-14&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com">how to embed google maps generator</a> and <a href="https://casino-without-swedish-license.se/">casino-without-swedish-license.se</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/es/">gmapgen es</a> & <a href="https://nouc.se/">Lån utan uc</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal49"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">IPS AM PM 24 SAS - Pasto</h3>
                <p style="text-align:center;color:#666666;font-size:16px">Cll 20 # 38-15, Pasto, Nariño</p>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=IPS Am:Pm 24 SAS&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com">google maps embed</a> and <a href="https://xn--sms-ln-utan-uc-pib.se/">nya sms lån utan uc</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://www.xn--casinoutanspelgrnser-qzb.se/happy-slots-casino/">https://www.casinoutanspelgränser.se/happy-slots-casino/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal50"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">OCUPASALUD IPS (Bucaramanga)</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Av. Quebrada Seca N 32A-89 Bucaramanga&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com">html embed google maps</a> and <a href="https://yatzyregler.com/barn-yatzy-regler/">barn Yatzy regler</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://www.xn--casinoutanspelgrnser-qzb.se/happy-slots-casino/">https://www.casinoutanspelgränser.se/happy-slots-casino/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal51"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">OCUPASALUD IPS BOGOTA (Bogotá Sur)</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Cll 22Sur N19C - 09 Bogotá&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com">html embed google maps</a> and <a href="https://yatzyregler.com/barn-yatzy-regler/">barn Yatzy regler</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://www.xn--casinoutanspelgrnser-qzb.se/happy-slots-casino/">https://www.casinoutanspelgränser.se/happy-slots-casino/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal52"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">DIAGNOSTICOS E.U (Mocoa)</h3>
                <iframe style="width:100%;height:50em"  src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Calle 12 No 9-103 diagnosticos eu mocoa&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com">embed google maps html</a> and <a href="https://starburstnotongamstop.org/">starburst not on gamstop</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://www.xn--casinoutanspelgrnser-qzb.se/happy-slots-casino/">https://www.casinoutanspelgränser.se/happy-slots-casino/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal53"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">INSSOMEDIC Ocupacional SAS (Chía)</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Carrera 9  N° 10-74, INSSOMEDIC Ocupacional SAS,  Chía, Cundinamarca&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps</a> and <a href="https://skipboregler.com/skip-bo-regle/">skip bo règle</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://www.xn--casinoutanspelgrnser-qzb.se/happy-slots-casino/">https://www.casinoutanspelgränser.se/happy-slots-casino/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal100"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <br>
            </div>
            <div class="modal-body"style="font-size:13px">
                <div id="T1" style="padding:1em">
                <p style="text-align:left;color:#000000;letter-spacing:1px;font-family:Narrow;text-align:center;font-size:20px;background:#f2f2f2;padding:0.5em">Estimado aliado, ¿ya diligenció el registro de exámenes según el cargo en el nuevo proceso de agendamiento?</p>
                <table class="table1" style="vertical-align: top; border:0;width:5em;margin-left:2em">
                    <tr>
                        <td class="radio" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                            <p class="resp2" style="verdanab;margin:0; text-align:left; color:#4b1a4c; flex:1; font-family:verdanab;font-size:14px;">No</p> 
                                <div style="display: flex; align-items: center;margin-left:-6em!important">
                                    <input type="radio" name="radio4" id="A1" class="examen-check" value="1"/>
                                    <label for="A1" id="check" ></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="radio" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                <p class="resp2" style="verdanab;margin:0; text-align:left; color:#4b1a4c; flex:1; font-family:verdanab;font-size:14px;">Si</p>
                                <div style="display: flex; align-items: center;margin-left:-6em!important">
                                    <input type="radio" name="radio4" id="A2" class="examen-check" value="2"/>
                                    <label for="A2" id="check" ></label>
                                </div>
                            </td>
                        </tr>
                    </table> 
                </div>    
                <div id="T2" style="padding:1em">
                <p style="text-align:left;color:#000000;letter-spacing:1px;font-family:Narrow;text-align:center;font-size:20px;background:#ffe6e6;padding:0.5em">Usted no tiene registrado cargos para axamenes.  ¿Desea continuar?</p>
                <table class="table1" style="vertical-align: top; border:0;width:5em;margin-left:2em">
                    <tr>
                        <td class="radio" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                            <p class="resp2" style="verdanab;margin:0; text-align:left; color:#4b1a4c; flex:1; font-family:verdanab;font-size:14px;">No</p> 
                                <div style="display: flex; align-items: center;margin-left:-6em!important">
                                    <input type="radio" name="radio5" id="A3" class="examen-check2" value="1"/>
                                    <label for="A3" id="check" ></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="radio" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                <p class="resp2" style="verdanab;margin:0; text-align:left; color:#4b1a4c; flex:1; font-family:verdanab;font-size:14px;">Si</p>
                                <div style="display: flex; align-items: center;margin-left:-6em!important">
                                    <input type="radio" name="radio5" id="A4" class="examen-check2" value="2"/>
                                    <label for="A4" id="check" ></label>
                                </div>
                            </td>
                        </tr>
                    </table> 
                </div>  
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal101"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-lg"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="font-size:13px;padding:0.4em;padding:1em">
                <div style="text-align:center"><br>
                    <p style="font-size:20px;line-height:1em;font-family:Moristonb;letter-spacing:1px">Observación específica de la empresa</p>
                    <form id="form_P_editar">
                        <div class="row"><br>
                            <input type="hidden" id="id_P_e"></input>
                            <p class="clientes"><textarea class="note" id="Observacion_e" rows="2" value="" style="width:90%;border-radius:0;font-family:verdana;padding:0.5em" placeholder="Escriba aquí..."/></textarea></p> 
                        </div>
                    </form> 
                </div>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal102"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Eje Salud Laboral SAS (Manizales)</h3>
                <iframe style="width:100%;height:50em"  src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Carrera 23 N 23-60  manizales&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com">html embed google maps</a> and <a href="https://xn--sms-ln-direkt-utbetalning-gfc.se/">smslån direkt utbetalning</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://www.xn--casinoutanspelgrnser-qzb.se/happy-slots-casino/">https://www.casinoutanspelgränser.se/happy-slots-casino/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal103"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Progresando en Salud IPS (Ocaña)</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=CALLE 11 N° 24-65, ocaña&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">html embed google maps</a> and <a href="https://casinomga.se/">nya mga casino</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://www.xn--casinoutanspelgrnser-qzb.se/happy-slots-casino/">https://www.casinoutanspelgränser.se/happy-slots-casino/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal104"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Nueva ASC en Salud Total SAS (Caucasia)</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Cll 18 N 12-04, Caucasia  Nueva ASC en Salud Total SAS&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">embed google maps html</a> and <a href="https://snabblan.io/">snabblån utan uc</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/zh/">gmapgen zh</a> & <a href="https://www.xn--casinoutanspelgrnser-qzb.se/happy-slots-casino/">https://www.casinoutanspelgränser.se/happy-slots-casino/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal105"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">RVO IPS S.A.S (Barrancabermeja)</h3>
                <p style="text-align:center;color:#666666;font-size:16px">Cll 52 #20-04, Barrio Colombia</p>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Cl. 52 N° 20-04 Barrancabermeja&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps</a> and <a href="https://howtostopgamstop.com/">howtostopgamstop.com</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal106"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">BIO QUALITY SALUD SAS (Pereira)</h3>
                <p style="text-align:center;color:#666666;font-size:16px">Carrera 10 N° 19-66, Centro</p>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Carrera 10 N 19-66, centro, Pereira, Risaralda&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">embed google maps</a> and <a href="cancelgamstop.com/">gamstop cancel</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal107"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">UMER IPS servicios Ocupacionales (Magangué)</h3>
                <p style="text-align:center;color:#666666;font-size:16px">Cl. 15 #15-36, Magangué, Bolívar</p>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Calle 15 N°15-36, Magangué, Bolívar, UMER ips&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps generator</a> and <a href="https://beviljaralla.se/">sms lån</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
<div id="costumModal108"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">LABORVIDA IPS - Neiva</h3>
                <iframe style="width:100%;height:50em" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Cra. 8 N 17 - 13, Neiva, Huila LABORVIDA IPS&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to how to embed google maps generator</a> and <a href="https://udenrofus.com/">spil uden om rofus</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
           <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>    
 <div id="costumModal109"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">CLINICA SALUD CENTER - Puerto Asís</h3>
                <iframe style="width:100%;height:50em"  src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Cll 9 N 24-74, Puerto Asís, Putumayo&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps in wordpress</a> and <a href="https://udenrofus.com/udenlandske-casinoer/">udenlandske casinoer</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
           <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>    
 <div id="costumModal110"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">SUS SALUD INTEGRAL SAS - Montelíbano</h3>
                <iframe style="width:100%;height:50em"  src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Cll Antioquia N 14-85, Montelibano&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps in wordpress</a> and <a href="https://udenrofus.com/udenlandske-casinoer/">udenlandske casinoer</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
           <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>        
<div id="costumModal111"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">ZONAMEDICA IPS- Bogotá Américas</h3>
                <iframe style="width:100%;height:50em"  src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Av. de las Américas N62-84, Bogotá&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">embed google maps</a> and <a href="https://beviljaralla.se/">sms lån som beviljar alla</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
           <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>    
<div id="costumModal112"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">ORIENTESALUD - Rionegro</h3>
                <iframe style="width:100%;height:50em"  src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Calle 63A N 47-25, Rionegro, Antioquia&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps in wordpress</a> and <a href="https://udenrofus.com/casino-uden-dansk-licens/">bedste online casino uden dansk licens</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
           <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal113"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">SANILAB IPS - Zipaquirá</h3>
                <iframe style="width:100%;height:50em"  src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=Cra. 10a N6-90, Zipaquirá, Cundinamarca&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com/">how to embed google maps generator</a> and <a href="https://beviljaralla.se/">låna pengar snabbt</a></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
           <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal114"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Medical Helsen IPS - Facatativá</h3>
                <iframe style="width:100%;height:50em"  src="https://maps.google.com/maps?q=Cl.+4+%232-15%2C+Facatativ%C3%A1%2C+Cundinamarca&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                <a href="https://online-timer.me/">online timer</a><br><a href="https://www.alltopplaces.com"></a><br><style>.mapouter{position: relative;text-align: right;height: 560px;width: 820px;}</style><a href="https://www.embedmaps.co">adding google map to website</a><style>.gmap_canvas{overflow: hidden;background: none !important;height: 560px;width: 820px;}</style></div></div>
           </div>
           <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal115"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="text-align:center;font-size:13px;min-height:50em!important;padding:0">
                <h3 style="color:#453969;font-family:verdanab">Medical Helsen IPS - Madrid</h3>
                <iframe style="width:100%;height:50em"  src="https://maps.google.com/maps?q=Dg.+6+%23+4-51%2C+Madrid%2C+Cundinamarca&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/nl/">gmapgen nl</a> & <a href="https://spelatrotsspelpaus.se/">https://spelatrotsspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
           </div>
           <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="Modal_examenes"class="modal fullscreen-modal" data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-lg"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div style="padding-left:1em;padding-right:1em">
                        <p style="text-align:left;color:#000000;letter-spacing:1px;font-family:Narrow;text-align:center;font-size:20px;background:#f8ecf8;padding:0.5em">Exámenes</p>
                        <table class="table1" style="vertical-align: top; width:30em">
                            <tr>
                                <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                    <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">EXAMEN MEDICO ENFASIS OSTEOMUSCULAR</p>
                                    <div style="display: flex; align-items: center;">
                                        <input type="checkbox" id="E1" class="examen-check" value=""/>
                                        <label for="E1" id="check2" style="margin-left: 5px;"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                    <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">AUDIOMETRIA TAMIZ</p>
                                    <div style="display: flex; align-items: center;">
                                        <input type="checkbox" id="E2" class="examen-check" value=""/>
                                        <label for="E2" id="check2" style="margin-left: 5px;"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                    <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VISIOMETRIA</p>
                                    <div style="display: flex; align-items: center;">
                                        <input type="checkbox" id="E3" class="examen-check" value=""/>
                                        <label for="E3" id="check2" style="margin-left: 5px;"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                    <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">OPTOMETRIA</p>
                                    <div style="display: flex; align-items: center;">
                                        <input type="checkbox" id="E4" class="examen-check" value=""/>
                                        <label for="E4" id="check2" style="margin-left: 5px;"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                    <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">AUDIOMETRIA CLINICA</p>
                                    <div style="display: flex; align-items: center;">
                                        <input type="checkbox" id="E5" class="examen-check" value=""/>
                                        <label for="E5" id="check2" style="margin-left: 5px;"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                    <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ESPIROMETRIA</p>
                                    <div style="display: flex; align-items: center;">
                                        <input type="checkbox" id="E6" class="examen-check" value=""/>
                                        <label for="E6" id="check2" style="margin-left: 5px;"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                    <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ELECTROCARDIOGRAMA</p>
                                    <div style="display: flex; align-items: center;">
                                        <input type="checkbox" id="E7" class="examen-check" value=""/>
                                        <label for="E7" id="check2" style="margin-left: 5px;"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                    <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PSICOSENSOMETRICO</p>
                                    <div style="display: flex; align-items: center;">
                                        <input type="checkbox" id="E8" class="examen-check" value=""/>
                                        <label for="E8" id="check2" style="margin-left: 5px;"></label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="padding-left:1em;padding-right:1em">
                        <p style="text-align:left;color:#000000;letter-spacing:1px;font-family:Narrow;text-align:center;font-size:20px;background:#f8ecf8;padding:0.5em">Laboratorios</p>
                        
                        <div class="row">
                            <!-- Columna Izquierda Laboratorios (L1-L21) -->
                            <div class="col-md-6">
                                <table class="table1" style="vertical-align: top">
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ALCOHOL METILICO</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L1" class="examen-check" value=""/>
                                                <label for="L1" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ALCOHOLEMIA</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L2" class="examen-check" value=""/>
                                                <label for="L2" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANTICUERPOS ANAS</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L3" class="examen-check" value=""/>
                                                <label for="L3" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANTICUERPOS HEPATITIS B - ANTI HBS</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L4" class="examen-check" value=""/>
                                                <label for="L4" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANTICUERPOS VARICELA IGG</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L5" class="examen-check" value=""/>
                                                <label for="L5" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANTIGENO ESPECIFICO PARA PROSTATA (PSA)</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L6" class="examen-check" value=""/>
                                                <label for="L6" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANTIGENO HEPATITIS B</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L7" class="examen-check" value=""/>
                                                <label for="L7" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">BASCILOSCOPIA</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L8" class="examen-check" value=""/>
                                                <label for="L8" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">BUN - NITROGENO UREICO</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L9" class="examen-check" value=""/>
                                                <label for="L9" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">CHOLINESTERASE (CHE)</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L10" class="examen-check" value=""/>
                                                <label for="L10" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">COLESTEROL TOTAL</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L11" class="examen-check" value=""/>
                                                <label for="L11" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">COPROLOGICO</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L12" class="examen-check" value=""/>
                                                <label for="L12" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">CREATININA ORINA</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L13" class="examen-check" value=""/>
                                                <label for="L13" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">CREATININA SERICA</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L14" class="examen-check" value=""/>
                                                <label for="L14" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">FERRITINA</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L15" class="examen-check" value=""/>
                                                <label for="L15" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">FIEBRE AMARILLA VIRUS ANTICUERPO</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L16" class="examen-check" value=""/>
                                                <label for="L16" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">FROTIS DE UÑAS</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L17" class="examen-check" value=""/>
                                                <label for="L17" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">FROTIS FARINGEO</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L18" class="examen-check" value=""/>
                                                <label for="L18" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">GLICEMIA EN AYUNAS</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L19" class="examen-check" value=""/>
                                                <label for="L19" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">GRUPO RH</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L20" class="examen-check" value=""/>
                                                <label for="L20" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">HEMOCLASIFICACION</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L21" class="examen-check" value=""/>
                                                <label for="L21" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
        
                            <!-- Columna Derecha Laboratorios (L22-L44) -->
                            <div class="col-md-6">
                                <table class="table1" style="vertical-align: top">
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">HEMOGRAMA COMPLETO</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L22" class="examen-check" value=""/>
                                                <label for="L22" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PARCIAL DE ORINA</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L26" class="examen-check" value=""/>
                                                <label for="L26" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PERFIL HEPATICO</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L27" class="examen-check" value=""/>
                                                <label for="L27" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PERFIL LIPIDICO</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L28" class="examen-check" value=""/>
                                                <label for="L28" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PLOMO EN SANGRE</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L29" class="examen-check" value=""/>
                                                <label for="L29" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PROTECTORES AUDITIVOS</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L30" class="examen-check" value=""/>
                                                <label for="L30" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PRUEBA DE ALCOHOL</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L31" class="examen-check" value=""/>
                                                <label for="L31" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PRUEBA DE MARIHUANA Y COCAINA</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L32" class="examen-check" value=""/>
                                                <label for="L32" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PRUEBA DE SUSTANCIAS MDR</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L33" class="examen-check" value=""/>
                                                <label for="L33" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PSICOSENSOMETRICO</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L34" class="examen-check" value=""/>
                                                <label for="L34" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">T3 LIBRE</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L35" class="examen-check" value=""/>
                                                <label for="L35" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">T4</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L36" class="examen-check" value=""/>
                                                <label for="L36" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">TAMIZAJE DE VOZ</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L37" class="examen-check" value=""/>
                                                <label for="L37" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">GLICEMIA C</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L38" class="examen-check" value=""/>
                                                <label for="L38" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">TEST DE APTITUD MENTAL</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L39" class="examen-check" value=""/>
                                                <label for="L39" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">TOXOPLASMA IGG</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L40" class="examen-check" value=""/>
                                                <label for="L40" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">TOXOPLASMA IGM</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L41" class="examen-check" value=""/>
                                                <label for="L41" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">TRIGLICERIDOS</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L42" class="examen-check" value=""/>
                                                <label for="L42" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">TSH</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L43" class="examen-check" value=""/>
                                                <label for="L43" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                            <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VIH 1 Y 2 ANTICUERPO CUALITATIVA</p>
                                            <div style="display: flex; align-items: center;">
                                                <input type="checkbox" id="L44" class="examen-check" value=""/>
                                                <label for="L44" id="check" style="margin-left: 5px;"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <!-- Columna Izquierda: Otros -->
                    <div class="col-md-6">
                        <div style="padding-left:1em;padding-right:1em">
                            <p style="text-align:left;color:#000000;letter-spacing:1px;font-family:Narrow;text-align:center;font-size:20px;background:#f2f2f2;padding:0.5em">Otros</p>
                            
                            <div class="row">
                                <!-- Columna Izquierda Otros (OT1-OT22) -->
                                <div class="col-md-6">
                                    <table class="table1" style="vertical-align: top">
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANEXO DERMATOLOGICO (PIEL Y ANEXOS)</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT1" class="examen-check" value=""/>
                                                    <label for="OT1" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANEXO NEUROLOGICO</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT2" class="examen-check" value=""/>
                                                    <label for="OT2" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANEXO OSTEOMUSCULAR</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT3" class="examen-check" value=""/>
                                                    <label for="OT3" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANEXO RCV FRAMINGHAM</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT4" class="examen-check" value=""/>
                                                    <label for="OT4" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANEXO RCV GAZIANO-NHANES</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT5" class="examen-check" value=""/>
                                                    <label for="OT5" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANEXO RESPIRATORIO</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT6" class="examen-check" value=""/>
                                                    <label for="OT6" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANEXO VASCULAR PERIFERICO</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT7" class="examen-check" value=""/>
                                                    <label for="OT7" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ANEXO VISUAL</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT8" class="examen-check" value=""/>
                                                    <label for="OT8" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">CUESTIONARIO STOP BANG</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT9" class="examen-check" value=""/>
                                                    <label for="OT9" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">CUESTIONARIO DE SINTOMAS NEUROLOGICOS (Q16)</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT10" class="examen-check" value=""/>
                                                    <label for="OT10" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">INVENTARIO DE PERSONALIDAD DE EYSENCK</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT11" class="examen-check" value=""/>
                                                    <label for="OT11" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PRUEBA TEORICO-PRACTICA CONDUCTORES MOTORIZADO</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT12" class="examen-check" value=""/>
                                                    <label for="OT12" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PRUEBA TEORICO-PRACTICA SEGURIDAD VIAL</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT13" class="examen-check" value=""/>
                                                    <label for="OT13" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">PRUEBAS DE EQUILIBRIO Y CUESTIONARIO PARA ALTURAS</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT14" class="examen-check" value=""/>
                                                    <label for="OT14" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">TEST DE EPWORTH</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT15" class="examen-check" value=""/>
                                                    <label for="OT15" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">TEST DE FARNSWORTH (D15)</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT16" class="examen-check" value=""/>
                                                    <label for="OT16" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">TEST DE FRAMINGHAN</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT17" class="examen-check" value=""/>
                                                    <label for="OT17" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">TEST DE HARVARD</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT18" class="examen-check" value=""/>
                                                    <label for="OT18" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">TEST PSICOLOGICO PARA FOBIA ELECTRICIDAD</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT19" class="examen-check" value=""/>
                                                    <label for="OT19" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ECOGRAFIA ABDOMEN TOTAL</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT20" class="examen-check" value=""/>
                                                    <label for="OT20" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ECOGRAFIA ABDOMINAL</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT21" class="examen-check" value=""/>
                                                    <label for="OT21" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ECOGRAFIA ARTICULAR DE HOMBRO</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT22" class="examen-check" value=""/>
                                                    <label for="OT22" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table1" style="vertical-align: top">
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ECOGRAFIA ARTICULAR DE RODILLA</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT23" class="examen-check" value=""/>
                                                    <label for="OT23" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ECOGRAFIA DE ABDOMEN TOTAL</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT24" class="examen-check" value=""/>
                                                    <label for="OT24" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ECOGRAFIA DE HIGADO, PANCREAS, VIA BILIAR Y VESICULA</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT25" class="examen-check" value=""/>
                                                    <label for="OT25" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ECOGRAFIA DE MUÑECA DERECHA</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT26" class="examen-check" value=""/>
                                                    <label for="OT26" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ECOGRAFIA DE RODILLAS</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT27" class="examen-check" value=""/>
                                                    <label for="OT27" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ECOGRAFIA DE TEJIDOS BLANDOS DE PARED ABDOMINAL</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT28" class="examen-check" value=""/>
                                                    <label for="OT28" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ECOGRAFIA TEJIDOS BLANDOS EXTREMIDADES SUPERIORES</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT29" class="examen-check" value=""/>
                                                    <label for="OT29" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ELECTROCARDIOGRAMA</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT30" class="examen-check" value=""/>
                                                    <label for="OT30" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">ESPIROMETRIA PRE-POS BRONCODILATADOR</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT31" class="examen-check" value=""/>
                                                    <label for="OT31" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">EVALUACION PSICOLOGICA(ISRA) FOBIAS-ALTURAS-CONFINADOS</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT32" class="examen-check" value=""/>
                                                    <label for="OT32" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">LECTURA RADIOGRAFIA DE TORAX - ILO</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT33" class="examen-check" value=""/>
                                                    <label for="OT33" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">RADIOGRAFIA DE CODO</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT34" class="examen-check" value=""/>
                                                    <label for="OT34" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">RADIOGRAFIA DE COLUMNA CERVICAL</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT35" class="examen-check" value=""/>
                                                    <label for="OT35" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">RADIOGRAFIA DE COLUMNA DORSAL - LUMBAR</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT36" class="examen-check" value=""/>
                                                    <label for="OT36" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">RADIOGRAFIA DE COLUMNA LUMBO-SACRA</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT37" class="examen-check" value=""/>
                                                    <label for="OT37" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">RADIOGRAFIA DE DEDO</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT38" class="examen-check" value=""/>
                                                    <label for="OT38" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">RADIOGRAFIA DE MANO</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT39" class="examen-check" value=""/>
                                                    <label for="OT39" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">RADIOGRAFIA DE RODILLA (AP, LATERAL)</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT40" class="examen-check" value=""/>
                                                    <label for="OT40" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">RADIOGRAFIA DE RODILLAS COMPARATIVAS POSICION VERTICAL</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT41" class="examen-check" value=""/>
                                                    <label for="OT41" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">RADIOGRAFIA DE TOBILLO (AP, LATERAL Y ROTACION INTERNA)</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT42" class="examen-check" value=""/>
                                                    <label for="OT42" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                                <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">RADIOGRAFIA DE TORAX PA- LATERAL</p>
                                                <div style="display: flex; align-items: center;">
                                                    <input type="checkbox" id="OT43" class="examen-check" value=""/>
                                                    <label for="OT43" id="check2" style="margin-left: 5px;"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Columna Derecha: Vacunación -->
                    <div class="col-md-6">
                        <div style="padding-left:1em;padding-right:1em">
                            <p style="text-align:left;color:#000000;letter-spacing:1px;font-family:Narrow;text-align:center;font-size:20px;background:#f2f2f2;padding:0.5em">Vacunación</p>
                            <table class="table1" style="vertical-align: top; width:30em">
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA DE INFLUENZA</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V1" class="examen-check" value=""/>
                                            <label for="V1" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA DENGUE TETRAVALENTE</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V2" class="examen-check" value=""/>
                                            <label for="V2" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA DPT ACELULAR-TOSFERINA</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V3" class="examen-check" value=""/>
                                            <label for="V3" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA FIEBRE AMARILLA</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V4" class="examen-check" value=""/>
                                            <label for="V4" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA FIEBRE TIFOIDEA</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V5" class="examen-check" value=""/>
                                            <label for="V5" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA HEPATITIS A</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V6" class="examen-check" value=""/>
                                            <label for="V6" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA HEPATITIS A+B</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V7" class="examen-check" value=""/>
                                            <label for="V7" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA HEPATITIS B</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V8" class="examen-check" value=""/>
                                            <label for="V8" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA MENINGOCOCO</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V9" class="examen-check" value=""/>
                                            <label for="V9" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA NEUMOCOCO POLISACARIDA 23</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V10" class="examen-check" value=""/>
                                            <label for="V10" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA NEUMOCOCO PREVENAR 13</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V11" class="examen-check" value=""/>
                                            <label for="V11" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA TETANO DIPTERIA</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V12" class="examen-check" value=""/>
                                            <label for="V12" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA TETANOS</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V13" class="examen-check" value=""/>
                                            <label for="V13" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA TRIPLE VIRAL</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V14" class="examen-check" value=""/>
                                            <label for="V14" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox" style="display: flex; align-items: center; justify-content: space-between; padding: 5px 0;">
                                        <p class="resp2" style="margin:0; text-align:left; color:#4b1a4c; flex:1; font-size:12px;">VACUNA VARICELA</p>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" id="V15" class="examen-check" value=""/>
                                            <label for="V15" id="check2" style="margin-left: 5px;"></label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div> <br>
                <button id="boton3" type="submit" name="enviar" class="btn btn btn-default scroll" style="font-size:14px!important;font-family:Verdanab;width:10em; height:3.5em; line-height:1em; border-radius:8px; margin: 0 auto; display: block;">Agregar</button>
                <br>
            </div>
            <div class="modal-footer">
                <br> 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="costumModal110"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-lg"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="font-size:13px;padding:0.4em;padding:1em">
                <div style="text-align:center"><br>
                    <p style="font-size:20px;line-height:1em;font-family:Moristonb;letter-spacing:1px">Observación específica de la empresa</p>
                    <form id="form_P_editar">
                        <div class="row"><br>
                            <input type="hidden" id="id_P_e"></input>
                            <p class="clientes"><textarea class="note" id="Observacion_e" rows="2" value="" style="width:90%;border-radius:0;font-family:verdana;padding:0.5em" placeholder="Escriba aquí..."/></textarea></p> 
                        </div>
                    </form> 
                </div>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="Modal_sector"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-m"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <br>
            </div>
            <div class="modal-body"style="font-size:13px">
                <div class="row" style="padding:1em">
                <p style="text-align:left;color:#000000;letter-spacing:1px;font-family:Narrow;text-align:center;font-size:20px;background:#f2f2f2;padding:0.5em">Estimado aliado, por favor registre su codigo CIIU-ACTIVIDAD PRINCIPAL para continuar es un requisito obligatorio este registro solo se realizara en una vez.</p><br>
                <p  style="text-align:left;margin-left:2em;color:#453969;font-family:verdanab">Actividad económica de la empresa:</p>
                <p style="margin-top:-1em"><input type="text" class="new-todo" id="codigoInput" placeholder="Ej: 0111 o 6209..." autocomplete="off"></p>
                <ul id="listaSugerencias" style="text-align:left;color:#000000"></ul><br>
                <button href="#citas" id="boton4" type="submit"name="enviar"class="btn btn btn-default btn-block scroll"style="font-size:13px!important;height:35px;width:12em;line-height:1em;border-radius:0;float:right">Enviar</button>
                </div>    
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
<div id="costumModal200"class="modal"data-easein="flash"data-backdrop="static"> 
    <div class="modal-dialog modal-lg"style="background:#ffffff">
        <div class="modal-content"align="justify"style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button"class="close"id="btn_delete"data-dismiss="modal" name="modal4"><span style="font-size:22px!important"class="fa fa-times"></button>
            </div>
            <div class="modal-body"style="font-size:13px;padding:0.4em">
          
                <p id="agenda_text"></p>
            </div>
            <div class="modal-footer">
                <br> 
            </div>
        </div>
    </div>
</div>
</body>
<script src="<?php  echo RUTA_JS ?>jquery.min.js"></script>
<script src="<?php  echo RUTA_JS ?>zlib.js"></script>
<script src="<?php  echo RUTA_JS ?>default_vfs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="<?php  echo RUTA_JS ?>rgbcolor.js"></script>
<script src="<?php  echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php  echo RUTA_JS ?>velocity.min.js"></script>
<script src="<?php  echo RUTA_JS ?>velocity.ui.min.js"></script>
<script src="<?php  echo RUTA_JS ?>main.js"></script>
<script src="<?php  echo RUTA_JS ?>jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php  echo RUTA_JS ?>jquery.scrollTo.min.js"></script>
<script src="<?php  echo RUTA_JS ?>common-scripts.js"></script>
<script src="<?php  echo RUTA_JS ?>custom-file-input.js"></script>
<script>
    $(document).ready(function() {
    // Duración total en milisegundos (14 segundos)
    var totalTime = 14000;
    var intervalTime = 100; // Actualizar cada 100ms para suavidad
    var increment = 100 / (totalTime / intervalTime);
    var progress = 0;
    
    // Actualizar barra de progreso
    var progressInterval = setInterval(function() {
        progress += increment;
        if (progress >= 100) {
            progress = 100;
            clearInterval(progressInterval);
        }
        // Actualizar barra y texto
        $("#progressBar").css("width", progress + "%");
        $("#progressText").text(Math.round(progress) + "%");
    }, intervalTime);
    
    // Temporizador para ocultar el loader
    setTimeout(function(){
        // Asegurar que la barra llegue a 100% antes de ocultar
        $("#progressBar").css("width", "100%");
        $("#progressText").text("100%");
        $(".load").fadeOut("slow");
    }, totalTime);
});
    //$(".loader").fadeOut("slow");
    $(document).on('click', '.examen-check', (e) => {
        //$(".loader").fadeIn("slow");
        const A = $('input[name="radio4"]:checked').val() || null;
        if(A == 1) {
            $(".cargo1").slideDown(1);
            $(".cargo2").slideUp(1);
            $(".excel").slideUp(1);
            $("#costumModal100").modal("hide");
        } 
        if(A == 2) { 
            if("<?php echo $registro ?>" >= 1) {
                $(".cargo2").slideDown(1);
                $(".cargo1").slideUp(1);
                $(".especifico").slideUp(1);
                $("#costumModal100").modal("hide");
            } else {
               $("#T1").slideUp(1);
               $("#T2").slideDown(1);
            }
        }
    });
    $(document).on('click', '.examen-check2', (e) => {
        //$(".loader").fadeIn("slow");
        const A = $('input[name="radio5"]:checked').val() || null;
        if(A == 1) {
            location.href="../login_agenda";
        } 
        if(A == 2) { 
            $(".cargo1").slideDown(1);
            $(".cargo2").slideUp(1);
            $(".excel").slideUp(1);
            $("#costumModal100").modal("hide");
        }
    });
    $(document).on('change', '#Especifico', (e) => {
    	var Especifico = $('#Especifico').val();
    	var Clave = '<?php  echo $Clave ?>';

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
    	if(Especifico == 'Retorno laboral') {
    	    $('#popup11').slideDown(1);
    	}
    	if(Especifico == 'Seguimiento, recomendaciones y/o restricciones médicas') {
    	    $('#popup12').slideDown(1);
    	}
    	if(Especifico == 'Periódico para alturas y espacios confinados') {
    	    $('#popup13').slideDown(1);
    	}
    	if(Especifico == 'Tipo I Operativo') {
    	    $('#popup14').slideDown(1);
    	}
    	if(Especifico == 'Tipo II Administrativo') {
    	    $('#popup15').slideDown(1);
    	}
    	if(Especifico == 'Tipo III Motorizado') {
    	    $('#popup16').slideDown(1);
    	}
    	if(Especifico == 'Tipo IV Ascenso administrativo-control') {
    	    $('#popup17').slideDown(1);
    	}
    	if(Especifico == 'INGRESO TIPO 1') {
    	    $('#popup18').slideDown(1);
    	}
    	if(Especifico == 'INGRESO TIPO 2') {
    	    $('#popup19').slideDown(1);
    	}
    	if(Especifico == "3A: INGRESO CON ENFASIS EN ALTURAS") {
    	    $('#popup20').slideDown(1);
    	}
    	if(Especifico == "3B: INGRESO CONDUCTORES SEGURIDAD VIAL Y ALTURAS") {
    	    $('#popup21').slideDown(1);
    	}
    	if(Especifico == "3C: INGRESO CONDUCTORES SEGURIDAD VIAL") {
    	    $('#popup22').slideDown(1);
    	}
    	if(Especifico == 'PERIÓDICO TIPO 1') {
    	    $('#popup23').slideDown(1);
    	}
    	if(Especifico == 'PERIÓDICO TIPO 2') {
    	    $('#popup24').slideDown(1);
    	}
    	if(Especifico == "3A: PERIÓDICO CON ENFASIS EN ALTURAS") {
    	    $('#popup25').slideDown(1);
    	}
    	if(Especifico == "3B: PERIÓDICO CONDUCTORES SEGURIDAD VIAL Y ALTURAS") {
    	    $('#popup26').slideDown(1);
    	}
    	if(Especifico == "3C: PERIÓDICO CONDUCTORES SEGURIDAD VIAL") {
    	    $('#popup27').slideDown(1);
    	}
    	if(Especifico == "EGRESO TIPO 1") {
    	    $('#popup28').slideDown(1);
    	}
    	if(Especifico == "EGRESO TIPO 2") {
    	    $('#popup29').slideDown(1);
    	}
    	if(Especifico == "3A: EGRESO") {
    	    $('#popup30').slideDown(1);
    	}
    	if(Especifico == "3B: EGRESO") {
    	    $('#popup31').slideDown(1);
    	}
    	if(Especifico == "3C: EGRESO") {
    	    $('#popup32').slideDown(1);
    	}
    	if(Especifico == "Ingreso seguridad vial, énfasis en alturas y espacios confinados") {
    	    $('#popup45').slideDown(1);
    	}
    	if(Especifico == "Periódico seguridad vial, énfasis en alturas y espacios confinados") {
    	    $('#popup45').slideDown(1);
    	}
    	if(Especifico == 'Ingreso para alturas y espacios confinados' && (Clave == 'jqrzwxrt' || Clave == 'xfzvszmg' || Clave == 't7as5tia' || Clave == 'hwd0qnaq' || Clave == 'u8v7p2yc' || Clave == 'rin7eqbp' || Clave == 'zqi2t04e' || Clave == 't94d6ari' || Clave == 'y4a76rj2' || Clave == '8pqbdm1g' || Clave == 'hwd0qnaq' || Clave == '8jbkihk0' || Clave == 'v7eillm5')) {
    	    $('#popup46').slideDown(1);
    	}
    	if(Especifico == 'Periódico para alturas y espacios confinados' && (Clave == 'jqrzwxrt' || Clave == 'xfzvszmg' || Clave == 't7as5tia' || Clave == 'hwd0qnaq' || Clave == 'u8v7p2yc' || Clave == 'rin7eqbp' || Clave == 'zqi2t04e' || Clave == 't94d6ari' || Clave == 'y4a76rj2' || Clave == '8pqbdm1g' || Clave == 'hwd0qnaq' || Clave == '8jbkihk0' || Clave == 'v7eillm5')) {
    	    $('#popup46').slideDown(1);
    	}
    	if(Especifico == 'Ingreso con énfasis en alturas' && (Clave == 'jqrzwxrt' || Clave == 'xfzvszmg' || Clave == 't7as5tia' || Clave == 'hwd0qnaq' || Clave == 'u8v7p2yc' || Clave == 'rin7eqbp' || Clave == 'zqi2t04e' || Clave == 't94d6ari' || Clave == 'y4a76rj2' || Clave == '8pqbdm1g' || Clave == 'hwd0qnaq' || Clave == '8jbkihk0' || Clave == 'v7eillm5')) {
    	    $('#popup47').slideDown(1);
    	}
    	if(Especifico == 'Periódico de alturas' && (Clave == 'jqrzwxrt' || Clave == 'xfzvszmg' || Clave == 't7as5tia' || Clave == 'hwd0qnaq' || Clave == 'u8v7p2yc' || Clave == 'rin7eqbp' || Clave == 'zqi2t04e' || Clave == 't94d6ari' || Clave == 'y4a76rj2' || Clave == '8pqbdm1g' || Clave == 'hwd0qnaq' || Clave == '8jbkihk0' || Clave == 'v7eillm5')) {
    	    $('#popup47').slideDown(1);
    	}
    	if(Especifico == 'Otros') {
    	    $('#popup48').slideDown(1);
    	}
    });
    $(document).on('change', '#Examen', (e) => {
    	var Examen = $('#Examen').val();
    	var Cargo = $('#Cargo2').val();
    	var Empresa = '<?php  echo $Razon ?>';
    	const P = $('input[name="radio4"]:checked').val() || null;
        if(P == 1) {
        	if (Empresa == 'COORDINADORA MERCANTIL SA' &&  Cargo == 'TANQUEADOR'  && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup44').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' &&  (Cargo == 'ESCOLTA' || Cargo == 'OBSERVADOR DE RUTA') && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup43').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' &&  (Cargo == 'OPERADOR MONTACARGA AUXILIAR OPERATIVO' || Cargo == 'DESCARGADOR MONTACARGUISTA') && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup42').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' &&  (Cargo == 'COORDINADOR NUEVO CANAL' || Cargo == 'COORDINADOR SERV. AL CLIENTE Y VENTAS DE CANAL' || Cargo == 'JEFE DE SERVICIO AL CLIENTE')  && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup41').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' &&  (Cargo == 'VIGILANTE' || Cargo == 'SUPERVISOR DE SEGURIDAD REGIONAL' ||  Cargo == 'COORDINADOR DE SEGURIDAD' || Cargo == 'JEFE DE SEGURIDAD' || Cargo == 'LIDER DE SEGURIDAD OPERATIVA' || Cargo == 'LIDER DE SEGURIDAD FISICA') && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup40').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' &&  Cargo == 'COORDINADOR DE PATIO'  && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup39').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' &&  (Cargo == 'VIGILANTE CAMARAS' || Cargo == 'VIGILANTE' || Cargo == 'TECNICO EN MTTO. ELCTRIO Y ELECTR DE AUTOM' || Cargo == 'TECNICO COMUNICACIONES II' || Cargo == 'TECNICO COMUNICACIONES I' ||  Cargo == 'SUPERVISOR DE LAVADO' || Cargo == 'SUPERVISOR DE LATONERÍA Y PINTURA' || Cargo == 'OPERADOR C4' || Cargo == 'COORDINADOR DE OBRAS CIVILES' || Cargo == 'ELECTRICISTA I' || Cargo == 'ELECTRICISTA II' || Cargo == 'LAVADOR' || Cargo == 'LUBRICADOR' || Cargo == 'MECANICO DE PATIO I' || Cargo == 'MECANICO DE PATIO II' || Cargo == 'MECANICO DE TRAYLER-I' || Cargo == 'MECANICO GENERAL I' || Cargo == 'MECANICO GENERAL II' || Cargo == 'MONITOR NACIONAL GPS' || Cargo == 'MONTALLANTAS' || Cargo == 'NEGOCIADOR REDES' || Cargo == 'OFICIAL DE SEGURIDAD INFORMATICA' || Cargo == 'OFICIAL DE REPARACIONES LOCATIVAS')  && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup38').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' &&  (Cargo == 'SUPERNUMERARIO CONDUCTOR AUXILIAR OPERATIVO' || Cargo == 'SUPERNUM CONDUCTOR-AUX OPER TEMPORADA' || Cargo == 'COBRADOR' || Cargo == 'CONDUCTOR - AUXILIAR OPERATIVO' || Cargo == 'CONDUCTOR AUXILIAR OPERATIVO MULERO' || Cargo == 'CONDUCTOR AUXILIAR OPERATIVO NOCTURNO' || Cargo == 'CONDUCTOR DE RELEVO - AUXILIAR' || Cargo == 'CONDUCTOR PATINADOR MTTO Y ALMACEN' || Cargo == 'CONDUCTOR PATIO II' || Cargo == 'CONDUCTOR RUTA NACIONAL' || Cargo == 'MENSAJERO ADMINISTRATIVO')  && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup37').slideDown(1);
            } else if (Empresa == 'COORDINADORA MERCANTIL SA' &&  (Cargo == 'SOLDADOR' || Cargo == 'PINTOR' || Cargo == 'AYUDANTE DE CERRAJERIA' || Cargo == 'CERRAJERO I' || Cargo == 'CERRAJERO II' || Cargo == 'FIBRERO- PINTOR'|| Cargo == 'LATONERO-PINTOR') && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup36').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' && Cargo == 'MANIPULACIÓN DE ALIMENTOS' && Examen == 'MANIPULACIÓN DE ALIMENTOS') {
        	    $('#popup34').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' && Cargo == 'ALTURAS' && Examen == 'ALTURAS') {
        	    $('#popup33').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup35').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' && Examen == 'POSTINCAPACIDAD') {
        	    $('#popup49').slideDown(1);
        	} else if (Empresa == 'COORDINADORA MERCANTIL SA' && Examen == 'SEGUIIMIENTO A CONDICIONES DE SALUD') {
        	    $('#popup49').slideDown(1);
        	}   
        	if (Empresa == 'COORDIUTIL S.A.S' &&  Cargo == 'TANQUEADOR'  && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup44').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' &&  (Cargo == 'ESCOLTA' || Cargo == 'OBSERVADOR DE RUTA') && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup43').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' &&  (Cargo == 'OPERADOR MONTACARGA AUXILIAR OPERATIVO' || Cargo == 'DESCARGADOR MONTACARGUISTA') && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup42').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' &&  (Cargo == 'COORDINADOR NUEVO CANAL' || Cargo == 'COORDINADOR SERV. AL CLIENTE Y VENTAS DE CANAL' || Cargo == 'JEFE DE SERVICIO AL CLIENTE')  && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup41').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' &&  (Cargo == 'VIGILANTE' || Cargo == 'SUPERVISOR DE SEGURIDAD REGIONAL' ||  Cargo == 'COORDINADOR DE SEGURIDAD' || Cargo == 'JEFE DE SEGURIDAD' || Cargo == 'LIDER DE SEGURIDAD OPERATIVA' || Cargo == 'LIDER DE SEGURIDAD FISICA') && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup40').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' &&  Cargo == 'COORDINADOR DE PATIO'  && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup39').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' &&  (Cargo == 'VIGILANTE CAMARAS' || Cargo == 'VIGILANTE' || Cargo == 'TECNICO EN MTTO. ELCTRIO Y ELECTR DE AUTOM' || Cargo == 'TECNICO COMUNICACIONES II' || Cargo == 'TECNICO COMUNICACIONES I' ||  Cargo == 'SUPERVISOR DE LAVADO' || Cargo == 'SUPERVISOR DE LATONERÍA Y PINTURA' || Cargo == 'OPERADOR C4' || Cargo == 'COORDINADOR DE OBRAS CIVILES' || Cargo == 'ELECTRICISTA I' || Cargo == 'ELECTRICISTA II' || Cargo == 'LAVADOR' || Cargo == 'LUBRICADOR' || Cargo == 'MECANICO DE PATIO I' || Cargo == 'MECANICO DE PATIO II' || Cargo == 'MECANICO DE TRAYLER-I' || Cargo == 'MECANICO GENERAL I' || Cargo == 'MECANICO GENERAL II' || Cargo == 'MONITOR NACIONAL GPS' || Cargo == 'MONTALLANTAS' || Cargo == 'NEGOCIADOR REDES' || Cargo == 'OFICIAL DE SEGURIDAD INFORMATICA' || Cargo == 'OFICIAL DE REPARACIONES LOCATIVAS')  && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup38').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' &&  (Cargo == 'SUPERNUMERARIO CONDUCTOR AUXILIAR OPERATIVO' || Cargo == 'SUPERNUM CONDUCTOR-AUX OPER TEMPORADA' || Cargo == 'COBRADOR' || Cargo == 'CONDUCTOR - AUXILIAR OPERATIVO' || Cargo == 'CONDUCTOR AUXILIAR OPERATIVO MULERO' || Cargo == 'CONDUCTOR AUXILIAR OPERATIVO NOCTURNO' || Cargo == 'CONDUCTOR DE RELEVO - AUXILIAR' || Cargo == 'CONDUCTOR PATINADOR MTTO Y ALMACEN' || Cargo == 'CONDUCTOR PATIO II' || Cargo == 'CONDUCTOR RUTA NACIONAL' || Cargo == 'MENSAJERO ADMINISTRATIVO')  && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup37').slideDown(1);
            } else if (Empresa == 'COORDIUTIL S.A.S' &&  (Cargo == 'SOLDADOR' || Cargo == 'PINTOR' || Cargo == 'AYUDANTE DE CERRAJERIA' || Cargo == 'CERRAJERO I' || Cargo == 'CERRAJERO II' || Cargo == 'FIBRERO- PINTOR'|| Cargo == 'LATONERO-PINTOR') && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup36').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' && Cargo == 'MANIPULACIÓN DE ALIMENTOS' && Examen == 'MANIPULACIÓN DE ALIMENTOS') {
        	    $('#popup34').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' && Cargo == 'ALTURAS' && Examen == 'ALTURAS') {
        	    $('#popup33').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' && (Examen == 'INGRESO' || Examen == 'PERIODICO' || Examen == 'EGRESO')) {
        	    $('#popup35').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' && Examen == 'POSTINCAPACIDAD') {
        	    $('#popup49').slideDown(1);
        	} else if (Empresa == 'COORDIUTIL S.A.S' && Examen == 'SEGUIIMIENTO A CONDICIONES DE SALUD') {
        	    $('#popup49').slideDown(1);
        	}    
        }
        if(P == 2) {
            $('#popup56').slideDown(1);
    	    switch(Examen) {
                case 'Ingreso':
                    tipoExamen = 1;
                    break;
                case 'Periódico':
                    tipoExamen = 2;
                    break;
                case 'Egreso':
                    tipoExamen = 3;
                    break;
                default:
                    tipoExamen = 0;
            }
        	$.ajax({
                    type: "post",
                    url: "../item_profesiograma_agenda3.php",
                    data: "T="+ tipoExamen + "&Cargo="+ Cargo,
                    success: function (response) {
                        console.log(response)
                        const tasks = JSON.parse(response);
                        let profesiograma1 = '';
                        let profesiograma2 = '';
                        let profesiograma3 = '';
                        let profesiograma4 = '';
                        let profesiograma5 = '';
                        tasks.forEach(task => {
                            profesiograma1 += `
                                <tr>
                                    <td style="font-family:verdana">${task.EX1}</td>
                                </tr>`;
                            profesiograma2 += `
                                <tr>
                                    <td style="font-family:verdana">${task.EX2}</td>
                                </tr>`;
                            profesiograma3 += `
                                <tr>
                                    <td style="font-family:verdana">${task.EX3}</td>
                                </tr>`;
                        });
                        if (tipoExamen == 1){
                            $('#examenes_prof').html(profesiograma1);
                        }
                        if (tipoExamen == 2){
                            $('#examenes_prof').html(profesiograma2);
                        }
                        if (tipoExamen == 3){
                            $('#examenes_prof').html(profesiograma3);
                        }
                    },
                });
            }
    });
    $(document).on('click', '.popup_delete', (e) => {
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
    	$('#popup15').slideUp(1);
    	$('#popup16').slideUp(1);
    	$('#popup17').slideUp(1);
    	$('#popup18').slideUp(1);
    	$('#popup19').slideUp(1);
    	$('#popup20').slideUp(1);
    	$('#popup21').slideUp(1);
    	$('#popup22').slideUp(1);
    	$('#popup23').slideUp(1);
    	$('#popup24').slideUp(1);
    	$('#popup25').slideUp(1);
    	$('#popup26').slideUp(1);
    	$('#popup27').slideUp(1);
    	$('#popup28').slideUp(1);
    	$('#popup29').slideUp(1);
    	$('#popup30').slideUp(1);
    	$('#popup31').slideUp(1);
    	$('#popup32').slideUp(1);
    	$('#popup33').slideUp(1);
    	$('#popup34').slideUp(1);
    	$('#popup35').slideUp(1);
    	$('#popup36').slideUp(1);
    	$('#popup37').slideUp(1);
    	$('#popup38').slideUp(1);
    	$('#popup39').slideUp(1);
    	$('#popup40').slideUp(1);
        $('#popup41').slideUp(1);
        $('#popup42').slideUp(1);
        $('#popup43').slideUp(1);
        $('#popup44').slideUp(1);
        $('#popup45').slideUp(1);
        $('#popup46').slideUp(1);
        $('#popup47').slideUp(1);
        $('#popup48').slideUp(1);
        $('#popup49').slideUp(1);
        $('#popup50').slideUp(1);
        $('#popup51').slideUp(1);
        $('#popup52').slideUp(1);
        $('#popup53').slideUp(1);
        $('#popup54').slideUp(1);
        $('#popup55').slideUp(1);
        $('#popup56').slideUp(1);
    	
    });
    $("#medellin").click(function() {
        $("#costumModal4").modal("show");
    })
    $("#apartado").click(function() {
        $("#costumModal5").modal("show");
    })
    $("#apartado").click(function() {
        $("#costumModal5").modal("show");
    })
    $("#armenia").click(function() {
        $("#costumModal32").modal("show");
    })
    $("#barranquilla").click(function() {
        $("#costumModal6").modal("show");
    })
    $("#norte").click(function() {
        $("#costumModal7").modal("show");
    })
    $("#sur").click(function() {
        $("#costumModal8").modal("show");
    })
     $("#bucaramanga").click(function() {
        $("#costumModal9").modal("show");
    })
     $("#cali").click(function() {
        $("#costumModal10").modal("show");
    })
     $("#cartagena").click(function() {
        $("#costumModal11").modal("show");
    })
     $("#cartagena2").click(function() {
        $("#costumModal14").modal("show");
    })
     $("#pereira").click(function() {
        $("#costumModal12").modal("show");
    })
     $("#tunja").click(function() {
        $("#costumModal13").modal("show");
    })
     $("#villavicencio").click(function() {
        $("#costumModal15").modal("show");
    })
     $("#laceja").click(function() {
        $("#costumModal16").modal("show");
    })
     $("#quibdo").click(function() {
        $("#costumModal17").modal("show");
    })
     $("#central").click(function() {
        $("#costumModal18").modal("show");
    })
     $("#cucuta").click(function() {
        $("#costumModal19").modal("show");
    })
     $("#monteria").click(function() {
        $("#costumModal20").modal("show");
    })
     $("#cali2").click(function() {
        $("#costumModal21").modal("show");
    })
     $("#palmira").click(function() {
        $("#costumModal22").modal("show");
    })
     $("#lasoledad").click(function() {
        $("#costumModal23").modal("show");
    })
     $("#norte2").click(function() {
        $("#costumModal24").modal("show");
    })
     $("#central2").click(function() {
        $("#costumModal25").modal("show");
    })
     $("#neiva").click(function() {
        $("#costumModal26").modal("show");
    })
     $("#sincelejo").click(function() {
        $("#costumModal27").modal("show");
    })
     $("#barranquilla2").click(function() {
        $("#costumModal28").modal("show");
    })
     $("#valledupar").click(function() {
        $("#costumModal29").modal("show");
    })
     $("#manizales").click(function() {
        $("#costumModal102").modal("show");
    })
     $("#pasto").click(function() {
        $("#costumModal31").modal("show");
    })
     $("#riohacha").click(function() {
        $("#costumModal33").modal("show");
    })
     $("#barrancabermeja").click(function() {
        $("#costumModal34").modal("show");
    })
     $("#santamarta").click(function() {
        $("#costumModal35").modal("show");
    })
     $("#pereira2").click(function() {
        $("#costumModal36").modal("show");
    })
     $("#buga").click(function() {
        $("#costumModal37").modal("show");
    })
     $("#tulua").click(function() {
        $("#costumModal38").modal("show");
    })
    $("#aguachica").click(function() {
        $("#costumModal39").modal("show");
    })
    $("#norte3").click(function() {
        $("#costumModal40").modal("show");
    })
    $("#funza").click(function() {
        $("#costumModal41").modal("show");
    })
    $("#madrid").click(function() {
        $("#costumModal42").modal("show");
    })
    $("#mosquera").click(function() {
        $("#costumModal43").modal("show");
    })
    $("#popayan").click(function() {
        $("#costumModal44").modal("show");
    })
    $("#berrio").click(function() {
        $("#costumModal45").modal("show");
    })
    $("#ibague").click(function() {
        $("#costumModal46").modal("show");
    })
    $("#ladorada").click(function() {
        $("#costumModal47").modal("show");
    })
    $("#puertogaitan").click(function() {
        $("#costumModal48").modal("show");
    })
    $("#pasto2").click(function() {
        $("#costumModal49").modal("show");
    })
     $("#bucaramanga2").click(function() {
        $("#costumModal50").modal("show");
    })
    $("#sur2").click(function() {
        $("#costumModal51").modal("show");
    })
    $("#mocoa").click(function() {
        $("#costumModal52").modal("show");
    })
    $("#chia").click(function() {
        $("#costumModal53").modal("show");
    })
    $("#ocaña").click(function() {
        $("#costumModal103").modal("show");
    })
    $("#caucasia").click(function() {
        $("#costumModal104").modal("show");
    })
    $("#barrancabermeja2").click(function() {
        $("#costumModal105").modal("show");
    })
    $("#pereira3").click(function() {
        $("#costumModal106").modal("show");
    })
    $("#magangue").click(function() {
        $("#costumModal107").modal("show");
    })
    $("#neiva2").click(function() {
        $("#costumModal108").modal("show");
    })
    $("#puertoasis").click(function() {
        $("#costumModal109").modal("show");
    })
    $("#montelibano").click(function() {
        $("#costumModal110").modal("show");
    })
    $("#americas").click(function() {
        $("#costumModal111").modal("show");
    })
    $("#rionegro").click(function() {
        $("#costumModal112").modal("show");
    })
    $("#Facatativa").click(function() {
        $("#costumModal114").modal("show");
    })
    $("#Madrid2").click(function() {
        $("#costumModal115").modal("show");
    })
    $(document).on('click', '#export_xlsx', (e) => {
        const P = $('input[name="radio4"]:checked').val() || null;
        if(P == 1) {
            location.href="../phpspreadsheet/plantilla_agenda1_9.xlsx";
        } else {
            location.href="../phpspreadsheet/plantilla_agenda1_10.xlsx";
        }    
    });
    $(document).on('click', '#btn_notificacion', (e) => {
         $('#Nacimiento_A').slideUp(1);
    })
    $(document).on('change', '#Red', (e) => {
         $('#Nacimiento_A').slideDown(1);
    })
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

        if (Red == 'Aguachica/Capella IPS') {
            $("#costumModal39").modal("show");
        }
        if (Red == 'Barranquilla/SSTA Consulting S.A.S') {
            $("#costumModal28").modal("show");
        }
        if (Red == 'Cartagena/H&S Occupational') {
            $("#costumModal11").modal("show");
        }
        if (Red == 'Montería/Peña Asesores Salud Ocupacional S.A.S. -PASO-') {
            $("#costumModal20").modal("show");
        }
        if (Red == 'Riohacha/APREHSI GROUP') {
           $("#costumModal33").modal("show");
        }
         if (Red == 'Santa Marta/PREVENIR 1-A SA') {
           $("#costumModal35").modal("show");
        }
         if (Red == 'Sincelejo/LABORMED') {
            $("#costumModal27").modal("show");
        }
         if (Red == 'Valledupar/APREHSI GROUP') {
            $("#costumModal29").modal("show");
        }
         if (Red == 'Villavicencio/ASEINCAP') {
           $("#costumModal15").modal("show");
        }
         if (Red == 'Puerto Gaitán/Clínica Grupo Sanar') {
            $("#costumModal48").modal("show");
        }
         if (Red == 'Mocoa/Diagnostico E.U') {
         $("#costumModal52").modal("show");
        }
         if (Red == 'Cali/CEMESST') {
         $("#costumModal21").modal("show");
        }
         if (Red == 'Palmira/CEMESST') {
         $("#costumModal22").modal("show");
        }
         if (Red == 'Buga/Laboratorio Clínico López Línea Ocupacional IPS') {
         $("#costumModal37").modal("show");
        }
         if (Red == 'Tuluá/IPS Opositiva Salud Integral Tuluá SAS') {
         $("#costumModal38").modal("show");
        }
         if (Red == 'Quibdó/BIOLABORAL IPS') {
         $("#costumModal17").modal("show");
        }
         if (Red == 'Pasto/IPS AM PM 24 SAS') {
         $("#costumModal49").modal("show");
        }
         if (Red == 'Pasto/OCUPSALUD SST SAS') {
         $("#costumModal31").modal("show");
        }
         if (Red == 'Chía/INSSOMEDIC Ocupacional SAS') {
         $("#costumModal53").modal("show");
        }
         if (Red == 'Bogotá Norte/Zonamedica IPS') {
         $("#costumModal7").modal("show");
        }
         if (Red == 'Bogotá La Soledad/Zonamedica IPS') {
         $("#costumModal23").modal("show");
        }
         if (Red == 'Bogotá Central-Galerías/Grupo Ocupacional') {
         $("#costumModal18").modal("show");
        }
         if (Red == 'Bogotá Sur/Ocupasalud IPS Bogotá') {
         $("#costumModal51").modal("show");
        }
         if (Red == 'Funza/IPS Sigmedical Funza') {
          $("#costumModal41").modal("show");
        }
         if (Red == 'Madrid/IPS Sigmedical Madrid') {
         $("#costumModal42").modal("show");
        }
         if (Red == 'Mosquera/IPS Sigmedical Mosquera') {
          $("#costumModal43").modal("show");
        }
         if (Red == 'Barrancabermeja/RVG IPS') {
          $("#costumModal34").modal("show");
        }
         if (Red == 'Bucaramanga/Ocupasalud IPS') {
          $("#costumModal50").modal("show");
        }
         if (Red == 'Bucaramanga/IPS Prosynergo SAS') {
         $("#costumModal9").modal("show");
        }
         if (Red == 'Cúcuta/Progresando en Salud IPS') {
         $("#costumModal19").modal("show");
        }
         if (Red == 'Tunja/Carvajal Laboratorios IPS SAS') {
         $("#costumModal13").modal("show");
        }
         if (Red == 'La Ceja/IPS Corriente Vital') {
         $("#costumModal16").modal("show");
        }
         if (Red == 'Armenia/PROENSO') {
         $("#costumModal32").modal("show");
        }
         if (Red == 'Ibagué/Servir SAS') {
         $("#costumModal46").modal("show");
        }
         if (Red == 'Neiva/IPS Centro de Diagnóstico Ocupacional') {
         $("#costumModal26").modal("show");
        }
         if (Red == 'Manizales/UNIRSALUD') {
         $("#costumModal30").modal("show");
        }
        if (Red == 'Pereira/Proteccion Integral IPS') {
         $("#costumModal12").modal("show");
        }
        if (Red == 'Pereira/Proteccion Integral IPS') {
         $("#costumModal12").modal("show");
        }
        if (Red == 'Pereira/BIO QUALITY SALUD SAS') {
         $("#costumModal106").modal("show");
        }
         if (Red == 'Popayan/Salud Ocupacional') {
         $("#costumModal44").modal("show");
        }
         if (Red == 'Puerto Berrío/IPS Salud Integral Preventiva SAS') {
         $("#costumModal45").modal("show");
        }
        if (Red == 'Manizales/Eje salud laboral SAS') {
         $("#costumModal102").modal("show");
        }
        if (Red == 'Ocaña/Progresando en Salud IPS') {
         $("#costumModal103").modal("show");
        }
        if (Red == 'Caucasia/Nueva ASC en Salud Total SAS') {
         $("#costumModal104").modal("show");
        }
        if (Red == 'Barrancabermeja/RVO IPS S.A.S') {
          $("#costumModal105").modal("show");
        }
        if (Red == 'Magangué/UMER IPS Servicios Ocupacionales') {
         $("#costumModal107").modal("show");
        }
        if (Red == 'Neiva/LABORVIDA IPS') {
         $("#costumModal108").modal("show");
        }
        if (Red == 'Puerto Asís/Clínica Salud Center') {
        $("#costumModal109").modal("show");
        }
        if (Red == 'Montelíbano/SUS Salud Integral SAS') {
        $("#costumModal110").modal("show");
        }
        if (Red == 'Bogotá Américas/Zonamedica IPS') {
        $("#costumModal111").modal("show");
        }
        if (Red == 'Rionegro/ORIENTESALUD') {
        $("#costumModal112").modal("show");
        }
        if (Red == 'Zipaquirá/SANILAB IPS') {
        $("#costumModal113").modal("show");
        }
        if (Red == 'Facatativa/Medical Helsen IPS') {
        $("#costumModal114").modal("show");
        }
        if (Red == 'Madrid/Medical Helsen IPS') {
        $("#costumModal115").modal("show");
        }
    })
    $("#btn_notificacion").click(function (event) {
        $('#Sede_A').show();
        $('#Red_A').hide();
        $('#notificacion').slideUp();
        $('#seleccion_empresa').slideDown();
        document.getElementById("form_clientes").reset();
    })
    $(document).ready(function () {
        
        $("#costumModal200").modal("show");
        
        var sector = '<?php echo isset($Sector) ? $Sector : ''; ?>';
        if (sector && sector.trim() !== '') {
            $("#costumModal100").modal("show");
        } else {
               $("#Modal_sector").modal("show");
        }
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
        fethTasks8();
        function fethTasks8() {
            $.ajax({
                type: "post",
                url: "../agenda_text.php",
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let text = '';
                    let titulo = '';
                    tasks.forEach(task => {
                        titulo += `${task.titulo}`,
                        text += `${task.text}`
                    });
                    $('#agenda_titulo').html(titulo);
                    $('#agenda_text').html(text);
                }
            });
        };
  
    });
    $(window).load(function(){
        $("#T2").slideUp(1);
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
        $('#popup15').slideUp(1);
        $('#popup16').slideUp(1);
        $('#popup17').slideUp(1);
        $('#popup18').slideUp(1);
        $('#popup19').slideUp(1);
        $('#popup20').slideUp(1);
        $('#popup21').slideUp(1);
        $('#popup22').slideUp(1);
        $('#popup23').slideUp(1);
        $('#popup24').slideUp(1);
        $('#popup25').slideUp(1);
        $('#popup26').slideUp(1);
        $('#popup27').slideUp(1);
        $('#popup28').slideUp(1);
        $('#popup29').slideUp(1);
        $('#popup30').slideUp(1);
        $('#popup31').slideUp(1);
        $('#popup32').slideUp(1);
        $('#popup33').slideUp(1);
        $('#popup34').slideUp(1);
        $('#popup35').slideUp(1);
        $('#popup36').slideUp(1);
        $('#popup37').slideUp(1);
        $('#popup38').slideUp(1);
        $('#popup39').slideUp(1);
        $('#popup40').slideUp(1);
        $('#popup41').slideUp(1);
        $('#popup42').slideUp(1);
        $('#popup43').slideUp(1);
        $('#popup44').slideUp(1);
        $('#popup45').slideUp(1);
        $('#popup46').slideUp(1);
        $('#popup47').slideUp(1);
        $('#popup48').slideUp(1);
        $('#popup49').slideUp(1);
        $('#popup50').slideUp(1);
        $('#popup51').slideUp(1);
        $('#popup52').slideUp(1);
        $('#popup55').slideUp(1);
        $('#popup56').slideUp(1);
        $('.todoapp').slideDown(1);
        $('.todoapp2').slideUp(1);
        $('#Nacimiento_A').slideUp(1);
        $('#notificacion').slideUp(1);
        $('#boton2').slideUp(1);
       // $(".cargo1").slideUp(1);
        $(".cargo2").slideUp(1);
        
    });
          // Variable global para almacenar el intervalo
var intervaloContador = null;

// Iniciar el intervalo solo si no existe
if (intervaloContador === null) {
    intervaloContador = setInterval(function () {
        fetchTasks6();
    }, 500);
}

function fetchTasks6() {
    var Codigo = "<?php echo $Clave ?>";
    $.ajax({
        type: "post",
        url: "../contador_agenda2.php",
        data: "Codigo=" + Codigo,
        success: function (response) {
            try {
                const tasks = JSON.parse(response);
                let contador = '';
                tasks.forEach(task => {
                    contador += `${task.contador}`
                });
                $('#contador').html(contador);
            } catch(e) {
                console.error('Error al parsear respuesta:', e);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error en fetchTasks6:', error);
        }
    });
}

// Función para detener el intervalo
function detenerIntervalo() {
    if (intervaloContador !== null) {
        clearInterval(intervaloContador);
        intervaloContador = null;
        console.log('Intervalo detenido');
    }
}

// Función para reiniciar el intervalo
function reiniciarIntervalo() {
    detenerIntervalo();
    intervaloContador = setInterval(function () {
        fetchTasks6();
    }, 500);
    console.log('Intervalo reiniciado');
}

// Evento del formulario de importación
$('#import_excel_form').on('submit', function(event){
    event.preventDefault();
    
    var id = '<?php echo $id ?>';   
    var responsable = '<?php echo $Nombre ?>';
    var Clave = '<?php echo $Clave ?>';
    var email3 = '<?php echo $Email ?>';
    var Observacionp = "<?php echo $Observacionp ?>";
    var Codigo = "<?php echo $Codigo_ ?>";
    var Sector = "<?php echo $Sector ?>";
    const P = $('input[name="radio4"]:checked').val() || null;
    var formData = new FormData();
    var file = $('#file-7')[0].files[0];
    
    formData.append("file", file);
    formData.append("id", id);  
    formData.append("P", P); 
    formData.append("Clave", Clave);  
    formData.append("Codigo", Codigo);  
    formData.append("Sector", Sector); 
    formData.append("Email3", email3);
    formData.append("Observacionp", Observacionp);
    formData.append("Responsable", responsable);  
    
    $.ajax({
        url: "../PHPMailer/importar_multiple.php",
        method: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function(){
            $('#import').attr('disabled', 'disabled');
            $('#import').val('Importando...');
        },
        success: function(response) {
            $('#import').attr('disabled', false);
            $('#import').val('Importar');
            $("#costumModal2").modal("show");
            
            try {
                const tasks = JSON.parse(response);
                let mensaje = '';
                let fecha = '';
                let Autor = '';
                tasks.forEach(task => {
                    mensaje += `${task.mensaje}`
                    fecha += `${task.fecha}`
                    Autor += `${task.Autor}`
                });
                $('#message2').html(mensaje);
                $('#_fecha').val(fecha);
                $('#_autor').val(Autor);
                
                // ==========================================
                // DETENER EL INTERVALO DESPUÉS DE LA INSERCIÓN
                // ==========================================
                detenerIntervalo();
                
                // Evento para el botón "Sí"
                $("._si").off('click').on('click', function (event) {
                    var fecha = $('#_fecha').val();
                    var autor = $('#_autor').val();
                    $('#content').html('<div class="loading"><img src="../imagine/descarga.gif" class="img_carga" width="50"/></div>');
                    
                    // Enviar WhatsApp
                    $.ajax({
                        type: "post",
                        url: "../PHPMailer/whatsaap4.php",
                        data: "fecha="+ fecha + "&autor="+ autor,
                        success: function (response) {
                            $(".loading").fadeOut("slow");
                            // REINICIAR EL INTERVALO ANTES DE REDIRIGIR
                            reiniciarIntervalo();
                            location.href = "agenda";
                        }
                    });
                    
                    // Segunda importación
                    $.ajax({
                        url: "../PHPMailer/importar_multiple2.php",
                        method: "POST",
                        data: formData,
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend: function(){
                            $('#import').attr('disabled', 'disabled');
                            $('#import').val('Importando...');
                        },
                        success: function(response) {
                            // REINICIAR EL INTERVALO DESPUÉS DE LA SEGUNDA IMPORTACIÓN
                            reiniciarIntervalo();
                        }
                    });
                });
                
                // Evento para el botón "No"
                $("._no").off('click').on('click', function (event) {
                    // REINICIAR EL INTERVALO ANTES DE REDIRIGIR
                    reiniciarIntervalo();
                    location.href = "agenda";
                });
                
            } catch(e) {
                console.error('Error al parsear respuesta:', e);
                // REINICIAR EL INTERVALO EN CASO DE ERROR
                reiniciarIntervalo();
            }
        },
        error: function(xhr, status, error) {
            console.error('Error en la importación:', error);
            $('#import').attr('disabled', false);
            $('#import').val('Importar');
            // REINICIAR EL INTERVALO EN CASO DE ERROR
            reiniciarIntervalo();
            alert('Error al importar: ' + error);
        }
    });
});

 
    $('#form_clientes').submit(e => {
        e.preventDefault();
        Sede=$('#Sede').val();
        Red=$('#Red').val();
        var Adicionales = $('#adicionales').html();
        if(Sede != '') {
            var cliente = Sede;
        } 
        if(Red != '') {
            var cliente = Red;
        }
        if((Red == '') && (Sede == '')) {
            $("#costumModal3").modal("show");
        } else {
            var empresa = '<?php  echo $Razon ?>';
            var responsable = '<?php  echo $Nombre ?>';
            var email3 = '<?php  echo $Email ?>';
            var Observacionp = '<?php  echo $Observacionp ?>';
            if(Sede != 'Apartadó/Cedisalud IPS' || Sede != 'Medellín/Cedisalud IPS') {
                var Nacimiento = $('#Nacimiento').val();
            } else {
                 var Nacimiento='';
            }
            const P = $('input[name="radio4"]:checked').val() || null;
            var sector = '<?php echo isset($Sector) ? $Sector : ''; ?>';
            if (sector && sector.trim() !== '') {
                var Sector = '<?php  echo $Sector ?>';
            } else {
                var Sector = $('#codigoInput').val().trim();
            }
            if (document.form_clientes.termin.checked) {
                const postData = {
                    P:P,
                    Cliente:cliente,
                    Fecha:$('#Fecha').val(),
                    Nombre:$('#Nombre').val(),
                    Apellidos:$('#Apellidos').val(),
                    Tipo:$('#Tipo').val(),
                    Documento:$('#Documento').val(),
                    Nacimiento:Nacimiento,
                    Genero:$('#Genero').val(),
                    Cargo:$('#Cargo').val(),
                    Cargo2:$('#Cargo2').val(),
                    Email:$('#Email').val(),
                    Celular:$('#Celular').val(),
                    Email2:$('#Email2').val(),
                    Examen:$('#Examen').val(),
                    Especifico:$('#Especifico').val(),
                    Empresa:empresa,
                    Observaciones:$('#Observaciones').val(),
                    Observaciones2:$('#Observaciones2').val(),
                    Responsable:responsable,
                    Clave:'<?php  echo $clave ?>',
                    Codigo:'<?php  echo $Codigo_ ?>',
                    Sector:Sector,
                    Email3:email3,
                    Observacionp:Observacionp,
                    Adicionales:Adicionales
                };
                console.log(postData)
                const url = '../PHPMailer/importar_individual.php';
                $.post(url,  postData, (response) => {
                        $("#costumModal").modal("show");
                        $('#message').html(response);
                        const url2 = '../PHPMailer/importar_individual2.php';
                        $.post(url2,  postData, (response) => {
                            $('#boton2').slideDown(1);
                            $('#boton').slideUp(1);
                            //$(".loader").fadeOut("slow");
                            //document.getElementById("form_clientes").reset();
                            //$('#boton').removeAttr('disabled');
                    });
                
                });
            } else {
                alert("Debes aceptar los términos de uso");
                document.form_clientes.termin.focus();
                return false;
            }
        }    
    });
    $("#clear-completed").click(function() {
        document.getElementById("form_clientes").reset();
    })
  /*  window.addEventListener('load',function(){
    document.getElementById('fecha').type= 'text';
    document.getElementById('fecha').addEventListener('blur',function(){
    document.getElementById('fecha').type= 'text';
    });
    document.getElementById('fecha').addEventListener('focus',function(){
    document.getElementById('fecha').type= 'date';
    });
    
    });*/

    var municipios = new Array()
    municipios [1] = ["Seleccione una opción","Ingreso con énfasis osteomuscular","Ingreso con énfasis osteomuscular, visiometría tamíz","Ingreso con énfasis osteomuscular, audiometría tamíz","Ingreso con énfasis osteomuscular, visiometría tamíz, audiometría tamíz","Ingreso para alturas y espacios confinados","Ingreso para conductores","Ingreso manipulador de alimentos","Ingreso seguridad vial y énfasis en alturas","Ingreso seguridad vial, énfasis en alturas y espacios confinados","Ingreso con énfasis en alturas","Ingreso - Telemedicina"]
    municipios [2] = ["Seleccione una opción","Egreso con énfasis osteomuscular","Egreso con énfasis osteomuscular, visiometría tamíz","Egreso con énfasis osteomuscular, audiometría tamíz","Egreso con énfasis osteomuscular, visiometría tamíz, audiometría tamíz","Egreso - Telemedicina"]
    municipios [3] = ["Seleccione una opción","Periódico con énfasis osteomuscular","Periódico con énfasis osteomuscular, visiometría tamíz","Periódico con énfasis osteomuscular, audiometría tamíz","Periódico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz","Periódico seguridad vial y énfasis en alturas","Periódico para alturas y espacios confinados","Periódico seguridad vial, énfasis en alturas y espacios confinados","Periódico de alturas","Periódico manipulador de alimentos","Periódico para conductores","Postincapacidad","Reintegro laboral","Seguimiento, recomendaciones y/o restricciones médicas","Periódico - Telemedicina","Periódico cambio de ocupación"]
    municipios [4] = ["Seleccione una opción","Prueba antígeno Covid hisopado","Psicosensométrico","Prueba de sustancias Panel 2","Prueba de sustancias Panel 5","Prueba de sustancias Panel 10","Prueba teórico práctica","Audiometría clínica","Espirometría","Coprológico","Audiometría tamíz","Optometría","Otros"]
    municipios [5] = ["Seleccione una opción","Covid 19","Fiebre amarilla","Hepatitis B","Influenza","Tetano","Otros"]
    function departamento(formu) {
        var dr = formu.Departamento.selectedIndex
        formu.Ciudad.length = municipios[dr].length
        for (i = 0; i < formu.Ciudad.length; i++)
        {
            formu.Ciudad.options[i].text = municipios[dr][i]
        }};
        
    var municipios2 = new Array()
    municipios2 [1] = ["Seleccione una opción...","Tipo I Operativo","Tipo II Administrativo","Tipo III Motorizado","Tipo IV Ascenso administrativo-control"]
    municipios2 [2] = ["Seleccione una opción...","Exámen médico con énfasis osteomuscular"]
    municipios2 [3] = ["Seleccione una opción...","Tipo I Operativo","Tipo II Administrativo","Tipo III Motorizado","Tipo IV Ascenso administrativo-control"]
    municipios2 [4] = ["Seleccione una opción...","Exámen médico con énfasis osteomuscular"]
    municipios2 [5] = ["Seleccione una opción...","Exámen médico con énfasis osteomuscular"]
    function departamento2(formu) {
        var dr = formu.Departamento2.selectedIndex
        formu.Ciudad2.length = municipios2[dr].length
        for (i = 0; i < formu.Ciudad2.length; i++)
        {
            formu.Ciudad2.options[i].text = municipios2[dr][i]
        }};    
        
    var municipios3 = new Array()
    municipios3 [1] = ["Seleccione una opción...","INGRESO TIPO 1","INGRESO TIPO 2","3A: INGRESO CON ENFASIS EN ALTURAS","3B: INGRESO CONDUCTORES SEGURIDAD VIAL Y ALTURAS","3C: INGRESO CONDUCTORES SEGURIDAD VIAL"]
    municipios3 [2] = ["Seleccione una opción...","PERIÓDICO TIPO 1","PERIÓDICO TIPO 2","3A: PERIÓDICO CON ENFASIS EN ALTURAS","3B: PERIÓDICO CONDUCTORES SEGURIDAD VIAL Y ALTURAS","3C: PERIÓDICO CONDUCTORES SEGURIDAD VIAL"]
    municipios3 [3] = ["Seleccione una opción...","EGRESO TIPO 1","EGRESO TIPO 2","3A: EGRESO","3B: EGRESO","3C: EGRESO"]
    function departamento3(formu) {
        var dr = formu.Departamento3.selectedIndex
        formu.Ciudad3.length = municipios3[dr].length
        for (i = 0; i < formu.Ciudad3.length; i++)
        {
            formu.Ciudad3.options[i].text = municipios3[dr][i]
        }};  
    
    $(document).ready(function () {    
        fetchTasks_cargo2();
        function fetchTasks_cargo2() {
            var Nombre = '<?php  echo $Nombre ?>';
            $.ajax({
                type: "post",
                url: "../select_cargo.php",
                data: "Nombre="+ Nombre,
                success: function(response) {
                    const tasks0 = JSON.parse(response);
                    tasks0.push({"Cargo":"De clic para seleccionar una opción"});
                    const tasks = tasks0.reverse();
                    let template = '';
                    tasks.forEach(task => {
                        template += `<option>${task.Cargo}</option><br>`
                    });
                    $('.Cargo').html(template);

                }
            });
        }
    });   
    $('#Observacion_e').on('keyup', function() {
        var Observacion_e = $('#Observacion_e').val();
        var id = <?php  echo $id ?>;
        $.ajax({
            type: "post",
            url: "../agenda_observacion.php",
            data: "id=" + id + "&Observacion_e=" + Observacion_e,
            success: function (response) {
                observaciones();
            },   
        });
    }); 
    observaciones();
    function observaciones() {
        var id = <?php  echo $id ?>;
        $.ajax({
            type: "post",
            url: "../tasks_observacion.php",
            data: "id="+ id,
            success: function(response) {
                const tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                        template += `${task.Observacion}`
                });
                $('#Observacion_e').html(template);
            }
        });
    }
    cargarCargosEnSelect()
    function cargarCargosEnSelect() {
        var Codigo = '<?php echo $Codigo_ ?>';
        $.ajax({
            type: "post",
            url: "../item_profesiograma_agenda2.php",
            data: "Codigo=" + Codigo,
            success: function (response) {
                const tasks = JSON.parse(response);
                let opciones = '<option value="">Seleccione un cargo...</option>';
                tasks.forEach(task => {
                    opciones += `
                        <option>${task.Cargo}</option>
                    `;
                });
                $('.Cargo_').html(opciones);
            },
            error: function(error) {
                console.log("Error al cargar los cargos:", error);
            }
        });
    }
    
/*$('#Examen').on('change', function() {
    // Obtener el TEXTO del examen seleccionado
    var ExamenTexto = $('#Examen option:selected').text().trim();
    var CargoTexto = $('#Cargo2 option:selected').text().trim();
    
    console.log("=== DATOS DEL FORMULARIO (TEXTOS) ===");
    console.log("Texto del Examen:", ExamenTexto);
    console.log("Texto del Cargo:", CargoTexto);
    
    // Validar que se haya seleccionado un cargo
    if (!CargoTexto || CargoTexto === '' || CargoTexto === 'Seleccione un cargo...' || CargoTexto === 'Seleccione un cargo') {
        //alert('Por favor, seleccione primero un cargo');
        $('#resultadoExamenes').html('<div class="error-message">⚠️ Por favor, seleccione un cargo primero</div>');
        return;
    }
    
    // Validar que se haya seleccionado un examen
    if (!ExamenTexto || ExamenTexto === '' || ExamenTexto === 'Seleccione tipo de examen...' || ExamenTexto === 'Seleccione tipo de examen') {
        alert('Por favor, seleccione un tipo de examen');
        $('#resultadoExamenes').html('<div class="error-message">⚠️ Por favor, seleccione un tipo de examen</div>');
        return;
    }
    
    // Mostrar carga
    $('#resultadoExamenes').html(`
        <div class="cargando">
            <span class="spinner"></span>
            <span>Consultando exámenes para: <strong>${CargoTexto}</strong> - <strong>${ExamenTexto}</strong>...</span>
        </div>
    `);
    
    // Realizar la consulta AJAX
    $.ajax({
        type: "POST",
        url: "../consultar_examenes.php",
        data: {
            ExamenTexto: ExamenTexto,
            CargoTexto: CargoTexto
        },
        dataType: 'json',
        timeout: 15000,
        success: function(response) {
            console.log("Respuesta del servidor:", response);
            
            $('#resultadoExamenes').empty();
            
            if (response.error) {
                mostrarError(response.error);
                return;
            }
            
            if (response.success === false) {
                mostrarSinResultados(response.message || 'No se encontraron exámenes para este cargo');
                return;
            }
            
            mostrarExamenes(response);
        },
        error: function(xhr, status, error) {
            console.error("Error AJAX:", {
                status: status,
                error: error,
                response: xhr.responseText,
                statusCode: xhr.status
            });
            
            $('#resultadoExamenes').empty();
            
            let errorMsg = 'Error al consultar los exámenes. ';
            
            if (status === 'timeout') {
                errorMsg += 'La solicitud ha excedido el tiempo de espera.';
            } else if (xhr.responseText) {
                try {
                    const jsonResponse = JSON.parse(xhr.responseText);
                    errorMsg += jsonResponse.error || jsonResponse.message || xhr.responseText;
                } catch(e) {
                    errorMsg += 'Error interno del servidor.';
                    console.error("Respuesta no JSON:", xhr.responseText);
                }
            } else {
                errorMsg += 'Por favor, intente nuevamente.';
            }
            
            mostrarError(errorMsg);
            alert(errorMsg);
        }
    });
});*/

// Función para mostrar los exámenes encontrados
function mostrarExamenes(data) {
    let html = '';
    
    // Cabecera con información
    html += `
        <div class="examenes-header">
            <h4>📋 Exámenes registrados</h4>
            <p><strong>Tipo de específico de examen:</strong><br> ${data.Especifico || 'No especificado'}</p>
     
        </div>
    `;
    
    // Recopilar todos los exámenes
    const examenes = {
        'Exámenes Médicos': [],
        'Exámenes de Laboratorio': [],
        'Vacunas': [],
        'Otros Exámenes': []
    };
    
    // Exámenes Médicos (E1-E7)
    const medicos = {
        E1: 'Examen médico enfasis osteomuscular',
        E2: 'Audiometria tamiz',
        E3: 'Audiometria clinica',
        E4: 'Visionetria tamiz',
        E5: 'Optometria ocupacional',
        E6: 'Espirometria',
        E7: 'Electrocardiograma'
    };
    
    // Exámenes de Laboratorio (L1-L49)
    const laboratorio = {
        L1: 'Alcohol metilico',
        L2: 'Alcoholemia',
        L3: 'Anticuerpos anas',
        L4: 'Anticuerpos hepatitis b - anti hbs',
        L5: 'Anticuerpos varicela igg',
        L6: 'Antigeno especifico para prostata (psa)',
        L7: 'Antigeno hepatitis b',
        L8: 'Basiloscopia',
        L9: 'Bun - nitrogeno ureico',
        L10: 'Cholinesterase (che)',
        L11: 'Colesterol total',
        L12: 'Coprologico',
        L13: 'Creatinina orina',
        L14: 'Creatinina serica',
        L15: 'Ferritina',
        L16: 'Fiebre amarilla virus anticuerpo',
        L17: 'Frotis de uñas',
        L18: 'Frotis faringeo',
        L19: 'Glicemia en ayunas',
        L20: 'Grupo rh',
        L21: 'Hemoclasificacion',
        L22: 'Hemograma completo',
        L23: 'Lentes',
        L24: 'Prueba de sustancias md10',
        L25: 'Prueba de sustancias md5',
        L26: 'Parcial de orina',
        L27: 'Perfil hepatico',
        L28: 'Perfil lipidico',
        L29: 'Plomo en sangre',
        L30: 'Protectores auditivos',
        L31: 'Prueba de alcohol',
        L32: 'Prueba de marihuana y cocaina',
        L33: 'Prueba de sustancias mdr',
        L34: 'Psicosensometrico',
        L35: 'T3 libre',
        L36: 'T4',
        L37: 'Tamizaje de voz',
        L38: 'Glicemia c',
        L39: 'Test de aptitud mental',
        L40: 'Toxoplasma igg',
        L41: 'Toxoplasma igm',
        L42: 'Trigliceridos',
        L43: 'Tsh',
        L44: 'Vih 1 y 2 anticuerpo cualitativa'
    };
    
    // Vacunas (V1-V15)
    const vacunas = {
        V1: 'Vacuna de influenza', V2: 'Vacuna dengue tetravalente',
        V3: 'Vacuna dpt acelular-tosferina', V4: 'Vacuna fiebre amarilla',
        V5: 'Vacuna fiebre tifoidea', V6: 'Vacuna hepatitis a',
        V7: 'Vacuna hepatitis a+b', V8: 'Vacuna hepatitis b',
        V9: 'Vacuna meningococo', V10: 'Vacuna neumococo polisacarida 23',
        V11: 'Vacuna neumococo prevenar 13', V12: 'Vacuna tetano difteria',
        V13: 'Vacuna tetanos', V14: 'Vacuna triple viral', V15: 'Vacuna varicela'
    };
    
    // Otros exámenes (OT1-OT43)
    const otros = {
        OT1: 'Anexo dermatologico (piel y anexos)', OT2: 'Anexo neurologico',
        OT3: 'Anexo osteomuscular', OT4: 'Anexo rcv framingham',
        OT5: 'Anexo rcv gaziano-nhanes', OT6: 'Anexo respiratorio',
        OT7: 'Anexo vascular periferico', OT8: 'Anexo visual',
        OT9: 'Cuestionario stop bang', OT10: 'Cuestionario de sintomas neurologicos (q16)',
        OT11: 'Inventario depersonalidad de eysenck',
        OT12: 'Prueba teorica-practica conductores motorizado',
        OT13: 'Prueba teorico-practica seguridad vial',
        OT14: 'Pruebas de equilibrio y cuestionario para alturas',
        OT15: 'Test de epworth', OT16: 'Test de farnsworth (d15)',
        OT17: 'Test de framinghan', OT18: 'Test de harvard',
        OT19: 'Test psicologico para fobia electricidad',
        OT20: 'Ecografia abdomen total', OT21: 'Ecografia abdominal',
        OT22: 'Ecografia articular de hombro', OT23: 'Ecografia articular de rodilla',
        OT24: 'Ecografia de abdomen total',
        OT25: 'Ecografia de higado, pancreas, via biliar y vesicula',
        OT26: 'Ecografia de muñeca derecha', OT27: 'Ecografia de rodillas',
        OT28: 'Ecografia de tejidos blandos de pared abdominal',
        OT29: 'Ecografia tejidos blandos extremidades superiores',
        OT30: 'Electrocardiograma', OT31: 'Espirometria pre-pos broncodilatador',
        OT32: 'Evaluacion psicologica(isra) fobias-alturas-confinados',
        OT33: 'Lectura radiografia de torax - ilo', OT34: 'Radiografia de codo',
        OT35: 'Radiografia de columna cervical',
        OT36: 'Radiografia de columna dorsal - lumbar',
        OT37: 'Radiografia de columna lumbo-sacra', OT38: 'Radiografia de dedo',
        OT39: 'Radiografia de mano', OT40: 'Radiografia de rodilla (ap, lateral)',
        OT41: 'Radiografia de rodillas comparativas posicion vertical',
        OT42: 'Radiografia de tobillo (ap, lateral y rotacion interna)',
        OT43: 'Radiografia de torax pa- lateral'
    };
    
    // Función para agregar exámenes activos
    function agregarExamenes(categoria, lista, data) {
        const activos = [];
        for (const [key, nombre] of Object.entries(lista)) {
            if (data[key] === 1 || data[key] === '1') {
                activos.push(nombre);
            }
        }
        if (activos.length > 0) {
            examenes[categoria] = activos;
        }
    }
    
    // Agregar exámenes de cada categoría
    agregarExamenes('Exámenes Médicos', medicos, data);
    agregarExamenes('Exámenes de Laboratorio', laboratorio, data);
    agregarExamenes('Vacunas', vacunas, data);
    agregarExamenes('Otros Exámenes', otros, data);
    
    // Verificar si hay exámenes
    let hayExamenes = false;
    for (const categoria in examenes) {
        if (examenes[categoria].length > 0) {
            hayExamenes = true;
            break;
        }
    }
    
    if (!hayExamenes) {
        html += `
            <div class="sin-resultados">
                <p>⚠️ No se encontraron exámenes para este cargo y tipo de examen</p>
                <p style="font-size:12px;color:#666;margin-top:5px;">Cargo: ${data.Cargo} | Tipo: ${data.TipoExamen || 'No especificado'}</p>
            </div>
        `;
    } else {
        // Mostrar exámenes por categoría
        for (const [categoria, items] of Object.entries(examenes)) {
            if (items.length > 0) {
                html += `
                    <div class="categoria-examenes" style="text-align:left">
                        <h5>${categoria}</h5>
                        <ul>
                            ${items.map(item => `<li>${item}</li>`).join('')}
                        </ul>
                    </div>
                `;
            }
        }
    }
    $('#popup55').css('height', 'auto');
    $('#popup55').slideDown(1);
    $('#resultadoExamenes').html(html);
}

// Funciones auxiliares para mostrar mensajes
function mostrarError(mensaje) {
    $('#resultadoExamenes').html(`
        <div class="error-message">
            <span class="error-icon">❌</span>
            <span>${mensaje}</span>
        </div>
    `);
}

function mostrarSinResultados(mensaje) {
    $('#resultadoExamenes').html(`
        <div class="sin-resultados">
            <span class="info-icon">ℹ️</span>
            <span>${mensaje}</span>
        </div>
    `);
}

$("#boton3").click(function (e) {
    e.preventDefault();
    $("#Modal_examenes").modal("hide");
    var adicionales = '';
    var campos = [
        // Exámenes (E1-E8)
        { id: 'E1', texto: 'Examen medico enfasis osteomuscular' },
        { id: 'E2', texto: 'Audiometria tamiz' },
        { id: 'E3', texto: 'Visometria' },
        { id: 'E4', texto: 'Optometria' },
        { id: 'E5', texto: 'Audiometria clinica' },
        { id: 'E6', texto: 'Espirometria' },
        { id: 'E7', texto: 'Electrocardiograma' },
        { id: 'E8', texto: 'Psicosensometrico' },
        
        // Laboratorios (L1-L44)
        { id: 'L1', texto: 'Alcohol metilico' },
        { id: 'L2', texto: 'Alcoholemia' },
        { id: 'L3', texto: 'Anticuerpos anas' },
        { id: 'L4', texto: 'Anticuerpos hepatitis b - anti hbs' },
        { id: 'L5', texto: 'Anticuerpos varicela igg' },
        { id: 'L6', texto: 'Antigeno especifico para prostata (psa)' },
        { id: 'L7', texto: 'Antigeno hepatitis b' },
        { id: 'L8', texto: 'Basiloscopia' },
        { id: 'L9', texto: 'Bun - nitrogeno ureico' },
        { id: 'L10', texto: 'Cholinesterase (che)' },
        { id: 'L11', texto: 'Colesterol total' },
        { id: 'L12', texto: 'Coprologico' },
        { id: 'L13', texto: 'Creatinina orina' },
        { id: 'L14', texto: 'Creatinina serica' },
        { id: 'L15', texto: 'Ferritina' },
        { id: 'L16', texto: 'Fiebre amarilla virus anticuerpo' },
        { id: 'L17', texto: 'Frotis de uñas' },
        { id: 'L18', texto: 'Frotis faringeo' },
        { id: 'L19', texto: 'Glicemia en ayunas' },
        { id: 'L20', texto: 'Grupo rh' },
        { id: 'L21', texto: 'Hemoclasificacion' },
        { id: 'L22', texto: 'Hemograma completo' },
        { id: 'L23', texto: 'Lentes' },
        { id: 'L24', texto: 'Prueba de sustancias md10' },
        { id: 'L25', texto: 'Prueba de sustancias md5' },
        { id: 'L26', texto: 'Parcial de orina' },
        { id: 'L27', texto: 'Perfil hepatico' },
        { id: 'L28', texto: 'Perfil lipidico' },
        { id: 'L29', texto: 'Plomo en sangre' },
        { id: 'L30', texto: 'Protectores auditivos' },
        { id: 'L31', texto: 'Prueba de alcohol' },
        { id: 'L32', texto: 'Prueba de marihuana y cocaina' },
        { id: 'L33', texto: 'Prueba de sustancias mdr' },
        { id: 'L34', texto: 'Psicosensometrico' },
        { id: 'L35', texto: 'T3 libre' },
        { id: 'L36', texto: 'T4' },
        { id: 'L37', texto: 'Tamizaje de voz' },
        { id: 'L38', texto: 'Glicemia c' },
        { id: 'L39', texto: 'Test de aptitud mental' },
        { id: 'L40', texto: 'Toxoplasma igg' },
        { id: 'L41', texto: 'Toxoplasma igm' },
        { id: 'L42', texto: 'Trigliceridos' },
        { id: 'L43', texto: 'Tsh' },
        { id: 'L44', texto: 'Vih 1 y 2 anticuerpo cualitativa' },
        
        // Vacunas (V1-V15)
        { id: 'V1', texto: 'Vacuna de influenza' },
        { id: 'V2', texto: 'Vacuna dengue tetravalente' },
        { id: 'V3', texto: 'Vacuna dpt acelular-tosferina' },
        { id: 'V4', texto: 'Vacuna fiebre amarilla' },
        { id: 'V5', texto: 'Vacuna fiebre tifoidea' },
        { id: 'V6', texto: 'Vacuna hepatitis a' },
        { id: 'V7', texto: 'Vacuna hepatitis a+b' },
        { id: 'V8', texto: 'Vacuna hepatitis b' },
        { id: 'V9', texto: 'Vacuna meningococo' },
        { id: 'V10', texto: 'Vacuna neumococo polisacarida 23' },
        { id: 'V11', texto: 'Vacuna neumococo prevenar 13' },
        { id: 'V12', texto: 'Vacuna tetano difteria' },
        { id: 'V13', texto: 'Vacuna tetanos' },
        { id: 'V14', texto: 'Vacuna triple viral' },
        { id: 'V15', texto: 'Vacuna varicela' },
        
        // Otros (OT1-OT43)
        { id: 'OT1', texto: 'Anexo dermatologico (piel y anexos)' },
        { id: 'OT2', texto: 'Anexo neurologico' },
        { id: 'OT3', texto: 'Anexo osteomuscular' },
        { id: 'OT4', texto: 'Anexo rcv framingham' },
        { id: 'OT5', texto: 'Anexo rcv gaziano-nhanes' },
        { id: 'OT6', texto: 'Anexo respiratorio' },
        { id: 'OT7', texto: 'Anexo vascular periferico' },
        { id: 'OT8', texto: 'Anexo visual' },
        { id: 'OT9', texto: 'Cuestionario stop bang' },
        { id: 'OT10', texto: 'Cuestionario de sintomas neurologicos (q16)' },
        { id: 'OT11', texto: 'Inventario depersonalidad de eysenck' },
        { id: 'OT12', texto: 'Prueba teorica-practica conductores motorizado' },
        { id: 'OT13', texto: 'Prueba teorico-practica seguridad vial' },
        { id: 'OT14', texto: 'Pruebas de equilibrio y cuestionario para alturas' },
        { id: 'OT15', texto: 'Test de epworth' },
        { id: 'OT16', texto: 'Test de farnsworth (d15)' },
        { id: 'OT17', texto: 'Test de framinghan' },
        { id: 'OT18', texto: 'Test de harvard' },
        { id: 'OT19', texto: 'Test psicologico para fobia electricidad' },
        { id: 'OT20', texto: 'Ecografia abdomen total' },
        { id: 'OT21', texto: 'Ecografia abdominal' },
        { id: 'OT22', texto: 'Ecografia articular de hombro' },
        { id: 'OT23', texto: 'Ecografia articular de rodilla' },
        { id: 'OT24', texto: 'Ecografia de abdomen total' },
        { id: 'OT25', texto: 'Ecografia de higado, pancreas, via biliar y vesicula' },
        { id: 'OT26', texto: 'Ecografia de muñeca derecha' },
        { id: 'OT27', texto: 'Ecografia de rodillas' },
        { id: 'OT28', texto: 'Ecografia de tejidos blandos de pared abdominal' },
        { id: 'OT29', texto: 'Ecografia tejidos blandos extremidades superiores' },
        { id: 'OT30', texto: 'Electrocardiograma' },
        { id: 'OT31', texto: 'Espirometria pre-pos broncodilatador' },
        { id: 'OT32', texto: 'Evaluacion psicologica(isra) fobias-alturas-confinados' },
        { id: 'OT33', texto: 'Lectura radiografia de torax - ilo' },
        { id: 'OT34', texto: 'Radiografia de codo' },
        { id: 'OT35', texto: 'Radiografia de columna cervical' },
        { id: 'OT36', texto: 'Radiografia de columna dorsal - lumbar' },
        { id: 'OT37', texto: 'Radiografia de columna lumbo-sacra' },
        { id: 'OT38', texto: 'Radiografia de dedo' },
        { id: 'OT39', texto: 'Radiografia de mano' },
        { id: 'OT40', texto: 'Radiografia de rodilla (ap, lateral)' },
        { id: 'OT41', texto: 'Radiografia de rodillas comparativas posicion vertical' },
        { id: 'OT42', texto: 'Radiografia de tobillo (ap, lateral y rotacion interna)' },
        { id: 'OT43', texto: 'Radiografia de torax pa- lateral' }
    ];
    
    // Recorrer todos los campos y verificar si están seleccionados
    for(var i = 0; i < campos.length; i++) {
        if($('#' + campos[i].id).is(':checked')) {
            if(adicionales != '') {
                adicionales += ', ';
            }
            adicionales += campos[i].texto;
        }
    }
     $('#adicionales').html(adicionales);
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
    
    $("#boton4").click(function (event) {
        event.preventDefault();
        var id = '<?php  echo $id?>';
        var Sector = $('#codigoInput').val().trim();
        var $input = $('#codigoInput');
        // Limpiar estilos previos
        $input.css('border-color', '');
        if (!/^\d{4}$/.test(Sector)) {
            $input.css('border-color', 'red');
            alert("⚠️ El código debe ser un número de exactamente 4 dígitos (ejemplo: 0111)");
            $input.focus();
            return false;
        }
        // Si la validación es exitosa
        $input.css('border-color', 'green');
        console.log("Código válido: " + Sector);
        var formData = new FormData();
        formData.append("id", id);
        formData.append("Sector", Sector);
        // Aquí va tu código AJAX
        $.ajax({
            url: '../editaragenda2.inc.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                alert("✅  El código CIIU fué guardado.");
                $("#Modal_sector").modal("hide");
                $("#costumModal100").modal("show");
            },
        });
    });
     var timerBusqueda;
    $(document).on('input', '#Documento', function() {
        clearTimeout(timerBusqueda);
        var cedula = $(this).val().trim();
        var tipoDocumento = $('#Tipo').val(); // Obtener el tipo seleccionado
        var defaultCodigo = '<?php echo $Codigo2 ?>';
        // Validar según tipo de documento
        if (tipoDocumento === 'Cédula de ciudadanía' || tipoDocumento === 'Tarjeta de identidad') {
            // Solo números
            cedula = cedula.replace(/[^0-9]/g, '');
            $(this).val(cedula);
        }
        if (!cedula || cedula.length < 2) {
            resetFormFields(defaultCodigo);
            return;
        }
        timerBusqueda = setTimeout(function() {
            $.ajax({
                type: "POST",
                url: "../search23.php",
                data: { 
                    Razon: '<?php echo $Razon ?>',
                    Cedula: cedula,
                    Tipo: tipoDocumento // Enviar también el tipo
                },
                dataType: 'json',
                success: function(tasks) {
                    if (tasks && tasks.length > 0) {
                        fillFormFields(tasks[0], defaultCodigo);
                    } else {
                        resetFormFields(defaultCodigo);
                    }
                },
                error: function(xhr, status, error) {
                    resetFormFields(defaultCodigo);
                }
            });
        }, 300);
    });
    // Función para llenar los campos del formulario
    function fillFormFields(data, defaultCodigo) {
        // Asumiendo que tienes campos con estos IDs en tu HTML
        $('#Nombre').val(data.Nombre || '');
        $('#Apellidos').val(data.Apellidos || ''); // Si tienes apellidos separados
        //$('#Codigo').val(data.Codigo || defaultCodigo);
        if (data.Tipo) {
            $('#Tipo').val(data.Tipo);
            $('#Tipo').css('color', 'black');
        } else {
            $('#Tipo').val(''); // Resetear a la opción por defecto
            $('#Tipo').css('color', '#999999');
        }
        if (data.Genero) {
            $('#Genero').val(data.Genero);
            $('#Genero').css('color', 'black');
        } else {
            $('#Genero').val(''); // Resetear a la opción por defecto
            $('#Genero').css('color', '#999999');
        }
        $('#Genero').val(data.Genero || '');
        console.log(data.Genero)
        $('#Cargo').val(data.Cargo || '');
        $('#Email').val(data.Email || '');
        $('#Celular').val(data.Celular || '');
        $('#Email2').val(data.Email2 || '');
        
        // Si quieres mostrar nombre completo en un solo campo
        if (data.Nombre) {
            // Si los apellidos están en el mismo campo Nombre
            $('#NombreCompleto').val(data.Nombre);
        }
    }
    // Función para resetear los campos
    function resetFormFields(defaultCodigo) {
        /*$('#Nombre').val('');
        $('#Apellidos').val('');
        $('#Codigo').val(defaultCodigo || '');
        $('#Tipo').val('');
        $('#Edad').val('');
        $('#Genero').val('');
        $('#Estado').val('');
        $('#Empresa').val('');
        $('#Cargo').val('');*/
    }
    
</script>
</body>
</html>