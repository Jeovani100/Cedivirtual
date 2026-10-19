<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Llamado de turnos</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>style-responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>zabuto_calendar.css" rel="stylesheet">
<?php
    error_reporting(0);
    include_once 'app/redireccion.inc.php';
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion6.inc.php';
    include_once 'app/repositorioadmin.inc.php';
    include_once 'app/validadorturnos.inc.php';
    include_once 'app/admin.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    function generarCodigoAleatorio($longitud = 10) {
        $caracteres = '1234567890abcdefghijklmnopqrstuvwxyz';
        $Codigo = '';
        for ($i = 0; $i < $longitud; $i++) {
            $Codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $Codigo;
    }
    $Codigo=generarCodigoAleatorio(6);
    if (isset($_POST['login'])) {
        $Dependencia = $_POST['Dependencia'];
        conexion::abrir_conexion();
        $validador = new validadorlogin($_POST['Email'], $_POST['Clave'], conexion::obtener_conexion());
        if ($validador->obtener_error() === '' && !is_null($validador->obtener_usuario())) {
            $id = $validador->obtener_usuario()->obtener_id();
            $sql = "SELECT * FROM admin_turnos WHERE id = $id";
            $resultado = $mysqli->query($sql);
            $row = $resultado->fetch_array(MYSQLI_ASSOC);
            $Nombre = $row['Nombre'];
            $sql = "INSERT INTO dependencias_turnos (Codigo, Dependencia, Nombre, Fecha_registro) VALUES ('$Codigo','$Dependencia', '$Nombre', NOW())";
            $resultado = $mysqli->query($sql);
            controlsesion6::iniciar_sesion($id , $Codigo);
                redireccion::redirigir(RUTA_ELEGIR_TURNOS_APARTADO);
        }
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
        font-family:Verdana;
        line-height:3rem!important;
        padding: 0px !important;
        margin: 0px !important;
        text-rendering: optimizeLegibility; 
        overflow-x:hidden; 
        background: -webkit-linear-gradient(to right, #f2f2f2, #d9d9d9);
        background: linear-gradient(to right, #f2f2f2, #d9d9d9);
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

    #login label {
        position: absolute;
        display: block;
        width: 35px;
        height: 48px;
        line-height: 35px;
        text-align: center;   
    }
    #login input {
        width: 270px;
        height: 40px;
        font-family:verdana!important;
        color:#333333;
        padding-left:10px;
        background:transparent;
        border-image-source: linear-gradient(#2d2745, #4a4072);
        border-width: 3pt;
        border-image-slice: 1;
    }
     #login select {
        width: 270px;
        height: 40px;
        font-family:verdana!important;
        color:#333333;
        padding-left:10px;
        background:transparent;
        border-image-source: linear-gradient(#2d2745, #4a4072);
        border-width: 3pt;
        border-image-slice: 1;
    }
    #login p {
        line-height:3rem!important;
        text-align:left;
        color:#333333;
        font-family:verdanabi;
        font-size:13px;
    }
    #registro label {
        position: absolute;
        display: block;
        width: 35px;
        height: 48px;
        line-height: 35px;
        font-size:16px;
        margin-left:0.6em;
    }
     #registro input {
        width: 270px;
        height: 35px;
        font-family:verdana!important;
        color:#ffffff!important;
        padding-left: 15px;
        border-radius:0px;
        background:transparent;
        border-image-source: linear-gradient(#666666, #000000);
        border-width: 3pt;
        border-image-slice: 1;
    }
    .clientes  {
        width:270px;
        text-align:left;
        color:#000000;
        font-family:verdana;
        font-size:14px;
        margin-top:0.8em;
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
    #boton:after {
        top: -100%;
        left: 0px;
        height: 100%;
        width: 100%;
        position: absolute;
        background: rgb(250, 255, 189);
        color:rgba(0,0,0,0.87)!important;
        font-family:verdanab;
        font-size: 16px;
        line-height:2em;
        border-radius:0px;
        content: 'Inicio';
        transform-origin: left bottom;
        transform: rotateX(90deg);
    }
    #boton2 {
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
    #boton2:after {
        top: -100%;
        left: 0px;
        height: 100%;
        width: 100%;
        position: absolute;
        background: rgb(250, 255, 189);
        color:rgba(0,0,0,0.87)!important;
        font-family:verdanab;
        font-size: 16px;
        line-height:2em;
        border-radius:0px;
        content: 'Siguiente';
        transform-origin: left bottom;
        transform: rotateX(90deg);
    }
    #boton2,
    #boton {
        transform-style: preserve-3d;
    }
    #boton2:hover,
    #boton:hover {
        transform-origin: center bottom;
        transform: rotateX(-90deg) translateY(100%)
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
        margin-left:28px!important;
        margin-top:10px!important;
    }
    #check1::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 18px;
        height: 18px;
        left: 0;
        margin-left: -12px;
        background-color:rgb(250, 255, 189);
        box-shadow:0px 4px 3px rgba(0,0,0,.1);
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        width: 18px;
        height: 18px;
        left: -14px;
        top: -7px;
        font-size: 11px;
    }
    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
        font-size: 22px!important;
        color:#000000;
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
        #logo {
            position:relative!important;
            width:100%!important;
            margin-left:55%!important;
        } 
        #costumModal1 .modal-dialog,
        #costumModal2 .modal-dialog,
        #costumModal3 .modal-dialog {
            margin:0!important;
            padding:0!important;
            width:100%!important;
        }
        #titulo2,
        #titulo {
        position:relative!important;
        margin-top:-1.1em!important;
        margin-bottom:-1.5em!important;
        }
        #trebol {
        position:relative!important;
        margin-top:-7em!important;
        float:right;
        }
        #registro label {
            position: absolute;
            display: block;
            width: 35px;
            height: 48px;
            line-height: 35px;
            font-size:16px;
            margin-left:2em;
            
        }
        #correo {
            font-size:13px!important;
        }
    }
    .alert {
        background:transparent;
        border-radius:0;
        width: 270px;
        color:#4a4072;
        border:2px solid #4a4072!important;
        font-size:14px!important;
        font-family:verdanab;
    }
    #titulo {
        position:fixed;
        width:100%;
        background: -webkit-linear-gradient(to right,#2d2745, #4a4072);  
        background: linear-gradient(to right,#2d2745, #4a4072);
        color:#ffffff;
        font-family:verdana;
        font-size:24px;
        top:0!important;
        padding:0.5em;
        margin:0;
        letter-spacing:1px;
        z-index:4;
    }
     #titulo2 {
        width:100%;
        color:#17181c;
        font-family:narrow;
        font-size:20px;
        bottom:0!important;
        padding:0.5em;
        margin:0;
        letter-spacing:1px;
    }
    @keyframes rotate {from {transform: rotate(0deg);}
    to {transform: rotate(360deg);}}
        @-webkit-keyframes rotate {from {-webkit-transform: rotate(0deg);}
        to {-webkit-transform: rotate(360deg);}}
        #logo_img{
            -webkit-animation: 3s rotate linear infinite;
            animation: 6s rotate linear infinite;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
    }
    #logo_img {
        -webkit-animation-direction: reverse;
        animation-direction: reverse;
    }
    #casino2,
    #casino1 {
        opacity:0.9;
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
    ::-webkit-input-placeholder {color:#666666!important; } 
    :-moz-placeholder {color:#666666!important; } 
    ::-moz-placeholder {color:#666666!important; } 
    :-ms-input-placeholder {color:#666666!important; }
    .titulo {
        background: rgba(153, 255, 204);
        -webkit-background-clip: text;  
        -webkit-text-fill-color: transparent; 
    } 
    .back_light:after {
        position: absolute;
        content: "";
        top: 0vw;
        z-index: -1;
        height: 100%;
        width: 100%;
        transform: scale(1);
        opacity:0.9;
        background: linear-gradient(270deg, #8f92a3,#22242a);
        background-size: 200% 200%;
        animation: animateGlow 10s ease infinite;
    }
    @keyframes animateGlow {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
</style>        
</head> 
<body>
<div class="loader"></div>
<div class="container-fluid" align="center"><br>
    <div class="row" id="titulo">LLAMADO DE TURNOS PARA PACIENTES</div><br>
        <div class="panel panel-body" style="width:24em;border:0;background:transparent">
            <form role="form" method="post" action="<?php echo RUTA_LOGIN_TURNOS_APARTADO ?>"><br>
            <div style="padding-left:1em; padding-right:1em">
                <div id="login">
                    <p style="color:#333333;font-family:Narrow;letter-spacing:2px;font-size:18px;text-align:left">Dependencia:
                    <select type="text" name="Dependencia" class="form-control" style="padding-left:6px;width:100%!important">
                        <option></option>         
                        <option >Toma de muestras</option>         
                        <option >Recepción 1</option>
                        <option >Recepción 2</option>
                        <option >Enfermería</option>
                        <option >Psicología</option>
                        <option >Optometría</option>         
                        <option >Espirometría</option>
                        <option >Consultorio 1</option>         
                        <option >Consultorio 2</option>
                        <option >Consultorio 3, piso 2</option>
                        <option >Fonoaudiología</option>
                        <option >Óptica </option>
                        <!--<option></option>         
                        <option >Vacunación</option>
                        <option >Toma de muestras Especiales</option>
                        <option >Toma de muestras</option>         
                        <option >Recepción 1</option>
                        <option >Recepción 2</option>
                        <option >Recepción 3</option>         
                        <option >Recepción 4</option>
                        <option >Psicométrico</option>
                        <option >Optometría</option>         
                        <option >Laboratorio</option>
                        <option >Espirometría</option>
                        <option >Consultorio 1</option>         
                        <option >Consultorio 2</option>
                        <option >Consultorio 3</option>
                        <option >Consultorio 4</option>         
                        <option >Consultorio 5</option>
                        <option >Consultorio 6</option>
                        <option >Consultorio 7</option>         
                        <option >Consultorio 8</option>
                        <option >Audiometría </option>
                        <option >Óptica </option>
                        -->
                    </select></p>
                    <p style="color:#333333;font-family:Narrow;letter-spacing:2px;font-size:18px;text-align:left">Correo electrónico:
                    <input type="Email" name="Email" class="form-control" style="font-family:verdanai;width:100%!important" placeholder="************"></input></p>
                    <p style="color:#333333;font-family:Narrow;letter-spacing:2px;font-size:18px;text-align:left">Contraseña:
                    <input type="password" name="Clave"  class="form-control" style="font-family:verdanai;width:100%!important" placeholder="************"></input></p><br>
                    <button id="boton" type="submit" name="login" class="btn btn btn-default btn-block" style="width:100%">Inicio</button>
                     <?php if (isset($_POST['login'])) { $validador->mostrar_error(); }?>
                </div>
            </div>
            </form>
        </div>
</div>
<div id="titulo2" style="position:absolute;text-align:center;z-index:9999!important"><br><br><a href="https://www.cedisalud.com"><img src="../imagine/logo_v.png" width="180"></a></div>
<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.ui.min.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.flexslider.js"></script>
<script src="<?php echo RUTA_JS ?>main.js"></script> 
<script>
    $(document).ready(function () {
        $(".load").fadeOut("slow");
        $('#verclave2').hide();
        $('#verclave4').hide();
    });
    function verclave1(){
        $('#clavep').get(0).type = 'text';
        $('#verclave1').hide();
        $('#verclave2').show();
    };
    function verclave2(){
        $('#clavep').get(0).type = 'password';
        $('#verclave2').hide();
        $('#verclave1').show();
    };
    function verclave3(){
        $('#clavep2').get(0).type = 'text';
        $('#verclave3').hide();
        $('#verclave4').show();
    };
    function verclave4(){
        $('#clavep2').get(0).type = 'password';
        $('#verclave4').hide();
        $('#verclave3').show();
    };
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
            var o = $(this).attr("data-easein");
            "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    $(document).ready(function (){
        $(".loader").fadeOut("slow");
        $("#mostrarmodal").modal("show");
    });
    let spans = document.querySelectorAll('.word span');
        spans.forEach((span, idx) => {
            span.addEventListener('click', (e) => {
                e.target.classList.add('active');
            });
            span.addEventListener('animationend', (e) => {
                e.target.classList.remove('active');
            });
            setTimeout(() => {
                span.classList.add('active');
            }, 750 * (idx + 1))
    }); 
</script>
</body>
</html>