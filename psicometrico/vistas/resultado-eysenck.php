<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resultado - Eysenck</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/sonification.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion5.inc.php';
    //if (!controlsesion5::sesion_iniciada()) { redireccion::redirigir(RUTA_INICIO_EYSENCK);}
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $Codigo = $_SESSION['Codigo'];
    $sql = "SELECT * FROM reg_psicologica WHERE Codigo = '$Codigo'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Nombre = $row['Nombre'];
    $Cedula = $row['Cedula'];
    $Edad = $row['Edad'];
    $Genero0 = $row['Genero'];
    if ($Genero0 == 1) {
        $Genero = 'M';
        $Etiqueta = ' del Sr. ';
    } elseif ($Genero0 == 2)  {
        $Genero = 'F';
        $Etiqueta = ' de la Sra. ';
    }
    $Estado = $row['Estado'];
    $Empresa = $row['Empresa'];
    $Sede0 = $row['Sede'];
    if ($Sede0 == 1) {
        $Sede = "Medellín";
    } elseif ($Sede_0 == 2) {
        $Sede = "Apartadó";
    }
    $Cargo = $row['Cargo'];
    $Fecha0 = $row['Fecha_registro'];
    $Fecha = strtotime($Fecha0);
    $año = date("Y", $Fecha);
    $mes0 = date("m", $Fecha);
    $dia = date("d", $Fecha);
    $hora = date("H:i:s", $Fecha);
    $Sede0 = $row['Sede'];
    
    switch ($mes0) {
    case '01':
        $mes ="Enero";
        break;
    case '02':
        $mes ="Febrero";
        break;
    case '03':
        $mes ="Marzo";
        break;
    case '04':
        $mes ="Abril";
        break;
    case '05':
        $mes ="mayo";
        break;
    case '06':
        $mes ="Junio";
        break;
    case '07':
        $mes ="Julio";
        break;
    case '08':
        $mes ="Agosto";
        break;
    case '09':
        $mes ="Septiembre";
        break;
    case '10':
        $mes ="Octubre";
        break;
    case '11':
        $mes ="Noviembre";
        break;
    case '12':
        $mes ="Diciembre";
        break;
    }
    
    $Codigo2 = $_GET['nombre'];
    $sql = "SELECT * FROM formulario_eysenck WHERE Codigo = '$Codigo2'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
   
    $Item1 = $row['Item1'];
    $Item2 = $row['Item2'];
    $Item3 = $row['Item3'];
    $Item4 = $row['Item4'];
    $Item5 = $row['Item5'];
    $Item6 = $row['Item6'];
    $Item7 = $row['Item7'];
    $Item8 = $row['Item8'];
    $Item9 = $row['Item9'];
    $Item10 = $row['Item10'];
    $Item11 = $row['Item11'];
    $Item12 = $row['Item12'];
    $Item13 = $row['Item13'];
    $Item14 = $row['Item14'];
    $Item15 = $row['Item15'];
    $Item16 = $row['Item16'];
    $Item17 = $row['Item17'];
    $Item18 = $row['Item18'];
    $Item19 = $row['Item19'];
    $Item20 = $row['Item20'];
    $Item21 = $row['Item21'];
    $Item22 = $row['Item22'];
    $Item23 = $row['Item23'];
    $Item24 = $row['Item24'];
    $Item25 = $row['Item25'];
    $Item26 = $row['Item26'];
    $Item27 = $row['Item27'];
    $Item28 = $row['Item28'];
    $Item29 = $row['Item29'];
    $Item30 = $row['Item30'];
    $Item31 = $row['Item31'];
    $Item32 = $row['Item32'];
    $Item33 = $row['Item33'];
    $Item34 = $row['Item34'];
    $Item35 = $row['Item35'];
    $Item36 = $row['Item36'];
    $Item37 = $row['Item37'];
    $Item38 = $row['Item38'];
    $Item39 = $row['Item39'];
    $Item40 = $row['Item40'];
    $Item41 = $row['Item41'];
    $Item42 = $row['Item42'];
    $Item43 = $row['Item43'];
    $Item44 = $row['Item44'];
    $Item45 = $row['Item45'];
    $Item46 = $row['Item46'];
    $Item47 = $row['Item47'];
    $Item48 = $row['Item48'];
    $Item49 = $row['Item49'];
    $Item50 = $row['Item50'];
    $Item51 = $row['Item51'];
    $Item52 = $row['Item52'];
    $Item53 = $row['Item53'];
    $Item54 = $row['Item54'];
    $Item55 = $row['Item55'];
    $Item56 = $row['Item56'];
    $Item57 = $row['Item57'];
  
    //$Items = $Item1 + $Item2 + $Item3 + $Item4 + $Item5 + $Item6 + $Item7 + $Item8 + $Item9 + $Item10 + $Item11 + $Item12 + $Item13 + $Item14 + $Item15 + $Item16 + $Item17 + $Item18 + $Item19 + $Item20 + $Item21 + $Item22 + $Item23 + $Item24 + $Item25 + $Item26 + $Item27 + $Item28 + $Item29 + $Item30 + $Item31 + $Item32 + $Item33 + $Item34 + $Item35 + $Item36 + $Item37 + $Item38 + $Item39 + $Item40;
    
    $E = '0';
    $N = '0';
    $V = '0';
    $E = $Item1 + $Item3 + $Item5 + $Item8 + $Item10 + $Item13 + $Item15 + $Item17 + $Item20 + $Item22 + $Item25 + $Item27 + $Item29 + $Item32 + $Item34 + $Item37 + $Item39 + $Item41 + $Item44 + $Item46 + $Item49 + $Item51 + $Item53 + $Item56;
    $N = $Item2 + $Item4 + $Item7 + $Item9 + $Item11 + $Item14 + $Item16 + $Item19 + $Item21 + $Item23 + $Item26 + $Item28 + $Item31 + $Item33 + $Item35 + $Item38 + $Item40 + $Item43 + $Item45 + $Item47 + $Item50 + $Item52 + $Item55 + $Item57;
    $Veracidad = $Item6 + $Item12 + $Item18 + $Item24 + $Item30 + $Item36 + $Item42 + $Item48 + $Item54;
    
    //$L =
    
    if($Item1 == 1) {
        $Text1 = 'SI';
    } else {
        $Text1 = 'NO'; 
    }
    if($Item2 == 1) {
        $Text2 = 'SI';
    } else {
        $Text2 = 'NO'; 
    }
    if($Item3 == 1) {
        $Text3 = 'SI';
    } else {
        $Text3 = 'NO'; 
    }
    if($Item4 == 1) {
        $Text4 = 'SI';
    } else {
        $Text4 = 'NO'; 
    }
    if($Item5 == 1) {
        $Text5 = 'SI';
    } else {
        $Text5 = 'NO'; 
    }
    if($Item6 == 1) {
        $Text6 = 'SI';
    } else {
        $Text6 = 'NO'; 
    }
    if($Item7 == 1) {
        $Text7 = 'SI';
    } else {
        $Text7 = 'NO'; 
    }
    if($Item8 == 1) {
        $Text8 = 'SI';
    } else {
        $Text8 = 'NO'; 
    }
    if($Item9 == 1) {
        $Text9 = 'SI';
    } else {
        $Text9 = 'NO'; 
    }
    if($Item10 == 1) {
        $Text10 = 'SI';
    } else {
        $Text10 = 'NO'; 
    }
    if($Item11 == 1) {
        $Text11 = 'SI';
    } else {
        $Text11 = 'NO'; 
    }
    if($Item12 == 1) {
        $Text12 = 'SI';
    } else {
        $Text12 = 'NO'; 
    }
    if($Item13 == 1) {
        $Text13 = 'SI';
    } else {
        $Text13 = 'NO'; 
    }
    if($Item14 == 1) {
        $Text14 = 'SI';
    } else {
        $Text14 = 'NO'; 
    }
    if($Item15 == 1) {
        $Text15 = 'SI';
    } else {
        $Text15 = 'NO'; 
    }
    if($Item16 == 1) {
        $Text16 = 'SI';
    } else {
        $Text16 = 'NO'; 
    }
    if($Item17 == 1) {
        $Text17 = 'SI';
    } else {
        $Text17 = 'NO'; 
    }
    if($Item18 == 1) {
        $Text18 = 'SI';
    } else {
        $Text18 = 'NO'; 
    }
    if($Item19 == 1) {
        $Text19 = 'SI';
    } else {
        $Text19 = 'NO'; 
    }
    if($Item20 == 1) {
        $Text20 = 'SI';
    } else {
        $Text20 = 'NO'; 
    }
    if($Item21 == 1) {
        $Text21 = 'SI';
    } else {
        $Text21 = 'NO'; 
    }
    if($Item22 == 1) {
        $Text22 = 'SI';
    } else {
        $Text22 = 'NO'; 
    }
    if($Item23 == 1) {
        $Text23 = 'SI';
    } else {
        $Text23 = 'NO'; 
    }
    if($Item24 == 1) {
        $Text24 = 'SI';
    } else {
        $Text24 = 'NO'; 
    }
    if($Item25 == 1) {
        $Text25 = 'SI';
    } else {
        $Text25 = 'NO'; 
    }
    if($Item26 == 1) {
        $Text26 = 'SI';
    } else {
        $Text26 = 'NO'; 
    }
    if($Item27 == 1) {
        $Text27 = 'SI';
    } else {
        $Text27 = 'NO'; 
    }
    if($Item28 == 1) {
        $Text28 = 'SI';
    } else {
        $Text28 = 'NO'; 
    }
    if($Item29 == 1) {
        $Text29 = 'SI';
    } else {
        $Text29 = 'NO'; 
    }
    if($Item30 == 1) {
        $Text30 = 'SI';
    } else {
        $Text30 = 'NO'; 
    }
    if($Item31 == 1) {
        $Text31 = 'SI';
    } else {
        $Text31 = 'NO'; 
    }
    if($Item32 == 1) {
        $Text32 = 'SI';
    } else {
        $Text32 = 'NO'; 
    }
    if($Item33 == 1) {
        $Text33 = 'SI';
    } else {
        $Text33 = 'NO'; 
    }
    if($Item34 == 1) {
        $Text34 = 'SI';
    } else {
        $Text34 = 'NO'; 
    }
    if($Item35 == 1) {
        $Text35 = 'SI';
    } else {
        $Text35 = 'NO'; 
    }
    if($Item36 == 1) {
        $Text36 = 'SI';
    } else {
        $Text36 = 'NO'; 
    }
    if($Item37 == 1) {
        $Text37 = 'SI';
    } else {
        $Text37 = 'NO'; 
    }
    if($Item38 == 1) {
        $Text38 = 'SI';
    } else {
        $Text38 = 'NO'; 
    }
    if($Item39 == 1) {
        $Text39 = 'SI';
    } else {
        $Text39 = 'NO'; 
    }
    if($Item40 == 1) {
        $Text40 = 'SI';
    } else {
        $Text40 = 'NO'; 
    }

      
