<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio administrador</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>style-responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>zabuto_calendar.css" rel="stylesheet">
<?php
    //error_reporting(0);
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion.inc.php';
    include_once 'app/redireccion.inc.php';
    include_once 'app/repositorioadmin.inc.php';
    include_once 'app/validadorlogin.inc.php';
    include_once 'app/admin.inc.php';
    if (isset($_POST['login'])) {
        conexion::abrir_conexion();
        $validador = new validadorlogin($_POST['Email'], $_POST['Clave'], conexion::obtener_conexion());
        if ($validador->obtener_error() === '' && !is_null($validador->obtener_usuario())) {
            $id = $validador->obtener_usuario()->obtener_id();
            $sql = "SELECT * FROM admin WHERE id = '$id'";
            $resultado = $mysqli->query($sql);
            $row = $resultado->fetch_array(MYSQLI_ASSOC);
            $id_ = $row['id_admin'];
            if ($id_ == '') {
                $sql = "UPDATE admin SET id_admin = '$id' WHERE id = '$id'";
                $result = $mysqli->query($sql);
            }
            controlsesion::iniciar_sesion(
            $validador->obtener_usuario()->obtener_id(), $validador->obtener_usuario()->obtener_Nit(), $validador->obtener_usuario()->obtener_Razon());
            $Activo  =  $validador->obtener_usuario()->obtener_Activo();
            $Activo2 =  $validador->obtener_usuario()->obtener_Activo2();
            $Activo3 =  $validador->obtener_usuario()->obtener_Activo3();
            $Activo4 =  $validador->obtener_usuario()->obtener_Activo4();
            $Activo5 =  $validador->obtener_usuario()->obtener_Activo5();
            if ($Activo == 1) {
                redireccion::redirigir(RUTA_SISTEMA);
            } else if ($Activo2 == 1) {
                redireccion::redirigir(RUTA_PRESENTACION_PSICOSOCIAL);
            } else if ($Activo3 == 1) {
                redireccion::redirigir(RUTA_GESTOR_AUSENTISMO);
            } else if ($Activo4 == 1) {
                redireccion::redirigir(RUTA_GESTOR_AGENDA);
            } else if ($Activo5 == 1) {
                redireccion::redirigir(RUTA_DIAGNOSTICO_);
            } else if ($Activo5 == 2) {
                redireccion::redirigir(RUTA_DIAGNOSTICO__);
            } else if ($Activo == 2) {
                redireccion::redirigir(RUTA_PSICOSOCIAL);
            }
        }
        conexion::cerrar_conexion();
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
        background: -webkit-linear-gradient(to right, #4f5463,#f58634);
        background: linear-gradient(to right, #4f5463, #17181c);
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
        z-index: 4;
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
    #login input {
        width: 100%;
        height: 35px;
        padding-left: 30px;
        background:#ffffff;
        border-radius:0px;
        border-color:#678e98!important;
        border-width:1px!important;
    }
    #login p {
        line-height:3rem!important;
        text-align:left;
        color:#333333;
        font-family:verdanabi;
        font-size:13px;
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
    }
    .alert {
        background:#ffffff;
        border-radius:0;
        width: 270px;
        color:#e7744f;
        border:1px solid #e7744f!important;
        font-size:14px!important;
        margin:0!important;
    }
    #titulo {
        background: -webkit-linear-gradient(to right,#dfb638, #c8c5e2);  
        background: linear-gradient(to right,#dfb638, #c8c5e2);
        color:#ffffff;
        font-family:narrow;
        font-size:28px;
        margin-top:-15px!important;
        padding:0.5em;
        letter-spacing:1px;
    }
</style>        
</head> 
<body>
    <!--<div class="loader"></div>-->
    <div class="container-fluid" align="center"><br>
        <div class="panel panel-body" style="width:24em;border:3px solid #2f323a!important;border-radius:0">
            <div class="row" id="titulo"><img src="https://www.cedisalud.com.co/imagine/etiqueta1.png" width="160"></div><br>
            <form role="form" method="post" action="<?php echo RUTA_LOGIN ?>">
            <div><font style="color:#2f323a;font-family:Narrow;letter-spacing:1px;font-size:24px">Iniciar sesión</font></div> 
            <div style="padding-left:1em; padding-right:1em">
                <div id="login"><br>                                 
                    <p align="left">Correo Electrónico:
                    <input type="Email" class="form-control" name="Email" style="font-family:verdana!important" placeholder=""  <?php if (isset($_POST['login']) && isset($_POST['Nit']) && !empty($_POST['Email'])) { echo 'value="' . $_POST['Email'] . '"'; } ?> required autofocus></input></p>
                </div>
                <div id="login">
                    <p align="left">Clave:
                    <input type="password" name="Clave" id="Clave" class="form-control" style="font-family:verdanai" placeholder="************" required></input></p><br>
                    <button id="boton" type="submit" name="login" class="btn btn btn-default btn-block" style="width:100%">Inicio</button>
                    <?php if (isset($_POST['login'])) { $validador->mostrar_error(); }?>
                </div>
            </div><br>
            <div id="logo"><a href="https://www.cedisalud.com.co/login_usuario"><img src="../imagine/logo_v.png" width="140"><h4 style="color:#000000;font-family:narrow;letter-spacing:3px">Inicio de empleados</h4></a></div>
            <!--<p align="center">Si&nbspno&nbsptienes&nbspun&nbspusuario,&nbsp<a href="<?php echo RUTA_REGISTRO ?>" style="font-size:13px;font-family:verdanabi;text-align:center;text-decoration:none">regístrate</a></p>
            <p align="center"><a href="<?php echo RUTA_RECUPERARPH ?>" style="font-size:13px;font-family:verdanabi;text-align:center;text-decoration:none">¿Has olvidado tu contraseña?</a></p><br>-->
            </form>
        </div><br>
    </div> 
<?php if( $_GET['nombre'] != "") { ?>
    <div id="mostrarmodal" class="modal" data-easein="tada"> 
        <div class="modal-dialog modal-m">
            <div>
                <div class="panel panel-default" style="border-radius:0px">
                    <div class="modal-header">
                        <a type="button" class="close" data-dismiss="modal" style="font-size:26px;font-family:verdanab"><span class="fa fa-times" style="color:#000000!important"></span></a>
                    </div >
                    <div class="panel-default text-center" style="font-family:Raleway;padding-left:10%;padding-right:10%"><br>
                        <font style="font-size:24px"><span class="glyphicon glyphicon-ok" style="color:#e7744f"></span><span style="font-size:18px;font-family:verdanab;color:#999999">&nbspCORRECTO</span></font><br>
                        <font style="color:#5d8089;font-size:28px;font-family:Moriston">¡Gracias por registrarte <?php echo $_GET['nombre'] ?>!</font><br>                               
                        <p style="font-size:14px;font-family:verdanabi">Inicia sesión para aplicar la prueba</p> 
                    </div><br>
                    <div class="modal-footer">             
                        <br> 
                    </div>
                </div>
            </div>
        </div>
        </ul>
    </div> 
    <?php }; 
    if( $_GET['envio'] == "true") { ?>
    <div id="mostrarmodal" class="modal" data-easein="tada"> 
        <div class="modal-dialog modal-m">
            <div>
                <div class="panel panel-default" style="border-radius:0px">
                    <div class="modal-header">
                        <a type="button" class="close" data-dismiss="modal" style="font-size:26px;font-family:verdanab"><span class="fa fa-times" style="color:#000000!important"></span></a>
                    </div >
                    <div class="panel-default text-center" style="font-family:Raleway;padding-left:10%;padding-right:10%"><br>
                        <font style="font-size:24px"><span class="glyphicon glyphicon-ok" style="color:#008000;opacity:0.7"></span><span style="font-size:18px;font-family:verdanab;color:#999999">&nbspCORRECTO</span></font><br><br>
                        <p style="font-family:verdana;color:#666666;font-size:14px"><font>Enviamos un correo con el enlace que te permitirá cambiar la contraseña. </font>Si el correo llegó a tu carpeta de spam, confirma que <font style="color:#e7744f">no es spam</font> para activar el enlace.<br>                               
                    </div><br>
                    <div class="modal-footer">             
                        <br> 
                    </div>
                </div>
            </div>
        </div>
        </ul>
    </div> 
    <?php } ?>
<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.ui.min.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.flexslider.js"></script>
<script src="<?php echo RUTA_JS ?>main.js"></script> 
<script>
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