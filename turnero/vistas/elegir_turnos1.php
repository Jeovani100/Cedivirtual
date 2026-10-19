<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Turnos Cedisalud</title>
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
    include_once 'app/controlsesion6.inc.php';
    include_once 'app/redireccion.inc.php';
    include_once 'app/repositorioadmin.inc.php';
    include_once 'app/validadoragenda.inc.php';
    include_once 'app/admin.inc.php';
    conexion :: abrir_conexion();
    if (!controlsesion6::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGIN_TURNOS_APARTADO);}
    conexion :: abrir_conexion();
    $id = $_SESSION['id'];
    $Codigo = $_SESSION['Codigo'];
    $sql = "SELECT * FROM admin_turnos WHERE id = $id";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Nombre = $row['Nombre'];
    $sql = "SELECT * FROM dependencias_turnos WHERE Codigo = '$Codigo'";
    $resultado2 = $mysqli->query($sql);
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
    $Dependencia = $row2['Dependencia'];  
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
    /*::-webkit-scrollbar {
        display: none;
    }*/
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
        height: 45px;
        font-family:verdana!important;
        color:#333333;
        padding-left: 30px;
        background:transparent;
        border-image-source: linear-gradient(#963399, #662368);
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
        color: #ffffff!important;
        font-size: 16px;
        border-radius: 0px!important;
        position: relative;
        transition: all 500ms ease;

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
        color:#662368;
        border:2px solid #662368!important;
        font-size:14px!important;
        font-family:verdanab;
    }
    #titulo {
        color:#662368;
        font-family:verdanab;
        font-size:28px;
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
     input[type="file"].inputfile {
        width: 0.1px;
        height: 0.1px;
        color:#000000!important;
        overflow: hidden;
        z-index: -1; 
    }
    .inputfile-8 + label {
        color: #333333;
        font-family:verdana;
        letter-spacing:0.5px;
        border:0;
        font-family:verdanab!important;
    }
    .inputfile-8 + label span {
        padding: 4px;
        margin:0!important;
        font-size:13px;
    }
    @media screen and (max-width: 50em) {
        .inputfile-8 + label strong {
            display: block;
        }
    }
    .etiqueta2 {
        font-size:13px!important;
        font-family:verdanab;
    }
    .fa-cloud-upload {
        background:transparent!important;
        color: #333333;
        border:0;
        margin:0!important;
        padding:0!important;
        font-size:24px!important;
        padding-top:1em;
        text-decoration:none!important;
    } 
    #foto_turnos {
        width:100%;
    }
    input{
        text-transform: uppercase;
    }
    .blink_me {
      animation: blinker 1s linear infinite;
    }
    @keyframes blinker {  
      50% { opacity: 0; }
    }
    .table {
        table-layout: fixed;
        border:hidden!importnat;
        color:#000000;
        width:auto!important;
    }
    .table th {
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        text-align:center;
        padding:0.6em!important;
        border:1px solid #71788e!important;
    }
    .table td {
        text-align:left;
        padding:1em;
        border:1px solid #71788e!important;
        vertical-align:middle!important;
    }
    #borderout {
        background:transparent!important;
        border:0!important;
        width:30%!important;
    }
    .task-delete, .submit {
        width:36px;
        height: 36px;
        font-family:Moristonb;
        color: #999999;
        background:transparent;
        border:1px solid #999999;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-delete:hover, .submit:hover {
        color:#662368;
        border: 1px solid #662368;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
        @media screen and (max-width: 800px) {
        table {
            width:100%; 
        }
        tbody td {
            display: block;
            text-align:center!important;
            width:100%;
            min-height:3em!important;
            margin-top:-1px!important;
        }
        tbody th {
            text-align:center;
        }
        thead th {
            display:none!important;
        }
        tbody th:before {
            content: attr(data-th);
            text-align:center;
        }
        #borderout {
            width:100%!important;
            text-align:center!important;
        }
        #boton {
            float: none!important;
        }
    }
</style>        
</head> 
<body>
<div class="loader"></div>
<div class="container-fluid" style="margin-right:2em;padding:0.5em">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#" style="background:transparent!important;color:#333333!important;font-size:16px;font-family:Moriston">
                <?php echo $Nombre ?>
            </a>
        </li> 
        <li>
            <a href="#" style="background:transparent!important;color:#333333!important;font-size:16px;font-family:Moriston">
                Apartadó
            </a>
        </li> 
        <?php if ($id == 1 || $id == 2) { ?>
        <li>
            <a href="#costumModal1" data-toggle="modal" style="background:transparent!important;color:#333333!important;font-size:16px;font-family:Moriston">
                Diapositivas
            </a>
        </li> <?php } else { ?>
                
        <?php } ?>
        <li>
            <a href="<?php echo RUTA_LOGOUT_TURNERO_APARTADO ?>" style="background:transparent!important;color:#333333!important;font-size:16px;font-family:Moriston">
            <i class="fa fa-share-square-o" aria-hidden="true"></i>&nbsp Cerrar sesión</a>
        </li>
    </ul>
