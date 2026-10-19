<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Síntomas neurotoxicos Q16</title>
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
    if (!controlsesion5::sesion_iniciada()) { redireccion::redirigir(RUTA_INICIO_EYSENCK);}
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $Codigo = $_GET['nombre'];
    function generarCodigoAleatorio($longitud = 6) {
        $caracteres = '1234567890abcdefghijklmnopqrstuvwxyz';
        $Codigo2 = '';
        for ($i = 0; $i < $longitud; $i++) {
            $Codigo2 .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $Codigo2;
    }
    $Codigo2 = generarCodigoAleatorio(6);
    $sql = "SELECT * FROM reg_psicologica WHERE Codigo = '$Codigo'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Nombre = $row['Nombre'];

    $sql = "INSERT INTO formulario_stopbang (id_admin, Item1, Item2, Item3, Item4, Item5, Item6,Item7,Item8,Items,Codigo,Fecha_registro) VALUES ('$Codigo', '0', '0', '0','0','0','0','0','0','0','$Codigo2',NOW())"; 
    $resultado = $mysqli->query($sql);

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
         background: url('../imagine/T6.jpg') 50% 0% #ffffff;
        background-color:#f8f4f1;
        background-size: 100%;
        width: 100%!important;
        height:100%!important;
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
    .container-fluid {
        margin:0;
        padding:0;
    }
    #boton:after {
        top: -100%;
        left: 0px;
        height: 100%;
        width: 100%;
        position: absolute;
        background:#fafecd;
        color:rgba(0,0,0,0.87)!important;
        font-size: 16px;
        line-height:2.2em;
        border-radius:0px;
        content: 'Entrar';
        transform-origin: left bottom;
        transform: rotateX(90deg);
    }
    #login label {
        position: absolute;
        display: block;
        width: 35px;
        height: 48px;
        line-height: 35px;
        text-align: center;   
    }

    #boton {
        background:#2f323a!important;
        color: #ffffff!important;
        font-size: 16px;
        border-radius: 0px!important;
        position: relative;
        transition: all 500ms ease;
        border-color:#fffffff!important;
        border-width:0.5px!important;
        box-shadow:0px 4px 3px rgba(0,0,0,.5);
    }
    #boton {
        transform-style: preserve-3d;
    }
    #boton:hover {
        transform-origin: center bottom;
        transform: rotateX(-90deg) translateY(100%)
    }
    #boton:after {
        top: -100%;
        left: 0px;
        height: 100%;
        width: 100%;
        position: absolute;
        background: rgb(250, 255, 189);
        color:rgba(0,0,0,0.87)!important;
        font-size: 16px;
        line-height:2.2em;
        border-radius:0px;
        content: 'Entrar';
        transform-origin: left bottom;
        transform: rotateX(90deg);
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
        width: 25px;
        height: 25px;
        background-color:transparent;
        border:1px solid #333333;
        text-align:center;
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        margin-top:-0.2em;
        font-size:30px!important;
        color:#a57396;
        margin-top:-2px;
    }
    .radio input[type="radio"]:checked + label::after {
        position: absolute;
        font-family: 'FontAwesome';
        content: "\f00c";
    } 
    #check2::after {
        z-index:9999!important;
        font-size:200px!important;
        color:transparent;
        margin-top:-0.26em;
        margin-left:1em;
        background-image: url("https://www.cedisalud.com.co/imagine/cheque.png");
        background-repeat: no-repeat;
        background-size: 50px 50px;
        width:60px;
        height:60px;
        animation: blinker 1s linear infinite;
    }
    #terminos {
        font-family:verdanabi;
        font-size:12px;
    }
     .word {
        perspective: 1000px; 
        perspective-origin: 200px 40px;
    }
    .word span {
        cursor: pointer;
        display: inline-block;
        font-size:30px;
        user-select: none;
        font-family:Roman;
        color:#000000;
        letter-spacing:-2px!important;
        text-rendering: optimizeLegibility; 
    }
    .word span:nth-child(1).active {
        animation: rotate 6s ease-in-out;
        transform-origin: bottom center;
    }
   /* .word span:nth-child(2).active {
        animation: toplong 3s ease-in-out;
        transform-origin: bottom center;
    }*/
    @keyframes rotate {
        20%, 80% {
            transform: rotateY(180deg);
        }
        100% {
            transform: rotateY(360deg);
        }
    }
    @keyframes toplong {
        10%, 40% {
            transform: translateY(-48vh) scaleY(1);
        }
        90% {
            transform: translateY(-48vh) scaleY(4);
        }
    }
    @media screen and (max-width: 480px) { 
        #mostrarmodal .modal-m {
        margin:0!important;
        padding:0!important;
        width:100%!important;
    }
    }
    .alert {
        background:transparent;
        border-radius:0;
        width: 270px;
        color:rgba(130, 29, 11);
        border-image-source: linear-gradient(rgba(130, 29, 11), rgba(211, 47, 18));
        border-width: 1pt;
        border-image-slice: 1;
        font-family:verdanab;
        font-size:14px!important;
        margin:0!important;
    }
    #titulo {
        color:#ffffff;
        font-family:narrow;
        font-size:30px;
        margin-top:-15px!important;
        padding:0.5em;
        letter-spacing:2px;
    }
    #fixed {
        position:fixed;
        z-index:-1!important;
        margin:0!important;
        padding:0!important;
        height:100%;
    }
    #login input {
        width: 100%;
        height: 45px;
        font-family:verdanab;
        font-size:16px;
        color:#333333;
        letter-spacing:0.5px!important;
        padding-left:14px;
        margin:0!important;
        background:transparent;
        border: 4px solid transparent;
        -moz-border-image: -moz-linear-gradient(top, #372f54 0%, #7a6cac 100%);
        -webkit-border-image: -webkit-linear-gradient(top, #372f54 0%, #7a6cac 100%);
        border-image: linear-gradient(to bottom, #372f54 0%, #7a6cac 100%);
        border-image-slice: 1;
    }
     #login select {
          width: 100%;
        height: 45px;
        font-family:verdanab;
        font-size:16px;
        color:#333333;
        letter-spacing:0.5px!important;
        padding-left:14px;
        margin:0!important;
        background:transparent;
        border: 4px solid transparent;
        -moz-border-image: -moz-linear-gradient(top, #372f54 0%, #7a6cac 100%);
        -webkit-border-image: -webkit-linear-gradient(top, #372f54 0%, #7a6cac 100%);
        border-image: linear-gradient(to bottom, #372f54 0%, #7a6cac 100%);
        border-image-slice: 1;
    }
</style>
</head>
<body>

<div class="container-fluid" style="background-color:transparent;font-size:16px;font-family:Moriston;z-index:-1;padding-right:1em">
    <div class="logo">
        <p style="padding-left:1em;padding-right:1em"><img src="https://www.cedisalud.com.co/imagine/logo_v.png" style="width:7em;float:left"></p>
    </div>
    <ul class="nav navbar-nav navbar-right" style="float:right">
        <li>
            <a href="#" style="background:transparent!important;color:#333333">
                <?php echo ' ' . $Nombre; ?>
            </a>
        </li>                           
        <li>
            <a href=<?php echo RUTA_LOGOUT_TEST ?> style="background:transparent!important;color:#333333">
                <i class="fa fa-share-square-o" aria-hidden="true"></i> Cerrar sesión</a>
        </li>
    </ul>    
</div>
<div class="container" style="font-size:16px;font-family:verdana">
    <div class="ventana_flotante col-md-10 col-md-offset-1">
        <p style="text-align:center;font-family:Moristonb;font-size:20px;color:#333333"><span style="color:#006699">Evaluación de Riesgo de Apnea Obstructiva del Sueño (AOS)</p> 
        <p style="text-align:center;font-family:Moristonb;font-size:20px;color:#333333"><span style="color:#006699">Cuestionario STOP-BANG</p><br>
        <p style="font-family:verdanab;font-size:18px;color:#000000">Introducción al Cuestionario STOP-BANG</p><br>
        <p style="font-family:verdana;font-size:16px;color:#000000">El cuestionario STOP-BANG es una herramienta de cribado (screening) simple, validada y ampliamente utilizada a nivel mundial para la evaluación rápida del riesgo de padecer Apnea Obstructiva del Sueño (AOS) en la población general.</p>
        <p style="font-family:verdana;font-size:16px;color:#000000">La prueba consta de ocho preguntas dicotómicas (Sí/No) que evalúan los principales factores de riesgo y síntomas clínicos asociados a la AOS. Las primeras cuatro preguntas (S-T-O-P) se centran en los síntomas y signos del sueño, mientras que las últimas cuatro (B-A-N-G) evalúan características demográficas y factores físicos.</p>
        <p style="font-family:verdana;font-size:16px;color:#000000;margin-left:3em"><span style="font-family:verdanab">•	S</span> (Snoring): Evalúa si la persona presenta Ronquidos fuertes.</p>
        <p style="font-family:verdana;font-size:16px;color:#000000;margin-left:3em"><span style="font-family:verdanab">•	T</span> (Tiredness): Evalúa si la persona experimenta Cansancio o somnolencia diurna.</p>
        <p style="font-family:verdana;font-size:16px;color:#000000;margin-left:3em"><span style="font-family:verdanab">•	O</span> (Observed Apnea): Evalúa si se han Observado Apneas o pausas respiratorias durante el sueño.</p>
        <p style="font-family:verdana;font-size:16px;color:#000000;margin-left:3em"><span style="font-family:verdanab">•	P</span> (Pressure): Evalúa si la persona padece Presión arterial alta o hipertensión..</p>
        <p style="font-family:verdana;font-size:16px;color:#000000">La prueba consta de ocho preguntas dicotómicas (Sí/No) que evalúan los principales factores de riesgo y síntomas clínicos asociados a la AOS. Las primeras cuatro preguntas (S-T-O-P) se centran en los síntomas y signos del sueño, mientras que las últimas cuatro (B-A-N-G) evalúan características demográficas y factores físicos.</p>
        <p style="font-family:verdana;font-size:16px;color:#000000">Los siguientes cuatro factores son características demográficas y físicas:</p>
        <p style="font-family:verdana;font-size:16px;color:#000000;margin-left:3em"><span style="font-family:verdanab">•	B</span> (BMI): Evalúa si el Índice de Masa Corporal (IMC) es mayor a 35.</p>
        <p style="font-family:verdana;font-size:16px;color:#000000;margin-left:3em"><span style="font-family:verdanab">•	A</span> (Age): Evalúa si la Edad es mayor a 50 años.</p>
        <p style="font-family:verdana;font-size:16px;color:#000000;margin-left:3em"><span style="font-family:verdanab">•	N</span> (Neck Circumference): Evalúa si la Circunferencia del cuello es grande mayor a 43 en hombres o 41 cm en mujeres.</p>
        <p style="font-family:verdana;font-size:16px;color:#000000;margin-left:3em"><span style="font-family:verdanab">•	G</span> (Gender): Evalúa si la persona es de Género masculino o femenino.</p>
        <p style="font-family:verdana;font-size:16px;color:#000000">La prueba consta de ocho preguntas dicotómicas (Sí/No) que evalúan los principales factores de riesgo y síntomas clínicos asociados a la AOS. Las primeras cuatro preguntas (S-T-O-P) se centran en los síntomas y signos del sueño, mientras que las últimas cuatro (B-A-N-G) evalúan características demográficas y factores físicos.</p>
        <p style="font-family:verdana;font-size:16px;color:#000000">El factor clave de limitación de la capacidad laboral asociado al riesgo de APNEA OBSTRUCTIVA DEL SUEÑO es la somnolencia diurna excesiva, que afecta directamente la atención, el tiempo de reacción y la toma de decisiones, elevando significativamente el riesgo de accidentes.</p>
        <form name="form1" id="form1">
        <div><br>    
            <table style="width:100%">
                <tr>
                    <td style="font-family:verdanab;font-size:15px"><br><p>Peso:&nbsp&nbsp&nbsp</p></td>
                    <td style="font-family:verdanab;font-size:15px"><br><p>Estatura:&nbsp&nbsp&nbsp</p></td>
                    <td style="font-family:verdanab;font-size:15px"><br><p>IMC:&nbsp&nbsp&nbsp</p></td>
                    <td style="font-family:verdanab;font-size:15px"><br><p>Cuello:&nbsp&nbsp&nbsp</p></td>
                </tr>
                <tr>
                    <td><input type="text" class="note P34" id="P34" value="" placeholder="#" style="width:4em;text-align:center"/></input> Kg</td>
                    <td><input type="text" class="note P35" id="P35" value="" placeholder="#" style="width:4em;text-align:center"/></input> Cm</td>
                    <td class="IMC" id="IMC" style="padding:0.5em;font-family:verdanab"></td>
                    <td><input type="text" class="note P36" id="P36" value="" placeholder="#" style="width:4em;text-align:center"/></input> Cm</td>
                </tr>
            </table><br>    
        </div>    
 
            
        <div><br>
            <p align="left" style="color:#000000;font-size:17px;font-family:verdana"><span style="color:#006699">1.</span> <span style="font-family:verdanab">¿Ronca alto</span> (lo suficientemente alto para oírse a través de las puertas cerradas o para que su pareja le dé codazos por roncar por la noche)?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item1" class="Item1" id="Item_1" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_1"></label>
            <input type="radio" name="Item1" class="Item1" id="Item_2" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_2"></label>
        </div>
         <div><br>
            <p align="left" style="color:#000000;font-size:17px;font-family:verdana"><span style="color:#006699">2.</span> ¿Se siente a menudo <span style="font-family:verdanab">cansado/a, fatigado/a o somnoliento/a</span> durante el día (como, por ejemplo, quedarse dormido/a mientras conduce)?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item2" class="Item2" id="Item_3" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_3"></label>
            <input type="radio" name="Item2" class="Item2" id="Item_4" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_4"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:17px;font-family:verdana"><span style="color:#006699">3.</span> ¿Alguien ha <span style="font-family:verdanab">observado</span> que usted <span style="font-family:verdanab">dejara de respirar</span> o que se <span style="font-family:verdanab">ahogara/quedara sin aliento</span> mientras duerme?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item3" class="Item3" id="Item_5" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_5"></label>
            <input type="radio" name="Item3" class="Item3" id="Item_6" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_6"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:17px;font-family:verdana"><span style="color:#006699">4.</span> ¿Padece o está recibiendo algún tratamiento para la <span style="font-family:verdanab">hipertensión</span>?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item4" class="Item4" id="Item_7" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_7"></label>
            <input type="radio" name="Item4" class="Item4" id="Item_8" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_8"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:17px;font-family:verdana"><span style="color:#006699">5.</span>	<span style="font-family:verdanab">¿El índice de masa corporal es superior a 35 kg/m2?</span></p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item5" class="Item5" id="Item_9" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_9"></label>
            <input type="radio" name="Item5" class="Item5" id="Item_10" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_10"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:17px;font-family:verdana"><span style="color:#006699">6.</span> <span style="font-family:verdanab">¿Tiene más de 50 años?</span></p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item6" class="Item6" id="Item_11" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_11"></label>
            <input type="radio" name="Item6" class="Item6" id="Item_12" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_12"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:17px;font-family:verdana"><span style="color:#006699">7.</span> <span style="font-family:verdanab">¿Cuál es la circunferencia de su cuello? (mídala alrededor de la nuez) Para hombres, ¿el cuello de la camisa mide 43 cm o más?</span>
Para mujeres, ¿el cuello de la camisa mide 41 cm o más?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item7" class="Item7" id="Item_13" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_13"></label>
            <input type="radio" name="Item7" class="Item7" id="Item_14" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_14"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:17px;font-family:verdana"><span style="color:#006699">8.</span> <span style="font-family:verdanab">Sexo= ¿hombre?</span></p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item8" class="Item8" id="Item_15" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_15"></label>
            <input type="radio" name="Item8" class="Item8" id="Item_16" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_16"></label>
        </div>
      
        <div style="text-align:right!important;margin-right:1em">
            <button id="boton" type="submit" name="enviar" class="btn" style="width:10em">Finalizar</button>
        </div><br>
        </form><br>
        
        <div style="text-align:center;z-index:9999!important"><a href="https://www.cedisalud.com"><img src="../imagine/logo_v.png" width="150"></a></div>
        <div style="font-size:14px">
            <span style="font-family:verdana;color:#333333!important">Diseño&nbspy&nbspdesarrollo&nbspweb: <a href='https://www.perfilar.net/' style="font-family:verdanab;letter-spacing:2px;font-size:14px;color:#3e555b">PERFILAR</a></span><br> 
            <span style="font-family:verdana;color:#333333!important">Copyright © 2022 - Medellín (Colombia)</span>
        </div>
    </div>
</div> 
<script src="<?php echo RUTA_JS ?>data.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.ui.min.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.flexslider.js"></script>
<script src="<?php echo RUTA_JS ?>main.js"></script> 
<script src="<?php echo RUTA_JS ?>ajax.js"></script>
<script>
    function Radio_Value(ctrl) {
        for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked) return ctrl[i].value;
    } 
        $('.P34').on('keydown', function() {
            var P34 = $('.P34').val();
            var P35 = $('.P35').val();
            function calcularIMC(peso, altura) {
                return peso / (altura * altura);
            }
            var imc = (calcularIMC(P34, P35)*100).toFixed(2); 
            $('.IMC').html(imc);
            $.ajax({
                type: "post",
                url: "../formulario_stopbang.php",
                data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&IMC=" + imc,
                success: function(response) {
        
                }
            })
        });
         $('.P35').on('keydown', function() {
            var P34 = $('.P34').val();
            var P35 = $('.P35').val();
            function calcularIMC(peso, altura) {
                return peso / (altura * altura);
            }
            var imc = (calcularIMC(P34, P35)*100).toFixed(2); 
            $('.IMC').html(imc);
            $.ajax({
                type: "post",
                url: "../formulario_stopbang.php",
                data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&IMC=" + imc,
                success: function(response) {
        
                }
            })
        });
        $('.P36').on('keyup', function() {
            var P36 = $('.P36').val();
            $.ajax({
                type: "post",
                url: "../formulario_stopbang.php",
                data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&P36=" + P36,
                success: function(response) {
        
                }
            })
        });
    $(document).on('click', '.Item1', function() {
        var Item1= Radio_Value(document.getElementsByClassName('Item1'));
        $.ajax({
            type: "post",
            url: "../formulario_stopbang.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item1=" + Item1,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item2', function() {
        var Item2= Radio_Value(document.getElementsByClassName('Item2'));
        $.ajax({
            type: "post",
            url: "../formulario_stopbang.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item2=" + Item2,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item3', function() {
        var Item3= Radio_Value(document.getElementsByClassName('Item3'));
        $.ajax({
            type: "post",
            url: "../formulario_stopbang.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item3=" + Item3,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item4', function() {
        var Item4= Radio_Value(document.getElementsByClassName('Item4'));
        $.ajax({
            type: "post",
            url: "../formulario_stopbang.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item4=" + Item4,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item5', function() {
        var Item5= Radio_Value(document.getElementsByClassName('Item5'));
        $.ajax({
            type: "post",
            url: "../formulario_stopbang.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item5=" + Item5,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item6', function() {
        var Item6= Radio_Value(document.getElementsByClassName('Item6'));
        $.ajax({
            type: "post",
            url: "../formulario_stopbang.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item6=" + Item6,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item7', function() {
        var Item7= Radio_Value(document.getElementsByClassName('Item7'));
        $.ajax({
            type: "post",
            url: "../formulario_stopbang.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item7=" + Item7,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item8', function() {
        var Item8= Radio_Value(document.getElementsByClassName('Item8'));
        $.ajax({
            type: "post",
            url: "../formulario_stopbang.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item8=" + Item8,
            success: function(response) {
    
            }
        })
    })
  
    $("#form1").submit(function(event) {
        event.preventDefault();
        
        var Item1= Radio_Value(document.getElementsByClassName('Item1'));
        if(Item1 == 1 || Item1 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 1.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item2= Radio_Value(document.getElementsByClassName('Item2'));
        if(Item2 == 1 || Item2 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 2.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item3= Radio_Value(document.getElementsByClassName('Item3'));
        if(Item3 == 1 || Item3 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 3.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item4= Radio_Value(document.getElementsByClassName('Item4'));
        if(Item4 == 1 || Item4 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 4.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item5= Radio_Value(document.getElementsByClassName('Item5'));
        if(Item5 == 1 || Item5 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 5.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item6= Radio_Value(document.getElementsByClassName('Item6'));
        if(Item6 == 1 || Item6 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 6.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item7= Radio_Value(document.getElementsByClassName('Item7'));
        if(Item7 == 1 || Item7 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 7.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item8= Radio_Value(document.getElementsByClassName('Item8'));
        if(Item8 == 1 || Item8 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 8.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
       
       
        if((Item1 == 1 || Item1 == '0') && (Item2 == 1 || Item2 == '0') && (Item3 == 1 || Item3 == '0') && (Item4 == 1 || Item4 == '0') && (Item5 == 1 || Item5 == '0') && (Item6 == 1 || Item6 == '0') && (Item7 == 1 || Item7 == '0') && (Item8 == 1 || Item8 == '0')) {
            window.location = "https://www.cedisalud.com.co/resultado-stopbang?nombre=<?php echo $Codigo2 ?>"
        }

    })

</script>
</body>
</html>