?>
<style>
      @font-face {
        font-family: MyriadPro;
        src: url(../fonts/MyriadPro-Regular.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: MyriadProB;
        src: url(../fonts/MyriadPro-Bold.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Amerika;
        src: url(../fonts/Amerika.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Roman;
        src: url(../fonts/helvetica.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Romanbd;
        src: url(../fonts/helveticabd.ttf);
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
    .loader2 {
        opacity:0.3;
    }
    html,
    body {
        font-family:Verdana;
        font-size:13px;
        line-height: 2rem;
        color: #000000;
        border:none;
        overflow-x: hidden;
         background: url('../imagine/T6.jpg') 50% 0% #ffffff;
        background-color:#f8f4f1;
        background-size: 100%;
        width: 100%!important;
        height:100%!important;
    }
    ::-webkit-scrollbar {
        display: none;
    }
    tbody td {
        text-align:center;
        height:12px;
    }
    .ventana_flotante {
        box-shadow: 0px 4px 10px 0px rgba(0,0,0,8);
        background-color: #ffffff;
        margin-bottom:30px;
        padding:1em;
    }
    .container-fluid li a:link, .container-fluid li a:visited {
        color: #000000!important;
        background-color:transparent!important;
    }
    .container-fluid li a:hover, .container-fluid li a:active {
        color: #333333!important;
    } 
    input[type="checkbox"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
    }
    .checkbox label {
        display: inline-block;
        position: relative;
        float:center!important;
        margin-left:24px!important;
    }
    #check1::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 15px;
        height: 15px;
        left: 0;
        margin-left: -20px;
        background-color:#6fc0b2;
        box-shadow:0px 4px 3px rgba(0,0,0,.1);
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        width: 16px;
        height: 16px;
        left: -19px;
        top: -6px;
        font-size: 11px;
    }
    #check2::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 15px;
        height: 15px;
        left: 0;
        margin-left: -20px;
        background-color:#b3c7cc;            
    }
    #check2::after {
        display: inline-block;
        position: absolute;
        width: 16px;
        height: 16px;
        left: -19px;
        top: -6px;
        font-size: 11px;
    }
    #rotar {
        position:relative;
        -moz-transform: rotate(-90.0deg);  /* FF3.5+ */
        -o-transform: rotate(-90.0deg);  /* Opera 10.5 */
        -webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */
        filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
    }
    td select,
    td input {
        font-size:18px;
        border-radius:0;
        border-color:#006699;
        text-align:center;
        width:3em;
        height:3em;
        margin-top:0.8em!important;
    }
    #boton {
        width: 270px;
        height: 45px;
        font-size:22px;
        transform-style: preserve-3d;
        border:0!important;
        border-radius:0;
        background:#000000!important;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    #boton:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        border: 1px solid #f58634!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    .toggle-custom {
        background:transparent!important;
    }
    .toggle-custom[aria-expanded='true'] .glyphicon-plus:before {
        content: "\2212";                
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
        border:1px solid #71788e!important;
    }
    .table td {
        text-align:center;
        padding:1em;
        border:1px solid #71788e;
        vertical-align:middle!important;
    }
        
    #cognitivo {
        margin-top:-54em;
        margin-left:25.5%;
    }
    #fisiologico {
        margin-top:-54em;
        margin-left:39.6%;
    }
    #motriz {
        margin-top:-54em;
        margin-left:54.2%;
    }
    #total {
        margin-top:-54em;
        margin-left:68.5%;
    } 
    #titulo2 {
        position:fixed;
        width:100%!important;
        height:1.5em!important;
        background: -webkit-linear-gradient(to right,#a57396, #3e2837);  
        background: linear-gradient(to right,#a57396, #3e2837);
        color:#ffffff;
        font-family:moriston;
        font-size:24px;
        bottom:0!important;
        padding:0.2em;
        margin:0;
        letter-spacing:1px;
        text-align:center;
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
</style> 
</head> 
<body>
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
</div>
<div class="container-fluid loader2" style="background-color:transparent;font-size:16px;font-family:Moriston;z-index:-1">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#">
                <?php echo ' ' . $Nombre; ?>
            </a>
        </li>                           
        <li>
            <a href=<?php echo RUTA_LOGOUT_TEST ?> style="background:transparent!important;color:#333333">
                <i class="fa fa-share-square-o" aria-hidden="true"></i> Cerrar sesión</a>
        </li>
    </ul>    
</div>
<div class="container loader2" style="font-size:16px;font-family:verdana">
    <p style="color:#5a115b;font-family:MyriadProB;letter-spacing:2px;font-size:30px;text-align:center">RESULTADOS DEL INVENTARIO DE PERSONALIDAD EYSENCK</p><br><br>
    <div class="col-md-8 col-md-offset-2">
        <div style="font-size:24px;color:#6d4660"><span style="float:left">Melancólico</span><span style="float:right">Colérico</span></div>
        <div id="grafica2" style="width:455px;height:495px;margin-left:164px"></div>
        <div ><img src="../imagine/P21.png" style="width:750px;height:720px;margin-top:-38em"></img></div>
        <div id="grafica1"></div>
        <div style="margin-top:-7em;font-size:24px;color:#6d4660"><span style="float:left">Flemático</span><span style="float:right">Sanguíneo</span></div>
    </div>
</div>
<div class="row" id="titulo2">Cedisalud <span style="font-family:moristonb">IPS</span></div>
<div id="grafica3" ></div>
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
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
            var o = $(this).attr("data-easein");
            "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    $(document).ready(function (){
        //$(".loader").fadeOut("slow");
    });
    var  ejey = parseInt(<?php echo $E ?>); 
    var  ejex = parseInt(<?php echo $N ?>);  
    var  Veracidad = parseInt(<?php echo $Veracidad ?>); 
    //var  ejey = 6; 
    //var  ejex = 17;  
    //var Veracidad = 7;
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
    Highcharts.chart('grafica2', {
        chart: {
            backgroundColor: false,
            width:455,
            height:495,
        },
        title: {
            text: '',
        },
        accessibility: {
            landmarkVerbosity: 'one'
        },
        xAxis: {
            min: -12,
            max: 12,
            tickInterval: 0,
            lineColor: '#6d4660',
            lineWidth: 4,
            crossing: 0,
            labels: {
                style: {
                    fontSize: '0px',
                },
            },
        },
        yAxis: {
            min: -12,
            max: 12,
            tickInterval: 0,
            lineWidth: 4,
            lineColor: '#6d4660',
            crossing: 0,
            gridLineColor: 'transparent',
            title: {
                text: '',
            },
            labels: {
                style: {
                    fontSize: '0px',
                },
            },
        },
        legend: {
            enabled: false
        },
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        },
        tooltip: {
            backgroundColor: '#ffffff',
            borderColor: 'black',
            borderRadius: 0,
            borderWidth: 0,
            style: {
                fontFamily: 'helvetica',
                fontSize: '14px',
                color:'#000000'
            },
            headerFormat: '',
            pointFormat: '<div style="font-size:14px;font-family:Moriston">Estable-inestable&nbsp&nbsp<span style="font-family:Moriston;color:#2caffe"><b>'+ejey+'</b></span></div><br><div style="font-size:14px;font-family:Moriston;margin-top:6em!important">Introversión-extroversión&nbsp&nbsp<span style="font-family:Moriston;color:#2caffe"><b>'+ejex+'</b></span></div>'
        },
        series: [{
            data: [ {
                y:ejey_,
                x:ejex_
            }]
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


    var doc = new jsPDF('p', 'pt', 'letter');
    doc.setFontSize(13);
    doc.setFont("helvetica");
    doc.setFontType("bold");
    doc.setTextColor(109, 70, 96);
    doc.myText('INVENTARIO DE PERSONALIDAD - EYSENCK',{align: "center"},0,90);
    var columns = ['','','','',];
    var data = [['Nombre y Apellidos:','<?php echo $Nombre ?>','Cédula:','<?php echo $Cedula ?>']];
    doc.autoTable(columns,data, {margin:{ top: 105, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
    columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 60}, 3: {fontStyle:'normal',columnWidth: 96, fillColor: [239, 237, 247]}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    var columns = ['', '','','','',''];
    var data = [['Cargo:','<?php echo $Cargo ?>','Edad:','<?php echo $Edad ?>','Género:','<?php echo $Genero ?>']];
    doc.autoTable(columns,data, {margin:{ top: 125, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
    columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 48}, 3: {fontStyle:'normal',columnWidth: 30, fillColor: [239, 237, 247],halign: 'center'}, 4: {columnWidth: 48}, 5: {fontStyle:'normal',columnWidth: 30, fillColor: [239, 237, 247], halign: 'center'}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    var columns = ['','','',''];
    var data = [['Empresa:','<?php echo $Empresa.' - '.$Sede ?>','Cargo:','<?php echo $Cargo ?>']];
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
    if(ejex >= 18 && ejey >= 17) {
    var texto1 = 'ALTAMENTE COLÉRICO';
    var texto2 = 'Alta extraversión, alta estabilidad emocional';
    var texto3 = 'Tu perfil refleja una combinación de extroversión con una sólida estabilidad emocional. Eres alguien sociable, confiable y optimista, capaz de mantener la calma y la compostura en diversas situaciones. Esta combinación te hace destacar como un líder natural y alguien que disfruta de interactuar con los demás, brindando energía positiva y estabilidad emocional a tu entorno. Tu capacidad para mantener relaciones sociales fuertes y tu actitud positiva son aspectos destacados de tu personalidad.';
    }
    else if(ejex >= 13 && ejex <= 17 && ejey >= 13) {
    var texto1 = 'COLÉRICO';
    var texto2 = 'Alta extraversión, alta estabilidad emocional';
    var texto3 = 'Tu perfil refleja una combinación de extroversión con una sólida estabilidad emocional. Eres alguien sociable, confiable y optimista, capaz de mantener la calma y la compostura en diversas situaciones. Esta combinación te hace destacar como un líder natural y alguien que disfruta de interactuar con los demás, brindando energía positiva y estabilidad emocional a tu entorno. Tu capacidad para mantener relaciones sociales fuertes y tu actitud positiva son aspectos destacados de tu personalidad.';
    }
    else if(ejex >= 12 && ejex <= 17 && ejey >= 12 && ejey <= 16) {
    var texto1 = 'MEDIANAMENTE COLÉRICO';
    var texto2 = 'Mediana extraversión, mediana estabilidad emocional';
    var texto3 = 'Tu perfil refleja una combinación de extroversión con una sólida estabilidad emocional. Eres alguien sociable, confiable y optimista, capaz de mantener la calma y la compostura en diversas situaciones. Esta combinación te hace destacar como un líder natural y alguien que disfruta de interactuar con los demás, brindando energía positiva y estabilidad emocional a tu entorno. Tu capacidad para mantener relaciones sociales fuertes y tu actitud positiva son aspectos destacados de tu personalidad.';
    }
    else if(ejex >= 18 && ejey <= 7) {
    var texto1 = 'ALTAMENTE SANGUÍNEO';
    var texto2 = 'Alta extraversión, baja estabilidad emocional';
    var texto3 = 'Este resultado indica que eres una persona extrovertida y sociable, que disfruta de la compañía de otros y tiende a ser energético y entusiasta en diferentes situaciones sociales. Sin embargo, también puedes experimentar emociones intensas y variadas, lo que puede llevar a cambios emocionales rápidos. Tu capacidad para adaptarte fácilmente a diferentes entornos y tu habilidad para liderar naturalmente en grupos destacan como fortalezas, aunque es importante mantener un equilibrio emocional para gestionar mejor los altibajos emocionales.';
    }
    else if(ejex >= 13 && ejex <= 17 && ejey <= 7) {
    var texto1 = 'SANGUÍNEO';
    var texto2 = 'Alta extraversión, baja estabilidad emocional';
    var texto3 = 'Este resultado indica que eres una persona extrovertida y sociable, que disfruta de la compañía de otros y tiende a ser energético y entusiasta en diferentes situaciones sociales. Sin embargo, también puedes experimentar emociones intensas y variadas, lo que puede llevar a cambios emocionales rápidos. Tu capacidad para adaptarte fácilmente a diferentes entornos y tu habilidad para liderar naturalmente en grupos destacan como fortalezas, aunque es importante mantener un equilibrio emocional para gestionar mejor los altibajos emocionales.';
    }
    else if(ejex >= 12 && ejex <= 17 && ejey >= 7 && ejey <= 11) {
    var texto1 = 'MEDIANAMENTE SANGUÍNEO';
    var texto2 = 'Mediana extraversión, baja estabilidad emocional';
    var texto3 = 'Este resultado indica que eres una persona extrovertida y sociable, que disfruta de la compañía de otros y tiende a ser energético y entusiasta en diferentes situaciones sociales. Sin embargo, también puedes experimentar emociones intensas y variadas, lo que puede llevar a cambios emocionales rápidos. Tu capacidad para adaptarte fácilmente a diferentes entornos y tu habilidad para liderar naturalmente en grupos destacan como fortalezas, aunque es importante mantener un equilibrio emocional para gestionar mejor los altibajos emocionales.';
    }
    else if(ejex <= 10 && ejey >= 17) {
    var texto1 = 'ALTAMENTE MELANCÓLICO';
    var texto2 = 'Baja extraversión, alta estabilidad emocional';
    var texto3 = 'Tu perfil indica que eres una persona tranquila, reservada y emocionalmente estable. Disfrutas de la paz y la estabilidad en tu vida, y prefieres un ritmo de vida más relajado y constante. Eres paciente, tolerante y capaz de mantener la calma bajo presión, lo que te permite enfrentar los desafíos con serenidad y resolver problemas de manera eficaz. Tu capacidad para mantener relaciones estables y tu enfoque reflexivo en las decisiones destacan como rasgos positivos de tu personalidad.';
    }
    else if(ejex <= 11 && ejey >= 13) {
    var texto1 = 'MELANCÓLICO';
    var texto2 = 'Baja extraversión, alta estabilidad emocional';
    var texto3 = 'Tu perfil indica que eres una persona tranquila, reservada y emocionalmente estable. Disfrutas de la paz y la estabilidad en tu vida, y prefieres un ritmo de vida más relajado y constante. Eres paciente, tolerante y capaz de mantener la calma bajo presión, lo que te permite enfrentar los desafíos con serenidad y resolver problemas de manera eficaz. Tu capacidad para mantener relaciones estables y tu enfoque reflexivo en las decisiones destacan como rasgos positivos de tu personalidad.';
    }
    else if(ejex >= 10 && ejex <= 12 && ejey >= 12 && ejey <= 16) {
    var texto1 = 'MEDIANAMENTE MELANCÓLICO';
    var texto2 = 'Baja extraversión, mediana estabilidad emocional';
    var texto3 = 'Tu perfil indica que eres una persona tranquila, reservada y emocionalmente estable. Disfrutas de la paz y la estabilidad en tu vida, y prefieres un ritmo de vida más relajado y constante. Eres paciente, tolerante y capaz de mantener la calma bajo presión, lo que te permite enfrentar los desafíos con serenidad y resolver problemas de manera eficaz. Tu capacidad para mantener relaciones estables y tu enfoque reflexivo en las decisiones destacan como rasgos positivos de tu personalidad.';
    }
    else if(ejex <= 10 && ejey <= 11) {
    var texto1 = 'ALTAMENTE FLEMÁTICO';
    var texto2 = 'Baja extraversión, baja estabilidad emocional';
    var texto3 = 'Si obtuviste un resultado bajo en extraversión y baja estabilidad emocional, es probable que seas introspectivo, reservado y propenso a experiencias emocionales intensas. Prefieres la tranquilidad y disfrutas de tiempo a solas para reflexionar sobre tus pensamientos y emociones. Aunque eres capaz de profundizar en tus emociones y entenderlas a un nivel más profundo, es importante que cuides tu bienestar emocional y busques formas saludables de gestionar el estrés y la ansiedad que puedan surgir debido a tu sensibilidad emocional.';
    var texto4 = 'Trabajo individual';
    var texto5 = 'Prefiere trabajar sólo, estable emocionalmente, meticuloso y organizado';
    var texto6 = 'Maneja el estrés internamente, se auto-motiva.';
    var texto7 = 'Sigue órdenes con precisión, atención a detalles.';
    }
    else if(ejex <= 11 && ejey <= 11) {
    var texto1 = 'FLEMÁTICO';
    var texto2 = 'Baja extraversión, baja estabilidad emocional';
    var texto3 = 'Si obtuviste un resultado bajo en extraversión y baja estabilidad emocional, es probable que seas introspectivo, reservado y propenso a experiencias emocionales intensas. Prefieres la tranquilidad y disfrutas de tiempo a solas para reflexionar sobre tus pensamientos y emociones. Aunque eres capaz de profundizar en tus emociones y entenderlas a un nivel más profundo, es importante que cuides tu bienestar emocional y busques formas saludables de gestionar el estrés y la ansiedad que puedan surgir debido a tu sensibilidad emocional.';
    }
    else if(ejex >= 10 && ejex <= 12 && ejey >= 7 && ejey <= 11) {
    var texto1 = 'MEDIANAMENTE FLEMÁTICO';
    var texto2 = 'Baja extraversión, baja estabilidad emocional';
    var texto3 = 'Si obtuviste un resultado bajo en extraversión y baja estabilidad emocional, es probable que seas introspectivo, reservado y propenso a experiencias emocionales intensas. Prefieres la tranquilidad y disfrutas de tiempo a solas para reflexionar sobre tus pensamientos y emociones. Aunque eres capaz de profundizar en tus emociones y entenderlas a un nivel más profundo, es importante que cuides tu bienestar emocional y busques formas saludables de gestionar el estrés y la ansiedad que puedan surgir debido a tu sensibilidad emocional.';
    var texto4 = 'Trabajo individual';
    var texto5 = 'Prefiere trabajar sólo, estable emocionalmente, meticuloso y organizado';
    var texto6 = 'Maneja el estrés internamente, se auto-motiva.';
    var texto7 = 'Sigue órdenes con precisión, atención a detalles.';
    }
    else if(ejex === 12 && ejey === 12) {
    var texto1 = 'PERFIL EQUILIBRADO';
    var texto2 = 'Extraversión y estabilidad en equilibrio';
    var texto3 = 'Te encuentras en un punto de equilibrio entre la extraversión y la estabilidad emocional. Esto indica que tienes la capacidad de adaptarte a diferentes situaciones, mostrando tanto habilidades sociales como una buena gestión emocional. Eres flexible y puedes desenvolverte tanto en entornos sociales como en situaciones que requieren introspección. Tu perfil muestra una personalidad versátil y bien adaptada.';
    }
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
    doc.setFontSize(11);
    doc.setFontType("bold");
    doc.setTextColor(0, 0, 0);
    doc.myText('INTERPRETACIÓN',{align: "center"},0,80);
    doc.setTextColor(109, 70, 96);
    doc.setFontSize(12);
    doc.setFont("Times-Bold");
    doc.myText('TEMPERAMENTO: '+texto1,{align: "center"},0,105);
    doc.setFontSize(11);
    doc.setFont("helvetica");
    doc.setFontType("bold");
    doc.setTextColor(0, 0, 0);
    doc.myText(texto2,{align: "center"},0,130);
    doc.setFontSize(10);
    doc.setFontType("normal");
    doc.setTextColor(0, 0, 0);
    doc.text(82,155, texto3, {maxWidth: 445, align:'justify', lineHeightFactor: 1.5});
    var yPosRecomendaciones = 250;
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
    const pageCount = doc.internal.getNumberOfPages();
    for(var i = 1; i <= pageCount; i++) {
    doc.setPage(i);
    var img = new Image();
    img.src = '../imagine/logo.jpg';
    doc.addImage(img, 'png',265,700,80,60);
    doc.setTextColor(153, 153, 153);
    doc.setFontSize(9);
    doc.text('Pág. ' + String(i) + ' de ' + String(pageCount),550,30,null,null,"left");
    doc.myText('CEDISALUD IPS -PBX (574) 444 66 04 - MEDELLIN-APARTADÓ',{align: "center"},-200,780);
    }

    //doc.save('<?php echo $Nombre ?>.pdf'); 

    var blob = doc.output('blob');
    var fd = new FormData();
    fd.append('data', blob);
    fd.append('Codigo', '<?php echo $Codigo ?>');
    fd.append('Nombre', '<?php echo $Nombre ?>');
    fd.append('Cedula', '<?php echo $Cedula ?>');
    fd.append('Empresa', '<?php echo $Empresa ?>');
    fd.append('Cargo', '<?php echo $Cargo ?>');
    fd.append('Sede', '<?php echo $Sede ?>');
    fd.append('Sede0', '<?php echo $Sede0 ?>');
    $.ajax({
       type: 'POST',
       url: '../PHPMailer/pdf4.php',
       data: fd,
       processData: false,
       contentType: false
    }).done(function(data) {
       window.location = "inicio_test"  
    });
</script>
</body>
</html>        