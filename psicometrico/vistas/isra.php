<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio ISRA</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>style-responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>zabuto_calendar.css" rel="stylesheet">
<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion5.inc.php';
    include_once 'app/redireccion.inc.php';
    if (!controlsesion5::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGOUT_ISRA);}
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
    #panel0 {
        background-color:#f3f8fb;
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
            <a href=<?php echo RUTA_LOGOUT_ISRA ?>>
                <i class="fa fa-share-square-o" aria-hidden="true"></i> Cerrar sesión</a>
        </li>
</div>
<div class="container-fluid" style="font-size:16px;font-family:verdana;padding:0">
    <div class=" col-md-8 col-md-offset-2">  
        <div class="row" style="padding:1em"><br>
            <p style="color:#a69dc8;font-family:MyriadProB;letter-spacing:2px;font-size:60px;text-shadow: 0.1em 0.1em 0.05em #333;text-align:center!important">ISRA</p>
            <div><br>
                <p>En las páginas siguientes encontrará una serie de frases que presentan <span style="color:#006699">situaciones</span> en que usted podría encontrarse y otras que se refieren a <span style="color:#006699">respuestas</span> que usted podría dar ante esas situaciones o reacciones que le producirían.</p><br>
                <!--<p>Las situaciones aparecen numeradas en la parte izquierda de la página y las respuestas posibles se presentan cuando se da clic en los cuadros blancos.</p><br>-->
                <p><table>
                    <tr>
                        <td style="width:47%;text-align:left">Su tarea consiste en valorar la frecuencia con la que se da en usted cada respuesta o reacción que está considerando, según la siguiente escala:</td>
                        <td style="width:14%"><img src="https://www.cedisalud.com.co/imagine/flecha.png" style="width:60%"></td>
                        <td style="width:47%;text-align:left">
                            <p><span style=";font-family:verdanab;font-size:18px">0</span> Casi nunca</p>
                            <p><span style=";font-family:verdanab;font-size:18px">1</span> Pocas veces</p>
                            <p><span style=";font-family:verdanab;font-size:18px">2</span> Unas veces sí, otras veces no</p>
                            <p><span style=";font-family:verdanab;font-size:18px">3</span> Muchas veces</p>
                            <p><span style=";font-family:verdanab;font-size:18px">4</span> Casi siempre</p>
                        </td>
                    </tr>
                </table></p>
                <!--<p style="font-family:verdanab;font-size:18px">Respuestas posibles</p><br>
                <p><script style="color:#006699;font-size:24px" class="fa fa-angle-right"></script>&nbsp&nbspMe desconcierto, no sé qué hacer</p>
                <p><script style="color:#006699;font-size:24px" class="fa fa-angle-right"></script>&nbsp&nbspTengo la impresión de que soy un inútil</p>
                <p><script style="color:#006699;font-size:24px" class="fa fa-angle-right"></script>&nbsp&nbspNo puedo concentrarme en el trabajo</p>
                <p><script style="color:#006699;font-size:24px" class="fa fa-angle-right"></script>&nbsp&nbspTengo dificultades para dormir</p>
                <p><script style="color:#006699;font-size:24px" class="fa fa-angle-right"></script>&nbsp&nbspPierdo el apetito</p><br>-->
                <p>Vea los siguientes ejemplos:</p>
            </div>
        </div>    
        <div class="row" style="background-color:transparent;height:auto; margin-top:-1px;padding:1em"> 
            <div class="panel panel-body" style="background-color:transparent;border-color:#678e98;border-radius:0px;border-width:2px;min-height:40em;padding:2em">
                <!--<table style="width:100%!important;font-size:16px"><br><br><br><br><br><br><br>
                    <tr>
                        <td style="width:5%"></td>
                        <td  style="width:34%"></td>
                        <td  style="position:absolute;">
                            <p id="rotar">&nbsp<span style="font-family:verdanab;color:#006699">RESPUESTAS</p>
                        </td>
                        <td  style="position:absolute;margin-left:-5em;">
                            <p id="rotar">&nbsp<span style="font-family:verdanab;color:#006699">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1.</span>&nbspMe&nbspdesconcierto,&nbspno&nbspsé&nbspqué&nbsphacer&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                        </td>
                        <td style="position:absolute;margin-left:-1.3em;">
                            <p id="rotar">&nbsp<span style="font-family:verdanab;color:#006699">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2.</span>&nbspTengo&nbspla&nbspimpresión&nbspde&nbspque&nbspsoy&nbspun&nbspinútil&nbsp</p>
                        </td>
                        <td style="position:absolute;margin-left:2em">
                            <p id="rotar">&nbsp<span style="font-family:verdanab;color:#006699">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3.</span>&nbspNo&nbsppuedo&nbspconcentrarme&nbspen&nbspel&nbsptrabajo&nbsp&nbsp&nbsp&nbsp</p>
                        </td>
                        <td style="position:absolute;margin-left:5.6em">
                            <p id="rotar">&nbsp<span style="font-family:verdanab;color:#006699">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp4.</span>&nbspTengo&nbspdificultades&nbsp&nbsppara&nbspdormir&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                        </td>
                        <td style="position:absolute;margin-left:9em">
                            <p id="rotar">&nbsp<span style="font-family:verdanab;color:#006699">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp5.</span>&nbspPierdo&nbspel&nbspapetito&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                        </td>
                        <td style="position:absolute;margin-left:20em">
                            <p id="rotar" style="font-family:verdanab;color:#006699">OBSERVACIONES</p>
                        </td>
                    </tr>
                </table>-->
                <p style="text-align:center;font-family:verdanab;font-size:20px;color:#eb3814">CONTESTE DANDO CLIC A TODAS LAS CASILLAS EN BLANCO</p><br>
                 <table style="width:100%!important;font-size:16px;padding:0;margin:0"><br>
                    <tr>
                        <td style="width:5%"></td>
                        <td style="font-family:verdanab;color:#5f1a61;text-align:center;width:38%">SITUACIONES</td>
                        <td style="font-family:verdanab;color:#5f1a61;text-align:center;width:38%">RESPUESTAS</td>
                        <td style="font-family:verdanab;color:#5f1a61;text-align:center;width:7%">Obs.</td>
                    </tr>
                </table>    
                <table style="width:100%!important;font-size:16px;padding:0;margin:0">
                    <tr>
                        <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">1.</span></td>
                        <td style="font-family:verdanab;text-align:left;width:60%;padding-left:10px">Si un problema me preocupa mucho.</td>
                        <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></input></td>
                        <td><select type="text"  id="" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo la impresión de que soy un</option>  
                                <option disabled>inútil</option> 
                                <option value="0" selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                        <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></td>
                        <td><select type="text"  id="" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo dificultades para dormir</option>
                                <option value="0" selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                        <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></td>
                        <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu01"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
                    </tr>
                    <tr>
                        <td COLSPAN=7 style="padding-top:1em!important"> 
                            <ul class="nav collapse" id="submenu01" role="menu">
                               <textarea class="note" id="" rows="1" value="" style="width:100%;border-radius:0;border-color:#006699;height:3em;padding:10px" placeholder="Escriba la observación aquí..."/></textarea>
                             </ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:5%"><span style="background:#5f1a61;color:#ffffff;font-size:18px;font-family:verdanab;border-color:#ffffff;border-width:2px;padding:4px;border-radius:9px">2.</span></td>
                        <td style="font-family:verdanab;text-align:left;width:52%;padding-left:10px">Cuando pierdo un objeto que apreciaba mucho.</td>
                        <td><select type="text" id="" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px;color:#5f1a61">
                                <option disabled>Me desconcierto, no sé qué hacer</option> 
                                <option value="0" selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                        <td><select type="text"  id="" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px">
                                <option disabled>Tengo la impresión de que soy un</option>  
                                <option disabled>inútil</option>
                                <option value="0" selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                        <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></td>
                        <td><input type="text" style="width:2.5em;height:2.5em;background:#f9ebfa;border: 2px solid #5f1a61;border-radius:9px" disabled></td>
                        <td><select type="text"  id="" style="width:2.5em;height:2.5em;border: 2px solid #5f1a61;border-radius:9px;color:#5f1a61">
                                <option disabled>Pierdo el apetito</option>  
                                <option value="0" selected></option>
                                <option value="0">0&nbsp&nbsp&nbsp&nbspCasi nunca</option>
                                <option value="1">1&nbsp&nbsp&nbsp&nbspPocas veces</option>
                                <option value="2">2&nbsp&nbsp&nbsp&nbspUnas veces sí, otras veces no</option>
                                <option value="3">3&nbsp&nbsp&nbsp&nbspMuchas veces</option>
                                <option value="4">4&nbsp&nbsp&nbsp&nbspCasi siempre</option>
                            </select>
                        </td>
                        <td><ul class="nav"><li><a href="#*" class="toggle-custom" data-toggle="collapse" data-target="#submenu02"><span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span></a></li></ul></td>
                    </tr>
                    <tr>
                        <td COLSPAN=7 style="padding-top:1em!important"> 
                            <ul class="nav collapse" id="submenu02" role="menu">
                               <textarea class="note" id="" rows="1" value="" style="width:100%;border-radius:0;border-color:#006699;height:3em;padding:10px" placeholder="Escriba la observación aquí..."/></textarea>
                             </ul>
                        </td>
                    </tr>
                </table><br><br>
                <p>Deberá leer la situacion <span style="color:#006699;font-family:verdanab">1</span> y las respuestas que se le presentan en una lista desplegable, cuando de clic a las casillas en blanco (en el primer caso las columnas 2 y 4). Cuando las haya leído, decida que número seleccionar de la lista desplegable. Conteste después a la situacion <span style="color:#006699;font-family:verdanab">2</span>. dando respuesta con las casillas que corresponden a las respuestas 1, 2 Y 5.</p><br>
                <p>Si desea precisar más o hacer una OBSERVACIÓN de clic en el signo <span class="glyphicon glyphicon-plus" style="font-size:20px;padding-top:1em;color:#5f1a61"></span> ubicado al margen derecho de las respuestas.</p><br>
                <p>La <span style="color:#006699">última cuestión (n° 23)</span> se utilizará sólo cuando exista una situación especialmente perturbadora para usted y no esté incluida en las 22 anteriores. En ese caso, escriba la situacion en el lugar correspondiente de las tres páginas y ponga su valoración en la casilla que crea conveniente.</p>
            </div>
        </div>
        <div class="row" id="panel0" style="background:transparent">
            <div class="row" align="center">                                                                                                    
                <a href="<?php echo RUTA_ISRA_1 ?>" style="text-decoration: none"><img src="https://www.cedisalud.com.co/imagine/setup.png"  width="80" height="80" /><p style="color:#333333;font-family:Moristonb;font-size:16px;margin-top:-3em">Iniciar</p></a><br>
            </div><br><br> 
        </div>     
    </div>
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
    $(".modal").each(function (l) {
        $(this).on("show.bs.modal", function (l) {
            var o = $(this).attr("data-easein");
            "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    function setup() {
        $("#costumModal1").modal("show");
    }
</script>
</body>
</html>
                                                                   