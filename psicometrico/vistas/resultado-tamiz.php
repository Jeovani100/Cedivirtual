<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio ISRA</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<script src="http://code.jquery.com/jquery-latest.js"></script>
<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion5.inc.php';
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $Codigo = $_SESSION['Codigo'];
    $sql = "SELECT * FROM reg_psicologica WHERE Codigo = '$Codigo'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Nombre = $row['Nombre'];
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
    $Sede_0 = $row['Sede'];
    if ($Sede_0 == 1) {
        $Sede = "Medellín";
    } elseif ($Sede_0 == 2) {
        $Sede = "Apartadó";
    } elseif ($Sede_0 == 3) {
        $Sede = "Otra sede";
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

    $sql = "SELECT * FROM formulario_tamiz WHERE id_admin = '$Codigo'";
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
  
    $Items = $Item1 + $Item2 + $Item3 + $Item4 + $Item5 + $Item6 + $Item7 + $Item8 + $Item9 + $Item10 + $Item11 + $Item12 + $Item13 + $Item14 + $Item15 + $Item16 + $Item17 + $Item18 + $Item19 + $Item20 + $Item21 + $Item22 + $Item23 + $Item24 + $Item25 + $Item26 + $Item27 + $Item28 + $Item29 + $Item30 + $Item31 + $Item32 + $Item33 + $Item34 + $Item35 + $Item36 + $Item37 + $Item38 + $Item39 + $Item40;
    
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
    html,
    body {
        font-family:Verdana;
        font-size:13px;
        line-height: 2rem;
        color: #000000;
        border:none;
        overflow-x: hidden;
        text-align:justify;
        text-rendering: optimizeLegibility; 
        background:#f1f3f3;
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

    
</style> 
</head> 
<body>
<div class="container-fluid" style="background-color:#f1f3f3;font-size:16px;font-family:Moriston;z-index:-1">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#">
                <?php echo ' ' . $Nombre; ?>
            </a>
        </li>                           
        <li>
            <a href=<?php echo RUTA_LOGOUT_PSICOLOGICO ?>>
                <i class="fa fa-share-square-o" aria-hidden="true"></i> Cerrar sesión</a>
        </li>
</div>
<div class="container-fluid" style="padding:0">
    <div class="ventana_flotante col-md-6 col-md-offset-3" style="padding:2em"><br><br>
            <p style="color:#a69dc8;font-family:MyriadProB;letter-spacing:2px;font-size:50px;text-shadow: 0.1em 0.1em 0.05em #333;text-align:center">PRUEBA PSICOLÓGICA</p><br><br>
            <div class="col-md-12">
            <p style="text-align:center;font-family:narrow;color:#666666;font-size:26px;letter-spacing:2px;">Historia psicológica</p><br>
            <?php
            //$Items = 4;
            if ($Items <= 5) {            
                echo '<p style="font-family:verdanab;margin-left:1em">NO PRESENTA ALTERACIÓN EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.</p><p style="color:#03ca04;text-align:center;font-family:verdanab;font-size:20px">NORMAL</p>'; 
                $texto = 'NORMAL';
                $color ='3, 202, 4';
                $texto1 = 'NO PRESENTA ALTERACIÓN EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.';
            } else if ($Items >= 6 && $Items <= 14) {
                echo '<p style="font-family:verdanab;margin-left:1em">PRESENTA ALTERACIÓN LEVE EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.</p><p style="color:#02cbc4;text-align:center;font-family:verdanab;font-size:20px">LEVE</p>'; 
                $texto = 'LEVE';
                $color ='2, 203, 196';
                $texto1 = 'PRESENTA ALTERACIÓN LEVE EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.';
            } else if ($Items >= 15 && $Items <= 24) {
                echo '<p style="font-family:verdanab;margin-left:1em">PRESENTA ALTERACIÓN MODERADA EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.</p><p style="color:#eae616;text-align:center;font-family:verdanab;font-size:20px">MODERADO</p>'; 
                $texto = 'MODERADO';
                $color ='187, 184, 17';
                $texto1 = 'PRESENTA ALTERACIÓN MODERADA EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.';
            } else if ($Items >= 25) {
                echo '<p style="font-family:verdanab;margin-left:1em">PRESENTA ALTERACIÓN GRAVE EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.</p><p style="color:#d60d0d;text-align:center;font-family:verdanab;font-size:20px">SEVERO</p>';
                $texto = 'SEVERO';
                $color ='214, 13, 13';
                $texto1 = 'PRESENTA ALTERACIÓN GRAVE EN NIEVELES DE RESPUESTA FRENTE A FACTORES DE RIESGO ESTRESANTES.';
            };
            ?>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <table style="border:1px solid #71788e!important;padding:0!important;width:100%">
                    <tr style="padding:0important">
                        <td style="padding:0important">
                            <div id="prueba" style="padding:0important"></div>
                        </td>
                    </tr>
                </table>
            </div><br><br>
            <div class="col-md-12"><br><br>
                <p style="text-align:center;font-family:narrow;color:#666666;font-size:26px;letter-spacing:2px;">Concepto final de valoración psicológica</p><br>
                <?php
                if ($Items <= 5) {            
                    echo '<p style="font-family:verdanab;margin-left:1em">CUMPLE CON CRITERIOS DE NORMALIDAD EN NIVELES DE ANSIEDAD ADAPTATIVA QUE PREPARA PARA EJECUTAR TAREAS O ALERTAR FRENTE A AMENAZAS. PUEDE PERMANECER POR PERIODOS LARGOS EN ALTURAS Y ESPACIOS CONFINADOS. LAS SITUACIONES NO INFLUYE EN SU CONDUCTA FRENTE A LOS ESTÍMULOS YA QUE POSEE BUENAS ESTRUCTURAS COGNITIVAS Y EMOCIONALES PARA PERCIBIR Y POR ENDE AFRONTAR DE MANERA ASERTIVA LAS EXPERIENCIAS DISPLACENTERAS O CONFLICTIVAS DE SU DÍA A DÍA. NO PRESENTA ALTERACIÓN EN SUS RESPUESTAS COGNITIVAS, MOTRICES O FISIOLÓGICAS.</p>';    
                    $texto2 = 'CUMPLE CON CRITERIOS DE NORMALIDAD EN NIVELES DE ANSIEDAD ADAPTATIVA QUE PREPARA PARA EJECUTAR TAREAS O ALERTAR FRENTE A AMENAZAS. PUEDE PERMANECER POR PERIODOS LARGOS EN ALTURAS Y ESPACIOS CONFINADOS. LAS SITUACIONES NO INFLUYE EN SU CONDUCTA FRENTE A LOS ESTÍMULOS YA QUE POSEE BUENAS ESTRUCTURAS COGNITIVAS Y EMOCIONALES PARA PERCIBIR Y POR ENDE AFRONTAR DE MANERA ASERTIVA LAS EXPERIENCIAS DISPLACENTERAS O CONFLICTIVAS DE SU DÍA A DÍA. NO PRESENTA ALTERACIÓN EN SUS RESPUESTAS COGNITIVAS, MOTRICES O FISIOLÓGICAS.';
                } else if ($Items >= 6 && $Items <= 14) {
                    echo '<p style="font-family:verdanab;margin-left:1em">CUMPLE CON CRITERIOS DE NORMALIDAD EN NIVELES DE ANSIEDAD PARA LABORAR EN ALTURAS Y ESPACIOS CONFINADOS. PRESENTA ANSIEDAD LEVE SIN EVIDENCIAR PATOLOGÍA EN RESPUESTAS FRENTE A LAS EXPERIENCIAS DISPLACENTERAS O CONFLICTIVAS YA QUE SON RESPUESTAS INMEDIATAS A FACTORES INMEDIATOS ESTRESANTES. PUEDE DEMPEÑAR SU FUNCIÓN DEL CARGO CON NORMALIDAD, A SU VEZ SE SUGUIERE TRABAJAR EN SUS RESPUESTAS COGNITIVAS, MOTRICES O FISIOLÓGICAS EN SU INEMDIATEZ.</p>'; 
                    $texto2 = 'CUMPLE CON CRITERIOS DE NORMALIDAD EN NIVELES DE ANSIEDAD PARA LABORAR EN ALTURAS Y ESPACIOS CONFINADOS. PRESENTA ANSIEDAD LEVE SIN EVIDENCIAR PATOLOGÍA EN RESPUESTAS FRENTE A LAS EXPERIENCIAS DISPLACENTERAS O CONFLICTIVAS YA QUE SON RESPUESTAS INMEDIATAS A FACTORES INMEDIATOS ESTRESANTES. PUEDE DEMPEÑAR SU FUNCIÓN DEL CARGO CON NORMALIDAD, A SU VEZ SE SUGUIERE TRABAJAR EN SUS RESPUESTAS COGNITIVAS, MOTRICES O FISIOLÓGICAS EN SU INEMDIATEZ.';
                } else if ($Items >= 15 && $Items <= 24) {
                    echo '<p style="font-family:verdanab;margin-left:1em">PUEDE DESEMPEÑAR FUNCIONES DEL CARGO CON ACOMPAÑAMIENTO DE SUPERIORES SÓLO EN PROCESO DE INDUCCIÓN MIENTRAS ADECUA SU ESTRUCTURA COGNITIVA Y PERCEPTUAL CON RESPECTO A SU MEDIO AMBIENTE LABORAL, ASÍ COMO LA ADAPTACIÓN AL NUEVO CARGO QUE EJERCERÁ, NO REQUIERE SUPERVISIÓN DIRECTA, DEBIDO A QUE PRESENTA UNA ALTERACIÓN EN NIVELES DE ANSIEDAD LEVE-MODERADA.</p>'; 
                    $texto2 = 'PUEDE DESEMPEÑAR FUNCIONES DEL CARGO CON ACOMPAÑAMIENTO DE SUPERIORES SÓLO EN PROCESO DE INDUCCIÓN MIENTRAS ADECUA SU ESTRUCTURA COGNITIVA Y PERCEPTUAL CON RESPECTO A SU MEDIO AMBIENTE LABORAL, ASÍ COMO LA ADAPTACIÓN AL NUEVO CARGO QUE EJERCERÁ, NO REQUIERE SUPERVISIÓN DIRECTA, DEBIDO A QUE PRESENTA UNA ALTERACIÓN EN NIVELES DE ANSIEDAD LEVE-MODERADA.';
                } else if ($Items >= 25) {
                    echo '<p style="font-family:verdanab;margin-left:1em">PRESENTA ALTERACIÓN EN NIVELES DE ANSIEDAD, SU RESPUESTA FRENTE A ESTÍMULOS DISPLACENTEROS O CONFLICTIVOS ES DESPROPORCIONADA Y SU INTENSIDAD Y DURACIÓN EXCEDE LOS LÍMITES ACEPTABLES. PIERDE LA INTENCIÓN ADAPTATIVA GENERANDO MALESTAR EN EL PACIENTE, LO QUE IMPIDE QUE PUEDA DESEMPEÑARSE ADECUADAMENTE EN EL CARGO.  </p>'; 
                    $texto2 = 'PRESENTA ALTERACIÓN EN NIVELES DE ANSIEDAD, SU RESPUESTA FRENTE A ESTÍMULOS DISPLACENTEROS O CONFLICTIVOS ES DESPROPORCIONADA Y SU INTENSIDAD Y DURACIÓN EXCEDE LOS LÍMITES ACEPTABLES. PIERDE LA INTENCIÓN ADAPTATIVA GENERANDO MALESTAR EN EL PACIENTE, LO QUE IMPIDE QUE PUEDA DESEMPEÑARSE ADECUADAMENTE EN EL CARGO.';
                };
                ?><br><br><br><br>
            </div>
    </div>
</div>
<div id="prueba2" style="display: none"></div>
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
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
            var o = $(this).attr("data-easein");
            "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    $(document).ready(function (){
        $(".loader").fadeOut("slow");
    });
    
    var input = [<?php echo $Items ?>],
    data = [],
    categories = [];
    $.each(input, function(index, value){
    var color;
    if (value <= 5) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#00ff01'],[1, '#03ca04']]};
    else if (value >= 6 && value <= 14) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#00fdf4'],[1, '#02cbc4']]};
    else if (value >= 15 && value <= 24) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#eae616']]};
    else if (value >= 25) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fa0e0e'],[1, '#d60d0d']]};
    data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
    });
    
    Highcharts.chart('prueba', {
    chart: {
    type: 'bar',
    backgroundColor: false,
    height:100,
    padding:0,

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
        min:0, minRange:40, maxPadding:0, 
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
  
    Highcharts.chart('prueba2', {
    chart: {
    type: 'bar',
 
    height:60,
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
        min:0, minRange:40, maxPadding:0, 
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


   var doc = new jsPDF('p', 'pt', 'letter');
    
    var img = new Image();
    img.src = '../imagine/logo_v3.jpg';
    doc.addImage(img, 'png', 200, 300, 200, 200);
    
    var img = new Image();
    img.src = '../imagine/prueba_psicologica.JPG'
    doc.addImage(img, 'png', 110, 20, 410, 50)
    var columns = ['', '','','','',''];
    var data = [['Nombre y Apellidos:','<?php echo $Nombre ?>','Edad:','<?php echo $Edad ?> años','Sexo:','<?php echo $Genero ?>']];
    doc.autoTable(columns,data, {margin:{ top: 105, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
    columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 40}, 3: {fontStyle:'normal',columnWidth: 58, fillColor: [239, 237, 247]}, 4: {columnWidth: 40}, 5: {fontStyle:'normal',columnWidth: 18, fillColor: [239, 237, 247]}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    var columns = ['', '','','','',''];
    var data = [['Estado civil:','<?php echo $Estado ?>','Empresa:','<?php echo $Empresa.' - '.$Sede ?>','Cargo:','<?php echo $Cargo ?>']];
    doc.autoTable(columns,data, {margin:{ top: 125, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
    columnStyles: {0: {columnWidth: 70}, 1: {fontStyle:'normal',columnWidth: 80, fillColor: [239, 237, 247]}, 2: {columnWidth: 55}, 3: {fontStyle:'normal',columnWidth: 170, fillColor: [239, 237, 247]}, 4: {columnWidth: 45}, 5: {fontStyle:'normal',columnWidth: 120, fillColor: [239, 237, 247]}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    doc.setFont("helvetica");
    doc.setFontSize(16);
    doc.setFontType("normal");
    doc.setTextColor(102, 102, 102);
    doc.myText('PERFIL DEL EVALUADO',{align: "center"},0,110);
    doc.myText('RESULTADO',{align: "center"},0,220);
    doc.myText('VALORACIÓN PSICOLÓGICA',{align: "center"},0,430);
    var img = new Image()
    var imageData = $('#prueba2').highcharts().createCanvas();
    doc.addImage(imageData,'PNG', 147, 318, 316, 35);
    var columns = [''];
    var data = [['']];
    doc.autoTable(columns,data, {margin:{ top: 290, left: 142 },  
    styles: {font: 'times', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', valign:'middle', textColor:[255,255,255], lineWidth:0, lineColor:false, fillColor: false}, 
    drawRow:function(row,data) {row.height = 60;},
    columnStyles: {0: {columnWidth: 326, lineWidth:0.5, lineColor:[79, 84, 99]}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'times', fontStyle:'normal', halign: 'center', lineColor:[0,0,0], lineWidth:1, fillColor:false}});
    doc.setFontSize(10);
    doc.setFont("helvetica");
    doc.setTextColor(102, 102, 102);
    doc.text(150, 364, "0          5          10          15          20          25          30          35          40", {maxWidth: 500,align:'justify', lineHeightFactor: 1.5});
    doc.setFont("helvetica");
    doc.setFontSize(18);
    doc.setFontType("bold");
    doc.setTextColor(<?php echo $color ?>);
    doc.myText('<?php echo $texto ?>',{align: "center"},0,295);
    doc.setFontSize(11);
    doc.setTextColor(0, 0, 0);
    doc.setFontType("normal");
    doc.text(40,250, "<?php echo $texto1 ?>                                                                                                                                                                                                                                                                                                                                                                                             ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,460, "<?php echo $texto2 ?>                                                                                                                                                                                                                                                                                                                                                                                                             ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    
    doc.addPage();
    var img = new Image();
    img.src = '../imagine/logo_v3.jpg';
    doc.addImage(img, 'png', 200, 300, 200, 200);
    
    doc.setFont("helvetica");
    doc.setFontSize(16);
    doc.setFontType("normal");
    doc.setTextColor(102, 102, 102);
    doc.myText('RESPUESTA POR ÍTEMS',{align: "center"},0,50);
    
    doc.setFontSize(11);
    doc.setFontType("normal");
    doc.setTextColor(0, 0, 0);
    doc.text(40,80, "-¿Tiene dificultades de concentración o de memoria?   <?php echo $Text1 ?>                                                                                                                                                                                   ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,100, "-¿Tiene dificultad para conciliar el sueño?  <?php echo $Text2 ?>                                                                                                                                                                                             ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,120, "-¿Siente fatiga o cansancio excesivos?   <?php echo $Text3 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,140, "-¿Sufre de dolor de cabeza o espalda?   <?php echo $Text4 ?>                                                                                                                                                                                          ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,160, "-¿Ha sentido palpitaciones o mareos en los ultimos 3 meses?   <?php echo $Text5 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,180, "-¿Se Siente observado o perseguido?   <?php echo $Text6 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,200, "-¿Cuando tiene muchas cosas por hacer se desespera o huye de la responsabilidad?   <?php echo $Text7 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,220, "-¿Se le dificulta tomar decisiones o resolver un problema dificil?   <?php echo $Text8 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,240, "-¿Le atemoriza las reuniones sociales o hablar en público?   <?php echo $Text9 ?>                                                                                                                                                                                            ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,260, "-¿Le intimida que observen su trabajo o le supervisen lo que hace?   <?php echo $Text10 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,280, "-¿Suelo castigarse cuando comete un error, o le da muchas vueltas a ese error?   <?php echo $Text11 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,300, "-¿Le molesta que le repitan muchas veces las instrucciones o lo que tiene que hacer?   <?php echo $Text12 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,320, "-¿Se preocupa fácilmente?   <?php echo $Text13 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,340, "-¿Tiene cambios de humor frecuentes?   <?php echo $Text14 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,360, "-¿Se Siente irritado o de mal humor con frecuencia?   <?php echo $Text15 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,380, "-¿Está satisfecho de sus relaciones sociales?   <?php echo $Text16 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});                                                                                                                                                                                
    doc.text(40,400, "-Poco interés o placer en hacer cosas   <?php echo $Text17 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,420, "-Se ha sentido decaído (a), deprimido (a) o sin esperanzas   <?php echo $Text18 ?>                                                                                                                                                                                            ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,440, "-Ha tenido dificultad para quedarse o permanecer dormido(a), o ha dormido demasiado   <?php echo $Text19 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,460, "-Siente que ya no disfruta o no encuentra placer en las actividades como antes   <?php echo $Text20 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,480, "-Se ha sentido sin apetito o ha comido en exceso   <?php echo $Text21 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,500, "-Se ha sentido mal con usted mismo(a) – o que es un fracaso o que ha quedado mal con usted mismo(a) o con su familia   <?php echo $Text22 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,540, "-Siente limitaciones para comprender lo que lee en el periódico o ve en la televisión   <?php echo $Text23 ?>                                                                                                                                                                                            ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,560, "-Se ha movido o hablado tan lento que otras personas podrían haberlo notado o lo contrario – muy inquieto(a) o agitado(a) que ha estado moviéndose mucho más de lo normal   <?php echo $Text24 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,600, "-Pensamientos de que estaría mejor muerto(a) o delastimarse de alguna manera   <?php echo $Text25 ?>                                                                                                                                                                                            ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,620, "-¿Ha sufrido algún accidente, incidente o enfermedad por ocasión de su trabajo?   <?php echo $Text26 ?>                                                                                                                                                                                              ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,640, "-Alguna vez ha sufrido de una enfermedad psiquiátrica, como, por ejemplo, Depresión, Ansiedad, Problemas de sueño   <?php echo $Text27 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,680, "-Siento temor  acusado y persistente ante la situación o anticipación de encontrarme en una altura superior de1.5mts de altura    <?php echo $Text28 ?>                                                                                                                                                                                          ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,720, "-Considero que este temor es excesivo o irracional   <?php echo $Text29 ?>                                                                                                                                                                                                                                                               ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});

    doc.addPage(); 
    var img = new Image();
    img.src = '../imagine/logo_v3.jpg';
    doc.addImage(img, 'png', 200, 300, 200, 200);
    doc.text(40,100, "-Cuando estoy expuesto a una altura superior a 1.5metros, se produce en mí una respuesta de ansiedad (palpitaciones, sudoración fría, hiperventilación ,desmayo)   <?php echo $Text30 ?>                                                                                                                                                        ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,140, "-Prefiero evitar exponerme a las Alturas   <?php echo $Text31 ?>                                                                                                                                                                                          ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,160, "-Cuando tengo que exponerme a trabajar en alturas, lo soporto aunque me causa una intensa ansiedad o malestar   <?php echo $Text32 ?>                                                                                                                                                                                          ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,200, "-Con frecuencia me falta el aire cuando estoy rodeado de muchas personas o cuando estoy en lugares cerrados   <?php echo $Text33 ?>                                                                                                                                                                                          ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,240, "-Cuando espero a alguien en un lugar concurrido, se produce en mí una respuesta de ansiedad (palpitaciones, sudoración fría, hiperventilación ,desmayo)   <?php echo $Text34 ?>                                                                                                                                                                                          ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,280, "-Cuando estoy frente a lugares cerrados y oscuros o frente aguas profundas, se  produce en mí una respuesta de ansiedad (palpitaciones, sudoración fría, hiperventilación ,desmayo)   <?php echo $Text35 ?>                                                                                                                                                                                          ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,320, "-Cuando tengo que viajar en avión o en barco, se produce en mí una respuesta de ansiedad (palpitaciones, sudoración fría, hiperventilación ,desmayo)   <?php echo $Text36 ?>                                                                                                                                                                                          ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,360, "-Ante la consulta con el dentista, las inyeccciones las heridas o la sangre, se produce en mí una respuesta de ansiedad (palpitaciones, sudoración fría, hiperventilación ,desmayo)   <?php echo $Text37 ?>                                                                                                                                                                                          ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,400, "-Los comportamientos de evitación, la anticipación ansiosa o malestar provocados por esta situación temida, interfieren con mi rutina normal, mi desempeño laboral y/o social   <?php echo $Text38 ?>                                                                                                                                                                                          ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,440, "-Prefiero lugares donde pueda manejar la situación y no tenga que depender de terceros o de objetos en mi cuerpo   <?php echo $Text39 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    doc.text(40,480, "-En algún momento de mi vida he tenido algún diagnóstico de enfermedad mental (Trastorno obsesivo-compulsivo, trastorno por estrés postraumático, trastorno de ansiedad, fobia social.   <?php echo $Text40 ?>                                                                                                                                                                                           ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});

    
    const pageCount = doc.internal.getNumberOfPages();
    for(var i = 1; i <= pageCount; i++) {
    doc.setPage(i);
    doc.setTextColor(153, 153, 153);
    doc.setFontSize(9);
    doc.text('Pág. ' + String(i) + ' de ' + String(pageCount),550,30,null,null,"left");
    doc.myText('CEDISALUD IPS -PBX (574) 444 66 04 - MEDELLIN-APARTADÓ',{align: "center"},-200,780);
    }

   // doc.save('documento.pdf'); 

    var blob = doc.output('blob');
    var fd = new FormData();
    fd.append('data', blob);
    fd.append('Codigo', '<?php echo $Codigo ?>');
    fd.append('Nombre', '<?php echo $Nombre ?>');
    fd.append('Etiqueta', '<?php echo $Etiqueta ?>');
    fd.append('Empresa', '<?php echo $Empresa ?>');
    fd.append('Cargo', '<?php echo $Cargo ?>');
    fd.append('Sede', '<?php echo $Sede ?>');
    fd.append('Sede0', '<?php echo $Sede0 ?>');
    $.ajax({
       type: 'POST',
       url: '../PHPMailer/pdf1.php',
       data: fd,
       processData: false,
       contentType: false
    }).done(function(data) {
        window.location = "inicio_test" 
    });

</script>
</body>
</html>        