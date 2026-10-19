<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ISRA Hoja 3</title>
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
        <p style="text-align:center;font-family:Moristonb;font-size:20px;color:#5f1a61">CUESTIONARIO RESPUESTA MOTRÍZ</p><br>
        <form name="form1" id="form1">
        <table style="width:100%!important;font-size:16px;padding:0;margin:0">
            <!--<tr style="height:6em">
                <td style="width:5%"></td>
                <td style="font-family:verdanab;color:#5f1a61;text-align:center;width:38%">SITUACIONES</td>
                <td style="font-family:verdanab;color:#5f1a61;text-align:center;width:38%" COLSPAN=7>RESPUESTAS</td>
                <td style="font-family:verdanab;color:#5f1a61;text-align:center;width:7%">Obs.</td>
            </tr>-->
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">1.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Ante un examen en el que me juego mucho o si voy a ser entrevistado para un trabajo importante.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_1_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Realizo movimientos repetitivos</option>
                                <option disabled>con alguna parte de mi cuerpo</option>
                                <option disabled>(rascarme, tocarme, movimientos</option>
                                <option disabled>rítmicos con pies y manos, etc.)</option>
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
                <td><select type="text"  id="R3_1_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me muevo o hago cosas sin una</option>
                                <option disabled>finalidad concreta.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_1_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Quedo paralizado o mis movimientos</option> 
                                <option disabled>son torpes.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu1"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu1" role="menu">
                        <textarea class="note" id="R3_1" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">2.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Cuando voy a llegar tarde a una cita.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_2_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Realizo movimientos repetitivos</option>
                                <option disabled>con alguna parte de mi cuerpo</option>
                                <option disabled>(rascarme, tocarme, movimientos</option>
                                <option disabled>rítmicos con pies y manos, etc.)</option>
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
                <td><select type="text"  id="R3_2_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me muevo o hago cosas sin una</option>
                                <option disabled>finalidad concreta.</option>
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
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu2"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu2" role="menu">
                        <textarea class="note" id="R3_2" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">3.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Cuando pienso en las muchas cosas que hay que hacer.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R3_3_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Lloro con facilidad.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_3_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Realizo movimientos repetitivos</option>
                                <option disabled>con alguna parte de mi cuerpo</option>
                                <option disabled>(rascarme, tocarme, movimientos</option>
                                <option disabled>rítmicos con pies y manos, etc.)</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_3_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_3_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me muevo o hago cosas sin una</option>
                                <option disabled>finalidad concreta.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_3_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Quedo paralizado o mis movimientos</option> 
                                <option disabled>son torpes.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_3_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tartamudeo o tengo otras dificultades</option>   
                                <option disabled>de expresión verbal.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu3"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu3" role="menu">
                        <textarea class="note" id="R3_3" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">4.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">A la hora de tomar una decisión o resolver un problema difícil.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_4_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_4_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me muevo o hago cosas sin una</option>
                                <option disabled>finalidad concreta.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_4_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tartamudeo o tengo otras dificultades</option>   
                                <option disabled>de expresión verbal.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu4"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu4" role="menu">
                        <textarea class="note" id="R3_4" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">5.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">En mi trabajo o cuando estudio.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R3_5_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Lloro con facilidad.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_5_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
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
                <td><select type="text"  id="R3_5_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Quedo paralizado o mis movimientos</option> 
                                <option disabled>son torpes.</option> 
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
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu5" role="menu">
                        <textarea class="note" id="R3_5" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">6.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Cuando espero a alguien en un lugar concurrido.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_6_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_6_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Trato de evitar o rehuir.</option>
                                <option disabled>la situación.</option>
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
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu6"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu6" role="menu">
                        <textarea class="note" id="R3_6" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>

            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">7.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Si una persona del otro sexo está muy cerca de mí, rozándome, o si estoy en una situación sexual íntima.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_7_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
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
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu7"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu7" role="menu">
                        <textarea class="note" id="R3_7" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">8.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Cuando alguien me molesta o cuando discuto.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_8_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Realizo movimientos repetitivos</option>
                                <option disabled>con alguna parte de mi cuerpo</option>
                                <option disabled>(rascarme, tocarme, movimientos</option>
                                <option disabled>rítmicos con pies y manos, etc.)</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_8_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
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
                <td><select type="text"  id="R3_8_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Quedo paralizado o mis movimientos</option> 
                                <option disabled>son torpes.</option> 
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
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu8" role="menu">
                        <textarea class="note" id="R3_8" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">9.</span></td>
                <td  COLSPAN=10 style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Cuando soy observado o mi trabajo es supervisado, cuando recibo críticas, o siempre que pueda ser evaluado negativamente.</td> 
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_9_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Realizo movimientos repetitivos</option>
                                <option disabled>con alguna parte de mi cuerpo</option>
                                <option disabled>(rascarme, tocarme, movimientos</option>
                                <option disabled>rítmicos con pies y manos, etc.)</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_9_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
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
                <td><select type="text"  id="R3_9_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Quedo paralizado o mis movimientos</option> 
                                <option disabled>son torpes.</option> 
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
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu9" role="menu">
                        <textarea class="note" id="R3_9" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">10.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Si tengo que hablar en público.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_10_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
                                <option selected></option>
                                <option value="0" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
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
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu10"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu10" role="menu">
                        <textarea class="note" id="R3_10" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">11.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Cuando pienso en experiencias recientes en las que me he sentido ridículo, tímido, humillado, sólo o rechazado.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_11_2"  style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Realizo movimientos repetitivos</option>
                                <option disabled>con alguna parte de mi cuerpo</option>
                                <option disabled>(rascarme, tocarme, movimientos</option>
                                <option disabled>rítmicos con pies y manos, etc.)</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_11_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_11_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me muevo o hago cosas sin una</option>
                                <option disabled>finalidad concreta.</option>
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
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu11"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu11" role="menu">
                        <textarea class="note" id="R3_11" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">12.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Cuando tengo que viajar en avión o en barco.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_12_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Realizo movimientos repetitivos</option>
                                <option disabled>con alguna parte de mi cuerpo</option>
                                <option disabled>(rascarme, tocarme, movimientos</option>
                                <option disabled>rítmicos con pies y manos, etc.)</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_12_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Trato de evitar o rehuir.</option>
                                <option disabled>la situación.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_12_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me muevo o hago cosas sin una</option>
                                <option disabled>finalidad concreta.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_12_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Quedo paralizado o mis movimientos</option> 
                                <option disabled>son torpes.</option> 
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
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu12" role="menu">
                        <textarea class="note" id="R3_12" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">13.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Después de haber cometido algún error.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R3_13_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Lloro con facilidad.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_13_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
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
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu13"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu13" role="menu">
                        <textarea class="note" id="R3_13" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>

            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">14.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Ante la consulta con el dentista, las inyecciones, las heridas o la sangre.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_14_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me muevo o hago cosas sin una</option>
                                <option disabled>finalidad concreta.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_14_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tartamudeo o tengo otras dificultades</option>   
                                <option disabled>de expresión verbal.</option>  
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
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu14" role="menu">
                        <textarea class="note" id="R3_14" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">15.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Cuando voy a una cita con una persona del otro sexo.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_15_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Trato de evitar o rehuir.</option>
                                <option disabled>la situación.</option>
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
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu15"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu15" role="menu">
                        <textarea class="note" id="R3_15" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">16.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Cuando pienso en mi futuro o dificultades y problemas futuros.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_16_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Realizo movimientos repetitivos</option>
                                <option disabled>con alguna parte de mi cuerpo</option>
                                <option disabled>(rascarme, tocarme, movimientos</option>
                                <option disabled>rítmicos con pies y manos, etc.)</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_16_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
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
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu16"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu16" role="menu">
                        <textarea class="note" id="R3_16" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">17.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">En medio de multitudes o en espacios cerrados.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R3_17_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Lloro con facilidad.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_17_2" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Realizo movimientos repetitivos</option>
                                <option disabled>con alguna parte de mi cuerpo</option>
                                <option disabled>(rascarme, tocarme, movimientos</option>
                                <option disabled>rítmicos con pies y manos, etc.)</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_17_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_17_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me muevo o hago cosas sin una</option>
                                <option disabled>finalidad concreta.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_17_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Quedo paralizado o mis movimientos</option> 
                                <option disabled>son torpes.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu17"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu17" role="menu">
                        <textarea class="note" id="R3_17" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">18.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Cuando tengo que asistir a una reunión social o conocer gente nueva.</td>
            </tr>
            <tr style="height:8em">
                <td><select type="text"   id="R3_18_1" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Lloro con facilidad.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_18_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_18_4" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Trato de evitar o rehuir.</option>
                                <option disabled>la situación.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_18_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Quedo paralizado o mis movimientos</option> 
                                <option disabled>son torpes.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><select type="text"  id="R3_18_7" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tartamudeo o tengo otras dificultades</option>   
                                <option disabled>de expresión verbal.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu18"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu18" role="menu">
                        <textarea class="note" id="R3_18" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">19.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">En lugares altos o ante aguas profundas.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_19_6" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Quedo paralizado o mis movimientos</option> 
                                <option disabled>son torpes.</option> 
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu" role="menu">
                        <textarea class="note" id="R3_19" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">20.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Al observar escenas violentas.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_20_3" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Fumo, como o bebo demasiado.</option>
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_20_5" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me muevo o hago cosas sin una</option>
                                <option disabled>finalidad concreta.</option>
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
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu20" role="menu">
                        <textarea class="note" id="R3_20" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">21.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Por nada en concreto.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_21_7"  style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tartamudeo o tengo otras dificultades</option>   
                                <option disabled>de expresión verbal.</option>  
                                <option selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu21"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu21" role="menu">
                        <textarea class="note" id="R3_21" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
            <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">22.</span></td>
                <td colspan="10" style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">A la hora de dormir.</td>
            </tr>
            <tr style="height:8em">
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                <td><select type="text"  id="R3_22_5"  style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Me muevo o hago cosas sin una</option>
                                <option disabled>finalidad concreta.</option>
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
                <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu22"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=7 style="padding-top:1em!important"> 
                    <ul class="nav collapse" id="submenu22" role="menu">
                        <textarea class="note" id="R3_22" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la observación aquí..."/></textarea>
                    </ul>
                </td>
            </tr>
            
             <tr>
                <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">23.</span></td>
                <td COLSPAN=10 style="font-family:verdanab;text-align:left;width:60%;padding-left:10px;padding-right:10px">Escriba una situacion en la que usted manifiesta frecuentemente alguna de estas respuestas o conductas</td>
            </tr>
            <tr style="padding-bottom:30px!important">
                <td COLSPAN=10 style="padding-top:1em!important"> 
                        <textarea class="note" id="R3_23" rows="1" value="" style="width:100%;border-radius:0;border-color:#5f1a61;height:3em;padding:10px;margin-bottom:30px!important" placeholder="Escriba la situación aquí..."/></textarea>
                </td>
            </tr>
        </table> 
        <div style="text-align:right!important;margin-right:1em">
            <button id="boton" type="submit" name="enviar0" class="btn" style="font-size:16px;width:8em;border-radius:9px">Finalizar</button>
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
    $('#R3_1_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_1_2 = $('#R3_1_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_1_2=" + R3_1_2 + "&Codigo=" + Codigo,
            success: function (response) {
                console.log('prueba 3')
            },   
        });
    });
    $('#R3_1_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_1_5 = $('#R3_1_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_1_5=" + R3_1_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_1_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_1_6 = $('#R3_1_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_1_6=" + R3_1_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_2_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_2_2 = $('#R3_2_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_2_2=" + R3_2_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_2_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_2_5 = $('#R3_2_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_2_5=" + R3_2_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_3_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_3_1 = $('#R3_3_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_3_1=" + R3_3_1 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_3_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_3_2 = $('#R3_3_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_3_2=" + R3_3_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_3_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_3_3 = $('#R3_3_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_3_3=" + R3_3_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_3_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_3_5 = $('#R3_3_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_3_5=" + R3_3_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_3_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_3_6 = $('#R3_3_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_3_6=" + R3_3_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_3_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_3_7 = $('#R3_3_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_3_7=" + R3_3_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_4_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_4_3 = $('#R3_4_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_4_3=" + R3_4_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_4_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_4_5 = $('#R3_4_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_4_5=" + R3_4_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_4_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_4_7 = $('#R3_4_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_4_7=" + R3_4_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_5_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_5_1 = $('#R3_5_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_5_1=" + R3_5_1 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_5_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_5_3 = $('#R3_5_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_5_3=" + R3_5_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_5_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_5_6 = $('#R3_5_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_5_6=" + R3_5_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_6_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_6_3 = $('#R3_6_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_6_3=" + R3_6_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_6_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_6_4 = $('#R3_6_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_6_4=" + R3_6_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_7_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_7_3 = $('#R3_7_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_7_3=" + R3_7_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_8_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_8_2 = $('#R3_8_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_8_2=" + R3_8_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_8_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_8_3 = $('#R3_8_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_8_3=" + R3_8_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_8_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_8_6 = $('#R3_8_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_8_6=" + R3_8_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_9_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_9_2 = $('#R3_9_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_9_2=" + R3_9_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_9_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_9_3 = $('#R3_9_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_9_3=" + R3_9_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_9_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_9_6 = $('#R3_9_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_9_6=" + R3_9_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_10_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_10_3 = $('#R3_10_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_10_3=" + R3_10_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_11_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_11_2 = $('#R3_11_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_11_2=" + R3_11_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_11_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_11_3 = $('#R3_11_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_11_3=" + R3_11_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    
    $('#R3_11_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_11_5 = $('#R3_11_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_11_5=" + R3_11_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_12_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_12_2 = $('#R3_12_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_12_2=" + R3_12_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    
    $('#R3_12_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_12_4 = $('#R3_12_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_12_4=" + R3_12_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_12_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_12_5 = $('#R3_12_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_12_5=" + R3_12_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    
    $('#R3_12_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_12_6 = $('#R3_12_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_12_6=" + R3_12_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_13_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_13_1 = $('#R3_13_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_13_1=" + R3_13_1 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    
    $('#R3_13_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_13_3 = $('#R3_13_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_13_3=" + R3_13_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_14_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_14_5 = $('#R3_14_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_14_5=" + R3_14_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    
    $('#R3_14_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_14_7 = $('#R3_14_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_14_7=" + R3_14_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_15_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_15_4 = $('#R3_15_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_15_4=" + R3_15_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    
    $('#R3_16_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_16_2 = $('#R3_16_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_16_2=" + R3_16_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_16_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_16_3 = $('#R3_16_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_16_3=" + R3_16_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    
    $('#R3_17_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_17_1 = $('#R3_17_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_17_1=" + R3_17_1 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_17_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_17_2 = $('#R3_17_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_17_2=" + R3_17_2 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    
    $('#R3_17_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_17_3 = $('#R3_17_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_17_3=" + R3_17_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_17_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_17_5 = $('#R3_17_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_17_5=" + R3_17_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    
    $('#R3_17_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_17_6 = $('#R3_17_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_17_6=" + R3_17_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_18_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_18_1 = $('#R3_18_1').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_18_1=" + R3_18_1 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_18_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_18_3 = $('#R3_18_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_18_3=" + R3_18_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_18_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_18_4 = $('#R3_18_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_18_4=" + R3_18_4 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    
    $('#R3_18_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_18_6 = $('#R3_18_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_18_6=" + R3_18_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_18_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_18_7 = $('#R3_18_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_18_7=" + R3_18_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    
    $('#R3_19_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_19_6 = $('#R3_19_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_19_6=" + R3_19_6 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_20_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_20_3 = $('#R3_20_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_20_3=" + R3_20_3 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_20_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_20_5 = $('#R3_20_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_20_5=" + R3_20_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_21_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_21_7 = $('#R3_21_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_21_7=" + R3_21_7 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_22_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_22_5 = $('#R3_22_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_22_5=" + R3_22_5 + "&Codigo=" + Codigo,
            success: function (response) {
                
            },   
        });
    });
    $('#R3_23').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_23 = $('#R3_23').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_23=" + R3_23 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
     $('#R3_1').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_1 = $('#R3_1').val();
        console.log(R3_1)
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_1=" + R3_1 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_2').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_2 = $('#R3_2').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_2=" + R3_2 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_3').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_3 = $('#R3_3').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_3=" + R3_3 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_4').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_4 = $('#R3_4').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_4=" + R3_4 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_5').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_5 = $('#R3_5').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_5=" + R3_5 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_6').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_6 = $('#R3_6').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_6=" + R3_6 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_7').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_7 = $('#R3_7').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_7=" + R3_7 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_8').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_8 = $('#R3_8').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_8=" + R3_8 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_9').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_9 = $('#R3_9').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_9=" + R3_9 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_10').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_10 = $('#R3_10').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_10=" + R3_10 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_11').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_11 = $('#R3_11').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_11=" + R3_11 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_12').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_12 = $('#R3_12').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_12=" + R3_12 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_13').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_13 = $('#R3_13').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_13=" + R3_13 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_14').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_14 = $('#R3_14').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_14=" + R3_14 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_15').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_15 = $('#R3_15').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_15=" + R3_15 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_16').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_16 = $('#R3_16').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_16=" + R3_16 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_17').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_17 = $('#R3_17').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_17=" + R3_17 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_18').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_18 = $('#R3_18').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_18=" + R3_18 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_19').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_19 = $('#R3_19').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_19=" + R3_19 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_20').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_20 = $('#R3_20').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_20=" + R3_20 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_21').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_21 = $('#R3_21').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_21=" + R3_21 + "&Codigo=" + Codigo,
            success: function (response) {
            },   
        });
    });
    $('#R3_22').on('change', function() {
        var Codigo = '<?php echo $Codigo2 ?>';
        var R3_22 = $('#R3_22').val();
        $.ajax({
            type: "post",
            url: "../isra_puntuaciones.php",
            data: "R3_22=" + R3_22 + "&Codigo=" + Codigo,
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
        if( $('#R3_1_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 1.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_1_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 1.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_1_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 1.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_2_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 2.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_2_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 2.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_3_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_3_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_3_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_3_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_3_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_3_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 3.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_4_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 4.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_4_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 4.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_4_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 4.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_5_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 5.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_5_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 5.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_5_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 5.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_6_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 6.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_6_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 7.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_7_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 7.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_8_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 8.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_8_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 8.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_8_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 8.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_9_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 9.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_9_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 9.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_9_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 9.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_10_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 10.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_11_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 11.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_11_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 11.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_11_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 11.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_12_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 12.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_12_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 12.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_12_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 12.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_12_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 12.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_13_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 13.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_13_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 13.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_14_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 14.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_14_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 14.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_15_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 15.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_16_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 16.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_16_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 16.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_17_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 17.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_17_2').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 17.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_17_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 17.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_17_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 17.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_17_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 17.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_18_1').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 18.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_18_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 18.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_18_4').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 18.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_18_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 18.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_18_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 18.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_19_6').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 19.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_20_3').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 20.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_20_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 20.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_21_7').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 21.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        if( $('#R3_22_5').val() != '' ){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la situación 22.",
            type: "warning",
            confirmButtonColor: '#5f1a61',
            confirmButtonText: 'Cerrar',
        });}
        
        if($('#R3_1_2').val() != '' &&  $('#R3_1_5').val() != '' &&  $('#R3_1_6').val() != '' &&  $('#R3_2_2').val() != '' &&  $('#R3_2_5').val() != '' &&  $('#R3_3_1').val() != '' &&  $('#R3_3_2').val() != '' &&  $('#R3_3_3').val() != '' &&  $('#R3_3_5').val() != '' &&  $('#R3_3_6').val() != '' &&  $('#R3_3_7').val() != '' &&  $('#R3_4_3').val() != '' &&  $('#R3_4_5').val() != '' &&  $('#R3_4_7').val() != '' &&  $('#R3_5_1').val() != '' &&  $('#R3_5_3').val() != '' &&  $('#R3_5_6').val() != '' &&  $('#R3_6_3').val() != '' &&  $('#R3_6_4').val() != '' &&  $('#R3_7_3').val() != '' &&  $('#R3_8_2').val() != '' &&  $('#R3_8_3').val() != '' &&  $('#R3_8_6').val() != '' &&  $('#R3_9_2').val() != '' &&  $('#R3_9_3').val() != '' &&  $('#R3_9_6').val() != '' &&  $('#R3_10_3').val() != '' &&  $('#R3_11_2').val() != '' &&  $('#R3_11_3').val() != '' &&  $('#R3_11_5').val() != '' &&  $('#R3_12_2').val() != '' &&  $('#R3_12_4').val() != '' &&  $('#R3_12_5').val() != '' &&  $('#R3_12_6').val() != '' &&  $('#R3_13_1').val() != '' &&  $('#R3_13_3').val() != '' &&  $('#R3_14_5').val() != '' &&  $('#R3_14_7').val() != '' &&  $('#R3_15_4').val() != '' &&  $('#R3_16_2').val() != '' &&  $('#R3_16_3').val() != '' && $('#R3_17_1').val() != '' && $('#R3_17_2').val() != '' && $('#R3_17_3').val() != '' && $('#R3_17_5').val() != '' && $('#R3_17_6').val() != '' && $('#R3_18_1').val() != '' && $('#R3_18_3').val() != '' && $('#R3_18_4').val() != '' && $('#R3_18_6').val() != '' && $('#R3_18_7').val() != '' && $('#R3_19_6').val() != '' && $('#R3_20_3').val() != '' && $('#R3_20_5').val() != '' && $('#R3_21_7').val() != '' && $('#R3_22_5').val() != '') {
            window.location = "https://www.cedisalud.com.co/resultado-isra?id=<?php echo $Codigo2 ?>"
        }

    })    
</script>
</body>
</html>
                                                                   