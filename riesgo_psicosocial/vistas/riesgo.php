<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Riesgo Psicosocial</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>style-responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>zabuto_calendar.css" rel="stylesheet">

<?php
    error_reporting(0);
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion2.inc.php';
    include_once 'app/redireccion.inc.php';
    include_once 'app/repositorioadmin.inc.php';
    include_once 'app/validadorloginusuario.inc.php';
    include_once 'app/admin.inc.php';
   // include_once 'contador/usuarios.php';
 //    include_once 'contador/visitas.php';
    if (!controlsesion2::sesion_iniciada()) {
        redireccion::redirigir(RUTA_LOGIN_USUARIO);
    }
    $Cedula = $_SESSION['Cedula'];
    $sql = "SELECT * FROM datosg WHERE Cedula = '$Cedula' ORDER BY id DESC";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $id = $row['id'];
    $Cedula = $row['Cedula'];
    $Nombre = $row['Nombre'];
    $Apellido1 = $row['Apellido1'];
    $Apellido2 = $row['Apellido2'];
    $Empresa = $row['Empresa'];
    $Cargo = $row['Cargo'];
    $Nivel = $row['Nivel'];
    $Genero = $row['Genero'];
    $Codigo = $row['Codigo'];
    if ($Genero == 'Femenino') {
        $Sexo = 'Sra.';
        $identificado = 'identificada';
        $informado = 'informada';
    } else {
        $Sexo = 'Sr.';
        $identificado = 'identificado';
        $informado = 'informado';
    }
    switch ($Nivel) {
    case 'Jefatura-tiene personas a su cargo':
        $intra = 1;
        $forma = 'A';
        break;
    case 'Profesional, tecnólogo o técnico':
        $intra = 1;
        $forma = 'A';
        break;
    case 'Auxiliar, asistente administrativo o técnico':
        $intra = 2;
        $forma = 'B';
        break;
    case 'Operario, ayudante o servicios generales':
        $intra = 2;
        $forma = 'B';
        break; 
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
        background: url("../imagine/tapiz10.jpg");
        background-size: 450px 450px;
        font-family: arial, sans-serif;
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
        background: url('../imagine/carga6.gif') 50% 50% no-repeat #ffffff;
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
    .task-item {
        font-size:14px;
        font-family:verdanab;
        color:#333333;
        background:transparent;
        padding:6px;
        margin:0;
        border:0;
        transition: font-size 0.6s linear
    }
    .task-item:hover, .submit:hover{
        font-size:15px;
        transition: font-size 0.6s linear;
    }
    .task-estres,
    .task-extra,
    .task-intraA,
    .task-delete, .submit,
    .task-delete2, .submit,
    .task-editar, .submit,
    .task-editar2, .submit {
        width:36px;
        height: 36px;
        font-family:Moristonb;
        color: #666666;
        background:transparent;
        border: 1px solid #333333;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-estres:hover, .submit:hover,
    .task-extra:hover, .submit:hover,
    .task-intraA:hover, .submit:hover {
        color: #006080;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-editar2:hover, .submit:hover,
    .task-editar:hover, .submit:hover {
        color:#e69900;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-delete2:hover, .submit:hover,
    .task-delete:hover, .submit:hover{
        color: #cc0000;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    #registro {
        padding-top:1em;
    }
    #registro label {
        position: absolute;
        display: block;
        width: 35px;
        height: 48px;
        line-height: 35px;
        font-size:16px;
        margin-left:10px;
    }
    #registro input {
        width: 270px;
        height: 35px;
        font-family:verdana;
        font-size:14px;
        padding-left: 15px;
        background:transparent;
        border-radius:16px!important;
        border:1px solid #71788e!important;
    }
    #registro select {
        width: 270px;
        height: 35px;
        font-family:verdana;
        font-size:14px;
        padding-left: 2px;
        padding-right: 2px;
        background:transparent;
        border-radius:16px;
        border:1px solid #71788e!important;
    }
    .items  {
        width:270px;
        text-align:left;
        color:#333333;
        font-family:verdanabi;
        font-size:13px;
        margin-top:0.8em;
    }
    #boton_terminos,
    #boton_edit_admin,
    #boton_editar_riesgo,
    #boton_admin,
    #boton {
        font-family:verdanab;
        border:0;
        transform-style: preserve-3d;
        border-radius:160px!important;
        background:#333333;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        height:2.6em!important;
    }
    #boton_terminos:hover,
    #boton_edit_admin:hover,
    #boton_editar_riesgo:hover,
    #boton_admin:hover,
    #boton:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #boton_salir {
        font-family:verdanab;
        font-size:14px;
        padding:9px 57px 9px 57px;
        transform-style: preserve-3d;
        border-radius:0;
        background:#333333;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #boton_salir:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        background:#cccccc!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }

    .tableIA {
        width: 90%;
    }
    .tableIA th {
        font-family:Verdanab;
        width:4em!important;
        text-align:center;
        padding:8px;
        border:1px solid #333333!important;
    }
    .tableIA td {
        width:100%;
        text-align:left;
        padding:8px;
        border:none;
        vertical-align:middle!important;
    }
    .nIA {
        font-family:Verdanab;
        font-size:14px;
        color:#f58634;
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
        width: 22px;
        height: 22px;
        background-color:#ffffff;
        border:1px solid #71788e!important;
        text-align:center;
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        margin-top:-0.1em;
        font-size:30px!important;
        color:#f58634;
    }
    #check11::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 22px;
        height: 22px;
        background-color:transparent;
        border:1px solid #71788e!important;
        text-align:center;
        
    }
    #check11::after {
        display: inline-block;
        position: absolute;
        margin-top:-0.1em;
        font-size:30px!important;
        color:#f58634;
        margin-top:-5px!important;
        margin-left:-2px!important;
    }
    .radio input[type="radio"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
        font-size: 18px!important;
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
    #check0::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 24px;
        height: 24px;
        left: 0;
        margin-left: -20px;
        background-color:transparent;
        border: 2px solid #000000;
    }
    #check0::after {
        display: inline-block;
        position: absolute;
        left: -16px;
        top:1px;
        font-size: 21px!important;
    }
    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00d";
        color:#f58634;
    }
    #principal {
        min-height:50em;
        text-align:center;
        color:#333333;
        margin-top:2em;
    }
    #tabla2 td {
        padding-bottom:2em!important;
    }  
    .parrafo {
        text-align:left;
        font-size:13px;
        color:#000000;
    }
    @media screen and (max-width: 800px) {
        table2 {
            width:100%; 
        }
        table2 tr,
        table2 td{
            width:100%; 
        }
        tbody td {
            display: block;
            text-align:center;
            width:100%;
            height:3em!important;
            margin-top:-1px!important;
        }
        tbody td:before {               
            text-align:center;
        }
        tbody th {
            text-align:center;
        }
        tbody th:before {
            content: attr(data-th);
            text-align:center;
        }
        tbody #borderout {
            text-align:right!important;
            padding-right:2em!important;
            width:100%!important;
        }
        .titulo {
            font-family:verdanab!important;
            display:inline!important;
            font-size:13px!important;
        }
        .liker {
            display:none!important;
        }
        #check1::before {
            margin-top:6px!important;
        }
        #check1::after {
            margin-top:-0.04em!important;
        }
        #check11::before {
            margin-top:6px!important;
        }
        #check11::after {
            margin-top:0.01em!important;
        }
        [data-title]:hover:after {
            visibility: hidden!important;
        }
        .items2,
        .items {
            width:100%!important;
        }
        #botones td {
            display:inline!important;
        }
    } 
    @media screen and (max-width: 480px) {
        #costumModal2 .modal-lg, 
        #costumModal3 .modal-lg,
        #costumModal4 .modal-lg,
        #costumModal5 .modal-m,
        #costumModal6 .modal-m,
        #costumModal7 .modal-lg,
        #costumModal8 .modal-m,
        #costumModal9 .modal-lg,
        #costumModal10 .modal-lg,
        #costumModal11 .modal-lg,
        #costumModal12 .modal-lg{
            margin:0!important;
            padding:0!important;
            width:100%!important;
        }
        #boton1,
        #registro input,
        #registro select {
            width:100%!important;
        }
    }
    tbody #borderout { 
        width:4em;
    }
    .titulo {
        display:none;
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
    .items2 {
        font-family:verdanab;
        font-size:13px;
        text-align:left;
        height:auto!important;
        color:#000000;
    }
    .items {
        font-family:verdanab;
        font-size:13px;
        text-align:left;
        width:70%;
        height:auto!important;
    }
    .fullscreen-modal .modal-dialog {
        margin: 0;
        margin-right: auto;
        margin-left: auto;
        width:100%;
        height:100%;
        text-align:center;
    }
    #botones td {
        height:auto!important;
    }
      .table_consolidados {
        font-size:12px;
        text-align:center;
        table-layout: fixed;
        border:1px solid #71788e!important;
    }
    .table_consolidados th {
        background:#ffffff;
        color:#000000;
        font-family:Verdanab;
        text-align:center;
        line-height: 1.8rem!important;
        width:100%;
        padding:0.6em!important;
        border:1px solid #71788e!important;
    }
    .table_consolidados td {
        color:#333333;
    }
#draw-canvas {
    border:3px solid transparent;
    -moz-border-image: -moz-linear-gradient(top, #7c506f 0%, #a57396 100%);
    -webkit-border-image: -webkit-linear-gradient(top, #7c506f 0%, #a57396 100%);
    border-image: linear-gradient(to bottom, #7c506f 0%, #a57396 100%);
    border-image-slice: 1;
    border-radius: 5px;
    cursor: crosshair;
}
/* ================================================================
   BORDER RADIUS PARA TODOS LOS MODALES - CENTRADOS
   ================================================================ */
.modal .modal-dialog {
    border-radius: 16px !important;
    overflow: visible !important;
    max-height: 300vh !important;
    display: flex !important;
    align-items: flex-start !important;
    justify-content: center !important;
    min-height: calc(100% - 10px) !important;
    margin: 1em auto 30px auto !important;
}
.modal .modal-content {
    border-radius: 16px !important;
    overflow: visible !important;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15) !important;
    max-height: 300vh !important;
    margin: 0 auto !important;
    margin-top: 0 !important;
}
.modal.fullscreen-modal .modal-content {
    border-radius: 16px !important;
    overflow: visible !important;
}
.modal .modal-dialog .modal-content {
    border-radius: 16px !important;
    overflow: visible !important;
    max-height: 300vh !important;
}
.modal .modal-header {
    border-radius: 16px 16px 0 0 !important;
    padding: 10px 15px !important;
    background: #FAF0FA !important;
    border-bottom: 1px solid #dce8d0 !important;
    flex-shrink: 0 !important;
}
.modal .modal-body {
    padding: 25px 30px !important;
    overflow-y: auto !important;
    max-height: calc(90vh - 60px) !important;
    flex: 1 1 auto !important;
}
.modal .modal-footer {
    border-radius: 0 0 16px 16px !important;
    padding: 10px 15px !important;
    background: #FAF0FA !important;
    border-top: 1px solid #dce8d0 !important;
    flex-shrink: 0 !important;
}
.modal .modal-header .close {
    padding: 8px !important;
    border-radius: 50% !important;
    transition: all 0.3s ease !important;
    opacity: 0.7 !important;
}
.modal .modal-header .close:hover {
    opacity: 1 !important;
    background: rgba(0,0,0,0.05) !important;
    transform: rotate(90deg) !important;
}
.modal-dialog.modal-m .modal-content {
    border-radius: 16px !important;
}
.modal-dialog.modal-lg .modal-content {
    border-radius: 16px !important;
}
.modal-dialog.modal-sm .modal-content {
    border-radius: 16px !important;
}
.modal-dialog.modal-title .modal-content {
    border-radius: 16px !important;
}
.fullscreen-modal .modal-content {
    border-radius: 16px !important;
}
.modal-content[style*="background-color:#ffffff"] {
    border-radius: 16px !important;
    overflow: visible !important;
}
.modal .btn,
.modal .nuevo,
.modal .delete {
    border-radius: 8px !important;
}
.modal .table,
.modal .tablabdm,
.modal .table_ges_2 {
    border-radius: 8px !important;
    overflow: hidden !important;
}
.modal[data-easein] .modal-content {
    border-radius: 16px !important;
}
[id^="costumModal"] .modal-content {
    border-radius: 16px !important;
}
[id^="costumModal"] .modal-header {
    border-radius: 16px 16px 0 0 !important;
    background: #FAF0FA !important;
}
[id^="costumModal"] .modal-footer {
    border-radius: 0 0 16px 16px !important;
    background: #FAF0FA !important;
}
[id$="_modal"] .modal-content {
    border-radius: 16px !important;
}
[id$="_modal"] .modal-header {
    border-radius: 16px 16px 0 0 !important;
    background: #FAF0FA !important;
}
[id$="_modal"] .modal-footer {
    border-radius: 0 0 16px 16px !important;
    background: #FAF0FA !important;
}

/* === MODAL CENTRADO PERFECTO === */
.modal.show .modal-dialog {
    transform: none !important;
    margin: 1em auto 30px auto !important;
}
.modal-dialog-centered {
    display: flex !important;
    align-items: flex-start !important;
    min-height: calc(100% - 10px) !important;
    padding-top: 1em !important;
}
.modal.fade .modal-dialog {
    transform: scale(0.95) !important;
    transition: transform 0.3s ease-out !important;
}
.modal.show .modal-dialog {
    transform: scale(1) !important;
}


/* ================================================================
   RESPONSIVE: QUITAR BORDER RADIUS Y MARGEN SUPERIOR EN PANTALLAS < 800px
   ================================================================ */
@media screen and (max-width: 800px) {
    /* Quitar border-radius de todos los modales */
    .modal .modal-dialog,
    .modal .modal-content,
    .modal.fullscreen-modal .modal-content,
    .modal .modal-dialog .modal-content,
    .modal-dialog.modal-m .modal-content,
    .modal-dialog.modal-lg .modal-content,
    .modal-dialog.modal-sm .modal-content,
    .modal-dialog.modal-title .modal-content,
    .fullscreen-modal .modal-content,
    .modal-content[style*="background-color:#ffffff"],
    .modal[data-easein] .modal-content,
    [id^="costumModal"] .modal-content,
    [id$="_modal"] .modal-content {
        border-radius: 0 !important;
    }

    /* Quitar border-radius de header y footer */
    .modal .modal-header,
    .modal .modal-footer,
    [id^="costumModal"] .modal-header,
    [id^="costumModal"] .modal-footer,
    [id$="_modal"] .modal-header,
    [id$="_modal"] .modal-footer {
        border-radius: 0 !important;
    }

    /* Quitar margen superior */
    .modal .modal-dialog {
        margin: 0 !important;
        min-height: 100vh !important;
        align-items: stretch !important;
        padding-top: 0 !important;
    }

    .modal.show .modal-dialog {
        margin: 0 !important;
    }

    .modal-dialog-centered {
        padding-top: 0 !important;
        min-height: 100vh !important;
        align-items: stretch !important;
    }

    /* Ocupar toda la pantalla */
    .modal .modal-content {
        min-height: 100vh !important;
        max-height: 100vh !important;
        box-shadow: none !important;
        border-radius: 0 !important;
    }

    .modal .modal-body {
        max-height: calc(100vh - 100px) !important;
    }

    /* Quitar transformación de escala */
    .modal.fade .modal-dialog {
        transform: none !important;
    }
}
    /* ============================================================
       BOTÓN FLOTANTE WEBCAM (morado)
       ============================================================ */
    #btnWebcam {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: #7c3aed;         /* 👈 morado */
        color: #fff;
        border: none;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(124,58,237,0.35);
        font-size: 26px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        transition: transform 0.2s, background 0.2s;
    }
    #btnWebcam:hover {
        background: #5b21b6;         /* 👈 morado oscuro */
        transform: scale(1.08);
    }

    /* ============================================================
       PANEL FLOTANTE WEBCAM (morado)
       ============================================================ */
    #panelWebcam {
        position: fixed;
        bottom: 90px;
        right: 20px;
        width: 420px;
        height: 560px;
        background: #1a1a2e;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(124,58,237,0.35);
        overflow: hidden;
        z-index: 9998;
        display: none;
        flex-direction: column;
    }
    #panelWebcam.abierto {
        display: flex;
    }

    #panelWebcamHeader {
        background: #7c3aed;         /* 👈 morado */
        color: #fff;
        padding: 12px 15px;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 15px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #panelWebcamClose {
        background: transparent;
        border: none;
        color: #fff;
        font-size: 20px;
        cursor: pointer;
        line-height: 1;
        padding: 0 4px;
    }
    #panelWebcamClose:hover {
        opacity: 0.7;
    }

    #panelWebcamIframe {
        flex: 1;
        border: none;
        width: 100%;
        height: 100%;
        background: #1a1a2e;
    }

    @media (max-width: 480px) {
        #panelWebcam {
            width: 100%;
            height: 100%;
            bottom: 0;
            right: 0;
            border-radius: 0;
        }
    }
</style>
<body onload="consentimiento()">
<div class="loader"></div>    
   <?php
    if (controlsesion2::sesion_iniciada()) {
        ?> 
        <div class="container-fluid" style="font-size:16px;font-family:Moriston">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo RUTA_LOGOUT_RIESGO ?>" style="color:#333333;background:transparent;letter-spacing:2px">
                        <i class="fa fa-share-square-o" aria-hidden="true"></i>&nbsp Cerrar sesión</a>
                </li>
            </ul>
        </div>
    <?php } ?>
