<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ISRA Hoja 2</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>style-responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>zabuto_calendar.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>
<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion5.inc.php';
    include_once 'app/redireccion.inc.php';
    if (!controlsesion5::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGOUT_TEST);}
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $Codigo2 = $_GET['id'];
    $Codigo = $_SESSION['Codigo'];
    $sql = "SELECT * FROM reg_psicologica WHERE Codigo = '$Codigo'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Nombre = $row['Nombre'];
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
        background: url('../imagine/logo0.jpg') 50% 50% no-repeat #ffffff;
        background-size: 24em 20em;
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
        border-color:#5f1a61;
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
    option.one {
        color: green!important;
    }
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        text-indent: 1px;
        text-overflow: '';
    }
    td select {
        font-family:verdanab;
        background:transparent!important;
        padding-left:1.1em;
    }
</style>
</head>
<body>
<?php
    if (controlsesion5::sesion_iniciada()) {
?> 
<div class="container-fluid" style="background-color:#f1f3f3;font-size:16px;font-family:Moriston;z-index:-1">
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
</div>
<div class="container-fluid" style="font-size:16px;font-family:verdana;padding:0">
    <div class=" col-md-6 col-md-offset-3"><br>
        <p style="text-align:center;font-family:Moristonb;font-size:20px;color:#5f1a61">CUESTIONARIO RESPUESTA FISIOLÓGICA</p><br>
        <form name="form1" id="form1">
        <table style="width:100%!important;font-size:16px;padding:0;margin:0">
            <!--<tr style="height:6em">
                <td></td>
                <td style="font-family:verdanab;color:#5f1a61;text-align:center">SITUACIONES</td>
                <td style="font-family:verdanab;color:#5f1a61;text-align:center" COLSPAN=10>RESPUESTAS</td>
                <td style="font-family:verdanab;color:#5f1a61;text-align:center">Obs.</td>
            </tr>-->
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">1.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Ante un examen en el que me juego mucho o si voy a ser entrevistado para un trabajo importante.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_1_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_1_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_1_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Mi cuerpo está en tensión.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_1_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_1_8" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento náuseas o mareo.</option>   
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_1_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_1_10" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo escalofríos y tirito aunque</option>   
                                <option disabled>no haga mucho frío.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu1"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu1" role="menu">
                        <textarea class="note" id="R2_1" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">2.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Cuando voy a llegar tarde a una cita.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R2_2_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento molestias en el estómago.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_2_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me sudan las manos u otra parte</option>
                                <option disabled>del cuerpo hasta en días fríos.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_2_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_2_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_2_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo palpitaciones, el corazón</option> 
                                <option disabled>me late muy deprisa.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_2_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_2_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu2"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu2" role="menu">
                        <textarea class="note" id="R2_2" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">3.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Cuando pienso en las muchas cosas que hay que hacer.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R2_3_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento molestias en el estómago.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_3_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me sudan las manos u otra parte</option>
                                <option disabled>del cuerpo hasta en días fríos.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_3_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_3_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_3_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo palpitaciones, el corazón</option> 
                                <option disabled>me late muy deprisa.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_3_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_3_8" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento náuseas o mareo.</option>   
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_3_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu3"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu3" role="menu">
                        <textarea class="note" id="R2_3" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">4.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">A la hora de tomar una decisión o resolver un problema difícil.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_4_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu4"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu4" role="menu">
                        <textarea class="note" id="R2_4" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">5.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">En mi trabajo o cuando estudio.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R2_5_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento molestias en el estómago.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_5_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_5_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo palpitaciones, el corazón</option> 
                                <option disabled>me late muy deprisa.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_5_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu5"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu5" role="menu">
                        <textarea class="note" id="R2_5" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">6.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Cuando espero a alguien en un lugar concurrido.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R2_6_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento molestias en el estómago.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_6_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Mi cuerpo está en tensión.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_6_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_6_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu6"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu6" role="menu">
                        <textarea class="note" id="R2_6" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">7.</span></td>
                <td COLSPAN=10 style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Si una persona del otro sexo esta muy cerca de mi, rozándome, o si estoy en una situacion sexual intima.</td> 
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_7_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_7_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo palpitaciones, el corazón</option> 
                                <option disabled>me late muy deprisa.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_7_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_7_8" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento náuseas o mareo.</option>   
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_7_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu7"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu7" role="menu">
                        <textarea class="note" id="R2_7" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">8.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Cuando alguien me molesta o cuando discuto.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R2_8_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento molestias en el estómago.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_8_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_8_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_8_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo palpitaciones, el corazón</option> 
                                <option disabled>me late muy deprisa.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_8_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_8_8" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento náuseas o mareo.</option>   
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_8_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu8"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu8" role="menu">
                        <textarea class="note" id="R2_8" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">9.</span></td>
                <td  COLSPAN=10 style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Cuando soy observado o mi trabajo es supervisado, cuando recibo críticas, o siempre que pueda ser evaluado negativamente.</td> 
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_9_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_9_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_9_8" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento náuseas o mareo.</option>   
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_9_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu9"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu9" role="menu">
                        <textarea class="note" id="R2_9" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">10.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Si tengo que hablar en público.</td>
            </tr>
            <tr style="height:8em">
               <td><select type="text" id="R2_10_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento molestias en el estómago.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_10_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_10_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_10_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo palpitaciones, el corazón</option> 
                                <option disabled>me late muy deprisa.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_10_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_10_8" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento náuseas o mareo.</option>   
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_10_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_10_10" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo escalofríos y tirito aunque</option>   
                                <option disabled>no haga mucho frío.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu10"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu10" role="menu">
                        <textarea class="note" id="R2_10" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">11.</span></td>
                <td COLSPAN=10 style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Cuando pienso en experiencias recientes en las que me he sentido ridículo, tímido, humillado, sólo o rechazado.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_11_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Mi cuerpo está en tensión.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_11_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo palpitaciones, el corazón</option> 
                                <option disabled>me late muy deprisa.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_11_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_11_10" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo escalofríos y tirito aunque</option>   
                                <option disabled>no haga mucho frío.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu11"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu11" role="menu">
                        <textarea class="note" id="R2_11" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">12.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Cuando tengo que viajar en avión o en barco.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_12_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me sudan las manos u otra parte</option>
                                <option disabled>del cuerpo hasta en días fríos.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_12_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_12_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_12_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo palpitaciones, el corazón</option> 
                                <option disabled>me late muy deprisa.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_12_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_12_8" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento náuseas o mareo.</option>   
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_12_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu12"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu12" role="menu">
                        <textarea class="note" id="R2_12" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">13.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Después de haber cometido algún error.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_13_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me sudan las manos u otra parte</option>
                                <option disabled>del cuerpo hasta en días fríos.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_13_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_13_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_13_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_13_10" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo escalofríos y tirito aunque</option>   
                                <option disabled>no haga mucho frío.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu13"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu13" role="menu">
                        <textarea class="note" id="R2_13" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">14.</span></td>
                <td COLSPAN=10 style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Ante la consulta con el dentista, las inyecciones, las heridas o la sangre.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_14_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_14_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_14_10" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo escalofríos y tirito aunque</option>   
                                <option disabled>no haga mucho frío.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu14"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu14" role="menu">
                        <textarea class="note" id="R2_14" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">15.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Cuando voy a una cita con una persona del otro sexo.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_15_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_15_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_15_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_15_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu15"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu15" role="menu">
                        <textarea class="note" id="R2_15" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">16.</span></td>
                <td COLSPAN=10 style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Cuando pienso en mi futuro o en dificultades y problemas futuros.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_16_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me sudan las manos u otra parte</option>
                                <option disabled>del cuerpo hasta en días fríos.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_16_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_16_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_16_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Mi cuerpo está en tensión.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_16_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_16_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu16"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu16" role="menu">
                        <textarea class="note" id="R2_16" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">17.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">En medio de multitudes o espacios cerrados.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R2_17_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento molestias en el estómago.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_17_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me sudan las manos u otra parte</option>
                                <option disabled>del cuerpo hasta en días fríos.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_17_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_17_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_17_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu17"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu17" role="menu">
                        <textarea class="note" id="R2_17" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">18.</span></td>
                <td COLSPAN=10 style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Cuando tengo que asistir a una reunión social o conocer gente nueva.</td> 
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R2_18_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento molestias en el estómago.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_18_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_18_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_18_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_18_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu18"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu18" role="menu">
                        <textarea class="note" id="R2_18" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">19.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">En lugares altos o ante aguas profundas.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_19_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_19_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo palpitaciones, el corazón</option> 
                                <option disabled>me late muy deprisa.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_19_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_19_8" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento náuseas o mareo.</option>   
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_19_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_19_10" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo escalofríos y tirito aunque</option>   
                                <option disabled>no haga mucho frío.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu19"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu19" role="menu">
                        <textarea class="note" id="R2_19" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">20.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Al observar escenas violentas.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R2_20_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento molestias en el estómago.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_20_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo palpitaciones, el corazón</option> 
                                <option disabled>me late muy deprisa.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_20_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                 <td><select type="text"  id="R2_20_8" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento náuseas o mareo.</option>   
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu20"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu20" role="menu">
                        <textarea class="note" id="R2_20" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">21.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Por nada en concreto.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R2_21_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento molestias en el estómago.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_21_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me tiemblan las manos o las piernas.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                 <td><select type="text"  id="R2_21_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_21_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo palpitaciones, el corazón</option> 
                                <option disabled>me late muy deprisa.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_21_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me falta el aire y mi respiración es</option>   
                                <option disabled>agitada.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_21_8" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Siento náuseas o mareo.</option>   
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R2_21_9" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Se me seca la boca y tengo</option>   
                                <option disabled>dificultades para tragar.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu21"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu21" role="menu">
                        <textarea class="note" id="R2_21" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">22.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">A la hora de dormir.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R2_22_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me duele la cabeza.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu22"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu22" role="menu">
                        <textarea class="note" id="R2_22" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>

            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">23.</span></td>
                <td COLSPAN=10 style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px;color:#5f1a61">Escriba una situacion en la que usted manifiesta frecuentemente alguna de estas respuestas o conductas</td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                        <textarea class="note" id="R2_23" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la situación aquí..."/></textarea>
                </td>
            </tr>
        </table>    
        <div style="text-align:right!important;margin-right:1em">
            <button id="boton" type="submit" name="enviar0" class="btn" style="font-size:16px;width:8em;border-radius:9px">Siguiente</button>
        </div><br>
        </form>
        <?php
        } else {
            redireccion :: redirigir(RUTA_LOGIN_ISRA);
        }
        ?>    
    </div>
