<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tamíz</title>
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
    if (!controlsesion5::sesion_iniciada()) { redireccion::redirigir(RUTA_INICIO_TEST);}
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    //$Codigo = $_SESSION['Codigo'];
    $Codigo = $_GET['nombre'];
    function generarCodigoAleatorio($longitud = 3) {
        $caracteres = '1234567890abcdefghijklmnopqrstuvwxyz';
        $Codigo2 = '';
        for ($i = 0; $i < $longitud; $i++) {
            $Codigo2 .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $Codigo2;
    }
    $Codigo2 = generarCodigoAleatorio(3);

    $sql = "SELECT * FROM reg_psicologica WHERE Codigo = '$Codigo'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Nombre = $row['Nombre'];
    $sql = "INSERT INTO formulario_tamiz (id_admin, Item1, Item2, Item3, Item4, Item5, Item6,Item7,Item8,Item9,Item10,Item11,Item12,Item13,Item14,Item15,Item16,Item17,Item18,Item19,Item20,Item21,Item22,Item23,Item24,Item25,Item26,Item27,Item28,Item29,Item30,Item31,Item32,Item33,Item34,Item35,Item36,Item37,Item38,Item39,Item40,Items,Codigo,Fecha_registro) VALUES ('$Codigo', '0', '0', '0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','$Codigo2',NOW())"; 
    $resultado = $mysqli->query($sql);
   /* $sql = "UPDATE formulario_tamiz SET Item1 = '0', Item2 = '0', Item3 = '0', Item4 = '0', Item5 = '0', Item6 = '0',Item7 = '0',Item8 = '0',Item9 = '0',Item10 = '0',Item11 = '0',Item12 = '0',Item13 = '0',Item14 = '0',Item15 = '0',Item16 = '0',Item17 = '0',Item18 = '0',Item19 = '0',Item20 = '0',Item21 = '0',Item22 = '0',Item23 = '0',Item24 = '0',Item25 = '0',Item26 = '0',Item27 = '0',Item28 = '0',Item29 = '0',Item30 = '0',Item31 = '0',Item32 = '0',Item33 = '0',Item34 = '0',Item35 = '0',Item36 = '0',Item37 = '0',item38 = '0',Item39 = '0',Item40 = '0' WHERE id_admin = '$Codigo'";
    $result = $mysqli->query($sql);*/
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
        color:#006699;
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
    <ul class="nav navbar-nav navbar-right">
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
        <p style="text-align:center;font-family:Moristonb;font-size:20px;color:#333333">VALORACIÓN PSICOLÓGICA DEL CANDIDATO</p><br>
        <p style="text-align:center;font-family:narrow;font-size:24px;color:#006699;letter-spacing:1px">1. Valoración de personalidad</p>
        <form name="form1" id="form1">
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">1.</span> ¿Tiene dificultades de concentración o de memoria?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item1" class="Item1" id="Item_1" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_1"></label>
            <input type="radio" name="Item1" class="Item1" id="Item_2" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_2"></label>
        </div>
       <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">2.</span> ¿Tiene dificultad para conciliar el sueño?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item2" class="Item2" id="Item_3" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_3"></label>
            <input type="radio" name="Item2" class="Item2" id="Item_4" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_4"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">3.</span> ¿Siente fatiga o cansancio excesivos?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item3" class="Item3" id="Item_5" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_5"></label>
            <input type="radio" name="Item3" class="Item3" id="Item_6" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_6"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">4.</span> ¿Sufre de dolor de cabeza o espalda?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item4" class="Item4" id="Item_7" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_7"></label>
            <input type="radio" name="Item4" class="Item4" id="Item_8" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_8"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">5.</span> ¿Ha sentido palpitaciones o mareos en los ultimos 3 meses?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item5" class="Item5" id="Item_9" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_9"></label>
            <input type="radio" name="Item5" class="Item5" id="Item_10" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_10"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">6.</span> ¿Se Siente observado o perseguido?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item6" class="Item6" id="Item_11" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_11"></label>
            <input type="radio" name="Item6" class="Item6" id="Item_12" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_12"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">7.</span> ¿Cuando tiene muchas cosas por hacer se desespera o huye de la responsabilidad?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item7" class="Item7" id="Item_13" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_13"></label>
            <input type="radio" name="Item7" class="Item7" id="Item_14" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_14"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">8.</span> ¿Se le dificulta tomar decisiones o resolver un problema dificil?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item8" class="Item8" id="Item_15" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_15"></label>
            <input type="radio" name="Item8" class="Item8" id="Item_16" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_16"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">9.</span> ¿Le atemoriza las reuniones sociales o hablar en público?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item9" class="Item9" id="Item_17" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_17"></label>
            <input type="radio" name="Item9" class="Item9" id="Item_18" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_18"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">10.</span> ¿Le intimida que observen su trabajo o le supervisen lo que hace?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item10" class="Item10" id="Item_19" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_19"></label>
            <input type="radio" name="Item10" class="Item10" id="Item_20" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_20"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">11.</span> ¿Suelo castigarse cuando comete un error, o le da muchas vueltas a ese error?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item11" class="Item11" id="Item_21" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_21"></label>
            <input type="radio" name="Item11" class="Item11" id="Item_22" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_22"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">12.</span> ¿Le molesta que le repitan muchas veces las instrucciones o lo que tiene que hacer?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item12" class="Item12" id="Item_23" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_23"></label>
            <input type="radio" name="Item12" class="Item12" id="Item_24" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_24"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">13.</span> ¿Se preocupa fácilmente?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item13" class="Item13" id="Item_25" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_25"></label>
            <input type="radio" name="Item13" class="Item13" id="Item_26" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_26"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">14.</span> ¿Tiene miedo de actuar de cierta manera o de mostrar síntomas de ansiedad que se valoren negativamente (es decir, que lo humillen o avergüencen; que se traduzca en rechazo o que ofenda a otras personas)?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item14" class="Item14" id="Item_27" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_27"></label>
            <input type="radio" name="Item14" class="Item14" id="Item_28" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_28"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">15.</span> ¿Se Siente irritado o de mal humor con frecuencia?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item15" class="Item15" id="Item_29" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_29"></label>
            <input type="radio" name="Item15" class="Item15" id="Item_30" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_30"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">16.</span> ¿Está satisfecho de sus relaciones sociales y/o de pareja?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item16" class="Item16" id="Item_31" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_31"></label>
            <input type="radio" name="Item16" class="Item16" id="Item_32" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_32"></label>
        </div><br>
        <p style="text-align:center;font-family:narrow;font-size:22px;color:#006699;letter-spacing:1px">Durante las últimas 2 semanas, ¿ha tenido molestias debido a los siguientes problemas?</p>
        
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">17.</span> Poco interés o placer en hacer cosas</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item17" class="Item17" id="Item_33" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_33"></label>
            <input type="radio" name="Item17" class="Item17" id="Item_34" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_34"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">18.</span> Se ha sentido decaído (a), deprimido (a) o sin esperanzas </p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item18" class="Item18" id="Item_35" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_35"></label>
            <input type="radio" name="Item18" class="Item18" id="Item_36" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_36"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">19.</span> Ha tenido dificultad para quedarse o permanecer dormido(a), o ha dormido demasiado</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item19" class="Item19" id="Item_37" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_37"></label>
            <input type="radio" name="Item19" class="Item19" id="Item_38" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_38"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">20.</span> Siente que ya no disfruta o no encuentra placer en las actividades como antes</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item20" class="Item20" id="Item_39" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_39"></label>
            <input type="radio" name="Item20" class="Item20" id="Item_40" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_40"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">21.</span> Se ha sentido sin apetito o ha comido en exceso</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item21" class="Item21" id="Item_41" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_41"></label>
            <input type="radio" name="Item21" class="Item21" id="Item_42" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_42"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">22.</span> Se ha sentido mal con usted mismo(a) – o que es un fracaso o que ha quedado mal con usted mismo(a) o con su familia</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item22" class="Item22" id="Item_43" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_43"></label>
            <input type="radio" name="Item22" class="Item22" id="Item_44" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_44"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">23.</span> Siente limitaciones para comprender lo que lee en el periódico o ve en la televisión </p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item23" class="Item23" id="Item_45" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_45"></label>
            <input type="radio" name="Item23" class="Item23" id="Item_46" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_46"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">24.</span> Se ha movido o hablado tan lento que otras personas podrían haberlo notado o lo contrario – muy inquieto(a) o agitado(a) que ha estado moviéndose mucho más de lo normal</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item24" class="Item24" id="Item_47" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_47"></label>
            <input type="radio" name="Item24" class="Item24" id="Item_48" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_48"></label>
        </div><br>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">25.</span> Pensamientos de que estaría mejor muerto(a) o de lastimarse de alguna manera.</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item25" class="Item25" id="Item_49" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_49"></label>
            <input type="radio" name="Item25" class="Item25" id="Item_50" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_50"></label>
        </div><br>
        
        <p style="text-align:center;font-family:narrow;font-size:24px;color:#006699;letter-spacing:1px">2. Accidentalidad</p>
        
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">26.</span> ¿Ha sufrido algún accidente, incidente o enfermedad por ocasión de su trabajo?   </p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item26" class="Item26" id="Item_51" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_51"></label>
            <input type="radio" name="Item26" class="Item26" id="Item_52" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1"16 for="Item_52"></label>
        </div><br><br>
        
        <p style="text-align:center;font-family:narrow;font-size:24px;color:#006699;letter-spacing:1px"><span style="color:#006699">3. Antecendentes de trastornos emocionales o psiquiátricos</p>
        
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">27.</span> Alguna vez ha sufrido de una enfermedad psiquiátrica, como, por ejemplo, Depresión, Ansiedad, Problemas de sueño</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item27" class="Item27" id="Item_53" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_53"></label>
            <input type="radio" name="Item27" class="Item27" id="Item_54" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_54"></label>
        </div><br>
        
        <p style="text-align:center;font-family:narrow;font-size:24px;color:#006699;letter-spacing:1px">4. Por favor, seleccione según corresponda</p>
        
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">28.</span> Siento temor  acusado y persistente ante la situación o anticipación de encontrarme en una altura superior de1.5mts de altura.</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item28" class="Item28" id="Item_55" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_55"></label>
            <input type="radio" name="Item28" class="Item28" id="Item_56" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_56"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">29.</span> Poseo algún miedo o ansiedad irracional o intensa por un objeto o situación específica</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item29" class="Item29" id="Item_57" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_57"></label>
            <input type="radio" name="Item29" class="Item29" id="Item_58" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_58"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">30.</span> Cuando estoy expuesto a una altura superior a 1.5 metros, se produce en mí una respuesta de ansiedad (palpitaciones, sudoración fría, hiperventilación ,desmayo).</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item30" class="Item30" id="Item_59" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_59"></label>
            <input type="radio" name="Item30" class="Item30" id="Item_60" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_60"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">31.</span> Prefiero evitar exponerme a las Alturas</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item31" class="Item31" id="Item_61" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_61"></label>
            <input type="radio" name="Item31" class="Item31" id="Item_62" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_62"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">32.</span> Cuando tengo que exponerme a trabajar  en  alturas, lo soporto aunque me causa una intensa ansiedad o malestar</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item32" class="Item32" id="Item_63" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_63"></label>
            <input type="radio" name="Item32" class="Item32" id="Item_64" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_64"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">33.</span> Con frecuencia me falta el aire cuando estoy rodeado de muchas personas o cuando estoy en lugares cerrados</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item33" class="Item33" id="Item_65" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_65"></label>
            <input type="radio" name="Item33" class="Item33" id="Item_66" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_66"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">34.</span> Cuando espero a alguien en un lugar concurrido, se  produce  en  mí  una  respuesta  de  ansiedad (palpitaciones, sudoración fría, hiperventilación ,desmayo)</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item34" class="Item34" id="Item_67" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_67"></label>
            <input type="radio" name="Item34" class="Item34" id="Item_68" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_68"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">35.</span> Cuando estoy frente a lugares cerrados y oscuros o frente aguas profundas, se  produce  en  mí  una  respuesta  de  ansiedad (palpitaciones, sudoración fría, hiperventilación ,desmayo)</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item35" class="Item35" id="Item_69" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_69"></label>
            <input type="radio" name="Item35" class="Item35" id="Item_70" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_70"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">36.</span> Cuando tengo que viajar en avión o en barco, se  produce  en  mí  una  respuesta  de  ansiedad (palpitaciones, sudoración fría, hiperventilación ,desmayo)</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item36" class="Item36" id="Item_71" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_71"></label>
            <input type="radio" name="Item36" class="Item36" id="Item_72" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_72"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">37.</span> Ante la consulta con el dentista, las inyeccciones las heridas o la sangre, se  produce  en  mí  una  respuesta  de  ansiedad (palpitaciones, sudoración fría, hiperventilación ,desmayo)</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item37" class="Item37" id="Item_73" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_73"></label>
            <input type="radio" name="Item37" class="Item37" id="Item_74" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_74"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">38.</span> Cuando le temo a una situación, tengo comportamientos  de  evitación,  anticipación  ansiosa  o  malestar  que interfieren con mi rutina normal, mi desempeño laboral y/o social</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item38" class="Item38" id="Item_75" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_75"></label>
            <input type="radio" name="Item38" class="Item38" id="Item_76" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_76"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">39.</span> Prefiero lugares donde pueda manejar la situación y no tenga que depender de terceros o de objetos en mi cuerpo</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item39" class="Item39" id="Item_77" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_77"></label>
            <input type="radio" name="Item39" class="Item39" id="Item_78" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_78"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">40.</span> Ante un examen en el que se juega mucho o si va a ser entrevistado para un trabajo muy importante se  produce  en  mí  una  respuesta  de  ansiedad (palpitaciones, sudoración fría, hiperventilación ,desmayo)</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item40" class="Item40" id="Item_79" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_79"></label>
            <input type="radio" name="Item40" class="Item40" id="Item_80" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_80"></label>
        </div>
        <div style="text-align:right!important;margin-right:1em">
            <button id="boton" type="submit" name="enviar" class="btn" style="width:10em">Finalizar</button>
        </div><br>
        </form>

        <br>
        <div style="text-align:center;z-index:9999!important"><a href="https://www.cedisalud.com"><img src="../imagine/logo_v.png" width="200"></a></div>
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
    

    $(document).on('change', '.Item1', function() {
        var Item1= Radio_Value(document.getElementsByClassName('Item1'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item1=" + Item1,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item2', function() {
        var Item2= Radio_Value(document.getElementsByClassName('Item2'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item2=" + Item2,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item3', function() {
        var Item3= Radio_Value(document.getElementsByClassName('Item3'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item3=" + Item3,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item4', function() {
        var Item4= Radio_Value(document.getElementsByClassName('Item4'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item4=" + Item4,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item5', function() {
        var Item5= Radio_Value(document.getElementsByClassName('Item5'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item5=" + Item5,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item6', function() {
        var Item6= Radio_Value(document.getElementsByClassName('Item6'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item6=" + Item6,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item7', function() {
        var Item7= Radio_Value(document.getElementsByClassName('Item7'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item7=" + Item7,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item8', function() {
        var Item8= Radio_Value(document.getElementsByClassName('Item8'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item8=" + Item8,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item9', function() {
        var Item9= Radio_Value(document.getElementsByClassName('Item9'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item9=" + Item9,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item10', function() {
        var Item10= Radio_Value(document.getElementsByClassName('Item10'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item10=" + Item10,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item11', function() {
        var Item11= Radio_Value(document.getElementsByClassName('Item11'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item11=" + Item11,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item12', function() {
        var Item12= Radio_Value(document.getElementsByClassName('Item12'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item12=" + Item12,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item13', function() {
        var Item13= Radio_Value(document.getElementsByClassName('Item13'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item13=" + Item13,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item14', function() {
        var Item14= Radio_Value(document.getElementsByClassName('Item14'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item14=" + Item14,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item15', function() {
        var Item15= Radio_Value(document.getElementsByClassName('Item15'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item15=" + Item15,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item16', function() {
        var Item16= Radio_Value(document.getElementsByClassName('Item16'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item16=" + Item16,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item17', function() {
        var Item17= Radio_Value(document.getElementsByClassName('Item17'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item17=" + Item17,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item18', function() {
        var Item18= Radio_Value(document.getElementsByClassName('Item18'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item18=" + Item18,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item19', function() {
        var Item19= Radio_Value(document.getElementsByClassName('Item19'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item19=" + Item19,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item20', function() {
        var Item20= Radio_Value(document.getElementsByClassName('Item20'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item20=" + Item20,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item21', function() {
        var Item21= Radio_Value(document.getElementsByClassName('Item21'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item21=" + Item21,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item22', function() {
        var Item22= Radio_Value(document.getElementsByClassName('Item22'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item22=" + Item22,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item23', function() {
        var Item23= Radio_Value(document.getElementsByClassName('Item23'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item23=" + Item23,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item24', function() {
        var Item24= Radio_Value(document.getElementsByClassName('Item24'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item24=" + Item24,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item25', function() {
        var Item25= Radio_Value(document.getElementsByClassName('Item25'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item25=" + Item25,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item26', function() {
        var Item26= Radio_Value(document.getElementsByClassName('Item26'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item26=" + Item26,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item27', function() {
        var Item27= Radio_Value(document.getElementsByClassName('Item27'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item27=" + Item27,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item28', function() {
        var Item28= Radio_Value(document.getElementsByClassName('Item28'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item28=" + Item28,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item29', function() {
        var Item29= Radio_Value(document.getElementsByClassName('Item29'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item29=" + Item29,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item30', function() {
        var Item30= Radio_Value(document.getElementsByClassName('Item30'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item30=" + Item30,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item31', function() {
        var Item31= Radio_Value(document.getElementsByClassName('Item31'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item31=" + Item31,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item32', function() {
        var Item32= Radio_Value(document.getElementsByClassName('Item32'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item32=" + Item32,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item33', function() {
        var Item33= Radio_Value(document.getElementsByClassName('Item33'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item33=" + Item33,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item34', function() {
        var Item34= Radio_Value(document.getElementsByClassName('Item34'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item34=" + Item34,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item35', function() {
        var Item35= Radio_Value(document.getElementsByClassName('Item35'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item35=" + Item35,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item36', function() {
        var Item36= Radio_Value(document.getElementsByClassName('Item36'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item36=" + Item36,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item37', function() {
        var Item37= Radio_Value(document.getElementsByClassName('Item37'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item37=" + Item37,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item38', function() {
        var Item38= Radio_Value(document.getElementsByClassName('Item38'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item38=" + Item38,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item39', function() {
        var Item39= Radio_Value(document.getElementsByClassName('Item39'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item39=" + Item39,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item40', function() {
        var Item40= Radio_Value(document.getElementsByClassName('Item40'));
        $.ajax({
            type: "post",
            url: "../formulario_tamiz.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item40=" + Item40,
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
        var Item9= Radio_Value(document.getElementsByClassName('Item9'));
        if(Item9 == 1 || Item9 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 9.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item10= Radio_Value(document.getElementsByClassName('Item10'));
        if(Item10 == 1 || Item10 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 10.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item11= Radio_Value(document.getElementsByClassName('Item11'));
        if(Item11 == 1 || Item11 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 11.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item12= Radio_Value(document.getElementsByClassName('Item12'));
        if(Item12 == 1 || Item12 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 12.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item13= Radio_Value(document.getElementsByClassName('Item13'));
        if(Item13 == 1 || Item13 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 13.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item14= Radio_Value(document.getElementsByClassName('Item14'));
        if(Item14 == 1 || Item14 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 14.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item15= Radio_Value(document.getElementsByClassName('Item15'));
        if(Item15 == 1 || Item15 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 15.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item16= Radio_Value(document.getElementsByClassName('Item16'));
        if(Item16 == 1 || Item16 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 16.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item17= Radio_Value(document.getElementsByClassName('Item17'));
        if(Item17 == 1 || Item17 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 17.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item18= Radio_Value(document.getElementsByClassName('Item18'));
        if(Item18 == 1 || Item18 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 18.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item19= Radio_Value(document.getElementsByClassName('Item19'));
        if(Item19 == 1 || Item19 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 19.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item20= Radio_Value(document.getElementsByClassName('Item20'));
        if(Item20 == 1 || Item20 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 20.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item21= Radio_Value(document.getElementsByClassName('Item21'));
        if(Item21 == 1 || Item21 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 21.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item22= Radio_Value(document.getElementsByClassName('Item22'));
        if(Item22 == 1 || Item22 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 22.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item23= Radio_Value(document.getElementsByClassName('Item23'));
        if(Item23== 1 || Item23 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 23.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item24= Radio_Value(document.getElementsByClassName('Item24'));
        if(Item24 == 1 || Item24 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 24.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item25= Radio_Value(document.getElementsByClassName('Item25'));
        if(Item25 == 1 || Item25 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 25.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item26= Radio_Value(document.getElementsByClassName('Item26'));
        if(Item26 == 1 || Item26 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 26.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item27= Radio_Value(document.getElementsByClassName('Item27'));
        if(Item27 == 1 || Item27 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 27.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item28= Radio_Value(document.getElementsByClassName('Item28'));
        if(Item28 == 1 || Item28 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 28.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
         var Item29= Radio_Value(document.getElementsByClassName('Item29'));
        if(Item29 == 1 || Item29 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 29.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item30= Radio_Value(document.getElementsByClassName('Item30'));
        if(Item30 == 1 || Item30 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 30.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item31= Radio_Value(document.getElementsByClassName('Item31'));
        if(Item31 == 1 || Item31 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 31.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
         var Item32= Radio_Value(document.getElementsByClassName('Item32'));
        if(Item32 == 1 || Item32 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 32.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item33= Radio_Value(document.getElementsByClassName('Item33'));
        if(Item33 == 1 || Item33 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 33.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item34= Radio_Value(document.getElementsByClassName('Item34'));
        if(Item34 == 1 || Item34 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 34.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
         var Item35= Radio_Value(document.getElementsByClassName('Item35'));
        if(Item35 == 1 || Item35 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 35.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item36= Radio_Value(document.getElementsByClassName('Item36'));
        if(Item36 == 1 || Item36 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 36.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item37= Radio_Value(document.getElementsByClassName('Item37'));
        if(Item37 == 1 || Item37 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 37.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
         var Item38= Radio_Value(document.getElementsByClassName('Item38'));
        if(Item38 == 1 || Item38 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 38.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item39= Radio_Value(document.getElementsByClassName('Item39'));
        if(Item39 == 1 || Item39 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 39.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item40= Radio_Value(document.getElementsByClassName('Item40'));
        if(Item40 == 1 || Item40 == '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 40.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        
        if((Item1 == 1 || Item1 == '0') && (Item2 == 1 || Item2 == '0') && (Item3 == 1 || Item3 == '0') && (Item4 == 1 || Item4 == '0') && (Item5 == 1 || Item5 == '0') && (Item6 == 1 || Item6 == '0') && (Item7 == 1 || Item7 == '0') && (Item8 == 1 || Item8 == '0') && (Item9 == 1 || Item9 == '0') && (Item10 == 1 || Item10 == '0') && (Item11 == 1 || Item11 == '0') && (Item12 == 1 || Item12 == '0') && (Item13 == 1 || Item13 == '0') && (Item14 == 1 || Item14 == '0') && (Item15 == 1 || Item15 == '0') && (Item16 == 1 || Item16 == '0') && (Item17 == 1 || Item17 == '0') && (Item18 == 1 || Item18 == '0') && (Item19 == 1 || Item19 == '0') && (Item20 == 1 || Item20 == '0') && (Item21 == 1 || Item21 == '0') && (Item22 == 1 || Item22 == '0') && (Item23 == 1 || Item23 == '0') && (Item24 == 1 || Item24 == '0') && (Item25 == 1 || Item25 == '0') && (Item26 == 1 || Item26 == '0') && (Item27 == 1 || Item27 == '0') && (Item28 == 1 || Item28 == '0') && (Item29 == 1 || Item29 == '0') && (Item30 == 1 || Item30 == '0') && (Item31 == 1 || Item31 == '0') && (Item32 == 1 || Item32 == '0') && (Item33 == 1 || Item33 == '0') && (Item34 == 1 || Item34 == '0') && (Item35 == 1 || Item35 == '0') && (Item36 == 1 || Item36 == '0') && (Item37 == 1 || Item37 == '0') &&  (Item38 == 1 || Item38 == '0') && (Item39 == 1 || Item39 == '0') && (Item40 == 1 || Item40 == '0')) {
            window.location = "https://www.cedisalud.com.co/resultado-tamiz?nombre=<?php echo $Codigo ?>"
        }

    })

</script>
</body>
</html>
                                                                   