</div>
<div class="container-fluid" align="center"><br>
    <div class="col-md-6">
        <p style="font-family:narrow;color:#000000;font-size:26px;letter-spacing:1px">LLAMADA DE TURNO</p><br>
        <p class="blink_me" id="titulo" ><?php echo $Dependencia ?></p><br>
        <form role="form" id="form_usuarios"><br>
        <div id="login">
            <p style="color:#333333;font-family:Narrow;letter-spacing:2px;font-size:20px;text-align:left">Nombre de usuario:</p> 
            <input type="text" id="texto" class="form-control" style="font-family:verdanai;width:100%!important" placeholder="Escriba aquí..."></input></p><br>
            <button id="boton" type="submit" name="login" class="btn btn btn-default btn-block" style="background:#662368;width:10em;float:left">Llamar</button>
        </div>
        </form><br><br>
    </div>
    <div class="col-md-6">
    <p style="font-family:narrow;color:#000000;font-size:26px;letter-spacing:1px;text-align:center!important">LLAMADAS</p><br>
     <p style="border:0;float:left;bottom:1em;position:relative"><button class="fa fa-refresh" style="background:transparent;border-radius:0;font-size:23px;color:#000000;width:2em!important;border: 1px solid #333333 !important;" data-title="Actualizar"></button></p>
         <table class="table" style="width:100%!important">
            <thead>
                <tr>
                <th align="center" style="width:100%">Nombre de usuario</th>
                <th style="width:60%">Dependencia</th>
                <th style="width:40%">Hora</th>
                <td id="borderout" style="width:10%"></th>
                </tr>
                </thead>    
                <tbody style="border:0!important" id="turnos1" align="center"></tbody>
        </table>
    </div>