<div class="container" align="center">
<p style="font-family:verdanab;font-size:20px;text-align:center;color:#333333"><?php echo $Nombre.' '.$Apellido1.' '.$Apellido2 ?></p>
<p style="font-family:narrow;font-size:20px;letter-spacing:1px;text-align:center;color:#666666">C.C. <?php echo $Cedula ?></p>
<p style="font-family:narrow;font-size:18px;letter-spacing:1px!important;color:#333333"><?php echo $Empresa.' - '.$Cargo?></p><br>
<section style="background: #ffffff;padding: 2em;box-shadow: 0 8px 30px rgba(0,0,0,0.12), 0 2px 8px rgba(0,0,0,0.06) !important;border-radius: 16px;margin-top:-1em!important">
    <p style="text-align: left;color: #334155;font-family: Verdana, sans-serif;font-size: 14px;line-height: 1.8;margin-bottom: 25px;">
        Con el presente estudio queremos identificar las condiciones propias del medio laboral y extralaboral que pueden estar generándole a usted efectos negativos y que pueden convertirse en obstáculos para su desarrollo personal y ocupacional. Para tal fin, estas son los cuestionarios que deberá diligenciar:
    </p>
    <div style="display:grid;grid-template-columns:1fr;gap:12px;margin-bottom:25px">
        <div style="background: #f8fafc;padding: 14px 18px;border-radius: 10px;border-left: 1px solid #5fb84a;transition: all 0.3s ease;box-shadow: 0 2px 4px rgba(0,0,0,0.04);" onmouseover="this.style.background='#f0faf0';this.style.transform='translateX(4px)';this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)'" onmouseout="this.style.background='#f8fafc';this.style.transform='translateX(0)';this.style.boxShadow='0 2px 4px rgba(0,0,0,0.04)'">
            <p style="margin:0;font-family:Verdana;font-size:14px;color:#1e293b;line-height:1.6;text-align:left!important">
                <span style="color:#a1e184;font-size:16px;">1.</span>
                <span style="font-family:verdanab">Información del empleado.</span>
                <span style="color:#000000;font-size:14px">Datos personales y condiciones laborales.</span>
            </p>
        </div>
        <div style="background: #f8fafc;padding: 14px 18px;border-radius: 10px;border-left: 1px solid #5fb84a;transition: all 0.3s ease;box-shadow: 0 2px 4px rgba(0,0,0,0.04);" onmouseover="this.style.background='#f0faf0';this.style.transform='translateX(4px)';this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)'" onmouseout="this.style.background='#f8fafc';this.style.transform='translateX(0)';this.style.boxShadow='0 2px 4px rgba(0,0,0,0.04)'">
            <p style="margin:0;font-family:Verdana;font-size:14px;color:#1e293b;line-height:1.6;text-align:left!important">
                <span style="color:#7cc96b;font-size:16px;">2.</span>
                <span style="font-family:verdanab">Evaluación intralaboral.</span>
                <span style="color:#000000;">Factores de riesgo dentro del trabajo.</span>
            </p>
        </div>
        <div style="background: #f8fafc;padding: 14px 18px;border-radius: 10px;border-left: 1px solid #5fb84a;transition: all 0.3s ease;box-shadow: 0 2px 4px rgba(0,0,0,0.04);" onmouseover="this.style.background='#f0faf0';this.style.transform='translateX(4px)';this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)'" onmouseout="this.style.background='#f8fafc';this.style.transform='translateX(0)';this.style.boxShadow='0 2px 4px rgba(0,0,0,0.04)'">
            <p style="margin:0;font-family:Verdana;font-size:14px;color:#1e293b;line-height:1.6;text-align:left!important">
                <span style="color:#5fb84a;font-size:16px;">3.</span>
                <span style="font-family:verdanab">Evaluación extralaboral.</span>
                <span style="color:#000000;">Factores de riesgo fuera del trabajo.</span>
            </p>
        </div>
        <div style="background: #f8fafc;padding: 14px 18px;border-radius: 10px;border-left: 1px solid #5fb84a;transition: all 0.3s ease;box-shadow: 0 2px 4px rgba(0,0,0,0.04);" onmouseover="this.style.background='#f0faf0';this.style.transform='translateX(4px)';this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)'" onmouseout="this.style.background='#f8fafc';this.style.transform='translateX(0)';this.style.boxShadow='0 2px 4px rgba(0,0,0,0.04)'">
            <p style="margin:0;font-family:Verdana;font-size:14px;color:#1e293b;line-height:1.6;text-align:left!important">
                <span style="color:#408132;font-size:16px;">4.</span>
                <span style="font-family:verdanab">Evaluación del estrés.</span>
                <span style="color:#000000;">Síntomas fisiológicos, psicoemocionales y sociales.</span>
            </p>
        </div>
    </div>
    <div style="background:#f7f7f7;padding:8px;border-radius: 10px;margin-bottom: 25px;border: 1px solid #d4edc9;box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
        <p style="margin:0;font-family: Verdanab;color: #408132;font-size: 14px;">📋 Por favor, tenga en cuenta que...</p>
        <div style="margin:8px 0 0 0;padding-left:20px">
            <p style="font-family: Verdanab;color:#e60000!important;font-size: 14px;line-height: 1.8;">Debe diligenciar los cuatro formularios.</p>
            <p style="font-family: Verdanab;color:#e60000!important;font-size: 14px;line-height: 1.8;">Cuando haya dado enviar a un formulario, no podrá diligenciarlo nuevamente.</p>
        </div>
    </div>
    <div style="margin-top:-2em">
        <table>
            <tr id="botones"> 
                <td class="checkbox"><br><button id="boton_inicio" type="submit" style="width:13em !important;height:2.5em!important;background: linear-gradient(to bottom, #e6e6e6, #cccccc) !important;font-family:Moristonb;color: #000000 !important;border: none !important;border-radius: 16px !important;font-size:16px !important;box-shadow: 0 4px 14px rgba(161, 225, 132, 0.3) !important;transition: all 0.3s ease !important;position:relative;cursor:pointer;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(100,100,100,0.4)';this.style.background='linear-gradient(135deg, #b3b3b3, #999999)'" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 14px rgba(161, 225, 132, 0.3)';this.style.background='linear-gradient(135deg, #e6e6e6, #cccccc)'">Iniciar cuestionarios</button></td> 
            </tr>
        </table>
    </div>
</section>
</div>
<div class="container-fluid" style="padding:0!important;margin:0!important;text-align:center!important">
    <!--<section><br>
            <div class="col-md-3">
              <article><br>
                  <a  href="#" style="text-align:center" onclick="MyFunction0();return false;"><h5 style="font-family:narrow;letter-spacing:3px;text-align:center;color:#000000!important"><span style="color:#f58634;font-size:20px">1.</span>&nbspINFORMACIÓN&nbspDEL&nbspEMPLEADO</h5><img src="../imagine/sociodemografico.png" width="130"></a>
              </article><br>
            </div>
            <div class="col-md-3">
              <article><br>
                  <a  href="#" style="text-align:center" onclick="MyFunction();return false;"><h5 style="font-family:narrow;letter-spacing:3px;text-align:center;color:#000000!important"><span style="color:#f58634;font-size:20px">2.</span>&nbspEVALUACIÓN&nbspINTRALABORAL</h5><img src="../imagine/intralaboral.png" width="130"></a>
              </article><br>
            </div>
            <div class="col-md-3">
              <article><br>
                  <a href ="#" style="text-align:center" onclick="MyFunctionE();return false;"><h5 style="font-family:narrow;letter-spacing:3px;text-align:center;color:#000000!important"><span style="color:#f58634;font-size:20px">3.</span>&nbspEVALUACIÓN&nbspEXTRALABORAL</h5><img src="../imagine/extralaboral.png" width="130"></a>
              </article><br>
            </div>
            <div class="col-md-3">
              <article><br>
                  <a href ="#" tyle="text-align:center" onclick="MyFunctionES();return false;"><h5 style="font-family:narrow;letter-spacing:3px;text-align:center;color:#000000!important"><span style="color:#f58634;font-size:20px">4.</span>&nbspEVALUACIÓN&nbspDEL&nbspESTRÉS</h5><img src="../imagine/estres.png" width="130"></a>
              </article><br>
            </div>
            <div style="text-align:center"><br><a href="<?php echo RUTA_LOGOUT ?>"><img src="../imagine/logo.png" width="200"></a></div><br>
    </section>-->
    <section><br>
            <!--<div class="col-md-3">
              <article><br>
                  <h5 style="font-family:narrow;letter-spacing:3px;text-align:center;color:#000000!important"><span style="color:#f58634;font-size:20px">1.</span>&nbspINFORMACIÓN&nbspDEL&nbspEMPLEADO</h5><img src="../imagine/sociodemografico.png" width="130">
              </article><br>
            </div>
            <div class="col-md-3">
              <article><br>
                  <h5 style="font-family:narrow;letter-spacing:3px;text-align:center;color:#000000!important"><span style="color:#f58634;font-size:20px">2.</span>&nbspEVALUACIÓN&nbspINTRALABORAL</h5><img src="../imagine/intralaboral.png" width="130">
              </article><br>
            </div>
            <div class="col-md-3">
              <article><br>
                  <h5 style="font-family:narrow;letter-spacing:3px;text-align:center;color:#000000!important"><span style="color:#f58634;font-size:20px">3.</span>&nbspEVALUACIÓN&nbspEXTRALABORAL</h5><img src="../imagine/extralaboral.png" width="130">
              </article><br>
            </div>
            <div class="col-md-3">
              <article><br>
                  <h5 style="font-family:narrow;letter-spacing:3px;text-align:center;color:#000000!important"><span style="color:#f58634;font-size:20px">4.</span>&nbspEVALUACIÓN&nbspDEL&nbspESTRÉS</h5><img src="../imagine/estres.png" width="130">
              </article><br>
            </div>-->
            <div class="col-md-12" style="position:relative;bottom:0;left:0;right:0;background:transparent!important;padding:15px 20px;text-align:center;border-top:1px solid rgba(255,255,255,0.2);z-index:1000;">
                <p colspan=2 style="font-family:Verdana;color:#333333;margin:0;"><span style="font-family:Narrow;color:#666666;font-size:20px;letter-spacing:1px;text-decoration:none!important;">Certificado </span><span style="letter-spacing:1px;font-size:18px;color:#3b7b1e;">SSL &nbsp;</span><a id="certificado" title="Certificado SSL" href="#costumModal12" style="padding-top:0px;padding-bottom:0;" data-toggle="modal" target="_blank" aria-hidden="true"><img src="https://www.cedisalud.com.co/imagine/certificado.png" width="52" height="50"/></a></p>
                <p style="font-family:Verdana;color:#333333!important;display:block;margin-top:5px;">Copyright © 2020 - Medellín (Colombia)</p>
            </div>
    </section>
</div>
<button id="btnWebcam" title="Abrir videollamada">📷</button>
<div id="panelWebcam">
<div id="panelWebcamHeader">
    <span>📷 Videollamada</span>
    <button id="panelWebcamClose" title="Cerrar">✕</button>
</div>
<iframe id="panelWebcamIframe" src="about:blank" allow="camera; microphone; fullscreen; display-capture; autoplay"title="Panel de videollamada"></iframe>
</div>
<div id="costumModal2" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-lg" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
            <!--<p style="font-family:verdanab;font-size:20px;color:#333333;text-align:center"><?php echo $Nombre.' '.$Apellido1.' '.$Apellido2 ?></p>
            <p style="font-family:narrow;font-size:22px;letter-spacing:2px;text-align:center;color:#f58634">C.C. <?php echo $Cedula ?></p><br>-->
            <p style="font-size:24px;line-height:1em;font-family:Narrow;letter-spacing:2px">Ficha sociodemográfica e información ocupacional</p>
            <form id="task-form1">
                <div class="row">
                    <div class="col-md-4" id="registro"><br>
                           <p class="items2">Año de nacimiento:</p>
                           <select type="text" class="form-control" style="padding-left:6px" id="Anon" required>
                            <option></option>         
                            <option>2005</option>
                            <option>2004</option>
                            <option>2003</option>
                            <option>2002</option>
                            <option>2001</option> 
                            <option>2000</option> 
                            <option>1999</option> 
                            <option>1998</option> 
                            <option>1997</option> 
                            <option>1996</option> 
                            <option>1995</option> 
                            <option>1994</option> 
                            <option>1993</option> 
                            <option>1992</option> 
                            <option>1991</option> 
                            <option>1990</option> 
                            <option>1989</option> 
                            <option>1988</option> 
                            <option>1987</option> 
                            <option>1986</option> 
                            <option>1985</option>
                            <option>1984</option> 
                            <option>1983</option> 
                            <option>1982</option> 
                            <option>1981</option> 
                            <option>1980</option> 
                            <option>1979</option> 
                            <option>1978</option> 
                            <option>1977</option> 
                            <option>1976</option> 
                            <option>1975</option> 
                            <option>1974</option> 
                            <option>1973</option> 
                            <option>1972</option> 
                            <option>1971</option> 
                            <option>1970</option>
                            <option>1969</option> 
                            <option>1968</option> 
                            <option>1967</option> 
                            <option>1966</option> 
                            <option>1965</option> 
                            <option>1964</option> 
                            <option>1963</option> 
                            <option>1962</option> 
                            <option>1961</option> 
                            <option>1960</option> 
                            <option>1959</option> 
                            <option>1958</option> 
                            <option>1957</option> 
                            <option>1956</option> 
                            <option>1955</option>
                            <option>1954</option>
                            <option>1953</option>
                            <option>1952</option>
                            <option>1951</option>
                        </select>
                    </div>
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Estado Civil:</p>
                        <select type="text" class="form-control" style="padding-left:6px" id="Civil" value"" >
                            <option></option>         
                            <option>Soltero(a)</option>
                            <option>Casado(a)</option>
                            <option>Unión Libre</option> 
                            <option>Separado(a)</option> 
                            <option>Divorciado(a)</option> 
                            <option>Viudo(a)</option> 
                            <option>Sacerdote/monja</option> 
                        </select>
                    </div>
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Nivel de estudios que alcanzó:</p>
                        <select type="text" class="form-control" style="padding-left:6px" id="Escolaridad" value"" >
                            <option></option>         
                            <option>Ninguno</option>
                            <option>Primaria incompleta</option>
                            <option>Primaria completa</option> 
                            <option>Bachillerato incompleto</option> 
                            <option>Bachillerato completo</option> 
                            <option>Técnico/tecnológico incompleto</option> 
                            <option>Tecnológico completo</option>
                            <option>Profesional incompleto</option> 
                            <option>Profesional completo</option> 
                            <option>Carrera militar/policía</option> 
                            <option>Post-grado incompleto</option> 
                            <option>Post-grado completo</option>
                        </select>
                    </div>
                </div>     
                <div class="row">
                    <div class="col-md-4" id="registro"><br>  
                        <p class="items2">Ocupación u oficio:</p>
                        <input type="text" class="form-control" style="padding-left:6px;" id="Ocupacion" value"" >     
                    </div>
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Departamento de residencia:</p>
                        <select type="text" class="form-control" style="padding-left:6px"  onChange="departamentor(this.form)" id="Departamentor" value"" >
                            <option></option>  
                            <option>Amazonas</option>
                            <option>Antioquia</option>
                            <option>Arauca</option>
                            <option>Atlántico</option>
                            <option>Bolívar</option>
                            <option>Boyacá</option>
                            <option>Caldas</option>
                            <option>Caquetá</option>
                            <option>Casanare</option>
                            <option>Cauca</option>
                            <option>Cesar</option>
                            <option>Chocó</option>
                            <option>Córdoba</option>
                            <option>Cundinamarca</option>
                            <option>Guainía</option>
                            <option>Guaviare</option>
                            <option>Huila</option>
                            <option>La Guajira</option>
                            <option>Magdalena</option>
                            <option>Meta</option>
                            <option>Nariño</option>
                            <option>Norte de Santander</option>
                            <option>Putumayo</option>
                            <option>Quindío</option>
                            <option>Risaralda</option>
                            <option>San Andrés y Providencia</option>
                            <option>Santander</option>
                            <option>Sucre</option>
                            <option>Tolima</option>
                            <option>Valle del Cauca</option>
                            <option>Vaupés</option>
                            <option>Vichada</option>
                        </select>
                    </div>
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Ciudad/municipio donde vive:</p>
                        <input type="text" class="form-control" id="Municipior" placeholder="Escriba aquí..." >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Estrato socio-económico:</p>
                        <select type="text" class="form-control" style="padding-left:6px" id="Estrato">
                            <option></option>         
                            <option>Uno</option>
                            <option>Dos</option>
                            <option>Tres</option> 
                            <option>Cuatro</option> 
                            <option>Cinco</option> 
                            <option>Seis</option> 
                            <option>Finca</option> 
                            <option>No sabe</option> 
                        </select>
                    </div>
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Tipo de vivienda:</p>
                        <select type="text" class="form-control" style="padding-left:6px" id="Vivienda" value"" >
                            <option></option>         
                            <option>Propia</option>
                            <option>En arriendo</option>
                            <option>Familiar</option> 
                        </select>
                    </div>
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Personas que de uste dependen:</p>
                        <select type="text" class="form-control" style="padding-left:6px" id="Dependencia" value"" >
                            <option></option>  
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Departamento donde trabaja:</p>
                        <select type="text" class="form-control" style="padding-left:6px"  onChange="departamentot(this.form)" id="Departamentot" value"" >
                            <option></option>  
                            <option>Amazonas</option>
                            <option>Antioquia</option>
                            <option>Arauca</option>
                            <option>Atlántico</option>
                            <option>Bolívar</option>
                            <option>Boyacá</option>
                            <option>Caldas</option>
                            <option>Caquetá</option>
                            <option>Casanare</option>
                            <option>Cauca</option>
                            <option>Cesar</option>
                            <option>Chocó</option>
                            <option>Córdoba</option>
                            <option>Cundinamarca</option>
                            <option>Guainía</option>
                            <option>Guaviare</option>
                            <option>Huila</option>
                            <option>La Guajira</option>
                            <option>Magdalena</option>
                            <option>Meta</option>
                            <option>Nariño</option>
                            <option>Norte de Santander</option>
                            <option>Putumayo</option>
                            <option>Quindío</option>
                            <option>Risaralda</option>
                            <option>San Andrés y Providencia</option>
                            <option>Santander</option>
                            <option>Sucre</option>
                            <option>Tolima</option>
                            <option>Valle del Cauca</option>
                            <option>Vaupés</option>
                            <option>Vichada</option>
                        </select>
                    </div>
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Ciudad/municipio donde trabaja:</p>
                        <input type="text" class="form-control" id="Municipiot" placeholder="Escriba aquí..."  >
                    </div>
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Años de antigüedad en la empresa:</p>
                        <select type="text" class="form-control" style="padding-left:6px" id="Añose">
                            <option></option>  
                            <option>0</option> 
                            <option>1</option>
                            <option>2</option>
                            <option>3</option> 
                            <option>4</option> 
                            <option>5</option> 
                            <option>6</option> 
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                            <option>32</option>
                            <option>33</option>
                            <option>34</option>
                            <option>35</option>
                            <option>36</option>
                            <option>37</option>
                            <option>38</option>
                            <option>39</option>
                            <option>40</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Años de antigüedad en el cargo:</p>
                        <select type="text" class="form-control" style="padding-left:6px" id="Añosc" value"" >
                            <<option></option> 
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option> 
                            <option>4</option> 
                            <option>5</option> 
                            <option>6</option> 
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                            <option>32</option>
                            <option>33</option>
                            <option>34</option>
                            <option>35</option>
                            <option>36</option>
                            <option>37</option>
                            <option>38</option>
                            <option>39</option>
                            <option>40</option>
                        </select>
                    </div>
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Tipo de contrato:</p>
                        <select type="text" class="form-control" style="padding-left:6px" id="Tipo" value"" >
                            <option></option>         
                            <option>Temporal de menos de 1 año</option>
                            <option>Temporal de 1 año o más</option>
                            <option>Término indefinido</option> 
                            <option>Cooperado(cooperativa)</option> 
                            <option>Prestación de servicios</option> 
                            <option>No registra</option> 
                        </select>
                    </div>
                     <div class="col-md-4" id="registro"><br>
                        <p class="items2">N° de horas diarias:</p>
                        <select type="text" class="form-control" style="padding-left:6px" id="Horas" value"" >
                            <option></option>         
                            <option>1</option>
                            <option>2</option>
                            <option>3</option> 
                            <option>4</option> 
                            <option>5</option> 
                            <option>6</option> 
                            <option>7</option>         
                            <option>8</option>
                            <option>9</option>
                            <option>10</option> 
                            <option>11</option> 
                            <option>12</option> 
                            <option>13</option> 
                            <option>14</option> 
                            <option>15</option> 
                            <option>16</option> 
                            <option>17</option> 
                            <option>18</option> 
                            <option>19</option> 
                            <option>20</option> 
                            <option>21</option> 
                            <option>22</option> 
                            <option>23</option> 
                            <option>24</option> 
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" id="registro"><br>
                        <p class="items2">Tipo de salario que recibe:</p>
                        <select type="text" class="form-control" style="padding-left:6px" id="Salario" value"" >
                            <option></option>         
                            <option>Fijo(diario, semanal, quincenal o mensual)</option>
                            <option>Una parte fija y otra variable</option>
                            <option>Todo variable(a destajo, por producción, por comisión)</option> 
                            <option>Cooperado(cooperativa)</option> 
                        </select>
                    </div>
                </div><br><br> 
                <div><button id="boton1" type="submit" name="enviar" class="btn btn btn-default btn-block" style="width:13em !important;height:2.5em!important;background: linear-gradient(to bottom, #e6e6e6, #cccccc) !important;font-family:Moristonb;color: #000000 !important;border: none !important;border-radius: 16px !important;font-size:14px !important;box-shadow: 0 4px 14px rgba(161, 225, 132, 0.3) !important;transition: all 0.3s ease !important;position:relative;cursor:pointer;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(100,100,100,0.4)';this.style.background='linear-gradient(135deg, #b3b3b3, #999999)'" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 14px rgba(161, 225, 132, 0.3)';this.style.background='linear-gradient(135deg, #e6e6e6, #cccccc)'">Enviar</button></div><br>                               
            </form>
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal3" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-lg" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <p class="captura1" style="font-size:24px;line-height:1em;font-family:Narrow;letter-spacing:2px">Evaluación del Riesgo Psicosocial Intralaboral - <span style="color:#f58634;letter-spacing:2px">Forma A</span></p><br>
                <section class="panel panel-body" style="padding:3%;border-radius:0px">
                    <p style="text-align:left;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px"><?php echo $Sexo.' '.$Nombre ?>:</p><br>
                    <p class="parrafo">Este cuestionario busca conocer su opinión sobre algunos aspectos de su <span style="font-family:verdanab">trabajo</span>.</p>
                    <p class="parrafo">Le agradecemos que conteste las siguientes preguntas con toda la sinceridad del caso.  Las respuestas que usted da al cuestionario no son ni buenas, ni malas, lo importante es que reflejen su manera de pensar sobre su trabajo.</p>
                    <p class="parrafo">Lea cuidadosamente cada pregunta, luego piense como es su trabajo y responda a todas las preguntas, en cada una de ellas marque una sola respuesta. Señale el cuadro de la respuesta que refleje mejor su trabajo, si se equivoca en una respuesa, simplemente seleccione otro cuadro.</p><br>
                    <p style="text-align:left;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px">Ejemplo:</p>
                    <table id="tabla2" bordered="0" class="radio">
                        <tr>
                            <td class="items"><span class="nIA">1.</span> El ruido en el lugar donde trabajo es molesto</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra_1" id="radio_1" value=""/><label id="check11" for="radio_1"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra_1" id="radio_2" value="" checked/><label id="check11" for="radio_2"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra_1" id="radio_3" value=""/><label id="check11" for="radio_3"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra_1" id="radio_4" value=""/><label id="check11" for="radio_4"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra_1" id="radio_5" value=""/><label id="check11" for="radio_5"></td>
                        </tr>
                    </table>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspTenga en cuenta que el cuestionario no lo(a) evalúa a usted como trabajador(a), sino que busca conocer cómo es el trabajo que le han asignado.</p>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspSus respuestas serán manejadas de forma confidencial.</p>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspSi tiene duda respecto a una pregunta, solicite mayor explicación mediante el n° celular <span style='color:#248f24;font-size:16px' class='fa fa-whatsapp'></span><a href='https://api.whatsapp.com/send?phone=573115602702' target='_blank' style='color:#248f24;font-family:verdanab'>&nbsp3115602702</a>.</p>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspEl cuestionario no tiene límite de tiempo; sin embargo, usted requerirá de 1 hora aproximadamente para contestar todas las preguntas.</p>
                    <p style="text-align:center;padding-left:5%;padding-right:5%;font-family:narrow;font-size:18px;letter-spacing:2px">Gracias por su colaboración</p>
                </section>
                <p style="text-align:center;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px">Seleccione una de las siguientes alternativas en cada numeral:</p>
                <table class="tableIA liker" align="center" bordered="0">
                    <tr>
                        <th>Siempre</th>
                        <th>Casi siempre</th>
                        <th>Algunas veces</th>
                        <th>Casi nunca</th>
                        <th>Nunca</th>
                    </tr>
                </table><br>    
                <form name="formIA" id="formIA">
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con las condiciones ambientales del sitio o lugar donde habitualmente realiza su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">
                        <tr><td class="items"><span class="nIA">1.</span> El ruido en el lugar donde trabajo es molesto</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra1" id="radio1" value="4" /><label id="check1" for="radio1"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra1" id="radio2" value="3"/><label id="check1" for="radio2"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra1" id="radio3" value="2"/><label id="check1" for="radio3"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra1" id="radio4" value="1"/><label id="check1" for="radio4"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra1" id="radio5" value="0"/><label id="check1" for="radio5"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">2.</span> En el lugar donde trabajo hace mucho frío</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra2" id="radio6" value="4"/><label id="check1" for="radio6"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra2" id="radio7" value="3"/><label id="check1" for="radio7"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra2" id="radio8" value="2"/><label id="check1" for="radio8"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra2" id="radio9" value="1"/><label id="check1" for="radio9"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra2" id="radio10" value="0"/><label id="check1" for="radio10"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">3.</span> En el lugar donde trabajo hace mucho calor</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra3" id="radio11" value="4"/><label id="check1" for="radio11"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra3" id="radio12" value="3"/><label id="check1" for="radio12"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra3" id="radio13" value="2"/><label id="check1" for="radio13"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra3" id="radio14" value="1"/><label id="check1" for="radio14"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra3" id="radio15" value="0"/><label id="check1" for="radio15"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">4.</span> El aire en el lugar donde trabajo es fresco y agradable</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra4" id="radio16" value="0"/><label id="check1" for="radio16"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra4" id="radio17" value="1"/><label id="check1" for="radio17"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra4" id="radio18" value="2"/><label id="check1" for="radio18"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra4" id="radio19" value="3"/><label id="check1" for="radio19"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra4" id="radio20" value="4"/><label id="check1" for="radio20"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">5.</span> La luz del sitio donde trabajo ilumina suficientemente</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra5" id="radio21" value="0"/><label id="check1" for="radio21"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra5" id="radio22" value="1"/><label id="check1" for="radio22"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra5" id="radio23" value="2"/><label id="check1" for="radio23"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra5" id="radio24" value="3"/><label id="check1" for="radio24"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra5" id="radio25" value="4"/><label id="check1" for="radio25"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">6.</span> El espacio donde trabajo es cómodo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra6" id="radio26" value="0"/><label id="check1" for="radio26"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra6" id="radio27" value="1"/><label id="check1" for="radio27"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra6" id="radio28" value="2"/><label id="check1" for="radio28"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra6" id="radio29" value="3"/><label id="check1" for="radio29"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra6" id="radio30" value="4"/><label id="check1" for="radio30"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">7.</span> En mi trabajo me preocupa estar expuesto a sustancias químicas que afectan mi salud</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra7" id="radio31" value="4"/><label id="check1" for="radio31"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra7" id="radio32" value="3"/><label id="check1" for="radio32"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra7" id="radio33" value="2"/><label id="check1" for="radio33"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra7" id="radio34" value="1"/><label id="check1" for="radio34"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra7" id="radio35" value="0"/><label id="check1" for="radio35"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">8.</span> Mi trabajo me exige hacer mucho esfuerzo físico</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra8" id="radio36" value="4"/><label id="check1" for="radio36"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra8" id="radio37" value="3"/><label id="check1" for="radio37"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra8" id="radio38" value="2"/><label id="check1" for="radio38"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra8" id="radio39" value="1"/><label id="check1" for="radio39"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra8" id="radio40" value="0"/><label id="check1" for="radio40"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">9.</span> Los equipos o herramientas con que trabajo son cómodos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra9" id="radio41" value="0"/><label id="check1" for="radio41"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra9" id="radio42" value="1"/><label id="check1" for="radio42"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra9" id="radio43" value="2"/><label id="check1" for="radio43"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra9" id="radio44" value="3"/><label id="check1" for="radio44"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra9" id="radio45" value="4"/><label id="check1" for="radio45"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">10.</span> En mi trabajo me preocupa estar expuesto a microbios, animales o plantas que afecten mi salud</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra10" id="radio46" value="4"/><label id="check1" for="radio46"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra10" id="radio47" value="3"/><label id="check1" for="radio47"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra10" id="radio48" value="2"/><label id="check1" for="radio48"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra10" id="radio49" value="1"/><label id="check1" for="radio49"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra10" id="radio50" value="0"/><label id="check1" for="radio50"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">11.</span> Me preocupa accidentarme en el trabajo</span> </td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intra11" id="radio51" value="4"/><label id="check1" for="radio51"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intra11" id="radio52" value="3"/><label id="check1" for="radio52"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra11" id="radio53" value="2"/><label id="check1" for="radio53"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intra11" id="radio54" value="1"/><label id="check1" for="radio54"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intra11" id="radio55" value="0"/><label id="check1" for="radio55"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">12.</span> El lugar donde trabajo es limpio y ordenado</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra12" id="radio56" value="0"/><label id="check1" for="radio56"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra12" id="radio57" value="1"/><label id="check1" for="radio57"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra12" id="radio58" value="2"/><label id="check1" for="radio58"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra12" id="radio59" value="3"/><label id="check1" for="radio59"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra12" id="radio60" value="4"/><label id="check1" for="radio60"></label></td>
                        </tr>
                    </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Para responder las siguientes preguntas piense en la cantidad de trabajo que usted tiene a cargo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">        
                        <tr><td class="items"><span class="nIA">13.</span> Por la cantidad de trabajo que tengo debo quedarme tiempo adicional</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra13" id="radio61" value="4"/><label id="check1" for="radio61"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra13" id="radio62" value="3"/><label id="check1" for="radio62"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra13" id="radio63" value="2"/><label id="check1" for="radio63"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra13" id="radio64" value="1"/><label id="check1" for="radio64"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra13" id="radio65" value="0"/><label id="check1" for="radio65"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">14.</span> Me alcanza el tiempo de trabajo para tener al día mis deberes</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra14" id="radio66" value="0"/><label id="check1" for="radio66"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra14" id="radio67" value="1"/><label id="check1" for="radio67"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra14" id="radio68" value="2"/><label id="check1" for="radio68"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra14" id="radio69" value="3"/><label id="check1" for="radio69"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra14" id="radio70" value="4"/><label id="check1" for="radio70"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">15.</span> Por la cantidad de trabajo que tengo, debo trabajar sin parar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra15" id="radio71" value="4"/><label id="check1" for="radio71"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra15" id="radio72" value="3"/><label id="check1" for="radio72"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra15" id="radio73" value="2"/><label id="check1" for="radio73"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra15" id="radio74" value="1"/><label id="check1" for="radio74"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra15" id="radio75" value="0"/><label id="check1" for="radio75"></label></td>
                        </tr>
                    </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con el esfuerzo mental que le exige su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">          
                        <tr><td class="items"><span class="nIA">16.</span> Mi trabajo me exige hacer mucho esfuerzo mental</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra16" id="radio76" value="4"/><label id="check1" for="radio76"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra16" id="radio77" value="3"/><label id="check1" for="radio77"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra16" id="radio78" value="2"/><label id="check1" for="radio78"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra16" id="radio79" value="1"/><label id="check1" for="radio79"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra16" id="radio80" value="0"/><label id="check1" for="radio80"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">17.</span> Mi trabajo me exige estar muy concentrado</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra17" id="radio81" value="4"/><label id="check1" for="radio81"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra17" id="radio82" value="3"/><label id="check1" for="radio82"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra17" id="radio83" value="2"/><label id="check1" for="radio83"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra17" id="radio84" value="1"/><label id="check1" for="radio84"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra17" id="radio85" value="0"/><label id="check1" for="radio85"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">18.</span> Mi trabajo me exige memorizar mucha información</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra18" id="radio86" value="4"/><label id="check1" for="radio86"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra18" id="radio87" value="3"/><label id="check1" for="radio87"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra18" id="radio88" value="2"/><label id="check1" for="radio88"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra18" id="radio89" value="1"/><label id="check1" for="radio89"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra18" id="radio90" value="0"/><label id="check1" for="radio90"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">19.</span> En mi trabajo tengo que tomar decisiones difíciles muy rápido</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra19" id="radio91" value="4"/><label id="check1" for="radio91"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra19" id="radio92" value="3"/><label id="check1" for="radio92"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra19" id="radio93" value="2"/><label id="check1" for="radio93"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra19" id="radio94" value="1"/><label id="check1" for="radio94"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra19" id="radio95" value="0"/><label id="check1" for="radio95"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">20.</span> Mi trabajo me exige atender muchos asuntos al mismo tiempo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra20" id="radio96" value="4"/><label id="check1" for="radio96"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra20" id="radio97" value="3"/><label id="check1" for="radio97"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra20" id="radio98" value="2"/><label id="check1" for="radio98"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra20" id="radio99" value="1"/><label id="check1" for="radio99"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra20" id="radio100" value="0"/><label id="check1" for="radio100"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">21.</span> Mi trabajo requiere que me fije en pequeños detalles</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra21" id="radio101" value="4"/><label id="check1" for="radio101"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra21" id="radio102" value="3"/><label id="check1" for="radio102"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra21" id="radio103" value="2"/><label id="check1" for="radio103"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra21" id="radio104" value="1"/><label id="check1" for="radio104"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra21" id="radio105" value="0"/><label id="check1" for="radio105"></label></td>
                        </tr>
                    </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con las responsabilidades y actividades que usted debe hacer en su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">         
                        <tr><td class="items"><span class="nIA">22.</span> En mi trabajo respondo por cosas de mucho valor</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra22" id="radio106" value="4"/><label id="check1" for="radio106"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra22" id="radio107" value="3"/><label id="check1" for="radio107"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra22" id="radio108" value="2"/><label id="check1" for="radio108"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra22" id="radio109" value="1"/><label id="check1" for="radio109"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra22" id="radio110" value="0"/><label id="check1" for="radio110"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">23.</span> En mi trabajo respondo por dinero de la empresa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra23" id="radio111" value="4"/><label id="check1" for="radio111"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra23" id="radio112" value="3"/><label id="check1" for="radio112"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra23" id="radio113" value="2"/><label id="check1" for="radio113"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra23" id="radio114" value="1"/><label id="check1" for="radio114"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra23" id="radio115" value="0"/><label id="check1" for="radio115"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">24.</span> Como parte de mis funciones debo responder por la seguridad de otros</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra24" id="radio116" value="4"/><label id="check1" for="radio116"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra24" id="radio117" value="3"/><label id="check1" for="radio117"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra24" id="radio118" value="2"/><label id="check1" for="radio118"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra24" id="radio119" value="1"/><label id="check1" for="radio119"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra24" id="radio120" value="0"/><label id="check1" for="radio120"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">25.</span> Respondo ante mi jefe por los resultados de toda mi área de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra25" id="radio121" value="4"/><label id="check1" for="radio121"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra25" id="radio122" value="3"/><label id="check1" for="radio122"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra25" id="radio123" value="2"/><label id="check1" for="radio123"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra25" id="radio124" value="1"/><label id="check1" for="radio124"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra25" id="radio125" value="0"/><label id="check1" for="radio125"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">26.</span> Mi trabajo me exige cuidar la salud de otras personas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra26" id="radio126" value="4"/><label id="check1" for="radio126"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra26" id="radio127" value="3"/><label id="check1" for="radio127"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra26" id="radio128" value="2"/><label id="check1" for="radio128"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra26" id="radio129" value="1"/><label id="check1" for="radio129"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra26" id="radio130" value="0"/><label id="check1" for="radio130"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">27.</span> En el trabajo me dan órdenes contradictorias</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra27" id="radio131" value="4"/><label id="check1" for="radio131"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra27" id="radio132" value="3"/><label id="check1" for="radio132"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra27" id="radio133" value="2"/><label id="check1" for="radio133"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra27" id="radio134" value="1"/><label id="check1" for="radio134"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra27" id="radio135" value="0"/><label id="check1" for="radio135"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">28.</span> En mi trabajo me piden hacer cosas innecesarias</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra28" id="radio136" value=4""/><label id="check1" for="radio136"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra28" id="radio137" value="3"/><label id="check1" for="radio137"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra28" id="radio138" value="2"/><label id="check1" for="radio138"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra28" id="radio139" value="1"/><label id="check1" for="radio139"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra28" id="radio140" value="0"/><label id="check1" for="radio140"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">29.</span> En mi trabajo se presentan situaciones en las que debo pasar por alto normas o procedimientos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra29" id="radio141" value="4"/><label id="check1" for="radio141"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra29" id="radio142" value="3"/><label id="check1" for="radio142"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra29" id="radio143" value="2"/><label id="check1" for="radio143"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra29" id="radio144" value="1"/><label id="check1" for="radio144"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra29" id="radio145" value="0"/><label id="check1" for="radio145"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">30.</span> En mi trabajo tengo que hacer cosas que se podrían hacer de una forma más práctica</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra30" id="radio146" value="4"/><label id="check1" for="radio146"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra30" id="radio147" value="3"/><label id="check1" for="radio147"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra30" id="radio148" value="2"/><label id="check1" for="radio148"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra30" id="radio149" value="1"/><label id="check1" for="radio149"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra30" id="radio150" value="0"/><label id="check1" for="radio150"></label></td>
                        </tr>
                    </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con la jornada de trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">          
                        <tr><td class="items"><span class="nIA">31.</span> Trabajo en horario nocturno</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra31" id="radio151" value="4"/><label id="check1" for="radio151"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra31" id="radio152" value="3"/><label id="check1" for="radio152"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra31" id="radio153" value="2"/><label id="check1" for="radio153"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra31" id="radio154" value="1"/><label id="check1" for="radio154"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra31" id="radio155" value="0"/><label id="check1" for="radio155"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">32.</span> En mi trabajo es posible tomar pausas para descansar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra32" id="radio156" value="0"/><label id="check1" for="radio156"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra32" id="radio157" value="1"/><label id="check1" for="radio157"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra32" id="radio158" value="2"/><label id="check1" for="radio158"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra32" id="radio159" value="3"/><label id="check1" for="radio159"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra32" id="radio160" value="4"/><label id="check1" for="radio160"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">33.</span> Mi trabajo me exige laborar en días de descanso, festivos y fines de semana</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra33" id="radio161" value="4"/><label id="check1" for="radio161"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra33" id="radio162" value="3"/><label id="check1" for="radio162"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra33" id="radio163" value="2"/><label id="check1" for="radio163"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra33" id="radio164" value="1"/><label id="check1" for="radio164"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra33" id="radio165" value="0"/><label id="check1" for="radio165"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">34.</span> En mi trabajo puedo tomar fines de semana o días de descanso al mes</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra34" id="radio166" value="0"/><label id="check1" for="radio166"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra34" id="radio167" value="1"/><label id="check1" for="radio167"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra34" id="radio168" value="2"/><label id="check1" for="radio168"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra34" id="radio169" value="3"/><label id="check1" for="radio169"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra34" id="radio170" value="4"/><label id="check1" for="radio170"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">35.</span> Cuando estoy en casa sigo pensando en el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra35" id="radio171" value="4"/><label id="check1" for="radio171"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra35" id="radio172" value="3"/><label id="check1" for="radio172"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra35" id="radio173" value="2"/><label id="check1" for="radio173"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra35" id="radio174" value="1"/><label id="check1" for="radio174"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra35" id="radio175" value="0"/><label id="check1" for="radio175"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">36.</span> Discuto con mi familia y con mis amigos por causa de mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra36" id="radio176" value="4"/><label id="check1" for="radio176"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra36" id="radio177" value="3"/><label id="check1" for="radio177"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra36" id="radio178" value="2"/><label id="check1" for="radio178"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra36" id="radio179" value="1"/><label id="check1" for="radio179"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra36" id="radio180" value="0"/><label id="check1" for="radio180"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">37.</span> Debo atender asuntos de trabajo cuando estoy en casa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra37" id="radio181" value="4"/><label id="check1" for="radio181"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra37" id="radio182" value="3"/><label id="check1" for="radio182"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra37" id="radio183" value="2"/><label id="check1" for="radio183"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra37" id="radio184" value="1"/><label id="check1" for="radio184"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra37" id="radio185" value="0"/><label id="check1" for="radio185"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">38.</span> Por mi trabajo el tiempo que paso con mi familia y amigos es muy poco</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra38" id="radio186" value="4"/><label id="check1" for="radio186"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra38" id="radio187" value="3"/><label id="check1" for="radio187"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra38" id="radio188" value="2"/><label id="check1" for="radio188"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra38" id="radio189" value="1"/><label id="check1" for="radio189"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra38" id="radio190" value="0"/><label id="check1" for="radio190"></label></td>
                        </tr>
                    </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con las decisiones y el control que le permite su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">          
                        <tr><td class="items"><span class="nIA">39.</span> Mi trabajo me permite desarrollar mis habilidades</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra39" id="radio191" value="0"/><label id="check1" for="radio191"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra39" id="radio192" value="1"/><label id="check1" for="radio192"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra39" id="radio193" value="2"/><label id="check1" for="radio193"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra39" id="radio194" value="3"/><label id="check1" for="radio194"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra39" id="radio195" value="4"/><label id="check1" for="radio195"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">40.</span> Mi trabajo me permite aplicar mis conocimientos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra40" id="radio196" value="0"/><label id="check1" for="radio196"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra40" id="radio197" value="1"/><label id="check1" for="radio197"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra40" id="radio198" value="2"/><label id="check1" for="radio198"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra40" id="radio199" value="3"/><label id="check1" for="radio199"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra40" id="radio200" value="4"/><label id="check1" for="radio200"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">41.</span> Mi trabajo me permite aprender nuevas cosas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra41" id="radio201" value="0"/><label id="check1" for="radio201"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra41" id="radio202" value="1"/><label id="check1" for="radio202"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra41" id="radio203" value="2"/><label id="check1" for="radio203"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra41" id="radio204" value="3"/><label id="check1" for="radio204"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra41" id="radio205" value="4"/><label id="check1" for="radio205"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">42.</span> Me asignan el trabajo teniendo en cuenta mis capacidades</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra42" id="radio206" value="0"/><label id="check1" for="radio206"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra42" id="radio207" value="1"/><label id="check1" for="radio207"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra42" id="radio208" value="2"/><label id="check1" for="radio208"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra42" id="radio209" value="3"/><label id="check1" for="radio209"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra42" id="radio210" value="4"/><label id="check1" for="radio210"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">43.</span> Puedo tomar pausas cuando lo necesito</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra43" id="radio211" value="0"/><label id="check1" for="radio211"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra43" id="radio212" value="1"/><label id="check1" for="radio212"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra43" id="radio213" value="2"/><label id="check1" for="radio213"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra43" id="radio214" value="3"/><label id="check1" for="radio214"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra43" id="radio215" value="4"/><label id="check1" for="radio215"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">44.</span> Puedo decidir cuánto trabajo hago al día</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra44" id="radio216" value="0"/><label id="check1" for="radio216"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra44" id="radio217" value="1"/><label id="check1" for="radio217"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra44" id="radio218" value="2"/><label id="check1" for="radio218"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra44" id="radio219" value="3"/><label id="check1" for="radio219"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra44" id="radio220" value="4"/><label id="check1" for="radio220"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">45.</span> Puedo decidir la velocidad con la que trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra45" id="radio221" value="0"/><label id="check1" for="radio221"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra45" id="radio222" value="1"/><label id="check1" for="radio222"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra45" id="radio223" value="2"/><label id="check1" for="radio223"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra45" id="radio224" value="3"/><label id="check1" for="radio224"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra45" id="radio225" value="4"/><label id="check1" for="radio225"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">46.</span> Puedo cambiar el orden de las actividades en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra46" id="radio226" value="0"/><label id="check1" for="radio226"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra46" id="radio227" value="1"/><label id="check1" for="radio227"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra46" id="radio228" value="2"/><label id="check1" for="radio228"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra46" id="radio229" value="3"/><label id="check1" for="radio229"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra46" id="radio230" value="4"/><label id="check1" for="radio230"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">47.</span> Puedo parar un momento mi trabajo para atender algún asunto personal</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra47" id="radio231" value="0"/><label id="check1" for="radio231"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra47" id="radio232" value="1"/><label id="check1" for="radio232"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra47" id="radio233" value="2"/><label id="check1" for="radio233"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra47" id="radio234" value="3"/><label id="check1" for="radio234"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra47" id="radio235" value="4"/><label id="check1" for="radio235"></label></td>
                        </tr>
                    </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con cualquier tipo de cambio que ocurra en su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">              
                        <tr><td class="items"><span class="nIA">48.</span> Los cambios en mi trabajo han sido beneficiosos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra48" id="radio236" value="0"/><label id="check1" for="radio236"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra48" id="radio237" value="1"/><label id="check1" for="radio237"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra48" id="radio238" value="2"/><label id="check1" for="radio238"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra48" id="radio239" value="3"/><label id="check1" for="radio239"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra48" id="radio240" value="4"/><label id="check1" for="radio240"></label></td>
                        </tr2>
                        <tr><td class="items"><span class="nIA">49.</span> Me explican claramente los cambios que ocurren en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra49" id="radio241" value="0"/><label id="check1" for="radio241"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra49" id="radio242" value="1"/><label id="check1" for="radio242"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra49" id="radio243" value="2"/><label id="check1" for="radio243"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra49" id="radio244" value="3"/><label id="check1" for="radio244"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra49" id="radio245" value="4"/><label id="check1" for="radio245"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">50.</span> Puedo dar sugerencias sobre los cambios que ocurren en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra50" id="radio246" value="0"/><label id="check1" for="radio246"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra50" id="radio247" value="1"/><label id="check1" for="radio247"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra50" id="radio248" value="2"/><label id="check1" for="radio248"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra50" id="radio249" value="3"/><label id="check1" for="radio249"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra50" id="radio250" value="4"/><label id="check1" for="radio250"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">51.</span> Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas y sugerencias</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra51" id="radio251" value="0"/><label id="check1" for="radio251"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra51" id="radio252" value="1"/><label id="check1" for="radio252"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra51" id="radio253" value="2"/><label id="check1" for="radio253"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra51" id="radio254" value="3"/><label id="check1" for="radio254"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra51" id="radio255" value="4"/><label id="check1" for="radio255"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">52.</span> Los cambios que se presentan en mi trabajo dificultan mi labor</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra52" id="radio256" value="4"/><label id="check1" for="radio256"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra52" id="radio257" value="3"/><label id="check1" for="radio257"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra52" id="radio258" value="2"/><label id="check1" for="radio258"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra52" id="radio259" value="1"/><label id="check1" for="radio259"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra52" id="radio260" value="0"/><label id="check1" for="radio260"></label></td>
                        </tr>
                    </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con la información que la empresa le ha dado sobre su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio"> 
                        <tr><td class="items"><span class="nIA">53.</span> Me informan con claridad cuáles son mis funciones</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra53" id="radio261" value="0"/><label id="check1" for="radio261"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra53" id="radio262" value="1"/><label id="check1" for="radio262"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra53" id="radio263" value="2"/><label id="check1" for="radio263"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra53" id="radio264" value="3"/><label id="check1" for="radio264"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra53" id="radio265" value="4"/><label id="check1" for="radio265"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">54.</span> Me informan cuáles son las decisiones que puedo tomar en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra54" id="radio266" value="0"/><label id="check1" for="radio266"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra54" id="radio267" value="1"/><label id="check1" for="radio267"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra54" id="radio268" value="2"/><label id="check1" for="radio268"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra54" id="radio269" value="3"/><label id="check1" for="radio269"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra54" id="radio270" value="4"/><label id="check1" for="radio270"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">55.</span> Me explican claramente los resultados que debo lograr en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra55" id="radio271" value="0"/><label id="check1" for="radio271"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra55" id="radio272" value="1"/><label id="check1" for="radio272"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra55" id="radio273" value="2"/><label id="check1" for="radio273"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra55" id="radio274" value="3"/><label id="check1" for="radio274"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra55" id="radio275" value="4"/><label id="check1" for="radio275"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">56.</span> Me explican claramente el efecto de mi trabajo en la empresa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra56" id="radio276" value="0"/><label id="check1" for="radio276"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra56" id="radio277" value="1"/><label id="check1" for="radio277"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra56" id="radio278" value="2"/><label id="check1" for="radio278"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra56" id="radio279" value="3"/><label id="check1" for="radio279"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra56" id="radio280" value="4"/><label id="check1" for="radio280"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">57.</span> Me explican claramente los objetivos de mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra57" id="radio281" value="0"/><label id="check1" for="radio281"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra57" id="radio282" value="1"/><label id="check1" for="radio282"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra57" id="radio283" value="2"/><label id="check1" for="radio283"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra57" id="radio284" value="3"/><label id="check1" for="radio284"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra57" id="radio285" value="4"/><label id="check1" for="radio285"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">58.</span> Me informan claramente quien me puede orientar para hacer mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra58" id="radio286" value="0"/><label id="check1" for="radio286"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra58" id="radio287" value="1"/><label id="check1" for="radio287"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra58" id="radio288" value="2"/><label id="check1" for="radio288"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra58" id="radio289" value="3"/><label id="check1" for="radio289"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra58" id="radio290" value="4"/><label id="check1" for="radio290"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">59.</span> Me informan claramente con quien puedo resolver los asuntos de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra59" id="radio291" value="0"/><label id="check1" for="radio291"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra59" id="radio292" value="1"/><label id="check1" for="radio292"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra59" id="radio293" value="2"/><label id="check1" for="radio293"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra59" id="radio294" value="3"/><label id="check1" for="radio294"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra59" id="radio295" value="4"/><label id="check1" for="radio295"></label></td>
                        </tr>
                    </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con la formación y capacitación que la empresa le facilita para hacer su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">             
                        <tr><td class="items"><span class="nIA">60.</span> La empresa me permite asistir a capacitaciones relacionadas con mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra60" id="radio296" value="0"/><label id="check1" for="radio296"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra60" id="radio297" value="1"/><label id="check1" for="radio297"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra60" id="radio298" value="2"/><label id="check1" for="radio298"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra60" id="radio299" value="3"/><label id="check1" for="radio299"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra60" id="radio300" value="4"/><label id="check1" for="radio300"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">61.</span> Recibo capacitación útil para hacer mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra61" id="radio301" value="0"/><label id="check1" for="radio301"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra61" id="radio302" value="1"/><label id="check1" for="radio302"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra61" id="radio303" value="2"/><label id="check1" for="radio303"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra61" id="radio304" value="3"/><label id="check1" for="radio304"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra61" id="radio305" value="4"/><label id="check1" for="radio305"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">62.</span> Recibo capacitación que me ayuda a hacer mejor mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra62" id="radio306" value="0"/><label id="check1" for="radio306"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra62" id="radio307" value="1"/><label id="check1" for="radio307"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra62" id="radio308" value="2"/><label id="check1" for="radio308"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra62" id="radio309" value="3"/><label id="check1" for="radio309"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra62" id="radio310" value="4"/><label id="check1" for="radio310"></label></td>
                        </tr>
                    </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con el o los jefes con quién tenga más contacto.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">  
                        <tr><td class="items"><span class="nIA">63.</span> Mi jefe me da instrucciones claras</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra63" id="radio311" value="0"/><label id="check1" for="radio311"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra63" id="radio312" value="1"/><label id="check1" for="radio312"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra63" id="radio313" value="2"/><label id="check1" for="radio313"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra63" id="radio314" value="3"/><label id="check1" for="radio314"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra63" id="radio315" value="4"/><label id="check1" for="radio315"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">64.</span> Mi jefe ayuda a organizar mejor mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra64" id="radio316" value="0"/><label id="check1" for="radio316"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra64" id="radio317" value="1"/><label id="check1" for="radio317"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra64" id="radio318" value="2"/><label id="check1" for="radio318"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra64" id="radio319" value="3"/><label id="check1" for="radio319"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra64" id="radio320" value="4"/><label id="check1" for="radio320"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">65.</span> Mi jefe tiene en cuenta mis puntos de vista y opiniones</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra65" id="radio321" value="0"/><label id="check1" for="radio321"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra65" id="radio322" value="1"/><label id="check1" for="radio322"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra65" id="radio323" value="2"/><label id="check1" for="radio323"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra65" id="radio324" value="3"/><label id="check1" for="radio324"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra65" id="radio325" value="4"/><label id="check1" for="radio325"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">66.</span> Mi jefe me anima para hacer mejor mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra66" id="radio326" value="0"/><label id="check1" for="radio326"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra66" id="radio327" value="1"/><label id="check1" for="radio327"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra66" id="radio328" value="2"/><label id="check1" for="radio328"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra66" id="radio329" value="3"/><label id="check1" for="radio329"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra66" id="radio330" value="4"/><label id="check1" for="radio330"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">67.</span> Mi jefe distribuye las tareas de forma que me facilita el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra67" id="radio331" value="0"/><label id="check1" for="radio331"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra67" id="radio332" value="1"/><label id="check1" for="radio332"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra67" id="radio333" value="2"/><label id="check1" for="radio333"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra67" id="radio334" value="3"/><label id="check1" for="radio334"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra67" id="radio335" value="4"/><label id="check1" for="radio335"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">68.</span> Mi jefe me comunica a tiempo la información relacionada con el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra68" id="radio336" value="0"/><label id="check1" for="radio336"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra68" id="radio337" value="1"/><label id="check1" for="radio337"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra68" id="radio338" value="2"/><label id="check1" for="radio338"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra68" id="radio339" value="3"/><label id="check1" for="radio339"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra68" id="radio340" value="4"/><label id="check1" for="radio340"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">69.</span> La orientación que me da mi jefe me ayuda a realizar mejor el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra69" id="radio341" value="0"/><label id="check1" for="radio341"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra69" id="radio342" value="1"/><label id="check1" for="radio342"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra69" id="radio343" value="2"/><label id="check1" for="radio343"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra69" id="radio344" value="3"/><label id="check1" for="radio344"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra69" id="radio345" value="4"/><label id="check1" for="radio345"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">70.</span> Mi jefe me ayuda a progresar en el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra70" id="radio346" value="0"/><label id="check1" for="radio346"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra70" id="radio347" value="1"/><label id="check1" for="radio347"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra70" id="radio348" value="2"/><label id="check1" for="radio348"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra70" id="radio349" value="3"/><label id="check1" for="radio349"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra70" id="radio350" value="4"/><label id="check1" for="radio350"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">71.</span> Mi jefe me ayuda a sentirme bien en el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra71" id="radio351" value="0"/><label id="check1" for="radio351"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra71" id="radio352" value="1"/><label id="check1" for="radio352"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra71" id="radio353" value="2"/><label id="check1" for="radio353"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra71" id="radio354" value="3"/><label id="check1" for="radio354"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra71" id="radio355" value="4"/><label id="check1" for="radio355"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">72.</span> Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra72" id="radio356" value="0"/><label id="check1" for="radio356"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra72" id="radio357" value="1"/><label id="check1" for="radio357"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra72" id="radio358" value="2"/><label id="check1" for="radio358"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra72" id="radio359" value="3"/><label id="check1" for="radio359"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra72" id="radio360" value="4"/><label id="check1" for="radio360"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">73.</span> Siento que puedo confiar en mi jefe</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra73" id="radio361" value="0"/><label id="check1" for="radio361"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra73" id="radio362" value="1"/><label id="check1" for="radio362"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra73" id="radio363" value="2"/><label id="check1" for="radio363"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra73" id="radio364" value="3"/><label id="check1" for="radio364"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra73" id="radio365" value="4"/><label id="check1" for="radio365"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">74.</span> Mi jefe me escucha cuando tengo problemas de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra74" id="radio366" value="0"/><label id="check1" for="radio366"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra74" id="radio367" value="1"/><label id="check1" for="radio367"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra74" id="radio368" value="2"/><label id="check1" for="radio368"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra74" id="radio369" value="3"/><label id="check1" for="radio369"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra74" id="radio370" value="4"/><label id="check1" for="radio370"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">75.</span> Mi jefe me brinda su apoyo cuando lo necesito</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra75" id="radio371" value="0"/><label id="check1" for="radio371"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra75" id="radio372" value="1"/><label id="check1" for="radio372"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra75" id="radio373" value="2"/><label id="check1" for="radio373"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra75" id="radio374" value="3"/><label id="check1" for="radio374"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra75" id="radio375" value="4"/><label id="check1" for="radio375"></label></td>
                        </tr>
                    </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas indagan sobre la relación con otras personas y el apoyo entre las personas de su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">         
                        <tr><td class="items"><span class="nIA">76.</span> Me agrada el ambiente de mi grupo de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra76" id="radio376" value="0"/><label id="check1" for="radio376"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra76" id="radio377" value="1"/><label id="check1" for="radio377"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra76" id="radio378" value="2"/><label id="check1" for="radio378"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra76" id="radio379" value="3"/><label id="check1" for="radio379"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra76" id="radio380" value="4"/><label id="check1" for="radio380"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">77.</span> En mi grupo de trabajo me tratan de forma respetuosa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra77" id="radio381" value="0"/><label id="check1" for="radio381"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra77" id="radio382" value="1"/><label id="check1" for="radio382"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra77" id="radio383" value="2"/><label id="check1" for="radio383"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra77" id="radio384" value="3"/><label id="check1" for="radio384"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra77" id="radio385" value="4"/><label id="check1" for="radio385"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">78.</span> Siento que puedo confiar en mis compañeros de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra78" id="radio386" value="0"/><label id="check1" for="radio386"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra78" id="radio387" value="1"/><label id="check1" for="radio387"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra78" id="radio388" value="2"/><label id="check1" for="radio388"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra78" id="radio389" value="3"/><label id="check1" for="radio389"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra78" id="radio390" value="4"/><label id="check1" for="radio390"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">79.</span> Me siento a gusto con mis compañeros de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra79" id="radio391" value="0"/><label id="check1" for="radio391"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra79" id="radio392" value="1"/><label id="check1" for="radio392"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra79" id="radio393" value="2"/><label id="check1" for="radio393"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra79" id="radio394" value="3"/><label id="check1" for="radio394"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra79" id="radio395" value="4"/><label id="check1" for="radio395"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">80.</span> En mi grupo de trabajo algunas personas me maltratan</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra80" id="radio396" value="4"/><label id="check1" for="radio396"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra80" id="radio397" value="3"/><label id="check1" for="radio397"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra80" id="radio398" value="2"/><label id="check1" for="radio398"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra80" id="radio399" value="1"/><label id="check1" for="radio399"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra80" id="radio400" value="0"/><label id="check1" for="radio400"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">81.</span> Entre compañeros solucionamos los problemas de forma respetuosa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra81" id="radio401" value="0"/><label id="check1" for="radio401"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra81" id="radio402" value="1"/><label id="check1" for="radio402"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra81" id="radio403" value="2"/><label id="check1" for="radio403"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra81" id="radio404" value="3"/><label id="check1" for="radio404"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra81" id="radio405" value="4"/><label id="check1" for="radio405"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">82.</span> Hay integración en mi grupo de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra82" id="radio406" value="0"/><label id="check1" for="radio406"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra82" id="radio407" value="1"/><label id="check1" for="radio407"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra82" id="radio408" value="2"/><label id="check1" for="radio408"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra82" id="radio409" value="3"/><label id="check1" for="radio409"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra82" id="radio410" value="4"/><label id="check1" for="radio410"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">83.</span> Mi grupo de trabajo es muy unido</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra83" id="radio411" value="0"/><label id="check1" for="radio411"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra83" id="radio412" value="1"/><label id="check1" for="radio412"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra83" id="radio413" value="2"/><label id="check1" for="radio413"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra83" id="radio414" value="3"/><label id="check1" for="radio414"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra83" id="radio415" value="4"/><label id="check1" for="radio415"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">84.</span> Las personas en mi trabajo me hacen sentir parte del grupo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra84" id="radio416" value="0"/><label id="check1" for="radio416"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra84" id="radio417" value="1"/><label id="check1" for="radio417"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra84" id="radio418" value="2"/><label id="check1" for="radio418"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra84" id="radio419" value="3"/><label id="check1" for="radio419"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra84" id="radio420" value="4"/><label id="check1" for="radio420"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">85.</span> Cuando tenemos que realizar trabajos de grupo los compañeros colaboran</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra85" id="radio421" value="0"/><label id="check1" for="radio421"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra85" id="radio422" value="1"/><label id="check1" for="radio422"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra85" id="radio423" value="2"/><label id="check1" for="radio423"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra85" id="radio424" value="3"/><label id="check1" for="radio424"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra85" id="radio425" value="4"/><label id="check1" for="radio425"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">86.</span> Es fácil poner de acuerdo al grupo para hacer el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra86" id="radio426" value="0"/><label id="check1" for="radio426"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra86" id="radio427" value="1"/><label id="check1" for="radio427"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra86" id="radio428" value="2"/><label id="check1" for="radio428"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra86" id="radio429" value="3"/><label id="check1" for="radio429"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra86" id="radio430" value="4"/><label id="check1" for="radio430"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">87.</span> Mis compañeros de trabajo me ayudan cuando tengo dificultades</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra87" id="radio431" value="0"/><label id="check1" for="radio431"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra87" id="radio432" value="1"/><label id="check1" for="radio432"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra87" id="radio433" value="2"/><label id="check1" for="radio433"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra87" id="radio434" value="3"/><label id="check1" for="radio434"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra87" id="radio435" value="4"/><label id="check1" for="radio435"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">88.</span> En mi trabajo las personas nos apoyamos unos a otros</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra88" id="radio436" value="0"/><label id="check1" for="radio436"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra88" id="radio437" value="1"/><label id="check1" for="radio437"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra88" id="radio438" value="2"/><label id="check1" for="radio438"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra88" id="radio439" value="3"/><label id="check1" for="radio439"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra88" id="radio440" value="4"/><label id="check1" for="radio440"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">89.</span> Algunos compañeros de trabajo me escuchan cuando tengo problemas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra89" id="radio441" value="0"/><label id="check1" for="radio441"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra89" id="radio442" value="1"/><label id="check1" for="radio442"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra89" id="radio443" value="2"/><label id="check1" for="radio443"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra89" id="radio444" value="3"/><label id="check1" for="radio444"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra89" id="radio445" value="4"/><label id="check1" for="radio445"></label></td>
                        </tr>
                    </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con la información que usted recibe sobre su rendimiento en el trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">         
                        <tr><td class="items"><span class="nIA">90.</span> Me informan sobre lo que hago bien en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra90" id="radio446" value="0"/><label id="check1" for="radio446"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra90" id="radio447" value="1"/><label id="check1" for="radio447"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra90" id="radio448" value="2"/><label id="check1" for="radio448"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra90" id="radio449" value="3"/><label id="check1" for="radio449"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra90" id="radio450" value="4"/><label id="check1" for="radio450"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">91.</span> Me informan sobre lo que debo mejorar en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra91" id="radio451" value="0"/><label id="check1" for="radio451"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra91" id="radio452" value="1"/><label id="check1" for="radio452"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra91" id="radio453" value="2"/><label id="check1" for="radio453"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra91" id="radio454" value="3"/><label id="check1" for="radio454"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra91" id="radio455" value="4"/><label id="check1" for="radio455"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">92.</span> La información que recibo sobre mi rendimiento en el trabajo es clara</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra92" id="radio456" value="0"/><label id="check1" for="radio456"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra92" id="radio457" value="1"/><label id="check1" for="radio457"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra92" id="radio458" value="2"/><label id="check1" for="radio458"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra92" id="radio459" value="3"/><label id="check1" for="radio459"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra92" id="radio460" value="4"/><label id="check1" for="radio460"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">93.</span> La forma como evalúan mi trabajo en la empresa me ayuda a mejorar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra93" id="radio461" value="0"/><label id="check1" for="radio461"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra93" id="radio462" value="1"/><label id="check1" for="radio462"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra93" id="radio463" value="2"/><label id="check1" for="radio463"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra93" id="radio464" value="3"/><label id="check1" for="radio464"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra93" id="radio465" value="4"/><label id="check1" for="radio465"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">94.</span> Me informan a tiempo sobre lo que debo mejorar en el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra94" id="radio466" value="0"/><label id="check1" for="radio466"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra94" id="radio467" value="1"/><label id="check1" for="radio467"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra94" id="radio468" value="2"/><label id="check1" for="radio468"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra94" id="radio469" value="3"/><label id="check1" for="radio469"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra94" id="radio470" value="4"/><label id="check1" for="radio470"></label></td>
                        </tr>
                        </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con la satisfacción, el reconocimiento y la seguridad que le ofrece su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">  
                        <tr><td class="items"><span class="nIA">95.</span> En la empresa confían en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra95" id="radio471" value="0"/><label id="check1" for="radio471"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra95" id="radio472" value="1"/><label id="check1" for="radio472"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra95" id="radio473" value="2"/><label id="check1" for="radio473"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra95" id="radio474" value="3"/><label id="check1" for="radio474"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra95" id="radio475" value="4"/><label id="check1" for="radio475"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">96.</span> En la empresa me pagan a tiempo mi salario</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra96" id="radio476" value="0"/><label id="check1" for="radio476"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra96" id="radio477" value="1"/><label id="check1" for="radio477"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra96" id="radio478" value="2"/><label id="check1" for="radio478"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra96" id="radio479" value="3"/><label id="check1" for="radio479"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra96" id="radio480" value="4"/><label id="check1" for="radio480"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">97.</span> El pago que recibo es el que me ofreció la empresa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra97" id="radio481" value="0"/><label id="check1" for="radio481"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra97" id="radio482" value="1"/><label id="check1" for="radio482"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra97" id="radio483" value="2"/><label id="check1" for="radio483"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra97" id="radio484" value="3"/><label id="check1" for="radio484"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra97" id="radio485" value="4"/><label id="check1" for="radio485"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">98.</span> El pago que recibo es el que merezco por el trabajo que realizo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra98" id="radio486" value="0"/><label id="check1" for="radio486"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra98" id="radio487" value="1"/><label id="check1" for="radio487"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra98" id="radio488" value="2"/><label id="check1" for="radio488"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra98" id="radio489" value="3"/><label id="check1" for="radio489"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra98" id="radio490" value="4"/><label id="check1" for="radio490"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">99.</span> En mi trabajo tengo posibilidades de progresar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra99" id="radio491" value="0"/><label id="check1" for="radio491"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra99" id="radio492" value="1"/><label id="check1" for="radio492"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra99" id="radio493" value="2"/><label id="check1" for="radio493"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra99" id="radio494" value="3"/><label id="check1" for="radio494"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra99" id="radio495" value="4"/><label id="check1" for="radio495"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">100.</span> Las personas que hacen bien el trabajo pueden progresar en la empresa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra100" id="radio496" value="0"/><label id="check1" for="radio496"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra100" id="radio497" value="1"/><label id="check1" for="radio497"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra100" id="radio498" value="2"/><label id="check1" for="radio498"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra100" id="radio499" value="3"/><label id="check1" for="radio499"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra100" id="radio500" value="4"/><label id="check1" for="radio500"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">101.</span> La empresa se preocupa por el bienestar de los trabajadores</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra101" id="radio501" value="0"/><label id="check1" for="radio501"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra101" id="radio502" value="1"/><label id="check1" for="radio502"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra101" id="radio503" value="2"/><label id="check1" for="radio503"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra101" id="radio504" value="3"/><label id="check1" for="radio504"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra101" id="radio505" value="4"/><label id="check1" for="radio505"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">102.</span> Mi trabajo en la empresa es estable</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra102" id="radio506" value="0"/><label id="check1" for="radio506"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra102" id="radio507" value="1"/><label id="check1" for="radio507"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra102" id="radio508" value="2"/><label id="check1" for="radio508"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra102" id="radio509" value="3"/><label id="check1" for="radio509"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra102" id="radio510" value="4"/><label id="check1" for="radio510"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">103.</span> El trabajo que hago me hace sentir bien</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra103" id="radio511" value="0"/><label id="check1" for="radio511"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra103" id="radio512" value="1"/><label id="check1" for="radio512"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra103" id="radio513" value="2"/><label id="check1" for="radio513"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra103" id="radio514" value="3"/><label id="check1" for="radio514"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra103" id="radio515" value="4"/><label id="check1" for="radio515"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">104.</span> Siento orgullo de trabajar en esta empresa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra104" id="radio516" value="0"/><label id="check1" for="radio516"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra104" id="radio517" value="1"/><label id="check1" for="radio517"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra104" id="radio518" value="2"/><label id="check1" for="radio518"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra104" id="radio519" value="3"/><label id="check1" for="radio519"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra104" id="radio520" value="4"/><label id="check1" for="radio520"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">105.</span> Hablo bien de la empresa con otras personas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra105" id="radio521" value="0"/><label id="check1" for="radio521"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra105" id="radio522" value="1"/><label id="check1" for="radio522"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra105" id="radio523" value="2"/><label id="check1" for="radio523"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra105" id="radio524" value="3"/><label id="check1" for="radio524"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra105" id="radio525" value="4"/><label id="check1" for="radio525"></label></td>
                        </tr>
                   </table>
                </section> 
                <p style="font-size:16px;line-height:1em;font-family:Narrow;letter-spacing:1px">Si en su trabajo debe brindar atención a cliente y usuarios, marque la siguiente flecha:</p>
                <p><a style='cursor: pointer;text-decoration:none;' class="correcta" onclick="muestra_oculta1('mostrar1')" title=""><font class="fa fa-angle-down" style="font-size:55px;color:#f58634"></font></a></p>
                <div id="mostrar1">
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con la atención al cliente o usuarios.</p>
                </section>
                <section  style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">             
                        <tr><td class="items"><span class="nIA">106.</span> Atiendo clientes o usuarios muy enojados</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra106" id="radio526" value="4"/><label id="check1" for="radio526"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra106" id="radio527" value="3"/><label id="check1" for="radio527"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra106" id="radio528" value="2"/><label id="check1" for="radio528"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra106" id="radio529" value="1"/><label id="check1" for="radio529"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra106" id="radio530" value="0"/><label id="check1" for="radio530"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">107.</span> Atiendo clientes o usuarios muy preocupados</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra107" id="radio531" value="4"/><label id="check1" for="radio531"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra107" id="radio532" value="3"/><label id="check1" for="radio532"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra107" id="radio533" value="2"/><label id="check1" for="radio533"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra107" id="radio534" value="1"/><label id="check1" for="radio534"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra107" id="radio535" value="0"/><label id="check1" for="radio535"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">108.</span> Atiendo clientes o usuarios muy tristes</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra108" id="radio536" value="4"/><label id="check1" for="radio536"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra108" id="radio537" value="3"/><label id="check1" for="radio537"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra108" id="radio538" value="2"/><label id="check1" for="radio538"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra108" id="radio539" value="1"/><label id="check1" for="radio539"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra108" id="radio540" value="0"/><label id="check1" for="radio540"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">109.</span> Mi trabajo me exige atender personas muy enfermas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra109" id="radio541" value="4"/><label id="check1" for="radio541"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra109" id="radio542" value="3"/><label id="check1" for="radio542"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra109" id="radio543" value="2"/><label id="check1" for="radio543"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra109" id="radio544" value="1"/><label id="check1" for="radio544"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra109" id="radio545" value="0"/><label id="check1" for="radio545"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">110.</span> Mi trabajo me exige atender personas muy necesitadas de ayuda</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra110" id="radio546" value="4"/><label id="check1" for="radio546"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra110" id="radio547" value="3"/><label id="check1" for="radio547"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra110" id="radio548" value="2"/><label id="check1" for="radio548"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra110" id="radio549" value="1"/><label id="check1" for="radio549"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra110" id="radio550" value="0"/><label id="check1" for="radio550"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">111.</span> Atiendo clientes o usuarios que me maltratan</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra111" id="radio551" value="4"/><label id="check1" for="radio551"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra111" id="radio552" value="3"/><label id="check1" for="radio552"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra111" id="radio553" value="2"/><label id="check1" for="radio553"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra111" id="radio554" value="1"/><label id="check1" for="radio554"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra111" id="radio555" value="0"/><label id="check1" for="radio555"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">112.</span> Para hacer mi trabajo debo demostrar sentimientos distintos a los míos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra112" id="radio556" value="4"/><label id="check1" for="radio556"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra112" id="radio557" value="3"/><label id="check1" for="radio557"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra112" id="radio558" value="2"/><label id="check1" for="radio558"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra112" id="radio559" value="1"/><label id="check1" for="radio559"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra112" id="radio560" value="0"/><label id="check1" for="radio560"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">113.</span> Mi trabajo me exige atender situaciones de violencia</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra113" id="radio561" value="4"/><label id="check1" for="radio561"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra113" id="radio562" value="3"/><label id="check1" for="radio562"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra113" id="radio563" value="2"/><label id="check1" for="radio563"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra113" id="radio564" value="1"/><label id="check1" for="radio564"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra113" id="radio565" value="0"/><label id="check1" for="radio565"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">114.</span> Mi trabajo me exige atender situaciones muy tristes o dolorosas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra114" id="radio566" value="4"/><label id="check1" for="radio566"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra114" id="radio567" value="3"/><label id="check1" for="radio567"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra114" id="radio568" value="2"/><label id="check1" for="radio568"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra114" id="radio569" value="1"/><label id="check1" for="radio569"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra114" id="radio570" value="0"/><label id="check1" for="radio570"></label></td>
                        </tr>
                    </table>
                </section>
                </div>
                <p style="font-size:16px;line-height:1em;font-family:Narrow;letter-spacing:1px">Si es jefe de otras personas en su trabajo, marque la siguiente flecha:</p>
                <p><a style='cursor: pointer;text-decoration:none;' class="correcta" onclick="muestra_oculta1('mostrar2')" title=""><font class="fa fa-angle-down" style="font-size:55px;color:#f58634"></font></a></p>
                <div id="mostrar2">
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con las personas que usted supervisa o dirige.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">         
                        <tr><td class="items"><span class="nIA">115.</span> Tengo colaboradores que comunican tarde los asuntos de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra115" id="radio571" value="4"/><label id="check1" for="radio571"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra115" id="radio572" value="3"/><label id="check1" for="radio572"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra115" id="radio573" value="2"/><label id="check1" for="radio573"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra115" id="radio574" value="1"/><label id="check1" for="radio574"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra115" id="radio575" value="0"/><label id="check1" for="radio575"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">116.</span> Tengo colaboradores que tienen comportamientos irrespetuosos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra116" id="radio576" value="4"/><label id="check1" for="radio576"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra116" id="radio577" value="3"/><label id="check1" for="radio577"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra116" id="radio578" value="2"/><label id="check1" for="radio578"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra116" id="radio579" value="1"/><label id="check1" for="radio579"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra116" id="radio580" value="0"/><label id="check1" for="radio580"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">117.</span> Tengo colaboradores que dificultan la organización del trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra117" id="radio581" value="4"/><label id="check1" for="radio581"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra117" id="radio582" value="3"/><label id="check1" for="radio582"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra117" id="radio583" value="2"/><label id="check1" for="radio583"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra117" id="radio584" value="1"/><label id="check1" for="radio584"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra117" id="radio585" value="0"/><label id="check1" for="radio585"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">118.</span> Tengo colaboradores que guardan silencio cuandose les piden opiniones</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra118" id="radio586" value="4"/><label id="check1" for="radio586"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra118" id="radio587" value="3"/><label id="check1" for="radio587"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra118" id="radio588" value="2"/><label id="check1" for="radio588"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra118" id="radio589" value="1"/><label id="check1" for="radio589"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra118" id="radio590" value="0"/><label id="check1" for="radio590"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">119.</span> Tengo colaboradores que dificultan el logro de los resultados del trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra119" id="radio591" value="4"/><label id="check1" for="radio591"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra119" id="radio592" value="3"/><label id="check1" for="radio592"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra119" id="radio593" value="2"/><label id="check1" for="radio593"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra119" id="radio594" value="1"/><label id="check1" for="radio594"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra119" id="radio595" value="0"/><label id="check1" for="radio595"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">120.</span> Tengo colaboradores que expresan de forma irrespetuosa sus desacuerdos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra120" id="radio596" value="4"/><label id="check1" for="radio596"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra120" id="radio597" value="3"/><label id="check1" for="radio597"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra120" id="radio598" value="2"/><label id="check1" for="radio598"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra120" id="radio599" value="1"/><label id="check1" for="radio599"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra120" id="radio600" value="0"/><label id="check1" for="radio600"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">121.</span> Tengo colaboradores que cooperan poco cuando se les necesita</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra121" id="radio601" value="4"/><label id="check1" for="radio601"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra121" id="radio602" value="3"/><label id="check1" for="radio602"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra121" id="radio603" value="2"/><label id="check1" for="radio603"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra121" id="radio604" value="1"/><label id="check1" for="radio604"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra121" id="radio605" value="0"/><label id="check1" for="radio605"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">122.</span> Tengo colaboradores que me preocupan por su desempeño</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra122" id="radio606" value="4"/><label id="check1" for="radio606"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra122" id="radio607" value="3"/><label id="check1" for="radio607"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra122" id="radio608" value="2"/><label id="check1" for="radio608"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra122" id="radio609" value="1"/><label id="check1" for="radio609"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra122" id="radio610" value="0"/><label id="check1" for="radio610"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">123.</span> Tengo colaboradores que ignoran las sugerencias para mejorar su trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>      <input type="radio" name="intra123" id="radio611" value="4"/><label id="check1" for="radio611"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span> <input type="radio" name="intra123" id="radio612" value="3"/><label id="check1" for="radio612"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intra123" id="radio613" value="2"/><label id="check1" for="radio613"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>   <input type="radio" name="intra123" id="radio614" value="1"/><label id="check1" for="radio614"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>        <input type="radio" name="intra123" id="radio615" value="0"/><label id="check1" for="radio615"></label></td>
                        </tr>
                    </table>
                    </section>
                    </div><br>
                    <div><input id="botonIA" type="submit"  class="btn btn btn-default btn-block" name="enviar1" style="width:13em !important;height:2.5em!important;background: linear-gradient(to bottom, #e6e6e6, #cccccc) !important;font-family:Moristonb;color: #000000 !important;border: none !important;border-radius: 16px !important;font-size:14px !important;box-shadow: 0 4px 14px rgba(161, 225, 132, 0.3) !important;transition: all 0.3s ease !important;position:relative;cursor:pointer;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(100,100,100,0.4)';this.style.background='linear-gradient(135deg, #b3b3b3, #999999)'" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 14px rgba(161, 225, 132, 0.3)';this.style.background='linear-gradient(135deg, #e6e6e6, #cccccc)'"/></div><br>  
                </form>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>      
<div id="costumModal4" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-lg" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <p class="captura1" style="font-size:22px;line-height:1em;font-family:Narrow;letter-spacing:2px">Evaluación del Riesgo Psicosocial Intralaboral - <span style="color:#f58634;letter-spacing:2px">Forma B</span></p><br>
                <section class="panel panel-body" style="padding:3%;border-radius:0px">
                    <p style="text-align:left;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px"><?php echo $Sexo.' '.$Nombre ?>:</p><br>
                    <p class="parrafo">Este cuestionario busca conocer su opinión sobre algunos aspectos de su <span style="font-family:verdanab">trabajo</span>.</p>
                    <p class="parrafo">Le agradecemos que conteste las siguientes preguntas con toda la sinceridad del caso.  Las respuestas que usted da al cuestionario no son ni buenas, ni malas, lo importante es que reflejen su manera de pensar sobre su trabajo.</p>
                    <p class="parrafo">Lea cuidadosamente cada pregunta, luego piense como es su trabajo y responda a todas las preguntas, en cada una de ellas marque una sola respuesta. Señale el cuadro de la respuesta que refleje mejor su trabajo, si se equivoca en una respuesa, simplemente seleccione otro cuadro.</p><br>
                    <p style="text-align:left;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px">Ejemplo:</p>
                    <table id="tabla2" bordered="0" class="radio">
                        <tr>
                            <td class="items"><span class="nIA">1.</span> El ruido en el lugar donde trabajo es molesto</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="intrab_1" id="radiob_1" value=""/><label id="check11" for="radiob_1"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="intrab_1" id="radiob_2" value="" checked/><label id="check11" for="radiob_2"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab_1" id="radiob_3" value=""/><label id="check11" for="radiob_3"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="intrab_1" id="radiob_4" value=""/><label id="check11" for="radiob_4"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="intrab_1" id="radiob_5" value=""/><label id="check11" for="radiob_5"></td>
                        </tr>
                    </table>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspTenga en cuenta que el cuestionario no lo(a) evalúa a usted como trabajador(a), sino que busca conocer cómo es el trabajo que le han asignado.</p>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspSus respuestas serán manejadas de forma confidencial.</p>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspSi tiene duda respecto a una pregunta, solicite mayor explicación mediante el n° celular <span style='color:#248f24;font-size:16px' class='fa fa-whatsapp'></span><a href='https://api.whatsapp.com/send?phone=573115602702' target='_blank' style='color:#248f24;font-family:verdanab'>&nbsp3115602702</a>.</p>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspEl cuestionario no tiene límite de tiempo; sin embargo, usted requerirá de 1 hora aproximadamente para contestar todas las preguntas.</p>
                    <p style="text-align:center;padding-left:5%;padding-right:5%;font-family:narrow;font-size:18px;letter-spacing:2px">Gracias por su colaboración</p>
                </section>
                <p style="text-align:center;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px">Seleccione una de las siguientes alternativas en cada numeral:</p>
                <table class="tableIA liker" align="center" bordered="0">
                    <tr>
                        <th>Siempre</th>
                        <th>Casi siempre</th>
                        <th>Algunas veces</th>
                        <th>Casi nunca</th>
                        <th>Nunca</th>
                    </tr>
                </table><br>    
                <form name="formIB" id="formIB">
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con las condiciones ambientales del sitio o lugar donde habitualmente realiza su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">
                        <tr><td class="items"><span class="nIA">1.</span> El ruido en el lugar donde trabajo es molesto</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab1" id="radiob1" value="4"/><label id="check1" for="radiob1"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab1" id="radiob2" value="3"/><label id="check1" for="radiob2"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab1" id="radiob3" value="2"/><label id="check1" for="radiob3"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab1" id="radiob4" value="1"/><label id="check1" for="radiob4"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab1" id="radiob5" value="0"/><label id="check1" for="radiob5"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">2.</span> En el lugar donde trabajo hace mucho frío</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab2" id="radiob6" value="4"/><label id="check1" for="radiob6"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab2" id="radiob7" value="3"/><label id="check1" for="radiob7"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab2" id="radiob8" value="2"/><label id="check1" for="radiob8"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab2" id="radiob9" value="1"/><label id="check1" for="radiob9"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab2" id="radiob10" value="0"/><label id="check1" for="radiob10"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">3.</span> En el lugar donde trabajo hace mucho calor</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab3" id="radiob11" value="4"/><label id="check1" for="radiob11"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab3" id="radiob12" value="3"/><label id="check1" for="radiob12"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab3" id="radiob13" value="2"/><label id="check1" for="radiob13"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab3" id="radiob14" value="1"/><label id="check1" for="radiob14"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab3" id="radiob15" value="0"/><label id="check1" for="radiob15"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">4.</span> El aire donde trabajo es fresco y agradable</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab4" id="radiob16" value="0"/><label id="check1" for="radiob16"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab4" id="radiob17" value="1"/><label id="check1" for="radiob17"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab4" id="radiob18" value="2"/><label id="check1" for="radiob18"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab4" id="radiob19" value="3"/><label id="check1" for="radiob19"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab4" id="radiob20" value="4"/><label id="check1" for="radiob20"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">5.</span> La luz del sitio donde trabajo es agradable</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab5" id="radiob21" value="0"/><label id="check1" for="radiob21"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab5" id="radiob22" value="1"/><label id="check1" for="radiob22"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab5" id="radiob23" value="2"/><label id="check1" for="radiob23"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab5" id="radiob24" value="3"/><label id="check1" for="radiob24"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab5" id="radiob25" value="4"/><label id="check1" for="radiob25"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">6.</span> El espacio donde trabajo es cómodo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab6" id="radiob26" value="0"/><label id="check1" for="radiob26"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab6" id="radiob27" value="1"/><label id="check1" for="radiob27"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab6" id="radiob28" value="2"/><label id="check1" for="radiob28"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab6" id="radiob29" value="3"/><label id="check1" for="radiob29"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab6" id="radiob30" value="4"/><label id="check1" for="radiob30"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">7.</span> En mi trabajo me preocupa estar expuesto a sustancias químicas que afecten mi salud</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab7" id="radiob31" value="4"/><label id="check1" for="radiob31"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab7" id="radiob32" value="3"/><label id="check1" for="radiob32"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab7" id="radiob33" value="2"/><label id="check1" for="radiob33"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab7" id="radiob34" value="1"/><label id="check1" for="radiob34"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab7" id="radiob35" value="0"/><label id="check1" for="radiob35"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">8.</span> Mi trabajo me exige hacer mucho esfuerzo físico</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab8" id="radiob36" value="4"/><label id="check1" for="radiob36"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab8" id="radiob37" value="3"/><label id="check1" for="radiob37"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab8" id="radiob38" value="2"/><label id="check1" for="radiob38"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab8" id="radiob39" value="1"/><label id="check1" for="radiob39"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab8" id="radiob40" value="0"/><label id="check1" for="radiob40"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">9.</span> Los equipos o herramientas con los que trabajo son cómodos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab9" id="radiob41" value="0"/><label id="check1" for="radiob41"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab9" id="radiob42" value="1"/><label id="check1" for="radiob42"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab9" id="radiob43" value="2"/><label id="check1" for="radiob43"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab9" id="radiob44" value="3"/><label id="check1" for="radiob44"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab9" id="radiob45" value="4"/><label id="check1" for="radiob45"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">10.</span> En mi trabajo me preocupa estar expuesto a microbios, animales o plantas que afecten mi salud</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab10" id="radiob46" value="4"/><label id="check1" for="radiob46"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab10" id="radiob47" value="3"/><label id="check1" for="radiob47"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab10" id="radiob48" value="2"/><label id="check1" for="radiob48"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab10" id="radiob49" value="1"/><label id="check1" for="radiob49"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab10" id="radiob50" value="0"/><label id="check1" for="radiob50"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">11.</span> Me preocupa accidentarme en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab11" id="radiob51" value="4"/><label id="check1" for="radiob51"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab11" id="radiob52" value="3"/><label id="check1" for="radiob52"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab11" id="radiob53" value="2"/><label id="check1" for="radiob53"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab11" id="radiob54" value="1"/><label id="check1" for="radiob54"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab11" id="radiob55" value="0"/><label id="check1" for="radiob55"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">12.</span> El lugar donde trabajo es limpio y ordenado</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab12" id="radiob56" value="0"/><label id="check1" for="radiob56"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab12" id="radiob57" value="1"/><label id="check1" for="radiob57"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab12" id="radiob58" value="2"/><label id="check1" for="radiob58"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab12" id="radiob59" value="3"/><label id="check1" for="radiob59"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab12" id="radiob60" value="4"/><label id="check1" for="radiob60"></label></td>
                        </tr>
                        </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Para responder a las siguientes preguntas piense en la cantidad de trabajo que usted tiene a cargo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">              
                        <tr><td class="items"><span class="nIA">13.</span> Por la cantidad de tiempo de trabajo que tengo debo quedarme tiempo adicional</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab13" id="radiob61" value="4"/><label id="check1" for="radiob61"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab13" id="radiob62" value="3"/><label id="check1" for="radiob62"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab13" id="radiob63" value="2"/><label id="check1" for="radiob63"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab13" id="radiob64" value="1"/><label id="check1" for="radiob64"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab13" id="radiob65" value="0"/><label id="check1" for="radiob65"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">14.</span> Me alcanza el tiempo de trabajo para tener al día mis deberes</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab14" id="radiob66" value="0"/><label id="check1" for="radiob66"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab14" id="radiob67" value="1"/><label id="check1" for="radiob67"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab14" id="radiob68" value="2"/><label id="check1" for="radiob68"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab14" id="radiob69" value="3"/><label id="check1" for="radiob69"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab14" id="radiob70" value="4"/><label id="check1" for="radiob70"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">15.</span> Por la cantidad de trabajo que tengo, debo trabajar sin parar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab15" id="radiob71" value="4"/><label id="check1" for="radiob71"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab15" id="radiob72" value="3"/><label id="check1" for="radiob72"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab15" id="radiob73" value="2"/><label id="check1" for="radiob73"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab15" id="radiob74" value="1"/><label id="check1" for="radiob74"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab15" id="radiob75" value="0"/><label id="check1" for="radiob75"></label></td>
                        </tr>
                        </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con el esfuerzo mental que le exige su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">         
                        <tr><td class="items"><span class="nIA">16.</span> Mi trabajo me exige hacer mucho esfuerzo mental</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab16" id="radiob76" value="4"/><label id="check1" for="radiob76"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab16" id="radiob77" value="3"/><label id="check1" for="radiob77"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab16" id="radiob78" value="2"/><label id="check1" for="radiob78"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab16" id="radiob79" value="1"/><label id="check1" for="radiob79"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab16" id="radiob80" value="0"/><label id="check1" for="radiob80"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">17.</span> Mi trabajo me exige estar muy concentrado</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab17" id="radiob81" value="4"/><label id="check1" for="radiob81"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab17" id="radiob82" value="3"/><label id="check1" for="radiob82"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab17" id="radiob83" value="2"/><label id="check1" for="radiob83"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab17" id="radiob84" value="1"/><label id="check1" for="radiob84"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab17" id="radiob85" value="0"/><label id="check1" for="radiob85"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">18.</span> Mi trabajo me exige memorizar mucha información</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab18" id="radiob86" value="4"/><label id="check1" for="radiob86"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab18" id="radiob87" value="3"/><label id="check1" for="radiob87"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab18" id="radiob88" value="2"/><label id="check1" for="radiob88"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab18" id="radiob89" value="1"/><label id="check1" for="radiob89"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab18" id="radiob90" value="0"/><label id="check1" for="radiob90"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">19.</span> En mi trabajo debo hacer cálculos matemáticos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab19" id="radiob91" value="4"/><label id="check1" for="radiob91"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab19" id="radiob92" value="3"/><label id="check1" for="radiob92"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab19" id="radiob93" value="2"/><label id="check1" for="radiob93"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab19" id="radiob94" value="1"/><label id="check1" for="radiob94"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab19" id="radiob95" value="0"/><label id="check1" for="radiob95"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">20.</span> Mi trabajo me exige que me fije en pequeños detalles</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab20" id="radiob96" value="4"/><label id="check1" for="radiob96"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab20" id="radiob97" value="3"/><label id="check1" for="radiob97"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab20" id="radiob98" value="2"/><label id="check1" for="radiob98"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab20" id="radiob99" value="1"/><label id="check1" for="radiob99"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab20" id="radiob100" value="0"/><label id="check1" for="radiob100"></label></td>
                        </tr>
                    </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con la jornada de trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">     
                        <tr><td class="items"><span class="nIA">21.</span> Trabajo en horario nocturno</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab21" id="radiob101" value="4"/><label id="check1" for="radiob101"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab21" id="radiob102" value="3"/><label id="check1" for="radiob102"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab21" id="radiob103" value="2"/><label id="check1" for="radiob103"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab21" id="radiob104" value="1"/><label id="check1" for="radiob104"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab21" id="radiob105" value="0"/><label id="check1" for="radiob105"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">22.</span> En mi trabajo es posible tomar pausas para descansar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab22" id="radiob106" value="0"/><label id="check1" for="radiob106"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab22" id="radiob107" value="1"/><label id="check1" for="radiob107"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab22" id="radiob108" value="2"/><label id="check1" for="radiob108"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab22" id="radiob109" value="3"/><label id="check1" for="radiob109"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab22" id="radiob110" value="4"/><label id="check1" for="radiob110"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">23.</span> Mi trabajo me exige trabajar en días de descanso, festivo o fines de semana</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab23" id="radiob111" value="4"/><label id="check1" for="radiob111"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab23" id="radiob112" value="3"/><label id="check1" for="radiob112"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab23" id="radiob113" value="2"/><label id="check1" for="radiob113"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab23" id="radiob114" value="1"/><label id="check1" for="radiob114"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab23" id="radiob115" value="0"/><label id="check1" for="radiob115"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">24.</span> En mi trabajo puedo tomar fines de semana o días de descanso al mes</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab24" id="radiob116" value="0"/><label id="check1" for="radiob116"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab24" id="radiob117" value="1"/><label id="check1" for="radiob117"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab24" id="radiob118" value="2"/><label id="check1" for="radiob118"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab24" id="radiob119" value="3"/><label id="check1" for="radiob119"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab24" id="radiob120" value="4"/><label id="check1" for="radiob120"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">25.</span> Cuando estoy en casa sigo pensando en el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab25" id="radiob121" value="4"/><label id="check1" for="radiob121"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab25" id="radiob122" value="3"/><label id="check1" for="radiob122"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab25" id="radiob123" value="2"/><label id="check1" for="radiob123"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab25" id="radiob124" value="1"/><label id="check1" for="radiob124"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab25" id="radiob125" value="0"/><label id="check1" for="radiob125"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">26.</span> Discuto con mi familia o amigos por causa de mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab26" id="radiob126" value="4"/><label id="check1" for="radiob126"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab26" id="radiob127" value="3"/><label id="check1" for="radiob127"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab26" id="radiob128" value="2"/><label id="check1" for="radiob128"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab26" id="radiob129" value="1"/><label id="check1" for="radiob129"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab26" id="radiob130" value="0"/><label id="check1" for="radiob130"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">27.</span> Debo atender asuntos de trabajo cuando estoy en casa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab27" id="radiob131" value="4"/><label id="check1" for="radiob131"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab27" id="radiob132" value="3"/><label id="check1" for="radiob132"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab27" id="radiob133" value="2"/><label id="check1" for="radiob133"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab27" id="radiob134" value="1"/><label id="check1" for="radiob134"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab27" id="radiob135" value="0"/><label id="check1" for="radiob135"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">28.</span> Por mi trabajo el tiempo que paso con mi familia y amigos es muy poco</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab28" id="radiob136" value="4"/><label id="check1" for="radiob136"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab28" id="radiob137" value="3"/><label id="check1" for="radiob137"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab28" id="radiob138" value="2"/><label id="check1" for="radiob138"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab28" id="radiob139" value="1"/><label id="check1" for="radiob139"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab28" id="radiob140" value="0"/><label id="check1" for="radiob140"></label></td>
                        </tr>
                        </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con las decisiones y el control que le permite su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio"> 
                        <tr><td class="items"><span class="nIA">29.</span> En mi trabajo puedo hacer cosas nuevas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab29" id="radiob141" value="0"/><label id="check1" for="radiob141"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab29" id="radiob142" value="1"/><label id="check1" for="radiob142"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab29" id="radiob143" value="2"/><label id="check1" for="radiob143"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab29" id="radiob144" value="3"/><label id="check1" for="radiob144"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab29" id="radiob145" value="4"/><label id="check1" for="radiob145"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">30.</span> Mi trabajo me permite desarrollar mis habilidades</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab30" id="radiob146" value="0"/><label id="check1" for="radiob146"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab30" id="radiob147" value="1"/><label id="check1" for="radiob147"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab30" id="radiob148" value="2"/><label id="check1" for="radiob148"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab30" id="radiob149" value="3"/><label id="check1" for="radiob149"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab30" id="radiob150" value="4"/><label id="check1" for="radiob150"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">31.</span> Mi trabajo permite aplicar mis conocimientos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab31" id="radiob151" value="0"/><label id="check1" for="radiob151"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab31" id="radiob152" value="1"/><label id="check1" for="radiob152"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab31" id="radiob153" value="2"/><label id="check1" for="radiob153"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab31" id="radiob154" value="3"/><label id="check1" for="radiob154"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab31" id="radiob155" value="4"/><label id="check1" for="radiob155"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">32.</span> Mi trabajo me permite aprender nuevas cosas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab32" id="radiob156" value="0"/><label id="check1" for="radiob156"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab32" id="radiob157" value="1"/><label id="check1" for="radiob157"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab32" id="radiob158" value="2"/><label id="check1" for="radiob158"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab32" id="radiob159" value="3"/><label id="check1" for="radiob159"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab32" id="radiob160" value="4"/><label id="check1" for="radiob160"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">33.</span> Puedo tomar pausas cuando las necesito</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab33" id="radiob161" value="0"/><label id="check1" for="radiob161"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab33" id="radiob162" value="1"/><label id="check1" for="radiob162"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab33" id="radiob163" value="2"/><label id="check1" for="radiob163"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab33" id="radiob164" value="3"/><label id="check1" for="radiob164"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab33" id="radiob165" value="4"/><label id="check1" for="radiob165"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">34.</span> Puedo decidir cuánto trabajo hago en el día</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab34" id="radiob166" value="0"/><label id="check1" for="radiob166"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab34" id="radiob167" value="1"/><label id="check1" for="radiob167"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab34" id="radiob168" value="2"/><label id="check1" for="radiob168"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab34" id="radiob169" value="3"/><label id="check1" for="radiob169"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab34" id="radiob170" value="4"/><label id="check1" for="radiob170"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">35.</span> Puedo decidir la velocidad con la que trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab35" id="radiob171" value="0"/><label id="check1" for="radiob171"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab35" id="radiob172" value="1"/><label id="check1" for="radiob172"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab35" id="radiob173" value="2"/><label id="check1" for="radiob173"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab35" id="radiob174" value="3"/><label id="check1" for="radiob174"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab35" id="radiob175" value="4"/><label id="check1" for="radiob175"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">36.</span> Puedo cambiar el orden de las actividades en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab36" id="radiob176" value="0"/><label id="check1" for="radiob176"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab36" id="radiob177" value="1"/><label id="check1" for="radiob177"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab36" id="radiob178" value="2"/><label id="check1" for="radiob178"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab36" id="radiob179" value="3"/><label id="check1" for="radiob179"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab36" id="radiob180" value="4"/><label id="check1" for="radiob180"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">37.</span> Puedo parar un momento mi trabajo para atender algún asunto personal</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab37" id="radiob181" value="0"/><label id="check1" for="radiob181"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab37" id="radiob182" value="1"/><label id="check1" for="radiob182"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab37" id="radiob183" value="2"/><label id="check1" for="radiob183"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab37" id="radiob184" value="3"/><label id="check1" for="radiob184"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab37" id="radiob185" value="4"/><label id="check1" for="radiob185"></label></td>
                        </tr>
                        </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con cualquier tipo de cambio que odurra en su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio"> 
                        <tr><td class="items"><span class="nIA">38.</span> Me explican claramente los cambios que ocurren en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab38" id="radiob186" value="0"/><label id="check1" for="radiob186"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab38" id="radiob187" value="1"/><label id="check1" for="radiob187"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab38" id="radiob188" value="2"/><label id="check1" for="radiob188"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab38" id="radiob189" value="3"/><label id="check1" for="radiob189"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab38" id="radiob190" value="4"/><label id="check1" for="radiob190"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">39.</span> Puedo dar sugerencia sobre los cambios que ocurren en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab39" id="radiob191" value="0"/><label id="check1" for="radiob191"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab39" id="radiob192" value="1"/><label id="check1" for="radiob192"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab39" id="radiob193" value="2"/><label id="check1" for="radiob193"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab39" id="radiob194" value="3"/><label id="check1" for="radiob194"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab39" id="radiob195" value="4"/><label id="check1" for="radiob195"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">40.</span> Cuando se presentan cambios en mi trabajo se tienen en cuentas mis ideas y sugerencias</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab40" id="radiob196" value="0"/><label id="check1" for="radiob196"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab40" id="radiob197" value="1"/><label id="check1" for="radiob197"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab40" id="radiob198" value="2"/><label id="check1" for="radiob198"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab40" id="radiob199" value="3"/><label id="check1" for="radiob199"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab40" id="radiob200" value="4"/><label id="check1" for="radiob200"></label></td>
                        </tr>
                        </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con la información que la empresa le ha dado sobre su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">             
                        <tr><td class="items"><span class="nIA">41.</span> Me informan con claridad cuáles son mis funciones</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab41" id="radiob201" value="0"/><label id="check1" for="radiob201"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab41" id="radiob202" value="1"/><label id="check1" for="radiob202"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab41" id="radiob203" value="2"/><label id="check1" for="radiob203"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab41" id="radiob204" value="3"/><label id="check1" for="radiob204"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab41" id="radiob205" value="4"/><label id="check1" for="radiob205"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">42.</span> Me informan cuáles son las decisiones que puedo tomar en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab42" id="radiob206" value="0"/><label id="check1" for="radiob206"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab42" id="radiob207" value="1"/><label id="check1" for="radiob207"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab42" id="radiob208" value="2"/><label id="check1" for="radiob208"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab42" id="radiob209" value="3"/><label id="check1" for="radiob209"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab42" id="radiob210" value="4"/><label id="check1" for="radiob210"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">43.</span> Me explican claramente los resultados que debo lograr en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab43" id="radiob211" value="0"/><label id="check1" for="radiob211"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab43" id="radiob212" value="1"/><label id="check1" for="radiob212"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab43" id="radiob213" value="2"/><label id="check1" for="radiob213"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab43" id="radiob214" value="3"/><label id="check1" for="radiob214"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab43" id="radiob215" value="4"/><label id="check1" for="radiob215"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">44.</span> Me explican claramente los objetivos de mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab44" id="radiob216" value="0"/><label id="check1" for="radiob216"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab44" id="radiob217" value="1"/><label id="check1" for="radiob217"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab44" id="radiob218" value="2"/><label id="check1" for="radiob218"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab44" id="radiob219" value="3"/><label id="check1" for="radiob219"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab44" id="radiob220" value="4"/><label id="check1" for="radiob220"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">45.</span> Me informan claramente con quien puedo resolver asuntos de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab45" id="radiob221" value="0"/><label id="check1" for="radiob221"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab45" id="radiob222" value="1"/><label id="check1" for="radiob222"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab45" id="radiob223" value="2"/><label id="check1" for="radiob223"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab45" id="radiob224" value="3"/><label id="check1" for="radiob224"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab45" id="radiob225" value="4"/><label id="check1" for="radiob225"></label></td>
                        </tr>
                        </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguintes preguntas están relacionadas con la formación y capacitación que la empresa le facilita para hacer su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio"> 
                        <tr><td class="items"><span class="nIA">46.</span> La empresa me permite asistir a capacitaciones relacionadas con mitrabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab46" id="radiob226" value="0"/><label id="check1" for="radiob226"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab46" id="radiob227" value="1"/><label id="check1" for="radiob227"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab46" id="radiob228" value="2"/><label id="check1" for="radiob228"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab46" id="radiob229" value="3"/><label id="check1" for="radiob229"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab46" id="radiob230" value="4"/><label id="check1" for="radiob230"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">47.</span> Recibo capacitación útil para hacer mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab47" id="radiob231" value="0"/><label id="check1" for="radiob231"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab47" id="radiob232" value="1"/><label id="check1" for="radiob232"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab47" id="radiob233" value="2"/><label id="check1" for="radiob233"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab47" id="radiob234" value="3"/><label id="check1" for="radiob234"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab47" id="radiob235" value="4"/><label id="check1" for="radiob235"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">48.</span> Recibo capacitación que me ayuda a hacer mejor mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab48" id="radiob236" value="0"/><label id="check1" for="radiob236"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab48" id="radiob237" value="1"/><label id="check1" for="radiob237"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab48" id="radiob238" value="2"/><label id="check1" for="radiob238"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab48" id="radiob239" value="3"/><label id="check1" for="radiob239"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab48" id="radiob240" value="4"/><label id="check1" for="radiob240"></label></td>
                        </tr>
                        </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con el o los jefes con quién tenga más contacto.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio"> 
                        <tr><td class="items"><span class="nIA">49.</span> Mi jefe ayuda a organizar mejor el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab49" id="radiob241" value="0"/><label id="check1" for="radiob241"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab49" id="radiob242" value="1"/><label id="check1" for="radiob242"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab49" id="radiob243" value="2"/><label id="check1" for="radiob243"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab49" id="radiob244" value="3"/><label id="check1" for="radiob244"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab49" id="radiob245" value="4"/><label id="check1" for="radiob245"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">50.</span> Mi jefe tiene en cuenta mis puntos de vista y opiniones</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab50" id="radiob246" value="0"/><label id="check1" for="radiob246"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab50" id="radiob247" value="1"/><label id="check1" for="radiob247"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab50" id="radiob248" value="2"/><label id="check1" for="radiob248"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab50" id="radiob249" value="3"/><label id="check1" for="radiob249"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab50" id="radiob250" value="4"/><label id="check1" for="radiob250"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">51.</span> Mi jefe me anima para hacer mejor mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab51" id="radiob251" value="0"/><label id="check1" for="radiob251"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab51" id="radiob252" value="1"/><label id="check1" for="radiob252"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab51" id="radiob253" value="2"/><label id="check1" for="radiob253"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab51" id="radiob254" value="3"/><label id="check1" for="radiob254"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab51" id="radiob255" value="4"/><label id="check1" for="radiob255"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">52.</span> Mi jefe distribuye las tareas de forma que me facilita el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab52" id="radiob256" value="0"/><label id="check1" for="radiob256"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab52" id="radiob257" value="1"/><label id="check1" for="radiob257"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab52" id="radiob258" value="2"/><label id="check1" for="radiob258"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab52" id="radiob259" value="3"/><label id="check1" for="radiob259"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab52" id="radiob260" value="4"/><label id="check1" for="radiob260"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">53.</span> Mi jefe me comunica a tiempo la información relacionada con el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab53" id="radiob261" value="0"/><label id="check1" for="radiob261"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab53" id="radiob262" value="1"/><label id="check1" for="radiob262"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab53" id="radiob263" value="2"/><label id="check1" for="radiob263"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab53" id="radiob264" value="3"/><label id="check1" for="radiob264"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab53" id="radiob265" value="4"/><label id="check1" for="radiob265"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">54.</span> La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab54" id="radiob266" value="0"/><label id="check1" for="radiob266"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab54" id="radiob267" value="1"/><label id="check1" for="radiob267"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab54" id="radiob268" value="2"/><label id="check1" for="radiob268"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab54" id="radiob269" value="3"/><label id="check1" for="radiob269"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab54" id="radiob270" value="4"/><label id="check1" for="radiob270"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">55.</span> Mi jefe me ayuda a progresar en el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab55" id="radiob271" value="0"/><label id="check1" for="radiob271"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab55" id="radiob272" value="1"/><label id="check1" for="radiob272"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab55" id="radiob273" value="2"/><label id="check1" for="radiob273"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab55" id="radiob274" value="3"/><label id="check1" for="radiob274"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab55" id="radiob275" value="4"/><label id="check1" for="radiob275"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">56.</span> Mi jefe me ayuda a sentirme bien en el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab56" id="radiob276" value="0"/><label id="check1" for="radiob276"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab56" id="radiob277" value="1"/><label id="check1" for="radiob277"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab56" id="radiob278" value="2"/><label id="check1" for="radiob278"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab56" id="radiob279" value="3"/><label id="check1" for="radiob279"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab56" id="radiob280" value="4"/><label id="check1" for="radiob280"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">57.</span> Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab57" id="radiob281" value="0"/><label id="check1" for="radiob281"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab57" id="radiob282" value="1"/><label id="check1" for="radiob282"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab57" id="radiob283" value="2"/><label id="check1" for="radiob283"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab57" id="radiob284" value="3"/><label id="check1" for="radiob284"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab57" id="radiob285" value="4"/><label id="check1" for="radiob285"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">58.</span> Mi jefe me trata con respeto</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab58" id="radiob286" value="0"/><label id="check1" for="radiob286"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab58" id="radiob287" value="1"/><label id="check1" for="radiob287"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab58" id="radiob288" value="2"/><label id="check1" for="radiob288"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab58" id="radiob289" value="3"/><label id="check1" for="radiob289"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab58" id="radiob290" value="4"/><label id="check1" for="radiob290"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">59.</span> Siento que puedo confiar en mi jefe</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab59" id="radiob291" value="0"/><label id="check1" for="radiob291"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab59" id="radiob292" value="1"/><label id="check1" for="radiob292"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab59" id="radiob293" value="2"/><label id="check1" for="radiob293"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab59" id="radiob294" value="3"/><label id="check1" for="radiob294"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab59" id="radiob295" value="4"/><label id="check1" for="radiob295"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">60.</span> Mi jefe me escucha cuando tengo problemas de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab60" id="radiob296" value="0"/><label id="check1" for="radiob296"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab60" id="radiob297" value="1"/><label id="check1" for="radiob297"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab60" id="radiob298" value="2"/><label id="check1" for="radiob298"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab60" id="radiob299" value="3"/><label id="check1" for="radiob299"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab60" id="radiob300" value="4"/><label id="check1" for="radiob300"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">61.</span> Mi jefe me brinda su apoyo cuando lo necesito</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab61" id="radiob301" value="0"/><label id="check1" for="radiob301"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab61" id="radiob302" value="1"/><label id="check1" for="radiob302"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab61" id="radiob303" value="2"/><label id="check1" for="radiob303"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab61" id="radiob304" value="3"/><label id="check1" for="radiob304"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab61" id="radiob305" value="4"/><label id="check1" for="radiob305"></label></td>
                        </tr>
                        </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas indagan sobre las relaciones con otras personas y el apoyo entre las personas de su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio"> 
                        <tr><td class="items"><span class="nIA">62.</span> Me agrada el ambiente de mi grupo de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab62" id="radiob306" value="0"/><label id="check1" for="radiob306"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab62" id="radiob307" value="1"/><label id="check1" for="radiob307"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab62" id="radiob308" value="2"/><label id="check1" for="radiob308"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab62" id="radiob309" value="3"/><label id="check1" for="radiob309"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab62" id="radiob310" value="4"/><label id="check1" for="radiob310"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">63.</span> En mi grupo de trabajo me tratan de forma respetuosa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab63" id="radiob311" value="0"/><label id="check1" for="radiob311"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab63" id="radiob312" value="1"/><label id="check1" for="radiob312"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab63" id="radiob313" value="2"/><label id="check1" for="radiob313"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab63" id="radiob314" value="3"/><label id="check1" for="radiob314"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab63" id="radiob315" value="4"/><label id="check1" for="radiob315"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">64.</span> Siento que puedo confiar en mis compañeros de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab64" id="radiob316" value="0"/><label id="check1" for="radiob316"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab64" id="radiob317" value="1"/><label id="check1" for="radiob317"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab64" id="radiob318" value="2"/><label id="check1" for="radiob318"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab64" id="radiob319" value="3"/><label id="check1" for="radiob319"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab64" id="radiob320" value="4"/><label id="check1" for="radiob320"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">65.</span> Me siento a gusto con mis compañeros de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab65" id="radiob321" value="0"/><label id="check1" for="radiob321"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab65" id="radiob322" value="1"/><label id="check1" for="radiob322"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab65" id="radiob323" value="2"/><label id="check1" for="radiob323"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab65" id="radiob324" value="3"/><label id="check1" for="radiob324"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab65" id="radiob325" value="4"/><label id="check1" for="radiob325"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">66.</span> En mi grupo de trabajo algunas personas me maltratan</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab66" id="radiob326" value="4"/><label id="check1" for="radiob326"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab66" id="radiob327" value="3"/><label id="check1" for="radiob327"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab66" id="radiob328" value="2"/><label id="check1" for="radiob328"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab66" id="radiob329" value="1"/><label id="check1" for="radiob329"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab66" id="radiob330" value="0"/><label id="check1" for="radiob330"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">67.</span> Entre compañeros solucionamos lo problemas de forma respetuosa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab67" id="radiob331" value="0"/><label id="check1" for="radiob331"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab67" id="radiob332" value="1"/><label id="check1" for="radiob332"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab67" id="radiob333" value="2"/><label id="check1" for="radiob333"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab67" id="radiob334" value="3"/><label id="check1" for="radiob334"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab67" id="radiob335" value="4"/><label id="check1" for="radiob335"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">68.</span> Mi grupo de trabajo es muy unido</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab68" id="radiob336" value="0"/><label id="check1" for="radiob336"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab68" id="radiob337" value="1"/><label id="check1" for="radiob337"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab68" id="radiob338" value="2"/><label id="check1" for="radiob338"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab68" id="radiob339" value="3"/><label id="check1" for="radiob339"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab68" id="radiob340" value="4"/><label id="check1" for="radiob340"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">69.</span> Cuanto tenemos que ralizar trabajo de grupo los compañeros colaboran</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab69" id="radiob341" value="0"/><label id="check1" for="radiob341"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab69" id="radiob342" value="1"/><label id="check1" for="radiob342"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab69" id="radiob343" value="2"/><label id="check1" for="radiob343"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab69" id="radiob344" value="3"/><label id="check1" for="radiob344"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab69" id="radiob345" value="4"/><label id="check1" for="radiob345"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">70.</span> Es fácil poner de acuerdo al grupo para hacer el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab70" id="radiob346" value="0"/><label id="check1" for="radiob346"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab70" id="radiob347" value="1"/><label id="check1" for="radiob347"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab70" id="radiob348" value="2"/><label id="check1" for="radiob348"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab70" id="radiob349" value="3"/><label id="check1" for="radiob349"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab70" id="radiob350" value="4"/><label id="check1" for="radiob350"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">71.</span> Mis compañeros de trabajo me ayudan cuando tengo dificultades</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab71" id="radiob351" value="0"/><label id="check1" for="radiob351"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab71" id="radiob352" value="1"/><label id="check1" for="radiob352"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab71" id="radiob353" value="2"/><label id="check1" for="radiob353"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab71" id="radiob354" value="3"/><label id="check1" for="radiob354"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab71" id="radiob355" value="4"/><label id="check1" for="radiob355"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">72.</span> En mi trabajo las personas nos apoyamos unos a otros</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab72" id="radiob356" value="0"/><label id="check1" for="radiob356"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab72" id="radiob357" value="1"/><label id="check1" for="radiob357"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab72" id="radiob358" value="2"/><label id="check1" for="radiob358"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab72" id="radiob359" value="3"/><label id="check1" for="radiob359"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab72" id="radiob360" value="4"/><label id="check1" for="radiob360"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">73.</span> Algunos compañeros de trabajo me escuchan cuando tengo problemas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab73" id="radiob361" value="0"/><label id="check1" for="radiob361"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab73" id="radiob362" value="1"/><label id="check1" for="radiob362"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab73" id="radiob363" value="2"/><label id="check1" for="radiob363"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab73" id="radiob364" value="3"/><label id="check1" for="radiob364"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab73" id="radiob365" value="4"/><label id="check1" for="radiob365"></label></td>
                        </tr>
                        </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con la información que usted recibe sobre su rendimiento en el trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio"> 
                        <tr><td class="items"><span class="nIA">74.</span> Me informan sobre lo que hago bien en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab74" id="radiob366" value="0"/><label id="check1" for="radiob366"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab74" id="radiob367" value="1"/><label id="check1" for="radiob367"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab74" id="radiob368" value="2"/><label id="check1" for="radiob368"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab74" id="radiob369" value="3"/><label id="check1" for="radiob369"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab74" id="radiob370" value="4"/><label id="check1" for="radiob370"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">75.</span> Me informan sobre lo que debo mejorar en mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab75" id="radiob371" value="0"/><label id="check1" for="radiob371"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab75" id="radiob372" value="1"/><label id="check1" for="radiob372"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab75" id="radiob373" value="2"/><label id="check1" for="radiob373"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab75" id="radiob374" value="3"/><label id="check1" for="radiob374"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab75" id="radiob375" value="4"/><label id="check1" for="radiob375"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">76.</span> La información que recibo sobre mi rendimiento en el trabajo es clara</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab76" id="radiob376" value="0"/><label id="check1" for="radiob376"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab76" id="radiob377" value="1"/><label id="check1" for="radiob377"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab76" id="radiob378" value="2"/><label id="check1" for="radiob378"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab76" id="radiob379" value="3"/><label id="check1" for="radiob379"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab76" id="radiob380" value="4"/><label id="check1" for="radiob380"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">77.</span> La forma como evalúan mi trabajo en la empresa me ayuda a mejorar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab77" id="radiob381" value="0"/><label id="check1" for="radiob381"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab77" id="radiob382" value="1"/><label id="check1" for="radiob382"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab77" id="radiob383" value="2"/><label id="check1" for="radiob383"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab77" id="radiob384" value="3"/><label id="check1" for="radiob384"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab77" id="radiob385" value="4"/><label id="check1" for="radiob385"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">78.</span> Me informan a tiempo sobre lo que debo mejorar en el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab78" id="radiob386" value="0"/><label id="check1" for="radiob386"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab78" id="radiob387" value="1"/><label id="check1" for="radiob387"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab78" id="radiob388" value="2"/><label id="check1" for="radiob388"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab78" id="radiob389" value="3"/><label id="check1" for="radiob389"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab78" id="radiob390" value="4"/><label id="check1" for="radiob390"></label></td>
                        </tr>
                        </table>
                   </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con la satisfacción, reconocimiento y la seguridad que le ofrece su trabajo.</p>
                </section>
                <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio"> 
                        <tr><td class="items"><span class="nIA">79.</span> En la empresa me pagan a tiempo mi salario</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab79" id="radiob391" value="0"/><label id="check1" for="radiob391"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab79" id="radiob392" value="1"/><label id="check1" for="radiob392"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab79" id="radiob393" value="2"/><label id="check1" for="radiob393"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab79" id="radiob394" value="3"/><label id="check1" for="radiob394"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab79" id="radiob395" value="4"/><label id="check1" for="radiob395"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">80.</span> El pago que recibo es el que ofreció la empresa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab80" id="radiob396" value="0"/><label id="check1" for="radiob396"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab80" id="radiob397" value="1"/><label id="check1" for="radiob397"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab80" id="radiob398" value="2"/><label id="check1" for="radiob398"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab80" id="radiob399" value="3"/><label id="check1" for="radiob399"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab80" id="radiob400" value="4"/><label id="check1" for="radiob400"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">81.</span> El pago que recibo es el que merezco por el trabajo que realizo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab81" id="radiob401" value="0"/><label id="check1" for="radiob401"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab81" id="radiob402" value="1"/><label id="check1" for="radiob402"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab81" id="radiob403" value="2"/><label id="check1" for="radiob403"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab81" id="radiob404" value="3"/><label id="check1" for="radiob404"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab81" id="radiob405" value="4"/><label id="check1" for="radiob405"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">82.</span> En mi trabajo tengo posibilidades de progresar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab82" id="radiob406" value="0"/><label id="check1" for="radiob406"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab82" id="radiob407" value="1"/><label id="check1" for="radiob407"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab82" id="radiob408" value="2"/><label id="check1" for="radiob408"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab82" id="radiob409" value="3"/><label id="check1" for="radiob409"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab82" id="radiob410" value="4"/><label id="check1" for="radiob410"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">83.</span> Las personas que hacen bien el trabajo pueden progresar en la empresa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab83" id="radiob411" value="0"/><label id="check1" for="radiob411"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab83" id="radiob412" value="1"/><label id="check1" for="radiob412"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab83" id="radiob413" value="2"/><label id="check1" for="radiob413"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab83" id="radiob414" value="3"/><label id="check1" for="radiob414"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab83" id="radiob415" value="4"/><label id="check1" for="radiob415"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">84.</span> La empresa se preocupa por el bienestar de los trabajadores</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab84" id="radiob416" value="0"/><label id="check1" for="radiob416"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab84" id="radiob417" value="1"/><label id="check1" for="radiob417"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab84" id="radiob418" value="2"/><label id="check1" for="radiob418"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab84" id="radiob419" value="3"/><label id="check1" for="radiob419"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab84" id="radiob420" value="4"/><label id="check1" for="radiob420"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">85.</span> Mi trabajo en la empresa es estable</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab85" id="radiob421" value="0"/><label id="check1" for="radiob421"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab85" id="radiob422" value="1"/><label id="check1" for="radiob422"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab85" id="radiob423" value="2"/><label id="check1" for="radiob423"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab85" id="radiob424" value="3"/><label id="check1" for="radiob424"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab85" id="radiob425" value="4"/><label id="check1" for="radiob425"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">86.</span> El trabajo que hago me hace sentir bien</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab86" id="radiob426" value="0"/><label id="check1" for="radiob426"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab86" id="radiob427" value="1"/><label id="check1" for="radiob427"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab86" id="radiob428" value="2"/><label id="check1" for="radiob428"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab86" id="radiob429" value="3"/><label id="check1" for="radiob429"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab86" id="radiob430" value="4"/><label id="check1" for="radiob430"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">87.</span> Siento orgullo de trabajar en esta empresa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab87" id="radiob431" value="0"/><label id="check1" for="radiob431"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab87" id="radiob432" value="1"/><label id="check1" for="radiob432"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab87" id="radiob433" value="2"/><label id="check1" for="radiob433"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab87" id="radiob434" value="3"/><label id="check1" for="radiob434"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab87" id="radiob435" value="4"/><label id="check1" for="radiob435"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">88.</span> Hablo bien de la empresa con otras personas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab88" id="radiob436" value="0"/><label id="check1" for="radiob436"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab88" id="radiob437" value="1"/><label id="check1" for="radiob437"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab88" id="radiob438" value="2"/><label id="check1" for="radiob438"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab88" id="radiob439" value="3"/><label id="check1" for="radiob439"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab88" id="radiob440" value="4"/><label id="check1" for="radiob440"></label></td>
                        </tr>
                    </table>
                </section> 
                <p style="font-size:16px;line-height:1em;font-family:Narrow;letter-spacing:1px">Si en su trabajo debe brindar atención a cliente y usuarios, marque la siguiente flecha:</p>
                <p><a style='cursor: pointer;text-decoration:none;' class="correcta" onclick="muestra_oculta3('mostrar3')" title=""><font class="fa fa-angle-down" style="font-size:55px;color:#f58634"></font></a></p>
                <div id="mostrar3">
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con la atención al cliente o usuarios.</p>
                </section>
                <section  style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">  
                        <tr><td class="items"><span class="nIA">89.</span> Atiendo clientes o usuarios muy enojados</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab89" id="radiob441" value="4"/><label id="check1" for="radiob441"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab89" id="radiob442" value="3"/><label id="check1" for="radiob442"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab89" id="radiob443" value="2"/><label id="check1" for="radiob443"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab89" id="radiob444" value="1"/><label id="check1" for="radiob444"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab89" id="radiob445" value="0"/><label id="check1" for="radiob445"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">90.</span> Atiendo clientes o usuarios muy preocupados</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab90" id="radiob446" value="4"/><label id="check1" for="radiob446"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab90" id="radiob447" value="3"/><label id="check1" for="radiob447"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab90" id="radiob448" value="2"/><label id="check1" for="radiob448"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab90" id="radiob449" value="1"/><label id="check1" for="radiob449"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab90" id="radiob450" value="0"/><label id="check1" for="radiob450"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">91.</span> Atiendo clientes o usuarios muy tristes</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab91" id="radiob451" value="4"/><label id="check1" for="radiob451"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab91" id="radiob452" value="3"/><label id="check1" for="radiob452"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab91" id="radiob453" value="2"/><label id="check1" for="radiob453"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab91" id="radiob454" value="1"/><label id="check1" for="radiob454"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab91" id="radiob455" value="0"/><label id="check1" for="radiob455"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">92.</span> Mi trabajo me exige atender personas muy necesitadas de ayuda</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab92" id="radiob456" value="4"/><label id="check1" for="radiob456"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab92" id="radiob457" value="3"/><label id="check1" for="radiob457"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab92" id="radiob458" value="2"/><label id="check1" for="radiob458"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab92" id="radiob459" value="1"/><label id="check1" for="radiob459"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab92" id="radiob460" value="0"/><label id="check1" for="radiob460"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">93.</span> Mi trabajo me exige atender personas muy necesitadas de ayuda</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab93" id="radiob461" value="4"/><label id="check1" for="radiob461"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab93" id="radiob462" value="3"/><label id="check1" for="radiob462"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab93" id="radiob463" value="2"/><label id="check1" for="radiob463"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab93" id="radiob464" value="1"/><label id="check1" for="radiob464"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab93" id="radiob465" value="0"/><label id="check1" for="radiob465"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">94.</span> Atiendo clientes o usuarios que me maltratan</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab94" id="radiob466" value="4"/><label id="check1" for="radiob466"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab94" id="radiob467" value="3"/><label id="check1" for="radiob467"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab94" id="radiob468" value="2"/><label id="check1" for="radiob468"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab94" id="radiob469" value="1"/><label id="check1" for="radiob469"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab94" id="radiob470" value="0"/><label id="check1" for="radiob470"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">95.</span> Mi trabajo me exige atender situaciones de violencia</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab95" id="radiob471" value="4"/><label id="check1" for="radiob471"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab95" id="radiob472" value="3"/><label id="check1" for="radiob472"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab95" id="radiob473" value="2"/><label id="check1" for="radiob473"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab95" id="radiob474" value="1"/><label id="check1" for="radiob474"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab95" id="radiob475" value="0"/><label id="check1" for="radiob475"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">96.</span> Mi trabajo me exige atender situaciones muy tristes o dolorosas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab96" id="radiob476" value="4"/><label id="check1" for="radiob476"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab96" id="radiob477" value="3"/><label id="check1" for="radiob477"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab96" id="radiob478" value="2"/><label id="check1" for="radiob478"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab96" id="radiob479" value="1"/><label id="check1" for="radiob479"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab96" id="radiob480" value="0"/><label id="check1" for="radiob480"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">97.</span> Puedo expresar tristeza o enojo frente a las personas que atiendo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="intrab97" id="radiob481" value="0"/><label id="check1" for="radiob481"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="intrab97" id="radiob482" value="1"/><label id="check1" for="radiob482"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="intrab97" id="radiob483" value="2"/><label id="check1" for="radiob483"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="intrab97" id="radiob484" value="3"/><label id="check1" for="radiob484"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="intrab97" id="radiob485" value="4"/><label id="check1" for="radiob485"></label></td>
                        </tr>
                    </table>
                    </section>
                    </div><br>
                    <div><input id="botonIB" type="submit"  class="btn btn btn-default btn-block" name="enviar1" style="width:13em !important;height:2.5em!important;background: linear-gradient(to bottom, #e6e6e6, #cccccc) !important;font-family:Moristonb;color: #000000 !important;border: none !important;border-radius: 16px !important;font-size:14px !important;box-shadow: 0 4px 14px rgba(161, 225, 132, 0.3) !important;transition: all 0.3s ease !important;position:relative;cursor:pointer;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(100,100,100,0.4)';this.style.background='linear-gradient(135deg, #b3b3b3, #999999)'" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 14px rgba(161, 225, 132, 0.3)';this.style.background='linear-gradient(135deg, #e6e6e6, #cccccc)'"/></div><br>  
                </form>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div> 
<div id="costumModal5" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <h4 style="font-family:narrow;letter-spacing:2px;text-align:center;line-height: 2.8rem;">El formulario para el registro de la Información Sociodemográfica y Laboral ya se encuentra diligenciado</h4>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div> 
<div id="costumModal6" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <h4 style="font-family:narrow;letter-spacing:2px;text-align:center;line-height: 2.8rem;">El formulario para la evaluación del Riesgo Psicosocial Intralaboral ya se encuentra diligenciado</h4>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div> 
<div id="costumModal7" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-lg" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <p class="captura1" style="font-size:24px;line-height:1em;font-family:Narrow;letter-spacing:2px">Evaluación del Riesgo Psicosocial Extralaboral</p><br>
                <section class="panel panel-body" style="padding:3%;border-radius:0px">
                    <p style="text-align:left;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px"><?php echo $Sexo.' '.$Nombre ?>:</p><br>
                    <p class="parrafo">Este cuestionario busca conocer su opinión sobre algunos aspectos de su <span style="font-family:verdanab">vida familiar y personal</span>.</p>
                    <p class="parrafo">Le agradecemos que conteste las siguientes preguntas con toda la sinceridad del caso.  Las respuestas que usted da al cuestionario no son ni buenas, ni malas, lo importante es que reflejen su manera de pensar sobre las condiciones de su vida familiar y personal.</p>
                    <p class="parrafo">Lea cuidadosamente cada pregunta, luego piense como es su trabajo y responda a todas las preguntas, en cada una de ellas marque una sola respuesta. Señale el cuadro de la respuesta que refleje mejor su trabajo, si se equivoca en una respuesa, simplemente seleccione otro cuadro.</p><br>
                    <p style="text-align:left;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px">Ejemplo:</p>
                    <table id="tabla2" bordered="0" class="radio" >
                        <tr >
                            <td class="items"><span class="nIA">2.</span> Tengo que tomar varios medios de transporte para llegar a mi lugar de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="extra_1" id="radioEx_1" value=""/><label id="check11" for="radioEx_1"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="extra_1" id="radioEx_2" value=""/><label id="check11" for="radioEx_2"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra_1" id="radioEx_3" value=""/><label id="check11" for="radioEx_3"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span><input type="radio" name="extra_1" id="radioEx_4" value="" checked/><label id="check11" for="radioEx_4"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="extra_1" id="radioEx_5" value=""/><label id="check11" for="radioEx_5"></td>
                        </tr>
                    </table>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspSus respuestas serán manejadas de forma confidencial.</p>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspSi tiene duda respecto a una pregunta, solicite mayor explicación mediante el n° celular <span style='color:#248f24;font-size:16px' class='fa fa-whatsapp'></span><a href='https://api.whatsapp.com/send?phone=573115602702' target='_blank' style='color:#248f24;font-family:verdanab'>&nbsp3115602702</a>.</p>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspEl cuestionario no tiene límite de tiempo; sin embargo, usted requerirá de 1 hora aproximadamente para contestar todas las preguntas.</p><br>
                    <p style="text-align:center;padding-left:5%;padding-right:5%;font-family:narrow;font-size:18px;letter-spacing:2px">Gracias por su colaboración</p>
                </section>
                <p style="text-align:center;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px">Seleccione una de las siguientes alternativas en cada numeral:</p>
                <table class="tableIA liker" align="center" bordered="0">
                    <tr>
                        <th>Siempre</th>
                        <th>Casi siempre</th>
                        <th>Algunas veces</th>
                        <th>Casi nunca</th>
                        <th>Nunca</th>
                    </tr>
                </table><br>    
                <form name="formE" id="formE">
                    <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                        <p class="parrafo">Las siguientes preguntas están relacionadas con varias condiciones de la zona donde usted vive.</p>
                    </section>
                    <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">
                        <tr><td class="items"><span class="nIA">1.</span> Es fácil transportarme entre mi casa y el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra1" id="radioEx1" value="0"/><label id="check1" for="radioEx1"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra1" id="radioEx2" value="1"/><label id="check1" for="radioEx2"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra1" id="radioEx3" value="2"/><label id="check1" for="radioEx3"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra1" id="radioEx4" value="3"/><label id="check1" for="radioEx4"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra1" id="radioEx5" value="4"/><label id="check1" for="radioEx5"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">2.</span> Tengo que tomar varios medios de transporte para llegar a mi lugar de trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra2" id="radioEx6" value="4"/><label id="check1" for="radioEx6"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra2" id="radioEx7" value="3"/><label id="check1" for="radioEx7"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra2" id="radioEx8" value="2"/><label id="check1" for="radioEx8"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra2" id="radioEx9" value="1"/><label id="check1" for="radioEx9"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra2" id="radioEx10" value="0"/><label id="check1" for="radioEx10"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">3.</span> Paso mucho tiempo viajando de ida y regreso al trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra3" id="radioEx11" value="4"/><label id="check1" for="radioEx11"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra3" id="radioEx12" value="3"/><label id="check1" for="radioEx12"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra3" id="radioEx13" value="2"/><label id="check1" for="radioEx13"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra3" id="radioEx14" value="1"/><label id="check1" for="radioEx14"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra3" id="radioEx15" value="0"/><label id="check1" for="radioEx15"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">4.</span> Me transporto cómodamente entre mi casa y el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra4" id="radioEx16" value="0"/><label id="check1" for="radioEx16"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra4" id="radioEx17" value="1"/><label id="check1" for="radioEx17"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra4" id="radioEx18" value="2"/><label id="check1" for="radioEx18"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra4" id="radioEx19" value="3"/><label id="check1" for="radioEx19"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra4" id="radioEx20" value="4"/><label id="check1" for="radioEx20"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">5.</span> La zona donde vivo es segura</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra5" id="radioEx21" value="0"/><label id="check1" for="radioEx21"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra5" id="radioEx22" value="1"/><label id="check1" for="radioEx22"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra5" id="radioEx23" value="2"/><label id="check1" for="radioEx23"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra5" id="radioEx24" value="3"/><label id="check1" for="radioEx24"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra5" id="radioEx25" value="4"/><label id="check1" for="radioEx25"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">6.</span> En la zona donde vivo se presentan hurtos y mucha delincuencia</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra6" id="radioEx26" value="4"/><label id="check1" for="radioEx26"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra6" id="radioEx27" value="3"/><label id="check1" for="radioEx27"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra6" id="radioEx28" value="2"/><label id="check1" for="radioEx28"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra6" id="radioEx29" value="1"/><label id="check1" for="radioEx29"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra6" id="radioEx30" value="0"/><label id="check1" for="radioEx30"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">7.</span> Desde donde vivo me es fácil llegar al centro médico donde me atienden</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra7" id="radioEx31" value="0"/><label id="check1" for="radioEx31"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra7" id="radioEx32" value="1"/><label id="check1" for="radioEx32"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra7" id="radioEx33" value="2"/><label id="check1" for="radioEx33"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra7" id="radioEx34" value="3"/><label id="check1" for="radioEx34"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra7" id="radioEx35" value="4"/><label id="check1" for="radioEx35"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">8.</span> Cerca a mi vivienda las vías están en buenas condiciones</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra8" id="radioEx36" value="0"/><label id="check1" for="radioEx36"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra8" id="radioEx37" value="1"/><label id="check1" for="radioEx37"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra8" id="radioEx38" value="2"/><label id="check1" for="radioEx38"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra8" id="radioEx39" value="3"/><label id="check1" for="radioEx39"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra8" id="radioEx40" value="4"/><label id="check1" for="radioEx40"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">9.</span> Cerca de mi vivienda encuentro fácilmente transporte</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra9" id="radioEx41" value="0"/><label id="check1" for="radioEx41"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra9" id="radioEx42" value="1"/><label id="check1" for="radioEx42"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra9" id="radioEx43" value="2"/><label id="check1" for="radioEx43"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra9" id="radioEx44" value="3"/><label id="check1" for="radioEx44"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra9" id="radioEx45" value="4"/><label id="check1" for="radioEx45"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">10.</span> Las condiciones de mi vivienda son buenas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra10" id="radioEx46" value="0"/><label id="check1" for="radioEx46"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra10" id="radioEx47" value="1"/><label id="check1" for="radioEx47"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra10" id="radioEx48" value="2"/><label id="check1" for="radioEx48"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra10" id="radioEx49" value="3"/><label id="check1" for="radioEx49"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra10" id="radioEx50" value="4"/><label id="check1" for="radioEx50"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">11.</span> En mi vivienda hay servicios de agua y salud</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra11" id="radioEx51" value="0"/><label id="check1" for="radioEx51"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra11" id="radioEx52" value="1"/><label id="check1" for="radioEx52"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra11" id="radioEx53" value="2"/><label id="check1" for="radioEx53"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra11" id="radioEx54" value="3"/><label id="check1" for="radioEx54"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra11" id="radioEx55" value="4"/><label id="check1" for="radioEx55"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">12.</span> Las condiciones de mi vivienda me permiten descansar cuando lo requiero</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra12" id="radioEx56" value="0"/><label id="check1" for="radioEx56"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra12" id="radioEx57" value="1"/><label id="check1" for="radioEx57"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra12" id="radioEx58" value="2"/><label id="check1" for="radioEx58"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra12" id="radioEx59" value="3"/><label id="check1" for="radioEx59"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra12" id="radioEx60" value="4"/><label id="check1" for="radioEx60"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">13.</span> Las condiciones de mi vivienda me permiten sentirme cómodo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra13" id="radioEx61" value="0"/><label id="check1" for="radioEx61"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra13" id="radioEx62" value="1"/><label id="check1" for="radioEx62"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra13" id="radioEx63" value="2"/><label id="check1" for="radioEx63"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra13" id="radioEx64" value="3"/><label id="check1" for="radioEx64"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra13" id="radioEx65" value="4"/><label id="check1" for="radioEx65"></label></td>
                        </tr>
                        </table>
                </section> 
                <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                    <p class="parrafo">Las siguientes preguntas están relacionadas con su vida fuera del trabajo.</p>
                </section>
                <section  style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio"> 
                        <tr><td class="items"><span class="nIA">14.</span> Me queda tiempo para actividades de recreación</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra14" id="radioEx66" value="0"/><label id="check1" for="radioEx66"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra14" id="radioEx67" value="1"/><label id="check1" for="radioEx67"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra14" id="radioEx68" value="2"/><label id="check1" for="radioEx68"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra14" id="radioEx69" value="3"/><label id="check1" for="radioEx69"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra14" id="radioEx70" value="4"/><label id="check1" for="radioEx70"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">15.</span> Fuera del trabajo tengo tiempo suficiente para descansar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra15" id="radioEx71" value="0"/><label id="check1" for="radioEx71"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra15" id="radioEx72" value="1"/><label id="check1" for="radioEx72"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra15" id="radioEx73" value="2"/><label id="check1" for="radioEx73"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra15" id="radioEx74" value="3"/><label id="check1" for="radioEx74"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra15" id="radioEx75" value="4"/><label id="check1" for="radioEx75"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">16.</span> Tengo tiempo para atender mis asuntos personales y del hogar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra16" id="radioEx76" value="0"/><label id="check1" for="radioEx76"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra16" id="radioEx77" value="1"/><label id="check1" for="radioEx77"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra16" id="radioEx78" value="2"/><label id="check1" for="radioEx78"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra16" id="radioEx79" value="3"/><label id="check1" for="radioEx79"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra16" id="radioEx80" value="4"/><label id="check1" for="radioEx80"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">17.</span> Tengo tiempo para compartir con mi familia o amigos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra17" id="radioEx81" value="0"/><label id="check1" for="radioEx81"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra17" id="radioEx82" value="1"/><label id="check1" for="radioEx82"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra17" id="radioEx83" value="2"/><label id="check1" for="radioEx83"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra17" id="radioEx84" value="3"/><label id="check1" for="radioEx84"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra17" id="radioEx85" value="4"/><label id="check1" for="radioEx85"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">18.</span> Tengo buena comunicación con las personas cercanas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra18" id="radioEx86" value="0"/><label id="check1" for="radioEx86"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra18" id="radioEx87" value="1"/><label id="check1" for="radioEx87"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra18" id="radioEx88" value="2"/><label id="check1" for="radioEx88"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra18" id="radioEx89" value="3"/><label id="check1" for="radioEx89"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra18" id="radioEx90" value="4"/><label id="check1" for="radioEx90"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">19.</span> Las relaciones con mis amigos son buenas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra19" id="radioEx91" value="0"/><label id="check1" for="radioEx91"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra19" id="radioEx92" value="1"/><label id="check1" for="radioEx92"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra19" id="radioEx93" value="2"/><label id="check1" for="radioEx93"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra19" id="radioEx94" value="3"/><label id="check1" for="radioEx94"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra19" id="radioEx95" value="4"/><label id="check1" for="radioEx95"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">20.</span> Converso con personas cercanas sobre diferentes temas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra20" id="radioEx96" value="0"/><label id="check1" for="radioEx96"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra20" id="radioEx97" value="1"/><label id="check1" for="radioEx97"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra20" id="radioEx98" value="2"/><label id="check1" for="radioEx98"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra20" id="radioEx99" value="3"/><label id="check1" for="radioEx99"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra20" id="radioEx100" value=4""/><label id="check1" for="radioEx100"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">21.</span> Mis amigos están dispuestos a escucharme cuando tengo problemas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra21" id="radioEx101" value="0"/><label id="check1" for="radioEx101"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra21" id="radioEx102" value="1"/><label id="check1" for="radioEx102"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra21" id="radioEx103" value="2"/><label id="check1" for="radioEx103"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra21" id="radioEx104" value="3"/><label id="check1" for="radioEx104"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra21" id="radioEx105" value="4"/><label id="check1" for="radioEx105"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">22.</span> Cuento con el apoyo de mi familia cuando tengo problemas</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra22" id="radioEx106" value="0"/><label id="check1" for="radioEx106"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra22" id="radioEx107" value="1"/><label id="check1" for="radioEx107"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra22" id="radioEx108" value="2"/><label id="check1" for="radioEx108"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra22" id="radioEx109" value="3"/><label id="check1" for="radioEx109"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra22" id="radioEx110" value="4"/><label id="check1" for="radioEx110"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">23.</span> Puedo hablar con personas cercanas sobre las cosas que me pasan</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra23" id="radioEx111" value="0"/><label id="check1" for="radioEx111"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra23" id="radioEx112" value="1"/><label id="check1" for="radioEx112"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra23" id="radioEx113" value="2"/><label id="check1" for="radioEx113"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra23" id="radioEx114" value="3"/><label id="check1" for="radioEx114"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra23" id="radioEx115" value="4"/><label id="check1" for="radioEx115"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">24.</span> Mis problemas personales o familiares afectan mi trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra24" id="radioEx116" value="4"/><label id="check1" for="radioEx116"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra24" id="radioEx117" value="3"/><label id="check1" for="radioEx117"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra24" id="radioEx118" value="2"/><label id="check1" for="radioEx118"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra24" id="radioEx119" value="1"/><label id="check1" for="radioEx119"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra24" id="radioEx120" value="0"/><label id="check1" for="radioEx120"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">25.</span> La relación con mi familia cercana es cordial</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra25" id="radioEx121" value="0"/><label id="check1" for="radioEx121"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra25" id="radioEx122" value="1"/><label id="check1" for="radioEx122"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra25" id="radioEx123" value="2"/><label id="check1" for="radioEx123"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra25" id="radioEx124" value="3"/><label id="check1" for="radioEx124"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra25" id="radioEx125" value="4"/><label id="check1" for="radioEx125"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">26.</span> Mis problemas personales o familiares me quitan la energía que necesito para trabajar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra26" id="radioEx126" value="4"/><label id="check1" for="radioEx126"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra26" id="radioEx127" value="3"/><label id="check1" for="radioEx127"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra26" id="radioEx128" value="2"/><label id="check1" for="radioEx128"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra26" id="radioEx129" value="1"/><label id="check1" for="radioEx129"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra26" id="radioEx130" value="0"/><label id="check1" for="radioEx130"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">27.</span> Los problemas con mis familiares los resolvemos de manera amistosa</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra27" id="radioEx131" value="0"/><label id="check1" for="radioEx131"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra27" id="radioEx132" value="1"/><label id="check1" for="radioEx132"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra27" id="radioEx133" value="2"/><label id="check1" for="radioEx133"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra27" id="radioEx134" value="3"/><label id="check1" for="radioEx134"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra27" id="radioEx135" value="4"/><label id="check1" for="radioEx135"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">28.</span> Mis problemas personales o familiares afectan mis relaciones en el trabajo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra28" id="radioEx136" value="4"/><label id="check1" for="radioEx136"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra28" id="radioEx137" value="3"/><label id="check1" for="radioEx137"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra28" id="radioEx138" value="2"/><label id="check1" for="radioEx138"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra28" id="radioEx139" value="1"/><label id="check1" for="radioEx139"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra28" id="radioEx140" value="0"/><label id="check1" for="radioEx140"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">29.</span> El dinero que ganamos en el hogar alcanza para cubrir los gastos básicos</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra29" id="radioEx141" value="0"/><label id="check1" for="radioEx141"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra29" id="radioEx142" value="1"/><label id="check1" for="radioEx142"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra29" id="radioEx143" value="2"/><label id="check1" for="radioEx143"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra29" id="radioEx144" value="3"/><label id="check1" for="radioEx144"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra29" id="radioEx145" value="4"/><label id="check1" for="radioEx145"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">30.</span> Tengo otros compromisos económicos que afectan mucho el presupuesto familiar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra30" id="radioEx146" value="4"/><label id="check1" for="radioEx146"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra30" id="radioEx147" value="3"/><label id="check1" for="radioEx147"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra30" id="radioEx148" value="2"/><label id="check1" for="radioEx148"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra30" id="radioEx149" value="1"/><label id="check1" for="radioEx149"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra30" id="radioEx150" value="0"/><label id="check1" for="radioEx150"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">31.</span> En mi hogar tenemos deudas difíciles de pagar</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="extra31" id="radioEx151" value="4"/><label id="check1" for="radioEx151"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="extra31" id="radioEx152" value="3"/><label id="check1" for="radioEx152"></label></td>
                            <td data-title="Algunas veces" id="borderout"><span class="titulo">Algunas veces</span><input type="radio" name="extra31" id="radioEx153" value="2"/><label id="check1" for="radioEx153"></label></td>
                            <td data-title="Casi nunca" id="borderout"><span class="titulo">Casi Nunca</span>      <input type="radio" name="extra31" id="radioEx154" value="1"/><label id="check1" for="radioEx154"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="extra31" id="radioEx155" value="0"/><label id="check1" for="radioEx155"></label></td>
                        </tr>
                    </table> 
                    </section>
                    <div><input id="botonE" type="submit"  class="btn btn btn-default btn-block" name="enviar1" style="width:13em !important;height:2.5em!important;background: linear-gradient(to bottom, #e6e6e6, #cccccc) !important;font-family:Moristonb;color: #000000 !important;border: none !important;border-radius: 16px !important;font-size:14px !important;box-shadow: 0 4px 14px rgba(161, 225, 132, 0.3) !important;transition: all 0.3s ease !important;position:relative;cursor:pointer;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(100,100,100,0.4)';this.style.background='linear-gradient(135deg, #b3b3b3, #999999)'" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 14px rgba(161, 225, 132, 0.3)';this.style.background='linear-gradient(135deg, #e6e6e6, #cccccc)'"/></div><br>  
                </form>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div> 
<div id="costumModal8" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <h4 style="font-family:narrow;letter-spacing:2px;text-align:center;line-height: 2.8rem;">El formulario para la evaluación del Riesgo Psicosocial Extralaboral ya se encuentra diligenciado</h4>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal9" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-lg" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <p class="captura1" style="font-size:24px;line-height:1em;font-family:Narrow;letter-spacing:2px">Evaluación de situaciones de Estrés</p><br>
                <section class="panel panel-body" style="padding:3%;border-radius:0px">
                    <p style="text-align:left;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px"><?php echo $Sexo.' '.$Nombre ?>:</p><br>
                    <p class="parrafo">Este cuestionario busca identificar síntomas reveladores de <span style="font-family:verdanab">reacciones de estrés</span>.</p>
                    <p class="parrafo">Señale el cuadro que indique la frecuencia (durante los últimos tres meses) con que se le ha presentado el malestar descrito en cada pregunta. Si se equivoca en una respuesa, simplemente seleccione otro cuadro.</p><br>
                    <p style="text-align:left;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px">Ejemplo:</p>
                    <table id="tabla2" bordered="0" class="radio">
                        <tr>
                            <td class="items"><span class="nIA">1.</span> Dolores en el cuello y espalda o tensión muscular</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span><input type="radio" name="estres_1" id="radioEs_1" value=""/><label id="check11" for="radioEs_1"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span><input type="radio" name="estres_1" id="radioEs_2" value=""/><label id="check11" for="radioEs_2"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span><input type="radio" name="estres_1" id="radioEs_4" value=""checked/><label id="check11" for="radioEs_4"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span><input type="radio" name="estres_1" id="radioEs_5" value=""/><label id="check11" for="radioEs_5"></td>
                        </tr>
                    </table>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspSus respuestas serán manejadas de manera confidencial, la empresa no sabrá los resultados individuales y que no podrá solicitar información individual.</p>
                    <p class="parrafo"><script style="color:#008000;font-size:22px" class="fa fa-angle-right"></script>&nbsp&nbspSi tiene duda respecto a una pregunta, solicite mayor explicación mediante el n° celular <span style='color:#248f24;font-size:16px' class='fa fa-whatsapp'></span><a href='https://api.whatsapp.com/send?phone=573022892111' target='_blank' style='color:#248f24;font-family:verdanab'>&nbsp3022892111</a>.</p><br>
                    <p style="text-align:center;padding-left:5%;padding-right:5%;font-family:narrow;font-size:18px;letter-spacing:2px">Gracias por su colaboración</p>
                </section>
                <p style="text-align:center;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px">Seleccione una de las siguientes alternativas en cada numeral:</p>
                <table class="tableIA liker" align="center" bordered="0">
                    <tr>
                        <th>Siempre</th>
                        <th>Casi siempre</th>
                        <th>A veces</th>
                        <th>Nunca</th>
                    </tr>
                </table><br>    
               <form name="formES" id="formES">
                    <section style="background:#f7f7f7;padding:3%;border-radius:0px">
                        <p class="parrafo">Señale la casilla que indique la frecuencia con que se le han presentado los siguientes malestares en los últimos tres meses.</p>
                    </section>
                    <section style="padding-left:3%;padding-right:3%;border-radius:0px;border:0!important">    
                    <table id="tabla2" bordered="0" class="radio">
                        <tr><td class="items"><span class="nIA">1.</span> Dolores en el cuello y espalda o tensión muscular.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres1" id="radioEs1" value="9"/><label id="check1" for="radioEs1"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres1" id="radioEs2" value="6"/><label id="check1" for="radioEs2"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres1" id="radioEs3" value="3"/><label id="check1" for="radioEs3"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres1" id="radioEs5" value="0"/><label id="check1" for="radioEs5"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">2.</span> Problemas gastrointestinales, úlcera péptica, acidez, problemas digestivos o del colon.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres2" id="radioEs6" value="9"/><label id="check1" for="radioEs6"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres2" id="radioEs7" value="6"/><label id="check1" for="radioEs7"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres2" id="radioEs8" value="3"/><label id="check1" for="radioEs8"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres2" id="radioEs10" value="0"/><label id="check1" for="radioEs10"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">3.</span> Problemas respiratorios.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres3" id="radioEs11" value="9"/><label id="check1" for="radioEs11"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres3" id="radioEs12" value="6"/><label id="check1" for="radioEs12"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres3" id="radioEs13" value="3"/><label id="check1" for="radioEs13"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres3" id="radioEs15" value="0"/><label id="check1" for="radioEs15"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">4.</span> Dolor de cabeza.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres4" id="radioEs16" value="6"/><label id="check1" for="radioEs16"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres4" id="radioEs17" value="4"/><label id="check1" for="radioEs17"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres4" id="radioEs18" value="2"/><label id="check1" for="radioEs18"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres4" id="radioEs20" value="0"/><label id="check1" for="radioEs20"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">5.</span> Trastorno del sueño como somnolencia durante el día o desvelo en la noche.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres5" id="radioEs21" value="6"/><label id="check1" for="radioEs21"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres5" id="radioEs22" value="4"/><label id="check1" for="radioEs22"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres5" id="radioEs23" value="2"/><label id="check1" for="radioEs23"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres5" id="radioEs25" value="0"/><label id="check1" for="radioEs25"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">6.</span> Palpitaciones en el pecho o problemas cardíacos.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres6" id="radioEs26" value="6"/><label id="check1" for="radioEs26"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres6" id="radioEs27" value="4"/><label id="check1" for="radioEs27"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres6" id="radioEs28" value="2"/><label id="check1" for="radioEs28"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres6" id="radioEs30" value="0"/><label id="check1" for="radioEs30"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">7.</span> Cambios fuertes del apetito.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres7" id="radioEs31" value="3"/><label id="check1" for="radioEs31"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres7" id="radioEs32" value="2"/><label id="check1" for="radioEs32"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres7" id="radioEs33" value="1"/><label id="check1" for="radioEs33"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres7" id="radioEs35" value="0"/><label id="check1" for="radioEs35"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">8.</span> Problemas relacionados con la función de los órganos genitales(impotencia, frigidez).</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres8" id="radioEs36" value="3"/><label id="check1" for="radioEs36"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres8" id="radioEs37" value="2"/><label id="check1" for="radioEs37"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres8" id="radioEs38" value="1"/><label id="check1" for="radioEs38"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres8" id="radioEs40" value="0"/><label id="check1" for="radioEs40"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">9.</span> Dificultad en las relaciones familiares.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres9" id="radioEs41" value="9"/><label id="check1" for="radioEs41"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres9" id="radioEs42" value="6"/><label id="check1" for="radioEs42"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres9" id="radioEs43" value="3"/><label id="check1" for="radioEs43"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres9" id="radioEs45" value="0"/><label id="check1" for="radioEs45"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">10.</span> Dificultad para permanecer quieto o dificultad para inicar actividades.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres10" id="radioEs46" value="6"/><label id="check1" for="radioEs46"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres10" id="radioEs47" value="4"/><label id="check1" for="radioEs47"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres10" id="radioEs48" value="2"/><label id="check1" for="radioEs48"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres10" id="radioEs50" value="0"/><label id="check1" for="radioEs50"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">11.</span> Dificultad en la relación con otras personas.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres11" id="radioEs51" value="6"/><label id="check1" for="radioEs51"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres11" id="radioEs52" value="4"/><label id="check1" for="radioEs52"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres11" id="radioEs53" value="2"/><label id="check1" for="radioEs53"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres11" id="radioEs55" value="0"/><label id="check1" for="radioEs55"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">12.</span> Sensación de aislamiento  y desinterés.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres12" id="radioEs56" value="3"/><label id="check1" for="radioEs56"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres12" id="radioEs57" value="2"/><label id="check1" for="radioEs57"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres12" id="radioEs58" value="1"/><label id="check1" for="radioEs58"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres12" id="radioEs60" value="0"/><label id="check1" for="radioEs60"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">13.</span> Sentimiento de sobrecarga de trabajo.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres13" id="radioEs61" value="9"/><label id="check1" for="radioEs61"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres13" id="radioEs62" value="6"/><label id="check1" for="radioEs62"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres13" id="radioEs63" value="3"/><label id="check1" for="radioEs63"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres13" id="radioEs65" value="0"/><label id="check1" for="radioEs65"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">14.</span> Dificultad para concentrarse, olvidos frecuentes.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres14" id="radioEs66" value="9"/><label id="check1" for="radioEs66"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres14" id="radioEs67" value="6"/><label id="check1" for="radioEs67"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres14" id="radioEs68" value="3"/><label id="check1" for="radioEs68"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres14" id="radioEs70" value="0"/><label id="check1" for="radioEs70"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">15.</span> Aumento en el número de accidentes de trabajo.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres15" id="radioEs71" value="9"/><label id="check1" for="radioEs71"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres15" id="radioEs72" value="6"/><label id="check1" for="radioEs72"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres15" id="radioEs73" value="3"/><label id="check1" for="radioEs73"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres15" id="radioEs75" value="0"/><label id="check1" for="radioEs75"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">16.</span> Sentimiento de frustración, de no haber hecho lo que se quería en la vida.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres16" id="radioEs76" value="6"/><label id="check1" for="radioEs76"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres16" id="radioEs77" value="4"/><label id="check1" for="radioEs77"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres16" id="radioEs78" value="2"/><label id="check1" for="radioEs78"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres16" id="radioEs80" value="0"/><label id="check1" for="radioEs80"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">17.</span> Cansancio, tedio o desgano.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres17" id="radioEs81" value="6"/><label id="check1" for="radioEs81"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres17" id="radioEs82" value="4"/><label id="check1" for="radioEs82"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres17" id="radioEs83" value="2"/><label id="check1" for="radioEs83"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres17" id="radioEs85" value="0"/><label id="check1" for="radioEs85"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">18.</span> Disminución del rendimiento en el trabajo o poca creatividad.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres18" id="radioEs86" value="6"/><label id="check1" for="radioEs86"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres18" id="radioEs87" value="4"/><label id="check1" for="radioEs87"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres18" id="radioEs88" value="2"/><label id="check1" for="radioEs88"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres18" id="radioEs90" value="0"/><label id="check1" for="radioEs90"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">19.</span> Deseo de no asistir al trabajo.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres19" id="radioEs91" value="6"/><label id="check1" for="radioEs91"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres19" id="radioEs92" value="4"/><label id="check1" for="radioEs92"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres19" id="radioEs93" value="2"/><label id="check1" for="radioEs93"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres19" id="radioEs95" value="0"/><label id="check1" for="radioEs95"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">20.</span> Bajo compromiso o poco interés con lo que se hace.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres20" id="radioEs96" value="3"/><label id="check1" for="radioEs96"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres20" id="radioEs97" value="2"/><label id="check1" for="radioEs97"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres20" id="radioEs98" value="1"/><label id="check1" for="radioEs98"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres20" id="radioEs100" value="0"/><label id="check1" for="radioEs100"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">21.</span> Dificultad para tomar decisiones.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres21" id="radioEs101" value="3"/><label id="check1" for="radioEs101"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres21" id="radioEs102" value="2"/><label id="check1" for="radioEs102"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres21" id="radioEs103" value="1"/><label id="check1" for="radioEs103"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres21" id="radioEs105" value="0"/><label id="check1" for="radioEs105"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">22.</span> Deseo de cambiar de empleo.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres22" id="radioEs106" value="3"/><label id="check1" for="radioEs106"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres22" id="radioEs107" value="2"/><label id="check1" for="radioEs107"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres22" id="radioEs108" value="1"/><label id="check1" for="radioEs108"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres22" id="radioEs110" value="0"/><label id="check1" for="radioEs110"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">23.</span> Sentimiento de soledad y miedo</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres23" id="radioEs111" value="9"/><label id="check1" for="radioEs111"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres23" id="radioEs112" value="6"/><label id="check1" for="radioEs112"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres23" id="radioEs113" value="3"/><label id="check1" for="radioEs113"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres23" id="radioEs115" value="0"/><label id="check1" for="radioEs115"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">24.</span> Sentimiento de irritabilidad, actitudes y pensamientos negativos.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres24" id="radioEs116" value="9"/><label id="check1" for="radioEs116"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres24" id="radioEs117" value="6"/><label id="check1" for="radioEs117"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres24" id="radioEs118" value="3"/><label id="check1" for="radioEs118"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres24" id="radioEs120" value="0"/><label id="check1" for="radioEs120"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">25.</span> Sentimeinto de angustia, preocupación o tristeza.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres25" id="radioEs121" value="6"/><label id="check1" for="radioEs121"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres25" id="radioEs122" value="4"/><label id="check1" for="radioEs122"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres25" id="radioEs123" value="2"/><label id="check1" for="radioEs123"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres25" id="radioEs125" value="0"/><label id="check1" for="radioEs125"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">26.</span> Consumo de drogas para aliviar la tensión o los nervios.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres26" id="radioEs126" value="6"/><label id="check1" for="radioEs126"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres26" id="radioEs127" value="4"/><label id="check1" for="radioEs127"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres26" id="radioEs128" value="2"/><label id="check1" for="radioEs128"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres26" id="radioEs130" value="0"/><label id="check1" for="radioEs130"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">27.</span> Sentimientos de que "no vale nada", o "no sirve para nada".</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres27" id="radioEs131" value="6"/><label id="check1" for="radioEs131"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres27" id="radioEs132" value="4"/><label id="check1" for="radioEs132"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres27" id="radioEs133" value="2"/><label id="check1" for="radioEs133"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres27" id="radioEs135" value="0"/><label id="check1" for="radioEs135"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">28.</span> Consumo de bebidas alcohólicas, café o cigarrillo.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres28" id="radioEs136" value="6"/><label id="check1" for="radioEs136"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres28" id="radioEs137" value="4"/><label id="check1" for="radioEs137"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres28" id="radioEs138" value="2"/><label id="check1" for="radioEs138"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres28" id="radioEs140" value="0"/><label id="check1" for="radioEs140"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">29.</span> Sentimientos de que está perdiendo la razón.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres29" id="radioEs141" value="3"/><label id="check1" for="radioEs141"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres29" id="radioEs142" value="2"/><label id="check1" for="radioEs142"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres29" id="radioEs143" value="1"/><label id="check1" for="radioEs143"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres29" id="radioEs145" value="0"/><label id="check1" for="radioEs145"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">30.</span> Comportamientos rígidos, obstinación o terquedad.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres30" id="radioEs146" value="3"/><label id="check1" for="radioEs146"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres30" id="radioEs147" value="2"/><label id="check1" for="radioEs147"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres30" id="radioEs148" value="1"/><label id="check1" for="radioEs148"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres30" id="radioEs150" value="0"/><label id="check1" for="radioEs150"></label></td>
                        </tr>
                        <tr><td class="items"><span class="nIA">31.</span> Sensación de no poder manejar los problemas de la vida.</td>
                            <td data-title="Siempre" id="borderout"><span class="titulo">Siempre</span>            <input type="radio" name="estres31" id="radioEs151" value="3"/><label id="check1" for="radioEs151"></label></td>
                            <td data-title="Casi siempre" id="borderout"><span class="titulo">Casi Siempre</span>  <input type="radio" name="estres31" id="radioEs152" value="2"/><label id="check1" for="radioEs152"></label></td>
                            <td data-title="A veces" id="borderout"><span class="titulo">A veces</span>            <input type="radio" name="estres31" id="radioEs153" value="1"/><label id="check1" for="radioEs153"></label></td>
                            <td data-title="Nunca" id="borderout"><span class="titulo">Nunca</span>                <input type="radio" name="estres31" id="radioEs155" value="0"/><label id="check1" for="radioEs155"></label></td>
                        </tr>
                    </table> 
                    </section>
                    <div><input id="botonES" type="submit"  class="btn btn btn-default btn-block" name="enviar1" style="width:13em !important;height:2.5em!important;background: linear-gradient(to bottom, #e6e6e6, #cccccc) !important;font-family:Moristonb;color: #000000 !important;border: none !important;border-radius: 16px !important;font-size:14px !important;box-shadow: 0 4px 14px rgba(161, 225, 132, 0.3) !important;transition: all 0.3s ease !important;position:relative;cursor:pointer;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(100,100,100,0.4)';this.style.background='linear-gradient(135deg, #b3b3b3, #999999)'" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 14px rgba(161, 225, 132, 0.3)';this.style.background='linear-gradient(135deg, #e6e6e6, #cccccc)'"/></div><br>  
                </form>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal10" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <h4 style="font-family:narrow;letter-spacing:2px;text-align:center;line-height: 2.8rem;">El formulario para identificar síntomas reveladores de estrés ya se encuentra diligenciado</h4>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal11" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <br>
            </div>
            <div class="modal-body" align="center">
                <p style="font-size:20px;font-family:narrow;letter-spacing:1px;text-align:center;line-height: 2.8rem">Usted ya ha completado todos los formularios, muchas gracias por su colaboración.</p><br>
                <!--<p style="font-family:verdanabi;font-size:13px">Recuerde que debe descargar, diligenciar y entregar el consentimiento informado al área de Seguridad y Salud en su empresa:</p>
                <p><button class="boton_consentimiento" type="submit" style="font-size:14px;width:150px;height:35px">Consentimiento</button></p><br>-->
                <p><a id="boton_salir" type="button" href="<?php echo RUTA_LOGOUT_RIESGO ?>" style="border-radius:16px">Salir</a></p>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal" class="modal fullscreen-modal" data-easein="flash" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-lg" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">            
                <br>
            </div>
            <div class="modal-body" style="font-size:13px;text-align:left">
                <div class="container">
                    <p style="font-size:23px;color:#000000;font-family:verdanab;line-height:5rem;text-align:center;line-height:2rem;">CONSENTIMIENTO INFORMADO</p>
                    <p class="captura1" style="font-size:22px;line-height:1em;font-family:Narrow;letter-spacing:2px;text-align:center">IDENTIFICACIÓN DE FACTORES DE RIESGO PSICOSOCIAL - <span style="color:#f58634">FORMA <?php echo $forma ?></span></p><br><br>
                    <p style="text-align:left;padding-left:5%;padding-right:5%;font-family:narrow;font-size:16px;letter-spacing:2px"><?php echo $Sexo.' '.$Nombre ?>, reciba un cordial saludo de parte de CEDISALUD IPS:</p><br>
                    <p>Usted está invitado(a) a colaborar en el estudio <span style="font-family:verdanab">"IDENTIFICACIÓN DE FACTORES DE RIESGO PSICOSOCIAL"</span> que será realizado en <span style="font-family:verdanab"><?php echo $Empresa ?></span>, empresa en la que usted labora.</p><br>
                    <p><span style="font-family:verdanab">Objetivo:</span> Este estudio pretende identificar los factores de riesgo psicosocial que pueden estar presentes en la empresa, con el propósito de identificar necesidades de intervención para la prevención y/o disminución de dichos factores de riesgo, buscando la salud del empleado y el mejoramiento de su calidad de vida y la de su familia, dando cumplimiento a la resolución 2646/08.</p><br> 
                    <p>La Resolución 1072 de 2015, que establece el Sistema de Gestión de la Seguridad y Salud en el Trabajo (SG-SST), dispone en su Artículo 2.2.4.6.10 las responsabilidades de los trabajadores en esta materia. Entre ellas, se encuentra la obligación de participar en la implementación y ejecución del SG-SST, lo que incluye la identificación, evaluación y control de los riesgos laborales, incluyendo los psicosociales.</p><br>
                    <p><span style="font-family:verdanab">Metodología empleada:</span> si acepta participar, se le pedirá que diligencie algunos cuestionarios que buscan recolectar información, los cuales fueron diseñados por expertos de la Universidad Javeriana por contratación con el Ministerio de la Protección Social.</p><br> 
                    <p><span style="font-family:verdanab">Riesgos:</span>  el hecho de participar en este estudio no implicará ningún tipo de riesgo, al contrario, contribuirá con un proceso de prevención e intervención que busca generar el mejoramiento de su salud y calidad de vida, así como la del resto de sus compañeros de trabajo.</p><br> 
                    <p><span style="font-family:verdanab">Beneficios par usted y la sociedad:</span>  la información aquí recolectada permitirá conocer cuales son los riesgo psicosociales intralaborales y extralaborales que están presentes en la empresa, con el fin de implementar estrategias de intervención para mitigarlos y con ello contribuir al mejoramiento en su salud, su productividad y su calidad de vida.</p><br> 
                    <p><span style="font-family:verdanab">Personas que tendrán acceso a la información:</span>  el psicólogo que realiza el estudio y el personal de gestión humana y/o Seguridad y Salud en el Trabajo de su empresa. Los informes grupales o por área, los cuales no incluirán sus datos personales, podrán ser conocidos por toda la empresa en el momento de la presentación de resultados, planes e intervención.</p><br> 
                    <p><span style="font-family:verdanab">Aspectos económicos:</span> la participación no implicará ningún costo económico para usted, ni tampoco se dará ninguna retribución económica por su participación. </p><br>    
                    <div>
                        <form name="form_termin">
                            <table id="botones" style="border-color:#ffffff;width:100%;background:#fafecd;padding:1em" class="radio">
                                <tr > 
                                    <td rowspan="2"><span style="font-family:verdanab;height:auto!important">Yo, <?php echo $Nombre.' '.$Apellido1.' '.$Apellido2 ?>, identificado(a) con C.C. <?php echo $Cedula ?>, he leído toda la hoja de información que se me ha entregado y comprendo que mi participación es voluntaria.</span></td> 
                                </tr>
                                <tr style="background:#fafecd;padding:1em"> 
                                    <td id="borderout"><span style="color:#333333;font-size:20px;font-family:verdanab;padding-left:18px">Si</span><input type="radio" id="radio1111" name="termin" class="termin" value="1"/><label id="check11" for="radio1111"></label></td>
                                    <td id="borderout"><span style="color:#333333;font-size:20px;font-family:verdanab;padding-left:18px">No</span><input type="radio" id="radio2222" name="termin" class="termin" value="0"/><label id="check11" for="radio2222"></label></td>
                                </tr>
                            </table><br>
                            <p>Usted puede contestar las preguntas que desee durante el curso del estudio y abandonarlo en cualquier momento. <span style="font-family:verdanab">Si está de acuerdo en participar, por favor marque el botón "Continuar".  Si no está de acuerdo en participar, marque el botón "Salir".</span></p><br><br> 
                            
                           <div class="row">
                        		<div class="col-md-12" id="area" style="text-align:center">
                        		 	<canvas id="draw-canvas"></canvas><br><p style="color:#000000;font-family:verdanab;font-size:14px">Escriba su firma usando toda el rectángulo</p>
                        		 </div>
                        	</div>
                        	<div class="row"><br>
                        		<div class="col-md-12" style="text-align:center">
                        			<input type="button" class="button task-editar" id="draw-clearBtn" style="width:15em;border:0" value="Borrar firma"></input>
                        			<input type="range" id="puntero" min="1" default="1" max="5" value="4" style="height:10px;width:15em!important;border:0;border-radius:0;color:#666666;display:none">
                        		</div>
                        	</div>
                        	<div class="row"><br>
                        		<div class="col-md-12">
                        			<textarea id="draw-dataUrl" class="form-control" style="display:none">:</textarea>
                        		</div>
                        	</div>
                        	<div class="contenedor" style="display:none">
                        		<div class="col-md-12" >
                        			<img id="draw-image" src="" alt=""/>
                        		</div>
                        	</div> 
                            <input type="hidden" id="terminos_si" value=""></input>
                            <table align="center"><br>
                                <tr>
                                    <td><button id="draw-submitBtn" type="submit"  class="btn btn btn-default btn-block" style="width:12em !important;height:2.5em!important;background: linear-gradient(to bottom, #e6e6e6, #cccccc) !important;font-family:Moristonb;color: #000000 !important;border: none !important;border-radius: 16px !important;font-size:16px !important;box-shadow: 0 4px 14px rgba(161, 225, 132, 0.3) !important;transition: all 0.3s ease !important;position:relative;cursor:pointer;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(100,100,100,0.4)';this.style.background='linear-gradient(135deg, #b3b3b3, #999999)'" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 14px rgba(161, 225, 132, 0.3)';this.style.background='linear-gradient(135deg, #e6e6e6, #cccccc)'">Continuar</button></td>
                                </tr>
                            </table>
                             <table align="center"><br>
                                <tr>
                                    <td><button id="draw-submitBtn2" type="button" class="btn btn btn-default btn-block" style="width:12em !important;height:2.5em!important;background: linear-gradient(to bottom, #e6e6e6, #cccccc) !important;font-family:Moristonb;color: #000000 !important;border: none !important;border-radius: 16px !important;font-size:16px !important;box-shadow: 0 4px 14px rgba(161, 225, 132, 0.3) !important;transition: all 0.3s ease !important;position:relative;cursor:pointer;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(100,100,100,0.4)';this.style.background='linear-gradient(135deg,  #b3b3b3, #999999)'" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 14px rgba(161, 225, 132, 0.3)';this.style.background='linear-gradient(135deg, #e6e6e6, #cccccc)'">Salir</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div><br>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="costumModal12" class="modal" data-easein="slideRightIn" data-backdrop="static" align="center">  
    <div class="modal-dialog modal-lg" style="z-index:9999!important;font-family:verdana;font-size:14px;color:#333333">
        <div class="modal-content" style="border-radius:0px;background:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" id="video_pause" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
         
                <p style="font-family:verdanab;color:#000000">Antes de iniciar, por favor observa el siguiente tutorial explicativo:</p>
                    <video style="width:100%;height:100%" id="video_" controls>
                      	<source src="https://www.cedisalud.com.co/videos/instructivo_riesgo_psicosocial.mp4" type="video/mp4">
                    </video>
              
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="sociodemografico"></input>
<input type="hidden" id="suma_extra"></input>
<input type="hidden" id="suma_extra2"></input>
<input type="hidden" id="suma_intra"></input>
<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
<script src="<?php echo RUTA_JS ?>zlib.js"></script>
<script src="<?php echo RUTA_JS ?>png.js"></script>
<script src="<?php echo RUTA_JS ?>addimage.js"></script>
<script src="<?php echo RUTA_JS ?>filesaver.js"></script>
<script src="<?php echo RUTA_JS ?>jspdf.min.js"></script>
<script src="<?php echo RUTA_JS ?>base64.js"></script>
<script src="<?php echo RUTA_JS ?>autotable.js"></script>
<script src="<?php echo RUTA_JS ?>default_vfs.js"></script>
<script src="<?php echo RUTA_JS ?>jspdf.customfonts.min.js"></script>
<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.ui.min.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.flexslider.js"></script>
<script src="<?php echo RUTA_JS ?>main.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.scrollTo.min.js"></script>
<script src="<?php echo RUTA_JS ?>common-scripts.js"></script>
<script src="<?php echo RUTA_JS ?>custom-file-input.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="https://code.highcharts.com/11.0.0/highcharts.js"></script>
<script src="https://code.highcharts.com/11.0.0/modules/exporting.js"></script>
<script src="https://code.highcharts.com/11.0.0/modules/offline-exporting.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/svg2pdf.js/2.1.2/svg2pdf.umd.min.js"></script>
<script>
    (function () {
        var URL_WEBCAM = 'https://www.cedisalud.com.co/vistas/webcam.php';
        var btn    = document.getElementById('btnWebcam');
        var panel  = document.getElementById('panelWebcam');
        var cerrar = document.getElementById('panelWebcamClose');
        var iframe = document.getElementById('panelWebcamIframe');
        // Abrir/cerrar panel al hacer clic en el botón
        btn.addEventListener('click', function () {
            var abierto = panel.classList.toggle('abierto');
            if (abierto && iframe.src === 'about:blank') {
                iframe.src = URL_WEBCAM;
            }
        });
        cerrar.addEventListener('click', function () {
            panel.classList.remove('abierto');
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                panel.classList.remove('abierto');
            }
        });
        window.addEventListener('message', function (e) {
            if (e.data && e.data.accion === 'cerrarVideollamada') {
                panel.classList.remove('abierto');
                iframe.src = 'about:blank';   // resetear para próxima apertura
            }
        });
    })();
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
        var o = $(this).attr("data-easein");"shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    var municipios = new Array();
    municipios [1] = ["", "Leticia"]
    municipios [2] = ["", "Medellín","Abejorral","Abriaquí","Alejandría","Amagá","Amalfi","Andes","Angelópolis","Angostura","Anorí","Anzá","Apartadó","Arboletes","Argelia","Armenia","Barbosa","Belmira","Bello","Betania","Betulia","Briceño","Buriticá","Cáceres","Caicedo","Caldas","Campamento","Cañasgordas","Caracolí","Caramanta","Carepa","Carolina del Príncipe","Caucasia","Chigorodó","Cisneros","Ciudad Bolívar","Cocorná","Concepción","Concordia","Copacabana","Dabeiba","Donmatías","Ebéjico","El Bagre","El Carmen de Viboral","El Jardín","El Peñol","El Retiro","El Santuario","Entrerríos","Envigado","Fredonia","Frontino","Giraldo","Girardota","Gómez Plata","Granada","Guadalupe","Guarne","Guatapé","Heliconia","Hispania","Itagüí","Ituango","Jericó","La Ceja","La Estrella","La Pintada","La Unión","Liborina","Maceo","Marinilla","Montebello","Murindó","Mutatá","Nariño","Nechí","Necoclí","Olaya","Peque","Pueblorrico","Puerto Berrio","Puerto Nare","Puerto Triunfo","Remedios","Rionegro","Sabanalarga","Sabaneta","Salgar","San Andrés de Cuerquia","San Carlos","San Francisco","San Jerónimo","San José de la Montaña","San Juan de Urabá","San Luis","San Pedro de los Milagros","San Pedro de Urabá","San Rafael","San Roque","San Vicente Ferrer","Santa Bárbara","Santa Fe de Antioquia","Santa Rosa de Osos","Santo Domingo","Segovia","Sonsón","Sopetrán","Támesis","Tarazá","Tarso","Titiribí","Toledo","Turbo","Uramita","Urrao","Valdivia","Valparaíso","Vegachí","Venecia","Vigía del Fuerte","Yalí","Yarumal","Yolombó","Yondó","Zaragoza"]
    municipios [3] = ["", "Arauca"]
    municipios [4] = ["", "Barranquilla"]
    municipios [5] = ["", "Cartagena"]
    municipios [6] = ["", "Tunja","Puerto Boyacá"]
    municipios [7] = ["", "Manizales","Aguadas","Anserma","Aranzazu","Belalcázar","Chinchiná","Filadelfia","La Dorada","La Merced","Manzanares","Marmato","Marquetalia","Marulanda","Neira","Norcasia","Pácora","Palestina","Pensilvania","Riosucio","Risaralda","Salamina","Samaná","San José","Supía","Victoria","Villamaría","Viterbo"]
    municipios [8] = ["", "Florencia"]
    municipios [9] = ["", "Yopal"],
    municipios [10] = ["", "Popayán"]
    municipios [11] = ["", "Valledupar"]
    municipios [12] = ["", "Quibdó"]
    municipios [13] = ["", "Montería"]
    municipios [14] = ["", "Bogotá D.C.","Agua de Dios","Albán","Anapoima","Anolaima","Apulo","Arbeláez","Beltrán","Bituima","Bojacá","Cabrera","Cachipay","Cajicá","Caparrapí","Cáqueza","Carupa","Chaguaní","Chía","Chipaque","Choachí","Chocontá","Cogua","Cota","Cucunubá","El Colegio","El Peñón","El Rosal","Facatativá","Fómeque","Fosca","Funza","Fúquene","Fusagasugá","Gachalá","Gachancipá","Gachetá","Gama","Girardot","Granada","Guachetá","Guaduas","Guasca","Guataquí","Guatavita","Guayabal de Síquima","Guayabetal","Gutiérrez","Jerusalén","Junín","La Calera","La Mesa","La Palma","La Peña","La Vega","Lenguazaque","Machetá","Madrid","Manta","Medina","Mosquera","Nariño","Nemocón","Nilo","Nimaima","Nocaima","Pacho","Paime","Pandi","Paratebueno","Pasca","Puerto Salgar","Pulí","Quebradanegra","Quetame","Quipile","Ricaurte","San Antonio del Tequendama","San Bernardo","San Cayetano","San Francisco de Sales","San Juan de Rioseco","Sasaima","Sesquilé","Sibaté","Silvania","Simijaca","Soacha","Sopó","Subachoque","Suesca","Supatá","Susa","Sutatausa","Tabio","Tausa","Tena","Tenjo","Tibacuy","Tibirita","Tocaima","Tocancipá","Topaipí"," Ubalá","Ubaque","Ubaté","Une","Útica","Venecia","Vergara","Vianí","Villagómez","Villapinzón","Villeta","Viotá","Yacopí","Zipacón","Zipaquirá"]
    municipios [15] = ["", "Inírida"]
    municipios [16] = ["", "Guaviare"]
    municipios [17] = ["", "Neiva","Campoalegre","Hobo","Rivera","Palermo"]
    municipios [18] = ["", "Riohacha"],
    municipios [19] = ["", "Santa Marta"]
    municipios [20] = ["", "Villavicencio"]
    municipios [21] = ["", "Pasto"]
    municipios [22] = ["", "Cúcuta"]
    municipios [23] = ["", "Mocoa"]
    municipios [24] = ["", "Armenia"]
    municipios [25] = ["", "Pereira"]
    municipios [26] = ["", "San Andrés"]
    municipios [27] = ["", "Bucaramanga"]
    municipios [28] = ["", "Sincelejo"]
    municipios [29] = ["", "Ibagué","Alpujarra","Alvarado","Ambalema","Anzoátegui","Armero","Ataco","Cajamarca","Carmen de Apicalá","Casabianca","Chaparral","Coello","Coyaima","Cunday","Dolores","Espinal","Falan","Flandes","Fresno","Guamo","Herveo","Honda","Icononzo","Lérida","Melgar","Murillo","Natagaima","Ortega","Palocabildo","Piedras","Planadas","Prado","Purificación","Rioblanco","Roncesvalles","Rovira","Saldaña","San Antonio","San Luis","Mariquita","Santa Isabel","Suárez","Valle de San Juan","Venadillo","Villahermosa","Villarrica"],
    municipios [30] = ["", "Cali"]
    municipios [31] = ["", "Mitú"]
    municipios [31] = ["", "Puerto Carreño"]
    function departamentor(formu) {
        var dr = formu.Departamentor.selectedIndex;
        formu.Municipior.length = municipios[dr].length;
        for (i = 0; i < formu.Municipior.length; i++){
            formu.Municipior.options[i].text = municipios[dr][i]
        }};
    function departamentot(formu) {
        var dt = formu.Departamentot.selectedIndex;
        formu.Municipiot.length = municipios[dt].length;
        for (i = 0; i < formu.Municipiot.length; i++){
            formu.Municipiot.options[i].text = municipios[dt][i]
    }};  
    $(document).ready(function () {
        $(".loader").fadeOut("slow");
        $('nav .scroll[href^="#"]').click(function () {
            var destino = $(this.hash);
            if (destino.length == 0) {
                destino = $('a[name="' + this.hash.substr(1) + '"]');
            }
            if (destino.length == 0) {
                destino = $('html');
            }
            $('html, body').animate({scrollTop: destino.offset().top}, 500);
            return false;
        });
    });
    $(document).ready(function () {
        muestra_oculta1('mostrar1');
        muestra_oculta2('mostrar2');
        muestra_oculta2('mostrar3');
        existe();
    });    
    function muestra_oculta1(id){
    if (document.getElementById){ 
    var el = document.getElementById(id); 
    el.style.display = (el.style.display == 'none') ? 'block' : 'none';
    }};
    function muestra_oculta2(id){
    if (document.getElementById){ 
    var el = document.getElementById(id); 
    el.style.display = (el.style.display == 'none') ? 'block' : 'none';
    }};
    function muestra_oculta3(id){
    if (document.getElementById){ 
    var el = document.getElementById(id); 
    el.style.display = (el.style.display == 'none') ? 'block' : 'none';
    }};
    $("#boton_inicio").click(function (event) {
        var id = '<?php echo $id ?>';
        $.ajax({
            type: "post",
            url: "../datosbdg.php",
            data: "id=" + id,
                befforesed: function(){
    		},
            success: function (response) {
                const tasks2 = JSON.parse(response);
                let Tipo= '';
                let Horas = '';
                let Salario = '';
                tasks2.forEach(task2 => {
                    Tipo += `${task2.Tipo}`,
                    Horas += `${task2.Horas}`,
                    Salario += `${task2.Salario}`
                });
                sociodemografico();
                //if ((Tipo != 0) && (Horas != 0) && (Salario != 0)){
                /*} else {
                    MyFunction();
                    //$("#costumModal5").modal("show");
                }*/
            }      
        });
    });
    function sociodemografico() {
            var id1 = '<?php echo $id ?>';
            $("#costumModal2").modal("show");
            $.ajax({
                type: "post",
                url: "../datosbdg.php",
                data: "id=" + id1,
                	befforesed: function(){
    			},
                success: function (response) {
                   const tasks2 = JSON.parse(response);
                   let Anon = '';
                   let Civil = '';
                   let Escolaridad = '';
                   let Ocupacion = '';
                   let Departamentor = '';
                   let Municipior = '';
                   let Estrato = '';
                   let Vivienda = '';
                   let Dependencia = '';
                   let Departamentot = '';
                   let Municipiot = '';
                   let Añose = '';
                   let Añosc = '';
                   let Tipo = '';
                   let Horas = '';
                   let Salario = '';
                   tasks2.forEach(task2 => {
                        Anon+= `${task2.Anon}`,
                        Civil+= `${task2.Civil}`
                        Escolaridad+= `${task2.Escolaridad}`
                        Ocupacion+= `${task2.Ocupacion}`
                        Departamentor+= `${task2.Departamentor}`
                        Municipior+= `${task2.Municipior}`
                        Estrato+= `${task2.Estrato}`
                        Vivienda+= `${task2.Vivienda}`
                        Dependencia+= `${task2.Dependencia}`
                        Departamentot+= `${task2.Departamentot}`
                        Municipiot+= `${task2.Municipiot}`
                        Añose+= `${task2.Añose}`
                        Añosc+= `${task2.Añosc}`
                        Tipo+= `${task2.Tipo}`
                        Horas+= `${task2.Horas}`
                        Salario+= `${task2.Salario}`
                   });
                document.getElementById("Anon").value = (Anon);
                document.getElementById("Civil").value = (Civil);
                document.getElementById("Escolaridad").value = (Escolaridad);
                document.getElementById("Ocupacion").value = (Ocupacion);
                document.getElementById("Departamentor").value = (Departamentor);
                document.getElementById("Municipior").value = (Municipior);
                document.getElementById("Estrato").value = (Estrato);
                document.getElementById("Vivienda").value = (Vivienda);
                document.getElementById("Dependencia").value = (Dependencia);
                document.getElementById("Departamentot").value = (Departamentot);
                document.getElementById("Municipiot").value = (Municipiot);
                document.getElementById("Añose").value = (Añose);
                document.getElementById("Añosc").value = (Añosc);
                document.getElementById("Tipo").value = (Tipo);
                document.getElementById("Horas").value = (Horas);
                document.getElementById("Salario").value = (Salario);
                    $('#task-form1').submit(e => {
                        e.preventDefault();
                        Edad = $('#Anon').val();
                            var hoy = new Date();
                            var cumpleanos = new Date(Edad +'/06/30');
                            var edad = hoy.getFullYear() - cumpleanos.getFullYear();
                            var m = hoy.getMonth() - cumpleanos.getMonth();
                            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                            edad;
                        };
                            const postData = {
                              id: '<?php echo $id ?>',
                              Nacimiento: $('#Nacimiento').val(),
                              Anon: $('#Anon').val(),
                              Edad:edad,
                              Civil: $('#Civil').val(),
                              Escolaridad: $('#Escolaridad').val(),
                              Ocupacion: $('#Ocupacion').val(),
                              Departamentor: $('#Departamentor').val(),
                              Municipior: $('#Municipior').val(),
                              Estrato: $('#Estrato').val(),
                              Vivienda: $('#Vivienda').val(),
                              Dependencia: $('#Dependencia').val(),
                              Departamentot: $('#Departamentot').val(),
                              Municipiot: $('#Municipiot').val(),
                              Añose: $('#Añose').val(),
                              Añosc: $('#Añosc').val(),
                              Tipo: $('#Tipo').val(),
                              Horas: $('#Horas').val(),
                              Salario: $('#Salario').val()
                            };
                            const url = '../insertar3.php';
                            $.post(url, postData, (response) => {
                               $("#costumModal2").modal("hide");
                               MyFunction();
                               existe();
                        });
                    });
                }      
            }); 
        };
    $("#video_pause").click(function (event) {
        var video=document.getElementById('video_'); 
        video.pause(); 

    })   
    function MyFunction(){
        var id_existe = '<?php echo $id ?>';
        $.ajax({
            type: "post",
            url: "../existeinter.php",
            data: "id=" + id_existe,
            success: function(response) {
                
                const tasks = JSON.parse(response);
                let G0 = '';
                let Ex = '';
                let u_existe = '';
                let u_existe2 = '';
                tasks.forEach(task => {
                    G0 += `${task.intraA}`,
                    Ex += `${task.extralaboral}`,
                    u_existe += `${task.intraA_existe}`,
                    u_existe2 += `${task.intraB_existe}`
                });
                console.log(<?php echo $intra ?>)
                 if (G0 == 0) {
                     document.getElementById("suma_intra").value = 0;
                }else {
                     document.getElementById("suma_intra").value = (G0);
                }
                if ((Ex == 0.0) || (Ex == 'null')) {
                     document.getElementById("suma_extra").value = 0;
                     document.getElementById("suma_extra2").value = 0;
                }
                if (Ex > 0) {
                     document.getElementById("suma_extra").value = (Ex);
                     document.getElementById("suma_extra2").value = (Ex);
                }
                if ((u_existe == 0) && ("<?php echo $intra ?>" == 1)) {
                     $("#costumModal3").modal("show");
                }
                if (u_existe == 1) {
                    MyFunctionE();
                    //$("#costumModal6").modal("show");
                }
                if ((u_existe2 == 0) && ("<?php echo $intra ?>" == 2)) {
                     $("#costumModal4").modal("show");
                }
                if (u_existe2 == 1) {
                    MyFunctionE();
                    //$("#costumModal6").modal("show");
                }
            }
        });
    }  
    function MyFunctionE(){
        var id = '<?php echo $id ?>';
        $.ajax({
            type: "post",
            url: "../existeinter.php",
            data: "id=" + id,
            befforesed: function(){
    		},
            success: function(response) {
                const tasks = JSON.parse(response);
                let G0 = '';
                let Gb0 = '';
                let u_existe = '';
                let u_existe2 = '';
                let u_existe3 = '';
                tasks.forEach(task => {
                    G0 += `${task.intraA}`,
                    Gb0 += `${task.intraB}`,
                    u_existe += `${task.intraA_existe}`,
                    u_existe2 += `${task.intraB_existe}`,
                    u_existe3 += `${task.extralaboral_existe}`
                });
                if ((u_existe3 == 0)) {
                     $("#costumModal7").modal("show");
                }
                if ((u_existe3 == 1)) {
                    MyFunctionES();
                    //$("#costumModal8").modal("show");
                }
                if ((u_existe == 1)) {
                       document.getElementById("suma_intra").value = (G0);
                }
                if ((u_existe2 == 1)) {
                       document.getElementById("suma_intra").value = (Gb0);
                }
                if ((u_existe == 0) && (u_existe2 == 0)) {
                       document.getElementById("suma_intra").value = 0;
                }
                if ((u_existe == 'null') && (u_existe2 == 'null')) {
                       document.getElementById("suma_intra").value = 0;
                }
            }
        });
    } 
    function MyFunctionES(){
        var id = '<?php echo $id ?>';
        $.ajax({
            type: "post",
            url: "../existeinter.php",
            data: "id=" + id,
            befforesed: function(){
    		},
            success: function(response) {
                const tasks = JSON.parse(response);
                let u_existe4 = '';
                tasks.forEach(task => {
                    u_existe4 += `${task.estres_existe}`
                });
                if ((u_existe4 == 0)) {
                     $("#costumModal9").modal("show");
                }
                if ((u_existe4 == 1)) {
                    //$("#costumModal10").modal("show");
                    $("#costumModal11").modal("show");
                }
            }
        });
    } 
    function existe() {
        var id = '<?php echo $id ?>';
        $.ajax({
        type: "post",
        url: "../existeinter.php",
        data: "id=" + id,
        befforesed: function(){
        },
        success: function(response) {
            const tasks11 = JSON.parse(response);
            let u_existe = '';
            let u_existe2 = '';
            let u_existe3 = '';
            let u_existe4 = '';
            tasks11.forEach(task11 => {
                u_existe += `${task11.u_existe}`
                u_existe2+= `${task11.u_existe2}`
                u_existe3+= `${task11.u_existe3}`
                u_existe4+= `${task11.u_existe4}`
                });
                $.ajax({
                    type: "post",
                    url: "../datosbdg.php",
                    data: "id=" + id,
                        befforesed: function(){
                	},
                    success: function (response) {
                        const tasks2 = JSON.parse(response);
                        let Tipo= '';
                        let Horas = '';
                        let Salario = '';
                        tasks2.forEach(task2 => {
                            Tipo += `${task2.Tipo}`,
                            Horas += `${task2.Horas}`,
                            Salario += `${task2.Salario}`
                        });
                        if ((!Tipo) && (!Horas) && (!Salario)){
                        } else {
                            var sociodemografico = 1;
                        }    
                        if ((u_existe == 1 || u_existe2 == 1) && u_existe3 == 1 && u_existe4 == 1 && sociodemografico == 1) {
                            $("#costumModal11").modal("show");
                            $("#costumModal").modal("hide");
                                const postData = {
                                  id2: id,
                                };
                                const url = '../insertar3.php';
                                $.post(url, postData, (response) => {
                            });
                        }
                    }      
                });
            }
        });
    }

    $(document).ready(function() {
      $("#botonIA").click(function (event) {	 
		    event.preventDefault();
			if( $("#formIA input[name='intra1']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 1");document.formIA.intra1.focus();}
			if( $("#formIA input[name='intra2']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 2");document.formIA.intra2.focus();}
			if( $("#formIA input[name='intra3']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 3");document.formIA.intra3.focus();}
			if( $("#formIA input[name='intra4']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 4");document.formIA.intra4.focus();}
			if( $("#formIA input[name='intra5']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 5");document.formIA.intra5.focus();}
			if( $("#formIA input[name='intra6']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 6");document.formIA.intra6.focus();}
			if( $("#formIA input[name='intra7']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 7");document.formIA.intra7.focus();}
			if( $("#formIA input[name='intra8']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 8");document.formIA.intra8.focus();}
			if( $("#formIA input[name='intra9']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 9");document.formIA.intra9.focus();}
			if( $("#formIA input[name='intra10']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 10");document.formIA.intra10.focus();}
			if( $("#formIA input[name='intra11']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 11");document.formIA.intra11.focus();}
			if( $("#formIA input[name='intra12']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 12");document.formIA.intra12.focus();}
			if( $("#formIA input[name='intra13']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 13");document.formIA.intra13.focus();}
			if( $("#formIA input[name='intra14']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 14");document.formIA.intra14.focus();}
			if( $("#formIA input[name='intra15']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 15");document.formIA.intra15.focus();}
			if( $("#formIA input[name='intra16']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 16");document.formIA.intra16.focus();}
			if( $("#formIA input[name='intra17']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 17");document.formIA.intra17.focus();}
			if( $("#formIA input[name='intra18']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 18");document.formIA.intra18.focus();}
			if( $("#formIA input[name='intra19']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 19");document.formIA.intra19.focus();}
			if( $("#formIA input[name='intra20']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 20");document.formIA.intra20.focus();}
			if( $("#formIA input[name='intra21']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 21");document.formIA.intra21.focus();}
			if( $("#formIA input[name='intra22']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 22");document.formIA.intra22.focus();}
			if( $("#formIA input[name='intra23']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 23");document.formIA.intra23.focus();}
			if( $("#formIA input[name='intra24']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 24");document.formIA.intra24.focus();}
			if( $("#formIA input[name='intra25']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 25");document.formIA.intra25.focus();}
			if( $("#formIA input[name='intra26']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 26");document.formIA.intra26.focus();}
			if( $("#formIA input[name='intra27']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 27");document.formIA.intra27.focus();}
			if( $("#formIA input[name='intra28']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 28");document.formIA.intra28.focus();}
			if( $("#formIA input[name='intra29']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 29");document.formIA.intra29.focus();}
			if( $("#formIA input[name='intra30']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 30");document.formIA.intra30.focus();}
			if( $("#formIA input[name='intra31']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 31");document.formIA.intra31.focus();}
			if( $("#formIA input[name='intra32']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 32");document.formIA.intra32.focus();}
			if( $("#formIA input[name='intra33']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 33");document.formIA.intra33.focus();}
			if( $("#formIA input[name='intra34']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 34");document.formIA.intra34.focus();}
			if( $("#formIA input[name='intra35']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 35");document.formIA.intra35.focus();}
			if( $("#formIA input[name='intra36']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 36");document.formIA.intra36.focus();}
			if( $("#formIA input[name='intra37']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 37");document.formIA.intra37.focus();}
			if( $("#formIA input[name='intra38']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 38");document.formIA.intra38.focus();}
			if( $("#formIA input[name='intra39']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 39");document.formIA.intra39.focus();}
			if( $("#formIA input[name='intra40']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 40");document.formIA.intra40.focus();}
			if( $("#formIA input[name='intra41']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 41");document.formIA.intra41.focus();}
			if( $("#formIA input[name='intra42']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 42");document.formIA.intra42.focus();}
	        if( $("#formIA input[name='intra43']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 43");document.formIA.intra43.focus();}
			if( $("#formIA input[name='intra44']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 44");document.formIA.intra44.focus();}
			if( $("#formIA input[name='intra45']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 45");document.formIA.intra45.focus();}
			if( $("#formIA input[name='intra46']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 46");document.formIA.intra46.focus();}
			if( $("#formIA input[name='intra47']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 47");document.formIA.intra47.focus();}
			if( $("#formIA input[name='intra48']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 48");document.formIA.intra48.focus();}
			if( $("#formIA input[name='intra49']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 49");document.formIA.intra49.focus();}
			if( $("#formIA input[name='intra50']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 50");document.formIA.intra50.focus();}
			if( $("#formIA input[name='intra51']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 51");document.formIA.intra51.focus();}
			if( $("#formIA input[name='intra52']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 52");document.formIA.intra52.focus();}
			if( $("#formIA input[name='intra53']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 53");document.formIA.intra53.focus();}
			if( $("#formIA input[name='intra54']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 54");document.formIA.intra54.focus();}
			if( $("#formIA input[name='intra55']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 55");document.formIA.intra55.focus();}
			if( $("#formIA input[name='intra56']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 56");document.formIA.intra56.focus();}
			if( $("#formIA input[name='intra57']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 57");document.formIA.intra57.focus();}
			if( $("#formIA input[name='intra58']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 58");document.formIA.intra58.focus();}
			if( $("#formIA input[name='intra59']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 59");document.formIA.intra59.focus();}
			if( $("#formIA input[name='intra60']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 60");document.formIA.intra60.focus();}
			if( $("#formIA input[name='intra61']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 61");document.formIA.intra61.focus();}
			if( $("#formIA input[name='intra62']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 62");document.formIA.intra62.focus();}
			if( $("#formIA input[name='intra63']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 63");document.formIA.intra63.focus();}
			if( $("#formIA input[name='intra64']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 64");document.formIA.intra64.focus();}
			if( $("#formIA input[name='intra65']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 65");document.formIA.intra65.focus();}
			if( $("#formIA input[name='intra66']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 66");document.formIA.intra66.focus();}
			if( $("#formIA input[name='intra67']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 67");document.formIA.intra67.focus();}
			if( $("#formIA input[name='intra68']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 68");document.formIA.intra68.focus();}
			if( $("#formIA input[name='intra69']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 69");document.formIA.intra69.focus();}
			if( $("#formIA input[name='intra70']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 70");document.formIA.intra70.focus();}
			if( $("#formIA input[name='intra71']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 71");document.formIA.intra71.focus();}
			if( $("#formIA input[name='intra72']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 72");document.formIA.intra72.focus();}
			if( $("#formIA input[name='intra73']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 73");document.formIA.intra73.focus();}
			if( $("#formIA input[name='intra74']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 74");document.formIA.intra74.focus();}
			if( $("#formIA input[name='intra75']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 75");document.formIA.intra75.focus();}
			if( $("#formIA input[name='intra76']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 76");document.formIA.intra76.focus();}
			if( $("#formIA input[name='intra77']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 77");document.formIA.intra77.focus();}
			if( $("#formIA input[name='intra78']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 78");document.formIA.intra78.focus();}
			if( $("#formIA input[name='intra79']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 79");document.formIA.intra79.focus();}
			if( $("#formIA input[name='intra80']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 80");document.formIA.intra80.focus();}
			if( $("#formIA input[name='intra81']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 81");document.formIA.intra81.focus();}
			if( $("#formIA input[name='intra82']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 82");document.formIA.intra82.focus();}
			if( $("#formIA input[name='intra83']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 83");document.formIA.intra83.focus();}
			if( $("#formIA input[name='intra84']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 84");document.formIA.intra84.focus();}
			if( $("#formIA input[name='intra85']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 85");document.formIA.intra85.focus();}
			if( $("#formIA input[name='intra86']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 86");document.formIA.intra86.focus();}
			if( $("#formIA input[name='intra87']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 87");document.formIA.intra87.focus();}
			if( $("#formIA input[name='intra88']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 88");document.formIA.intra88.focus();}
			if( $("#formIA input[name='intra89']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 89");document.formIA.intra89.focus();}
			if( $("#formIA input[name='intra90']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 90");document.formIA.intra90.focus();}
			if( $("#formIA input[name='intra91']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 91");document.formIA.intra91.focus();}
			if( $("#formIA input[name='intra92']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 92");document.formIA.intra92.focus();}
			if( $("#formIA input[name='intra93']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 93");document.formIA.intra93.focus();}
			if( $("#formIA input[name='intra94']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 94");document.formIA.intra94.focus();}
			if( $("#formIA input[name='intra95']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 95");document.formIA.intra95.focus();}
			if( $("#formIA input[name='intra96']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 96");document.formIA.intra96.focus();}
			if( $("#formIA input[name='intra97']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 97");document.formIA.intra97.focus();}
			if( $("#formIA input[name='intra98']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 98");document.formIA.intra98.focus();}
			if( $("#formIA input[name='intra99']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 99");document.formIA.intra99.focus();}
			if( $("#formIA input[name='intra100']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 100");document.formIA.intra100.focus();}
			if( $("#formIA input[name='intra101']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 101");document.formIA.intra101.focus();}
			if( $("#formIA input[name='intra102']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 102");document.formIA.intra102.focus();}
			if( $("#formIA input[name='intra103']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 103");document.formIA.intra103.focus();}
			if( $("#formIA input[name='intra104']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 104");document.formIA.intra104.focus();}
			if( $("#formIA input[name='intra105']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 105");document.formIA.intra105.focus();}
		});
		$("#botonIB").click(function (event) {	 
		    event.preventDefault();
			if( $("#formIB input[name='intrab1']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 1");document.formIB.intrab1.focus();}
			if( $("#formIB input[name='intrab2']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 2");document.formIB.intrab2.focus();}
			if( $("#formIB input[name='intrab3']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 3");document.formIB.intrab3.focus();}
			if( $("#formIB input[name='intrab4']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 4");document.formIB.intrab4.focus();}
			if( $("#formIB input[name='intrab5']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 5");document.formIB.intrab5.focus();}
			if( $("#formIB input[name='intrab6']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 6");document.formIB.intrab6.focus();}
			if( $("#formIB input[name='intrab7']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 7");document.formIB.intrab7.focus();}
			if( $("#formIB input[name='intrab8']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 8");document.formIB.intrab8.focus();}
			if( $("#formIB input[name='intrab9']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 9");document.formIB.intrab9.focus();}
			if( $("#formIB input[name='intrab10']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 10");document.formIB.intrab10.focus();}
			if( $("#formIB input[name='intrab11']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 11");document.formIB.intrab11.focus();}
			if( $("#formIB input[name='intrab12']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 12");document.formIB.intrab12.focus();}
			if( $("#formIB input[name='intrab13']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 13");document.formIB.intrab13.focus();}
			if( $("#formIB input[name='intrab14']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 14");document.formIB.intrab14.focus();}
			if( $("#formIB input[name='intrab15']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 15");document.formIB.intrab15.focus();}
			if( $("#formIB input[name='intrab16']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 16");document.formIB.intrab16.focus();}
			if( $("#formIB input[name='intrab17']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 17");document.formIB.intrab17.focus();}
			if( $("#formIB input[name='intrab18']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 18");document.formIB.intrab18.focus();}
			if( $("#formIB input[name='intrab19']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 19");document.formIB.intrab19.focus();}
			if( $("#formIB input[name='intrab20']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 20");document.formIB.intrab20.focus();}
			if( $("#formIB input[name='intrab21']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 21");document.formIB.intrab21.focus();}
			if( $("#formIB input[name='intrab22']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 22");document.formIB.intrab22.focus();}
			if( $("#formIB input[name='intrab23']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 23");document.formIB.intrab23.focus();}
			if( $("#formIB input[name='intrab24']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 24");document.formIB.intrab24.focus();}
			if( $("#formIB input[name='intrab25']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 25");document.formIB.intrab25.focus();}
			if( $("#formIB input[name='intrab26']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 26");document.formIB.intrab26.focus();}
			if( $("#formIB input[name='intrab27']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 27");document.formIB.intrab27.focus();}
			if( $("#formIB input[name='intrab28']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 28");document.formIB.intrab28.focus();}
			if( $("#formIB input[name='intrab29']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 29");document.formIB.intrab29.focus();}
			if( $("#formIB input[name='intrab30']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 30");document.formIB.intrab30.focus();}
			if( $("#formIB input[name='intrab31']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 31");document.formIB.intrab31.focus();}
			if( $("#formIB input[name='intrab32']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 32");document.formIB.intrab32.focus();}
			if( $("#formIB input[name='intrab33']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 33");document.formIB.intrab33.focus();}
			if( $("#formIB input[name='intrab34']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 34");document.formIB.intrab34.focus();}
			if( $("#formIB input[name='intrab35']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 35");document.formIB.intrab35.focus();}
			if( $("#formIB input[name='intrab36']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 36");document.formIB.intrab36.focus();}
			if( $("#formIB input[name='intrab37']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 37");document.formIB.intrab37.focus();}
			if( $("#formIB input[name='intrab38']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 38");document.formIB.intrab38.focus();}
			if( $("#formIB input[name='intrab39']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 39");document.formIB.intrab39.focus();}
			if( $("#formIB input[name='intrab40']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 40");document.formIB.intrab40.focus();}
			if( $("#formIB input[name='intrab41']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 41");document.formIB.intrab41.focus();}
			if( $("#formIB input[name='intrab42']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 42");document.formIB.intrab42.focus();}
	        if( $("#formIB input[name='intrab43']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 43");document.formIB.intrab43.focus();}
			if( $("#formIB input[name='intrab44']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 44");document.formIB.intrab44.focus();}
			if( $("#formIB input[name='intrab45']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 45");document.formIB.intrab45.focus();}
			if( $("#formIB input[name='intrab46']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 46");document.formIB.intrab46.focus();}
			if( $("#formIB input[name='intrab47']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 47");document.formIB.intrab47.focus();}
			if( $("#formIB input[name='intrab48']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 48");document.formIB.intrab48.focus();}
			if( $("#formIB input[name='intrab49']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 49");document.formIB.intrab49.focus();}
			if( $("#formIB input[name='intrab50']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 50");document.formIB.intrab50.focus();}
			if( $("#formIB input[name='intrab51']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 51");document.formIB.intrab51.focus();}
			if( $("#formIB input[name='intrab52']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 52");document.formIB.intrab52.focus();}
			if( $("#formIB input[name='intrab53']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 53");document.formIB.intrab53.focus();}
			if( $("#formIB input[name='intrab54']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 54");document.formIB.intrab54.focus();}
			if( $("#formIB input[name='intrab55']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 55");document.formIB.intrab55.focus();}
			if( $("#formIB input[name='intrab56']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 56");document.formIB.intrab56.focus();}
			if( $("#formIB input[name='intrab57']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 57");document.formIB.intrab57.focus();}
			if( $("#formIB input[name='intrab58']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 58");document.formIB.intrab58.focus();}
			if( $("#formIB input[name='intrab59']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 59");document.formIB.intrab59.focus();}
			if( $("#formIB input[name='intrab60']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 60");document.formIB.intrab60.focus();}
			if( $("#formIB input[name='intrab61']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 61");document.formIB.intrab61.focus();}
			if( $("#formIB input[name='intrab62']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 62");document.formIB.intrab62.focus();}
			if( $("#formIB input[name='intrab63']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 63");document.formIB.intrab63.focus();}
			if( $("#formIB input[name='intrab64']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 64");document.formIB.intrab64.focus();}
			if( $("#formIB input[name='intrab65']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 65");document.formIB.intrab65.focus();}
			if( $("#formIB input[name='intrab66']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 66");document.formIB.intrab66.focus();}
			if( $("#formIB input[name='intrab67']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 67");document.formIB.intrab67.focus();}
			if( $("#formIB input[name='intrab68']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 68");document.formIB.intrab68.focus();}
			if( $("#formIB input[name='intrab69']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 69");document.formIB.intrab69.focus();}
			if( $("#formIB input[name='intrab70']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 70");document.formIB.intrab70.focus();}
			if( $("#formIB input[name='intrab71']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 71");document.formIB.intrab71.focus();}
			if( $("#formIB input[name='intrab72']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 72");document.formIB.intrab72.focus();}
			if( $("#formIB input[name='intrab73']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 73");document.formIB.intrab73.focus();}
			if( $("#formIB input[name='intrab74']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 74");document.formIB.intrab74.focus();}
			if( $("#formIB input[name='intrab75']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 75");document.formIB.intrab75.focus();}
			if( $("#formIB input[name='intrab76']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 76");document.formIB.intrab76.focus();}
			if( $("#formIB input[name='intrab77']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 77");document.formIB.intrab77.focus();}
			if( $("#formIB input[name='intrab78']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 78");document.formIB.intrab78.focus();}
			if( $("#formIB input[name='intrab79']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 79");document.formIB.intrab79.focus();}
			if( $("#formIB input[name='intrab80']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 80");document.formIB.intrab80.focus();}
			if( $("#formIB input[name='intrab81']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 81");document.formIB.intrab81.focus();}
			if( $("#formIB input[name='intrab82']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 82");document.formIB.intrab82.focus();}
			if( $("#formIB input[name='intrab83']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 83");document.formIB.intrab83.focus();}
			if( $("#formIB input[name='intrab84']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 84");document.formIB.intrab84.focus();}
			if( $("#formIB input[name='intrab85']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 85");document.formIB.intrab85.focus();}
			if( $("#formIB input[name='intrab86']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 86");document.formIB.intrab86.focus();}
			if( $("#formIB input[name='intrab87']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 87");document.formIB.intrab87.focus();}
			if( $("#formIB input[name='intrab88']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 88");document.formIB.intrab88.focus();}
		});		
		$("#botonE").click(function (event) {	 
		    event.preventDefault();
			if( $("#formE input[name='extra1']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 1");document.formE.extra1.focus();}
			if( $("#formE input[name='extra2']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 2");document.formE.extra2.focus();}
			if( $("#formE input[name='extra3']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 3");document.formE.extra3.focus();}
			if( $("#formE input[name='extra4']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 4");document.formE.extra4.focus();}
			if( $("#formE input[name='extra5']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 5");document.formE.extra5.focus();}
			if( $("#formE input[name='extra6']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 6");document.formE.extra6.focus();}
			if( $("#formE input[name='extra7']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 7");document.formE.extra7.focus();}
			if( $("#formE input[name='extra8']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 8");document.formE.extra8.focus();}
			if( $("#formE input[name='extra9']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 9");document.formE.extra9.focus();}
			if( $("#formE input[name='extra10']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 10");document.formE.extra10.focus();}
			if( $("#formE input[name='extra11']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 11");document.formE.extra11.focus();}
			if( $("#formE input[name='extra12']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 12");document.formE.extra12.focus();}
			if( $("#formE input[name='extra13']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 13");document.formE.extra13.focus();}
			if( $("#formE input[name='extra14']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 14");document.formE.extra14.focus();}
			if( $("#formE input[name='extra15']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 15");document.formE.extra15.focus();}
			if( $("#formE input[name='extra16']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 16");document.formE.extra16.focus();}
			if( $("#formE input[name='extra17']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 17");document.formE.extra17.focus();}
			if( $("#formE input[name='extra18']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 18");document.formE.extra18.focus();}
			if( $("#formE input[name='extra19']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 19");document.formE.extra19.focus();}
			if( $("#formE input[name='extra20']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 20");document.formE.extra20.focus();}
			if( $("#formE input[name='extra21']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 21");document.formE.extra21.focus();}
			if( $("#formE input[name='extra22']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 22");document.formE.extra22.focus();}
			if( $("#formE input[name='extra23']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 23");document.formE.extra23.focus();}
			if( $("#formE input[name='extra24']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 24");document.formE.extra24.focus();}
			if( $("#formE input[name='extra25']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 25");document.formE.extra25.focus();}
			if( $("#formE input[name='extra26']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 26");document.formE.extra26.focus();}
			if( $("#formE input[name='extra27']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 27");document.formE.extra27.focus();}
			if( $("#formE input[name='extra28']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 28");document.formE.extra28.focus();}
			if( $("#formE input[name='extra29']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 29");document.formE.extra29.focus();}
			if( $("#formE input[name='extra30']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 30");document.formE.extra30.focus();}
			if( $("#formE input[name='extra31']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 31");document.formE.extra31.focus();}
		});
		$("#botonES").click(function (event) {	 
		    event.preventDefault();
			if( $("#formES input[name='estres1']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 1");document.formES.estres1.focus();}
			if( $("#formES input[name='estres2']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 2");document.formES.estres2.focus();}
			if( $("#formES input[name='estres3']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 3");document.formES.estres3.focus();}
			if( $("#formES input[name='estres4']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 4");document.formES.estres4.focus();}
			if( $("#formES input[name='estres5']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 5");document.formES.estres5.focus();}
			if( $("#formES input[name='estres6']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 6");document.formES.estres6.focus();}
			if( $("#formES input[name='estres7']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 7");document.formES.estres7.focus();}
			if( $("#formES input[name='estres8']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 8");document.formES.estres8.focus();}
			if( $("#formES input[name='estres9']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 9");document.formES.estres9.focus();}
			if( $("#formES input[name='estres10']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 10");document.formES.estres10.focus();}
			if( $("#formES input[name='estres11']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 11");document.formES.estres11.focus();}
			if( $("#formES input[name='estres12']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 12");document.formES.estres12.focus();}
			if( $("#formES input[name='estres13']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 13");document.formES.estres13.focus();}
			if( $("#formES input[name='estres14']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 14");document.formES.estres14.focus();}
			if( $("#formES input[name='estres15']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 15");document.formES.estres15.focus();}
			if( $("#formES input[name='estres16']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 16");document.formES.estres16.focus();}
			if( $("#formES input[name='estres17']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 17");document.formES.estres17.focus();}
			if( $("#formES input[name='estres18']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 18");document.formES.estres18.focus();}
			if( $("#formES input[name='estres19']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 19");document.formES.estres19.focus();}
			if( $("#formES input[name='estres20']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 20");document.formES.estres20.focus();}
			if( $("#formES input[name='estres21']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 21");document.formES.estres21.focus();}
			if( $("#formES input[name='estres22']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 22");document.formES.estres22.focus();}
			if( $("#formES input[name='estres23']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 23");document.formES.estres23.focus();}
			if( $("#formES input[name='estres24']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 24");document.formES.estres24.focus();}
			if( $("#formES input[name='estres25']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 25");document.formES.estres25.focus();}
			if( $("#formES input[name='estres26']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 26");document.formES.estres26.focus();}
			if( $("#formES input[name='estres27']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 27");document.formES.estres27.focus();}
			if( $("#formES input[name='estres28']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 28");document.formES.estres28.focus();}
			if( $("#formES input[name='estres29']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 29");document.formES.estres29.focus();}
			if( $("#formES input[name='estres30']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 30");document.formES.estres30.focus();}
			if( $("#formES input[name='estres31']:radio").is(':checked')){}else {alert("Selecciona una alternativa en el numeral 31");document.formES.estres31.focus();}
		});
        function Radio_Value(ctrl) {
            for(i=0;i<ctrl.length;i++)
            if(ctrl[i].checked) return ctrl[i].value;
        }
         function Radio_Value2(ctrl) {
            for(i=0;i<ctrl.length;i++)
            if(ctrl[i].checked) return ctrl[i].value;
        }
		 $("#botonIA").click(function (event) {
            event.preventDefault();
            var idintraIA = '<?php echo $id ?>';
            var sumaextra = $('#suma_extra').val();
            const postDataIA = {
                idintraA: idintraIA,
                sumaextra:sumaextra,
                intra1:Radio_Value(document.formIA.intra1),
                    intra2:Radio_Value(document.formIA.intra2),
                    intra3:Radio_Value(document.formIA.intra3),
                    intra4:Radio_Value(document.formIA.intra4),
                    intra5:Radio_Value(document.formIA.intra5),
                    intra6:Radio_Value(document.formIA.intra6),
                    intra7:Radio_Value(document.formIA.intra7),
                    intra8:Radio_Value(document.formIA.intra8),
                    intra9:Radio_Value(document.formIA.intra9),
                    intra10:Radio_Value(document.formIA.intra10),
                    intra11:Radio_Value(document.formIA.intra11),
                    intra12:Radio_Value(document.formIA.intra12),
                    intra13:Radio_Value(document.formIA.intra13),
                    intra14:Radio_Value(document.formIA.intra14),
                    intra15:Radio_Value(document.formIA.intra15),
                    intra16:Radio_Value(document.formIA.intra16),
                    intra17:Radio_Value(document.formIA.intra17),
                    intra18:Radio_Value(document.formIA.intra18),
                    intra19:Radio_Value(document.formIA.intra19),
                    intra20:Radio_Value(document.formIA.intra20),
                    intra21:Radio_Value(document.formIA.intra21),
                    intra22:Radio_Value(document.formIA.intra22),
                    intra23:Radio_Value(document.formIA.intra23),
                    intra24:Radio_Value(document.formIA.intra24),
                    intra25:Radio_Value(document.formIA.intra25),
                    intra26:Radio_Value(document.formIA.intra26),
                    intra27:Radio_Value(document.formIA.intra27),
                    intra28:Radio_Value(document.formIA.intra28),
                    intra29:Radio_Value(document.formIA.intra29),
                    intra30:Radio_Value(document.formIA.intra30),
                    intra31:Radio_Value(document.formIA.intra31),
                    intra32:Radio_Value(document.formIA.intra32),
                    intra33:Radio_Value(document.formIA.intra33),
                    intra34:Radio_Value(document.formIA.intra34),
                    intra35:Radio_Value(document.formIA.intra35),
                    intra36:Radio_Value(document.formIA.intra36),
                    intra37:Radio_Value(document.formIA.intra37),
                    intra38:Radio_Value(document.formIA.intra38),
                    intra39:Radio_Value(document.formIA.intra39),
                    intra40:Radio_Value(document.formIA.intra40),
                    intra41:Radio_Value(document.formIA.intra41),
                    intra42:Radio_Value(document.formIA.intra42),
                    intra43:Radio_Value(document.formIA.intra43),
                    intra44:Radio_Value(document.formIA.intra44),
                    intra45:Radio_Value(document.formIA.intra45),
                    intra46:Radio_Value(document.formIA.intra46),
                    intra47:Radio_Value(document.formIA.intra47),
                    intra48:Radio_Value(document.formIA.intra48),
                    intra49:Radio_Value(document.formIA.intra49),
                    intra50:Radio_Value(document.formIA.intra50),
                    intra51:Radio_Value(document.formIA.intra51),
                    intra52:Radio_Value(document.formIA.intra52),
                    intra53:Radio_Value(document.formIA.intra53),
                    intra54:Radio_Value(document.formIA.intra54),
                    intra55:Radio_Value(document.formIA.intra55),
                    intra56:Radio_Value(document.formIA.intra56),
                    intra57:Radio_Value(document.formIA.intra57),
                    intra58:Radio_Value(document.formIA.intra58),
                    intra59:Radio_Value(document.formIA.intra59),
                    intra60:Radio_Value(document.formIA.intra60),
                    intra61:Radio_Value(document.formIA.intra61),
                    intra62:Radio_Value(document.formIA.intra62),
                    intra63:Radio_Value(document.formIA.intra63),
                    intra64:Radio_Value(document.formIA.intra64),
                    intra65:Radio_Value(document.formIA.intra65),
                    intra66:Radio_Value(document.formIA.intra66),
                    intra67:Radio_Value(document.formIA.intra67),
                    intra68:Radio_Value(document.formIA.intra68),
                    intra69:Radio_Value(document.formIA.intra69),
                    intra70:Radio_Value(document.formIA.intra70),
                    intra71:Radio_Value(document.formIA.intra71),
                    intra72:Radio_Value(document.formIA.intra72),
                    intra73:Radio_Value(document.formIA.intra73),
                    intra74:Radio_Value(document.formIA.intra74),
                    intra75:Radio_Value(document.formIA.intra75),
                    intra76:Radio_Value(document.formIA.intra76),
                    intra77:Radio_Value(document.formIA.intra77),
                    intra78:Radio_Value(document.formIA.intra78),
                    intra79:Radio_Value(document.formIA.intra79),
                    intra80:Radio_Value(document.formIA.intra80),
                    intra81:Radio_Value(document.formIA.intra81),
                    intra82:Radio_Value(document.formIA.intra82),
                    intra83:Radio_Value(document.formIA.intra83),
                    intra84:Radio_Value(document.formIA.intra84),
                    intra85:Radio_Value(document.formIA.intra85),
                    intra86:Radio_Value(document.formIA.intra86),
                    intra87:Radio_Value(document.formIA.intra87),
                    intra88:Radio_Value(document.formIA.intra88),
                    intra89:Radio_Value(document.formIA.intra89),
                    intra90:Radio_Value(document.formIA.intra90),
                    intra91:Radio_Value(document.formIA.intra91),
                    intra92:Radio_Value(document.formIA.intra92),
                    intra93:Radio_Value(document.formIA.intra93),
                    intra94:Radio_Value(document.formIA.intra94),
                    intra95:Radio_Value(document.formIA.intra95),
                    intra96:Radio_Value(document.formIA.intra96),
                    intra97:Radio_Value(document.formIA.intra97),
                    intra98:Radio_Value(document.formIA.intra98),
                    intra99:Radio_Value(document.formIA.intra99),
                    intra100:Radio_Value(document.formIA.intra100),
                    intra101:Radio_Value(document.formIA.intra101),
                    intra102:Radio_Value(document.formIA.intra102),
                    intra103:Radio_Value(document.formIA.intra103),
                    intra104:Radio_Value(document.formIA.intra104),
                    intra105:Radio_Value(document.formIA.intra105),
                    intra106:Radio_Value(document.formIA.intra106),
                    intra107:Radio_Value(document.formIA.intra107),
                    intra108:Radio_Value(document.formIA.intra108),
                    intra109:Radio_Value(document.formIA.intra109),
                    intra110:Radio_Value(document.formIA.intra110),
                    intra111:Radio_Value(document.formIA.intra111),
                    intra112:Radio_Value(document.formIA.intra112),
                    intra113:Radio_Value(document.formIA.intra113),
                    intra114:Radio_Value(document.formIA.intra114),
                    intra115:Radio_Value(document.formIA.intra115),
                    intra116:Radio_Value(document.formIA.intra116),
                    intra117:Radio_Value(document.formIA.intra117),
                    intra118:Radio_Value(document.formIA.intra118),
                    intra119:Radio_Value(document.formIA.intra119),
                    intra120:Radio_Value(document.formIA.intra120),
                    intra121:Radio_Value(document.formIA.intra121),
                    intra122:Radio_Value(document.formIA.intra122),
                    intra123:Radio_Value(document.formIA.intra123),
            };
            const url = '../intraA.php';
                $.post(url,  postDataIA, (response) => {
                    $("#costumModal3").modal("hide");
                    document.formIA.reset();
                    muestra_oculta1('mostrar1');
                    muestra_oculta2('mostrar2');
                    MyFunctionE();
                    existe();
            });
        });
        $("#botonIB").click(function (event) {
            event.preventDefault();
            var idintraB = '<?php echo $id ?>';
            var sumaextrab = $('#suma_extra2').val();
            const postDataIB = {
                idintraB: idintraB,
                sumaextrab:sumaextrab,
                    intrab1:Radio_Value(document.formIB.intrab1),
                    intrab2:Radio_Value(document.formIB.intrab2),
                    intrab3:Radio_Value(document.formIB.intrab3),
                    intrab4:Radio_Value(document.formIB.intrab4),
                    intrab5:Radio_Value(document.formIB.intrab5),
                    intrab6:Radio_Value(document.formIB.intrab6),
                    intrab7:Radio_Value(document.formIB.intrab7),
                    intrab8:Radio_Value(document.formIB.intrab8),
                    intrab9:Radio_Value(document.formIB.intrab9),
                    intrab10:Radio_Value(document.formIB.intrab10),
                    intrab11:Radio_Value(document.formIB.intrab11),
                    intrab12:Radio_Value(document.formIB.intrab12),
                    intrab13:Radio_Value(document.formIB.intrab13),
                    intrab14:Radio_Value(document.formIB.intrab14),
                    intrab15:Radio_Value(document.formIB.intrab15),
                    intrab16:Radio_Value(document.formIB.intrab16),
                    intrab17:Radio_Value(document.formIB.intrab17),
                    intrab18:Radio_Value(document.formIB.intrab18),
                    intrab19:Radio_Value(document.formIB.intrab19),
                    intrab20:Radio_Value(document.formIB.intrab20),
                    intrab21:Radio_Value(document.formIB.intrab21),
                    intrab22:Radio_Value(document.formIB.intrab22),
                    intrab23:Radio_Value(document.formIB.intrab23),
                    intrab24:Radio_Value(document.formIB.intrab24),
                    intrab25:Radio_Value(document.formIB.intrab25),
                    intrab26:Radio_Value(document.formIB.intrab26),
                    intrab27:Radio_Value(document.formIB.intrab27),
                    intrab28:Radio_Value(document.formIB.intrab28),
                    intrab29:Radio_Value(document.formIB.intrab29),
                    intrab30:Radio_Value(document.formIB.intrab30),
                    intrab31:Radio_Value(document.formIB.intrab31),
                    intrab32:Radio_Value(document.formIB.intrab32),
                    intrab33:Radio_Value(document.formIB.intrab33),
                    intrab34:Radio_Value(document.formIB.intrab34),
                    intrab35:Radio_Value(document.formIB.intrab35),
                    intrab36:Radio_Value(document.formIB.intrab36),
                    intrab37:Radio_Value(document.formIB.intrab37),
                    intrab38:Radio_Value(document.formIB.intrab38),
                    intrab39:Radio_Value(document.formIB.intrab39),
                    intrab40:Radio_Value(document.formIB.intrab40),
                    intrab41:Radio_Value(document.formIB.intrab41),
                    intrab42:Radio_Value(document.formIB.intrab42),
                    intrab43:Radio_Value(document.formIB.intrab43),
                    intrab44:Radio_Value(document.formIB.intrab44),
                    intrab45:Radio_Value(document.formIB.intrab45),
                    intrab46:Radio_Value(document.formIB.intrab46),
                    intrab47:Radio_Value(document.formIB.intrab47),
                    intrab48:Radio_Value(document.formIB.intrab48),
                    intrab49:Radio_Value(document.formIB.intrab49),
                    intrab50:Radio_Value(document.formIB.intrab50),
                    intrab51:Radio_Value(document.formIB.intrab51),
                    intrab52:Radio_Value(document.formIB.intrab52),
                    intrab53:Radio_Value(document.formIB.intrab53),
                    intrab54:Radio_Value(document.formIB.intrab54),
                    intrab55:Radio_Value(document.formIB.intrab55),
                    intrab56:Radio_Value(document.formIB.intrab56),
                    intrab57:Radio_Value(document.formIB.intrab57),
                    intrab58:Radio_Value(document.formIB.intrab58),
                    intrab59:Radio_Value(document.formIB.intrab59),
                    intrab60:Radio_Value(document.formIB.intrab60),
                    intrab61:Radio_Value(document.formIB.intrab61),
                    intrab62:Radio_Value(document.formIB.intrab62),
                    intrab63:Radio_Value(document.formIB.intrab63),
                    intrab64:Radio_Value(document.formIB.intrab64),
                    intrab65:Radio_Value(document.formIB.intrab65),
                    intrab66:Radio_Value(document.formIB.intrab66),
                    intrab67:Radio_Value(document.formIB.intrab67),
                    intrab68:Radio_Value(document.formIB.intrab68),
                    intrab69:Radio_Value(document.formIB.intrab69),
                    intrab70:Radio_Value(document.formIB.intrab70),
                    intrab71:Radio_Value(document.formIB.intrab71),
                    intrab72:Radio_Value(document.formIB.intrab72),
                    intrab73:Radio_Value(document.formIB.intrab73),
                    intrab74:Radio_Value(document.formIB.intrab74),
                    intrab75:Radio_Value(document.formIB.intrab75),
                    intrab76:Radio_Value(document.formIB.intrab76),
                    intrab77:Radio_Value(document.formIB.intrab77),
                    intrab78:Radio_Value(document.formIB.intrab78),
                    intrab79:Radio_Value(document.formIB.intrab79),
                    intrab80:Radio_Value(document.formIB.intrab80),
                    intrab81:Radio_Value(document.formIB.intrab81),
                    intrab82:Radio_Value(document.formIB.intrab82),
                    intrab83:Radio_Value(document.formIB.intrab83),
                    intrab84:Radio_Value(document.formIB.intrab84),
                    intrab85:Radio_Value(document.formIB.intrab85),
                    intrab86:Radio_Value(document.formIB.intrab86),
                    intrab87:Radio_Value(document.formIB.intrab87),
                    intrab88:Radio_Value(document.formIB.intrab88),
                    intrab89:Radio_Value(document.formIB.intrab89),
                    intrab90:Radio_Value(document.formIB.intrab90),
                    intrab91:Radio_Value(document.formIB.intrab91),
                    intrab92:Radio_Value(document.formIB.intrab92),
                    intrab93:Radio_Value(document.formIB.intrab93),
                    intrab94:Radio_Value(document.formIB.intrab94),
                    intrab95:Radio_Value(document.formIB.intrab95),
                    intrab96:Radio_Value(document.formIB.intrab96),
                    intrab97:Radio_Value(document.formIB.intrab97),
            };
            const url = '../intraB.php';
                $.post(url,  postDataIB, (response) => {
                    $("#costumModal4").modal("hide");
                    document.formIB.reset();
                    muestra_oculta3('mostrar3');
                    MyFunctionE()
                    existe();
            });
        });
        $("#botonE").click(function (event) {
            event.preventDefault();
            var idextra = '<?php echo $id ?>';
            var forma = '<?php echo $forma ?>';
            var sumaintra = $('#suma_intra').val();
            const postDataIB = {
                idextra: idextra,
                forma2I:forma,
                sumaintra:sumaintra,
                extra1:Radio_Value(document.formE.extra1),
                extra2:Radio_Value(document.formE.extra2),
                extra3:Radio_Value(document.formE.extra3),
                extra4:Radio_Value(document.formE.extra4),
                extra5:Radio_Value(document.formE.extra5),
                extra6:Radio_Value(document.formE.extra6),
                extra7:Radio_Value(document.formE.extra7),
                extra8:Radio_Value(document.formE.extra8),
                extra9:Radio_Value(document.formE.extra9),
                extra10:Radio_Value(document.formE.extra10),
                extra11:Radio_Value(document.formE.extra11),
                extra12:Radio_Value(document.formE.extra12),
                extra13:Radio_Value(document.formE.extra13),
                extra14:Radio_Value(document.formE.extra14),
                extra15:Radio_Value(document.formE.extra15),
                extra16:Radio_Value(document.formE.extra16),
                extra17:Radio_Value(document.formE.extra17),
                extra18:Radio_Value(document.formE.extra18),
                extra19:Radio_Value(document.formE.extra19),
                extra20:Radio_Value(document.formE.extra20),
                extra21:Radio_Value(document.formE.extra21),
                extra22:Radio_Value(document.formE.extra22),
                extra23:Radio_Value(document.formE.extra23),
                extra24:Radio_Value(document.formE.extra24),
                extra25:Radio_Value(document.formE.extra25),
                extra26:Radio_Value(document.formE.extra26),
                extra27:Radio_Value(document.formE.extra27),
                extra28:Radio_Value(document.formE.extra28),
                extra29:Radio_Value(document.formE.extra29),
                extra30:Radio_Value(document.formE.extra30),
                extra31:Radio_Value(document.formE.extra31),
            };
            const url = '../extra.php';
                $.post(url,  postDataIB, (response) => {
                    $("#costumModal7").modal("hide");
                    document.formE.reset();
                    MyFunctionES()
                    existe();
            });
        });
        $("#botonES").click(function (event) {
            event.preventDefault();
            var idestres = '<?php echo $id ?>';
            var formaES = '<?php echo $forma ?>';
            const postDataIES = {
                idestres: idestres,
                formaES:formaES,
                estres1:Radio_Value(document.formES.estres1),
                estres2:Radio_Value(document.formES.estres2),
                estres3:Radio_Value(document.formES.estres3),
                estres4:Radio_Value(document.formES.estres4),
                estres5:Radio_Value(document.formES.estres5),
                estres6:Radio_Value(document.formES.estres6),
                estres7:Radio_Value(document.formES.estres7),
                estres8:Radio_Value(document.formES.estres8),
                estres9:Radio_Value(document.formES.estres9),
                estres10:Radio_Value(document.formES.estres10),
                estres11:Radio_Value(document.formES.estres11),
                estres12:Radio_Value(document.formES.estres12),
                estres13:Radio_Value(document.formES.estres13),
                estres14:Radio_Value(document.formES.estres14),
                estres15:Radio_Value(document.formES.estres15),
                estres16:Radio_Value(document.formES.estres16),
                estres17:Radio_Value(document.formES.estres17),
                estres18:Radio_Value(document.formES.estres18),
                estres19:Radio_Value(document.formES.estres19),
                estres20:Radio_Value(document.formES.estres20),
                estres21:Radio_Value(document.formES.estres21),
                estres22:Radio_Value(document.formES.estres22),
                estres23:Radio_Value(document.formES.estres23),
                estres24:Radio_Value(document.formES.estres24),
                estres25:Radio_Value(document.formES.estres25),
                estres26:Radio_Value(document.formES.estres26),
                estres27:Radio_Value(document.formES.estres27),
                estres28:Radio_Value(document.formES.estres28),
                estres29:Radio_Value(document.formES.estres29),
                estres30:Radio_Value(document.formES.estres30),
                estres31:Radio_Value(document.formES.estres31),
            };
            const url = '../estres.php';
                $.post(url, postDataIES, (response) => {
                    $("#costumModal9").modal("hide");
                    document.formES.reset();
                    $("#costumModal11").modal("show");
                    existe();
            });
        });
    });
    $("#radio1111").click(function (event) {
        document.getElementById("terminos_si").value = 1;
    });
    $("#radio2222").click(function (event) {
        document.getElementById("terminos_si").value = 0;
    });
    $("#boton_terminos").click(function (event) {
        event.preventDefault();

    }); 
    $("#boton_salir_no").click(function (event) {
        event.preventDefault();
 
    }); 
    function consentimiento() {
        $("#costumModal").modal("show");
    }
    $(document).ready(function() {
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
         //Exportar PDF        
        $('.boton_consentimiento').click(function() {
            var fG = new Date();
            var fM = fG.getMonth()+1;
            var fG3 = (fG.getDate() + "/" + fM + "/" + fG.getFullYear());
            var doc = new jsPDF('p', 'pt', 'letter');
            doc.setFontSize(10);
            doc.setFontType("normal");
            doc.text(50,90, "Yo, <?php echo $Nombre .' '.$Apellido1.' '.$Apellido2.', '.$identificado ?> con cédula de ciudadanía No. <?php echo $Cedula ?>, declaro haber sido plenamente <?php echo $informado ?> sobre el proceso de evaluación de los Factores de Riesgo Psicosocial que adelantará la CORPORACION IPS CEDISALUD, en cumplimiento de la Resolución 2404 de 2019, en la cual consta lo siguiente:      ", {maxWidth: 510,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,155, "1. La evaluación tiene como objetivo la identificar y valorar los factores de riesgo psicosocial y sus posibles efectos sobre mi salud y/o desempeño, con el fin de establecer Planes de Intervención que respondan a las características y necesidades detectadas en los empleados de la entidad.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,200, "2. La metodología de evaluación consiste en la aplicación de 4 instrumentos de medición de los factores de riesgo psicosocial debidamente validados para la población trabajadora colombiana, los cuales son:", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(80,230, 'Ficha de datos generales.');
            var img = new Image()
            img.src = '../imagine/menos.png'
            doc.addImage(img, 'png', 70, 225, 6, 3);
            doc.text(80,245, 'Cuestionario de factores de riesgo psicosocial intralaboral.');
            var img = new Image()
            img.src = '../imagine/menos.png';
            doc.addImage(img, 'png', 70, 240, 6, 3);
            doc.text(80,260, 'Cuestionario de factores de riesgo psicosocial extralaboral.');
            var img = new Image()
            img.src = '../imagine/menos.png';
            doc.addImage(img, 'png', 70, 255, 6, 3);
            doc.text(80,275, 'Cuestionario para la evaluación del estrés.');
            var img = new Image()
            img.src = '../imagine/menos.png';
            doc.addImage(img, 'png', 70, 270, 6, 3);
            doc.text(70,290, "3. Los resultados obtenidos serán presentados al área encargada de SEGURIDAD Y SALUD EN EL TRABAJO en la empresa <?php echo $Empresa ?>, mediante un informe descriptivo y estadístico de la población participante, en el que se expondrá de manera general los factores con mayor impacto en la mencionada población.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,350, "4. La información individual utilizada para la presente evaluación será manejada con absoluta confidencialidad y será usada exclusivamente para los fines inherentes a la Salud Ocupacional. La misma, será revelada únicamente con mi consentimiento o el de mi representante legal, excepto en aquellas circunstancias particulares en que no hacerlo represente un evidente daño para mí o para otros.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            /*doc.text(70,410, "5. Mi participación en esta evaluación es estrictamente voluntaria; es decir que yo puedo libremente decidir participar en el proceso o rehusarme a hacerlo, sin que esta decisión represente ningún perjuicio para mi persona.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});*/
            doc.text(70,410, "5. La Resolución 1072 de 2015, que establece el Sistema de Gestión de la Seguridad y Salud en el Trabajo (SG-SST), dispone en su Artículo 2.2.4.6.10 las responsabilidades de los trabajadores en esta materia. Entre ellas, se encuentra la obligación de participar en la implementación y ejecución del SG-SST, lo que incluye la identificación, evaluación y control de los riesgos laborales, incluyendo los psicosociales.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,455, "6. Me han informado que puedo formular preguntas en cualquier momento sobre el proceso de evaluación, al profesional que acompaña el proceso (Psicólogo con posgrado en Salud Ocupacional y licencia vigente).", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,485, "7. En el evento en que el profesional a cargo lo requiera, podrá contactarme por vía telefónica o correo electrónico.", {maxWidth: 450,align:'justify', lineHeightFactor: 1.5});
            doc.text(50,525, "Con base en la información que me han suministrado sobre el proceso de evaluación de los factores psicosociales, declaro libremente que he leído y entendido completamente lo referente al mismo (objetivos, metodología, tratamiento de la información, informes de resultados, participación voluntaria). De igual manera declaro que conozco mi derecho a formular las preguntas que me surjan antes, durante y/o después del proceso de evaluación, con el fin de aclarar lo pertinente.", {maxWidth: 510,align:'justify', lineHeightFactor: 1.5});
            doc.text(50,615, "Teniendo en cuenta lo anterior, expreso libremente mi voluntad de: ", {maxWidth: 450,align:'justify', lineHeightFactor: 1.5});
            doc.setTextColor(195, 87, 9);
            doc.setFontType("italic");
            doc.setFontSize(9);
            doc.text(50,635, "(Marque una X en el recuadro que corresponda, según su decisión y a continuación registre sus datos)", {maxWidth: 450,align:'justify', lineHeightFactor: 1.5});
            doc.setFontSize(10);
            doc.setTextColor(0,0,0);
            doc.text(100,660, "SI participar en el proceso de evaluación de factores de riesgo psicosocial", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            doc.text(350,660, "NO participar en el proceso de evaluación de factores de riesgo psicosocial", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            var img = new Image();
            img.src = '../imagine/cuadro.png';
            doc.addImage(img, 'png', 70, 655, 20, 20);
            var img = new Image();
            img.src = '../imagine/cuadro.png';
            doc.addImage(img, 'png', 320, 655, 20, 20);
            doc.setFontType("bold");
            doc.text(70,720, "Documento de identificación:", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            doc.text(435,730, "Firma", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            doc.setLineWidth(1); 
            doc.setDrawColor(51, 51, 51);
            doc.line(220, 720, 350, 720);
            doc.setDrawColor(51, 51, 51);
            doc.line(380, 720, 520, 720);
            const pageCount = doc.internal.getNumberOfPages();
            for(var i = 1; i <= pageCount; i++) {
                doc.setPage(i);
                var columns = ['','',''];
                var data = [['         ', '         \n\n\n           ','        ']];
                doc.autoTable(columns,data, {margin:{ top: -5, right: 70, left: 70 },  
                styles: {fontStyle:'normal', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[153, 153, 153], lineWidth:0, lineColor:false, fillColor:false}, 
                columnStyles: {0: {lineColor:[51, 51, 51], lineWidth:0.2, fillColor:false}, 1:{textColor:[153, 153, 153], fontSize:12, font: 'helvetica', fontStyle:'normal', halign: 'center', lineColor:[51, 51, 51], lineWidth:0.2, fillColor:false}, 2:{textColor:[153, 153, 153], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', lineColor:[51, 51, 51], lineWidth:0.2, fillColor:false}}});
                doc.setLineWidth(0.2); 
                doc.setDrawColor(51, 51, 51);
                doc.line(171.5, 45, 541.8, 45);
                var img = new Image();
                img.src = '../imagine/logo.png';
                doc.addImage(img, 'png', 80, 10, 80, 70);
                doc.setTextColor(153, 153, 153);
                doc.setFontSize(11);
                doc.setFontType("normal");
                doc.myText('CONSENTIMIENTO INFORMADO',{align: "center"},0,30);
                doc.myText('Batería de Riesgo Psicosocial - Forma A y B',{align: "center"},0,42);
                doc.setTextColor(77,77,77);
                var empresa = '<?php echo $Empresa ?>';
                doc.myText(empresa,{align: "center"},0,63);
                doc.setFontSize(11);
                doc.setTextColor(153, 153, 153);
                doc.myText(fG3,{align: "left"},465,36);
                doc.text('Pág. ' + String(i) + ' de ' + String(pageCount),460,63,null,null,"left");
            }
            doc.save('doc.pdf'); 
        });
    });
    function Radio_Value(ctrl) {
        for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked) return ctrl[i].value;
    }
    $(document).on('change', '.termin', (e) => {
        var valor = Radio_Value(document.form_termin.termin);
        var id = '<?php echo $id ?>';
        const postData = {
            valor: valor,
            id: id,
        };
        const url = '../terminos_psicosocial.php';
           $.post(url,  postData, (response) => {
          
        });
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
    
    (function() { // Comenzamos una funcion auto-ejecutable
	window.requestAnimFrame = (function (callback) {
		return window.requestAnimationFrame ||
					window.webkitRequestAnimationFrame ||
					window.mozRequestAnimationFrame ||
					window.oRequestAnimationFrame ||
					window.msRequestAnimaitonFrame ||
					function (callback) {
					 	window.setTimeout(callback, 1000/60);
            // Retrasa la ejecucion de la funcion para mejorar la experiencia
					};
	})();
	var canvas = document.getElementById("draw-canvas");
	var ctx = canvas.getContext("2d");
	var drawText = document.getElementById("draw-dataUrl");
	var drawImage = document.getElementById("draw-image");
	var clearBtn = document.getElementById("draw-clearBtn");
	var submitBtn = document.getElementById("draw-submitBtn");
	var submitBtn2 = document.getElementById("draw-submitBtn2");
	clearBtn.addEventListener("click", function (e) {
		// Definimos que pasa cuando el boton draw-clearBtn es pulsado
		clearCanvas();
		drawImage.setAttribute("src", "");
	}, false);


	submitBtn.addEventListener("click", function (e) {
	e.preventDefault();
	if (document.form_termin.radio1111.checked) {
            var id_terminos = '<?php echo $id ?>';
            const postData = {
                id_terminos: id_terminos,
                terminos_si:1,
            };
            const url = '../consentimiento.php';
                $.post(url, postData, (response) => {
                    $("#costumModal").modal("hide");
                   $("#costumModal12").modal("show");
                    var video=document.getElementById('video_'); 
                    video.play();
            });
        } else {
            alert("Para continuar, por favor marque la casilla de confirmación SI");
            document.form.termin.focus();
            return false;
    }
	$('#content').html('<div class="load"></div>');
	var dataUrl = canvas.toDataURL();
	drawText.innerHTML = dataUrl;
    var doc = new jsPDF('p', 'pt', 'letter');
    var img = new Image();
    
     var fG = new Date();
            var fM = fG.getMonth()+1;
            var fG3 = (fG.getDate() + "/" + fM + "/" + fG.getFullYear());
            var doc = new jsPDF('p', 'pt', 'letter');
            doc.setFontSize(10);
            doc.setFontType("normal");
            doc.text(50,90, "Yo, <?php echo $Nombre .' '.$Apellido1.' '.$Apellido2.', '.$identificado ?> con cédula de ciudadanía No. <?php echo $Cedula ?>, declaro haber sido plenamente <?php echo $informado ?> sobre el proceso de evaluación de los Factores de Riesgo Psicosocial que adelantará SERVICIOS DE SALUD IPS CEDISALUD SAS NIT 901334492-2, en cumplimiento de la Resolución 2404 de 2019, en la cual consta lo siguiente:      ", {maxWidth: 510,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,155, "1. La evaluación tiene como objetivo la identificar y valorar los factores de riesgo psicosocial y sus posibles efectos sobre mi salud y/o desempeño, con el fin de establecer Planes de Intervención que respondan a las características y necesidades detectadas en los empleados de la entidad.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,200, "2. La metodología de evaluación consiste en la aplicación de 4 instrumentos de medición de los factores de riesgo psicosocial debidamente validados para la población trabajadora colombiana, los cuales son:", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(80,230, 'Ficha de datos generales.');
            var img = new Image()
            img.src = '../imagine/menos.png'
            doc.addImage(img, 'png', 70, 225, 6, 3);
            doc.text(80,245, 'Cuestionario de factores de riesgo psicosocial intralaboral.');
            var img = new Image()
            img.src = '../imagine/menos.png';
            doc.addImage(img, 'png', 70, 240, 6, 3);
            doc.text(80,260, 'Cuestionario de factores de riesgo psicosocial extralaboral.');
            var img = new Image()
            img.src = '../imagine/menos.png';
            doc.addImage(img, 'png', 70, 255, 6, 3);
            doc.text(80,275, 'Cuestionario para la evaluación del estrés.');
            var img = new Image()
            img.src = '../imagine/menos.png';
            doc.addImage(img, 'png', 70, 270, 6, 3);
            doc.text(70,290, "3. Los resultados obtenidos serán presentados al área encargada de SEGURIDAD Y SALUD EN EL TRABAJO en la empresa <?php echo $Empresa ?>, mediante un informe descriptivo y estadístico de la población participante, en el que se expondrá de manera general los factores con mayor impacto en la mencionada población.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,350, "4. La información individual utilizada para la presente evaluación será manejada con absoluta confidencialidad y será usada exclusivamente para los fines inherentes a la seguridad y salud en el trabajo. La misma, será revelada únicamente con mi consentimiento o el de mi representante legal, excepto en aquellas circunstancias particulares en que no hacerlo represente un evidente daño para mí o para otros.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,410, "5. Mi participación en esta evaluación es estrictamente voluntaria; es decir que yo puedo libremente decidir participar en el proceso o rehusarme a hacerlo, sin que esta decisión represente ningún perjuicio para mi persona.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,455, "6. Me han informado que puedo formular preguntas en cualquier momento sobre el proceso de evaluación, al profesional que acompaña el proceso (Psicólogo con posgrado en Salud Ocupacional y licencia vigente).", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,485, "7. En el evento en que el profesional a cargo lo requiera, podrá contactarme por vía telefónica o correo electrónico.", {maxWidth: 450,align:'justify', lineHeightFactor: 1.5});
            doc.text(50,525, "Con base en la información que me han suministrado sobre el proceso de evaluación de los factores psicosociales, declaro libremente que he leído y entendido completamente lo referente al mismo (objetivos, metodología, tratamiento de la información, informes de resultados, participación voluntaria). De igual manera declaro que conozco mi derecho a formular las preguntas que me surjan antes, durante y/o después del proceso de evaluación, con el fin de aclarar lo pertinente.", {maxWidth: 510,align:'justify', lineHeightFactor: 1.5});
            doc.text(50,615, "Teniendo en cuenta lo anterior, expreso libremente mi voluntad de: ", {maxWidth: 450,align:'justify', lineHeightFactor: 1.5});
            doc.setTextColor(195, 87, 9);
            doc.setFontType("italic");
            doc.setFontSize(9);
            doc.text(50,635, "(Marque una X en el recuadro que corresponda, según su decisión y a continuación registre sus datos)", {maxWidth: 450,align:'justify', lineHeightFactor: 1.5});
            doc.setFontSize(10);
            doc.setTextColor(0,0,0);
            doc.text(100,660, "SI participar en el proceso de evaluación de factores de riesgo psicosocial", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            doc.text(350,660, "NO participar en el proceso de evaluación de factores de riesgo psicosocial", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            var img = new Image();
            img.src = '../imagine/cuadro.png';
            doc.addImage(img, 'png', 70, 655, 20, 20);
            var img = new Image();
            img.src = '../imagine/cuadro.png';
            doc.addImage(img, 'png', 320, 655, 20, 20);
            
            doc.setFontSize(20);
            doc.setFontType("bold");
            doc.text(73,673, "X", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            
            /*doc.setFontSize(20);
            doc.setFontType("bold");
            doc.text(323,673, "X", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});*/
            
            
            doc.setFontSize(12);
            doc.text(70,740, "Documento de identificación:", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            doc.text(244,740, "<?php echo $Cedula ?>", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            doc.text(435,750, "Firma", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            doc.setLineWidth(1); 
            doc.setDrawColor(51, 51, 51);
            doc.line(380, 740, 520, 740);
   
            drawImage.setAttribute("src", dataUrl);
            doc.addImage(drawImage,'PNG', 380, 678, 120, 70);
            
            const pageCount = doc.internal.getNumberOfPages();
            for(var i = 1; i <= pageCount; i++) {
                doc.setPage(i);
                var columns = ['','',''];
                var data = [['         ', '         \n\n\n           ','        ']];
                doc.autoTable(columns,data, {margin:{ top: -5, right: 70, left: 70 },  
                styles: {fontStyle:'normal', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[153, 153, 153], lineWidth:0, lineColor:false, fillColor:false}, 
                columnStyles: {0: {lineColor:[51, 51, 51], lineWidth:0.2, fillColor:false}, 1:{textColor:[153, 153, 153], fontSize:12, font: 'helvetica', fontStyle:'normal', halign: 'center', lineColor:[51, 51, 51], lineWidth:0.2, fillColor:false}, 2:{textColor:[153, 153, 153], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', lineColor:[51, 51, 51], lineWidth:0.2, fillColor:false}}});
                doc.setLineWidth(0.2); 
                doc.setDrawColor(51, 51, 51);
                doc.line(171.5, 45, 541.8, 45);
                var img = new Image();
                img.src = '../imagine/logo.png';
                doc.addImage(img, 'png', 80, 10, 80, 70);
                doc.setTextColor(153, 153, 153);
                doc.setFontSize(11);
                doc.setFontType("normal");
                doc.myText('CONSENTIMIENTO INFORMADO',{align: "center"},0,30);
                doc.myText('Batería de Riesgo Psicosocial - Forma A y B',{align: "center"},0,42);
                doc.setTextColor(77,77,77);
                var empresa = '<?php echo $Empresa ?>';
                doc.text(310,58, empresa, {maxWidth:280,align:'center', lineHeightFactor: 1});
                doc.setFontSize(11);
                doc.setTextColor(153, 153, 153);
                doc.myText(fG3,{align: "left"},465,36);
                doc.text('Pág. ' + String(i) + ' de ' + String(pageCount),460,63,null,null,"left");
            }

            //doc.save('<?php echo $Codigo ?>.pdf'); 
            var blob = doc.output('blob');
            var fd = new FormData();
            fd.append('data', blob);
            fd.append('Codigo', '<?php echo $Codigo ?>');
            $.ajax({
               type: 'POST',
               url: '../pdf2.php',
               data: fd,
               processData: false,
               contentType: false
            }).done(function(data) {
                console.log(data)
               //window.location = "consentimiento_info" 
            });
	}, false);
	
	
    submitBtn2.addEventListener("click", function (e) {
    e.preventDefault();
	   var id_terminos = '<?php echo $id ?>';
        const postData = {
            id_terminos: id_terminos,
            terminos_no:0,
        };
        const url = '../consentimiento.php';
        $.post(url, postData, (response) => {
            location.href="https://www.cedisalud.com.co/logout_riesgo";       
        });
	$('#content').html('<div class="load"></div>');
	var dataUrl = canvas.toDataURL();
	drawText.innerHTML = dataUrl;
    var doc = new jsPDF('p', 'pt', 'letter');
    var img = new Image();
    
     var fG = new Date();
            var fM = fG.getMonth()+1;
            var fG3 = (fG.getDate() + "/" + fM + "/" + fG.getFullYear());
            var doc = new jsPDF('p', 'pt', 'letter');
            doc.setFontSize(10);
            doc.setFontType("normal");
            doc.text(50,90, "Yo, <?php echo $Nombre .' '.$Apellido1.' '.$Apellido2.', '.$identificado ?> con cédula de ciudadanía No. <?php echo $Cedula ?>, declaro haber sido plenamente <?php echo $informado ?> sobre el proceso de evaluación de los Factores de Riesgo Psicosocial que adelantará la CORPORACION IPS CEDISALUD, en cumplimiento de la Resolución 2404 de 2019, en la cual consta lo siguiente:      ", {maxWidth: 510,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,155, "1. La evaluación tiene como objetivo la identificar y valorar los factores de riesgo psicosocial y sus posibles efectos sobre mi salud y/o desempeño, con el fin de establecer Planes de Intervención que respondan a las características y necesidades detectadas en los empleados de la entidad.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,200, "2. La metodología de evaluación consiste en la aplicación de 4 instrumentos de medición de los factores de riesgo psicosocial debidamente validados para la población trabajadora colombiana, los cuales son:", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(80,230, 'Ficha de datos generales.');
            var img = new Image()
            img.src = '../imagine/menos.png'
            doc.addImage(img, 'png', 70, 225, 6, 3);
            doc.text(80,245, 'Cuestionario de factores de riesgo psicosocial intralaboral.');
            var img = new Image()
            img.src = '../imagine/menos.png';
            doc.addImage(img, 'png', 70, 240, 6, 3);
            doc.text(80,260, 'Cuestionario de factores de riesgo psicosocial extralaboral.');
            var img = new Image()
            img.src = '../imagine/menos.png';
            doc.addImage(img, 'png', 70, 255, 6, 3);
            doc.text(80,275, 'Cuestionario para la evaluación del estrés.');
            var img = new Image()
            img.src = '../imagine/menos.png';
            doc.addImage(img, 'png', 70, 270, 6, 3);
            doc.text(70,290, "3. Los resultados obtenidos serán presentados al área encargada de SEGURIDAD Y SALUD EN EL TRABAJO en la empresa <?php echo $Empresa ?>, mediante un informe descriptivo y estadístico de la población participante, en el que se expondrá de manera general los factores con mayor impacto en la mencionada población.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,350, "4. La información individual utilizada para la presente evaluación será manejada con absoluta confidencialidad y será usada exclusivamente para los fines inherentes a la Salud Ocupacional. La misma, será revelada únicamente con mi consentimiento o el de mi representante legal, excepto en aquellas circunstancias particulares en que no hacerlo represente un evidente daño para mí o para otros.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,410, "5. Mi participación en esta evaluación es estrictamente voluntaria; es decir que yo puedo libremente decidir participar en el proceso o rehusarme a hacerlo, sin que esta decisión represente ningún perjuicio para mi persona.", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,455, "6. Me han informado que puedo formular preguntas en cualquier momento sobre el proceso de evaluación, al profesional que acompaña el proceso (Psicólogo con posgrado en Salud Ocupacional y licencia vigente).", {maxWidth: 490,align:'justify', lineHeightFactor: 1.5});
            doc.text(70,485, "7. En el evento en que el profesional a cargo lo requiera, podrá contactarme por vía telefónica o correo electrónico.", {maxWidth: 450,align:'justify', lineHeightFactor: 1.5});
            doc.text(50,525, "Con base en la información que me han suministrado sobre el proceso de evaluación de los factores psicosociales, declaro libremente que he leído y entendido completamente lo referente al mismo (objetivos, metodología, tratamiento de la información, informes de resultados, participación voluntaria). De igual manera declaro que conozco mi derecho a formular las preguntas que me surjan antes, durante y/o después del proceso de evaluación, con el fin de aclarar lo pertinente.", {maxWidth: 510,align:'justify', lineHeightFactor: 1.5});
            doc.text(50,615, "Teniendo en cuenta lo anterior, expreso libremente mi voluntad de: ", {maxWidth: 450,align:'justify', lineHeightFactor: 1.5});
            doc.setTextColor(195, 87, 9);
            doc.setFontType("italic");
            doc.setFontSize(9);
            doc.text(50,635, "(Marque una X en el recuadro que corresponda, según su decisión y a continuación registre sus datos)", {maxWidth: 450,align:'justify', lineHeightFactor: 1.5});
            doc.setFontSize(10);
            doc.setTextColor(0,0,0);
            doc.text(100,660, "SI participar en el proceso de evaluación de factores de riesgo psicosocial", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            doc.text(350,660, "NO participar en el proceso de evaluación de factores de riesgo psicosocial", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            var img = new Image();
            img.src = '../imagine/cuadro.png';
            doc.addImage(img, 'png', 70, 655, 20, 20);
            var img = new Image();
            img.src = '../imagine/cuadro.png';
            doc.addImage(img, 'png', 320, 655, 20, 20);
            
            doc.setFontSize(20);
            doc.setFontType("bold");
            doc.text(323,673, "X", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});

            doc.setFontSize(12);
            doc.text(70,740, "Documento de identificación:", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            doc.text(244,740, "<?php echo $Cedula ?>", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            doc.text(435,750, "Firma", {maxWidth:190,align:'justify', lineHeightFactor: 1.5});
            doc.setLineWidth(1); 
            doc.setDrawColor(51, 51, 51);
            doc.line(380, 740, 520, 740);
   
            drawImage.setAttribute("src", dataUrl);
            doc.addImage(drawImage,'PNG', 380, 678, 120, 70);
            
            const pageCount = doc.internal.getNumberOfPages();
            for(var i = 1; i <= pageCount; i++) {
                doc.setPage(i);
                var columns = ['','',''];
                var data = [['         ', '         \n\n\n           ','        ']];
                doc.autoTable(columns,data, {margin:{ top: -5, right: 70, left: 70 },  
                styles: {fontStyle:'normal', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', textColor:[153, 153, 153], lineWidth:0, lineColor:false, fillColor:false}, 
                columnStyles: {0: {lineColor:[51, 51, 51], lineWidth:0.2, fillColor:false}, 1:{textColor:[153, 153, 153], fontSize:12, font: 'helvetica', fontStyle:'normal', halign: 'center', lineColor:[51, 51, 51], lineWidth:0.2, fillColor:false}, 2:{textColor:[153, 153, 153], fontSize:10, font: 'helvetica', fontStyle:'normal', halign: 'center', lineColor:[51, 51, 51], lineWidth:0.2, fillColor:false}}});
                doc.setLineWidth(0.2); 
                doc.setDrawColor(51, 51, 51);
                doc.line(171.5, 45, 541.8, 45);
                var img = new Image();
                img.src = '../imagine/logo.png';
                doc.addImage(img, 'png', 80, 10, 80, 70);
                doc.setTextColor(153, 153, 153);
                doc.setFontSize(11);
                doc.setFontType("normal");
                doc.myText('CONSENTIMIENTO INFORMADO',{align: "center"},0,30);
                doc.myText('Batería de Riesgo Psicosocial - Forma A y B',{align: "center"},0,42);
                doc.setTextColor(77,77,77);
                var empresa = '<?php echo $Empresa ?>';
                doc.myText(empresa,{align: "center"},0,63);
                doc.setFontSize(11);
                doc.setTextColor(153, 153, 153);
                doc.myText(fG3,{align: "left"},465,36);
                doc.text('Pág. ' + String(i) + ' de ' + String(pageCount),460,63,null,null,"left");
            }

             //doc.save('<?php echo $Codigo ?>.pdf'); 
            var blob = doc.output('blob');
            var fd = new FormData();
            fd.append('data', blob);
            fd.append('Codigo', '<?php echo $Codigo ?>');
            $.ajax({
               type: 'POST',
               url: '../pdf2.php',
               data: fd,
               processData: false,
               contentType: false
            }).done(function(data) {
                console.log(data)
               //window.location = "consentimiento_info" 
            }); 
	}, false);
	function getData(rowCount) {
            rowCount = rowCount || 1;
            var data = [];
            for (var j = 1; j <= rowCount; j++) {
                data.push({
                    id: "",
                    tatics: "",
                    tatics2: "",
                });
            }
        return data;
    }
    var getColumns = function () {
            return [
                {title: "", dataKey: "id"},
                {title: "", dataKey: "tatics"},
                {title: "", dataKey: "tatics2"},
            ];
    };

})();

    (function() { // Comenzamos una funcion auto-ejecutable
    	window.requestAnimFrame = (function (callback) {
    		return window.requestAnimationFrame ||
    					window.webkitRequestAnimationFrame ||
    					window.mozRequestAnimationFrame ||
    					window.oRequestAnimationFrame ||
    					window.msRequestAnimaitonFrame ||
    					function (callback) {
    					 	window.setTimeout(callback, 1000/60);
                // Retrasa la ejecucion de la funcion para mejorar la experiencia
    					};
    	})();
    	
    	var canvas = document.getElementById("draw-canvas");
    	var ctx = canvas.getContext("2d");
    	var drawText = document.getElementById("draw-dataUrl");
    	var drawImage = document.getElementById("draw-image");
    	var clearBtn = document.getElementById("draw-clearBtn");
    	var submitBtn = document.getElementById("draw-submitBtn");
    	clearBtn.addEventListener("click", function (e) {
    		clearCanvas();
    		drawImage.setAttribute("src", "");
    	}, false);
    	submitBtn.addEventListener("click", function (e) {
    	var dataUrl = canvas.toDataURL();
        function fixBinary (bin) {
          var length = bin.length;
          var buf = new ArrayBuffer(length);
          var arr = new Uint8Array(buf);
          for (var i = 0; i < length; i++) {
            arr[i] = bin.charCodeAt(i);
          }
          return buf;
        }
        var png = dataUrl.split(',')[1];
        var binary = fixBinary(window.atob(png));// <-- Usamos la fn "fixBinary"
        var the_file = new Blob([binary], {type: 'image/png'});// <-- Sacamos el encode
        var imagen_firma = new File([the_file], '<?php echo $Codigo ?>.png', { type: 'image/png' });
    
        ancho=imagen_firma.size;
            var fd = new FormData();
            fd.append('data', imagen_firma);
            fd.append('Codigo', '<?php echo $Codigo ?>');
            $.ajax({
               type: 'POST',
               url: '../guardar_firma_psicosocial.php',
               data: fd,
               processData: false,
               contentType: false
            }).done(function(data) {
                pdf();
            });}, false);
    
    	var drawing = false;
    	var mousePos = { x:0, y:0 };
    	var lastPos = mousePos;
    	canvas.addEventListener("mousedown", function (e){
    	var punta = document.getElementById("puntero");
    		drawing = true;
    		lastPos = getMousePos(canvas, e);
    	}, false);
    	canvas.addEventListener("mouseup", function (e){
    		drawing = false;
    	}, false);
    	canvas.addEventListener("mousemove", function (e){
    		mousePos = getMousePos(canvas, e);
    	}, false);
    
    	canvas.addEventListener("touchstart", function (e) {
    		mousePos = getTouchPos(canvas, e);
        e.preventDefault();
    		var touch = e.touches[0];
    		var mouseEvent = new MouseEvent("mousedown", {
    			clientX: touch.clientX,
    			clientY: touch.clientY
    		});
    		canvas.dispatchEvent(mouseEvent);
    	}, false);
    	canvas.addEventListener("touchend", function (e) {
        e.preventDefault(); // Prevent scrolling when touching the canvas
    		var mouseEvent = new MouseEvent("mouseup", {});
    		canvas.dispatchEvent(mouseEvent);
    	}, false);
        canvas.addEventListener("touchleave", function (e) {
        e.preventDefault(); // Prevent scrolling when touching the canvas
        var mouseEvent = new MouseEvent("mouseup", {});
        canvas.dispatchEvent(mouseEvent);
        }, false);
    	canvas.addEventListener("touchmove", function (e) {
        e.preventDefault(); // Prevent scrolling when touching the canvas
    		var touch = e.touches[0];
    		var mouseEvent = new MouseEvent("mousemove", {
    			clientX: touch.clientX,
    			clientY: touch.clientY
    		});
    		canvas.dispatchEvent(mouseEvent);
    	}, false);
    	function getMousePos(canvasDom, mouseEvent) {
    		var rect = canvasDom.getBoundingClientRect();
    
    		return {
    			x: mouseEvent.clientX - rect.left,
    			y: mouseEvent.clientY - rect.top
    		};
    	}
    	function getTouchPos(canvasDom, touchEvent) {
    		var rect = canvasDom.getBoundingClientRect();
    		return {
    			x: touchEvent.touches[0].clientX - rect.left, // Popiedad de todo evento Touch
    			y: touchEvent.touches[0].clientY - rect.top
    		};
    	}
    	function renderCanvas() {
    		if (drawing) {
          var punta = document.getElementById("puntero");
          ctx.beginPath();
    			ctx.moveTo(lastPos.x, lastPos.y);
    			ctx.lineTo(mousePos.x, mousePos.y);
        	ctx.lineWidth = punta.value;
    			ctx.stroke();
          ctx.closePath();
    			lastPos = mousePos;
    		}
    	}
    	function clearCanvas() {
    		canvas.width = canvas.width;
    	}
    	(function drawLoop () {
    		requestAnimFrame(drawLoop);
    		renderCanvas();
    	})();
    })();

</script>
</body>
</html>
