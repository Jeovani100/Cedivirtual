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

    $sql = "INSERT INTO formulario_neurotoxicos (id_admin, Item1, Item2, Item3, Item4, Item5, Item6,Item7,Item8,Item9,Item10,Item11,Item12,Item13,Item14,Item15,Item16,Items,Codigo,Fecha_registro) VALUES ('$Codigo', '0', '0', '0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','$Codigo2',NOW())"; 
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
    <div class="ventana_flotante col-md-10 col-md-offset-1"><br>
        <p style="text-align:center;font-family:Moristonb;font-size:20px;color:#333333">ENCUESTA DE SÍNTOMAS NEUROTÓXICOS Q16</p><br>
        
        <form name="form1" id="form1">
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">1.</span> ¿Ha tenido alteracion en la memoria en las ultimas semanas olvidadizo(a)?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item1" class="Item1" id="Item_1" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_1"></label>
            <input type="radio" name="Item1" class="Item1" id="Item_2" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_2"></label>
        </div>
         <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">2.</span> ¿Le han dicho sus familiares y/o amigos que es olvidadizo(a)?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item2" class="Item2" id="Item_3" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_3"></label>
            <input type="radio" name="Item2" class="Item2" id="Item_4" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_4"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">3.</span> ¿A menudo se le olvida realizar actividades que considera importantes?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item3" class="Item3" id="Item_5" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_5"></label>
            <input type="radio" name="Item3" class="Item3" id="Item_6" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_6"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">4.</span> ¿Le es difícil entender las noticias, programas o novelas que ve en TV o escucha en la radio?”</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item4" class="Item4" id="Item_7" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_7"></label>
            <input type="radio" name="Item4" class="Item4" id="Item_8" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_8"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">5.</span>	¿Tiene a menudo dificultad para concentrarse?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item5" class="Item5" id="Item_9" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_9"></label>
            <input type="radio" name="Item5" class="Item5" id="Item_10" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_10"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">6.</span> ¿Se siente a menudo enojado(a) sin motivo?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item6" class="Item6" id="Item_11" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_11"></label>
            <input type="radio" name="Item6" class="Item6" id="Item_12" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_12"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">7.</span> ¿Se siente a menudo abatido(a) o triste sin motivo?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item7" class="Item7" id="Item_13" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_13"></label>
            <input type="radio" name="Item7" class="Item7" id="Item_14" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_14"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">8.</span> ¿Le cuesta decidirse realizar actividades que Ud. sabe debe realizar?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item8" class="Item8" id="Item_15" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_15"></label>
            <input type="radio" name="Item8" class="Item8" id="Item_16" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_16"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">9.</span> ¿Se siente anormalmente cansado?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item9" class="Item9" id="Item_17" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_17"></label>
            <input type="radio" name="Item9" class="Item9" id="Item_18" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_18"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">10.</span> ¿Siente a veces  una presión sobre el pecho?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item10" class="Item10" id="Item_19" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_19"></label>
            <input type="radio" name="Item10" class="Item10" id="Item_20" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_20"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">11.</span> ¿Ha sentido de pronto como que se va a caer al estar de pie o caminando?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item11" class="Item11" id="Item_21" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_21"></label>
            <input type="radio" name="Item11" class="Item11" id="Item_22" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_22"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">12.</span> ¿Siente a menudo punzadas dolorosas, adormecimiento u hormigueo en alguna parte del cuerpo?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item12" class="Item12" id="Item_23" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_23"></label>
            <input type="radio" name="Item12" class="Item12" id="Item_24" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_24"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">13.</span> ¿Le resulta difícil abrocharse los botones?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item13" class="Item13" id="Item_25" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_25"></label>
            <input type="radio" name="Item13" class="Item13" id="Item_26" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_26"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">14.</span> ¿Siente que ha perdido fuerza en sus brazos o en sus piernas?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item14" class="Item14" id="Item_27" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_27"></label>
            <input type="radio" name="Item14" class="Item14" id="Item_28" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_28"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">15.</span> ¿Ahora siente menos que antes en sus manos o pies?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item15" class="Item15" id="Item_29" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_29"></label>
            <input type="radio" name="Item15" class="Item15" id="Item_30" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_30"></label>
        </div>
        <div><br>
            <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:1px"><span style="color:#006699">16.</span> ¿A menudo se despierta, costándole luego conciliar el sueño?</p>
            <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
            <input type="radio" name="Item16" class="Item16" id="Item_31" value="1"/>&nbspSi&nbsp<label id="check1" for="Item_31"></label>
            <input type="radio" name="Item16" class="Item16" id="Item_32" value="0"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo&nbsp<label id="check1" for="Item_32"></label>
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
    

    $(document).on('click', '.Item1', function() {
        var Item1= Radio_Value(document.getElementsByClassName('Item1'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item1=" + Item1,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item2', function() {
        var Item2= Radio_Value(document.getElementsByClassName('Item2'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item2=" + Item2,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item3', function() {
        var Item3= Radio_Value(document.getElementsByClassName('Item3'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item3=" + Item3,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item4', function() {
        var Item4= Radio_Value(document.getElementsByClassName('Item4'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item4=" + Item4,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item5', function() {
        var Item5= Radio_Value(document.getElementsByClassName('Item5'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item5=" + Item5,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item6', function() {
        var Item6= Radio_Value(document.getElementsByClassName('Item6'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item6=" + Item6,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item7', function() {
        var Item7= Radio_Value(document.getElementsByClassName('Item7'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item7=" + Item7,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item8', function() {
        var Item8= Radio_Value(document.getElementsByClassName('Item8'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item8=" + Item8,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item9', function() {
        var Item9= Radio_Value(document.getElementsByClassName('Item9'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item9=" + Item9,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item10', function() {
        var Item10= Radio_Value(document.getElementsByClassName('Item10'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item10=" + Item10,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item11', function() {
        var Item11= Radio_Value(document.getElementsByClassName('Item11'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item11=" + Item11,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item12', function() {
        var Item12= Radio_Value(document.getElementsByClassName('Item12'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item12=" + Item12,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item13', function() {
        var Item13= Radio_Value(document.getElementsByClassName('Item13'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item13=" + Item13,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item14', function() {
        var Item14= Radio_Value(document.getElementsByClassName('Item14'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item14=" + Item14,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item15', function() {
        var Item15= Radio_Value(document.getElementsByClassName('Item15'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item15=" + Item15,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '.Item16', function() {
        var Item16= Radio_Value(document.getElementsByClassName('Item16'));
        $.ajax({
            type: "post",
            url: "../formulario_neurotoxicos.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item16=" + Item16,
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
       
        if((Item1 == 1 || Item1 == '0') && (Item2 == 1 || Item2 == '0') && (Item3 == 1 || Item3 == '0') && (Item4 == 1 || Item4 == '0') && (Item5 == 1 || Item5 == '0') && (Item6 == 1 || Item6 == '0') && (Item7 == 1 || Item7 == '0') && (Item8 == 1 || Item8 == '0') && (Item9 == 1 || Item9 == '0') && (Item10 == 1 || Item10 == '0') && (Item11 == 1 || Item11 == '0') && (Item12 == 1 || Item12 == '0') && (Item13 == 1 || Item13 == '0') && (Item14 == 1 || Item14 == '0') && (Item15 == 1 || Item15 == '0') && (Item16 == 1 || Item16 == '0')) {
            window.location = "https://www.cedisalud.com.co/resultado-neurotoxicos?nombre=<?php echo $Codigo2 ?>"
        }

    })

</script>
</body>
</html>