</div>
<div id="costumModal1" class="modal" data-easein="fadeIn" data-backdrop="static"> 
    <div class="modal-dialog modal-m" align="justify" style="border-radius:0px;background-color:#ffffff;z-index:9999;height:auto">
        <div class="modal-header">
            <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
        </div>
        <div id="content" style="text-align:center;margin-top:8em;margin-left:45%;position:absolute;z-index:9999"></div>
        <div class="modal-body" style="text-align:center">
            <div class="row" id="titulo">DIAPOSITIVAS</div>
            <div style="margin-left:-3em">
            <form enctype="multipart/form-data"  method="post">
                <input title="Adjuntar" type="file" name="archivo" id="file-836" class="inputfile inputfile-8" data-multiple-caption="{count} archivos seleccionados" />
                <label for="file-836"><br>
                <span class="iborrainputfile"></span>
                <strong style="font-family:verdana;margin-left:-10em;margin-bottom:10px;background:trasparent!important" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="fa fa-paperclip" style="font-size:24px"></span><span class="etiqueta2" >Adjuntar Img</span>&nbsp&nbsp&nbsp&nbsp<button title="Subir" type ="submit" name="enviar" id="boton836" class="fa fa-cloud-upload"/><span class="etiqueta2"> Subir</span></button></strong><br>
            </form><br>
            </div>     
            <div style="border:0!important" id="imagen" align="center"></div>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div>
 <div id="costumModal2" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <div id="mensaje"></div>
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="titulo2" style="position:relative;bottom:1em;text-align:center;z-index:4!important"><br><a href="https://www.cedisalud.com"><img src="../imagine/logo_v.png" width="180"></a></div>
<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.ui.min.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.flexslider.js"></script>
<script src="<?php echo RUTA_JS ?>main.js"></script> 
<script src="<?php echo RUTA_JS ?>custom-file-input.js"></script>
<script>
    $(document).ready(function (){
        $(".loader").fadeOut("slow");
      //  $("#costumModal1").modal("show");
    });
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
        var o = $(this).attr("data-easein");
        "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    fetchTasks() 
    function fetchTasks() {
            var id = '<?php echo $id ?>';
            $.ajax({
                type: "post",
                url: "../select_turno.php",
                data: "id=" + id,
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `${task.Dependencia}`
                    });
                    $('#DependenciaIn').html(template);
                }
            });
    }
      
    $(document).ready(function () {
        $("#boton836").on('click', function(event) {
            event.preventDefault();
            var formData = new FormData();
            var files = $('#file-836')[0].files[0];
            formData.append('file',files);
            $('#content').html('<div class="loading"><img src="../imagine/carga6.gif" width="70"/></div>');
            $.ajax({
                url: '../insertar_img_turnos.php',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $("#mensaje").html(response);
                    $(".loading").fadeOut("slow");
                    Tasks_img();
                }
            });
            return false;
        });
        $(document).on('click', '.eliminar_img', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const Codigo_img = $(element).attr('taskId');
            $.ajax({
                type: "post",
                url: "../eliminar.php",
                data: "Codigo_img=" + Codigo_img,
                success: function(response) {
                    Tasks_img();
                }
            });
        });
        Tasks_img();
        function Tasks_img() {
            var id_admin = 123654789;
            $.ajax({
                type: "post",
                url: "../tasks24.php",
                data: "id_admin=" + id_admin,
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `<div taskId="${task.Codigo}"><div><img src="../imagine/${task.Codigo}" id="foto_turnos"></img><br><button class="eliminar_img" data-title="Eliminar" style="text-align:center;background:transparent;border:0;margin-top:1em"><span class="fa fa-trash" style="font-size:25px!important;color:#e62e00"></span></button><br><br></div></div>`
                    });
                    $('#imagen').html(template);
                }
            });
        }
    });
    
    $(document).ready(function () {
       // setInterval(function(){fetchTasks5();},500);
        $('#form_usuarios').submit(e => {
            e.preventDefault();
            myDate = new Date();
            año = myDate.getFullYear();
            mes = myDate.getMonth() + 1; 
            day = myDate.getDate();
            hours = myDate.getHours();
            minutes = myDate.getMinutes();
            seconds = myDate.getSeconds();
            fecha = (año+'-'+mes+'-'+day+' '+hours+':'+minutes+':'+seconds)
            var Nombre0=$('#texto').val();
            var Nombre = new String(Nombre0);
            Nombre = Nombre.toUpperCase();
            var dependencia= '<?php echo $Dependencia ?>';
            const postData = {
                Dependencia:dependencia,
                Nombre:Nombre,
                fecha:fecha,
            };
            const url = '../insertar6.php';
            $.post(url,  postData, (response) => {
                const tasks = JSON.parse(response);
                    let mensaje = '';
                    let confirmacion = '';
                    tasks.forEach(task => {
                        mensaje += `${task.mensaje}`
                        confirmacion += `${task.confirmacion}`
                    });
                    if(confirmacion == 1){
                        $("#costumModal2").modal("show");
                         $('#mensaje').html(mensaje);
                    }
                    
                   
                fetchTasks5();
            });
        });
         $(document).on('click', '.task-delete', (e) => {
            e.preventDefault();
            $("#costumModal4").modal("show");
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id_ = $(element).attr('taskId');
                $.ajax({
                    type: "post",
                    url: "../eliminarbdg.php",
                    data: "id_turnero=" + id_,
                    success: function(response) {
                        fetchTasks5();
                    }
                });
        }); 
         $(document).on('click', '.fa-refresh', (e) => {
           fetchTasks5();
        });
        fetchTasks5();
        function fetchTasks5() {
            $.ajax({
                type: "post",
                url: "../turnos1.inc.php",
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    
                    tasks.forEach(task => {
                        template += `
                            <tr taskId="${task.id}">
                            <td style="font-family:verdanab">${task.Nombre}</td>
                            <td>${task.Dependencia}</td>
                            <td style="text-align:center">${task.Hora}</td>
                            <td id="borderout"><button class="task-delete" data-title="Eliminar"><span class="fa fa-trash"></span></button></td>
                            </tr>`
                       
                    });
                    $('#turnos1').html(template);
                    
                }
            });
        }
    });    
   /* $(document).ready(function () {
        setInterval(function(){fetchTasks4();},500);
        fetchTasks4();
        function fetchTasks4() {
            myDate = new Date();
            año = myDate.getFullYear();
            mes = myDate.getMonth() + 1; 
            day = myDate.getDate();
            hours = myDate.getHours();
            minutes = myDate.getMinutes();
            seconds = myDate.getSeconds();
            
            fecha = (año+'-'+mes+'-'+day+' '+hours+':'+minutes+':'+seconds)
            $.ajax({
                type: "post",
                url: "../turnos00_1.inc.php",
                data: "fecha=" + fecha,
                success: function(response) {
                    const tasks = JSON.parse(response);
                    var cuenta1 = tasks[1];
                    let template = '';
                    let Nombre = '';
                    let Dependencia = '';
                    let Contador = '';
                    tasks.forEach(task => {
                        template += `<tr class="blink_me" style="font-family:verdanab;font-size:26px;text-align:center;color:#000000;height:5em"><td style="vertical-align: middle!important">${task.Nombre}<br><p style="color:#666666;font-size:24px;">${task.Dependencia}</p></td></tr>`
                        Nombre += `${task.Nombre}`
                        Dependencia += `${task.Dependencia}`
                        Contador += `${task.Contador}`
                    });
              
                    $('#turnos0').html(template);
                    if(Contador == 1) {
                         //$('#Nombre').html(Nombre+' en '+Dependencia);
                         document.getElementById("boton").style.backgroundColor ="#cccccc";
                         $('#boton').prop('disabled', true);
                    } else if (Contador == 0){
                         document.getElementById("boton").style.backgroundColor = '#662368';
                         $('#boton').prop('disabled', false);
                    }
                }
            });
        }
     });*/
    
</script>
</body>
</html>