</div> 
<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>                                                                  
<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.ui.min.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.flexslider.js"></script>
<script src="<?php echo RUTA_JS ?>main.js"></script>
<script>
    $('#R2_1_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_1_3 = $('#R2_1_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_1_3=" + R2_1_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_1_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_1_4 = $('#R2_1_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_1_4=" + R2_1_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_1_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_1_5 = $('#R2_1_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_1_5=" + R2_1_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_1_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_1_7 = $('#R2_1_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_1_7=" + R2_1_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_1_8').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_1_8 = $('#R2_1_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_1_8=" + R2_1_8 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_1_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_1_9 = $('#R2_1_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_1_9=" + R2_1_9 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_1_10').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_1_10 = $('#R2_1_10').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_1_10=" + R2_1_10 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_2_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_2_1 = $('#R2_2_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_2_1=" + R2_2_1 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_2_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_2_2 = $('#R2_2_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_2_2=" + R2_2_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_2_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_2_3 = $('#R2_2_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_2_3=" + R2_2_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_2_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_2_4 = $('#R2_2_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_2_4=" + R2_2_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_2_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_2_6 = $('#R2_2_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_2_6=" + R2_2_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_2_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_2_7 = $('#R2_2_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_2_7=" + R2_2_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_2_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_2_9 = $('#R2_2_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_2_9=" + R2_2_9 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_3_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_3_1 = $('#R2_3_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_3_1=" + R2_3_1 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_3_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_3_2 = $('#R2_3_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_3_2=" + R2_3_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_3_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_3_3 = $('#R2_3_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_3_3=" + R2_3_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_3_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_3_4 = $('#R2_3_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_3_4=" + R2_3_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_3_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_3_6 = $('#R2_3_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_3_6=" + R2_3_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_3_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_3_7 = $('#R2_3_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_3_7=" + R2_3_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_3_8').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_3_8 = $('#R2_3_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_3_8=" + R2_3_8 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_3_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_3_9 = $('#R2_3_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_3_9=" + R2_3_9 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_4_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_4_4 = $('#R2_4_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_4_4=" + R2_4_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_5_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_5_1 = $('#R2_5_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_5_1=" + R2_5_1 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_5_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_5_4 = $('#R2_5_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_5_4=" + R2_5_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_5_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_5_6 = $('#R2_5_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_5_6=" + R2_5_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_5_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_5_9 = $('#R2_5_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_5_9=" + R2_5_9 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_6_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_6_1 = $('#R2_6_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_6_1=" + R2_6_1 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_6_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_6_5 = $('#R2_6_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_6_5=" + R2_6_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_6_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_6_7 = $('#R2_6_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_6_7=" + R2_6_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_6_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_6_9 = $('#R2_6_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_6_9=" + R2_6_9 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_7_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_7_3 = $('#R2_7_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_7_3=" + R2_7_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_7_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_7_6 = $('#R2_7_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_7_6=" + R2_7_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_7_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_7_7  = $('#R2_7_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_7_7=" + R2_7_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_7_8').on('change', function() {
        console.log('prueba 2')
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_7_8 = $('#R2_7_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_7_8=" + R2_7_8 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_7_9').on('change', function() {
        console.log('preuba')
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_7_9 = $('#R2_7_9').val();
        console.log(R2_7_9)
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_7_9=" + R2_7_9 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_8_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_8_1 = $('#R2_8_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_8_1=" + R2_8_1 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_8_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_8_3 = $('#R2_8_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_8_3=" + R2_8_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_8_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_8_4 = $('#R2_8_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_8_4=" + R2_8_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_8_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_8_6 = $('#R2_8_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_8_6=" + R2_8_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_8_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_8_7 = $('#R2_8_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_8_7=" + R2_8_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_8_8').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_8_8 = $('#R2_8_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_8_8=" + R2_8_8 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_8_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_8_9 = $('#R2_8_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_8_9=" + R2_8_9 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_9_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_9_3 = $('#R2_9_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_9_3=" + R2_9_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_9_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_9_7 = $('#R2_9_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_9_7=" + R2_9_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_9_8').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_9_8 = $('#R2_9_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_9_8=" + R2_9_8 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_9_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_9_9 = $('#R2_9_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_9_9=" + R2_9_9 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_10_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_10_1 = $('#R2_10_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_10_1=" + R2_10_1 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_10_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_10_3 = $('#R2_10_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_10_3=" + R2_10_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_10_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_10_4 = $('#R2_10_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_10_4=" + R2_10_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_10_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_10_6 = $('#R2_10_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_10_6=" + R2_10_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_10_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_10_7 = $('#R2_10_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_10_7=" + R2_10_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_10_8').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_10_8 = $('#R2_10_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_10_8=" + R2_10_8 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_10_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_10_9 = $('#R2_10_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_10_9=" + R2_10_9 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_10_10').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_10_10 = $('#R2_10_10').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_10_10=" + R2_10_10 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_11_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_11_5 = $('#R2_11_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_11_5=" + R2_11_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_11_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_11_6 = $('#R2_11_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_11_6=" + R2_11_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_11_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_11_7 = $('#R2_11_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_11_7=" + R2_11_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_11_10').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_11_10 = $('#R2_11_10').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_11_10=" + R2_11_10 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_12_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_12_2 = $('#R2_12_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_12_2=" + R2_12_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_12_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_12_3 = $('#R2_12_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_12_3=" + R2_12_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_12_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_12_4 = $('#R2_12_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_12_4=" + R2_12_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_12_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_12_6 = $('#R2_12_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_12_6=" + R2_12_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_12_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_12_7 = $('#R2_12_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_12_7=" + R2_12_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_12_8').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_12_8 = $('#R2_12_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_12_8=" + R2_12_8 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_12_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_12_9 = $('#R2_12_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_12_9=" + R2_12_9 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_13_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_13_2 = $('#R2_13_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_13_2=" + R2_13_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_13_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_13_3 = $('#R2_13_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_13_3=" + R2_13_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_13_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_13_4 = $('#R2_13_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_13_4=" + R2_13_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_13_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_13_7 = $('#R2_13_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_13_7=" + R2_13_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R2_13_10').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_13_10  = $('#R2_13_10').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_13_10=" + R2_13_10 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_14_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_14_4 = $('#R2_14_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_14_4=" + R2_14_4 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_14_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_14_7 = $('#R2_14_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_14_7=" + R2_14_7 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_14_10').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_14_10 = $('#R2_14_10').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_14_10=" + R2_14_10 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_15_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_15_3 = $('#R2_15_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_15_3=" + R2_15_3 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_15_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_15_4 = $('#R2_15_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_15_4=" + R2_15_4 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_15_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_15_7 = $('#R2_15_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_15_7=" + R2_15_7 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_15_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_15_9 = $('#R2_15_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_15_9=" + R2_15_9 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_16_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_16_2 = $('#R2_16_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_16_2=" + R2_16_2 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_16_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_16_3 = $('#R2_16_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_16_3=" + R2_16_3 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_16_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_16_4 = $('#R2_16_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_16_4=" + R2_16_4 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_16_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_16_5 = $('#R2_16_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_16_5=" + R2_16_5 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_16_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_16_7 = $('#R2_16_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_16_7=" + R2_16_7 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_16_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_16_9 = $('#R2_16_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_16_9=" + R2_16_9 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_17_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_17_1 = $('#R2_17_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_17_1=" + R2_17_1 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_17_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_17_2 = $('#R2_17_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_17_2=" + R2_17_2 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_17_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_17_3 = $('#R2_17_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_17_3=" + R2_17_3 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_17_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_17_4 = $('#R2_17_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_17_4=" + R2_17_4 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_17_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_17_7 = $('#R2_17_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_17_7=" + R2_17_7 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_18_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_18_1 = $('#R2_18_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_18_1=" + R2_18_1 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_18_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_18_3 = $('#R2_18_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_18_3=" + R2_18_3 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_18_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_18_4 = $('#R2_18_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_18_4=" + R2_18_4 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_18_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_18_7 = $('#R2_18_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_18_7=" + R2_18_7 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_18_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_18_9 = $('#R2_18_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_18_9=" + R2_18_9 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_19_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_19_3 = $('#R2_19_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_19_3=" + R2_19_3 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_19_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_19_6 = $('#R2_19_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_19_6=" + R2_19_6 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_19_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_19_7 = $('#R2_19_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_19_7=" + R2_19_7 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_19_8').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_19_8 = $('#R2_19_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_19_8=" + R2_19_8 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_19_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_19_9 = $('#R2_19_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_19_9=" + R2_19_9 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_19_10').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_19_10 = $('#R2_19_10').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_19_10=" + R2_19_10 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_20_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_20_1 = $('#R2_20_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_20_1=" + R2_20_1 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_20_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_20_6 = $('#R2_20_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_20_6=" + R2_20_6 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_20_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_20_7 = $('#R2_20_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_20_7=" + R2_20_7 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_20_8').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_20_8 = $('#R2_20_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_20_8=" + R2_20_8 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_21_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_21_1 = $('#R2_21_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_21_1=" + R2_21_1 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_21_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_21_3 = $('#R2_21_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_21_3=" + R2_21_3 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_21_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_21_4 = $('#R2_21_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_21_4=" + R2_21_4 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_21_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_21_6 = $('#R2_21_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_21_6=" + R2_21_6 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_21_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_21_7 = $('#R2_21_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_21_7=" + R2_21_7 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_21_8').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_21_8 = $('#R2_21_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_21_8=" + R2_21_8 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_21_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_21_9 = $('#R2_21_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_21_9=" + R2_21_9 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_22_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_22_4 = $('#R2_22_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_22_4=" + R2_22_4 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
     $('#R2_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_1 = $('#R2_1').val();
        console.log(R2_1)
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_1=" + R2_1 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_2 = $('#R2_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_2=" + R2_2 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_3 = $('#R2_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_3=" + R2_3 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_4 = $('#R2_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_4=" + R2_4 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_5 = $('#R2_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_5=" + R2_5 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_6 = $('#R2_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_6=" + R2_6 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_7 = $('#R2_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_7=" + R2_7 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_8').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_8 = $('#R2_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_8=" + R2_8 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_9 = $('#R2_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_9=" + R2_9 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_10').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_10 = $('#R2_10').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_10=" + R2_10 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_11').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_11 = $('#R2_11').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_11=" + R2_11 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_12').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_12 = $('#R2_12').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_12=" + R2_12 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_13').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_13 = $('#R2_13').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_13=" + R2_13 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_14').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_14 = $('#R2_14').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_14=" + R2_14 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_15').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_15 = $('#R2_15').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_15=" + R2_15 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_16').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_16 = $('#R2_16').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_16=" + R2_16 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_17').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_17 = $('#R2_17').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_17=" + R2_17 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_18').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_18 = $('#R2_18').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_18=" + R2_18 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_19').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_19 = $('#R2_19').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_19=" + R2_19 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_20').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_20 = $('#R2_20').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_20=" + R2_20 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_21').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_21 = $('#R2_21').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_21=" + R2_21 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_22').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_22 = $('#R2_22').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_22=" + R2_22 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R2_23').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R2_23 = $('#R2_23').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R2_23=" + R2_23 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $(".modal").each(function (l) {
        $(this).on("show.bs.modal", function (l) {
            var o = $(this).attr("data-easein");
            "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    $("#form1").submit(function(event) {
        event.preventDefault();
        if( $('#R2_1_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 1.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_1_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 1.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_1_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 1.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_1_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 1.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_1_8').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 1.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_1_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 1.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_1_10').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 1.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_2_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 2.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_2_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 2.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_2_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 2.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_2_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 2.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_2_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 2.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_2_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 2.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_2_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 2.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_3_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_3_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_3_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_3_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_3_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_3_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_3_8').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_3_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_4_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 4.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_5_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 5.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_5_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 5.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_5_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 5.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_5_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 5.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_6_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 6.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_6_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 6.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_6_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 6.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_6_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 6.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_7_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 7.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_7_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 7.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_7_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 7.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_7_8').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 7.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_7_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 7.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_8_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 8.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_8_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 8.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_8_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 8.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_8_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 8.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_8_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 8.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_8_8').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 8.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_8_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 8.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_9_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 9.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_9_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 9.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_9_8').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 9.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_9_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 9.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_10_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 10.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_10_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 10.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_10_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 10.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_10_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 10.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_10_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 10.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_10_8').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 10.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_10_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 10.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_10_10').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 10.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_11_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 11.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_11_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 11.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_11_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 11.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_11_10').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 11.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_12_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 12.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_12_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 12.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_12_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 12.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_12_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 12.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_12_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 12.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_12_8').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 12.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_12_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 12.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_13_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 13.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_13_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 13.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_13_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 13.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_13_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 13.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_13_10').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 13.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_14_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 14.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_14_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 14.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_14_10').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 14.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_15_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 15.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_15_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 15.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_15_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 15.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_15_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 15.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_16_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 16.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_16_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 16.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_16_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 16.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_16_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 16.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_16_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 16.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_16_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 16.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_17_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 17.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_17_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 17.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_17_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 17.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_17_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 17.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_17_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 17.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_18_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 18.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_18_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 18.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_18_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 18.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_18_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 18.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_18_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 18.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_19_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 19.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_19_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 19.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_19_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 19.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_19_8').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 19.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_19_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 19.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_19_10').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 19.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_20_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 20.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_20_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 20.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_20_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 20.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_20_8').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 20.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_21_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 21.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_21_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 21.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_21_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 21.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_21_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 21.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_21_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 21.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_21_8').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 21.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_21_9').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 21.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R2_22_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 22.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        
        if($('#R2_1_3').val() != '' && $('#R2_1_4').val() != '' && $('#R2_1_5').val() != '' && $('#R2_1_7').val() != '' && $('#R2_1_8').val() != '' && $('#R2_1_9').val() != '' && $('#R2_1_10').val() != '' && $('#R2_2_1').val() != '' && $('#R2_2_2').val() != '' && $('#R2_2_3').val() != '' && $('#R2_2_4').val() != '' && $('#R2_2_6').val() != '' && $('#R2_2_7').val() != '' && $('#R2_2_9').val() != '' && $('#R2_3_1').val() != '' && $('#R2_3_2').val() != '' && $('#R2_3_3').val() != '' && $('#R2_3_4').val() != '' && $('#R2_3_6').val() != '' && $('#R2_3_7').val() != '' && $('#R2_3_8').val() != '' && $('#R2_3_9').val() != '' && $('#R2_4_4').val() != '' && $('#R2_5_1').val() != '' && $('#R2_5_4').val() != '' && $('#R2_5_6').val() != '' && $('#R2_5_9').val() != '' && $('#R2_6_1').val() != '' && $('#R2_6_5').val() != '' && $('#R2_6_7').val() != '' && $('#R2_6_9').val() != '' && $('#R2_7_3').val() != '' && $('#R2_7_6').val() != '' && $('#R2_7_7').val() != '' && $('#R2_7_8').val() != '' && $('#R2_7_9').val() != '' && $('#R2_8_1').val() != '' && $('#R2_8_3').val() != '' && $('#R2_8_4').val() != '' && $('#R2_8_6').val() != '' && $('#R2_8_7').val() != '' && $('#R2_8_8').val() != '' && $('#R2_8_9').val() != '' && $('#R2_9_3').val() != '' && $('#R2_9_7').val() != '' && $('#').val() != '' && $('#R2_9_8').val() != '' && $('#R2_9_9').val() != '' && $('#R2_10_1').val() != '' && $('#R2_10_3').val() != '' && $('#R2_10_4').val() != '' && $('#R2_10_6').val() != '' && $('#R2_10_7').val() != '' && $('#R2_10_8').val() != '' && $('#R2_10_9').val() != '' && $('#R2_10_10').val() != '' && $('#R2_11_5').val() != '' && $('#R2_11_6').val() != '' && $('#R2_11_7').val() != '' && $('#R2_11_10').val() != '' && $('#R2_12_2').val() != '' && $('#R2_12_3').val() != '' && $('#R2_12_4').val() != '' && $('#R2_12_6').val() != '' && $('#R2_12_7').val() != '' && $('#R2_12_8').val() != '' && $('#R2_12_9').val() != '' && $('#R2_13_2').val() != '' && $('#R2_13_3').val() != '' && $('#R2_13_4').val() != '' && $('#R2_13_7').val() != '' && $('#R2_13_10').val() != '' && $('#R2_14_4').val() != '' && $('#R2_14_7').val() != '' && $('#R2_14_10').val() != '' && $('#R2_15_3').val() != '' && $('#R2_15_4').val() != '' && $('#R2_15_7').val() != '' && $('#R2_15_9').val() != '' && $('#R2_16_2').val() != '' && $('#R2_16_3').val() != '' && $('#R2_16_4').val() != '' && $('#R2_16_5').val() != '' && $('#R2_16_7').val() != '' && $('#R2_16_9').val() != '' && $('#R2_17_1').val() != '' && $('#R2_17_2').val() != '' && $('#R2_17_3').val() != '' && $('#R2_17_4').val() != '' && $('#R2_17_7').val() != '' && $('#R2_18_1').val() != '' && $('#R2_18_3').val() != '' && $('#R2_18_4').val() != '' && $('#R2_18_7').val() != '' && $('#R2_18_9').val() != '' && $('#R2_19_3').val() != '' && $('#R2_19_6').val() != '' && $('#R2_19_7').val() != '' && $('#R2_19_8').val() != '' && $('#R2_19_9').val() != '' && $('#R2_19_10').val() != '' && $('#R2_20_1').val() != '' && $('#R2_20_6').val() != '' && $('#R2_20_7').val() != '' && $('#R2_20_8').val() != '' && $('#R2_21_1').val() != '' && $('#R2_21_3').val() != '' && $('#R2_21_4').val() != '' && $('#R2_21_6').val() != '' && $('#R2_21_7').val() != '' && $('#R2_21_8').val() != '' && $('#R2_21_9').val() != '' && $('#R2_22_4').val() != '' ) {
            window.location = "../isra_3?id=<?php echo $Codigo2 ?>"
        }

     })    
</script>
</body>
</html>
                                                                   